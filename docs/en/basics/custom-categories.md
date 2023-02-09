**Contents**

*   1[Configuration of the Category](#CustomCategories-ConfigurationoftheCategory)
*   2[Characteristics of the Category](#CustomCategories-CharacteristicsoftheCategory)
*   3[Technical Configuration](#CustomCategories-TechnicalConfiguration)

Besides having standard categories _i-doit_ makes it possible to create (custom) [categories](../../basics/structure-of-the-it-documentation.md) in order to document additional [attributes](../../basics/structure-of-the-it-documentation.md), which are not included in standard categories.

Configuration of the Category
-----------------------------

You can find the configuration of the custom categories in _i-doit_ at `**Administration**` ****→**** `**CMDB settings**` ****→**** `**Custom categories**``.` The `**New**` button is used to create a custom category. If you already created some custom categories, you can also edit them here.

![](/download/attachments/37355678/image2016-10-27%2012%3A51%3A50.png?version=1&modificationDate=1493032698955&api=v2)

  

As a first step, it is necessary to give a unique name to the category so that it can be identified in the category list.

![](/download/attachments/37355678/Cat-title.png?version=1&modificationDate=1631784361918&api=v2&effects=drop-shadow)

Furthermore, the category has to be linked to one or more [object types](../../basics/structure-of-the-it-documentation.md) in order to use it.

![](/download/attachments/37355678/Cat-objects.png?version=1&modificationDate=1631784393224&api=v2&effects=drop-shadow)

Now you can define if you require a [single-](../../basics/structure-of-the-it-documentation.md) or a [multi-value-category](../../basics/structure-of-the-it-documentation.md). If you wish to use attributes which are unique in their combination, the configuration as single-value category will be sufficient. However, if you want to use the values repeatedly, you will need a multi-value category. This way it is possible to save multiple entries in one category.

![](/download/attachments/37355678/Cat-mv.png?version=1&modificationDate=1631784432683&api=v2&effects=drop-shadow)

In order to have access to a category in a database when querying (for example, in custom-made [reports](https://kb.i-doit.com/display/en/Report+Manager) of the report manager) you can set a database constant. This constant is suggested automatically when creating the category and can be changed.

![](/download/attachments/37355678/Cat-const.png?version=1&modificationDate=1631784451486&api=v2&effects=drop-shadow)

Characteristics of the Category
-------------------------------

In order to customize your category you can add any number of attributes with the `**Add new field**` button.

You can choose from the following [field types](/display/en/Attribute+Fields):

*   `**Checkbox**`  
    A checkbox that can be selected
*   **`Date and Time`**  
    A field for date or for date + time
*   **`**Dialog+**`**  
    [Dialog-Plus-Fields](/display/en/Dialog-Admin) are fields which can be filled with their own values to make them re-usable. The dialog-plus field can also be used in other categories via the identifier in the `**Addition**`field, so that the already entered values are available there. For this purpose, it is necessary to enter the same identifier in both categories.
    
*   `**Dialog+ (multiple selection)**`  
    Like **`Dialog+`**, only with any number of values.
*   `**File Browser**`  
    Allows you to reference a file.
*   ****`**HTML editor**`****  
    A text field which allows simple text formatting, such as italic letters.
*   ******`**Link**`******  
    A field to show a hyperlink which can be clicked within the category and forwards from there.
*   `**Number only**`  
    A field where only numbers can be entered.
*   **`**Object browser**`**  
    A field for creating a link to another object. This link is a reference only and not a complete relationship. Therefore this kind of reference will not appear in the CMDB explorer.
    
*   `**Object browser (multiple objects)**`  
    Like `**object browser**`, only with any number of objects.
*   ****`**Object relation**`****  
    A complete relationship is generated when using an [object relation](/display/en/Object+Relations). The `**Addition**` field allows the selection of the kind of relation and the associated relation text. These relations can also be found in the CMDB explorer. Whenever possible, this field type is to be preferred over the object browser mentioned above.
    
*   ``******`**Object relation**`**** (`**multiple objects**`)**``  
    Like `**object relation**`, only with any number of objects.
*   `**Report**`  
    Displays a report, the ID of the report must be entered in the additional field.
*   **`**Text field**`**  
    A single-line text field for entering plain text.
    
*   **`**Text field (masked)**`**  
    A single-line text field for entering masked text. Content is only in the Database visible.
*   **`**Text field (multiple rows)**`**  
    You can enter longer texts in this multi-line text field.
    
*   ****`**Yes-no-field**`****A simple yes-or-no selection.
    
*   `**Time**`  
    A time between 00:00 and 23:59 can be entered here
*   ******`**Date**`******  
    You can enter a date in this field. This category provides a calendar which enables you to select the desired date.

Additionally, the following design elements are available:

*   `**Horizontal** **l****ine**`  
    Separate fields and contents graphically with a line.
    
*   `**HTML**`  
    You can enter HTML code in the categories configuration which will be interpreted in the category. The source code will be entered in the configuration of the category and cannot be entered by the user when viewing the category in the documentation.
    
*   `**Javascript**`  
    You can enter Javascript code in the categories configuration which will be interpreted in the category. The source code will be entered in the configuration of the category and cannot be entered by the user when viewing the category in the documentation.
    

  

As with most of the other categories, custom categories also have a `**Description field**` attached at the end.

If you wish to change the order of the fields, you can do so easily with the dotted area at the start of each line and move the position of the attributes via drag and drop.

![](/download/attachments/37355678/cat-move-fields.gif?version=1&modificationDate=1631784554217&api=v2&effects=drop-shadow)

You can delete attributes with the `**Remove**` button.

![](/download/attachments/37355678/cat-del-fields.gif?version=1&modificationDate=1631789865550&api=v2&effects=drop-shadow)

Caution!

As soon as the category is in use, existing field types cannot be changed anymore in order to avoid loss of data.

If you remove fields in the configuration, you will not be able to access their contents anymore.

An interpretation is carried out below the configuration:

*   `**Total of category entries**`: How often was this category saved? The entries are added up per object (once with single value, per entry with multi-value).
*   `**Values mainained**`: Each attribute which was filled and saved is added together.

![](/download/attachments/37355678/Cat-entries.png?version=1&modificationDate=1631789997316&api=v2&effects=drop-shadow)

As soon as your category is configured and set up, you can use the **`Save`** button in order to make the category available in the chosen object types.

![](/download/attachments/37355678/image2016-10-27%2012%3A58%3A56.png?version=1&modificationDate=1493032699135&api=v2)

Technical Configuration
-----------------------

The technical configuration helps you to use the custom category via [API](/pages/viewpage.action?pageId=37355644). You can activate it with the `**Show technical configuration**` button.

![](/download/attachments/37355678/Cat-tec.png?version=1&modificationDate=1631789935143&api=v2&effects=drop-shadow)