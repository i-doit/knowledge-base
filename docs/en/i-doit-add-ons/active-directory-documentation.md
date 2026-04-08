---
title: Active Directory Documentation
description: "With the Active Directory Documentation add-on, you document Microsoft environments directly in i-doit."
icon:
status:
lang: en
---
# Active Directory Documentation

With the "Active Directory Documentation" add-on, you document Microsoft environments directly in i-doit. The add-on was created with the [Add-on Packager](./add-on-packager.md) and automatically includes all necessary object types and categories.

## installation and license

Install the add-on as usual via the [Admin Center](../administration/admin-center.md). It does not require a license but requires the pro variant of i-doit.

## Contents of the add-on

The add-on includes a collection of object types, categories, and Dialog+ entries. Two new object type groups are created: **Active Directory** and **Windows Systems**.

| Active Directory | Windows Systems |
| --- | --- |
| Domain | DHCP Server |
| Forest | DNS Server |
| Site | Windows Client |
| Certificate Authority | Windows Server |

The following sections describe the individual object types and their categories.

## Domain

With the "Domain" object type, you document the most common information of an Active Directory domain. The following categories are assigned:

| Category |
| --- |
| Domain Information |
| Domain Schema |
| Domain Structure |
| FSMO Roles |
| Trusted Domains |
| Assigned Domain Controllers |
| Assigned Partitions |
| Assigned Sites |

[![Domain](../assets/images/de/i-doit-add-ons/active-directory-documentation/1-add.png)](../assets/images/de/i-doit-add-ons/active-directory-documentation/1-add.png)

## Forest

With this object type, you document all relevant information about an Active Directory forest. The following categories are assigned:

| Category |
| --- |
| FSMO Roles |
| Structure Information |
| Trusted Structures |
| Assigned Catalog Servers |

[![Forest](../assets/images/de/i-doit-add-ons/active-directory-documentation/2-add.png)](../assets/images/de/i-doit-add-ons/active-directory-documentation/2-add.png)

## Certificate Authority

With this object type, you document both the issuing certificate authority and the individual issued certificates. The following categories are assigned:

| Category |
| --- |
| Issued Certificates |
| Certificate Authority |

[![Certificate Authority](../assets/images/de/i-doit-add-ons/active-directory-documentation/3-add.png)](../assets/images/de/i-doit-add-ons/active-directory-documentation/3-add.png)

## Windows Server

This object type is based on the standard "Server" object type but adds categories specifically designed for the relationship with Active Directory. The following categories are assigned:

| Category |
| --- |
| Domain Controller |
| FSMO Information |
| Global Catalog |
| LDAP |
| NTFS Shares |
| Server Roles |
| Windows Services |
| Windows Events |
| Windows Features |
| Windows Information |
| Windows Server Group |
| Windows Update |

[![Windows Server](../assets/images/de/i-doit-add-ons/active-directory-documentation/4-add.png)](../assets/images/de/i-doit-add-ons/active-directory-documentation/4-add.png)

## Windows Client

This object type is based on the standard "Client" object type and adds -- like the Windows Server -- AD-specific categories. The following categories are assigned:

| Category |
| --- |
| RDP Settings |
| Windows Information |

[![Windows Client](../assets/images/de/i-doit-add-ons/active-directory-documentation/5-add.png)](../assets/images/de/i-doit-add-ons/active-directory-documentation/5-add.png)

## DNS Server

This object type is based on "Windows Server" and enables separate documentation of DNS information. For even more detailed DNS documentation, the [DNS Documentation add-on](./dns-documentation.md) is also available. The following categories are assigned:

| Category |
| --- |
| DNS Zone Entries |
| Assigned DNS Servers |

[![DNS Server](../assets/images/de/i-doit-add-ons/active-directory-documentation/6-add.png)](../assets/images/de/i-doit-add-ons/active-directory-documentation/6-add.png)

## DHCP Server

This object type is based on "Windows Server" and enables separate documentation of DHCP information. The following categories are assigned:

| Category |
| --- |
| DHCP Scopes |
| Assigned DHCP Servers |

[![DHCP Server](../assets/images/de/i-doit-add-ons/active-directory-documentation/7-add.png)](../assets/images/de/i-doit-add-ons/active-directory-documentation/7-add.png)

## Changelog

| Version | Date | Changelog |
| --- | --- | --- |
| 0.1 | 26.01.2021 | Initial Release |
