# Initial Login

i-doit is [installed](../installation/index.md) and you want to log in for the first time? No problem at all! However, there are a few things to keep in mind and that is why it's worth reading this article.

Default Users and Default Groups
--------------------------------

There are some default users for login which are assigned to default groups and therefore have predefined [permissions](./../efficient-documentation/rights-management/index.md).

| User | Password | Group | Permissions (short description) |
| --- | --- | --- | --- |
| **admin** | **admin** | **Admin** | All rights, also for administration |
| **archivar** | **archivar** | **Archivar** | Read and edit |
| **author** | **author** | **Author** | Create, edit, archive and execute |
| **editor** | **editor** | **Editor** | Read and edit |
| **reader** | **reader** | **Reader** | Read |

The listed users receive their permissions through the groups of the same name.

Login
-----

Preferably select the **admin** user from the above mentioned default users as this user's functionality is not restricted.

[![Login](../assets/images/en/basics/initial-login/1-il.png)](../assets/images/en/basics/initial-login/1-il.png)

Add Further Users and Groups
----------------------------

<<<<<<< HEAD
Each user in i-doit is an [object](../../basics/structure-of-the-it-documentation.md) of the type `**Persons**`. After the initial login, we _strongly recommend_ to set up a [LDAP connection](/pages/viewpage.action?pageId=37355601) or other local users _and_ to change the credentials of the above mentioned users. For this purpose, you can select the particular user in the [object group](../../basics/structure-of-the-it-documentation.md) C`**ontacts**` under the [object type](../../basics/structure-of-the-it-documentation.md) `**Persons**` and change the credentials in the category `**Persons → Login**`. Alternatively, you can [archive](/display/en/Life+and+Documentation+Cycle) the `**Persons**` objects. In doing this, the login of these users is denied.
=======
Each user in i-doit is an [object](./structure-of-the-it-documentation.md) of the type **Persons**. After the initial login, we _strongly recommend_ to set up a [LDAP connection](../automation-and-integration/ldap-active-directory-ad/index.md) or other local users _and_ to change the credentials of the above mentioned users. For this purpose, you can select the particular user in the [object group](./structure-of-the-it-documentation.md) **Contacts** under the [object type](./structure-of-the-it-documentation.md) **Persons** and change the credentials in the category **Persons → Login**. Alternatively, you can [archive](./life-and-documentation-cycle.md) the **Persons** objects. In doing this, the login of these users is denied.
>>>>>>> main

[![Login](../assets/images/en/basics/initial-login/1-il.png)](../assets/images/en/basics/initial-login/1-il.png)

Local administrator

Even when you use a [LDAP directory server or an Active Directory (AD)](../automation-and-integration/ldap-active-directory-ad/index.md), it is recommendable to set up a local user with all permissions. So you could always login with the local administrator should the external service be unavailable.

Welcome Text
------------

When you want to welcome users with a text during the login process, it is possible to enter a corresponding text under **Administration → System settings → Login →** **Welcome text for Login**.

[![Login mit Begrüßungstext](../assets/images/en/basics/initial-login/3-il.png)](../assets/images/en/basics/initial-login/3-il.png)