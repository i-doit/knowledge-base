# Pas de connexion après avoir modifié le délai de session

Problème
-------

Sous **Administration → Paramètres système → Session → Délai de session**, il est spécifié après combien de secondes un utilisateur inactif est automatiquement déconnecté d'i-doit. La valeur par défaut est de 600 secondes (10 minutes). Si une valeur très basse, une valeur de 0 ou même un nombre négatif est défini, aucun utilisateur ne pourra se connecter au système sans être déconnecté peu de temps après. Cela rend le travail avec i-doit impossible.

Solution
--------

Si la valeur est définie si basse qu'il n'est pas possible de changer la valeur assez rapidement dans l'interface web, nous devons emprunter un autre chemin. Le remède consiste à utiliser une instruction SQL pour définir une valeur raisonnable pour le délai de session :

    UPDATE idoit_system.isys_settings SET isys_settings__value = '86400' WHERE isys_settings__key = 'session.time';

Ici, idoit\_system est le nom de la base de données système et 86400 correspond à une semaine. Nous déconseillons fortement les valeurs au-delà de la plage de nombres 32 bits, par exemple 999999999999999999.

Ces paramètres et bien d'autres sont stockés dans un cache pour des raisons de performance. Pour que les modifications deviennent actives, le répertoire temp/ dans le répertoire d'installation d'i-doit doit être vidé :

    sudo rm -r /var/www/html/i-doit/temp/*

Ici, ***/var/www/html/i-doit/*** correspond au chemin d'installation d'i-doit.

Lorsque i-doit est appelé via l'interface web, le cache est automatiquement recréé pour que le changement manuel devienne actif. La connexion et le travail ultérieur sur la documentation informatique devraient maintenant fonctionner à nouveau.
