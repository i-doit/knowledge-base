---
title: Using configuration files for the i-doit console utility
description: How to use .ini configuration files to run i-doit console utility.
icon:
status:
lang: en
---

# Using configuration files for i-doit console utility

Using a configuration file (`.ini`) is a powerful way to run console commands, especially complex ones. It allows you to pre-define all your options in a reusable file.

**Key Benefits:**
* **Security**: Avoids typing passwords directly into the command line where they can be logged in your shell history.
* **Simplicity**: Manages many options for complex commands like `ldap-sync` in a structured way.
* **Reusability**: Saves different configurations for different tasks without having to re-type them every time.

!!! warning "Backup First"
    Please create a complete backup before making any changes with an interface or import. If the result is not satisfying, it can then be restored.

-----

## The Structure of an `.ini` File

You can save your configuration files everywhere you want for better organization. To use one, specify the path with the `--config` or `-c` option.

Every configuration file follows the same basic structure with three sections:

```ini
[commandArguments]
# For positional arguments. Currently not used by i-doit commands.

[commandOptions]
# For standard command options like --user or --tenantId.
# Use the long-form name of the option without the preceding "--".
# Options without a value (flags) are simply listed by name.
user=username
password=password
quiet

[additional]
# For special parameters required by specific commands,
# like LDAP attribute mapping or syslog file paths.
```

-----

## Examples

### Example for the command `search-index`

This example rebuilds the search index. The `update` option forces a rebuild of an existing index, and `quiet` minimizes the console output.

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

### Example for the command `notifications-send`

This command sends out pending notifications and requires only basic authentication options.

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

### Example for the command `ldap-sync`

This is a complex command where a configuration file is highly recommended. The `[additional]` section contains all the LDAP-specific settings and attribute mappings.

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
; LDAP Attributes are individual. This default configuration is prepared for Active Directory:
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

**Explanation of `[additional]` Parameters:**

| Key                           | Value                                   | Description                                                                                                                                                                                                                                    |
| ----------------------------- | --------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `import_rooms`                | `true` or `false`                       | If `true`, imports the `physicalDeliveryOfficeName` attribute and creates a corresponding room object if it doesn't exist.                                                                                                                     |
| `defaultCompany`              | `"Name of Organization"`                | Sets a default organization for imported users. Leave empty to make no changes.                                                                                                                                                                |
| `deletedUsersBehaviour`       | `archive`, `delete` or `disable_login`  | Defines what happens to i-doit users when they are deleted from LDAP.                                                                                                                                                                          |
| `disabledUsersBehaviour`      | `archive`, `delete` or `disable_login`  | Defines what happens to i-doit users when they are disabled in LDAP.                                                                                                                                                                           |
| `attributes[]`                | `attributes[i-doit field]=AD Attribute` | Maps an i-doit object attribute (key) to an LDAP attribute (value). If you want to save custom information, you can enable [Category extension](../../system-administration/administration/import-and-interfaces/ldap/attribute-extension.md). |
| `autoReactivateUsers`         | `true` or `false`                       | If `true`, all users are set to "normal" status before sync. Only needed for OpenLDAP/NDS.                                                                                                                                                     |
| `ignoreUsersWithAttributes[]` | `ignoreUsersWithAttributes[]="sn"`      | Prevents synchronization of users if a specified LDAP attribute is empty (e.g., `sn` for last name). You can list multiple attributes.                                                                                                         |
| `ignoreFunction`              | `empty`, `!empty`, `isset`, `!isset`    | The check used for `ignoreUsersWithAttributes`. For example, `empty` checks if the attribute value is empty or not set.                                                                                                                        |

**Execution:**

```shell
sudo -u www-data php console.php ldap-sync -c /path/to/config/ldap-sync.ini
```

[example-ldap.ini :material-file-download:](../../assets/images/en/automation-and-integration/cli/example-ldap.ini){ .md-button .md-button--primary }

-----

### Example for the command `import-syslog`

This command imports syslog messages into the i-doit logbook. The configuration file defines which log files to read and how to parse them.

```ini title="import-syslog.ini"
[commandOptions]
user=username
password=password
tenantId=1

[additional]
; Regex to split a syslog line into parts like date, hostname, process, and message.
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
; The i-doit alert level to assign for each priority
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
