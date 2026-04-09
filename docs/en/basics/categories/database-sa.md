---
title: "Category: DBMS information"
description: Documentation of the DBMS information (Databases) category in i-doit
icon:
status:
lang: en
---

# Category: DBMS information

The **DBMS information** category (in the English UI labeled "Databases") documents the individual databases within a DBMS instance on a server. It is a **multi-value category** -- any number of databases can be recorded per object, since a database server typically hosts multiple databases simultaneously.

!!! info "Placement in the database documentation chain"
    This category forms the third level of the database chain: **Server** --> **DBMS instance** ([Database hierarchy](database.md)) --> **Database** (this category) --> **Tables** ([Database tables](database-table.md)). Before an entry can be created here, at least one instance must exist in the [Database hierarchy](database.md) category. The databases recorded here can then be linked with schemas and documented down to the table level in the [Database tables](database-table.md) category.

## Usage

Typical use cases:

- **Building a database inventory**: Record all databases on a server with name, associated DBMS, and instance. Together with [Software assignment](application.md), a complete picture of the database landscape emerges.
- **Capacity planning**: The Size and Maximum Size fields show at a glance how much storage a database currently occupies and what limit is configured. Reports on these fields warn early of capacity bottlenecks.
- **Schema assignment**: Via the Schemas field, database schema objects (object type "Database schema") are assigned. This creates the connection to the specific [Database schema](database-assignment.md) category, where schema details such as storage engine are documented.
- **Impact analysis**: When a database is maintained or migrated, the chain Server --> Instance --> Database --> Tables immediately shows which applications and tables are affected.
- **Compliance and data protection**: In combination with the [Database tables](database-table.md) category, it is traceable in which database personal data is stored -- a frequent requirement from GDPR audits.

[![DBMS information](../../assets/images/de/grundlagen/kategorien/database-sa.png)](../../assets/images/de/grundlagen/kategorien/database-sa.png)

## Fields

### Assigned DBMS

Link to the DBMS that manages this database. Selection field -- the available values come from the DBMS entries installed on the current server via [Software assignment](application.md). This tells i-doit which database management system is responsible for this database.

### Instance

The DBMS instance under which this database runs. Selection field -- the values come from the [Database hierarchy](database.md) category of the current object. On a server with multiple instances (e.g. a production and a test instance), the correct one is assigned here.

### Schemas

Link to one or more database schema objects (object type "Database schema"). Multi-select -- this allows all schemas of a database to be assigned. The schema objects are further documented in the specific [Database schema](database-assignment.md) category (storage engine, description, etc.).

### Title

The name of the database, e.g. `idoit_data`, `wordpress_prod`, or `erp_main`. This value appears in the list view and in reports.

### Size and unit

The current size of the database. The unit (MB, GB, TB) is specified separately. This value should be updated regularly -- ideally automated via the API or a JDisc import.

### Maximum size and unit

The configured size limit of the database. When the current size approaches this value, a capacity upgrade is required. Dialog+ field for the unit -- allowing unusual units to be added as well.

### Description

Free text for additional details: purpose of the database, associated application, backup strategy, replication status, or responsibilities.

## Technical reference

| Property | Value |
|---|---|
| **Category constant** | `C__CATG__DATABASE_SA` |
| **Type** | Global category |
| **Multi-value** | Yes |
| **Assigned to** | Server |

### Fields (API reference)

| Field | API key | Type |
|---|---|---|
| **Assigned DBMS** | `assigned_database` | Dialog (selection) |
| **Instance** | `assigned_instance` | Dialog (selection) |
| **Schemas** | `assigned_schemas` | Multi-select |
| **Title** | `title` | Text |
| **Size** | `size` | Decimal |
| **Unit** | `size_unit` | Dialog (selection) |
| **Maximum size** | `max_size` | Decimal |
| **Max. unit** | `max_size_unit` | Dialog+ (extensible selection) |
| **Description** | `description` | Text field (multi-line) |

### API examples

#### Create entry

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "your-api-key",
        "object": 4711,
        "category": "C__CATG__DATABASE_SA",
        "data": {
            "assigned_database": 1,
            "assigned_instance": 2,
            "title": "idoit_data",
            "size": 12.5,
            "size_unit": 3,
            "max_size": 50.0,
            "max_size_unit": 3,
            "description": "i-doit tenant database, daily backup via mysqldump"
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
        "object": 4711,
        "category": "C__CATG__DATABASE_SA"
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
        "object": 4711,
        "category": "C__CATG__DATABASE_SA",
        "entry": 8,
        "data": {
            "size": 18.3,
            "description": "Update 2026-04: Database size decreased to 18.3 GB after archiving."
        }
    },
    "id": 3
}
```
