---
title: "Object Type: Layer 3 Network"
description: Documentation of the Layer 3 Network object type in i-doit
icon:
status:
lang: en
---

# Object Type: Layer 3 Network

The **Layer 3 Network** object type documents IP subnets (IPv4 and IPv6). Each subnet object represents an IP address range and serves as the basis for IP address management in i-doit.

## Usage

- **IP Address Management**: Document all IP subnets with address, mask, and gateway. i-doit shows occupied and free addresses within the network.
- **Object Assignment**: Device objects receive their IP addresses through assignment to a Layer 3 network.
- **VLAN Linking**: Connect Layer 3 networks with Layer 2 networks (VLANs) for complete network documentation.
- **Supernet Hierarchy**: Assign subnets to a parent supernet for a clear address space hierarchy.
- **Reports**: Create reports on IP utilization, free addresses, and assigned devices per subnet.

[![Layer 3 Network](../../assets/images/de/grundlagen/objekttypen/layer-3-netz.png)](../../assets/images/de/grundlagen/objekttypen/layer-3-netz.png)

## Assigned Categories

### Global Categories

- [Service Assignment](../categories/it-service.md)
- [Accounting](../categories/accounting.md)
- [General](../categories/global.md)
- [Logbook](../categories/logbook.md)

### Specific Category

The specific category for this object type is [Net](../categories/s-net.md).
The specific category for this object type is [IP list](../categories/s-net-ip-addresses.md).
The specific category for this object type is [DHCP](../categories/s-net-dhcp.md).
The specific category for this object type is [Network Zone](../categories/s-net-zone.md).

## Technical Reference

| Property | Value |
|---|---|
| **Object Type Constant** | `C__OBJTYPE__LAYER3_NET` |
| **Group** | Network |
