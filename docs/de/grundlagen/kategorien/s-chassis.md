---
title: "Kategorie: Chassis"
description: Dokumentation der spezifischen Kategorie Chassis in i-doit
icon:
status:
lang: de
---

# Kategorie: Chassis

Die Kategorie **Chassis** ist eine **spezifische Kategorie** des Objekttyps **Blade Chassis** und definiert das Slot-Raster des Gehäuses – also wie viele Einschübe an der Vorder- und Rückseite vorhanden sind und welche Größe die einzelnen Slots haben. Sie ist eine **Single-Value-Kategorie** – pro Chassis-Objekt existiert genau ein Eintrag, der die physische Aufteilung des Gehäuses beschreibt.

## Warum ein Slot-Raster definieren?

Ein Blade Chassis ist im Wesentlichen ein Gehäuse mit einer definierten Anzahl von Einschüben (Slots), in die Blade Server, Netzwerk-Module, Speicher-Module und Management-Module eingesetzt werden. Die Vorder- und Rückseite haben dabei oft unterschiedliche Slot-Anordnungen: Vorne sitzen die Blades, hinten die Switch-Module und Netzteile.

Die Kategorie Chassis definiert dieses Raster – die **Grundfläche**, auf der in den zugehörigen Kategorien [Chassis Slots](s-chassis-slot.md) die einzelnen Einschübe konfiguriert und in der [Chassis Ansicht](s-chassis-view.md) visuell dargestellt werden. Ohne diese Definition weiß i-doit nicht, wie viele Slots existieren und wie sie angeordnet sind.

!!! info "Zusammenspiel der Chassis-Kategorien"
    Das Blade-Chassis-Modell in i-doit besteht aus mehreren zusammenarbeitenden Kategorien:

    1. **Chassis** (diese Kategorie) – definiert das Slot-Raster (Zeilen, Spalten, Slot-Größe) für Vorder- und Rückseite
    2. **[Chassis Slots](s-chassis-slot.md)** – legt die einzelnen Slots innerhalb des Rasters an und benennt sie
    3. **[Chassis Geräte](s-chassis-devices.md)** – weist konkrete Objekte (Blade Server, Switch-Module) den Slots zu
    4. **[Chassis Ansicht](s-chassis-view.md)** – zeigt eine visuelle Darstellung der Belegung

    Beginne immer mit der Chassis-Kategorie, bevor du Slots oder Geräte konfigurierst.

## Verwendung

Typische Anwendungsfälle:

- **Blade-Infrastruktur abbilden**: Definiere das Slot-Raster eines Dell PowerEdge M1000e (16 Blade-Slots vorne, 6 I/O-Module hinten) oder eines HPE BladeSystem c7000 (16 Blade-Slots). Die Konfiguration hier ist die Voraussetzung dafür, dass Blade Server in den Kategorien Chassis Slots und Chassis Geräte zugewiesen werden können.
- **Kapazitätsplanung**: Das definierte Raster zeigt sofort, wie viele Slots insgesamt verfügbar sind. In Kombination mit der Belegung aus der Kategorie [Chassis Geräte](s-chassis-devices.md) ergibt sich, ob noch freie Slots für weitere Blades vorhanden sind – entscheidend bei der Hardware-Beschaffung.
- **Physische Dokumentation**: Front und Rear werden getrennt konfiguriert, weil sie in der Praxis unterschiedliche Komponenten aufnehmen. Die Vorderseite enthält typischerweise die Blade Server (Compute), die Rückseite die Netzwerk-Module (I/O), Management-Module und Netzteile. Diese Trennung bildet die physische Realität im Rechenzentrum exakt ab.
- **Rack-Integration**: Ein Blade Chassis ist selbst ein Objekt, das über die Kategorien [Formfaktor](formfactor.md) und [Standort](location.md) in einem Rack positioniert wird. Die Blade Server innerhalb des Chassis werden dann nicht einzeln im Rack platziert, sondern über die Chassis-Slot-Zuordnung lokalisiert.

[![Chassis](../../assets/images/de/grundlagen/kategorien/s-chassis.png)](../../assets/images/de/grundlagen/kategorien/s-chassis.png)

## Felder

### Horizontale Einheiten (Front)

Die Anzahl der horizontalen Einheiten (Spalten) auf der Vorderseite des Chassis. Bei einem typischen Blade Chassis mit 16 Slots in einem 2x8-Raster wäre dieser Wert `8`. Zusammen mit den vertikalen Einheiten ergibt sich die Gesamtzahl der möglichen Slot-Positionen auf der Frontseite.

### Vertikale Einheiten (Front)

Die Anzahl der vertikalen Einheiten (Zeilen) auf der Vorderseite. Bei einem 2x8-Raster wäre dieser Wert `2`. Zusammen mit den horizontalen Einheiten definiert dies das Gesamtraster: 2 Zeilen x 8 Spalten = 16 Slot-Positionen.

### Rastergröße (Front)

Die Größe der einzelnen Raster-Einheiten auf der Frontseite. Dialog-Feld mit vordefinierten Werten. Die Rastergröße bestimmt, wie groß jeder einzelne Slot in der visuellen [Chassis Ansicht](s-chassis-view.md) dargestellt wird.

### Horizontale Einheiten (Rear)

Die Anzahl der horizontalen Einheiten (Spalten) auf der Rückseite des Chassis. Die Rückseite hat oft ein anderes Raster als die Front: Bei einem Dell M1000e sind es beispielsweise 6 I/O-Slots in einem 2x3-Raster, während die Front 16 Blade-Slots bietet.

### Vertikale Einheiten (Rear)

Die Anzahl der vertikalen Einheiten (Zeilen) auf der Rückseite.

### Rastergröße (Rear)

Die Größe der einzelnen Raster-Einheiten auf der Rückseite. Kann sich von der Frontseite unterscheiden, da I/O-Module und Netzteile oft andere Abmessungen haben als Blade Server.

### Beschreibung

Freitext für zusätzliche Angaben: genaues Modell des Chassis (z.B. „Dell PowerEdge M1000e, 10U"), Firmware-Version des Chassis-Management-Controllers, Netzteilkonfiguration (z.B. „6x 2700W, 2N-redundant"), Kühlungshinweise oder Besonderheiten bei der Slot-Belegung.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATS__CHASSIS` |
| **Typ** | Spezifische Kategorie |
| **Multi-Value** | Nein |
| **Zugeordnet zu** | Blade Chassis |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Horizontale Einheiten (Front)** | `front_x` | Ganzzahl |
| **Vertikale Einheiten (Front)** | `front_y` | Ganzzahl |
| **Rastergröße (Front)** | `front_size` | Dialog (Auswahl) |
| **Horizontale Einheiten (Rear)** | `rear_x` | Ganzzahl |
| **Vertikale Einheiten (Rear)** | `rear_y` | Ganzzahl |
| **Rastergröße (Rear)** | `rear_size` | Dialog (Auswahl) |
| **Beschreibung** | `description` | Textfeld (mehrzeilig) |

### API-Beispiele

#### Eintrag erstellen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "object": 800,
        "category": "C__CATS__CHASSIS",
        "data": {
            "front_x": 8,
            "front_y": 2,
            "front_size": 1,
            "rear_x": 3,
            "rear_y": 2,
            "rear_size": 1,
            "description": "Dell PowerEdge M1000e, 10U Blade Chassis. 16 Half-Height Blade Slots (Front), 6 I/O Module Slots (Rear). 6x 2700W PSU, 2N-redundant."
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
        "object": 800,
        "category": "C__CATS__CHASSIS"
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
        "object": 800,
        "category": "C__CATS__CHASSIS",
        "entry": 1,
        "data": {
            "rear_x": 4,
            "rear_y": 2,
            "description": "2026-04: Raster-Konfiguration angepasst nach Firmware-Update. Rückseite nun 4x2 für erweiterte I/O-Module."
        }
    },
    "id": 3
}
```
