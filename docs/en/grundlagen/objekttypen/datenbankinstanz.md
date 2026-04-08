---
title: "Object Type: Database Instance"
description: Documentation of the Database Instance object type in i-doit
icon:
status:
lang: en
---

# Object Type: Database Instance

The **Database Instance** object type documents running database instances of a DBMS. An instance is a concrete running database environment with its own port, memory buffer, and user management.

## Usage

- **Instance Inventory**: Document all database instances with port, version, and associated DBMS host.
- **Database Schema Assignment**: Link the instance with the database schemas it contains.
- **Application Assignment**: Record which applications use this database instance.

[![Database Instance](../../assets/images/de/grundlagen/objekttypen/datenbankinstanz.png)](../../assets/images/de/grundlagen/objekttypen/datenbankinstanz.png)

## Assigned Categories

### Global Categories

- [Accounting](../kategorien/accounting.md)
- [Version](../kategorien/version.md)
- [General](../kategorien/global.md)
- [Certificate](../kategorien/certificate.md)
- [Logbook](../kategorien/logbook.md)

### Specific Category

The specific category for this object type is Instance / Oracle database.

## Technical Reference

| Property | Value |
|---|---|
| **Object Type Constant** | `C__OBJTYPE__DATABASE_INSTANCE` |
| **Group** | Software |
