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

Dieses Add-on kann nachträglich installiert werden. Detaillierte Beschreibungen bezüglich Download, Installation, Updates usw. liefert der Artikel "[i-doit pro Add-ons](index.md)".

## Rechtevergabe

Unter **Verwaltung → Berechtigungen → Flows** können [Rechte für Personen und Personengruppen](../effizientes-dokumentieren/rechteverwaltung/index.md) angepasst werden.

| Recht          | Beschreibung                                                                |
| -------------- | --------------------------------------------------------------------------- |
| **Ansehen**    | Erlaubt Zugriff auf die Flows Overview                                      |
| **Editieren**  | Erlaubt editieren, aktivieren/deaktivieren und impliziert das Ansehen Recht |
| **Erstellen**  | Erlaubt das erstellen, duplizieren und impliziert das Ansehen Recht.        |
| **Löschen**    | Erlaubt das löschen von Flows und impliziert das Ansehen Recht              |
| **Supervisor** | Erlaubt alles                                                               |

## Overview

Über die Aktionsleiste können Flows erstellt oder gelöscht werden. Sofern ein Flow erstellt wurde kann dieser auch über die **Actions** Spalte geöffnet, aktiviert oder deaktiviert werden. Außerdem sind über den "3 Punkte" (More) Button weitere Aktionen möglich wie zum Beispiel, editieren, duplizieren,

## Flow erstellen

Um einen Flow zu erstellen wird das Flows Add-on aufgerufen, dies erfolgt über **Add-ons → Flows**. Anschließend wird über den **Add** Button ein neuer Flow erstellt. Ein Flow muss einen Namen, einen Trigger und eine oder mehrere Actions definiert haben um vollständig zu sein. Zu guter Letzt muss der Flow über den Button noch aktiviert werden.

### Trigger types

Trigger bestimmen wann ein FLow ausgeführt wird. Es ist nur ein Trigger pro Flow möglich.

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

=== "Call API"
    Die Aktion führt einen definierten API Call aus. Der API Call benötigt eine URL, eine Methode sowie Authorization details.

=== "Send E-Mail"
    Die Aktion sendet eine E-Mail an bestimmte Empfänger. Ein Subject ist notwendig.

=== "Create object"
    Die Aktion erstellt ein neues Objekt. Es ist möglich Attribute für Kategorien zu hinterlegen.

=== "Update object"
    Die Aktion aktualisiert Attribute bei Objekten.

## Logs

Die Logs sind für alle Flows ersichtlich oder für den jeweils geöffneten Flow. In den Logs werden wichtige Informationen zu den Ausführungen gespeichert.

## CLI Commands

!!! success "Sofern der Befehl für einen anderen als den ersten Mandanten ausgeführt werden soll, ist die entsprechende  [Mandanten ID](../automatisierung-und-integration/cli/console/optionen-und-parameter-der-console.md#tenant-list) zu übergeben."

!!! info "Der Apache HTTP Server Benutzername ist je nach Betriebssystem unterschiedlich."

Die Konfiguration zeitbasierter Flows setzt voraus, dass deren Auslösung durch regelmäßige Ausführung entsprechender [CLI-Befehle](../automatisierung-und-integration/cli/console/index.md) gewährleistet ist. Dies kann durch einen Cronjob sichergestellt werden. Voraussetzung hierfür ist die Bereitstellung eines gültigen zeitbasierten Triggers. Die Registrierung der Ausführungen erfolgt durch Aufruf des Konsolenbefehls für zeitbasierte Auslöser.

```sh
sudo -u www-data php console.php flows:time-trigger --user admin --password admin --tenantId 1
```

Nach der Ausführung dieses Befehls wird die Ausführung registriert. Um die Ausführung durchzuführen, muss der `flow:perform` Befehl verwendet werden, der alle registrierten Ausführungen in der Warteschlange ausführen wird:

```sh
sudo -u www-data php console.php flows:perform --user admin --password admin --tenantId 1
```

## Anwendungsfälle

Wir führen hier einige Beispiele zur Anwendung von Flows auf.

### Deaktiviere den Login für Personen die archiviert wurden

Der Flow soll bei ausgeführt werden, wenn eine Person archiviert wird und soll bei dieser Person das Feld `Deaktiviere Login` auf `Ja` setzen. Alle Mitglieder der Personengruppe Admin, sollen ausgenommen sein.

### Trigger erstellen

Als erstes wird ein Trigger vom Typ [Object event](#trigger-types) erstellt. Damit die Aktion nur ausgelöst wird, wenn ein Personen Objekt archiviert wird, wird zusätzlich Personen unter **Only objects of the selected object type** ausgewählt.

[![Trigger](../assets/images/de/i-doit-pro-add-ons/flows/uc-1-trigger.png)](../assets/images/de/i-doit-pro-add-ons/flows/uc-1-trigger.png)

### Conditions

Der verwendete Conditions Typ ist [Object based](#condition-types). Nun wird als Bedingung `And` `Personenmitgliedschaften` `not in` `Admin` ausgewählt, damit Mitglieder der Personengruppe Admin nicht ausgeschlossen werden können.

[![Conditions](../assets/images/de/i-doit-pro-add-ons/flows/uc-1-condition.png)](../assets/images/de/i-doit-pro-add-ons/flows/uc-1-condition.png)

### Action

Als den Action Typ wird Update object genutzt. Dieser soll dann, über `Set following attributes`, in der Kategorie `Login (Personen)` das Attribut `Username` auf `Ja` setzen. Dazu kann entweder die Suche verwendet oder in der `Categories` Liste gesucht werden.

[![Action_Attribute_selection](../assets/images/de/i-doit-pro-add-ons/flows/uc-1-action-attribute-selection.png)](../assets/images/de/i-doit-pro-add-ons/flows/uc-1-action-attribute-selection.png)

Nun wird der Wert gewählt, der für das Attribut gesetzt werden soll.

[![Action](../assets/images/de/i-doit-pro-add-ons/flows/uc-1-action.png)](../assets/images/de/i-doit-pro-add-ons/flows/uc-1-action.png)

## Releases

| Version | Datum | Changelog |
| ------- | ----- | --------- |

*[Trigger]: Ein definierter Auslöser.
*[Conditions]: Eine oder mehrere Bedingungen die erfüllt sein müssen.
*[Condition]: Eine Bedingungen die erfüllt sein müssen.
*[Action]: Eine oder mehrere Aktionen die ausgelöst werden.
*[Time_based]: Ein Zeitpunkt/Datum oder innerhalb eines bestimmten Zeitrahmens.
*[Button]: Eine Schaltfläche, die eine Aktion auslöst wenn eine diese gedrückt wird.
*[Object_event]: Eine Aktion die für ein Objekt ausgelöst wird.
*[Category_event]: Die Aktion die für eine Kategorie ausgelöst wird.
*[Aktionsleiste]: in der Aktionsleiste werden Buttons dargestellt die aktionen ausführen, wie z.B. Speichern oder Editieren.
*[AND]: Alle mit AND verknüpften Bedingungen müssen zutreffen um eine Aktion auszulösen.
*[OR]: Eine der beiden Bedingungen muss zutreffen um die Aktion auszulösen.
*[]:
