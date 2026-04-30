---
title: "Category: Master Data (Person)"
description: Documentation of the Master Data category for Person objects in i-doit
icon:
status:
lang: en
---

# Category: Master Data (Person)

The **Master Data** category is the central data sheet of a Person object. It stores the name, contact information, department, organization, and other person-related fields. It is a **single-value category** -- exactly one master data record exists per person.

!!! warning "The core of every Person in i-doit"
    The master data are the foundation for virtually everything that happens with persons in i-doit: The e-mail address maintained here is used for notifications, the name appears in every contact assignment and in reports, and the organization links the person to their company. **Unmaintained master data lead to empty contact assignments, failed notifications, and unusable reports.** Invest in clean master data -- ideally automated through LDAP synchronization.

## Usage

Typical use cases:

- **Centralized contact management**: Record first name, last name, e-mail, phone numbers, and address in one place. This data is referenced everywhere in i-doit -- in the [Contact assignment](contact.md), in reports, and in notifications.
- **Mapping organizational affiliation**: Through the **Organization** field, the person is linked to an organization object. This immediately shows which company or institution the person belongs to. In reports, you can then evaluate queries such as "All persons of organization XY who are assigned to servers as administrators."
- **LDAP/AD synchronization**: During automatic synchronization with Active Directory or OpenLDAP, the master data fields are automatically populated and kept up to date. The fields `ldap_id` and `ldap_dn` serve as the unique mapping to the directory entry. After the initial import, a regular sync is sufficient to automatically incorporate name changes, department transfers, and new employees.
- **HR integration**: The personnel number enables matching with HR management systems. Through the custom fields 1--8, additional HR-specific information can be captured that does not fit into any standard field.
- **Reporting and compliance**: In the Report Manager, you can create evaluations such as "All persons without an e-mail address," "Persons without an assigned organization," or "Employees of the IT department with their assigned objects."

[![Master Data (Person)](../../assets/images/de/grundlagen/kategorien/s-person-master.png)](../../assets/images/de/grundlagen/kategorien/s-person-master.png)

## Fields

### Salutation

The salutation for the person, e.g. `Mr.` or `Ms.`. Dialog field with predefined values. It is prepended to the formal display of the name.

### First name

The first name of the person. Together with the last name, it forms the display name that appears in lists, the contact assignment, and in reports.

### Last name

The last name of the person. Mandatory field in practice -- without a last name, the person is barely identifiable in lists and reports.

### Academic degree

An optionally academic title, e.g. `Dr.`, `Prof.`, or `Dipl.-Ing.`. It is prepended to the name in the display.

### Function

The function or job title within the organization, e.g. `System Administrator`, `Infrastructure Team Lead`, or `CISO`. Helpful for quickly identifying the person's responsibility.

### Service designation

A supplementary official title, e.g. a civil service title or a contractual role designation.

### Street

The street address of the person (business). Useful for location assignments and postal communication.

### City

The city (business).

### Zip code

The zip code (business).

### E-mail address

The primary e-mail address of the person. **One of the most important fields** -- without a maintained e-mail address, notifications from i-doit cannot be delivered, and the person cannot be reached by e-mail.

### Phone (Company)

The business phone number. It is displayed in the contact assignment and is intended for quick access in case of an incident.

### Phone (Private)

The private phone number. Only maintain this if organizationally desired and permissible under data protection regulations.

### Mobile phone

The mobile phone number of the person. Particularly relevant for on-call duties and escalations.

### Fax

The fax number of the person.

### Pager

The pager number of the person.

### Personnel number

The internal personnel number from the HR or ERP system. Enables unique identification independent of the name -- especially important when multiple people share the same name and for automated data synchronization.

### Department

The department the person is assigned to, e.g. `IT`, `Finance`, `HR`, or `Management`. Text field -- can be freely described. Useful as a filter in reports.

### Organization

The associated organization as an object link. An available organization object is selected via the object browser. This creates a bidirectional connection: The organization displays all assigned employees in its [Persons](s-organization-persons.md) category.

### LDAP ID

The ID of the person in the connected directory service (Active Directory, OpenLDAP). Automatically populated during LDAP synchronization and serves as the unique mapping.

### LDAP DN

The Distinguished Name (DN) in the directory service, e.g. `CN=Max Mustermann,OU=IT,DC=example,DC=com`. Automatically populated during LDAP synchronization and should not be changed manually.

### Custom fields 1--8

Eight freely usable text fields for individual supplementary information. The titles can be customized in the i-doit administration, e.g. `Cost center`, `Building`, `Location code`, or `Contract number`.

### Description

Free text for additional details: availability, special arrangements, deputy information, onboarding notes, or other information.

## Technical Reference

| Property | Value |
|---|---|
| **Category Constant** | `C__CATS__PERSON_MASTER` |
| **Type** | Specific category |
| **Multi-Value** | No |
| **Assigned to** | Person |

!!! tip "Master Data vs. Person category"
    The categories `C__CATS__PERSON` and `C__CATS__PERSON_MASTER` share the same fields. In the interface, `C__CATS__PERSON` appears as the overview category, while `C__CATS__PERSON_MASTER` is the actual data category. For API access to the master data, `C__CATS__PERSON_MASTER` is typically used.

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
        "category": "C__CATS__PERSON_MASTER",
        "data": {
            "first_name": "Max",
            "last_name": "Mustermann",
            "salutation": "Herr",
            "academic_degree": "Dr.",
            "mail": "m.mustermann@example.com",
            "phone_company": "+49 211 12345-100",
            "phone_mobile": "+49 171 9876543",
            "department": "IT",
            "function": "Systemadministrator",
            "organization": 56,
            "personnel_number": "P-20240001",
            "description": "Ansprechpartner Netzwerk und Firewall"
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
        "category": "C__CATS__PERSON_MASTER"
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
        "category": "C__CATS__PERSON_MASTER",
        "entry": 1,
        "data": {
            "department": "IT-Security",
            "function": "Security Engineer",
            "description": "Abteilungswechsel 2026-04: Von IT zu IT-Security."
        }
    },
    "id": 3
}
```
