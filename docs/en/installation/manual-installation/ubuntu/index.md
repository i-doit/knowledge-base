---
title: Ubuntu 22.04 GNU/Linux
description: i-doit installation auf Ubuntu 22.04
icon: material/ubuntu
#status: new
lang: de
---

In this article we explain in just a few steps which packages need to be installed and configured.

## System Requirements

The general [system requirements](../../system-requirements.md) apply.

When you want to use [Ubuntu Linux](https://www.ubuntu.com/) as operating system, the server version **22.04 LTS "Jammy Jellyfish"** is recommended. In order to find out which version is used you can carry out the following command:

```shell
cat /etc/os-release
```

As system architecture you should use a x86 in 64bit:

```shell
uname -m
```

**x86_64** means 64bit, **i386** or **i686** only 32bit.

## Installation of the Packages

When you want to use the official package repositories, use the following instructions for installation of:

*   the **Apache** web server 2.4
*   the script language **PHP** 8.1
*   the database management system **MariaDB** 10.6 and
*   the caching server **memcached**

```shell
apt update
apt install apache2 libapache2-mod-php mariadb-client mariadb-server memcached unzip sudo moreutils php php-{bcmath,cli,common,curl,gd,imagick,json,ldap,mbstring,memcached,mysql,pgsql,soap,xml,zip}
```

## Configuration

The installed packages for Apache web server, PHP and MariaDB already supply configuration files.<br>
It is recommended to save changed settings in separate files instead of adjusting the already existing configuration files. Otherwise, any differences to the existing files would be pointed out or even overwritten during each package upgrade. The settings of the default configuration are supplemented or overwritten by user-defined settings.

### PHP

First of all, a new file is created and filled with the required settings:

```shell
sudo nano /etc/php/8.1/mods-available/i-doit.ini
```

!!! example "This file contains the following content specified by us. For more information about the parameters, have a look at [PHP.net](https://www.php.net/manual/de/ini.core.php)"

```ini
allow_url_fopen = Yes
file_uploads = On
magic_quotes_gpc = Off
max_execution_time = 300
max_file_uploads = 42
max_input_time = 60
max_input_vars = 10000
memory_limit = 256M
post_max_size = 128M
register_argc_argv = On
register_globals = Off
short_open_tag = On
upload_max_filesize = 128M
display_errors = Off
display_startup_errors = Off
error_reporting = E_ALL & ~E_DEPRECATED & ~E_STRICT
log_errors = On
default_charset = "UTF-8"
default_socket_timeout = 60
date.timezone = Europe/Berlin
session.gc_maxlifetime = 604800
session.cookie_lifetime = 0
mysqli.default_socket = /var/run/mysqld/mysqld.sock
```

The `memory_limit` must be increased if necessary, e.g. for very large reports or extensive documents.<br>
The value (in seconds) of `session.gc_maxlifetime` should be the same or greater than the `Session Timeout` in the [system settings](../system-settings.md) of i-doit.<br>
The `date.timezone` parameter should be adjusted to the local time zone (see [List of supported time zones](http://php.net/manual/en/timezones.php)).<br>
Afterwards, the required PHP modules are activated and the Apache web server is restarted:<br>

```shell
sudo phpenmod i-doit memcached
```

### Apache Webserver

The default VHost is deactivated and a new one is created:

```shell
sudo a2dissite 000-default
sudo nano /etc/apache2/sites-available/i-doit.conf
```

The new VHost configuration is saved in this file:

```shell
<VirtualHost *:80>
        ServerAdmin i-doit@example.net

        DirectoryIndex index.php
        DocumentRoot /var/www/html/
        <Directory /var/www/html/>
                AllowOverride All
                Require all granted
        </Directory>

        LogLevel warn
        ErrorLog ${APACHE_LOG_DIR}/error.log
        CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
```

i-doit includes differing Apache settings in files with the name **.htaccess**. The setting **AllowOverride All** is required so that these settings are taken into account.<br>
With the next step you activate the new VHost and the necessary Apache module **rewrite** and the Apache web server is restarted:

```shell
sudo a2ensite i-doit
sudo a2enmod rewrite
sudo systemctl restart apache2
```

### MariaDB

Only a few steps are necessary to guarantee that MariaDB provides a good performance and safe operation. However, you should pay meticulous attention to details and carry out these steps precisely. This starts with a secure installation and you should follow the recommendations accordingly.<br>
The **root** user should receive a secure password:

```shell
mysql_secure_installation
```

Activate the MariaDB shell so that i-doit is enabled to apply the **root** user during setup:

```shell
sudo mysql -uroot
```

The following SQL statements are now carried out in the MariaDB shell (The 'password' must be replaced by the current password of the 'root' user):

```sql
ALTER USER 'root'@'localhost' IDENTIFIED VIA mysql_native_password USING PASSWORD('password');
FLUSH PRIVILEGES;
EXIT;
```

Afterwards, MariaDB **10.6** is stopped. Now it is important to move files which are not required, otherwise the result would be a significant loss of performance:

```shell
mysql -uroot -p -e"SET GLOBAL innodb_fast_shutdown = 0"
sudo systemctl stop mysql.service
sudo mv /var/lib/mysql/ib_logfile[01] /tmp
```

A new file is created for the deviating settings:

```shell
sudo nano /etc/mysql/mariadb.conf.d/99-i-doit.cnf
```

This file contains the new configuration settings. For an optimal performance you should adapt these settings to the (virtual) hardware:

```shell
[mysqld]
# This is the number 1 setting to look at for any performance optimization
# It is where the data and indexes are cached: having it as large as possible will
# ensure MySQL uses memory and not disks for most read operations.
#
# Typical values are 1G (1-2GB RAM), 5-6G (8GB RAM), 20-25G (32GB RAM), 100-120G (128GB RAM).
innodb_buffer_pool_size = 1G

# Use multiple instances if you have innodb_buffer_pool_size > 10G, 1 every 4GB
innodb_buffer_pool_instances = 1

# Redo log file size, the higher the better.
# MySQL/MariaDB writes two of these log files in a default installation.
innodb_log_file_size = 512M

innodb_sort_buffer_size = 64M
sort_buffer_size = 262144 # default
join_buffer_size = 262144 # default

max_allowed_packet = 128M
max_heap_table_size = 32M
query_cache_min_res_unit = 4096
query_cache_type = 1
query_cache_limit = 5M
query_cache_size = 80M

tmp_table_size = 32M
max_connections = 200
innodb_file_per_table = 1

# Disable this (= 0) if you have only one to two CPU cores, change it to 4 for a quad core.
innodb_thread_concurrency = 0

# Disable this (= 0) if you have slow harddisks
innodb_flush_log_at_trx_commit = 1
innodb_flush_method = O_DIRECT

innodb_lru_scan_depth = 2048
table_definition_cache = 1024
table_open_cache = 2048
# Only if your have MySQL 5.6 or higher, do not use with MariaDB!
#table_open_cache_instances = 4

innodb_stats_on_metadata = 0

sql-mode = ""
```

Finally, MariaDB is restarted:

```shell
sudo systemctl restart mysql.service
```

## Next Step

Now the operating system is prepared and i-doit can be installed.

[Proceed with **Setup**](../setup.md){ .md-button .md-button--primary }
