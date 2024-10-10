# Workflow

The Workﬂow system in i-doit is an extensible module that generates Workﬂows. Thus, one-time TASKS, but also recurring CHECKLISTS can be created and assigned to the responsible persons and objects. Involved persons are informed via status-based notifications.

## Workflow types

The WORKFLOW-TYPE behaves like a template and includes all necessary parameters which are required for execution. This template can be edited via an administration interface. New templates can also be created via this interface.

## The workflow

A Workﬂow describes a scheduled action to be performed by the user, such as replacing the tape media of a specific backup server. Any Workﬂow assignment must be accepted by the appropriate people. After successful completion, a status report can be submitted.

## Predefined workflow types

**Checklist**:
A work order is a scheduled action to be performed by selectable users.

**Task**:
The special Workﬂow type CHECKLISTS can be used to generate daily, weekly and yearly recurring Workﬂows by specifying a periodic time sequence to the pure start date and selecting the corresponding recurrence option.
These recurring Workﬂows can also be terminated in a scheduled manner.

The name and the key for a new Workﬂow type can be freely chosen, the order specifies in which order the fields are displayed one below the other.
Check for empty field gives an error message if the field is not filled in and an attempt is made to save the Workﬂow.

## Parameters of the templates

For the two Workﬂow types TASK (work order) and CHECKLIST there are already predefined parameters, which are taken into account when a new Workﬂow is created.
The two date types for start and end date are automatically created for each newly created Workﬂow type.
The other parameters can be created and assigned to a new type as desired:

*   Text
*   Single line text field
*   Fulltext
*   Multiline text field
*   Numeric
*   Numeric text field
*   Date
*   Text field with date
*   Yes / No
*   Two radio buttons for selection

## Workflows in the object

Workflows can also be displayed in the object via the **Workflows** category. This must be added beforehand via the [object type configuration](../basics/assignment-of-categories-to-object-types.md).

[![workflow](../assets/images/en/i-doit-add-ons/workflow/1-wf.png)](../assets/images/en/i-doit-add-ons/workflow/1-wf.png)

## CLI console commands and options

| Command                                 | Internal system description                                                  |
| --------------------------------------- | ---------------------------------------------------------------------------- |
| [workflows-process](#workflows-process) | Processes all workflows, sends e-mails and creates new tasks from checklists |

!!! info "This command is only available if the Workflow add-on is installed"

### workflows-process

Processes all workflows, sends e-mails and creates new tasks from checklists

**Options:**

| Parameter (short version) | Parameter (long version) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
| -t                        | --types=TYPES            | Workflow types (multiple values allowed)                                                     |
| -u                        | --user=USERNAME          | Username of a user who is authorized to execute                                              |
| -p                        | --password=PASSWORD      | Password for authentication of the previously specified user                                 |
| -i                        | --tenantId=TENANT-ID     | Tenant ID of the tenant to be used (default: 1)                                              |
| -c                        | --config=CONFIG-FILE     | Specifying the path to the configuration file                                                |
| -h                        | --help                   | Help message for displaying further information                                              |
| -q                        | --quiet                  | Quiet-Mode to deactivate output                                                              |
| -V                        | --version                | Output of the i-doit Console version                                                         |
|                           | --ansi<br>--no-ansi      | Force (or disable --no-ansi) ANSI output                                                     |
| -n                        | --no-interaction         | Disables all interaction questions of the i-doit Console                                     |
| -v / -vv / -vvv           | --verbose                | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

```shell
sudo -u www-data php console.php workflows-process --user admin --password admin --tenantId 1 --types task --types checklist
```

## Releases

| Version | Datum      | Changelog                                                                                                                                                                                                                                       |
| ------- | ---------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| 1.4     | 2024-10-10 | [Bug] Fix autoload issue during add-on installation                                                                                                                                                                                             |
| 1.3     | 2024-07-09 | [Bug] Workflow Add-on User Permissions are not available<br>[Bug] This task is part of the following checklist link does not work<br>[Bug] Dependent tasks are not displayed in checklists                                                      |
| 1.2     | 2023-11-07 | [Task] Use new routes to display object and object type images / move add-on related files                                                                                                                                                      |
| 1.1.1   | 2023-08-22 | [Improvement] PHP 8.1 Compatibility                                                                                                                                                                                                             |
| 1.1     | 2022-09-05 | [Task] PHP 8.0 Compatibility  <br>[Task] Design Compatibility                                                                                                                                                                                   |
| 1.0.6   | 2022-07-27 | [Bug] Error message when a workflow is accepted  <br>[Bug] The frequency of checklists cannot be used because the value is not saved                                                                                                            |
| 1.0.5   | 2021-01-18 | [Improvement] Compatibility with i-doit 1.16                                                                                                                                                                                                    |
| 1.0.4   | 2020-08-10 | [Bug] Only the creator of a checklist is able to edit it                                                                                                                                                                                        |
| 1.0.3   | 2019-07-05 | [Bug] Error Update Workflow Add-on 1.0.2                                                                                                                                                                                                        |
| 1.0.2   | 2019-05-20 | [Bug] I-doit is also displayed in the sidebar via My-doit link<br>[Bug] Console.php command workflows-process<br>[Bug] ModuleID is missing in the notification<br>[Bug] ModuleID is missing in the links of the Workflow category to the module |
| 1.0.1   | 2019-01-09 | [Bug] I-doit is also displayed in the sidebar                                                                                                                                                                                                   |
| 1.0     | 2018-12-17 | [Improvement] Add-onizing the workflows                                                                                                                                                                                                         |
