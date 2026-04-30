---
title: "Kategorie: E-Mail-Adressen"
description: Dokumentation der Kategorie E-Mail-Adressen in i-doit
icon:
status:
lang: de
---

# Kategorie: E-Mail-Adressen

Die Kategorie **E-Mail-Adressen** erfasst alle E-Mail-Adressen einer Person oder Personengruppe. Sie ist eine **Multi-Value-Kategorie** – pro Objekt können beliebig viele Adressen hinterlegt werden, etwa eine dienstliche und eine private E-Mail-Adresse oder verschiedene Funktionsadressen.

!!! warning "Primäre E-Mail-Adresse und Benachrichtigungen"
    Die als **primär** markierte E-Mail-Adresse wird von i-doit für alle automatischen Benachrichtigungen verwendet. Ist keine Adresse als primär gekennzeichnet, erhält die Person keine Benachrichtigungen per E-Mail – selbst wenn sie über eine [Kontaktzuweisung](contact.md) einem Objekt zugeordnet ist. Prüfe daher bei neuen Personen immer, ob genau eine Adresse als primär markiert ist.

## Verwendung

Typische Anwendungsfälle:

- **Benachrichtigungen**: i-doit sendet automatische Benachrichtigungen (z.B. bei Ablauf von Wartungsverträgen oder Zertifikaten) an die primäre E-Mail-Adresse. Ohne korrekt gepflegte E-Mail-Kategorie laufen diese Benachrichtigungen ins Leere.
- **Kontaktdaten vervollständigen**: Zusammen mit den Stammdaten der Person (Telefon, Abteilung, Standort) bildet die E-Mail-Adresse einen vollständigen Kontaktdatensatz. Das ist besonders für den Service Desk wichtig, der im Störungsfall schnell den richtigen Ansprechpartner erreichen muss.
- **Personengruppen und Funktionsadressen**: Bei Personengruppen (z.B. „IT-Betrieb") kann hier die gemeinsame Funktions-Mailbox hinterlegt werden, z.B. `it-betrieb@firma.de`. Benachrichtigungen, die an die Gruppe gehen, erreichen so das gesamte Team.
- **LDAP/AD-Synchronisation**: Bei der Synchronisation mit Active Directory oder LDAP wird die E-Mail-Adresse häufig automatisch importiert. Die Kategorie dient dann als Ziel für das Mapping des `mail`-Attributs.

[![E-Mail-Adressen](../../assets/images/de/grundlagen/kategorien/mail-addresses.png)](../../assets/images/de/grundlagen/kategorien/mail-addresses.png)

## Felder

### E-Mail-Adresse

Die eigentliche E-Mail-Adresse, z.B. `max.mustermann@firma.de`. Dieses Feld ist der Anzeigewert in der Listenansicht und in Reports. Achte auf korrekte Schreibweise – ein Tippfehler hier bedeutet, dass Benachrichtigungen nicht zugestellt werden.

### Primäre E-Mail-Adresse

Ein Nur-Lese-Feld, das die aktuell als primär markierte E-Mail-Adresse anzeigt. Dieses Feld wird automatisch aus dem Eintrag befüllt, bei dem das Feld **Primär** auf `Ja` gesetzt ist. Es dient der schnellen Übersicht, ohne alle Einträge durchsehen zu müssen.

### Primär

Bestimmt, ob diese E-Mail-Adresse die primäre Adresse des Objekts ist. Mögliche Werte: `Ja` oder `Nein`. Pro Objekt sollte genau eine Adresse als primär markiert sein. Diese Adresse wird für Benachrichtigungen, den LDAP-Export und als Anzeige in der Kontaktzuweisung anderer Objekte verwendet.

### Beschreibung

Freitext für ergänzende Informationen: Zweck der Adresse (dienstlich, privat, Funktionspostfach), Vertretungsregelungen oder Hinweise zur Erreichbarkeit.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__MAIL_ADDRESSES` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Person, Personengruppe |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **E-Mail-Adresse** | `title` | Text |
| **Primäre E-Mail-Adresse** | `primary_mail` | Text |
| **Primär** | `primary` | Dialog (Auswahl) |
| **Beschreibung** | `description` | Textfeld (mehrzeilig) |

### API-Beispiele

#### Eintrag erstellen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "object": 587,
        "category": "C__CATG__MAIL_ADDRESSES",
        "data": {
            "title": "max.mustermann@firma.de",
            "primary": 1,
            "description": "Dienstliche E-Mail-Adresse, Hauptpostfach"
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
        "object": 587,
        "category": "C__CATG__MAIL_ADDRESSES"
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
        "object": 587,
        "category": "C__CATG__MAIL_ADDRESSES",
        "entry": 12,
        "data": {
            "title": "m.mustermann@firma.de",
            "description": "Namensänderung 2026-04: Neue E-Mail-Adresse nach Umstellung auf Kurzformat."
        }
    },
    "id": 3
}
```
