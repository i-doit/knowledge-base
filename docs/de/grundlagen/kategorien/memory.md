---
title: "Kategorie: Speicher"
description: Dokumentation der Kategorie Speicher in i-doit
icon:
status:
lang: de
---

# Kategorie: Speicher

Die Kategorie **Speicher** dokumentiert die verbauten Arbeitsspeicher-Module (RAM) eines Objekts. Sie ist eine **Multi-Value-Kategorie** – pro Objekt können beliebig viele Einträge angelegt werden, z.B. wenn ein Server mit mehreren unterschiedlichen DIMM-Modulen bestückt ist. Die Gesamtkapazität aller Einträge wird von i-doit automatisch berechnet — du siehst also auf einen Blick, wie viel RAM insgesamt verbaut ist.

!!! tip "JDisc Discovery befüllt diese Kategorie automatisch"
    Beim JDisc-Import werden Anzahl, Kapazität, Hersteller und Speichertyp der erkannten Module direkt übernommen. In den meisten Umgebungen muss diese Kategorie nicht manuell gepflegt werden — der erste Scan liefert ein vollständiges Bild der Speicherbestückung.

## Verwendung

Typische Anwendungsfälle:

- **Hardware-Inventar vervollständigen**: Erfasse Hersteller, Modulbezeichnung, Speichertyp und Kapazität jedes RAM-Moduls. Zusammen mit den Kategorien [CPU](cpu.md), [Laufwerk](drive.md) und [Modell](model.md) entsteht ein vollständiges Hardware-Profil.
- **Kapazitätsplanung**: Über den Report Manager lässt sich gezielt auswerten, welche Server weniger als eine bestimmte RAM-Kapazität verbaut haben — z.B. „alle Server mit weniger als 64 GB RAM". Das ist der Ausgangspunkt für Aufrüstungsprojekte und die Planung neuer Systeme. In Virtualisierungsumgebungen ist der verfügbare RAM oft der limitierende Faktor für die Anzahl der VMs.
- **Speicher-Aufrüstung dokumentieren**: Beim Austausch oder Ausbau von RAM-Modulen den alten Eintrag archivieren und einen neuen anlegen. Die Änderungshistorie bleibt so lückenlos erhalten — bei vier neuen Modulen reicht es, die Anzahl im bestehenden Eintrag zu erhöhen oder einen zweiten Eintrag für den neuen Modultyp anzulegen.
- **Gewichtsplanung und Rack-Belastung**: Vollbestückte Server sind schwerer als halb bestückte. Wer die Speicherbestückung kennt, kann zusammen mit der Kategorie [Formfaktor](formfactor.md) das Gewicht pro Gerät realistischer einschätzen — relevant für die Tragfähigkeit von Racks und Doppelböden.
- **Standardisierung prüfen**: Durch Auswertung der Speichertypen und Hersteller lässt sich schnell erkennen, ob die eingesetzte Hardware den Unternehmensstandards entspricht. Mischbestückungen (z.B. DDR4 neben DDR5) fallen in Reports sofort auf.

[![Speicher](../../assets/images/de/grundlagen/kategorien/memory.png)](../../assets/images/de/grundlagen/kategorien/memory.png)

## Felder

### Anzahl

Die Anzahl der gleichartigen Speichermodule, die dieser Eintrag beschreibt. Beispiel: `4` für vier identische 32-GB-DIMMs. Die Gesamtkapazität wird aus Anzahl und Kapazität pro Modul automatisch berechnet. Bei einer Aufrüstung kannst du entweder die Anzahl im bestehenden Eintrag erhöhen (bei identischen Modulen) oder einen neuen Eintrag für den zusätzlichen Modultyp anlegen.

### Modulbezeichnung

Der Name oder die Produktbezeichnung des Speichermoduls, z.B. `Samsung M393A4K40EB3-CWE` oder `Kingston KSM32RD4/32HDR`. Dieser Wert erscheint in der Listenansicht der Kategorie und in Reports. Dialog+-Feld – eigene Werte lassen sich bei Bedarf ergänzen. Beim JDisc-Import wird die Modulbezeichnung direkt aus den Hardware-Daten übernommen.

### Hersteller

Der Hersteller des Speichermoduls, typischerweise `Samsung`, `Kingston`, `Micron` oder `SK Hynix`. Dialog+-Feld – eigene Werte lassen sich bei Bedarf ergänzen. Über den Report Manager lässt sich auswerten, welche Hersteller in der Umgebung vertreten sind — hilfreich für Standardisierung und Nachbestellungen.

### Speichertyp

Die technische Spezifikation des Speichers, z.B. `DDR4 ECC Registered`, `DDR5` oder `DDR4 SODIMM`. Dieses Feld ist entscheidend für Kompatibilitätsprüfungen: Nicht jedes Mainboard unterstützt jeden Speichertyp, und eine Mischbestückung von DDR4 und DDR5 ist physisch nicht möglich. Dialog+-Feld – eigene Werte lassen sich bei Bedarf ergänzen. In Reports hilft dieses Feld dabei, Geräte mit veraltetem Speicherstandard zu identifizieren.

### Gesamtkapazität

Die Gesamtkapazität aller Module dieses Eintrags. Wird von i-doit automatisch aus **Anzahl** und **Kapazität** berechnet (Anzahl × Kapazität). Bei 4 Modulen mit je 32 GB ergibt sich eine Gesamtkapazität von 128 GB. **Dieses Feld ist nicht manuell editierbar** — es aktualisiert sich automatisch, wenn Anzahl oder Kapazität geändert werden. Für die Kapazitätsplanung ist dieser Wert der zentrale Ausgangspunkt: Ein Report „alle Server mit Gesamtkapazität < 64 GB" liefert sofort die Kandidaten für eine Aufrüstung.

### Kapazität

Die Kapazität eines einzelnen Speichermoduls als Dezimalzahl, z.B. `32` bei einem 32-GB-DIMM. Die zugehörige Einheit wird im Feld **Einheit** festgelegt. Achte darauf, hier die Kapazität *pro Modul* einzutragen, nicht die Gesamtkapazität — die berechnet i-doit automatisch.

### Einheit

Die Maßeinheit für die Kapazitätsangabe: `MB`, `GB` oder `TB`. Für aktuelle Server-Hardware ist `GB` der übliche Wert. Wichtig ist, innerhalb der CMDB einheitlich zu bleiben — wenn manche Einträge in MB und andere in GB erfasst sind, werden Reports ungenau.

### Beschreibung

Freitext für zusätzliche Angaben: Geschwindigkeit (z.B. 3200 MHz), Rank-Konfiguration (Single/Dual/Quad Rank), Slot-Belegung (z.B. „A1–A4 bestückt, B1–B4 frei"), ECC-Fähigkeit oder Besonderheiten in der Konfiguration. Gerade die Slot-Belegung ist bei einer geplanten Aufrüstung Gold wert — sie zeigt sofort, ob noch freie Slots vorhanden sind.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__MEMORY` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Server, Client, Blade Server u.a. |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Anzahl** | `quantity` | Ganzzahl |
| **Modulbezeichnung** | `title` | Dialog+ (erweiterbare Auswahl) |
| **Hersteller** | `manufacturer` | Dialog+ (erweiterbare Auswahl) |
| **Speichertyp** | `type` | Dialog+ (erweiterbare Auswahl) |
| **Gesamtkapazität** | `total_capacity` | Dezimalzahl |
| **Kapazität** | `capacity` | Dezimalzahl |
| **Einheit** | `unit` | Dialog (Auswahl) |
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
        "category": "C__CATG__MEMORY",
        "data": {
            "quantity": 4,
            "title": "Samsung M393A4K40EB3-CWE",
            "manufacturer": "Samsung",
            "type": "DDR4 ECC Registered",
            "capacity": 32,
            "unit": 2,
            "description": "3200 MHz, Dual Rank, Slots A1-A4"
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
        "category": "C__CATG__MEMORY"
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
        "category": "C__CATG__MEMORY",
        "entry": 45,
        "data": {
            "quantity": 8,
            "description": "Aufrüstung 2026-03: 4 zusätzliche Module in Slots B1-B4 verbaut."
        }
    },
    "id": 3
}
```
