---
title: Two-Factor Authentication (2FA)
description: Two-factor authentication options for i-doit
icon: material/two-factor-authentication
status:
lang: en
---

!!! warning "Please create a complete backup before making any changes to an interface/import. If the result is not satisfactory, the backup can then be restored"

Two-factor authentication (2FA) protects your i-doit access with an additional security layer. In addition to the password, you need a time-based code from an authenticator app when logging in.

[![Two-Factor Authentication](../../assets/images/de/benutzerauthentifizierung-und-verwaltung/2fa.png)](../../assets/images/de/benutzerauthentifizierung-und-verwaltung/2fa.png)

## Integrated Two-Factor Authentication

### Enabling 2FA

To enable 2FA for your user:

1. Navigate to **User Settings → Password and Login**.
2. Click **Edit** in the **Two-Factor Authentication** section.
3. Click **Enable** and scan the displayed QR code with your authenticator app.
4. Enter the 6-digit code from the app to complete the setup.

From the next login, i-doit will request the 6-digit authenticator code in addition to the password.

### Disabling 2FA

To disable 2FA:

1. Navigate to **User Settings → Password and Login**.
2. Click **Edit** in the **Two-Factor Authentication** section.
3. Click **Disable** and confirm with the 6-digit code from your authenticator app.

!!! note "An administrator can also disable 2FA for individual users via the [Administration](../../administration/management/two-factor-authentication.md)."

## External Two-Factor Authentication

Alternatively, you can set up 2FA at the web server level using external modules:

-   [Google Authenticator Apache Module](https://code.google.com/archive/p/google-authenticator-apache-module/wikis/GoogleAuthenticatorApacheModule.wiki)
-   [Apache Guacamole TOTP](https://guacamole.apache.org/doc/gug/totp-auth.html)
