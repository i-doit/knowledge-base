---
title: "Category: Database schema"
description: Documentation of the specific Database schema category in i-doit
icon:
status:
lang: en
---

# Category: Database schema

The **Database schema** category (in the English UI labeled "Database assignment") is a **specific category** on objects of type "Database schema". It documents the assignment of a schema to a database instance as well as basic technical properties of the schema. Each object has **one entry** (single-value).

!!! info "Specific category on schema objects"
    Unlike the global database categories ([Database hierarchy](database.md), [DBMS information](database-sa.md), [Database tables](database-table.md)), this category is **not** found on servers but on objects of type "Database schema". A schema object represents e.g. the `public` schema in PostgreSQL or `dbo` in SQL Server. The link back to the database chain is established via the "Database instance" field.

!!! tip "When do you need schema objects?"
    Schema objects are worthwhile when differentiated documentation is needed -- for example with databases that have multiple schemas (PostgreSQL, Oracle), for compliance requirements (which schema contains personal data?), or when applications should be specifically assigned to a schema via the [Software assignment](software-assignment.md) category.

## Usage

Typical use cases:

- **Schema assignment to infrastructure**: Via the "Runs on" and "Database instance" fields, the schema is assigned to a specific server and instance. This creates the complete chain from hardware to logical schema.
- **Documenting storage engine**: Especially with MySQL/MariaDB, the storage engine (InnoDB, MyISAM, Aria) per schema is relevant for performance tuning, transaction safety, and backup strategy. This field records which engine the schema uses.
- **Mapping multi-schema environments**: In PostgreSQL or Oracle, applications often work with multiple schemas within a database. Each schema is created as its own object and assigned to its instance via this category.
- **Impact analysis**: When a schema is migrated or restructured, the link immediately shows on which server and in which instance it runs. In combination with the [Database tables](database-table.md) category, the affected tables are also visible.

[![Database schema](../../assets/images/de/grundlagen/kategorien/database-assignment.png)](../../assets/images/de/grundlagen/kategorien/database-assignment.png)

## Fields

### Runs on

Link to the server object on which the schema is operated. Object browser -- here the physical or virtual server on which the associated database instance runs is selected. This field establishes the connection to the hardware level.

### Database instance

The database instance to which this schema is assigned. Selection field -- the values come from the instances created on the linked server object via the [Database hierarchy](database.md) category. This tells i-doit which instance the schema lives in.

### Title

The name of the schema, e.g. `public`, `dbo`, `app_schema`, or `idoit_data`. This value appears in the list view and in reports.

### Storage engine

The storage engine of the schema, e.g. `InnoDB`, `MyISAM`, `Aria`, or `PostgreSQL`. For MySQL/MariaDB, the engine determines whether transactions, row-level locking, and foreign keys are supported. For other DBMS, this field serves to document the storage technology used.

### Description

Free text for additional details: character set and collation (e.g. `utf8mb4_unicode_ci`), purpose of the schema, associated application, access permissions, or configuration specifics.

## Technical reference

| Property | Value |
|---|---|
| **Category constant** | `C__CATS__DATABASE_SCHEMA` |
| **Type** | Specific category |
| **Multi-value** | No |
| **Assigned to** | Database schema (object type) |

### Fields (API reference)

| Field | API key | Type |
|---|---|---|
| **Runs on** | `link` | Object link (connection) |
| **Database instance** | `instance` | Dialog (selection) |
| **Title** | `title` | Text |
| **Storage engine** | `storage_engine` | Text |
| **Description** | `description` | Text field (multi-line) |

### API examples

#### Create entry

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "your-api-key",
        "object": 5020,
        "category": "C__CATS__DATABASE_SCHEMA",
        "data": {
            "link": 4711,
            "instance": 3,
            "title": "idoit_data",
            "storage_engine": "InnoDB",
            "description": "i-doit tenant schema, character set utf8mb4, collation utf8mb4_unicode_ci"
        }
    },
    "id": 1
}
```

#### Read entries

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.read",
    "params": {
        "apikey": "your-api-key",
        "object": 5020,
        "category": "C__CATS__DATABASE_SCHEMA"
    },
    "id": 2
}
```

#### Update entry

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "your-api-key",
        "object": 5020,
        "category": "C__CATS__DATABASE_SCHEMA",
        "entry": 1,
        "data": {
            "storage_engine": "InnoDB",
            "description": "Migration 2026-04: Character set changed from utf8 to utf8mb4."
        }
    },
    "id": 3
}
```
