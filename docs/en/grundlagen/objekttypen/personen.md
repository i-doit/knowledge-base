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

- [Service Assignment](../kategorien/it-service.md)
- [Assigned Workplaces](../kategorien/person-assigned-workstation.md)
- [Email Addresses](../kategorien/mail-addresses.md)
- [General](../kategorien/global.md)
- [Logbook](../kategorien/logbook.md)
- [Object Image](../kategorien/image.md)

### Specific Category

The specific category for this object type is [Persons](../kategorien/s-person.md).
The specific category for this object type is [Master Data](../kategorien/s-person-master.md).
The specific category for this object type is [Login](../kategorien/s-person-login.md).
The specific category for this object type is [Person group memberships](../kategorien/s-person-assigned-groups.md).
The specific category for this object type is [Assigned objects (Person)](../kategorien/s-person-contact-assignment.md).
The specific category for this object type is Authorization config.

## Technical Reference

| Property | Value |
|---|---|
| **Object Type Constant** | `C__OBJTYPE__PERSON` |
| **Group** | Persons |
