---
title: "How Do I Start Documenting?"
description: "Are you facing the question of how to start your IT documentation?"
icon:
status:
lang: en
---
# How Do I Start Documenting?

Are you facing the question of how to start your IT documentation? You are not alone. The most important insight upfront: You don't have to document everything at once. Start with what brings you the greatest benefit and build from there.

## Clarify Your Goals

Before you create the first object in i-doit, answer these questions:

-   **Why** are you documenting? Compliance requirement, better overview, preparation for an audit?
-   **For whom** is the documentation? Admins in day-to-day operations, management for decision-making, external auditors?
-   **What** has the highest priority? Servers and networks? Locations and rooms? Licenses and contracts?

The answers determine where you start and how detailed you go.

## Choose Your Approach

Most i-doit users start with one of these approaches:

### Locations first (top-down)

Start with the physical infrastructure: buildings, rooms, racks. Then fill the racks with servers and network components. This quickly creates a clear location structure.

1.  Create locations: **Building > Floors > Rooms > Racks**
2.  Active components: Place servers, switches, firewalls in racks
3.  Network: Document IP networks, VLANs, and port connections

### Automatic inventory (bottom-up)

Let [JDisc Discovery](../daten-konsolidieren/jdisc/index.md) or a [CSV import](../daten-konsolidieren/csv-datenimport/index.md) do the work. Import existing data from network scans or Excel lists and then enrich them in i-doit.

1.  Scan the network with JDisc or prepare data via CSV
2.  Perform the import into i-doit
3.  Manually add locations and relationships

!!! tip "Our Tip"
    Start with 80% coverage in good quality instead of aiming for 100%. A well-maintained documentation with the most important systems is more valuable than a complete one that nobody keeps up to date.

## Adopting Existing Data

Do you already have data in Excel, another tool, or a network scanner? i-doit offers several ways to adopt this data:

| Source | Import method | Suitable for |
|---|---|---|
| Excel/CSV | [CSV data import](../daten-konsolidieren/csv-datenimport/index.md) | Locations, contacts, clients, any lists |
| Network scan | [JDisc Discovery](../daten-konsolidieren/jdisc/index.md) | Servers, switches, printers, software |
| LDAP/AD | [LDAP directory](../benutzerauthentifizierung-und-verwaltung/ldap-verzeichnis/index.md) | Users and groups |
| Other CMDB | [API (JSON-RPC)](../i-doit-add-ons/api/index.md) | Programmatic migration |

## Plan Ongoing Maintenance

Documentation is only as good as its currency. Think about the following from the start:

-   **Who maintains what?** — Define responsibilities. The network team maintains switches, the server team maintains VMs.
-   **When is it updated?** — With every change? Weekly? With every change process?
-   **Automatically or manually?** — Regular JDisc scans and [cronjobs](../automatisierung-und-integration/cli/index.md) keep many things automatically up to date.

!!! info "i-doit as the leading system"
    When i-doit covers the complete lifecycle of an IT component — from planning through commissioning to decommissioning — it becomes the central system that all other tools align with.

## Next Steps

-   [IT documentation checklist](checkliste-fuer-die-it-dokumentation.md) — All important points at a glance
-   [installation](../installation/index.md) — Install i-doit
-   [First login](../grundlagen/erstanmeldung.md) — Your first login
-   [Basics](../grundlagen/index.md) — Understand objects, categories, and attributes

Need support getting started? Our [partners](https://www.i-doit.com/partner/) offer workshops and consulting packages for the onboarding phase. Or contact us directly at [help@i-doit.com](mailto:help@i-doit.com).
