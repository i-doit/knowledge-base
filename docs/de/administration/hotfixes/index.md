---
title: Hotfixes
description: Hotfixes für die aktuelle i-doit Version
icon: fontawesome/solid/bug-slash
lang: de
---

# Hotfixes

!!! success "Hotfixes für Version **34**"

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

### Sorting for a rack causes vertical slots to be seen already taken when importing via csv import (ID-11522)

[i-doit_34_hotfix_ID-11522_dc34840.zip :material-file-download:](../../assets/downloads/hotfixes/34/i-doit_34_hotfix_ID-11522_dc34840.zip){ .md-button .md-button--primary }

### Using installed on attribute at database assignment causes 500 error (ID-11743)

!!! info "This Hotfix can be used for any case of a 500 error when trying to select a object in a category if the following error occurs:"
    ```bash
    PHP Fatal error:  Declaration of idoit\\Module\\Cmdb\\Component\\Browser\\Filter\\AuthFilter::getQueryCondition() must be compatible with idoit\\Component\\Browser\\Filter::getQueryCondition(): string in /var/www/html/idoit/src/classes/modules/cmdb/src/Component/Browser/Filter/AuthFilter.php on line 20, referer: .../idoit/?objID=18138&mNavID=2&lang=de&viewMode=1002&tvMode=1006&catgID=12
    ```

[i-doit_34_hotfix_ID-11743_71ff22b.zip :material-file-download:](../../assets/downloads/hotfixes/34/i-doit_34_hotfix_ID-11743_71ff22b.zip){ .md-button .md-button--primary }

### Configured user language is ignored (ID-11738)

[i-doit_34_hotfix_ID-11738_2fe864f.zip :material-file-download:](../../assets/downloads/hotfixes/34/i-doit_34_hotfix_ID-11738_2fe864f.zip){ .md-button .md-button--primary }

## API Add-on

### Saving field vlan_id does remove selected Layer-3 nets (API-604)

[api_2.2-2.3_hotfix_API-604_7210da7.zip :material-file-download:](../../assets/downloads/hotfixes/api/api_2.2-2.3_hotfix_API-604_7210da7.zip){ .md-button .md-button--primary }

### Reading a SQL Report without result (API-551)

[api_2.2_hotfix_API-551_08fc1cb.zip :material-file-download:](../../assets/downloads/hotfixes/api/api_2.2_hotfix_API-551_08fc1cb.zip){ .md-button .md-button--primary }

## Forms Add-on

### Object is not created when a attribute validation is used and no error is displayed (AOF-38)

[forms_1.2.0_hotfix_AOF-38_69144fc.zip :material-file-download:](../../assets/downloads/hotfixes/forms/forms_1.2.0_hotfix_AOF-38_69144fc.zip){ .md-button .md-button--primary }

### Using Forms to create an object bypasses validation "unique" check (AOF-54)

!!! info "The only exception to unique checks are IPv4 addresses"

[forms_1.2_hotfix_AOF-54-43.zip :material-file-download:](../../assets/downloads/hotfixes/forms/forms_1.2_hotfix_AOF-54-43.zip){ .md-button .md-button--primary }

## Workflow Add-on

### Workflow Checklist is inaccessible after workflow is accepted (WORKFLOW-52)

??? info "Error message found in the Webserver logs"
    ```
    Something went wrong while executing the current action/component with message: method_exists(): Argument #1 ($object_or_class) must be of type object|string, null given
    ```

[workflow_1.2_1.3_hotfix_WORKFLOW-52_21fd9c0.zip :material-file-download:](../../assets/downloads/hotfixes/workflow/workflow_1.2_1.3_hotfix_WORKFLOW-52_21fd9c0.zip){ .md-button .md-button--primary }

## Floorplan Add-on

### 'Hide / unhide Object' Button does not hide or unhide the object (FP-140)

[floorplan_1.8_hotfix_FP-140_2e1ca1e.zip :material-file-download:](../../assets/downloads/hotfixes/floorplan/floorplan_1.8_hotfix_FP-140_2e1ca1e.zip){ .md-button .md-button--primary }

## Replacement Add-on

### TypeErrors when selecting objects to swap

[Swapci_1.6_hotfix_SWAPCI-47_c1d34a3.zip :material-file-download:](../../assets/downloads/hotfixes/swap-ci/Swapci_1.6_hotfix_SWAPCI-47_c1d34a3.zip){ .md-button .md-button--primary }

## Maintenance Add-on

### Option 'Send multiple notifications for each maintenance?' automatically sets to 'Yes' after finishing an upcoming maintenance [WARTUNG-97]

[i-doit_maintenance-1.5_hotfix_WARTUNG-97_6cab331.zip :material-file-download:](../../assets/downloads/hotfixes/maintenance/i-doit_maintenance-1.5_hotfix_WARTUNG-97_6cab331.zip){ .md-button .md-button--primary }
