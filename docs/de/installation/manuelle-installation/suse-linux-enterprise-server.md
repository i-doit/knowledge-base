---
title: Suse Linux Enterprise Server 15 SP6
description: Suse Linux Enterprise Server 15 SP6
icon: simple/suse
status:
lang: de
---

!!! note "Stand i-doit **32**"

Welche Pakete zu installieren und zu konfigurieren sind, erklären wir in wenigen Schritten in diesem Artikel.

## Systemvoraussetzungen

Es gelten die allgemeinen [Systemvoraussetzungen](../systemvoraussetzungen.md).

Dieser Artikel bezieht sich auf [**SUSE Linux Enterprise Server 15 SP6**](https://www.suse.com/). Um zu bestimmen, welche Version eingesetzt wird, kann auf der Konsole dieser Befehl ausgeführt werden:

```sh
cat /etc/os-release
```

Als Systemarchitektur sollte ein x86 in 64bit zum Einsatz kommen:

```sh
uname -m
```

**x86_64** bedeutet 64bit, **i386** oder **i686** lediglich 32bit.

## Installation der Pakete

Die Standard-Repositories von SUSE Linux Enterprise Server (SLES) bringen bereits fast alle nötigen Pakete mit, um

-   den **Apache** HTTP Server 2.4,
-   die Script-Sprache **PHP** 8.2,
-   das Datenbankmanagementsystem **MariaDB** 10.11 und
-   den Caching-Server **memcached**

zu installieren.

Vorerst ist die Aktivierung von zusätzlichen Add-ons nötig:

-   **Web and Scripting Module**

Um zu prüfen, ob das **Web and Scripting Add-on Module** aktiviert ist, ruft man folgenden Befehl auf:

```sh
sudo zypper repos -E
```

Sollte es nicht aktiviert sein, kann es mit folgendem Befehl aktiviert werden:

```sh
sudo suseconnect -p sle-module-web-scripting/15.6/x86_64
```

Mit zypper werden anschließend die Pakete aktualisiert:

```sh
sudo zypper refresh && sudo zypper update
```

Nun werden die von i-doit benötigten Pakete installiert:

```sh
sudo zypper install vim apache2 apache2-mod-php8 mariadb-server mariadb-client memcached php8 php8-{bz2,ctype,bcmath,curl,gd,gettext,fileinfo,fpm,ldap,mbstring,memcached,mysql,odbc,opcache,openssl,phar,posix,pgsql,pdo,snmp,soap,sockets,sqlite,zip,zlib}
```

Damit die notwendigen Dienste beim Booten gestartet werden, ist dieser Befehl erforderlich:

```sh
sudo systemctl enable apache2 mysql memcached
```

Anschließend erfolgt der Start der Dienste:

```sh
sudo systemctl start apache2 mysql memcached
```

!!! info "Für **HTTPS** müssen weitere Schritte durchgeführt werden die hier nicht behandelt werden, siehe [Sicherheit und Schutz](../../wartung-und-betrieb/sicherheit-und-schutz.md)"

## Konfiguration

Die installierten Pakete für Apache HTTP Server, PHP und MariaDB bringen bereits Konfigurationsdateien mit. Es empfiehlt sich, abweichende Einstellungen in gesonderten Dateien zu speichern, anstatt die vorhandenen Konfigurationsdateien anzupassen. Bei jedem Paket-Upgrade würden die abweichenden Einstellungen bemängelt oder überschrieben werden. Die Einstellungen der Standardkonfiguration werden durch die benutzerdefinierten ergänzt bzw. überschrieben.

### PHP-FPM Konfiguration

Zunächst wird die alte Konfiguration, durch umbenennen, deaktiviert:

```sh
sudo mv /etc/php8/fpm/php-fpm.d/www.conf /etc/php8/fpm/php-fpm.d/www.conf.bak
```

und anschließend eine neue Datei erstellt und mit den Einstellungen befüllt:

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

### PHP Konfiguration

Zunächst wird eine neue Datei erstellt und mit den nötigen Einstellungen befüllt:

```sh
sudo vi /etc/php8/conf.d/i-doit.ini
```

!!! example "Diese Datei erhält folgende von uns vorgegebenen Inhalt. Für mehr Informationen zu den Parametern, schauen Sie auf [PHP.net](https://www.php.net/manual/en/install.fpm.configuration.php) vorbei"

Diese Datei erhält folgenden Inhalt:

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

Das `memory_limit` muss bei bedarf z.B. bei sehr großen Reports oder umfangreichen Dokumenten erhöht werden.
Der Wert (in Sekunden) von **session.gc_maxlifetime** sollte größer oder gleich dem **Session Timeout** in den [Systemeinstellungen](../systemeinstellungen.md) von i-doit sein.
Der Parameter **date.timezone** sollte auf die lokale Zeitzone anpasst werden (siehe [Liste unterstützter Zeitzonen](http://php.net/manual/de/timezones.php)).

### Apache2 HTTP Server

Ein wird eine neue VHost-Konfiguration erzeugt:

```sh
sudo vi /etc/apache2/vhosts.d/i-doit.conf
```

In dieser Datei wird die VHost-Konfiguration angepasst und gespeichert:

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
    ## "AllowOverride FileInfo AuthConfig". After each i-doit update check if the .htaccess file, in the i-doit directory,
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

i-doit liefert abweichende Apache-Einstellungen in der **.htaccess** Datei mit. Die dort enthaltenen Konfigurationen müssen nach einem Update geprüft und Änderungen in der VHost-Konfiguration übernommen werden.

Im nächsten Schritt werden die nötigen Apache2 HTTP Server Module **php8**, **rewrite** und **mod_access_compat** aktiviert:

```sh
sudo a2enmod proxy && sudo a2enmod proxy_fcgi && sudo a2enmod php8 && sudo a2enmod rewrite && sudo a2enmod mod_access_compat
```

!!! note "Leider muss jedes Modul einzeln aktiviert werden"

und dann die notwendigen Dienste neu starten:

```sh
sudo systemctl restart apache2 php-fpm
```

### MariaDB

Damit MariaDB eine gute Performance liefert und sicher betrieben werden kann, sind einige, wenige Schritte nötig, die penibel ausgeführt werden sollten. Dies fängt an mit einer sicheren Installation. **Den Empfehlungen sollte gefolgt werden sollten**. Der Benutzer **root** sollte ein sicheres Passwort erhalten:

```sh
sudo mysql_secure_installation
```

Damit i-doit beim Setup den Benutzer **root** verwenden darf, ruft man die Shell von MariaDB auf:

```sh
sudo mysql -uroot
```

In der Shell von MariaDB werden nun folgende SQL-Statements ausgeführt:

!!! note "Bitte ('passwort') ersetzen"

```sql
ALTER USER 'root'@'localhost' IDENTIFIED VIA mysql_native_password USING PASSWORD('passwort');
```

Der Modus für das Herunterfahren von InnoDB muss noch geändert werden. Der Wert 0 führt dazu, dass eine vollständige Bereinigung und eine Zusammenführung der Änderungspuffer durchgeführt wird, bevor MariaDB heruntergefahren wird:

```sql
FLUSH PRIVILEGES;
SET GLOBAL innodb_fast_shutdown = 0;
EXIT;
```

Für die abweichenden Konfigurationseinstellungen wird eine neue Datei erstellt:

```sh
sudo vi /etc/my.cnf.d/99-i-doit.cnf
```

Diese Datei enthält die neuen Konfigurationseinstellungen. **Für eine optimale Performance sollten diese Einstellungen an die (virtuelle) Hardware angepasst werden**:

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

Abschließend wird MariaDB neugestartet:

```sh
sudo systemctl restart mysql
```

und der Firewall Verbindungen via **HTTP** erlaubt:

```sh
sudo firewall-cmd --permanent --add-service=http && sudo firewall-cmd --reload
```

Bevor i-doit nun erreichbar ist, muss **Apparmor**, für PHP-FPM, entweder **konfiguriert**, **deaktiviert** oder in den sogenannten **complain** modus versetzt werden.
In dieser Anleitung nutzen wir den complain Modus, sollte im Nachgang richtig konfiguriert werden:

```sh
sudo aa-complain '/etc/apparmor.d/php-fpm'
```

## Nächster Schritt

Das Betriebssystem ist nun vorbereitet, sodass i-doit installiert werden kann:

[Weiter zu **Setup**](setup.md)
