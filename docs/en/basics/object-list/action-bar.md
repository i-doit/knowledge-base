---
title: Action bar
description: "Above an object list is the action bar, through which various actions can be performed."
icon:
status:
lang: en
---

# Action bar

Above an [object list](index.md) is the action bar, through which various actions can be performed.

[![create-object](../../assets/images/de/grundlagen/aktionsleiste/1-al.png)](../../assets/images/de/grundlagen/aktionsleiste/1-al.png)

## Creating an object

When creating a new object, various options are available:

-   **New** or **New object** creates a new object that can be edited via forms
-   **New object from template** switches to the dialog where one or more objects can be created from a [template](../../efficient-documentation/templates.md)
-   **Create new template** is similar to the first option, but the [condition](../life-and-documentation-cycle.md) **Template** is preselected, so that after saving the object becomes a [template](../../efficient-documentation/templates.md).

[![Create-object](../../assets/images/de/grundlagen/aktionsleiste/2-al.png)](../../assets/images/de/grundlagen/aktionsleiste/2-al.png)

## Editing an object

To edit an object, select it via the checkbox and click the **Edit** button. If you select multiple objects, the [list editing](../../efficient-documentation/list-editing.md) starts.

[![Edit-object](../../assets/images/de/grundlagen/aktionsleiste/3-al.png)](../../assets/images/de/grundlagen/aktionsleiste/3-al.png)

## Duplicating an object

To [copy an object with its attributes](../../efficient-documentation/duplicate-objects.md), use the **Duplicate** button.

## Archiving, marking as deleted, restoring or irrevocably deleting an object

To change the [condition](../life-and-documentation-cycle.md) of one or more objects or to irrevocably delete them, use the buttons **Archive**, **Delete**, **Restore**, **Purge** or **Quickpurge**.

## Print view

Via the **Print view** button, a popup opens with a print-optimized view of the list. The list is supplemented with attributes displayed on the overview page of the respective object.

[![print-view](../../assets/images/de/grundlagen/aktionsleiste/4-al.png)](../../assets/images/de/grundlagen/aktionsleiste/4-al.png)

!!! success "Web browser print preview"
    The web browser in use can also generate a print view. Unnecessary elements of the Web GUI are not displayed:

    *   Firefox: **File → Print Preview**
    *   Chrome: **Menu → Print...** or **Ctrl+P**

## Exporting the object list as a CSV file

You can download the displayed object list via the **Export as CSV** button as a [CSV file](../../consolidate-data/csv-datenexport.md) and process it further with third-party applications. If you want to prevent the object ID from appearing next to the title in the CSV file, enable the option **Remove object IDs from CSV export of lists** under [Administration → [Tenant name] Administration → Settings for [Tenant name] → CMDB](../../administration/management/tenant-management/tenant-settings.md#cmdb).

## Link to this page

Via the **Link to this page** button, you reload the object list. The button is also useful for obtaining the unique URL -- this should match the URL displayed in the browser's address bar.

## Switching condition

To display only objects of a specific [condition](../life-and-documentation-cycle.md), select the desired condition via the drop-down menu on the right side of the action bar. In parentheses, you see how many objects of this type are in each condition. By default, i-doit shows the condition **Normal**. When you switch the condition, i-doit saves this selection -- it then applies to all object lists.

[![switch-condition](../../assets/images/de/grundlagen/aktionsleiste/5-al.png)](../../assets/images/de/grundlagen/aktionsleiste/5-al.png)

You can activate the template filter in object lists in the [Administration](../../administration/management/tenant-management/tenant-settings.md#templates) area.

[![Activate Template](../../assets/images/de/grundlagen/aktionsleiste/6-al.png)](../../assets/images/de/grundlagen/aktionsleiste/6-al.png)
