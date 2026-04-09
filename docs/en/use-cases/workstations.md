---
title: Workstations
description: "IT workstations can be documented in i-doit."
icon:
status:
lang: en
---
# Workstations

IT workstations can be documented in i-doit. This way, you always have an overview of which employee has which IT components and where they can be found.

Persons and Their Workstations
--------------------------------

In addition to the physical assignment of [objects](../basics/it-documentation-structure.md) to [locations](../use-cases/locations.md), workstations can be documented as a logical construct. The central element is the [object type](../basics/it-documentation-structure.md) **Workstation**.

[![Workstations](../assets/images/de/anwendungsfaelle/arbeitsplaetze/1-ap.png)](../assets/images/de/anwendungsfaelle/arbeitsplaetze/1-ap.png)

An object of this type is assigned to a person via the [category](../basics/it-documentation-structure.md) **Logical Location**.

[![Category](../assets/images/de/anwendungsfaelle/arbeitsplaetze/2-ap.png)](../assets/images/de/anwendungsfaelle/arbeitsplaetze/2-ap.png)

Conversely, via the **Person** object in the category **Assigned Workstations**, this person is assigned to one or more workstations.

[![Assigned workstation](../assets/images/de/anwendungsfaelle/arbeitsplaetze/3-ap.png)](../assets/images/de/anwendungsfaelle/arbeitsplaetze/3-ap.png)

IT Components at the Workstation
------------------------------

The assignment of any (IT) components to a workstation is done within the **Workstation** object in the category **Assigned End Devices**.

[![Assigned end devices](../assets/images/de/anwendungsfaelle/arbeitsplaetze/4-ap.png)](../assets/images/de/anwendungsfaelle/arbeitsplaetze/4-ap.png)

An end device can only be assigned to one workstation at a time. Which workstation that is can be looked up within the end device object in the category **Assigned Workstation**.

[![Assigned workstation](../assets/images/de/anwendungsfaelle/arbeitsplaetze/5-ap.png)](../assets/images/de/anwendungsfaelle/arbeitsplaetze/5-ap.png)

Location of a Workstation
-----------------------------

Last but not least, a workstation can also be physically located, for example in an office room. With the [**Floor Plan**](../i-doit-add-ons/floorplan.md) add-on, this room can then be visualized.

[![Floor plan](../assets/images/de/anwendungsfaelle/arbeitsplaetze/6-ap.png)](../assets/images/de/anwendungsfaelle/arbeitsplaetze/6-ap.png)

Relocating a Workstation
--------------------------

If a person changes desks internally, they can be moved including the workstation and selected end devices. The **[Relocate-CI](../i-doit-add-ons/relocate-ci.md)** add-on provides a convenient function for this.
