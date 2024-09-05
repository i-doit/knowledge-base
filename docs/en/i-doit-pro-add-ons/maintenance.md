# Maintenance

You can plan, coordinate and control maintenance dates with help of the **Maintenance intervals**  [add-on](./index.md). Planned maintenance works can be linked to any [objects](../basics/structure-of-the-it-documentation.md). You will receive notifications automatically via e-mail so that you do not miss the maintenance works.

Download and Installation

You can subsequently install the **Maintenance intervals** add-on. The article "[i-doit pro Add-ons](./index.md)" provides detailed descriptions regarding download, installation, updates etc.

## Configuration

A separate configuration is not planned.

## Rights Management

You can set [rights for persons and person groups](../efficient-documentation/rights-management/index.md) under **Administration → Authorization system → Rights → Maintenance**.

| Condition              | Description                                    |
| ---------------------- | ---------------------------------------------- |
| **Planning**           | Enables handling of maintenance works          |
| **Planning (archive)** | Enables handling of archived maintenance works |
| **Email template**     | Enables handling of e-mail templates           |
| **Overview**           | Enables the generation of an overview          |
| **Send emails**        | Enables the creation of a report               |

## Planning Maintenance Works

You can create and edit maintenance works under **Extras → Maintenance → Planning**.

[![Planning](../assets/images/en/i-doit-pro-add-ons/maintenance/1-main.png)](../assets/images/en/i-doit-pro-add-ons/maintenance/1-main.png)

The action bar contains the following functions:

| Button         | Action                                                            |
| -------------- | ----------------------------------------------------------------- |
| **New**        | Create a new maintenance work                                     |
| **Edit**       | Edit selected maintenance works                                   |
| **Delete**     | Delete selected maintenance works irrevocably                     |
| **Finish**     | Mark selected maintenance works as successfully completed         |
| **Send email** | Inform persons in question via e-mail about the maintenance works |

[![action bar](../assets/images/en/i-doit-pro-add-ons/maintenance/2-main.png)](../assets/images/en/i-doit-pro-add-ons/maintenance/2-main.png)

When you create a new maintenance work, you can select the following options:

| Option                       | Description                                                                                                                                                                                                                                            |
| ---------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| **Finish maintenance  <br>** | Is this maintenance work already marked as completed?                                                                                                                                                                                                  |
| **Email dispatched**         | Was an e-mail sent to the persons concerned?                                                                                                                                                                                                           |
| **Objects**                  | List of objects concerned by maintenance works                                                                                                                                                                                                         |
| **Maintenance type**         | Here you can categorize maintenance works                                                                                                                                                                                                              |
| ****Maintenance date****     | Date/ period of the planned maintenance works                                                                                                                                                                                                          |
| **Comment**                  | Further details                                                                                                                                                                                                                                        |
| **Recipient**                | Persons who the maintenance works are assigned to. They receive an e-mail if a corresponding e-mail address is assigned to them (**Persons → Master data** category). If person groups are the recipients, the members of the groups will be notified. |
| **Assigned roles  <br>**     | As an alternative or in parallel with the recipients the assigned contacts can be notified by means of their roles (**Contact assignment** category).                                                                                                  |
| **Email template**           | Which text do you want to send via e-mail (see below)?                                                                                                                                                                                                 |

[![maintenance work](../assets/images/en/i-doit-pro-add-ons/maintenance/3-main.png)](../assets/images/en/i-doit-pro-add-ons/maintenance/3-main.png)

## Archived Maintenance Works

If a maintenance work is marked as completed, it will not appear in the **Planning** section anymore (see above). Instead, it will be listed under **Extras → Maintenance → Planning (archive)**.

[![Archived Maintenance Works](../assets/images/en/i-doit-pro-add-ons/maintenance/4-main.png)](../assets/images/en/i-doit-pro-add-ons/maintenance/4-main.png)

## Create an Overview

A detailed overview of all objects for which maintenance works have been planned or already completed can be found at **Extras → Maintenance → Overview**. You can define a time period for filtering purposes (option **From** and **To**).

[![Create an Overview](../assets/images/en/i-doit-pro-add-ons/maintenance/5-main.png)](../assets/images/en/i-doit-pro-add-ons/maintenance/5-main.png)

## Create a Report

You can create a report listing the planned and completed maintenance works and download it as PDF file. This function can be found under **Extras → Maintenance → Maintenance annual report (Export)**. Alternatively, you can reach this function at **Extras → Report Manager → Views → Maintenance annual report (Export)**. You can choose from the following options:

| Option                        | Description                                                                                                                                                      |
| ----------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Headline**                  | Headline of the report                                                                                                                                           |
| **Maintenance type  <br>**    | Restriction to a certain type                                                                                                                                    |
| **From**                      | Start date                                                                                                                                                       |
| **To**                        | End date                                                                                                                                                         |
| **Logo for PDF header  <br>** | Additional picture which is included in each page; the picture has to be available as [file object](../use-cases/upload-and-link-files.md) in i-doit beforehand. |

With the **PDF Export & Download** button you can create the PDF file and download it.

[![PDF Export & Download](../assets/images/en/i-doit-pro-add-ons/maintenance/6-main.png)](../assets/images/en/i-doit-pro-add-ons/maintenance/6-main.png)

## Maintenance Information for each Object

During the performance of maintenance works for an object you can find a symbolic representation within the object. On every page of an object, i.e. the overview page or within the categories, you can see the information that the objects is **In maintenance** at the moment.

[![Maintenance Information for each Object](../assets/images/en/i-doit-pro-add-ons/maintenance/7-main.png)](../assets/images/en/i-doit-pro-add-ons/maintenance/7-main.png)

## Maintenance Works on the Dashboard

You can display the dates of scheduled and completed maintenance works in the calendar widget on the [dashboard](../basics/dashboard-and-widgets.md) and highlight these dates.

[![calendar widget](../assets/images/en/i-doit-pro-add-ons/maintenance/8-main.png)](../assets/images/en/i-doit-pro-add-ons/maintenance/8-main.png)

## Create E-mail Templates

You can generate an e-mail for scheduled maintenance works to inform the persons involved. The persons are either specified as recipient or via their assigned roles. Under **Extras → Maintenance → Email templates** you can define which text is to be send via e-mail to the persons in question. Any number of templates is possible which can be assigned to each single scheduled maintenance work (see above).

[![Create E-mail Templates](../assets/images/en/i-doit-pro-add-ons/maintenance/9-main.png)](../assets/images/en/i-doit-pro-add-ons/maintenance/9-main.png)

Use the **New** button to create a new e-mail template and the **Edit** button to change an existing template. With **Delete** you can delete e-mail templates irrevocably.

The form to create or edit e-mail templates offers the following options:

| Option    | Description                |
| --------- | -------------------------- |
| **Title** | Subject line of the e-mail |
| **Text**  | Text of the e-mail         |

You can use placeholders for both the **Title** and the **Text** which are then replaced before the sending process. The list of available placeholders can also be found on this page.

[![placeholders](../assets/images/en/i-doit-pro-add-ons/maintenance/10-main.png)](../assets/images/en/i-doit-pro-add-ons/maintenance/10-main.png)

## Automatic Sending of E-mails

Actually, the e-mails are sent via the [console](../automation-and-integration/cli/index.md), the CLI Tool of i-doit, in the background. For this purpose, the **maintenance** handler is used. We recommend setting up a Cronjob for the automated sending of e-mails.

Example:

    sudo -u www-data php console.php --username admin --password admin maintenance

Thus, you can automate the process and do not have to send e-mails manually anymore (**Send emails** button under **Extras → Maintenance → Planning**).

## CLI console commands and options

| Command                       | Internal system description                                              |
| ----------------------------- | ------------------------------------------------------------------------ |
| [maintenance](#maintenance-1) | Sends notifications of scheduled maintenance from the Maintenance Add-on |

!!! info "This command is only available if the Maintenance add-on is installed"

### maintenance

Sends e-mails with scheduled maintenance according to the time periods specified in the [Maintenance add-on](#maintenance).

**Options:**

| Parameter (short version) | Parameter (long version) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
| -u                        | --user=USERNAME          | Username of a user who is authorized to execute                                              |
| -p                        | --password=PASSWORD      | Password for authentication of the previously specified user                                 |
| -i                        | --tenantId=TENANT-ID     | Tenant ID of the tenant to be used (default: 1)                                              |
| -h                        | --help                   | Help message for displaying further information                                              |
| -q                        | --quiet                  | Quiet-Mode to deactivate output                                                              |
| -V                        | --version                | Output of the i-doit Console version                                                         |
|                           | --ansi<br>--no-ansi      | Force (or disable --no-ansi) ANSI output                                                     |
| -n                        | --no-interaction         | Disables all interaction questions of the i-doit Console                                     |
| -v / -vv / -vvv           | --verbose                | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

```shell
sudo -u www-data php console.php maintenance --user admin --password admin --tenantId 1
```

## Releases

| Version | Date       | Changelog                                                                                                                                                                                                                                                                                                                 |
| ------- | ---------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| 1.4     | 2024-07-09 | [Improvement] Send an email with all the objects within the maintenance<br>[Bug] Only one role can be selected to be notified                                                                                                                                                                                             |
| 1.3     | 2023-11-07 | [Task] Use new routes to display object and object type images / move add-on related files                                                                                                                                                                                                                                |
| 1.2.2   | 2023-08-22 | [Improvement] PHP 8.1 Compatibility<br>[Bug] Filter in list views not working<br>[Bug] Creating a new E-Mail template does not work when the objecttype constant of client,server or switch or not available                                                                                                              |
| 1.2.1   | 2023-01-24 | [Bug] Error when sending multiple mails                                                                                                                                                                                                                                                                                   |
| 1.2     | 2022-09-05 | [Task] PHP 8.0 Compatibility  <br>[Task] Design Compatibility  <br>[Bug] HTML code in browser message                                                                                                                                                                                                                     |
| 1.1.4   | 2021-01-18 | [Improvement] Compatibility with i-doit 1.16                                                                                                                                                                                                                                                                              |
| 1.1.3   | 2020-10-20 | [Bug] Maintenance without an object can be completed despite the error message  <br>[Bug] Keeping the filters in add-on "Maintenance"  <br>[Bug] Maintenance report shows the wrong period  <br>[Bug] Placeholder model>manufacturer is swapped with model>title  <br>[Bug] Email notification notifies archived contacts |
| 1.1.2   | 2019-07-31 | [Bug] Column 'Person (Role)' is empty when exporting<br>[Bug] Maintenance report: periods underneath each other to save space[Bug] Export of corrects duplicates objects<br>[Bug] Double mailing possible for recurring maintenance<br>[Bug] Maintenance can not be completed                                             |
| 1.1.1   | 2018-12-05 | [Bug] Export does not report assigned contacts in the report<br>[Bug] Object browser for recipients shows no results                                                                                                                                                                                                      |
| 1.1     | 2018-04-16 | [Improvement] Multiple selection of types in the report view<br>[Improvement] Definition of times for beginning and end of maintenance<br>[Improvement] Recurring maintenances<br>[Improvement] Maintenance handler redirects to command and create command with logic from handler                                       |
| 1.0.3   | 2017-12-18 | Initial release                                                                                                                                                                                                                                                                                                           |
