---
title: PHP aktualisieren Debian/Ubuntu
description: Dinge die beachtet werden müssen wenn PHP aktualisiert wurde
icon:
status:
lang: de
---

## Einleitung

Die Aktualisierung der PHP-Version auf einem Webserver ist ein wichtiger Schritt, um Sicherheit, Leistung und Kompatibilität moderner Webanwendungen zu gewährleisten. Dieser Artikel konzentriert sich auf die Verwendung der PHP-Versionen, die direkt von Ihrer aktuellen Ubuntu- oder Debian-Distribution bereitgestellt werden.

### Warum PHP aktualisieren?

-   **Sicherheit**: Ältere PHP-Versionen erhalten oft keinen aktiven Sicherheitssupport mehr von den PHP-Entwicklern. Die Distributionen (Ubuntu, Debian) können zwar für die von ihnen bereitgestellten Versionen länger Sicherheitsupdates liefern, aber der Wechsel auf eine neuere, aktiv unterstützte Version ist generell sicherer.
-   **Performance**: Neuere PHP-Versionen bringen oft signifikante Leistungsverbesserungen mit sich.
-   **Neue Funktionen**: Jede neue PHP-Hauptversion führt neue Sprachfunktionen und Verbesserungen ein.

### Was dieser Artikel behandelt

Dieser Hilfeartikel führt schrittweise durch den Prozess der PHP-Aktualisierung (oder Installation der neuesten, von der Distribution unterstützten Version) auf Servern mit Ubuntu oder Debian. Ein Schwerpunkt liegt auf der anschließenden Konfiguration des Apache Webservers. Dabei werden die zwei gängigsten Integrationsmethoden detailliert erläutert:

-   **mod_php**: PHP wird als direktes Modul in den Apache-Prozess eingebettet.
-   **PHP-FPM**: PHP läuft als separater Dienst, und Apache leitet PHP-Anfragen an diesen Dienst weiter.

!!!warning "Wichtiger Hinweis: **Backups**!"
    Bevor mit jeglichen Aktualisierungsarbeiten begonnen wird, ist es unerlässlich, ein vollständiges Backup des Systems oder zumindest aller relevanten Konfigurationsdateien (`/etc/apache2/`, `/etc/php/`) und Webseiten-Daten zu erstellen.

## Wichtige Vorbemerkung: PHP-Versionen in offiziellen Repositories

Dieser Artikel beschreibt die Aktualisierung von PHP unter ausschließlicher Verwendung der offiziellen Paketquellen Ihrer aktuellen Ubuntu/Debian-Distribution. Das bedeutet:

-   Sie können nur auf die PHP-Version aktualisieren (oder diese installieren), die Ihre spezifische Distributionsversion (z.B. Ubuntu 22.04 LTS, Debian 12 "Bookworm") offiziell unterstützt und in ihren Standard-Repositories anbietet.
-   Um eine PHP-Version zu erhalten, die neuer ist als die in Ihrer aktuellen Distribution verfügbare, wäre in der Regel ein Upgrade der gesamten Distribution auf eine neuere Version erforderlich (z.B. von Ubuntu 22.04 auf Ubuntu 24.04). Ein Distributionsupgrade ist ein umfangreicherer Prozess und wird in diesem Artikel nicht behandelt.

Beispiele für PHP-Versionen in offiziellen Repositories (Stand kann sich ändern):

-   Ubuntu 22.04 LTS ("Jammy Jellyfish"): Bietet typischerweise PHP **8.1**.
-   Ubuntu 24.04 LTS ("Noble Numbat"): Bietet typischerweise PHP **8.3**.
-   Debian 11 ("Bullseye"): Bietet typischerweise PHP **7.4** (nicht mehr supported).
-   Debian 12 ("Bookworm"): Bietet typischerweise PHP **8.2**.

Sie müssen die für Ihre spezifische Systemversion verfügbare PHP-Version ermitteln.

## TL;DR aka. too long; didn't read
<div class="steps" markdown>
1. Backup erstellen
2. Neue Pakete installieren `sudo apt install libapache2-mod-fcgid php8.3-{bcmath,cli,common,curl,fpm,gd,imagick,ldap,mbstring,memcached,mysql,pgsql,soap,xml,zip}`
3. PHP-FPM starten etc. `sudo systemctl start php8.3-fpm && sudo systemctl enable php8.3-fpm`
4. PHP Konfiguration kopieren oder neu erstellen `sudo nano /etc/php/8.3/mods-available/i-doit.ini`
    ```ini title="i-doit.ini"
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
5. Handler in der VirtualHost-Konfiguration umstellen `nano /etc/apache2/sites-available/i-doit.conf` und so ändern `SetHandler "proxy:unix:/var/run/php/php8.3-fpm.sock|fcgi://localhost/"`
6. Aktivieren der erforderlichen Apache-Module `sudo a2enmod proxy_fcgi setenvif rewrite`
7. PHP-FPM und Apache2 neu starten `sudo systemctl restart php8.3-fpm apache2`
</div>

## Vorbereitungen

:material-numeric-1-circle-outline: System aktualisieren

Stellen Sie sicher, dass Ihr System auf dem neuesten Stand ist:

```shell
sudo apt update
sudo apt upgrade
```

:material-numeric-2-circle-outline: Aktuelle PHP-Umgebung ermitteln

Kommandozeilenversion (CLI):

```shell
php -v
```

Webserver PHP-Version (mittels `phpinfo()`): Erstellen Sie eine Datei (z.B. info.php) im Document Root Ihrer Webseite (oft `/var/www/html/`) mit folgendem Inhalt:

```PHP title="info.php"
<?php
phpinfo();
?>
```

:material-numeric-3-circle-outline: Backups erstellen

Sichern Sie mindestens:

*   Apache-Konfiguration: `/etc/apache2/`
*   PHP-Konfiguration: `/etc/php/` (falls vorhanden)
*   Ihre Webseiten-Daten (z.B. `/var/www/html/`)

## PHP aktualisieren

:material-numeric-1-circle-outline: Verfügbare PHP-Version in den offiziellen Repositories prüfen

Um die PHP-Hauptversion zu finden, die Ihre Distribution anbietet, können Sie die Paketlisten durchsuchen. Der generische Paketname php installiert oft die Standardversion. Für spezifischere Suchen (z.B. nach Modulen für eine bestimmte Version):

```shell
sudo apt-cache search php
# Oder spezifischer, z.B. für Debian 12 (Bookworm), das PHP 8.2 enthält:
sudo apt-cache search php8.2
# Für Ubuntu 22.04 (Jammy), das PHP 8.1 enthält:
sudo apt-cache search php8.1
```

Notieren Sie sich die verfügbare Hauptversion (z.B. 8.2, 8.3). Im Folgenden wird diese als X.Y bezeichnet.

:material-numeric-2-circle-outline: Installation der PHP-Kernpakete und Erweiterungen

Installieren Sie die PHP-Kernpakete für die ermittelte Version X.Y. Dies umfasst typischerweise die CLI, das Apache-Modul (für mod_php) oder FPM.

Basispakete:

```shell
sudo apt install phpX.Y-cli
```

(Ersetzen Sie X.Y durch die tatsächliche Version, z.B. php8.2-cli oder php8.3-cli). Für mod_php Integration:

```shell
sudo apt install libapache2-mod-phpX.Y
```

(z.B. libapache2-mod-php8.2). Für PHP-FPM Integration:

```shell
sudo apt install phpX.Y-fpm
```

(z.B. php8.1-fpm). Installieren Sie die für Ihre Anwendungen notwendigen Erweiterungen. Die Paketnamen folgen dem Muster phpX.Y-<erweiterungsname>.

```shell
sudo apt install phpX.Y-{bcmath,cli,common,curl,fpm,gd,imagick,ldap,mbstring,memcached,mysql,pgsql,soap,xml,zip}
```

Passen Sie die Liste und X.Y an die verfügbare Version an.


## Apache für die neue PHP-Version konfigurieren

### Apache mit mod_php

:material-numeric-1-circle-outline: Alte mod_php Version deaktivieren (falls vorhanden): Wenn Sie von einer älteren PHP-Version (z.B. A.B) mit mod_php aktualisieren, deaktivieren Sie zuerst das alte Modul:

```shell
sudo a2dismod phpA.B
```

:material-numeric-2-circle-outline: Neue mod_php Version aktivieren: Aktivieren Sie das Modul für die neue PHP-Version X.Y:

```shell
sudo a2enmod phpX.Y
```

Überprüfen Sie, ob die Modulkonfigurationsdateien (z.B. `/etc/apache2/mods-enabled/phpX.Y.conf` und `phpX.Y.load`) existieren.

:material-numeric-3-circle-outline: Apache MPM (Multi-Processing Module) sicherstellen: `mod_php` ist typischerweise nicht thread-sicher und erfordert das mpm_prefork-Modul. Wenn ein anderes MPM (wie mpm_event oder mpm_worker) aktiv ist, wechseln Sie:

```shell
sudo a2dismod mpm_event # oder mpm_worker
sudo a2enmod mpm_prefork
```

:material-numeric-4-circle-outline: Apache Neustart:

```shell
sudo systemctl restart apache2
```

### Apache mit php-fpm

:material-numeric-1-circle-outline: Sicherstellen, dass mod_php deaktiviert ist:

Deaktivieren Sie alle aktiven mod_php-Versionen:

```shell
sudo a2dismod phpX.Y # Für jede mod_php Version (alt und neu)
```

:material-numeric-2-circle-outline: Benötigte Apache-Module für PHP-FPM aktivieren:

```shell
sudo a2enmod proxy_fcgi setenvif
```

Das Modul actions kann ebenfalls nützlich sein, ist aber nicht immer zwingend erforderlich.

:material-numeric-3-circle-outline: Apache MPM wechseln (empfohlen):

Für PHP-FPM wird mpm_event empfohlen:

```shell
sudo a2dismod mpm_prefork
sudo a2enmod mpm_event
```

:material-numeric-4-circle-outline: PHP-FPM Konfiguration für Apache aktivieren (globale Methode):

Viele Distributionen liefern eine Konfigurationsdatei mit, die PHP-FPM global für Apache einrichtet. Aktivieren Sie diese für Ihre PHP-Version X.Y:

```shell
sudo a2enconf phpX.Y-fpm
```

Diese Konfiguration (z.B. in `/etc/apache2/conf-available/phpX.Y-fpm.conf`) leitet .php-Anfragen an den PHP-FPM Unix-Socket (z.B. `/run/php/phpX.Y-fpm.sock`).

:material-numeric-5-circle-outline: Apache VirtualHost für PHP-FPM anpassen (pro-Seite Methode, falls globale Methode nicht ausreicht oder spezifische Pools genutzt werden):

Wenn Sie die globale Konfiguration nicht verwenden oder feinere Kontrolle benötigen (z.B. für verschiedene PHP-Versionen oder FPM-Pools pro Seite), passen Sie Ihren VirtualHost an. Stellen Sie sicher, dass die globale Konfiguration (falls aktiv) nicht mit Ihrer VHost-spezifischen Konfiguration kollidiert.

Beispiel für einen VirtualHost mit Unix Socket (z.B. `/run/php/phpX.Y-fpm.sock`):

```Apache title="/etc/apache2/sites-available/i-doit.conf"
<VirtualHost *:80>
    ServerName ihre-domain.de
    DocumentRoot /var/www/html/

    <FilesMatch \.php$>
        # Stellt sicher, dass Apache die Anfrage an den FPM-Prozess weiterleitet
        # Der Socket-Pfad muss mit dem in der FPM-Pool-Konfiguration übereinstimmen
        SetHandler "proxy:unix:/run/php/phpX.Y-fpm.sock|fcgi://localhost/"
    </FilesMatch>

    <Directory /var/www/html>
        AllowOverride None
        # Hier den Inhalt der i-doit .htaccess Datei hinzufügen (i-doit Ordner) siehe i-doit Installation
    </Directory>

    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
```

Ersetzen Sie X.Y und Pfade entsprechend. Der Teil `fcgi://localhost/` ist bei Unix-Sockets oft ein Platzhalter, aber wichtig für die korrekte Übergabe von SCRIPT_FILENAME.

:material-numeric-6-circle-outline: PHP-FPM und Apache Dienste neustarten:

```shell
sudo systemctl restart phpX.Y-fpm  # Ersetzen Sie X.Y durch die neue PHP-Version
sudo systemctl restart apache2
```

## Konfiguration migrieren und überprüfen

:material-numeric-1-circle-outline: Migration der php.ini Einstellungen

!!! note "Wichtig: Nicht einfach die alte php.ini kopieren! Jede PHP-Version kann geänderte Direktiven haben."

-   **Finden Sie die neuen php.ini-Dateien**:
    -   CLI: `/etc/php/X.Y/cli/php.ini`
    -   Apache (mod_php): `/etc/php/X.Y/apache2/php.ini`
    -   PHP-FPM: `/etc/php/X.Y/fpm/php.ini`
-   **Vergleichen Sie die Dateien**: Nutzen Sie diff oder vergleichen Sie manuell die neue php.ini mit Ihrer alten.
-   **Übertragen Sie benutzerdefinierte Einstellungen sorgfältig**. Typische Anpassungen: memory_limit, upload_max_filesize, post_max_size, max_execution_time, error_reporting, date.timezone.

:material-numeric-2-circle-outline: Überprüfung der Installation

-   **Kommandozeile**:
    -   `php -v`
    -   `php -m` (zeigt geladene Module)
    -   `php --ini` (zeigt geladene php.ini für CLI)
-   **Webserver**:
    -   Verwenden Sie das info.php-Skript.
    -   Überprüfen Sie PHP-Version, Server API und geladene php.ini.
    -   **Löschen Sie info.php** danach!

## Alte PHP-Versionen entfernen

Wenn Sie von einer älteren Version A.B aktualisiert haben und diese nicht mehr benötigt wird:

```shell
sudo apt purge phpA.B*
sudo apt autoremove
```

Seien Sie vorsichtig, um nicht versehentlich die gerade installierte Version zu entfernen.

## Häufige Probleme und deren Ursachen/Lösungen

*   **HTTP 500 Internal Server Error:** Dies ist ein generischer Fehler, der auf ein serverseitiges Problem hinweist.
    *   **Logs prüfen:** Untersuchen Sie die Apache-Fehlerprotokolle (üblicherweise `/var/log/apache2/error.log`) und die PHP-FPM-Protokolle (z.B. `/var/log/php/8.2/fpm.log`, Version anpassen) auf detailliertere Fehlermeldungen.
    *   **Dateiberechtigungen:** Falsche Berechtigungen für PHP-Skriptdateien oder den PHP-FPM Unix-Socket können diesen Fehler verursachen. Der Apache-Benutzer (`www-data`) muss Lesezugriff auf die Skripte und Schreib-/Lesezugriff auf den Socket haben (falls so konfiguriert).
    *   **Konfigurationsfehler:** Syntaxfehler in `.htaccess`-Dateien oder Apache-Konfigurationsdateien (`httpd.conf`, VirtualHost-Dateien) sind eine häufige Ursache.[30] Verwenden Sie `apache2ctl configtest` zur Überprüfung.
    *   **Fehlende PHP-Module:** Wenn i-doit eine Funktion verwendet, deren PHP-Erweiterung nicht installiert oder aktiviert ist.
    *   **PHP-Limits überschritten:** Zu niedrige Werte für `memory_limit` oder `max_execution_time` in der `php.ini` können Skripte zum Absturz bringen.
    *   **Socket-Pfad-Mismatch:** Ein sehr häufiger Fehler bei PHP-FPM-Konfigurationen ist eine Nichtübereinstimmung zwischen dem in der FPM-Pool-Konfiguration (`listen`-Direktive) definierten Socket-Pfad und dem in der Apache VirtualHost-Konfiguration (`SetHandler` oder `ProxyPassMatch`) verwendeten Pfad. Beide müssen exakt übereinstimmen.
*   **PHP-Code wird als Text angezeigt / Download der PHP-Datei:** Dies deutet darauf hin, dass Apache die `.php`-Dateien nicht an den PHP-Interpreter weiterleitet.
    *   **Fehlender Handler:** Die Apache-Konfiguration (VirtualHost) enthält keinen korrekten Handler für PHP-Dateien (z.B. der `<FilesMatch \.php$>` Block fehlt oder ist fehlerhaft).
    *   **PHP-FPM-Dienst:** Der PHP-FPM-Dienst für die konfigurierte Version läuft nicht oder ist für Apache nicht erreichbar (Socket-Problem).
    *   **Konkurrierende Module:** `mod_php` ist möglicherweise noch aktiv und stört die FPM-Verarbeitung. Stellen Sie sicher, dass `mod_php` deaktiviert ist, wenn FPM verwendet wird.
*   **Fehlermeldungen bezüglich fehlender Erweiterungen:**
    *   Überprüfen Sie mit `php -m` oder der `phpinfo()`-Seite, ob alle für i-doit erforderlichen PHP-Erweiterungen (siehe Tabelle 2) installiert und geladen sind.
    *   Stellen Sie sicher, dass die Erweiterungen in der korrekten `php.ini`-Datei aktiviert sind oder via `phpenmod` für die entsprechende SAPI (FPM) und Version aktiviert wurden.
*   **Probleme nach `php.ini`-Änderungen:**
    *   **Falsche Datei bearbeitet:** Vergewissern Sie sich, dass Sie die `php.ini`-Datei für die korrekte SAPI (FPM oder CLI) und PHP-Version bearbeitet haben.
    *   **Dienstneustart vergessen:** Änderungen an der `php.ini` für FPM erfordern einen Neustart des PHP-FPM-Dienstes (z.B. `sudo systemctl restart php8.2-fpm`). Änderungen für `mod_php` erfordern einen Apache-Neustart.
