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
    Die unten genannten Systemvoraussetzungen beziehen sich auf die aktuelle Version von i-doit, in diesem Fall ==28== Zu jedem Release von i-doit werden diese Angaben angepasst. Wer die Angaben für ältere Versionen von i-doit benötigt, kann die Änderungshistorie dieser Seite verfolgen.

!!! attention "Einverständniserklärung"
    Mit dem Herunterladen eines Hotfixes erklären Sie, dass Sie die oben genannten Hinweise vollständig gelesen und verstanden haben

<!-- ## i-doit core -->

## API Add-on 1.15

### cmdb.reports.read attaches "&nbsp;&nbsp" to each value

[api_1.15_hotfix_API-458_7e2ae2e.zip :material-file-download:](../../assets/downloads/hotfixes/api/api_1.15_hotfix_API-458_7e2ae2e.zip){ .md-button .md-button--primary }

### When using cmdb.objects.read it should be possible to use 'categories' without an array

[api_1.15_hotfix_API-415.zip :material-file-download:](../../assets/downloads/hotfixes/api/api_1.15_hotfix_API-415.zip){ .md-button .md-button--primary }

### cmdb.objects.read gives empty/nameless object with error message as a result when reading objects with the category licenses

[api_1.15_hotfix_API-462.zip :material-file-download:](../../assets/downloads/hotfixes/api/api_1.15_hotfix_API-462.zip){ .md-button .md-button--primary }

## Analyze Add-on 1.3

### Service assignment is not displayed in data quality

[Analysis_1.3_hotfix_ANALYSE-76_aa07fc2.zip :material-file-download:](../../assets/downloads/hotfixes/analyze/Analysis_1.3_hotfix_ANALYSE-76_aa07fc2.zip){ .md-button .md-button--primary }

## Forms Add-on 1.2.0

### Object is not created when a attribute validation is used and no error is displayed

[forms_1.2.0_hotfix_AOF-38_69144fc.zip :material-file-download:](../../assets/downloads/hotfixes/forms/forms_1.2.0_hotfix_AOF-38_69144fc.zip){ .md-button .md-button--primary }

## Floorplan Add-on 1.6

### MySQL8 causes database error "incorrect DATETIME" when opening Floorplan AND Adding new Floorplan gives Error message and deletes existing objects added to floorplan

[floorplan_1.6_hotfix_FP-130_FP-131.zip :material-file-download:](../../assets/downloads/hotfixes/floorplan/floorplan_1.6_hotfix_FP-130_FP-131.zip){ .md-button .md-button--primary }
