Wie unter [Add-ons installieren, aktualisieren und aktivieren](/display/de/Add-ons+installieren%2C+aktualisieren+und+aktivieren) beschrieben, muss sich ein Add-on bzw. dessen Code im eigenen Verzeichnis unter `<i-doit>/src/classes/modules/<identifier>` befinden. Theoretisch lässt sich innerhalb dieses Ordners eine beliebige Struktur anlegen. Wir haben folgende Struktur im i-doit-Team etabliert und raten dazu, diese auch für die eigene Entwicklung zu nutzen:

![](/download/attachments/66356095/add-on-structure.png?version=3&modificationDate=1533720491535&api=v2)

Grundsätzlich wird "PSR-4"-konformer PHP-Code unterhalb von "`src`" positioniert. "Legacy"-Klassen werden üblicherweise in jeweils eigenen Ordnern hinterlegt - bitte hierzu auch das Kapitel [Autoloading](/pages/viewpage.action?pageId=66355910) beachten:

*   **api/  
    **Legacy: Hier befinden sich die Model-Klassen für die API. Siehe auch [API erweitern](/display/de/API+erweitern).
*   `**assets/  
    **`Der "assets"-Ordner wird für Javascript, CSS und Bild-Dateien verwendet. Die Unterordner könnten demnach "`js`", "`css`" und "`img`" heißen.
*   `**auth/**`  
    Legacy: Wird für sämtlichen Rechtesystem-Code verwendet. Siehe auch [Benutzerrechte im Add-on nutzen](/display/de/Benutzerrechte+im+Add-on+nutzen).
*   `**example/**`  
    Legacy: Dient als Beispiel für eigenen Code im "legacy"-Format.
*   `**install/**`  
    Hier befinden sich Dateien, die zur Installation und/oder Aktualisierung eines Add-ons verwendet werden (`update_data.xml`, `update_sys.xml` und `update_files.xml`). Siehe auch [Add-ons installieren, aktualisieren und aktivieren](/display/de/Add-ons+installieren%2C+aktualisieren+und+aktivieren).
*   `**lang/**`  
    In diesem Ordner befinden sich Übersetzungen (`de.inc.php` und `en.inc.php`) für Deutsch und Englisch.
*   `**src/**`  
    Dies ist der Ordner für Code im "PSR-4"-Format. Der Add-on-Namespace (hier: `idoit\Module\Example`) sollte auf diesen Ordner gelegt werden. Siehe auch [Routing und MVC](/display/de/Routing+und+MVC).
*   `**templates/**`  
    Üblicherweise wird dieser Ordner für Smarty-Templates verwendet.
*   `**vendor/**`  
    Ist ein optionales Verzeichnis, das von Composer benutzt wird. Ein Add-on kann beliebige Composer-Pakete mitliefern. Es ist allerdings darauf zu achten, keine Paket-Konflikte mit dem i-doit-Kern zu schaffen!
*   `**CHANGELOG**`  
    Optionaler Changelog, der die Änderungen aller Add-on-Versionen auflisten sollte.
*   `**composer.json**`  
    Von Composer erstellte Datei, die definiert, welche Third-Party-Pakete installiert werden sollten. Weitere Informationen sind auf [getcomposer.org](https://getcomposer.org/) nachzulesen. Diese Datei ist nur für Entwickler relevant und ist im finalen Add-on-Paket unnötig.
*   **`composer.lock`**  
    Von Composer erstellte Datei, die den aktuell installierten Paket-Stand beinhaltet. Diese Datei sollte im Repository hinterlegt werden! Ebenso wie package.json ist diese Datei nur für Entwickler relevant und im finalen Paket unnötig.
*   `**init.php**`  
    Die "`init.php`"-Datei ist notwendig, um diverse Vorbereitungen für das Add-on zu treffen; zum Beispiel werden hier Autoloader registriert und Konstanten definiert. Siehe auch [Bootstrapping eines Add-ons (init.php)](/pages/viewpage.action?pageId=66356639).
*   `**isys_module_example_autoload.class.php**`  
    Diese Autoloader-Klasse ist notwendig, sobald Code im "legacy"-Format verwendet wird (z.B. `API`, `Rechtesystem`, `Kategorien`, ...). Siehe auch [Bootstrapping eines Add-ons (init.php)](/pages/viewpage.action?pageId=66356639).
*   **`isys_module_example.class.php`**  
    Dies ist die "Basis"-Klasse für Add-ons. Sie ist zwingend erforderlich!
*   `**Makefile**`  
    Hierbei handelt es sich um ein einfaches "Make"-Skript, um Add-on-ZIP-Pakete zu erstellen.  
    Intern wird die korrekte Struktur vorbereitet, Entwickler-Dateien (z.B. `Makefile`, `package.json` usw.) werden gelöscht und das ZIP, unter Berücksichtigung der `VERSION`, erstellt.
*   `**package.json**`  
    Die "`package.json`"-Datei wird vorausgesetzt und beinhaltet wichtige Metainformationen zum Add-on - siehe auch [Metadaten eines Add-ons (package.json)](/pages/viewpage.action?pageId=66356642).
*   **`README.md`**  
    Eine “README.md” soll generelle Informationen über das Add-on im Markdown-Format bereitstellen. Auch weiterführende Themen können behandelt werden. Es würde sich beispielsweise anbieten, Entwicklung-, Deployment- und Build-spezifische Informationen ebenfalls zu erfassen.
*   `**VERSION**`  
    Eine einfache Datei ohne Endung, welche lediglich die aktuelle Version des Add-ons beinhaltet. Diese Datei ist optional, wird allerdings im **`Makefile`**\-Skript verwendet.