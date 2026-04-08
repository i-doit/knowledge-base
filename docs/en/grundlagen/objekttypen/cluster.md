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

- [Administration service](../kategorien/cluster-adm-service.md)
- [Service Assignment](../kategorien/it-service.md)
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
- [Logbook](../kategorien/logbook.md)

## Technical Reference

| Property | Value |
|---|---|
| **Object Type Constant** | `C__OBJTYPE__CLUSTER` |
| **Group** | Software |
