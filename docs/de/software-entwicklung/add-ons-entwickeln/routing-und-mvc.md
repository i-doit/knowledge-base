---
title: Routing in i-doit
description: Routing in i-doit
icon:
status:
lang: de
---

# Routing in i-doit

In diesem Artikel wird darauf eingegangen, wie das i-doit-interne routing funktioniert und wir damit eine eigene GUI realisieren können.

## URL-Routing (Symfony Routing)

Seit i-doit 25 kann die [Symfony Routing Komponente](https://symfony.com/doc/5.4/routing.html) genutzt werden um eigene Endpunkte zu realisieren.
Dazu müssen die Routen in der Add-on Modul-Klasse registriert werden. Dazu muss das `idoit\AddOn\RoutingAwareInterface` Interface genutzt werden.

Durch Interface muss die Methode `public static function registerRouting(): void` hinzugefügt werden.
Innerhalb dieser Methode können die Routen mittels `PHP` oder `YAML` Datei registriert werden:

### PHP Beispiel

Um eine eigene Collection mit Hilfe von PHP Code zu registrieren benötigt man die `addCollection` Methode des `'routes'` Service:

```php
use idoit\AddOn\RoutingAwareInterface;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\Routing\Loader\PhpFileLoader;

class isys_module_example implements RoutingAwareInterface
{
    // ...
    
    public static function registerRouting(): void
    {
        isys_application::instance()->container->get('routes')
            ->addCollection((new PhpFileLoader(new FileLocator(__DIR__)))->load('config/routes.php'));
    }
}
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
use idoit\AddOn\RoutingAwareInterface;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\Routing\Loader\YamlFileLoader;

class isys_module_example implements RoutingAwareInterface
{
    // ...
    
    public static function registerRouting(): void
    {
        isys_application::instance()->container->get('routes')
            ->addCollection((new YamlFileLoader(new FileLocator(__DIR__)))->load('config/routes.yaml'));
    }
}
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
$node = (new Node('Root', ''))
    ->add(new Node('Sub Node #1', 'url-1'))
    ->add(new Node('Sub Node #2', 'url-2'));

$response->setNavigationTree($node):
```
