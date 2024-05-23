# Assignment of Categories to Object Types

Editing the data structure enables you to manage the assignments of [object type groups](../glossary.md), [object types](../glossary.md) and [categories](../glossary.md) comfortably and to adapt them to your requirements.

## Accessing Edit data structure

You can edit the data structure at **Administration → Data structure → Edit data structure**. No data is deleted when changes are made. The data structure is only relevant for the presentation of data.

[![Edit data structure](../assets/images/en/basics/assignment-of-categories-to-object-types/1-aoctot.png)](../assets/images/en/basics/assignment-of-categories-to-object-types/1-aoctot.png)

## Layout of the Data structure

The configuration of assignments is carried out via a separation into three columns. These columns represent your ==Object type-Groups==, ==Object types== and ==Categories==. In each column there is a dotted area per line allowing you to change the order per drag and drop.

[![Layout of the Data structure](../assets/images/en/basics/assignment-of-categories-to-object-types/2-aoctot.png)](../assets/images/en/basics/assignment-of-categories-to-object-types/2-aoctot.png)

## Adjusting Object type-Groups, Object types and Categories

In all three main fields you can change into the editing mode by pressing the :octicons-pencil-24: Adjust button for adjustments.<br>
Here you can edit the assignments of the respective object group, but you can also create and develop new groups, object types or categories.

[![Adjusting Object type-Groups, Object Types and Categories](../assets/images/en/basics/assignment-of-categories-to-object-types/4-aoctot.png)](../assets/images/en/basics/assignment-of-categories-to-object-types/4-aoctot.png)

## Editing the Assignments

You start editing in the left column, which is the column for object type-Groups. Here you can select the object type-Groups for which you want to adjust the object type assignment. Click on the corresponding group so that the middle column is activated. In case you don't need the groups, you can hide them by using the checkboxes.<br>
When a group has been selected and the middle column is active, you can determine which object types are assigned to the corresponding group. Object types that are grayed out are already assigned to other groups, but can still be reassigned.<br>
You can add custom groups at the bottom of the object group column. They have a pencil icon in their line so that you can edit or delete them at any time.<br>
The same applies to the object type column. Here you can create [custom object types](./custom-object-types.md). For an extensive configuration of an object type however, we recommend the use of the object type configuration.<br>
When clicking on an object type in the middle column, the right column is activated. Here you can see the categories assigned to the selected object type and you can change or remove the assignments via the checkboxes.<br>
The **Create custom categories** button will forward you directly to the function for creating [custom categories](./custom-categories.md).

## Edit data structure Profiles

You can save your current configuration in the form of a profile. For this purpose, enter a name for the profile at **Save current profile**. The profile will then appear in the available profiles. Here it is possible to activate a profile, delete it or to download it. Activate the checkbox of the desired profile and click **Load selected profile** to restore the assignment from the selected profile. By using the Download button you can save the profile as an XML file and upload it again by using the button **Choose file**, if required.

This feature is suitable to exchange configuration data between multiple _i-doit_ installations. A profile contains the following settings:

-   Object type-Groups with names, order and further attributes
-   Objekt types with names, assignments to Object type-Groups and other attributes from the object type configuration
-   Global, specific and custom categories assigned to each object type
-   Configuration of each custom category which is assigned to at least one object type

Accordingly, a profile contains the configuration of the IT documentation but no contents. Neither objects, category entries nor filled-in dialog fields are saved.

## Clear Configuration

If you wish to have a clear state to carry out the assignments from scratch, you can reset all assignments via the **Clear** button.
