---
title: "Kategorie: Personengruppenmitgliedschaft"
description: Dokumentation der Kategorie Personengruppenmitgliedschaft in i-doit
icon:
status:
lang: de
---

# Kategorie: Personengruppenmitgliedschaft

Die Kategorie **Personengruppenmitgliedschaft** zeigt an, welchen Personengruppen eine Person angehört. Sie ist eine **Multi-Value-Kategorie** -- eine Person kann Mitglied in beliebig vielen Gruppen sein, z.B. gleichzeitig in `IT-Administratoren`, `Netzwerk-Team` und `Bereitschaftsdienst`.

!!! info "Gegenstück: Mitglieder einer Gruppe"
    Diese Kategorie zeigt die Gruppenmitgliedschaft aus **Sicht der Person**. Das Gegenstück -- welche Personen einer Gruppe angehören -- findet sich in der Kategorie **Mitglieder** auf dem Personengruppen-Objekt. Beide Seiten werden automatisch synchron gehalten: Wird eine Person hier einer Gruppe zugewiesen, erscheint sie dort als Mitglied und umgekehrt.

## Verwendung

Typische Anwendungsfälle:

- **Gruppenmitgliedschaften verwalten**: Weise eine Person den relevanten Personengruppen zu. Über die Gruppenmitgliedschaft erbt die Person alle Kontaktzuweisungen und Berechtigungen, die der Gruppe zugeordnet sind. Das ist wesentlich wartungsfreundlicher als Einzelzuweisungen.
- **Rollenbasierte Zuweisung**: Jede Mitgliedschaft kann optional mit einer Rolle versehen werden (z.B. `Leiter`, `Mitglied`, `Stellvertreter`). So lässt sich innerhalb einer Gruppe differenzieren, wer welche Funktion hat.
- **LDAP-Gruppensynchronisation**: Bei der LDAP-Synchronisation werden die Gruppenmitgliedschaften automatisch aus dem Verzeichnisdienst übernommen. Die Personengruppen in i-doit können über die Kategorie [Personengruppen (spezifisch)](s-person-group.md) einem LDAP-Gruppennamen zugeordnet werden.
- **Berechtigungen prüfen**: Wenn eine Person unerwartete Berechtigungen hat oder Benachrichtigungen für Objekte erhält, die sie nicht direkt zugewiesen bekam, lohnt ein Blick auf die Personengruppenmitgliedschaft -- oft werden Rechte und Benachrichtigungen über Gruppenzuordnungen vererbt.
- **Offboarding**: Beim Ausscheiden eines Mitarbeiters genügt es, die Gruppenmitgliedschaften zu entfernen, um alle gruppenbasierten Kontaktzuweisungen und Berechtigungen auf einen Schlag zu entziehen.

[![Personengruppenmitgliedschaft](../../assets/images/de/grundlagen/kategorien/s-person-assigned-groups.png)](../../assets/images/de/grundlagen/kategorien/s-person-assigned-groups.png)

## Felder

### Personengruppenmitgliedschaft

Das Personengruppen-Objekt, dem die Person zugeordnet wird. Über den Objekt-Browser wird eine vorhandene Personengruppe ausgewählt. In der Listenansicht der Kategorie erscheint der Name der Gruppe als klickbarer Link zum Gruppenobjekt.

### Rolle

Die Rolle, die die Person innerhalb der Gruppe einnimmt, z.B. `Mitglied`, `Leiter` oder `Stellvertreter`. Dialog+-Feld -- eigene Rollen lassen sich bei Bedarf ergänzen. Die Rolle kann in Reports ausgewertet werden, ist aber unabhängig von der Rolle in der [Kontaktzuweisung](contact.md).

### Kontakt

Internes Referenzfeld, das die Verknüpfung zur Kontaktzuweisung herstellt. Wird automatisch verwaltet und ist für die manuelle Bearbeitung nicht relevant.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATS__PERSON_ASSIGNED_GROUPS` |
| **Typ** | Spezifische Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Person |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Personengruppenmitgliedschaft** | `connected_object` | Objekt-Browser (Verknüpfung) |
| **Rolle** | `role` | Dialog+ (erweiterbare Auswahl) |
| **Kontakt** | `contact` | Ganzzahl (intern) |

### API-Beispiele

#### Eintrag erstellen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "object": 1234,
        "category": "C__CATS__PERSON_ASSIGNED_GROUPS",
        "data": {
            "connected_object": 78,
            "role": "Mitglied"
        }
    },
    "id": 1
}
```

!!! tip "Gruppen-ID ermitteln"
    Die `connected_object`-ID ist die Objekt-ID der Personengruppe. Diese lässt sich z.B. über `cmdb.objects.read` mit dem Filter `type = C__OBJTYPE__PERSON_GROUP` ermitteln.

#### Einträge lesen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.read",
    "params": {
        "apikey": "dein-api-key",
        "objID": 1234,
        "category": "C__CATS__PERSON_ASSIGNED_GROUPS"
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
        "category": "C__CATS__PERSON_ASSIGNED_GROUPS",
        "entry": 5,
        "data": {
            "role": "Leiter"
        }
    },
    "id": 3
}
```
