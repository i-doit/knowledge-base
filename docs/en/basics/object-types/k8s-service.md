---
title: "Object Type: Kubernetes Service"
description: Documentation of the Kubernetes Service object type in i-doit
icon:
status:
lang: en
---

# Object Type: Kubernetes Service

The **Kubernetes Service** object type documents Kubernetes services, i.e. the stable network endpoint through which a group of pods is reached. Namespace, workload and kind are recorded in the [Kubernetes](../categories/kubernetes.md) category.

!!! info "New in i-doit 39"
    The object types Kubernetes Service, Kubernetes Pod and Kubernetes Container are available as of i-doit 39. They are located in the object type group **Infrastructure**.

## Usage

- **Service catalog**: Document all Kubernetes services per namespace, for example `shop-frontend-svc` in the namespace `shop`.
- **Network addresses**: Record the cluster IP or the external address of the service in the [Host Address](../categories/ip.md) category.
- **Cluster assignment**: Link the object to the Kubernetes cluster (object type [Cluster](cluster.md)) via the [Cluster memberships](../categories/cluster-memberships.md) category. The cluster then appears as a relation in the CMDB-Explorer.
- **Responsibilities**: Assign the responsible team or person via [Contact assignment](../categories/contact.md).

[![Kubernetes Service](../../assets/images/en/basics/object-types/k8s-service.png)](../../assets/images/en/basics/object-types/k8s-service.png)

## Assigned Categories

### Global Categories

- [General](../categories/global.md)
- [Kubernetes](../categories/kubernetes.md)
- [Cluster memberships](../categories/cluster-memberships.md)
- [Contact assignment](../categories/contact.md)
- [Host Address](../categories/ip.md)
- [Logbook](../categories/logbook.md)
- [Relation](../categories/relation.md)
- [Version Number](../categories/version.md)
- [Status Planning](../categories/planning.md)
- Overview page
- Access permissions

## Technical Reference

| Property | Value |
|---|---|
| **Object Type Constant** | `C__OBJTYPE__K8S_SERVICE` |
| **Group** | Infrastructure |
