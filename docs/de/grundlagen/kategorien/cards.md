---
title: "Kategorie: SIM-Karte"
description: Dokumentation der Kategorie SIM-Karte in i-doit
icon:
status:
lang: de
---

# Kategorie: SIM-Karte

Die Kategorie **SIM-Karte** (Kategorie-Konstante `C__CATG__CARDS`) dokumentiert die Eigenschaften und Sicherheitsinformationen eines SIM-Karten-Objekts. Sie ist eine **Single-Value-Kategorie** und dem Objekttyp **SIM-Karte** zugeordnet. Hier werden die physischen Kartendaten erfasst: Kartennummer, Seriennummer, PIN/PUK sowie die Zuordnung zum Mobilgerät.

!!! info "Neue und alte SIM-Kategorien — was gehört wohin?"
    Die SIM-Dokumentation in i-doit besteht aus drei Kategorien, die zusammenspielen:

    | Kategorie | Wo? | Zweck |
    |---|---|---|
    | **SIM-Karte** (`C__CATG__CARDS`) | Auf dem SIM-Karten-Objekt | Kartendaten: Nummer, PIN, PUK, Seriennummer, zugewiesenes Gerät |
    | **SIM** (`C__CATG__SIM`) | Auf dem SIM-Karten-Objekt | Vertragsdaten: Netzbetreiber, Tarif, Rufnummer, Vertragslaufzeit |
    | **Zugewiesene SIM-Karten** (`C__CATG__ASSIGNED_SIM_CARDS`) | Auf dem Gerät (Handy, Notebook, Router) | Rückverknüpfung: welche SIM-Karten stecken in diesem Gerät? |

    Die alte Implementierung erlaubte nur 2 SIM-Karten pro Gerät direkt am Gerät zu hinterlegen. Mit dem neuen Modell wird jede SIM-Karte als **eigenes Objekt** angelegt und über die Zuweisungskategorien verknüpft — das ermöglicht beliebig viele SIMs pro Gerät und eine saubere Trennung von Karten- und Vertragsdaten. Zusätzlich lässt sich über die [Vertragszuweisung](contract-assignment.md) am SIM-Karten-Objekt der Mobilfunkvertrag tracken.

!!! warning "Sensible Daten"
    Diese Kategorie speichert PIN, PUK und Seriennummern -- also sicherheitsrelevante Informationen. Stelle sicher, dass der Zugriff auf den Objekttyp SIM-Karte in den i-doit-Rechteprofilen angemessen eingeschraenkt ist. Nicht jeder Benutzer sollte PINs und PUKs einsehen können.

## Verwendung

Typische Anwendungsfälle:

- **Mobile Device Management (MDM)**: Jede SIM-Karte wird als eigenständiges Objekt erfasst und über das Feld `Zugewiesenes Mobiltelefon` dem jeweiligen Endgerät zugeordnet. So ist jederzeit nachvollziehbar, welche SIM in welchem Gerät steckt -- besonders wichtig bei Gerätetausch oder Verlust.
- **Vertragszuordnung**: Über die Verknüpfung mit einem Mobilfunkvertrag (Objekttyp Mobilfunkvertrag) lässt sich die SIM-Karte dem passenden Vertrag zuordnen. Bei Vertragsende ist sofort klar, welche SIM-Karten betroffen sind und gekündigt oder portiert werden müssen.
- **Verlust und Sperrung**: Geht ein Mobiltelefon verloren, zeigt die SIM-Karten-Kategorie sofort die Kartennummer und Seriennummer, die der Provider für die Sperrung benötigt. Die PUK wird für die Entsperrung nach drei Fehlversuchen benötigt -- ohne sie muss beim Provider eine Ersatz-SIM beantragt werden.
- **Inventur und Bestandsverwaltung**: Per Report lassen sich alle SIM-Karten auflisten, die keinem Mobiltelefon zugewiesen sind -- unbenutzte Karten, die Kosten verursachen, ohne genutzt zu werden.
- **Kostenstellen-Zuordnung**: In Kombination mit der Buchhaltungs-Kategorie lassen sich SIM-Karten Kostenstellen zuweisen und die monatlichen Mobilfunkkosten je Abteilung oder Projekt auswerten.

[![SIM-Karte](../../assets/images/de/grundlagen/kategorien/cards.png)](../../assets/images/de/grundlagen/kategorien/cards.png)

## Felder

### Zugewiesenes Mobiltelefon

Verknüpfung zum Mobiltelefon-Objekt, in dem die SIM-Karte aktuell eingesetzt ist. Der Objekt-Browser filtert auf Objekte mit der Kategorie **Zugewiesene SIM-Karten** -- typischerweise Mobiltelefone oder Tablets. Bei einem Gerätetausch wird hier einfach das neue Gerät eingetragen; die Änderungshistorie im Logbuch dokumentiert den Wechsel lueckenlos.

### Kartennummer

Die Kartennummer (ICCID -- Integrated Circuit Card Identifier), z.B. `8949 0102 3456 7890 1234`. Diese Nummer identifiziert die physische SIM-Karte eindeutig und wird vom Provider für Sperrungen, Portierungen und Vertragszuordnungen benötigt.

### Bezeichnung

Ein frei wählbarer Name für die SIM-Karte, z.B. `SIM Geschaeftshandy Mueller` oder `Daten-SIM Aussendienst-Tablet 07`. Dieses Feld erscheint in der Listenansicht und in Reports und sollte so gewählt werden, dass die Karte auch ohne Öffnen des Objekts identifizierbar ist.

### PIN

Der PIN-Code der SIM-Karte (4-8 Ziffern). Wird benötigt, um die SIM-Karte nach dem Einlegen oder Neustart des Geräts zu entsperren.

### PIN 2

Der zweite PIN-Code, der bei manchen Providern für erweiterte Funktionen (Rufnummernsperrung, Festnetzrufnummern-Sperre) verwendet wird. Nicht bei allen SIM-Karten relevant.

### PUK

Der PUK-Code (Personal Unblocking Key, 8 Ziffern). Wird benötigt, wenn die PIN dreimal falsch eingegeben wurde. Ohne PUK ist die SIM-Karte dauerhaft gesperrt und muss beim Provider ersetzt werden -- daher ist die Dokumentation dieses Werts besonders wichtig.

### PUK2

Der zweite PUK-Code zum Entsperren von PIN 2. Analog zum PUK, aber für die erweiterten Funktionen.

### Seriennummer

Die Seriennummer der SIM-Karte, häufig identisch mit oder ähnlich der ICCID. Manche Provider verwenden eine separate Seriennummer auf der SIM-Kartenhalterung, die sich von der ICCID unterscheidet.

### Beschreibung

Freitext für Zusatzinformationen: Tarif-Name, Datenvolumen, Roaming-Optionen, Vertragslaufzeit oder Verweis auf den zugehörigen Mobilfunkvertrag.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__CARDS` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Nein |
| **Zugeordnet zu** | SIM-Karte |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Zugewiesenes Mobiltelefon** | `assigned_mobile` | Objekt-Browser (Verknüpfung) |
| **Kartennummer** | `card_no` | Text |
| **Bezeichnung** | `title` | Text |
| **PIN** | `pin` | Text |
| **PIN 2** | `pin2` | Text |
| **PUK** | `puk` | Text |
| **PUK2** | `puk2` | Text |
| **Seriennummer** | `serial` | Text |
| **Beschreibung** | `description` | Textfeld (mehrzeilig) |

### API-Beispiele

#### Eintrag erstellen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "object": 620,
        "category": "C__CATG__CARDS",
        "data": {
            "assigned_mobile": 615,
            "card_no": "8949 0102 3456 7890 1234",
            "title": "SIM Geschaeftshandy Mueller",
            "pin": "1234",
            "pin2": "5678",
            "puk": "12345678",
            "puk2": "87654321",
            "serial": "89490102345678901234F",
            "description": "Tarif Business Mobil L, 20 GB Daten, EU-Roaming inklusive, Vertrag bis 12/2027"
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
        "object": 620,
        "category": "C__CATG__CARDS"
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
        "object": 620,
        "category": "C__CATG__CARDS",
        "entry": 1,
        "data": {
            "assigned_mobile": 618,
            "description": "Geraetetausch 2026-04: SIM von iPhone 14 (615) in iPhone 16 (618) umgesetzt."
        }
    },
    "id": 3
}
```
