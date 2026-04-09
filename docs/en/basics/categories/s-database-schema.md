---
title: "Category: Database Schema"
description: Documentation of the Database Schema (C__CATS__DATABASE_SCHEMA) category in i-doit
icon:
status:
lang: en
---

# Category: Database Schema

The **Database Schema** category documents the core information of a database schema — i.e. the logical unit that groups tables, views, and other objects together. It represents the center of the database category chain in i-doit and links the schema with its instance and the hosting server.

## Usage

Typical use cases:

- **Structure the database landscape**: Every database schema is created as a separate i-doit object of the type *Database schema*. Through this category, it receives its basic data: name, storage engine, and the assignment to the database instance.
- **Establish instance assignment**: The field *Database instance* links the schema with the parent database instance. This results in a clear hierarchy: Server > Instance > Schema.
- **Document the runtime environment**: The field *Runs on* references the server or virtual machine on which the schema is operated. This makes dependencies between infrastructure and databases visible.
- **Record storage engine**: Especially with MySQL/MariaDB, the storage engine (e.g. `InnoDB`, `MyISAM`, `Aria`) is relevant for performance, transaction safety, and backup strategies. Here you can document this information per schema.

!!! info "Database category chain"
    This category is the core of the database category chain. The subcategories [Database gateway](s-database-gateway.md), [Database links](s-database-links.md), [Database objects](s-database-objects.md), and [Database access](s-database-access.md) supplement the schema with gateway connections, schema links, internal objects, and access information.

[![Database Schema](../../assets/images/de/grundlagen/kategorien/s-database-schema.png)](../../assets/images/de/grundlagen/kategorien/s-database-schema.png)

## Fields

### Runs on

Link to the server or virtual machine on which the database schema is operated. Via the object browser, you can select the corresponding infrastructure object. This link is crucial for impact analyses: If the server fails, all schemas running on it are affected.

### Database instance

The database instance to which this schema belongs, e.g. an Oracle SID, a PostgreSQL cluster instance, or a MySQL instance. Dialog field — the available instances are derived from the instance objects created in i-doit.

### Title

The name of the database schema, e.g. `idoit_production`, `erp_main`, or `HR_DATA`. Should exactly match the schema name in the database.

### Storage engine

The storage engine used, e.g. `InnoDB`, `MyISAM`, `Aria`, or `PostgreSQL` (for databases without a selectable engine). Free text field — enables documentation of any engine type.

### Description

Free text for additional details: purpose of the schema, associated application, backup frequency, character set, collation, or configuration special features.

## Technical Reference

| Property | Value |
|---|---|
| **Category Constant** | `C__CATS__DATABASE_SCHEMA` |
| **Type** | Specific category |
| **Multi-Value** | No |
| **Assigned to** | Database schema |

### Fields (API Reference)

| Field | API Key | Type |
|---|---|---|
| **Runs on** | `link` | Integer |
| **Database instance** | `instance` | Dialog (selection) |
| **Title** | `title` | Text |
| **Storage engine** | `storage_engine` | Text |
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
        "category": "C__CATS__DATABASE_SCHEMA",
        "data": {
            "link": 45,
            "instance": "MySQL 8.0 Production",
            "title": "idoit_production",
            "storage_engine": "InnoDB",
            "description": "Production schema of the i-doit CMDB, UTF-8, daily backup at 02:00"
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
        "category": "C__CATS__DATABASE_SCHEMA"
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
        "category": "C__CATS__DATABASE_SCHEMA",
        "entry": 1,
        "data": {
            "storage_engine": "InnoDB",
            "description": "Migration to InnoDB completed, previously MyISAM"
        }
    },
    "id": 3
}
```
