Exigences système
-------------------

*   i-doit prend désormais en charge PHP de 5.6 à 7.0
    
*   Le paramètre MySQL **innodb_stats_on_metadata = 0** doit être défini pour améliorer les performances
    

Informations supplémentaires
----------------------

*   La catégorie de câblage utilise désormais l'extension Cabling. Si vous l'utilisez, vous devez installer l'extension Cabling
    

Migrations
----------

*   Le contrôleur utilise désormais la console Symfony comme framework. Il est toujours rétrocompatible, mais obsolète. Veuillez consulter notre base de connaissances pour savoir comment modifier vos tâches cron pour utiliser la nouvelle console Controller.
