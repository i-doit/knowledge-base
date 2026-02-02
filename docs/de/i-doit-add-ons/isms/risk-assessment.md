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

Nach der Installation erscheint an jedem Objekt der Kategorie-Ordner **"ISMS"**. In der zugehörigen Ansicht lassen sich **ISMS-Relevanz** und **Anwendungsbereich** des Objekts festlegen.

Die Kategorie **Risikoeinschätzung** öffnet eine **Multi-Value-Kategorie**, in der vorhandene Bewertungen eingesehen und bearbeitet werden können.

!!! note
    Ab Version **1.4** des ISMS-Add-ons können zusätzliche Attribute der Risikoeinschätzung in die **Listenansicht** aufgenommen werden.

### Neue Risikoeinschätzung erstellen

[![Formular - neue Risikoeinschätzung](../../assets/images/de/i-doit-add-ons/isms/risk-assessment/create-ra.png)](../../assets/images/de/i-doit-add-ons/isms/risk-assessment/create-ra.png)

1. **Bedrohung** und **Schwachstelle** auswählen – beide zusammen bilden das Risiko.
2. **Schutzziele** hinterlegen (Standard: *Vertraulichkeit*, *Integrität*, *Verfügbarkeit*).
      - Weitere Werte (z.B. *Authentizität*) lassen sich unter
        `Verwaltung -> Vordefinierte Inhalte -> Dialog-Admin -> ISMS -> Schutzziele` hinzufügen.
3. Im Abschnitt **Risikobewertung** die **Schadensszenarien** per **Schieberegler** bewerten.
4. Die **Eintrittswahrscheinlichkeit** ebenfalls per Schieberegler festlegen.
5. **Vorhandene Maßnahmen** zuordnen (falls vorhanden) und einen **Kommentar** zur Bewertung dokumentieren.
6. **Datum der Risikobewertung** sowie **Wiedervorlage** setzen (für Auswertungen nutzbar).

[![Risikobewertung - Schadensszenarien & Eintrittswahrscheinlichkeit](../../assets/images/de/i-doit-add-ons/isms/risk-assessment/create-ra2.png)](../../assets/images/de/i-doit-add-ons/isms/risk-assessment/create-ra2.png)

### Risikobehandlung

- Im Attribut **Risikobehandlung** einen Wert nach **ISO 31000** auswählen.
- Unter **Maßnahmen zur Risikobehandlung** passende **SOA-Maßnahmen** verlinken.
- Zusätzlich festhalten:
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
Damit die Bewertungen an den einzelnen Objekten der Gruppe sichtbar werden, empfiehlt sich die Konfiguration der benutzerdefinierten Kategorie **"Risikoeinschätzung-Gruppe"** unter:
`Verwaltung -> Vordefinierte Inhalte -> Benutzerdefinierte Kategorien -> ISMS Risikoeinschätzung (Gruppe)`.

* * *

## Risikoeinschätzungen importieren (CSV)

Liegt die Risikoeinschätzung z.B. bereits in **Excel** vor, kann sie per **CSV** importiert werden. Für ausgewählte Attribute der Multivalue-Kategorie **"Risikoeinschätzung"** stehen spezielle Importmethoden bereit:

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
