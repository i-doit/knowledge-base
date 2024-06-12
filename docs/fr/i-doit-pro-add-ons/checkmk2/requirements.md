#  checkmk 2: Exigences 

idoitcmk est un outil en ligne de commande qui utilise les API à la fois d'i-doit et de Check\_MK. Veuillez respecter les exigences suivantes :

Pour i-doit, vous avez besoin de :

*   Une copie de travail d'i-doit pro, version 1.12.2 ou supérieure
*   Module complémentaire API activé, version 1.10.2 ou supérieure

Pour Check\_MK, vous avez besoin de :

*   Un ou plusieurs sites de Check\_MK, version 1.5 ou supérieure
*   API Web activée
*   Livestatus activé

idoitcmk peut s'exécuter sur n'importe quel système d'exploitation POSIX. Les systèmes d'exploitation suivants sont actuellement pris en charge :

*   Debian GNU/Linux 10 “buster” et 11 “bullseye”
*   Ubuntu Linux 18.04 LTS “bionic” et 20.04 LTS “focal fossa”
*   Red Hat Enterprise Linux (RHEL) 7 et 8
*   Suse Linux Enterprise Server (SLES) 15, 15 SP1 et SP2

D'autres systèmes d'exploitation devraient fonctionner, par exemple macOS, CentOS et bien d'autres. MS Windows peut fonctionner mais n'a pas été testé du tout.

Avant d'installer idoitcmk, assurez-vous d'avoir installé :

*   PHP, version 5.6 ou supérieure (7.2 est recommandé) et
*   Modules PHP bz2, calendar, curl, date, filter json et Phar

Pour être clair, vous n'êtes pas obligé d'exécuter cette application sur les mêmes systèmes pour i-doit ou Check\_MK.

Exigences spécifiques au système d'exploitation
-------------------------------------------------

Basé sur les exigences spécifiées ci-dessus, utilisez ces instructions pour votre système d'exploitation. Pour toutes les commandes, vous avez besoin de droits superutilisateur (root). Vous pouvez les obtenir avec sudo.

Debian GNU/Linux 10 "buster" et 11 "bullseye"
----------------------------------------------

```bash
sudo apt update
sudo apt install php7.4-cli php7.4-common php7.4-curl php7.4-json
```

Ubuntu Linux 18.04 LTS "Bionic Beaver" et 20.04 LTS "focal fossa"
------------------------------------------------------------------

```bash
sudo apt update
sudo apt install php7.4-cli php7.4-common php7.4-curl php7.4-json
```

Red Hat Enterprise Linux (RHEL) 7
---------------------------------

Pour RHEL, vous avez besoin du dépôt tiers [Webtatic](https://webtatic.com/packages/php72/).

```bash
rpm --import https://dl.fedoraproject.org/pub/epel/RPM-GPG-KEY-EPEL-7
rpm -Uvh https://dl.fedoraproject.org/pub/epel/epel-release-latest-7.noarch.rpm
rpm --import https://mirror.webtatic.com/yum/RPM-GPG-KEY-webtatic-el7
rpm -Uvh https://mirror.webtatic.com/yum/el7/webtatic-release.rpm
yum update
yum install php74w php74w-cli php74w-common
```

Suse Linux Enterprise Server (SLES) 15 SP2
------------------------------------------

Assurez-vous d'avoir activé le module "Web and Scripting Module 12". Ensuite :

    zypper refresh
    zypper update
    zypper install php7 php7-bz2 php7-curl php7-json php7-phar

