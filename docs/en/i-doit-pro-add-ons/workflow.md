**Contents**

*   1[Workflow types](#Workflow-Workflowtypes)
*   2[The workflow](#Workflow-Theworkflow)
*   3[Predefined workflow types](#Workflow-Predefinedworkflowtypes)
*   4[Parameters of the templates](#Workflow-Parametersofthetemplates)
*   5[Workflows in the object](#Workflow-Workflowsintheobject)
*   6[Releases](#Workflow-Releases)

The Workﬂow system in i-doit is an extensible module that generates Workﬂows. Thus, one-time TASKS, but also recurring CHECKLISTS can be created and assigned to the responsible persons and objects. Involved persons are informed via status-based notifications.

  

Workflow types
--------------

The WORKFLOW-TYPE behaves like a template and includes all necessary parameters which are required for execution. This template can be edited via an administration interface. New templates can also be created via this interface.

The workflow
------------

A Workﬂow describes a scheduled action to be performed by the user, such as replacing the tape media of a specific backup server. Any Workﬂow assignment must be accepted by the appropriate people. After successful completion, a status report can be submitted.

Predefined workflow types
-------------------------

**Checklist**:  
A work order is a scheduled action to be performed by selectable users.

**Task**:  
The special Workﬂow type CHECKLISTS can be used to generate daily, weekly and yearly recurring Workﬂows by specifying a periodic time sequence to the pure start date and selecting the corresponding recurrence option.  
These recurring Workﬂows can also be terminated in a scheduled manner.

The name and the key for a new Workﬂow type can be freely chosen, the order specifies in which order the fields are displayed one below the other.  
Check for empty field gives an error message if the field is not filled in and an attempt is made to save the Workﬂow.

  

Parameters of the templates
---------------------------

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

Workflows in the object
-----------------------

Workflows can also be displayed in the object via the `**Workflows**` category. This must be added beforehand via the [object type configuration](/display/en/Assignment+of+Categories+to+Object+Types).

![](/download/attachments/82575489/image2021-12-23_15-9-33.png?version=1&modificationDate=1640268574201&api=v2&effects=drop-shadow)

Releases
--------

| Version | Datum | Changelog |
| --- | --- | --- |
| 1.1 | 2022-09-05 | \[Task\] PHP 8.0 Compatibility  <br>\[Task\] Design Compatibility |
| 1.0.6 | 2022-07-27 | \[Bug\] Error message when a workflow is accepted  <br>\[Bug\] The frequency of checklists cannot be used because the value is not saved |
| 1.0.5 | 2021-01-18 | \[Improvement\] Compatibility with i-doit 1.16 |
| 1.0.4 | 2020-08-10 | \[Bug\] Only the creator of a checklist is able to edit it |
| 1.0.3 | 2019-07-05 | ```<br>[Bug] Error Update Workflow Add-on 1.0.2<br>``` |
| 1.0.2 | 2019-05-20 | ```<br>[Bug] I-doit is also displayed in the sidebar via My-doit link[Bug] Console.php command workflows-process[Bug] ModuleID is missing in the notification[Bug] ModuleID is missing in the links of the Workflow category to the module<br>``` |
| 1.0.1 | 2019-01-09 | ```<br>[Bug] I-doit is also displayed in the sidebar<br>``` |
| 1.0 | 2018-12-17 | ```<br>[Improvement] Add-onizing the workflows<br>``` |