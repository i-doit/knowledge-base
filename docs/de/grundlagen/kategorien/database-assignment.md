---
title: "Kategorie: Datenbankschema (Zuweisung)"
description: Dokumentation der spezifischen Kategorie Datenbankschema in i-doit
icon:
status:
lang: de
---

# Kategorie: Datenbankschema

Die Kategorie **Datenbankschema** (im englischen UI als "Database assignment" bezeichnet) ist eine **spezifische Kategorie** auf Objekten vom Typ "Datenbankschema". Sie dokumentiert die Zuordnung eines Schemas zu einer Datenbankinstanz sowie grundlegende technische Eigenschaften des Schemas. Pro Objekt existiert **ein Eintrag** (Single-Value).

!!! info "Spezifische Kategorie auf Schema-Objekten"
    Anders als die globalen Datenbank-Kategorien ([Datenbank-Hierarchie](database.md), [DBMS-Informationen](database-sa.md), [Datenbanktabellen](database-table.md)) ist diese Kategorie **nicht** auf Servern zu finden, sondern auf Objekten vom Typ "Datenbankschema". Ein Schema-Objekt repräsentiert z.B. das Schema `public` in PostgreSQL oder `dbo` in SQL Server. Die Verknüpfung zurück zur Datenbank-Kette erfolgt über das Feld "Datenbankinstanz".

!!! tip "Wann braucht man Schema-Objekte?"
    Schema-Objekte lohnen sich, wenn eine differenzierte Dokumentation nötig ist -- etwa bei Datenbanken mit mehreren Schemata (PostgreSQL, Oracle), bei Compliance-Anforderungen (welches Schema enthält personenbezogene Daten?) oder wenn Anwendungen über die Kategorie [Softwarezuweisung](application.md) gezielt einem Schema zugeordnet werden sollen.

## Verwendung

Typische Anwendungsfälle:

- **Schema-Zuordnung zur Infrastruktur**: Über die Felder "Läuft auf" und "Datenbankinstanz" wird das Schema einem konkreten Server und einer Instanz zugeordnet. So entsteht die vollständige Kette von der Hardware bis zum logischen Schema.
- **Storage-Engine dokumentieren**: Gerade bei MySQL/MariaDB ist die Storage Engine (InnoDB, MyISAM, Aria) pro Schema relevant für Performance-Tuning, Transaktionssicherheit und Backup-Strategie. Dieses Feld hält fest, welche Engine das Schema verwendet.
- **Multi-Schema-Umgebungen abbilden**: In PostgreSQL oder Oracle arbeiten Anwendungen oft mit mehreren Schemata innerhalb einer Datenbank. Jedes Schema wird als eigenes Objekt angelegt und über diese Kategorie seiner Instanz zugeordnet.
- **Impact-Analyse**: Wenn ein Schema migriert oder umgebaut wird, zeigt die Verknüpfung sofort, auf welchem Server und in welcher Instanz es läuft. In Kombination mit der Kategorie [Datenbanktabellen](database-table.md) sind auch die betroffenen Tabellen sichtbar.

[![Datenbankschema](../../assets/images/de/grundlagen/kategorien/database-assignment.png)](../../assets/images/de/grundlagen/kategorien/database-assignment.png)

## Felder

### Läuft auf

Verknüpfung zum Server-Objekt, auf dem das Schema betrieben wird. Objekt-Browser -- hier wird der physische oder virtuelle Server ausgewählt, auf dem die zugehörige Datenbankinstanz läuft. Dieses Feld stellt die Verbindung zur Hardware-Ebene her.

### Datenbankinstanz

Die Datenbankinstanz, der dieses Schema zugeordnet ist. Auswahlfeld -- die Werte stammen aus den Instanzen, die im verknüpften Server-Objekt über die Kategorie [Datenbank-Hierarchie](database.md) angelegt sind. So weiss i-doit, in welcher Instanz das Schema lebt.

### Bezeichnung

Der Name des Schemas, z.B. `public`, `dbo`, `app_schema` oder `idoit_data`. Dieser Wert erscheint in der Listenansicht und in Reports.

### Storage-Engine

Die Speicher-Engine des Schemas, z.B. `InnoDB`, `MyISAM`, `Aria` oder `PostgreSQL`. Bei MySQL/MariaDB bestimmt die Engine, ob Transaktionen, Row-Level-Locking und Foreign Keys unterstützt werden. Bei anderen DBMS dient das Feld zur Dokumentation der verwendeten Speichertechnologie.

### Beschreibung

Freitext für zusätzliche Angaben: Zeichensatz und Collation (z.B. `utf8mb4_unicode_ci`), Zweck des Schemas, zugehörige Anwendung, Zugriffsberechtigungen oder Besonderheiten der Konfiguration.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATS__DATABASE_SCHEMA` |
| **Typ** | Spezifische Kategorie |
| **Multi-Value** | Nein |
| **Zugeordnet zu** | Datenbankschema (Objekttyp) |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Läuft auf** | `link` | Objekt-Verknüpfung (Connection) |
| **Datenbankinstanz** | `instance` | Dialog (Auswahl) |
| **Bezeichnung** | `title` | Text |
| **Storage-Engine** | `storage_engine` | Text |
| **Beschreibung** | `description` | Textfeld (mehrzeilig) |

### API-Beispiele

#### Eintrag erstellen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "object": 5020,
        "category": "C__CATS__DATABASE_SCHEMA",
        "data": {
            "link": 4711,
            "instance": 3,
            "title": "idoit_data",
            "storage_engine": "InnoDB",
            "description": "i-doit Mandantenschema, Zeichensatz utf8mb4, Collation utf8mb4_unicode_ci"
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
        "object": 5020,
        "category": "C__CATS__DATABASE_SCHEMA"
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
        "object": 5020,
        "category": "C__CATS__DATABASE_SCHEMA",
        "entry": 1,
        "data": {
            "storage_engine": "InnoDB",
            "description": "Migration 2026-04: Zeichensatz von utf8 auf utf8mb4 umgestellt."
        }
    },
    "id": 3
}
```
