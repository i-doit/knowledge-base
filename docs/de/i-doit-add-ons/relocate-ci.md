# Relocate-CI

Das [Add-on](./index.md) **CI-Umzug** dient zum einfachen Dokumentieren von Standort-Wechseln von IT-Komponenten. Im Vordergrund stehen klassische Arbeitsplatzkomponenten wie Desktop-PCs, Telefone oder Monitore. Unterstützt werden auch logische Gruppierungen durch den [Objekttyp](../grundlagen/struktur-it-dokumentation.md) Arbeitsplatz.

Die Funktionen sind über **Extras → CI-Umzug** zu finden.

[![CI-Umzug](../assets/images/de/i-doit-add-ons/relocate-ci/1-rci.png)](../assets/images/de/i-doit-add-ons/relocate-ci/1-rci.png)

Es öffnen sich zwei Standortbrowser. Hier kann manuell zu einem Objekt navigiert werden oder bequem über eine integrierte Suche.

[![Standortbrowser](../assets/images/de/i-doit-add-ons/relocate-ci/2-rci.png)](../assets/images/de/i-doit-add-ons/relocate-ci/2-rci.png)

In einem konkreten Beispiel wird Hans Olo von Raum 1.06 Open-plan Office in der Zentrale in Düsseldorf nach Raum 1.03 umgezogen.

[![Umzug](../assets/images/de/i-doit-add-ons/relocate-ci/3-rci.png)](../assets/images/de/i-doit-add-ons/relocate-ci/3-rci.png)

Dafür wird das Objekt Hans Olo per Drag and Drop von seinem alten Standort auf den neuen Standort gezogen. Die Ziellokation wird zur besseren Sichtbarkeit grün hervorgehoben.

[![Objekt](../assets/images/de/i-doit-add-ons/relocate-ci/4-rci.png)](../assets/images/de/i-doit-add-ons/relocate-ci/4-rci.png)

Nach dem Klicken auf Umzug Starten öffnet sich ein Umzugsdialog, der links den derzeitigen Standort und rechts den zukünftigen Standort anzeigt. Hier kann ausgewählt werden, welche Komponenten umgezogen werden und welche am alten Standort verbleiben.

Es werden alle Objekte angezeigt, die hierarchisch "unterhalb" des ausgewählten Objektes liegen, im konkreten Fall also alle Arbeitsplatzkomponenten von Hans Olo. Umgezogen wird sein PC und sein Monitor, das Telefon wird abgewählt, da es im alten Raum verbleibt.

[![Umzugsdialog](../assets/images/de/i-doit-add-ons/relocate-ci/5-rci.png)](../assets/images/de/i-doit-add-ons/relocate-ci/5-rci.png)

Ist der Umzug abgeschlossen, wird die Baumansicht aktualisiert.

[![Baumansicht](../assets/images/de/i-doit-add-ons/relocate-ci/6-rci.png)](../assets/images/de/i-doit-add-ons/relocate-ci/6-rci.png)

Der Umzug wird im [Logbuch](../grundlagen/logbuch.md) von i-doit vermerkt, allerdings nur im Objekt Hans Olo.

Um im Nachhinein genauere Informationen über die einzelnen umgezogenen Komponenten zu bekommen, wird der Umzug zusätzlich im Detail im Umzugslogbuch unter **Extras → CI-Umzug → Logbuch** verzeichnet. Hier wird jede einzelne betroffenen Komponente aufgeführt.

[![Logbuch](../assets/images/de/i-doit-add-ons/relocate-ci/7-rci.png)](../assets/images/de/i-doit-add-ons/relocate-ci/7-rci.png)

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
| 1.3 | 07.11.2023 | [Bug] Deselected Objects are moved anyway |
| 1.2 | 05.09.2022 | [Task] PHP 8.0 Compatibility  <br>[Task] Design Compatibility |
| 1.1.1 | 27.07.2022 | [Bug] Relocate-CI: Subordinate objects of persons are also moved when moving a person  <br>[Bug] Truck in location view causes wrong links  <br>[Bug] Relocation of workstation to person causes wrong location in workplace components |
| 1.1 | 25.10.2021 | [Improvement] Function to relocate multiple objects from the same location to another location  <br>[Bug] PHP warning because of different method declarations (e.g. in Report-Browser)  <br>[Bug] Add a dynamic property to the logbook of the Relocate-CI add-on  <br>[Bug] No logs are created by the add-on  <br>[Bug] Logical locations is no longer displayed on the right side |
| 1.0.5 | 10.08.2020 | [Bug] When moving an object physically it looses its logical location  <br>[Bug] Objects can be moved to locations that are not locations  <br>[Bug] Separate srollbars for source and destination selection during relocation  <br>[Bug] Objects can be relocated |
| 1.0.4 | 31.07.2019 | [Improvement] Changed locations in the CMDB will also be shown in the relocate module<br>[Change] When moving a workstation, the remaining devices are no longer to be assigned to an automatically generated workstation<br>[Bug] Relocating a person shows an error message<br>[Bug] Searchfield for object selection does not open nodes<br>[Bug] Malformed autoload for dao<br>[Bug] A relocation does not change the change date<br> |
| 1.0.3 | 02.05.2017 | [Improvement] PHP 7 compatibility<br>[Bug] After relocating a person menu trees are not updated<br>[Bug] PHP warning because of different method declarations (e.g. in Report-Browser)<br>[Bug] relocate_ci: Search fields too long<br>[Bug] When relocating a logical object the child objects will receive a physical location<br>[Bug] While relocating of clients or persons the location of connected terminals will not be updated<br>[Bug] Resultset of both search fields does not show all objects<br>[Bug] After relocating a person or a client the child objects will not be updated accordingly<br>[Bug] Edit, save and cancel buttons in relocate category are not functional<br> |
| 1.0.2 | 31.08.2015 | [Change] Improved dragging and alternative method to drag objects<br> |
| 1.0.1 | 09.03.2015 | Initiales Release |
