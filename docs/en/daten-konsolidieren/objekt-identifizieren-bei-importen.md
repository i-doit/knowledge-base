---
title: Identifying Objects During Imports
description: During data import, i-doit identifies already existing objects based on specific attributes and updates them instead of creating duplicates.
icon:
status:
lang: en
---
# Identifying Objects During Imports

!!! warning "Please create a complete backup before making any changes to an interface/import. If the result is not satisfactory, the backup can then be restored"

During data import, i-doit identifies already existing objects based on specific attributes and updates them instead of creating duplicates. This mechanism is called **Object Matching** and is essential for maintaining data quality during recurring imports.

## Object Matching Profiles

Object matching profiles define the criteria by which i-doit recognizes whether an imported object already exists. You can configure these profiles under **Administration → Import and Interfaces → Import → Object Matching Profiles**.


## How It Works

When importing data, i-doit checks each object against the configured matching criteria. If a match is found, the existing object is updated. If no match is found, a new object is created.

The following matching criteria are available:

| Criterion | Description |
| --- | --- |
| **Object title** | The name of the object |
| **Serial number** | The serial number from the **Model** category |
| **MAC address** | The MAC address from the **Network → Port** category |
| **IP address** | The IP address from the **Host Address** category |
| **Hostname** | The hostname from the **Host Address** category |
| **Inventory number** | The inventory number from the **Accounting** category |
| **Object ID** | The i-doit internal object ID |
| **LDAP DN** | The Distinguished Name from LDAP |
| **SYSID** | The system ID |

## Matching Modes

Two matching modes are available:

- **Match all**: All configured criteria must match for an object to be recognized as existing.
- **Match any**: At least one of the configured criteria must match.

## Default Profile

i-doit provides a default profile that matches objects by title. This profile is used when no other profile is specified.

## Best Practices

- Use **serial numbers** or **MAC addresses** for hardware imports, as these are unique identifiers.
- Use **object title** matching for software or organizational objects.
- Always test imports with a small dataset first.
- Create a backup before each import.

## See also

- [CSV Data Import](csv-datenimport/index.md)
- [JDisc Discovery](jdisc/index.md)
