---
title: Notifications
description: Get proactively informed via email about important events and states in your IT documentation.
icon: notifications
status:
lang: en
---

## Prerequisite

For notifications to be sent at all, [SMTP must be configured](../system-administration/administration/import-and-interfaces/smtp.md).

## Notifications

The Notifications module is a powerful tool to proactively monitor your IT documentation. Instead of reacting to problems, you can be automatically informed by email when certain events occur. This way, you will no longer miss expiring contracts, certificates, or maintenance periods and can sustainably ensure data quality.

In this article, we describe the entire process from selecting the appropriate **[Notification Type](#notification-types)**, to the detailed **[Setup](#setting-up-a-notification)** and customization of **[Email Templates](#customizing-email-templates)**, up to the automated execution via the **[i-doit console utility](#automation-via-cronjob-cli)**.

!!! info "You can find a practical example of notifications and escalation levels on our [Blog](https://www.i-doit.com/blog/benachrichtigungen-und-eskalationsstufen-mit-i-doit/)"

---

## Notification Types

The configuration is done under **Extras → Notifications**. i-doit offers a variety of predefined notification types tailored to different use cases.

| Notification                                    | Description                                                                                                                                                                                                                                                                            |
| :---------------------------------------------- | :------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Expiration of a notice period**               | Checks contract objects and notifies when the configured time period (e.g., 90 days) before the last possible termination date is reached.                                                                                                                                             |
| **Expiration of a maintenance/warranty period** | Monitors contracts and informs before the end of a stored maintenance or warranty period.                                                                                                                                                                                              |
| **Certificate expiration**                      | Checks all objects assigned the "Certificate" category for the certificate's expiration date.                                                                                                                                                                                          |
| **CMDB status ends**                            | Monitors objects with a planned status change (category "Status Planning") and informs before the end of a planned CMDB status (e.g., "in maintenance").                                                                                                                               |
| **CMDB status starts**                          | Informs before the start of a planned status change (e.g., "in deployment").                                                                                                                                                                                                           |
| **Free licenses**                               | Monitors license objects and notifies when the number of available licenses falls below a defined threshold.                                                                                                                                                                           |
| **Stored objects**                              | Checks any object types and reports if the number of objects with the status "Stored" exceeds a threshold. Useful for warehouse management.                                                                                                                                            |
| **i-doit Update**                               | Checks if a new version of i-doit is available. For this, the i-doit server needs a working internet connection.                                                                                                                                                                       |
| **License expiration**                          | Checks license objects and warns before their expiration date. To avoid notifications for already expired licenses, the option [Skip expired licenses](../administration/verwaltung/mandanten-name-verwaltung/einstellungen-mandanten-name.md#benachrichtigungen) should be activated. |
| **Report-based notification**                   | Executes a predefined report and sends a notification if the number of found objects exceeds a self-defined threshold. **Extremely flexible** for individual use cases.                                                                                                                |
| **Unchanged objects**                           | Checks which objects have not been changed within a defined period. Ideal for finding outdated data and ensuring data quality.                                                                                                                                                         |
| **Changed objects**                             | Checks for objects that have been changed within the past, self-defined period up to the execution of the notification. For example, a daily list of objects changed in the last 24 hours can be issued.                                                                               |

---

## Setting up a Notification

A new notification is configured by clicking the **`New`** button and always follows the same pattern, which is divided into three main areas: General Settings, Domains (what is being checked?), and Recipients (who will be notified?).

### General Settings

Here you define the basic behavior of the notification.

| Setting                                     | Description                                                                                                                                                                                                                                               |
| :------------------------------------------ | :-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Title**                                   | A meaningful name, e.g., "Warning 30 days before contract expiration".                                                                                                                                                                                    |
| **Active**                                  | Activates or deactivates the notification.                                                                                                                                                                                                                |
| **Threshold**                               | The trigger for the notification. Depending on the type, this is a **time interval** (e.g., 30 days) or a **count** (e.g., 5 licenses). A detailed explanation is displayed directly in the form.                                                         |
| **Max. number of notifications to be sent** | Limits the number of emails for the same case. If set to `0`, notifications will be sent until the triggering condition is resolved. If set to `5`, sending stops after the fifth email. The counter is reset as soon as the condition no longer applies. |
| **Number of sent notifications**            | A purely informational field that shows how many times a notification has already been sent.                                                                                                                                                              |
| **Date of last run**                        | Shows when the check was last executed.                                                                                                                                                                                                                   |
| **Interval start date**                     | Defines the start time for a recurring notification.                                                                                                                                                                                                      |
| **Interval configuration**                  | Allows setting up recurring checks (e.g., daily, weekly, monthly) with an optional end date.                                                                                                                                                              |
| **English/German Template**                 | Assigns the [Email Template](#customizing-email-templates) to be used for the respective language.                                                                                                                                                        |
| **Description**                             | A free text field for internal notes about the notification.                                                                                                                                                                                              |

### Domains (What is being checked?)

In this section, you define which objects should be monitored by the notification.

| Domain                                | Description                                                                                                                                                         |
| :------------------------------------ | :------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| **Objects**                           | Direct selection of one or more specific objects.                                                                                                                   |
| **Object types**                      | Monitors all objects of one or more selected object types.                                                                                                          |
| **Reports**                           | The most flexible method: Use a report from the Report Manager to precisely define the object scope. Example: Only monitor licenses with a unit price of over €150. |
| **Only objects with status "Normal"** | An additional filter option that only considers objects in the "Normal" state and ignores others (e.g., "archived", "stored").                                      |

!!! info "Depending on the notification type, the domains are restricted. For example, a "License expiration" notification can only be applied to "License" objects."

### Recipients (Who will be notified?)

Here you configure who should receive the notification email.

| Recipient                          | Description                                                                                                                                                                                                              |
| :--------------------------------- | :----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Assigned roles**                 | Notifies contacts who are assigned to an affected object in a specific role (e.g., the "contract partner" for a contract). These contacts only receive information about the object to which they are directly assigned. |
| **Assigned contacts**              | A fixed selection of persons, person groups, or organizations that are always informed about *all* objects found by this notification. An email address in the respective contact object is mandatory.                   |
| **Recipient calculation strategy** | Defines how person groups are resolved when they are selected as recipients.                                                                                                                                             |

The strategy for resolving person groups offers the following options:

| Strategy                                                         | Description                                                                                                  |
| :--------------------------------------------------------------- | :----------------------------------------------------------------------------------------------------------- |
| **Groups if email exists, otherwise assigned persons (Default)** | If the group has its own email address, the mail goes there. Otherwise, it goes to all members of the group. |
| **Groups and persons**                                           | The notification is sent to both the group's email address and all individual members.                       |
| **Only groups**                                                  | It is sent exclusively to the group's email address. Members are ignored.                                    |
| **Only persons**                                                 | It is sent exclusively to the email addresses of the group members. The group mailbox is ignored.            |

---

## Customizing Email Templates

In the left navigation tree under **Email Templates**, you can globally customize the content of the notifications. The choice of language (German/English) depends on the language set in the recipient's contact object.

| Setting               | Description                                                                                                                                           |
| :-------------------- | :---------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Language**          | Displays the language currently being edited.                                                                                                         |
| **Subject**           | The subject of the email to be sent. Can be dynamically designed with placeholders.                                                                   |
| **Notification text** | The content of the email, also customizable with placeholders.                                                                                        |
| **Report**            | Optionally, a report can be selected here. Its result (the found objects with the selected attributes) will then be embedded as a table in the email. |

### Available Placeholders

To design emails dynamically, you can use placeholders in the subject and text. All placeholders can be viewed in i-doit.

---

## Automation via Cronjob (CLI)

A configured notification does not become active on its own. It must be regularly triggered by an automated call via the i-doit console utility.

!!! danger "No dispatch without a cronjob!"
    Without the regular execution of the `notifications-send` command via a cronjob or scheduled task, **no** notifications will be sent.

The setup is done, for example, via a [cronjob on Linux](../maintenance-and-operation/cronjob-setup.md) or a scheduled [task on Windows](../automation-and-integration/task-scheduling-and-cronjobs.md). A proven rhythm is daily execution in the early morning.

**Example call:**
This command executes all active notifications for the tenant with ID 1.

```shell
sudo -u www-data php /var/w/html/console.php notifications-send --user admin --password admin --tenantId 1
```

[More information about the i-doit console utility](../automation-and-integration/cli/index.md)

---

## Logging

Every call of the `notifications-send` command creates a log file in the format `notifications_YYYY-MM-DD.log` in the `log` directory of your i-doit installation. There you can view details about performed checks and sent emails.
