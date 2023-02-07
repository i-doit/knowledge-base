**Contents**

*   1 [Default Users and Default Groups](#InitialLogin-DefaultUsersandDefaultGroups)
*   2[Login](#InitialLogin-Login)
*   3[Add Further Users and Groups](#InitialLogin-AddFurtherUsersandGroups)
*   4[Welcome Text](#InitialLogin-WelcomeText)

i-doit is [installed](/display/en/Installation) and you want to log in for the first time? No problem at all! However, there are a few things to keep in mind and that is why it's worth reading this article.

Default Users and Default Groups
--------------------------------

There are some default users for login which are assigned to default groups and therefore have predefined [permissions](/display/en/Rights+Management).

| User | Password | Group | Permissions (short description) |
| --- | --- | --- | --- |
| User | Password | Group | Permissions (short description) |
| --- | --- | --- | --- |
| `**admin**` | `**admin**` | `**Admin**` | All rights, also for administration |
| `**archivar**` | `**archivar**` | `**Archivar**` | Read and edit |
| `**author**` | `**author**` | `**Author**` | Create, edit, archive and execute |
| `**editor**` | `**editor**` | `**Editor**` | Read and edit |
| `**reader**` | `**reader**` | `**Reader**` | Read |

The listed users receive their permissions through the groups of the same name.

Login
-----

Preferably select the `**admin**` user from the above mentioned default users as this user's functionality is not restricted.

![Login](/download/attachments/37355574/login.png?version=1&modificationDate=1492697412613&api=v2)

Add Further Users and Groups
----------------------------

Each user in i-doit is an [object](/display/en/Structure+of+the+IT+Documentation) of the type `**Persons**`. After the initial login, we _strongly recommend_ to set up a [LDAP connection](/pages/viewpage.action?pageId=37355601) or other local users _and_ to change the credentials of the above mentioned users. For this purpose, you can select the particular user in the [object group](/display/en/Structure+of+the+IT+Documentation) C`**ontacts**` under the [object type](/display/en/Structure+of+the+IT+Documentation) `**Persons**` and change the credentials in the category `**Persons → Login**`. Alternatively, you can [archive](/display/en/Life+and+Documentation+Cycle) the `**Persons**` objects. In doing this, the login of these users is denied.

![](/download/attachments/37355574/Initiallogin1.png?version=1&modificationDate=1464006288193&api=v2)

Local administrator

Even when you use a [LDAP directory server or an Active Directory (AD)](/pages/viewpage.action?pageId=37355601), it is recommendable to set up a local user with all permissions. So you could always login with the local administrator should the external service be unavailable.

Welcome Text
------------

When you want to welcome users with a text during the login process, it is possible to enter a corresponding text under `**Administration → System settings → Login →**` `**Welcome text for Login**`.

![Login mit Begrüßungstext](/download/attachments/37355574/login_welcome_text.png?version=1&modificationDate=1492697411790&api=v2 "Login mit Begrüßungstext")