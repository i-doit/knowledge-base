# CSV Data Export

Many data can be exported directly from the [IT documentation](../glossary.md) in CSV format in order to be processed, for example, with a spreadsheet.

Object List
-----------

Objects and their attributes can be exported via the [object list](../basics/object-list/index.md) by clicking the **Export as CSV**  button in the action bar. The columns correspond to the attributes [configured in the list view](../basics/object-list/configuration-of-the-list-view.md). Active [filtering of the object list](../basics/object-list/navigation-and-filtering.md) is **not** observed during export.

[![object-list](../assets/images/en/consolidate-data/csv-data-export/1-csv-de.png)](../assets/images/en/consolidate-data/csv-data-export/1-csv-de.png)

List Categories
---------------

The CSV export currently supports many [list categories](../glossary.md) (multi value). The entries and [attributes](../glossary.md) that are shown in their list are offered as download when pressing the **Export as CSV** button. The attribute names are used as column titles.

[![list-categories](../assets/images/en/consolidate-data/csv-data-export/2-csv-de.png)](../assets/images/en/consolidate-data/csv-data-export/2-csv-de.png)

Reports
-------

Also the [report manager](../evaluation/report-manager.md) provides the function for export into CSV format. Use the **CSV** button in a report to activate the function.

[![reports](../assets/images/en/consolidate-data/csv-data-export/3-csv-de.png)](../assets/images/en/consolidate-data/csv-data-export/3-csv-de.png)

CSV-Format
----------

CSV files are simple text files in which comma-separated columns are stored in each row. In this case a semicolon is used as the column separator. The data are encoded in Unicode (UTF-8).

Microsoft Excel

In some cases it may happen that Microsoft Excel doesn't display the data in the exported CSV file correctly. Especially encoding errors can be noticed. In order to prevent this, the CSV file shouldn't be opened directly but imported first:

1.  Export and save CSV file
2.  Open Excel
3.  Click on **From text** in the **Data** tab
4.  Open CSV file
5.  Set the source of the file to **65001 : Unicode (UTF-8)** in the dialog of the **Text conversion wizard  
    **
6.  Click **Next**
7.  Select the **Semikolon** checkbox to choose a separator
8.  Click **Complete**