---
title: "Category: Master Data (Organization)"
description: Documentation of the specific Master Data for Organizations category in i-doit
icon:
status:
lang: en
---

# Category: Master Data (Organization)

The **Master Data** category is a **specific category** for the object type **Organization** and records the central business data of an organization. It is a **single-value category** -- exactly one entry exists per organization object with the company name, contact details, website, and headquarters designation.

!!! info "Master Data vs. Address -- two levels of detail"
    The **Master Data** captures the organizational essentials: Who is the organization, how can it be reached, where is the headquarters? The [Address](address.md) category supplements this with the **physical postal address** including street, house number, zip code, and city. Both categories together form a complete contact profile -- the master data for quick reference, the address for package delivery or on-site appointments.

## Usage

Typical use cases:

- **Centralized contact database**: Maintain the master data for every organization (customers, suppliers, partners, internal departments) in a single place. All other categories and links reference this one object -- changes to the phone number or website only need to be made here and take effect everywhere.
- **Headquarters management**: The headquarters field distinguishes between main office and branch offices. In corporations with dozens of locations, you can immediately filter via a report: Which organization objects are headquarters? This is relevant for contract conclusions (the headquarters is typically the contractual partner) and for escalation paths.
- **Phone book and quick access**: In an incident situation, speed is essential. The phone number of the maintenance service provider, the fax number of the insurance company, the website of the cloud provider -- all this information is available here at a glance, without needing to search through e-mails or external systems.
- **Data maintenance and quality assurance**: Reports such as "All organizations without a website" or "Organizations without a phone number" uncover gaps in data maintenance. In combination with the notification system, the responsible data stewards can be automatically notified about missing master data.
- **Integration with Address**: The master data provides the "who" and "how to reach," while the [Address](address.md) category provides the "where." Together, they form a complete organizational profile usable for audits, emergency plans, and vendor management.

[![Master Data (Organization)](../../assets/images/de/grundlagen/kategorien/s-organization-master-data.png)](../../assets/images/de/grundlagen/kategorien/s-organization-master-data.png)

## Fields

### Title

The official name of the organization, e.g. `synetics GmbH`, `Deutsche Telekom AG`, or `Infrastructure Department`. This value appears in the list view, in reports, and everywhere the organization object is referenced. Use the complete, official company name including legal form to avoid confusion -- especially in corporate groups with similarly named subsidiaries.

### Phone

The central phone number of the organization, e.g. `+49 211 699 31-0`. The international format with country code is recommended so that the number is unambiguous across locations. For service providers, this is typically the support hotline or switchboard.

### Fax

The fax number of the organization. Even though fax is losing importance in many IT environments, it remains a recognized and sometimes mandatory communication channel in regulated industries (government, healthcare, financial sector).

### Website

The URL of the organization's website, e.g. `https://www.i-doit.com`. May point to the main page, a customer portal, or a support portal. Useful for direct access to online resources: documentation, ticket systems, self-service portals, or product information.

### Headquarters

Indicates whether this organization object represents the headquarters or a branch office. Dialog field with predefined values. The distinction is business-relevant: The headquarters is typically the legal contractual partner, the location for formal correspondence, and the first escalation point for cross-cutting issues.

!!! tip "Practical example: Corporate structure"
    A corporation with headquarters in Munich and branch offices in Berlin, Hamburg, and Frankfurt is represented as four organization objects. The Munich object receives `Headquarters: Yes`, the others `Headquarters: No`. Via the [Address](address.md) category, each object receives its own postal address. This allows you to immediately filter via a report which object is the main office and which are the branches.

### Description

Free text for additional details: industry, customer number at the supplier, internal abbreviation (e.g. "Telecom provider main location"), special agreements, support hotline hours, or references to framework agreements.

## Technical Reference

| Property | Value |
|---|---|
| **Category Constant** | `C__CATS__ORGANIZATION_MASTER_DATA` |
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
        "category": "C__CATS__ORGANIZATION_MASTER_DATA",
        "data": {
            "title": "synetics GmbH",
            "telephone": "+49 211 699 31-0",
            "fax": "+49 211 699 31-99",
            "website": "https://www.i-doit.com",
            "headquarter": 1,
            "description": "Hersteller von i-doit. Hauptsitz Duesseldorf. Kundennummer: K-2024-0815."
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
        "category": "C__CATS__ORGANIZATION_MASTER_DATA"
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
        "category": "C__CATS__ORGANIZATION_MASTER_DATA",
        "entry": 1,
        "data": {
            "website": "https://www.i-doit.com/de",
            "description": "Hersteller von i-doit. 2026-04: Website-URL auf new DE-Subdomain updated."
        }
    },
    "id": 3
}
```
