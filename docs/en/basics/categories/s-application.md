---
title: "Category: Applications (Specific)"
description: Documentation of the specific Applications category in i-doit
icon:
status:
lang: en
---

# Category: Applications (Specific)

The **Applications** category is a **specific category** for the object type **Application** and describes the master data of a software product. It is a **single-value category** -- exactly one entry exists per application object with the fundamental properties such as specification, manufacturer, installation type, and registration key.

!!! info "Master data vs. installation -- a common misunderstanding"
    This category describes **what** an application **is** -- its identity and master data. It does not answer the question of **where** the application is installed. That is the responsibility of the global [Software Assignment](application.md) category, which is maintained on the target hosts (servers, clients). The separation follows a core i-doit principle: Software is maintained as an independent object with its own master data and then assigned to any number of hosts -- without duplicating data.

## Usage

Typical use cases:

- **Building a software catalog**: Create an object of the type Application for every software deployed in the organization and maintain the master data here. Together with the [Variants](s-application-variant.md) and Versions categories, this creates a central software catalog that all software assignments reference. The [installation](s-application-assigned-obj.md) category then automatically shows on which hosts this software is assigned.
- **Manufacturer overview**: Through the manufacturer field, you can evaluate via reports which software from which manufacturers is in use -- useful for vendor management, contract negotiations, and risk analyses (dependency on a single provider).
- **Documenting installation type**: The Installation type field distinguishes between different deployment models. This information is crucial for planning rollouts and migrations: A SaaS product requires no local uninstallation during a server change, while a classic installation does.
- **Centralized license key management**: The registration key is maintained here on the software object -- not on every individual host. This avoids redundancy and ensures that the key only needs to be updated in one place, e.g. during a license renewal.
- **Installation count and path**: The Installation count and Installation path fields document the standard installation path and the expected number of installations -- reference values for deployment automation and license planning.

[![Applications (specific)](../../assets/images/de/grundlagen/kategorien/s-application.png)](../../assets/images/de/grundlagen/kategorien/s-application.png)

## Fields

### Specification

Free text field for further description or specification of the application, e.g. `Web server for internal portals` or `ERP system production`. Usage purpose, technical requirements, or configuration notes that go beyond the object name can be stored here.

### Manufacturer

The manufacturer or publisher of the software, e.g. `Microsoft`, `Apache Software Foundation`, `SAP`. Dialog+ field -- custom values can be added as needed. In conjunction with reports, this field enables evaluations such as "All applications from manufacturer Oracle" or "Number of deployed software products per manufacturer."

### Installation type

Describes how the application is typically provisioned. Dialog field with predefined values. The distinction has practical consequences: During a server migration, locally installed software needs to be redeployed, while browser-based or SaaS applications only require a configuration change.

### Registration key

The license or registration key of the software, e.g. `XXXXX-XXXXX-XXXXX-XXXXX-XXXXX`. Maintained centrally on the application object so that it does not need to be stored individually on every host.

!!! warning "Security note"
    Registration keys are sensitive data. Ensure that access rights in i-doit are configured so that only authorized persons (e.g. license managers, IT procurement) can view this field. The permission system in i-doit allows restriction at the category level.

### Installation path

The standard installation path of the application on the target system, e.g. `C:\Program Files\Microsoft SQL Server` or `/opt/application`. This value serves as a reference for deployment scripts and troubleshooting -- it describes the **expected** path, not the actual path on every individual host.

### Installation count

The planned or permitted number of installations. This value can serve as a reference for license management: If the license allows 50 installations, the value is `50`. Compared with the actual number of entries in the [installation](s-application-assigned-obj.md) category, it immediately becomes apparent whether the limit has been reached.

### Description

Free text for additional details: usage purpose, license model notes, known incompatibilities, links to manufacturer documentation, or internal responsibilities (e.g. "Subject matter owner: Middleware team").

## Technical Reference

| Property | Value |
|---|---|
| **Category Constant** | `C__CATS__APPLICATION` |
| **Type** | Specific category |
| **Multi-Value** | No |
| **Assigned to** | Application |

### Fields (API Reference)

| Field | API Key | Type |
|---|---|---|
| **Specification** | `specification` | Text |
| **Manufacturer** | `manufacturer` | Dialog+ (extensible selection) |
| **Installation type** | `installation` | Dialog (selection) |
| **Registration key** | `registration_key` | Text |
| **Installation path** | `install_path` | Text |
| **Installation count** | `installation_count` | Integer |
| **Description** | `description` | Text field (multi-line) |

### API Examples

#### Create Entry

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "your-api-key",
        "object": 456,
        "category": "C__CATS__APPLICATION",
        "data": {
            "specification": "Zentraler web server für interne Portale und Reverse-Proxy",
            "manufacturer": "Apache Software Foundation",
            "installation": 2,
            "registration_key": "",
            "install_path": "/etc/apache2",
            "installation_count": 12,
            "description": "Open-Source-web server. Fachverantwortung: Team Middleware."
        }
    },
    "id": 1
}
```

#### Read Entries

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.read",
    "params": {
        "apikey": "your-api-key",
        "object": 456,
        "category": "C__CATS__APPLICATION"
    },
    "id": 2
}
```

#### Update Entry

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "your-api-key",
        "object": 456,
        "category": "C__CATS__APPLICATION",
        "entry": 1,
        "data": {
            "installation_count": 15,
            "description": "Open-source web server. 2026-04: installation count increased to 15 after rollout at site Berlin."
        }
    },
    "id": 3
}
```
