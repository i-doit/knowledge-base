---
title: Flows Add-on
description: Flows Add-on
icon: addons/flows
status:
lang: en
---

The Flows add-on for i-doit is a powerful tool for automating processes within the CMDB system. It enables the creation of automated flows based on triggers and defined conditions. With flows, users can automate repetitive tasks and manual steps by defining rules that are triggered by certain events or conditions (e.g. a change in the CMDB). The add-on helps to make workflows more efficient, reduce errors and simplify the management of complex IT environments by handling routine processes without user interaction.

!!! tip "You can test this add-on: Simply install the add-on.<br>The Flows add-on can be used without a license. In this case, only the **Time based** trigger and the **Call command** action are available."

## Download and installation

Detailed descriptions regarding download, installation, updates etc. can be found in the article[i-doit Add-ons](../index.md).

## Needed CLI Commands

!!! success "If the command is to be executed for a Tenant other than the first Tenant, the corresponding [Tenant ID](../../automation-and-integration/cli/index.md) must be passed."

The Flows Add-on comes with two [CLI commands](../../automation-and-integration/cli/index.md). Both commands are needed to make the Flows Add-on work completely. There are two option to set up the CLI Commands. The Commands can be executed by a **Crontab**. We also have created a Service installation Script called **create-daemon.sh**, which can be found in the Flows Add-on folder `i-doit/src/classes/modules/synetics_flows/`.

## Automation of CLI commands

### Systemservice with script

A service can be created with the Linux script, this service executes the CLI commands of the Flows add-on every few seconds. First we need to set the execution rights for the file. Use the command in the i-doit folder:

```shell
sudo chmod +x src/classes/modules/synetics_flows/create-daemon.sh
```

Now the file can be executed to create a system service. **This needs to be done for every Tenant**

-   `-u` i-doit person with administrator rights
-   `-p` the password for the person
-   `-i` tenant ID in which the person is used, can be viewed via console command [tenant-list](../../automation-and-integration/cli/index.md)

```shell
src/classes/modules/synetics_flows/./create-daemon.sh -u admin-user -p admin-user-password -i 1
```

### Task scheduling & Cronjobs

If you use Windows, you can use the task scheduler. See [Task scheduling & Cronjobs](https://kb.i-doit.com/en/automation-and-integration/task-scheduling-and-cronjobs.html).

## Rights assignment

At **Administration → User permissions → Flows** you can change [Rights for Persons and Person groups](../../efficient-documentation/rights-management/index.md).

| Recht          | Beschreibung                                                          |
| -------------- | --------------------------------------------------------------------- |
| **Create**     | Allows access to the Flows Overview                                   |
| **View**       | Allows editing, activation/deactivation and implies the viewing right |
| **Edit**       | Allows creating, duplicating and implies the viewing right            |
| **Delete**     | Allows the deletion of flows and implies the viewing right            |
| **Supervisor** | Allows everything                                                     |

## Overview

Flows can be **created**, **deleted**, **exported** or **Imported** . If a flow has been created, it can be **opened**, **activated** or **deactivated** in the flows overview via the **Actions** column. In addition, further actions are possible via the "3 dots" (More) button, such as **Edit**, **Duplicate** or **Switch to test mode**.

## Flow creation

To create a flow, the Flows add-on is called up via **Add-ons → Flows**. A new flow is then created using the **Add** button. A flow must have a name, a trigger and one or more actions defined in order to be complete. Finally, the flow must be activated.

### Trigger types

Triggers determine when a flow is executed. Only one trigger per flow is possible.

!!! success ""
    === "Time based"
        The action is executed as soon as the date and time are reached. It can be repeated regularly.
    === "Button"
        The action is executed as soon as the button is clicked. It is displayed in the action bar of the object when the corresponding conditions are met. Buttons can also be grouped to execute multiple flows with a single click. In addition, buttons can be assigned icons.
    === "Object event"
        The action is executed when a specific CMDB status is set. It can also be filtered according to specific object types.
    === "Category event"
        The action is executed when categories or entries are edited. It can also be set so that it is only executed when certain categories or attributes are edited.

### Conditions types

No condition needs to be selected. In addition, conditions can be linked and nested with **AND** and **OR**.

!!! warning ""
    === "Logical conditions"
        Several logical conditions can be added to link or nest conditions.
    === "Object based"
        The action is only triggered for objects that fulfill the defined attribute-based conditions.
    === "Time based"
        The action is only triggered at or within a defined time period.
    === "Person / Person group based"
        The action is only triggered if it is triggered by selected persons or members of person groups.

### Action types

At least one action must be defined. In some actions, [Twig](https://twig.symfony.com/doc/3.x/) can be used as a template engine. An i-doit reference for Twig templates can be found [here](twig-reference.md).

!!! note ""
    === "Call API"
        The action executes a defined API call. The API call requires a URL, a method and authorization details. [Twig](https://twig.symfony.com/doc/3.x/) can be used as a template engine for this action type.
    === "Send E-Mail"
        The action sends an e-mail to specific recipients. A subject is required. [Twig](https://twig.symfony.com/doc/3.x/) can be used as a template engine for this action type.
    === "Create object"
        The action creates a new object. It is possible to store attributes for categories.
    === "Update object"
        The action updates attributes for existing objects.
    === "Rank object"
        The action changes the object condition. For example, from "Archived" to "Deleted".
    === "Call command"
        Call a i-doit console command. More infos for [Call command](actions/call-command.md).

## Logs

The logs,for all flows, are visible in the GUI. Important information about the executions is saved in the logs.

## CLI console commands and options

| Command                                  | Description                          |
| ---------------------------------------- | ------------------------------------ |
| [flows:perform](#flowsperform)           | Perform executions                   |
| [flows:time-trigger](#flowstime-trigger) | Trigger execution of time automation |

!!! info "These commands are only available if the Flows add-on is installed and are automatically executed when the [system service](#systemservice-with-script) has been set up"

### flows:perform

Perform executions.

**Options:**

| Parameter (short version) | Parameter (long version) | Description                                                                           |
| ------------------------- | ------------------------ | ------------------------------------------------------------------------------------- |
| -u                        | --user={USERNAME}        | Username of a user who is authorized to execute                                       |
| -p                        | --password={PASSWORD}    | Password for authentication of the previously specified user                          |
| -i                        | --tenant={TENANT-ID}     | Tenant ID of the tenant to be used (default: 1)                                       |
| -c                        | --config={CONFIG}        | Config File                                                                           |
| -h                        | --help                   | Help message for displaying further information                                       |
| -q                        | --quiet                  | Quiet-Mode to deactivate output                                                       |
| -V                        | --version                | Output of the i-doit Console version                                                  |
|                           | --ansi<br>--no-ansi      | Force (or disable --no-ansi) ANSI output                                              |
| -n                        | --no-interaction         | Disables all interaction questions of the i-doit Console                              |
| -v / -vv / -vvv           | --verbose                | Increase the command output (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

```shell
sudo -u www-data php console.php flows:perform --user admin-user --password admin-user-password --tenantId 1
```

### flows:time-trigger

Trigger execution of time automation.

**Options:**

| Parameter (short version) | Parameter (long version) | Description                                                                           |
| ------------------------- | ------------------------ | ------------------------------------------------------------------------------------- |
| -u                        | --user={USERNAME}        | Username of a user who is authorized to execute                                       |
| -p                        | --password={PASSWORD}    | Password for authentication of the previously specified user                          |
| -i                        | --tenant={TENANT-ID}     | Tenant ID of the tenant to be used (default: 1)                                       |
| -c                        | --config={CONFIG}        | Config File                                                                           |
| -h                        | --help                   | Help message for displaying further information                                       |
| -q                        | --quiet                  | Quiet-Mode to deactivate output                                                       |
| -V                        | --version                | Output of the i-doit Console version                                                  |
|                           | --ansi<br>--no-ansi      | Force (or disable --no-ansi) ANSI output                                              |
| -n                        | --no-interaction         | Disables all interaction questions of the i-doit Console                              |
| -v / -vv / -vvv           | --verbose                | Increase the command output (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

```shell
sudo -u www-data php console.php flows:time-trigger --user admin-user --password admin-user-password --tenantId 1
```

## Use cases

We have made use cases available in the [Demo](https://demo.i-doit.com/flows). You can download the examples and import them to you instance.

## Releases
<!-- cSpell:disable -->
| Version | Date       | Changelog                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               |
| ------- | ---------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| 1.2.0   | 2025-09-16 | \[Improvement\] Improve creation of logical conditions<br>\[Improvement\] Action: Rank Objects<br>\[Improvement\] Create an option to define the visibility of Trigger Buttons on category level<br>\[Improvement\] Add option to add icons to Trigger Buttons<br>\[Improvement\] Group Trigger Buttons to trigger multiple Flows with one click<br>\[Bug\] Flows does not work with MySQL<br>\[Bug\] Specific category Net doesn't validate passed data correctly (from Flows)<br>\[Bug\] Time trigger is not scheduled<br>\[Bug\] More space for AND and OR object based condition selection when using german language                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               |
| 1.1.0   | 2025-04-24 | \[Improvement\] Upgrade now from Flows Console Command<br>\[Improvement\] Flows Lite: Command Alternative for extend-contracts<br>\[Improvement\] Flows Lite: Command Alternative for import-jdisc<br>\[Improvement\] Flows Lite: Command Alternative for import-jdiscdiscovery<br>\[Improvement\] Flows Lite: Command Alternative for ldap-sync<br>\[Improvement\] Flows Lite: Command Alternative for ldap-syncdn<br>\[Improvement\] Flows Lite: Command Alternative for notifications-send<br>\[Improvement\] Flows Lite: Command Alternative for search-index<br>\[Improvement\] Flows Lite: Command Alternative for system-objectrelations<br>\[Improvement\] Flows Lite: Command Alternative for sync-dynamic-groups<br>\[Improvement\] Flows Lite: Command Alternative for import-csv<br>\[Improvement\] Flows Lite: Command Alternative for import-xml<br>\[Improvement\] Flows Lite: Command Alternative for report-export<br>\[Improvement\] Flows Lite: Command Alternative for import-hinventory<br>\[Task\] Make sure the correct Action and Trigger are shown if no valid license is installed<br>\[Task\] Allow user to use Flows in Lite variant if the add-on is not licensed<br>\[Task\] Implement validation for dynamic option types<br>\[Task\] Adjust option description view<br>\[Bug\] Sort commands in select command on Create/Edit command action<br>\[Bug\] Unable to generate url with route cmdb.object-type.icon<br>\[Bug\] Object browser icon should not overlap the field input<br>\[Bug\] Unable to select assigned licenses for operating system category at flow action<br>\[Bug\] Specific category Net doesnt validate passed data correctly<br>\[Bug\] Correct text of object event trigger<br> |
| 1.0.1   | 2025-02-24 | \[Task\] Make symfony 6.4 compatible<br>\[Task\] Integrate validation of the CMDB criteria<br>\[Task\] Open "last execution" details in new tab<br>\[Task\] Allow access to object type information in placeholder<br>\[Improvement\] Export Flows to file<br>\[Improvement\] Allow usage of detailed information of assets<br>\[Improvement\] Import Flows from file<br>\[Bug\] Trigger is not performed when using a category event for a list category<br>\[Bug\] Attribute condition should not be available for change in action "update object"<br>\[Bug\] Not selected attribute value is displayed in the overview of a flow<br>\[Bug\] Creation date and Date of change are not available in object based conditions<br>\[Bug\] SQL error in object when an object based condition is configured for a location matches a title<br>\[Bug\] Selected custom attributes set as a trigger do not trigger the flow<br>\[Bug\] Selection of the object ID as a variable not possible<br>\[Bug\] Search popup is hard to read                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        |
| 1.0     | 2024-10-10 | Initiales Release                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       |
<!-- cSpell:enable -->
