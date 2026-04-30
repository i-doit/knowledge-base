---
title: "Object Type: Device/Appliance"
description: Documentation of the Device/Appliance object type in i-doit
icon:
status:
lang: en
---

# Object Type: Device/Appliance

The **Device/Appliance** object type documents specialized hardware appliances operated as black boxes – typically firewalls, load balancers, or dedicated security devices. Unlike servers, the internal configuration is usually not relevant.

## Usage

- **Security Infrastructure**: Document firewalls, IDS/IPS systems, and other security appliances.
- **Network Topology**: Link appliances to the network segments they protect or connect.
- **Rack Integration and Location**: Assign the appliance to its rack location.
- **Maintenance Contracts**: Record support contracts and license expiration dates.

[![Device/Appliance](../../assets/images/de/grundlagen/objekttypen/appliance.png)](../../assets/images/de/grundlagen/objekttypen/appliance.png)

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
| **Object Type Constant** | `C__OBJTYPE__APPLIANCE` |
| **Group** | Hardware |
