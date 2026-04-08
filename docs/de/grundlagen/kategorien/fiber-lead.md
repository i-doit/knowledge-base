---
title: "Kategorie: Faser/Ader"
description: Dokumentation der Kategorie Faser/Ader (Fiber/lead) in i-doit
icon:
status:
lang: de
---

# Kategorie: Faser/Ader

Die Kategorie **Faser/Ader** (im englischen UI als "Fiber/lead" bezeichnet) dokumentiert die einzelnen Fasern innerhalb eines Glasfaser- oder Kupferkabels. Sie ist eine **Multi-Value-Kategorie** -- pro Kabel-Objekt werden so viele Einträge angelegt, wie das Kabel Fasern oder Adern enthält. Ein 24-Faser-LWL-Kabel hat also 24 Einträge in dieser Kategorie.

!!! info "Nur auf Kabel-Objekten verfügbar"
    Diese Kategorie ist ausschließlich Objekten vom Typ **Kabel** zugeordnet. Sie ergänzt die allgemeine Kabelverkabelung um die Detailebene der einzelnen Fasern -- entscheidend für LWL-Dokumentation (Lichtwellenleiter), aber auch für Kupferkabel mit mehreren Adern.

!!! tip "Farbcodierung nach TIA-598"
    Bei LWL-Kabeln folgt die Farbcodierung der Fasern in der Regel dem Standard **TIA-598** (in Europa oft nach IEC 60304). Die Standardreihenfolge der Faserfarben ist: Blau, Orange, Gruen, Braun, Grau, Weiss, Rot, Schwarz, Gelb, Violett, Rosa, Türkis. Tragen Sie die Farben konsequent ein -- so ist auf einen Blick erkennbar, welche Faser welche Position im Bündel hat, und Verwechslungen beim Spleißen oder Patchen werden vermieden.

## Verwendung

Typische Anwendungsfälle:

- **LWL-Dokumentation vervollständigen**: Erfasse jede Faser eines Glasfaserkabels mit Bezeichnung, Farbe und Kategorie. In Kombination mit der Kabelverkabelung entsteht eine lueckenlose Dokumentation von der Faser bis zum Patch-Panel.
- **Kapazitätstracking**: Über Reports lässt sich auswerten, wie viele Fasern eines Kabels bereits in Verwendung sind und wie viele noch frei stehen. Das ist entscheidend für die Planung neuer Verbindungen, ohne unnötig neue Kabel zu ziehen.
- **Dämpfungswerte dokumentieren**: Das Feld Dämpfung hält den gemessenen Signalverlust pro Faser fest (in dB). Nach dem Spleißen oder bei der Abnahme einer neuen Strecke werden diese Werte gemessen -- sie müssen innerhalb der zulässigen Grenzwerte der jeweiligen Faserkategorie liegen.
- **Fehlersuche und Wartung**: Wenn eine Verbindung stört, zeigt die Faser-Dokumentation sofort, welche Faser welche Farbe hat, welche Dämpfung gemessen wurde und ob sie innerhalb der Spezifikation liegt. Das beschleunigt die Fehlereingrenzung erheblich.
- **Kupferkabel mit mehreren Adern**: Auch bei strukturierter Kupferverkabelung (z.B. Cat-6-Kabel mit 4 Aderpaaren) können die einzelnen Adern hier dokumentiert werden, inklusive Farbcodierung und Belegung.

[![Faser/Ader](../../assets/images/de/grundlagen/kategorien/fiber-lead.png)](../../assets/images/de/grundlagen/kategorien/fiber-lead.png)

## Felder

### Bezeichnung

Die Bezeichnung der einzelnen Faser oder Ader, z.B. `Faser 01`, `F1-A` oder `Ader 3/4`. Wähle eine konsistente Nomenklatur für alle Kabel -- das erleichtert die Zuordnung beim Spleißen und Patchen erheblich.

### Kategorie

Die Faserkategorie bzw. der Fasertyp, z.B. `OS2` (Singlemode), `OM3`, `OM4` oder `OM5` (Multimode). Dialog+-Feld -- eigene Werte lassen sich bei Bedarf ergänzen. Die Kategorie bestimmt die zulässigen Übertragungsraten und maximalen Entfernungen:

- **OS2**: Singlemode, bis 10 km und mehr, für Weitverkehrsverbindungen und Rechenzentrumsanbindungen
- **OM3**: Multimode 50/125 um, bis 300 m bei 10 Gbit/s
- **OM4**: Multimode 50/125 um, bis 400 m bei 10 Gbit/s, optimiert für VCSEL-Laser
- **OM5**: Multimode, zusätzlich für Wellenlängen-Multiplexing (SWDM) optimiert

### Farbe

Die Farbe der Faser oder Ader. Dialog+-Feld -- die Standardfarben nach TIA-598 (Blau, Orange, Gruen, Braun, Grau, Weiss, Rot, Schwarz, Gelb, Violett, Rosa, Türkis) sollten vorbelegt sein. Bei Bündeladern kommen zusätzlich die Röhrchenfarben hinzu. Eine korrekte Farberfassung ist die Grundlage für fehlerfreies Spleißen und Patchen.

### Dämpfung

Der gemessene Signalverlust der Faser in Dezibel (dB). Typische Werte liegen bei Singlemode-Fasern (OS2) bei ca. `0.35 dB/km` bei 1310 nm und `0.22 dB/km` bei 1550 nm. Bei Multimode-Fasern (OM3/OM4) liegt die Dämpfung bei ca. `3.5 dB/km` bei 850 nm. Hier sollte der tatsächlich gemessene Wert der gesamten Strecke eingetragen werden -- nicht der theoretische Wert pro Kilometer.

!!! warning "Grenzwerte beachten"
    Wenn die gemessene Dämpfung die zulässigen Grenzwerte der Faserkategorie überschreitet, deutet das auf Probleme hin: schlechte Spleiße, verschmutzte Stecker, zu enge Biegeradien oder Faserschaeden. Dokumentieren Sie solche Abweichungen im Beschreibungsfeld.

### Beschreibung

Freitext für zusätzliche Angaben: Wellenlänge der Messung, Messdatum, verwendetes Messgerät (OTDR), Spleißprotokoll-Referenz, Belegungsstatus (frei/belegt/reserviert) oder Verbindungsziel.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__FIBER_LEAD` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Kabel |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Bezeichnung** | `label` | Text |
| **Kategorie** | `category` | Dialog+ (erweiterbare Auswahl) |
| **Farbe** | `color` | Dialog+ (erweiterbare Auswahl) |
| **Dämpfung** | `damping` | Dezimalzahl |
| **Beschreibung** | `description` | Textfeld (mehrzeilig) |

### API-Beispiele

#### Eintrag erstellen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "object": 3010,
        "category": "C__CATG__FIBER_LEAD",
        "data": {
            "label": "Faser 01",
            "category": "OS2",
            "color": "Blau",
            "damping": 1.85,
            "description": "Singlemode OS2, gemessen bei 1550 nm, OTDR-Messung vom 2026-03-15, Strecke RZ-A zu RZ-B (ca. 4.2 km)"
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
        "object": 3010,
        "category": "C__CATG__FIBER_LEAD"
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
        "object": 3010,
        "category": "C__CATG__FIBER_LEAD",
        "entry": 1,
        "data": {
            "damping": 2.10,
            "description": "Nachmessung 2026-04: Daempfung leicht gestiegen (1.85 auf 2.10 dB), Stecker gereinigt."
        }
    },
    "id": 3
}
```
