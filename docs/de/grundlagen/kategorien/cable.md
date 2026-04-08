---
title: "Kategorie: Kabelverbindung"
description: Dokumentation der Kategorie Kabelverbindung in i-doit
icon:
status:
lang: de
---

# Kategorie: Kabelverbindung

Die Kategorie **Kabelverbindung** dokumentiert die physischen Eigenschaften eines Kabel-Objekts: Typ, Farbe, Länge und Belegung. Sie ist eine **Single-Value-Kategorie** und ausschließlich dem Objekttyp **Kabel** zugeordnet.

!!! info "Das Verkabelungskonzept in i-doit"
    Die Verkabelungsdokumentation in i-doit basiert auf drei Bausteinen:

    1. **Anschluss-Kategorie** ([Anschluss](connector.md)) auf den Endgeräten -- definiert die physischen Ports/Buchsen (z.B. RJ45, LC-Duplex).
    2. **Kabel-Objekt** mit dieser Kategorie -- beschreibt das physische Kabel selbst (Typ, Länge, Farbe).
    3. **Verbindung** zwischen zwei Anschlüssen über ein Kabel-Objekt -- das Kabel "verbindet" Anschluss A mit Anschluss B.

    Ein Kabel ist also ein eigenständiges Objekt, das zwischen zwei [Anschlüssen](connector.md) vermittelt. Die Kategorie **Kabelverbindung** beschreibt die Eigenschaften dieses Kabels, während die [Anschluss](connector.md)-Kategorie auf den Endgeräten die Endpunkte definiert.

## Verwendung

Typische Anwendungsfälle:

- **Physische Netzwerkdokumentation**: Jedes Patchkabel, jede Glasfaserverbindung und jedes Stromkabel kann als eigenes Objekt erfasst werden. In der Kabelverbindung-Kategorie wird festgehalten, ob es sich um Cat6a, OM4-Glasfaser oder ein Stromkabel handelt -- wichtig für Bandbreiten-Planung, Dämpfungsberechnungen und Brandschutz.
- **Farbcodierung und Ordnung**: Über das Farbfeld lässt sich die Farbcodierung der Patchkabel dokumentieren. Viele Rechenzentren verwenden Farbschemata (rot = Management, blau = Produktion, gelb = DMZ). Ein Report über alle Kabel eines bestimmten Racks inklusive Farbe hilft, Verkabelungsfehler zu erkennen.
- **Längenplanung**: Die Kabellänge ist entscheidend bei der Planung neuer Verbindungen. Cat6a-Kabel duerfen maximal 90m Festverlegung + 10m Patchkabel haben. Über Reports lässt sich auswerten, welche Verbindungen an dieser Grenze liegen.
- **Glasfaser-Dokumentation**: Das Feld `Maximale Anzahl Fasern/Adern` dokumentiert bei Glasfaser-Kabeln die verfügbare Faseranzahl. Zusammen mit der Belegung (`Occupancy`) ergibt sich, wie viele Fasern noch frei sind -- essentiell für die Kapazitätsplanung bei LWL-Infrastruktur.
- **Bestandsaufnahme**: Per Report lassen sich alle Kabel eines bestimmten Typs oder einer bestimmten Farbe auflisten -- hilfreich bei Umruest-Projekten (z.B. Wechsel von Cat5e auf Cat6a).

[![Kabelverbindung](../../assets/images/de/grundlagen/kategorien/cable.png)](../../assets/images/de/grundlagen/kategorien/cable.png)

## Felder

### Kabeltyp

Die Art des Kabels, z.B. `Cat 6a`, `Cat 7`, `OM4 Glasfaser`, `Stromkabel` oder `USB`. Dialog+-Feld -- eigene Kabeltypen lassen sich frei ergänzen. Dieser Wert bestimmt, welche Leistungseigenschaften (Bandbreite, Dämpfung, Strombelastbarkeit) das Kabel hat, und ist die wichtigste Information für die Netzwerk- und Infrastrukturplanung.

### Farbe

Die physische Farbe des Kabels oder des Kabelmantels, z.B. `Blau`, `Rot`, `Gelb`. Dialog+-Feld. Die Farbcodierung ist in professionellen Umgebungen kein kosmetisches Detail, sondern ein Ordnungssystem: Produktionsnetze, Management-Netze und DMZ-Verbindungen werden häufig farblich getrennt, um Fehlverkabelungen auf den ersten Blick zu erkennen.

### Belegung

Die Belegungsart des Kabels, z.B. `Vollbelegt`, `Teilbelegt`. Dialog+-Feld. Besonders bei Glasfaser-Bündeln relevant: Ein 24-Faser-Kabel kann aktuell nur 12 Fasern in Verwendung haben.

### Kabellänge

Die physische Länge des Kabels als Dezimalzahl. In Kombination mit der Längeneinheit ergibt sich der exakte Wert. Bei Kupferkabeln im LAN ist die Länge direkt relevant für die Signal-Qualität (max. 100m bei Cat6a). Bei Glasfaser bestimmt die Länge das Dämpfungsbudget.

### Längeneinheit

Die Masseinheit der Kabellänge, z.B. `m` (Meter) oder `cm`. Für Konsistenz in Reports empfiehlt es sich, innerhalb der gesamten CMDB eine einheitliche Längeneinheit zu verwenden.

### Maximale Anzahl Fasern/Adern

Die maximale Anzahl der Fasern (bei Glasfaser) bzw. Adern (bei Kupfer-Bündeln) im Kabel. Bei einem OM4-Bündel mit 24 Fasern steht hier `24`. In Kombination mit der Belegung lässt sich die freie Kapazität berechnen.

### Verbindung

Zeigt die aktuelle Verbindung des Kabels an -- also welche beiden [Anschlüsse](connector.md) durch dieses Kabel verbunden sind. Dieses Feld ist eine berechnete Anzeige und wird durch die Verkabelung in der Anschluss-Kategorie der Endgeräte bestimmt.

### Beschreibung

Freitext für zusätzliche Informationen: Verlegungsweg (z.B. "Kabelkanal Decke, Trasse Nord"), Installations-Datum, zuständiger Elektriker oder Verweis auf den Verkabelungsplan.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__CABLE` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Nein |
| **Zugeordnet zu** | Kabel |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Kabeltyp** | `cable_type` | Dialog+ (erweiterbare Auswahl) |
| **Farbe** | `cable_colour` | Dialog+ (erweiterbare Auswahl) |
| **Belegung** | `cable_occupancy` | Dialog+ (erweiterbare Auswahl) |
| **Kabellänge** | `length` | Dezimalzahl |
| **Längeneinheit** | `length_unit` | Dialog (Auswahl) |
| **Maximale Anzahl Fasern/Adern** | `max_amount_of_fibers_leads` | Ganzzahl |
| **Verbindung** | `connection` | Text (berechnete Anzeige) |
| **Beschreibung** | `description` | Textfeld (mehrzeilig) |

### API-Beispiele

#### Eintrag erstellen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "object": 780,
        "category": "C__CATG__CABLE",
        "data": {
            "cable_type": "Cat 6a",
            "cable_colour": "Blau",
            "cable_occupancy": "Vollbelegt",
            "length": 12.5,
            "length_unit": 2,
            "max_amount_of_fibers_leads": 8,
            "description": "Patchkabel Rack A03 Port 24 -> Patchfeld PP-01 Port 24, Kabelkanal Decke"
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
        "object": 780,
        "category": "C__CATG__CABLE"
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
        "object": 780,
        "category": "C__CATG__CABLE",
        "entry": 1,
        "data": {
            "cable_type": "Cat 6a",
            "length": 15.0,
            "description": "Kabellaenge nach Neuverlegung 2026-03 korrigiert. Verlegeweg ueber Doppelboden statt Deckentrasse."
        }
    },
    "id": 3
}
```
