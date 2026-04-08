---
title: "Object Type: Blade Server"
description: Documentation of the Blade Server object type in i-doit
icon:
status:
lang: en
---

# Object Type: Blade Server

The **Blade Server** object type documents blade modules that operate within a **Blade Chassis**. Blade servers are compact server building blocks without their own power supply or cooling system – all blades in a chassis share these resources.

## Usage

- **Chassis Assignment**: Link each blade server with its associated blade chassis. i-doit shows the occupied slots in the chassis overview.
- **Hardware Inventory**: Document CPU, RAM, and drives for each blade module – analogous to the Server object type.
- **Virtualization**: Blade servers often serve as hypervisors. Link them with the virtual machines running on them.
- **Location**: The physical location is derived from the blade chassis and its associated rack.

[![Blade Server](../../assets/images/de/grundlagen/objekttypen/blade-server.png)](../../assets/images/de/grundlagen/objekttypen/blade-server.png)

## Assigned Categories

### Global Categories

- [Drive](../kategorien/drive.md)
- [Connectors](../kategorien/connector.md)
- [Service Assignment](../kategorien/it-service.md)
- [Interface](../kategorien/universal-interface.md)
- [Device](../kategorien/storage-device.md)
- [Logical Devices (LDEV Server)](../kategorien/ldev-server.md)
- [Logical Devices (Client)](../kategorien/ldev-client.md)
- [FC Port](../kategorien/controller-fc-port.md)
- [Host Bus Adapter (HBA)](../kategorien/hba.md)
- [Accounting](../kategorien/accounting.md)
- Storage Area Network
- [Cluster Memberships](../kategorien/cluster-memberships.md)
- [Virtual Host](../kategorien/virtual-host.md)
- [Guest Systems](../kategorien/guest-systems.md)
- [Virtual Switches](../kategorien/virtual-switch.md)
- [Virtual Devices](../kategorien/virtual-device.md)
- [Backup (Assigned Objects)](../kategorien/backup--assigned-objects.md)
- [Group Memberships](../kategorien/group-memberships.md)
- [Share Access](../kategorien/share-access.md)
- [Operating System](../kategorien/operating-system.md)
- [RAID Array](../kategorien/raid.md)
- [General](../kategorien/global.md)
- [Contact Assignment](../kategorien/contact.md)
- [Location](../kategorien/location.md)
- [Graphics Card](../kategorien/graphic.md)
- [Model](../kategorien/model.md)
- [Shares](../kategorien/shares.md)
- [Form Factor](../kategorien/formfactor.md)
- [Sound Card](../kategorien/sound.md)
- [CPU](../kategorien/cpu.md)
- [Controller](../kategorien/controller.md)
- [Memory](../kategorien/memory.md)
- [Power Consumer](../kategorien/power-consumer.md)
- [Network Port](../kategorien/network-interface.md)
- [Network](../kategorien/network.md)
- [Port](../kategorien/network-port.md)
- Port Overview
- Direct Attached Storage
- [Logical Ports](../kategorien/network-log-port.md)
- [Manual Assignment](../kategorien/manual.md)
- [Emergency Plan Assignment](../kategorien/emergency-plan.md)
- [Host Address](../kategorien/ip.md)
- [File Assignment](../kategorien/file.md)
- [Software Assignment](../kategorien/application.md)
- [Logbook](../kategorien/logbook.md)
- [Access Credentials](../kategorien/access.md)
- [Backup](../kategorien/backup.md)
- [Object Image](../kategorien/image.md)
- VRRP Membership
- [Invoice](../kategorien/invoice.md)
- Cabling

## Technical Reference

| Property | Value |
|---|---|
| **Object Type Constant** | `C__OBJTYPE__BLADE_SERVER` |
| **Group** | Hardware |
