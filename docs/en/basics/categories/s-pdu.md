---
title: "Category: PDU"
description: Documentation of the PDU category in i-doit
icon:
status:
lang: en
---

# Category: PDU

The **PDU** category documents the basic configuration of a Power Distribution Unit. It is a **specific category** that is exclusively available for objects of the type PDU and contains the overarching master data of the unit — the individual power circuits (branches) are maintained in the separate category [PDU branch](s-pdu-branch.md).

## Usage

Typical use cases:

- **Document data center infrastructure**: Every PDU in the rack receives its own object with this category. In combination with the category [PDU branch](s-pdu-branch.md), this provides a complete power distribution documentation: How many branches does the PDU have, how many slots per branch, and which devices are connected?
- **Capacity planning for power supply**: Using the Report Manager, you can evaluate which PDUs are installed in which racks and how many branches or slots are occupied. This helps in deciding whether a rack can still accommodate additional devices or whether the power supply needs to be expanded.
- **Outage analysis and redundancy**: Many data centers deploy two PDUs per rack (A-Feed and B-Feed). Documentation of both PDUs and their branches enables a quick assessment of which devices are affected if one power circuit fails.
- **Maintenance planning**: During planned maintenance on the power supply, the PDU documentation immediately shows which devices are fed by the affected PDU and need to be shut down or switched to the redundant branch beforehand.

[![Category PDU](../../assets/images/de/grundlagen/kategorien/s-pdu.png)](../../assets/images/de/grundlagen/kategorien/s-pdu.png)

!!! tip "Document PDU and cabling together"
    For seamless power supply documentation, it is recommended to also maintain the categories [Connection](connector.md) and [Cable](cable.md) alongside the PDU category. This way, not only is it recorded which slots exist, but also which device is connected to which slot via which cable.

## Fields

### PDU

The title or internal identifier of the Power Distribution Unit, e.g. `PDU-A-Rack07` or `APC AP8853`. This field serves for the unique identification of the PDU within the data center and appears in the list view and in reports.

### Description

Free text field for supplementary information: manufacturer, model, maximum total power (kW/Ampere), input voltage, number of phases, firmware version, or special configuration notes.

## Technical Reference

| Property | Value |
|---|---|
| **Category Constant** | `C__CATS__PDU` |
| **Type** | Specific category |
| **Multi-Value** | No |
| **Assigned to** | PDU |

### Fields (API Reference)

| Field | API Key | Type |
|---|---|---|
| **PDU** | `pdu_id` | Text |
| **Description** | `description` | Text field (multi-line) |

### API Examples

#### Create Entry

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "your-api-key",
        "object": 750,
        "category": "C__CATS__PDU",
        "data": {
            "pdu_id": "PDU-A-Rack07",
            "description": "APC AP8853, 3-phase, 17.3 kW, 230V/30A, Firmware v6.9.6"
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
        "object": 750,
        "category": "C__CATS__PDU"
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
        "object": 750,
        "category": "C__CATS__PDU",
        "entry": 1,
        "data": {
            "description": "APC AP8853, 3-phase, 17.3 kW, 230V/30A, Firmware v6.9.8 – Update 2025-11"
        }
    },
    "id": 3
}
```
