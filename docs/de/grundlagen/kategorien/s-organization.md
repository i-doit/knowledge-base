---
title: "Kategorie: Organisation"
description: Dokumentation der spezifischen Kategorie Organisation in i-doit
icon:
status:
lang: de
---

# Kategorie: Organisation

Die Kategorie **Organisation** ist eine **spezifische Kategorie** des Objekttyps **Organisation** und beschreibt die Stammdaten einer Organisation. Sie ist eine **Single-Value-Kategorie** -- pro Organisations-Objekt existiert genau ein Eintrag mit den grundlegenden Kontaktdaten wie Firmenbezeichnung, Telefon, Fax, Website und Hauptsitz-Kennzeichnung.

!!! info "Organisation vs. Kontaktzuweisung -- zwei Perspektiven"
    Diese Kategorie beschreibt, **was** eine Organisation **ist** -- ihre Identität und Erreichbarkeit. Sie beantwortet nicht die Frage, welche Objekte dieser Organisation zugeordnet sind. Dafür ist die Kategorie [Zugewiesene Objekte](s-organization-contact-assignment.md) zuständig, die als Rückwärtsansicht alle Objekte zeigt, bei denen diese Organisation in der [Kontaktzuweisung](contact.md) eingetragen ist. Die Trennung folgt dem i-doit-Prinzip: Die Organisation wird einmal zentral gepflegt und kann dann beliebig vielen Objekten zugewiesen werden.

## Verwendung

Typische Anwendungsfälle:

- **Lieferanten und Dienstleister verwalten**: Lege für jeden externen Partner (Hardware-Lieferant, Softwarehersteller, Wartungsdienstleister, Cloud-Provider) ein Organisations-Objekt an und pflege hier die Kontaktdaten. In Kombination mit der [Kontaktzuweisung](contact.md) auf den betreuten Objekten entsteht eine vollständige Zuordnung: Welcher Dienstleister ist für welche Server, Applikationen oder Verträge zuständig?
- **Interne Abteilungen abbilden**: Auch interne Organisationseinheiten (IT-Abteilung, Facility Management, Geschäftsführung) können als Organisations-Objekte gepflegt werden. Die Kontaktdaten erleichtern die Erreichbarkeit, und über die Kontaktzuweisung lässt sich auswerten, welche Assets welcher Abteilung zugeordnet sind.
- **Hauptsitz kennzeichnen**: Das Feld Hauptsitz markiert, ob es sich um den Hauptstandort einer Organisation handelt oder um eine Niederlassung. In Konzernen mit vielen Standorten ergibt sich so per Report eine Übersicht: Welche Organisationen sind Hauptsitze, welche Aussenstellen?
- **Reporting und Auswertungen**: Im Report Manager lassen sich Auswertungen wie „Alle Organisationen ohne Telefonnummer" oder „Alle Dienstleister mit Website" erstellen -- nuetzlich für Datenpflege-Kampagnen und Kontaktlisten.
- **Compliance und Vertragsmanagement**: In Kombination mit der Kategorie Vertragszuweisung zeigt sich, welche Verträge mit welcher Organisation bestehen. Die Kontaktdaten in dieser Kategorie sind dann der erste Anlaufpunkt für Vertragsverhandlungen oder Eskalationen.

[![Organisation](../../assets/images/de/grundlagen/kategorien/s-organization.png)](../../assets/images/de/grundlagen/kategorien/s-organization.png)

## Felder

### Bezeichnung

Der Name der Organisation, z.B. `synetics GmbH`, `ACME Corp.` oder `IT-Abteilung Standort Berlin`. Dieser Wert erscheint in der Listenansicht und in Reports. Bei externen Organisationen empfiehlt sich der offizielle Firmenname, bei internen Einheiten eine eindeutige Bezeichnung nach interner Nomenklatur.

### Telefon

Die zentrale Telefonnummer der Organisation, z.B. `+49 211 699 31-0`. Nuetzlich für den Störungsfall: Wenn ein Dienstleister kontaktiert werden muss, ist die Nummer sofort verfügbar, ohne in externen Systemen suchen zu müssen.

### Fax

Die Faxnummer der Organisation. In vielen Branchen (Behörden, Versicherungen, Gesundheitswesen) ist Fax nach wie vor ein relevanter Kommunikationskanal, insbesondere für formale Schreiben und Vertragsunterlagen.

### Website

Die URL der Organisation, z.B. `https://www.i-doit.com`. Verlinkt typischerweise auf die Hauptseite oder das Kundenportal. Nuetzlich für schnellen Zugriff auf Support-Portale, Dokumentation oder Kontaktformulare des Dienstleisters.

### Hauptsitz

Kennzeichnet, ob es sich um den Hauptsitz der Organisation handelt. Dialog-Feld mit vordefinierten Werten. In Unternehmensgruppen mit mehreren Standorten ermöglicht dieses Feld die Unterscheidung zwischen Zentrale und Niederlassungen -- relevant für Eskalationswege und Vertragspartner-Identifikation.

### Beschreibung

Freitext für zusätzliche Angaben: Branche, Vertragspartner-Nummer, interne Kurzbezeichnung, Ansprechpartner-Hinweise oder besondere Vereinbarungen (z.B. „Wartungsfenster nur Dienstag-Donnerstag 18-22 Uhr").

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATS__ORGANIZATION` |
| **Typ** | Spezifische Kategorie |
| **Multi-Value** | Nein |
| **Zugeordnet zu** | Organisation |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Bezeichnung** | `title` | Text |
| **Telefon** | `telephone` | Text |
| **Fax** | `fax` | Text |
| **Website** | `website` | Text |
| **Hauptsitz** | `headquarter` | Dialog (Auswahl) |
| **Beschreibung** | `description` | Textfeld (mehrzeilig) |

### API-Beispiele

#### Eintrag erstellen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "object": 200,
        "category": "C__CATS__ORGANIZATION",
        "data": {
            "title": "synetics GmbH",
            "telephone": "+49 211 699 31-0",
            "fax": "+49 211 699 31-99",
            "website": "https://www.i-doit.com",
            "headquarter": 1,
            "description": "Hersteller von i-doit. Hauptsitz Duesseldorf."
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
        "category": "C__CATS__ORGANIZATION"
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
        "category": "C__CATS__ORGANIZATION",
        "entry": 1,
        "data": {
            "telephone": "+49 211 699 31-100",
            "description": "Hersteller von i-doit. 2026-04: Neue Zentral-Rufnummer nach Umzug."
        }
    },
    "id": 3
}
```
