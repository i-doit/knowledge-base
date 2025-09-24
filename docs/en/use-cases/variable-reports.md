---
title: Variable report
description: Variable report
icon:
status:
lang: en
---

## Introduction

Variable reports can be used to display object-specific information, unlike normal reports, which always output static results.
The object information can be viewed **backwards** using variable reports. For example, you can go from object A to object B and then back again from object B to object A.

## Use-Case

Let's assume that department printers are defined in the organization. Rooms **1.01** to **1.07** use **HQ Staff Printer 01**, rooms **1.08** to **1.11** use **HQ Staff Printer 02**.
A variable report is used to track which printer is assigned to which room, both from the rooms and from the printer objects.

## Custom category Department printer

In order to assign the printers to the respective rooms, we create a custom category called **Department Printer**.

This category needs to be assigned to the [object type](../basics/structure-of-the-it-documentation.md#object-type) **Printer** and as a [single-value category](../basics/structure-of-the-it-documentation.md#single-value-category). The [attribute](../basics/structure-of-the-it-documentation.md#attribute) **Department printer for** is added as **Object-Relation (Several Objects)** with the addition **Share access**.

[![Object-Relation](../assets/images/en/use-cases/variable-reports/1-vr.png)](../assets/images/en/use-cases/variable-reports/1-vr.png)

Then open the object **HQ Staff Printer 01**. Now you can select the assigned rooms in the **Department printer** category.

[![Printer](../assets/images/en/use-cases/variable-reports/2-vr.png)](../assets/images/en/use-cases/variable-reports/2-vr.png)

The result in the category is shown in the following picture.

[![category](../assets/images/en/use-cases/variable-reports/3-vr.png)](../assets/images/en/use-cases/variable-reports/3-vr.png)

You can also visualize the result with the [CMDB explorer](../evaluation/cmdb-explorer/index.md).

[![CMDB explorer](../assets/images/en/use-cases/variable-reports/4-vr.png)](../assets/images/en/use-cases/variable-reports/4-vr.png)

But when you have a look at room **1.05** now, how can you find out which printer is assigned to this room? For this purpose, you need a "mirrored view" with which you can see which printer is related to this room. The variable report provide a good solution for such context-related queries.

To achieve this, you set up a [report](../evaluation/report-manager.md) and another custom category. First, you create the report **Assigned department printer**. Select some significant **attributes** regarding the printers for the **Output**. The query builder provides the possibility to set a **Placeholder** for all links which generate relations under **Conditions**.

In our case this means: The report "searches" for those objects in which the [object ID](../basics/unique-references.md) of the currently selected object is listed in the custom category **Department printer** in the attribute **Department printer for**. But what is the selected object? There is no selected object in the context of the report manager.  This turns the report into a variable report.

[![Report](../assets/images/en/use-cases/variable-reports/5-vr.png)](../assets/images/en/use-cases/variable-reports/5-vr.png)

Therefore, an object must always be selected in order to populate the report. In this case you can achieve this by creating a category for the report which executes the report within an object. This is called **Department**, assigned to the object **Room** and defined as single-value category. There also is an unnamed attribute with the **Field type Report**. Under **Addition** you can select the created report

[![Field type Report](../assets/images/en/use-cases/variable-reports/6-vr.png)](../assets/images/en/use-cases/variable-reports/6-vr.png)

The report ID is contained in the overview of the already defined reports.

[![Field type Report](../assets/images/en/use-cases/variable-reports/7-vr.png)](../assets/images/en/use-cases/variable-reports/7-vr.png)

Now the new category is available in room objects. It always generates the report for the object in which the user currently is. By this means, you get a mirrored view of the relation to the department.

[![Field type Report](../assets/images/en/use-cases/variable-reports/8-vr.png)](../assets/images/en/use-cases/variable-reports/8-vr.png)
