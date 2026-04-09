---
title: "Category: Service"
description: Documentation of the Service category in i-doit
icon:
status:
lang: en
---

# Category: Service

The **Service** category documents the master data of an IT service object. It is a **specific category** available for the object type **Service**. Here, fundamental properties such as specification, manufacturer, installation type, and license information are recorded -- the technical foundation on which service assignments, SLAs, and business criticality assessments are built.

!!! info "Service vs. IT Service"
    The **Service** (`C__CATS__SERVICE`) describes the technical master data of a service object (software product, daemon). For mapping business processes, SLA assignments, and criticality assessments, the [IT Service](it-service.md) category is available. Both categories complement each other: Service provides the "what," IT Service provides the "how important."

## Usage

Typical use cases:

- **Building a service catalog**: Record the specification, manufacturer, and installation type for every service. This creates a structured service catalog that serves as the foundation for ITSM processes. A report on all services with manufacturer and installation status shows at a glance which services are in use.
- **License management**: Through the registration key and the number of installations, you can track how many instances of a service are licensed and actually installed. In combination with the [Service Assignment](it-service.md) category, this creates a complete picture of license usage.
- **Installation documentation**: The installation path and installation type (manual, automated, package manager) document how and where the service was provisioned. This is particularly valuable for change management and when migrating to new platforms.
- **Manufacturer overview**: Using the Report Manager, you can evaluate which manufacturers are represented in the service catalog -- helpful for vendor consolidation and contract negotiations.

!!! tip "Linking service assignments"
    After creating a service in this category, assign it to the relevant infrastructure objects via the [IT Service](it-service.md) category. This makes visible which servers, clients, and network components provide or consume a given service.

[![Service](../../assets/images/de/grundlagen/kategorien/s-service.png)](../../assets/images/de/grundlagen/kategorien/s-service.png)

## Fields

### Specification

A free text description of the service, e.g. `E-mail server for the sales department` or `Monitoring agent v3.2`. The functional description or technical specification of the service can be stored here.

### Manufacturer

The manufacturer or provider of the service, e.g. `Microsoft`, `Apache Foundation`, or `In-house development`. Dialog+ field -- custom values can be added as needed.

### Installation

The type of installation, e.g. `Manual`, `Silent`, `Package Manager`, or `Container`. Dialog field with predefined options.

### Registration key

The license or registration key for the service. **Note**: In sensitive environments, the complete key should not be stored in the CMDB -- a reference to the vault or license management system is often the better choice.

### Installation path

The path where the service is installed, e.g. `/opt/monitoring-agent/` or `C:\Program Files\Service\`. Helpful for troubleshooting and uninstallation.

### Installation count

The total number of installations of this service in the environment. Useful for the license overview and capacity planning.

### Description

Free text for additional details: version number, dependencies, configuration notes, known limitations, or references to documentation.

## Technical Reference

| Property | Value |
|---|---|
| **Category Constant** | `C__CATS__SERVICE` |
| **Type** | Specific category |
| **Multi-Value** | No |
| **Assigned to** | Service |

### Fields (API Reference)

| Field | API Key | Type |
|---|---|---|
| **Specification** | `specification` | Text |
| **Manufacturer** | `manufacturer` | Dialog+ (extensible selection) |
| **Installation** | `installation` | Dialog (selection) |
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
        "object": 123,
        "category": "C__CATS__SERVICE",
        "data": {
            "specification": "Zentraler Monitoring-Dienst für alle Productionsserver",
            "manufacturer": "Zabbix LLC",
            "installation": "Paketmanager",
            "registration_key": "Siehe Lizenztresor",
            "install_path": "/opt/zabbix-server/",
            "installation_count": 1,
            "description": "Zabbix Server 6.4 LTS, PostgreSQL-Backend, aktive und passive Checks"
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
        "object": 123,
        "category": "C__CATS__SERVICE"
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
        "object": 123,
        "category": "C__CATS__SERVICE",
        "entry": 1,
        "data": {
            "specification": "Zentraler Monitoring-Dienst — erweitert um Cloud-Monitoring",
            "installation_count": 3,
            "description": "Zabbix Server 7.0 LTS, upgrade 2025-09, now with Zabbix Proxy at two remote sites."
        }
    },
    "id": 3
}
```
