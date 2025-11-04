---
title: Hotfixes
description: Hotfixes für die aktuelle i-doit Version
icon: fontawesome/solid/bug-slash
lang: de
---

# Hotfixes

!!! success "Hotfixes für Version **36**"

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

## i-doit core

### Find the object when using Attach object of type = Automatic in CSV Import (ID-12143)

[i-doit_36_hotfix_ID-12143_6cf8641.zip :material-file-download:](../../assets/downloads/hotfixes/36/i-doit_36_hotfix_ID-12143_6cf8641.zip){ .md-button .md-button--primary }

### Do not validate position in rack when not positioned in rack (ID-12182)

[i-doit_36_hotfix_ID-12182_e8bd5f3.zip :material-file-download:](../../assets/downloads/hotfixes/36/i-doit_36_hotfix_ID-12182_e8bd5f3.zip){ .md-button .md-button--primary }

### Do not throw flows error when importing (ID-12183)

!!! info "If this error is displayed when importing via JDisc Connector"

    Import JDisc.ERROR: idoit\Module\SyneticsFlows\ConnectSignal\ObjectPurgedConnect::__invoke(): Argument #3 ($objectTitle) must be of type string, null given, called in /var/www/idoit/src/classes/modules/synetics_flows/src/ConnectSignal/Connect.php on line 17. File: /var/www/idoit/src/classes/modules/synetics_flows/src/ConnectSignal/ObjectPurgedConnect.php Line: 25

[i-doit_36_hotfix_ID-12183_5f2a1bb.zip :material-file-download:](../../assets/downloads/hotfixes/36/i-doit_36_hotfix_ID-12183_5f2a1bb.zip){ .md-button .md-button--primary }

### Prevent unnecessary HTML Purifier calls (ID-12202)

[i-doit_36_hotfix_ID-12202_ID-12203.zip :material-file-download:](../../assets/downloads/hotfixes/36/i-doit_36_hotfix_ID-12202_ID-12203.zip){ .md-button .md-button--primary }

* * *

## JDisc Connector Add-on

### Support new JDisc Version (JDISC-51) & (JDISC-54)

!!! note "You need to install the fixed Version via the [Admin-Center](../admin-center.md)."

[hotfix-idoit-jdisc-1.0.zip :material-file-download:](../../assets/downloads/hotfixes/jdisc/hotfix-idoit-jdisc-1.0.zip){ .md-button .md-button--primary }

* * *

## Documents Add-on

### Rights for Templates in categories are not checked (DOKU-502)

[Documents_1.10_hotfix_DOKU-502_f8a6ec2.zip :material-file-download:](../../assets/downloads/hotfixes/documents/Documents_1.10_hotfix_DOKU-502_f8a6ec2.zip){ .md-button .md-button--primary }

* * *

## Replacement Add-on

### TypeErrors when selecting objects to swap (SWAPCI-47)

[Swapci_1.6_hotfix_SWAPCI-47_c1d34a3.zip :material-file-download:](../../assets/downloads/hotfixes/swap-ci/Swapci_1.6_hotfix_SWAPCI-47_c1d34a3.zip){ .md-button .md-button--primary }
