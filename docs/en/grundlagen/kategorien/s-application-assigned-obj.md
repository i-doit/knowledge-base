---
title: "Category: installation"
description: Documentation of the specific installation category in i-doit
icon:
status:
lang: en
---

# Category: installation

The **installation** category is a **specific category** for the object types **Application**, **Operating System**, and **Service**. It shows on which hosts this software is installed. It is a **multi-value category** -- any number of assigned hosts are listed per software object.

!!! tip "Reverse view -- read, not write"
    This category is the **reverse view** of the global [Software Assignment](application.md) category. The data is not maintained here, but rather on the host objects (servers, clients) via the Software Assignment category. When you assign an application to a server, that server automatically appears in the installation category of the application object. The principle is analogous to other reverse links in i-doit: The data is maintained in one place and only displayed in the other.

## Usage

Typical use cases:

- **Viewing installation status**: Open an application object such as "Microsoft SQL Server" and navigate to the installation category. You can immediately see at a glance all servers and clients on which this software is assigned -- including version, variant, and license assignment. This eliminates the need to search through individual host objects and answers the question "Where does this software run?" in seconds.
- **Impact analysis for software changes**: When a major update or an end-of-life announcement is imminent, this category shows the complete list of affected hosts. If, for example, Java 11 is being retired, you find all systems that need to be migrated here -- without having to create a separate report.
- **Verifying license utilization**: The number of entries in this category corresponds to the number of installations. Compared with the "Number of installations" field in the [Applications (specific)](s-application.md) category or the available licenses in the license object, it immediately becomes apparent whether over- or under-licensing exists.
- **Tracking rollout progress**: During a company-wide software introduction, the category shows the current status: Which hosts have already been assigned the software, and which are still missing?
- **Audit preparation**: During license audits, the manufacturer requires a list of all installations. This category provides exactly that -- exportable via the API or the Report Manager.

[![installation](../../assets/images/de/grundlagen/kategorien/s-application-assigned-obj.png)](../../assets/images/de/grundlagen/kategorien/s-application-assigned-obj.png)

## Fields

The category displays the following fields, which originate from the [Software Assignment](application.md) on the respective host objects:

### Installed on

The host object on which the application is installed -- e.g. a server, client, or virtual machine. Clicking on the object takes you directly to the host and its software assignment.

### Type

The type of assignment -- operating system, software, firmware, or service. Taken from the software assignment on the host.

### Priority

Indicates whether the software is considered the primary or secondary application on the host.

### Assigned license

The license assigned to the host for this application -- imported directly from the software assignment.

### Assigned license key

The specific license key assigned to the host, if stored in the software assignment.

### Target database schema

Link to the database schema that the application uses on this host.

### Assigned IT service

If the installation is assigned to an IT service, it is displayed here.

### Variant

The selected variant of the application (e.g. Enterprise, default), as stored in the software assignment on the host. The available variants are defined in the [Variants](s-application-variant.md) category on the application object.

### Version number

The specific version installed on the host.

### Inherit Nagios services

Controls whether Nagios services are inherited from the application to the host. Only relevant when the Nagios integration is active.

### Used databases

Links to database objects that are used by this application on the host.

### Installed on (date)

The date on which the software was installed on this host.

### Description

Free text from the software assignment on the host.

!!! warning "No direct editing"
    All fields in this category are a **reverse view**. Changes must be made on the respective host object in the [Software Assignment](application.md) category. This also applies to the API: To change an installation, use `C__CATG__APPLICATION` on the host object.

## Technical Reference

| Property | Value |
|---|---|
| **Category Constant** | `C__CATS__APPLICATION_ASSIGNED_OBJ` |
| **Type** | Specific category |
| **Multi-Value** | Yes |
| **Assigned to** | Application, Operating System, Service |

### Fields (API Reference)

| Field | API Key | Type |
|---|---|---|
| **Installed on** | `object` | Object browser (link) |
| **Type** | `application_type` | Dialog (selection) |
| **Priority** | `application_priority` | Dialog (selection) |
| **Assigned license** | `assigned_license` | Object browser (link) |
| **Assigned license key** | `assigned_license_key` | Text |
| **Target database schema** | `assigned_database_schema` | Object browser (link) |
| **Assigned IT service** | `assigned_it_service` | Object browser (link) |
| **Variant** | `assigned_variant` | Dialog (selection) |
| **Version number** | `assigned_version` | Dialog (selection) |
| **Inherit Nagios services** | `bequest_nagios_services` | Dialog (selection) |
| **Used databases** | `assigned_databases` | Object browser (link) |
| **Installed on (date)** | `installDate` | Date/Time |
| **Description** | `description` | Text field (multi-line) |

### API Examples

#### Read Entries

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.read",
    "params": {
        "apikey": "your-api-key",
        "object": 456,
        "category": "C__CATS__APPLICATION_ASSIGNED_OBJ"
    },
    "id": 1
}
```

!!! note "Read-only via the API"
    Since this is a reverse link, installations are not created or changed through this category. Instead, use `C__CATG__APPLICATION` on the respective host object to create, change, or delete software assignments. Example: To assign "Apache HTTP Server" to the server with ID 789, send the `cmdb.category.save` request with `"object": 789` and `"category": "C__CATG__APPLICATION"`.
