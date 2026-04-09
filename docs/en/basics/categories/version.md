---
title: "Category: Version Number"
description: Documentation of the Version Number category in i-doit
icon:
status:
lang: en
---

# Category: Version Number

The **Version Number** category documents the versions and releases of a software product, an operating system, or a service. It is a **multi-value category** -- any number of entries can be created per object, e.g. for every published version of an application or every installed service pack.

This category is typically maintained on objects of the type **Application**, **Operating System**, or **Service**. It represents the counterpart to the [Software Assignment](application.md) category: While the software assignment documents *which* software is installed on a server or client, the Version Number category on the software object itself documents *which versions* of this software exist. In the software assignment, you can then reference a specific version.

!!! info "Versions and software assignment"
    For a specific version of an application to be selectable in the [Software Assignment](application.md) category, that version must first be created here in the Version Number category on the software object. The Version Number category is therefore the **master data source** for all version information in i-doit. Without maintained version entries, the version field in the software assignment remains empty.

## Usage

Typical use cases:

- **Software version management**: Record all published or deployed versions of an application. For an object "Microsoft SQL Server," entries such as `2019 CU25`, `2022 CU12`, and `2022 CU15` could exist. This creates a version catalog that can be referenced in software assignments.
- **Patch level documentation**: The *Service Pack*, *Kernel*, and *Patch Level* fields enable granular recording of the update status. For operating systems, the kernel field is particularly relevant -- e.g. `5.15.0-91-generic` for Ubuntu or `6.1.0-18-amd64` for Debian.
- **Compliance and audit**: In regulated environments, it must be demonstrated which software versions are in use. Using the Report Manager, you can evaluate which objects use a specific version -- e.g. "All servers with Java 8" or "All clients with an outdated browser version." These reports are the basis for patch compliance reports.
- **Lifecycle management**: By documenting all known versions, the lifecycle of a software product can be traced. End-of-life versions can be flagged in the description, so that a report identifies all systems still using an unsupported version.
- **defaultization**: Define a "current standard version" per application and document it as a dedicated version entry. In reports, you can then evaluate which servers or clients deviate from the standard version -- the basis for update campaigns.

[![Version Number](../../assets/images/de/grundlagen/kategorien/version.png)](../../assets/images/de/grundlagen/kategorien/version.png)

## Fields

### Version number

The actual version number, e.g. `22.04.3 LTS`, `2022 CU15`, or `3.2.1`. This value appears in the list view of the category, in reports, and as a selection value in the [Software Assignment](application.md) category. Recommendation: Use the version format communicated by the manufacturer to ensure consistency.

### Service pack

The service pack designation, e.g. `SP1`, `SP2`, or `Service Pack 3`. Particularly relevant for older Microsoft products (Windows Server 2008 SP2, SQL Server 2012 SP4) and other software with a service pack model.

### Kernel

The kernel version, e.g. `5.15.0-91-generic` or `6.1.0-18-amd64`. Primarily relevant for Linux operating systems and other Unix-like systems where the kernel version is maintained independently of the distribution version. For security vulnerabilities at the kernel level (e.g. CVEs), you can immediately determine via a report which systems use an affected kernel.

### Patch level

The patch level or cumulative update, e.g. `CU25`, `Patch 14`, or `2024-01`. Enables fine-grained documentation of the update status below the main version. Especially for database software (Oracle, SQL Server), the patch level is security-relevant and subject to audit.

### Description

Free text for additional details: release date, end-of-life date, changelog highlights, known limitations, or notes on compatibility with other software versions.

## Technical Reference

| Property | Value |
|---|---|
| **Category Constant** | `C__CATG__VERSION` |
| **Type** | Global category |
| **Multi-Value** | Yes |
| **Assigned to** | Application, Operating System, Service |

### Fields (API Reference)

| Field | API Key | Type |
|---|---|---|
| **Version number** | `title` | Text |
| **Service pack** | `servicepack` | Text |
| **Kernel** | `kernel` | Text |
| **Patch level** | `patchlevel` | Text |
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
        "category": "C__CATG__VERSION",
        "data": {
            "title": "22.04.3 LTS",
            "kernel": "5.15.0-91-generic",
            "patchlevel": "2024-01",
            "description": "Ubuntu 22.04.3 LTS, Release 2024-01, Support bis April 2027."
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
        "category": "C__CATG__VERSION"
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
        "category": "C__CATG__VERSION",
        "entry": 5,
        "data": {
            "patchlevel": "2024-07",
            "description": "Patchlevel updated: 2024-01 auf 2024-07. Kernel bleibt unveraendert."
        }
    },
    "id": 3
}
```
