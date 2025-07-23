---
title: Integrated Authentication
description: An overview of user authentication methods in i-doit, from local users and LDAP/AD to SSO and 2FA.
icon:
status:
lang: en
---

# Integrated Authentication

!!! warning "Backup Notice"
    Please create a full backup before making any changes to an interface or an import. If the result is not satisfactory, it can be easily restored.

## Overview

i-doit offers a flexible selection of authentication methods tailored to different use cases and security requirements. This page gives you an overview of the available options from simple local login and connection to a central Active Directory to advanced methods like Single Sign-On (SSO) or Two-Factor Authentication (2FA).

---

## Local Users

Local users are managed directly in i-doit as objects of the "Person" type and are ready for immediate use. Their greatest strength is functioning as an **independent emergency access**, should central authentication systems like LDAP/AD become unavailable.

Further reading:

* [Create a local user](creating-a-local-user.md)

---

## LDAP / Active Directory

i-doit supports seamless integration with directory services like LDAP or Active Directory. This enables:

* **Centralized authentication** for web login using existing company accounts.
* **Automated import** of users and groups (optionally via the console).

More information:

* [Integrate LDAP directory](../ldap-directory/index.md)

---

## API Access (JSON-RPC)

For **automating processes** and connecting external tools, i-doit offers a powerful JSON-RPC API. Using it requires a local user with a valid API key for each tenant.

More information:

* [i-doit API Add-on](../../i-doit-add-ons/api/index.md)

---

## Advanced Authentication Methods

To further enhance convenience and security, i-doit supports modern authentication methods:

* **Single Sign-On (SSO):** Reduces login hurdles for users and increases convenience via SAML or Kerberos.
* **Two-Factor Authentication (2FA):** Adds a second layer of security to the login, effectively protecting accounts from unauthorized access.

More information:

* [SSO via Azure AD (SAML)](../sso-comparison/saml/azure-ad-saml.md)
* [2-Factor Authentication](../2fa/index.md)

---

## Conclusion

Local **users** provide immediate access and serve as an emergency login. LDAP/AD offers central management for larger teams. The **API** is the key to automation and integration. **SSO** and **2FA** increase convenience and security in enterprise environments.
