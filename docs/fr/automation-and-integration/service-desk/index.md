# Service Desk

The service desk is a key interface to the customer in many organizations. If the customer has a question about a product, he submits a request to the support team. In connection with ITIL you also speak of "incidents", with reference to software development questions you rather say "issues". Usually requests are made per e-mail or by phone call and are organized in tickets. There is a multitude of different (web) applications to support a service desk. These applications often access additional resources (customer databases etc.) to examine and process inquiries comprehensively and efficiently. An important resource is the [IT documentation](../../glossary.md): If a colleague from a specialized division reports a defective printer to the IT department, the IT documentation supplies helpful information about the model, location, IP address, remote access and many other things.

Supported Applications

The i-doit default installation provides interfaces to several applications from the service desk field:

*   [((OTRS)) Community Edition Help Desk](./otrscommunity-help-desk.md)
*   [Request Tracker (RT)](./request-tracker.md)

… and iTop.

The specific installation and use of extensions (RT) and modules (((OTRS)) Community Edition) is described in the corresponding articles or the relevant links are included. In the following text we concentrate on the configuration and functions of i-doit.

Configuration
-------------

You carry out the configuration regarding the above mentioned applications under **Administration → Interfaces/ external data → Trouble Ticket System (TTS) → Configuration**.

[![Configuration](../../assets/images/en/automation-and-integration/service-desk/0-sd.png)](../../assets/images/en/automation-and-integration/service-desk/0-sd.png)

|     |     |
| --- | --- |
| **Option** | **Description** |
| **TTS-Type** | Which type of application do you want to select? |
| **Active** | Do you want the interface to be active? |
| **Username** | i-doit has to log on to the application with a user to retrieve data. For reasons of safety, you should choose a dedicated user. |
| **Password** | Password of the respective user |
| **URL incl. protocol** | Link to the web GUI of the application, for example [https://rt.example.org/rt](https://rt.example.org/rt) |

Reading Out Tickets
-------------------

When a ticket is referenced to an object in i-doit via the application, you can display this reference in i-doit. For this purpose, you have to set the **Active** option to **Yes** in the configuration. For each object you can reach the **All tickets** category with the speech bubble [![icon](../../assets/images/en/automation-and-integration/service-desk/1-sd.png)](../../assets/images/en/automation-and-integration/service-desk/1-sd.png) icon.

[![Reading Out Tickets](../../assets/images/en/automation-and-integration/service-desk/2-sd.png)](../../assets/images/en/automation-and-integration/service-desk/2-sd.png)

This category lists all referenced tickets and shows further details about each ticket. With a click on the ticket, you can open it in the web GUI of the service desk application.

Create a New Ticket
-------------------

You can also create a new ticket with the **All tickets** category. When you click the button **Create ticket** in the upper part of the window, the web form of the service desk application opens and references the object for which you want to create a ticket.

If you use the [Request Tracker (RT)](./request-tracker.md) application, you also have to choose the queue to which the ticket is assigned. The configuration of the preset queues is carried out with **Administration → System settings → System parameters → Request Tracker queues**. Here you enter the queues in a comma-separated way.

Logbook Entries for Tickets
---------------------------

When you create or handle a ticket in the service desk application and at least one object of i-doit is referenced in the process, you can trace this back in the [logbook](../../basics/logbook.md) afterwards.

[![Logbook Entries for Tickets](../../assets/images/en/automation-and-integration/service-desk/3-sd.png)](../../assets/images/en/automation-and-integration/service-desk/3-sd.png)
