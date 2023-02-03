i-doits Systemeinstellungen sind ein hierarchisches System kaskadierender Einstellungsparameter. Diese Hierarchie wird aus insgesamt drei verschiedenen Ebenen zusammengesetzt. Alle verfügbaren Einstellungsparameter können innerhalb dieser Ebenen existieren und werden je nach Bedarf gelesen.

Die erste Instanz stellt die benutzerspezifische Ebene dar. In dieser Ebene werden unmittelbar vom Benutzer vorgenommene Parameter hinterlegt. Wird ein Parameter abgerufen, der vom Benutzer nicht gepflegt wurde, stellt die “mandantenweite” Ebene einen Standardwert bereit. Je nach Parameter kann es sein, dass die Bereitstellung einer mandantenspezifischen Einstellung keinen Sinn macht. Daher wird in letzter Instanz der systemweite Einstellungspool abgerufen.

Dieses hierarchische System stellt sicher, dass i-doit hochgradig personalisierbar bleibt und weiterhin einen leichten Einstieg mit bestmöglichen Standardeinstellungen bietet.

Die i-doit-Systemeinstellungen können von Add-ons um eigene Konfigurationen erweitert werden. Dadurch wird auch automatisch das Formular in der GUI unter `**Verwaltung → Systemeinstellungen**` erweitert. Falls einzelne Einstellungen nicht in der GUI dargestellt werden sollen, brauchen sie nicht registriert, sondern lediglich im Code "benutzt" werden. Solche implizite Einstellungen können nur über die Experteneinstellungen konfiguriert werden.

Systemeinstellungen können für drei Schichten definiert werden: System, Mandanten oder Benutzer.

Der dahinterliegende Code ist beinahe identisch und unterscheidet sich nur in der genutzten Klasse:

*   Systemweite Einstellungen: `isys_settings`
*   Mandantenweite Einstellungen: `isys_tenantsettings`
*   Einstellungen je Benutzer: `isys_usersettings`

Jede dieser drei Klassen liefert die statische Methode `extend`, die benutzt werden muss, um eine Einstellungen (für die GUI) zu registrieren. Dies muss in der `init.php` geschehen und kann folgendermaßen aussehen:

[?](#)

`isys_settings::extend([`

`'LC__EXAMPLE__SETTINGS'` `=> [`

`'example.text'`          `=> [`

`'title'`       `=>` `'LC__EXAMPLE__SETTINGS__SIMPLE_SELECT'``,`

`'description'` `=>` `'LC__EXAMPLE__SETTINGS__SIMPLE_SELECT_DESCRIPTION'``,`

`'type'`        `=>` `'text'``,`

`'placeholder'` `=>` `'Placeholder text'``,`

`'default'`     `=>` `''``,`

`],`

`'example.simple-select'` `=> [`

`'title'`       `=>` `'LC__EXAMPLE__SETTINGS__SIMPLE_SELECT'``,`

`'description'` `=>` `'LC__EXAMPLE__SETTINGS__SIMPLE_SELECT_DESCRIPTION'``,`

`'type'`        `=>` `'select'``,`

`'options'`     `=> [`

`'a'` `=>` `'Option A'``,`

`'b'` `=>` `'Option B'``,`

`'c'` `=>` `'Option C'``,`

`],`

`'default'`     `=>` `'a'`

`],`

`'example.yes-no-select'` `=> [`

`'title'`       `=>` `'LC__EXAMPLE__SETTINGS__YES_NO_SELECT'``,`

`'description'` `=>` `'LC__EXAMPLE__SETTINGS__YES_NO_SELECT_DESCRIPTION'``,`

`'type'`        `=>` `'select'``,`

`'options'`     `=> get_smarty_arr_YES_NO(),`

`'default'`     `=>` `'0'``,`

`],`

`'example.integer'`       `=> [`

`'title'`       `=>` `'LC__EXAMPLE__SETTINGS__INTEGER'``,`

`'description'` `=>` `'LC__EXAMPLE__SETTINGS__INTEGER_DESCRIPTION'``,`

`'type'`        `=>` `'int'``,`

`'placeholder'` `=> 1,`

`'default'`     `=> 1`

`],`

`'example.float'`         `=> [`

`'title'`       `=>` `'LC__EXAMPLE__SETTINGS__FLOAT'``,`

`'description'` `=>` `'LC__EXAMPLE__SETTINGS__FLOAT_DESCRIPTION'``,`

`'type'`        `=>` `'float'``,`

`'placeholder'` `=> 1.0,`

`'default'`     `=> 1.0`

`]`

`]`

`]);`

In diesem Code-Beispiel ist jeder Einstellungstyp (text, select, int, ...) vertreten. Weitere Typen werden derzeit (Stand i-doit 1.11.x) nicht unterstützt.

Die entsprechenden Settings sind anschließend über ihre Schlüssel im Code verfügbar:

[?](#)

`$textValue` `= isys_settings::get(``'example.text'``,` `'Default'``);`

`$simpleSelectValue` `= isys_settings::get(``'example.simple-select'``,` `'c'``);`

`$floatValue` `= isys_settings::get(``'example.float'``, 1.0);`

Es muss darauf geachtet werden, die korrekte Klasse bei der Abfrage der Einstellungen zu benutzen.