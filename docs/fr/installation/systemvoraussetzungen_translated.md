<!-- TRANSLATED by md-translate -->
# Systemvoraussetzungen

# Configuration requise

Um den Betrieb aller Funktionalitäten von i-doit zu gewährleisten, existieren für das darunter liegende System Voraussetzungen, die erfüllt sein müssen.

Pour garantir le fonctionnement de toutes les fonctionnalités d'i-doit, il existe des conditions préalables pour le système sous-jacent qui doivent être remplies.

!!! info "Aktualität"
    Die unten genannten Systemvoraussetzungen beziehen sich auf die aktuelle Version von i-doit, in diesem Fall ==27==. Zu jedem Major Release von i-doit werden diese Angaben angepasst. Wer die Angaben für ältere Versionen von i-doit benötigt, kann die Änderungshistorie dieser Seite verfolgen.

! !! info "Actualité"
    La configuration système requise mentionnée ci-dessous se réfère à la version actuelle d'i-doit, dans ce cas ==27==. À chaque version majeure d'i-doit, ces indications sont adaptées. Ceux qui ont besoin des indications pour les anciennes versions d'i-doit peuvent suivre l'historique des modifications de cette page.

## Mindestanforderungen an das System

## Exigences minimales pour le système

Folgende Systemparameter sind Mindestanforderungen, um einen Betrieb von i-doit mit bis zu ca. 10.000 Objekten und bis zu 10 gleichzeitig arbeitenden Benutzern zu gewährleisten.

Les paramètres système suivants sont des exigences minimales pour garantir un fonctionnement d'i-doit avec jusqu'à environ 10.000 objets et jusqu'à 10 utilisateurs travaillant simultanément.

### Virtuelle Hardware

### Matériel virtuel

* 2 vCPUs
* 2 GB RAM
* 10 GB freier Festplattenspeicher

* 2 vCPUs
* 2 GO DE RAM
* 10 Go d'espace libre sur le disque dur

Wir empfehlen den Einsatz einer dedizierten, virtuellen Maschine. Der tatsächlich Hardware-Bedarf richtet sich nach Umfang der [IT-Dokumentation](../glossar.md) und Anzahl gleichzeitiger Benutzer.

Nous recommandons l'utilisation d'une machine virtuelle dédiée. Les besoins réels en matériel dépendent de l'étendue de la [documentation informatique](../glossar.md) et du nombre d'utilisateurs simultanés.

### LAMP / WAMP Stack

### Pile LAMP / WAMP

* GNU/Linux in der 64bit Variante(amd64) oder Windows Server 2022 in der 64bit Variante(amd64)
* Apache Webserver ==2.4==
* MariaDB 10.2, 10.3, 10.4, 10.5, ==10.6== (empfohlen) oder MySQL 5.7 oder 8.0. _Wir empfehlen jedoch, MariaDB anstelle von MySQL zu verwenden._
* PHP 7.4 (veraltet), ==8.0== (empfohlen) und 8.1. _Im Moment wird PHP Version >= 8.2 nicht unterstützt. Wir planen die Unterstützung in einer späteren Version._
* PHP Extensions: bcmath, ctype, curl, fileinfo, gd, imagick, json, ldap, mbstring, memcached, mysqli, mysqlnd, pgsql, session, soap, xml, zip

* GNU/Linux dans la variante 64bit(amd64) ou Windows Server 2022 dans la variante 64bit(amd64)
* Serveur web Apache ==2.4==
* MariaDB 10.2, 10.3, 10.4, 10.5, ==10.6== (recommandé) ou MySQL 5.7 ou 8.0. _Nous recommandons toutefois d'utiliser MariaDB au lieu de MySQL._
* PHP 7.4 (obsolète), ==8.0== (recommandé) et 8.1. _Pour le moment, PHP version >= 8.2 n'est pas supporté. Nous prévoyons de la supporter dans une version ultérieure._
* PHP Extensions : bcmath, ctype, curl, fileinfo, gd, imagick, json, ldap, mbstring, memcached, mysqli, mysqlnd, pgsql, session, soap, xml, zip

Wir empfehlen den Einsatz von ==Apache Webserver 2.4, PHP 8.0 und MariaDB 10.6==.

Nous recommandons l'utilisation de ==Apache Webserver 2.4, PHP 8.0 et MariaDB 10.6==.

!!! Success "Referenzkonfiguration"
    Folgende Systemparameter bilden eine von uns getestete und empfohlene Referenzkonfiguration, welche eine hohe Performance bei bis zu 500.000 Objekten und einer hohen Anzahl von gleichzeitig arbeitenden Benutzern gewährleistet.

! !! Success "Configuration de référence"
    Les paramètres système suivants constituent une configuration de référence que nous avons testée et recommandée et qui garantit des performances élevées pour jusqu'à 500.000 objets et un grand nombre d'utilisateurs travaillant simultanément.

```
### Virtuelle Hardware

- 2 vCPUs
- 8 GB RAM
- 50 GB freier Festplattenplatz

### Betriebssystem

Wir empfehlen ein auf GNU/Linux basiertes Betriebssystem

### LAMP Stack

- Apache 2.4.x(Standardpaket)
- MariaDB 10.6.x (Standardpaket)
- PHP 8.0.x (Standardpaket)

!!! info "Hinweis"

    i-doit ist eine Datenbankanwendung und daher intensiver Festplattennutzer. Ein schneller Festplattenspeicher wird empfohlen, da I/O-Verkehr maßgeblich die Performance bestimmt.<br>
    Die Festplattenbedarf kann sich bei intensiver Nutzung der Datei- oder Bildablage in i-doit erhöhen.<br>
    Der Wert von 50 GB orientiert sich nur an der maximalen Datenbankgröße, die bei voller Nutzung und bei Updates oder ähnlichen Operationen erreicht werden kann.
```

## Client

## Client

Auf dem Client wird ein Webbrowser benötigt, um auf die Web GUI von i-doit zugreifen zu können. Es wird die jeweils aktuelle Version und die Vorversion des Webbrowsers unterstützt:

Un navigateur Web est nécessaire sur le client pour accéder à l'interface utilisateur graphique Web d'i-doit. La version actuelle et la version précédente du navigateur Web sont prises en charge :

* Mozilla Firefox (inkl. letzte ESR-Version)
* Google Chrome/Chromium
* Microsoft Edge (abgeschalteter Kompatibilitätsmodus)
* Apple Safari

* Mozilla Firefox (y compris la dernière version ESR)
* Google Chrome/Chromium
* Microsoft Edge (mode de compatibilité désactivé)
* Apple Safari

## Kompatibilitätsmatrix

## Matrice de compatibilité

=== "28"

=== "28"

```
| **i-doit Version** | 28 |
| --- | --- |
| **Release** | 2023-12 |
| **Apache Webserver** | 2.4 |
| **PHP** | 7.4 (deprecated) <br>==8.0== (recommended)<br>8.1 |
| **MySQL** | 5.7 <br>8.0 |
| **MariaDB** |  10.2 <br>10.3  <br>10.4  <br>10.5 <br>==10.6== (recommended) |
```

=== "27"

=== "27"

```
| **i-doit Version** | 27 |
| --- | --- |
| **Release** | 2023-08 |
| **Apache Webserver** | 2.4 |
| **PHP** | 7.4 (deprecated) <br>==8.0== (recommended)<br>8.1 |
| **MySQL** | 5.7 <br>8.0 |
| **MariaDB** |  10.2 <br>10.3  <br>10.4  <br>10.5 <br>==10.6== (recommended) |
```

=== "26"

=== "26"

```
| **i-doit Version** | 26 |
| --- | --- |
| **Release** | 2023-08 |
| **Apache Webserver** | 2.4 |
| **PHP** | 7.4 <br>==8.0== (recommended) <br>{++8.1++} |
| **MySQL** | 5.7 <br>8.0 |
| **MariaDB** |  10.2 <br>10.3  <br>10.4  <br>10.5 <br>==10.6== (recommended) |
```

=== "25"

=== "25"

```
| **i-doit Version** | 25 |
| --- | --- |
| **Release** | 2023-06 |
| **Apache Webserver** | 2.4 |
| **PHP** | 7.4 <br>8.0 (recommended) |
| **MySQL** | 5.7 <br>8.0 |
| **MariaDB** |  10.2  <br>10.3  <br>10.4  <br>10.5 <br>10.6 (recommended) |
| **Debian GNU/Linux** | 11 |
| **Ubuntu** | 18.04¹<br> 20.04 |
| **RHEL** | 7¹<br> 8 |
| **SLES** | 15 SP1<br> 15 SP 2<br> SP 3 |
| **XAMPP for Windows²** | 2022 |
```

=== "24"

=== "24"

```
| **i-doit Version** | 24 |
| --- | --- |
| **Release** | 2023-05 |
| **Apache Webserver** | 2.4 |
| **PHP** | 7.4 <br>8.0 (recommended) |
| **MySQL** | 5.7 |
| **MariaDB** |  10.2  <br>10.3  <br>10.4  <br>10.5 (recommended) |
| **Debian GNU/Linux** | 11 |
| **Ubuntu** | 18.04¹<br> 20.04 |
| **RHEL** | 7¹<br> 8 |
| **SLES** | 15 SP1<br> 15 SP 2<br> SP 3 |
| **XAMPP for Windows²** | 2016<br> 2019 |
```

=== "23, 22, 21, 20, 1.19"

=== "23, 22, 21, 20, 1.19"

```
| **i-doit Version** | 23, 22, 21, 20, 1.19 |
| --- | --- |
| **Release** | 2023-06 |
| **Apache Webserver** | 2.4 |
| **PHP** | 7.4 <br>8.0 (recommended) |
| **MySQL** | 5.7 |
| **MariaDB** |  10.2  <br>10.3  <br>10.4  <br>10.5 (recommended) |
| **Debian GNU/Linux** | 11 |
| **Ubuntu** | 18.04<br> 20.04 |
| **RHEL** | 7¹<br> 8 |
| **SLES** | 15 SP1<br> 15 SP 2<br> SP 3 |
| **XAMPP for Windows²** | 2016<br> 2019 |
```

=== "1.18"

=== "1.18"

```
| **i-doit Version** | 1.18 |
| --- | --- |
| **Release** | 2022-01 |
| **Apache Webserver** | 2.4 |
| **PHP** | 7.3 (deprecated) <br>7.4 (recommended) |
| **MySQL** | 5.7 |
| **MariaDB** |  10.2  <br>10.3  <br>10.4  <br>10.5 (recommended) |
| **Debian GNU/Linux** | 10, 11 |
| **Ubuntu** | 18.04<br> 20.04 |
| **RHEL** | 7¹<br> 8 |
| **SLES** | 15 SP1<br> 15 SP 2 |
| **XAMPP for Windows²** | 2016<br> 2019 |
```

=== "1.17"

=== "1.17"

```
| **i-doit Version** | 1.17 |
| --- | --- |
| **Release** | 2021-07 |
| **Apache Webserver** | 2.4 |
| **PHP** | 7.3 <br>7.4 (recommended) |
| **MySQL** | 5.7 |
| **MariaDB** |  10.2  <br>10.3  <br>10.4  <br>10.5 (recommended) |
| **Debian GNU/Linux** | 10 |
| **Ubuntu** | 18.04<br> 20.04 |
| **RHEL** | 7¹<br> 8 |
| **SLES** | 15<br> 15 SP1 |
| **XAMPP for Windows²** | 2016<br> 2019 |
```

=== "1.16"

=== "1.16"

```
| **i-doit Version** | 1.16 |
| --- | --- |
| **Release** | 2021-01 |
| **Apache Webserver** | 2.4 |
| **PHP** | 7.2.5 (deprecated)<br> 7.3 <br> 7.4 (recommended) |
| **MySQL** | 5.6 (deprecated) <br>5.7 |
| **MariaDB** |  10.1 (deprecated)  <br>10.2  <br>10.3  <br>10.4 (recommended) <br>10.5 |
| **Debian GNU/Linux** | 10 |
| **Ubuntu** | 18.04<br> 20.04 |
| **RHEL** | 7¹<br> 8 |
| **SLES** | 15<br> 15 SP1 |
| **XAMPP for Windows²** | 2016<br> 2019 |
```

=== "1.15"

=== "1.15"

```
| **i-doit Version** | 1.15 |
| --- | --- |
| **Release** | 2020-07 |
| **Apache Webserver** | 2.4 |
| **PHP** | 7.1.8 (deprecated)<br> 7.2<br> 7.3 (recommended)<br>7.4 |
| **MySQL** | 5.6<br> 5.7 |
| **MariaDB** |  10.1 (deprecated)  <br>10.2  <br>10.3  <br>10.4 (recommended) |
| **Debian GNU/Linux** | 10 |
| **Ubuntu** | 18.04<br> 20.04 |
| **RHEL** | 7¹<br> 8 |
| **SLES** | 15<br> 15 SP1 |
| **XAMPP for Windows²** | 2016<br> 2019 |
```

=== "1.14"

=== "1.14"

```
| **i-doit Version** |  1.14 |
| --- | --- |
| **Release** | 2020-01 |
| **Apache Webserver** | 2.4 |
| **PHP** | 7.1.8 (deprecated)<br> 7.2<br> 7.3 (recommended)<br>7.4 |
| **MySQL** | 5.6<br> 5.7 |
| **MariaDB** |  10.1 (deprecated)  <br>10.2  <br>10.3  <br>10.4 (recommended) |
| **Debian GNU/Linux** | 10 |
| **Ubuntu** | 18.04 |
| **RHEL** | 7¹<br> 8 |
| **SLES** | 15<br> 15 SP1 |
| **XAMPP for Windows²** | 2016<br> 2019 |
```

=== "1.13"

=== "1.13"

```
| **i-doit Version** |  1.13 |
| --- | --- |
| **Release** | 2019-06 |
| **Apache Webserver** | 2.4 |
| **PHP** | 7.0.8 (deprecated)<br> 7.1<br> 7.2 <br>7.3 (recommended) |
| **MySQL** | 5.6<br> 5.7 |
| **MariaDB** |  10.0 (deprecated)  <br>10.1  <br>10.2  <br>10.3 (recommended) |
| **Debian GNU/Linux** | 10<br> 9<br> 8 |
| **Ubuntu** | 16.04<br> 18.04 |
| **RHEL** | 7¹<br> 8 |
| **SLES** | 12 SP3<br> 15 |
| **XAMPP for Windows²** | 2008 R2<br> 2012 R2<br> 2016<br> 2019 |
```

=== "1.12"

=== "1.12"

```
| **i-doit Version** |  1.12 |
| --- | --- |
| **Release** | 2018-12 |
| **Apache Webserver** | 2.4 |
| **PHP** | 5.6 (deprecated)<br> 7.0<br> 7.1 <br>7.2 (recommended) |
| **MySQL** | 5.6<br> 5.7 |
| **MariaDB** |  10.0 <br>10.1 |
| **Debian GNU/Linux** | 9<br> 8 |
| **Ubuntu** | 16.04<br> 18.04 |
| **RHEL** | 7.3¹<br> 7.4¹<br> 7.5¹<br> 7.6¹ |
| **SLES** | 12 SP3<br> 15 |
| **XAMPP for Windows²** | 2008 R2<br> 2012 R2<br> 2016<br> 2019 |
```

=== "1.11"

=== "1.11"

```
| **i-doit Version** |  1.11 |
| --- | --- |
| **Release** | 2018-06 |
| **Apache Webserver** | 2.4 |
| **PHP** | 5.6 <br> 7.0<br> 7.1 |
| **MySQL** | 5.6<br> 5.7 |
| **MariaDB** |  10.0 <br>10.1 |
| **Debian GNU/Linux** | 9<br> 8 |
| **Ubuntu** | 16.04 |
| **RHEL** | 7.3¹<br> 7.4¹<br> 7.5¹ |
| **SLES** | 12 SP3 |
| **XAMPP for Windows²** | 2008 R2<br> 2012 R2<br> 2016 |
```

=== "1.10"

=== "1.10"

```
| **i-doit Version** |  1.10 |
| --- | --- |
| **Release** | 2017-12 |
| **Apache Webserver** | 2.4 |
| **PHP** | 5.6 <br> 7.0 |
| **MySQL** | 5.6<br> 5.7 |
| **MariaDB** |  10.0 <br>10.1 |
| **Debian GNU/Linux** | 9<br> 8 |
| **Ubuntu** | 16.04<br> 17.04 |
| **RHEL** | 7.3¹<br> 7.4¹ |
| **SLES** | 12 SP2 <br> 12 SP3 |
| **XAMPP for Windows²** | 2008 R2<br> 2012 R2<br> 2016 |
```

=== "1.9"

=== "1.9"

```
| **i-doit Version** |  1.9 |
| --- | --- |
| **Release** | 2017-05 |
| **Apache Webserver** | 2.4 |
| **PHP** | 5.4<br> 5.5<br> 5.6<br> 7.0 |
| **MySQL** | 5.6<br> 5.7 |
| **MariaDB** |  10.0 <br>10.1 |
| **Debian GNU/Linux** | 9<br> 8 |
| **Ubuntu** | 16.04 LTS<br> 16.10<br> 17.04 |
| **RHEL** | 7.3¹ |
| **SLES** | 12<br> 12 SP2 |
| **XAMPP for Windows²** | 2008<br> 2012 |
```

=== "1.8"

=== "1.8"

```
| **i-doit Version** |  1.8 |
| --- | --- |
| **Release** | 2016-10 |
| **Apache Webserver** | 2.4 |
| **PHP** | 5.4<br> 5.5<br> 5.6 |
| **MySQL** | 5.6<br> 5.7 |
| **MariaDB** |  10.0 <br>10.1 |
| **Debian GNU/Linux** | 9<br> 8 |
| **Ubuntu** | 14.04 |
| **RHEL** | 7.3¹ |
| **SLES** | 12<br> 12 SP2 |
| **XAMPP for Windows²** | 2008<br> 2012 |
```

=== "1.7"

=== "1.7"

```
| **i-doit Version** |  1.7 |
| --- | --- |
| **Release** | 2016-03 |
| **Apache Webserver** | 2.2<br> 2.4 |
| **PHP** | 5.4<br> 5.5<br> 5.6 |
| **MySQL** | 5.6<br> 5.7 |
| **MariaDB** |  10.0 <br>10.1 |
| **Debian GNU/Linux** | 8 |
| **Ubuntu** | 15.10 LTS<br> 14.04 |
| **RHEL** | 7.2¹ |
| **SLES** | 12 |
| **XAMPP for Windows²** | 2008<br> 2012 |
```

| Legend |
| --- |
| ¹ With the help of third-party repositories |
| ² Not recommended for productive use |

| Légende |
| --- |
| ¹ Avec l'aide de référentiels tiers |
| ² Non recommandé pour une utilisation productive |