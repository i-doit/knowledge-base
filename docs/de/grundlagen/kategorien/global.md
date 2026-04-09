---
title: "Kategorie: Allgemein"
description: Dokumentation der Kategorie Allgemein in i-doit
icon:
status:
lang: de
---

# Kategorie: Allgemein

Die Kategorie **Allgemein** ist die zentrale Basiskategorie jedes Objekts in i-doit. Sie ist bei allen Objekttypen vorhanden und wird automatisch angelegt, sobald ein Objekt erstellt wird. Sie enthält die administrative Grundinformation (Name, Einsatzzweck, CMDB-Status) und dient als Ausgangspunkt für Filterung und Suche in der CMDB.

## Verwendung

Typische Anwendungsfälle:

- **CMDB-Status pflegen**: Mit dem CMDB-Status (`In Betrieb`, `In Planung`, `Außer Betrieb` etc.) lässt sich der Lebenszyklus eines Objekts abbilden. Viele Auswertungen und Reports filtern gezielt nach diesem Status.
- **Einsatzzweck dokumentieren**: Das Feld `Einsatzzweck` (`Produktion`, `Test`, `QS`) macht auf einen Blick sichtbar, in welchem Umfeld ein Objekt betrieben wird.
- **Tags für Gruppierung nutzen**: Tags ermöglichen eine flexible Querschnittsgruppierung quer durch alle Objekttypen – z.B. um alle Objekte eines Projekts oder Standorts zu markieren.
- **Beschreibung als Freitext**: Das Beschreibungsfeld eignet sich für Hinweise, die in keinem anderen Feld Platz finden – etwa Besonderheiten in der Konfiguration oder Wartungshinweise.

[![Allgemein](../../assets/images/de/grundlagen/kategorien/global.png)](../../assets/images/de/grundlagen/kategorien/global.png)

## Felder

### Bezeichnung

Der Name des Objekts. Er wird in der gesamten CMDB als primärer Identifikator verwendet – in der Objektliste, in Relationen und in Reports. Der Name sollte eindeutig und sprechend sein, z.B. `srv-web-01` oder `Switch EG Raum 1.12`.

### CMDB-Status

Das wichtigste Pflichtfeld der Kategorie. Bildet den Lebenszyklus eines Objekts ab – von der Planung bis zur Verschrottung. Standardwerte: `Geplant`, `Bestellt`, `Geliefert`, `Montiert`, `In Betrieb`, `Außer Betrieb`, `Verschrottet`. Viele Filter, Reports und automatische Prozesse (z.B. Benachrichtigungen) stützen sich auf diesen Status – er sollte konsequent gepflegt werden.

### Einsatzzweck

Beschreibt den betrieblichen Kontext des Objekts. Typische Werte: `Produktion`, `Test`, `QS`, `Entwicklung`. Das Feld ist erweiterbar – eigene Werte lassen sich jederzeit ergänzen. Hilfreich, um Produktions- und Testumgebungen in Reports zu trennen.

### Tags

Freitext-Tags zur flexiblen Querschnittsgruppierung. Ein Objekt kann beliebig viele Tags haben. Tags lassen sich in der Objektliste filtern und in Reports auswerten. Beispiel: `projekt-migration-2025`, `datacenter-fra01`.

### Beschreibung

Ein freies Textfeld ohne Längenbeschränkung. Hier gehören Informationen hinein, die in keinem strukturierten Feld passen: Besonderheiten in der Konfiguration, Wartungshistorie, Hinweise für den Betrieb.

### Kategorie

Eine freie Klassifizierung des Objekts, unabhängig vom Objekttyp. Kann z.B. genutzt werden, um Objekte nach Abteilung oder Projekt zu gruppieren – ergänzend zu den Tags.

### SYSID

Eine systemweit eindeutige Kennung, die von i-doit automatisch vergeben wird (z.B. `SYSID_1680000001`). Nützlich für die Integration mit externen Systemen, wenn die interne Objekt-ID nicht geeignet ist. Die SYSID ist nach der Erstellung unveränderlich.

!!! info "Automatisch gesetzte Felder"
    **Erstellungsdatum** und **Erstellt von** werden beim Anlegen automatisch gesetzt.
    **Änderungsdatum** und **Zuletzt geändert von** werden bei jeder Speicherung aktualisiert.
    **Objekttyp** wird beim Anlegen festgelegt und kann nicht geändert werden.
    Alle drei Feldpaare sind nicht manuell editierbar und dienen der Nachvollziehbarkeit bei Audits.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__GLOBAL` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Nein |
| **Zugeordnet zu** | Alle Objekttypen |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Bezeichnung** | `title` | Text |
| **Zustand** | `status` | Dialog (Auswahl) |
| **Erstellungsdatum** | `created` | Datum/Zeit |
| **Erstellt von** | `created_by` | Text |
| **Änderungsdatum** | `changed` | Datum/Zeit |
| **Zuletzt geändert von** | `changed_by` | Text |
| **Einsatzzweck** | `purpose` | Dialog+ (erweiterbare Auswahl) |
| **Kategorie** | `category` | Dialog+ (erweiterbare Auswahl) |
| **SYSID** | `sysid` | Text |
| **CMDB-Status** | `cmdb_status` | Dialog (Auswahl) |
| **Objekttyp** | `type` | Dialog (Auswahl) |
| **Tags** | `tag` | Mehrfachauswahl |
| **Beschreibung** | `description` | Textfeld (mehrzeilig) |

### API-Beispiele

#### Eintrag erstellen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "objID": 123,
        "category": "C__CATG__GLOBAL",
        "data": {
            "title": "srv-web-01",
            "cmdb_status": 6,
            "purpose": "Produktion",
            "description": "Primärer Webserver, betrieben im RZ Frankfurt."
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
        "category": "C__CATG__GLOBAL"
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
        "objID": 123,
        "category": "C__CATG__GLOBAL",
        "entry": 1,
        "data": {
            "cmdb_status": 10,
            "description": "Außer Betrieb gesetzt am 2025-04-01."
        }
    },
    "id": 3
}
```
