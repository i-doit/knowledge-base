---
search:
  exclude: true
---

# Red Hat Enterprise Linux 8.6 (RHEL 8)

We explain in a few steps in this article which packages need to be installed and configured.

System Requirements
---------------------

The general [System Requirements](../installation/systemvoraussetzungen.md).

This article refers to **[RHEL](https://www.redhat.com/en) in Version 8.6**. To determine which version is being used, this command can be executed on the console:

    cat /etc/os-release

An x86 64-bit system architecture should be used:

    uname -m

**x86_64** means 64-bit, **i386** oder **i686** only 32-bit.

Es gibt weitere Betriebssysteme, die arg verwandt sind mit RHEL, beispielsweise der offene Nachbau **CentOS** und das von Red Hat betreute **Fedora**. Es wird allerdings nur RHEL offiziell unterstützt.

Package Installation
-----------------------

Auf einem aktuell gehaltenen System werden

*   der **Apache** Webserver 2.4,
*   the scripting language **PHP** 8.0,
*   the database management system **MariaDB** 10.5 und
*   der Caching-Server **memcached**

installiert. Allerdings verfügt RHEL in der derzeit aktuellen Version 8.x nur über veraltete Pakete, die den [System Requirements](../installation/systemvoraussetzungen.md) nicht entsprechen. Es ist daher is necessary, über weitere Repositories aktuelle Pakete zu installieren. **Vorsicht:** Dritt-Repositories können die Stabilität des Betriebssystems gefährden.

Doch zunächst werden erste Pakete aus den Standard-Repositories aktualisiert:

    sudo dnf update

Wir prüfen welche PHP Versionen zur Verfügung stehen:

    sudo dnf module list php

Hier setzen wir die Version auf PHP 8.0:

    sudo dnf module enable php:8.0

Die Installation der PHP-Pakete erfolgt danach:

    sudo dnf install php php-common php-bcmath php-cli php-gd php-ldap php-mbstring php-mysqlnd php-opcache php-pdo php-pgsql php-soap php-xml php-gd php-odbc php-opcache php-json php-pecl-zip memcached unzip rsync python3 php-snmp.x86_64 -y

Wir prüfen welche MariadB Versionen zur Verfügung stehen:

    sudo dnf module list mariadb

Hier setzen wir die Version auf MariaDB 10.5:

    sudo dnf module enable mariadb:10.5

Danach werden die Pakete installiert (Achtung: MariaDB beis necessaryt hier das zusätzliche Paket boost-program-options für eine saubere Installation):

    sudo dnf install mariadb-server boost-program-options -y

Damit der Apache Webserver und MariaDB beim Booten gestartet werden, sind diese Befehle erforderlich:

    sudo systemctl enable httpd.service
    sudo systemctl enable mariadb.service
    sudo systemctl enable memcached.service

Anschließend erfolgt der Start beider Dienste:

    sudo systemctl start httpd.service
    sudo systemctl start mariadb.service
    sudo systemctl start memcached.service

Weiterhin wird der Standard-Port 80 von HTTP über die Firewall erlaubt. Diese muss nach der Anpassung neu gestartet werden:

    sudo firewall-cmd --permanent --add-service=http
    sudo systemctl restart firewalld.service

Configuration
-------------

The installed packages for Apache Webserver, PHP und MariaDB already come with configuration files. It is recommended to save custom settings in separate files instead of modifying the existing configuration files. With each package upgrade, the custom settings would be flagged or overwritten. The default configuration settings are supplemented or overwritten by the custom ones.

### PHP

First, a new file is created and filled with the required settings:

    sudo nano /etc/php.d/i-doit.ini

This file receives the following content:

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

The value (in seconds) of **session.gc_maxlifetime** should be greater than or equal to the **Session Timeout** in den [Systemeinstellungen](../installation/manuelle-installation/systemeinstellungen.md) of i-doit.

The parameter **date.timezone** should be adjusted to the local time zone (siehe [Liste unterstützter Zeitzonen](http://php.net/manual/de/timezones.php)).

Anschließend muss **php-fpm** neu gestartet werden:

    sudo systemctl restart php-fpm.service

### Apache Web Server

Der Default-VHost wird beibehalten und ergänzt. Dazu wird eine neue Datei erstellt und bearbeitet:

    sudo nano /etc/httpd/conf.d/i-doit.conf

In dieser Datei wird die ergänzende  gespeichert:

    DirectoryIndex index.php
    DocumentRoot /var/www/html/
    <Directory /var/www/html/>
        AllowOverride All
    </Directory>

i-doit provides custom Apache settings in files named **.htaccess** mit. For these settings to be considered, the setting **AllowOverride All** is necessary.

In the next step wird der Apache Webserver neu gestartet:

    sudo systemctl restart httpd.service

Damit Apache Lese- und Schreibrechte im künftigen Installationsverzeichnis von i-doit hat, muss dies von **SELinux** erlaubt werden:

    sudo chown apache:apache -R /var/www/html
    sudo chcon -t httpd_sys_content_t "/var/www/html/" -R
    sudo chcon -t httpd_sys_rw_content_t "/var/www/html/" -R

### MariaDB

Damit MariaDB eine gute Performance liefert und sicher betrieben werden kann, sind einige, wenige Schritte is necessary, die penibel ausgeführt werden sollten. Dies fängt an mit einer sicheren Installation. **Den Empfehlungen sollte gefolgt werden**. The user **root** should receive a secure password:

    mysql_secure_installation

Then MariaDB is stopped. Wichtig ist hierbei das Verschieben von nicht beis necessaryten Dateien (otherwise there is a risk of significant performance loss):

    mysql -uroot -p -e"SET GLOBAL innodb_fast_shutdown = 0"
    sudo systemctl stop mariadb.service
    sudo mv /var/lib/mysql/ib_logfile[01] /tmp

A new file is created for the custom configuration settings:

    sudo nano /etc/my.cnf.d/99-i-doit.cnf

This file contains the new configuration settings. **For optimal performance, these settings should be adjusted to the (virtual) hardware**:

```shell
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

Finally, MariaDB gestartet:

    sudo systemctl start mariadb.service

Zum Schluss müssen wir noch SELinux konfigurieren:

    sudo setsebool -P httpd_can_network_connect_db 1

## Next Step

The operating system is now prepared so that i-doit can be installed:

[Continue to *Setup* …](../installation/manuelle-installation/setup.md)
