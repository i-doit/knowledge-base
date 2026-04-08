---
title: Service Desk
description: The service desk is a central customer interface in many organizations
icon:
status:
lang: en
---

# Service Desk

Via the service desk integration, you link tickets from your ticket system directly with objects in i-doit. This way, you immediately access the relevant [IT documentation](../../glossar.md) during support requests -- model, location, IP address, and more are available directly in the ticket.

## Supported Applications

i-doit provides interfaces to the following service desk applications in the standard installation:

*   [((OTRS)) Community Edition](../service-desk/otrscommunity-help-desk.md)
*   [Request Tracker (RT)](../service-desk/request-tracker.md)
*   [Zammad](../service-desk/zammad.md)

... and iTop.

Details on installing the respective extensions and modules can be found in the linked articles. The following section covers the configuration and features on the i-doit side.

## Configuration

Configure the connection under **Administration → Import and Interfaces → Trouble Ticket System (TTS)**.

[![service-desk-configure](../../assets/images/de/automatisierung-und-integration/service-desk/1-sd.png)](../../assets/images/de/automatisierung-und-integration/service-desk/1-sd.png)

| Option                    | Description                                                                                                                                                           |
| ------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **TTS Type**              | Which application is it?                                                                                                                                              |
| **Active**                | Should the interface be active?                                                                                                                                       |
| **Username**              | i-doit must log in with a user to the application to retrieve data. For security reasons, a dedicated user should be used.                                            |
| **Password**              | The password matching the user                                                                                                                                        |
| **URL incl. protocol**    | The link to the web GUI of the application, for example https://rt.example.org/rt                                                                                     |
| **TLS certificate**       | If the application uses a self-signed TLS certificate, it can be uploaded here.                                                                                       |

## Reading Tickets

When you link a ticket in the service desk application with an i-doit object, this link becomes visible in i-doit. Prerequisite: The **Active** option is set to **Yes**. You can access the **All Tickets** category via the speech bubble icon ![service-desk-icon](../../assets/images/de/automatisierung-und-integration/service-desk/2-sd.png).

[![service-desk-display](../../assets/images/de/automatisierung-und-integration/service-desk/3-sd.png)](../../assets/images/de/automatisierung-und-integration/service-desk/3-sd.png)

The category lists all linked tickets with detailed information. Clicking on a ticket opens it in the web GUI of the service desk application.

## Creating a New Ticket

In the upper area of the **All Tickets** category, you create a new ticket. Click on **Create Ticket** -- the web form of the application opens and automatically links the current object.

For [Request Tracker (RT)](../service-desk/request-tracker.md), you additionally select the queue. You configure the default queues under **Administration → Import and Interfaces → Trouble Ticket System (TTS) → Request Tracker queues** (comma-separated).
