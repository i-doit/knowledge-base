**Contents**

*   1 [Accessing the Quick Configuration Wizard](#AssignmentofCategoriestoObjectTypes-AccessingtheQuickConfigurationWizard)
*   2[Layout of the Quick Configuration Wizard](#AssignmentofCategoriestoObjectTypes-LayoutoftheQuickConfigurationWizard)
*   3[Adjusting Object Type Groups, Object Types and Categories](#AssignmentofCategoriestoObjectTypes-AdjustingObjectTypeGroups,ObjectTypesandCategories)
*   4[Editing the Assignments](#AssignmentofCategoriestoObjectTypes-EditingtheAssignments)
*   5 [Profiles in the Quick Configuration Wizard](#AssignmentofCategoriestoObjectTypes-ProfilesintheQuickConfigurationWizard)
*   6[Clear Configuration](#AssignmentofCategoriestoObjectTypes-ClearConfiguration)

The Quick Configuration Wizard (QCW) enables you to manage the assignments of [object type groups](/display/en/Glossary), [object types](/display/en/Glossary) and [categories](/display/en/Glossary) comfortably and to adapt them to your requirements.

Accessing the Quick Configuration Wizard
----------------------------------------

You can find the Quick Configuration Wizard at `**Administration → CMDB Settings → Quick Configuration Wizard**`. All changes made in the Quick Configuration Wizard are applied immediately and don't have to be saved by pressing a button. No data is deleted when changes are made. The QCW is only relevant for the presentation of data.

![](/download/attachments/37355674/image2017-2-17%2013%3A55%3A36.png?version=1&modificationDate=1487337995998&api=v2)

Layout of the Quick Configuration Wizard
----------------------------------------

The configuration of assignments is carried out via a separation into three columns. These columns represent your object type groups, object types and categories. In each column there is a dotted area per line allowing you to change the order per drag and drop.

![](/download/attachments/37355674/image2016-10-27%2012%3A11%3A17.png?version=1&modificationDate=1487337996026&api=v2)

Adjusting Object Type Groups, Object Types and Categories
---------------------------------------------------------

In all three main fields you can change into the editing mode by pressing the ![](/download/attachments/37355674/image2016-10-13%2015%3A15%3A1.png?version=1&modificationDate=1487337996044&api=v2) button for adjustments.

Here you can edit the assignments of the respective object group, but you can also create and develop new groups, object types or categories.

![](/download/attachments/37355674/image2017-2-17%2014%3A3%3A23.png?version=1&modificationDate=1487337996056&api=v2)

Editing the Assignments
-----------------------

You start editing in the left column, which is the column for object type groups. Here you can select the object type group for which you want to adjust the object type assignment. Click on the corresponding group so that the middle column is activated. In case you don't need the groups, you can hide them by using the checkboxes.

When a group has been selected and the middle column is active, you can determine which object types are assigned to the corresponding group. Object types that are grayed out are already assigned to other groups, but can still be reassigned.

You can add custom groups at the bottom of the object group column. They have a pencil icon in their line so that you can edit or delete them at any time.

The same applies to the object type column. Here you can create [custom object types](/display/en/Custom+Object+Types). For an extensive configuration of an object type however, we recommend the use of the object type configuration.

When clicking on an object type in the middle column, the right column is activated. Here you can see the categories assigned to the selected object type and you can change or remove the assignments via the checkboxes.

The `**Create custom categories**` button will forward you directly to the function for creating [custom categories](/display/en/Custom+Categories).

Profiles in the Quick Configuration Wizard
------------------------------------------

You can save your current configuration in the form of a profile. For this purpose, enter a name for the profile at `**Save current profile**`. The profile will then appear in the available profiles in the right column. Here it is possible to activate the profile, delete it or to download it. Activate the checkbox of the desired profile and click `**Load**` to restore the assignment from the selected profile. By using the floppy disk icon you can save the profile as an XML file and upload it again by using the button `**Browse**`, if required. With the red X icon you can delete the selected profile.

This feature is suitable to exchange configuration data between multiple _i-doit_ installations. A profile contains the following settings:

*   Object type groups with names, order and further attributes
*   Objekt types  with names, assignments to object type groups and other attributes from the object type configuration
*   Global, specific and custom categories assigned to each object type
*   Configuration of each custom category which is assigned to at least one object type

Accordingly, a profile contains the configuration of the IT documentation but no contents. Neither objects, category entries nor filled-in dialog fields are saved.

Clear Configuration
-------------------

If you wish to have a clear state to carry out the assignments from scratch, you can reset all assignments via the `**Clear**` button.