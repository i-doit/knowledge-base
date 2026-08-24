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

None inside i-doit, the SSO fallback is supported by default. However, make sure that at least one local i-doit user account with administrator privileges exists to ensure access in case of emergency.

Unless the i-doit URL is called directly with the parameter `?use-sso=1`, the login page is displayed, which offers both the SSO option and the option to log in with local i-doit user accounts.

!!! warning "Web server authentication can switch the fallback off"
    The fallback works only as long as the web server passes the request on to i-doit. A configuration that protects the entire VirtualHost, for example `Require valid-user` inside `<Location />`, authenticates every request beforehand: if the identity provider is unavailable, the login page, the Admin Center and the JSON-RPC API stay locked out too.

    Restrict the protection to the SSO entry point, meaning the call with `?use-sso=1` plus the callback path of your module, or provide a second VirtualHost without that protection that is reachable internally only. See [Google Authentication via OpenID](../openid/google-openid.md) for an example.

## See also

- [SSO Comparison](../index.md) — Comparison of SSO methods
- [User Authentication and Management](../../index.md) — User management overview
- [Administration](../../../administration/index.md) — Administration and configuration
