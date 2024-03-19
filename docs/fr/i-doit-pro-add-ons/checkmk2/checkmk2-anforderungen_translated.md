<!-- TRANSLATED by md-translate -->
# checkmk 2: Anforderungen

# checkmk 2 : Exigences

idoitcmk ist ein Kommandozeilenwerkzeug, das die APIs von i-doit und Check_MK verwendet. Bitte erfüllen Sie die folgenden Anforderungen:

idoitcmk est un outil en ligne de commande qui utilise les API d'i-doit et de Check_MK. Veuillez répondre aux exigences suivantes :

Für i-doit benötigen Sie:

Pour i-doit, vous avez besoin de :

* Eine Kopie von i-doit pro, Version 1.12.2 oder höher
* Aktiviertes API-Add-on, Version 1.10.2 oder höher

* Une copie d'i-doit pro, version 1.12.2 ou supérieure
* Un add-on API activé, version 1.10.2 ou supérieure

Für checkmk benötigen Sie:

Pour checkmk, vous avez besoin

* Eine oder mehrere Seiten von Check_MK, Version 1.5 oder höher
* Aktivierte Web-API
* Aktiviert Livestatus

* Une ou plusieurs pages de Check_MK, version 1.5 ou supérieure
* API Web activée
* Activation de l'état vivant

idoitcmk kann auf jedem POSIX-Betriebssystem laufen. Die folgenden Betriebssysteme werden derzeit unterstützt:

idoitcmk peut fonctionner sur n'importe quel système d'exploitation POSIX. Les systèmes d'exploitation suivants sont actuellement pris en charge :

* Debian GNU/Linux 10 "buster" und 11 "bullseye"
* Ubuntu Linux 18.04 LTS "bionic" und 20.04 LTS "focal fossa"
* Red Hat Enterprise Linux (RHEL) 7 und 8
* Suse Linux Enterprise Server (SLES) 15, 15 SP1 und 15 SP2

* Debian GNU/Linux 10 "buster" et 11 "bullseye".
* Ubuntu Linux 18.04 LTS "bionic" et 20.04 LTS "focal fossa"
* Red Hat Enterprise Linux (RHEL) 7 et 8
* Suse Linux Enterprise Server (SLES) 15, 15 SP1 et 15 SP2

Andere Betriebssysteme sollten funktionieren, zum Beispiel macOS, CentOS und viele andere. MS Windows kann funktionieren, ist aber völlig ungetestet.

D'autres systèmes d'exploitation devraient fonctionner, par exemple macOS, CentOS et bien d'autres. MS Windows peut fonctionner, mais n'a absolument pas été testé.

Bevor Sie idoitcmk installieren, vergewissern Sie sich, dass Sie folgendes installiert haben:

Avant d'installer idoitcmk, assurez-vous d'avoir installé les éléments suivants :

* PHP, version 7.3 oder 7.4 (7.4 ist empfohlen) und
* PHP modules bz2, calendar, curl, date, filter json and Phar

* PHP, version 7.3 ou 7.4 (7.4 est recommandé) et
* PHP modules bz2, calendar, curl, date, filter json and Phar

Um das klarzustellen: Sie sind nicht gezwungen, diese Anwendung auf denselben Systemen laufen zu lassen wie i-doit oder checkmk

Pour que les choses soient claires : Vous n'êtes pas obligé de faire tourner cette application sur les mêmes systèmes que i-doit ou checkmk

## Betriebssystemspezifische Anforderungen

## Exigences spécifiques au système d'exploitation

Basierend auf den oben genannten Anforderungen verwenden Sie diese Anweisungen für Ihr Betriebssystem. Für alle Befehle benötigen Sie Superuser-Rechte (root). Sie können sie mit sudo erlangen.

Sur la base des exigences mentionnées ci-dessus, utilisez ces instructions pour votre système d'exploitation. Pour toutes les commandes, vous avez besoin des droits de superutilisateur (root). Vous pouvez les obtenir avec sudo.

## Debian GNU/Linux 10 "buster" und 11 "bullseye"

## Debian GNU/Linux 10 "buster" et 11 "bullseye

```
sudo apt update
sudo apt install php7.4-cli php7.4-common php7.4-curl php7.4-json
```

## Ubuntu Linux 18.04 LTS "Bionic Beaver" und 20.04 LTS "focal fossa"

## Ubuntu Linux 18.04 LTS "Bionic Beaver" et 20.04 LTS "focal fossa"

```
sudo apt update
sudo apt install php7.4-cli php7.4-common php7.4-curl php7.4-json
```

## Red Hat Enterprise Linux (RHEL) 7 und 8

## Red Hat Enterprise Linux (RHEL) 7 et 8

Für RHEL wird ein 3rd-party repository benötigt [EPEL](https://www.redhat.com/en/blog/whats-epel-and-how-do-i-use-it).

Pour RHEL, un repository 3rd-party est nécessaire [EPEL](https://www.redhat.com/en/blog/whats-epel-and-how-do-i-use-it).

## Suse Linux Enterprise Server (SLES) 15 SP2

## Suse Linux Enterprise Server (SLES) 15 SP2

Vergewissern Sie sich, dass Sie das "Web- und Scripting-Modul" aktiviert haben. Dann:

Assurez-vous d'avoir activé le "module web et script". Ensuite

```
zypper refresh
zypper update
zypper install php7 php7-bz2 php7-curl php7-json php7-phar
```