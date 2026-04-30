---
title: Upgrade von i-doit open auf pro
description: "So steigst du von i-doit open auf i-doit mit erweiterten Funktionen um."
icon: fontawesome/brands/linux
status:
lang: de
---

So steigst du von _i-doit open_ auf _i-doit_ mit erweiterten Funktionen um.

## Motivation

_i-doit_ bietet gegenüber der open-Variante [wesentlich mehr Funktionen](https://www.i-doit.org/cmdb-it-documentation/), die deine tägliche Arbeit erleichtern.

## Übersicht: Sieben Schritte zur _i-doit_

1. Vorbereitung
2. pro-Update herunterladen und durchführen
3. pro-addon installieren
4. Lizenz einspielen
5. Caches leeren
6. Rechte konfigurieren
7. Nacharbeiten

## Vorbereitung

!!! warning "Dieser Vorgang lässt sich nicht rückgängig machen. Erstelle vorher ein funktionierendes [Backup](../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md)!"

Nach dem Upgrade benötigst du eine gueltige [Lizenz für i-doit](../wartung-und-betrieb/lizenzierung.md). Stelle sicher, dass die [Systemvoraussetzungen](../installation/systemvoraussetzungen.md) und [Einstellungen](../installation/manuelle-installation/systemeinstellungen.md) erfuellt sind.

Bei älteren open-Installationen beachte:

*   Wenn i-doit open **0.9.x** oder älter installiert ist, ist ein Upgrade nicht möglich.
*   Wenn i-doit open **1.4.x** installiert ist, muss erst auf die neuste Version ab 1.8 aktualisiert werden.
*   Wenn i-doit open **1.8.x** oder höher installiert ist, kann das Upgrade fortgesetzt werden.

Die jeweils aktuelle Version steht auf [i-doit.org](http://i-doit.org/) zum Download bereit.

## pro-Update herunterladen und durchführen

1. Lade das Update-Paket der pro-Variante im [Kundenportal](../administration/kundenportal.md) herunter.
2. Spiele es [wie gewohnt](../wartung-und-betrieb/update-einspielen.md) ein.

Die Versionsnummern müssen übereinstimmen: Ist i-doit open 1.8 installiert, verwende das Update-Paket i-doit 1.8. Das Installations-Paket der pro-Variante funktioniert für das Upgrade **nicht**.

## pro-Add-on installieren

Nach dem Update installierst du das pro-Add-on im [Admin-Center](../administration/admin-center.md) unter **Add-ons**.

## Lizenz einspielen

Spiele die gueltige Lizenz [im Admin-Center unter **Licenses**](../wartung-und-betrieb/lizenzierung.md) ein.

## Caches leeren

1. Melde dich vom Admin-Center ab und in i-doit an.
2. Navigiere zu **Verwaltung → Systemtools → Cache / Datenbank** und klicke auf **Kompletten Cache leeren**.
3. Leere den Browser-Cache mit **STRG+F5**.

## Rechte konfigurieren

Im Gegensatz zu i-doit open verfügt i-doit über ein umfangreiches [Rechtesystem](../effizientes-dokumentieren/rechteverwaltung/index.md). Dein Benutzer hat nach dem Upgrade noch nicht alle Berechtigungen.

So erhältst du vollen Zugriff:

1. Rufe **Verwaltung → Rechtesystem → Rechtesystem zurücksetzen** auf.
2. Gib die Credentials für das [Admin-Center](../administration/admin-center.md) ein.

Anschließend konfigurierst du die Rechte für weitere Personen und Personengruppen.

## Nacharbeiten

Stelle sicher, dass folgende Punkte erledigt sind:

*   [Backup und Restore einrichten und testen](../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md)
*   [Cronjobs einrichten](../automatisierung-und-integration/cli/index.md) (mit dem Controller)
*   [Optional Update auf aktuelle pro-Version durchführen:](../wartung-und-betrieb/update-einspielen.md) Mit einer gültigen Lizenz ist es möglich und auch sehr empfehlenswert, immer auf die neuste Version von i-doit zu aktualisieren.

## Downgrade auf i-doit open?

Ein Downgrade von _i-doit_ auf _i-doit open_ ist nicht vorgesehen und wird nicht unterstützt.
