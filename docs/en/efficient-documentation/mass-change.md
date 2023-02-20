# Mass Change 

The mass change is a feature in i-doit which allows for changing multiple [objects](../glossary.md) in one step on the basis of change templates. With these changes the selected objects assume the [attributes](../glossary.md) of the change template.

Access
------

You can find the mass change function at **Extras → CMDB → Mass change**. Here it is possible to view existing change templates, edit them, create new change templates and adjust objects in accordance to the templates. 

[![Access](../assets/images/en/efficient-documentation/mass-change/1-mc.png)](../assets/images/en/efficient-documentation/mass-change/1-mc.png)

Creating a Change Template
--------------------------

You can create a change template by clicking **Create new template** on the left side of the tree menu as soon as you access the mass change. In the first step, you are prompted to set the [object type](../basics/structure-of-the-it-documentation.md) the template will be associated with. Choose the type in the drop-down menu and confirm with the button **Create new template**. The following configuration for a template is identical to the creation of a regular object. Leave all content you want to transfer to the objects later on and save your inputs.

[![Creating a Change Template](../assets/images/en/efficient-documentation/mass-change/2-mc.png)](../assets/images/en/efficient-documentation/mass-change/2-mc.png)

!!! info "Generic templates"

    You can also use the **Generic template** as the object type for your change templates. In this way you can apply the template to any object type. But if this template contains content in categories which are not assigned to the objects, then you will only be able to view these contents if those respective [categories](../basics/structure-of-the-it-documentation.md) are assigned.

View, Edit and Delete Existing Change Templates
-----------------------------------------------

By clicking on **Existing templates** located in the tree menu (on the left side of the mass change) you can view all created change templates. Click a change template in order to edit it. Marking the checkbox of one or more change templates allows you to remove them via the **Purge** button. Please be sure that you want to purge the selected change templates, since purged change templates cannot be restored.

[![View, Edit and Delete Existing Change Templates](../assets/images/en/efficient-documentation/mass-change/3-mc.png)](../assets/images/en/efficient-documentation/mass-change/3-mc.png)

Change of Object Information with a Change Template
---------------------------------------------------

In order to edit objects in accordance to your change templates, use the **Mass change** option which is located on the left side of the mass change in the tree menu.

As the first step, choose the objects you want to adjust. You can select as many objects as you like. In the next step you can select the appropriate change template from the drop-down menu. On basis of the selected change template the objects will be adjusted.

The options in the third step determine how empty fields of the template and multi-value categories are to be handled. There are two possibilities to choose from:

*   **Ignore empty fields in the template and leave these fields untouched in the target objects**
    
*   **Clear fields explicitly when the template has no content for them**
    

This way you can configure whether your objects will be exactly aligned to the change template or whether only documented values in the change template will be transferred to your existing objects.

Multi-value categories can be handled in three ways:

*   **Leave categories untouched**
    
*   **Add category entries from the template to existing entries and leave existing entries untouched**
    
*   **Delete existing category entries and take the entries from the templates**
    

When leaving the categories untouched, the contents will not be transferred to multi-value categories under any circumstances – independent of the fact whether these already have any content or not. The option for adding category entries does not delete your already documented content and complements all the entries of your template. When deleting existing entries, all existing multi-value contents will be deleted and replaced by the contents of the change template.

As soon as all settings match your needs you can apply the changes to the objects via the **Apply mass changes** button.

[![Apply mass changes](../assets/images/en/efficient-documentation/mass-change/4-mc.png)](../assets/images/en/efficient-documentation/mass-change/4-mc.png)