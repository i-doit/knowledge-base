---
title: "Kategorie: Chassis Ansicht"
description: Dokumentation der Kategorie Chassis Ansicht (Chassis View) in i-doit
icon:
status:
lang: de
---

# Kategorie: Chassis Ansicht

Die Kategorie **Chassis Ansicht** konfiguriert die visuelle Darstellung eines Blade-Chassis in i-doit. Sie definiert das Raster, in dem die [Chassis Slots](s-chassis-slot.md) und die zugeordneten [Chassis Geräte](s-chassis-devices.md) angezeigt werden. Die Kategorie ist eine **Single-Value-Kategorie** und steht als spezifische Kategorie ausschließlich auf Objekten vom Typ *Blade Chassis* zur Verfügung.

## Verwendung

Typische Anwendungsfälle:

- **Raster für Front und Rückseite festlegen**: Definiere die Anzahl der horizontalen und vertikalen Einheiten für Vorder- und Rückseite des Chassis. Diese Werte bestimmen das Koordinatensystem, in dem die Slots positioniert werden.
- **Rastergröße anpassen**: Über die Felder *Rastergröße* lässt sich die Darstellungsgröße der einzelnen Zellen steuern – nützlich, um die Ansicht an die tatsächlichen Proportionen des Chassis anzupassen.
- **Belegung auf einen Blick**: Die resultierende grafische Ansicht zeigt sofort, welche Slots belegt und welche noch frei sind. Das erleichtert die Kapazitätsplanung und die Dokumentation bei Umbauten.

!!! info "Zusammenspiel mit Slots und Geräten"
    Die Chassis Ansicht selbst enthält keine Geräte oder Slots – sie definiert lediglich das Raster. Die eigentlichen Positionsdaten kommen aus der Kategorie [Chassis Slots](s-chassis-slot.md), die Gerätezuordnung aus [Chassis Geräte](s-chassis-devices.md).

!!! note "Raster vor Slots konfigurieren"
    Lege die Rasterabmessungen in dieser Kategorie fest, bevor du in [Chassis Slots](s-chassis-slot.md) die Positionskoordinaten der einzelnen Slots einträgst. Die Koordinaten der Slots müssen innerhalb des hier definierten Rasters liegen.

[![Kategorie Chassis Ansicht](../../assets/images/de/grundlagen/kategorien/s-chassis-view.png)](../../assets/images/de/grundlagen/kategorien/s-chassis-view.png)

## Felder

### Vorderseite -- Horizontale Einheiten

Die Anzahl der Spalten im Raster der Vorderseite. Bestimmt, wie viele Slots horizontal nebeneinander platziert werden können.

### Vorderseite -- Vertikale Einheiten

Die Anzahl der Zeilen im Raster der Vorderseite. Bestimmt, wie viele Slots vertikal übereinander platziert werden können.

### Vorderseite -- Rastergröße

Die Darstellungsgröße der einzelnen Rasterzellen auf der Vorderseite. Beeinflusst die visuelle Proportionierung in der Chassis-Ansicht der Benutzeroberfläche.

### Rückseite -- Horizontale Einheiten

Die Anzahl der Spalten im Raster der Rückseite.

### Rückseite -- Vertikale Einheiten

Die Anzahl der Zeilen im Raster der Rückseite.

### Rückseite -- Rastergröße

Die Darstellungsgröße der einzelnen Rasterzellen auf der Rückseite.

### Beschreibung

Freitext für ergänzende Angaben, z.B. Hinweise zum Formfaktor des Chassis oder zur Benennung der Herstellerdokumentation.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATS__CHASSIS_VIEW` |
| **Typ** | Spezifische Kategorie |
| **Multi-Value** | Nein (Single-Value) |
| **Zugeordnet zu** | Blade Chassis |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Vorderseite -- Horizontale Einheiten** | `front_x` | Ganzzahl |
| **Vorderseite -- Vertikale Einheiten** | `front_y` | Ganzzahl |
| **Vorderseite -- Rastergröße** | `front_size` | Dialog (Auswahl) |
| **Rückseite -- Horizontale Einheiten** | `rear_x` | Ganzzahl |
| **Rückseite -- Vertikale Einheiten** | `rear_y` | Ganzzahl |
| **Rückseite -- Rastergröße** | `rear_size` | Dialog (Auswahl) |
| **Beschreibung** | `description` | Textfeld (mehrzeilig) |

### API-Beispiele

#### Eintrag erstellen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "object": 42,
        "category": "C__CATS__CHASSIS_VIEW",
        "data": {
            "front_x": 8,
            "front_y": 2,
            "front_size": 1,
            "rear_x": 4,
            "rear_y": 2,
            "rear_size": 1,
            "description": "HPE BladeSystem c7000: Front 8x2 Blade Bays, Rear 4x2 Switch/IO Bays"
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
        "object": 42,
        "category": "C__CATS__CHASSIS_VIEW"
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
        "object": 42,
        "category": "C__CATS__CHASSIS_VIEW",
        "entry": 1,
        "data": {
            "front_x": 16,
            "front_y": 2,
            "description": "Raster auf 16 Spalten erweitert (Half-Height Blades)"
        }
    },
    "id": 3
}
```
