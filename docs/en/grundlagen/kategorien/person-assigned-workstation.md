---
title: "Category: Assigned Workstations (Person)"
description: Documentation of the Assigned Workstations category in i-doit
icon:
status:
lang: en
---

# Category: Assigned Workstations (Person)

The **Assigned Workstations** category shows on person objects which workstations are assigned to this person. It is a **multi-value category** and represents the reverse side of the category [Assigned Workstation](assigned-workstation.md), which is maintained on the workstation object itself. If you change the assignment on either side, i-doit automatically updates the reverse direction — this is an implicit relationship.

!!! info "Direction of the assignment"
    Entries in this category are not created by direct editing here, but rather by assigning a person on a workstation object in the category [Assigned Workstation](assigned-workstation.md). This category is therefore primarily a **read view** — it aggregates all workstations that reference the relevant person.

## Why This Category Matters

In every organization, persons are the central reference point for IT equipment. When an employee leaves the company or changes departments, it must be immediately clear which devices and workstations are assigned to them. That is exactly what this category does: It bundles the information in one location — the person object — instead of leaving it scattered across dozens of workstation objects.

## Usage

Typical use cases:

- **Onboarding**: When a new employee joins, the workstation objects (notebook, desktop, telephone) are assigned to the person. In the **Assigned Workstations** category of the person, the IT service desk then sees the complete equipment at a glance — including all devices that still need to be delivered.
- **Offboarding**: When an employee leaves the company, this category lists all workstations that need to be returned or reassigned. This prevents devices from "disappearing" or licenses remaining unused.
- **Workstation changes and relocations**: During an office reorganization, a report on this category shows which person has which devices — and whether the assignment is still correct after the move.
- **Audit and Compliance**: For license audits and asset audits, the person-to-device assignment is indispensable. The category provides this assignment without manual research.

[![Assigned Workstations (Person)](../../assets/images/de/grundlagen/kategorien/person-assigned-workstation.png)](../../assets/images/de/grundlagen/kategorien/person-assigned-workstation.png)

## Fields

### Assigned workstations

An object browser field that displays all workstation objects assigned to this person. The selection is restricted to objects that have a **Logical Unit** category. In practice, these are typically clients, notebooks, telephones, printers, or other end devices.

Since this is a multi-value field, any number of workstations can be assigned to a person — such as a desktop PC in the office, a notebook for mobile use, and a VoIP telephone.

!!! tip "Linkable from both sides"
    You can make the assignment both here on the person and on the workstation object in the category [Assigned Workstation](assigned-workstation.md). i-doit synchronizes the reverse direction automatically. For mass changes (e.g. relocating an entire team), the API is recommended.

## Technical Reference

| Property | Value |
|---|---|
| **Category Constant** | `C__CATG__PERSON_ASSIGNED_WORKSTATION` |
| **Type** | Global category |
| **Multi-Value** | Yes |
| **Assigned to** | Persons |

### Fields (API Reference)

| Field | API Key | Type |
|---|---|---|
| **Assigned workstations** | `assigned_workstations` | Object browser |

### API Examples

#### Create Entry

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "your-api-key",
        "object": 4711,
        "category": "C__CATG__PERSON_ASSIGNED_WORKSTATION",
        "data": {
            "assigned_workstations": 1055
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
        "object": 4711,
        "category": "C__CATG__PERSON_ASSIGNED_WORKSTATION"
    },
    "id": 2
}
```
