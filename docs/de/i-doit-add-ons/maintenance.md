---
title: Maintenance Add-on
description: Maintenance Add-on
icon: addons/maintenance
status:
lang: de
---

Mit dem [Add-on](./index.md) **Wartungsintervalle** können Wartungstermine geplant, koordiniert und gesteuert werden. Geplante Wartungen werden an beliebige [Objekte](../grundlagen/struktur-it-dokumentation.md) geknüpft. Um die Termine nicht zu verpassen, werden automatisch Benachrichtigung per E-Mail gesendet.

!!! info "Ein Praxisbeispiel finden Sie in unserem **[Blog](https://www.i-doit.com/blog/status-und-wartungsplanung-mit-i-doit/)**"

Download und Installation

Dieses Add-on kann nachträglich installiert werden. Detaillierte Beschreibungen bezüglich Download, Installation, Updates usw. liefert der Artikel "[i-doit Add-ons](./index.md)".

## Konfiguration

Eine gesonderte Konfiguration ist nicht vorgesehen.

## Rechtevergabe

Unter **Verwaltung → Berechtigungen → Wartung** können [Rechte für Personen und Personengruppen](../effizientes-dokumentieren/rechteverwaltung/index.md) angepasst werden.

| Bedingung                    | Beschreibung                                        |
| ---------------------------- | --------------------------------------------------- |
| **Anstehende Wartungen**     | Ermöglicht das Handhaben von anstehenden Wartungen  |
| **Alle Wartungen**           | Ermöglicht das Handhaben aller Wartungen            |
| **Abgeschlossene Wartungen** | Ermöglicht das Handhaben von archivierten Wartungen |
| **E-Mail Vorlagen**          | Ermöglicht das Handhaben von E-Mail-Vorlagen        |
| **Bericht (Export)**         | Ermöglicht den Export der Wartungen                 |
| **E-Mails senden**           | Ermöglicht das Erstellen eines Berichts             |

## Wartung planen

Wartungen können unter **Add-ons → Wartung → Alle Wartungen** angelegt und bearbeitet werden.

[![Wartung](../assets/images/de/i-doit-add-ons/maintenance/1-main.png)](../assets/images/de/i-doit-add-ons/maintenance/1-main.png)

Die Aktionsleiste hält diese Funktionen bereit:

| Button                 | Aktion                                                        |
| ---------------------- | ------------------------------------------------------------- |
| **Neu**                | Neue Wartung erstellen                                        |
| **Editieren**          | Selektierte Wartung bearbeiten                                |
| **Löschen**            | Selektierte Wartungen unwiderruflich löschen                  |
| **Abschließen**        | Selektierte Wartungen als erfolgreich beendet markieren       |
| **E-Mails abschicken** | Betroffene Personen per E-Mail über die Wartungen informieren |

[![Wartung](../assets/images/de/i-doit-add-ons/maintenance/2-main.png)](../assets/images/de/i-doit-add-ons/maintenance/2-main.png)

Legt man eine neue Wartung an, stehen folgende Optionen zur Auswahl:

| Option                     | Beschreibung                                                                                                                                                                                                                                    |
| -------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Wartung abgeschlossen**  | Wurde diese Wartung bereits als abgeschlossen markiert?                                                                                                                                                                                         |
| **E-Mail abgeschickt**     | Wurde bereits eine E-Mail an die betroffenen Personen versendet?                                                                                                                                                                                |
| **Objekte**                | Liste von der Wartung betroffenen Objekte                                                                                                                                                                                                       |
| **Wartungstyp**            | Wartungen können hierüber kategorisiert werden.                                                                                                                                                                                                 |
| **Wartungstermin**         | Zeitraum der geplanten Wartung.                                                                                                                                                                                                                 |
| **Wiederkehrende Wartung** | Konfiguration von wiederkehrenden Wartungen. Täglich, Wöchentlich, Monatlich oder Jährlich.                                                                                                                                                     |
| **Beschreibung**           | Weitere Details                                                                                                                                                                                                                                 |
| **Empfänger**              | Personen, denen die Wartung zugeordnet ist; diese erhalten eine E-Mail, wenn ihnen eine entsprechende E-Mail-Adresse zugeordnet ist (Kategorie Personen → Stammdaten). Bei Personengruppen als Empfänger werden ihre Mitglieder benachrichtigt. |
| **Zugewiesene Rollen**     | Alternativ oder parallel zu den Empfängern können die zugewiesenen Kontakte anhand ihrer Rollen (Kategorie Kontaktzuweisung) benachrichtigt werden.                                                                                             |
| **E-Mail Vorlage**         | Welcher Text soll per E-Mail versendet werden (siehe unten)?                                                                                                                                                                                    |

[![Wartung](../assets/images/de/i-doit-add-ons/maintenance/3-main.png)](../assets/images/de/i-doit-add-ons/maintenance/3-main.png)

## Anstehende Wartungen

Hier können für Wartungen E-Mails versendet, Wartungen abgeschlossen oder erstellt/editiert werden.

[![Anstehende Wartungen](../assets/images/de/i-doit-add-ons/maintenance/4-main.png)](../assets/images/de/i-doit-add-ons/maintenance/4-main.png)

## Abgeschlossene Wartungen

Wird eine Wartung als abgeschlossen markiert, so taucht diese nicht mehr unter **Anstehende Wartungen** auf (siehe oben). Stattdessen wird sie unter **Add-ons → Wartung → Abgeschlossenen Wartungen** aufgeführt.

[![Abgeschlossene Wartungen](../assets/images/de/i-doit-add-ons/maintenance/5-main.png)](../assets/images/de/i-doit-add-ons/maintenance/5-main.png)

## Planungsansicht

Eine ausführliche Übersicht aller Objekte, für die eine Wartung geplant oder bereits durchgeführt worden ist, befindet sich unter **Add-ons → Wartung → Planungsansicht**. Zur Filterung kann der Zeitraum definiert werden (Optionen **Von** und **Bis**).

[![Planungsansicht](../assets/images/de/i-doit-add-ons/maintenance/6-main.png)](../assets/images/de/i-doit-add-ons/maintenance/6-main.png)

## Bericht erstellen

Aus den bisher geplanten und durchgeführten Wartungen lässt sich ein Bericht erstellen, der als PDF-Datei heruntergeladen werden kann. Diese Funktion befindet sich unter **Add-ons → Wartung → Bericht (Export)**. Alternativ ist diese Funktion unter **Extras → Report Manager → Views → Wartung Bericht (Export)** zu erreichen. Hierbei stehen folgende Optionen zur Auswahl:

| Option           | Beschreibung                                                                                                                                                                      |
| ---------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Überschrift**  | Überschrift des Berichts                                                                                                                                                          |
| **Wartungstyp**  | Einschränkung auf einen bestimmten Typ                                                                                                                                            |
| **Von**          | Anfangsdatum                                                                                                                                                                      |
| **Bis**          | Enddatum                                                                                                                                                                          |
| **Logo für PDF** | Zusätzliches Bild, das in jede Seite integriert wird; das Bild muss vorher als [Datei-Objekt](../anwendungsfaelle/dateien-hochladen-und-verknuepfen.md) in i-doit vorhanden sein. |

Über den Button **PDF Export & Download** wird die PDF-Datei generiert und zum Herunterladen angeboten.

[![Wartungs-Bericht erstellen](../assets/images/de/i-doit-add-ons/maintenance/7-main.png)](../assets/images/de/i-doit-add-ons/maintenance/7-main.png)

## Wartungsübersicht im Objekt

Wenn sich ein Objekt befindet, wird dies innerhalb des Objekts symbolisch angezeigt. Auf jeder Seite eines Objekts, sprich in der Übersichtsseite oder innerhalb von Kategorien erscheint der Hinweis, das Objekt befinde sich **In Wartung**.

Es ist möglich die Kategorie **Wartungsübersicht** dem Objekttyp über die [Objekttyp Konfiguration](../grundlagen/zurodnung-von-kategorien-zu-objekttypen.md) hinzuzufügen, somit lassen sich die Wartungen auch direkt im Objekt anzeigen.

[![Wartungsübersicht im Objekt](../assets/images/de/i-doit-add-ons/maintenance/8-main.png)](../assets/images/de/i-doit-add-ons/maintenance/8-main.png)

## Wartungen auf dem Dashboard

Auf dem [Dashboard](../grundlagen/dashboard-und-widgets.md) lassen sich geplante und abgeschlossene Wartungen im Kalender-Widget anzeigen. Diese werden hervorgehoben.

[![Kalender-Widget](../assets/images/de/i-doit-add-ons/maintenance/9-main.png)](../assets/images/de/i-doit-add-ons/maintenance/9-main.png)

## E-Mail-Vorlagen anlegen

Für jede geplante Wartung kann eine E-Mail generiert werden, um die betroffenen Personen zu benachrichtigen. Diese werden entweder als Empfänger oder über ihre zugewiesene Rolle angegeben. Welcher Text in der E-Mail verschickt wird, wird unter **Add-ons → Wartung → E-Mail Vorlagen** definiert. Hier sind beliebig viele Vorlagen möglich, die den einzelnen geplanten Wartungen zugeordnet werden (siehe oben).

[![E-Mail-Vorlage](../assets/images/de/i-doit-add-ons/maintenance/10-main.png)](../assets/images/de/i-doit-add-ons/maintenance/10-main.png)

Über den Button **Neu** kann man eine neue Vorlage anlegen, über **Editieren** eine bestehende bearbeiten. Über den Button **Löschen** können Vorlagen unwiderruflich gelöscht werden.

Das Formular zum Anlegen/Bearbeiten sieht folgende Optionen vor:

| Option     | Beschreibung       |
| ---------- | ------------------ |
| **Titel**  | Betreff der E-Mail |
| **Inhalt** | Text der E-Mail    |

Sowohl der **Titel** als auch der **Inhalt** können mit Platzhaltern bestückt werden, die vor dem Versand ersetzt werden. Die Liste der möglichen Platzhalter sind ebenfalls auf der Seite zu finden.

[![E-Mail-Vorlage](../assets/images/de/i-doit-add-ons/maintenance/11-main.png)](../assets/images/de/i-doit-add-ons/maintenance/11-main.png)

## E-Mails automatisch versenden

Der eigentliche Versand von E-Mails geschieht im Hintergrund über den [Console](../automatisierung-und-integration/cli/index.md), dem CLI Tool von i-doit. Dazu wird der Command **maintenance** verwendet. Es ist zu empfehlen, einen Cronjob einzurichten, um automatisch E-Mails zu versenden. Beispiel für den Aufruf:

```shell
sudo -u www-data php console.php --user admin --password admin maintenance
```

Das manuelle Versenden von E-Mails (Button **E-Mails abschicken** unter **Add-ons → Wartung → Alle Wartungen**) kann somit automatisiert werden.

## CLI Console Commands und Optionen

| Command                       | Interne Beschreibung                                                     |
| ----------------------------- | ------------------------------------------------------------------------ |
| [maintenance](#maintenance-1) | Sendet Benachrichtigungen zu geplanten Wartungen aus dem Wartungs-Add-on |

!!! info "Dieser Befehl ist erst nach Installation des Maintenance Add-ons verfügbar."

### maintenance

Verschickt E-Mails mit geplanten Wartungen gemäß den im Add-on [Wartungen](#maintenance) festgelegten Zeiträumen.

**Optionen:**

| Parameter (Kurzform) | Parameter (Langform)   | Beschreibung                                                                                     |
| -------------------- | ---------------------- | ------------------------------------------------------------------------------------------------ |
| -u                   | --user=[USERNAME]      | Username eines Benutzers, der zur Ausführung berechtigt ist                                      |
| -p                   | --password=[PASSWORD]  | Passwort zur Authentifizierung des zuvor angegebenen Benutzers                                   |
| -i                   | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1)                              |
| -h                   | --help                 | Hilfenachricht zur Einblendung weiterer Informationen                                            |
| -q                   | --quiet                | Quiet-Mode um die Rückgabe zu deaktivieren                                                       |
| -V                   | --version              | Ausgabe der Version der i-doit Console                                                           |
|                      | --ansi<br>--no-ansi    | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren)                                             |
| -n                   | --no-interaction       | Deaktiviert sämtliche Interaktionsfragen der i-doit Console                                      |
| -v / -vv / -vvv      | --verbose              | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php maintenance --user admin --password admin --tenantId 1
```

## Releases
<!-- cSpell:disable -->
| Version | Datum      | Changelog                                                                                                                                                                                                                                                                                                                           |
| ------- | ---------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| 1.7     | 09.09.2025 | [Task] PHP 8.4 compatibility<br>[Bug] SQL error when installing via console                                                                                                                                                                                                                                                         |
| 1.6     | 26.02.2025 | [Task] Make symfony 6.4 compatible<br>[Bug] Option 'Send multiple notifications for each maintenance?' automatically sets to 'Yes' after finishing an upcoming maintenance                                                                                                                                                          |
| 1.5     | 10.10.2024 | [Bug] Fix autoload issue during add-on installation                                                                                                                                                                                                                                                                                 |
| 1.4     | 09.07.2024 | **Improvement** Send an email with all the objects within the maintenance<br>**Bug** Only one role can be selected to be notified                                                                                                                                                                                                   |
| 1.3     | 07.11.2023 | **Task** Use new routes to display object and object type images / move add-on related files                                                                                                                                                                                                                                        |
| 1.2.2   | 22.08.2023 | **Improvement** PHP 8.1 Compatibility<br>**Bug** Filter in list views not working<br>**Bug** Creating a new E-Mail template does not work when the object type constant of client,server or switch or not available                                                                                                                 |
| 1.2.1   | 24.01.2023 | **Bug** Error when sending multiple mails                                                                                                                                                                                                                                                                                           |
| 1.2     | 05.09.2022 | **Task** PHP 8.0 Compatibility  <br>**Task** Design Compatibility  <br>**Bug**  HTML code in browser message                                                                                                                                                                                                                        |
| 1.1.4   | 18.01.2021 | **Improvement** Compatibility with i-doit 1.16                                                                                                                                                                                                                                                                                      |
| 1.1.3   | 20.10.2020 | **Bug** Maintenance without an object can be completed despite the error message  <br>**Bug** Keeping the filters in add-on "Maintenance"  <br>**Bug** Maintenance report shows the wrong period  <br>**Bug** Placeholder model>manufacturer is swapped with model>title  <br>**Bug** Email notification notifies archived contacts |
| 1.1.2   | 31.07.2019 | **Bug** Column 'Person (Role)' is empty when exporting**Bug** Maintenance report: periods underneath each other to save space<br>**Bug** Export of corrects duplicates objects<br>**Bug** Double mailing possible for recurring maintenance<br>**Bug** Maintenance can not be completed<br>                                         |
| 1.1.1   | 05.12.2018 | **Bug** Export does not report assigned contacts in the report<br>**Bug** Object browser for recipients shows no results<br>                                                                                                                                                                                                        |
| 1.1     | 16.04.2018 | **Verbesserung**  Mehrfachauswahl von Typen in der Report-View<br>**Verbesserung**  Definition von Uhrzeiten für Beginn und Ende der Wartung<br>**Verbesserung**  Wiederkehrende Wartungen<br>**Verbesserung**  Maintenance Handler umleiten auf Command und Command mit Logik aus Handler erstellen<br>                            |
| 1.0.3   | 18.12.2017 | Initiales Release                                                                                                                                                                                                                                                                                                                   |
