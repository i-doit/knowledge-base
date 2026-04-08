---
title: "Kategorie: PDU"
description: Dokumentation der Kategorie PDU in i-doit
icon:
status:
lang: de
---

# Kategorie: PDU

Die Kategorie **PDU** dokumentiert die Grundkonfiguration einer Power Distribution Unit (Stromverteileinheit). Sie ist eine **spezifische Kategorie**, die ausschließlich für Objekte vom Typ PDU verfügbar ist, und enthält die übergeordneten Stammdaten der Einheit -- die einzelnen Stromstränge (Branches) werden in der separaten Kategorie [PDU Strang](s-pdu-branch.md) gepflegt.

## Verwendung

Typische Anwendungsfälle:

- **Rechenzentrumsinfrastruktur dokumentieren**: Jede PDU im Rack erhält ein eigenes Objekt mit dieser Kategorie. In Kombination mit der Kategorie [PDU Strang](s-pdu-branch.md) entsteht eine vollständige Stromverteilungsdokumentation: Wie viele Stränge hat die PDU, wie viele Steckplätze pro Strang, und welche Geräte sind angeschlossen?
- **Kapazitätsplanung Stromversorgung**: Über den Report Manager lässt sich auswerten, welche PDUs in welchen Racks verbaut sind und wie viele Stränge bzw. Steckplätze belegt sind. Das hilft bei der Entscheidung, ob ein Rack noch weitere Geräte aufnehmen kann oder ob die Stromversorgung erweitert werden muss.
- **Ausfallanalyse und Redundanz**: Viele Rechenzentren setzen zwei PDUs pro Rack ein (A-Feed und B-Feed). Die Dokumentation beider PDUs und ihrer Stränge ermöglicht eine schnelle Einschätzung, welche Geräte bei Ausfall eines Stromkreises betroffen sind.
- **Wartungsplanung**: Bei geplanten Wartungsarbeiten an der Stromversorgung zeigt die PDU-Dokumentation sofort, welche Geräte von der betroffenen PDU gespeist werden und vorab heruntergefahren oder auf den redundanten Strang umgeschaltet werden müssen.

[![Kategorie PDU](../../assets/images/de/grundlagen/kategorien/s-pdu.png)](../../assets/images/de/grundlagen/kategorien/s-pdu.png)

!!! tip "PDU und Verkabelung gemeinsam dokumentieren"
    Für eine lückenlose Stromversorgungsdokumentation empfiehlt es sich, neben der PDU-Kategorie auch die Kategorien [Anschluss](connector.md) und [Kabel](cable.md) zu pflegen. So wird nicht nur erfasst, welche Steckplätze existieren, sondern auch, welches Gerät über welches Kabel an welchem Steckplatz angeschlossen ist.

## Felder

### PDU

Die Bezeichnung oder interne Kennung der Power Distribution Unit, z.B. `PDU-A-Rack07` oder `APC AP8853`. Dieses Feld dient der eindeutigen Identifikation der PDU innerhalb des Rechenzentrums und erscheint in der Listenansicht und in Reports.

### Beschreibung

Freitextfeld für ergänzende Informationen: Hersteller, Modell, maximale Gesamtleistung (kW/Ampere), Eingangsspannung, Anzahl Phasen, Firmware-Version oder besondere Konfigurationshinweise.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATS__PDU` |
| **Typ** | Spezifische Kategorie |
| **Multi-Value** | Nein |
| **Zugeordnet zu** | PDU |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **PDU** | `pdu_id` | Text |
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
        "category": "C__CATS__PDU",
        "data": {
            "pdu_id": "PDU-A-Rack07",
            "description": "APC AP8853, 3-phasig, 17.3 kW, 230V/30A, Firmware v6.9.6"
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
        "category": "C__CATS__PDU"
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
        "category": "C__CATS__PDU",
        "entry": 1,
        "data": {
            "description": "APC AP8853, 3-phasig, 17.3 kW, 230V/30A, Firmware v6.9.8 – Update 2025-11"
        }
    },
    "id": 3
}
```
