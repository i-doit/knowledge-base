---
title: "Category: Email Addresses"
description: Documentation of the Email Addresses category in i-doit
icon:
status:
lang: en
---

# Category: Email Addresses

The **Email Addresses** category records all email addresses of a person or person group. It is a **multi-value category** -- any number of addresses can be stored per object, such as a work and a personal email address or various functional addresses.

!!! warning "Primary email address and notifications"
    The email address marked as **primary** is used by i-doit for all automatic notifications. If no address is marked as primary, the person will not receive any email notifications -- even if they are assigned to an object via a [Contact assignment](contact.md). Therefore, always check for new persons that exactly one address is marked as primary.

## Usage

Typical use cases:

- **Notifications**: i-doit sends automatic notifications (e.g. when maintenance contracts or certificates expire) to the primary email address. Without a properly maintained email category, these notifications go undelivered.
- **Completing contact data**: Together with the person's master data (phone, department, location), the email address forms a complete contact record. This is particularly important for the service desk, which needs to quickly reach the right contact person in case of an incident.
- **Person groups and functional addresses**: For person groups (e.g. "IT Operations"), the shared functional mailbox can be stored here, e.g. `it-betrieb@firma.de`. Notifications sent to the group thus reach the entire team.
- **LDAP/AD synchronization**: When synchronizing with Active Directory or LDAP, the email address is often imported automatically. The category then serves as the target for mapping the `mail` attribute.

[![Email Addresses](../../assets/images/de/grundlagen/kategorien/mail-addresses.png)](../../assets/images/de/grundlagen/kategorien/mail-addresses.png)

## Fields

### Email Address

The actual email address, e.g. `max.mustermann@firma.de`. This field is the display value in the list view and in reports. Pay attention to correct spelling -- a typo here means that notifications will not be delivered.

### Primary Email Address

A read-only field that displays the email address currently marked as primary. This field is automatically populated from the entry where the **Primary** field is set to `Yes`. It provides a quick overview without having to review all entries.

### Primary

Determines whether this email address is the primary address of the object. Possible values: `Yes` or `No`. Exactly one address per object should be marked as primary. This address is used for notifications, LDAP export, and as the display in the contact assignment of other objects.

### Description

Free text for supplementary information: purpose of the address (work, personal, functional mailbox), delegation rules, or notes on availability.

## Technical Reference

| Property | Value |
|---|---|
| **Category Constant** | `C__CATG__MAIL_ADDRESSES` |
| **Type** | Global category |
| **Multi-Value** | Yes |
| **Assigned to** | Person, Person group |

### Fields (API Reference)

| Field | API Key | Type |
|---|---|---|
| **Email Address** | `title` | Text |
| **Primary Email Address** | `primary_mail` | Text |
| **Primary** | `primary` | Dialog (selection) |
| **Description** | `description` | Text field (multi-line) |

### API Examples

#### Create Entry

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "your-api-key",
        "object": 587,
        "category": "C__CATG__MAIL_ADDRESSES",
        "data": {
            "title": "max.mustermann@firma.de",
            "primary": 1,
            "description": "Business email address, primary mailbox"
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
        "object": 587,
        "category": "C__CATG__MAIL_ADDRESSES"
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
        "object": 587,
        "category": "C__CATG__MAIL_ADDRESSES",
        "entry": 12,
        "data": {
            "title": "m.mustermann@firma.de",
            "description": "Name change 2026-04: New email address after switch to short format."
        }
    },
    "id": 3
}
```
