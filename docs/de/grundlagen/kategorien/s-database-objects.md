---
title: "Kategorie: Datenbank-Objekte"
description: Dokumentation der Kategorie Datenbank-Objekte (C__CATS__DATABASE_OBJECTS) in i-doit
icon:
status:
lang: de
---

# Kategorie: Datenbank-Objekte

Die Kategorie **Datenbank-Objekte** dokumentiert die einzelnen Objekte innerhalb eines Datenbankschemas -- also Views, Stored Procedures, Functions, Trigger, Sequences und andere benannte Elemente. Sie ist eine **Multi-Value-Kategorie**, da ein Schema typischerweise viele solcher Objekte enthält.

## Verwendung

Typische Anwendungsfälle:

- **Schema-Inventar erstellen**: Alle relevanten Datenbank-Objekte eines Schemas erfassen -- von kritischen Views über zentrale Stored Procedures bis hin zu Trigger-Logik. So entsteht ein dokumentiertes Inventar der Datenbankstruktur.
- **Impact-Analyse bei Schemaänderungen**: Bevor eine Tabelle geändert oder gelöscht wird, zeigt die Liste der Datenbank-Objekte, welche Views, Prozeduren oder Functions betroffen sein könnten. Das reduziert das Risiko bei Deployments.
- **Applikationsabhängigkeiten klären**: Wenn eine Applikation gezielt bestimmte Views oder Stored Procedures nutzt, kann dies hier dokumentiert werden. In Kombination mit der Kategorie [Datenbankzugriff](s-database-access.md) ergibt sich ein klares Bild, welche Applikation welche Objekte verwendet.
- **Automatisierter Import**: Über die API lassen sich Datenbank-Objekte automatisch aus Datenbankkatalogtabellen (z.B. `information_schema.routines` oder `ALL_OBJECTS`) importieren, um die Dokumentation aktuell zu halten.

!!! info "Datenbank-Kategoriekette"
    Diese Kategorie gehört zur Datenbank-Kategoriekette in i-doit. Zusammen mit [Datenbankschema](s-database-schema.md), [Datenbank-Gateway](s-database-gateway.md), [Datenbank-Links](s-database-links.md) und [Datenbankzugriff](s-database-access.md) bilden diese Kategorien eine vollständige Datenbankdokumentation.

[![Datenbank-Objekte](../../assets/images/de/grundlagen/kategorien/s-database-objects.png)](../../assets/images/de/grundlagen/kategorien/s-database-objects.png)

## Felder

### Bezeichnung

Der Name des Datenbank-Objekts, z.B. `v_active_users`, `sp_generate_report` oder `trg_audit_log`. Sollte exakt dem Namen in der Datenbank entsprechen, um eine eindeutige Zuordnung zu ermöglichen.

### Typ

Der Typ des Datenbank-Objekts. Dialog-Feld mit Werten wie `View`, `Procedure`, `Function`, `Trigger`, `Sequence`, `Package` u.a. Ermöglicht die Filterung und Auswertung nach Objekttyp in Reports.

!!! tip "Tipp: Reports nach Objekttyp"
    Im Report Manager lässt sich nach dem Feld *Typ* filtern, z.B. um alle Stored Procedures über sämtliche Schemata hinweg aufzulisten -- nützlich bei Audits oder Migrationsplanung.

### Beschreibung

Freitext für ergänzende Angaben: Zweck des Objekts, zugehörige Business-Logik, Abhängigkeiten zu Tabellen, Performance-Hinweise oder Migrationsstatus.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATS__DATABASE_OBJECTS` |
| **Typ** | Spezifische Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Datenbankschema |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Bezeichnung** | `title` | Text |
| **Typ** | `database_object` | Dialog (Auswahl) |
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
        "category": "C__CATS__DATABASE_OBJECTS",
        "data": {
            "title": "v_active_users",
            "database_object": "View",
            "description": "View auf aktive Benutzerkonten, genutzt vom User-Management-Modul"
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
        "category": "C__CATS__DATABASE_OBJECTS"
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
        "category": "C__CATS__DATABASE_OBJECTS",
        "entry": 1,
        "data": {
            "title": "v_active_users_v2",
            "description": "Aktualisierte View mit zusätzlichem Filter auf Mandant"
        }
    },
    "id": 3
}
```
