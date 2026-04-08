---
title: "Kategorie: Mobilfunkvertrag"
description: Dokumentation der spezifischen Kategorie Mobilfunkvertrag in i-doit
icon:
status:
lang: de
---

# Kategorie: Mobilfunkvertrag

Die Kategorie **Mobilfunkvertrag** ist eine **spezifische Kategorie** des Objekttyps **Mobilfunkvertrag** und dokumentiert die vertragsbezogenen Daten eines Mobilfunkvertrags. Sie ist eine **Single-Value-Kategorie** – pro Vertragsobjekt existiert genau ein Eintrag mit der IMEI-Nummer und einer Beschreibung.

## Warum ein eigener Objekttyp für Mobilfunkverträge?

Mobilfunkverträge sind in der IT-Dokumentation ein eigener Verwaltungsgegenstand, weil sie unabhängig vom physischen Gerät existieren. Ein Vertrag kann von einem Smartphone auf ein anderes übertragen werden, eine SIM-Karte kann gewechselt werden, aber der Vertrag mit dem Provider bleibt bestehen. i-doit bildet diese Realität ab, indem Vertrag, SIM-Karte und Gerät als **separate Objekte** geführt werden.

!!! info "Die Kette: Vertrag → SIM → Gerät"
    Das Mobile Device Management in i-doit folgt einer dreistufigen Kette:

    1. **Mobilfunkvertrag** – das Vertragsobjekt mit Provider-Daten, IMEI und Vertragslaufzeit (über die Kategorie [Vertragszuweisung](contract-assignment.md))
    2. **SIM-Karte** – die physische oder eSIM mit ICCID und Telefonnummer (Kategorie [SIM-Karte](sim.md))
    3. **Endgerät** – das Smartphone, Tablet oder IoT-Device, dem die SIM zugewiesen ist (Kategorie [Zugewiesene SIM-Karten](assigned-sim-cards.md))

    Durch diese Trennung lässt sich jeder Baustein unabhängig verwalten: Ein Mitarbeiter wechselt das Gerät, behält aber SIM und Vertrag. Oder ein Vertrag wird gekündigt, die SIM entfernt, aber das Gerät bleibt im Bestand.

## Verwendung

Typische Anwendungsfälle:

- **Vertragsübersicht**: Alle Mobilfunkverträge als eigene Objekte führen und per Report auswerten: Welche Verträge laufen bei welchem Provider, wann laufen sie aus, welche IMEI ist zugeordnet? In Kombination mit der Kategorie Vertragszuweisung und dem Objekttyp Vertrag entsteht eine vollständige Vertragslandschaft.
- **IMEI-Verwaltung**: Die IMEI-Nummer identifiziert ein Mobilfunkgerät weltweit eindeutig. Bei Diebstahl oder Verlust ist sie die entscheidende Information für die Sperrung beim Provider. Durch die zentrale Dokumentation im CMDB ist die IMEI sofort abrufbar – auch wenn das Gerät selbst nicht mehr verfügbar ist.
- **Geräte-Zuordnung nachverfolgen**: Über die Verknüpfung Vertrag → SIM → Gerät lässt sich jederzeit nachvollziehen, welcher Mitarbeiter welchen Vertrag nutzt und welches Gerät damit verbunden ist. Das ist besonders bei Offboarding-Prozessen relevant: Vertrag kündigen oder übertragen, SIM deaktivieren, Gerät einziehen.
- **Kostenzuordnung**: Mobilfunkkosten können über das Vertragsobjekt einer Kostenstelle zugeordnet werden (über die Kategorie [Buchhaltung](accounting.md)). Das ermöglicht eine verursachergerechte Abrechnung der Mobilfunkkosten.

[![Mobilfunkvertrag](../../assets/images/de/grundlagen/kategorien/s-cell-phone-contract.png)](../../assets/images/de/grundlagen/kategorien/s-cell-phone-contract.png)

## Felder

### IMEI-Nummer

Die **International Mobile Equipment Identity** – eine 15-stellige Nummer, die ein Mobilfunkgerät weltweit eindeutig identifiziert, z.B. `353456789012345`. Die IMEI wird vom Gerätehersteller vergeben und ist unabhängig vom Mobilfunkvertrag oder der SIM-Karte. Sie wird hier am Vertragsobjekt dokumentiert, um die Zuordnung zwischen Vertrag und Gerät herzustellen.

!!! tip "IMEI finden"
    Die IMEI steht auf der Originalverpackung des Geräts, im Gerät unter **Einstellungen → Über das Telefon** oder kann durch Eingabe von `*#06#` auf dem Tastenfeld angezeigt werden. Bei eSIM-fähigen Geräten mit Dual-SIM existieren zwei IMEI-Nummern – dokumentiere beide in der Beschreibung, wenn relevant.

### Beschreibung

Freitext für zusätzliche Angaben: Provider-Name, Tarifbezeichnung, Vertragsnummer beim Provider, monatliche Kosten, enthaltenes Datenvolumen, Besonderheiten (z.B. „Roaming EU inklusive", „Nur Daten, keine Telefonie") oder Hinweise zum Vertragsstatus.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATS__CELL_PHONE_CONTRACT` |
| **Typ** | Spezifische Kategorie |
| **Multi-Value** | Nein |
| **Zugeordnet zu** | Mobilfunkvertrag |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **IMEI-Nummer** | `imei_number` | Text |
| **Beschreibung** | `description` | Textfeld (mehrzeilig) |

### API-Beispiele

#### Eintrag erstellen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "object": 1100,
        "category": "C__CATS__CELL_PHONE_CONTRACT",
        "data": {
            "imei_number": "353456789012345",
            "description": "Vodafone Red Business XL, Vertragsnr. VF-2025-00042. 50 GB Datenvolumen, EU-Roaming inkl. Laufzeit bis 2027-03-31."
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
        "object": 1100,
        "category": "C__CATS__CELL_PHONE_CONTRACT"
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
        "object": 1100,
        "category": "C__CATS__CELL_PHONE_CONTRACT",
        "entry": 1,
        "data": {
            "imei_number": "861234567890123",
            "description": "2026-04: Gerätewechsel auf iPhone 16. Neue IMEI dokumentiert. Vertrag unverändert."
        }
    },
    "id": 3
}
```
