---
title: Installation und Einrichtung
description: Dieser Abschnitt bündelt Systemvoraussetzungen, Installation und Einrichtung auf einer Seite. Für Schnellnavigation nutze die Buttons.
icon:
status:
lang: de
---

# Installation und Einrichtung

Dieser Abschnitt bündelt **Systemvoraussetzungen**, **Installation** und **Einrichtung** auf einer Seite. Für Schnellnavigation nutze die Buttons.

## Systemvoraussetzungen

Damit Import und Reporting stabil laufen, haben sich folgende Einstellungen bewährt:

### PHP und Server

Bei einer bestehenden i-doit Installation sollten die hier genannten Voraussetzungen bereits erfüllt sein.

- upload_max_filesize ≥ 10 MB
- post_max_size ≥ 10 MB
- max_execution_time ≥ 300 s
- max_input_time ≥ 300 s
- PHP Zip Modul aktiv, Systembibliothek libzip ≥ 1.2.0

### Datenbank

- MariaDB ≥ 10.1 oder MySQL ≥ 8.0

## Installation

1. Das Add-on aus dem [Kundenportal](../../administration/admin-center.md) herunterladen oder innerhalb von i-doit im [Add-on & Subscription Center](../../administration/kundenportal.md) installieren lassen
2. Im [Admin-Center](../../administration/admin-center.md) anmelden
3. Reiter **Add-ons** öffnen
4. Install/update Add-on wählen, **VIVA2 ZIP**-Datei auswählen
5. Upload and install ausführen

### Update von 2.x auf 3.0

!!! warning "Backup"
    Vor dem Update vollständige Backups von System- und Mandanten-Datenbanken sowie des i-doit-Verzeichnisses anlegen.

Automatische Anpassungen beim Update:
- Anforderungsumsetzungen wandern vom Baustein an Zielobjekte, Zielobjekt-Gruppen oder Informationsverbünde
- Kontaktrollen an Bausteinen werden vereinheitlicht
- Veraltete Reports werden bereinigt

### Known Issues

- MySQL 5.6/5.7 bietet nicht die benötigten Funktionen für variable Reports. Empfehlung: MariaDB ≥ 10.1 oder MySQL ≥ 8.0

## Einrichtung

Nach der Installation importierst du das IT-Grundschutz Kompendium. Der Download ist im [Kundenportal](../../administration/kundenportal.md) verfügbar.

1. Menü Add-ons → IT-Grundschutz → Kompendium öffnen
2. Importieren wählen und die ZIP-Datei des Kompendiums hochladen
3. Auf den Abschluss abwarten, dieser kann mehrere Minuten dauern

!!! warning "Versionen"
    Kompendium-Editionen ab 2022 erfordern VIVA2 ab 3.2.

!!! warning "Das VIVA2 Add-on verbraucht lizenzpflichtige Objekte"
    Der Import des IT-Grundschutz-Kompendiums erzeugt ~**2927** lizenzpflichtige Objekte, zieht man entfallene Anforderungen ab bleiben **2637** übrig. Stelle sicher, dass deine i-doit-Lizenz ausreichend lizenzpflichtige Objekte umfasst, um das Add-on nutzen zu können.
    Mit dem Import des IT-Grundschutz-Kompendiums werden auch inzwischen obsolete Anforderungen mit importiert. Das BSI hat diese Anforderungen mit dem Titel "ENTFALLEN" versehen. Aus Gründen der Abwärtskompatibilität werden diese Anforderungen alle mit importiert, können aber problemlos hinterher alle gelöscht werden.

## Kompendium aktualisieren

### Vorgehen

1. Add-ons → IT-Grundschutz → Kompendium öffnen
2. Aktualisieren wählen und ZIP hochladen
3. Neue, geänderte und benutzerdefinierte Elemente prüfen
4. Import durchführen und Ergebnis prüfen

### Verhalten nicht übernommener Elemente

- Abgewählte vorhandene Elemente werden automatisch archiviert

### Hinweise

- Importdauer hängt von Edition und Systemleistung ab. Nach dem Update Stichproben im Check und in Reports durchführen

[<- Zurück](index.md){ .md-button } · [IT-Grundschutz-Profile ->](it-grundschutz-profiles.md){ .md-button .md-button--primary }
