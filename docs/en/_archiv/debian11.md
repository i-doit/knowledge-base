---
title: Debian 11 GNU/Linux
description: i-doit installation on Debian 11
icon: material/debian
#status: updated
lang: en
search:
  exclude: true
---

We explain in a few steps in this article which packages need to be installed and configured.

!!! warning ""
    When you install Debian, you will eventually reach a "Software selection" dialog, which contains a list of checkboxes to select the software you want to install initially. Here, the "Debian desktop environment" checkbox is already checked. If you uncheck this checkbox and do not check any other desktop environment checkboxes (GNOME, Xfce, etc.), this will result in a GUI-less installation:

    [![Software selection]()]()

## System Requirements

The general [System Requirements]().

This article refers to [**Debian GNU/Linux 11 "bullseye"**](https://debian.org/). To determine which Debian version is being used, this command can be executed on the console:

```shell
cat /etc/debian_version
```

An x86 64-bit system architecture should be used:

```shell
uname -m
```

**x86_64** means 64-bit, **i386** oder **i686** only 32-bit.

## Package Installation

The standard repositories of Debian GNU/Linux already provide all necessary packages to

-   the **Apache** web server 2.4,
-   the scripting language **PHP** 7.4,
-   the database management system **MariaDB** 10.5 und
-   the caching server **memcached**

install:

```shell
sudo apt update
sudo apt install apache2 libapache2-mod-php mariadb-client mariadb-server php php-bcmath php-cli php-common php-curl php-gd php-imagick php-json php-ldap php-mbstring php-memcached php-mysql php-pgsql php-soap php-xml php-zip memcached unzip sudo moreutils
```

## Configuration

The installed packages for Apache Webserver, PHP und MariaDB already come with configuration files. It is recommended to save custom settings in separate files instead of modifying the existing configuration files. With each package upgrade, the custom settings would be flagged or overwritten. The default configuration settings are supplemented or overwritten by the custom ones.

### PHP

First, a new file is created and filled with the required settings:

```shell
sudo nano /etc/php/7.4/mods-available/i-doit.ini
```

This file receives the following content:

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

The value (in seconds) of **session.gc_maxlifetime** should be greater than or equal to the **Session Timeout** in den [Systemeinstellungen]() of i-doit.

The parameter **date.timezone** should be adjusted to the local time zone (siehe [Liste unterstützter Zeitzonen]()).

Then the beis necessaryten PHP-Module aktiviert und der Apache Webserver neu gestartet:

```shell
sudo phpenmod i-doit
sudo phpenmod memcached
sudo systemctl restart apache2.service
```

### Apache Web Server

The default VHost is disabled and a new one is created:

```shell
sudo a2dissite 000-default
sudo nano /etc/apache2/sites-available/i-doit.conf
```

The new VHost configuration is saved in this file:

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

i-doit provides custom Apache settings in files named **.htaccess** mit. For these settings to be considered, the setting **AllowOverride All** is necessary.

In the next step werden der neue VHost und das is necessarye Apache-Modul **rewrite** are activated and the Apache web server is restarted:

```shell
sudo a2ensite i-doit
sudo a2enmod rewrite
sudo systemctl restart apache2.service
```

### MariaDB

Damit MariaDB eine gute Performance liefert und sicher betrieben werden kann, sind einige, wenige Schritte is necessary, die penibel ausgeführt werden sollten. This starts with a secure installation. The recommendations should be followed. The user **root** should receive a secure password:

```shell
sudo mysql_secure_installation
```

So that i-doit can use the user **root** during setup, open the MariaDB shell:

```shell
sudo mysql -uroot
```

!!! attention "Password for the MariaDB root user"

    If the MariaDB root user does not yet have a password, database access will no longer work after executing the ALTER USER statement. Therefore, the MariaDB root user should be assigned a password beforehand:

        ```sql
        SET PASSWORD for 'root'@'localhost' = PASSWORD ('passwort)';
        ```

In the MariaDB shell, the following SQL statements are now executed (The 'password' must be replaced with the current password of the 'root' user) :

```sql
ALTER USER 'root'@'localhost' IDENTIFIED VIA mysql_native_password USING PASSWORD('passwort');
FLUSH PRIVILEGES;
EXIT;
```

!!! note "Using MariaDB 10.3 and below"

    Up to MariaDB version 10.3, the UPDATE statement in the user table is supported.

    ```sql
    UPDATE mysql.user SET plugin = 'mysql_native_password' WHERE User = 'root';
    ```

Then MariaDB is stopped. Wichtig ist hierbei das Verschieben von nicht beis necessaryten Dateien (otherwise there is a risk of significant performance loss):

```shell
mysql -uroot -p -e"SET GLOBAL innodb_fast_shutdown = 0"
sudo systemctl stop mysql.service
sudo mv /var/lib/mysql/ib_logfile[01] /tmp
```

A new file is created for the custom configuration settings:

```shell
sudo nano /etc/mysql/mariadb.conf.d/99-i-doit.cnf
```

This file contains the new configuration settings. For optimal performance, these settings should be adjusted to the (virtual) hardware:

```ini
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

Finally, MariaDB gestartet:

```shell
sudo systemctl start mysql.service
```

## Next Step

The operating system is now prepared so that i-doit can be installed:

[Continue to *Setup*](){ .md-button .md-button--primary }
