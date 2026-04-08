---
title: "Kategorie: Clustermitgliedschaft"
description: Dokumentation der Kategorie Clustermitgliedschaft in i-doit
icon:
status:
lang: de
---

# Kategorie: Clustermitgliedschaft

Die Kategorie **Clustermitgliedschaft** zeigt, welchen Clustern ein Objekt als Mitglied angehört. Sie ist eine **Multi-Value-Kategorie** – ein Server kann gleichzeitig Mitglied mehrerer Cluster sein, z.B. einem VMware-Cluster und einem Datenbank-Cluster.

Die Kategorie bildet die **Mitglied-Seite** der Cluster-Beziehung ab: Sie wird am Server- oder Blade-Objekt angezeigt und verweist auf die Cluster-Objekte, denen dieses Gerät beigetreten ist. Das Gegenstück ist die Kategorie [Clustermitglieder](cluster-members.md), die am Cluster-Objekt gepflegt wird und alle zugehörigen Knoten auflistet. Beide Kategorien spiegeln dieselbe Beziehung — einmal aus Mitglied-Perspektive, einmal aus Cluster-Perspektive.

!!! info "Rückwärtsverknüpfung — automatische Pflege"
    Die Clustermitgliedschaft ist eine **Rückwärtsverknüpfung** (backward property). Das bedeutet: Wenn du am Cluster-Objekt in der Kategorie [Clustermitglieder](cluster-members.md) einen Server hinzufügst, erscheint der Cluster automatisch in der Clustermitgliedschaft dieses Servers. Du musst die Zuordnung also nicht doppelt pflegen — ein Eintrag an einer Stelle genügt.

## Verwendung

Typische Anwendungsfälle:

- **Hochverfügbarkeits-Dokumentation**: Zeige auf einen Blick, in welchen HA-Clustern ein Server Mitglied ist. Bei einem Hardware-Ausfall ist sofort ersichtlich, welche Cluster betroffen sind und ob Failover-Kapazität vorhanden ist. Ein Server, der in keinem Cluster Mitglied ist, stellt einen Single Point of Failure dar — die Clustermitgliedschaft macht solche Lücken sichtbar.
- **Wartungsplanung**: Vor einem Wartungsfenster für einen physischen Host zeigt die Clustermitgliedschaft, in welchen Clustern dieser Knoten fehlen wird. Bei einem Zwei-Knoten-Cluster bedeutet das: Der verbleibende Knoten muss die gesamte Last tragen. Bei einem Drei-Knoten-Cluster ist die Situation entspannter. Diese Information ist entscheidend für die Risikobewertung eines Changes.
- **Kapazitätsplanung**: Über den Report Manager lässt sich auswerten, welche Server in wie vielen Clustern Mitglied sind. Ein Server, der in fünf verschiedenen Clustern steckt, hat eine hohe Kritikalität — sein Ausfall betrifft alle fünf Cluster gleichzeitig.
- **Compliance und Audit**: In regulierten Umgebungen muss nachgewiesen werden, welche Systeme redundant ausgelegt sind. Die Clustermitgliedschaft liefert diese Information strukturiert und auditierbar.

[![Clustermitgliedschaft](../../assets/images/de/grundlagen/kategorien/cluster-memberships.png)](../../assets/images/de/grundlagen/kategorien/cluster-memberships.png)

## Felder

### Cluster

Eine Verknüpfung zum Cluster-Objekt, dem dieses Gerät angehört. Über den Objekt-Browser werden nur Objekte angeboten, die selbst Cluster-Kategorien zugewiesen haben (z.B. [Cluster](cluster.md), [Clustermitglieder](cluster-members.md), [Cluster-Service](cluster-service.md)). Jeder Eintrag in der Multi-Value-Liste entspricht einer Cluster-Zugehörigkeit.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__CLUSTER_MEMBERSHIPS` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Server, Blade Server |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Cluster** | `connected_object` | Objekt-Browser (Verknüpfung) |

### API-Beispiele

#### Eintrag erstellen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "object": 1042,
        "category": "C__CATG__CLUSTER_MEMBERSHIPS",
        "data": {
            "connected_object": 567
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
        "apikey": "dein-api-key",
        "object": 1042,
        "category": "C__CATG__CLUSTER_MEMBERSHIPS"
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
        "object": 1042,
        "category": "C__CATG__CLUSTER_MEMBERSHIPS",
        "entry": 1,
        "data": {
            "connected_object": 890
        }
    },
    "id": 3
}
```
