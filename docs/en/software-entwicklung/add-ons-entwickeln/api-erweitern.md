---
title: Extending the API
description: "With API version 2.0, we introduced a new way to extend endpoints."
icon:
status:
lang: en
---
# Extending the API

With API version 2.0, we introduced a new way to extend endpoints.
The new endpoints are significantly easier to create and offer a variety of improvements, including:

- Endpoint versioning
- Built-in type safety
- Descriptions for endpoints and parameters
- Required and optional parameters
- Endpoints can be read via `system.endpoints.read.v2`

## Strict Processing

The endpoints of this new structure are significantly stricter than previous endpoints of the old structure. Specifically, this affects the provided parameters:

- Provided parameters must match the defined type
- Parameter validation (if present) must pass successfully
- Providing parameters that are not defined in the endpoint definition will trigger an error

## Required Interfaces

To create your own endpoint in the new structure, you need to create a PHP class that implements the interface `\idoit\Api\EndpointInterface`:

```php
<?php

namespace idoit\Module\YoudAddonIdentifier;

use idoit\Api\EndpointDefinition;
use idoit\Api\EndpointInterface;
use idoit\Api\JsonRpcResponse;
use Symfony\Component\HttpFoundation\Request;

class Example implements EndpointInterface
{
    public function getDefinition(): EndpointDefinition
    {
        return new EndpointDefinition(
            'endpoint.example.v2', 
            'Description of this new endpoint', 
            [ /* parameters */ ], 
            [ /* example request*/ ],
            [ /* example response */ ]
        );
    }

    public function request(Request $request): JsonRpcResponse
    {
        return new JsonRpcResponse(['API response']);
    }
}
```

Subsequently, this endpoint must be registered in the API. There are two options for this:

### Registration via `registerEndpoint`

Within your `init.php`, you can use the following code to register endpoints:

```php
// Content of 'init.php'.

use idoit\Module\YoudAddonIdentifier\Example;
use idoit\Module\YoudAddonIdentifier\Example2;

// [...]

isys_application::instance()->container->get('api.endpoints')
    ->registerEndpoint(new Example())
    ->registerEndpoint(new Example2());
```

### Registration via Tagged Service

If you define your own services in your add-on that are added to the Dependency Injection Container,
you can have your endpoints automatically registered by using the tag `'api.endpoint'`:

```yaml
services:
    idoit.api.endpoint.example:
        class: idoit\Module\YoudAddonIdentifier\Example
        tags: [ 'api.endpoint' ]

    idoit.api.endpoint.example2:
        class: idoit\Module\YoudAddonIdentifier\Example2
        tags: [ 'api.endpoint' ]
```

## Structure of an Endpoint

An API endpoint consists, based on the `EndpointInterface` interface, of two methods:

```
public function getDefinition(): EndpointDefinition
public function request(Request $request): JsonRpcResponse
```

### Endpoint Definition

The endpoint definition contains necessary information such as the name of the endpoint, a description, and available parameters.
Optionally, examples for requests and responses can also be added.

### Endpoint Request

This method is executed when the corresponding API endpoint is called.
The parameters are located in `$request->request` and can be read using `$request->request->get('parameter-name')`.

The `request` method must return an instance of the `JsonRpcResponse` class.

## Parameters

Parameters are part of the endpoint definition and exist in two variants: `RequiredParameter` and `OptionalParameter`.
Required parameters MUST be provided.
Both parameter types have a name, a type (`string`, `integer`, `array`, `boolean`), a description, and a validation callback (PHP callback function).
Optional parameters can define a default value for the case that they are not explicitly provided.

```php
return new EndpointDefinition(
    'endpoint.example.v2', 
    'Description of this new endpoint', 
    [
        new RequiredParameter('object', Parameter::TYPE_INTEGER, 'Numeric object ID', fn ($id) => $id > 0),
        new OptionalParameter('categories', Parameter::TYPE_ARRAY, 'Array of category constants', function ($categories) {
            foreach ($categories as $categoryConstant) {
                if (!defined($categoryConstant)) {
                    throw new Exception("The category constant '{$categoryConstant}' is not defined in your i-doit installation.");
                }
            }

            return true;
        })
    ], 
    [ /* example request*/ ],
    [ /* example response */ ]
);
```

Parameter validation must be a `callable` and return a boolean value (`true` or `false`).
A validation can also throw exceptions.

# Legacy Logic (pre API 2.0)

To extend the API using the legacy approach, your add-on merely needs one (or more) PHP classes with the prefix "isys_api_model_". For example, place the file isys_api_model_example.class.php in your add-on directory and register it in the legacy autoloader -- this is already enough to make the class accessible via the API.

For the i-doit API to work correctly with the class, the following template should be used:

    <?php

    class isys_api_model_example extends isys_api_model implements isys_api_model_interface
    {
        /**
        * API router.
        *
        * @param string $method Data method
        * @param array  $params Parameters (depends on data method)
        *
        * @return $this
        */
        public function route($method, $params)
        {
            $this->m_log->info('Retrieving data from: ' . $method);
            $this->format([$method, $params]);

            return $this;
        }

        /**
        * @inheritdoc
        */
        public function read($params)
        {
            // Necessary method, defined in interface.
        }
    }

If you now call the API with the following request:

    {
        "version": "2.0",
        "method": "example.method.option",
        "params": {
            "string": "foo",
            "array": ["foo", "bar"],
            "bool": true,
            "int": 123,
            "float": 23.5,
            "apikey": "apikey"
        },
        "id": 1
    }

The following response is sent back to the client:

    {
        "jsonrpc": "2.0",
        "result": [
            "method",
            {
                "string": "foo",
                "array": ["foo", "bar"],
                "bool": true,
                "int": 123,
                "float": 23.5,
                "apikey": "c1ia5q",
                "language": "de",
                "option": "option"
            }
        ],
        "id": 1
    }

Using this information, we also know what values to expect in the PHP context and how to react to them.

The "method" and "option" values from "method" are typically used for internal routing -- using the example of the method "cmdb.object.read":

The class isys\_api\_model\_cmdb is initialized and within the "route" method, the "object" parameter is handled. An instance of isys\_api\_model\_cmdb\_object is created and the read method is called. In code, this might look roughly as follows:

    public function route($method, $params)
    {
        $model = 'isys_api_model_example_' . $method;
        $option = $params['option'] ?: 'read';

        if (!class_exists($model)) {
            $this->m_log->error('Method "' . $method . '" does not exit.');

            throw new isys_exception_api('API method "' . $method . '" (' . $model . ') does not exist.', isys_api_controller_jsonrpc::ERR_Method);
        }

        $modelInstance = new $model;

        if (!method_exists($modelInstance, $option)) {
            $this->m_log->error('Option "' . $option . '" does not exit for method "' . $method . '".');

            throw new isys_exception_api('API option "' . $option . '" does not exist for method "' . $method . '".', isys_api_controller_jsonrpc::ERR_Parameters);
        }

        $this->m_log->info('Retrieving data from: ' . $method);
        $this->format($modelInstance->$option($params));

        return $this;
    }

## See also

- [Developing Add-ons](index.md) -- Guide to add-on development
- [Software Development](../index.md) -- Overview of developer documentation
- [API Add-on](../../i-doit-add-ons/api/index.md) -- Interface for external access
