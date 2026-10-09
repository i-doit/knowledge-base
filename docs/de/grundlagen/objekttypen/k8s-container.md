---
title: "Objekttyp: Kubernetes Container"
description: Dokumentation des Objekttyps Kubernetes Container in i-doit
icon:
status:
lang: de
---

# Objekttyp: Kubernetes Container

Der Objekttyp **Kubernetes Container** dokumentiert einzelne Container, die in einem Kubernetes-Pod laufen. Namespace, Workload und Art werden in der Kategorie [Kubernetes](../kategorien/kubernetes.md) erfasst.

!!! info "Neu in i-doit 39"
    Die Objekttypen Kubernetes Service, Kubernetes Pod und Kubernetes Container sind ab i-doit 39 verfügbar. Sie liegen in der Objekttypgruppe **Infrastruktur**.

## Verwendung

- **Container-Inventar**: Dokumentiere die Container eines Workloads, zum Beispiel `nginx` im Deployment `shop-frontend`.
- **Image und Version**: Erfasse das Container-Image und seine Version in der Kategorie [Version](../kategorien/version.md) oder in der Beschreibung.
- **Cluster-Zuordnung**: Verknüpfe das Objekt über die Kategorie [Clustermitgliedschaften](../kategorien/cluster-memberships.md) mit dem Kubernetes-Cluster (Objekttyp [Cluster](cluster.md)). Der Cluster erscheint dann als Beziehung im CMDB-Explorer.
- **Zuständigkeiten**: Weise das zuständige Team oder die zuständige Person über die [Kontaktzuweisung](../kategorien/contact.md) zu.

[![Kubernetes Container](../../assets/images/de/grundlagen/objekttypen/k8s-container.png)](../../assets/images/de/grundlagen/objekttypen/k8s-container.png)

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
| **Objekttyp-Konstante** | `C__OBJTYPE__K8S_CONTAINER` |
| **Gruppe** | Infrastruktur |
