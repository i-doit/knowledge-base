---
title: CSV Data Export
description: CSV Data Export
icon:
status:
lang: en
---

# CSV Data Export

You can export data directly from the [IT documentation](../glossar.md) in CSV format and process it further in a spreadsheet application. Three methods are available.

## Exporting Object Lists

Open the [object list](../grundlagen/objekt-liste/index.md) and click the **CSV** button in the action bar. The exported columns correspond to the [configured attributes of the list view](../grundlagen/objekt-liste/listenansicht-konfigurieren.md).

If you have set a [filter](../grundlagen/objekt-liste/navigieren-und-filtern.md), you only export the filtered results.

[![CSV export in action bar](../assets/images/de/daten-konsolidieren/csv-datenexport/1-csv-de.png)](../assets/images/de/daten-konsolidieren/csv-datenexport/1-csv-de.png)

## Exporting Category Lists

The CSV export supports many [category lists](../glossar.md) (multi-value). Click the **CSV** button within a category list to download all entries and [attributes](../glossar.md).

The attribute names serve as column headers. i-doit exports multi-value data comma-separated.

[![Multi-value category](../assets/images/de/daten-konsolidieren/csv-datenexport/2-csv-de.png)](../assets/images/de/daten-konsolidieren/csv-datenexport/2-csv-de.png)

## Exporting Reports

The [Report Manager](../auswertungen/report-manager.md) also offers CSV export. Open a report and click **CSV**.

[![Report display](../assets/images/de/daten-konsolidieren/csv-datenexport/3-csv-de.png)](../assets/images/de/daten-konsolidieren/csv-datenexport/3-csv-de.png)

## CSV Format

The exported file is a simple text file. Per line, the values are separated by a **semicolon**. The encoding is **Unicode (UTF-8)**.

!!! info "Microsoft Excel"
    Excel sometimes does not display CSV files correctly -- especially umlauts and special characters are lost. Therefore, do not open the file directly but import it:

    1.  Export and save the CSV file
    2.  Open Excel
    3.  Click **From Text** in the **Data** tab
    4.  Open the CSV file
    5.  In the **Text Import Wizard** dialog, set the **File origin** to **65001 : Unicode (UTF-8)**
    6.  Click **Next**
    7.  Select the **Semicolon** checkbox as the **Delimiter**
    8.  Click **Finish**
