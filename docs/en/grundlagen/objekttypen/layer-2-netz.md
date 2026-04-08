---
title: "Object Type: Layer 2 Network"
description: Documentation of the Layer 2 Network object type in i-doit
icon:
status:
lang: en
---

# Object Type: Layer 2 Network

The **Layer 2 Network** object type documents VLANs. A Layer 2 network represents a logical network segment at OSI Layer 2 and connects ports on switches with each other.

## Usage

- **VLAN Management**: Document all VLANs with ID, name, and description.
- **Port Assignment**: Assign switch ports to a VLAN.
- **Layer 3 Linking**: Connect VLANs with IP subnets for complete network documentation.
- **Security Zones**: Use Layer 2 networks to document network segmentation and security zones.

[![Layer 2 Network](../../assets/images/de/grundlagen/objekttypen/layer-2-netz.png)](../../assets/images/de/grundlagen/objekttypen/layer-2-netz.png)

## Assigned Categories

### Global Categories

- [General](../kategorien/global.md)
- QinQ SP-VLAN
- QinQ CE-VLAN
- [Logbook](../kategorien/logbook.md)

### Specific Category

The specific category for this object type is Layer 2 Net.
The specific category for this object type is Assigned ports.
The specific category for this object type is Assigned logical ports.

## Technical Reference

| Property | Value |
|---|---|
| **Object Type Constant** | `C__OBJTYPE__LAYER2_NET` |
| **Group** | Network |
