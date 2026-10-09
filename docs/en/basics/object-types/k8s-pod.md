---
title: "Object Type: Kubernetes Pod"
description: Documentation of the Kubernetes Pod object type in i-doit
icon:
status:
lang: en
---

# Object Type: Kubernetes Pod

The **Kubernetes Pod** object type documents pods, the smallest deployable unit in Kubernetes. A pod runs one or more containers. Namespace, workload and kind are recorded in the [Kubernetes](../categories/kubernetes.md) category.

!!! info "New in i-doit 39"
    The object types Kubernetes Service, Kubernetes Pod and Kubernetes Container are available as of i-doit 39. They are located in the object type group **Infrastructure**.

## Usage

- **Workload documentation**: Document the pods of a workload, for example `shop-frontend-7d9f8-x2k4p` of the Deployment `shop-frontend`.
- **Grouping with containers and services**: Use the same Namespace and Workload values for the pod, its [Kubernetes Containers](k8s-container.md) and the [Kubernetes Service](k8s-service.md). A report on these fields then shows which objects belong together.
- **Cluster assignment**: Link the object to the Kubernetes cluster (object type [Cluster](cluster.md)) via the [Cluster memberships](../categories/cluster-memberships.md) category. The cluster then appears as a relation in the CMDB-Explorer.
- **Responsibilities**: Assign the responsible team or person via [Contact assignment](../categories/contact.md).

[![Kubernetes Pod](../../assets/images/en/basics/object-types/k8s-pod.png)](../../assets/images/en/basics/object-types/k8s-pod.png)

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
| **Object Type Constant** | `C__OBJTYPE__K8S_POD` |
| **Group** | Infrastructure |
