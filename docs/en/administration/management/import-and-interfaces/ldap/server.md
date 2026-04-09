---
title: LDAP Server
description: "Set up your LDAP servers and test the connection."
icon:
status:
lang: en
---
# LDAP Server

!!! warning "Please create a complete backup before every change to an interface/import. If the result is not satisfactory, it can then be restored."

Under **Administration → Import and Interfaces → LDAP → Server**, you configure the connection to your LDAP or Active Directory server. Enter the hostname or IP address, the port, the base DN (Distinguished Name), and the credentials for the bind user. Via the **Test connection** button, you can check whether i-doit can successfully reach the LDAP server.

The LDAP connection is used for user authentication and automatic synchronization of persons and person groups to i-doit. You can set up multiple LDAP servers to connect different directory services or domains. Detailed documentation on LDAP configuration can be found under [LDAP Directory](../../../../user-authentication-and-management/ldap-directory/index.md).
