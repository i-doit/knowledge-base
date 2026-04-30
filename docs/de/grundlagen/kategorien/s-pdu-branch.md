---
title: "Kategorie: PDU Strang"
description: Dokumentation der Kategorie PDU Strang in i-doit
icon:
status:
lang: de
---

# Kategorie: PDU Strang

Die Kategorie **PDU Strang** dokumentiert die einzelnen Stromstränge (Branches/Circuits) einer Power Distribution Unit. Sie ist eine **Multi-Value-Kategorie** -- pro PDU-Objekt können beliebig viele Stränge angelegt werden, die jeweils einen separaten Stromkreis mit eigenen Steckplätzen repräsentieren.

!!! info "PDU vs. PDU Strang"
    Die übergeordneten Stammdaten der PDU (Bezeichnung, allgemeine Beschreibung) werden in der Kategorie [PDU](s-pdu.md) gepflegt. Die Kategorie **PDU Strang** ergänzt diese um die Detailstruktur: Wie viele Stränge hat die PDU, wie viele Steckplätze (Receptacles) hat jeder Strang? Zusammen bilden beide Kategorien die vollständige Stromverteilungshierarchie ab.

## Verwendung

Typische Anwendungsfälle:

- **Steckplatzplanung im Rack**: Jeder Strang einer PDU hat eine definierte Anzahl von Steckplätzen (Receptacles). Die Dokumentation zeigt, wie viele Steckplätze pro Strang verfügbar sind und hilft bei der Entscheidung, ob ein neues Gerät noch Platz findet oder ein weiterer Strang bzw. eine zusätzliche PDU benötigt wird.
- **Stromkreis-Dokumentation**: In größeren Rechenzentren sind PDU-Stränge oft an unterschiedliche Phasen oder Sicherungskreise angeschlossen. Die Strang-Dokumentation ermöglicht die Zuordnung: Strang 1 hängt an Phase L1, Strang 2 an Phase L2 usw. Diese Information ist bei Wartungsarbeiten an einzelnen Phasen unverzichtbar.
- **Last-Verteilung**: Über Reports kann ausgewertet werden, wie viele Steckplätze pro Strang belegt sind. Ungleichmäßig verteilte Last (z.B. Strang 1 voll, Strang 2 leer) deutet auf Optimierungspotenzial hin und kann elektrische Asymmetrien verursachen.
- **Ausfallanalyse**: Fällt ein einzelner Strang aus (z.B. durch eine ausgelöste Sicherung), zeigt die Dokumentation sofort, welche Steckplätze betroffen sind. In Kombination mit der Verkabelungsdokumentation lässt sich ableiten, welche Geräte vom Ausfall betroffen sind.

[![PDU Strang](../../assets/images/de/grundlagen/kategorien/s-pdu-branch.png)](../../assets/images/de/grundlagen/kategorien/s-pdu-branch.png)

## Felder

### PDU

Referenz auf die übergeordnete PDU. Dieses Feld verknüpft den Strang mit der PDU-Konfiguration aus der Kategorie [PDU](s-pdu.md) und wird in der Regel automatisch gesetzt, da die Strang-Kategorie auf demselben Objekt gepflegt wird.

### Strang-ID

Eine fortlaufende Nummer oder Kennung des Strangs innerhalb der PDU, z.B. `1`, `2` oder `A`, `B`. Ermöglicht die eindeutige Identifikation einzelner Stromkreise, insbesondere bei PDUs mit vielen Strängen.

### Steckplätze (Receptacles)

Die Anzahl der Steckplätze (Outlets) auf diesem Strang. Ein typischer Strang hat zwischen 4 und 12 Steckplätze. Diese Angabe ist die Grundlage für die Kapazitätsplanung: Wie viele Geräte können an diesem Strang maximal angeschlossen werden?

### Beschreibung

Freitextfeld für ergänzende Informationen: zugeordnete Phase (L1/L2/L3), maximale Stromstärke des Strangs in Ampere, Sicherungstyp oder Hinweise zur physischen Position am Gerät.

!!! warning "Steckplatzanzahl aktuell halten"
    Die Angabe der Steckplätze ist statisch und wird nicht automatisch mit der tatsächlichen Belegung abgeglichen. Wenn Steckplätze physisch defekt sind oder durch Adapter-Steckdosen erweitert werden, sollte das im Beschreibungsfeld dokumentiert werden, damit die Kapazitätsplanung korrekt bleibt.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATS__PDU_BRANCH` |
| **Typ** | Spezifische Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | PDU |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **PDU** | `pdu_id` | Ganzzahl |
| **Strang-ID** | `branch_id` | Ganzzahl |
| **Steckplätze** | `receptables` | Ganzzahl |
| **Beschreibung** | `description` | Textfeld (mehrzeilig) |

### API-Beispiele

#### Eintrag erstellen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "object": 750,
        "category": "C__CATS__PDU_BRANCH",
        "data": {
            "pdu_id": 1,
            "branch_id": 1,
            "receptables": 8,
            "description": "Phase L1, max. 16A, Steckplätze 1-8 (obere Reihe)"
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
        "object": 750,
        "category": "C__CATS__PDU_BRANCH"
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
        "object": 750,
        "category": "C__CATS__PDU_BRANCH",
        "entry": 1,
        "data": {
            "receptables": 6,
            "description": "Phase L1, max. 16A, Steckplätze 1-6 (Plätze 7+8 defekt seit 2025-09)"
        }
    },
    "id": 3
}
```
