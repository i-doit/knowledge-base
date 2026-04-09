---
title: "Category: Chassis Devices"
description: Documentation of the Chassis devices (Assigned Devices) category in i-doit
icon:
status:
lang: en
---

# Category: Chassis Devices

The **Chassis devices** category documents the devices assigned to a chassis — typically blade servers, switches, or storage modules. It is a **multi-value category** and is available as a specific category exclusively for objects of the type *Blade Chassis*.

## Usage

Typical use cases:

- **Blade server assignment**: Assign blade servers to a specific chassis and specify in which [slot](s-chassis-slot.md) they are installed. The assignment represents the physical population of the chassis.
- **Role distribution**: Via the *Role* field, you can differentiate whether an installed device functions as a server, switch, storage, power supply, or I/O module.
- **Host adapter and interface assignment**: Per device entry, a host adapter (HBA) and a network interface from the configuration of the assigned object can optionally be referenced — so that the internal cabling of the chassis is traceable.
- **Capacity planning**: In the Report Manager, you can evaluate how many slots of a chassis are already occupied and which devices are installed.

!!! info "Interaction of the chassis categories"
    The three chassis categories work hand in hand: In **[Chassis Slots](s-chassis-slot.md)** you define the available slots, in **Chassis devices** you assign specific objects, and the **[Chassis View](s-chassis-view.md)** shows the result as a visual grid.

[![Chassis Devices](../../assets/images/de/grundlagen/kategorien/s-chassis-devices.png)](../../assets/images/de/grundlagen/kategorien/s-chassis-devices.png)

## Fields

### Role

The function of the device within the chassis, e.g. `Blade Server`, `Switch`, `Storage`, or `Power Supply`. Dialog+ field — custom roles can be added as needed.

### Device assignment

The i-doit object assigned to this chassis entry. Via the object browser, an existing object is selected — typically a blade server or a switch module. The link automatically creates a relationship (relation type 33).

### Device assignment (Hostadapter)

Optionally, a specific host adapter (HBA) of the assigned device can be referenced. The selection list is dynamically populated from the HBA entries of the assigned object.

### Device assignment (Interface)

Optionally, a specific network interface of the assigned device can be selected. This enables documentation of which physical port the device is connected to on the chassis backplane.

### Device assignment (power consumer)

Optionally, a power consumer entry of the assigned device can be selected. This records which power supply the device uses within the chassis.

### Assigned to (slots)

Indicates in which [slots](s-chassis-slot.md) the device is installed. A device can occupy multiple slots, e.g. for double-width blades.

### Description

Free text for supplementary information, such as serial number, firmware version, or special features of the installation situation.

## Technical Reference

| Property | Value |
|---|---|
| **Category Constant** | `C__CATS__CHASSIS_DEVICES` |
| **Type** | Specific category |
| **Multi-Value** | Yes |
| **Assigned to** | Blade Chassis |

### Fields (API Reference)

| Field | API Key | Type |
|---|---|---|
| **Role** | `role` | Dialog+ (extensible selection) |
| **Device assignment** | `assigned_device` | Object browser |
| **Device assignment (Hostadapter)** | `assigned_hba` | Dialog (selection) |
| **Device assignment (Interface)** | `assigned_interface` | Dialog (selection) |
| **Device assignment (power consumer)** | `assigned_power_consumer` | Dialog (selection) |
| **Assigned to (slots)** | `assigned_slots` | Multiple selection |
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
        "category": "C__CATS__CHASSIS_DEVICES",
        "data": {
            "role": 1,
            "assigned_device": 815,
            "description": "Blade Server in Slot 3-4, Dual-Width"
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
        "category": "C__CATS__CHASSIS_DEVICES"
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
        "category": "C__CATS__CHASSIS_DEVICES",
        "entry": 7,
        "data": {
            "role": 2,
            "description": "Converted to switch module, 2025-09"
        }
    },
    "id": 3
}
```
