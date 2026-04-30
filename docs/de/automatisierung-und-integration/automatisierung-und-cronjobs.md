---
title: "Aufgabenplanung & Cron Jobs"
description: "Über die Windows-Aufgabenplanung automatisierst du wiederkehrende i-doit-Aufgaben wie Logbuch-Archivierung, Suchindex-Aktualisierung oder..."
icon:
status:
lang: de
---
# Aufgabenplanung & Cron Jobs

## Aufgabenplanung unter Windows

Über die Windows-Aufgabenplanung automatisierst du wiederkehrende i-doit-Aufgaben wie Logbuch-Archivierung, Suchindex-Aktualisierung oder Benachrichtigungsversand.

### Voraussetzung

Dieses Beispiel setzt eine i-doit-Instanz voraus, die mit dem [i-doit Windows Installer](../installation/manuelle-installation/microsoft-windows-server/index.md) eingerichtet wurde.

!!! warning "Falls du i-doit über XAMPP installiert hast, passe die Pfade für `console.php` und `php.exe` in der Batch-Datei an."

### Batch-Datei erstellen

1. Öffne einen Texteditor und lege eine neue Datei an.
2. Speichere sie als **"i-doit-jobs.bat"** ab.

[![batch-erstellen](../assets/images/de/automatisierung-und-integration/aufgabenplanung-und-cronjobs/1-auc.png)](../assets/images/de/automatisierung-und-integration/aufgabenplanung-und-cronjobs/1-auc.png)

Befuelle die Datei mit Befehlen des [i-doit console utility](../automatisierung-und-integration/cli/index.md). Beispielinhalt:

```batch
@echo off

set IDOIT_USERNAME="admin"
set IDOIT_PASSWORD="admin"
set TENANT_ID="1"

:: Auszuführende Befehle
:: Logbook:Archive: Archiviert die Logbucheinträge mit einem definierten Alter, gemäß den Einstellungen auf der i-doit Oberfläche.
C:\ProgramData\i-doit\php\php.exe C:\ProgramData\i-doit\apache-2.4\htdocs\console.php logbook:archive --user %IDOIT_USERNAME% --password %IDOIT_PASSWORD% --tenantId %TENANT_ID%

:: Search-Index: Erneuert den Suchindex, indem dieser gelöscht und neu geschrieben wird.
C:\ProgramData\i-doit\php\php.exe C:\ProgramData\i-doit\apache-2.4\htdocs\console.php search-index --user %IDOIT_USERNAME% --password %IDOIT_PASSWORD% --tenantId %TENANT_ID%

:: Notifications-Send: Verschickt die auf der i-doit Oberfläche konfigurierten Benachrichtigungen
C:\ProgramData\i-doit\php\php.exe C:\ProgramData\i-doit\apache-2.4\htdocs\console.php notifications-send --user %IDOIT_USERNAME% --password %IDOIT_PASSWORD% --tenantId %TENANT_ID%
```

!!! info "Der Benutzername, das Passwort und die TenantID müssen eventuell angepasst werden"

### JDisc-Import und LDAP-Sync automatisieren

Möchtest du den [JDisc-Import](../automatisierung-und-integration/cli/index.md) oder [LDAP-Sync](../automatisierung-und-integration/cli/index.md) ebenfalls automatisieren, fuege die entsprechenden Befehle in derselben Schreibweise in die Batch-Datei ein.

### Aufgabenplanung einrichten

Damit die Batch-Datei automatisch läuft, erstellst du einen **Aufgabenplan**:

1. Öffne die **Aufgabenplanung** über die Windows-Suche.
2. Erstelle unter dem Tab "Aktionen" eine "Einfache Aufgabe":

[![Einfache Aufgabe erstellen](../assets/images/de/automatisierung-und-integration/aufgabenplanung-und-cronjobs/2-auc.png)](../assets/images/de/automatisierung-und-integration/aufgabenplanung-und-cronjobs/2-auc.png)

3. Vergib einen Namen und optional eine Beschreibung.
4. Stelle den Trigger ein -- er bestimmt, wann die Aufgabe läuft. In diesem Beispiel: **Täglich um 4:00 Uhr**.

[![Trigger einstellen](../assets/images/de/automatisierung-und-integration/aufgabenplanung-und-cronjobs/3-auc.png)](../assets/images/de/automatisierung-und-integration/aufgabenplanung-und-cronjobs/3-auc.png)

5. Wähle als Aktion **"Programm starten"** und hinterlege die Batch-Datei.

[![Programm ausführen](../assets/images/de/automatisierung-und-integration/aufgabenplanung-und-cronjobs/4-auc.png)](../assets/images/de/automatisierung-und-integration/aufgabenplanung-und-cronjobs/4-auc.png)

6. Überprüfe deine Angaben und schließe die Konfiguration ab.
7. Öffne die Eigenschaften der erstellten Aufgabe und wähle auf der Seite "Allgemein" die Option **"Unabhängig von der Benutzeranmeldung ausführen"**.

[![Eigenschaften anpassen](../assets/images/de/automatisierung-und-integration/aufgabenplanung-und-cronjobs/5-auc.png)](../assets/images/de/automatisierung-und-integration/aufgabenplanung-und-cronjobs/5-auc.png)

Die Aufgabenplanung ist damit abgeschlossen. Die Aufgabe führt täglich um 4:00 Uhr die Batch-Datei mit allen hinterlegten Befehlen aus.
