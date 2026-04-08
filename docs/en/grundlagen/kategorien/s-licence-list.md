---
title: "Category: License Keys"
description: Documentation of the License Keys category in i-doit
icon:
status:
lang: en
---

# Category: License Keys

The **License Keys** category belongs to objects of the type **Licenses** and documents the individual license keys within a license object. It is a **multi-value category** -- any number of keys can be stored per license object, e.g. when a volume license agreement contains multiple individual keys for different locations or departments.

The interplay works as follows: The license object itself represents the license product or the license agreement (e.g. "Microsoft Office 2021 VL"). The License Keys category contains the specific keys, each with its own quantity and validity period. In the [Software assignment](application.md) category, the software is then assigned to the target device and the matching license key is assigned -- i-doit automatically counts how many licenses are consumed.

!!! info "License management in i-doit"
    i-doit implements license management across three levels: The **license object** (object type Licenses) as a container, the **License Keys** category for the specific keys and quantities, and the [Software assignment](application.md) on the end devices for actual usage. Only when all three levels are consistently maintained do license reports deliver reliable results.

!!! warning "Detecting over- and under-licensing"
    The fields **Quantity** and **In use** are the key to license compliance. When "In use" exceeds the value of "Quantity", over-licensing exists -- a potential compliance risk during software audits. Reports on this category provide the basis for procurement and tracking.

## Usage

Typical use cases:

- **License compliance**: Through the ratio of "Quantity" to "In use," you can see at a glance whether enough licenses are available or whether additional licenses need to be purchased. Reports can be set up to show over- and under-licensing per product.
- **Software audit preparation**: When a manufacturer announces a license audit, this category provides the complete overview: Which keys exist, how many seats are licensed, how many are actually in use? In combination with the [Software assignment](application.md), this creates an auditable record.
- **Expiration monitoring**: Through the start date and expiration date fields, expiring licenses can be identified via reports. A report such as "All licenses with expiration date < 90 days" gives procurement a timely signal for renewal.
- **Cost overview**: Unit price and total costs per key enable a cost evaluation across all license objects. In combination with the [Contract Assignment](contract-assignment.md) category, you can bridge to the associated maintenance contract.
- **Multiple keys per product**: Volume license agreements often contain multiple keys -- one per location, per department, or per activation pool. Each key is maintained as a separate entry with its own quantity, so that assignment and evaluation remain granular.

[![License Keys](../../assets/images/de/grundlagen/kategorien/s-licence-list.png)](../../assets/images/de/grundlagen/kategorien/s-licence-list.png)

## Fields

### Key

The actual license key or product key, e.g. `XXXXX-XXXXX-XXXXX-XXXXX-XXXXX`. This field serves documentation purposes -- i-doit does not validate the format. For volume licenses that have no individual key, a contract number or KMS reference can also be entered here.

### Serial number (Serial)

An optionally serial number that supplements the key. Some manufacturers use a separate serial number alongside the product key for support portals or activation. Free text without format validation.

### License type

Classifies the type of license: single license, volume license, subscription, OEM, etc. Dialog field -- the available values can be customized in the i-doit administration.

### Quantity (Amount)

The total number of installations or seats licensed with this key. For a volume license with 50 seats, this is `50`. This value is the upper limit for assignment via the [Software assignment](application.md).

### In use

The number of actually assigned licenses. This value is automatically calculated when software assignments on end devices reference this license key. When the value exceeds the quantity, i-doit signals over-licensing.

### Free licenses

Calculated field: Quantity minus In use. Shows the remaining available seats. A negative value indicates over-licensing.

### Start date

The date from which the license is valid. Relevant for subscriptions and time-limited licenses.

### Expiration date

The date on which the license expires. Particularly important for subscription licenses, maintenance contracts, and time-limited trial licenses. Using reports, you can identify licenses that are about to expire.

### Unit price

The price per license seat. Stored as a currency value.

### Total costs

The total costs for this license key. Can be entered manually or calculated from unit price and quantity.

### Description

Free text for additional details: license model, activation conditions, contact person at the manufacturer, or notes on renewal.

## Technical Reference

| Property | Value |
|---|---|
| **Category Constant** | `C__CATS__LICENCE_LIST` |
| **Type** | Specific category |
| **Multi-Value** | Yes |
| **Assigned to** | Licenses (LICENCE) |

### Fields (API Reference)

| Field | API Key | Type |
|---|---|---|
| **Key** | `key` | Text |
| **Serial number** | `serial` | Text |
| **License type** | `type` | Dialog (selection) |
| **Quantity** | `amount` | Integer |
| **In use** | `used_licences` | Integer |
| **Free licenses** | `lic_not_in_use` | Integer |
| **Start date** | `start` | Date |
| **Expiration date** | `expire` | Date |
| **Unit price** | `cost` | Currency |
| **Total costs** | `overall_costs` | Currency |
| **Description** | `description` | Text field (multi-line) |

### API Examples

#### Create Entry

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "your-api-key",
        "object": 123,
        "category": "C__CATS__LICENCE_LIST",
        "data": {
            "key": "XXXXX-XXXXX-XXXXX-XXXXX-XXXXX",
            "serial": "SN-2024-00815",
            "type": "Volumenlizenz",
            "amount": 50,
            "start": "2024-01-01",
            "expire": "2026-12-31",
            "cost": 89.00,
            "description": "Microsoft 365 E3, 50 Seats, Standort Berlin"
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
        "objID": 123,
        "category": "C__CATS__LICENCE_LIST"
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
        "object": 123,
        "category": "C__CATS__LICENCE_LIST",
        "entry": 7,
        "data": {
            "amount": 75,
            "expire": "2027-12-31",
            "description": "Expansion 2026-04: 25 additional seats for site Munich"
        }
    },
    "id": 3
}
```
