---
title: "Kategorie: Cluster Dienstzuweisung"
description: Dokumentation der Kategorie Cluster Dienstzuweisung in i-doit
icon:
status:
lang: de
---

# Kategorie: Cluster Dienstzuweisung

Die Kategorie **Cluster Dienstzuweisung** verknüpft Dienste, Applikationen und Datenbank-Schemata mit einem Cluster-Objekt. Sie ist eine **Multi-Value-Kategorie** -- pro Cluster können beliebig viele Dienstzuweisungen angelegt werden, weil ein Cluster in der Regel mehrere Applikationen und Services gleichzeitig bereitstellt.

Während die Kategorie [Cluster](cluster.md) den Cluster selbst beschreibt (Mitglieder, Quorum, Verwaltungsinstanz), beantwortet die Cluster Dienstzuweisung die entscheidende Frage: **Welche Dienste laufen auf diesem Cluster, und auf welchen Knoten?** Damit schließt sie die Brücke zwischen der Infrastruktur-Ebene (Hardware, Knoten) und der Service-Ebene (Applikationen, Datenbanken).

!!! tip "Zusammenspiel mit der Servicezuweisung"
    Die Cluster Dienstzuweisung ist das Cluster-Gegenstück zur Kategorie [Servicezuweisung](it-service.md) bei einzelnen Servern. Wenn du einen Dienst von einem Einzelserver in einen Cluster migrierst, verschiebst du die Zuordnung aus der Servicezuweisung in diese Kategorie -- so bleibt die Service-Dokumentation konsistent.

## Verwendung

Typische Anwendungsfälle:

- **Hochverfügbarkeit dokumentieren**: Erfasse, welche Applikationen auf dem Cluster laufen, auf welchen Knoten sie aktiv sind und welcher Knoten der Default-Server ist. Bei einem Failover-Szenario zeigt diese Dokumentation sofort, welcher Knoten welchen Dienst übernehmen kann.
- **Failover-Planung**: Das Feld *Runs on* zeigt, auf welchen Cluster-Mitgliedern ein Dienst läuft. Der *Default server* markiert den bevorzugten Knoten. Bei einem geplanten Wartungsfenster lässt sich so prüfen, ob alle Dienste auf den verbleibenden Knoten umschwenken können.
- **Storage- und Netzwerkzuordnung**: Über die Felder *Volumes* und *Shares* werden die vom Dienst genutzten Laufwerke und Freigaben direkt am Cluster-Service dokumentiert. Das ist besonders bei Cluster Shared Volumes (CSV) oder NFS-Mounts unverzichtbar, weil bei einem Failover auch die Storage-Pfade stimmen müssen.
- **Datenbankcluster**: Das Feld *Database schema* verknüpft ein Datenbank-Schema mit dem Cluster-Dienst. So ist nachvollziehbar, welche Datenbank auf welchem Cluster liegt -- hilfreich für DBA-Teams bei Wartung und Kapazitätsplanung.
- **Service-Status-Tracking**: Der *Service Status* zeigt, ob ein Cluster-Dienst aktiv (`Running`) oder deaktiviert (`Disabled`) ist. In Reports lässt sich so filtern, welche Cluster-Dienste aktuell produktiv sind.

!!! warning "Cluster-Mitglieder zuerst anlegen"
    Die Felder *Runs on* und *Default server* referenzieren die Mitglieder des Clusters. Diese müssen in der Kategorie [Cluster](cluster.md) zuerst zugewiesen sein, bevor sie hier als Auswahl erscheinen. Lege also zuerst das Cluster-Objekt an, weise die Mitglieder zu, und erstelle dann die Dienstzuweisungen.

[![Cluster Dienstzuweisung](../../assets/images/de/grundlagen/kategorien/cluster-service.png)](../../assets/images/de/grundlagen/kategorien/cluster-service.png)

## Felder

### Typ

Die Art des Cluster-Dienstes, z.B. `Active/Active` oder `Active/Passive`. Dieses Dialog-Feld klassifiziert das Failover-Modell und ist in Reports hilfreich, um zwischen aktiv-aktiven und aktiv-passiven Konfigurationen zu unterscheiden.

### Cluster-Dienst

Das Applikations- oder Service-Objekt, das auf dem Cluster läuft. Hier wird ein Objekt aus den Kategorien Applikation, Cluster-Service, DBMS, Middleware oder Service verknüpft. Ein einzelnes Cluster-Objekt kann mehrere Dienstzuweisungen mit unterschiedlichen Applikationen haben.

### Host-Adressen

Die IP-Adressen, über die der Cluster-Dienst erreichbar ist. Typischerweise handelt es sich um virtuelle oder Floating-IPs, die beim Failover mit zum aktiven Knoten wandern. Diese Adressen stammen aus der IP-Kategorie der Cluster-Mitglieder.

### Volumes

Die Laufwerke und Volumes, die der Cluster-Dienst nutzt. Bei Windows-Failover-Clustern sind das z.B. Cluster Shared Volumes, bei Linux-HA-Clustern DRBD-Volumes oder gemeinsam genutzte SAN-LUNs.

### Shares

Die Netzwerkfreigaben (SMB/NFS), die mit dem Cluster-Dienst verknüpft sind. Relevant vor allem bei File-Server-Clustern, wo die Freigaben beim Failover auf den neuen aktiven Knoten umziehen müssen.

### Läuft auf

Die Cluster-Mitglieder, auf denen dieser Dienst läuft oder laufen kann. Bei einem Active/Active-Cluster werden hier alle aktiven Knoten zugewiesen, bei Active/Passive der primäre und die Standby-Knoten.

### Default Server

Der bevorzugte Knoten für diesen Dienst. Im Normalbetrieb läuft der Dienst auf diesem Server; nach einem Failover und anschließendem Failback wird der Dienst idealerweise hierhin zurückgeschwenkt.

### Datenbank-Schema

Ein verknüpftes Datenbank-Schema-Objekt. Damit lässt sich dokumentieren, welche Datenbank-Instanz auf dem Cluster betrieben wird -- hilfreich für DBA-Teams, um Abhängigkeiten zwischen Applikation, Cluster und Datenbank zu verstehen.

### Service Status

Der aktuelle Status der Dienstzuweisung: `Running` (aktiv, produktiv) oder `Disabled` (deaktiviert). Ermöglicht in Reports die Unterscheidung zwischen aktiven und stillgelegten Cluster-Diensten.

### Beschreibung

Freitext für zusätzliche Informationen: Failover-Reihenfolge, besondere Abhängigkeiten, Wartungsfenster-Hinweise oder Links zu Runbooks.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__CLUSTER_SERVICE` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Cluster |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Typ** | `type` | Dialog (Auswahl) |
| **Cluster-Dienst** | `cluster_service` | Objekt-Browser (Verknüpfung) |
| **Host-Adressen** | `hostaddresses` | Objekt-Browser (Verknüpfung) |
| **Volumes** | `drives` | Objekt-Browser (Verknüpfung) |
| **Shares** | `shares` | Objekt-Browser (Verknüpfung) |
| **Läuft auf** | `runs_on` | Dialog-Liste |
| **Default Server** | `default_server` | Dialog (Auswahl) |
| **Datenbank-Schema** | `assigned_database_schema` | Objekt-Browser (Verknüpfung) |
| **Service Status** | `service_status` | Dialog (Auswahl) |
| **Beschreibung** | `description` | Textfeld (mehrzeilig) |

### API-Beispiele

#### Eintrag erstellen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "object": 4711,
        "category": "C__CATG__CLUSTER_SERVICE",
        "data": {
            "type": 1,
            "cluster_service": 502,
            "runs_on": [301, 302],
            "default_server": 301,
            "service_status": 1,
            "description": "SQL Server Always On AG, Failover auf Node02 bei Wartung"
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
        "object": 4711,
        "category": "C__CATG__CLUSTER_SERVICE"
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
        "object": 4711,
        "category": "C__CATG__CLUSTER_SERVICE",
        "entry": 5,
        "data": {
            "default_server": 302,
            "service_status": 1,
            "description": "2026-04: Default Server auf Node02 gewechselt wegen Hardware-Refresh Node01"
        }
    },
    "id": 3
}
```
