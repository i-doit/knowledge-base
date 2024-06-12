# Mise à niveau de l'Appliance Virtuelle d'Évaluation i-doit vers Debian GNU/Linux 9 "Stretch" 

En plus de la maintenance de i-doit, vous devez également tenir compte de la maintenance régulière du système d'exploitation. Cet article explique la mise à niveau de [Debian GNU/Linux] de la version 8 "Jessie" à la version 9 "Stretch". Il suffit de suivre quelques étapes et l'[Appliance Virtuelle d'Évaluation i-doit](sera à jour.

!!! note "Pourquoi devrais-je faire la mise à niveau ?"

    Pourquoi devriez-vous mettre à niveau votre système d'exploitation vers la dernière version ? Il y a de bonnes raisons à cela :

    1.  La documentation informatique contient des [données sensibles qui doivent être protégées]. Cela ne peut être garanti que lorsque tous les composants du système sont à jour.
    2.  Le passage de PHP 5.6 à 7.0 entraîne une amélioration mesurable des performances.

## Exigences 

Avant de procéder à la mise à niveau, vous devez tenir compte des éléments suivants :

-   La mise à niveau décrit uniquement l'Appliance Virtuelle d'Évaluation i-doit en version 1.2.x.
-   Nous supposons qu'aucun changement du système n'a été effectué (sauf les mises à jour). Nous ne sommes pas responsables des modifications ultérieures.
-   Il doit y avoir suffisamment de mémoire disponible. La mise à jour nécessite environ 1 Go de mémoire libre.



## Conseils 

Vous devez également prêter attention aux problèmes suivants avant une mise à jour :

-   Avez-vous des [**sauvegardes**] ?
-   Vous devez informer les utilisateurs d'i-doit avant l'arrêt.
-   Les automatismes, les tâches cron et l'accès externe doivent être arrêtés pendant la mise à jour.

Vous pouvez lire de nombreux [**conseils supplémentaires concernant la mise à niveau du système d'exploitation**] fournis par la communauté Debian.

## Préparation de la mise à jour 

Nous nous connectons via **SSH** et activons l'élément **0 Lancer Shell** dans le menu.

Ensuite, nous effectuons les mises à jour :

```shell
sudo apt update
sudo apt upgrade
sudo apt-get autoremove
sudo apt clean
```

Ensuite, le système doit être redémarré. En raison d'une erreur, le noyau Linux doit être à jour :

```shell
sudo systemctl reboot
```

Après le redémarrage, nous nous reconnectons via SSH et activons le shell dans le menu pour nous assurer que la version **8.8** est utilisée :

```shell
cat /etc/debian_release
```

Si ce n'est pas le cas, la mise à jour échouera.<br>
Par mesure de précaution, vous devriez arrêter le serveur web pour que i-doit ne soit pas activé entre-temps :

```shell
sudo systemctl stop apache2.service
```

Maintenant tout est prêt pour la mise à niveau.

## Réalisation de la mise à niveau 

Maintenant les sources des paquets de distribution sont adaptées :

```shell
sudo nano /etc/apt/sources.list
```

La ligne suivante est ajoutée à la fin :

```shell
deb http://mirrors.kernel.org/debian stretch main contrib
```

Toutes les lignes précédentes sont commentées ; un **#** est utilisé comme préfixe pour chaque ligne.<br>
Ensuite, toutes les sources de paquets sont mises à jour et une mise à niveau des paquets est effectuée :

```shell
sudo apt update
sudo apt upgrade
```

Pour la dernière commande, certaines interactions utilisateur sont requises :

1. Répondez à la question **Redémarrer les services pendant les mises à niveau des paquets sans demander ?** avec "**Oui**".
2. Répondez à la question concernant l'écrasement du **Fichier de configuration '/etc/issue'** avec **N**.
3. Répondez également à la question concernant l'écrasement du **Fichier de configuration '/etc/issue.net'** avec **N**.

Maintenant, la mise à niveau effective des paquets vers de nouvelles versions est effectuée :

```shell
sudo apt dist-upgrade
```

Pour activer le nouveau noyau Linux, le système est redémarré :

```shell
sudo systemctl reboot
```

Ainsi, la mise à niveau vers la version 9 est terminée.

## Suivi

Après le redémarrage, nous nous connectons de nouveau au système via SSH et activons le shell dans le menu.<br>
Maintenant, nous nettoyons les paquets de distribution :

```shell
sudo apt autoremove
sudo apt clean
```

Ensuite, le serveur Web Apache et PHP doivent être adaptés car PHP 7.0 est fourni au lieu de PHP 5.6 :

```shell
sudo cp /etc/php5/mods-available/i-doit.ini /etc/php/7.0/mods-available/
sudo phpenmod -v 7.0 i-doit
sudo apt-get purge libapache2-mod-php5 php5
sudo apt install libapache2-mod-php php php-bcmath php-cli php-common php-curl php-gd php-imagick php-json php-ldap php-mcrypt php-memcached php-mysql php-pgsql php-xml php-zip
sudo a2enmod php7.0
sudo systemctl restart apache2.service
```

Aucun changement aux fichiers de configuration n'est nécessaire.<br>
Également, le SGBD MariaDB doit être adapté :

```shell
sudo mv /etc/mysql/conf.d/i-doit.cnf /etc/mysql/mariadb.conf.d/99-i-doit.cnf
sudo systemctl restart mysql.service
```

Pour garantir le bon fonctionnement de l'écran d'accueil et du menu, vous devez modifier quelques lignes :

```shell
sudo nano /usr/local/bin/appliance_getip.sh
```

```shell
#!/bin/bash
/bin/hostname -I | awk -F: '{ print " "$1 }'
```

Aussi :

```shell
sudo nano /usr/local/bin/get-ip-address
```

Contenu :

```shell
#!/bin/bash
echo " /bin/hostname -I"
```

Et enfin le numéro de version de l'appliance :

```shell
sudo nano /etc/i-doit/appliance.conf
```

Contenu :

```shell
APPLIANCE_VERSION="1.3.0"
```

Maintenant, les travaux de suivi sont également terminés. Vous pouvez maintenant redémarrer tous les automatismes. L'arrêt est terminé et les utilisateurs peuvent travailler avec i-doit comme d'habitude.
```
