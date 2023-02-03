Die Report Views werden in i-doit für spezifische Anwendungsfälle verwendet, die sich mit Hilfe des “Report Manager” nicht abbilden lassen oder z.B. über interaktive Elemente verfügen.

Der Vorteil einer Report View ist, dass diese mittels PHP Logik und einem spezifischen Template Daten der CMDB verarbeiten und ausgeben kann, anstatt wie bei “klassischen” Reports nur eine SQL Query auszuführen und als Tabelle darzustellen.

Daher eignen Sie sich ausgezeichnet für die Abbildung komplexer Abfragen, welche optional parametrisiert werden können, um eine große Variation an ähnlichen Sachverhalten abzudecken. Ferner bieten Report Views die Möglichkeit der Auswahl von anderen Visualisierungsformen als eine einfache Tabelle.

Für eine Report View müssen drei Dinge gegeben sein:

*   Eine “Report View” PHP Klasse mit der nötigen Logik
*   Ein Template zum darstellen des Reports in der Web GUI
*   Die registrierung der View

Dieser Artikel basiert auf dem existierenden Beispiel Add-on “[Report view example](https://bitbucket.org/synetics/addon-example-reportview/commits/)” - dieses ist für alle [Entwicklungspartner](https://www.i-doit.com/partner/developer/) frei zugänglich und bietet eine funktionsfähige Report View die zu Lernzwecken verwendet werden kann.

Report PHP Klasse
=================

Die PHP Klasse muss von `isys_report_view` erben und die nötigen Interface Klassen implementieren:

*   `name`  
    Diese Methode liefert lediglich die Bezeichnung der Report View zurück.
*   `description`  
    Ähnlich wie `name()`, nur für die Beschreibung.
*   `template`  
    Muss den absoluten Pfad zum zuständigen Template zurückliefern, das i-doit System wird das Template entsprechend selbstständig laden sobald die Report View geöffnet wird.
*   `viewtype`  
    Diese Methode liefert den Typen der Report View zurück. Hierbei handelt es sich um einen einfach String.
*   `init`  
    Hierbei handelt es sich um eine optionale Methode, die vor jeglicher verarbeitung aufgerufen wird.
*   `start`  
    Diese Methode wird von i-doit verwendet wenn die Report View aufgerufen wird. Hier muss die initiale Datenaufbereitung für das Frontend passieren, damit das Template darauf zugreifen kann.  
    Dieser Prozess sollte möglichst schlank gehalten werden - jegliche “aufwändige” Report Logik sollte mittels Ajax Anfrage geschehen.
*   `ajax_request`  
    Eine weitere optionale Methode zum verarbeiten von Ajax Anfragen aus dem Frontend.

In diesem Beispiel Add-on trägt die Klasse den Namen `example_report_view_01.class.php` - dieser Name muss den Add-on Identifier (hier “`example_report`”) beinhaltet, der Rest kann frei vergeben werden. Die PHP Klasse selbst muss den gleichen Namen tragen.

Initiale `start()` Methode
--------------------------

Sobald eine Report View im i-doit Frontend geöffnet wird durchläuft das Backend zunächst die optionale `init()` und dann die `start()` Methode. Diese fungiert als Einstiegspunkt in die Report View und wird üblicherweise dafür genutzt alle initialen Daten zu laden, die anschließend im Smarty Template verwendet werden.

Wir können hier die [TOM Logik](https://kb.i-doit.com/display/de/Kategorien+programmieren#Kategorienprogrammieren-kategorien-programmieren-tom) nutzen, ähnlich wie bei den Kategorien - im Beispiel Add-on nutzen wir diese Methode zum vorbereiten des Status Filters.

Daten via `ajax_request()` nachladen
------------------------------------

Diese Methode wird automatisch gerufen, wenn die Report View URL um den “ajax” Parameter erweitert wird. Ab i-doit 1.16.3 wird auch hier zunächst die optionale `init()` Methode aufgerufen um eventuelle Daten vorzubereiten.

Damit diese Methode die korrekten Daten an das Frontend zurück liefert müssen drei Dinge gegeben sein:

*   Der korrekte Content-Type muss gesetzt werden (im Beispiel “application/json”)
*   Die Daten müssen ausgegeben werden (im Beispiel mittels “`echo "...";`”)
*   Der Request muss beendet werden um eventuelle Folge-Logik zu unterbinden (im Beispiel mittels “`die();`”)

Die ausgegebenen Werte können anschließend im Template empfangen und weiterverwendet werden.

Template
========

Das Template muss die komplette Darstellung der Report View übernehmen, üblicherweise wird hier mittels [Smarty](https://www.smarty.net/docs/en/) ein Formular mit Filtern und eine Tabelle mit Informationen dargestellt. Alternativ kann aber zum Beispiel mittels [D3](https://d3js.org/) oder anderen Tools eine grafische Auswertung präsentiert werden.

Im Beispiel Add-on sehen wir ein Dialogfeld dessen Daten beim Klick des Buttons per Ajax an das Backend gesendet werden. Die Antwort des Backens beinhaltet einige Information zu Objekttypen die dann sowohl in einer Tabelle als auch in Form eines Tortendiagramms dargestellt werden.

Report View registrieren
========================

Damit die eigene View im Report Manager auftaucht, muss sie zunächst registriert werden. Dazu nutzen wir einen speziellen Register, dem wir lediglich den absoluten Pfad zur Report View Klasse übergeben:

[?](#)

`$path` `=` `'/reportview/isys_maintenance_reportview_maintenance_export.class.php'``;`

`isys_register::factory(``'additional-report-views'``)->set(__DIR__ .` `$path``);`

Dieser Schritt sollte in der init.php Datei des eigenen Add-ons geschehen, da diese von i-doit immer gelesen und verarbeitet wird. Außerdem kann somit sichergestellt werden das die Report View nur dann auftaucht, wenn das Add-on im Admin-Center “aktiv” geschaltet ist:

[?](#)

`if` `(isys_module_manager::instance()->is_active(``'example_reportview'``)) {`

`// ...`

`isys_register::factory(``'additional-report-views'``)`

`->set(__DIR__ .` `'/report-view/example_report_view_01.class.php'``);`

`}`

Sobald dieser Schritt getan ist und die Report View Klasse mittels Autoloading verfügbar ist, lässt sich die [Report View in i-doit öffnen](https://kb.i-doit.com/display/de/Report+Manager#ReportManager-ReportViews) und ausführen.