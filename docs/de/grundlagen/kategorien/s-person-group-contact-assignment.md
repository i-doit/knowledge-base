---
title: "Kategorie: Zugewiesene Objekte (Personengruppe)"
description: Dokumentation der Kategorie Zugewiesene Objekte (Personengruppe) in i-doit
icon:
status:
lang: de
---

# Kategorie: Zugewiesene Objekte (Personengruppe)

Die Kategorie **Zugewiesene Objekte (Personengruppe)** zeigt alle Objekte, denen eine bestimmte Personengruppe als Kontakt zugewiesen wurde. Sie ist eine **rückwärtige Kategorie** (Backward) und wird **nicht direkt auf der Personengruppe gepflegt**, sondern automatisch befüllt, wenn die Personengruppe in der Kategorie [Kontaktzuweisung](contact.md) eines anderen Objekts eingetragen wird.

!!! info "Rückwärtige Kategorie"
    Diese Kategorie ist die **Gegenseite** der Kategorie [Kontaktzuweisung](contact.md). Sie beantwortet die Frage: „An welchen Objekten ist diese Personengruppe als Kontakt hinterlegt?" Die eigentliche Zuordnung erfolgt auf dem Ziel-Objekt (Server, Client, Service etc.) über dessen Kontaktzuweisung -- hier wird sie nur gespiegelt. Änderungen müssen daher auf der Seite des zugewiesenen Objekts vorgenommen werden.

## Verwendung

Typische Anwendungsfälle:

- **Verantwortungsbereiche einer Gruppe überblicken**: Öffne eine Personengruppe wie „Netzwerk-Team" und sieh auf einen Blick, für welche Server, Switches, Router und Services diese Gruppe als Kontakt hinterlegt ist. Das ist besonders nützlich bei Team-Umstrukturierungen, wenn Verantwortlichkeiten umverteilt werden müssen.
- **Audit und Compliance**: In regulierten Umgebungen muss nachgewiesen werden, welche Gruppen Zugang zu oder Verantwortung für bestimmte Assets haben. Diese Kategorie liefert eine zentrale Übersicht ohne manuelles Zusammensuchen einzelner Kontaktzuweisungen.
- **Impact-Analyse bei Teamänderungen**: Wenn eine Personengruppe aufgelöst oder umbenannt wird, zeigt die Kategorie sofort, welche Objekte davon betroffen sind und wo die Kontaktzuweisung aktualisiert werden muss.
- **Reporting**: Über den Report Manager lässt sich auswerten, welche Personengruppen besonders vielen Objekten zugewiesen sind -- ein Indikator für zentrale Ansprechpartner, deren Ausfall viele Bereiche betreffen würde.

[![Zugewiesene Objekte (Personengruppe)](../../assets/images/de/grundlagen/kategorien/s-person-group-contact-assignment.png)](../../assets/images/de/grundlagen/kategorien/s-person-group-contact-assignment.png)

## Felder

### Objekt

Das Objekt, dem die Personengruppe als Kontakt zugewiesen wurde. Jeder Eintrag in der Listenansicht repräsentiert eine solche Zuweisung. Über den Objekt-Browser kann direkt zum verknüpften Objekt navigiert werden.

### Objekttyp

Der Typ des zugewiesenen Objekts (z.B. Server, Client, Switch, IT-Service). Dieses Feld wird automatisch aus dem verknüpften Objekt übernommen und erleichtert die Filterung in der Listenansicht.

### Rolle

Die Rolle, in der die Personengruppe dem Objekt zugewiesen ist. Typische Werte sind „Administrativ verantwortlich", „Technisch verantwortlich" oder benutzerdefinierte Rollen. Dialog+-Feld -- eigene Werte lassen sich bei Bedarf in der Kontaktzuweisung des Ziel-Objekts ergänzen.

### Beschreibung

Ein optionales Freitextfeld für ergänzende Hinweise zur Zuweisung.

!!! warning "Einträge nicht direkt bearbeiten"
    Da es sich um eine rückwärtige Kategorie handelt, können die Einträge hier nicht direkt geändert oder gelöscht werden. Um eine Zuweisung zu ändern, navigiere zum verknüpften Objekt und bearbeite dort die Kategorie [Kontaktzuweisung](contact.md).

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATS__PERSON_GROUP_CONTACT_ASSIGNMENT` |
| **Typ** | Spezifische Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Personengruppe (Person group) |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Objekt** | `object` | Objekt-Browser (Verknüpfung) |
| **Objekttyp** | `object_type` | Ganzzahl |
| **Rolle** | `role` | Dialog+ (erweiterbare Auswahl) |
| **Beschreibung** | `description` | Textfeld (mehrzeilig) |

### API-Beispiele

#### Einträge lesen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.read",
    "params": {
        "apikey": "dein-api-key",
        "object": 501,
        "category": "C__CATS__PERSON_GROUP_CONTACT_ASSIGNMENT"
    },
    "id": 1
}
```

!!! note "Rückwärtige Kategorie -- Lesen bevorzugt"
    Da die Zuordnungen über die Kontaktzuweisung am Ziel-Objekt gesteuert werden, ist das Lesen der typische API-Anwendungsfall für diese Kategorie. Um eine neue Zuweisung zu erstellen, verwende stattdessen `C__CATG__CONTACT` am jeweiligen Ziel-Objekt.

#### Eintrag erstellen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "object": 501,
        "category": "C__CATS__PERSON_GROUP_CONTACT_ASSIGNMENT",
        "data": {
            "object": 789,
            "object_type": 5,
            "role": "Administrativ verantwortlich"
        }
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
        "object": 501,
        "category": "C__CATS__PERSON_GROUP_CONTACT_ASSIGNMENT",
        "entry": 1,
        "data": {
            "role": "Technisch verantwortlich"
        }
    },
    "id": 3
}
```
