---
title: "Kategorie: Zugewiesener Arbeitsplatz"
description: Dokumentation der Kategorie Zugewiesener Arbeitsplatz in i-doit
icon:
status:
lang: de
---

# Kategorie: Zugewiesener Arbeitsplatz

Die Kategorie **Zugewiesener Arbeitsplatz** ordnet ein Gerät einem Arbeitsplatz-Objekt zu. Sie ist eine **Multi-Value-Kategorie** -- ein Gerät kann mehreren Arbeitsplätzeen zugewiesen sein (z.B. ein Drucker, der von zwei benachbarten Schreibtischen genutzt wird).

!!! tip "Gegenstueck: Logische Geräte"
    Diese Kategorie ist das Gegenstueck zur Kategorie **Zugewiesene logische Geräte** auf dem Arbeitsplatz-Objekt. Wenn du hier einen Monitor dem Arbeitsplatz "AP-042" zuweist, erscheint der Monitor automatisch in der Liste der logischen Geräte von AP-042. Die Verknüpfung muss nur von einer Seite gepflegt werden.

## Verwendung

Typische Anwendungsfälle:

- **Arbeitsplatzausstattung dokumentieren**: Welcher Monitor, welche Tastatur, welches Telefon und welcher Client-PC gehören zu Schreibtisch AP-042? Über die Arbeitsplatz-Zuordnung lässt sich die gesamte Ausstattung eines physischen Arbeitsplatzes nachvollziehen -- wichtig für Umzüge, Neuausstattung und Inventur.
- **Umzugsplanung**: Beim Büroumzug zeigt ein Report pro Arbeitsplatz alle zugewiesenen Geräte. So weiss das Umzugsteam genau, was von welchem Schreibtisch abgebaut und am neuen Standort wieder aufgebaut werden muss.
- **Onboarding und Offboarding**: Beim Eintritt eines neuen Mitarbeiters wird dem Arbeitsplatz-Objekt die benötigte Hardware zugewiesen. Beim Austritt dient die Liste als Checkliste für die Ruecknahme.
- **Kosten pro Arbeitsplatz**: In Kombination mit der Kategorie Buchhaltung lässt sich per Report ermitteln, welche Gerätewerte an einem Arbeitsplatz gebunden sind.

[![Zugewiesener Arbeitsplatz](../../assets/images/de/grundlagen/kategorien/assigned-workstation.png)](../../assets/images/de/grundlagen/kategorien/assigned-workstation.png)

## Felder

### Übergeordnetes Objekt

Das Arbeitsplatz-Objekt, dem dieses Gerät zugeordnet wird. Im Objekt-Browser werden nur Objekte angezeigt, die die Kategorie **Zugewiesene logische Geräte** besitzen -- typischerweise Objekte vom Typ `Arbeitsplatz`. Dieses Feld stellt die eigentliche Verknüpfung her: es verknüpft das aktuelle Gerät (Monitor, Client, Drucker, Telefon) mit dem Arbeitsplatz.

### Beschreibung

Freitext für Zusatzinformationen zur Zuweisung: z.B. "Zweit-Monitor, nur temporär bis Umzug Q3" oder "Leihgerät, Rückgabe bis 30.06.".

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__ASSIGNED_WORKSTATION` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Client, Monitor, Drucker u.a. |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Übergeordnetes Objekt** | `parent` | Objekt-Browser (Verknüpfung) |
| **Beschreibung** | `description` | Textfeld (mehrzeilig) |

### API-Beispiele

#### Eintrag erstellen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "object": 501,
        "category": "C__CATG__ASSIGNED_WORKSTATION",
        "data": {
            "parent": 200,
            "description": "Hauptmonitor, 27 Zoll, HDMI-Anschluss"
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
        "object": 501,
        "category": "C__CATG__ASSIGNED_WORKSTATION"
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
        "object": 501,
        "category": "C__CATG__ASSIGNED_WORKSTATION",
        "entry": 1,
        "data": {
            "parent": 205,
            "description": "Umzug 2026-04: Monitor von AP-042 nach AP-047 verschoben."
        }
    },
    "id": 3
}
```
