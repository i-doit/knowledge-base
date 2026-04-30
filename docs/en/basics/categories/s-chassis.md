---
title: "Category: Chassis"
description: Documentation of the specific Chassis category in i-doit
icon:
status:
lang: en
---

# Category: Chassis

The **Chassis** is a **specific category** for the object type **Blade Chassis** and defines the slot grid of the chassis -- i.e., how many bays are available on the front and rear sides and what size the individual slots have. It is a **single-value category** -- exactly one entry exists per chassis object, describing the physical layout of the chassis.

## Why Define a Slot Grid?

A blade chassis is essentially an enclosure with a defined number of bays (slots) into which blade servers, network modules, storage modules, and management modules are inserted. The front and rear sides often have different slot arrangements: The blades sit in the front, while switch modules and power supplies are in the rear.

The Chassis category defines this grid -- the **foundation** on which the individual bays are configured in the associated [Chassis Slots](s-chassis-slot.md) category and visually displayed in the [Chassis View](s-chassis-view.md). Without this definition, i-doit does not know how many slots exist or how they are arranged.

!!! info "Interaction of the Chassis categories"
    The blade chassis model in i-doit consists of several cooperating categories:

    1. **Chassis** (this category) -- defines the slot grid (rows, columns, slot size) for front and rear sides
    2. **[Chassis Slots](s-chassis-slot.md)** -- creates the individual slots within the grid and names them
    3. **[Chassis Devices](s-chassis-devices.md)** -- assigns specific objects (blade servers, switch modules) to the slots
    4. **[Chassis View](s-chassis-view.md)** -- shows a visual representation of the occupancy

    Always start with the Chassis category before configuring slots or devices.

## Usage

Typical use cases:

- **Mapping blade infrastructure**: Define the slot grid of a Dell PowerEdge M1000e (16 blade slots in the front, 6 I/O modules in the rear) or an HPE BladeSystem c7000 (16 blade slots). The configuration here is the prerequisite for blade servers to be assigned in the Chassis Slots and Chassis Devices categories.
- **Capacity planning**: The defined grid immediately shows how many slots are available in total. In combination with the occupancy from the [Chassis Devices](s-chassis-devices.md) category, it becomes clear whether free slots are still available for additional blades -- crucial for hardware procurement.
- **Physical documentation**: Front and rear are configured separately because they accommodate different components in practice. The front side typically contains the blade servers (compute), while the rear side holds the network modules (I/O), management modules, and power supplies. This separation accurately represents the physical reality in the data center.
- **Rack integration**: A blade chassis is itself an object that is positioned in a rack via the [Form Factor](formfactor.md) and [Location](location.md) categories. The blade servers within the chassis are then not placed individually in the rack but rather located through the chassis slot assignment.

[![Chassis](../../assets/images/de/grundlagen/kategorien/s-chassis.png)](../../assets/images/de/grundlagen/kategorien/s-chassis.png)

## Fields

### Horizontal units (Front)

The number of horizontal units (columns) on the front side of the chassis. For a typical blade chassis with 16 slots in a 2x8 grid, this value would be `8`. Together with the vertical units, this gives the total number of possible slot positions on the front side.

### Vertical units (Front)

The number of vertical units (rows) on the front side. For a 2x8 grid, this value would be `2`. Together with the horizontal units, this defines the overall grid: 2 rows x 8 columns = 16 slot positions.

### Grid size (Front)

The size of the individual grid units on the front side. Dialog field with predefined values. The grid size determines how large each individual slot is displayed in the visual [Chassis View](s-chassis-view.md).

### Horizontal units (Rear)

The number of horizontal units (columns) on the rear side of the chassis. The rear side often has a different grid than the front: For a Dell M1000e, for example, there are 6 I/O slots in a 2x3 grid, while the front offers 16 blade slots.

### Vertical units (Rear)

The number of vertical units (rows) on the rear side.

### Grid size (Rear)

The size of the individual grid units on the rear side. May differ from the front side, as I/O modules and power supplies often have different dimensions than blade servers.

### Description

Free text for additional details: exact model of the chassis (e.g. "Dell PowerEdge M1000e, 10U"), firmware version of the chassis management controller, power supply configuration (e.g. "6x 2700W, 2N-redundant"), cooling notes, or special considerations for slot occupancy.

## Technical Reference

| Property | Value |
|---|---|
| **Category Constant** | `C__CATS__CHASSIS` |
| **Type** | Specific category |
| **Multi-Value** | No |
| **Assigned to** | Blade Chassis |

### Fields (API Reference)

| Field | API Key | Type |
|---|---|---|
| **Horizontal units (Front)** | `front_x` | Integer |
| **Vertical units (Front)** | `front_y` | Integer |
| **Grid size (Front)** | `front_size` | Dialog (selection) |
| **Horizontal units (Rear)** | `rear_x` | Integer |
| **Vertical units (Rear)** | `rear_y` | Integer |
| **Grid size (Rear)** | `rear_size` | Dialog (selection) |
| **Description** | `description` | Text field (multi-line) |

### API Examples

#### Create Entry

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "your-api-key",
        "object": 800,
        "category": "C__CATS__CHASSIS",
        "data": {
            "front_x": 8,
            "front_y": 2,
            "front_size": 1,
            "rear_x": 3,
            "rear_y": 2,
            "rear_size": 1,
            "description": "Dell PowerEdge M1000e, 10U Blade Chassis. 16 Half-Height Blade Slots (Front), 6 I/O Module Slots (Rear). 6x 2700W PSU, 2N-redundant."
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
        "object": 800,
        "category": "C__CATS__CHASSIS"
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
        "object": 800,
        "category": "C__CATS__CHASSIS",
        "entry": 1,
        "data": {
            "rear_x": 4,
            "rear_y": 2,
            "description": "2026-04: Grid configuration adjusted after firmware update. Rear now 4x2 for extended I/O modules."
        }
    },
    "id": 3
}
```
