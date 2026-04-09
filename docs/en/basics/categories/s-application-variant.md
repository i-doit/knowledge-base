---
title: "Category: Variants"
description: Documentation of the specific Variants category in i-doit
icon:
status:
lang: en
---

# Category: Variants

The **Variants** category is a **specific category** for the object types **Application**, **Operating System**, and **Service**. It defines the available product variants or editions of a software product. It is a **multi-value category** -- any number of variants can be created per software object, e.g. `default`, `Enterprise`, and `Datacenter` for a Windows Server.

## Why Variants Instead of Free Text Entry?

In many organizations, the same software is used in different editions: SQL Server default on development servers, SQL Server Enterprise in production. Without a controlled variant model, inconsistent names quickly creep in -- `Enterprise`, `Ent.`, `ENTERPRISE`, `Enterprise Edition` -- making reports unusable and falsifying license evaluations.

The Variants category solves this problem by defining the valid editions **centrally on the software object**. In the [Software Assignment](application.md) category on the host objects, a dialog field is then available that only offers these predefined variants for selection. The result: consistent data, reliable reports, and correct license management.

!!! tip "Create variants before the assignment"
    Create the variants **before** you assign the software to hosts. Only variants that exist in this category are available for selection in the "Variant" field of the [Software Assignment](application.md). If you forget this step, the variant field remains empty and administrators must retroactively supplement all assignments.

## Usage

Typical use cases:

- **Maintaining an editions catalog**: Define the available editions for every application -- e.g. `Community`, `Professional`, `Enterprise`. New editions (e.g. after a product relaunch by the manufacturer) can be added at any time without changing existing assignments.
- **Supporting license management**: Different variants have different license costs and conditions. When the correct variant is selected in the software assignment, you can evaluate via reports how many Enterprise vs. default licenses are needed -- the basis for procurement negotiations and true-ups.
- **Compliance evidence**: During audits, it must be demonstrated that the licensed Enterprise edition is running on production servers and not the default edition. The combination of the Variants category and software assignment provides this evidence per host. In the reverse view via the [installation](s-application-assigned-obj.md) category, it is immediately apparent which variant is in use where.
- **Migration and upgrade planning**: If an application is to be migrated from default to Enterprise, a report on the software assignment with variant filter shows all affected hosts.

[![Variants](../../assets/images/de/grundlagen/kategorien/s-application-variant.png)](../../assets/images/de/grundlagen/kategorien/s-application-variant.png)

## Fields

### Title

The name of the variant, e.g. `default`, `Enterprise`, `Datacenter`, `Community Edition`, or `Professional Plus`. Choose a title that matches the official product name of the manufacturer -- this facilitates assignment during license audits and avoids confusion.

### Variant

An optionally abbreviation or supplementary identifier for the variant, e.g. `ENT`, `STD`, `DC`. Useful when compact labels are desired in reports or exports. This field can also be used for internal classifications that differ from the official product name.

### Description

Free text for additional details: differences between the editions, notes on feature restrictions (e.g. "default: max. 128 GB RAM, no Always-On"), or links to the manufacturer's comparison matrix. A well-maintained description helps IT procurement decide which edition is suitable for a particular use case.

## Technical Reference

| Property | Value |
|---|---|
| **Category Constant** | `C__CATS__APPLICATION_VARIANT` |
| **Type** | Specific category |
| **Multi-Value** | Yes |
| **Assigned to** | Application, Operating System, Service |

### Fields (API Reference)

| Field | API Key | Type |
|---|---|---|
| **Title** | `title` | Text |
| **Variant** | `variant` | Text |
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
        "category": "C__CATS__APPLICATION_VARIANT",
        "data": {
            "title": "Enterprise",
            "variant": "ENT",
            "description": "Voller functionsumfang: Always-On, unbegrenzter RAM, Partitionierung. Lizenz pro Kern."
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
        "category": "C__CATS__APPLICATION_VARIANT"
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
        "category": "C__CATS__APPLICATION_VARIANT",
        "entry": 5,
        "data": {
            "title": "Enterprise Edition",
            "description": "Rename 2026-01: Manufacturer changed 'Enterprise' to 'Enterprise Edition'. Feature scope unchanged."
        }
    },
    "id": 3
}
```
