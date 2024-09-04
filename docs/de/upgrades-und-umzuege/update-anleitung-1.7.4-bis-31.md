---
title: Update Anleitung von i-doit 1.7.4 zu 31
description: i-doit update guide
icon: fontawesome/brands/linux
status:
lang: de
---

## Wichtige Informationen, bevor Sie beginnen {#important-information}

Hier finden Sie eine kurze Anleitung zum Aktualisieren Ihres i-doit auf i-doit 31.<br>
Möglicherweise müssen Sie Ihr Betriebssystem aktualisieren.<br>
Diese Anweisungen gelten für **Debian**, die verwendeten Befehle unterscheiden sich in anderen Betriebssystemen. Bevor Sie beginnen, laden Sie alle Updates herunter, die Sie durchführen müssen, und kopieren Sie sie in den i-doit-Stammordner.

!!! danger "**Wichtige Hinweise im Voraus**"

    Diese Anleitung wird ohne Gewähr bereitgestellt und funktioniert möglicherweise nicht in Ihrem spezifischen Anwendungsfall.<br>
    Dies hängt von der Konfiguration und Installationsart Ihrer Instanz ab.
    Auch benötigte **Add-on**-Updates werden nicht erwähnt.

!!! attention "Backup"
    Erstellen Sie vor jedem Aktualisierungsschritt ein Backup oder einen Snapshot!

!!! attention "Versionshinweise"
    Lesen Sie die [Versionshinweise](../versionshistorie/index.md) bevor Sie auf eine neue Version aktualisieren.

!!! attention "Hotfix-Hinweis"
    Verwenden Sie Hotfixes ausschließlich mit der angegebenen Version. Hotfixes werden in neueren Versionen enthalten sein, sodass eine erneute Installation nicht erforderlich ist.
    Sollten Sie eine ältere i-doit-Version verwenden, ist es unerlässlich, zuerst ein Update auf die neueste Version durchzuführen.
    Wenn ein Hotfix erforderlich ist, um eine ältere Version zu aktualisieren, finden Sie diesen in den Hotfix-Unterkapiteln hier im Knowledge Base.
    Da es sich um Hotfixes handelt, empfehlen wir, sie nur zu installieren, wenn die Anpassungen für einen reibungslosen Betrieb Ihrer Installation erforderlich sind oder wenn Sie vom Support-Team dazu aufgefordert werden. Stellen Sie sicher, dass Sie ein [Backup von i-doit](../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md) erstellt haben, bevor Sie einen Hotfix verwenden.
    Informieren Sie uns über die Verwendung von Hotfixes, wenn Sie sich anschließend an unser Support-Team wenden.

| <!-- -->         | <!-- -->                                                           | <!-- -->                                                           | <!-- -->                                             | <!-- -->                                             | <!-- -->                                             | <!-- -->                                             | <!-- -->                                             | <!-- -->                                    | <!-- -->                                    | <!-- -->                                       | <!-- -->                                       | <!-- -->                                       | <!-- -->                                                            | <!-- -->                                                | <!-- -->                                                | <!-- -->                                                  | <!-- -->                                              | <!-- -->              | <!-- -->       | <!-- -->                       | <!-- -->              | <!-- -->              |
| ---------------- | ------------------------------------------------------------------ | ------------------------------------------------------------------ | ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- | ------------------------------------------- | ------------------------------------------- | ---------------------------------------------- | ---------------------------------------------- | ---------------------------------------------- | ------------------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | --------------------------------------------------------- | ----------------------------------------------------- | --------------------- | -------------- | ------------------------------ | --------------------- | --------------------- |
| i-doit Version   | 31                                                                 | 30                                                                 | 29                                                   | 28                                                   | 27                                                   | 26                                                   | 25                                                   | 24                                          | 23, 22, 21, 20, 1.19                        | 1.19                                           | 1.18                                           | 1.17                                           | 1.16                                                                | 1.15                                                    | 1.14                                                    | 1.13                                                      | 1.12                                                  | 1.11                  | 1.10           | 1.9                            | 1.8                   | 1.7                   |
| Release          | 2024-05                                                            | 2024-04                                                            | 2024-02                                              | 2023-12                                              | 2023-08                                              | 2023-08                                              | 2023-06                                              | 2023-05                                     | 2023-03 - 2022-09                           | 2022-09                                        | 2022-01                                        | 2021-07                                        | 2021-01                                                             | 2020-07                                                 | 2020-01                                                 | 2019-06                                                   | 2018-12                                               | 2018-06               | 2017-12        | 2017-05                        | 2016-10               | 2016-03               |
| Apache Webserver | 2.4                                                                | 2.4                                                                | 2.4                                                  | 2.4                                                  | 2.4                                                  | 2.4                                                  | 2.4                                                  | 2.4                                         | 2.4                                         | 2.4                                            | 2.4                                            | 2.4                                            | 2.4                                                                 | 2.4                                                     | 2.4                                                     | 2.4                                                       | 2.4                                                   | 2.4                   | 2.4            | 2.4                            | 2.4                   | 2.2, 2.4              |
| PHP              | 8.0 <br>8.1 (empfohlen) <br> 8.2                                   | 7.4 (veraltet) <br>8.0 <br>8.1 (empfohlen) <br> 8.2                | 7.4 (veraltet) <br>8.0 (empfohlen) <br>8.1 <br> 8.2  | 7.4 (veraltet) <br>8.0 (empfohlen) <br>8.1           | 7.4 (veraltet) <br>8.0 (empfohlen) <br>8.1           | 7.4 <br>8.0 (empfohlen) <br>8.1                      | 7.4 <br>8.0 (empfohlen)                              | 7.4 <br>8.0 (empfohlen)                     | 7.4 (veraltet)  <br>8.0 (empfohlen)         | 7.4 (veraltet)  <br>8.0 (empfohlen)            | 7.3 (veraltet)  <br>7.4 (empfohlen)            | 7.3  <br>7.4 (empfohlen)                       | 7.2.5 (veraltet)  <br>7.3  <br>7.4 (empfohlen)                      | 7.1.8 (veraltet)  <br>7.2  <br>7.3 (empfohlen)  <br>7.4 | 7.1.8 (veraltet)  <br>7.2  <br>7.3 (empfohlen)  <br>7.4 | 7.0.8 (veraltet)  <br>7.1  <br>7.2  <br>7.3 (empfohlen)   | 5.6 (veraltet)  <br>7.0  <br>7.1  <br>7.2 (empfohlen) | 5.6  <br>7.0  <br>7.1 | 5.6  <br>7.0   | 5.4  <br>5.5  <br>5.6  <br>7.0 | 5.4  <br>5.5  <br>5.6 | 5.4  <br>5.5  <br>5.6 |
| MySQL            | 5.7 <br>8.0                                                        | 5.7 <br>8.0                                                        | 5.7 <br>8.0                                          | 5.7 <br>8.0                                          | 5.7 <br>8.0                                          | 5.7 <br>8.0                                          | 5.7 <br>8.0                                          | 5.7                                         | 5.7                                         | 5.7                                            | 5.7                                            | 5.7                                            | 5.6 (veraltet)  <br>5.7                                             | 5.6  <br>5.7                                            | 5.6  <br>5.7                                            | 5.6  <br>5.7                                              | 5.6  <br>5.7                                          | 5.6  <br>5.7          | 5.6  <br>5.7   | 5.6  <br>5.7                   | 5.6  <br>5.7          | 5.6  <br>5.7          |
| MariaDB          | 10.4 (veraltet) <br>10.5 (veraltet) <br>10.6 (empfohlen) <br>10.11 | 10.4 (veraltet) <br>10.5 (veraltet) <br>10.6 (empfohlen) <br>10.11 | 10.2 <br>10.3 <br>10.4 <br>10.5 <br>10.6 (empfohlen) | 10.2 <br>10.3 <br>10.4 <br>10.5 <br>10.6 (empfohlen) | 10.2 <br>10.3 <br>10.4 <br>10.5 <br>10.6 (empfohlen) | 10.2 <br>10.3 <br>10.4 <br>10.5 <br>10.6 (empfohlen) | 10.2 <br>10.3 <br>10.4 <br>10.5 <br>10.6 (empfohlen) | 10.2 <br>10.3 <br>10.4 <br>10.5 (empfohlen) | 10.2 <br>10.3 <br>10.4 <br>10.5 (empfohlen) | 10.2  <br>10.3  <br>10.4  <br>10.5 (empfohlen) | 10.2  <br>10.3  <br>10.4  <br>10.5 (empfohlen) | 10.2  <br>10.3  <br>10.4  <br>10.5 (empfohlen) | 10.1 (veraltet)  <br>10.2  <br>10.3  <br>10.4 (empfohlen)  <br>10.5 | 10.1  <br>10.2  <br>10.3  <br>10.4 (empfohlen)          | 10.1  <br>10.2  <br>10.3  <br>10.4 (empfohlen)          | 10.0 (veraltet)  <br>10.1  <br>10.2  <br>10.3 (empfohlen) | 10.0  <br>10.1                                        | 10.0  <br>10.1        | 10.0  <br>10.1 | 10.0  <br>10.1                 | 10.0  <br>10.1        | 10.0  <br>10.1        |

| Legende                                       |
| --------------------------------------------- |
| ¹ Mit Hilfe von Drittanbieter-Repositories    |
| ² Nicht empfohlen für den produktiven Einsatz |

## Aktualisierung von 1.7.4 auf 1.8

Zuerst bereiten wir das Update über die CLI vor, indem wir den i-doit-Ordner unter `/var/www/html/` öffnen und das i-doit-Update-Paket mit folgendem Befehl entpacken:

```sh
sudo -u www-data unzip idoit-1.8-update.zip
```

Wenn Sie dazu aufgefordert werden, überschreiben Sie alles, indem Sie **A** eingeben.

Nun öffnen wir den Web-Interface-Updater, wählen das Update auf v1.8 aus und führen das Update durch.

[![Aktualisierung von 1.7.4 auf 1.8](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/1-u18-119.png)](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/1-u18-119.png)

!!! Achtung "**Möglicher Fehler**"
    PHP Fatal error: Aufruf einer nicht definierten Methode idoit\Component\ContainerFacade::has() in /var/www/html/src/idoit/Model/Summary/SystemSummary.php in Zeile 185
    Die Lösung besteht darin, die Seite neu zu laden und fortzufahren.

!!! Erfolg "**Überprüfen Sie die Update-Logs**"
    Nehmen Sie sich bitte die Zeit, um die Logs durchzusehen und zu prüfen, ob ein Fehler aufgetreten ist.
    Melden Sie sich an und überprüfen Sie Ihre Installation.

## Aktualisierung von 1.8 auf 1.9

Zuerst bereiten wir das Update über die CLI vor, indem wir den i-doit-Ordner unter `/var/www/html/` öffnen und das i-doit-Update-Paket mit folgendem Befehl entpacken:

```sh
sudo -u www-data unzip idoit-1.9-update.zip
```

Wenn Sie dazu aufgefordert werden, überschreiben Sie alles, indem Sie **A** eingeben.
Nun öffnen wir den Web-Interface-Updater, wählen das Update auf v1.9 aus und führen das Update durch.

[![Aktualisierung von 1.8 auf 1.9](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/2-u18-119.png)](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/2-u18-119.png)

!!! Erfolg "**Überprüfen Sie die Update-Logs**"
    Nehmen Sie sich bitte die Zeit, um die Logs durchzusehen und zu prüfen, ob ein Fehler aufgetreten ist.
    Melden Sie sich an und überprüfen Sie Ihre Installation.

## Aktualisierung von 1.9 auf 1.10

Zuerst bereiten wir das Update über die CLI vor, indem wir den i-doit-Ordner unter `/var/www/html/` öffnen und das i-doit-Update-Paket mit folgendem Befehl entpacken:

```sh
sudo -u www-data unzip idoit-1.10-update.zip
```

Wenn Sie dazu aufgefordert werden, überschreiben Sie alles, indem Sie **A** eingeben.
Nun öffnen wir den Web-Interface-Updater, wählen das Update auf v1.10 aus und führen das Update durch.

[![Aktualisierung von 1.9 auf 1.10](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/3-u18-119.png)](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/3-u18-119.png)

!!! success "**Überprüfen Sie die Update-Logs**"
    Bitte nehmen Sie sich die Zeit, um die Logs durchzusehen und zu überprüfen, ob ein Fehler aufgetreten ist.
    Melden Sie sich an und überprüfen Sie Ihre Installation.

## Aktualisierung von 1.10 auf 1.11

Zuerst bereiten wir das Update über die CLI vor, indem wir den i-doit-Ordner unter `/var/www/html/` öffnen und das i-doit-Update-Paket mit folgendem Befehl entpacken:

```sh
sudo -u www-data unzip idoit-1.11-update.zip
```

Wenn Sie dazu aufgefordert werden, überschreiben Sie alles, indem Sie **A** eingeben.
Öffnen Sie nun das Webinterface-Updater und das Update auf v1.11 wird angezeigt und ausgewählt, führen Sie das Update durch.

!!! attention "**Möglicher Fehler**"
    Aufruf einer unbekannten Methode '_realpath'.

Lösungen:

*   Laden Sie die Seite neu und fahren Sie fort.
*   oder verwenden Sie das folgende Hotfix, wenn das Neuladen nicht funktioniert

!!! attention "Einwilligungserklärung"
    Durch das Herunterladen eines Hotfix erklären Sie, dass Sie die [oben genannte Notiz](#update-guide-from-i-doit-174-to-119) vollständig gelesen und verstanden haben.
    [Klicken Sie hier für das Hotfix](../assets/downloads/upgrades-and-migrations/ID-5843_b4159eb.zip)

Fahren Sie mit dem Update fort

!!! success "**Überprüfen Sie die Update-Logs**"
    Bitte nehmen Sie sich die Zeit, um die Logs durchzusehen und zu überprüfen, ob ein Fehler aufgetreten ist.
    Melden Sie sich an und überprüfen Sie Ihre Installation.

## Aktualisierung von 1.11 auf 1.12

Zuerst bereiten wir das Update über die CLI vor, indem wir den i-doit-Ordner unter `/var/www/html/` öffnen und das i-doit-Update-Paket mit folgendem Befehl entpacken:

```sh
sudo -u www-data unzip idoit-1.12-update.zip
```

Wenn Sie dazu aufgefordert werden, überschreiben Sie alles, indem Sie **A** eingeben.
Öffnen Sie nun das Webinterface-Updater und das Update auf v1.12 wird angezeigt und ausgewählt, führen Sie das Update durch.

[![Aktualisierung von 1.11 auf 1.12](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/4-u18-119.png)](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/4-u18-119.png)

!!! success "**Überprüfen Sie die Update-Logs**"
    Bitte nehmen Sie sich die Zeit, um die Logs durchzusehen und zu überprüfen, ob ein Fehler aufgetreten ist.
    Melden Sie sich an und überprüfen Sie Ihre Installation.

## Debian 8 auf 9 aktualisieren

!!! Achtung "**Warnung**"
    Bevor Sie beginnen, stellen Sie bitte sicher, dass Sie ein vollständiges Backup haben, das Sie auf einem sauberen Server getestet haben, falls etwas schief geht, denn es gibt kein Zurück!
    Lesen Sie die Update-Anweisungen von Debian 8 auf 9 [hier](https://www.debian.org/releases/stretch)

??? Beispiel "Ich habe ein funktionierendes vollständiges Backup"

    Schaffen Sie etwas Platz mit

    ```sh
    sudo apt-get autoremove
    sudo apt-get clean
    ```

    Ändern Sie die sources.list mit Ihrem bevorzugten Editor

    ```sh
    sudo nano /etc/apt/sources.list
    ```

    Ändern Sie alle Einträge auf 'stretch' oder löschen Sie alle Einträge und fügen Sie folgendes ein:

    ```sh
    deb http://deb.debian.org/debian stretch main
    deb http://deb.debian.org/debian stretch contrib
    ```

    Aktualisieren Sie nun erneut die Pakete

    ```sh
    sudo apt-get update
    ```

    Wenn Sie eine Meldung wie diese erhalten, können Sie sie ignorieren oder lesen Sie [hier](https://stackoverflow.com/a/70795162).

    ```sh
    Es sind keine öffentlichen Schlüssel verfügbar für die folgenden Schlüssel-IDs:
    112695A0E562B32A
    ```

    Stoppen Sie nun mysql und cron

    ```sh
    sudo systemctl stop mysql cron
    ```

    Führen Sie das Update auf Debian 9 durch

    ```sh
    sudo apt-get upgrade
    sudo apt-get full-upgrade
    ```

    Wenn Sie gefragt werden 'Restart services during package upgrades without asking?' wählen Sie 'Yes' und drücken Sie die Eingabetaste

    Starten Sie die Dienste, die wir gestoppt haben:

    ```sh
    sudo systemctl start mysql cron
    ```

    Fehler? [Hier lesen](https://www.debian.org/releases/stretch/)

    !!! Erfolg "**Überprüfen Sie das System und i-doit**"
        Überprüfen Sie Ihr System und i-doit!

    Schaffen Sie erneut etwas Platz

    ```sh
    sudo apt-get autoremove
    sudo apt-get clean
    ```

    Überprüfen Sie Ihre sources.list, für weitere Informationen siehe [hier](https://wiki.debian.org/SourcesList)<br>
    Sie befinden sich jetzt bei Debian 9 mit PHP 5.6 und MariaDB 10.

## Debian 9 auf 10 aktualisieren

!!! Achtung "**Warnung**"
    Bevor Sie beginnen, stellen Sie bitte sicher, dass Sie ein vollständiges Backup haben, das Sie auf einem sauberen Server getestet haben, falls etwas schief geht, denn es gibt kein Zurück!
    Lesen Sie die Update-Anweisungen von Debian 9 auf 10 [hier](https://wiki.debian.org/DebianUpgrade)

??? Beispiel "Ich habe ein funktionierendes vollständiges Backup"

    Schaffen Sie etwas Platz mit

    ```sh
    sudo apt-get autoremove
    sudo apt-get clean
    ```

    Ändern Sie die sources.list mit Ihrem bevorzugten Editor

    ```sh
    sudo nano /etc/apt/sources.list
    ```

    Ändern Sie alle Einträge in 'buster' oder löschen Sie alle Einträge und fügen Sie folgendes ein

    ```sh
    deb http://deb.debian.org/debian buster main
    deb http://deb.debian.org/debian buster contrib
    ```

    Stoppen Sie nun mysql und cron

    ```sh
    sudo systemctl stop mysql cron
    ```

    Führen Sie das Update auf Debian 10 durch

    ```sh
    sudo apt-get update
    sudo apt-get upgrade
    sudo apt-get full-upgrade
    ```

    Starten Sie die Dienste, die wir gestoppt haben

    ```sh
    sudo systemctl start mysql cron
    ```

    Fehler? [Überprüfen Sie die Debian-Website](https://www.debian.org/releases/buster/)

    !!! Erfolg "**Überprüfen Sie das System und i-doit**"
        Überprüfen Sie Ihr System und i-doit!

    Schaffen Sie erneut etwas Platz

    ```sh
    sudo apt-get autoremove
    sudo apt-get clean
    ```

    Überprüfen Sie Ihre sources.list, für weitere Informationen siehe [hier](https://wiki.debian.org/SourcesList)<br>
    Sie befinden sich jetzt bei Debian 10 mit PHP 5.6 und MariaDB 10.3.

## Aktualisierung von PHP 5.6 auf PHP 7.3

!!! Achtung "Backup"
    Erstellen Sie ein Backup oder Snapshot!

Aktualisieren und installieren Sie alle benötigten Pakete

```sh
sudo apt update
sudo apt install apache2 libapache2-mod-php mariadb-client mariadb-server php php-bcmath php-cli php-common php-curl php-gd php-imagick php-json php-ldap php-mbstring php-memcached php-mysql php-pgsql php-soap php-xml php-zip memcached unzip sudo moreutils
```

Erstellen Sie die PHP-Konfigurationsdatei

```sh
sudo nano /etc/php/7.3/mods-available/i-doit.ini
```

folgendes einfügen:

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

Änderungen aktivieren

```sh
sudo a2dismod php5
sudo a2enmod php7.3
sudo phpenmod i-doit
sudo phpenmod memcached
sudo systemctl restart apache2.service
```

i-doit sollte jetzt über Verwaltung > [Mandant Name] Verwaltung > System Config Check die neue PHP-Version 7.3.31-1~deb10u1 anzeigen.

## Erstellen Sie die MariaDB-Konfigurationsdatei, falls nicht vorhanden

Erstellen oder aktualisieren Sie eine MariaDB-Konfigurationsdatei

```sh
sudo nano /etc/mysql/mariadb.conf.d/99-i-doit.cnf
```

einfügen oder aktualisieren Sie Ihre MariaDB-Konfiguration

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

# Disable this (= 0) if you have slow hard disks
innodb_flush_log_at_trx_commit = 1
innodb_flush_method = O_DIRECT

innodb_lru_scan_depth = 2048
table_definition_cache = 1024
table_open_cache = 2048
#Only if your have MySQL 5.6 or higher, do not use with MariaDB!
#table_open_cache_instances = 4

innodb_stats_on_metadata = 0

sql-mode = ""
```

Starten Sie MariaDB danach neu

```sh
sudo systemctl start mysql.service
```

## Aktualisierung von 1.12 auf 1.13

Zuerst bereiten wir das Update über die CLI vor, indem wir den i-doit-Ordner unter `/var/www/html/` öffnen und das idoit-Updatepaket mit

```sh
sudo -u www-data unzip idoit-1.13-update.zip
```

entpacken.

Wenn Sie gefragt werden, überschreiben Sie alles, indem Sie **A** eingeben.

Öffnen Sie nun den Web-Interface-Updater und das Update auf v1.13 wird angezeigt und ausgewählt, führen Sie das Update durch.

[![Aktualisierung von 1.12 auf 1.13](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/5-u18-119.png)](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/5-u18-119.png)

Möglicherweise erhalten Sie diesen Fehler:

!!! attention "**Möglicher Fehler**"
    Schwerwiegender Fehler: Uncaught Error: Class 'idoit\\Module\\License\\LicenseServiceFactory' nicht gefunden in /var/www/html/updates/versions/v1.13/migration/license\_migration.php:50 Stacktrace: #0 /var/www/html/updates/classes/isys\_update\_migration.class.php(98): include() #1 /var/www/html/updates/update.inc.php(911): isys\_update\_migration->migrate('/var/www/html/u...') #2 /var/www/html/src/hypergate.inc.php(152): include\_once('/var/www/html/u...') #3 /var/www/html/index.php(231): include\_once('/var/www/html/s...') #4 {main} thrown in /var/www/html/updates/versions/v1.13/migration/license\_migration.php on line 50

Dann müssen Sie das Update erneut starten.<br> Wenn Sie jetzt einen HTTP 500 erhalten, führen Sie das Update erneut durch.

!!! success "**Überprüfen Sie das System und i-doit**"
    Überprüfen Sie Ihr System und i-doit!

## Aktualisierung von 1.13 auf 1.14

Zuerst bereiten wir das Update über die CLI vor, indem wir den i-doit-Ordner unter `/var/www/html/` öffnen und das idoit-Updatepaket mit

```sh
sudo -u www-data unzip idoit-1.14-update.zip
```

entpacken.

Wenn Sie gefragt werden, überschreiben Sie alles, indem Sie **A** eingeben.

Öffnen Sie nun den Web-Interface-Updater und das Update auf v1.14 wird angezeigt und ausgewählt, führen Sie das Update durch.

[![Aktualisierung von 1.13 auf 1.14](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/6-u18-119.png)](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/6-u18-119.png)

!!! success "**Überprüfen Sie die Update-Logs**"
    Bitte nehmen Sie sich die Zeit, um die Logs durchzugehen und zu überprüfen, ob ein Fehler aufgetreten ist.

Wenn Sie diesen Fehler sehen:

!!! attention "**Möglicher Fehler**"
    Datenbankfehler: Abfragefehler: 'ALTER TABLE isys\_cats\_person\_list ADD isys\_cats\_person\_list\_\_disabled\_login TINYINT(1) UNSIGNED DEFAULT 0': Zeilengröße zu groß. Die maximale Zeilengröße für den verwendeten Tabellentyp, ohne BLOBs zu zählen, beträgt 8126. Dies beinhaltet Speicherüberkopf, überprüfen Sie das Handbuch. Sie müssen einige Spalten in TEXT oder BLOBs ändern.

Die Lösung ist [hier dokumentiert](../administration/troubleshooting/row-size-too-large.md)

!!! success "**Überprüfen Sie das System und i-doit**"
    Überprüfen Sie Ihr System und i-doit!

## Update von 1.14 auf 1.15

Zuerst bereiten wir das Update über die CLI vor, indem wir den i-doit-Ordner unter `/var/www/html/` öffnen und das idoit-Updatepaket mit

```sh
sudo -u www-data unzip idoit-1.15-update.zip
```

entpacken.

Wenn Sie gefragt werden, überschreiben Sie alles, indem Sie **A** eingeben.

Öffnen Sie nun den Web-Interface-Updater und das Update auf v1.15 wird angezeigt und ausgewählt, führen Sie das Update durch.

[![Update von 1.14 auf 1.15](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/7-u18-119.png)](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/7-u18-119.png)

!!! success "**Überprüfen Sie das System und i-doit**"
    Überprüfen Sie Ihr System und i-doit!

## Update von 1.15 auf 1.16

Zuerst bereiten wir das Update über die CLI vor, indem wir den i-doit-Ordner unter `/var/www/html/` öffnen und das idoit-Updatepaket mit

```sh
sudo -u www-data unzip idoit-1.16-update.zip
```

entpacken.

Wenn Sie gefragt werden, überschreiben Sie alles, indem Sie **A** eingeben.

Öffnen Sie nun den Web-Interface-Updater und das Update auf v1.16 wird angezeigt und ausgewählt, führen Sie das Update durch.

[![Update von 1.15 auf 1.16](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/8-u18-119.png)](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/8-u18-119.png)

!!! success "**Überprüfen Sie das System und i-doit**"
    Überprüfen Sie Ihr System und i-doit!

## Update von 1.16 auf 1.17

Zuerst bereiten wir das Update über die CLI vor, indem wir den i-doit-Ordner unter `/var/www/html/` öffnen und das idoit-Updatepaket mit

```sh
sudo -u www-data unzip idoit-1.17-update.zip
```

entpacken.

Wenn Sie dazu aufgefordert werden, überschreiben Sie alles, indem Sie **A** eingeben.

Nun öffnen wir den Web-Interface-Updater und das Update auf v1.17 wird angezeigt und ausgewählt, führen Sie das Update durch.

[![Aktualisierung von 1.16 auf 1.17](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/9-u18-119.png)](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/9-u18-119.png)

!!! success "**Überprüfen Sie das System und i-doit**"
    Überprüfen Sie Ihr System und i-doit!

## Aktualisierung von 1.17 auf 1.18

Zuerst bereiten wir das Update über die CLI vor, indem wir den i-doit-Ordner unter `/var/www/html/` öffnen und das idoit-Update-Paket mit folgendem Befehl entpacken:

```sh
sudo -u www-data unzip idoit-1.18-update.zip
```

Wenn Sie dazu aufgefordert werden, überschreiben Sie alles, indem Sie **A** eingeben.

Nun öffnen wir den Web-Interface-Updater und das Update auf v1.18 wird angezeigt und ausgewählt, führen Sie das Update durch.

[![Aktualisierung von 1.17 auf 1.18](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/10-u18-119.png)](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/10-u18-119.png)

!!! success "**Überprüfen Sie das System und i-doit**"
    Überprüfen Sie Ihr System und i-doit!

## Upgrade von Debian 10 auf 11

!!! attention "**Warnung**"
    Bevor Sie beginnen, stellen Sie bitte sicher, dass Sie ein vollständiges Backup haben, das Sie auf einem sauberen Server getestet haben, falls etwas schief geht, denn es gibt kein Zurück!<br>
    Lesen Sie die Update-Anweisungen für Debian 10 auf 11 [hier](https://www.debian.org/releases/bullseye/amd64/release-notes/ch-upgrading.en.html)

??? example "Ich habe ein funktionierendes vollständiges Backup"

    Schaffen Sie etwas Platz mit

    ```sh
    sudo apt-get autoremove
    sudo apt-get clean
    ```

    Ändern Sie die sources.list mit Ihrem bevorzugten Editor

    ```sh
    sudo nano /etc/apt/sources.list
    ```

    Ändern Sie alle Einträge in 'buster' oder löschen Sie alle Einträge und fügen Sie folgendes ein

    ```sh
    deb http://deb.debian.org/debian bullseye main
    deb http://deb.debian.org/debian bullseye contrib
    ```

    Stoppen Sie nun mysql und cron

    ```sh
    sudo systemctl stop mysql cron
    ```

```md
    Führen Sie das Update auf Debian 11 durch

    ```sh
    sudo apt-get update
    sudo apt-get upgrade
    sudo apt-get full-upgrade
    ```

    Starten Sie die Dienste, die wir gestoppt haben

    ```sh
    sudo systemctl start mysql cron
    ```

    Fehler? [Überprüfen Sie die Debian-Website](https://www.debian.org/releases/bullseye/)

    !!! success "**Überprüfen Sie das System und i-doit**"
        Überprüfen Sie Ihr System und i-doit!

    Schaffen Sie wieder etwas Platz frei

    ```sh
    sudo apt-get autoremove
    sudo apt-get clean
    ```

    Überprüfen Sie Ihre sources.list, für weitere Informationen siehe [hier](https://wiki.debian.org/SourcesList)

    Sie befinden sich jetzt bei Debian 11 mit PHP 7.4.30 und MariaDB 10.5.

## Konfigurieren von PHP 7.4

Erstellen Sie die PHP-Konfigurationsdatei

```sh
sudo nano /etc/php/7.4/mods-available/i-doit.ini
```

folgendes einfügen:

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

Änderungen aktivieren

```sh
sudo a2dismod php7.3
sudo a2enmod php7.4
sudo phpenmod i-doit
sudo phpenmod memcached
sudo systemctl restart apache2.service
```

!!! attention "**Möglicher Fehler**"
    (38)Function not implemented: AH00141: Could not initialize random number generator

Wenn der apache2 nicht neu startet und Sie den obigen Fehler erhalten, starten Sie den Server neu.

i-doit sollte jetzt über Verwaltung > [Mandant Name] Verwaltung > System Config Check die neue PHP-Version 7.4.30 anzeigen.

## Aktualisierung von 1.18 auf 1.19

Zuerst bereiten wir das Update über die CLI vor, indem wir den i-doit-Ordner unter `/var/www/html/`  öffnen und das i-doit-Update-Paket mit

```sh
sudo -u www-data unzip idoit-1.19-update.zip
```

entpacken.

Wenn Sie gefragt werden, überschreiben Sie alles, indem Sie **A** eingeben.

Wenn Sie das Update ohne PHP 7.3 versuchen, sehen Sie diese Meldung:

!!! attention "**Möglicher Fehler**"
    Sie haben PHP 7.3.31. Um i-doit auf die nächste Version zu aktualisieren, benötigen Sie mindestens PHP 7.4!

Öffnen Sie nun den Web-Interface-Updater und das Update auf v1.19 wird angezeigt und ausgewählt, führen Sie das Update durch.

[![Aktualisierung von 1.18 auf 1.19](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/11-u18-119.png)](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/11-u18-119.png)

!!! success "**Überprüfen Sie das System und i-doit**"

## Aktualisierung von 1.19 auf 20

Öffnen Sie zuerst den Web-Interface-Updater.<br>
Durch Klicken auf **Nach einer neuen Version suchen** können Sie überprüfen, ob ein neueres Paket verfügbar ist. Dafür benötigen Sie eine Internetverbindung.<br>
Wenn eine neue Version verfügbar ist, kann das Update-Paket mit einem Klick auf **Herunterladen** heruntergeladen und extrahiert werden.

Wenn Sie nicht mit dem Internet verbunden sind, können Sie das Update über die Befehlszeile vorbereiten, indem Sie den i-doit-Ordner unter `/var/www/html/` öffnen und das idoit-Update-Paket mit dem folgenden Befehl entpacken:

```sh
sudo -u www-data unzip idoit-20-update.zip
```

Wenn Sie dazu aufgefordert werden, überschreiben Sie alles, indem Sie **A** eingeben.

Überprüfen Sie im Webinterface, ob das Update auf Version 20 angezeigt und ausgewählt ist, und führen Sie dann das Update durch.

[![Aktualisierung von 1.19 auf 20](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/12-u18-119.png)](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/12-u18-119.png)

!!! success "**Überprüfen Sie die Update-Logs**"
    Nehmen Sie sich bitte die Zeit, um die Logs durchzusehen und zu überprüfen, ob ein Fehler aufgetreten ist.

!!! success "**Überprüfen Sie das System und i-doit**"

## Aktualisierung von 20 auf 29

Zunächst müssen Sie das Update über die Befehlszeile vorbereiten, indem Sie den i-doit-Ordner unter `/var/www/html/` öffnen und das idoit-Update-Paket mit dem folgenden Befehl entpacken:

```sh
sudo -u www-data unzip idoit-29-update.zip
```

Wenn Sie dazu aufgefordert werden, überschreiben Sie alles, indem Sie **A** eingeben.

Überprüfen Sie im Webinterface des Updaters, ob das Update auf Version 29 angezeigt und ausgewählt ist, und führen Sie dann das Update durch.

[![Aktualisierung von 20 auf 29](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/13-u18-119.png)](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/13-u18-119.png)

!!! success "**Überprüfen Sie die Update-Logs**"
    Nehmen Sie sich bitte die Zeit, um die Logs durchzusehen und zu überprüfen, ob ein Fehler aufgetreten ist.

!!! success "**Überprüfen Sie das System und i-doit**"

## Upgrade von Debian 11 auf 12

!!! attention "**Warnung**"
    Bevor Sie beginnen, stellen Sie bitte sicher, dass Sie ein vollständiges Backup haben, das Sie auf einem sauberen Server getestet haben, falls etwas schief geht, denn es gibt kein Zurück!
    Lesen Sie die Update-Anweisungen für Debian 11 auf 12 [hier](https://www.debian.org/releases/bookworm/amd64/release-notes/ch-upgrading.en.html)

??? example "Ich habe ein funktionierendes vollständiges Backup"

    Schaffen Sie etwas Platz mit

    ```sh
    sudo apt-get autoremove
    sudo apt-get clean
    ```

    Ändern Sie die sources.list mit Ihrem bevorzugten Editor.

```sh
sudo nano /etc/apt/sources.list
```

Ändern Sie alle Einträge in 'bookworm' oder löschen Sie alle Einträge und fügen Sie folgendes ein

```sh
deb http://deb.debian.org/debian bookworm main
deb http://deb.debian.org/debian bookworm contrib
```

Stoppen Sie nun mysql und cron

```sh
sudo systemctl stop mysql cron
```

Führen Sie das Update auf Debian 12 durch

```sh
sudo apt-get update
sudo apt-get upgrade
sudo apt-get full-upgrade
```

Starten Sie die Dienste, die wir gestoppt haben

```sh
sudo systemctl start mysql cron
```

Fehler? [Hier lesen](https://www.debian.org/releases/bookworm/amd64/release-notes/ch-upgrading.en.html#trouble)<br>

!!! success "**Überprüfen Sie das System und i-doit**"
    Überprüfen Sie Ihr System und i-doit!

Geben Sie erneut etwas Speicherplatz frei

```sh
sudo apt-get autoremove
sudo apt-get clean
```

Überprüfen Sie Ihre sources.list, für weitere Informationen siehe [hier](https://wiki.debian.org/SourcesList)

Sie befinden sich jetzt bei Debian 12 mit PHP 8.2.18 und MariaDB 10.11.

## Konfigurieren von PHP 8.2

Erstellen Sie die PHP-Konfigurationsdatei

```sh
sudo nano /etc/php/8.2/mods-available/i-doit.ini
```

fügen Sie ein:

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

Änderungen aktivieren

```sh
sudo a2dismod php7.4
sudo a2enmod php8.2
sudo phpenmod i-doit
sudo phpenmod memcached
sudo systemctl restart apache2.service
```

Wenn der apache2 nicht neu startet, starten Sie den Server neu.

i-doit sollte jetzt die neue PHP-Version 8.2.18 unter Verwaltung > [Mandant Name] Verwaltung > System Config Check anzeigen.

## MariaDB 10.11 Upgrade

Jetzt müssen wir die Tabellen überprüfen und auf die letzte Version aktualisieren mit

```sh
sudo mariadb-upgrade -p
```

Geben Sie Ihr Passwort ein und überprüfen Sie, ob alles gut gelaufen ist

Starten Sie danach MariaDB neu

```sh
sudo systemctl start mysql.service
```

## Aktualisierung von 29 auf 31

Zuerst müssen Sie das Update über die CLI vorbereiten, indem Sie den i-doit-Ordner unter `/var/www/html/` öffnen und das idoit-Update-Paket mit

```sh
sudo -u www-data unzip idoit-31-update.zip
```

entpacken.

Wenn Sie gefragt werden, überschreiben Sie alles, indem Sie **A** eingeben.

Im Web-Interface-Updater überprüfen Sie, ob das Update auf Version 31 angezeigt und ausgewählt ist, und führen Sie dann das Update durch.

[![Aktualisierung von 29 auf 31](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/14-u18-119.png)](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/14-u18-119.png)

!!! success "**Überprüfen Sie die Update-Logs**"
    Bitte nehmen Sie sich die Zeit, um die Logs durchzusehen und zu überprüfen, ob ein Fehler aufgetreten ist.

!!! success "**Überprüfen Sie das System und i-doit**"

## Quellen

*   MariaDB-Upgrade-Informationen [https://mariadb.com/kb/en/upgrading/](https://mariadb.com/kb/en/upgrading/)
*   Debian 9-Upgrade [https://www.debian.org/releases/stretch/](https://www.debian.org/releases/stretch/)
*   Debian 10-Upgrade [https://www.debian.org/releases/buster/](https://www.debian.org/releases/buster/)
*   Debian 11-Upgrade [https://www.debian.org/releases/bullseye/](https://www.debian.org/releases/bullseye/)
*   Debian 12-Upgrade [https://www.debian.org/releases/bookworm/](https://www.debian.org/releases/bookworm/)
