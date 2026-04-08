---
title: "Kategorie: Zugewiesene Objekte (Organisation)"
description: Dokumentation der spezifischen Kategorie Zugewiesene Objekte für Organisationen in i-doit
icon:
status:
lang: de
---

# Kategorie: Zugewiesene Objekte (Organisation)

Die Kategorie **Zugewiesene Objekte** zeigt alle Objekte, die einer Organisation über die [Kontaktzuweisung](contact.md) zugeordnet sind. Sie ist eine **Multi-Value-Kategorie** -- pro Organisations-Objekt können beliebig viele zugewiesene Objekte erscheinen, jeweils mit der Rolle, in der die Organisation dem Objekt zugewiesen ist.

!!! info "Rückwärtsansicht -- automatisch befuellt"
    Diese Kategorie ist eine **Rückwärtsansicht** (Backward Category). Die Einträge entstehen nicht durch direkte Eingabe in dieser Kategorie, sondern automatisch: Sobald eine Organisation in der globalen Kategorie [Kontaktzuweisung](contact.md) eines beliebigen Objekts eingetragen wird, erscheint dieses Objekt hier in der Liste. Die Kategorie beantwortet die Frage: „Für welche Objekte ist diese Organisation zuständig?" -- ohne dass diese Information doppelt gepflegt werden muss.

## Verwendung

Typische Anwendungsfälle:

- **Zuständigkeitsübersicht**: Öffne ein Organisations-Objekt (z.B. einen Dienstleister oder eine interne Abteilung) und sieh auf einen Blick, für welche Server, Applikationen, Verträge oder Standorte diese Organisation zuständig ist. Das ist besonders wertvoll bei Personalwechseln, Vertragsverhandlungen oder Kündigungen: Man erkennt sofort den „Blast Radius" einer Änderung.
- **Dienstleister-Review**: Im Rahmen von Vendor-Audits lässt sich hier prüfen, auf welche Objekte ein externer Dienstleister Zugriff oder Verantwortung hat. Die Rolle (z.B. `Wartung`, `Support`, `Betrieb`) zeigt, in welcher Funktion der Dienstleister eingebunden ist.
- **Abteilungs-Inventar**: Für interne Organisationseinheiten zeigt die Kategorie, welche IT-Assets der jeweiligen Abteilung zugeordnet sind. Ein Report über alle Objekte der Organisation „IT-Abteilung" liefert ein vollständiges Abteilungs-Inventar.
- **Vertragsmanagement**: In Kombination mit der Kategorie [Organisation](s-organization.md) ergibt sich ein vollständiges Bild: Die Stammdaten der Organisation plus alle Objekte, für die sie verantwortlich ist. Bei Vertragsverlängerungen oder -kündigungen ist sofort ersichtlich, welche Assets betroffen sind.
- **Compliance und Risikomanagement**: Welche Objekte haengen von einem einzelnen Dienstleister ab? Diese Kategorie macht Abhängigkeiten sichtbar und unterstützt die Bewertung von Konzentrationsrisiken (Single Point of Failure auf Organisationsebene).

!!! warning "Einträge nicht direkt bearbeiten"
    Da es sich um eine Rückwärtsansicht handelt, sollten Änderungen an den Zuweisungen **nicht hier**, sondern in der [Kontaktzuweisung](contact.md) des jeweiligen Ziel-Objekts vorgenommen werden. Eine Änderung dort aktualisiert diese Ansicht automatisch.

[![Zugewiesene Objekte (Organisation)](../../assets/images/de/grundlagen/kategorien/s-organization-contact-assignment.png)](../../assets/images/de/grundlagen/kategorien/s-organization-contact-assignment.png)

## Felder

### Zugewiesenes Objekt

Das Objekt, dem diese Organisation in der [Kontaktzuweisung](contact.md) zugeordnet ist. Wird als Objekt-Browser-Verknüpfung dargestellt und ist direkt anklickbar, um zum verknüpften Objekt zu navigieren. Typische Beispiele: ein Server, eine Applikation, ein Vertrag oder ein Standort.

### Rolle

Die Rolle, in der die Organisation dem Objekt zugewiesen ist, z.B. `Administrator`, `Betreiber`, `Wartung`, `Eigentuemer` oder `Dienstleister`. Dialog+-Feld -- eigene Rollen lassen sich bei Bedarf ergänzen. Die Rolle ist nicht nur ein Label, sondern kann operative Auswirkungen haben: Das Rechtesystem in i-doit kann Berechtigungen rollenbasiert steuern, und das Benachrichtigungssystem kann Nachrichten an bestimmte Rollen senden.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATS__ORGANIZATION_CONTACT_ASSIGNMENT` |
| **Typ** | Spezifische Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Organisation |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Zugewiesenes Objekt** | `object` | Objekt-Browser (Verknüpfung) |
| **Rolle** | `role` | Dialog+ (erweiterbare Auswahl) |

### API-Beispiele

#### Eintrag erstellen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "object": 200,
        "category": "C__CATS__ORGANIZATION_CONTACT_ASSIGNMENT",
        "data": {
            "object": 415,
            "role": 3
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
        "category": "C__CATS__ORGANIZATION_CONTACT_ASSIGNMENT"
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
        "category": "C__CATS__ORGANIZATION_CONTACT_ASSIGNMENT",
        "entry": 5,
        "data": {
            "role": 7
        }
    },
    "id": 3
}
```
