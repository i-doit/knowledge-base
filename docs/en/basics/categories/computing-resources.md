---
title: "Category: Computing resources"
description: Documentation of the Computing resources category in i-doit
icon:
status:
lang: en
---

# Category: Computing resources

The **Computing resources** category documents the compute resources assigned to a virtual machine or application: CPU frequency, RAM, disk capacity, and network bandwidth. It is a **single-value category** -- each object has exactly one entry that summarizes the allocated or configured resources.

!!! info "Not to be confused with physical hardware"
    The Computing resources category describes the **assigned** resources, not the physically installed hardware. The physical CPUs of a host are documented in the [CPU](cpu.md) category, the physical memory in the Memory category. Computing resources, on the other hand, represent what a VM or application **is actually allowed to use** -- i.e. what is configured in the hypervisor or orchestrator.

## Usage

Typical use cases:

- **Capacity planning in virtualized environments**: Compare the sum of assigned computing resources of all guest systems with the physical resources of the host. An ESXi host with 128 GB RAM on which VMs with a total of 192 GB are configured is overcommitted -- this is intentional but must be documented and monitored. In combination with the [Guest systems](guest-systems.md) category on the host object, a complete picture of resource distribution emerges.
- **VM sizing and rightsizing**: The Report Manager can identify VMs that have unusually high or low resources assigned. A VM with 32 GB RAM that consistently uses only 4 GB wastes capacity. The documented computing resources provide the planning basis for rightsizing projects.
- **Cost and license accounting**: In cloud and hosting environments, the assigned resources directly determine costs. A report listing all VMs of a tenant with their computing resources is the basis for internal charge-back.
- **Migration and change planning**: Before a VM migration, the category immediately shows which resources must be available on the target host. In combination with the [Virtual machine](virtual-machine--root.md) category, the current host assignment is also visible.



## Fields

### RAM

The amount of assigned memory. For virtual machines, this value corresponds to the RAM size configured in the hypervisor, e.g. `8` GB or `16384` MB. In combination with the **Memory unit** field, the complete specification results.

### Memory unit

The unit for the RAM field -- typically `GB` or `MB`. Make sure to remain consistent within your CMDB, as reports would otherwise compare apples to oranges.

### CPU frequency

The assigned or guaranteed processor frequency. For virtual machines, this is the CPU performance configured in the hypervisor, e.g. `2.4` GHz. Together with the **Frequency unit**, the complete value results.

### CPU frequency unit

The unit for the CPU frequency -- `MHz` or `GHz`.

### Disk capacity

The assigned disk storage, e.g. `100` GB for the system partition of a VM. This value represents the configured disk size, not the actually used storage space.

### Disk capacity unit

The unit for the disk field -- typically `GB` or `TB`.

### Network bandwidth

The assigned or guaranteed network bandwidth, e.g. `1` Gbit/s. In virtualized environments with quality-of-service rules, this field documents the reserved bandwidth per VM.

### Network bandwidth unit

The unit for the network bandwidth -- e.g. `Mbit/s` or `Gbit/s`.

### Description

Free text for additional details: reservations vs. limits, burst configurations, CPU shares, or notes on the resource policy.

## Technical reference

| Property | Value |
|---|---|
| **Category constant** | `C__CATG__COMPUTING_RESOURCES` |
| **Type** | Global category |
| **Multi-value** | No |
| **Assigned to** | Application, Operating system, Service, etc. |

### Fields (API reference)

| Field | API key | Type |
|---|---|---|
| **RAM** | `ram` | Decimal |
| **Memory unit** | `ram_unit` | Dialog (selection) |
| **CPU frequency** | `cpu` | Decimal |
| **CPU frequency unit** | `cpu_unit` | Dialog (selection) |
| **Disk capacity** | `disc_space` | Decimal |
| **Disk capacity unit** | `disc_space_unit` | Dialog (selection) |
| **Network bandwidth** | `network_bandwidth` | Decimal |
| **Network bandwidth unit** | `network_bandwidth_unit` | Dialog (selection) |
| **Description** | `description` | Text field (multi-line) |

### API examples

#### Create entry

```json
{
    "jsonrpc": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "apikey": "your-api-key",
        "object": 1042,
        "category": "C__CATG__COMPUTING_RESOURCES",
        "data": {
            "ram": 16,
            "ram_unit": 3,
            "cpu": 2.4,
            "cpu_unit": 3,
            "disc_space": 100,
            "disc_space_unit": 3,
            "network_bandwidth": 1,
            "network_bandwidth_unit": 2,
            "description": "VM sizing per capacity planning Q1/2026, 4 vCPUs at 2.4 GHz"
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
        "object": 1042,
        "category": "C__CATG__COMPUTING_RESOURCES"
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
        "object": 1042,
        "category": "C__CATG__COMPUTING_RESOURCES",
        "entry": 1,
        "data": {
            "ram": 32,
            "description": "Upgrade 2026-04: RAM increased from 16 to 32 GB due to load spikes."
        }
    },
    "id": 3
}
```
