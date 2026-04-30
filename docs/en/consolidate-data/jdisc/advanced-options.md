---
title: Advanced options for JDisc import profiles
description: Configuration and usage of JDisc Discovery with i-doit
icon:
status:
lang: en
---

# Advanced options for JDisc import profiles

This article supplements the main page on [JDisc Discovery Integration](index.md) and describes the advanced configuration options of import profiles within i-doit.

[![Advanced Options](../../assets/images/de/daten-konsolidieren/jdisc/advanced-options.png)](../../assets/images/de/daten-konsolidieren/jdisc/advanced-options.png)

## Matching profiles

Matching profiles determine **how i-doit identifies a device** that was imported from JDisc. The goal is to prevent the same device from being imported multiple times.

### Relevant criteria:

* **Serial number** (recommended when available)
* **MAC address**
* **Hostname** / **FQDN**
* **Device type (from JDisc)**

:material-information-outline: i-doit links JDisc devices with existing objects or creates a new one.

Further details on the matching strategy can be found at: [Object identification during imports](../identify-objects-during-imports.md)

---

## Categories and filters :page_facing_up:

!!! warning "Note on visibility"
    Some options only appear when certain categories or parent options are enabled.

Through the mapping you define **which data from JDisc is written to which categories in i-doit**.

| Option                                  | Description                                                                                                                                                                                                                                                          |
| --------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Select categories**                | Defines **which categories** are populated during import. Only those categories are listed that the import process can handle (e.g. Ports, Software, VLANs, etc.). If no category is selected, only the General category is populated.                   |
| **MAC filter** (hidden)              | Only visible if you have selected the **Port** or **FC Port** category. Here you can create a **whitelist** or **blacklist** for MAC addresses (one address per line). This allows you to exclude certain devices, for example. |
| **Import network interfaces as** | Determines in which category the JDisc-discovered network interfaces are created (e.g. as normal ports or as special connectors). This allows you to map differences between physical and virtual network interfaces.                |

## :material-apps: Software import

| Option                                           | Description                                                                                                                                                                                                           |
| ------------------------------------------------ | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Consider software during import**         | Should inventoried **software** from JDisc be imported as objects of the type **Applications** in i-doit? Enable this option to adopt software data.                                              |
| **Software location** (hidden)                 | Only visible when *Software import* is active. Here you specify which **location** all imported applications are assigned to. This is useful when user permissions are controlled via locations. |
| **Consider software licenses during import** | Should inventoried **software licenses** be imported as objects of the type **Licenses**? These are then stored in the **Licenses** category.                                                               |
| **Import system services**                    | Defines whether inventoried **system services** from JDisc should be imported as objects of the type **System service**.                                                                                                |

## :material-cloud: Cloud services and connections

| Option                                    | Description                                                                                                                                                                                                                                                                          |
| ----------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Import cloud subscriptions**      | Should data from the JDisc **Cloud** category be imported? When activated, JDisc cloud subscriptions are recorded in the i-doit category *Assigned subscribers*. The reverse category **Assigned users** links the entries with license objects.                 |
| **Import unknown cloud users** | Only visible when *Import cloud subscriptions* is active. Here you can determine whether **users** should also be adopted who are assigned to cloud subscriptions in JDisc but do not yet exist in the CMDB system.                                                     |
| **Import connection endpoints**     | Enable this option if you want a clear distinction between manual and automatic cabling. JDisc connections are then **not** imported into the default cabling category but into the special category **"Connection endpoints"**. |

## :material-network: Network and address options

| Option                                        | Description                                                                                                                                                                                                                      |
| --------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Use simple database modeling?** | Here you select whether the **new** or the **old** database logic should be used during import. The new logic is the default in current i-doit versions.                                                               |
| **Consider Layer-3 networks during import** | Should inventoried **IP networks** from JDisc be created as objects of the type **Layer-3 networks**? When activated, two additional settings appear: *Layer-3 filter* and *Network location*.                               |
| **Layer-3 filter** (hidden)                | Only visible when *Consider Layer-3 networks* is enabled. Here you specify IP ranges, e.g. `192.168.0.0/24` or `10.0.0.1-10.0.0.255`, one rule per line. Only networks within these ranges are imported. |
| **Layer-3 location** (hidden)              | Only visible when *Consider Layer-3 networks* is enabled. Sets a fixed **location** under which all newly imported Layer-3 networks are created. Useful for role-based permissions.                 |
| **Keep IP address types**                | Specifies which address types should be adopted (IPv4, IPv6, loopback, virtual IPs, etc.). You can enable or disable certain types here.                                                                    |
| **Import type for DHCP IP addresses**            | Defines whether IP addresses assigned via DHCP should be overwritten. For example, you can choose that dynamically assigned addresses are not imported (if only static IPs should go into the CMDB). |
| **Consider VLANs during import**         | Should inventoried **VLANs** from JDisc be imported as objects of the type **Layer-2 networks**? Enable this to map VLAN data in the CMDB.                                                                     |

## :material-layers: Virtualization and Blade/Chassis

| Option                                     | Description                                                                                                                                                                                                                         |
| ------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| **Consider clusters during import**    | Should JDisc cluster/virtualization environments be created as objects of the type **Cluster**? Enable this when virtualization data (e.g. VMware/Hyper-V) should be adopted.                                      |
| **Import Blade/Chassis connections** | If JDisc has inventoried blade servers and chassis, you can specify here that the **connections** between blade and chassis are also imported. This links blade modules with their chassis.                   |
| **Object type of modules**                   | Visible after inventorying a blade/chassis device. Here you specify which object type the used **modules** should be assigned to. For example, you can import modules as *Blade server* or *Switch*. |
| **Update object type of modules**     | Defines whether the object types of already assigned modules should be changed when updating a blade/chassis device. Disable this if existing module types should be preserved.                      |

## :material-tune: Additional settings

| Option                                       | Description                                                                                                                                                                                                                                                                                          |
| -------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Import custom attributes**            | If custom attributes have been maintained in JDisc, they can be enabled here. After import, they appear in the i-doit category **"JDisc Custom Attributes"**.                                                                                                                 |
| **Consider default templates**       | When creating a new object, an i-doit template can be automatically applied. Select a template here that should be considered (settings in the object type configuration).                                                                                                             |
| **CMDB status (on update)**         | Existing objects can receive a specific **CMDB status** during import. Select e.g. "In operation" or "Out of operation" if you want to perform status changes during update. If *Keep CMDB status* is selected, no change is made.                                     |
| **CMDB status (on creation)**              | Analogous: Here you specify which CMDB status newly created devices should receive. By default this remains unchanged (select "-").                                                                                                                                                       |
| **Software filter** (hidden)              | Only visible when *Import software* is active. Here you can specify via a **whitelist** or **blacklist** exactly which software applications should be imported (whitelist) or skipped (blacklist). Enter a comma-separated list of names or wildcards. |
| **Use filter as regexp?**             | Enable *Filter as regexp* if you want to use regular expressions for the list above. Since the pattern is passed directly to the JDisc database, you should use compatible PostgreSQL regex.                                                                                |
| **Use OS family instead of OS version**    | *Note:* During software import, it may make sense to use the operating system family instead of the full version name as the object title (e.g. "Windows" instead of "Windows Server 2012 Standard") to achieve better groupings.                                              |
| **Update object type**                  | If a device already exists in i-doit, you can set here whether its object type should be changed based on the assignment table (above). Disable this to keep the existing type.                                                                                       |
| **Update object title**                | Defines whether the **object name** should be updated during import. Disable this if the original object title in i-doit should be preserved.                                                                                                                                            |
| **Use hostname instead of FQDN as title** | If this option is active, only the hostname (without domain) is used as the object title during import, provided an FQDN address is available. This can lead to shorter titles.                                                                                                                             |
| **Inherit location**                        | For devices that physically depend on another device: if this option is enabled, the imported device automatically inherits the **location** of its parent device.                                                                                                                         |

!!! tip "Note"
    If no entries are defined in a whitelist (e.g. software filter), it is not considered and all elements are imported. For example, entering Office* causes i-doit to import all software titles starting with "Office".

!!! note "Regex filter"
    If you want to use regular expressions for filtering, note the PostgreSQL syntax. Example: to import only software with names ending in "_Pro", the whitelist could be Office_* (without enabling RegExp).

---

## Advanced options

In addition to categories and matching, i-doit offers numerous import filters and modifications, including:

| Option                                                | Description                                                                     |
| ----------------------------------------------------- | ----------------------------------------------------------------------------- |
| **Set CMDB status**                                | Automatically set objects to e.g. "In operation" during import                  |
| **Update title**                               | Replace existing object titles with JDisc data                             |
| **MAC filter**                                        | Only allow certain MAC addresses (whitelist) or exclude them (blacklist) |
| **IP filter / Layer-3 filter**                        | Only import defined networks (CIDR or IP range)                       |
| **Import of software, licenses, services, clusters** | Optionally activatable                                                          |
| **Inherit locations**                          | Automatically adopt parent locations (e.g. for blade-chassis)       |

A complete list of filters can be found in the "Additional Options" dialog when editing a JDisc profile.

---
