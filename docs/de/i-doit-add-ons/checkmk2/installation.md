---
title: Installation
description: "Nachdem du die Anforderungen erfuellt hast, lade die neueste stabile Version des i-doit Add-ons vom i-doit Kundenportal herunter."
icon:
status:
lang: de
---
# Installation

Nachdem du die [Anforderungen](./anforderungen.md) erfuellt hast, lade die neueste stabile Version des i-doit Add-ons vom [i-doit Kundenportal](../../administration/kundenportal.md) herunter.

[![Checkmk](../../assets/images/de/i-doit-add-ons/checkmk2/checkmk-hauptseite.png)](../../assets/images/de/i-doit-add-ons/checkmk2/checkmk-hauptseite.png)

Installiere die heruntergeladene ZIP-Datei [wie jedes andere i-doit Add-on](../index.md).

## Hinzufügen der Checkmk 2 Add-on Kategorien

Das Add-on macht zusätzlich die Kategorien "Checkmk Host" und "Checkmk Tags" für alle Objekttypen verfügbar. Die Kategorie kann über die Objekttyp-Konfiguration und über [Datenstruktur bearbeiten](../../administration/verwaltung/datenstruktur/datenstruktur-bearbeiten.md) mit den gewünschten Objekttypen verknüpft werden. Auf diese Weise erscheinen nur die Objekttypen, die du angibst, um die Auswahlliste übersichtlich zu halten.

## idoitcmk dort ausführen, wo du willst

Die ZIP-Datei enthält die Binaerdatei idoitcmk, die du auf jedem anderen Computer ausserhalb des i-doit-Hosts installieren kannst. Mache sie ausführbar und verschiebe sie in ein Verzeichnis in deinem PATH, damit du sie in deinem Terminal ausführen kannst. Führe es zum Beispiel auf einem GNU/Linux- oder macOS-Host aus:

```shell
unzip idoit-cmk2-*.zip
chmod 755 idoitcmk
sudo mv idoitcmk /usr/local/bin/
```

Um auf dem neuesten Stand zu bleiben, musst du diese Schritte wiederholen.

## idoitcmk auf demselben Rechner wie i-doit ausführen

Auf einem GNU/Linux-Host unterscheiden sich die folgenden Schritte nicht wesentlich von den oben genannten. Mache die Binaerdatei ausführbar und erstelle einen symbolischen Link zu einem Verzeichnis in deinem PATH. In diesem Beispiel wird i-doit unter /var/www/html installiert:

```shell
chmod 755 /var/www/html/idoitcmk
sudo ln -s /var/www/html/idoitcmk /usr/local/bin/
```

Um auf dem neuesten Stand zu bleiben, musst du diese Schritte wiederholen.
