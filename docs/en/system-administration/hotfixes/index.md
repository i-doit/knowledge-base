# Hotfixes

!!! success "Hotfixes for version **33**"

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

### CSV Import doesn't set "Yes/No" Fields in custom categories (ID-11162)<br>A custom field change of type Yes-no-field is not logged in the Logbook (ID-11234)<br>API changes to yes-no-fields type are not written to the logbook (ID-11288)

[i-doit_33_hotfix_ID-11162_ID-11234_ID-11288_f3ad92e.zip :material-file-download:](../../assets/downloads/hotfixes/33/i-doit_33_hotfix_ID-11162_ID-11234_ID-11288_f3ad92e.zip){ .md-button .md-button--primary }

### Better Object list loading performance (ID-11230)

Improved object list loading times.

[i-doit_31_32_33_hotfix_ID-11230_ba0221d.zip :material-file-download:](../../assets/downloads/hotfixes/33/i-doit_31_32_33_hotfix_ID-11230_ba0221d.zip){ .md-button .md-button--primary }

### Add support for new JDisc GraphQL Schema (ID-11256)

Use this if you use any newer JDisc version, to be able to use the GraphQL Discovery feature.

[i-doit_33_hotfix_ID-11256.zip :material-file-download:](../../assets/downloads/hotfixes/33/i-doit_33_hotfix_ID-11256.zip){ .md-button .md-button--primary }

### Improve performance of location tree when considering user rights (ID-11261)

Improved location tree loading times.

[i-doit_32_33_hotfix_ID-11261_2785c2c.zip :material-file-download:](../../assets/downloads/hotfixes/33/i-doit_32_33_hotfix_ID-11261_2785c2c.zip){ .md-button .md-button--primary }

### Unable to update objects via JDisc Discovery category (ID-11323)

[i-doit_33_hotfix_ID-11323_21c277e.zip :material-file-download:](../../assets/downloads/hotfixes/33/i-doit_33_hotfix_ID-11323_21c277e.zip){ .md-button .md-button--primary }

### SQL Syntax Error when watching report with Location and operator below as condition (ID-11343)

??? info "Error message found in the logs"
    ```
    You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'under_location '38' ) ) ORDER BY obj_main.isys_obj__title DESC' at line 12
    ```

[i-doit_33_hotfix_ID-11343.zip :material-file-download:](../../assets/downloads/hotfixes/33/i-doit_33_hotfix_ID-11343_88000e7.zip){ .md-button .md-button--primary }

### Report Manager uses the same temp table for different conditions (ID-11374)

[i-doit_32_33_hotfix_ID-11374_2e3f733.zip :material-file-download:](../../assets/downloads/hotfixes/33/i-doit_32_33_hotfix_ID-11374_2e3f733.zip){ .md-button .md-button--primary }

### Condition without value empties other conditions (ID-11397)

[i-doit_33_hotfix_ID-11397_edd07cb.zip :material-file-download:](../../assets/downloads/hotfixes/33/i-doit_33_hotfix_ID-11397_edd07cb.zip){ .md-button .md-button--primary }

### Custom dialog+ fields empty after saving / no options to choose despite values (ID-11427)

??? info "This Hotfix prevents the saving of strings that trigger the bug in the dialog+ field identifier. A message will appear and the word gets deleted"
    Known trigger words:
    ```
    'select'
    'update'
    'insert'
    'drop'
    'replace'
    'delete'
    'alter'
    'create'
    'set'
    ```

!!! warning "Please note"
    After installing the hotfix, please remove any of these words, if your identifier contains one or more of these strings and leave the rest untouched. This will ensure the values will be the same.

    Examples:
    If your identifier is set to ´update_identifier´, change this to ´_identifier´
    If it is set to ´my_update_identifier´, change it to ´my__identifier´ (two underscores)

    Please also note that you will need to refresh the browser cache after applying the hotfix.

[i-doit_33_hotfix_ID-11427.zip :material-file-download:](../../assets/downloads/hotfixes/33/i-doit_33_hotfix_ID-11427_0bca4f0.zip){ .md-button .md-button--primary }

### Use proxy in context of Trouble Ticket System (TTS) (ID-11446)

[i-doit_33_hotfix_ID-11446_f97efe2.zip :material-file-download:](../../assets/downloads/hotfixes/33/i-doit_33_hotfix_ID-11446_f97efe2.zip){ .md-button .md-button--primary }

## API Add-on

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

## Swap-CI

### TypeErrors when selecting objects to swap

[Swapci_1.6_hotfix_SWAPCI-47_c1d34a3.zip :material-file-download:](../../assets/downloads/hotfixes/swap-ci/Swapci_1.6_hotfix_SWAPCI-47_c1d34a3.zip){ .md-button .md-button--primary }
