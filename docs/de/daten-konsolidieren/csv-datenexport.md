---
title: CSV-Datenexport
description: CSV Datenexport
icon:
status:
lang: de
---

# CSV-Datenexport

Du kannst Daten direkt aus der [IT-Dokumentation](../glossar.md) im CSV-Format exportieren und in einer Tabellenkalkulation weiterverarbeiten. Dafür stehen dir drei Wege zur Verfügung.

## Objekt-Liste exportieren

Öffne die [Objekt-Liste](../grundlagen/objekt-liste/index.md) und klicke auf den Button **CSV** in der Aktionsleiste. Die exportierten Spalten entsprechen den [konfigurierten Attributen der Listenansicht](../grundlagen/objekt-liste/listenansicht-konfigurieren.md).

Hast du einen [Filter](../grundlagen/objekt-liste/navigieren-und-filtern.md) gesetzt, exportierst du nur die gefilterten Ergebnisse.

[![CSV-Export in der Aktionsleiste](../assets/images/de/daten-konsolidieren/csv-datenexport/1-csv-de.png)](../assets/images/de/daten-konsolidieren/csv-datenexport/1-csv-de.png)

## Kategorie-Listen exportieren

Der CSV-Export unterstützt viele [Kategorie-Listen](../glossar.md) (Multi-Value). Klicke innerhalb einer Kategorie-Liste auf den Button **CSV**, um alle Einträge und [Attribute](../glossar.md) herunterzuladen.

Die Attributnamen dienen als Spaltenüberschriften. Multi-Value-Daten exportiert i-doit kommasepariert.

[![Multi-Value Kategorie](../assets/images/de/daten-konsolidieren/csv-datenexport/2-csv-de.png)](../assets/images/de/daten-konsolidieren/csv-datenexport/2-csv-de.png)

## Reports exportieren

Auch der [Report Manager](../auswertungen/report-manager.md) bietet CSV-Export an. Öffne einen Report und klicke auf **CSV**.

[![Report Darstellung](../assets/images/de/daten-konsolidieren/csv-datenexport/3-csv-de.png)](../assets/images/de/daten-konsolidieren/csv-datenexport/3-csv-de.png)

## CSV-Format

Die exportierte Datei ist eine einfache Textdatei. Pro Zeile stehen die Werte durch ein **Semikolon** getrennt. Die Kodierung ist **Unicode (UTF-8)**.

!!! info "Microsoft Excel"
    Excel stellt CSV-Dateien manchmal nicht korrekt dar -- besonders Umlaute und Sonderzeichen gehen verloren. Öffne die Datei deshalb nicht direkt, sondern importiere sie:

    1.  CSV-Datei exportieren und speichern
    2.  Excel öffnen
    3.  Im Reiter **Daten** auf **Aus Text** klicken
    4.  CSV-Datei öffnen
    5.  Im Dialog **Textkonvertierungsassistent** den **Dateiursprung** auf **65001 : Unicode (UTF-8)** setzen
    6.  Auf **Weiter** klicken
    7.  Als **Trennzeichen** die Checkbox **Semikolon** wählen
    8.  Auf **Fertigstellen** klicken
