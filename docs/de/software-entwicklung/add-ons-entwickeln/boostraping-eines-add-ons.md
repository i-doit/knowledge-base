# Bootstrapping eines Add-ons (init.php)

In erster Ebene des Add-on-Verzeichnisses muss eine init.php\-Datei liegen. Diese wird vom i-doit-System automatisch inkludiert, um das Add-on im Kern zu registrieren. Vom Entwickler sollte die init.php dazu genutzt werden, um Add-on-spezifische Vorbereitungen zu treffen. Dazu gehört unter anderem das Definieren von Konstanten oder das Registrieren der Autoloader und Routen. Ebenso können hier Callbacks via "Signal-Slot"-Komponente registriert werden.

Weiterhin können innerhalb der init.php\-Report-Views und Dashboard-Widgets registriert werden, damit i-doit an den entsprechenden Stellen darauf zugreifen kann.

Die init.php muss so wenig Logik wie möglich mitliefern, damit die Performance nicht darunter leidet. Die init.php\-Dateien aller Add-ons werden bei jedem Request durchlaufen!

Prüfen, ob das Add-on aktiv ist
-------------------------------

Die erste Codeanweisung innerhalb der init.php muss prüfen, ob das Add-on aktiv ist. Nur dann darf weiterer Code ausgeführt werden!

Der nötige Code dazu sieht folgendermaßen aus:

    if (isys_module_manager::instance()->is_active('example'))
    {
        // Hier werden nun Konstanten, Autoloader und Events definiert bzw. registriert.
    }

**Alle weiteren Anweisungen dürfen lediglich innerhalb dieser Überprüfung stattfinden!**

Autoloader PSR-4 und Legacy
---------------------------

### PSR-4

Für PHP-Klassen, die nach PSR-4 erstellt werden, bietet i-doit eine einfache Möglichkeit, den Add-on-Namespace in den Autoloader zu implementieren:

    // Adding the PSR-4 autoloader for files in the new structure (underneath "<add-on>/src").
    \idoit\Psr4AutoloaderClass::factory()->addNamespace('idoit\Module\Example', __DIR__ . '/src/');

### Legacy Code

Für PHP-Klassen im Legacy-Format (wie z.B. die Rechtesystem- oder Kategorie-Klassen) muss der entsprechende Legacy-Autoloader verwendet werden. Üblicherweise liegt dieser direkt im Add-on-Verzeichnis und sollte in etwa so aussehen:

    class isys_module_example_autoload extends isys_module_manager_autoload
    {
        /**
        * Add-on specific legacy autoloader.
        *
        * @param   string $className
        *
        * @return  boolean
        */
        public static function init($className)
        {
            $base = '/src/classes/modules/example/';
            $classList = [
                'isys_example_example' => 'example/isys_example_example.class.php',
                // ...
            ];

            if (isset($classList[$className]) && parent::include_file($base . $classList[$className])) {
                isys_caching::factory('autoload')->set($className, $base . $classList[$className]);
                
                return true;
            }

            return false;
        }
    }

Der Legacy-Autoloader wird folgendermaßen in der init.php registriert:

    if (file_exists(__DIR__ . '/isys_module_example_autoload.class.php') && (include_once __DIR__ . '/isys_module_example_autoload.class.php'))
    {
        spl_autoload_register('isys_module_example_autoload::init');
    }

Systemeinstellungen erweitern
-----------------------------

Die dargestellten Systemeinstellungen unter **Verwaltung → Systemeinstellungen** können mittels Add-on erweitert werden. Weitere Informationen hierzu befinden sich im Artikel [Systemeinstellungen erweitern](systemeinstellungen-erweitern.md).