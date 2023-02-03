Ein Praxisbeispiel finden Sie auf unserem [Blog](https://www.i-doit.com/blog/ci-relationen-analysieren-mit-dem-i-doit-pro-add-on-analysis/)

**Inhaltsverzeichnis**

*   1[Download und Installation](#Analysis-DownloadundInstallation)
*   2[Konfiguration](#Analysis-Konfiguration)
*   3[Rechtevergabe](#Analysis-Rechtevergabe)
*   4[Ausfallsimulation](#Analysis-Ausfallsimulation)
*   5[Ausfälle live](#Analysis-Ausfällelive)
*   6[Datenqualität](#Analysis-Datenqualität)
*   7[Objektkatalog](#Analysis-Objektkatalog)
*   8[Servicekosten](#Analysis-Servicekosten)
*   9[Kategorie Analyse](#Analysis-KategorieAnalyse)
*   10[Releases](#Analysis-Releases)

  

Das [Add-on](/display/de/i-doit+pro+Add-ons) `**Analyse**` ermöglicht im Schwerpunkt zwei Anwendungen: Zum Einen untersucht es die Daten- und Dokumentationsqualität und liefert eine interaktive Ergebnisansicht mit dem ermittelten Status. Zum Anderen dient es der Simulation von Ausfällen. So können “Was passiert wenn”-Szenarien durchgespielt und in ihren Auswirkungen auf die Infrastruktur analysiert werden. Bei kombinierter Nutzung mit der Schnittstelle zur Monitoring-Lösung [Checkmk](/display/de/Checkmk) können auch Live-Ausfälle entsprechend ihrer Auswirkung direkt untersucht werden.

Download und Installation
-------------------------

Dieses Add-on kann nachträglich installiert werden. Detaillierte Beschreibungen bezüglich Download, Installation, Updates usw. liefert der Artikel "[i-doit pro Add-ons](/display/de/i-doit+pro+Add-ons)".

Konfiguration
-------------

Eine gesonderte Konfiguration ist nicht vorgesehen.

Rechtevergabe
-------------

Unter `**Verwaltung → Rechtesystem → Rechtevergabe → Analyse**` können [Rechte für Personen und Personengruppen](/display/de/Rechteverwaltung) angepasst werden.

| Bedingung | Beschreibung |
| --- | --- |
| `**Analysen**` | Analysen durchführen |
| `**Datenqualität-Profile verwalten**` | Profile für die `**Datenqualität**` erstellen, bearbeiten und/oder unwiderruflich löschen |

Ausfallsimulation
-----------------

Möchte man herausfinden, welche Auswirkungen ein Ausfall eines bestimmten Objekts auf dokumentierte Services hat, hilft die passende Simulation unter `**Extras → Analyse → Ausfallsimulation**` weiter. Über den Tab `**Manuelle Objektauswahl**` kann man mehrere Optionen angeben:

| Option | Beschreibung |
| --- | --- |
| `**Objektauswahl**` | Auswahl von einem oder mehreren Objekten, die ausgefallen sind (oder sein sollen) |
| `**Servicefilter**` | Eingrenzung der Analyse auf eine bestimmte Tiefe, bestimmte Objekttypen, -Beziehungen usw.; die Konfiguration befindet sich unter `**Extras → Services → Servicefilter**`. |
| `**Ansicht**` | Servicebaum vereinfacht darstellen |
| `**Anzeigefilter**` | Nachträgliche Filterung |

Nach Klick auf den Button `**Simulation starten**` wird unterhalb der Optionen das Ergebnis präsentiert: Erst folgt eine Auflistung der betroffenen Services, wobei auch in der Hierarchie übergeordnete Services aufgelistet sein können. Dies hängt vom gewählten `**Servicefilter**` ab. Pro Service wird eine `**Ausfallschwere**` angegeben und je nach Schweregrad von grün (leicht) bis rot (schwer) dargestellt. Hierbei wird die Gewichtung von [Objekt-Beziehungen](/display/de/Objekt-Beziehungen) ausgewertet. Folgt hinter dem numerischen Feld ein `**C**`, weißt dies darauf hin, dass das ausgefallene Objekt Teil eines Clusters ist.

Unter `**Baumansicht**` wird ein Servicebaum aufgebaut, um den Ausfall auf diese Art zu visualisieren.

![Ausfallsimulation](/download/attachments/61014658/de_analyse_ausfallsimulation_manuell.png?version=1&modificationDate=1490628483689&api=v2&effects=drop-shadow "Ausfallsimulation")

Über den Tab `**Report Objektauswahl**` hat man zusätzlich die Möglichkeit, basierend auf einem [Report](/display/de/Report+Manager) Objekte auszuwählen, die von einem Ausfall betroffen sind.

Ausfälle live
-------------

Eine Variante der oben beschriebenen Ausfallsimulation befindet sich unter `**Extras → Analyse → Ausfälle live**`. i-doit greift hierbei auf die Schnittstelle zu einem konfigurierten [Network Monitoring](/display/de/Network+Monitoring) (beispielsweise [Checkmk](/display/de/Checkmk)) zurück. Aus zu analysierenden Soll-Daten werden Ist-Daten: Fällt tatsächlich ein Host aus, kann nun simuliert werden, welche Auswirkungen dieser Ausfall auf die dokumentierten Services hat.

Datenqualität
-------------

Über den Punkt `**Extras → Analyse → Datenqualität**` kann gemessen werden, inwiefern die IT-Dokumentation ausgefüllt ist. Hier liegt der Anspruch, dass [zu jedem sichtbaren Objekttypen jede zugeordnete Kategorie](/display/de/Zuordnung+von+Kategorien+zu+Objekttypen) eines jeden Objekts ausgefüllt ist. Dies definiert die Marke 100 Prozent.

Beispiel: Es existieren 21 Objekte vom Typ `**Client**`. Diesem Objekttypen sind 20 Kategorien zugeordnet. Um 100 Prozent zu erreichen, müssten für alle 21 Objekte alle Kategorien ausgefüllt sein. Besteht eine Lücke, verringert sich die prozentuale Angabe.

Zu jedem Objekttypen können weitere Details über den Button Detaillierte Informationen darstellen eingeblendet werden. Wenn Lücken bestehen, kann über die Lupe zu jeder Kategorie eine Liste von betroffenen Objekten generiert werden.

![Datenqualität](/download/attachments/61014658/de_analyse_datenqualitaet.png?version=1&modificationDate=1490626928602&api=v2&effects=drop-shadow "Datenqualität")

Sollten Objekttypen und/oder Kategorien das Ergebnis verfälschen, kann man sie jeweils ausblenden. Daraufhin wird das Ergebnis neu berechnet. Solche Anpassungen kann in Profilen gespeichert werden, um sie später wieder aufzurufen. Dazu klickt man auf den Button `**Speichern**`. Anschließend vergibt man unter `**Name**` einen aussagekräftigen Titel. Unter `**Benutzerspezifisch**` gibt man an, ob nur der jeweilige Benutzer das Profil aufrufen darf oder ob es für alle Benutzer freigegeben ist. Bereits gespeicherte Profile erscheinen im linken Navigationsbaum unterhalb von `**Datenqualität**`.

![Profil zur Datenqualität erstellen](/download/attachments/61014658/de_analyse_datenqualitaet_profil.png?version=1&modificationDate=1490626931833&api=v2&effects=drop-shadow "Profil zur Datenqualität erstellen")

Objektkatalog
-------------

Um sich auflisten zu lassen, welche Objekte zu einem Service gehören, dient der Punkt unter `**Extras → Analyse → Objektkatalog**`. Über `**Objektauswahl**` wählt man ein Objekt vom Typ `**Service**` aus. Danach grenzt man die Analyse optional über den `**Servicefilter**` ein. Ähnlich wie im [Report Manager](/display/de/Report+Manager) kann man die Anzeige der Objekte variieren, indem man aus [globalen und spezifischen Kategorien](/display/de/Struktur+der+IT-Dokumentation) die passenden [Attribute](/display/de/Struktur+der+IT-Dokumentation) wählt. Ein Klick auf `**Objektdaten laden**` generiert das tabellarische Ergebnis.  
![Objektkatalog](/download/attachments/61014658/de_analyse_objektkatalog.png?version=1&modificationDate=1490628484354&api=v2&effects=drop-shadow "Objektkatalog")

Servicekosten
-------------

Was kostet die Erbringung einer Dienstleistung? Diese Frage beantwortet der Punkt unter `**Extras → Analyse → Servicekosten**` auf Basis der IT-Dokumentation. Zuerst wählt man unter `**Objektauswahl**` ein Objekt vom Typ `**Service**` aus. Danach grenzt man die Analyse optional über den `**Servicefilter**` ein. Durch Klick auf den Button `**Servicekosten berechnen**` werden die Daten analysiert und aufbereitet. Das Ergebnis wird über den Punkt `**Kosten Zusammenfassung**` komprimiert dargestellt:

| Kategorie | Beschreibung |
| --- | --- |
| `**Lizenzkosten**` | Siehe Kategorie `**Softwarezuweisung**` |
| `**Investitionskosten**` | Siehe Kategorie `**Buchhaltung**` |
| `**Jährliche Betriebskosten**` | Siehe Kategorie `**Buchhaltung**` |
| `**Vertragskosten**` | Siehe Kategorie `**Vertragszuweisung**` |

Unter `**Weitere Zusammenfassungen**` wird der maximale Energiebedarf von Hardware-Objekten zusammengefasst (siehe Kategorie `**Stromverbraucher**`).

Nach einem Tortendiagramm der oben genannten Kosten folgt eine detaillierte Aufschlüsselung, welche Daten pro `**Kategorie**` und analysiertes Objekt ausgewertet wurden.  
![Servicekosten](/download/attachments/61014658/de_analyse_servicekosten.png?version=1&modificationDate=1490628485059&api=v2&effects=drop-shadow "Servicekosten")

Kategorie Analyse
-----------------

Jedem Objekt ist nach der Aktivierung des `**Analyse**`\-Add-ons eine Kategorie mit demselben Namen `**Analyse**` zugeordnet. Über diese Kategorie gelangt man direkt zur `**Ausfallsimulation**`, wobei unter `**Objektauswahl**` das jeweilige Objekt bereits vorselektiert.

  

  

Releases
--------

| Version | Datum | Changelog |
| --- | --- | --- |
| 1.3 | 05.09.2022 | \[Task\] PHP 8.0 Compatibility  <br>\[Task\] Design Compatibility |
| 1.2 | 21.02.2022 | \[Improvement\] Dataquality on a report basis  <br>\[Improvement\] Implement API methods for the data quality report  <br>\[Improvement\] English add-on renaming to Analysis  <br>\[Bug\]         Result In Objectcatalog Is Incomplete And Partially Incorrect |
| 1.1.4 | 20.10.2020 | \[Bug\] Missing option to add object types back into the data quality profiles after they were removed  <br>\[Bug\] Data quality is not evaluated correctly for user-defined categories |
| 1.1.3 | 04.05.2020 | \[Bug\] The "Report object selection" under "Failure simulation" must change the source for the reports.  <br>\[Bug\] Empty object types generate an SQL error in the data quality.  <br>\[Bug\] When opening data quality an SQL error is output |
| 1.1.2 | 05.07.2019 | ```<br>[Bug] Impact simulation aborts with PHP fatal error<br>``` |
| 1.1.1 | 05.12.2018 | ```<br>[Verbesserung] PHP 7.2 Kompatibilität[Verbesserung] Links im Ergebnis der Ausfallsimulation sollten in einem neuen Browser-Fenster geöffnet werden[Bug] Objektkatalog: Anzeige der Attribute fehlerhaft[Bug] Objekt "Personen" fehlende Zuordnung von Arbeitsplätzen in der Detailansicht[Bug] Kein "Objektdaten laden" möglich, wenn bei Klick auf "Objektdaten laden" kein Objekt ausgewählt war<br>``` |
| 1.1 | 19.07.2018 | ```<br>[Verbesserung]  Neue Visualisierung im Datenqualität-Report<br>```<br><br>```<br>[Änderung]      Datenqualität zeigt Objekttyp Kabel nicht an<br>```<br><br>```<br>[Bug]           "Objekte ohne Daten auflisten" bei benutzerdefinierten Kategorien führt zu SQL-Fehler<br>```<br><br>```<br>[Bug]           Fehler beim Anzeigen der detaillierten Informationen in benutzerdefinierte Kategorien<br>```<br><br>```<br>[Bug]           Fehlermeldung im neuen Fenster nach Klick auf Objektlink in Datenqualität<br>``` |
| 1.0.5 | 31.07.2017 | ```<br>[Verbesserung]  Performance der Datenqualität verbessern<br>```<br><br>```<br>[Verbesserung]  Neue Option zur Berechnung der Gesamtkosten<br>```<br><br>```<br>[Bug]           Eigene Objekt-Icons werden in der Datenqualität nicht skaliert<br>```<br><br>```<br>[Bug]           Servicekosten nutzen falsche Währungszeichen<br>```<br><br>```<br>[Bug]           Benutzerdefinierte Icons werden falsch dargestellt.<br>``` |
| 1.0.4 | 02.05.2017 | ```<br>[Bug]           Bei der Ausführung einer Ausfallsimulation kommt es je nach Größe der Datenbank zu einem Timeout<br>``` |
| 1.0.3 | 08.03.2017 | ```<br>[Änderung]      Verbesserte Stabilität und Performance in der internen Auswertung des Servicebaums<br>```<br><br>```<br>[Bug]           Aufrufen der Servicekosten gibt Fehler aus<br>```<br><br>```<br>[Bug]           Benutzerdefinierte Kategorien werden nicht ausgewertet<br>```<br><br>```<br>[Bug]           get_currency() Fehler beim Ausführen der Reportview "Servicekosten"<br>``` |
| 1.0.2 | 09.03.2015 |     |
| 1.0.1 | 23.09.2014 | ```<br>[Bug]           Änderung der Gewichtung einer Beziehung hat keinen Einfluss auf die "Ausfallschwere".<br>```<br><br>```<br>[Bug]           Kategorie "Netzverbindungen" zeigt immer eine Datenqualität von 0% an.<br>```<br><br>```<br>[Bug]           Kategorie "Schränke" wird immer mit einer Datenqualität von 0% angegeben.<br>``` |
| 1.0 | 20.08.2014 | Initiales Release |