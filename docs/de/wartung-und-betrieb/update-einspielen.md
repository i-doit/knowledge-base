# Update i-doit

_i-doit_ sollte immer in der aktuellsten Version betrieben werden. In Minor-Releases befinden sich immer zahlreiche Bugfixes, in Major-Releases dazu dann noch neue Funktionen und Verbesserungen von bestehenden Funktionen. Minor-Releases erscheinen ungefähr alle vier Wochen, Major-Releases alle sechs Monate. Das Update kann [über die Web-Oberfläche von i-doit durchgeführt werden](#update-uber-die-web-oberflache), setzt jedoch einen Internetzugang (gegebenenfalls über einen HTTP-Proxy) voraus. Alternativ kann das Update [über die Konsole vorbereitet](#update-über-die-konsole-vorbereiten) und anschließend über die Web-Oberfläche fortgeführt werden.

=== "Release überspringen ab version 20"
    !!! attention "Release überspringen ab version 20"
        Wenn du direkt auf eine neuere Version, z.B. 26, springen möchtest, kannst du das neueste Update-Paket aus dem [Kundenportal](../administration/kundenportal.md) herunterladen und im i-doit Ordner entpacken. Die notwendigen Schritte findest du unter [updates über die Konsole vorbereiten](#update-über-die-konsole-vorbereiten).
        Ab Version **25** mit [Hotfix](../administration/hotfixes/hotfix-archiv/index.md), wird auch die Version 27 beim update check für den download angeboten.

=== "Releases überspringen vor version 20"
    !!! attention "Releases überspringen vor version 20"
        Wenn aktuell die Version 1.13.1 installiert und schon die Version 1.13.3 verfügbar ist, wird trotzdem nur die nächsthöhere Version - also 1.13.2 - angezeigt. Allerdings können Minor-Releases grundsätzlich übersprungen werden. Dennoch werden über diesen Weg trotzdem alle Minor-Releases einzeln installiert, bis die aktuellste Version erreicht ist. Wenn du direkt auf die Version 1.13.3 springen möchtest, kannst du das neueste Paket im [Kundenportal](../administration/kundenportal.md) herunterladen und auf dem _i-doit_\-Host entpacken. Die notwendigen Schritte dafür kannst du [hier](#update-über-die-konsole-vorbereiten) finden.

!!! warning "Backup"
    Vor dem Update sollte unbedingt ein [Backup](daten-sichern-und-wiederherstellen/index.md) angefertigt werden.

!!! attention "Fehlende Schreibrechte"
    Wenn beim Herunterladen und Extrahieren eine Fehlermeldung erscheint, ist es oft der Fall, dass der Apache-Webserver keine Schreibrechte für den Pfad hat, in dem i-doit installiert ist. Mehr dazu [hier](#update-über-die-konsole-vorbereiten)

## Update über die Web-Oberfläche

Das Update erreichst du entweder unter **Verwaltung → [Mandanten-Name] Verwaltung → i-doit Update**, über das Quicklaunch-Widget auf dem Dashboard oder über die URL <http://i-doit-host/i-doit/?load=update>

[![Update via Dashboard](../assets/images/de/wartung-und-betrieb/update/1-update.png)](../assets/images/de/wartung-und-betrieb/update/1-update.png)

Nach dem Aufruf öffnet sich eine eigene Oberfläche, in der geprüft wird, wie der aktuelle Zustand des Systems ist. Bei Problemen schau am besten in unsere [Systemvoraussetzungen](../installation/systemvoraussetzungen.md) bzw. in unsere [Systemeinstellungen](../installation/manuelle-installation/systemeinstellungen.md). Nach der Anpassung der Umgebung sollte alles grün abgehakt bzw. auf "OK" stehen.

### Schritt 1: i-doit update und Kompatibilität check

[![i-doit update](../assets/images/de/wartung-und-betrieb/update/2-update.png)](../assets/images/en/maintenance-and-operation/update/2-update.png)

### Schritt 2: Available updates

In diesem Schritt werden alle verfügbaren Update-Pakete angezeigt. In unserem Beispiel ist i-doit Version 25 installiert und kann daher nur auf die gleiche Version aktualisiert werden.

[![Update-Available-Check](../assets/images/de/wartung-und-betrieb/update/3-update.png)](../assets/images/de/wartung-und-betrieb/update/3-update.png)

Nach einem Klick auf **Check for a new version** wird nach der höchsten Version geprüft, die installiert werden kann.<br>
Nach einem Klick auf **Download** wird das Update-Paket heruntergeladen und entpackt.<br>
Wenn du eine URL für das Update-Paket hast, kannst du den Link einfügen und auf **Download and extract** klicken.

[![Update-Available-Download](../assets/images/de/wartung-und-betrieb/update/4-update.png)](../assets/images/de/wartung-und-betrieb/update/4-update.png)

Nun steht die neue Version für das Update bereit. Es kann ausgewählt und mit einem Klick auf **Next** gestartet werden. Wer sich für die Änderungen interessiert, die das Paket mit sich bringt, findet dazu unter **see changelog** eine Auflistung.

[![Update-Available-Donwload](../assets/images/de/wartung-und-betrieb/update/5-update.png)](../assets/images/de/wartung-und-betrieb/update/5-update.png)

### Schritt 3: Database(s)

In der Regel sind die Haken bereits, wie im Bild erkennbar, gesetzt, sodass die Systemdatenbank und die dazugehörigen Mandanten schon für das Update ausgewählt sind. Sollte es keinen Grund geben, einzelne Mandanten nicht zu aktualisieren, sollten die Haken gesetzt bleiben.

[![Update-DB](../assets/images/de/wartung-und-betrieb/update/6-update.png)](../assets/images/de/wartung-und-betrieb/update/6-update.png)

### Schritt 4: File-Update

Allerspätestens jetzt solltest du ein [Backup](daten-sichern-und-wiederherstellen/index.md) anfertigen. Wenn du ein Backup hast, kannst du über den Button **Yes, I did a backup! - Start the update** das Update einspielen.

[![Update-Files](../assets/images/de/wartung-und-betrieb/update/7-update.png)](../assets/images/de/wartung-und-betrieb/update/7-update.png)

### Schritt 5: Overview (Log)

Jede Änderung kann Auswirkungen auf Dateien und Datenbanken haben. Wenn etwas schief geht (typischerweise wegen fehlender Schreibrechte), erscheint eine rote "ERROR" Meldung. Wenn für jede Änderung ein grünes "DONE" angezeigt wird, kannst du mit dem nächsten Schritt fortfahren, indem du auf **Next** klickst.

[![Update-Overview](../assets/images/de/wartung-und-betrieb/update/8-update.png)](../assets/images/de/wartung-und-betrieb/update/8-update.png)

### Schritt 6: Migration

Je nach Update werden Änderungen an bestehenden Daten vorgenommen. Der Schritt "Migration" führt diese aus und meldet, ob die Änderungen erfolgreich waren.

[![Update-Migration](../assets/images/de/wartung-und-betrieb/update/9-update.png)](../assets/images/de/wartung-und-betrieb/update/9-update.png)

### Schritt 7: Attribute migration

Nach der sogenannten "Property Migration" sollte hier ebenfalls alles grün angezeigt werden.

[![Update-Attributes](../assets/images/de/wartung-und-betrieb/update/10-update.png)](../assets/images/de/wartung-und-betrieb/update/10-update.png)

### Schritt 8: Completion

Nun ist das Update abgeschlossen. Wer detaillierte Informationen zum Update nachlesen möchte, kann dies in der verlinkten Log-Datei tun. Über **Run i-doit v.[VERSION]** kann zu _i-doit_ zurückgekehrt werden. Es ist sehr zu empfehlen, den Browser und den _i-doit_-Cache unter **Verwaltung → [Mandanten-Name] Verwaltung → Systemreparatur und Bereinigung** zu löschen.

[![Update-Complete](../assets/images/de/wartung-und-betrieb/update/11-update.png)](../assets/images/de/wartung-und-betrieb/update/11-update.png)

## Update über die Konsole vorbereiten

Das Update kann über die Konsole vorbereitet werden. Für die Vorbereitung muss aus dem [Kundenportal](../administration/kundenportal.md) das neuste Update-Paket heruntergeladen werden.

Das Update-Paket kann (beispielsweise per [WinSCP](https://winscp.net/eng/docs/lang:de)) auf dem Server abgelegt werden. Verschiebe danach das Paket in das Hauptverzeichnis von _i-doit_, wenn du es nicht schon direkt dort abgelegt hast.  Das geht mit diesem Befehl:

```shell
mv idoit-26-update.zip /var/www/html/i-doit/
```

Dann muss das Paket entpackt und alle bestehenden Dateien überschrieben werden.

```shell
cd /var/www/html/i-doit
unzip idoit-26-update.zip
```

Jetzt werden die Dateirechte angepasst, sodass der Webserver lesend wie schreibend Zugriff auf _i-doit_ hat.

!!! info ""
    Die hier genutzte Benutzer:Gruppen Kombination **www-data:www-data** bezieht sich auf **Debian** **GNU/Linux oder Ubuntu Linux.
    **Sollten ein anderes Betriebssystem genutzt werden, muss die genutzte Benutzer:Gruppen Kombination angepasst werden.

```shell
cd /var/www/html/i-doit/
sudo chown www-data:www-data -R .
sudo find . -type d -name \* -exec chmod 775 {} \;
sudo find . -type f -exec chmod 664 {} \;
```

Nun kannst du in unserer Anleitung für das [Update über die Web-Oberfläche](#update-uber-die-web-oberflache) weiterschauen und dabei die Schritte für den Download des neuesten Pakets überspringen.

## Update über die Konsole via console.php

!!! attention "Backup"
    Vor dem Update sollte unbedingt ein [Backup](daten-sichern-und-wiederherstellen/index.md) angefertigt werden.

Möchte man das Update über die Konsole ausführen wird die console.php verwendet.
Dazu verwenden wir den den Update Befehl der [console.php](../automatisierung-und-integration/cli/index.md).

Zuerst wechseln wir in das i-doit root Verzeichnis:

```shell
cd /var/www/html/
```

Dann führen wir den Update Befehl aus und müssen noch Interaktiv einige Fragen beantworten davor das Update durchgeführt werden kann:

```shell
sudo -u www-data php console.php update
```

Wir können dem Befehl auch direkt alle notwendigen Parameter mitgeben. Für ein Update von i-doit Version **35** auf Version **36** sieht der Befehl wie folgt aus:

```shell
sudo -u www-data php console.php update -u {benutzername} -p {passwort} -z /var/www/html/idoit-36-update.zip --v 36
```

## Nach dem Update

Nach dem Update den [Cache](../administration/verwaltung/mandanten-name-verwaltung/systemreparatur-und-bereinigung.md) leeren und den [Suche-index](../administration/verwaltung/mandanten-name-verwaltung/systemreparatur-und-bereinigung.md) erneuern.

Außerdem sollten die Reporte aktualisiert werden. Mehr dazu ist unter [Report Manager](../auswertungen/report-manager.md#aktualisieren-der-reports-nach-einem-update) zu finden.
