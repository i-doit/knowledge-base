# Upgrade der i-doit Virtual Eval Appliance auf Debian GNU/Linux 9 "Stretch"

Neben der Wartung von i-doit sollte auch die Pflege des darunter liegenden Betriebssystems nicht außer Acht gelassen werden. Wir beschreiben das Upgrade von [Debian GNU/Linux](../manuelle-installation/debian.md) in Version 8 "Jessie" auf 9 "Stretch". In einigen Schritten ist die [i-doit Eval Virtual Appliance](index.md) auf dem neuesten Stand.

!!! info "Warum ein Upgrade?"

    Warum lohnt sich die Mühe, das Betriebssystem auf den neusten Stand anzuheben? Es gibt sehr gute Gründe:
        1.  Die IT-Dokumentation beinhaltet [sensible Daten, die zu schützen sind](../../wartung-und-betrieb/sicherheit-und-schutz.md). Dies kann nur gewährleistet werden, wenn alle Systemkomponenten auf einem aktuellen Stand sind.
    1.  Der Wechsel von PHP 5.6 auf 7.0 bringt einen messbaren Performance-Schub.

Voraussetzungen
---------------

Einige Dinge müssen vor dem Upgrade bedacht werden:

*   Das Upgrade beschreibt lediglich die i-doit Virtual Eval Appliance in Version 1.2.x.
*   Es wird davon ausgegangen, dass keine Änderungen (außer Updates) am System vorgenommen wurden. Nachträgliche Änderungen liegen nicht in unserer Verantwortung.
*   Es steht genügend freier Speicher zur Verfügung. Das Update benötigt zwischenzeitlich ca. 1 GByte an Speicherplatz.

Tipps
-----

Weiterhin sollte vor einem Upgrade Folgendes bedacht werden:

*   [Backups](../../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md) sollten vorhanden sein.
*   Benutzer von i-doit sollten vor der Downtime informiert werden.
*   Automatismen, Cronjobs und externe Zugriffe sollten für die Dauer des Upgrades gestoppt werden.

Viele weitere [Hinweise zum Upgrade des Betriebssystems](https://www.debian.org/releases/stretch/amd64/release-notes/index.en.html) liefert die Debian Community.

Upgrade vorbereiten
-------------------

Wir verbinden uns via SSH und rufen im Menü den Punkt **0 Launch Shell** auf.

Anschließend führen wir Updates durch:

```shell
    sudo apt update
    sudo apt upgrade
    sudo apt-get autoremove
    sudo apt clean
```

Anschließend muss das System neugestartet werden. Aufgrund eines Fehlers muss der Linux-Kernel auf dem neusten Stand sein:

```shell
    sudo systemctl reboot
```

Nach dem Neustart verbinden wir uns abermals via SSH und rufen die Shell im Menü auf. Nun stellen wir sicher, dass Version **8.8** im Einsatz ist:

```shell
    cat /etc/debian_release
```

Sollte dies nicht der Fall sein, wird das Upgrade fehlschlagen.

Vorsorglich sollte der Webserver gestoppt werden, damit i-doit nicht zwischenzeitlich aufgerufen wird:

```shell
    sudo systemctl stop apache2.service
```

Somit ist alles für das Upgrade vorbereitet.

Upgrade durchführen
-------------------

Die Quellen für die Distributionspakete werden nun angepasst:

```shell
    sudo nano /etc/apt/sources.list
```

Folgende Zeile wird am Ende ergänzt:

```shell
    deb http://mirrors.kernel.org/debian stretch main contrib
```

Alle vorherigen Zeilen werden auskommentiert. Hierbei wird jeder Zeile ein **#** vorangestellt.

Anschließend werden die Paketquellen aktualisiert und ein Update der Pakete durchgeführt:

```shell
    sudo apt update
    sudo apt upgrade
```

Beim letzten Befehl werden mehrere Benutzer-Interaktionen nötig:

1.  Die Frage **Restart services during package upgrades without asking?** ist mit **Yes** zu beantworten.
2.  Das Überschreiben von **Configuration file '/etc/issue'** ist mit **N** zu beantworten.
3.  Das Überschreiben von **Configuration file '/etc/issue.net'** ist ebenfalls mit **N** zu beantworten.

Nun folgt das eigentliche Upgrade der Pakete auf neue Versionen:

```shell
    sudo apt dist-upgrade
```

Damit der neue Linux-Kernel aktiv wird, starten wir das System neu:

```shell
    sudo systemctl reboot
```

Das Upgrade auf Version 9 ist somit abgeschlossen.

Nachbereitung
-------------

Nach dem Neustart verbinden wir uns abermals via SSH mit dem System und rufen im Menü die Shell auf.

Erst einmal räumen wir bei den Distributionspaketen auf:

```shell
    sudo apt autoremove
    sudo apt clean
```

Nun müssen wir den Apache Webserver und PHP anpassen, weil statt PHP 5.6 nun 7.0 mitgeliefert wird:

```shell
    sudo cp /etc/php5/mods-available/i-doit.ini /etc/php/7.0/mods-available/
    sudo phpenmod -v 7.0 i-doit
    sudo apt-get purge libapache2-mod-php5 php5
    sudo apt install libapache2-mod-php php php-bcmath php-cli php-common php-curl php-gd php-imagick php-json php-ldap php-mcrypt php-memcached php-mysql php-pgsql php-xml php-zip
    sudo a2enmod php7.0
    sudo systemctl restart apache2.service
```

Änderungen an den Konfigurationsdateien sind nicht nötig.

Auch das DBMS MariaDB muss angepasst werden:

```shell
    sudo mv /etc/mysql/conf.d/i-doit.cnf /etc/mysql/mariadb.conf.d/99-i-doit.cnf
    sudo systemctl restart mysql.service
```

Damit der Welcome Screen und das Menü richtig funktionieren, müssen einige Zeilen angepasst werden:

```shell
    sudo nano /usr/local/bin/appliance_getip.sh
```

Der Inhalt wird hierdurch ersetzt:

```shell
    #!/bin/bash
    /bin/hostname -I | awk -F: '{ print " "$1 }'
```

Weiterhin:

```shell
    sudo nano /usr/local/bin/get-ip-address
```

Inhalt:

```shell
    #!/bin/bash
    echo "/bin/hostname -I"
```

Und zu guter Letzt die Versions-Nummer der Appliance:

```shell
    sudo nano /etc/i-doit/appliance.conf
```

Inhalt:

```shell
    APPLIANCE_VERSION="1.3.0"
```

Damit ist auch die Nachbereitung abgeschlossen. Nun können wieder alle Automatismen gestartet werden. Die Downtime ist beendet und i-doit kann wieder von den Benutzern wie gewohnt aufgerufen werden.
