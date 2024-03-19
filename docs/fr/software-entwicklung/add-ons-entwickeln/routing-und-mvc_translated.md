<!-- TRANSLATED by md-translate -->
# Routing in i-doit

# Routage dans i-doit

In diesem Artikel wird darauf eingegangen, wie das i-doit-interne routing funktioniert und wir damit eine eigene GUI realisieren können.

Dans cet article, nous allons voir comment fonctionne le routage interne à i-doit et comment nous pouvons l'utiliser pour réaliser notre propre GUI.

## URL-Routing (Symfony Routing)

## Routage d'URL (routage Symfony)

Seit i-doit 25 kann die [Symfony Routing Komponente](https://symfony.com/doc/5.4/routing.html) genutzt werden um eigene Endpunkte zu realisieren.
Dazu müssen die Routen in der `init.php` des Add-ons registriert werden. Dazu kann der neue `'routes'` Service genutzt werden.

Depuis i-doit 25, le [Symfony Routing Component](https://symfony.com/doc/5.4/routing.html) peut être utilisé pour réaliser ses propres points de terminaison.
Pour cela, les routes doivent être enregistrées dans le fichier `init.php` du module complémentaire. Le nouveau service `'routes'` peut être utilisé à cet effet.

Die Methode `addCollection` kann genutzt werden um mehrere Routen aus einer `PHP` oder `YAML` Datei zu registrieren:

La méthode `addCollection` peut être utilisée pour enregistrer plusieurs itinéraires à partir d'un fichier `PHP` ou `YAML` :

### PHP Beispiel

### Exemple PHP

Um eine eigene Collection mit Hilfe von PHP Code zu registrieren benötigt man die `addCollection` Methode des `'routes'` Service:

Pour enregistrer une collection personnelle à l'aide de code PHP, on a besoin de la méthode `addCollection` du service `'routes'` :

```php
use Symfony\Component\Config\FileLocator;
use Symfony\Component\Routing\Loader\PhpFileLoader;

isys_application::instance()->container->get('routes')
    ->addCollection((new PhpFileLoader(new FileLocator(__DIR__)))->load('config/routes.php'));
```

Die `routes.php` kann dabei folgendermaßen aussehen:

Le fichier `routes.php` peut se présenter comme suit :

```php
use idoit\Module\Example\Controller\ExampleController;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return function (RoutingConfigurator $routes) {
    $routes->add('example.php', '/example/php-route')
        ->methods(['GET'])
        ->controller([ExampleController::class, 'index']);
};
```

Mit diesem Code wird die route `/example/php-route` unter dem Namen `example.php` registriert.
Beim aufruf dieser URL wird der Controller `ExampleController` instanziiert und dessen Methode `index` aufgerufen.

Avec ce code, la route `/example/php-route` est enregistrée sous le nom `example.php`.
En appelant cette URL, le contrôleur `ExampleController` est instancié et sa méthode `index` est appelée.

### YAML Beispiel

### Exemple YAML

Um eine eigene Collection mit Hilfe einer YAML Datei zu registrieren benötigt man die `addCollection` Methode des `'routes'` Service:

Pour enregistrer une collection personnelle à l'aide d'un fichier YAML, on a besoin de la méthode `addCollection` du service `'routes'` :

```php
use Symfony\Component\Config\FileLocator;
use Symfony\Component\Routing\Loader\YamlFileLoader;

isys_application::instance()->container->get('routes')
    ->addCollection((new YamlFileLoader(new FileLocator(__DIR__)))->load('config/routes.yaml'));
```

Die `routes.yaml` kann dabei folgendermaßen aussehen:

Le `routes.yaml` peut alors se présenter comme suit :

```yaml
example.yaml:
    path:       /example/yaml-route
    controller: \idoit\Module\Example\Controller\ExampleController::index
    methods:    GET
```

Mit diesem Code wird die route `/example/yaml-route` unter dem Namen `example.yaml` registriert.
Beim aufruf dieser URL wird der Controller `ExampleController` instanziiert und dessen Methode `index` aufgerufen.

Avec ce code, la route `/example/yaml-route` est enregistrée sous le nom `example.yaml`.
En appelant cette URL, le contrôleur `ExampleController` est instancié et sa méthode `index` est appelée.

## URL-Routen generieren

## Générer des itinéraires URL

Es ist möglich URLs auf Basis von Routen zu generieren. Das kann nützlich sein, wenn sich eine URL ändern soll - anstatt
sämtliche Stellen von Hand zu ändern kann man diesen Code nutzen um die URL auf Basis der Route zu erstellen:

Il est possible de générer des URL sur la base d'itinéraires. Cela peut être utile lorsqu'une URL doit être modifiée - au lieu d'utiliser
on peut utiliser ce code pour générer l'URL sur la base de l'itinéraire :

```php
$routeGenerator = isys_application::instance()->container->get('route_generator');

$routeGenerator->generate('example.php'); // Results in "/example/php-route"
$routeGenerator->generate('example.yaml'); // Results in "/example/yaml-route"
```

Die `generate` Methode kann als zweiten Parameter auch Parameter übergeben bekommen, sofern die Route solche beinhaltet.

La méthode `generate` peut également recevoir des paramètres comme deuxième paramètre, à condition que l'itinéraire en contienne.

## Controller Code

## Code du contrôleur

Die Symfony Routing Komponente arbeitet mit zwei Klasse `Request` und `Response`.
Die Instanz der `Request` Klasse wird an die Controller Methode übergeben damit diese wiederum eine `Response` Instanz zurückliefert.

Le composant de routage Symfony fonctionne avec deux classes `Request` et `Response`.
L'instance de la classe `Request` est transmise à la méthode Controller pour que celle-ci renvoie à son tour une instance `Response`.

Es gibt (im Vergleich zur alten Logik) keine weiteren Abhängigkeiten zu anderen Klassen und/oder Schnittstellen.

Il n'y a pas (par rapport à l'ancienne logique) d'autres dépendances avec d'autres classes et/ou interfaces.

### Die `Response` Objekte

### Les objets `Réponse`.

Die aufgerufenen Controller Methoden müssen immer eine `Response` Instanz zurückliefern damit sie verarbeitet werden können.
Dazu gibt es eine Reihe von verschiedenen `Response` Klassen, die genutzt werden können:

Les méthodes du contrôleur appelées doivent toujours renvoyer une instance `Response` pour pouvoir être traitées.
Pour cela, il existe une série de classes `Response` différentes qui peuvent être utilisées :

#### Die normale `Response` Klasse

#### La classe normale `Response`.

Diese Klasse kann für spezifische Inhalte genutzt werden, die ggf. spezielle `content-type` Angaben oder Response Codes benötigen.

Cette classe peut être utilisée pour des contenus spécifiques qui nécessitent éventuellement des indications `content-type` ou des codes de réponse spéciaux.

```php
$response = new Response(
    'Content',
    Response::HTTP_OK,
    ['content-type' => 'text/html']
);
```

#### Für JSON `JsonResponse`

#### Pour JSON `JsonResponse`.

Die `JsonResponse` Klasse kann genutzt werden um Daten im JSON Format an das Frontend zurückzuliefern. Die Klasse wird dabei den korrekten `content-type` setzen und die Umwandlung zum JSON String übernehmen.
Diese Klasse eignet sich vor allem für Antworten von Ajax Anfragen, die im Frontend weiterverwendet werden können.

La classe `JsonResponse` peut être utilisée pour renvoyer des données au format JSON au frontend. La classe définit le `content-type` correct et se charge de la conversion en chaîne JSON.
Cette classe convient surtout pour les réponses aux requêtes Ajax, qui peuvent être réutilisées dans le frontend.

```php
$response = new JsonResponse(['data' => 123]);
```

#### Die i-doit eigene `IdoitReponse`

#### La propre `IdoitReponse` de i-doit

Um die i-doit Oberfläche darzustellen kann die `IdoitResponse` genutzt werden, diese beinhaltet alle notwendigen Logiken zum darstellen von eigenen Inhalten und einem Navigationsbaum.
Es gibt auch ein paar "Convenience" Methoden die von Entwicklern genutzt werden können um bestimmte Verhalten zu forcieren:

Pour représenter l'interface i-doit, on peut utiliser `IdoitResponse`, qui contient toutes les logiques nécessaires pour représenter des contenus propres et une arborescence de navigation.
Il existe également quelques méthodes de "commodité" qui peuvent être utilisées par les développeurs pour forcer certains comportements :

```php
$response = new IdoitResponse('path/to/content-template.tpl');

// Show an additional template at a specific area.
$response->setTemplate('area', 'path/to/template.tpl');

// Hide the navbar.
$response->showNavbar(false);

// Render a navigation tree.
$node = (new Node('Root', ''))
    ->add(new Node('Sub Node #1', 'url-1'))
    ->add(new Node('Sub Node #2', 'url-2'));

$response->setNavigationTree($node):
```

## Altes Routing und MVC (pre i-doit 25)

## Ancien routage et MVC (pre i-doit 25)

Nachfolgend die Dokumentation für die alte Routing und MVC Struktur in i-doit. Diese wird für längere Zeit in i-doit enthalten sein.
Für neuentwicklungen empfehlen wir aber die neue Routing Möglichkeiten (siehe oben).

Ci-dessous, la documentation pour l'ancienne structure de routage et MVC dans i-doit. Celle-ci restera dans i-doit pendant un certain temps.
Pour les nouveaux développements, nous recommandons toutefois les nouvelles possibilités de routage (voir ci-dessus).

### URL-Routing

### Routage URL

Mit Hilfe der URL wird das eigene Add-on überhaupt erst angesprochen. Dies geschieht über eine Basis-Route, die folgendermaßen funktioniert:

L'URL permet d'accéder à son propre add-on. Cela se fait via une route de base qui fonctionne de la manière suivante :

```
/<add-on identifier>(/<controller>(/<action>(/<id>)))
```

!!! info "Optionale Parameter"

! !! info "Paramètres optionnels

```
Die geklammerten Parameter sind optional; i-doit verwendet Standardwerte, wenn diese nicht gesetzt sind.
```

Für Controller und Action existieren die definierten Standardwerte "Main" und "handle", sodass man nicht immer die komplette URL definieren muss.

Pour le contrôleur et l'action, il existe les valeurs standard définies "Main" et "handle", de sorte qu'il n'est pas toujours nécessaire de définir l'URL complète.

Die URL "/example" leitet also weiter in den "Main"-Controller und ruft die "handle"-Action auf. Es gibt ein Set an reservierten Wörtern, die nicht als Action verwendet werden können und Fehlermeldungen produzieren:

L'URL "/example" redirige donc vers le contrôleur "Main" et appelle l'action "handle". Il existe un ensemble de mots réservés qui ne peuvent pas être utilisés comme action et qui produisent des messages d'erreur :

/example/main/handle
/example/main/dao
/example/main/tree

/example/main/handle
/example/main/dao
/example/main/tree

Aufgrund der direkten Übersetzung von URL nach Klasse und Methode unterliegen die URL-Segmente bestimmten Bedingungen, die sich als regulärer Ausdruck formulieren lassen:

En raison de la traduction directe de l'URL en classe et en méthode, les segments d'URL sont soumis à certaines conditions qui peuvent être formulées sous forme d'expressions régulières :

#### Controller ^[a-zA-Z][a-zA-Z0-9_-]*$

#### Contrôleur ^[a-zA-Z][a-zA-Z0-9_-]*$

Dieser Ausdruck besagt, dass das Controller-Segment der URL mit einem Buchstaben beginnen muss und weiterhin nur aus Buchstaben, Zahlen, Bindestrichen oder Unterstrichen bestehen darf. Bei der Übersetzung von Segment zu Klassenname werden Bindestriche entfernt:

Cette expression indique que le segment contrôleur de l'URL doit commencer par une lettre et ne peut en outre être composé que de lettres, de chiffres, de tirets ou de traits de soulignement. Lors de la traduction du segment en nom de classe, les traits d'union sont supprimés :

* URL /main öffnet Controller Main
* URL /MAIN öffnet Controller MAIN
* URL /main-content öffnet Controller MainContent
* URL /main_content öffnet Controller Main_content
* URL /mAIN_CONTENT öffnet Controller MAIN_CONTENT

* URL /main ouvre le contrôleur Main
* URL /MAIN ouvre le contrôleur MAIN
* URL /main-content ouvre le contrôleur MainContent
* URL /main_content ouvre le contrôleur Main_content
* URL /mAIN_CONTENT ouvre le contrôleur MAIN_CONTENT

#### Action ^[a-zA-Z]+$

#### Action ^[a-zA-Z]+$

Die Namen von Actions sind im Gegensatz zu Controllern restriktiver und unterliegen keiner Logik zum Ändern der Groß- und Kleinschreibung:

Contrairement aux contrôleurs, les noms des actions sont plus restrictifs et ne sont pas soumis à une logique de changement de majuscule :

* URL /main/firstpage öffnet Controller Main, Action firstpage
* URL /main/firstPage öffnet Controller Main, Action firstPage
* URL /main/first-page wird nicht gefunden werden
* URL /main/first_page wird nicht gefunden werden

* URL /main/firstpage ouvre le contrôleur Main, action firstpage
* URL /main/firstPage ouvre le contrôleur Main, action firstPage
* URL /main/first-page ne sera pas trouvée
* URL /main/first_page ne sera pas trouvée

!!! info "Achtung bei Groß- und Kleinschreibung"

! !! info "Attention aux majuscules et aux minuscules".

```
Auf einigen Betriebssystemen (Windows und Mac) wird die Groß- und Kleinschreibung von Controller und Action keinen Unterschied machen. Unter Linux jedoch werden Controller und/oder Actions bei falscher Schreibweise nicht gefunden und werden Fehler verursachen.
```

### Eigene Routen definieren

### Définir ses propres itinéraires

Es ist innerhalb der init.php möglich, eigene Routen für das Add-on zu definieren. Der Code dazu sieht folgendermaßen aus:

Il est possible de définir ses propres itinéraires pour le module complémentaire dans le fichier init.php. Le code à cet effet se présente comme suit :

```
// addModuleRoute('<Method>|...', '<URL>', '<add-on identifier>', '<controller>', '<actiob>');

isys_request_controller::instance()
    ->addModuleRoute('GET', '/example/self-defined-route', 'example', 'MyController', 'myGetAction')
    ->addModuleRoute('POST', '/example/self-defined-route', 'example', 'MyController', 'myPostAction');
```

#### Hinweis zu Namespaces

#### Remarque sur les espaces de noms

Bei Add-ons mit Unterstrichen (`_`) im Identifier wird der Namespace für die Controller automatisch von i-doit gebildet:

Pour les add-ons dont l'identifiant est souligné (`_`), l'espace de nommage pour les contrôleurs est automatiquement formé par i-doit :

**Vor i-doit 23**

**Avant i-doit 23**

Hier wurde aus einem Identifier wie zum Beispiel `example_addon` der Namespace `Exampleaddon` bzw. `idoit\Module\Exampleaddon\Controller` gebildet.

Ici, l'espace de nommage `Exampleaddon` ou `idoit\Module\Exampleaddon\Controller` a été créé à partir d'un identifiant comme par exemple `example_addon`.

**Ab i-doit 23**

**Ab i-doit 23**

Wir unterstützen ab i-doit 23 zwei Formate, sodass der Identifier `example_addon` in diesen beiden Namespaces nach einem passenden Controller suchen würde:

Nous supportons deux formats à partir d'i-doit 23, de sorte que l'identifiant `example_addon` chercherait un contrôleur approprié dans ces deux espaces de nommage :

* `Exampleaddon` (so wie füher)
* `ExampleAddon` (neu)

* `Exampleaddon` (comme avant)
* `ExampleAddon` (nouveau)

Der vollständige Namespace für die Controller würde also `idoit\Module\ExampleAddon\Controller` lauten, wobei auch der alte Namespace gültig wäre.

L'espace de nommage complet pour les contrôleurs serait donc `idoit\Module\ExampleAddon\NController`, l'ancien espace de nommage étant également valable.

### Controller-Code

### Code du contrôleur

Ein Controller besteht aus einigem Boilerplate-Code und optionalen eigenen Methoden, wenn man das Routing ausnutzen möchte. Wichtig hierbei ist, dass die korrekten Namespaces eingehalten werden:

Un contrôleur se compose de quelques codes boilerplate et de méthodes propres optionnelles si l'on souhaite exploiter le routage. L'important ici est de respecter les espaces de noms corrects :

```
namespace idoit\Module\Example\Controller;

use idoit\Controller\Base as BaseController;
use idoit\Controller\CatchallController;
use idoit\Model\Dao\Base as BaseDao;
use idoit\Module\Example\View\Main as MainView;
use idoit\Tree\Node;

/**
* Main controller
*
* @package modules
* @subpackage example
* @author Leonard Fischer <lfischer@i-doit.com>
* @copyright synetics GmbH
* @license     [http://www.i-doit.com/license](http://www.i-doit.com/license)
*/
class Main extends BaseController implements \isys_controller
{
    /**
    * Default request handler, gets called in every "/example" request.
    * Default route is being used for this to work:
    * /<add-on identifier>/<controller>/<action>
    *
    * Default value for "controller" is "main".
    * Default value for "action" is "handle".
    *
    * @param   \isys_register    $request
    * @param   \isys_application $application
    *
    * @route   /example
    * @route   /example/main
    * @route   /example/main/handle But will result in error, because different second parameter.
    * @return  \idoit\View\Renderable
    */
    public function handle(\isys_register $request, \isys_application $application)
    {
        // Return the "Main" view class as fallback.
        return new MainView($request);
    }

    /**
    * @param   \isys_application $application
    *
    * @return  \isys_component_dao
    */
        public function dao(\isys_application $application)
        {
            return BaseDao::instance($application->container->get('database'));
        }

    /**
    * Constructor method.
    *
    * @param  \isys_module $p_module
    */
    public function __construct(\isys_module $p_module)
    {
        // Nothing to do here.
    }

    /**
    * Build the left tree.
    *
    * @param   \isys_register       $request
    * @param   \isys_application    $application
    * @param   \isys_component_tree $p_tree
    *
    * @return Node
    */
    public function tree(\isys_register $request, \isys_application $application, \isys_component_tree $p_tree)
    {
        $language = $this->container->get('language');

        // Initialize tree nodes.
        return new Node(
            $language->get('LC__EXAMPLE'),
            $request->get('BASE') . 'example',
            $request->get('BASE') . 'images/icons/silk/application.png'
        );
    }
}
```

In diesem Controller können nun beliebige Methoden ergänzt werden. Es ist allerdings darauf zu achten, das diese aus dem Frontend heraus via URL aufgerufen werden können. Das kann zum Beispiel so aussehen:

Dans ce contrôleur, il est possible d'ajouter des méthodes au choix. Il faut toutefois veiller à ce que celles-ci puissent être appelées depuis le frontend via l'URL. Cela peut par exemple ressembler à ceci :

```
/**
* Method for displaying the "first" page.
* Default route is being used for this to work:
* /<add-on identifier>/<controller>/<action>
*
* @param   \isys_register $request
*
* @route   /example/main/firstpage
* @return  \idoit\View\Renderable
*/
public function firstpage(\isys_register $request)
{
    return new idoit\Module\Example\View\FirstPage($request);
}
```

Eine Controller-"Action" sollte immer eine View zurückliefern, die das "Renderable"-Interface implementiert.

Une "action" de contrôleur devrait toujours renvoyer une vue qui implémente l'interface "Renderable".

### View-Code

### Code View

Die View-Klassen werden benutzt, um unsere Templates vorzubereiten und mit Leben zu füllen. Üblicherweise werden hier darzustellende Templates definiert und mit Variablen befüllt, die im Template-Kontext ausgegeben werden. Eine View-Klasse kann die verschiedenen "Inhaltsbereiche" von i-doit mit eigenen Templates ausstatten. Der normale Content-Bereich hört zum Beispiel auf den Namen "contentbottomcontent" und wird folgendermaßen benutzt:

Les classes View sont utilisées pour préparer nos templates et les remplir de vie. En général, les templates à afficher sont définis ici et remplis de variables qui sont affichées dans le contexte du template. Une classe View peut équiper les différentes "zones de contenu" d'i-doit de ses propres templates. La zone de contenu normale répond par exemple au nom de "contentbottomcontent" et est utilisée comme suit :

```
<?php

namespace idoit\Module\Example\View;

use idoit\View\Base as ViewBase;
use idoit\Model\Dao\Base as DaoBase;

class Main extends ViewBase
{
    public function process(\isys_module $module, \isys_component_template $template, DaoBase $model)
    {
        // Set paths to templates.
        $this->paths['contentbottomcontent'] = \isys_module_example::getPath() . 'templates/main.tpl';

        $template->assign('exampleVariable', rand(1, 100));

        return $this;
    }
}
```

Das Template "main.tpl" muss natürlich im Add-on-Verzeichnis existieren und könnte folgendermaßen aussehen:

Le modèle "main.tpl" doit bien sûr exister dans le répertoire des add-ons et pourrait se présenter comme suit :

```
<h1>[{isys type="lang" ident="LC__EXAMPLE"}]</h1>
<p>Example variable: [{$exampleVariable}]</p>
```

Als Template-Engine verwenden wir Smarty mit den Delimitern "[{" und "}]".

Comme moteur de template, nous utilisons Smarty avec les délimiteurs "[{" et "}]".