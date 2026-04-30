---
title: "Kategorie: Personen (Organisation)"
description: Dokumentation der Kategorie Personen (Organisation) in i-doit
icon:
status:
lang: de
---

# Kategorie: Personen (Organisation)

Die Kategorie **Personen (Organisation)** zeigt alle Personen, die einer bestimmten Organisation zugeordnet sind. Sie wird auf dem **Organisations-Objekt** angezeigt und ist eine **rückwärtige Kategorie** -- die Zuordnung erfolgt auf dem jeweiligen Personen-Objekt in dessen Stammdaten, wo die Organisation als Arbeitgeber oder übergeordnete Einheit hinterlegt wird.

!!! info "Rückwärtige Kategorie"
    Diese Kategorie ist die **Gegenseite** der Organisationszuordnung in den Personen-Stammdaten. Sie beantwortet die Frage: „Welche Personen gehören zu dieser Organisation?" Die Zuordnung selbst wird auf dem Personen-Objekt gepflegt -- hier wird sie lediglich zusammengefasst dargestellt. Änderungen an der Zuordnung müssen daher auf der jeweiligen Person vorgenommen werden.

## Verwendung

Typische Anwendungsfälle:

- **Mitarbeiterübersicht pro Unternehmen**: Öffne ein Organisations-Objekt (z.B. „Musterfirma GmbH") und sieh auf einen Blick, welche Personen diesem Unternehmen zugeordnet sind. Das ist besonders nützlich bei der Dokumentation von Kunden, Dienstleistern oder Partnerunternehmen, bei denen mehrere Ansprechpartner erfasst sind.
- **Dienstleister-Management**: Bei externen Dienstleistern zeigt die Kategorie, welche Personen als Kontakte hinterlegt sind -- z.B. der Account-Manager, der Techniker vor Ort und der Notfallkontakt. In Kombination mit der Kategorie [Zugewiesene Objekte (Organisation)](s-organization-contact-assignment.md) entsteht ein vollständiges Bild: Welche Personen gehören zum Dienstleister, und für welche Assets ist der Dienstleister verantwortlich?
- **On-/Offboarding-Kontrolle**: Über Reports lässt sich prüfen, ob Personen nach dem Ausscheiden noch einer Organisation zugeordnet sind. Verwaiste Zuordnungen deuten auf unvollständige Offboarding-Prozesse hin.
- **Reporting und Statistik**: Wie viele Personen sind pro Organisation erfasst? Welche Organisationen haben keine zugeordneten Personen (möglicherweise veraltete Datensätze)? Der Report Manager beantwortet diese Fragen auf Basis dieser Kategorie.

[![Personen (Organisation)](../../assets/images/de/grundlagen/kategorien/s-organization-persons.png)](../../assets/images/de/grundlagen/kategorien/s-organization-persons.png)

## Felder

### Personen (Organisation)

Das Kernfeld der Kategorie: eine Verknüpfung zum Personen-Objekt, das dieser Organisation zugeordnet ist. Jeder Eintrag in der Listenansicht repräsentiert eine Person, die in ihren Stammdaten diese Organisation als übergeordnete Einheit hinterlegt hat. Über den Objekt-Browser kann direkt zum Personen-Objekt navigiert werden.

### Kontakt

Die interne ID der Kontaktzuordnung. Dieses Feld ist primär für die API-Nutzung relevant und wird in der Benutzeroberfläche in der Regel nicht direkt angezeigt.

!!! tip "Organisationsstruktur hierarchisch abbilden"
    In i-doit können Organisationen über die Kategorie [Stammdaten (Organisation)](s-organization-master-data.md) einer übergeordneten Organisation zugewiesen werden. Zusammen mit der Personen-Kategorie entsteht so ein mehrstufiges Organigramm: Konzern > Tochtergesellschaft > Abteilung > Mitarbeiter. Der [Standort-Baum](location.md) kann diese Hierarchie ebenfalls abbilden.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATS__ORGANIZATION_PERSONS` |
| **Typ** | Spezifische Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Organisation (Organization) |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Personen (Organisation)** | `object` | Objekt-Browser (Verknüpfung) |
| **Kontakt** | `contact` | Ganzzahl |

### API-Beispiele

#### Einträge lesen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.read",
    "params": {
        "apikey": "dein-api-key",
        "object": 400,
        "category": "C__CATS__ORGANIZATION_PERSONS"
    },
    "id": 1
}
```

!!! note "Rückwärtige Kategorie -- Lesen als Hauptanwendungsfall"
    Die Zuordnung einer Person zu einer Organisation erfolgt typischerweise über die Stammdaten des Personen-Objekts. Die API-Leseoperation auf `C__CATS__ORGANIZATION_PERSONS` liefert eine aggregierte Sicht aller zugeordneten Personen.

#### Eintrag erstellen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "object": 400,
        "category": "C__CATS__ORGANIZATION_PERSONS",
        "data": {
            "object": 234
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
        "object": 400,
        "category": "C__CATS__ORGANIZATION_PERSONS",
        "entry": 1,
        "data": {
            "object": 235
        }
    },
    "id": 3
}
```
