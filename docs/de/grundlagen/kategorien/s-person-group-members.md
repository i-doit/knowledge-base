---
title: "Kategorie: Mitglieder (Personengruppe)"
description: Dokumentation der Kategorie Mitglieder (Personengruppe) in i-doit
icon:
status:
lang: de
---

# Kategorie: Mitglieder (Personengruppe)

Die Kategorie **Mitglieder (Personengruppe)** listet alle Personen auf, die einer bestimmten Personengruppe angehören. Sie wird auf dem **Personengruppen-Objekt** gepflegt und ist eine **Multi-Value-Kategorie** -- pro Personengruppe können beliebig viele Mitglieder zugeordnet werden.

!!! info "Mitglieder vs. Personengruppenmitgliedschaft"
    Diese Kategorie ist die **Gruppen-Seite** der Mitgliedschaftsbeziehung: Sie wird auf dem Personengruppen-Objekt gepflegt und zeigt, welche Personen zur Gruppe gehören. Das Gegenstück ist die Kategorie [Personengruppenmitgliedschaft](s-person-assigned-groups.md), die auf den **einzelnen Personen-Objekten** gepflegt wird und dort anzeigt, zu welchen Gruppen die Person gehört. Beide Seiten spiegeln dieselbe Beziehung -- ein Eintrag auf einer Seite erscheint automatisch auf der anderen.

## Verwendung

Typische Anwendungsfälle:

- **Berechtigungsgruppen abbilden**: Definiere, welche Mitarbeiter einer Gruppe wie „IT-Administratoren", „Helpdesk" oder „Geschäftsführung" angehören. In Kombination mit der Kategorie [Zugewiesene Objekte (Personengruppe)](s-person-group-contact-assignment.md) entsteht eine vollständige Berechtigungsstruktur: Gruppe X hat Zugriff auf Objekt Y.
- **Kontaktzuweisungen vereinfachen**: Anstatt einzelne Personen als Kontakt an Servern, Switches oder Services zuzuweisen, ordne eine Personengruppe zu. Die Mitgliederliste zeigt dann sofort, wer konkret erreichbar ist -- ohne jeden einzelnen Kontakteintrag öffnen zu müssen.
- **Organisationsstruktur dokumentieren**: Teams, Abteilungen und Projektgruppen lassen sich als Personengruppen mit ihren Mitgliedern erfassen. Über Reports kann ausgewertet werden, welche Personen in mehreren Gruppen vertreten sind oder welche Gruppen nur ein einzelnes Mitglied haben.
- **On-/Offboarding-Prozesse**: Beim Eintritt eines neuen Mitarbeiters wird die Person den relevanten Gruppen zugeordnet. Beim Austritt werden die Zuordnungen archiviert. Die Änderungshistorie dokumentiert lückenlos, wann ein Mitglied der Gruppe beigetreten oder ausgeschieden ist.

[![Mitglieder (Personengruppe)](../../assets/images/de/grundlagen/kategorien/s-person-group-members.png)](../../assets/images/de/grundlagen/kategorien/s-person-group-members.png)

## Felder

### Mitglieder (Personengruppe)

Das Kernfeld der Kategorie: eine Verknüpfung zu einem Personen-Objekt über den Objekt-Browser. Beim Erstellen über die API wird dieses Feld mit dem Key `connected_object` im `data`-Block übergeben -- der Wert ist die Objekt-ID der Person. Die Listenansicht zeigt automatisch weitere Informationen der verknüpften Person an (Vorname, Nachname, Abteilung, Telefon, E-Mail, Organisation), die direkt aus den Stammdaten des Personen-Objekts übernommen werden.

### Vorname

Der Vorname der verknüpften Person. Wird automatisch aus den Stammdaten des Personen-Objekts übernommen und ist in dieser Kategorie nur lesend sichtbar.

### Nachname

Der Nachname der verknüpften Person. Wird ebenfalls automatisch aus den Stammdaten übernommen.

### Abteilung

Die Abteilung, der die Person zugeordnet ist. Auch dieses Feld wird aus den Stammdaten der Person gespiegelt und erleichtert die Orientierung in großen Gruppen.

### Telefon (Firma)

Die geschäftliche Telefonnummer der Person, übernommen aus den Stammdaten.

### E-Mail

Die E-Mail-Adresse der Person, übernommen aus den Stammdaten.

### Organisation

Die Organisation, der die Person angehört. Dialog-Feld, das die Zuordnung aus den Stammdaten der Person widerspiegelt.

### Bezeichnung

Die Bezeichnung bzw. der Titel der Gruppenmitgliedschaft.

### Mitglieder

Zusammenfassende Anzeige der Mitgliederliste.

### Anzahl Mitglieder

Die Gesamtanzahl der aktuell zugeordneten Mitglieder. Dieses Feld wird automatisch berechnet und ist nützlich für Reports und Übersichten.

!!! tip "Große Gruppen im Blick behalten"
    Bei Personengruppen mit vielen Mitgliedern (z.B. „Alle Mitarbeiter") kann die Listenansicht unübersichtlich werden. Nutze den Report Manager, um gezielt nach Gruppen mit mehr als einem Schwellenwert an Mitgliedern zu suchen oder um Gruppen ohne aktive Mitglieder zu identifizieren.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATS__PERSON_GROUP_MEMBERS` |
| **Typ** | Spezifische Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Personengruppe (Person group) |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Vorname** | `first_name` | Text |
| **Nachname** | `last_name` | Text |
| **Abteilung** | `department` | Text |
| **Telefon (Firma)** | `phone_company` | Text |
| **E-Mail** | `email_address` | Text |
| **Organisation** | `organization` | Dialog (Auswahl) |
| **Bezeichnung** | `title` | Text |
| **Mitglieder (Personengruppe)** | `connected_object` | Objekt-Browser (Verknüpfung) |
| **Mitglieder** | `members` | Text |
| **Anzahl Mitglieder** | `membersCount` | Text |

### API-Beispiele

#### Eintrag erstellen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "object": 501,
        "category": "C__CATS__PERSON_GROUP_MEMBERS",
        "data": {
            "connected_object": 234
        }
    },
    "id": 1
}
```

!!! note "Mitglied per Objekt-ID zuweisen"
    Der Wert von `connected_object` ist die Objekt-ID der Person, die der Gruppe hinzugefügt werden soll. Felder wie `first_name`, `last_name` oder `email_address` werden automatisch aus den Stammdaten der Person übernommen und müssen nicht manuell übergeben werden.

#### Einträge lesen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.read",
    "params": {
        "apikey": "dein-api-key",
        "object": 501,
        "category": "C__CATS__PERSON_GROUP_MEMBERS"
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
        "object": 501,
        "category": "C__CATS__PERSON_GROUP_MEMBERS",
        "entry": 12,
        "data": {
            "connected_object": 235
        }
    },
    "id": 3
}
```
