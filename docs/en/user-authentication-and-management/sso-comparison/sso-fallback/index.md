---
title: SSO Fallback to Builtin
description: "The SSO fallback allows users to still log in with a local i-doit user account even when the central authentication is unavailable."
icon:
status:
lang: en
---
# SSO Fallback to Builtin

!!! warning "Please create a complete backup before making any changes to an interface/import. If the result is not satisfactory, the backup can then be restored"

## What does "SSO Fallback" mean in i-doit?

The SSO fallback allows users to still log in with a local i-doit user account even when the central authentication via SSO (e.g., LDAP, Kerberos, SAML) fails. This is especially important for emergencies or maintenance work.

## What configuration is required?

None, i-doit supports SSO fallback by default. However, make sure that at least one local i-doit user account with administrator privileges exists to ensure access in case of emergency.

Unless the i-doit URL is called directly with the parameter `?use-sso=1`, the login page is displayed, which offers both the SSO option and the option to log in with local i-doit user accounts.

## See also

- [SSO Comparison](../index.md) — Comparison of SSO methods
- [User Authentication and Management](../../index.md) — User management overview
- [Administration](../../../administration/index.md) — Administration and configuration
