<!-- TRANSLATED by md-translate -->
# Release Notes 1.10

# Notes de publication 1.10

## Systemvoraussetzungen

## Configuration requise

* i-doit unterstützt nun PHP ab 5.6 bis 7.0
* Der MySQL Parameter **innodb_stats_on_metadata = 0** sollte gesetzt werden, um die Performance beim Speichern von Kategorien zu erhöhen

* i-doit supporte désormais PHP à partir de 5.6 jusqu'à 7.0
* Le paramètre MySQL **innodb_stats_on_metadata = 0** doit être défini pour améliorer les performances lors de l'enregistrement des catégories.

## Weitere Informationen

## Plus d'informations

* Die Verkabelungs-Kategorie benutzt nun das Verkabelungs-Addon. Wenn Sie Verkabelungen dokumentieren, installieren sie bitte das freie Verkabelungs-Add-on.

* La catégorie de câblage utilise maintenant le module complémentaire de câblage. Si vous documentez des câblages, veuillez installer le module complémentaire de câblage gratuit.

## Migrationen

## migrations

* Der Controller benutzt nun das Symfony Framework als Backend. Das Controller Kommando ist derzeit noch abwärtskompatibel. Sehen sie bitte in unserer Knowledgebase nach, wie sie ihre Cronjobs auf die neue Controller Console umstellen.

* Le contrôleur utilise désormais le framework Symfony comme backend. La commande du contrôleur est actuellement encore rétrocompatible. Veuillez consulter notre base de connaissances pour savoir comment convertir vos cronjobs à la nouvelle console du contrôleur.
