---
title: "Category: WAN Connections"
description: Documentation of the WAN Connections category in i-doit
icon:
status:
lang: en
---

# Category: WAN Connections

The **WAN Connections** category documents the wide-area network connections of an object. It is a **multi-value category** -- any number of WAN connections can be created, e.g. for locations with redundant connectivity via different providers. The category captures bandwidths, provider information, circuit IDs, and the link to the connected networks and routers.

!!! info "Holistic documentation of site connectivity"
    WAN connections are the link between locations. Combine this category with the [Network](s-net.md) category for local network segments and the [Routing](s-router.md) category for routers at the handover points. This creates a consistent documentation of the entire site connectivity.

## Usage

Typical use cases:

- **Provider management**: Record the provider, contract number (customer number), project number, and shopping cart order number for each WAN connection. This allows you to trace at any time which lines run with which provider under which contract -- indispensable for cancellations, fault reports, and contract negotiations.
- **Bandwidth planning**: The fields for upload and download capacity (actual and maximum) enable a detailed bandwidth overview. A report on all WAN connections with less than 100 Mbit/s immediately shows which locations may become bottlenecks as data volume increases.
- **Redundancy and fault tolerance**: For locations with multiple WAN connections (e.g. primary via MPLS, backup via Internet VPN), each entry documents one connection. The role (Primary, Backup) immediately shows which connection takes over in case of failure.
- **Incident management**: The ticket number and circuit ID (project number) are the key information that the provider requires for a fault report. When this data is maintained in i-doit, it saves valuable minutes in an emergency.
- **Network and router linking**: Using the **Connected routers** and **Connected networks** fields, the WAN connection is directly linked to the relevant infrastructure objects. Impact analyses then automatically show which networks and routers are affected when a connection fails.

!!! tip "VLAN assignment"
    When the WAN connection terminates in a specific VLAN, use the **VLAN ID** field to link to the corresponding Layer 2 network object. This closes the gap between the physical WAN documentation and the logical network structure.

[![WAN-Leitungen](../../assets/images/de/grundlagen/kategorien/wan.png)](../../assets/images/de/grundlagen/kategorien/wan.png)

## Fields

### Title

The name of the WAN connection, e.g. `MPLS Berlin-Munich` or `Internet Backup Site South`. This value appears in the list view and in reports.

### Role

The role of the connection in the network, e.g. `Primary`, `Backup` or `Management`. Dialog+ field -- custom values can be added as needed.

### Typ

The technology of the WAN connection, e.g. `MPLS`, `Internet VPN`, `SD-WAN`, `Leased Line` or `DSL`. Dialog+ field -- custom values can be added as needed.

### Channels

The number of channels, e.g. for ISDN lines or bundled connections.

### Phone number(s)

Phone numbers assigned to the WAN connection. Multi-line text field -- enter one number per line when multiple numbers apply.

### Connection location

Link to a location object in i-doit (e.g. building or room) where the WAN connection physically terminates. Object browser field.

### Capacity UP and Capacity UP Unit

The actual upload bandwidth of the connection. The unit is specified separately as `kbit/s`, `Mbit/s` or `Gbit/s`. Document the contractually guaranteed bandwidth here.

### Capacity DOWN and Capacity DOWN Unit

The actual download bandwidth of the connection. Analogous to the upload capacity.

### Max. Capacity UP and Max. Capacity DOWN

The maximum possible bandwidth of the connection (burst or technical maximum), separated by upload and download with the respective unit. Useful for documenting what reserves a connection offers.

### Project number

The internal or provider-side project number or circuit ID of the connection. **This field is critical for fault reports** -- the provider typically identifies the connection by this number.

### VLAN ID

Link to a Layer 2 network object in which the WAN connection terminates. Object browser field.

### Shopping cart number

The order number from the procurement process. Helpful for tracking orders and assigning them to invoices.

### Ticket number

A reference to a ticket (e.g. from the ticket system) related to the deployment or an incident affecting the connection.

### Customer number

The customer number with the provider. Important for identification during fault reports and contract inquiries.

### Connected routers

Link to router objects connected to the WAN connection. Object browser field -- multiple routers can be assigned. See also the [Routing](s-router.md) category.

### Connected networks

Link to network objects reachable via the WAN connection. Object browser field -- multiple networks can be assigned. See also the [Network](s-net.md) category.

### Description

Free text for additional details: SLA details, cancellation periods, technical contact at the provider, handover points, or special configuration notes.

## Technical Reference

| Property | Value |
|---|---|
| **Category Constant** | `C__CATG__WAN` |
| **Type** | Global category |
| **Multi-Value** | Yes |
| **Assigned to** | WAN Connections |

### Fields (API Reference)

| Field | API Key | Type |
|---|---|---|
| **Title** | `title` | Text |
| **Role** | `role` | Dialog+ (extensible selection) |
| **Typ** | `type` | Dialog+ (extensible selection) |
| **Channels** | `channels` | Integer |
| **Phone number(s)** | `call_numbers` | Text field (multi-line) |
| **Connection location** | `connection_location` | Object browser (link) |
| **Capacity UP** | `capacity_up` | Decimal |
| **Capacity UP Unit** | `capacity_up_unit` | Dialog (selection) |
| **Capacity DOWN** | `capacity_down` | Decimal |
| **Capacity DOWN Unit** | `capacity_down_unit` | Dialog (selection) |
| **Max. Capacity UP** | `max_capacity_up` | Decimal |
| **Max. Capacity UP Unit** | `max_capacity_up_unit` | Dialog (selection) |
| **Max. Capacity DOWN** | `max_capacity_down` | Decimal |
| **Max. Capacity DOWN Unit** | `max_capacity_down_unit` | Dialog (selection) |
| **Project number** | `project_no` | Text |
| **VLAN ID** | `vlan_id` | Object browser (link) |
| **Shopping cart number** | `shopping_cart_no` | Text |
| **Ticket number** | `ticket_no` | Text |
| **Customer number** | `customer_no` | Text |
| **Connected routers** | `router` | Object browser (link) |
| **Connected networks** | `net` | Object browser (link) |
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
        "category": "C__CATG__WAN",
        "data": {
            "title": "MPLS Berlin-Munich Primary",
            "role": "Primary",
            "type": "MPLS",
            "capacity_up": 100,
            "capacity_up_unit": 3,
            "capacity_down": 100,
            "capacity_down_unit": 3,
            "max_capacity_up": 200,
            "max_capacity_up_unit": 3,
            "max_capacity_down": 200,
            "max_capacity_down_unit": 3,
            "project_no": "CID-2025-04711",
            "customer_no": "KD-889900",
            "description": "MPLS primary line, provider: Telekom, SLA 99.9%, 4h repair time"
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
        "category": "C__CATG__WAN"
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
        "category": "C__CATG__WAN",
        "entry": 5,
        "data": {
            "capacity_up": 200,
            "capacity_down": 200,
            "description": "Bandwidth upgrade 2025-10: 100 Mbit/s to 200 Mbit/s symmetrical."
        }
    },
    "id": 3
}
```
