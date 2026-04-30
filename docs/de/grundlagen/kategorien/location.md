---
title: "Kategorie: Standort"
description: Dokumentation der Kategorie Standort in i-doit
icon:
status:
lang: de
---

# Kategorie: Standort

Die Kategorie **Standort** ist **die zentrale Kategorie für die physische Verortung** eines Objekts in i-doit — und damit das Fundament der gesamten CMDB-Struktur. Sie ist eine **Single-Value-Kategorie** und wird **allen Objekttypen** zugeordnet. Über das Feld *Übergeordneter Standort* wird die gesamte Standorthierarchie aufgebaut – von der Landesebene bis hinunter zum einzelnen Einschub im Rack. Ohne eine sauber gepflegte Standorthierarchie fehlt der CMDB die räumliche Dimension: Rack-Ansichten, der Standort-Browser und standortbasierte Reports funktionieren nur, wenn die Zuordnungen stimmen.

!!! tip "Voraussetzung für die Rack-Positionierung"
    Damit ein Objekt im Rack positioniert werden kann, muss in der Kategorie [Formfaktor](formfactor.md) die Anzahl der **Höheneinheiten** eingetragen sein. Ohne diesen Wert kann i-doit das Objekt keinem Slot zuweisen — das Feld *Position im Rack* in dieser Kategorie bleibt dann leer.

## Verwendung

Typische Anwendungsfälle:

- **Standorthierarchie aufbauen**: Die Standorthierarchie ist die Baumstruktur, die die gesamte physische Welt in i-doit abbildet. Jedes Objekt verweist über das Feld *Übergeordneter Standort* (`parent`) auf sein übergeordnetes Objekt – so entsteht eine Kette, z.B. `Deutschland > Berlin > Rechenzentrum Nord > Raum 3.04 > Rack A12 > Server-01`. **Diese Hierarchie ist das Rückgrat der CMDB**: Sie bestimmt, was im Standort-Browser, in der physischen Ansicht und in standortbezogenen Reports angezeigt wird. Wird ein Objekt verschoben, wandern alle untergeordneten Objekte automatisch mit.
- **Rack-Einbau dokumentieren**: Wenn ein Objekt in ein Rack eingebaut ist, lassen sich Einbauart (Vorderseite/Rückseite), Einschubrichtung (Horizontal/Vertikal) und die genaue Position (Höheneinheit) dokumentieren. Voraussetzung: In der Kategorie [Formfaktor](formfactor.md) müssen die Höheneinheiten gepflegt sein — ohne diesen Wert bleibt die Positionsauswahl leer.
- **GPS-Koordinaten für mobile und externe Assets**: Für Gebäude, Aussenstationen, Mobilfunkmasten oder Outdoor-Equipment können GPS-Koordinaten hinterlegt werden. Das ist besonders nützlich bei verteilten Infrastrukturen: Kartendarstellungen zeigen auf einen Blick, wo sich welches Equipment befindet, und Entfernungsberechnungen helfen bei der Planung von Serviceeinsätzen.
- **SNMP-Standortabgleich**: Der SNMP sysLocation-String kann hinterlegt werden, um den in SNMP-Abfragen zurückgegebenen Standort mit dem i-doit-Standort abzugleichen. Netzwerkgeräte melden ihre sysLocation automatisch — über einen Report lässt sich prüfen, ob der konfigurierte SNMP-Standort mit der i-doit-Zuordnung übereinstimmt. Abweichungen deuten oft darauf hin, dass ein Gerät physisch umgezogen, aber in i-doit nicht aktualisiert wurde.

[![Standort](../../assets/images/de/grundlagen/kategorien/location.png)](../../assets/images/de/grundlagen/kategorien/location.png)

## Felder

### Übergeordneter Standort

**Das wichtigste Feld der gesamten Kategorie — und eines der wichtigsten Felder in i-doit überhaupt.** Über den Objekt-Browser wird das übergeordnete Objekt in der Standorthierarchie ausgewählt – z.B. ein Raum für einen Schrank, ein Gebäude für einen Raum oder ein Rack für einen Server. Durch die Verkettung dieser Zuordnungen entsteht automatisch der vollständige Standortpfad. Wird dieses Feld geändert, verschiebt sich das Objekt mitsamt aller untergeordneten Objekte in der Hierarchie. Das bedeutet: Wenn du ein Rack von Raum A nach Raum B verschiebst, wandern alle darin verbauten Server, Switches und PDUs automatisch mit — die Unterhierarchie bleibt konsistent.

### Einbauart

Bestimmt, ob das Objekt von der **Vorderseite** oder **Rückseite** in ein Rack eingebaut ist. Dieses Feld ist nur relevant, wenn der übergeordnete Standort ein Rack oder Schrank ist. Die Auswahl beeinflusst die Darstellung in der physischen Rack-Ansicht: Geräte auf der Vorderseite erscheinen links, Geräte auf der Rückseite rechts. Typischerweise werden Server vorne und PDUs oder Kabelmanagement hinten montiert.

### Einschub

Legt fest, ob das Objekt **horizontal** oder **vertikal** eingebaut ist. Standardmäßig horizontal – vertikale Einschuebe werden z.B. für Kabelmanagement-Panels, vertikale PDUs oder Blindplatten verwendet, die seitlich im Rack montiert sind.

### Position im Rack

Die Höheneinheit (HE), in der das Objekt im Rack eingebaut ist. Die verfügbaren Positionen ergeben sich dynamisch aus der Rack-Konfiguration und den bereits belegten Höheneinheiten. **Dieses Feld funktioniert nur, wenn in der Kategorie [Formfaktor](formfactor.md) die Höheneinheiten des Objekts eingetragen sind** — ohne diesen Wert weiß i-doit nicht, wie viele Slots das Gerät belegt, und die Positionsauswahl bleibt leer. Nur relevant, wenn der übergeordnete Standort ein Rack ist.

### GPS

Ein Freitextfeld für GPS-Koordinaten in einem beliebigen Format, z.B. `52.520008, 13.404954`. Für eine strukturierte Erfassung stehen die separaten Felder *Breitengrad* und *Längengrad* zur Verfügung. Besonders nützlich für mobile Assets (Fahrzeuge, Container), Outdoor-Equipment (Antennenmasten, Verteilerkästen) oder verteilte Standorte ohne feste Adresse.

### Breitengrad

Der Breitengrad (Latitude) als Dezimalwert, z.B. `52.520008` für Berlin. Wird zusammen mit dem Längengrad für Kartendarstellungen und Entfernungsberechnungen verwendet. Für Gebäude reicht eine Genauigkeit von 5–6 Nachkommastellen (ca. 1 Meter), für Outdoor-Equipment kann eine höhere Genauigkeit sinnvoll sein.

### Längengrad

Der Längengrad (Longitude) als Dezimalwert, z.B. `13.404954` für Berlin. Zusammen mit dem Breitengrad ergibt sich die exakte Position für Kartenansichten.

### SNMP sysLocation

Der SNMP sysLocation-String des Geräts, wie er von SNMP-Abfragen zurückgegeben wird (OID `1.3.6.1.2.1.1.6`). Kann beim SNMP-Import automatisch befuellt werden. **Dieses Feld ermöglicht den Abgleich zwischen dem Standort, den das Gerät selbst meldet, und der Zuordnung in i-doit.** Ein Report, der SNMP sysLocation mit dem übergeordneten Standort vergleicht, deckt Inkonsistenzen auf — typischerweise Geräte, die physisch umgezogen wurden, deren Netzwerkkonfiguration aber noch den alten Standort enthält (oder umgekehrt).

### Beschreibung

Freitext für zusätzliche Standortinformationen: Zugangsbeschraenkungen (z.B. „nur mit Transponder Ebene 3"), Ansprechpartner vor Ort, Besonderheiten zur Erreichbarkeit (z.B. „Zugang nur über Sicherheitsschleuse, 24h Voranmeldung") oder Hinweise zur Klimatisierung und Stromversorgung.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__LOCATION` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Nein |
| **Zugeordnet zu** | Alle Objekttypen |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Übergeordneter Standort** | `parent` | Objekt-Browser (Verknüpfung) |
| **Einbauart** | `option` | Dialog (Auswahl) |
| **Einschub** | `insertion` | Dialog (Auswahl) |
| **Position im Rack** | `pos` | Dialog (Auswahl) |
| **GPS** | `gps` | Text |
| **Breitengrad** | `latitude` | Text |
| **Längengrad** | `longitude` | Text |
| **SNMP sysLocation** | `snmp_syslocation` | Text |
| **Beschreibung** | `description` | Textfeld (mehrzeilig) |

### API-Beispiele

#### Eintrag erstellen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "object": 456,
        "category": "C__CATG__LOCATION",
        "data": {
            "parent": 789,
            "option": 1,
            "insertion": 1,
            "pos": 12,
            "latitude": "52.520008",
            "longitude": "13.404954",
            "snmp_syslocation": "Berlin DC-Nord Raum 3.04 Rack A12",
            "description": "Einbau in HE 12, Vorderseite"
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
        "objID": 456,
        "category": "C__CATG__LOCATION"
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
        "object": 456,
        "category": "C__CATG__LOCATION",
        "entry": 1,
        "data": {
            "parent": 801,
            "pos": 24,
            "description": "Umzug 2026-04: Verschiebung von Rack A12 nach Rack B05, HE 24"
        }
    },
    "id": 3
}
```
