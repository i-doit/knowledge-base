# Templates

i-doit allows you to create objects that can serve as templates for the creation of new [objects](../glossary.md). You can create a great amount of objects with identical [attributes](../glossary.md), for example servers using the same hardware, in a simplified procedure.

Usage
-----

You will find the template function in i-doit at **Extras → CMDB → Templates**. Here it is possible to view and edit existing templates as well as to create new templates and generate objects via templates.

[![Usage](../assets/images/en/efficient-documentation/templates/1-te.png)](../assets/images/en/efficient-documentation/templates/1-te.png)

Configuration
-------------

<<<<<<< HEAD
The settings for templates can be configured at **`Administration →` `General` `s``ettings → Template configuration`**. It is possible to display templates in the [object lists](/display/en/Object+List) by activating the template filter. When you set the status filter within an object list to "Template", all templates associated with this [object type](../../basics/structure-of-the-it-documentation.md) will be shown.
=======
The settings for templates can be configured at **Administration → General settings → Template configuration**. It is possible to display templates in the [object lists](../basics/object-list/index.md) by activating the template filter. When you set the status filter within an object list to "Template", all templates associated with this [object type](../basics/structure-of-the-it-documentation.md) will be shown.
>>>>>>> main

[![Configuration](../assets/images/en/efficient-documentation/templates/2-te.png)](../assets/images/en/efficient-documentation/templates/2-te.png)

Creating a Template
-------------------

Once the template function is opened, a new template can be created via **Generate new template** on the left side of the tree menu. First you will be prompted to set the object type associated with the template. Choose the object type in the drop-down menu and confirm by clicking **Create new template**. The following configuration for a template is identical to the creation of a regular object. Enter all content you want to transfer to the objects later on and save your entries.

Alternatively, you can open the configuration for creating a template via the arrow icon next to the **New** button in an object list.

[![Creating a Template](../assets/images/en/efficient-documentation/templates/3-te.png)](../assets/images/en/efficient-documentation/templates/3-te.png)

View, Edit and Delete Existing Templates
----------------------------------------

All previously created templates can be shown via **Present templates** in the tree menu on the left side in the template function. Click one of the templates to edit it. Activating the checkbox of one or more templates and using the **Purge** button will remove these templates from the system. Please be sure you want to purge the selected templates since purged templates cannot be restored.

[![View, Edit and Delete Existing Templates](../assets/images/en/efficient-documentation/templates/4-te.png)](../assets/images/en/efficient-documentation/templates/4-te.png)

Generating Objects from Templates
---------------------------------

Use **Create object(s)** in the tree menu on the left side within the template function to create objects on the basis of your templates.

Here you will be asked to enter basic information about your new objects. In the first step, the object title as well as the object type of your objects need to be set. Since the template function allows you to create multiple objects at the same time you can also set the number of (identical) objects that will be created. You can choose to use a counter suffix in an additional area that is opened if you decide to generate more than one object. Here it is also possible to set the leading zeros and the value from which you want the counter to start. Furthermore, the attributes **Application purpose** and **Category** can already be set in advance.

You can now determine which template(s) are to be used for the creation of objects in the section **Choose template(s)**. Select the desired templates in the drop-down menu and add these one after another via the **Use selected template** button. Information of multiple templates will be combined in each object.

[![Generating Objects from Templates](../assets/images/en/efficient-documentation/templates/5-te.png)](../assets/images/en/efficient-documentation/templates/5-te.png)

Open the Template Function from an Object List
----------------------------------------------

The functions for the creation of new templates or the creation of objects via templates are also available through object lists. Use the arrow pointing downward next to the **New** button to open the context menu. This contains the relevant items to get directly to the desired process.

[![Open the Template Function from an Object List](../assets/images/en/efficient-documentation/templates/6-te.png)](../assets/images/en/efficient-documentation/templates/6-te.png)

Default Template in the Object Type Configuration
-------------------------------------------------

You can choose a default template in the [object type configuration](../basics/custom-object-types.md). Each template that you created can be used here. If you set a default template, any newly created objects will be filled in according to this template. Of course you can adjust the objects you created in this way at any time and change their prefilled values.

[![Default Template in the Object Type Configuration](../assets/images/en/efficient-documentation/templates/7-te.png)](../assets/images/en/efficient-documentation/templates/7-te.png)