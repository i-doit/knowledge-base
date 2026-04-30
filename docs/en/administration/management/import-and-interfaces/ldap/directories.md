---
title: Directories
description: "Here the mapping attributes used for the LDAP interface can be specified."
icon:
status:
lang: en
---
# Directories

Here the mapping attributes used for the [LDAP interface](../../../../user-authentication-and-management/ldap-directory/index.md) can be specified.

You can reach this setting under **Administration → Import and Interfaces → LDAP → Directories**. On this page, you configure the connection to one or more LDAP directories (e.g., Active Directory or OpenLDAP). You specify server data such as hostname, port, base DN, and bind user. Additionally, you define the attribute mapping, i.e., which LDAP attributes (e.g., `sAMAccountName`, `mail`, `department`) should be mapped to which i-doit fields. This ensures that user data is correctly transferred to i-doit during LDAP sync. Use this configuration when you want to automatically import users and persons from your directory service.

[![ldap-directory](../../../../assets/images/de/administration/verwaltung/import-und-schnittstellen/ldap/3-ldap.png)](../../../../assets/images/de/administration/verwaltung/import-und-schnittstellen/ldap/3-ldap.png)
