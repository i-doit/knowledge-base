---
title: "Kategorie: Desktop"
description: Dokumentation der spezifischen Kategorie Desktop (Client) in i-doit
icon:
status:
lang: de
---

# Kategorie: Desktop

Die Kategorie **Desktop** erfasst client-spezifische Eigenschaften eines Endgeräts. Sie ist eine **Single-Value-Kategorie** und steht als spezifische Kategorie auf Objekten vom Typ *Client* zur Verfügung.

## Verwendung

Typische Anwendungsfälle:

- **Client-Typ dokumentieren**: Unterscheide zwischen Desktop, Laptop, Tablet, Thin Client oder anderen Formfaktoren. Das Dialog+-Feld erlaubt die Ergänzung eigener Typen – etwa `Kiosk-Terminal` oder `Ruggedized Notebook`.
- **Tastaturlayout erfassen**: Halte fest, ob ein Gerät mit deutschem (`QWERTZ`), englischem (`QWERTY`) oder einem anderen Layout ausgestattet ist. Hilfreich beim Gerätetausch und für den IT-Support, insbesondere in internationalen Organisationen.
- **Reporting und Filterung**: Der Report Manager kann nach Client-Typ filtern – z.B. "alle Laptops mit Windows 11" oder "alle Thin Clients im Standort Berlin". In Kombination mit der Kategorie [Modell](model.md) und [Betriebssystem](operating-system.md) entsteht ein umfassendes Endgeräte-Profil.

!!! note "Abgrenzung zur Kategorie Modell"
    Die Kategorie Desktop ist spezifisch für Client-Objekte und bietet ein dediziertes Dialog+-Feld für den Client-Typ. Allgemeine Hardware-Attribute wie Hersteller und Modell gehören in die Kategorie [Modell](model.md).

[![Desktop](../../assets/images/de/grundlagen/kategorien/s-client.png)](../../assets/images/de/grundlagen/kategorien/s-client.png)

## Felder

### Client-Typ

Der Formfaktor oder die Art des Clients, z.B. `Desktop`, `Laptop`, `Tablet` oder `Thin Client`. Dialog+-Feld – bei Bedarf lassen sich eigene Werte ergänzen.

### Tastaturlayout

Das physische Tastaturlayout des Geräts, z.B. `QWERTZ (DE)`, `QWERTY (US)` oder `AZERTY (FR)`. Freitext-Feld mit maximal 255 Zeichen.

### Beschreibung

Freitext für ergänzende Angaben, z.B. besondere Peripherie, Docking-Station-Kompatibilität oder Hinweise zur Verwendung.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATS__CLIENT` |
| **Typ** | Spezifische Kategorie |
| **Multi-Value** | Nein (Single-Value) |
| **Zugeordnet zu** | Client |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Client-Typ** | `type` | Dialog+ (erweiterbare Auswahl) |
| **Tastaturlayout** | `keyboard_layout` | Text |
| **Beschreibung** | `description` | Textfeld (mehrzeilig) |

### API-Beispiele

#### Eintrag erstellen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "object": 101,
        "category": "C__CATS__CLIENT",
        "data": {
            "type": 1,
            "keyboard_layout": "QWERTZ (DE)",
            "description": "Standard-Arbeitsplatz, inkl. Docking Station HP UltraSlim"
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
        "object": 101,
        "category": "C__CATS__CLIENT"
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
        "object": 101,
        "category": "C__CATS__CLIENT",
        "entry": 1,
        "data": {
            "type": 2,
            "keyboard_layout": "QWERTY (US)",
            "description": "Umstellung auf Laptop, internationales Layout"
        }
    },
    "id": 3
}
```
