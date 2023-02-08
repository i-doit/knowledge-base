**Contents**

*   1[Custom Categories](#VariableReports-CustomCategories)
*   2[Mirrored View for Custom Category](#VariableReports-MirroredViewforCustomCategory)

  

Variable reports are very useful to customize your own i-doit installation for your individual needs.  

Custom Categories
-----------------

A lot of users already use the [custom categories](/display/en/Custom+Categories). One thing which characterizes the custom categories is the possibility to link [objects](/display/en/Structure+of+the+IT+Documentation).

To give an example: Say that your company uses printers which are assigned to certain offices. The rooms `**1.01**` to `**1.07**` use `**Printer A**`, rooms `**1.0**``**8**` to `**1.11**` use `**Printer B**`.

This can be documented with the custom category `**Department**`. This category is assigned to the [object type](/display/en/Structure+of+the+IT+Documentation) `**Printer**` and defined as [single-value category](/display/en/Structure+of+the+IT+Documentation), not as [list category ("Multi-Value")](/display/en/Structure+of+the+IT+Documentation). The `**Department**` [attribute](/display/en/Structure+of+the+IT+Documentation)  is added as `**Object-Relation (multiple selection)**` with the addition `**Share Access**`.  

![](/download/attachments/66356130/en_custom_category_department.png?version=1&modificationDate=1522315288886&api=v2&effects=drop-shadow)

Then change to the object `**Printer**`. Now you can select the assigned rooms in the **`Department`** category.

![](/download/attachments/66356130/en_custom_category_department_with_object_browser.png?version=1&modificationDate=1522315312332&api=v2&effects=drop-shadow)

The result in the category is shown in the following picture.

![](/download/attachments/66356130/en_custom_category_department_after_saving.png?version=1&modificationDate=1522315323601&api=v2&effects=drop-shadow)

You can also visualize the result with the [CMDB explorer](/display/en/CMDB+Explorer).

![](/download/attachments/66356130/en_cmdb_explorer_hq_printer.png?version=1&modificationDate=1522315334839&api=v2&effects=drop-shadow)

Mirrored View for Custom Category  

------------------------------------

But when you have a look at room `**1.05**` now, how can you find out which printer is assigned to this room? For this purpose, you need a mirrored view with which you can see which printer is related to this room. The variable reports provide a good solution for such context-related queries.

To this end, you set up a [report](/display/en/Report+Manager) and another custom category. First of all, you create the report `**Department-related hardware**`. Check the box `**Variable Report**` and select some significant attributes regarding the printers under `**Output**`.  

![](/download/attachments/66356130/en_report_department-related_hardware.png?version=1&modificationDate=1522315351554&api=v2&effects=drop-shadow)

The query builder provides the possibility to set a `**Placeholder**` for all links which generate relations under `**Conditions**`.

In our case this means: The report "searches" for those objects in which the [object ID](/display/en/Unique+References) of the currently selected object is listed in the custom category `**Department**` in the attribute **`Department`**. But what is the selected object? There is no selected object in the context of the report manager.

Therefore you always have to select an object to be able to fill out the report. You can achieve this by creating a category for the report which executes the report within an object. This is called `**Department**`, assigned to the object `**Room**` and defined as single-value category. There also is an unnamed attribute with the **`Field type Report`**. The ID of the above mentioned report is specified under `**Addition**`.  

![](/download/attachments/66356130/en_custom_category__department-related_hardware.png?version=1&modificationDate=1522315376398&api=v2&effects=drop-shadow)

The report ID is contained in the overview of the already defined reports.  

![](/download/attachments/66356130/en_reports_filtered_by_department.png?version=1&modificationDate=1522315387797&api=v2&effects=drop-shadow)

Now the new category is available in room objects. It always generates the report for the object in which the user currently is. By this means, you get a mirrored view of the relation to the department.

![](/download/attachments/66356130/en_custom_category_department-related_hardware_for_person_group.png?version=1&modificationDate=1522315401551&api=v2&effects=drop-shadow)