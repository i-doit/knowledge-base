---
title: "Struktur der IT-Dokumentation"
description: "Die Struktur der IT-Dokumentation beschreibt, wie i-doit deine IT-Dokumentation organisiert."
icon:
status:
lang: de
---
# Struktur der IT-Dokumentation

Die Struktur der IT-Dokumentation beschreibt, wie i-doit deine [IT-Dokumentation](../glossar.md) organisiert. Du lernst hier die zentralen Begriffe kennen -- von Objekttypgruppen über Objekte bis hin zu Attributen -- und siehst, wie sie in der Web GUI zusammenspielen.

## Von der Navigation

Nach der [Anmeldung](erstanmeldung.md) erscheint zunächst das [Dashboard mit Widgets](dashboard-und-widgets.md). Von dort aus erkundest du die IT-Dokumentation. Über die Hauptnavigationsleiste (der schwarze Bereich oben) erreichst du fast alle Funktionen in i-doit.

[![Navigation](../assets/images/de/grundlagen/struktur-der-it-dokumentation/1-sitdoku.png)](../assets/images/de/grundlagen/struktur-der-it-dokumentation/1-sitdoku.png)

Um dich zu orientieren, wirf einen Blick auf die Brotkrumen-Navigation. Von dort aus steuerst du übergeordnete Seiten an.

[![Navigation-2](../assets/images/de/grundlagen/struktur-der-it-dokumentation/2-sitdoku.png)](../assets/images/de/grundlagen/struktur-der-it-dokumentation/2-sitdoku.png)

## Von Gruppen, Typen und Kategorisierungen

Die Hierarchie in i-doit folgt einer klaren Logik: **Objekttypgruppen** fassen **Objekttypen** zusammen, aus Objekttypen entstehen **Objekte**, diesen sind **Kategorien** zugeordnet, und Kategorien enthalten **Attribute**. Die folgenden Abschnitte erklären jeden dieser Begriffe im Detail.

[![Objekttypgruppen](../assets/images/de/grundlagen/struktur-der-it-dokumentation/3-sitdoku.png)](../assets/images/de/grundlagen/struktur-der-it-dokumentation/3-sitdoku.png)

### Objekttypgruppe

Eine Objekttypgruppe fasst gleichartige Objekttypen zusammen, um Übersichtlichkeit zu schaffen. In einer gut gefüllten IT-Dokumentation kommen viele Objekttypen zum Einsatz -- die Gruppierung hilft, den Überblick zu behalten. Die Objekttypgruppen erscheinen in der Hauptnavigationsleiste (oberster Bereich) von i-doit.

[![Objekttypgruppen-2](../assets/images/de/grundlagen/struktur-der-it-dokumentation/4-sitdoku.png)](../assets/images/de/grundlagen/struktur-der-it-dokumentation/5-sitdoku.png)

In unserem Beispiel betrachten wir die Objekttypgruppe "Hardware".

[![Objekttypgruppen-3](../assets/images/de/grundlagen/struktur-der-it-dokumentation/5-sitdoku.png)](../assets/images/de/grundlagen/struktur-der-it-dokumentation/5-sitdoku.png)

### Objekttyp

Ein Objekttyp ist die Zusammenfassung aller Objekte desselben Typs -- zum Beispiel "Router", "Server" oder "Anwendungen". In anderen Kontexten spricht man auch von "Klasse" oder in ITIL von "CI-Typ" (CI Type).

i-doit enthält in der Standard-Installation bereits eine Vielzahl vorkonfigurierter Objekttypen. Reichen diese nicht aus, kannst du [eigene Objekttypen erstellen](benutzerdefinierte-objekttypen.md).

Pro Objekttyp existiert eine [Objektliste](objekt-liste/index.md), die alle zugeordneten Objekte mit ausgewählten Attributen auflistet. Als Beispiel dient die Objektliste für den Objekttyp "Virtualisierungsserver".

[![Objekttyp](../assets/images/de/grundlagen/struktur-der-it-dokumentation/6-sitdoku.png)](../assets/images/de/grundlagen/struktur-der-it-dokumentation/6-sitdoku.png)

### Objekt

Ein Objekt repräsentiert ein einzelnes dokumentiertes Artefakt in i-doit -- egal ob physisches Gerät (Server, Client) oder logisches Konstrukt (Netz, Service). Ein Objekt definiert sich durch seinen Objekttyp, der festlegt, welche Attribute du mit Werten belegen kannst.

In ITIL spricht man von "Configuration Item (CI)", im Asset Management von "Asset". Der Begriff "Objekt" in i-doit ist bewusst abstrakter und damit allgemeingültig gehalten.

In der Standard-Installation existieren bereits einige essentielle Objekte: Benutzer-Objekte vom Objekttyp "Personen", "Personengruppen" für die Rechteverwaltung und "[Layer-3-Netze](../anwendungsfaelle/ip-adress-management.md)". Dazu kommen nicht sichtbare Objekte wie die "Root-Lokation" für Standorte -- diese lassen sich nicht löschen.

Jedes Objekt erhält einen Titel, der als Attribut in der Kategorie "Allgemein" gespeichert wird. Synonyme dafür sind "Bezeichnung", "Name" und "Objekt-Link".

[![Objekt](../assets/images/de/grundlagen/struktur-der-it-dokumentation/7-sitdoku.png)](../assets/images/de/grundlagen/struktur-der-it-dokumentation/7-sitdoku.png)

Im Beispiel beleuchten wir das Objekt mit dem Objekt-Titel "ESX1". Dazu reicht ein Klick auf den Objekt-Link in der oben genannten Objektliste.

### Kategorie

Kategorien fassen thematisch zusammenhängende Attribute pro Objekt zusammen. Es gibt drei Typen:

- **Globale Kategorien** -- können jedem Objekttyp zugeordnet werden
- **Spezifische Kategorien** -- sind für bestimmte Objekttypen gedacht
- **[Benutzerdefinierte Kategorien](benutzerdefinierte-kategorien.md)** -- von dir selbst erstellt

Zusätzlich unterscheidet man zwischen Single-Value- und Multi-Value-Kategorien (Listen-Kategorien). Manche Kategorien sind rückwärtig, andere dienen als View. Einige sind fest jedem Objekttyp zugeordnet, andere lassen sich flexibel zu- und abwählen.

Kategorien werden im linken Navigationsbaum in der Objektsicht angezeigt.

[![Kategorie](../assets/images/de/grundlagen/struktur-der-it-dokumentation/8-sitdoku.png)](../assets/images/de/grundlagen/struktur-der-it-dokumentation/8-sitdoku.png)

Oberhalb des linken Navigationsbaums werden die statischen Kategorien als Icons aufgelistet.

[![Icons](../assets/images/de/grundlagen/struktur-der-it-dokumentation/9-sitdoku.png)](../assets/images/de/grundlagen/struktur-der-it-dokumentation/9-sitdoku.png)

Kategorien haben in der Regel zwei Ansichten: eine zum Lesen und eine zum Bearbeiten. Um Attribute in einer Kategorie zu bearbeiten, klickst du in der Aktionsleiste auf den Button **Editieren**.

[![Kategorien](../assets/images/de/grundlagen/struktur-der-it-dokumentation/10-sitdoku.png)](../assets/images/de/grundlagen/struktur-der-it-dokumentation/10-sitdoku.png)

Für unser Beispiel betrachten wir die Kategorie Modell.

[![Kategorie-Modell](../assets/images/de/grundlagen/struktur-der-it-dokumentation/11-sitdoku.png)](../assets/images/de/grundlagen/struktur-der-it-dokumentation/11-sitdoku.png)

[Kategorien werden Objekttypen zugeordnet](zurodnung-von-kategorien-zu-objekttypen.md), nicht Objekten. Jedes Objekt eines Objekttyps hat dieselben Kategorien zugeordnet.

#### Übersichtsseite

Die Übersichtsseite wird beim Aufruf eines Objekts in der Web GUI von i-doit dargestellt. Sie besteht aus der Kategorie "Allgemein" und optional weiteren Kategorien, die dem Objekttyp zugeordnet sind. Diese können in der [Objekttyp-Konfiguration](../assets/images/de/grundlagen/struktur-der-it-dokumentation/0-sitdoku.png) an- oder abgewählt sowie sortiert werden.

[![Übersichtsseite](../assets/images/de/grundlagen/struktur-der-it-dokumentation/12-sitdoku.png)](../assets/images/de/grundlagen/struktur-der-it-dokumentation/12-sitdoku.png)

#### Kategorie "Allgemein"

Die Kategorie "Allgemein" gehört zu jenen Kategorien, die fester Bestandteil eines jeden Objekts sind. Daher lässt sie sich pro Objekttyp nicht als unerwünscht abwählen. In dieser Kategorien werden wichtige Attribute festgehalten wie der Objekt-Titel, SYS-ID, [CMDB-Status und Zustand](lebens-und-dokumentationszyklus.md).

[![Kategorie-Allgemein](../assets/images/de/grundlagen/struktur-der-it-dokumentation/13-sitdoku.png)](../assets/images/de/grundlagen/struktur-der-it-dokumentation/13-sitdoku.png)

#### Globale Kategorie

Eine globale Kategorie kann prinzipiell jedem Objekttypen zugeordnet werden, sodass deren Attribute den jeweiligen Objekten zur Verfügung stehen. Beispiel: Kategorie "Modell".

#### Spezifische Kategorie

Eine spezifische Kategorie unterscheidet sich von einer globalen Kategorie dahingehend, dass deren Attribute einen sehr speziellen Fokus haben, der sich in der Regel nur für einen oder wenige Objekttypen eignet. Ein Beispiel ist die Kategorie "Schrank", die dem gleichnamigen Objekttypen "Schrank" zugeordnet ist und eine Rack-Ansicht dem Benutzer präsentiert.

#### Single-Value-Kategorie

In einer Single-Value-Kategorie kann jedes zugehörige Attribut jeweils nur einmal pro Objekt dokumentiert werden. Ein Beispiel ist die Kategorie "Buchhaltung": Informationen zu Inventarnummer, Kostenstelle usw. werden nur einmal benötigt. Das Pendant hierzu ist die Multi-Value-Kategorie.

#### Multi-Value-Kategorie

Wenn die Attribute einer Kategorie mehrmals pro Objekt dokumentiert werden können, spricht man von einer Multi-Value-Kategorie, auch Listen-Kategorie genannt. Ein Beispiel ist die Kategorie "CPU": Handelt es sich um ein Mehrsockelsystem, kann jede CPU mit Frequenz, Kernzahl usw. separat dokumentiert werden. Das Pendant hierzu ist die Single-Value-Kategorie.

#### Benutzerdefinierte Kategorie

Eine Kategorie, die von einem Benutzer angelegt und mit einem oder mehreren Attributfeldern konfiguriert wurde, wird in i-doit als [benutzerdefiniert](benutzerdefinierte-kategorien.md) markiert.

#### Rückwärtige Kategorie

Eine rückwärtige Kategorie zeigt Beziehungsdaten aus der Perspektive des verknüpften Objekts. Beispiel: In der Kategorie "Kontaktzuweisung" ordnest du Personen einem Objekt zu. Die verknüpfte Person sieht dieselbe Information in ihrer rückwärtigen Kategorie "Zugeordnete Objekte". Die Daten werden nur einmal gespeichert, aber aus beiden Blickwinkeln dargestellt.

#### View-Kategorie

In einigen Kategorien können keine Attribute pro Objekt hinterlegt werden. Sie dienen der Auswertung von anderweitig hinterlegten Daten. Die aufbereiteten Daten können nicht editiert werden. Ein Beispiel ist die Kategorie "Objektvitalität", eine Auswertung der Kategorien "CPU", "Speicher", "Port" und "Softwarezuweisung".

### Attribut

Ein Attribut ist ein dokumentierter Wert zu einem Objekt. Gleichartige Attribute werden in i-doit zu Kategorien zusammengefasst. Beispiel: in der Kategorie "Modell" das Attribut "Seriennummer".

[![Attribut-Seriennummer](../assets/images/de/grundlagen/struktur-der-it-dokumentation/14-sitdoku.png)](../assets/images/de/grundlagen/struktur-der-it-dokumentation/14-sitdoku.png)

Wichtige Attribute aus verschiedenen Kategorien werden zu einer Ansicht vereint, die über jeder Kategorie angezeigt wird. Diese Primär-Attribute sind "SYS-ID", "Einsatzzweck" (beides in Kategorie "Allgemein"), "Beziehungen", "Standort", "Kontaktzuweisung" und "Primäre Zugriffs-URL" (Kategorie "Zugriff"). Daneben wird zudem ein QR-Code dargestellt, der den Link zur Übersichtsseite beinhaltet.

[![Kategorie-Zugriff](../assets/images/de/grundlagen/struktur-der-it-dokumentation/15-sitdoku.png)](../assets/images/de/grundlagen/struktur-der-it-dokumentation/15-sitdoku.png)

### Attributfeld

In der Web GUI von i-doit werden Attribute von Objekten über Formularfelder gespeichert und bearbeitet. Diese Felder werden demnach Attributfelder genannt. Sie können unterschiedlicher Art sein: Es gibt ein- oder mehrzeilige Textfelder, Datumsfelder, HTML-Editoren, Objekt-Browser, [Dialog-Plus-Felder](dialog-admin.md) und viele weitere.

[![Attributfeld](../assets/images/de/grundlagen/struktur-der-it-dokumentation/16-sitdoku.png)](../assets/images/de/grundlagen/struktur-der-it-dokumentation/16-sitdoku.png)

## Von Beziehungen

In i-doit dokumentierst du nicht nur einzelne IT-Komponenten, sondern setzt sie auch zueinander in Beziehung. Es gibt verschiedene vorkonfigurierte Beziehungsarten, die du anpassen und erweitern kannst. Jede Beziehung ist ein eigenes (nicht lizenzpflichtiges) Objekt, das i-doit automatisch erstellt, bearbeitet oder löscht. Mehr dazu erfährst du im Artikel [Objekt-Beziehungen](objekt-beziehungen.md).
