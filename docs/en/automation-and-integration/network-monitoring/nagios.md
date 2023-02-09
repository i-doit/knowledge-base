Nagios is a software for [Network Monitoring](/display/en/Network+Monitoring) which can be configured from data of the [IT documentation](/display/en/Glossary). By this means, you can avoid that data have to be maintained twice and you can minimize errors. The export function available in i-doit allows the creation of complete or partial configurations. For this purpose, you manually create Nagios configurations in the i-doit interface or you fill it with values automatically.

Compatibility

The exported data are compatible with Nagios Version 3 and Icinga Version 1. Nagios Version 4 is not completely compatible. Other Nagios versions are not supported.

Basic Configuration
-------------------

**Contents**

*   1[Basic Configuration](#Nagios-BasicConfiguration)
*   2[Basic Configurations](#Nagios-BasicConfigurations)
*   3[Configuration in Objects](#Nagios-ConfigurationinObjects)
*   4[Export of the Nagios Configuration](#Nagios-ExportoftheNagiosConfiguration)
*   5[Changelog](#Nagios-Changelog)

You store the configuration under `**Administration → Interfaces / External Data → Monitoring → Export Configuration**`. The `**Local Path**` defines an absoulte or relative path to the i-doit installation in the file system in which the configuration created by i-doit is to be stored. The **`Link to your monitoring tool`** specifies a basic link to generate links to the monitoring instance from i-doit.

![](/download/attachments/66355717/1.png?version=2&modificationDate=1606810715716&api=v2)

Basic Configurations
--------------------

You can create the basic configurations under **`Extras → Nagios`**.

![](/download/attachments/66355717/2.png?version=1&modificationDate=1606810667244&api=v2)

This includes the main configuration, service templates and host templates as well as other basic settings. All values are identical to the Nagios configuration.

Configuration in Objects
------------------------

All further configurations are carried out within the [objects](../../basics/structure-of-the-it-documentation.md). The easiest case is the configuration of host parameters. For this purpose, the `**Nagios (Host)**`[category](../../basics/structure-of-the-it-documentation.md) folder has to be assigned to the desired [object type](../../basics/structure-of-the-it-documentation.md) via the ``**[**`Quick Configuration Wizard`**](/display/en/Assignment+of+Categories+to+Object+Types)**``.

In the category `**Host Definition**` a host definition for Nagios can be set either via a Nagios template or via individual configuration.

![](/download/attachments/66355717/3.png?version=1&modificationDate=1606810675375&api=v2)

The concept of host templates and service templates is identical to the original Nagios configuration.

Service checks defined in the basic configuration are assigned to a host via the `**Service Assignment**` category.

Later on, this results in the configuration of a classic host/ service assignment. Additionally, there is a second way of assigning services to hosts, namely by inheriting through a software object.

A service check is assigned in a software object in the **`Nagios (Applications)`** category, analogous to the assignment to a host.

If this application is installed on a host via the **`Software Assignment`** category, then the service check is inherited to the host automatically.

Further Nagios configurations within objects can be found in **`Persons`** objects as well as in `**Personen groups **`and in `**Object groups**`.

Export of the Nagios Configuration
----------------------------------

The Nagios configurations can be exported manually via `**Administration**` `**→ Interfaces/ external data → Monitoring → Nagios Export**` . For this purpose, you select an export configuration and optionally you can also choose a validation of the parameters.

![](/download/attachments/66355717/1.png?version=2&modificationDate=1606810715716&api=v2)

The validation checks basic dependencies, for example, if an IP address has been entered for a host etc. This check is supposed to prevent the generation of corrupt Nagios configurations. This, however, is not a 100% safe protection so you should always run a test with the Nagios binary checking the generated configuration.

The configuration files are stored according to the configured path on the file system and correspond the values that have been configured in the categories.![](https://lh5.googleusercontent.com/Ah40XNq3usBlkC94ZdfrYEi3BWP1pRCkRYJz_kKl1j5mn4iSFLzsAzqxxtZcDHWIxViTSaZ5bnqdC7BY2My3jUeJEoNaMCToxrjgBAy1h_x3X16p1wFXVr2t6zZPTfgeLmm-ZX-K)

The export of the files can be automated via the [controller](https://kb.i-doit.com/pages/viewpage.action?pageId=37355566) of course. For this purpose, the handler **`nagios_export`** is run while stating the export configuration ID using the parameter **`-n ID`**.

  

  

Changelog
---------

| Version | Date | Changelog |
| --- | --- | --- |
| 1.1 | 2022-09-05 | \[Task\] PHP 8.0 Compatibility  <br>\[Task\] Design Compatibility |
| 1.0.3 |     | \[Improvement\] Compatibility with i-doit 1.16 |
| 1.0.2 |     | \[Bug\] The Nagios category cannot be opened among persons  <br>\[Bug\] Clicking on "Edit" after saving an object, navigates to object list  <br>\[Bug\] Click on "Edit" in object list should be only possible if object is selected |
| 1.0.1 |     | \[Bug\] Creation of Nagios tables is performed in the wrong order |
| 1.0 |     | \[Change\] Add-onize Nagios |