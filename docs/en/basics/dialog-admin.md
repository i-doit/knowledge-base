**Contents**

*   1[Overview](#DialogAdmin-Overview)
*   2[Show Values](#DialogAdmin-ShowValues)
*   3[Create Values](#DialogAdmin-CreateValues)
*   4[Edit Values](#DialogAdmin-EditValues)
*   5[Delete Values](#DialogAdmin-DeleteValues)
*   6[Set Permissions](#DialogAdmin-SetPermissions)

The [attribute field](/display/en/Attribute+Fields) **`Dialog+`**, which is a dropdown field where you can edit values, is used quite often in i-doit. These attribute fields can be found in many [categories](/display/en/Glossary) of the [IT documentation](/display/en/Glossary) or in other features provided by i-doit. The central administration of the values is carried out via the **`Dialog-Admin`** in the **`Administration`**.

Overview
--------

You can find an overview of all [attributes](/display/en/Glossary) of the field type **`Dialog+`** under **`Administration → CMDB settings → Dialog-Admin`**. They are sorted alphabetically according to the associated categories in the left navigation tree. When you created a [custom category](/display/en/Custom+Categories) with an attribute of the field type **`Dialog+`**, this attribute and its related category is also displayed in the navigation tree under **`Custom Dialog+`**.

![](/download/attachments/37355672/Dialogadmin1.png?version=1&modificationDate=1464007160463&api=v2&effects=drop-shadow)

Show Values
-----------

An overview of the values which were documented so far (if existing) will be loaded in the main area when you click on an attribute in the left navigation tree within the **`Dialog-Admin`** area.

![](/download/attachments/37355672/Dialogadmin2.png?version=1&modificationDate=1464007299116&api=v2&effects=drop-shadow)

Create Values
-------------

Click the **`New`** button above the overview when you want to create a new value. A form field opens and you can fill in the following details:

*   **`ID`**: Each value in a **`Dialog+`** attribute receives a unique identifier by i-doit. This is very helpful, for example, when working with the [API](/pages/viewpage.action?pageId=37355644).
*   **`Title`**: Here you can enter the value you want to display in the i-doit Web GUI when you view or edit the **`Dialog+`** attribute.
*   **`Constant`**: Beside a unique identifier, a value can receive a unique constant. In contrast to the identifier it usually consists of a descriptive string which can be helpful when applying the API.
*   **`Status`**: Each value can have a status. You should select the status `Normal (2)`to apply it in the documentation.

You can save the value with the `**Save**` button.

![](/download/attachments/37355672/Dialogadmin3.png?version=1&modificationDate=1464007761969&api=v2&effects=drop-shadow)

Edit Values
-----------

Click on the respective value in the overview when you want to edit the attribute. The form which opens corresponds to the form field which was described above regarding the creation of a new value.

Impact

*   The changing and deleting of values has an immediate effect on the IT documentation: When you change a value in the **`Dialog-Admin`**, it changes automatically everywhere else. When you delete a value, it will be deleted everywhere else where it was used. We recommend searching for the objects which use the respective value via a [report](/display/en/Report+Manager) before you delete it. With help of this report you can choose an alternative value for all the listed objects, for example via [list editing](/display/en/List+Editing).

Delete Values
-------------

When you want to delete a value, mark the checkbox of this value within the overview. Then click the **`Purge`** button and the value will be deleted irrevocably.

For each value, the tabular overview shows whether the value can be deleted or not. The reason for this is that some values are required by necessity by i-doit to guarantee certain functionalities.

Set Permissions
---------------

For each **`Dialog+`** attribute you can assign rights for each person or person group. For example, it is possible and often also advisable that only certain person groups may create, edit or delete values while other person groups are only allowed to use them.