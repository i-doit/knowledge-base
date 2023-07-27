# Admin Center

The admin center is a separate administration interface integrated in i-doit. Here the settings shared by all tenants are configured.

## Credentials

!!! attention "Attention!"

    Please do not edit the password if one is already assigned. This can only be changed via the [CLI!](../automation-and-integration/cli/index.md)

For the admin center there are ==separate credentials==. These can be specified during the [installation of i-doit](../installation/manual-installation/setup.md). If this step was skipped, then there is no access to the admin center possible at first.

## Signing in

The admin center can be accessed via the [login screen of i-doit](../basics/initial-login.md). The ==Admin-Center== link is located beneath the login screen.

[![Signing In](../assets/images/en/system-administration/admin-center/1-ac.png)](../assets/images/en/system-administration/admin-center/1-ac.png)

!!! info "Assign credentials"

    This link is only available if the credentials for the admin center have been configured (see above).

As an alternative, the URL to the admin center can be entered in the browser. For this purpose, /admin/ is added to the link to i-doit :

    https://i-doit.example.net/i-doit/admin/

[![Assign credentials](../assets/images/en/system-administration/admin-center/2-ac.png)](../assets/images/en/system-administration/admin-center/2-ac.png)

## Overview

In the ==Home== section the currently installed version of _i-doit_ is displayed. In the ==Actions== item the ==i-doit environment info file== can be downloaded. This is a XML file with important system settings which can be very helpful for [troubleshooting](./troubleshooting/index.md).

[![Overview](../assets/images/en/system-administration/admin-center/3-ac.png)](../assets/images/en/system-administration/admin-center/3-ac.png)

## Tenants

Tenants are administrated in the ==Tenants== section. This, however, is only relevant for a multi-tenant license of _i-doit_. New tenants can be generated using the ==Add new tenant== button. Existing tenants can also be edited, (de)activated or deleted completely. A deleted tenant can only be restored via a [back up](../maintenance-and-operation/backup-and-recovery/index.md).

[![Tenants](../assets/images/en/system-administration/admin-center/4-ac.png)](../assets/images/en/system-administration/admin-center/4-ac.png)

## Licenses

[Licenses for i-doit can be installed](../maintenance-and-operation/activate-license.md) via the ==Licenses== section.

[![Licenses](../assets/images/en/system-administration/admin-center/5-ac.png)](../assets/images/en/system-administration/admin-center/5-ac.png)

## Add-ons

In the ==Add-ons== section the [Add-ons](../i-doit-pro-add-ons/index.md) are managed. Each feature of _i-doit_ is encapsulated in a Add-on.

[![Add-ons](../assets/images/en/system-administration/admin-center/6-ac.png)](../assets/images/en/system-administration/admin-center/6-ac.png)

## Support

The [customer portal](../system-administration/customer-portal.md) is embedded in the ==Support== section. Download packages and licenses can be downloaded here among other things.

[![Support](../assets/images/en/system-administration/admin-center/7-ac.png)](../assets/images/en/system-administration/admin-center/7-ac.png)

The i-doit Support can be found here [help.i-doit.com](https://help.i-doit.com).

## System settings

Here you will find system related settings. Also here you will find the link to the [Expert settings](#expert-settings-system-related) on the right side.

### Login

| Option                    | Value  |
| ------------------------- | ------ |
| Welcome message for login | String |

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

| Option          | Value                             |
| --------------- | --------------------------------- |
| Active          | Yes or No                         |
| Default tenant  | Selected Tenant name via dropdown |
| Use Domain Part | Yes or No                         |

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

In the ==Config== tab three items can be configured:

- Via ==Admin-Center Credentials== the credentials to the admin center can be changed.
- Via ==Security configuration== the encryption method can be changed.
- Via ==Connection to i-doit System Database== the access to the system database can be changed.

[![Configuration](../assets/images/en/system-administration/admin-center/8-ac.png)](../assets/images/en/system-administration/admin-center/8-ac.png)

The settings will be save in `i-doit/src/config.inc.php` file. This file is created during the [installation process of i-doit](../installation/manual-installation/setup.md). If an [update of i-doit](../maintenance-and-operation/update.md) is installed, a backup of the file is created automatically. The date of the update is stated in the file name.

## Expert settings (System related)

The Expert settings for the System are located in the Admin Center. You can reach them via the [System settings](#system-settings)

| Key                                             | Value                                                                                                                                               | Description       |
| ----------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------- |
| admin.active_license_distribution               | 1                                                                                                                                                    |                   |
| api.authenticated-users-only                    | 1                                                                                                                                                    |                   |
| api.status                                      | 1                                                                                                                                                   |                   |
| api.validation                                  | 1                                                                                                                                                   |                   |
| auth.active                                     | 1                                                                                                                                                   |                   |
| barcode.type                                    | qr                                                                                                                                                  |                   |
| cmdb.connector.suffix-schema                    | -                                                                                                                                                    |                   |
| cmdb.limits.connector-lists-assigned_connectors | 5                                                                                                                                                   |                   |
| cmdb.limits.obj-browser.objects-in-viewmode     | 8                                                                                                                                                   |                   |
| cmdb.limits.port-lists-layer2                   | 5                                                                                                                                                   |                   |
| cmdb.limits.port-lists-vlans                    | 5                                                                                                                                                   |                   |
| cmdb.limits.port-overview-default-vlan-only     | 0                                                                                                                                                   |                   |
| cmdb.limits.port-overview-vlans                 | -                                                                                                                                                    |                   |
| cmdb.object-browser.max-objects                 | -                                                                                                                                                    |                   |
| cmdb.object.title.cable-prefix                  | KABEL_DEFAULT_                                                                                                                                      |                   |
| cmdb.objtype.X.auto-inventory-no                | -                                                                                                                                                    |                   |
| cmdb.quickpurge                                 | 0                                                                                                                                                   |                   |
| cmdb.renew-properties                           | 1                                                                                                                                                   |                   |
| cmdb.unique.hostname                            | 0                                                                                                                                                   |                   |
| cmdb.unique.ip-address                          | 0                                                                                                                                                   |                   |
| cmdb.unique.layer-2-net                         | 0                                                                                                                                                   |                   |
| cmdb.unique.object-title                        | 0                                                                                                                                                   |                   |
| debug_bar.storeDirectory                        | /tmp/idoit_debugbar                                                                                                                                 |                   |
| debug-bar.enabled                               | 1                                                                                                                                                   |                   |
| email.template.maintenance                      | Your maintenance contract: %s timed out.\n<strong>Contract information</strong>:\nStart: %s\nEnd: %s\nSupport-Url: %s\nContract-Number: %s\nCustomer-Number: %s |                   |
| email.template.password                         | Ihr Passwort lautet:                                                                                                                                |                   |
| gui.empty_value                                 | -                                                                                                                                                   |                   |
| gui.empty_values                                | -                                                                                                                                                   |                   |
| gui.forum-link                                  | 0                                                                                                                                                   |                   |
| gui.leftcontent.width                           |                                                                                                                                                     |                   |
| gui.wiki-url                                    |                                                                                                                                                     |                   |
| gui.wysiwyg                                     | 1                                                                                                                                                   |                   |
| gui.wysiwyg-all-controls                        | 1                                                                                                                                                   |                   |
| import.object.keep-status                       | 0                                                                                                                                                   |                   |
| ldap.debug                                      | 1                                                                                                                                                   |                   |
| ldap.default-group                              |                                                                                                                                                     |                   |
| logbook.changes                                 | 1                                                                                                                                                   |                   |
| logging.cmdb.import                             | 1                                                                                                                                                   |                   |
| login.tenantlist.sortby                         | isys_mandator__sort                                                                                                                                 |                   |
| maxlength.dialog_plus                           | 110                                                                                                                                                 |                   |
| mysql.unbuffered-queries                        | 0                                                                                                                                                   |                   |
| proxy.active                                    | 0                                                                                                                                                   |                   |
| proxy.host                                      | -                                                                                                                                                    |                   |
| proxy.password                                  | -                                                                                                                                                    |                   |
| proxy.port                                      | -                                                                                                                                                    |                   |
| proxy.username                                  | -                                                                                                                                                    |                   |
| qrcode.config                                   | -                                                                                                                                                    |                   |
| reports.browser-url                             | -                                                                                                                                                    |                   |
| security.passwort.minlength                     | -                                                                                                                                                    |                   |
| session.sso.active                              | 0                                                                                                                                                   |                   |
| session.sso.mandator-id                         | 1                                                                                                                                                   |                   |
| session.time                                    | 3600                                                                                                                                                |                   |
| system.devmode                                  | -                                                                                                                                                    |                   |
| system.email.connection-timeout                 | -                                                                                                                                                    |                   |
| system.email.from                               | i-doit@example-domain.int                                                                                                                           |                   |
| system.email.name                               | -                                                                                                                                                    |                   |
| system.email.password                           | -                                                                                                                                                    | system.email.port |
| system.email.smtp-auto-tls                      | 0                                                                                                                                                   |                   |
| system.email.smtp-host                          | -                                                                                                                                                    |                   |
| system.email.smtpdebug                          | 0                                                                                                                                                   |                   |
| system.email.subject-prefix                     | [i-doit]                                                                                                                                            |                   |
| system.email.username                           | -                                                                                                                                                    |                   |
| system.last-change                              | 1689077222                                                                                                                                          |                   |
| system.login.welcome-message                    | -                                                                                                                                                    |                   |
| system.security.csrf                            | 1                                                                                                                                                   |                   |
| system.show-proc-time                           | 0                                                                                                                                                   |                   |
