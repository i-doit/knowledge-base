<!-- TRANSLATED by md-translate -->
# Systemeinstellungen erweitern

# Développer les paramètres du système

i-doits Systemeinstellungen sind ein hierarchisches System kaskadierender Einstellungsparameter. Diese Hierarchie wird aus insgesamt drei verschiedenen Ebenen zusammengesetzt. Alle verfügbaren Einstellungsparameter können innerhalb dieser Ebenen existieren und werden je nach Bedarf gelesen.

Les paramètres système i-doits sont un système hiérarchique de paramètres en cascade. Cette hiérarchie est composée de trois niveaux différents. Tous les paramètres de configuration disponibles peuvent exister à l'intérieur de ces niveaux et sont lus en fonction des besoins.

Die erste Instanz stellt die benutzerspezifische Ebene dar. In dieser Ebene werden unmittelbar vom Benutzer vorgenommene Parameter hinterlegt. Wird ein Parameter abgerufen, der vom Benutzer nicht gepflegt wurde, stellt die "mandantenweite" Ebene einen Standardwert bereit. Je nach Parameter kann es sein, dass die Bereitstellung einer mandantenspezifischen Einstellung keinen Sinn macht. Daher wird in letzter Instanz der systemweite Einstellungspool abgerufen.

La première instance représente le niveau spécifique à l'utilisateur. Les paramètres directement définis par l'utilisateur sont enregistrés à ce niveau. Si un paramètre qui n'a pas été géré par l'utilisateur est appelé, le niveau "à l'échelle du mandant" met à disposition une valeur standard. Selon le paramètre, il peut arriver que la mise à disposition d'un paramètre spécifique au mandant n'ait pas de sens. C'est pourquoi le pool de paramètres à l'échelle du système est appelé en dernier recours.

Dieses hierarchische System stellt sicher, dass i-doit hochgradig personalisierbar bleibt und weiterhin einen leichten Einstieg mit bestmöglichen Standardeinstellungen bietet.

Ce système hiérarchique garantit qu'i-doit reste hautement personnalisable et continue à offrir une prise en main facile avec les meilleurs paramètres par défaut possibles.

Die i-doit-Systemeinstellungen können von Add-ons um eigene Konfigurationen erweitert werden. Dadurch wird auch automatisch das Formular in der GUI unter **Verwaltung → Systemeinstellungen** erweitert. Falls einzelne Einstellungen nicht in der GUI dargestellt werden sollen, brauchen sie nicht registriert, sondern lediglich im Code "benutzt" werden. Solche implizite Einstellungen können nur über die Experteneinstellungen konfiguriert werden.

Les paramètres du système i-doit peuvent être étendus par des add-ons avec leurs propres configurations. Ainsi, le formulaire dans l'interface graphique sous **Administration → Paramètres système** est automatiquement étendu. Si certains paramètres ne doivent pas être représentés dans l'interface graphique, il n'est pas nécessaire de les enregistrer, mais simplement de les "utiliser" dans le code. De tels paramètres implicites ne peuvent être configurés que par le biais des paramètres experts.

Systemeinstellungen können für drei Schichten definiert werden: System, Mandanten oder Benutzer.

Les paramètres du système peuvent être définis pour trois couches : Système, Mandants ou Utilisateurs.

Der dahinterliegende Code ist beinahe identisch und unterscheidet sich nur in der genutzten Klasse:

Le code sous-jacent est presque identique et ne diffère que par la classe utilisée :

* Systemweite Einstellungen: isys_settings
* Mandantenweite Einstellungen: isys_tenantsettings
* Einstellungen je Benutzer: isys_usersettings

* Paramètres à l'échelle du système : isys_settings
* Paramètres à l'échelle du mandant : isys_tenantsettings
* Paramètres par utilisateur : isys_usersettings

Jede dieser drei Klassen liefert die statische Methode extend, die benutzt werden muss, um eine Einstellungen (für die GUI) zu registrieren. Dies muss in der init.php geschehen und kann folgendermaßen aussehen:

Chacune de ces trois classes fournit la méthode statique extend, qui doit être utilisée pour enregistrer un paramètre (pour l'interface utilisateur graphique). Cela doit être fait dans init.php et peut se présenter comme suit :

```
isys_settings::extend([
    'LC__EXAMPLE__SETTINGS' => [
        'example.text'          => [
            'title'       => 'LC__EXAMPLE__SETTINGS__SIMPLE_SELECT',
            'description' => 'LC__EXAMPLE__SETTINGS__SIMPLE_SELECT_DESCRIPTION',
            'type'        => 'text',
            'placeholder' => 'Placeholder text',
            'default'     => '',
        ],
        'example.simple-select' => [
            'title'       => 'LC__EXAMPLE__SETTINGS__SIMPLE_SELECT',
            'description' => 'LC__EXAMPLE__SETTINGS__SIMPLE_SELECT_DESCRIPTION',
            'type'        => 'select',
            'options'     => [
                'a' => 'Option A',
                'b' => 'Option B',
                'c' => 'Option C',
            ],
            'default'     => 'a'
        ],
        'example.yes-no-select' => [
            'title'       => 'LC__EXAMPLE__SETTINGS__YES_NO_SELECT',
            'description' => 'LC__EXAMPLE__SETTINGS__YES_NO_SELECT_DESCRIPTION',
            'type'        => 'select',
            'options'     => get_smarty_arr_YES_NO(),
            'default'     => '0',
        ],
        'example.integer'       => [
            'title'       => 'LC__EXAMPLE__SETTINGS__INTEGER',
            'description' => 'LC__EXAMPLE__SETTINGS__INTEGER_DESCRIPTION',
            'type'        => 'int',
            'placeholder' => 1,
            'default'     => 1
        ],
        'example.float'         => [
            'title'       => 'LC__EXAMPLE__SETTINGS__FLOAT',
            'description' => 'LC__EXAMPLE__SETTINGS__FLOAT_DESCRIPTION',
            'type'        => 'float',
            'placeholder' => 1.0,
            'default'     => 1.0
        ]
    ]
]);
```

In diesem Code-Beispiel ist jeder Einstellungstyp (text, select, int, ...) vertreten. Weitere Typen werden derzeit (Stand i-doit 1.11.x) nicht unterstützt.

Dans cet exemple de code, chaque type de réglage (text, select, int, ...) est représenté. D'autres types ne sont actuellement pas supportés (version i-doit 1.11.x).

Die entsprechenden Settings sind anschließend über ihre Schlüssel im Code verfügbar:

Les paramètres correspondants sont ensuite disponibles via leurs clés dans le code :

```
$textValue = isys_settings::get('example.text', 'Default');
$simpleSelectValue = isys_settings::get('example.simple-select', 'c');
$floatValue = isys_settings::get('example.float', 1.0);
```

Es muss darauf geachtet werden, die korrekte Klasse bei der Abfrage der Einstellungen zu benutzen.

Il faut veiller à utiliser la classe correcte lors de la demande des paramètres.