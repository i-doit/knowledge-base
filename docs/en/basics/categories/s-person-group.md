---
title: "Category: Person Groups (Specific)"
description: Documentation of the specific Person Groups category in i-doit
icon:
status:
lang: en
---

# Category: Person Groups (Specific)

The **Person Groups** category is the specific entry category for the object type **Person Group**. It bundles the core information of a group -- name, e-mail, phone, and LDAP mapping -- in one overview. The category is a **single-value category** -- exactly one record exists per person group.

!!! info "Specific category -- only on Person Group objects"
    This category is exclusively available on objects of the type **Person Group**. It is automatically assigned and cannot be manually assigned to other object types.

## Usage

Typical use cases:

- **Mapping teams and departments**: Create a person group object for every team, department, or responsibility group. The master data of the group (name, e-mail, phone) are maintained in this category, while members are assigned via the **Members** category.
- **Simplifying contact assignments**: Instead of assigning individual persons to every server, application, or network device, you can link an entire person group through the [Contact Assignment](contact.md). When personnel changes occur, it is sufficient to adjust the group membership -- all contact assignments of the group remain intact.
- **Controlling permissions through groups**: The permission system in i-doit supports group-based permissions. A person group can, for example, receive editing rights for specific object types or categories. All members of the group automatically inherit these rights.
- **LDAP group mapping**: Through the **LDAP Group (Mapping)** field, the i-doit person group is mapped to an Active Directory or LDAP group. During LDAP synchronization, the members of the AD group are then automatically entered as members in i-doit as well. This keeps group memberships current without manual maintenance effort.
- **Documenting team reachability**: The e-mail and phone fields allow storing functional mailboxes and team phone numbers. This way, in the contact assignment of a server, you can see not only that the "Network Team" is responsible, but also how to reach them.

[![Person Groups](../../assets/images/de/grundlagen/kategorien/s-person-group.png)](../../assets/images/de/grundlagen/kategorien/s-person-group.png)

## Fields

### Title

The name of the person group, e.g. `IT Administrators`, `Network Team`, or `Change Advisory Board`. This value appears in the contact assignment, in reports, and in the membership category of the individual persons.

### E-mail

The e-mail address of the group -- typically a functional mailbox such as `it-admins@example.com`. Used by the notification system when the person group is assigned as a contact.

### Phone

The phone number of the group, e.g. a team extension or hotline number.

### LDAP Group (Mapping)

The name or Distinguished Name of the associated LDAP/AD group, e.g. `CN=IT-Admins,OU=Groups,DC=example,DC=com`. Used for automatic synchronization of group memberships. When this field is set, i-doit reconciles the members of the AD group with the members of the i-doit person group during every LDAP sync.

!!! warning "Configure LDAP mapping correctly"
    For the LDAP group synchronization to work, group mapping must also be enabled in the i-doit administration under **LDAP > Directories**. The `ldap_group` field in this category alone is not sufficient -- it only defines the mapping, not the synchronization itself.

### Description

Free text for additional details: purpose of the group, areas of responsibility, availability hours, or organizational notes.

## Technical Reference

| Property | Value |
|---|---|
| **Category Constant** | `C__CATS__PERSON_GROUP` |
| **Type** | Specific category |
| **Multi-Value** | No |
| **Assigned to** | Person Group |

### Fields (API Reference)

| Field | API Key | Type |
|---|---|---|
| **Title** | `title` | Text |
| **E-mail** | `email_address` | Text |
| **Phone** | `phone` | Text |
| **LDAP Group (Mapping)** | `ldap_group` | Text |
| **Description** | `description` | Text field (multi-line) |

### API Examples

#### Create Entry

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "your-api-key",
        "object": 78,
        "category": "C__CATS__PERSON_GROUP",
        "data": {
            "title": "IT-Administratoren",
            "email_address": "it-admins@example.com",
            "phone": "+49 211 12345-200",
            "ldap_group": "CN=IT-Admins,OU=Groups,DC=example,DC=com",
            "description": "Zentrale Admingruppe fuer Server- und Netzwerk-Infrastruktur"
        }
    },
    "id": 1
}
```

#### Read Entries

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.read",
    "params": {
        "apikey": "your-api-key",
        "objID": 78,
        "category": "C__CATS__PERSON_GROUP"
    },
    "id": 2
}
```

#### Update Entry

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "your-api-key",
        "object": 78,
        "category": "C__CATS__PERSON_GROUP",
        "entry": 1,
        "data": {
            "email_address": "infra-team@example.com",
            "title": "Infrastruktur-Team",
            "description": "Umbenannt 2026-04: Ehemals IT-Administratoren, jetzt Infrastruktur-Team."
        }
    },
    "id": 3
}
```
