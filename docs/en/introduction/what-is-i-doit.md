---
title: What is i-doit?
description: i-doit is an IT documentation and CMDB solution — a central place for everything that makes up your IT
icon:
status:
lang: en
---

# What is i-doit?

i-doit is an **IT documentation and CMDB solution**. CMDB stands for Configuration Management Database — a central database where you map your entire IT infrastructure: servers, networks, software, contracts, locations, and the relationships between all these elements.

Think of i-doit as the memory of your IT department. Instead of spreading information across dozens of Excel spreadsheets, wiki pages, notes, and people's heads, you collect everything in one place — structured, searchable, and accessible to everyone involved.

## What is i-doit used for?

i-doit covers a broad spectrum. The most common use cases:

### Documenting IT infrastructure

- **Hardware:** Servers, clients, switches, routers, firewalls, UPS systems — with model, serial number, location, and rack position
- **Network:** IP addresses, VLANs, subnets, ports, and cabling
- **Software:** Operating systems, applications, databases — with versions and licenses
- **Locations:** Buildings, rooms, racks — hierarchically structured with a visual [rack view](../basics/categories/s-enclosure.md)

### Mapping relationships

In reality, no system stands alone. A web server needs a database server, runs on a VM that runs on a host in a rack. i-doit maps these dependencies as **object relationships** — and makes them visually visible in the [CMDB Explorer](../evaluation/cmdb-explorer/index.md).

This is especially valuable when you need to know: *What is affected if Server X fails?*

### Managing contracts and licenses

When does the maintenance contract for the firewall expire? How many licenses are still available? Who is the contact person at the service provider? i-doit links contracts, licenses, and contacts directly to the affected IT components.

### Supporting compliance and audits

Whether ISO 27001, BSI IT-Grundschutz, or internal audits — an up-to-date CMDB provides the data that auditors want to see. i-doit documents not only the current state but also the [lifecycle](../basics/life-and-documentation-cycle.md) of every component.

### Automating processes

Via the [API](../i-doit-add-ons/api/index.md) and [interfaces](../automation-and-integration/index.md), i-doit can be integrated into existing workflows: Monitoring systems like Checkmk report status changes, service desk systems reference CMDB objects, JDisc Discovery automatically populates the documentation via network scans.

## How is i-doit structured?

i-doit organizes information on three levels:

```
Object type       →  What is it?          (Server, Client, Switch, Person, Contract)
  └── Object      →  Which one exactly?   (web server-01, Office-PC-042, Contract-SAP)
       └── Categories  →  What details?   (IP address, CPU, Location, Contact person)
```

- **Object types** define the kind: Server, Client, Room, Person, Contract. i-doit comes with over 70 [predefined object types](../basics/object-types/index.md), and you can [create your own](../basics/custom-object-types.md).
- **Objects** are the actual entries: *web server-01*, *Room 3.14*, *John Doe*.
- **Categories** contain the data fields: IP address, model, serial number, location. i-doit has over 120 [predefined categories](../basics/categories/index.md).

More on this: [Concepts and terminology](concepts-and-terminology.md)

## On-premise or cloud?

i-doit is available in two variants:

| | On-Premise | [Cloud](../idoit-cloud/index.md) |
|---|---|---|
| **Hosting** | On your own server | By i-doit in German data centers |
| **installation** | You install and maintain it yourself | Ready to use in 15 minutes |
| **Updates** | You decide when | Automatically within 7 days |
| **Backup** | Your responsibility | Automatic (hourly to yearly) |
| **Customization** | Full control (SSH, CLI, PHP) | Limited (no shell access) |
| **Automation** | [Cronjobs](../maintenance-and-operation/set-up-cron-jobs.md) + Console | [Flows Lite](../idoit-cloud/index.md#automatisierung-mit-flows-lite) |

Both variants offer the same feature set for IT documentation. The differences lie in administration and access.

## How do I get started?

1. **Evaluate:** [Request a trial license](https://www.i-doit.com/i-doit-testen/) and try out i-doit
2. **Install:** Follow the [installation guide](../installation/index.md) (or book a cloud instance)
3. **Set up:** Read [How do I start documenting?](how-to-start-documenting.md)
4. **Plan:** Work through the [IT documentation checklist](it-documentation-checklist.md)
5. **Learn:** [Basics](../basics/index.md) — Understand objects, categories, and lists

## See also

- [How do I start documenting?](how-to-start-documenting.md) — Step by step to your first documentation
- [IT documentation checklist](it-documentation-checklist.md) — All important points at a glance
- [Concepts and terminology](concepts-and-terminology.md) — Objects, categories, attributes, and relationships explained
- [Glossary](../glossary.md) — Terms related to i-doit
