Some users unfortunately have problems with LDAP connection via TLS so we share the previous solutions here.  
Unfortunately there is no general solution.

First of all, the most common causes:
=====================================

*   The certificate was not imported or not imported correctly.
*   The LDAP server host name was not used in the LDAP configuration.
*   The hostname of the LDAP server cannot be resolved.
*   With IPv4 the certificate check worked, with IPv6 it did not. After disabling IPv6 on Linux the problem was solved.

With LDAP, there is not much to consider on the part of Active Directory Domain Controllers at first:
=====================================================================================================

*   A certificate is needed that meets certain requirements ([https://support.microsoft.com/en-us/help/321051/how-to-enable-ldap-over-ssl-with-a-third-party-certification-authority](https://support.microsoft.com/en-us/help/321051/how-to-enable-ldap-over-ssl-with-a-third-party-certification-authority)).
*   If possible there should be only one certificate for this purpose on a DC (becomes interesting if there is already one for Kerberos authentication - which is probably the case everywhere from a security point of view).
*   An encrypted connection can be made against AD via LDAPS (TLS/SSL already at connection establishment) or STARTTLS (explicit command at the beginning of the connection)
*   It is a mixture of client and server settings (links below) when LDAP Channel Binding and LDAP Signing is considered; not every system (Linux) supports out oft he box all options.

Linkservice:
============

[https://support.microsoft.com/en-us/help/4520412/2020-ldap-channel-binding-and-ldap-signing-requirements-for-windows](https://support.microsoft.com/en-us/help/4520412/2020-ldap-channel-binding-and-ldap-signing-requirements-for-windows)

[https://support.microsoft.com/en-us/help/935834/how-to-enable-ldap-signing-in-windows-server](https://support.microsoft.com/en-us/help/935834/how-to-enable-ldap-signing-in-windows-server)

[https://techcommunity.microsoft.com/t5/core-infrastructure-and-security/ldap-channel-binding-and-ldap-signing-requirements-march-2020/ba-p/921536#](https://techcommunity.microsoft.com/t5/core-infrastructure-and-security/ldap-channel-binding-and-ldap-signing-requirements-march-2020/ba-p/921536#)

[https://support.microsoft.com/en-in/help/4034879/how-to-add-the-ldapenforcechannelbinding-registry-entry](https://support.microsoft.com/en-in/help/4034879/how-to-add-the-ldapenforcechannelbinding-registry-entry)

Maybe the steps MS recommends to solve the problem could help?
==============================================================

*   [https://support.microsoft.com/en-us/help/938703/how-to-troubleshoot-ldap-over-ssl-connection-problems](https://support.microsoft.com/en-us/help/938703/how-to-troubleshoot-ldap-over-ssl-connection-problems)

If you found the problem it would help to share the information with us. Feel free to email us at [help@i-doit.com](mailto:help@i-doit.com)
===========================================================================================================================================