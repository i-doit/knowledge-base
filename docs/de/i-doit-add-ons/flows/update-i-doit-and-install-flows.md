---
title: i-doit update und Installation Flows
description: i-doit update und Installation Flows
icon:
status: new
lang: de
---

Hier beschreiben wir wie i-doit auf Version **33** aktualisiert um das Flows Add-on installieren zu können.

## 1. Update auf Version 33

Wir gehen davon aus, dass i-doit in Version **32** installiert ist.

### Update über den online Updater

!!! hint "Version 33 wird sofort über den online Updater verfügbar sein"

Wenn die Instanz das Internet erreichen kann, sollte das Update über den Updater genutzt werden.

Ausgangssituation ist eine Anmeldung in i-doit mit Administrator Rechten.
Weitere Schritte um das Update durchzuführen:

=== "**Schritt 1**: Öffnen der Verwaltung in i-doit 32"
    [![Verwaltung öffnen](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/step-1.png)](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/step-1.png)

=== "**Schritt 2**: [Mandanten-Name] Verwaltung aufrufen"
    [![Mandanten-name Verwaltung öffnen](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/step-2.png)](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/step-2.png)

=== "**Schritt 3**: i-doit Update Button anklicken"
    [![Update Button anklicken](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/step-3.png)](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/step-3.png)

### Offline Update vorbereiten und den Updater aufrufen

!!! hint "Version 33 wird sofort über den online Updater verfügbar sein"

Wenn die Instanz das Internet nicht erreichen kann, muss das Update Paket im i-doit Ordner entpackt werden. Anschließend ist das Update im Updater verfügbar.

Zuerst muss das Update Paket aus dem [Kundenportal](../../administration/kundenportal.md) heruntergeladen werden. Anschließend wird die ZIP Datei auf den Server bzw. in den i-doit Ordner kopiert.
In welchem Dateipfad i-doit Installiert ist, kann über den Punkt **Rights & Directories** in der [[Mandanten-Name] Verwaltung](../../administration/verwaltung/mandanten-name-verwaltung/index.md) geprüft werden.

=== "**Schritt 1**: i-doit 33 Updater herunterladen"
    Update Paket aus dem [Kundenportal](../../administration/kundenportal.md) heruntergeladen.

=== "**Schritt 2**: `idoit-33-update.zip` in den i-doit Ordner kopieren oder verschieben"
    Das Update-Paket kann (beispielsweise per [WinSCP](https://winscp.net/eng/docs/lang:de)) auf dem Server abgelegt werden. Verschiebe danach das Paket in das Hauptverzeichnis von **i-doit**, wenn du es nicht schon direkt dort abgelegt hast. Das geht mit diesem Befehl:
    ```shell
    sudo mv idoit-33-update.zip /var/www/html/i-doit/
    ```

=== "**Schritt 3**: ZIP entpacken und alle Dateien überschreiben lassen"

    In den i-doit Ordner wechseln
    ```shell
    cd /var/www/html/i-doit/
    ```

    Die ZIP Datei entpacken und alle Dateien überschreiben lassen
    ```shell
    unzip idoit-33-update.zip
    ```

    Jetzt werden die Dateirechte angepasst, sodass der Webserver lesend wie schreibend Zugriff auf **i-doit** hat.
    !!! info ""
    Die hier genutzte Benutzer:Gruppen Kombination **www-data:www-data** bezieht sich auf **Debian** oder **Ubuntu** Linux.
    Sollten ein anderes Betriebssystem genutzt werden, muss die genutzte Benutzer:Gruppen Kombination angepasst werden. Siehe [hier](../../installation/manuelle-installation/setup.md#installationspaket-herunterladen-und-entpacken)

    ```shell
    cd /var/www/html/i-doit/
    sudo chown www-data:www-data -R .
    sudo find . -type d -name \* -exec chmod 775 {} \;
    sudo find . -type f -exec chmod 664 {} \;
    ```

=== "**Schritt 3**: i-doit Update Button anklicken"
    [![Update Button anklicken](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/step-2.png)](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/step-2.png)

## 2. Installation
