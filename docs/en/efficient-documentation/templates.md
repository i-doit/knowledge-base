**Contents**

*   1[Usage](#Templates-Usage)
*   2[Configuration](#Templates-Configuration)
*   3[Creating a Template](#Templates-CreatingaTemplate)
*   4[View, Edit and Delete Existing Templates](#Templates-View,EditandDeleteExistingTemplates)
*   5[Generating Objects from Templates](#Templates-GeneratingObjectsfromTemplates)
*   6[Open the Template Function from an Object List](#Templates-OpentheTemplateFunctionfromanObjectList)
*   7 [Default Template in the Object Type Configuration](#Templates-DefaultTemplateintheObjectTypeConfiguration)

i-doit allows you to create objects that can serve as templates for the creation of new [objects](/display/en/Glossary). You can create a great amount of objects with identical [attributes](/display/en/Glossary), for example servers using the same hardware, in a simplified procedure.

Usage
-----

You will find the template function in i-doit at **`Extras` `→` `CMDB` `→` `Templates`**. Here it is possible to view and edit existing templates as well as to create new templates and generate objects via templates.

![](/download/attachments/37355701/image2021-10-4_8-35-42.png?version=1&modificationDate=1633329342743&api=v2&effects=drop-shadow)

Configuration
-------------

The settings for templates can be configured at **`Administration →` `General` `s``ettings → Template configuration`**. It is possible to display templates in the [object lists](/display/en/Object+List) by activating the template filter. When you set the status filter within an object list to "Template", all templates associated with this [object type](../../basics/structure-of-the-it-documentation.md) will be shown.

![](/download/attachments/37355701/image2021-10-4_8-40-19.png?version=1&modificationDate=1633329619644&api=v2&effects=drop-shadow)

Creating a Template
-------------------

Once the template function is opened, a new template can be created via `**Generate new template**` on the left side of the tree menu. First you will be prompted to set the object type associated with the template. Choose the object type in the drop-down menu and confirm by clicking `**Create new template**`. The following configuration for a template is identical to the creation of a regular object. Enter all content you want to transfer to the objects later on and save your entries.

Alternatively, you can open the configuration for creating a template via the arrow icon next to the `**New**` button in an object list.

![](/download/attachments/37355701/image2021-10-4_8-41-58.png?version=1&modificationDate=1633329719374&api=v2&effects=drop-shadow)

View, Edit and Delete Existing Templates
----------------------------------------

All previously created templates can be shown via `**Present templates**` in the tree menu on the left side in the template function. Click one of the templates to edit it. Activating the checkbox of one or more templates and using the `**Purge**` button will remove these templates from the system. Please be sure you want to purge the selected templates since purged templates cannot be restored.

![](/download/attachments/37355701/image2021-10-4_8-43-34.png?version=1&modificationDate=1633329815090&api=v2&effects=drop-shadow)

Generating Objects from Templates
---------------------------------

Use `**Create object(s)**` in the tree menu on the left side within the template function to create objects on the basis of your templates.

Here you will be asked to enter basic information about your new objects. In the first step, the object title as well as the object type of your objects need to be set. Since the template function allows you to create multiple objects at the same time you can also set the number of (identical) objects that will be created. You can choose to use a counter suffix in an additional area that is opened if you decide to generate more than one object. Here it is also possible to set the leading zeros and the value from which you want the counter to start. Furthermore, the attributes `**Application purpose**` and `**Category**` can already be set in advance.

You can now determine which template(s) are to be used for the creation of objects in the section `**Choose template(s)**`. Select the desired templates in the drop-down menu and add these one after another via the `**Use selected template**` button. Information of multiple templates will be combined in each object.

![](/download/attachments/37355701/image2021-10-4_8-46-14.png?version=1&modificationDate=1633329974557&api=v2&effects=drop-shadow)

Open the Template Function from an Object List
----------------------------------------------

The functions for the creation of new templates or the creation of objects via templates are also available through object lists. Use the arrow pointing downward next to the `**New**` button to open the context menu. This contains the relevant items to get directly to the desired process.

![](/download/attachments/37355701/image2021-10-4_8-34-11.png?version=1&modificationDate=1633329252174&api=v2&effects=drop-shadow)

Default Template in the Object Type Configuration
-------------------------------------------------

You can choose a default template in the [object type configuration](/display/en/Custom+Object+Types). Each template that you created can be used here. If you set a default template, any newly created objects will be filled in according to this template. Of course you can adjust the objects you created in this way at any time and change their prefilled values.

![](/download/attachments/37355701/image2021-10-4_8-47-30.png?version=1&modificationDate=1633330051356&api=v2&effects=drop-shadow)