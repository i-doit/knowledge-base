---
title: "Category: Form Factor"
description: Documentation of the Form Factor category in i-doit
icon:
status:
lang: en
---

# Category: Form Factor

The **Form Factor** category describes the physical form and dimensions of an object. It is a **single-value category** -- exactly one entry exists per object, summarizing form factor, rack units, dimensions, and weight.

!!! tip "Prerequisite for the rack view"
    For an object to be positioned in the **rack view**, the number of **rack units** must be entered here. Without this value, i-doit does not know how much space the device occupies in the cabinet, and positioning via the [Location](location.md) category is not possible.

## Usage

Typical use cases:

- **Rack planning and rack view**: The rack units determine how much space a device occupies in the cabinet. Only when this value is maintained can the object be positioned in the visual rack view, and you can see at a glance which slots are available. In combination with the [Location category](location.md), a complete rack occupancy documentation is created.
- **Room and floor space planning**: Width, height, and depth help with planning floor space, ventilation clearances, and cable routes. Especially for freestanding servers (tower form factor) or network cabinets outside the data center, this is important for realistically estimating space requirements.
- **Load capacity and weight management**: A fully loaded 42U rack can easily weigh several hundred kilograms. The documented weight of each device helps ensure that the load capacity of rack cabinets and raised floors is not exceeded -- especially relevant in older buildings or for subsequent expansions.
- **Procurement and replacement**: During a hardware refresh, a report immediately shows which devices have which form factor. If a 1U server needs to be replaced by a 2U model, it is immediately clear whether there is enough space in the rack.

[![Form Factor](../../assets/images/de/grundlagen/kategorien/formfactor.png)](../../assets/images/de/grundlagen/kategorien/formfactor.png)

## Fields

### Form Factor

The form factor of the device. The most common values are `19 inch rack` (for anything that fits in a rack cabinet), `Tower` (freestanding servers and workstations), `Desktop` (clients), and `Blade` (inserts for a blade chassis). Since this is a Dialog+ field, you can add custom form factors -- such as `Mini PC` or `DIN rail` for industrial environments.

### Rack Units

The number of rack units (RU) that the device occupies in the rack. A `1U` server requires one RU, a typical storage array `2U` or `4U`. **This field is the prerequisite for i-doit to position the object in the rack view.** Without a value, the device cannot be assigned to a slot. This field is also indispensable for reports evaluating available capacity in racks.

### Unit of Measurement

The unit in which width, height, and depth are specified. In practice, `mm` has proven to be the standard, because manufacturer specifications in data sheets are almost always in millimeters. You can also choose `cm` or `inches` -- what matters is that you remain consistent within your CMDB.

### Width

The outer width of the device. For 19-inch rack devices, the standard is `482 mm` (with ears) or `450 mm` (without mounting ears). This value is particularly relevant when you want to check whether a device fits into a specific cabinet or onto a specific floor area.

### Height

The outer height of the device. For rack servers, it directly correlates with the rack units: 1 RU equals `44.45 mm`, so a 2U server measures approximately `87 mm`. For tower servers or desktops, the actual case height is entered here.

### Depth

The case depth -- for rack servers typically between `600 mm` and `800 mm`. This value is important for cabinet depth: a 600 mm deep cabinet cannot accommodate a 750 mm deep server. Also consider cable bend radii and cable management arms, which require additional depth.

### Weight

The weight of the device including all installed components (hard drives, power supplies, RAM). A fully loaded 2U server easily weighs 25-30 kg, a blade chassis with 16 blades can exceed 100 kg. This information is crucial for calculating the total load per rack and the floor load capacity.

### Weight Unit

The unit for the weight field -- typically `kg`. For lighter hardware such as switches or desktops, `g` may be appropriate.

### Description

Free text for anything that does not fit in the structured fields: required rail kit (e.g., "Dell ReadyRails II"), special installation instructions (insert from front only), cooling requirements (at least 1 RU spacing to the next device), or notes on mounting.

## Technical Reference

| Property | Value |
|---|---|
| **Category constant** | `C__CATG__FORMFACTOR` |
| **Type** | Global category |
| **Multi-value** | No |
| **Assigned to** | Server, Blade Server, Blade Chassis, Enclosure, Switch, Router, Monitor, Room, etc. |

### Fields (API Reference)

| Field | API key | Type |
|---|---|---|
| **Form Factor** | `formfactor` | Dialog+ (expandable selection) |
| **Rack Units** | `rackunits` | Integer |
| **Unit of Measurement** | `unit` | Dialog (selection) |
| **Width** | `width` | Decimal |
| **Height** | `height` | Decimal |
| **Depth** | `depth` | Decimal |
| **Weight** | `weight` | Decimal |
| **Weight Unit** | `weight_unit` | Dialog (selection) |
| **Description** | `description` | Text field (multi-line) |

### API Examples

#### Create an entry

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "your-api-key",
        "object": 1042,
        "category": "C__CATG__FORMFACTOR",
        "data": {
            "formfactor": "19 Zoll Rack",
            "rackunits": 2,
            "unit": "mm",
            "width": 482,
            "height": 87,
            "depth": 756,
            "weight": 18.5,
            "weight_unit": "kg",
            "description": "Dell PowerEdge R750, 2U Rackmount, Schienen-Kit ReadyRails II required"
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
        "object": 1042,
        "category": "C__CATG__FORMFACTOR"
    },
    "id": 2
}
```

#### Update an entry

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "your-api-key",
        "object": 1042,
        "category": "C__CATG__FORMFACTOR",
        "entry": 1,
        "data": {
            "rackunits": 2,
            "description": "Umbau 2026-03: Server von Rack A03 nach B07 umgezogen, Schienen-Kit wiederused."
        }
    },
    "id": 3
}
```
