---
title: Schutzbedarfsfeststellung
description: Darstellung und Verwaltung der Schutzbedarfsfeststellung und -vererbung eines Informationsverbundes
icon:
status:
lang: de
---

# Schutzbedarfsfeststellung

Über **Add-ons > IT-Grundschutz > Schutzbedarfsfeststellung** gelangst du zur grafischen Darstellung der Schutzbedarfsfeststellung und -vererbung eines Informationsverbundes.

Um die Schutzbedarfsfeststellung zu laden, wählst du oben im Objektbrowser zuerst einen Informationsverbund aus. Bei großen Informationsverbünden kann dies mehrere Sekunden dauern.

Sobald der Informationsverbund geladen ist, werden im linken Bereich alle Zielobjekte/Zielobjektgruppen angezeigt, die über die Kategorie "Informationsverbünde" (bzw. zugehörigen der rückwärtigen Kategorie "Infrastrukturanalyse" im Informationsverbund) dem ausgewählten Informationsverbund zugeordnet sind.

[![Zielobjektgruppen](../../assets/images/de/i-doit-add-ons/viva2/assessment-of-protection/zielobjektgruppen.png)](../../assets/images/de/i-doit-add-ons/viva2/assessment-of-protection/zielobjektgruppen.png){:target="_blank"}

Im Hauptbereich wird der komplette Informationsverbund grafisch dargestellt.

## Die Schutzbedarfsvererbung

Der Schutzbedarf wird dabei von oben nach unten vererbt, oben angefangen mit den Zielobjekten/Zielobjektgruppen, die dem Informationsverbund zugeordnet sind. Nach unten werden dann alle Objekte geladen (und der Schutzbedarf vererbt), die über einer der folgenden Beziehungen miteinander verbunden sind:

-   Gruppenmitgliedschaft
-   Service-Komponente
-   Softwarezuweisung
-   Anschlüsse
-   Clustermitgliedschaften
-   Virtuelle Maschine
-   Vertragszuweisung
-   Kommunikationsverbindung
-   Standort

Der Schutzbedarf in den verschiedenen Grundwerten wird dabei nach dem Maximumprinzip nach unten vererbt.

[![Zielobjekte](../../assets/images/de/i-doit-add-ons/viva2/assessment-of-protection/zielobjekte.png)](../../assets/images/de/i-doit-add-ons/viva2/assessment-of-protection/zielobjekte.png){:target="_blank"}

Wenn der Schutzbedarf direkt am Objekt eingetragen ist, dann wird der Wert in grüner Schrift dargestellt, wenn der Wert vererbt ist, dann wird er grau dargestellt. Wenn der Wert am Objekt niedriger eingestellt wird, als es die Vererbung eigentlich ausgibt, wird der Wert in roter Schrift dargestellt (z.B. beim Verteilungseffekt).

[![zielobjekte-schutzbedarf-vererbt](../../assets/images/de/i-doit-add-ons/viva2/assessment-of-protection/zielobjekte-schutzbedarf-vererbt.png)](../../assets/images/de/i-doit-add-ons/viva2/assessment-of-protection/zielobjekte-schutzbedarf-vererbt.png){:target="_blank"}

## Filtern der Ansicht

Da die grafische Darstellung bei großen Informationsverbünden schnell unübersichtlich wird, beschränkst du die Ansicht auf bestimmte "Teilbäume". Standardmäßig sind im linken Bereich alle Zielobjekte/Zielobjektgruppen aktiviert und der komplette Informationsverbund wird geladen. Um die Ansicht einzuschränken, wählst du im linken Bereich nur die gewünschten Zielobjekte/Zielobjektgruppen aus. Ein Klick auf "Filter anwenden" rendert die Ansicht neu und zeigt nur die Vererbungsbäume der ausgewählten Zielobjekte/Zielobjektgruppen.

## Schutzbedarf eintragen/ändern

Den Schutzbedarf eines Objektes bearbeitest du direkt in der grafischen Darstellung. Klicke ein Objekt in der Baumdarstellung an -- es wird in den linken Bereich geladen.

[![Schutzbedarf](../../assets/images/de/i-doit-add-ons/viva2/assessment-of-protection/schutzbedarf-anzeigen.png)](../../assets/images/de/i-doit-add-ons/viva2/assessment-of-protection/schutzbedarf-anzeigen.png){:target="_blank"}

Um den Schutzbedarf einzutragen oder zu ändern, klickst du auf "Schutzbedarf bearbeiten". In der Bearbeitungsmaske trägst du den Schutzbedarf in den Grundwerten ein und hinterlegst eine Begründung für die Einstufung.

[![Schutzbedarf bearbeiten](../../assets/images/de/i-doit-add-ons/viva2/assessment-of-protection/schutzbedarf-editieren.png)](../../assets/images/de/i-doit-add-ons/viva2/assessment-of-protection/schutzbedarf-editieren.png){:target="_blank"}

Nach dem Klick auf Speichern wird das Objekt mit den entsprechenden Werten gespeichert. Danach lädst du den Informationsverbund komplett neu, damit die Schutzbedarfsvererbung neu berechnet wird.

## Schutzbedarf exportieren

Über den Button "Export" rechts oben exportierst du die Schutzbedarfsfeststellung und -vererbung:

-   SVG: Der komplette gerenderte Bereich wird im SVG-Format gespeichert.
-   PNG: Es wird nur der gerade sichtbare Bereich als PNG-Datei gespeichert.
-   CSV: Die Schutzbedarfsfeststellung des gesamten Informationsverbundes wird als CSV-Datei zum Export angeboten. Eine ggf. angegebene Filterung wird ignoriert.
-   JSON: Die Schutzbedarfsfeststellung des gesamten Informationsverbundes wird im JSON-Format zum Export angeboten. Eine ggf. angegebene Filterung wird ignoriert.

[![Schutzbedarf exportieren](../../assets/images/de/i-doit-add-ons/viva2/assessment-of-protection/export.png)](../../assets/images/de/i-doit-add-ons/viva2/assessment-of-protection/export.png){:target="_blank"}

[<- Zurück](structural-analysis.md){ .md-button } · [Modellierung des Informationsverbundes ->](modeling.md){ .md-button .md-button--primary }
