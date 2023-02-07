**Contents**

*   1[Accessing the Configuration](#ConfigurationoftheListView-AccessingtheConfiguration)
*   2[Attribute selection](#ConfigurationoftheListView-Attributeselection)
*   3[Presort Columns](#ConfigurationoftheListView-PresortColumns)
*   4[Affecting Filtering](#ConfigurationoftheListView-AffectingFiltering)
*   5[Different Ways to Open an Object](#ConfigurationoftheListView-DifferentWaystoOpenanObject)
*   6[Reset Configuration](#ConfigurationoftheListView-ResetConfiguration)
*   7[Set Configuration as Default](#ConfigurationoftheListView-SetConfigurationasDefault)
*   8[Assign the Configuration to Other Users](#ConfigurationoftheListView-AssigntheConfigurationtoOtherUsers)
*   9[Saving the Configuration](#ConfigurationoftheListView-SavingtheConfiguration)
*   10[Authorization to Edit the List View](#ConfigurationoftheListView-AuthorizationtoEdittheListView)

You can configure the view of the [object lists](/display/en/Object+List) individually per list and per user.

Accessing the Configuration
---------------------------

You can reach the configuration for the corresponding object list with the ![](/download/attachments/61014331/table_edit.png?version=1&modificationDate=1485958264873&api=v2) button in the [navigation and filter bar](/display/en/Navigation+and+Filtering). Another possibility is the activation via **```Administration → User settings **``→ Object lists **`→`** [Object type]``**```**.

![](/download/attachments/61014331/image2017-2-1%2015%3A13%3A16.png?version=1&modificationDate=1485958394998&api=v2&effects=drop-shadow)

Attribute selection
-------------------

Similar to the [report manager](/display/en/Report+Manager) you can define the columns via the selection of the category and the included attribute.

First you select a [global, specific](/display/en/Structure+of+the+IT+Documentation) or [custom](/display/en/Custom+Categories) category in the drop-down menu. You can filter the list of categories with a text field.

When selecting a category, the attributes which can be defined as a column are displayed. Add an attribute to the selected attributes with a click on the ![](/download/attachments/61014331/add.png?version=1&modificationDate=1485958534874&api=v2)button .

You can manipulate the list of selected attributes and change their order per drag and drop. The higher the object is in the selection, the further it is shown on the left of the object list. Remove an attribute with the ![](/download/attachments/61014331/delete.png?version=1&modificationDate=1485958534893&api=v2) button.

Restrictions

The following restrictions apply to the selection of attributes:

*   Not all attributes of all categories are available.
*   The number of attributes is limited to `**10**`.

Attributes originating from [list categories (multi-valued)](/display/en/Structure+of+the+IT+Documentation) can be presented in different ways. With the drop-down menu for the presentation of grouped data you can display the attributes either comma-separated in parallel or as a list one below each other. An example is the `**Host addresses**` attribute of the `**Host address**` category.

Tip

In the default installation of i-doit the [ID](/display/en/Unique+References) is displayed in each object list. As it is not relevant for conventional use, you can remove the corresponding column from the lists. This makes also sense for reasons of clarity.

Performance

Object lists with a great number of attributes may lead to a reduced performance. Should you observe a loss of performance, decrease the number of selected attributes or expand your [system resources](/display/en/System+Requirements).

Presort Columns
---------------

You can also specify with which sorting the object list is to be loaded. Beside some attributes you can also click a selection button. Determine if the selected attribute should be sorted in an ascending or descending order in the `**Sorting**` drop-down menu.

Without defined sorting the objects are sorted by their [ID](/display/en/Unique+References).

Restrictions

The following restrictions apply to the sorting of attributes:

*   Not all attributes can be sorted.
*   Subsequent sorting with the column headers is not possible with an object list with more than `**10.000**` objects. You can modify this [restriction](/display/en/Advanced+Settings).

Affecting Filtering
-------------------

You can prefilter an object list already during loading. Select the attribute in the drop-down menu for `**Default filter**` and enter the value for filtering in the text field on the right.  
If you do not want to select an attribute to be filtered each time in the list view, the filter can be set for all fields.

Different Ways to Open an Object
--------------------------------

Often a look at the object list is not enough to retrieve all required attributes. Therefore you can open an object via the list. You have two options:

*   Open the object by clicking the respective row in the object list. For this purpose, select the checkbox **`Activate, if you want to click the row, instead of the "objectlink", to open the object`**.
*   Open (and edit) the object with the selection of the checkbox of an object and the `**Edit**` button.

You can activate the first option for all users and all object lists simultaneously. The button **`Activate rowclick for object lists`** is under **`Administration → System tools → Cache / Database → Database.`**

Reset Configuration
-------------------

Each object list has a default configuration. If you want to reset the object list to its default settings, click the `**Restore default list configuration**` button.

Set Configuration as Default
----------------------------

When you want an object list to become the default list, click the `**Define as standard**` button in the field `**Define configuration as standard.**` Object lists which have already been changed by users are not affected. Consequently, this change concerns new users and users who still haven't changed an object list.

![](/download/attachments/61014331/image2017-2-1%2015%3A26%3A56.png?version=1&modificationDate=1485959215528&api=v2&effects=drop-shadow)

Assign the Configuration to Other Users
---------------------------------------

If you want to predefine a specific object list for other users, select it in the field `**Set configuration for other users**` via an [object browser](https://i-doit.atlassian.net/wiki/pages/viewpage.action?pageId=59408412). Afterwards, the selection is confirmed with the `**Define**` **`configuration`** button.

![](/download/attachments/61014331/image2017-2-1%2015%3A30%3A0.png?version=1&modificationDate=1485959399173&api=v2&effects=drop-shadow)

Saving the Configuration
------------------------

All changes of the configuration are accepted with the `**Save**` button.

Browser Cache

Should the list view not correspond to the configuration when activating the object list, it helps to empty the cache of the web browser.

Authorization to Edit the List View
-----------------------------------

With the [user rights management](/pages/viewpage.action?pageId=61014337) you can assign rights and determine which persons or person groups will be authorized to configure the list view and preset it for other users.