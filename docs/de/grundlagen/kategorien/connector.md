---
title: "Kategorie: Anschluss"
description: Dokumentation der Kategorie Anschluss in i-doit
icon:
status:
lang: de
---

# Kategorie: Anschluss

Die Kategorie **Anschluss** dokumentiert die physischen Anschlüsse eines Objekts und deren Verbindungen zu anderen Objekten. Sie ist eine **Multi-Value-Kategorie** – pro Objekt können beliebig viele Einträge angelegt werden, z.B. bei einem Patchpanel mit 24 Ports, einem Switch mit Dutzenden Netzwerkanschlüssen oder einer PDU mit mehreren Stromausgängen.

Anschlüsse sind die **physischen Endpunkte von Kabeln** und bilden zusammen mit dem Kabel-Objekt und den Kategorien [Port](network-port.md) und [Stromverbraucher](power-consumer.md) die vollständige Verkabelungsdokumentation in i-doit. Jede Netzwerkverbindung und jede Stromversorgung hat zwei Enden — und jedes Ende ist ein Anschluss. Ohne diese Kategorie bleiben Kabel-Objekte unverknüpft und die Verkabelungsansicht zeigt nur Fragmente statt durchgängiger Kabelwege.

!!! tip "Input/Output richtig verstehen"
    Die Unterscheidung zwischen **Eingang** und **Ausgang** ist besonders bei der Stromverkabelung relevant: Das Netzteil eines Servers ist ein *Eingang* (es empfängt Strom), die Ausgangsbuchse an der PDU ist ein *Ausgang* (sie liefert Strom). Bei Netzwerk-Verbindungen folgt die Logik dem Datenfluss. Eine konsistente Input/Output-Pflege sorgt dafür, dass die Verkabelungsansicht die Richtung korrekt darstellt und dass Reports über Stromverteilung valide Ergebnisse liefern.

## Verwendung

Typische Anwendungsfälle:

- **Verkabelungsdokumentation**: Erfasse jeden physischen Anschluss eines Geräts und verbinde ihn mit dem Gegenstück am anderen Ende des Kabels. So entsteht eine lückenlose, durchgängige Verkabelungsdokumentation vom Server bis zum Patchpanel und weiter zum Switch. Der Anschluss ist dabei das Bindeglied zwischen dem konkreten Gerät und dem abstrakten Kabel-Objekt.
- **Patchfeld-Verwaltung**: Lege für jedes Patchpanel-Port einen Eintrag mit Bezeichnung, Schnittstellentyp und Verbindungsart an. Über den Objekt-Browser lässt sich der zugehörige Anschluss am Gegenstück direkt verknüpfen. Ein vollständig dokumentiertes Patchpanel mit 24 Anschlüssen zeigt auf einen Blick, welche Ports belegt, welche frei und welche defekt sind.
- **Strom-Anschlüsse**: Dokumentiere die Stromversorgung über PDU-Anschlüsse mit Steckertyp (z.B. C14, C13) und Verbindungsart (Stromkabel). Bei redundanter Stromversorgung wird jedes Netzteil als eigener Anschluss abgebildet. In Kombination mit der Kategorie [Stromverbraucher](power-consumer.md) entsteht so die komplette Strom-Topologie vom Einspeisepunkt bis zum Endgerät.
- **Rechenzentrums-Umzüge (Moves)**: Bei einem Umzug von Hardware zwischen Racks oder Standorten zeigt die Anschluss-Kategorie exakt, welche Kabel abgesteckt und am neuen Standort wieder verbunden werden müssen. Das reduziert die Fehlerquote beim Re-Patching erheblich und verkürzt die Downtime.
- **Kabelweg-Nachverfolgung (Cable Trace)**: Bei Netzwerkproblemen oder Stromausfällen lässt sich über die Anschluss-Kategorie sofort nachvollziehen, welches Kabel zu welchem Port führt — inklusive des Kabel-Objekts mit Länge, Typ und Verlauf. i-doit kann den gesamten Kabelweg über mehrere Patchpanels hinweg visualisieren, sofern alle Anschlüsse korrekt verknüpft sind.

[![Anschluss](../../assets/images/de/grundlagen/kategorien/connector.png)](../../assets/images/de/grundlagen/kategorien/connector.png)

## Felder

### Bezeichnung

Der Name des Anschlusses, z.B. `PSU-1 Power`, `eth0 Uplink` oder `Port 12`. Dieser Wert erscheint in der Listenansicht der Kategorie und wird in der Verkabelungsansicht als Beschriftung angezeigt. Eine konsistente Benennung erleichtert die Zuordnung beim Troubleshooting erheblich.

### Ein-/Ausgang

Legt fest, ob der Anschluss als **Eingang** (Input) oder **Ausgang** (Output) fungiert. Bei Netzwerkgeräten ist der Port am Switch typischerweise ein Eingang, am Server ein Ausgang. Bei Stromverteilern ist der PDU-Eingang das eingehende Stromkabel, die einzelnen Ausgänge versorgen die angeschlossenen Geräte.

### Schnittstelle

Der physische Schnittstellentyp des Anschlusses, z.B. `RJ-45`, `C14`, `C13`, `LC Duplex`, `SC Simplex` oder `USB-C`. Dialog+-Feld – eigene Werte lassen sich bei Bedarf ergänzen. Diese Angabe ist besonders bei der Planung neuer Verkabelungen hilfreich, da sofort ersichtlich ist, welcher Steckertyp benötigt wird.

### Verbindungsart

Beschreibt die Art des Kabels oder der Verbindung, z.B. `Patchkabel Cat6a`, `Stromkabel`, `LWL OM4` oder `DAC-Kabel`. Dialog+-Feld – neue Verbindungsarten können jederzeit hinzugefügt werden. Zusammen mit der Schnittstelle ergibt sich ein vollständiges Bild der physischen Verbindung.

### Verbundener Anschluss

Der Anschluss am Gegenstück, mit dem dieser Anschluss verbunden ist. Über den Objekt-Browser wird das Zielobjekt und dort der konkrete Anschluss ausgewählt. Wird z.B. Port 12 eines Patchpanels mit Port Gi0/12 eines Switches verbunden, erscheint diese Verknüpfung bidirektional in beiden Objekten.

### Kabelverbindung

Das Kabel-Objekt, das die physische Verbindung zwischen den beiden Anschlüssen herstellt. i-doit erzeugt das Kabel-Objekt automatisch beim Anlegen einer Verbindung, es kann aber auch vorab manuell erstellt und zugewiesen werden. Das Kabel-Objekt selbst kann zusätzliche Attribute wie Länge, Fasern oder Verlauf tragen.

### Farbe / Wellenlänge

Bei Lichtwellenleiter-Verbindungen (LWL) können hier die verwendeten Farben oder Wellenlängen ausgewählt werden. Mehrfachauswahl-Feld – relevant bei Multiplexing-Szenarien, in denen mehrere Wellenlängen über eine Faser geführt werden.

### Verkabelungssystem

Verknüpft den Anschluss mit einem übergeordneten Verkabelungssystem-Objekt. Damit lassen sich strukturierte Verkabelungen (z.B. ein Gebäude-Backbone oder eine Etagenverkabelung) als zusammengehörig gruppieren und visuell darstellen.

### Beschreibung

Freitext für zusätzliche Angaben: Patchplan-Referenzen, Installationsdatum, Hinweise zur Kabelführung, VLAN-Zuordnung oder sonstige Besonderheiten der Verbindung.

!!! note "Interne Felder"
    Die Kategorie enthält zusätzliche interne Felder, die von i-doit automatisch verwaltet werden und in der Regel nicht manuell bearbeitet werden müssen: **Zugewiesener Ein-/Ausgang** (`connector_sibling`) verknüpft Input- und Output-Seite desselben Anschlusses, **Beziehungsrichtung** (`relation_direction`) steuert die Richtung der erzeugten Beziehung, **Zugewiesene Kategorie** (`assigned_category`) referenziert die Quellkategorie (z.B. Netzwerk-Port), und **Verwendete Faser/Ader RX/TX** (`used_fiber_lead_rx`, `used_fiber_lead_tx`) halten die konkreten Fasern bei LWL-Verbindungen fest.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__CONNECTOR` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Server, Client, Switch, Patchpanel, PDU, Monitor u.a. |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Bezeichnung** | `title` | Text |
| **Ein-/Ausgang** | `type` | Dialog (Auswahl) |
| **Schnittstelle** | `interface` | Dialog+ (erweiterbare Auswahl) |
| **Verbindungsart** | `connection_type` | Dialog+ (erweiterbare Auswahl) |
| **Verbundener Anschluss** | `assigned_connector` | Objekt-Browser (Verknüpfung) |
| **Kabelverbindung** | `cable_connection` | Objekt-Browser (Verknüpfung) |
| **Farbe / Wellenlänge** | `fiber_wave_lengths` | Mehrfachauswahl |
| **Verkabelungssystem** | `wiring_system` | Objekt-Browser (Verknüpfung) |
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
        "category": "C__CATG__CONNECTOR",
        "data": {
            "title": "PSU-1 Power",
            "type": "Ausgang",
            "interface": "C14",
            "connection_type": "Stromkabel",
            "description": "Netzteil 1, redundante Stromversorgung über PDU-A"
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
        "category": "C__CATG__CONNECTOR"
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
        "category": "C__CATG__CONNECTOR",
        "entry": 42,
        "data": {
            "title": "eth0 Uplink",
            "type": "Ausgang",
            "interface": "RJ-45",
            "connection_type": "Patchkabel Cat6a",
            "description": "Uplink zu Switch-A Port Gi0/1, VLAN 100"
        }
    },
    "id": 3
}
```
