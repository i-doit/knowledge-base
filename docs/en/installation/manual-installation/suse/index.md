---
title: SUSE Linux Enterprise Server 15 SP6
description: "We explain which packages need to be installed and configured in a few steps in this article."
icon: simple/suse
status:
lang: en
---

!!! note "Tested with i-doit **38** and **openSUSE Leap 15.6** (compatible with SLES 15 SP6)"

We explain which packages need to be installed and configured in a few steps in this article.

## System Requirements

The general [system requirements](../../system-requirements.md) apply.

This article refers to [**openSUSE Leap 15.6**](https://www.opensuse.org/) and is also compatible with **SUSE Linux Enterprise Server 15 SP6**. To determine which version is in use, you can run the following command in the console:

```sh
cat /etc/os-release
```

The system architecture should be x86 in 64-bit:

```sh
uname -m
```

**x86_64** means 64-bit, **i386** or **i686** means only 32-bit.

## Package installation

The standard repositories of SUSE Linux Enterprise Server (SLES) already include almost all necessary packages to install

-   the **Apache** HTTP Server 2.4,
-   the scripting language **PHP** 8.2,
-   the database management system **MariaDB** 10.11, and
-   the caching server **memcached**.

First, the packages are updated with zypper:

```sh
sudo zypper refresh && sudo zypper update
```

Now the packages required by i-doit are installed. PHP 8.2 is included in the standard repositories of openSUSE Leap 15.6, so no additional repository is needed:

```sh
sudo zypper install apache2 apache2-mod_fcgid mariadb mariadb-client memcached sudo unzip wget moreutils php8 php8-cli php8-fpm php8-fpm-apache php8-bcmath php8-curl php8-dom php8-gd php8-ldap php8-mbstring php8-mysql php8-opcache php8-openssl php8-pdo php8-pgsql php8-soap php8-xmlreader php8-xmlwriter php8-xsl php8-zip php8-zlib
```

To start the required services at boot time, this command is necessary:

```sh
sudo systemctl enable apache2 php-fpm mariadb memcached
```

Then the services are started:

```sh
sudo systemctl start apache2 php-fpm mariadb memcached
```

!!! info "For **HTTPS**, further steps are required that are not covered here, see [Security and protection](../../../maintenance-and-operation/security-and-protection.md)"

## Configuration

The installed packages for Apache HTTP Server, PHP, and MariaDB already come with configuration files. It is recommended to store custom settings in separate files rather than modifying the existing configuration files. With each package upgrade, any divergent settings would be flagged or overwritten. The default configuration settings are supplemented or overridden by the custom ones.

### PHP-FPM Configuration

The default pool configuration is adjusted so that PHP-FPM listens on the right socket and runs as the Apache user:

```sh
sudo sed -i "s|^listen = .*|listen = /var/run/php-fpm.sock|" /etc/php8/fpm/php-fpm.d/www.conf
sudo sed -i "s|^;*listen.owner = .*|listen.owner = wwwrun|" /etc/php8/fpm/php-fpm.d/www.conf
sudo sed -i "s|^;*listen.group = .*|listen.group = www|" /etc/php8/fpm/php-fpm.d/www.conf
sudo sed -i "s|^user = .*|user = wwwrun|" /etc/php8/fpm/php-fpm.d/www.conf
sudo sed -i "s|^group = .*|group = www|" /etc/php8/fpm/php-fpm.d/www.conf
```

### PHP Configuration

First, a new file is created and populated with the required settings:

```sh
sudo vi /etc/php8/conf.d/i-doit.ini
```

!!! example "This file receives the following content as specified by us. For more information about the parameters, visit [PHP.net](https://www.php.net/manual/en/install.fpm.configuration.php)"

This file receives the following content:

```ini
allow_url_fopen = Yes
file_uploads = On
max_execution_time = 300
max_file_uploads = 42
max_input_time = 60
max_input_vars = 10000
memory_limit = 256M
post_max_size = 128M
register_argc_argv = On
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
mysqli.default_socket = /var/run/mysql/mysql.sock
```

The `memory_limit` must be increased if needed, e.g. for very large reports or extensive documents.
The value (in seconds) of `session.gc_maxlifetime` should be greater than or equal to the **Session Timeout** in the [system settings](../system-settings.md) of i-doit.
The `date.timezone` parameter should be adjusted to the local time zone (see [list of supported time zones](http://php.net/manual/en/timezones.php)).

### Apache HTTP Server

A new VHost configuration is created:

```sh
sudo vi /etc/apache2/vhosts.d/i-doit.conf
```

In this file, the VHost configuration is adjusted and saved:

```conf
ServerName i-doit
<VirtualHost *:80>
    ServerAdmin i-doit@example.net

    DirectoryIndex index.php
    DocumentRoot /srv/www/htdocs
    <Directory /srv/www/htdocs>
    ## See https://httpd.apache.org/docs/2.4/mod/core.html#allowoverride
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

    LogLevel warn
    ErrorLog /var/log/apache2/error_log
    CustomLog /var/log/apache2/access_log combined

    <FilesMatch "\.php$">
        <If "-f %{REQUEST_FILENAME}">
            SetHandler "proxy:unix:/var/run/php-fpm.sock|fcgi://localhost"
        </If>
    </FilesMatch>
</VirtualHost>
```

!!! note "i-doit ships custom Apache settings in files named .htaccess. These must be reviewed after each update and updated in the VirtualHost configuration."

In the next step, the required Apache HTTP Server modules are activated and the services are restarted:

```sh
sudo a2enmod rewrite proxy proxy_fcgi
sudo systemctl restart apache2 php-fpm
```

### MariaDB

To ensure MariaDB delivers good performance and can be operated securely, a few steps are necessary that should be carried out meticulously. This starts with a secure installation. **The recommendations should be followed**. The **root** user should receive a secure password:

```sh
sudo mysql_secure_installation
```

So that i-doit may use the **root** user during setup, a password is set:

!!! note "Please replace 'password' with a secure password"

```sh
sudo mysql -uroot -e "SET PASSWORD FOR 'root'@'localhost' = PASSWORD('password'); FLUSH PRIVILEGES;"
```

The InnoDB shutdown mode still needs to be changed:

```sh
sudo mysql -uroot -p -e "SET GLOBAL innodb_fast_shutdown = 0"
```

A new file is created for the custom configuration settings:

```sh
sudo vi /etc/my.cnf.d/99-i-doit.cnf
```

This file contains the new configuration settings. **For optimal performance, these settings should be adjusted to the (virtual) hardware**:

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
table_open_cache_instances = 8
innodb_stats_on_metadata = 0
sql-mode = ""
```

Finally, MariaDB is restarted:

```sh
sudo systemctl restart mariadb
```

## Next Step

The operating system is now prepared so that i-doit can be installed:

[Continue to **Setup**](../setup.md)
