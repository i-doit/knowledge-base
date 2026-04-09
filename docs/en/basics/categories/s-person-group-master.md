---
title: "Category: Master Data (Person Group)"
description: Documentation of the Master Data for Person Group objects category in i-doit
icon:
status:
lang: en
---

# Category: Master Data (Person Group)

The **Master Data** category for a person group contains the core information of the group: name, e-mail address, phone number, and the LDAP group mapping. It is a **single-value category** -- exactly one master data record exists per person group.

!!! info "Relationship to the Person Groups category"
    The categories `C__CATS__PERSON_GROUP` and `C__CATS__PERSON_GROUP_MASTER` share the same fields. In the interface, `C__CATS__PERSON_GROUP` appears as the overview category, while `C__CATS__PERSON_GROUP_MASTER` is the actual data category. For API access to the master data of a person group, `C__CATS__PERSON_GROUP_MASTER` is typically used.

## Usage

Typical use cases:

- **Centralized group information management**: The name, e-mail, and phone number of the person group are maintained here. This data appears everywhere the group is referenced in a [Contact Assignment](contact.md) -- on servers, applications, network components, and all other objects.
- **Storing functional mailbox and team phone number**: The e-mail address is particularly important for the notification system in i-doit. When a person group is assigned as a contact to an object and a notification is triggered, the e-mail goes to the address stored here. This way, notifications reach the entire team through a functional mailbox rather than through individual addresses.
- **Configuring LDAP/AD group connection**: Through the **LDAP Group (Mapping)** field, the i-doit person group is mapped to a group in the directory service. During LDAP synchronization, the members of the AD/LDAP group are automatically entered and kept up to date as group members in i-doit.
- **Reporting and organization**: In the Report Manager, you can create evaluations such as "All person groups without an e-mail address" or "Person groups with LDAP mapping." This helps with quality assurance of the contact data and LDAP configuration.
- **API-driven group management**: Via the API, person groups can be created and updated automatically -- e.g. during the onboarding of new teams or during regular synchronization with an HR system.

[![Master Data Person Group](../../assets/images/de/grundlagen/kategorien/s-person-group-master.png)](../../assets/images/de/grundlagen/kategorien/s-person-group-master.png)

## Fields

### Title

The name of the person group, e.g. `IT Administrators`, `Network Team`, `Change Advisory Board`, or `1st Level Support`. This value appears in the contact assignment, in the person group membership of individual persons, and in reports. It should be unique and descriptive.

### E-mail

The e-mail address of the group, typically a functional mailbox such as `netzwerk-team@example.com`. Used by the notification system when the person group is assigned as a contact.

!!! warning "No e-mail means no notifications"
    When a person group is assigned as a contact but has no e-mail address stored, notifications from i-doit cannot be delivered to the group. Ensure that every active person group has a valid e-mail address.

### Phone

The phone number of the group, e.g. a team extension, hotline, or on-call number. Displayed in the contact assignment and enables quick access in case of an incident.

### LDAP Group (Mapping)

The name or Distinguished Name of the associated LDAP/AD group, e.g. `CN=Netzwerk-Team,OU=Groups,DC=example,DC=com`. Used for automatic synchronization of group memberships.

For the synchronization to work, group mapping must also be enabled and configured in the i-doit administration under **LDAP > Directories**.

### Description

Free text for additional details: purpose and scope of the group, availability hours, escalation paths, or organizational notes.

## Technical Reference

| Property | Value |
|---|---|
| **Category Constant** | `C__CATS__PERSON_GROUP_MASTER` |
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
        "category": "C__CATS__PERSON_GROUP_MASTER",
        "data": {
            "title": "Netzwerk-Team",
            "email_address": "netzwerk-team@example.com",
            "phone": "+49 211 12345-300",
            "ldap_group": "CN=Netzwerk-Team,OU=Groups,DC=example,DC=com",
            "description": "Zustaendig fuer LAN, WAN und Firewall-Infrastruktur"
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
        "category": "C__CATS__PERSON_GROUP_MASTER"
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
        "category": "C__CATS__PERSON_GROUP_MASTER",
        "entry": 1,
        "data": {
            "email_address": "infra-netzwerk@example.com",
            "phone": "+49 211 12345-350",
            "description": "Aktualisiert 2026-04: New Durchwahl und E-Mail nach Teamrestrukturierung."
        }
    },
    "id": 3
}
```
