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

- [Administration service](../categories/cluster-adm-service.md)
- [Service Assignment](../categories/it-service.md)
- [Logical Devices (LDEV Server)](../categories/ldev-server.md)
- [Logical Devices (Client)](../categories/ldev-client.md)
- [FC Port](../categories/controller-fc-port.md)
- [Host Bus Adapter (HBA)](../categories/hba.md)
- Storage Area Network
- [Cluster](../categories/cluster-root.md)
- Cluster
- [Cluster-Dienstzuweisung](../categories/cluster-service.md)
- [Cluster Members](../categories/cluster-members.md)
- Shared Storage
- [Virtual Host](../categories/virtual-host.md)
- [Guest Systems](../categories/guest-systems.md)
- [Virtual Switches](../categories/virtual-switch.md)
- Shared virtual switches
- Cluster vitality
- [General](../categories/global.md)
- [Host Address](../categories/ip.md)
- [Logbook](../categories/logbook.md)
- VRRP
- VRRP Member

## Technical Reference

| Property | Value |
|---|---|
| **Object Type Constant** | `C__OBJTYPE__CLUSTER_VRRP_HSRP` |
| **Group** | Network |
