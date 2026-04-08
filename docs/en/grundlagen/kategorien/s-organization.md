---
title: "Category: Organization"
description: Documentation of the specific Organization category in i-doit
icon:
status:
lang: en
---

# Category: Organization

The **Organization** is a **specific category** for the object type **Organization** and describes the master data of an organization. It is a **single-value category** -- exactly one entry exists per organization object with the fundamental contact data such as company name, phone, fax, website, and headquarters designation.

!!! info "Organization vs. Contact assignment -- two perspectives"
    This category describes **what** an organization **is** -- its identity and reachability. It does not answer the question of which objects are assigned to this organization. That is the responsibility of the [Assigned Objects](s-organization-contact-assignment.md) category, which as a reverse view shows all objects where this organization is entered in the [Contact Assignment](contact.md). The separation follows the i-doit principle: The organization is maintained once centrally and can then be assigned to any number of objects.

## Usage

Typical use cases:

- **Managing suppliers and service providers**: Create an organization object for every external partner (hardware supplier, software vendor, maintenance service provider, cloud provider) and maintain the contact data here. In combination with the [Contact Assignment](contact.md) on the managed objects, this creates a complete mapping: Which service provider is responsible for which servers, applications, or contracts?
- **Mapping internal departments**: Internal organizational units (IT department, facility management, management) can also be maintained as organization objects. The contact data facilitates reachability, and through the contact assignment you can evaluate which assets are assigned to which department.
- **Designating headquarters**: The headquarters field marks whether this is the main location of an organization or a branch office. In corporations with many locations, a report provides an overview: Which organizations are headquarters, which are branch offices?
- **Reporting and evaluations**: In the Report Manager, you can create evaluations such as "All organizations without a phone number" or "All service providers with a website" -- useful for data maintenance campaigns and contact lists.
- **Compliance and contract management**: In combination with the Contract Assignment category, it becomes clear which contracts exist with which organization. The contact data in this category are then the first point of contact for contract negotiations or escalations.

[![Organization](../../assets/images/de/grundlagen/kategorien/s-organization.png)](../../assets/images/de/grundlagen/kategorien/s-organization.png)

## Fields

### Title

The name of the organization, e.g. `synetics GmbH`, `ACME Corp.`, or `IT Department Berlin`. This value appears in the list view and in reports. For external organizations, the official company name is recommended; for internal units, a unique title following internal naming conventions.

### Phone

The central phone number of the organization, e.g. `+49 211 699 31-0`. Useful in an incident situation: When a service provider needs to be contacted, the number is immediately available without needing to search in external systems.

### Fax

The fax number of the organization. In many industries (government, insurance, healthcare), fax remains a relevant communication channel, especially for formal correspondence and contract documents.

### Website

The URL of the organization, e.g. `https://www.i-doit.com`. Typically links to the main page or customer portal. Useful for quick access to support portals, documentation, or contact forms of the service provider.

### Headquarters

Indicates whether this is the headquarters of the organization. Dialog field with predefined values. In corporate groups with multiple locations, this field enables the distinction between main office and branch offices -- relevant for escalation paths and contractual partner identification.

### Description

Free text for additional details: industry, contract partner number, internal abbreviation, contact person notes, or special agreements (e.g. "maintenance window only Tuesday--Thursday 6--10 PM").

## Technical Reference

| Property | Value |
|---|---|
| **Category Constant** | `C__CATS__ORGANIZATION` |
| **Type** | Specific category |
| **Multi-Value** | No |
| **Assigned to** | Organization |

### Fields (API Reference)

| Field | API Key | Type |
|---|---|---|
| **Title** | `title` | Text |
| **Phone** | `telephone` | Text |
| **Fax** | `fax` | Text |
| **Website** | `website` | Text |
| **Headquarters** | `headquarter` | Dialog (selection) |
| **Description** | `description` | Text field (multi-line) |

### API Examples

#### Create Entry

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "your-api-key",
        "object": 200,
        "category": "C__CATS__ORGANIZATION",
        "data": {
            "title": "synetics GmbH",
            "telephone": "+49 211 699 31-0",
            "fax": "+49 211 699 31-99",
            "website": "https://www.i-doit.com",
            "headquarter": 1,
            "description": "Hfirstller von i-doit. Hauptsitz Duesseldorf."
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
        "category": "C__CATS__ORGANIZATION"
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
        "category": "C__CATS__ORGANIZATION",
        "entry": 1,
        "data": {
            "telephone": "+49 211 699 31-100",
            "description": "Hfirstller von i-doit. 2026-04: New Zentral-Rufnummer nach Umzug."
        }
    },
    "id": 3
}
```
