# User right management via roles

With version [1.18.2](../../version-history/release-notes/release-notes-1.18/release-notes-1.18.2.md) we have added a new way of assigning rights in i-doit. It is now possible to give users or groups rights to objects by linking them via the contact assignment. Furthermore, the rights can also be linked to the assignment of certain roles.

## Create a Persongroup and add a user the group

Für unser Beispiel erstelle ich eine Test Gruppe in i-doit "User Rights to Objects" und packe einen "Test User" in die Mitgliederzuweisung der Gruppe.<br>
Create a Persongroup object and a Person object. Add the Person as member to the Persongroup, via Members category.

## Rights assignment

Now open the ==Administration -> User permissions== and open for example CMDB. Here you insert the title of the Persongroup object into `Person / Group` field or select a persongroup via the `Select` button and load the rights.<br>

### Condition: Objects with assigned role in contact assignment

Here you can set the appropriate rights (View, Edit, Archive, Delete, Execute, Administrator) and then select among the parameters either all available roles or only one or more roles that should be used for the assignment of rights.

### Condition: Categories in objects with assigned role in contact assignment

Here you can set the appropriate rights (Create, View, Edit, Archive, Delete, Execute, Administrator) and then select among the parameters either all available roles or only one or more roles and define whether all or only certain categories should be used for the assignment of rights.

### Example configuration

In diesem Beispiel bekommen dann alle Benutzer die Mitglied in der Gruppe "User Rights to Objects" bei Objekten wo Sie in der Kontaktzuweisung mit der Rolle Mitarbeiter verknüpft sind Rechte auf diese Objekte:

[![Assigned rights](../../assets/images/en/efficient-documentation/rights-management/user-right-management-via-roles/1-urmvr.png)](../../assets/images/en/efficient-documentation/rights-management/user-right-management-via-roles/1-urmvr.png)
