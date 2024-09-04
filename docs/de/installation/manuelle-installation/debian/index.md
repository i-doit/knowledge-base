---
title: Debian 12 GNU/Linux
description: i-doit installation auf Debian 12
icon: material/debian
status:
lang: de
---

Welche Pakete zu installieren und zu konfigurieren sind, erklären wir in wenigen Schritten in diesem Artikel. Wir verwenden eine Umgebung ohne **Desktop**.

!!! warning ""
    Wenn Sie Debian installieren, gelangen Sie schließlich zu einem "Softwareauswahl"-Dialog, der eine Liste von Kontrollkästchen enthält, um die Software auszuwählen, die Sie zunächst installieren möchten. Hier ist das Kontrollkästchen "Debian-Desktop-Umgebung" bereits angekreuzt. Wenn Sie dieses Kontrollkästchen deaktivieren und alle anderen Kontrollkästchen für die Desktop-Umgebung (GNOME, Xfce usw.) nicht ankreuzen, führt dies zu einer GUI-losen Installation:

    [![Software selection](../../../assets/images/de/installation/manuelle-installation/debian/gui.png)](../../../assets/images/de/installation/manuelle-installation/debian/gui.png)

## Systemvoraussetzungen

Es gelten die allgemeinen [Systemvoraussetzungen](../../systemvoraussetzungen.md).

Dieser Artikel bezieht sich auf [**Debian GNU/Linux 12 "bookworm"**](https://debian.org/). Um zu bestimmen, welche Debian Version eingesetzt wird, kann auf der Konsole dieser Befehl ausgeführt werden:

```shell
cat /etc/debian_version
```

Als Systemarchitektur sollte ein x86 in 64bit zum Einsatz kommen:

```shell
uname -m
```

**x86_64** bedeutet 64bit, **i386** oder **i686** lediglich 32bit.

## Installation der Pakete

Die Standard-Repositories von Debian GNU/Linux bringen bereits alle nötigen Pakete mit, um

-   den **Apache** Webserver 2.4,
-   die Script-Sprache **PHP** 8.2,
-   das Datenbankmanagementsystem **MariaDB** 10.11 und
-   den Caching-Server **memcached**

zu installieren:

```shell
apt update
apt install apache2 libapache2-mod-php mariadb-client mariadb-server memcached unzip sudo moreutils php php-{bcmath,cli,common,curl,gd,imagick,json,ldap,mbstring,memcached,mysql,pgsql,soap,xml,zip}
```

## Konfiguration

Die installierten Pakete für Apache Webserver, PHP und MariaDB bringen bereits Konfigurationsdateien mit. Es empfiehlt sich, abweichende Einstellungen in gesonderten Dateien zu speichern, anstatt die vorhandenen Konfigurationsdateien anzupassen. Bei jedem Paket-Upgrade würden die abweichenden Einstellungen bemängelt oder überschrieben werden. Die Einstellungen der Standardkonfiguration werden durch die benutzerdefinierten ergänzt bzw. überschrieben.

### PHP

Zunächst wird eine neue Datei erstellt und mit den nötigen Einstellungen befüllt:

```shell
sudo nano /etc/php/8.2/mods-available/i-doit.ini
```

!!! example "Diese Datei erhält folgende von uns vorgegebenen Inhalt. Für mehr Informationen zu den Parametern, schauen Sie auf [PHP.net](https://www.php.net/manual/de/ini.core.php) vorbei"

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
mysqli.default_socket = /var/run/mysqld/mysqld.sock
```

Das `memory_limit` muss bei bedarf z.B. bei sehr großen Reports oder umfangreichen Dokumenten erhöht werden.<br>
Der Wert (in Sekunden) von **session.gc_maxlifetime** sollte größer oder gleich dem **Session Timeout** in den [Systemeinstellungen](../systemeinstellungen.md) von i-doit sein.<br>
Der Parameter **date.timezone** sollte auf die lokale Zeitzone anpasst werden (siehe [Liste unterstützter Zeitzonen](http://php.net/manual/de/timezones.php)).

Anschließend werden die benötigten PHP-Module aktiviert und der Apache Webserver neu gestartet:

```shell
sudo phpenmod i-doit memcached
sudo systemctl restart apache2.service
```

### Apache Webserver

Der Default-VHost wird deaktiviert und ein neuer angelegt:

```shell
sudo a2dissite 000-default
sudo nano /etc/apache2/sites-available/i-doit.conf
```

!!! example "Diese Datei erhält folgende von uns vorgegebenen Inhalt. Für mehr Informationen zu den Parametern, schauen Sie auf [httpd.apache.org](https://httpd.apache.org/docs/2.4/de/mod/core.html) vorbei"

```shell
<VirtualHost *:80>
        ServerAdmin i-doit@example.net

        DocumentRoot /var/www/html/
        <Directory /var/www/html/>
                AllowOverride All
                Require all granted
        </Directory>

        LogLevel warn
        ErrorLog ${APACHE_LOG_DIR}/error.log
        CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
```

i-doit liefert abweichende Apache-Einstellungen in Dateien mit dem Namen **.htaccess** mit. Damit diese Einstellungen berücksichtigt werden, ist die Einstellung **AllowOverride All** nötig.<br>
Im nächsten Schritt werden der neue VHost und das nötige Apache-Modul **rewrite** aktiviert sowie der Apache Webserver neu gestartet:

```shell
sudo a2ensite i-doit
sudo a2enmod rewrite
sudo systemctl restart apache2.service
```

### MariaDB

Damit MariaDB eine gute Performance liefert und sicher betrieben werden kann, sollten Sie nicht nur unserer Anleitung folgen, sondern sich auch weiter Informieren. Angefangen, mit einer sicheren Installation bei der den Empfehlungen gefolgt werden sollte. Außerdem sollte der Benutzer **root** ein sicheres Passwort erhalten.

```shell
sudo mysql_secure_installation
```

Der Modus für das Herunterfahren von InnoDB muss noch geändert werden. Der Wert `0` führt dazu, dass eine vollständige Bereinigung und eine Zusammenführung der Änderungspuffer durchgeführt wird, bevor MariaDB heruntergefahren wird:

```shell
mysql -u root -p -e "SET GLOBAL innodb_fast_shutdown = 0"
```

Für die abweichenden Konfigurationseinstellungen wird eine neue Datei erstellt und unsere standard Konfiguration eingefügt:

```shell
sudo nano /etc/mysql/mariadb.conf.d/99-i-doit.cnf
```

!!! example "Diese Datei enthält die neuen Konfigurationseinstellungen. Für eine **optimale Performance sollten diese Einstellungen an die (virtuelle) Hardware angepasst werden**. Für optimale Einstellungen bitte unter [mariadb.com](https://mariadb.com/kb/en/optimization-and-tuning/) schauen"

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

Abschließend wird MariaDB gestartet:

```shell
sudo systemctl restart mysql.service
```

!!! bug "[Warning] You need to use --log-bin to make --expire-logs-days or --binlog-expire-logs-seconds work."
    Taucht diese Meldung im Log auf, dann einfach `expire_logs_days = 10` in der Datei `/etc/mysql/mariadb.conf.d/50-server.cnf` auskommentieren.
    Bug Report bei Debian -> <https://salsa.debian.org/mariadb-team/mariadb-server/-/merge_requests/61>

## Nächster Schritt

Das Betriebssystem ist nun vorbereitet, sodass i-doit installiert werden kann:

[Weiter zu **Setup**](../setup.md){ .md-button .md-button--primary }
