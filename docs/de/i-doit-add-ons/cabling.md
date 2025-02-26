---
title: Cabling
description: Verkabelungsansicht
icon: addons/cabling
status:
lang: de
---

# Cabling

Mit dem [Add-on](../i-doit-add-ons/index.md) **Verkabelungsansicht** erhalten Sie eine detaillierte Anzeige von Verkabelungen. Egal ob Sie einen Kabelweg nachverfolgen wollen oder Patch Aufträge ausdrucken möchten.

## Download und Installation

Dieses Add-on kann nachträglich installiert werden. Detaillierte Beschreibungen bezüglich Download, Installation, Updates usw. liefert der Artikel "[Add-ons](../i-doit-add-ons/index.md)".

## Konfiguration

Eine technische Konfiguration des Add-ons ist nach der [Installation](../i-doit-add-ons/index.md) nicht notwendig. Falls die Verkabelungsansicht immer direkt geöffnet werden soll kann dies unter **Verwaltung → Benutzereinstellungen → Benutzeroberfläche** konfiguriert werden. Die Verkabelungsansicht kann auch über die Kategorie Verkabelung in Objekten aufgerufen werden.

## Rechtevergabe

Unter **Verwaltung → Berechtigungen → Verkabelungsansicht** können [Rechte für Personen und Personengruppen](../effizientes-dokumentieren/rechteverwaltung/index.md) angepasst werden.

[![Rechtevergabe](../assets/images/de/i-doit-add-ons/cabling/1-cab.png)](../assets/images/de/i-doit-add-ons/cabling/1-cab.png)

## Verwendung

Nach der Installation und der Konfiguration der Rechte steht das Add-on unter **Add-ons → Verkabelungsansicht** zur Verfügung.

[![Verwendung](../assets/images/de/i-doit-add-ons/cabling/2-cab.png)](../assets/images/de/i-doit-add-ons/cabling/2-cab.png)

## Releases
<!-- cSpell:disable -->
| Version | Datum      | Changelog                                                                                                                                                                                                                                                                                                                                              |
| ------- | ---------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| 1.5     | 26.02.2025 | [Task] Make symfony 6.4 compatible<br>[Task] Make Smarty 5 compatible<br>[Bug] Cabling does not display the full object title<br>[Bug] Connecting close ports causes connection visibility issues<br>[Bug] Wrong output sorting when connected to the same input                                                                                       |
| 1.4     | 27.02.2024 | [Task] PHP 8.2 compatibility, cleaned up color usage                                                                                                                                                                                                                                                                                                   |
| 1.3     | 07.11.2023 | [Bug]  Setting to display cable names is not saved.<br>[Bug]  Highlight 'add-on' instead of 'extras' menu<br>[Bug] Overlap objects in the wiring view                                                                                                                                                                                                  |
| 1.2     | 05.09.2022 | [Task] PHP 8.0 Compatibility  <br> [Task] Design Compatibility                                                                                                                                                                                                                                                                                         |
| 1.1.1   |            | [Bug] Connections are not shown in add-on "cabling"                                                                                                                                                                                                                                                                                                    |
| 1.1     | 21.02.2022 | [Improvement] Improve export options <br> [Bug] Remove "print" button in the CMDB-Explorer <br> [Bug] Visualization of cabling pathts, connecting an object with itself (two ports)  <br> [Bug] Sorting of connections in the wiring view is confusing  <br> [Bug] The visualization object browser should only provide objects that contain wiring    |
| 1.0.4   | 20.05.2019 | [Bug] Wrong sorting of cabling <br> [Bug] Incorrect display of vitrification in IE11                                                                                                                                                                                                                                                                   |
| 1.0.3   | 18.12.2018 | [Bug] Fehler verhindert Erstellung von PDF-Dokumenten bei Verwendung von SSL <br> [Bug] Bilder werden nicht geladen                                                                                                                                                                                                                                    |
| 1.0.2   | 18.12.2017 | [Verbesserung] Druckansicht Verkabelungsstrecken <br> [Verbesserung] Verkabelungsbrowser als Funktion hinzufügen <br> [Verbesserung] Änderung der Anschlusstypen wird nun im Logbuch dokumentiert <br> [Verbesserung] Zu exportierendes Objekt im Popup darstellen <br> [Bug] PDF Export funktioniert nicht, wenn nicht das Root Objekt ausgewählt ist |
