---
title: Import Matching Profile
description: "The object matching profiles were created to define criteria that are used when you want to establish a connection between an external object and..."
icon:
status:
lang: en
---
# Import Matching Profile

Under **Administration → Import and Interfaces → Import Matching Profile**, you define the criteria by which i-doit decides during import whether an external object corresponds to an existing i-doit object or whether a new object should be created.

The [object matching profiles](../../../daten-konsolidieren/objekt-identifizieren-bei-importen.md) were created to define criteria that are used when you want to establish a connection between an external object and an i-doit object via an interface. You can specify how many and which attributes must match for a successful comparison -- for example, hostname, MAC address, serial number, or a combination thereof.

A well-configured matching profile prevents duplicate objects in the CMDB and ensures that imported data is assigned to the correct existing objects. The profiles are used by various import interfaces such as JDisc, CSV import, and LDAP.
