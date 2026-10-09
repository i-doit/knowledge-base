---
title: "Object Type: Kubernetes Container"
description: Documentation of the Kubernetes Container object type in i-doit
icon:
status:
lang: en
---

# Object Type: Kubernetes Container

The **Kubernetes Container** object type documents individual containers that run inside a Kubernetes pod. Namespace, workload and kind are recorded in the [Kubernetes](../categories/kubernetes.md) category.

!!! info "New in i-doit 39"
    The object types Kubernetes Service, Kubernetes Pod and Kubernetes Container are available as of i-doit 39. They are located in the object type group **Infrastructure**.

## Usage

- **Container inventory**: Document the containers of a workload, for example `nginx` in the Deployment `shop-frontend`.
- **Image and version**: Record the container image and its version in the [Version Number](../categories/version.md) category or in the description.
- **Cluster assignment**: Link the object to the Kubernetes cluster (object type [Cluster](cluster.md)) via the [Cluster memberships](../categories/cluster-memberships.md) category. The cluster then appears as a relation in the CMDB-Explorer.
- **Responsibilities**: Assign the responsible team or person via [Contact assignment](../categories/contact.md).

[![Kubernetes Container](../../assets/images/en/basics/object-types/k8s-container.png)](../../assets/images/en/basics/object-types/k8s-container.png)

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
| **Object Type Constant** | `C__OBJTYPE__K8S_CONTAINER` |
| **Group** | Infrastructure |
