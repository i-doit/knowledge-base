---
title: "Object Type: Remote Management Controller"
description: Documentation of the Remote Management Controller object type in i-doit
icon:
status:
lang: en
---

# Object Type: Remote Management Controller

The **Remote Management Controller** object type documents out-of-band management interfaces such as iLO, iDRAC, or IPMI. These controllers enable remote access to servers independent of the operating system.

## Usage

- **Out-of-Band Management**: Document all remote management interfaces with IP address and access credentials.
- **Server Assignment**: Link the controller with the associated server.
- **Network Assignment**: Assign the controller to a dedicated management network.

[![Remote Management Controller](../../assets/images/de/grundlagen/objekttypen/remote-management-controller.png)](../../assets/images/de/grundlagen/objekttypen/remote-management-controller.png)

## Assigned Categories

### Global Categories

- Managed devices
- [General](../kategorien/global.md)
- Passwords
- [Model](../kategorien/model.md)
- [Network Port](../kategorien/network-interface.md)
- [Network](../kategorien/network.md)
- [Port](../kategorien/network-port.md)
- Port Overview
- [Logical Ports](../kategorien/network-log-port.md)
- [Host Address](../kategorien/ip.md)
- [Logbook](../kategorien/logbook.md)
- [Access Credentials](../kategorien/access.md)
- VRRP Membership

## Technical Reference

| Property | Value |
|---|---|
| **Object Type Constant** | `C__OBJTYPE__RM_CONTROLLER` |
| **Group** | Hardware |
