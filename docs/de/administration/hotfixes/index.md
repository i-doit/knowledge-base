# Hotfixes

!!! success "Hotfixes für Version **31**"

Ein Hotfix beseitigt einen bestimmten Fehler und werden in der Regel als ZIP-Datei zur Verfügung gestellt. Die ZIP-Datei wird im **Installationsverzeichnis** von i-doit entpackt. Die Abfrage, ob Dateien beim Entpacken überschrieben werden sollen, muss bestätigt werden.

Falls ein Hotfix zur Ausführung des Updates einer älteren Version notwendig ist, ist dieser im [Hotfix Archiv](hotfix-archiv/index.md) zu finden.

Da es sich hierbei um Hotfixes handelt, empfehlen wir, diese nur einzuspielen, wenn diese für den sauberen Betrieb Ihrer Installation notwendig sind oder Sie durch den Support zur Verwendung aufgefordert werden. Bitte stellen Sie sicher, dass vor der Verwendung dieser Hotfixes ein [Backup von i-doit](../../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md) erstellt wurde.

Sollten Sie nach der Verwendung der Hotfixes mit dem Support in Kontakt treten, ergänzen Sie bitte den Hinweis auf dessen Verwendung.

!!! warning "**Einverständniserklärung**"
    Mit dem Herunterladen eines Hotfixes erklären Sie, dass Sie die oben genannten Hinweise vollständig gelesen und verstanden haben.

## Anwendung bei GNU/Linux

```sh
sudo cp i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip /var/www/html/i-doit/
cd /var/www/html/i-doit/
sudo -u www-data unzip i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip
sudo rm i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip
```

## Anwendung bei Windows

[![Entpacken](../../assets/images/de/administration/hotfixes/example-windows-zip.png)](../../assets/images/de/administration/hotfixes/example-windows-zip.png)

Pfad für den **i-doit Windows installer**:

```txt
C:\ProgramData\i-doit\apache-2.4\htdocs
```

Pfad für den **i-doit Discovery installer**:

```txt
C:\ProgramData\i-doit-discovery\apache-2.4\htdocs
```

## i-doit core

### Custom category is incorrectly marked as empty or filled (ID-10905)

[i-doit_31_hotfix_ID-10905_aab04c5.zip :material-file-download:](../../assets/downloads/hotfixes/31/i-doit_31_hotfix_ID-10905_aab04c5.zip){ .md-button .md-button--primary }

### End of Period in Category Contract > Contract is not calculated (ID-10891)

[i-doit_31_hotfix_ID-10891_f6b4624.zip :material-file-download:](../../assets/downloads/hotfixes/31/i-doit_31_hotfix_ID-10891_f6b4624.zip){ .md-button .md-button--primary }

### JDisc updates archived objects (ID-10889)

[i-doit_31_hotfix_ID-10889.zip_b9ee2aa.zip :material-file-download:](../../assets/downloads/hotfixes/31/i-doit_31_hotfix_ID-10889.zip){ .md-button .md-button--primary }
<!---- for i-doit 32 release
[i-doit_32_hotfix_ID-10889.zip_b9ee2aa.zip :material-file-download:](../../assets/downloads/hotfixes/32/i-doit_32_hotfix_ID-10889.zip){ .md-button .md-button--primary }
-->

### Creating a new connection at category Network listener does not create a new connection (ID-10884)

[i-doit_31_hotfix_ID-10884_ddb80db.zip :material-file-download:](../../assets/downloads/hotfixes/31/i-doit_31_hotfix_ID-10884_ddb80db.zip){ .md-button .md-button--primary }

### Altering data in Network > Port entry which has a Interface assigned are not saved (ID-10853) **UPDATED 20.06.**

[i-doit_31_hotfix_ID-10853v2_b9ee2aa.zip :material-file-download:](../../assets/downloads/hotfixes/31/i-doit_31_hotfix_ID-10853v2_b9ee2aa.zip){ .md-button .md-button--primary }

??? info "Error message found in the Webserver logs"
    AH01071: Got error 'PHP message: PHP Fatal error:  Uncaught TypeError: Illegal offset type in /var/www/html/src/classes/modules/cmdb/src/Component/CategoryChanges/Type/DialogDataType.php:103\nStack trace:\n#0 /var/www/html/src/classes/modules/cmdb/src/Component/CategoryChanges/Type/DialogDataType.php(155): idoit\\Module\\Cmdb\\Component\\CategoryChanges\\Type\\DialogDataType->dataHandlerHelper()\n#1 /var/www/html/src/classes/modules/cmdb/src/Component/CategoryChanges/Builder/ChangesBuilder.php(137): idoit\\Module\\Cmdb\\Component\\CategoryChanges\\Type\\DialogDataType->handleData()\n#2 /var/www/html/src/classes/modules/cmdb/src/Component/CategoryChanges/Builder/ChangesBuilder.php(54): idoit\\Module\\Cmdb\\Component\\CategoryChanges\\Builder\\ChangesBuilder->processWithArrayData()\n#3 /var/www/html/src/classes/modules/cmdb/src/Component/CategoryChanges/Changes.php(123): idoit\\Module\\Cmdb\\Component\\CategoryChanges\\Builder\\ChangesBuilder->process()\n#4 /var/www/html/...'

### HTTP 500 error when creating a document or a revision (ID-10831) **UPDATED 26.06.**

Use this Hotfix and update i-doit pro Add-on Documents to 1.8.

??? info "Error message found in the Webserver logs"
    ```log
    Got error 'PHP message: PHP Fatal error:  Uncaught TypeError: isys_cmdb_dao_category_property::getConstantFromRange(): Argument #1 ($constant) must be of type string, null given
    ```

[i-doit_31_hotfix_ID-10831v2.zip :material-file-download:](../../assets/downloads/hotfixes/31/i-doit_31_hotfix_ID-10831v2.zip){ .md-button .md-button--primary }

### Migration error when updating (ID-10808)

Is used for doing the update from 29 or 30 to 31. Unzip File and do the Update.
Do **not** download the update package again, this would override the Hotfix.

??? info "Error message found in the Webserver logs"
    ```log
    Fatal error: Uncaught TypeError: getDefaultConfiguration(): Argument #1 ($className) must be of type string, null given, called in
    ```

[i-doit_29-30_hotfix_ID-10808.zip :material-file-download:](../../assets/downloads/hotfixes/29/i-doit_29-30_hotfix_ID-10808.zip){ .md-button .md-button--primary }
[i-doit_30-31_hotfix_ID-10808.zip :material-file-download:](../../assets/downloads/hotfixes/30/i-doit_30-31_hotfix_ID-10808.zip){ .md-button .md-button--primary }

### Exporting a object list via csv has no results (ID-10798)

[i-doit_31_hotfix_ID-10798.zip :material-file-download:](../../assets/downloads/hotfixes/31/i-doit_31_hotfix_ID-10798.zip){ .md-button .md-button--primary }

### Counter skips a number when duplicating objects (ID-10763)

[i-doit_31_hotfix_ID-10763.zip :material-file-download:](../../assets/downloads/hotfixes/31/i-doit_31_hotfix_ID-10763.zip){ .md-button .md-button--primary }

### List editing Ports does not select Default VLAN (ID-10762)

[i-doit_31_hotfix_ID-10762.zip :material-file-download:](../../assets/downloads/hotfixes/31/i-doit_31_hotfix_ID-10762.zip){ .md-button .md-button--primary }

### Assigning location to object via csv import only uses first entry of csv (ID-10749)

Fixed with hotfix CSV import using comma-separated or row causes only values from first entry to be used (ID-10892)

### CSV import using comma-separated or row causes only values from first entry to be used (ID-10892)

[i-doit_31_hotfix_ID-10749_ac7b360.zip :material-file-download:](../../assets/downloads/hotfixes/31/i-doit_31_hotfix_ID-10749_ac7b360.zip){ .md-button .md-button--primary }

## API

### API is using report query from db instead of creating the query new which leads to wrong results (API-496)

[api_2.0.1_hotfix_API-496.zip :material-file-download:](../../assets/downloads/hotfixes/api/api_2.0.1_hotfix_API-496.zip){ .md-button .md-button--primary }

## Forms Add-on 1.2.0

### Object is not created when a attribute validation is used and no error is displayed

[forms_1.2.0_hotfix_AOF-38_69144fc.zip :material-file-download:](../../assets/downloads/hotfixes/forms/forms_1.2.0_hotfix_AOF-38_69144fc.zip){ .md-button .md-button--primary }

### Using Forms to create an object bypasses validation "unique" check

??? info "The only exception to unique checks are IPv4 addresses"

[forms_1.2_hotfix_AOF-54-43.zip :material-file-download:](../../assets/downloads/hotfixes/forms/forms_1.2_hotfix_AOF-54-43.zip){ .md-button .md-button--primary }

## Workflow Add-on 1.2

### Workflow Add-on User Permissions are not available

[workflow_1.2_workflow-51_b54b344.zip :material-file-download:](../../assets/downloads/hotfixes/workflow/workflow_1.2_workflow-51_b54b344.zip){ .md-button .md-button--primary }
