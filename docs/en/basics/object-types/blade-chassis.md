---
title: "Object Type: Blade Chassis"
description: Documentation of the Blade Chassis object type in i-doit
icon:
status:
lang: en
---

# Object Type: Blade Chassis

The **Blade Chassis** object type documents the enclosure that houses multiple blade servers. The chassis provides the shared infrastructure – power supply, cooling, network backplane – for all installed blade modules.

## Usage

- **Chassis Overview**: Document all slots and which blade servers are installed in them. i-doit shows a graphical occupancy view.
- **Rack Integration**: Assign the blade chassis to a rack and record the occupied rack units.
- **Network Connectivity**: Document the chassis uplink ports to switches.
- **Capacity Planning**: Identify free blade slots and plan expansions proactively.

[![Blade Chassis](../../assets/images/de/grundlagen/objekttypen/blade-chassis.png)](../../assets/images/de/grundlagen/objekttypen/blade-chassis.png)

## Assigned Categories

### Global Categories

- [General](../categories/global.md)
- [Location](../categories/location.md)
- [Locally assigned objects](../categories/object.md)
- [Model](../categories/model.md)
- [Form Factor](../categories/formfactor.md)
- [Power Consumer](../categories/power-consumer.md)
- [Network Port](../categories/network-interface.md)
- [Network](../categories/network.md)
- [Port](../categories/network-port.md)
- Port Overview
- [Logical Ports](../categories/network-log-port.md)
- [Logbook](../categories/logbook.md)
- VRRP Membership

### Specific Category

The specific category for this object type is [Chassis](../categories/s-chassis.md).
The specific category for this object type is [Slots](../categories/s-chassis-slot.md).
The specific category for this object type is [Assigned devices](../categories/s-chassis-devices.md).
The specific category for this object type is [Chassis view](../categories/s-chassis-view.md).
The specific category for this object type is Chassis cabling.

## Technical Reference

| Property | Value |
|---|---|
| **Object Type Constant** | `C__OBJTYPE__BLADE_CHASSIS` |
| **Group** | Hardware |
