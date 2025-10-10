---
title: Red Hat Enterprise Linux 9.6
description: i-doit installation on RHEL 9.6
icon: material/redhat
status:
lang: en
---

!!! note "Tested with i-doit **36** and RHEL 9.6"

In this article, we explain in a few steps which packages need to be installed and configured.

## System requirements

The general [system requirements](../../system-requirements.md) apply. To determine which version is used, this command can be executed on the console:

```sh
cat /etc/os-release
```

As system architecture a x86 in 64bit should be used:

```sh
uname -m
```

**x86_64** stands for 64bit, **i386** or **i686** only for 32bit.

## Installation of the packages

On a system that is up-to-date

-   the **Apache** HTTP Server 2.4,
-   the script language **PHP-FPM** 8.3,
-   the database management system **MariaDB** 10.11 and
-   the caching server **memcached**

At first the first packages are installed from the default repositories:

```sh
sudo dnf update
```

Install PHP 8.2 and MariaDB via module stream:

```sh
sudo dnf module enable php:8.3 mariadb:10.11 -y
sudo dnf module install php:8.3 mariadb:10.11 -y
```

Further packages are installed afterwards:
<!-- cSpell:disable -->
```sh
sudo dnf install httpd boost-program-options memcached unzip php php-{bcmath,curl,gd,json,ldap,mysqli,mysqlnd,odbc,pecl-zip,pgsql,pdo,snmp,soap,zip} -y
```
<!-- cSpell:enable -->
!!! info "Additional steps are necessary for the PHP extension memcached: <https://access.redhat.com/solutions/7002155>. i-doit also works without"

These commands are required so that the Apache HTTP server, MariaDB, PHP-FPM and memcached are also started at boot time:
<!-- cSpell:disable -->
```sh
sudo systemctl enable httpd mariadb php-fpm memcached
```
<!-- cSpell:enable -->
The services are then started:
<!-- cSpell:disable -->
```sh
sudo systemctl start httpd mariadb php-fpm memcached
```
<!-- cSpell:enable -->
Furthermore, the standard HTTP port 80 is permitted via the firewall. This must be restarted after the adjustment:
<!-- cSpell:disable -->
```sh
sudo firewall-cmd --permanent --add-service=http
sudo systemctl restart firewalld.service
```
<!-- cSpell:enable -->
!!! info "For HTTPS, further steps must be carried out which are not covered here, see [Security and protection](../../../maintenance-and-operation/security-and-protection.md)"

## Configuration

The installed packages for Apache HTTP Server, PHP and MariaDB already include configuration files. **It is recommended to save deviating settings in separate files** instead of adapting the existing configuration files. The settings of the standard configuration are supplemented or overwritten by the user-defined settings.

### PHP Configuration

First, a new file is created and filled with the necessary settings:

```sh
sudo nano /etc/php.d/i-doit.ini
```

!!! example "This file contains the following content specified by us. For more information on the parameters, see [PHP.net](https://www.php.net/manual/en/install.fpm.configuration.php)"
<!-- cSpell:disable -->
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
mysqli.default_socket = /var/lib/mysql/mysql.sock
```
<!-- cSpell:enable -->
The `memory_limit` must be increased if necessary, e.g. for very large reports or extensive documents.
The value (in seconds) of **session.gc_maxlifetime** should be greater than or equal to the **session timeout** in the [system settings](../system-settings.md) of i-doit.
The **date.timezone** parameter should be adjusted to the local time zone (see [List of supported time zones](http://php.net/manual/de/timezones.php)).

### Apache HTTP Server configuration

The Welcome Page is renamed and replaced with an empty file:

```sh
sudo mv /etc/httpd/conf.d/welcome.conf{,.bak}
sudo touch /etc/httpd/conf.d/welcome.conf
```

Now a new virtual host is created for i-doit:

```sh
sudo nano /etc/httpd/conf.d/i-doit.conf
```

This file contains the following content:
<!-- cSpell:disable -->
```ini
<VirtualHost *:80>
    ServerName idoit.example.com
    ServerAdmin webmaster@example.com

    DocumentRoot /var/www/html

    ErrorLog /var/log/httpd/idoit_error.log
    CustomLog /var/log/httpd/idoit_access.log combined

    <Directory /var/www/html/>
        ## See https://httpd.apache.org/docs/2.2/mod/core.html#allowoverride
        AllowOverride None

        ## Apache Web server configuration file for i-doit
        ##
        ## This file requires:
        ##
        ## - Apache HTTPD >= 2.4 with enabled modules:
        ##   - rewrite
        ##   - expires
        ##   - headers
        ##   - authz_core
        ##
        ## For performance and security reasons we put these settings
        ## directly into the VirtualHost configuration and explicitly set
        ## "AllowOverride none". After each i-doit update check if the .htaccess file, in the i-doit directory,
        ## has changed and add the changes in the VirtualHost configuration.
        ##
        ## See the i-doit Knowledge Base for more details:
        ## <https://kb.i-doit.com/>

        ## Disable directory indexes:
        Options -Indexes +SymLinksIfOwnerMatch

        <IfModule mod_authz_core.c>
            RewriteCond %{REQUEST_METHOD}  =GET
            RewriteRule "^$" "/index.php"

            ## Deny access to meta files:
            <Files "*.yml">
                Require all denied
            </Files>

            ## Deny access to hidden files:
            <FilesMatch "^\.">
                Require all denied
            </FilesMatch>

            ## Deny access to bash scripts:
            <FilesMatch "^(controller|.*\.sh)$">
                Require all denied
            </FilesMatch>

            ## Deny access to all PHP files…
            <Files "*.php">
                Require all denied
            </Files>

            ## Deny access to wrongly created config backup files like ...inc.php.0123123 instead of ...inc.012341.php
            <FilesMatch "\.php\.\d+$">
                Require all denied
            </FilesMatch>

            ## …except some PHP files in root directory:
            <FilesMatch "^(index\.php|controller\.php|proxy\.php)$">
                <IfModule mod_auth_kerb.c>
                    Require valid-user
                </IfModule>
                <IfModule !mod_auth_kerb.c>
                    Require all granted
                </IfModule>
            </FilesMatch>

            ## …except some PHP files in src/:
            <Files "jsonrpc.php">
                Require all granted
            </Files>

            ## …except some PHP files in src/tools/php/:
            <FilesMatch "^(rt\.php|barcode_window\.php|barcode\.php)$">
                Require all granted
            </FilesMatch>

            ## …except some PHP files in src/tools/php/qr/:
            <FilesMatch "^(qr\.php|qr_img\.php)$">
                Require all granted
            </FilesMatch>

            ## …except some PHP files in src/tools/js/:
            <FilesMatch "^js\.php$">
                Require all granted
            </FilesMatch>
        </IfModule>

        ## Deny access to some directories:
        <IfModule mod_alias.c>
            RedirectMatch 403 /imports/.*$
            RedirectMatch 403 /log/.*$
            RedirectMatch 403 /temp/.*(?<!\.(css|xsl))$
            RedirectMatch 403 /upload/files/.*$
            RedirectMatch 403 /upload/images/.*$
            RedirectMatch 403 /vendor/.*$
        </IfModule>

        ## Cache static files:
        <IfModule mod_expires.c>
            ExpiresActive On
            # A2592000 = 30 days
            ExpiresByType image/svg+xml A2592000
            ExpiresByType image/gif A2592000
            ExpiresByType image/png A2592000
            ExpiresByType image/jpg A2592000
            ExpiresByType image/jpeg A2592000
            ExpiresByType image/ico A2592000
            ExpiresByType text/css A2592000
            ExpiresByType text/javascript A2592000
            ExpiresByType image/x-icon "access 1 year"
            ExpiresDefault "access 2 week"

            <IfModule mod_headers.c>
                Header append Cache-Control "public"
            </IfModule>
        </IfModule>

        ## Pretty URLs:
        <IfModule mod_rewrite.c>
            RewriteEngine On
            RewriteRule favicon\.ico$ images/favicon.ico [L]
            RewriteCond %{REQUEST_FILENAME} !-l
            RewriteCond %{REQUEST_FILENAME} !-f
            RewriteCond %{REQUEST_FILENAME} !-d
            RewriteRule .* index.php [L,QSA]
        </IfModule>

        ## Deny access to all ini files…
        <Files "*.ini">
            Require all denied
        </Files>

        </Directory>

    TimeOut 600
    ProxyTimeout 600
</VirtualHost>
```
<!-- cSpell:enable -->
!!! note "i-doit provides different Apache settings in files with the name **.htaccess**. These must be checked after each update and updated in the VirtualHost configuration."

In the next step, the Apache HTTP server is restarted:
<!-- cSpell:disable -->
```sh
sudo systemctl restart httpd php-fpm
```
<!-- cSpell:enable -->
In order for Apache to have read and write permissions in the future installation directory of i-doit, this must be permitted by **SELinux**:
<!-- cSpell:disable -->
```sh
sudo chown apache:apache -R /var/www/html
sudo chcon -t httpd_sys_rw_content_t "/var/www/html/" -R
```
<!-- cSpell:enable -->
### MariaDB configuration

To ensure that MariaDB delivers good performance and can be operated securely, a few steps are necessary that should be carried out meticulously. This starts with a secure installation. **The recommendations should be followed**. The user **root** should be given a secure password:

```sh
mysql_secure_installation
```

!!! warning "Do **not** activate socket authentication for the user root, as this would prevent i-doit from connecting to the database."

MariaDB is then stopped and set to [slow shutdown](https://mariadb.com/kb/en/innodb-system-variables/#innodb_fast_shutdown):
<!-- cSpell:disable -->
```sh
mysql -u root -p -e"SET GLOBAL innodb_fast_shutdown = 0"
sudo systemctl stop mariadb.service
```
<!-- cSpell:enable -->
A new file is created for the different configuration settings:
<!-- cSpell:disable -->
```sh
sudo nano /etc/my.cnf.d/99-i-doit.cnf
```
<!-- cSpell:enable -->
This file contains the new configuration settings. **For optimum performance, these settings should be adapted to the (virtual) hardware**:
<!-- cSpell:disable -->
```sh
[mysqld]
# This is the number 1 setting to look at for any performance optimization
# It is where the data and indexes are cached: having it as large as possible will
# ensure MySQL uses memory and not disks for most read operations.
#
# Typical values are 1G (1-2GB RAM), 5-6G (8GB RAM), 20-25G (32GB RAM), 100-120G (128GB RAM).
innodb_buffer_pool_size = 1G
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
<!-- cSpell:enable -->
Finally, MariaDB is restarted:

```sh
sudo systemctl restart mariadb.service
```

Finally, we need to configure SELinux:
<!-- cSpell:disable -->
```sh
sudo setsebool -P httpd_can_network_connect_db 1
```
<!-- cSpell:enable -->
## Next Step

The operating system is now prepared so that i-doit can be installed:

[Go to Setup ...](../../manual-installation/setup.md)
