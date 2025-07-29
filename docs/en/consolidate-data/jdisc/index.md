---
title: JDisc Discovery
description: Configuration and usage of JDisc Discovery with i-doit
icon: addons/jdisc
status:
lang: en
---

!!! warning "Important Note"
    Please create a complete backup **before any changes to an interface or an import**. If the result is not satisfactory, it can be easily restored.

[JDisc Discovery](http://www.jdisc.com/de/) is a discovery tool for automatic network inventory. It detects hardware, operating systems, software, networks, virtualization, and cluster environments. A practical example can be found on our [blog](https://www.i-doit.com/blog/it-service-management-mit-dem-discovery-tool-jdisc-und-i-doit/).

## Goal of JDisc Integration in i-doit

The integration of JDisc Discovery into i-doit aims to combine the strengths of both systems:

-  **Automated Data Collection**: Utilizing JDisc's powerful scan functions for automatic collection of current and detailed inventory data.
-  **Central Data Storage and Management**: Transferring this data into the i-doit CMDB to create a central, consistent, and up-to-date database ("Single Source of Truth") for all IT assets.
-  **Reduced Manual Effort**: Minimizing manual data entry and maintenance, thereby saving time and reducing error susceptibility.
-  **Improved Data Quality**: Ensuring high data quality in the CMDB through regular, automated updates from JDisc.
-  **Informed Decisions**: Providing a solid data foundation for IT management tasks such as Change Management, License Management, Problem Management, and strategic planning.

## Installation

JDisc Discovery is installed on Microsoft Windows (ideally as a server edition). During setup:

* Passwords for the PostgreSQL database are set:
  * `postgres`: Admin access
  * `postgresro`: Read-only access (required for i-doit)
* It must be specified that the PostgreSQL server is externally accessible (Port `25321`).
* Ensure that the Windows firewall frees the port.

Further links:

* [JDisc Documentation](https://jdisc.com/support/documentation/)
* [JDisc Support](https://jdisc.com/support/)

## Interface Configuration in i-doit

Path: **Administration → Import and interfaces → JDISC → JDisc configuration**

[![JDisc configuration](../../assets/images/en/consolidate-data/jdisc-discovery/1-jd.png)](../../assets/images/en/consolidate-data/jdisc-discovery/1-jd.png)

### General Settings

| Parameter                                | Description                                               |
| ---------------------------------------- | --------------------------------------------------------- |
| **Default Server**                       | Preselected during manual import.                         |
| **Title**                                | Internal name of the connection.                          |
| **Host**                                 | IP address or DNS name of the JDisc instance.             |
| **Port**                                 | PostgreSQL port of the JDisc database (`25321` Standard). |
| **Database**                             | Standard: `inventory`.                                    |
| **Username**                             | e.g. `postgresro`. Read-only access required.             |
| **Password**                             | Password belonging to the user.                           |
| **Allow import of older JDisc version?** | Only relevant for old JDisc versions.                     |

:material-arrow-right: With **Check connection**, connectivity can be tested.

### Discovery Settings (WebService / GraphQL)

JDisc can be remotely controlled via WebService or GraphQL, e.g., to trigger scans.

| Parameter    | Description                               |
| ------------ | ----------------------------------------- |
| **Username** | User for WebService/GraphQL access.       |
| **Password** | Password of the user.                     |
| **Port**     | Standard: `9000` (SOAP), `443` (GraphQL). |
| **Protocol** | `http` (SOAP), `https` (GraphQL).         |

!!! info "Note on GraphQL Integration"
    As of i-doit Version 22, the modern **GraphQL API** is recommended. Advantages:
    - Encrypted communication via HTTPS

:material-arrow-right: With **Check connection**, connectivity can be tested.

Additional archiving options:
Path: **Administration → [Tenant name] management → Settings for [Tenant name] → JDisc**

| Parameter                   | Description                                                                                                |
| --------------------------- | ---------------------------------------------------------------------------------------------------------- |
| **Threshold**               | Objects not scanned for longer than X days are archived.                                                   |
| **Threshold unit**          | Days, weeks, or months.                                                                                    |
| **Maximum import pause**    | After the maximum import pause (in minutes) is reached, the next activity will be triggered automatically. |
| **Paused import behaviour** | Cancel or continue the import after maximum import pause                                                   |

## Defining JDisc Profiles

Path: **Administration → Import and interfaces → JDISC → JDisc Profile**

[![JDisc Profile](../../assets/images/en/consolidate-data/jdisc-discovery/2-jd.png)](../../assets/images/en/consolidate-data/jdisc-discovery/2-jd.png)

A profile defines how JDisc data is assigned to object types and categories in i-doit.

### Settings

| Field            | Description                        |
| ---------------- | ---------------------------------- |
| **JDisc Server** | Assigned instance for the profile. |
| **Title**        | Name of the profile.               |
| **Description**  | Free text for documentation.       |

:material-arrow-right: The included profile **Example** can be used as a template.

## Import from the Web GUI

Path: **Extras → Import → JDisc**

[![Import GUI](../../assets/images/en/consolidate-data/jdisc-discovery/3-jd.png)](../../assets/images/en/consolidate-data/jdisc-discovery/3-jd.png)

### Import Modes

| Mode                                  | Behavior                                                                 |
| ------------------------------------- | ------------------------------------------------------------------------ |
| **Append**                            | Create all found objects, without checking if they already exist.        |
| **Only create newly scanned devices** | Only import objects newly detected in the current scan.                  |
| **Overwrite**                         | Fully re-import objects, clear existing list categories.                 |
| **Update**                            | Creates new objects and updates existing ones.                           |
| **Update (New inventory)**            | Resets all idoit-to-jdisc-device connections and allocates them freshly. |
| **Update (Existing only)**            | Update only existing objects, no new objects are created.                |

### Pausing the Import

The GUI allows:

* **Pause**: Interrupt process
* **Continue**: Resume import
* **Cancel**: Immediate stop, already imported objects remain.

These options are configurable under: **Administration → [Tenant name] management → Settings for [Tenant name] → JDisc**

## Category: JDisc Discovery (Objects)

Objects can be updated individually via JDisc data. Prerequisite: Serial number, Hostname, or FQDN is known.

[![JDisc Discovery](../../assets/images/en/consolidate-data/jdisc-discovery/6-jd.png)](../../assets/images/en/consolidate-data/jdisc-discovery/6-jd.png)

!!! note "GraphQL Required"
    The serial number is only displayed if the connection is via GraphQL.

## Automated Import via Console

Example call from the i-doit directory:

```bash
sudo -u www-data php console.php import-jdisc -c jdisc.ini
```

Example `jdisc.ini`:

```ini
[commandOptions]
user=admin
password=admin
tenantId=6
profile=1
server=2
mode=1
overwriteHost
detailedLogging=3
regenerateSearchIndex
```

:material-arrow-right: More details: [Using INI files](../../automation-and-integration/cli/configuration-files.md)

## Report views

### JDisc availability

Compares objects in i-doit with devices in JDisc.

### JDisc delete devices

!!! warning "Danger: Devices are deleted from JDisc"
This view deletes devices directly in JDisc. Always create a backup or snapshot first.

!!! info "Requires GraphQL"
This feature is only available with an active GraphQL connection.

---

## FAQ

If the import process exceeds the PHP `memory_limit` of 2G, add this to the [Expert Settings](../../system-administration/administration/tenant-management/expert-settings.md#expert-settings-tenant-related):

```ini
system.memory-limit.jdisc = 3G
```

---

For advanced topics such as matching profiles, category mapping, and additional options, refer to the related articles.

* [Advanced Options for JDisc Import Profiles](advanced-options.md)
* [Console import with profiles](../../automation-and-integration/cli/index.md#import-jdisc)
* [Usage of INI files](../../automation-and-integration/cli/configuration-files.md)
