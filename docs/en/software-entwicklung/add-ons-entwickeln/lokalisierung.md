---
title: Localization
description: "i-doit supports multilingualism -- currently limited to German and English, managed through translation files."
icon:
status:
lang: en
---
# Localization

i-doit supports multilingualism -- currently limited to German and English, managed through "translation files". These files are located in the add-on directory underneath the "lang" folder and follow the naming scheme "<language code>.inc.php" (e.g., "de.inc.php").

## Global Translations

In i-doit, there are many (>400) "universal" translations, such as "Designation", "Yes", "No", and many more. These are located in i-doit's own translation files (e.g., "<i-doit>/src/lang/de.inc.php") and begin with "LC__UNIVERSAL__". They can be used freely in your own add-on. Of course, these universal language constants will not be able to cover all needs. Therefore, it is possible to create specific translations in your own language files.

## Custom Translations

We use so-called "language constants" that always begin with the string "LC_" and include the add-on identifier in their name to guarantee uniqueness and prevent potential collisions. An additional "grouping" of constants is done through word separation using double underscores ("__"). This grouping is used to separate constants for navigation, authorization system, or error messages from each other, for example.

The content of a translation file looks as follows ("<add-on>/lang/de.inc.php"):

    <?php

    return [
        'LC__EXAMPLE'                                      => 'Example Add-on',
        'LC__EXAMPLE__SETTINGS'                            => 'Example Add-on settings',
        'LC__EXAMPLE__SETTINGS__SIMPLE_TEXT'               => 'Einfaches Textfeld',
        'LC__EXAMPLE__SETTINGS__SIMPLE_TEXT_DESCRIPTION'   => 'Textfeld Description',
        'LC__EXAMPLE__SETTINGS__SIMPLE_SELECT'             => 'Einfacher Dialog',
        'LC__EXAMPLE__SETTINGS__SIMPLE_SELECT_DESCRIPTION' => 'Dialog Description',
        'LC__EXAMPLE__SETTINGS__YES_NO_SELECT'             => 'Ja / Nein field',
        'LC__EXAMPLE__SETTINGS__YES_NO_SELECT_DESCRIPTION' => 'Ja / Nein field Description',
        'LC__EXAMPLE__SETTINGS__INTEGER'                   => 'Ganzzahl field',
        'LC__EXAMPLE__SETTINGS__INTEGER_DESCRIPTION'       => 'Ganzzahl field Description',
        'LC__EXAMPLE__SETTINGS__FLOAT'                     => 'Kommazahl field',
        'LC__EXAMPLE__SETTINGS__FLOAT_DESCRIPTION'         => 'Kommazahl field Description',
        'LC__EXAMPLE__AUTH__EXAMPLE_ACTION'                => 'Example Aktion',
        'LC__EXAMPLE__TREE__FIRST_PAGE'                    => 'Erste Seite',
        'LC__EXAMPLE__TREE__SECOND_PAGE'                   => 'Zweite Seite',
        'LC__EXAMPLE__TREE__THIRD_PAGE'                    => 'Dritte Seite',
    ];

Since i-doit 1.10.2, translations no longer need to be manually registered in the init.php. i-doit will include the required translations automatically.

## Usage in PHP Code

To use translations in PHP code, the "language" service from the Dependency Injection Container must be used:

    $language = isys_application::instance()->container->get('language');

    // Get a single translation.
    $language->get('LC__EXAMPLE');

    // Concatenate multiple translations in one string.
    $language->get_in_text('See LC__EXAMPLE > LC__EXAMPLE__TREE__THIRD_PAGE...');

## Usage in Smarty Templates

We provide a [Smarty plugin](https://www.smarty.net/docs/en/api.register.plugin.tpl) to also access translated language constants in the template context:

    <p>[{isys type="lang" ident="LC__EXAMPLE__AUTH__EXAMPLE_ACTION"}]</p>

## Usage in JavaScript

For usage in JavaScript, a small detour via a Smarty template is necessary. Under certain circumstances, a parameter must be used to prevent HTML entities from being output in JavaScript:

<!-- Inside a smarty template -->

    <script type="text/javascript">
        (function() {
            'use strict';

            idoit.Translate.set('LC__EXAMPLE', '[{isys type="lang" ident="LC__EXAMPLE" p_bHtmlEncode=false}]');

            // ...

            var addOnTitle = idoit.Translate.get('LC__EXAMPLE');
        })();
    </script>

Alternatively, it is possible to load translations via an Ajax request or include JavaScript files via Smarty "include" to then work with Smarty within the JavaScript file -- however, we advise against this!

!!! info "Smarty in JavaScript"

    We recommend keeping any Smarty code out of JavaScript files!
