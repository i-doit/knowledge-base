# Release Notes 1.11

Systemvoraussetzungen
---------------------

*   i-doit unterstützt nun [PHP ab 5.6 bis 7.1](../../installation/systemvoraussetzungen.md)

Hinweise
--------

*   Generieren Sie bitte nach der Installation mithilfe des [Kommandozeilen-Tools Console](../../automatisierung-und-integration/cli/index.md) den Suchindex neu. Beispielaufruf:

    cd /var/www/html/
    sudo -u www-data php console.php search-index --user admin --password admin --tenantId 1

*   Das Console Kommando **search-index** bietet jetzt die beiden Parameter

    **--update** um den Suchindex zu aktualisieren
    **--category** um eine bestimmte Kategorie zu aktualisieren. Kann mehrfach in einem Aufruf verwendet werden.

    Werden keine Parameter angegeben, wird der Suchindex komplett neu generiert. Die Parameter **fullindex** und **reindex** sind nicht mehr zu benutzen.

Bei Fragen können Sie sich gerne jederzeit an unseren Support unter [https://help.i-doit.com](https://help.i-doit.com) wenden.
