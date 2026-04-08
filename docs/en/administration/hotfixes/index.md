---
title: Hotfixes
description: Hotfixes for the current i-doit version
icon: fontawesome/solid/bug-slash
lang: en
---

# Hotfixes

!!! success "Hotfixes for version **37**"

A hotfix fixes a specific bug and is provided as a ZIP file. You extract the ZIP file in the **installation directory** of i-doit and confirm overwriting existing files.

Hotfixes for older versions can be found in the [Hotfix Archive](hotfix-archiv/index.md).

!!! tip "Recommendation"
    Only apply hotfixes if they are necessary for the proper operation of your installation or if support requests you to do so. Always create a [backup of i-doit](../../wartung-und-betrieb/daten-sichern-und-wiederhfirstllen/index.md) beforehand. If you contact support after applying a hotfix, please mention that you have done so.

!!! warning "**Consent**"
    By downloading a hotfix, you confirm that you have fully read and understood the above notices.

## Application on GNU/Linux

```sh
sudo cp i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip /var/www/html/
cd /var/www/html/
sudo -u www-data unzip i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip
sudo rm i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip
```

## Application on Windows

[![Extract](../../assets/images/de/administration/hotfixes/example-windows-zip.png)](../../assets/images/de/administration/hotfixes/example-windows-zip.png)

Path for the **i-doit Windows installer**:

```txt
C:\ProgramData\i-doit\apache-2.4\htdocs
```

Path for the **i-doit Discovery installer**:

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
