---
title: "Kategorie: Personengruppen (spezifisch)"
description: Dokumentation der spezifischen Kategorie Personengruppen in i-doit
icon:
status:
lang: de
---

# Kategorie: Personengruppen (spezifisch)

Die Kategorie **Personengruppen** ist die spezifische Einstiegskategorie des Objekttyps **Personengruppe**. Sie bündelt die Kerninformationen einer Gruppe -- Name, E-Mail, Telefon und LDAP-Mapping -- in einer Übersicht. Die Kategorie ist eine **Single-Value-Kategorie** -- pro Personengruppe existiert genau ein Datensatz.

!!! info "Spezifische Kategorie -- nur auf Personengruppen-Objekten"
    Diese Kategorie steht ausschließlich Objekten vom Typ **Personengruppe** zur Verfügung. Sie wird automatisch zugeordnet und kann nicht manuell anderen Objekttypen zugewiesen werden.

## Verwendung

Typische Anwendungsfälle:

- **Teams und Abteilungen abbilden**: Lege für jedes Team, jede Abteilung oder jede Zuständigkeitsgruppe ein Personengruppen-Objekt an. Die Stammdaten der Gruppe (Name, E-Mail, Telefon) werden in dieser Kategorie gepflegt, die Mitglieder über die Kategorie **Mitglieder** zugeordnet.
- **Kontaktzuweisung vereinfachen**: Statt einzelne Personen jedem Server, jeder Applikation oder jedem Netzwerkgerät zuzuweisen, kann eine ganze Personengruppe über die [Kontaktzuweisung](contact.md) verknüpft werden. Bei Personalwechseln genügt es dann, die Gruppenmitgliedschaft anzupassen -- alle Kontaktzuweisungen der Gruppe bleiben erhalten.
- **Berechtigungen über Gruppen steuern**: Das Rechtesystem von i-doit unterstützt gruppenbasierte Berechtigungen. Eine Personengruppe kann z.B. Bearbeitungsrechte auf bestimmte Objekttypen oder Kategorien erhalten. Alle Mitglieder der Gruppe erben diese Rechte automatisch.
- **LDAP-Gruppenmapping**: Über das Feld **LDAP-Group (Mapping)** wird die i-doit-Personengruppe einer Active-Directory- oder LDAP-Gruppe zugeordnet. Bei der LDAP-Synchronisation werden dann automatisch die Mitglieder der AD-Gruppe auch in i-doit als Mitglieder eingetragen. So bleiben Gruppenmitgliedschaften ohne manuellen Pflegeaufwand aktuell.
- **Erreichbarkeit von Teams dokumentieren**: Die Felder E-Mail und Telefon ermöglichen es, Funktionspostfächer und Team-Rufnummern zu hinterlegen. So kann in der Kontaktzuweisung eines Servers nicht nur gesehen werden, dass das „Netzwerk-Team" zuständig ist, sondern auch, wie es erreichbar ist.

[![Kategorie Personengruppen](../../assets/images/de/grundlagen/kategorien/s-person-group.png)](../../assets/images/de/grundlagen/kategorien/s-person-group.png)

## Felder

### Bezeichnung

Der Name der Personengruppe, z.B. `IT-Administratoren`, `Netzwerk-Team` oder `Change Advisory Board`. Dieser Wert erscheint in der Kontaktzuweisung, in Reports und in der Mitglieder-Kategorie der einzelnen Personen.

### E-Mail

Die E-Mail-Adresse der Gruppe -- typischerweise ein Funktionspostfach wie `it-admins@example.com`. Wird vom Benachrichtigungssystem verwendet, wenn die Personengruppe als Kontakt zugewiesen ist.

### Telefon

Die Telefonnummer der Gruppe, z.B. eine Team-Durchwahl oder Hotline-Nummer.

### LDAP-Group (Mapping)

Der Name oder Distinguished Name der zugehörigen LDAP/AD-Gruppe, z.B. `CN=IT-Admins,OU=Groups,DC=example,DC=com`. Wird für die automatische Synchronisation der Gruppenmitgliedschaften verwendet. Wenn dieses Feld gesetzt ist, gleicht i-doit bei jedem LDAP-Sync die Mitglieder der AD-Gruppe mit den Mitgliedern der i-doit-Personengruppe ab.

!!! warning "LDAP-Mapping korrekt konfigurieren"
    Damit die LDAP-Gruppensynchronisation funktioniert, muss zusätzlich in der i-doit-Verwaltung unter **LDAP > Verzeichnisse** das Gruppen-Mapping aktiviert sein. Das Feld `ldap_group` in dieser Kategorie allein reicht nicht aus -- es definiert nur die Zuordnung, nicht die Synchronisation selbst.

### Beschreibung

Freitext für zusätzliche Angaben: Zweck der Gruppe, Zuständigkeitsbereiche, Erreichbarkeitszeiten oder organisatorische Hinweise.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATS__PERSON_GROUP` |
| **Typ** | Spezifische Kategorie |
| **Multi-Value** | Nein |
| **Zugeordnet zu** | Personengruppe |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Bezeichnung** | `title` | Text |
| **E-Mail** | `email_address` | Text |
| **Telefon** | `phone` | Text |
| **LDAP-Group (Mapping)** | `ldap_group` | Text |
| **Beschreibung** | `description` | Textfeld (mehrzeilig) |

### API-Beispiele

#### Eintrag erstellen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "object": 78,
        "category": "C__CATS__PERSON_GROUP",
        "data": {
            "title": "IT-Administratoren",
            "email_address": "it-admins@example.com",
            "phone": "+49 211 12345-200",
            "ldap_group": "CN=IT-Admins,OU=Groups,DC=example,DC=com",
            "description": "Zentrale Admingruppe fuer Server- und Netzwerk-Infrastruktur"
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
        "objID": 78,
        "category": "C__CATS__PERSON_GROUP"
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
        "object": 78,
        "category": "C__CATS__PERSON_GROUP",
        "entry": 1,
        "data": {
            "email_address": "infra-team@example.com",
            "title": "Infrastruktur-Team",
            "description": "Umbenannt 2026-04: Ehemals IT-Administratoren, jetzt Infrastruktur-Team."
        }
    },
    "id": 3
}
```
