---
title: Hotfixes
description: Hotfixes für die aktuelle i-doit Version
icon: fontawesome/solid/bug-slash
lang: de
---

# Hotfixes

!!! success "Hotfixes für Version **35**"

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

### LDAP sync can not update person object \[ID-11764\]

[i-doit_35_hotfix_ID-11764_700a05e.zip :material-file-download:](../../assets/downloads/hotfixes/35/i-doit_35_hotfix_ID-11764_700a05e.zip){ .md-button .md-button--primary }

### CSV import does not work when using object type assignment with the object type constant \[ID-11793\]

[i-doit_35_hotfix_ID-11973_ec07c28.zip :material-file-download:](../../assets/downloads/hotfixes/35/i-doit_35_hotfix_ID-11973_ec07c28.zip){ .md-button .md-button--primary }

??? info "Error message found in the Webserver log"
    ```
    You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'under_location '38' ) ) ORDER BY obj_main.isys_obj__title DESC' at line 12
    ```

### Category is not displayed or the category list is empty and a PHP Fatal error is logged \[ID-11972\]

[i-doit_35_hotfix_ID-11972_553b6c1.zip :material-file-download:](../../assets/downloads/hotfixes/35/i-doit_35_hotfix_ID-11972_553b6c1.zip){ .md-button .md-button--primary }

### PHP error while updating to i-doit 35 \[ID-11978\]

[i-doit_35_hotfix_ID-11978_migration-of-crypto-hashes.zip :material-file-download:](../../assets/downloads/hotfixes/35/i-doit_35_hotfix_ID-11978_migration-of-crypto-hashes.zip){ .md-button .md-button--primary }

## API Add-on

### Compatibility to Monolog 3 \[API-596\]

??? info "Error message found in the Webserver log"
    ```
    Got error 'PHP message: PHP Fatal error:  Uncaught TypeError: idoit\\Module\\Cmdb\\Component\\SyncNormalizer\\Config::__construct(): Argument #2 ($data) must be of type array, string given, called in
    ```

[api_2.3_hotfix_API-596_426c958.zip :material-file-download:](../../assets/downloads/hotfixes/api/api_2.3_hotfix_API-596_426c958.zip){ .md-button .md-button--primary }

## Flows Add-on

### Flows does not work with MySQL \[Flow-385\]

[Flows_1.1.0_hotfix_FLOW-385_5973795.zip :material-file-download:](../../assets/downloads/hotfixes/flows/Flows_1.1.0_hotfix_FLOW-385_5973795.zip){ .md-button .md-button--primary }

## Documents Add-on

### Rights for Templates in categories are not checked \[DOKU-502\]

[Documents_1.10_hotfix_DOKU-502_f8a6ec2.zip :material-file-download:](../../assets/downloads/hotfixes/documents/Documents_1.10_hotfix_DOKU-502_f8a6ec2.zip){ .md-button .md-button--primary }

## Replacement Add-on

### TypeErrors when selecting objects to swap \[SWAPCI-47\]

[Swapci_1.6_hotfix_SWAPCI-47_c1d34a3.zip :material-file-download:](../../assets/downloads/hotfixes/swap-ci/Swapci_1.6_hotfix_SWAPCI-47_c1d34a3.zip){ .md-button .md-button--primary }
