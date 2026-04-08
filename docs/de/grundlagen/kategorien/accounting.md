---
title: "Kategorie: Buchhaltung"
description: Dokumentation der Kategorie Buchhaltung in i-doit
icon:
status:
lang: de
---

# Kategorie: Buchhaltung

Die Kategorie **Buchhaltung** erfasst alle kaufmännischen Informationen eines Objekts – von der Inventarnummer über Anschaffungskosten bis hin zu Garantiefristen. Sie ist eine **Single-Value-Kategorie**: Jedes Objekt erhält genau einen Buchhaltungsdatensatz, der sämtliche finanziellen und beschaffungsrelevanten Daten bündelt.

!!! tip "Garantie-Restlaufzeit auf einen Blick"
    i-doit berechnet aus Garantiezeit und Garantiebeginn automatisch das Ablaufdatum und die **verbleibende Restgarantie**. Dieser berechnete Wert lässt sich als Spalte in Objektlisten und Reports einblenden. Ein Report „Garantie abgelaufen" oder „Garantie läuft in 90 Tagen ab" liefert die Grundlage für rechtzeitige Hardware-Refresh-Planung – bevor teure Reparaturen ohne Herstellergarantie anfallen.

## Verwendung

Typische Anwendungsfälle:

- **Inventarisierung und Anlagenbuchhaltung**: Weise jedem Asset eine Inventarnummer zu und verknüpfe es mit einer Kostenstelle. So entsteht eine durchgängige Verbindung zwischen IT-Dokumentation und Finanzbuchhaltung – Wirtschaftsprüfer und Controller erhalten auf Knopfdruck eine vollständige Bestandsliste. Rechnungs- und Bestellnummern verknüpfen das physische Asset mit dem Finanzsystem und schaffen eine lückenlose Nachweiskette für Auditoren.
- **Beschaffungsdokumentation**: Halte Bestellnummer, Bestelldatum, Lieferscheinnummer und Rechnungsnummer lückenlos fest. Bei Reklamationen oder Garantiefällen lässt sich sofort nachvollziehen, wann und wo ein Gerät bestellt, geliefert und bezahlt wurde. Der Beschaffungsweg (Kauf, Leasing oder Miete) beeinflusst dabei nicht nur die bilanzielle Behandlung, sondern auch die End-of-Life-Prozesse: Gekaufte Hardware wird entsorgt oder weiterverkauft, geleaste Hardware muss termingerecht zurückgegeben werden – die [Vertragszuweisung](contract-assignment.md) ergänzt die Details zum Leasing-Vertrag.
- **Kostenauswertung und Budgetplanung**: Über den Report Manager kannst du Anschaffungskosten nach Kostenstelle, Beschaffungsweg oder Zeitraum auswerten. Zusammen mit den laufenden Betriebskosten entsteht ein realistisches Bild der Total Cost of Ownership (TCO) pro Asset oder Standort. Ein typischer Report: „Alle Assets mit Beschaffungsweg Leasing, deren Vertragsende in den nächsten 6 Monaten liegt" – Grundlage für die Budgetplanung im Folgejahr.
- **Garantiemanagement**: Definiere Garantiezeitraum und Startdatum – i-doit berechnet automatisch das Garantieende und zeigt die Restgarantie an. So erkennst du frühzeitig, welche Geräte aus der Garantie fallen und wann Wartungsverträge greifen müssen. Erweiterte Garantien über Serviceverträge gehören in die Kategorie [Vertragszuweisung](contract-assignment.md) – die Buchhaltungs-Kategorie deckt nur die Herstellergarantie ab.
- **Lieferantenmanagement**: Verknüpfe jedes Objekt mit dem Lieferanten als Personen- oder Organisationsobjekt. Reports über die Kategorie zeigen dann z.B. alle Assets eines bestimmten Lieferanten – hilfreich bei Rahmenvertragsverhandlungen oder Rückrufaktionen.
- **Hardware-Refresh planen**: Ein Report, der Garantieablauf, Anschaffungsdatum und Beschaffungsweg kombiniert, liefert eine priorisierte Liste für den nächsten Hardware-Refresh-Zyklus. Geräte mit abgelaufener Garantie und hohem Alter stehen oben – das spart ad-hoc-Recherche und vermeidet Überraschungen im Budget.

[![Buchhaltung](../../assets/images/de/grundlagen/kategorien/accounting.png)](../../assets/images/de/grundlagen/kategorien/accounting.png)

## Felder

### Inventarnummer

Die eindeutige Kennung des Assets in der Anlagenbuchhaltung, z.B. `INV-2024-00451` oder `HW-FRA-003287`. In den meisten Unternehmen wird diese Nummer von der Finanzabteilung vergeben und auf dem Gerät als Barcode- oder QR-Etikett angebracht. Die Inventarnummer ist oft die wichtigste Brücke zwischen i-doit und dem ERP-System – halte sie deshalb konsistent und eindeutig.

### Kostenstelle / Konto

Die Kostenstelle oder das Buchungskonto, dem das Asset zugeordnet ist, z.B. `4711 – IT-Infrastruktur` oder `KST-Marketing`. Als Dialog+-Feld lassen sich eigene Werte ergänzen, die dann allen Objekten zur Auswahl stehen. Die Zuordnung ermöglicht es, IT-Ausgaben verursachergerecht auf Abteilungen oder Projekte umzulegen.

### Kostenträger

Der Kostenträger definiert, welchem Produkt, Projekt oder Auftrag die Kosten zugerechnet werden – im Unterschied zur Kostenstelle, die den Ort der Kostenentstehung beschreibt. Dialog+-Feld mit frei erweiterbaren Werten, z.B. `Projekt Migration 2025` oder `Produkt Cloud-Plattform`.

---

### Bestellung und Lieferung

#### Beschaffungsweg

Gibt an, wie das Asset beschafft wurde: **Kauf**, **Leasing** oder **Miete**. Diese Information ist entscheidend für die bilanzielle Behandlung – gekaufte Assets werden abgeschrieben, geleaste unter Umständen nicht aktiviert. Bei Leasing- und Mietgeräten empfiehlt es sich, zusätzlich die Vertragslaufzeit in der Beschreibung zu vermerken.

#### Bestellnummer

Die interne oder externe Bestellnummer, z.B. `PO-2024-08-1234`. Über dieses Feld lässt sich der Beschaffungsvorgang im Einkaufssystem eindeutig zurückverfolgen. Besonders bei Sammelbestellungen mit mehreren Positionen ist die Bestellnummer das zentrale Verbindungselement.

#### Bestelldatum

Das Datum, an dem die Bestellung ausgelöst wurde. Zusammen mit Lieferdatum und Rechnungsdatum ergibt sich ein vollständiger Zeitstrahl des Beschaffungsprozesses. Bei Reklamationen oder Eskalationen gegenüber dem Lieferanten ist das Bestelldatum oft der entscheidende Referenzpunkt.

#### Lieferant

Der Lieferant oder die Bezugsquelle des Assets – verknüpft über den Objekt-Browser mit einem Personen- oder Organisationsobjekt in i-doit. Durch die Verknüpfung stehen Kontaktdaten, Adresse und Vertragsinformationen des Lieferanten direkt im Kontext des Assets zur Verfügung. Pflege den Lieferanten als eigenes Objekt, um Auswertungen wie „alle Geräte von Lieferant X" zu ermöglichen.

#### Lieferscheinnummer

Die Nummer des Lieferscheins, z.B. `LS-2024-56789`. Relevant für den Wareneingang und die Prüfung, ob alle bestellten Positionen vollständig geliefert wurden. Bei abweichenden Lieferungen oder Teillieferungen dokumentiert dieses Feld die Zuordnung zur konkreten Sendung.

#### Lieferdatum

Das Datum, an dem das Asset tatsächlich eingetroffen ist. Wichtig für die Berechnung von Garantiefristen, wenn der Garantiebeginn auf das Lieferdatum gelegt wird (siehe Feld „Garantiebeginn"). Auch bei SLA-Auswertungen gegenüber Lieferanten ist das Lieferdatum die maßgebliche Kenngröße.

---

### Kosten

#### Anschaffungskosten

Der Netto- oder Bruttopreis des Assets zum Zeitpunkt des Erwerbs. Währungsfeld – i-doit verwendet die systemweit konfigurierte Währung. Trage hier den tatsächlichen Kaufpreis ein, nicht den Listenpreis. Bei Sammelbestellungen den anteiligen Preis pro Gerät angeben. Dieser Wert ist die Grundlage für Abschreibungsberechnungen und TCO-Analysen.

#### Laufende Betriebskosten und Intervall

Die wiederkehrenden Kosten für Betrieb, Wartung oder Lizenzierung des Assets. Das Intervall (monatlich, jährlich etc.) wird im zugehörigen Dialog-Feld separat gewählt. Beispiel: `120,00 EUR` pro `Jahr` für einen Wartungsvertrag. In Kombination mit den Anschaffungskosten lassen sich über Reports die Gesamtkosten eines Assets über seine Lebensdauer berechnen.

#### Rechnungsdatum

Das Datum der Rechnung, z.B. `2024-08-15`. Wird häufig als Bezugspunkt für Zahlungsfristen und Garantiebeginn verwendet. In vielen Unternehmen gilt das Rechnungsdatum als offizielles Aktivierungsdatum in der Anlagenbuchhaltung.

#### Rechnungsnummer

Die Rechnungsnummer des Lieferanten, z.B. `RE-2024-003456`. Ermöglicht die eindeutige Zuordnung zur Rechnung im Buchhaltungssystem und ist bei steuerlichen Prüfungen oder Garantieansprüchen ein unverzichtbarer Nachweis.

---

### Garantie

#### Garantiezeit und Einheit

Die Dauer der Herstellergarantie als Ganzzahl mit zugehöriger Einheit (Monate oder Jahre). Beispiel: `36` Monate oder `3` Jahre. i-doit berechnet aus Garantiezeit und Garantiebeginn automatisch das Ablaufdatum und die verbleibende Restgarantie. Trage hier die Standardgarantie des Herstellers ein – erweiterte Garantien über Serviceverträge gehören in die Kategorie Vertragszuweisung.

#### Garantiebeginn

Bestimmt, ab welchem Datum die Garantie läuft: **ab Rechnungsdatum** oder **ab Lieferdatum**. Die Wahl hängt von den Garantiebedingungen des Herstellers ab – viele Hersteller rechnen ab Rechnungsdatum, einige ab Lieferdatum. Das richtige Startdatum ist entscheidend für die korrekte Berechnung des Garantieendes.

---

### Beschreibung

Freitextfeld für ergänzende Informationen, die in keinem der strukturierten Felder Platz finden: Hinweise zu Sonderkonditionen, Leasingvertragsnummern, interne Vermerke zur Abschreibung oder Notizen zum Beschaffungsvorgang. Nutze dieses Feld sparsam – strukturierte Daten gehören in die dafür vorgesehenen Felder, damit sie in Reports auswertbar bleiben.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__ACCOUNTING` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Nein |
| **Zugeordnet zu** | Alle Objekttypen (global) |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Inventarnummer** | `inventory_no` | Text |
| **Kostenstelle / Konto** | `account` | Dialog+ (erweiterbare Auswahl) |
| **Rechnungsdatum** | `acquirementdate` | Datum |
| **Lieferant** | `contact` | Objekt-Browser (Verknüpfung) |
| **Anschaffungskosten** | `price` | Währung |
| **Laufende Betriebskosten** | `operation_expense` | Währung |
| **Betriebskosten-Intervall** | `operation_expense_interval` | Dialog (Auswahl) |
| **Kostenträger** | `cost_unit` | Dialog+ (erweiterbare Auswahl) |
| **Lieferscheinnummer** | `delivery_note_no` | Text |
| **Beschaffungsweg** | `procurement` | Dialog+ (erweiterbare Auswahl) |
| **Lieferdatum** | `delivery_date` | Datum |
| **Rechnungsnummer** | `invoice_no` | Text |
| **Bestellnummer** | `order_no` | Text |
| **Bestelldatum** | `order_date` | Datum |
| **Garantiezeit** | `guarantee_period` | Ganzzahl |
| **Garantiezeit-Einheit** | `guarantee_period_unit` | Dialog (Auswahl) |
| **Garantiebeginn** | `guarantee_period_base` | Dialog (Auswahl) |
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
        "category": "C__CATG__ACCOUNTING",
        "data": {
            "inventory_no": "INV-2024-00451",
            "account": "4711 – IT-Infrastruktur",
            "acquirementdate": "2024-08-15",
            "contact": 456,
            "price": 2499.00,
            "operation_expense": 120.00,
            "operation_expense_interval": 2,
            "cost_unit": "Projekt Migration 2025",
            "procurement": "Kauf",
            "order_no": "PO-2024-08-1234",
            "order_date": "2024-08-01",
            "delivery_date": "2024-08-12",
            "delivery_note_no": "LS-2024-56789",
            "invoice_no": "RE-2024-003456",
            "guarantee_period": 36,
            "guarantee_period_unit": 1,
            "guarantee_period_base": 1,
            "description": "Standardgarantie 36 Monate ab Rechnungsdatum."
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
        "object": 123,
        "category": "C__CATG__ACCOUNTING"
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
        "category": "C__CATG__ACCOUNTING",
        "entry": 1,
        "data": {
            "price": 2299.00,
            "description": "Preis korrigiert nach Gutschrift vom 2024-09-01."
        }
    },
    "id": 3
}
```
