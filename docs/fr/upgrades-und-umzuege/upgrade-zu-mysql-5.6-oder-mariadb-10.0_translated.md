<!-- TRANSLATED by md-translate -->
# Upgrade zu MySQL 5.6 oder MariaDB 10.0

# Mise à niveau vers MySQL 5.6 ou MariaDB 10.0

Ab der Version 1.7 von _i-doit_ ändern sich die [Systemvoraussetzungen](../installation/systemvoraussetzungen.md) für das Datenbank-Backend. Wurde in der Version 1.6 noch mindestens MySQL 5.5 oder MariaDB 5.5 vorausgesetzt, sind es ab Version 1.7 mindestens MySQL 5.6 oder MariaDB 10.0. Dies bedingt unter Umständen Änderungen an denjenigen [Betriebssystemen](../installation/manuelle-installation/index.md), die von synetics unterstützt werden. Dieser Artikel beschreibt die wichtigsten Details, damit _i-doit_ auch weiterhin vollständig funktioniert.

A partir de la version 1.7 de _i-doit_, la [configuration requise](../installation/systemvoraussetzung.md) pour le backend de la base de données a changé. Si dans la version 1.6, il fallait au moins MySQL 5.5 ou MariaDB 5.5, à partir de la version 1.7, il faut au moins MySQL 5.6 ou MariaDB 10.0. Cela peut nécessiter des changements dans les [systèmes d'exploitation](../installation/manuelle-installation/index.md) qui sont supportés par synetics. Cet article décrit les détails les plus importants pour que _i-doit_ continue à fonctionner pleinement.

Um festzustellen, welche Version im Einsatz ist, kann man folgenden Befehl auf der Kommandozeile ausführen (funktioniert sowohl mit MySQL, als auch MariaDB):

Pour savoir quelle version est utilisée, on peut exécuter la commande suivante sur la ligne de commande (fonctionne aussi bien avec MySQL qu'avec MariaDB) :

```
mysql --version
```

Es existieren pro Betriebssystem teilweise mehrere Upgrade-Pfade. Wir empfehlen daher diejenigen, die aus unserer Sicht den geringsten Einfluss auf das System haben:

Il existe parfois plusieurs chemins de mise à niveau par système d'exploitation. Nous recommandons donc ceux qui, selon nous, ont le moins d'impact sur le système :

| Betriebssystem | Version | Altes Datenbank-Backend | Neues Datenbank-Backend |
| --- | --- | --- | --- |
| Debian GNU/Linux | 8   | MySQL 5.5, MariaDB 10.0 | MariaDB 10.0 |
|     | 7.8 | MySQL 5.5 | MariaDB 10.0 |
| Ubuntu | 14.04 LTS | MySQL 5.5, MySQL 5.6, MariaDB 5.5 | MySQL 5.6 |
|     | 12.04 LTS | MySQL 5.5 | MariaDB 10.0 |
| Red Hat Enterprise Linux (RHEL) | 7.1 | MariaDB 5.5 | MariaDB 10.0 |
|     | 6.7 | MySQL 5.1 | MariaDB 10.0 |
| SUSE Linux Enterprise Server (SLES) | 12  | MariaDB 10.0 | MariaDB 10.0 |
| Windows Server | 2008/2012 | Je nach XAMPP-Version | MariaDB 10.0 |

| Système d'exploitation | Version | Ancien backend de la base de données | Nouveau backend de la base de données |
| --- | --- | --- | --- |
| Debian GNU/Linux | 8 | MySQL 5.5, MariaDB 10.0 | MariaDB 10.0 |
| 7.8 | MySQL 5.5 | MariaDB 10.0 |
| Ubuntu | 14.04 LTS | MySQL 5.5, MySQL 5.6, MariaDB 5.5 | MySQL 5.6 |
| 12.04 LTS | MySQL 5.5 | MariaDB 10.0 |
| Red Hat Enterprise Linux (RHEL) | 7.1 | MariaDB 5.5 | MariaDB 10.0 |
| 6.7 | MySQL 5.1 | MariaDB 10.0 |
| SUSE Linux Enterprise Server (SLES) | 12 | MariaDB 10.0 | MariaDB 10.0 |
| Windows Server | 2008/2012 | Selon la version de XAMPP | MariaDB 10.0 |

!!! attention "Es ist absolut essentiell, dass die [Daten gesichert](../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md) werden, bevor Änderungen am System vorgenommen werden. Da die Upgrade-Prozedur je nach Betriebssystem unterschiedlich lange andauern kann, sollten die Benutzer von _i-doit_ vorab informiert werden."

! !! attention "Il est absolument essentiel que les [données soient sauvegardées](../maintenance-et-exploitation/sauvegarde-et-restauration-de-données/index.md) avant d'apporter des modifications au système. Comme la procédure de mise à niveau peut durer plus ou moins longtemps selon le système d'exploitation, les utilisateurs de _i-doit_ doivent être informés à l'avance".

## Debian GNU/Linux 8

## Debian GNU/Linux 8

Version 8 von [Debian GNU/Linux](../installation/manuelle-installation/debian.md) enthält in den Standardpaketen MySQL 5.5 und MariaDB 10.0. Sollte MySQL installiert sein, genügt es, das Paket für MariaDB zu installieren. Dadurch wird MySQL durch MariaDB ersetzt:

La version 8 de [Debian GNU/Linux](../installation/manuelle-installation/debian.md) contient MySQL 5.5 et MariaDB 10.0 dans les paquets standards. Si MySQL est installé, il suffit d'installer le paquet pour MariaDB. MySQL sera ainsi remplacé par MariaDB :

```
sudo apt-get update
sudo apt-get install mariadb-server php5-mysqlnd
```

## Debian GNU/Linux 7.8

## Debian GNU/Linux 7.8

Version 7.8 von [Debian GNU/Linux](../installation/manuelle-installation/debian.md) enthält in den Standardpaketen MySQL 5.5 und kein MariaDB. Um MariaDB einzusetzen, kann das [offizielle Repository von MariaDB eingebunden](https://downloads.mariadb.org/mariadb/repositories/#mirror=23Media&amp;distro=Debian&amp;distro_release=wheezy--wheezy&amp;version=10.0) werden. Vorsicht: Dritt-Repositories können das System beeinträchtigen. Durch die Installation von MariaDB wird MySQL ersetzt:

La version 7.8 de [Debian GNU/Linux](../installation/manuelle-installation/debian.md) contient MySQL 5.5 dans les paquets standards et pas MariaDB. Pour utiliser MariaDB, le [dépôt officiel de MariaDB](https://downloads.mariadb.org/mariadb/repositories/#mirror=23Media&amp;distro=Debian&amp;distro_release=wheezy--wheezy&amp;version=10.0) peut être inclus. Attention : les dépôts tiers peuvent affecter le système. L'installation de MariaDB remplace MySQL :

```
sudo apt-get update
sudo apt-get install python-software-properties
sudo apt-key adv --recv-keys --keyserver keyserver.ubuntu.com 0xcbcb082a1bb943db
sudo add-apt-repository 'deb [arch=amd64,i386] [http://mirror.23media.de/mariadb/repo/10.0/debian](http://mirror.23media.de/mariadb/repo/10.0/debian) wheezy main'
sudo apt-get update
sudo apt-get install mariadb-server php5-mysqlnd
```

## Ubuntu 14.04 LTS

## Ubuntu 14.04 LTS

Version 14.04 LTS von [Ubuntu](../installation/manuelle-installation/ubuntu-linux/index.md) enthält in den Standardpaketen MySQL 5.5, 5.6 und MariaDB 5.5. Es wird daher empfohlen, MySQL 5.6 einzusetzen. Sollten MySQL 5.5 oder MariaDB 5.5 bisher installiert sein, werden diese durch MySQL 5.6 ersetzt:

La version 14.04 LTS de [Ubuntu](../installation/manuelle-installation/ubuntu-linux/index.md) contient MySQL 5.5, 5.6 et MariaDB 5.5 dans les paquets standard. Il est donc recommandé d'utiliser MySQL 5.6. Si MySQL 5.5 ou MariaDB 5.5 sont déjà installés, ils seront remplacés par MySQL 5.6 :

```
sudo apt-get update
sudo apt-get install mysql-server-5.6 php5-mysqlnd mysql-client-core-5.6 mysql-client-5.6
```

## Ubuntu 12.04 LTS

## Ubuntu 12.04 LTS

Version 12.04 LTS von [Ubuntu](../installation/manuelle-installation/ubuntu-linux/index.md) enthält in den Standardpaketen MySQL 5.5 und kein MariaDB. Da diese Betriebssystem-Version sehr alte Pakete für MySQL, PHP und Apache Webserver enthält, raten wir vom Einsatz generell ab und empfehlen stattdessen ein Upgrade auf Version 14.04 LTS. Wenn dies nicht möglich sein sollte, kann auf MariaDB 10.0 gewechselt werden, indem das [offizielle Repository von MariaDB eingebunden](https://downloads.mariadb.org/mariadb/repositories/#mirror=23Media&amp;distro=Ubuntu&amp;distro_release=precise--ubuntu_precise&amp;version=10.0) wird. Vorsicht: Dritt-Repositories können das System beeinträchtigen. Durch die Installation von MariaDB wird MySQL ersetzt:

La version 12.04 LTS de [Ubuntu](../installation/manuelle-installation/ubuntu-linux/index.md) contient MySQL 5.5 et pas de MariaDB dans les paquets standard. Comme cette version du système d'exploitation contient des paquets très anciens pour MySQL, PHP et le serveur web Apache, nous déconseillons généralement son utilisation et recommandons plutôt une mise à niveau vers la version 14.04 LTS. Si cela n'est pas possible, il est possible de passer à MariaDB 10.0 en intégrant le [référentiel officiel de MariaDB](https://downloads.mariadb.org/mariadb/repositories/#mirror=23Media&amp;distro=Ubuntu&amp;distro_release=precise--ubuntu_precise&amp;version=10.0). Attention : les dépôts tiers peuvent affecter le système. L'installation de MariaDB remplace MySQL :

```
sudo apt-get update
sudo apt-get install python-software-properties
sudo apt-key adv --recv-keys --keyserver hkp://keyserver.ubuntu.com:80 0xcbcb082a1bb943db
sudo add-apt-repository 'deb [arch=amd64,i386] [http://mirror.23media.de/mariadb/repo/10.0/ubuntu](http://mirror.23media.de/mariadb/repo/10.0/ubuntu) precise main'
sudo apt-get update
sudo apt-get install mariadb-server php5-mysqlnd
```

## Red Hat Enterprise Linux 7.1

## Red Hat Enterprise Linux 7.1

Version 7.1 von [Red Hat Enterprise Linux (RHEL)](../installation/manuelle-installation/red-hat-enterprise-linux/index.md) enthält in den Standardpaketen MariaDB 5.5 und kein MySQL. Um auf MariaDB 10.0 zu wechseln, sind [laut einem Blog-Eintrag von MariaDB](https://mariadb.com/blog/installing-mariadb-10-centos-7-rhel-7) wenige Schritte nötig. Dadurch wird MariaDB 5.5 durch 10.0 ersetzt. Vorsicht: Dritt-Repositories können das System beeinträchtigen.

La version 7.1 de [Red Hat Enterprise Linux (RHEL)](../installation/manuelle-installation/red-hat-enterprise-linux/index.md) contient MariaDB 5.5 et pas MySQL dans les paquets standards. Pour passer à MariaDB 10.0, [selon un billet de blog de MariaDB](https://mariadb.com/blog/installing-mariadb-10-centos-7-rhel-7) quelques étapes sont nécessaires. Cela permet de remplacer MariaDB 5.5 par 10.0. Attention : les référentiels tiers peuvent affecter le système.

!!! attention "Dieser Upgrade-Pfad bezieht sich auf die 64bit-Variante des Betriebssystems."

! !! attention "Ce chemin de mise à niveau se réfère à la variante 64bit du système d'exploitation".

Zuerst wird die bisherige Version deinstalliert:

Tout d'abord, la version précédente est désinstallée :

```
sudo yum remove mariadb-server mariadb-libs
```

Danach muss die Datei /etc/yum.repos.d/MariaDB.repo angelegt und editiert werden:

Ensuite, le fichier /etc/yum.repos.d/MariaDB.repo doit être créé et édité :

```
# MariaDB 10.0 RedHat repository list
# http://mariadb.org/mariadb/repositories/
[mariadb]
name = MariaDB
baseurl = http://yum.mariadb.org/10.0/rhel7-amd64
gpgkey=https://yum.mariadb.org/RPM-GPG-KEY-MariaDB
gpgcheck=1
```

Zu guter Letzt werden die Pakete installiert, der MariaDB-Server gestartet und die Datenbanken auf den aktuellen Stand gebracht:

Enfin, les paquets sont installés, le serveur MariaDB est démarré et les bases de données sont mises à jour :

```
sudo yum install MariaDB-server MariaDB-client
sudo /etc/init.d/mysql start
sudo mysql_upgrade -uroot -p
```

Unter Umständen werden beim anfangs erwähnten Entfernen der Pakete ebenfalls die zugehörige PHP-Extension deinstalliert. Um diese wieder zu installieren benötigen wir folgende Befehle:

Il est possible que l'extension PHP correspondante soit également désinstallée lors de la suppression des paquets mentionnée plus haut. Pour la réinstaller, nous avons besoin des commandes suivantes :

```
sudo yum install php-mysqlnd.x86_64
sudo service httpd restart
```

## Red Hat Enterprise Linux 6.7

## Red Hat Enterprise Linux 6.7

Version 6.7 von [Red Hat Enterprise Linux (RHEL)](../installation/manuelle-installation/red-hat-enterprise-linux/index.md) enthält in den Standardpaketen MySQL 5.1 und kein MariaDB. Da diese Betriebssystem-Version sehr alte Pakete für MySQL, PHP und Apache Webserver enthält, raten wir vom Einsatz generell ab und empfehlen stattdessen ein Upgrade auf Version 7.1. Wenn dies nicht möglich sein sollte, kann auf MariaDB 10.0 gewechselt werden, indem das [offizielle Repository von MariaDB eingebunden](https://downloads.mariadb.org/mariadb/repositories/#mirror=23Media&amp;distro=RedHat&amp;distro_release=rhel6-amd64--rhel6&amp;version=10.0) wird, wie [in einem Blog-Beitrag von MariaDB beschrieben](https://mariadb.com/kb/en/mariadb/yum/). Vorsicht: Dritt-Repositories können das System beeinträchtigen.

La version 6.7 de [Red Hat Enterprise Linux (RHEL)](../installation/manuelle-installation/red-hat-enterprise-linux/index.md) contient MySQL 5.1 dans les paquets standard et pas de MariaDB. Comme cette version du système d'exploitation contient des paquets très anciens pour MySQL, PHP et le serveur web Apache, nous déconseillons généralement son utilisation et recommandons plutôt une mise à niveau vers la version 7.1. Si cela n'est pas possible, il est possible de passer à MariaDB 10.0 en intégrant le [référentiel officiel de MariaDB](https://downloads.mariadb.org/mariadb/repositories/#mirror=23Media&amp;distro=RedHat&amp;distro_release=rhel6-amd64--rhel6&amp;version=10.0), comme [décrit dans un article du blog de MariaDB](https://mariadb.com/kb/en/mariadb/yum/). Attention : les dépôts tiers peuvent affecter le système.

!!! "attention Dieser Upgrade-Pfad bezieht sich auf die 64bit-Variante des Betriebssystems."

! !! "attention Ce chemin de mise à niveau se réfère à la variante 64bit du système d'exploitation".

Zuerst wird die bisherige Version deinstalliert:

Tout d'abord, la version précédente est désinstallée :

```
sudo yum remove mysql-server mysql-libs
```

Danach muss die Datei **/etc/yum.repos.d/MariaDB**.repo angelegt und editiert werden:

Ensuite, le fichier **/etc/yum.repos.d/MariaDB**.repo doit être créé et édité :

```
# MariaDB 10.0 RedHat repository list
# [http://mariadb.org/mariadb/repositories/](http://mariadb.org/mariadb/repositories/)
[mariadb]
name = MariaDB
baseurl = http://yum.mariadb.org/10.0/rhel6-amd64
gpgkey=https://yum.mariadb.org/RPM-GPG-KEY-MariaDB
gpgcheck=1
```

Zu guter Letzt wird das Paket installiert:

Enfin, le paquet est installé :

```
sudo yum install MariaDB-server MariaDB-client
```

## SUSE Linux Enterprise Server 12

## SUSE Linux Enterprise Server 12

Version 12 von [SUSE Linux Enterprise Server (SLES)](../installation/manuelle-installation/suse-linux-enterprise-server.md) enthält in den Standardpaketen bereits MariaDB 10.0, aber kein MySQL. Es ist daher kein Upgrade nötig.

La version 12 de [SUSE Linux Enterprise Server (SLES)](../installation/manuelle-installation/suse-linux-enterprise-server.md) contient déjà MariaDB 10.0 dans les paquets standards, mais pas MySQL. Aucune mise à niveau n'est donc nécessaire.

## Windows Server 2008/2012

## Windows Server 2008/2012

Sollte [Windows Server 2008/2012](../installation/manuelle-installation/microsoft-windows-server/index.md) zum Einsatz kommen, empfiehlt sich der Einsatz von XAMPP. Diese von den [Apache Friends](https://www.apachefriends.org/) bereitgestellte Distribution enthält unter anderem den Apache Webserver, PHP und MariaDB. Es sollte darauf geachtet werden, dass stets die aktuelle Version zum Einsatz kommt.

Si [Windows Server 2008/2012](../installation/manuelle-installation/microsoft-windows-server/index.md) est utilisé, il est recommandé d'utiliser XAMPP. Cette distribution mise à disposition par les [Apache Friends](https://www.apachefriends.org/) contient entre autres le serveur web Apache, PHP et MariaDB. Il faut veiller à toujours utiliser la version actuelle.

!!!attention "Da XAMPP weder über eine offizielle Dokumentation, noch einen Update-Mechanismus verfügt, ist der Upgrade-Pfad unter Umständen sehr kompliziert und fehleranfällig. Ein **aktuelles [Backup](../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md)** **und ausführliches Testen** nach dem Upgrade sind daher unabdingbar."

!!!attention "Comme XAMPP ne dispose ni d'une documentation officielle, ni d'un mécanisme de mise à jour, le chemin de mise à niveau peut être très compliqué et sujet à des erreurs. Une **sauvegarde](../maintenance-et-exploitation/sauvegarde-et-restauration des données/index.md)** **et des tests approfondis** après la mise à niveau sont donc indispensables".

Sollte nicht bereits eine XAMPP-Version mit MariaDB 10.0 zum Einsatz kommen, sind folgende Schritte nötig:

Si une version de XAMPP avec MariaDB 10.0 n'est pas déjà utilisée, les étapes suivantes sont nécessaires :

1. Kopieren des XAMPP-Verzeichnisses, meist unter C:\xampp\
2. Aktuelle Version von XAMPP auf der [offiziellen Seite](https://www.apachefriends.org/) herunterladen
3. Bisherige XAMPP-Version deinstallieren
4. XAMPP-Verzeichnis löschen
5. Neue XAMPP-Version in dasselbe Verzeichnis installieren
6. Verzeichnisse htdocs und mysql\data aus der Kopie des XAMPP-Verzeichnisses wiederherstellen, vorhandene Dateien dabei nicht überschreiben
7. Konfigurations-Dateien anpassen, sodass sie den [Systemeinstellungen](../installation/manuelle-installation/systemeinstellungen.md) genügen
8. Apache Webserver und MariaDB starten
9. Tests durchführen

1. copier le répertoire XAMPP, généralement sous C:\xampp\
2. télécharger la version actuelle de XAMPP sur le [site officiel](https://www.apachefriends.org/)
3. désinstaller la version précédente de XAMPP
4. supprimer le répertoire XAMPP
5. installer la nouvelle version de XAMPP dans le même répertoire
6. restaurer les répertoires htdocs et mysql\data à partir de la copie du répertoire XAMPP, ne pas écraser les fichiers existants
7. adapter les fichiers de configuration pour qu'ils soient conformes aux [paramètres système](../installation/installation manuelle/paramètres système.md)
8. démarrer le serveur web Apache et MariaDB
9. effectuer des tests

## Troubleshooting

## Dépannage

!!! attention "Headers and client library minor version mismatch"

! !! attention "Headers and client library minor version mismatch

```
Nach dem Upgrade kann es vorkommen, dass _i-doit_ keine Verbindung zum MySQL-/MariaDB-Server aufbauen kann. Folgende Fehlermeldung erscheint:

    mysqli_connect(): Headers and client library minor version mismatch. Headers:50544 Library:100024 (/var/www/html/i-doit/src/classes/components/isys_component_database_mysqli.class.php:16)

Der Grund für diesen Fehler ist in noch laufenden Apache-Prozessen zu suchen. Die PHP Bindings für MySQL/MariaDB (mysqli) sollen auf das neue Interface von MySQL/MariaDB zugreifen, aber das alte Interface befindet sich noch im Arbeitsspeicher. Abhilfe schafft ein Neustart von Apache. Beispiel unter Debian/Ubuntu:

sudo service apache2 restart
```