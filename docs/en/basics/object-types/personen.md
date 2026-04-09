---
title: "Object Type: Persons"
description: Documentation of the Persons object type in i-doit
icon:
status:
lang: en
---

# Object Type: Persons

The **Persons** object type documents individual employees, external service providers, and user accounts. Person objects are the human factor of the CMDB and link to objects, roles, and organizations.

## Usage

- **Contact Management**: Record name, email, phone, and department for all IT-relevant persons.
- **Responsibilities**: Assign persons via contact assignment as administrator, responsible person, or contact for an object.
- **Workstation**: Link a person with their workstation and assigned devices.
- **Login Accounts**: Record usernames for various systems as login information.
- **Organizational Structure**: Assign persons to a department or person group.

[![Persons](../../assets/images/de/grundlagen/objekttypen/personen.png)](../../assets/images/de/grundlagen/objekttypen/personen.png)

## Assigned Categories

### Global Categories

- [Service Assignment](../categories/it-service.md)
- [Assigned Workplaces](../categories/person-assigned-workstation.md)
- [Email Addresses](../categories/mail-addresses.md)
- [General](../categories/global.md)
- [Logbook](../categories/logbook.md)
- [Object Image](../categories/image.md)

### Specific Category

The specific category for this object type is [Persons](../categories/s-person.md).
The specific category for this object type is [Master Data](../categories/s-person-master.md).
The specific category for this object type is [Login](../categories/s-person-login.md).
The specific category for this object type is [Person group memberships](../categories/s-person-assigned-groups.md).
The specific category for this object type is [Assigned objects (Person)](../categories/s-person-contact-assignment.md).
The specific category for this object type is Authorization config.

## Technical Reference

| Property | Value |
|---|---|
| **Object Type Constant** | `C__OBJTYPE__PERSON` |
| **Group** | Persons |
