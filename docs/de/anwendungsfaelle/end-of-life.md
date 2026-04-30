---
title: Dokumentation von End of Life Daten
description: Erfahre, wie du End of Life (EOL) Daten effizient in i-doit verwaltest, von der manuellen Erfassung bis hin zu ressourcenschonenden Ansatz und Report-Kategorien.
lang: de
---

# Dokumentation von End of Life Daten

Die Überwachung von End of Life (EOL) und End of Support (EOS) Daten ist essenziell für ein proaktives Lifecycle-Management. In i-doit gibt es verschiedene Strategien, um diese Daten zu pflegen, Lizenzen zu sparen und die Informationen für deine Kollegen intuitiv nutzbar zu machen.

Im Folgenden stellen wir dir verschiedene Lösungsansätze vor, von der klassischen Dokumentation direkt am Asset bis hin zu einem innovativen "Intuitiv-Ansatz" mit zentraler Pflege auf Modell-Ebene.

## Ansatz 1: Dezentrale Dokumentation direkt am Asset

Bei diesem klassischen Ansatz erstellst du eine benutzerdefinierte Kategorie (z.B. "Lifecycle"), die du direkt den jeweiligen Hardware-Objekttypen (Server, Client, Switch etc.) zuweist.

* **Attribute:** End of Sale, End of Support, End of Life, Status.
* **Vorteil:** Die Information ist physisch direkt am jeweiligen Asset sichtbar.
* **Nachteil:** Hoher Pflegeaufwand bei vielen gleichartigen Geräten, da du die Daten redundant bei jedem einzelnen Asset eintragen musst.

## Ansatz 2: Zentrales Listen-Objekt mit Multi-Value Kategorie

Um Redundanzen zu vermeiden, kannst du EOL-Daten zentral bündeln. Ein sehr flexibler Weg ist die Nutzung von Listen-Kategorien (Multi-Value).

1. Du erstellst einen Objekttyp (z.B. "End of Life") und darin ein Sammel-Objekt pro Geräteklasse (z.B. ein Objekt namens "Switche").
2. Diesem Objekt weist du eine benutzerdefinierte **Multi-Value Kategorie** (z.B. "EOL Switche") zu.
3. Die Kategorie enthält Attribute wie *Modell*, *End of Life Datum* und *Quelle/Link*.
4. **Umsetzung:** Für jedes existierende Modell in deiner Infrastruktur legst du in dieser Kategorie einen neuen Eintrag (Zeile) an.

* **Vorteile:** Sehr aufgeräumt; Pflegeaufwand minimiert; skaliert hervorragend auch bei sehr vielen verschiedenen Modellen, da keine Anpassung der Kategorie-Konfiguration nötig ist.

## Ansatz 3: Der "Intuitiv-Ansatz" (Ein Feld pro Modell)

*Dieser Artikel basiert auf einem Lösungsansatz eines Anwenders.*

Diese Methode ist besonders benutzerfreundlich ("Kollegentest-geprüft"), übersichtlich und spart Objektlizenzen, da du pro Geräteklasse exakt nur ein Objekt benötigst.

1. Erstelle in der Objekttypgruppe "Andere" für jeden Objekttyp einen eigenen Objekttyp (z.B. "EOL-Switche", "EOL-Router").
2. Von diesem Typ erstellst du **genau ein Objekt** (z.B. "Switche").
3. Erstelle für den Objekttypen eine benutzerdefinierte Kategorie (z.B. "Switch-EOL-Daten"), die diesem Objekttyp zugewiesen wird.
4. Die verschiedenen Modelle des Objekttyps legst du bei der Konfiguration der Kategorie als einzelne **Felder** (Typ: *Datum ohne Zeitangabe*) an. Das Feld heißt dann beispielsweise "Aruba Instant On 1430".
5. **Konfiguration der Übersichtsseite:** Richte die Übersichtsseite dieses Objekts so ein, dass alle Felder dieser Kategorie sofort angezeigt werden.

* **Vorteile:** Extrem intuitive Pflege für die Kollegen (einfache Datumsauswahl via Kalender-Widget); alle EOL-Daten einer Geräteklasse auf einen Blick; sehr ressourcen- und lizenzschonend.
* **Administrativer Aufwand:** Als Admin musst du nur dann tätig werden, wenn ein komplett neues Modell in die Infrastruktur aufgenommen wird. Dann fügst du der Kategorie einfach ein neues Datumsfeld hinzu.

## Visualisierung am Endgerät: Die Report-Kategorie

Wenn du dich für die zentrale Pflege (Ansatz 2 oder 3) entscheidest, möchtest du die EOL-Informationen vermutlich trotzdem sehen, wenn du das Objekt eines spezifischen Geräts (z.B. einen einzelnen Switch im Serverschrank) öffnest.

Das löst du elegant über eine **benutzerdefinierte Kategorie vom Typ "Report"**:

1. Erstelle einen Report, der die Modell-Zuweisung des spezifischen Geräts mit den zentralen EOL-Daten abgleicht.
2. Erstelle eine Kategorie vom Typ "Report", die diesen Report als Inhalt hat.
3. Weise die Kategorie dem Objekttyp zu.
4. **Ergebnis:** Öffnest du den Switch, siehst du in der Kategorie "EOL Report" sofort das für dieses Modell zutreffende EOL-Datum, obwohl der Datensatz zentral gepflegt wird.

## Datenerfassung und Automatisierung

Egal für welchen Ansatz du dich entscheidest, die initialen Daten oder regelmäßige Updates kannst du auch automatisieren:

* **CSV-Import:** Wenn Hersteller Listen mit Support-Zeiträumen bereitstellen, kannst du diese Daten als CSV aufbereiten und gebündelt in deine EOL-Kategorien importieren.
* **API-Skript:** Für eine vollständige Automatisierung kann ein Skript (z.B. 1x täglich) eine externe Quelle oder CSV abfragen, die Modelle mit deiner i-doit CMDB abgleichen und die EOL-Daten via API in die entsprechenden Kategorien schreiben.
