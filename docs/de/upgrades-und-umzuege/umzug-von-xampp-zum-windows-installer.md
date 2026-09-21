---
title: Umzug von XAMPP zum i-doit Windows Installer
description: "Dieser Artikel beschreibt, wie du eine i-doit-Installation, die unter XAMPP auf Windows läuft, auf einen mit dem i-doit Windows Installer eingerichteten Windows Server umziehst."
icon: material/microsoft-windows
status:
lang: de
---

# Umzug von XAMPP zum i-doit Windows Installer

Dieser Artikel beschreibt, wie du eine i-doit-Installation, die unter [XAMPP](../installation/manuelle-installation/microsoft-windows-server/idoit-via-XAMPP.md) auf Windows läuft, auf einen mit dem [i-doit Windows Installer](../installation/manuelle-installation/microsoft-windows-server/index.md) eingerichteten Windows Server umziehst.
Das Vorgehen entspricht dem [Umzug von Linux zu Windows](umzug-von-linux-zu-windows.md): Das i-doit-Verzeichnis und die beiden Datenbanken werden aus dem alten System exportiert und auf dem neuen importiert.
Der Windows Installer ersetzt den XAMPP-Stack, sodass du Apache, PHP und MariaDB nicht mehr selbst pflegen musst.

## Vorbereitungen und Annahmen

!!! warning "Beide Systeme müssen auf der gleichen i-doit Version sein!"
    Der Windows Installer installiert immer die aktuelle i-doit Version.
    Aktualisiere deine XAMPP-Installation daher zuerst auf diese Version, siehe [Update Anleitung](update-anleitung.md).
    Beachte dabei die [Systemvoraussetzungen](../installation/systemvoraussetzungen.md) der Zielversion, insbesondere die PHP-Version deines XAMPP-Pakets.

Bevor du startest:

*   **Backup erstellen**: Erstelle ein [Backup](../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md) oder einen Snapshot des XAMPP-Systems.
*   **Benutzer informieren**: Kläre alle Kollegen rechtzeitig über den Umzug und die geplante Downtime auf.
*   **Schnittstellen identifizieren**: Welche Drittsysteme ([Nagios](../i-doit-add-ons/nagios.md), [((OTRS)) Community Edition](../automatisierung-und-integration/service-desk/otrscommunity-help-desk.md), [weitere](../daten-konsolidieren/index.md)) greifen auf i-doit zu? Deaktiviere während des Umzugs den Datenzugriff, laufende [Tasks](../automatisierung-und-integration/cli/index.md), [Backups](../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md) und Monitoring.
*   **Zielsystem**: Wir empfehlen einen neuen Windows Server, auf dem der Windows Installer bereits ausgeführt wurde. Apache, PHP und MariaDB sind dann schon konfiguriert. Möchtest du den XAMPP-Server weiterverwenden, muss XAMPP vollständig gestoppt sein und darf nicht automatisch starten, bevor du den Windows Installer ausführst, denn XAMPP und der Windows Installer nutzen beide Port 80 für Apache und Port 3306 für MariaDB.
*   **Pfade und URL**: Unter XAMPP liegt i-doit üblicherweise in `C:\xampp\htdocs\idoit` und ist über `http://<server>/idoit/` erreichbar. Der Windows Installer legt i-doit direkt im Document Root `C:\ProgramData\i-doit\apache-2.4\htdocs` ab, die neue URL lautet also `http://<server>/`. Lesezeichen, API-Clients und Konnektoren müssen entsprechend angepasst werden.
*   **Zugangsdaten**: Halte das Passwort des MySQL-Systembenutzers (`root`) deiner XAMPP-Installation bereit. Der Datenbankbenutzer (üblicherweise `idoit`), sein Passwort und der Name der Systemdatenbank stehen in der Datei `src\config.inc.php` deines i-doit-Verzeichnisses (`$g_db_system`). Der Name der Mandanten-Datenbank steht in der Tabelle `isys_mandator` der Systemdatenbank. In diesem Artikel verwenden wir `idoit_system` und `idoit_data`, passe die Namen an deine Installation an. Im Folgenden verwenden wir "MySQL" auch für MariaDB.

## Daten aus XAMPP exportieren

1. **Apache stoppen**: Stoppe das Apache-Modul im XAMPP Control Panel, damit keine Anfragen mehr eintreffen. MySQL läuft weiter.
2. **Dateien sichern**: Komprimiere das i-doit-Verzeichnis `C:\xampp\htdocs\idoit` als `C:\i-doit.zip`, z. B. über das Kontextmenü **Senden an > ZIP-komprimierter Ordner**.
3. **Datenbanken exportieren**: Öffne die Eingabeaufforderung, wechsle nach `C:\xampp\mysql\bin\` und führe aus:

        mysqldump.exe -uroot -p idoit_system > C:\idoit_system.sql
        mysqldump.exe -uroot -p idoit_data > C:\idoit_data.sql

4. **MySQL stoppen**: Stoppe das MySQL-Modul im XAMPP Control Panel.
5. **Dateien übertragen**: Kopiere `C:\i-doit.zip`, `C:\idoit_system.sql` und `C:\idoit_data.sql` nach `C:\` auf den neuen Windows Server, z. B. über eine Netzwerkfreigabe oder Remotedesktop.

!!! info "Erste Zeile des Dumps prüfen"
    Einige MariaDB-Versionen schreiben die Zeile `/*!999999\- enable the sandbox mode */` in die erste Zeile eines Dumps, die die im Windows Installer enthaltene MariaDB nicht importieren kann (siehe [Liste der betroffenen Versionen](umzug-von-linux-zu-windows.md#datenbank-aus-linux-exportieren)).
    Die in den aktuellen XAMPP-Paketen enthaltene MariaDB 10.4 ist nicht betroffen.
    Beginnt dein Dump mit dieser Zeile, lösche sie vor dem Import in einem Editor.

## Daten auf dem Windows-Installer-System importieren

Alle Befehle werden in der Eingabeaufforderung des neuen Windows Servers ausgeführt (++windows+r++ drücken, `cmd` eingeben und Enter drücken).
Der Windows Installer verwendet folgende [Zugangsdaten](../installation/manuelle-installation/microsoft-windows-server/index.md#credentials): MariaDB `root` mit dem Passwort `idoit`.

### Apache stoppen

```batch
C:\ProgramData\i-doit\apache-2.4\bin\httpd.exe -k stop
```

### Dateien

Entpacke `C:\i-doit.zip` in das Verzeichnis `C:\ProgramData\i-doit\apache-2.4\htdocs` und überschreibe alle vorhandenen Dateien.
Achte darauf, dass der Inhalt des Ordners `idoit` direkt in `htdocs` landet, also `C:\ProgramData\i-doit\apache-2.4\htdocs\index.php` existiert und nicht `C:\ProgramData\i-doit\apache-2.4\htdocs\idoit\index.php`.
Lösche anschließend den Inhalt des Ordners `C:\ProgramData\i-doit\apache-2.4\htdocs\temp\`, der nur zwischengespeicherte Dateien enthält.

### Datenbank

Melde dich am MySQL-Client an:

```batch
C:\ProgramData\MariaDB\bin\mysql.exe -uroot -p
```

Lösche die vom Windows Installer angelegten Datenbanken und erstelle sie neu:

```sql
DROP DATABASE idoit_data;
DROP DATABASE idoit_system;
CREATE DATABASE idoit_data;
CREATE DATABASE idoit_system;
```

Berechtige den Datenbankbenutzer aus `src\config.inc.php` für die neuen Datenbanken. Ersetze `mypasswd` durch das Passwort aus `src\config.inc.php`:

```sql
GRANT ALL PRIVILEGES ON idoit_system.* TO idoit@localhost IDENTIFIED BY 'mypasswd';
GRANT ALL PRIVILEGES ON idoit_data.* TO idoit@localhost IDENTIFIED BY 'mypasswd';
```

Verlasse den MySQL-Client mit `exit;` und importiere die Dumps aus der XAMPP-Installation:

```batch
C:\ProgramData\MariaDB\bin\mysql.exe -uroot -p idoit_system < C:\idoit_system.sql
C:\ProgramData\MariaDB\bin\mysql.exe -uroot -p idoit_data < C:\idoit_data.sql
```

!!! danger "Wenn der Fehler **`ERROR at line 1: Unknown command '\-'`** auftritt:"
    Der Dump beginnt mit der oben beschriebenen Sandbox-Zeile.
    Entferne die erste Zeile `/*!999999\- enable the sandbox mode */` aus der SQL-Datei und wiederhole den Import.

Prüfe abschließend, ob in den Einstellungen noch absolute Pfade der XAMPP-Installation stehen, z. B. für die Upload-Verzeichnisse:

```sql
SELECT isys_settings__key, isys_settings__value FROM idoit_system.isys_settings WHERE isys_settings__value LIKE '%xampp%';
SELECT isys_settings__key, isys_settings__value FROM idoit_data.isys_settings WHERE isys_settings__value LIKE '%xampp%';
```

Relative Pfade wie `upload/files/` und `upload/images/` sind in Ordnung. Passe absolute Pfade auf das neue Verzeichnis `C:\ProgramData\i-doit\apache-2.4\htdocs\` an.

### Konfiguration

Hast du unter XAMPP die `php.ini` oder `my.ini` angepasst, übernimm die Einstellungen, die du weiterhin benötigst, in die [Konfigurationsdateien](../installation/manuelle-installation/microsoft-windows-server/index.md#konfiguration) des Windows Installers.
Kopiere die XAMPP-Dateien nicht komplett, denn die darin enthaltenen Pfade verweisen auf `C:\xampp`.

### Apache starten

```batch
C:\ProgramData\i-doit\apache-2.4\bin\httpd.exe -k start
```

Öffne `http://localhost/` auf dem neuen Server und melde dich an. Die Instanz ist nun von XAMPP auf den Windows Installer umgezogen.

## Nacharbeiten

1. **Geplante Aufgaben**: Passe Aufgaben in der Windows-Aufgabenplanung an, die `console.php` aufrufen (z. B. LDAP-Synchronisierung, Benachrichtigungen). Sie müssen `C:\ProgramData\i-doit\php\php.exe` und das neue i-doit-Verzeichnis statt `C:\xampp\php\php.exe` und `C:\xampp\htdocs\idoit` verwenden.
2. **URL**: Informiere die Benutzer über die neue URL ohne `/idoit/` und passe API-Clients und Konnektoren an.
3. **HTTPS**: War die XAMPP-Installation per HTTPS erreichbar, richte [HTTPS](../installation/manuelle-installation/microsoft-windows-server/index.md#https-einrichten-optional) auch für den Windows Installer ein.
4. **Virenscanner**: Lege die [Ausnahmen](../installation/manuelle-installation/microsoft-windows-server/index.md#verbessertes-laden-der-website) für die neuen i-doit-Verzeichnisse an.
5. Führe Tests durch und aktiviere die Schnittstellen zu Dritt-Tools wieder.
6. Stelle sicher, dass die [Backups](../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md) auf die neuen Verzeichnisse zeigen und laufen.
7. Läuft alles, deinstalliere XAMPP oder baue den alten Server ab.

Der eigentliche Umzug (ohne Vor- und Nachbereitung) dauert in der Regel nicht länger als zwei Stunden.

## Weiterführende Artikel

*   [Microsoft Windows Server](../installation/manuelle-installation/microsoft-windows-server/index.md): Installation, Konfigurationsdateien und Zugangsdaten des Windows Installers
*   [Umzug von Linux zu Windows](umzug-von-linux-zu-windows.md): das gleiche Vorgehen mit einem Linux-System als Quelle
*   [Update PHP und MariaDB für Windows](update-php-und-mariadb-fuer-windows.md): den Stack des Windows Installers aktuell halten
