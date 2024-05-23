---
title: Debian 12 GNU/Linux
description: i-doit installation on Debian 12
icon: material/debian
status: new
lang: en
---

In this article we explain in just a few steps which packages need to be installed and configured. We use a environment without **desktop** .

!!! warning ""
    When you install Debian, you eventually reach a "Software selection" dialog which has a list of checkboxes to choose the software you want to install initially. This has a "Debian desktop environment" checkbox, pre-ticked; de-selecting that, and leaving all the other desktop environment checkboxes un-ticked (GNOME, Xfce, etc.), will result in a GUI-less installation:

    [![Software selection](../../assets/images/en/installation/manual-installation/debian/gui.png)](../../assets/images/en/installation/manual-installation/debian/gui.png)

## System Requirements

The general [system requirements](../system-requirements.md) apply.

This article refers to [**Debian GNU/Linux 12 "bookworm"**](https://www.debian.org/index.en.html). In order to find out which Debian version is used you can carry out the following command:

```shell
cat /etc/debian_version
```

As system architecture you should use a x86 in 64bit:

```shell
uname -m
```

**x86_64** means 64bit, **i386** or **i686** only 32bit.

## Installation of the Packages

The default package repositories of Debian GNU/Linux already supply the necessary packages to install:

-   the **Apache** web server 2.4
-   the script language **PHP** 8.2
-   the database management system **MariaDB** 10.11 and
-   the caching server **memcached**

```shell
apt update
apt install apache2 libapache2-mod-php mariadb-client mariadb-server memcached unzip sudo moreutils php php-{bcmath,cli,common,curl,gd,imagick,json,ldap,mbstring,memcached,mysql,pgsql,soap,xml,zip}
```

## Configuration

The installed packages for Apache web server, PHP and MariaDB already supply configuration files. It is recommended to save changed settings in separate files instead of adjusting the already existing configuration files. Otherwise, any differences to the existing files would be pointed out or even overwritten during each package upgrade. The settings of the default configuration are supplemented or overwritten by user-defined settings.

### PHP

First of all, a new file is created and filled with the required settings:

```shell
sudo nano /etc/php/8.2/mods-available/i-doit.ini
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
The value (in seconds) of `session.gc_maxlifetime` should be the same or greater than the `Session Timeout` in the [system settings](system-settings.md) of i-doit.<br>
The `date.timezone` parameter should be adjusted to the local time zone (see [List of supported time zones](http://php.net/manual/en/timezones.php)).<br>
Afterwards, the required PHP modules are activated and the Apache web server is restarted:

```shell
sudo phpenmod i-doit memcached
```

### Apache Webserver

The default VHost is deactivated and a new one is created:

```shell
sudo a2dissite 000-default
sudo nano /etc/apache2/sites-available/i-doit.conf
```

!!! example "This file contains the following content specified by us. For more information about the parameters, see [httpd.apache.org](https://httpd.apache.org/docs/2.4/en/mod/core.html)"

```shell
<VirtualHost *:80>
        ServerAdmin i-doit@example.net

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

To ensure that MariaDB delivers good performance and can be operated securely, you should not only follow our instructions, but also inform yourself further. Starting with a secure installation where the recommendations should be followed. In addition, the user **root** should be given a secure password.

```shell
sudo mysql_secure_installation
```

Activate the MariaDB shell so that i-doit is enabled to apply the **root** user during setup:

```shell
sudo mysql -uroot
```

!!! attention annotate "If the MariaDB installation has already been carried out without setting the password, log in via `mysql -u root` and set a password via (1)"
    ```sql
    ALTER USER 'root'@'localhost' IDENTIFIED VIA mysql_native_password USING PASSWORD('YOUR_PASSWORD');
    ```

1. Für mehr Informationen zum Befehl schauen Sie hier -> <https://mariadb.com/kb/en/alter-user/>

The mode for shutting down InnoDB still needs to be changed. The value `0` causes a complete cleanup and a merge of the change buffers to be performed before MariaDB is shut down:

```shell
mysql -uroot -p -e"SET GLOBAL innodb_fast_shutdown = 0"
```

A new file is created for the different configuration settings and our standard configuration is inserted:

```shell
sudo nano /etc/mysql/mariadb.conf.d/99-i-doit.cnf
```

!!! example "This file contains the new configuration settings. For **optimal performance, these settings should be adapted to the (virtual) hardware**. For optimal settings, please refer to [mariadb.com](https://mariadb.com/kb/en/optimization-and-tuning/)"

```ini
[mysqld]
# This is the number 1 setting to look at for any performance optimization
# It is where the data and indexes are cached: having it as large as possible will
# ensure MySQL uses memory and not disks for most read operations.
# See https://mariadb.com/kb/en/innodb-buffer-pool/
# Typical values are 1G (1-2GB RAM), 5-6G (8GB RAM), 20-25G (32GB RAM), 100-120G (128GB RAM).
innodb_buffer_pool_size = 1G
# Redo log file size, the higher the better.
# MySQL/MariaDB writes one of these log files in a default installation.
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
# Disable this (= 0) if you have slow hard disks
innodb_flush_log_at_trx_commit = 1
innodb_flush_method = O_DIRECT
innodb_lru_scan_depth = 2048
table_definition_cache = 1024
table_open_cache = 2048
innodb_stats_on_metadata = 0
# The maximum number of instances is defined by the table_open_cache_instances system variable.
# The default value of the table_open_cache_instances system variable is 8, which is expected to handle up to 100 CPU cores.
# If your system is larger than this, then you may benefit from increasing the value of this system variable.
table_open_cache_instances = 8
sql-mode = ""
```

Finally, MariaDB is restarted:

```shell
sudo systemctl restart mysql.service
```

!!! bug "[Warning] You need to use --log-bin to make --expire-logs-days or --binlog-expire-logs-seconds work."
    If this message appears in the log, simply comment out `expire_logs_days = 10` in the file `/etc/mysql/mariadb.conf.d/50-server.cnf`.
    Bug report for Debian -> <https://salsa.debian.org/mariadb-team/mariadb-server/-/merge_requests/61>

## Next Step

setup.md
Now the operating system is prepared and i-doit can be installed.

[Proceed with **Setup**](setup.md){ .md-button .md-button--primary }
