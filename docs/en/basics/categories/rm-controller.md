---
title: "Category: Remote Management Controller"
description: Documentation of the Remote Management Controller category in i-doit
icon:
status:
lang: en
---

# Category: Remote Management Controller

The **Remote Management Controller** category documents the out-of-band management interfaces of a server — i.e. components such as Dell iDRAC, HPE iLO, Supermicro BMC, or generic IPMI interfaces. It is a **multi-value category**, since a server can theoretically have multiple management controllers (e.g. an iDRAC and an additional BMC).

!!! tip "Why out-of-band management should be documented"
    Remote management controllers are the last lifeline when a server is no longer reachable via the regular network. Anyone who has ever stood in a data center at three in the morning because the iDRAC IP was documented nowhere knows: This category saves hours in an emergency. Enter at least the primary access URL and the assigned management object.

## Why This Category Matters

Physical servers in data centers are almost never administered via keyboard and monitor — the remote management controller handles that. It enables console access, restart, BIOS configuration, and hardware monitoring, even when the operating system is no longer responding. Without documented management access points, the administrator depends on physical access in case of a failure — which can take hours or days at distributed locations or colocation data centers.

## Usage

Typical use cases:

- **Lights-out administration**: In data centers without permanent on-site presence, the remote management controller is the primary access path for hardware operations. The category provides the URL through which the administrator reaches the web interface of the controller.
- **Incident Response**: Server no longer responding? The documented management URL enables immediate out-of-band access — without having to search through password safes or wiki pages first. In combination with the category [Access](access.md), this provides a complete picture of all access paths.
- **Hardware monitoring**: Modern management controllers report temperatures, fan speeds, power supply status, and hard drive health. Documentation of the controller in the CMDB ensures that monitoring systems know which controller to query.
- **Firmware management**: Management controllers require regular firmware updates. Using reports, you can evaluate which servers have which controller type — and thus which firmware versions need to be rolled out.

[![Remote Management Controller](../../assets/images/de/grundlagen/kategorien/rm-controller.png)](../../assets/images/de/grundlagen/kategorien/rm-controller.png)

## Fields

### Primary access URL

The URL through which the web interface of the management controller is reachable — e.g. `https://idrac-srv01.mgmt.example.com` or `https://192.168.10.51`. This field is the central starting point for administrators who need to access the controller. The value is imported from the [Access](access.md) category of the linked management object.

!!! info "Access URL via the linked object"
    The primary URL is not edited directly in this field, but rather imported from the assigned remote management object (field "Remote Management Controller"). Maintain the URL in the [Access](access.md) category of the management object — it then appears here automatically.

### Remote Management Controller

An object browser field that refers to the management controller object. In practice, a separate object of the type "Remote Management Controller" is often created, which carries the IP address (via the category [Host address](ip.md)) and the access URL (via [Access](access.md)) of the controller. The link here establishes the relationship between the physical server and its management controller.

### Description

Free text for additional information: controller type (iDRAC 9, iLO 5, BMC), firmware version, notes on network connectivity (dedicated MGMT VLAN vs. shared NIC), default credentials reference, or special configuration notes.

## Technical Reference

| Property | Value |
|---|---|
| **Category Constant** | `C__CATG__RM_CONTROLLER` |
| **Type** | Global category |
| **Multi-Value** | Yes |
| **Assigned to** | Server, Blade Server, Blade Chassis etc. |

### Fields (API Reference)

| Field | API Key | Type |
|---|---|---|
| **Primary access URL** | `remote_url` | Text (read-only, from linked object) |
| **Remote Management Controller** | `connected_object` | Object browser (connection object) |
| **Description** | `description` | Text field (multi-line) |

### API Examples

#### Create Entry

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "your-api-key",
        "object": 1042,
        "category": "C__CATG__RM_CONTROLLER",
        "data": {
            "connected_object": 2050,
            "description": "Dell iDRAC 9 Enterprise, Firmware 6.10.30.00, dedicated MGMT VLAN 10"
        }
    },
    "id": 1
}
```

#### Read Entries

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.read",
    "params": {
        "apikey": "your-api-key",
        "object": 1042,
        "category": "C__CATG__RM_CONTROLLER"
    },
    "id": 2
}
```

#### Update Entry

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "your-api-key",
        "object": 1042,
        "category": "C__CATG__RM_CONTROLLER",
        "entry": 1,
        "data": {
            "description": "2026-04: Firmware update to 7.00.00.00 completed, new web UI active."
        }
    },
    "id": 3
}
```
