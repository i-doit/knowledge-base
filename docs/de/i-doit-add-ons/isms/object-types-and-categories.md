---
title: ISMS-Objekttypen
description: Beschreibung der Objekttypen, die das ISMS-Add-on in i-doit bereitstellt.
icon:
status:
lang: de
---

# ISMS Objekttypen

Das ISMS-Add-on ergänzt i-doit um mehrere Objekttypen in der Objekttyp-Gruppe "ISMS". Die folgenden Abschnitte beschreiben Zweck, typische Kategorien und Besonderheiten je Objekttyp.

* * *

## Audit

[![Audit](../../assets/images/de/i-doit-add-ons/isms/object-types-and-categories/isms_audit.jpg)](../../assets/images/de/i-doit-add-ons/isms/object-types-and-categories/isms_audit.jpg)

Mit dem Objekttyp Audit lassen sich Audits dokumentieren, inklusive Ergebnissen und festgestellten Abweichungen.

**Kategorien:**

  - **Abweichungen:** Multivalue-Kategorie zur Erfassung der im Audit festgestellten Abweichungen. Initiale Typen sind Hauptabweichung, Nebenabweichung, Empfehlung und Hinweis.
  - **Allgemein** (i-doit Standardkategorie): Gehört zu jedem Objekt.
    - **Audit:** Erfassung von Daten zum Audit, zum Beispiel Audittype, Auditkriterium, Prüfzeitraum und Prüfbericht.

* * *

## Bedrohung

[![Bedrohung](../../assets/images/de/i-doit-add-ons/isms/object-types-and-categories/isms_threat.jpg)](../../assets/images/de/i-doit-add-ons/isms/object-types-and-categories/isms_threat.jpg)

Der Objekttyp Bedrohung beschreibt Risikoquellen für Risikoeinschätzungen.

**Kategorien:**

  - **Allgemein** (i-doit Standardkategorie): Gehört zu jedem Objekt.
  - **Bedrohung:** Kennzeichnung, Kategorie, Katalog, Kapitel und Abschnitt. Diese Angaben sind hilfreich, wenn die Bedrohung aus einem Katalog stammt, zum Beispiel dem IT-Grundschutz-Kompendium. Zusätzlich können die Schutzziele Vertraulichkeit, Integrität und Verfügbarkeit dokumentiert werden.
  - **Empfehlungen nach ISO27002:** Zwei Textfelder zur Dokumentation von Empfehlungen. Importpakete sind aus Lizenzgründen nicht enthalten.
  - **ISMS: Wird verwendet in:** Variabler Report, der alle Objekte auflistet, die diese Bedrohung verwenden.
  - **Typische Schwachstellen:** Multivalue-Kategorie zur Auswahl vorhandener Schwachstellen.
  - **Zugriff** (i-doit Standardkategorie): Verlinkung auf Quellen, zum Beispiel Beschreibungen im IT-Grundschutz-Kompendium des BSI.

!!! tip "Für den Import von Bedrohungen aus dem IT-Grundschutz-Kompendium eignet sich diese Struktur besonders gut."

* * *

## Bewertungskriterium

[![Bewertungskriterium](../../assets/images/de/i-doit-add-ons/isms/object-types-and-categories/isms_protection_category.jpg)](../../assets/images/de/i-doit-add-ons/isms/object-types-and-categories/isms_protection_category.jpg)

Bewertungskriterien bilden die Grundlage für die Berechnung der Risikohöhe.

**Kategorien:**

  - **Bewertungskriterium:** Level als maßgeblicher Zahlenwert für die Risikohöhe. Optional Beschreibung der Eintrittswahrscheinlichkeit und Benennung des Schadensausmaßes.
  - **Allgemein** (i-doit Standardkategorie): Gehört zu jedem Objekt.

* * *

## Ereignis

[![Ereignis](../../assets/images/de/i-doit-add-ons/isms/object-types-and-categories/isms_event.jpg)](../../assets/images/de/i-doit-add-ons/isms/object-types-and-categories/isms_event.jpg)

Mit dem Objekttyp Ereignis lassen sich Risikoereignisse für eine ereignisbasierte Risikoidentifikation anlegen.

**Kategorien:**

  - **Allgemein** (i-doit Standardkategorie): Gehört zu jedem Objekt.
  - **Risikoeinschätzung (Ereignis):** Dokumentation der Risikobeschreibung und der Risikoquellen. Inhaltlich ähnlich zur Kategorie Risikoeinschätzung, jedoch ohne die Felder Bedrohung und Schwachstelle.

* * *

## Maßnahme Anhang A

[![Maßnahme Anhang A](../../assets/images/de/i-doit-add-ons/isms/object-types-and-categories/isms_control_annex_a.jpg)](../../assets/images/de/i-doit-add-ons/isms/object-types-and-categories/isms_control_annex_a.jpg)

Der Objekttyp Maßnahme Anhang A enthält die Maßnahmen aus ISO 27001 Anhang A. Hauptzweck ist der Abgleich mit den SOA-Maßnahmen.

**Kategorien:**

  - **Allgemein** (i-doit Standardkategorie): Gehört zu jedem Objekt.
  - **Anwendbarkeit:** Entscheidung über Einbeziehung oder Nichteinbeziehung mit Begründung. Zuordnung von SOA-Maßnahmen, die diese Annex-A-Maßnahme umsetzen. Dokumentation des Umsetzungsstatus. Die Werte erscheinen in der Report-View Erklärung zur Anwendbarkeit (SoA).
  - **Maßnahme Anhang A:** Kennzeichnung, Abschnitt, Kapitel und Beschreibung.

* * *

## Normanforderung

[![Normanforderung](../../assets/images/de/i-doit-add-ons/isms/object-types-and-categories/isms_standard_requirement.jpg)](../../assets/images/de/i-doit-add-ons/isms/object-types-and-categories/isms_standard_requirement.jpg)

Normanforderungen speichern Anforderungstexte und deren Umsetzungsstatus.

**Kategorien:**

  - **Allgemein** (i-doit Standardkategorie): Gehört zu jedem Objekt.
  - **Normanforderung:** Text, Quelle und Umsetzungsstatus.

!!! note "Viele Normentexte wie ISO 27001 oder ISO 27002 sind lizenzpflichtig. Entsprechende Texte können daher nicht mitgeliefert werden."

* * *

## Schadensszenario

[![Schadensszenario](../../assets/images/de/i-doit-add-ons/isms/object-types-and-categories/isms_incident_scenario.jpg)](../../assets/images/de/i-doit-add-ons/isms/object-types-and-categories/isms_incident_scenario.jpg)

Schadensszenarien dienen zur Einschätzung der Auswirkungen in der Risikobewertung.

**Kategorien:**

  - **Allgemein** (i-doit Standardkategorie): Gehört zu jedem Objekt.
  - **Schadensszenario:** Kennzeichnung als Ganzzahl für Sortierung und Darstellung in der Risikobewertung. Der Wert darf nicht Null sein.
  - **Bewertungskriterien:** Multivalue-Kategorie zur Verknüpfung mit Bewertungskriterien. Für jedes Kriterium kann eine textuelle Ausprägung gepflegt werden.

* * *

## Sicherheitsvorfall

[![Sicherheitsvorfall](../../assets/images/de/i-doit-add-ons/isms/object-types-and-categories/isms_security_incident.jpg)](../../assets/images/de/i-doit-add-ons/isms/object-types-and-categories/isms_security_incident.jpg)

Der Objekttyp Sicherheitsvorfall dient der strukturierten Dokumentation von Incidents.

**Kategorien:**

  - **Allgemein** (i-doit Standardkategorie): Gehört zu jedem Objekt.
  - **Risikoeinschätzung (Ereignis):** Abbildung der Auswirkungen und der Behandlung des Sicherheitsvorfalls.
  - **Sicherheitsvorfall:** Erfassung von Zeitpunkt, Entdeckung, Beschreibung sowie Meldungen an Behörden.

* * *

## Schwachstelle

[![Schwachstelle](../../assets/images/de/i-doit-add-ons/isms/object-types-and-categories/isms_vulnerability.jpg)](../../assets/images/de/i-doit-add-ons/isms/object-types-and-categories/isms_vulnerability.jpg)

Schwachstellen werden für Risikoeinschätzungen verwendet. Der Objekttyp kann optional sein, wenn Bedrohungen aus Katalogen bereits Bedrohung und Schwachstelle kombinieren, zum Beispiel im IT-Grundschutz.

**Kategorien:**

  - **Allgemein** (i-doit Standardkategorie): Gehört zu jedem Objekt.
  - **Schwachstelle:** Kennzeichnung, Kategorie, Katalog, Kapitel und Abschnitt.
  - **ISMS: Wird verwendet in:** Variabler Report, der alle Objekte auflistet, die diese Schwachstelle verwenden.
  - **Zugriff** (i-doit Standardkategorie): Referenzen zu externen Quellen, zum Beispiel IT-Grundschutz.

* * *

## SOA-Maßnahme

[![SOA-Maßnahme](../../assets/images/de/i-doit-add-ons/isms/object-types-and-categories/isms_control.jpg)](../../assets/images/de/i-doit-add-ons/isms/object-types-and-categories/isms_control.jpg)

SOA-Maßnahmen enthalten die im Unternehmen angewandten oder geplanten Maßnahmen. Maßnahmen können aus Katalogen importiert und mit Maßnahmen Anhang A verknüpft werden.

**Kategorien:**

  - **Allgemein** (i-doit Standardkategorie): Gehört zu jedem Objekt.
  - **Empfehlungen nach ISO27002:** Zwei Textfelder für Empfehlungen. Importpakete sind aus Lizenzgründen nicht enthalten.
  - **Maßnahme:** Kennzeichnung, Referenz, Stammdaten, Genehmigung, Kapitel und Abschnitt. Für die SoA sind Anwendbarkeit und Begründung der Anwendbarkeit relevant. Dokumentation des Umsetzungsstatus sowie einer Bemerkung. Für den Umsetzungsstatus sind im Auslieferungszustand keine Werte vordefiniert.
  - **ISMS: Wird verwendet in:** Variabler Report, der alle Objekte auflistet, die diese SOA-Maßnahme verwenden.
  - **Zugriff** (i-doit Standardkategorie): Referenz auf externe Quellen.

* * *

## Virtueller ISMS Standort

[![Virtueller ISMS Standort](../../assets/images/de/i-doit-add-ons/isms/object-types-and-categories/isms_virtual_location.jpg)](../../assets/images/de/i-doit-add-ons/isms/object-types-and-categories/isms_virtual_location.jpg)

Der virtuelle ISMS Standort ist ein Hilfsobjekt zur Strukturierung des Standortbaums, insbesondere bei aktivierten Standortrechten. SOA-Maßnahmen lassen sich diesem virtuellen Standort zuweisen. Dadurch bleibt der Standortbaum für Infrastruktur übersichtlich.

Standardmäßig ist der Objekttyp ausgeblendet. Er kann bei Bedarf über die Objekttyp-Konfiguration eingeblendet werden.

**Kategorien:**

  - **Allgemein** (i-doit Standardkategorie): Gehört zu jedem Objekt.
  - **Räumlich zugeordnete Objekte** (i-doit Standardkategorie): Zeigt alle Objekte, die diesen Standort verwenden.
  - **Standort** (i-doit Standardkategorie): Standort des Objekts. Wenn ein virtueller ISMS Standort anderen Objekten übergeordnet sein soll, benötigt er selbst einen Standort.

* * *

[<- Zur Startseite](index.md){ .md-button } · [Releases ->](releases.md){ .md-button  .md-button--primary}
