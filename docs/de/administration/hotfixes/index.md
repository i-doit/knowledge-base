# Hotfixes

!!! success "Hotfixes für Version **32**"

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

### CSV Import Error message with Multi-valued categories option set to "row" or "comma-separated"

Occurs when specific mappings are set

??? info "Error message found in the PHP logs"
    ```
    [Wed Jul 31 15:25:44.477595 2024] [php:error] [pid 418181] [client 10.0.8.13:52397] PHP Fatal error:  Uncaught Error: Call to a member function hasAnyChanges() on null in /var/www>
    ```

[i-doit_32_hotfix_ID-11003.zip :material-file-download:](../../assets/downloads/hotfixes/32/i-doit_32_hotfix_ID-11003.zip){ .md-button .md-button--primary }

### CSV import helper unable to split multi value dialog entries containing 0 values (ID-11080)

[i-doit_32_hotfix_ID-11080_a3a793a.zip :material-file-download:](../../assets/downloads/hotfixes/32/i-doit_32_hotfix_ID-11080_a3a793a.zip){ .md-button .md-button--primary }

### Adding #Number to a counter set for automatic inventory number creates a new custom counter when creating a object (ID-11073)

Adding a #Number to a counter creates a new counter AND counters skip a count (2 -> 4 -> 6)

[i-doit_32_hotfix_ID-11073_7be428b.zip :material-file-download:](../../assets/downloads/hotfixes/32/i-doit_32_hotfix_ID-11073_7be428b.zip){ .md-button .md-button--primary }

### JDisc-Group filter is ignored (ID-11007)

[i-doit_32_hotfix_ID-11007.zip :material-file-download:](../../assets/downloads/hotfixes/32/i-doit_32_hotfix_ID-11007.zip){ .md-button .md-button--primary }

### HTTP 500 error when an contact (person(-group) or orga) is created which has a default template set (ID-11001)

Can also occur when creating a duplicate of an object.

??? info "Error message found in the Webserver logs"
    ```
    [Fri Jul 12 16:05:59.553712 2024] [proxy_fcgi:error] [pid 1869452] [client 10.0.8.6:36768] AH01071: Got error 'PHP message: PHP Fatal error:  Uncaught TypeError: trim(): Argument #1 ($string) must be of type string, array given in /var/www/html/testinstance/src/classes/modules/cmdb/dao/category/specific/isys_cmdb_dao_category_s_person_master.class.php:694 Stack trace: #0 /var/www/html/testinstance/src/classes/modules/cmdb/dao/category/specific/isys_cmdb_dao_category_s_person_master.class.php(694): trim()
    ```

[i-doit_32_hotfix_ID-11001.zip :material-file-download:](../../assets/downloads/hotfixes/32/i-doit_32_hotfix_ID-11001.zip){ .md-button .md-button--primary }

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
