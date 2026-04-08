---
title: "Category: Monitor"
description: Documentation of the Monitor category in i-doit
icon:
status:
lang: en
---

# Category: Monitor

The **Monitor** is a specific category for objects of the type **Monitor** and documents the technical properties of a display. It is a **single-value category** -- exactly one entry exists per monitor object with the core data such as screen size, resolution, and panel type.

While the global categories (model, manufacturer, location) apply to all object types, the Monitor category contains display-specific properties that are only relevant for screens. In combination with the [Form Factor](formfactor.md) category -- which documents physical dimensions and rack units -- this creates a complete picture of the device.

!!! tip "Monitor documentation and workstation planning"
    The Monitor category reaches its full potential in combination with the [Workstation](assigned-workstation.md) category. Through the workstation assignment, it is documented which monitor stands at which workstation and is assigned to which employee. Reports such as "All monitors with resolution below Full HD" or "All workstations without a dual-monitor setup" help in planning display rollouts.

!!! info "Documenting panel technology"
    The **Type** field distinguishes between LCD, LED, OLED, and other technologies. This information is relevant for procurement planning (energy consumption, lifespan) and for ergonomic workstation audits. Since it is a Dialog+ field, custom values such as "Mini-LED" or "QLED" can be added as needed.

## Usage

Typical use cases:

- **Hardware inventory**: Record the screen size, resolution, and panel type of every monitor. In combination with the Model and Accounting categories, this creates a complete asset profile including acquisition date and depreciation.
- **Verifying workstation standards**: Using reports, you can evaluate which workstations meet the defined minimum standard (e.g. at least 27 inches, Full HD resolution). Deviations become visible and can be addressed in a targeted manner.
- **Ergonomics audits**: The Pivot (portrait mode capability) and screen size fields provide data for ergonomic assessments. A report such as "All monitors without pivot function on developer workstations" identifies areas requiring action.
- **Lifecycle management**: Older monitors with lower resolution or without LED backlighting can be identified via reports and scheduled for replacement campaigns. The form factor additionally provides the physical dimensions.
- **Procurement planning**: Evaluating the current monitor landscape by size, type, and resolution shows which models dominate and where standardization potential exists.

[![Monitor](../../assets/images/de/grundlagen/kategorien/s-monitor.png)](../../assets/images/de/grundlagen/kategorien/s-monitor.png)

## Fields

### Screen size (Display) and Unit

The diagonal of the screen as a decimal value, e.g. `27.0` or `34.0`. The unit is specified separately -- usually inches. This value appears in the list view and is the most frequently filtered property in reports.

### Type

The panel technology of the monitor: LCD, LED, OLED, TN, IPS, etc. Dialog+ field -- custom values can be added as needed, e.g. for specialized display technologies like Mini-LED or QLED. Useful for energy-related evaluations (OLED vs. LCD) and procurement standards.

### Resolution

The native screen resolution, e.g. `1920x1080` (Full HD), `2560x1440` (WQHD), or `3840x2160` (4K UHD). Dialog+ field -- custom values can be added. The resolution is a central criterion for workstation standards and software requirements.

### Pivot

Indicates whether the monitor supports portrait mode rotation (pivot function). Dialog field with Yes/No values. Relevant for developer workstations and document editing, where a second monitor in portrait mode is common.

### Speaker

Documents whether the monitor has built-in speakers. Dialog field with Yes/No values. Relevant for conference rooms and workstations where no external speakers are desired.

### Description

Free text for additional details: connector configuration (HDMI, DisplayPort, USB-C), special features such as curved design, HDR support, monitor arm compatibility, or VESA dimensions.

## Technical Reference

| Property | Value |
|---|---|
| **Category Constant** | `C__CATS__MONITOR` |
| **Type** | Specific category |
| **Multi-Value** | No |
| **Assigned to** | Monitor |

### Fields (API Reference)

| Field | API Key | Type |
|---|---|---|
| **Screen size** | `size` | Decimal |
| **Unit** | `size_unit` | Dialog (selection) |
| **Type** | `type` | Dialog+ (extensible selection) |
| **Resolution** | `resolution` | Dialog+ (extensible selection) |
| **Pivot** | `pivot` | Dialog (selection) |
| **Speaker** | `speaker` | Dialog (selection) |
| **Description** | `description` | Text field (multi-line) |

### API Examples

#### Create Entry

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "your-api-key",
        "object": 123,
        "category": "C__CATS__MONITOR",
        "data": {
            "size": 27.0,
            "size_unit": "Zoll",
            "type": "IPS",
            "resolution": "2560x1440",
            "pivot": 1,
            "speaker": 0,
            "description": "Dell U2723QE, USB-C Hub, 90W Power Delivery, VESA 100x100"
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
        "objID": 123,
        "category": "C__CATS__MONITOR"
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
        "object": 123,
        "category": "C__CATS__MONITOR",
        "entry": 1,
        "data": {
            "resolution": "3840x2160",
            "description": "Upgrade 2026-03: Panel-Tausch auf 4K UHD durch Hfirstller-Service"
        }
    },
    "id": 3
}
```
