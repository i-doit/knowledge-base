Das [Add-on](/display/de/i-doit+pro+Add-ons) `**CI-Umzug**` dient zum einfachen Dokumentieren von Standort-Wechseln von IT-Komponenten. Im Vordergrund stehen klassische Arbeitsplatzkomponenten wie Desktop-PCs, Telefone oder Monitore. Unterstützt werden auch logische Gruppierungen durch den [Objekttyp](/display/de/Struktur+der+IT-Dokumentation) Arbeitsplatz.

Die Funktionen sind über `**Extras → CI-Umzug**` zu finden.

 ![](/download/attachments/13599096/image2021-10-1_16-5-33.png?version=1&modificationDate=1633097133709&api=v2&effects=drop-shadow)

Es öffnen sich zwei Standortbrowser. Hier kann manuell zu einem Objekt navigiert werden oder bequem über eine integrierte Suche.

 ![](/download/attachments/13599096/image2021-10-1_16-7-59.png?version=1&modificationDate=1633097279872&api=v2&effects=drop-shadow)

In einem konkreten Beispiel wird Hans Olo von Raum 1.06 Open-plan Office in der Zentrale in Düsseldorf nach Raum 1.03 umgezogen.

![](/download/attachments/13599096/image2021-10-1_16-10-20.png?version=1&modificationDate=1633097420973&api=v2&effects=drop-shadow)

Dafür wird das Objekt Hans Olo per Drag and Drop von seinem alten Standort auf den neuen Standort gezogen. Die Ziellokation wird zur besseren Sichtbarkeit grün hervorgehoben.

![](/download/attachments/13599096/image2021-10-1_16-11-1.png?version=1&modificationDate=1633097461687&api=v2&effects=drop-shadow)

Nach dem Klicken auf Umzug Starten öffnet sich ein Umzugsdialog, der links den derzeitigen Standort und rechts den zukünftigen Standort anzeigt. Hier kann ausgewählt werden, welche Komponenten umgezogen werden und welche am alten Standort verbleiben.  
Es werden alle Objekte angezeigt, die hierarchisch “unterhalb” des ausgewählten Objektes liegen, im konkreten Fall also alle Arbeitsplatzkomponenten von Hans Olo. Umgezogen wird sein PC und sein Monitor, das Telefon wird abgewählt, da es im alten Raum verbleibt.

![](/download/attachments/13599096/image2021-10-1_16-12-4.png?version=1&modificationDate=1633097525017&api=v2&effects=drop-shadow)

Ist der Umzug abgeschlossen, wird die Baumansicht aktualisiert.

![](/download/attachments/13599096/image2021-10-1_16-12-55.png?version=1&modificationDate=1633097576457&api=v2&effects=drop-shadow)

  

Der Umzug wird im [Logbuch](/display/de/Logbuch) von i-doit vermerkt, allerdings nur im Objekt Hans Olo.

Um im Nachhinein genauere Informationen über die einzelnen umgezogenen Komponenten zu bekommen, wird der Umzug zusätzlich im Detail im Umzugslogbuch unter `**Extras → CI-Umzug → Logbuch**` verzeichnet. Hier wird jede einzelne betroffenen Komponente aufgeführt.

![](/download/attachments/13599096/image2021-10-1_16-19-41.png?version=1&modificationDate=1633097981521&api=v2&effects=drop-shadow)

Mandanten Optionen
------------------

| Option | Wert | Beschreibung |
| --- | --- | --- |
| Nach einem physikalischen Umzug soll der logische Standort entfernt werden. | Ja oder Nein | Soll der logische Standort nach einem physischem Umzug entfernt werden? |
| Nach einem logischen Umzug soll der physische Standort aktualisiert werden. | Ja oder Nein | Soll der physische Standort dem logisch übergeordnetem Objekt angeglichen werden? |
| Schreibe Logbucheinträge in alle positionierten Objekte eines umgezogenen Objekts. | Ja oder Nein | Sollen Logbucheinträge für alle umgezogenen Objekte angelegt werden? |

Releases
--------

| Version | Datum | Changelog |
| --- | --- | --- |
| 1.2 | 05.09.2022 | \[Task\] PHP 8.0 Compatibility  <br>\[Task\] Design Compatibility |
| 1.1.1 | 27.07.2022 | \[Bug\] Relocate-CI: Subordinate objects of persons are also moved when moving a person  <br>\[Bug\] Truck in location view causes wrong links  <br>\[Bug\] Relocation of workstation to person causes wrong location in workplace components |
| 1.1 | 25.10.2021 | \[Improvement\] Function to relocate multiple objects from the same location to another location  <br>\[Bug\]         PHP warning because of different method declarations (e.g. in Report-Browser)  <br>\[Bug\]         Add a dynamic property to the logbook of the Relocate-CI add-on  <br>\[Bug\]         No logs are created by the add-on  <br>\[Bug\]         Logical locations is no longer displayed on the right side |
| 1.0.5 | 10.08.2020 | \[Bug\] When moving an object physically it looses its logical location  <br>\[Bug\] Objects can be moved to locations that are not locations  <br>\[Bug\] Separate srollbars for source and destination selection during relocation  <br>\[Bug\] Objects can be relocated |
| 1.0.4 | 31.07.2019 | ```<br>[Improvement] Changed locations in the CMDB will also be shown in the relocate module[Change]      When moving a workstation, the remaining devices are no longer to be assigned to an automatically generated workstation[Bug]         Relocating a person shows an error message[Bug]         Searchfield for object selection does not open nodes[Bug]         Malformed autoload for dao[Bug]         A relocation does not change the change date<br>``` |
| 1.0.3 | 02.05.2017 | ```<br>[Improvement] PHP 7 compatibility[Bug]         After relocating a person menu trees are not updated[Bug]         PHP warning because of different method declarations (e.g. in Report-Browser)[Bug]         relocate_ci: Search fields too long[Bug]         When relocating a logical object the child objects will receive a physical location[Bug]         While relocating of clients or persons the location of connected terminals will not be updated[Bug]         Resultset of both search fields does not show all objects[Bug]         After relocating a person or a client the child objects will not be updated accordingly[Bug]         Edit, save and cancel buttons in relocate category are not functional<br>``` |
| 1.0.2 | 31.08.2015 | ```<br>[Change] Improved dragging and alternative method to drag objects<br>``` |
| 1.0.1 | 09.03.2015 | Initiales Release |