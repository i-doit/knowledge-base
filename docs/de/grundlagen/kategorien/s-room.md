---
title: "Kategorie: Raum"
description: Dokumentation der Kategorie Raum in i-doit
icon:
status:
lang: de
---

# Kategorie: Raum

Die Kategorie **Raum** dokumentiert die raumspezifischen Eigenschaften eines Raum-Objekts: Raumtyp, Etage, Raumnummer und eine optionale Beschreibung. Sie ist eine **spezifische Kategorie**, die ausschließlich für Objekte vom Typ Raum verfügbar ist.

Räume bilden in i-doit eine zentrale Ebene der [Standorthierarchie](location.md). Sie sind typischerweise einem Gebäude oder einer Etage untergeordnet und enthalten ihrerseits Schränke (Racks), Arbeitsplätze oder einzelne Geräte. Die Standortzuordnung selbst erfolgt über die globale Kategorie [Standort](location.md) -- die Kategorie **Raum** ergänzt diese um die raumspezifischen Zusatzinformationen.

## Verwendung

Typische Anwendungsfälle:

- **Raumverzeichnis aufbauen**: Erfasse alle Räume eines Gebäudes mit Raumnummer, Etage und Typ. In Kombination mit der Kategorie [Standort](location.md) entsteht eine navigierbare Gebäudestruktur: Standort > Gebäude > Etage > Raum > Rack > Server. Der Standort-Browser in i-doit visualisiert diese Hierarchie als Baumstruktur.
- **Rechenzentrumsräume klassifizieren**: Über das Feld „Typ" lassen sich Serverräume, Netzwerkverteilerräume, USV-Räume und Büroräume unterscheiden. Ein Report „Alle Räume vom Typ Serverraum" liefert eine schnelle Übersicht aller IT-kritischen Räumlichkeiten -- hilfreich für Brandschutz- und Zutrittskonzepte.
- **Umzugs- und Raumplanung**: Bei Büroumzügen oder Raumtauschen zeigt die Standorthierarchie unter dem jeweiligen Raum sofort, welche Geräte (Drucker, Telefone, Monitore, PCs) sich in diesem Raum befinden und mitumgezogen werden müssen.
- **Facility-Management und Audit**: In regulierten Umgebungen (ISO 27001, BSI IT-Grundschutz) müssen Räume mit IT-Infrastruktur dokumentiert werden -- inklusive Typ, Lage und Schutzmaßnahmen. Die Raum-Kategorie liefert die Basisinformationen, die durch benutzerdefinierte Kategorien (z.B. Zutrittsschutz, Klimatisierung) ergänzt werden können.

[![Raum](../../assets/images/de/grundlagen/kategorien/s-room.png)](../../assets/images/de/grundlagen/kategorien/s-room.png)

!!! tip "Raum-Grundriss im Standort-Browser"
    i-doit bietet eine grafische Raumansicht im Standort-Browser: Objekte innerhalb eines Raums werden als Kacheln dargestellt und können per Drag & Drop positioniert werden. Damit diese Ansicht funktioniert, müssen die Geräte über die Kategorie [Standort](location.md) dem Raum-Objekt als übergeordnetem Standort zugewiesen sein.

## Felder

### Typ

Der Raumtyp, z.B. `Büro`, `Serverraum`, `Netzwerkverteiler`, `Lager`, `Konferenzraum` oder `Technikraum`. Dialog+-Feld -- eigene Werte lassen sich bei Bedarf ergänzen. Der Typ ist das wichtigste Unterscheidungsmerkmal in Reports und Filtern: Er bestimmt, ob ein Raum als IT-kritisch eingestuft wird und welche Schutzanforderungen gelten.

### Raumnummer

Die offizielle Raumnummer oder -bezeichnung gemäß Gebäudeplan, z.B. `E.03.012` (Erdgeschoss, Gebäudeteil 03, Raum 012) oder `2-214`. Dieses Feld sollte dem Bezeichnungsschema des Facility-Managements folgen, damit die i-doit-Dokumentation mit physischen Türschildern und Gebäudeplänen konsistent ist.

### Etage

Die Etage oder das Stockwerk, in dem sich der Raum befindet, z.B. `EG`, `1. OG`, `UG` oder `3`. Freitextfeld -- es empfiehlt sich ein einheitliches Schema innerhalb der Organisation. Die Etage kann alternativ auch als eigenes Objekt in der Standorthierarchie abgebildet werden (Gebäude > Etage > Raum), ist hier aber als schnelle Zusatzinformation direkt am Raum dokumentierbar.

### Beschreibung

Freitextfeld für ergänzende Informationen: Raumgröße (m²), Anzahl Arbeitsplätze, besondere Ausstattung (Doppelboden, Klimaanlage, Brandmeldeanlage), Zutrittsbeschränkungen, Ansprechpartner oder Hinweise zur Nutzung.

!!! warning "Raumnummer und Standort konsistent halten"
    Die Raumnummer in dieser Kategorie ist ein reines Textfeld ohne Validierung. Stelle sicher, dass sie mit der tatsächlichen Zuordnung in der Kategorie [Standort](location.md) übereinstimmt. Wenn ein Raum physisch umgewidmet wird (z.B. vom Büro zum Serverraum), aktualisiere sowohl den Typ als auch die Standortbeziehung.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATS__ROOM` |
| **Typ** | Spezifische Kategorie |
| **Multi-Value** | Nein |
| **Zugeordnet zu** | Raum (Room) |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Typ** | `type` | Dialog+ (erweiterbare Auswahl) |
| **Raumnummer** | `number` | Text |
| **Etage** | `floor` | Text |
| **Beschreibung** | `description` | Textfeld (mehrzeilig) |

### API-Beispiele

#### Eintrag erstellen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "object": 300,
        "category": "C__CATS__ROOM",
        "data": {
            "type": "Serverraum",
            "number": "E.03.012",
            "floor": "EG",
            "description": "Serverraum Gebäudeteil 03, Doppelboden, Klimaanlage, Zutritt nur mit Transponder"
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
        "object": 300,
        "category": "C__CATS__ROOM"
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
        "object": 300,
        "category": "C__CATS__ROOM",
        "entry": 1,
        "data": {
            "type": "Netzwerkverteiler",
            "description": "Umwidmung 2025-06: Serverraum zu Netzwerkverteiler, aktive Kühlung abgebaut"
        }
    },
    "id": 3
}
```
