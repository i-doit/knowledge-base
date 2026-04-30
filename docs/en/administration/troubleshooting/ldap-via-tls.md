---
title: LDAP via TLS
description: "LDAP connections via TLS frequently cause problems."
icon:
status:
lang: en
---
# LDAP via TLS

LDAP connections via TLS frequently cause problems. This article lists the most common causes and previous solutions. Unfortunately, there is no universal solution.


[![ldap-via-tls.png](../../assets/images/de/administration/troubleshooting/ldap-via-tls.png)](../../assets/images/de/administration/troubleshooting/ldap-via-tls.png)

## Most common causes

*   The certificate was not imported or was not imported correctly.
*   The hostname of the LDAP server was not used in the LDAP configuration.
*   The hostname of the LDAP server cannot be resolved.
*   Certificate verification works with IPv4 but not with IPv6. After disabling IPv6 on the Linux system, the problem was resolved.

## Notes on Active Directory Domain Controllers

*   You need a certificate that meets certain requirements ([Microsoft documentation](https://support.microsoft.com/en-us/help/321051/how-to-enable-ldap-over-ssl-with-a-third-party-certification-authority)).
*   On a DC, there should ideally be only one certificate for this purpose. This becomes relevant when a Kerberos certificate already exists.
*   An encrypted connection to AD can be established via **LDAPS** (TLS/SSL from the start of the connection) or **STARTTLS** (explicit command at the beginning of the connection).
*   With LDAP Channel Binding and LDAP Signing, a mix of client and server settings comes into play. Not every Linux system supports all options out of the box.

## Further links

*   [LDAP Channel Binding and Signing Requirements for Windows](https://support.microsoft.com/en-us/help/4520412/2020-ldap-channel-binding-and-ldap-signing-requirements-for-windows)
*   [How to enable LDAP signing in Windows Server](https://support.microsoft.com/en-us/help/935834/how-to-enable-ldap-signing-in-windows-server)
*   [LDAP Channel Binding and Signing Requirements (Tech Community)](https://techcommunity.microsoft.com/t5/core-infrastructure-and-security/ldap-channel-binding-and-ldap-signing-requirements-march-2020/ba-p/921536#)
*   [LdapEnforceChannelBinding Registry Entry](https://support.microsoft.com/en-in/help/4034879/how-to-add-the-ldapenforcechannelbinding-registry-entry)
*   [Troubleshoot LDAP over SSL connection problems](https://support.microsoft.com/en-us/help/938703/how-to-troubleshoot-ldap-over-ssl-connection-problems)

## Feedback

If you have solved the problem, please share the solution with us via email at [help@i-doit.com](mailto:help@i-doit.com).
