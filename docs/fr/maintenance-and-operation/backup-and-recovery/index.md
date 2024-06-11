# Sauvegarde et Récupération

Étant donné que la [documentation informatique](../../glossary.md) contient des données importantes nécessaires pour le travail quotidien, la sauvegarde et la récupération d'i-doit sont essentielles. Il est donc important de prendre en compte i-doit en ce qui concerne la stratégie de sauvegarde existante.

Dans ce contexte, les trois domaines suivants doivent être couverts : les [bases de données](index.md) d'i-doit, les [fichiers](index.md) d'i-doit et la [configuration système](index.md).

Sauvegarde et Récupération des Bases de Données
--------------------------------

À cette fin, vous pouvez utiliser l'outil en ligne de commande mysqldump. Un exemple simple pour sécuriser toutes les données :

    mysqldump -hlocalhost -uroot -p --all-databases > backup.sql

La récupération correspondante est la suivante :

    mysql -hlocalhost -uroot -p < backup.sql

Vous ne devriez pas utiliser i-doit pendant le processus de sauvegarde afin de ne pas corrompre la sauvegarde. Le serveur Web peut être désactivé pendant la sauvegarde/récupération. Sur les distributions Linux basées sur Debian, la commande

    sudo service apache2 stop

est exécutée. Lorsque la sauvegarde/récupération est terminée, la commande  

```markdown
    sudo service apache2 start
```

peut être utilisé pour réactiver le serveur Web. Si nécessaire, vous devriez également désactiver les [Cronjobs](../../automation-and-integration/cli/index.md), qui sont configurés dans i-doit, pendant le processus de sécurisation des données et les réactiver par la suite.

!!! success "Compression"

    Beaucoup d'espace disque peut être économisé en compressant les dumps SQL. Par exemple, les commandes mentionnées ci-dessus pourraient ressembler à ceci :

        # Sauvegarde :
        mysqldump -hlocalhost -uroot -p --all-databases | gzip -9 > backup.sql.gz

        # Restauration :
        gunzip < backup.sql.gz | mysql -hlocalhost -uroot -p

!!! attention "Contraintes de clé étrangère"

    Lors de la restauration du contenu de la base de données, il peut arriver que MySQL/MariaDB interrompe le processus et affiche un message d'erreur, par exemple : errno: 150 "La contrainte de clé étrangère est mal formée"

    Cela est dû au fait que les données et les structures sont restaurées les unes après les autres (c'est-à-dire table après table). Pendant ce temps, d'anciennes données existent en plus des nouvelles (restaurées). Le modèle de base de données d'i-doit contient de nombreux liens de tables entre eux pour lesquels des contraintes de clé étrangère sont utilisées. Cette référence, par exemple, d'un ensemble de données A dans la table 1 à un ensemble de données B dans la table 2, est soumise à des automatismes spécifiques lorsque A ou B est mis à jour ou même supprimé. L'ordre est important pour déterminer quand A est restauré et quand B est restauré. Les anciennes et nouvelles références peuvent cependant utiliser les mêmes index même si elles expriment des références différentes. Cela peut entraîner les erreurs mentionnées ci-dessus.
```

    Supprimer explicitement les bases de données avant de les restaurer est une solution de contournement appropriée pour cela :

        -- Nom par défaut de la base de données système :
        DROP DATABASE idoit_system;

        -- Nom par défaut de la première base de données client :
        DROP DATABASE idoit_data;

Sauvegarde et Restauration des Fichiers
---------------------------------------

Nous recommandons de sécuriser l'intégralité du dossier i-doit et - si nécessaire - de restaurer l'intégralité du dossier. En utilisant

    tar -czvf i-doit.tar.gz /chemin/vers/i-doit

vous pouvez créer une archive tar compressée.

La restauration correspondante est la suivante :

    tar -xzv i-doit.tar.gz

Sauvegarde et Restauration de la Configuration Système
------------------------------------------------------

Il est important pour le fonctionnement immédiat de i-doit de sécuriser les fichiers de configuration du serveur Web Apache, de PHP et de MySQL/MariaDB et de les restaurer, si nécessaire. Dans le meilleur des cas, vous avez déjà documenté les modifications correspondantes des fichiers de configuration et les avez stockées en toute sécurité lors du processus d'[installation](../../installation/index.md) de i-doit.

Sauvegarde via les Instantanés de VM
---------------------------------------

i-doit est souvent installé sur une machine virtuelle (VM). Cependant, pour des raisons de sauvegarde et de récupération, il ne suffit pas de simplement prendre des instantanés de la VM pendant son fonctionnement. Le problème réside dans la cohérence des bases de données : Les données peuvent être stockées dans la mémoire de travail mais ne sont pas (encore) situées dans la mémoire non volatile. Il est donc possible que des données ne soient pas couvertes par la sauvegarde et soient ainsi perdues si la sauvegarde est nécessaire.

Si vous ne voulez toujours pas vous passer des instantanés, le SGBD MySQL/MariaDB doit être arrêté au préalable. Sur les systèmes d'exploitation basés sur Debian, cela est effectué via la commande suivante :

    sudo service mysql stop

Une fois l'instantané pris, le SGBD est redémarré :

    sudo service mysql start

Il est certainement bien compris mais toujours important de mentionner : **Les sauvegardes ne doivent jamais rester sur le système qui est sécurisé.**

{/*examples*/}

