# Hotfixes

!!! success "Hotfixes for version **32**"

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

### JDisc-Group filter is ignored (ID-11007)

[i-doit_32_hotfix_ID-11007.zip :material-file-download:](../../assets/downloads/hotfixes/32/i-doit_32_hotfix_ID-11007.zip){ .md-button .md-button--primary }

### HTTP 500 error when a object is added via object browser (ID-10993)

??? info "Error message found in the Webserver logs"
    ```
    [Thu Jul 11 07:57:26.093062 2024] [proxy_fcgi:error] [pid 1568446] [client 10.0.8.6:54078] AH01071: Got error 'PHP message: PHP Fatal error:  Uncaught TypeError:
    isys_cmdb_action_category::fetchEntryId(): Return value must be of type ?int, string returned in
    /var/www/html/src/classes/modules/cmdb/action/isys_cmdb_action_category.class.php:100
    ```

[i-doit_32_hotfix_ID-10993_976e0c2.zip :material-file-download:](../../assets/downloads/hotfixes/32/i-doit_32_hotfix_ID-10993_976e0c2.zip){ .md-button .md-button--primary }

### PHP error when importing from JDisc (ID-10991)

??? info "Error message found in the Webserver logs"
    ```
    PHP Fatal error: Uncaught TypeError: idoit\Module\Cmdb\Component\CategoryChanges\Data\ChangesData::setObjectId():
    Argument #1 ($objectId) must be of type int, null given, called in /var/www/html/src/classes/modules/cmdb/src/Component/CategoryChanges/Data/ChangesData.php on line 71
    and defined in /var/www/html/src/classes/modules/cmdb/src/Component/CategoryChanges/Data/ChangesData.php:37
    ```

[i-doit_32_hotfix_ID-10991.zip :material-file-download:](../../assets/downloads/hotfixes/32/i-doit_32_hotfix_ID-10991.zip){ .md-button .md-button--primary }

### View right for objects of a type allows to create a unfinished object (ID-10972)

It is possible to create a Object with only the view right.

[i-doit_32_hotfix_ID-10972_29ef713.zip :material-file-download:](../../assets/downloads/hotfixes/32/i-doit_32_hotfix_ID-10972_29ef713.zip){ .md-button .md-button--primary }

### CSV export with symbols (ID-10758)

Exporting a object list as csv includes special symbols.

[i-doit_32_hotfix_ID-10758_b26033c.zip :material-file-download:](../../assets/downloads/hotfixes/32/i-doit_32_hotfix_ID-10758_b26033c.zip){ .md-button .md-button--primary }

### Adding #Number to a counter set for automatic inventory number creates a new custom counter when creating a object (ID-11073)

Adding a #Number to a counter creates a new counter AND counters skip a count (2 -> 4 -> 6)

[i-doit_32_hotfix_ID-11073_7be428b.zip :material-file-download:](../../assets/downloads/hotfixes/32/i-doit_32_hotfix_ID-11073_7be428b.zip){ .md-button .md-button--primary }

## API Add-on

### Reading category Contact via API does not respond with a contact data array (API-549)

[api_2.1_hotfix_API-549_0e82df9.zip :material-file-download:](../../assets/downloads/hotfixes/api/api_2.1_hotfix_API-549_0e82df9.zip){ .md-button .md-button--primary }

## Forms Add-on

### Object is not created when a attribute validation is used and no error is displayed

[forms_1.2.0_hotfix_AOF-38_69144fc.zip :material-file-download:](../../assets/downloads/hotfixes/forms/forms_1.2.0_hotfix_AOF-38_69144fc.zip){ .md-button .md-button--primary }

### Using Forms to create an object bypasses validation "unique" check (AOF-54)

!!! info "The only exception to unique checks are IPv4 addresses"

[forms_1.2_hotfix_AOF-54-43.zip :material-file-download:](../../assets/downloads/hotfixes/forms/forms_1.2_hotfix_AOF-54-43.zip){ .md-button .md-button--primary }

## Workflow Add-on

### Workflow Checklist is inaccessible after workflow is accepted

??? info "Error message found in the Webserver logs"
    ```
    Something went wrong while executing the current action/component with message: method_exists(): Argument #1 ($object_or_class) must be of type object|string, null given
    ```

[workflow_1.2_1.3_hotfix_WORKFLOW-52_21fd9c0.zip :material-file-download:](../../assets/downloads/hotfixes/workflow/workflow_1.2_1.3_hotfix_WORKFLOW-52_21fd9c0.zip){ .md-button .md-button--primary }
