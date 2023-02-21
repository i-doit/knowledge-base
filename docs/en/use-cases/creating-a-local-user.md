i-doit already provides some local users with the default installation which you can use for the [initial login](/display/en/Initial+Login). This article describes how to create an additional local user.

LDAP/AD

Most of the options described in this article are not limited to local users but can be combined in connection with the [LDAP/AD interface](/pages/viewpage.action?pageId=37355601).

Emergency

You can also use local users when external authorization interfaces, such as LDAP/AD or [SSO](/pages/viewpage.action?pageId=37355648), are not  available. By this means, you can always access the IT documentation in case of an emergency.

**Contents**

*   1[Creating a New Object](#CreatingaLocalUser-CreatingaNewObject)
*   2[Contact Details](#CreatingaLocalUser-ContactDetails)
*   3[Local Login](#CreatingaLocalUser-LocalLogin)
*   4[User Settings](#CreatingaLocalUser-UserSettings)
    *   4.1[Login Credentials](#CreatingaLocalUser-LoginCredentials)
    *   4.2[Presentation](#CreatingaLocalUser-Presentation)
    *   4.3[Object Lists](#CreatingaLocalUser-ObjectLists)
    *   4.4[System Settings](#CreatingaLocalUser-SystemSettings)
*   5[Profile Picture](#CreatingaLocalUser-ProfilePicture)
*   6[Additional Settings](#CreatingaLocalUser-AdditionalSettings)
*   7[User Rights](#CreatingaLocalUser-UserRights)

Creating a New Object
---------------------

Users in i-doit are a part of the IT documentation, therefore all users are an [object](../basics/structure-of-the-it-documentation.md) of the type `**Persons**`. To create a local user, you initially create a new `**Persons**` object.

![Personen-Objekt](/download/attachments/66355798/object_person.png?version=1&modificationDate=1510139894088&api=v2&effects=drop-shadow "Personen-Objekt")

The object title (the `**Title**` attribute in the `**General**` category) should contain the complete name of the user. The object title corresponds directly with the attributes `**First name**` and `**Last name**` of the `**Persons → Master data**` category. If, for example, the last name of a user changes, the object title will be adapted automatically.

![](/download/attachments/66355798/object_person_master_data.png?version=1&modificationDate=1510139894076&api=v2&effects=drop-shadow)

Contact Details
---------------

It is very useful to fill in the details of the `**Persons → Master data**` category, especially the attributes `**E-mail address**` and `**Telephone company**`. If this person is assigned to another object (for example, as administrator of a server), these two attributes will be also displayed and thus allow quick contacting and communication without having to spend time for research. This link between person and server is carried out in the `**Persons → Assigned Objects**` category or within the server object in the `**Contact assignment**` category.

![](/download/attachments/66355798/object_person_assigend_objects.png?version=1&modificationDate=1510139894063&api=v2&effects=drop-shadow)

You can assign further e-mail addresses in the `**E-Mail addresses**` category.

Local Login
-----------

The user requires a user name and a password for login; both are assigned in the `**Persons → Login**` category.

![](/download/attachments/66355798/object_person_login.png?version=1&modificationDate=1510139894051&api=v2&effects=drop-shadow)

You can predefine the minimum length of a user password for each tenant. This can be carried out under `**Administration → System settings → Tenantsettings → Security → Minimum length of user passwords**`. Enter a positive integer value in this field.

User Settings
-------------

Each user can adapt i-doit individually. Many of these settings can be found under `**Administration → User settings**`.

### Login Credentials

Even if a user does not have the right to edit the above mentioned category `**Persons → Login**`, he or she can change their own password via `**Administration → User settings → Login credentials**`.

![Anmeldedaten](/download/attachments/66355798/user_settings_login_credentials.png?version=1&modificationDate=1510139894039&api=v2&effects=drop-shadow "Anmeldedaten")

### Presentation

The localisation and other settings can be executed by each user with `**Administration → User settings → Presentation**`.

| Option | Selection | Description |
| --- | --- | --- |
| Option | Selection | Description |
| --- | --- | --- |
| `**Choose language by browser ![](https://demo.i-doit.com/images/empty.gif)**` | `**Yes**`<br><br>`**No**` | Practically every web browser sends the languages preferred by the user. i-doit is able to evaluate these settings and apply them as far as possible. |
| `**Language**` | `**Deutsch**` (German)<br><br>`**English**` | If the language is not determined by the web browser (see above), the language can be selected and defined with this option. |
| `**Date format**` | `**Deutsch**` (German)<br><br>`**English**` | What about the format of date specifications? Possible are  **`TT.MM.JJJJ`** (German) or **`YYYY-MM-DD`** (English). |
| `**Numeric format**` | `**Deutsch**` (German)<br><br>`**English**` | What about the format of numbers? Possible are **`` `**x.xxx,xx**` ``** (German) or **`` `**x,xxx.xx**` ``** (English). |
| `**Default treeview**` | `**Object view**`<br><br>`**Location view  <br>**` | Which view shall be displayed automatically after login? You can change this setting at any time. |
| `**Treeview type**` | `**Combined view  <br>**`<br><br>`**Logical location  <br>**`<br><br>`**Physical location**` | You can separate the location view according to physical or logical locations. Physical locations are linked to a location path via the **`Location`** category and its associated category `**Locally assigned objects**`. A logical location refers to **`Workplaces`**. A combined view is possible. |

![Darstellung](/download/attachments/66355798/user_settings_presentation.png?version=1&modificationDate=1510139894027&api=v2&effects=drop-shadow "Darstellung")

### Object Lists

Each user may [individualize the respective object list](/display/en/Configuration+of+the+List+View) for each object type. This can be carried out under `**Administration → User settings → Object lists**`.

### System Settings

Several options referring to various features are available for the user under ``**`**Administration**` → `**User settings**` → System settings**``.

| Feature | `Option` | Data type | Description |
| --- | --- | --- | --- |
| Feature | `Option` | Data type | Description |
| --- | --- | --- | --- |
| `**Workflows**` | `**Entrylimit for filter view**` | Positive integer | –   |
| `**Object lists**` | `**Save last used list-filters**` | Positive integer or 0 | How many seconds shall filtered object lists remain in the cache before they are reset automatically? By entering "**`0`**", caching will be deactivated. |
|     | `**Entries per page in object lists**` | Positive integer | How many objects shall be displayed per page in an object list at the same time? |
| `**Quickinfo**` | `**Active**` | Yes/ No | When the user hovers over an object with the mouse, various attributes of the object are displayed in a pop-up window. |
|     | **`Delay`** | Positive floating point figure | With which delay shall the pop-up window be displayed? |

![Systemeinstellungen](/download/attachments/66355798/user_settings_system_settings.png?version=1&modificationDate=1510139894010&api=v2&effects=drop-shadow "Systemeinstellungen")

Profile Picture
---------------

With the **`Object picture`** category you can upload a profile picture for each user.

![Objektbild](/download/attachments/66355798/object_person_object_picture.png?version=1&modificationDate=1510139893973&api=v2&effects=drop-shadow "Objektbild")

Additional Settings
-------------------

Also in other areas the user has the option to make individual settings:

*   [Configuration of dashboard and widgets](/display/en/Dashboard+and+Widgets)
*   [Setting the profile in the CMDB explorer as default profile](/display/en/Profiles+in+the+CMDB+Explorer)
*   [Activated filters in object lists](/display/en/Navigation+and+Filtering)
*   my-doit

User Rights
-----------

[Rights](/display/en/Rights+Management) within i-doit can be assigned per user – or better – per person group. For this purpose, a user is assigned to the corresponding group. This group has the relevant rights which the user inherits. A user can be assigned to several groups and inherits the respective rights.