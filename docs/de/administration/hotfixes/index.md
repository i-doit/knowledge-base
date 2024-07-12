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

### JDisc import stops with an error message (ID-10970)

??? info "Error message found in the Webserver logs"
    ```
    PHP Fatal error:  Uncaught TypeError: strlen(): Argument #1 ($string) must be of type string, array given in /var/www/html/i-doit/src/classes/modules/cmdb/src/Component/SyncNormalizer/DataNormalizer/Dialog/DialogData.php:116
    Stack trace:
    #0 /var/www/html/i-doit/src/classes/modules/cmdb/src/Component/SyncNormalizer/DataNormalizer/Dialog/DialogData.php(116): strlen()
    #1 /var/www/html/i-doit/src/classes/modules/cmdb/src/Component/SyncNormalizer/DataNormalizerProvider.php(128): idoit\Module\Cmdb\Component\SyncNormalizer\DataNormalizer\Dialog\DialogData::denormalizeData()
    #2 /var/www/html/i-doit/src/classes/modules/cmdb/src/Component/SyncNormalizer/DeNormalizer.php(60): idoit\Module\Cmdb\Component\SyncNormalizer\DataNormalizerProvider->denormalizeData()
    #3 /var/www/html/i-doit/src/classes/modules/cmdb/src/Component/CategoryChanges/Type/Browser/MultiObjectBrowserType.php(342): idoit\Module\Cmdb\Component\SyncNormalizer\DeNormalizer->normalizeData()
    #4 /var/www/html/i-doit/src/classes/modules/cmdb/src/Component/CategoryChanges/Builder/ChangesBuilder.php(137): idoit\Module\Cmdb\Component\CategoryChanges\Type\Browser\MultiObjectBrowserType->handleData()
    #5 /var/www/html/i-doit/src/classes/modules/cmdb/src/Component/CategoryChanges/Builder/ChangesBuilder.php(54): idoit\Module\Cmdb\Component\CategoryChanges\Builder\ChangesBuilder->processWithArrayData()
    #6 /var/www/html/i-doit/src/classes/modules/cmdb/src/Component/CategoryChanges/Changes.php(123): idoit\Module\Cmdb\Component\CategoryChanges\Builder\ChangesBuilder->process()
    #7 /var/www/html/i-doit/src/classes/import/handler/isys_import_handler_cmdb.class.php(4729): idoit\Module\Cmdb\Component\CategoryChanges\Changes->processChanges()
    #8 /var/www/html/i-doit/src/classes/import/handler/isys_import_handler_cmdb.class.php(3780): isys_import_handler_cmdb->getCategoryChanges()
    #9 /var/www/html/i-doit/src/classes/import/handler/isys_import_handler_cmdb.class.php(1548): isys_import_handler_cmdb->import_categories()
    #10 /var/www/html/i-doit/src/classes/modules/jdisc/src/Console/Command/JDiscImportCommand.php(354): isys_import_handler_cmdb->import()
    #11 /var/www/html/i-doit/vendor/symfony/console/Command/Command.php(298): idoit\Module\JDisc\Console\Command\JDiscImportCommand->execute()
    #12 /var/www/html/i-doit/vendor/symfony/console/Application.php(1058): Symfony\Component\Console\Command\Command->run()
    #13 /var/www/html/i-doit/vendor/symfony/console/Application.php(301): Symfony\Component\Console\Application->doRunCommand()
    #14 /var/www/html/i-doit/vendor/symfony/console/Application.php(171): Symfony\Component\Console\Application->doRun()
    #15 /var/www/html/i-doit/console.php(26): Symfony\Component\Console\Application->run()
    #16 {main}
    thrown in /var/www/html/i-doit/src/classes/modules/cmdb/src/Component/SyncNormalizer/DataNormalizer/Dialog/DialogData.php on line 116
    ```

[i-doit_32_hotfix_ID-10970.zip :material-file-download:](../../assets/downloads/hotfixes/32/i-doit_32_hotfix_ID-10970.zip){ .md-button .md-button--primary }

### View right for objects of a type allows to create a unfinished object (ID-10972)

[i-doit_32_hotfix_ID-10972_29ef713.zip :material-file-download:](../../assets/downloads/hotfixes/32/i-doit_32_hotfix_ID-10972_29ef713.zip){ .md-button .md-button--primary }

### PHP error when importing from JDisc (ID-10991)

??? info "Error message found in the Webserver logs"
    ```
    PHP Fatal error: Uncaught TypeError: idoit\Module\Cmdb\Component\CategoryChanges\Data\ChangesData::setObjectId(): Argument #1 ($objectId) must be of type int, null given, called in /var/www/html/src/classes/modules/cmdb/src/Component/CategoryChanges/Data/ChangesData.php on line 71 and defined in /var/www/html/src/classes/modules/cmdb/src/Component/CategoryChanges/Data/ChangesData.php:37
    Stack trace:
    #0 /var/www/html/src/classes/modules/cmdb/src/Component/CategoryChanges/Data/ChangesData.php(71): idoit\Module\Cmdb\Component\CategoryChanges\Data\ChangesData->setObjectId()
    #1 /var/www/html/src/classes/modules/cmdb/src/Component/CategoryChanges/Type/Browser/ConnectorBrowserType.php(145): idoit\Module\Cmdb\Component\CategoryChanges\Data\ChangesData::factory()
    #2 /var/www/html/src/classes/modules/cmdb/src/Component/CategoryChanges/Type/Browser/ConnectorBrowserType.php(295): idoit\Module\Cmdb\Component\CategoryChanges\Type\Browser\ConnectorBrowserType->handleConnector()
    #3 /var/www/html/src/classes/modules/cmdb/src/Component/CategoryChanges/Builder/ChangesBuilder.php(138): idoit\Module\Cmdb\Component\CategoryChanges\Type\Browser\ConnectorBrowserType->handleData()
    #4 /var/www/html/src/classes/modules/cmdb/src/Component/CategoryChanges/Builder/ChangesBuilder.php(54): idoit\Module\Cmdb\Component\CategoryChanges\Builder\ChangesBuilder->processWithArrayData()
    #5 /var/www/html/src/classes/modules/cmdb/src/Component/CategoryChanges/Changes.php(109): idoit\Module\Cmdb\Component\CategoryChanges\Builder\ChangesBuilder->process()
    #6 /var/www/html/src/classes/import/handler/isys_import_handler_cmdb.class.php(4737): idoit\Module\Cmdb\Component\CategoryChanges\Changes->processChanges()
    #7 /var/www/html/src/classes/import/handler/isys_import_handler_cmdb.class.php(3788): isys_import_handler_cmdb->getCategoryChanges()
    #8 /var/www/html/src/classes/import/handler/isys_import_handler_cmdb.class.php(1548): isys_import_handler_cmdb->import_categories()
    #9 /var/www/html/src/classes/modules/jdisc/src/Console/Command/JDiscImportCommand.php(354): isys_import_handler_cmdb->import()
    #10 /var/www/html/vendor/symfony/console/Command/Command.php(298): idoit\Module\JDisc\Console\Command\JDiscImportCommand->execute()
    #11 /var/www/html/vendor/symfony/console/Application.php(1058): Symfony\Component\Console\Command\Command->run()
    #12 /var/www/html/vendor/symfony/console/Application.php(301): Symfony\Component\Console\Application->doRunCommand()
    #13 /var/www/html/vendor/symfony/console/Application.php(171): Symfony\Component\Console\Application->doRun()
    #14 /var/www/html/console.php(26): Symfony\Component\Console\Application->run()
    #15 {main}
    thrown in /var/www/html/src/classes/modules/cmdb/src/Component/CategoryChanges/Data/ChangesData.php on line 37
    ```

[i-doit_32_hotfix_ID-10991.zip :material-file-download:](../../assets/downloads/hotfixes/32/i-doit_32_hotfix_ID-10991.zip){ .md-button .md-button--primary }

## Forms Add-on 1.2.0

### Object is not created when a attribute validation is used and no error is displayed

[forms_1.2.0_hotfix_AOF-38_69144fc.zip :material-file-download:](../../assets/downloads/hotfixes/forms/forms_1.2.0_hotfix_AOF-38_69144fc.zip){ .md-button .md-button--primary }

### Using Forms to create an object bypasses validation "unique" check (AOF-54)

??? info "The only exception to unique checks are IPv4 addresses"

[forms_1.2_hotfix_AOF-54-43.zip :material-file-download:](../../assets/downloads/hotfixes/forms/forms_1.2_hotfix_AOF-54-43.zip){ .md-button .md-button--primary }
