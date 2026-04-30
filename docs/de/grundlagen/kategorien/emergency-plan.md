---
title: "Kategorie: Notfallplanzuweisung"
description: Dokumentation der Kategorie Notfallplanzuweisung in i-doit
icon:
status:
lang: de
---

# Kategorie: Notfallplanzuweisung

Die Kategorie **Notfallplanzuweisung** verknüpft Notfallpläne mit einem Objekt. Sie ist eine **Multi-Value-Kategorie** – pro Objekt können mehrere Notfallpläne zugewiesen werden, z.B. ein Wiederanlaufplan und ein Kommunikationsplan für denselben Server.

!!! warning "Pflicht bei BSI-Grundschutz und ISO 27001"
    Im Rahmen von BSI IT-Grundschutz (Baustein DER.4 Notfallmanagement) und ISO 22301 (Business Continuity Management) muss für kritische IT-Systeme dokumentiert sein, welche Notfallpläne existieren und wann diese zuletzt geübt wurden. Die Kategorie Notfallplanzuweisung bildet genau diese Anforderung in der CMDB ab und stellt so die Verknüpfung zwischen Asset und Notfallvorsorge her.

## Verwendung

Typische Anwendungsfälle:

- **Business Continuity Management**: Weise jedem geschäftskritischen System seinen Wiederanlaufplan zu. Über den Report Manager lässt sich jederzeit auswerten, welche Systeme einen zugewiesenen Notfallplan haben — und vor allem welche nicht. Lücken in der Notfallvorsorge werden so systematisch sichtbar.
- **Notfallübungen dokumentieren**: Das Feld „Datum der Notfallübung" zeigt, wann der Plan zuletzt in einer Übung getestet wurde. Ein Report über alle Objekte, deren letzte Notfallübung länger als 12 Monate zurückliegt, ist ein typisches Werkzeug für das Notfallmanagement-Team.
- **Wiederanlaufzeiten (RTO) planen**: Der Zeitbedarf gibt an, wie lange die Wiederherstellung des Systems voraussichtlich dauert. Damit lässt sich prüfen, ob die geplante Wiederanlaufzeit die im SLA zugesicherte Recovery Time Objective (RTO) einhält.
- **Audit-Vorbereitung**: Prüfer fragen regelmäßig nach der Zuordnung von Notfallplänen zu kritischen Assets. Ein Report, der alle Server mit zugewiesenem Notfallplan, letztem Übungsdatum und Zeitbedarf auflistet, beantwortet diese Frage auf Knopfdruck.

!!! tip "Zusammenspiel mit dem ISMS Add-on"
    Für eine vollständige Abbildung des Informationssicherheits-Managements bietet i-doit das **ISMS Add-on**. Es erweitert die CMDB um Schutzbedarfsfeststellung, Risikoanalyse und Maßnahmenverfolgung. Die Notfallplanzuweisung ist dabei ein wichtiger Baustein: Sie dokumentiert die operative Notfallvorsorge, während das ISMS Add-on den übergeordneten Sicherheitsrahmen liefert.

[![Notfallplanzuweisung](../../assets/images/de/grundlagen/kategorien/emergency-plan.png)](../../assets/images/de/grundlagen/kategorien/emergency-plan.png)

## Felder

### Bezeichnung

Ein frei wählbarer Titel für die Zuweisung, z.B. `Wiederanlaufplan ERP-Server` oder `Notfallkommunikation Standort München`. Der Titel erscheint in der Listenansicht und in Reports und sollte sprechend genug sein, um den Kontext ohne Öffnen des Eintrags zu verstehen.

### Zugewiesener Notfallplan

Die Verknüpfung zu einem Notfallplan-Objekt. Über den Objekt-Browser wählst du ein Objekt vom Typ **Notfallplan** oder **Datei** aus. Das Notfallplan-Objekt selbst enthält die Details des Plans (Maßnahmen, Verantwortliche, Kontaktlisten). So lässt sich derselbe Notfallplan mehreren Systemen zuweisen, ohne ihn doppelt pflegen zu müssen.

### Zeitbedarf

Die geschätzte Dauer für die Wiederherstellung des Systems gemäß diesem Notfallplan. Dieser Wert wird aus der spezifischen Kategorie des verknüpften Notfallplan-Objekts übernommen und zeigt z.B. `4 Stunden` oder `24 Stunden`. Er ist ein zentraler Wert für die Bewertung, ob die Business-Continuity-Anforderungen erfüllt werden.

### Zeitbedarf (Einheit)

Die Einheit des Zeitbedarfs, z.B. `Stunden`, `Minuten` oder `Tage`. Wird ebenfalls aus dem Notfallplan-Objekt übernommen.

### Datum der Notfallübung

Das Datum, an dem der Notfallplan zuletzt in einer Übung getestet wurde. Wird aus dem Notfallplan-Objekt übernommen. Regelmäßige Übungen sind ein Kernbestandteil jedes Notfallmanagements — ein Report über veraltete Übungsdaten hilft, den Überblick zu behalten.

### Beschreibung

Freitext für zusätzliche Angaben: Besonderheiten bei der Wiederherstellung dieses spezifischen Objekts, Abhängigkeiten zu anderen Systemen, Ansprechpartner oder Abweichungen vom Standardplan.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__EMERGENCY_PLAN` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Server, Blade Server, Switch, Router, PDU, Gebäude, Raum, WAN u.a. |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Bezeichnung** | `title` | Text |
| **Zugewiesener Notfallplan** | `emergency_plan` | Objekt-Browser (Verknüpfung) |
| **Zeitbedarf** | `time_needed` | Text |
| **Zeitbedarf (Einheit)** | `time_needed_unit` | Text |
| **Datum der Notfallübung** | `practice_date` | Text |
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
        "category": "C__CATG__EMERGENCY_PLAN",
        "data": {
            "title": "Wiederanlaufplan ERP-Server",
            "emergency_plan": 3050,
            "description": "RTO 4h gemäß SLA, Abhängigkeit: Datenbank-Server muss zuerst wiederhergestellt werden"
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
        "category": "C__CATG__EMERGENCY_PLAN"
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
        "category": "C__CATG__EMERGENCY_PLAN",
        "entry": 8,
        "data": {
            "title": "Wiederanlaufplan ERP-Server (aktualisiert)",
            "description": "RTO von 4h auf 2h reduziert nach Einführung von Replikation, Stand 2026-03"
        }
    },
    "id": 3
}
```
