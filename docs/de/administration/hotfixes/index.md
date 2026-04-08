---
title: Hotfixes
description: Hotfixes für die aktuelle i-doit Version
icon: fontawesome/solid/bug-slash
lang: de
---

# Hotfixes

!!! success "Hotfixes für Version **38**"

Ein Hotfix beseitigt einen bestimmten Fehler und wird als ZIP-Datei bereitgestellt. Du entpackst die ZIP-Datei im **Installationsverzeichnis** von i-doit und bestätigst das Überschreiben vorhandener Dateien.

Hotfixes für ältere Versionen findest du im [Hotfix Archiv](hotfix-archiv/index.md).

!!! tip "Empfehlung"
    Spiele Hotfixes nur ein, wenn sie für den sauberen Betrieb deiner Installation notwendig sind oder der Support dich dazu auffordert. Erstelle vorher immer ein [Backup von i-doit](../../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md). Wenn du nach der Verwendung eines Hotfixes den Support kontaktierst, weise bitte darauf hin.

!!! warning "**Einverständniserklärung**"
    Mit dem Herunterladen eines Hotfixes erklärst du, dass du die oben genannten Hinweise vollständig gelesen und verstanden hast.

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

### Load category folders (ID-12359)

[i-doit_38_hotfix_ID-12359_2328dd6.zip :material-file-download:](../../assets/downloads/hotfixes/38/i-doit_38_hotfix_ID-12359_2328dd6.zip){ .md-button .md-button--primary }

### Enable URL encoded variables in category Access (ID-12361)

[i-doit_38_hotfix_ID-12361.zip :material-file-download:](../../assets/downloads/hotfixes/38/i-doit_38_hotfix_ID-12361.zip){ .md-button .md-button--primary }

### Prevent creation of orphaned relation when duplicating object (ID-12367)

[i-doit_35-38_hotfix_ID-12367_01bc42c.zip :material-file-download:](../../assets/downloads/hotfixes/38/i-doit_35-38_hotfix_ID-12367_01bc42c.zip){ .md-button .md-button--primary }

### Fix file list for old import files with special characters (ID-12376)

[i-doit_38_hotfix_ID-12376_4fd97c7.zip :material-file-download:](../../assets/downloads/hotfixes/38/i-doit_38_hotfix_ID-12376_4fd97c7.zip){ .md-button .md-button--primary }

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
