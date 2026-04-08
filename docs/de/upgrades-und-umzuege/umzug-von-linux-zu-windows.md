---
title: Umzug von Linux zu Windows
description: "Dieser Artikel beschreibt, wie du deine i-doit-Installation von Linux auf einen Windows Server migrierst."
icon: fontawesome/brands/linux
status:
lang: de
---

# Umzug von Linux zu Windows

Dieser Artikel beschreibt, wie du deine i-doit-Installation von Linux auf einen Windows Server migrierst. Voraussetzung: Der Windows Server wurde mit dem [i-doit Windows Installer](../installation/manuelle-installation/microsoft-windows-server/index.md) eingerichtet.

## Vorbereitungen und Annahmen

!!! warning "Beide Systeme müssen auf der gleichen i-doit Version sein!"

Bevor du startest:

*   **Benutzer informieren** -- Klaere alle Kollegen rechtzeitig über den Umzug und die geplante Downtime auf.
*   **Schnittstellen identifizieren** -- Welche Drittsysteme ([Nagios](../i-doit-add-ons/nagios.md), [((OTRS)) Community Edition](../automatisierung-und-integration/service-desk/otrscommunity-help-desk.md), [weitere](../daten-konsolidieren/index.md)) greifen auf i-doit zu? Deaktiviere während des Umzugs den Datenzugriff, laufende [Tasks](../automatisierung-und-integration/cli/index.md), [Backups](../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md) und Monitoring.
*   **Windows-Seite** -- Apache, PHP und MariaDB sind durch den Windows Installer bereits konfiguriert. Im Folgenden verwenden wir "MySQL" auch für MariaDB. Übernimm ggf. Linux-Konfigurationsanpassungen auf das neue System.
*   **Dienste prüfen** -- DNS, SMTP und LDAP/AD müssen auf dem neuen System erreichbar sein.
*   **Zugangsdaten** -- Halte die Passwörter für den MySQL-Systembenutzer (`root`) und den i-doit-Benutzer (`idoit`) bereit.

## Verzeichnis aus Linux exportieren

Packe das i-doit-Verzeichnis in ein Archiv:

```shell
sudo zip -r i-doit.zip /var/www/html/
```

Passe den Pfad an deine Installation an. Transferiere die ZIP-Datei auf den Windows Server, z. B. per `scp` (Befehl auf dem Windows Server ausführen):

```shell
scp -r user@linuxsystem:/var/www/html/i-doit.zip C:\
```

## Datenbank aus Linux exportieren

!!! warning "Bei folgenden MariaDB-Versionen führt der SQL-Dump zu einem Import-Fehler unter Windows:"
    - 10.5.25
    - 10.6.18
    - 10.11.8
    - 11.0.6
    - 11.1.5
    - 11.2.4
    - 11.4.2

    Die aufgelisteten Versionen setzen bei einem SQL Dump ein "Sandbox command" in die erste Zeile des Dumps.
    Dadurch kann dieser Dump dann nur noch mit den gelisteten MariaDB Versionen importiert werden, da die mitgelieferte MariaDB Version vom Windows installer keine der gelisteten Versionen ist, wird man beim Import auf den Fehler **`ERROR at line 1: Unknown command '\-'`** stoßen.
    Wir empfehlen daher für den Dump eine andere MariaDB Version zu nutzen, welche nicht oben aufgelistet ist!

Exportiere die Datenbanken und transferiere sie auf den Windows Server:

```shell
mysqldump -uroot -p idoit_system > /tmp/idoit_system.sql
mysqldump -uroot -p idoit_data > /tmp/idoit_data.sql
```

Transferiere die SQL-Dateien:

```shell
scp -r user@linuxsystem:/tmp/idoit_system.sql C:\
scp -r user@linuxsystem:/tmp/idoit_data.sql C:\
```

Die SQL-Dateien liegen nun unter `C:\`.

## MariaDB-Pfad in Windows setzen

Damit du MySQL-Befehle direkt in der Eingabeaufforderung ausführen kannst, trage den MariaDB-Pfad in die Umgebungsvariablen ein:

1. Suche über die Windows-Suche nach "Erweiterte Systemeinstellungen" und klicke auf **"Umgebungsvariablen..."**.

[![Umgebungsvariablen](../assets/images/de/upgrades-und-umzuege/umzug-von-linux-zu-windows/1-uvlzw.png)](../assets/images/de/upgrades-und-umzuege/umzug-von-linux-zu-windows/1-uvlzw.png)

2. Wähle im neuen Fenster die Variable **"Path"** unter den Systemvariablen aus und klicke auf **"Bearbeiten"**:

[![Umgebungsvariablen](../assets/images/de/upgrades-und-umzuege/umzug-von-linux-zu-windows/2-uvlzw.png)](../assets/images/de/upgrades-und-umzuege/umzug-von-linux-zu-windows/2-uvlzw.png)

3. Erstelle einen neuen Eintrag mit dem Pfad zum **bin**-Ordner von MariaDB: **C:\ProgramData\MariaDB\bin**.

[![Umgebungsvariablen](../assets/images/de/upgrades-und-umzuege/umzug-von-linux-zu-windows/3-uvlzw.png)](../assets/images/de/upgrades-und-umzuege/umzug-von-linux-zu-windows/3-uvlzw.png)

Nach dem Setzen des Pfads kannst du SQL-Befehle in der Eingabeaufforderung nutzen. Starte das Fenster ggf. neu.

## Daten nach Windows umziehen

Entpacke die ZIP-Datei in folgendes Verzeichnis und überschreibe alle Dateien:

```shell
C:\ProgramData\i-doit\apache-2.4\htdocs
```

Spiele anschließend die Datenbank ein. Lösche zuerst die bestehenden Datenbanken auf dem Windows Server:

!!! info "Die SQL Befehle können über den MySQL Client (über die Windowssuche zu finden) ausgeführt werden"

```shell
DROP Database idoit_data;
DROP Database idoit_system;
```

Erstelle die Datenbanken neu:

```shell
CREATE DATABASE idoit_data;
CREATE DATABASE idoit_system;
```

Importiere die Datenbanken aus der alten Instanz:

!!! info "Hierzu wechseln wir auf die normale Eingabeaufforderung von Windows"

```shell
mysql -uroot -p idoit_data < C:\idoit_data.sql
mysql -uroot -p idoit_system < C:\idoit_system.sql
```

!!! danger "Wenn der Fehler **`ERROR at line 1: Unknown command '\-'`** auftritt:"
    Wenn der obige Fehler auftritt, hast du den SQL Dump mit einer MariaDB Version durchgeführt, welche ein "Sandbox Command" in die erste Zeile des Dumps schreibt.
    Diese Zeile kann nur von bestimmten MariaDB Versionen interpretiert werden, was auf die mitgelieferte MariaDB Version des Windows installers nicht zutrifft (Siehe [Liste](#datenbank-aus-linux-exportieren)).
    Die Fehler-verursachende Zeile ist `/*!999999\- enable the sandbox mode */`, diese muss entweder manuell aus dem Dump entfernt werden oder du wechseln auf eine andere MariaDB Version und führen den Dump erneut durch.

Berechtige den `idoit`-Benutzer für die neuen Datenbanken:

```shell
grant all privileges on idoit_system.* to idoit@localhost identified by 'mypasswd';
grant all privileges on idoit_data.* to idoit@localhost identified by 'mypasswd';
```

Die Instanz ist nun erfolgreich von Linux auf Windows migriert.

### Nacharbeiten

1. Führe Tests durch und aktiviere die Schnittstellen zu Dritt-Tools wieder.
2. Stelle sicher, dass die [Backups](../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md) laufen.
3. Informiere alle Kollegen, dass die IT-Dokumentation wieder verfügbar ist.

Der eigentliche Umzug (ohne Vor- und Nachbereitung) dauert in der Regel nicht länger als zwei Stunden.
