# Custom Categories

Besides having standard categories _i-doit_ makes it possible to create (custom) [categories](structure-of-the-it-documentation.md) in order to document additional [attributes](./structure-of-the-it-documentation.md), which are not included in standard categories.

## Configuration of the Category

You can find the configuration of the custom categories in _i-doit_ at **Administration → Data structure → Custom categories**. The **New** button is used to create a custom category. If you already created some custom categories, you can also edit them here.

[![Configuration of the Category](../assets/images/en/basics/custom-categories/1-cc.png)](../assets/images/en/basics/custom-categories/1-cc.png)

As a first step, it is necessary to give a unique name to the category so that it can be identified in the category list.

[![category list](../assets/images/en/basics/custom-categories/2-cc.png)](../assets/images/en/basics/custom-categories/2-cc.png)

Furthermore, the category has to be linked to one or more [object types](structure-of-the-it-documentation.md) in order to use it.

[![object types](../assets/images/en/basics/custom-categories/3-cc.png)](../assets/images/en/basics/custom-categories/3-cc.png)

Now you can define if you require a [single-](structure-of-the-it-documentation.md) or a [multi-value-category](structure-of-the-it-documentation.md). If you wish to use attributes which are unique in their combination, the configuration as single-value category will be sufficient. However, if you want to use the values repeatedly, you will need a multi-value category. This way it is possible to save multiple entries in one category.

[![multi-value-category](../assets/images/en/basics/custom-categories/4-cc.png)](../assets/images/en/basics/custom-categories/4-cc.png)

In order to have access to a category in a database when querying (for example, in custom-made [reports](../evaluation/report-manager.md) of the report manager) you can set a database constant. This constant is suggested automatically when creating the category and can be changed.

[![database constant](../assets/images/en/basics/custom-categories/5-cc.png)](../assets/images/en/basics/custom-categories/5-cc.png)

## Characteristics of the Category

In order to customize your category you can add any number of attributes with the **Add new field** button.

You can choose from the following [field types](./attribute-fields.md):

- **Checkbox**<br>
    A checkbox that can be selected
- **Date and Time**<br>
    A field for date or for date + time
- **Dialog+**<br>
    [Dialog-Plus-Fields](./dialog-admin.md) are fields which can be filled with their own values to make them re-usable. The dialog-plus field can also be used in other categories via the identifier in the **Addition**field, so that the already entered values are available there. For this purpose, it is necessary to enter the same identifier in both categories.
- **Dialog+ (multiple selection)**<br>
    Like **Dialog+**, only with any number of values.
- **File Browser**<br>
    Allows you to reference a file.
- **HTML editor**<br>
    A text field which allows simple text formatting, such as italic letters.
- **Link**<br>
    A field to show a hyperlink which can be clicked within the category and forwards from there.
- **Number only**<br>
    A field where only numbers can be entered.
- **Object browser**<br>
    A field for creating a link to another object. This link is a reference only and not a complete relationship. Therefore this kind of reference will not appear in the CMDB explorer.
- **Object browser (multiple objects)**<br>
    Like **object browser**, only with any number of objects.
- **Object relation**<br>
    A complete relationship is generated when using an [object relation](./object-relations.md). The **Addition** field allows the selection of the kind of relation and the associated relation text. These relations can also be found in the CMDB explorer. Whenever possible, this field type is to be preferred over the object browser mentioned above.
- **Object relation** (**multiple objects**)<br>
    Like **object relation**, only with any number of objects.
- **Report**<br>
    Displays a report, the ID of the report must be entered in the additional field.
- **Text field**<br>
    A single-line text field for entering plain text.
- **Text field (masked)**<br>
    A single-line text field for entering masked text. Content is only in the Database visible.
- **Text field (multiple rows)**<br>
    You can enter longer texts in this multi-line text field.
- **Time**<br>
    A time between 00:00 and 23:59 can be entered here
- **Yes-no-field**<br>
    A simple yes-or-no selection.

Additionally, the following design elements are available:

- **Horizontal line**<br>
    Separate fields and contents graphically with a line.
- **HTML**<br>
    You can enter HTML code in the categories configuration which will be interpreted in the category. The source code will be entered in the configuration of the category and cannot be entered by the user when viewing the category in the documentation.
- **Javascript**<br>
    You can enter Javascript code in the categories configuration which will be interpreted in the category. The source code will be entered in the configuration of the category and cannot be entered by the user when viewing the category in the documentation.

As with most of the other categories, custom categories also have a **Description field** attached at the end.<br>
If you wish to change the order of the fields, you can do so easily with the dotted area at the start of each line and move the position of the attributes via drag and drop.

[![Description field](../assets/images/en/basics/custom-categories/6-cc.gif)](../assets/images/en/basics/custom-categories/6-cc.gif)

You can delete attributes with the **Remove** button.

[![Remove](../assets/images/en/basics/custom-categories/7-cc.gif)](../assets/images/en/basics/custom-categories/7-cc.gif)

!!! attention "Caution!"

    As soon as the category is in use, existing field types cannot be changed anymore in order to avoid loss of data.
    If you remove fields in the configuration, you will not be able to access their contents anymore.

An interpretation is carried out below the configuration:

- **Total entry count:**:<br>
    How often was this category saved? The entries are added up per object (once with single value, per entry with multi-value).
- **Value count**:<br>
    Each attribute which was filled and saved is added together.

[![Custom category](../assets/images/en/basics/custom-categories/8-cc.png)](../assets/images/en/basics/custom-categories/8-cc.png)

As soon as your category is configured and set up, you can use the **Save** button in order to make the category available in the chosen object types.

## Technical Configuration

The technical configuration helps you to use the custom category via [API](../i-doit-pro-add-ons/api/index.md). You can display it with the **Show technical configuration** button.

It is possible to change the technical keys for each field by click on **Change technical key**

[![change technical key](../assets/images/en/basics/custom-categories/9-cc.png)](../assets/images/en/basics/custom-categories/9-cc.png)

Now you are able to alter the key. The key will be checked automtically before you can save the new value.

!!! warning "Attention!"

    Changing the technical key will lead to a migration of the existing data to reference the new key<br>
    The key can only consist of characters **a-z**, **0-9** and **_**.<br>
    The key needs to contain at least **one alphabetical character**.<br>
    The key can **not be empty** or **exceed 64 characters**.<br>
    The key **needs to be unique**.

[![editing field key](../assets/images/en/basics/custom-categories/10-cc.png)](../assets/images/en/basics/custom-categories/10-cc.png)

After saving the custom category you can view and use the new technical configuration.

[![Technical Configuration](../assets/images/en/basics/custom-categories/11-cc.png)](../assets/images/en/basics/custom-categories/11-cc.png)
