---
title: Risikoeinschätzung im ISMS-Add-on
description: Anleitung zur Durchführung von Risikoeinschätzungen mit dem ISMS-Add-on in i-doit.
icon:
status:
lang: de
---

# Risikoeinschätzung im ISMS-Add-on

Mit dem **ISMS-Add-on** lassen sich Risikoeinschätzungen direkt an Objekten in i-doit erfassen und pflegen. Nachfolgend sind die Schritte für Anlage, Bewertung, Behandlung und den CSV-Import zusammengefasst.

* * *

## Risikoeinschätzung vornehmen

Nach der Installation erscheint an jedem Objekt der Kategorie-Ordner **"ISMS"**. In der zugehörigen Ansicht legst du **ISMS-Relevanz** und **Anwendungsbereich** des Objekts fest.

Die Kategorie **Risikoeinschätzung** öffnet eine **Multi-Value-Kategorie**, in der du vorhandene Bewertungen einsehen und bearbeiten kannst.

!!! note
    Ab Version **1.4** des ISMS-Add-ons kannst du zusätzliche Attribute der Risikoeinschätzung in die **Listenansicht** aufnehmen.

### Neue Risikoeinschätzung erstellen

[![Formular - neue Risikoeinschätzung](../../assets/images/de/i-doit-add-ons/isms/risk-assessment/create-ra.png)](../../assets/images/de/i-doit-add-ons/isms/risk-assessment/create-ra.png)

1. **Bedrohung** und **Schwachstelle** auswählen – beide zusammen bilden das Risiko.
2. **Schutzziele** hinterlegen (Standard: *Vertraulichkeit*, *Integrität*, *Verfügbarkeit*).
      - Weitere Werte (z.B. *Authentizität*) kannst du unter
        `Verwaltung -> Vordefinierte Inhalte -> Dialog-Admin -> ISMS -> Schutzziele` hinzufügen.
3. Bewerte im Abschnitt **Risikobewertung** die **Schadensszenarien** per **Schieberegler**.
4. Lege die **Eintrittswahrscheinlichkeit** ebenfalls per Schieberegler fest.
5. Ordne **vorhandene Maßnahmen** zu (falls vorhanden) und dokumentiere einen **Kommentar** zur Bewertung.
6. Setze **Datum der Risikobewertung** sowie **Wiedervorlage** (für Auswertungen nutzbar).

[![Risikobewertung - Schadensszenarien & Eintrittswahrscheinlichkeit](../../assets/images/de/i-doit-add-ons/isms/risk-assessment/create-ra2.png)](../../assets/images/de/i-doit-add-ons/isms/risk-assessment/create-ra2.png)

### Risikobehandlung

- Wähle im Attribut **Risikobehandlung** einen Wert nach **ISO 31000** aus.
- Verlinke unter **Maßnahmen zur Risikobehandlung** passende **SOA-Maßnahmen**.
- Halte zusätzlich fest:
    - **Begründung** der Auswahl
    - **Zuständig für die Umsetzung** (Platzhalter für den eingeloggten Benutzer ab i-doit **1.14.2** verfügbar)
    - **Ressourcen** und **Kosten**, **spätestes Umsetzungsdatum**
    - **Status** und **Dringlichkeit** (*Dialog-Plus*-Felder; Werte via `Verwaltung -> Vordefinierte Inhalte -> Dialog-Admin` pflegbar)

[![Risikobewertung nach Behandlung / Restrisiko](../../assets/images/de/i-doit-add-ons/isms/risk-assessment/create-ra3.png)](../../assets/images/de/i-doit-add-ons/isms/risk-assessment/create-ra3.png)

!!! tip
    Mit **"Bewertung vor Behandlung kopieren"** lassen sich alle Schieberegler-Werte übernehmen und bei Bedarf anpassen.

* * *

## Risikoeinschätzungen für Objektgruppen

Risikoeinschätzungen sind auch für **Objektgruppen** möglich (in der Objekttyp-Gruppe "Andere").
Damit die Bewertungen an den einzelnen Objekten der Gruppe sichtbar werden, konfiguriere die benutzerdefinierte Kategorie **"Risikoeinschätzung-Gruppe"** unter:
`Verwaltung -> Vordefinierte Inhalte -> Benutzerdefinierte Kategorien -> ISMS Risikoeinschätzung (Gruppe)`.

* * *

## Risikoeinschätzungen importieren (CSV)

Wenn deine Risikoeinschätzung z.B. bereits in **Excel** vorliegt, kannst du sie per **CSV** importieren. Für ausgewählte Attribute der Multivalue-Kategorie **"Risikoeinschätzung"** stehen spezielle Importmethoden bereit:

### Auswirkung / Auswirkung nach Risikobehandlung

- **Format:** Semikolon-getrennte Liste der **Level** (Zahlen) pro **Schadensszenario**.
- Die Reihenfolge folgt dem Attribut **"Kennzeichnung"** in der Kategorie **"Schadensszenario"**.

**Beispiel:**
- Bewertungskriterien-Level: 1-4
- Drei Szenarien: 1 = *Finanzielle Auswirkungen*, 2 = *Persönliche Unversehrtheit*, 3 = *Verstoß gegen Verträge/Gesetze*
- Gewünschte Werte: Finanziell **4**, Persönliche **1**, Gesetze **2**
- **CSV-Wert:** `4;1;2`

### Existierende Maßnahmen / Maßnahmen zur Risikobehandlung

- **Format:** Semikolon-getrennte Liste der **SOA-Maßnahmen**; zulässig sind **Objekttitel** oder **Objekt-ID**.
- Enthält ein Titel ein Semikolon, dieses mit **Backslash** escapen (`\;`).

**Beispiele:**
```csv
Aufstellung von Handfeuerlöschern;Installation einer Brandmeldeanlage
2985;3054
Aufstellung von Handfeuerlöschern;3054
2985;Installation einer Brandmeldeanlage
```

!!! note "Alle übrigen Attribute der Multivalue-Kategorie "Risikoeinschätzung" können in der Standardsyntax von i-doit importiert werden."

[<- Zur Startseite](index.md){ .md-button} · [Reporting ansehen](reports.md){ .md-button .md-button--primary}
