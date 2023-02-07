Many data can be exported directly from the [IT documentation](/display/en/Glossary) in CSV format in order to be processed, for example, with a spreadsheet.

**Contents**

*   1[List Categories](#CSVDataExport-ListCategories)
*   2[Reports](#CSVDataExport-Reports)
*   3[CSV-Format](#CSVDataExport-CSV-Format)

Object List

Objects and their attributes can be exported via the [object list](https://i-doit.atlassian.net/wiki/pages/viewpage.action?pageId=59408567) by clicking the `**Export as CSV**`  button in the action bar. The columns correspond to the attributes [configured in the list view](https://kb.i-doit.com/pages/viewpage.action?pageId=61014331). Active [filtering of the object list](https://kb.i-doit.com/pages/viewpage.action?pageId=61014333) is **not** observed during export.

![](/download/attachments/41844767/image2017-3-22%2015%3A26%3A17.png?version=1&modificationDate=1493031904896&api=v2)

List Categories
---------------

The CSV export currently supports many [list categories](/display/en/Glossary) (multi value). The entries and [attributes](/display/en/Glossary) that are shown in their list are offered as download when pressing the **`Export as CSV`** button. The attribute names are used as column titles.

![](/download/attachments/41844767/kontaktzuweisung.png?version=1&modificationDate=1493031907429&api=v2)

Reports
-------

Also the [report manager](https://kb.i-doit.com/display/en/Report+Manager) provides the function for export into CSV format. Use the `**CSV**` button in a report to activate the function.

![](/download/attachments/41844767/image2017-3-22%2015%3A36%3A17.png?version=1&modificationDate=1493031907468&api=v2)

CSV-Format
----------

CSV files are simple text files in which comma-separated columns are stored in each row. In this case a semicolon is used as the column separator. The data are encoded in Unicode (UTF-8).

Microsoft Excel

In some cases it may happen that Microsoft Excel doesn't display the data in the exported CSV file correctly. Especially encoding errors can be noticed. In order to prevent this, the CSV file shouldn't be opened directly but imported first:

1.  Export and save CSV file
2.  Open Excel
3.  Click on `**From text**` in the `**Data**` tab
4.  Open CSV file
5.  Set the source of the file to `**65001 : Unicode (UTF-8)**` in the dialog of the `**Text conversion wizard  
    **`
6.  Click `**Next**`
7.  Select the `**Semikolon**` checkbox to choose a separator
8.  Click `**Complete**`