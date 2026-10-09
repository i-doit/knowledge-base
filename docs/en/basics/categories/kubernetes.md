---
title: "Category: Kubernetes"
description: Documentation of the Kubernetes category in i-doit
icon:
status:
lang: en
---

# Category: Kubernetes

The **Kubernetes** category records where a Kubernetes resource belongs inside a cluster: namespace, workload and kind. It is a **single-value category**, so each object has exactly one Kubernetes entry. The category is used by the object types [Kubernetes Service](../object-types/k8s-service.md), [Kubernetes Pod](../object-types/k8s-pod.md) and [Kubernetes Container](../object-types/k8s-container.md).

!!! info "New in i-doit 39"
    The Kubernetes category and the three Kubernetes object types are available as of i-doit 39.

The Kubernetes cluster itself is not a field of this category. Document the cluster as an object of type [Cluster](../object-types/cluster.md) and link the Kubernetes objects to it with the [Cluster memberships](cluster-memberships.md) category. This way the cluster appears as a relation and can be evaluated in the CMDB-Explorer.

## Usage

Typical use cases:

- **Namespace overview**: Use the Report Manager to list all services, pods and containers of one namespace, for example `shop` or `monitoring`.
- **Workload assignment**: The field **Workload** groups pods and containers that belong to the same Deployment, StatefulSet or DaemonSet.
- **Dependency analysis**: Together with the [Cluster memberships](cluster-memberships.md) category and the [Relation](relation.md) category, the CMDB-Explorer shows which workloads run on which cluster.

[![Kubernetes](../../assets/images/en/basics/categories/kubernetes.png)](../../assets/images/en/basics/categories/kubernetes.png)

## Fields

### Namespace

The Kubernetes namespace the resource belongs to, for example `shop`, `default` or `kube-system`.

### Workload

The name of the workload the resource belongs to, for example `shop-frontend`. For a pod or container this is usually the name of the controlling Deployment, StatefulSet or DaemonSet.

### Kind

The Kubernetes resource kind, for example `Deployment`, `StatefulSet`, `DaemonSet` or `Service`. Free text field.

### Description

Free text for additional information, for example labels, the image version or the responsible team.

## Technical Reference

| Property | Value |
|---|---|
| **Category Constant** | `C__CATG__KUBERNETES` |
| **Type** | Global category |
| **Multi-Value** | No |
| **Assigned to** | [Kubernetes Service](../object-types/k8s-service.md), [Kubernetes Pod](../object-types/k8s-pod.md), [Kubernetes Container](../object-types/k8s-container.md) |

### Fields (API Reference)

| Field | API Key | Type |
|---|---|---|
| **Namespace** | `namespace` | Text |
| **Workload** | `workload` | Text |
| **Kind** | `kind` | Text |
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
        "category": "C__CATG__KUBERNETES",
        "data": {
            "namespace": "shop",
            "workload": "shop-frontend",
            "kind": "Deployment",
            "description": "Frontend of the web shop"
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
        "objID": 123,
        "category": "C__CATG__KUBERNETES"
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
        "category": "C__CATG__KUBERNETES",
        "data": {
            "namespace": "shop-staging"
        }
    },
    "id": 3
}
```
