# Import inventory data into CMDB

You let checkmk monitor all your hosts? You let checkmk collect basic information about your hardware/software? Well, why not share these information with your CMDB? Import or update objects in i-doit by running:

```shell
idoitcmk pull
```

**Recommendation:** Run this command every time you alter your WATO configuration in checkmk or whenever checkmk's inventory agents find new hardware/software information.

## Options

These options are available during runtime:

| Option                     | Required | Description                      |
| -------------------------- | -------- | -------------------------------- |
| --include-alias STRING     | No       | Filter hosts by alias            |
| --include-folder STRING    | No       | Filter hosts by WATO folder      |
| --include-hostname STRING  | No       | Filter hosts by name             |
| --include-ipaddress STRING | No       | Filter hosts by IPv4/v6 address  |
| --include-os STRING        | No       | Filter hosts by operating system |
| --include-site STRING      | No       | Filter hosts by monitoring site  |
| --include-tag TAG          | No       | Filter hosts by tag              |

STRING means any string including wildcards *, ? and [ae]. Repeat option to match more than one STRING. For example, fetch all hosts with a GNU/Linux or Windows operating system:

```shell
idoitcmk pull --include-os "*Linux*" --include-os "*Windows*"
```

Any combination of these filters are logically combined by or. For example, fetch all hosts with suffix .example.com or in folder cloud:

```shell
idoitcmk pull --include-hostname "*.example.com" --include-folder "cloud"
```

TAG is like STRING but is a key/value combination with the tag name and its value. For example, fetch all hosts marked as business critical:

```shell
idoitcmk pull --include-tag "criticality=critical"
```

## Configuration

These [configuration settings](./configuration.md) are available:

| Key                   | Type    | Required | Default                                               | Description                                                                       |
| --------------------- | ------- | -------- | ----------------------------------------------------- | --------------------------------------------------------------------------------- |
| pull.createObjects    | Boolean | No       | true                                                  | Unknown hosts will be created as new objects                                      |
| pull.objectType       | String  | No       | C__OBJTYPE__SERVER                                    | Set the object type constant for new objects                                      |
| pull.updateObjects    | String  | No       | overwrite                                             | If host is found in i-doit overwrite existing category entries, or ignore them    |
| pull.identifier       | Array   | No       | ["title", "hostname", "fqdn", "hostaddress", "alias"] | Look for these identifiers to match hosts with objects; see section "Identifiers" |
| pull.minMatch         | Integer | No       | 2                                                     | Object and host must share a minimum amount of identifiers                        |
| pull.attributes       | Array   | No       | _See section "Attributes"_                            | List of category constants which will be altered; see section "Attributes"        |
| pull.enableExport     | Boolean | No       | true                                                  | Write host configuration to category Check_MK Host                                |
| pull.enableLivestatus | Boolean | No       | true                                                  | Write host configuration to category Monitoring                                   |
| pull.ports            | String  | No       | physical                                              | Add/update physical or logical network ports                                      |
| roles.monitoring      | String  | No       | Monitoring                                            | i-doit role for contact groups used in contact assignments                        |
