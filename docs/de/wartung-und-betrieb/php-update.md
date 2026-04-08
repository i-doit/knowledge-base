---
title: PHP aktualisieren (Debian/Ubuntu)
description: PHP-Version für i-doit aktualisieren — Schritt für Schritt mit mod_php oder PHP-FPM
icon:
status:
lang: de
---

# PHP aktualisieren (Debian/Ubuntu)

Neue PHP-Versionen bringen Sicherheitsfixes, bessere Performance und neue Funktionen. Gleichzeitig setzt i-doit bestimmte PHP-Versionen voraus — prüfe vor dem Update immer die [Systemvoraussetzungen](../installation/systemvoraussetzungen.md), welche Versionen aktuell unterstützt werden.

Dieser Artikel beschreibt den Wechsel von einer PHP-Version auf eine neuere unter **Debian** und **Ubuntu** — mit den offiziellen Paketquellen, ohne Drittanbieter-Repositories.

!!! warning "Backup zuerst"
    Erstelle vor dem PHP-Update ein vollständiges [Backup](daten-sichern-und-wiederherstellen/index.md) — mindestens der Apache-Konfiguration (`/etc/apache2/`), der PHP-Konfiguration (`/etc/php/`) und deiner i-doit-Installation.

## Kurzanleitung (TL;DR)

Am Beispiel eines Wechsels von PHP 8.2 auf PHP 8.3 mit PHP-FPM:

<div class="steps" markdown>
1. Backup erstellen
2. Neue Pakete installieren:
    ```shell
    sudo apt install libapache2-mod-fcgid php8.3-{bcmath,cli,common,curl,fpm,gd,imagick,ldap,mbstring,memcached,mysql,pgsql,soap,xml,zip}
    ```
3. PHP-FPM starten und aktivieren:
    ```shell
    sudo systemctl enable --now php8.3-fpm
    ```
4. i-doit PHP-Konfiguration für die neue Version erstellen:
    ```shell
    sudo nano /etc/php/8.3/mods-available/i-doit.ini
    ```
    ```ini title="i-doit.ini"
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
    ```shell
    sudo phpenmod -v 8.3 i-doit
    ```
5. Apache VirtualHost auf die neue PHP-Version umstellen — den Socket-Pfad in `/etc/apache2/sites-available/i-doit.conf` anpassen:
    ```apache
    SetHandler "proxy:unix:/run/php/php8.3-fpm.sock|fcgi://localhost/"
    ```
6. Apache-Module aktivieren und Dienste neu starten:
    ```shell
    sudo a2enmod proxy_fcgi setenvif rewrite
    sudo systemctl restart php8.3-fpm apache2
    ```
7. i-doit-Cache leeren unter **Verwaltung → Systemreparatur und Bereinigung**
</div>

---

## Welche PHP-Version liefert meine Distribution?

Du kannst nur die PHP-Version installieren, die deine Distribution in ihren offiziellen Repositories anbietet. Für eine neuere Version müsstest du die Distribution selbst upgraden.

| Distribution | PHP-Version |
|-------------|-------------|
| Debian 12 "Bookworm" | PHP **8.2** |
| Ubuntu 22.04 LTS "Jammy" | PHP **8.1** |
| Ubuntu 24.04 LTS "Noble" | PHP **8.3** |

Prüfe, welche Version verfügbar ist:

```shell
apt-cache search php8
```

---

## Vorbereitungen

### 1. System aktualisieren

```shell
sudo apt update && sudo apt upgrade
```

### 2. Aktuelle PHP-Version ermitteln

```shell
# Kommandozeile:
php -v

# Geladene Module:
php -m

# Aktive Konfigurationsdateien:
php --ini
```

### 3. Apache-Integrationsmethode prüfen

Es gibt zwei Wege, wie Apache PHP-Dateien verarbeitet:

| Methode | Beschreibung | Empfehlung |
|---------|-------------|------------|
| **mod_php** | PHP läuft direkt im Apache-Prozess. Einfach, aber weniger performant. Erfordert `mpm_prefork`. | Für kleine Installationen |
| **PHP-FPM** | PHP läuft als eigener Dienst. Apache leitet Anfragen über einen Socket weiter. Erlaubt `mpm_event`. | **Empfohlen** für Produktion |

Welche Methode aktuell aktiv ist:

```shell
# mod_php aktiv?
apache2ctl -M | grep php

# PHP-FPM aktiv?
systemctl status php*-fpm
```

---

## PHP-Pakete installieren

Installiere die Pakete für die neue Version. Im folgenden Beispiel wird PHP 8.2 durch PHP 8.3 ersetzt — passe die Versionsnummern an deine Situation an.

```shell
sudo apt install php8.3-{bcmath,cli,common,curl,fpm,gd,imagick,ldap,mbstring,memcached,mysql,pgsql,soap,xml,zip}
```

Falls du mod_php statt PHP-FPM verwendest, installiere zusätzlich:

```shell
sudo apt install libapache2-mod-php8.3
```

---

## PHP-Konfiguration migrieren

!!! warning "Nicht die alte php.ini kopieren"
    Jede PHP-Version kann geänderte oder entfernte Direktiven haben. Übertrage deine Anpassungen manuell in die neue Konfiguration.

### i-doit Konfiguration erstellen

Der sauberste Weg: Erstelle eine eigene `.ini`-Datei mit den i-doit-spezifischen Einstellungen:

```shell
sudo nano /etc/php/8.3/mods-available/i-doit.ini
```

```ini title="i-doit.ini"
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

Aktiviere die Konfiguration für alle SAPIs (CLI und FPM):

```shell
sudo phpenmod -v 8.3 i-doit
```

Die vollständigen Einstellungen findest du unter [Systemeinstellungen](../installation/manuelle-installation/systemeinstellungen.md).

### Wo liegen die php.ini-Dateien?

| SAPI | Pfad |
|------|------|
| CLI | `/etc/php/8.3/cli/php.ini` |
| Apache (mod_php) | `/etc/php/8.3/apache2/php.ini` |
| PHP-FPM | `/etc/php/8.3/fpm/php.ini` |

---

## Apache konfigurieren

### Variante A: PHP-FPM (empfohlen)

**1. Sicherstellen, dass mod_php deaktiviert ist:**

```shell
sudo a2dismod php8.2   # alte Version
sudo a2dismod php8.3   # auch die neue — FPM braucht kein mod_php
```

**2. Apache-Module für FPM aktivieren:**

```shell
sudo a2enmod proxy_fcgi setenvif rewrite
```

**3. MPM auf event umstellen** (bessere Performance als prefork):

```shell
sudo a2dismod mpm_prefork
sudo a2enmod mpm_event
```

**4. VirtualHost anpassen:**

Ändere den Socket-Pfad in `/etc/apache2/sites-available/i-doit.conf`:

```apache title="/etc/apache2/sites-available/i-doit.conf"
<VirtualHost *:80>
    ServerName cmdb.firma.de
    DocumentRoot /var/www/html/

    <FilesMatch \.php$>
        SetHandler "proxy:unix:/run/php/php8.3-fpm.sock|fcgi://localhost/"
    </FilesMatch>

    <Directory /var/www/html/>
        AllowOverride All
    </Directory>

    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
```

!!! tip "Socket-Pfad prüfen"
    Der Pfad `/run/php/php8.3-fpm.sock` muss mit der `listen`-Direktive in `/etc/php/8.3/fpm/pool.d/www.conf` übereinstimmen. Ein Mismatch ist die häufigste Fehlerursache.

**5. PHP-FPM und Apache neu starten:**

```shell
sudo systemctl restart php8.3-fpm apache2
```

### Variante B: mod_php

**1. Alte Version deaktivieren, neue aktivieren:**

```shell
sudo a2dismod php8.2
sudo a2enmod php8.3
```

**2. MPM auf prefork** (mod_php erfordert dies):

```shell
sudo a2dismod mpm_event
sudo a2enmod mpm_prefork
```

**3. Apache neu starten:**

```shell
sudo systemctl restart apache2
```

---

## Installation prüfen

### PHP-Version verifizieren

```shell
# Kommandozeile:
php -v

# Webserver — welche Version Apache verwendet:
php -r 'echo php_sapi_name();'
```

### i-doit prüfen

1. Öffne i-doit im Browser und prüfe ob alles funktioniert
2. Gehe zu **Verwaltung → Systemreparatur und Bereinigung** und leere den Cache
3. Prüfe die Systemübersicht unter **Verwaltung → Systemübersicht** — dort siehst du die aktive PHP-Version

### Alte PHP-Version entfernen

Wenn alles funktioniert, entferne die alte Version:

```shell
sudo apt purge php8.2*
sudo apt autoremove
```

!!! warning "Vorsicht"
    Prüfe vor dem Entfernen, dass kein anderer Dienst auf dem Server die alte PHP-Version benötigt.

---

## Häufige Probleme

### HTTP 500 Internal Server Error

- **Logs prüfen**: `tail -50 /var/log/apache2/error.log` und `journalctl -u php8.3-fpm`
- **Socket-Mismatch**: Der häufigste Fehler — der Pfad im VirtualHost stimmt nicht mit der FPM-Konfiguration überein
- **Fehlende Module**: `php -m` zeigt, welche Module geladen sind. Vergleiche mit den [Systemvoraussetzungen](../installation/systemvoraussetzungen.md)
- **Dateiberechtigungen**: `www-data` braucht Lesezugriff auf die PHP-Dateien
- **Konfigurationsfehler**: `apache2ctl configtest` prüft die Apache-Syntax

### PHP-Code wird als Text angezeigt

Apache leitet die `.php`-Dateien nicht an den PHP-Interpreter weiter:

- Bei PHP-FPM: Fehlt der `<FilesMatch>` Block im VirtualHost?
- Läuft der FPM-Dienst? `systemctl status php8.3-fpm`
- Ist mod_php und FPM gleichzeitig aktiv? Das führt zu Konflikten — deaktiviere mod_php.

### Fehlermeldungen über fehlende Erweiterungen

Prüfe die geladenen Module und vergleiche mit den benötigten:

```shell
php -m | sort
```

Fehlende Module nachinstallieren:

```shell
sudo apt install php8.3-<modulname>
```

### Änderungen an php.ini wirken nicht

- **Falsche Datei bearbeitet?** CLI, FPM und mod_php haben jeweils eigene php.ini-Dateien
- **Dienst nicht neu gestartet?** Nach Änderungen an der FPM-Konfiguration: `sudo systemctl restart php8.3-fpm`
- **Eigene .ini überschrieben?** Prüfe mit `php --ini` welche Dateien geladen werden und in welcher Reihenfolge
