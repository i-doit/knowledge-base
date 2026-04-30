---
title: "Kategorie: Cluster Dienstzuweisung (Administration)"
description: Dokumentation der Kategorie Cluster Dienstzuweisung in i-doit
icon:
status:
lang: de
---

# Kategorie: Cluster Dienstzuweisung

Die Kategorie **Cluster Dienstzuweisung** verknüpft Management-Dienste mit einem Cluster-Objekt. Sie ist eine **Multi-Value-Kategorie** -- pro Cluster können mehrere Administrationsdienste zugeordnet werden, z.B. wenn sowohl ein vCenter als auch ein separates Monitoring-Tool den Cluster verwalten.

!!! tip "Warum den Administrationsdienst dokumentieren?"
    Im Störungsfall muss das Betriebsteam sofort wissen, über welches Management-Tool der Cluster gesteuert wird. Ist es VMware vCenter? Microsoft Failover Cluster Manager? Pacemaker auf einem dedizierten Quorum-Host? Ohne diese Information verliert man im Ernstfall wertvolle Minuten. Die Verknüpfung hier schafft einen direkten Sprungpunkt zum Management-Objekt und dessen Dokumentation.

## Verwendung

Typische Anwendungsfälle:

- **Zentrale Managementzuordnung**: Ordne dem Cluster die Software oder Appliance zu, die ihn orchestriert. Bei VMware-Clustern ist das typischerweise ein vCenter-Server-Objekt, bei Linux-HA-Clustern ein Pacemaker- oder Corosync-Dienst, bei Hyper-V der Windows Failover Cluster Manager.
- **Abhängigkeitsanalyse**: Wenn der Administrationsdienst ausfällt, können keine Konfigurationsänderungen am Cluster vorgenommen werden. Über die Verknüpfung lässt sich im Report Manager auswerten, welche Cluster von einem bestimmten Management-Server abhängen -- kritisch bei Updates oder Wartungsarbeiten am Management-System.
- **Audit und Compliance**: Prüfer fragen häufig, wer oder was einen Cluster verwaltet und ob es eine zentrale Steuerungsinstanz gibt. Die dokumentierte Dienstzuweisung liefert diese Antwort auf Knopfdruck.
- **Multi-Management-Szenarien**: Manche Cluster werden von mehreren Diensten verwaltet -- etwa ein Hyperconverged-Cluster, der sowohl von einer HCI-Management-Software als auch von einer separaten Storage-Verwaltung gesteuert wird. Die Multi-Value-Eigenschaft dieser Kategorie bildet genau das ab.

[![Cluster Dienstzuweisung](../../assets/images/de/grundlagen/kategorien/cluster-adm-service.png)](../../assets/images/de/grundlagen/kategorien/cluster-adm-service.png)

## Felder

### Administrationsdienst (Objekt)

Ein Objekt-Browser-Feld, über das ein oder mehrere Objekte als Management-Dienst verknüpft werden. Das verknüpfte Objekt ist typischerweise ein Server, eine Applikation oder ein Dienst, der die Cluster-Verwaltung übernimmt. Durch die Verknüpfung entsteht eine navigierbare Beziehung -- vom Cluster-Objekt gelangt man per Klick direkt zum Management-Server und umgekehrt. Es unterstützt Mehrfachauswahl, sodass in einem Schritt mehrere Dienste zugeordnet werden können.

### Objekttyp

Zeigt den Objekttyp des verknüpften Administrationsdiensts an. Dieses Feld wird automatisch aus dem verknüpften Objekt abgeleitet und dient der schnellen Orientierung in der Listenansicht -- man sieht auf einen Blick, ob der Dienst ein Server, eine Applikation oder ein anderer Objekttyp ist.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__CLUSTER_ADM_SERVICE` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Cluster |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Administrationsdienst (Objekt)** | `connected_object` | Objekt-Browser (Verknüpfung) |
| **Objekttyp** | `objtype` | Ganzzahl |

### API-Beispiele

#### Eintrag erstellen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "object": 569,
        "category": "C__CATG__CLUSTER_ADM_SERVICE",
        "data": {
            "connected_object": 742
        }
    },
    "id": 1
}
```

!!! note "Objekt-ID statt Name"
    Das Feld `connected_object` erwartet die **Objekt-ID** des Management-Dienstes, nicht dessen Bezeichnung. Die ID findest du z.B. über `cmdb.objects.read` mit einem Typfilter.

#### Einträge lesen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.read",
    "params": {
        "apikey": "dein-api-key",
        "object": 569,
        "category": "C__CATG__CLUSTER_ADM_SERVICE"
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
        "category": "C__CATG__CLUSTER_ADM_SERVICE",
        "entry": 1,
        "data": {
            "connected_object": 815
        }
    },
    "id": 3
}
```
