---
title: SMTP Configuration (Email)
description: "i-doit automatically sends emails on certain events or status queries -- for example, for notifications or workflows."
icon: mail-back
status:
lang: en
---

# SMTP Configuration (Email)

_i-doit_ automatically sends emails on certain events or status queries -- for example, for notifications or workflows.

!!! warning "Console"
    This configuration is mandatory if you use automated email notifications via the [CLI](../automatisierung-und-integration/cli/index.md) with the [Notifications](../auswertungen/benachrichtigungen.md) or workflows. Without it, no emails will be sent!

The SMTP configuration can be found under **Administration → Import and Interfaces → SMTP Configuration (Email)**.

[![smtp-configuration](../assets/images/de/automatisierung-und-integration/1-smtp.png)](../assets/images/de/automatisierung-und-integration/1-smtp.png)

A configuration form with the following fields is available:

| Field                                          | Description                                                                                                                                                                                                                                              |
| ---------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| SMTP Host                                      | Specify the hostname or IP address of the mail server.                                                                                                                                                                                                   |
| SMTP Port                                      | Default port is 25. For encrypted connections or different configurations, the port must be changed accordingly.                                                                                                                                          |
| SMTP Username                                  | Specify the username                                                                                                                                                                                                                                     |
| SMTP Password                                  | Specify the password                                                                                                                                                                                                                                     |
| Sender                                         | Sender email address for mail delivery                                                                                                                                                                                                                   |
| Name                                           | Sender name for mail delivery.                                                                                                                                                                                                                           |
| Timeout                                        | Timeout for delivery                                                                                                                                                                                                                                     |
| SMTP Debug                                     | For initial configuration, it is often helpful to enable debugging. The log is stored in the `log/` directory in the _i-doit_ main directory.<br><br>(Default: **No**)                                                                                   |
| Subject Prefix                                 | Optionally entry to better support rule-based automation in email clients.                                                                                                                                                                                 |
| Notification template for maintenance contract | This template was used in a previous version and is no longer needed in current _i-doit_ versions.<br><br>In current versions, the template can be configured in the **Notification system** under **Extras**.                                           |
