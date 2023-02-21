You can plan, coordinate and control maintenance dates with help of the `**Maintenance intervals**`  [add-on](/display/en/i-doit+pro+Add-ons). Planned maintenance works can be linked to any [objects](../../basics/structure-of-the-it-documentation.md). You will receive notifications automatically via e-mail so that you do not miss the maintenance works.

**Contents**

*   1[Configuration](#Maintenance-Configuration)
*   2[Rights Management](#Maintenance-RightsManagement)
*   3[Planning Maintenance Works](#Maintenance-PlanningMaintenanceWorks)
*   4[Archived Maintenance Works](#Maintenance-ArchivedMaintenanceWorks)
*   5[Create an Overview](#Maintenance-CreateanOverview)
*   6[Create a Report](#Maintenance-CreateaReport)
*   7[Maintenance Information for each Object](#Maintenance-MaintenanceInformationforeachObject)
*   8[Maintenance Works on the Dashboard](#Maintenance-MaintenanceWorksontheDashboard)
*   9[Create E-mail Templates](#Maintenance-CreateE-mailTemplates)
*   10[Automatic Sending of E-mails](#Maintenance-AutomaticSendingofE-mails)
*   11[Releases](#Maintenance-Releases)

Download and Installation

You can subsequently install the `**Maintenance intervals**` add-on. The article "[i-doit pro Add-ons](/display/en/i-doit+pro+Add-ons)" provides detailed descriptions regarding download, installation, updates etc.

Configuration
-------------

A separate configuration is not planned.

Rights Management
-----------------

You can set [rights for persons and person groups](/display/en/Rights+Management) under `**Administration → Authorization system → Rights → Maintenance**`.

| Condition | Description |
| --- | --- |
| `**Planning**` | Enables handling of maintenance works |
| `**Planning (archive)**` | Enables handling of archived maintenance works |
| `**Email template**` | Enables handling of e-mail templates |
| `**Overview**` | Enables the generation of an overview |
| `**Send emails**` | Enables the creation of a report |

Planning Maintenance Works
--------------------------

You can create and edit maintenance works under **`Extras → Maintenance → Planning`**.

![](/download/attachments/61015601/image2017-12-18%2010%3A36%3A15.png?version=1&modificationDate=1513589773530&api=v2&effects=drop-shadow)

The action bar contains the following functions:

| Button | Action |
| --- | --- |
| `**New**` | Create a new maintenance work |
| `**Edit**` | Edit selected maintenance works |
| `**Delete**` | Delete selected maintenance works irrevocably |
| `**Finish**` | Mark selected maintenance works as successfully completed |
| `**Send email**` | Inform persons in question via e-mail about the maintenance works |

  

![](/download/attachments/61015601/en_maintenance_planning.png?version=1&modificationDate=1490617126090&api=v2&effects=drop-shadow)

When you create a new maintenance work, you can select the following options:

| Option | Description |
| --- | --- |
| `**Finish maintenance  <br>**` | Is this maintenance work already marked as completed? |
| `**Email dispatched**` | Was an e-mail sent to the persons concerned? |
| `**Objects**` | List of objects concerned by maintenance works |
| `**Maintenance type**` | Here you can categorize maintenance works |
| ``**`**Maintenance date**`**`` | Date/ period of the planned maintenance works |
| `**Comment**` | Further details |
| `**Recipient**` | Persons who the maintenance works are assigned to. They receive an e-mail if a corresponding e-mail address is assigned to them (`**Persons → Master data**` category). If person groups are the recipients, the members of the groups will be notified. |
| `**Assigned roles  <br>**` | As an alternative or in parallel with the recipients the assigned contacts can be notified by means of their roles (`**Contact assignment**` category). |
| `**Email template**` | Which text do you want to send via e-mail (see below)? |

![](/download/attachments/61015601/en_maintenance_planning_form.png?version=1&modificationDate=1490617126077&api=v2&effects=drop-shadow)

Archived Maintenance Works
--------------------------

If a maintenance work is marked as completed, it will not appear in the **`Planning`** section anymore (see above). Instead, it will be listed under `**Extras → Maintenance → Planning (archive)**`.

![](/download/attachments/61015601/en_maintenance_archive.png?version=1&modificationDate=1490617126161&api=v2&effects=drop-shadow)

Create an Overview
------------------

A detailed overview of all objects for which maintenance works have been planned or already completed can be found at `**Extras → Maintenance → Overview**`. You can define a time period for filtering purposes (option `**From**` and `**To**`).

![](/download/attachments/61015601/en_maintenance_overview.png?version=1&modificationDate=1490617126106&api=v2&effects=drop-shadow)

Create a Report
---------------

You can create a report listing the planned and completed maintenance works and download it as PDF file. This function can be found under `**Extras → Maintenance → Maintenance annual report (Export)**`. Alternatively, you can reach this function at ``**Extras → Report Manager → Views → `**Maintenance annual report (Export)**`**``. You can choose from the following options:

| Option | Description |
| --- | --- |
| `**Headline**` | Headline of the report |
| `**Maintenance type  <br>**` | Restriction to a certain type |
| `**From**` | Start date |
| `**To**` | End date |
| `**Logo for PDF header  <br>**` | Additional picture which is included in each page; the picture has to be available as [file object](/display/en/Upload+and+Link+of+Files) in i-doit beforehand. |

With the **`**PDF Export & Download**`** button you can create the PDF file and download it.

![](/download/attachments/61015601/en_maintenance_report.png?version=1&modificationDate=1490617126043&api=v2&effects=drop-shadow)

Maintenance Information for each Object
---------------------------------------

During the performance of maintenance works for an object you can find a symbolic representation within the object. On every page of an object, i.e. the overview page or within the categories, you can see the information that the objects is `**In maintenance**` at the moment.

![](/download/attachments/61015601/en_maintenance_object.png?version=1&modificationDate=1490617925897&api=v2&effects=drop-shadow)

Maintenance Works on the Dashboard
----------------------------------

You can display the dates of scheduled and completed maintenance works in the calendar widget on the [dashboard](/display/en/Dashboard+and+Widgets) and highlight these dates.

![](/download/attachments/61015601/en_maintenance_calendar.png?version=1&modificationDate=1490617126146&api=v2)

Create E-mail Templates
-----------------------

You can generate an e-mail for scheduled maintenance works to inform the persons involved. The persons are either specified as recipient or via their assigned roles. Under `**Extras → Maintenance → Email templates**` you can define which text is to be send via e-mail to the persons in question. Any number of templates is possible which can be assigned to each single scheduled maintenance work (see above).

![](/download/attachments/61015601/en_maintenance_email_templates.png?version=1&modificationDate=1490617126120&api=v2&effects=drop-shadow)

Use the `**New**` button to create a new e-mail template and the `**Edit**` button to change an existing template. With `**Delete**` you can delete e-mail templates irrevocably.

The form to create or edit e-mail templates offers the following options:

| Option | Description |
| --- | --- |
| `**Title**` | Subject line of the e-mail |
| `**Text**` | Text of the e-mail |

You can use placeholders for both the `**Title**` and the `**Text**` which are then replaced before the sending process. The list of available placeholders can also be found on this page.

![](/download/attachments/61015601/en_maintenance_email_template.png?version=1&modificationDate=1490617126133&api=v2&effects=drop-shadow)

Automatic Sending of E-mails
----------------------------

Actually, the e-mails are sent via the [console](/display/en/CLI), the CLI Tool of i-doit, in the background. For this purpose, the `**maintenance**` handler is used. We recommend setting up a Cronjob for the automated sending of e-mails.

Example:

[?](#)

`sudo` `-u www-data php console.php --username admin --password admin maintenance`

Thus, you can automate the process and do not have to send e-mails manually anymore (`**Send emails**` button under `**Extras → Maintenance → Planning**`).

  

Releases
--------

| Version | Date | Changelog |
| --- | --- | --- |
| 1.2.1 | 2023-01-24 | \[Bug\] Error when sending multiple mails |
| 1.2 | 2022-09-05 | \[Task\] PHP 8.0 Compatibility  <br>\[Task\] Design Compatibility  <br>\[Bug\]  HTML code in browser message |
| 1.1.4 | 2021-01-18 | \[Improvement\] Compatibility with i-doit 1.16 |
| 1.1.3 | 2020-10-20 | \[Bug\] Maintenance without an object can be completed despite the error message  <br>\[Bug\] Keeping the filters in add-on "Maintenance"  <br>\[Bug\] Maintenance report shows the wrong period  <br>\[Bug\] Placeholder model>manufacturer is swapped with model>title  <br>\[Bug\] Email notification notifies archived contacts |
| 1.1.2 | 2019-07-31 | ```<br>[Bug] Column 'Person (Role)' is empty when exporting[Bug] Maintenance report: periods underneath each other to save space[Bug] Export of corrects duplicates objects[Bug] Double mailing possible for recurring maintenance[Bug] Maintenance can not be completed<br>``` |
| 1.1.1 | 2018-12-05 | ```<br>[Bug] Export does not report assigned contacts in the report<br>```<br><br>```<br>[Bug] Object browser for recipients shows no results<br>``` |
| 1.1 | 2018-04-16 | ```<br>[Improvement]   Multiple selection of types in the report view<br>```<br><br>```<br>[Improvement]   Definition of times for beginning and end of maintenance<br>```<br><br>```<br>[Improvement]   Recurring maintenances<br>```<br><br>```<br>[Improvement]   Maintenance handler redirects to command and create command with logic from handler<br>``` |
| 1.0.3 | 2017-12-18 | Initial release |