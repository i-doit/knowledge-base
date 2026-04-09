---
title: "Category: Database Links"
description: Documentation of the Database Links (C__CATS__DATABASE_LINKS) category in i-doit
icon:
status:
lang: en
---

# Category: Database Links

The **Database Links** category documents connections between database schemas — so-called database links, synonyms, or federated table configurations. It is a **multi-value category** and allows recording any number of links per schema.

## Usage

Typical use cases:

- **Document Oracle database links**: Oracle databases use DB links to access remote tables across schemas. With this category, you can record every link with target schema, owner, and visibility (public/private).
- **Make cross-schema dependencies visible**: When a schema accesses another via a DB link, a dependency is created. Through the link to the target schema in i-doit, this dependency is navigable and appears in impact analyses.
- **Safeguard change planning**: Before a schema migration, a look at this category shows which links reference the schema — a missing DB link after migration would otherwise lead to runtime errors.
- **Permission documentation**: The fields *Target user* and *Owner* show under which database user the access occurs and who manages the link.

!!! info "Database category chain"
    This category belongs to the database category chain in i-doit. Together with [Database schema](s-database-schema.md), [Database gateway](s-database-gateway.md), [Database objects](s-database-objects.md), and [Database access](s-database-access.md), you can completely map database landscapes.

[![Database Links](../../assets/images/de/grundlagen/kategorien/s-database-links.png)](../../assets/images/de/grundlagen/kategorien/s-database-links.png)

## Fields

### Title

The name of the database link, e.g. `REPORTING_LINK` or `HR_REMOTE.WORLD`. This value corresponds to the identifier under which the link is referenced in SQL statements (e.g. `SELECT * FROM table@REPORTING_LINK`).

### Connected database schema

Link to the target database schema as an i-doit object. Via the object browser, the schema that the link points to is selected. This creates a bidirectionally navigable relationship.

### Target user

The database user under whose identity the access to the target schema occurs, e.g. `REPORTING_RO`. Relevant for permission audits and security documentation.

### Owner

The owner of the database link — i.e. the schema or user in whose possession the link resides, e.g. `APP_OWNER`. For public links, this is typically `PUBLIC` or a DBA account.

### Public

Indicates whether this is a public database link available to all users of the database instance, or a private link accessible only to the owner.

### Description

Free text for additional details: purpose of the link, associated applications, planned replacement, notes on network connectivity or TNS configuration.

## Technical Reference

| Property | Value |
|---|---|
| **Category Constant** | `C__CATS__DATABASE_LINKS` |
| **Type** | Specific category |
| **Multi-Value** | Yes |
| **Assigned to** | Database schema |

### Fields (API Reference)

| Field | API Key | Type |
|---|---|---|
| **Title** | `title` | Text |
| **Connected database schema** | `link` | Object browser (link) |
| **Target user** | `target_user` | Text |
| **Owner** | `owner` | Text |
| **Public** | `public` | Dialog (selection) |
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
        "category": "C__CATS__DATABASE_LINKS",
        "data": {
            "title": "REPORTING_LINK",
            "link": 456,
            "target_user": "REPORTING_RO",
            "owner": "APP_OWNER",
            "public": 1,
            "description": "Public DB link to reporting schema, used by BI application"
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
        "category": "C__CATS__DATABASE_LINKS"
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
        "category": "C__CATS__DATABASE_LINKS",
        "entry": 1,
        "data": {
            "target_user": "REPORTING_RW",
            "description": "Permission change: write access since 2026-04"
        }
    },
    "id": 3
}
```
