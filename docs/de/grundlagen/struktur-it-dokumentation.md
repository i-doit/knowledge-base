# Struktur der IT-Dokumentation

Wie i-doit die [IT-Dokumentation](../glossar.md) strukturiert, ist Thema dieses Artikels. Hierbei geht es vor allem um das Vokabular, das in i-doit Verwendung findet, wie die Begriffe in Zusammenhang stehen und wie dies in der Web GUI dargestellt wird.

Von der Navigation
------------------

Nach der [Anmeldung](erstanmeldung.md) erscheint zunächst das [Dashboard mit Widgets](dashboard-und-widgets.md). Von dort aus lässt sich die IT-Dokumentation erkunden. Vom Hauptnavigationsleiste (der schwarze Bereich oben) erreicht man fast alle Funktionen in i-doit.

[![Navigation](../assets/images/de/grundlagen/struktur-der-it-dokumentation/1-sitdoku.png)](../assets/images/de/grundlagen/struktur-der-it-dokumentation/1-sitdoku.png)

Um sich zu orientieren, wo man sich befindet, hilft ein Blick auf die Brotkrumen-Navigation. Von dort aus lassen sich übergeordnete Seiten ansteuern.

[![Navigation-2](../assets/images/de/grundlagen/struktur-der-it-dokumentation/2-sitdoku.png)](../assets/images/de/grundlagen/struktur-der-it-dokumentation/2-sitdoku.png)

Von Gruppen, Typen und Kategorisierungen
----------------------------------------

Objekttypengruppen umfassen Objekttypen instantiieren Objekte erben Kategorien beinhalten Attribute. Alles klar? Noch einmal langsam und ganz von vorn.

[![Objekttypgruppen](../assets/images/de/grundlagen/struktur-der-it-dokumentation/3-sitdoku.png)](../assets/images/de/grundlagen/struktur-der-it-dokumentation/3-sitdoku.png)

### Objekttypgruppe

In einer gelebten und gut gefüllten IT-Dokumentation kommen nicht selten viele Objekttypen zum Einsatz. Damit sich diese Fülle übersichtlich präsentiert, können gleichartige Objekttypen gruppiert werden. Diese Objekttypgruppen erscheinen in der Hauptnavigationsleiste (oberster Bereich) von i-doit.

[![Objekttypgruppen-2](../assets/images/de/grundlagen/struktur-der-it-dokumentation/4-sitdoku.png)](../assets/images/de/grundlagen/struktur-der-it-dokumentation/5-sitdoku.png)

In unserem Beispiel betrachten wir die Objekttypgruppe "Hardware".

[![Objekttypgruppen-3](../assets/images/de/grundlagen/struktur-der-it-dokumentation/5-sitdoku.png)](../assets/images/de/grundlagen/struktur-der-it-dokumentation/5-sitdoku.png)

### Objekttyp

Als Objekttyp bezeichnen wir die Zusammenfassung aller Objekte desselben Typs. Beispiele sind "Router", "Server" oder "Anwendungen". Üblicherweise wird diese Zusammenfassung auch als "Klasse" bezeichnet. In ITIL© wird der Begriff "CI-Typ" (Original: "CI Type") verwendet.

i-doit enthält in der Standard-Installation bereits eine Vielzahl an vor konfigurierten Objekttypen. Sollten diese nicht ausreichen, lassen sich [eigene Objekttypen erstellen](benutzerdefinierte-objekttypen.md).

Pro Objekttyp existiert eine [Objektliste](objekt-liste/index.md), die alle diesem Objekttyp zugeordneten Objekte mit einigen Attributen auflistet. Als Beispiel betrachten wir die Objektliste für den Objekttyp "Virtualisierungsserver".

[![Objekttyp](../assets/images/de/grundlagen/struktur-der-it-dokumentation/6-sitdoku.png)](../assets/images/de/grundlagen/struktur-der-it-dokumentation/6-sitdoku.png)

### Objekt

Zu jedem Artefakt, das dokumentiert werden soll, muss entschieden werden, als was es gespeichert wird. Beispielsweise wird ein einzelner Server oftmals als ein zusammenhängendes Konstrukt betrachtet. In diesem Fall wird ein Server als Objekt in i-doit angelegt. Objekte sind in i-doit alle Dinge, die wir in einer IT-Dokumentation dokumentieren, gleich ob es sich um physische Geräte wie Server oder Clients oder logische Konstrukte wie Netze oder Services handelt. Ein Objekt definiert sich durch seinen Objekttyp, der bestimmt, welche Attribute für das Objekt mit Werten belegt werden kann. In ITIL© wird der Begriff "Configuration Item (CI)" verwendet. Im Asset Management ist der Begriff "Asset Value" verbreitet. Wir möchten durch den Begriff "Objekt" eine abstraktere und damit allgemeingültige sowie vielseitig verwendbare Definition etablieren.


In i-doit gibt es in der Standard-Installation einige Objekte, die für die korrekte Funktionsweise essentiell sind. Dazu gehören Benutzer-Objekte vom Objekttyp "Personen", weiterhin "Personengruppen" für die Rechte und "[Layer-3-Netze](../anwendungsfaelle/ip-adress-management.md)". Zudem gibt es nicht sichtbare Objekte, z. B. die "Root-Lokation" für Standorte. Diese lassen sich nicht löschen.

Jedes Objekt in i-doit erhält einen Titel. Dieser wird als Attribut in der Kategorie "Allgemein" dokumentiert. Synoym wird dieses Attribut auch "Bezeichnung", "Name", "Objekt-Link" genannt.

[![Objekt](../assets/images/de/grundlagen/struktur-der-it-dokumentation/7-sitdoku.png)](../assets/images/de/grundlagen/struktur-der-it-dokumentation/7-sitdoku.png)

Im Beispiel beleuchten wir das Objekt mit dem Objekt-Titel "ESX1". Dazu reicht ein Klick auf den Objekt-Link in der oben genannten Objektliste.

### Kategorie

Thematisch zusammenhängende Attribute werden pro Objekt in Kategorien zusammengefasst. Es gibt drei Typen von Kategorien: globale, spezifische und [benutzerdefinierte](benutzerdefinierte-kategorien.md). Zudem unterteilen sie sich in Single- und Multi-Value-Kategorien (Listen-Kategorien). Manche Kategorien sind rückwärtig, andere wiederum dienen als View. Einige sind fest jedem Objekttyp und somit jedem Objekt zugeordnet, andere lassen sich flexibel pro Objekttyp zu- und abwählen Zu guter Letzt gibt es spezielle Kategorien wie "Allgemein" oder die "Übersichtsseite".

Kategorien werden im linken Navigationsbaum in der Objektsicht angezeigt.

[![Kategorie](../assets/images/de/grundlagen/struktur-der-it-dokumentation/8-sitdoku.png)](../assets/images/de/grundlagen/struktur-der-it-dokumentation/8-sitdoku.png)

Oberhalb des linken Navigationsbaums werden die statischen Kategorien als Icons aufgelistet.

[![Icons](../assets/images/de/grundlagen/struktur-der-it-dokumentation/9-sitdoku.png)](../assets/images/de/grundlagen/struktur-der-it-dokumentation/9-sitdoku.png)

Kategorien haben in der Regel zwei Ansichten: eine zum Lesen und eine zum Bearbeiten. Um Attribute in einer Kategorie zu bearbeiten, klickt man in der Aktionsleiste auf den Button **Editieren**.

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

Eine spezifische Kategorie unterschiedet sich von einer globalen Kategorie dahingehend, dass deren Attribute einen sehr speziellen Fokus haben, der sich in der Regel nur für einen oder wenige Objekttypen eignet. Ein Beispiel ist die Kategorie "Schrank", die dem gleichnamigen Objekttypen "Schrank" zugeordnet ist und eine Rack-Ansicht dem Benutzer präsentiert.

#### Single-Value-Kategorie

In einer Single-Value-Kategorie kann jedes zugehörige Attribut jeweils nur einmal pro Objekt dokumentiert werden. Ein Beispiel ist die Kategorie "Buchhaltung": Informationen zu Inventarnummer, Kostenstelle usw. werden nur einmal benötigt. Das Pendant hierzu ist die Multi-Value-Kategorie.

#### Multi-Value-Kategorie

Wenn die Attribute einer Kategorie mehrmals pro Objekt dokumentiert werden können, spricht man von einer Multi-Value-Kategorie, auch Listen-Kategorie genannt. Ein Beispiel ist die Kategorie "CPU": Handelt es sich um ein Mehrsockelsystem, kann jede CPU mit Frequenz, Kernzahl usw. separat dokumentiert werden. Das Pendant hierzu ist die Single-Value-Kategorie.

#### Benutzerdefinierte Kategorie

Eine Kategorie, die von einem Benutzer angelegt und mit einem oder mehreren Attributfeldern konfiguriert wurde, wird in i-doit als [benutzerdefiniert](benutzerdefinierte-kategorien.md) markiert.

#### Rückwärtige Kategorie

Stehen zwei oder mehrere Objekte in Beziehung zueinander, wird dies in der dafür bestimmten Kategorie festgehalten. Beispielsweise können in der Kategorie "Kontaktzuweisung" beliebig viele Personen, Personengruppen etc. als Kontakt für ein Objekt hinterlegt werden. Damit auch innerhalb dieser Personen und Personengruppen ersichtlich ist, welchen Objekten diese als Kontakt zugeordnet sind, existiert eine weitere Kategorie "Zugeordnete Objekte". Da dieselben Informationen dort zur Verfügung stehen, aber nur einmal gespeichert und in einem anderen Kontext dargestellt werden, handelt es sich um eine rückwärtige Kategorie.

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

Von Beziehungen
---------------

In i-doit können nicht nur IT-Komponenten für sich alleinstehend dokumentiert werden, sondern diese auch in Beziehung gesetzt werden. Es gibt verschiedene bereits vorkonfigurierte Beziehungsarten, die angepasst und erweitert werden können. Jede Beziehung ist ein eigenes (nicht lizenzpflichtiges) Objekt, das automatisch erstellt, bearbeitet oder gelöscht wird.