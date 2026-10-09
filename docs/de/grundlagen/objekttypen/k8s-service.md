---
title: "Objekttyp: Kubernetes Service"
description: Dokumentation des Objekttyps Kubernetes Service in i-doit
icon:
status:
lang: de
---

# Objekttyp: Kubernetes Service

Der Objekttyp **Kubernetes Service** dokumentiert Kubernetes-Services, also den stabilen Netzwerk-Endpunkt, über den eine Gruppe von Pods erreichbar ist. Namespace, Workload und Art werden in der Kategorie [Kubernetes](../kategorien/kubernetes.md) erfasst.

!!! info "Neu in i-doit 39"
    Die Objekttypen Kubernetes Service, Kubernetes Pod und Kubernetes Container sind ab i-doit 39 verfügbar. Sie liegen in der Objekttypgruppe **Infrastruktur**.

## Verwendung

- **Service-Katalog**: Dokumentiere alle Kubernetes-Services je Namespace, zum Beispiel `shop-frontend-svc` im Namespace `shop`.
- **Netzwerkadressen**: Erfasse die Cluster-IP oder die externe Adresse des Services in der Kategorie [Hostadresse](../kategorien/ip.md).
- **Cluster-Zuordnung**: Verknüpfe das Objekt über die Kategorie [Clustermitgliedschaften](../kategorien/cluster-memberships.md) mit dem Kubernetes-Cluster (Objekttyp [Cluster](cluster.md)). Der Cluster erscheint dann als Beziehung im CMDB-Explorer.
- **Zuständigkeiten**: Weise das zuständige Team oder die zuständige Person über die [Kontaktzuweisung](../kategorien/contact.md) zu.

[![Kubernetes Service](../../assets/images/de/grundlagen/objekttypen/k8s-service.png)](../../assets/images/de/grundlagen/objekttypen/k8s-service.png)

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
| **Objekttyp-Konstante** | `C__OBJTYPE__K8S_SERVICE` |
| **Gruppe** | Infrastruktur |
