# Migration de Windows vers Linux 

Il peut y avoir de bonnes raisons d'exploiter i-doit sous [Windows](../installation/manual-installation/microsoft-windows-server/index.md). Cependant, en raison de diverses raisons, nous recommandons l'utilisation de Linux. Mais comment transférer la [documentation informatique](../glossary.md) bien établie dans une opération en cours d'un système à un autre aussi facilement que possible?

## Préparation et hypothèses 

!!! warning "Les deux systèmes doivent être sur la même version d'i-doit"

Avant de commencer, quelques points doivent être pris en compte. L'objectif est de migrer sans une longue période d'arrêt et surtout sans perte de données.

Tous ceux impliqués dans le travail avec les données d'i-doit doivent être informés de la migration en temps voulu. Rien n'est pire que des collègues en colère dont le flux de travail a été interrompu.

De plus, tous les ports qui seront utilisés en accord avec i-doit doivent être identifiés. Plus précisément: Quels systèmes tiers, tels que [Nagios](../automation-and-integration/network-monitoring/nagios.md), [((OTRS)) Community Edition](../automation-and-integration/service-desk/otrscommunity-help-desk.md) & [Co.](../consolidate-data/index.md), accèdent à i-doit? Pendant la migration, l'accès aux données doit être désactivé. Il en va de même pour l'exécution des [tâches](../automation-and-integration/cli/index.md), des [sauvegardes](../maintenance-and-operation/backup-and-recovery/index.md) et de la surveillance, qui garantit qu'un serveur Web en cours d'exécution répond aux requêtes HTTP via les ports 80/443 sur le système Windows.

Nous supposons qu'une instance de XAMPP est utilisée sous Windows et n'est pas ou juste minimalement ajustée. Par exemple, une version plus récente de [Apache Friends](https://www.apachefriends.org/). Le serveur Web Apache, le SGBD MySQL ou MariaDB et le langage de script PHP sont installés via cette distribution. Dans ce qui suit, nous mentionnons uniquement MySQL, même si MariaDB est utilisé. Si vous avez apporté des modifications à la configuration, celles-ci doivent être prises en compte pour le nouveau système.

Enfin, nous supposons que le nouveau système d'accueil d'i-doit est déjà prêt, que toutes les [exigences système](../installation/system-requirements.md) sont remplies et que les [paramètres](../installation/manual-installation/system-settings.md) ont été effectués. Tous les services attendus par i-doit devraient être disponibles sur le nouveau système : DNS, SMTP, LDAP/AD. Tout fonctionne-t-il ? D'accord, commençons.

Une dernière chose : Vous devriez avoir tous les comptes système et mots de passe prêts, qui sont utilisés sur l'ancien système ainsi que sur le nouveau système. Cela inclut les utilisateurs système MySQL (root) et l'utilisateur i-doit pour MySQL (par défaut i-doit).

## Exporter des données depuis Windows

Tout d'abord, nous nous occupons de sécuriser les données du vieux système afin de les transférer vers le nouveau système :

1. Le serveur Web Apache doit être désactivé pour empêcher toute requête externe d'entrer. Nous laissons le backend de la base de données MySQL en cours d'exécution, sinon nous ne pourrons pas accéder aux données.
2. Nous compressons le dossier dans lequel i-doit est installé (généralement situé dans C:\xampp\htdocs\) dans un fichier ZIP nommé i-doit.zip.
3. Nous exportons les bases de données de i-doit (par défaut, les installations avec un client sont idoit_system et idoit_data) avec le logiciel mysqldump.exe. Pour cela, nous ouvrons l'invite de commandes et nous déplaçons vers le chemin où se trouve le logiciel (par exemple, à C:\xampp\mysql\bin\). Nous continuons en exécutant la commande suivante :

        mysqldump.exe -uidoit -p --databases idoit_system idoit_data > i-doit.sql

    Après avoir saisi le mot de passe, toutes les données sont écrites dans le fichier i-doit.sql.

4. Maintenant, nous arrêtons le processus MySQL et espérons que ni MySQL ni le serveur Web Apache ne seront jamais nécessaires à nouveau sous Windows.


## Migrer les données vers GNU/Linux 

Après avoir copié à la fois le fichier ZIP, y compris le dossier i-doit, et le fichier SQL, y compris le contenu de la base de données, sur le nouveau serveur ([WinSCP](http://winscp.net/eng/index.php) remplit bien cette fonction), nous nous connectons via SSH (par exemple via [Putty](http://www.putty.org/)) et opérons en ligne de commande à partir de maintenant. Le serveur Web Apache, MySQL et PHP sont entièrement configurés et tous les paquets nécessaires sont correctement [installés](../installation/index.md). La seule chose qui manque est i-doit :

### Base de données 

1. Nous importons la base de données. Pour cela, nous utilisons le client MySQL :

        mysql -uroot -p < i-doit.sql

    *Si la base de données existe depuis longtemps, ce message d'erreur peut apparaître : "Impossible de créer la table \idoit\_data\.\table\_name\ (errno: 140 "Mauvaises options de création")". Vous pouvez trouver la solution [ICI](../system-administration/troubleshooting/cant-create-table.md)

2. Ensuite, nous nous connectons à MySQL pour configurer l'utilisateur nécessaire pour i-doit :

        mysql -uroot -p

    Les commandes SQL suivantes configurent l'utilisateur idoit, qui a accès aux deux bases de données :

```sql
        accorder toutes les autorisations sur idoit_system.* à idoit@localhost identifié par 'monmotdepasse';
        accorder toutes les autorisations sur idoit_data.* à idoit@localhost identifié par 'monmotdepasse';

    Ensuite, nous devrions tester ceci en nous connectant avec ces identifiants pour voir si les bases de données peuvent être lues correctement :

        mysql -uidoit -p,
        utiliser idoit_system;

3. Puisque nous y sommes déjà, nous devrions charger la table isys_mandator pour vérifier les identifiants :

        sélectionner* from isys_mandator;

4. Il se peut que des chemins absolus soient stockés dans la base de données. Les ensembles de données concernés incluent system.dir.file-upload et system.dir.image-upload dans la table isys_settings :

        sélectionner* from isys_settings

    Les chemins relatifs, comme upload/files/ et upload/images/, sont légitimes.

5. Nous fermons le client MySQL avec la commande exit; ou en appuyant sur CTRL+D .

## Fichiers

1. Nous extrayons le fichier ZIP à l'emplacement souhaité. Dans Debian GNU/Linux, cela se ferait dans /var/www/html/ :

        sudo unzip i-doit.zip

2. Ensuite, nous définissons correctement les autorisations et nettoyons :
```

```shell
sudo chown www-data:www-data -R .
sudo find . -type d -name \* -exec chmod 775 {} \;
sudo find . -type f -exec chmod 664 {} \;
sudo chmod 774 controller tenants import updatecheck *.sh
sudo rm -r temp/*
```

Si nécessaire, nous supprimons les fichiers qui pourraient rester de l'installation de XAMPP.

Maintenant, il est temps pour un premier grand test : Est-ce que le nouveau domicile de i-doit peut être ouvert via le navigateur ? Sinon, quelque chose s'est mal passé dans les étapes précédentes. Une analyse d'erreur précise est importante pour cela.

### Tâches Cron

Ce qui reste, c'est le transfert des tâches Windows vers les tâches Cron. La plupart du temps, le [contrôleur i-doit (CLI)](../automation-and-integration/cli/index.md) doit effectuer des tâches récurrentes. Si vous n'avez pas encore configuré de tâches/Cron pour i-doit, vous devriez le faire maintenant.

## Travaux de Suivi

Suite à cette migration, vous devriez effectuer divers tests et réactiver les interfaces entre i-doit et les outils tiers. Il est également important de faire fonctionner les [sauvegardes](../maintenance-and-operation/backup-and-recovery/index.md). Si tous les tests sont concluants (ce qui peut être espéré), le mode maintenance peut être conclu et tous les collègues informés que la documentation IT est à nouveau disponible. 



Combien de temps prend une telle migration ? Si l'on ignore la préparation et le travail ultérieur, une telle migration ne prend pas plus de deux heures, donc cela en vaut la peine. Bonne chance !
