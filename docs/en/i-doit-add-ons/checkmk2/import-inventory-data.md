---
title: Import Inventory Data into the CMDB
description: "Do you let Checkmk monitor all your computers?"
icon:
status:
lang: en
---
# Import Inventory Data into the CMDB

Do you let Checkmk monitor all your computers? Do you let Checkmk collect basic information about your hardware/software? Then why not share this information with your CMDB? Import or update objects in i-doit by running:

[![Checkmk](../../assets/images/de/i-doit-add-ons/checkmk2/checkmk-hauptseite.png)](../../assets/images/de/i-doit-add-ons/checkmk2/checkmk-hauptseite.png)

```shell
idoitcmk pull
```

**Recommendation:** Run this command every time you change your WATO configuration in Checkmk or when Checkmk agents find new hardware/software information.

## Options

These options are available at runtime:

| Option                     | Required | Description                        |
| -------------------------- | ------------ | ----------------------------------- |
| --include-alias STRING     | No         | Filter hosts by alias            |
| --include-folder STRING    | No         | Filter hosts by WATO folder      |
| --include-hostname STRING  | No         | Filter hosts by name             |
| --include-ipaddress STRING | No         | Filter hosts by IPv4/v6 address  |
| --include-os STRING        | No         | Filter hosts by operating system   |
| --include-site STRING      | No         | Filter hosts by monitoring site  |
| --include-tag TAG          | No         | Filter hosts by tag              |

STRING means any character string including the wildcards *, ? and [ae]. Repeat the option to specify more than one STRING. Example: Retrieve all hosts with a GNU/Linux or Windows operating system:

```shell
idoitcmk pull --include-os "*Linux*" --include-os "*Windows*"
```

Any combination of these filters is logically combined with OR. For example, retrieve all hosts ending with .example.com or in the folder cloud:

```shell
idoitcmk pull --include-hostname "*.example.com" --include-folder "cloud"
```

TAG is like STRING but is a key/value combination with the tag name and its value. Example: Retrieve all hosts marked as business-critical:

```shell
idoitcmk pull --include-tag "criticality=critical"
```

## Configuration

These [settings](./konfiguration.md) are available:

| Key                   | Type     | Required | Default                                              | Description                                                                                             |
| --------------------- | ------- | ------------ | ----------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| pull.createObjects    | Boolean | No         | true                                                  | Unknown hosts are created as new objects                                                        |
| pull.objectType       | String  | No           | C__OBJTYPE__SERVER                                    | Set the object type constant for new objects                                                         |
| pull.updateObjects    | String  | No           | overwrite                                             | If the host is found in i-doit, existing category entries are overwritten or ignored |
| pull.identifier       | Array   | No         | ["title", "hostname", "fqdn", "hostaddress", "alias"] | Search for these identifiers to match hosts with objects; see section "Identifiers"         |
| pull.minMatch         | Integer | No           | 2                                                     | Object and host must share a minimum number of identifiers                                    |
| pull.attributes       | Array   | No           | _See section "Attributes"_                            | List of category constants to be changed; see section "Attributes"                 |
| pull.enableExport     | Boolean | No         | true                                                  | Write host configuration in the Check_MK Host category                                                 |
| pull.enableLivestatus | Boolean | No         | true                                                  | Write host configuration in the Monitoring category                                                     |
| pull.ports            | String  | No           | physical                                              | Add/update "physical" or "logical" network ports                         |
| roles.monitoring      | String  | No           | Monitoring                                            | i-doit role for contact groups used in contact assignments                            |
