---
title: Einrichtung des ISMS-Add-ons
description: Anleitung zur vollständigen Einrichtung des ISMS-Add-ons in i-doit.
icon:
status:
lang: de
---

# Einrichtung des ISMS-Add-ons

Dieses Dokument beschreibt die vollständige Einrichtung des ISMS-Add-ons in i-doit.

* * *

## Einrichtung des ISMS Add-ons

Vor der Nutzung müssen vier grundlegende Schritte durchgeführt werden.

### 1. Bewertungskriterien festlegen

- Definiere Kriterien für **Eintrittswahrscheinlichkeit** und **Schadensausmaß**
- Werte müssen Ganzzahlen sein und dienen als Achsenbeschriftung in der **Risikomatrix**

!!! example "Zum Beispiel"
    | Level | Bezeichnung | Beschreibung der Eintrittswahrscheinlichkeit |
    | ----- | ----------- | -------------------------------------------- |
    | 1     | Gering      | Tritt alle 10 Jahre ein                      |
    | 2     | Normal      | Tritt jedes Jahr ein                         |
    | 3     | Hoch        | Tritt mehrmals pro Jahr ein                  |
    | 4     | Sehr hoch   | Tritt täglich ein                            |

Das Level sollte eine positive Ganzzahl sein, wonach die Kriterien aufsteigend sortiert werden. Die Beschreibung der Eintrittswahrscheinlichkeit ist optional.

[![Bewertungskriterien](../../assets/images/de/i-doit-add-ons/isms/configuration/1-bewertungskriterien.png)](../../assets/images/de/i-doit-add-ons/isms/configuration/1-bewertungskriterien.png)

### 2. Schadensszenarien anlegen

**Beispiele:**
- Finanzielle Schäden
- Gesetzesverstöße oder Vertragsverletzungen
- Datenschutzverletzungen
- Negative Außenwirkung

!!! example "Zum Beispiel"
    | Kennzeichnung | Bezeichnung            | Bewertungskriterien           |
    | ------------- | ---------------------- | ----------------------------- |
    | 1             | Finanzielle Auswirkung | Gering: Weniger als 5.000€    |
    |               |                        | Normal: Von 5.000 bis 50.000€ |
    |               |                        | Hoch: Von 50.000 bis 500.000€ |
    |               |                        | Sehr hoch: Mehr als 500.000€  |

Für jedes Bewertungskriterium sollten passende Ausprägungen erstellt werden. Die Schadensszenarien können sich anhand der im IT-Grundschutz des BSI definierten orientieren. Die Kennzeichnung dient der Sortierung.

[![Schadensszenarien](../../assets/images/de/i-doit-add-ons/isms/configuration/2-schadensszenarien.png)](../../assets/images/de/i-doit-add-ons/isms/configuration/2-schadensszenarien.png)

### 3. Risikoklassen und Risikoformel definieren

- Konfiguration unter **Add-ons → ISMS → Risikoklassen**
- Die **Risikomatrix** basiert auf den Bewertungskriterien und der gewählten Berechnungsformel
- Risikoklassen können individuell angepasst und farblich markiert werden

#### Risikoklassen

Für die weitere Auswertung ist nun noch zu wählen, wie kritisch eine Risikohöhe eingeschätzt wird. Dazu können Farben definiert werden.

| Farbe                              | Risikohöhe |
| ---------------------------------- | ---------- |
| Rot, sind Werte unter oder gleich  | -          |
| Gelb, sind Werte unter oder gleich | 6          |
| Grün, sind Werte unter oder gleich | 3          |

Aus den gewählten Werten ergibt sich eine Risikomatrix.

[![Risikoklassen](../../assets/images/de/i-doit-add-ons/isms/configuration/3-risikoklassen.png)](../../assets/images/de/i-doit-add-ons/isms/configuration/3-risikoklassen.png)

#### Risikoformel und Risikomatrix

!!! note "Wenn keine Bewertungskriterien definiert sind, dann wird die Risikomatrix nicht angezeigt."

Die Risikoformel definiert, wie die Risikohöhe aus den Bewertungskriterien berechnet wird. Beispiel für die Formel "Maximum Risikobewertung + Eintrittswahrscheinlichkeit = Risikohöhe":

[![Risikoklassen](../../assets/images/de/i-doit-add-ons/isms/configuration/3-risikomatrix.png)](../../assets/images/de/i-doit-add-ons/isms/configuration/3-risikomatrix.png)

!!! tip "Felder der Risikomatrix manuell überschreiben"
    In der Risikomatrix können einzelne Felder manuell überschrieben werden. Klicken Sie dazu auf das gewünschte Feld und wählen Sie die gewünschte Risikoklasse aus.

### 4. Maßnahmen hinzufügen

- Maßnahmen können manuell erstellt oder per **CSV-Import** aus Katalogen übernommen werden
- Für ISO 27001 empfiehlt sich der Import der Maßnahmen aus **Anhang A**
- Kataloge sind im Add-on-Paket enthalten und können über den i-doit CSV-Import eingespielt werden:
  - **Extras → CMDB-Import → CSV Import**
  - Kataloge liegen im Add-on Verzeichnis unter: `src/classes/modules/iso27001/Catalogs/`
  - Import-Profil laden: **ISMS universal (new)**
  - Import starten

[![Maßnahmen hinzufügen](../../assets/images/de/i-doit-add-ons/isms/configuration/4-import-profil-laden.png)](../../assets/images/de/i-doit-add-ons/isms/configuration/4-import-profil-laden.png)

Da ein Risiko immer aus **Bedrohung und Schwachstelle** besteht, empfiehlt es sich, auch diese Objekttypen anzulegen.

| Datei                                                      | Norm/Standard             | Beschreibung                                      | Version | Sprache | Anzahl lizenzpflichtiger Objekte |
| ---------------------------------------------------------- | ------------------------- | ------------------------------------------------- | ------- | ------- | -------------------------------- |
| ISO27001_Massnahmen_AnhangA(de).csv                        | DIN EN ISO/IEC 27001      | Maßnahmen Anhang A                                | 2022    | DE      | ~93                              |
| ISO27001_Controls_AnnexA(en).csv                           | DIN EN ISO/IEC 27001      | Controls Appendix A                               | 2022    | EN      | ~93                              |
| IT-Grundschutz-Kompendium_Elementare Gefaehrdungen(de).csv | BSI Grundschutzkompendium | Elementargefährdungen als Bedrohung/Schwachstelle | -       | DE      | ~47                              |
| IT-Grundschutz-Kompendium_Elementary_Threats(en).csv       | BSI Grundschutzkompendium | Elementary threats as threat/vulnerabilities      | -       | EN      | ~47                              |
| IT-Grundschutz-Kompendium_Anforderungen(de).csv            | BSI Grundschutzkompendium | Anforderungen aus den Bausteinen als Maßnahmen    | 2023    | DE      | ~1834                            |
| NIS2-Anforderungen(openkritis.de).csv                      | NIS2                      | Anforderungen aus NIS2 als Maßnahmen              | -       | DE      | ~36                              |

* * *

## Optionale Einstellungen

In den Mandanteneinstellungen kann die Option **"Reportviews nach Standortrechten filtern"** aktiviert werden.

Das ISMS Add-on unterstützt die Rechtevergabe nach Standorten, um eine flexible und sichere Verwaltung von Informationen zu ermöglichen. In den Mandanteneinstellungen von i-doit kann die Option "Reportviews nach Standortrechten filtern" aktiviert werden.

### Was bewirkt diese Einstellung?

Wenn die Option aktiv ist, werden in den vom ISMS-Add-on bereitgestellten Report Views nur die Risikoeinschätzungen angezeigt, die der jeweilige Nutzer sehen darf. Konkret bedeutet das: Es wird geprüft, ob der Nutzer für die Kategorie "ISMS" an den entsprechenden Objekten das Recht "Ansehen" besitzt.

### Maßnahmen nach Standorten zuweisen

Zusätzlich ist es möglich, die Kategorie "Standort" an Objekte vom Typ "SOA-Maßnahme" oder "Maßnahme Anhang A" zu konfigurieren. Dadurch können Maßnahmen bestimmten Standorten zugeordnet werden.

### Vorteile dieser Funktion:

- Standorte können den Umsetzungsstatus ihrer eigenen Maßnahmen selbst pflegen.
- Nutzer sehen nur die Maßnahmen ihres eigenen Standorts.
- Eine zentrale Stelle kann Berichte für alle Standorte oder gefiltert nach einzelnen Standorten erstellen.

!!! note
    Für SOA-Maßnahmen und Maßnahmen Anhang A kann die Kategorie "Standort" aktiviert werden.

* * *

[<- Zur Startseite](index.md){ .md-button} · [Risikoeinschätzung ansehen ->](risk-assessment.md){ .md-button .md-button--primary}
