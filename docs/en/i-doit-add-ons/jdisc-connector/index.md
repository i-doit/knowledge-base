---
title: JDisc Connector
description: JDisc Connector Add-on
icon: addons/jdisc
status: new
lang: en
---

## Overview

The **JDisc Connector** is an add-on for i-doit that enables the automated import of IT objects from a JDisc instance. The integration is based on JDisc's GraphQL interface and allows precise synchronization of devices and their properties into the i-doit CMDB.

!!! warning "The add-on is available from **i-doit version 36** onwards. The previous integration remains as long as the add-on is not installed. Once the add-on is installed, it replaces the previous integration."

## Goal of the JDisc integration in i-doit

The integration of JDisc Discovery into i-doit aims to combine the strengths of both systems:

- Automated data collection: Using JDisc's powerful scan functions for automatic collection of current and detailed inventory data.
- Central data management: Transfer of this data into the i-doit CMDB to create a central, consistent, and current database ("Single Source of Truth") for all IT assets.
- Reduction of manual effort: Minimization of manual data entry and maintenance, saving time and reducing error susceptibility.
- Improved data quality: Ensuring high data quality in the CMDB through regular, automated updates from JDisc.
- Informed decisions: Providing a solid data foundation for IT management tasks such as change management, license management, problem management, and strategic planning.

* * *

## Prerequisites

- Separate JDisc installation
- i-doit Version: >= 36
- JDisc with activated GraphQL interface
- Network access to the JDisc server
- User account in JDisc with read permissions (`postgresro`)

### Further links:

* [JDisc Documentation](https://jdisc.com/support/documentation/)
* [JDisc Support](https://jdisc.com/support/)

* * *

## installation

1. Download the add-on from the [Kundenportal](../../administration/customer-portal.md) and upload and install it via the [Admin-Center](../../administration/admin-center.md)
   1. **or** install the add-on via the integrated [Add-on & Subscription Center](../../administration/add-on-and-subscription-center.md)
2. After installation, a new menu item appears in the add-on menu

* * *

## Quick start

1. [Discovery Server](#discovery-server) configure
2. Check connection
3. [Sync Profile](#sync-profile) Create
4. Perform synchronization
5. [Status and Logs](#last-logs) Check

* * *

## Configuration

Settings that must be configured to establish the connection to the JDisc instance.

### Discovery Server

<!--[![discovery-server-common-settings-de](../../assets/images/de/i-doit-add-ons/jdisc-connector/discovery-server-common-settings-de.png)](../../assets/images/de/i-doit-add-ons/jdisc-connector/discovery-server-common-settings-de.png)-->

| General settings   | Description                                                      |
| ------------------ | ---------------------------------------------------------------- |
| **default Server** | Should the entry be used as the default server for sync profiles |
| **Name**           | Name of the server entry                                         |
| **Host**           | Host address or IP of the server running JDisc                   |
| **Port**           | Port of the JDisc pgSQL installation                             |
| **Database**       | JDisc database name, usually `Inventory`                         |
| **username**       | Username for the JDisc database                                  |
| **Password**       | Password for the JDisc database                                  |
| **Version check**  | Only relevant for very old JDisc versions                        |

<!--[![discovery-server-common-settings-de](../../assets/images/de/i-doit-add-ons/jdisc-connector/discovery-server-discovery-settings-de.png)](../../assets/images/de/i-doit-add-ons/jdisc-connector/discovery-server-discovery-settings-de.png)-->

| Discovery settings | Description                                    |
| ------------------ | ---------------------------------------------- |
| **username**       | JDisc username, usually the Windows login name |
| **password**       | JDisc user password                            |
| **Port**           | Port through which JDisc can be reached        |
| **Protocol**       | Protocol via which JDisc is accessible         |

<!--[![discovery-server-common-settings-de](../../assets/images/de/i-doit-add-ons/jdisc-connector/discovery-server-discovery-category-settings-de.png)](../../assets/images/de/i-doit-add-ons/jdisc-connector/discovery-server-discovery-category-settings-de.png)-->

| Discovery category settings | Description                                               |
| --------------------------- | --------------------------------------------------------- |
| **Timeout**                 | Value after which a timeout occurs                        |
| **Import retries**          | Value that determines how many times an import is retried |

!!! info "The settings can be checked after saving by displaying the created entry and clicking the buttons `Configuration Check`, `Discovery Check` and `GraphQL Check` "

### Sync Profile

Configuration of the rules for importing from JDisc.

#### General configuration

Each sync profile requires a name and an assigned JDisc server.

<!--[![sync-profile-general-configuration-de](../../assets/images/de/i-doit-add-ons/jdisc-connector/sync-profile-general-configuration-de.png)](../../assets/images/de/i-doit-add-ons/jdisc-connector/sync-profile-general-configuration-de.png)-->

| General configuration | Description                                        |
| --------------------- | -------------------------------------------------- |
| **Name**              | Name of the sync profile                           |
| **Discovery Server**  | JDisc Discovery Server entry used for this profile |
| **Description**       | Description of the profile                         |

#### Object type assignment

The columns `Object Title Transformation`, `FQDN Suffix`, `Port Filter` and `Location` must be manually shown via the column configuration.

Each `JDisc type` is linked with an `i-doit object type`  If no `i-doit object type` is selected, the item will not be imported. The [Import Matching Profile](../../administration/management/import-and-interfaces/import-matching-profile.md) is configured in the [Administration](../../administration/management/index.md) under `Import and Interfaces > Import Matching Profile`. Via the [Import Matching Profile](../../administration/management/import-and-interfaces/import-matching-profile.md) you can for example filter whether objects are imported that do not have certain attributes.

#### Synchronization configuration

<!--[![sync-profile-sync-configuration-de](../../assets/images/de/i-doit-add-ons/jdisc-connector/sync-profile-sync-configuration-de.png)](../../assets/images/de/i-doit-add-ons/jdisc-connector/sync-profile-sync-configuration-de.png)-->

| Synchronization configuration                       | Description                                                                                                                                                                                                                                                                 |
| --------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **JDisc Gruppe**                                    | If a JDisc group is selected here, only objects from this JDisc group are imported                                                                                                                                                                                          |
| **Filter**                                          | Here you can filter by IP addresses<br>If `IP filter list` is selected, an additional field is displayed where the IP addresses can be entered<br>Additionally, the field `Upload IP list from file` is displayed where a list with one IP address per line can be uploaded |
| **Import Modus**                                    | Here a preselection of the **Import mode** to be used is possible                                                                                                                                                                                                           |
| **Overwrite overlapping host addresses**            | If a host address is already occupied, it will be overwritten                                                                                                                                                                                                               |
| **Logging**                                         | Configures how detailed the import log is                                                                                                                                                                                                                                   |
| **Regenerate search index after successful import** | Configures whether the search index is renewed so that the new objects can be found via the global search                                                                                                                                                                   |

#### General

| General                                                                           | Description                                                                                                                                                                                     |
| --------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Select categories**                                                             | Which [categoryn](../../basics/categories-and-attributes.md) should be populated during import? Only categories that the import can handle are listed.                                          |
| **MAC filter (hidden)**                                                           | Only visible when the category **Network port** or **PC port** is activated. Either a whitelist or a blacklist for MAC addresses can be selected. One MAC address per line.                     |
| **Update object type**                                                            | If the device already exists as an object in i-doit, you can determine whether the object type should be updated based on the assignment (see above) or not.                                    |
| **Update object name**                                                            | Should the object name be updated by the import?                                                                                                                                                |
| **Adopt location of the parent object**                                           | Devices that are physically connected to another device automatically receive the location of the connected device.                                                                             |
| **Consider default templates from object types (only for newly created objects)** | When a new object is created, the [Template](../../efficient-documentation/templates.md) stored in the object type is automatically applied.                                                    |
| **Change CMDB status of objects to**                                              | Existing objects can receive a specific **[CMDB-Status](../../basics/life-and-documentation-cycle.md)** . If the **CMDB status** should not be changed, select **Keep CMDB status**.            |
| **CMDB status for newly imported objects**                                        | Newly created objects can receive a specific **[CMDB-Status](../../basics/life-and-documentation-cycle.md)** erhalten. If the **CMDB status** should not be changed, select **-**.              |
| **Import custom attributes**                                                      | If in JDisc Discovery custom attributes (**Custom Attributes**) are maintained, they can be imported into i-doit. After import, they are displayed in the **JDisc Custom Attributes** category. |

#### Software and operating system

| Software and operating system                                                                      | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   |
| -------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Import all software**                                                                            | Should inventoried software be imported as object type **Applications**?                                                                                                                                                                                                                                                                                                                                                                                                                                                      |
| **Import all software** -> **Software location**                                                   | Only visible when **Import all software** is activated. Sets the location of applications to a specific location. Useful when permissions based on locations are used.                                                                                                                                                                                                                                                                                                                                                        |
| **Import software licenses**                                                                       | Should inventoried software licenses be imported as object type **Licenses**?                                                                                                                                                                                                                                                                                                                                                                                                                                                 |
| **Import system services**                                                                         | Should inventoried system services be imported as object type **System service**?                                                                                                                                                                                                                                                                                                                                                                                                                                             |
| **Import cloud subscriptions**                                                                     | Should data from the **JDisc Cloud category** be imported?<br>Imported into the **Assigned subscribers** category. The backward category **Assigned users** can be found in objects of the type Licenses.                                                                                                                                                                                                                                                                                                                     |
| **Create and import cloud users**                                                                  | Only applied when the **Import cloud subscriptions** option is active.                                                                                                                                                                                                                                                                                                                                                                                                                                                        |
| **Use simple database modeling**                                                                   | Should the new or the old [database logic](../../use-cases/documenting-databases.md) be used?                                                                                                                                                                                                                                                                                                                                                                                                                                 |
| **Software filter (hidden)**                                                                       | Only visible when the **Import all software** option is activated. Either a whitelist or a blacklist of software applications can be specified, which should be imported (whitelist) or not (blacklist). Wildcards (\*) can be specified. The list of titles is separated by commas.                                                                                                                                                                                                                                          |
| **Use filter as regular expression**                                                               | Use the software filter with strings or regular expressions? Since the regex is passed directly to the JDisc database, the appropriate regex parameters should be used.<br>These can be found at [h](https://www.postgresql.org/docs/9.3/functions-matching.html)[https://www.postgresql.org/docs/9.3/functions-matching.html](https://www.postgresql.org/docs/9.3/functions-matching.html) <br><br>Note from a user:<br><br>\s cannot be used. Spaces are used instead.<br>\d cannot be used. You must use [a-zA-Z] instead. |
| **Use operating system family (if available) instead of operating system version as object title** | Use the software family as object title for software import instead of the software version. E.g. instead of "Windows Server 2008 default" only "Windows" with "Server 2008 default" as variant.                                                                                                                                                                                                                                                                                                                              |

#### Network

| Network                                                           | Description                                                                                                                                                                                |
| ----------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| **Import network interfaces as**                                  | Inventoried network interfaces can be mapped in different categories.                                                                                                                      |
| **Import into network endpoints**                                 | The connections are not imported into the cabling category but into the "Connection endpoints" category. This allows distinguishing between manual cabling and automatic cabling by JDisc. |
| **Include all Layer 3 networks**                                  | Should inventoried IP networks be imported as object type **Layer 3 networks**? If this option is set, the **Layer 3 filter** is displayed.                                                |
| **Include all Layer 3 networks** -> **Layer 3 filter**            | Only visible when **Include all Layer 3 networks**is activated. Specify the range in the following formats: 127.0.0.1-127.0.10.255 or 10.40.55.0/24 or 10.40.55.7. One rule per line.      |
| **Include all Layer 3 networks** -> **Network location**          | Only visible when **Include all Layer 3 networks** is activated. Sets the location of Layer 3 objects to a specific location. Useful when permissions based on locations are used.         |
| **Keep IP address types**                                         | Should **IPv4 addresses**, **IPv6 addresses**, **loopback addresses**, **virtual addresses** be imported?                                                                                  |
| **Import type for DHCP IP addresses**                             | Should DHCP-assigned addresses be overwritten?                                                                                                                                             |
| **Include VLANs**                                                 | Should inventoried VLANs be imported as object type **Layer 2 networks**?                                                                                                                  |
| **Include clusters**                                              | Should (virtualization) environments be imported as object type **Cluster**?                                                                                                               |
| **Include blade/chassis connections during import**               | Should objects of type **Blade Server** be added to objects of type **Blade Chassis** during import?                                                                                       |
| **Object type of assigned modules within a blade/chassis device** | If a blade or switch chassis has been inventoried, the inserted modules can be assigned to a specific object type during import.                                                           |
| **Update object type of assigned modules**                        | Should the object types of the assigned modules of a blade/chassis device be updated?                                                                                                      |
| **Use hostname instead of FQDN as object title?**                 | If devices have an FQDN, it is resolved to the hostname.                                                                                                                                   |

* * *

## Device list

The device list shows all devices detected by the **Discovery Server**. At the top, the desired Discovery Server can be selected, alongside a search function and a filter. Each row corresponds to a device. Depending on the configuration, different attributes are displayed in the columns, for example such as the synchronization status, the object type, the IP address, or the manufacturer.

The columns can be individually customized via the **Columns** dialog. Fields can be shown or hidden there. At the bottom of the list, the total number of devices and a pagination function for navigating through the pages are displayed.

!!! info "**The device list attempts to determine whether an object has already been synchronized based on the serial number, MAC address, and device type.**"

### Actions

In the left column **Actions**, there are two icons per device:

- **Link button** - opens the JDisc detail view of the device in a new window.
- **Import button** - imports the device

* * *

## Dashboard

The JDisc Connector for i-doit simplifies the management of IT asset discovery and synchronization. The intuitive web interface provides central functions and status displays:

### Sync Info

Access to sync profiles and starting new synchronization runs. The objects to be synchronized and import modes are defined via the profile.

- **Open sync profiles**: Opens the sync profiles.
- **Start new sync**: Opens the dialog for selecting profile/import mode and starts the process.

## Discovery Info

Overview of the current state of the discovery process with a start button for new jobs.

- **Currently running discovery:** Shows the live status
- **Refresh:** Refreshes the discovery status
- **Open Discovery Server settings:** Opens the Discovery Server settings
- **Open device list:** Opens the device list
- **Start new discovery**: Selection of server, discovery job and shows the description. Starting is possible via the dialog.

### Latest logs

Quick overview of the most recently executed jobs, including direct download of logs and status monitoring.

- **Status:** Success or error directly visible
- **Action:** Download of the log

### Example log entries:

| ID  | Action | Start date          | End date            | Server name | Profile name | Status  | Log file                |
| --- | ------ | ------------------- | ------------------- | ----------- | ------------ | ------- | ----------------------- |
| 2   |        | 2025-09-04 12:47:48 | 2025-09-04 12:47:51 | JDisc 1     | Server       | Success | YYYY-MM-DD_hh-mm-ss.log |
| 1   |        | 2025-09-04 12:07:42 | 2025-09-04 12:24:33 | JDisc 1     | Server       | Error   | YYYY-MM-DD_hh-mm-ss.log |

* * *

## Permissions

The permissions for the JDisc Connector add-on are configured via the authorization management in i-doit and can be assigned per group. Appropriate access rights to the individual components must be set for using the add-on.

### Available permission areas

- **Dashboard**<br>
  Access to the central overview of the add-on

- **Device list**<br>
  View of the imported devices and their synchronization status

- **Sync Profile**<br>
  Create, edit, and execute synchronization profiles

- **Discovery Server**<br>
  Configuration and testing of the JDisc server connection

- **Logs**<br>
  View and download log files for sync and discovery operations

Changes must be saved for them to take effect.

* * *

### i-doit console utility permissions

To assign permissions for the i-doit console utility, the appropriate rights must be set in the authorization management. This allows users to use the console to perform JDisc Connector operations. The permission can be found under Administration and "Commands" is used as the condition.

- **JDiscCreateServerCommand**<br>
  Permission to create JDisc Discovery servers via the console

- **JDiscDiscoveryCommand**<br>
  Permission to start discovery jobs via the console

- **JDiscImportCommand**<br>
  Permission to start import jobs via the console

* * *

## i-doit Console Utility

The i-doit Console Utility enables the execution of specific tasks of the JDisc Connector add-on via the command line. This is particularly useful for automation and task scheduling.

| Command                                    | Internal system description                                                     |
| ------------------------------------------ | ------------------------------------------------------------------------------- |
| [jdisc:create-server](#jdisccreate-server) | Creates a JDisc server based on the specified inputs                            |
| [jdisc:discovery](#jdiscdiscovery)         | Starts a JDisc discovery (API access to the JDisc server is defined in the GUI) |
| [jdisc:import](#jdiscimport)               | Imports data from a JDisc server (SQL server access is defined in the GUI)      |

!!! info "This command is only available when the Maintenance add-on is installed"

### jdisc:create-server

Creates a JDisc server based on the specified inputs

**Options:**

| parameter (short version) | parameter (long version)        | Description                                                                               |
| ------------------------- | ------------------------------- | ----------------------------------------------------------------------------------------- |
|                           | --default                       | Set as default server                                                                     |
|                           | --title=TITLE                   | Name for the JDisc server configuration [Default: "JDisc Server"]                         |
|                           | --jdisc-host=JDISC-HOST         | JDisc-Host [Default: "localhost"]                                                         |
|                           | --jdisc-port=JDISC-PORT         | JDisc-Port [Default: 25321]                                                               |
|                           | --jdisc-database=JDISC-DATABASE | JDisc database [Default: "inventory"]                                                     |
|                           | --jdisc-username=JDISC-USERNAME | JDisc username [Default: "postgresro"]                                                    |
|                           | --jdisc-password=JDISC-PASSWORD | JDisc password                                                                            |
|                           | --allow-older-imports           | Allow import of older JDisc versions [Default: no]                                        |
| -u                        | --user=USER                     | Username of an authorized user                                                            |
| -p                        | --password=PASSWORD             | Password for authentication of the previously specified user                              |
| -i                        | --tenantId=TENANT-ID            | Tenant ID of the tenant to be used (default: 1)                                           |
| -h                        | --help                          | Help message for displaying further information                                           |
| -q                        | --quiet                         | Quiet mode to disable output                                                              |
| -V                        | --version                       | Display the i-doit Console version                                                        |
|                           | --ansi<br>--no-ansi             | Forces (or disables with --no-ansi) ANSI output                                           |
| -n                        | --no-interaction                | Disables all interaction questions of the i-doit Console                                  |
| -v / -vv / -vvv           | --verbose                       | Increases the output verbosity. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

```shell
sudo -u www-data php console.php jdisc-create-server --user admin --password admin --jdisc-username administrator --jdisc-password administrator --allow-older-imports
```

### jdisc:discovery

Performs a JDisc discovery (API access to the JDisc server is defined in the GUI)

**Options:**

| parameter (short version) | parameter (long version)                | Description                                                                               |
| ------------------------- | --------------------------------------- | ----------------------------------------------------------------------------------------- |
| -s                        | --server=SERVER                         | Name of the JDisc server                                                                  |
| -j                        | --discoveryJob=DISCOVERYJOB             | Selected "Discovery Job" [Default: "Discover all"]                                        |
| -d                        | --deviceHostname=DEVICEHOSTNAME         | Selected device by "Hostname"                                                             |
| -a                        | --deviceHostAddress=DEVICEHOSTADDRESS   | Selected device by "Host address"                                                         |
|                           | --deviceSerialNumber=DEVICESERIALNUMBER | Selected device by "Serial number"                                                        |
| -l                        | --showLog                               | Show the log output during discovery                                                      |
| -u                        | --user=USER                             | Username of a user authorized to perform the execution                                    |
| -p                        | --password=PASSWORD                     | Password for authentication of the previously specified user                              |
| -i                        | --tenantId=TENANT-ID                    | Tenant ID of the tenant to be used (default: 1)                                           |
| -h                        | --help                                  | Help message for displaying further information                                           |
| -q                        | --quiet                                 | Quiet mode to disable output                                                              |
| -V                        | --version                               | Display the i-doit Console version                                                        |
|                           | --ansi<br>--no-ansi                     | Forces (or disables with --no-ansi) ANSI output                                           |
| -n                        | --no-interaction                        | Disables all interaction questions of the i-doit Console                                  |
| -v / -vv / -vvv           | --verbose                               | Increases the output verbosity. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

```shell
sudo -u www-data php console.php jdisc:discovery --user admin --password admin --server SERVER --discoveryJob DISCOVERYJOB --deviceHostname DEVICEHOSTNAME --showLog
```

### jdisc:import

Imports data from JDisc (SQL server access is defined in the GUI.)

**Options:**

| parameter (short version) | parameter (long version)            | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             |
| ------------------------- | ----------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| -r                        | --profile=PROFILE                   | JDisc profile ID                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        |
| -g                        | --group[=GROUP]                     | Group ID                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
| -x                        | --mode=MODE                         | Possible import modes are:<br>1: Create - The import only creates new objects.<br>2: Update - The import tries to update already existing objects.<br>3: Overwrite - The import behaves like the update mode but deletes all list categories of the existing object.<br>4: Update (Newly inventoried) - The import deletes all existing identification keys before triggering the update mode. <br>5: Overwrite (Newly inventoried) - The import deletes all existing identification keys before triggering the overwrite mode.<br>6: Only create newly scanned devices - The import only creates newly scanned JDisc devices, existing ones are skipped.<br>7: Update (existing only) - Only existing objects are updated. No new objects are created. |
| -s                        | --server=SERVER                     | JDisc server ID                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         |
| -o                        | --overwriteHost                     | Overwrite overlapping host addresses                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    |
| -l                        | --detailedLogging[=DETAILEDLOGGING] | Possible log levels are:<br>1: Low log level, only notices and warnings are logged<br>2: In addition to the low log level, errors are logged<br>3: In addition to the normal log level, debug messages are logged. (Memory intensive)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   |
| -b                        | --regenerateSearchIndex             | Regenerate search index after successful import                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         |
|                           | --listProfiles                      | List all available profiles                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             |
|                           | --list-device-groups                | List all available device groups for the selected server                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
|                           | --list-servers                      | List all available JDisc servers                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        |
|                           | --ipFilter[=IPFILTER]               | IP filter, use a comma-separated string or a file with newline-separated addresses                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      |
| -u                        | --user=USER                         | Username of a user authorized to perform the execution                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  |
| -p                        | --password=PASSWORD                 | Password for authentication of the previously specified user                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            |
| -i                        | --tenantId=TENANT-ID                | Tenant ID of the tenant to be used (default: 1)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         |
| -h                        | --help                              | Help message for displaying further information                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         |
| -q                        | --quiet                             | Quiet mode to disable output                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            |
| -V                        | --version                           | Display the i-doit Console version                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      |
|                           | --ansi<br>--no-ansi                 | Forces (or disables with --no-ansi) ANSI output                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         |
| -n                        | --no-interaction                    | Disables all interaction questions of the i-doit Console                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
| -v / -vv / -vvv           | --verbose                           | Increases the output verbosity. (1 = normal output, 2 = detailed output, 3 = debug level)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               |

**Example of use**

```shell
sudo -u www-data php console.php jdisc:import --user admin --password admin --profile PROFILE --mode MODE --server SERVER --overwriteHost --detailedLogging DETAILEDLOGGING --regenerateSearchIndex
```

* * *

## Error handling

- Configuration check
- Discovery and GraphQL check
- Log analysis for errors

* * *

## Best practices

- Test environment before production use
- Regular check of the device list and logs
- Maintenance of serial numbers and MAC addresses
- Documentation of sync profiles

## Changelogs

| Version | Date       | Changelog                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               |
| ------- | ---------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| 1.0.4   | 2026.04-23 | [Bug] Create sync profile table when using MySQL 8.0+<br>[Bug] Make the open in jdisc button at device list functionable again<br>[Bug] Prevent error when switching jdisc groups at sync profiles <br>[Bug] Save the Object Type Assignment correctly<br>[Bug] Prevent error when saving sync profile<br>[Bug] Fix JDisc profile duplication<br>[Bug] Prevent layer-3 net blacklist to overwrite the whitelist selection<br>[Bug] Prevent JDisc import error when location is set in the profile<br>[Bug] Prevent software filter whitelist from overwriting blacklist if blacklist is selected<br>[Bug] Prevent cmdb-status setting from getting overwritten when saving jdisc profile<br>[Bug] Enable software location option at jdisc profile to be saved as empty |
| 1.0.3   | 2025-01-28 | [Improvement] Increase filter field limits<br>[Bug] Create jdisc:import option to get available devicegroup IDs<br>[Bug] JDisc import can not overwrite category JDisc Device Information and create multi-value entries in a single-value category<br>[Bug] Using the import-jdiscdiscovery command with SOAP causes php errors to be displayed<br>[Bug] Better JDisc Discovery connection testing and information                                                                                                                                                                                                                                                                                                                                                     |
| 1.0.2   | 2025-12-02 | [Bug] Save CMDB status for newly imported objects<br>[Bug] Prevent missing "JDisc Connector" in Add-ons menu after updating i-doit                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      |
| 1.0.1   | 2025-10-21 | [Bug][Sync Profiles] Checkboxes in new Sync Profiles are overwritten after Saving<br>[Bug][Device List] Enable Device List in JDISC Connector Add-On to load Devices                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    |
| 1.0     | 2025-09-16 | Initial release                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         |
| Version | Date       | Changelog                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               |
| ------- | ---------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------                                                                                                                                                                                                                                                                                                                                                     |
| 1.0.3   | 2025-01-28 | [Improvement] Increase filter field liwiths<br>[Bug] Create jdisc:import option to get available devicegroup IDs<br>[Bug] JDisc import can not overwrite category JDisc Device Information and create multi-value entries in a single-value category<br>[Bug] Using the import-jdiscdiscovery command with SOAP causes php errors to be displayed<br>[Bug] Better JDisc Discovery connection testing and information                                                                                                                                                                                                                                                                                                                                                    |
| 1.0.2   | 2025-12-02 | [Bug] Save CMDB status for newly imported objects<br>[Bug] Prevent missing "JDisc Connector" in Add-ons menu after updating i-doit                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      |
| 1.0.1   | 2025-10-21 | [Bug][Sync Profiles] Checkboxes in new Sync Profiles are overwritten after Saving<br>[Bug][Device List] Enable Device List in JDISC Connector Add-On to load Devices                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    |
| 1.0     | 2025-09-16 | Initial release                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         |
