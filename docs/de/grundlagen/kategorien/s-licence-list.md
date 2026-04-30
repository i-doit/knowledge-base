---
title: "Kategorie: Lizenzschlüssel"
description: Dokumentation der Kategorie Lizenzschlüssel in i-doit
icon:
status:
lang: de
---

# Kategorie: Lizenzschlüssel

Die Kategorie **Lizenzschlüssel** gehört zu Objekten vom Typ **Lizenzen** und dokumentiert die einzelnen Lizenzschlüssel innerhalb eines Lizenzobjekts. Sie ist eine **Multi-Value-Kategorie** – pro Lizenzobjekt können beliebig viele Schlüssel hinterlegt werden, z.B. wenn ein Volumenlizenzvertrag mehrere Einzelschlüssel für verschiedene Standorte oder Abteilungen enthält.

Das Zusammenspiel funktioniert so: Das Lizenzobjekt selbst repräsentiert das Lizenzprodukt oder den Lizenzvertrag (z.B. „Microsoft Office 2021 VL"). Die Kategorie Lizenzschlüssel enthält die konkreten Keys mit jeweils eigener Menge und Laufzeit. In der Kategorie [Softwarezuweisung](application.md) wird dann auf dem Zielgerät die Software zugewiesen und der passende Lizenzschlüssel zugeordnet – dadurch zählt i-doit automatisch, wie viele Lizenzen verbraucht sind.

!!! info "Lizenzmanagement in i-doit"
    i-doit bildet Lizenzmanagement über drei Ebenen ab: Das **Lizenzobjekt** (Objekttyp Lizenzen) als Container, die Kategorie **Lizenzschlüssel** für die konkreten Keys und Mengen, und die [Softwarezuweisung](application.md) auf den Endgeräten für die tatsächliche Nutzung. Nur wenn alle drei Ebenen konsistent gepflegt werden, liefern Lizenz-Reports verlässliche Ergebnisse.

!!! warning "Über- und Unterlizenzierung erkennen"
    Die Felder **Anzahl** und **In Benutzung** sind der Schlüssel zur Lizenzcompliance. Wenn „In Benutzung" den Wert von „Anzahl" übersteigt, liegt eine Überlizenzierung vor – ein potenzielles Compliance-Risiko bei Software-Audits. Reports über diese Kategorie liefern die Grundlage für den Einkauf und die Nachverfolgung.

## Verwendung

Typische Anwendungsfälle:

- **Lizenzcompliance**: Über das Verhältnis von „Anzahl" zu „In Benutzung" erkennt man auf einen Blick, ob genügend Lizenzen vorhanden sind oder ob nachgekauft werden muss. Reports lassen sich so aufbauen, dass sie Über- und Unterlizenzierung pro Produkt ausweisen.
- **Software-Audit-Vorbereitung**: Wenn ein Hersteller ein Lizenz-Audit ankündigt, liefert diese Kategorie die vollständige Übersicht: Welche Keys existieren, wie viele Seats sind lizenziert, wie viele tatsächlich in Benutzung? In Kombination mit der [Softwarezuweisung](application.md) ergibt sich ein prüfbarer Nachweis.
- **Laufzeitüberwachung**: Über die Felder Start- und Ablaufdatum lassen sich ablaufende Lizenzen per Report identifizieren. Ein Report „Alle Lizenzen mit Ablaufdatum < 90 Tage" gibt dem Einkauf rechtzeitig ein Signal zur Verlängerung.
- **Kostenübersicht**: Stückpreis und Gesamtkosten pro Schlüssel ermöglichen eine Kostenauswertung über alle Lizenzobjekte hinweg. In Kombination mit der Kategorie [Vertragszuweisung](contract-assignment.md) lässt sich die Brücke zum zugehörigen Wartungsvertrag schlagen.
- **Mehrere Schlüssel pro Produkt**: Volumenlizenzverträge enthalten häufig mehrere Keys – einen pro Standort, pro Abteilung oder pro Aktivierungspool. Jeder Key wird als eigener Eintrag mit eigener Menge gepflegt, sodass die Zuordnung und Auswertung granular bleibt.

[![Lizenzschlüssel](../../assets/images/de/grundlagen/kategorien/s-licence-list.png)](../../assets/images/de/grundlagen/kategorien/s-licence-list.png)

## Felder

### Schlüssel (Key)

Der eigentliche Lizenzschlüssel oder Product-Key, z.B. `XXXXX-XXXXX-XXXXX-XXXXX-XXXXX`. Dieses Feld dient der Dokumentation – i-doit validiert das Format nicht. Bei Volumenlizenzen, die keinen individuellen Key haben, kann hier auch eine Vertragsnummer oder KMS-Referenz eingetragen werden.

### Seriennummer (Serial)

Eine optionale Seriennummer, die den Schlüssel ergänzt. Manche Hersteller verwenden neben dem Product-Key eine separate Seriennummer für Support-Portale oder Aktivierung. Freitext ohne Formatvalidierung.

### Lizenztyp (License Type)

Klassifiziert die Art der Lizenz: Einzellizenz, Volumenlizenz, Subscription, OEM usw. Dialog-Feld – die verfügbaren Werte können in der i-doit-Verwaltung angepasst werden.

### Anzahl (Amount)

Die Gesamtzahl der mit diesem Schlüssel lizenzierten Installationen bzw. Seats. Bei einer Volumenlizenz mit 50 Seats steht hier `50`. Dieser Wert ist die Obergrenze für die Zuordnung über die [Softwarezuweisung](application.md).

### In Benutzung (Licenses in Use)

Die Anzahl der tatsächlich zugewiesenen Lizenzen. Dieser Wert wird automatisch berechnet, wenn Softwarezuweisungen auf Endgeräten diesen Lizenzschlüssel referenzieren. Übersteigt der Wert die Anzahl, signalisiert i-doit eine Überlizenzierung.

### Freie Lizenzen (Licenses Free)

Berechnetes Feld: Anzahl minus In Benutzung. Zeigt die noch verfügbaren Seats an. Ein negativer Wert weist auf Überlizenzierung hin.

### Startdatum (Start Date)

Das Datum, ab dem die Lizenz gültig ist. Relevant für Subscriptions und zeitlich begrenzte Lizenzen.

### Ablaufdatum (Expiration Date)

Das Datum, an dem die Lizenz abläuft. Besonders wichtig für Subscription-Lizenzen, Wartungsverträge und zeitlich befristete Testlizenzen. Über Reports lassen sich bald ablaufende Lizenzen identifizieren.

### Stückpreis (Price Per Unit)

Der Preis pro Lizenz-Seat. Wird als Währungswert gespeichert.

### Gesamtkosten (Total Costs)

Die Gesamtkosten für diesen Lizenzschlüssel. Kann manuell eingetragen oder aus Stückpreis und Anzahl berechnet werden.

### Beschreibung

Freitext für zusätzliche Angaben: Lizenzmodell, Aktivierungsbedingungen, Ansprechpartner beim Hersteller, Hinweise zur Verlängerung.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATS__LICENCE_LIST` |
| **Typ** | Spezifische Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Lizenzen (LICENCE) |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Schlüssel** | `key` | Text |
| **Seriennummer** | `serial` | Text |
| **Lizenztyp** | `type` | Dialog (Auswahl) |
| **Anzahl** | `amount` | Ganzzahl |
| **In Benutzung** | `used_licences` | Ganzzahl |
| **Freie Lizenzen** | `lic_not_in_use` | Ganzzahl |
| **Startdatum** | `start` | Datum |
| **Ablaufdatum** | `expire` | Datum |
| **Stückpreis** | `cost` | Währung |
| **Gesamtkosten** | `overall_costs` | Währung |
| **Beschreibung** | `description` | Textfeld (mehrzeilig) |

### API-Beispiele

#### Eintrag erstellen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "object": 123,
        "category": "C__CATS__LICENCE_LIST",
        "data": {
            "key": "XXXXX-XXXXX-XXXXX-XXXXX-XXXXX",
            "serial": "SN-2024-00815",
            "type": "Volumenlizenz",
            "amount": 50,
            "start": "2024-01-01",
            "expire": "2026-12-31",
            "cost": 89.00,
            "description": "Microsoft 365 E3, 50 Seats, Standort Berlin"
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
        "objID": 123,
        "category": "C__CATS__LICENCE_LIST"
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
        "object": 123,
        "category": "C__CATS__LICENCE_LIST",
        "entry": 7,
        "data": {
            "amount": 75,
            "expire": "2027-12-31",
            "description": "Aufstockung 2026-04: 25 zusätzliche Seats für Standort München"
        }
    },
    "id": 3
}
```
