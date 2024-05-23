# Report Manager 

The reporting system is a useful instrument to gather, process and send data to a third party. Therefore _i-doit_ possesses a report manager which can process all data from the [IT documentation](../glossary.md) completely.

Overview
--------

You can access the report manager via **Extras → Report Manager** in the in the main navigation section. On the left side of the navigation tree the items **Reports**, **Online repository** and **Views** are displayed. In the following text, these items are described in greater detail. If the report manager or the items in the navigation tree only appear incompletely or do not appear at all, this is due to missing permissions.

[![Overview](../assets/images/en/evaluation/report-manager/1-rm.png)](../assets/images/en/evaluation/report-manager/1-rm.png)

Evaluate a Report
-----------------

Created reports can be found in the **Reports** item. When the [setup of _i-doit_](../installation/manual-installation/setup.md) hast just been finished, there will not be any reports in this section yet.

[![Reports](../assets/images/en/evaluation/report-manager/2-rm.png)](../assets/images/en/evaluation/report-manager/2-rm.png)

Upon clicking on a report in the list, this report will be executed with the current data. In _i-doit_ the results list of a report is set out in tabular from. Reports are always focused on objects and their attributes. For each line of results, the focus is on a main object and details of any attributes and relations to other objects may be indicated. By clicking a line the corresponding object will be loaded.

[![Reports](../assets/images/en/evaluation/report-manager/3-rm.png)](../assets/images/en/evaluation/report-manager/3-rm.png)

The table provides various functionalities (sorting and filtering of columns, pagination). Furthermore, reports can be exported into various formats (plain text, CSV, XML and PDF). Export to CSV format is recommended for further processing in spreadsheet software.

An object of the type **Object group** can be created from a report. The objects from the report are assigned to the category of the same name in a static way. It is also possible to create an object of the type **Object group** with dynamic object assignment. To do so, select the corresponding option in the **Type** category and choose a report. From now on this object group always contains the up-to-date list of objects which are given as results by the assigned report. This happens in runtime.

Categorize Reports
------------------

Reports can be categorized. They will be associated with the **Global** category by default which is always available and cannot be deleted. The advantage of categorizing is in the permissions concept: You can set permissions for access separately for each category. New categories can be created and existing ones can be edited via the **Categories** item on the reports page. For this purpose, the optional description field can be helpful.

[![Categories](../assets/images/en/evaluation/report-manager/4-rm.png)](../assets/images/en/evaluation/report-manager/4-rm.png)

Check permissions

If it is impossible to create or edit report categories, it is advisable to check the permissions for this and to make sure that the currently logged in user is authorized and has the corresponding permissions.

Create or Edit Reports
----------------------

Reports can be copied. To do so, mark a report and click the **Duplicate** button. You can delete a report via the **Purge** button. This step is irreversible.

[![Duplicate](../assets/images/en/evaluation/report-manager/5-rm.png)](../assets/images/en/evaluation/report-manager/5-rm.png)

There are two ways to create a report, which will be further explained in the following.

### Query Builder

The query builder provides a graphical interface to create a new report or to edit an existing one. The editor is opened with the **New** button. Alternatively, it can be found next to the button in the drop-down field as the **query builder** button. To edit an existing report, select the checkbox next to the report and click one of the buttons mentioned above.

[![query builder](../assets/images/en/evaluation/report-manager/6-rm.png)](../assets/images/en/evaluation/report-manager/6-rm.png)

The title and category are essential. In addition to this, it is often helpful to enter a short description.

You can test the report with the **Check** button. A maximum of 25 results is displayed in a pop-up window.

#### Advanced Options

[![Advanced Options](../assets/images/en/evaluation/report-manager/7-rm.png)](../assets/images/en/evaluation/report-manager/7-rm.png)

The following advanced options are available.

| Option | Description |
| --- | --- |
| **Show HTML** | If the option is set to Yes, HTML is also displayed in reports. |
| **Grouped multivalue presentation** | This option groups multivalue entries to an object one below the other. |
| **Show objects with empty assignments?** | This option refers to sub-queries of objects that are associated which each other. Should the attribute representing this assignment be empty, i.e. that no object is related, the result will be empty when the option is set to **No**. Otherwise the cell in the result will be empty. |
| **Display relation objects?** | There is a relation object for each relation between two objects. When you select **Yes**, the relation object will also be shown in the result. |
| **Sorting** | Some selected attributes can be sorted automatically as soon as the report is executed. With this option you can additionally choose whether you want to sort in ascending or descending order. |
| **Status filter for multivalue categories** | Should archived, deleted, normal, unfinished or all multivalue entries from categories be displayed? |

#### Output

[![Output](../assets/images/en/evaluation/report-manager/8-rm.png)](../assets/images/en/evaluation/report-manager/8-rm.png)

The **Output** area provides a possibility to define the columns of the results list. Select the desired attributes from the three category types **global**, **specific** and **custom**. Each attribute defines a column. You can set the order of the rows per drag and drop.

Some selected attributes can be sorted automatically as soon as the report is executed. For this you can use the radio button next to the selected attribute. If no attribute is selected, the object ID will be the sort key.  

More attributes of the associated object can be chosen via the shown magnifier when an object reference is selected as attribute. For this, another query is opened when you click on the magnifier, following the principle described above. Of course these sub-queries can also be made into sub-queries themselves (recursive).

Additionally, you have the following options:

#### Conditions

[![Conditions](../assets/images/en/evaluation/report-manager/9-rm.png)](../assets/images/en/evaluation/report-manager/9-rm.png)

Any desired conditions can be stated using the **Conditions** item. In order to check for a particular attribute, this attribute is selected together with the matching category. After this, the logical query will be built: Which value does the attribute need to match (or not)? Typical statements such as =, !=, <, > etc. are possible here and conform to the field types of the attribute. The selection also conforms to the selected attribute.

Simple nestings using _and_ or _or_ are possible by setting additional conditions using the + button and condition blocks. Conditions are removed using the **-** button. Empty condition blocks are removed automatically.

Conditions can be set for attributes of objects being in relation by choosing the attribute with the object relation and setting the condition to **Linked attribute**. After that, more conditions can be set in additional condition blocks.

### SQL Editor

Every report can be created or edited in the SQL editor – including the ones that are created in the query builder. Starting from the **Reports** overview page either click the drop-down field next to **New** or select an existing report and click the drop-down field next to **Edit** and choose the **SQL editor**.

Switch between query and SQL editor

When you created or edited a report using the SQL editor, then any following editing via the query builder will not be possible anymore. Background: In the SQL editor the whole spectrum of SQL is available. Since the query builder is limited to a subset of SQL (which is sufficient in most cases) the created query could be destroyed due to this difference.

[![SQL editor](../assets/images/en/evaluation/report-manager/10-rm.png)](../assets/images/en/evaluation/report-manager/10-rm.png)

The query is written in SQL in the form field **SQL query**. Knowledge of the database structure of _i-doit_ is required for this. It is important to always query objects and to select the ID of the object as the first (invisible) column:

    SELECT obj_main.isys_obj__id AS '__id__' FROM isys_obj AS obj_main;

The column names can be entered in a multilingual way and will be translated automatically by _i-doit_ in realtime:

    obj_main.isys_obj__title AS 'LC__UNIVERSAL__TITLE###1'

!!! success Design complex reports

    The following approaches are useful for designing complex reports that utilize many features of SQL:

    1.  Create the report using the query builder (as far as possible)   
    2.  Copy the report  
    3.  Edit the copy using the SQL editor
    
    This has the advantage that there is no need to know the database structure of _i-doit_ and that the prepared report can still be edited using the query builder.

Export/Import reports
---------------------

Reports can also be exported and imported. It is possible to select the corresponding report via the checkbox and export it via the button at the top of the list into a file. This file can be imported into another installation or another tenant to be available there. If this report was created via query builder, it can also be edited with the query builder in the new instance.

When trensfering a report, please note that the conditions and output refering individual/custom content (i.e. a specific object ID or a custom category) might have to be edited, because the result of the report might differ from the expectations.

Online Repository
-----------------

Some previously created reports are already available for download on the internet. These can be executed directly or saved locally via the **Online repository** item. An internet connection is required for this.

[![Online repository](../assets/images/en/evaluation/report-manager/11-rm.png)](../assets/images/en/evaluation/report-manager/11-rm.png)

Report Views
------------

**Report views** provide additional features and views for the reports mentioned above. New ones cannot be created, existing ones cannot be edited or deleted.

[![Report views](../assets/images/en/evaluation/report-manager/12-rm.png)](../assets/images/en/evaluation/report-manager/12-rm.png)

Selection of useful **Report views**:

*   **QR codes**: Processing and printing of multiple labels simultaneously which can also contain a QR code as well as additional information and a logo.
*   **Devices in a location (list format)**
*   **Network connections**
*   **Open cable connections**
    

[![Report views](../assets/images/en/evaluation/report-manager/13-rm.png)](../assets/images/en/evaluation/report-manager/13-rm.png)

Automatic Export of Reports
---------------------------

You can export existing reports automatically as a file without needing to intervene manually. Use the command line tool of _i-doit_, the [controller](../automation-and-integration/cli/index.md), for this purpose. The matching controller handler is report. When the controller is executed without further statements, the help will appear:

    sudo -u www-data php console.php report-export --help
 
    Usage:
    report-export [options]
    
    Options:
    -r, --reportId=REPORTID              ID of the report
    -d, --exportPath=EXPORTPATH          Path to export the report into
    -f, --exportFilename=EXPORTFILENAME  File name of export file, without extension (e.g. .pdf).
                                        Default is the title of the report
    -t, --exportFileType=EXPORTFILETYPE  File Type of the export. Possible options: csv, txt, pdf, xml [default: "csv"]
    -u, --user=USER                      User
    -p, --password=PASSWORD              Password
    -i, --tenantId=TENANTID              Tenant ID [default: 1]
    -c, --config=CONFIG                  Config File
    -h, --help                           Display this help message
    -q, --quiet                          Do not output any message
    -V, --version                        Display this application version
        --ansi                           Force ANSI output
        --no-ansi                        Disable ANSI output
    -n, --no-interaction                 Do not ask any interactive question
    -v|vv|vvv, --verbose                 Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
    
    Help:
    Executes an i-doit report and saves it to a file as CSV, TXT, PDF or XML

For example, the automation can be carried out by a cron job.

!!! info "Report-based Notification"

    For reports that are positive and get results, _i-doit_ can send matching [e-mails](./notifications.md).

Assign Permissions
------------------

You can assign permissions for the report manager to users and user groups (represented in _i-doit_ by the object types **Persons** and **Person groups**). With **Administration → Authorization system → Rights → Report manager** you can assign the following permissions:

*   **Create new reports**
*   **Online repository**
*   **Report views**
*   **Categories**
*   **Reports in categories**
*   **Reports**
    

[![Assign Permissions](../assets/images/en/evaluation/report-manager/14-rm.png)](../assets/images/en/evaluation/report-manager/14-rm.png)