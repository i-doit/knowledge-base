# Attribute visibility

The visibility of [attributes](./attribute-fields.md) can be configured in the [CMDB settings](../system-administration/administration/data-view/hide-attributes.md) starting with [i-doit version 1.19](../version-history/release-notes/release-notes-1.19.md).<br>
It is possible to hide certain attributes in [categories](./categories-and-attributes.md) and/or on the [overview page of object types](./object-types.md).

The configured visibility is applied to all users.

[![Attribute visibility](../assets/images/en/basics/attribute-visibility/1-av.png)](../assets/images/en/basics/attribute-visibility/1-av.png)

## Set rights

[The rights](../efficient-documentation/rights-management/index.md) to view and edit attribute visibility can be assigned per user (group). For example, it is possible and often advisable that only certain user groups can hide attributes.

[![Set rights](../assets/images/en/basics/attribute-visibility/2-av.png)](../assets/images/en/basics/attribute-visibility/2-av.png)

## Usage

When the Attribute visibility is opened in edit mode, all categories (global, specific and custom) can be picked via a drop down field at the top. Next to this drop down field, there is a button "Add configuration".

If this butten is used, the category is loaded as a block into the current interface.

This block contains a list of all attributes, used in the category. In the headline of this block, there are names for columns: "Category", "Visibility" and "Overview Page".

Next to the category name there is a triangle pointing downwards when open and to the right when closed to collapse/minimize the block so that only the header remains visible.

At the far right of every block, there is a red X-icon which allows to remove the configuration for this category. When used, the block is removed.

By default, the visibility is activated for all attributes. "Visible" [![visible](../assets/images/en/basics/attribute-visibility/3-av.png)](../assets/images/en/basics/attribute-visibility/3-av.png). In this state, the button is green and labeled "Visible". When clicked, the button changes to grey and is labled "Hidden" [![hidden](../assets/images/en/basics/attribute-visibility/4-av.png)](../assets/images/en/basics/attribute-visibility/4-av.png).

**Object title**, **Condition** and **CMDB-Status cannot** be hidden. A note is telling "Cannot be hidden in the corresponding columns.

If an attribute is hidden, it is no longer shown in the category for all objects (of all object types). Furthermore, the second option is automatically disabled.

If an attribute is set to hidden but it was defined as mandatory via the validation settings, the user get's a information (popup) when hitting the save button:

!!! info "Popup"

    _The following attributes are defined as mandatory:_
    _\[LIST OF ALL EFFECTED ATTRIBUTES\]_
    _If you hide them from the your interface, their mandatory status will be removed. Do you want to continue?"_

A yes/no selection allows to confirm/discard these changes.

The last column allows to only hide the picked attributes from overview pages but in the regular categories, these attributes are still shown. If an attribute is hidden in the category already, the selection here is disabled.

[![Attribute visibility](../assets/images/en/basics/attribute-visibility/5-av.png)](../assets/images/en/basics/attribute-visibility/5-av.png)
