# Hotfixes

!!! success "Hotfixes for version **31**"

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

### Altering data in Network > Port entry which has a Interface assigned are not saved (ID-10853)

[i-doit_31_hotfix_ID-10853_b9ee2aa.zip :material-file-download:](../../assets/downloads/hotfixes/31/i-doit_31_hotfix_ID-10853_b9ee2aa.zip){ .md-button .md-button--primary }

### Creating a new connection at category Network listener does not create a new connection (ID-10884)

[i-doit_31_hotfix_ID-10884_ddb80db.zip :material-file-download:](../../assets/downloads/hotfixes/31/i-doit_31_hotfix_ID-10884_ddb80db.zip){ .md-button .md-button--primary }

### Migration error when updating (ID-10808)

Is used for doing the update from 29 or 30 to 31. Unzip File and do the Update.
Do **not** download the update package again, this would override the Hotfix.

??? info "Error message found in the Webserver logs"
    ```log
    Fatal error: Uncaught TypeError: getDefaultConfiguration(): Argument #1 ($className) must be of type string, null given, called in
    ```

[i-doit_29-30_hotfix_ID-10808.zip :material-file-download:](../../assets/downloads/hotfixes/29/i-doit_29-30_hotfix_ID-10808.zip){ .md-button .md-button--primary }
[i-doit_30-31_hotfix_ID-10808.zip :material-file-download:](../../assets/downloads/hotfixes/30/i-doit_30-31_hotfix_ID-10808.zip){ .md-button .md-button--primary }

[i-doit_31_hotfix_ID-10808.zip :material-file-download:](../../assets/downloads/hotfixes/31/i-doit_31_hotfix_ID-10808.zip){ .md-button .md-button--primary }

### HTTP 500 error when creating a document or a revision (ID-10831)

??? info "Error message found in the Webserver logs"
    ```log
    Got error 'PHP message: PHP Fatal error:  Uncaught TypeError: isys_cmdb_dao_category_property::getConstantFromRange(): Argument #1 ($constant) must be of type string, null given
    ```

[i-doit_31_hotfix_ID-10831.zip :material-file-download:](../../assets/downloads/hotfixes/31/i-doit_31_hotfix_ID-10831.zip){ .md-button .md-button--primary }

### Counter skips a number when duplicating objects (ID-10763)

[i-doit_31_hotfix_ID-10763.zip :material-file-download:](../../assets/downloads/hotfixes/31/i-doit_31_hotfix_ID-10763.zip){ .md-button .md-button--primary }

### List editing Ports does not select Default VLAN (ID-10762)

[i-doit_31_hotfix_ID-10762.zip :material-file-download:](../../assets/downloads/hotfixes/31/i-doit_31_hotfix_ID-10762.zip){ .md-button .md-button--primary }

### Exporting a object list via csv has no results (ID-10798)

[i-doit_31_hotfix_ID-10798.zip :material-file-download:](../../assets/downloads/hotfixes/31/i-doit_31_hotfix_ID-10798.zip){ .md-button .md-button--primary }

## API

### API is using report query from db instead of creating the query new which leads to wrong results (API-496)

[api_2.0.1_hotfix_API-496.zip :material-file-download:](../../assets/downloads/hotfixes/api/api_2.0.1_hotfix_API-496.zip){ .md-button .md-button--primary }

## Forms Add-on 1.2.0

### Object is not created when a attribute validation is used and no error is displayed

[forms_1.2.0_hotfix_AOF-38_69144fc.zip :material-file-download:](../../assets/downloads/hotfixes/forms/forms_1.2.0_hotfix_AOF-38_69144fc.zip){ .md-button .md-button--primary }

## Workflow Add-on 1.2

### Workflow Add-on User Permissions are not available

[workflow_1.2_workflow-51_b54b344.zip :material-file-download:](../../assets/downloads/hotfixes/workflow/workflow_1.2_workflow-51_b54b344.zip){ .md-button .md-button--primary }
