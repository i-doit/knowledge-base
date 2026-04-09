---
title: "Object Type: Cluster Service"
description: Documentation of the Cluster Service object type in i-doit
icon:
status:
lang: en
---

# Object Type: Cluster Service

The **Cluster Service** object type documents applications and services that operate within a cluster and are failover-capable. Cluster services depend on cluster resources such as shared storage and virtual IPs.

## Usage

- **Cluster Services**: Document all cluster-capable services with their resource dependencies.
- **Failover Analysis**: Assign cluster services to a cluster object and document possible failover targets.

[![Cluster Service](../../assets/images/de/grundlagen/objekttypen/clusterdienst.png)](../../assets/images/de/grundlagen/objekttypen/clusterdienst.png)

## Assigned Categories

### Global Categories

- [Drive](../categories/drive.md)
- [Service Assignment](../categories/it-service.md)
- [Version](../categories/version.md)
- [Share Access](../categories/share-access.md)
- [Computing Resources](../categories/computing-resources.md)
- [General](../categories/global.md)
- [Shares](../categories/shares.md)
- [Certificate](../categories/certificate.md)
- [Host Address](../categories/ip.md)
- [Logbook](../categories/logbook.md)

### Specific Category

The specific category for this object type is Assigned clusters.
The specific category for this object type is Cluster installation.

## Technical Reference

| Property | Value |
|---|---|
| **Object Type Constant** | `C__OBJTYPE__CLUSTER_SERVICE` |
| **Group** | Software |
