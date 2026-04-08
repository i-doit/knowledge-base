---
title: "Object Type: VRRP/HSRP Cluster"
description: Documentation of the VRRP/HSRP Cluster object type in i-doit
icon:
status:
lang: en
---

# Object Type: VRRP/HSRP Cluster

The **VRRP/HSRP Cluster** object type documents redundancy clusters based on VRRP or HSRP. These clusters group multiple routers or Layer 3 switches that share a virtual IP address for failover.

## Usage

- **Redundancy Configuration**: Document VRRP/HSRP clusters with member devices and virtual IPs.
- **Network Topology**: Link the cluster with the networks it serves.

[![VRRP/HSRP Cluster](../../assets/images/de/grundlagen/objekttypen/vrrp-hsrp-cluster.png)](../../assets/images/de/grundlagen/objekttypen/vrrp-hsrp-cluster.png)

## Assigned Categories

### Global Categories

- [Administration service](../kategorien/cluster-adm-service.md)
- [Service Assignment](../kategorien/it-service.md)
- [Logical Devices (LDEV Server)](../kategorien/ldev-server.md)
- [Logical Devices (Client)](../kategorien/ldev-client.md)
- [FC Port](../kategorien/controller-fc-port.md)
- [Host Bus Adapter (HBA)](../kategorien/hba.md)
- Storage Area Network
- [Cluster](../kategorien/cluster-root.md)
- Cluster
- [Cluster-Dienstzuweisung](../kategorien/cluster-service.md)
- [Cluster Members](../kategorien/cluster-members.md)
- Shared Storage
- [Virtual Host](../kategorien/virtual-host.md)
- [Guest Systems](../kategorien/guest-systems.md)
- [Virtual Switches](../kategorien/virtual-switch.md)
- Shared virtual switches
- Cluster vitality
- [General](../kategorien/global.md)
- [Host Address](../kategorien/ip.md)
- [Logbook](../kategorien/logbook.md)
- VRRP
- VRRP Member

## Technical Reference

| Property | Value |
|---|---|
| **Object Type Constant** | `C__OBJTYPE__CLUSTER_VRRP_HSRP` |
| **Group** | Network |
