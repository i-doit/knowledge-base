# Add-ons entwickeln

Add-ons sind in sich geschlossene Applikationsteile, die sich in das i-doit-Ökosystem eingliedern. Sie können zwar als unabhängige logische Einheiten angesehen werden, sind jedoch nur in i-doit lauffähig. Neben dem Applikations-Kern, welcher elementare Operationen bietet, verfolgt i-doit eben dieses Paradigma und stellt alle verfügbaren Funktionalitäten als teilweise autarke Add-ons bereit, welche zur Eingliederung in i-doit eine ganz bestimmte Architektur aufweisen müssen.

Add-ons können den Funktionsumfang von i-doit nahezu beliebig erweitern. In diesem Artikel wird beschrieben, welche i-doit-Komponenten via Add-on erweitert werden können und was dafür nötig ist.

Folgende Dinge sind in erster Linie notwendig, um ein Add-on zu entwickeln:

1.  Add-on-Identifier (in diesem Artikel verwenden wir "synetics_example")
2.  Minimales Set an PHP-Dateien
3.  package.json

Der Add-on-Identifier
=====================

Ein Add-on wird mit Hilfe eines Strings identifiziert. Dieser String sollte kurz (max. 32 Zeichen), prägnant und kleingeschrieben sein - außerdem darf er keine Sonderzeichen enthalten. Da ein Add-on mit Hilfe dieses Strings identifiziert wird, muss es sich um ein Unikat handeln. Um dies sicherzustellen werden Add-ons von synetics geprüft, bevor sie veröffentlicht werden. Zusammengefasst gelten also folgende Regeln für einen Add-on-Identifier:

*   Prefix mit Firmenname oder Namen (idealerweise bis zu 8 Zeichen)
*   Unikat
*   Kleingeschrieben
*   Keine Sonderzeichen (nur a-z, 0-9 und Unterstriche)
*   Maximal 32 Zeichen
*   Muss mit Buchstaben beginnen

Valide Beispiele dafür wären z.B. acme_api, synetics_reporting oder auch andere Kürzel, wie lfischer_gameit.

Nicht erlaubte Identifier sind: api (existiert bereits) und my-ÄddOn (Bindestrich, Umlaut und Großbuchstaben sind nicht erlaubt).

Der Add-on-Identifier kann auch mit dem folgenden regulären Ausdruck beschrieben / getestet werden: [a-z][a-z0-9_]{0,7}_[a-z0-9_]{1,23}

Der Identifier findet sich an vielen Stellen des Add-on-Quellcodes wieder:

*   Der Add-on-Ordner muss gleich benannt sein.
*   Die Add-on-Klasse (Code und Dateiname) beinhaltet den Identifier: isys_module_synetics_example
*   Der Namespace muss den Identifier beinhalten (mit großem Anfangsbuchstaben), damit der PSR-4-Autoloader funktioniert: \idoit\Module\Synetics_example
*   Der Autoloader für Klassen (Code und Dateiname) der Legacy-Struktur muss den Identifier beinhalten: isys_module_synetics_example_autoload

Minimales Set an PHP-Dateien
============================

Um ein lauffähiges Add-on zu entwickeln, sind einige PHP-Dateien notwendig:

1.  init.php
2.  isys_module_synetics_example.class.php
3.  isys_module_synetics_example_autoload.class.php (optional, nur notwendig falls PHP Klassen in der Legacy-Struktur existieren)
4.  Sprachdateien (optional)

Initialisierung des Add-ons mit Hilfe der init.php
----------------------------------------------------

Die init.php ist die Datei, die vom i-doit-System aufgerufen wird, um ein Add-on zu initialisieren. Üblicherweise wird diese dazu verwendet, Konstanten, Autoloader und Events zu definieren bzw. registrieren. Weitere Informationen sind auf der Seite [Bootstrapping eines Add-ons (init.php)](./boostraping-eines-add-ons.md) zu finden.

Basis Add-on-Klasse isys_module_synetics_example.class.php
------------------------------------------------------------

In der Add-on-Basis Klasse werden u.a. Definitionen für die Darstellung des Add-ons hinterlegt. Das wird über die Konstante DISPLAY_IN_MAIN_MENU geregelt. Ist diese auf den boolschen Wert "true" gesetzt, wird das Add-on im Extras-Menü dargestellt. Darüber hinaus gibt es die Konstante MAIN_MENU_REWRITE_LINK, die genutzt werden kann, um die Art der URL zu definieren:

Ist MAIN_MENU_REWRITE_LINK auf false gesetzt, wird die URL in etwa so aussehen: https://i-doit.int/?moduleID=<module-id\>

Ist MAIN_MENU_REWRITE_LINK auf true gesetzt, sieht die URL dagegen in etwa so aus: https://i-doit.int/synetics_example

Zusätzlich zur init.php muss die öffentliche Methode "init" definiert sein:

    public function init(isys_module_request $p_req)
    {
        return $this;
    }

Diese Methode kann verwendet werden, um klassen-interne Daten vorzubereiten. In der Regel wird sie aber nicht mehr eingesetzt, da die Add-ons eine MVC-Architektur nutzen, die nicht auf die Basis Klasse zurückgreift.

Wenn das Add-on eigene Berechtigungen für das i-doit-Rechtesystem mitbringen soll, muss die Basis Klasse das idoit\AddOn\AuthableInterface Interface implementieren und entsprechend die öffentlich-statische Methode getAuth ausprägen:

    public static function getAuth()
    {
        return isys_auth_synetics_example::instance();
    }

Doch mehr hierzu im Artikel [Benutzerrechte im Add-on nutzen](./benutzerrechte-im-add-on-nutzen.md).

Die package.json\-Datei
-------------------------

Wie auch andere Tools, definieren wir bestimmte Attribute oder Metadaten eines Add-ons in einer speziellen Datei - der package.json. Der Aufbau und Inhalt dieser Datei ist im Artikel [Metadaten eines Add-ons (package.json)](./metadaten-eines-add-ons.md) ausführlich beschrieben.

Eigene Systemeinstellungen
==========================

Ein Add-on kann die Systemeinstellungen unter **Verwaltung → Systemeinstellungen** nutzen und auch selbst erweitern. Weitere Informationen zu Datentypen, Art der Einstellung usw. sind im Artikel [Systemeinstellungen erweitern](./systemeinstellungen-erweitern.md) dokumentiert.
