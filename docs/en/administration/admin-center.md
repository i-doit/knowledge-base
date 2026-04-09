---
title: Admin Center
description: The Admin Center is the central, cross-tenant administration interface of i-doit.
icon: admin-center
status:
lang: en
---

# Admin Center

The Admin Center is the central, cross-tenant administration interface of i-doit. Here you configure system-wide settings, manage tenants and licenses, and install add-ons.

!!! tip "Add-ons and subscriptions can now also be managed via the [Add-on & Subscription Center](add-on-and-subscription-center.md)."

## Credentials and Login

The Admin Center uses **separate credentials** — not your regular i-doit login. You set them during the [installation of i-doit](../installation/manual-installation/setup.md).

You can reach the Admin Center in two ways:

1. Via the **Admin Center** link below the i-doit login form
2. Directly via the URL `https://your-instance/admin/`

[![Login](../assets/images/de/administration/admin-center/1-ac.png)](../assets/images/de/administration/admin-center/1-ac.png)

!!! warning "Forgot your password?"
    If you can no longer log in, the password can only be reset via the [i-doit console utility](../automation-and-integration/cli/index.md).

!!! info "English interface"
    The Admin Center interface is entirely in English.

## Overview (Home)

Shows the installed i-doit version. Under **Actions** you can download the **i-doit environment info file** — an XML file with system settings that is very helpful for [troubleshooting](troubleshooting/index.md).

[![Overview](../assets/images/de/administration/admin-center/3-ac.png)](../assets/images/de/administration/admin-center/3-ac.png)

## Tenants

Here you manage tenants — relevant for multi-tenant licenses. You can create new tenants, (de)activate existing ones, or delete them.

!!! warning "A deleted tenant can only be restored from a [backup](../maintenance-and-operation/backup-and-restore/index.md)."

[![Tenants](../assets/images/de/administration/admin-center/4-ac.png)](../assets/images/de/administration/admin-center/4-ac.png)

## Licenses

Here you import your [license](../maintenance-and-operation/licensing.md).

[![Licenses](../assets/images/de/administration/admin-center/5-ac.png)](../assets/images/de/administration/admin-center/5-ac.png)

## Add-ons

Here you install and manage [i-doit add-ons](../i-doit-add-ons/index.md).

[![Add-ons](../assets/images/de/administration/admin-center/6-ac.png)](../assets/images/de/administration/admin-center/6-ac.png)

## System settings

[![Admin Center System Settings](../assets/images/de/administration/admin-center-system-settings.png)](../assets/images/de/administration/admin-center-system-settings.png)

!!! info "Since i-doit v25"
    The system-wide settings have been moved to the Admin Center since version 25. Tenant-specific settings can still be found under [Administration → Expert Settings](management/tenant-management/expert-settings.md).

### Login

| Setting | Description |
|---------|-------------|
| **Welcome message for login** | Text displayed on the login page — e.g., "Maintenance window: Sunday 02:00-06:00" or notes for new users. HTML is supported. |

### Proxy

If your i-doit installation does not have direct internet access (e.g., for license verification or the Add-on & Subscription Center), configure the HTTP proxy here.

| Setting | Description |
|---------|-------------|
| **Active** | Enable/disable proxy |
| **Host/IP-Address** | Hostname or IP of the proxy server |
| **Port** | Proxy port (default: 3128 for Squid) |
| **Username/Password** | If the proxy requires authentication |

### SMTP

Email configuration for [notifications](../evaluation/notifications.md), password reset emails, and maintenance contract reminders. Without a correct SMTP configuration, **no emails** will be sent.

| Setting | Description |
|---------|-------------|
| **SMTP Host** | Hostname of the mail server, e.g., `smtp.company.com` |
| **SMTP Port** | Port — `587` for STARTTLS (recommended), `465` for SSL, `25` for unencrypted |
| **SMTP Username/Password** | Credentials for the mail server |
| **SMTP TLS** | Enable TLS encryption — **always enable** if your mail server supports it |
| **Sender** | Sender address, e.g., `idoit@company.com`. Must be accepted by the mail server. |
| **Name** | Display name of the sender, e.g., `i-doit CMDB` |
| **Timeout** | Connection timeout in seconds (default: 60) |
| **SMTP Debug** | When set to `Yes`, SMTP dialogs are written to the log — helpful when emails are not being delivered |
| **Subject prefix** | Prepended to every subject line, e.g., `[i-doit]`. Helps with filtering in Outlook/Thunderbird. |

!!! tip "Test connection"
    Below the SMTP configuration there is a **Test** button. Use it after every change to ensure that emails are actually being sent.

### Security

| Setting | Description |
|---------|-------------|
| **CSRF-Token** | Protection against Cross-Site Request Forgery. When set to `Yes` (default), a token is verified with every form submission. **Do not disable** — unless an add-on has compatibility issues. |

### Session

| Setting | Description |
|---------|-------------|
| **Session timeout** | After how many seconds of inactivity the user is automatically logged out. Default: `3600` (1 hour). In security-critical environments, set to `1800` (30 minutes) or less. |

### Single Sign On

| Setting | Description |
|---------|-------------|
| **Active** | Enable/disable SSO. Prerequisite: an [SSO method](../user-authentication-and-management/sso-comparison/index.md) must be configured. |
| **Default tenant** | Which tenant is automatically selected during SSO login |
| **Use Domain Part** | When set to `Yes`, the domain part of the username (e.g., `COMPANY\lfischer`) is used for tenant assignment |

### System parameters

| Setting | Description |
|---------|-------------|
| **PHP Timezone** | Timezone for date displays, e.g., `Europe/Berlin`. Must match the PHP timezone of the server. |
| **File upload directory** | Directory for uploaded files. Default: `upload/files/` relative to the i-doit installation directory. |
| **Image upload directory** | Directory for uploaded images (object images, floorplan images). |

### User interface

| Setting | Description |
|---------|-------------|
| **Wiki URL** | URL to an external wiki. Displayed as a link in the interface. |
| **Sortfunction for login tenantlist** | Sorting of the tenant list on the login page: by title or custom. |

## Expert settings (system-wide)

Via the **Expert settings** link at the top right of the System Settings page, you can access the system-wide key/value expert settings. Here are the most important ones:

### Permission system

| Key | Default | What happens when you change it? |
|-----|---------|----------------------------------|
| `auth.active` | `1` | When set to `0`, the **entire permission system is disabled** — every user can see and edit everything. Use only in emergencies, e.g., when you have locked yourself out due to a faulty permission configuration. |
| `api.authenticated-users-only` | `1` | When set to `1`, API requests must be authenticated with valid user credentials (Basic Auth) — not just with the API key. **Recommended** for production environments. |

### CMDB behavior

| Key | Default | What happens when you change it? |
|-----|---------|----------------------------------|
| `cmdb.quickpurge` | `0` | When set to `1`, objects can be **directly and irrevocably deleted** — without Archive → Delete → Purge. **Dangerous in production.** |
| `cmdb.unique.hostname` | `0` | When set to `1`, duplicate hostnames are prevented. |
| `cmdb.unique.ip-address` | `0` | When set to `1`, duplicate IP addresses are prevented. **Recommended.** |
| `cmdb.unique.object-title` | `0` | When set to `1`, object names must be unique. |
| `cmdb.unique.layer-2-net` | `0` | When set to `1`, duplicate VLAN IDs are prevented. |
| `cmdb.limits.obj-browser.objects-in-viewmode` | `8` | Maximum number of objects in the object browser. |
| `cmdb.limits.port-lists-vlans` | `5` | How many VLANs are displayed in the port list. |
| `cmdb.object.title.cable-prefix` | `KABEL_DEFAULT_` | Prefix for automatically generated cable object names. |
| `cmdb.objtype.X.auto-inventory-no` | (empty) | Pattern for automatic inventory numbers. Replace `X` with the object type ID. Example: `SRV-%COUNTER%` → `SRV-001`. |

### Security and passwords

| Key | Default | What happens when you change it? |
|-----|---------|----------------------------------|
| `security.passwort.minlength` | (empty) | Minimum length for user passwords. Set this value to at least **8**, preferably **12**, in production environments. |

### Logging and debug

| Key | Default | What happens when you change it? |
|-----|---------|----------------------------------|
| `ldap.debug` | `1` | LDAP debug logging. Set to `0` to disable — saves log volume in production. |
| `logbook.changes` | `1` | When set to `0`, changes are no longer recorded in the logbook. **Do not disable** — you will lose traceability. |
| `logging.cmdb.import` | `1` | Logging of import operations (CSV, JDisc). |
| `debug-bar.enabled` | `1` | Display PHP Debug Bar. Set to `0` in production. |

### GUI and email templates

| Key | Default | Description |
|-----|---------|-------------|
| `gui.empty_value` | (empty) | Display of empty fields in the UI, e.g., `—` or `n/a`. |
| `gui.wysiwyg` | `1` | Enable WYSIWYG editor for description fields. |
| `email.template.maintenance` | (template) | Email template for maintenance contract notifications. |
| `email.template.password` | `Your password is:` | Email text when sending passwords. |
| `maxlength.dialog_plus` | `110` | Maximum character length for Dialog+ entries. |

## Configuration (Config)

Here you change three basic settings:

- **Admin Center Credentials** — Change Admin Center credentials
- **Security configuration** — Select encryption method
- **Connection to i-doit System Database** — Change database credentials

[![Configuration](../assets/images/de/administration/admin-center/7-ac.png)](../assets/images/de/administration/admin-center/7-ac.png)

!!! tip "Emergency access"
    In an emergency, you can change the database settings directly in the file `src/config.inc.php` in the installation directory. During an [update](../maintenance-and-operation/i-doit-update.md), i-doit automatically creates a backup of this file.
