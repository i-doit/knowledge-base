Von Zeit zu Zeit kann es nötig sein große Datenmengen aus einem Fremd-System nach i-doit zu überführen - sowohl für eine Initiale Befüllung als auch für regelmäßige Synchronisationen und Updates. Zu diesem Zweck bietet i-doit einige Schnittstellen, sogenannte Imports an, um Daten aus externen Quellen in die CMDB zu übernehmen.

Unter anderem bieten wir den CSV Import und die JSON-RPC API für generische Daten an. Auch für andere Tools, wie JDisc und OCS gibt es fertige Lösungen. Doch manchmal ist eine komplett neue bzw. eigene Lösung notwendig, um die Daten zuverlässig und ohne großen “Mehraufwand” nach i-doit zu überführen.

Zu diesem Zweck ist es möglich einen eigenen Import schreiben.

**Achtung!** Dieses Thema richtet sich an fortgeschrittene Entwickler, die bereits Know-How mit dem i-doit System gesammelt haben und sowohl die verschiedenen Kategorie-Arten als auch Attribut-Typen kennen.

Technische Import Möglichkeiten
===============================

Um Daten zu importieren gibt es mehrere Optionen. Von CSV-Import über JDisc, OCS und einige weitere… Wir konzentrieren uns in diesem Artikel allerdings nur auf die “technischen” Möglichkeiten einen Import zu entwickeln.

Konkret gibt es hier zwei Optionen die sich anbieten:

Import mit Hilfe der API
========================

Bevor wir uns in die Programmierung stürzen, möchte ich darauf hinweisen, dass ein solcher Import über die API erzeugt werden und vermutlich sogar einigen Ärger ersparen kann, wenn es um die folgenden Themen geht...

Dialog, Dialog+ und Objektreferenzen
------------------------------------

Von der API sind wir es gewöhnt, Daten in einer “lesbaren” Form übergeben zu können. Statt der ID “3” für einen Hersteller übergeben wir stattdessen den Namen im Klartext. Der API Code wird automatisch im entsprechenden Attribut bzw. der hinterlegten Datenbank-Tabelle nach diesem Namen suchen und die korrekte ID referenzieren.  
Zusätzlich werden Dialoge mit Abhängigkeiten (wie z.B. zwischen Modell und Hersteller) intern verarbeitet, sodass es zu keinen falschen Referenzen kommt.

Sollte ein übergebener Datensatz nicht gefunden werden, wird die API diesen für uns erzeugen und auch wieder entsprechend referenzieren.

Validierung
-----------

Die API wird beim erstellen und aktualisieren von Kategoriedaten die konfigurierte Validierung berücksichtigen und jegliche Fehler melden. In diesem Fall werden die Änderungen nicht übernommen - der Prozess wird unterbrochen.

Prozessoren
-----------

Die API besitzt interne Helfer für einige Kategorien, die nicht ohne weiteres speicherbar sind - konkret geht es hierbei um Kategorien, die nur mittels “extra Logik” sinnvoll befüllt werden können, weil sie über spezifische Logik verfügen.

Als Beispiel möchte ich die “Hostadresse” Kategorie aufführen. Hier gibt es indirekte Abhängigkeiten zwischen der eingegebenen IP-Adresse und dem hinterlegten Netz - IPv6 Adressen dürfen nicht in einem IPv4 Netz hinterlegt werden. Ebenso darf keine IP-Adresse gespeichert werden, wenn diese außerhalb des ausgewählten Netzesbereiches liegt.  
Der jeweilige Kategorie-Prozessor übernimmt eben diese Aufgabe.

Ein weiteres Beispiel ist die “SLA” Kategorie, die eine sehr spezifische GUI und auch Daten besitzt, um die einzelnen Tage und Servicezeiten zu dokumentieren.

Import mit Hilfe der “sync” Methoden
====================================

Entschließen wir uns dennoch dazu einen “eigenen” Import zu schreiben, werden wir diesen mit Hilfe der “sync”-Methoden unserer Kategorie-DAOs umsetzen.

Im Gegensatz zum Import mittels API, müssen wir die folgenden notwendigen Prozeduren selbst implementieren:

1.  Das jeweilige Zielobjekt finden oder erstellen
2.  Kategoriedaten auf Konsistenz prüfen und Referenzen auflösen
3.  Kategorie-DAOs vorbereiten
4.  Daten validieren und Struktur vorbereiten
5.  Vorbereitete Daten an die “sync”-Methode übergeben
6.  Logbucheinträge schreiben

Überblick der notwendigen Komponenten
=====================================

Mit den letzten i-doit Major-Versionen haben wir immer mehr entkoppelte Komponenten vorgestellt, welche die Programmierung eigenere Imports extrem vereinfachen. Hierzu müssen wir uns mit den folgenden Komponenten vertraut machen:

Datenquelle
-----------

Diese muss existieren, denn ohne eine Datenquelle können keine Daten nach i-doit übertragen werden :) Hier ist es von Vorteil mit Datentypen zu arbeiten, die in PHP einfach zu verarbeiten sind, wie z.B. Datenbanken, JSON, XML oder auch YAML.

Die Daten müssen vom Code aus erreich- und lesbar sein!

Mapping
-------

Dieser Schritt ist essentiell und sollte inhaltlich wohl überlegt werden. Die i-doit CMDB verfügt über knapp 150 globale und 80 spezifische Kategorien, die für die Dokumentation verwendet werden können. Zusätzlich gibt es natürlich noch die benutzerdefinierten Kategorien, die von uns für spezifische Informationen genutzt werden können.

Die Aufgabe besteht darin, die Quelldaten auf Kategorie-Attribute zu mappen, sodass i-doit (bzw. unser Import) diese korrekt verarbeiten kann. Wir können die GUI des CSV Import als praktisches Beispiel nehmen, um uns ein solches Mapping anzusehen - diese Zuordnung von Quelldaten zu i-doit Kategorie-Attributen ist genau,was wir auf Code-Ebene bauen müssen.

Um unseren Import ohne Umwege mit den Daten versorgen zu können, sollten wir das gleiche Format nutzen, welches auch schon in der API genutzt wird:

[?](#)

`{`

`"Kategorie Konstante"``: [`

`{``"Attribut"``:` `"Wert"``},`

`{``"Attribut 2"``:` `"Wert 2"``}`

`]`

`}`

Oder mit konkreten Daten:

  

[?](#)

`{`

`"C__CATG__CPU"``: [`

`{``"title"``:` `"CPU #1"``,` `"frequency"``: 3.6,` `"frequency_unit"``: 3},`

`{``"title"``:` `"CPU #2"``,` `"manufacturer"``:` `"Intel"``,` `"type"``:` `"Core i7"``}`

`]`

`}`

Wir sehen hier eine Mischung aus ID-Referenzen und lesbaren Werten (siehe `"frequency_unit": 3` und `"manufacturer": "Intel"`). Beim manuellen Import via Kategorie “sync” müssen wir alle Referenzen auflösen - i-doit kann intern nur mit ID-Referenzen arbeiten!

Wie das funktioniert wird im nächsten Punkt erläutert. Der Artikel [Kategorien programmieren](https://kb.i-doit.com/display/de/Kategorien+programmieren) und [Attribut-Definition](https://kb.i-doit.com/display/de/Attribut-Definition) werden uns beim Verständnis helfen!

AttributeDataCollector
----------------------

Diese Komponente kann genutzt werden, um Datenreferenzen, wie “Hersteller: Intel”, aufzulösen. Sie funktioniert auf Attribut-Basis und kümmert sich automatisch um die übergebenen Typen. Hierbei benötigen wir konkret das jeweilige Attribut:

[?](#)

`use` `idoit\Component\Property\Property;`

`use` `idoit\Module\Cmdb\Component\AttributeDataCollector\Collector;`

`$property` `=` `'<property definition from category DAO>'``;`

`$data` `= null;`

`$collector` `=` `new` `Collector();`

`// We need to check if we are handling a property in the “old” format.`

`if` `(!``$property` `instanceof` `Property) {`

`$property` `= Property::createInstanceFromArray(``$property``);`

`}`

`// Only process if the property can be handled by the collector.`

`if` `(``$collector``->isApplicable(``$property``)) {`

`$data` `=` `$collector``->getApplicableType()->collectData(``$property``, false);`

`}`

Am Ende wird in der $data Variable eine Liste der verfügbaren Daten existieren - diese kann nun auf passende Inhalte geprüft werden. Kann keine Übereinstimmung festgestellt  werden, muss individuell entschieden werden, ob ein Datensatz zur Laufzeit erzeugt werden soll.

CiMatcher
---------

Der “CiMerger” ist eine Komponente zum finden von Objekten mittels verschiedener Attribute wie z.B. dem Hostnamen, Seriennummer, Mac Adresse etc. derzeit existieren 19 Identifikatoren zum finden von Objekten.

Die Nutzung ist sehr einfach gestaltet:

[?](#)

`$numberOfNecessaryMatches` `= 2;`

`$matcher` `=` `new` `CiMatcher(MatchConfig::factory(``$numberOfNecessaryMatches``, isys_application::instance()->container));`

`$match` `=` `$matcher``->match([`

`new` `MatchKeyword(Hostname::KEY,` `$hostname``),`

`new` `MatchKeyword(ModelSerial::KEY,` `$serialNumber``),`

`new` `MatchKeyword(IpAddress::KEY,` `$ipAddress``),`

`new` `MatchKeyword(Mac::KEY,` `$macAddress``),`

`]);`

`$foundObjectId` `=` `$match``->getId();`

Sofern kein Objekt gefunden werden konnte wird `getId()` lediglich null zurückliefern. Sollten mehrere Objekte gefunden werden können diese mittels `getMatchResult()` ausgelesen werden.

Achtung!

Aufgrund der PHP 8 kompatibilität wird der Methodenname “match” sich zukünftig ändern!

Merger

Der “Merger” hat nur eine einzige Aufgabe: übergebene Datensätze auf Vollständigkeit zu prüfen und ggf. mit vorhandenen Daten oder Standardwerten der CMDB zu ergänzen.

Und wieso brauchen wir so etwas? Die “sync”-Methode der Kategorie DAOs benötigt immer komplette Datensätze, um die jeweiligen Daten zu erstellen oder aktualisieren.  
Wenn ein oder mehrere Attribute nicht Bestandteil der Daten sind würden diese beim überführen in die Datenbank genullt werden.

Object und Kategorie DAO
------------------------

Um Kategoriedaten tatsächlich in die Datenbank zu schreiben werden die verschiedenen Kategorie-DAO Klassen benötigt. Diese können wir mit Hilfe der Kategorie Konstanten aus unserer API-Ähnlichen Struktur finden und nutzen.

Für Objektdaten kann die “CMDB DAO” verwendet werden - oder auch jede beliebige Kategorie-DAO, da diese von der CMDB-DAO erben.

Zum erstellen von Objekten gibt es eine Methode die genutzt werden muss: “`isys_cmdb_dao->insert_new_obj()`”. Objekte dürfen nicht mit eigenem SQL erzeugt werden, da sonst einige notwendige Prozeduren übersprungen werden, die vom System benötigt wird.

Gut zu Wissen!
==============

Bevor wir mit dem Import-Code beginnen, möchte ich zunächst auf ein paar Punkte hinweisen:

Erstellen ist einfach, aktualisieren schwierig
----------------------------------------------

Wenn lediglich neue Objekte und neue Kategorie Daten erstellt werden sollen ist der Import um ein vielfaches einfacher zu entwickeln, da hierbei keine Daten “zusammengeführt” werden müssen.

Gerade bei Multi-Value Kategorien kann das “Erkennen” des zu aktualisierenden Datensatzes kompliziert und ressourcenaufwändig sein. Man kann diesen Schritt zwar stark vereinfachen indem man pro Kategorie eigenen Code schreibt, der den korrekten Datensatz “erkennt” - allerdings macht das nur Sinn, wenn der Import ein paar wenige Kategorien importiert.

Multivalue Kategorien importieren
---------------------------------

Pro “sync” wird immer nur EIN Datensatz erstellt oder aktualisiert. Multiple Datensätze für Multivalue-Kategorien müssen demnach in einer Schleife durchlaufen werden.

Den Import / Code kapseln
-------------------------

Wenn der eigene Import bzw. dessen Code gekapselt wird sind wir als Entwickler in der Lage diesen an verschiedenen Stellen zu verwenden. Konkret  könnte der Import durch eine solche Architektur ohne großen Mehraufwand, sowohl für einen Konsolen Command, als auch innerhalb der GUI oder der API genutzt werden (genau wie es auch beim CSV Import der Fall ist).

Konsistenzprüfung der Daten
---------------------------

Wie zuvor erwähnt müssen zum Beispiel Dialog und Objekt Referenzen aufgelöst werden. Das heißt, Hersteller-Daten, wie “Intel” oder “Cisco”, müssen im System gefunden (oder erstellt) werden und der Code muss statt dieser String-Werte mit IDs arbeiten.

Zu diesem Zweck gibt es eine “AttributeDataCollector” Komponente (siehe weiter oben).

Basis Import Code
=================

Der Import mit Hilfe der sync Methode ist relativ einfach gehalten und benötigt nur wenige Zeilen Code. Es muss hierbei unbedingt beachtet werden, dass dieser “einfache” Import nur die Basis darstellt - es folgt eine Beschreibung des Codes und eine Liste mit “fehlenden Features”, die bei Bedarf individuell entwickelt werden müssen.

Beispiel-Daten im JSON Format
-----------------------------

Diese Beispiel-Daten wurden im Vorfeld bereits in ein Format gebracht mit dem wir ohne weiteres arbeiten können - das heißt die Schritte zur Beschaffung und der “Mapping” Prozess sind hier bereits abgeschlossen.

[?](#)

`[`

`{`

`"C__CATG__GLOBAL"``: [`

`{`

`"title"``:` `"My empty Object"`

`}`

`]`

`},`

`{`

`"C__CATG__GLOBAL"``: [`

`{`

`"title"``:` `"My filled Object"``,`

`"purpose"``: 3`

`}`

`],`

`"C__CATG__CPU"``: [`

`{`

`"title"``:` `"cpu1"``,`

`"manufacturer"``: 1,`

`"type"``: 2,`

`"cores"``: 3`

`},`

`{`

`"title"``:` `"CPU 2"``,`

`"manufacturer"``:` `"Intel"``,`

`"type"``:` `"Core i5"``,`

`"cores"``: 4,`

`"frequency"``: 2.5,`

`"frequency_unit"``:` `"Ghz"`

`}`

`],`

`"C__CATG__MODEL"``: [`

`{`

`"manufacturer"``:` `"Custom Manufacturer"``,`

`"title"``:` `"Custom Title"``,`

`"productid"``:` `"Custom Product ID"``,`

`"service_tag"``:` `"Custom Service Tag"``,`

`"serial"``:` `"Custom Serial"`

`}`

`],`

`"C__CATG__IP"``: [`

`{`

`"primary"``: 0,`

`"active"``: 0,`

`"net"``: 20,`

`"ipv4_address"``:` `"127.0.0.1"`

`},`

`{`

`"primary"``: 1,`

`"active"``: 1,`

`"net"``: 21,`

`"ipv6_address"``:` `"affe::"`

`}`

`],`

`"C__CATG__SLA"``: [`

`{`

`"service_id"``:` `"Service ID"``,`

`"service_level"``: 1,`

`"monday_time"``:` `"08:00 - 16:00"``,`

`"tuesday_time"``:` `"08:00 - 16:00"`

`}`

`]`

`}`

`]`

Basis Code
----------

Der folgende Code bietet eine funktionierende Grundlage zum erstellen eines eigenen Imports. Ein solcher Code sollte am besten in eine eigene Klasse oder funktion gekapselt sein, damit sie von verschiedenen Stellen aus aufrufbar ist - zum Beispiel von einem Command, dem i-doit Frontend oder auch einem eigenen API Endpunkt aus.

[?](#)

|     |     |
| --- | --- |
| 1<br><br>2<br><br>3<br><br>4<br><br>5<br><br>6<br><br>7<br><br>8<br><br>9<br><br>10<br><br>11<br><br>12<br><br>13<br><br>14<br><br>15<br><br>16<br><br>17<br><br>18<br><br>19<br><br>20<br><br>21<br><br>22<br><br>23<br><br>24<br><br>25<br><br>26<br><br>27<br><br>28<br><br>29<br><br>30<br><br>31<br><br>32<br><br>33<br><br>34<br><br>35<br><br>36<br><br>37<br><br>38<br><br>39<br><br>40<br><br>41<br><br>42 | `use` `idoit\Module\Cmdb\Component\SyncMerger\Config;`<br><br>`use` `idoit\Module\Cmdb\Component\SyncMerger\Merger;`<br><br>`$data` `=` `'{JSON Data}'``;`<br><br>`$dao` `= isys_application::instance()->container->get(``'cmdb_dao'``);`<br><br>`$database` `= isys_application::instance()->container->get(``'database'``);`<br><br>`$objectTypeId` `= C__OBJTYPE__CLIENT;` `// ID of the “client” type (10)`<br><br>`foreach` `(``$data` `as` `$objectData``) {`<br><br>`$objectTitle` `=` `$objectData``[``'C__CATG__GLOBAL'``][0][``'title'``] ?:` `'Created by import: '` `.` `date``(``'Y-m-d H:i:s'``);`<br><br>`$objectId` `=` `$dao``->insert_new_obj(``$objectTypeId``, null,` `$objectTitle``, null, C__RECORD_STATUS__NORMAL);`<br><br>`foreach` `(``$objectData` `as` `$categoryConst` `=>` `$categoryData``) {`<br><br>`$category` `=` `$dao``->get_cat_by_const(``$categoryConst``);`<br><br>`if` `(!``class_exists``(``$category``[``'class_name'``])) {`<br><br>`continue``;`<br><br>`}`<br><br>`/** @var isys_cmdb_dao_category $categoryDao */`<br><br>`$categoryDao` `=` `$category``[``'class_name'``]::instance(``$database``);`<br><br>`foreach` `(``$categoryData` `as` `$entryData``) {`<br><br>`// Will contain either 'true' or a associative array with 'key' => 'validation error message'`<br><br>`$validationResult` `=` `$categoryDao``->validate(``$entryData``);`<br><br>`if` `(``$validationResult` `=== true) {`<br><br>`// Die Kategoriedaten müssen in ein bestimmtes Format gebracht werden damit der Merger damit arbeiten kann`<br><br>`$fakeEntry` `= [`<br><br>`Config::CONFIG_DATA_ID    => null,`<br><br>`Config::CONFIG_PROPERTIES =>` `array_map``(``function` `(``$prop``) {` `return` `[C__DATA__VALUE =>` `$prop``]; },` `$entryData``)`<br><br>`];`<br><br>`$syncData` `= Merger::instance(Config::instance(``$categoryDao``,` `$objectId``,` `$fakeEntry``))->getDataForSync();`<br><br>`$categoryEntryId` `=` `$categoryDao``->sync(``$syncData``,` `$objectId``, isys_import_handler_cmdb::C__CREATE);`<br><br>`}`<br><br>`}`<br><br>`}`<br><br>`}` |

Erklärung des Code
------------------

Den Code möchte ich gerne Schritt für Schritt erklären:

*   Unser Import beginnt mit den übergebenen Daten - in welcher Form dies geschieht obliegt dem Rahmen des Import (Datenbankverbindung, Third-Party-API, Datei im Dateisystem, …). Diese sollten zu diesem Zeitpunkt (unmittelbar vor dem Import) bereits dem vorgeschlagenen Format entsprechen _(Zeile 4)_
*   Anschließend holen wir uns die “CMDB DAO” und die Datenbank Komponente aus unserem Dependency Injection Container.  
    Zusätzlich definieren wir einen statischen Objekttypen, als was unsere Objekte importiert werden sollen (das könnte auch mittels eigenem Code oder Parametern verbessert werden) _(Zeilen 6-7)_
*   Wir erzeugen eine “foreach” Schleife, die für jeden Eintrag ein Objekt importieren wird _(Zeilen 10+)_
*   In den folgenden Zeilen wird ein Objekt erstellt mit dem Namen aus den übergebenen Daten - falls hier kein Name definiert wird verwenden wir einen Fallback String “Created by import: …” mit dem aktuellen Datum + Uhrzeit _(Zeile 11)_
*   Es wird also aktuell IMMER ein Objekt erzeugt - soll stattdessen ein vorhandenes Objekt GEFUNDEN und weiterverwendet werden, muss eine eigene Logik implementiert werden.  
    Für die folgenden Zeilen wird zwingend eine Objekt ID benötigt! _(Zeile 13)_
*   Wir erzeugen eine weitere “foreach”-Schleife, die nun die Kategorien des Objekts verarbeiten wird - zunächst versuchen wir auf Basis der verwendeten Kategorie Konstante die DAO Klasse der gewünschten Kategorie zu instanzieren.  
    Schlägt dies fehl überspringen wir die Daten - solche Stellen sollten üblicherweise das Verhalten in einem Log festhalten, damit Fehler im nachhinein festgestellt werden können _(Zeilen 15+)_
*   Wenn der Code eine Kategorie DAO gefunden hat erzeugen wir eine dritte “foreach” Schleife die nun durch die einzelnen Kategorie-Datensätze läuft _(Zeilen 16-25)_
*   Auf den ersten Zeilen dieser Schleife rufen wir die “validate” Methode der DAO auf, die unsere eingegebenen Daten mit der Konfigurierten Validierung aus der Verwaltung abgleicht. Sollte es hier keine Probleme geben werden wir den Rückgabewert “true” erhalten - andernfalls ein Array mit Einträgen fehlgeschlagener Validierungen. _(Zeilen 27-29)_  
    **ACHTUNG** - die Validierung stellt keine Konsistenzprüfung der Daten dar!
*   Auf den nächsten Zeilen werden die Daten mit Hilfe des “Merger” in ein Format gebracht, mit dem die “sync” Methode der DAO arbeiten kann.  
    Wir nennen dies “fake entry” weil wir ohne Datensatz ID arbeiten und den Merger nur nutzen um die fehlenden Kategorie Daten mit Standardwerten zu vervollständigen _(Zeilen 31-36)_
*   Wir übergeben die vorbereiteten Daten schließlich an die “sync” Methode und übergeben den “create” Modus um neue Datensätze zu erstellen _(Zeile 38)_

Optionale Verbesserungen
------------------------

Wie bereits geschrieben handelt es sich bei diesem Code um eine lauffähige “Basis” Version eines Imports - das heißt der Code ist in seiner aktuellen Form nutzbar und wird übergebene Daten importieren können!

Es fehlen allerdings einige (optionale) Funktionen die ein Import üblicherweise liefert. Diese Punkte möchte ich hier auflisten:

*   Dieser Import ist auf das erstellen von Daten beschränkt - es können damit keine existierenden Daten aktualisiert werden. Dies ist ein äußerst aufwändiger Prozess der am besten für jede betroffene Kategorie händisch implementiert wird
*   Ein Import sollte seinen Fortschritt und auch unerwartete Probleme in Form eines Logs aufzeichnen. Um eine Logger Instanz zu erzeugen können wir zu Beginn des Imports folgende Zeile nutzen:  
    `$logger = idoit\Component\Logger::factory('my-import', BASE_DIR . 'log/my-import_' . date('Y-m-d') . '.log');`
*   Die $entryData Daten müssen auf allgemeine Konsistenz geprüft werden - Objekte und Dialog-Felder benötigen immer Referenzen mittels IDs. Falls hier String-Werte übergeben werden wird der Import für den entsprechenden Wert fehlschlagen
*   Bevor die Daten an den “Merger” übergeben werden sollte ein Kategorie Prozessor verwendet werden der die Daten für die entsprechende Kategorie vorbereitet
*   Aktuell schreibt der Import keinerlei Daten in das CMDB Logbuch, das muss sowohl für die Objekte als auch Kategorie Daten nachgeholt werden