# Hotfixes

## Über

Hotfixes beseitigen einen bestimmten Fehler und werden in der Regel als ZIP-Datei zur Verfügung gestellt. Die ZIP-Datei wird im Installationsverzeichnis von i-doit entpackt. Die Abfrage, ob Dateien beim Entpacken überschrieben werden sollen, kann bestätigt werden (Taste **Y** für "yes" oder **A** für "all"). Hier ein Beispiel:

```shell
sudo cp i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip /var/www/html/i-doit/
cd /var/www/html/i-doit/
sudo -u www-data unzip i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip
sudo rm i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip
```

!!! attention "Bitte beachten"
    Bitte nutzen Sie Hotfixes ausschließlich mit der genannten Version. In neueren Versionen werden diese bereits enthalten sein, sodass eine erneute Installation nicht notwendig ist.
    Sollten Sie eine ältere Version von i-doit nutzen, ist es notwendig, zuerst auf die aktuelle Version zu aktualisieren.<br>
    Falls ein Hotfix zur Ausführung des Updates einer älteren Version notwendig ist, ist dieser in den Unterkapiteln zu den Hotfixes hier in der Knowledge Base zu finden.<br>
    Da es sich hierbei um Hotfixes handelt, empfehlen wir, diese nur einzuspielen, wenn diese für den sauberen Betrieb Ihrer Installation notwendig sind oder Sie durch den Support zur Verwendung aufgefordert werden. Bitte stellen Sie sicher, dass vor der Verwendung dieser Hotfixes ein [Backup von i-doit](../../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md) erstellt wurde.<br>
    Sollten Sie nach der Verwendung der Hotfixes mit dem Support in Kontakt treten, ergänzen Sie bitte den Hinweis auf dessen Verwendung.

!!! info "Aktualität"
    Die unten genannten Systemvoraussetzungen beziehen sich auf die aktuelle Version von i-doit, in diesem Fall ==31== Zu jedem Release von i-doit werden diese Angaben angepasst. Wer die Angaben für ältere Versionen von i-doit benötigt, kann die Änderungshistorie dieser Seite verfolgen.

!!! attention "Einverständniserklärung"
    Mit dem Herunterladen eines Hotfixes erklären Sie, dass Sie die oben genannten Hinweise vollständig gelesen und verstanden haben

## i-doit core

### Counter skips a number when duplicating objects (ID-10763)

[i-doit_31_hotfix_ID-10763.zip :material-file-download:](../../assets/downloads/hotfixes/31/i-doit_31_hotfix_ID-10763.zip){ .md-button .md-button--primary }

### List editing Ports does not select Default VLAN (ID-10762)

[i-doit_31_hotfix_ID-10762.zip :material-file-download:](../../assets/downloads/hotfixes/31/i-doit_31_hotfix_ID-10762.zip){ .md-button .md-button--primary }

### Exporting a object list via csv has no results (ID-10798)

[i-doit_31_hotfix_ID-10798.zip :material-file-download:](../../assets/downloads/hotfixes/31/i-doit_31_hotfix_ID-10798.zip){ .md-button .md-button--primary }

## API

### API is using report query from db instead of creating the query new which leads to wrong results (API-496)

[api_2.0_hotfix_API-496.zip :material-file-download:](../../assets/downloads/hotfixes/api/api_2.0_hotfix_API-496.zip){ .md-button .md-button--primary } [api_1.16_hotfix_API-496.zip :material-file-download:](../../assets/downloads/hotfixes/api/api_1.16_hotfix_API-496.zip){ .md-button .md-button--primary }

### No categories in the result when using cmdb.objects.read with key categories (API-505)

[api_2.0_hotfix_API-505_d05e977.zip :material-file-download:](../../assets/downloads/hotfixes/api/api_2.0_hotfix_API-505_d05e977.zip){ .md-button .md-button--primary }

### Too many connections when using batch requests (API-509)

[api_2.0_hotfix_API-509.zip :material-file-download:](../../assets/downloads/hotfixes/api/api_2.0_hotfix_API-509.zip){ .md-button .md-button--primary }

## Forms Add-on 1.2.0

### Object is not created when a attribute validation is used and no error is displayed

[forms_1.2.0_hotfix_AOF-38_69144fc.zip :material-file-download:](../../assets/downloads/hotfixes/forms/forms_1.2.0_hotfix_AOF-38_69144fc.zip){ .md-button .md-button--primary }

## Workflow Add-on 1.2

### Workflow Add-on User Permissions are not available

[workflow_1.2_workflow-51_b54b344.zip :material-file-download:](../../assets/downloads/hotfixes/workflow/workflow_1.2_workflow-51_b54b344.zip){ .md-button .md-button--primary }
