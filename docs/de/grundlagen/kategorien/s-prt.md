---
title: "Kategorie: Drucker"
description: Dokumentation der Kategorie Drucker in i-doit
icon:
status:
lang: de
---

# Kategorie: Drucker

Die Kategorie **Drucker** dokumentiert die druckerspezifischen technischen Eigenschaften eines Drucker-Objekts. Sie ist eine **spezifische Kategorie**, die ausschließlich für Objekte vom Typ Drucker verfügbar ist, und erfasst die wesentlichen Merkmale wie Druckverfahren, Farbfähigkeit, Duplexdruck, Emulation und Papierformat.

## Verwendung

Typische Anwendungsfälle:

- **Drucker-Inventar vervollständigen**: Erfasse die technischen Eigenschaften jedes Druckers im Unternehmen. Zusammen mit den globalen Kategorien (Modell, Seriennummer, Standort, IP-Adresse) entsteht ein vollständiges Geräteprofil, das für Support, Wartung und Beschaffung unverzichtbar ist.
- **Beschaffungsplanung und Standardisierung**: Über den Report Manager lässt sich auswerten, wie viele Laserdrucker vs. Tintenstrahldrucker im Einsatz sind, welche Modelle Farbdruck oder Duplexdruck unterstützen und welche Papierformate abgedeckt werden. Diese Daten bilden die Grundlage für Standardisierungsentscheidungen und Rahmenverträge.
- **Support-Anfragen effizient bearbeiten**: Wenn ein Benutzer ein Druckproblem meldet, liefert die Kategorie dem Helpdesk sofort die Kernfragen: Ist es ein Laser- oder Tintenstrahldrucker? Unterstützt er Farbe? Welche Emulation ist konfiguriert? Das beschleunigt die Fehlerdiagnose erheblich.
- **Lifecycle-Management**: Beim Austausch eines Druckers werden die Daten des alten Geräts archiviert und das neue Gerät mit aktuellen Werten erfasst. Reports zeigen, welche Drucker veraltet sind (z.B. kein Duplexdruck) und als Nächstes ersetzt werden sollten.

[![Drucker](../../assets/images/de/grundlagen/kategorien/s-prt.png)](../../assets/images/de/grundlagen/kategorien/s-prt.png)

## Felder

### Typ

Das Druckverfahren, z.B. `Laser`, `Tintenstrahl`, `Nadel`, `Thermo` oder `LED`. Dialog+-Feld -- eigene Werte lassen sich bei Bedarf ergänzen. Dieses Feld ist das wichtigste Unterscheidungsmerkmal im Drucker-Inventar und bestimmt maßgeblich die Verbrauchsmaterialplanung (Toner vs. Tintenpatronen).

### Farbe

Gibt an, ob der Drucker Farbdruck unterstützt. Dialog-Feld mit den Optionen `Ja` und `Nein`. Ein Report „Alle Farbdrucker" hilft bei der Planung der Toner-Bevorratung, da Farbdrucker in der Regel vier statt einem Toner benötigen.

### Duplex

Gibt an, ob der Drucker automatischen beidseitigen Druck (Duplexdruck) unterstützt. Dialog-Feld mit den Optionen `Ja` und `Nein`. In Umgebungen mit hohem Druckaufkommen spart Duplexdruck erheblich Papier -- die Information hilft bei der Identifikation von Geräten, die gegen duplexfähige Modelle ausgetauscht werden sollten.

### Emulation

Die unterstützte Druckersprache bzw. Emulation, z.B. `PCL 6`, `PostScript 3`, `ESC/P` oder `ZPL` (für Etikettendrucker). Dialog+-Feld -- eigene Werte lassen sich ergänzen. Die Emulation ist relevant für die Treiberauswahl und die Kompatibilität mit Druckservern und Anwendungen.

### Papierformat

Das unterstützte Standard-Papierformat, z.B. `A4`, `A3`, `Letter` oder `Endlos`. Dialog+-Feld. Bei Druckern mit mehreren Papierfächern bezieht sich dieser Wert auf das maximale Format. Ergänzende Angaben zu weiteren Formaten können im Beschreibungsfeld hinterlegt werden.

### Beschreibung

Freitextfeld für zusätzliche Angaben: Druckgeschwindigkeit (Seiten/Minute), Auflösung (dpi), Schnittstellen (USB, Ethernet, WLAN), Papierfach-Kapazität, besondere Funktionen (Scannen, Kopieren, Faxen bei Multifunktionsgeräten) oder Hinweise zur Konfiguration.

!!! tip "Multifunktionsgeräte dokumentieren"
    Multifunktionsgeräte (Drucker/Scanner/Kopierer) werden in i-doit typischerweise als Drucker-Objekt angelegt. Funktionen wie Scannen und Kopieren können im Beschreibungsfeld dokumentiert werden. Alternativ lässt sich ein eigener Objekttyp mit zusätzlichen benutzerdefinierten Kategorien anlegen, wenn eine detailliertere Erfassung gewünscht ist.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATS__PRT` |
| **Typ** | Spezifische Kategorie |
| **Multi-Value** | Nein |
| **Zugeordnet zu** | Drucker (Printer) |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Typ** | `type` | Dialog+ (erweiterbare Auswahl) |
| **Farbe** | `is_color` | Dialog (Auswahl) |
| **Duplex** | `is_duplex` | Dialog (Auswahl) |
| **Emulation** | `emulation` | Dialog+ (erweiterbare Auswahl) |
| **Papierformat** | `paper_format` | Dialog+ (erweiterbare Auswahl) |
| **Beschreibung** | `description` | Textfeld (mehrzeilig) |

### API-Beispiele

#### Eintrag erstellen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "object": 920,
        "category": "C__CATS__PRT",
        "data": {
            "type": "Laser",
            "is_color": "Ja",
            "is_duplex": "Ja",
            "emulation": "PCL 6",
            "paper_format": "A4",
            "description": "HP LaserJet Pro M479fdw, 28 S/Min, 600x600 dpi, USB + Ethernet + WLAN, Scan/Copy/Fax"
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
        "object": 920,
        "category": "C__CATS__PRT"
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
        "object": 920,
        "category": "C__CATS__PRT",
        "entry": 1,
        "data": {
            "emulation": "PostScript 3",
            "description": "Emulation auf PostScript 3 umgestellt wegen Kompatibilität mit neuem Druckserver"
        }
    },
    "id": 3
}
```
