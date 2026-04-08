---
title: Benutzerdefinierte Zähler
description: "Benutzerdefinierte Zähler ermöglichen dir, eigene fortlaufende Nummerierungen zu definieren und in verschiedenen Bereichen von i-doit einzusetzen."
icon:
status:
lang: de
---
# Benutzerdefinierte Zähler

Benutzerdefinierte Zähler ermöglichen dir, eigene fortlaufende Nummerierungen zu definieren und in verschiedenen Bereichen von i-doit einzusetzen.

## Konfiguration aufrufen

Du findest die benutzerdefinierten Zähler unter **Verwaltung → Vordefinierte Inhalte → Benutzerdefinierte Zähler**. Dort siehst du alle konfigurierten Zähler in einer Liste. Über die Schaltfläche am oberen Rand fügst du neue Zähler hinzu.

[![Benutzerdefinierter-Zähler](../assets/images/de/grundlagen/benutzerdefinierte-zaehler/1-bz.png)](../assets/images/de/grundlagen/benutzerdefinierte-zaehler/1-bz.png)

## Aufbau eines Zählers

Jeder Zähler belegt eine eigene Zeile in der Liste. Der Name folgt dem Schema **%COUNTER_CUSTOMTEXT%** -- du gibst nur den mittleren Teil (den eigentlichen Namen) in das Textfeld ein.

Pro Zähler stehen dir folgende Elemente zur Verfügung:

- **Namensfeld**: Hier trägst du den Namen des Zählers ein. Erlaubt sind ausschließlich die Zeichen **A-Z**, **a-z**, **0-9**, **-** und **\_**. Kleinbuchstaben werden beim Speichern automatisch in Großbuchstaben umgewandelt.
- **Aktueller Stand**: Zeigt dir an, welche Zahl der Zähler zuletzt erreicht hat.
- **Zurücksetzen**: Setzt den Zähler unwiderruflich auf 1 zurück. Du erhältst vor dem Zurücksetzen eine Sicherheitsabfrage.
- **Löschen**: Entfernt den Zähler dauerhaft aus der Konfiguration. Auch hier wirst du vorher zur Bestätigung aufgefordert.

!!! attention "Wichtig"
    Nach dem Speichern kannst du den Namen eines Zählers nicht mehr ändern. Das Textfeld wird deaktiviert, um Inkonsistenzen zu vermeiden.

[![Benutzerdefinierter-Zähler](../assets/images/de/grundlagen/benutzerdefinierte-zaehler/2-bz.png)](../assets/images/de/grundlagen/benutzerdefinierte-zaehler/2-bz.png)

!!! attention ""
    Wenn du den Mauszeiger über das Info-Symbol bewegst, erscheint ein Hinweis: Das Zurücksetzen setzt den Zähler auf 1 zurück. Alle zukünftigen Verwendungen nutzen dann die neue Zählung. Ein Zurückkehren zum vorherigen Stand ist nicht möglich.

## Zähler verwenden

Du verwendest einen benutzerdefinierten Zähler, indem du seinen Platzhalter manuell in das gewünschte Feld einträgst. Bei jeder Verwendung zählt i-doit den Wert automatisch um 1 hoch.

### Führende Nullen

Für führende Nullen hängst du **#N** an den Platzhalter an, wobei **N** die Gesamtstellenzahl festlegt:

- **%COUNTER_CUSTOMTEXT#3%** erzeugt z. B. `001`, `002`, `003` usw.

### Zähler auf bestimmten Wert setzen

Über die [Experteneinstellungen](../administration/verwaltung/mandanten-name-verwaltung/experteneinstellungen.md) kannst du einen Zähler bei Bedarf auf einen bestimmten Wert setzen. Du findest die Zähler dort über die Suche mit `cmdb.counter.counter_`.

## Einsatzbereiche

Benutzerdefinierte Zähler stehen dir in folgenden Bereichen zur Verfügung:

- Listenbearbeitung
- Massenbearbeitung
- Vorlagen (Templates)
- Automatisch generierte Inventarnummern aus der Objekttyp-Konfiguration
- Textfelder in benutzerdefinierten Kategorien

Die verfügbaren Zähler werden dir durch Klick auf das [![icon](../assets/images/de/grundlagen/icons/riddle.png)](../assets/images/de/grundlagen/icons/riddle.png) Fragezeichen-Symbol neben dem jeweiligen Feld aufgelistet.
