---
title: Documentation of licenses
description: Documentation of licenses
icon: 
status: new
lang: en
---

The documentation of software licenses is important for all client and server systems. For IT administrators, an overview of existing licenses is essential to ensure the legally compliant licensing of all systems in use. Licenses that are used more than once should be identified quickly and possible reallocations made easily.

Documenting licenses not only builds up expertise, but also saves costs. Due to the rapid growth of the infrastructure, the license pool is growing in equal measure. Hardly anyone keeps track of which licenses are still in use. i-doit provides support here by identifying unused licenses at the touch of a button and removing them from the license pool. i-doit is an effective central tool that ensures that your company always has the licenses it actually needs.

[![Object-list](../assets/images/en/use-cases/documentation-of-licenses/1.png)](../assets/images/en/use-cases/documentation-of-licenses/1.png)

## Create and manage licenses

Each new license is created in i-doit via the “Licenses” object type. In addition to a unique name, the CMDB status of the license can be defined here. This depends on whether the license has just been ordered, delivered or is in operation. The entire asset lifecycle is therefore also mapped for licenses in i-doit.

All important information on payment and delivery is recorded in the “Accounting” category. The guarantee is calculated automatically on the basis of the values entered and can be used in individual reports.

[![Create license](../assets/images/en/use-cases/documentation-of-licenses/2.png)](../assets/images/en/use-cases/documentation-of-licenses/2.png)

In the case of licenses, queries may arise. The search for information on old invoices and delivery bills then often begins. In i-doit, you store important contact persons in the “Contact assignments” category. You can also assign various roles to these contact persons.

[![Contact assignment](../assets/images/en/use-cases/documentation-of-licenses/3.png)](../assets/images/en/use-cases/documentation-of-licenses/3.png)

## Create license keys

A license object can have different keys. Often not just one Windows server is operated, but a large number of them. Accordingly, different license keys are used, which are created separately in i-doit. A distinction is made between individual licenses and volume license keys. It is also possible to specify a start and expiration date for the license. This is helpful information, especially for notifications and reporting, in order to be able to act before licenses expire.

## Add licenses to existing assets

The license assignment takes place directly in the asset (e.g. server or client) and is carried out in the “Software assignment” or “Operating system” category. In addition to the license assignment, the respective version and variant of the software can also be configured here. IT administrators always have an overview of the patch level of the various systems and can use this information in any reports.

[![Operating system](../assets/images/en/use-cases/documentation-of-licenses/4.png)](../assets/images/en/use-cases/documentation-of-licenses/4.png)

## Reporting and notifications

All information on software, licenses and systems supports specialists and managers in the planning and implementation of tasks. i-doit provides the Notifications and Report Manager tools for the regular evaluation of information. You can use these to automatically create notifications and evaluate existing information on a granular basis.

**Use case: Evaluation of licenses used by department or location**

It is often necessary to determine which licenses are used and deployed by individual persons or entire departments. For this purpose, a report can be created via the Report Manager that displays all systems with an assigned license. This report can be individually extended with information on the location, model, user and much more.

A condition is defined in the report that all systems below a location should be displayed. In this example, we have selected the branch in Vienna. The second condition is that only systems with an assigned license in the “Operating system” category should be displayed. This combination of conditions means that only systems below the Vienna location with an assigned operating system license are displayed.

[![Report](../assets/images/en/use-cases/documentation-of-licenses/5.png)](../assets/images/en/use-cases/documentation-of-licenses/5.png)

After the conditions have been defined, various information should now be displayed in the report. To do this, we select the desired attributes and check the output.

[![Report](../assets/images/en/use-cases/documentation-of-licenses/6.png)](../assets/images/en/use-cases/documentation-of-licenses/6.png)

Instead of a location, you can also select the assignment to a department, a specific user or a specific device type.

## Display available and used licenses

There are various ways to determine the assigned and free licenses. The simplest option is to simply call up the licenses and activate the Free licenses category via the object lists.

[![Object-list](../assets/images/en/use-cases/documentation-of-licenses/1.png)](../assets/images/en/use-cases/documentation-of-licenses/1.png)

In the Report Manager, the standardized report “License utilization” is available in the online repositories. This can also be used to view all licenses with license keys, total licenses available and the licenses actually used.

[![Used Licenses report](../assets/images/en/use-cases/documentation-of-licenses/6.png)](../assets/images/en/use-cases/documentation-of-licenses/6.png)

## Be notified automatically about expiring licenses

i-doit has an integrated tool for notifications. This can be accessed via Extras -> CMDB -> Notifications. Here you can now precisely define when persons and departments should be informed about licenses that are about to expire or a license underrun. You can also define the threshold value (e.g. 30 days) at which the responsible persons should receive a notification.

## Automatic detection of software and licenses with Network Discovery

The infrastructure is subject to constant change. New clients and servers are put into operation and old systems are switched off. And in the meantime, a user needs specific software at short notice to complete a task. The documentation of all these changes can easily be forgotten in the hectic daily work routine. This can easily lead to duplicate licenses and under-licensing, which can be costly in the worst case scenario. Particularly in the area of software and licenses, it often makes sense to check this information regularly and automatically directly on the systems.

Whether to control license usage or to relieve your employees and colleagues: With a discovery tool, you reduce the documentation effort. Professional tools for network discovery include [JDisc](https://www.i-doit.com/i-doit-discovery/), Lansweeper and [Monitos Inventory](https://www.i-doit.com/produkte/add-ons/monitos-inventory).
