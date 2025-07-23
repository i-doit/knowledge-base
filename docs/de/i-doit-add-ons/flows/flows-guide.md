---
title: i-doit 33 update und Flows Installation
description: i-doit 33 update und Flows Installation
icon:
status: new
lang: de
---

Hier beschreiben wir wie i-doit auf Version **33** aktualisiert um das Flows Add-on installieren zu können.

## 1. i-doit 33 Update
<!--//TODO add a selection -->
Um das Flows Add-on und alle neuen Funktionen nutzen zu können, muss zuvor i-doit auf Version 33 aktualisiert werden.

### Update über den online Updater

!!! hint "Version 33 wird sofort über den online Updater verfügbar sein"

Wenn die Instanz das Internet erreichen kann, sollte das Update über den Updater genutzt werden. Ausgangssituation ist eine Anmeldung in i-doit mit Administrator Rechten.

#### Schritt 1: Öffnen der Verwaltung in i-doit 32

[![Verwaltung öffnen](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-1.png)](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-1.png)

#### Schritt 2: [Mandanten-Name] Verwaltung aufrufen

[![Mandanten-name Verwaltung öffnen](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-2.png)](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-2.png)

#### Schritt 3: i-doit Update Button anklicken

[![Update Button anklicken](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-3.png)](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-3.png)

* * *

### Offline Update vorbereiten und den Updater aufrufen

Wenn die Instanz keinen Internetzugang hat, muss das Update-Paket manuell in den i-doit-Stammordner extrahiert werden.

#### Schritt 1: i-doit 33 Updater herunterladen

Update Paket aus dem [Kundenportal](../../administration/kundenportal.md) heruntergeladen.

#### Schritt 2: `idoit-33-update.zip` in den i-doit Ordner verschieben

Das Update-Paket kann (beispielsweise per [WinSCP](https://winscp.net/eng/docs/lang:de)) auf dem Server abgelegt werden. Verschiebe danach das Paket in das Hauptverzeichnis von **i-doit**, wenn du es nicht schon direkt dort abgelegt hast. Das geht mit diesem Befehl:

```shell
sudo mv idoit-33-update.zip /var/www/html/i-doit/
```

* * *

#### Schritt 3: ZIP Datei entpacken

In den i-doit Ordner wechseln:

```shell
cd /var/www/html/i-doit/
```

Die ZIP Datei entpacken und alle Dateien überschreiben lassen:

```shell
unzip idoit-33-update.zip
```

Jetzt werden die Dateirechte angepasst, sodass der Webserver lesend wie schreibend Zugriff auf **i-doit** hat.

!!! info "Die hier genutzte Benutzer:Gruppen Kombination **www-data:www-data** bezieht sich auf **Debian** oder **Ubuntu** Linux. Sollten ein anderes Betriebssystem genutzt werden, muss die genutzte Benutzer:Gruppen Kombination angepasst werden. Siehe [hier](../../installation/manuelle-installation/setup.md#installationspaket-herunterladen-und-entpacken)"

!!! quote ""
    === "Debian & Ubuntu"
        ```shell
        cd /var/www/html/i-doit/
        sudo chown www-data:www-data -R .
        sudo find . -type d -name \* -exec chmod 775 {} \;
        sudo find . -type f -exec chmod 664 {} \;
        ```

    === "Red Hat Enterprise Linux (RHEL)"
        ```shell
        cd /var/www/html/i-doit/
        sudo chown apache:apache -R .
        sudo find . -type d -name \* -exec chmod 775 {} \;
        sudo find . -type f -exec chmod 664 {} \;
        ```

    === "SUSE Linux Enterprise Server (SLES)"
        ```shell
        cd /var/www/html/i-doit/
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

Mit i-doit 33 wurde das Feature [Subscription & Add-ons](../../administration/add-on-and-subscription-center.md) hinzugefügt, worüber auch Add-ons direkt installiert werden können. Das Flows Add-on kann aber auch wie üblich über das [Admin-Center](#22-offline-flows-add-on-über-das-admin-center-installieren) installiert werden.

### (Online) Flows Add-on über Subscription & Add-ons installieren

Um das **Subscription & Add-ons** Feature nutzen zu können, wird der Lizenztoken benötigt, der hier neu eingegeben und gespeichert wird.

#### Schritt 1: Subscription & Add-ons öffnen

[![Subscription & Add-ons öffnen](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/flows-install-step-1.png)](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/flows-install-step-1.png)

#### Schritt 2: Lizenztoken speichern

[![Lizenztoken speichern](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/flows-install-step-2.png)](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/flows-install-step-2.png)

#### Schritt 3: Add-ons öffnen und Flows Add-on via Actions installieren

[![Add-ons öffnen und Flows Add-on installieren](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/flows-install-step-3.png)](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/flows-install-step-3.png)

* * *

### (Offline) Flows Add-on über das Admin-Center installieren

Kann die i-doit Instanz nicht auf das Internet bzw. das [Subskription & Add-ons]() backend zugreifen, muss das Add-on aus dem [Kundenportal](../../administration/kundenportal.md) heruntergeladen werden. Anschließend wird es über das [Admin-Center](../../administration/admin-center.md) installiert.

#### Schritt 1: Flows Add-on aus dem Kundenportal herunterladen

Zuerst im Kundenportal unter <https://center.i-doit.com> einloggen und dort unter Add-ons das Flows Add-on herunterladen

#### Schritt 2: Admin-Center öffnen

[![Admin-Center öffnen](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/install-2.2-1.png)](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/install-2.2-1.png)

#### Schritt 3: Einloggen in das i-doit Admin-Center

[![Admin-Center einloggen](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/install-2.2-2.png)](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/install-2.2-2.png)

#### Schritt 4: Flows Add-on installieren

Klicken Sie auf die Überschrift **Add-ons** und wählen Sie die **Flows ZIP Datei** aus, nachdem Sie auf **Install/update Add-on** geklickt haben:

[![Admin-Center installieren](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/install-2.2-3.png)](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/install-2.2-3.png)

* * *

## 3. Automatisierte Ausführung von flows

Das Flows Add-on wird mit zwei CLI-Befehlen geliefert. Beide Befehle werden benötigt, damit das Flows Add-on funktioniert.
<!-- //TODO clarify if this canlead to problems when a crontab is executed while the cron is running
Das Flows Add-on wird mit zwei CLI-Befehlen geliefert. Beide Befehle werden benötigt, damit das Flows-Add-on vollständig funktioniert. Es gibt zwei Möglichkeiten, die CLI-Befehle einzurichten. Die Befehle können z.B. über einen **Crontab** ausgeführt werden. Wir haben auch ein Service-Installationsskript mit dem Namen **create-daemon.sh** erstellt, das sich im Flows Add-on Ordner unter `i-doit/src/classes/modules/synetics_flows/` befindet.
--->
### Verwenden des Systemdienst Installationsskriptes

Zuerst müssen wir die Ausführungsrechte für die Datei festlegen. Verwenden Sie den Befehl im Ordner i-doit:

```shell
sudo chmod +x src/classes/modules/synetics_flows/create-daemon.sh
```

Nun kann **create-daemon.sh** ausgeführt werden, um einen Dienst für die automatische Ausführung der flows zu erstellen und zu aktivieren. **Jeder Mandant benötigt einen eigenen Service**

-   `-i` benötigt eine Mandanten-ID, kann über Konsolenbefehl eingesehen werden [tenant-list](../../automatisierung-und-integration/cli/index.md)
-   `-u` braucht einen **i-doit admin-user** im ausgewählten Mandant
-   `-p` benötigt ein **i-doit admin-user-passwort** im ausgewählten Mandant

```shell
sudo src/classes/modules/synetics_flows/create-daemon.sh -u admin-user -p admin-user-password -i 1
```

* * *
<!-- //TODO clarify if this canlead to problems when a crontab is executed while the cron is running
### Erstellen eines Crontabs

Erstellen Sie eine Crontab für den Apache-Benutzer. Beispiel für Debian:

```shell
sudo crontab -u www-data -e
```

Fügen Sie die folgenden Zeilen am Ende der Datei ein, nachdem Sie die i-doit Anmeldeinformationen ersetzt haben. Möglicherweise müssen Sie auch die Mandanten-ID ersetzen.

```shell
* * * * * /usr/bin/php /var/www/html/i-doit/console.php flows:time-trigger --user admin-user --password admin-user-password --tenantId 1
* * * * * /usr/bin/php /var/www/html/i-doit/console.php flows:perform ---user admin-user --password admin-user-password --tenantId 1
```
--->

Wenn Sie Fragen haben oder weitere Unterstützung benötigen, wenden Sie sich bitte an uns unter <help@i-doit.com>.
