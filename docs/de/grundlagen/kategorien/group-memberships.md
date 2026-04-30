---
title: "Kategorie: Gruppenmitgliedschaft"
description: Dokumentation der Kategorie Gruppenmitgliedschaft in i-doit
icon:
status:
lang: de
---

# Kategorie: Gruppenmitgliedschaft

Die Kategorie **Gruppenmitgliedschaft** zeigt, welchen Objektgruppen ein Objekt zugeordnet ist. Sie ist eine **Multi-Value-Kategorie** – ein Objekt kann gleichzeitig Mitglied beliebig vieler Gruppen sein, z.B. der Gruppe „Kritische Server" und der Gruppe „Standort Berlin".

Objektgruppen sind eine **logische Gruppierung**, die über die starre Struktur der Objekttypen hinausgeht. Während der Objekttyp festlegt, *was* ein Objekt ist (Server, Switch, Client), definiert die Gruppenmitgliedschaft, *wozu* es gehört — und das kann sich je nach Perspektive unterscheiden. Ein und derselbe Server kann zur Gruppe „Projekt Alpha", zur Gruppe „PCI-DSS-Scope" und zur Gruppe „Migration Q2/2026" gehören.

!!! info "Rückwärtsverknüpfung — automatische Pflege"
    Die Gruppenmitgliedschaft ist eine **Rückwärtsverknüpfung**. Wenn du am Gruppen-Objekt in der spezifischen Kategorie **Gruppe** ein Mitglied hinzufügst, erscheint die Gruppe automatisch in der Gruppenmitgliedschaft dieses Objekts. Die Zuordnung muss also nicht doppelt gepflegt werden.

## Verwendung

Typische Anwendungsfälle:

- **Logische Zusammenfassung über Objekttypen hinweg**: Fasse Server, Switches, Clients und Anwendungen in einer Gruppe zusammen, die inhaltlich zusammengehören — z.B. „SAP-Infrastruktur" oder „DMZ-Komponenten". Das ermöglicht Reports und Filterung über Objekttyp-Grenzen hinweg.
- **Projektbezogene Zuordnung**: Bei Migrationsprojekten, Rollouts oder Audits lassen sich die betroffenen Objekte in einer Gruppe zusammenfassen. Nach Abschluss des Projekts kann die Gruppe archiviert werden, ohne dass die Objekte selbst verändert werden.
- **Compliance-Scoping**: Definiere Gruppen für regulatorische Geltungsbereiche wie „PCI-DSS-Scope", „KRITIS-relevant" oder „ISO-27001-Scope". Die Gruppenmitgliedschaft zeigt dann an jedem Objekt sofort, welchen Compliance-Anforderungen es unterliegt — eine Information, die bei Audits regelmäßig abgefragt wird.
- **Verantwortungsbereiche**: Gruppen wie „Team Netzwerk" oder „Verantwortung: Standort München" ermöglichen eine organisatorische Zuordnung, die über die Kontakt-Kategorie hinausgeht. Während die Kontakt-Kategorie einzelne Personen oder Rollen zuweist, bildet die Gruppenmitgliedschaft größere Zuständigkeitsbereiche ab.
- **Reporting und Dashboards**: Im Report Manager lassen sich Gruppen als Filter verwenden. Ein Dashboard „Alle Objekte in Gruppe X" liefert eine objekttypübergreifende Übersicht, die mit reinen Objekttyp-Filtern nicht möglich wäre.

[![Gruppenmitgliedschaft](../../assets/images/de/grundlagen/kategorien/group-memberships.png)](../../assets/images/de/grundlagen/kategorien/group-memberships.png)

## Felder

### Gruppe

Eine Verknüpfung zum Gruppen-Objekt, dem dieses Objekt angehört. Über den Objekt-Browser werden Objekte vom Typ **Objektgruppe** angeboten. Jeder Eintrag in der Multi-Value-Liste entspricht einer Gruppenzugehörigkeit. Ein Objekt kann beliebig vielen Gruppen gleichzeitig angehören.

### Beschreibung

Freitext für Kontext zur Gruppenzugehörigkeit: Grund der Zuordnung, Zeitraum, verantwortliche Person oder Verweis auf ein Change-Ticket.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__GROUP_MEMBERSHIPS` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Server, Blade Server u.a. |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Gruppe** | `connected_object` | Objekt-Browser (Verknüpfung) |
| **Beschreibung** | `description` | Textfeld (mehrzeilig) |

### API-Beispiele

#### Eintrag erstellen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "object": 1042,
        "category": "C__CATG__GROUP_MEMBERSHIPS",
        "data": {
            "connected_object": 234,
            "description": "Zuordnung zur Gruppe 'Kritische Server' gemäß ISMS-Risikobewertung 2026"
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
        "object": 1042,
        "category": "C__CATG__GROUP_MEMBERSHIPS"
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
        "object": 1042,
        "category": "C__CATG__GROUP_MEMBERSHIPS",
        "entry": 1,
        "data": {
            "connected_object": 567,
            "description": "Gruppe geändert: Migration von 'Projekt Alpha' zu 'Projekt Beta'"
        }
    },
    "id": 3
}
```
