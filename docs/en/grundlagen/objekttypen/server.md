---
title: "Object Type: Server"
description: Documentation of the Server object type in i-doit
icon:
status:
lang: en
---

# Object Type: Server

The **Server** object type documents physical servers in the IT infrastructure. Each entry represents a real device – from small tower servers to high-performance rack servers. Servers are one of the central objects in i-doit: they form the core of the hardware inventory and connect to operating systems, applications, network ports, locations, and persons.

## Usage

- **Hardware Inventory**: Record manufacturer, model, form factor, and installed components (CPU, RAM, drives). Together, this creates a complete technical profile of each server.
- **Location Assignment**: Assign the server to a rack in a room of a building. The graphical rack view shows the occupied rack unit range.
- **Link Operating System and Applications**: Document which OS and which services run on the server – the basis for impact analyses.
- **Lifecycle Management**: Track the entire lifecycle via the CMDB status – from planning through operation to decommissioning.
- **Virtualization**: Mark servers as virtualization hosts and manage the associated virtual machines from there.

[![Server](../../assets/images/de/grundlagen/objekttypen/server.png)](../../assets/images/de/grundlagen/objekttypen/server.png)

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
- [Contract Assignment](../kategorien/contract-assignment.md)
- [Share Access](../kategorien/share-access.md)
- [Listener](../kategorien/net-listener.md)
- [Network Connections](../kategorien/net-connector.md)
- [Operating System](../kategorien/operating-system.md)
- [Remote Management Controller](../kategorien/rm-controller.md)
- [DBMS Information](../kategorien/database.md)
- [Database Tables](../kategorien/database-table.md)
- [Database Schema](../kategorien/database-sa.md)
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
| **Object Type Constant** | `C__OBJTYPE__SERVER` |
| **Group** | Hardware |
