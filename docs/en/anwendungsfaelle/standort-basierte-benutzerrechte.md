---
title: "Location-Based User Rights"
description: "In i-doit, very fine-grained user rights can be defined to grant certain user groups only restricted access to the IT documentation..."
icon:
status:
lang: en
---
# Location-Based User Rights

In i-doit, [very fine-grained user rights](../effizientes-dokumentieren/rechteverwaltung/index.md) can be defined to grant certain user groups only restricted access to the IT documentation. This includes user rights that apply only to specific [locations](../anwendungsfaelle/standorte.md).

## Task

Mr. Mueller is responsible for all servers at the Duesseldorf location. Mr. Mueller's rights should be restricted so that he can see all servers at the Duesseldorf location and create new server [objects](../grundlagen/struktur-it-dokumentation.md). For all servers at the Duesseldorf location, he should be able to edit all [categories](../grundlagen/struktur-it-dokumentation.md). He should not have access to servers or other objects at other locations.

## Configuration

To enable read and edit access to the objects and their categories, the rights **View** and **Edit** are set under **[Administration > Settings for [Tenant Name] > Permissions > CMDB](../effizientes-dokumentieren/rechteverwaltung/cmdb.md)** for Mr. Mueller's **Person** object with the **conditions**

*   **Objects below a location** and
*   **Category in objects below a location**.

**Duesseldorf** is selected as the **parameter** in each case.

To enable the creation of new objects, the right **Create** must be set for **Objects of type** Server. To enable access to the categories of newly created objects, the right **Category(ies) in objects created by me** is set to all categories. Optionally, this can also be set only for the **Location** category so that physical assignment is possible.

For these restrictions to also take effect in the [object browser](../grundlagen/objekt-beziehungen.md), in the [location view](../anwendungsfaelle/standorte.md), and in the [CMDB Explorer](../auswertungen/cmdb-explorer/index.md), advanced settings must be configured under **Administration > [Tenant Name] Management > Expert Settings**:

| Key | Value |
| --- | --- |
| **auth.use-in-cmdb-explorer** | **1** |
| **auth.use-in-object-browser** | **1** |
| **auth.use-in-location-tree** | **1** |

A detailed explanation of these settings can be found in the article [CMDB (Rights Management)](../effizientes-dokumentieren/rechteverwaltung/cmdb.md).

## Usage

The process for Mr. Mueller when creating a new server is now as follows: He creates a new server, edits the **Location** category, and assigns the server to a location under Duesseldorf.
