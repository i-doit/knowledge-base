---
title: "Kategorie: Datenbank-Links"
description: Dokumentation der Kategorie Datenbank-Links (C__CATS__DATABASE_LINKS) in i-doit
icon:
status:
lang: de
---

# Kategorie: Datenbank-Links

Die Kategorie **Datenbank-Links** dokumentiert Verbindungen zwischen Datenbankschemata -- sogenannte Database Links, Synonyme oder Federated-Table-Konfigurationen. Sie ist eine **Multi-Value-Kategorie** und erlaubt die Erfassung beliebig vieler Links pro Schema.

## Verwendung

Typische Anwendungsfälle:

- **Oracle Database Links dokumentieren**: Oracle-Datenbanken nutzen DB Links, um schemaübergreifend auf entfernte Tabellen zuzugreifen. Mit dieser Kategorie lässt sich jeder Link mit Zielschema, Eigentümer und Sichtbarkeit (Public/Private) erfassen.
- **Cross-Schema-Abhängigkeiten sichtbar machen**: Wenn ein Schema per DB Link auf ein anderes zugreift, entsteht eine Abhängigkeit. Über die Verknüpfung zum Zielschema in i-doit wird diese Abhängigkeit navigierbar und taucht in Impact-Analysen auf.
- **Change-Planung absichern**: Vor einer Schema-Migration zeigt ein Blick in diese Kategorie, welche Links auf das Schema verweisen -- ein fehlender DB Link nach der Migration führt sonst zu Laufzeitfehlern.
- **Berechtigungsdokumentation**: Die Felder *Target user* und *Owner* zeigen, unter welchem Datenbankbenutzer der Zugriff erfolgt und wer den Link verwaltet.

!!! info "Datenbank-Kategoriekette"
    Diese Kategorie gehört zur Datenbank-Kategoriekette in i-doit. Zusammen mit [Datenbankschema](s-database-schema.md), [Datenbank-Gateway](s-database-gateway.md), [Datenbank-Objekte](s-database-objects.md) und [Datenbankzugriff](s-database-access.md) lassen sich Datenbanklandschaften vollständig abbilden.

[![Datenbank-Links](../../assets/images/de/grundlagen/kategorien/s-database-links.png)](../../assets/images/de/grundlagen/kategorien/s-database-links.png)

## Felder

### Bezeichnung

Der Name des Database Links, z.B. `REPORTING_LINK` oder `HR_REMOTE.WORLD`. Dieser Wert entspricht dem Bezeichner, unter dem der Link in SQL-Statements referenziert wird (z.B. `SELECT * FROM tabelle@REPORTING_LINK`).

### Connected database schema

Verknüpfung zum Ziel-Datenbankschema als i-doit-Objekt. Über den Objekt-Browser wird das Schema ausgewählt, auf das der Link verweist. Dadurch entsteht eine bidirektional navigierbare Beziehung.

### Target user

Der Datenbankbenutzer, unter dessen Identität der Zugriff auf das Zielschema erfolgt, z.B. `REPORTING_RO`. Relevant für Berechtigungsaudits und Sicherheitsdokumentation.

### Owner

Der Eigentümer des Database Links -- also das Schema bzw. der Benutzer, in dessen Besitz der Link liegt, z.B. `APP_OWNER`. Bei Public Links ist dies typischerweise `PUBLIC` oder ein DBA-Konto.

### Public

Gibt an, ob es sich um einen Public Database Link handelt, der allen Benutzern der Datenbankinstanz zur Verfügung steht, oder um einen Private Link, der nur dem Eigentümer zugänglich ist.

### Beschreibung

Freitext für ergänzende Angaben: Zweck des Links, zugehörige Applikationen, geplante Ablösung, Hinweise zur Netzwerk-Konnektivität oder TNS-Konfiguration.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATS__DATABASE_LINKS` |
| **Typ** | Spezifische Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Datenbankschema |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Bezeichnung** | `title` | Text |
| **Connected database schema** | `link` | Objekt-Browser (Verknüpfung) |
| **Target user** | `target_user` | Text |
| **Owner** | `owner` | Text |
| **Public** | `public` | Dialog (Auswahl) |
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
        "category": "C__CATS__DATABASE_LINKS",
        "data": {
            "title": "REPORTING_LINK",
            "link": 456,
            "target_user": "REPORTING_RO",
            "owner": "APP_OWNER",
            "public": 1,
            "description": "Public DB Link zum Reporting-Schema, genutzt von BI-Applikation"
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
        "category": "C__CATS__DATABASE_LINKS"
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
        "category": "C__CATS__DATABASE_LINKS",
        "entry": 1,
        "data": {
            "target_user": "REPORTING_RW",
            "description": "Berechtigungsänderung: Schreibzugriff seit 2026-04"
        }
    },
    "id": 3
}
```
