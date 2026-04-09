---
title: "Category: SIM"
description: Documentation of the SIM category in i-doit — contract data and phone number of a SIM card
icon:
status:
lang: en
---

# Category: SIM

The **SIM** category documents the contract and tariff information of a SIM card. It is a **single-value category** on the object type **SIM card** and, together with the category [SIM card](cards.md) (card data, PIN/PUK), forms the complete profile of a SIM.

!!! info "Interaction of the three SIM categories"
    | Category | On which object? | Content |
    |---|---|---|
    | **SIM** (this category) | SIM card object | Contract data: network provider, tariff, phone number, duration |
    | [SIM card](cards.md) | SIM card object | Card data: card number, PIN, PUK, serial number |
    | [Assigned SIM cards](assigned-sim-cards.md) | Device (phone, tablet, router) | Link: which SIMs are inserted in this device? |

    Additionally, you can document the mobile phone contract with duration, cancellation period, and costs via the [Contract assignment](contract-assignment.md) on the SIM object — creating a consistent chain from the contract through the SIM to the end device.

## Usage

Typical use cases:

- **Mobile inventory**: Record the network provider, tariff, and phone number of every SIM card. Using reports, you can evaluate at any time how many SIM cards per network provider are in use — helpful for framework contract negotiations.
- **Monitor contract durations**: Document the start and end date of SIM contracts. Via the Report Manager or the notification function, you can detect expiring contracts early, before they automatically renew.
- **Meet cancellation periods**: The field "Date for notification" enables automatic reminders before contract end — so you never miss a cancellation period.
- **Cost allocation**: Via the tariff and the assignment to the device (and thus to the person/department), you can allocate mobile costs to the correct cost centers.



## Fields

### Type

The SIM card type: default SIM, Micro SIM, Nano SIM, or eSIM. Relevant for compatibility with the end device — modern smartphones use Nano SIM or eSIM, older devices and IoT routers often still use default or Micro SIM.

### Network provider

The mobile provider, e.g. `Telekom`, `Vodafone`, `o2`, `1&1`. Dialog+ field -- custom providers can be added. Important for evaluation: how many SIMs per provider, how are costs distributed?

### Tariff

The booked mobile tariff, e.g. `Business Mobil L`, `Red Business Prime`. In combination with the network provider, this provides a complete picture of mobile costs. Dialog+ field -- custom tariffs can be added.

### Start date

The beginning of the SIM contract or activation. Together with the end date, this yields the contract duration. For prepaid SIMs, this is the activation date.

### End date

The end of the contract duration or the next renewal opportunity. Using the Report Manager, you can list all SIMs whose contract expires within the next 90 days — the basis for timely cancellations or contract renewals.

### Date for notification

A freely selectable date on which i-doit should trigger a reminder — typically several weeks before contract end, so that enough time remains for a cancellation or renegotiation. Prerequisite: the [notifications](../../evaluation/notifications.md) must be configured.

### Phone number

The phone number of the SIM card in international format, e.g. `+49 170 1234567`. Via the search in i-doit, you can quickly find out which device and which person a specific phone number belongs to.

### Customer number

The customer number with the mobile provider. Useful for support inquiries and contract management with the provider.

### Description

Free text for additional information: special tariff conditions, roaming options, data caps, or notes on the associated framework contract.

## Technical Reference

| Property | Value |
|---|---|
| **Category Constant** | `C__CATG__SIM` |
| **Type** | Global category |
| **Multi-Value** | No |
| **Assigned to** | SIM card |

### Fields (API Reference)

| Field | API Key | Type |
|---|---|---|
| **Type** | `type` | Dialog (selection) |
| **Network provider** | `network_provider` | Dialog+ (extensible selection) |
| **Tariff** | `telephone_rate` | Dialog+ (extensible selection) |
| **Start date** | `start` | Date |
| **End date** | `end` | Date |
| **Date for notification** | `threshold_date` | Date |
| **Phone number** | `phone_no` | Text |
| **Customer number** | `client_no` | Text |
| **Description** | `description` | Text field (multi-line) |

### API Examples

#### Create Entry

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "your-api-key",
        "object": 794,
        "category": "C__CATG__SIM",
        "data": {
            "type": "Nano-SIM",
            "network_provider": "Telekom",
            "telephone_rate": "Business Mobil L",
            "start": "2024-07-01",
            "end": "2026-06-30",
            "threshold_date": "2026-04-01",
            "phone_no": "+49 170 9876543",
            "client_no": "KD-2024-BHB-0815",
            "description": "Framework contract RV-2023-TMO, 24 months, EU roaming included"
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
        "objID": 794,
        "category": "C__CATG__SIM"
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
        "object": 794,
        "category": "C__CATG__SIM",
        "data": {
            "end": "2028-06-30",
            "telephone_rate": "Business Mobil XL",
            "description": "Contract renewal 2026-05, upgrade to XL plan with 50 GB"
        }
    },
    "id": 3
}
```
