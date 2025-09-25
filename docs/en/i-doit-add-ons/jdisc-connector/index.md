---
title: JDisc Connector
description: JDisc Connector Add-on
icon: addons/jdisc
status: new
lang: en
---

# JDisc Connector

## Overview

The **JDisc Connector** is an add-on for i-doit that enables automated import of IT objects from a JDisc instance. The integration is based on JDisc's GraphQL interface and allows precise synchronization of devices and their properties into the i-doit CMDB.

!!! warning "The add-on is available starting with **i-doit version 36**. The existing integration remains available as long as the add-on is not installed. Once the add-on is installed, it replaces the existing integration."

## Purpose of JDisc Integration in i-doit

The integration of JDisc Discovery into i-doit aims to combine the strengths of both systems:

- Automated data collection: Utilize JDisc's powerful scanning capabilities to automatically gather current and detailed inventory data.
- Centralized data storage and management: Transfer this data into the i-doit CMDB to create a centralized, consistent, and current database ("Single Source of Truth") for all IT assets.
- Reduced manual effort: Minimize manual data entry and maintenance, saving time and reducing error-proneness.
- Improved data quality: Ensure high data quality in the CMDB through regular, automated updates from JDisc.
- Informed decisions: Provide a solid data foundation for IT management tasks such as Change Management, License Management, Problem Management, and strategic planning.

* * *

## Requirements

- Separate JDisc installation
- i-doit version: >= 36
- JDisc with enabled GraphQL interface
- Network access to JDisc server
- User account in JDisc with read permissions (`postgresro`)

### Further Links:

* [JDisc Documentation](https://jdisc.com/support/documentation/)
* [JDisc Support](https://jdisc.com/support/)

* * *

## Installation

1. Download the add-on from the [Customer Portal](../../system-administration/customer-portal.md) and upload and install it via the [Admin Center](../../system-administration/admin-center.md)
   1. **or** install the add-on via the integrated [Add-on & Subscription Center](../../system-administration/add-on-and-subscription-center.md)
2. After installation, a new menu item appears in the Add-on menu

* * *

## Quick Start

1. Configure [Discovery Server](#discovery-server)
2. Test connection
3. Create [Sync Profile](#sync-profile)
4. Perform synchronization
5. Check [Status and Logs](#last-logs)

* * *

## Configuration

Settings that need to be configured to establish connection to the JDisc instance.

### Discovery Server

<!--[![discovery-server-common-settings-de](../../assets/images/de/i-doit-add-ons/jdisc-connector/discovery-server-common-settings-de.png)](../../assets/images/de/i-doit-add-ons/jdisc-connector/discovery-server-common-settings-de.png)-->

| Common Settings    | Description                                                   |
| ------------------ | ------------------------------------------------------------- |
| **Default Server** | Should this entry be used as default server for Sync Profiles |
| **Name**           | Name designation of the server entry                          |
| **Host**           | Host address or IP of the server running JDisc                |
| **Port**           | Port of the JDisc pgSQL installation                          |
| **Database**       | JDisc database name, usually `Inventory`                      |
| **Username**       | Username for the JDisc database                               |
| **Password**       | Password for the JDisc database                               |
| **Version Check**  | Only relevant for very old JDisc versions                     |

<!--[![discovery-server-common-settings-de](../../assets/images/de/i-doit-add-ons/jdisc-connector/discovery-server-discovery-settings-de.png)](../../assets/images/de/i-doit-add-ons/jdisc-connector/discovery-server-discovery-settings-de.png)-->

| Discovery Settings | Description                                    |
| ------------------ | ---------------------------------------------- |
| **Username**       | JDisc username, usually the Windows login name |
| **Password**       | JDisc user password                            |
| **Port**           | Port through which JDisc can be reached        |
| **Protocol**       | Protocol through which JDisc is accessible     |

<!--[![discovery-server-common-settings-de](../../assets/images/de/i-doit-add-ons/jdisc-connector/discovery-server-discovery-category-settings-de.png)](../../assets/images/de/i-doit-add-ons/jdisc-connector/discovery-server-discovery-category-settings-de.png)-->

| Discovery Category Settings | Description                                          |
| --------------------------- | ---------------------------------------------------- |
| **Timeout**                 | Value after which a timeout occurs                   |
| **Import Retries**          | Value that determines how often an import is retried |

!!! info "The settings can be checked after saving by displaying the created entry and clicking the buttons `Check Configuration`, `Check Discovery`, and `Check GraphQL`"

### Sync Profile

Configuration of rules for importing from JDisc.

#### General Configuration

Each Sync Profile requires a name and an assigned JDisc server.

<!--[![sync-profile-general-configuration-de](../../assets/images/de/i-doit-add-ons/jdisc-connector/sync-profile-general-configuration-de.png)](../../assets/images/de/i-doit-add-ons/jdisc-connector/sync-profile-general-configuration-de.png)-->

| General Configuration | Description                                        |
| --------------------- | -------------------------------------------------- |
| **Name**              | Name of the Sync Profile                           |
| **JDisc Server**      | JDisc Discovery Server entry used for this profile |
| **Description**       | Description of the profile                         |

#### Object Type Assignment

The columns `Object Title Transformation`, `FQDN Addition`, `Port Filter`, and `Location` must be manually enabled via column configuration.

Each `JDisc Type` is linked to an `i-doit Object Type`. If no `i-doit Object Type` is selected, it will not be imported. The [Import Matching Profile](../../system-administration/administration/import-and-interfaces/import-matching-profiles.md) is configured in [Administration](../../system-administration/administration/index.md) under `Import and Interfaces > Import Matching Profile`. Through the [Import Matching Profile](../../system-administration/administration/import-and-interfaces/import-matching-profiles.md) you can filter, for example, whether objects are imported that do not have certain attributes.

#### Synchronization Configuration

<!--[![sync-profile-sync-configuration-de](../../assets/images/de/i-doit-add-ons/jdisc-connector/sync-profile-sync-configuration-de.png)](../../assets/images/de/i-doit-add-ons/jdisc-connector/sync-profile-sync-configuration-de.png)-->

| Synchronization Configuration                       | Description                                                                                                                                                                                                                                                                |
| --------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **JDisc Group**                                     | If a JDisc group is selected here, only objects from this JDisc group will be imported                                                                                                                                                                                     |
| **Filter**                                          | Here it's possible to filter by IP addresses<br>If `IP Filter List` is selected, another field is displayed where IP addresses can be entered<br>Additionally, the field `Upload IP List from File` is displayed where a list with one IP address per line can be uploaded |
| **Import Mode**                                     | Here a preselection of the **Import Mode** to be used is possible                                                                                                                                                                                                          |
| **Override Overlapping Host Addresses**             | If a host address is already in use, it will be overwritten.                                                                                                                                                                                                               |
| **Logging**                                         | Configures how detailed the import log is                                                                                                                                                                                                                                  |
| **Regenerate Search Index After Successful Import** | Configures whether the search index is renewed so that new objects can be found via global search                                                                                                                                                                          |

#### General

| General                                                                           | Description                                                                                                                                                                                                        |
| --------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| **Select Categories**                                                             | Which [Categories](../../basics/categories-and-attributes.md) should be populated during import? Only categories that the import can handle are listed.                                                            |
| **MAC Filter (hidden)**                                                           | Only visible when category **Network Port** or **PC port** is activated. Either a whitelist or blacklist for MAC addresses can be chosen. One MAC address per line.                                                |
| **Update object Type**                                                            | If the device already exists as an object in i-doit, this determines whether the object type should be updated based on the assignment (see above) or not.                                                         |
| **Update object Title**                                                           | Should the object title be updated by the import?                                                                                                                                                                  |
| **Inherit Location of Parent Object**                                             | Devices that are physically connected to another device automatically receive the location of the connected device.                                                                                                |
| **Consider default templates from object types (only for newly created objects)** | When a new object is created, the [Template](../../efficient-documentation/templates.md) stored in the object type is automatically considered.                                                                    |
| **Change CMDB Status of objects to**                                              | Existing objects can receive a specific **[CMDB Status](../../basics/life-and-documentation-cycle.md)** when updating. If the **CMDB Status** should not be changed, select **Keep CMDB Status** in the selection. |
| **CMDB Status for newly imported objects**                                        | Newly created objects can receive a specific **[CMDB Status](../../basics/life-and-documentation-cycle.md)**. If the **CMDB Status** should not be changed, select **-** in the selection.                         |
| **Import custom attributes**                                                      | If custom attributes (**Custom Attributes**) are maintained in JDisc Discovery, they can be imported into i-doit. These are displayed in the **JDisc Custom Attributes** category after import.                    |

#### Software and Operating System

| Software and OS                                                        | Description                                                                                                                                                                                                                                                                                                                                                                                                                                           |
| ---------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Include Software**                                                   | Should inventoried software be imported as object type **Applications**?                                                                                                                                                                                                                                                                                                                                                                              |
| **Include Software** -> **Software Location**                          | Only visible when **Include Software** is activated. Sets the location of applications to a specific location. Useful when permissions are used based on locations.                                                                                                                                                                                                                                                                                   |
| **Import software licenses**                                           | Should inventoried software licenses be imported as object type **Licenses**?                                                                                                                                                                                                                                                                                                                                                                         |
| **Import system services**                                             | Should inventoried system services be imported as object type **System Service**?                                                                                                                                                                                                                                                                                                                                                                     |
| **Import cloud subscriptions**                                         | Should data from the **JDisc Cloud category** be imported?<br>Imported into the **Assigned Subscribers** category. The reverse category **Assigned Users** can be found in objects of type Licenses.                                                                                                                                                                                                                                                  |
| **Import create cloud users**                                          | Only applied when the option **Import Cloud Subscriptions** is active.                                                                                                                                                                                                                                                                                                                                                                                |
| **Use simple database modelling**                                      | Should the new or old [database logic](../../use-cases/documentation-of-databases.md) be used?                                                                                                                                                                                                                                                                                                                                                        |
| **Software Filter (hidden)**                                           | Only visible when the option **Include Software** is activated. Either a whitelist or blacklist of software applications can be specified that should be imported (whitelist) or not (blacklist). Wildcards (*) can be specified. The list of titles is separated by commas.                                                                                                                                                                          |
| **Use filter as regular expression**                                   | Use the software filter with strings or with regular expressions? Since the regex is forwarded directly to the JDisc database, the appropriate regex parameters should be used.<br>These can be found at [https://www.postgresql.org/docs/9.3/functions-matching.html](https://www.postgresql.org/docs/9.3/functions-matching.html)<br><br>User note:<br><br>\s cannot be used. Work with spaces here.<br>\d cannot be used. Work with [a-zA-Z] here. |
| **Use OS family (if available) instead of OS version as object title** | For software import, use the software family instead of the software version as object title. E.g., instead of "Windows Server 2008 Standard" only "Windows" with "Server 2008 Standard" as variant.                                                                                                                                                                                                                                                  |

#### Network

| Network                                                         | Description                                                                                                                                                                                      |
| --------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| **Import network interfaces as**                                | Inventoried network interfaces can be mapped in different categories.                                                                                                                            |
| **Import Connection endpoints**                                 | The connections are not imported into the Cabling category, but into the "Connection Endpoints" category. This allows distinguishing between manual cabling and automatic cabling through JDisc. |
| **Include layer 3 nets**                                        | Should inventoried IP networks be imported as object type **Layer-3 Networks**? If this option is set, the **Layer-3 Filter** is displayed.                                                      |
| **Include layer 3 nets** -> **Layer 3 filter**                  | Only visible when **Include layer 3 nets** is activated. Specify the range in the following formats: 127.0.0.1-127.0.10.255 or 10.40.55.0/24 or 10.40.55.7. One rule per line.                   |
| **Include layer 3 nets** -> **Network location**                | Only visible when **Include layer 3 nets** is activated. Sets the location of Layer-3 objects to a specific location. Useful when permissions are used based on locations.                       |
| **Keep IP address types**                                       | Should **IPv4 Addresses**, **IPv6 Addresses**, **Loopback Addresses**, **Virtual Addresses** be imported?                                                                                        |
| **Import type for DHCP IP addresses**                           | Should DHCP-assigned addresses be overwritten?                                                                                                                                                   |
| **Include VLANs**                                               | Should inventoried VLANs be imported as object type **Layer-2 Networks**?                                                                                                                        |
| **Include clusters**                                            | Should (virtualization) environments be imported as object type **Cluster**?                                                                                                                     |
| **Include Blade/Chassis connections during import**             | Should objects of type **Blade Server** be added to objects of type **Blade Chassis** during import?                                                                                             |
| **Object type of assigned modules within a blade/chassis unit** | If a Blade or Switch Chassis has been inventoried, the inserted modules can be assigned to a specific object type during import.                                                                 |
| **Update the object type of the assigned modules**              | Should the object types of assigned modules of a Blade/Chassis device be updated?                                                                                                                |
| **Use hostname as object title instead of FQDN?**               | If devices have an FQDN, they are resolved to the hostname.                                                                                                                                      |

* * *

## Device List

The device list shows all devices detected by the **JDisc Server**. At the top, the desired Discovery Server can be selected, next to it is a search function and a filter. Each row corresponds to a device. The columns display different attributes depending on the configuration, for example synchronization status, object type, IP address, or manufacturer.

The columns can be individually customized via the **Columns** dialog. There, fields can be shown or hidden. At the bottom of the list is the total number of devices and a pagination function for navigating through the pages.

!!! info "**The device list attempts to determine whether an object has already been synchronized based on serial number, MAC address, and device type.**"

### Actions

In the left **Actions** column, there are two symbols per device:

- **Link Button** - opens the JDisc detail view of the device in a new window.
- **Import Button** - Imports the device

* * *

## Dashboard

The JDisc Connector for i-doit simplifies the management of IT asset discovery and synchronization. The intuitive web interface provides central functions and status displays:

### Sync Info

Access to sync profiles and starting new synchronization runs. The profile defines the objects to be synchronized and import modes.

- **Open Sync settings**: Opens the sync profiles.
- **Start new sync**: Opens the dialog for selecting profile/import mode and starts the process.

## Discovery Info

Overview of the current state of the discovery process with starter button for new jobs.

- **Currently running discovery:** Shows the live status
- **Refresh:** Updates the discovery status
- **Open discovery server settings:** Opens the discovery server settings
- **Open device list:** Opens the device list
- **Start new discovery**: Selection of server, discovery job and shows the description. Start is possible via the dialog.

### Last Logs

Quick overview of the most recently executed jobs, including direct download of logs and status control.

- **Status:** Success or error directly visible
- **Action:** Download of the log

### Example Log Entries:

| ID  | Action | Start Date          | End Date            | Server Name | Profile Name | Status  | Log file                |
| --- | ------ | ------------------- | ------------------- | ----------- | ------------ | ------- | ----------------------- |
| 2   |        | 2025-09-04 12:47:48 | 2025-09-04 12:47:51 | JDisc 1     | Server       | Success | YYYY-MM-DD_hh-mm-ss.log |
| 1   |        | 2025-09-04 12:07:42 | 2025-09-04 12:24:33 | JDisc 1     | Server       | Error   | YYYY-MM-DD_hh-mm-ss.log |

* * *

## Permissions

Permissions for the JDisc Connector add-on are configured via the rights management in i-doit and can be assigned group-specifically. To use the add-on, appropriate access rights must be set for the individual components.

### Available Permission Areas

- **Dashboard**<br>
  Access to the central overview of the add-on

- **Device List**<br>
  View imported devices and their synchronization status

- **Sync Profile**<br>
  Create, edit, and execute synchronization profiles

- **Discovery Server**<br>
  Configuration and testing of JDisc server connection

- **Logs**<br>
  View and download log files for sync and discovery operations

Changes must be saved to take effect.

* * *

## Error Handling

- Test the Configuration
- Test Discovery Server settings and GraphQL
- Log analysis for errors

* * *

## Best Practices

- Test environment before production deployment
- Regular checking of device list and logs
- Maintenance of serial numbers and MAC addresses
- Documentation of Sync Profiles
