---
title: Anforderungen
description: "idoitcmk ist ein Kommandozeilenwerkzeug, das die APIs von i-doit und Checkmk verwendet."
icon:
status:
lang: de
---
# Anforderungen

idoitcmk ist ein Kommandozeilenwerkzeug, das die APIs von i-doit und Checkmk verwendet. Bitte stelle sicher, dass du die folgenden Anforderungen erfuellst.

[![Checkmk](../../assets/images/de/i-doit-add-ons/checkmk2/checkmk-hauptseite.png)](../../assets/images/de/i-doit-add-ons/checkmk2/checkmk-hauptseite.png)

## i-doit

*   Eine Kopie von i-doit, Version 1.12.2 oder höher
*   Aktiviertes API-Add-on, Version 1.10.2 oder höher

## Checkmk

*   Eine oder mehrere Sites von Checkmk, Version 1.5 oder höher
*   Aktivierte Web-API
*   Aktiviertes Livestatus

## Unterstützte Betriebssysteme

idoitcmk kann auf jedem POSIX-Betriebssystem laufen. Die folgenden Betriebssysteme werden derzeit unterstützt:

*   Debian GNU/Linux 10 "buster" und 11 "bullseye"
*   Ubuntu Linux 18.04 LTS "bionic" und 20.04 LTS "focal fossa"
*   Red Hat Enterprise Linux (RHEL) 7 und 8
*   SUSE Linux Enterprise Server (SLES) 15, 15 SP1 und 15 SP2

Andere Betriebssysteme sollten funktionieren, zum Beispiel macOS, CentOS und viele andere. MS Windows kann funktionieren, ist aber völlig ungetestet.

## PHP-Voraussetzungen

Bevor du idoitcmk installierst, vergewissere dich, dass du Folgendes installiert hast:

*   PHP, Version 7.3 oder 7.4 (7.4 ist empfohlen) und
*   PHP-Module bz2, calendar, curl, date, filter, json und Phar

Um das klarzustellen: Du bist nicht gezwungen, diese Anwendung auf denselben Systemen laufen zu lassen wie i-doit oder Checkmk 2.

## Betriebssystemspezifische Anforderungen

Basierend auf den oben genannten Anforderungen verwendest du diese Anweisungen für dein Betriebssystem. Für alle Befehle benötigst du Superuser-Rechte (root). Du kannst sie mit sudo erlangen.

### Debian GNU/Linux 10 "buster" und 11 "bullseye"

```shell
sudo apt update
sudo apt install php7.4-cli php7.4-common php7.4-curl php7.4-json
```

### Ubuntu Linux 18.04 LTS "Bionic Beaver" und 20.04 LTS "focal fossa"

```shell
sudo apt update
sudo apt install php7.4-cli php7.4-common php7.4-curl php7.4-json
```

### Red Hat Enterprise Linux (RHEL) 7 und 8

Für RHEL wird ein 3rd-party Repository benötigt: [EPEL](https://www.redhat.com/en/blog/whats-epel-and-how-do-i-use-it).

```shell
rpm --import https://dl.fedoraproject.org/pub/epel/RPM-GPG-KEY-EPEL-7
rpm -Uvh https://dl.fedoraproject.org/pub/epel/epel-release-latest-7.noarch.rpm
rpm --import https://mirror.webtatic.com/yum/RPM-GPG-KEY-webtatic-el7
rpm -Uvh https://mirror.webtatic.com/yum/el7/webtatic-release.rpm
yum update
yum install php74w php74w-cli php74w-common
```

### SUSE Linux Enterprise Server (SLES) 15 SP2

Vergewissere dich, dass du das "Web- und Scripting-Modul" aktiviert hast. Dann:

```shell
zypper refresh
zypper update
zypper install php7 php7-bz2 php7-curl php7-json php7-phar
```
