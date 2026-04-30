---
title: "Kategorie: Datenbank-Gateway"
description: Dokumentation der Kategorie Datenbank-Gateway (C__CATS__DATABASE_GATEWAY) in i-doit
icon:
status:
lang: de
---

# Kategorie: Datenbank-Gateway

Die Kategorie **Datenbank-Gateway** dokumentiert Gateway- und Proxy-Konfigurationen, über die ein Datenbankschema auf entfernte Datenbanken zugreift. Sie ist eine **Multi-Value-Kategorie** -- pro Schema lassen sich beliebig viele Gateway-Verbindungen anlegen.

## Verwendung

Typische Anwendungsfälle:

- **Datenbankzugriff über Proxy abbilden**: Wenn Applikationen nicht direkt auf eine Datenbank zugreifen, sondern über einen Gateway (z.B. Oracle Connection Manager, MySQL Proxy oder PgBouncer), lässt sich diese Zwischenschicht hier dokumentieren.
- **Zielschema verknüpfen**: Über das Feld *Target schema* wird das entfernte Datenbankschema als i-doit-Objekt referenziert. Damit entsteht eine navigierbare Verbindung zwischen dem lokalen Schema und dem Ziel hinter dem Gateway.
- **Impact-Analyse**: Fällt ein Gateway aus, zeigt die Verknüpfung sofort, welche Schemata betroffen sind -- unverzichtbar für Change-Management und Incident-Analyse.
- **Sicherheitsdokumentation**: Benutzer, Host und Port des Gateways dokumentieren, wer über welchen Weg auf welche Daten zugreift. Hilfreich für Audits und Firewall-Reviews.

!!! info "Datenbank-Kategoriekette"
    Diese Kategorie gehört zur Datenbank-Kategoriekette in i-doit. Zusammen mit [Datenbankschema](s-database-schema.md), [Datenbank-Links](s-database-links.md), [Datenbank-Objekte](s-database-objects.md) und [Datenbankzugriff](s-database-access.md) entsteht ein vollständiges Modell der Datenbanklandschaft.

[![Datenbank-Gateway](../../assets/images/de/grundlagen/kategorien/s-database-gateway.png)](../../assets/images/de/grundlagen/kategorien/s-database-gateway.png)

## Felder

### Gateway-Typ

Der Typ des Gateways, z.B. `Oracle Connection Manager`, `PgBouncer`, `MySQL Proxy` oder `HAProxy`. Beschreibt die eingesetzte Technologie oder Software, die als Vermittler zwischen Client und Zieldatenbank fungiert.

### Host

Der Hostname oder die IP-Adresse, unter der das Gateway erreichbar ist, z.B. `dbgw01.example.com` oder `10.0.5.20`. Wird zusammen mit dem Port für die vollständige Verbindungsinformation benötigt.

### Port

Der Netzwerk-Port, auf dem das Gateway lauscht, z.B. `1521` (Oracle) oder `6432` (PgBouncer). Wichtig für Firewall-Dokumentation und Netzwerk-Diagramme.

### User

Der Benutzername, mit dem sich Clients am Gateway authentifizieren. In Kombination mit Host und Port ergibt sich die vollständige Zugangsinformation.

!!! warning "Keine Passwörter speichern"
    In diesem Feld sollte ausschließlich der Benutzername hinterlegt werden. Passwörter gehören in ein Passwort-Management-System, nicht in die CMDB.

### Target schema

Verknüpfung zum entfernten Datenbankschema (i-doit-Objekt vom Typ *Datenbankschema*), auf das der Gateway Zugriff gewährt. Über den Objekt-Browser wählbar.

### Beschreibung

Freitext für ergänzende Angaben: Verbindungsoptionen, TLS-Konfiguration, Failover-Verhalten, zugehörige Firewall-Regeln oder Hinweise zum Betrieb.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATS__DATABASE_GATEWAY` |
| **Typ** | Spezifische Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Datenbankschema |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Gateway-Typ** | `type` | Text |
| **Host** | `host` | Text |
| **Port** | `port` | Text |
| **User** | `user` | Text |
| **Target schema** | `target_schema` | Objekt-Browser (Verknüpfung) |
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
        "category": "C__CATS__DATABASE_GATEWAY",
        "data": {
            "type": "PgBouncer",
            "host": "dbgw01.example.com",
            "port": "6432",
            "user": "app_readonly",
            "target_schema": 456,
            "description": "PgBouncer-Gateway zur Reporting-Datenbank, TLS erzwungen"
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
        "category": "C__CATS__DATABASE_GATEWAY"
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
        "category": "C__CATS__DATABASE_GATEWAY",
        "entry": 1,
        "data": {
            "port": "6433",
            "description": "Port-Wechsel nach Netzwerk-Migration, ab 2026-03 aktiv"
        }
    },
    "id": 3
}
```
