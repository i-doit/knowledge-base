---
title: Documenting Databases
description: "i-doit offers two models for documenting databases: the classic model with three object types and a newer, simplified model."
icon:
status:
lang: en
---
# Documenting Databases

i-doit offers two models for documenting databases: the classic model with three object types and a newer, simplified model. Both are described here.

## Classic Model

The classic model works with three object types:

[![DBMS](../assets/images/de/anwendungsfaelle/dokumentation-von-datenbanken/1-dvd.png)](../assets/images/de/anwendungsfaelle/dokumentation-von-datenbanken/1-dvd.png)

- **DBMS** -- Defines which database software is available in the organization (e.g., MariaDB, PostgreSQL).
- **Database instance** -- Shows where a DBMS is installed and which instances are running there.
- **Database schema** -- Shows the individual databases within an instance.

**Example i-doit:** MariaDB is the DBMS, the installation on the i-doit server is the instance, and `idoit_system` and `idoit_data` are the database schemas.

## New Model

In the new model, the object types "Database schema" and "Database instance" are eliminated. Instead, you document databases where they are executed -- directly on the server or cluster via the new **Databases** category.

The DBMS object remains and shows via the **Assigned databases** tab in the "DBMS - Database installation" category which databases are provided by the software.

The new category offers a collapsible view of the database hierarchy:

[![Databases](../assets/images/de/anwendungsfaelle/dokumentation-von-datenbanken/2-dvd.png)](../assets/images/de/anwendungsfaelle/dokumentation-von-datenbanken/2-dvd.png)


Under **Databases > Databases**, you document the individual databases on the resource:

[![Databases](../assets/images/de/anwendungsfaelle/dokumentation-von-datenbanken/3-dvd.png)](../assets/images/de/anwendungsfaelle/dokumentation-von-datenbanken/3-dvd.png)

Under **Databases > DBMS**, you can see the connection to the associated DBMS object:

[![DBMS](../assets/images/de/anwendungsfaelle/dokumentation-von-datenbanken/4-dvd.png)](../assets/images/de/anwendungsfaelle/dokumentation-von-datenbanken/4-dvd.png)

## Migration to the New Model

You are free to choose which model better suits your requirements. For switching from the classic to the new model, you will find a migration function under **Administration > System Tools > Cache Database**:

[![Cache / Databases](../assets/images/de/anwendungsfaelle/dokumentation-von-datenbanken/5-dvd.png)](../assets/images/de/anwendungsfaelle/dokumentation-von-datenbanken/5-dvd.png)

After clicking, a message about the effects of the migration appears:

[![Migration](../assets/images/de/anwendungsfaelle/dokumentation-von-datenbanken/6-dvd.png)](../assets/images/de/anwendungsfaelle/dokumentation-von-datenbanken/6-dvd.png)


After completion, a message tells you whether the migration was successful:

[![System view](../assets/images/de/anwendungsfaelle/dokumentation-von-datenbanken/7-dvd.png)](../assets/images/de/anwendungsfaelle/dokumentation-von-datenbanken/7-dvd.png)
