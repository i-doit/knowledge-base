---
title: Update von i-doit open 1.4.8 auf 1.8
description: "Dieser Artikel beschreibt die Besonderheiten beim Update der open-Variante von Version 1.4.8 auf 1.8."
icon: fontawesome/brands/linux
status:
lang: de
---

Dieser Artikel beschreibt die Besonderheiten beim Update der open-Variante von Version 1.4.8 auf 1.8.

## Vorbereitung

Das Update von 1.4.8 auf 1.8 bringt umfangreiche Änderungen mit sich: überarbeitete Web GUI, geändertes Datenbankmodell und eine erweiterte API (als separates, kostenloses Modul).

## Download

Lade das Update-Paket hier herunter:

[![](../assets/downloads/idoit-open-1.8-update.zip)idoit-open-1.8-update.zip](../assets/downloads/idoit-open-1.8-update.zip)

Beachte:

*   Deine Installation muss auf Version **1.4.8** sein. Ältere Versionen aktualisierst du zuerst auf 1.4.8.
*   Das Update erfolgt schrittweise bis Version 1.8 -- neuere Versionen sind erst danach möglich.

## Durchführung

Kopiere das Update-Paket ins i-doit-Verzeichnis und entpacke es. Beispiel für Debian:


    sudo -u www-data cp idoit-open-1.8-update.zip /var/www/html/
    cd /var/www/html/
    sudo -u www-data unzip idoit-open-1.8-update.zip

Passe den Pfad an deine Installation an. Verwende den Apache-User, damit die Rechte stimmen.

Die anschließende Update-Prozedur entspricht dem normalen [Update über die Web GUI](../wartung-und-betrieb/update-einspielen.md). Da Major-Updates nicht übersprungen werden duerfen, spielst du die Versionen nacheinander ein:

1. Version 1.4.8 → 1.5
2. Version 1.5 → 1.6
3. Version 1.6 → 1.7
4. Version 1.7 → 1.8

Nach jedem Schritt wirst du zum nächsten aufgefordert. Sind alle erfolgreich, zeigt die Web GUI Version 1.8 an.

## Nachbereitung

Führe nach dem Update folgende Schritte durch:

*   [Backup konfigurieren](../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md)
*   [Cronjobs einrichten](../automatisierung-und-integration/cli/index.md)

## Troubleshooting

Bei jedem Schritt legt i-doit eine Log-Datei im Verzeichnis `log/` an. Bricht ein Schritt mit einem Fehler ab, findest du die Details im Log. Führe in diesem Fall **keine weiteren Update-Schritte** durch, um Folgefehler zu vermeiden.

Hilfe findest du im [open-Forum](https://forum.i-doit.org/) und in den [Troubleshooting-Tipps](../administration/troubleshooting/index.md).
