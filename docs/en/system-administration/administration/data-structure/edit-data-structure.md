# Edit Data structure

Here you can find configurations to alter the data structure of your tenant.

The configuration of assignments is carried out via a separation into three columns. These columns represent your ==Object type Groups==, ==Object types in== and ==Categories in==. In each column there is a ==dotted area== per line allowing you to change the order per drag and drop.

[![Layout](../../../assets/images/en/system-administration/administration/data-structure/1-ds.png)](../../../assets/images/en/system-administration/administration/data-structure/1-ds.png)

## Adjusting Object type Groups, Object types and Categories

In all three main fields you can change into the editing mode by pressing the ==Adjust button==.
Here you can ==edit the assignments== of the respective object group, but you can also create and develop new groups, object types or categories.

[![Ajusting](../../../assets/images/en/system-administration/administration/data-structure/2-ds.png)](../../../assets/images/en/system-administration/administration/data-structure/2-ds.png)

## Editing the Assignments

You start editing in the ==Object type Groups== column. Here you can ==select the object type group== for which you want to adjust the object type assignments.<br>
==Click on the Object type Group== which you want to edit, so that in the middle column a selection is available. In case you don't need the groups, ==you can hide== them by using the checkboxes or the ==Adjust button==.

When a group has been selected and the middle column is active, you can determine ==which Object types== are assigned to the corresponding group. ==Object types== that are grayed out are already assigned to other groups, but can still be reassigned.

You can ==add custom groups== at the bottom of the object group column. They have a pencil icon in their line so that you can edit or delete them at any time.

The same applies to the object type column. Here you can create [custom object types](../../../basics/custom-object-types.md). For an extensive configuration of an object type however, we recommend the use of the [object type configuration](../../../basics/custom-object-types.md).

When clicking on an object type in the middle column, the right column is activated. Here you can see the categories assigned to the selected object type and you can change or remove the assignments via the checkboxes.

The ==Create custom categories== button will forward you directly to the function for creating [custom categories](../../../basics/custom-categories.md).

## Edit data structure Profiles

You can save your current configuration in the form of a profile. For this purpose, enter a name for the profile at ==Save current profile==. The profile will then appear in the available profiles in the right column. Here it is possible to activate the profile, delete it or to download it. Activate the checkbox of the desired profile and click ==Load selected profile(s)== to restore the assignment from the selected profile. By using the download button you can save the profile as an XML file and upload it again by using the button ==Choose file==, if required. With the red X icon you can delete the selected profile.

This feature is suitable to exchange configuration data between multiple _i-doit_ installations. A profile contains the following settings:

- Object type groups with names, order and further attributes
- Objekt types with names, assignments to object type groups and other attributes from the object type configuration
- Global, specific and custom categories assigned to each object type
- Configuration of each custom category which is assigned to at least one object type

Accordingly, a profile contains the configuration of the IT documentation but no contents. Neither objects, category entries nor filled-in dialog fields are saved.

If you wish to have a clear state to carry out the assignments from scratch, you can reset all assignments via the ==Reset== button.
