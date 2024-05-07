# Red Hat Enterprise Linux 8 (RHEL 8)

This article describes which packages need to be installed and configured.

## System requirements

The general [system requirements](../../system-requirements.md) apply.

This article refers to ==RHEL in version 8.x==
To determine which version is used, this command can be executed on the console:

```shell
cat /etc/os-release
```

As system architecture a x86 in 64bit should be used:

```shell
uname -m
```

==x86_64== stands for 64bit, ==i386== or ==i686== only for 32bit.

There are other operating systems that are closely related to RHEL, such as the open replica CentOS and Fedora, which is maintained by Red Hat. However, only RHEL is officially supported.

## Installation of the packages

On a system that is up-to-date

-   the ==Apache== web server 2.4,
-   the script language ==PHP== 7.4,
-   the database management system ==MariaDB== 10.5
-   the caching server ==memcached==

However, the current ==version 8.x of RHEL== only contains obsolete packages that do not meet the system requirements.<br>
It is therefore necessary to install current packages from other repositories.

But be ==careful== as third-repositories could endanger the stability of the operating system!

At first the first packages are installed from the default repositories:

```shell
sudo dnf update
sudo dnf install httpd memcached unzip wget zip
```

For PHP, the current Extra Packages for Enterprise Linux (EPEL) is included:

```shell
sudo rpm --import https://dl.fedoraproject.org/pub/epel/RPM-GPG-KEY-EPEL-8
sudo rpm -Uvh https://dl.fedoraproject.org/pub/epel/epel-release-latest-8.noarch.rpm
```

After the repository has been included, the possible versions are initialized and then the desired version can be activated (we use PHP 7.3 here):

```shell
sudo dnf module list php
sudo dnf module install php:7.4 -y
```

The PHP packages are then installed:

```shell
sudo dnf install php php-bcmath php-cli php-common php-curl php-gd php-json php-ldap php-mysql php-pgsql php-soap php-xml php-zip
```

Furthermore, RHEL only offers outdated distribution packages for MariaDB. Therefore we use the official third party repository of MariaDB:

```shell
sudo nano /etc/yum.repos.d/MariaDB.repo
```

Die Datei erhält folgenden Inhalt:

```shell
# MariaDB 10.5 RHEL repository list
# http://downloads.mariadb.org/mariadb/repositories/
[mariadb]
name = MariaDB
baseurl = http://yum.mariadb.org/10.5/rhel8-amd64
module_hotfixes=1
gpgkey=https://yum.mariadb.org/RPM-GPG-KEY-MariaDB
gpgcheck=1
```

After that the packages are installed (Note: MariaDB needs the additional package boost-program-options for a clean installation):

```shell
sudo dnf install boost-program-options
sudo dnf install MariaDB-server MariaDB-client --disablerepo=AppStream
```

These commands are required to start the Apache web server and MariaDB at boot time:

```shell
sudo systemctl enable httpd.service
sudo systemctl enable mariadb.service
sudo systemctl enable memcached.service
```

Both services are then started:

```shell
sudo systemctl start httpd.service
sudo systemctl start mariadb.service
sudo systemctl start memcached.service
```

Furthermore, the default port 80 of HTTP is allowed through the firewall. This must be restarted after the adjustment:

```shell
sudo firewall-cmd --permanent --add-service=http
sudo systemctl restart firewalld.service
```

## Configuration

The installed packages for Apache Webserver, PHP and MariaDB already come with configuration files. It is recommended to store different settings in separate files instead of adapting the existing configuration files. Each time you upgrade the package, the different settings will be changed or overwritten. The settings of the standard configuration will be supplemented or overwritten by the user-defined ones.

### PHP

First a new file is created and filled with the necessary settings:

```shell
sudo nano /etc/php.d/i-doit.ini
```

This file receives the following content:

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
mysqli.default_socket = /var/lib/mysql/mysql.sock
```

The value (in seconds) of `session.gc_maxlifetime` should be greater than or equal to the `session timeout` in the i-doit system settings.

The parameter `date.timezone` should be adjusted to the local time zone (see [list of supported time zones](http://php.net/manual/en/timezones.php)).

The Apache Web server is then restarted:

```shell
sudo systemctl restart httpd.service
```

### Apache web server

The default vhost is retained and added. A new file is created and edited:

```shell
sudo nano /etc/httpd/conf.d/i-doit.conf
```

In this file the supplementary one is stored:

```shell
DirectoryIndex index.php
DocumentRoot /var/www/html/
<Directory /var/www/html/>
    AllowOverride All
</Directory>
```

i-doit provides different Apache settings in files named ==.htaccess==. In order for these settings to be taken into account, the setting ==AllowOverride All is required==.

The next step is to restart the Apache web server:

```shell
sudo systemctl restart httpd.service
```

For Apache to have read and write permissions in the future installation directory of i-doit, this must be allowed by ==SELinux==:

```shell
sudo chown apache:apache -R /var/www/html
sudo chcon -t httpd_sys_content_t "/var/www/html/" -R
sudo chcon -t httpd_sys_rw_content_t "/var/www/html/" -R
```

### MariaDB

In order for MariaDB to perform well and run safely, there are a few steps that need to be done meticulously. This starts with a secure installation. The recommendations should be followed. The ==root== user should be given a secure password:

```shell
mysql_secure_installation
```

To allow i-doit to use the ==root== user during setup, call the shell of MariaDB:

```shell
sudo mysql -uroot
```

The following SQL statements are now executed in the MariaDB shell

```shell
ALTER USER root@localhost IDENTIFIED VIA mysql_native_password;
FLUSH PRIVILEGES;
EXIT;
```

MariaDB is then stopped. It is important to move unneeded files (otherwise you risk a significant performance loss):

```shell
mysql -uroot -p -e"SET GLOBAL innodb_fast_shutdown = 0"
sudo systemctl stop mariadb.service
sudo mv /var/lib/mysql/ib_logfile[01] /tmp
```

A new file is created for the different configuration settings:

```shell
sudo nano /etc/my.cnf.d/99-i-doit.cnf
```

This file contains the new configuration settings. For optimal performance, these settings should be adapted to the (virtual) hardware:

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
sudo systemctl start mariadb.service
```

## Next Step

The operating system is now prepared so that i-doit can be installed:

[Go to Setup ...](../setup.md)
