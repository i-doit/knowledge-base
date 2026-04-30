---
title: LDAP via TLS
description: "Bei der LDAP-Verbindung über TLS treten immer wieder Probleme auf."
icon:
status:
lang: de
---
# LDAP via TLS

Bei der LDAP-Verbindung über TLS treten immer wieder Probleme auf. Dieser Artikel listet die häufigsten Ursachen und bisherigen Lösungsansätze. Eine universelle Lösung gibt es leider nicht.


[![ldap-via-tls.png](../../assets/images/de/administration/troubleshooting/ldap-via-tls.png)](../../assets/images/de/administration/troubleshooting/ldap-via-tls.png)

## Häufigste Ursachen

*   Das Zertifikat wurde nicht oder nicht korrekt importiert.
*   In der LDAP-Konfiguration wurde nicht der Hostname des LDAP-Servers verwendet.
*   Der Hostname des LDAP-Servers kann nicht aufgelöst werden.
*   Die Zertifikatsprüfung klappt mit IPv4, aber nicht mit IPv6. Nach dem Deaktivieren von IPv6 auf dem Linux-System war das Problem gelöst.

## Hinweise zu Active Directory Domain Controllern

*   Du benötigst ein Zertifikat, das bestimmte Anforderungen erfüllt ([Microsoft-Dokumentation](https://support.microsoft.com/en-us/help/321051/how-to-enable-ldap-over-ssl-with-a-third-party-certification-authority)).
*   Auf einem DC sollte möglichst nur ein Zertifikat für diesen Zweck vorhanden sein. Das wird relevant, wenn bereits ein Kerberos-Zertifikat existiert.
*   Eine verschlüsselte Verbindung gegen AD kann per **LDAPS** (TLS/SSL ab Verbindungsaufbau) oder **STARTTLS** (explizites Kommando zu Beginn der Verbindung) erfolgen.
*   Bei LDAP Channel Binding und LDAP Signing kommt ein Mix aus Client- und Server-Einstellungen ins Spiel. Nicht jedes Linux-System unterstützt alle Optionen out of the box.

## Weiterführende Links

*   [LDAP Channel Binding and Signing Requirements for Windows](https://support.microsoft.com/en-us/help/4520412/2020-ldap-channel-binding-and-ldap-signing-requirements-for-windows)
*   [How to enable LDAP signing in Windows Server](https://support.microsoft.com/en-us/help/935834/how-to-enable-ldap-signing-in-windows-server)
*   [LDAP Channel Binding and Signing Requirements (Tech Community)](https://techcommunity.microsoft.com/t5/core-infrastructure-and-security/ldap-channel-binding-and-ldap-signing-requirements-march-2020/ba-p/921536#)
*   [LdapEnforceChannelBinding Registry Entry](https://support.microsoft.com/en-in/help/4034879/how-to-add-the-ldapenforcechannelbinding-registry-entry)
*   [Troubleshoot LDAP over SSL connection problems](https://support.microsoft.com/en-us/help/938703/how-to-troubleshoot-ldap-over-ssl-connection-problems)

## Feedback

Wenn du das Problem gelöst hast, teile die Lösung gerne mit uns per E-Mail an [help@i-doit.com](mailto:help@i-doit.com).
