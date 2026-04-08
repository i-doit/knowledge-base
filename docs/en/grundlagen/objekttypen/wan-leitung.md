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

- [Service Assignment](../kategorien/it-service.md)
- [Accounting](../kategorien/accounting.md)
- [General](../kategorien/global.md)
- [Contact Assignment](../kategorien/contact.md)
- [Network Port](../kategorien/network-interface.md)
- [Network](../kategorien/network.md)
- [Port](../kategorien/network-port.md)
- Port Overview
- [Logical Ports](../kategorien/network-log-port.md)
- [Emergency Plan Assignment](../kategorien/emergency-plan.md)
- [File Assignment](../kategorien/file.md)
- [Logbook](../kategorien/logbook.md)
- [WAN Connection](../kategorien/wan.md)
- VRRP Membership

## Technical Reference

| Property | Value |
|---|---|
| **Object Type Constant** | `C__OBJTYPE__WAN` |
| **Group** | Network |
