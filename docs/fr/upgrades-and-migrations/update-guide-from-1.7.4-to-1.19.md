# Guide de mise à jour de i-doit 1.7.4 à 1.19

Ici, vous trouverez des instructions succinctes pour mettre à jour votre i-doit jusqu'à la version 1.19.  
Vous devrez peut-être mettre à jour votre système d'exploitation.  
Ces instructions sont valables pour **Debian** et les commandes utilisées diffèrent sur d'autres systèmes d'exploitation. Avant de commencer, téléchargez toutes les mises à jour nécessaires et copiez-les dans le dossier racine de i-doit.

!!! danger "**Choses importantes à noter au préalable**"

    Ce guide ne comporte aucune garantie et peut ne pas fonctionner dans votre cas d'utilisation spécifique.  
    Cela dépend de la configuration et du type d'installation de votre instance.

    Les mises à jour des **Add-ons** nécessaires ne sont pas mentionnées.

!!! attention "Sauvegarde"

    Faites une sauvegarde ou un instantané **avant chaque étape de mise à jour** !

!!! attention "Notes de version"

    Lisez les [Notes de version](../version-history/index.md) avant de mettre à jour vers une nouvelle version.

!!! attention "Note sur les correctifs"

    Veuillez utiliser exclusivement les correctifs avec la version spécifiée. Les correctifs seront inclus dans les versions ultérieures afin qu'une réinstallation ne soit pas nécessaire.

    Si vous utilisez une ancienne version d'i-doit, il est essentiel de faire une mise à jour vers la dernière version en premier.

    Si un correctif est nécessaire pour mettre à jour une ancienne version, vous pouvez le trouver dans les sous-chapitres des correctifs ici dans la base de connaissances.

    Comme il s'agit de correctifs, nous vous recommandons de les installer uniquement lorsque les ajustements sont nécessaires pour un fonctionnement sans faille de votre installation ou si vous êtes invité par l'équipe de support à les utiliser. Assurez-vous d'avoir fait une [sauvegarde d'i-doit](../maintenance-and-operation/backup-and-recovery/index.md) avant d'utiliser un correctif.

    Veuillez nous informer de l'utilisation des correctifs si vous contactez notre équipe de support par la suite.

| <!-- --> | <!-- --> | <!-- --> | <!-- --> | <!-- --> | <!-- --> | <!-- --> | <!-- --> | <!-- --> | <!-- --> | <!-- --> | <!-- --> | <!-- --> | <!-- --> |
| --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- |
| Version d'i-doit | 1.19 | 1.18 | 1.17 | 1.16 | 1.15 | 1.14 | 1.13 | 1.12 | 1.11 | 1.10 | 1.9 | 1.8 | 1.7 |
| Date de sortie | 2022-09 | 2022-01 | 2021-07 | 2021-01 | 2020-07 | 2020-01 | 2019-06 | 2018-12 | 2018-06 | 2017-12 | 2017-05 | 2016-10 | 2016-03 |
| Serveur Web Apache | 2.4 | 2.4 | 2.4 | 2.4 | 2.4 | 2.4 | 2.4 | 2.4 | 2.4 | 2.4 | 2.4 | 2.4 | 2.2, 2.4 |
| PHP | 7.4 (obsolète)  <br>8.0 (recommandé) | 7.3 (obsolète)  <br>7.4 (recommandé) | 7.3  <br>7.4 (recommandé) | 7.2.5 (obsolète)  <br>7.3  <br>7.4 (recommandé) | 7.1.8 (obsolète)  <br>7.2  <br>7.3 (recommandé)  <br>7.4 | 7.1.8 (obsolète)  <br>7.2  <br>7.3 (recommandé)  <br>7.4 | 7.0.8 (obsolète)  <br>7.1  <br>7.2  <br>7.3 (recommandé) | 5.6 (obsolète)  <br>7.0  <br>7.1  <br>7.2 (recommandé) | 5.6  <br>7.0  <br>7.1 | 5.6  <br>7.0 | 5.4  <br>5.5  <br>5.6  <br>7.0 | 5.4  <br>5.5  <br>5.6 | 5.4  <br>5.5  <br>5.6 |
| MySQL | 5.7 | 5.7 | 5.7 | 5.6 (obsolète)  <br>5.7 | 5.6  <br>5.7 | 5.6  <br>5.7 | 5.6  <br>5.7 | 5.6  <br>5.7 | 5.6  <br>5.7 | 5.6  <br>5.7 | 5.6  <br>5.7 | 5.6  <br>5.7 |
| MariaDB | 10.2  <br>10.3  <br>10.4  <br>10.5 (recommandé) | 10.2  <br>10.3  <br>10.4  <br>10.5 (recommandé) | 10.2  <br>10.3  <br>10.4  <br>10.5 (recommandé) | 10.1 (obsolète)  <br>10.2  <br>10.3  <br>10.4 (recommandé)  <br>10.5 | 10.1  <br>10.2  <br>10.3  <br>10.4 (recommandé) | 10.1  <br>10.2  <br>10.3  <br>10.4 (recommandé) | 10.0 (obsolète)  <br>10.1  <br>10.2  <br>10.3 (recommandé) | 10.0  <br>10.1 | 10.0  <br>10.1 | 10.0  <br>10.1 | 10.0  <br>10.1 | 10.0  <br>10.1 | 10.0  <br>10.1 |
| Debian GNU/Linux | 11  | 10, 11 | 10  | 10  | 10  | 10  | 8, 9, 10 | 8, 9 | 8, 9 | 8, 9 | 8, 9 | 8   | 8   |
| Ubuntu | 18.04, 20.04 | 18.04, 20.04 | 18.04, 20.04 | 18.04, 20.04 | 18.04, 20.04 | 18.04 | 16.04, 18.04 | 16.04, 18.04 | 16.04 | 16.04, 17.04 | 16.04 LTS, 16.10, 17.04 | 14.04¹ | 15.10, 14.04¹ |
| Red Hat Enterprise Linux (RHEL) | 7¹, 8 | 7¹, 8 | 7¹, 8 | 7¹, 8 | 7¹, 8 | 7¹, 8 | 7¹, 8 | 7.3¹, 7.4¹, 7.5¹, 7.6¹ | 7.3¹, 7.4¹, 7.5¹ | 7.3¹, 7.4¹ | 7.3¹ | 7.3¹ | 7.2¹ |
| SUSE Linux Enterprise Server (SLES) | 15 SP1, 15 SP 2, SP 3 | 15 SP1, 15 SP 2, SP 3 | 15, 15 SP1 | 15, 15 SP1 | 15, 15 SP1 | 15, 15 SP1 | 12 SP3, 12 SP4, 15, 15 SP1 | 12 SP3, 15 | 12 SP3 | 12 SP2, SP3 | 12, 12 SP2 | 12, 12 SP2 | 12  |
| XAMPP pour Windows² | 2016, 2019 | 2016, 2019 | 2016, 2019 | 2016, 2019 | 2016, 2019 | 2016, 2019 | 2008 R2, 2012 R2, 2016, 2019 | 2008 R2, 2012 R2, 2016, 2019 | 2008 R2, 2012 R2, 2016 | 2008 R2, 2012 R2, 2016 | 2008, 2012 | 2008, 2012 | 2008, 2012 |
| Légende |     |     |     |     |     |     |     |     |     |     |     |     |     |
| ¹ Avec l'aide de dépôts tiers |     |     |     |     |     |     |     |     |     |     |     |     |     |
| ² Non recommandé pour une utilisation en production |     |     |     |     |     |     |     |     |     |     |     |     |     |

Mise à jour de 1.7.4 à 1.8
---------------------------

Tout d'abord, nous préparons la mise à jour via l'interface en ligne de commande en ouvrant le dossier i-doit à `/var/www/html/` et en dézippant le package de mise à jour idoit avec

    sudo -u www-data unzip idoit-1.8-update.zip

Si on vous demande, écrasez tout en tapant A.
Maintenant, ouvrez l'interface de mise à jour Web et la mise à jour vers la v1.8 est affichée et sélectionnée, effectuez la mise à jour.

[![Mise à jour de 1.7.4 à 1.8](../assets/images/en/upgrades-and-migrations/update-from-1.7.4-to-1.19/1-u18-119.png)](../assets/images/en/upgrades-and-migrations/update-from-1.7.4-to-1.19/1-u18-119.png)

!!! attention "**Erreur possible**"

    PHP Fatal error: Call to undefined method idoit\Component\ContainerFacade::has() in /var/www/html/src/idoit/Model/Summary/SystemSummary.php on line 185

    La solution est de recharger la page et de continuer.

!!! success "**Vérifiez les journaux de mise à jour**"

    Veuillez prendre le temps de faire défiler les journaux et de vérifier s'il y a eu une erreur

    Connectez-vous et vérifiez votre installation.

Mise à jour de 1.8 à 1.9
-------------------------

Tout d'abord, nous préparons la mise à jour via l'interface en ligne de commande en ouvrant le dossier i-doit à `/var/www/html/` et en dézippant le package de mise à jour idoit avec

```markdown
    sudo -u www-data unzip idoit-1.9-update.zip

Si on vous demande, écrasez tout en tapant A.
Maintenant, ouvrez l'Interface Web Updater et la mise à jour vers la version 1.9 est affichée et sélectionnée, effectuez la mise à jour.

[![Mise à jour de 1.8 à 1.9](../assets/images/en/upgrades-and-migrations/update-from-1.7.4-to-1.19/2-u18-119.png)](../assets/images/en/upgrades-and-migrations/update-from-1.7.4-to-1.19/2-u18-119.png)

!!! success "**Vérifiez les journaux de mise à jour**"

    Veuillez prendre le temps de faire défiler les journaux et de vérifier s'il y a eu une erreur

    Connectez-vous et vérifiez votre installation.

Mise à jour de 1.9 à 1.10
--------------------

Tout d'abord, nous préparons la mise à jour via CLI en ouvrant le dossier i-doit à `/var/www/html/` et en dézippant le package de mise à jour idoit avec

    sudo -u www-data unzip idoit-1.10-update.zip

Si on vous demande, écrasez tout en tapant A.  
Maintenant, ouvrez l'Interface Web Updater et la mise à jour vers la version 1.10 est affichée et sélectionnée, effectuez la mise à jour.

[![Mise à jour de 1.9 à 1.10](../assets/images/en/upgrades-and-migrations/update-from-1.7.4-to-1.19/3-u18-119.png)](../assets/images/en/upgrades-and-migrations/update-from-1.7.4-to-1.19/3-u18-119.png)
```

!!! success "**Vérifiez les journaux de mise à jour**"

    Veuillez prendre le temps de faire défiler les journaux et de vérifier s'il y a eu une erreur.

    Connectez-vous et vérifiez votre installation.

Mise à jour de 1.10 à 1.11
---------------------------

Tout d'abord, nous préparons la mise à jour via CLI en ouvrant le dossier i-doit à `/var/www/html/` et en dézippant le package de mise à jour idoit avec

    sudo -u www-data unzip idoit-1.11-update.zip

Si on vous demande, écrasez tout en tapant A.  
Maintenant, ouvrez l'interface de mise à jour Web et la mise à jour vers la v1.11 est affichée et sélectionnée, effectuez la mise à jour.  

!!! attention "**Erreur possible**"

    Appel d'une méthode inconnue '_realpath'.

Solutions:

*   Rechargez la page et continuez.
*   ou utilisez le correctif suivant si le rechargement ne fonctionne pas  

!!! attention "Déclaration de consentement"

    En téléchargeant un correctif, vous déclarez avoir lu et compris la [note mentionnée ci-dessus](#update-guide-from-i-doit-174-to-119) entièrement.  
    
    [Cliquez ici pour le correctif](../assets/downloads/upgrades-and-migrations/ID-5843_b4159eb.zip)

Continuez avec la mise à jour

!!! success "**Vérifiez les journaux de mise à jour**"

    Veuillez prendre le temps de faire défiler les journaux et de vérifier s'il y a eu une erreur

Connectez-vous et vérifiez votre installation.

Mise à jour de 1.11 à 1.12
---------------------

Tout d'abord, nous préparons la mise à jour via CLI en ouvrant le dossier i-doit à `/var/www/html/` et en dézippant le package de mise à jour idoit avec

    sudo -u www-data unzip idoit-1.12-update.zip

Si on vous demande, écrasez tout en tapant A.  
Maintenant, ouvrez l'interface de mise à jour Web et la mise à jour vers la v1.12 est affichée et sélectionnée, effectuez la mise à jour.

[![Mise à jour de 1.11 à 1.12](../assets/images/en/upgrades-and-migrations/update-from-1.7.4-to-1.19/4-u18-119.png)](../assets/images/en/upgrades-and-migrations/update-from-1.7.4-to-1.19/4-u18-119.png)

!!! success "**Vérifiez les journaux de mise à jour**"

    Veuillez prendre le temps de faire défiler les journaux et de vérifier s'il y a eu une erreur

    Connectez-vous et vérifiez votre installation.

Mise à niveau de Debian 8 à 9
---------------------

!!! attention "**Attention**"

    Avant de commencer, assurez-vous d'avoir une sauvegarde complète que vous avez testée en la restaurant sur un serveur propre au cas où quelque chose tournerait mal, car il n'y a pas de retour en arrière !  
    Lisez les instructions de mise à jour de Debian 8 à 9 [ici](https://www.debian.org/releases/stretch)

??? example "J'ai une sauvegarde complète fonctionnelle"

    Libérez de l'espace avec  
        ```
        sudo apt-get autoremove
        sudo apt-get clean
        ```
    Modifiez le fichier sources.list avec votre éditeur préféré  
        ```
        sudo nano /etc/apt/sources.list
        ```
    Modifiez toutes les entrées en 'stretch' ou supprimez toutes les entrées et insérez  
        ```
        deb http://deb.debian.org/debian stretch main
        deb http://deb.debian.org/debian stretch contrib
        ```
    Maintenant mettez à jour les paquets à nouveau  
        ```
        sudo apt-get update
        ```
    Si vous obtenez un message comme celui-ci, vous pouvez l'ignorer ou lire [ici](https://stackoverflow.com/a/70795162).  
        ```
        Il n'y a pas de clé publique disponible pour les identifiants de clé suivants :
        112695A0E562B32A
        ```
    Maintenant arrêtez mysql et cron  
        ```
        sudo systemctl stop mysql cron  
        ```
    Faites la mise à jour vers Debian 9  
        ```
        sudo apt-get upgrade
        sudo apt-get full-upgrade
        ```
    Si on vous demande 'Redémarrer les services pendant les mises à jour de paquets sans demander?' sélectionnez 'Oui' et appuyez sur Entrée  
    Démarrez les services que nous avons arrêtés
        ```
        sudo systemctl start mysql cron
        ```
    Des erreurs ? [Lisez ici](https://www.debian.org/releases/stretch/)  

{/*examples*/}

    
    !!! success "**Vérifiez le système et i-doit**"

        Vérifiez votre système. Vérifiez i-doit!

    Libérez de l'espace à nouveau  
        ```
        sudo apt-get autoremove
        sudo apt-get clean
        ```
    Vérifiez votre sources.list, pour plus d'informations consultez [ici](https://wiki.debian.org/SourcesList)  
    Vous êtes maintenant sur Debian 9 avec PHP 5.6 et MariaDB 10.

Mettre à niveau Debian 9 vers 10
----------------------

!!! attention "**Attention**"

    Avant de commencer, assurez-vous d'avoir une sauvegarde complète que vous avez testée en la restaurant sur un serveur propre au cas où quelque chose se passe mal, car il n'y a pas de retour en arrière!  
    Lisez les instructions de mise à jour de Debian 9 à 10 [ici](https://www.debian.org/releases/buster/amd64/release-notes/ch-upgrading.en.html)

??? example "J'ai une sauvegarde complète fonctionnelle"

    Libérez de l'espace avec  
        ```
        sudo apt-get autoremove
        sudo apt-get clean
        ```
    Modifiez le sources.list avec votre éditeur préféré  
        ```
        sudo nano /etc/apt/sources.list
        ```
    Modifiez toutes les entrées en 'buster' ou supprimez toutes les entrées et insérez  
        ```
        deb http://deb.debian.org/debian buster main
        deb http://deb.debian.org/debian buster contrib
        ```
    Arrêtez maintenant mysql et cron  
        ```
        sudo systemctl stop mysql cron
        ```
    Faites la mise à jour vers Debian 10  
        ```
        sudo apt-get update
        sudo apt-get upgrade
        sudo apt-get full-upgrade
        ```
    Démarrez les services que nous avons arrêtés  
        ```
        sudo systemctl start mysql cron  
        ```
    Des erreurs? [Lisez ici](https://www.debian.org/releases/buster/amd64/release-notes/ch-upgrading.en.html#trouble)  

    !!! success "**Vérifiez le système et i-doit**"

        Vérifiez votre système. Vérifiez i-doit!

    Libérez de l'espace à nouveau
        ```
        sudo apt-get autoremove
        sudo apt-get clean
        ```
    Vérifiez votre sources.list, pour plus d'informations consultez [ici](https://wiki.debian.org/SourcesList)
    Vous êtes maintenant sur Debian 10 avec PHP 5.6 et MariaDB 10.3.

Mettre à jour PHP 5.6 vers PHP 7.3
-------------------------

!!! attention "Sauvegarde"

    Créez une sauvegarde ou un instantané!

Mettre à jour les packages et installer tous les packages nécessaires

    sudo apt update
    sudo apt install apache2 libapache2-mod-php mariadb-client mariadb-server php php-bcmath php-cli php-common php-curl php-gd php-imagick php-json php-ldap php-mbstring php-memcached php-mysql php-pgsql php-soap php-xml php-zip memcached unzip sudo moreutils

Créer le fichier de configuration PHP

    sudo nano /etc/php/7.3/mods-available/i-doit.ini

insérer

    allow_url_fopen = Oui
    file_uploads = Activé
    magic_quotes_gpc = Désactivé
    max_execution_time = 300
    max_file_uploads = 42
    max_input_time = 60
    max_input_vars = 10000
    memory_limit = 256M
    post_max_size = 128M
    register_argc_argv = Activé
    register_globals = Désactivé
    short_open_tag = Activé
    upload_max_filesize = 128M
    display_errors = Désactivé
    display_startup_errors = Désactivé
    error_reporting = E_ALL & ~E_DEPRECATED & ~E_STRICT
    log_errors = Activé
    default_charset = "UTF-8"
    default_socket_timeout = 60
    date.timezone = Europe/Berlin
    session.gc_maxlifetime = 604800
    session.cookie_lifetime = 0
    mysqli.default_socket = /var/run/mysqld/mysqld.sock

Activez les changements

```bash
sudo a2dismod php5
sudo a2enmod php7.3
sudo phpenmod i-doit
sudo phpenmod memcached
sudo systemctl restart apache2.service
```

i-doit devrait maintenant afficher via Administration > Outils système > Vue d'ensemble du système la nouvelle version PHP 7.3.31-1~deb10u1

Créez le fichier de configuration MariaDB s'il n'existe pas
---------------------------------------

Créez ou mettez à jour un fichier de configuration MariaDB

```bash
sudo nano /etc/mysql/mariadb.conf.d/99-i-doit.cnf
```

insérez ou mettez à jour votre configuration MariaDB

```conf
[mysqld]

# Ceci est le premier paramètre à examiner pour toute optimisation des performances
# C'est là que les données et les index sont mis en cache : le rendre aussi grand que possible
# garantira que MySQL utilise la mémoire et non les disques pour la plupart des opérations de lecture.
#
# Les valeurs typiques sont 1G (1-2 Go de RAM), 5-6G (8 Go de RAM), 20-25G (32 Go de RAM), 100-120G (128 Go de RAM).
innodb_buffer_pool_size = 1G

# Utilisez plusieurs instances si vous avez innodb_buffer_pool_size > 10G, 1 pour chaque tranche de 4 Go
innodb_buffer_pool_instances = 1

# Taille du fichier journal de refaire, plus elle est grande, mieux c'est.
# MySQL/MariaDB écrit deux de ces fichiers journaux dans une installation par défaut.
innodb_log_file_size = 512M
```

```plaintext
    innodb_sort_buffer_size = 64M
    sort_buffer_size = 262144 # par défaut
    join_buffer_size = 262144 # par défaut
    
    max_allowed_packet = 128M
    max_heap_table_size = 32M
    query_cache_min_res_unit = 4096
    query_cache_type = 1
    query_cache_limit = 5M
    query_cache_size = 80M
    
    tmp_table_size = 32M
    max_connections = 200
    innodb_file_per_table = 1
    
    # Désactivez ceci (= 0) si vous avez seulement un ou deux cœurs de CPU, changez-le à 4 pour un quad core.
    innodb_thread_concurrency = 0
    
    # Désactivez ceci (= 0) si vous avez des disques durs lents
    innodb_flush_log_at_trx_commit = 1
    innodb_flush_method = O_DIRECT
    
    innodb_lru_scan_depth = 2048
    table_definition_cache = 1024
    table_open_cache = 2048
    # Uniquement si vous avez MySQL 5.6 ou supérieur, ne pas utiliser avec MariaDB!
    # table_open_cache_instances = 4
    
    innodb_stats_on_metadata = 0
    
    sql-mode = ""

Redémarrez MariaDB par la suite

    sudo systemctl start mysql.service

Mise à jour de 1.12 à 1.13
---------------------------
```

Tout d'abord, nous préparons la mise à jour via CLI en ouvrant le dossier i-doit à `/var/www/html/` et en dézippant le package de mise à jour idoit avec

    sudo -u www-data unzip idoit-1.13-update.zip

Si on vous demande, écrasez tout en tapant A.

Maintenant, ouvrez l'interface de mise à jour Web et la mise à jour vers la v1.13 est affichée et sélectionnée, effectuez la mise à jour.

[![Mise à jour de 1.12 à 1.13](../assets/images/en/upgrades-and-migrations/update-from-1.7.4-to-1.19/5-u18-119.png)](../assets/images/en/upgrades-and-migrations/update-from-1.7.4-to-1.19/5-u18-119.png)

Vous obtiendrez probablement cette erreur :

!!! attention "**Erreur possible**"

    Erreur fatale : Uncaught Error: Class 'idoit\\Module\\License\\LicenseServiceFactory' non trouvée dans /var/www/html/updates/versions/v1.13/migration/license\_migration.php:50 Trace de la pile : #0 /var/www/html/updates/classes/isys\_update\_migration.class.php(98) : include() #1 /var/www/html/updates/update.inc.php(911) : isys\_update\_migration->migrate('/var/www/html/u...') #2 /var/www/html/src/hypergate.inc.php(152) : include\_once('/var/www/html/u...') #3 /var/www/html/index.php(231) : include\_once('/var/www/html/s...') #4 {main} thrown in /var/www/html/updates/versions/v1.13/migration/license\_migration.php on line 50

Then you need to restart the update again.  
If you now get a HTTP 500, do the update again.

!!! success "**Vérifiez le système et i-doit**"

    Vérifiez votre système. Vérifiez i-doit!

Mise à jour de 1.13 à 1.14
---------------------------

Tout d'abord, nous préparons la mise à jour via CLI en ouvrant le dossier i-doit à `/var/www/html/` et en dézippant le package de mise à jour idoit avec

    sudo -u www-data unzip idoit-1.14-update.zip

Si on vous demande, écrasez tout en tapantA.

Maintenant, ouvrez l'interface de mise à jour Web et la mise à jour vers la v1.14 est affichée et sélectionnée, effectuez la mise à jour.

[![Mise à jour de 1.13 à 1.14](../assets/images/en/upgrades-and-migrations/update-from-1.7.4-to-1.19/6-u18-119.png)](../assets/images/en/upgrades-and-migrations/update-from-1.7.4-to-1.19/6-u18-119.png)

!!! success "**Vérifiez les journaux de mise à jour**"

    Prenez le temps de faire défiler les journaux et vérifiez s'il y a eu une erreur

Si vous voyez cette erreur:

!!! attention "**Erreur possible**"

    Erreur de base de données : Erreur de requête : 'ALTER TABLE isys\_cats\_person\_list ADD isys\_cats\_person\_list\_\_disabled\_login TINYINT(1) UNSIGNED DEFAULT 0': La taille de la ligne est trop grande. La taille maximale de ligne pour le type de table utilisé, sans compter les BLOB, est de 8126. Cela inclut les frais généraux de stockage, consultez le manuel. Vous devez changer certaines colonnes en TEXT ou BLOBs

La solution est documentée [ici](../system-administration/troubleshooting/row-size-too-large.md)

!!! success "**Vérifiez le système et i-doit**"

    Vérifiez votre système. Vérifiez i-doit!

Mise à jour de 1.14 à 1.15
---------------------

Tout d'abord, nous préparons la mise à jour via CLI en ouvrant le dossier i-doit à `/var/www/html/` et en dézippant le package de mise à jour idoit avec

    sudo -u www-data unzip idoit-1.15-update.zip

Si on vous demande, écrasez tout en tapant A.

Maintenant, ouvrez l'interface de mise à jour Web et la mise à jour vers v1.15 est affichée et sélectionnée, effectuez la mise à jour.

[![Mise à jour de 1.14 à 1.15](../assets/images/en/upgrades-and-migrations/update-from-1.7.4-to-1.19/7-u18-119.png)](../assets/images/en/upgrades-and-migrations/update-from-1.7.4-to-1.19/7-u18-119.png)

!!! success "**Vérifiez le système et i-doit**"

    Vérifiez votre système. Vérifiez i-doit!

Mise à jour de 1.15 à 1.16
---------------------

Tout d'abord, nous préparons la mise à jour via CLI en ouvrant le dossier i-doit à `/var/www/html/` et en dézippant le package de mise à jour idoit avec

    sudo -u www-data unzip idoit-1.16-update.zip


Si on vous demande, écrasez tout en tapantA.

Maintenant, ouvrez l'Interface de Mise à Jour Web et la mise à jour vers la version 1.16 est affichée et sélectionnée, effectuez la mise à jour.

[![Mise à jour de 1.15 à 1.16](../assets/images/en/upgrades-and-migrations/update-from-1.7.4-to-1.19/8-u18-119.png)](../assets/images/en/upgrades-and-migrations/update-from-1.7.4-to-1.19/8-u18-119.png)

!!! success "**Vérifiez le Système et i-doit**"

    Vérifiez votre système. Vérifiez i-doit!

Mise à jour de 1.16 à 1.17
---------------------------

Tout d'abord, nous préparons la mise à jour via CLI en ouvrant le dossier i-doit à /var/www/html/et en décompressant le package de mise à jour idoit avec

    sudo -u www-data unzip idoit-1.17-update.zip

Si on vous demande, écrasez tout en tapantA.

Maintenant, ouvrez l'Interface de Mise à Jour Web et la mise à jour vers la version 1.17 est affichée et sélectionnée, effectuez la mise à jour.

[![Mise à jour de 1.16 à 1.17](../assets/images/en/upgrades-and-migrations/update-from-1.7.4-to-1.19/9-u18-119.png)](../assets/images/en/upgrades-and-migrations/update-from-1.7.4-to-1.19/9-u18-119.png)

!!! success "**Vérifiez le Système et i-doit**"

```markdown
    Vérifiez votre système. Vérifiez i-doit!

Mise à jour de 1.17 à 1.18
--------------------------

Tout d'abord, nous préparons la mise à jour via CLI en ouvrant le dossier i-doit à `/var/www/html/` et en dézippant le package de mise à jour idoit avec

    sudo -u www-data unzip idoit-1.18-update.zip

Si on vous demande, écrasez tout en tapantA.

Maintenant, ouvrez l'interface de mise à jour Web et la mise à jour vers la v1.18 est affichée et sélectionnée, effectuez la mise à jour.

[![Mise à jour de 1.17 à 1.18](../assets/images/en/upgrades-and-migrations/update-from-1.7.4-to-1.19/10-u18-119.png)](../assets/images/en/upgrades-and-migrations/update-from-1.7.4-to-1.19/10-u18-119.png)

!!! success "**Vérifiez le système et i-doit**"

    Vérifiez votre système. Vérifiez i-doit!

Mise à niveau de Debian 10 à 11
-------------------------------

!!! attention "**Attention**"

    Avant de commencer, assurez-vous d'avoir une sauvegarde complète que vous avez testée en la restaurant sur un serveur propre au cas où quelque chose se passe mal, car il n'y a pas de retour en arrière!
    Lisez les instructions de mise à jour de Debian 10 à 11 [ici](https://www.debian.org/releases/bullseye/amd64/release-notes/ch-upgrading.en.html)
```

??? example "J'ai une sauvegarde complète fonctionnelle"

    Libérez de l'espace avec  
        ```
        sudo apt-get autoremove
        sudo apt-get clean
        ```
    Modifiez le fichier sources.list avec votre éditeur préféré  
        ```
        sudo nano /etc/apt/sources.list
        ```
    Modifiez toutes les entrées en 'buster' ou supprimez toutes les entrées et insérez  
        ```
    deb http://deb.debian.org/debian bullseye main
    deb http://deb.debian.org/debian bullseye contrib
        ```
    Arrêtez maintenant mysql et cron  
        ```
        sudo systemctl stop mysql cron
        ```
    Effectuez la mise à jour vers Debian 11  
        ```
        sudo apt-get update
        sudo apt-get upgrade
        sudo apt-get full-upgrade
        ```
    Démarrez les services que nous avons arrêtés  
        ```
        sudo systemctl start mysql cron
        ```
    Des erreurs ? [Lisez ici](https://www.debian.org/releases/bullseye/amd64/release-notes/ch-upgrading.en.html#trouble)  

    !!! success "**Vérifiez le système et i-doit**"

        Vérifiez votre système. Vérifiez i-doit!

Libérez de l'espace à nouveau

```
sudo apt-get autoremove
sudo apt-get clean
```

Vérifiez votre sources.list, pour plus d'informations consultez [ici](https://wiki.debian.org/SourcesList)

Vous êtes maintenant sur Debian 11 avec PHP 7.4.30 et MariaDB 10.5.

Configurer PHP 7.4
-----------------

Créez le fichier de configuration PHP

```
sudo nano /etc/php/7.4/mods-available/i-doit.ini
```

insérez

```
allow_url_fopen = Oui
file_uploads = Activé
magic_quotes_gpc = Désactivé
max_execution_time = 300
max_file_uploads = 42
max_input_time = 60
max_input_vars = 10000
memory_limit = 256M
post_max_size = 128M
register_argc_argv = Activé
register_globals = Désactivé
short_open_tag = Activé
upload_max_filesize = 128M
display_errors = Désactivé
display_startup_errors = Désactivé
error_reporting = E_ALL & ~E_DEPRECATED & ~E_STRICT
log_errors = Activé
default_charset = "UTF-8"
default_socket_timeout = 60
date.timezone = Europe/Berlin
session.gc_maxlifetime = 604800
session.cookie_lifetime = 0
mysqli.default_socket = /var/run/mysqld/mysqld.sock
```

Activez les changements

```bash
sudo a2dismod php7.3
sudo a2enmod php7.4
sudo phpenmod i-doit
sudo phpenmod memcached
sudo systemctl restart apache2.service
```

!!! attention "**Erreur possible**"

```bash
(38) Fonction non implémentée: AH00141: Impossible d'initialiser le générateur de nombres aléatoires
```

Si apache2 ne redémarre pas et que vous obtenez l'erreur ci-dessus, redémarrez le serveur.

i-doit devrait maintenant afficher via Administration > Outils système > Vue d'ensemble du système la nouvelle version PHP 7.4.30

Mise à jour de 1.18 à 1.19
---------------------------

Tout d'abord, nous préparons la mise à jour via CLI en ouvrant le dossier i-doit à /var/www/html/et en dézippant le package de mise à jour idoit avec

```bash
sudo -u www-data unzip idoit-1.19-update.zip
```

Si on vous demande, écrasez tout en tapantA.

Si vous essayez la mise à jour sans PHP 7.3, vous verrez ce message:

!!! attention "**Erreur possible**"

```bash
Vous avez PHP 7.3.31. Pour mettre à jour i-doit vers la prochaine version, vous avez besoin d'au moins PHP 7.4!
```

Maintenant, ouvrez l'Interface de mise à jour Web et la mise à jour vers la v1.19 est affichée et sélectionnée, effectuez la mise à jour.

[![Mise à jour de 1.18 à 1.19](../assets/images/en/upgrades-and-migrations/update-from-1.7.4-to-1.19/11-u18-119.png)](../assets/images/en/upgrades-and-migrations/update-from-1.7.4-to-1.19/11-u18-119.png)

!!! success "**Vérifiez le système et i-doit**"

Vérifiez votre système. Vérifiez i-doit !

Sources
-------

*   Informations de mise à niveau de MariaDB [https://mariadb.com/kb/fr/mise-a-niveau/](https://mariadb.com/kb/fr/mise-a-niveau/)
*   Mise à niveau de Debian 9 [https://www.debian.org/releases/stretch/](https://www.debian.org/releases/stretch/)
*   Mise à niveau de Debian 10 [https://www.debian.org/releases/buster/](https://www.debian.org/releases/buster/)
*   Mise à niveau de Debian 11 [https://www.debian.org/releases/bullseye/](https://www.debian.org/releases/bullseye/)
