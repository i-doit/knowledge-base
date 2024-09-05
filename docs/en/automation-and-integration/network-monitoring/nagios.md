# Nagios

Nagios is a software for [Network Monitoring](./index.md) which can be configured from data of the [IT documentation](../../glossary.md). By this means, you can avoid that data have to be maintained twice and you can minimize errors. The export function available in i-doit allows the creation of complete or partial configurations. For this purpose, you manually create Nagios configurations in the i-doit interface or you fill it with values automatically.

!!! info "Compatibility"
    The exported data are compatible with Nagios Version 3 and Icinga Version 1. Nagios Version 4 is not completely compatible. Other Nagios versions are not supported.

## Basic Configuration

You store the configuration under **Administration → Monitoring and interfaces → Monitoring → Export Configuration**. The **Local Path** defines an absolute or relative path to the i-doit installation in the file system in which the configuration created by i-doit is to be stored. The **Link to your monitoring tool** specifies a basic link to generate links to the monitoring instance from i-doit.

[![Basic Configurations](../../assets/images/en/automation-and-integration/network-monitoring/nagios/1-nag.png)](../../assets/images/en/automation-and-integration/network-monitoring/nagios/1-nag.png)

## Basic Configurations

You can create the basic configurations under **Extras → Nagios**.

[![Basic Configurations](../../assets/images/en/automation-and-integration/network-monitoring/nagios/2-nag.png)](../../assets/images/en/automation-and-integration/network-monitoring/nagios/2-nag.png)

This includes the main configuration, service templates and host templates as well as other basic settings. All values are identical to the Nagios configuration.

## Configuration in Objects

All further configurations are carried out within the [objects](../../basics/structure-of-the-it-documentation.md). The easiest case is the configuration of host parameters. For this purpose, the **Nagios (Host)**[category](../../basics/structure-of-the-it-documentation.md) folder has to be assigned to the desired [object type](../../basics/structure-of-the-it-documentation.md) via the **[Edit data structure](../../basics/assignment-of-categories-to-object-types.md)**.

In the category **Host Definition** a host definition for Nagios can be set either via a Nagios template or via individual configuration.

[![Host Definition](../../assets/images/en/automation-and-integration/network-monitoring/nagios/3-nag.png)](../../assets/images/en/automation-and-integration/network-monitoring/nagios/3-nag.png)

The concept of host templates and service templates is identical to the original Nagios configuration.

Service checks defined in the basic configuration are assigned to a host via the **Service Assignment** category.

Later on, this results in the configuration of a classic host/ service assignment. Additionally, there is a second way of assigning services to hosts, namely by inheriting through a software object.

A service check is assigned in a software object in the **Nagios (Applications)** category, analogous to the assignment to a host.

If this application is installed on a host via the **Software Assignment** category, then the service check is inherited to the host automatically.

Further Nagios configurations within objects can be found in **Persons** objects as well as in **Personen groups** and in **Object groups**.

## Export of the Nagios Configuration

The Nagios configurations can be exported manually via **Administration → Monitoring and interfaces → Nagios Export** . For this purpose, you select an export configuration and optionally you can also choose a validation of the parameters.

[![Export of the Nagios Configuration](../../assets/images/en/automation-and-integration/network-monitoring/nagios/4-nag.png)](../../assets/images/en/automation-and-integration/network-monitoring/nagios/4-nag.png)

The validation checks basic dependencies, for example, if an IP address has been entered for a host etc. This check is supposed to prevent the generation of corrupt Nagios configurations. This, however, is not a 100% safe protection so you should always run a test with the Nagios binary checking the generated configuration.

The configuration files are stored according to the configured path on the file system and correspond the values that have been configured in the categories.

The export of the files can be automated via the [controller](../cli/index.md) of course. For this purpose, the handler **nagios_export** is run while stating the export configuration ID using the parameter **-n ID**.

## CLI console commands and options

| Command                             | Internal system description                                                  |
| ----------------------------------- | ---------------------------------------------------------------------------- |
| [nagios-export](#nagios-export)     | Exports the Nagios settings and i-doit objects to Nagios configuration files |
| [nagios-ndoutils](#nagios-ndoutils) | Imports monitoring status changes from the NDOUtils into the i-doit logbook. |

!!! info "These commands are only available if the Nagios add-on is installed"

### nagios-export

Exports the Nagios settings and i-doit objects to Nagios configuration files

**Options:**

| Parameter (short version) | Parameter (long version)    | Description                                                                                  |
| ------------------------- | --------------------------- | -------------------------------------------------------------------------------------------- |
|                           | --nagiosHostId=NAGIOSHOSTID | Specifies the Nagios host to be used for the export                                          |
|                           | --validate                  | Validates the export files                                                                   |
| -u                        | --user=USERNAME             | Username of a user who is authorized to execute                                              |
| -p                        | --password=PASSWORD         | Password for authentication of the previously specified user                                 |
| -i                        | --tenantId=TENANT-ID        | Tenant ID of the tenant to be used (default: 1)                                              |
| -c                        | --config=CONFIG-FILE        | Specifying the path to the configuration file                                                |
| -h                        | --help                      | Help message for displaying further information                                              |
| -q                        | --quiet                     | Quiet-Mode to deactivate output                                                              |
| -V                        | --version                   | Output of the i-doit Console version                                                         |
|                           | --ansi<br>--no-ansi         | Force (or disable --no-ansi) ANSI output                                                     |
| -n                        | --no-interaction            | Disables all interaction questions of the i-doit Console                                     |
| -v / -vv / -vvv           | --verbose                   | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

```shell
sudo -u www-data php console.php nagios-export --user admin --password admin --tenantId 1 --nagiosHostId 1
```

### nagios-ndoutils

Imports monitoring status changes from the NDOUtils into the i-doit logbook.

**Options:**

| Parameter (short version) | Parameter (long version) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
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
sudo -u www-data php console.php nagios-ndoutils --user admin --password admin --tenantId 1
```

## Changelog

| Version | Date       | Changelog                                                                                                                                                                                                                       |
| ------- | ---------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| 1.2     | 2024-07-09 | [Bug] Server error when open Nagios category                                                                                                                                                                                    |
| 1.1.1   | 2023-08-22 | [Improvement] PHP 8.1 Compatibility                                                                                                                                                                                             |
| 1.1     | 2022-09-05 | [Task] PHP 8.0 Compatibility  <br>[Task] Design Compatibility                                                                                                                                                                   |
| 1.0.3   |            | [Improvement] Compatibility with i-doit 1.16                                                                                                                                                                                    |
| 1.0.2   |            | [Bug] The Nagios category cannot be opened among persons  <br>[Bug] Clicking on "Edit" after saving an object, navigates to object list  <br>[Bug] Click on "Edit" in object list should be only possible if object is selected |
| 1.0.1   |            | [Bug] Creation of Nagios tables is performed in the wrong order                                                                                                                                                                 |
| 1.0     |            | [Change] Add-onize Nagios                                                                                                                                                                                                       |
