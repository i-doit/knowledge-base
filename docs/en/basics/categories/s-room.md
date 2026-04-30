---
title: "Category: Room"
description: Documentation of the Room category in i-doit
icon:
status:
lang: en
---

# Category: Room

The **Room** category documents the room-specific properties of a room object: room type, floor, room number, and an optionally description. It is a **specific category** that is exclusively available for objects of the type Room.

Rooms form a central level in the [location hierarchy](location.md) in i-doit. They are typically subordinate to a building or floor and in turn contain racks, workstations, or individual devices. The location assignment itself is made through the global [Location](location.md) category -- the **Room** category supplements this with room-specific additional information.

## Usage

Typical use cases:

- **Building a room directory**: Record all rooms of a building with room number, floor, and type. In combination with the [Location](location.md) category, this creates a navigable building structure: Location > Building > Floor > Room > Rack > Server. The location browser in i-doit visualizes this hierarchy as a tree structure.
- **Classifying data center rooms**: Through the "Type" field, you can distinguish between server rooms, network distribution rooms, UPS rooms, and office rooms. A report such as "All rooms of type server room" provides a quick overview of all IT-critical spaces -- helpful for fire protection and access control concepts.
- **Relocation and room planning**: During office relocations or room swaps, the location hierarchy under the respective room immediately shows which devices (printers, phones, monitors, PCs) are in that room and need to be moved.
- **Facility management and audit**: In regulated environments (ISO 27001, BSI IT-Grundschutz), rooms with IT infrastructure must be documented -- including type, location, and protective measures. The Room category provides the basic information, which can be supplemented by custom categories (e.g. access control, air conditioning).

[![Room](../../assets/images/de/grundlagen/kategorien/s-room.png)](../../assets/images/de/grundlagen/kategorien/s-room.png)

!!! tip "Room floor plan in the location browser"
    i-doit offers a graphical room view in the location browser: Objects within a room are displayed as tiles and can be positioned via drag and drop. For this view to work, the devices must be assigned to the room object as the parent location via the [Location](location.md) category.

## Fields

### Type

The room type, e.g. `Office`, `Server Room`, `Network Distributor`, `Storage`, `Conference Room`, or `Technical Room`. Dialog+ field -- custom values can be added as needed. The type is the most important distinguishing characteristic in reports and filters: It determines whether a room is classified as IT-critical and which protection requirements apply.

### Room number

The official room number or designation according to the building plan, e.g. `G.03.012` (ground floor, building section 03, room 012) or `2-214`. This field should follow the naming scheme of the facility management so that the i-doit documentation is consistent with physical door signs and building plans.

### Floor

The floor or story where the room is located, e.g. `GF`, `1F`, `B1`, or `3`. Free text field -- a uniform scheme within the organization is recommended. The floor can alternatively be represented as its own object in the location hierarchy (Building > Floor > Room), but is documented here as quick supplementary information directly on the room.

### Description

Free text field for supplementary information: room size (sqm), number of workstations, special equipment (raised floor, air conditioning, fire alarm system), access restrictions, contact person, or usage notes.

!!! warning "Keep room number and location consistent"
    The room number in this category is a pure text field without validation. Ensure that it matches the actual assignment in the [Location](location.md) category. If a room is physically repurposed (e.g. from office to server room), update both the type and the location relationship.

## Technical Reference

| Property | Value |
|---|---|
| **Category Constant** | `C__CATS__ROOM` |
| **Type** | Specific category |
| **Multi-Value** | No |
| **Assigned to** | Room |

### Fields (API Reference)

| Field | API Key | Type |
|---|---|---|
| **Type** | `type` | Dialog+ (extensible selection) |
| **Room number** | `number` | Text |
| **Floor** | `floor` | Text |
| **Description** | `description` | Text field (multi-line) |

### API Examples

#### Create Entry

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "your-api-key",
        "object": 300,
        "category": "C__CATS__ROOM",
        "data": {
            "type": "Serverraum",
            "number": "E.03.012",
            "floor": "EG",
            "description": "Server room building section 03, raised floor, air conditioning, access only with transponder"
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
        "object": 300,
        "category": "C__CATS__ROOM"
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
        "object": 300,
        "category": "C__CATS__ROOM",
        "entry": 1,
        "data": {
            "type": "Netzwerkverteiler",
            "description": "Repurposing 2025-06: Server room to network distributor, active cooling removed"
        }
    },
    "id": 3
}
```
