---
title: Routing in i-doit
description: "This article explains how the i-doit internal routing works and how we can use it to build a custom GUI."
icon:
status:
lang: en
---

# Routing in i-doit

This article explains how the i-doit internal routing works and how we can use it to build a custom GUI.

## URL Routing (Symfony Routing)

Since i-doit 25, the [Symfony Routing Component](https://symfony.com/doc/5.4/routing.html) can be used to create custom endpoints.
To do this, routes must be registered in the add-on module class. The `idoit\AddOn\RoutingAwareInterface` interface must be used for this purpose.

Through this interface, the method `public static function registerRouting(): void` must be added.
Within this method, routes can be registered via `PHP` or `YAML` files:

### PHP Example

To register a custom collection using PHP code, you need the `addCollection` method of the `'routes'` service:

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

The `routes.php` can look as follows:

```php
use idoit\Module\Example\Controller\ExampleController;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return function (RoutingConfigurator $routes) {
    $routes->add('example.php', '/example/php-route')
        ->methods(['GET'])
        ->controller([ExampleController::class, 'index']);
};
```

With this code, the route `/example/php-route` is registered under the name `example.php`.
When this URL is called, the controller `ExampleController` is instantiated and its `index` method is called.

### YAML Example

To register a custom collection using a YAML file, you need the `addCollection` method of the `'routes'` service:

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

The `routes.yaml` can look as follows:

```yaml
example.yaml:
    path:       /example/yaml-route
    controller: \idoit\Module\Example\Controller\ExampleController::index
    methods:    GET
```

With this code, the route `/example/yaml-route` is registered under the name `example.yaml`.
When this URL is called, the controller `ExampleController` is instantiated and its `index` method is called.

## Generating URL Routes

It is possible to generate URLs based on routes. This can be useful if a URL needs to change -- instead of
manually updating all locations, you can use this code to generate the URL based on the route:

```php
$routeGenerator = isys_application::instance()->container->get('route_generator');

$routeGenerator->generate('example.php'); // Results in "/example/php-route"
$routeGenerator->generate('example.yaml'); // Results in "/example/yaml-route"
```

The `generate` method can also accept parameters as a second argument, if the route contains them.

## Controller Code

The Symfony Routing Component works with two classes: `Request` and `Response`.
The `Request` class instance is passed to the controller method, which in turn returns a `Response` instance.

There are (compared to the old logic) no additional dependencies on other classes and/or interfaces.

### The `Response` Objects

The called controller methods must always return a `Response` instance so that it can be processed.
For this, there are a number of different `Response` classes that can be used:

#### The Normal `Response` Class

This class can be used for specific content that may require special `content-type` specifications or response codes.

```php
$response = new Response(
    'Content',
    Response::HTTP_OK,
    ['content-type' => 'text/html']
);
```

#### For JSON: `JsonResponse`

The `JsonResponse` class can be used to return data in JSON format to the frontend. The class will set the correct `content-type` and handle the conversion to a JSON string.
This class is particularly suitable for responses to Ajax requests that can be further used in the frontend.

```php
$response = new JsonResponse(['data' => 123]);
```

#### The i-doit Custom `IdoitResponse`

To display the i-doit interface, the `IdoitResponse` can be used. It contains all necessary logic for displaying custom content and a navigation tree.
There are also a few "convenience" methods that developers can use to force certain behaviors:

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
