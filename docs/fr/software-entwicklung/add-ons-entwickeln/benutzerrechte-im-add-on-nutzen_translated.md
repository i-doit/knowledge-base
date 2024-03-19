<!-- TRANSLATED by md-translate -->
# Benutzerrechte im add on nutzen

# Utiliser les droits d'utilisateur dans l'add on

Um das Rechtesystem im eigenen Add-on zu nutzen, muss nicht viel Logik geschrieben werden. Es ist lediglich eine "auth"-Klasse isys_auth_example mit etwas Boilerplate-Code nötig. Zusätzlich muss die Add-on-Basis Klasse das Interface "\idoit\AddOn\AuthableInterface" implementieren und die definierte Methode "getAuth" mitliefern.

Pour utiliser le système de droits dans son propre add-on, il n'est pas nécessaire d'écrire beaucoup de logique. Seule une classe "auth" isys_auth_example avec un peu de code boilerplate est nécessaire. De plus, la classe de base de l'add-on doit implémenter l'interface "\idoit\AddOn\AuthableInterface" et fournir la méthode définie "getAuth".

## Anpassung der Add-on-Basis Klasse

## Adaptation de la classe de base des add-ons

```
class isys_module_example extends isys_module implements isys_module_interface, AuthableInterface
{
    // ...

    /**
    * Get related auth class for module.
    *
    * @return isys_auth_example
    */
    public static function getAuth()
    {
        return isys_auth_example::instance();
    }
}
```

## Die eigene auth-Klasse

## La propre classe auth

Die im oberen Beispiel genannte Klasse isys_auth_example muss folgendermaßen aussehen, damit i-doit diese verwenden kann:

La classe isys_auth_example mentionnée dans l'exemple ci-dessus doit ressembler à ceci pour qu'i-doit puisse l'utiliser :

```
class isys_auth_example extends isys_auth implements isys_auth_interface
{
    /**
    * Container for singleton instance
    *
    * @var isys_auth_example
    */
    private static $instance;

    /**
    * Method for returning the available auth-methods. This will be used for the GUI.
    *
    * @return array
    * @throws Exception
    */
    public function get_auth_methods()
    {
        return [];
    }

    /**
    * Get ID of related module.
    *
    * @return integer
    */
    public function get_module_id()
    {
        return C__MODULE__EXAMPLE;
    }

    /**
    * Get title of related module.
    *
    * @return string
    */
    public function get_module_title()
    {
        return 'LC__MODULE__EXAMPLE';
    }

    /**
    * Retrieve singleton instance of authorization class.
    *
    * @return isys_auth_example
    */
    public static function instance()
    {
        // If the DAO has not been loaded yet, we initialize it now.
        if (self::$m_dao === null) {
            self::$m_dao = new isys_auth_dao(isys_application::instance()->container->get('database'));
        }

        if (self::$instance === null) {
            self::$instance = new self;
        }
        return self::$instance;
    }
}
```

Die wichtigste Methode dieser Klasse lautet "get_auth_methods" und definiert die späteren Rechte. Der übrige Code sollte möglichst komplett übernommen und nur zweckmäßig verändert werden (z.B. verwendete Konstanten).

La méthode la plus importante de cette classe est "get_auth_methods" et définit les droits ultérieurs. Le reste du code doit être repris dans son intégralité si possible et ne doit être modifié que dans un but précis (par ex. les constantes utilisées).

!!! info "Autoloader nicht vergessen"

! !! info "Ne pas oublier l'autochargeur

```
Da es sich hier um Klassen im Legacy-Format handelt, müssen diese im Legacy-Autoloader registriert werden.
```

## Eigene Rechte via get_auth_methods definieren

## Définir ses propres droits via get_auth_methods

i-doit liefert einige Standard-Rechte-Typen, die wir in der "get_auth_methods"-Methode wiederverwenden können, ohne weiteren Code schreiben zu müssen:

i-doit fournit quelques types de droits standard que nous pouvons réutiliser dans la méthode "get_auth_methods" sans devoir écrire de code supplémentaire :

```
public function get_auth_methods()
{
    return [
        'example_action' => [
            'title'   => 'LC__EXAMPLE__AUTH__EXAMPLE_ACTION',
            'type'    => 'boolean',
            'rights'  => [isys_auth::VIEW, isys_auth::EDIT],
            'default' => [isys_auth::VIEW]
        ]
    ];
}
```

In diesem Beispiel verwenden wir den "boolean"-Typen. Dieser hat keinerlei Parameter, sondern funktioniert wie ein boolescher Wert: Das Recht ist da oder nicht.

Dans cet exemple, nous utilisons le type "booléen". Celui-ci n'a aucun paramètre, mais fonctionne comme une valeur booléenne : le droit existe ou n'existe pas.

Die übrigen Parameter übernehmen folgende Rollen:

Les autres paramètres jouent les rôles suivants :

* "title": Der hier hinterlegte String (Sprachkonstante) wird in der Rechtesystem-GUI dargestellt.
* "type": Definiert die darzustellenden Parameter innerhalb der GUI:
    - boolean: Stellt keinen Parameter dar.
    - object: Stellt einen Objektbrowser dar. Objekte können bei der Rechteprüfung als Parameter übergeben werden.
    - object_type: Stellt einen Dialog mit allen Objekt-Typen dar. Diese können bei der Rechteprüfung als Parameter übergeben werden.
    - category: Stellt einen Dialog mit allen Kategorien dar. Diese können bei der Rechteprüfung als Parameter übergeben werden.
    - dialog_tables: Stellt einen Dialog mit allen Dialogfeldern dar. Diese können bei der Rechteprüfung als Parameter übergeben werden.
    - custom_dialog_tables: Stellt einen Dialog mit allen benutzerdefinierten Dialogfeldern dar. Diese können bei der Rechteprüfung als Parameter übergeben werden.
* "rights": Definiert, welche Rechte für diese Definition verfügbar sind:
    - isys_auth::VIEW
    - isys_auth::EDIT
    - isys_auth::DELETE
    - isys_auth::EXECUTE
    - isys_auth::ARCHIVE
    - isys_auth::CREATE
    - isys_auth::SUPERVISOR
* "default": Die hier hinterlegten Rechte werden als Standard vorausgewählt, wenn der Benutzer das Recht in der GUI hinzufügt

* "title" : la chaîne de caractères (constante linguistique) déposée ici est représentée dans l'interface utilisateur graphique du système de droits.
* "type" : Définit les paramètres à afficher dans l'interface utilisateur graphique :
    - boolean : ne représente aucun paramètre.
    - object : Représente un navigateur d'objets. Les objets peuvent être transmis comme paramètres lors du contrôle des droits.
    - object_type : Représente un dialogue avec tous les types d'objets. Ceux-ci peuvent être transmis en tant que paramètres lors du contrôle des droits.
    - category : Représente une boîte de dialogue avec toutes les catégories. Celles-ci peuvent être transmises comme paramètres lors du contrôle des droits.
    - dialog_tables : Représente un dialogue avec tous les champs de dialogue. Celles-ci peuvent être transmises comme paramètres lors du contrôle des droits.
    - custom_dialog_tables : Représente un dialogue avec tous les champs de dialogue définis par l'utilisateur. Ceux-ci peuvent être transmis comme paramètres lors du contrôle des droits.
* "rights" : Définit les droits disponibles pour cette définition :
    - isys_auth::VIEW
    - isys_auth::EDIT
    - isys_auth::DELETE
    - isys_auth::EXECUTE
    - isys_auth::ARCHIVE
    - isys_auth::CREATE
    - isys_auth::SUPERVISEUR
* "par défaut" : Les droits enregistrés ici sont présélectionnés par défaut lorsque l'utilisateur ajoute le droit dans l'interface graphique.

## Im Code auf definierte Rechte prüfen

## Vérifier dans le code si des droits ont été définis

Wir können im Code über zwei Wege auf definierte Rechte prüfen:

Nous pouvons vérifier les droits définis dans le code de deux manières :

1. isys_auth_example->is_allowed_to(<Recht>, '<Methode>')
Diese Methode liefert boolsches "true" oder "false" zurück und kann in Abfragen verwendet werden.
2. isys_auth_example->check(<Recht>, '<Methode>')
Diese Methode wird eine Exception (üblicherweise vom Typ "isys_exception_auth") werfen, sofern das Recht nicht existiert. Im Erfolgsfall wird boolesch "true" zurückgeliefert.

1. isys_auth_example->is_allowed_to(<droit>, '<méthode>')
Cette méthode renvoie un "true" ou un "false" booléen et peut être utilisée dans les requêtes.
2. isys_auth_example->check(<droit>, '<méthode>')
Cette méthode lancera une exception (généralement de type "isys_exception_auth") si le droit n'existe pas. En cas de succès, elle renvoie booléen "true".

Der Code für unser Beispiel-Recht kann folgendermaßen aussehen:

Le code de notre exemple de droit peut se présenter comme suit :

```
if (isys_module_example::getAuth()->is_allowed_to(isys_auth::VIEW, 'example_action')) {
    isys_notify::success('User is authorized to "view" the "example_action".');
} else {
    isys_notify::error('User is NOT authorized to "view" the "example_action".');
}
```

Soll ein Recht unter Berücksichtigung eines Parameters geprüft werden, ist das folgendermaßen möglich:

Si un droit doit être contrôlé en tenant compte d'un paramètre, il est possible de procéder comme suit :

```
// $auth->is_allowed_to(isys_auth::EDIT, '<method>/<id>')

if (isys_auth_cmdb::instance()->is_allowed_to(isys_auth::EDIT, 'obj_id/1')) {
    // The user is authorized to edit the object with the ID 1.
}
```

## Eigene Rechte-Prüfung definieren

## Définir son propre contrôle des droits

Mit Hilfe von etwas eigenem Code kann eine eigene Rechte-Prüfung eingebaut werden, anstatt sich auf die i-doit-interne Logik zu verlassen. Hinter dem Schlüssel eines Rechts (in unserem Beispiel "example_action") kann sich optional eine eigene Methode verstecken, die benutzt wird, um Rechte-Abfragen zu verarbeiten.

En utilisant un peu de code personnel, il est possible d'intégrer un contrôle des droits propre, au lieu de se fier à la logique interne d'i-doit. Derrière la clé d'un droit (dans notre exemple "example_action"), on peut éventuellement cacher une méthode propre qui sera utilisée pour traiter les demandes de droits.

Im Kern des Rechtesystems steckt das "$m_paths"-Array. Darin befinden sich alle gespeicherten Rechte zum jeweils eingeloggten Benutzer im Kontext des Add-ons.

Le tableau "$m_paths" est au cœur du système de droits. Il contient tous les droits enregistrés pour l'utilisateur connecté dans le contexte du module complémentaire.

Das bedeutet, wenn wir ein Recht für unseren Benutzer für das Add-on isys_module_example hinterlegen, werden wir dieses Recht als Array innerhalb von "$m_paths" finden. Da wir das verfügbare Recht "example_action" mit Typ "boolean" angelegt haben, wird dieser den Parameter "empty-id" beinhalten. Geben wir "$m_paths" aus, erhalten wir etwa folgendes Ergebnis:

Cela signifie que si nous déposons un droit pour notre utilisateur pour l'add-on isys_module_example, nous trouverons ce droit sous forme de tableau à l'intérieur de "$m_paths". Comme nous avons créé le droit disponible "example_action" avec le type "boolean", celui-ci contiendra le paramètre "empty-id". Si nous affichons "$m_paths", nous obtenons à peu près le résultat suivant :

```
array (
    'example_action' => // Method name
    array (
        'empty-id' => // Parameter value
        array (
            0 => 2, // Defined right (see isys_auth::EDIT)
            1 => 1, // Defined right (see isys_auth::VIEW)
        ),
    ),
)
```

Um dieses Recht im Code zu prüfen, müsste die entsprechende Methode innerhalb von isys_auth_example folgendermaßen aussehen:

Pour vérifier ce droit dans le code, la méthode correspondante au sein de isys_auth_example devrait se présenter comme suit :

```
public function example_action($right, $id)
{
    // If the auth-system is not active, simply return "true".
    if (!$this->is_auth_active()) {
        return true;
    }

    // Throw exception if no rights exist.
    if (!count($this->m_paths)) {
        throw new isys_exception_auth('You have no rights defined for the example add-on.');
    }

    // Throw exception if no rights exist.
        if (!isset($this->m_paths['example_action'][isys_auth::EMPTY_ID_PARAM])) {
        throw new isys_exception_auth('You have no rights defined for "example_action".');
    }

    // Throw exception if rights do not exist in $this->m_paths.
        if (!in_array($right, $this->m_paths['example_action'][isys_auth::EMPTY_ID_PARAM])) {
        throw new isys_exception_auth('You missing the "' . self::get_right_name($right) . '" right for "example_action".');
    }

    return true;
}
```

Durch die zugrunde liegende Architektur können eigene Rechte-Methoden zwar direkt aufgerufen werden, anstatt über "is_allowed_to()" oder "check()", doch davon raten wir unbedingt ab!

L'architecture sous-jacente permet certes d'appeler directement des méthodes de droits propres, au lieu d'utiliser "is_allowed_to()" ou "check()", mais nous le déconseillons vivement !