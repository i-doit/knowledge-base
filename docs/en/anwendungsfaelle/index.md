---
title: Use Cases
description: "In this section you will find guidance on the advanced use of _i-doit_, both to further refine your IT documentation and to..."
icon:
status:
lang: en
---
# Use Cases

In this section you will find guidance on the advanced use of _i-doit_, both to further refine your [IT documentation](../glossar.md#it-dokumentation) and to better support IT service management processes.

!!! info "You can find more practical examples on our [blog](https://www.i-doit.com/)"

The following use cases are described:

## [Mapping Customer Locations](./abbildung-von-kundenstandorten.md)

Customers often have multiple locations that should be displayed hierarchically with IT components assigned to each one.

## [Workstations](./arbeitsplaetze.md)

IT workstations can be documented in i-doit. This way, you always have an overview of which employee has which IT components and where they can be found.

## [Automatic Contract Renewal](./automated-vertragsverlaengerung.md)

A tenant's contract has passed the last cancellation date and needs to be renewed. To renew the contract, we use the `extend-contracts` command.

## [Custom Translations](./benutzerdefinierte-uebersetzungen.md)

Using custom translations, you can change the labels of desired fields or add new languages with just a few mouse clicks.

## [Uploading and Linking Files](./dateien-hochladen-und-verknuepfen.md)

A comprehensive IT documentation often includes documents in the form of files. Whether operating manuals, emergency plans, contracts, installation protocols, or drivers: important files should be linked to [objects](../grundlagen/struktur-it-dokumentation.md) in i-doit.

## [Documenting Databases](./dokumentation-von-datenbanken.md)

With version 1.xx of i-doit, we introduced an additional method that can be used to document databases within i-doit.

## [Populating Excel Spreadsheets with Data from i-doit (deprecated)](./excel-tabelle-mit-daten-aus-i-doit-befuellen.md)

With just a few lines of Visual Basic, you can read any content from i-doit and display it in Microsoft Excel. In this article, we explain the procedure using [reports](../auswertungen/report-manager.md).

## [Geo Coordinates](./geo-koordinaten.md)

Every [object](../grundlagen/struktur-it-dokumentation.md) in i-doit can be assigned geographic coordinates in the form of latitude and longitude.

## [i-doit - Patch Manager Bridge](./i-doit-patch-manager-bridge.md)

In this use case, we show how to open the Patch Manager Launcher from within i-doit with a single click and navigate directly to the corresponding object. This makes it easy to switch between tools, for example to go from the i-doit documentation directly to the Patch Manager overview.

## [IP Address Management (IPAM)](./ip-adress-management.md)

A key element of [IT documentation](../glossar.md) is the management of IP networks, addresses, and various network components. This is called IP Address Management, or IPAM for short.

## [Cable Patches and Pathways](./kabel-patches-und-wege.md)

A comprehensive [IT documentation](../glossar.md) sooner or later leads to documenting the cabling infrastructure. This article provides an introduction to cabling hardware [objects](../grundlagen/struktur-it-dokumentation.md) together.

## [Complex Reports](./komplexe-reports.md)

The Report Manager already allows you to generate many useful reports via the query editor. For more complex cases, the underlying SQL can be edited. This lets you use MySQL/MariaDB-native functions, for example to query time intervals.

## [Prod to Test Database Synchronization](./prod-test-datenbank-synchronisation.md)

Regularly synchronize the productive i-doit database to a test system -- via shell script (`mysqldump`) or via console.php (`system:tenant-export` / `system:tenant-import`). Including cronjob setup, checklist, and troubleshooting.

## [Managing Passwords](./passwoerter-verwalten.md)

In daily work, a system administrator handles dozens of passwords. Keeping them all in memory seems unrealistic. i-doit comes with a simple password management feature that keeps your head clear and helps you find needed credentials faster.

## [Location-Based User Rights](./standort-basierte-benutzerrechte.md)

In i-doit, [very fine-grained user rights](../effizientes-dokumentieren/rechteverwaltung/index.md) can be defined to grant certain user groups only restricted access to the IT documentation. This includes user rights that apply only to specific [locations](../anwendungsfaelle/standorte.md).

## [Locations](./standorte.md)

The placement of hardware and more is an essential component of i-doit. This article explains how to document locations and place [objects](../grundlagen/struktur-it-dokumentation.md) there.

## [Switch Stacking](./switch-stacking.md)

With the [object type](../grundlagen/objekttyp-konfiguration.md) **Stacking**, it is possible to define a stack group with multiple members that exchange information with each other. Although stacking can be used for different object types, the original concept for this object type and the associated [category](../grundlagen/kategorien-und-attribute.md) **Stack Members** traces back to switch stacking. The object type can be found under the [object type group](../grundlagen/struktur-it-dokumentation.md#objekttypgruppe) **Other** starting from version 1.7.

## [Variable Reports](./variable-reports.md)

Variable reports can be used to display object-specific information, unlike regular reports which always produce static results.
Object information is viewable **in reverse** through variable reports, e.g., you can navigate from Object A to Object B and then back from Object B to Object A.

## [Provisioning VMs (deprecated)](./vm-provisionieren.md)

In this article, we explore the [use case](./index.md) of provisioning virtual machines (VMs) through i-doit. We leverage a well-maintained [IT documentation](../grundlagen/struktur-it-dokumentation.md), combined with a few scripts, to make this [automation](../automatisierung-und-integration/index.md) a reality.
