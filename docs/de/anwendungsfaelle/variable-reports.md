---
title: Variable Reports
description: Variable Reports und wie man sie benutzt
icon:
status:
lang: de
---

## Einführung

Variable Reports können dafür verwendet werden, Objektspezifische Informationen dazustellen, anders als bei normales Reports, welche immer statische Ergebnisse ausgeben.
Die Objektinformationen sind durch die Variablen Reports **rückwärtig** einsehbar, z.B. kann man von Objekt A zu Objekt B schließend und von Objekt B dann auch wieder zurück auf Objekt A.

## Anwendungsfall

Nehmen wir an, in der Organisation sind Bereichsdrucker definiert. Die Räume **1.01** bis **1.07** verwenden **HQ Staff Printer 01**, die Räume **1.08** bis **1.11** den **HQ Staff Printer 02**.
Um sowohl von den Räumen als auch von den Drucker Objekten nachvollziehen zu können, welcher Drucker für welchen Raum zugewiesen ist, wird ein Variabler Report verwendet.

## Benutzerdefinierte Kategorie Bereichsdrucker

Um die Drucker den jeweiligen Räumen zuweisen zu können, erstellen wir eine benutzerdefinierte Kategorie namens **Bereichsdrucker**
Diese wird dem [Objekttyp](../grundlagen/struktur-it-dokumentation.md#objekttyp) **Drucker** zugeordnet und als [Single-Value-Kategorie](../grundlagen/struktur-it-dokumentation.md#single-value-kategorie). Das [Attribut](../grundlagen/struktur-it-dokumentation.md#attribut) **Bereichsdrucker für** wird als **Objekt-Beziehung (Mehrfachauswahl)** mit Zusatz **Freigabenzugriff** hinzugefügt.

[![benutzerdefinierte-kategorien](../assets/images/de/anwendungsfaelle/variable-reports/1-vr.png)](../assets/images/de/anwendungsfaelle/variable-reports/1-vr.png)

Danach wechselt man zum Objekt **HQ Staff Printer 01**. In der Kategorie **Bereichsdrucker** wählt man nun in die zugeordneten Räume aus.

[![objekt-browser](../assets/images/de/anwendungsfaelle/variable-reports/2-vr.png)](../assets/images/de/anwendungsfaelle/variable-reports/2-vr.png)

Das Ergebnis sieht in der Kategorie dann so aus wie im nachfolgenden Bild.

[![bereichsdrucker](../assets/images/de/anwendungsfaelle/variable-reports/3-vr.png)](../assets/images/de/anwendungsfaelle/variable-reports/3-vr.png)

Dies lässt sich auch mit dem [CMDB-Explorer](../auswertungen/cmdb-explorer/index.md) visualisieren.

[![cmdb-explorer](../assets/images/de/anwendungsfaelle/variable-reports/4-vr.png)](../assets/images/de/anwendungsfaelle/variable-reports/4-vr.png)

So weit so gut. Doch wie findet man heraus, wenn man sich den Raum **1.05** ansieht, welcher Bereichsdrucker für diesen Raum definiert ist? Dafür ist eine rückwärtige Ansicht nötig, mit der man feststellen kann, welcher Drucker in Beziehung zu diesem Raum steht. Mit den variablen Reports gibt für solche kontextabhängigen Abfragen eine Lösung.

Dazu wird ein [Report](../auswertungen/report-manager.md) und eine weitere benutzerdefinierte Kategorie erstellt. Zunächst zum Report **Zugewiesene Bereichsdrucker**. Unter **Ausgabe** einige interessante Attribute zu den Druckern ausgewählt.

Im Abfrage-Editor gibt es die Möglichkeit, bei Verknüpfungen, die Beziehungen generieren, unter **Bedingungen** einen **Feldplatzhalter** zu setzen.

Für diesen Anwendungsfall heißt das: Der Report "sucht" nach jenen Objekten, in denen in der benutzerdefinierten Kategorie **Bereichsdrucker** im Attribut **Bereichsdrucker für** die [Objekt-ID](../grundlagen/eindeutige-referenzierungen.md) des aktuell ausgewählten Objektes eingetragen ist. Doch was ist das ausgewählte Objekt? Im Kontext des Report Managers gibt es kein ausgewähltes Objekt. Dadurch wird der Report zu einem variablen Report.

[![abfrage-editor](../assets/images/de/anwendungsfaelle/variable-reports/5-vr.png)](../assets/images/de/anwendungsfaelle/variable-reports/5-vr.png)

Daher muss stets ein Objekt auswählt werden, um den Report ausfüllen zu können. In diesem Fall geschieht dies indem man zum Report eine Kategorie erstellt, die den Report innerhalb eines Objektes ausführt. Diese wird **Bereichsdrucker rückwärtig** genannt, dem Objekttyp **Raum** zugeordnet und als Single-Value-Kategorie definiert. Zudem erhält sich ein namenloses Attribut mit dem **Feldtyp Report**. Unter **Zusatz** können Sie dann den Namen des oben erstellten Reports auswählen.

[![report-1](../assets/images/de/anwendungsfaelle/variable-reports/6-vr.png)](../assets/images/de/anwendungsfaelle/variable-reports/6-vr.png)

Die Report-ID ist in der Übersicht der bereits definierten Reports enthalten.

[![report-2](../assets/images/de/anwendungsfaelle/variable-reports/7-vr.png)](../assets/images/de/anwendungsfaelle/variable-reports/7-vr.png)

In Raumobjekten steht jetzt die neue Kategorie zur Verfügung, die den Report immer für das Objekt ausführt, in dem sich der Anwender befindet. Dadurch erhält man eine rückwärtige Ansicht über die Beziehung zum Bereichsdrucker.

[![report-3](../assets/images/de/anwendungsfaelle/variable-reports/8-vr.png)](../assets/images/de/anwendungsfaelle/variable-reports/8-vr.png)
