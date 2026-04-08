---
title: "Kategorie: Stammdaten (Personengruppe)"
description: Dokumentation der Kategorie Stammdaten für Personengruppen-Objekte in i-doit
icon:
status:
lang: de
---

# Kategorie: Stammdaten (Personengruppe)

Die Kategorie **Stammdaten** einer Personengruppe enthält die Kerninformationen der Gruppe: Name, E-Mail-Adresse, Telefonnummer und das LDAP-Gruppen-Mapping. Sie ist eine **Single-Value-Kategorie** -- pro Personengruppe existiert genau ein Stammdatensatz.

!!! info "Verhältnis zur Personengruppen-Kategorie"
    Die Kategorien `C__CATS__PERSON_GROUP` und `C__CATS__PERSON_GROUP_MASTER` teilen sich dieselben Felder. In der Oberfläche erscheint `C__CATS__PERSON_GROUP` als Übersichtskategorie, während `C__CATS__PERSON_GROUP_MASTER` die eigentliche Datenkategorie ist. Für API-Zugriffe auf die Stammdaten einer Personengruppe wird in der Regel `C__CATS__PERSON_GROUP_MASTER` verwendet.

## Verwendung

Typische Anwendungsfälle:

- **Gruppeninformationen zentral pflegen**: Name, E-Mail und Telefonnummer der Personengruppe werden hier gepflegt. Diese Daten erscheinen überall dort, wo die Gruppe in einer [Kontaktzuweisung](contact.md) referenziert wird -- auf Servern, Applikationen, Netzwerkkomponenten und allen anderen Objekten.
- **Funktionspostfach und Team-Rufnummer hinterlegen**: Die E-Mail-Adresse ist besonders wichtig für das Benachrichtigungssystem von i-doit. Wenn eine Personengruppe als Kontakt einem Objekt zugewiesen ist und eine Benachrichtigung ausgelöst wird, geht die E-Mail an die hier hinterlegte Adresse. So erreichen Benachrichtigungen das gesamte Team über ein Funktionspostfach statt über individuelle Adressen.
- **LDAP/AD-Gruppenanbindung konfigurieren**: Über das Feld **LDAP-Group (Mapping)** wird die i-doit-Personengruppe einer Gruppe im Verzeichnisdienst zugeordnet. Bei der LDAP-Synchronisation werden die Mitglieder der AD/LDAP-Gruppe automatisch in i-doit als Gruppenmitglieder eingetragen und aktuell gehalten.
- **Reporting und Organisation**: Im Report Manager lassen sich Auswertungen wie „Alle Personengruppen ohne E-Mail-Adresse" oder „Personengruppen mit LDAP-Mapping" erstellen. Das hilft bei der Qualitätssicherung der Kontaktdaten und der LDAP-Konfiguration.
- **API-gesteuerte Gruppenverwaltung**: Über die API können Personengruppen automatisiert erstellt und aktualisiert werden -- z.B. beim Onboarding neuer Teams oder bei der regelmäßigen Synchronisation mit einem HR-System.

[![Kategorie Stammdaten Personengruppe](../../assets/images/de/grundlagen/kategorien/s-person-group-master.png)](../../assets/images/de/grundlagen/kategorien/s-person-group-master.png)

## Felder

### Bezeichnung

Der Name der Personengruppe, z.B. `IT-Administratoren`, `Netzwerk-Team`, `Change Advisory Board` oder `1st-Level-Support`. Dieser Wert erscheint in der Kontaktzuweisung, in der Personengruppenmitgliedschaft der einzelnen Personen und in Reports. Er sollte eindeutig und sprechend sein.

### E-Mail

Die E-Mail-Adresse der Gruppe, typischerweise ein Funktionspostfach wie `netzwerk-team@example.com`. Wird vom Benachrichtigungssystem verwendet, wenn die Personengruppe als Kontakt zugewiesen ist.

!!! warning "Ohne E-Mail keine Benachrichtigungen"
    Wenn eine Personengruppe als Kontakt zugewiesen ist, aber keine E-Mail-Adresse hinterlegt hat, können Benachrichtigungen von i-doit nicht an die Gruppe zugestellt werden. Stelle sicher, dass jede aktive Personengruppe eine gültige E-Mail-Adresse hat.

### Telefon

Die Telefonnummer der Gruppe, z.B. eine Team-Durchwahl, Hotline oder Bereitschaftsnummer. Wird in der Kontaktzuweisung mit angezeigt und ermöglicht den schnellen Zugriff im Störungsfall.

### LDAP-Group (Mapping)

Der Name oder Distinguished Name der zugehörigen LDAP/AD-Gruppe, z.B. `CN=Netzwerk-Team,OU=Groups,DC=example,DC=com`. Wird für die automatische Synchronisation der Gruppenmitgliedschaften verwendet.

Damit die Synchronisation funktioniert, muss zusätzlich in der i-doit-Verwaltung unter **LDAP > Verzeichnisse** das Gruppen-Mapping aktiviert und konfiguriert sein.

### Beschreibung

Freitext für zusätzliche Angaben: Zweck und Aufgabenbereich der Gruppe, Erreichbarkeitszeiten, Eskalationswege oder organisatorische Hinweise.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATS__PERSON_GROUP_MASTER` |
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
        "category": "C__CATS__PERSON_GROUP_MASTER",
        "data": {
            "title": "Netzwerk-Team",
            "email_address": "netzwerk-team@example.com",
            "phone": "+49 211 12345-300",
            "ldap_group": "CN=Netzwerk-Team,OU=Groups,DC=example,DC=com",
            "description": "Zustaendig fuer LAN, WAN und Firewall-Infrastruktur"
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
        "category": "C__CATS__PERSON_GROUP_MASTER"
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
        "category": "C__CATS__PERSON_GROUP_MASTER",
        "entry": 1,
        "data": {
            "email_address": "infra-netzwerk@example.com",
            "phone": "+49 211 12345-350",
            "description": "Aktualisiert 2026-04: Neue Durchwahl und E-Mail nach Teamrestrukturierung."
        }
    },
    "id": 3
}
```
