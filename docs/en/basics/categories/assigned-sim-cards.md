---
title: "Category: Assigned SIM cards"
description: Documentation of the Assigned SIM cards category in i-doit
icon:
status:
lang: en
---

# Category: Assigned SIM cards

The **Assigned SIM cards** category links SIM card objects with an end device. It is a **multi-value category** -- multiple SIM cards can be assigned to a device, e.g. for dual-SIM smartphones or routers with multiple cellular uplinks.

!!! tip "Part of mobile device management"
    This category is a central building block for documenting mobile devices. It shows the **device side** of the SIM assignment: which SIM cards are inserted in this phone, tablet, or router? The counterpart on the SIM card object are the categories [SIM card](cards.md) (card data, PIN/PUK) and **SIM** (contract data, phone number, network operator). Via the [Contract assignment](contract-assignment.md) on the SIM object, the mobile contract can also be tracked.

!!! info "Why separate SIM objects?"
    In older i-doit versions, only 2 SIM cards could be stored directly on the device. The new model works with **independent SIM card objects** that are linked to the device via this assignment category. Advantage: any number of SIMs per device, clean separation of card, contract, and device data, and the ability to document the lifecycle of a SIM card independently of the device (e.g. SIM moves from the old to the new phone).

## Usage

Typical use cases:

- **Documenting device assignments**: Record which SIM card is in which mobile phone, tablet, or IoT router. In case of device loss, it is immediately clear which phone number and which contract are affected and need to be blocked.
- **Allocating mobile costs**: Through the link between device and SIM card, it is traceable which costs are caused by which device. This is particularly relevant when employees use company devices with SIM cards and costs need to be distributed across cost centers.
- **Contract management and lifecycle**: When a mobile contract expires, a report shows all devices with SIM cards from that contract. Conversely, when decommissioning a device, you can quickly check whether the SIM card needs to be returned or assigned to a new device.
- **IoT and M2M scenarios**: Routers, gateways, and IoT devices frequently use SIM cards for cellular connectivity. The assignment here documents which SIM is in which field device -- critical information during location changes or outages.



## Fields

### Assigned SIM cards

An object browser field through which SIM card objects are linked to the device. The object browser automatically filters for objects that possess the SIM card category (`C__CATG__CARDS`) -- so you only see objects that are actually created as SIM cards.

The link is bidirectional: when a SIM card is assigned here, the reverse link to the device automatically appears on the SIM card object. This allows the assignment to be traced from both sides.

!!! warning "SIM card objects must exist"
    Before you can make an assignment here, the SIM card object must already be created in i-doit. First create an object of type *SIM card* and maintain the relevant data there (phone number, ICCID, network operator, contract information) before assigning it to the device here.

## Technical reference

| Property | Value |
|---|---|
| **Category constant** | `C__CATG__ASSIGNED_SIM_CARDS` |
| **Type** | Global category |
| **Multi-value** | Yes |
| **Assigned to** | Mobile phone, SIM card, Tablet, etc. |

### Fields (API reference)

| Field | API key | Type |
|---|---|---|
| **Assigned SIM cards** | `isys_obj__id` | Object browser (link) |
| **Assigned SIM cards (card entry)** | `isys_catg_cards_list__id` | Object browser (link) |

### API examples

#### Create entry

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "your-api-key",
        "object": 850,
        "category": "C__CATG__ASSIGNED_SIM_CARDS",
        "data": {
            "isys_obj__id": 1205
        }
    },
    "id": 1
}
```

!!! note "Object ID of the SIM card"
    The field `isys_obj__id` expects the **object ID** of the SIM card object. The ID can be determined, for example, via `cmdb.objects.read` with a type filter for SIM cards.

#### Read entries

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.read",
    "params": {
        "apikey": "your-api-key",
        "object": 850,
        "category": "C__CATG__ASSIGNED_SIM_CARDS"
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
        "object": 850,
        "category": "C__CATG__ASSIGNED_SIM_CARDS",
        "entry": 3,
        "data": {
            "isys_obj__id": 1310
        }
    },
    "id": 3
}
```
