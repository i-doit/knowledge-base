---
title: "Object Type: Virtual Server"
description: Documentation of the Virtual Server object type in i-doit
icon:
status:
lang: en
---

# Object Type: Virtual Server

The **Virtual Server** object type documents virtual machines (VMs) that run on a hypervisor. Virtual servers have their own operating system and application stack but share the physical hardware of the host.

## Usage

- **VM Inventory**: Document all virtual servers with their hypervisor host and resource allocation.
- **Application Assignment**: Record which applications run on which VM.
- **Migration and Failover**: Document which host a VM can migrate to.
- **Lifecycle Management**: Track the lifecycle of VMs just like physical servers.

[![Virtual Server](../../assets/images/de/grundlagen/objekttypen/virtueller-server.png)](../../assets/images/de/grundlagen/objekttypen/virtueller-server.png)

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
- Storage Area Network
- [Virtual Devices](../kategorien/virtual-device.md)
- [Share Access](../kategorien/share-access.md)
- [Listener](../kategorien/net-listener.md)
- [Network Connections](../kategorien/net-connector.md)
- [Operating System](../kategorien/operating-system.md)
- [RAID Array](../kategorien/raid.md)
- [General](../kategorien/global.md)
- [Contact Assignment](../kategorien/contact.md)
- [Location](../kategorien/location.md)
- [Graphics Card](../kategorien/graphic.md)
- [Model](../kategorien/model.md)
- [Shares](../kategorien/shares.md)
- [CPU](../kategorien/cpu.md)
- [Controller](../kategorien/controller.md)
- [Memory](../kategorien/memory.md)
- [Network Port](../kategorien/network-interface.md)
- [Network](../kategorien/network.md)
- [Port](../kategorien/network-port.md)
- Port Overview
- Direct Attached Storage
- [Logical Ports](../kategorien/network-log-port.md)
- [Manual Assignment](../kategorien/manual.md)
- [Host Address](../kategorien/ip.md)
- [File Assignment](../kategorien/file.md)
- [Software Assignment](../kategorien/application.md)
- [Logbook](../kategorien/logbook.md)
- [Access Credentials](../kategorien/access.md)
- [Backup](../kategorien/backup.md)
- [Object Image](../kategorien/image.md)
- VRRP Membership
- Cabling

## Technical Reference

| Property | Value |
|---|---|
| **Object Type Constant** | `C__OBJTYPE__VIRTUAL_SERVER` |
| **Group** | Software |
