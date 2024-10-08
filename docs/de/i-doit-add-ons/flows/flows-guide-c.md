---
title: i-doit 33 update und Flows Installation
description: i-doit 33 update und Flows Installation
icon:
status: new
lang: de
---

Hier beschreiben wir wie i-doit auf Version **33** aktualisiert um das Flows Add-on installieren zu können.

## 1. Update auf Version 33

Um das Flows Add-on und alle neuen Funktionen nutzen zu können, muss zuvor i-doit auf Version 33 aktualisiert werden.

### 1.1 Update über den online Updater

!!! hint "Version 33 wird sofort über den online Updater verfügbar sein"

Wenn die Instanz das Internet erreichen kann, sollte das Update über den Updater genutzt werden. Ausgangssituation ist eine Anmeldung in i-doit mit Administrator Rechten.

#### Schritt 1: Öffnen der Verwaltung in i-doit 32

[![Verwaltung öffnen](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-1.png)](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-1.png)

#### Schritt 2: [Mandanten-Name] Verwaltung aufrufen

[![Mandanten-name Verwaltung öffnen](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-2.png)](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-2.png)

#### Schritt 3: i-doit Update Button anklicke

[![Update Button anklicken](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-3.png)](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-3.png)

---

### 1.2 Offline Update vorbereiten und den Updater aufrufen

!!! hint "Version 33 wird sofort über den online Updater verfügbar sein"

Wenn die Instanz das Internet nicht erreichen kann, muss das Update Paket im i-doit Ordner entpackt werden. Anschließend ist das Update im Updater verfügbar.

Zuerst muss das Update Paket aus dem [Kundenportal](../../administration/kundenportal.md) heruntergeladen werden. Anschließend wird die ZIP Datei auf den Server bzw. in den i-doit Ordner kopiert.
In welchem Dateipfad i-doit Installiert ist, kann über den Punkt **Rights & Directories** in der [[Mandanten-Name] Verwaltung](../../administration/verwaltung/mandanten-name-verwaltung/index.md) geprüft werden.

#### Schritt 1: i-doit 33 Updater herunterladen

Update Paket aus dem [Kundenportal](../../administration/kundenportal.md) heruntergeladen.

#### Schritt 2: `idoit-33-update.zip` in den i-doit Ordner verschieben

Das Update-Paket kann (beispielsweise per [WinSCP](https://winscp.net/eng/docs/lang:de)) auf dem Server abgelegt werden. Verschiebe danach das Paket in das Hauptverzeichnis von **i-doit**, wenn du es nicht schon direkt dort abgelegt hast. Das geht mit diesem Befehl:

```shell
sudo mv idoit-33-update.zip /var/www/html/i-doit/
```

#### Schritt 3: ZIP Datei entpacken

In den i-doit Ordner wechseln

```shell
cd /var/www/html/i-doit/
```

Die ZIP Datei entpacken und alle Dateien überschreiben lassen

```shell
unzip idoit-33-update.zip
```

Jetzt werden die Dateirechte angepasst, sodass der Webserver lesend wie schreibend Zugriff auf **i-doit** hat.

!!! info "Die hier genutzte Benutzer:Gruppen Kombination **www-data:www-data** bezieht sich auf **Debian** oder **Ubuntu** Linux. Sollten ein anderes Betriebssystem genutzt werden, muss die genutzte Benutzer:Gruppen Kombination angepasst werden. Siehe [hier](../../installation/manuelle-installation/setup.md#installationspaket-herunterladen-und-entpacken)"

```shell
cd /var/www/html/i-doit/
sudo chown www-data:www-data -R .
sudo find . -type d -name \* -exec chmod 775 {} \;
sudo find . -type f -exec chmod 664 {} \;
```

#### Schritt 4: i-doit Update Button anklicken

[![Update Button anklicken](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-3.png)](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-3.png)

## 2. Installation

Mit i-doit 33 wurde das Feature [Subscription & Add-ons](//TODO) hinzugefügt, worüber auch Add-ons direkt installiert werden können. Dieses Feature kann zur Installation genutzt werden. Das Flows Add-on kann aber auch wie üblich über das Admin-Center installiert werden.

### 2.1 (Online) Flows Add-on über Subscription & Add-ons installieren

In der Version 33 kann das Flows Add-on über das neue Feature Subscription & Add-ons installiert werden. Um das Feature nutzen zu können, wird der Lizenztoken benötigt, der hier neu eingegeben und gespeichert wird.

#### Schritt 1: Subscription & Add-ons öffnen

[![Subscription & Add-ons öffnen](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/flows-install-step-1.png)](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/flows-install-step-1.png)

#### Schritt 2: Lizenztoken speichern

[![Lizenztoken speichern](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/flows-install-step-2.png)](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/flows-install-step-2.png)

#### Schritt 3: Add-ons öffnen und Flows via Action installieren

[![//TODO bild erstellen ]]

### 2.2 (Offline) Flows Add-on über das Admin-Center installieren

Kann die i-doit Instanz nicht auf das Internet bzw. das [Subskription & Add-ons]() backend zugreifen, muss das Add-on aus dem [Kundenportal](../../administration/kundenportal.md) heruntergeladen werden. Anschließend wird es über das [Admin-Center](../../administration/admin-center.md) installiert.

#### Schritt 1: Flows Add-on aus dem Kundenportal herunterladen

Zuerst im Kundenportal unter <https://portal.i-doit.com> einloggen und dort unter Add-ons das Flows Add-on herunterladen

#### Schritt 2: Ins i-doit Admin-Center einloggen

[![Admin-Center öffnen](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/install-2.2-1.png)](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/install-2.2-1.png)

Nun mit den Admin-Center Login Daten einloggen

[![Admin-Center einloggen](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/install-2.2-2.png)](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/install-2.2-2.png)

#### Schritt 3: Flows Add-on installieren

[![Admin-Center installieren](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/install-2.2-3.png)](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/install-2.2-3.png)

## 3. Konfiguration des Dienstes

Das Flows Add-on benötigt
