Dieser Artikel geht auf die Besonderheiten ein, die bei einem Update der open-Variante von Version 1.4.8 zu 1.8 zu berücksichtigen sind.

Vorbereitung
------------

Der Sprung von Version 1.4.8 auf Version 1.8 bringt viele Änderungen mit sich. Es wurde einiges an der Web GUI geändert, aber auch am Datenbankmodell. Die API kann wesentlich mehr und wird als separates Modul kostenlos angeboten.

Download
--------

Das Update-Paket können Sie hier herunterladen:

[![](/s/-28jgoa/8803/xi7l17/5.0.0/_/download/resources/com.atlassian.confluence.plugins.confluence-view-file-macro:view-file-macro-resources/images/placeholder-medium-zip.png)idoit-open-1.8-update.zip](/download/attachments/61014980/idoit-open-1.8-update.zip?version=1&modificationDate=1510054453176&api=v2)

Zu beachten sind hierbei die Versionsstände:

*   Die bisher eingesetzte Installation ist in der Version 1.4.8. Sollte eine vorherige Version eingesetzt sein, muss die Installation auf Version 1.4.8 aktualisiert werden.
*   Das Update erfolgt zunächst auf Version 1.8. Es kann nicht auf neuere Versionen aktualisiert werden, bevor nicht das Update auf Version 1.8 durchgeführt worden ist.

Durchführung
------------

Nach dem Download wird das Update-Paket in das Installationsverzeichnis von i-doit kopiert und entpackt. Auf einem Debian-basierten Betriebssystem könnte dies folgendermaßen geschehen:

[?](#)

`sudo` `-u www-data` `cp` `idoit-``open``-1.8-update.zip` `/var/www/html/i-doit/`

`cd` `/var/www/html/i-doit/`

`sudo` `-u www-data unzip idoit-``open``-1.8-update.zip`

Der Pfad ist dementsprechend anzupassen. Das Kopieren und Entpacken erfolgt mit dem User des Apache Webservers, damit das Update mit dessen Rechten problemlos erfolgt.

Die anschließende Update-Prozedur unterscheidet sich grundlegend nicht von einem gewöhnlichen [Update über die Web GUI](/display/de/Update+einspielen). Da es sich bei der Version 1.8 um ein Major-Update handelt, dürfen vorherige Major-Updates nicht übersprungen werden. Die Updates werden demnach nacheinander eingespielt. Nachdem das erste Update erfolgt ist, wird man aufgefordert, ein weiteres Update einzuspielen. Diese Prozedur wiederholt sich so lange, bis die Version 1.8 erreicht ist. Folgender Update-Pfad ergibt sich daraus:

1.  Update von Version 1.4.8 auf Version 1.5
2.  Update von Version 1.5 auf Version 1.6
3.  Update von Version 1.6 auf Version 1.7
4.  Update von Version 1.7 auf Version 1.8

Sind alle Schritte nacheinander erfolgreich durchgelaufen, ist das Update auf Version 1.8 erledigt. In der Web GUI erscheint nun die Versionsnummer 1.8.

Nachbereitung
-------------

Nach dem Update lohnt es sich, weitere Schritte zu befolgen:

*   [Backup konfigurieren](/display/de/Daten+sichern+und+wiederherstellen)
*   [Cronjobs einrichten](/display/de/CLI)

Troubleshooting
---------------

Bei jedem Schritt wird eine Log-Datei im Verzeichnis `log/` angelegt. Sollte ein Schritt aufgrund eines Fehlers nicht beendet werden, wird dies im Log protokolliert. Von weiteren Update-Schritten sollte man absehen, um Folgefehler zu vermeiden. Hilfestellungen bei Fehlern gibt es im [open-Forum](https://forum.i-doit.org/).

[Weitere Tipps bei Problemen](/display/de/Troubleshooting) finden sich hier in der Knowledge Base.