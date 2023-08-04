# Custom Object Types

A lot of [object types](../glossary.md) are provided by the standard installation of _i-doit_. However, it is very likely that you want to document [objects](../glossary.md) which are not suited to be assigned to one of the existing object types. For this reason it is possible to create and customize object types.

## Access to the Configuration

The possibility to create custom object types is found at **Administration**  **→ Data structure →** **Object types** **→ [Object type-Group]**. Here it is possible to create new object types and edit existing ones.

As an alternative way you can also reach the object type configuration via the name of the [object type group](../glossary.md) above the [object type list](../glossary.md) in the [tree menu](../glossary.md) on the left side. Just click on the link and you will see the listing of objects types of this object type group and can edit them.

[![infrastructure](../assets/images/en/basics/custom-object-types/1-cot.png)](../assets/images/en/basics/custom-object-types/1-cot.png)

[![object-type-configuration](../assets/images/en/basics/custom-object-types/2-cot.png)](../assets/images/en/basics/custom-object-types/2-cot.png)

Use the **New** button  in order to start configuring a custom object type.

[![object-type-configuration-2](../assets/images/en/basics/custom-object-types/3-cot.png)](../assets/images/en/basics/custom-object-types/3-cot.png)

## Fields in the Configuration

The following fields are displayed in new and existing object types:

- **ID**
    The ID is a sequential number which is given by the system. Its uniqueness allows for the identification of the object type. A manual change is not possible.
    
- **Translated  Title**
    Using this field you can check whether the language constant you are using is correctly translated in the currently chosen language if you are using your own language file.
    
- **Language constant/Title**
    It is possible in this field to enter a language constant or a title in plain text. If you are using i-doit multilingually, please use a constant you translate in your own language file.
    
- **SYSID Prefix**
    The [SYSID](../glossary.md) prefix is inserted in all objects of this type when generating the SYSID. When leaving this field empty, the standard prefix **SYSID_** will be used. Otherwise, the SYSIDs will be generated with your own prefix. If the field remains untouched, the current Unix timestamp will be included in the SYSID. The object ID is included for custom prefixes.
    
- **Automatic Inventory numbers**
    If you want i-doit to generate individual inventory numbers on its own for objects of this type, you can enter the formula for this here. Variables are available for this which you can display via the blue question mark at the end of the line. It is also possible to combine these variables with each other and with plain text.
    
- **Position in the tree**
    If you are not using an alphabetical sorting for the object types in the tree menu on left side, you can create a custom order via the sorting. The sorting takes place in ascending order based on the number values.
    
- **Object color**
    Here you can assign a color to each object type. These color tags are found for example in the CMDB explorer and also in the graphical representation of racks to make the display more transparent..
    
- **Object type group**
    If you changed your mind while configuring and assigned your object type to another group or if you wanted to move an existing object type in another group, you can adjust the object type group via this option.
    
- **Specific category**
    You can optionally choose the desired [specific category](../glossary.md) and link it with the object type using a drop-down menu. Please note that specific categories are mutually exclusive and therefore only one specific category can be chosen.
    
- **Custom made**
    The **Custom** information will inform you whether this object type is already available in the standard installation or if it was created by a user. Standard object types can only be hidden and not be deleted.
    
- **Location**
    In this selection it is possible to define whether objects of this type are supposed to serve as the physical location for further objects. Objects which are not supposed to serve as the physical location will not be shown in the location browser.
    
- **Relation master**
    Each [object relation](./object-relations.md) has a direction or a dependency. When editing an object and linking another, the linked object is always dependent on the object being edited. However, if the linked object is an object whose object type has been configured as relation master, this object will then assume the master role in the relation.
    
- **Positionable in rack**
    Here you can declare whether objects of this type can be built into a rack within specific height units. When deactivated, the attributes are not available for positioning in the rack.
    
- **Display in menu tree**
    The display in the menu tree can be deactivated with this option. If you don't need standard object types and want to hide them or if you don't want your custom object types to appear in the menu tree yet, you can hide them for all users here.
    
- **Picture**
    Here you can select a standard object picture for the information line.
    
- **Icon**
    With this option you can determine the icon that will be displayed next to your object type in the menu tree. For this you need to specify the path of the icon beginning from the _i-doit_ installation folder.
    
- **Constant**
    You can determine a [constant](../glossary.md) which allows database queries for the object type. In _i-doit_ the standard formula for this is **C__OBJTYPE__[NAME]**, while **[NAME]** is to be replaced by the name of the object type. _i-doit_ automatically generates a constant which receives the current Unix timestamp instead of the name. Replace the Unix timestamp by the stylized name of the object type (ideally only ASCII capital letters) for better readability (e.g. for SQL reports).
    
- **Default-Template**
    If you already created templates using the [template](../efficient-documentation/templates.md) feature, you can select a template here which is then used to fill in new objects automatically. This way, you can pre-fill values which are the same for all objects of this type. You can adjust these pre-filled values anytime, if needed.
    
- **Overview page as standard view**
    With this option you determine whether opening an object of this type will display the [overview page](../glossary.md) or the category **General**. This option is set to “No” by default. When setting it to “Yes”, the selected specific category will be added automatically to the overview page.
    
- **Categories**
    You customize your object type in this selection. Each [category](../glossary.md) having its checkbox activated will be available within your object type. In the right column you can specify what categories will be shown on the overview page. This selection is only possible if the overview page was previously set as the standard display. The order of categories can be determined per drag'n'drop using the hatched lines.
    
- **Description**
    Here it is possible to leave hints and notes regarding your object type.
    

As soon as your configuration is completed you can save your settings via the **Save** button. Your custom object type is now available within the chosen object type group.
