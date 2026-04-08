---
title: Analysis
description: "Das Add-on Analyse bietet dir zwei zentrale Funktionen:"
icon:
status:
lang: de
---
# Analysis

Das [Add-on](index.md) **Analyse** bietet dir zwei zentrale Funktionen:

1. **Datenqualität prüfen** -- Untersuche, wie vollständig deine IT-Dokumentation ausgefüllt ist, und erhalte eine interaktive Ergebnisansicht.
2. **Ausfälle simulieren** -- Spiele "Was passiert wenn"-Szenarien durch und analysiere die Auswirkungen auf deine Infrastruktur.

In Kombination mit der Schnittstelle zu [Checkmk](../i-doit-add-ons/checkmk2/index.md) kannst du auch tatsächliche Live-Ausfälle direkt untersuchen.

## Download und Installation

Dieses Add-on kann nachträglich installiert werden. Details zu Download, Installation und Updates findest du im Artikel "[i-doit Add-ons](./index.md)".

## Konfiguration

Eine gesonderte Konfiguration ist nicht nötig.

## Rechtevergabe

Unter **Verwaltung → Rechtesystem → Rechtevergabe → Analyse** können [Rechte für Personen und Personengruppen](../effizientes-dokumentieren/rechteverwaltung/index.md) angepasst werden.

| Bedingung | Beschreibung |
| --- | --- |
| **Analysen** | Analysen durchführen |
| **Datenqualität-Profile verwalten** | Profile für die **Datenqualität** erstellen, bearbeiten und/oder unwiderruflich löschen |

## Ausfallsimulation

Du möchtest herausfinden, welche Auswirkungen der Ausfall eines bestimmten Objekts auf deine dokumentierten Services hat? Nutze dafür die Simulation unter **Extras → Analyse → Ausfallsimulation**. Über den Tab **Manuelle Objektauswahl** stehen dir folgende Optionen zur Verfügung:

| Option | Beschreibung |
| --- | --- |
| **Objektauswahl** | Auswahl von einem oder mehreren Objekten, die ausgefallen sind (oder sein sollen) |
| **Servicefilter** | Eingrenzung der Analyse auf eine bestimmte Tiefe, bestimmte Objekttypen, -Beziehungen usw.; die Konfiguration befindet sich unter **Extras → Services → Servicefilter**. |
| **Ansicht** | Servicebaum vereinfacht darstellen |
| **Anzeigefilter** | Nachträgliche Filterung |

Klicke auf **Simulation starten**, um das Ergebnis zu erhalten. Das Ergebnis umfasst:

- Eine **Auflistung der betroffenen Services** -- je nach Servicefilter auch übergeordnete Services in der Hierarchie.
- Pro Service eine **Ausfallschwere**, farblich von grün (leicht) bis rot (schwer) dargestellt. Grundlage ist die Gewichtung der [Objekt-Beziehungen](../grundlagen/objekt-beziehungen.md).
- Ein **C** hinter dem Wert zeigt an, dass das ausgefallene Objekt Teil eines Clusters ist.

Unter **Baumansicht** wird der Ausfall als Servicebaum visualisiert.

[![Ausfallsimulation](../assets/images/de/i-doit-add-ons/analysis/1-ans.png)](../assets/images/de/i-doit-add-ons/analysis/1-ans.png)

Über den Tab **Report Objektauswahl** kannst du die Objekte alternativ auf Basis eines [Reports](../auswertungen/report-manager.md) auswählen.

## Ausfälle live

Unter **Extras → Analyse → Ausfälle live** greift i-doit auf die Schnittstelle zu einem konfigurierten [Network Monitoring](../automatisierung-und-integration/network-monitoring/index.md) (z. B. [Checkmk](../i-doit-add-ons/checkmk.md)) zurück. Fällt tatsächlich ein Host aus, siehst du direkt, welche Auswirkungen dieser Ausfall auf deine dokumentierten Services hat.

## Datenqualität

Unter **Extras → Analyse → Datenqualität** misst du, wie vollständig deine IT-Dokumentation ausgefüllt ist. Der Maßstab: [Zu jedem sichtbaren Objekttyp muss jede zugeordnete Kategorie](../grundlagen/zurodnung-von-kategorien-zu-objekttypen.md) jedes Objekts ausgefüllt sein -- das entspricht 100 Prozent.

**Beispiel:** Du hast 21 Objekte vom Typ **Client** mit 20 zugeordneten Kategorien. Nur wenn bei allen 21 Objekten sämtliche Kategorien ausgefüllt sind, erreichst du 100 %. Jede Lücke verringert den Wert.

Über den Button **Detaillierte Informationen darstellen** blendest du Details pro Objekttyp ein. Bei Lücken kannst du über die Lupe eine Liste der betroffenen Objekte pro Kategorie generieren.

[![Datenqualität](../assets/images/de/i-doit-add-ons/analysis/2-ans.png)](../assets/images/de/i-doit-add-ons/analysis/2-ans.png)

Objekttypen oder Kategorien, die das Ergebnis verfälschen, kannst du ausblenden. Das Ergebnis wird dann neu berechnet.

So speicherst du solche Anpassungen als Profil:

1. Klicke auf **Speichern**.
2. Vergib unter **Name** einen aussagekräftigen Titel.
3. Lege unter **Benutzerspezifisch** fest, ob nur du oder alle Benutzer das Profil nutzen dürfen.

Gespeicherte Profile erscheinen im linken Navigationsbaum unterhalb von **Datenqualität**.

[![Profil zur Datenqualität erstellen](../assets/images/de/i-doit-add-ons/analysis/3-ans.png)](../assets/images/de/i-doit-add-ons/analysis/3-ans.png)

## Objektkatalog

Unter **Extras → Analyse → Objektkatalog** listest du alle Objekte auf, die zu einem Service gehören.

1. Wähle unter **Objektauswahl** ein Objekt vom Typ **Service** aus.
2. Grenze die Analyse optional über den **Servicefilter** ein.
3. Wähle aus [globalen und spezifischen Kategorien](../grundlagen/struktur-it-dokumentation.md) die gewünschten [Attribute](../grundlagen/struktur-it-dokumentation.md) -- ähnlich wie im [Report Manager](../auswertungen/report-manager.md).
4. Klicke auf **Objektdaten laden**, um das tabellarische Ergebnis zu erzeugen.

[![Objektkatalog](../assets/images/de/i-doit-add-ons/analysis/4-ans.png)](../assets/images/de/i-doit-add-ons/analysis/4-ans.png)

## Servicekosten

Unter **Extras → Analyse → Servicekosten** berechnest du die Kosten einer Dienstleistung auf Basis deiner IT-Dokumentation.

1. Wähle unter **Objektauswahl** ein Objekt vom Typ **Service** aus.
2. Grenze optional über den **Servicefilter** ein.
3. Klicke auf **Servicekosten berechnen**.

Die **Kosten Zusammenfassung** zeigt folgende Werte:

| Kategorie | Beschreibung |
| --- | --- |
| **Lizenzkosten** | Siehe Kategorie **Softwarezuweisung** |
| **Investitionskosten** | Siehe Kategorie **Buchhaltung** |
| **Jährliche Betriebskosten** | Siehe Kategorie **Buchhaltung** |
| **Vertragskosten** | Siehe Kategorie **Vertragszuweisung** |

Unter **Weitere Zusammenfassungen** findest du den maximalen Energiebedarf der Hardware-Objekte (Kategorie **Stromverbraucher**).

Darunter folgt ein Tortendiagramm der Kosten sowie eine detaillierte Aufschlüsselung pro Kategorie und analysiertem Objekt.

[![Servicekosten](../assets/images/de/i-doit-add-ons/analysis/5-ans.png)](../assets/images/de/i-doit-add-ons/analysis/5-ans.png)

## Kategorie Analyse

Nach der Aktivierung des Add-ons erhält jedes Objekt eine Kategorie namens **Analyse**. Über diese Kategorie gelangst du direkt zur **Ausfallsimulation** -- das jeweilige Objekt ist dabei bereits vorselektiert.

Releases
--------

| Version | Datum | Changelog |
| --- | --- | --- |
| 1.5 | 27.02.20224 | [Task] PHP 8.2 compatibility, cleaned up color usage |
| 1.4 | 07.11.2023 | [Task] Use new routes to display object and object type images / move add-on related files |
| 1.3.1 | 22.08.2023 | [Improvement] PHP 8.1 Compatibility<br>[Bug] Service assignment is not displayed in data quality<br>[Bug] It is not possible to remove categories in data-quality profiles |
| 1.3 | 05.09.2022 | [Task] PHP 8.0 Compatibility <br/> [Task] Design Compatibility |
| 1.2 | 21.02.2022 | [Improvement] Dataquality on a report basis <br/> [Improvement] Implement API methods for the data quality report <br/> [Improvement] English add-on renaming to Analysis <br/> [Bug] Result In Objectcatalog Is Incomplete And Partially Incorrect |
| 1.1.4 | 20.10.2020 | [Bug] Missing option to add object types back into the data quality profiles after they were removed <br/> [Bug] Data quality is not evaluated correctly for user-defined categories |
| 1.1.3 | 04.05.2020 | [Bug] The "Report object selection" under "Failure simulation" must change the source for the reports. <br/> [Bug] Empty object types generate an SQL error in the data quality. <br/> [Bug] When opening data quality an SQL error is output |
| 1.1.2 | 05.07.2019 | [Bug] Impact simulation aborts with PHP fatal error |
| 1.1.1 | 05.12.2018 | [Verbesserung] PHP 7.2 Kompatibilität <br/> [Verbesserung] Links im Ergebnis der Ausfallsimulation sollten in einem neuen Browser-Fenster geöffnet werden <br/> [Bug] Objektkatalog: Anzeige der Attribute fehlerhaft <br/> [Bug] Objekt "Personen" fehlende Zuordnung von Arbeitsplätzen in der Detailansicht <br/> [Bug] Kein "Objektdaten laden" möglich, wenn bei Klick auf "Objektdaten laden" kein Objekt ausgewählt war |
| 1.1 | 19.07.2018 | [Verbesserung]  Neue Visualisierung im Datenqualität-Report[Änderung] Datenqualität zeigt Objekttyp Kabel nicht an <br/> [Bug] "Objekte ohne Daten auflisten" bei benutzerdefinierten Kategorien führt zu SQL-Fehler <br/> [Bug] Fehler beim Anzeigen der detaillierten Informationen in benutzerdefinierte Kategorien <br/> [Bug] Fehlermeldung im neuen Fenster nach Klick auf Objektlink in Datenqualität |
| 1.0.5 | 31.07.2017 | [Verbesserung]  Performance der Datenqualität verbessern <br/> [Verbesserung]  Neue Option zur Berechnung der Gesamtkosten <br/> [Bug] Eigene Objekt-Icons werden in der Datenqualität nicht skaliert <br/> [Bug] Servicekosten nutzen falsche Währungszeichen <br/> [Bug] Benutzerdefinierte Icons werden falsch dargestellt. |
| 1.0.4 | 02.05.2017 | [Bug] Bei der Ausführung einer Ausfallsimulation kommt es je nach Größe der Datenbank zu einem Timeout |
| 1.0.3 | 08.03.2017 | [Änderung] Verbesserte Stabilität und Performance in der internen Auswertung des Servicebaums <br/> [Bug] Aufrufen der Servicekosten gibt Fehler aus <br/> [Bug] Benutzerdefinierte Kategorien werden nicht ausgewertet <br/> [Bug] get_currency() Fehler beim Ausführen der Reportview "Servicekosten" |
| 1.0.2 | 09.03.2015 |     |
| 1.0.1 | 23.09.2014 | [Bug] Änderung der Gewichtung einer Beziehung hat keinen Einfluss auf die "Ausfallschwere". <br/> [Bug] Kategorie "Netzverbindungen" zeigt immer eine Datenqualität von 0% an. <br/> [Bug] Kategorie "Schränke" wird immer mit einer Datenqualität von 0% angegeben. |
| 1.0 | 20.08.2014 | Initiales Release |
