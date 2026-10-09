---
title: "Kategorie: Kubernetes"
description: Dokumentation der Kategorie Kubernetes in i-doit
icon:
status:
lang: de
---

# Kategorie: Kubernetes

Die Kategorie **Kubernetes** erfasst, wo eine Kubernetes-Ressource innerhalb eines Clusters einzuordnen ist: Namespace, Workload und Art. Sie ist eine **Single-Value-Kategorie**, jedes Objekt hat also genau einen Kubernetes-Eintrag. Die Kategorie wird von den Objekttypen [Kubernetes Service](../objekttypen/k8s-service.md), [Kubernetes Pod](../objekttypen/k8s-pod.md) und [Kubernetes Container](../objekttypen/k8s-container.md) verwendet.

!!! info "Neu in i-doit 39"
    Die Kategorie Kubernetes und die drei Kubernetes-Objekttypen sind ab i-doit 39 verfügbar.

Der Kubernetes-Cluster selbst ist kein Feld dieser Kategorie. Dokumentiere den Cluster als Objekt vom Typ [Cluster](../objekttypen/cluster.md) und verknüpfe die Kubernetes-Objekte über die Kategorie [Clustermitgliedschaften](cluster-memberships.md) mit ihm. So erscheint der Cluster als Beziehung und lässt sich im CMDB-Explorer auswerten.

## Verwendung

Typische Anwendungsfälle:

- **Namespace-Übersicht**: Mit dem Report Manager listest du alle Services, Pods und Container eines Namespace auf, zum Beispiel `shop` oder `monitoring`.
- **Workload-Zuordnung**: Das Feld **Workload** fasst Pods und Container zusammen, die zum selben Deployment, StatefulSet oder DaemonSet gehören.
- **Abhängigkeitsanalyse**: Zusammen mit den Kategorien [Clustermitgliedschaften](cluster-memberships.md) und [Beziehungen](relation.md) zeigt der CMDB-Explorer, welche Workloads auf welchem Cluster laufen.

[![Kubernetes](../../assets/images/de/grundlagen/kategorien/kubernetes.png)](../../assets/images/de/grundlagen/kategorien/kubernetes.png)

## Felder

### Namespace

Der Kubernetes-Namespace, zu dem die Ressource gehört, zum Beispiel `shop`, `default` oder `kube-system`.

### Workload

Der Name des Workloads, zu dem die Ressource gehört, zum Beispiel `shop-frontend`. Bei einem Pod oder Container ist das meist der Name des steuernden Deployments, StatefulSets oder DaemonSets.

### Art

Die Kubernetes-Ressourcenart (im Kubernetes-Manifest `kind`), zum Beispiel `Deployment`, `StatefulSet`, `DaemonSet` oder `Service`. Freitextfeld.

### Beschreibung

Freitext für ergänzende Angaben, zum Beispiel Labels, die Image-Version oder das zuständige Team.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__KUBERNETES` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Nein |
| **Zugeordnet zu** | [Kubernetes Service](../objekttypen/k8s-service.md), [Kubernetes Pod](../objekttypen/k8s-pod.md), [Kubernetes Container](../objekttypen/k8s-container.md) |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Namespace** | `namespace` | Text |
| **Workload** | `workload` | Text |
| **Art** | `kind` | Text |
| **Beschreibung** | `description` | Textfeld (mehrzeilig) |

### API-Beispiele

#### Eintrag erstellen

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
            "description": "Frontend des Webshops"
        }
    },
    "id": 1
}
```

#### Einträge lesen

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

#### Eintrag aktualisieren

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
