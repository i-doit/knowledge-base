---
title: "Kategorie: DBMS-Informationen"
description: Dokumentation der Kategorie DBMS-Informationen (Databases) in i-doit
icon:
status:
lang: de
---

# Kategorie: DBMS-Informationen

Die Kategorie **DBMS-Informationen** (im englischen UI als "Databases" bezeichnet) dokumentiert die einzelnen Datenbanken innerhalb einer DBMS-Instanz auf einem Server. Sie ist eine **Multi-Value-Kategorie** -- pro Objekt lassen sich beliebig viele Datenbanken erfassen, denn ein Datenbankserver beherbergt in der Regel mehrere Datenbanken gleichzeitig.

!!! info "Einordnung in die Datenbank-Dokumentationskette"
    Diese Kategorie bildet die dritte Stufe der Datenbank-Kette: **Server** --> **DBMS-Instanz** ([Datenbank-Hierarchie](database.md)) --> **Datenbank** (diese Kategorie) --> **Tabellen** ([Datenbanktabellen](database-table.md)). Bevor hier ein Eintrag angelegt werden kann, muss in der Kategorie [Datenbank-Hierarchie](database.md) mindestens eine Instanz existieren. Die hier erfassten Datenbanken können anschließend mit Schemata verknüpft und in der Kategorie [Datenbanktabellen](database-table.md) bis auf Tabellenebene dokumentiert werden.

## Verwendung

Typische Anwendungsfälle:

- **Datenbankinventar aufbauen**: Erfasse alle Datenbanken eines Servers mit Name, zugehörigem DBMS und Instanz. Zusammen mit der [Softwarezuweisung](application.md) entsteht ein vollständiges Bild der Datenbanklandschaft.
- **Kapazitätsplanung**: Die Felder Größe und Maximale Größe zeigen auf einen Blick, wie viel Speicher eine Datenbank aktuell belegt und welches Limit konfiguriert ist. Reports über diese Felder warnen frühzeitig vor Engpässen.
- **Schema-Zuordnung**: Über das Feld Schemata werden Datenbankschema-Objekte (Objekttyp "Datenbankschema") zugewiesen. So entsteht die Verbindung zur spezifischen Kategorie [Datenbankschema](database-assignment.md), in der Schema-Details wie Storage Engine dokumentiert werden.
- **Impact-Analyse**: Wenn eine Datenbank gewartet oder migriert wird, zeigt die Verkettung Server --> Instanz --> Datenbank --> Tabellen sofort, welche Anwendungen und Tabellen betroffen sind.
- **Compliance und Datenschutz**: In Kombination mit der Kategorie [Datenbanktabellen](database-table.md) lässt sich nachvollziehen, in welcher Datenbank personenbezogene Daten gespeichert werden -- eine häufige Anforderung aus DSGVO-Audits.

[![DBMS-Informationen](../../assets/images/de/grundlagen/kategorien/database-sa.png)](../../assets/images/de/grundlagen/kategorien/database-sa.png)

## Felder

### Zugewiesenes DBMS

Verknüpfung zum DBMS, das diese Datenbank verwaltet. Auswahlfeld -- die verfügbaren Werte stammen aus den DBMS-Einträgen, die auf dem aktuellen Server über die [Softwarezuweisung](application.md) installiert sind. Damit i-doit weiss, welches Datenbankmanagementsystem für diese Datenbank zuständig ist.

### Instanz

Die DBMS-Instanz, unter der diese Datenbank läuft. Auswahlfeld -- die Werte stammen aus der Kategorie [Datenbank-Hierarchie](database.md) des aktuellen Objekts. Auf einem Server mit mehreren Instanzen (z.B. einer produktiven und einer Test-Instanz) wird hier die richtige zugeordnet.

### Schemata

Verknüpfung zu einem oder mehreren Datenbankschema-Objekten (Objekttyp "Datenbankschema"). Mehrfachauswahl -- so lassen sich alle Schemata einer Datenbank zuweisen. Die Schema-Objekte werden in der spezifischen Kategorie [Datenbankschema](database-assignment.md) weiter dokumentiert (Storage Engine, Beschreibung etc.).

### Bezeichnung

Der Name der Datenbank, z.B. `idoit_data`, `wordpress_prod` oder `erp_main`. Dieser Wert erscheint in der Listenansicht und in Reports.

### Größe und Einheit

Die aktuelle Größe der Datenbank. Die Einheit (MB, GB, TB) wird separat angegeben. Dieser Wert sollte regelmäßig aktualisiert werden -- idealerweise automatisiert über die API oder einen JDisc-Import.

### Maximale Größe und Einheit

Das konfigurierte Größenlimit der Datenbank. Wenn die aktuelle Größe sich diesem Wert nähert, ist ein Kapazitäts-Upgrade erforderlich. Dialog+-Feld für die Einheit -- so können auch ungewöhnliche Einheiten ergänzt werden.

### Beschreibung

Freitext für zusätzliche Angaben: Zweck der Datenbank, zugehörige Anwendung, Backup-Strategie, Replikationsstatus oder Verantwortlichkeiten.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__DATABASE_SA` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Server |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Zugewiesenes DBMS** | `assigned_database` | Dialog (Auswahl) |
| **Instanz** | `assigned_instance` | Dialog (Auswahl) |
| **Schemata** | `assigned_schemas` | Mehrfachauswahl |
| **Bezeichnung** | `title` | Text |
| **Größe** | `size` | Dezimalzahl |
| **Einheit** | `size_unit` | Dialog (Auswahl) |
| **Maximale Größe** | `max_size` | Dezimalzahl |
| **Max. Einheit** | `max_size_unit` | Dialog+ (erweiterbare Auswahl) |
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
        "category": "C__CATG__DATABASE_SA",
        "data": {
            "assigned_database": 1,
            "assigned_instance": 2,
            "title": "idoit_data",
            "size": 12.5,
            "size_unit": 3,
            "max_size": 50.0,
            "max_size_unit": 3,
            "description": "i-doit Mandantendatenbank, taegliches Backup via mysqldump"
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
        "category": "C__CATG__DATABASE_SA"
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
        "category": "C__CATG__DATABASE_SA",
        "entry": 8,
        "data": {
            "size": 18.3,
            "description": "Update 2026-04: Datenbankgroesse nach Archivierung auf 18.3 GB gesunken."
        }
    },
    "id": 3
}
```
