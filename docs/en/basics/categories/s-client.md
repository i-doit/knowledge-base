---
title: "Category: Desktop"
description: Documentation of the specific Desktop (Client) category in i-doit
icon:
status:
lang: en
---

# Category: Desktop

The **Desktop** category captures client-specific properties of an end device. It is a **single-value category** and is available as a specific category on objects of the type *Client*.

## Usage

Typical use cases:

- **Document client type**: Distinguish between desktop, laptop, tablet, thin client or other form factors. The Dialog+ field allows the addition of custom types — such as `Kiosk Terminal` or `Ruggedized Notebook`.
- **Record keyboard layout**: Record whether a device is equipped with a German (`QWERTZ`), English (`QWERTY`) or another layout. Helpful during device replacement and for IT support, especially in international organizations.
- **Reporting and filtering**: The Report Manager can filter by client type — e.g. "all laptops with Windows 11" or "all thin clients at the Berlin location". In combination with the categories [Model](model.md) and [Operating system](operating-system.md), this creates a comprehensive end device profile.

!!! note "Distinction from the Model category"
    The Desktop category is specific to client objects and offers a dedicated Dialog+ field for the client type. General hardware attributes such as manufacturer and model belong in the category [Model](model.md).

[![Desktop](../../assets/images/de/grundlagen/kategorien/s-client.png)](../../assets/images/de/grundlagen/kategorien/s-client.png)

## Fields

### Client type

The form factor or type of the client, e.g. `Desktop`, `Laptop`, `Tablet` or `Thin Client`. Dialog+ field — custom values can be added as needed.

### Keyboard layout

The physical keyboard layout of the device, e.g. `QWERTZ (DE)`, `QWERTY (US)` or `AZERTY (FR)`. Free text field with a maximum of 255 characters.

### Description

Free text for supplementary details, e.g. special peripherals, docking station compatibility or notes on usage.

## Technical Reference

| Property | Value |
|---|---|
| **Category Constant** | `C__CATS__CLIENT` |
| **Type** | Specific category |
| **Multi-Value** | No (single-value) |
| **Assigned to** | Client |

### Fields (API Reference)

| Field | API Key | Type |
|---|---|---|
| **Client type** | `type` | Dialog+ (extensible selection) |
| **Keyboard layout** | `keyboard_layout` | Text |
| **Description** | `description` | Text field (multi-line) |

### API Examples

#### Create Entry

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "your-api-key",
        "object": 101,
        "category": "C__CATS__CLIENT",
        "data": {
            "type": 1,
            "keyboard_layout": "QWERTZ (DE)",
            "description": "default workstation, incl. Docking Station HP UltraSlim"
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
        "object": 101,
        "category": "C__CATS__CLIENT"
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
        "object": 101,
        "category": "C__CATS__CLIENT",
        "entry": 1,
        "data": {
            "type": 2,
            "keyboard_layout": "QWERTY (US)",
            "description": "Switched to laptop, international layout"
        }
    },
    "id": 3
}
```
