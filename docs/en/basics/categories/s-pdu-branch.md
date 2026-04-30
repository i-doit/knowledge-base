---
title: "Category: PDU Branch"
description: Documentation of the PDU Branch category in i-doit
icon:
status:
lang: en
---

# Category: PDU Branch

The **PDU Branch** category documents the individual power circuits (branches/circuits) of a Power Distribution Unit. It is a **multi-value category** -- any number of branches can be created per PDU object, each representing a separate circuit with its own receptacles.

!!! info "PDU vs. PDU Branch"
    The parent master data of the PDU (title, general description) are maintained in the [PDU](s-pdu.md) category. The **PDU Branch** supplements this with the detailed structure: How many branches does the PDU have, and how many receptacles does each branch provide? Together, both categories represent the complete power distribution hierarchy.

## Usage

Typical use cases:

- **Receptacle planning in the rack**: Each branch of a PDU has a defined number of receptacles. The documentation shows how many receptacles are available per branch and helps determine whether a new device can still be accommodated or whether an additional branch or PDU is needed.
- **Circuit documentation**: In larger data centers, PDU branches are often connected to different phases or backup circuits. The branch documentation enables the mapping: Branch 1 is on phase L1, Branch 2 is on phase L2, etc. This information is indispensable during maintenance work on individual phases.
- **Load distribution**: Using reports, you can evaluate how many receptacles per branch are in use. Unevenly distributed load (e.g. Branch 1 full, Branch 2 empty) indicates optimization potential and can cause electrical asymmetries.
- **Outage analysis**: If an individual branch fails (e.g. due to a tripped breaker), the documentation immediately shows which receptacles are affected. In combination with the cabling documentation, you can determine which devices are impacted by the outage.

[![PDU Branch](../../assets/images/de/grundlagen/kategorien/s-pdu-branch.png)](../../assets/images/de/grundlagen/kategorien/s-pdu-branch.png)

## Fields

### PDU

Reference to the parent PDU. This field links the branch with the PDU configuration from the [PDU](s-pdu.md) category and is typically set automatically, since the branch category is maintained on the same object.

### Branch ID

A sequential number or identifier of the branch within the PDU, e.g. `1`, `2` or `A`, `B`. Enables unique identification of individual circuits, especially for PDUs with many branches.

### Receptacles

The number of receptacles (outlets) on this branch. A typical branch has between 4 and 12 receptacles. This value is the basis for capacity planning: How many devices can be connected to this branch at maximum?

### Description

Free text field for supplementary information: assigned phase (L1/L2/L3), maximum amperage of the branch in amperes, breaker type, or notes on the physical position on the device.

!!! warning "Keep receptacle count up to date"
    The receptacle count is static and is not automatically reconciled with the actual occupancy. If receptacles are physically defective or expanded through adapter outlets, this should be documented in the description field so that capacity planning remains accurate.

## Technical Reference

| Property | Value |
|---|---|
| **Category Constant** | `C__CATS__PDU_BRANCH` |
| **Type** | Specific category |
| **Multi-Value** | Yes |
| **Assigned to** | PDU |

### Fields (API Reference)

| Field | API Key | Type |
|---|---|---|
| **PDU** | `pdu_id` | Integer |
| **Branch ID** | `branch_id` | Integer |
| **Receptacles** | `receptables` | Integer |
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
        "category": "C__CATS__PDU_BRANCH",
        "data": {
            "pdu_id": 1,
            "branch_id": 1,
            "receptables": 8,
            "description": "Phase L1, max. 16A, slots 1-8 (upper row)"
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
        "category": "C__CATS__PDU_BRANCH"
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
        "category": "C__CATS__PDU_BRANCH",
        "entry": 1,
        "data": {
            "receptables": 6,
            "description": "Phase L1, max. 16A, slots 1-6 (slots 7+8 defective since 2025-09)"
        }
    },
    "id": 3
}
```
