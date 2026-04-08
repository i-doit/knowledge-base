---
title: "Kategorie: Login"
description: Dokumentation der Kategorie Login für Personen-Objekte in i-doit
icon:
status:
lang: de
---

# Kategorie: Login

Die Kategorie **Login** verwaltet die Anmeldedaten einer Person für den Zugang zur i-doit-Oberfläche und zur API. Sie ist eine **Single-Value-Kategorie** -- pro Person existiert genau ein Login-Datensatz.

!!! warning "Sicherheitsrelevante Kategorie"
    Die Login-Kategorie steuert, ob und wie sich eine Person an i-doit anmelden kann. Ein deaktivierter Login sperrt den Benutzer vollständig aus -- sowohl aus der Weboberfläche als auch aus der API. Änderungen an dieser Kategorie sollten mit Bedacht und in Abstimmung mit dem i-doit-Admin vorgenommen werden. Passworte werden in i-doit gehasht gespeichert und sind nach dem Setzen nicht mehr im Klartext auslesbar.

## Verwendung

Typische Anwendungsfälle:

- **Lokale Benutzer anlegen**: Für Personen, die sich nicht über LDAP/AD authentifizieren, werden Benutzername und Passwort direkt in dieser Kategorie gepflegt. Der Benutzername muss innerhalb der i-doit-Installation eindeutig sein.
- **LDAP-Synchronisation**: Bei der Anbindung an Active Directory oder OpenLDAP wird der Benutzername automatisch aus dem Verzeichnisdienst übernommen. Das Passwort wird in diesem Fall nicht lokal gespeichert, sondern bei jeder Anmeldung gegen den Verzeichnisdienst geprüft. Die LDAP-Konfiguration erfolgt in der i-doit-Verwaltung unter **LDAP > Verzeichnisse**.
- **Benutzer sperren**: Über das Feld **Login deaktiviert** kann der Zugang einer Person temporär oder dauerhaft gesperrt werden, ohne das Personen-Objekt zu archivieren. Nützlich bei Elternzeit, Sabbatical oder Sicherheitsvorfällen.
- **Passwort-Reset**: Die hinterlegte E-Mail-Adresse für den Passwort-Reset ermöglicht es Benutzern, ihr Passwort selbständig zurückzusetzen, sofern diese Funktion in i-doit aktiviert ist.
- **Audit und Nachvollziehbarkeit**: Das Feld **Letzter Login** zeigt, wann sich die Person zuletzt an i-doit angemeldet hat. Hilfreich für Lizenzauswertungen und die Identifikation inaktiver Benutzer.

[![Login](../../assets/images/de/grundlagen/kategorien/s-person-login.png)](../../assets/images/de/grundlagen/kategorien/s-person-login.png)

## Felder

### Login deaktiviert

Steuert, ob die Person sich an i-doit anmelden kann. Bei `Ja` ist der Login vollständig gesperrt -- weder Weboberfläche noch API-Zugriff sind möglich. Standardwert ist `Nein` (Login aktiv).

### Benutzername

Der Anmeldename für i-doit. Muss innerhalb der Installation eindeutig sein. Bei LDAP-Synchronisation wird dieser Wert automatisch aus dem Verzeichnisdienst übernommen (typischerweise `sAMAccountName` oder `uid`). Der Benutzername wird in der API über den Key `title` angesprochen.

!!! note "API-Key ist `title`, nicht `username`"
    In der API heißt das Feld für den Benutzernamen `title` -- nicht `username` oder `login`. Das ist ein häufiger Stolperstein bei der API-Integration.

### Passwort

Das Passwort für die lokale Anmeldung. Wird beim Speichern gehasht und ist danach nicht mehr im Klartext auslesbar. Bei LDAP-authentifizierten Benutzern ist dieses Feld irrelevant -- die Authentifizierung erfolgt direkt gegen den Verzeichnisdienst.

### E-Mail-Adresse für Passwort-Reset

Die E-Mail-Adresse, an die ein Passwort-Reset-Link gesendet wird. Kann von der primären E-Mail-Adresse in den [Stammdaten](s-person-master.md) abweichen -- z.B. wenn der Reset-Link an eine private Adresse gehen soll.

### Letzter Login

Datum und Uhrzeit der letzten erfolgreichen Anmeldung. Dieses Feld wird automatisch von i-doit aktualisiert und ist schreibgeschützt. Nützlich für Auswertungen zur Benutzeraktivität und Lizenzoptimierung.

### Beschreibung

Freitext für zusätzliche Angaben: Hinweise zur Authentifizierungsmethode, Sperrgründe, Vertretungsregelungen oder sonstige administrative Notizen.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATS__PERSON_LOGIN` |
| **Typ** | Spezifische Kategorie |
| **Multi-Value** | Nein |
| **Zugeordnet zu** | Person |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Login deaktiviert** | `disabled_login` | Dialog (Auswahl) |
| **Benutzername** | `title` | Text |
| **Passwort** | `user_pass` | Text |
| **E-Mail-Adresse für Passwort-Reset** | `email_address` | Text |
| **Letzter Login** | `last_login` | Datum/Zeit (nur lesen) |
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
        "category": "C__CATS__PERSON_LOGIN",
        "data": {
            "title": "mmustermann",
            "user_pass": "ein-sicheres-passwort",
            "disabled_login": 0,
            "email_address": "m.mustermann@example.com",
            "description": "Lokaler Benutzer, kein LDAP"
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
        "category": "C__CATS__PERSON_LOGIN"
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
        "category": "C__CATS__PERSON_LOGIN",
        "entry": 1,
        "data": {
            "disabled_login": 1,
            "description": "Login gesperrt 2026-04-05: Mitarbeiter ausgeschieden."
        }
    },
    "id": 3
}
```
