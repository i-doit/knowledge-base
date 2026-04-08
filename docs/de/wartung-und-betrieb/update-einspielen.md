---
title: "Update i-doit"
description: "Halte _i-doit_ immer auf dem neuesten Stand."
icon:
status:
lang: de
---
# Update i-doit

Halte _i-doit_ immer auf dem neuesten Stand. Minor-Releases (ca. alle vier Wochen) enthalten Bugfixes, Major-Releases (ca. alle sechs Monate) bringen zusätzlich neue Funktionen.

Du hast zwei Wege für das Update:

*   [Update über die Web-Oberfläche](#update-uber-die-web-oberflache) -- setzt Internetzugang (ggf. über HTTP-Proxy) voraus
*   [Update über die Konsole vorbereiten](#update-uber-die-konsole-vorbereiten) -- Paket manuell hochladen, dann über die Web-Oberfläche fortfahren

=== "Release überspringen ab Version 20"
    !!! attention "Release überspringen ab Version 20"
        Wenn du direkt auf eine neuere Version, z.B. 26, springen möchtest, kannst du das neueste Update-Paket aus dem [Kundenportal](../administration/kundenportal.md) herunterladen und im i-doit Ordner entpacken. Die notwendigen Schritte findest du unter [updates über die Konsole vorbereiten](#update-uber-die-konsole-vorbereiten).
        Ab Version **25** mit [Hotfix](../administration/hotfixes/hotfix-archiv/index.md), wird auch die Version 27 beim Update-Check für den Download angeboten.

=== "Releases überspringen vor Version 20"
    !!! attention "Releases überspringen vor Version 20"
        Wenn aktuell die Version 1.13.1 installiert und schon die Version 1.13.3 verfügbar ist, wird trotzdem nur die nächsthöhere Version - also 1.13.2 - angezeigt. Allerdings können Minor-Releases grundsätzlich übersprungen werden. Dennoch werden über diesen Weg trotzdem alle Minor-Releases einzeln installiert, bis die aktuellste Version erreicht ist. Wenn du direkt auf die Version 1.13.3 springen möchtest, kannst du das neueste Paket im [Kundenportal](../administration/kundenportal.md) herunterladen und auf dem _i-doit_\-Host entpacken. Die notwendigen Schritte dafür kannst du [hier](#update-uber-die-konsole-vorbereiten) finden.

!!! warning "Backup"
    Vor dem Update sollte unbedingt ein [Backup](daten-sichern-und-wiederherstellen/index.md) angefertigt werden.

!!! attention "Fehlende Schreibrechte"
    Wenn beim Herunterladen und Extrahieren eine Fehlermeldung erscheint, ist es oft der Fall, dass der Apache-Webserver keine Schreibrechte für den Pfad hat, in dem i-doit installiert ist. Mehr dazu [hier](#update-uber-die-konsole-vorbereiten)

## Update über die Web-Oberfläche

Öffne das Update über einen der folgenden Wege:

*   **Verwaltung → [Mandanten-Name] Verwaltung → i-doit Update**
*   Quicklaunch-Widget auf dem Dashboard
*   Direkt-URL: `http://i-doit-host/i-doit/?load=update`

[![Update via Dashboard](../assets/images/de/wartung-und-betrieb/update/1-update.png)](../assets/images/de/wartung-und-betrieb/update/1-update.png)

i-doit prüft den aktuellen Systemzustand. Falls etwas nicht stimmt, gleiche die [Systemvoraussetzungen](../installation/systemvoraussetzungen.md) und [Systemeinstellungen](../installation/manuelle-installation/systemeinstellungen.md) ab. Nach Anpassung sollte alles gruen bzw. "OK" sein.

### Schritt 1: i-doit update und Kompatibilität check

[![i-doit update](../assets/images/de/wartung-und-betrieb/update/2-update.png)](../assets/images/en/maintenance-and-operation/update/2-update.png)

### Schritt 2: Available updates

Hier siehst du alle verfügbaren Update-Pakete.

[![Update-Available-Check](../assets/images/de/wartung-und-betrieb/update/3-update.png)](../assets/images/de/wartung-und-betrieb/update/3-update.png)

*   **Check for a new version** -- prüft, welche hoechste Version verfügbar ist.
*   **Download** -- lädt das Update-Paket herunter und entpackt es.
*   Hast du eine URL, fuege sie ein und klicke auf **Download and extract**.

[![Update-Available-Download](../assets/images/de/wartung-und-betrieb/update/4-update.png)](../assets/images/de/wartung-und-betrieb/update/4-update.png)

Wähle die neue Version aus und klicke auf **Next**. Unter **see changelog** findest du eine Auflistung der Änderungen.

[![Update-Available-Donwload](../assets/images/de/wartung-und-betrieb/update/5-update.png)](../assets/images/de/wartung-und-betrieb/update/5-update.png)

### Schritt 3: Database(s)

Die Systemdatenbank und alle Mandanten sind in der Regel bereits ausgewählt. Lass die Haken gesetzt, sofern du keinen Grund hast, einzelne Mandanten auszuschließen.

[![Update-DB](../assets/images/de/wartung-und-betrieb/update/6-update.png)](../assets/images/de/wartung-und-betrieb/update/6-update.png)

### Schritt 4: File-Update

Spätestens jetzt solltest du ein [Backup](daten-sichern-und-wiederherstellen/index.md) haben. Klicke auf **Yes, I did a backup! - Start the update**, um das Update zu starten.

[![Update-Files](../assets/images/de/wartung-und-betrieb/update/7-update.png)](../assets/images/de/wartung-und-betrieb/update/7-update.png)

### Schritt 5: Overview (Log)

Prüfe das Protokoll: Gruenes "DONE" bedeutet Erfolg, rotes "ERROR" deutet auf ein Problem hin (häufig fehlende Schreibrechte). Bei durchgehend gruenen Einträgen klicke auf **Next**.

[![Update-Overview](../assets/images/de/wartung-und-betrieb/update/8-update.png)](../assets/images/de/wartung-und-betrieb/update/8-update.png)

### Schritt 6: Migration

Je nach Update werden Änderungen an bestehenden Daten vorgenommen. Der Schritt "Migration" führt diese aus und meldet, ob die Änderungen erfolgreich waren.

[![Update-Migration](../assets/images/de/wartung-und-betrieb/update/9-update.png)](../assets/images/de/wartung-und-betrieb/update/9-update.png)

### Schritt 7: Attribute migration

Nach der sogenannten "Property Migration" sollte hier ebenfalls alles grün angezeigt werden.

[![Update-Attributes](../assets/images/de/wartung-und-betrieb/update/10-update.png)](../assets/images/de/wartung-und-betrieb/update/10-update.png)

### Schritt 8: Completion

Das Update ist abgeschlossen. Details findest du in der verlinkten Log-Datei. Klicke auf **Run i-doit v.[VERSION]**, um zurückzukehren. Lösche anschließend den Browser- und i-doit-Cache unter **Verwaltung → [Mandanten-Name] Verwaltung → Systemreparatur und Bereinigung**.

[![Update-Complete](../assets/images/de/wartung-und-betrieb/update/11-update.png)](../assets/images/de/wartung-und-betrieb/update/11-update.png)

## Update über die Konsole vorbereiten

Lade das neueste Update-Paket aus dem [Kundenportal](../administration/kundenportal.md) oder von der Seite [Download Links](../download-links.md) herunter und übertrage es auf den Server (z. B. per [WinSCP](https://winscp.net/eng/docs/lang:de)). Verschiebe das Paket ins i-doit-Hauptverzeichnis:

```shell
mv idoit-38-update.zip /var/www/html/
```

Entpacke das Paket und überschreibe bestehende Dateien:

```shell
cd /var/www/html/
unzip idoit-38-update.zip
```

Passe die Dateirechte an, damit der Webserver Lese- und Schreibzugriff hat:

!!! info ""
    Die hier genutzte Benutzer:Gruppen Kombination **www-data:www-data** bezieht sich auf **Debian** **GNU/Linux oder Ubuntu Linux.
    **Sollte ein anderes Betriebssystem genutzt werden, muss die genutzte Benutzer:Gruppen Kombination angepasst werden.

```shell
cd /var/www/html/
sudo chown www-data:www-data -R .
sudo find . -type d -name \* -exec chmod 775 {} \;
sudo find . -type f -exec chmod 664 {} \;
```

Fahre nun mit dem [Update über die Web-Oberfläche](#update-uber-die-web-oberflache) fort und überspringe die Download-Schritte.

## Update über die Konsole via console.php

!!! attention "Backup"
    Erstelle vor dem Update unbedingt ein [Backup](daten-sichern-und-wiederherstellen/index.md).

Du kannst das Update auch vollständig über die [console.php](../automatisierung-und-integration/cli/index.md) ausführen. Wechsle dazu ins i-doit-Verzeichnis:

```shell
cd /var/www/html/
```

Führe den Update-Befehl aus und beantworte die interaktiven Fragen:

```shell
sudo -u www-data php console.php update
```

Alternativ gibst du alle Parameter direkt mit. Beispiel für ein Update auf Version **38**:

```shell
sudo -u www-data php console.php update -u {benutzername} -p {passwort} -z /var/www/html/idoit-38-update.zip --v 38
```

## Nach dem Update

Führe nach jedem Update folgende Schritte aus:

1. [Cache leeren](../administration/verwaltung/mandanten-name-verwaltung/systemreparatur-und-bereinigung.md)
2. [Suchindex erneuern](../administration/verwaltung/mandanten-name-verwaltung/systemreparatur-und-bereinigung.md)
3. [Reporte aktualisieren](../auswertungen/report-manager.md#aktualisieren-der-reports-nach-einem-update)
