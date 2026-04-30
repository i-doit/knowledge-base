---
title: "Kategorie: Dateizuweisung"
description: Dokumentation der Kategorie Dateizuweisung in i-doit
icon:
status:
lang: de
---

# Kategorie: Dateizuweisung

Die Kategorie **Dateizuweisung** verknüpft Dateien und Dokumente mit einem Objekt. Sie ist eine **Multi-Value-Kategorie** – pro Objekt können beliebig viele Dateien zugewiesen werden, z.B. ein Handbuch, ein Netzwerkplan und ein Konfigurationsbackup gleichzeitig.

!!! tip "Dateien sind eigenständige Objekte"
    In i-doit werden Dateien als eigene Objekte vom Typ **Datei** angelegt. Die Kategorie Dateizuweisung erstellt lediglich eine Verknüpfung zwischen dem aktuellen Objekt und einem solchen Datei-Objekt. Das hat den Vorteil, dass dieselbe Datei mehreren Objekten zugewiesen werden kann — etwa ein Netzwerkplan, der sowohl am Switch als auch am Router hängt.

## Verwendung

Typische Anwendungsfälle:

- **Handbücher und Datenblätter**: Lade das PDF-Handbuch eines Servers oder Switches als Datei-Objekt hoch und weise es dem Gerät zu. So hat jeder Techniker das Handbuch direkt im CMDB-Objekt griffbereit, ohne in Netzlaufwerken suchen zu müssen.
- **Netzwerkpläne und Diagramme**: Visio-Dateien, PNG-Topologien oder Rack-Aufbaupläne lassen sich den betroffenen Räumen, Schränken oder Standorten zuweisen. Bei einem Umbau ist sofort ersichtlich, welcher Plan gilt.
- **Konfigurationsbackups**: Die letzte exportierte Konfiguration eines Switches oder Routers als Textdatei hinterlegen. In Kombination mit dem Revisionsfeld lässt sich eine einfache Versionierung aufbauen.
- **Verträge und Lizenzdokumente**: Scan des Wartungsvertrags oder der Lizenzurkunde am jeweiligen Objekt ablegen. In Kombination mit der Kategorie [Vertragszuweisung](contract-assignment.md) entsteht so eine vollständige Vertragsdokumentation.
- **Externe Dokumente per Link**: Statt eine Datei hochzuladen, kann auch ein HTTP-Link auf ein externes Dokument gesetzt werden — etwa auf ein Confluence-Wiki, ein SharePoint-Dokument oder einen Hersteller-Download.

!!! info "Documents Add-on für erweiterte Dokumentenverwaltung"
    Die Kategorie Dateizuweisung deckt einfache Dateianhänge ab. Für eine professionelle Dokumentenverwaltung mit Vorlagen, Versionierung, Freigabe-Workflows und automatischer Befüllung aus CMDB-Daten bietet i-doit das **Documents Add-on**. Es ersetzt die Dateizuweisung nicht, sondern ergänzt sie um eine vollwertige Dokumentenmanagement-Ebene.

[![Dateizuweisung](../../assets/images/de/grundlagen/kategorien/file.png)](../../assets/images/de/grundlagen/kategorien/file.png)

## Felder

### Datei

Die Verknüpfung zu einem Datei-Objekt. Über den Objekt-Browser wählst du ein bestehendes Datei-Objekt aus oder legst ein neues an. Das Datei-Objekt selbst enthält die eigentliche Datei (Upload) sowie Metadaten wie Dateiname, Version und Kategorie.

### Revision

Die Revisionsnummer der verknüpften Datei. Dieses Feld wird aus dem Datei-Objekt übernommen und zeigt, welche Version der Datei aktuell zugewiesen ist. Bei einer aktualisierten Konfigurationsdatei steht hier z.B. `3` für die dritte Revision.

### HTTP-Link (extern)

Ein externer Link als Alternative oder Ergänzung zum Datei-Upload. Hier kannst du die URL zu einem Dokument in einem externen System eintragen, z.B. `https://wiki.example.com/handbuch-switch-core`. Das ist besonders praktisch, wenn Dokumente zentral in einem DMS gepflegt werden und nicht doppelt in i-doit hochgeladen werden sollen.

### Beschreibung

Freitext für zusätzliche Angaben zur Dateizuweisung: wozu die Datei dient, wann sie zuletzt aktualisiert wurde, wer der Ansprechpartner für den Inhalt ist oder welche Kapitel des Handbuchs für dieses spezifische Gerät relevant sind.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__FILE` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Server, Client, Switch, Router, Gebäude, Raum, Lizenz u.a. |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Datei** | `file` | Objekt-Browser (Verknüpfung) |
| **Revision** | `revision` | Ganzzahl |
| **HTTP-Link (extern)** | `link` | Text |
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
        "category": "C__CATG__FILE",
        "data": {
            "file": 2048,
            "link": "https://wiki.example.com/handbuch-core-switch",
            "description": "Herstellerhandbuch Cisco Catalyst 9300, Version 17.6"
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
        "category": "C__CATG__FILE"
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
        "category": "C__CATG__FILE",
        "entry": 15,
        "data": {
            "link": "https://wiki.example.com/handbuch-core-switch-v2",
            "description": "Aktualisiert auf Firmware-Version 17.9, neues Kapitel zu SD-Access"
        }
    },
    "id": 3
}
```
