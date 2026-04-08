---
title: Anwendungsfälle
description: "In diesem Bereich findest du Hinweise auf die fortgeschrittene Anwendung von _i-doit_, zum Einen um die IT-Dokumentation noch weiter zu verfeinern, zum..."
icon:
status:
lang: de
---
# Anwendungsfälle

In diesem Bereich findest du Hinweise auf die fortgeschrittene Anwendung von _i-doit_, zum Einen um die [IT-Dokumentation](../glossar.md#it-dokumentation) noch weiter zu verfeinern, zum Anderen um die Prozesse im IT Service Management besser zu unterstützen.

!!! info "Weitere Praxisbeispiele findest du auf unserem [Blog](https://www.i-doit.com/)"

Folgende Anwendungsfälle sind beschrieben:

## [Abbildung von Kundenstandorten](./abbildung-von-kundenstandorten.md)

Kunden haben oftmals mehrere Standorte, diese sollen hierarchisch dargestellt und jeweils IT-Komponenten zugeordnet werden.

## [Arbeitsplätze](./arbeitsplaetze.md)

In i-doit können IT-Arbeitsplätze dokumentiert werden. Auf diese Weise hat man jederzeit im Blick, welcher Mitarbeiter über welche IT-Komponenten verfügt und wo sie zu finden sind.

## [Automatische Vertragsverlängerung](./automatisierte-vertragsverlaengerung.md)

Der Vertrag eines Mandanten hat das letzte Kündigungsdatum überschritten und soll verlängert werden. Um den Vertrag zu verlängern, machen wir uns den Befehl `extend-contracts` zu nutze.

## [Benutzerdefinierte Übersetzungen](./benutzerdefinierte-uebersetzungen.md)

Mithilfe der benutzerdefinierten Übersetzung, kann man innerhalb einiger Mausklicks, die Bezeichnung gewünschter Felder umändern oder neue Sprachen hinzufügen.

## [Dateien hochladen und verknüpfen](./dateien-hochladen-und-verknuepfen.md)

Zu einer vollumfänglichen IT-Dokumentation gehören oftmals auch Dokumente in Form Dateien. Ob nun Betriebshandbücher, Notfallpläne, Verträge, Installationsprotokolle oder Treiber: Wichtige Dateien gehören mit [Objekten](../grundlagen/struktur-it-dokumentation.md) in i-doit verknüpft.

## [Dokumentation von Datenbanken](./dokumentation-von-datenbanken.md)

Mit der Version 1.xx von i-doit haben wir eine zusätzliche Variante mit aufgenommen die genutzt werden kann um Datenbanken innerhalb von i-doit zu dokumentieren.

## [Excel-Tabelle mit Daten aus i-doit befüllen (veraltet)](./excel-tabelle-mit-daten-aus-i-doit-befuellen.md)

Mit wenigen Zeilen Visual Basic lassen sich beliebige Inhalte aus i-doit auslesen und in Microsoft Excel darstellen. In diesem Artikel erklären wir die Vorgehensweise anhand von [Reports](../auswertungen/report-manager.md).

## [Geo-Koordinaten](./geo-koordinaten.md)

Jedes [Objekt](../grundlagen/struktur-it-dokumentation.md) in i-doit lässt sich mit geografischen Koordinaten in Form von Breiten- und Längengrad versehen.

## [i-doit - Patch Manager bridge](./i-doit-patch-manager-bridge.md)

In diesem Anwendungsfall zeigen wir, wie man aus i-doit heraus, mit einem Klick, den Patch Manager Launcher öffnet und direkt zum entsprechenden Objekt navigiert. So lässt sich ganz einfach zwischen den Tools wechseln, um beispielsweise von der i-doit Dokumentation direkt in die Patch Manager Übersicht zu gelangen.

## [IP Address Management (IPAM)](./ip-adress-management.md)

Ein wesentliches Element einer [IT-Dokumentation](../glossar.md) ist die Pflege von IP-Netzen, -Adressen und diversen Netzwerk-Komponenten. Dieses wird IP Address Management, kurz IPAM, genannt.

## [Kabel-Patches und -wege](./kabel-patches-und-wege.md)

Zu einer umfangreichen [IT-Dokumentation](../glossar.md) kommt man über kurz oder lang zur Abbildung der Verkabelung. Mit diesem Artikel geben wir einen Einstieg, wie man Hardware-[Objekte](../grundlagen/struktur-it-dokumentation.md) miteinander verkabelt.

## [Komplexe Reports](./komplexe-reports.md)

Im Report Manager lassen sich über den Abfrage-Editor bereits viele, nützliche Reports generieren. Für komplexere Fälle kann das dahinter liegende SQL bearbeitet werden. Hierbei lassen sich MySQL-/MariaDB-eigene Funktionen nutzen, um beispielsweise Zeitintervalle abzufragen.

## [Prod→Test Datenbank-Synchronisation](./prod-test-datenbank-synchronisation.md)

Produktive i-doit Datenbank regelmäßig auf ein Testsystem synchronisieren — per Shell-Script (`mysqldump`) oder über die console.php (`system:tenant-export` / `system:tenant-import`). Mit Cronjob-Einrichtung, Checkliste und Fehlerbehebung.

## [Passwörter verwalten](./passwoerter-verwalten.md)

Im täglichen Gebrauch hantiert ein Systemadministrator mit dutzenden Passwörtern. Die alle im Gedächtnis zu behalten, erscheint unrealistisch. i-doit bringt eine einfache Passwort-Verwaltung mit, die einem den Kopf frei hält und schnell benötigte Zugangsdaten schneller finden lässt.

## [Standort-basierte Benutzerrechte](./standort-basierte-benutzerrechte.md)

In i-doit sind [sehr feingranulare Benutzerrechte](../effizientes-dokumentieren/rechteverwaltung/index.md) definierbar, um bestimmten Benutzergruppen nur eingeschränkten Zugriff auf die IT-Dokumentation zu ermöglichen. Dazu gehören Benutzerrechte, die sich nur auf bestimmte [Standorte](../anwendungsfaelle/standorte.md) auswirken.

## [Standorte](./standorte.md)

Die Verortung von Hardware & Co. ist ein essentieller Bestandteil von i-doit. In diesem Artikel wird erklärt, wie man Standorte dokumentiert und [Objekte](../grundlagen/struktur-it-dokumentation.md) dort platziert.

## [Switch Stacking](./switch-stacking.md)

Mit dem [Objekttypen](../grundlagen/objekttyp-konfiguration.md) **Stacking** ist es möglich, einen Stack-Verbund mit mehreren Mitgliedern zu definieren, die Informationen untereinander austauschen. Auch wenn Stacking für unterschiedliche Objekttypen genutzt werden kann, ist der ursprüngliche Gedanke für diesen Objekttypen und die dazugehörige [Kategorie](../grundlagen/kategorien-und-attribute.md) **Stack Mitglieder** auf Switch Stacking zurückzuführen. Der Objekttyp ist ab Version 1.7 unter der [Objekttyp-gruppe](../grundlagen/struktur-it-dokumentation.md#objekttypgruppe) **Andere** zu finden.

## [Variable Reports](./variable-reports.md)

Variable Reports können dafür verwendet werden, Objektspezifische Informationen dazustellen, anders als bei normales Reports, welche immer statische Ergebnisse ausgeben.
Die Objektinformationen sind durch die Variablen Reports **rückwärtig** einsehbar, z.B. kann man von Objekt A zu Objekt B schließend und von Objekt B dann auch wieder zurück auf Objekt A.

## [VM provisionieren (veraltet)](./vm-provisionieren.md)

In diesem Artikel beleuchten wir den [Anwendungsfall](./index.md), virtuelle Maschinen (VM) über i-doit zu provisionieren. Dazu machen wir uns eine gepflegte [IT-Dokumentation](../grundlagen/struktur-it-dokumentation.md) zunutze, gepaart mit wenigen Scripts, um diesen [Automatismus](../automatisierung-und-integration/index.md) Wirklichkeit werden zu lassen.
