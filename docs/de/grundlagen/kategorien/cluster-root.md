---
title: "Kategorie: Cluster (Übersicht)"
description: Dokumentation der Kategorie Cluster (Übersicht) in i-doit
icon:
status:
lang: de
---

# Kategorie: Cluster (Übersicht)

Die Kategorie **Cluster (Übersicht)** ist die globale Übersichtskategorie für Cluster-Objekte. Sie zeigt eine Zusammenfassung der gesamten Cluster-Konfiguration auf einen Blick: Quorum-Status, zugewiesene Administrationsdienste, Mitglieder und Cluster-Services. Sie ist eine **Single-Value-Kategorie** und dient primär als Einstiegspunkt -- die tatsächliche Datenpflege erfolgt in den jeweiligen Detailkategorien.

!!! info "Übersicht vs. Detailkategorien"
    Diese Kategorie (`C__CATG__CLUSTER_ROOT`) fasst Informationen zusammen, die in mehreren separaten Kategorien gepflegt werden. Die Felder hier sind grösstenteils **nur lesend** -- Änderungen nimmst du in den Detailkategorien vor:

    - **Quorum und Beschreibung**: [Cluster (spezifisch)](cluster.md) (`C__CATS__CLUSTER`)
    - **Administrationsdienste**: [Cluster Dienstzuweisung](cluster-adm-service.md) (`C__CATG__CLUSTER_ADM_SERVICE`)
    - **Mitglieder**: [Clustermitglieder](cluster-members.md) (`C__CATG__CLUSTER_MEMBERS`)

## Verwendung

Typische Anwendungsfälle:

- **Schnellüberblick im Alltag**: Öffne ein Cluster-Objekt und sieh auf einen Blick, wie viele Knoten zugeordnet sind, ob ein Quorum aktiv ist und welcher Management-Dienst den Cluster steuert. Ohne zwischen mehreren Kategorien wechseln zu müssen, erhältst du das Gesamtbild.
- **Dashboard- und Report-Grundlage**: Da die Übersichtskategorie alle wesentlichen Cluster-Informationen bündelt, eignet sie sich als Datenquelle für Reports, die den Cluster-Zustand aller Systeme auf einer Seite darstellen sollen.
- **Einstiegspunkt für die Navigation**: Von hier aus navigierst du per Klick zu den Detailkategorien. Die angezeigten Mitglieder und Dienste sind verlinkt -- ein Klick führt direkt zum jeweiligen Server- oder Dienst-Objekt.
- **Störungsmanagement**: Im Ernstfall liefert die Übersicht sofort die Antworten auf die wichtigsten Fragen: Wie viele Knoten hat der Cluster? Ist ein Quorum konfiguriert? Welcher Management-Dienst ist zuständig?

[![Cluster (Übersicht)](../../assets/images/de/grundlagen/kategorien/cluster-root.png)](../../assets/images/de/grundlagen/kategorien/cluster-root.png)

## Felder

### Quorum

Zeigt an, ob für den Cluster ein Quorum konfiguriert ist (`Ja` / `Nein`). Der Wert wird aus der spezifischen Kategorie [Cluster](cluster.md) übernommen. Ein aktives Quorum bedeutet, dass der Cluster bei einer Netzwerkpartition nur mit der Mehrheit der Knoten weiterarbeitet -- ein zentraler Schutzmechanismus gegen Split-Brain-Situationen.

### Administrationsdienst

Listet die Management-Dienste auf, die dem Cluster über die Kategorie [Cluster Dienstzuweisung](cluster-adm-service.md) zugeordnet sind. Typische Beispiele: VMware vCenter, Microsoft Failover Cluster Manager, Pacemaker. Die Anzeige ist nur lesend -- Änderungen erfolgen in der Dienstzuweisungskategorie.

### Clustermitglieder

Zeigt die Server und Hosts an, die als Knoten im Cluster registriert sind. Die Pflege erfolgt in der Kategorie [Clustermitglieder](cluster-members.md). Jeder Eintrag ist ein Link zum entsprechenden Server-Objekt.

### Anzahl Clustermitglieder

Die Gesamtzahl der zugeordneten Clustermitglieder als Zahlenwert. Besonders nützlich für schnelle Plausibilitätsprüfungen -- wenn ein 3-Knoten-Cluster plötzlich nur noch 2 Mitglieder zeigt, ist Handlungsbedarf erkennbar.

### Cluster-Dienstzuweisung

Listet die dem Cluster zugewiesenen Dienste und Applikationen auf. Diese Zuordnungen definieren, welche Services auf dem Cluster laufen (z.B. Datenbank-Dienst, Webserver-Dienst).

### Beschreibung

Freitext mit ergänzenden Informationen zum Cluster. Wird aus der spezifischen Kategorie [Cluster](cluster.md) übernommen.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__CLUSTER_ROOT` |
| **Typ** | Globale Kategorie |
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
        "category": "C__CATG__CLUSTER_ROOT",
        "data": {
            "quorum": 1,
            "description": "Produktions-HA-Cluster, 3 ESXi-Hosts, Quorum über vCenter HA Admission Control"
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
        "category": "C__CATG__CLUSTER_ROOT"
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
        "category": "C__CATG__CLUSTER_ROOT",
        "entry": 1,
        "data": {
            "quorum": 0,
            "description": "Migration auf 2-Knoten-Cluster abgeschlossen. Quorum über Shared Witness Disk."
        }
    },
    "id": 3
}
```
