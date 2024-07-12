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

## Daten aus Linux exportieren

## Daten nach Windows umziehen

### Cronjobs

Was noch fehlt, ist die Übertragung der Windows-Tasks zu Cronjobs. Zumeist geht es um wiederkehrende Aufgaben, die der [CLI](../automatisierung-und-integration/cli/index.md) erledigen soll. Wer bisher keine Tasks/Cronjobs für i-doit eingerichtet hatte, sollte dies spätestens jetzt tun.

### Nacharbeiten

Nach diesem Umzug sollten verschiedene Tests durchgeführt werden und die Schnittstellen zwischen i-doit und Dritt-Tools wieder aktiviert werden. Auch ganz wichtig ist, dass die [Backups](../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md) laufen. Sollten alle Tests erfolgreich sein (davon ist hoffentlich auszugehen), kann der Wartungsmodus beendet und alle Kollegen benachrichtigt werden, dass die IT-Dokumentation wieder verfügbar ist.

Wie lange dauert solch ein Umzug? Wenn wir die Vor- und Nachbereitungen außen vor lassen, dauert ein Umzug nicht länger als zwei Stunden. Es lohnt sich also. Viel Erfolg!
