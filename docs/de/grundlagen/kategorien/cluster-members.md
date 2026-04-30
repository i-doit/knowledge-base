---
title: "Kategorie: Clustermitglieder"
description: Dokumentation der Kategorie Clustermitglieder in i-doit
icon:
status:
lang: de
---

# Kategorie: Clustermitglieder

Die Kategorie **Clustermitglieder** listet die Server und Hosts auf, die einem Cluster als Knoten angehören. Sie wird auf dem **Cluster-Objekt** gepflegt und ist eine **Multi-Value-Kategorie** -- pro Cluster können beliebig viele Mitglieder zugeordnet werden.

!!! info "Clustermitglieder vs. Clustermitgliedschaft"
    Diese Kategorie ist die **Host-Seite** der Cluster-Beziehung: Sie wird auf dem Cluster-Objekt gepflegt und zeigt, welche Server dazugehören. Das Gegenstück ist die Kategorie [Clustermitgliedschaft](cluster-memberships.md), die auf den **einzelnen Servern** gepflegt wird und dort anzeigt, zu welchem Cluster der Server gehört. Beide Seiten erzeugen automatisch eine Relation -- ein Eintrag auf einer Seite erscheint automatisch auf der anderen.

## Verwendung

Typische Anwendungsfälle:

- **Cluster-Topologie abbilden**: Definiere, welche physischen oder virtuellen Server die Knoten eines Clusters bilden. Bei einem VMware-HA-Cluster sind das die ESXi-Hosts, bei einem Kubernetes-Cluster die Worker-Nodes, bei einem Datenbank-Cluster die Replikationsknoten.
- **Ausfallanalyse und Impact Assessment**: Wenn ein Server gewartet oder abgeschaltet werden muss, zeigt die Mitgliederliste sofort, welche Cluster betroffen sind. Zusammen mit dem [Quorum-Feld](cluster.md) lässt sich beurteilen, ob der Cluster den Ausfall eines Knotens verkraften kann oder ob vorher ein zusätzlicher Knoten bereitgestellt werden muss.
- **Kapazitätsplanung**: Die Anzahl der Clustermitglieder bestimmt die verfügbare Gesamtkapazität. Über Reports lässt sich auswerten, welche Cluster nur die Mindestanzahl an Knoten haben und bei einem Ausfall keinen Spielraum bieten.
- **Lifecycle-Management**: Beim Austausch eines Servers wird das alte Mitglied archiviert und das neue zugeordnet. Die Änderungshistorie dokumentiert lückenlos, wann welcher Knoten dem Cluster beigetreten oder ausgeschieden ist.

[![Clustermitglieder](../../assets/images/de/grundlagen/kategorien/cluster-members.png)](../../assets/images/de/grundlagen/kategorien/cluster-members.png)

## Felder

### Clustermitglied

Ein Objekt-Browser-Feld, über das Server, Hosts oder andere Objekte als Mitglieder des Clusters verknüpft werden. Es unterstützt Mehrfachauswahl -- du kannst in einem Schritt mehrere Server auf einmal zuordnen. Jede Zuordnung erzeugt automatisch eine Relation und einen korrespondierenden Eintrag in der Kategorie [Clustermitgliedschaft](cluster-memberships.md) auf dem verknüpften Server-Objekt.

!!! warning "Mitglieder nicht über beide Seiten gleichzeitig pflegen"
    Da die Zuordnung bidirektional ist, reicht es, sie entweder hier (auf dem Cluster) oder in der [Clustermitgliedschaft](cluster-memberships.md) (auf dem Server) vorzunehmen. Änderungen auf einer Seite werden automatisch auf der anderen Seite reflektiert.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__CLUSTER_MEMBERS` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Cluster |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Clustermitglied** | `member` | Objekt-Browser (Verknüpfung) |

### API-Beispiele

#### Eintrag erstellen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "object": 569,
        "category": "C__CATG__CLUSTER_MEMBERS",
        "data": {
            "member": 301
        }
    },
    "id": 1
}
```

!!! note "Ein Mitglied pro API-Aufruf"
    Obwohl die Oberfläche Mehrfachauswahl unterstützt, erwartet die API **einen** `member`-Wert pro Aufruf. Um drei Server zuzuordnen, sende drei separate Requests.

#### Einträge lesen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.read",
    "params": {
        "apikey": "dein-api-key",
        "object": 569,
        "category": "C__CATG__CLUSTER_MEMBERS"
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
        "apikey": "dein-api-key",
        "object": 569,
        "category": "C__CATG__CLUSTER_MEMBERS",
        "entry": 5,
        "data": {
            "member": 415
        }
    },
    "id": 3
}
```
