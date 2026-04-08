---
title: "Category: Routing"
description: Documentation of the Routing category in i-doit
icon:
status:
lang: en
---

# Category: Routing

The **Routing** category documents the routing configuration of a router object. It is a **specific category** and is exclusively available for the object type **Router**. Here it is recorded which routing protocol the router uses and which gateway addresses are configured — information that is indispensable for network documentation and troubleshooting.

!!! info "Specific category"
    Routing is a specific category that is only assigned to the object type Router. For documenting the network connectivity of other devices, the global categories [Host address](ip.md) and [Port](network-port.md) are available.

## Usage

Typical use cases:

- **Document network topology**: Record the deployed routing protocol (e.g. OSPF, BGP, RIPv2, static) and the configured gateway addresses. Together with the categories [Net](s-net.md) and [Port](network-port.md), this provides a complete picture of the network infrastructure.
- **Troubleshooting and error analysis**: When a network segment is unreachable, a look at the Routing category immediately shows which protocol the affected router uses and which gateways are configured. This significantly accelerates fault isolation.
- **Change Management**: When switching routing protocols — for example from static routing to OSPF — archive the old entry and create a new one. The change history then seamlessly shows when which configuration was active.
- **Compliance and Audits**: In regulated environments, documentation of the routing configuration is often required. Using the Report Manager, you can generate a complete overview of all routers and their protocols at any time.

!!! tip "Interaction with WAN connections"
    Routers are frequently located at the transition between LAN and WAN. Document the WAN connection in the category [WAN connections](wan.md) and link the router there via the field **Connected routers**. This creates a seamless chain from the WAN connection through the router into the local network.

[![Category Routing](../../assets/images/de/grundlagen/kategorien/s-router.png)](../../assets/images/de/grundlagen/kategorien/s-router.png)

## Fields

### Routing protocol

The routing protocol configured on the router, e.g. `OSPF`, `BGP`, `RIPv2`, `EIGRP` or `Static`. Dialog+ field -- custom values can be added as needed. For routers that use multiple protocols simultaneously (e.g. OSPF internally and BGP externally), it is recommended to document the primary protocol and supplement details in the description field.

### Gateway address

The IP address configured as the gateway. This field links to addresses maintained in the category [Host address](ip.md). For routers with multiple interfaces and different gateways per network segment, the relevant addresses can be assigned here.

### Description

Free text for additional details: OSPF area, BGP AS number, route maps, ACLs, special configuration features or references to the configuration file in the version control system.

## Technical Reference

| Property | Value |
|---|---|
| **Category Constant** | `C__CATS__ROUTER` |
| **Type** | Specific category |
| **Multi-Value** | No |
| **Assigned to** | Router |

### Fields (API Reference)

| Field | API Key | Type |
|---|---|---|
| **Routing protocol** | `routing_protocol` | Dialog+ (extensible selection) |
| **Gateway address** | `gateway_address` | Dialog list |
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
        "category": "C__CATS__ROUTER",
        "data": {
            "routing_protocol": "OSPF",
            "description": "OSPF Area 0, Router-ID 10.0.0.1, Redistribution of static routes"
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
        "object": 123,
        "category": "C__CATS__ROUTER"
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
        "category": "C__CATS__ROUTER",
        "entry": 1,
        "data": {
            "routing_protocol": "BGP",
            "description": "Migration from OSPF to BGP completed, AS 65001."
        }
    },
    "id": 3
}
```
