---
title: Admin-Center
description: Admin-Center
icon: admin-center
status:
lang: en
---

# Admin-Center

The Admin-Center is a separate administration interface integrated in i-doit. Here the settings shared by all tenants are configured.

!!! tip "Add-ons and subscriptions can also be managed via the [Add-on & Subscription Center](add-on-and-subscription-center.md)."

## Credentials

!!! attention "Attention!"
    If you can no longer log in, the password can only be changed via the [CLI!](../automation-and-integration/cli/index.md)

For the Admin-Center there are **separate credentials**. These can be specified during the [installation of i-doit](../installation/manual-installation/setup.md). If this step was skipped, then there is no access to the Admin-Center possible at first.

## Signing in

The Admin-Center can be accessed via the [login screen of i-doit](../basics/initial-login.md). The **Admin-Center** link is located beneath the login screen.

[![Signing In](../assets/images/en/system-administration/admin-center/1-ac.png)](../assets/images/en/system-administration/admin-center/1-ac.png)

As an alternative, the URL to the Admin-Center can be entered in the browser. For this purpose, `/admin/` is added to the link to i-doit:

<https://demo.i-doit.com/admin/>

[![Assign credentials](../assets/images/en/system-administration/admin-center/2-ac.png)](../assets/images/en/system-administration/admin-center/2-ac.png)

## Overview

In the **Home** section the currently installed version of _i-doit_ is displayed. In the **Actions** item the **i-doit environment info file** can be downloaded. This is a XML file with important system settings which can be very helpful for [troubleshooting](./troubleshooting/index.md).

[![Overview](../assets/images/en/system-administration/admin-center/3-ac.png)](../assets/images/en/system-administration/admin-center/3-ac.png)

## Tenants

Tenants are administrated in the **Tenants** section. This, however, is only relevant for a multi-tenant license of _i-doit_. New tenants can be generated using the **Add new tenant** button. Existing tenants can also be edited, (de)activated or deleted completely. A deleted tenant can only be restored via a [back up](../maintenance-and-operation/backup-and-recovery/index.md).

[![Tenants](../assets/images/en/system-administration/admin-center/4-ac.png)](../assets/images/en/system-administration/admin-center/4-ac.png)

## Licenses

[Licenses](../maintenance-and-operation/licensing.md) for i-doit can be installed via the **Licenses** section.

[![Licenses](../assets/images/en/system-administration/admin-center/5-ac.png)](../assets/images/en/system-administration/admin-center/5-ac.png)

## Add-ons

The [i-doit add-ons](../i-doit-add-ons/index.md) are managed in the **Add-ons** area. Each functionality of i-doit is encapsulated in a module. Many of them belong to the core (**core**) of i-doit, some of them are considered **extension** if they are already installed during installation, or **addon** if they can be installed additionally.

[![Add-ons](../assets/images/en/system-administration/admin-center/6-ac.png)](../assets/images/en/system-administration/admin-center/6-ac.png)

## Support

Click on the **Support** area to open the <help.i-doit.com></https.help.i-doit.com> in a new tab. There you can create tickets and view the processing status.

## System settings

Here you will find system related settings. Also here you will find the link to the [Expert settings](#expert-settings-system-related) on the right side.

### LDAP Debug settings

| Option     | Value     |
| ---------- | --------- |
| LDAP Debug | Yes or No |

Setting can also be toggled via [Expert settings](#expert-settings-system-related). It is called `ldap.debug`.

### Login

| Option                    | Value  |
| ------------------------- | ------ |
| Welcome message for login | String |

### SMTP

| Option         | Value            |
| -------------- | ---------------- |
| SMTP Host      | Hostname or URL  |
| SMTP Port      | Port             |
| SMTP Username  | Username         |
| SMTP Password  | Password         |
| SMTP TLS       | Yes or No        |
| Sender         | E-Mail address   |
| Name           | Name             |
| Timeout        | Value in seconds |
| SMTP Debug     | Yes or no        |
| Subject prefix | String           |

There is also a button that tests the SMTP connection.

### Proxy

| Option          | Value              |
| --------------- | ------------------ |
| Active          | Yes or No          |
| Host/IP-Address | Host or IP address |
| Port            | Port               |
| Username        | Username           |
| Password        | Password           |

### Security

| Option     | Value     |
| ---------- | --------- |
| CSRF-Token | Yes or No |

### Session

| Option          | Value            |
| --------------- | ---------------- |
| Session timeout | Value in seconds |

### Single Sign On

| Option          | Value                                                                                                          |
| --------------- | -------------------------------------------------------------------------------------------------------------- |
| Active          | Yes or No                                                                                                      |
| Default tenant  | Select Tenants name via dropdown  (order can be altered in [expert settings](#expert-settings-system-related)) |
| Use Domain Part | Yes or No                                                                                                      |

### System Parameters

| Option                 | Value              |
| ---------------------- | ------------------ |
| PHP Timezone           | Timezone           |
| File upload directory  | Path on Filesystem |
| Image upload directory | Path on Filesystem |

### User interface

| Option                            | Value                                          |
| --------------------------------- | ---------------------------------------------- |
| Wiki URL                          | URL                                            |
| Sortfunction for login tenantlist | Title<br>Custom (configurable in Admin-Center) |

## Config

In the **Config** tab three items can be configured:

-   Via **Admin-Center Credentials** the credentials to the Admin-Center can be changed.
-   Via **Security configuration** the encryption method can be changed. If available.
-   Via **Connection to i-doit System Database** the access to the system database can be changed.

[![Configuration](../assets/images/en/system-administration/admin-center/7-ac.png)](../assets/images/en/system-administration/admin-center/7-ac.png)

The settings can be changed in **emergency cases** in the file `src/config.inc.php` in the installation directory of i-doit. This file is created during the [installation of i-doit](../installation/manual-installation/setup.md). If an [update of i-doit](../maintenance-and-operation/update.md) is installed, a [backup](../maintenance-and-operation/backup-and-recovery/index.md) of the file is created automatically. The date of the update is specified in the file name.

## Expert settings (System related)

The Expert settings for the System are located in the Admin-Center. You can reach them via the [System settings](#system-settings)

| Key                                             | Value                                                                                                                                                             | Description             |
| ----------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------- |
| system.email.password                           | -                                                                                                                                                                 | system.email.port       |
| admin.active_license_distribution               | 1                                                                                                                                                                 |                         |
| api.authenticated-users-only                    | 1                                                                                                                                                                 |                         |
| api.status                                      | 1                                                                                                                                                                 |                         |
| api.validation                                  | 1                                                                                                                                                                 |                         |
| auth.active                                     | 1                                                                                                                                                                 |                         |
| barcode.type                                    | qr                                                                                                                                                                |                         |
| cmdb.connector.suffix-schema                    | -                                                                                                                                                                 |                         |
| cmdb.limits.connector-lists-assigned_connectors | 5                                                                                                                                                                 |                         |
| cmdb.limits.obj-browser.objects-in-viewmode     | 8                                                                                                                                                                 |                         |
| cmdb.limits.port-lists-layer2                   | 5                                                                                                                                                                 |                         |
| cmdb.limits.port-lists-vlans                    | 5                                                                                                                                                                 |                         |
| cmdb.limits.port-overview-default-vlan-only     | 0                                                                                                                                                                 |                         |
| cmdb.limits.port-overview-vlans                 | -                                                                                                                                                                 |                         |
| cmdb.object-browser.max-objects                 | -                                                                                                                                                                 |                         |
| cmdb.object.title.cable-prefix                  | KABEL_DEFAULT_                                                                                                                                                    |                         |
| cmdb.objtype.X.auto-inventory-no                | -                                                                                                                                                                 |                         |
| cmdb.quickpurge                                 | 0                                                                                                                                                                 |                         |
| cmdb.renew-properties                           | 1                                                                                                                                                                 |                         |
| cmdb.unique.hostname                            | 0                                                                                                                                                                 |                         |
| cmdb.unique.ip-address                          | 0                                                                                                                                                                 |                         |
| cmdb.unique.layer-2-net                         | 0                                                                                                                                                                 |                         |
| cmdb.unique.object-title                        | 0                                                                                                                                                                 |                         |
| debug_bar.storeDirectory                        | /tmp/idoit_debugbar                                                                                                                                               |                         |
| debug-bar.enabled                               | 1                                                                                                                                                                 |                         |
| email.template.maintenance                      | `Your maintenance contract: %s timed out.\n<strong>Contract information</strong>:\nStart: %s\nEnd: %s\nSupport-Url: %s\nContract-Number: %s\nCustomer-Number: %s` |                         |
| email.template.password                         | Ihr Passwort lautet:                                                                                                                                              |                         |
| gui.empty_value                                 | -                                                                                                                                                                 |                         |
| gui.empty_values                                | -                                                                                                                                                                 |                         |
| gui.forum-link                                  | 0                                                                                                                                                                 |                         |
| gui.leftcontent.width                           |                                                                                                                                                                   |                         |
| gui.wiki-url                                    |                                                                                                                                                                   |                         |
| gui.wysiwyg                                     | 1                                                                                                                                                                 |                         |
| gui.wysiwyg-all-controls                        | 1                                                                                                                                                                 |                         |
| import.object.keep-status                       | 0                                                                                                                                                                 |                         |
| ldap.debug                                      | 1                                                                                                                                                                 |                         |
| ldap.default-group                              |                                                                                                                                                                   |                         |
| logbook.changes                                 | 1                                                                                                                                                                 |                         |
| logging.cmdb.import                             | 1                                                                                                                                                                 |                         |
| login.tenantlist.sortby                         | isys_mandator__sort                                                                                                                                               |                         |
| maxlength.dialog_plus                           | 110                                                                                                                                                               |                         |
| mysql.unbuffered-queries                        | 0                                                                                                                                                                 |                         |
| proxy.active                                    | 0                                                                                                                                                                 |                         |
| proxy.host                                      | -                                                                                                                                                                 |                         |
| proxy.password                                  | -                                                                                                                                                                 |                         |
| proxy.port                                      | -                                                                                                                                                                 |                         |
| proxy.username                                  | -                                                                                                                                                                 |                         |
| qrcode.config                                   | -                                                                                                                                                                 |                         |
| reports.browser-url                             | -                                                                                                                                                                 |                         |
| security.passwort.minlength                     | -                                                                                                                                                                 |                         |
| session.sso.active                              | 0                                                                                                                                                                 |                         |
| session.sso.mandator-id                         | 1,2                                                                                                                                                               | Order for login via sso |
| session.time                                    | 3600                                                                                                                                                              |                         |
| system.devmode                                  | -                                                                                                                                                                 |                         |
| system.email.connection-timeout                 | -                                                                                                                                                                 |                         |
| system.email.from                               | <i-doit@example-domain.int>                                                                                                                                       |                         |
| system.email.name                               | -                                                                                                                                                                 |                         |
| system.email.smtp-auto-tls                      | 0                                                                                                                                                                 |                         |
| system.email.smtp-host                          | -                                                                                                                                                                 |                         |
| system.email.smtpdebug                          | 0                                                                                                                                                                 |                         |
| system.email.subject-prefix                     | [i-doit]                                                                                                                                                          |                         |
| system.email.username                           | -                                                                                                                                                                 |                         |
| system.last-change                              | 1689077222                                                                                                                                                        |                         |
| system.login.welcome-message                    | -                                                                                                                                                                 |                         |
| system.security.csrf                            | 1                                                                                                                                                                 |                         |
| system.show-proc-time                           | 0                                                                                                                                                                 |                         |
