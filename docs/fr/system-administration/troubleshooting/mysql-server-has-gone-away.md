# "Le serveur MySQL est parti"

Problème
--------

Lors du démarrage d'i-doit, le message d'erreur "Le serveur MySQL est parti" apparaît.

Solution
--------

La configuration par défaut de la propriété ***max_allowed_packet*** a la valeur 1M dans certains environnements. Ajustez ce paramètre dans le fichier de configuration de MySQL/MariaDB comme suit :

    max_allowed_packet = 128M

Consultez également nos [paramètres système recommandés](../../installation/manual-installation/system-settings.md).
