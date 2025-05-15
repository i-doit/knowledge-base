# LDAP via TLS

Bei einigen Benutzern gibt es leider Probleme bei der LDAP Verbindung via TLS daher teilen wir die bisherigen Lösungen hier.

Leider gibt es da keine generelle Lösung.

## Zuerst mal die häufigsten Ursachen:

*   Das Zertifikat wurde nicht oder nicht korrekt importiert.
*   In der LDAP Konfiguration wurde nicht der Hostname des LDAP Servers verwendet.
*   Der Hostname des LDAP Servers kann nicht aufgelöst werden.
*   Mit IPv4 klappte die Zertifikatsprüfung, mit IPv6 nicht. Nachdem IPv6 auf dem Linux deaktiviert wurde war das Problem gelöst.

## Bei LDAP gibt es seitens der Active Directory Domain Controller zunächst nicht viel zu beachten:

*   Es wird ein Zertifikat benötigt, das bestimmte Anforderungen erfüllt ([https://support.microsoft.com/en-us/help/321051/how-to-enable-ldap-over-ssl-with-a-third-party-certification-authority](https://support.microsoft.com/en-us/help/321051/how-to-enable-ldap-over-ssl-with-a-third-party-certification-authority))
*   Es sollte möglichst nur ein Zertifikat für diese Zwecke auf einem DC vorhanden sein (wird interessant, wenn bereits eins für Kerberos-Authentifizierung vorhanden ist - was unter Sicherheitsaspekten vermutlich überall der Fall ist
*   Eine verschlüsselte Verbindung kann gegen AD per LDAPS (TLS/SSL schon bei Verbindungsaufbau) oder STARTTLS (explizites Kommando zum Anfang der Verbindung) erfolgen
*   Es ist ein Gemenge von Client und Server-Einstellungen (Links weiter unten), wenn LDAP Channel Binding und LDAP Signing berücksichtigt wird; nicht jedes System (Linux) unterstützt out oft he box alle Optionen.

## Linkservice:

[https://support.microsoft.com/en-us/help/4520412/2020-ldap-channel-binding-and-ldap-signing-requirements-for-windows](https://support.microsoft.com/en-us/help/4520412/2020-ldap-channel-binding-and-ldap-signing-requirements-for-windows)

[https://support.microsoft.com/en-us/help/935834/how-to-enable-ldap-signing-in-windows-server](https://support.microsoft.com/en-us/help/935834/how-to-enable-ldap-signing-in-windows-server)

[https://techcommunity.microsoft.com/t5/core-infrastructure-and-security/ldap-channel-binding-and-ldap-signing-requirements-march-2020/ba-p/921536#](https://techcommunity.microsoft.com/t5/core-infrastructure-and-security/ldap-channel-binding-and-ldap-signing-requirements-march-2020/ba-p/921536#)

[https://support.microsoft.com/en-in/help/4034879/how-to-add-the-ldapenforcechannelbinding-registry-entry](https://support.microsoft.com/en-in/help/4034879/how-to-add-the-ldapenforcechannelbinding-registry-entry)

## Vielleicht könnten die Schritte die MS zur Problemlösung empfiehlt helfen?

*   [https://support.microsoft.com/en-us/help/938703/how-to-troubleshoot-ldap-over-ssl-connection-problems](https://support.microsoft.com/en-us/help/938703/how-to-troubleshoot-ldap-over-ssl-connection-problems)

## Wenn du das Problem gefunden hast würde es helfen die Information mit uns zu teilen. Gerne per E-Mail an [help@i-doit.com](mailto:help@i-doit.com)
