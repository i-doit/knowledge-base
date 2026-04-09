---
title: Notifications
description: Be proactively informed via email about important events and states in the IT documentation.
icon: notifications
status: published
lang: en
---

[![Notifications](../assets/images/de/auswertungen/benachrichtigungen.png)](../assets/images/de/auswertungen/benachrichtigungen.png)

## Prerequisites

For notifications to be sent, [SMTP must be configured](../administration/management/import-and-interfaces/smtp-konfiguration-email.md). Additionally, it is necessary to regularly execute the [i-doit console utility](../automation-and-integration/cli/index.md) command.

## Notifications

The notification module is a powerful tool for proactively monitoring your IT documentation. Instead of reactively encountering problems, you can be automatically informed via email when certain events occur. This way, you never miss expiring contracts, certificates, or maintenance deadlines, and you can sustainably ensure data quality.

In this article, we describe the entire process from selecting the appropriate **[notification type](#notification-types)** through the detailed **[setup](#setting-up-a-notification)** and customization of **[email templates](#customizing-email-templates)** to automated execution via the **[i-doit console utility](#configuration-of-the-cli-call)**.

!!! info "A practical example for notifications and escalation levels can also be found on our [Blog](https://www.i-doit.com/blog/benachrichtigungen-und-eskalationsstufen-mit-i-doit/)"

---

## Notification Types

The configuration takes place under **Extras → Notifications**. i-doit offers a variety of predefined notification types tailored to different use cases.

| Notification                            | Description                                                                                                                                                                                                                                                                                               |
| :-------------------------------------- | :-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Cancellation period expiry**          | Checks contract objects and notifies when the configured time span (e.g., 90 days) before the last possible cancellation date is reached.                                                                                                                                                                 |
| **Maintenance/warranty period expiry**  | Monitors contracts and informs before the end of a stored maintenance or warranty period.                                                                                                                                                                                                                 |
| **Certificate expiry**                  | Checks all objects with an assigned "Certificate" category and warns before the entered expiration date.                                                                                                                                                                                                  |
| **CMDB status ends**                    | Monitors objects with planned status changes ("Status Planning" category) and informs before the end of a planned CMDB status (e.g., "in maintenance").                                                                                                                                                   |
| **CMDB status starts**                  | Informs before the start of a planned status change (e.g., "commissioning").                                                                                                                                                                                                                              |
| **Available licenses**                  | Monitors license objects and notifies when the number of available licenses falls below a defined threshold.                                                                                                                                                                                              |
| **Stored objects**                      | Checks any object types and reports when the number of objects with the status "Stored" exceeds a threshold. Useful for inventory management.                                                                                                                                                             |
| **i-doit update**                       | Checks whether a new version of i-doit is available. The i-doit server requires a working internet connection for this.                                                                                                                                                                                   |
| **License expiry**                      | Checks license objects and warns before their expiration date. To avoid notifications for already expired licenses, the option [Skip expired licenses](../administration/management/tenant-management/tenant-settings.md#benachrichtigungen) should be enabled.                        |
| **Report-based notification**           | Executes a predefined report and sends a notification when the number of found objects exceeds a threshold. **Extremely flexible** for individual use cases.                                                                                                                                               |
| **Unchanged objects**                   | Checks which objects have not been changed within a defined period. Ideal for tracking outdated data and ensuring data quality.                                                                                                                                                                            |
| **Changed objects**                     | Checks which objects have been changed within a defined period. Enables, for example, daily change reports via email.                                                                                                                                                                                      |

---

## Setting Up a Notification

Configuring a new notification is done by clicking the **`New`** button and always follows the same schema, which is divided into three main areas: General settings, Domains (what is checked?) and Recipients (who is notified?).

### General Settings

Here you define the basic behavior of the notification.

| Setting                                          | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                         |
| :----------------------------------------------- | :------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| **Title**                                        | A descriptive name, e.g., "Warning 30 days before contract expiry".                                                                                                                                                                                                                                                                                                                                                                                                 |
| **Active**                                       | Enables or disables the notification.                                                                                                                                                                                                                                                                                                                                                                                                                               |
| **Threshold**                                    | The trigger for the notification. Depending on the type, this is a **time interval** (e.g., 30 days) or a **quantity** (e.g., 5 licenses). A detailed explanation is displayed directly in the form. Whether the match should be exact can be controlled via the option [Only notify on exact threshold match](../administration/management/tenant-management/tenant-settings.md#benachrichtigungen).                                           |
| **Max. number of notifications to send**         | Limits the number of emails for the same case. With `0`, notifications continue until the triggering condition is resolved. Setting the value to `5` stops sending after the fifth email. The counter is reset once the condition no longer applies.                                                                                                                                                                                                                  |
| **Number of sent notifications**                 | A purely informational field showing how often notifications have already been sent.                                                                                                                                                                                                                                                                                                                                                                                 |
| **Date of last run**                             | Shows when the check was last executed.                                                                                                                                                                                                                                                                                                                                                                                                                              |
| **Interval start date**                          | Defines the start time for a recurring notification.                                                                                                                                                                                                                                                                                                                                                                                                                |
| **Interval configuration**                       | Allows setting up recurring checks (e.g., daily, weekly, monthly) with an optionally end date.                                                                                                                                                                                                                                                                                                                                                                        |
| **English/German template**                      | Assigns the [email template](#customizing-email-templates) to be used for the respective language.                                                                                                                                                                                                                                                                                                                                                                   |
| **Description**                                  | A free text field for internal notes about the notification.                                                                                                                                                                                                                                                                                                                                                                                                         |

### Domains (What Is Checked?)

In this area, you define which objects should be monitored by the notification.

| Domain                               | Description                                                                                                                                                                                  |
| :----------------------------------- | :------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Objects**                          | Direct selection of one or more specific objects.                                                                                                                                             |
| **Object types**                     | Monitors all objects of one or more selected object types.                                                                                                                                    |
| **Reports**                          | The most flexible method: Use a report from the Report Manager to precisely define the object scope. Example: Only monitor licenses whose unit price exceeds 150 EUR.                        |
| **Only objects with status "Normal"** | An additional filter option that only considers objects in the "Normal" state and ignores others (e.g., "archived", "stored").                                                                |

!!! info "Depending on the notification type, the domains are limited. A 'License expiry' notification, for example, can only be applied to license objects."

### Recipients (Who Is Notified?)

Here you configure who should receive the notification email.

| Recipient                                   | Description                                                                                                                                                                                                                                |
| :------------------------------------------ | :----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Assigned roles**                          | Notifies contacts assigned to an affected object in a specific role (e.g., the "contract partner" for a contract). These contacts only receive information about the object to which they are directly assigned.                            |
| **Assigned contacts**                       | Fixed selection of persons, person groups, or organizations that are always informed about *all* objects found by this notification. An email address on the respective contact object is mandatory.                                         |
| **Strategy for calculating recipients**     | Defines how person groups are resolved when selected as recipients.                                                                                                                                                                        |

The strategy for resolving person groups offers the following options:

| Strategy                                                                    | Description                                                                                                     |
| :-------------------------------------------------------------------------- | :-------------------------------------------------------------------------------------------------------------- |
| **Groups if email exists, otherwise assigned persons (default)**             | If the group has its own email address, the mail goes there. Otherwise, to all members of the group.            |
| **Groups and persons**                                                      | The notification goes to both the group's email address and all individual members.                              |
| **Groups only**                                                             | The notification is sent exclusively to the group's email address. Members are ignored.                          |
| **Persons only**                                                            | The notification is sent exclusively to the email addresses of group members. The group mailbox is ignored.      |

---

## Customizing Email Templates

In the left navigation tree under **Email Templates**, you can globally customize the content of notifications. The language selection (German/English) is based on the language set in the recipient's contact object.

| Settings           | Description                                                                                                                                        |
| ------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------- |
| Language            | Displays the language currently being edited.                                                                                                      |
| Subject             | The subject of the message to be sent can be defined using placeholders from the lower area of the interface.                                      |
| Notification text   | The text can, like the subject, be composed using placeholders.                                                                                    |
| Report              | A report can be defined here to send the object information found by the notification in a formatted manner within the email.                      |

## Configuration of the CLI Call

For the configured notifications to be regularly checked, the [i-doit console utility](../automation-and-integration/cli/index.md) must be executed with the `notifications-send` command, for example as a [cron job](../maintenance-and-operation/set-up-cron-jobs.md). Each notification can be triggered individually. It makes sense to consider how often checks should be performed at most. In our experience, checking daily shortly before the start of the work day has proven effective, so that it is immediately clear in the morning what needs attention during the day.

!!! info "Without calling the command via the i-doit console utility, **no** notifications will be sent!"

The available parameters can be retrieved via the `--help` option. More information can be found in the [corresponding article](../automation-and-integration/cli/index.md).

!!! info "The notification module allows you to implement escalation levels. To do this, you need to set up multiple notifications for the same notification types with different recipient groups and thresholds."

**Usage example**

```shell
sudo -u www-data php /var/www/html/console.php notifications-send --user admin --password admin --tenantId 1
```

[More information about the i-doit console utility](../automation-and-integration/cli/index.md)

---

## Logging

When calling the i-doit console utility command `notifications-send`, a log file is created. The file named `notifications_YYYY-MM-DD.log` can be found in the i-doit `log` folder.
