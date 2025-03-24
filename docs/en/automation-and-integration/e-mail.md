---
title: SMTP configuration (e-mail)
description: SMTP configuration  (e-mail)
icon: mail-back
status:
lang: en
---

# SMTP configuration (E-Mail)

_i-doit_ is capable of sending e-mails automatically in the case of specific events or states.

!!! attention "Console"
    The configuration is essential when the i-doit controller [CLI](./cli/index.md) is used with the [notifications](../evaluation/notifications.md) or workflows. Otherwise no e-mails can be sent!

The integration of a mail server is possible in the **Administration** at **Import and interfaces → SMTP configuration (e-mail)**. A configuration mask with the following fields is available there:

[![smtp-konfiguration](../assets/images/en/automation-and-integration/smtp-1.png)](../assets/images/en/automation-and-integration/smtp-1.png)

| Field                                          | Description                                                                                                                                                                                                                   |
| ---------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| SMTP Host                                      | Name of the host or the IP address of the mail server.                                                                                                                                                                        |
| SMTP Port                                      | 25 is the standard port. The port has to be changed accordingly for an encrypted connection or deviating configuration.                                                                                                       |
| SMTP Username                                  | Enter the username                                                                                                                                                                                                            |
| SMTP Password                                  | Enter the password                                                                                                                                                                                                            |
| Sender                                         | Sending e-mail address for e-mail dispatch                                                                                                                                                                                    |
| Name                                           | Sender name for e-mail dispatch                                                                                                                                                                                               |
| Timeout                                        | Timeout for e-mail dispatch                                                                                                                                                                                                   |
| SMTP Debug                                     | It is often helpful to activate the debugging function for the initial setup. The log is deposited in the `log/` folder of the _i-doit_ main folder.<br><br>(default: **No**)                                                 |
| Subject Präfix                                 | Optional entry for a better support of automation based on e-mail client rules.                                                                                                                                               |
| Notification template for maintenance contract | This template was used in a previous version and is not needed anymore in the current _i-doit_ versions.<br><br>In current versions, this template can be configured at **Notifications** function in the **Extras** section. |
