---
title: "Kategorie: SIM"
description: Dokumentation der Kategorie SIM in i-doit — Vertragsdaten und Rufnummer einer SIM-Karte
icon:
status:
lang: de
---

# Kategorie: SIM

Die Kategorie **SIM** dokumentiert die Vertrags- und Tarifinformationen einer SIM-Karte. Sie ist eine **Single-Value-Kategorie** auf dem Objekttyp **SIM-Karte** und bildet zusammen mit der Kategorie [SIM-Karte](cards.md) (Kartendaten, PIN/PUK) das vollständige Profil einer SIM.

!!! info "Zusammenspiel der drei SIM-Kategorien"
    | Kategorie | Auf welchem Objekt? | Inhalt |
    |---|---|---|
    | **SIM** (diese Kategorie) | SIM-Karten-Objekt | Vertragsdaten: Netzbetreiber, Tarif, Rufnummer, Laufzeit |
    | [SIM-Karte](cards.md) | SIM-Karten-Objekt | Kartendaten: Kartennummer, PIN, PUK, Seriennummer |
    | [Zugewiesene SIM-Karten](assigned-sim-cards.md) | Gerät (Handy, Tablet, Router) | Verknüpfung: welche SIMs stecken in diesem Gerät? |

    Zusätzlich lässt sich über die [Vertragszuweisung](contract-assignment.md) am SIM-Objekt der Mobilfunkvertrag mit Laufzeit, Kündigungsfrist und Kosten dokumentieren — so entsteht eine durchgängige Kette vom Vertrag über die SIM bis zum Endgerät.

## Verwendung

Typische Anwendungsfälle:

- **Mobilfunk-Inventar**: Erfasse Netzbetreiber, Tarif und Rufnummer jeder SIM-Karte. Per Report lässt sich jederzeit auswerten, wie viele SIM-Karten pro Netzbetreiber im Einsatz sind — hilfreich für Rahmenvertragsverhandlungen.
- **Vertragslaufzeiten überwachen**: Start- und Enddatum des SIM-Vertrags dokumentieren. Über den Report Manager oder die Benachrichtigungsfunktion lassen sich ablaufende Verträge frühzeitig erkennen, bevor sie sich automatisch verlängern.
- **Kündigungsfristen einhalten**: Das Feld "Datum für Benachrichtigung" ermöglicht automatische Erinnerungen vor Vertragsende — so verpasst du keine Kündigungsfrist.
- **Kostenzuordnung**: Über den Tarif und die Zuordnung zum Gerät (und damit zur Person/Abteilung) lassen sich Mobilfunkkosten den richtigen Kostenstellen zuordnen.



## Felder

### Typ

Der SIM-Kartentyp: Standard-SIM, Micro-SIM, Nano-SIM oder eSIM. Relevant für die Kompatibilität mit dem Endgerät — moderne Smartphones nutzen Nano-SIM oder eSIM, ältere Geräte und IoT-Router oft noch Standard- oder Micro-SIM.

### Netzbetreiber

Der Mobilfunkanbieter, z.B. `Telekom`, `Vodafone`, `o2`, `1&1`. Dialog+-Feld — eigene Anbieter lassen sich ergänzen. Wichtig für die Auswertung: wie viele SIMs pro Provider, wie verteilen sich die Kosten?

### Tarif

Der gebuchte Mobilfunktarif, z.B. `Business Mobil L`, `Red Business Prime`. In Kombination mit dem Netzbetreiber ergibt sich ein vollständiges Bild der Mobilfunkkosten. Dialog+-Feld — eigene Tarife können hinzugefügt werden.

### Startdatum

Der Beginn des SIM-Vertrags bzw. der Aktivierung. Zusammen mit dem Enddatum ergibt sich die Vertragslaufzeit. Bei Prepaid-SIMs das Aktivierungsdatum.

### Enddatum

Das Ende der Vertragslaufzeit oder die nächste Verlängerungsmöglichkeit. Über den Report Manager kannst du alle SIMs auflisten, deren Vertrag in den nächsten 90 Tagen ausläuft — die Grundlage für rechtzeitige Kündigungen oder Vertragsverlängerungen.

### Datum für Benachrichtigung

Ein frei wählbares Datum, an dem i-doit eine Erinnerung auslösen soll — typischerweise einige Wochen vor dem Vertragsende, damit genug Zeit für eine Kündigung oder Neuverhandlung bleibt. Voraussetzung: die [Benachrichtigungen](../../auswertungen/benachrichtigungen.md) müssen konfiguriert sein.

### Rufnummer

Die Telefonnummer der SIM-Karte im internationalen Format, z.B. `+49 170 1234567`. Über die Suche in i-doit lässt sich so schnell herausfinden, zu welchem Gerät und welcher Person eine bestimmte Rufnummer gehört.

### Kundennummer

Die Kundennummer beim Mobilfunkanbieter. Nützlich für Support-Anfragen und Vertragsverwaltung beim Provider.

### Beschreibung

Freitext für ergänzende Informationen: besondere Tarifkonditionen, Roaming-Optionen, Data-Caps, oder Hinweise auf den zugehörigen Rahmenvertrag.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__SIM` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Nein |
| **Zugeordnet zu** | SIM-Karte |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Typ** | `type` | Dialog (Auswahl) |
| **Netzbetreiber** | `network_provider` | Dialog+ (erweiterbare Auswahl) |
| **Tarif** | `telephone_rate` | Dialog+ (erweiterbare Auswahl) |
| **Startdatum** | `start` | Datum |
| **Enddatum** | `end` | Datum |
| **Datum für Benachrichtigung** | `threshold_date` | Datum |
| **Rufnummer** | `phone_no` | Text |
| **Kundennummer** | `client_no` | Text |
| **Beschreibung** | `description` | Textfeld (mehrzeilig) |

### API-Beispiele

#### Eintrag erstellen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "object": 794,
        "category": "C__CATG__SIM",
        "data": {
            "type": "Nano-SIM",
            "network_provider": "Telekom",
            "telephone_rate": "Business Mobil L",
            "start": "2024-07-01",
            "end": "2026-06-30",
            "threshold_date": "2026-04-01",
            "phone_no": "+49 170 9876543",
            "client_no": "KD-2024-BHB-0815",
            "description": "Rahmenvertrag RV-2023-TMO, 24 Monate, EU-Roaming inklusive"
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
        "objID": 794,
        "category": "C__CATG__SIM"
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
        "object": 794,
        "category": "C__CATG__SIM",
        "data": {
            "end": "2028-06-30",
            "telephone_rate": "Business Mobil XL",
            "description": "Vertragsverlängerung 2026-05, Upgrade auf XL-Tarif mit 50 GB"
        }
    },
    "id": 3
}
```
