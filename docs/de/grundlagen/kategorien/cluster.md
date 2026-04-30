---
title: "Kategorie: Cluster"
description: Dokumentation der spezifischen Kategorie Cluster in i-doit
icon:
status:
lang: de
---

# Kategorie: Cluster

Die Kategorie **Cluster** ist eine **spezifische Kategorie** des Objekttyps Cluster. Sie definiert die grundlegenden Eigenschaften eines Cluster-Objekts: welchen Typ der Cluster hat, ob ein Quorum konfiguriert ist und welcher Administrationsdienst die Verwaltung übernimmt. Sie ist eine **Single-Value-Kategorie** -- pro Cluster-Objekt existiert genau ein Eintrag.

!!! info "Spezifische Kategorie vs. globale Cluster-Kategorien"
    Diese Kategorie (`C__CATS__CLUSTER`) ist die **spezifische** Kategorie, die nur auf Objekten des Typs *Cluster* verfügbar ist. Sie unterscheidet sich von der globalen Übersichtskategorie [Cluster (Übersicht)](cluster-root.md) (`C__CATG__CLUSTER_ROOT`), die eine zusammenfassende Darstellung liefert. Zusätzlich existieren die globalen Kategorien [Clustermitglieder](cluster-members.md) und [Cluster Dienstzuweisung](cluster-adm-service.md) für die Detailpflege.

## Verwendung

Typische Anwendungsfälle:

- **Hochverfügbarkeit dokumentieren**: Halte fest, ob ein Cluster als Active/Passive-HA, Active/Active-Load-Balancing oder HPC-Cluster betrieben wird. Diese Information ist unverzichtbar, wenn im Störungsfall schnell klar sein muss, ob ein automatisches Failover greift oder manuelles Eingreifen nötig ist.
- **Quorum-Konfiguration nachweisen**: Das Quorum bestimmt, wie viele Knoten verfügbar sein müssen, damit der Cluster arbeitsfähig bleibt. Ohne dokumentiertes Quorum fehlt bei Audits und Notfallplanungen eine zentrale Angabe -- besonders bei Split-Brain-Szenarien.
- **Administrationsdienst zuordnen**: Welche Management-Software (z.B. VMware vCenter, Microsoft Failover Cluster Manager, Pacemaker) steuert diesen Cluster? Diese Verknüpfung schafft Klarheit darüber, wo Konfigurationsänderungen vorgenommen werden und wer bei Problemen die erste Anlaufstelle ist.
- **Zusammenspiel mit Mitgliederkategorien**: Die spezifische Cluster-Kategorie liefert das "Was und Wie" des Clusters, während [Clustermitglieder](cluster-members.md) das "Wer" (welche Server gehören dazu) und [Clustermitgliedschaft](cluster-memberships.md) die Gegenseite auf den einzelnen Servern dokumentiert.

[![Cluster](../../assets/images/de/grundlagen/kategorien/cluster.png)](../../assets/images/de/grundlagen/kategorien/cluster.png)

## Felder

### Quorum

Legt fest, ob für diesen Cluster ein Quorum konfiguriert ist. Mögliche Werte sind `Ja` und `Nein`. Ein Quorum stellt sicher, dass bei einer Netzwerkpartition (Split-Brain) nur die Mehrheitsgruppe der Knoten weiterarbeitet. Bei ungerader Knotenanzahl ergibt sich das Quorum automatisch; bei gerader Knotenanzahl ist häufig ein Witness-Knoten oder eine Quorum-Disk erforderlich. Dokumentiere hier, ob ein solcher Mechanismus aktiv ist.

### Administrationsdienst

Zeigt die verknüpften Management-Dienste an, die diesen Cluster steuern. Die eigentliche Pflege dieser Zuordnung erfolgt in der Kategorie [Cluster Dienstzuweisung](cluster-adm-service.md). Hier wird nur die Zusammenfassung angezeigt -- z.B. ein vCenter-Server-Objekt oder ein Pacemaker-Dienst.

### Clustermitglieder

Zeigt die Server und Hosts an, die Mitglieder dieses Clusters sind. Die eigentliche Pflege erfolgt in der Kategorie [Clustermitglieder](cluster-members.md). Dieses Feld ist eine Zusammenfassung und nicht direkt editierbar.

### Anzahl Clustermitglieder

Zeigt die Gesamtzahl der zugeordneten Clustermitglieder. Nützlich für einen schnellen Überblick, ob alle erwarteten Knoten zugeordnet sind -- weicht die Zahl vom Soll ab, fehlt möglicherweise ein Mitglied.

### Cluster-Dienstzuweisung

Listet die dem Cluster zugewiesenen Dienste und Applikationen auf. Die Pflege der Dienstzuweisungen erfolgt in der entsprechenden Unterkategorie.

### Beschreibung

Freitext für ergänzende Angaben: Cluster-Typ (HA, Load Balancing, HPC), Failover-Strategie, besondere Abhängigkeiten, Wartungsfenster oder Hinweise zur Wiederherstellung.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATS__CLUSTER` |
| **Typ** | Spezifische Kategorie |
| **Multi-Value** | Nein |
| **Zugeordnet zu** | Cluster |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Quorum** | `quorum` | Dialog (Auswahl: Ja/Nein) |
| **Administrationsdienst** | `administration_service` | Text (nur lesend) |
| **Clustermitglieder** | `cluster_members` | Text (nur lesend) |
| **Anzahl Clustermitglieder** | `cluster_member_count` | Text (nur lesend) |
| **Cluster-Dienstzuweisung** | `cluster_service` | Text (nur lesend) |
| **Beschreibung** | `description` | Textfeld (mehrzeilig) |

### API-Beispiele

#### Eintrag erstellen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "object": 569,
        "category": "C__CATS__CLUSTER",
        "data": {
            "quorum": 1,
            "description": "VMware vSphere HA-Cluster, 3 Knoten, Quorum über vCenter Witness"
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
        "object": 569,
        "category": "C__CATS__CLUSTER"
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
        "category": "C__CATS__CLUSTER",
        "entry": 1,
        "data": {
            "quorum": 0,
            "description": "Quorum deaktiviert nach Migration auf 2-Knoten-Konfiguration mit Shared Storage."
        }
    },
    "id": 3
}
```
