---
title: i-doit 33 update und Flows Installation
description: "Hier beschreiben wir, wie du i-doit auf Version 33 aktualisierst, um das Flows Add-on installieren zu können."
icon:
status:
lang: de
---

Hier beschreiben wir, wie du i-doit auf Version **33** aktualisierst, um das Flows Add-on installieren zu können.

[![Flows](../../assets/images/de/i-doit-add-ons/flows/flows-uebersicht.png)](../../assets/images/de/i-doit-add-ons/flows/flows-uebersicht.png)

## 1. i-doit 33 Update
<!--//TODO add a selection -->
Um das Flows Add-on und alle neuen Funktionen nutzen zu können, musst du i-doit zuvor auf Version 33 aktualisieren.

### Update über den Online-Updater

!!! hint "Version 33 ist sofort über den Online-Updater verfügbar."

Wenn deine Instanz das Internet erreichen kann, nutze das Update über den Updater. Voraussetzung ist eine Anmeldung in i-doit mit Administratorrechten.

#### Schritt 1: Öffnen der Verwaltung in i-doit 32

[![Verwaltung öffnen](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-1.png)](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-1.png)

#### Schritt 2: [Mandanten-Name] Verwaltung aufrufen

[![Mandanten-name Verwaltung öffnen](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-2.png)](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-2.png)

#### Schritt 3: i-doit Update Button anklicken

[![Update Button anklicken](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-3.png)](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-3.png)

* * *

### Offline Update vorbereiten und den Updater aufrufen

Wenn deine Instanz keinen Internetzugang hat, musst du das Update-Paket manuell in den i-doit-Stammordner extrahieren.

#### Schritt 1: i-doit 33 Updater herunterladen

Lade das Update-Paket aus dem [Kundenportal](../../administration/kundenportal.md) herunter.

#### Schritt 2: `idoit-33-update.zip` in den i-doit Ordner verschieben

Das Update-Paket kannst du (beispielsweise per [WinSCP](https://winscp.net/eng/docs/lang:de)) auf dem Server ablegen. Verschiebe danach das Paket in das Hauptverzeichnis von **i-doit**, wenn du es nicht schon direkt dort abgelegt hast:

```shell
sudo mv idoit-33-update.zip /var/www/html/
```

* * *

#### Schritt 3: ZIP Datei entpacken

Wechsle in den i-doit-Ordner:

```shell
cd /var/www/html/
```

Entpacke die ZIP-Datei und lass alle Dateien überschreiben:

```shell
unzip idoit-33-update.zip
```

Jetzt passt du die Dateirechte an, sodass der Webserver lesend wie schreibend Zugriff auf **i-doit** hat.

!!! info "Die hier genutzte Benutzer:Gruppen-Kombination **www-data:www-data** bezieht sich auf **Debian** oder **Ubuntu** Linux. Wenn du ein anderes Betriebssystem nutzt, musst du die Benutzer:Gruppen-Kombination anpassen. Siehe [hier](../../installation/manuelle-installation/setup.md#installationspaket-herunterladen-und-entpacken)."

!!! quote ""
    === "Debian & Ubuntu"
        ```shell
        cd /var/www/html/
        sudo chown www-data:www-data -R .
        sudo find . -type d -name \* -exec chmod 775 {} \;
        sudo find . -type f -exec chmod 664 {} \;
        ```

    === "Red Hat Enterprise Linux (RHEL)"
        ```shell
        cd /var/www/html/
        sudo chown apache:apache -R .
        sudo find . -type d -name \* -exec chmod 775 {} \;
        sudo find . -type f -exec chmod 664 {} \;
        ```

    === "SUSE Linux Enterprise Server (SLES)"
        ```shell
        cd /var/www/html/
        sudo chown wwwrun:www -R .
        sudo find . -type d -name \* -exec chmod 775 {} \;
        sudo find . -type f -exec chmod 664 {} \;
        ```

#### Schritt 4: Öffnen der Verwaltung in i-doit 32

[![Verwaltung öffnen](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-1.png)](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-1.png)

#### Schritt 5: [Mandanten-Name] Verwaltung aufrufen

[![Mandanten-name Verwaltung öffnen](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-2.png)](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-2.png)

#### Schritt 6: i-doit Update Button anklicken

[![Update Button anklicken](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-3.png)](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-3.png)

* * *

## 2. Flows Add-on Installation

<!--//TODO add a selection -->

Mit i-doit 33 wurde das Feature [Subscription & Add-ons](../../administration/add-on-and-subscription-center.md) hinzugefügt, worüber du Add-ons direkt installieren kannst. Das Flows Add-on kannst du aber auch wie gewohnt über das [Admin-Center](../../administration/admin-center.md) installieren.

### (Online) Flows Add-on über Subscription & Add-ons installieren

Um das **Subscription & Add-ons**-Feature nutzen zu können, benötigst du den Lizenztoken. Gib ihn hier ein und speichere ihn.

#### Schritt 1: Subscription & Add-ons öffnen

[![Subscription & Add-ons öffnen](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/flows-install-step-1.png)](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/flows-install-step-1.png)

#### Schritt 2: Lizenztoken speichern

[![Lizenztoken speichern](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/flows-install-step-2.png)](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/flows-install-step-2.png)

#### Schritt 3: Add-ons öffnen und Flows Add-on via Actions installieren

[![Add-ons öffnen und Flows Add-on installieren](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/flows-install-step-3.png)](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/flows-install-step-3.png)

* * *

### (Offline) Flows Add-on über das Admin-Center installieren

Wenn deine i-doit-Instanz nicht auf das Internet bzw. das [Subscription & Add-ons](../../administration/add-on-and-subscription-center.md)-Backend zugreifen kann, lädst du das Add-on aus dem [Kundenportal](../../administration/kundenportal.md) herunter und installierst es über das [Admin-Center](../../administration/admin-center.md).

#### Schritt 1: Flows Add-on aus dem Kundenportal herunterladen

Logge dich zuerst im Kundenportal unter <https://center.i-doit.com> ein und lade dort unter Add-ons das Flows Add-on herunter.

#### Schritt 2: Admin-Center öffnen

[![Admin-Center öffnen](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/install-2.2-1.png)](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/install-2.2-1.png)

#### Schritt 3: Einloggen in das i-doit Admin-Center

[![Admin-Center einloggen](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/install-2.2-2.png)](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/install-2.2-2.png)

#### Schritt 4: Flows Add-on installieren

Klicke auf die Überschrift **Add-ons**, dann auf **Install/update Add-on** und wähle die **Flows-ZIP-Datei** aus:

[![Admin-Center installieren](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/install-2.2-3.png)](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/install-2.2-3.png)

* * *

## 3. Automatisierte Ausführung von flows

Das Flows Add-on wird mit zwei CLI-Befehlen geliefert. Beide Befehle werden benötigt, damit das Flows Add-on funktioniert.
<!-- //TODO clarify if this canlead to problems when a crontab is executed while the cron is running
Das Flows Add-on wird mit zwei CLI-Befehlen geliefert. Beide Befehle werden benötigt, damit das Flows-Add-on vollständig funktioniert. Es gibt zwei Möglichkeiten, die CLI-Befehle einzurichten. Die Befehle können z.B. über einen **Crontab** ausgeführt werden. Wir haben auch ein Service-Installationsskript mit dem Namen **create-daemon.sh** erstellt, das sich im Flows Add-on Ordner unter `i-doit/src/classes/modules/synetics_flows/` befindet.
--->
### Systemdienst-Installationsskript verwenden

Lege zuerst die Ausführungsrechte für die Datei fest. Verwende dazu den folgenden Befehl im i-doit-Ordner:

```shell
sudo chmod +x src/classes/modules/synetics_flows/create-daemon.sh
```

Nun kannst du **create-daemon.sh** ausführen, um einen Dienst für die automatische Ausführung der Flows zu erstellen und zu aktivieren. **Jeder Mandant benötigt einen eigenen Service.**

-   `-i` Mandanten-ID (einsehbar per Konsolenbefehl [tenant-list](../../automatisierung-und-integration/cli/index.md))
-   `-u` **i-doit-Admin-User** im ausgewählten Mandanten
-   `-p` **Passwort des Admin-Users** im ausgewählten Mandanten

```shell
sudo src/classes/modules/synetics_flows/create-daemon.sh -u admin-user -p admin-user-password -i 1
```

* * *
<!-- //TODO clarify if this canlead to problems when a crontab is executed while the cron is running
### Erstellen eines Crontabs

Erstelle eine Crontab für den Apache-Benutzer. Beispiel für Debian:

```shell
sudo crontab -u www-data -e
```

Füge die folgenden Zeilen am Ende der Datei ein, nachdem du die i-doit-Anmeldeinformationen ersetzt hast. Gegebenenfalls musst du auch die Mandanten-ID anpassen.

```shell
* * * * * /usr/bin/php /var/www/html/console.php flows:time-trigger --user admin-user --password admin-user-password --tenantId 1
* * * * * /usr/bin/php /var/www/html/console.php flows:perform ---user admin-user --password admin-user-password --tenantId 1
```
--->

Wenn du Fragen hast oder weitere Unterstützung benötigst, wende dich bitte an uns unter <help@i-doit.com>.
