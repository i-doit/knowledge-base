---
title: Permission Assignment via Roles
description: Since version 1.18.2, you can assign permissions to users or groups on objects via the contact assignment.
icon:
status:
lang: en
---
# Permission Assignment via Roles

Since version 1.18.2, you can assign permissions to users or groups on objects via the contact assignment. The permissions can be linked to specific roles.

## Create a Group and Assign Users

First, create a person group (in the example "User Rights to Objects") and add the desired user as a member:

[![permissions-via-roles-testuser](../../assets/images/de/effizientes-dokumentieren/rechteverwaltung/rechtevergabe-ueber-rollen/1-rur.png)](../../assets/images/de/effizientes-dokumentieren/rechteverwaltung/rechtevergabe-ueber-rollen/1-rur.png)

## Permission Assignment

Switch to the permission assignment under **Administration > Permission System > Permission Assignment > CMDB**. Select the newly created group and click ![permissions-via-roles-icon](../../assets/images/de/effizientes-dokumentieren/rechteverwaltung/rechtevergabe-ueber-rollen/2-rur.png):

[![permissions-via-roles-assignment](../../assets/images/de/effizientes-dokumentieren/rechteverwaltung/rechtevergabe-ueber-rollen/3-rur.png)](../../assets/images/de/effizientes-dokumentieren/rechteverwaltung/rechtevergabe-ueber-rollen/3-rur.png)

Since this is a newly created group, no permissions exist yet. Set the following permissions:

### Objects with Assigned Role in the Contact Assignment

Here you set the desired permissions (View, Edit, Archive, Delete, Execute, Administrator) and select either all available roles or specific individual roles under the parameters.

### Categories in Objects with Assigned Role in the Contact Assignment

Here you set the desired permissions (Create, View, Edit, Archive, Delete, Execute, Administrator) and define via the parameters which roles and which categories are used for permission assignment.

### Example Configuration

In this example, all members of the group "User Rights to Objects" receive permissions on objects where they are linked in the contact assignment with the role **Employee**:

[![permissions-via-roles-configure](../../assets/images/de/effizientes-dokumentieren/rechteverwaltung/rechtevergabe-ueber-rollen/4-rur.png)](../../assets/images/de/effizientes-dokumentieren/rechteverwaltung/rechtevergabe-ueber-rollen/4-rur.png)
