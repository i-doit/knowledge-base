---
title: "Kategorie: Objektbild"
description: Dokumentation der Kategorie Objektbild in i-doit
icon:
status:
lang: de
---

# Kategorie: Objektbild

Die Kategorie **Objektbild** ermöglicht es, einem Objekt ein individuelles Foto oder Bild zuzuweisen. Sie ist eine **Single-Value-Kategorie** – pro Objekt kann genau ein Bild hinterlegt werden, das dann in der Objektansicht prominent angezeigt wird.

!!! tip "Visuelle Identifikation im Alltag"
    Ein Bild sagt mehr als tausend Attribute. Gerade bei der Vor-Ort-Arbeit im Rechenzentrum hilft ein Foto des Geräts enorm: Techniker erkennen sofort, welches Gerät im Rack gemeint ist, ohne erst Seriennummern vergleichen zu müssen. Auch bei der Rack-Dokumentation ergänzen Fotos die schematische Rack-Ansicht um die Realität — Kabelführung, Beschriftungen und physischer Zustand werden auf einen Blick sichtbar.

## Verwendung

Typische Anwendungsfälle:

- **Rack-Fotos und Hardware-Dokumentation**: Fotografiere Server, Switches oder Storage-Systeme direkt im Rack und hinterlege die Bilder am jeweiligen Objekt. Bei Wartungsarbeiten sieht der Techniker im CMDB sofort, wie das Gerät aussieht und wo es sich befindet — besonders hilfreich bei baugleichen Geräten, die sich nur durch Position oder Beschriftung unterscheiden.
- **Gebäude und Räume**: Für Standort-Objekte wie Gebäude, Stockwerke oder Serverräume bieten sich Grundrisse, Fotos der Zugangstüren oder Übersichtsbilder an. Das erleichtert neuen Mitarbeitern und externen Dienstleistern die Orientierung.
- **Arbeitsplätze und Clients**: Ein Foto des Arbeitsplatzes dokumentiert die tatsächliche Ausstattung — Monitor-Setup, Docking Station, Peripherie. Bei Umzügen oder Hardware-Tausch ist sofort klar, was vor Ort steht.
- **Netzwerkkomponenten**: Patch-Panel-Fotos oder Switch-Front-Ansichten helfen bei der Zuordnung von Ports zu physischen Anschlüssen, besonders wenn die Beschriftung vor Ort unvollständig ist.

[![Objektbild](../../assets/images/de/grundlagen/kategorien/image.png)](../../assets/images/de/grundlagen/kategorien/image.png)

## Felder

### Hochgeladene Bilder

Eine Auswahl bereits hochgeladener Bilder für dieses Objekt. Wenn mehrere Bilder hochgeladen wurden, kann hier das aktive Objektbild gewählt werden, das in der Objektansicht angezeigt wird.

### Datei

Das eigentliche Bild-Upload-Feld. Unterstützt gängige Bildformate wie PNG, JPG und GIF. Für Rack-Fotos empfehlen sich Bilder mit einer Auflösung von ca. 1000–2000 Pixel Breite — groß genug für Details, aber nicht so groß, dass die Ladezeit leidet. Achte auf aussagekräftige Dateinamen wie `srv-esxi-01-front.jpg` statt `IMG_20260401.jpg`.

### Beschreibung

Freitext für Kontext zum Bild: Aufnahmedatum, Perspektive (Front/Rück), Besonderheiten oder Anlass (z.B. „Zustand nach Umbau 2026-03", „Kabelführung Rückseite Rack B07").

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__IMAGE` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Nein |
| **Zugeordnet zu** | Anwendung, Blade Server, Gebäude, Kabel, Client, Enclosure, Monitor u.a. |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Hochgeladene Bilder** | `image_selection` | Dialog (Auswahl) |
| **Datei** | `image` | Datei-Upload |
| **Beschreibung** | `description` | Textfeld (mehrzeilig) |

### API-Beispiele

!!! note "Bild-Upload per API"
    Das Hochladen von Bilddateien über die JSON-RPC-API ist eingeschränkt. Der `image`-Wert erwartet eine Base64-kodierte Datei oder einen internen Dateipfad. Für den praktischen Einsatz wird empfohlen, Bilder über die Web-Oberfläche hochzuladen und die API nur zum Lesen oder zur Auswahl bereits hochgeladener Bilder zu verwenden.

#### Einträge lesen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.read",
    "params": {
        "apikey": "dein-api-key",
        "object": 1042,
        "category": "C__CATG__IMAGE"
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
        "category": "C__CATG__IMAGE",
        "entry": 1,
        "data": {
            "description": "Frontansicht Server nach RAM-Upgrade 2026-04"
        }
    },
    "id": 3
}
```
