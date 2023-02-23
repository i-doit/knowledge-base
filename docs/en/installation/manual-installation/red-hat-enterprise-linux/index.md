# Red Hat Enterprise Linux (RHEL)

In this article we explain in just a few steps which packages need to be installed and configured.

System Requirements
-------------------

The general [system requirements](../../system-requirements.md) apply.  

This article refers to **[RHEL](https://www.redhat.com/en) in Version 7.x**. In order to find out which version is used you can carry out the following command:

```shell
cat /etc/os-release
```

As system architecture you should use a x86 in 64bit:

```shell
uname -m
```

**x86_64** means 64bit, **i386** or **i686** only 32bit.

There are other operating systems which are closely related to RHEL, for example  **Fedora**, which is maintained by Red Hat, and **CentOS**. But only RHEL is supported officially.

Installation of the Packages
----------------------------

The following packages are to be installed on a constantly updated system:

*   the **Apache** web server 2.4
*   the script language **PHP** 7.4
*   the database management system **MariaDB** 10.5 and
*   the caching server **memcached**

However, in the latest version 7.x RHEL only has outdated packages, which do not comply with the [system requirements](../../system-requirements.md). For this reason, it is required to install current packages via further repositories.

But be **careful** as third-repositories could endanger the stability of the operating system!

For a start, the first packages are installed from the default repositories:

```shell
sudo yum update
sudo yum install httpd memcached unzip wget zip
```

The [REMI Repository](https://rpms.remirepo.net/) repository is recommended for PHP as it is very popular in the community and kept up to date on a regular basis. If you don't want to risk the Red Hat warranty, you can use EPEL (Extra Packages for Enterprise Linux) as an alternative, this is also pointed out in the [Red Hat KB](https://access.redhat.com/solutions/92263). In this article we show how it works via [REMI Repository](https://rpms.remirepo.net/) and install PHP 7.4:

```shell
sudo rpm --import https://dl.fedoraproject.org/pub/epel/RPM-GPG-KEY-EPEL-7
sudo rpm -Uvh https://dl.fedoraproject.org/pub/epel/epel-release-latest-7.noarch.rpm
sudo rpm --import https://rpms.remirepo.net/RPM-GPG-KEY-remi
sudo rpm -Uvh https://rpms.remirepo.net/enterprise/remi-release-7.rpm
```

Afterwards, the installation of the PHP packages is carried out:

```shell
sudo yum  --enablerepo remi-php74 install \
php-bcmath php-cli php-common php-fpm php-gd php-ldap \
php-mbstring php-mysqlnd php-opcache php-pdo \
php-pecl-memcached php-pgsql php-soap php-xml php-zip
```

RHEL provides only outdated distribution packages for MariaDB. Therefore we refer to the official third-repository of MariaDB:

```shell
sudo nano /etc/yum.repos.d/MariaDB.repo
```

This file has the following contents:

```shell
# MariaDB 10.5 RHEL repository list
# [http://downloads.mariadb.org/mariadb/repositories/](http://downloads.mariadb.org/mariadb/repositories/)
[mariadb]
name = MariaDB
baseurl = http://yum.mariadb.org/10.5/rhel7-amd64
module_hotfixes=1
gpgkey=https://yum.mariadb.org/RPM-GPG-KEY-MariaDB
gpgcheck=1
```

Afterwards, the packages are installed:

```shell
sudo rpm --import https://yum.mariadb.org/RPM-GPG-KEY-MariaDB
sudo yum install MariaDB-server MariaDB-client
```

In order to start Apache Webserver and MariaDB during the boot process, the following commands are necessary:

```shell
sudo systemctl enable httpd.service
sudo systemctl enable mariadb.service
sudo systemctl enable memcached.service
```

Then both services are started:

```shell
sudo systemctl start httpd.service
sudo systemctl start mariadb.service
sudo systemctl start memcached.service
```

The HTTP default port 80 is authorized via the firewall. The firewall has to be restarted after the adjustments have been carried out:

```shell
sudo firewall-cmd --permanent --add-service=http
sudo systemctl restart firewalld.service
```

Configuration
-------------

The installed packages for Apache web server, PHP and MariaDB already supply configuration files. It is recommended to save changed settings in separate files instead of adjusting the already existing configuration files. Otherwise, any differences to the existing files would be pointed out or even overwritten during each package upgrade. The settings of the default configuration are supplemented or overwritten by user-defined settings.

### PHP

First of all, a new file is created and filled with the required settings:

```shell
sudo nano /etc/php.d/i-doit.ini
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
mysqli.default_socket = /var/lib/mysql/mysql.sock
```

The value (in seconds) of **session.gc_maxlifetime** should be the same or greater than the **Session Timeout** in the [system settings](../../../system-administration/administration/system-settings.md) of i-doit.

The **date.timezone** parameter should be adjusted to the local time zone (see [List of supported time zones](http://php.net/manual/en/timezones.php)).

Afterwards, the Apache web server is restarted:

```shell
sudo systemctl restart httpd.service
```

### Apache Webserver

The default VHost is maintained and complemented. For this purpose, a new file is created and adjusted:

```shell
sudo nano /etc/httpd/conf.d/i-doit.conf
```

The supplementary file is stored in this file:

```shell
DirectoryIndex index.php
DocumentRoot /var/www/html/
<Directory /var/www/html/>
    AllowOverride All
</Directory>
```

i-doit includes differing Apache settings in files with the name **.htaccess**. The setting **AllowOverride All** is required so that these settings are taken into account.

With the next step you restart the Apache web server:

```shell
sudo systemctl restart httpd.service
```

**SELinux** has to grant read and write permissions for Apache in the future i-doit installation directory:

```shell
sudo chown apache:apache -R /var/www/html
sudo chcon -t httpd_sys_content_t "/var/www/html/" -R
sudo chcon -t httpd_sys_rw_content_t "/var/www/html/" -R
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

The following SQL statements are now carried out in the MariaDB shell:

```shell
ALTER USER root@localhost IDENTIFIED VIA mysql_native_password USING PASSWORD('passwort');
FLUSH PRIVILEGES;
EXIT;
```

Afterwards, MariaDB is stopped. Now it is important to move files which are not required, otherwise the result would be a significant loss of performance:

```shell
mysql -uroot -p -e "SET GLOBAL innodb_fast_shutdown = 0"
sudo systemctl stop mariadb.service
sudo mv /var/lib/mysql/ib_logfile[01] /tmp
```

A new file is created for the deviating settings:

```shell
sudo nano /etc/my.cnf.d/99-i-doit.cnf
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
sudo systemctl start mariadb.service
```

Next Step
---------

Now the operating system is prepared and i-doit can be installed.

Proceed with [**Setup** …](../setup.md)
