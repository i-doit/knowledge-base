---
title: Flows Add-on
description: "Das Flows Add-on für i-doit ist ein leistungsstarkes Werkzeug zur Automatisierung von Prozessen innerhalb des CMDB-Systems."
icon: addons/flows
status:
lang: de
---

Das Flows Add-on für i-doit ist ein leistungsstarkes Werkzeug zur Automatisierung von Prozessen innerhalb des CMDB-Systems. Es ermöglicht dir, automatisierte Flows basierend auf Triggern und definierten Bedingungen zu erstellen.

[![Flows](../../assets/images/de/i-doit-add-ons/flows/flows-uebersicht.png)](../../assets/images/de/i-doit-add-ons/flows/flows-uebersicht.png)

Mit Flows kannst du repetitive Aufgaben und manuelle Schritte automatisieren, indem du Regeln festlegst, die durch bestimmte Ereignisse oder Zustände (z. B. eine Änderung in der CMDB) ausgelöst werden. Das Add-on hilft, Arbeitsabläufe effizienter zu gestalten, Fehler zu reduzieren und die Verwaltung komplexer IT-Umgebungen zu vereinfachen, indem es Routineprozesse ohne Benutzerinteraktion abwickelt.

!!! tip "Teste das Add-on kostenlos"
    Installiere einfach das Add-on. Das Flows Add-on kann ohne Lizenz genutzt werden. In diesem Fall stehen dir allerdings nur der Auslöser **Zeitbasiert** (Time based) und die Aktion **Befehl aufrufen** (Call command) zur Verfügung.

## Download und Installation

Dieses Add-on kann nachträglich installiert werden. Detaillierte Beschreibungen bezüglich Download, Installation, Updates usw. liefert der Artikel [i-doit Add-ons](../index.md).

* * *

## Benötigte CLI Commands

!!! success "Sofern du den Befehl für einen anderen als den ersten Mandanten ausführen willst, übergib die entsprechende Mandanten-ID."

Das Flows Add-on wird mit zwei [CLI-Befehlen](../../automatisierung-und-integration/cli/index.md) geliefert. Beide Befehle werden benötigt, damit das Add-on vollständig funktioniert. Du hast zwei Möglichkeiten, die CLI-Befehle einzurichten: per **Crontab** oder per **Systemdienst**.

### Systemdienst-Installationsskript verwenden

Im Flows Add-on Ordner unter `i-doit/src/classes/modules/synetics_flows/` findest du ein Service-Installationsskript namens **create-daemon.sh**. Dieser Dienst führt alle paar Sekunden die CLI-Befehle des Flows Add-on aus.

Lege zuerst die Ausführungsrechte für die Datei fest. Verwende dazu den folgenden Befehl im i-doit-Ordner:

```shell
sudo chmod +x src/classes/modules/synetics_flows/create-daemon.sh
```

Nun kannst du die Datei ausführen, um einen Systemdienst zu erstellen. **Dies musst du für jeden Mandanten durchführen.**

-   `-u` i-doit-Person mit Administratorrechten
-   `-p` das Passwort für die Person
-   `-i` Mandanten-ID, in der die Person verwendet wird (einsehbar per Konsolenbefehl [tenant-list](../../automatisierung-und-integration/cli/index.md))

```shell
src/classes/modules/synetics_flows/./create-daemon.sh -u admin-user -p admin-user-password -i 1
```

### Erstellen eines Crontab

Die Crontab führt die CLI-Befehle jede Minute aus. Erstelle dazu eine Crontab für den Apache-Benutzer. Beispiel für Debian:

```shell
sudo crontab -u www-data -e
```

Füge die folgenden Zeilen am Ende der Datei ein, nachdem du die i-doit-Anmeldeinformationen ersetzt hast. Gegebenenfalls musst du auch die Mandanten-ID anpassen.

```shell
* * * * * /usr/bin/php /var/www/html/console.php flows:perform ---user admin-user --password admin-user-password --tenantId 1
* * * * * /usr/bin/php /var/www/html/console.php flows:time-trigger --user admin-user --password admin-user-password --tenantId 1
```

## Rechtevergabe

Unter **Verwaltung → Berechtigungen → Flows** kannst du [Rechte für Personen und Personengruppen](../../effizientes-dokumentieren/rechteverwaltung/index.md) anpassen.

| Recht          | Beschreibung                                                                    |
| -------------- | ------------------------------------------------------------------------------- |
| **Erstellen**  | Erlaubt das Erstellen und Duplizieren; impliziert das Ansehen-Recht             |
| **Ansehen**    | Erlaubt Zugriff auf die Flows-Übersicht                                         |
| **Editieren**  | Erlaubt Editieren, Aktivieren/Deaktivieren; impliziert das Ansehen-Recht        |
| **Löschen**    | Erlaubt das Löschen von Flows; impliziert das Ansehen-Recht                     |
| **Supervisor** | Erlaubt alles                                                                   |

## Übersicht

Über die [**Aktionsleiste**](../../grundlagen/struktur-it-dokumentation.md#kategorie) kannst du Flows **erstellen**, **löschen** oder **exportieren**. In der Flows-Übersicht kannst du einen Flow über die Spalte **Aktionen** **öffnen**, **aktivieren** oder **deaktivieren**. Über den "3-Punkte"-Button (More) stehen weitere Aktionen zur Verfügung, zum Beispiel: **Bearbeiten**, **Duplizieren** oder **Zum Testmodus wechseln**.

## Flow erstellen

Um einen Flow zu erstellen, rufst du das Flows Add-on über **Add-ons → Flows** auf. Klicke anschließend auf den **Add**-Button, um einen neuen Flow anzulegen. Ein Flow benötigt einen Namen, einen Trigger und mindestens eine Aktion, um vollständig zu sein. Zum Schluss aktivierst du den Flow über den entsprechenden Button.

### Auslöser

Trigger bestimmen, wann ein Flow ausgeführt wird. Pro Flow ist nur ein Trigger möglich.

!!! success ""
    === "Zeitbasiert"
        Die Aktion wird ausgeführt, sobald Datum und Uhrzeit erreicht sind. Du kannst sie regelmäßig wiederholen lassen.
    === "Button"
        Die Aktion wird ausgeführt, sobald der Button angeklickt wird. Dieser wird in der Aktionsleiste des Objekts angezeigt, wenn die entsprechenden Bedingungen erfüllt sind. Buttons lassen sich außerdem gruppieren, um mehrere Flows mit einem Klick auszuführen. Darüber hinaus können Buttons mit Icons versehen werden.
    === "Objekt-Ereignis"
        Die Aktion wird ausgeführt, wenn ein bestimmter CMDB-Status gesetzt wird. Du kannst auch nach bestimmten Objekttypen filtern. Wird **NICHT** ausgelöst, wenn Kategoriedaten durch Importe oder API-Interaktion geändert werden.
    === "Kategorie-Ereignis"
        Die Aktion wird ausgeführt, wenn Kategorien oder Einträge bearbeitet werden. Wird **NICHT** ausgelöst, wenn Kategoriedaten durch Importe oder API-Interaktion geändert werden.

### Konditionen

Du musst keine Konditionen festlegen. Falls gewünscht, kannst du Konditionen mit **UND** sowie **ODER** verknüpfen und verschachteln.

!!! warning ""
    === "Logische Konditionen"
        Du kannst mehrere logische Konditionen hinzufügen, um Bedingungen zu verknüpfen oder zu verschachteln.
    === "Objektbasiert"
        Prüft, ob das Objekt die definierten Bedingungen erfüllt. Diese Auswahl bezieht sich auf den Endzustand des Objekts oder Attributs.
    === "Zeitbasiert"
        Prüft, ob die Ausführungszeit innerhalb der festgelegten Zeiträume liegt.
    === "Person-/Personengruppen-basiert"
        Prüft, ob die Aktion durch ausgewählte Personen oder Mitglieder von Personengruppen ausgelöst wird.

### Aktionen

Du musst mindestens eine Aktion definieren. In einigen Aktionen lässt sich [Twig](https://twig.symfony.com/doc/3.x/) als Template-Engine verwenden. Eine i-doit-Referenz für Twig-Templates findest du [hier](twig-reference.md).

!!! note ""
    === "API-Aufruf"
        Die Aktion führt einen definierten API-Aufruf aus. Der API-Aufruf benötigt eine URL, eine Methode sowie Angaben zur Autorisierung. Für diesen Aktionstyp kannst du [Twig](https://twig.symfony.com/doc/3.x/) als Template-Engine verwenden.
    === "E-Mail schicken"
        Die Aktion sendet eine E-Mail an bestimmte Empfänger. Ein Betreff ist notwendig. Für diesen Aktionstyp kannst du [Twig](https://twig.symfony.com/doc/3.x/) als Template-Engine verwenden.
    === "Objekt erstellen"
        Die Aktion erstellt ein neues Objekt. Du kannst dabei auch Attribute für Kategorien hinterlegen.
    === "Objekt aktualisieren"
        Die Aktion aktualisiert Attribute in Objekten.
    === "Objektstatus"
        Die Aktion ändert den Objektzustand, zum Beispiel von "Archiviert" zu "Gelöscht".
    === "Befehl ausführen"
        Ruft einen i-doit-Konsolenbefehl auf. Weitere Informationen findest du unter [Befehl ausführen](actions/call-command.md).

## Logs

Du kannst die Logs für alle Flows einsehen oder nur für den jeweils geöffneten Flow. In den Logs werden wichtige Informationen zu den Ausführungen gespeichert.

## CLI-Befehle und Optionen

| Befehl                                   | Interne Beschreibung                            |
| ---------------------------------------- | ----------------------------------------------- |
| [flows:perform](#flowsperform)           | Führt Ausführungen durch                        |
| [flows:time-trigger](#flowstime-trigger) | Löst die Ausführung der Zeitautomatisierung aus |

### flows:perform

Führt Ausführungen durch.

**Optionen:**

| Parameter (Kurzversion) | Parameter (Langversion)  | Beschreibung                                                                                            |
| ----------------------- | ------------------------ | ------------------------------------------------------------------------------------------------------- |
| -u                      | --user={BENUTZERNAME}    | Benutzername eines autorisierten Benutzers zur Ausführung                                               |
| -p                      | --password={PASSWORT}    | Passwort zur Authentifizierung des angegebenen Benutzers                                                |
| -i                      | --tenant={MANDANTID}     | Mandanten-ID des zu verwendenden Mandanten (Standard: 1)                                                |
| -c                      | --config={KONFIGURATION} | Konfigurationsdatei                                                                                     |
| -h                      | --help                   | Hilfetext zur Anzeige weiterer Informationen                                                            |
| -q                      | --quiet                  | Quiet-Modus zur Deaktivierung der Ausgabe                                                               |
| -V                      | --version                | Gibt die Version der i-doit Konsole aus                                                                 |
|                         | --ansi<br>--no-ansi      | Erzwingt (oder deaktiviert mit --no-ansi) ANSI-Ausgabe                                                  |
| -n                      | --no-interaction         | Deaktiviert alle Interaktionsfragen der i-doit Konsole                                                  |
| -v / -vv / -vvv         | --verbose                | Erhöht die Ausführlichkeit der Ausgabe (1 = normale Ausgabe, 2 = detaillierte Ausgabe, 3 = Debug-Level) |

**Anwendungsbeispiel**

```shell
sudo -u www-data php console.php flows:perform --user admin-user --password admin-user-password --tenantId 1
```

### flows:time-trigger

Löst die Ausführung der Zeitautomatisierung aus.

**Optionen:**

| Parameter (Kurzversion) | Parameter (Langversion)  | Beschreibung                                                                                            |
| ----------------------- | ------------------------ | ------------------------------------------------------------------------------------------------------- |
| -u                      | --user={BENUTZERNAME}    | Benutzername eines autorisierten Benutzers zur Ausführung                                               |
| -p                      | --password={PASSWORT}    | Passwort zur Authentifizierung des angegebenen Benutzers                                                |
| -i                      | --tenant={MANDANTID}     | Mandanten-ID des zu verwendenden Mandanten (Standard: 1)                                                |
| -c                      | --config={KONFIGURATION} | Konfigurationsdatei                                                                                     |
| -h                      | --help                   | Hilfetext zur Anzeige weiterer Informationen                                                            |
| -q                      | --quiet                  | Quiet-Modus zur Deaktivierung der Ausgabe                                                               |
| -V                      | --version                | Gibt die Version der i-doit Konsole aus                                                                 |
|                         | --ansi<br>--no-ansi      | Erzwingt (oder deaktiviert mit --no-ansi) ANSI-Ausgabe                                                  |
| -n                      | --no-interaction         | Deaktiviert alle Interaktionsfragen der i-doit Konsole                                                  |
| -v / -vv / -vvv         | --verbose                | Erhöht die Ausführlichkeit der Ausgabe (1 = normale Ausgabe, 2 = detaillierte Ausgabe, 3 = Debug-Level) |

**Anwendungsbeispiel**

```shell
sudo -u www-data php console.php flows:time-trigger --user admin-user --password admin-user-password --tenantId 1
```

## Anwendungsfälle

Anwendungsfälle findest du in unserer [Demo](https://demo.i-doit.com) und kannst sie von dort exportieren.

## Releases
<!-- cSpell:disable -->
| Version | Date       | Changelog                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               |
| ------- | ---------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| 1.3.0   | 2025-01-28 | \[Improvement\] Add JDisc Connector command<br>\[Bug\] Fix AutomationsButtons is not assigned error in the GUI<br>\[Bug\] Prevent Automationsbutton is not defined error when using one-click edit mode<br>\[Bug\] Signal error when using placeholder                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  |
| 1.2.0   | 2025-09-16 | \[Improvement\] Improve creation of logical conditions<br>\[Improvement\] Action: Rank Objects<br>\[Improvement\] Create an option to define the visibility of Trigger Buttons on category level<br>\[Improvement\] Add option to add icons to Trigger Buttons<br>\[Improvement\] Group Trigger Buttons to trigger multiple Flows with one click<br>\[Bug\] Flows does not work with MySQL<br>\[Bug\] Specific category Net doesn't validate passed data correctly (from Flows)<br>\[Bug\] Time trigger is not scheduled<br>\[Bug\] More space for AND and OR object based condition selection when using german language                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               |
| 1.1.0   | 2025-04-24 | \[Improvement\] Upgrade now from Flows Console Command<br>\[Improvement\] Flows Lite: Command Alternative for extend-contracts<br>\[Improvement\] Flows Lite: Command Alternative for import-jdisc<br>\[Improvement\] Flows Lite: Command Alternative for import-jdiscdiscovery<br>\[Improvement\] Flows Lite: Command Alternative for ldap-sync<br>\[Improvement\] Flows Lite: Command Alternative for ldap-syncdn<br>\[Improvement\] Flows Lite: Command Alternative for notifications-send<br>\[Improvement\] Flows Lite: Command Alternative for search-index<br>\[Improvement\] Flows Lite: Command Alternative for system-objectrelations<br>\[Improvement\] Flows Lite: Command Alternative for sync-dynamic-groups<br>\[Improvement\] Flows Lite: Command Alternative for import-csv<br>\[Improvement\] Flows Lite: Command Alternative for import-xml<br>\[Improvement\] Flows Lite: Command Alternative for report-export<br>\[Improvement\] Flows Lite: Command Alternative for import-hinventory<br>\[Task\] Make sure the correct Action and Trigger are shown if no valid license is installed<br>\[Task\] Allow user to use Flows in Lite variant if the add-on is not licensed<br>\[Task\] Implement validation for dynamic option types<br>\[Task\] Adjust option description view<br>\[Bug\] Sort commands in select command on Create/Edit command action<br>\[Bug\] Unable to generate url with route cmdb.object-type.icon<br>\[Bug\] Object browser icon should not overlap the field input<br>\[Bug\] Unable to select assigned licenses for operating system category at flow action<br>\[Bug\] Specific category Net doesnt validate passed data correctly<br>\[Bug\] Correct text of object event trigger<br> |
| 1.0.1   | 2025-02-24 | \[Task\] Make symfony 6.4 compatible<br>\[Task\] Integrate validation of the CMDB criteria<br>\[Task\] Open "last execution" details in new tab<br>\[Task\] Allow access to object type information in placeholder<br>\[Improvement\] Export Flows to file<br>\[Improvement\] Allow usage of detailed information of assets<br>\[Improvement\] Import Flows from file<br>\[Bug\] Trigger is not performed when using a category event for a list category<br>\[Bug\] Attribute condition should not be available for change in action "update object"<br>\[Bug\] Not selected attribute value is displayed in the overview of a flow<br>\[Bug\] Creation date and Date of change are not available in object based conditions<br>\[Bug\] SQL error in object when an object based condition is configured for a location matches a title<br>\[Bug\] Selected custom attributes set as a trigger do not trigger the flow<br>\[Bug\] Selection of the object ID as a variable not possible<br>\[Bug\] Search popup is hard to read                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        |
| 1.0     | 2024-10-10 | Initiales Release                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       |
<!-- cSpell:enable -->
