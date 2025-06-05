---
title: Advanced Options for JDisc Import Profiles
description: Configuration and usage of JDisc Discovery with i-doit
icon:
status:
lang: en
---

# Advanced Options for JDisc Import Profiles

This article supplements the main page on [JDisc Discovery Integration](index.md) and describes the advanced configuration options for import profiles within i-doit.

## Matching Profiles

Matching profiles determine **how i-doit identifies a device** imported from JDisc. The goal is to prevent the same device from being imported multiple times.

### Relevant Criteria:

* **Serial Number** (recommended, if available)
* **MAC Address**
* **Hostname** / **FQDN**
* **Device Type (from JDisc)**

:material-information-outline: i-doit links JDisc devices with existing objects or creates a new one.

Further details on the matching strategy can be found here: [Object Identification during Imports](../object-identification-during-imports.md)

---

## Categories and Filters :page_facing_up:

!!! warning "Note on Visibility"
    Some options only appear if certain categories or higher-level options are enabled.

Through mapping, you define **which data from JDisc is written into which categories in i-doit**.

| Option                           | Description                                                                                                                                                                                                                      |
| -------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Select categories**            | Determines **which categories** are populated during import. Only those categories that the import can process (e.g., Ports, Software, VLANs etc.) are listed.                                                                   |
| **MAC filter** (hidden)          | Only visible if you have selected the category **Port** or **FC-Port**. Here you can create a **Whitelist** or **Blacklist** for MAC addresses (one address per line). This allows you to exclude specific devices, for example. |
| **Import network interfaces as** | Determines in which category the JDisc-collected network interfaces are created (e.g., as normal Ports or as special connections). This allows distinguishing between physical and virtual network interfaces.                   |

## :material-apps: Software Import

| Option                         | Description                                                                                                                                                                                 |
| ------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Include software**           | Should inventoried **Software** from JDisc be imported as objects of type **Anwendungen** into i-doit? Enable this option to import software data.                                          |
| **Software location** (hidden) | Visible only if **Include software** is active. Here you define to which **Location** all imported applications are assigned. This is useful when user rights are controlled via locations. |
| **Include software licenses**  | Should inventoried **software licenses** be imported as objects of type **Licenses**? These will then be stored in the **Licenses** category.                                               |
| **Import system services**     | Determines whether inventoried **System services** from JDisc should be imported as objects of type **System services**.                                                                    |

## :material-cloud: Cloud Services and Connections

| Option                          | Description                                                                                                                                                                                                                                        |
| ------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Import cloud subscriptions**  | Should data from the JDisc category **Cloud** be imported? If activated, JDisc cloud subscriptions are recorded in the i-doit category **Assigned Subscriptions**. The reverse category **Assigned Users** links the entries with License objects. |
| **Import unknown cloud users**  | Visible only if **Import cloud subscriptions** is active. Here you can determine whether **Users** who are assigned to cloud subscriptions in JDisc but do not yet exist in the CMDB system should also be imported.                               |
| **Import Connection endpoints** | Activate this option if you want a clear distinction between manual and automatic cabling. JDisc connections will then **not** be imported into the standard Cabling category, but into the special category **Connection endpoints**.             |

## :material-network: Network and Address Options

| Option                                | Description                                                                                                                                                                                                |
| ------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Use simple database modelling?**    | Here you choose whether the **new** or the **old** [database logic](../../use-cases/documentation-of-databases.md) should be used during import. The new logic is standard in current i-doit versions.     |
| **Include layer 3 nets**              | Should inventoried **IP Networks** from JDisc be created as objects of type **Layer 3-Net**? If activated, two further settings appear: **Layer 3 filter** and **Network location**.                       |
| **Layer 3 filter** (hidden)           | Visible only if **Include layer 3 nets** is activated. Here you specify IP ranges, e.g., `192.168.0.0/24` or `10.0.0.1-10.0.0.255`, one rule per line. Only networks within these ranges will be imported. |
| **Network location** (hidden)         | Visible only if **Include layer 3 nets** is activated. Sets a fixed **Location** under which all newly imported Layer 3-Net will be created. Useful for role-based permissions.                            |
| **Keep IP address types**             | Specifies which address types should be imported (IPv4, IPv6, Loopback, virtual IPs etc.). You can activate or deactivate certain types here.                                                              |
| **Import type for DHCP IP addresses** | Determines whether IP addresses assigned via DHCP should be overwritten. For example, you can choose not to import dynamically assigned addresses (if only static IPs should be in the CMDB).              |
| **Include VLANs**                     | Should inventoried **VLANs** from JDisc be imported as objects of type **Layer-2-Netze**? Activate this to map VLAN data in the CMDB.                                                                      |

## :material-layers: Virtualization and Blade/Chassis

| Option                                                              | Description                                                                                                                                                                                          |
| ------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Include clusters**                                                | Should JDisc cluster/virtualization environments be created as objects of type **Cluster**? Activate this if virtualization data (e.g., VMware/Hyper-V) should be imported.                          |
| **Include Blade/Chassis connections during import**                 | If JDisc has identified blade servers and chassis, you can specify here that the **connections** between blade and chassis should also be imported. This links blade modules with their chassis.     |
| **Object type of the assigned modules within a blade/chassis unit** | Visible after inventorying a Blade/Chassis device. Here you define which object type the deployed **Modules** should be assigned to. E.g., you can import modules as **Blade server** or **Switch**. |
| **Update the object type of the assigned modules**                  | Determines whether the object types of already assigned modules should be changed when updating a Blade/Chassis device. Deactivate this if existing module types should be retained.                 |

## :material-tune: Further Settings

| Option                                                                            | Description                                                                                                                                                                                                                                                |
| --------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Import custom attributes**                                                      | If custom attributes have been maintained in JDisc, they can be enabled here. After import, they will appear in the i-doit category **"JDisc Custom Attributes"**.                                                                                         |
| **Consider default templates from object types (only for newly created objects)** | When creating a new object, an i-doit template can be automatically applied. Select a template here that will be considered (settings in the object type configuration).                                                                                   |
| **Change CMDB-Status of objects to**                                              | Existing objects can be given a specific **CMDB-Status** during import. Choose, for example, "In Betrieb" or "Außer Betrieb" if you want to perform status changes during the update. If **Keep CMDB-Status** is selected, no change will occur.           |
| **CMDB status for newly imported objects**                                        | Analogous: Here you define which CMDB status newly created devices should receive. By default, this remains unchanged ("-" select).                                                                                                                        |
| **Software filter** (hidden)                                                      | Visible only if **Include software** is active. Here you can precisely define, via **Whitelist** or **Blacklist**, which software applications should be imported (Whitelist) or excluded (Blacklist). Enter a comma-separated list of names or wildcards. |
| **Use filter as regular expression**                                              | Activate **Filter as regexp** if you want to use regular expressions for the above list. Since the pattern is passed directly to the JDisc database, you should use compatible PostgreSQL RegEx.                                                           |
| **Use OS family (if available) instead of OS version as object title**            | *Note:* When importing software, it may be useful to use the operating system family instead of the full version name as the object title (e.g., "Windows" instead of "Windows Server 2012 Standard") to achieve better grouping.                          |
| **Update object type**                                                            | If a device already exists in i-doit, you can specify here whether its object type should be changed based on the assignment table (above). Deactivate this to retain the existing type.                                                                   |
| **Update object title**                                                           | Determines whether the **Objektname** is updated during import. Deactivate this if the original object title in i-doit should be retained.                                                                                                                 |
| **Use hostname as object title instead of FQDN?**                                 | If this option is active, only the hostname (without domain) will be used as the object title during import, provided an FQDN address exists. This can lead to shorter titles.                                                                             |
| **Inherit location of parent Object**                                             | For devices physically attached to another device: If this option is activated, the imported device automatically inherits the **Location** of its parent device.                                                                                          |

!!! tip "Note"
    If no entries are defined in a Whitelist (e.g., Software-Filter), it will not be considered, and all elements will be imported. For example, if you enter Office*, i-doit imports all software titles starting with "Office".

!!! note "Regex-Filter"
    If you want to use regular expressions for filters, refer to the PostgreSQL syntax. Example: To import only software with names ending in "_Pro", the Whitelist could be Office_* (without activating RegExp).

---

## See also

* [JDisc Discovery - Main Article](index.md)
* [Console import with profiles](../../automation-and-integration/cli/console/commands-and-options.md#import-jdisc)
* [Usage of INI files](../../automation-and-integration/cli/console/using-configuration-files-for-console-cli.md)
