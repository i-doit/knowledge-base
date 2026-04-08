---
title: "Category: Printer"
description: Documentation of the Printer category in i-doit
icon:
status:
lang: en
---

# Category: Printer

The **Printer** category documents the printer-specific technical properties of a printer object. It is a **specific category** that is exclusively available for objects of the type Printer, and records the key characteristics such as printing method, color capability, duplex support, emulation, and paper format.

## Usage

Typical use cases:

- **Completing the printer inventory**: Record the technical properties of every printer in the organization. Together with the global categories (model, serial number, location, IP address), this creates a complete device profile that is indispensable for support, maintenance, and procurement.
- **Procurement planning and standardization**: Using the Report Manager, you can evaluate how many laser printers vs. inkjet printers are in use, which models support color printing or duplex, and which paper formats are covered. This data forms the basis for standardization decisions and framework agreements.
- **Efficient support request handling**: When a user reports a printing problem, the category immediately provides the helpdesk with the key questions: Is it a laser or inkjet printer? Does it support color? Which emulation is configured? This considerably speeds up fault diagnosis.
- **Lifecycle management**: When replacing a printer, the data from the old device is archived and the new device is recorded with current values. Reports show which printers are outdated (e.g. no duplex support) and should be replaced next.

[![Printer](../../assets/images/de/grundlagen/kategorien/s-prt.png)](../../assets/images/de/grundlagen/kategorien/s-prt.png)

## Fields

### Type

The printing method, e.g. `Laser`, `Inkjet`, `Dot Matrix`, `Thermal`, or `LED`. Dialog+ field -- custom values can be added as needed. This field is the most important distinguishing characteristic in the printer inventory and significantly determines consumable planning (toner vs. ink cartridges).

### Color

Indicates whether the printer supports color printing. Dialog field with the options `Yes` and `No`. A report such as "All color printers" helps in planning toner stocking, as color printers typically require four toners instead of one.

### Duplex

Indicates whether the printer supports automatic double-sided printing (duplex). Dialog field with the options `Yes` and `No`. In environments with high print volume, duplex significantly saves paper -- this information helps identify devices that should be replaced with duplex-capable models.

### Emulation

The supported printer language or emulation, e.g. `PCL 6`, `PostScript 3`, `ESC/P`, or `ZPL` (for label printers). Dialog+ field -- custom values can be added. The emulation is relevant for driver selection and compatibility with print servers and applications.

### Paper format

The supported standard paper format, e.g. `A4`, `A3`, `Letter`, or `Continuous`. Dialog+ field. For printers with multiple paper trays, this value refers to the maximum format. Additional details about further formats can be stored in the description field.

### Description

Free text field for additional details: print speed (pages/minute), resolution (dpi), interfaces (USB, Ethernet, Wi-Fi), paper tray capacity, special functions (scanning, copying, faxing for multifunction devices), or configuration notes.

!!! tip "Documenting multifunction devices"
    Multifunction devices (printer/scanner/copier) are typically created as printer objects in i-doit. Functions such as scanning and copying can be documented in the description field. Alternatively, you can create a custom object type with additional user-defined categories if more detailed capture is desired.

## Technical Reference

| Property | Value |
|---|---|
| **Category Constant** | `C__CATS__PRT` |
| **Type** | Specific category |
| **Multi-Value** | No |
| **Assigned to** | Printer |

### Fields (API Reference)

| Field | API Key | Type |
|---|---|---|
| **Type** | `type` | Dialog+ (extensible selection) |
| **Color** | `is_color` | Dialog (selection) |
| **Duplex** | `is_duplex` | Dialog (selection) |
| **Emulation** | `emulation` | Dialog+ (extensible selection) |
| **Paper format** | `paper_format` | Dialog+ (extensible selection) |
| **Description** | `description` | Text field (multi-line) |

### API Examples

#### Create Entry

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "your-api-key",
        "object": 920,
        "category": "C__CATS__PRT",
        "data": {
            "type": "Laser",
            "is_color": "Ja",
            "is_duplex": "Ja",
            "emulation": "PCL 6",
            "paper_format": "A4",
            "description": "HP LaserJet Pro M479fdw, 28 S/Min, 600x600 dpi, USB + Ethernet + WLAN, Scan/Copy/Fax"
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
        "object": 920,
        "category": "C__CATS__PRT"
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
        "object": 920,
        "category": "C__CATS__PRT",
        "entry": 1,
        "data": {
            "emulation": "PostScript 3",
            "description": "Emulation switched to PostScript 3 for compatibility with new print server"
        }
    },
    "id": 3
}
```
