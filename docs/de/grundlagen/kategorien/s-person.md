---
title: "Kategorie: Personen (spezifisch)"
description: Dokumentation der spezifischen Kategorie Personen in i-doit
icon:
status:
lang: de
---

# Kategorie: Personen (spezifisch)

Die Kategorie **Personen** ist die spezifische Einstiegskategorie des Objekttyps **Person**. Sie bündelt alle personenbezogenen Informationen in einer Übersicht und zeigt die wichtigsten Felder aus den untergeordneten Kategorien [Stammdaten](s-person-master.md), [Login](s-person-login.md) und [Personengruppenmitgliedschaft](s-person-assigned-groups.md) zusammengefasst an.

!!! info "Spezifische Kategorie -- nur auf Personen-Objekten"
    Diese Kategorie steht ausschließlich Objekten vom Typ **Person** zur Verfügung. Sie wird automatisch zugeordnet und kann nicht manuell anderen Objekttypen zugewiesen werden.

## Verwendung

Typische Anwendungsfälle:

- **Schneller Überblick**: Die Kategorie zeigt Vorname, Nachname, E-Mail, Telefon und weitere Stammdaten auf einen Blick -- ohne dass jede Unterkategorie einzeln geöffnet werden muss. Ideal für den täglichen Gebrauch im Helpdesk oder bei der Inventur.
- **Zusammenarbeit mit Kontaktzuweisung**: Personen-Objekte werden über die globale Kategorie [Kontaktzuweisung](contact.md) mit beliebigen Objekten verknüpft. Die hier gepflegten Stammdaten (Name, Telefon, E-Mail) erscheinen dann überall dort, wo der Kontakt zugewiesen ist.
- **LDAP/AD-Synchronisation**: Bei der automatischen Synchronisation mit einem Verzeichnisdienst werden die Felder dieser Kategorie befüllt. Die LDAP-spezifischen Felder `ldap_id` und `ldap_dn` zeigen, aus welchem Verzeichnis die Person stammt.
- **Reporting**: Im Report Manager können alle Personen mit ihren Stammdaten ausgewertet werden -- z.B. „Alle Personen der Abteilung IT" oder „Personen ohne zugewiesene Organisation".

[![Personen (spezifisch)](../../assets/images/de/grundlagen/kategorien/s-person.png)](../../assets/images/de/grundlagen/kategorien/s-person.png)

## Felder

### Anrede

Die Anrede der Person, z.B. `Herr` oder `Frau`. Dialog-Feld mit vordefinierten Werten.

### Vorname

Der Vorname der Person. Dieses Feld wird zusammen mit dem Nachnamen für die Anzeige in Listen, der Kontaktzuweisung und in Reports verwendet.

### Nachname

Der Nachname der Person. Zusammen mit dem Vornamen bildet er den Anzeigenamen des Personen-Objekts.

### Akademischer Grad

Ein optionaler akademischer Titel, z.B. `Dr.` oder `Prof.`. Wird in der Anzeige dem Namen vorangestellt, sofern gepflegt.

### Funktion

Die Funktion oder Stellenbezeichnung der Person innerhalb der Organisation, z.B. `Systemadministrator` oder `Abteilungsleiter IT`.

### Dienstbezeichnung

Eine ergänzende dienstliche Bezeichnung, z.B. ein Amtstitel oder eine spezifische Rollenbezeichnung.

### Straße

Die Straßenadresse der Person (dienstlich).

### Ort

Der Ort der Person (dienstlich).

### PLZ

Die Postleitzahl der Person (dienstlich).

### E-Mail-Adresse

Die primäre E-Mail-Adresse der Person. Dieses Feld wird vom Benachrichtigungssystem ausgewertet -- ohne gepflegte E-Mail-Adresse können keine Benachrichtigungen zugestellt werden.

### Telefon (Firma)

Die geschäftliche Telefonnummer der Person.

### Telefon (Privat)

Die private Telefonnummer der Person. Nur pflegen, wenn organisatorisch gewünscht.

### Mobiltelefon

Die Mobiltelefonnummer der Person.

### Fax

Die Faxnummer der Person.

### Pager

Die Pagernummer der Person.

### Personalnummer

Die interne Personalnummer aus dem HR-System. Nützlich zur eindeutigen Zuordnung bei Namensgleichheit und für den automatisierten Abgleich mit Personalverwaltungssystemen.

### Abteilung

Die Abteilung, der die Person zugeordnet ist, z.B. `IT`, `Finanzen` oder `Vertrieb`. Hilfreich für Reports und Filterung.

### Organisation

Die Organisation (Unternehmen), der die Person zugeordnet ist. Objekt-Browser-Feld -- es wird ein bestehendes Organisations-Objekt verknüpft.

### LDAP-ID

Die ID der Person im angebundenen Verzeichnisdienst. Wird automatisch bei der LDAP-Synchronisation befüllt.

### LDAP-DN

Der Distinguished Name (DN) der Person im Verzeichnisdienst, z.B. `CN=Max Mustermann,OU=IT,DC=example,DC=com`. Wird automatisch bei der LDAP-Synchronisation befüllt.

### Custom-Felder 1--8

Acht frei verwendbare Textfelder für individuelle Zusatzinformationen, die in keinem der Standardfelder abgebildet werden können. Die Bezeichnung der Custom-Felder kann in der i-doit-Verwaltung angepasst werden.

### Beschreibung

Freitext für zusätzliche Angaben zur Person: Erreichbarkeit, Sonderregelungen, Vertretungshinweise oder sonstige Notizen.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATS__PERSON` |
| **Typ** | Spezifische Kategorie |
| **Multi-Value** | Nein |
| **Zugeordnet zu** | Person |

!!! note "Verhältnis zu Stammdaten"
    Die Kategorien `C__CATS__PERSON` und `C__CATS__PERSON_MASTER` teilen sich dieselben Felder. `C__CATS__PERSON` ist die übergeordnete spezifische Kategorie, die in der Oberfläche als Zusammenfassung erscheint. Für die gezielte API-Bearbeitung der Stammdaten wird üblicherweise `C__CATS__PERSON_MASTER` verwendet -- siehe [Stammdaten (Person)](s-person-master.md).

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
        "category": "C__CATS__PERSON",
        "data": {
            "salutation": "Herr",
            "first_name": "Max",
            "last_name": "Mustermann",
            "mail": "m.mustermann@example.com",
            "phone_company": "+49 211 12345-100",
            "department": "IT",
            "organization": 56,
            "description": "Hauptansprechpartner Netzwerk-Infrastruktur"
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
        "category": "C__CATS__PERSON"
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
        "category": "C__CATS__PERSON",
        "entry": 1,
        "data": {
            "department": "IT-Security",
            "phone_mobile": "+49 171 9876543",
            "description": "Abteilungswechsel 2026-04: Ab sofort IT-Security."
        }
    },
    "id": 3
}
```
