**Contents**

*   1[Preparation](#ComplexReports-Preparation)
*   2[Time Intervals](#ComplexReports-TimeIntervals)

You can generate a lot of useful reports with the query builder of the report manager. For more complex cases, you can also edit the SQL behind it and in doing so you can utilize MySQL or MariaDB functions, for example, to query time intervals.

Preparation
-----------

The required knowledge around [Reporting](/display/en/Report+Manager) and the [database structure of i-doit](/display/en/Database+Model) can be found in the respective articles. A good knowledge of SQL or SQL functions provided by MySQL/MariaDB is clearly advantageous.

Time Intervals
--------------

Often a report is needed to provide information about a certain time interval. i-doit already supplies the required fields with date specifications, for example, when an [object](../basics/structure-of-the-it-documentation.md) was changed the last time or when a maintenance contract expires. The query builder of the report manager can address these fields but only with fixed date specifications: Which objects were changed since `2016-01-01`? However, often the date is required to be in relation to the current time: Which objects were changed during this month? You don't specify the month but it is assumed that the month during which the report is executed is the month in question.

In order to generate such a report we create a new report with the query builder first. For the query we add, for example, [object title](/display/en/Unique+References), [object type](../basics/structure-of-the-it-documentation.md), date of the last change and the name of the editing person.

![](/download/attachments/66355775/image2017-11-7%2013%3A48%3A7.png?version=1&modificationDate=1510061181128&api=v2&effects=drop-shadow)

We save this report and then we duplicate it and name the duplicate with a significant name, for example "Changed objects of this month".

SQL edit

We duplicate the report as it cannot be opened with the query builder anymore once the SQL has been edited.

Then we edit the duplicate with the SQL editor and extend the `WHERE` clause:

[?](#)

`SELECT`

`obj_main.isys_obj__id` `AS` `'__id__'``,`

`obj_main.isys_obj__title` `AS` `'LC__UNIVERSAL__TITLE###1'``,`

`j2.isys_obj_type__title` `AS` `'LC__REPORT__FORM__OBJECT_TYPE###1'``,`

`obj_main.isys_obj__updated` `AS` `'isys_cmdb_dao_category_g_global::dynamic_property_callback_changed::isys_obj__updated::LC__CMDB__LAST_CHANGE'``,`

`obj_main.isys_obj__updated_by` `AS` `'LC__CMDB__LAST_CHANGE_BY###1'`

`FROM` `isys_obj` `AS` `obj_main`

`INNER` `JOIN` `isys_cmdb_status` `AS` `obj_main_status` `ON` `obj_main_status.isys_cmdb_status__id = obj_main.isys_obj__isys_cmdb_status__id`

`LEFT` `JOIN` `isys_obj_type` `AS` `j2` `ON` `j2.isys_obj_type__id = obj_main.isys_obj__isys_obj_type__id`

`LEFT` `JOIN` `isys_catg_global_list` `AS` `j3` `ON` `j3.isys_catg_global_list__isys_obj__id = obj_main.isys_obj__id`

`WHERE` `j2.isys_obj_type__const !=` `'C__OBJTYPE__RELATION'` `AND`

`YEAR``(obj_main.isys_obj__updated) =` `YEAR``(NOW())` `AND` `MONTH``(obj_main.isys_obj__updated) =` `MONTH``(NOW());`

In order to narrow the time interval to _this_ month, we use the SQL functions `NOW()`, `YEAR()` and `MONTH()`. These are applied to the change date that is saved in the table column `bj_main.isys_obj__updated`. Additionally, we exclude all [relation objects](/display/en/Object+Relations) with `j2.isys_obj_type__const != 'C__OBJTYPE__RELATION'`.

You can find [this and other examples regarding the query of time intervals](http://stackoverflow.com/questions/5293189/select-records-from-today-this-week-this-month-php-mysql) on the Stackoverflow website.