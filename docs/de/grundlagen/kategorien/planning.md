---
title: "Kategorie: Status-Planung"
description: Dokumentation der Kategorie Status-Planung in i-doit
icon:
status:
lang: de
---

# Kategorie: Status-Planung

Die Kategorie **Status-Planung** ermöglicht es, CMDB-Statuswechsel im Voraus zu planen und mit einem Gültigkeitszeitraum zu versehen. Sie ist eine **Multi-Value-Kategorie** — pro Objekt lassen sich mehrere geplante Statusübergänge anlegen, z.B. erst „In Betrieb" ab einem bestimmten Datum, dann „Außer Betrieb" zu einem späteren Zeitpunkt.

!!! info "Zusammenspiel mit dem CMDB-Status in Allgemein"
    Der tatsächliche CMDB-Status eines Objekts wird in der Kategorie [Allgemein](global.md) gepflegt und ist sofort wirksam. Die Status-Planung ändert den aktuellen Status **nicht automatisch** — sie dokumentiert den *geplanten* Zustandswechsel. Ob der Wechsel dann manuell oder per Skript vollzogen wird, liegt in der Verantwortung des Administrators. Die Kategorie dient damit primär als Planungs- und Kommunikationsinstrument.

## Warum diese Kategorie wichtig ist

In der Praxis werden Statusänderungen selten spontan entschieden. Ein Server wird nicht einfach abgeschaltet — es gibt einen Change-Prozess, ein geplantes Wartungsfenster, eine Migrationsphase. Die Status-Planung bildet genau diesen zeitlichen Vorlauf ab. Sie beantwortet die Frage: „Was soll wann mit diesem Objekt passieren?" — und macht diese Information für alle Beteiligten sichtbar, ohne den aktuellen Betriebsstatus zu verfälschen.

## Verwendung

Typische Anwendungsfälle:

- **Geplante Außerbetriebnahme**: Ein Server erreicht sein End-of-Life. In der Status-Planung wird eingetragen, dass der Status am 30.06. auf „Außer Betrieb" wechseln soll. Reports und Dashboards können dieses Datum auswerten und rechtzeitig warnen.
- **Migrationsplanung**: Während einer Datencenter-Migration dokumentiert die Kategorie, wann welches Objekt den Status „In Migration" erhält und wann es am neuen Standort wieder „In Betrieb" geht. So entsteht ein vollständiger Migrationsfahrplan direkt in der CMDB.
- **Inbetriebnahme neuer Hardware**: Neue Geräte werden als „Geplant" angelegt. Die Status-Planung zeigt das vorgesehene Go-Live-Datum — hilfreich für Beschaffung, Netzwerkteam und Service-Desk.
- **Audit-Nachweise**: Die Status-Planung liefert einen dokumentierten Zeitstempel für geplante Änderungen. Bei Audits lässt sich nachweisen, dass Statusübergänge kontrolliert und nicht ad hoc stattfanden.

[![Status-Planung](../../assets/images/de/grundlagen/kategorien/planning.png)](../../assets/images/de/grundlagen/kategorien/planning.png)

## Felder

### CMDB-Status

Der geplante Ziel-Status, den das Objekt zum angegebenen Zeitpunkt erhalten soll. Die Auswahl entspricht den in i-doit konfigurierten CMDB-Status-Werten (z.B. „Geplant", „Bestellt", „In Betrieb", „Außer Betrieb", „In Reparatur" usw.). Es handelt sich um ein Dialog-Feld — die verfügbaren Werte werden über die CMDB-Status-Verwaltung definiert.

### Gültigkeitszeitraum von

Das Startdatum, ab dem der geplante Status gelten soll. Dieses Feld beantwortet die Frage: „Ab wann soll der Statuswechsel wirksam werden?" — und ist damit der entscheidende Wert für Reports, die bevorstehende Änderungen auswerten.

### Gültigkeitszeitraum bis

Das optionale Enddatum des geplanten Status. Wird ein Enddatum angegeben, beschreibt der Eintrag eine befristete Phase — z.B. eine Wartungsperiode von drei Tagen. Bleibt das Feld leer, gilt der geplante Status auf unbestimmte Zeit.

### Beschreibung

Freitext für Kontext und Begründung: Warum wird der Status geändert? Welcher Change oder welches Projekt steht dahinter? Gibt es Abhängigkeiten zu anderen Objekten? Diese Information ist für die Team-Kommunikation und spätere Nachvollziehbarkeit entscheidend.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__PLANNING` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Alle Objekttypen |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **CMDB-Status** | `cmdb_status` | Dialog (Auswahl) |
| **Gültigkeitszeitraum von** | `start` | Datum |
| **Gültigkeitszeitraum bis** | `end` | Datum |
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
        "category": "C__CATG__PLANNING",
        "data": {
            "cmdb_status": 10,
            "start": "2026-06-30",
            "end": "",
            "description": "Geplante Außerbetriebnahme nach Migration auf neue Cluster-Infrastruktur (Change CHG-2026-0451)."
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
        "category": "C__CATG__PLANNING"
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
        "category": "C__CATG__PLANNING",
        "entry": 5,
        "data": {
            "start": "2026-07-15",
            "description": "Außerbetriebnahme auf 15.07. verschoben — Abhängigkeit zu DB-Migration (CHG-2026-0451)."
        }
    },
    "id": 3
}
```
