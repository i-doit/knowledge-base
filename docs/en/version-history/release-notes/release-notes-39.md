---
title: Release Notes 39
description: "We are happy to introduce i-doit 39, with a strong focus on security, new cloud and Kubernetes documentation and quality."
icon:
status:
lang: en
---
# Release Notes 39
<!-- cSpell:disable -->
We are happy to introduce i-doit 39, with a strong focus on **security** and **quality**.

With this version we have hardened i-doit in many places, for example with brute-force protection for the login, stricter checks for file uploads and export paths and server-side authorization checks for imports and add-on entry points. You can now also document **cloud resources** and **Kubernetes** in i-doit with new categories and object types. In addition, this version contains 46 fixes of known issues.

A detailed list of all changes and improvements is available in the [Changelog](../changelogs/index.md).

## New Add-on: i-doit MCP

With i-doit 39 we release the new add-on **i-doit MCP**. It connects i-doit to AI assistants via the Model Context Protocol (MCP), so you can ask questions about your CMDB in plain language. By default the assistant can only read. If you want it to maintain your documentation, an administrator can allow write access per tenant. Every request runs with the i-doit permissions of the token owner and is recorded in a request log. A guided page helps you connect your AI client in three steps.

!!! info "Requirements for i-doit MCP"
    - i-doit 39 or newer
    - [API add-on](../../i-doit-add-ons/api/index.md), installed and active
    - **Activate JSON-RPC API** set to **Yes** under **Administration → Add-ons → JSON-RPC API**
    - An AI client that supports MCP over HTTP

    Details are described in [i-doit MCP](../../i-doit-add-ons/i-doit-mcp/index.md#requirements).

## Documents 1.12: Create Templates with AI

With version 1.12 the add-on **Documents** creates document templates with AI. You describe the topic and the purpose of the document, the AI suggests a complete structure with chapters, texts and placeholders. You review the draft and apply it as a new template, which you then edit as usual. Chapters created or changed with AI are marked as **AI generated** or **AI assisted**, and exported documents show an AI notice. Details are described in [AI functions](../../i-doit-add-ons/documents/ai-functions.md).

## Highlights in This Release

- New add-on **i-doit MCP**: use your CMDB with **AI assistants**
- **Documents 1.12**: create document templates with **AI**
- **Security**: rate limiting and brute-force protection for the login, plus 7 further security fixes
- New category [**Cloud**](../../basics/categories/cloud.md) (provider, account, region, state) and new object type [**Cloud Storage**](../../basics/object-types/cloud-storage.md)
- New category [**Kubernetes**](../../basics/categories/kubernetes.md) (namespace, workload, kind) and new object types [**Kubernetes Service**](../../basics/object-types/k8s-service.md), [**Kubernetes Pod**](../../basics/object-types/k8s-pod.md) and [**Kubernetes Container**](../../basics/object-types/k8s-container.md)
- **HTML e-mails** for notifications
- New console command to **restore the logbook**
- New installations sort object types **alphabetically** by default
- URL-encoded variables in the category **Access**
- 46 **quality improvements**

## Important Changes

Some of the security improvements change the behavior of i-doit. Please check the following points before and after the update.

### Login Rate Limiting

i-doit now temporarily blocks the login after too many failed attempts. Failed attempts are counted per user name and per IP address. With the default values, the login is blocked for 15 minutes after 5 failed attempts within 5 minutes. The values can be adjusted in the system-wide expert settings in the [Admin Center](../../administration/admin-center.md#system-settings) (**System settings → Expert settings**) with the following keys:

| Key | Default | Meaning |
| --- | --- | --- |
| `system.security.login-throttle.active` | `1` | Rate limiting active (`1`) or inactive (`0`) |
| `system.security.login-throttle.max-attempts` | `5` | Number of failed attempts until the login is blocked |
| `system.security.login-throttle.window` | `300` | Period in seconds in which failed attempts are counted |
| `system.security.login-throttle.lockout` | `900` | Duration of the block in seconds |
| `system.security.login-throttle.trusted-proxies` | empty | Comma separated IP addresses of trusted reverse proxies |

If i-doit runs behind a reverse proxy, enter its IP address in `system.security.login-throttle.trusted-proxies`. Only then is the client IP address taken from the `X-Forwarded-For` header. Otherwise all users share the IP address of the proxy.

### CMDB Export: Saving on the Server Is Deactivated

By default, the CMDB export no longer offers the option **Save export data as...**, which saved the export file in a directory on the i-doit server. **View export data** and **Download export data** are still available. If you need to save exports on the server, activate the option with the tenant-wide [expert setting](../../administration/management/tenant-management/expert-settings.md#cmdb-export) `cmdb.cmdb-export.allow-save-on-filesystem` (value `1`). The file is then always saved as XML and the save path is checked.

### Allowed File Extensions for Uploads

Uploaded files in the CMDB are now checked on the server. The new setting **Allowed file extensions for CMDB category uploads** in the [tenant settings](../../administration/management/tenant-management/tenant-settings.md#cmdb) under **Administration → [Tenant name] Administration → Settings for [Tenant name] → CMDB** defines which file extensions are accepted. New installations come with a predefined list (pdf, doc, docx, xls, xlsx, ppt, pptx, odt, ods, odp, txt, csv, rtf, png, jpg, jpeg, gif, bmp, zip). On new installations, this list also applies if the field in the tenant settings is empty. After an update there is no predefined list, so an empty field allows all extensions. After the update, check whether you want to restrict the file extensions.

### Allowed URL Schemes for Links

Links in the categories **File assignment** and **Access** are now checked against a list of allowed URL schemes when they are saved. Links with other schemes, such as `javascript:`, can no longer be saved. Existing links with such a scheme are no longer displayed as clickable links. The new setting **Allowed URL schemes** in the [tenant settings](../../administration/management/tenant-management/tenant-settings.md#security) under **Administration → [Tenant name] Administration → Settings for [Tenant name] → Security** defines the allowed schemes. The default is `http, https, ftp, ftps, mailto, tel`, for new installations and after the update. If you use links with other schemes, add them to the list after the update.

### TLS Certificate Validation for Outgoing Connections

Outgoing connections via the internal proxy and the updater now validate the TLS certificate of the remote site. The new option **Verify SSL certificate** in the [Admin Center](../../administration/admin-center.md#proxy) under **System settings → Proxy** is set to **Yes** by default. If your proxy replaces certificates with its own certificate, make sure the certificate is trusted by the server.

### Server-Side Permission Checks

Permissions for imports and add-on entry points are now checked on the server and no longer only in the navigation. This affects the following areas: imports, the permission system, custom categories, configuring dashboards and their widgets, notifications and e-mail templates, report views, the h-inventory configuration and opening objects. Users who previously reached these pages via a direct URL without the matching right now receive an error message. If users miss access after the update, check their [permissions](../../administration/management/permissions.md).

### Web Server Configuration for i-doit MCP

The `.htaccess` file of i-doit now also allows access to `src/mcp.php` and passes the `Authorization` header to PHP. Both are required for [i-doit MCP](../../i-doit-add-ons/i-doit-mcp/index.md). If your Apache virtual host uses `AllowOverride None` and contains the rules of the `.htaccess` file directly, transfer these changes to your virtual host configuration. The virtual host examples in the [installation guides](../../installation/manual-installation/debian/index.md) show the updated configuration.

## Further Improvements

- The password for a remote logbook archive database is now stored encrypted. Existing passwords are encrypted automatically during the update.

## System Requirements

The system requirements are unchanged compared to i-doit 38: PHP 8.2 (deprecated), 8.3 or 8.4 (recommended), MariaDB 10.6 to 11.8 (10.11 recommended) or MySQL 5.7 (deprecated) to 8.4 (8.4 recommended). Details are described in the [system requirements](../../installation/system-requirements.md). An update to i-doit 39 requires at least i-doit 35.

## Add-ons

Alongside the release of i-doit 39, the following versions of our add-ons will also be available:

- [i-doit MCP 1.1.1](../../i-doit-add-ons/i-doit-mcp/index.md), the new add-on to connect i-doit to **AI assistants**
- [Documents 1.12](../../i-doit-add-ons/documents/index.md) with the new **AI functions** to create document templates

Make sure to **update** the add-ons accordingly to meet the requirements for i-doit 39.

We encourage you to [update](../../maintenance-and-operation/i-doit-update.md) to this release of i-doit and your installed add-ons as soon as possible to benefit from all of these improvements.

If you have further questions about this release, please don't hesitate to contact our support team at <https://help.i-doit.com>{: target="_blank"}.
