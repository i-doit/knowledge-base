---
title: Flows Add-on
description: Flows Add-on
icon: addons/flows
status: new
lang: en
---

The Flows add-on for i-doit is a powerful tool for automating processes within the CMDB system. It enables the creation of automated flows based on triggers and defined conditions. With flows, users can automate repetitive tasks and manual steps by defining rules that are triggered by certain events or conditions (e.g. a change in the CMDB). The add-on helps to make workflows more efficient, reduce errors and simplify the management of complex IT environments by handling routine processes without user interaction.

## Download and installation

This add-on can be installed at a later date. Detailed descriptions regarding download, installation, updates etc. can be found in the article[i-doit  Add-ons](index.md).

## Needed CLI Commands

!!! success "If the command is to be executed for a Tenant other than the first Tenant, the corresponding [Tenant ID](../../automation-and-integration/cli/console/options-and-parameters-cli.md#tenant-list) must be passed."

The Flows Add-on comes with two [CLI commands](../../automation-and-integration/cli/index.md). Both commands are needed to make the Flows Add-on work completely. There are two option to set up the CLI Commands. The Commands can be executed by a **Crontab**. We also have created a Service installation Script called **create-daemon.sh**, which can be found in the Flows Add-on folder `i-doit/src/classes/modules/synetics_flows/`.

### Using system service installer script

This Service will run the Flows Add-on CLI commands every few seconds. First we need to set execute rights for the file. Use the command inside the i-doit folder:

```shell
sudo chmod +x src/classes/modules/synetics_flows/create-daemon.sh
```

Now the file can be executed to create a system service. **This needs to be done for every Tenant**

-   `-u` needs a i-doit admin-user
-   `-p` needs a i-doit admin-user-password
-   `-i` needs a tenant ID, can be viewed via console command [tenant-list](../../automation-and-integration/cli/console/options-and-parameters-cli.md#tenant-list)

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

Flows can be **created**, **deleted** or **exported** via the [**action bar**](../../basics/structure-of-the-it-documentation.md#category). If a flow has been created, it can be **opened**, **activated** or **deactivated** in the flows overview via the **Actions** column. In addition, further actions are possible via the "3 dots" (More) button, such as **Edit**, **Duplicate** or **Switch to test mode**.

## Flow creation

To create a flow, the Flows add-on is called up via **Add-ons → Flows**. A new flow is then created using the **Add** button. A flow must have a name, a trigger and one or more actions defined in order to be complete. Finally, the flow must be activated using the button.

### Trigger types

Triggers determine when a flow is executed. Only one trigger per flow is possible.

!!! success ""
    === "Time based"
        The action is executed as soon as the date and time are reached. It can be repeated regularly.
    === "Button"
        The action is executed as soon as the button is clicked. The button is displayed in the action bar of the object if the conditions are met.
    === "Object Event"
        The action is executed when a specific CMDB status is set. It can also be filtered according to specific object types.
    === "Category Event"
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
    === "User / User group based"
        The action is only triggered if it is triggered by selected persons or members of person groups.

### Action types

At least one action must be defined.

!!! note ""
    === "Call API"
        The action executes a defined API call. The API call requires a URL, a method and authorization details. [Twig](https://twig.symfony.com/doc/3.x/) can be used as a template engine for this action type.
    === "Send E-Mail"
        The action sends an e-mail to specific recipients. A subject is required. [Twig](https://twig.symfony.com/doc/3.x/) can be used as a template engine for this action type.
    === "Create object"
        The action creates a new object. It is possible to store attributes for categories.
    === "Update object"
        The action updates attributes for existing objects.

## Logs

The logs are visible for all flows or for the flow that is currently open. Important information about the executions is saved in the logs.

## CLI console commands and options

| Command                                  | Description                          |
| ---------------------------------------- | ------------------------------------ |
| [flows:perform](#flowsperform)           | Perform executions                   |
| [flows:time-trigger](#flowstime-trigger) | Trigger execution of time automation |

!!! info "These commands are only available if the Flows add-on is installed"

### flows:perform

Perform executions.

**Options:**

| Parameter (short version) | Parameter (long version) | Description                                                                           |
| ------------------------- | ------------------------ | ------------------------------------------------------------------------------------- |
| -u                        | --user=[USERNAME]        | Username of a user who is authorized to execute                                       |
| -p                        | --password=[PASSWORD]    | Password for authentication of the previously specified user                          |
| -i                        | --tenant=[TENANT-ID]     | Tenant ID of the tenant to be used (default: 1)                                       |
| -c                        | --config=[CONFIG]        | Config File                                                                           |
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
| -u                        | --user=[USERNAME]        | Username of a user who is authorized to execute                                       |
| -p                        | --password=[PASSWORD]    | Password for authentication of the previously specified user                          |
| -i                        | --tenant=[TENANT-ID]     | Tenant ID of the tenant to be used (default: 1)                                       |
| -c                        | --config=[CONFIG]        | Config File                                                                           |
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

## CLI console commands and options

| Command                                  | Interne Beschreibung                 |
| ---------------------------------------- | ------------------------------------ |
| [flows:perform](#flowsperform)           | Perform executions                   |
| [flows:time-trigger](#flowstime-trigger) | Trigger execution of time automation |

!!! info "These commands are only available if the Flows add-on is installed"

### flows:perform

Perform executions.

**Options:**

| Parameter (short version) | Parameter (long version) | Description                                                                           |
| ------------------------- | ------------------------ | ------------------------------------------------------------------------------------- |
| -u                        | --user=USERNAME          | Username of a user who is authorized to execute                                       |
| -p                        | --password=PASSWORD      | Password for authentication of the previously specified user                          |
| -i                        | --tenant=TENANTID        | Tenant ID of the tenant to be used (default: 1)                                       |
| -c                        | --config=CONFIG          | Config File                                                                           |
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
| -u                        | --user=USERNAME          | Username of a user who is authorized to execute                                       |
| -p                        | --password=PASSWORD      | Password for authentication of the previously specified user                          |
| -i                        | --tenant=TENANTID        | Tenant ID of the tenant to be used (default: 1)                                       |
| -c                        | --config=CONFIG          | Config File                                                                           |
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

We have made use cases available in the [Demo](https://demo.i-doit.com/flows).

## Releases
<!-- cSpell:disable -->
| Version | Date       | Changelog                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      |
| ------- | ---------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| 1.0.1   | 2025-02-24 | [Task] Make symfony 6.4 compatible[Task]<br>Integrate validation of the CMDB criteria<br>[Task]Open "last execution" details in new tab<br>[Task]Allow access to object type information in placeholder<br>[Improvement] Export Flows to file<br>[Improvement] Allow usage of detailed information of assets<br>[Improvement] Import Flows from file<br>[Bug] Trigger is not performed when using a category event for a list category<br>[Bug] Attribute condition should not be available for change in action "update object"<br>[Bug] Not selected attribute value is displayed in the overview of a flow<br>[Bug]Creation date and Date of change are not available in object based conditions<br>[Bug] SQL error in object when an object based condition is configured for a location matches a title<br>[Bug] Selected custom attributes set as a trigger do not trigger the flow<br>[Bug] Selection of the object ID as a variable not possible<br>[Bug] Search popup is hard to read |
| 1.0     | 2024-10-10 | Initiales Release                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              |
