Hinweis

Mit dem Release von [i-doit pro 1.18.2](/display/de/Release+Notes+1.18.2) haben wir die bislang integrierte OCS Funktionalität aus dem Kern herausgelöst. Die Schnittstelle ist mit diesem Release ein eigenständiges i-doit pro Add-on geworden und wird ab sofort durch unseren Premium Partner Sector Nord AG verkauft und weiterentwickelt. Alle hier beschriebenen Inhalte beziehen sich ausschließlich auf i-doit pro Versionen < 1.18.2

  

OCS Inventory NG (Open Computer and Software Inventory Next Generation) ist eine Open Source Software zum automatischen Inventarisieren von Hardware- und Software-Komponenten sowie ganzen Netzwerken. Die Software ist auf der offiziellen Webseite unter [http://www.ocsinventory-ng.org/](http://www.ocsinventory-ng.org/) für verschiedene Betriebssysteme verfügbar. i-doit bietet eine Import-Schnittstelle an, um OCS-Objekte direkt in die [IT-Dokumentation](/display/de/Glossar#Glossar-IT-Dokumentation) zu importieren.

Konfiguration
-------------

Unter **`Verwaltung → Schnittstellen / externe Daten → Import → OCS-Inventory NG`** befinden sich 2 Menüpunkte, die für die OCS-Import-Schnittstelle relevant sind. Unter **`Konfiguration`** wird festgelegt, in welche Objekttypen die OCS-Objekte importiert werden. Es können Präfixes für die Objekttypen "Server" und "Client" festgelegt werden. Werden diese Präfixes gesetzt, wird während des Import-Vorganges geprüft, ob in der Bezeichnung des OCS-Objekts eines der gesetzten Präfixe vorhanden ist. Wird ein Objekt gefunden, wird es in den entsprechenden Objekttyp importiert. Die Option **`Nur bekannte Anwendungen verknüpfen`** gibt an, ob die importierten Objekte mit Anwendungen verknüpft werden sollen, die nur in der i-doit-Umgebung vorhanden sind. Wird diese Option auf **`Nein`** gesetzt, werden jene Anwendungen, die noch nicht im Datenbestand von i-doit vorhanden sind, neu angelegt und mit dem entsprechenden Computer-Objekt verknüpft. Der Parameter `**Objekt-Matching Profil**` gibt an, [wie bereits dokumentierte Objekte identifiziert werden sollen](/display/de/Objekte+identifizieren+bei+Importen). Identifizierte Objekte werden beim Datenimport aktualisiert.

Beim Menüpunkt **`Datenbanken`** werden die Zugangsdaten zur OCS-Datenbank hinterlegt. Es können mehrere OCS-Instanzen angegeben werden.

Import
------

Nun ist es möglich, unter **`Extras` ``**`→`** Import``** **``**`→`** OCS``** alle oder einzelne Objekte aus der OCS-Datenbank in die i-doit-Umgebung zu importieren. Wählt man einen oder mehrere Objekte aus, erscheint ein Fenster, in dem man jene Kategorien und Objekte festlegen kann, die importiert werden sollen.

![](/download/attachments/7831607/ocs.jpg?version=1&modificationDate=1441887555233&api=v2)

Wird der Import durchgeführt, erhält man am Ende der Seite eine Status-Meldung über den Verlauf des Importes.

Automatischer Import
--------------------

Über die i-doit [Console](/display/de/Console) kann der Import automatisiert ausgeführt werden, beispielsweise über einen Cronjob. Der zuständige [Command](https://kb.i-doit.com/pages/viewpage.action?pageId=81723422#OptionenundParameterderConsole-import-ocs) heißt `**import-ocs.**`

**Beispielaufruf**

[?](#)

`sudo` `-u www-data php console.php` `import``-ocs --user admin --password admin --tenantId 1 --databaseSchema ocs --objectType C__OBJTYPE__CLIENT`