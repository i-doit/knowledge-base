# API erweitern

Damit die API erweitert werden kann, benötigt das eigene Add-on lediglich eine (oder mehrere) PHP-Klassen mit dem Prefix "isys_api_model_". Legen wir beispielsweise die Datei isys_api_model_example.class.php in unserem Add-on-Verzeichnis ab und hinterlegen diese in unserem Legacy Autoloader, so sind wir bereits dazu in der Lage, diese Klasse über die API anzusprechen.

Damit die i-doit-API korrekt mit der Klasse umgeht, sollte folgendes Template verwendet werden:

    <?php

    class isys_api_model_example extends isys_api_model implements isys_api_model_interface
    {
        /**
        * API router.
        *
        * @param string $method Data method
        * @param array  $params Parameters (depends on data method)
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