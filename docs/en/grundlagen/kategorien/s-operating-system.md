---
title: "Category: Operating Systems (Specific)"
description: Documentation of the specific Operating Systems category in i-doit
icon:
status:
lang: en
---

# Category: Operating Systems (Specific)

The **Operating Systems** category is a **specific category** for the object type **Operating System** and describes the master data of an operating system object. It is a **single-value category** -- exactly one entry exists per operating system object with the fundamental properties such as specification, manufacturer, OS family, and OS type.

!!! info "Master data vs. installation -- the two sides of OS documentation"
    This category describes **what** an operating system **is** -- its identity, manufacturer, and classification. It does **not** answer the question of on which servers or clients this operating system is installed. That reverse view is created automatically: When the OS object is assigned to a server in the global [Operating System](operating-system.md) category, the server appears in the installation overview. The separation follows the core i-doit principle: Software is maintained as an independent object with its own master data and then assigned to any number of hosts -- without duplicating data.

## Usage

Typical use cases:

- **Building an OS catalog**: Create an object for every operating system deployed in the organization and maintain the master data here. In combination with the global [Operating System](operating-system.md) category on the target hosts, this creates a complete overview of the OS landscape -- from master data definition to actual installation.
- **Classifying OS family and type**: The `OS Family` and `OS Type` fields enable grouping across individual versions. This way, you can evaluate via a report all systems with the family `Linux` or the type `Server` -- regardless of whether it is RHEL 9, Ubuntu 22.04, or SLES 15.
- **Manufacturer overview**: Through the manufacturer field, you can create reports showing which vendors' operating systems are in use -- relevant for vendor management, contract negotiations, and strategic decisions (e.g. consolidation to a single OS vendor).
- **Documenting installation type**: The installation Type field distinguishes between deployment models. During a server migration, a locally installed OS needs to be redeployed, while a network-based PXE boot image only requires a configuration change.
- **Centralized license key management**: The registration key is maintained here on the OS object -- not on every individual host. Changes such as license renewals only need to be made in one place.



## Fields

### Specification

Free text field for further description or specification of the operating system, e.g. `Long-term support until 2032` or `Hardened image for DMZ servers`. Usage purpose, special features, or configuration notes that go beyond the object name can be stored here.

### Manufacturer

The publisher of the operating system, e.g. `Microsoft`, `Red Hat`, `Canonical`, `SUSE`. Dialog+ field -- custom values can be added as needed. In combination with reports, this provides an overview such as "Number of deployed operating systems per manufacturer."

### installation type

Describes how the operating system is typically provisioned. Dialog field with predefined values. The distinction has practical consequences for rollout planning and disaster recovery.

### Registration key

The license or product key of the operating system, e.g. `XXXXX-XXXXX-XXXXX-XXXXX-XXXXX`. Maintained centrally on the OS object so that it does not need to be stored on every individual host.

!!! warning "Security note"
    Registration keys are sensitive data. Ensure that access rights in i-doit are configured so that only authorized persons can view this field. The permission system in i-doit allows restriction at the category level.

### installation path

The standard installation path of the operating system, e.g. `C:\Windows` or `/`. This value serves as a reference -- it describes the expected path, not the actual path on every individual host.

### installation count

The planned or permitted number of installations of this operating system. Compared with the actual number of assignments in the global [Operating System](operating-system.md) category, it immediately becomes apparent whether the license quota is exhausted.

### OS family

The operating system family, e.g. `Windows`, `Linux`, `macOS`, `BSD`. This field enables cross-cutting grouping: A report on all systems with OS family `Linux` returns all Linux distributions, regardless of version and manufacturer.

### OS type

The operating system type, e.g. `Server`, `Desktop`, `Embedded`, `Mobile`. Enables differentiation between server and client operating systems -- relevant for license models (server CALs vs. desktop licenses) and for reports that should only evaluate server or desktop operating systems.

### Description

Free text for additional details: end-of-life date, known compatibility issues, links to manufacturer documentation, internal approval status, or migration notes.

## Technical Reference

| Property | Value |
|---|---|
| **Category Constant** | `C__CATS__OPERATING_SYSTEM` |
| **Type** | Specific category |
| **Multi-Value** | No |
| **Assigned to** | Operating System |

### Fields (API Reference)

| Field | API Key | Type |
|---|---|---|
| **Specification** | `specification` | Text |
| **Manufacturer** | `manufacturer` | Dialog+ (extensible selection) |
| **installation type** | `installation` | Dialog (selection) |
| **Registration key** | `registration_key` | Text |
| **installation path** | `install_path` | Text |
| **installation count** | `installation_count` | Integer |
| **OS family** | `osFamily` | Text |
| **OS type** | `systemType` | Text |
| **Description** | `description` | Text field (multi-line) |

### API Examples

#### Create Entry

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "your-api-key",
        "object": 310,
        "category": "C__CATS__OPERATING_SYSTEM",
        "data": {
            "specification": "Long Term Support bis 2032, gehaertetes Server-Image",
            "manufacturer": "Red Hat",
            "installation": 2,
            "registration_key": "",
            "install_path": "/",
            "installation_count": 45,
            "description": "RHEL 9 LTS. Freigegeben fuer Production seit 2023-01."
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
        "object": 310,
        "category": "C__CATS__OPERATING_SYSTEM"
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
        "object": 310,
        "category": "C__CATS__OPERATING_SYSTEM",
        "entry": 1,
        "data": {
            "installation_count": 52,
            "description": "RHEL 9 LTS. 2026-04: installationsanzahl auf 52 erhoeht nach Rollout Standort Muenchen."
        }
    },
    "id": 3
}
```
