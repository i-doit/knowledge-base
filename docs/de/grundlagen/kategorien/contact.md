---
title: "Kategorie: Kontaktzuweisung"
description: Dokumentation der Kategorie Kontaktzuweisung in i-doit
icon:
status:
lang: de
---

# Kategorie: Kontaktzuweisung

Die Kategorie **Kontaktzuweisung** verknüpft Personen oder Personengruppen mit einem Objekt in einer bestimmten Rolle. Sie ist eine **Multi-Value-Kategorie** – pro Objekt können beliebig viele Kontakte zugewiesen werden, z.B. ein Administrator, ein Verantwortlicher und mehrere Benutzer gleichzeitig.

!!! warning "Eine der wichtigsten Kategorien in i-doit"
    Die Kontaktzuweisung ist weit mehr als eine Adressliste. Sie steuert, **wer Benachrichtigungen erhält**, **wer Berechtigungen bekommt** und **wer in Reports als Verantwortlicher erscheint**. Ohne gepflegte Kontaktzuweisungen laufen Benachrichtigungen ins Leere, das Rechtesystem greift nicht, und bei Störungen weiß niemand, wen man anrufen soll. Investiere hier von Anfang an in saubere Daten — es zahlt sich in allen anderen Bereichen von i-doit aus.

## Verwendung

Typische Anwendungsfälle:

- **Verantwortlichkeiten abbilden**: Weise jedem Objekt die zuständigen Personen oder Teams zu – etwa den Administrator eines Servers, den Eigentümer einer Applikation oder den Verantwortlichen für einen Standort. Im Störungsfall zeigt ein Blick auf die Kontaktzuweisung sofort, wer zuständig ist und angesprochen werden muss.
- **Benachrichtigungen steuern**: Das Benachrichtigungssystem von i-doit nutzt die Kontaktzuweisung als Empfängerliste. Wenn z.B. ein Vertrag ausläuft oder ein Objekt geändert wird, werden die zugewiesenen Kontakte automatisch informiert. **Ohne Kontaktzuweisung erreichen diese Benachrichtigungen niemanden** — das ist einer der häufigsten Gründe, warum Benachrichtigungen „nicht funktionieren".
- **Rollenbasierte Berechtigungen**: Die Rollen in der Kontaktzuweisung sind direkt mit dem Rechtesystem verknüpft. Du kannst Berechtigungen so konfigurieren, dass z.B. nur Kontakte mit der Rolle `Administrator` ein Objekt bearbeiten dürfen, während Kontakte mit der Rolle `Benutzer` nur Leserechte haben. Die Rolle ist also nicht nur ein Label, sondern hat operative Auswirkungen.
- **Primären Ansprechpartner definieren**: Über das Feld „Primärer Kontakt" wird festgelegt, welche Person der Hauptansprechpartner für ein Objekt ist. Dieser Kontakt erscheint bevorzugt in Reports und ist die erste Eskalationsstufe. Bei Servern ist das typischerweise der zuständige Administrator, bei Applikationen der Application Owner.
- **Reporting und Auswertungen**: Im Report Manager lassen sich Auswertungen wie „Alle Server ohne zugewiesenen Administrator" oder „Alle Objekte, für die Person X verantwortlich ist" erstellen. Das macht die Kontaktzuweisung zur Grundlage für Verantwortlichkeitsberichte und Übergaben bei Personalwechseln.

[![Kontaktzuweisung](../../assets/images/de/grundlagen/kategorien/contact.png)](../../assets/images/de/grundlagen/kategorien/contact.png)

## Felder

### Kontaktobjekt

Die Person oder Personengruppe, die dem Objekt zugewiesen wird. Über den Objekt-Browser können vorhandene Personen, Personengruppen oder Organisationen ausgewählt werden. Dieser Wert erscheint in der Listenansicht der Kategorie und in Reports. Tipp: Weise Personengruppen statt Einzelpersonen zu, wenn die Zuständigkeit an ein Team gebunden ist — so muss bei Personalwechseln nur die Gruppenmitgliedschaft angepasst werden, nicht jede einzelne Kontaktzuweisung.

### Rolle

Die Rolle, in der der Kontakt dem Objekt zugeordnet ist, z.B. `Administrator`, `Verantwortlich` oder `Benutzer`. Dialog+-Feld – eigene Rollen lassen sich bei Bedarf ergänzen, um die Rollenstruktur an die eigene Organisation anzupassen. **Die Rolle ist nicht nur ein beschreibendes Label** — sie wird vom Rechtesystem ausgewertet. Wenn du Berechtigungen auf Basis von Kontaktrollen konfigurierst, bestimmt dieses Feld, welche Rechte der zugewiesene Kontakt auf das Objekt erhält.

### Primärer Kontakt

Legt fest, ob dieser Kontakt der primäre Ansprechpartner für das Objekt ist. Es sollte pro Objekt nur ein Kontakt als primär markiert sein. Die Auswahl erfolgt über `Ja` oder `Nein`. Der primäre Kontakt ist die Person, die bei Störungen, Rückfragen oder Eskalationen als erstes kontaktiert wird. In Reports wird dieser Kontakt bevorzugt angezeigt — pflege dieses Feld konsequent, damit im Ernstfall klar ist, wer die erste Anlaufstelle ist.

### Beschreibung

Freitext für zusätzliche Angaben: Erreichbarkeit, Vertretungsregelungen, Zuständigkeitsbereiche oder sonstige Hinweise zur Kontaktzuweisung.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__CONTACT` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Ja |
| **Zugeordnet zu** | Server, Client, Applikation, Gebäude, Lizenz u.a. |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Kontaktobjekt** | `contact_object` | Objekt-Browser (Verknüpfung) |
| **Rolle** | `role` | Dialog+ (erweiterbare Auswahl) |
| **Primärer Kontakt** | `primary` | Dialog (Auswahl) |
| **Beschreibung** | `description` | Textfeld (mehrzeilig) |

!!! note "Interne Felder"
    Die Felder `contact`, `primary_contact`, `contact_list` und `contact_list_with_roles` sind Lese- bzw. interne Felder. Sie werden in der API-Antwort zurückgegeben, sind aber für das Erstellen und Aktualisieren von Einträgen nicht relevant.

### API-Beispiele

#### Eintrag erstellen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "object": 123,
        "category": "C__CATG__CONTACT",
        "data": {
            "contact_object": 456,
            "role": "Administrator",
            "primary": 1,
            "description": "Hauptadministrator für diesen Server, erreichbar über Ticket-System."
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
        "objID": 123,
        "category": "C__CATG__CONTACT"
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
        "object": 123,
        "category": "C__CATG__CONTACT",
        "entry": 32,
        "data": {
            "role": "Verantwortlich",
            "description": "Rolle geändert: Ab 2025-04 verantwortlich statt Administrator."
        }
    },
    "id": 3
}
```
