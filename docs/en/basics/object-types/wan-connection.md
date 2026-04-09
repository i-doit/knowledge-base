---
title: "Object Type: WAN Connection"
description: Documentation of the WAN Connection object type in i-doit
icon:
status:
lang: en
---

# Object Type: WAN Connection

The **WAN Link** object type documents wide area network connections such as MPLS lines, leased lines, or internet connections. WAN links connect locations over long distances.

## Usage

- **WAN Infrastructure**: Document all WAN links with bandwidth, provider, and circuit ID.
- **Site Connectivity**: Link WAN connections with the locations they connect.
- **Redundancy**: Document redundant WAN links for high-availability analysis.

[![WAN Connection](../../assets/images/de/grundlagen/objekttypen/wan-leitung.png)](../../assets/images/de/grundlagen/objekttypen/wan-leitung.png)

## Assigned Categories

### Global Categories

- [Service Assignment](../categories/it-service.md)
- [Accounting](../categories/accounting.md)
- [General](../categories/global.md)
- [Contact Assignment](../categories/contact.md)
- [Network Port](../categories/network-interface.md)
- [Network](../categories/network.md)
- [Port](../categories/network-port.md)
- Port Overview
- [Logical Ports](../categories/network-log-port.md)
- [Emergency Plan Assignment](../categories/emergency-plan.md)
- [File Assignment](../categories/file.md)
- [Logbook](../categories/logbook.md)
- [WAN Connection](../categories/wan.md)
- VRRP Membership

## Technical Reference

| Property | Value |
|---|---|
| **Object Type Constant** | `C__OBJTYPE__WAN` |
| **Group** | Network |
