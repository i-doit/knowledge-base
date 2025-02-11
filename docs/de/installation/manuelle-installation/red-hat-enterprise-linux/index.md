---
title: Red Hat Enterprise Linux 9.4
description: i-doit installation auf RHEL 9.4
icon: material/redhat
status:
lang: de
---

Welche Pakete zu installieren und zu konfigurieren sind, erklären wir in wenigen Schritten in diesem Artikel.

## Systemvoraussetzungen

Es gelten die allgemeinen [Systemvoraussetzungen](../../systemvoraussetzungen.md).

Um zu bestimmen, welche Version eingesetzt wird, kann auf der Konsole dieser Befehl ausgeführt werden:

```sh
cat /etc/os-release
```

Als Systemarchitektur sollte ein x86 in 64bit zum Einsatz kommen:

```sh
uname -m
```

**x86_64** bedeutet 64bit, **i386** oder **i686** lediglich 32bit.

## Installation der Pakete

Auf einem aktuell gehaltenen System werden

*   der **Apache** HTTP Server 2.4,
*   die Script-Sprache **PHP-FPM** 8.2,
*   das Datenbankmanagementsystem **MariaDB** 10.11 und
*   der Caching-Server **memcached**

installiert.

Zunächst werden erste Pakete aus den Standard-Repositories aktualisiert:

```sh
sudo dnf update
```

Installieren von PHP 8.2 und MariaDB über Module Stream:

```sh
sudo dnf module enable php:8.2 mariadb:10.11 -y
sudo dnf module install php:8.2 mariadb:10.11 -y
```

Die Installation weiterer Pakete erfolgt danach:

```sh
sudo dnf install httpd boost-program-options memcached unzip php php-{bcmath,curl,gd,json,ldap,mysqli,mysqlnd,odbc,pecl-zip,pgsql,pdo,snmp,soap,zip} -y
```

Damit der Apache HTTP Server, MariaDB, PHP-FPM und memcached auch beim Booten gestartet werden, sind diese Befehle erforderlich:

```sh
sudo systemctl enable httpd mariadb php-fpm memcached
```

Anschließend erfolgt der Start der Dienste:

```sh
sudo systemctl start httpd mariadb php-fpm memcached
```

Weiterhin wird der Standard-Port 80 von HTTP über die Firewall erlaubt. Diese muss nach der Anpassung neu gestartet werden:

```sh
sudo firewall-cmd --permanent --add-service=http
sudo systemctl restart firewalld.service
```

!!! info "Für HTTPS müssen weitere Schritte durchgeführt werden die hier nicht behandelt werden, siehe [Sicherheit und Schutz](../../../wartung-und-betrieb/sicherheit-und-schutz.md)"

## Konfiguration

Die installierten Pakete für Apache HTTP Server, PHP und MariaDB bringen bereits Konfigurationsdateien mit. Es empfiehlt sich, abweichende Einstellungen in gesonderten Dateien zu speichern, anstatt die vorhandenen Konfigurationsdateien anzupassen. Bei jedem Paket-Upgrade würden die abweichenden Einstellungen bemängelt oder überschrieben werden. Die Einstellungen der Standardkonfiguration werden durch die benutzerdefinierten ergänzt bzw. überschrieben.

### PHP-FPM Konfiguration

Zunächst wird die alte Konfiguration, durch umbenennen, deaktiviert:

```sh
sudo mv /etc/php-fpm.d/www.conf{,.bak}
```

und anschließend eine neue Datei erstellt und mit den Einstellungen befüllt:

```sh
sudo nano /etc/php-fpm.d/i-doit.conf
```

```ini
[i-doit]
listen = /var/run/php-fpm/i-doit.sock
user = apache
group = apache
listen.owner = apache
listen.group = apache
pm = dynamic
pm.max_children = 50
pm.start_servers = 5
pm.min_spare_servers = 5
pm.max_spare_servers = 35
security.limit_extensions = .php
```

### PHP Konfiguration

Zunächst wird eine neue Datei erstellt und mit den nötigen Einstellungen befüllt:

```sh
sudo nano /etc/php.d/i-doit.ini
```

!!! example "Diese Datei erhält folgende von uns vorgegebenen Inhalt. Für mehr Informationen zu den Parametern, schauen Sie auf [PHP.net](https://www.php.net/manual/en/install.fpm.configuration.php) vorbei"

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

Das `memory_limit` muss bei bedarf z.B. bei sehr großen Reports oder umfangreichen Dokumenten erhöht werden.
Der Wert (in Sekunden) von **session.gc_maxlifetime** sollte größer oder gleich dem **Session Timeout** in den [Systemeinstellungen](../systemeinstellungen.md) von i-doit sein.
Der Parameter **date.timezone** sollte auf die lokale Zeitzone anpasst werden (siehe [Liste unterstützter Zeitzonen](http://php.net/manual/de/timezones.php)).

### Apache HTTP Server

Die Welcome Page wird, durch umbenennen, deaktiviert:

```sh
sudo mv /etc/httpd/conf.d/welcome.conf{,.bak}
```

Der Default-VirtualHost wird deaktiviert und ein neuer angelegt:

```sh
sudo mv /etc/php-fpm.d/www.conf{,.bak}
sudo nano /etc/httpd/conf.d/i-doit.conf
```

Diese Datei erhält folgenden Inhalt:

```ini
DirectoryIndex index.php
DocumentRoot /var/www/html/i-doit

<Directory /var/www/html/i-doit>
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
        SetHandler "proxy:unix:/var/run/php-fpm/i-doit.sock|fcgi://localhost"
    </If>
</FilesMatch>
```

!!! note "i-doit liefert abweichende Apache-Einstellungen in Dateien mit dem Namen **.htaccess** mit. Diese müssen nach jedem Update geprüft und in der VirtualHost Konfiguration aktualisiert werden."

Im nächsten Schritt wird der Apache HTTP Server neu gestartet:

```sh
sudo systemctl restart httpd php-fpm
```

Damit Apache Lese- und Schreibrechte im künftigen Installationsverzeichnis von i-doit hat, muss dies von **SELinux** erlaubt werden:

```sh
sudo chown apache:apache -R /var/www/html
sudo chcon -t httpd_sys_content_t "/var/www/html/" -R
sudo chcon -t httpd_sys_rw_content_t "/var/www/html/" -R
```

### MariaDB

Damit MariaDB eine gute Performance liefert und sicher betrieben werden kann, sind einige, wenige Schritte nötig, die penibel ausgeführt werden sollten. Dies fängt an mit einer sicheren Installation. **Den Empfehlungen sollte gefolgt werden**. Der Benutzer **root** sollte ein sicheres Passwort erhalten:

```sh
mysql_secure_installation
```

Anschließend wird MariaDB gestoppt und auf [slow shutdown](https://mariadb.com/kb/en/innodb-system-variables/#innodb_fast_shutdown) gesetzt:

```sh
mysql -u root -p -e"SET GLOBAL innodb_fast_shutdown = 0"
sudo systemctl stop mariadb.service
```

Für die abweichenden Konfigurationseinstellungen wird eine neue Datei erstellt:

```sh
sudo nano /etc/my.cnf.d/99-i-doit.cnf
```

Diese Datei enthält die neuen Konfigurationseinstellungen. **Für eine optimale Performance sollten diese Einstellungen an die (virtuelle) Hardware angepasst werden**:

```sh
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

Abschließend wird MariaDB gestartet:

```sh
sudo systemctl restart mariadb.service
```

Zum Schluss müssen wir noch SELinux konfigurieren:

```sh
sudo setsebool -P httpd_can_network_connect_db 1
```

## Nächster Schritt

Das Betriebssystem ist nun vorbereitet, sodass i-doit installiert werden kann:

[Weiter zu **Setup**](../setup.md)
