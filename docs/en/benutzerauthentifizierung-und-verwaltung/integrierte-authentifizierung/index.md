---
title: Integrated Authentication
description: An overview of user authentication methods in i-doit, from local users via LDAP/AD to SSO and 2FA.
icon:
status:
lang: en
---

# Integrated Authentication

!!! warning "Backup notice"
    Please create a complete backup before making any changes to an interface or import. If the result is not satisfactory, the backup can be easily restored.

## Overview

i-doit offers a flexible selection of authentication methods tailored to different use cases and security requirements. This page gives you an overview of the available options from simple local login through connection to a central Active Directory to advanced methods such as Single Sign-On (SSO) or Two-Factor Authentication (2FA).

---

## Local Users

Local users are managed directly in i-doit as objects of type "Person" and are immediately ready for use. Their greatest strength is serving as an **independent emergency access** in case central authentication systems such as LDAP/AD are temporarily unavailable.

Further links:

* [Creating a Local User](lokalen-benutzer-anlegen.md)

---

## LDAP / Active Directory

i-doit supports seamless integration with directory services such as LDAP or Active Directory. This enables:

* **Central authentication** during web login via the existing corporate account.
* **Automated import** of users and groups (optionally via console).

Additional information:

* [Integrating LDAP Directory](../ldap-verzeichnis/index.md)

---

## API Access (JSON-RPC)

For **process automation** and connecting external tools, i-doit provides a powerful JSON-RPC API. A local user with a valid API key is required per tenant.

Additional information:

* [i-doit API Add-on](../../i-doit-add-ons/api/index.md)

---

## Advanced Authentication Methods

To further increase convenience and security, i-doit supports modern authentication methods:

* **Single Sign-On (SSO):** Reduces login barriers for users via SAML or Kerberos and increases convenience.
* **Two-Factor Authentication (2FA):** Adds a second security layer to the login and effectively protects accounts from unauthorized access.

Additional information:

* [SSO via Azure AD (SAML)](../sso-vergleich/saml/azure-ad-saml.md)
* [Two-Factor Authentication](../2fa/index.md)

---

## Conclusion

Local **users** enable immediate access and serve as emergency login. LDAP/AD provides central management for larger teams. The **API** is the key to automation and integration. **SSO** and **2FA** increase convenience and security in enterprise environments.
