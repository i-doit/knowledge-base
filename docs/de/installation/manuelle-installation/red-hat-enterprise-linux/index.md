---
title: Red Hat Enterprise Linux 10
description: i-doit installation auf Red Hat Enterprise Linux 10
icon: material/redhat
status:
lang: de
---

!!! note "Getestet mit i-doit **38** und **Red Hat Enterprise Linux 10 (Coughlan)**"

!!! warning "Red Hat Subscription erforderlich"
    Für die Installation von RHEL-Paketen und die Aktivierung des CRB-Repositories wird eine aktive **Red Hat Subscription** benötigt. Eine kostenlose Developer-Subscription ist unter [developers.redhat.com](https://developers.redhat.com) erhältlich.

Welche Pakete zu installieren und zu konfigurieren sind, erklären wir in wenigen Schritten in diesem Artikel.

## Systemvoraussetzungen

Es gelten die allgemeinen [Systemvoraussetzungen](../../systemvoraussetzungen.md). Um zu bestimmen, welche Version eingesetzt wird, kann auf der Konsole dieser Befehl ausgeführt werden:
<!-- cSpell:disable -->
```sh
cat /etc/os-release
```
<!-- cSpell:enable -->
Als Systemarchitektur sollte ein x86 in 64bit zum Einsatz kommen:
<!-- cSpell:disable -->
```sh
uname -m
```
<!-- cSpell:enable -->
**x86_64** bedeutet 64bit, **i386** oder **i686** lediglich 32bit.

## Installation der Pakete

Auf einem aktuell gehaltenen System werden

*   der **Apache** HTTP Server 2.4,
*   die Script-Sprache **PHP-FPM** 8.3,
*   das Datenbankmanagementsystem **MariaDB** 10.11 und
*   der Caching-Server **memcached**

installiert.

Zunächst werden erste Pakete aus den Standard-Repositories aktualisiert:
<!-- cSpell:disable -->
```sh
sudo dnf update
```
<!-- cSpell:enable -->
Für einige Pakete wird **EPEL** benötigt. Auf RHEL ist EPEL nicht als Paket verfügbar, sondern wird direkt von fedoraproject.org installiert:
<!-- cSpell:disable -->
```sh
sudo dnf install https://dl.fedoraproject.org/pub/epel/epel-release-latest-10.noarch.rpm -y
```
<!-- cSpell:enable -->
Das **CRB-Repository** (CodeReady Builder) wird über den Subscription Manager aktiviert:
<!-- cSpell:disable -->
```sh
sudo subscription-manager repos --enable codeready-builder-for-rhel-10-x86_64-rpms
```
<!-- cSpell:enable -->
Die Installation weiterer Pakete:
<!-- cSpell:disable -->
```sh
sudo dnf install -y httpd httpd-tools mariadb-server mariadb memcached unzip sudo moreutils php php-fpm php-bcmath php-cli php-common php-curl php-gd php-json php-ldap php-mbstring php-mysqlnd php-opcache php-pdo php-pgsql php-process php-soap php-xml php-zip
```
<!-- cSpell:enable -->
Damit der Apache HTTP Server, MariaDB, PHP-FPM und memcached auch beim Booten gestartet werden, sind diese Befehle erforderlich:
<!-- cSpell:disable -->
```sh
sudo systemctl enable httpd mariadb php-fpm memcached
```
<!-- cSpell:enable -->
Anschließend erfolgt der Start der Dienste:
<!-- cSpell:disable -->
```sh
sudo systemctl start httpd mariadb php-fpm memcached
```
<!-- cSpell:enable -->
Weiterhin wird der Standard HTTP Port 80 über die Firewall erlaubt. Diese muss nach der Anpassung neu gestartet werden:
<!-- cSpell:disable -->
```sh
sudo firewall-cmd --permanent --add-service=http
sudo systemctl restart firewalld.service
```
<!-- cSpell:enable -->

!!! success "Wenn du i-doit via HTTPS nutzen möchtest, musst du eine entsprechende VirtualHost-Konfiguration für Port 443 erstellen. [Dies wird hier nicht beschrieben.](https://docs.redhat.com/en/documentation/red_hat_enterprise_linux/10/html/deploying_web_servers_and_reverse_proxies/setting-up-the-apache-http-web-server#configuring-tls-encryption-on-an-apache-http-server)"

## Konfiguration

Die installierten Pakete für Apache HTTP Server, PHP und MariaDB bringen bereits Konfigurationsdateien mit. **Es empfiehlt sich, abweichende Einstellungen in gesonderten Dateien zu speichern**, anstatt die vorhandenen Konfigurationsdateien anzupassen. Die Einstellungen der Standardkonfiguration werden durch die benutzerdefinierten ergänzt bzw. überschrieben.

### PHP Konfiguration

Zunächst wird eine neue Datei erstellt und mit den nötigen Einstellungen befüllt:
<!-- cSpell:disable -->
```sh
sudo nano /etc/php.d/i-doit.ini
```
<!-- cSpell:enable -->
!!! example "Diese Datei erhält folgende von uns vorgegebenen Inhalt. Für mehr Informationen zu den Parametern, schaue dir auf [PHP.net](https://www.php.net/manual/en/install.fpm.configuration.php) vorbei"
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
Das `memory_limit` muss bei Bedarf z.B. bei sehr großen Reports oder umfangreichen Dokumenten erhöht werden.
Der Wert (in Sekunden) von **session.gc_maxlifetime** sollte größer oder gleich dem **Session Timeout** in den [Systemeinstellungen](../systemeinstellungen.md) von i-doit sein.
Der Parameter **date.timezone** sollte auf die lokale Zeitzone angepasst werden (siehe [Liste unterstützter Zeitzonen](http://php.net/manual/de/timezones.php)).

### Apache HTTP Server Konfiguration

Die Welcome Page wird, durch umbenennen, deaktiviert:
<!-- cSpell:disable -->
```sh
sudo mv /etc/httpd/conf.d/welcome.conf{,.bak}
sudo touch /etc/httpd/conf.d/welcome.conf
```
<!-- cSpell:enable -->
Nun wird ein neuer Virtual Host für i-doit angelegt:
<!-- cSpell:disable -->
```sh
sudo nano /etc/httpd/conf.d/i-doit.conf
```
<!-- cSpell:enable -->
Diese Datei erhält folgenden Inhalt:
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
!!! note "i-doit liefert abweichende Apache-Einstellungen in Dateien mit dem Namen **.htaccess** mit. Diese müssen nach jedem Update geprüft und in der VirtualHost Konfiguration aktualisiert werden."

Im nächsten Schritt wird der Apache HTTP Server neu gestartet:
<!-- cSpell:disable -->
```sh
sudo systemctl restart httpd php-fpm
```
<!-- cSpell:enable -->
Damit Apache Lese- und Schreibrechte im künftigen Installationsverzeichnis von i-doit hat, muss dies von **SELinux** erlaubt werden:
<!-- cSpell:disable -->
```sh
sudo chown apache:apache -R /var/www/html
sudo semanage fcontext -a -t httpd_sys_rw_content_t "/var/www/html(/.*)?"
sudo restorecon -Rv /var/www/html
```
<!-- cSpell:enable -->
### MariaDB

Damit MariaDB eine gute Performance liefert und sicher betrieben werden kann, sind einige, wenige Schritte nötig, die penibel ausgeführt werden sollten. Dies fängt an mit einer sicheren Installation. **Den Empfehlungen sollte gefolgt werden**. Der Benutzer **root** sollte ein sicheres Passwort erhalten:

!!! warning "Aktiviere die Socket-Authentifizierung **nicht** für den Benutzer root, da dies i-doit daran hindern würde, eine Verbindung zur Datenbank herzustellen."
<!-- cSpell:disable -->
```sh
sudo mysql_secure_installation
```
<!-- cSpell:enable -->

Anschließend wird MariaDB auf [slow shutdown](https://mariadb.com/kb/en/innodb-system-variables/#innodb_fast_shutdown) gesetzt:
<!-- cSpell:disable -->
```sh
mysql -u root -p -e"SET GLOBAL innodb_fast_shutdown = 0"
```
<!-- cSpell:enable -->
Für die abweichenden Konfigurationseinstellungen wird eine neue Datei erstellt:
<!-- cSpell:disable -->
```sh
sudo nano /etc/my.cnf.d/99-i-doit.cnf
```
<!-- cSpell:enable -->
Diese Datei enthält die neuen Konfigurationseinstellungen. **Für eine optimale Performance sollten diese Einstellungen an die (virtuelle) Hardware angepasst werden**:
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
Abschließend wird MariaDB gestartet:
<!-- cSpell:disable -->
```sh
sudo systemctl restart mariadb.service
```
<!-- cSpell:enable -->
Zum Schluss müssen wir noch SELinux konfigurieren, damit Apache auf das Netzwerk und die Datenbank zugreifen kann:
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
## Nächster Schritt

Das Betriebssystem ist nun vorbereitet, sodass i-doit installiert werden kann:

[Weiter zu **Setup**](../setup.md)
