Das [Signal-Slot System](https://de.wikipedia.org/wiki/Signal-Slot-Konzept) kann benutzt werden, um in i-doit auf bestimmte _Ereignisse_ zu reagieren. Darunter fallen sowohl CMDB Ereignisse, wie “Objekt wurde erstellt”, “Datensatz wurde geändert” oder “Datensatz wurde archiviert”, als auch technische Ereignisse, wie “Kategorie wurde initialisiert”, “GUI wird gerendert” oder “CSS wird zusammengefasst”. 

Das “Events” Add-on greift zum Beispiel auf eine Reihe dieser Signale zurück und bildet somit einen Adapter zwischen technischen Signalen und einer Konfiguration in der i-doit Oberfläche.

Anwendungsfälle
===============

Mit Hilfe des Signal-Slot Systems kann zum Beispiel die GUI beliebiger Kategorien erweitert werden. Im einfachsten Fall ergänzt man die “navbar” um eine (oder mehrere) eigene Schaltflächen. Es ist aber darüber hinaus sogar möglich eine Kategorie um Attribute zu erweitern - dies erfordert allerdings viel Arbeit und ein tiefes Know-How des Systems.

Mittels eigener Logik kann bei bestimmten Ereignissen, zum Beispiel beim dokumentieren von virtuellen Servern oder Ändern einer primären IP-Adresse, ein externes Skript angesteuert werden.

**Achtung!**

Aufwändige Prozeduren sollten nicht auf Basis eines Signals angesteuert werden, da die Verarbeitung synchron passiert. Das bedeutet eine rechenintensive Prozedur würde den dahinterliegenden i-doit Prozess verlangsamen und könnte dadurch unerwünschte Seiteneffekte auslösen (Abbruch des Requests, Speicherüberlauf, …).

Alternativ lässt sich ein beobachtetes Signal in einen (Betriebssystem-) Prozess weiterleiten, sodass i-doit nicht geblockt wird. Dies wird in der [offiziellen PHP Dokumentation](https://www.php.net/manual/en/function.exec.php#refsect1-function.exec-notes) beschrieben.

Verwendung der Signale
======================

Um mit Signalen arbeiten zu können, benötigen wir zunächst eine Instanz der “isys\_component\_signalcollection” Klasse aus dem Container:

[?](#)

`$signals` `= isys_application::instance()->container->get(``'signals'``);`

Mit dieser Instanz können wir nun Signale senden oder vorhandene Signale beobachten. Die Beobachtung eines Signals kann auch nachträglich gestoppt werden.

Generelle Informationen
-----------------------

Um bei Erreichen eines Signals seine eigene Logik auszuführen, wird mit sogenannten “callbacks” gearbeitet. In der PHP Welt gibt es verschiedene Möglichkeiten, wie man diese definieren kann, siehe dazu auch die [offizielle PHP Dokumentation](https://www.php.net/callable).

Wir empfehlen “callbacks” mittels String- oder Array-Notation zu übergeben, also zum Beispiel:

  

[?](#)

`$signal``->connect(``'signal.name'``,` `'function_name'``);`

`// Or`

`$signal``->connect(``'signal.name'``, [``'class_name'``,` `'method_name'``]);`

  

Wir raten davon ab Lambda-Funktionen oder Closures zu nutzen, da diese Art der Signale später nicht mehr gelöst werden kann (siehe auch “Beobachtung beenden”).

Signale beobachten
------------------

Um auf Signale zu reagieren, müssen wir einen validen “Callback” an das entsprechende Signal hängen. Das passiert mit Hilfe der “connect” Methode:

[?](#)

`$signal``->connect(``'name.des.signals'``, callable, priority);`

*   An erster Stelle steht der Name des Signals.
*   Der zweite Parameter muss “[callable](https://www.php.net/callable)” sein, es empfiehlt sich hier ein Array oder ein String zu übergeben. Lambda Funktionen oder Closures funktionieren natürlich auch, lassen sich aber nachträglich nicht mehr “disconnecten”.
*   Als dritten Parameter lässt sich eine optionale Priorität mitgeben - dabei muss es sich um einen numerischen Wert handeln. Dabei entspricht eine niedrige Zahl eine höhere Priorität.

Jedes Signal wird, je nach Implementierung, Parameter übergeben bekommen, mit denen gearbeitet werden kann. Die Stelle im Code, die das Signal aufruft entscheidet über die übergebenen Parameter.

Mehr dazu unter “Verfügbare Signale”.

Beobachtung beenden
-------------------

Mittels “disconnect” lassen sich verbundene Beobachtungen nachträglich lösen. Wichtig hierbei: dies funktioniert NICHT mit Lambda Funktionen und Closures, sondern nur mit “callbacks” in String oder Array-Form, also zum Beispiel:  

[?](#)

`$signals``->disconnect(``'signal.name'``,` `'function_name'``);`

`// Or`

`$signals``->disconnect(``'signal.name'``, [``'class_name'``,` `'method_name'``]);`

Eigene Signale senden
=====================

Mit Hilfe der “emit” Methode können Signale im eigenen Code gesendet werden. Das macht insbesondere dann Sinn, wenn im eigenen Add-on Objekte oder Kategorien erstellt oder geändert werden.

So etwas ist notwendig, damit die Basisfunktionen, wie zum Beispiel die Suche über geänderte Daten informiert wird und entsprechend den Suchindex aktualisieren kann.

Darüber hinaus ist es natürlich auch möglich eigene Signale zu senden, die dann an anderer Stelle beobachtet werden können. Das kann genutzt werden, um Code zu entzerren, indem bestimmte Sub-Routinen ausgelagert werden.

Verfügbare Signale
==================

Die Liste der verfügbaren Signale ist groß und in einigen Fällen auch sehr spezifisch, um bestimmte Use-Cases abzubilden. Diese Liste umfasst alle Signale, die im i-doit Kern existieren und ist in verschiedene Gruppen unterteilt. Die Signale unterhalb von “Andere” sind nur mit Vorsicht zu verwenden, wohingegen wir von der Verwendung der “Veralteten Signale” gänzlich abraten.

Objekttyp Signale
-----------------

### mod.cmdb.afterObjectTypeCreated

Wird ausgeführt unmittelbar nachdem ein neuer Objekttyp in die Datenbank geschrieben wurde.

Parameter: Objekttyp ID, Name, Konstante, Spezifische Kategorie ID, Selbstdefiniert, Container, Objektbild URL, Icon URL, Sorting Wert, Status, SYS-ID Prefix, Darstellen im Baum

### mod.cmdb.beforeObjectTypePurge

Wird ausgeführt bevor ein Objekttyp gelöscht wird.

Parameter: Objekttyp ID, Name, Datensatz als Array

### mod.cmdb.afterObjectTypeDeleted

Wird ausgeführt nachdem ein Objekttyp aus der Datenbank gelöscht wurde.

Parameter: Ursprüngliche Objekttyp ID, Datensatz als Array

### mod.cmdb.afterObjectTypePurge

Wird ausgeführt nachdem ein Objekttyp gelöscht wird (ebenfalls nach mod.cmdb.afterObjectTypeDeleted).

Parameter: Objekttyp ID, Name, Ergebnis der Löschung, Datensatz als Array

### mod.cmdb.beforeObjectTypeSave

Wird ausgeführt bevor ein Objekttyp gespeichert wird.

Parameter: Objekttyp ID, Postdaten als Array

### mod.cmdb.afterObjectTypeSave

Wird ausgeführt nachdem ein Objekttyp gespeichert wurde.

Parameter: Objekttyp ID, Postdaten als Array, Ergebnis der Erstellung

### mod.cmdb.beforeCreateObjectTypeList

Wird ausgeführt bevor die Objekt Typ Liste in der CMDB GUI erzeugt wird.

Parameter: Instanz der Listen Komponente

Objekt Signale
--------------

### mod.cmdb.objectChanged

Wird ausgeführt nachdem ein Objekt verändert wurde und bevor die “Objekt geändert” Daten aktualisiert werden.

Parameter: Objekt IDs als Array, Username des aktuellen Benutzers

### mod.cmdb.objectDeleted

Wird ausgeführt nachdem ein Objekt aus der Datenbank entfernt wurde (purged).

Parameter: Objekt ID, DAO Instanz die den Befehl ausgelöst hat

### mod.cmdb.beforeObjectRank

Wird ausgeführt bevor der Status eines Objekts geändert wird (z.B. archivieren, löschen, purgen, wiederherstellen).

Parameter: DAO Instanz die den Befehl ausgelöst hat, Richtung (“archivieren/löschen/purgen”, “wiederherstellen”), Objekt IDs als Array

### mod.cmdb.afterObjectRank

Wird ausgeführt nachdem der Status eines Objekts geändert wurde (z.B. archivieren, löschen, purgen, wiederherstellen).

Parameter: DAO Instanz die den Befehl ausgelöst hat, Richtung (“archivieren/löschen/purgen”, “wiederherstellen”), Objekt IDs als Array

### mod.cmdb.beforeInsertObject

Wird ausgeführt bevor ein Objekt über die CMDB GUI erzeugt wird.

Parameter: DAO Instanz die den Befehl ausgelöst hat

### mod.cmdb.objectCreated

Wird ausgeführt nachdem ein Objekt erfolgreich erzeugt wurde.

Parameter: DAO Instanz die den Befehl ausgelöst hat, Objekt ID, SYS-ID, Objekttyp ID, Name (u.U leer), CMDB-Status ID, Username des aktuellen Benutzers

### mod.cmdb.afterInsertObject

Wird ausgeführt nachdem ein Objekt erfolgreich über die CMDB GUI erzeugt wurde.

Parameter: DAO Instanz die den Befehl ausgelöst hat, Objekttyp ID, Objekt ID

### mod.cmdb.beforeObjectStatusChange

Wird aufgerufen bevor der Status eines Objekts geändert wird (z.B. archivieren, löschen, purgen, wiederherstellen), noch vor “mod.cmdb.beforeRankRecord”.

Parameter: Objekt ID, neuer Status

### mod.cmdb.templatesApplied

Wird aufgerufen nachdem ein Objekt aus einem Template erzeugt wurde.

Parameter: Template Objekt IDs als Array, Objekt Typ ID, Name des erzeugten Objekts, Objekt ID des zuletzt erzeugten Objekts, Instanz des CMDB Import Handlers

Kategorie Signale
-----------------

### mod.cmdb.beforeCategoryEntryRank

Wird aufgerufen bevor der Status eines Kategorie Datensatzes über die CMDB GUI geändert wird.

Parameter: DAO Instanz der jeweiligen Kategorie, Tabellenname, Richtung (“archivieren/löschen/purgen”, “wiederherstellen”), Postdaten als Array

### mod.cmdb.afterCategoryEntryRank

Wird aufgerufen nachdem der Status eines Kategorie Datensatzes über die CMDB GUI geändert wurde.

Parameter: DAO Instanz der jeweiligen Kategorie, Tabellenname, Ergebnis des Prozess, Richtung (“archivieren/löschen/purgen”, “wiederherstellen”), Postdaten als Array

### mod.cmdb.afterCategoryEntrySave

Wird aufgerufen nachdem ein Kategorie Datensatz gespeichert wurde.

Parameter: DAO Instanz der jeweiligen Kategorie, Datensatz ID, Ergebnis des Prozess, Objekt ID, Postdaten als Array, Logbuchänderungen als Array

### mod.cmdb.beforeCategoryInit

Wird aufgerufen bevor eine Kategorie über die CMDB GUI angesteuert wird.

Parameter: Objekt ID, Kategorie Datensatz ID, Einige gesammelte Kategorie Metadaten

### mod.cmdb.afterCategoryInit

Wird aufgerufen nachdem eine Kategorie über die CMDB GUI angesteuert wurde - sowohl beim öffnen der Kategorie als auch direkt nach dem speichern.

Parameter: Objekt ID, DAO Instanz der jeweiligen Kategorie, Instanz des DAO Distributors

### mod.cmdb.beforeCategorySync

Wird aufgerufen befor die “sync” Methode einer Kategorie DAO innerhalb des CMDB Imports aufgerufen wird - dies betrifft auch das Template System und die “Objekt duplizieren” Funktion.

Parameter: Kategorie ID, Kategorie Daten die an “sync” übergeben werden, Objekt ID, Typ des Syncs (1 = erstellen, 2 = aktualisieren), Kategorie Typ ID (0 = Global, 1 = Spezifisch, 4 = Benutzerdefiniert)

### mod.cmdb.afterCategorySync

Wird aufgerufen nachdem die “sync” Methode einer Kategorie DAO innerhalb des CMDB Imports aufgerufen wird - dies betrifft auch das Template System und die “Objekt duplizieren” Funktion

Parameter: Kategorie ID, Kategorie Daten die an “sync” übergeben wurden, Datensatz ID des erzeugten Eintrags, erstellte Objekt ID, Typ des Syncs (1 = erstellen, 2 = aktualisieren), Kategorie Typ ID (0 = Global, 1 = Spezifisch, 4 = Benutzerdefiniert), DAO Instanz der jeweiligen Kategorie

### mod.cmdb.beforeCreateCategoryEntry

Wird aufgerufen bevor ein Kategorie Datensatz über die CMDB GUI erzeugt wird.

Parameter: Kategorie ID, Objekt ID, DAO Instanz der jeweiligen Kategorie, Logbuchänderungen als Array

### mod.cmdb.afterCreateCategoryEntry

Wird aufgerufen nachdem ein Kategorie Datensatz über die CMDB GUI erzeugt wurde.

Parameter: Kategorie ID, Kategorie Datensatz ID, Ergebnis des Prozess, Objekt ID, DAO Instanz der jeweiligen Kategorie, Logbuchänderungen als Array

### mod.cmdb.beforeCategoryEntrySave

Wird aufgerufen bevor ein Kategorie Datensatz über die CMDB GUI gespeichert wird.

Parameter: DAO Instanz der jeweiligen Kategorie, Kategorie Datensatz ID, Objekt ID, Postdaten als Array, Logbuchänderungen als Array

### mod.cmdb.beforeProcess

Wird aufgerufen bevor die “process” Methode einer UI Kategorie Klasse aufgerufen wird.

Parameter: DAO Instanz der jeweiligen Kategorie, Dateipfad des Templates

### mod.cmdb.beforeProcessList

Wird aufgerufen bevor die “process\_list” Methode einer UI (Multivalue-) Kategorie Klasse aufgerufen wird.

Parameter: DAO Instanz der jeweiligen Kategorie, Dateipfad des Templates

### mod.cmdb.beforeRankRecord

Wird aufgerufen bevor der Status eines CMDB-Datensatz geändert wird. Dies beinhaltet sowohl Kategorie- als auch Objektdatensätze.

Parameter: DAO Instanz der jeweiligen Kategorie, Objekt ID, Kategorie Datensatz ID, Datensatz Identifier, Datensatz Array, Tabellenname, Aktueller Status des Datensatzes, Zielstatus des Datensatzes, Kategorie Typ ID (0 = Global, 1 = Spezifisch, 4 = Benutzerdefiniert), Richtung (“archivieren/löschen/purgen”, “wiederherstellen”)

### mod.cmdb.beforeUserGroupChanged

Wird aufgerufen bevor eine Personengruppe geändert wird, zum Beispiel beim hinzufügen oder entfernen von Personen.

Parameter: Person Objekt ID, Gruppe Objekt ID, Aktion (“attach-person” oder “detach-person”)

### mod.cmdb.contact.beforeSaveTag

Wird aufgerufen bevor die Rolle einer Kontaktzuweisung geändert wird.

Parameter: DAO Instanz der jeweiligen Kategorie, Datensatz ID der Kontaktzuweisung Kategorie, ID der Personen Rolle

### mod.cmdb.extendFieldList

Wird aufgerufen wenn die Konfiguration einer Liste verarbeitet wird. Der Rückgabewert sollte ein assoziatives Array sein mit dem feldnamen bzw. alias als Schlüssel und einer Sprachkonstante die in der GUI dargestellt wird als Wert.

Parameter: Kategorie ID, Kategorie Typ ID (0 = Global, 1 = Spezifisch, 4 = Benutzerdefiniert)

### mod.cmdb.extendProperties

Wird aufgerufen wenn die Attribute (= Properties) einer Kategorie abgerufen werden. Der Callback des Signals kann hier eigene Attribute mitliefern um beliebige Kategorien um eigene Attribute zu ergänzen.

Parameter: Kategorie ID, Kategorie Typ ID (0 = Global, 1 = Spezifisch, 4 = Benutzerdefiniert)

### mod.cmdb.processContentTop

Wird aufgerufen nachdem der Objekt-Header verarbeitet wurde. Dies lässt sich abfangen um wie im “Wartungs Add-on” oder Monitoring eigene Elemente in den Objekt Header zu laden.

Parameter: Kategoriedaten der Allgemein Kategorie als Array

### mod.cmdb.processMenuTreeLinks

Wird aufgerufen wenn der Navigationsbaum für Kategorien in einem Objekt erzeugt wird. Dies wird üblicherweise für die “sticky” Kategorien verwendet die über dem Baum dargestellt werden.

Parameter: Instanz der Template Komponente, Template Variablen Name zum nutzen der “append()” Methode, Objekt ID, Objekttyp ID

Andere
------

### mod.export.extendTree

Wird aufgerufen nachdem der Navigationsbaum für die verschiedenen Exporte aufgebaut wurde um ggf. eigene Exporte anzuhängen.

Parameter: Instanz der Baum-Komponente

### mod.import\_csv.afterImport

Wird aufgerufen nachdem der CSV Import abgeschlossen wurde, dieses Signal steuert u.a. den Suchindex an um die neu erzeugten / aktualisierten Objekte zu indexieren.

Parameter: Instanz des CSV Imports, Verarbeitete Daten als Array, Erstellte Objekte als Array (mit Information zu ID, Titel und Typ ID), Kategorie Mapping als Array, Array der tatsächlich aktualisierten Kategorien (via Konstanten)

### mod.import\_csv.afterImportObject

Wird aufgerufen nachdem ein der CSV Import ein einzelnes Objekt importiert hat.

Parameter: Instanz des CSV Imports, Objekt ID, Ergebnis des Imports (boolean)

### mod.css.attachStylesheet

Wird aufgerufen um Add-on spezifische Stylesheet Dateien zu laden und global verfügbar zu machen. Der Rückgabewert des Callbacks sollte der absolute Pfad zur Stylesheet des eigenen Add-ons sein. Achtung: Add-on spezifische Styles sollten immer mit einem eindeutigen Prefix arbeiten und keine “Core Styles” zu überschreiben.

Parameter: Keine

### mod.cmdb.refreshTableConfigurations

Wird aufgerufen nachdem eine benutzerdefinierte Kategorie oder die Systemeinstellungen geändert wurden um Objektlisten zu aktualisieren, die ggf. geänderte Attribute beinhalten müssen.

Parameter: Keine

### mod.cmdb.extendLocationTree

Wird aufgerufen wenn der Standort Navigations Baum in der CMDB aufgebaut wird und kann dazu genutzt werden den Baum nachträglich zu verändern.

Parameter: Instanz der Baum-Komponente

### mod.cmdb.extendObjectTree

Wird aufgerufen wenn der Navigationsbaum (der die Kategorien anzeigt) innerhalb eines CMDB Objekts aufgebaut wird.

Parameter: Instanz der Baum-Komponente

### mod.cmdb.extendObjectTypeTree

Wird aufgerufen wenn der Navigationsbaum (der die Objekttypen anzeigt) innerhalb einer CMDB Objekttyp Gruppe aufgebaut wird.

Parameter: Instanz der Baum-Komponente

### mod.cmdb.extendRelationTree

Wird aufgerufen wenn der Navigationsbaum unterhalb von Extras > CMDB > Beziehungen aufgebaut wird.

Parameter: Instanz der Baum-Komponente

### mod.cmdb.beforeUpdateLocationNode

Spezifisches Signal welches beim erstellen, verschieben und löschen von Standort “Nodes” aufgerufen wird.

Parameter: Node ID, Parent Node ID, Aktion (“insert”, “move” oder “delete”)

### mod.cmdb.massChangeApplied

Wird aufgerufen nachdem eine Massenänderung (via Template-System) durchgeführt wurde.

Parameter: betroffene Objekt IDs als Array, Template Objekt ID, Instanz des CMDB Import Handlers

### mod.auth.afterRemoveAllRights

Wird aufgerufen nachdem alle User-Rechte entfernt werden. Achtung: dies geschieht bei jedem speichern der Rechte um die Caches zu aktualisieren - es werden alle Daten gelöscht und anschließend neu geschrieben.

Parameter: Objekt ID, Add-on ID

### mod.auth.afterUpdateRights

Wird aufgerufen nachdem die Rechte einer Person oder Personengruppe gespeichert wurden.

Parameter: Objekt ID, Add-on ID, gespeicherte Rechte als Array, Identifier der Aktion “create”

### mod.auth.afterDuplicateRights

Wird aufgerufen nachdem eine Person oder Personengruppe dupliziert wurde und infolgedessen deren Rechte dupliziert wurden.

Parameter: Objekt ID des Originals, Objekt ID des Duplikats, Duplizierte Datensätze als Array

### system.afterChange

Wird aufgerufen nachdem das i-doit Update gelaufen ist oder ein Add-on geändert wurde (aktiviert, deaktiviert, installiert oder deinstalliert).

Parameter: Keine

### system.afterFlushSystemCache

Wird aufgerufen nachdem das Cache Verzeichnis geleert wurde.

Parameter: Keine

### system.gui.beforeRender

Wird aufgerufen unmittelbar bevor die GUI verarbeitet wird (bevor Smarty die Templates durchläuft).

Parameter: Keine

### system.gui.afterRender

Wird aufgerufen nachdem die GUI verarbeitet wurde (nachdem Smarty das Template gerendert hat).

Parameter: Keine

### system.navbar.beforeAssignment

Wird aufgerufen bevor die “navbar buttons” verarbeitet werden. Dies wird u.a. vom “Swap-CI” Add-on verwendet um eine Schaltfläche hinzuzufügen.

Parameter: Keine

### system.shutdown

Wird aufgerufen wenn der Destruktor von isys\_application aufgerufen wird. Dies wird üblicherweise verwendet um Systemeinstellungen zu speichern die noch nicht in die Datenbank überführt wurden.

Parameter: Keine

Veraltete Signale, die nicht länger genutzt werden sollten
----------------------------------------------------------

### mod.cmdb.beforeCreateObjectList

Wird aufgerufen bevor eine Objektliste erzeugt wird, allerdings handelt es sich hierbei um eine veraltete “Listen” Komponente.

Parameter: Instanz der Listen Komponente, Objekttyp ID

### mod.cmdb.afterLegacyImport

Wird aufgerufen nachdem ein Import durchgeführt wurde.

Parameter: Startzeit des Imports (als float Wert)

### mod.cmdb.resultList

Wird aufgerufen wenn eine Multi-Value Kategorie in der CMDB GUI aufgerufen wird. 

Parameter: Kategorie ID, Kategorie Typ ID (0 = Global, 1 = Spezifisch, 4 = Benutzerdefiniert), Objekt ID, Status der anzuzeigenden Datensätze

### mod.report.views.view\_rack\_connections.set\_encoding\_type

Wird aufgerufen bevor in der Report view “Geräte in einem Schrank” die CSV Datei geschrieben wird.

Parameter: Keine

### mod.report.views.view\_devices\_in\_location\_detailed.extend\_report\_properties

Wird aufgerufen bevor in der Report View “Geräte in einem Standort (Listenformat)” die Attributdaten verarbeitet werden.

Parameter: Keine

### mod.cmdb.viewProcessed

Wird ausgeführt nachdem die CMDB View Instanz ausgeführt wurde.

Parameter: Instanz der CMDB View, Viewdaten als Array

### system.exceptionTriggered

Wird an einigen spezifischen Stellen aufgerufen wenn eine Exception nicht gefangen wurde.

Parameter: Instanz der Exception

### mod.manager.onBeforeLoad

Wird aufgerufen bevor der “Modul Manager” die “start” Methode des aktiven Add-ons aufruft.

Parameter: Instanz des aktuellen Add-on

### mod.manager.onAfterLoad

Wird aufgerufen nachdem der “Modul Manager” die “start” Methode des aktiven Add-ons aufgerufen hat.

Parameter: Instanz des aktuellen Add-on

### mod.css.beforeProcess

Wird aufgerufen bevor die i-doit Kern Stylesheets zusammengefasst werden.

Parameter: Keine

### mod.dashboard.afterInitialize

Wird aufgerufen nachdem das i-doit Dashboard vorbereitet wurde, unmittelbar bevor die Dashboard Daten an das Template übergeben werden.

Parameter: Instanz des Dashboard Moduls

### mod.import\_csv.beforeImport

Wird aufgerufen bevor der CSV Import gestartet wird.

Parameter: Instanz des CSV Imports, Verarbeitete Daten als Array, leeres Array, Kategorie Mapping als Array

### mod.import\_csv.beforeImportObject

Wird aufgerufen unmittelbar bevor der CSV Import ein einzelnes Objekt importiert. 

Parameter: Instanz des CSV Imports, Objekt ID

### mod.css.processed

Wird aufgerufen nachdem das i-doit eigene CSS verarbeitet wurde

Parameter: Keine