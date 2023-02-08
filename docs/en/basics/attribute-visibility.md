The visibility of [attributes](/display/en/Attribute+Fields) can be configured in the [CMDB settings](/display/en/CMDB+Settings) starting with [i-doit version 1.19](/display/en/Release+Notes+1.19).  
It is possible to hide certain attributes in [categories](/display/en/Categories+and+Attributes) and/or on the [overview page of object types](/display/en/Object+Types).

The configured visibility is applied to all users.

![](/download/attachments/127140159/image2022-9-5_17-22-11.png?version=1&modificationDate=1662392216966&api=v2&effects=drop-shadow)

**Table of contents**

*   1[Set rights](#Attributevisibility-Setrights)
*   2[Usage](#Attributevisibility-Usage)

Set rights
----------

[The rights](/display/en/Rights+Management) to view and edit attribute visibility can be assigned per user (group). For example, it is possible and often advisable that only certain user groups can hide attributes.

![](/download/attachments/127140159/image2022-9-5_17-24-45.png?version=1&modificationDate=1662392216954&api=v2&effects=drop-shadow)

Usage
-----

When the Attribute visibility is opened in edit mode, all categories (global, specific and custom) can be picked via a drop down field at the top. Next to this drop down field, there is a button “Add configuration”.

If this butten is used, the category is loaded as a block into the current interface.

This block contains a list of all attributes, used in the category. In the headline of this block, there are names for columns: "Category", “Visibility” and “Overview Page”.

Next to the category name there is a triangle pointing downwards when open and to the right when closed to collapse/minimize the block so that only the header remains visible.

At the far right of every block, there is a red X-icon which allows to remove the configuration for this category. When used, the block is removed.

By default, the visibility is activated for all attributes. “Visible”![](/download/attachments/127140159/image2022-9-5_17-30-47.png?version=1&modificationDate=1662392216907&api=v2). In this state, the button is green and labeled “Visible”. When clicked, the button changes to grey and is labled “Hidden”![](/download/attachments/127140159/image2022-9-5_17-31-6.png?version=1&modificationDate=1662392216897&api=v2).

**Object title**, **Condition** and **CMDB-Status cannot** be hidden. A note is telling “Cannot be hidden in the corresponding columns.

If an attribute is hidden, it is no longer shown in the category for all objects (of all object types). Furthermore, the second option is automatically disabled.

If an attribute is set to hidden but it was defined as mandatory via the validation settings, the user get’s a information (popup) when hitting the save button:

Popup

_The following attributes are defined as mandatory:_

_\[LIST OF ALL EFFECTED ATTRIBUTES\]_

_If you hide them from the your interface, their mandatory status will be removed. Do you want to continue?”_

A yes/no selection allows to confirm/discard these changes.

The last column allows to only hide the picked attributes from overview pages but in the regular categories, these attributes are still shown. If an attribute is hidden in the category already, the selection here is disabled.

![](/download/attachments/127140159/image2022-9-5_17-36-27.png?version=1&modificationDate=1662392216882&api=v2&effects=drop-shadow)