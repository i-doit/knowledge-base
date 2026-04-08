---
title: "Category: SIM card"
description: Documentation of the SIM card category in i-doit
icon:
status:
lang: en
---

# Category: SIM card

The **SIM card** category (category constant `C__CATG__CARDS`) documents the properties and security information of a SIM card object. It is a **single-value category** and is assigned to the **SIM card** object type. Here, the physical card data is captured: card number, serial number, PIN/PUK, and the assignment to the mobile device.

!!! info "New and old SIM categories -- what goes where?"
    The SIM documentation in i-doit consists of three categories that work together:

    | Category | Where? | Purpose |
    |---|---|---|
    | **SIM card** (`C__CATG__CARDS`) | On the SIM card object | Card data: number, PIN, PUK, serial number, assigned device |
    | **SIM** (`C__CATG__SIM`) | On the SIM card object | Contract data: network operator, tariff, phone number, contract duration |
    | **Assigned SIM cards** (`C__CATG__ASSIGNED_SIM_CARDS`) | On the device (phone, notebook, router) | Reverse link: which SIM cards are in this device? |

    The old implementation only allowed 2 SIM cards to be stored directly on the device. With the new model, each SIM card is created as a **separate object** and linked via the assignment categories -- this enables any number of SIMs per device and a clean separation of card and contract data. Additionally, the mobile contract can be tracked via the [Contract assignment](contract-assignment.md) on the SIM card object.

!!! warning "Sensitive data"
    This category stores PIN, PUK, and serial numbers -- i.e. security-relevant information. Ensure that access to the SIM card object type is appropriately restricted in the i-doit permission profiles. Not every user should be able to view PINs and PUKs.

## Usage

Typical use cases:

- **Mobile Device Management (MDM)**: Each SIM card is recorded as an independent object and assigned to the respective end device via the `Assigned mobile phone` field. This makes it traceable at any time which SIM is in which device -- especially important during device swaps or loss.
- **Contract assignment**: Through the link with a mobile contract (Mobile contract object type), the SIM card can be assigned to the matching contract. When a contract ends, it is immediately clear which SIM cards are affected and need to be cancelled or ported.
- **Loss and blocking**: If a mobile phone is lost, the SIM card category immediately shows the card number and serial number that the provider needs for blocking. The PUK is needed to unlock the card after three failed PIN attempts -- without it, the SIM card is permanently locked and must be replaced by the provider.
- **Inventory and stock management**: Reports can list all SIM cards that are not assigned to any mobile phone -- unused cards that generate costs without being used.
- **Cost center assignment**: In combination with the Accounting category, SIM cards can be assigned to cost centers and monthly mobile costs can be evaluated per department or project.

[![SIM card](../../assets/images/de/grundlagen/kategorien/cards.png)](../../assets/images/de/grundlagen/kategorien/cards.png)

## Fields

### Assigned mobile phone

Link to the mobile phone object in which the SIM card is currently inserted. The object browser filters for objects with the **Assigned SIM cards** category -- typically mobile phones or tablets. During a device swap, simply enter the new device here; the change history in the logbook seamlessly documents the switch.

### Card number

The card number (ICCID -- Integrated Circuit Card Identifier), e.g. `8949 0102 3456 7890 1234`. This number uniquely identifies the physical SIM card and is required by the provider for blocking, porting, and contract assignments.

### Title

A freely choosable name for the SIM card, e.g. `SIM Business Phone Mueller` or `Data SIM Field Tablet 07`. This field appears in the list view and in reports and should be chosen so that the card is identifiable without opening the object.

### PIN

The PIN code of the SIM card (4-8 digits). Required to unlock the SIM card after insertion or device restart.

### PIN 2

The second PIN code, used by some providers for extended functions (call barring, fixed dialing numbers). Not relevant for all SIM cards.

### PUK

The PUK code (Personal Unblocking Key, 8 digits). Required when the PIN has been entered incorrectly three times. Without the PUK, the SIM card is permanently locked and must be replaced by the provider -- therefore documenting this value is particularly important.

### PUK2

The second PUK code for unlocking PIN 2. Analogous to the PUK, but for extended functions.

### Serial number

The serial number of the SIM card, often identical to or similar to the ICCID. Some providers use a separate serial number on the SIM card holder that differs from the ICCID.

### Description

Free text for additional information: tariff name, data volume, roaming options, contract duration, or reference to the associated mobile contract.

## Technical reference

| Property | Value |
|---|---|
| **Category constant** | `C__CATG__CARDS` |
| **Type** | Global category |
| **Multi-value** | No |
| **Assigned to** | SIM card |

### Fields (API reference)

| Field | API key | Type |
|---|---|---|
| **Assigned mobile phone** | `assigned_mobile` | Object browser (link) |
| **Card number** | `card_no` | Text |
| **Title** | `title` | Text |
| **PIN** | `pin` | Text |
| **PIN 2** | `pin2` | Text |
| **PUK** | `puk` | Text |
| **PUK2** | `puk2` | Text |
| **Serial number** | `serial` | Text |
| **Description** | `description` | Text field (multi-line) |

### API examples

#### Create entry

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "your-api-key",
        "object": 620,
        "category": "C__CATG__CARDS",
        "data": {
            "assigned_mobile": 615,
            "card_no": "8949 0102 3456 7890 1234",
            "title": "SIM Business Phone Mueller",
            "pin": "1234",
            "pin2": "5678",
            "puk": "12345678",
            "puk2": "87654321",
            "serial": "89490102345678901234F",
            "description": "Tariff Business Mobile L, 20 GB data, EU roaming included, contract until 12/2027"
        }
    },
    "id": 1
}
```

#### Read entries

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.read",
    "params": {
        "apikey": "your-api-key",
        "object": 620,
        "category": "C__CATG__CARDS"
    },
    "id": 2
}
```

#### Update entry

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "your-api-key",
        "object": 620,
        "category": "C__CATG__CARDS",
        "entry": 1,
        "data": {
            "assigned_mobile": 618,
            "description": "Device swap 2026-04: SIM moved from iPhone 14 (615) to iPhone 16 (618)."
        }
    },
    "id": 3
}
```
