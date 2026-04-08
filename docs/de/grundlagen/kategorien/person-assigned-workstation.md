---
title: "Kategorie: Zugewiesene Arbeitsplätze (Person)"
description: Dokumentation der Kategorie Zugewiesene Arbeitsplätze in i-doit
icon:
status:
lang: de
---

# Kategorie: Zugewiesene Arbeitsplätze (Person)

Die Kategorie **Zugewiesene Arbeitsplätze** zeigt auf Personen-Objekten an, welche Arbeitsplätze dieser Person zugewiesen sind. Sie ist eine **Multi-Value-Kategorie** und bildet die Gegenseite zur Kategorie [Zugewiesener Arbeitsplatz](assigned-workstation.md), die auf dem Arbeitsplatz-Objekt selbst gepflegt wird. Ändert man die Zuweisung auf einer der beiden Seiten, aktualisiert i-doit automatisch die Gegenrichtung — es handelt sich um eine implizite Beziehung.

!!! info "Richtung der Zuweisung"
    Einträge in dieser Kategorie entstehen nicht durch direkte Bearbeitung hier, sondern dadurch, dass auf einem Arbeitsplatz-Objekt in der Kategorie [Zugewiesener Arbeitsplatz](assigned-workstation.md) eine Person hinterlegt wird. Diese Kategorie ist daher primär eine **Leseansicht** — sie aggregiert alle Arbeitsplätze, die auf die betreffende Person verweisen.

## Warum diese Kategorie wichtig ist

In jeder Organisation sind Personen die zentrale Bezugsgröße für IT-Ausstattung. Wenn ein Mitarbeiter das Unternehmen verlässt oder die Abteilung wechselt, muss sofort klar sein, welche Geräte und Arbeitsplätze ihm zugeordnet sind. Genau das leistet diese Kategorie: Sie bündelt die Information an einem Ort — dem Personen-Objekt — statt sie über dutzende Arbeitsplatz-Objekte verstreut zu lassen.

## Verwendung

Typische Anwendungsfälle:

- **Onboarding**: Beim Eintritt eines neuen Mitarbeiters werden dem Arbeitsplatz-Objekt (Notebook, Desktop, Telefon) die Person zugewiesen. In der Kategorie **Zugewiesene Arbeitsplätze** der Person sieht der IT-Service-Desk dann auf einen Blick die komplette Ausstattung — inklusive aller Geräte, die noch ausgeliefert werden müssen.
- **Offboarding**: Verlässt ein Mitarbeiter das Unternehmen, listet diese Kategorie sämtliche Arbeitsplätze auf, die zurückgegeben oder neu zugewiesen werden müssen. Das verhindert, dass Geräte „verschwinden" oder Lizenzen ungenutzt bleiben.
- **Arbeitsplatzwechsel und Umzüge**: Bei einer Büro-Umorganisation zeigt ein Report über diese Kategorie, welche Person welche Geräte hat — und ob die Zuweisung nach dem Umzug noch stimmt.
- **Audit und Compliance**: Für Lizenz-Audits und Asset-Prüfungen ist die Zuordnung Person-zu-Gerät unverzichtbar. Die Kategorie liefert diese Zuordnung ohne manuelle Recherche.

[![Zugewiesene Arbeitsplätze (Person)](../../assets/images/de/grundlagen/kategorien/person-assigned-workstation.png)](../../assets/images/de/grundlagen/kategorien/person-assigned-workstation.png)

## Felder

### Zugewiesene Arbeitsplätze

Ein Objekt-Browser-Feld, das alle Arbeitsplatz-Objekte anzeigt, die dieser Person zugewiesen sind. Die Auswahl ist auf Objekte beschränkt, die über eine Kategorie **Logische Einheit** verfügen. In der Praxis sind das typischerweise Clients, Notebooks, Telefone, Drucker oder andere Endgeräte.

Da es sich um ein Multi-Value-Feld handelt, können einer Person beliebig viele Arbeitsplätze zugeordnet werden — etwa ein Desktop-PC im Büro, ein Notebook für unterwegs und ein VoIP-Telefon.

!!! tip "Verknüpfung über beide Seiten pflegbar"
    Du kannst die Zuweisung sowohl hier auf der Person als auch auf dem Arbeitsplatz-Objekt in der Kategorie [Zugewiesener Arbeitsplatz](assigned-workstation.md) vornehmen. i-doit synchronisiert die Gegenrichtung automatisch. Für Massenänderungen (z.B. ganzes Team umziehen) bietet sich die API an.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__PERSON_ASSIGNED_WORKSTATION` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Personen |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Zugewiesene Arbeitsplätze** | `assigned_workstations` | Objekt-Browser |

### API-Beispiele

#### Eintrag erstellen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "object": 4711,
        "category": "C__CATG__PERSON_ASSIGNED_WORKSTATION",
        "data": {
            "assigned_workstations": 1055
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
        "category": "C__CATG__PERSON_ASSIGNED_WORKSTATION"
    },
    "id": 2
}
```
