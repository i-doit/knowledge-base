---
title: CSV-Datenexport
description: CSV Datenexport
icon:
status:
lang: de
---

# CSV-Datenexport

Viele Daten lassen sich direkt aus der [IT-Dokumentation](../glossar.md) im CSV-Format exportieren, um diese mit einer Tabellenkalkulation o. ä. zu verarbeiten.

## Objekt-Liste

Objekte und deren Attribute lassen sich über die [Objekt-Liste](../grundlagen/objekt-liste/index.md) exportieren. Hierzu dient der Button **CSV** in der Aktionsleiste. Die Spalten entsprechen den [in der Listenansicht konfigurierten Attributen](../grundlagen/objekt-liste/listenansicht-konfigurieren.md). Eine aktive [Filterung der Objekt-Liste](../grundlagen/objekt-liste/navigieren-und-filtern.md) wird beim Export berücksichtigt.

[![CSV-Export in der Aktionsleiste](../assets/images/de/daten-konsolidieren/csv-datenexport/1-csv-de.png)](../assets/images/de/daten-konsolidieren/csv-datenexport/1-csv-de.png)

## Kategorie-Listen

Derzeit unterstützt der CSV-Export viele der [Kategorie-Listen](../glossar.md) (Multi-Value). Die in deren Liste aufgeführten Einträge und [Attribute](../glossar.md) werden nach Druck auf den Button **CSV** zum Download angeboten. Als Spaltenüberschriften dienen die Attribut Namen. Beim Exportieren einer Kategorie-Liste als CSV werden die "multi-value" Daten nun immer Kommasepariert exportiert.

[![Multi-Value Kategorie](../assets/images/de/daten-konsolidieren/csv-datenexport/2-csv-de.png)](../assets/images/de/daten-konsolidieren/csv-datenexport/2-csv-de.png)

## Reports

Der [Report Manager](../auswertungen/report-manager.md) verfügt ebenfalls über einen Export ins CSV-Format. In einem Report klickt man dazu auf den Button **CSV**.

[![Report Darstellung](../assets/images/de/daten-konsolidieren/csv-datenexport/3-csv-de.png)](../assets/images/de/daten-konsolidieren/csv-datenexport/3-csv-de.png)

## CSV-Format

CSV-Dateien sind einfache Textdateien, in der pro Zeile Komma-separierte Spalten hinterlegt sind. In diesem Fall dient ein Semikolon als Trennzeichen von Spalten. Die Daten sind im Zeichensatz Unicode (UTF-8) kodiert.

!!! info "Microsoft Excel"
    Es kann vorkommen, dass Microsoft Excel die Daten in der exportierten CSV-Datei nicht korrekt darstellt. Insbesondere Encoding-Fehler sind zu beobachten. Um dies zu verhindern, sollte die CSV-Datei nicht direkt geöffnet, sondern erst importiert werden:

    1.  CSV-Datei exportieren und speichern
    2.  Excel öffnen
    3.  Im Reiter **Daten** auf **Aus Text** klicken
    4.  CSV-Datei öffnen
    5.  Im Dialog **Textkonvertierungsassistent** den **Dateiursprung** auf **65001 : Unicode (UTF-8)** setzen
    6.  Auf **Weiter** klicken
    7.  Als **Trennzeichen** die Checkbox **Semikolon** wählen
    8.  Auf **Fertigstellen** klicken
