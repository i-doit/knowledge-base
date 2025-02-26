---
title: Flows Add-on
description: Flows Add-on
icon: addons/flows
status:
lang: de
---

Das Flows Add-on für i-doit ist ein leistungsstarkes Werkzeug zur Automatisierung von Prozessen innerhalb des CMDB-Systems. Es ermöglicht die Erstellung von automatisierten Flows basierend auf Triggern und definierten Bedingungen. Mit Flows können Benutzer repetitive Aufgaben und manuelle Schritte automatisieren, indem sie Regeln festlegen, die durch bestimmte Ereignisse oder Zustände (z. B. eine Änderung in der CMDB) ausgelöst werden. Das Add-on hilft, Arbeitsabläufe effizienter zu gestalten, Fehler zu reduzieren und die Verwaltung komplexer IT-Umgebungen zu vereinfachen, indem es Routineprozesse ohne Benutzerinteraktion abwickelt.

## Download und Installation

Dieses Add-on kann nachträglich installiert werden. Detaillierte Beschreibungen bezüglich Download, Installation, Updates usw. liefert der Artikel [i-doit Add-ons](../index.md).

* * *

## Benötigte CLI Commands

!!! success "Sofern der Befehl für einen anderen als den ersten Mandanten ausgeführt werden soll, ist die entsprechende [Mandanten ID](../../automatisierung-und-integration/cli/console/optionen-und-parameter-der-console.md#tenant-list) zu übergeben."

Das Flows Add-on wird mit zwei CLI-Befehlen geliefert. Beide Befehle werden benötigt, damit das Flows-Add-on vollständig funktioniert. Es gibt zwei Möglichkeiten, die CLI-Befehle einzurichten. Die Befehle können z.B. über einen **Crontab** ausgeführt werden. Wir haben auch ein Service-Installationsskript mit dem Namen **create-daemon.sh** erstellt, das sich im Flows Add-on Ordner unter `i-doit/src/classes/modules/synetics_flows/` befindet.

### Systemdienst-Installationsskript verwenden

Das Flows Add-on wird mit zwei [CLI-Befehlen](../../automatisierung-und-integration/cli/index.md) geliefert. Beide Befehle werden benötigt, damit das Flows-Add-on vollständig funktioniert. Es gibt zwei Möglichkeiten, die CLI-Befehle einzurichten. Die Befehle können z.B. über einen **Crontab** ausgeführt werden. Wir haben auch ein Service-Installationsskript mit dem Namen **create-daemon.sh** erstellt, das sich im Flows Add-on Ordner unter `i-doit/src/classes/modules/synetics_flows/` befindet.

Dieser Dienst führt alle paar Sekunden die CLI-Befehle des Flows Add-on aus. Zuerst müssen wir die Ausführungsrechte für die Datei festlegen. Verwenden Sie den Befehl im Ordner i-doit:

```shell
sudo chmod +x src/classes/modules/synetics_flows/create-daemon.sh
```

Nun kann die Datei ausgeführt werden, um einen Systemdienst zu erstellen. **Dies muss für jeden Mandanten durchgeführt werden**

-   `-u` i-doit Person mit Administrator rechten
-   `-p` das Passwort für die Person
-   `-i` Mandanten ID in dem die Person verwendet wird, kann über Konsolenbefehl eingesehen werden [tenant-list](../../automatisierung-und-integration/cli/console/optionen-und-parameter-der-console.md#tenant-list)

```shell
src/classes/modules/synetics_flows/./create-daemon.sh -u admin-user -p admin-user-password -i 1
```

### Erstellen eines Crontab

Die Crontab führt die CLI-Befehle jede Minute aus. Erstellen Sie eine Crontab für den Apache-Benutzer. Beispiel für Debian:

```shell
sudo crontab -u www-data -e
```

Fügen Sie die folgenden Zeilen am Ende der Datei ein, nachdem Sie die i-doit Anmeldeinformationen ersetzt haben. Möglicherweise müssen Sie auch die Mandanten-ID ersetzen.

```shell
* * * * * /usr/bin/php /var/www/html/i-doit/console.php flows:perform ---user admin-user --password admin-user-password --tenantId 1
* * * * * /usr/bin/php /var/www/html/i-doit/console.php flows:time-trigger --user admin-user --password admin-user-password --tenantId 1
```

## Rechtevergabe

Unter **Verwaltung → Berechtigungen → Flows** können [Rechte für Personen und Personengruppen](../../effizientes-dokumentieren/rechteverwaltung/index.md) angepasst werden.

| Recht          | Beschreibung                                                                |
| -------------- | --------------------------------------------------------------------------- |
| **Erstellen**  | Erlaubt das erstellen, duplizieren und impliziert das Ansehen Recht         |
| **Ansehen**    | Erlaubt Zugriff auf die Flows Overview                                      |
| **Editieren**  | Erlaubt editieren, aktivieren/deaktivieren und impliziert das Ansehen Recht |
| **Löschen**    | Erlaubt das löschen von Flows und impliziert das Ansehen Recht              |
| **Supervisor** | Erlaubt alles                                                               |

## Übersicht

Über die [**Aktionsleiste**](../../grundlagen/struktur-it-dokumentation.md#kategorie) können Flows **erstellt**, **gelöscht** oder **exportiert** werden. Sofern ein Flow erstellt wurde kann dieser in der Flows Übersicht, über die **Aktionen** Spalte **geöffnet**, **aktiviert** oder **deaktiviert** werden. Außerdem sind über den "3 Punkte" (More) Button weitere Aktionen möglich wie zum Beispiel: **Bearbeiten**, **Duplizieren** oder **Zum Test Modus wechseln**.

## Flow erstellen

Um einen Flow zu erstellen wird das Flows Add-on aufgerufen, dies erfolgt über **Add-ons → Flows**. Anschließend wird über den **Add** Button ein neuer Flow erstellt. Ein Flow muss einen Namen, einen Trigger und eine oder mehrere Actions definiert haben um vollständig zu sein. Zu guter Letzt muss der Flow über den Button noch aktiviert werden.

### Auslöser Typ

Trigger bestimmen wann ein Flow ausgeführt wird. Es ist nur ein Trigger pro Flow möglich.

!!! success ""
    === "Zeitbasiert"
        Die Aktion wird ausgeführt, sobald Datum und Uhrzeit erreicht sind. Sie kann regelmäßig wiederholt werden.
    === "Button"
        Die Aktion wird ausgeführt, sobald der Button angeklickt wird. Der Button wird in der Aktionsleiste des Objektes angezeigt, wenn die Bedingungen erfüllt sind.
    === "Objekt Ereignis"
        Die Aktion wird ausgeführt, wenn ein bestimmter CMDB-Status gesetzt wird. Es lässt sich auch nach bestimmten Objekttypen filtern. Wird **NICHT** ausgelöst, wenn Kategoriedaten durch Importe oder API-Interaktion geändert werden.
    === "Kategorie Ereignis"
        Die Aktion wird ausgeführt, wenn Kategorien oder Einträge bearbeitet werden. Wird **NICHT** ausgelöst, wenn Kategoriedaten durch Importe oder API-Interaktion geändert werden.

### Konditionstypen

Es muss keine Konditionen gewählt werden. Außerdem können conditions mit **UND** sowie **ODER** verknüpft und verschachtelt werden.

!!! warning ""
    === "Logische Konditionen"
        Es können mehrere Logische Konditionen hinzugefügt werden um Bedingungen zu verknüpfen oder zu verschachteln.
    === "Objektbasiert"
        Prüft, ob das Objekt die definierten Bedingungen erfüllt. Diese Auswahl bezieht sich auf den Endzustand des Objekts oder Attributs.
    === "Zeitbasiert"
        Prüft, ob die Ausführungszeit innerhalb der festgelegten Zeiträume liegt.
    === "Person / Personengruppen basiert"
        Prüft, ob die Bewegung durch ausgewählte Personen oder Mitglieder von Personengruppen ausgelöst wird.

### Aktionen

Es muss mindestens eine Aktion definiert werden.

!!! note ""
    === "API-Aufruf"
        Die Aktion führt einen definierten API-Aufruf aus. Der API-Aufruf benötigt eine URL, eine Methode sowie angaben zur Autorisierung. Für diesen Action type kann [Twig](https://twig.symfony.com/doc/3.x/) als template Engine verwendet werden.
    === "E-Mail schicken"
        Die Aktion sendet eine E-Mail an bestimmte Empfänger. Ein Subject ist notwendig. Für diesen Action type kann [Twig](https://twig.symfony.com/doc/3.x/) als template Engine verwendet werden.
    === "Objekt erstellen"
        Die Aktion erstellt ein neues Objekt. Es ist möglich Attribute für Kategorien zu hinterlegen.
    === "Objekt aktualisieren"
        Die Aktion aktualisiert Attribute in Objekten.

## Logs

Die Logs sind für alle Flows ersichtlich oder für den jeweils geöffneten Flow. In den Logs werden wichtige Informationen zu den Ausführungen gespeichert.

## CLI-Befehle und Optionen

| Befehl                                   | Interne Beschreibung                            |
| ---------------------------------------- | ----------------------------------------------- |
| [flows:perform](#flowsperform)           | Führt Ausführungen durch                        |
| [flows:time-trigger](#flowstime-trigger) | Löst die Ausführung der Zeitautomatisierung aus |

### flows:perform

Führt Ausführungen durch.

**Optionen:**

| Parameter (Kurzversion) | Parameter (Langversion) | Beschreibung                                                                                            |
| ----------------------- | ----------------------- | ------------------------------------------------------------------------------------------------------- |
| -u                      | --user=BENUTZERNAME     | Benutzername eines autorisierten Benutzers zur Ausführung                                               |
| -p                      | --password=PASSWORT     | Passwort zur Authentifizierung des angegebenen Benutzers                                                |
| -i                      | --tenant=MANDANTID      | Mandanten-ID des zu verwendenden Mandanten (Standard: 1)                                                |
| -c                      | --config=KONFIGURATION  | Konfigurationsdatei                                                                                     |
| -h                      | --help                  | Hilfetext zur Anzeige weiterer Informationen                                                            |
| -q                      | --quiet                 | Quiet-Modus zur Deaktivierung der Ausgabe                                                               |
| -V                      | --version               | Gibt die Version der i-doit Konsole aus                                                                 |
|                         | --ansi<br>--no-ansi     | Erzwingt (oder deaktiviert mit --no-ansi) ANSI-Ausgabe                                                  |
| -n                      | --no-interaction        | Deaktiviert alle Interaktionsfragen der i-doit Konsole                                                  |
| -v / -vv / -vvv         | --verbose               | Erhöht die Ausführlichkeit der Ausgabe (1 = normale Ausgabe, 2 = detaillierte Ausgabe, 3 = Debug-Level) |

**Anwendungsbeispiel**

```shell
sudo -u www-data php console.php flows:perform --user admin-user --password admin-user-password --tenantId 1
```

### flows:time-trigger

Löst die Ausführung der Zeitautomatisierung aus.

**Optionen:**

| Parameter (Kurzversion) | Parameter (Langversion) | Beschreibung                                                                                            |
| ----------------------- | ----------------------- | ------------------------------------------------------------------------------------------------------- |
| -u                      | --user=BENUTZERNAME     | Benutzername eines autorisierten Benutzers zur Ausführung                                               |
| -p                      | --password=PASSWORT     | Passwort zur Authentifizierung des angegebenen Benutzers                                                |
| -i                      | --tenant=MANDANTID      | Mandanten-ID des zu verwendenden Mandanten (Standard: 1)                                                |
| -c                      | --config=KONFIGURATION  | Konfigurationsdatei                                                                                     |
| -h                      | --help                  | Hilfetext zur Anzeige weiterer Informationen                                                            |
| -q                      | --quiet                 | Quiet-Modus zur Deaktivierung der Ausgabe                                                               |
| -V                      | --version               | Gibt die Version der i-doit Konsole aus                                                                 |
|                         | --ansi<br>--no-ansi     | Erzwingt (oder deaktiviert mit --no-ansi) ANSI-Ausgabe                                                  |
| -n                      | --no-interaction        | Deaktiviert alle Interaktionsfragen der i-doit Konsole                                                  |
| -v / -vv / -vvv         | --verbose               | Erhöht die Ausführlichkeit der Ausgabe (1 = normale Ausgabe, 2 = detaillierte Ausgabe, 3 = Debug-Level) |

**Anwendungsbeispiel**

```shell
sudo -u www-data php console.php flows:time-trigger --user admin-user --password admin-user-password --tenantId 1
```

## CLI console commands and options

| Befehl                                   | Beschreibung                         |
| ---------------------------------------- | ------------------------------------ |
| [flows:perform](#flowsperform)           | Perform executions                   |
| [flows:time-trigger](#flowstime-trigger) | Trigger execution of time automation |

!!! info "These commands are only available if the Documents add-on is installed"

### flows:perform

Perform executions

**Optionen:**

| Parameter (short version) | Parameter (long version) | Description                                                                                      |
| ------------------------- | ------------------------ | ------------------------------------------------------------------------------------------------ |
| -u                        | --user=[USERNAME]        | Username eines Benutzers, der zur Ausführung berechtigt ist                                      |
| -p                        | --password=[PASSWORD]    | Passwort zur Authentifizierung des zuvor angegebenen Benutzers                                   |
| -i                        | --tenant=[TENANT-ID]     | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1)                              |
| -c                        | --config=[CONFIG]        | Angabe des Pfades zur Konfigurationsdatei                                                        |
| -h                        | --help                   | Hilfenachricht zur Einblendung weiterer Informationen                                            |
| -q                        | --quiet                  | Quiet-Mode um die Rückgabe zu deaktivieren                                                       |
| -V                        | --version                | Ausgabe der Version der i-doit Console                                                           |
|                           | --ansi<br>--no-ansi      | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren)                                             |
| -n                        | --no-interaction         | Deaktiviert sämtliche Interaktionsfragen der i-doit Console                                      |
| -v / -vv / -vvv           | --verbose                | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel**

```shell
sudo -u www-data php console.php flows:perform --user admin-user --password admin-user-password --tenantId 1
```

### flows:time-trigger

Trigger execution of time automation

**Optionen:**

| Parameter (short version) | Parameter (long version) | Description                                                                                      |
| ------------------------- | ------------------------ | ------------------------------------------------------------------------------------------------ |
| -u                        | --user=[USERNAME]        | Username eines Benutzers, der zur Ausführung berechtigt ist                                      |
| -p                        | --password=[PASSWORD]    | Passwort zur Authentifizierung des zuvor angegebenen Benutzers                                   |
| -i                        | --tenant=[TENANT-ID]     | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1)                              |
| -c                        | --config=[CONFIG]        | Angabe des Pfades zur Konfigurationsdatei                                                        |
| -h                        | --help                   | Hilfenachricht zur Einblendung weiterer Informationen                                            |
| -q                        | --quiet                  | Quiet-Mode um die Rückgabe zu deaktivieren                                                       |
| -V                        | --version                | Ausgabe der Version der i-doit Console                                                           |
|                           | --ansi<br>--no-ansi      | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren)                                             |
| -n                        | --no-interaction         | Disables all interaction questions of the i-doit Console                                         |
| -v / -vv / -vvv           | --verbose                | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel**

```shell
sudo -u www-data php console.php flows:time-trigger --user admin-user --password admin-user-password --tenantId 1
```

## Anwendungsfälle

Anwendungsfälle sind in unserer [Demo](https://demo.i-doit.com) zu finden und können von dort Exportiert werden.

## Releases
<!-- cSpell:disable -->
| Version | Datum      | Changelog                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             |
| ------- | ---------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| 1.0.1   | 24.02.2025 | [Task] Make symfony 6.4 compatible[Task]<br><br>[Task]Open "last execution" details in new tab<br>[Task]Allow access to object type information in placeholder<br>[Improvement] Export Flows to file<br>[Improvement] Allow usage of detailed information of assets<br>[Improvement] Import Flows from file<br>[Bug] Trigger is not performed when using a category event for a list category<br>[Bug] Attribute condition should not be available for change in action "update object"<br>[Bug] Not selected attribute value is displayed in the overview of a flow<br>[Bug]Creation date and Date of change are not available in object based conditions<br>[Bug] SQL error in object when an object based condition is configured for a location matches a title<br>[Bug] Selected custom attributes set as a trigger do not trigger the flow<br>[Bug] Selection of the object ID as a variable not possible<br>[Bug] Search popup is hard to read |
| 1.0     | 10.10.2024 | Initiales Release                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     |
