---
title: "Category: Listener"
description: Documentation of the Listener category in i-doit
icon:
status:
lang: en
---

# Category: Listener

The **Listener** category documents the services and ports that are open on an object and waiting for incoming connections. It is a **multi-value category** -- any number of listener entries can be created to represent all active network services.

!!! info "Listener, Connector, and Folder -- how they work together"
    Network communication in i-doit is mapped through three interrelated categories: The **Listener** defines which ports an object opens (the "server side"). The [Network Connections](net-connector.md) category documents which outgoing connections an object establishes (the "client side"). The [Network Listener (Overview)](net-connections-folder.md) category is the folder category that merges all listeners of an object into an aggregate view.

## Usage

Typical use cases:

- **Firewall documentation**: Each listener entry corresponds to an inbound firewall rule: protocol, port, and bound IP address define what should be reachable from outside. Together with the gateway field (firewall object), this creates a complete mapping from service to firewall rule.
- **Security audits and hardening**: A report on all listener entries immediately shows which ports are open on which servers. Unexpected entries -- such as a MySQL listener on port 3306 bound to `0.0.0.0` instead of `127.0.0.1` -- stand out immediately during evaluation and can be hardened in a targeted manner.
- **Service inventory and service mapping**: Through the link via the **Opened by application** field, it becomes visible which software occupies which port. This is indispensable for change management: If a port is changed, you immediately know which application is affected.
- **Dependency analysis**: Listeners are the connection target for the [Network Connections](net-connector.md) category. When other objects have established connections to a listener, this reveals the dependencies -- crucial before maintenance work or migrations.

[![Listener](../../assets/images/de/grundlagen/kategorien/net-listener.png)](../../assets/images/de/grundlagen/kategorien/net-listener.png)

## Fields

### Layer 3/4 protocol

The transport protocol -- typically `TCP` or `UDP`. Dialog+ field, so additional protocols such as `SCTP` or `DCCP` can be added as needed. The choice of protocol is relevant for correctly mapping firewall rules, as these usually differentiate between TCP and UDP.

### Layer 5-7 protocol

The application protocol running on this port: `HTTP`, `HTTPS`, `SSH`, `SMTP`, `DNS`, `LDAP`, etc. This field gives the port entry semantic meaning -- port 443 alone says little, but port 443 with protocol `HTTPS` makes the purpose immediately clear. Also a Dialog+ field.

### (Bind) IP address

The IP address that the service is bound to. The selection is restricted to IP addresses that are already created in the Host Address category of the object. Typical values:

- A **specific IP** (e.g. `192.168.1.10`) -- the service is only reachable through this interface
- **0.0.0.0** -- the service listens on all IPv4 interfaces

!!! tip "Security relevance of the bind address"
    A database listener bound to `0.0.0.0` instead of `127.0.0.1` is potentially reachable from every network segment. Document the bind address carefully -- it is an important indicator of a system's attack surface.

### Port range (from/to)

The port or port range that the service listens on. For a single port, both values are identical (e.g. `22` / `22` for SSH). Port ranges occur with:

- **FTP passive mode**: e.g. ports 30000--31000
- **RPC services**: dynamically assigned port ranges
- **Application-specific ranges**: e.g. in microservice architectures

### Opened by application

Link to an application object that creates this listener. Here you select, for example, the object "Apache HTTP Server" or "PostgreSQL." This link closes the gap between network and application documentation: You can see not only that port 5432 is open, but also that PostgreSQL is responsible for it.

### Gateway

Link to a firewall or router object through which incoming traffic is routed. Together with protocol, port, and bind address, this creates a complete data record that corresponds to a firewall allow rule.

### Description

Free text for additional information: firewall rule ID (e.g. "FW-2025-087"), configuration notes (e.g. "only reachable from management VLAN"), ticket numbers for the network share, or TLS configuration details.

## Technical Reference

| Property | Value |
|---|---|
| **Category Constant** | `C__CATG__NET_LISTENER` |
| **Type** | Global category |
| **Multi-Value** | Yes |
| **Assigned to** | Client, Server, Virtual Server |

### Fields (API Reference)

| Field | API Key | Type |
|---|---|---|
| **Layer 3/4 protocol** | `protocol` | Dialog+ (extensible selection) |
| **Layer 5-7 protocol** | `protocol_layer_5` | Dialog+ (extensible selection) |
| **(Bind) IP address** | `ip_address` | Dialog (selection) |
| **Port range (from)** | `port_from` | Integer |
| **Port range (to)** | `port_to` | Integer |
| **Opened by application** | `opened_by` | Dialog (selection) |
| **Gateway** | `gateway` | Object browser (link) |
| **Description** | `description` | Text field (multi-line) |

### API Examples

#### Create Entry

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "your-api-key",
        "object": 1042,
        "category": "C__CATG__NET_LISTENER",
        "data": {
            "protocol": "TCP",
            "protocol_layer_5": "HTTPS",
            "ip_address": "192.168.1.10",
            "port_from": 443,
            "port_to": 443,
            "opened_by": "Apache HTTP Server",
            "gateway": 1003,
            "description": "Productions-web server, TLS 1.3, Firewall-Regel FW-2025-087"
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
        "object": 1042,
        "category": "C__CATG__NET_LISTENER"
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
        "object": 1042,
        "category": "C__CATG__NET_LISTENER",
        "entry": 5,
        "data": {
            "protocol_layer_5": "HTTP/2",
            "description": "Upgrade auf HTTP/2, Change CR-2026-003, alte Firewall-Regel beibehalten"
        }
    },
    "id": 3
}
```
