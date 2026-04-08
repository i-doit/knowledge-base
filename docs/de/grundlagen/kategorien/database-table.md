---
title: "Kategorie: Datenbanktabellen"
description: Dokumentation der Kategorie Datenbanktabellen in i-doit
icon:
status:
lang: de
---

# Kategorie: Datenbanktabellen

Die Kategorie **Datenbanktabellen** (im englischen UI als "Database tables" bezeichnet) dokumentiert die einzelnen Tabellen innerhalb einer Datenbank. Sie ist eine **Multi-Value-Kategorie** -- pro Objekt lassen sich beliebig viele Tabellen erfassen, denn eine Datenbank besteht typischerweise aus Dutzenden bis Hunderten von Tabellen.

!!! info "Letzte Stufe der Datenbank-Dokumentationskette"
    Diese Kategorie bildet die unterste Ebene der vierstufigen Kette: **Server** --> **DBMS-Instanz** ([Datenbank-Hierarchie](database.md)) --> **Datenbank** ([DBMS-Informationen](database-sa.md)) --> **Tabellen** (diese Kategorie). Hier wird die Granularität erreicht, die für Datenschutz-Dokumentation, Kapazitätsplanung und Impact-Analysen auf Tabellenebene nötig ist.

!!! tip "Compliance-Anwendungsfall: Personenbezogene Daten"
    Für DSGVO-Dokumentation oder ISO-27001-Audits lässt sich über Reports auswerten, welche Tabellen personenbezogene Daten enthalten. Tragen Sie im Beschreibungsfeld oder über benutzerdefinierte Kategorien ein, ob eine Tabelle PII (Personally Identifiable Information) enthält -- so entsteht ein Verzeichnis der Verarbeitungstätigkeiten auf technischer Ebene.

## Verwendung

Typische Anwendungsfälle:

- **Tabelleninventar aufbauen**: Erfasse alle relevanten Tabellen einer Datenbank mit Name, Zeilenanzahl und Größe. Besonders bei geschäftskritischen Datenbanken lohnt es sich, zumindest die wichtigsten Tabellen zu dokumentieren.
- **Kapazitätsplanung auf Tabellenebene**: Die Felder Größe und Maximale Größe zeigen, welche Tabellen den meisten Speicher verbrauchen. Zusammen mit der Zeilenanzahl lassen sich Wachstumstrends erkennen, bevor der Plattenplatz knapp wird.
- **Impact-Analyse bei Migrationen**: Wenn eine Datenbank migriert oder ein Schema umgebaut wird, zeigt die Tabellenliste sofort, welche Strukturen betroffen sind. Die Zuordnung zu Datenbank und Schema macht den Kontext klar.
- **Datenschutz und Compliance**: Welche Tabellen enthalten Kundendaten, Zahlungsinformationen oder Gesundheitsdaten? Diese Information gehört in die Beschreibung oder in benutzerdefinierte Felder und ist bei Audits Gold wert.
- **Schema-Größenvergleich**: Die Schema-Größen-Felder aggregieren die Größe auf Schema-Ebene und ermöglichen einen schnellen Vergleich zwischen Schemata.

[![Datenbanktabellen](../../assets/images/de/grundlagen/kategorien/database-table.png)](../../assets/images/de/grundlagen/kategorien/database-table.png)

## Felder

### Bezeichnung

Der Name der Tabelle, z.B. `isys_obj`, `customers`, `audit_log` oder `wp_posts`. Dieser Wert erscheint in der Listenansicht und in Reports.

### Zeilenanzahl

Die Anzahl der Datensätze in der Tabelle. Dieser Wert gibt einen Eindruck von der Größe und dem Wachstumspotenzial. Bei grossen Tabellen (Millionen von Zeilen) kann dies Hinweise auf nötige Archivierung oder Partitionierung geben.

### Zugewiesene Datenbank

Verknüpfung zur Datenbank, zu der diese Tabelle gehört. Auswahlfeld -- die Werte stammen aus den Einträgen der Kategorie [DBMS-Informationen](database-sa.md) auf dem aktuellen Objekt.

### Instanz

Zeigt die Instanz an, unter der die zugewiesene Datenbank läuft. Dieses Feld wird automatisch aus der Datenbank-Zuordnung abgeleitet und dient der Übersicht.

### Schema

Das Datenbankschema, dem diese Tabelle zugeordnet ist. Auswahlfeld -- die Werte stammen aus den Schemata, die in der Kategorie [DBMS-Informationen](database-sa.md) zugewiesen wurden. Bei Datenbanken mit mehreren Schemata (z.B. PostgreSQL) ist diese Zuordnung wichtig, um Tabellen dem richtigen Schema zuzuweisen.

### Schema-Größe und Einheit

Die aggregierte Größe des Schemas, zu dem die Tabelle gehört. Gibt einen schnellen Überblick über den Gesamtspeicherverbrauch auf Schema-Ebene.

### Größe und Einheit

Die Größe der einzelnen Tabelle. Die Einheit (KB, MB, GB) wird separat angegeben. Bei grossen Tabellen ist dieser Wert entscheidend für die Kapazitätsplanung.

### Maximale Größe und Einheit

Das konfigurierte Größenlimit der Tabelle, sofern vorhanden (z.B. über Tablespace-Limits oder Partitionierung). Dialog+-Feld für die Einheit.

### Beschreibung

Freitext für zusätzliche Angaben: Zweck der Tabelle, enthaltene Datenarten (personenbezogen, finanziell, technisch), Abhängigkeiten zu anderen Tabellen, Indizierung, Partitionierungsstrategie oder Archivierungsregeln.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__DATABASE_TABLE` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Server |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Bezeichnung** | `title` | Text |
| **Zeilenanzahl** | `row_count` | Text |
| **Zugewiesene Datenbank** | `assigned_database` | Dialog (Auswahl) |
| **Instanz** | `instance` | Text (schreibgeschützt) |
| **Schema** | `assigned_schema` | Dialog (Auswahl) |
| **Schema-Größe** | `schema_size` | Dezimalzahl |
| **Schema-Größe Einheit** | `schema_size_unit` | Dialog (Auswahl) |
| **Größe** | `size` | Dezimalzahl |
| **Größe Einheit** | `size_unit` | Dialog (Auswahl) |
| **Maximale Größe** | `max_size` | Dezimalzahl |
| **Max. Größe Einheit** | `max_size_unit` | Dialog+ (erweiterbare Auswahl) |
| **Beschreibung** | `description` | Textfeld (mehrzeilig) |

### API-Beispiele

#### Eintrag erstellen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "object": 4711,
        "category": "C__CATG__DATABASE_TABLE",
        "data": {
            "title": "isys_obj",
            "row_count": "245000",
            "assigned_database": 2,
            "assigned_schema": 1,
            "size": 185.4,
            "size_unit": 3,
            "max_size": 500.0,
            "max_size_unit": 3,
            "description": "Zentrale Objekttabelle der i-doit CMDB. Enthaelt alle CI-Stammdaten."
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
        "object": 4711,
        "category": "C__CATG__DATABASE_TABLE"
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
        "object": 4711,
        "category": "C__CATG__DATABASE_TABLE",
        "entry": 42,
        "data": {
            "row_count": "312000",
            "size": 220.8,
            "description": "Update 2026-04: Tabelle nach Datenbereinigung auf 312k Zeilen gewachsen."
        }
    },
    "id": 3
}
```
