# Migration d'une Installation sous GNU/Linux

Cet article se concentre sur la procédure générale pour migrer une installation i-doit d'un GNU/Linux à un autre. La migration inclut les bases de données ainsi que les fichiers et répertoires.

## Préparation et Hypothèses

!!! warning "Les deux systèmes doivent être sur la même version d'i-doit"

Vous devez observer quelques points pour garantir une migration sans problème :

1. i-doit et les [modules complémentaires](../i-doit-pro-add-ons/index.md) optionnels doivent être [à jour](../maintenance-and-operation/update.md).
2. Aucun changement ne doit être apporté au système ancien, afin que nous puissions rapidement revenir à l'état d'origine en cas de problème.
3. Les commandes présentées ici s'appliquent à un Debian GNU/Linux actuel et doivent être modifiées en fonction de l'environnement. Évitez une approche aveugle concernant l'exécution des commandes.

## Préparation du Nouveau Système

Tout d'abord, il est nécessaire de préparer les nouveaux systèmes autant que possible en observant ce qui suit :

1. Le nouveau système d'exploitation répond aux [exigences du système](../installation/system-requirements.md) et est à jour.
2. Les [paramètres du système](../installation/manual-installation/system-settings.md) ont été configurés sur le nouveau système d'exploitation.
3. Les [mesures de sécurité](../maintenance-and-operation/security-and-protection.md) habituelles ont été effectuées.

## Fermeture de l'Ancien Système {/fermeture-ancien-systeme}

L'ancien système ne doit plus être utilisé de manière productive pendant le processus de migration :

1. Bien sûr, les temps d'arrêt sont ennuyeux, surtout lorsque les utilisateurs ne s'y attendent pas. Par conséquent, vous devriez informer les utilisateurs d'i-doit de la migration imminente de l'installation et de la durée approximative de l'arrêt.
2. Vous devriez désactiver l'[accès automatisé des systèmes tiers](../automation-and-integration/index.md).
3. Les [tâches cron](../automation-and-integration/cli/index.md) devraient également être désactivées. Dans la plupart des cas, il suffit de commenter les lignes de commande.
4. Après que les points mentionnés ci-dessus ont été complétés, vous devriez arrêter le serveur Web Apache :

        sudo systemctl stop apache2.service

## Migration des Fichiers et Répertoires {/migration-fichiers-repertoires}

1. Nous copions l'intégralité du répertoire d'installation d'i-doit de l'ancien système vers le nouveau système. Dans de nombreux cas, le répertoire est situé sous /var/www/html/. Voici un exemple avec SSH, où i-doit peut être trouvé dans le répertoire /var/www/html/i-doit/.

        scp -r user@oldsystem:/var/www/html/i-doit/ /tmp/
        scp -r /tmp/i-doit/ user@newsystem:/tmp/
        ssh user@newsystem
        sudo -u www-data cp -r /tmp/i-doit/ /var/www/html/

2. Après le processus de copie, vous devez vous assurer que les autorisations du système de fichiers sont correctement définies. Le serveur web Apache nécessite des autorisations de lecture et d'écriture pour le répertoire d'installation complet. Dans l'article "[Configuration](../installation/manual-installation/setup.md)" vous pouvez trouver des conseils supplémentaires. Exemple :

        cd /var/www/html/i-doit/
        sudo chown www-data:www-data -R .
        sudo find . -type d -name \* -exec chmod 775 {} \;
        sudo find . -type f -exec chmod 664 {} \;

3. i-doit stocke des caches internes sous le répertoire temp/. Le contenu doit être complètement supprimé. Les caches sont créés automatiquement lors de la première utilisation de i-doit :

        sudo rm -r temp/*

4. Vous devriez vérifier si le fichier .htaccess a été copié :

        ls -lha /var/www/html/i-doit/.htaccess

## Migration des bases de données

1. i-doit nécessite au moins deux [bases de données](../software-development/database-model/index.md). Vous devriez créer une sauvegarde de chaque base de données sur l'ancien système :

        mysqldump -uroot -p idoit_system > /tmp/idoit_system.sql
        mysqldump -uroot -p idoit_data > /tmp/idoit_data.sql

    \*Si la base de données existe depuis longtemps, ce message d'erreur peut apparaître : "Impossible de créer la table \idoit\_data\.\table\_name\ (errno: 140 "Mauvaises options de création")". Vous pouvez trouver la solution [ICI](../system-administration/troubleshooting/cant-create-table.md)
2. Nous copions ces dumps vers le nouveau système :

        scp user@oldsystem:/tmp/idoit_system.sql /tmp/
        scp user@oldsystem:/tmp/idoit_data.sql /tmp/
        scp /tmp/idoit_system.sql user@newsystem:/tmp/
        scp /tmp/idoit_data.sql user@newsystem:/tmp/

3. Ensuite, les dumps sont importés dans le nouveau système :

        mysql -uroot -p
        CREATE DATABASE idoit_system;
        CREATE DATABASE idoit_data;
        exit
        mysql -uroot -p idoit_system < /tmp/idoit_system.sql
        mysql -uroot -p idoit_data < /tmp/idoit_data.sql

4. Un utilisateur MySQL a été créé lors de la configuration initiale d'i-doit [setup](../installation/manual-installation/setup.md) (emplacement : idoit). Cet utilisateur doit être disponible sur le nouveau système avec des autorisations et un mot de passe identiques. Pour ce faire, nous nous connectons avec le superutilisateur de MySQL:

```sql
mysql -uroot -p
```

Nous exécutons maintenant les commandes SQL requises :

```sql
GRANT ALL PRIVILEGES ON idoit_system.* TO 'idoit'@'localhost' IDENTIFIED BY 'mypasswd';
GRANT ALL PRIVILEGES ON idoit_data.* TO 'idoit'@'localhost' IDENTIFIED BY 'mypasswd';
exit;
```

Nous nous connectons avec cet utilisateur pour un test :

```sql
mysql -uidoit -p
```

Dans ce contexte, nous pouvons également vérifier les informations d'identification des bases de données du locataire :

```sql
SELECT * FROM idoit_system.isys_mandator;
exit;
```

Le mot de passe ci-dessus pour l'utilisateur idoit doit être identique aux détails du fichier /var/www/html/i-doit/src/config.inc.php.

## Travail de Suivi

1. Ensuite, vous devriez adapter les entrées DNS, les adresses IP, les noms d'hôtes, etc., afin que i-doit puisse être accessible comme d'habitude.
2. Maintenant, les interfaces vers des systèmes tiers peuvent être réactivées. Les fonctions doivent être vérifiées.
3. Réactivez les tâches cron et testez-les.
4. Mettez en place des [sauvegardes](../maintenance-and-operation/backup-and-recovery/index.md) et testez-les.
5. Lorsque l'interface Web réagit comme d'habitude et que toutes les données sont disponibles dans i-doit, la migration a été réussie.


