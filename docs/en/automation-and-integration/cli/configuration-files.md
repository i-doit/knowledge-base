---
title: Using Configuration Files for the i-doit Console Utility
description: Guide for using .ini configuration files with the i-doit console utility.
icon:
status:
lang: en
---

# Using Configuration Files for the i-doit Console Utility

Using a configuration file (`.ini`) is a powerful method for executing console commands, especially complex ones. It allows you to predefine all options in a reusable file.

**Key advantages:**
* **Security**: Avoids directly entering passwords on the command line, where they can be logged in the shell history.
* **Simplicity**: Manages many options for complex commands like `ldap-sync` in a structured way.
* **Reusability**: Stores various configurations for different tasks without having to re-enter them each time.

!!! warning "Create a backup first"
    Please create a complete backup before making changes via an interface or import. If the result is not satisfactory, it can be restored.

-----

## The Structure of an `.ini` File

You can store your configuration files in any location for better organization. To specify a file, provide the path with the `--config` or `-c` option.

Every configuration file follows the same basic structure with three sections:

```ini
[commandArguments]
# For positional arguments. Not currently used by i-doit commands.

[commandOptions]
# For default command options like --user or --tenantId.
# Use the long name of the option without the preceding "--".
# Options without a value (flags) are simply listed by their name.
user=username
password=password
quiet

[additional]
# For special parameters required by certain commands,
# such as LDAP attribute mappings or syslog file paths.
```

-----

## Examples

### Example for the `search-index` Command

This example rebuilds the search index. The `update` option forces the recreation of an existing index, and `quiet` minimizes console output.

```ini title="search-index.ini"
[commandOptions]
user=username
password=password
tenantId=1
update
quiet

[additional]
```

**Execution:**

```shell
sudo -u www-data php console.php search-index -c /path/to/config/search-index.ini
```

[example-search_index.ini :material-file-download:](../../assets/images/en/automation-and-integration/cli/example-search_index.ini){ .md-button .md-button--primary }

-----

### Example for the `notifications-send` Command

This command sends pending notifications and only requires basic authentication options.

```ini title="notifications-send.ini"
[commandOptions]
user=username
password=password
tenantId=1

[additional]
```

**Execution:**

```shell
sudo -u www-data php console.php notifications-send -c /path/to/config/notifications-send.ini
```

[example-notifications-send.ini :material-file-download:](../../assets/images/en/automation-and-integration/cli/example-notifications-send.ini){ .md-button .md-button--primary }

-----

### Example for the `ldap-sync` Command

This is a complex command where a configuration file is strongly recommended. The `[additional]` section contains all LDAP-specific settings and attribute mappings.

```ini title="ldap-sync.ini"
[commandOptions]
user=username
password=password
tenantId=1

[additional]
import_rooms=false
defaultCompany=""
deletedUsersBehaviour=disable_login
disabledUsersBehaviour=disable_login
; LDAP attributes are individual. This default configuration is prepared for Active Directory:
attributes[department]=department
attributes[phone_company]=telephoneNumber
attributes[phone_home]=homephone
attributes[phone_mobile]=mobile
attributes[fax]=facsimileTelephoneNumber
attributes[description]=info
attributes[personnel_number]=initials
attributes[organization]=company
attributes[location]=physicalDeliveryOfficeName
attributes[salutation]=title
attributes[street]=streetAddress
attributes[city]=l
attributes[zip_code]=postalCode
attributes[function]=title
attributes[service_designation]=title
attributes[pager]=pager
;Custom category extension for persons
attributes[custom_1]=objectSid
attributes[custom_2]=sn
attributes[custom_3]=homePhone
attributes[custom_4]=mobile
attributes[custom_5]=info
attributes[custom_6]=manager
attributes[custom_7]=company
attributes[custom_8]=department
autoReactivateUsers=false
ignoreUsersWithAttributes[]="sn"
ignoreUsersWithAttributes[]="givenName"
ignoreFunction=empty
syncEmptyAttributes=true
```

**Explanation of the `[additional]` parameters:**

| Key                         | Value                                    | Description                                                                                                                                                                                                                                                                       |
| --------------------------- | ---------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `import_rooms`              | `true` or `false`                        | When `true`, the attribute `physicalDeliveryOfficeName` is imported and a corresponding room object is created if it does not exist.                                                                                                                                              |
| `defaultCompany`            | `"name of the organization"`             | Sets a default organization for imported users. Leave empty to make no changes.                                                                                                                                                                                                   |
| `deletedUsersBehaviour`     | `archive`, `delete`, or `disable_login`  | Defines what happens to i-doit users when they are deleted from LDAP.                                                                                                                                                                                                             |
| `disabledUsersBehaviour`    | `archive`, `delete`, or `disable_login`  | Defines what happens to i-doit users when they are disabled in LDAP.                                                                                                                                                                                                              |
| `attributes[]`              | `attributes[i-doit-field]=AD-Attribute`  | Maps an i-doit object attribute (key) to an LDAP attribute (value). If custom information should be stored, the [attribute extension](../../administration/management/import-and-interfaces/ldap/attribute-extension.md) can be enabled.                                       |
| `autoReactivateUsers`       | `true` or `false`                        | When `true`, all users are set to "normal" status before synchronization. Only required for OpenLDAP/NDS.                                                                                                                                                                         |
| `ignoreUsersWithAttributes[]` | `ignoreUsersWithAttributes[]="sn"`     | Prevents synchronization of users when a specified LDAP attribute is empty (e.g., `sn` for surname). Multiple attributes can be listed.                                                                                                                                           |
| `ignoreFunction`            | `empty`, `!empty`, `isset`, `!isset`     | The check function for `ignoreUsersWithAttributes`. `empty`, for example, checks whether the attribute value is empty or not set.                                                                                                                                                 |

**Execution:**

```shell
sudo -u www-data php console.php ldap-sync -c /path/to/config/ldap-sync.ini
```

[example-ldap.ini :material-file-download:](../../assets/images/en/automation-and-integration/cli/example-ldap.ini){ .md-button .md-button--primary }

-----

### Example for the `import-syslog` Command

This command imports syslog messages into the i-doit logbook. The configuration file defines which log files are read and how they should be parsed.

```ini title="import-syslog.ini"
[commandOptions]
user=username
password=password
tenantId=1

[additional]
; Regex for splitting a syslog line into parts such as date, hostname, process, and message.
regexSplitSyslogLine="/(^[a-zA-Z]{3}[ ]+[\d]+ [\d\:\d]+) (([.\-0-9a-zA-Z]+)*(\b(?:\d{1,3}\.){3}\d{1,3}\b)*)+ ([a-zA-Z0-9-_\/\[\]:]+) (.*)/"
; The names for the priority levels
priorities[]=Emergency
priorities[]=Alert
priorities[]=Critical
priorities[]=Error
priorities[]=Warning
priorities[]=Notice
priorities[]=Info
priorities[]=Debug
; The log files to monitor
logfiles[]="/var/log/system.log"
; The i-doit alarm level assigned to each priority
alertlevels[] = 4
alertlevels[] = 4
alertlevels[] = 3
alertlevels[] = 3
alertlevels[] = 2
alertlevels[] = 2
alertlevels[] = 1
alertlevels[] = 1
```

**Execution:**

```shell
sudo -u www-data php console.php import-syslog -c /path/to/config/import-syslog.ini
```
