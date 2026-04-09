---
title: "Category: Chassis View"
description: Documentation of the Chassis View category in i-doit
icon:
status:
lang: en
---

# Category: Chassis View

The **Chassis View** configures the visual display of a blade chassis in i-doit. It defines the grid in which the [Chassis Slots](s-chassis-slot.md) and the assigned [Chassis devices](s-chassis-devices.md) are displayed. The category is a **single-value category** and is available as a specific category exclusively for objects of the type *Blade Chassis*.

## Usage

Typical use cases:

- **Define grid for front and rear side**: Define the number of horizontal and vertical units for the front and rear side of the chassis. These values determine the coordinate system in which the slots are positioned.
- **Adjust grid size**: Via the *Grid size* fields, you can control the display size of individual cells — useful for adapting the view to the actual proportions of the chassis.
- **Occupancy at a glance**: The resulting graphical view immediately shows which slots are occupied and which are still free. This facilitates capacity planning and documentation during modifications.

!!! info "Interaction with slots and devices"
    The Chassis View itself contains no devices or slots — it merely defines the grid. The actual position data comes from the category [Chassis Slots](s-chassis-slot.md), the device assignment from [Chassis devices](s-chassis-devices.md).

!!! note "Configure grid before slots"
    Set the grid dimensions in this category before you enter the position coordinates of individual slots in [Chassis Slots](s-chassis-slot.md). The slot coordinates must lie within the grid defined here.

[![Category Chassis View](../../assets/images/de/grundlagen/kategorien/s-chassis-view.png)](../../assets/images/de/grundlagen/kategorien/s-chassis-view.png)

## Fields

### Front side -- Horizontal units

The number of columns in the front side grid. Determines how many slots can be placed horizontally side by side.

### Front side -- Vertical units

The number of rows in the front side grid. Determines how many slots can be placed vertically above one another.

### Front side -- Grid size

The display size of individual grid cells on the front side. Affects the visual proportioning in the chassis view of the user interface.

### Rear side -- Horizontal units

The number of columns in the rear side grid.

### Rear side -- Vertical units

The number of rows in the rear side grid.

### Rear side -- Grid size

The display size of individual grid cells on the rear side.

### Description

Free text for supplementary details, e.g. notes on the form factor of the chassis or on the naming in the manufacturer documentation.

## Technical Reference

| Property | Value |
|---|---|
| **Category Constant** | `C__CATS__CHASSIS_VIEW` |
| **Type** | Specific category |
| **Multi-Value** | No (single-value) |
| **Assigned to** | Blade Chassis |

### Fields (API Reference)

| Field | API Key | Type |
|---|---|---|
| **Front side -- Horizontal units** | `front_x` | Integer |
| **Front side -- Vertical units** | `front_y` | Integer |
| **Front side -- Grid size** | `front_size` | Dialog (selection) |
| **Rear side -- Horizontal units** | `rear_x` | Integer |
| **Rear side -- Vertical units** | `rear_y` | Integer |
| **Rear side -- Grid size** | `rear_size` | Dialog (selection) |
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
        "category": "C__CATS__CHASSIS_VIEW",
        "data": {
            "front_x": 8,
            "front_y": 2,
            "front_size": 1,
            "rear_x": 4,
            "rear_y": 2,
            "rear_size": 1,
            "description": "HPE BladeSystem c7000: Front 8x2 Blade Bays, Rear 4x2 Switch/IO Bays"
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
        "category": "C__CATS__CHASSIS_VIEW"
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
        "category": "C__CATS__CHASSIS_VIEW",
        "entry": 1,
        "data": {
            "front_x": 16,
            "front_y": 2,
            "description": "Grid expanded to 16 columns (Half-Height Blades)"
        }
    },
    "id": 3
}
```
