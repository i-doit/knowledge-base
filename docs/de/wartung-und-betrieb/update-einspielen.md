# Update einspielen

_i-doit_ sollte immer in der aktuellsten Version betrieben werden. In Minor-Releases befinden sich immer zahlreiche Bugfixes, in Major-Releases dazu dann noch neue Funktionen und Verbesserungen von bestehenden Funktionen. Minor-Releases erscheinen ungefähr alle vier Wochen, Major-Releases alle sechs Monate. Das Update kann [über die Web-Oberfläche von i-doit durchgeführt werden](#update-uber-die-web-oberflache), setzt jedoch einen Internetzugang (gegebenenfalls über einen HTTP-Proxy) voraus. Alternativ kann das Update [über die Konsole vorbereitet](#update-uber-die-konsole-vorbereiten) und anschließend über die Web-Oberfläche fortgeführt werden.

!!! attention "Releases überspringen"

    Wenn aktuell die Version 1.13.1 installiert und schon die Version 1.13.3 verfügbar ist, wird trotzdem nur die nächsthöhere Version – also 1.13.2 – angezeigt. Allerdings können Minor-Releases grundsätzlich übersprungen werden. Dennoch werden über diesen Weg trotzdem alle Minor-Releases einzeln installiert, bis die aktuellste Version erreicht ist. Wenn du direkt auf die Version 1.13.3 springen möchtest, kannst du das neueste Paket im [Kundenportal](../administration/kundenportal.md) herunterladen und auf dem _i-doit_\-Host entpacken. Die notwendigen Schritte dafür kannst du hier im unteren Teil des Artikels finden(#Updateeinspielen-UpdateüberdieKonsolevorbereiten).

!!! info "Version 1.16.1"

    Das Update von Version 1.16 über die Version 1.16.1 zur 1.16.2 kann nicht übersprungen werden.

!!! attention "Backup"

    Vor dem Update sollte unbedingt ein [Backup](daten-sichern-und-wiederherstellen/index.md) angefertigt werden.

Update über die Web-Oberfläche
------------------------------

Das Update erreichst du entweder unter **Verwaltung → Systemtools → i-doit Update**, über das Quicklaunch-Widget auf dem Dashboard oder über die URL http://i-doit-host/i-doit/?load=update

[![update-quicklaunch](../assets/images/de/wartung-und-betrieb/update/1-Update_Quicklaunch.png)](../assets/images/de/wartung-und-betrieb/update/1-Update_Quicklaunch.png)

Nach dem Aufruf öffnet sich eine eigene Oberfläche, in der geprüft wird, wie der aktuelle Zustand des Systems ist. In unserem Screenshot sehen wir, dass unter anderem die PHP-Extension mcrypt nicht gefunden wurde. Sollte solch eine Meldung ausgegeben werden, ist es sehr wichtig, das System dementsprechend anzupassen. Schaue hier am besten in unsere [Systemvoraussetzungen](../installation/systemvoraussetzungen.md) bzw. in unsere [Systemeinstellungen](../installation/manuelle-installation/systemeinstellungen.md). Nach der Anpassung der Umgebung sollte alles grün abgehakt bzw. auf "OK" stehen.

[![Update-Compatibility](../assets/images/de/wartung-und-betrieb/update/2-Update_Compatibility.png)](../assets/images/de/wartung-und-betrieb/update/2-Update_Compatibility.png)

Im nächsten Schritt werden die verfügbaren Update-Pakete angezeigt. In unserem Beispiel ist _i-doit_ in Version 1.6.1 installiert und ein Update ist derzeit lediglich auf die gleiche Version möglich. Über **Check for a new version** kannst du prüfen lassen, ob ein neues Paket verfügbar ist. Hierfür ist jedoch zwingend eine Verbindung zum Internet nötig.

[![Update-Available-Check](../assets/images/de/wartung-und-betrieb/update/3-Update_Available_Chec.png)](../assets/images/de/wartung-und-betrieb/update/3-Update_Available_Chec.png)

Nach einem Klick auf "Check for a new version" wird im nach der nächsthöheren Version geprüft. 

!!! attention "Releases überspringen"
    Wenn aktuell die Version 1.13.1 installiert und schon die Version 1.13.3 verfügbar ist, wird trotzdem nur die nächsthöhere Version – also 1.13.2 – angezeigt. Allerdings können Minor-Releases grundsätzlich übersprungen werden. Dennoch werden über diesen Weg trotzdem alle Minor-Releases einzeln installiert, bis die aktuellste Version erreicht ist. Wenn du direkt auf die Version 1.13.3 springen möchtest, kannst du das neueste Paket im [Kundenportal](../administration/kundenportal.md) herunterladen und auf dem _i-doit_\-Host entpacken. Die notwendigen Schritte dafür kannst du hier im unteren Teil des Artikels finden(#Updateeinspielen-UpdateüberdieKonsolevorbereiten).

Nach einem Klick auf **Download** wird das Update-Paket heruntergeladen und entpackt.

!!!attention "Schreibrechte"

     Sollte es beim Herunterladen und Entpacken zu einer Fehlermeldung kommen, liegt dies in vielen Fällen daran, dass der Apache Webserver keine Schreibrechte auf das Verzeichnis hat, in dem i-doit installiert ist. Weitere Hinweise darauf befinden sich ebenfalls weiter unten.

[![Update-Available-Download](../assets/images/de/wartung-und-betrieb/update/4-Update_Available_Download.png)](../assets/images/de/wartung-und-betrieb/update/4-Update_Available_Download.png)

Nun steht die neue Version für das Update bereit. Es kann ausgewählt und mit einem Klick auf "Next" gestartet werden. Wer sich für die Änderungen interessiert, die das Paket mit sich bringt, findet dazu unter **see changelog** eine Auflistung.

[![Update-Available-Donw](../assets/images/de/wartung-und-betrieb/update/5-Update_Available_DL_Done.png)](../assets/images/de/wartung-und-betrieb/update/5-Update_Available_DL_Done.png)

In der Regel sind die Haken bereits, wie im Bild erkennbar, gesetzt, sodass die Systemdatenbank und die dazugehörigen Mandanten schon für das Update ausgewählt sind. Sollte es keinen Grund geben, einzelne Mandanten nicht zu aktualisieren, sollten die Haken gesetzt bleiben.

[![Update-DB](../assets/images/de/wartung-und-betrieb/update/6-Update_Database.png)](../assets/images/de/wartung-und-betrieb/update/6-Update_Database.png)

Allerspätestens jetzt solltest du ein [Backup](daten-sichern-und-wiederherstellen/index.md) anfertigen. Wenn du ein Backup hast, kannst du über den Button **Yes, I did a backup! - Start the update** das Update einspielen. 

[![Update-Files](../assets/images/de/wartung-und-betrieb/update/7-Update_File_Update.png)](../assets/images/de/wartung-und-betrieb/update/7-Update_File_Update.png)

Jede Änderung kann Auswirkungen auf Dateien und die Datenbanken haben.

!!! info "Sollte hierbei etwas schief gehen (typischerweise durch fehlende Schreibrechte), wird dies mit einem roten  **ERROR** bemängelt."

!!! attention "Sollte hier die Fehlermeldung "... row size too large" auftauchen, dann finden Sie die Lösung unter [Troubleshooting](../administration/troubleshooting/index.md)."

Wenn alles mit einem grünen "DONE" angezeigt wird, kannst du über **Next** den nächsten Schritt aufrufen.

[![Update-Overview](../assets/images/de/wartung-und-betrieb/update/8-Update_Overview.png)](../assets/images/de/wartung-und-betrieb/update/8-Update_Overview.png)

Je nach Update werden Änderungen an bestehenden Daten vorgenommen. Der Schritt "Migration" führt diese aus und meldet, ob die Änderungen erfolgreich waren.

[![Update-Migration](../assets/images/de/wartung-und-betrieb/update/9-Update_migration.png)](../assets/images/de/wartung-und-betrieb/update/9-Update_migration.png)

Nach der sogenannten "Property Migration" sollte hier ebenfalls alles grün angezeigt werden.

[![Update-Attributes](../assets/images/de/wartung-und-betrieb/update/10-Update_Attributes.png)](../assets/images/de/wartung-und-betrieb/update/10-Update_Attributes.png)

Nun ist das Update abgeschlossen. Wer detaillierte Informationen zum Update nachlesen möchte, kann dies in der verlinkten Log-Datei tun. Über **Run i-doit v.<VERSION>** kann zu _i-doit_ zurückgekehrt werden. Es ist sehr zu empfehlen, den Browser und den _i-doit_\-Cache unter **Verwaltung → Systemtools → Cache / Datenbank** zu löschen.

[![Update-Complete](../assets/images/de/wartung-und-betrieb/update/11-Update_Complete.png)](../assets/images/de/wartung-und-betrieb/update/11-Update_Complete.png)

Update über die Konsole vorbereiten
-----------------------------------

Das Update kann über die Konsole vorbereitet werden. Für die Vorbereitung muss aus dem [Kundenportal](../administration/kundenportal.md) das neuste Update-Paket heruntergeladen werden.

!!! attention "Releases überspringen"

    Hier ist zu beachten, dass Minor-Releases übersprungen werden können, Major-Releases aber nicht.

Das Update-Paket kann (beispielsweise per [WinSCP](https://winscp.net/eng/docs/lang:de)) auf dem Server abgelegt werden. Verschiebe danach das Paket in das Hauptverzeichnis von _i-doit_, wenn du es nicht schon direkt dort abgelegt hast.  Das geht mit diesem Befehl:

    mv /ort_des_zips/idoit-1.2.3-update.zip /var/www/html/i-doit

Dann muss das Paket entpackt und alle bestehenden Dateien überschrieben werden

    cd /var/www/html/i-doit
    unzip idoit-1.2.3-update.zip # mit "A" zum Überschreiben aller Dateien bestätigen

Jetzt werden die Dateirechte angepasst, sodass der Webserver lesend wie schreibend Zugriff auf _i-doit_ hat.

Die hier genutzte Benutzer:Gruppen Kombination **www-data:www-data** bezieht sich auf **Debian** **GNU/Linux oder Ubuntu Linux.  
**Sollten ein anderes Betriebssystem genutzt werden, muss die genutzte Benutzer:Gruppen Kombination angepasst werden.

    cd /var/www/html/i-doit/
    sudo chown www-data:www-data -R .
    sudo find . -type d -name \* -exec chmod 775 {} \;
    sudo find . -type f -exec chmod 664 {} \;
    sudo chmod 774 controller *.sh setup/*.sh

Nun kannst du in unserer Anleitung für das [Update über die Web-Oberfläche](#update-uber-die-web-oberflache) weiterschauen und dabei die Schritte für den Download des neuesten Pakets überspringen.

Update über die Konsole via console.php
---------------------------------------

!!! attention "Backup"

    Vor dem Update sollte unbedingt ein [Backup](daten-sichern-und-wiederherstellen/index.md) angefertigt werden.

Möchte man das Update über die Konsole ausführen wird die console.php verwendet.  
Dazu verwenden wir den den [update](../wartung-und-betrieb/update-einspielen.md) Befehl der [console.php](../automatisierung-und-integration/cli/index.md).

Zuerst wechseln wir in das i-doit root Verzeichnis:

    cd /var/www/html/i-doit/

Dann führen wir den Update Befehl aus und müssen noch Interaktiv einige Fragen beantworten davor das Update durchgeführt werden kann:

    sudo -u www-data php console.php update

Wir können dem Befehl auch direkt alle notwendigen Parameter mitgeben.  
Für ein Update von i-doit Version 1.17 oder 1.17.2 auf Version 1.18 sieht der Befehl wie folgt aus:

    sudo -u www-data php console.php update -u BENUTZERNAME -p PASSWORT -z /var/www/html/i-doit/idoit-1.18-update.zip --v 1.18

Die Ausgabe kann dann z.B. so aussehen:

| Message | Result |
| --- | --- |
| i-doit update | OK  |
| Environment Check | OK  |
| PHP Check | OK  |
| Configuration | OK  |
| Ini Setting: max\_input\_vars > 10000: failed | WARN |
| Ini Setting: post\_max\_size > 128M: failed | WARN |
| php-ext: mod\_rewrite: failed | WARN |
| Sql Check | OK  |
| Process update | OK  |
| File: /var/www/html/i-doit/updates/versions/v1.18.1/update\_sys.xml should exist: failed | OK  |
| File: /var/www/html/i-doit/updates/versions/v1.18.1/config\_template.inc.php should exist: failed | OK  |
| Upgrade config | OK  |

| Message | Result |
| --- | --- |
| i-doit update | OK  |
| Process update | OK  |
| Update \idoit\_system\_i-doit\\ with /var/www/html/i-doit/updates/versions/v1.18.1/update\_sys.xml: Update is successful | OK  |
| Update tenant databases | OK  |
| Update \idoit\_data\_i-doit\\ with /var/www/html/i-doit/updates/versions/v1.18.1/update\_data.xml: Update is successful | OK  |
| Remove update files using /var/www/html/i-doit/updates/versions/v1.18.1/update\_files.xml: Removing done | OK  |
| Update \idoit\_system\_i-doit\\ with /var/www/html/i-doit/src/classes/modules/pro/install/update\_sys.xml: Update is successful | OK  |
| Update tenant databases | OK  |
| Update \idoit\_data\_i-doit\\ with /var/www/html/i-doit/src/classes/modules/pro/install/update\_data.xml: Update is successful | OK  |
| Migrate tenant databases | OK  |
| Migrate properties of \idoit\_data\_i-doit\\ with /var/www/html/i-doit/updates/versions/v1.18.1/migration/: Migration is successful | OK  |
| Clear caches | OK  |

Anschließend kann i-doit verwendet werden.  
Nach dem Update sollte der [Cache](../administration/verwaltung/systemtools.md) geleert und der [Suche-index](../administration/verwaltung/systemtools.md) erneuert werden.