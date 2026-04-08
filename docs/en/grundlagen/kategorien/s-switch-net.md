---
title: "Category: Switch"
description: Documentation of the Switch category in i-doit
icon:
status:
lang: en
---

# Category: Switch

The **Switch** category documents the network-specific properties of a switch object. It is a **specific category** available exclusively for the object type **Switch**. Here, the VLAN management protocol, the role in the network, and the spanning tree protocol are recorded -- information that is central to network planning, troubleshooting, and security documentation.

!!! info "Documenting ports separately"
    The Switch category only contains the overarching switch properties. The individual network ports and their configuration (VLAN assignment, speed, duplex) are documented in the [Port](network-port.md) category. Both categories together provide the complete picture of a switch.

## Usage

Typical use cases:

- **Network documentation**: Record the VLAN management protocol (e.g. VTP, GVRP, manual) and the spanning tree protocol (e.g. RSTP, MSTP, PVST+). Together with the [Port](network-port.md) and [Network](s-net.md) categories, this creates a complete network documentation.
- **Role in the network**: Document whether the switch functions as a **Core**, **Distribution**, or **Access Switch**. This information is indispensable for network architecture and impact analyses -- the failure of a core switch has far more extensive consequences than that of an access switch.
- **Spanning tree analysis**: During loop problems or after network changes, a report on all switches with their spanning tree protocol immediately shows whether the configuration is consistent. Mixed STP variants (e.g. RSTP on one switch, PVST+ on another) are a common cause of network problems.
- **VLAN management and security**: Documentation of the VLAN management protocol is security-relevant. A report can show which switches use VTP in server mode -- an accidental deletion of VLANs on such a switch can affect the entire network.

!!! warning "Stacking configuration"
    For stacked switches, it is recommended to create the entire stack as a single object in i-doit and document the stacking details (master/member, stack IDs, priorities) in the description field. Alternatively, the individual stack members can be modeled as separate objects with a cluster relationship.

[![Switch](../../assets/images/de/grundlagen/kategorien/s-switch-net.png)](../../assets/images/de/grundlagen/kategorien/s-switch-net.png)

## Fields

### VLAN management protocol

The protocol used to manage VLANs on the switch, e.g. `VTP` (VLAN Trunking Protocol), `GVRP` (GARP VLAN Registration Protocol), or `Manual`. Dialog+ field -- custom values can be added as needed. For manual VLAN management, it is recommended to explicitly enter this so that it is clear that no dynamic protocol is in use.

### Role

The role of the switch in the network, e.g. `Core`, `Distribution`, `Access`, or `Edge`. Dialog+ field -- custom values can be added as needed. This classification is crucial for impact analyses: If a core switch fails, all connected distribution and access switches are potentially affected.

### Spanning Tree

The configured spanning tree protocol, e.g. `RSTP` (Rapid Spanning Tree), `MSTP` (Multiple Spanning Tree), `PVST+` (Per-VLAN Spanning Tree Plus), or `Disabled`. Dialog+ field -- custom values can be added as needed. **Important**: Also document when spanning tree is intentionally disabled (e.g. in pure spine-leaf architectures) so that this is not incorrectly interpreted as a configuration gap.

### Description

Free text for additional details: firmware version, stacking configuration, PoE budget, management VLAN, uplink configuration, or special features such as 802.1X configuration.

## Technical Reference

| Property | Value |
|---|---|
| **Category Constant** | `C__CATS__SWITCH_NET` |
| **Type** | Specific category |
| **Multi-Value** | No |
| **Assigned to** | Switch |

### Fields (API Reference)

| Field | API Key | Type |
|---|---|---|
| **VLAN management protocol** | `vlan` | Dialog+ (extensible selection) |
| **Role** | `role` | Dialog+ (extensible selection) |
| **Spanning Tree** | `spanning_tree` | Dialog+ (extensible selection) |
| **Description** | `description` | Text field (multi-line) |

### API Examples

#### Create Entry

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "your-api-key",
        "object": 123,
        "category": "C__CATS__SWITCH_NET",
        "data": {
            "vlan": "VTP",
            "role": "Core",
            "spanning_tree": "RSTP",
            "description": "Core-Switch Rechenzentrum A, Stack aus 2x Catalyst 9300, 48 Ports PoE+, FW 17.9.4"
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
        "object": 123,
        "category": "C__CATS__SWITCH_NET"
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
        "object": 123,
        "category": "C__CATS__SWITCH_NET",
        "entry": 1,
        "data": {
            "spanning_tree": "MSTP",
            "description": "Migration von RSTP auf MSTP abgeschlossen, Instanz 1: VLAN 10-50, Instanz 2: VLAN 100-200."
        }
    },
    "id": 3
}
```
