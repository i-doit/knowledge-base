# Anforderungen

idoitcmk ist ein Kommandozeilenwerkzeug, das die APIs von i-doit und Checkmk verwendet. Bitte erfüllen Sie die folgenden Anforderungen:

Für i-doit benötigen Sie:

*   Eine Kopie von i-doit, Version 1.12.2 oder höher
*   Aktiviertes API-Add-on, Version 1.10.2 oder höher

Für Checkmk 2 benötigen Sie:

*   Eine oder mehrere Seiten von Checkmk, Version 1.5 oder höher
*   Aktivierte Web-API
*   Aktiviert Livestatus

idoitcmk kann auf jedem POSIX-Betriebssystem laufen. Die folgenden Betriebssysteme werden derzeit unterstützt:

*   Debian GNU/Linux 10 "buster" und 11 "bullseye"
*   Ubuntu Linux 18.04 LTS "bionic" und 20.04 LTS "focal fossa"
*   Red Hat Enterprise Linux (RHEL) 7 und 8
*   SUSE Linux Enterprise Server (SLES) 15, 15 SP1 und 15 SP2

Andere Betriebssysteme sollten funktionieren, zum Beispiel macOS, CentOS und viele andere. MS Windows kann funktionieren, ist aber völlig ungetestet.

Bevor Sie idoitcmk installieren, vergewissern Sie sich, dass Sie folgendes installiert haben:

*   PHP, version 7.3 oder 7.4 (7.4 ist empfohlen) und
*   PHP modules bz2, calendar, curl, date, filter json and Phar

Um das klarzustellen: Sie sind nicht gezwungen, diese Anwendung auf denselben Systemen laufen zu lassen wie i-doit oder Checkmk 2

## Betriebssystem Spezifische Anforderungen

Basierend auf den oben genannten Anforderungen verwenden Sie diese Anweisungen für Ihr Betriebssystem. Für alle Befehle benötigen Sie Superuser-Rechte (root). Sie können sie mit sudo erlangen.

## Debian GNU/Linux 10 "buster" und 11 "bullseye"

```shell
sudo apt update
sudo apt install php7.4-cli php7.4-common php7.4-curl php7.4-json
```

## Ubuntu Linux 18.04 LTS "Bionic Beaver" und 20.04 LTS "focal fossa"

```shell
sudo apt update
sudo apt install php7.4-cli php7.4-common php7.4-curl php7.4-json
```

## Red Hat Enterprise Linux (RHEL) 7 und 8

Für RHEL wird ein 3rd-party repository benötigt [EPEL](https://www.redhat.com/en/blog/whats-epel-and-how-do-i-use-it).

```shell
rpm --import https://dl.fedoraproject.org/pub/epel/RPM-GPG-KEY-EPEL-7
rpm -Uvh https://dl.fedoraproject.org/pub/epel/epel-release-latest-7.noarch.rpm
rpm --import https://mirror.webtatic.com/yum/RPM-GPG-KEY-webtatic-el7
rpm -Uvh https://mirror.webtatic.com/yum/el7/webtatic-release.rpm
yum update
yum install php74w php74w-cli php74w-common
```

## SUSE Linux Enterprise Server (SLES) 15 SP2

Vergewissern Sie sich, dass Sie das "Web- und Scripting-Modul" aktiviert haben. Dann:

```shell
    zypper refresh
    zypper update
    zypper install php7 php7-bz2 php7-curl php7-json php7-phar
```
