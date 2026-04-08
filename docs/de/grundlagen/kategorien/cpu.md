---
title: "Kategorie: CPU"
description: Dokumentation der Kategorie CPU in i-doit
icon:
status:
lang: de
---

# Kategorie: CPU

Die Kategorie **CPU** dokumentiert die verbauten Prozessoren eines Objekts. Sie ist eine **Multi-Value-Kategorie** – pro Objekt können beliebig viele Einträge angelegt werden, z.B. bei Dual-Socket-Servern mit zwei physischen CPUs.

## Verwendung

Typische Anwendungsfälle:

- **Hardware-Inventar vervollständigen**: Erfasse Hersteller, Modell, Taktrate und Kernanzahl jeder verbauten CPU. Zusammen mit den Kategorien Speicher und Laufwerk entsteht ein vollständiges Hardware-Profil.
- **Kapazitätsplanung**: Über den Report Manager lässt sich auswerten, welche Server welche CPU-Generationen verwenden – hilfreich bei Refresh-Planung und Lizenzierung.
- **Hardware-Lifecycle**: Beim CPU-Tausch den alten Eintrag archivieren und einen neuen anlegen. Die Änderungshistorie bleibt so lückenlos erhalten.
- **Virtualisierung**: Bei Hypervisoren dokumentiert die CPU-Kategorie die physischen Prozessoren des Hosts – getrennt von den virtuellen CPUs der Gäste.

[![CPU](../../assets/images/de/grundlagen/kategorien/cpu.png)](../../assets/images/de/grundlagen/kategorien/cpu.png)

## Felder

### Bezeichnung

Der Name oder die Modellbezeichnung des Prozessors, z.B. `Intel Xeon Silver 4314` oder `AMD EPYC 9654`. Dieser Wert erscheint in der Listenansicht der Kategorie und in Reports.

### Hersteller

Der Prozessorhersteller, typischerweise `Intel` oder `AMD`. Dialog+-Feld – eigene Werte lassen sich bei Bedarf ergänzen.

### Typ

Die konkrete Modellreihe oder -nummer, z.B. `Xeon Silver 4314` oder `EPYC 9654`. Ermöglicht eine detailliertere Differenzierung als der Hersteller allein und ist nützlich für Reports und Vergleiche.

### CPU-Frequenz und Frequenz-Einheit

Der Basistakt der CPU. Die Einheit wird separat als `MHz` oder `GHz` angegeben. Für die Dokumentation empfiehlt sich der Basistakt laut Hersteller – nicht der Turbo-Boost-Wert.

### CPU-Kerne

Die Anzahl der physischen Kerne. Bei Hyperthreading-CPUs ist dies die Kern-Anzahl, nicht die Thread-Anzahl.

### Beschreibung

Freitext für zusätzliche Angaben: Thread-Anzahl, TDP, Sockel, Cache-Größe, Generationshinweise oder Besonderheiten in der Konfiguration.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__CPU` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Server, Client, Blade Server u.a. |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Bezeichnung** | `title` | Text |
| **Hersteller** | `manufacturer` | Dialog+ (erweiterbare Auswahl) |
| **Typ** | `type` | Dialog+ (erweiterbare Auswahl) |
| **CPU-Frequenz** | `frequency` | Dezimalzahl |
| **Frequenz-Einheit** | `frequency_unit` | Dialog (Auswahl) |
| **CPU-Kerne** | `cores` | Ganzzahl |
| **Beschreibung** | `description` | Textfeld (mehrzeilig) |

### API-Beispiele

#### Eintrag erstellen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "objID": 123,
        "category": "C__CATG__CPU",
        "data": {
            "title": "Intel Xeon Silver 4314",
            "manufacturer": "Intel",
            "type": "Xeon Silver 4314",
            "frequency": 2.4,
            "frequency_unit": 3,
            "cores": 16,
            "description": "16 Kerne, 32 Threads, 2.4 GHz Basistakt, Sockel LGA 4189, TDP 135 W"
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
        "objID": 123,
        "category": "C__CATG__CPU"
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
        "objID": 123,
        "category": "C__CATG__CPU",
        "entry": 32,
        "data": {
            "cores": 16,
            "description": "Austausch 2025-03: CPU auf 16-Kern-Modell aufgerüstet."
        }
    },
    "id": 3
}
```
