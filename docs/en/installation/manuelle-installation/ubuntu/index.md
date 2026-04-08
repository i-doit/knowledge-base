---
title: Ubuntu 24.04.1 GNU/Linux
description: i-doit installation on Ubuntu 24.04.1
icon: material/ubuntu
status:
lang: en
---

We explain which packages need to be installed and configured in a few steps in this article. We use an environment without a **desktop**.

!!! note ""
    When you install Ubuntu, you will eventually reach a "Software selection" dialog that contains a list of checkboxes for selecting the software you want to install initially. Here, the "Ubuntu desktop environment" checkbox is already checked. If you uncheck this checkbox and leave all other desktop environment checkboxes (GNOME, Xfce, etc.) unchecked, this results in a GUI-less installation:

## System Requirements

The general [system requirements](../../systemvoraussetzungen.md).

This article refers to **Ubuntu 24.04.4 "Noble Numbat"**. To determine which Ubuntu version is in use, you can run the following command in the console:

```shell
cat /etc/os-release
```

The system architecture should be x86 in 64-bit:

```shell
uname -m
```

**x86_64** means 64-bit, **i386** or **i686** means only 32-bit.

## Package installation

The standard repositories of Ubuntu GNU/Linux already include all necessary packages to install

-   the **Apache** web server 2.4,
-   the scripting language **PHP** 8.3,
-   the database management system **MariaDB** 10.11, and
-   the caching server **memcached**

to install:

```shell
sudo apt update
sudo apt install apache2 libapache2-mod-fcgid mariadb-client mariadb-server memcached unzip sudo moreutils php-{bcmath,cli,common,curl,fpm,gd,ldap,mbstring,memcached,mysql,opcache,pgsql,soap,xml,zip}
```

## Configuration

The installed packages for Apache web server, PHP, and MariaDB already come with configuration files. It is recommended to store custom settings in separate files rather than modifying the existing configuration files. With each package upgrade, any divergent settings would be flagged or overwritten. The default configuration settings are supplemented or overridden by the custom ones.

### PHP-FPM

First, a new file is created and populated with the required settings:

```sh
sudo nano /etc/php/8.3/mods-available/i-doit.ini
```

!!! example "This file receives the following content as specified by us. For more information about the parameters, visit [PHP.net](https://www.php.net/manual/en/ini.core.php)"
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
The `memory_limit` must be increased if needed, e.g., for very large reports or extensive documents.
The value (in seconds) of **session.gc_maxlifetime** should be greater than or equal to the **Session Timeout** in the [system settings](../systemeinstellungen.md) of i-doit.
The **date.timezone** parameter should be adjusted to the local time zone (see [list of supported time zones](http://php.net/manual/en/timezones.php)).

Then the required PHP modules are activated and the Apache web server is restarted:

```shell
sudo phpenmod i-doit memcached
```

### Apache HTTP Server

The default virtual host is deactivated and a new one is created:

```shell
sudo a2dissite 000-default
sudo nano /etc/apache2/sites-available/i-doit.conf
```

!!! example "This file receives the following content as specified by us. For more information about the parameters, visit [httpd.apache.org](https://httpd.apache.org/docs/2.4/en/mod/core.html)"
<!-- cSpell:disable -->
```conf
<VirtualHost *:80>
        ServerAdmin i-doit@example.net

        DocumentRoot /var/www/html/
DirectoryIndex index.php
DocumentRoot /var/www/html

    <Directory /var/www/html>
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
        ## "AllowOverride None". After each i-doit update check if the .htaccess file, in the i-doit directory,
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

    <FilesMatch "\\.php$">
        <If "-f %{REQUEST_FILENAME}">
            SetHandler "proxy:unix:/var/run/php/php8.3-fpm.sock|fcgi://localhost"
        </If>
    </FilesMatch>

    LogLevel warn
    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
```
<!-- cSpell:enable -->
!!! note "i-doit ships custom Apache settings in files named **.htaccess**. These must be reviewed after each update and updated in the VirtualHost configuration."

In the next step, the new VHost and the required Apache module **rewrite** are activated, and the Apache web server is restarted:

```shell
sudo a2ensite i-doit && sudo a2enmod rewrite proxy_fcgi setenvif && sudo systemctl restart apache2 php8.3-fpm
```

### MariaDB

To ensure MariaDB delivers good performance and can be operated securely, you should not only follow our guide but also inform yourself further. Starting with a secure installation where the recommendations should be followed. Additionally, the **root** user should receive a secure password.

```shell
sudo mysql_secure_installation
```

The InnoDB shutdown mode still needs to be changed. The value `0` causes a full purge and change buffer merge to be performed before MariaDB shuts down:

```shell
mysql -u root -p -e "SET GLOBAL innodb_fast_shutdown = 0"
```

A new file is created for the custom configuration settings and our default configuration is inserted:

```shell
sudo nano /etc/mysql/mariadb.conf.d/99-i-doit.cnf
```

!!! example "This file contains the new configuration settings. For **optimal performance, these settings should be adjusted to the (virtual) hardware**. For optimal settings, please refer to [mariadb.com](https://mariadb.com/kb/en/optimization-and-tuning/)"

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

Finally, MariaDB is started:

```shell
sudo systemctl restart mysql
```

## Next Step

The operating system is now prepared so that i-doit can be installed:

[Continue to **Setup**](../setup.md){ .md-button .md-button--primary }
