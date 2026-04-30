---
title: "Category: CPU"
description: Documentation of the CPU category in i-doit
icon:
status:
lang: en
---

# Category: CPU

The **CPU** category documents the installed processors of an object. It is a **multi-value category** -- any number of entries can be created per object, e.g. for dual-socket servers with two physical CPUs.

## Usage

Typical use cases:

- **Completing hardware inventory**: Record the manufacturer, model, clock speed, and core count of each installed CPU. Together with the Memory and Drive categories, a complete hardware profile emerges.
- **Capacity planning**: The Report Manager can evaluate which servers use which CPU generations -- helpful for refresh planning and licensing.
- **Hardware lifecycle**: When swapping a CPU, archive the old entry and create a new one. The change history is thus seamlessly preserved.
- **Virtualization**: For hypervisors, the CPU category documents the physical processors of the host -- separate from the virtual CPUs of the guests.

[![CPU](../../assets/images/de/grundlagen/kategorien/cpu.png)](../../assets/images/de/grundlagen/kategorien/cpu.png)

## Fields

### Title

The name or model designation of the processor, e.g. `Intel Xeon Silver 4314` or `AMD EPYC 9654`. This value appears in the list view of the category and in reports.

### Manufacturer

The processor manufacturer, typically `Intel` or `AMD`. Dialog+ field -- custom values can be added as needed.

### Type

The specific model series or number, e.g. `Xeon Silver 4314` or `EPYC 9654`. Enables more detailed differentiation than the manufacturer alone and is useful for reports and comparisons.

### CPU frequency and frequency unit

The base clock of the CPU. The unit is specified separately as `MHz` or `GHz`. For documentation purposes, the manufacturer's base clock is recommended -- not the turbo boost value.

### CPU cores

The number of physical cores. For hyperthreading CPUs, this is the core count, not the thread count.

### Description

Free text for additional details: thread count, TDP, socket, cache size, generation notes, or configuration specifics.

## Technical reference

| Property | Value |
|---|---|
| **Category constant** | `C__CATG__CPU` |
| **Type** | Global category |
| **Multi-value** | Yes |
| **Assigned to** | Server, Client, Blade Server, etc. |

### Fields (API reference)

| Field | API key | Type |
|---|---|---|
| **Title** | `title` | Text |
| **Manufacturer** | `manufacturer` | Dialog+ (extensible selection) |
| **Type** | `type` | Dialog+ (extensible selection) |
| **CPU frequency** | `frequency` | Decimal |
| **Frequency unit** | `frequency_unit` | Dialog (selection) |
| **CPU cores** | `cores` | Integer |
| **Description** | `description` | Text field (multi-line) |

### API examples

#### Create entry

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "your-api-key",
        "objID": 123,
        "category": "C__CATG__CPU",
        "data": {
            "title": "Intel Xeon Silver 4314",
            "manufacturer": "Intel",
            "type": "Xeon Silver 4314",
            "frequency": 2.4,
            "frequency_unit": 3,
            "cores": 16,
            "description": "16 cores, 32 threads, 2.4 GHz base clock, socket LGA 4189, TDP 135 W"
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
        "objID": 123,
        "category": "C__CATG__CPU"
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
        "objID": 123,
        "category": "C__CATG__CPU",
        "entry": 32,
        "data": {
            "cores": 16,
            "description": "Replacement 2025-03: CPU upgraded to 16-core model."
        }
    },
    "id": 3
}
```
