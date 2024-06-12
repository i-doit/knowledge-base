# Installation Automatique 

Cet article décrit la [documentation informatique](../glossary.md) automatique d'i-doit. Toutes les étapes de configuration requises sont exécutées sur un système d'exploitation GNU/Linux nouvellement installé et i-doit est installé. De plus, les tâches Cron, les sauvegardes et d'autres outils CLI utiles sont inclus. Seule l'exécution d'un script est requise à cette fin.

## Portée 

:material-check: Installation des paquets logiciels <br>
:material-check: Configuration des paquets logiciels<br>
:material-check: Installation d'i-doit<br>
:material-check: Configuration des tâches Cron<br>
:material-check: Configuration des sauvegardes<br>
:material-check: Configuration de la Restauration

## Exigences 

-   Les [exigences système](system-requirements.md) **doivent être remplies**. Une exception est la pile LAMP (serveur Web Apache, MariaDB/MySQL, PHP).
-   Un des systèmes d'exploitation GNU/Linux [pris en charge](system-requirements.md) est installé récemment.
-   Le système peut accéder aux dépôts de paquets i-doit et aux services Web via une connexion Internet.

## Utilisation 

L'installation est effectuée par un [script](https://github.com/bheisig/i-doit-scripts#install-i-doit-on-a-gnulinux-operating-system) qui est exécuté sur le système d'exploitation.<br>
Les étapes suivantes sont effectuées via la ligne de commande. Pour cela, vous pouvez vous connecter, par exemple, via **SSH**. Ensuite, vous téléchargez le script et activez son exécution :

```shell
wget https://raw.githubusercontent.com/i-doit/scripts/main/idoit-install
chmod 755 idoit-install
```

Le script doit être exécuté avec les droits de **root**. Si **sudo** est disponible :

```shell
sudo ./idoit-install
```

Sinon, vous vous connectez en tant que **root** :

```shell
su
./idoit-install
```

Le script pose plusieurs questions concernant la configuration. Pour toutes les questions, il existe des réponses prédéfinies que vous pouvez accepter en appuyant sur **ENTRÉE**.

## Étapes Suivantes 

-   [Installation d'une licence valide (uniquement i-doit pro)](../maintenance-and-operation/activate-license.md)
-   [Suivre les conseils concernant la sécurité et la protection](../maintenance-and-operation/security-and-protection.md)
-   [Premiers pas avec i-doit](../basics/index.md)
