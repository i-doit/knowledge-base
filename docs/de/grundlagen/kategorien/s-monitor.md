---
title: "Kategorie: Monitor"
description: Dokumentation der Kategorie Monitor in i-doit
icon:
status:
lang: de
---

# Kategorie: Monitor

Die Kategorie **Monitor** ist eine spezifische Kategorie für Objekte vom Typ **Monitor** und dokumentiert die technischen Eigenschaften eines Bildschirms. Sie ist eine **Single-Value-Kategorie** – pro Monitor-Objekt existiert genau ein Eintrag mit den Kerndaten wie Bildschirmgröße, Auflösung und Panel-Typ.

Während die globalen Kategorien (Modell, Hersteller, Standort) für alle Objekttypen gelten, enthält die Monitor-Kategorie die displayspezifischen Eigenschaften, die nur für Bildschirme relevant sind. In Kombination mit der Kategorie [Formfaktor](formfactor.md) – die physische Abmessungen und Rackeinheiten dokumentiert – entsteht ein vollständiges Bild des Geräts.

!!! tip "Monitor-Dokumentation und Arbeitsplatzplanung"
    Die Monitor-Kategorie entfaltet ihren vollen Nutzen in Kombination mit der Kategorie [Arbeitsplatz](assigned-workstation.md). Über die Arbeitsplatzzuweisung wird dokumentiert, welcher Monitor an welchem Arbeitsplatz steht und welchem Mitarbeiter zugeordnet ist. Reports wie „Alle Monitore mit Auflösung unter Full-HD" oder „Alle Arbeitsplätze ohne Dual-Monitor-Setup" helfen bei der Planung von Bildschirm-Rollouts.

!!! info "Panel-Technologie dokumentieren"
    Das Feld **Typ** unterscheidet zwischen LCD, LED, OLED und weiteren Technologien. Diese Information ist relevant für die Einkaufsplanung (Energieverbrauch, Lebensdauer) und für ergonomische Arbeitsplatzaudits. Da es sich um ein Dialog+-Feld handelt, lassen sich eigene Werte wie „Mini-LED" oder „QLED" bei Bedarf ergänzen.

## Verwendung

Typische Anwendungsfälle:

- **Hardware-Inventar**: Erfasse Bildschirmgröße, Auflösung und Panel-Typ jedes Monitors. In Kombination mit den Kategorien Modell und Buchhaltung entsteht ein vollständiges Asset-Profil inklusive Anschaffungsdatum und Abschreibung.
- **Arbeitsplatzstandard prüfen**: Über Reports lässt sich auswerten, welche Arbeitsplätze den definierten Mindeststandard erfüllen (z.B. mindestens 27 Zoll, Full-HD-Auflösung). Abweichungen werden sichtbar und können gezielt behoben werden.
- **Ergonomie-Audits**: Die Felder Pivot (Hochformat-Fähigkeit) und Bildschirmgröße liefern Daten für ergonomische Bewertungen. Ein Report „Alle Monitore ohne Pivot-Funktion an Entwickler-Arbeitsplätzen" identifiziert Handlungsbedarf.
- **Lifecycle-Management**: Ältere Monitore mit niedrigerer Auflösung oder ohne LED-Hintergrundbeleuchtung lassen sich per Report identifizieren und in Austauschkampagnen einplanen. Der Formfaktor liefert ergänzend die physischen Maße.
- **Einkaufsplanung**: Die Auswertung der aktuellen Monitor-Landschaft nach Größe, Typ und Auflösung zeigt, welche Modelle dominieren und wo Standardisierungspotenzial besteht.

[![Monitor](../../assets/images/de/grundlagen/kategorien/s-monitor.png)](../../assets/images/de/grundlagen/kategorien/s-monitor.png)

## Felder

### Bildschirmgröße (Display) und Einheit

Die Diagonale des Bildschirms als Dezimalwert, z.B. `27.0` oder `34.0`. Die Einheit wird separat angegeben – üblicherweise Zoll. Dieser Wert erscheint in der Listenansicht und ist die am häufigsten gefilterte Eigenschaft in Reports.

### Typ

Die Panel-Technologie des Monitors: LCD, LED, OLED, TN, IPS usw. Dialog+-Feld – eigene Werte lassen sich bei Bedarf ergänzen, z.B. für spezialisierte Displaytechnologien wie Mini-LED oder QLED. Nützlich für energiebezogene Auswertungen (OLED vs. LCD) und Einkaufsstandards.

### Auflösung (Resolution)

Die native Bildschirmauflösung, z.B. `1920x1080` (Full-HD), `2560x1440` (WQHD) oder `3840x2160` (4K UHD). Dialog+-Feld – eigene Werte lassen sich ergänzen. Die Auflösung ist ein zentrales Kriterium für Arbeitsplatzstandards und Software-Anforderungen.

### Pivot

Gibt an, ob der Monitor eine Hochformat-Drehung (Pivot-Funktion) unterstützt. Dialog-Feld mit den Werten Ja/Nein. Relevant für Entwickler-Arbeitsplätze und Dokumentenbearbeitung, wo ein zweiter Monitor im Hochformat üblich ist.

### Lautsprecher (Speaker)

Dokumentiert, ob der Monitor über integrierte Lautsprecher verfügt. Dialog-Feld mit den Werten Ja/Nein. Relevant für Konferenzräume und Arbeitsplätze, an denen keine externen Lautsprecher gewünscht sind.

### Beschreibung

Freitext für zusätzliche Angaben: Anschlusskonfiguration (HDMI, DisplayPort, USB-C), Besonderheiten wie Curved-Design, HDR-Unterstützung, Monitorarm-Kompatibilität oder VESA-Maße.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATS__MONITOR` |
| **Typ** | Spezifische Kategorie |
| **Multi-Value** | Nein |
| **Zugeordnet zu** | Monitor (MONITOR) |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Bildschirmgröße** | `size` | Dezimalzahl |
| **Einheit** | `size_unit` | Dialog (Auswahl) |
| **Typ** | `type` | Dialog+ (erweiterbare Auswahl) |
| **Auflösung** | `resolution` | Dialog+ (erweiterbare Auswahl) |
| **Pivot** | `pivot` | Dialog (Auswahl) |
| **Lautsprecher** | `speaker` | Dialog (Auswahl) |
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
        "category": "C__CATS__MONITOR",
        "data": {
            "size": 27.0,
            "size_unit": "Zoll",
            "type": "IPS",
            "resolution": "2560x1440",
            "pivot": 1,
            "speaker": 0,
            "description": "Dell U2723QE, USB-C Hub, 90W Power Delivery, VESA 100x100"
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
        "category": "C__CATS__MONITOR"
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
        "category": "C__CATS__MONITOR",
        "entry": 1,
        "data": {
            "resolution": "3840x2160",
            "description": "Upgrade 2026-03: Panel-Tausch auf 4K UHD durch Hersteller-Service"
        }
    },
    "id": 3
}
```
