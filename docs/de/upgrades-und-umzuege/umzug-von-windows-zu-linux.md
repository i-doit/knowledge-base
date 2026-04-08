---
title: Umzug von Windows zu Linux
description: "Dieser Artikel beschreibt, wie du deine i-doit-Installation von Windows nach GNU/Linux umziehst -- ohne lange Downtime und ohne Datenverlust."
icon: material/microsoft-windows
status:
lang: de
---

Dieser Artikel beschreibt, wie du deine i-doit-Installation von Windows nach GNU/Linux umziehst -- ohne lange Downtime und ohne Datenverlust.

## Vorbereitungen und Annahmen

!!! warning "Beide Systeme müssen auf der gleichen i-doit Version sein!"

Bevor du startest:

*   **Benutzer informieren** -- Klaere alle Kollegen rechtzeitig über den Umzug und die geplante Downtime auf.
*   **Schnittstellen identifizieren** -- Welche Drittsysteme ([Nagios](../i-doit-add-ons/nagios.md), [((OTRS)) Community Edition](../automatisierung-und-integration/service-desk/otrscommunity-help-desk.md), [weitere](../daten-konsolidieren/index.md)) greifen auf i-doit zu? Deaktiviere während des Umzugs den Datenzugriff, laufende [Tasks](../automatisierung-und-integration/cli/index.md), [Backups](../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md) und Monitoring.
*   **Windows-Seite** -- Dieses Beispiel geht von einem XAMPP-Setup ([Apache Friends](https://www.apachefriends.org/)) aus. Im Folgenden verwenden wir "MySQL" auch für MariaDB. Konfigurationsanpassungen solltest du auf dem neuen System übernehmen.
*   **Linux-Seite** -- Das neue System muss [vorbereitet](../installation/manuelle-installation/index.md) sein und alle [Systemvoraussetzungen](../installation/systemvoraussetzungen.md) sowie [-einstellungen](../installation/manuelle-installation/systemeinstellungen.md) erfuellen. DNS, SMTP und LDAP/AD müssen erreichbar sein.
*   **Zugangsdaten** -- Halte die Passwörter für den MySQL-Systembenutzer (`root`) und den i-doit-Benutzer (`idoit`) bereit.

## Daten aus Windows exportieren

1. **Apache stoppen** -- Schalte den Webserver ab, damit keine Requests eintreffen. MySQL läuft weiter.
2. **Dateien sichern** -- Komprimiere das i-doit-Verzeichnis (z. B. `C:\xampp\htdocs\`) als `i-doit.zip`.
3. **Datenbanken exportieren** -- Öffne die Eingabeaufforderung, wechsle nach `C:\xampp\mysql\bin\` und führe aus:

        mysqldump.exe -uidoit -p --databases idoit_system idoit_data > i-doit.sql

4. **MySQL stoppen** -- Beende den MySQL-Prozess.

## Daten nach GNU/Linux umziehen

Kopiere die ZIP-Datei und die SQL-Datei auf den neuen Server (z. B. per [WinSCP](http://winscp.net/eng/docs/lang:de)). Verbinde dich per SSH (z. B. [Putty](http://www.putty.org/)) und arbeite auf der Kommandozeile. Apache, MySQL und PHP sind bereits [installiert](../installation/index.md) und konfiguriert.

### Datenbank

1. Importiere die Datenbank:

        mysql -uroot -p < i-doit.sql

###### Wenn beim einspielen der Datenbank diese Fehlermeldung erscheint "Can't create table \idoit\_data\.\table\_name\ (errno: 140 "Wrong create options")". Ist die Lösung dazu [HIER](../administration/troubleshooting/cant-create-table.md) zu finden

2. Richte den i-doit-Benutzer ein:

        mysql -uroot -p

    Führe folgende SQL-Befehle aus:

        grant all privileges on idoit_system.* to idoit@localhost identified by 'mypasswd';
        grant all privileges on idoit_data.* to idoit@localhost identified by 'mypasswd';

    Teste die Verbindung mit den neuen Credentials:

        mysql -uidoit -p
        use idoit_system;

3. Prüfe die Mandanten-Credentials:

        select * from isys_mandator;

4. Prüfe auf absolute Windows-Pfade in der Datenbank (z. B. `system.dir.file-upload` und `system.dir.image-upload` in `isys_settings`):

        select * from isys_settings

    Relative Pfade wie upload/files/ und upload/images/ sind legitim.

5. Beende den MySQL-Client mit `STRG+D` oder `exit;`.

### Dateien

1. Entpacke die ZIP-Datei ins Zielverzeichnis (z. B. `/var/www/html/`):

        sudo unzip i-doit.zip

2. Setze die Rechte und räume auf:

        sudo chown www-data:www-data -R .
        sudo find . -type d -name \* -exec chmod 775 {} \;
        sudo find . -type f -exec chmod 664 {} \;
        sudo chmod 774 controller tenants import updatecheck *.sh
        sudo rm -r temp/*

    Lösche bei Bedarf Dateien, die noch aus der XAMPP-Installation stammen.

Teste nun, ob i-doit im Browser über die neue URL erreichbar ist. Falls nicht, analysiere die vorherigen Schritte auf Fehler.

### Cronjobs

Übertrage deine Windows-Tasks in Linux-Cronjobs. In der Regel geht es um wiederkehrende Aufgaben des [CLI](../automatisierung-und-integration/cli/index.md). Falls du bisher keine Tasks eingerichtet hattest, hole das jetzt nach.

### Nacharbeiten

1. Führe Tests durch und aktiviere die Schnittstellen zu Dritt-Tools wieder.
2. Stelle sicher, dass die [Backups](../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md) laufen.
3. Informiere alle Kollegen, dass die IT-Dokumentation wieder verfügbar ist.

Der eigentliche Umzug (ohne Vor- und Nachbereitung) dauert in der Regel nicht länger als zwei Stunden.
