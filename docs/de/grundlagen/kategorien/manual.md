---
title: "Kategorie: Handbuchzuweisung"
description: Dokumentation der Kategorie Handbuchzuweisung in i-doit
icon:
status:
lang: de
---

# Kategorie: Handbuchzuweisung

Die Kategorie **Handbuchzuweisung** verknüpft ein Objekt mit Handbuch- oder Dokumentationsdateien, die als eigenständige Objekte vom Typ „Datei" in i-doit existieren. Sie ist eine **Multi-Value-Kategorie** – pro Objekt können beliebig viele Handbücher zugeordnet werden, z.B. ein Herstellerhandbuch, eine Betriebsanleitung und ein Notfallplan.

!!! tip "Handbuchzuweisung vs. Dateizuweisung"
    Die Kategorie Handbuchzuweisung ist funktional ähnlich zur [Dateizuweisung](file.md), dient aber explizit der Zuordnung von **Dokumentation und Handbüchern**. Die Dateizuweisung ist für allgemeine Dateien gedacht (Konfigurationsdateien, Backups, Lizenzdokumente), während die Handbuchzuweisung klar signalisiert: „Hier findest du die Anleitung zu diesem Objekt." Diese Trennung erleichtert die Suche erheblich – ein Techniker, der die Bedienungsanleitung eines Switches sucht, schaut in die Handbuchzuweisung, nicht in die allgemeine Dateizuweisung.

## Verwendung

Typische Anwendungsfälle:

- **Herstellerhandbücher zuordnen**: Lade das PDF-Handbuch eines Servers, Switches oder einer USV als Datei-Objekt in i-doit hoch und verknüpfe es über die Handbuchzuweisung mit dem jeweiligen Gerät. So findet jeder Techniker die Dokumentation direkt am Objekt, ohne in Netzlaufwerken oder Wikis suchen zu müssen.
- **Betriebsanleitungen und SOPs**: Standard Operating Procedures (SOPs) für den Betrieb einer Anwendung oder eines Services lassen sich hier zuordnen. Ein neuer Mitarbeiter findet so alle relevanten Anleitungen direkt am i-doit-Objekt.
- **Notfall- und Wiederherstellungspläne**: Disaster-Recovery-Dokumente gehören an die Objekte, die sie betreffen. Im Ernstfall spart das wertvolle Zeit, weil die Anleitung nicht erst gesucht werden muss.
- **Audit-Dokumentation**: Bei Audits (ISO 27001, BSI-Grundschutz) wird häufig nach Betriebshandbüchern gefragt. Wenn diese direkt an den CMDB-Objekten hängen, lässt sich die Vollständigkeit per Report prüfen: „Welche Server haben kein zugeordnetes Handbuch?"

[![Handbuchzuweisung](../../assets/images/de/grundlagen/kategorien/manual.png)](../../assets/images/de/grundlagen/kategorien/manual.png)

## Felder

### Bezeichnung

Der Titel des Handbucheintrags, z.B. `Herstellerhandbuch Dell PowerEdge R750` oder `Betriebsanleitung SAP HANA`. Dieser Wert erscheint in der Listenansicht und dient der schnellen Orientierung, wenn mehrere Handbücher zugeordnet sind.

### Handbuchdatei

Verknüpfung zu einem Datei-Objekt in i-doit, das die eigentliche Handbuchdatei enthält. Das Datei-Objekt muss vorher angelegt und die Datei (PDF, DOCX o.ä.) dort hochgeladen worden sein. Über den Objekt-Browser wählst du das passende Datei-Objekt aus. Der Vorteil dieser Architektur: Dasselbe Handbuch kann mehreren Objekten zugeordnet werden – z.B. ein Switch-Handbuch an alle 20 Switches desselben Modells.

### Beschreibung

Freitext für zusätzliche Informationen: Version des Handbuchs, Sprache, Gültigkeitsbereich, Datum der letzten Aktualisierung oder Hinweise wie „Kapitel 5 enthält die Firmware-Update-Anleitung".

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__MANUAL` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Anwendung, Blade Server, Kabel, Mobilfunkvertrag, Client, Enclosure, Lizenz, Monitor u.a. |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Bezeichnung** | `title` | Text |
| **Handbuchdatei** | `manual` | Objekt-Browser (Verknüpfung) |
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
        "category": "C__CATG__MANUAL",
        "data": {
            "title": "Herstellerhandbuch Dell PowerEdge R750",
            "manual": 2087,
            "description": "Version 3.2, Englisch, Stand 2025-11. Enthält Firmware-Update-Anleitung in Kapitel 5."
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
        "category": "C__CATG__MANUAL"
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
        "category": "C__CATG__MANUAL",
        "entry": 5,
        "data": {
            "title": "Herstellerhandbuch Dell PowerEdge R750 (aktualisiert)",
            "description": "Version 4.0, Stand 2026-03. Neue Firmware-Kompatibilitätsmatrix ergänzt."
        }
    },
    "id": 3
}
```
