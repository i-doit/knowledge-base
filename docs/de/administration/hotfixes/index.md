---
title: Hotfixes
description: Hotfixes für die aktuelle i-doit Version
icon: fontawesome/solid/bug-slash
lang: de
---

# Hotfixes

!!! success "Hotfixes für Version **37**"

Ein Hotfix beseitigt einen bestimmten Fehler und werden in der Regel als ZIP-Datei zur Verfügung gestellt. Die ZIP-Datei wird im **Installationsverzeichnis** von i-doit entpackt. Die Abfrage, ob Dateien beim Entpacken überschrieben werden sollen, muss bestätigt werden.

Falls ein Hotfix zur Ausführung des Updates einer älteren Version notwendig ist, ist dieser im [Hotfix Archiv](hotfix-archiv/index.md) zu finden.

Da es sich hierbei um Hotfixes handelt, empfehlen wir, diese nur einzuspielen, wenn diese für den sauberen Betrieb Ihrer Installation notwendig sind oder Sie durch den Support zur Verwendung aufgefordert werden. Bitte stellen Sie sicher, dass vor der Verwendung dieser Hotfixes ein [Backup von i-doit](../../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md) erstellt wurde.

Sollten Sie nach der Verwendung der Hotfixes mit dem Support in Kontakt treten, ergänzen Sie bitte den Hinweis auf dessen Verwendung.

!!! warning "**Einverständniserklärung**"
    Mit dem Herunterladen eines Hotfixes erklären Sie, dass Sie die oben genannten Hinweise vollständig gelesen und verstanden haben.

## Anwendung bei GNU/Linux

```sh
sudo cp i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip /var/www/html/
cd /var/www/html/
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

* * *

## i-doit core

### Use the unique identifier to match persons via LDAP sync when it is set (ID-11944)

[i-doit_37_hotfix_ID-11944_bc4eddf.zip :material-file-download:](../../assets/downloads/hotfixes/37/i-doit_37_hotfix_ID-11944_bc4eddf.zip){ .md-button .md-button--primary }

### Report Manager uses the wrong operator when there is a condition involving multiple objects (ID-11962)

[i-doit_37_hotfix_ID-11962_b7d8e76.zip :material-file-download:](../../assets/downloads/hotfixes/37/i-doit_37_hotfix_ID-11962_b7d8e76.zip){ .md-button .md-button--primary }

### Prevent position in rack from not showing results at report for vertically positioned objects (ID-12304)

[i-doit_37_hotfix_ID-12304_8d9eb35.zip :material-file-download:](../../assets/downloads/hotfixes/37/i-doit_37_hotfix_ID-12304_8d9eb35.zip){ .md-button .md-button--primary }

### Do load the report list quickly (ID-12336)

[i-doit_37_hotfix_ID-12336_7a5cbf6.zip :material-file-download:](../../assets/downloads/hotfixes/37/i-doit_37_hotfix_ID-12336_7a5cbf6.zip){ .md-button .md-button--primary }

* * *

## JDisc Connector

### Create jdisc:import option to get available devicegroup IDs (JDISC-84)

[jdisc_1.0.2_hotfix_JDISC-84_07b4534.zip :material-file-download:](../../assets/downloads/hotfixes/jdisc/jdisc_1.0.2_hotfix_JDISC-84_07b4534.zip){ .md-button .md-button--primary }

* * *

## Documents Add-on

### Turning off the auth system causes error when opening the administration (DOKU-526)

[Documents_1.11_hotfix_DOKU-526_919d515.zip :material-file-download:](../../assets/downloads/hotfixes/documents/Documents_1.11_hotfix_DOKU-526_919d515.zip){ .md-button .md-button--primary }

* * *

## Replacement Add-on

### TypeErrors when selecting objects to swap (SWAPCI-47)

[Swapci_1.6_hotfix_SWAPCI-47_c1d34a3.zip :material-file-download:](../../assets/downloads/hotfixes/swap-ci/Swapci_1.6_hotfix_SWAPCI-47_c1d34a3.zip){ .md-button .md-button--primary }

* * *

## Flows Add-on

### Fix AutomationsButtons is not assigned error in the GUI (FLOW-428)

!!! note "You need to install the fixed Version via the [Admin-Center](../admin-center.md)."

[hotfix-i-doit-flows-1.3.0.zip :material-file-download:](../../assets/downloads/hotfixes/flows/hotfix-i-doit-flows-1.3.0.zip){ .md-button .md-button--primary }
