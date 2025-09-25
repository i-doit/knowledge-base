---
title: Umzug von Windows zu Linux
description: Umzug von Windows zu Linux
icon: material/microsoft-windows
status:
lang: de
---

Es mag gute Gründe geben, i-doit unter [Windows](../installation/manuelle-installation/microsoft-windows-server/index.md) zu betreiben. Aus diversen Gründen empfehlen wir allerdings den Betrieb unter Linux. Doch wie bekommt man die gut befüllte [IT-Dokumentation](../glossar.md) im laufenden Betrieb möglichst reibungslos von einem System zum anderen?

## Vorbereitungen und Annahmen

!!! warning "Beide Systeme müssen auf der gleichen i-doit Version sein!"

Bevor es los geht, sollten ein paar Dinge beachtet werden. Ziel soll sein, ohne lange Downtime und vor allem ohne Datenverlust den Umzug zu wagen.

Jeder, der mit den Daten von i-doit arbeitet, sollte rechtzeitig über den Umzug informiert werden. Nichts ist schlimmer als wütende Kollegen, deren Arbeit unterbrochen wurde.

Zudem sollte identifiziert werden, welche Schnittstellen von i-doit genutzt werden. Konkret: Welche Drittsysteme wie [Nagios](../i-doit-add-ons/nagios.md), [((OTRS)) Community Edition](../automatisierung-und-integration/service-desk/otrscommunity-help-desk.md) & [Co.](../daten-konsolidieren/index.md) greifen auf i-doit zu? Während des Umzugs sollte der Datenzugriff abgeschaltet werden. Ähnliches gilt für laufende [Tasks](../automatisierung-und-integration/cli/index.md), [Backups](../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md) und das Monitoring, welches überwacht, dass auf dem Windows-System auf Port 80/443 ein laufender Webserver HTTP-Anfragen beantwortet.

Wir nehmen an, unter Windows wird ein nicht bis minimal angepasstes XAMPP verwendet, beispielsweise eine neuere Version von den [Apache Friends](https://www.apachefriends.org/). Über diese Distribution wird der Apache Webserver, das DBMS MySQL oder MariaDB und die Scriptsprache PHP auf dem System installiert. Im Folgenden sprechen wir nur noch von MySQL, auch wenn MariaDB zum Einsatz kommt. Wenn Änderungen an der Konfiguration vorgenommen worden sind, sollten diese eventuell auch auf dem neuen System bedacht werden.

Zu guter Letzt gehen wir davon aus, dass das neue Heimatsystem von i-doit bereits [vorbereitet](../installation/manuelle-installation/index.md) wurde sowie sämtliche [Systemvoraussetzungen](../installation/systemvoraussetzungen.md) und [\-einstellungen](../installation/manuelle-installation/systemeinstellungen.md) getroffen sind. Auf dem neuen System sollten alle Dienste erreichbar sein, die i-doit erwartet: DNS, SMTP, LDAP/AD. Funktioniert alles? Okay, es kann losgehen.

Eines noch: Wir sollten alle System-Benutzerkonten und deren Passwörter parat haben, die auf dem alten und neuen System verwendet werden. Dazu zählen MySQL-Systembenutzer (root) und der i-doit-Benutzer für MySQL (standardmäßig idoit).

## Daten aus Windows exportieren

Zuallererst kümmern wir uns darum, die Daten aus dem alten System zu sichern, um sie anschließend auf das neue System zu übertragen:

1. Der Apache Webserver sollte abgeschaltet werden, damit keine Requests von außen eintreffen. Das Datenbank-Backend MySQL lassen wir weiterlaufen, ansonsten kommen wir an die Daten nicht heran.
2. Das Verzeichnis, in dem i-doit installiert ist (oftmals unter C:\xampp\htdocs\ zu finden), komprimieren wir als ZIP-Datei i-doit.zip.
3. Die Datenbanken von i-doit (bei Standardinstallationen mit einem Mandanten sind das idoit_system und idoit_data) exportieren wir mit der Software mysqldump.exe. Dazu öffnen wir die Eingabeaufforderung und wechseln in das Verzeichnis, wo die Software zu finden ist (beispielsweise unter C:\xampp\mysql\bin\). Anschließend führen wir folgendes Kommando aus:

        mysqldump.exe -uidoit -p --databases idoit_system idoit_data > i-doit.sql

    Nach der Passwort-Eingabe werden alle Daten in die Datei i-doit.sql geschrieben.

4. Nun stoppen wir den MySQL-Prozess und hoffen, dass wir weder MySQL noch den Apache Webserver jemals wieder unter Windows benötigen werden.

## Daten nach GNU/Linux umziehen

Nachdem wir sowohl die ZIP-Datei mit dem i-doit-Verzeichnis als auch die SQL-Datei mit den Datenbankinhalten auf den neuen Server kopiert haben (gute Dienste leistet hier [WinSCP](http://winscp.net/eng/docs/lang:de)), verbinden wir uns via SSH (beispielsweise via [Putty](http://www.putty.org/)) und agieren fortan auf der Kommandozeile. Der Apache Webserver, MySQL und PHP sind fertig konfiguriert und alle benötigten Pakete sind ordnungsgemäß [installiert](../installation/index.md). Fehlt nur noch i-doit:

### Datenbank

1. Wir importieren die Datenbank. Hierzu rufen wir den MySQL-Client auf:

        mysql -uroot -p < i-doit.sql

###### Wenn beim einspielen der Datenbank diese Fehlermeldung erscheint "Can't create table \idoit\_data\.\table\_name\ (errno: 140 "Wrong create options")". Ist die Lösung dazu [HIER](../administration/troubleshooting/cant-create-table.md) zu finden

2. Anschließend verbinden wir uns mit MySQL, um den für i-doit benötigten User einzurichten:

        mysql -uroot -p

    Folgende SQL-Befehle richten den Benutzer idoit ein, der Zugriff auf die beiden Datenbanken bekommt:

        grant all privileges on idoit_system.* to idoit@localhost identified by 'mypasswd';
        grant all privileges on idoit_data.* to idoit@localhost identified by 'mypasswd';

    Anschließend sollten wir uns zum Testen mit ebendiesen Credentials anmelden und schauen, ob sich die Datenbanken korrekt auslesen lassen:

        mysql -uidoit -p
        use idoit_system;

3. Wenn wir schon einmal dabei sind, sollten wir die Tabelle isys_mandator auslesen, um die Credentials zu überprüfen:

        select * from isys_mandator;

4. Es kann vorkommen, dass absolute Pfade in der Datenbank hinterlegt sind. Betroffen davon sind unter anderem die Datensätze system.dir.file-upload und system.dir.image-upload in der Tabelle isys_settings:

        select * from isys_settings

    Relative Pfade wie upload/files/ und upload/images/ sind legitim.

5. Den MySQL-Client beenden wir mit STRG+D oder dem Befehl exit;.

### Dateien

1. Die ZIP-Datei entpacken wir an gewünschter Stelle. Bei Debian GNU/Linux wäre dies unterhalb von /var/www/html/:

        sudo unzip i-doit.zip

2. Anschließend setzen wir die Rechte korrekt und räumen auf:

        sudo chown www-data:www-data -R .
        sudo find . -type d -name \* -exec chmod 775 {} \;
        sudo find . -type f -exec chmod 664 {} \;
        sudo chmod 774 controller tenants import updatecheck *.sh
        sudo rm -r temp/*

    Falls nötig, löschen wir Dateien, die eventuell noch aus der XAMP-Installation stammen.

Jetzt wird es Zeit für einen ersten großen Test: Lässt sich über den Browser und die neue Heimat von i-doit aufrufen? Wenn nicht, ist irgendetwas bei den vorherigen Schritten schief gelaufen. Eine genaue Fehleranalyse ist hierbei wichtig.

### Cronjobs

Was noch fehlt, ist die Übertragung der Windows-Tasks zu Cronjobs. Zumeist geht es um wiederkehrende Aufgaben, die der [CLI](../automatisierung-und-integration/cli/index.md) erledigen soll. Wer bisher keine Tasks/Cronjobs für i-doit eingerichtet hatte, sollte dies spätestens jetzt tun.

### Nacharbeiten

Nach diesem Umzug sollten verschiedene Tests durchgeführt werden und die Schnittstellen zwischen i-doit und Dritt-Tools wieder aktiviert werden. Auch ganz wichtig ist, dass die [Backups](../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md) laufen. Sollten alle Tests erfolgreich sein (davon ist hoffentlich auszugehen), kann der Wartungsmodus beendet und alle Kollegen benachrichtigt werden, dass die IT-Dokumentation wieder verfügbar ist.

Wie lange dauert solch ein Umzug? Wenn wir die Vor- und Nachbereitungen außen vor lassen, dauert ein Umzug nicht länger als zwei Stunden. Es lohnt sich also. Viel Erfolg!
