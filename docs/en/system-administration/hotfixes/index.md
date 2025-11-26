---
title: Hotfixes
description: Hotfixes for the most recent i-doit version
icon: fontawesome/solid/bug-slash
lang: en
---

# Hotfixes

!!! success "Hotfixes for version **36**"

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

### Importing objects with ports connected to other objects causes jdisc import to stop (ID-11914)

[i-doit_36_hotfix_ID-11914.zip :material-file-download:](../../assets/downloads/hotfixes/36/i-doit_36_hotfix_ID-11914.zip){ .md-button .md-button--primary }

* * *

## API Add-on

### Allow update of "layer3_assignments" property from "C__CATS__NET" (API-632)

When an Layer-3 Net assignment is altered, the entry is not overwritten.

[api_2.4_hotfix_API-632_9c15fb1.zip :material-file-download:](../../assets/downloads/hotfixes/api/api_2.4_hotfix_API-632_9c15fb1.zip){ .md-button .md-button--primary }

* * *

## JDisc Connector Add-on

### Save CMDB status for newly imported objects (JDISC-72)

!!! note "You need to install the fixed Version via the [Admin-Center](../admin-center.md)."

[hotfix-i-doit-jdisc-1.0.1.zip :material-file-download:](../../assets/downloads/hotfixes/jdisc/hotfix-i-doit-jdisc-1.0.1.zip){ .md-button .md-button--primary }

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
