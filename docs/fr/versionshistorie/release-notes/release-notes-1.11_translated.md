<!-- TRANSLATED by md-translate -->
# Release Notes 1.11

# Notes de publication 1.11

## Systemvoraussetzungen

## Configuration requise

* i-doit unterstützt nun [PHP ab 5.6 bis 7.1](../../installation/systemvoraussetzungen.md)

* i-doit supporte maintenant [PHP à partir de 5.6 jusqu'à 7.1](../../installation/conditions-système.md)

## Hinweise

## Indications

* Generieren Sie bitte nach der Installation mithilfe des [Kommandozeilen-Tools Console](../../automatisierung-und-integration/cli/console/index.md) den Suchindex neu. Beispielaufruf:
    cd /var/www/html/
    sudo -u www-data php console.php search-index --user admin --password admin --tenantId 1
* Das Console Kommando **search-index** bietet jetzt die beiden Parameter
    **--update** um den Suchindex zu aktualisieren
    **--category** um eine bestimmte Kategorie zu aktualisieren. Kann mehrfach in einem Aufruf verwendet werden.Werden keine Parameter angegeben, wird der Suchindex komplett neu generiert. Die Parameter **fullindex** und **reindex** sind nicht mehr zu benutzen.

* Après l'installation, veuillez régénérer l'index de recherche à l'aide de [l'outil de ligne de commande Console](../../automatisation-et-intégration/cli/console/index.md). Exemple d'appel :
    cd /var/www/html/
    sudo -u www-data php console.php search-index --user admin --password admin --tenantId 1
* La commande de console **search-index** propose maintenant les deux paramètres
    **--update** pour mettre à jour l'index de recherche
    **--category** pour mettre à jour une catégorie spécifique. Si aucun paramètre n'est spécifié, l'index de recherche est entièrement régénéré. Les paramètres **fullindex** et **reindex** ne doivent plus être utilisés.

Bei Fragen können Sie sich gerne jederzeit an unseren Support unter [https://help.i-doit.com](https://help.i-doit.com) wenden.

Si vous avez des questions, n'hésitez pas à contacter notre support à [https://help.i-doit.com](https://help.i-doit.com).