---
title: "Kategorie: Datenbank-Hierarchie"
description: Dokumentation der Kategorie Datenbank-Hierarchie (DBMS information) in i-doit
icon:
status:
lang: de
---

# Kategorie: Datenbank-Hierarchie

Die Kategorie **Datenbank-Hierarchie** (im englischen UI als "DBMS information" bezeichnet) dokumentiert die Datenbankinstanzen, die auf einem Server laufen. Sie ist eine **Multi-Value-Kategorie** -- pro Objekt lassen sich beliebig viele Instanzen erfassen, z.B. wenn auf einem Datenbankserver sowohl eine produktive als auch eine Test-Instanz betrieben werden.

!!! info "Teil der Datenbank-Dokumentationskette"
    i-doit bildet Datenbanklandschaften in einer vierstufigen Kette ab: **Server** (Hardware) --> **DBMS-Instanz** (diese Kategorie) --> **Schema** --> **Tabellen**. Die Kategorie Datenbank-Hierarchie ist das Bindeglied zwischen dem physischen Server und den logischen Datenbanken darauf. Erst wenn hier eine Instanz angelegt ist, lassen sich in den Kategorien [DBMS-Informationen](database-sa.md) und [Datenbanktabellen](database-table.md) die darunterliegenden Strukturen zuordnen.

## Verwendung

Typische Anwendungsfälle:

- **DBMS-Instanzen inventarisieren**: Erfasse Name, Typ und Version jeder Datenbankinstanz auf einem Server. Zusammen mit der [Softwarezuweisung](software-assignment.md) entsteht ein vollständiges Bild, welches DBMS in welcher Version wo läuft.
- **Netzwerkzugang dokumentieren**: Über die Felder Port und Port-Name wird festgehalten, unter welchem Netzwerkport die Instanz erreichbar ist -- unverzichtbar für Firewall-Regeln und Monitoring-Konfigurationen.
- **Installationspfade nachvollziehen**: Das Pfad-Feld dokumentiert, wo die Instanz im Dateisystem installiert ist. Bei Fehleranalysen oder Migrationen spart das die Suche auf dem Server.
- **Versionsmanagement und Lifecycle**: Über Reports lässt sich auswerten, welche Server noch alte DBMS-Versionen verwenden. So lassen sich End-of-Life-Risiken frühzeitig erkennen und Upgrade-Plaene erstellen.
- **Datenbank-Kette aufbauen**: Erst nachdem hier eine Instanz angelegt ist, können in der Kategorie [DBMS-Informationen](database-sa.md) Datenbanken zugeordnet und in der Kategorie [Datenbanktabellen](database-table.md) einzelne Tabellen erfasst werden.

[![Datenbank-Hierarchie](../../assets/images/de/grundlagen/kategorien/database.png)](../../assets/images/de/grundlagen/kategorien/database.png)

## Felder

### DBMS

Verknüpfung zum Datenbankmanagementsystem, das diese Instanz betreibt. Über den Objekt-Browser wird ein DBMS-Objekt (z.B. "MySQL" oder "PostgreSQL") ausgewählt. Dieses DBMS-Objekt muss vorher angelegt und über die [Softwarezuweisung](software-assignment.md) dem Server zugewiesen sein. Durch diese Verknüpfung weiss i-doit, welches DBMS-Produkt hinter der Instanz steht.

### Instanzname

Der Name der Datenbankinstanz, z.B. `MSSQLSERVER`, `orcl` oder `pg_main`. Bei Microsoft SQL Server entspricht dies dem benannten Instanznamen, bei Oracle der SID oder dem Service Name. Dieser Wert erscheint in der Listenansicht und in Reports.

### Instanztyp

Klassifiziert die Instanz, z.B. als `Production`, `Test`, `Development` oder `Staging`. Dialog+-Feld -- eigene Werte lassen sich bei Bedarf ergänzen. Diese Unterscheidung ist wichtig für Reports und für die Einschätzung der Kritikalitaet.

### Hersteller

Zeigt den Hersteller des zugewiesenen DBMS an. Dieses Feld wird automatisch aus der DBMS-Verknüpfung befuellt und ist schreibgeschützt.

### Version

Die installierte Version des DBMS auf dieser Instanz, z.B. `16.0.1000` (SQL Server 2022) oder `15.4` (PostgreSQL). Dialog+-Feld -- die Versionsliste stammt aus dem verknüpften DBMS-Objekt. Essenziell für Patch-Management und Compliance-Prüfungen.

### Pfad

Der Installationspfad der Datenbankinstanz im Dateisystem, z.B. `/var/lib/mysql` oder `C:\Program Files\Microsoft SQL Server\MSSQL16.MSSQLSERVER`. Hilfreich bei Migrationen, Backup-Konfigurationen und Fehlersuche.

### Port

Der Netzwerkport, unter dem die Instanz erreichbar ist, z.B. `3306` (MySQL), `5432` (PostgreSQL) oder `1433` (SQL Server). Dieses Feld ist wichtig für Firewall-Regeln, Monitoring und die Konfiguration von Anwendungen, die auf die Datenbank zugreifen.

### Port-Name

Ein optionaler beschreibender Name für den Port, z.B. `mysql-prod` oder `pg-replica`. Nuetzlich, wenn mehrere Instanzen auf unterschiedlichen Ports laufen und eine sprechende Bezeichnung die Übersicht erleichtert.

### Beschreibung

Freitext für zusätzliche Angaben: Cluster-Konfiguration, Replikationsrolle (Primary/Replica), besondere Startparameter, Wartungsfenster oder Ansprechpartner.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__DATABASE` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Server |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **DBMS** | `assigned_dbms` | Objekt-Browser (Verknüpfung) |
| **Instanzname** | `instance_name` | Text |
| **Instanztyp** | `instance_type` | Dialog+ (erweiterbare Auswahl) |
| **Hersteller** | `manufacturer` | Text (schreibgeschützt) |
| **Version** | `version` | Dialog+ (erweiterbare Auswahl) |
| **Pfad** | `path` | Text |
| **Port** | `port` | Text |
| **Port-Name** | `port_name` | Text |
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
        "category": "C__CATG__DATABASE",
        "data": {
            "assigned_dbms": 902,
            "instance_name": "pg_production",
            "instance_type": "Production",
            "version": "15.4",
            "path": "/var/lib/postgresql/15/main",
            "port": "5432",
            "port_name": "pg-prod",
            "description": "Primaere Produktionsinstanz, Streaming Replication zu pg_replica"
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
        "category": "C__CATG__DATABASE"
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
        "category": "C__CATG__DATABASE",
        "entry": 15,
        "data": {
            "version": "16.1",
            "description": "Upgrade 2026-04: PostgreSQL 15.4 auf 16.1 migriert."
        }
    },
    "id": 3
}
```
