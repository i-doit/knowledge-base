# Hotfixes

!!! success "Hotfixes für Version **33**"

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

### SQL error when using location path as a condition block at report manager (D-11151)

??? info "Error message found in the logs"
    ```
    Database error : Query error: 'SELECT obj_main.isys_obj__id AS '__id__', obj_main.isys_obj__title AS 'LC__UNIVERSAL__TITLE###0_1', j3.isys_obj__title AS 'LC__CMDB__CATG__LOCATION###0_26', j2.isys_catg_location_list__parentid as 'isys_cmdb_dao_category_g_location::dynamic_property_callback_location_path::DYNAMIC_PROPERTY::0', j2.isys_catg_location_list__parentid as 'isys_cmdb_dao_category_g_location::dynamic_property_callback_location_path::DYNAMIC_PROPERTY::1' FROM isys_obj AS obj_main INNER JOIN isys_cmdb_status AS obj_main_status ON obj_main_status.isys_cmdb_status__id = obj_main.isys_obj__isys_cmdb_status__id LEFT JOIN isys_catg_location_list AS j2 ON obj_main.isys_obj__id = j2.isys_catg_location_list__isys_obj__id LEFT JOIN isys_obj AS j3 ON j2.isys_catg_location_list__parentid = j3.isys_obj__id LEFT JOIN isys_obj_type AS j4 ON j4.isys_obj_type__id = obj_main.isys_obj__isys_obj_type__id WHERE TRUE AND ( (j4.isys_obj_type__id != '60' ) AND (j4.isys_obj_type__id != '63' ) ) AND ( (FALSE) ) AND ( ( ( j2.isys_catg_location_list__parentid IN (Array) ) AND (j2.isys_catg_location_list__parentid IS NOT NULL AND j2.isys_catg_location_list__parentid != '') ) ) ORDER BY obj_main.isys_obj__title ASC': Unknown column 'Array' in 'where clause'
    ```

[i-doit_32_hotfix_ID-11151.zip :material-file-download:](../../assets/downloads/hotfixes/32/i-doit_32_hotfix_ID-11151.zip){ .md-button .md-button--primary }

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
