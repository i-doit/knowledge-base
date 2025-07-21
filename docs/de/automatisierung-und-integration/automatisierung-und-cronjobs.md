# Aufgabenplanung & Cron Jobs

## Aufgabenplanung unter Windows

In diesem Abschnitt zeigen wir Ihnen, wie Sie über die Aufgabenplanung unter Windows i-doit automatisieren können.

### Voraussetzung

In unserem Beispiel zur Aufgabenplanung für i-doit unter Windows benutzen wir eine i-doit Instanz, welche mit dem [i-doit Windows Installer](../installation/manuelle-installation/microsoft-windows-server/index.md) aufgesetzt wurde.

!!! warning "Falls Sie i-doit über XAMPP installiert haben, müssen Sie die Pfade in der Batch Datei für die console.php und php.exe anpassen."

### Erstellen einer Batch Datei

Um eine Batch Datei zu erstellen müssen Sie ein Editor Programm öffnen und eine neue Datei anlegen. Diese Speichern Sie anschließend als **"i-doit-jobs.bat"** ab.

[![batch-erstellen](../assets/images/de/automatisierung-und-integration/aufgabenplanung-und-cronjobs/1-auc.png)](../assets/images/de/automatisierung-und-integration/aufgabenplanung-und-cronjobs/1-auc.png)

Ist die Datei erstellt, können die Dateien mit Befehlen über das [i-doit console utility](../automatisierung-und-integration/cli/index.md) befüllen.

Die Batch Datei kann bspw. mit folgendem Inhalt befüllt werden:

```batch
@echo off

set IDOIT_USERNAME="admin"
set IDOIT_PASSWORD="admin"
set TENANT_ID="1"

:: Auszuführende Befehle
:: Logbook-Archive: Archiviert die Logbucheinträge mit einem definierten Alter, gemäß den Einstellungen auf der i-doit Oberfläche.
C:\ProgramData\i-doit\php\php.exe C:\ProgramData\i-doit\apache-2.4\htdocs\console.php logbook-archive --user %IDOIT_USERNAME% --password %IDOIT_PASSWORD% --tenantId %TENANT_ID%

:: Search-Index: Erneuert den Suchindex, indem dieser gelöscht und neu geschrieben wird.
C:\ProgramData\i-doit\php\php.exe C:\ProgramData\i-doit\apache-2.4\htdocs\console.php search-index --user %IDOIT_USERNAME% --password %IDOIT_PASSWORD% --tenantId %TENANT_ID%

:: Notifications-Send: Verschickt die auf der i-doit Oberfläche konfigurierten Benachrichtigungen
C:\ProgramData\i-doit\php\php.exe C:\ProgramData\i-doit\apache-2.4\htdocs\console.php notifications-send --user %IDOIT_USERNAME% --password %IDOIT_PASSWORD% --tenantId %TENANT_ID%
```

!!! info "Der Benutzername, das Passwort und die TenantID müssen eventuell angepasst werden"

### JDisc import und LDAP sync automatisieren

Wenn Sie den JDisc import oder den LDAP sync ebenfalls automatisieren möchten, können Sie die Befehle für den [JDisc import](../automatisierung-und-integration/cli/index.md) oder den [LDAP sync](../automatisierung-und-integration/cli/index.md) in der gleichen schreibweise wie die anderen Befehle aus dem obigen Beispiel, einfach in die Batch Datei einfügen.

### Einrichten der Aufgabenplanung

Damit die Batch Datei auch automatisch ausgeführt wird, muss ein **Aufgabenplan** erstellt werden.
Über die Windows Suche ist diese Funktion unter **Aufgabenplanung** zu finden.

Als erstes muss eine neue Aufgabe erstellt werden. Unter dem Tab "Aktionen" kann eine "Einfache Aufgabe" erstellt:

[![Einfache Aufgabe erstellen](../assets/images/de/automatisierung-und-integration/aufgabenplanung-und-cronjobs/2-auc.png)](../assets/images/de/automatisierung-und-integration/aufgabenplanung-und-cronjobs/2-auc.png)

Nachdem ein Name und falls nötig auch eine Beschreibung vergeben wurden, kann nun ein Trigger eingestellt werden.
Der Trigger gibt an, wann oder wodurch die Aufgabe ausgeführt werden soll.
Für dieses Beispiel setzen wir den Trigger auf **Täglich um 4:00 Uhr**.

[![Trigger einstellen](../assets/images/de/automatisierung-und-integration/aufgabenplanung-und-cronjobs/3-auc.png)](../assets/images/de/automatisierung-und-integration/aufgabenplanung-und-cronjobs/3-auc.png)

Als nächstes muss die Aktion, welche ausgeführt werden soll, ausgewählt werden. Da die Batch Datei ausgeführt werden soll, muss an dieser Stelle "Programm starten" ausgewählt werden.
Daraufhin kann die man die Batch Datei hinterlegen und mit der Konfiguration fortfahren.

[![Programm ausführen](../assets/images/de/automatisierung-und-integration/aufgabenplanung-und-cronjobs/4-auc.png)](../assets/images/de/automatisierung-und-integration/aufgabenplanung-und-cronjobs/4-auc.png)

Anschließend können noch einmal alle Angaben überprüft werden und dann kann die Konfiguration abgeschlossen werden.

Damit die Aufgabe auch korrekt ausgeführt wird, öffnen wir die Eigenschaften der eben erstellten Aufgabe und wählen auf der "Allgemein" Seite die Option "Unabhängig von der Benutzeranmeldung ausführen" aus.

[![Eigenschaften anpassen](../assets/images/de/automatisierung-und-integration/aufgabenplanung-und-cronjobs/5-auc.png)](../assets/images/de/automatisierung-und-integration/aufgabenplanung-und-cronjobs/5-auc.png)

Damit ist die Aufgabenplanung abgeschlossen.
Die erstellte Aufgabe wird jeden Tag um 4:00 Uhr die ausgewählte Batch Datei ausführen und die dort hinterlegten Befehle werden dann ebenfalls ausgeführt.
