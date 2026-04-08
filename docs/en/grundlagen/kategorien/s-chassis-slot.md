---
title: "Category: Chassis Slots"
description: Documentation of the Chassis Slots category in i-doit
icon:
status:
lang: en
---

# Category: Chassis Slots

The **Chassis Slots** category defines the available slots of a blade chassis. It is a **multi-value category** and is available as a specific category exclusively on objects of the type *Blade Chassis*.

## Usage

Typical use cases:

- **Defining the slot layout**: Create all physical slots of a chassis -- both compute slots for blade servers and slots for switch modules, I/O modules, or power supplies. For each slot, you assign a descriptive title such as `Blade Bay 1` or `Switch Slot A`.
- **Assigning devices**: Through the *Device assignment* field, you can directly link one or more [Chassis Devices](s-chassis-devices.md) that occupy the respective slot within the slot configuration.
- **Visual arrangement**: The position fields (X/Y coordinates) control where the slot is displayed in the [Chassis View](s-chassis-view.md). Through the from/to values, you can also represent slots that span multiple grid units.
- **Setting insertion direction**: The *Insertion direction* field indicates whether the slot is accessible from the front or rear side of the chassis -- relevant for the display in the chassis view.

!!! tip "Create slots before devices"
    Define the slots with their positions first, before making assignments in the [Chassis Devices](s-chassis-devices.md) category. This way, all slots are already available for selection in the devices category.

[![Chassis Slots](../../assets/images/de/grundlagen/kategorien/s-chassis-slot.png)](../../assets/images/de/grundlagen/kategorien/s-chassis-slot.png)

## Fields

### Connector type

The type of slot connector, e.g. `Blade`, `Switch Module`, or `Power Supply`. Dialog+ field -- custom connector types can be added as needed.

### Insertion direction

Indicates whether the slot is on the **front side** (Front) or **rear side** (Rear) of the chassis. This information controls the assignment to the respective side in the [Chassis View](s-chassis-view.md).

### Slot title

A freely selectable name for the slot, e.g. `Bay 1`, `PSU Slot A`, or `IO Module 2`. The title appears in the list view and in the visual chassis display.

### Horizontal position (From)

The X start position of the slot in the grid of the chassis view. Together with the To value, this determines the horizontal extent of the slot.

### Horizontal position (To)

The X end position of the slot. If this value is higher than the start position, the slot extends across multiple columns -- useful for double-width blades.

### Vertical position (From)

The Y start position of the slot in the grid of the chassis view.

### Vertical position (To)

The Y end position of the slot. Analogous to the horizontal position, the from/to values determine the vertical extent.

### Device assignment

The devices assigned to this slot. Multiple devices can be selected per slot (multiple selection). The assigned objects also appear in the [Chassis Devices](s-chassis-devices.md) category.

### Description

Free text for additional details: slot type according to manufacturer documentation, power consumption, supported form factors, or specific restrictions.

## Technical Reference

| Property | Value |
|---|---|
| **Category Constant** | `C__CATS__CHASSIS_SLOT` |
| **Type** | Specific category |
| **Multi-Value** | Yes |
| **Assigned to** | Blade Chassis |

### Fields (API Reference)

| Field | API Key | Type |
|---|---|---|
| **Connector type** | `connector_type` | Dialog+ (extensible selection) |
| **Insertion direction** | `insertion` | Dialog (selection) |
| **Slot title** | `title` | Text |
| **Horizontal position (From)** | `from_x` | Integer |
| **Horizontal position (To)** | `to_x` | Integer |
| **Vertical position (From)** | `from_y` | Integer |
| **Vertical position (To)** | `to_y` | Integer |
| **Device assignment** | `assigned_devices` | Multiple selection (dialog list) |
| **Description** | `description` | Text field (multi-line) |

### API Examples

#### Create Entry

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "your-api-key",
        "object": 42,
        "category": "C__CATS__CHASSIS_SLOT",
        "data": {
            "title": "Blade Bay 1",
            "connector_type": 1,
            "insertion": 1,
            "from_x": 0,
            "to_x": 1,
            "from_y": 0,
            "to_y": 0,
            "description": "Full-Height Blade Slot, max. 250 W"
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
        "object": 42,
        "category": "C__CATS__CHASSIS_SLOT"
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
        "object": 42,
        "category": "C__CATS__CHASSIS_SLOT",
        "entry": 5,
        "data": {
            "title": "Blade Bay 1 (erweitert)",
            "to_x": 2,
            "description": "Auf Double-Width erweitert fuer newn Blade Server"
        }
    },
    "id": 3
}
```
