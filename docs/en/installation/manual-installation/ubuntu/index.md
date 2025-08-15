---
title: Ubuntu 24.04.1 GNU/Linux
description: i-doit installation auf Ubuntu 24.04.1
icon: material/ubuntu
#status: new
lang: de
---

In this article we explain in just a few steps which packages need to be installed and configured.

## System Requirements

The general [system requirements](../../system-requirements.md) apply.

When you want to use [Ubuntu Linux](https://www.ubuntu.com/) as operating system, the server version **24.04.1 LTS "Noble Numcat"** is recommended. In order to find out which version is used you can carry out the following command:

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
*   the script language **PHP** 8.3
*   the database management system **MariaDB** 10.11 and
*   the caching server **memcached**

```shell
apt update
apt install apache2 libapache2-mod-fcgid mariadb-client mariadb-server memcached unzip sudo moreutils php php-{bcmath,cli,common,curl,fpm,gd,ldap,mbstring,memcached,mysql,opcache,pgsql,soap,xml,zip}
```

## Configuration

The installed packages for Apache web server, PHP and MariaDB already supply configuration files.<br>
It is recommended to save changed settings in separate files instead of adjusting the already existing configuration files. Otherwise, any differences to the existing files would be pointed out or even overwritten during each package upgrade. The settings of the default configuration are supplemented or overwritten by user-defined settings.

### PHP-FPM

First, the old configuration is deactivated by renaming it:

```sh
sudo mv /etc/php/8.3/fpm/pool.d/www.conf{,.bak}
```

<!-- cSpell:disable -->
```sh
sudo nano /etc/php/8.3/fpm/pool.d/i-doit.conf
```

!!! example "This file will contain the following content specified by us. For more information about the parameters, see [PHP.net](https://www.php.net/manual/en/install.fpm.configuration.php)"

```ini
[i-doit]
listen = /var/run/php/php8.3-fpm.sock
user = www-data
group = www-data
listen.owner = www-data
listen.group = www-data
pm = dynamic
pm.max_children = 50
pm.start_servers = 5
pm.min_spare_servers = 5
pm.max_spare_servers = 35
security.limit_extensions = .php
```
<!-- cSpell:enable -->
### PHP

First, a new file is created and filled with the necessary settings:

```sh
sudo nano /etc/php/8.3/mods-available/i-doit.ini
```

!!! example "This file will contain the following content specified by us. For more information about the parameters, see [PHP.net](https://www.php.net/manual/de/ini.core.php)"
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
The `memory_limit` must be increased if necessary, e.g. for very large reports or extensive documents.<br>
The value (in seconds) of `session.gc_maxlifetime` should be the same or greater than the `Session Timeout` in the [system settings](../system-settings.md) of i-doit.<br>
The `date.timezone` parameter should be adjusted to the local time zone (see [List of supported time zones](http://php.net/manual/en/timezones.php)).<br>

Afterwards, the required PHP modules are activated and the Apache web server is restarted:<br>

```shell
sudo phpenmod i-doit memcached
```

### Apache HTTP Server

The default VHost is deactivated and a new one is created:

```shell
sudo a2dissite 000-default
sudo nano /etc/apache2/sites-available/i-doit.conf
```

!!! example "This file contains the following content specified by us. For more information on the parameters, see [httpd.apache.org](https://httpd.apache.org/docs/2.4/de/mod/core.html)"

```shell
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
!!! note "i-doit provides different Apache settings in files with the name **.htaccess**. These must be checked after each update and updated in the VirtualHost configuration."


With the next step you activate the new VHost and the necessary Apache module **rewrite** and the Apache web server is restarted:

```shell
sudo a2ensite i-doit && sudo a2enmod rewrite proxy_fcgi setenvif && sudo systemctl restart apache2 php8.3-fpm
```

### MariaDB

To ensure that MariaDB performs well and can be operated securely, you should not only follow our instructions but also seek further information. Start with a secure installation, following the recommendations. In addition, the user **root** should be given a secure password.

```shell
sudo mysql_secure_installation
```

The mode for shutting down InnoDB still needs to be changed. The value `0` causes a complete cleanup and merge of the change buffers before MariaDB is shut down:

```shell
mysql -uroot -p -e"SET GLOBAL innodb_fast_shutdown = 0"
```

A new file is created for the different configuration settings and our standard configuration is inserted:

```shell
sudo nano /etc/mysql/mariadb.conf.d/99-i-doit.cnf
```

!!! example "This file contains the new configuration settings. For **optimal performance, these settings should be adjusted to the (virtual) hardware**. For optimal settings, please refer to [mariadb.com](https://mariadb.com/kb/en/optimization-and-tuning/)."

```shell
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

## Next Step

Now the operating system is prepared and i-doit can be installed.

[Proceed with **Setup**](../setup.md){ .md-button .md-button--primary }
