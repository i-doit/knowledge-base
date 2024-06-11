# Mise à niveau de l'Appliance Virtuelle d'Évaluation i-doit vers Debian GNU/Linux 10 "Buster"

En plus de la maintenance de i-doit, la maintenance du système d'exploitation sous-jacent ne doit pas être négligée. Nous décrivons la mise à niveau de Debian GNU/Linux de la version 9 "Stretch" à la version 10 "Buster". À certains moments, l'[Appliance Virtuelle d'Évaluation i-doit] est à jour.

!!! note ""
     Pourquoi vaut-il la peine de faire l'effort de mettre à jour le système d'exploitation vers la dernière version ? Il existe de très bonnes raisons :

1. La documentation informatique contient des données sensibles qui doivent être protégées. Cela ne peut être garanti que si tous les composants du système sont à jour.
2. Le passage de PHP 7.0 à 7.3 apporte un gain de performance mesurable.

## Prérequis

Certains éléments doivent être pris en compte avant la mise à niveau :

-   La mise à niveau ne concerne que la version 1.3.x de l'Appliance Virtuelle d'Évaluation i-doit.
-   Il est supposé qu'aucun changement (sauf les mises à jour) n'a été apporté au système. Les changements ultérieurs ne relèvent pas de notre responsabilité.
-   Une mémoire suffisamment libre est disponible. Entre-temps, la mise à jour nécessite environ 1 Go de mémoire. 

{ /*examples*/ }

!!! note "À noter lors de l'utilisation de VirtualBox"

    Sélectionnez la machine virtuelle appropriée et ouvrez la configuration de la machine.
    Sous l'onglet ==Système==, la case à cocher pour ==Horloge matérielle en UTC== doit être activée. Sinon, le serveur SQL aura un problème avec le réglage de l'heure.

## Conseils

De plus, les éléments suivants doivent être pris en compte avant une mise à niveau :

-   Les [sauvegardes] doivent être disponibles.
-   Les utilisateurs d'i-doit doivent être informés avant l'arrêt.
-   Les automatismes, les tâches cron et l'accès externe doivent être arrêtés pendant la durée de la mise à niveau.

La [Communauté Debian](https://www.debian.org/releases/buster/amd64/release-notes/index.en.html) fournit de nombreux autres conseils pour la mise à niveau du système d'exploitation.

## Préparer la mise à niveau

Nous nous connectons via SSH et appelons l'élément de menu ==0 Lancer Shell==.

Ensuite, nous effectuons les mises à jour :

```shell
sudo apt update
sudo apt upgrade
sudo apt-get autoremove
sudo apt clean
```

Le système doit ensuite être redémarré. En raison d'un bogue, le noyau Linux doit être à jour :

```shell
sudo systemctl reboot
```

Après le redémarrage, nous nous connectons à nouveau via SSH et appelons le shell dans le menu. Maintenant, nous nous assurons que la version ==9.x== est utilisée:

```shell
cat /etc/debian_release
```

Si ce n'est pas le cas, la mise à niveau échouera.

Par précaution, le serveur web doit être arrêté afin que i-doit ne soit pas appelé entre-temps:

```shell
sudo systemctl stop apache2.service
```

Ainsi, tout est prêt pour la mise à niveau.

## Mise à niveau

Les sources des paquets de distribution sont maintenant ajustées:

```shell
sudo nano /etc/apt/sources.list
```

La ligne suivante est ajoutée à la fin:

```shell
deb http://deb.debian.org/debian/ buster main
deb-src http://deb.debian.org/debian/ buster main

deb http://security.debian.org/debian-security buster/updates main
deb-src http://security.debian.org/debian-security buster/updates main

deb http://deb.debian.org/debian/ buster-updates main
deb-src http://deb.debian.org/debian/ buster-updates main

deb http://mirrors.kernel.org/debian buster main contrib

deb http://mirrors.kernel.org/debian buster main contrib
```

Toutes les lignes précédentes sont commentées. Chaque ligne est précédée de ==#==.

Ensuite, les sources des paquets sont mises à jour et les paquets sont mis à jour:

```shell
sudo apt update
sudo apt upgrade
```

La dernière commande nécessite plusieurs interactions utilisateur:

1. La question ==Redémarrer les services pendant les mises à niveau des paquets sans demander?== doit être répondue par =="Oui"==.
2. L'écrasement de ==Fichier de configuration '/etc/issue'== doit être répondu par ==N==.
3. L'écrasement de ==Fichier de configuration '/etc/issue.net'== doit être répondu par ==N==.

Maintenant, la mise à niveau réelle des paquets vers de nouvelles versions suit:

```shell
sudo apt dist-upgrade
```

Afin que le nouveau noyau Linux devienne actif, nous redémarrons le système :

```shell
sudo systemctl reboot
```

La mise à niveau vers la version 10 "Buster" est maintenant terminée.

## Suivi

Après le redémarrage, nous nous connectons à nouveau au système via SSH et appelons le shell dans le menu.

Tout d'abord, nous nettoyons les paquets de distribution :

```shell
sudo apt autoremove
sudo apt clean
```

Maintenant, nous devons adapter le serveur web Apache et PHP, car au lieu de PHP 7.0, c'est maintenant la version 7.3 qui est incluse :

```shell
sudo cp /etc/php/7.0/mods-available/i-doit.ini /etc/php/7.3/mods-available
sudo phpenmod -v 7.3 i-doit
sudo apt install php7.3-bcmath php7.3-cli php7.3-common php7.3-curl php7.3-gd php7.3-imagick php7.3-json php7.3-ldap php7.3-memcached php7.3-mysql php7.3-pgsql php7.3-xml php7.3-zip
sudo a2dismod php7.0
sudo a2enmod php7.3
sudo systemctl restart apache2.service
```

Et enfin, le numéro de version de l'appliance :

```shell
sudo nano /etc/i-doit/appliance.conf
```

Contenu :

```shell
APPLIANCE_VERSION="1.3.1"
```

Cela conclut également le post-traitement. Maintenant, tous les automatismes peuvent être relancés. La période d'indisponibilité est terminée et i-doit peut de nouveau être utilisé par les utilisateurs comme d'habitude.
