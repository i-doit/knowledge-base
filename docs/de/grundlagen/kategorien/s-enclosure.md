---
title: "Kategorie: Schrank"
description: Dokumentation der Kategorie Schrank (C__CATS__ENCLOSURE) in i-doit
icon:
status:
lang: de
---

# Kategorie: Schrank

Die Kategorie **Schrank** ist die zentrale Kategorie zur Dokumentation von 19-Zoll-Racks und Serverschränken in i-doit. Sie definiert die physische Struktur des Racks -- insbesondere die vertikalen Einbauplätze (Slots) auf Vorder- und Rückseite sowie die Zählrichtung der Höheneinheiten. Jedes Objekt vom Typ *Schrank* erhält über diese Kategorie seine grundlegende Rack-Konfiguration.

## Verwendung

Typische Anwendungsfälle:

- **Rack-Dokumentation aufbauen**: Pro physischem Serverschrank ein i-doit-Objekt vom Typ *Schrank* anlegen und über diese Kategorie die Slot-Anzahl und HE-Sortierung konfigurieren. Die grafische Rack-Ansicht in i-doit basiert auf diesen Angaben.
- **Vorder- und Rückseite getrennt planen**: Server, Switches und Patchpanels können sowohl von vorne als auch von hinten in ein Rack eingebaut werden. Die getrennten Slot-Felder für Front und Rückseite ermöglichen eine realitätsgetreue Abbildung.
- **Höheneinheiten-Zählung festlegen**: Je nach Konvention zählen Rechenzentren die Höheneinheiten von unten nach oben oder von oben nach unten. Das Feld *Height unit sorting* steuert die Darstellung in der Rack-Visualisierung entsprechend.
- **Kapazitätsplanung im Rechenzentrum**: Über Reports lässt sich auswerten, wie viele Slots je Rack belegt sind und wo noch freie Kapazitäten bestehen. Zusammen mit den Kategorien [Formfaktor](formfactor.md) und [Standort](location.md) entsteht ein vollständiges Bild der physischen Infrastruktur.

!!! tip "Rack-Visualisierung"
    i-doit bietet eine grafische Rack-Ansicht, die Vorder- und Rückseite des Schranks visualisiert. Die hier konfigurierten Slots und die HE-Sortierung bestimmen, wie diese Ansicht dargestellt wird. Geräte werden über die Kategorie [Formfaktor](formfactor.md) mit ihrer Höhe in Höheneinheiten und ihrer Einbauposition dem Rack zugeordnet.

!!! info "Schrank vs. Formfaktor"
    Diese Kategorie definiert den Schrank selbst (seine Kapazität und Konfiguration). Die Einbauposition einzelner Geräte im Rack wird hingegen über die Kategorie [Formfaktor](formfactor.md) am jeweiligen Geräteobjekt festgelegt. Der [Standort](location.md) bestimmt, in welchem Raum oder Rechenzentrum der Schrank steht.

[![Schrank](../../assets/images/de/grundlagen/kategorien/s-enclosure.png)](../../assets/images/de/grundlagen/kategorien/s-enclosure.png)

## Felder

### Vertikale Einbauplätze (Vorderseite)

Die Anzahl der vertikalen Einbauplätze (Slots) auf der Vorderseite des Racks. Standard-19-Zoll-Racks haben typischerweise 42, 47 oder 48 Höheneinheiten. Dieser Wert bestimmt, wie viele Höheneinheiten in der Rack-Visualisierung auf der Vorderseite dargestellt werden.

### Vertikale Einbauplätze (Rückseite)

Die Anzahl der vertikalen Einbauplätze auf der Rückseite. In den meisten Fällen identisch mit der Vorderseite, kann aber bei speziellen Rack-Konfigurationen abweichen.

### Höheneinheiten-Sortierung

Legt fest, ob die Höheneinheiten von unten nach oben (aufsteigend, Industriestandard) oder von oben nach unten (absteigend) gezählt werden. Diese Einstellung beeinflusst die Darstellung in der grafischen Rack-Ansicht und sollte der physischen Beschriftung im Rechenzentrum entsprechen.

### Beschreibung

Freitext für ergänzende Angaben: Rack-Hersteller und -Modell, Tiefe in mm, maximale Traglast, Besonderheiten (z.B. Seitenwände, Kabelmanagement, integrierte PDUs) oder Hinweise zur Kühlung.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATS__ENCLOSURE` |
| **Typ** | Spezifische Kategorie |
| **Multi-Value** | Nein |
| **Zugeordnet zu** | Schrank |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Vertikale Einbauplätze (Vorderseite)** | `vertical_slots_front` | Ganzzahl |
| **Vertikale Einbauplätze (Rückseite)** | `vertical_slots_rear` | Ganzzahl |
| **Höheneinheiten-Sortierung** | `slot_sorting` | Dialog (Auswahl) |
| **Beschreibung** | `description` | Textfeld (mehrzeilig) |

### API-Beispiele

#### Eintrag erstellen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "object": 123,
        "category": "C__CATS__ENCLOSURE",
        "data": {
            "vertical_slots_front": 42,
            "vertical_slots_rear": 42,
            "slot_sorting": "ascending",
            "description": "APC NetShelter SX 42U, 600mm breit, 1070mm tief, max. 1364 kg"
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
        "object": 123,
        "category": "C__CATS__ENCLOSURE"
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
        "object": 123,
        "category": "C__CATS__ENCLOSURE",
        "entry": 1,
        "data": {
            "vertical_slots_front": 47,
            "vertical_slots_rear": 47,
            "description": "Rack-Erweiterung auf 47 HE nach Umbau 2026-Q1"
        }
    },
    "id": 3
}
```
