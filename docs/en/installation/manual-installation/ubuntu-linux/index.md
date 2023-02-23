# Unbuntu Linux

In this article we explain in just a few steps which packages need to be installed and configured.

### System Requirements

The general [system requirements](../../system-requirements.md) apply.

When you want to use [Ubuntu Linux](https://www.ubuntu.com/) as operating system, the server version **18.04 LTS "bionic"** is recommended. In order to find out which version is used you can carry out the following command:

```shell
cat /etc/os-release
```

As system architecture you should use a x86 in 64bit:

```shell
uname -m
```

**x86_64** means 64bit, **i386** or **i686** only 32bit.

## Installation of the Packages

When you want to use the default package repositories, use the following instructions for installation of:

*   the **Apache** web server 2.4
*   the script language **PHP** 7.4
*   the database management system **MariaDB** 10.5 and
*   the caching server **memcached**

However, **18.04 LTS "Bionic Beaver"** only has outdated packages that do not meet the [System Requirements](../../system-requirements.md).  
It is therefore necessary to install up-to-date packages via additional repositories. **Caution**: Third-party repositories can endanger the stability of the operating system.

For PHP 7.4 we use the Personal Package Archive from ondrej:

!!! note "Notice"

    Additional [third-party sources](https://help.ubuntu.com/community/Repositories/Ubuntu) can endanger the system.

    * * *

    A PPA does not necessarily support all Ubuntu versions. For more information, see the [PPA description](https://launchpad.net/~ondrej/+archive/ubuntu/php) of the owner/team [ondrej](https://launchpad.net/~ondrej).

To add the repository we use:

```shell
sudo add-apt-repository ppa:ondrej/php
sudo apt update
```

The installation of the PHP packages is done afterwards:

```shell
sudo apt-get install \
apache2 libapache2-mod-php7.4 \
php7.4-bcmath php7.4-cli php7.4-common php7.4-curl php7.4-gd php7.4-json \
php7.4-ldap php7.4-mbstring php7.4-mysql php7.4-opcache php7.4-pgsql \
php7.4-soap php7.4-xml php7.4-zip \
php7.4-imagick php7.4-memcached \
memcached unzip moreutils
```

Furthermore, Ubuntu 18.04 only provides outdated distribution packages for MariaDB. We therefore resort to the [official third-party repository of MariaDB](https://mariadb.org/download/?t=repo-config&d=18.04+LTS+%22bionic%22&v=10.5&r_m=timo):

```shell
sudo apt-get install software-properties-common dirmngr apt-transport-https
sudo apt-key adv --fetch-keys 'https://mariadb.org/mariadb_release_signing_key.asc'
sudo add-apt-repository 'deb [arch=amd64,arm64,ppc64el] https://mirror.dogado.de/mariadb/repo/10.5/ubuntu bionic main'
```

Once the key is imported and the repository is added, you can install MariaDB 10.5 from the MariaDB repository as well:

```shell
sudo apt update
sudo apt-get install mariadb-server
```

## Configuration

The installed packages for Apache web server, PHP and MariaDB already supply configuration files. It is recommended to save changed settings in separate files instead of adjusting the already existing configuration files. Otherwise, any differences to the existing files would be pointed out or even overwritten during each package upgrade. The settings of the default configuration are supplemented or overwritten by user-defined settings.

### PHP

First of all, a new file is created and filled with the required settings:

```shell
sudo nano /etc/php/7.4/mods-available/i-doit.ini
```

This file has the following contents:

```shell
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

The value (in seconds) of **session.gc_maxlifetime** should be the same or greater than the **Session Timeout** in the [system settings](../../../system-administration/administration/index.md) of i-doit.

The **date.timezone** parameter should be adjusted to the local time zone (see [List of supported time zones](http://php.net/manual/en/timezones.php)).

Afterwards, the required PHP modules are activated and the Apache web server is restarted:

```shell
sudo phpenmod i-doit
sudo phpenmod memcached
sudo systemctl restart apache2.service
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

i-doit includes differing Apache settings in files with the name **.htaccess**. The setting **AllowOverride All** is required so that these settings are taken into account.

With the next step you activate the new VHost and the necessary Apache module **rewrite** and the Apache web server is restarted:

```shell
sudo chown www-data:www-data -R /var/www/html/
sudo chmod 755 /var/log/apache2
sudo chmod 664 /var/log/apache2/*
sudo a2ensite i-doit
sudo a2enmod rewrite
sudo systemctl restart apache2.service
```

### MariaDB

Only a few steps are necessary to guarantee that MariaDB provides a good performance and safe operation. However, you should pay meticulous attention to details and carry out these steps precisely. This starts with a secure installation and you should follow the recommendations accordingly. The **root**  user should receive a secure password:

```shell
mysql_secure_installation
```

Activate the MariaDB shell so that i-doit is enabled to apply the **root**  user during setup:

```shell
sudo mysql -uroot
```

Change from MariaDB 10.4 and upwards

From MariaDB version 10.4 and up, the UPDATE statement is no longer supported in the user table.

The following SQL statements are now carried out in the MariaDB shell:

```shell
ALTER USER 'root'@'localhost' IDENTIFIED VIA mysql_native_password USING PASSWORD('passwort');
```

Afterwards, MariaDB is stopped. Now it is important to move files which are not required, otherwise the result would be a significant loss of performance:

```shell
mysql -uroot -p -e "SET GLOBAL innodb_fast_shutdown = 0"
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

Finally, MariaDB is started:

```shell
sudo systemctl start mysql.service
```

## Next Step

Now the operating system is prepared and i-doit can be installed.

Proceed with [**Setup** …](../setup.md)
