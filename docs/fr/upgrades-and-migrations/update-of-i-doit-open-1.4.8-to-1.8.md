# Mise à jour de i-doit open 1.4.8 à 1.8

Cet article explique les particularités à prendre en compte lors d'une mise à jour de la version ouverte 1.4.8 à 1.8.

Préparation
-----------

Le passage de la version 1.4.8 à la version 1.8 entraîne de nombreux changements. Des changements substantiels de l'interface Web et du modèle de base de données ont été effectués. L'API propose considérablement plus de fonctions et est proposée en tant que module séparé et gratuit.

Téléchargement
--------------

[Vous pouvez télécharger le package de mise à jour ici](../assets/downloads/idoit-open-1.8-update.zip)

Voici les prérequis suivants :

*   L'installation utilisée jusqu'à présent est la version 1.4.8. Si vous utilisez une version antérieure, vous devez mettre à jour l'installation vers la version 1.4.8.
*   Tout d'abord, une mise à jour vers la version 1.8 est effectuée. Vous ne pouvez pas mettre à jour vers des versions plus récentes avant d'avoir exécuté la mise à jour vers la version 1.8.

Exécution
---------

Après le téléchargement, vous copiez et décompressez le package de mise à jour dans le répertoire d'installation de i-doit. Voici un exemple pour un système d'exploitation basé sur Debian :

    sudo -u www-data cp idoit-open-1.8-update.zip /var/www/html/i-doit/
    cd /var/www/html/i-doit/
    sudo -u www-data unzip idoit-open-1.8-update.zip

Vous devez adapter le chemin en conséquence. Copiez et décompressez le package avec l'utilisateur du serveur Web Apache afin que la mise à jour soit effectuée avec les droits de cet utilisateur sans problèmes.

En principe, la procédure de mise à jour ultérieure ne diffère pas d'une mise à jour normale [via l'interface Web](../maintenance-and-operation/update.md). Comme la version 1.8 est une mise à jour majeure, vous ne devez pas sauter les mises à jour majeures précédentes. Les mises à jour sont chargées les unes après les autres. Lorsque la première mise à jour a été effectuée, vous êtes invité à charger la mise à jour suivante. Cette procédure se répète jusqu'à ce que la mise à jour pour la version 1.8 soit chargée. Cela donne le chemin de mise à jour suivant :

1.  Mise à jour de la version 1.4.8 à la version 1.5
2.  Mise à jour de la version 1.5 à la version 1.6
3.  Mise à jour de la version 1.6 à la version 1.7
4.  Mise à jour de la version 1.7 à la version 1.8

Une fois que toutes les étapes ont été terminées avec succès, la mise à jour vers la version 1.8 est terminée. Maintenant, l'interface Web affiche le numéro de version 1.8.

Travaux de suivi
--------------

Il est utile de suivre d'autres étapes après la mise à jour :

*   [Configuration de sauvegarde](../maintenance-and-operation/backup-and-recovery/index.md)
*   [Configuration des tâches Cron](../automation-and-integration/cli/index.md)

Dépannage
---------------

À chaque étape, un fichier journal est créé dans le répertoire log/. Si une étape ne peut pas être complétée en raison d'une erreur, cela sera enregistré dans le journal. Ensuite, vous devriez vous abstenir d'exécuter d'autres étapes de mise à jour pour éviter des erreurs ultérieures. Vous pouvez toujours obtenir de l'aide sur le [Forum ouvert](https://forum.i-doit.org/).

D'autres conseils concernant le [dépannage](../system-administration/troubleshooting/index.md) peuvent être trouvés dans la base de connaissances.
