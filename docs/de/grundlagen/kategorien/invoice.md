---
title: "Kategorie: Rechnung"
description: Dokumentation der Kategorie Rechnung in i-doit
icon:
status:
lang: de
---

# Kategorie: Rechnung

Die Kategorie **Rechnung** dokumentiert Rechnungen und finanzielle Belege, die einem Objekt zugeordnet sind. Sie ist eine **Multi-Value-Kategorie** – pro Objekt können beliebig viele Rechnungen erfasst werden, z.B. die Anschaffungsrechnung, Wartungsrechnungen und Nachrüstungskosten.

## Verwendung

Typische Anwendungsfälle:

- **Anschaffungskosten dokumentieren**: Hinterlege die Kaufrechnung direkt am Server, Switch oder Client. In Kombination mit der Kategorie [Buchhaltung](accounting.md) – die Inventarnummer, Kostenstelle und Anschaffungsdatum enthält – entsteht ein vollständiges finanzielles Profil des Assets.
- **Wartungs- und Reparaturkosten nachverfolgen**: Jede Wartungsrechnung als eigener Eintrag erfasst, ergibt über die Zeit ein klares Bild der Total Cost of Ownership (TCO). Ein Report über alle Rechnungen eines Objekttyps zeigt, welche Gerätemodelle die höchsten laufenden Kosten verursachen.
- **Budgetplanung und Kostenauswertung**: Über den Report Manager lassen sich Rechnungen nach Zeitraum, Betrag und Objekttyp auswerten. Typische Fragen: „Wie viel haben wir im letzten Quartal für Server-Hardware ausgegeben?" oder „Welche Objekte haben Rechnungen über 10.000 EUR?"
- **Steuerliche Dokumentation**: Die Felder für Rechnungsdatum, Bearbeitungsdatum und Übergabe an die Finanzbuchhaltung unterstützen die steuerliche Nachverfolgung und helfen, den Überblick über den Abrechnungsstatus zu behalten.

!!! tip "Rechnung vs. Buchhaltung"
    Die Kategorie **Rechnung** erfasst einzelne Rechnungsdokumente mit Betrag und Datum. Die Kategorie [Buchhaltung](accounting.md) hingegen enthält die kaufmännischen Stammdaten des Objekts (Inventarnummer, Kostenstelle, Anschaffungsdatum, Garantiezeitraum). Beide Kategorien ergänzen sich: Die Buchhaltung liefert den Rahmen, die Rechnungen die konkreten Belege.

[![Rechnung](../../assets/images/de/grundlagen/kategorien/invoice.png)](../../assets/images/de/grundlagen/kategorien/invoice.png)

## Felder

### Bezeichnung

Der Titel oder die Rechnungsnummer, z.B. `RE-2026-04521` oder `Wartungsrechnung Q1/2026`. Dieser Wert erscheint in der Listenansicht und sollte so gewählt werden, dass die Rechnung auf Anhieb identifizierbar ist — idealerweise mit der Rechnungsnummer des Lieferanten.

### Rechnungsdatum

Das Datum der Rechnungsstellung. Dieses Feld ist die Grundlage für zeitbasierte Auswertungen im Report Manager, z.B. „alle Rechnungen der letzten 12 Monate".

### Betrag

Der Rechnungsbetrag als Dezimalzahl. Die Währung wird nicht separat erfasst — es empfiehlt sich, innerhalb der CMDB eine einheitliche Währung zu verwenden und diese ggf. in der Beschreibung zu dokumentieren. Bei Netto- vs. Bruttobeträgen sollte ebenfalls eine einheitliche Konvention gelten.

### Bearbeitungsdatum

Das Datum, an dem die Rechnung bearbeitet oder zur Zahlung freigegeben wurde. Dieses Feld ermöglicht die Nachverfolgung des Bearbeitungsstatus: Liegt zwischen Rechnungsdatum und Bearbeitungsdatum eine große Zeitspanne, deutet das auf Verzögerungen im Prozess hin.

### Übergabe Finanzbuchhaltung

Das Datum, an dem die Rechnung an die Finanzbuchhaltung übergeben wurde. In vielen Unternehmen ist die IT für die sachliche Prüfung zuständig, während die Buchhaltung die Zahlung auslöst. Dieses Feld dokumentiert den Übergang.

### Abgerechnet

Gibt an, ob die Rechnung bereits bezahlt wurde (`Ja` oder `Nein`). Über einen Report lassen sich so alle offenen Rechnungen schnell identifizieren — hilfreich bei der monatlichen Abstimmung mit der Buchhaltung.

### Beschreibung

Freitext für ergänzende Informationen: Lieferant, Bestellnummer, Zahlungsbedingungen, Skonto-Fristen oder Anmerkungen zur sachlichen Prüfung.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__INVOICE` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Server, Blade Server, Switch u.a. |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Bezeichnung** | `denotation` | Text |
| **Rechnungsdatum** | `date` | Datum |
| **Betrag** | `amount` | Dezimalzahl (Währung) |
| **Bearbeitungsdatum** | `edited` | Datum |
| **Übergabe Finanzbuchhaltung** | `financial_accounting_delivery` | Datum |
| **Abgerechnet** | `charged` | Dialog (Ja/Nein) |
| **Beschreibung** | `description` | Textfeld (mehrzeilig) |

### API-Beispiele

#### Eintrag erstellen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "object": 1042,
        "category": "C__CATG__INVOICE",
        "data": {
            "denotation": "RE-2026-04521",
            "date": "2026-03-15",
            "amount": 4250.00,
            "edited": "2026-03-18",
            "financial_accounting_delivery": "2026-03-20",
            "charged": 1,
            "description": "Wartungsvertrag Dell ProSupport, Laufzeit 12 Monate, Bestellnr. PO-2026-112"
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
        "object": 1042,
        "category": "C__CATG__INVOICE"
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
        "object": 1042,
        "category": "C__CATG__INVOICE",
        "entry": 5,
        "data": {
            "charged": 1,
            "description": "Zahlung erfolgt am 2026-04-02, Skonto 2% gezogen"
        }
    },
    "id": 3
}
```
