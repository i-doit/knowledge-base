# Creating a local user

i-doit already provides some local users with the default installation which you can use for the [initial login](../basics/initial-login.md). This article describes how to create an additional local user.

!!! check "LDAP/AD"

    Most of the options described in this article are not limited to local users but can be combined in connection with the [LDAP/AD interface](../user-authentication-and-management/ldap-directory/index.md).

!!! check "Emergency"

    You can also use local users when external authorization interfaces, such as LDAP/AD or [SSO](../user-authentication-and-management/sso-comparison/index.md), are not available. By this means, you can always access the IT documentation in case of an emergency.

Creating a New Object
---------------------

Users in i-doit are a part of the IT documentation, therefore all users are an [object](../basics/structure-of-the-it-documentation.md) of the type **Persons**. To create a local user, you initially create a new **Persons** object.

[![creating-a-local-user-person](../assets/images/en/use-cases/creating-a-local-user/1-calu.png)](../assets/images/en/use-cases/creating-a-local-user/1-calu.png)

The object title (the **Title** attribute in the **General** category) should contain the complete name of the user. The object title corresponds directly with the attributes **First name** and **Last name** of the **Persons → Master data** category. If, for example, the last name of a user changes, the object title will be adapted automatically.

[![creating-a-local-user-object-title](../assets/images/en/use-cases/creating-a-local-user/2-calu.png)](../assets/images/en/use-cases/creating-a-local-user/2-calu.png)

Contact Details
---------------

It is very useful to fill in the details of the **Persons → Master data** category, especially the attributes **E-mail address** and **Telephone company**. If this person is assigned to another object (for example, as administrator of a server), these two attributes will be also displayed and thus allow quick contacting and communication without having to spend time for research. This link between person and server is carried out in the **Persons → Assigned Objects** category or within the server object in the **Contact assignment** category.

[![creating-a-local-user-person](../assets/images/en/use-cases/creating-a-local-user/3-calu.png)](../assets/images/en/use-cases/creating-a-local-user/3-calu.png)

You can assign further e-mail addresses in the **E-Mail addresses** category.

Local Login
-----------

The user requires a user name and a password for login; both are assigned in the **Persons → Login** category.

[![creating-a-local-user-password](../assets/images/en/use-cases/creating-a-local-user/4-calu.png)](../assets/images/en/use-cases/creating-a-local-user/4-calu.png)

You can predefine the minimum length of a user password for each tenant. This can be carried out under **Administration → System settings → Tenantsettings → Security → Minimum length of user passwords**. Enter a positive integer value in this field.

User Settings
-------------

Each user can adapt i-doit individually. Many of these settings can be found under **Administration → User settings**.

### Login Credentials

Even if a user does not have the right to edit the above mentioned category **Persons → Login**, he or she can change their own password via **Administration → User settings → Login credentials**.

[![creating-a-local-user-person](../assets/images/en/use-cases/creating-a-local-user/5-calu.png)](../assets/images/en/use-cases/creating-a-local-user/5-calu.png)

### Presentation

The localisation and other settings can be executed by each user with **Administration → User settings → Presentation**.

| Option | Selection | Description |
| --- | --- | --- |
| **Choose language by browser ![](https://demo.i-doit.com/images/empty.gif)** | **Yes**<br><br>**No** | Practically every web browser sends the languages preferred by the user. i-doit is able to evaluate these settings and apply them as far as possible. |
| **Language** | **Deutsch** (German)<br><br>**English** | If the language is not determined by the web browser (see above), the language can be selected and defined with this option. |
| **Date format** | **Deutsch** (German)<br><br>**English** | What about the format of date specifications? Possible are  **TT.MM.JJJJ** (German) or **YYYY-MM-DD** (English). |
| **Numeric format** | **Deutsch** (German)<br><br>**English** | What about the format of numbers? Possible are ** **x.xxx,xx** ** (German) or ** **x,xxx.xx** ** (English). |
| **Default treeview** | **Object view**<br><br>**Location view  <br>** | Which view shall be displayed automatically after login? You can change this setting at any time. |
| **Treeview type** | **Combined view  <br>**<br><br>**Logical location  <br>**<br><br>**Physical location** | You can separate the location view according to physical or logical locations. Physical locations are linked to a location path via the **Location** category and its associated category **Locally assigned objects**. A logical location refers to **Workplaces**. A combined view is possible. |

[![creating-a-local-user-person](../assets/images/en/use-cases/creating-a-local-user/6-calu.png)](../assets/images/en/use-cases/creating-a-local-user/6-calu.png)

### Object Lists

Each user may [individualize the respective object list](../basics/object-list/configure-object-lists.md) for each object type. This can be carried out under **Administration → User settings → Object lists**.

### System Settings

Several options referring to various features are available for the user under ****Administration** → **User settings** → System settings**.

| Feature | Option | Data type | Description |
| --- | --- | --- | --- |
| **Workflows** | **Entrylimit for filter view** | Positive integer | –   |
| **Object lists** | **Save last used list-filters** | Positive integer or 0 | How many seconds shall filtered object lists remain in the cache before they are reset automatically? By entering "**0**", caching will be deactivated. |
|     | **Entries per page in object lists** | Positive integer | How many objects shall be displayed per page in an object list at the same time? |
| **Quickinfo** | **Active** | Yes/ No | When the user hovers over an object with the mouse, various attributes of the object are displayed in a pop-up window. |
|     | **Delay** | Positive floating point figure | With which delay shall the pop-up window be displayed? |

[![creating-a-local-user-person](../assets/images/en/use-cases/creating-a-local-user/7-calu.png)](../assets/images/en/use-cases/creating-a-local-user/7-calu.png)

Profile Picture
---------------

With the **Object picture** category you can upload a profile picture for each user.

[![creating-a-local-user-person](../assets/images/en/use-cases/creating-a-local-user/8-calu.png)](../assets/images/en/use-cases/creating-a-local-user/8-calu.png)

Additional Settings
-------------------

Also in other areas the user has the option to make individual settings:

*   [Configuration of dashboard and widgets](../basics/dashboard-and-widgets.md)
*   [Setting the profile in the CMDB explorer as default profile](../evaluation/cmdb-explorer/profiles-in-the-cmdb-explorer.md)
*   [Activated filters in object lists](../basics/object-list/navigation-and-filtering.md)
*   my-doit

User Rights
-----------

[Rights](../efficient-documentation/rights-management/index.md) within i-doit can be assigned per user – or better – per person group. For this purpose, a user is assigned to the corresponding group. This group has the relevant rights which the user inherits. A user can be assigned to several groups and inherits the respective rights.
