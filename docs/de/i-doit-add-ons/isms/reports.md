---
title: Reports im ISMS Add-on
description: Vollständig überarbeitete Beschreibung aller mit dem ISMS-Add-on ausgelieferten Reports und Report-Views in i-doit Zweck, Inhalt, Filter und Interaktionen.
lang: de
---

# Reports im ISMS-Add-on

Diese Seite beschreibt die mit dem ISMS-Add-on bereitgestellten Auswertungen in **i-doit**. Eine allgemeine Einführung in Berichte sowie deren Ort in i-doit finden Sie im [Report-Manager](../../auswertungen/report-manager.md).

**Kurzüberblick**

* Das Add-on liefert **einen variablen Report** sowie **neun Report-Views** des Typs *ISMS* aus.
* Alle Inhalte sind so gestaltet, dass sie sich in der Praxis schnell filtern und anpassen lassen.
* Bei aktivierter Option können die Views **nach Standortrechten** gefiltert werden (siehe *Optionale Einstellungen* in der Konfiguration).

* * *

## Installierte Reports und Views (Übersicht)

| Typ              | Name                                        | Zweck                                                                                                                                                                                                                                                                                      | Wichtige Filter/Interaktionen                                                                                               |
| ---------------- | ------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | --------------------------------------------------------------------------------------------------------------------------- |
| Variabler Report | **ISMS Risikoeinschätzung (Gruppe)**        | Zeigt Risikoeinschätzungen aller Objektgruppen, denen das Objekt zugeordnet ist, mit dem der Report aufgerufen wurde; frei im Abfrage-Editor anpassbar.                                                                                                                                    | An Objekttyp-Kategorie "ISMS Risikoeinschätzung (Gruppe)" gebunden; duplizier- und anpassbar (z.B. für Servicekomponenten). |
| Report-View      | **ISMS Risiko nach Risikoklasse**           | Listet Objekte/Objektgruppen mit Risikoeinschätzungen, wenn der Umsetzungsstatus "Unbearbeitet" ist.                                                                                                                                                                                       | Filter: *Risikoklasse*, *Anwendungsbereich*, *Standort* (Standortfilter).                                                   |
| Report-View      | **Erklärung zur Anwendbarkeit (SoA)**       | Gliederung aller Maßnahmen aus *Anhang A* (sofern vorhanden) nach Kapiteln/Unterkapiteln inkl. Anwendbarkeit, Begründung und Umsetzungsstatus; zeigt zugewiesene **SoA-Maßnahmen** unterhalb der jeweiligen Annex-A-Maßnahme.                                                              | Berücksichtigt Standortrechte (falls aktiviert).                                                                            |
| Report-View      | **SoA Vollständigkeitsprüfung**             | Wie SoA-Erklärung, zusätzlich farbliche Kennzeichnung, ob Maßnahmen hinreichend dokumentiert sind.                                                                                                                                                                                         | Berücksichtigt Standortrechte (falls aktiviert).                                                                            |
| Report-View      | **ISMS Risikomatrix**                       | Matrix vor **und** nach Risikobehandlung; Achsen aus den definierten Bewertungskriterien.                                                                                                                                                                                                  | Klick auf eine Zelle öffnet gefiltert **ISMS Risikoeinschätzung**; Filter: *Anwendungsbereich*, *Standort*.                 |
| Report-View      | **ISMS Risikoeinschätzung**                 | Komplette Detailansicht aller Risikoeinschätzungen (IDs, Objekt, Bedrohung, Schwachstelle, Eigentümer, Bewertungen, Auswirkungen, Eintrittswahrscheinlichkeit, Risikohöhe, Maßnahmen, Behandlung, Verantwortliche, Ressourcen, Termine, Priorisierung, Werte nach Behandlung, Restrisiko). | Filter: *Anwendungsbereich*, *Standort*.                                                                                    |
| Report-View      | **ISMS Risikobehandlungsplan (RTP)**        | Fokus auf Risikobehandlung gemäß ISO 31000: Bedrohung → betroffene Objekte → Maßnahmen; inkl. Begründung, Risk Owner, Dringlichkeit, spätestes Umsetzungsdatum.                                                                                                                            | Filter: *Anwendungsbereich*, *Standort*.                                                                                    |
| Report-View      | **ISMS Geltungsbereich**                    | Zeigt alle Objekte (mit Objekttyp und Standort), deren **ISMS-Relevanz = "Ja"** ist.                                                                                                                                                                                                       | Filter: *Anwendungsbereich*, *Standort*.                                                                                    |
| Report-View      | **ISMS Risikoeinschätzung (objektbasiert)** | Wie "ISMS Risikoeinschätzung", zusätzlich auf **einzelne Objekte** filterbar; bietet **CSV-Export**.                                                                                                                                                                                       | Objekt-Filter; CSV-Export.                                                                                                  |
| Report-View      | **ISMS Restrisiko nach Level**              | Analoge Darstellung zu "ISMS Risiko nach Level", jedoch **nach** Maßnahmen (Restrisiko).                                                                                                                                                                                                   | -                                                                                                                           |

* * *

## Details und Best Practices

### Variabler Report: ISMS Risikoeinschätzung (Gruppe)
**Zweck.** Risikoeinschätzungen aller **Objektgruppen** zum gerade ausgewählten Objekt. ideal, um gruppenbasierte Risiken schnell zu überblicken.

**Anpassbarkeit.** Der Report ist im **Abfrage-Editor** frei änderbar. Ein typisches Muster ist die **Duplikation** für Servicekomponenten: Erstellen Sie "ISMS-Risikoeinschätzung (Servicekomponente)" und passen Sie die Bedingung an:

1. Kategorie **"Service Komponenten (Service)"** wählen
2. Beim Attribut **"Zugewiesenes Objekt"** den Feld-Platzhalter **Objekt-ID** setzen

!!! note "Hinweis"
    Der Report ist an die gleichnamige **benutzerdefinierte Kategorie** gebunden und kann unterschiedlichen Objekttypen zugewiesen werden.

* * *

### Report-View: ISMS Risiko nach Risikoklasse
**Zweck:** Überblick über **Risikohöhen** bei **Umsetzungsstatus = "Unbearbeitet"**.

**Filter:** *Risikoklasse*, *Anwendungsbereich* sowie *Standort* (Standortfilter einschränkt auf Objekte unterhalb des gewählten Standorts).

* * *

### Report-View: Erklärung zur Anwendbarkeit (SoA)
**Zweck:** Vollständige, hierarchische Sicht auf **Maßnahmen aus Anhang A** (Kapitel/Unterkapitel), inklusive **Anwendbarkeit**, **Begründung** (Einbeziehung/Nichteinbeziehung) und **Umsetzungsstatus**. **Zugewiesene SoA-Maßnahmen** werden jeweils unterhalb der Annex-A-Maßnahme dargestellt; am Ende folgt die Gesamtliste aller SoA-Maßnahmen.

**Rechte:** Berücksichtigt Standortrechte, sofern diese in den Mandanteneinstellungen aktiviert sind **und** die Maßnahmen einen Standort besitzen.

* * *

### Report-View: SoA Vollständigkeitsprüfung
**Zweck:** Audit-taugliche Übersicht, ob **alle Maßnahmen hinreichend dokumentiert** sind (farbliche Markierung pro Maßnahme).

**Rechte:** Berücksichtigt Standortrechte (falls aktiviert).

* * *

### Report-View: ISMS Risikomatrix
**Zweck:** Visualisiert die Risikolage **vor** und **nach** Behandlung. Achsenbeschriftungen ergeben sich direkt aus den **Bewertungskriterien**.

**Interaktion:** Klick auf die Anzahl in einer Matrix-Zelle öffnet die **Report-View "ISMS Risikoeinschätzung"** gefiltert auf die betroffene Kombination aus **Eintrittswahrscheinlichkeit** und **Auswirkung**.

**Filter:** *Anwendungsbereich* und *Standort*.

[![Risikomatrix Beispiel](../../assets/images/de/i-doit-add-ons/isms/reports/matrix.png)](../../assets/images/de/i-doit-add-ons/isms/reports/matrix.png)

!!! tip "Die Achsen und Farben ergeben sich aus den in der [**Konfiguration**](configuration.md) definierten Bewertungskriterien, Risikoformel und Risikoklassen. Passen Sie diese zuerst an, um die Matrix sinnvoll zu nutzen."

* * *

### Report-View: ISMS Risikoeinschätzung
**Zweck:** Vollständige Detailansicht aller **Risikoeinschätzungen** in i-doit, geeignet als **Arbeitsliste** für Risk-Owner und Auditoren.

**Inhalt (Auszug):** ID der Einschätzung, betroffener Objekttyp/-name, **Bedrohung**, **Schwachstelle**, **Werteeigentümer**, **Risikoeigentümer**, Bewertungen der **Schadensszenarien** und resultierende **Auswirkung**, **Eintrittswahrscheinlichkeit**, **Risikohöhe** (farblich), **existierende Maßnahmen**, **Risikobehandlung**, **Verantwortliche**, **notwendige Ressourcen**, **Umsetzungsdatum**, **Priorisierung**, Bewertungen **nach** Behandlung und **Restrisiko** (farblich).

**Filter:** *Anwendungsbereich* und *Standort*.

* * *

### Report-View: ISMS Risikobehandlungsplan (RTP)
**Zweck:** Umsetzungsorientierte Sicht, ordnet **Bedrohungen** den **betroffenen Objekten** und **Maßnahmen** zu; zeigt **Risikobehandlung** (i.d.R. Werte nach **ISO 31000**), **Begründung**, **Risk Owner**, **Dringlichkeit** und **spätestes Umsetzungsdatum**.

**Filter:** *Anwendungsbereich* und *Standort*.

* * *

### Report-View: ISMS Geltungsbereich
**Zweck:** Auflistung aller Objekte (inkl. Objekttyp und Standort), bei denen **ISMS-Relevanz = "Ja"** gesetzt ist, sind ideal für Scope-Definition und Audits.

**Filter:** *Anwendungsbereich* und *Standort*.

* * *

### Report-View: ISMS Risikoeinschätzung (objektbasiert)
**Zweck:** Fokussierte Sicht auf **einzelne Objekte** mit denselben Informationen wie die allgemeine Risikoeinschätzung.

[<- Zur Startseite](index.md){ .md-button} · [Objekttypen und Kategorien ->](object-types-and-categories.md){ .md-button .md-button--primary}
