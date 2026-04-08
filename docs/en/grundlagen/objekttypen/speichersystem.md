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
- [Operating System](../kategorien/operating-system.md)
- [RAID Array](../kategorien/raid.md)
- [General](../kategorien/global.md)
- [Contact Assignment](../kategorien/contact.md)
- [Location](../kategorien/location.md)
- [Model](../kategorien/model.md)
- [Form Factor](../kategorien/formfactor.md)
- [Controller](../kategorien/controller.md)
- [Power Consumer](../kategorien/power-consumer.md)
- [Network Port](../kategorien/network-interface.md)
- [Network](../kategorien/network.md)
- [Port](../kategorien/network-port.md)
- Port Overview
- Direct Attached Storage
- [Logical Ports](../kategorien/network-log-port.md)
- [Manual Assignment](../kategorien/manual.md)
- [Emergency Plan Assignment](../kategorien/emergency-plan.md)
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
| **Object Type Constant** | `C__OBJTYPE__SAN` |
| **Group** | Hardware |
