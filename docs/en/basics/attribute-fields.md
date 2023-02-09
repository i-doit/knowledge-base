**Contents**

*   1[Overview](#AttributeFields-Overview)
*   2[Single-line Text Fields](#AttributeFields-Single-lineTextFields)
*   3[HTML Editor/ Multiline Text Fields](#AttributeFields-HTMLEditor/MultilineTextFields)
*   4[Dialog Field (Drop Down)](#AttributeFields-DialogField(DropDown))
*   5[Dialog Plus Field (Extended Drop Down)](#AttributeFields-DialogPlusField(ExtendedDropDown))
*   6[Multi-Dialog-Plus Field (Multiselection)](#AttributeFields-Multi-Dialog-PlusField(Multiselection))
*   7[Date Field](#AttributeFields-DateField)
*   8[Units and Intervals](#AttributeFields-UnitsandIntervals)
*   9[Costs](#AttributeFields-Costs)
*   10[Links](#AttributeFields-Links)
*   11[Object Relationships](#AttributeFields-ObjectRelationships)
    *   11.1[Object Browser](#AttributeFields-ObjectBrowser)
    *   11.2[Location Selection](#AttributeFields-LocationSelection)
    *   11.3[Browser with Subselection](#AttributeFields-BrowserwithSubselection)

Now that you are familiar with the [structure of the IT documentation](../../basics/structure-of-the-it-documentation.md) let's take a closer look at the attribute fields which i-doit provides in the Web GUI.

Overview
--------

Each attribute which can be edited is represented by a form field. This applies both to the standard categories and the [custom categories](/display/en/Custom+Categories). Almost every attribute field can be [declared as mandatory field and/or assigned with validation options](/display/en/Validation+and+Mandatory+Fields).

![](/download/attachments/37355670/image2016-10-27%2012%3A18%3A55.png?version=1&modificationDate=1493031255106&api=v2)

Attributes which can't be edited either have no attribute field in the editing view or they only have a field with a read-only option.

An example for an attribute which was created dynamically without an attribute field is `**FQDN**` in the **`Host address`** category. `**FQDN**` is comprised of the attributes `**Host name**` and `**DNS Domain**`.

![](/download/attachments/37355670/dynamisch.png?version=1&modificationDate=1493031255437&api=v2)

An example for a read-only attribute field is the `**Object ID**` which is generated automatically by MySQL/MariaDB.

![](/download/attachments/37355670/image2016-10-27%2012%3A21%3A11.png?version=1&modificationDate=1493031255460&api=v2)

Single-line Text Fields
-----------------------

You can enter any desired text in single-line text fields. The character length is limited to 255 characters. An example is the `**serial number**` in the `**Modell**` category.

![](/download/attachments/37355670/image2016-10-27%2012%3A20%3A20.png?version=1&modificationDate=1493031255475&api=v2)

HTML Editor/ Multiline Text Fields
----------------------------------

Multiline text fields can contain any desired text in several lines. The character length is limited to approximately 65000 characters. From a simple text field you can switch to an HTML editor to format your text.

You can switch to the editor by selecting `**Administration**` **`→ System Settings → User interface → WYSIWYG Editor in Categories`**. "WYSIWYG" means "What You See Is What You Get".

The HTML-Editor also has other formatting options which you can activate via ``**`**Administration**` → **`System Settings`** → User interface → Activate all WYSIWYG Editor functions**``.

Almost every category entry has the Description attribute at the end which is as a standard presented as HTML editor.

![](/download/attachments/37355670/image2016-10-27%2012%3A19%3A56.png?version=1&modificationDate=1493031255506&api=v2)

Dialog Field (Drop Down)
------------------------

This dialog field is a drop-down selection field. The values from which you can choose one single value are pre-set and usually you can't edit them. If you don't want to select any of the given values, you can choose the dash (**`-`**), if possible.

In our example you can see the [`**Condition**`](/display/en/Life+and+Documentation+Cycle) in the `**General**` category.

![](/download/attachments/37355670/image2016-10-27%2012%3A21%3A48.png?version=1&modificationDate=1493031255522&api=v2)

An example for an attribute which can be edited centrally is the [`**CMDB status**`](/display/en/Life+and+Documentation+Cycle) in the `**General**` category.

Dialog Plus Field (Extended Drop Down)
--------------------------------------

The dialog plus field is similar to the dialog field. In addition, you can set further values. For this purpose, you can either use the icon to the right of the attribute field or the [Dialog-Admin](/display/en/Dialog-Admin).

Examples are the attributes `**Category**` and `**Purpose**` in the `**General**` category.

![](/download/attachments/37355670/image2016-10-27%2012%3A22%3A16.png?version=1&modificationDate=1493031255538&api=v2)

When you click on the icon, the `**List browser**` opens with which you can add further values or change existing values.

![](/download/attachments/37355670/image2016-10-27%2012%3A23%3A23.png?version=1&modificationDate=1493031255554&api=v2)

Please note

You can only delete data via the Dialog-Admin. Only administrators should use this function as removed field values are deleted irrevocably from all entries.

Multi-Dialog-Plus Field (Multiselection)
----------------------------------------

You can only select one value with the above mentioned selection fields. But if you want to select more values at the same time, you can use the multi-dialog-plus field. You can add further values with help of a drop-down menu. In some cases there are additional buttons with which you can select/ deselect all values or reverse your selection.

The example illustrates the `**DNS Domain**` attribute in the `**Host address**` category.

![](/download/attachments/37355670/image2016-10-27%2012%3A24%3A13.png?version=1&modificationDate=1493031255569&api=v2)

Date Field
----------

You can use the date field for date entries. When you click on the single-line text field, a calendar opens. With a click on the desired date, the date is copied into the text field. You can also enter the date manually in the format `tt.mm.yyyy`.

Our example shows the `**Date of Purchase**` attribute in the `**Acccounting**` category.

![](/download/attachments/37355670/image2016-10-27%2012%3A25%3A4.png?version=1&modificationDate=1493031255585&api=v2)

Units and Intervals
-------------------

Beside the attribute fields, there is a drop-down field with which you can determine values in order to document units or intervals. These values can be time units, measurement units, weight units, time periods etc.

As an example you can see the  `**Period of warranty**` in the ``**`**Acccounting**`**`` category.

![](/download/attachments/37355670/image2016-10-27%2012%3A25%3A36.png?version=1&modificationDate=1493031255605&api=v2)

Costs
-----

Costs are documented as decimal numbers (or simplified as real numbers without decimal digits). You may use decimal points and commas as separation characters. Additionally, the attribute field shows the configured currency. You can determine the currency with `**Administration → CMDB settings → General settings → Monetary format**` festgelegt.

As an example you can see the `**Investment costs**` attribute in the ``**`**Acccounting**`**`` category.

![](/download/attachments/37355670/image2016-10-27%2012%3A26%3A6.png?version=1&modificationDate=1493031255620&api=v2)

Links
-----

Some single-line text fields are intended for entering URLs. Such an entry is used to generate a link on which the user can click to open it.

For example, you can find this kind of attribute field in the `**Access**` category.

![](/download/attachments/37355670/image2016-10-27%2012%3A27%3A34.png?version=1&modificationDate=1493031255636&api=v2)

Object Relationships
--------------------

To create a relationship between two or more objects you can use the object browser for general cases; for special cases there are other browsers. The single-line text field is supplemented by two icons to the right.

When you can create a one-to-one relationship between two objects, you can write into the text field. Word suggestions are made during typing. When you can create a one-to-n relationsship, the text field is in read-only mode.

With a click on the magnifier icon the right browser opens. The icon beside the magnifier icon, a paper clip with a blocking signal, dissolves existing or recently selected relationships.

![](/download/attachments/37355670/image2016-10-27%2012%3A28%3A2.png?version=1&modificationDate=1493031255650&api=v2)

### Object Browser

The object browser has a unique setup, depending on which relationship type is to be documented. For this reason, not all functions which are described in the follwoing text are available at all times. Often the selection of filters is restricted, because, for example, you are only allowed to choose objects of certain object types.

When you select the referenced object via radio buttons, you can only make a single choice. But if the ![](/download/attachments/37355670/Attributefields14.png?version=1&modificationDate=1464003610205&api=v2) add buttons are available, multiple choice is possible.

There are several tabs in the upper part of the window:

*   **`Object View`**: The object view is sorted by filters. If the right object is missing, you can create it with the `**Create new object**` button. Filters:  
    *   `**by object type**`: First you select the object type, then the object or objects.
    *   ``**`**by**` object groups**``: If you use the object type `**object-group**`, objects can be listed per `**object-group**`.
    *   ``**`**by**` person groups**``: All `**persons**` are listed per `**person group**`.
    *   ``**`**by**` relations**``: All relationship objects are listed, whereby you initially have to choose the type of relationship.
    *   ``**`**by**` date**``: Objects are sorted by date. You have the following options: ``****`newly created, newly updated, created this month, created last month`****``.
*   `**Location view**`: The location in the tree with all its paths is created, from here you can select the right object.
*   `**Search**`: Here you can [search](/display/en/Search) for objects by means of object titles.
*   `**Reports**`: Objects are listed with help of already created [reports](/display/en/Report+Manager).
*   `**Selected objects**`: In this tab all selected objects are displayed. Via the button `**Create new object-group from selection**` you can create an object of the type object group which is then filled with your selection of objects.

All current modifications are listed in the log.

As an example, you can see the `**Contact Browser**` from the **`**Accounting**`** category with the `**Purchased at**` attribute.

 ![](/download/attachments/37355670/image2016-10-27%2012%3A28%3A56.png?version=1&modificationDate=1493031255665&api=v2)

### Location Selection

This browser builds a one-to-one relationship of the type `**Location**` with an object which is defined as location. With a click on the magnifying glass, the `**Location selection**` is activated. It is similar to the `**Location view**` (see above). The browser can be found in the `**Location**`  category.

![](/download/attachments/37355670/standort.png?version=1&modificationDate=1493031255685&api=v2)

![](/download/attachments/37355670/image2016-10-27%2012%3A29%3A47.png?version=1&modificationDate=1493031255711&api=v2)

### Browser with Subselection

Sometimes you not only have to select the object but also an attribute of this object. Examples are the `**Connected with**` attribute in the `**Port (Network)**` category where you have to choose an input or output of the `**Connectors** **(Wiring)**`category and the possibility to chose software relations in the `**Service Components**` category.

![](/download/attachments/37355670/image2016-10-27%2012%3A30%3A58.png?version=1&modificationDate=1493031255726&api=v2)

Tip

When the browser is divided and therefore has a subselection and radio buttons, you have to make a selection in both columns. Take for example the wiring of two devices: if you select only the connected object but not the corresponding connection in the object browser, your entry won't be the saved.