**Contents**

*   1[User Rights](#CMDB(UserRightsManagement)-UserRights)
*   2[Automatic Rights for Self-created Objects](#CMDB(UserRightsManagement)-AutomaticRightsforSelf-createdObjects)
*   3[Advanced Settings](#CMDB(UserRightsManagement)-AdvancedSettings)
*   4[Access Permissions Category](#CMDB(UserRightsManagement)-AccessPermissionsCategory)

You can assign a lot of user [rights](/display/en/Rights+Management) within the [IT documentation](/display/en/Glossary) of i-doit in order to achieve a fine-tuned definition of who can see and edit what. For this purpose, it is very useful to know the [structure of the IT documentation](../../basics/structure-of-the-it-documentation.md).

User Rights
-----------

You can reach the configuration with `**Administration → Authorization system → Rights → CMDB**`.

  

| ![](/download/attachments/61014337/page_add.png?version=1&modificationDate=1485951781375&api=v2)Create | ![](/download/attachments/61014337/page_magnify.png?version=1&modificationDate=1485951781405&api=v2) View1 | ![](/download/attachments/61014337/page_edit.png?version=1&modificationDate=1485951781420&api=v2) Edit | ![](/download/attachments/61014337/page_red.png?version=1&modificationDate=1485951781668&api=v2) Archive | ![](/download/attachments/61014337/page_delete.png?version=1&modificationDate=1485951781692&api=v2) Delete | ![](/download/attachments/61014337/page_go.png?version=1&modificationDate=1485951781710&api=v2)  Execute | ![](/download/attachments/61014337/user_gray.png?version=1&modificationDate=1485951781726&api=v2) Administrator | Condition2 | Parameter |
| --- | --- | --- | --- | --- | --- | --- | --- | --- |
| ![](/download/attachments/61014337/page_add.png?version=1&modificationDate=1485951781375&api=v2)Create | ![](/download/attachments/61014337/page_magnify.png?version=1&modificationDate=1485951781405&api=v2) View1 | ![](/download/attachments/61014337/page_edit.png?version=1&modificationDate=1485951781420&api=v2) Edit | ![](/download/attachments/61014337/page_red.png?version=1&modificationDate=1485951781668&api=v2) Archive | ![](/download/attachments/61014337/page_delete.png?version=1&modificationDate=1485951781692&api=v2) Delete | ![](/download/attachments/61014337/page_go.png?version=1&modificationDate=1485951781710&api=v2)  Execute | ![](/download/attachments/61014337/user_gray.png?version=1&modificationDate=1485951781726&api=v2) Administrator | Condition2 | Parameter |
| --- | --- | --- | --- | --- | --- | --- | --- | --- |
| –   | Display object in object list;<br><br>Activate quick info with mouseover | Exchange object in the Exchange extension;<br><br>Add **`Person`** to `**Person group**`4 | [Archive and restore](/display/en/Life+and+Documentation+Cycle) object | Mark object as [deleted](/display/en/Life+and+Documentation+Cycle) and restore | –   | [Delete](/display/en/Life+and+Documentation+Cycle) object irrevocably (`**purge**`) | `**Object-ID**` | Select one, several or all objects |
| Create new object of a type in object list | Display object in object list;<br><br>Activate quick info with mouseover | Create new [object of a type](../../basics/structure-of-the-it-documentation.md) | [Archive and restore](/display/en/Life+and+Documentation+Cycle) object type | Mark object of a type as [deleted](/display/en/Life+and+Documentation+Cycle) and restore | –   | Delete object of a type irrevocably (`**purge**`) | `**Object(s) of type**` | Select one, several or all object types |
| –   | Display object type configuration | Edit existing object type or create a new one | –   | Delete object type irrevocably (`**purge**`) | –   | without function | `**Object type configuration**` | Select one, several or all object types |
| –   | Display object underneath the location in object list;<br><br>Activate quick info with mouseover | Create new object underneath the location | –   | –   | –   | –   | `**Objects underneath a location**` | Select location |
| –   | Display object underneath the logical location in object list;<br><br>Activate quick info with mouseover | Create new object underneath the logical location | [Archive and restore](/display/en/Life+and+Documentation+Cycle) object underneath the logical location | Mark object beneath the logical location as [deleted](/display/en/Life+and+Documentation+Cycle) and restore | –   | Delete object beneath the logical location irrevocably (`**purge**`) | `**Objects underneath a logical location**` | Select logical location |
| –   | View attributes of a category | Edit existing category entry or create a new one | [Archive and restore](/display/en/Life+and+Documentation+Cycle) category entry | Mark category entry as [deleted](/display/en/Life+and+Documentation+Cycle) and restore | Use Ping and NSLOOKUP in `**Net**` category | Delete category entry irrevocably (`**purge**`) | `**Category**` | Select one, several or all categories |
| Create new entry in a list category (multi-valued) of a specific object type | View attributes of a category of a specific object type | Edit existing category entry of a specific object type or create a new one | [Archive and restore](/display/en/Life+and+Documentation+Cycle) category entry of a specific object type | Mark category entry of a specific object type as [deleted](/display/en/Life+and+Documentation+Cycle) and restore | Use Ping and NSLOOKUP in `**Net**` category | Delete category entry of a specific object type irrevocably (`**purge**`) | `**Category in object type**` | Select one, several or all categories of a specific object type |
| Create new entry in a list category (multi-valued) of a specific object | View attributes of a category of a specific object | Edit existing category entry of a specific object or create a new one | [Archive and restore](/display/en/Life+and+Documentation+Cycle) category entry of a specific object | Mark category entry of a specific object as [deleted](/display/en/Life+and+Documentation+Cycle) and restore | Use Ping and NSLOOKUP in `**Net**` category | Delete category entry of a specific object irrevocably (`**purge**`);<br><br>Add Person to `**Person group**`4 | `**Category in object**` | Select one, several or all categories of a specific object |
| Create new entry in a list category (multi-valued) of an object underneath a specific location | View attributes of a category underneath a location | Edit existing category entry underneath a location or create a new one | [Archive and restore](/display/en/Life+and+Documentation+Cycle) category entry underneath a location | Mark category entry beneath a location as [deleted](/display/en/Life+and+Documentation+Cycle) and restore | Use Ping and NSLOOKUP in `**Net**` category | Delete category entry beneath a location irrevocably (`**purge**`) | `**Category in objects beneath a location**` | Select one, several or all categories beneath a location |
| Create new entry in a list category (multi-valued) of a self-created object | View attributes of a category of a self-created object | Edit existing category entry of a self-created object or create a new one | [Archive and restore](/display/en/Life+and+Documentation+Cycle) category entry of a self-created object | Mark category entry of a self-created object as [deleted](/display/en/Life+and+Documentation+Cycle) and restore | Use Ping and NSLOOKUP in `**Net**` category | Delete category entry of a self-created object irrevocably (`**purge**`)<br><br>Add Person to `**Person group**`4 | `**Category/ categories in self-created objects  <br>**` | Select one, several or all categories of  self-created objects |
| –   | –   | –   | –   | –   | Save changes through [list editing](/display/en/List+Editing) | –   | `**[Multi edit](/display/en/List+Editing)**`3 | –   |
| –   | without function | –   | –   | –   | Adapt own [object lists](/display/en/Object+List) | –   | `**Define own object lists**` | –   |
| –   | without function | –   | –   | –   | Adapt [object lists](/pages/viewpage.action?pageId=61014337) of other users | –   | `**Overwrite the object lists of other users  <br>**` | –   |
| –   | without function | –   | –   | –   | Adapt [object lists](/display/en/Object+List) for new users | –   | `**Define object lists as default  <br>**` | –   |
| –   | Activate [CMDB explorer](/display/en/CMDB+Explorer) for each object | –   | –   | –   | –   | –   | `**[CMDB explorer](/display/en/CMDB+Explorer)**`3 | –   |
| –   | Apply profiles | Edit existing profiles or create a new one | –   | Delete existing profile irrevocably (`**purge**`) | –   | –   | `**[CMDB explorer profile](/display/en/Profiles+in+the+CMDB+Explorer)**` | –   |
| –   | View locations in a tree structure | –   | –   | –   | –   | –   | `**Location view  <br>**` | –   |

Notes:

1.  The View right for each condition is always ticked off and therefore the box is grayed-out.
2.  Some rights may overlap. For example, if a user has read rights for all objects, he/ she doesn't need additional read rights for objects of all object types.
3.  This function circumvents rights which are defined elsewhere. In order to observe all rights see _Advanced Settings_ below.
4.  If a person is added to a person group, this person inherits the rights of the group. To prevent that users are enabled to get additional rights, the administrator right is required for the respective category. Additionally, the Edit right for the [object ID](/display/en/Unique+References) condition for objects of the type `**Person**` or `**Person groups**` is needed.

![](/download/attachments/61014337/auhorization-conf-en.png?version=1&modificationDate=1631796473775&api=v2&effects=drop-shadow)

Automatic Rights for Self-created Objects
-----------------------------------------

If a user has the right to create a new object and uses it, he/ she automatically inherits the right to view and edit that object. However, this right isn't indicated in the rights management and it can't be revoked.

Advanced Settings
-----------------

Advanced settings are available for the CMDB module. These are not active as a standard but have to be entered under `**Administration → System settings → Expert settings.**` The respective `**Key**` is described as follows. You can activate the setting when you define `**Value**` with **`1`**. Deactivate the setting with `**Value**` `0`. All described settings only affect the currently active tenant and therefore have to be set to `**Tenant-wide**`.

*   `**auth.use-in-cmdb-explorer**`: The CMDB explorer takes all rights into account that were assigned elsewhere. Objects for which the user doesn't have read permission are neither displayed nor iterated. Else all objects are displayed without checking.
*   `**auth.use-in-cmdb-explorer-service-browser**`: With the `**Service Selection**` button the CMDB explorer provides all services for which the user has read access. Else all service objects can be selected without checking. 
*   `**auth.use-in-object-browser**`: Validation of the read permission is also activated in the [object browser](#) (as well as its derivates). Objects for which the user doesn't have read permission can't be selected. Already chosen objects (for example by other users) are displayed with `**[Hidden]**`. If this setting is inactive, all objects are shown in the object browser.
*   `**auth.use-in-location-tree**`: If the user is authorized to use the location view (as described above), all objects which are assigned to a location are displayed independent of their read permissions. If the setting is activated, the read permissions are examined for each object in this tree view. Should there be no read access for objects, these objects as well as all subjacent objects aren't displayed.

  

Performance

Consideration of the advanced settings may influence the performance of i-doit.

Access Permissions Category
---------------------------

The `**Access permissions**` category is displayed with a lock icon for each object and you can't deselect it. All permissions which are associated with the respective object are broken down per `**Person**` and `**Person group**`. Furthermore, you can extend the rights. You can't modify existing rights with this category; for this purpose, use the configuration described above.

![](/download/attachments/61014337/access-en.png?version=1&modificationDate=1631797172917&api=v2&effects=drop-shadow)