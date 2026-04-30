---
title: Flows Add-on (Einführung)
description: "Mit dem Flows Add-on automatisierst du Prozesse in i-doit."
icon: addons/flows
status:
lang: de
---

Mit dem Flows Add-on automatisierst du Prozesse in i-doit. Du legst Regeln fest, die durch bestimmte Ereignisse oder Zustände ausgelöst werden -- etwa eine Änderung in der CMDB. So automatisierst du repetitive Aufgaben, reduzierst Fehler und vereinfachst die Verwaltung komplexer IT-Umgebungen.

## Download und Installation

Dieses Add-on kann nachträglich installiert werden. Details zu Download, Installation und Updates findest du im Artikel [i-doit Add-ons](../index.md).

* * *

## Benötigte CLI Commands

!!! success "Sofern der Befehl für einen anderen als den ersten Mandanten ausgeführt werden soll, ist die entsprechende [Mandanten ID](../automatisierung-und-integration/cli/index.md) zu übergeben."

Das Flows Add-on benötigt zwei [CLI-Befehle](../automatisierung-und-integration/cli/index.md), damit es vollständig funktioniert. Du hast zwei Möglichkeiten, diese einzurichten:

- **Crontab** -- Führe die Befehle regelmäßig per Cron aus.
- **Systemdienst** -- Nutze das mitgelieferte Script `create-daemon.sh` unter `i-doit/src/classes/modules/synetics_flows/`.

## Automatisierung der CLI Commands

### Systemdienst erstellen via Skript

Das Script erstellt einen Systemdienst, der die CLI-Befehle alle paar Sekunden ausführt. Setze zuerst die Ausführungsrechte:

```shell
sudo chmod +x src/classes/modules/synetics_flows/create-daemon.sh
```

Führe das Script dann für jeden Mandanten einzeln aus:

-   `-u` i-doit Person mit Administrator rechten
-   `-p` das Passwort für die Person
-   `-i` Mandanten ID in dem die Person verwendet wird, kann über Konsolenbefehl eingesehen werden [tenant-list](../automatisierung-und-integration/cli/index.md)

```shell
src/classes/modules/synetics_flows/./create-daemon.sh -u admin-user -p admin-user-password -i 1
```

### Erstellen eines Crontab

Alternativ richtest du einen Crontab ein, der die CLI-Befehle jede Minute ausführt. Beispiel für Debian:

```shell
sudo crontab -u www-data -e
```

Fuege die folgenden Zeilen am Ende der Datei ein und ersetze die Anmeldeinformationen sowie ggf. die Mandanten-ID:

```shell
* * * * * /usr/bin/php /var/www/html/console.php flows:perform ---user admin-user --password admin-user-password --tenantId 1
* * * * * /usr/bin/php /var/www/html/console.php flows:time-trigger --user admin-user --password admin-user-password --tenantId 1
```

## Rechtevergabe

Unter **Verwaltung → Berechtigungen → Flows** können [Rechte für Personen und Personengruppen](../effizientes-dokumentieren/rechteverwaltung/index.md) angepasst werden.

| Recht          | Beschreibung                                                                |
| -------------- | --------------------------------------------------------------------------- |
| **Erstellen**  | Erlaubt das erstellen, duplizieren und impliziert das Ansehen Recht         |
| **Ansehen**    | Erlaubt Zugriff auf die Flows Overview                                      |
| **Editieren**  | Erlaubt editieren, aktivieren/deaktivieren und impliziert das Ansehen Recht |
| **Löschen**    | Erlaubt das löschen von Flows und impliziert das Ansehen Recht              |
| **Supervisor** | Erlaubt alles                                                               |

## Übersicht

Über die [**Aktionsleiste**](../grundlagen/struktur-it-dokumentation.md#kategorie) erstellst, löschst oder exportierst du Flows. In der Übersicht öffnest, aktivierst oder deaktivierst du Flows über die Spalte **Aktionen**. Der **Mehr**-Button (drei Punkte) bietet zusätzlich: **Bearbeiten**, **Duplizieren** und **Zum Test-Modus wechseln**.

## Flow erstellen

So erstellst du einen Flow:

1. Öffne **Add-ons → Flows**.
2. Klicke auf **Add**, um einen neuen Flow anzulegen.
3. Definiere einen **Namen**, einen **Trigger** und mindestens eine **Aktion**.
4. **Aktiviere** den Flow über den entsprechenden Button.

### Auslöser Typ

Trigger bestimmen wann ein Flow ausgeführt wird. Es ist nur ein Trigger pro Flow möglich.

!!! success ""
    === "Zeitbasiert"
        Die Aktion wird ausgeführt, sobald Datum und Uhrzeit erreicht sind. du kann regelmäßig wiederholt werden.
    === "Button"
        Die Aktion wird ausgeführt, sobald der Button angeklickt wird. Der Button wird in der Aktionsleiste des Objektes angezeigt, wenn die Bedingungen erfüllt sind.
    === "Objekt Ereignis"
        Die Aktion wird ausgeführt, wenn ein bestimmter CMDB-Status gesetzt wird. Es lässt sich auch nach bestimmten Objekttypen filtern. Wird **NICHT** ausgelöst, wenn Kategoriedaten durch Importe oder API-Interaktion geändert werden.
    === "Kategorie Ereignis"
        Die Aktion wird ausgeführt, wenn Kategorien oder Einträge bearbeitet werden. Wird **NICHT** ausgelöst, wenn Kategoriedaten durch Importe oder API-Interaktion geändert werden.

### Konditionstypen

Konditionen sind optional. Du kannst sie mit **UND** sowie **ODER** verknüpfen und verschachteln.

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

Die Logs zeigen Ausführungsinformationen -- entweder für alle Flows oder für den aktuell geöffneten Flow.

## i-doit console utility commands and options

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

Fertige Anwendungsfälle findest du in unserer [Demo](https://demo.i-doit.com) -- du kannst sie von dort exportieren.

## Releases
<!-- cSpell:disable -->
| Version | Datum      | Changelog                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             |
| ------- | ---------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| 1.2     | 09.09.2025 | [Improvement] Improve creation of logical conditions<br>[Improvement] Action: Rank Objects<br>[Improvement] Create an option to define the visibility of Trigger Buttons on category level<br>[Improvement] Add option to add icons to Trigger Buttons<br>[Improvement] Group Trigger Buttons to trigger multiple Flows with one click<br>[Bug] Flows does not work with MySQL<br>[Bug] Specific category Net doesn't validate passed data correctly (from Flows)<br>[Bug] Time trigger is not scheduled<br>[Bug] More space for AND and OR object based condition selection when using german language                                                                                                                                                                                                                                                                                                                                               |
| 1.0.1   | 24.02.2025 | [Task] Make symfony 6.4 compatible[Task]<br><br>[Task]Open "last execution" details in new tab<br>[Task]Allow access to object type information in placeholder<br>[Improvement] Export Flows to file<br>[Improvement] Allow usage of detailed information of assets<br>[Improvement] Import Flows from file<br>[Bug] Trigger is not performed when using a category event for a list category<br>[Bug] Attribute condition should not be available for change in action "update object"<br>[Bug] Not selected attribute value is displayed in the overview of a flow<br>[Bug]Creation date and Date of change are not available in object based conditions<br>[Bug] SQL error in object when an object based condition is configured for a location matches a title<br>[Bug] Selected custom attributes set as a trigger do not trigger the flow<br>[Bug] Selection of the object ID as a variable not possible<br>[Bug] Search popup is hard to read |
| 1.0     | 10.10.2024 | Initiales Release                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     |
