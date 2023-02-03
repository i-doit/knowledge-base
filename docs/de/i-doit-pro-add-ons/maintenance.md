Mit dem [Add-on](/display/de/i-doit+pro+Add-ons) `**Wartungsintervalle**` können Wartungstermine geplant, koordiniert und gesteuert werden. Geplante Wartungen werden an beliebige [Objekte](/display/de/Struktur+der+IT-Dokumentation) geknüpft. Um die Termine nicht zu verpassen, werden automatisch Benachrichtigung per E-Mail gesendet.

Ein Praxisbeispiel finden Sie in unserem **[Blog](https://www.i-doit.com/blog/status-und-wartungsplanung-mit-i-doit/)**

**Inhaltsverzeichnis**

*   1[Konfiguration](#Maintenance-Konfiguration)
*   2[Rechtevergabe](#Maintenance-Rechtevergabe)
*   3[Wartung planen](#Maintenance-Wartungplanen)
*   4[Anstehende Wartungen](#Maintenance-AnstehendeWartungen)
*   5[Abgeschlossene Wartungen](#Maintenance-AbgeschlosseneWartungen)
*   6[Planungsansicht](#Maintenance-Planungsansicht)
*   7[Bericht erstellen](#Maintenance-Berichterstellen)
*   8[Wartungsübersicht im Objekt](#Maintenance-WartungsübersichtimObjekt)
*   9[Wartungen auf dem Dashboard](#Maintenance-WartungenaufdemDashboard)
*   10[E-Mail-Vorlagen anlegen](#Maintenance-E-Mail-Vorlagenanlegen)
*   11[E-Mails automatisch versenden](#Maintenance-E-Mailsautomatischversenden)
*   12[Releases](#Maintenance-Releases)

Download und Installation

Dieses Add-on kann nachträglich installiert werden. Detaillierte Beschreibungen bezüglich Download, Installation, Updates usw. liefert der Artikel "[i-doit pro Add-ons](/display/de/i-doit+pro+Add-ons)".

Konfiguration
-------------

Eine gesonderte Konfiguration ist nicht vorgesehen.

Rechtevergabe
-------------

Unter `**Verwaltung → Rechtesystem → Rechtevergabe → Wartung**` können [Rechte für Personen und Personengruppen](/display/de/Rechteverwaltung) angepasst werden.

| Bedingung | Beschreibung |
| --- | --- |
| `**Anstehende Wartungen**` | Ermöglicht das Handhaben von amstehenden Wartungen |
| `**Alle Wartungen**` | Ermöglicht das Handhaben aller Wartungen |
| `**Abgeschlossene Wartungen**` | Ermöglicht das Handhaben von archivierten Wartungen |
| `**E-Mail Vorlagen**` | Ermöglicht das Handhaben von E-Mail-Vorlagen |
| `**Bericht (Export)**` | Ermöglicht den Export der Wartungen |
| `**E-Mails senden**` | Ermöglicht das Erstellen eines Berichts |

Wartung planen
--------------

Wartungen können unter **`Extras → Wartung → Alle Wartungen`** angelegt und bearbeitet werden.

![](/download/attachments/61014042/image2016-10-11%2016%3A42%3A6.png?version=1&modificationDate=1476197801602&api=v2)

Die Aktionsleiste hält diese Funktionen bereit:

| Button | Aktion |
| --- | --- |
| `**Neu**` | Neue Wartung erstellen |
| `**Editieren**` | Selektierte Wartung bearbeiten |
| `**Löschen**` | Selektierte Wartungen unwiderruflich löschen |
| `**Abschließen**` | Selektierte Wartungen als erfolgreich beendet markieren |
| `**E-Mails abschicken**` | Betroffene Personen per E-Mail über die Wartungen informieren |

  

![](/download/attachments/61014042/image2020-1-13_9-51-22.png?version=1&modificationDate=1578905481767&api=v2)

Legt man eine neue Wartung an, stehen folgende Optionen zur Auswahl:

| Option | Beschreibung |
| --- | --- |
| `**Wartung abgeschlossen**` | Wurde diese Wartung bereits als abgeschlossen markiert? |
| `**E-Mail abgeschickt**` | Wurde bereits eine E-Mail an die betroffenen Personen versendet? |
| `**Objekte**` | Liste von der Wartung betroffenen Objekte |
| `**Wartungstyp**` | Wartungen können hierüber kategorisiert werden. |
| `**Wartungstermin**` | Zeitraum der geplanten Wartung. |
| `**Wiederkehrende Wartung**` | Konfiguration von wiederkehrenden Wartungen. Täglich, Wöchentlich, Monatlich oder Jährlich. |
| `**Beschreibung**` | Weitere Details |
| `**Empfänger**` | Personen, denen die Wartung zugeordnet ist; diese erhalten eine E-Mail, wenn ihnen eine entsprechende E-Mail-Adresse zugeordnet ist (Kategorie Personen → Stammdaten). Bei Personengruppen als Empfänger werden ihre Mitglieder benachrichtigt. |
| `**Zugewiesene Rollen**` | Alternativ oder parallel zu den Empfängern können die zugewiesenen Kontakte anhand ihrer Rollen (Kategorie Kontaktzuweisung) benachrichtigt werden. |
| `**E-Mail Vorlage**` | Welcher Text soll per E-Mail versendet werden (siehe unten)? |

![](/download/attachments/61014042/image2020-1-13_9-55-56.png?version=1&modificationDate=1578905755590&api=v2)

Anstehende Wartungen
--------------------

Hier können für Wartungen E-Mails versendet, Wartungen abgeschlossen oder erstellt/editiert werden.

![](/download/attachments/61014042/image2020-1-13_10-58-4.png?version=1&modificationDate=1578909483419&api=v2)

Abgeschlossene Wartungen
------------------------

Wird eine Wartung als abgeschlossen markiert, so taucht diese nicht mehr unter `**Anstehenende Wartungen**` auf (siehe oben). Stattdessen wird sie unter `**Extras → Wartung → Abgeschlossenen Wartungen**` aufgeführt.

![](/download/attachments/61014042/image2020-1-13_10-17-6.png?version=1&modificationDate=1578907025895&api=v2)

Planungsansicht
---------------

Eine ausführliche Übersicht aller Objekte, für die eine Wartung geplant oder bereits durchgeführt worden ist, befindet sich unter `**Extras → Wartung → Übersicht**`. Zur Filterung kann der Zeitraum definiert werden (Optionen `**Von**` und `**Bis**`).

![](/download/attachments/61014042/image2020-1-13_10-21-55.png?version=1&modificationDate=1578907314988&api=v2)

Bericht erstellen
-----------------

Aus den bisher geplanten und durchgeführten Wartungen lässt sich ein Bericht erstellen, der als PDF-Datei heruntergeladen werden kann. Diese Funktion befindet sich unter `**Extras → Wartung → Wartung Jahresbericht (Export)**`. Alternativ ist diese Funktion unter `**Extras → Report Manager → Views → Wartung Jahresbericht (Export)**` zu erreichen. Hierbei stehen folgende Optionen zur Auswahl:

| Option | Beschreibung |
| --- | --- |
| `**Überschrift**` | Überschrift des Berichts |
| `**Wartungstyp**` | Einschränkung auf einen bestimmten Typ |
| `**Von**` | Anfangsdatum |
| `**Bis**` | Enddatum |
| `**Logo für PDF**` | Zusätzliches Bild, das in jede Seite integriert wird; das Bild muss vorher als [Datei-Objekt](/pages/viewpage.action?pageId=59408503) in i-doit vorhanden sein. |

Über den Button `**PDF Export & Download**` wird die PDF-Datei generiert und zum Herunterladen angeboten.

![Wartungs-Bericht erstellen](/download/attachments/61014042/de_wartung_report.png?version=1&modificationDate=1490617387558&api=v2&effects=drop-shadow "Wartungs-Bericht erstellen")

Wartungsübersicht im Objekt
---------------------------

Wenn sich ein Objekt befindet, wird dies innerhalb des Objekts symbolisch angezeigt. Auf jeder Seite eines Objekts, sprich in der Übersichtsseite oder innerhalb von Kategorien erscheint der Hinweis, das Objekt befinde sich `**In Wartung**`.  
Es ist möglich die Kategorie **`Wartungsübersicht`** dem Objekttyp über die [Objekttyp Konfiguration](/display/de/Zuordnung+von+Kategorien+zu+Objekttypen) hinzuzufügen, somit lassen sich die Wartungen auch direkt im Objekt anzeigen.

![](/download/attachments/61014042/Wartung.png?version=2&modificationDate=1603877234396&api=v2&effects=drop-shadow)

Wartungen auf dem Dashboard
---------------------------

Auf dem [Dashboard](/display/de/Dashboard+und+Widgets) lassen sich geplante und abgeschlossene Wartungen im Kalender-Widget anzeigen. Diese werden hervorgehoben.

![Kalender-Widget](/download/attachments/61014042/de_wartung_kalender.png?version=1&modificationDate=1490617385596&api=v2&effects=drop-shadow "Kalender-Widget")

E-Mail-Vorlagen anlegen
-----------------------

Für jede geplante Wartung kann eine E-Mail generiert werden, um die betroffenen Personen zu benachrichtigen. Diese werden entweder als Empfänger oder über ihre zugewiesene Rolle angegeben. Welcher Text in der E-Mail verschickt wird, wird unter `**Extras → Wartung → E-Mail Vorlagen**` definiert. Hier sind beliebig viele Vorlagen möglich, die den einzelnen geplanten Wartungen zugeordnet werden (siehe oben).

![](/download/attachments/61014042/image2020-1-13_10-59-13.png?version=1&modificationDate=1578909552325&api=v2)

Über den Button `**Neu**` kann man eine neue Vorlage anlegen, über `**Editieren**` eine bestehende bearbeiten. Über den Button `**Löschen**` können Vorlagen unwiderruflich gelöscht werden.

Das Formular zum Anlegen/Bearbeiten sieht folgende Optionen vor:

| Option | Beschreibung |
| --- | --- |
| `**Titel**` | Betreff der E-Mail |
| `**Inhalt**` | Text der E-Mail |

Sowohl der `**Titel**` als auch der `**Inhalt**` können mit Platzhaltern bestückt werden, die vor dem Versand ersetzt werden. Die Liste der möglichen Platzhalter sind ebenfalls auf der Seite zu finden.

![](/download/attachments/61014042/image2020-1-13_11-1-31.png?version=1&modificationDate=1578909690686&api=v2)

E-Mails automatisch versenden
-----------------------------

Der eigentliche Versand von E-Mails geschieht im Hintergrund über den [Console](/display/de/Console), dem CLI Tool von i-doit. Dazu wird der Command `**maintenance**` verwendet. Es ist zu empfehlen, einen Cronjob einzurichten, um automatisch E-Mails zu versenden. Beispiel für den Aufruf:

[?](#)

`sudo` `-u www-data php console.php --username admin --password admin maintenance`

Das manuelle Versenden von E-Mails (Button `**E-Mails abschicken**` unter `**Extras → Wartung → Alle Wartungen**`) kann somit automatisiert werden.

  

Releases
--------

| Version | Datum | Changelog |
| --- | --- | --- |
| 1.2.1 | 24.01.2023 | \[Bug\] Error when sending multiple mails |
| 1.2 | 05.09.2022 | \[Task\] PHP 8.0 Compatibility  <br>\[Task\] Design Compatibility  <br>\[Bug\]  HTML code in browser message |
| 1.1.4 | 18.01.2021 | \[Improvement\] Compatibility with i-doit 1.16 |
| 1.1.3 | 20.10.2020 | \[Bug\] Maintenance without an object can be completed despite the error message  <br>\[Bug\] Keeping the filters in add-on "Maintenance"  <br>\[Bug\] Maintenance report shows the wrong period  <br>\[Bug\] Placeholder model>manufacturer is swapped with model>title  <br>\[Bug\] Email notification notifies archived contacts |
| 1.1.2 | 31.07.2019 | ```<br>[Bug] Column 'Person (Role)' is empty when exporting[Bug] Maintenance report: periods underneath each other to save space[Bug] Export of corrects duplicates objects<br>```<br><br>```<br>[Bug] Double mailing possible for recurring maintenance<br>```<br><br>```<br>[Bug] Maintenance can not be completed<br>``` |
| 1.1.1 | 05.12.2018 | ```<br>[Bug] Export does not report assigned contacts in the report<br>```<br><br>```<br>[Bug] Object browser for recipients shows no results<br>``` |
| 1.1 | 16.04.2018 | ```<br>[Verbesserung]  Mehrfachauswahl von Typen in der Report-View<br>```<br><br>```<br>[Verbesserung]  Definition von Uhrzeiten für Beginn und Ende der Wartung<br>```<br><br>```<br>[Verbesserung]  Wiederkehrende Wartungen<br>```<br><br>```<br>[Verbesserung]  Maintenance Handler umleiten auf Command und Command mit Logik aus Handler erstellen<br>``` |
| 1.0.3 | 18.12.2017 | Initiales Release |