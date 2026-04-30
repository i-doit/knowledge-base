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
- [Contract Assignment](../categories/contract-assignment.md)
- [Share Access](../categories/share-access.md)
- [Listener](../categories/net-listener.md)
- [Network Connections](../categories/net-connector.md)
- [Operating System](../categories/operating-system.md)
- [Remote Management Controller](../categories/rm-controller.md)
- [DBMS Information](../categories/database.md)
- [Database Tables](../categories/database-table.md)
- [Database Schema](../categories/database-sa.md)
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
| **Object Type Constant** | `C__OBJTYPE__SERVER` |
| **Group** | Hardware |
