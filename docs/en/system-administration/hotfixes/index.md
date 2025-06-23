---
title: Hotfixes
description: Hotfixes for the most recent i-doit version
icon: fontawesome/solid/bug-slash
lang: en
---

# Hotfixes

!!! success "Hotfixes for version **35**"

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

## Ldap-sync can not update person object \[ID-11764\]

[i-doit_35_hotfix_ID-11764_700a05e.zip :material-file-download:](../../assets/downloads/hotfixes/35/i-doit_35_hotfix_ID-11764_700a05e.zip){ .md-button .md-button--primary }

## Category is not displayed or the category list is empty and a PHP Fatal error is logged \[ID-11972\]

[i-doit_35_hotfix_ID-11972_553b6c1.zip :material-file-download:](../../assets/downloads/hotfixes/35/i-doit_35_hotfix_ID-11972_553b6c1.zip){ .md-button .md-button--primary }

## CSV import does not work when using object type assignment with the object type constant \[ID-11793\]

[i-doit_35_hotfix_ID-11973_ec07c28.zip :material-file-download:](../../assets/downloads/hotfixes/35/i-doit_35_hotfix_ID-11973_ec07c28.zip){ .md-button .md-button--primary }

## Flows Add-on

### Flows does not work with MySQL \[Flow-385\]

[Flows_1.1.0_hotfix_FLOW-385_5973795.zip :material-file-download:](../../assets/downloads/hotfixes/flows/Flows_1.1.0_hotfix_FLOW-385_5973795.zip){ .md-button .md-button--primary }

## Documents Add-on

### Rights for Templates in categories are not checked \[DOKU-502\]

[Documents_1.10_hotfix_DOKU-502_f8a6ec2.zip :material-file-download:](../../assets/downloads/hotfixes/documents/Documents_1.10_hotfix_DOKU-502_f8a6ec2.zip){ .md-button .md-button--primary }

## Replacement Add-on

### TypeErrors when selecting objects to swap \[SWAPCI-47\]

[Swapci_1.6_hotfix_SWAPCI-47_c1d34a3.zip :material-file-download:](../../assets/downloads/hotfixes/swap-ci/Swapci_1.6_hotfix_SWAPCI-47_c1d34a3.zip){ .md-button .md-button--primary }
