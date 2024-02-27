# Analysis

Das [Add-on](index.md) **Analyse** ermöglicht im Schwerpunkt zwei Anwendungen: Zum Einen untersucht es die Daten- und Dokumentationsqualität und liefert eine interaktive Ergebnisansicht mit dem ermittelten Status. Zum Anderen dient es der Simulation von Ausfällen. So können "Was passiert wenn"-Szenarien durchgespielt und in ihren Auswirkungen auf die Infrastruktur analysiert werden. Bei kombinierter Nutzung mit der Schnittstelle zur Monitoring-Lösung [Checkmk](../i-doit-pro-add-ons/checkmk2/index.md) können auch Live-Ausfälle entsprechend ihrer Auswirkung direkt untersucht werden.

Download und Installation
-------------------------

Dieses Add-on kann nachträglich installiert werden. Detaillierte Beschreibungen bezüglich Download, Installation, Updates usw. liefert der Artikel "[i-doit pro Add-ons](./index.md)".

Konfiguration
-------------

Eine gesonderte Konfiguration ist nicht vorgesehen.

Rechtevergabe
-------------

Unter **Verwaltung → Rechtesystem → Rechtevergabe → Analyse** können [Rechte für Personen und Personengruppen](../effizientes-dokumentieren/rechteverwaltung/index.md) angepasst werden.

| Bedingung | Beschreibung |
| --- | --- |
| **Analysen** | Analysen durchführen |
| **Datenqualität-Profile verwalten** | Profile für die **Datenqualität** erstellen, bearbeiten und/oder unwiderruflich löschen |

Ausfallsimulation
-----------------

Möchte man herausfinden, welche Auswirkungen ein Ausfall eines bestimmten Objekts auf dokumentierte Services hat, hilft die passende Simulation unter **Extras → Analyse → Ausfallsimulation** weiter. Über den Tab **Manuelle Objektauswahl** kann man mehrere Optionen angeben:

| Option | Beschreibung |
| --- | --- |
| **Objektauswahl** | Auswahl von einem oder mehreren Objekten, die ausgefallen sind (oder sein sollen) |
| **Servicefilter** | Eingrenzung der Analyse auf eine bestimmte Tiefe, bestimmte Objekttypen, -Beziehungen usw.; die Konfiguration befindet sich unter **Extras → Services → Servicefilter**. |
| **Ansicht** | Servicebaum vereinfacht darstellen |
| **Anzeigefilter** | Nachträgliche Filterung |

Nach Klick auf den Button **Simulation starten** wird unterhalb der Optionen das Ergebnis präsentiert: Erst folgt eine Auflistung der betroffenen Services, wobei auch in der Hierarchie übergeordnete Services aufgelistet sein können. Dies hängt vom gewählten **Servicefilter** ab. Pro Service wird eine **Ausfallschwere** angegeben und je nach Schweregrad von grün (leicht) bis rot (schwer) dargestellt. Hierbei wird die Gewichtung von [Objekt-Beziehungen](../grundlagen/objekt-beziehungen.md) ausgewertet. Folgt hinter dem numerischen Feld ein **C**, weißt dies darauf hin, dass das ausgefallene Objekt Teil eines Clusters ist.

Unter **Baumansicht** wird ein Servicebaum aufgebaut, um den Ausfall auf diese Art zu visualisieren.

[![Ausfallsimulation](../assets/images/de/i-doit-pro-add-ons/analysis/1-ans.png)](../assets/images/de/i-doit-pro-add-ons/analysis/1-ans.png)

Über den Tab **Report Objektauswahl** hat man zusätzlich die Möglichkeit, basierend auf einem [Report](../auswertungen/report-manager.md) Objekte auszuwählen, die von einem Ausfall betroffen sind.

Ausfälle live
-------------

Eine Variante der oben beschriebenen Ausfallsimulation befindet sich unter **Extras → Analyse → Ausfälle live**. i-doit greift hierbei auf die Schnittstelle zu einem konfigurierten [Network Monitoring](../automatisierung-und-integration/network-monitoring/index.md) (beispielsweise [Checkmk](../i-doit-pro-add-ons/checkmk.md)) zurück. Aus zu analysierenden Soll-Daten werden Ist-Daten: Fällt tatsächlich ein Host aus, kann nun simuliert werden, welche Auswirkungen dieser Ausfall auf die dokumentierten Services hat.

Datenqualität
-------------

Über den Punkt **Extras → Analyse → Datenqualität** kann gemessen werden, inwiefern die IT-Dokumentation ausgefüllt ist. Hier liegt der Anspruch, dass [zu jedem sichtbaren Objekttypen jede zugeordnete Kategorie](../grundlagen/zurodnung-von-kategorien-zu-objekttypen.md) eines jeden Objekts ausgefüllt ist. Dies definiert die Marke 100 Prozent.

Beispiel: Es existieren 21 Objekte vom Typ **Client**. Diesem Objekttypen sind 20 Kategorien zugeordnet. Um 100 Prozent zu erreichen, müssten für alle 21 Objekte alle Kategorien ausgefüllt sein. Besteht eine Lücke, verringert sich die prozentuale Angabe.

Zu jedem Objekttypen können weitere Details über den Button Detaillierte Informationen darstellen eingeblendet werden. Wenn Lücken bestehen, kann über die Lupe zu jeder Kategorie eine Liste von betroffenen Objekten generiert werden.

[![Datenqualität](../assets/images/de/i-doit-pro-add-ons/analysis/2-ans.png)](../assets/images/de/i-doit-pro-add-ons/analysis/2-ans.png)

Sollten Objekttypen und/oder Kategorien das Ergebnis verfälschen, kann man sie jeweils ausblenden. Daraufhin wird das Ergebnis neu berechnet. Solche Anpassungen kann in Profilen gespeichert werden, um sie später wieder aufzurufen. Dazu klickt man auf den Button **Speichern**. Anschließend vergibt man unter **Name** einen aussagekräftigen Titel. Unter **Benutzerspezifisch** gibt man an, ob nur der jeweilige Benutzer das Profil aufrufen darf oder ob es für alle Benutzer freigegeben ist. Bereits gespeicherte Profile erscheinen im linken Navigationsbaum unterhalb von **Datenqualität**.

[![Profil zur Datenqualität erstellen](../assets/images/de/i-doit-pro-add-ons/analysis/3-ans.png)](../assets/images/de/i-doit-pro-add-ons/analysis/3-ans.png)

Objektkatalog
-------------

Um sich auflisten zu lassen, welche Objekte zu einem Service gehören, dient der Punkt unter **Extras → Analyse → Objektkatalog**. Über **Objektauswahl** wählt man ein Objekt vom Typ **Service** aus. Danach grenzt man die Analyse optional über den **Servicefilter** ein. Ähnlich wie im [Report Manager](../auswertungen/report-manager.md) kann man die Anzeige der Objekte variieren, indem man aus [globalen und spezifischen Kategorien](../grundlagen/struktur-it-dokumentation.md) die passenden [Attribute](../grundlagen/struktur-it-dokumentation.md) wählt. Ein Klick auf **Objektdaten laden** generiert das tabellarische Ergebnis.

[![Objektkatalog](../assets/images/de/i-doit-pro-add-ons/analysis/4-ans.png)](../assets/images/de/i-doit-pro-add-ons/analysis/4-ans.png)

Servicekosten
-------------

Was kostet die Erbringung einer Dienstleistung? Diese Frage beantwortet der Punkt unter **Extras → Analyse → Servicekosten** auf Basis der IT-Dokumentation. Zuerst wählt man unter **Objektauswahl** ein Objekt vom Typ **Service** aus. Danach grenzt man die Analyse optional über den **Servicefilter** ein. Durch Klick auf den Button **Servicekosten berechnen** werden die Daten analysiert und aufbereitet. Das Ergebnis wird über den Punkt **Kosten Zusammenfassung** komprimiert dargestellt:

| Kategorie | Beschreibung |
| --- | --- |
| **Lizenzkosten** | Siehe Kategorie **Softwarezuweisung** |
| **Investitionskosten** | Siehe Kategorie **Buchhaltung** |
| **Jährliche Betriebskosten** | Siehe Kategorie **Buchhaltung** |
| **Vertragskosten** | Siehe Kategorie **Vertragszuweisung** |

Unter **Weitere Zusammenfassungen** wird der maximale Energiebedarf von Hardware-Objekten zusammengefasst (siehe Kategorie **Stromverbraucher**).

Nach einem Tortendiagramm der oben genannten Kosten folgt eine detaillierte Aufschlüsselung, welche Daten pro **Kategorie** und analysiertes Objekt ausgewertet wurden.

[![Servicekosten](../assets/images/de/i-doit-pro-add-ons/analysis/5-ans.png)](../assets/images/de/i-doit-pro-add-ons/analysis/5-ans.png)

Kategorie Analyse
-----------------

Jedem Objekt ist nach der Aktivierung des **Analyse**\-Add-ons eine Kategorie mit demselben Namen **Analyse** zugeordnet. Über diese Kategorie gelangt man direkt zur **Ausfallsimulation**, wobei unter **Objektauswahl** das jeweilige Objekt bereits vorselektiert.

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
