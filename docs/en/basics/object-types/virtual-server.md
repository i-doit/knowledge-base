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

- [Drive](../categories/drive.md)
- [Connectors](../categories/connector.md)
- [Service Assignment](../categories/it-service.md)
- [Interface](../categories/universal-interface.md)
- [Device](../categories/storage-device.md)
- [Logical Devices (LDEV Server)](../categories/ldev-server.md)
- [Logical Devices (Client)](../categories/ldev-client.md)
- [FC Port](../categories/controller-fc-port.md)
- [Host Bus Adapter (HBA)](../categories/hba.md)
- Storage Area Network
- [Virtual Devices](../categories/virtual-device.md)
- [Share Access](../categories/share-access.md)
- [Listener](../categories/net-listener.md)
- [Network Connections](../categories/net-connector.md)
- [Operating System](../categories/operating-system.md)
- [RAID Array](../categories/raid.md)
- [General](../categories/global.md)
- [Contact Assignment](../categories/contact.md)
- [Location](../categories/location.md)
- [Graphics Card](../categories/graphic.md)
- [Model](../categories/model.md)
- [Shares](../categories/shares.md)
- [CPU](../categories/cpu.md)
- [Controller](../categories/controller.md)
- [Memory](../categories/memory.md)
- [Network Port](../categories/network-interface.md)
- [Network](../categories/network.md)
- [Port](../categories/network-port.md)
- Port Overview
- Direct Attached Storage
- [Logical Ports](../categories/network-log-port.md)
- [Manual Assignment](../categories/manual.md)
- [Host Address](../categories/ip.md)
- [File Assignment](../categories/file.md)
- [Software Assignment](../categories/application.md)
- [Logbook](../categories/logbook.md)
- [Access Credentials](../categories/access.md)
- [Backup](../categories/backup.md)
- [Object Image](../categories/image.md)
- VRRP Membership
- Cabling

## Technical Reference

| Property | Value |
|---|---|
| **Object Type Constant** | `C__OBJTYPE__VIRTUAL_SERVER` |
| **Group** | Software |
