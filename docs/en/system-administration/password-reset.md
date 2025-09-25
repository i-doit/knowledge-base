---
title: Password reset
description: Password reset
icon:
status:
lang: en
---

# Password reset

The user should be able to reset their login password themselves without having to contact an administrator. To do this, **SMTP** must be configured in the [Admin-Center](./admin-center.md) and **Password reset option** must be activated in the [Settings for [Tenant-name]](./administration/tenant-management/settings-for-tenant.md) in the client. In addition, an **e-mail address** must be entered for the respective user in the **E-mail address for password reset** field.

## SMTP configuration in the Admin-Center

First log into the Admin-Center. Under **System settings** you must configure the **SMTP** section. Then test the configuration using the **Check SMTP configuration** button.

!!! note "When i-doit is updated to v34, the SMTP configuration is taken from the first tenant"

## Activate password reset

First log in to a tenant. There, navigate to the administration and under [Settings for [Tenant name]](./administration/tenant-management/settings-for-tenant.md#password-reset-option) expand the **Password reset option** section. To activate the function, select the value **Activated** and click on the **Save** button.

!!! note "As soon as a client has activated the function, the **Forgot password?** button is displayed on the login page"

## Set e-mail address

In order for an e-mail to be sent, the **E-mail address for password reset** field must be set in the **Person -> Login** category. Users can set a **Reset email address for password** themselves by clicking on **Password and login** in the **Administration** in the **User settings**.

!!! note "The **Reset email address for password** fields in **Administration** and in the **People -> Login** category are synchronized"

[![Passwort und Login](../assets/images/en/system-administration/password-reset/Password-und-Login.png)](../assets/images/en/system-administration/password-reset/Password-und-Login.png)

## Logging

A log entry is created if this function is not activated for an e-mail address. Path and name: `.../i-doit/log/smtp_YYYY-MM-YY.log`.
