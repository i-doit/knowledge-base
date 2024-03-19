<!-- TRANSLATED by md-translate -->
# Bootstrapping eines Add-ons (init.php)

# Bootstrapping d'un add-on (init.php)

In erster Ebene des Add-on-Verzeichnisses muss eine init.php-Datei liegen. Diese wird vom i-doit-System automatisch inkludiert, um das Add-on im Kern zu registrieren. Vom Entwickler sollte die init.php dazu genutzt werden, um Add-on-spezifische Vorbereitungen zu treffen. Dazu gehört unter anderem das Definieren von Konstanten oder das Registrieren der Autoloader und Routen. Ebenso können hier Callbacks via "Signal-Slot"-Komponente registriert werden.

Un fichier init.php doit se trouver au premier niveau du répertoire des add-ons. Celui-ci est automatiquement inclus par le système i-doit afin d'enregistrer l'add-on dans le noyau. Le développeur doit utiliser le fichier init.php pour effectuer des préparations spécifiques à l'add-on. Cela comprend entre autres la définition de constantes ou l'enregistrement des autoloaders et des routes. De même, les callbacks peuvent être enregistrés ici via le composant "Signal-Slot".

Weiterhin können innerhalb der init.php-Report-Views und Dashboard-Widgets registriert werden, damit i-doit an den entsprechenden Stellen darauf zugreifen kann.

En outre, il est possible d'enregistrer des vues de rapport et des widgets de tableau de bord dans le fichier init.php afin qu'i-doit puisse y accéder aux endroits appropriés.

Die init.php muss so wenig Logik wie möglich mitliefern, damit die Performance nicht darunter leidet. Die init.php-Dateien aller Add-ons werden bei jedem Request durchlaufen!

Le fichier init.php doit contenir le moins de logique possible afin de ne pas nuire aux performances. Les fichiers init.php de tous les add-ons sont parcourus à chaque requête !

## Prüfen, ob das Add-on aktiv ist

## Vérifier si l'add-on est actif

Die erste Codeanweisung innerhalb der init.php muss prüfen, ob das Add-on aktiv ist. Nur dann darf weiterer Code ausgeführt werden!

La première instruction de code dans le fichier init.php doit vérifier si l'add-on est actif. Ce n'est qu'alors que le code suivant peut être exécuté !

Der nötige Code dazu sieht folgendermaßen aus:

Le code nécessaire à cet effet se présente comme suit :

```
if (isys_module_manager::instance()->is_active('example'))
{
    // Hier werden nun Konstanten, Autoloader und Events definiert bzw. registriert.
}
```

**Alle weiteren Anweisungen dürfen lediglich innerhalb dieser Überprüfung stattfinden!**

**Toutes les autres instructions ne peuvent avoir lieu que dans le cadre de cette vérification !

## Autoloader PSR-4 und Legacy

## Autochargeur PSR-4 et Legacy

### PSR-4

### PSR-4

Für PHP-Klassen, die nach PSR-4 erstellt werden, bietet i-doit eine einfache Möglichkeit, den Add-on-Namespace in den Autoloader zu implementieren:

Pour les classes PHP créées selon la norme PSR-4, i-doit offre un moyen simple d'implémenter l'espace de nommage des modules complémentaires dans l'autoloader :

```
// Adding the PSR-4 autoloader for files in the new structure (underneath "<add-on>/src").
\idoit\Psr4AutoloaderClass::factory()->addNamespace('idoit\Module\Example', __DIR__ . '/src/');
```

### Legacy Code

### Code hérité

Für PHP-Klassen im Legacy-Format (wie z.B. die Rechtesystem- oder Kategorie-Klassen) muss der entsprechende Legacy-Autoloader verwendet werden. Üblicherweise liegt dieser direkt im Add-on-Verzeichnis und sollte in etwa so aussehen:

Pour les classes PHP au format hérité (comme par exemple les classes de système de droits ou de catégories), il faut utiliser l'autoloader hérité correspondant. En général, celui-ci se trouve directement dans le répertoire des add-ons et devrait ressembler à quelque chose comme ça :

```
class isys_module_example_autoload extends isys_module_manager_autoload
{
    /**
    * Add-on specific legacy autoloader.
    *
    * @param string $className
    *
    * @return boolean
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
```

Der Legacy-Autoloader wird folgendermaßen in der init.php registriert:

L'autochargeur patrimonial est enregistré dans init.php de la manière suivante :

```
if (file_exists(__DIR__ . '/isys_module_example_autoload.class.php') && (include_once __DIR__ . '/isys_module_example_autoload.class.php'))
{
    spl_autoload_register('isys_module_example_autoload::init');
}
```

## Einstellungen für [Mandanten-Name] erweitern

## Étendre les paramètres de [nom du client].

Die dargestellten Einstellungen für [Mandanten-Name] unter **Verwaltung → [Mandanten-Name] Verwaltung → Einstellungen für [Mandanten-Name]** können mittels Add-on erweitert werden. Weitere Informationen hierzu befinden sich im Artikel [Systemeinstellungen erweitern](systemeinstellungen-erweitern.md).

Les paramètres représentés pour [Nom du mandant] sous **Administration → [Nom du mandant] Administration → Paramètres pour [Nom du mandant]** peuvent être étendus au moyen d'un add-on. De plus amples informations à ce sujet se trouvent dans l'article [Étendre les paramètres du système](systemeinstellungen-erweitern.md).