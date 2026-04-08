---
title: "Category: Assigned Objects (Organization)"
description: Documentation of the specific Assigned Objects for Organizations category in i-doit
icon:
status:
lang: en
---

# Category: Assigned Objects (Organization)

The **Assigned Objects** category shows all objects that are assigned to an organization through the [Contact assignment](contact.md) category. It is a **multi-value category** -- any number of assigned objects can appear per organization object, each with the role in which the organization is assigned to the object.

!!! info "Reverse view -- automatically populated"
    This category is a **reverse view** (backward category). The entries are not created through direct input in this category, but rather automatically: As soon as an organization is entered in the global [Contact assignment](contact.md) category of any object, that object appears here in the list. The category answers the question: "For which objects is this organization responsible?" -- without requiring this information to be maintained in two places.

## Usage

Typical use cases:

- **Responsibility overview**: Open an organization object (e.g. a service provider or an internal department) and see at a glance which servers, applications, contracts, or locations this organization is responsible for. This is particularly valuable during personnel changes, contract negotiations, or cancellations: You immediately recognize the "blast radius" of a change.
- **Service provider review**: As part of vendor audits, you can verify here which objects an external service provider has access to or responsibility for. The role (e.g. `Maintenance`, `Support`, `Operations`) shows in which capacity the service provider is involved.
- **Department inventory**: For internal organizational units, the category shows which IT assets are assigned to the respective department. A report on all objects of the organization "IT Department" provides a complete department inventory.
- **Contract management**: In combination with the [Organization](s-organization.md) category, this creates a complete picture: The master data of the organization plus all objects it is responsible for. During contract renewals or cancellations, it is immediately apparent which assets are affected.
- **Compliance and risk management**: Which objects depend on a single service provider? This category makes dependencies visible and supports the assessment of concentration risks (single point of failure at the organizational level).

!!! warning "Do not edit entries directly"
    Since this is a reverse view, changes to the assignments should **not be made here** but rather in the [Contact assignment](contact.md) of the respective target object. A change there automatically updates this view.

[![Assigned Objects (Organization)](../../assets/images/de/grundlagen/kategorien/s-organization-contact-assignment.png)](../../assets/images/de/grundlagen/kategorien/s-organization-contact-assignment.png)

## Fields

### Assigned object

The object that this organization is assigned to in the [Contact assignment](contact.md). Displayed as an object browser link and directly clickable to navigate to the linked object. Typical examples: a server, an application, a contract, or a location.

### Role

The role in which the organization is assigned to the object, e.g. `Administrator`, `Operator`, `Maintenance`, `Owner`, or `Service Provider`. Dialog+ field -- custom roles can be added as needed. The role is not just a label but can have operational implications: The permission system in i-doit can control access based on roles, and the notification system can send messages to specific roles.

## Technical Reference

| Property | Value |
|---|---|
| **Category Constant** | `C__CATS__ORGANIZATION_CONTACT_ASSIGNMENT` |
| **Type** | Specific category |
| **Multi-Value** | Yes |
| **Assigned to** | Organization |

### Fields (API Reference)

| Field | API Key | Type |
|---|---|---|
| **Assigned object** | `object` | Object browser (link) |
| **Role** | `role` | Dialog+ (extensible selection) |

### API Examples

#### Create Entry

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "your-api-key",
        "object": 200,
        "category": "C__CATS__ORGANIZATION_CONTACT_ASSIGNMENT",
        "data": {
            "object": 415,
            "role": 3
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
        "object": 200,
        "category": "C__CATS__ORGANIZATION_CONTACT_ASSIGNMENT"
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
        "object": 200,
        "category": "C__CATS__ORGANIZATION_CONTACT_ASSIGNMENT",
        "entry": 5,
        "data": {
            "role": 7
        }
    },
    "id": 3
}
```
