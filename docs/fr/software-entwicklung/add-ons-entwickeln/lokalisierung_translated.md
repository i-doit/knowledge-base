<!-- TRANSLATED by md-translate -->
# Lokalisierung

# Localisation

i-doit unterstützt Mehrsprachigkeit - diese beschränkt sich aktuell auf Deutsch und Englisch und wird mit Hilfe von "Übersetzungsdateien" abgebildet. Diese Dateien befinden sich im Add-on-Verzeichnis unterhalb des "lang"-Ordners und folgen dem Namensschema "<sprachkürzel>.inc.php" (also z.B. "de.inc.php").

i-doit supporte le multilinguisme - celui-ci se limite actuellement à l'allemand et à l'anglais et est représenté à l'aide de "fichiers de traduction". Ces fichiers se trouvent dans le répertoire des add-ons, sous le dossier "lang", et suivent le schéma de nommage "<code langue>.inc.php" (donc par ex. "fr.inc.php").

## Globale Übersetzungen

## Traductions globales

In i-doit gibt es viele (>400) "universelle" Übersetzungen, wie z.B. "Bezeichnung", "Ja", "Nein" und viele weitere. Diese befinden sich in den i-doit-eigenen Übersetzungsdateien (z.B. "<i-doit>/src/lang/de.inc.php") und beginnen mit "LC__UNIVERSAL__". Sie können nach Belieben im eigenen Add-on verwendet werden. Selbstverständlich werden diese universellen Sprachkonstanten den Bedarf nicht in vollem Umfang abdecken können. Daher besteht die Möglichkeit, spezifische Übersetzungen in eigenen Sprachdateien zu erfassen.

Dans i-doit, il existe de nombreuses (>400) traductions "universelles", comme par exemple "désignation", "oui", "non" et bien d'autres. Elles se trouvent dans les fichiers de traduction propres à i-doit (par ex. "<i-doit>/src/lang/fr.inc.php") et commencent par "LC__UNIVERSAL__". Ils peuvent être utilisés à volonté dans le propre add-on. Bien entendu, ces constantes linguistiques universelles ne pourront pas couvrir l'ensemble des besoins. C'est pourquoi il est possible de saisir des traductions spécifiques dans ses propres fichiers de langue.

## Eigene Übersetzungen

## Propres traductions

Wir verwenden sogenannte "Sprachkonstanten", die immer mit dem String "LC_" beginnen und den Identifier des Add-ons im Namen tragen, um die Einzigartigkeit zu garantieren und eventuelle Kollisionen zu verhindern. Eine weitere "Gruppierung" der Konstanten geschieht über die Wort-Trennung durch zwei Unterstriche ("__"). Diese Gruppierung wird benutzt, um beispielsweise Konstanten für die Navigation, Rechtesystem oder Fehlermeldungen voneinander zu trennen.

Nous utilisons ce que nous appelons des "constantes de langage", qui commencent toujours par la chaîne "LC_" et portent l'identifiant du module complémentaire dans leur nom, afin de garantir leur unicité et d'éviter d'éventuelles collisions. Un autre "regroupement" des constantes se fait par la séparation des mots par deux traits de soulignement ("__"). Ce regroupement est utilisé par exemple pour séparer les constantes pour la navigation, le système de droits ou les messages d'erreur.

Der Inhalt einer Übersetzungsdatei sieht folgendermaßen aus ("<add-on>/lang/de.inc.php"):

Le contenu d'un fichier de traduction se présente comme suit ("<add-on>/lang/fr.inc.php") :

```
<?php

return [
    'LC__EXAMPLE'                                      => 'Beispiel Add-on',
    'LC__EXAMPLE__SETTINGS'                            => 'Beispiel Add-on Einstellungen',
    'LC__EXAMPLE__SETTINGS__SIMPLE_TEXT'               => 'Einfaches Textfeld',
    'LC__EXAMPLE__SETTINGS__SIMPLE_TEXT_DESCRIPTION'   => 'Textfeld Beschreibung',
    'LC__EXAMPLE__SETTINGS__SIMPLE_SELECT'             => 'Einfacher Dialog',
    'LC__EXAMPLE__SETTINGS__SIMPLE_SELECT_DESCRIPTION' => 'Dialog Beschreibung',
    'LC__EXAMPLE__SETTINGS__YES_NO_SELECT'             => 'Ja / Nein Feld',
    'LC__EXAMPLE__SETTINGS__YES_NO_SELECT_DESCRIPTION' => 'Ja / Nein Feld Beschreibung',
    'LC__EXAMPLE__SETTINGS__INTEGER'                   => 'Ganzzahl Feld',
    'LC__EXAMPLE__SETTINGS__INTEGER_DESCRIPTION'       => 'Ganzzahl Feld Beschreibung',
    'LC__EXAMPLE__SETTINGS__FLOAT'                     => 'Kommazahl Feld',
    'LC__EXAMPLE__SETTINGS__FLOAT_DESCRIPTION'         => 'Kommazahl Feld Beschreibung',
    'LC__EXAMPLE__AUTH__EXAMPLE_ACTION'                => 'Beispiel Aktion',
    'LC__EXAMPLE__TREE__FIRST_PAGE'                    => 'Erste Seite',
    'LC__EXAMPLE__TREE__SECOND_PAGE'                   => 'Zweite Seite',
    'LC__EXAMPLE__TREE__THIRD_PAGE'                    => 'Dritte Seite',
];
```

Seit i-doit 1.10.2 müssen Übersetzungen nicht mehr händisch in der init.php registriert werden. i-doit wird die nötigen Übersetzungen selbstständig einbinden.

Depuis i-doit 1.10.2, les traductions ne doivent plus être enregistrées manuellement dans le fichier init.php. i-doit intégrera lui-même les traductions nécessaires.

## Verwendung im PHP-Code

## Utilisation dans le code PHP

Um Übersetzungen im PHP-Code zu nutzen, muss der "language"-Service innerhalb des Dependency-Injection-Containers benutzt werden:

Pour utiliser des traductions dans le code PHP, il faut utiliser le service "language" à l'intérieur du conteneur d'injection de dépendances :

```
$language = isys_application::instance()->container->get('language');

// Get a single translation.
$language->get('LC__EXAMPLE');

// Concatenate multiple translations in one string.
$language->get_in_text('See LC__EXAMPLE > LC__EXAMPLE__TREE__THIRD_PAGE...');
```

## Verwendung in Smarty-Templates

## Utilisation dans les templates Smarty

Wir liefern ein [Smarty-Plugin](https://www.smarty.net/docs/en/api.register.plugin.tpl) aus, um auch im Template-Kontext auf übersetzte Sprachkonstanten zuzugreifen:

Nous livrons un [plugin Smarty](https://www.smarty.net/docs/en/api.register.plugin.tpl) pour accéder aux constantes de langue traduites également dans le contexte du modèle :

```
<p>[{isys type="lang" ident="LC__EXAMPLE__AUTH__EXAMPLE_ACTION"}]</p>
```

## Verwendung in Javascript

## Utilisation en Javascript

Für die Verwendung in Javascript muss ein kleiner Umweg über ein Smarty-Template gegangen werden. Hier muss unter Umständen mit einem Parameter gearbeitet werden, damit keine HTML-Entities im Javascript ausgegeben werden:

Pour l'utilisation en Javascript, il faut faire un petit détour par un modèle Smarty. Ici, il faut parfois travailler avec un paramètre pour qu'aucune entité HTML ne soit émise en Javascript :

<!-- Inside a smarty template -->

```
<script type="text/javascript">
    (function() {
        'use strict';

        idoit.Translate.set('LC__EXAMPLE', '[{isys type="lang" ident="LC__EXAMPLE" p_bHtmlEncode=false}]');

        // ...

        var addOnTitle = idoit.Translate.get('LC__EXAMPLE');
    })();
</script>
```

Alternativ ist es möglich, Übersetzungen mittels Ajax-Request oder Javascript-Dateien mittels Smarty "include" zu laden, um dann innerhalb der Javascript-Datei mit Smarty zu arbeiten - davon raten wir allerdings ab!

Il est également possible de charger des traductions à l'aide d'une requête Ajax ou des fichiers Javascript à l'aide de Smarty "include", pour ensuite travailler avec Smarty à l'intérieur du fichier Javascript - nous le déconseillons toutefois !

!!! info "Smarty in Javascript"

! !! info "Smarty en javascript"

```
Wir empfehlen, jeglichen Smarty-Code aus Javascript-Dateien fernzuhalten!
```