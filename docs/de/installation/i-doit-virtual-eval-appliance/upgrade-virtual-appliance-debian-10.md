# Upgrade der i-doit Virtual Eval Appliance auf Debian GNU/Linux 10 "Buster"
Neben der Wartung von i-doit sollte auch die Pflege des darunter liegenden Betriebssystems nicht außer Acht gelassen werden. Wir beschreiben das Upgrade von[Debian GNU/Linux](../manuelle-installation/debian.md) in Version 9 "Stretch" auf 10 "Buster". In einigen Schritten ist die[i-doit Eval Virtual Appliance](index.md)auf dem neuesten Stand.

!!! info "Warum ein Upgrade?"

    Warum lohnt sich die Mühe, das Betriebssystem auf den neusten Stand anzuheben? Es gibt sehr gute Gründe:

    1.  Die IT-Dokumentation beinhaltet [sensible Daten, die zu schützen sind](../../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md). Dies kann nur gewährleistet werden, wenn alle Systemkomponenten auf einem aktuellen Stand sind.
    2.  Der Wechsel von PHP 7.0 auf 7.3 bringt einen messbaren Performance-Schub.

Voraussetzungen
---------------

Einige Dinge müssen vor dem Upgrade bedacht werden:

*   Das Upgrade beschreibt lediglich die i-doit Virtual Eval Appliance in Version 1.3.x.
*   Es wird davon ausgegangen, dass keine Änderungen (außer Updates) am System vorgenommen wurden. Nachträgliche Änderungen liegen nicht in unserer Verantwortung.
*   Es steht genügend freier Speicher zur Verfügung. Das Update benötigt zwischenzeitlich ca. 1 GByte an Speicherplatz.

!!! info "Zu beachten bei Nutzung von VirtualBox"

    Wählen Sie die entsprechende Virtuelle Maschine aus und öffnen Sie die Konfiguration der Maschine.  
    Unter dem Reiter **System** muss die Checkbox für **Hardware-Uhr in UTC** aktiviert sein. Andernfalls hat der SQL-Server ein Problem mit der Zeiteinstellung.

Tipps
-----

Weiterhin sollte vor einem Upgrade Folgendes bedacht werden:

*   [Backups](../../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md) sollten vorhanden sein.
*   Benutzer von i-doit sollten vor der Downtime informiert werden.
*   Automatismen, Cronjobs und externe Zugriffe sollten für die Dauer des Upgrades gestoppt werden.

Viele weitere [Hinweise zum Upgrade des Betriebssystems](https://www.debian.org/releases/buster/amd64/release-notes/index.en.html) liefert die Debian Community.

Upgrade vorbereiten
-------------------

Wir verbinden uns via SSH und rufen im Menü den Punkt**0 Launch Shell**auf.

Anschließend führen wir Updates durch:

    sudo apt update
    sudo apt upgrade
    sudo apt-get autoremove
    sudo apt clean

Anschließend muss das System neugestartet werden. Aufgrund eines Fehlers muss der Linux-Kernel auf dem neusten Stand sein:

    sudo systemctl reboot

Nach dem Neustart verbinden wir uns abermals via SSH und rufen die Shell im Menü auf. Nun stellen wir sicher, dass Version **9.x** im Einsatz ist:

    cat /etc/debian_release

Sollte dies nicht der Fall sein, wird das Upgrade fehlschlagen.

Vorsorglich sollte der Webserver gestoppt werden, damit i-doit nicht zwischenzeitlich aufgerufen wird:

    sudo systemctl stop apache2.service

Somit ist alles für das Upgrade vorbereitet.

Upgrade durchführen
-------------------

Die Quellen für die Distributionspakete werden nun angepasst:

    sudo nano /etc/apt/sources.list

Folgende Zeile wird am Ende ergänzt:

    deb http://deb.debian.org/debian/ buster main
    deb-src http://deb.debian.org/debian/ buster main
    
    deb http://security.debian.org/debian-security buster/updates main
    deb-src http://security.debian.org/debian-security buster/updates main
    
    deb http://deb.debian.org/debian/ buster-updates main
    deb-src http://deb.debian.org/debian/ buster-updates main
    
    deb http://mirrors.kernel.org/debian buster main contrib

Alle vorherigen Zeilen werden auskommentiert. Hierbei wird jeder Zeile ein **#** vorangestellt.

Anschließend werden die Paketquellen aktualisiert und ein Update der Pakete durchgeführt:

    sudo apt update
    sudo apt upgrade

Beim letzten Befehl werden mehrere Benutzer-Interaktionen nötig:

1.  Die Frage **Restart services during package upgrades without asking?** ist mit **Yes** zu beantworten.
2.  Das Überschreiben von **Configuration file '/etc/issue'** ist mit **N** zu beantworten.
3.  Das Überschreiben von **Configuration file '/etc/issue.net'** ist ebenfalls mit **N** zu beantworten.

Nun folgt das eigentliche Upgrade der Pakete auf neue Versionen:

    sudo apt dist-upgrade

Damit der neue Linux-Kernel aktiv wird, starten wir das System neu:

    sudo systemctl reboot

Das Upgrade auf Version 10 "Buster" ist somit abgeschlossen.

Nachbereitung
-------------

Nach dem Neustart verbinden wir uns abermals via SSH mit dem System und rufen im Menü die Shell auf.

Erst einmal räumen wir bei den Distributionspaketen auf:

    sudo apt autoremove
    sudo apt clean

Nun müssen wir den Apache Webserver und PHP anpassen, weil statt PHP 7.0 nun 7.3 mitgeliefert wird:

    sudo cp /etc/php/7.0/mods-available/i-doit.ini /etc/php/7.3/mods-available
    sudo phpenmod -v 7.3 i-doit
    sudo apt install php7.3-bcmath php7.3-cli php7.3-common php7.3-curl php7.3-gd php7.3-imagick php7.3-json php7.3-ldap php7.3-memcached php7.3-mysql php7.3-pgsql php7.3-xml php7.3-zip
    sudo a2dismod php7.0
    sudo a2enmod php7.3
    sudo systemctl restart apache2.service

Und zu guter Letzt die Versions-Nummer der Appliance:

    sudo nano /etc/i-doit/appliance.conf

Inhalt:

    APPLIANCE_VERSION="1.3.1"

Damit ist auch die Nachbereitung abgeschlossen. Nun können wieder alle Automatismen gestartet werden. Die Downtime ist beendet und i-doit kann wieder von den Benutzern wie gewohnt aufgerufen werden.