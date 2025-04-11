---
title: Umzug einer Installation unter GNU/Linux
description: Umzug einer Installation unter GNU/Linux
icon: fontawesome/brands/linux
status:
lang: de
---

# Umzug einer Installation unter GNU/Linux

In diesem Artikel beschreiben wir die generelle Vorgehensweise, um eine Installation von i-doit von einem GNU/Linux zu einem anderen umzuziehen. Der Umzug umfasst sowohl die Datenbanken, als auch die Dateien und Verzeichnisse.

## Vorbereitungen und Annahmen

!!! warning "Beide Systeme müssen die gleiche i-doit Version verwenden!<br>Bei Red Hat basierten Betriebssystem kann es sein, dass **argon2i** zusätzlich installiert werden muss"

Es sind ein paar Dinge zu beachten, um einen möglichst reibungslosen Umzug zu gewährleisten:

1. i-doit ist auf beiden Servern, in der gleichen Version installiert.
2. Beide Systeme wurden mit dem idoit-install Skript erstellt.
3. Beide Systeme verwenden die selben Passwörter für MariaDB, diese können im Anschluss geändert werden. Wenn nicht nutzen Sie auch die **optionalen Schritte**.
4. Wir verändern das alte System nicht, um im Fall der Fälle schnell wieder in den Ursprungszustand zurückkehren zu können.
5. Die gezeigten Befehle passen zu einem aktuellen Debian GNU/Linux und sollten an die entsprechende Umgebung angepasst werden. **Blindes Ausführen der Befehle sollte vermieden werden**.

## Neues System vorbereiten

Zunächst gilt es, das neue System so weit wie möglich vorzubereiten:

1. Die Systemvoraussetzungen entsprechen der genutzten Version, siehe dazu die [Kompatibilitätsmatrix](../installation/systemvoraussetzungen.md#kompatibilitätsmatrix).
2. Angepasste [Systemeinstellungen](../installation/manuelle-installation/systemeinstellungen.md) sind konfiguriert worden.

## Altes System außer Betrieb nehmen

Das alte System sollte bereits während des Umzugs nicht mehr produktiv verwendet werden:

1. In der i-doit Verwaltung die **i-doit address (URL)** leeren und auf dem neuen System wieder setzen.
2. Downtimes sind nervig, vor allem unerwartete. Die Benutzer von i-doit sollten vorab informiert worden sein, dass die Installation umzieht und in welchem Zeitraum sie nicht erreichbar ist.
3. [Automatisierte Zugriffe von Drittsystemen](../automatisierung-und-integration/index.md) sollten deaktiviert werden.
4. [Cronjobs](../automatisierung-und-integration/cli/index.md) sollten ebenfalls deaktiviert werden. Hierzu reicht es meist, die Befehlszeilen auszukommentieren.
5. Nach Sicherstellung der obigen Punkte sollte der Apache Webserver gestoppt werden:

    ```shell
    sudo systemctl stop apache2
    ```

## Umzug altes System

<div class="steps" markdown>

1. Zuerst wird der i-doit Ordner in eine Datei verpackt:

    === "ZIP"

    ```shell
    cd /var/www/html
    zip -rq /tmp/i-doit-migration.zip .
    ```

    === "TAR"
    <!-- cSpell:disable -->
    ```shell
    cd /var/www/html
    tar -czvf /tmp/i-doit-migration.tar.gz .
    ```
    <!-- cSpell:enable -->

2. Die Datenbanken in eine Datei speichern "dumpen" und mit gz packen:

    <!-- cSpell:disable -->
    ```shell
    mysqldump -hlocalhost -uroot -p --all-databases | gzip -9 > /tmp/idoit-backup.sql.gz
    ```
    <!-- cSpell:enable -->

3. Dann die Dateien und den Datenbank dump auf den neuen Host übertragen:

    === "ZIP"

    <!-- cSpell:disable -->
    ```shell
    scp /tmp/i-doit-migration.zip user@newsystem:/tmp/
    scp /tmp/idoit-backup.sql.gz user@newsystem:/tmp/
    ```

    === "TAR"

    ```shell
    scp /tmp/i-doit-migration.tar.gz user@newsystem:/tmp/
    scp /tmp/idoit-backup.sql.gz user@newsystem:/tmp/
    ```
    <!-- cSpell:enable -->

</div>

## Umzug neues System

<div class="steps" markdown>

1. Dateien entpacken und vorher im den html Ordner wechseln:

    === "ZIP"

    ```shell
    cd /var/www/html
    unzip /tmp/i-doit-migration.zip
    ```

    === "TAR"

    <!-- cSpell:disable -->
    ```shell
    cd /var/www/html
    tar -xzvf /tmp/i-doit-migration.tar.gz
    ```
    <!-- cSpell:enable -->

2. Datenbank importieren:

    <!-- cSpell:disable -->
    ```shell
    gunzip < /tmp/idoit-backup.sql.gz | mysql -hlocalhost -uroot -p
    ```
    <!-- cSpell:enable -->

3. Sollten die Dateisystem Rechte nicht mehr korrekt sein:

    ```shell
    cd /var/www/html
    sudo chown www-data:www-data -R .
    sudo find . -type d -name \* -exec chmod 775 {} \;
    sudo find . -type f -exec chmod 664 {} \;
    ```

4. Interne Caches speichert i-doit unterhalb des `temp/` Verzeichnisses. Die Inhalte sollten komplett entfernt werden. Bei der ersten Verwendung von i-doit werden die Caches automatisch erstellt:

    ```shell
    sudo rm -r temp/*
    ```

5. Es sollte kontrolliert werden, ob die Datei .htaccess kopiert wurde:

    ```shell
    ls -lha /var/www/html/.htaccess
    ```

</div>

## OPTIONAL: Andere Datenbank Passwörter verwenden

Wenn andere Passwörter für die Datenbank verwendet werden, sind folgende Schritte zusätzlich notwendig. In diesem Beispiel verwenden wir folgende Zugangsdaten:
<!-- cSpell:disable -->
| Benutzer           | Passwort    |
| ------------------ | ----------- |
| System DB Benutzer | `root`      |
| System DB Passwort | `root`      |
| i-doit DB Benutzer | `idoituser` |
| i-doit DB Passwort | `idoitpass` |
<!-- cSpell:enable -->
<div class="steps" markdown>

1. Um den Zugriff auf das [Admin-Center](../administration/admin-center.md) herstellen, muss die `config.inc.php` angepasst werden:

    ```shell
    nano /var/www/html/src/config.inc.php
    ```

2. Die Werte unter `$g_db_system` für `user` und `pass` anpassen und speichern.
3. In das Admin-Center, über die URL `http://idoiturl/admin`, einloggen und im Reiter **Tenants** den Mandant markieren und auf **Edit** klicken.
4. Bei den **MySQL settings** den neuen `Username` und das neue `Password` sowie `Retype password` eintragen und speichern.
5. Aus dem Admin-Center ausloggen und in i-doit einloggen.

</div>

## Nachbereitung

1. In das Admin-Center einloggen und die **Lizenzierung** und die **Encryption method** prüfen.
2. **DNS-Einträge**, **IP-Adressen**, **Hostnames** etc. sollten im Nachgang angepasst werden, damit i-doit wie gewohnt erreichbar ist.
3. **Schnittstellen** zu Drittsystemen können nun wieder aktiviert werden. Die Funktionen sollten geprüft werden.
4. **Cronjobs** sollten wieder aktiviert und getestet werden.
5. [**Backups**](../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md) sollten eingerichtet und getestet werden.
6. Wenn auch die WebGUI wie gewohnt reagiert und alle Daten in i-doit augenscheinlich vorhanden sind, ist der Umzug **erfolgreich** verlaufen.
7. Gängige [Sicherheitsmaßnahmen](../wartung-und-betrieb/sicherheit-und-schutz.md) durchführen.
