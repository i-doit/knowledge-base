---
title: "Category: Cell Phone Contract"
description: Documentation of the specific Cell Phone Contract category in i-doit
icon:
status:
lang: en
---

# Category: Cell Phone Contract

The **Cell Phone Contract** is a **specific category** for the object type **Cell Phone Contract** and documents the contract-related data of a mobile phone contract. It is a **single-value category** -- exactly one entry exists per contract object with the IMEI number and a description.

## Why a Separate Object Type for Cell Phone Contracts?

Cell phone contracts are a distinct administrative item in IT documentation because they exist independently of the physical device. A contract can be transferred from one smartphone to another, a SIM card can be swapped, but the contract with the provider remains in place. i-doit reflects this reality by managing contract, SIM card, and device as **separate objects**.

!!! info "The chain: Contract - SIM - Device"
    Mobile device management in i-doit follows a three-tier chain:

    1. **Cell Phone Contract** -- the contract object with provider data, IMEI, and contract duration (via the [Contract Assignment](contract-assignment.md) category)
    2. **SIM Card** -- the physical or eSIM with ICCID and phone number ([SIM Card](sim.md) category)
    3. **End device** -- the smartphone, tablet, or IoT device to which the SIM is assigned ([Assigned SIM Cards](assigned-sim-cards.md) category)

    Through this separation, each component can be managed independently: An employee switches devices but keeps the SIM and contract. Or a contract is terminated, the SIM removed, but the device remains in inventory.

## Usage

Typical use cases:

- **Contract overview**: Manage all cell phone contracts as individual objects and evaluate them via reports: Which contracts run with which provider, when do they expire, which IMEI is assigned? In combination with the Contract Assignment category and the Contract object type, this creates a complete contract landscape.
- **IMEI administration**: The IMEI number uniquely identifies a mobile device worldwide. In case of theft or loss, it is the crucial piece of information for blocking the device with the provider. Through central documentation in the CMDB, the IMEI is immediately available -- even when the device itself is no longer accessible.
- **Tracking device assignment**: Through the chain contract - SIM - device, you can trace at any time which employee uses which contract and which device is associated with it. This is particularly relevant during offboarding processes: cancel or transfer the contract, deactivate the SIM, collect the device.
- **Cost allocation**: Mobile phone costs can be assigned to a cost center via the contract object (through the [Accounting](accounting.md) category). This enables usage-based billing of mobile phone costs.

[![Cell Phone Contract](../../assets/images/de/grundlagen/kategorien/s-cell-phone-contract.png)](../../assets/images/de/grundlagen/kategorien/s-cell-phone-contract.png)

## Fields

### IMEI number

The **International Mobile Equipment Identity** -- a 15-digit number that uniquely identifies a mobile device worldwide, e.g. `353456789012345`. The IMEI is assigned by the device manufacturer and is independent of the cell phone contract or SIM card. It is documented here on the contract object to establish the mapping between contract and device.

!!! tip "Finding the IMEI"
    The IMEI can be found on the original packaging of the device, in the device under **Settings - About Phone**, or by dialing `*#06#` on the keypad. For eSIM-capable devices with dual SIM, two IMEI numbers exist -- document both in the description if relevant.

### Description

Free text for additional details: provider name, plan name, contract number with the provider, monthly costs, included data volume, special features (e.g. "EU roaming included," "Data only, no voice"), or notes on the contract status.

## Technical Reference

| Property | Value |
|---|---|
| **Category Constant** | `C__CATS__CELL_PHONE_CONTRACT` |
| **Type** | Specific category |
| **Multi-Value** | No |
| **Assigned to** | Cell Phone Contract |

### Fields (API Reference)

| Field | API Key | Type |
|---|---|---|
| **IMEI number** | `imei_number` | Text |
| **Description** | `description` | Text field (multi-line) |

### API Examples

#### Create Entry

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "your-api-key",
        "object": 1100,
        "category": "C__CATS__CELL_PHONE_CONTRACT",
        "data": {
            "imei_number": "353456789012345",
            "description": "Vodafone Red Business XL, Vertragsnr. VF-2025-00042. 50 GB Datenvolumen, EU-Roaming inkl. Laufzeit bis 2027-03-31."
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
        "object": 1100,
        "category": "C__CATS__CELL_PHONE_CONTRACT"
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
        "object": 1100,
        "category": "C__CATS__CELL_PHONE_CONTRACT",
        "entry": 1,
        "data": {
            "imei_number": "861234567890123",
            "description": "2026-04: Device change to iPhone 16. New IMEI documented. Contract unchanged."
        }
    },
    "id": 3
}
```
