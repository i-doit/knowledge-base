---
title: "Category: Database Access"
description: Documentation of the Database Access category in i-doit
icon:
status:
lang: en
---

# Category: Database Access

The **Database Access** category documents which applications or system services access a database schema. It is a **multi-value category** and is available as a specific category for objects of the type *Database schema*.

## Usage

Typical use cases:

- **Make dependencies visible**: Record which applications or services use a specific database schema. This information is crucial for change and incident management — in the event of a database outage, it is immediately apparent which applications are affected.
- **Document the database chain**: Together with the categories [DBMS](s-dbms.md), [Database instance](s-database-instance.md), and [Database schema](s-database-schema.md), the complete database chain is formed: DBMS software > instance > schema > access. The Database Access category forms the last link in this chain.
- **Impact analysis in the Report Manager**: Using reports, you can evaluate which schemas are used by how many applications — helpful for consolidation projects or license audits.
- **Service modeling**: In ITSM scenarios, the accessing applications can be modeled as part of an IT service. The Database Access category provides the connection between service component and database.

!!! info "The database chain in i-doit"
    i-doit maps database structures via a four-level chain:

    1. **DBMS** — the database software (e.g. MySQL, PostgreSQL, Oracle)
    2. **Database instance** — a running instance of the DBMS on a server
    3. **Database schema** — an individual schema/database within the instance
    4. **Database access** — the applications that access the schema

    This category documents level 4. See also: [DBMS](s-dbms.md), [Database instance](s-database-instance.md), [Database schema](s-database-schema.md).

[![Database Access](../../assets/images/de/grundlagen/kategorien/s-database-access.png)](../../assets/images/de/grundlagen/kategorien/s-database-access.png)

## Fields

### Application / System service

The i-doit object that accesses the database schema. Via the object browser, objects of the types *Application*, *System service*, *License*, *Operating system*, *Cluster service*, *DBMS*, *Database schema*, *Database instance*, and *Middleware* can be selected. Multiple selection is possible — so you can create multiple accessing applications in one step.

!!! warning "Note the direction of the link"
    The Database Access category is maintained on the **Database schema** object, not on the accessing application. The reading direction is: "The following applications access this schema."

## Technical Reference

| Property | Value |
|---|---|
| **Category Constant** | `C__CATS__DATABASE_ACCESS` |
| **Type** | Specific category |
| **Multi-Value** | Yes |
| **Assigned to** | Database schema |

### Fields (API Reference)

| Field | API Key | Type |
|---|---|---|
| **Application / System service** | `access` | Object browser (link, relation type 19) |

### API Examples

#### Create Entry

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "your-api-key",
        "object": 200,
        "category": "C__CATS__DATABASE_ACCESS",
        "data": {
            "access": 350
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
        "object": 200,
        "category": "C__CATS__DATABASE_ACCESS"
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
        "object": 200,
        "category": "C__CATS__DATABASE_ACCESS",
        "entry": 3,
        "data": {
            "access": 412
        }
    },
    "id": 3
}
```
