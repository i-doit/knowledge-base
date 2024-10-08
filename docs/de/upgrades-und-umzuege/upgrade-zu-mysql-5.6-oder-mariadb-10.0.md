---
title: Upgrade zu MySQL 5.6 oder MariaDB 10.0
description: Upgrade zu MySQL 5.6 oder MariaDB 10.0
icon: fontawesome/brands/linux
status:
lang: de
---

Ab der Version 1.7 von _i-doit_ ändern sich die [Systemvoraussetzungen](../installation/systemvoraussetzungen.md) für das Datenbank-Backend. Wurde in der Version 1.6 noch mindestens MySQL 5.5 oder MariaDB 5.5 vorausgesetzt, sind es ab Version 1.7 mindestens MySQL 5.6 oder MariaDB 10.0. Dies bedingt unter Umständen Änderungen an denjenigen [Betriebssystemen](../installation/manuelle-installation/index.md), die von synetics unterstützt werden. Dieser Artikel beschreibt die wichtigsten Details, damit _i-doit_ auch weiterhin vollständig funktioniert.

Um festzustellen, welche Version im Einsatz ist, kann man folgenden Befehl auf der Kommandozeile ausführen (funktioniert sowohl mit MySQL, als auch MariaDB):

    mysql --version

Es existieren pro Betriebssystem teilweise mehrere Upgrade-Pfade. Wir empfehlen daher diejenigen, die aus unserer Sicht den geringsten Einfluss auf das System haben:

| Betriebssystem                      | Version   | Altes Datenbank-Backend           | Neues Datenbank-Backend |
| ----------------------------------- | --------- | --------------------------------- | ----------------------- |
| Debian GNU/Linux                    | 8         | MySQL 5.5, MariaDB 10.0           | MariaDB 10.0            |
|                                     | 7.8       | MySQL 5.5                         | MariaDB 10.0            |
| Ubuntu                              | 14.04 LTS | MySQL 5.5, MySQL 5.6, MariaDB 5.5 | MySQL 5.6               |
|                                     | 12.04 LTS | MySQL 5.5                         | MariaDB 10.0            |
| Red Hat Enterprise Linux (RHEL)     | 7.1       | MariaDB 5.5                       | MariaDB 10.0            |
|                                     | 6.7       | MySQL 5.1                         | MariaDB 10.0            |
| SUSE Linux Enterprise Server (SLES) | 12        | MariaDB 10.0                      | MariaDB 10.0            |
| Windows Server                      | 2008/2012 | Je nach XAMPP-Version             | MariaDB 10.0            |

!!! attention "Es ist absolut essentiell, dass die [Daten gesichert](../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md) werden, bevor Änderungen am System vorgenommen werden. Da die Upgrade-Prozedur je nach Betriebssystem unterschiedlich lange andauern kann, sollten die Benutzer von _i-doit_ vorab informiert werden."

Debian GNU/Linux 8
------------------

Version 8 von Debian GNU/Linux enthält in den Standardpaketen MySQL 5.5 und MariaDB 10.0. Sollte MySQL installiert sein, genügt es, das Paket für MariaDB zu installieren. Dadurch wird MySQL durch MariaDB ersetzt:

    sudo apt-get update
    sudo apt-get install mariadb-server php5-mysqlnd

Debian GNU/Linux 7.8
--------------------

Version 7.8 von Debian GNU/Linux enthält in den Standardpaketen MySQL 5.5 und kein MariaDB. Um MariaDB einzusetzen, kann das [offizielle Repository von MariaDB eingebunden](https://downloads.mariadb.org/mariadb/repositories/#mirror=23Media&distro=Debian&distro_release=wheezy--wheezy&version=10.0) werden. Vorsicht: Dritt-Repositories können das System beeinträchtigen. Durch die Installation von MariaDB wird MySQL ersetzt:

    sudo apt-get update
    sudo apt-get install python-software-properties
    sudo apt-key adv --recv-keys --keyserver keyserver.ubuntu.com 0xcbcb082a1bb943db
    sudo add-apt-repository 'deb [arch=amd64,i386] [http://mirror.23media.de/mariadb/repo/10.0/debian](http://mirror.23media.de/mariadb/repo/10.0/debian) wheezy main'
    sudo apt-get update
    sudo apt-get install mariadb-server php5-mysqlnd

Ubuntu 14.04 LTS
----------------

Version 14.04 LTS von Ubuntu enthält in den Standardpaketen MySQL 5.5, 5.6 und MariaDB 5.5. Es wird daher empfohlen, MySQL 5.6 einzusetzen. Sollten MySQL 5.5 oder MariaDB 5.5 bisher installiert sein, werden diese durch MySQL 5.6 ersetzt:

    sudo apt-get update
    sudo apt-get install mysql-server-5.6 php5-mysqlnd mysql-client-core-5.6 mysql-client-5.6

Ubuntu 12.04 LTS
----------------

Version 12.04 LTS von Ubuntu enthält in den Standardpaketen MySQL 5.5 und kein MariaDB. Da diese Betriebssystem-Version sehr alte Pakete für MySQL, PHP und Apache Webserver enthält, raten wir vom Einsatz generell ab und empfehlen stattdessen ein Upgrade auf Version 14.04 LTS. Wenn dies nicht möglich sein sollte, kann auf MariaDB 10.0 gewechselt werden, indem das [offizielle Repository von MariaDB eingebunden](https://downloads.mariadb.org/mariadb/repositories/#mirror=23Media&distro=Ubuntu&distro_release=precise--ubuntu_precise&version=10.0) wird. Vorsicht: Dritt-Repositories können das System beeinträchtigen. Durch die Installation von MariaDB wird MySQL ersetzt:

    sudo apt-get update
    sudo apt-get install python-software-properties
    sudo apt-key adv --recv-keys --keyserver hkp://keyserver.ubuntu.com:80 0xcbcb082a1bb943db
    sudo add-apt-repository 'deb [arch=amd64,i386] [http://mirror.23media.de/mariadb/repo/10.0/ubuntu](http://mirror.23media.de/mariadb/repo/10.0/ubuntu) precise main'
    sudo apt-get update
    sudo apt-get install mariadb-server php5-mysqlnd

Red Hat Enterprise Linux 7.1
----------------------------

Version 7.1 von Red Hat Enterprise Linux (RHEL) enthält in den Standardpaketen MariaDB 5.5 und kein MySQL. Um auf MariaDB 10.0 zu wechseln, sind [laut einem Blog-Eintrag von MariaDB](https://mariadb.com/blog/installing-mariadb-10-centos-7-rhel-7) wenige Schritte nötig. Dadurch wird MariaDB 5.5 durch 10.0 ersetzt. Vorsicht: Dritt-Repositories können das System beeinträchtigen.

!!! attention "Dieser Upgrade-Pfad bezieht sich auf die 64bit-Variante des Betriebssystems."

Zuerst wird die bisherige Version deinstalliert:

    sudo yum remove mariadb-server mariadb-libs

Danach muss die Datei /etc/yum.repos.d/MariaDB.repo angelegt und editiert werden:

    # MariaDB 10.0 RedHat repository list
    # http://mariadb.org/mariadb/repositories/
    [mariadb]
    name = MariaDB
    baseurl = http://yum.mariadb.org/10.0/rhel7-amd64
    gpgkey=https://yum.mariadb.org/RPM-GPG-KEY-MariaDB
    gpgcheck=1

Zu guter Letzt werden die Pakete installiert, der MariaDB-Server gestartet und die Datenbanken auf den aktuellen Stand gebracht:

    sudo yum install MariaDB-server MariaDB-client
    sudo /etc/init.d/mysql start
    sudo mysql_upgrade -uroot -p

Unter Umständen werden beim anfangs erwähnten Entfernen der Pakete ebenfalls die zugehörige PHP-Extension deinstalliert. Um diese wieder zu installieren benötigen wir folgende Befehle:

    sudo yum install php-mysqlnd.x86_64
    sudo service httpd restart

Red Hat Enterprise Linux 6.7
----------------------------

Version 6.7 von Red Hat Enterprise Linux (RHEL) enthält in den Standardpaketen MySQL 5.1 und kein MariaDB. Da diese Betriebssystem-Version sehr alte Pakete für MySQL, PHP und Apache Webserver enthält, raten wir vom Einsatz generell ab und empfehlen stattdessen ein Upgrade auf Version 7.1. Wenn dies nicht möglich sein sollte, kann auf MariaDB 10.0 gewechselt werden, indem das [offizielle Repository von MariaDB eingebunden](https://downloads.mariadb.org/mariadb/repositories/#mirror=23Media&distro=RedHat&distro_release=rhel6-amd64--rhel6&version=10.0) wird, wie [in einem Blog-Beitrag von MariaDB beschrieben](https://mariadb.com/kb/en/mariadb/yum/). Vorsicht: Dritt-Repositories können das System beeinträchtigen.

!!! "attention Dieser Upgrade-Pfad bezieht sich auf die 64bit-Variante des Betriebssystems."

Zuerst wird die bisherige Version deinstalliert:

    sudo yum remove mysql-server mysql-libs

Danach muss die Datei **/etc/yum.repos.d/MariaDB**.repo angelegt und editiert werden:

    # MariaDB 10.0 RedHat repository list
    # [http://mariadb.org/mariadb/repositories/](http://mariadb.org/mariadb/repositories/)
    [mariadb]
    name = MariaDB
    baseurl = http://yum.mariadb.org/10.0/rhel6-amd64
    gpgkey=https://yum.mariadb.org/RPM-GPG-KEY-MariaDB
    gpgcheck=1

Zu guter Letzt wird das Paket installiert:

    sudo yum install MariaDB-server MariaDB-client

SUSE Linux Enterprise Server 12
-------------------------------

Version 12 von SUSE Linux Enterprise Server (SLES) enthält in den Standardpaketen bereits MariaDB 10.0, aber kein MySQL. Es ist daher kein Upgrade nötig.

Windows Server 2008/2012
------------------------

Sollte Windows Server 2008/2012 zum Einsatz kommen, empfiehlt sich der Einsatz von XAMPP. Diese von den [Apache Friends](https://www.apachefriends.org/) bereitgestellte Distribution enthält unter anderem den Apache Webserver, PHP und MariaDB. Es sollte darauf geachtet werden, dass stets die aktuelle Version zum Einsatz kommt.

!!!attention "Da XAMPP weder über eine offizielle Dokumentation, noch einen Update-Mechanismus verfügt, ist der Upgrade-Pfad unter Umständen sehr kompliziert und fehleranfällig. Ein **aktuelles [Backup](../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md)** **und ausführliches Testen** nach dem Upgrade sind daher unabdingbar."

Sollte nicht bereits eine XAMPP-Version mit MariaDB 10.0 zum Einsatz kommen, sind folgende Schritte nötig:

1. Kopieren des XAMPP-Verzeichnisses, meist unter C:\xampp\
2. Aktuelle Version von XAMPP auf der [offiziellen Seite](https://www.apachefriends.org/) herunterladen
3. Bisherige XAMPP-Version deinstallieren
4. XAMPP-Verzeichnis löschen
5. Neue XAMPP-Version in dasselbe Verzeichnis installieren
6. Verzeichnisse htdocs und mysql\data aus der Kopie des XAMPP-Verzeichnisses wiederherstellen, vorhandene Dateien dabei nicht überschreiben
7. Konfigurations-Dateien anpassen, sodass sie den [Systemeinstellungen](../installation/manuelle-installation/systemeinstellungen.md) genügen
8. Apache Webserver und MariaDB starten
9. Tests durchführen

Troubleshooting
---------------

!!! attention "Headers and client library minor version mismatch"

    Nach dem Upgrade kann es vorkommen, dass _i-doit_ keine Verbindung zum MySQL-/MariaDB-Server aufbauen kann. Folgende Fehlermeldung erscheint:

        mysqli_connect(): Headers and client library minor version mismatch. Headers:50544 Library:100024 (/var/www/html/i-doit/src/classes/components/isys_component_database_mysqli.class.php:16)

    Der Grund für diesen Fehler ist in noch laufenden Apache-Prozessen zu suchen. Die PHP Bindings für MySQL/MariaDB (mysqli) sollen auf das neue Interface von MySQL/MariaDB zugreifen, aber das alte Interface befindet sich noch im Arbeitsspeicher. Abhilfe schafft ein Neustart von Apache. Beispiel unter Debian/Ubuntu:

    sudo service apache2 restart
