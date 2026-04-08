---
title: Installation
description: "Bevor du mit der IT-Dokumentation loslegst, muss i-doit installiert werden."
icon:
status:
lang: de
---
# Installation

Bevor du mit der IT-Dokumentation loslegst, muss i-doit installiert werden. Wähle die Installationsart, die am besten zu deiner Umgebung passt:

## Welche Installationsart passt zu dir?

| | [Automatische Installation](automatische-installation.md) | [Manuelle Installation](manuelle-installation/index.md) | [Eval Appliance](i-doit-virtual-eval-appliance/index.md) |
|---|---|---|---|
| **Beschreibung** | Ein Script installiert und konfiguriert alles auf einem frischen Linux-System — inklusive Cronjobs, Backups und CLI-Werkzeuge. | Du installierst und konfigurierst alle Komponenten selbst. Volle Kontrolle über jeden Schritt. | Fertige VM mit vorinstalliertem i-doit zum Testen und Evaluieren. |
| **Geeignet für** | Produktivbetrieb, Standard-Setup | Produktivbetrieb, individuelle Anforderungen, Windows Server | Evaluierung und Tests |
| **Voraussetzungen** | Linux-Grundkenntnisse | Gute Linux- oder Windows-Server-Kenntnisse | Keine — einfach VM importieren |
| **Umfang** | Komplett: Installation, Konfiguration, Cronjobs, Backup | Alles manuell konfigurierbar | Komplett vorinstalliert |

!!! tip "Empfehlung"
    Für die meisten Anwender ist die **automatische Installation** der schnellste und einfachste Weg. Du brauchst lediglich ein frisches [Debian oder Ubuntu](systemvoraussetzungen.md) und das Installationsscript erledigt den Rest.

## Voraussetzungen

Unabhängig von der Installationsart solltest du vorab die [Systemvoraussetzungen](systemvoraussetzungen.md) prüfen. Dort findest du die unterstützten Betriebssysteme, PHP- und Datenbankversionen sowie Hardware-Empfehlungen.

## Nächste Schritte nach der Installation

1.  Lizenz im [Admin Center](../administration/admin-center.md) einspielen
2.  [Erstanmeldung](../grundlagen/erstanmeldung.md) durchführen
3.  [Cronjobs einrichten](../automatisierung-und-integration/cli/index.md) (falls nicht automatisch geschehen)
4.  [Backup konfigurieren](../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md)
