---
title: SUSE Linux Enterprise Server 15 SP6
description: "We explain which packages need to be installed and configured in a few steps in this article."
icon: simple/suse
status:
lang: en
---

!!! note "Tested with i-doit **32**"

We explain which packages need to be installed and configured in a few steps in this article.

## System Requirements

The general [system requirements](../../systemvoraussetzungen.md).

This article refers to [**SUSE Linux Enterprise Server 15 SP6**](https://www.suse.com/). To determine which version is in use, you can run the following command in the console:

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
-   the caching server **memcached**

to install.

First, the activation of additional add-ons is required:

-   **Web and Scripting Module**

To check whether the **Web and Scripting Add-on Module** is activated, run the following command:

```sh
sudo zypper repos -E
```

If it is not activated, it can be activated with the following command:

```sh
sudo suseconnect -p sle-module-web-scripting/15.6/x86_64
```

The packages are then updated using zypper:

```sh
sudo zypper refresh && sudo zypper update
```

Now the packages required by i-doit are installed:

```sh
sudo zypper install vim apache2 apache2-mod-php8 mariadb-server mariadb-client memcached php8 php8-{bz2,ctype,bcmath,curl,gd,gettext,fileinfo,fpm,ldap,mbstring,memcached,mysql,odbc,opcache,openssl,phar,posix,pgsql,pdo,snmp,soap,sockets,sqlite,zip,zlib}
```

The following command is required to ensure the necessary services are started at boot:

```sh
sudo systemctl enable apache2 mysql memcached
```

Then the services are started:

```sh
sudo systemctl start apache2 mysql memcached
```

!!! info "For **HTTPS**, additional steps must be performed that are not covered here, see [Security and Protection](../../../wartung-und-betrieb/sicherheit-und-schutz.md)"

## Configuration

The installed packages for Apache HTTP Server, PHP, and MariaDB already come with configuration files. It is recommended to store custom settings in separate files rather than modifying the existing configuration files. With each package upgrade, any divergent settings would be flagged or overwritten. The default configuration settings are supplemented or overridden by the custom ones.

### PHP-FPM Configuration

First, the old configuration is deactivated by renaming:

```sh
sudo mv /etc/php8/fpm/php-fpm.d/www.conf /etc/php8/fpm/php-fpm.d/www.conf.bak
```

and then a new file is created and populated with the settings:

```sh
sudo vi /etc/php8/fpm/php-fpm.d/i-doit.conf
```

```ini
[i-doit]
listen = /var/run/php-fpm/php8-fpm.sock
user = wwwrun
group = www
listen.owner = wwwrun
listen.group = www
pm = dynamic
pm.max_children = 50
pm.start_servers = 5
pm.min_spare_servers = 5
pm.max_spare_servers = 35
security.limit_extensions = .php
```

### PHP Configuration

First, a new file is created and populated with the required settings:

```sh
sudo vi /etc/php8/conf.d/i-doit.ini
```

!!! example "This file receives the following content as specified by us. For more information about the parameters, visit [PHP.net](https://www.php.net/manual/en/install.fpm.configuration.php)"

This file receives the following content:

```sh
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
mysqli.default_socket = /var/run/mysql/mysql.sock
```

The `memory_limit` must be increased if needed, e.g., for very large reports or extensive documents.
The value (in seconds) of `session.gc_maxlifetime` should be greater than or equal to the **Session Timeout** in the [system settings](../systemeinstellungen.md) of i-doit.
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
    DocumentRoot /srv/www/htdocs/i-doit
    <Directory /srv/www/htdocs/i-doit>
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

    <FilesMatch "\\.php$">
        <If "-f %{REQUEST_FILENAME}">
            SetHandler "proxy:unix:/var/run/php-fpm/php8-fpm.sock|fcgi://localhost"
        </If>
    </FilesMatch>
</VirtualHost>
```

!!! note "i-doit ships custom Apache settings in files named .htaccess. These must be reviewed after each update and updated in the VirtualHost configuration."

In the next step, the necessary Apache2 HTTP Server modules **php8**, **rewrite**, and **mod_access_compat** are activated:

```sh
sudo a2enmod proxy && sudo a2enmod proxy_fcgi && sudo a2enmod php8 && sudo a2enmod rewrite && sudo a2enmod mod_access_compat
```

!!! note "Unfortunately, each module must be activated individually"

and then restart the necessary services:

```sh
sudo systemctl restart apache2 php-fpm
```

### MariaDB

To ensure MariaDB delivers good performance and can be operated securely, a few steps are needed that should be carried out meticulously. This starts with a secure installation. **The recommendations should be followed**. The **root** user should receive a secure password:

```sh
sudo mysql_secure_installation
```

To allow i-doit to use the **root** user during setup, open the MariaDB shell:

```sh
sudo mysql -uroot
```

The following SQL statements are now executed in the MariaDB shell:

!!! note "Please replace ('passwort') with your own password"

```sql
ALTER USER 'root'@'localhost' IDENTIFIED VIA mysql_native_password USING PASSWORD('passwort');
```

The InnoDB shutdown mode still needs to be changed. The value 0 causes a full purge and change buffer merge to be performed before MariaDB shuts down:

```sql
FLUSH PRIVILEGES;
SET GLOBAL innodb_fast_shutdown = 0;
EXIT;
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
# Only if your have MySQL 5.6 or higher, do not use with MariaDB!
#table_open_cache_instances = 4
innodb_stats_on_metadata = 0
sql-mode = ""
```

Finally, MariaDB is restarted:

```sh
sudo systemctl restart mysql
```

and HTTP connections are allowed through the firewall:

```sh
sudo firewall-cmd --permanent --add-service=http && sudo firewall-cmd --reload
```

Before i-doit is accessible, [AppArmor](https://apparmor.net/) for PHP-FPM must either be **configured**, **deactivated**, or set to **complain** mode.
In this guide, we use complain mode; it should be properly configured afterwards:

```sh
sudo aa-complain '/etc/apparmor.d/php-fpm'
```

## Next Step

The operating system is now prepared so that i-doit can be installed:

[Continue to **Setup**](../setup.md)
