---
title: "Kategorie: Cloud"
description: Dokumentation der Kategorie Cloud in i-doit
icon:
status:
lang: de
---

# Kategorie: Cloud

Die Kategorie **Cloud** erfasst, wo eine Ressource in einer Public Cloud läuft: Provider, Account oder Subscription, Region und aktueller Status. Sie ist eine **Single-Value-Kategorie**, jedes Objekt hat also genau einen Cloud-Eintrag. Die Kategorie ist anbieterneutral: Für Ressourcen in AWS, Azure und Google Cloud werden dieselben Felder verwendet.

!!! info "Neu in i-doit 39"
    Die Kategorie Cloud ist ab i-doit 39 verfügbar. Beim Update wird sie automatisch den Objekttypen Server, Cluster, Virtueller Client, Virtueller Server und Datenbankinstanz zugewiesen. Auch der neue Objekttyp [Cloud Storage](../objekttypen/cloud-storage.md) verwendet sie.

## Verwendung

Typische Anwendungsfälle:

- **Cloud-Inventar**: Dokumentiere virtuelle Maschinen, gemanagte Datenbanken und Storage-Buckets zusammen mit dem Provider und dem Account, über den sie abgerechnet werden.
- **Regionsübersicht**: Mit dem Report Manager listest du alle Ressourcen einer Region auf, zum Beispiel vor einer Datenschutzprüfung oder einer geplanten Migration in eine andere Region.
- **Account-Zuordnung**: Das Feld **Account / Subscription** enthält die AWS-Account-ID, die Azure-Subscription oder das Google-Cloud-Projekt. So findest du schnell alle Ressourcen eines Accounts.
- **Status verfolgen**: Das Feld **Status** zeigt, ob eine Ressource läuft, gestoppt oder bereits beendet ist. Zusammen mit dem CMDB-Status lassen sich Objekte finden, die in der CMDB noch existieren, in der Cloud aber nicht mehr aktiv sind.

[![Cloud](../../assets/images/de/grundlagen/kategorien/cloud.png)](../../assets/images/de/grundlagen/kategorien/cloud.png)

## Felder

### Provider

Der Cloud-Anbieter der Ressource. Dialog+-Feld mit den vordefinierten Werten `AWS`, `Azure` und `GCP`. Weitere Anbieter lassen sich direkt im Feld oder über den [Dialog-Admin](../dialog-admin.md) ergänzen.

### Account / Subscription

Der Account, in dem sich die Ressource befindet, zum Beispiel eine AWS-Account-ID (`123456789012`), eine Azure-Subscription oder eine Google-Cloud-Projekt-ID.

### Region-ID

Die technische Kennung der Region, wie sie der Anbieter verwendet, zum Beispiel `eu-central-1` (AWS), `westeurope` (Azure) oder `europe-west3` (Google Cloud).

### Region-Name

Der lesbare Name der Region, zum Beispiel `Europe (Frankfurt)`.

### Status

Der aktuelle Zustand der Ressource. Dialog+-Feld mit den vordefinierten Werten `Running`, `Stopped`, `Pending`, `Stopping` und `Terminated`. Diese Werte werden auch in der deutschen Oberfläche englisch angezeigt. Weitere Werte lassen sich ergänzen.

### Beschreibung

Freitext für ergänzende Angaben, zum Beispiel den Zweck der Ressource oder Hinweise zum Cloud-Vertrag.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__CLOUD` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Nein |
| **Zugeordnet zu** | [Server](../objekttypen/server.md), [Cluster](../objekttypen/cluster.md), [Virtueller Client](../objekttypen/virtueller-client.md), [Virtueller Server](../objekttypen/virtueller-server.md), [Datenbankinstanz](../objekttypen/datenbankinstanz.md), [Cloud Storage](../objekttypen/cloud-storage.md) |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Provider** | `provider` | Dialog+ (erweiterbare Auswahl) |
| **Account / Subscription** | `account` | Text |
| **Region-ID** | `region_id` | Text |
| **Region-Name** | `region_name` | Text |
| **Status** | `state` | Dialog+ (erweiterbare Auswahl) |
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
        "category": "C__CATG__CLOUD",
        "data": {
            "provider": "AWS",
            "account": "123456789012",
            "region_id": "eu-central-1",
            "region_name": "Europe (Frankfurt)",
            "state": "Running",
            "description": "EC2-Instanz für die Demo-Webanwendung"
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
        "category": "C__CATG__CLOUD"
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
        "category": "C__CATG__CLOUD",
        "data": {
            "state": "Stopped"
        }
    },
    "id": 3
}
```
