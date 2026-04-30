---
title: "Kategorie: Chassis Geräte"
description: Dokumentation der Kategorie Chassis Geräte (Assigned Devices) in i-doit
icon:
status:
lang: de
---

# Kategorie: Chassis Geräte

Die Kategorie **Chassis Geräte** dokumentiert die einem Chassis zugewiesenen Geräte – typischerweise Blade Server, Switches oder Storage-Module. Sie ist eine **Multi-Value-Kategorie** und steht als spezifische Kategorie ausschließlich auf Objekten vom Typ *Blade Chassis* zur Verfügung.

## Verwendung

Typische Anwendungsfälle:

- **Blade-Server-Zuordnung**: Weise Blade Server einem bestimmten Chassis zu und lege fest, in welchem [Slot](s-chassis-slot.md) sie stecken. Die Zuordnung bildet die physische Bestückung des Chassis ab.
- **Rollenverteilung**: Über das Feld *Rolle* lässt sich differenzieren, ob ein eingebautes Gerät als Server, Switch, Storage, Power Supply oder I/O-Modul fungiert.
- **Hostadapter- und Interface-Zuordnung**: Pro Geräteeintrag kann optional ein Hostadapter (HBA) und ein Netzwerk-Interface aus der Konfiguration des zugewiesenen Objekts referenziert werden – damit wird die interne Verkabelung des Chassis nachvollziehbar.
- **Kapazitätsplanung**: Im Report Manager lässt sich auswerten, wie viele Slots eines Chassis bereits belegt sind und welche Geräte verbaut wurden.

!!! info "Zusammenspiel der Chassis-Kategorien"
    Die drei Chassis-Kategorien arbeiten Hand in Hand: In **[Chassis Slots](s-chassis-slot.md)** definierst du die verfügbaren Steckplätze, in **Chassis Geräte** weist du konkrete Objekte zu, und die **[Chassis Ansicht](s-chassis-view.md)** zeigt das Ergebnis als visuelles Raster.

[![Chassis Geräte](../../assets/images/de/grundlagen/kategorien/s-chassis-devices.png)](../../assets/images/de/grundlagen/kategorien/s-chassis-devices.png)

## Felder

### Rolle

Die Funktion des Geräts innerhalb des Chassis, z.B. `Blade Server`, `Switch`, `Storage` oder `Power Supply`. Dialog+-Feld – eigene Rollen lassen sich bei Bedarf ergänzen.

### Gerätezuweisung

Das i-doit-Objekt, das diesem Chassis-Eintrag zugewiesen wird. Über den Objekt-Browser wird ein bestehendes Objekt ausgewählt – typischerweise ein Blade Server oder ein Switch-Modul. Die Verknüpfung erzeugt automatisch eine Beziehung (Relationstyp 33).

### Gerätezuweisung (Hostadapter)

Optional kann ein bestimmter Hostadapter (HBA) des zugewiesenen Geräts referenziert werden. Die Auswahlliste wird dynamisch aus den HBA-Einträgen des zugewiesenen Objekts befüllt.

### Gerätezuweisung (Interface)

Optional kann ein bestimmtes Netzwerk-Interface des zugewiesenen Geräts ausgewählt werden. Dies ermöglicht die Dokumentation, über welchen physischen Port das Gerät mit dem Chassis-Backplane verbunden ist.

### Gerätezuweisung (Stromverbraucher)

Optional kann ein Stromverbraucher-Eintrag des zugewiesenen Geräts ausgewählt werden. So wird festgehalten, welche Stromversorgung das Gerät innerhalb des Chassis nutzt.

### Zugewiesen an (Slots)

Gibt an, in welchen [Slots](s-chassis-slot.md) das Gerät eingebaut ist. Ein Gerät kann mehrere Slots belegen, z.B. bei Double-Width-Blades.

### Beschreibung

Freitext für ergänzende Informationen, etwa Seriennummer, Firmware-Version oder Besonderheiten der Einbausituation.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATS__CHASSIS_DEVICES` |
| **Typ** | Spezifische Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Blade Chassis |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Rolle** | `role` | Dialog+ (erweiterbare Auswahl) |
| **Gerätezuweisung** | `assigned_device` | Objekt-Browser |
| **Gerätezuweisung (Hostadapter)** | `assigned_hba` | Dialog (Auswahl) |
| **Gerätezuweisung (Interface)** | `assigned_interface` | Dialog (Auswahl) |
| **Gerätezuweisung (Stromverbraucher)** | `assigned_power_consumer` | Dialog (Auswahl) |
| **Zugewiesen an (Slots)** | `assigned_slots` | Mehrfachauswahl |
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
        "category": "C__CATS__CHASSIS_DEVICES",
        "data": {
            "role": 1,
            "assigned_device": 815,
            "description": "Blade Server in Slot 3-4, Dual-Width"
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
        "category": "C__CATS__CHASSIS_DEVICES"
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
        "category": "C__CATS__CHASSIS_DEVICES",
        "entry": 7,
        "data": {
            "role": 2,
            "description": "Umgebaut auf Switch-Modul, 2025-09"
        }
    },
    "id": 3
}
```
