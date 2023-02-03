Das Dashboard ist der zentrale Einstieg in i-doit und somit das erste das jeder User nach seinem Login sieht - der perfekte Ort, um alle wichtigen Informationen auf einen Blick zu sammeln.

Neben den mitgelieferten Widgets kann theoretisch jedes Add-on eigene Widgets mitbringen und den Usern zur Verfügung stellen. Vor allem bei spezifischen Anwendungsfällen, die sich beispielsweise nicht mit Hilfe des Report Managers abbilden lassen, macht es Sinn eigene Widgets zu programmieren. Hier verhält es sich ähnlich wie bei den [Report views](https://kb.i-doit.com/display/de/Report+Views)!

Ein Widget zu programmieren ist relativ einfach und benötigt nur zwei Dateien. Eine zusätzliche Datei wird vonnöten, wenn das Widget konfigurierbar sein soll. Ansonsten braucht das Widget nur einmalig im System registriert werden - ab diesem Zeitpunkt kann es von jedem Nutzer im Dashboard ausgewählt werden.

Dieser Artikel basiert auf dem “[Example Dashboard](https://bitbucket.org/synetics/addon-example-dashboard)” Add-on und verwendet dies zur Erklärung verschiedener Technologien die wir einsetzen.

Notwendige Dateien
==================

Um ein eigenes Widget zu programmieren werden zwei bzw. drei Dateien benötigt:

*   Eine PHP Klasse zum Vorbereiten der Daten (Backend)
*   Ein Template zur Darstellung (Frontend)
*   Ein optionales Template zur Darstellung der Konfiguration

Es werden keine Datenbank Tabellen benötigt! Auch in diesem Kontext ähneln sich die Dashboard Widgets und Report Views stark - sie benötigen nur jeweils eine Datei für das “Backend” und “Frontend”.

Registrierung des eigenen Widgets
=================================

Ähnlich wie bei Add-ons muss jedes Widget zunächst im System registriert werden und benötigt einen einmaligen Identifier. Dieser wird benutzt, um die PHP Klasse ausfindig zu machen - daher muss der Identifier folgenden Regeln folgen:

*   Name des Add-ons als Prefix
*   Nur Kleinbuchstaben und Unterstriche
*   Keine Sonder-, Leerzeichen oder Umlaute

Im “[Example Dashboard](https://bitbucket.org/synetics/addon-example-dashboard)” Add-on werden zwei Widgets registriert mit den Namen `devday_widget_01` und `devday_widget_02`. Daraus ergeben sich die PHP Klassen Namen `isys_dashboard_widgets_devday_widget_01` und `isys_dashboard_widgets_devday_widget_02`.

Das heißt, der Klassen Name setzt sich zusammen aus “isys\_dashboard\_widgets\_” + Identifier. Um ein Widget zu registrieren kann die Dashboard DAO genutzt werden. Diese Klasse bietet Methoden zum Erstellen und Aktualisieren von Widgets.

Die Registrierung muss beim installieren des Add-ons geschehen, damit es anschließend verfügbar ist. Der zuständige Code könnte folgendermaßen aussehen:

[?](#)

`$database` `= isys_application::instance()->container->get(``'database'``);`

`isys_dashboard_dao::instance(``$database``)->create_new_widget(`

`'Developer Day Widget #01'``,`

`'devday_widget_01'``,`

`'C__WIDGET__DEVDAY_WIDGET_01'``,` `// Optional constant`

`''``,` `// Optional configuration in JSON format`

`''` `// Optional description`

`);`

Wurde das Widget erfolgreich in die Datenbank geschrieben, muss die jeweilige PHP-Klasse nur noch im Code verfügbar sein (Stichwort: [Autoloader](https://kb.i-doit.com/pages/viewpage.action?pageId=66356639)).

Das Widget Backend (PHP)
========================

Bei der Widget-Klasse handelt es sich um eine normale PHP Klasse, die von `isys_dashboard_widgets` erben muss. Im einfachsten Fall muss nur die “render” Methode implementiert werden - diese muss lediglich das HTML des Widgets als “string” zurückliefern.

Üblicherweise werden Smarty-Template verwendet, um diese Aufgabe zu übernehmen. Die globale Smarty-Instanz ist in der Widget-Klasse über `$this->m_tpl` erreichbar.

Das Beispiel-Widget `isys_dashboard_widgets_devday_widget_01` demonstriert in wenigen Zeilen, wie es möglich ist, Variablen an das Template zu übermitteln, dieses zu rendern und als Rückgabewert an das Dashboard zu liefern:

[?](#)

`/**`

`* @param  string $uniqueId`

`* @return string`

`* @throws SmartyException`

`*/`

`public` `function` `render(``$uniqueId``)`

`{`

`// We store a smarty instance in "$this->m_tpl", assign some values and return the rendered template.`

`return` `$this``->m_tpl`

`->assign(``'title'``,` `'Beispiel Widget (mit D3)'``)`

`->assign(``'uniqueId'``,` `$uniqueId``)`

`->fetch(__DIR__ .` `'/widget.tpl'``);`

`}`

Andere verfügbare Services sind die Datenbank- und Sprach-Komponente. Sollten andere Services benötigt werden, können diese aus dem globalen Dependency Injection Container geladen werden über `isys_application::instance()->container->get('...');`

Konfiguration
-------------

Sofern das Widget über eine Konfiguration verfügen soll muss die Methode `has_configuration()` überschrieben werden und true zurückgeben.

Zusätzlich wird die `load_configuration()` Methode benötigt, um das Konfigurations-Popup des Widgets vorzubereiten. Hier muss, genau wie bei `render()`, ein Template zurückgegeben werden - siehe hierzu auch das Beispiel Widget `isys_dashboard_widgets_devday_widget_02`.

Innerhalb der Widget-Klasse kann mit Hilfe der Variable `$this->m_config` auf zuvor gespeicherte Konfiguration zugegriffen werden.

Das Widget Frontend (Template)
==============================

Das Widget-Template unterliegt aktuell keinen Regeln und kann frei gestaltet werden. Hier kann nach belieben mit HTML, Javascript und CSS gearbeitet werden.

Das Beispiel-Widget `isys_dashboard_widgets_devday_widget_01` demonstriert die einfache Nutzung eines Diagramms, dass mittels [D3](https://d3js.org/) und unserer “D3ChartBar” JS-Klasse genutzt werden kann.

Im Beispiel Widget `isys_dashboard_widgets_devday_widget_02` wird dagegen einfach die aktuelle Konfiguration ausgegeben. Dieses Beispiel kann genutzt werden, um im Template entsprechend auf konfigurierte Optionen zu reagieren.

Die Widget Konfiguration
========================

Jedes Widget kann eine optionale Konfiguration mitbringen, um Optionen vom Benutzer in der GUI einstellen zu lassen. Diese Konfiguration funktioniert in etwa wie das Widget selbst - mittels der `load_configuration(array $row, $id)` Methode in der Widget-Klasse können Daten für die Konfiguration gesammelt und vorbereitet werden.Der erste Parameter beinhaltet die Zeile aus `isys_widgets` des Widgets.Der zweite Parameter beinhaltet die ID des Widgets aus `isys_widgets_config`.

Die Methode muss, ähnlich wie `render()`, das gerenderte HTML zurückliefern.  
Auch in dieser Methode ist die aktuelle Konfiguration in `$this->m_config` verfügbar und kann genutzt werden, um Daten vor auszuwählen.

Speichern der Daten
-------------------

Die Konfiguration selbst passiert üblicherweise mit Hilfe von Formularfeldern, in denen der User seine Eingaben machen kann. Es bietet sich an, die verfügbaren Smarty Plugins von i-doit zu nutzen (siehe [Smarty Plugins](https://kb.i-doit.com/display/de/Kategorien+programmieren#Kategorienprogrammieren-Smarty-Pluginssmarty-plugin)).

Das Speichern dieser Daten läuft größtenteils automatisch ab - es wird nur eine Funktion benötigt, um die konkreten Daten an eine interne Schnittstelle zu übergeben. Dies kann man sich im `config.tpl` Template des `isys_dashboard_widgets_devday_widget_02` Widgets ansehen.

Wichtig ist es lediglich, dass beim Klick auf den “Übernehmen” Button des Konfigurations-Popups, die nötigen Daten an eine Stelle zu schreiben:

[?](#)

`$(``'widget-popup-accept'``).on(``'click'``,` `function` `() {`

`// Collect the input data and save them to a JSON object.`

`const data = {`

`title: $F(``'my-title'``),`

`dialog: $F(``'my-dialog'``)`

`};`

`// In order to automatically save the configured information, we pass it as JSON string to this defined field.`

`$(``'widget-popup-config-hidden'``).setValue(Object.toJSON(data));`

`// Also we define the configuration as "changed" in order to save it and reload the widget after the popup closes.`

`$(``'widget-popup-config-changed'``).setValue(``'1'``);`

`});`

  

Dieser Code kann quasi 1:1 übernommen werden - lediglich die Aufbereitung der Daten in der “data”-Variable müsste angepasst werden.

i-doit wird sich anschließend darum kümmern, die übergebenen Daten zu speichern und das Widget neu zu laden, damit die aktuellen Optionen direkt angewendet werden.