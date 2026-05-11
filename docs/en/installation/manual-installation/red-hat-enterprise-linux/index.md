---
title: Red Hat Enterprise Linux 10
description: i-doit installation on Red Hat Enterprise Linux 10
icon: material/redhat
status:
lang: en
---

!!! note "Tested with i-doit **38** and **Red Hat Enterprise Linux 10 (Coughlan)**"

!!! warning "Red Hat Subscription required"
    Installing RHEL packages and activating the CRB repository requires an active **Red Hat Subscription**. A free Developer Subscription is available at [developers.redhat.com](https://developers.redhat.com).

We explain which packages need to be installed and configured in a few steps in this article.

## System Requirements

The general [system requirements](../../system-requirements.md) apply. To determine which version is in use, you can run the following command in the console:
<!-- cSpell:disable -->
```sh
cat /etc/os-release
```
<!-- cSpell:enable -->
The system architecture should be x86 in 64-bit:
<!-- cSpell:disable -->
```sh
uname -m
```
<!-- cSpell:enable -->
**x86_64** means 64-bit, **i386** or **i686** means only 32-bit.

## Package Installation

On an up-to-date system, the following will be installed:

*   the **Apache** HTTP Server 2.4,
*   the scripting language **PHP-FPM** 8.3,
*   the database management system **MariaDB** 10.11, and
*   the caching server **memcached**

First, packages are updated from the standard repositories:
<!-- cSpell:disable -->
```sh
sudo dnf update
```
<!-- cSpell:enable -->
For some packages, **EPEL** is required. On RHEL, EPEL is not available as a package but is installed directly from fedoraproject.org:
<!-- cSpell:disable -->
```sh
sudo dnf install https://dl.fedoraproject.org/pub/epel/epel-release-latest-10.noarch.rpm -y
```
<!-- cSpell:enable -->
The **CRB repository** (CodeReady Builder) is enabled via the Subscription Manager:
<!-- cSpell:disable -->
```sh
sudo subscription-manager repos --enable codeready-builder-for-rhel-10-x86_64-rpms
```
<!-- cSpell:enable -->
Installation of additional packages:
<!-- cSpell:disable -->
```sh
sudo dnf install -y httpd httpd-tools mariadb-server mariadb memcached unzip sudo moreutils php php-fpm php-bcmath php-cli php-common php-curl php-gd php-json php-ldap php-mbstring php-mysqlnd php-opcache php-pdo php-pgsql php-process php-soap php-xml php-zip
```
<!-- cSpell:enable -->
To ensure that the Apache HTTP Server, MariaDB, PHP-FPM, and memcached are also started at boot, the following commands are required:
<!-- cSpell:disable -->
```sh
sudo systemctl enable httpd mariadb php-fpm memcached
```
<!-- cSpell:enable -->
Then the services are started:
<!-- cSpell:disable -->
```sh
sudo systemctl start httpd mariadb php-fpm memcached
```
<!-- cSpell:enable -->
Furthermore, the standard HTTP port 80 is allowed through the firewall. The firewall must be restarted after the adjustment:
<!-- cSpell:disable -->
```sh
sudo firewall-cmd --permanent --add-service=http
sudo systemctl restart firewalld.service
```
<!-- cSpell:enable -->

!!! success "If you want to use i-doit via HTTPS, you need to create a corresponding VirtualHost configuration for port 443. [This is not covered here.](https://docs.redhat.com/en/documentation/red_hat_enterprise_linux/10/html/deploying_web_servers_and_reverse_proxies/setting-up-the-apache-http-web-server#configuring-tls-encryption-on-an-apache-http-server)"

## Configuration

The installed packages for Apache HTTP Server, PHP, and MariaDB already come with configuration files. **It is recommended to store custom settings in separate files** rather than modifying the existing configuration files. The default configuration settings are supplemented or overridden by the custom ones.

### PHP Configuration

First, a new file is created and populated with the required settings:
<!-- cSpell:disable -->
```sh
sudo nano /etc/php.d/i-doit.ini
```
<!-- cSpell:enable -->
!!! example "This file receives the following content as specified by us. For more information about the parameters, visit [PHP.net](https://www.php.net/manual/en/install.fpm.configuration.php)"
<!-- cSpell:disable -->
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
mysqli.default_socket = /var/lib/mysql/mysql.sock
```
<!-- cSpell:enable -->
The `memory_limit` must be increased if needed, e.g., for very large reports or extensive documents.
The value (in seconds) of **session.gc_maxlifetime** should be greater than or equal to the **Session Timeout** in the [system settings](../system-settings.md) of i-doit.
The **date.timezone** parameter should be adjusted to the local time zone (see [list of supported time zones](http://php.net/manual/en/timezones.php)).

### Apache HTTP Server Configuration

The Welcome Page is deactivated by renaming:
<!-- cSpell:disable -->
```sh
sudo mv /etc/httpd/conf.d/welcome.conf{,.bak}
sudo touch /etc/httpd/conf.d/welcome.conf
```
<!-- cSpell:enable -->
Now a new Virtual Host is created for i-doit:
<!-- cSpell:disable -->
```sh
sudo nano /etc/httpd/conf.d/i-doit.conf
```
<!-- cSpell:enable -->
This file receives the following content:
<!-- cSpell:disable -->
```apache
<VirtualHost *:80>
    ServerName idoit.example.com
    ServerAdmin webmaster@example.com

    DocumentRoot /var/www/html

    ErrorLog /var/log/httpd/idoit_error.log
    CustomLog /var/log/httpd/idoit_access.log combined

    <Directory /var/www/html/>
        AllowOverride None
        Options -Indexes +SymLinksIfOwnerMatch

        <IfModule mod_authz_core.c>
            RewriteCond %{REQUEST_METHOD}  =GET
            RewriteRule "^$" "/index.php"

            <Files "*.yml">
                Require all denied
            </Files>
            <FilesMatch "^\.">
                Require all denied
            </FilesMatch>
            <FilesMatch "^(controller|.*\.sh)$">
                Require all denied
            </FilesMatch>
            <Files "*.php">
                Require all denied
            </Files>
            <FilesMatch "\.php\.\d+$">
                Require all denied
            </FilesMatch>
            <FilesMatch "^(index\.php|controller\.php|proxy\.php)$">
                <IfModule mod_auth_kerb.c>
                    Require valid-user
                </IfModule>
                <IfModule !mod_auth_kerb.c>
                    Require all granted
                </IfModule>
            </FilesMatch>
            <Files "jsonrpc.php">
                Require all granted
            </Files>
            <FilesMatch "^(rt\.php|barcode_window\.php|barcode\.php)$">
                Require all granted
            </FilesMatch>
            <FilesMatch "^(qr\.php|qr_img\.php)$">
                Require all granted
            </FilesMatch>
            <FilesMatch "^js\.php$">
                Require all granted
            </FilesMatch>
        </IfModule>

        <IfModule mod_alias.c>
            RedirectMatch 403 /imports/.*$
            RedirectMatch 403 /log/.*$
            RedirectMatch 403 /temp/.*(?<!\.(css|xsl))$
            RedirectMatch 403 /upload/files/.*$
            RedirectMatch 403 /upload/images/.*$
            RedirectMatch 403 /vendor/.*$
        </IfModule>

        <IfModule mod_expires.c>
            ExpiresActive On
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

        <IfModule mod_rewrite.c>
            RewriteEngine On
            RewriteRule favicon\.ico$ images/favicon.ico [L]
            RewriteCond %{REQUEST_FILENAME} !-l
            RewriteCond %{REQUEST_FILENAME} !-f
            RewriteCond %{REQUEST_FILENAME} !-d
            RewriteRule .* index.php [L,QSA]
        </IfModule>

        <Files "*.ini">
            Require all denied
        </Files>
    </Directory>

    TimeOut 600
    ProxyTimeout 600

    <FilesMatch "\.php$">
        <If "-f %{REQUEST_FILENAME}">
            SetHandler "proxy:unix:/run/php-fpm/www.sock|fcgi://localhost"
        </If>
    </FilesMatch>
</VirtualHost>
```
<!-- cSpell:enable -->
!!! note "i-doit ships custom Apache settings in files named **.htaccess**. These must be reviewed after each update and updated in the VirtualHost configuration."

In the next step, the Apache HTTP Server is restarted:
<!-- cSpell:disable -->
```sh
sudo systemctl restart httpd php-fpm
```
<!-- cSpell:enable -->
For Apache to have read and write permissions in the future i-doit installation directory, this must be allowed by **SELinux**:
<!-- cSpell:disable -->
```sh
sudo chown apache:apache -R /var/www/html
sudo semanage fcontext -a -t httpd_sys_rw_content_t "/var/www/html(/.*)?"
sudo restorecon -Rv /var/www/html
```
<!-- cSpell:enable -->
### MariaDB

To ensure MariaDB delivers good performance and can be operated securely, a few steps are needed that should be carried out meticulously. This starts with a secure installation. **The recommendations should be followed**. The **root** user should receive a secure password:

!!! warning "Do **not** enable socket authentication for the root user, as this would prevent i-doit from connecting to the database."
<!-- cSpell:disable -->
```sh
sudo mysql_secure_installation
```
<!-- cSpell:enable -->

Then MariaDB is set to [slow shutdown](https://mariadb.com/kb/en/innodb-system-variables/#innodb_fast_shutdown):
<!-- cSpell:disable -->
```sh
mysql -u root -p -e"SET GLOBAL innodb_fast_shutdown = 0"
```
<!-- cSpell:enable -->
A new file is created for the custom configuration settings:
<!-- cSpell:disable -->
```sh
sudo nano /etc/my.cnf.d/99-i-doit.cnf
```
<!-- cSpell:enable -->
This file contains the new configuration settings. **For optimal performance, these settings should be adjusted to the (virtual) hardware**:
<!-- cSpell:disable -->
```conf
[mysqld]
innodb_buffer_pool_size = 1G
innodb_log_file_size = 512M
innodb_sort_buffer_size = 64M
sort_buffer_size = 262144 # default
join_buffer_size = 262144 # default
max_allowed_packet = 128M
max_heap_table_size = 32M
tmp_table_size = 32M
max_connections = 200
innodb_file_per_table = 1
innodb_flush_log_at_trx_commit = 1
innodb_flush_method = O_DIRECT
innodb_lru_scan_depth = 2048
table_definition_cache = 1024
table_open_cache = 2048
table_open_cache_instances = 8
innodb_stats_on_metadata = 0
sql-mode = ""
```
<!-- cSpell:enable -->
Finally, MariaDB is restarted:
<!-- cSpell:disable -->
```sh
sudo systemctl restart mariadb.service
```
<!-- cSpell:enable -->
Finally, we need to configure SELinux so that Apache can access the network and the database:
<!-- cSpell:disable -->
```sh
# Allow Apache to connect to the database
sudo setsebool -P httpd_can_network_connect_db 1
# Allow Apache to connect to the network
sudo setsebool -P httpd_can_network_connect 1
# Allow Apache to connect to unusual pgsql Port for JDisc
sudo semanage port -a -t postgresql_port_t -p tcp 25321
```
<!-- cSpell:enable -->
## Next Step

The operating system is now prepared so that i-doit can be installed:

[Continue to **Setup**](../setup.md)
