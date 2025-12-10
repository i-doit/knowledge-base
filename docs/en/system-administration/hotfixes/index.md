---
title: Hotfixes
description: Hotfixes for the most recent i-doit version
icon: fontawesome/solid/bug-slash
lang: en
---

# Hotfixes

!!! success "Hotfixes for version **37**"

A hotfix fixes a specific error and is usually made available as a ZIP file. The ZIP file is extracted in the **installation directory** of i-doit. The prompt asking whether files should be overwritten when unpacking must be confirmed.

If a hotfix is required to update an older version, this can be found in the [Hotfix archive](hotfix-archive/index.md).

As these are hotfixes, we recommend that you only install them if they are necessary for the proper operation of your installation or if you are requested to do so by support. Please ensure that a [backup of i-doit](../../maintenance-and-operation/backup-and-recovery/index.md) has been created before using these hotfixes.

If you contact support after using the hotfixes, please add the reference to their use.

!!! warning "**Declaration of consent**"
    By downloading a hotfix you declare that you have read and understood the above mentioned notes completely.

## Application with GNU/Linux

```sh
sudo cp i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip /var/www/html/
cd /var/www/html/
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

* * *

## i-doit core

### Use the unique identifier to match persons via LDAP sync when it is set (ID-11944)

[i-doit_37_hotfix_ID-11944_bc4eddf.zip :material-file-download:](../../assets/downloads/hotfixes/37/i-doit_37_hotfix_ID-11944_bc4eddf.zip){ .md-button .md-button--primary }

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
