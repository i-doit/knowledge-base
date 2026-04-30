---
title: Complex Reports
description: "The Report Manager already allows you to generate many useful reports via the query editor."
icon:
status:
lang: en
---
# Complex Reports

The Report Manager already allows you to generate many useful reports via the query editor. For more complex cases, the underlying SQL can be edited. This lets you use MySQL/MariaDB-native functions, for example to query time intervals.

Preparation
------------

The required knowledge about [reporting](../evaluation/report-manager.md) and the [database structure of i-doit](../software-development/database-model/index.md) can already be found in the corresponding articles. Good knowledge of SQL and the SQL functions provided by MySQL/MariaDB is clearly an advantage.

Time Intervals
--------------

A common requirement for a report is to get information about a specific time period. i-doit already provides the necessary fields with date entries, for example when an [object](../basics/it-documentation-structure.md) was last modified or when a maintenance contract expires. The query editor in the Report Manager can address these fields, but only with fixed date values: Which objects have been modified since 01/01/2016? However, the date should often be relative to the current time: Which objects have been modified this month? This does not specify which month is meant, but rather assumes the month in which the report is executed.

To generate such a report, we first create a new report with the query editor. For output, we add for example [object title](../basics/unique-references.md), [object type](../basics/it-documentation-structure.md), date of last change, and the name of the editing person.

[![Query editor](../assets/images/de/anwendungsfaelle/komplexe-reports/report_changes_abfrage-editor.png)](../assets/images/de/anwendungsfaelle/komplexe-reports/report_changes_abfrage-editor.png)

We save this report. Then we duplicate it and give the duplicate a descriptive name like "Modified objects this month".

!!! info "Post-editing SQL"

    We duplicate the report because it can no longer be opened with the query editor after the SQL has been edited.

We then edit the duplicate with the SQL editor and extend the WHERE clause:

```sql
    SELECT
    obj_main.isys_obj__id AS '__id__',
    obj_main.isys_obj__title AS 'LC__UNIVERSAL__TITLE###1',
    j2.isys_obj_type__title AS 'LC__REPORT__FORM__OBJECT_TYPE###1',
    obj_main.isys_obj__updated AS 'isys_cmdb_dao_category_g_global::dynamic_property_callback_changed::isys_obj__updated::LC__CMDB__LAST_CHANGE',
    obj_main.isys_obj__updated_by AS 'LC__CMDB__LAST_CHANGE_BY###1'

    FROM isys_obj AS obj_main
    INNER JOIN isys_cmdb_status AS obj_main_status ON obj_main_status.isys_cmdb_status__id = obj_main.isys_obj__isys_cmdb_status__id
    LEFT JOIN isys_obj_type AS j2 ON j2.isys_obj_type__id = obj_main.isys_obj__isys_obj_type__id
    LEFT JOIN isys_catg_global_list AS j3 ON j3.isys_catg_global_list__isys_obj__id = obj_main.isys_obj__id

    WHERE j2.isys_obj_type__const != 'C__OBJTYPE__RELATION' AND
    YEAR(obj_main.isys_obj__updated) = YEAR(NOW()) AND MONTH(obj_main.isys_obj__updated) = MONTH(NOW());
```

To narrow down _this_ month as the time interval, we use the SQL functions `NOW()`, `YEAR()`, and `MONTH()`. We apply these to the modification date, which is stored in the table column `obj_main.isys_obj__updated`. Additionally, we exclude all [relationship objects](../basics/object-relationships.md) with `j2.isys_obj_type__const != 'C__OBJTYPE__RELATION'`.

[This and further examples for querying time intervals](http://stackoverflow.com/questions/5293189/select-records-from-today-this-week-this-month-php-mysql) can be found, for example, in this Stackoverflow question.
