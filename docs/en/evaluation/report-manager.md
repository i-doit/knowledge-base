---
title: Report Manager
description: Report Manager
icon: report-manager
status:
lang: en
---

# Report Manager

The reporting system is a useful instrument to gather, process and send data to a third party. Therefore _i-doit_ possesses a report manager which can process all data from the [IT documentation](../glossary.md) completely.

## Overview

You can access the report manager via **Extras → Report Manager** in the in the main navigation section. On the left side of the navigation tree the items **Reports**, **Online repository** and **Views** are displayed. In the following text, these items are described in greater detail. If the report manager or the items in the navigation tree only appear incompletely or do not appear at all, this is due to missing permissions.

[![Overview](../assets/images/en/evaluation/report-manager/1-rm.png)](../assets/images/en/evaluation/report-manager/1-rm.png)

## Report-Special Add-on

The Report-Special add-on imports approximately 50 predefined reports. For more information about the add-on, please visit the [customer portal](../system-administration/customer-portal.md).

## Evaluate a Report

Created reports can be found in the **Reports** item. When the [setup of _i-doit_](../installation/manual-installation/setup.md) hast just been finished, there will not be any reports in this section yet.

[![Reports](../assets/images/en/evaluation/report-manager/2-rm.png)](../assets/images/en/evaluation/report-manager/2-rm.png)

Upon clicking on a report in the list, this report will be executed with the current data. In _i-doit_ the results list of a report is set out in tabular from. Reports are always focused on objects and their attributes. For each line of results, the focus is on a main object and details of any attributes and relations to other objects may be indicated. By clicking a line the corresponding object will be loaded.

[![Reports](../assets/images/en/evaluation/report-manager/3-rm.png)](../assets/images/en/evaluation/report-manager/3-rm.png)

The table provides various functionalities (sorting and filtering of columns, pagination). Furthermore, reports can be exported into various formats (plain text, CSV, XML and PDF). Export to CSV format is recommended for further processing in spreadsheet software.

An object of type **Object group** can be generated from a report. The objects from the report are statically assigned to the category of the same name. Alternatively, it is possible to create an object of type **Object group** whose object assignments are dynamic. To do this, select the appropriate setting in the **Type** category and select a report. From now on, this object group will always contain the current list of objects that the assigned report returns as a result. This happens at runtime.

## Categorize Reports

Reports can be categorized. By default, they are assigned to the **Global** category, which is available by default and cannot be deleted. The advantage of categorization lies in the authorization concept: For each category, you can specify who is allowed to access it. If you are on the Reports page, you can create new categories or edit existing ones via the **Categories** item. The optional description field is helpful here.

[![Categories](../assets/images/en/evaluation/report-manager/4-rm.png)](../assets/images/en/evaluation/report-manager/4-rm.png)

!!! note "Check permissions"
    If it is impossible to create or edit report categories, it is advisable to check the permissions for this and to make sure that the currently logged in user is authorized and has the corresponding permissions.

## Create or Edit Reports

Reports can be copied. To do so, mark a report and click the **Duplicate** button. You can delete a report via the **Purge** button. This step is irreversible.

[![Duplicate](../assets/images/en/evaluation/report-manager/5-rm.png)](../assets/images/en/evaluation/report-manager/5-rm.png)

There are two ways to create a report, which will be further explained in the following.

### Query Builder

The query editor provides a graphical interface for creating a new report or editing an existing one. It is accessed via the New button. Alternatively, the Query Editor button can be found next to this button in the drop-down field. If you want to edit an existing report, select the checkbox next to the report and click one of the buttons mentioned above.

[![query builder](../assets/images/en/evaluation/report-manager/6-rm.png)](../assets/images/en/evaluation/report-manager/6-rm.png)

The title and category are essential. It is also often helpful to provide a brief description. The report can be tested using the **Check** button. A maximum of 25 results are displayed in a pop-up window.

#### Advanced Options

[![Advanced Options](../assets/images/en/evaluation/report-manager/7-rm.png)](../assets/images/en/evaluation/report-manager/7-rm.png)

The following advanced options are available.

| Option                                      | Description                                                                                                                                                                                                                                                                               |
| ------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Show HTML**                               | If the option is set to Yes, HTML is also displayed in reports.                                                                                                                                                                                                                           |
| **Grouped multivalue presentation**         | This option groups multivalue entries to an object one below the other.                                                                                                                                                                                                                   |
| **Show objects with empty assignments?**    | This option refers to sub-queries of objects that are associated which each other. Should the attribute representing this assignment be empty, i.e. that no object is related, the result will be empty when the option is set to **No**. Otherwise the cell in the result will be empty. |
| **Keep description format**                 | Should the format of the description field be retained?                                                                                                                                                                                                                                   |
| **Display relation objects?**               | There is a relation object for each relation between two objects. When you select **Yes**, the relation object will also be shown in the result.                                                                                                                                          |
| **Sorting**                                 | Some selected attributes can be sorted automatically as soon as the report is executed. With this option you can additionally choose whether you want to sort in ascending or descending order.                                                                                           |
| **Status filter for multivalue categories** | Should archived, deleted, normal, unfinished or all multivalue entries from categories be displayed?                                                                                                                                                                                      |
| **Status filter for assigned objects**      | Should archived, deleted, normal, unfinished or all Objects from assignment categories be displayed?                                                                                                                                                                                      |

#### Output

[![Output](../assets/images/en/evaluation/report-manager/8-rm.png)](../assets/images/en/evaluation/report-manager/8-rm.png)

In the **Output** area, you can define the columns of the results list. To do this, select the desired attributes from the three category types **Global**, **Specific**, and **User-defined**. Each attribute defines a column. The order of the columns can be determined using drag and drop.

Some selected attributes can be sorted automatically when the report is executed. Use the radio box next to the selected attribute for this purpose. If no attribute is selected, the results are sorted by object ID.

If an object reference is selected as an attribute, additional attributes of the related object can be selected using the magnifying glass icon. Clicking on the magnifying glass opens another query based on the principle described above. These subqueries can of course be turned into subqueries themselves (recursively).

#### Conditions

[![Conditions](../assets/images/en/evaluation/report-manager/9-rm.png)](../assets/images/en/evaluation/report-manager/9-rm.png)

Any desired conditions can be stated using the **Conditions** item. In order to check for a particular attribute, this attribute is selected together with the matching category. After this, the logical query will be built: Which value does the attribute need to match (or not)? Typical statements such as =, !=, <, > etc. are possible here and conform to the field types of the attribute. The selection also conforms to the selected attribute.

Simple nestings using _and_ or _or_ are possible by setting additional conditions using the + button and condition blocks. Conditions are removed using the **-** button. Empty condition blocks are removed automatically.

Conditions can be set for attributes of objects being in relation by choosing the attribute with the object relation and setting the condition to **Linked attribute**. After that, more conditions can be set in additional condition blocks.

#### Updating reports after an update

i-doit updates may also change the query editor, resulting in queries being structured differently than before. To ensure that reports always use the current logic, it is necessary to update these queries. This can be done either via [Repair and cleanup](../system-administration/administration/tenant-management/repair-and-clean-up.md) or via a [CLI command](../automation-and-integration/cli/console/commands-and-options.md#report-refresher).

[![Update reports](../assets/images/de/auswertungen/report-manager/15-rm.png)](../assets/images/de/auswertungen/report-manager/15-rm.png)

### SQL Editor

Every report can be created or edited in the SQL editor - including the ones that are created in the query builder. Starting from the **Reports** overview page either click the drop-down field next to **New** or select an existing report and click the drop-down field next to **Edit** and choose the **SQL editor**.

!!! info "Switching between query editor and SQL editor"
    If a report is created or edited using the SQL editor, it cannot be edited subsequently using the query editor. Background: The SQL editor provides the full range of SQL functions. Since the query editor is limited to a subset of SQL (which is sufficient in most cases), this difference could destroy the query you have created.

[![SQL-editor](../assets/images/en/evaluation/report-manager/10-rm.png)](../assets/images/en/evaluation/report-manager/10-rm.png)

The query is written in SQL in the form field **SQL query**. Knowledge of the database structure of _i-doit_ is required for this. It is important to always query objects and to select the ID of the object as the first (invisible) column:

```sql
SELECT obj_main.isys_obj__id AS '__id__' FROM isys_obj AS obj_main;
```

The column names can be entered in a multilingual way and will be translated automatically by _i-doit_ in realtime:

```sql
obj_main.isys_obj__title AS 'LC__UNIVERSAL__TITLE###1'
```

!!! success Design complex reports
    The following approaches are useful for designing complex reports that utilize many features of SQL:

    1.  Create the report using the query builder (as far as possible)
    2.  Copy the report
    3.  Edit the copy using the SQL editor

    This has the advantage that there is no need to know the database structure of _i-doit_ and that the prepared report can still be edited using the query builder.

## Export/Import reports

Reports can also be exported and imported. It is possible to select the corresponding report via the checkbox and export it via the button at the top of the list into a file. This file can be imported into another installation or another tenant to be available there. If this report was created via query builder, it can also be edited with the query builder in the new instance.

When transferring a report, please note that the conditions and output referring individual/custom content (i.e. a specific object ID or a custom category) might have to be edited, because the result of the report might differ from the expectations.

## Online Repository

Some previously created reports are already available for download on the internet. These can be executed directly or saved locally via the **Online repository** item. An internet connection is required for this.

[![Online repository](../assets/images/en/evaluation/report-manager/11-rm.png)](../assets/images/en/evaluation/report-manager/11-rm.png)

## Report Views

**Report views** provide additional features and views for the reports mentioned above. New ones cannot be created, existing ones cannot be edited or deleted.

[![Report views](../assets/images/en/evaluation/report-manager/12-rm.png)](../assets/images/en/evaluation/report-manager/12-rm.png)

Selection of useful **Report views**:

*   **QR codes**: Processing and printing of multiple labels simultaneously which can also contain a QR code as well as additional information and a logo.
*   **Devices in a location (list format)**
*   **Network connections**
*   **Open cable connections**

[![Report views](../assets/images/en/evaluation/report-manager/13-rm.png)](../assets/images/en/evaluation/report-manager/13-rm.png)

## Automatic Export of Reports

You can export existing reports automatically as a file without needing to intervene manually. Use the command line tool of _i-doit_, the [controller](../automation-and-integration/cli/index.md), for this purpose. The matching controller handler is report. When the controller is executed without further statements, the help will appear:

```shell
sudo -u www-data php console.php report-export --help

Usage:
    report-export [options]

Options:
-r, --reportId=REPORTID              ID of the report
-d, --exportPath=EXPORTPATH          Path to export the report into
-f, --exportFilename=EXPORTFILENAME  File name of export file, without extension (e.g. .pdf). Default is the title of the report
-t, --exportFileType=EXPORTFILETYPE  File Type of the export. Possible options: csv, txt, pdf, xml [default: "csv"]
-u, --user=USER                      User
-p, --password=PASSWORD              Password
-i, --tenantId=TENANTID              Tenant ID [default: 1]
-c, --config=CONFIG                  Config File
-h, --help                           Display this help message
-q, --quiet                          Do not output any message
-V, --version                        Display this application version
--ansi                               Force ANSI output
--no-ansi                            Disable ANSI output
-n, --no-interaction                 Do not ask any interactive question
-v|vv|vvv, --verbose                 Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

Help:
    Executes an i-doit report and saves it to a file as CSV, TXT, PDF or XML
```

For example, the automation can be carried out by a cron job.

!!! info "Report-based Notification"
    For reports that are positive and get results, _i-doit_ can send matching [e-mails](./notifications.md).

## Assign Permissions

You can assign permissions for the report manager to users and user groups (represented in _i-doit_ by the object types **Persons** and **Person groups**). With **Administration → Authorization system → Rights → Report manager** you can assign the following permissions:

*   **Create new reports**
*   **Online repository**
*   **Report views**
*   **Categories**
*   **Reports in categories**
*   **Reports**

[![Assign Permissions](../assets/images/en/evaluation/report-manager/14-rm.png)](../assets/images/en/evaluation/report-manager/14-rm.png)

## Variable Reports

You can use [variable reports](../use-cases/variable-reports.md) to display object specific data, rather than static object data through a normal report.
