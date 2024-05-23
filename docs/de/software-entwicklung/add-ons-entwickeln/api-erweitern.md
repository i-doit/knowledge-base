# API erweitern

Mit der API-Version 2.0 haben wir eine neue Möglichkeit eingeführt, um Endpunkte zu erweitern.
Die neuen Endpunkte sind deutlich einfacher zu erstellen und bieten eine Vielzahl von Verbesserungen, darunter:

- Versionierung von Endpunkten
- Eingebaute Typsicherheit
- Beschreibungen für Endpunkte und Parameter
- Verpflichtende und optionale Parameter
- Endpunkte können über `system.endpoints.read.v2` ausgelesen werden.

## Strikte Verarbeitung

Die Endpunkte dieser neuen Struktur sind deutlich strikter als bisherige Endpunkte der alten Struktur. Konkret betrifft dies die übergebenen Parameter:

- Übergebene Parameter müssen dem definierten Typ entsprechen
- Die Validierung der Parameter muss (falls vorhanden) erfolgreich sein
- Die Übergabe von Parametern, die nicht in der Endpunktdefinition hinterlegt sind, wird Fehler auslösen

## Notwendige Interfaces

Um einen eigenen Endpunkt in der neuen Struktur zu verwenden, muss eine PHP-Klasse erstellt werden, die das Interface `\idoit\Api\EndpointInterface` implementiert:

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

Anschließend muss dieser Endpunkt in der API registriert werden, dazu gibt es zwei Optionen:

### Registrierung über `registerEndpoint`

Innerhalb eurer `init.php` könnt ihr den folgenden Code hinterlegen um Endpunkte zu registrieren:

```php
// Content of 'init.php'.

use idoit\Module\YoudAddonIdentifier\Example;
use idoit\Module\YoudAddonIdentifier\Example2;

// [...]

isys_application::instance()->container->get('api.endpoints')
    ->registerEndpoint(new Example())
    ->registerEndpoint(new Example2());
```

### Registrierung über tagged service

Wenn Sie in Ihrem Add-on eigene Services definieren, die dem Dependency Injection Container hinzugefügt werden,
können Sie Ihre Endpunkte automatisch registrieren lassen, indem Sie das Tag `'api.endpoint'` verwenden:

```yaml
services:
    idoit.api.endpoint.example:
        class: idoit\Module\YoudAddonIdentifier\Example
        tags: [ 'api.endpoint' ]

    idoit.api.endpoint.example2:
        class: idoit\Module\YoudAddonIdentifier\Example2
        tags: [ 'api.endpoint' ]
```

## Aufbau eines Endpunkts

Ein API Endpunkt besteht, basierend auf dem `EndpointInterface` interface, aus zwei Methoden:

```
public function getDefinition(): EndpointDefinition
public function request(Request $request): JsonRpcResponse
```

### Endpunkt definition

Die Endpunktdefinition enthält notwendige Informationen wie beispielsweise den Namen des Endpunkts, eine Beschreibung und verfügbare Parameter.
Optional können auch Beispiele für Requests und Responses hinzugefügt werden. 

### Endpunkt request

Diese Methode wird durchlaufen wenn der entsprechende API Endpunkt aufgerufen wird.
Die Parameter befinden sich in `$request->request` und können mittels `$request->request->get('parameter-name')` gelesen werden.

Die `request` Methode muss eine Instanz der `JsonRpcResponse` klasse zurückliefern.

## Parameter

Die Parameter sind Teil der Endpunktdefinition und existieren in zwei Ausführungen: `RequiredParameter` und `OptionalParameter`.
Verpflichtende Parameter MÜSSEN übergeben werden.
Beide Parametertypen verfügen über einen Namen, einen Typen (`string`, `integer`, `array`, `boolean`), eine Beschreibung und Validierung (PHP-Callback-Funktion).
Optionale Parameter können einen Standardwert definieren, für den Fall, dass sie nicht explizit übergeben wurden.

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

Die Validierung der Parameter muss ein `callable` sein und einen booleschen Wert zurückgeben (`true` oder `false`).
Eine Validierung kann auch Exceptions auslösen.

# Alte Logik (pre API 2.0)

Damit die API erweitert werden kann, benötigt das eigene Add-on lediglich eine (oder mehrere) PHP-Klassen mit dem Prefix "isys_api_model_". Legen wir beispielsweise die Datei isys_api_model_example.class.php in unserem Add-on-Verzeichnis ab und hinterlegen diese in unserem Legacy Autoloader, so sind wir bereits dazu in der Lage, diese Klasse über die API anzusprechen.

Damit die i-doit-API korrekt mit der Klasse umgeht, sollte folgendes Template verwendet werden:

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

Ruft man nun die API mit folgendem Request auf:

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

Wird folgende Response an den Client zurückgesendet:

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

Mit Hilfe dieser Informationen wissen wir auch, mit welchen Werten wir im PHP-Kontext rechnen bzw. wie wir darauf reagieren können.

Die Werte "method" und "option" aus "method" werden üblicherweise für internes Routing verwendet - am Beispiel der Methode "cmdb.object.read":

Es wird die Klasse isys\_api\_model\_cmdb initialisiert und innerhalb der "route"-Methode wird auf den Parameter "object" reagiert. Eine Instanz von isys\_api\_model\_cmdb\_object wird erstellt und die Methode read wird aufgerufen. Im Code könnte das Ganze in etwa so aussehen:

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
