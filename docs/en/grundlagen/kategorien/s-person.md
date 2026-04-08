---
title: "Category: Persons (Specific)"
description: Documentation of the specific Persons category in i-doit
icon:
status:
lang: en
---

# Category: Persons (Specific)

The **Persons** category is the specific entry category for the object type **Person**. It bundles all person-related information in one overview and displays the most important fields from the subordinate categories [Master Data](s-person-master.md), [Login](s-person-login.md), and [Person group membership](s-person-assigned-groups.md) in a consolidated view.

!!! info "Specific category -- only on Person objects"
    This category is exclusively available on objects of the type **Person**. It is automatically assigned and cannot be manually assigned to other object types.

## Usage

Typical use cases:

- **Quick overview**: The category displays first name, last name, e-mail, phone, and other master data at a glance -- without having to open each subcategory individually. Ideal for daily use in the helpdesk or during inventory.
- **Integration with contact assignment**: Person objects are linked to any objects via the global [Contact assignment](contact.md) category. The master data maintained here (name, phone, e-mail) then appear everywhere the contact is assigned.
- **LDAP/AD synchronization**: During automatic synchronization with a directory service, the fields in this category are populated. The LDAP-specific fields `ldap_id` and `ldap_dn` show which directory the person originates from.
- **Reporting**: In the Report Manager, all persons can be evaluated with their master data -- e.g. "All persons in the IT department" or "Persons without an assigned organization."

[![Persons (specific)](../../assets/images/de/grundlagen/kategorien/s-person.png)](../../assets/images/de/grundlagen/kategorien/s-person.png)

## Fields

### Salutation

The salutation for the person, e.g. `Mr.` or `Ms.`. Dialog field with predefined values.

### First name

The first name of the person. This field, together with the last name, is used for display in lists, the contact assignment, and in reports.

### Last name

The last name of the person. Together with the first name, it forms the display name of the Person object.

### Academic degree

An optionally academic title, e.g. `Dr.` or `Prof.`. It is prepended to the name in the display, if maintained.

### Function

The function or job title of the person within the organization, e.g. `System Administrator` or `IT Department Head`.

### Service designation

A supplementary official title, e.g. a civil service title or a specific role designation.

### Street

The street address of the person (business).

### City

The city of the person (business).

### Zip code

The zip code of the person (business).

### E-mail address

The primary e-mail address of the person. This field is evaluated by the notification system -- without a maintained e-mail address, no notifications can be delivered.

### Phone (Company)

The business phone number of the person.

### Phone (Private)

The private phone number of the person. Only maintain this if organizationally desired.

### Mobile phone

The mobile phone number of the person.

### Fax

The fax number of the person.

### Pager

The pager number of the person.

### Personnel number

The internal personnel number from the HR system. Useful for unique identification when multiple people share the same name and for automated synchronization with HR management systems.

### Department

The department the person is assigned to, e.g. `IT`, `Finance`, or `Sales`. Helpful for reports and filtering.

### Organization

The organization (company) the person is assigned to. Object browser field -- an existing organization object is linked.

### LDAP ID

The ID of the person in the connected directory service. Automatically populated during LDAP synchronization.

### LDAP DN

The Distinguished Name (DN) of the person in the directory service, e.g. `CN=Max Mustermann,OU=IT,DC=example,DC=com`. Automatically populated during LDAP synchronization.

### Custom fields 1--8

Eight freely usable text fields for individual supplementary information that cannot be captured in any of the standard fields. The titles of the custom fields can be customized in the i-doit administration.

### Description

Free text for additional information about the person: availability, special arrangements, deputy information, or other notes.

## Technical Reference

| Property | Value |
|---|---|
| **Category Constant** | `C__CATS__PERSON` |
| **Type** | Specific category |
| **Multi-Value** | No |
| **Assigned to** | Person |

!!! note "Relationship to Master Data"
    The categories `C__CATS__PERSON` and `C__CATS__PERSON_MASTER` share the same fields. `C__CATS__PERSON` is the parent specific category that appears in the interface as a summary. For targeted API editing of the master data, `C__CATS__PERSON_MASTER` is usually used -- see [Master Data (Person)](s-person-master.md).

### Fields (API Reference)

| Field | API Key | Type |
|---|---|---|
| **Salutation** | `salutation` | Dialog (selection) |
| **First name** | `first_name` | Text |
| **Last name** | `last_name` | Text |
| **Academic degree** | `academic_degree` | Text |
| **Function** | `function` | Text |
| **Service designation** | `service_designation` | Text |
| **Street** | `street` | Text |
| **City** | `city` | Text |
| **Zip code** | `zip_code` | Text |
| **E-mail address** | `mail` | Text |
| **Phone (Company)** | `phone_company` | Text |
| **Phone (Private)** | `phone_home` | Text |
| **Mobile phone** | `phone_mobile` | Text |
| **Fax** | `fax` | Text |
| **Pager** | `pager` | Text |
| **Personnel number** | `personnel_number` | Text |
| **Department** | `department` | Text |
| **Organization** | `organization` | Object browser (link) |
| **LDAP ID** | `ldap_id` | Text |
| **LDAP DN** | `ldap_dn` | Text |
| **Description** | `description` | Text field (multi-line) |
| **Custom 1--8** | `custom_1` to `custom_8` | Text |

### API Examples

#### Create Entry

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "your-api-key",
        "object": 1234,
        "category": "C__CATS__PERSON",
        "data": {
            "salutation": "Herr",
            "first_name": "Max",
            "last_name": "Mustermann",
            "mail": "m.mustermann@example.com",
            "phone_company": "+49 211 12345-100",
            "department": "IT",
            "organization": 56,
            "description": "Hauptansprechpartner Netzwerk-Infrastruktur"
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
        "objID": 1234,
        "category": "C__CATS__PERSON"
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
        "object": 1234,
        "category": "C__CATS__PERSON",
        "entry": 1,
        "data": {
            "department": "IT-Security",
            "phone_mobile": "+49 171 9876543",
            "description": "Abteilungswechsel 2026-04: Ab sofort IT-Security."
        }
    },
    "id": 3
}
```
