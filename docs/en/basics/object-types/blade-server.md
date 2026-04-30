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

- [Drive](../categories/drive.md)
- [Connectors](../categories/connector.md)
- [Service Assignment](../categories/it-service.md)
- [Interface](../categories/universal-interface.md)
- [Device](../categories/storage-device.md)
- [Logical Devices (LDEV Server)](../categories/ldev-server.md)
- [Logical Devices (Client)](../categories/ldev-client.md)
- [FC Port](../categories/controller-fc-port.md)
- [Host Bus Adapter (HBA)](../categories/hba.md)
- [Accounting](../categories/accounting.md)
- Storage Area Network
- [Cluster Memberships](../categories/cluster-memberships.md)
- [Virtual Host](../categories/virtual-host.md)
- [Guest Systems](../categories/guest-systems.md)
- [Virtual Switches](../categories/virtual-switch.md)
- [Virtual Devices](../categories/virtual-device.md)
- [Backup (Assigned Objects)](../categories/backup--assigned-objects.md)
- [Group Memberships](../categories/group-memberships.md)
- [Share Access](../categories/share-access.md)
- [Operating System](../categories/operating-system.md)
- [RAID Array](../categories/raid.md)
- [General](../categories/global.md)
- [Contact Assignment](../categories/contact.md)
- [Location](../categories/location.md)
- [Graphics Card](../categories/graphic.md)
- [Model](../categories/model.md)
- [Shares](../categories/shares.md)
- [Form Factor](../categories/formfactor.md)
- [Sound Card](../categories/sound.md)
- [CPU](../categories/cpu.md)
- [Controller](../categories/controller.md)
- [Memory](../categories/memory.md)
- [Power Consumer](../categories/power-consumer.md)
- [Network Port](../categories/network-interface.md)
- [Network](../categories/network.md)
- [Port](../categories/network-port.md)
- Port Overview
- Direct Attached Storage
- [Logical Ports](../categories/network-log-port.md)
- [Manual Assignment](../categories/manual.md)
- [Emergency Plan Assignment](../categories/emergency-plan.md)
- [Host Address](../categories/ip.md)
- [File Assignment](../categories/file.md)
- [Software Assignment](../categories/application.md)
- [Logbook](../categories/logbook.md)
- [Access Credentials](../categories/access.md)
- [Backup](../categories/backup.md)
- [Object Image](../categories/image.md)
- VRRP Membership
- [Invoice](../categories/invoice.md)
- Cabling

## Technical Reference

| Property | Value |
|---|---|
| **Object Type Constant** | `C__OBJTYPE__BLADE_SERVER` |
| **Group** | Hardware |
