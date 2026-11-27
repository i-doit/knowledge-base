---
title: Update Anleitung von i-doit 1.7.4 zu 39
description: i-doit update guide
icon: fontawesome/brands/linux
status:
lang: de
---

## Wichtige Informationen bevor du beginnst

Hier findest du eine kurze Anleitung zum Aktualisieren deines i-doit auf i-doit 39.<br>
Möglicherweise musst du dein Betriebssystem aktualisieren.<br>
Diese Anweisungen gelten für **Debian**, die verwendeten Befehle unterscheiden sich in anderen Betriebssystemen. Bevor du beginnst, lädst du alle Updates herunter, die du durchführen musst, und kopiere sie in den i-doit-Stammordner.

!!! danger "**Wichtige Hinweise im Voraus**"

    Diese Anleitung wird ohne Gewähr bereitgestellt und funktioniert möglicherweise nicht in deinem spezifischen Anwendungsfall.<br>
    Dies hängt von der Konfiguration und Installationsart deiner Instanz ab.
    Benötigte **Add-on**-Updates werden nicht Schritt für Schritt beschrieben. Prüfe vor jedem Schritt die Mindestversionen der Add-ons in der [Kompatibilitätsmatrix](../installation/systemvoraussetzungen.md#kompatibilitatsmatrix) und aktualisiere deine Add-ons bei Bedarf zuerst.

!!! attention "Backup"
    Erstelle vor jedem Aktualisierungsschritt ein Backup oder einen Snapshot!

!!! attention "Versionshinweise"
    Lies die [Versionshinweise](../versionshistorie/index.md) bevor du auf eine neue Version aktualisieren.

!!! attention "Hotfix-Hinweis"
    Verwende Hotfixes ausschließlich mit der angegebenen Version. Hotfixes werden in neueren Versionen enthalten sein, sodass eine erneute Installation nicht erforderlich ist.
    Solltest du eine ältere i-doit-Version verwenden, ist es unerlässlich, zuerst ein Update auf die neueste Version durchzuführen.
    Wenn ein Hotfix erforderlich ist, um eine ältere Version zu aktualisieren, findest du diesen in den Hotfix-Unterkapiteln hier im Knowledge Base.
    Da es sich um Hotfixes handelt, empfehlen wir, sie nur zu installieren, wenn die Anpassungen für einen reibungslosen Betrieb deiner Installation erforderlich sind oder wenn du vom Support-Team dazu aufgefordert wirst. Stelle sicher, dass du ein [Backup von i-doit](../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md) erstellt hast, bevor du einen Hotfix verwendest.
    Informiere uns über die Verwendung von Hotfixes, wenn du dich anschließend an unser Support-Team wendest.

## Update-Pfad

Manche Versionen lassen sich nicht überspringen, und manche Versionen setzen eine Mindestversion voraus. Diese Anforderungen stehen in der [Kompatibilitätsmatrix](../installation/systemvoraussetzungen.md#kompatibilitatsmatrix). Ab i-doit 1.19 gehst du diese Schritte in dieser Reihenfolge:

| Schritt | Update                                        | Warum dieser Schritt nötig ist                                  |
| ------- | --------------------------------------------- | --------------------------------------------------------------- |
| 1       | [1.19 auf 20](#aktualisierung-von-119-auf-20) | i-doit 20 ist die erste Version nach 1.19                       |
| 2       | [20 auf 29](#aktualisierung-von-20-auf-29)    | i-doit 29 lässt sich nicht überspringen                         |
| 3       | [Debian 11 auf 12](#upgrade-von-debian-11-auf-12), [PHP 8.2](#konfigurieren-von-php-82) und [MariaDB 10.11](#mariadb-1011-upgrade) | i-doit 31 und neuer brauchen mindestens PHP 8.0 und MariaDB 10.4 |
| 4       | [29 auf 31](#aktualisierung-von-29-auf-31)    | i-doit 32 bis 35 setzen mindestens i-doit 31 voraus, und i-doit 31 unterstützt MariaDB 10.11 aus Debian 12 |
| 5       | [31 auf 35](#aktualisierung-von-31-auf-35)    | i-doit 35 lässt sich nicht überspringen                         |
| 6       | [35 auf 39](#aktualisierung-von-35-auf-39)    | i-doit 36 bis 39 setzen mindestens i-doit 35 voraus             |

i-doit 29 unterstützt MariaDB nur bis Version 10.6. Führe die Schritte 3 und 4 deshalb direkt nacheinander aus und arbeite dazwischen nicht mit i-doit. Ab Schritt 3 läuft i-doit 29 mit PHP 8. Prüfe deshalb vor Schritt 3, ob deine Add-ons PHP 8 unterstützen.

!!! note "**.htaccess und Apache-VirtualHost**"
    Jedes Update-Paket bringt eine neue `.htaccess`-Datei im i-doit-Verzeichnis mit. Nutzt dein Apache-VirtualHost `AllowOverride None` und enthält die Regeln der `.htaccess`-Datei direkt, wie in unseren [Installationsanleitungen](../installation/manuelle-installation/debian/index.md), wirken die Änderungen nicht. Vergleiche nach jedem Update `/var/www/html/.htaccess` mit deiner VirtualHost-Konfiguration und übernimm die Änderungen. i-doit 39 ergänzt zum Beispiel Regeln für `src/mcp.php` und den `Authorization`-Header.

Läuft bei dir eine ältere Version als 1.19, beginnst du mit dem passenden Abschnitt weiter unten und gehst der Reihe nach vor. Alle Update-Pakete findest du im [Kundenportal](../administration/kundenportal.md) oder bei den [Download-Links](../download-links.md).

## Aktualisierung von 1.7.4 auf 1.8

Zuerst bereiten wir das Update über die CLI vor, indem wir den i-doit-Ordner unter `/var/www/html/` öffnen und das i-doit-Update-Paket mit folgendem Befehl entpacken:

```sh
sudo -u www-data unzip idoit-1.8-update.zip
```

Wenn du dazu aufgefordert wirst, überschreibe alles, indem du **A** eingibst.

Nun öffnen wir den Web-Interface-Updater, wählen das Update auf v1.8 aus und führen das Update durch.

[![Aktualisierung von 1.7.4 auf 1.8](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/1-u18-119.png)](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/1-u18-119.png)

!!! Achtung "**Möglicher Fehler**"
    PHP Fatal error: Aufruf einer nicht definierten Methode idoit\Component\ContainerFacade::has() in /var/www/html/src/idoit/Model/Summary/SystemSummary.php in Zeile 185
    Die Lösung besteht darin, die Seite neu zu laden und fortzufahren.

!!! Erfolg "**Überprüfe die Update-Logs**"
    Nimm dir bitte die Zeit, um die Logs durchzusehen und zu prüfen, ob ein Fehler aufgetreten ist.
    Melde dich an und überprüfe deine Installation.

## Aktualisierung von 1.8 auf 1.9

Zuerst bereiten wir das Update über die CLI vor, indem wir den i-doit-Ordner unter `/var/www/html/` öffnen und das i-doit-Update-Paket mit folgendem Befehl entpacken:

```sh
sudo -u www-data unzip idoit-1.9-update.zip
```

Wenn du dazu aufgefordert wirst, überschreibe alles, indem du **A** eingibst.
Nun öffnen wir den Web-Interface-Updater, wählen das Update auf v1.9 aus und führen das Update durch.

[![Aktualisierung von 1.8 auf 1.9](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/2-u18-119.png)](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/2-u18-119.png)

!!! Erfolg "**Überprüfe die Update-Logs**"
    Nimm dir bitte die Zeit, um die Logs durchzusehen und zu prüfen, ob ein Fehler aufgetreten ist.
    Melde dich an und überprüfe deine Installation.

## Aktualisierung von 1.9 auf 1.10

Zuerst bereiten wir das Update über die CLI vor, indem wir den i-doit-Ordner unter `/var/www/html/` öffnen und das i-doit-Update-Paket mit folgendem Befehl entpacken:

```sh
sudo -u www-data unzip idoit-1.10-update.zip
```

Wenn du dazu aufgefordert wirst, überschreibe alles, indem du **A** eingibst.
Nun öffnen wir den Web-Interface-Updater, wählen das Update auf v1.10 aus und führen das Update durch.

[![Aktualisierung von 1.9 auf 1.10](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/3-u18-119.png)](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/3-u18-119.png)

!!! success "**Überprüfe die Update-Logs**"
    Bitte nimmst du dich die Zeit, um die Logs durchzusehen und zu überprüfen, ob ein Fehler aufgetreten ist.
    Melde dich an und überprüfe deine Installation.

## Aktualisierung von 1.10 auf 1.11

Zuerst bereiten wir das Update über die CLI vor, indem wir den i-doit-Ordner unter `/var/www/html/` öffnen und das i-doit-Update-Paket mit folgendem Befehl entpacken:

```sh
sudo -u www-data unzip idoit-1.11-update.zip
```

Wenn du dazu aufgefordert wirst, überschreibe alles, indem du **A** eingibst.
Öffne nun das Webinterface-Updater und das Update auf v1.11 wird angezeigt und ausgewählt, führst du das Update durch.

!!! attention "**Möglicher Fehler**"
    Aufruf einer unbekannten Methode '_realpath'.

Lösungen:

*   Lade die Seite neu und fährst du fort.
*   oder verwendest du das folgende Hotfix, wenn das Neuladen nicht funktioniert

!!! attention "Einwilligungserklärung"
    Durch das Herunterladen eines Hotfix erklärst du, dass du die [oben genannte Notiz](#wichtige-informationen-bevor-sie-beginnen) vollständig gelesen und verstanden haben.
    [Klicke hier für das Hotfix](../assets/downloads/upgrades-and-migrations/ID-5843_b4159eb.zip)

Fahre mit dem Update fort

!!! success "**Überprüfe die Update-Logs**"
    Bitte nimmst du dich die Zeit, um die Logs durchzusehen und zu überprüfen, ob ein Fehler aufgetreten ist.
    Melde dich an und überprüfe deine Installation.

## Aktualisierung von 1.11 auf 1.12

Zuerst bereiten wir das Update über die CLI vor, indem wir den i-doit-Ordner unter `/var/www/html/` öffnen und das i-doit-Update-Paket mit folgendem Befehl entpacken:

```sh
sudo -u www-data unzip idoit-1.12-update.zip
```

Wenn du dazu aufgefordert wirst, überschreibe alles, indem du **A** eingibst.
Öffne nun das Webinterface-Updater und das Update auf v1.12 wird angezeigt und ausgewählt, führst du das Update durch.

[![Aktualisierung von 1.11 auf 1.12](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/4-u18-119.png)](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/4-u18-119.png)

!!! success "**Überprüfe die Update-Logs**"
    Bitte nimmst du dich die Zeit, um die Logs durchzusehen und zu überprüfen, ob ein Fehler aufgetreten ist.
    Melde dich an und überprüfe deine Installation.

## Debian 8 auf 9 aktualisieren

!!! Achtung "**Warnung**"
    Bevor du beginnst, stellst du bitte sicher, dass du ein vollständiges Backup haben, das du auf einem sauberen Server getestet haben, falls etwas schief geht, denn es gibt kein Zurück!
    Lies die Update-Anweisungen von Debian 8 auf 9 [hier](https://www.debian.org/releases/stretch)

??? Beispiel "Ich habe ein funktionierendes vollständiges Backup"

    Schaffe etwas Platz mit

    ```sh
    sudo apt-get autoremove
    sudo apt-get clean
    ```

    Ändere die sources.list mit deinem bevorzugten Editor

    ```sh
    sudo nano /etc/apt/sources.list
    ```

    Ändere alle Einträge auf 'stretch' oder löschst du alle Einträge und Füge folgendes ein:

    ```sh
    deb http://deb.debian.org/debian stretch main
    deb http://deb.debian.org/debian stretch contrib
    ```

    Aktualisiere nun erneut die Pakete

    ```sh
    sudo apt-get update
    ```

    Wenn du eine Meldung wie diese erhalten, kannst du sie ignorieren oder liest du [hier](https://stackoverflow.com/a/70795162).

    ```sh
    Es sind keine öffentlichen Schlüssel verfügbar für die folgenden Schlüssel-IDs:
    112695A0E562B32A
    ```

    Stoppe nun mysql und cron

    ```sh
    sudo systemctl stop mysql cron
    ```

    Führe das Update auf Debian 9 durch

    ```sh
    sudo apt-get upgrade
    sudo apt-get full-upgrade
    ```

    Wenn du gefragt werden 'Restart services during package upgrades without asking?' wählst du 'Yes' und drücken du die Eingabetaste

    Starte die Dienste, die wir gestoppt haben:

    ```sh
    sudo systemctl start mysql cron
    ```

    Fehler? [Hier lesen](https://www.debian.org/releases/stretch/)

    !!! Erfolg "**Überprüfe das System und i-doit**"
        Überprüfe dein System und i-doit!

    Schaffe erneut etwas Platz

    ```sh
    sudo apt-get autoremove
    sudo apt-get clean
    ```

    Überprüfe deine sources.list, für weitere Informationen siehe [hier](https://wiki.debian.org/SourcesList)<br>
    Du befindest dich jetzt bei Debian 9 mit PHP 5.6 und MariaDB 10.

## Debian 9 auf 10 aktualisieren

!!! Achtung "**Warnung**"
    Bevor du beginnst, stellst du bitte sicher, dass du ein vollständiges Backup haben, das du auf einem sauberen Server getestet haben, falls etwas schief geht, denn es gibt kein Zurück!
    Lies die Update-Anweisungen von Debian 9 auf 10 [hier](https://wiki.debian.org/DebianUpgrade)

??? Beispiel "Ich habe ein funktionierendes vollständiges Backup"

    Schaffe etwas Platz mit

    ```sh
    sudo apt-get autoremove
    sudo apt-get clean
    ```

    Ändere die sources.list mit deinem bevorzugten Editor

    ```sh
    sudo nano /etc/apt/sources.list
    ```

    Ändere alle Einträge in 'buster' oder löschst du alle Einträge und Füge folgendes ein

    ```sh
    deb http://deb.debian.org/debian buster main
    deb http://deb.debian.org/debian buster contrib
    ```

    Stoppe nun mysql und cron

    ```sh
    sudo systemctl stop mysql cron
    ```

    Führe das Update auf Debian 10 durch

    ```sh
    sudo apt-get update
    sudo apt-get upgrade
    sudo apt-get full-upgrade
    ```

    Starte die Dienste, die wir gestoppt haben

    ```sh
    sudo systemctl start mysql cron
    ```

    Fehler? [Überprüfe die Debian-Website](https://www.debian.org/releases/buster/)

    !!! Erfolg "**Überprüfe das System und i-doit**"
        Überprüfe dein System und i-doit!

    Schaffe erneut etwas Platz

    ```sh
    sudo apt-get autoremove
    sudo apt-get clean
    ```

    Überprüfe deine sources.list, für weitere Informationen siehe [hier](https://wiki.debian.org/SourcesList)<br>
    Du befindest dich jetzt bei Debian 10 mit PHP 5.6 und MariaDB 10.3.

## Aktualisierung von PHP 5.6 auf PHP 7.3

!!! Achtung "Backup"
    Erstelle ein Backup oder Snapshot!

Aktualisieren und installierst du alle benötigten Pakete

```sh
sudo apt update
sudo apt install apache2 libapache2-mod-php mariadb-client mariadb-server php php-bcmath php-cli php-common php-curl php-gd php-imagick php-json php-ldap php-mbstring php-memcached php-mysql php-pgsql php-soap php-xml php-zip memcached unzip sudo moreutils
```

Erstelle die PHP-Konfigurationsdatei

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

## Erstelle die MariaDB-Konfigurationsdatei, falls nicht vorhanden

Erstellen oder aktualisierst du eine MariaDB-Konfigurationsdatei

```sh
sudo nano /etc/mysql/mariadb.conf.d/99-i-doit.cnf
```

einfügen oder aktualisierst du deine MariaDB-Konfiguration

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

Starte MariaDB danach neu

```sh
sudo systemctl start mysql.service
```

## Aktualisierung von 1.12 auf 1.13

Zuerst bereiten wir das Update über die CLI vor, indem wir den i-doit-Ordner unter `/var/www/html/` öffnen und das idoit-Updatepaket mit

```sh
sudo -u www-data unzip idoit-1.13-update.zip
```

entpacken.

Wenn du gefragt werden, überschreiben du alles, indem du **A** eingibst.

Öffne nun den Web-Interface-Updater und das Update auf v1.13 wird angezeigt und ausgewählt, führst du das Update durch.

[![Aktualisierung von 1.12 auf 1.13](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/5-u18-119.png)](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/5-u18-119.png)

Möglicherweise erhältst du diesen Fehler:

!!! attention "**Möglicher Fehler**"
    Schwerwiegender Fehler: Uncaught Error: Class 'idoit\\Module\\License\\LicenseServiceFactory' nicht gefunden in /var/www/html/updates/versions/v1.13/migration/license\_migration.php:50 Stacktrace: #0 /var/www/html/updates/classes/isys\_update\_migration.class.php(98): include() #1 /var/www/html/updates/update.inc.php(911): isys\_update\_migration->migrate('/var/www/html/u...') #2 /var/www/html/src/hypergate.inc.php(152): include\_once('/var/www/html/u...') #3 /var/www/html/index.php(231): include\_once('/var/www/html/s...') #4 {main} thrown in /var/www/html/updates/versions/v1.13/migration/license\_migration.php on line 50

Dann musst du das Update erneut starten.<br> Wenn du jetzt einen HTTP 500 erhalten, führst du das Update erneut durch.

!!! success "**Überprüfe das System und i-doit**"
    Überprüfe dein System und i-doit!

## Aktualisierung von 1.13 auf 1.14

Zuerst bereiten wir das Update über die CLI vor, indem wir den i-doit-Ordner unter `/var/www/html/` öffnen und das idoit-Updatepaket mit

```sh
sudo -u www-data unzip idoit-1.14-update.zip
```

entpacken.

Wenn du gefragt werden, überschreiben du alles, indem du **A** eingibst.

Öffne nun den Web-Interface-Updater und das Update auf v1.14 wird angezeigt und ausgewählt, führst du das Update durch.

[![Aktualisierung von 1.13 auf 1.14](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/6-u18-119.png)](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/6-u18-119.png)

!!! success "**Überprüfe die Update-Logs**"
    Bitte nimmst du dich die Zeit, um die Logs durchzugehen und zu überprüfen, ob ein Fehler aufgetreten ist.

Wenn du diesen Fehler sehen:

!!! attention "**Möglicher Fehler**"
    Datenbankfehler: Abfragefehler: 'ALTER TABLE isys\_cats\_person\_list ADD isys\_cats\_person\_list\_\_disabled\_login TINYINT(1) UNSIGNED DEFAULT 0': Zeilengröße zu groß. Die maximale Zeilengröße für den verwendeten Tabellentyp, ohne BLOBs zu zählen, beträgt 8126. Dies beinhaltet Speicherüberkopf, überprüfen Sie das Handbuch. Sie müssen einige Spalten in TEXT oder BLOBs ändern.

Die Lösung ist [hier dokumentiert](../administration/troubleshooting/row-size-too-large.md)

!!! success "**Überprüfe das System und i-doit**"
    Überprüfe dein System und i-doit!

## Update von 1.14 auf 1.15

Zuerst bereiten wir das Update über die CLI vor, indem wir den i-doit-Ordner unter `/var/www/html/` öffnen und das idoit-Updatepaket mit

```sh
sudo -u www-data unzip idoit-1.15-update.zip
```

entpacken.

Wenn du gefragt werden, überschreiben du alles, indem du **A** eingibst.

Öffne nun den Web-Interface-Updater und das Update auf v1.15 wird angezeigt und ausgewählt, führst du das Update durch.

[![Update von 1.14 auf 1.15](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/7-u18-119.png)](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/7-u18-119.png)

!!! success "**Überprüfe das System und i-doit**"
    Überprüfe dein System und i-doit!

## Update von 1.15 auf 1.16

Zuerst bereiten wir das Update über die CLI vor, indem wir den i-doit-Ordner unter `/var/www/html/` öffnen und das idoit-Updatepaket mit

```sh
sudo -u www-data unzip idoit-1.16-update.zip
```

entpacken.

Wenn du gefragt werden, überschreiben du alles, indem du **A** eingibst.

Öffne nun den Web-Interface-Updater und das Update auf v1.16 wird angezeigt und ausgewählt, führst du das Update durch.

[![Update von 1.15 auf 1.16](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/8-u18-119.png)](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/8-u18-119.png)

!!! success "**Überprüfe das System und i-doit**"
    Überprüfe dein System und i-doit!

## Update von 1.16 auf 1.17

Zuerst bereiten wir das Update über die CLI vor, indem wir den i-doit-Ordner unter `/var/www/html/` öffnen und das idoit-Updatepaket mit

```sh
sudo -u www-data unzip idoit-1.17-update.zip
```

entpacken.

Wenn du dazu aufgefordert wirst, überschreibe alles, indem du **A** eingibst.

Nun öffnen wir den Web-Interface-Updater und das Update auf v1.17 wird angezeigt und ausgewählt, führst du das Update durch.

[![Aktualisierung von 1.16 auf 1.17](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/9-u18-119.png)](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/9-u18-119.png)

!!! success "**Überprüfe das System und i-doit**"
    Überprüfe dein System und i-doit!

## Aktualisierung von 1.17 auf 1.18

Zuerst bereiten wir das Update über die CLI vor, indem wir den i-doit-Ordner unter `/var/www/html/` öffnen und das idoit-Update-Paket mit folgendem Befehl entpacken:

```sh
sudo -u www-data unzip idoit-1.18-update.zip
```

Wenn du dazu aufgefordert wirst, überschreibe alles, indem du **A** eingibst.

Nun öffnen wir den Web-Interface-Updater und das Update auf v1.18 wird angezeigt und ausgewählt, führst du das Update durch.

[![Aktualisierung von 1.17 auf 1.18](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/10-u18-119.png)](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/10-u18-119.png)

!!! success "**Überprüfe das System und i-doit**"
    Überprüfe dein System und i-doit!

## Upgrade von Debian 10 auf 11

!!! attention "**Warnung**"
    Bevor du beginnst, stellst du bitte sicher, dass du ein vollständiges Backup haben, das du auf einem sauberen Server getestet haben, falls etwas schief geht, denn es gibt kein Zurück!<br>
    Lies die Update-Anweisungen für Debian 10 auf 11 [hier](https://www.debian.org/releases/bullseye/amd64/release-notes/ch-upgrading.en.html)

??? example "Ich habe ein funktionierendes vollständiges Backup"

    Schaffe etwas Platz mit

    ```sh
    sudo apt-get autoremove
    sudo apt-get clean
    ```

    Ändere die sources.list mit deinem bevorzugten Editor

    ```sh
    sudo nano /etc/apt/sources.list
    ```

    Ändere alle Einträge in 'buster' oder löschst du alle Einträge und Füge folgendes ein

    ```sh
    deb http://deb.debian.org/debian bullseye main
    deb http://deb.debian.org/debian bullseye contrib
    ```

    Stoppe nun mysql und cron

    ```sh
    sudo systemctl stop mysql cron
    ```

    Führe das Update auf Debian 11 durch

    ```sh
    sudo apt-get update
    sudo apt-get upgrade
    sudo apt-get full-upgrade
    ```

    Starte die Dienste, die wir gestoppt haben

    ```sh
    sudo systemctl start mysql cron
    ```

    Fehler? [Überprüfe die Debian-Website](https://www.debian.org/releases/bullseye/)

    !!! success "**Überprüfe das System und i-doit**"
        Überprüfe dein System und i-doit!

    Schaffe wieder etwas Platz frei

    ```sh
    sudo apt-get autoremove
    sudo apt-get clean
    ```

    Überprüfe deine sources.list, für weitere Informationen siehe [hier](https://wiki.debian.org/SourcesList)

    Du befindest dich jetzt bei Debian 11 mit PHP 7.4.30 und MariaDB 10.5.

## Konfigurieren von PHP 7.4

Erstelle die PHP-Konfigurationsdatei

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

Wenn der apache2 nicht neu startet und du den obigen Fehler erhältst, startest du den Server neu.

i-doit sollte jetzt über Verwaltung > [Mandant Name] Verwaltung > System Config Check die neue PHP-Version 7.4.30 anzeigen.

## Aktualisierung von 1.18 auf 1.19

Zuerst bereiten wir das Update über die CLI vor, indem wir den i-doit-Ordner unter `/var/www/html/`  öffnen und das i-doit-Update-Paket mit

```sh
sudo -u www-data unzip idoit-1.19-update.zip
```

entpacken.

Wenn du gefragt werden, überschreiben du alles, indem du **A** eingibst.

Wenn du das Update ohne PHP 7.3 versuchen, siehst du diese Meldung:

!!! attention "**Möglicher Fehler**"
    Du hast PHP 7.3.31. Um i-doit auf die nächste Version zu aktualisieren, benötigst du mindestens PHP 7.4!

Öffne nun den Web-Interface-Updater und das Update auf v1.19 wird angezeigt und ausgewählt, führst du das Update durch.

[![Aktualisierung von 1.18 auf 1.19](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/11-u18-119.png)](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/11-u18-119.png)

!!! success "**Überprüfe das System und i-doit**"

## Aktualisierung von 1.19 auf 20

Öffne zuerst den Web-Interface-Updater.<br>
Durch Klicken auf **Nach einer neuen Version suchen** kannst du überprüfen, ob ein neueres Paket verfügbar ist. Dafür benötigst du eine Internetverbindung.<br>
Wenn eine neue Version verfügbar ist, kann das Update-Paket mit einem Klick auf **Herunterladen** heruntergeladen und extrahiert werden.

Wenn du nicht mit dem Internet verbunden sind, kannst du das Update über die Befehlszeile vorbereiten, indem du den i-doit-Ordner unter `/var/www/html/` öffnen und das idoit-Update-Paket mit dem folgenden Befehl entpacken:

```sh
sudo -u www-data unzip idoit-20-update.zip
```

Wenn du dazu aufgefordert wirst, überschreibe alles, indem du **A** eingibst.

Wähle im Webinterface das Update auf Version 20 aus und führe das Update durch. Der Updater wählt eventuell deine aktuelle Version 1.19 vor. Wähle dann Version 20 von Hand aus, sonst spielt der Updater nur 1.19 erneut ein.

!!! note "**Lizenz erforderlich**"
    Der Updater bietet nur Updates an, wenn eine gültige Lizenz aktiviert ist. Sonst erscheint die Meldung "Your licence does not allow any updates" (deine Lizenz erlaubt keine Updates). [Aktiviere zuerst deinen Lizenz-Token](../wartung-und-betrieb/lizenzierung.md).

[![Aktualisierung von 1.19 auf 20](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/12-u18-119.png)](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/12-u18-119.png)

!!! success "**Überprüfe die Update-Logs**"
    Nimm dir bitte die Zeit, um die Logs durchzusehen und zu überprüfen, ob ein Fehler aufgetreten ist.

!!! success "**Überprüfe das System und i-doit**"

## Aktualisierung von 20 auf 29

Zunächst musst du das Update über die Befehlszeile vorbereiten, indem du den i-doit-Ordner unter `/var/www/html/` öffnen und das idoit-Update-Paket mit dem folgenden Befehl entpacken:

```sh
sudo -u www-data unzip idoit-29-update.zip
```

Wenn du dazu aufgefordert wirst, überschreibe alles, indem du **A** eingibst.

Überprüfe im Webinterface des Updaters, ob das Update auf Version 29 angezeigt und ausgewählt ist, und führst du dann das Update durch.

[![Aktualisierung von 20 auf 29](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/13-u18-119.png)](../assets/images/de/upgrades-und-umzuege/update-anleitung-1.7.4-bis-31/13-u18-119.png)

!!! success "**Überprüfe die Update-Logs**"
    Nimm dir bitte die Zeit, um die Logs durchzusehen und zu überprüfen, ob ein Fehler aufgetreten ist.

!!! success "**Überprüfe das System und i-doit**"

## Upgrade von Debian 11 auf 12

!!! attention "**Warnung**"
    Bevor du beginnst, stellst du bitte sicher, dass du ein vollständiges Backup haben, das du auf einem sauberen Server getestet haben, falls etwas schief geht, denn es gibt kein Zurück!
    Lies die Update-Anweisungen für Debian 11 auf 12 [hier](https://www.debian.org/releases/bookworm/amd64/release-notes/ch-upgrading.en.html)

??? example "Ich habe ein funktionierendes vollständiges Backup"

    Schaffe etwas Platz mit

    ```sh
    sudo apt-get autoremove
    sudo apt-get clean
    ```

    Ändere die sources.list mit deinem bevorzugten Editor.

```sh
sudo nano /etc/apt/sources.list
```

Ändere alle Einträge von 'bullseye' auf 'bookworm' oder lösche alle Einträge und füge Folgendes ein. Prüfe auch die Dateien in `/etc/apt/sources.list.d/`.

```sh
deb http://deb.debian.org/debian bookworm main contrib non-free-firmware
deb http://deb.debian.org/debian bookworm-updates main contrib non-free-firmware
deb http://security.debian.org/debian-security bookworm-security main contrib non-free-firmware
```

Stoppe nun mysql und cron

```sh
sudo systemctl stop mysql cron
```

Führe das Update auf Debian 12 durch

```sh
sudo apt-get update
sudo apt-get upgrade
sudo apt-get full-upgrade
```

Starte den Server neu, damit der neue Kernel und alle Dienste geladen werden

```sh
sudo reboot
```

Während des Upgrades meldet Debian eventuell, dass das automatische MariaDB-Upgrade fehlgeschlagen ist, zum Beispiel mit `Access denied for user 'root'@'localhost'`. Das passiert, wenn der Datenbankbenutzer root ein Passwort hat. Du behebst das im Abschnitt [MariaDB 10.11 Upgrade](#mariadb-1011-upgrade).

Fehler? [Hier lesen](https://www.debian.org/releases/bookworm/amd64/release-notes/ch-upgrading.en.html#trouble)<br>

!!! success "**Überprüfe das System und i-doit**"
    Überprüfe dein System und i-doit!

Gib erneut etwas Speicherplatz frei

```sh
sudo apt-get autoremove
sudo apt-get clean
```

Überprüfe deine sources.list, für weitere Informationen siehe [hier](https://wiki.debian.org/SourcesList)

Du befindest dich jetzt bei Debian 12 mit PHP 8.2 und MariaDB 10.11.

## Konfigurieren von PHP 8.2

Erstelle die PHP-Konfigurationsdatei

```sh
sudo nano /etc/php/8.2/mods-available/i-doit.ini
```

Füge ein:

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
mysqli.default_socket = /var/run/mysqld/mysqld.sock
```

Debian 12 ersetzt die PHP-7.4-Module nur dann durch PHP-8.2-Module, wenn sie mit den allgemeinen Paketnamen wie `php-bcmath` installiert wurden. Stelle sicher, dass alle PHP-Module installiert sind, die i-doit braucht:

```sh
sudo apt install libapache2-mod-php php-bcmath php-cli php-common php-curl php-gd php-imagick php-json php-ldap php-mbstring php-memcached php-mysql php-pgsql php-soap php-xml php-zip
```

Änderungen aktivieren

```sh
sudo a2dismod php7.4
sudo a2enmod php8.2
sudo phpenmod i-doit
sudo phpenmod memcached
sudo systemctl restart apache2.service
```

Meldet `a2dismod` oder `a2enmod`, dass das Modul schon deaktiviert oder aktiviert ist, ist das in Ordnung. Wenn der apache2 nicht neu startet, startest du den Server neu.

Prüfe die PHP-Version mit `php -v`. Sie sollte PHP 8.2 anzeigen.

## MariaDB 10.11 Upgrade

Debian kann die Systemtabellen nicht automatisch aktualisieren, wenn der Datenbankbenutzer root ein Passwort hat. Prüfe die Tabellen und aktualisiere sie auf die neue Version mit

```sh
sudo mariadb-upgrade -p
```

Gib dein Passwort ein und überprüfe, ob alles gut gelaufen ist

Starte danach MariaDB neu

```sh
sudo systemctl restart mysql.service
```

## Aktualisierung von 29 auf 31

Bereite das Update zuerst über die CLI vor: Öffne den i-doit-Ordner unter `/var/www/html/` und entpacke das i-doit-Update-Paket mit

```sh
sudo -u www-data unzip idoit-31-update.zip
```

Wenn du gefragt wirst, überschreibst du alles, indem du **A** eingibst.

Prüfe im Web-Interface-Updater, ob das Update auf Version 31 angezeigt und ausgewählt ist, und führe dann das Update durch.

!!! success "**Überprüfe die Update-Logs**"
    Nimm dir bitte die Zeit, die Logs durchzusehen und zu prüfen, ob ein Fehler aufgetreten ist.

!!! success "**Überprüfe das System und i-doit**"

## Aktualisierung von 31 auf 35

!!! attention "**Aktualisiere deine Add-ons**"
    i-doit 35 ändert die interne Template-Engine. Aktualisiere alle installierten Add-ons auf ihre neueste Version, die i-doit 35 unterstützt, siehe [Kompatibilitätsmatrix](../installation/systemvoraussetzungen.md#kompatibilitatsmatrix).

Bereite das Update zuerst über die CLI vor: Öffne den i-doit-Ordner unter `/var/www/html/` und entpacke das i-doit-Update-Paket mit

```sh
sudo -u www-data unzip idoit-35-update.zip
```

Wenn du gefragt wirst, überschreibst du alles, indem du **A** eingibst.

Prüfe im Web-Interface-Updater, ob das Update auf Version 35 angezeigt und ausgewählt ist, und führe dann das Update durch.

!!! success "**Überprüfe die Update-Logs**"
    Nimm dir bitte die Zeit, die Logs durchzusehen und zu prüfen, ob ein Fehler aufgetreten ist.

!!! success "**Überprüfe das System und i-doit**"

## Aktualisierung von 35 auf 39

!!! attention "**PHP-Version**"
    i-doit 39 läuft noch mit PHP 8.2 aus Debian 12, PHP 8.2 ist aber als veraltet markiert. Empfohlen ist PHP 8.4. Plane den Wechsel auf eine neuere PHP-Version ein, zum Beispiel mit einem späteren Upgrade auf Debian 13. Lies vor diesem Schritt die [Release Notes zu i-doit 39](../versionshistorie/release-notes/release-notes-39.md), denn einige Sicherheitsverbesserungen ändern das Verhalten von i-doit.

!!! note "**Geändertes Verhalten in i-doit 39**"
    Prüfe diese Punkte nach dem Update, Details stehen in den [Release Notes](../versionshistorie/release-notes/release-notes-39.md#wichtige-anderungen):

    - Nach zu vielen Fehlversuchen wird der Login für einige Minuten gesperrt. Läuft i-doit hinter einem Reverse Proxy, trägst du dessen IP-Adresse in die Experteneinstellung `system.security.login-throttle.trusted-proxies` ein.
    - Der CMDB-Export speichert standardmäßig keine Dateien mehr auf dem Server.
    - Uploads werden nur noch mit erlaubten Dateiendungen angenommen, Links nur noch mit erlaubten URL-Schemata.
    - Der Updater und der interne Proxy prüfen TLS-Zertifikate. Ersetzt dein Proxy Zertifikate, muss der Server dessen Zertifikat als vertrauenswürdig kennen.
    - Berechtigungen für Importe und Add-on-Seiten werden auf dem Server geprüft. Wer bisher direkte URLs genutzt hat, braucht eventuell zusätzliche Rechte.

Bereite das Update zuerst über die CLI vor: Öffne den i-doit-Ordner unter `/var/www/html/` und entpacke das i-doit-Update-Paket mit

```sh
sudo -u www-data unzip idoit-39-update.zip
```

Wenn du gefragt wirst, überschreibst du alles, indem du **A** eingibst.

Prüfe im Web-Interface-Updater, ob das Update auf Version 39 angezeigt und ausgewählt ist, und führe dann das Update durch.

!!! success "**Überprüfe die Update-Logs**"
    Nimm dir bitte die Zeit, die Logs durchzusehen und zu prüfen, ob ein Fehler aufgetreten ist.

!!! success "**Überprüfe das System und i-doit**"

## Quellen

*   MariaDB-Upgrade-Informationen [https://mariadb.com/kb/en/upgrading/](https://mariadb.com/kb/en/upgrading/)
*   Debian 9-Upgrade [https://www.debian.org/releases/stretch/](https://www.debian.org/releases/stretch/)
*   Debian 10-Upgrade [https://www.debian.org/releases/buster/](https://www.debian.org/releases/buster/)
*   Debian 11-Upgrade [https://www.debian.org/releases/bullseye/](https://www.debian.org/releases/bullseye/)
*   Debian 12-Upgrade [https://www.debian.org/releases/bookworm/](https://www.debian.org/releases/bookworm/)
