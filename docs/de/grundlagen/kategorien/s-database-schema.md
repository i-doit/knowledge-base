---
title: "Kategorie: Datenbankschema"
description: Dokumentation der Kategorie Datenbankschema (C__CATS__DATABASE_SCHEMA) in i-doit
icon:
status:
lang: de
---

# Kategorie: Datenbankschema

Die Kategorie **Datenbankschema** dokumentiert die Kerninformationen eines Datenbankschemas -- also die logische Einheit, die Tabellen, Views und weitere Objekte zusammenfasst. Sie bildet das Zentrum der Datenbank-Kategoriekette in i-doit und verknüpft das Schema mit seiner Instanz und dem ausführenden Server.

## Verwendung

Typische Anwendungsfälle:

- **Datenbanklandschaft strukturieren**: Jedes Datenbankschema wird als eigenes i-doit-Objekt vom Typ *Datenbankschema* angelegt. Über diese Kategorie erhält es seine Basisdaten: Name, Storage-Engine und die Zuordnung zur Datenbankinstanz.
- **Instanz-Zuordnung herstellen**: Das Feld *Database instance* verknüpft das Schema mit der übergeordneten Datenbankinstanz. So entsteht eine klare Hierarchie: Server > Instanz > Schema.
- **Laufzeit-Umgebung dokumentieren**: Das Feld *Runs on* referenziert den Server oder die virtuelle Maschine, auf der das Schema betrieben wird. Dadurch werden Abhängigkeiten zwischen Infrastruktur und Datenbanken sichtbar.
- **Storage-Engine festhalten**: Gerade bei MySQL/MariaDB ist die Storage-Engine (z.B. `InnoDB`, `MyISAM`, `Aria`) relevant für Performance, Transaktionssicherheit und Backup-Strategien. Hier lässt sich diese Information pro Schema dokumentieren.

!!! info "Datenbank-Kategoriekette"
    Diese Kategorie ist das Herzstück der Datenbank-Kategoriekette. Die Unterkategorien [Datenbank-Gateway](s-database-gateway.md), [Datenbank-Links](s-database-links.md), [Datenbank-Objekte](s-database-objects.md) und [Datenbankzugriff](s-database-access.md) ergänzen das Schema um Gateway-Verbindungen, Schema-Links, interne Objekte und Zugriffsinformationen.

[![Datenbankschema](../../assets/images/de/grundlagen/kategorien/s-database-schema.png)](../../assets/images/de/grundlagen/kategorien/s-database-schema.png)

## Felder

### Runs on

Verknüpfung zum Server oder zur virtuellen Maschine, auf der das Datenbankschema betrieben wird. Über den Objekt-Browser lässt sich das entsprechende Infrastruktur-Objekt auswählen. Diese Verknüpfung ist entscheidend für Impact-Analysen: Fällt der Server aus, sind alle darauf laufenden Schemata betroffen.

### Database instance

Die Datenbankinstanz, zu der dieses Schema gehört, z.B. eine Oracle-SID, eine PostgreSQL-Cluster-Instanz oder eine MySQL-Instanz. Dialog-Feld -- die verfügbaren Instanzen ergeben sich aus den in i-doit angelegten Instanz-Objekten.

### Bezeichnung

Der Name des Datenbankschemas, z.B. `idoit_production`, `erp_main` oder `HR_DATA`. Sollte exakt dem Schema-Namen in der Datenbank entsprechen.

### Storage-Engine

Die verwendete Storage-Engine, z.B. `InnoDB`, `MyISAM`, `Aria` oder `PostgreSQL` (bei Datenbanken ohne wählbare Engine). Freitextfeld -- ermöglicht die Dokumentation beliebiger Engine-Typen.

### Beschreibung

Freitext für ergänzende Angaben: Zweck des Schemas, zugehörige Applikation, Backup-Frequenz, Zeichensatz, Collation oder Besonderheiten der Konfiguration.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATS__DATABASE_SCHEMA` |
| **Typ** | Spezifische Kategorie |
| **Multi-Value** | Nein |
| **Zugeordnet zu** | Datenbankschema |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Runs on** | `link` | Ganzzahl |
| **Database instance** | `instance` | Dialog (Auswahl) |
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
        "object": 123,
        "category": "C__CATS__DATABASE_SCHEMA",
        "data": {
            "link": 45,
            "instance": "MySQL 8.0 Production",
            "title": "idoit_production",
            "storage_engine": "InnoDB",
            "description": "Produktionsschema der i-doit CMDB, UTF-8, tägliches Backup um 02:00 Uhr"
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
        "object": 123,
        "category": "C__CATS__DATABASE_SCHEMA",
        "entry": 1,
        "data": {
            "storage_engine": "InnoDB",
            "description": "Migration auf InnoDB abgeschlossen, vorher MyISAM"
        }
    },
    "id": 3
}
```
