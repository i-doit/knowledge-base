**Contents**

*   1 [Configuration of the Custom List View](#ConfigureObjectLists-ConfigurationoftheCustomListView)
*   2[Setting the Way of Opening an Object](#ConfigureObjectLists-SettingtheWayofOpeninganObject)
*   3[Selection of the Shown Attributes](#ConfigureObjectLists-SelectionoftheShownAttributes)
*   4[Set Standard Sorting](#ConfigureObjectLists-SetStandardSorting)
*   5[Saving and Restoring the Lists](#ConfigureObjectLists-SavingandRestoringtheLists)
*   6[Apply Configuration to other Users](#ConfigureObjectLists-ApplyConfigurationtootherUsers)
*   7[Set Configuration as Standard](#ConfigureObjectLists-SetConfigurationasStandard)

Each user can configure his own list views.

Configuration of the Custom List View
-------------------------------------

You can reach the configuration of the respective [object lists](/display/en/Object+List) via the icon next to the filter of the object list. Alternatively you can open `**Administration → User settings → Object lists → [Object type]**`, whereby **`[Object type]`** needs to be replaced by the object type whose list view you wish to customize.

The configuration of a list view is user specific. This means that these settings only apply to the user himself. The views of other users are not changed, unless one of them transfers these views to others. That particular user will need the corresponding permissions which can be set in the permission administration. This way the need for regular adjustments of users with different priorities (e.g., because they are in different departments) can be avoided.

![](/download/attachments/37355687/ConfigurationOfListViews1.png?version=1&modificationDate=1463647371779&api=v2&effects=drop-shadow)

Setting the Way of Opening an Object
------------------------------------

In the top left a checkbox marks the option allowing for opening an object by clicking its row. When deactivating this option, an object can be opened exclusively via the object link in the corresponding column.

Selection of the Shown Attributes
---------------------------------

The [attributes](/display/en/Glossary) shown in the list can be set via the two columns. Select the [category](/display/en/Glossary)  of which you want to see its contents in the list in the left area. Please ensure to select whether it is a global, [specific](/display/en/Glossary) or [custom category](/display/en/Custom+Categories) first. The category itself is chosen via the drop-down menu. Now all attributes that belong to this category are shown. You can add the attributes to the selected attributes via the green plus symbol, so they appear in the right column as well. The red minus symbol enables you to remove already selected attributes from the list view. You can adjust the hierarchy of the attributes in the right column via drag'n'drop. The uppermost attribute in this view can be found first in your list.

Set Standard Sorting
--------------------

You can find radio buttons in the area of the selected attributes for this list, which are used to determine by which attribute the list will be sorted. The `**Sort**` option is available above the selection of attributes. This way it is possible to adjust the sorting to ascending or descending order.

Saving and Restoring the Lists
------------------------------

As soon as your configuration meets your specifications, use the button `**Save**` to save the changes. If you already performed a configuration but wish to revert it to the default view, you can use the `**Reset list to default**` button. Do not forget to save this process by clicking the `**Save**` button. To see the configuration results you can go to the list view via the `**Go to list**` button.

Note

If you configure a list view and notice that the display does not match the configuration when loading the list the next time, please clear the cache of your browser to ensure that the display of the list is up-to-date.

Apply Configuration to other Users
----------------------------------

As long as you have the permissions, it is possible to allocate the current configuration of a list to other users of your i-doit installation, in the `**Allocate configuration to other users**` section. To do this, select the desired user via the object browser. Please note that your own configuration may be overwritten doing so.

Set Configuration as Standard
-----------------------------

You can adjust the standard view for lists of this object type via `**Set configuration as standard**`, as long as you possess the needed permissions for this. All users without custom configuration for this list will see the standard view set by you the next time they will open the list. Users having a custom view will keep their list. All users can of course still configure custom list views.

Note

Object lists with a great amount of attributes can lead to a diminished performance. If you find your performance to be decreasing, please reduce the amount of selected attributes or increase your [system rersources](/display/en/System+Requirements).

Tip

The object-ID is shown in every object list in the standard installation of _i-doit_. Since this is not relevant for regular use you can remove this column from the lists. This also improves transparency.