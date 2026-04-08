---
title: "Kategorie: Datenbankzugriff"
description: Dokumentation der Kategorie Datenbankzugriff (Database Access) in i-doit
icon:
status:
lang: de
---

# Kategorie: Datenbankzugriff

Die Kategorie **Datenbankzugriff** dokumentiert, welche Anwendungen oder Systemdienste auf ein Datenbankschema zugreifen. Sie ist eine **Multi-Value-Kategorie** und steht als spezifische Kategorie auf Objekten vom Typ *Datenbankschema* zur Verfügung.

## Verwendung

Typische Anwendungsfälle:

- **Abhängigkeiten sichtbar machen**: Erfasse, welche Applikationen oder Services ein bestimmtes Datenbankschema nutzen. Diese Information ist entscheidend für Change- und Incident-Management – bei einem Datenbank-Ausfall ist sofort ersichtlich, welche Anwendungen betroffen sind.
- **Datenbank-Kette dokumentieren**: Zusammen mit den Kategorien [DBMS](database-sa.md), [Datenbankinstanz](database.md) und [Datenbankschema](s-database-schema.md) entsteht die vollständige Datenbank-Kette: DBMS-Software > Instanz > Schema > Zugriff. Die Kategorie Datenbankzugriff bildet dabei das letzte Glied.
- **Impact-Analyse im Report Manager**: Über Reports lässt sich auswerten, welche Schemas von wie vielen Anwendungen genutzt werden – hilfreich für Konsolidierungsprojekte oder Lizenzprüfungen.
- **Service-Modellierung**: In ITSM-Szenarien können die zugreifenden Anwendungen als Teil eines IT-Service modelliert werden. Der Datenbankzugriff liefert die Verbindung zwischen Service-Komponente und Datenbank.

!!! info "Die Datenbank-Kette in i-doit"
    i-doit bildet Datenbankstrukturen über eine vierstufige Kette ab:

    1. **DBMS** – die Datenbanksoftware (z.B. MySQL, PostgreSQL, Oracle)
    2. **Datenbankinstanz** – eine laufende Instanz des DBMS auf einem Server
    3. **Datenbankschema** – ein einzelnes Schema/eine Datenbank innerhalb der Instanz
    4. **Datenbankzugriff** – die Anwendungen, die auf das Schema zugreifen

    Diese Kategorie dokumentiert Stufe 4. Siehe auch: [DBMS](database-sa.md), [Datenbankinstanz](database.md), [Datenbankschema](s-database-schema.md).

[![Datenbankzugriff](../../assets/images/de/grundlagen/kategorien/s-database-access.png)](../../assets/images/de/grundlagen/kategorien/s-database-access.png)

## Felder

### Anwendung / Systemdienst

Das i-doit-Objekt, das auf das Datenbankschema zugreift. Über den Objekt-Browser können Objekte der Typen *Anwendung*, *Systemdienst*, *Lizenz*, *Betriebssystem*, *Cluster-Service*, *DBMS*, *Datenbankschema*, *Datenbankinstanz* und *Middleware* ausgewählt werden. Mehrfachauswahl ist möglich – so lassen sich in einem Schritt mehrere zugreifende Anwendungen anlegen.

!!! warning "Richtung der Verknüpfung beachten"
    Die Kategorie Datenbankzugriff wird auf dem **Datenbankschema**-Objekt gepflegt, nicht auf der zugreifenden Anwendung. Die Leserichtung ist: "Auf dieses Schema greifen folgende Anwendungen zu."

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATS__DATABASE_ACCESS` |
| **Typ** | Spezifische Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Datenbankschema |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Anwendung / Systemdienst** | `access` | Objekt-Browser (Verknüpfung, Relationstyp 19) |

### API-Beispiele

#### Eintrag erstellen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "object": 200,
        "category": "C__CATS__DATABASE_ACCESS",
        "data": {
            "access": 350
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
        "object": 200,
        "category": "C__CATS__DATABASE_ACCESS"
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
        "object": 200,
        "category": "C__CATS__DATABASE_ACCESS",
        "entry": 3,
        "data": {
            "access": 412
        }
    },
    "id": 3
}
```
