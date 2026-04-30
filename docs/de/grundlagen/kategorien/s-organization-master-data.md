---
title: "Kategorie: Stammdaten (Organisation)"
description: Dokumentation der spezifischen Kategorie Stammdaten für Organisationen in i-doit
icon:
status:
lang: de
---

# Kategorie: Stammdaten (Organisation)

Die Kategorie **Stammdaten** ist eine **spezifische Kategorie** des Objekttyps **Organisation** und erfasst die zentralen Geschäftsdaten einer Organisation. Sie ist eine **Single-Value-Kategorie** -- pro Organisations-Objekt existiert genau ein Eintrag mit Firmenbezeichnung, Kontaktdaten, Website und Hauptsitz-Kennzeichnung.

!!! info "Stammdaten vs. Adresse -- zwei Detailstufen"
    Die Kategorie **Stammdaten** erfasst die organisatorischen Eckdaten: Wer ist die Organisation, wie ist sie erreichbar, wo ist der Hauptsitz? Die Kategorie [Adresse](address.md) ergänzt dies um die **physische Postanschrift** mit Strasse, Hausnummer, PLZ und Ort. Beide Kategorien zusammen ergeben ein vollständiges Kontaktprofil -- die Stammdaten für den schnellen Überblick, die Adresse für den Paketversand oder den Vor-Ort-Termin.

## Verwendung

Typische Anwendungsfälle:

- **Zentrale Kontaktdatenbank**: Pflege für jede Organisation (Kunden, Lieferanten, Partner, interne Abteilungen) die Stammdaten an einer einzigen Stelle. Alle anderen Kategorien und Verknüpfungen referenzieren dieses eine Objekt -- Änderungen an der Telefonnummer oder Website müssen nur hier vorgenommen werden und wirken sich überall aus.
- **Hauptsitz-Verwaltung**: Das Feld Hauptsitz unterscheidet zwischen Zentrale und Niederlassungen. In Konzernen mit dutzenden Standorten lässt sich per Report sofort filtern: Welche Organisations-Objekte sind Hauptsitze? Das ist relevant für Vertragsabschluesse (der Hauptsitz ist typischerweise der Vertragspartner) und für Eskalationswege.
- **Telefonbuch und Schnellzugriff**: Im Störungsfall muss es schnell gehen. Die Telefonnummer des Wartungsdienstleisters, die Faxnummer der Versicherung, die Website des Cloud-Providers -- alle diese Informationen sind hier auf einen Blick verfügbar, ohne in E-Mails oder externen Systemen suchen zu müssen.
- **Datenpflege und Qualitätssicherung**: Reports wie „Alle Organisationen ohne Website" oder „Organisationen ohne Telefonnummer" decken Luecken in der Datenpflege auf. In Kombination mit dem Benachrichtigungssystem können die zuständigen Datenverantwortlichen automatisch auf fehlende Stammdaten hingewiesen werden.
- **Integration mit Adresse**: Die Stammdaten liefern das „Wer" und „Wie erreichbar", die Kategorie [Adresse](address.md) liefert das „Wo". Zusammen ergibt sich ein vollständiges Organisationsprofil, das für Audits, Notfallplaene und Lieferantenmanagement nutzbar ist.

[![Stammdaten (Organisation)](../../assets/images/de/grundlagen/kategorien/s-organization-master-data.png)](../../assets/images/de/grundlagen/kategorien/s-organization-master-data.png)

## Felder

### Bezeichnung

Der offizielle Name der Organisation, z.B. `synetics GmbH`, `Deutsche Telekom AG` oder `Abteilung Infrastruktur`. Dieser Wert erscheint in der Listenansicht, in Reports und überall dort, wo das Organisations-Objekt referenziert wird. Verwende den vollständigen, offiziellen Firmennamen inklusive Rechtsform, um Verwechslungen zu vermeiden -- insbesondere bei Konzernen mit ähnlich benannten Tochtergesellschaften.

### Telefon

Die zentrale Telefonnummer der Organisation, z.B. `+49 211 699 31-0`. Empfohlen wird das internationale Format mit Ländervorwahl, damit die Nummer auch standortübergreifend eindeutig ist. Bei Dienstleistern ist dies typischerweise die Support-Hotline oder die Vermittlung.

### Fax

Die Faxnummer der Organisation. Auch wenn Fax in vielen IT-Umgebungen an Bedeutung verliert, ist es in regulierten Branchen (Behörden, Gesundheitswesen, Finanzsektor) nach wie vor ein anerkannter und teilweise vorgeschriebener Kommunikationskanal.

### Website

Die URL der Organisationswebsite, z.B. `https://www.i-doit.com`. Kann auf die Hauptseite, ein Kundenportal oder ein Support-Portal verweisen. Nuetzlich für den direkten Zugriff auf Online-Ressourcen: Dokumentation, Ticketsysteme, Self-Service-Portale oder Produktinformationen.

### Hauptsitz

Kennzeichnet, ob dieses Organisations-Objekt den Hauptsitz repräsentiert oder eine Niederlassung. Dialog-Feld mit vordefinierten Werten. Die Unterscheidung ist geschäftsrelevant: Der Hauptsitz ist typischerweise der juristische Vertragspartner, der Standort für formale Korrespondenz und der erste Eskalationspunkt bei übergreifenden Problemen.

!!! tip "Praxisbeispiel: Konzernstruktur"
    Ein Konzern mit Hauptsitz in Muenchen und Niederlassungen in Berlin, Hamburg und Frankfurt wird als vier Organisations-Objekte abgebildet. Das Muenchner Objekt erhält `Hauptsitz: Ja`, die uebrigen `Hauptsitz: Nein`. Über die Kategorie [Adresse](address.md) erhält jedes Objekt seine eigene Postanschrift. So lässt sich per Report sofort filtern, welches Objekt die Zentrale ist und welche die Aussenstellen.

### Beschreibung

Freitext für ergänzende Angaben: Branche, Kundennummer beim Lieferanten, interne Kurzbezeichnung (z.B. „TK-Dienstleister Hauptstandort"), besondere Vereinbarungen, Oeffnungszeiten der Support-Hotline oder Verweise auf Rahmenverträge.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATS__ORGANIZATION_MASTER_DATA` |
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
        "category": "C__CATS__ORGANIZATION_MASTER_DATA",
        "data": {
            "title": "synetics GmbH",
            "telephone": "+49 211 699 31-0",
            "fax": "+49 211 699 31-99",
            "website": "https://www.i-doit.com",
            "headquarter": 1,
            "description": "Hersteller von i-doit. Hauptsitz Duesseldorf. Kundennummer: K-2024-0815."
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
        "category": "C__CATS__ORGANIZATION_MASTER_DATA"
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
        "category": "C__CATS__ORGANIZATION_MASTER_DATA",
        "entry": 1,
        "data": {
            "website": "https://www.i-doit.com/de",
            "description": "Hersteller von i-doit. 2026-04: Website-URL auf neue DE-Subdomain aktualisiert."
        }
    },
    "id": 3
}
```
