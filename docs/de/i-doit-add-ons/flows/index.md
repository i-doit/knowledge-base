---
title: Flows Add-on
description: Flows Add-on
icon: addons/flows
status: new
lang: de
---

Das Flows Add-on für i-doit ist ein leistungsstarkes Werkzeug zur Automatisierung von Prozessen innerhalb des CMDB-Systems. Es ermöglicht die Erstellung von automatisierten Flows basierend auf Triggern und definierten Bedingungen. Mit Flows können Benutzer repetitive Aufgaben und manuelle Schritte automatisieren, indem sie Regeln festlegen, die durch bestimmte Ereignisse oder Zustände (z. B. eine Änderung in der CMDB) ausgelöst werden. Das Add-on hilft, Arbeitsabläufe effizienter zu gestalten, Fehler zu reduzieren und die Verwaltung komplexer IT-Umgebungen zu vereinfachen, indem es Routineprozesse ohne Benutzerinteraktion abwickelt.

!!! note "**Add-on ist nur in englischer Sprache verfügbar**"

## Download und Installation

Dieses Add-on kann nachträglich installiert werden. Detaillierte Beschreibungen bezüglich Download, Installation, Updates usw. liefert der Artikel [i-doit Add-ons](index.md).

## Rechtevergabe

Unter **Verwaltung → Berechtigungen → Flows** können [Rechte für Personen und Personengruppen](../../effizientes-dokumentieren/rechteverwaltung/index.md) angepasst werden.

| Recht          | Beschreibung                                                                |
| -------------- | --------------------------------------------------------------------------- |
| **Erstellen**  | Erlaubt das erstellen, duplizieren und impliziert das Ansehen Recht         |
| **Ansehen**    | Erlaubt Zugriff auf die Flows Overview                                      |
| **Editieren**  | Erlaubt editieren, aktivieren/deaktivieren und impliziert das Ansehen Recht |
| **Löschen**    | Erlaubt das löschen von Flows und impliziert das Ansehen Recht              |
| **Supervisor** | Erlaubt alles                                                               |

## Overview

Über die [**Aktionsleiste**](../../grundlagen/struktur-it-dokumentation.md#kategorie) können Flows erstellt oder gelöscht werden. Sofern ein Flow erstellt wurde kann dieser auch über die **Actions** Spalte geöffnet, aktiviert oder deaktiviert werden. Außerdem sind über den "3 Punkte" (More) Button weitere Aktionen möglich wie zum Beispiel, editieren, duplizieren,

## Flow erstellen

Um einen Flow zu erstellen wird das Flows Add-on aufgerufen, dies erfolgt über **Add-ons → Flows**. Anschließend wird über den **Add** Button ein neuer Flow erstellt. Ein Flow muss einen Namen, einen Trigger und eine oder mehrere Actions definiert haben um vollständig zu sein. Zu guter Letzt muss der Flow über den Button noch aktiviert werden.

### Trigger types

Trigger bestimmen wann ein FLow ausgeführt wird. Es ist nur ein Trigger pro Flow möglich.

!!! success ""
    === "Time based"
        Die Aktion wird ausgeführt, sobald Datum und Uhrzeit erreicht sind. Sie kann regelmäßig wiederholt werden. Außerdem kann ein Enddatum oder eine maximale Anzahl gesetzt werden.

    === "Button"
        Die Aktion wird ausgeführt, sobald der Button angeklickt wird. Der Button wird in der Aktionsleiste des Objektes angezeigt, wenn die Bedingungen erfüllt sind.

    === "Object Event"
        Die Aktion wird ausgeführt, wenn ein bestimmter CMDB-Status gesetzt wird. Es lässt sich auch nach bestimmten Objekttypen filtern.

    === "Category Event"
        Die Aktion wird ausgeführt, wenn Kategorien oder Einträge bearbeitet werden. Es lässt sich auch einstellen, dass sie erst dann ausgeführt wird, wenn bestimmte Kategorien oder Attribute bearbeitet werden.

### Conditions types

Es muss keine Condition gewählt werden. Außerdem können conditions mit **AND** sowie **OR** verknüpft und verschachtelt werden.

!!! warning ""
    === "Logical conditions"
        Es können mehrere Logical conditions hinzugefügt werden um Bedingungen zu verknüpfen oder zu verschachteln.

    === "Object based"
        Die Aktion wird nur für Objekte ausgelöst, die die konfigurierte Bedingung erfüllen.

    === "Time based"
        Die Aktion wird nur zu einer bestimmten Zeit ausgelöst.

    === "User / User group based"
        Die Aktion wird nur ausgelöst wenn diese durch bestimmte User oder User groups ausgelöst wird.

### Action types

Es muss mindestens eine Action definiert werden.

!!! note ""
    === "Call API"
        Die Aktion führt einen definierten API Call aus. Der API Call benötigt eine URL, eine Methode sowie angaben zur Autorisierung.

    === "Send E-Mail"
        Die Aktion sendet eine E-Mail an bestimmte Empfänger. Ein Subject ist notwendig.

    === "Create object"
        Die Aktion erstellt ein neues Objekt. Es ist möglich Attribute für Kategorien zu hinterlegen.

    === "Update object"
        Die Aktion aktualisiert Attribute bei Objekten.

## Logs

Die Logs sind für alle Flows ersichtlich oder für den jeweils geöffneten Flow. In den Logs werden wichtige Informationen zu den Ausführungen gespeichert.

## CLI Commands

!!! success "Sofern der Befehl für einen anderen als den ersten Mandanten ausgeführt werden soll, ist die entsprechende  [Mandanten ID](../../automatisierung-und-integration/cli/console/optionen-und-parameter-der-console.md#tenant-list) zu übergeben."

Das Flows Add-on wird mit zwei CLI-Befehlen geliefert. Beide Befehle werden benötigt, damit das Flows-Add-on vollständig funktioniert. Es gibt zwei Möglichkeiten, die CLI-Befehle einzurichten. Die Befehle können z.B. über einen **Crontab** ausgeführt werden. Wir haben auch ein Service-Installationsskript mit dem Namen **create-daemon.sh** erstellt, das sich im Flows Add-on Ordner unter `i-doit/src/classes/modules/synetics_flows/` befindet.

### Systemdienst-Installationsskript verwenden

Zuerst müssen wir die Ausführungsrechte für die Datei festlegen. Verwenden Sie den Befehl im Ordner i-doit:

```shell
sudo chmod +x src/classes/modules/synetics_flows/create-daemon.sh
```

Nun kann die Datei ausgeführt werden, um einen Systemdienst zu erstellen. **Dies muss für jeden Tenant durchgeführt werden**

-   `-u` braucht einen i-doit admin-user
-   `-p` benötigt ein i-doit admin-user-passwort
-   `-i` benötigt eine Mandanten-ID, kann über Konsolenbefehl eingesehen werden [tenant-list](../../automatisierung-und-integration/cli/console/optionen-und-parameter-der-console.md#tenant-list)

```shell
src/classes/modules/synetics_flows/./create-daemon.sh -u admin-user -p admin-user-password -i 1
```

### Erstellen eines Crontabs

Erstellen Sie eine Crontab für den Apache-Benutzer. Beispiel für Debian:

```shell
sudo crontab -u www-data -e
```

Fügen Sie die folgenden Zeilen am Ende der Datei ein, nachdem Sie die i-doit Anmeldeinformationen ersetzt haben. Möglicherweise müssen Sie auch die Mandanten-ID ersetzen.

```shell
* * * * * /usr/bin/php /var/www/html/i-doit/console.php flows:perform ---user admin-user --password admin-user-password --tenantId 1
* * * * * /usr/bin/php /var/www/html/i-doit/console.php flows:time-trigger --user admin-user --password admin-user-password --tenantId 1
```

### CLI Konsolenbefehle und Optionen

| Command                                  | Interne Beschreibung                  |
| ---------------------------------------- | ------------------------------------- |
| [flows:perform](#flowsperform)           | Perform executions                    |
| [flows:time-trigger](#flowstime-trigger) | Trigger execution of time automations |

!!! info "These commands are only available if the Documents add-on is installed"

#### flows:perform

Perform executions

**Options:**

| Parameter (short version) | Parameter (long version) | Description                                                                         |
| ------------------------- | ------------------------ | ----------------------------------------------------------------------------------- |
| -u                        | --user=USERNAME          | Benutzername eines Benutzers, der berechtigt ist, die                               |
| -p                        | --password=PASSWORD      | Kennwort für die Authentifizierung des zuvor angegebenen Benutzers                  |
| -i                        | --tenant=TENANTID        | Mandanten-ID des zu verwendenden Mieters (Standard: 1)                              |
| -c                        | --config=CONFIG          | Config File                                                                         |
| -h                        | --help                   | Hilfemeldung für die Anzeige von weiteren Informationen                             |
| -q                        | --quiet                  | Quiet-Mode zur Deaktivierung der Ausgabe                                            |
| -V                        | --version                | Ausgabe der i-doit Konsolenversion                                                  |
|                           | --ansi<br>--no-ansi      | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren)                                |
| -n                        | --no-interaction         | Deaktiviert alle Interaktionsfragen der i-doit-Konsole                              |
| -v / -vv / -vvv           | --verbose                | Erhöht die Befehlsausgabe (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

```shell
sudo -u www-data php console.php flows:perform --user admin-user --password admin-user-password --tenantId 1
```

### flows:time-trigger

Trigger execution of time automations

**Options:**

| Parameter (short version) | Parameter (long version) | Description                                                                         |
| ------------------------- | ------------------------ | ----------------------------------------------------------------------------------- |
| -u                        | --user=USERNAME          | Benutzername eines Benutzers, der berechtigt ist, die                               |
| -p                        | --password=PASSWORD      | Kennwort für die Authentifizierung des zuvor angegebenen Benutzers                  |
| -i                        | --tenant=TENANTID        | Mandanten-ID des zu verwendenden Mieters (Standard: 1)                              |
| -c                        | --config=CONFIG          | Config File                                                                         |
| -h                        | --help                   | Hilfemeldung für die Anzeige von weiteren Informationen                             |
| -q                        | --quiet                  | Quiet-Mode zur Deaktivierung der Ausgabe                                            |
| -V                        | --version                | Ausgabe der i-doit Konsolenversion                                                  |
|                           | --ansi<br>--no-ansi      | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren)                                |
| -n                        | --no-interaction         | Deaktiviert alle Interaktionsfragen der i-doit-Konsole                              |
| -v / -vv / -vvv           | --verbose                | Erhöht die Befehlsausgabe (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

```shell
sudo -u www-data php console.php flows:time-trigger --user admin-user --password admin-user-password --tenantId 1
```

## Anwendungsfälle

!!! note "Folgen."

## Releases

| Version | Datum      | Changelog         |
| ------- | ---------- | ----------------- |
| 1.0     | 10.10.2024 | Initiales Release |
