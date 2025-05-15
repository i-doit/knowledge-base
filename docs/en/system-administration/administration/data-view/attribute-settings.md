# Attribute settings

The attribute settings can be found in the [Data-view](../index.md).
With this feature you can determine and administer mandatory fields. You can also specify extended content definitions for the respective mandatory fields and manage their visibility.

[![Attribute Settings](../../../assets/images/en/system-administration/administration/data-view/attribute-settings/as-1.png)](../../../assets/images/en/system-administration/administration/data-view/attribute-settings/as-1.png)

## Attribute visibility

The visibility of [attributes](../../../basics/attribute-fields.md) can be configures in the Attribute settings.
It is possible to hide or show certain attributes in [categories](../../../basics/categories-and-attributes.md) and/or on the [Overview page of object types](../../../basics/object-types.md).
To do this, click on **Edit** for the respective attribute name and select the desired setting under **Visibility**.

The configured visibility is applied to all users.

[![Attribute visibility](../../../assets/images/en/system-administration/administration/data-view/attribute-settings/as-2.png)](../../../assets/images/en/system-administration/administration/data-view/attribute-settings/as-2.png)

## Set rights

The [rights](../user-permissions.md) the right to view and edit attribute visibility can be assigned per user (group). For example, it is possible and often advisable that only certain user groups can hide attributes.

[![Set rights](../../../assets/images/en/system-administration/administration/data-view/attribute-settings/as-3.png)](../../../assets/images/en/system-administration/administration/data-view/attribute-settings/as-3.png)

## Usage

If an attribute is added using the **Add** button, all categories (global, specific and user-defined) can be selected. If this button is used, the category is added as the lowest entry.

To edit the settings, the pencil icon is used, with which the visibility and validation can be set. By default, the visibility is activated for all attributes<br>

[![button-displayed](../../../assets/images/en/system-administration/administration/data-view/attribute-settings/as-4.png)](../../../assets/images/en/system-administration/administration/data-view/attribute-settings/as-4.png)<br>
In this state, the visibility on the overview page is labelled **Visible**.
If you set the visibility to **Hidden**, the display is also adjusted<br>
[![button-hidden](../../../assets/images/en/system-administration/administration/data-view/attribute-settings/as-5.png)](../../../assets/images/en/system-administration/administration/data-view/attribute-settings/as-5.png)<br>

**Object title**, **Condition** and **CMDB-Status** can **not** be hidden. A note "Cannot be hidden" is displayed in the corresponding columns.

If an attribute is hidden, it is no longer shown in the category for all objects (of all object types).

<!-- If an attribute is set to hidden but it was defined as mandatory via the "attribute settings", the user get's a information (popup) when pressing the save button:

!!! info "Popup"

    _The following attributes are defined as mandatory:_
    _\[LIST OF ALL EFFECTED ATTRIBUTES\]_
    _If you hide them from the your interface, their mandatory status will be removed. Do you want to continue?"_

A yes/no selection allows to confirm/discard these changes. -->

The third column allows to only hide the picked attributes from overview pages but in the regular categories, these attributes are still shown. If an attribute is hidden in the category already, the selection here is disabled.

The last selection allows you to hide the selected attributes only on overview pages, but these attributes are still displayed in the regular categories.This is also labelled as such on the overview page:

[![button-on-overview-hidden](../../../assets/images/en/system-administration/administration/data-view/attribute-settings/as-6.png)](../../../assets/images/en/system-administration/administration/data-view/attribute-settings/as-6.png)

Last but not least, by selecting entries and clicking on **Remove**, you can delete unwanted entries.
