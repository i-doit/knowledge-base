---
title: "Kategorie: Stammdaten (Person)"
description: Dokumentation der Kategorie Stammdaten für Personen-Objekte in i-doit
icon:
status:
lang: de
---

# Kategorie: Stammdaten (Person)

Die Kategorie **Stammdaten** ist das zentrale Datenblatt eines Personen-Objekts. Hier werden Name, Kontaktinformationen, Abteilung, Organisation und weitere personenbezogene Felder gepflegt. Sie ist eine **Single-Value-Kategorie** -- pro Person existiert genau ein Stammdatensatz.

!!! warning "Das Herzstück jeder Person in i-doit"
    Die Stammdaten sind die Grundlage für nahezu alles, was mit Personen in i-doit passiert: Die hier gepflegte E-Mail-Adresse wird für Benachrichtigungen verwendet, der Name erscheint in jeder Kontaktzuweisung und in Reports, und die Organisation verknüpft die Person mit ihrem Unternehmen. **Ungepflegte Stammdaten führen zu leeren Kontaktzuweisungen, fehlgeschlagenen Benachrichtigungen und unbrauchbaren Reports.** Investiere in saubere Stammdaten -- am besten automatisiert über LDAP-Synchronisation.

## Verwendung

Typische Anwendungsfälle:

- **Kontaktdaten zentral pflegen**: Erfasse Vorname, Nachname, E-Mail, Telefonnummern und Adresse an einer Stelle. Diese Daten werden überall in i-doit referenziert -- bei der [Kontaktzuweisung](contact.md), in Reports und bei Benachrichtigungen.
- **Organisationszugehörigkeit abbilden**: Über das Feld **Organisation** wird die Person mit einem Organisations-Objekt verknüpft. So ist sofort ersichtlich, zu welchem Unternehmen oder welcher Einrichtung die Person gehört. In Reports lässt sich dann z.B. auswerten: „Alle Personen der Organisation XY, die Servern als Administrator zugewiesen sind."
- **LDAP/AD-Synchronisation**: Bei der automatischen Synchronisation mit Active Directory oder OpenLDAP werden die Stammdatenfelder automatisch befüllt und aktuell gehalten. Die Felder `ldap_id` und `ldap_dn` dienen der eindeutigen Zuordnung zum Verzeichniseintrag. Nach dem initialen Import genügt ein regelmäßiger Sync, um Namensänderungen, Abteilungswechsel und neue Mitarbeiter automatisch zu übernehmen.
- **HR-Integration**: Die Personalnummer ermöglicht den Abgleich mit Personalverwaltungssystemen. Über die Custom-Felder 1--8 lassen sich zusätzliche HR-spezifische Informationen erfassen, die in keinem Standardfeld vorgesehen sind.
- **Reporting und Compliance**: Im Report Manager lassen sich Auswertungen wie „Alle Personen ohne E-Mail-Adresse", „Personen ohne zugewiesene Organisation" oder „Mitarbeiter der Abteilung IT mit ihren zugewiesenen Objekten" erstellen.

[![Stammdaten (Person)](../../assets/images/de/grundlagen/kategorien/s-person-master.png)](../../assets/images/de/grundlagen/kategorien/s-person-master.png)

## Felder

### Anrede

Die Anrede der Person, z.B. `Herr` oder `Frau`. Dialog-Feld mit vordefinierten Werten. Wird bei der formellen Anzeige des Namens vorangestellt.

### Vorname

Der Vorname der Person. Zusammen mit dem Nachnamen bildet er den Anzeigenamen, der in Listen, der Kontaktzuweisung und in Reports erscheint.

### Nachname

Der Nachname der Person. Pflichtfeld in der Praxis -- ohne Nachnamen ist die Person in Listen und Reports kaum identifizierbar.

### Akademischer Grad

Ein optionaler akademischer Titel, z.B. `Dr.`, `Prof.` oder `Dipl.-Ing.`. Wird dem Namen in der Anzeige vorangestellt.

### Funktion

Die Funktion oder Stellenbezeichnung innerhalb der Organisation, z.B. `Systemadministrator`, `Teamleiter Infrastruktur` oder `CISO`. Hilfreich zur schnellen Einordnung der Zuständigkeit.

### Dienstbezeichnung

Eine ergänzende dienstliche Bezeichnung, z.B. ein Amtstitel im öffentlichen Dienst oder eine vertragliche Rollenbezeichnung.

### Straße

Die Straßenadresse der Person (dienstlich). Nützlich für Standortzuordnungen und postalische Kommunikation.

### Ort

Der Ort (dienstlich).

### PLZ

Die Postleitzahl (dienstlich).

### E-Mail-Adresse

Die primäre E-Mail-Adresse der Person. **Eines der wichtigsten Felder** -- ohne gepflegte E-Mail-Adresse können Benachrichtigungen von i-doit nicht zugestellt werden, und die Person ist per E-Mail nicht erreichbar.

### Telefon (Firma)

Die geschäftliche Telefonnummer. Wird in der Kontaktzuweisung mit angezeigt und ist für den schnellen Zugriff im Störungsfall gedacht.

### Telefon (Privat)

Die private Telefonnummer. Nur pflegen, wenn organisatorisch gewünscht und datenschutzrechtlich zulässig.

### Mobiltelefon

Die Mobiltelefonnummer der Person. Besonders relevant für Rufbereitschaften und Eskalationen.

### Fax

Die Faxnummer der Person.

### Pager

Die Pagernummer der Person.

### Personalnummer

Die interne Personalnummer aus dem HR- oder ERP-System. Ermöglicht eine eindeutige Zuordnung unabhängig vom Namen -- besonders wichtig bei Namensgleichheit und für den automatisierten Datenabgleich.

### Abteilung

Die Abteilung, der die Person zugeordnet ist, z.B. `IT`, `Finanzen`, `Personal` oder `Geschäftsführung`. Textfeld -- kann frei beschrieben werden. In Reports gut als Filter verwendbar.

### Organisation

Die zugehörige Organisation als Objekt-Verknüpfung. Über den Objekt-Browser wird ein vorhandenes Organisations-Objekt ausgewählt. So entsteht eine bidirektionale Verbindung: Die Organisation zeigt in ihrer Kategorie [Personen](s-organization-persons.md) alle zugeordneten Mitarbeiter an.

### LDAP-ID

Die ID der Person im angebundenen Verzeichnisdienst (Active Directory, OpenLDAP). Wird bei der LDAP-Synchronisation automatisch befüllt und dient der eindeutigen Zuordnung.

### LDAP-DN

Der Distinguished Name (DN) im Verzeichnisdienst, z.B. `CN=Max Mustermann,OU=IT,DC=example,DC=com`. Wird automatisch bei der LDAP-Synchronisation befüllt und sollte nicht manuell geändert werden.

### Custom-Felder 1--8

Acht frei verwendbare Textfelder für individuelle Zusatzinformationen. Die Bezeichnungen können in der i-doit-Verwaltung angepasst werden, z.B. `Kostenstelle`, `Gebäude`, `Standort-Code` oder `Vertragsnummer`.

### Beschreibung

Freitext für zusätzliche Angaben: Erreichbarkeit, Sonderregelungen, Vertretungshinweise, Notizen zum Onboarding oder sonstige Informationen.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATS__PERSON_MASTER` |
| **Typ** | Spezifische Kategorie |
| **Multi-Value** | Nein |
| **Zugeordnet zu** | Person |

!!! tip "Stammdaten vs. Personen-Kategorie"
    Die Kategorien `C__CATS__PERSON` und `C__CATS__PERSON_MASTER` teilen sich dieselben Felder. In der Oberfläche erscheint `C__CATS__PERSON` als Übersichtskategorie, während `C__CATS__PERSON_MASTER` die eigentliche Datenkategorie ist. Für API-Zugriffe auf die Stammdaten wird in der Regel `C__CATS__PERSON_MASTER` verwendet.

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Anrede** | `salutation` | Dialog (Auswahl) |
| **Vorname** | `first_name` | Text |
| **Nachname** | `last_name` | Text |
| **Akademischer Grad** | `academic_degree` | Text |
| **Funktion** | `function` | Text |
| **Dienstbezeichnung** | `service_designation` | Text |
| **Straße** | `street` | Text |
| **Ort** | `city` | Text |
| **PLZ** | `zip_code` | Text |
| **E-Mail-Adresse** | `mail` | Text |
| **Telefon (Firma)** | `phone_company` | Text |
| **Telefon (Privat)** | `phone_home` | Text |
| **Mobiltelefon** | `phone_mobile` | Text |
| **Fax** | `fax` | Text |
| **Pager** | `pager` | Text |
| **Personalnummer** | `personnel_number` | Text |
| **Abteilung** | `department` | Text |
| **Organisation** | `organization` | Objekt-Browser (Verknüpfung) |
| **LDAP-ID** | `ldap_id` | Text |
| **LDAP-DN** | `ldap_dn` | Text |
| **Beschreibung** | `description` | Textfeld (mehrzeilig) |
| **Custom 1--8** | `custom_1` bis `custom_8` | Text |

### API-Beispiele

#### Eintrag erstellen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "object": 1234,
        "category": "C__CATS__PERSON_MASTER",
        "data": {
            "first_name": "Max",
            "last_name": "Mustermann",
            "salutation": "Herr",
            "academic_degree": "Dr.",
            "mail": "m.mustermann@example.com",
            "phone_company": "+49 211 12345-100",
            "phone_mobile": "+49 171 9876543",
            "department": "IT",
            "function": "Systemadministrator",
            "organization": 56,
            "personnel_number": "P-20240001",
            "description": "Ansprechpartner Netzwerk und Firewall"
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
        "objID": 1234,
        "category": "C__CATS__PERSON_MASTER"
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
        "category": "C__CATS__PERSON_MASTER",
        "entry": 1,
        "data": {
            "department": "IT-Security",
            "function": "Security Engineer",
            "description": "Abteilungswechsel 2026-04: Von IT zu IT-Security."
        }
    },
    "id": 3
}
```
