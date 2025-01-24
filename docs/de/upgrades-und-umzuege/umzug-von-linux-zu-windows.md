# Umzug von Linux zu Windows

In diesem Artikel wird erklärt, wie man seine i-doit Installation unter Linux zu einem Windows Server migriert.
i-doit wurde auf dem Windows Server mit dem [i-doit Windows Installer](../installation/manuelle-installation/microsoft-windows-server/index.md) erstellt.

## Vorbereitungen und Annahmen

!!! warning "Beide Systeme müssen auf der gleichen i-doit Version sein!"

Bevor es los geht, sollten ein paar Dinge beachtet werden. Ziel soll sein, ohne lange Downtime und vor allem ohne Datenverlust den Umzug zu wagen.

Jeder, der mit den Daten von i-doit arbeitet, sollte rechtzeitig über den Umzug informiert werden. Nichts ist schlimmer als wütende Kollegen, deren Arbeit unterbrochen wurde.

Zudem sollte identifiziert werden, welche Schnittstellen von i-doit genutzt werden. Konkret: Welche Drittsysteme wie [Nagios](../automatisierung-und-integration/network-monitoring/nagios.md), [((OTRS)) Community Edition](../automatisierung-und-integration/service-desk/otrscommunity-help-desk.md) & [Co.](../daten-konsolidieren/index.md) greifen auf i-doit zu? Während des Umzugs sollte der Datenzugriff abgeschaltet werden. Ähnliches gilt für laufende [Tasks](../automatisierung-und-integration/cli/index.md), [Backups](../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md) und das Monitoring, welches überwacht, dass auf dem Windows-System auf Port 80/443 ein laufender Webserver HTTP-Anfragen beantwortet.

Da die Installation von i-doit auf dem Windows Server per [i-doit Windows Installer](../installation/manuelle-installation/microsoft-windows-server/index.md) durchgeführt wurde, sind apache2, PHP und MariaDB bereits ausreichend konfiguriert. Im Folgenden sprechen wir nur noch von MySQL, auch wenn MariaDB zum Einsatz kommt. Wenn Änderungen an der Konfiguration unter Linux vorgenommen worden sind, sollten diese eventuell auch auf dem neuen System ergänzt werden.
Auf dem neuen System sollten alle Dienste erreichbar sein, die i-doit erwartet: DNS, SMTP, LDAP/AD. Funktioniert alles? Okay, es kann losgehen.

Eines noch: Wir sollten alle System-Benutzerkonten und deren Passwörter parat haben, die auf dem alten und neuen System verwendet werden. Dazu zählen MySQL-Systembenutzer (root) und der i-doit-Benutzer für MySQL (standardmäßig idoit).

## Verzeichnis aus Linux exportieren

Um das Dateiverzeichnis von dem Linux Server auf den Windows Server zu exportieren, verwenden wir den **zip** Befehl:

```shell
sudo zip -r i-doit.zip /var/www/html/i-doit/
```

Wenn Ihre i-doit Instanz unter einem anderen Pfad liegt, passen Sie den Befehl entsprechend an.

Jetzt muss nur noch die ZIP Datei heruntergeladen oder auf den Windows Server transferiert werden.

Für das transferieren der ZIP Datei kann scp verwendet werden. Den folgenden Befehl führen wir auf dem Windows Server aus:

```shell
scp -r user@linuxsystem:/var/www/html/i-doit/i-doit.zip C:\
```

## Datenbank aus Linux exportieren

Als nächstes müssen wir die Datenbank exportieren und ebenfalls auf den Windows Server transferieren.
Um die Datenbank erfolgreich zu exportieren müssen folgende Befehle ausgeführt werden:

```bash
mysqldump -uroot -p idoit_system > /tmp/idoit_system.sql
mysqldump -uroot -p idoit_data > /tmp/idoit_data.sql
```

Sind die zwei Datenbanken exportiert, müssen wir anschließend die beiden SQL Dateien ebenfalls auf den Windows Server transferieren:

```shell
scp -r user@linuxsystem:/tmp/idoit_system.sql C:\
scp -r user@linuxsystem:/tmp/idoit_data.sql C:\
```

Damit liegen die SQL Dateien nun auf dem Windows Server unter C:\

## Daten nach Windows umziehen

Entpacken Sie zuerst die von Ihnen erstellte ZIP Datei unter dem folgenden Pfad und überschreiben Sie alle Dateien falls notwendig:

```shell
C:\ProgramData\i-doit\apache-2.4\htdocs
```

Anschließend muss die Datenbank eingespielt werden. Um Fehler zu vermeiden löschen wir zuerst die bereits bestehenden Datenbanken auf unserem Windows Server:

!!! info "Die SQL Befehle können über den MySQL Client (über die Windowssuche zu finden) ausgeführt werden"

```shell
DROP Database idoit_data;
DROP Database idoit_system;
```

Danach erstellen wir die Datenbanken neu:

```shell
CREATE DATABASE idoit_data;
CREATE DATABASE idoit_system;
```

Jetzt können wir die Datenbanken aus der alten Instanz einspielen:

!!! info "Hierzu wechseln wir auf die normale Eingabeaufforderung von Windows"

```shell
mysql -uroot -p idoit_data < C:\idoit_data.sql
mysql -uroot -p idoit_system < C:\idoit_system.sql
```

Zusätzlich berechtigen wir den idoit User für die neuen Datenbanken:

```shell
grant all privileges on idoit_system.* to idoit@localhost identified by 'mypasswd';
grant all privileges on idoit_data.* to idoit@localhost identified by 'mypasswd';
```

Damit ist dann die Instanz erfolgreich von Linux auf Windows migriert.

### Nacharbeiten

Nach diesem Umzug sollten verschiedene Tests durchgeführt werden und die Schnittstellen zwischen i-doit und Dritt-Tools wieder aktiviert werden. Auch ganz wichtig ist, dass die [Backups](../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md) laufen. Sollten alle Tests erfolgreich sein (davon ist hoffentlich auszugehen), kann der Wartungsmodus beendet und alle Kollegen benachrichtigt werden, dass die IT-Dokumentation wieder verfügbar ist.

Wie lange dauert solch ein Umzug? Wenn wir die Vor- und Nachbereitungen außen vor lassen, dauert ein Umzug nicht länger als zwei Stunden. Es lohnt sich also. Viel Erfolg!
