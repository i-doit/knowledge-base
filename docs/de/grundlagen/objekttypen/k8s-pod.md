---
title: "Objekttyp: Kubernetes Pod"
description: Dokumentation des Objekttyps Kubernetes Pod in i-doit
icon:
status:
lang: de
---

# Objekttyp: Kubernetes Pod

Der Objekttyp **Kubernetes Pod** dokumentiert Pods, die kleinste deploybare Einheit in Kubernetes. Ein Pod führt einen oder mehrere Container aus. Namespace, Workload und Art werden in der Kategorie [Kubernetes](../kategorien/kubernetes.md) erfasst.

!!! info "Neu in i-doit 39"
    Die Objekttypen Kubernetes Service, Kubernetes Pod und Kubernetes Container sind ab i-doit 39 verfügbar. Sie liegen in der Objekttypgruppe **Infrastruktur**.

## Verwendung

- **Workload-Dokumentation**: Dokumentiere die Pods eines Workloads, zum Beispiel `shop-frontend-7d9f8-x2k4p` des Deployments `shop-frontend`.
- **Gruppierung mit Containern und Services**: Verwende für den Pod, seine [Kubernetes Container](k8s-container.md) und den [Kubernetes Service](k8s-service.md) dieselben Werte für Namespace und Workload. Ein Report auf diese Felder zeigt dann, welche Objekte zusammengehören.
- **Cluster-Zuordnung**: Verknüpfe das Objekt über die Kategorie [Clustermitgliedschaften](../kategorien/cluster-memberships.md) mit dem Kubernetes-Cluster (Objekttyp [Cluster](cluster.md)). Der Cluster erscheint dann als Beziehung im CMDB-Explorer.
- **Zuständigkeiten**: Weise das zuständige Team oder die zuständige Person über die [Kontaktzuweisung](../kategorien/contact.md) zu.

[![Kubernetes Pod](../../assets/images/de/grundlagen/objekttypen/k8s-pod.png)](../../assets/images/de/grundlagen/objekttypen/k8s-pod.png)

## Zugeordnete Kategorien

### Globale Kategorien

- [Allgemein](../kategorien/global.md)
- [Kubernetes](../kategorien/kubernetes.md)
- [Clustermitgliedschaften](../kategorien/cluster-memberships.md)
- [Kontaktzuweisung](../kategorien/contact.md)
- [Hostadresse](../kategorien/ip.md)
- [Logbuch](../kategorien/logbook.md)
- [Beziehungen](../kategorien/relation.md)
- [Version](../kategorien/version.md)
- [Status-Planung](../kategorien/planning.md)
- Übersichtsseite
- Rechteverwaltung

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Objekttyp-Konstante** | `C__OBJTYPE__K8S_POD` |
| **Gruppe** | Infrastruktur |
