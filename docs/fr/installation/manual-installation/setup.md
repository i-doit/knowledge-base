# Installation manuelle 

Une fois que les préparatifs nécessaires sont faits - par exemple la configuration du système d'exploitation sous-jacent - vous pouvez commencer la configuration de i-doit.

## Démarrage rapide 

Extrayez le package d'installation de i-doit dans un dossier auquel le serveur Web Apache peut accéder. Ensuite, ouvrez ce dossier dans le navigateur et suivez les instructions de configuration.

## Téléchargement et Extraction du Package d'Installation

Le package d'installation de la version pro est accessible pour tous les clients dans le [portail client](../../system-administration/customer-portal.md) le package d'installation de la version open peut être trouvé sur [i-doit.org](https://i-doit.org/). Ce package sera copié et extrait sur le serveur préparé et les fichiers et répertoires obtiendront les autorisations appropriées. Les instructions varient en fonction du système d'exploitation.

### Debian GNU/Linux ou Ubuntu Linux

Le serveur Web Apache fonctionne avec les droits de l'utilisateur **www-data** et le groupe du même nom **www-data**. Le répertoire principal du serveur Web Apache est **/var/www/html/**:

```shell
sudo mkdir /var/www/html/i-doit
sudo cp i-doit.zip /var/www/html/i-doit/
cd /var/www/html/i-doit/
sudo unzip i-doit.zip
sudo rm i-doit.zip
sudo chown www-data:www-data -R .
sudo find . -type d -name \* -exec chmod 775 {} \;
sudo find . -type f -exec chmod 664 {} \;
```

### Red Hat Enterprise Linux (RHEL)

Le serveur Web Apache fonctionne avec les droits de l'utilisateur **apache** et le groupe du même nom **apache**. Le répertoire principal du serveur Web Apache est **/var/www/html/**:

```shell
sudo mkdir /var/www/html/i-doit
sudo cp i-doit.zip /var/www/html/i-doit/
cd /var/www/html/i-doit/
sudo unzip i-doit.zip
sudo rm i-doit.zip
sudo chown apache:apache -R .
sudo find . -type d -name \* -exec chmod 775 {} \;
sudo find . -type f -exec chmod 664 {} \;
```

### Suse Linux Enterprise Server (SLES)

Le serveur Web Apache fonctionne avec les droits de l'utilisateur **wwwrun** et le groupe **www**. Le répertoire principal du serveur Web Apache est **/srv/www/htdocs/**:

```shell
sudo mkdir /srv/www/htdocs/i-doit
sudo cp i-doit.zip /srv/www/htdocs/i-doit/
cd /srv/www/htdocs/i-doit/
sudo unzip i-doit.zip
sudo rm i-doit.zip
sudo chown wwwrun:www -R .
sudo find . -type d -name \* -exec chmod 775 {} \;
sudo find . -type f -exec chmod 664 {} \;
```

### Microsoft Windows Server

Le package d'installation de i-doit est extrait dans `C:\xampp\htdocs`. En général, il n'est pas nécessaire de définir des autorisations spécifiques pour les fichiers et dossiers si le serveur Web Apache installé avec XAMPP utilise les mêmes autorisations utilisateur.

## Exécuter la Configuration

_i-doit_ peut être installé de deux manières : en utilisant l'**interface graphique Web** de manière confortable (recommandé pour les débutants) ou via l'[Installation automatique](../automatic-installation.md) (pour automatiser l'installation par exemple). 

### Interface Web 

La configuration est lancée automatiquement dès l'ouverture de i-doit (exemple <http://i-doit-host/i-doit/>). 

#### Vérification du système 

Les paramètres système importants sont demandés dès le premier pas. L'utilisateur sera notifié si quelque chose ne va pas. 

[![Vérification du système](../../assets/images/en/installation/manual-installation/setup/1-setup.png)](../../assets/images/en/installation/manual-installation/setup/1-setup.png) 

#### Configuration du répertoire 

Ici, les chemins où les fichiers d'installation ou les fichiers spécifiques à l'utilisateur vont être stockés sont demandés. Vous pouvez accepter les options suggérées. 

[![Configuration du répertoire](../../assets/images/en/installation/manual-installation/setup/2-setup.png)](../../assets/images/en/installation/manual-installation/setup/2-setup.png) 

#### Configuration de la base de données 

Des informations et des paramètres importants doivent être saisis pour la connexion à la base de données. Au moins deux bases de données et un utilisateur spécial sont créés pour i-doit. 

[![Configuration de la base de données](../../assets/images/en/installation/manual-installation/setup/3-setup.png)](../../assets/images/en/installation/manual-installation/setup/3-setup.png) 

##### Paramètres de connexion 

-   **Hôte :** Généralement l'hôte lui-même, donc localhost ou 127.0.0.1
-   **Port :** Généralement le port par défaut de MySQL/MariaDB, donc 3306
-   **Nom d'utilisateur :** Nom d'utilisateur du système de base de données, généralement root
-   **Mot de passe :** Mot de passe de l'utilisateur 

##### Paramètres de l'utilisateur MySQL 

-   **Nom d'utilisateur :** Nom d'utilisateur du propriétaire des bases de données i-doit, généralement idoit
-   **Mot de passe :** Mot de passe de l'utilisateur 

##### Paramètres de la base de données 

-   **Nom de la base de données système :** Nom de la base de données système, généralement idoit_system
-   **Nom de la base de données du mandataire :** Nom de la base de données pour le premier locataire, généralement idoit_data
-   **Titre du mandataire :** Titre du locataire, généralement le nom de l'organisation sur laquelle il se concentre
-   **Valeur de départ pour les IDs d'objet/configuration :** Normalement 1

!!! tip "Socket Unix vs. Port réseau"

    PHP peut se connecter à MariaDB/MySQL de deux manières : d'une part, via un Socket Unix, et d'autre part via TCP/IP. Pour des raisons de performance, nous recommandons d'utiliser le Socket Unix. L'utilisation du Socket Unix est obligatoire en entrant la valeur **localhost** dans la configuration d'hôte mentionnée ci-dessus. D'autres spécifications (**127.0.0.1**, FQDN ou similaire) entraînent l'utilisation de TCP/IP.

 Habituellement, MariaDB/MySQL ouvre un Socket Unix lorsqu'un service est démarré. Dans les paramètres du **socket**, vous spécifiez le chemin, un exemple sous Debian GNU/Linux est `/var/run/mysqld/mysqld.sock`. Cette valeur doit être connue de PHP afin que i-doit puisse établir une connexion avec MariaDB/MySQL.

Le paramètre PHP correspondant est `mysqli.default_socket`. Lorsque vous avez suivi les instructions d'installation, vous pouvez compléter le fichier de configuration PHP créé par ce paramètre, par exemple, `mysqli.default_socket = /var/run/mysqld/mysqld.sock`.

Les modifications ultérieures des paramètres PHP ne prendront effet qu'après le redémarrage du service Apache Webserver. Exemple pour Debian GNU/Linux : `sudo systemctl reload apache2.service`

Cette astuce concerne les systèmes d'exploitation de type Unix ; elle ne s'applique pas à Windows.

#### Configuration du Framework 

Il existe des identifiants distincts dans i-doit pour accéder au [**Centre d'administration**](../../system-administration/admin-center.md) i-doit. Ils peuvent être spécifiés ici et nous recommandons d'utiliser cette option.

[![Configuration du framework](../../assets/images/en/installation/manual-installation/setup/4-setup.png)](../../assets/images/en/installation/manual-installation/setup/4-setup.png)

#### Vérification de la configuration 

À cette étape, toutes les étapes précédentes sont examinées et vérifiées pour voir si la configuration peut avoir lieu.

#### Installation 

L'installation de i-doit sur le système est effectuée à cette étape. Après que l'installation a été terminée avec succès, un résumé est affiché. Ensuite, i-doit peut être lancé et utilisé.

## Étapes supplémentaires 

- [Télécharger et installer une licence](../../maintenance-and-operation/activate-license.md)
- [Configurer la sauvegarde](../../maintenance-and-operation/backup-and-recovery/index.md)
- [Configurer les tâches Cron](../../maintenance-and-operation/cronjob-setup.md)
- [Connexion initiale](../../basics/initial-login.md)
