---
title: Custom categories
description: "Custom categories allow you to create your own categories with individual attributes -- for all information that is not covered in the standard categories..."
icon:
status:
lang: en
---
# Custom categories

Custom categories allow you to create your own [categories](struktur-it-dokumentation.md) with individual [attributes](struktur-it-dokumentation.md) -- for all information that is not covered in the standard categories of i-doit.

## Category configuration

You can find the configuration under **Administration → Data structure → Custom categories**. Use the **New** button to create a new category. Existing custom categories can be edited there at any time.

[![custom-categories](../assets/images/de/grundlagen/benutzerdefinede-kategorien/1-bk.png)](../assets/images/de/grundlagen/benutzerdefinede-kategorien/1-bk.png)

Here is how to configure a new category step by step:

**1. Assign a unique name**

Give the category a unique name so you can easily identify it in the category list.

[![custom-categories-2](../assets/images/de/grundlagen/benutzerdefinede-kategorien/2-bk.png)](../assets/images/de/grundlagen/benutzerdefinede-kategorien/2-bk.png)

**2. Assign object types**

Link the category with one or more [object types](struktur-it-dokumentation.md) so it becomes available there.

[![custom-categories-3](../assets/images/de/grundlagen/benutzerdefinede-kategorien/3-bk.png)](../assets/images/de/grundlagen/benutzerdefinede-kategorien/3-bk.png)

**3. Set the category type**

Choose between [single-value](struktur-it-dokumentation.md) and [multi-value category](struktur-it-dokumentation.md) (list category). If the attributes only need to be maintained once per object, a single-value category is sufficient. If you need multiple entries per object (e.g. multiple contracts), choose a multi-value category.

[![custom-categories-4](../assets/images/de/grundlagen/benutzerdefinede-kategorien/4-bk.png)](../assets/images/de/grundlagen/benutzerdefinede-kategorien/4-bk.png)

**4. Define a constant**

Define a constant so the category can be referenced in queries (e.g. in custom [reports](../auswertungen/report-manager.md)). i-doit automatically suggests a constant when creating -- you can adjust it if needed.

[![custom-categories-5](../assets/images/de/grundlagen/benutzerdefinede-kategorien/5-bk.png)](../assets/images/de/grundlagen/benutzerdefinede-kategorien/5-bk.png)

**5. Select an icon (from version 37)**

You can select a custom icon for the category. Click **Change icon** and choose from the collection or upload your own icon. Maximum file size: **1024 KB**. Allowed formats: **apng**, **avif**, **gif**, **jpg**, **jpeg**, **jfif**, **pjpeg**, **pjp**, **png**, **svg** and **webp**.

[![custom-categories-5](../assets/images/de/grundlagen/benutzerdefinede-kategorien/icon-bk.png)](../assets/images/de/grundlagen/benutzerdefinede-kategorien/icon-bk.png)

## Defining the category

To define your category with attributes, add any number of fields via the **Add multiple fields** button. The following [field types](attributfelder.md) are available:

| Field                                  | Description                                                                                                                                                                                                                                                                                                                                                                             |
| -------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Checkbox**                           | A checkbox that can be checked.                                                                                                                                                                                                                                                                                                                                                         |
| **File browser**                       | Reference a file.                                                                                                                                                                                                                                                                                                                                                                       |
| **Date and time**                      | A field for entering a date and/or time; within the category, a calendar is available for selection.                                                                                                                                                                                                                                                                                     |
| **Dialog+**                            | [Dialog-Plus fields](dialog-admin.md) that can be filled with custom values so they are reusable. Via the identifier in the **Additional** field, the Dialog-Plus field can also be used in other categories so that the already entered values are available there. For this, it is necessary to enter the same identifier in both categories.                                           |
| **Dialog+ (multiple selection)**       | Like **Dialog+**, but with any number of values.                                                                                                                                                                                                                                                                                                                                        |
| **HTML editor**                        | A text field that allows simple text formatting such as italic text.                                                                                                                                                                                                                                                                                                                    |
| **Yes-No field**                       | A simple yes-or-no selection.                                                                                                                                                                                                                                                                                                                                                           |
| **Link**                               | A field for specifying a hyperlink that can be clicked within the category and redirects there.                                                                                                                                                                                                                                                                                         |
| **Numbers only**                       | A field where only numbers can be entered.                                                                                                                                                                                                                                                                                                                                              |
| **Object relationship**                | When using an [object relationship](objekt-beziehungen.md), a full relationship is created. The **Additional** field allows the selection of the relationship type and the associated relationship text. These relationships can also be found in the CMDB Explorer. If possible, this field type is to be preferred over the above-mentioned object browser.                              |
| **Object relationship (multiple objects)** | Like **Object relationship**, but with any number of objects.                                                                                                                                                                                                                                                                                                                       |
| **Object browser**                     | A field for creating a link to another object. This is only a reference and not a full relationship. Such a reference will therefore not appear in the CMDB Explorer.                                                                                                                                                                                                                    |
| **Object browser (multiple objects)**  | Like **Object browser**, but with any number of objects.                                                                                                                                                                                                                                                                                                                                |
| **Report**                             | Displays a report; the report must be selected in the Additional field.                                                                                                                                                                                                                                                                                                                 |
| **Text field**                         | A single-line text field for entering free text.                                                                                                                                                                                                                                                                                                                                        |
| **Text field (masked)**                | A single-line text field for entering masked free text. The content is only visible in the database.                                                                                                                                                                                                                                                                                    |
| **Text field (multi-line)**            | In this multi-line text field, longer texts can be stored.                                                                                                                                                                                                                                                                                                                              |
| **Date and time**                      | A field for date or for date + time.                                                                                                                                                                                                                                                                                                                                                    |
| **Time**                               | A time between 00:00 and 23:59 can be specified here.                                                                                                                                                                                                                                                                                                                                   |

Additionally, the following elements are available:

| Field                 | Description                                                                                                                                                                                                                                                                                       |
| --------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Horizontal line**   | A line for visual separation of fields and content.                                                                                                                                                                                                                                                |
| **HTML**              | The ability to store HTML code in the category configuration, which is interpreted in the category. The source code is entered in the category configuration and cannot be entered by users when accessing the category in the documentation.                                                       |
| **Javascript**        | The ability to store Javascript code in the category configuration, which is interpreted in the category. The source code is entered in the category configuration and cannot be entered by users when accessing the category in the documentation.                                                 |

As with almost every other category, i-doit automatically adds a **Description field** at the end.

The order of created attributes can be changed via the hatched areas at the beginning of each row using drag-and-drop.

[![custom-categories-6](../assets/images/de/grundlagen/benutzerdefinede-kategorien/6-bk.gif)](../assets/images/de/grundlagen/benutzerdefinede-kategorien/6-bk.gif)

Attributes are deleted via the **Remove** button.

[![custom-categories-7](../assets/images/de/grundlagen/benutzerdefinede-kategorien/7-bk.gif)](../assets/images/de/grundlagen/benutzerdefinede-kategorien/7-bk.gif)

!!! attention "Caution!"
    Once the category is in use, you can no longer change existing field types -- to avoid data loss. If you remove fields from the configuration, you lose access to their contents. After that, you must re-index the attributes via the [System repair and cleanup](../administration/verwaltung/mandanten-name-verwaltung/systemreparatur-und-bereinigung.md).

Below the configuration, an evaluation is displayed:

| Statistic                    | Description                                                                                                                                              |
| ---------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Total category entries**   | How often was the category saved? Per object, the entries (for single-value once, for multi-value per entry) are counted together.                        |
| **Maintained values**        | Each attribute that was filled in and saved is counted across all objects.                                                                                |

[![custom-categories-8](../assets/images/de/grundlagen/benutzerdefinede-kategorien/8-bk.png)](../assets/images/de/grundlagen/benutzerdefinede-kategorien/8-bk.png)

Once your category has been configured and defined, you can use the **Save** button so the category becomes available in the selected object types.

## Technical configuration

If you want to use the custom category via the [API](../i-doit-add-ons/api/index.md), you need the technical configuration. You access it via the **Show technical configuration** button.

There you can change the technical keys for each field by clicking **Change technical key**.

[![Change-technical-key](../assets/images/de/grundlagen/benutzerdefinede-kategorien/9-bk.png)](../assets/images/de/grundlagen/benutzerdefinede-kategorien/9-bk.png)

Now you can change the key. i-doit automatically validates the new value before you can save.

!!! warning "Caution!"
    Changing a key triggers a migration of the stored data to the new key. Please observe the following rules:<br>
    - The key may only contain the characters **a-z**, **0-9** and **_**.<br>
    - It must contain at least **one letter**.<br>
    - It **must not be empty** and **must not be longer than 64 characters**.<br>
    - It **must be unique**.

[![Change-technical-key](../assets/images/de/grundlagen/benutzerdefinede-kategorien/10-bk.png)](../assets/images/de/grundlagen/benutzerdefinede-kategorien/10-bk.png)

After saving the custom category, you can view and use the new technical configuration.

[![Technical-configuration](../assets/images/de/grundlagen/benutzerdefinede-kategorien/11-bk.png)](../assets/images/de/grundlagen/benutzerdefinede-kategorien/11-bk.png)
