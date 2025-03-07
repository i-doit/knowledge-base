---
title: Hotfixes
description: Hotfixes for the most recent i-doit version
icon: fontawesome/solid/bug-slash
lang: en
---

# Hotfixes

!!! success "Hotfixes for version **34**"

A hotfix fixes a specific error and is usually made available as a ZIP file. The ZIP file is extracted in the **installation directory** of i-doit. The prompt asking whether files should be overwritten when unpacking must be confirmed.

If a hotfix is required to update an older version, this can be found in the [Hotfix archive](hotfix-archive/index.md).

As these are hotfixes, we recommend that you only install them if they are necessary for the proper operation of your installation or if you are requested to do so by support. Please ensure that a [backup of i-doit](../../maintenance-and-operation/backup-and-recovery/index.md) has been created before using these hotfixes.

If you contact support after using the hotfixes, please add the reference to their use.

!!! warning "**Declaration of consent**"
    By downloading a hotfix you declare that you have read and understood the above mentioned notes completely.

## Application with GNU/Linux

```sh
sudo cp i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip /var/www/html/i-doit/
cd /var/www/html/i-doit/
sudo -u www-data unzip i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip
sudo rm i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip
```

## Application with Windows

[![Extract](../../assets/images/en/system-administration/hotfixes/example-windows-zip.png)](../../assets/images/en/system-administration/hotfixes/example-windows-zip.png)

Path for the **i-doit Windows installer**:

```txt
C:\ProgramData\i-doit\apache-2.4\htdocs
```

Path for the **i-doit Discovery installer**:

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

### Hide/unhide Object Button does not hide or unhide the object (FP-140)

[floorplan_1.8_hotfix_FP-140_2e1ca1e.zip :material-file-download:](../../assets/downloads/hotfixes/floorplan/floorplan_1.8_hotfix_FP-140_2e1ca1e.zip){ .md-button .md-button--primary }

## Replacement

### TypeErrors when selecting objects to swap

[Swapci_1.6_hotfix_SWAPCI-47_c1d34a3.zip :material-file-download:](../../assets/downloads/hotfixes/swap-ci/Swapci_1.6_hotfix_SWAPCI-47_c1d34a3.zip){ .md-button .md-button--primary }

## Maintenance Add-on

### Option 'Send multiple notifications for each maintenance?' automatically sets to 'Yes' after finishing an upcoming maintenance [WARTUNG-97]

[i-doit_maintenance-1.5_hotfix_WARTUNG-97_6cab331.zip :material-file-download:](../../assets/downloads/hotfixes/maintenance/i-doit_maintenance-1.5_hotfix_WARTUNG-97_6cab331.zip){ .md-button .md-button--primary }

## Maintenance Add-on

### Option 'Send multiple notifications for each maintenance?' automatically sets to 'Yes' after finishing an upcoming maintenance [WARTUNG-97]

[i-doit_maintenance-1.5_hotfix_WARTUNG-97_6cab331.zip :material-file-download:](../../assets/downloads/hotfixes/maintenance/i-doit_maintenance-1.5_hotfix_WARTUNG-97_6cab331.zip){ .md-button .md-button--primary }
