---
title: "Kategorie: Adresse"
description: Dokumentation der Kategorie Adresse in i-doit
icon:
status:
lang: de
---

# Kategorie: Adresse

Die Kategorie **Adresse** dokumentiert die physische Postanschrift eines Objekts. Sie ist eine **Single-Value-Kategorie** -- pro Objekt existiert genau ein Adresseintrag mit Strasse, Hausnummer, PLZ, Ort, Region und Land.

!!! info "Standort vs. Adresse"
    Die Kategorie [Standort](location.md) beschreibt die **hierarchische Position** eines Objekts innerhalb der Standort-Struktur (Land > Stadt > Gebäude > Raum > Rack > Server). Die Kategorie **Adresse** hingegen speichert die **physische Postanschrift** -- also die Information, die ein Paketdienst, ein Techniker oder die Feuerwehr braucht, um das Gebäude zu finden. Beide Kategorien ergänzen sich: der Standort gibt den Kontext im CMDB-Baum, die Adresse gibt die reale Erreichbarkeit.

## Verwendung

Typische Anwendungsfälle:

- **Hardware-Versand und Vor-Ort-Einsaetze**: Muss ein Ersatzteil an einen Standort geliefert werden, liefert die Adresse die vollständige Lieferanschrift. Techniker sehen auf einen Blick, wohin sie fahren müssen -- besonders wertvoll bei verteilten Standorten mit ähnlichen Gebäude-Namen.
- **Compliance und Datenschutz**: Für Audits und Datenschutz-Dokumentation ist es entscheidend zu wissen, *wo* Daten physisch gespeichert werden. Über die Adresskategorie lässt sich per Report auswerten, in welchem Land und welcher Region sich die Gebäude befinden, in denen Server stehen -- relevant für DSGVO und Drittland-Transfers.
- **Notfallplanung**: Im Krisenfall (Brand, Überschwemmung, Stromausfall) müssen Einsatzkraefte schnell zur richtigen Adresse navigiert werden. Ein Report über alle Gebäude mit Adresse liefert sofort eine vollständige Standort-Liste für das BCM.
- **Gebäudeverwaltung**: Die Anzahl der Stockwerke (`Etagen`-Feld) gibt einen schnellen Überblick über die Gebäudegröße. In Kombination mit der Standort-Hierarchie (Gebäude > Etage > Raum) entsteht ein vollständiges Bild der räumlichen Struktur.

[![Adresse](../../assets/images/de/grundlagen/kategorien/address.png)](../../assets/images/de/grundlagen/kategorien/address.png)

## Felder

### Strasse

Die Strasse des Standorts, z.B. `Duesselberger Strasse`. Zusammen mit der Hausnummer bildet dieses Feld die Kern-Adressinformation. Wird in Reports häufig als erstes Adressfeld angezeigt.

### Hausnummer

Die Hausnummer, z.B. `1` oder `12a`. Als separates Feld lassen sich Adressen flexibler durchsuchen und sortieren als bei einem kombinierten Strassenfeld.

### PLZ

Die Postleitzahl, z.B. `40223`. Besonders nuetzlich für regionale Auswertungen: Per Report lassen sich alle Standorte in einem bestimmten PLZ-Bereich ermitteln -- etwa um Service-Gebiete zu definieren oder Dienstleister regional zuzuordnen.

### Ort

Der Ortsname, z.B. `Duesseldorf`. Gemeinsam mit PLZ und Land ergibt sich eine eindeutige Lokalisierung.

### Region

Bundesland, Kanton oder Provinz, z.B. `Nordrhein-Westfalen` oder `Zuerich`. Freitextfeld -- besonders relevant bei internationalen Organisationen, wo gesetzliche Anforderungen je nach Region variieren.

### Land

Das Land, z.B. `Deutschland` oder `DE`. Freitextfeld. Für DSGVO-relevante Auswertungen (Drittland-Transfer) ist eine einheitliche Schreibweise entscheidend -- am besten ISO-3166-Ländercodes verwenden, damit Reports zuverlässigig filtern können.

### Etagen

Die Anzahl der Stockwerke des Gebäudes. Dieses Feld liefert einen schnellen Größenindikator und ist hilfreich bei der Planung von Netzwerkverkabelung (Backbone-Steigleitungen), Brandschutz-Zonen oder Aufzugs-Kapazitäten.

### Zusätzliche Adressinformationen

Freitextfeld für alles, was nicht in die strukturierten Felder passt: Hinterhof-Zugang, Tor-Code, Anfahrtsbeschreibung, Ansprechpartner am Empfang oder besondere Lieferhinweise (z.B. "Rampe nur Mo-Fr 7-16 Uhr").

### Beschreibung

Allgemeines Freitextfeld für weitergehende Anmerkungen zum Standort: Bemerkungen zu Umbauten, geplante Standortänderungen oder Verweise auf externe Dokumentation.

## Technische Referenz

| Eigenschaft | Wert |
|---|---|
| **Kategorie-Konstante** | `C__CATG__ADDRESS` |
| **Typ** | Globale Kategorie |
| **Multi-Value** | Nein |
| **Zugeordnet zu** | Gebäude, Organisation |

### Felder (API-Referenz)

| Feld | API-Key | Typ |
|---|---|---|
| **Strasse** | `street` | Text |
| **Hausnummer** | `house_no` | Text |
| **PLZ** | `postcode` | Text |
| **Ort** | `city` | Text |
| **Region** | `region` | Text |
| **Land** | `country` | Text |
| **Etagen** | `stories` | Ganzzahl |
| **Zusätzliche Adressinformationen** | `address` | Textfeld (mehrzeilig) |
| **Beschreibung** | `description` | Textfeld (mehrzeilig) |

### API-Beispiele

#### Eintrag erstellen

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "dein-api-key",
        "object": 55,
        "category": "C__CATG__ADDRESS",
        "data": {
            "street": "Duesselberger Strasse",
            "house_no": "1",
            "postcode": "40223",
            "city": "Duesseldorf",
            "region": "Nordrhein-Westfalen",
            "country": "Deutschland",
            "stories": 4,
            "address": "Hintereingang ueber Parkplatz, Tor-Code 4711",
            "description": "Hauptsitz, Rechenzentrum im UG"
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
        "object": 55,
        "category": "C__CATG__ADDRESS"
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
        "object": 55,
        "category": "C__CATG__ADDRESS",
        "entry": 1,
        "data": {
            "stories": 5,
            "description": "Aufstockung 2026-Q2: 5. OG fuer neues RZ-Modul hinzugefuegt."
        }
    },
    "id": 3
}
```
