---
title: "Object Type: Cluster"
description: Documentation of the Cluster object type in i-doit
icon:
status:
lang: en
---

# Object Type: Cluster

The **Cluster** object type documents high-availability system groups. A cluster combines multiple physical or virtual servers that jointly provide services and automatically perform failover when a node fails.

## Usage

- **Cluster Topology**: Document all cluster nodes and their roles (active/passive).
- **Shared Resources**: Record shared storage and network resources of the cluster.
- **Cluster Services**: Link cluster services that operate within the cluster.
- **Failover Analysis**: Use the cluster documentation for emergency plans and impact analyses.

[![Cluster](../../assets/images/de/grundlagen/objekttypen/cluster.png)](../../assets/images/de/grundlagen/objekttypen/cluster.png)

## Assigned Categories

### Global Categories

- [Administration service](../categories/cluster-adm-service.md)
- [Service Assignment](../categories/it-service.md)
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
- [Logbook](../categories/logbook.md)

## Technical Reference

| Property | Value |
|---|---|
| **Object Type Constant** | `C__OBJTYPE__CLUSTER` |
| **Group** | Software |
