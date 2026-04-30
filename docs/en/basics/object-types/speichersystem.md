---
title: "Object Type: Storage System"
description: Documentation of the Storage System object type in i-doit
icon:
status:
lang: en
---

# Object Type: Storage System

The **Storage System** object type documents central storage systems such as SAN arrays, NAS systems, or software-defined storage. Storage systems are linked to servers via FC switches or the network.

## Usage

- **Storage Inventory**: Document all storage systems with manufacturer, model, and capacity.
- **SAN Integration**: Link the storage system with FC switches and SAN zoning.
- **Server Assignment**: Record which servers access which LUNs on the storage system.
- **Capacity Planning**: Monitor used and available storage capacity.

[![Storage System](../../assets/images/de/grundlagen/objekttypen/speichersystem.png)](../../assets/images/de/grundlagen/objekttypen/speichersystem.png)

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
- [Operating System](../categories/operating-system.md)
- [RAID Array](../categories/raid.md)
- [General](../categories/global.md)
- [Contact Assignment](../categories/contact.md)
- [Location](../categories/location.md)
- [Model](../categories/model.md)
- [Form Factor](../categories/formfactor.md)
- [Controller](../categories/controller.md)
- [Power Consumer](../categories/power-consumer.md)
- [Network Port](../categories/network-interface.md)
- [Network](../categories/network.md)
- [Port](../categories/network-port.md)
- Port Overview
- Direct Attached Storage
- [Logical Ports](../categories/network-log-port.md)
- [Manual Assignment](../categories/manual.md)
- [Emergency Plan Assignment](../categories/emergency-plan.md)
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
| **Object Type Constant** | `C__OBJTYPE__SAN` |
| **Group** | Hardware |
