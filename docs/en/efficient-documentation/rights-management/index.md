**Contents**

*   1[Positive Rights](#RightsManagement-PositiveRights)
*   2[Additive Rights](#RightsManagement-AdditiveRights)
*   3[General Structure of the Configuration](#RightsManagement-GeneralStructureoftheConfiguration)
*   4[Modules](#RightsManagement-Modules)
*   5[Restore Rights](#RightsManagement-RestoreRights)
*   6[Deactivation of Authorization System](#RightsManagement-DeactivationofAuthorizationSystem)
*   7[Authorization Config Category](#RightsManagement-AuthorizationConfigCategory)

Who is allowed to read and edit what data in i-doit?  
This frequently asked question is based on the intention to create a user rights concept for your own IT documentation.  
Not every person who is authorized for log-in should be allowed to read or even edit sensitive data.  
i-doit has a comprehensive rights management to protect your IT documentation from unauthorized access and to preserve its integrity.

  

Persons and Person Groups

You can assign rights to persons and groups of persons. When you assign a certain right to a group, all persons belonging to this group will inherit this permission. Users authorized for log-in are saved as objects of the type `**Person**` in i-doit. Groups have the type `**Person groups**`.

Create groups

It is a proven approach in the IT sector to create role concepts not for single users but for groups (often referred to as roles). In this way, handling is easier and smarter because users can be assigned to one or more groups. As a result, you only have to configure rights in a small number of points.

The default installation of i-doit has some `**Person**` objects which are assigned to `**Person groups**` and thus have predefined rights:

| User | Password | Group | Rights (outline only) |
| --- | --- | --- | --- |
| `admin` | `admin` | `Admin` | All rights, also for [administration](/pages/viewpage.action?pageId=61014472) |
| `archivar` | `archivar` | `Archivar` | Read and edit |
| `author` | `author` | `Author` | Create, edit, [archive](/display/en/Life+and+Documentation+Cycle) and execute |
| `editor` | `editor` | `Editor` | Read and edit |
| `reader` | `reader` | `Reader` | Read |

The listed users inherit their rights through the groups of the same name.

Connect rights to LDAP/AD

As already described in the article for [Initial Login](/display/en/Initial+Login), it makes sense to automate assignments of persons and groups with the connection to an [LDAP folder/ Active Directory (AD)](/pages/viewpage.action?pageId=37355601).

Positive Rights
---------------

The i-doit rights management follows the concept of positive rights. That means that you can assign permissions to persons or groups but you can't take them away.

Example: Person X is assigned to the groups `**Admin**` and `**Reader**`. Although the `**Reader**` group only has read rights in i-doit, person X is authorized to do everything, as person X also received rights of the `**Admin**` group which is permitted to do everything in i-doit.

Additive Rights
---------------

Furthermore, the rights add. If somebody is assigned to several groups, this person inherits the rights of all groups. Likewise, rights add when rights are assigned to the person and the person's corresponding groups.

Example: Person X is in the `**Reader**` group and allowed to read everything but not to edit data in i-doit. Additionally, person X obtains the right to create [reports](/display/en/Report+Manager). For this person this right is added to the permissions of the `**Reader**` group.

General Structure of the Configuration
--------------------------------------

For each module the configuration is always structured in the same way, only the rights differ. In the first step you either select an object of the type `**Person**` or `**Person group**` in the field `**Person / Person group**`. When you type the object title, matching objects will be suggested. A click on the `**Load rights**`  button loads the configuration which is saved for this module.

If a person inherits rights of associated groups, these inherited rights are also displayed, when rights for this specified person object are loaded. However, the inherited rights can't be modified and so they are shown as grayed out.

The configuration in the Web GUI is structured in tabular form.

| ![](/download/attachments/61014335/page_add.png?version=1&modificationDate=1507738218133&api=v2) | ![](/download/attachments/61014335/page_magnify.png?version=1&modificationDate=1507738248144&api=v2) | ![](/download/attachments/61014335/page_edit.png?version=1&modificationDate=1507738248250&api=v2) | ![](/download/attachments/61014335/page_red.png?version=1&modificationDate=1507738248270&api=v2) | ![](/download/attachments/61014335/page_delete.png?version=1&modificationDate=1507738248284&api=v2) | ![](/download/attachments/61014335/page_go.png?version=1&modificationDate=1507738278355&api=v2) | ![](/download/attachments/61014335/user_gray.png?version=1&modificationDate=1507738278406&api=v2) | Condition | Parameter | Action |
| --- | --- | --- | --- | --- | --- | --- | --- | --- | --- |
| Create | Read | Edit | Archive | Delete | Execute | Administrator | What area is involved? | Optional parameters | ![](/download/attachments/61014335/cross.png?version=1&modificationDate=1507738278438&api=v2) Remove right |

The **`Condition`** is selected from a drop-down menu. The first columns assign precise authorizations for this condition. Partly they are shown as grayed out and thus can't be activated because it makes no sense to assign rights for the condition in question. The optional parameters are also dependent on the condition. In the last column you can carry out actions (until now: remove rights).

![](/download/attachments/61014335/rights-admin-group-en.png?version=1&modificationDate=1631794430280&api=v2&effects=drop-shadow)

With a click on the `**New right**` button you can add a new line to the table.

Test rights

In order to test the consequences for the configuration, you could open a second browser (for example, in "private mode") and log in with a user who is affected by the configuration changes. You could also generate a test user whom you assign to the groups to be tested.

When you are ready with all the desired configurations, activate the rights with the `**Save**` button.

Renew cache

Sometimes it may be the case that rights are not activated immediately, for example, because the users in question are still logged in. In order to activate the new rights you have to renew the rights cache with `**Administration → System tools → Cache / Database → Cache → Clear auth-system cache**`. We also suggest to renew the cache [automatically with Cronjob on a regular basis](/display/en/CLI) .

Modules
-------

In order to keep the rights management in a clear structure all rights are divided into modules. You can find the modules under `**Administration → Authorization System → Rights**`.

*   `**Administration**`
    
*   `**Analyse**`
*   `**Authorization system**`
*   ``**`**[CMDB](/pages/viewpage.action?pageId=61014337)**`**``
*   `**Dashboard**`
    
*   ``**`**Dialog-Admin**`**``
    
*   `**Documents**`
    
*   `**Events**`
    
*   `**Export**`
    
*   ``**`**Floorplan**`**``
    
*   `**Import**`
    
*   `**Logbook**`
    
*   `**Maintenance**`
*   ``**`**Nagios**`**``
    
*   `**Notifications**`
    
*   `**Object swap  
    **`
    
*   `**Relocate-CI**`
    
*   `**Report Manager**`
    
*   ``**`**Search**`**``
    
*   `**Services**`
    
*   `**Templates/ Mass changes**`
    
*   `**VIVA**`
*   `**Wiring**`
    

Restore Rights
--------------

With `**Administration → Authorization system → Authorization system reset**` you can assign all rights to the user with whom you are currently logged in. This means that all available rights are assigned to the person object of this user. You have to enter the credentials for the [Admin Center](/display/en/Admin+Center) to activate this function.

Deactivation of Authorization System
------------------------------------

You can deactive the rights management to assign all rights to all users with `**Administration → System Settings → System Parameters** **→ Authorization System**`.

Authorization Config Category
-----------------------------

Additionally to the object types `**Persons**` and `**Person groups**` there is the `**Authorization config**` category. This category provides a strongly simplified configuration concerning the rights management of the above mentioned modules. The rights `**Read**`, `**Edit**`, `**Archive**`, `**Delete**`, `**Execute**` and `**Administrator**` are available for the single modules. This function is similar to the simple rights management of older i-doit versions. To see and apply this category you require the `**Administrator**` right for this category in the `**CMDB**` module.

![](/download/attachments/61014335/auhorization-conf-en.png?version=1&modificationDate=1631794990166&api=v2&effects=drop-shadow)

General idea

The `**Authorization config**` category offered the users of the then existing rights management a smooth changeover when the new rights management was introduced. However, now this category has become much less important. Therefore you shouldn't use it anymore. Under no circumstances you should mix the rights of single modules with configurations in this category at the same time.