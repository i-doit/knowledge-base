# Lokalisierung

i-doit unterstützt Mehrsprachigkeit - diese beschränkt sich aktuell auf Deutsch und Englisch und wird mit Hilfe von "Übersetzungsdateien" abgebildet. Diese Dateien befinden sich im Add-on-Verzeichnis unterhalb des "lang"-Ordners und folgen dem Namensschema "<sprachkürzel>.inc.php" (also z.B. "de.inc.php").

Globale Übersetzungen
---------------------

In i-doit gibt es viele (>400) "universelle" Übersetzungen, wie z.B. "Bezeichnung", "Ja", "Nein" und viele weitere. Diese befinden sich in den i-doit-eigenen Übersetzungsdateien (z.B. "<i-doit>/src/lang/de.inc.php") und beginnen mit "LC__UNIVERSAL__". Sie können nach Belieben im eigenen Add-on verwendet werden. Selbstverständlich werden diese universellen Sprachkonstanten den Bedarf nicht in vollem Umfang abdecken können. Daher besteht die Möglichkeit, spezifische Übersetzungen in eigenen Sprachdateien zu erfassen.

Eigene Übersetzungen
--------------------

Wir verwenden sogenannte "Sprachkonstanten", die immer mit dem String "LC_" beginnen und den Identifier des Add-ons im Namen tragen, um die Einzigartigkeit zu garantieren und eventuelle Kollisionen zu verhindern. Eine weitere "Gruppierung" der Konstanten geschieht über die Wort-Trennung durch zwei Unterstriche ("__"). Diese Gruppierung wird benutzt, um beispielsweise Konstanten für die Navigation, Rechtesystem oder Fehlermeldungen voneinander zu trennen.

Der Inhalt einer Übersetzungsdatei sieht folgendermaßen aus ("<add-on>/lang/de.inc.php"):

    <?php

    return [
        'LC__EXAMPLE'                                      => 'Beispiel Add-on',
        'LC__EXAMPLE__SETTINGS'                            => 'Beispiel Add-on Einstellungen',
        'LC__EXAMPLE__SETTINGS__SIMPLE_TEXT'               => 'Einfaches Textfeld',
        'LC__EXAMPLE__SETTINGS__SIMPLE_TEXT_DESCRIPTION'   => 'Textfeld Beschreibung',
        'LC__EXAMPLE__SETTINGS__SIMPLE_SELECT'             => 'Einfacher Dialog',
        'LC__EXAMPLE__SETTINGS__SIMPLE_SELECT_DESCRIPTION' => 'Dialog Beschreibung',
        'LC__EXAMPLE__SETTINGS__YES_NO_SELECT'             => 'Ja / Nein Feld',
        'LC__EXAMPLE__SETTINGS__YES_NO_SELECT_DESCRIPTION' => 'Ja / Nein Feld Beschreibung',
        'LC__EXAMPLE__SETTINGS__INTEGER'                   => 'Ganzzahl Feld',
        'LC__EXAMPLE__SETTINGS__INTEGER_DESCRIPTION'       => 'Ganzzahl Feld Beschreibung',
        'LC__EXAMPLE__SETTINGS__FLOAT'                     => 'Kommazahl Feld',
        'LC__EXAMPLE__SETTINGS__FLOAT_DESCRIPTION'         => 'Kommazahl Feld Beschreibung',
        'LC__EXAMPLE__AUTH__EXAMPLE_ACTION'                => 'Beispiel Aktion',
        'LC__EXAMPLE__TREE__FIRST_PAGE'                    => 'Erste Seite',
        'LC__EXAMPLE__TREE__SECOND_PAGE'                   => 'Zweite Seite',
        'LC__EXAMPLE__TREE__THIRD_PAGE'                    => 'Dritte Seite',
    ];

Seit i-doit 1.10.2 müssen Übersetzungen nicht mehr händisch in der init.php registriert werden. i-doit wird die nötigen Übersetzungen selbstständig einbinden.

Verwendung im PHP-Code
----------------------

Um Übersetzungen im PHP-Code zu nutzen, muss der "language"-Service innerhalb des Dependency-Injection-Containers benutzt werden:

    $language = isys_application::instance()->container->get('language');

    // Get a single translation.
    $language->get('LC__EXAMPLE');

    // Concatenate multiple translations in one string.
    $language->get_in_text('See LC__EXAMPLE > LC__EXAMPLE__TREE__THIRD_PAGE...');

Verwendung in Smarty-Templates
------------------------------

Wir liefern ein [Smarty-Plugin](https://www.smarty.net/docs/en/api.register.plugin.tpl) aus, um auch im Template-Kontext auf übersetzte Sprachkonstanten zuzugreifen:

    <p>[{isys type="lang" ident="LC__EXAMPLE__AUTH__EXAMPLE_ACTION"}]</p>

Verwendung in Javascript
------------------------

Für die Verwendung in Javascript muss ein kleiner Umweg über ein Smarty-Template gegangen werden. Hier muss unter Umständen mit einem Parameter gearbeitet werden, damit keine HTML-Entities im Javascript ausgegeben werden:

<!-- Inside a smarty template -->

    <script type="text/javascript">
        (function() {
            'use strict';
            
            idoit.Translate.set('LC__EXAMPLE', '[{isys type="lang" ident="LC__EXAMPLE" p_bHtmlEncode=false}]');

            // ...

            var addOnTitle = idoit.Translate.get('LC__EXAMPLE');
        })();
    </script>

Alternativ ist es möglich, Übersetzungen mittels Ajax-Request oder Javascript-Dateien mittels Smarty "include" zu laden, um dann innerhalb der Javascript-Datei mit Smarty zu arbeiten - davon raten wir allerdings ab!

!!! info "Smarty in Javascript"

    Wir empfehlen, jeglichen Smarty-Code aus Javascript-Dateien fernzuhalten!