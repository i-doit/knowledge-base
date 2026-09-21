---
title: Changing the LDAP login attribute
description: "Switch the directory attribute that i-doit uses as user name, for example from sAMAccountName to userPrincipalName, without creating duplicate persons."
icon: octicons/person-add-24
lang: en
---

!!! warning "Please create a complete backup before making any changes to an interface/import. If the result is not satisfactory, the backup can then be restored"

This article shows you how to change the attribute that i-doit uses as **user name** for persons from your directory, for example from `sAMAccountName` to `userPrincipalName` in Active Directory, without ending up with every user twice.

By default, i-doit recognises a synchronised person by the user name, see [Identifying objects](index.md#identifying-objects). The user name comes from the **Username** attribute in the [Directories](index.md#directories) configuration. If you simply changed that attribute, the next `ldap-sync` would not find any of the existing persons under their new names and would create them a second time. The way around this is a second attribute that never changes, in Active Directory the `objectGUID`, which you import first and then declare as **Unique identifier**.

## Step 1: Import the objectGUID as an additional attribute

Open **Administration → Import and Interfaces → LDAP → Attribute extension**, click **Edit**, enter `objectGUID` as **Field title 1** and save. The name must be exactly the attribute name in the directory.

[![Attribute extension with objectGUID](../../assets/images/en/user-authentication-and-management/ldap-directory/change-login-attribute/1-cla.png)](../../assets/images/en/user-authentication-and-management/ldap-directory/change-login-attribute/1-cla.png)

Run the synchronisation once, for example with the [i-doit console](../../automation-and-integration/cli/index.md):

```shell
sudo -u www-data php console.php ldap-sync -u admin -p admin -i 1
```

Afterwards every synchronised person carries the value in the category **Persons** inside the folder of the same name, in the field that you just named.

[![objectGUID in the category Persons](../../assets/images/en/user-authentication-and-management/ldap-directory/change-login-attribute/2-cla.png)](../../assets/images/en/user-authentication-and-management/ldap-directory/change-login-attribute/2-cla.png)

!!! attention "Run this synchronisation before step 2"
    As long as the **Unique identifier** is not set, the sync still matches the persons by their current user name and fills in the new attribute. If you set the unique identifier first, the persons have no value to match against yet, see [Pitfalls](#pitfalls).

## Step 2: Use the objectGUID as unique identifier

Open **Administration → Import and Interfaces → LDAP → Server**, edit your server entry and set **Unique identifier** in the section **LDAP parameters for i-doit login** to `objectGUID`. The list offers the fields of the attribute extension. Save the entry.

[![Unique identifier in the LDAP server configuration](../../assets/images/en/user-authentication-and-management/ldap-directory/change-login-attribute/3-cla.png)](../../assets/images/en/user-authentication-and-management/ldap-directory/change-login-attribute/3-cla.png)

From now on `ldap-sync` looks up every user by this value before it looks at the user name. The LDAP log (`log/ldap_<date>.log`) shows this for each user:

```text
ldap.DEBUG: Check if user hackerman exists with configured unique Attribute: "objectGUID"
ldap.DEBUG: User with username "hackerman" found. Syncing..
```

## Step 3: Change the user name attribute

Open **Administration → Import and Interfaces → LDAP → Directories**, select **Active Directory** and change **Username** from `sAMAccountName` to `userPrincipalName`. Save and run the synchronisation again.

[![Directories with userPrincipalName as user name](../../assets/images/en/user-authentication-and-management/ldap-directory/change-login-attribute/4-cla.png)](../../assets/images/en/user-authentication-and-management/ldap-directory/change-login-attribute/4-cla.png)

Because the persons are found by their `objectGUID`, the sync keeps the existing objects and only renames the login:

```text
ldap.DEBUG: User with username "hackerman@synetics.test" found. Syncing.. Username has changed from "hackerman" to "hackerman@synetics.test". User hackerman@synetics.test has been reactivated.
```

Object IDs, permissions, group memberships and contact assignments stay as they are. Your users log in with the new name from now on, in this example with their `userPrincipalName`.

## Pitfalls

**Wrong order.** If the unique identifier is set while the persons do not have the attribute value yet, the sync refuses to touch the user and reports:

```text
Attention! A user with the username 'hackerman' already exists, but with a different or empty objectguid attribute value. A new user cannot be created using the same username.
 > Please review the existing user with object ID 4711 (in status normal) and consider updating the username. After making the necessary adjustments, please run the sync command again.
Failed synchronizing user: CN=hackerman,OU=Users,DC=synetics,DC=test
```

The person is then treated as no longer present in the directory and archived. To recover, clear the **Unique identifier** in the server entry, run the sync once so that the attribute is filled, set the unique identifier again and run the sync a second time.

**The attribute can still change.** The `userPrincipalName` changes when an account is renamed, for example after a marriage. That is fine as long as the `objectGUID` stays the unique identifier: the sync follows the rename in the same way as described above. Only the user has to log in with the new name.

**Which attribute for the login?** Whatever the **Username** mapping returns is what the user types into the login form. Tell your users before you switch.
