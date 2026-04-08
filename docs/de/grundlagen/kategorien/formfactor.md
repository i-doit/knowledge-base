---
title: "Kategorie: Formfaktor"
description: Dokumentation der Kategorie Formfaktor in i-doit
icon:
status:
lang: de
---

# Kategorie: Formfaktor

Die Kategorie **Formfaktor** beschreibt die physische Bauform und die Abmessungen eines Objekts. Sie ist eine **Single-Value-Kategorie** – pro Objekt existiert genau ein Eintrag, der Bauform, Höheneinheiten, Maße und Gewicht zusammenfasst.

!!! tip "Voraussetzung für die Rack-Ansicht"
    Damit ein Objekt in der **Rack-Ansicht** positioniert werden kann, muss hier die Anzahl der **Höheneinheiten** eingetragen sein. Ohne diesen Wert weiß i-doit nicht, wie viel Platz das Gerät im Schrank einnimmt, und die Positionierung über die Kategorie [Standort](location.md) ist nicht möglich.

## Verwendung

Typische Anwendungsfälle:

- **Rack-Planung und Rack-Ansicht**: Die Höheneinheiten bestimmen, wie viel Platz ein Gerät im Schrank belegt. Erst wenn dieser Wert gepflegt ist, lässt sich das Objekt in der visuellen Rack-Ansicht positionieren und du siehst auf einen Blick, welche Slots frei sind. In Kombination mit der [Standort-Kategorie](location.md) entsteht so eine vollständige Rack-Belegungsdokumentation.
- **Raum- und Stellflächenplanung**: Breite, Höhe und Tiefe helfen bei der Planung von Stellflächen, Belüftungsabständen und Kabelwegen. Gerade bei freistehenden Servern (Tower-Bauform) oder Netzwerkschränken abseits des RZ ist das wichtig, um Platzbedarfe realistisch abzuschätzen.
- **Tragfähigkeit und Gewichtsmanagement**: Ein voll bestücktes 42HE-Rack kann leicht mehrere hundert Kilogramm wiegen. Das dokumentierte Gewicht jedes Geräts hilft, die Tragfähigkeit von Rackschränken und Doppelböden nicht zu überschreiten — besonders relevant bei älteren Gebäuden oder nachträglichen Erweiterungen.
- **Beschaffung und Austausch**: Beim Hardware-Refresh zeigt ein Report sofort, welche Geräte welche Bauform haben. Muss ein 1U-Server durch ein 2U-Modell ersetzt werden, ist sofort klar, ob im Rack genügend Platz vorhanden ist.

[![Formfaktor](../../assets/images/de/grundlagen/kategorien/formfactor.png)](../../assets/images/de/grundlagen/kategorien/formfactor.png)

## Felder

### Formfaktor

Die Bauform des Geräts. Die häufigsten Werte sind `19 Zoll Rack` (für alles, was in einen Rackschrank passt), `Tower` (freistehende Server und Workstations), `Desktop` (Clients) und `Blade` (Einschübe für ein Blade-Chassis). Da es sich um ein Dialog+-Feld handelt, kannst du eigene Bauformen ergänzen — etwa `Mini-PC` oder `DIN-Hutschiene` für industrielle Umgebungen.

### Höheneinheiten

Die Anzahl der Höheneinheiten (HE), die das Gerät im Rack belegt. Ein `1U`-Server braucht eine HE, ein typischer Storage-Array `2U` oder `4U`. **Dieses Feld ist die Voraussetzung dafür, dass i-doit das Objekt in der Rack-Ansicht positionieren kann.** Ohne Wert kann das Gerät keinem Slot zugewiesen werden. Auch für Reports, die freie Kapazitäten in Racks auswerten, ist dieses Feld unverzichtbar.

### Maßeinheit

Die Einheit, in der Breite, Höhe und Tiefe angegeben werden. In der Praxis hat sich `mm` als Standard bewährt, weil die Herstellerangaben in Datenblättern fast immer in Millimetern stehen. Du kannst aber auch `cm` oder `Zoll` wählen — wichtig ist nur, dass du innerhalb deiner CMDB einheitlich bleibst.

### Breite

Die Außenbreite des Geräts. Bei 19-Zoll-Rack-Geräten liegt sie standardmäßig bei `482 mm` (mit Ohren) bzw. `450 mm` (ohne Montageohren). Dieser Wert ist vor allem dann relevant, wenn du prüfen willst, ob ein Gerät in einen bestimmten Schrank oder auf eine bestimmte Stellfläche passt.

### Höhe

Die Außenhöhe des Geräts. Bei Rack-Servern korreliert sie direkt mit den Höheneinheiten: 1 HE entspricht `44,45 mm`, ein 2U-Server misst also ca. `87 mm`. Bei Tower-Servern oder Desktops steht hier die tatsächliche Gehäusehöhe.

### Tiefe

Die Gehäusetiefe — bei Rack-Servern typischerweise zwischen `600 mm` und `800 mm`. Dieser Wert ist wichtig für die Schranktiefe: Ein 600 mm tiefer Schrank kann keinen 750 mm tiefen Server aufnehmen. Denke auch an Kabelbiegeradien und Kabelmanagement-Arme, die zusätzliche Tiefe erfordern.

### Gewicht

Das Gewicht des Geräts inklusive aller eingebauten Komponenten (Festplatten, Netzteile, RAM). Ein voll bestückter 2U-Server wiegt leicht 25–30 kg, ein Blade-Chassis mit 16 Blades kann über 100 kg erreichen. Diese Information ist entscheidend für die Berechnung der Gesamtlast pro Rack und die Tragfähigkeit des Bodens.

### Gewichtseinheit

Die Einheit für das Gewichtsfeld — üblicherweise `kg`. Bei leichterer Hardware wie Switches oder Desktops kann `g` sinnvoll sein.

### Beschreibung

Freitext für alles, was in den strukturierten Feldern keinen Platz findet: benötigtes Schienen-Kit (z.B. „Dell ReadyRails II"), besondere Einbauhinweise (nur von vorne einsetzen), Kühlungsanforderungen (mindestens 1 HE Abstand zum nächsten Gerät) oder Anmerkungen zur Montage.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__FORMFACTOR` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Nein |
| **Zugeordnet zu** | Server, Blade Server, Blade Chassis, Enclosure, Switch, Router, Monitor, Raum u.a. |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Formfaktor** | `formfactor` | Dialog+ (erweiterbare Auswahl) |
| **Höheneinheiten** | `rackunits` | Ganzzahl |
| **Maßeinheit** | `unit` | Dialog (Auswahl) |
| **Breite** | `width` | Dezimalzahl |
| **Höhe** | `height` | Dezimalzahl |
| **Tiefe** | `depth` | Dezimalzahl |
| **Gewicht** | `weight` | Dezimalzahl |
| **Gewichtseinheit** | `weight_unit` | Dialog (Auswahl) |
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
        "category": "C__CATG__FORMFACTOR",
        "data": {
            "formfactor": "19 Zoll Rack",
            "rackunits": 2,
            "unit": "mm",
            "width": 482,
            "height": 87,
            "depth": 756,
            "weight": 18.5,
            "weight_unit": "kg",
            "description": "Dell PowerEdge R750, 2U Rackmount, Schienen-Kit ReadyRails II erforderlich"
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
        "category": "C__CATG__FORMFACTOR"
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
        "category": "C__CATG__FORMFACTOR",
        "entry": 1,
        "data": {
            "rackunits": 2,
            "description": "Umbau 2026-03: Server von Rack A03 nach B07 umgezogen, Schienen-Kit wiederverwendet."
        }
    },
    "id": 3
}
```
