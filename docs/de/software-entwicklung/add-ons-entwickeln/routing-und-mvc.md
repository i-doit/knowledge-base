# Routing in i-doit

In diesem Artikel wird darauf eingegangen, wie das i-doit-interne routing funktioniert und wir damit eine eigene GUI realisieren können.

## URL-Routing (Symfony Routing)

Seit i-doit 25 kann die [Symfony Routing Komponente](https://symfony.com/doc/5.4/routing.html) genutzt werden um eigene Endpunkte zu realisieren.
Dazu müssen die Routen in der `init.php` des Add-ons registriert werden. Dazu kann der neue `'routes'` Service genutzt werden.

Die Methode `addCollection` kann genutzt werden um mehrere Routen aus einer `PHP` oder `YAML` Datei zu registrieren:

### PHP Beispiel

Um eine eigene Collection mit Hilfe von PHP Code zu registrieren benötigt man die `addCollection` Methode des `'routes'` Service:

```php
use Symfony\Component\Config\FileLocator;
use Symfony\Component\Routing\Loader\PhpFileLoader;

isys_application::instance()->container->get('routes')
    ->addCollection((new PhpFileLoader(new FileLocator(__DIR__)))->load('config/routes.php'));
```

Die `routes.php` kann dabei folgendermaßen aussehen:

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

### YAML Beispiel

Um eine eigene Collection mit Hilfe einer YAML Datei zu registrieren benötigt man die `addCollection` Methode des `'routes'` Service:

```php
use Symfony\Component\Config\FileLocator;
use Symfony\Component\Routing\Loader\YamlFileLoader;


isys_application::instance()->container->get('routes')
    ->addCollection((new YamlFileLoader(new FileLocator(__DIR__)))->load('config/routes.yaml'));
```

Die `routes.yaml` kann dabei folgendermaßen aussehen:

```yaml
example.yaml:
    path:       /example/yaml-route
    controller: \idoit\Module\Example\Controller\ExampleController::index
    methods:    GET
```

Mit diesem Code wird die route `/example/yaml-route` unter dem Namen `example.yaml` registriert.
Beim aufruf dieser URL wird der Controller `ExampleController` instanziiert und dessen Methode `index` aufgerufen.

## URL-Routen generieren

Es ist möglich URLs auf Basis von Routen zu generieren. Das kann nützlich sein, wenn sich eine URL ändern soll - anstatt
sämtliche Stellen von Hand zu ändern kann man diesen Code nutzen um die URL auf Basis der Route zu erstellen:

```php
$routeGenerator = isys_application::instance()->container->get('route_generator');

$routeGenerator->generate('example.php'); // Results in "/example/php-route"
$routeGenerator->generate('example.yaml'); // Results in "/example/yaml-route"
```

Die `generate` Methode kann als zweiten Parameter auch Parameter übergeben bekommen, sofern die Route solche beinhaltet.

## Controller Code

Die Symfony Routing Komponente arbeitet mit zwei Klasse `Request` und `Response`.
Die Instanz der `Request` Klasse wird an die Controller Methode übergeben damit diese wiederum eine `Response` Instanz zurückliefert.

Es gibt (im Vergleich zur alten Logik) keine weiteren Abhängigkeiten zu anderen Klassen und/oder Schnittstellen.

### Die `Response` Objekte

Die aufgerufenen Controller Methoden müssen immer eine `Response` Instanz zurückliefern damit sie verarbeitet werden können.
Dazu gibt es eine Reihe von verschiedenen `Response` Klassen, die genutzt werden können:

#### Die normale `Response` Klasse

Diese Klasse kann für spezifische Inhalte genutzt werden, die ggf. spezielle `content-type` Angaben oder Response Codes benötigen. 

```php
$response = new Response(
    'Content',
    Response::HTTP_OK,
    ['content-type' => 'text/html']
);
```

#### Für JSON `JsonResponse`

Die `JsonResponse` Klasse kann genutzt werden um Daten im JSON Format an das Frontend zurückzuliefern. Die Klasse wird dabei den korrekten `content-type` setzen und die Umwandlung zum JSON String übernehmen.
Diese Klasse eignet sich vor allem für Antworten von Ajax Anfragen, die im Frontend weiterverwendet werden können.

```php
$response = new JsonResponse(['data' => 123]);
```

#### Die i-doit eigene `IdoitReponse`

Um die i-doit Oberfläche darzustellen kann die `IdoitResponse` genutzt werden, diese beinhaltet alle notwendigen Logiken zum darstellen von eigenen Inhalten und einem Navigationsbaum.
Es gibt auch ein paar "Convenience" Methoden die von Entwicklern genutzt werden können um bestimmte Verhalten zu forcieren:

```php
$response = new IdoitResponse('path/to/content-template.tpl');

// Show an additional template at a specific area.
$response->setTemplate('area', 'path/to/template.tpl');

// Hide the navbar.
$response->showNavbar(false);

// Render a navigation tree.
$node = (new Node('Root'))
    ->add(new Node('Sub Node #1'), 'url-1')
    ->add(new Node('Sub Node #2'), 'url-2');

$response->setNavigationTree($node):
```

## Altes Routing und MVC (pre i-doit 25)

Nachfolgend die Dokumentation für die alte Routing und MVC Struktur in i-doit. Diese wird für längere Zeit in i-doit enthalten sein.
Für neuentwicklungen empfehlen wir aber die neue Routing Möglichkeiten (siehe oben).

### URL-Routing

Mit Hilfe der URL wird das eigene Add-on überhaupt erst angesprochen. Dies geschieht über eine Basis-Route, die folgendermaßen funktioniert:

    /<add-on identifier>(/<controller>(/<action>(/<id>)))

!!! info "Optionale Parameter"

    Die geklammerten Parameter sind optional; i-doit verwendet Standardwerte, wenn diese nicht gesetzt sind.

Für Controller und Action existieren die definierten Standardwerte "Main" und "handle", sodass man nicht immer die komplette URL definieren muss.

Die URL "/example" leitet also weiter in den "Main"-Controller und ruft die "handle"-Action auf. Es gibt ein Set an reservierten Wörtern, die nicht als Action verwendet werden können und Fehlermeldungen produzieren:

/example/main/handle
/example/main/dao
/example/main/tree

Aufgrund der direkten Übersetzung von URL nach Klasse und Methode unterliegen die URL-Segmente bestimmten Bedingungen, die sich als regulärer Ausdruck formulieren lassen:

#### Controller ^[a-zA-Z][a-zA-Z0-9_-]*$

Dieser Ausdruck besagt, dass das Controller-Segment der URL mit einem Buchstaben beginnen muss und weiterhin nur aus Buchstaben, Zahlen, Bindestrichen oder Unterstrichen bestehen darf. Bei der Übersetzung von Segment zu Klassenname werden Bindestriche entfernt:

*   URL /main öffnet Controller Main
*   URL /MAIN öffnet Controller MAIN
*   URL /main-content öffnet Controller MainContent
*   URL /main_content öffnet Controller Main_content
*   URL /mAIN_CONTENT öffnet Controller MAIN_CONTENT

#### Action ^[a-zA-Z]+$

Die Namen von Actions sind im Gegensatz zu Controllern restriktiver und unterliegen keiner Logik zum Ändern der Groß- und Kleinschreibung:

*   URL /main/firstpage öffnet Controller Main, Action firstpage
*   URL /main/firstPage öffnet Controller Main, Action firstPage
*   URL /main/first-page wird nicht gefunden werden
*   URL /main/first_page wird nicht gefunden werden

!!! info "Achtung bei Groß- und Kleinschreibung"

    Auf einigen Betriebssystemen (Windows und Mac) wird die Groß- und Kleinschreibung von Controller und Action keinen Unterschied machen. Unter Linux jedoch werden Controller und/oder Actions bei falscher Schreibweise nicht gefunden und werden Fehler verursachen.

### Eigene Routen definieren

Es ist innerhalb der init.php möglich, eigene Routen für das Add-on zu definieren. Der Code dazu sieht folgendermaßen aus:

    // addModuleRoute('<Method>|...', '<URL>', '<add-on identifier>', '<controller>', '<actiob>');

    isys_request_controller::instance()
        ->addModuleRoute('GET', '/example/self-defined-route', 'example', 'MyController', 'myGetAction')
        ->addModuleRoute('POST', '/example/self-defined-route', 'example', 'MyController', 'myPostAction');

#### Hinweis zu Namespaces

Bei Add-ons mit Unterstrichen (`_`) im Identifier wird der Namespace für die Controller automatisch von i-doit gebildet:

**Vor i-doit 23**

Hier wurde aus einem Identifier wie zum Beispiel `example_addon` der Namespace `Exampleaddon` bzw. `idoit\Module\Exampleaddon\Controller` gebildet. 

**Ab i-doit 23**

Wir unterstützen ab i-doit 23 zwei Formate, sodass der Identifier `example_addon` in diesen beiden Namespaces nach einem passenden Controller suchen würde:

- `Exampleaddon` (so wie füher)
- `ExampleAddon` (neu)

Der vollständige Namespace für die Controller würde also `idoit\Module\ExampleAddon\Controller` lauten, wobei auch der alte Namespace gültig wäre.

### Controller-Code

Ein Controller besteht aus einigem Boilerplate-Code und optionalen eigenen Methoden, wenn man das Routing ausnutzen möchte. Wichtig hierbei ist, dass die korrekten Namespaces eingehalten werden:

    namespace idoit\Module\Example\Controller;

    use idoit\Controller\Base as BaseController;
    use idoit\Controller\CatchallController;
    use idoit\Model\Dao\Base as BaseDao;
    use idoit\Module\Example\View\Main as MainView;
    use idoit\Tree\Node;

    /**
    * Main controller
    *
    * @package     modules
    * @subpackage  example
    * @author      Leonard Fischer <lfischer@i-doit.com>
    * @copyright   synetics GmbH
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
        * @route   /example/main/handle  But will result in error, because different second parameter.
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
        * @return  Node
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

In diesem Controller können nun beliebige Methoden ergänzt werden. Es ist allerdings darauf zu achten, das diese aus dem Frontend heraus via URL aufgerufen werden können. Das kann zum Beispiel so aussehen:

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

Eine Controller-"Action" sollte immer eine View zurückliefern, die das "Renderable"-Interface implementiert.

### View-Code

Die View-Klassen werden benutzt, um unsere Templates vorzubereiten und mit Leben zu füllen. Üblicherweise werden hier darzustellende Templates definiert und mit Variablen befüllt, die im Template-Kontext ausgegeben werden. Eine View-Klasse kann die verschiedenen "Inhaltsbereiche" von i-doit mit eigenen Templates ausstatten. Der normale Content-Bereich hört zum Beispiel auf den Namen "contentbottomcontent" und wird folgendermaßen benutzt:

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

Das Template "main.tpl" muss natürlich im Add-on-Verzeichnis existieren und könnte folgendermaßen aussehen:

    <h1>[{isys type="lang" ident="LC__EXAMPLE"}]</h1>
    <p>Example variable: [{$exampleVariable}]</p>

Als Template-Engine verwenden wir Smarty mit den Delimitern "[{" und "}]".
