---
title: Reset Password
description: "With this feature, users can reset their password on their own without having to contact an administrator."
icon:
status:
lang: en
---

# Reset Password

With this feature, users can reset their password on their own without having to contact an administrator.

For this to work, three prerequisites must be met:

1. **SMTP** is configured in the [Admin Center](admin-center.md)
2. **Reset password** is enabled in the [Settings for [Tenant Name]](./verwaltung/mandanten-name-verwaltung/einstellungen-mandanten-name.md)
3. A **password reset email address** is set for the user

## SMTP Configuration in the Admin Center

1. Log in to the Admin Center
2. Configure the **SMTP** section under **System settings**
3. Test the configuration using the **Check SMTP configuration** button

!!! note "When you update i-doit to v34, the SMTP configuration is migrated from the first tenant."

## Enabling Password Reset

1. Log in to the tenant
2. Navigate to **Administration** and open the [Settings for [Tenant Name]](verwaltung/mandanten-name-verwaltung/einstellungen-mandanten-name.md)
3. Expand the **Reset password** section
4. Select the value **Enabled** and click **Save**

!!! note "Once a tenant has enabled this feature, the **Forgot password?** button appears on the login page."

## Setting the Email Address

For i-doit to send the reset email, the field **Password reset email address** in the category **Persons → Login** must be set.

Users can enter this address themselves: **Administration → User Settings → Password and Login**.

!!! note "The fields **Password reset email address** in Administration and in the category **Persons → Login** are synchronized."

!!! warning "Grant permissions on the category **Persons → Login** to as few persons as necessary."

[![Password and Login](../assets/images/de/administration/passwort-zuruecksetzen/Passwort-und-Login.png)](../assets/images/de/administration/passwort-zuruecksetzen/Passwort-und-Login.png)

## Logging

A log entry is created when this feature is not enabled for an email address. Path and name: `.../i-doit/log/smtp_YYYY-MM-YY.log`.
