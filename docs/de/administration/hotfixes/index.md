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
    Die unten genannten Systemvoraussetzungen beziehen sich auf die aktuelle Version von i-doit, in diesem Fall ==26== Zu jedem Release von i-doit werden diese Angaben angepasst. Wer die Angaben für ältere Versionen von i-doit benötigt, kann die Änderungshistorie dieser Seite verfolgen.

!!! attention "Einverständniserklärung"
    Mit dem Herunterladen eines Hotfixes erklären Sie, dass Sie die oben genannten Hinweise vollständig gelesen und verstanden haben

## i-doit core

### Disconnecting relation in custom category causes sql error

When you get the following error when disconnecting a relation to a custom category:

??? note "SQL Error:"
    ```log
    Database error : Query error: 'UPDATE isys_catg_relation_list SET isys_catg_relation_list__isys_obj__id__master = 222, isys_catg_relation_list__isys_obj__id__slave = NULL, isys_catg_relation_list__isys_obj__id__itservice = NULL, isys_catg_relation_list__isys_relation_type__id = 1, isys_catg_relation_list__status = 2, isys_catg_relation_list__description = '' WHERE isys_catg_relation_list__id = 799441;': Cannot add or update a child row: a foreign key constraint fails (`idoit_data`.`isys_catg_relation_list`, CONSTRAINT `isys_catg_relation_list_ibfk_2` FOREIGN KEY (`isys_catg_relation_list__isys_obj__id__slave`) REFERENCES `isys_obj` (`isys_obj__id`) ON DELET)"
    ```

[i-doit_26_hotfix_ID-9477.zip :material-file-download:](../../assets/downloads/hotfixes/26/i-doit_26_hotfix_ID-9477.zip){ .md-button .md-button--primary }

### It is not possible to retrieve the next online i-doit update via button check while updating i-doit

When you click on the **Check for a new version** button then version 27 is not displayed, when available.

[i-doit_26_hotfix_ID-9844.zip :material-file-download:](../../assets/downloads/hotfixes/26/i-doit_26_hotfix_ID-9844.zip){ .md-button .md-button--primary }

## API Add-on 1.14.1

### Operating system > Version cannot be referenced via title, if a second operating system has the same version title

This effects you when you get this API error message:
`i-doit system error: The specified version could not be assigned to this application"`

[api_1.14.1_hotfix_API-400_b1aec14.zip :material-file-download:](../../assets/downloads/hotfixes/api/api_1.14.1_hotfix_API-400_b1aec14.zip){ .md-button .md-button--primary }

### Using API after update to i-doit pro 25 displays license error message

Use this when you receive an error message like:

```text
i-doit responded with an error: i-doit system error: Achtung: das "Checkmk 2" Modul ist aktuell nicht lizenziert
```

[api_1.14.1_hotfix_API-429_fa3e703.zip :material-file-download:](../../assets/downloads/hotfixes/api/api_1.14.1_hotfix_API-429_fa3e703.zip){ .md-button .md-button--primary }

## Analyze Add-on 1.3

### Service assignment is not displayed in data quality

[Analysis_1.3_hotfix_ANALYSE-76_aa07fc2.zip :material-file-download:](../../assets/downloads/hotfixes/analyze/Analysis_1.3_hotfix_ANALYSE-76_aa07fc2.zip){ .md-button .md-button--primary }

## Forms Add-on 1.2.0

### Object is not created when a attribute validation is used and no error is displayed

[forms_1.2.0_hotfix_AOF-38_69144fc.zip :material-file-download:](../../assets/downloads/hotfixes/forms/forms_1.2.0_hotfix_AOF-38_69144fc.zip){ .md-button .md-button--primary }

## Floorplan Add-on 1.6

### MySQL8 causes database error "incorrect DATETIME" when opening Floorplan

[floorplan_1.6_hotfix_FP-130_ef65ed4.zip :material-file-download:](../../assets/downloads/hotfixes/floorplan/floorplan_1.6_hotfix_FP-130_ef65ed4.zip){ .md-button .md-button--primary }
