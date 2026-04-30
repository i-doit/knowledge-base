---
title: Flows Add-on (Introduction)
description: "With the Flows Add-on you automate processes in i-doit."
icon: addons/flows
status:
lang: en
---

With the Flows Add-on you automate processes in i-doit. You define rules that are triggered by certain events or states -- such as a change in the CMDB. This way you automate repetitive tasks, reduce errors, and simplify the administration of complex IT environments.

## Download and installation

This add-on can be installed additionally. Details on download, installation, and updates can be found in the article [i-doit Add-ons](../index.md).

* * *

## Required CLI Commands

!!! success "If you want to execute the command for a tenant other than the first one, pass the corresponding [tenant ID](../automation-and-integration/cli/index.md)."

The Flows Add-on requires two [CLI commands](../automation-and-integration/cli/index.md) to function fully. You have two options for setting them up:

- **Crontab** -- Run the commands regularly via Cron.
- **System service** -- Use the included script `create-daemon.sh` located under `i-doit/src/classes/modules/synetics_flows/`.

## Automating the CLI Commands

### Creating a system service via script

The script creates a system service that executes the CLI commands every few seconds. First set the execution rights:

```shell
sudo chmod +x src/classes/modules/synetics_flows/create-daemon.sh
```

Then run the script for each tenant individually:

-   `-u` i-doit person with administrator rights
-   `-p` the password for the person
-   `-i` tenant ID in which the person is used (viewable via the console command [tenant-list](../automation-and-integration/cli/index.md))

```shell
src/classes/modules/synetics_flows/./create-daemon.sh -u admin-user -p admin-user-password -i 1
```

### Creating a crontab

Alternatively, set up a crontab that executes the CLI commands every minute. Example for Debian:

```shell
sudo crontab -u www-data -e
```

Add the following lines at the end of the file and replace the login credentials as well as the tenant ID if applicable:

```shell
* * * * * /usr/bin/php /var/www/html/console.php flows:perform ---user admin-user --password admin-user-password --tenantId 1
* * * * * /usr/bin/php /var/www/html/console.php flows:time-trigger --user admin-user --password admin-user-password --tenantId 1
```

## Assigning rights

Under **Administration → Permissions → Flows** can [permissions for persons and person groups](../efficient-documentation/permission-management/index.md) be adjusted.

| Right          | Description                                                                |
| -------------- | --------------------------------------------------------------------------- |
| **Create**     | Allows creating, duplicating and implies the view right                    |
| **View**       | Allows access to the Flows overview                                        |
| **Edit**       | Allows editing, enabling/disabling and implies the view right              |
| **Delete**     | Allows deleting Flows and implies the view right                           |
| **Supervisor** | Allows everything                                                          |

## Overview

Via the [**action bar**](../basics/it-documentation-structure.md#kategorie) you create, delete, or export Flows. In the overview you open, enable, or disable Flows via the **Actions** column. The **More** button (three dots) offers additional options: **Edit**, **Duplicate**, and **Switch to test mode**.

## Creating a Flow

To create a Flow:

1. Open **Add-ons → Flows**.
2. Click **Add** to create a new Flow.
3. Define a **name**, a **trigger**, and at least one **action**.
4. **Activate** the Flow via the corresponding button.

### Trigger types

Triggers determine when a Flow is executed. Only one trigger per Flow is possible.

!!! success ""
    === "Time-based"
        The action is executed once the date and time are reached. It can be repeated on a regular basis.
    === "Button"
        The action is executed once the button is clicked. The button is displayed in the action bar of the object when the conditions are met.
    === "Object event"
        The action is executed when a specific CMDB status is set. You can also filter by specific object types. This is **NOT** triggered when category data is changed through imports or API interaction.
    === "Category event"
        The action is executed when categories or entries are edited. This is **NOT** triggered when category data is changed through imports or API interaction.

### Condition types

Conditions are optional. You can link and nest them with **AND** as well as **OR**.

!!! warning ""
    === "Logical conditions"
        You can add multiple logical conditions to link or nest conditions.
    === "Object-based"
        Checks whether the object meets the defined conditions. This selection refers to the final state of the object or attribute.
    === "Time-based"
        Checks whether the execution time falls within the defined time periods.
    === "Person-/person group-based"
        Checks whether the action is triggered by selected persons or members of person groups.

### Actions

At least one action must be defined.

!!! note ""
    === "API call"
        The action executes a defined API call. The API call requires a URL, a method, and authorization specifications. For this action type you can use [Twig](https://twig.symfony.com/doc/3.x/) as a template engine.
    === "Send email"
        The action sends an email to specific recipients. A subject is required. For this action type you can use [Twig](https://twig.symfony.com/doc/3.x/) as a template engine.
    === "Create object"
        The action creates a new object. You can also specify attributes for categories.
    === "Update object"
        The action updates attributes in objects.

## Logs

The logs show execution information -- either for all Flows or for the currently opened Flow.

## i-doit console utility commands and options

| Command                                   | Description                         |
| ---------------------------------------- | ------------------------------------ |
| [flows:perform](#flowsperform)           | Perform executions                   |
| [flows:time-trigger](#flowstime-trigger) | Trigger execution of time automation |

!!! info "These commands are only available if the Documents add-on is installed"

### flows:perform

Perform executions

**Options:**

| Parameter (short) | Parameter (long)         | Description                                                                                      |
| ----------------- | ------------------------ | ------------------------------------------------------------------------------------------------ |
| -u                | --user=[USERNAME]        | Username of a user authorized for execution                                      |
| -p                | --password=[PASSWORD]    | Password for authentication of the previously specified user                                   |
| -i                | --tenant=[TENANT-ID]     | Tenant ID of the tenant to be used (default: 1)                              |
| -c                | --config=[CONFIG]        | Specification of the path to the configuration file                                                        |
| -h                | --help                   | Help message for displaying further information                                            |
| -q                | --quiet                  | Quiet mode to disable output                                                       |
| -V                | --version                | Display the version of the i-doit Console                                                           |
|                   | --ansi<br>--no-ansi      | Force ANSI output (or disable with --no-ansi)                                             |
| -n                | --no-interaction         | Disables all interaction questions of the i-doit Console                                      |
| -v / -vv / -vvv   | --verbose                | Increases the output verbosity. (1 = Normal output, 2 = Detailed output, 3 = Debug level) |

**Example**

```shell
sudo -u www-data php console.php flows:perform --user admin-user --password admin-user-password --tenantId 1
```

### flows:time-trigger

Trigger execution of time automation

**Options:**

| Parameter (short) | Parameter (long)         | Description                                                                                      |
| ----------------- | ------------------------ | ------------------------------------------------------------------------------------------------ |
| -u                | --user=[USERNAME]        | Username of a user authorized for execution                                      |
| -p                | --password=[PASSWORD]    | Password for authentication of the previously specified user                                   |
| -i                | --tenant=[TENANT-ID]     | Tenant ID of the tenant to be used (default: 1)                              |
| -c                | --config=[CONFIG]        | Specification of the path to the configuration file                                                        |
| -h                | --help                   | Help message for displaying further information                                            |
| -q                | --quiet                  | Quiet mode to disable output                                                       |
| -V                | --version                | Display the version of the i-doit Console                                                           |
|                   | --ansi<br>--no-ansi      | Force ANSI output (or disable with --no-ansi)                                             |
| -n                | --no-interaction         | Disables all interaction questions of the i-doit Console                                      |
| -v / -vv / -vvv   | --verbose                | Increases the output verbosity. (1 = Normal output, 2 = Detailed output, 3 = Debug level) |

**Example**

```shell
sudo -u www-data php console.php flows:time-trigger --user admin-user --password admin-user-password --tenantId 1
```

## Use Cases

Ready-made use cases can be found in our [Demo](https://demo.i-doit.com) -- you can export them from there.

## Releases
<!-- cSpell:disable -->
| Version | Date      | Changelog                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             |
| ------- | ---------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| 1.2     | 09.09.2025 | [Improvement] Improve creation of logical conditions<br>[Improvement] Action: Rank Objects<br>[Improvement] Create an option to define the visibility of Trigger Buttons on category level<br>[Improvement] Add option to add icons to Trigger Buttons<br>[Improvement] Group Trigger Buttons to trigger multiple Flows with one click<br>[Bug] Flows does not work with MySQL<br>[Bug] Specific category Net doesn't validate passed data correctly (from Flows)<br>[Bug] Time trigger is not scheduled<br>[Bug] More space for AND and OR object based condition selection when using german language                                                                                                                                                                                                                                                                                                                                               |
| 1.0.1   | 24.02.2025 | [Task] Make symfony 6.4 compatible[Task]<br><br>[Task]Open "last execution" details in new tab<br>[Task]Allow access to object type information in placeholder<br>[Improvement] Export Flows to file<br>[Improvement] Allow usage of detailed information of assets<br>[Improvement] Import Flows from file<br>[Bug] Trigger is not performed when using a category event for a list category<br>[Bug] Attribute condition should not be available for change in action "update object"<br>[Bug] Not selected attribute value is displayed in the overview of a flow<br>[Bug]Creation date and Date of change are not available in object based conditions<br>[Bug] SQL error in object when an object based condition is configured for a location matches a title<br>[Bug] Selected custom attributes set as a trigger do not trigger the flow<br>[Bug] Selection of the object ID as a variable not possible<br>[Bug] Search popup is hard to read |
| 1.0     | 10.10.2024 | Initial release                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     |
