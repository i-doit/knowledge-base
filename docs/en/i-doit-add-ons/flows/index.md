---
title: Flows Add-on
description: Flows Add-on
icon: addons/flows
status: new
lang: en
---

The Flows add-on for i-doit is a powerful tool for automating processes within the CMDB system. It enables the creation of automated flows based on triggers and defined conditions. With flows, users can automate repetitive tasks and manual steps by defining rules that are triggered by certain events or conditions (e.g. a change in the CMDB). The add-on helps to make workflows more efficient, reduce errors and simplify the management of complex IT environments by handling routine processes without user interaction.

## Download and installation

This add-on can be installed at a later date. Detailed descriptions regarding download, installation, updates etc. can be found in the article "[i-doit  Add-ons](index.md)".

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

Flows can be created or deleted via the [**action bar**](../../basics/structure-of-the-it-documentation.md#category). If a flow has been created, it can also be opened, activated or deactivated via the **Actions** column. In addition, further actions are possible via the “3 dots” (More) button, such as editing and duplicating,

## Flow creation

To create a flow, the Flows add-on is called up via **Add-ons → Flows**. A new flow is then created using the **Add** button. A flow must have a name, a trigger and one or more actions defined in order to be complete. Finally, the flow must be activated using the button.

### Trigger types

Trigger bestimmen wann ein FLow ausgeführt wird. Es ist nur ein Trigger pro Flow möglich.

=== "Time based"
    The action is executed as soon as the date and time are reached. It can be repeated regularly. An end date or a maximum number can also be set.

=== "Button"
    The action is executed as soon as the button is clicked. The button is displayed in the action bar of the object if the conditions are met.

=== "Object Event"
    The action is executed when a specific CMDB status is set. It can also be filtered according to specific object types.

=== "Category Event"
    The action is executed when categories or entries are edited. It can also be set so that it is only executed when certain categories or attributes are edited.

### Conditions types

No condition needs to be selected. In addition, conditions can be linked and nested with **AND** and **OR**.

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

=== "Call API"
    The action executes a defined API call. The API call requires a URL, a method and authorization details.

=== "Send E-Mail"
    The action sends an e-mail to specific recipients. A subject is required.

=== "Create object"
    The action creates a new object. It is possible to store attributes for categories.

=== "Update object"
    The action updates attributes for existing objects.

## Logs

The logs are visible for all flows or for the flow that is currently open. Important information about the executions is saved in the logs.

## CLI Commands

!!! success "If the command is to be executed for a client other than the first client, the corresponding [Client ID](../../automation-and-integration/cli/console/options-and-parameters-cli.md#tenant-list) must be passed."

!!! info "The Apache HTTP Server user name differs depending on the operating system."

The configuration of time-based flows requires that their triggering is guaranteed by regular execution of corresponding [CLI commands](../../automation-and-integration/cli/console/options-and-parameters-cli.md#tenant-list). This can be ensured by a cron job. The prerequisite for this is the provision of a valid time-based trigger. The executions are registered by calling the console command for time-based triggers.

```sh
sudo -u www-data php console.php flows:time-trigger --user admin --password admin --tenantId 1
```

After executing this command, the execution is registered. To perform the execution, the `flow:perform` command must be used, which will execute all registered executions in the queue:

```sh
sudo -u www-data php console.php flows:perform --user admin --password admin --tenantId 1
```

## Anwendungsfälle

!!! example "To be continued."

## Releases

| Version | Datum      | Changelog         |
| ------- | ---------- | ----------------- |
| 1.0     | 10.10.2024 | Initiales Release |
