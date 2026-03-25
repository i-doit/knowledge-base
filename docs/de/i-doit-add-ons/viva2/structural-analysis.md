---
title: Strukturanalyse
description: Im Rahmen der Strukturanalyse muss sichergestellt werden, dass alle für die Dokumentation des Informationsverbund benötigten Objekte in i-doit angelegt sind.
icon:
status:
lang: de
---

# Strukturanalyse

Im Rahmen der Strukturanalyse muss sichergestellt werden, dass alle für die Dokumentation des Informationsverbund benötigten Objekte in i-doit angelegt sind.

## Zu erfassen

- Geschäftsprozesse mit zugehörigen Anwendungen
- IT-Systeme, ICS-Systeme, sonstige Geräte
- Räume und Standorte
- Kommunikationsverbindungen

## Zielobjekt-Gruppen

- Gleichartige Objekte statisch gruppieren und der Informationsverbund-Zuordnung zuführen

Zur Reduzierung der Komplexität sollten gleichartige Objekte im Objekttyp Zielobjektgruppe gruppiert werden. Der Typ der Objektgruppe muss dabei auf statisch gesetzt bleiben. Die Zielobjektgruppe wird dann über die Kategorie "Informationsverbünde" dem Informationsverbund zugeordnet werden.

[![Zielobjekt-Gruppen](../../assets/images/de/i-doit-add-ons/viva2/structural-analysis/zielobjektgruppe-beispiel.png)](../../assets/images/de/i-doit-add-ons/viva2/structural-analysis/zielobjektgruppe-beispiel.png){:target="_blank"}

!!! note "Es ist technisch möglich, eine Zielobjektgruppe mehreren Informationsverbünden zuzuordnen, es wird jedoch empfohlen, eine Zielgruppe immer nur einem Informationsverbund zuzuordnen."

## Einzelobjekte

Wenn es einzelne Objekte gibt, die dem Informationsverbund zugeordnet werden müssen und denen Bausteine zugeordnet werden müssen, dann gibt es zwei Möglichkeiten, dies umzusetzen:

1.  Für dieses Objekt wird eine Zielobjektgruppe erstellt und das Objekt wird als einziges Objekt dieser Objektgruppe zugeordnet. Die Zielobjektgruppe wird dann ganz normal dem Informationsverbund zugewiesen.
2.  Dem Objekttyp dieses Objekts wird über den Quick Configuration Wizard die Kategorie "IT-Grundschutz (Zielobjekte)" zugewiesen. In diesem Fall wird dann das Objekt direkt dem Informationsverbund zugewiesen.

## Verantwortlichkeiten

Bei allen relevanten Objekten sollte die Dokumentation der Verantwortlichkeiten über die Kategorie Kontaktzuweisung vorgenommen werden.

## Bereinigter Netzplan

Der bereinigte Netzplan sollte in der Kategorie "Informationsverbund" am Informationsverbund verlinkt werden.

[![Bereinigter Netzplan](../../assets/images/de/i-doit-add-ons/viva2/structural-analysis/netzplan.png)](../../assets/images/de/i-doit-add-ons/viva2/structural-analysis/netzplan.png){:target="_blank"}

## Kommunikationsverbindungen

Die zu dokumentierenden Kommunikationsverbindungen werden über den neuen [Objekttyp Kommunikationsverbindung](objecttypes-categories.md#kommunikationsverbindung) in i-doit eingepflegt.

[![## Kommunikationsverbindungen](../../assets/images/de/i-doit-add-ons/viva2/structural-analysis/kommunikationsverbindungen.png)](../../assets/images/de/i-doit-add-ons/viva2/structural-analysis/kommunikationsverbindungen.png){:target="_blank"}

Kommunikationsverbindungen werde in der Regel direkt dem Informationsverbund zugeordnet, deswegen ist dem Objekttypen "Kommunikationsverbindung" die Kategorie "IT-Grundschutz (Zielobjekte)" initial zugeordnet. Inder Kategorie "Informationsverbünde" muss dann noch der entsprechende Informationsverbund zugeordnet werden.

Wenn in der Kategorie "Kommunikationsverbindung" Objekte bei "Verbindungsteilnehmer" eingetragen sind, dann wird in der Schutzbedarfsfeststellung der Schutzbedarf von diesen Objekten auf die Kommunikationsverbindung vererbt.

[<- Zurück](objecttypes-categories.md){ .md-button } · [Schutzbedarfsfeststellung ->](assessment-of-protection.md){ .md-button .md-button--primary }
