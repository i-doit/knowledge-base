---
title: "Kategorie: Zugewiesene Objekte (Person)"
description: Dokumentation der Kategorie Zugewiesene Objekte für Personen-Objekte in i-doit
icon:
status:
lang: de
---

# Kategorie: Zugewiesene Objekte (Person)

Die Kategorie **Zugewiesene Objekte** zeigt alle Objekte an, denen diese Person über die globale Kategorie [Kontaktzuweisung](contact.md) zugeordnet ist. Sie ist die **Rückwärtsansicht** der Kontaktzuweisung -- während die Kontaktzuweisung auf einem Server zeigt, welche Personen zuständig sind, zeigt diese Kategorie auf der Person, für welche Objekte sie zuständig ist.

!!! info "Nur-Lese-Ansicht mit Bearbeitungsmöglichkeit"
    Die Einträge in dieser Kategorie werden nicht direkt hier erstellt, sondern entstehen automatisch, wenn die Person in der [Kontaktzuweisung](contact.md) eines anderen Objekts eingetragen wird. Bestehende Zuweisungen können hier eingesehen, bearbeitet und entfernt werden. Neue Zuweisungen werden über die Kontaktzuweisung auf dem Zielobjekt oder über die API erstellt.

## Verwendung

Typische Anwendungsfälle:

- **Verantwortungsbereiche einer Person überblicken**: Auf einen Blick sehen, für welche Server, Applikationen, Netzwerk-Komponenten oder andere Objekte eine Person als Kontakt eingetragen ist. Besonders wertvoll bei Mitarbeitergesprächen, Kapazitätsplanung und Aufgabenverteilung.
- **Offboarding und Übergabe**: Wenn ein Mitarbeiter das Unternehmen verlässt oder die Abteilung wechselt, zeigt diese Kategorie alle Objekte, für die Zuweisungen umgehängt oder entfernt werden müssen. So wird kein Objekt vergessen, und es entstehen keine verwaisten Zuweisungen.
- **Audit und Compliance**: Auswertungen wie „Welche Objekte hat Person X als Administrator zugewiesen?" oder „Ist Person Y als primärer Kontakt für kritische Server eingetragen?" lassen sich direkt aus dieser Kategorie oder über den Report Manager beantworten.
- **Rollenverteilung prüfen**: Die Spalte **Rolle** zeigt, in welcher Funktion die Person dem jeweiligen Objekt zugewiesen ist. So lässt sich schnell prüfen, ob die Rollenverteilung (Administrator, Verantwortlicher, Benutzer) den organisatorischen Vorgaben entspricht.

[![Zugewiesene Objekte (Person)](../../assets/images/de/grundlagen/kategorien/s-person-contact-assignment.png)](../../assets/images/de/grundlagen/kategorien/s-person-contact-assignment.png)

## Felder

### Objekt

Das Objekt, dem die Person über die Kontaktzuweisung zugeordnet ist. In der Listenansicht erscheint der Objektname als klickbarer Link -- ein Klick öffnet das verknüpfte Objekt direkt.

### Objekttyp

Der Objekttyp des zugewiesenen Objekts, z.B. `Server`, `Applikation` oder `Router`. Wird automatisch aus dem verknüpften Objekt übernommen und ermöglicht die schnelle Filterung nach bestimmten Objekttypen.

### Rolle

Die Rolle, in der die Person dem Objekt zugeordnet ist, z.B. `Administrator`, `Verantwortlich` oder `Benutzer`. Entspricht dem Feld **Rolle** in der [Kontaktzuweisung](contact.md) des Zielobjekts. Dialog+-Feld -- eigene Rollen lassen sich bei Bedarf ergänzen.

### Primärer Kontakt

Zeigt an, ob die Person der primäre Ansprechpartner für das jeweilige Objekt ist (`Ja` oder `Nein`). Der primäre Kontakt wird in Reports bevorzugt angezeigt und ist die erste Eskalationsstufe bei Störungen.

### Beschreibung

Freitext mit zusätzlichen Angaben zur Kontaktzuweisung, z.B. Zuständigkeitsbereich oder Vertretungsregelungen.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATS__PERSON_CONTACT_ASSIGNMENT` |
| **Typ** | Spezifische Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Person |

!!! note "Rückwärtsreferenz zur Kontaktzuweisung"
    Diese Kategorie ist die Rückwärtsreferenz zu `C__CATG__CONTACT`. Ein Eintrag hier entsteht automatisch, wenn die Person in der Kontaktzuweisung eines Objekts eingetragen wird. Beim Löschen eines Eintrags hier wird auch die entsprechende Kontaktzuweisung auf dem Zielobjekt entfernt.

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Objekt** | `object` | Objekt-Browser (Verknüpfung) |
| **Objekttyp** | `object_type` | Ganzzahl (nur lesen) |
| **Rolle** | `role` | Dialog+ (erweiterbare Auswahl) |
| **Primärer Kontakt** | `primary_contact` | Dialog (Auswahl) |
| **Beschreibung** | `description` | Textfeld (mehrzeilig) |

### API-Beispiele

#### Eintrag erstellen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "object": 1234,
        "category": "C__CATS__PERSON_CONTACT_ASSIGNMENT",
        "data": {
            "object": 567,
            "role": "Administrator",
            "primary_contact": 1,
            "description": "Hauptadministrator für diesen Server"
        }
    },
    "id": 1
}
```

!!! tip "Empfehlung: Kontaktzuweisung auf dem Zielobjekt verwenden"
    In der Praxis ist es oft einfacher, die Kontaktzuweisung (`C__CATG__CONTACT`) auf dem Zielobjekt zu nutzen statt `C__CATS__PERSON_CONTACT_ASSIGNMENT` auf der Person. Beide Wege erzeugen denselben Datensatz -- die Kontaktzuweisung bietet aber die intuitivere Perspektive: „Wer ist für dieses Objekt zuständig?"

#### Einträge lesen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.read",
    "params": {
        "apikey": "dein-api-key",
        "objID": 1234,
        "category": "C__CATS__PERSON_CONTACT_ASSIGNMENT"
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
        "object": 1234,
        "category": "C__CATS__PERSON_CONTACT_ASSIGNMENT",
        "entry": 10,
        "data": {
            "role": "Verantwortlich",
            "primary_contact": 1,
            "description": "Rollenwechsel 2026-04: Ab sofort verantwortlich statt Administrator."
        }
    },
    "id": 3
}
```
