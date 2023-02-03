Die `package.json`\-Datei kann in etwa mit einer `composer.json` verglichen werden. Der Inhalt dieser Datei gibt Aufschluss über die Inhalte des Add-ons, die Version und Abhängigkeiten. 

Hier finden wir unter anderem den Add-on-Namen, Identifikator, Autor, Beschreibung und Version. Der Inhalt der Datei kann folgendermaßen aussehen:

[?](#)

`{`

`"title"``:` `"Example add-on"``,`

`"name"``:` `"LC__MODULE__EXAMPLE"``,`

`"identifier"``:` `"example"``,`

`"author"``:` `"synetics GmbH"``,`

`"version"``:` `"1.0"``,`

`"description"``:` `"Example add-on for i-doit"``,`

`"type"``:` `"addon"``,`

`"icon"``:` `"images/icons/silk/information.png"``,`

`"files"``: [`

`"init.php"``,`

`"isys_module_example.class.php"``,`

`"isys_module_example_autoload.class.php"``,`

`"package.json"`

`],`

`"sql-tables"``: [],`

`"requirements"``: {`

`"core"``:` `">= 1.11"`

`},`

`"dependencies"``: {`

`"php"``: [`

`"json"``,`

`"mysqli"`

`]`

`}`

`}`

Title
-----

Der hier hinterlegte String wird im Admin-Center dargestellt. Es ist hier nicht nötig, eine Sprachkonstante zu verwenden.

Name
----

Die hinterlegte Sprachkonstante wird als Name des Add-ons verwendet, wenn dieses in i-doit dargestellt wird (zum Beispiel im Extras-Menü oder dem Rechtesystem).

Identifier
----------

Der Identifier ist mit die wichtigste Information der `package.json`, da dieser für eine Menge interner Logik und für die Identifikation des Add-ons benötigt wird. Detaillierte Informationen befinden sich im Artikel [Add-ons entwickeln](/display/de/Add-ons+entwickeln).

Author
------

Die hier hinterlegte Information wird im Admin-Center dargestellt.

Version
-------

Die hier hinterlegte Version wird im Admin-Center dargestellt. Weitere Logik ist damit nicht verbunden.

Description
-----------

Hier kann eine optionale Beschreibung des Add-ons vergeben werden. Üblicherweise ist diese Beschreibung in Englisch verfasst und beschränkt sich auf 255 Zeichen.

Type
----

Als "`type`" muss "`addon`" angegeben werden. Andere Typen dürfen nur von Kern-Komponenten verwendet werden.

Icon
----

Hier kann der Pfad für ein (optionales) Icon angegeben werden. Dies wird zum Beispiel im Extras-Menü dargestellt wird. Üblicherweise hat ein solches Icon die Abmessungen von 16x16 Pixel. Das Format wird zwar nicht vorgeschrieben, wir empfehlen aber die Nutzung von `PNG`. Der anzugebende Pfad ist relativ ab dem i-doit-Wurzelverzeichnis anzugeben.

Files
-----

Das Array der Dateien wird beim Deinstallieren eines Add-ons verwendet. Nachdem die `uninstall`\-Methode aufgerufen wird, werden alle hier aufgeführten Dateien und Ordner unwiderruflich gelöscht. Die Dateipfade müssen relativ ab dem Add-on-Verzeichnis angegeben werden.

Sql-Tables
----------

Das Array der SQL-Tabellen wird beim Deinstallieren eines Add-ons verwendet. Nachdem die `uninstall-`Methode aufgerufen wird, werden alle hier aufgeführten Datenbanktabellen unwiderruflich gelöscht.

Requirements
------------

Aktuell (Stand i-doit 1.11.x) ist es nur möglich, die i-doit-Version als Voraussetzung zu verwenden, wie z.B.:

[?](#)

`"requirements"``: {`

`"core"``:` `">= 1.11"`

`}`

Dependencies
------------

Aktuell (Stand 1.11.x) ist es nur möglich, PHP-Extensions als Abhängigkeiten zu definieren, wie z.B.:

[?](#)

`"dependencies"``: {`

`"php"``: [``"spl"``,` `"json"``,` `"mysqli"``]`

`}`