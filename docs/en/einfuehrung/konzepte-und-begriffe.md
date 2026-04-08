---
title: Concepts and Terminology
description: The most important concepts in i-doit — objects, object types, categories, attributes, and relationships explained simply
icon:
status:
lang: en
---

# Concepts and Terminology

Before you start working with i-doit, it is worth understanding the fundamental concepts. i-doit follows a clear structure — once you have internalized it, everything else falls into place almost naturally.

## Objects — the heart of it all

Everything in i-doit is an **object**. A server is an object. A room is an object. A person, a contract, a software license — all objects. An object represents a real or logical element of your IT landscape.

Every object has:

- a **title** (e.g., "web server-01")
- an **object type** that determines what it is (e.g., "Server")
- a **status** in the [lifecycle](../grundlagen/lebens-und-dokumentationszyklus.md) (in operation, planned, defective, decommissioned)
- a unique **ID** and **SYSID** for technical referencing

## Object types — the template

An **object type** is the template that determines what kind of object you create. The object type "Server" says: *This object is a server and has these categories.*

i-doit comes with over 70 [predefined object types](../grundlagen/objekttypen/index.md) — from Server, Client, and Switch to Room, Building, and Rack, all the way to Person, Organization, and Contract. You can [create your own object types](../grundlagen/benutzerdefinierte-objekttypen.md) and [configure](../grundlagen/objekttyp-konfiguration.md) existing ones.

Object types are organized into **groups** that structure the main menu:

- **Hardware** — Server, Client, Switch, Router, Printer, ...
- **Software** — Operating system, Application, Database, ...
- **Network** — Net, VLAN, Supernet, ...
- **Infrastructure** — Building, Room, Rack, Air conditioning, ...
- **Contacts** — Person, Organization, Person group
- **Other** — Contract, Cable, Mobile phone, ...

## Categories — the data fields

A **category** is a collection of related data fields. The category "Model" contains, for example, the fields Manufacturer, Model designation, and Serial number. The category "Host address" contains IP address, Subnet mask, and Gateway.

i-doit has over 120 [predefined categories](../grundlagen/kategorien/index.md). Each object type is assigned the categories that are relevant to it — a server needs "CPU" and "Memory", a room needs "Location" and "Spatially assigned objects".

There are two types of categories:

| Type | Description | Example |
|------|-------------|---------|
| **Single-value** | Exactly one entry per object | Model, Form factor, Accounting |
| **Multi-value** | Any number of entries | IP addresses, CPUs, Contact assignments |

And three assignment levels:

| Level | Description | Example |
|-------|-------------|---------|
| **Global categories** | Available for all object types | General, Model, Location |
| **Specific categories** | Only for one object type | "Monitor" only for monitors |
| **Custom categories** | Created by you | Custom fields as needed |

More on this: [Categories and attributes](../grundlagen/kategorien-und-attribute.md) | [Assigning categories to object types](../grundlagen/zurodnung-von-kategorien-zu-objekttypen.md)

## Attributes — the individual fields

An **attribute** is a single data field within a category. The category "Model" has the attributes *Manufacturer*, *Model designation*, and *Serial number*. The category "CPU" has *Designation*, *Clock frequency*, and *Cores*.

Attributes have different field types:

- **Text** — Free text (e.g., serial number)
- **Dialog** — Selection list (e.g., manufacturer)
- **Dialog+** — Selection list that you can extend yourself
- **Object browser** — Link to another object
- **Date** — Date field
- **Number** — Numeric value (e.g., RAM in MB)

More on this: [Attribute fields](../grundlagen/attributfelder.md) | [Dialog admin](../grundlagen/dialog-admin.md)

## Relationships — the network

Objects in i-doit do not exist in isolation. A server *is located in* a rack. An operating system *runs on* a server. A person *is contact for* a contract. i-doit calls these connections **relationships**.

Relationships are created automatically as soon as you link another object in a category — for example, when you assign a location to a server. You can visually display and analyze them in the [CMDB Explorer](../auswertungen/cmdb-explorer/index.md).

Every relationship has:

- an **Object A** (master) and an **Object B** (slave)
- a **relationship type** (e.g., "Location", "Software assignment", "Contact assignment")
- a **weighting** that determines which direction is highlighted in the CMDB Explorer

More on this: [Object relationships](../grundlagen/objekt-beziehungen.md)

## Locations — the physical world

Locations form a **hierarchy**: Country → City → Building → Floor → Room → Rack → Server. Every object can have a location, and objects that are marked as a location can in turn contain other objects.

The location hierarchy enables:

- **Location browser** — Tree view of all locations
- **Rack view** — Visual representation of rack occupancy
- **Location inheritance** — IP networks and contacts can be inherited from the parent location

More on this: [Locations](../anwendungsfaelle/standorte.md)

## Lifecycle — from planning to decommissioning

Every object in i-doit goes through a **lifecycle**:

```
Planned → In operation → Defective/Out of service → Decommissioned
```

Additionally, there is the **documentation cycle** that determines how i-doit handles the object internally:

- **Normal** — visible and active
- **Archived** — hidden, but recoverable
- **Deleted** — marked for permanent deletion
- **Purged** — irrevocably removed

More on this: [Lifecycle and documentation cycle](../grundlagen/lebens-und-dokumentationszyklus.md)

## At a Glance

| Concept | Question it answers | Example |
|---------|-------------------|---------|
| **Object type** | What is it? | Server |
| **Object** | Which one exactly? | web server-01 |
| **Category** | Which information group? | Model, CPU, Network |
| **Attribute** | Which detail? | Serial number: ABC123 |
| **Relationship** | How is it connected? | web server-01 *is located in* Rack-A3 |
| **Location** | Where is it? | Building A → Room 3.14 → Rack A3 |

## See also

- [What is i-doit?](was-ist-i-doit.md) — Overview of the product
- [How do I start documenting?](wie-beginne-ich-zu-dokumentieren.md) — Practical getting started
- [Basics](../grundlagen/index.md) — All details on objects, lists, and categories
- [Glossary](../glossar.md) — Glossary of terms
