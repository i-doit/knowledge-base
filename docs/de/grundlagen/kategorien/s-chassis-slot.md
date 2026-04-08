---
title: "Kategorie: Chassis Slots"
description: Dokumentation der Kategorie Chassis Slots in i-doit
icon:
status:
lang: de
---

# Kategorie: Chassis Slots

Die Kategorie **Chassis Slots** definiert die verfügbaren Steckplätze eines Blade-Chassis. Sie ist eine **Multi-Value-Kategorie** und steht als spezifische Kategorie ausschließlich auf Objekten vom Typ *Blade Chassis* zur Verfügung.

## Verwendung

Typische Anwendungsfälle:

- **Slot-Layout definieren**: Lege alle physischen Slots eines Chassis an – sowohl Compute-Slots für Blade Server als auch Slots für Switch-Module, I/O-Module oder Netzteile. Pro Slot vergibst du eine sprechende Bezeichnung wie `Blade Bay 1` oder `Switch Slot A`.
- **Geräte zuweisen**: Über das Feld *Gerätezuweisung* lassen sich direkt in der Slot-Konfiguration ein oder mehrere [Chassis Geräte](s-chassis-devices.md) verknüpfen, die den jeweiligen Slot belegen.
- **Visuelle Anordnung**: Die Positionsfelder (X/Y-Koordinaten) steuern, wo der Slot in der [Chassis Ansicht](s-chassis-view.md) dargestellt wird. Über die Von-/Bis-Werte lassen sich auch Slots abbilden, die mehrere Rastereinheiten umspannen.
- **Einbaurichtung festlegen**: Das Feld *Einbaurichtung* gibt an, ob der Slot von der Front- oder Rückseite des Chassis zugänglich ist – relevant für die Darstellung in der Chassis Ansicht.

!!! tip "Slots vor Geräten anlegen"
    Definiere zuerst die Slots mit ihren Positionen, bevor du in der Kategorie [Chassis Geräte](s-chassis-devices.md) die Zuordnung vornimmst. So stehen in der Geräte-Kategorie bereits alle Slots zur Auswahl bereit.

[![Chassis Slots](../../assets/images/de/grundlagen/kategorien/s-chassis-slot.png)](../../assets/images/de/grundlagen/kategorien/s-chassis-slot.png)

## Felder

### Anschlusstyp

Der Typ des Slot-Anschlusses, z.B. `Blade`, `Switch Module` oder `Power Supply`. Dialog+-Feld – bei Bedarf können eigene Anschlusstypen ergänzt werden.

### Einbaurichtung

Gibt an, ob der Slot auf der **Vorderseite** (Front) oder **Rückseite** (Rear) des Chassis liegt. Diese Information steuert die Zuordnung zur jeweiligen Seite in der [Chassis Ansicht](s-chassis-view.md).

### Slot-Bezeichnung

Ein frei wählbarer Name für den Slot, z.B. `Bay 1`, `PSU Slot A` oder `IO Module 2`. Die Bezeichnung erscheint in der Listenansicht und in der visuellen Chassis-Darstellung.

### Horizontale Position (Von)

Die X-Startposition des Slots im Raster der Chassis Ansicht. Zusammen mit dem Bis-Wert wird die horizontale Ausdehnung des Slots bestimmt.

### Horizontale Position (Bis)

Die X-Endposition des Slots. Liegt dieser Wert höher als die Startposition, erstreckt sich der Slot über mehrere Spalten – nützlich für Double-Width-Blades.

### Vertikale Position (Von)

Die Y-Startposition des Slots im Raster der Chassis Ansicht.

### Vertikale Position (Bis)

Die Y-Endposition des Slots. Analog zur horizontalen Position bestimmen Von-/Bis-Werte die vertikale Ausdehnung.

### Gerätezuweisung

Die diesem Slot zugewiesenen Geräte. Pro Slot können mehrere Geräte ausgewählt werden (Mehrfachauswahl). Die zugewiesenen Objekte erscheinen auch in der Kategorie [Chassis Geräte](s-chassis-devices.md).

### Beschreibung

Freitext für zusätzliche Angaben: Slot-Typ laut Herstellerdokumentation, Leistungsaufnahme, unterstützte Formfaktoren oder besondere Einschränkungen.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATS__CHASSIS_SLOT` |
| **Typ** | Spezifische Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Blade Chassis |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Anschlusstyp** | `connector_type` | Dialog+ (erweiterbare Auswahl) |
| **Einbaurichtung** | `insertion` | Dialog (Auswahl) |
| **Slot-Bezeichnung** | `title` | Text |
| **Horizontale Position (Von)** | `from_x` | Ganzzahl |
| **Horizontale Position (Bis)** | `to_x` | Ganzzahl |
| **Vertikale Position (Von)** | `from_y` | Ganzzahl |
| **Vertikale Position (Bis)** | `to_y` | Ganzzahl |
| **Gerätezuweisung** | `assigned_devices` | Mehrfachauswahl (Dialog-Liste) |
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
        "category": "C__CATS__CHASSIS_SLOT",
        "data": {
            "title": "Blade Bay 1",
            "connector_type": 1,
            "insertion": 1,
            "from_x": 0,
            "to_x": 1,
            "from_y": 0,
            "to_y": 0,
            "description": "Full-Height Blade Slot, max. 250 W"
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
        "category": "C__CATS__CHASSIS_SLOT"
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
        "category": "C__CATS__CHASSIS_SLOT",
        "entry": 5,
        "data": {
            "title": "Blade Bay 1 (erweitert)",
            "to_x": 2,
            "description": "Auf Double-Width erweitert fuer neuen Blade Server"
        }
    },
    "id": 3
}
```
