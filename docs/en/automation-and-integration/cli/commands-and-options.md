---
title: Commands and Options
description: "Activates installed add-ons for the desired tenant"
icon: material/console
lang: en
---

# Commands and Options

!!! warning "Please create a complete backup before making any changes to an interface/import. If the result is not satisfactory, the backup can then be restored"

!!! attention "Notes"
    All examples on this page refer to the usage of the i-doit user with the combination username/password: **admin**/**admin**.<br>
    All parameters are case-sensitive, meaning that upper and lower case must be followed exactly according to the examples and specifications.

## The following commands are available for the i-doit console

| Command                                                                    | Internal description                                                                                                                                                       |
| ------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| [addon-activate](#addon-activate)                                         | Activate add-ons                                                                                                                                                     |
| [addon-deactivate](#addon-deactivate)                                     | Deactivate add-ons                                                                                                                                                   |
| [addon-install](#addon-install)                                           | Install add-ons                                                                                                                                                   |
| [addon-list](#addon-list)                                                 | Shows a list of all installed add-ons                                                                                                                        |
| [addon-uninstall](#addon-uninstall)                                       | Deactivation of add-ons                                                                                                                                                  |
| [admin-center-password-reset](#admin-center-password-reset)               | Reset password for the Admin Center                                                                                                                                 |
| [auth-cleanup](#auth-cleanup)                                             | Clean up the authorization system                                                                                                                                                    |
| [clear-credentials](#clear-credentials)                                   | Removes the login credentials of users                                                                                                                            |
| [completion](#completion)                                                 | Output the shell completion script                                                                                                                                |
| [contracts-outdated](#contracts-outdated)                                 | Updates the status of expired contracts                                                                                                                             |
| [extend-contracts](#extend-contracts)                                     | Extends the runtime of a contract when its last possible cancellation date is in the past                                                              |
| [help](#help)                                                             | Displays the help for a command                                                                                                                                         |
| [import-csv](#import-csv)                                                 | Import data from a CSV file (uses a defined import profile from the GUI)                                                                                  |
| [import-csvprofiles](#import-csvprofiles)                                 | List all CSV import profiles                                                                                                                                          |
| [import-hinventory](#import-hinventory)                                   | Import data from h-inventory                                                                                                                                          |
| [import-jdisc](#import-jdisc)                                             | Import data from JDisc Discovery (SQL server access is configured via the GUI)                                                                                  |
| [import-jdiscdiscovery](#import-jdiscdiscovery)                           | Start a scan in JDisc Discovery (API access is configured via the GUI)                                                                                         |
| [import-syslog](#import-syslog)                                           | Import data from a syslog into the i-doit logbook                                                                                                               |
| [import-xml](#import-xml)                                                 | Import data from XML                                                                                                                                                  |
| [install](#install)                                                       | Installs i-doit                                                                                                                                                         |
| [jdisc-create-server](#jdisc-create-server)                               | Creates a JDisc server based on a given input                                                                                                          |
| [ldap-sync](#ldap-sync)                                                   | Import persons and person groups from an [LDAP directory or Active Directory (AD)](../../user-authentication-and-management/ldap-directory/index.md) |
| [ldap-syncdn](#ldap-sync)                                                 | Synchronize the Distinguished Name (DN) of users from an LDAP/AD (see LDAP category)                                                                           |
| [license-add](#license-add)                                               | Adds a license for i-doit (in progress)                                                                                                                         |
| [license-assign](#license-assign)                                         | Assigns a hosting license to a tenant (in progress)                                                                                                              |
| [license-import](#license-import)                                         | Imports licenses from the i-doit server (in progress)                                                                                                                     |
| [license-key](#license-key)                                               | Sets a license key for i-doit (in progress)                                                                                                                    |
| [license-list](#license-list)                                             | Lists all licenses with all information (ID; product; type; start date; end date; licensed objects; licensed tenants; environment)                            |
| [license-remove](#license-remove)                                         | Removes licenses from i-doit                                                                                                                                               |
| [list](#list)                                                             | Lists all console commands                                                                                                                                          |
| [logbook:archive](#logbookarchive)                                        | Archive logbook entries                                                                                                                                               |
| [migrate-uploaded-files](#migrate-uploaded-files)                         | Migrates uploaded files from i-doit <v1.13 to v.1.14>                                                                                                                 |
| [notifications-list](#notifications-list)                                 | Lists all [notifications](../../evaluation/notifications.md)                                                                                             |
| [notifications-send](#notifications-send)                                 | Send notifications via email (notifications are configured in the GUI)                                                                                |
| [report-export](#report-export)                                           | Export a report as a file                                                                                                                                         |
| [report-refresher](#report-refresher)                                     | Refreshes one or all reports.                                                                                                                                     |
| [search](#search)                                                         | Search in i-doit                                                                                                                                                           |
| [search-index](#search-index)                                             | Create/renew search index                                                                                                                                               |
| [strip-description-html](#strip-description-html)                         | This command allows you to remove HTML tags from the description field of all categories and objects                                                                         |
| [sync-dynamic-groups](#sync-dynamic-groups)                               | Re-synchronizes dynamic group members                                                                                                                            |
| [system-autoincrement](#system-autoincrement)                             | Set auto_increment of MariaDB/MySQL tables to a positive integer value (affects data structure! Use with caution!)                                   |
| [system-categorycleanup](#system-categorycleanup)                         | Optionally cleans up category entries with status incomplete, archived, or deleted                                                                       |
| [system-checkforupdates](#system-checkforupdates)                         | Check for updates for i-doit                                                                                                                                    |
| [system-convert-non-innodb-tables](#system-convert-non-innodb-tables)     | Converts all non-InnoDB tables to InnoDB (affects database encoding. Use with caution!)                                                |
| [system-convert-non-utf8-tables](#system-convert-non-utf8-tables)         | Converts all non-UTF-8 tables to UTF-8 tables (affects database encoding. Use with caution!)                                                             |
| [system-location-fix](#system-location-fix)                               | Executes the location correction from the GUI in the console                                                                                                                |
| [system-objectcleanup](#system-objectcleanup)                             | Clean up objects (objects with status "incomplete", "archived", or "deleted" are permanently removed)                                                             |
| [system-objectrelations](#system-objectrelations)                         | Rebuild object relationships                                                                                                                                            |
| [system-refresh-table-configuration](#system-refresh-table-configuration) | Renews all available list configurations (object types and categories)                                                                                               |
| [system-set-settings](#system-set-settings)                               | Allows setting Admin Center settings via the CLI                                                                                                          |
| [tenant-create](#tenant-create)                                           | Add a new tenant                                                                                                                                           |
| [tenant-disable](#tenant-disable)                                         | Disable an existing tenant                                                                                                                                   |
| [tenant-enable](#tenant-enable)                                           | Enable an existing tenant                                                                                                                                     |
| [tenant-list](#tenant-list)                                               | List all available tenants                                                                                                                                       |
| [tenant-remove](#tenant-remove)                                           | Remove an existing tenant                                                                                                                                      |
| [uninstall](#uninstall)                                                   | Uninstalls i-doit                                                                                                                                                       |
| [update](#update)                                                         | Install an i-doit update                                                                                                                                             |
| [idoit:feature-manager](#idoitfeature-manager)                            | This command allows you to activate features in i-doit                                                                                                          |
| [idoit:set-env-var](#idoitset-env-var)                                    | This command allows you to set environment variables for i-doit.                                                                                                 |
| [idoit:set-update-capability](#idoitset-update-capability)                | Enable and disable the i-doit update function                                                                                                                     |
| [system:tenant-export](#systemtenant-export)                              | Export your tenant data including uploaded files in a ZIP package                                                                                         |
| [system:tenant-import](#systemtenant-import)                              | Import your tenant data including uploaded files from a ZIP package                                                                                        |

!!! attention "Configuration file and --config parameter"
    It is possible to pass additional content via a configuration file. This file must be placed in the i-doit directory src/handler/config/. An example in the form of the file "isys_handler_ldap.ini" can be found in the directory src/handler/config/examples/.<br>
    If this file should be considered during the process, it must be included via the --config or -c parameter.

### addon-activate

Activates installed add-ons for the desired tenant

**Options:**

| parameter (short) | parameter (long)  | Description                                                                                     |
| -------------------- | --------------------- | ------------------------------------------------------------------------------------------------ |
| -u                   | --user=[USERNAME]     | Username of a user authorized for execution                                      |
| -p                   | --password=[PASSWORD] | Password for authentication of the previously specified user                                   |
| -a                   | --addon=[ADDON]       | Add-on identifier (multiple values allowed)                                                          |
| -t                   | --tenant=[TENANT-ID]  | Tenant ID (multiple values allowed)                                                            |
| -h                   | --help                | Help message for displaying further information                                            |
| -q                   | --quiet               | Quiet mode to suppress output                                                       |
| -V                   | --version             | Output of the i-doit console version                                                           |
|                      | --ansi<br>--no-ansi   | Force ANSI output (or disable with --no-ansi)                                             |
| -n                   | --no-interaction      | Disables all interaction questions of the i-doit console                                      |
| -v / -vv / -vvv      | --verbose             | Increases the verbosity of output (1 = normal output, 2 = detailed output, 3 = debug level) |

**Usage example**

```shell
sudo -u www-data php console.php addon-activate --user admin --password admin --tenant 1 --addon api
```

### addon-deactivate

Deactivates installed add-ons for the desired tenant

**Options:**

| parameter (short) | parameter (long)  | Description                                                                                     |
| -------------------- | --------------------- | ------------------------------------------------------------------------------------------------ |
| -u                   | --user=[USERNAME]     | Username of a user authorized for execution                                      |
| -p                   | --password=[PASSWORD] | Password for authentication of the previously specified user                                   |
| -a                   | --addon=[ADDON]       | Add-on identifier (multiple values allowed)                                                          |
| -t                   | --tenant=[TENANT-ID]  | Tenant ID (multiple values allowed)                                                            |
| -h                   | --help                | Help message for displaying further information                                            |
| -q                   | --quiet               | Quiet mode to suppress output                                                       |
| -V                   | --version             | Output of the i-doit console version                                                           |
|                      | --ansi<br>--no-ansi   | Force ANSI output (or disable with --no-ansi)                                             |
| -n                   | --no-interaction      | Disables all interaction questions of the i-doit console                                      |
| -v / -vv / -vvv      | --verbose             | Increases the verbosity of output (1 = normal output, 2 = detailed output, 3 = debug level) |

**Usage example**

```shell
sudo -u www-data php console.php addon-deactivate --user admin --password admin --tenant 1 --addon api
```

### addon-install

Installs add-ons for the desired tenant

**Options:**

| parameter (short) | parameter (long)  | Description                                                                                     |
| -------------------- | --------------------- | ------------------------------------------------------------------------------------------------ |
| -u                   | --user=[USERNAME]     | Username of a user authorized for execution                                      |
| -p                   | --password=[PASSWORD] | Password for authentication of the previously specified user                                   |
| -z                   | --zip=[ZIP]           | Path to the add-on ZIP file                                                                        |
| -a                   | --addon=[ADDON]       | Add-on identifier (multiple values allowed)                                                          |
| -t                   | --tenant=[TENANT-ID]  | Tenant ID (multiple values allowed)                                                            |
| -h                   | --help                | Help message for displaying further information                                            |
| -q                   | --quiet               | Quiet mode to suppress output                                                       |
| -V                   | --version             | Output of the i-doit console version                                                           |
|                      | --ansi<br>--no-ansi   | Force ANSI output (or disable with --no-ansi)                                             |
| -n                   | --no-interaction      | Disables all interaction questions of the i-doit console                                      |
| -v / -vv / -vvv      | --verbose             | Increases the verbosity of output (1 = normal output, 2 = detailed output, 3 = debug level) |

**Usage example**

```shell
sudo -u www-data php console.php addon-install --user admin --password admin --tenant 1 --addon api --zip /path/to/the/zip/file.zip
```

### addon-list

Shows a list of all installed add-ons for the selected tenant

**Options:**

| parameter (short) | parameter (long) | Description                                                                                     |
| -------------------- | -------------------- | ------------------------------------------------------------------------------------------------ |
| -a                   | --addon=[ADDON]      | Add-on identifier (multiple values allowed)                                                          |
| -t                   | --tenant=[TENANT-ID] | Tenant ID (multiple values allowed)                                                            |
| -h                   | --help               | Help message for displaying further information                                            |
| -q                   | --quiet              | Quiet mode to suppress output                                                       |
| -V                   | --version            | Output of the i-doit console version                                                           |
|                      | --ansi<br>--no-ansi  | Force ANSI output (or disable with --no-ansi)                                             |
| -n                   | --no-interaction     | Disables all interaction questions of the i-doit console                                      |
| -v / -vv / -vvv      | --verbose            | Increases the verbosity of output (1 = normal output, 2 = detailed output, 3 = debug level) |

**Usage example**

```shell
sudo -u www-data php console.php addon-list --tenant 1 --user admin --password admin
```

### addon-uninstall

Uninstalls an add-on

**Options:**

| parameter (short) | parameter (long)  | Description                                                                                                                 |
| -------------------- | --------------------- | ---------------------------------------------------------------------------------------------------------------------------- |
| -u                   | --user[=USER]         | i-doit admin username [default: "admin"]                                                                                 |
| -p                   | --password[=PASSWORD] | i-doit admin password                                                                                                        |
| -a                   | --addon=[ADDON]       | Add-on identifier                                                                                                         |
| -h                   | --help                | Displays help for the specified command. If no command is specified, help for the list command is displayed |
| -q                   | --quiet               | No output                                                                                                                  |
| -V                   | --version             | Display the application version                                                                                               |
| --ansi               | --no-ansi             | Force (or disable with --no-ansi) ANSI output                                                                             |
| -n                   | --no-interaction      | Do not ask any interactive questions                                                                                             |
| -v / -vv / -vvv      | --verbose             | Increase the verbosity of messages: 1 for normal output, 2 for more detailed output, and 3 for debugging            |

**Usage example**

```shell
sudo -u www-data php console.php addon-uninstall --user admin --password admin -a document
```

### admin-center-password-reset

Reset password for the Admin Center

**Options:**

| parameter (short) | parameter (long)   | Description                                                                                     |
| -------------------- | ---------------------- | ------------------------------------------------------------------------------------------------ |
| -u                   | --user=[USERNAME]      | Username of a user authorized for execution                                      |
| -p                   | --password=[PASSWORD]  | Password for authentication of the previously specified user                                   |
| -c                   | --config=[CONFIG-FILE] | Path to the configuration file                                                        |
| -h                   | --help                 | Help message for displaying further information                                            |
| -q                   | --quiet                | Quiet mode to suppress output                                                       |
| -V                   | --version              | Output of the i-doit console version                                                           |
|                      | --ansi<br>--no-ansi    | Force ANSI output (or disable with --no-ansi)                                             |
| -n                   | --no-interaction       | Disables all interaction questions of the i-doit console                                      |
| -v / -vv / -vvv      | --verbose              | Increases the verbosity of output (1 = normal output, 2 = detailed output, 3 = debug level) |

**Usage example**

```shell
sudo -u www-data php console.php admin-center-password-reset --user admin --password admin
```

### auth-cleanup

Cleans up potentially orphaned entries in the authorization system; this is done per module. In the CMDB, for example, rights from categories, objects, and object types that no longer exist are removed.

**Options:**

| parameter (short) | parameter (long)   | Description                                                                                     |
| -------------------- | ---------------------- | ------------------------------------------------------------------------------------------------ |
| -u                   | --user=[USERNAME]      | Username of a user authorized for execution                                      |
| -p                   | --password=[PASSWORD]  | Password for authentication of the previously specified user                                   |
| -i                   | --tenantId=[TENANT-ID] | Tenant ID of the tenant to be used (default: 1)                              |
| -c                   | --config=[CONFIG-FILE] | Path to the configuration file                                                        |
| -h                   | --help                 | Help message for displaying further information                                            |
| -q                   | --quiet                | Quiet mode to suppress output                                                       |
| -V                   | --version              | Output of the i-doit console version                                                           |
|                      | --ansi<br>--no-ansi    | Force ANSI output (or disable with --no-ansi)                                             |
| -n                   | --no-interaction       | Disables all interaction questions of the i-doit console                                      |
| -v / -vv / -vvv      | --verbose              | Increases the verbosity of output (1 = normal output, 2 = detailed output, 3 = debug level) |

**Usage example**

```shell
sudo -u www-data php console.php auth-cleanup --user admin --password admin --tenantId 1
```

### clear-credentials

Removes the entries of the attributes `username` and `password` from user logins

**Options:**

| parameter (short) | parameter (long)  | Description                                                                                     |
| -------------------- | --------------------- | ------------------------------------------------------------------------------------------------ |
|                      | --object=[OBJECT]     | Object ID of the user to be disabled                                                       |
| -u                   | --user=[USERNAME]     | Username of a user authorized for execution                                      |
| -p                   | --password=[PASSWORD] | Password for authentication of the previously specified user                                   |
| -h                   | --help                | Help message for displaying further information                                            |
| -q                   | --quiet               | Quiet mode to suppress output                                                       |
| -V                   | --version             | Output of the i-doit console version                                                           |
|                      | --ansi<br>--no-ansi   | Force ANSI output (or disable with --no-ansi)                                             |
| -n                   | --no-interaction      | Disables all interaction questions of the i-doit console                                      |
| -v / -vv / -vvv      | --verbose             | Increases the verbosity of output (1 = normal output, 2 = detailed output, 3 = debug level) |

**Usage example**

```shell
sudo -u www-data php console.php clear-credentials --user admin --password admin --object ObjectID
```

### completion

The completion command outputs the shell completion script required for using automatic shell completion (currently only Bash completion is supported).

**Options:**

| parameter (short) | parameter (long)  | Description                                                                                     |
| -------------------- | --------------------- | ------------------------------------------------------------------------------------------------ |
|                      | --debug               | Track the debug log of completion                                                 |
| -u                   | --user=[USERNAME]     | Username of a user authorized for execution                                      |
| -p                   | --password=[PASSWORD] | Password for authentication of the previously specified user                                   |
| -h                   | --help                | Help message for displaying further information                                            |
| -q                   | --quiet               | Quiet mode to suppress output                                                       |
| -V                   | --version             | Output of the i-doit console version                                                           |
|                      | --ansi<br>--no-ansi   | Force ANSI output (or disable with --no-ansi)                                             |
| -n                   | --no-interaction      | Disables all interaction questions of the i-doit console                                      |
| -v / -vv / -vvv      | --verbose             | Increases the verbosity of output (1 = normal output, 2 = detailed output, 3 = debug level) |

**Usage example**

```shell
php console.php completion
```

### contracts-outdated

Updates the status of expired contracts

**Options:**

| parameter (short) | parameter (long)  | Description                                                                                     |
| -------------------- | --------------------- | ------------------------------------------------------------------------------------------------ |
| -u                   | --user=[USER]         | Username of a user authorized for execution                                      |
| -p                   | --password=[PASSWORD] | Password for authentication of the previously specified user                                   |
| -i                   | --tenantId=[TENANTID] | Tenant ID of the tenant to be used (default: 1)                              |
| -h                   | --help                | Help message for displaying further information                                            |
| -q                   | --quiet               | Quiet mode to suppress output                                                       |
| -V                   | --version             | Output of the i-doit console version                                                           |
|                      | --ansi<br>--no-ansi   | Force ANSI output (or disable with --no-ansi)                                             |
| -n                   | --no-interaction      | Disables all interaction questions of the i-doit console                                      |
| -v / -vv / -vvv      | --verbose             | Increases the verbosity of output (1 = normal output, 2 = detailed output, 3 = debug level) |

**Usage example**

```shell
sudo -u www-data php console.php contracts-outdated --user admin --password admin
```

### extend-contracts

Extends the runtime of a contract whose last possible cancellation date is in the past

**Options:**

| parameter (short) | parameter (long)  | Description                                          |
| -------------------- | --------------------- | ----------------------------------------------------- |
|                      | --simulate            | Simulates the contract extension                     |
| -u                   | --user=[USER]         | Username                                              |
| -p                   | --password=[PASSWORD] | password                                              |
| -i                   | --tenantID=[TENANTID] | Tenant ID [default: 1]                                |
| -h                   | --help                | Shows help for the command                         |
| -c                   | --config=CONFIG       | Configuration file                                   |
| -q                   | --quit                | No message is displayed                     |
| -v                   | --version             | Shows the application version                    |
|                      | --ansi<br>--no-ansi   | Force ANSI output (or disable with --no-ansi)      |
| -v / -vv / -vvv      | --verbose             | Increases the verbosity of messages [default: 1] |

**Usage example**

```shell
sudo -u www-data php console.php extend-contracts --user admin --password admin
```

### help

Shows the usage, arguments, and options of another command when used in conjunction with it

**Options:**

| parameter (short) | parameter (long) | Description                                                                                     |
| -------------------- | -------------------- | ------------------------------------------------------------------------------------------------ |
|                      | --format=[FORMAT]    | Set the output format (txt, xml, json, or md) [Default: txt]                               |
|                      | --raw                | Output the raw command help                                                                        |
| -h                   | --help               | Help message for displaying further information                                            |
| -q                   | --quiet              | Quiet mode to suppress output                                                       |
| -V                   | --version            | Output of the i-doit console version                                                           |
|                      | --ansi<br>--no-ansi  | Force ANSI output (or disable with --no-ansi)                                             |
| -n                   | --no-interaction     | Disables all interaction questions of the i-doit console                                      |
| -v / -vv / -vvv      | --verbose            | Increases the verbosity of output (1 = normal output, 2 = detailed output, 3 = debug level) |

**Usage example**

```shell
sudo -u www-data php console.php help --format=txt
```

### import-csv

Performs the import of a CSV file with the desired import parameters

**Options:**

| parameter (short) | parameter (long)                | Description                                                                                     |
| -------------------- | ----------------------------------- | ------------------------------------------------------------------------------------------------ |
|                      | --importFile=[IMPORTFILE]           | Specifies the file and its path to be used for the import                       |
|                      | --importProfileId=[IMPORTPROFILEID] | Specifies which profile should be used to execute the import                                  |
|                      | --csvSeparator=[CSVSEPARATOR]       | Defines the separator for the import                                                        |
|                      | --multiValueMode=[MULTIVALUEMODE]   | Sets the mode for multi-value categories (possible values: "row", "column", or "comma")    |
| -u                   | --user=[USERNAME]                   | Username of a user authorized for execution                                      |
| -p                   | --password=[PASSWORD]               | Password for authentication of the previously specified user                                   |
| -i                   | --tenantId=[TENANT-ID]              | Tenant ID of the tenant to be used (default: 1)                              |
| -h                   | --help                              | Help message for displaying further information                                            |
| -q                   | --quiet                             | Quiet mode to suppress output                                                       |
| -V                   | --version                           | Output of the i-doit console version                                                           |
|                      | --ansi<br>--no-ansi                 | Force ANSI output (or disable with --no-ansi)                                             |
| -n                   | --no-interaction                    | Disables all interaction questions of the i-doit console                                      |
| -v / -vv / -vvv      | --verbose                           | Increases the verbosity of output (1 = normal output, 2 = detailed output, 3 = debug level) |

**Usage example**

```shell
sudo -u www-data php console.php import-csv --user admin --password admin --tenantId 1 --importFile /var/www/imports/idoit-Demo-CSV-Import.csv --importProfileId 1 --csvSeparator ";" --multiValueMode column
```

### import-csvprofiles

Returns a listing of import profiles for CSV import

**Options:**

| parameter (short) | parameter (long)   | Description                                                                                     |
| -------------------- | ---------------------- | ------------------------------------------------------------------------------------------------ |
| -u                   | --user=[USERNAME]      | Username of a user authorized for execution                                      |
| -p                   | --password=[PASSWORD]  | Password for authentication of the previously specified user                                   |
| -i                   | --tenantId=[TENANT-ID] | Tenant ID of the tenant to be used (default: 1)                              |
| -h                   | --help                 | Help message for displaying further information                                            |
| -q                   | --quiet                | Quiet mode to suppress output                                                       |
| -V                   | --version              | Output of the i-doit console version                                                           |
|                      | --ansi<br>--no-ansi    | Force ANSI output (or disable with --no-ansi)                                             |
| -n                   | --no-interaction       | Disables all interaction questions of the i-doit console                                      |
| -v / -vv / -vvv      | --verbose              | Increases the verbosity of output (1 = normal output, 2 = detailed output, 3 = debug level) |

**Usage example**

```shell
sudo -u www-data php console.php import-csvprofiles --user admin --password admin --tenantId 1
```

### import-hinventory

Performs an h-inventory import from a compatible XML file

**Options:**

| parameter (short) | parameter (long)      | Description                                                                                     |
| -------------------- | ------------------------- | ------------------------------------------------------------------------------------------------ |
|                      | --importFile=[IMPORTFILE] | Specifies the file and its path to be used for the import                       |
|                      | --usage                   | Further detailed information on the usage of the command                                   |
|                      | --objectType=[OBJECTTYPE] | Imports the specified object type                                                           |
|                      | --objectId=[OBJECTID]     | Imports exclusively the specified object                                                  |
| -f                   | --force                   | Forces the update of existing objects but overwrites the imported categories     |
| -u                   | --user=[USERNAME]         | Username of a user authorized for execution                                      |
| -p                   | --password=[PASSWORD]     | Password for authentication of the previously specified user                                   |
| -i                   | --tenantId=[TENANT-ID]    | Tenant ID of the tenant to be used (default: 1)                              |
| -h                   | --help                    | Help message for displaying further information                                            |
| -q                   | --quiet                   | Quiet mode to suppress output                                                       |
| -V                   | --version                 | Output of the i-doit console version                                                           |
|                      | --ansi<br>--no-ansi       | Force ANSI output (or disable with --no-ansi)                                             |
| -n                   | --no-interaction          | Disables all interaction questions of the i-doit console                                      |
| -v / -vv / -vvv      | --verbose                 | Increases the verbosity of output (1 = normal output, 2 = detailed output, 3 = debug level) |

**Usage example**

```shell
sudo -u www-data php console.php import-hinventory --user admin --password admin --tenantId 1 --importFile /var/www/imports/idoit-Demo-h-inventory-import.xml
```

### import-jdisc

Performs a JDisc import into i-doit.

**Options:**

| parameter (short) | parameter (long)                | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       |
| -------------------- | ----------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| -r                   | --profile=[PROFILE]                 | Specification/selection of the JDisc profile to be used for the import                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         |
| -g                   | --group=[GROUP]                     | Specification/selection of the group ID to be used for the import                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            |
| -x                   | --mode=[MODE]                       | Selection of the import mode. The following IDs are available:<br>**1**: "Create": The "Create" import mode will create all discovered objects without checking whether they already exist.<br>**2**: "Update": The "Update" import mode will only create objects that could not be found in i-doit. Categories of already existing objects are supplemented with new data if necessary.<br>**3**: "Overwrite": The "Overwrite" import mode behaves the same as "Update" with the difference that list categories are first cleared and then recreated.<br>**4**: "Update (Newly inventoried)": With the "Newly inventoried" addition, fixed i-doit-to-JDisc-device links are discarded and object memberships are recalculated.<br>**5**: "Overwrite (Newly inventoried)": With the "Newly inventoried" addition, fixed i-doit-to-JDisc-device links are discarded and object memberships are recalculated.<br>**6**: The "Create only newly scanned devices" import mode creates only newly scanned objects; existing ones are skipped.<br>**7**: The "Update (Existing objects only)" import mode updates only already existing objects. No new objects are created. |
| -s                   | --server=[SERVER]                   | Specification of the server ID to select it                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         |
| -o                   | --overwriteHost                     | Determines whether overlapping host addresses should be overwritten                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        |
| -l                   | --detailedLogging[=DETAILEDLOGGING] | Increases logging:<br>**1**: at low log level, only notices and warnings are logged<br>**2**: in addition to the low log level, errors are logged<br>**3**: in addition to the normal log level, debug messages are logged (memory-intensive)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         |
| -b                   | --regenerateSearchIndex             | Automatically regenerates the search index                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 |
|                      | --listProfiles                      | Generates a list of available profiles                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         |
| -u                   | --user=[USERNAME]                   | Username of a user authorized for execution                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        |
| -p                   | --password=[PASSWORD]               | Password for authentication of the previously specified user                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     |
| -i                   | --tenantId=[TENANT-ID]              | Tenant ID of the tenant to be used (default: 1)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
| -c                   | --config=[CONFIG-FILE]              | Path to the configuration file                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          |
| -h                   | --help                              | Help message for displaying further information                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              |
| -q                   | --quiet                             | Quiet mode to suppress output                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         |
| -V                   | --version                           | Output of the i-doit console version                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             |
|                      | --ansi<br>--no-ansi                 | Force ANSI output (or disable with --no-ansi)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               |
| -n                   | --no-interaction                    | Disables all interaction questions of the i-doit console                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        |
| -v / -vv / -vvv      | --verbose                           | Increases the verbosity of output (1 = normal output, 2 = detailed output, 3 = debug level)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   |

**Usage example**

```shell
sudo -u www-data php console.php import-jdisc --user admin --password admin --tenantId 1 --profile 3 --mode 4 --server 2 --detailedLogging 3 --regenerateSearchIndex
```

### import-jdiscdiscovery

Triggers a JDisc Discovery job.

**Options:**

| parameter (short) | parameter (long)                    | Description                                                                                     |
| -------------------- | --------------------------------------- | ------------------------------------------------------------------------------------------------ |
| -s                   | --server=[SERVER]                       | Selection of the JDisc server                                                                        |
| -j                   | --discoveryJob=[DISCOVERYJOB]           | Selection of the discovery job (default: "Discover all")                                            |
| -d                   | --deviceHostname=[DEVICEHOSTNAME]       | Selection of the device by hostname                                                          |
| -a                   | --deviceHostAddress=[DEVICEHOSTADDRESS] | Selection of the device by host address                                                        |
| -l                   | --showLog                               | Shows the log during the discovery                                                         |
| -u                   | --user=[USERNAME]                       | Username of a user authorized for execution                                      |
| -p                   | --password=[PASSWORD]                   | Password for authentication of the previously specified user                                   |
| -i                   | --tenantId=[TENANT-ID]                  | Tenant ID of the tenant to be used (default: 1)                              |
| -c                   | --config=[CONFIG-FILE]                  | Path to the configuration file                                                        |
| -h                   | --help                                  | Help message for displaying further information                                            |
| -q                   | --quiet                                 | Quiet mode to suppress output                                                       |
| -V                   | --version                               | Output of the i-doit console version                                                           |
|                      | --ansi<br>--no-ansi                     | Force ANSI output (or disable with --no-ansi)                                             |
| -n                   | --no-interaction                        | Disables all interaction questions of the i-doit console                                      |
| -v / -vv / -vvv      | --verbose                               | Increases the verbosity of output (1 = normal output, 2 = detailed output, 3 = debug level) |

**Usage example**

```shell
sudo -u www-data php console.php import-jdiscdiscovery --user admin --password admin --tenantId 1 --server 2
```

### import-syslog

Imports contents from a syslog server text file into the i-doit logbook.

**Options:**

| parameter (short) | parameter (long)   | Description                                                                                     |
| -------------------- | ---------------------- | ------------------------------------------------------------------------------------------------ |
| -u                   | --user=[USERNAME]      | Username of a user authorized for execution                                      |
| -p                   | --password=[PASSWORD]  | Password for authentication of the previously specified user                                   |
| -i                   | --tenantId=[TENANT-ID] | Tenant ID of the tenant to be used (default: 1)                              |
| -c                   | --config=[CONFIG-FILE] | Path to the configuration file                                                        |
| -h                   | --help                 | Help message for displaying further information                                            |
| -q                   | --quiet                | Quiet mode to suppress output                                                       |
| -V                   | --version              | Output of the i-doit console version                                                           |
|                      | --ansi<br>--no-ansi    | Force ANSI output (or disable with --no-ansi)                                             |
| -n                   | --no-interaction       | Disables all interaction questions of the i-doit console                                      |
| -v / -vv / -vvv      | --verbose              | Increases the verbosity of output (1 = normal output, 2 = detailed output, 3 = debug level) |

**Usage example**

```shell
sudo -u www-data php console.php import-syslog --user admin --password admin --tenantId 1
```

### import-xml

Performs an import of an XML file into i-doit.

**Options:**

| parameter (short) | parameter (long)      | Description                                                                                     |
| -------------------- | ------------------------- | ------------------------------------------------------------------------------------------------ |
|                      | --importFile=[IMPORTFILE] | Specification of the import file and its path                                                         |
|                      | --usage                   | Detailed information on the usage of the command                                           |
| -u                   | --user=[USERNAME]         | Username of a user authorized for execution                                      |
| -p                   | --password=[PASSWORD]     | Password for authentication of the previously specified user                                   |
| -i                   | --tenantId=[TENANT-ID]    | Tenant ID of the tenant to be used (default: 1)                              |
| -c                   | --config=[CONFIG-FILE]    | Path to the configuration file                                                        |
| -h                   | --help                    | Help message for displaying further information                                            |
| -q                   | --quiet                   | Quiet mode to suppress output                                                       |
| -V                   | --version                 | Output of the i-doit console version                                                           |
|                      | --ansi<br>--no-ansi       | Force ANSI output (or disable with --no-ansi)                                             |
| -n                   | --no-interaction          | Disables all interaction questions of the i-doit console                                      |
| -v / -vv / -vvv      | --verbose                 | Increases the verbosity of output (1 = normal output, 2 = detailed output, 3 = debug level) |

**Usage example**

```shell
sudo -u www-data php console.php import-xml --user admin --password admin --tenantId 1 --importFile /var/www/imports/idoit-Demo-xml-import.xml
```

### install

Install the i-doit application

**Options:**

| parameter (short) | parameter (long)              | Description                                                                                     |
| -------------------- | --------------------------------- | ------------------------------------------------------------------------------------------------ |
| -u                   | --root-user=[ROOT-USER]           | Username of a user authorized for execution                                      |
| -p                   | --root-password=[ROOT-PASSWORD]   | Password for authentication of the previously specified user                                   |
|                      | --host=[HOST]                     | Username of the privileged DB user [default: "root"]                                  |
|                      | --port=[PORT]                     | Port for DB connection [default: 3306]                                                     |
| -d                   | --database=[DATABASE]             | i-doit system database name [default: "idoit_system_temp"]                                      |
| -U                   | --user=[USER]                     | Username for the i-doit system DB [default: "idoit"]                                            |
| -P                   | --password=[PASSWORD]             | Password for i-doit system DB                                                                    |
|                      | --admin-password=[ADMIN-PASSWORD] | Password for i-doit Admin Center                                                                 |
| -l                   | --license-server=[LICENSE-SERVER] | Path to the i-doit license server [default: "https://lizenzen.i-doit.com"]                       |
| -k                   | --key=[KEY]                       | License key for i-doit                                                                       |
| -h                   | --help                            | Help message for displaying further information                                            |
| -q                   | --quiet                           | Quiet mode to suppress output                                                       |
| -V                   | --version                         | Output of the i-doit console version                                                           |
|                      | --ansi<br>--no-ansi               | Force ANSI output (or disable with --no-ansi)                                             |
| -n                   | --no-interaction                  | Disables all interaction questions of the i-doit console                                      |
| -v / -vv / -vvv      | --verbose                         | Increases the verbosity of output (1 = normal output, 2 = detailed output, 3 = debug level) |

**Usage example**

```shell
sudo -u www-data php console.php install
```

### jdisc-create-server

Creates a JDisc server entry.

**Options:**

| parameter (short) | parameter (long)              | Description                                                                                     |
| -------------------- | --------------------------------- | ------------------------------------------------------------------------------------------------ |
|                      | --default                         | Set as default server                                                                     |
|                      | --title=[TITLE]                   | Name for the JDisc server configuration [default: "JDisc Server"]                                 |
|                      | --jdisc-host=[JDISC-HOST]         | JDisc host [default: "localhost"]                                                                |
|                      | --jdisc-port=[JDISC-PORT]         | JDisc port [default: 25321]                                                                      |
|                      | --jdisc-database=[JDISC-DATABASE] | JDisc database [default: "inventory"]                                                            |
|                      | --jdisc-username=[JDISC-USERNAME] | JDisc database username [default: "postgresro"]                                                  |
|                      | --jdisc-password=[JDISC-PASSWORD] | JDisc database password                                                                          |
|                      | --allow-older-imports             | Allow import of older JDisc versions [default: no]                                            |
| -i                   | --tenantId=[TENANT-ID]            | Tenant ID of the tenant to be used (default: 1)                              |
| -c                   | --config=[CONFIG-FILE]            | Path to the configuration file                                                        |
| -h                   | --help                            | Help message for displaying further information                                            |
| -q                   | --quiet                           | Quiet mode to suppress output                                                       |
| -V                   | --version                         | Output of the i-doit console version                                                           |
|                      | --ansi<br>--no-ansi               | Force ANSI output (or disable with --no-ansi)                                             |
| -n                   | --no-interaction                  | Disables all interaction questions of the i-doit console                                      |
| -v / -vv / -vvv      | --verbose                         | Increases the verbosity of output (1 = normal output, 2 = detailed output, 3 = debug level) |

**Usage example**

```shell
sudo -u www-data php console.php jdisc-create-server -u admin -p admin --default --title JDisc Server --jdisc-host localhost --jdisc-port 25321
```

### ldap-sync

Synchronizes users from LDAP to i-doit and creates them as person objects.

**Options:**

| parameter (short) | parameter (long)                                | Description                                                                                                                                                                                                                                     |
| -------------------- | --------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| -l                   | --ldapServerId=[LDAPSERVERID]                       | Specifies the ID of the LDAP server from which users should be synchronized.   <br>If no ldapServerId is specified, all active servers are synchronized.                                                                                 |
|                      | --dumpConfig                                        | Outputs the current configuration from the configuration file                                                                                                                                                                                |
|                      | --connectionRankingActive[=CONNECTIONRANKINGACTIVE] | Option that reactivates all connections of all reactivated users.  <br>Default configuration is the expert setting 'ldap.connection-ranking-active' (tenant-wide) with the value '1'.                                             |
|                      | --dropExistingRelations[=DROPEXISTINGRELATIONS]     | If an existing LDAP group has member users that do not belong to the synchronized users,  <br>they will be deleted.  <br>1 = delete existing relations, 0 = ignore existing relations [default: 0]. |
|                      | --archiveDeletedGroups                              | If a deleted LDAP group remains in i-doit, archive or delete it.  <br>Default = false  <br>Possible values are archive or delete                                                                                         |
|                      | --useDefaultTemplates                               | Use the default template when an object is created via this command (v1.18)                                                                                                                                                        |
| -u                   | --user=[USERNAME]                                   | Username of a user authorized for execution                                                                                                                                                                                      |
| -p                   | --password=[PASSWORD]                               | Password for authentication of the previously specified user                                                                                                                                                                                   |
| -i                   | --tenantId=[TENANT-ID]                              | Tenant ID of the tenant to be used (default: 1)                                                                                                                                                                              |
| -c                   | --config=[CONFIG-FILE]                              | Path to the configuration file                                                                                                                                                                                                        |
| -h                   | --help                                              | Help message for displaying further information                                                                                                                                                                                            |
| -q                   | --quiet                                             | Quiet mode to suppress output                                                                                                                                                                                                       |
| -V                   | --version                                           | Output of the i-doit console version                                                                                                                                                                                                           |
|                      | --ansi<br>--no-ansi                                 | Force ANSI output (or disable with --no-ansi)                                                                                                                                                                                             |
| -n                   | --no-interaction                                    | Disables all interaction questions of the i-doit console                                                                                                                                                                                      |
| -v / -vv / -vvv      | --verbose                                           | Increases the verbosity of output (1 = normal output, 2 = detailed output, 3 = debug level)                                                                                                                                                 |

**Usage example**

```shell
sudo -u www-data php console.php ldap-sync --user admin --password admin --tenantId 1 --verbose --ldapServerId 1
```

### ldap-syncdn

Synchronizes LDAP DNs with the i-doit users.

**Options:**

| parameter (short) | parameter (long)          | Description                                                                                     |
| -------------------- | ----------------------------- | ------------------------------------------------------------------------------------------------ |
|                      | --ldapServerId=[LDAPSERVERID] | Specification of the LDAP server by ID                                                              |
| -o                   | --objectType=[OBJECTTYPE]     | Object type as constant (e.g., C__OBJTYPE__SERVER)                                    |
| -u                   | --user=[USERNAME]             | Username of a user authorized for execution                                      |
| -p                   | --password=[PASSWORD]         | Password for authentication of the previously specified user                                   |
| -i                   | --tenantId=[TENANT-ID]        | Tenant ID of the tenant to be used (default: 1)                              |
| -h                   | --help                        | Help message for displaying further information                                            |
| -q                   | --quiet                       | Quiet mode to suppress output                                                       |
| -V                   | --version                     | Output of the i-doit console version                                                           |
|                      | --ansi<br>--no-ansi           | Force ANSI output (or disable with --no-ansi)                                             |
| -n                   | --no-interaction              | Disables all interaction questions of the i-doit console                                      |
| -v / -vv / -vvv      | --verbose                     | Increases the verbosity of output (1 = normal output, 2 = detailed output, 3 = debug level) |

**Usage example**

```shell
sudo -u www-data php console.php ldap-syncdn --user admin --password admin --tenantId 1 --ldapServerId 1
```

### list

Lists all commands. Output format can be changed.

**Options:**

| parameter (short) | parameter (long) | Description                                                       |
| -------------------- | -------------------- | ------------------------------------------------------------------ |
|                      | --format=[FORMAT]    | Set the output format (txt, xml, json, or md) [Default: txt] |
|                      | --raw                | Output the raw command help                                          |

**Usage example**

```shell
sudo -u www-data php console.php list --format=txt
```

### license-add

Adds a license for i-doit

**Options:**

| parameter (short) | parameter (long)  | Description                                                                                     |
| -------------------- | --------------------- | ------------------------------------------------------------------------------------------------ |
| -u                   | --user=[USERNAME]     | Username of a user authorized for execution                                      |
| -p                   | --password=[PASSWORD] | Password for authentication of the previously specified user                                   |
| -l                   | --license=[LICENSE]   | Path to the license file (/path/to/license/file.key)                                           |
| -t                   | --tenant=[TENANT-ID]  | Tenant ID of the tenant to be used (default: 1)                              |
| -h                   | --help                | Help message for displaying further information                                            |
| -q                   | --quiet               | Quiet mode to suppress output                                                       |
| -V                   | --version             | Output of the i-doit console version                                                           |
|                      | --ansi<br>--no-ansi   | Force ANSI output (or disable with --no-ansi)                                             |
| -n                   | --no-interaction      | Disables all interaction questions of the i-doit console                                      |
| -v / -vv / -vvv      | --verbose             | Increases the verbosity of output (1 = normal output, 2 = detailed output, 3 = debug level) |

**Usage example**

```shell
sudo -u www-data php console.php license-add --user admin --password admin --tenantId 1 --license /path/to/license/file.key
```

### license-assign

Assigns a hosting license to a tenant

**Options:**

| parameter (short) | parameter (long)   | Description                                                                                     |
| -------------------- | ---------------------- | ------------------------------------------------------------------------------------------------ |
| -u                   | --user=[USERNAME]      | Username of a user authorized for execution                                      |
| -p                   | --password=[PASSWORD]  | Password for authentication of the previously specified user                                   |
| -i                   | --tenantId=[TENANT-ID] | Tenant ID of the tenant to be used (default: 1)                              |
| -c                   | --count=[COUNT]        | Number of objects to be licensed [Default: 0]                                                    |
| -h                   | --help                 | Help message for displaying further information                                            |
| -q                   | --quiet                | Quiet mode to suppress output                                                       |
| -V                   | --version              | Output of the i-doit console version                                                           |
|                      | --ansi<br>--no-ansi    | Force ANSI output (or disable with --no-ansi)                                             |
| -n                   | --no-interaction       | Disables all interaction questions of the i-doit console                                      |
| -v / -vv / -vvv      | --verbose              | Increases the verbosity of output (1 = normal output, 2 = detailed output, 3 = debug level) |

**Usage example**

```shell
sudo -u www-data php console.php license-assign --user admin --password admin --tenantId 1 --count 1000
```

### license-import

Imports licenses from the i-doit license server

**Options:**

| parameter (short) | parameter (long)              | Description                                                                                     |
| -------------------- | --------------------------------- | ------------------------------------------------------------------------------------------------ |
| -u                   | --user=[USERNAME]                 | Username of a user authorized for execution                                      |
| -p                   | --password=[PASSWORD]             | Password for authentication of the previously specified user                                   |
| -l                   | --license-server=[LICENSE-SERVER] | Path to the i-doit license server [default: "https://lizenzen.i-doit.com"]                           |
| -h                   | --help                            | Help message for displaying further information                                            |
| -q                   | --quiet                           | Quiet mode to suppress output                                                       |
| -V                   | --version                         | Output of the i-doit console version                                                           |
|                      | --ansi<br>--no-ansi               | Force ANSI output (or disable with --no-ansi)                                             |
| -n                   | --no-interaction                  | Disables all interaction questions of the i-doit console                                      |
| -v / -vv / -vvv      | --verbose                         | Increases the verbosity of output (1 = normal output, 2 = detailed output, 3 = debug level) |

**Usage example**

```shell
sudo -u www-data php console.php license-import --user admin --password admin --license-server https://lizenzen.i-doit.com
```

### license-key

Sets a license key for i-doit

**Options:**

| parameter (short) | parameter (long)              | Description                                                                                          |
| -------------------- | --------------------------------- | ----------------------------------------------------------------------------------------------------- |
| -u                   | --user=[USERNAME]                 | Username of a user authorized for execution                                           |
| -p                   | --password=[PASSWORD]             | Password for authentication of the previously specified user                                        |
| -l                   | --license-server=[LICENSE-SERVER] | Path to the i-doit license server [Default: "[https://lizenzen.i-doit.com](https://lizenzen.i-doit.com)"] |
| -k                   | --key=[KEY]                       | license key for i-doit                                                                            |
| -h                   | --help                            | Help message for displaying further information                                                 |
| -q                   | --quiet                           | Quiet mode to suppress output                                                            |
| -V                   | --version                         | Output of the i-doit console version                                                                |
|                      | --ansi<br>--no-ansi               | Force ANSI output (or disable with --no-ansi)                                                  |
| -n                   | --no-interaction                  | Disables all interaction questions of the i-doit console                                           |
| -v / -vv / -vvv      | --verbose                         | Increases the verbosity of output (1 = normal output, 2 = detailed output, 3 = debug level)      |

**Usage example**

```shell
sudo -u www-data php console.php license-key --user admin --password admin --license-server https://lizenzen.i-doit.com --key license
```

### license-list

Lists all installed licenses

**Options:**

| parameter (short) | parameter (long) | Description                                                                                     |
| -------------------- | -------------------- | ------------------------------------------------------------------------------------------------ |
| -t                   | --tenant=[TENANT]    | Password for authentication of the previously specified user                                   |
| -h                   | --help               | Help message for displaying further information                                            |
| -q                   | --quiet              | Quiet mode to suppress output                                                       |
| -V                   | --version            | Output of the i-doit console version                                                           |
|                      | --ansi<br>--no-ansi  | Force ANSI output (or disable with --no-ansi)                                             |
| -n                   | --no-interaction     | Disables all interaction questions of the i-doit console                                      |
| -v / -vv / -vvv      | --verbose            | Increases the verbosity of output (1 = normal output, 2 = detailed output, 3 = debug level) |

**Usage example**

```shell
sudo -u www-data php console.php license-list --tenant 1
```

### license-remove

Removes a license from i-doit

**Options:**

| parameter (short) | parameter (long)  | Description                                                                                     |
| -------------------- | --------------------- | ------------------------------------------------------------------------------------------------ |
| -u                   | --user=[USERNAME]     | Username of a user authorized for execution                                      |
| -p                   | --password=[PASSWORD] | Password for authentication of the previously specified user                                   |
| -l                   | --license=[LICENSE]   | License ID of the license to be removed                                                            |
| -h                   | --help                | Help message for displaying further information                                            |
| -q                   | --quiet               | Quiet mode to suppress output                                                       |
| -V                   | --version             | Output of the i-doit console version                                                           |
|                      | --ansi<br>--no-ansi   | Force ANSI output (or disable with --no-ansi)                                             |
| -n                   | --no-interaction      | Disables all interaction questions of the i-doit console                                      |
| -v / -vv / -vvv      | --verbose             | Increases the verbosity of output (1 = normal output, 2 = detailed output, 3 = debug level) |

**Usage example**

```shell
sudo -u www-data php console.php license-remove --user admin --password admin --license LicenseID
```

### logbook:archive

Archives logbook entries with a defined age according to the settings in the i-doit interface.

**Options:**

| parameter (short) | parameter (long)   | Description                                                                                     |
| -------------------- | ---------------------- | ------------------------------------------------------------------------------------------------ |
|                      | --batch=[BATCHSIZE]    | Number of entries to be archived per batch [default: 1000]                     |
| -u                   | --user=[USERNAME]      | Username of a user authorized for execution                                      |
| -p                   | --password=[PASSWORD]  | Password for authentication of the previously specified user                                   |
| -i                   | --tenantId=[TENANT-ID] | Tenant ID of the tenant to be used (default: 1)                              |
| -c                   | --config=[CONFIG-FILE] | Path to the configuration file                                                        |
| -h                   | --help                 | Help message for displaying further information                                            |
| -q                   | --quiet                | Quiet mode to suppress output                                                       |
| -V                   | --version              | Output of the i-doit console version                                                           |
|                      | --ansi<br>--no-ansi    | Force ANSI output (or disable with --no-ansi)                                             |
| -n                   | --no-interaction       | Disables all interaction questions of the i-doit console                                      |
| -v / -vv / -vvv      | --verbose              | Increases the verbosity of output (1 = normal output, 2 = detailed output, 3 = debug level) |

**Usage example**

```shell
sudo -u www-data php console.php logbook:archive --user admin --password admin --tenantId 1
```

### migrate-uploaded-files

Migrates uploaded files in i-doit <v1.13 to v1.14>

**Options:**

| parameter (short) | parameter (long) | Description                                                                                     |
| -------------------- | -------------------- | ------------------------------------------------------------------------------------------------ |
| -h                   | --help               | Help message for displaying further information                                            |
| -q                   | --quiet              | Quiet mode to suppress output                                                       |
| -V                   | --version            | Output of the i-doit console version                                                           |
|                      | --ansi<br>--no-ansi  | Force ANSI output (or disable with --no-ansi)                                             |
| -n                   | --no-interaction     | Disables all interaction questions of the i-doit console                                      |
| -v / -vv / -vvv      | --verbose            | Increases the verbosity of output (1 = normal output, 2 = detailed output, 3 = debug level) |

**Usage example**

```shell
sudo -u www-data php console.php migrate-uploaded-files
```

### notifications-list

Lists all [notifications](../../evaluation/notifications.md)

**Options:**

| parameter (short) | parameter (long)   | Description                                                                                     |
| -------------------- | ---------------------- | ------------------------------------------------------------------------------------------------ |
| -u                   | --user=[USERNAME]      | Username of a user authorized for execution                                      |
| -p                   | --password=[PASSWORD]  | Password for authentication of the previously specified user                                   |
| -i                   | --tenantId=[TENANT-ID] | Tenant ID of the tenant to be used (default: 1)                              |
| -c                   | --config=[CONFIG-FILE] | Path to the configuration file                                                        |
| -h                   | --help                 | Help message for displaying further information                                            |
| -q                   | --quiet                | Quiet mode to suppress output                                                       |
| -V                   | --version              | Output of the i-doit console version                                                           |
|                      | --ansi<br>--no-ansi    | Force ANSI output (or disable with --no-ansi)                                             |
| -n                   | --no-interaction       | Disables all interaction questions of the i-doit console                                      |
| -v / -vv / -vvv      | --verbose              | Increases the verbosity of output (1 = normal output, 2 = detailed output, 3 = debug level) |

**Usage example**

```shell
sudo -u www-data php console.php notifications-list --user admin --password admin --tenantId 1
```

### notifications-send

Sends the notifications configured in the i-doit interface

**Options:**

| parameter (short) | parameter (long)                            | Description                                                                                     |
| -------------------- | ----------------------------------------------- | ------------------------------------------------------------------------------------------------ |
|                      | --notification-ids=[NOTIFICATION-IDS ]          | Specify certain notification IDs to be sent, e.g. 1,2,3                                     |
|                      | --notification-type-ids=[NOTIFICATION-TYPE-IDS] | Specify certain notification type IDs to be sent, e.g. 1,2,3                      |
| -u                   | --user=[USERNAME]                               | Username of a user authorized for execution                                      |
| -p                   | --password=[PASSWORD]                           | Password for authentication of the previously specified user                                   |
| -i                   | --tenantId=[TENANT-ID]                          | Tenant ID of the tenant to be used (default: 1)                              |
| -c                   | --config=[CONFIG-FILE]                          | Path to the configuration file                                                        |
| -h                   | --help                                          | Help message for displaying further information                                            |
| -q                   | --quiet                                         | Quiet mode to suppress output                                                       |
| -V                   | --version                                       | Output of the i-doit console version                                                           |
|                      | --ansi<br>--no-ansi                             | Force ANSI output (or disable with --no-ansi)                                             |
| -n                   | --no-interaction                                | Disables all interaction questions of the i-doit console                                      |
| -v / -vv / -vvv      | --verbose                                       | Increases the verbosity of output (1 = normal output, 2 = detailed output, 3 = debug level) |

**Usage example**

```shell
sudo -u www-data php console.php notifications-send --user admin --password admin --tenantId 1
```

### report-export

Exports a report in the desired file format.

**Options:**

| parameter (short) | parameter (long)              | Description                                                                                     |
| -------------------- | --------------------------------- | ------------------------------------------------------------------------------------------------ |
| -r                   | --reportId=[REPORTID]             | ID of the report to be exported                                                                 |
| -d                   | --exportPath=[EXPORTPATH]         | Path to which the export should be made                                                            |
| -f                   | --exportFilename=[EXPORTFILENAME] | Filename of the export file without file extension                                                       |
| -t                   | --exportFiletypee=[EXPORTFILETYPE] | File type of the export file. Possible values: csv, txt, pdf, xml (default: "csv")                  |
| -u                   | --user=[USERNAME]                 | Username of a user authorized for execution                                      |
| -p                   | --password=[PASSWORD]             | Password for authentication of the previously specified user                                   |
| -i                   | --tenantId=[TENANT-ID]            | Tenant ID of the tenant to be used (default: 1)                              |
| -c                   | --config=[CONFIG-FILE]            | Path to the configuration file                                                        |
| -h                   | --help                            | Help message for displaying further information                                            |
| -q                   | --quiet                           | Quiet mode to suppress output                                                       |
| -V                   | --version                         | Output of the i-doit console version                                                           |
|                      | --ansi<br>--no-ansi               | Force ANSI output (or disable with --no-ansi)                                             |
| -n                   | --no-interaction                  | Disables all interaction questions of the i-doit console                                      |
| -v / -vv / -vvv      | --verbose                         | Increases the verbosity of output (1 = normal output, 2 = detailed output, 3 = debug level) |

**Usage example**

```shell
sudo -u www-data php console.php report-export --user admin --password admin --tenantId 1 --reportId 27 --exportPath /var/www/exported-reports/ --exportFilename Report-Buchhaltung-November-2025 --exportFileType csv
```

### report-refresher

Refreshes one or all reports.

**Options:**

| parameter (short) | parameter (long)   | Description                                                                                     |
| -------------------- | ---------------------- | ------------------------------------------------------------------------------------------------ |
| -r                   | --reportId=[REPORTID]  | ID of the report to be refreshed                                                                 |
| -u                   | --user=[USERNAME]      | Username of a user authorized for execution                                      |
| -p                   | --password=[PASSWORD]  | Password for authentication of the previously specified user                                   |
| -i                   | --tenantId=[TENANT-ID] | Tenant ID of the tenant to be used (default: 1)                              |
| -c                   | --config=[CONFIG-FILE] | Path to the configuration file                                                        |
| -h                   | --help                 | Help message for displaying further information                                            |
| -q                   | --quiet                | Quiet mode to suppress output                                                       |
| -V                   | --version              | Output of the i-doit console version                                                           |
|                      | --ansi<br>--no-ansi    | Force ANSI output (or disable with --no-ansi)                                             |
| -n                   | --no-interaction       | Disables all interaction questions of the i-doit console                                      |
| -v / -vv / -vvv      | --verbose              | Increases the verbosity of output (1 = normal output, 2 = detailed output, 3 = debug level) |

**Usage example**

```shell
sudo -u www-data php console.php report-refresher --user admin --password admin --tenantId 1 --reportId 27
```

### search

Searches for content in the documentation

**Options:**

| parameter (short) | parameter (long)          | Description                                                                                     |
| -------------------- | ----------------------------- | ------------------------------------------------------------------------------------------------ |
|                      | --searchString=[SEARCHSTRING] | Content to search for                                                             |
| -u                   | --user=[USERNAME]             | Username of a user authorized for execution                                      |
| -p                   | --password=[PASSWORD]         | Password for authentication of the previously specified user                                   |
| -i                   | --tenantId=[TENANT-ID]        | Tenant ID of the tenant to be used (default: 1)                              |
| -c                   | --config=[CONFIG-FILE]        | Path to the configuration file                                                        |
| -h                   | --help                        | Help message for displaying further information                                            |
| -q                   | --quiet                       | Quiet mode to suppress output                                                       |
| -V                   | --version                     | Output of the i-doit console version                                                           |
|                      | --ansi<br>--no-ansi           | Force ANSI output (or disable with --no-ansi)                                             |
| -n                   | --no-interaction              | Disables all interaction questions of the i-doit console                                      |
| -v / -vv / -vvv      | --verbose                     | Increases the verbosity of output (1 = normal output, 2 = detailed output, 3 = debug level) |

**Usage example**

```shell
sudo -u www-data php console.php search --user admin --password admin --tenantId 1 --searchString "Server001"
```

### search-index

Renews the search index by deleting and rewriting it.

**Options:**

| parameter (short) | parameter (long)   | Description                                                                                     |
| -------------------- | ---------------------- | ------------------------------------------------------------------------------------------------ |
|                      | --update               | Instead of only creating a new index, the current index documents are overwritten   |
|                      | --category=[CATEGORY]  | Whitelist of categories                                                                         |
|                      | --dry-run              | Run reindex without saving                                                             |
| -u                   | --user=[USERNAME]      | Username of a user authorized for execution                                      |
| -p                   | --password=[PASSWORD]  | Password for authentication of the previously specified user                                   |
| -i                   | --tenantId=[TENANT-ID] | Tenant ID of the tenant to be used (default: 1)                              |
| -c                   | --config=[CONFIG-FILE] | Path to the configuration file                                                        |
| -h                   | --help                 | Help message for displaying further information                                            |
| -q                   | --quiet                | Quiet mode to suppress output                                                       |
| -V                   | --version              | Output of the i-doit console version                                                           |
|                      | --ansi<br>--no-ansi    | Force ANSI output (or disable with --no-ansi)                                             |
| -n                   | --no-interaction       | Disables all interaction questions of the i-doit console                                      |
| -v / -vv / -vvv      | --verbose              | Increases the verbosity of output (1 = normal output, 2 = detailed output, 3 = debug level) |

**Usage example**

```shell
sudo -u www-data php console.php search-index --user admin --password admin --tenantId 1
```

### strip-description-html

This command allows you to remove HTML tags from the description field of all categories and objects

**Options:**

| parameter (short) | parameter (long)   | Description                                                                                     |
| -------------------- | ---------------------- | ------------------------------------------------------------------------------------------------ |
| -u                   | --user=[USERNAME]      | Username of a user authorized for execution                                      |
| -p                   | --password=[PASSWORD]  | Password for authentication of the previously specified user                                   |
| -i                   | --tenantId=[TENANT-ID] | Tenant ID of the tenant to be used (default: 1)                              |
| -c                   | --config=[CONFIG-FILE] | Path to the configuration file                                                        |
| -h                   | --help                 | Help message for displaying further information                                            |
| -q                   | --quiet                | Quiet mode to suppress output                                                       |
| -V                   | --version              | Output of the i-doit console version                                                           |
|                      | --ansi<br>--no-ansi    | Force ANSI output (or disable with --no-ansi)                                             |
| -n                   | --no-interaction       | Disables all interaction questions of the i-doit console                                      |
| -v / -vv / -vvv      | --verbose              | Increases the verbosity of output (1 = normal output, 2 = detailed output, 3 = debug level) |

**Usage example**

```shell
sudo -u www-data php console.php strip-description-html --user admin --password admin --tenantId 1
```

### sync-dynamic-groups

Re-synchronizes dynamic group members.

**Options:**

| parameter (short) | parameter (long)   | Description                                                                                     |
| -------------------- | ---------------------- | ------------------------------------------------------------------------------------------------ |
| -g                   | --groups=GROUPS        | Comma-separated list of IDs of dynamic groups                                            |
| -u                   | --user=[USERNAME]      | Username of a user authorized for execution                                      |
| -p                   | --password=[PASSWORD]  | Password for authentication of the previously specified user                                   |
| -i                   | --tenantId=[TENANT-ID] | Tenant ID of the tenant to be used (default: 1)                              |
| -h                   | --help                 | Help message for displaying further information                                            |
| -q                   | --quiet                | Quiet mode to suppress output                                                       |
| -V                   | --version              | Output of the i-doit console version                                                           |
|                      | --ansi<br>--no-ansi    | Force ANSI output (or disable with --no-ansi)                                             |
| -n                   | --no-interaction       | Disables all interaction questions of the i-doit console                                      |
| -v / -vv / -vvv      | --verbose              | Increases the verbosity of output (1 = normal output, 2 = detailed output, 3 = debug level) |

**Usage example**

```shell
sudo -u www-data php console.php sync-dynamic-groups --user admin --password admin --tenantId --groups 173,188,219
```

### system-autoincrement

Sets the auto-increment value of the system. This affects object IDs, category entries, etc. When resetting the auto-increment, some content may become inaccessible.

**Options:**

| parameter (short) | parameter (long)            | Description                                                                                     |
| -------------------- | ------------------------------- | ------------------------------------------------------------------------------------------------ |
|                      | --autoIncrement=[AUTOINCREMENT] | Number to which the auto-increment should be set                                          |
| -u                   | --user=[USERNAME]               | Username of a user authorized for execution                                      |
| -p                   | --password=[PASSWORD]           | Password for authentication of the previously specified user                                   |
| -i                   | --tenantId=[TENANT-ID]          | Tenant ID of the tenant to be used (default: 1)                              |
| -h                   | --help                          | Help message for displaying further information                                            |
| -q                   | --quiet                         | Quiet mode to suppress output                                                       |
| -V                   | --version                       | Output of the i-doit console version                                                           |
|                      | --ansi<br>--no-ansi             | Force ANSI output (or disable with --no-ansi)                                             |
| -n                   | --no-interaction                | Disables all interaction questions of the i-doit console                                      |
| -v / -vv / -vvv      | --verbose                       | Increases the verbosity of output (1 = normal output, 2 = detailed output, 3 = debug level) |

**Usage example**

```shell
sudo -u www-data php console.php system-autoincrement --user admin --password admin --tenantId 1 --autoIncrement 20
```

### system-categorycleanup

Optionally cleans up category entries with status incomplete, archived, or deleted

**Options:**

| parameter (short) | parameter (long)              | Description                                                                                                                                                                      |
| -------------------- | --------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
|                      | --categoryStatus=[CATEGORYSTATUS] | Use to start cleaning up the specified status:<br>**1** for "unfertige" category entries<br>**3** for "archivierte" category entries<br>**4** for "deleted" category entries |
| -u                   | --user=[USERNAME]                 | Username of a user authorized for execution                                                                                                                       |
| -p                   | --password=[PASSWORD]             | Password for authentication of the previously specified user                                                                                                                    |
| -i                   | --tenantId=[TENANT-ID]            | Tenant ID of the tenant to be used (default: 1)                                                                                                               |
| -h                   | --help                            | Help message for displaying further information                                                                                                                             |
| -q                   | --quiet                           | Quiet mode to suppress output                                                                                                                                        |
| -V                   | --version                         | Output of the i-doit console version                                                                                                                                            |
|                      | --ansi<br>--no-ansi               | Force ANSI output (or disable with --no-ansi)                                                                                                                              |
| -n                   | --no-interaction                  | Disables all interaction questions of the i-doit console                                                                                                                       |
| -v / -vv / -vvv      | --verbose                         | Increases the verbosity of output (1 = normal output, 2 = detailed output, 3 = debug level)                                                                                  |

**Usage example**

```shell
sudo -u www-data php console.php system-categorycleanup --user admin --password admin --tenantId 1 --categoryStatus 3
```

### system-checkforupdates

Checks whether a new i-doit version is available.

**Options:**

| parameter (short) | parameter (long) | Description                                                                                     |
| -------------------- | -------------------- | ------------------------------------------------------------------------------------------------ |
| -h                   | --help               | Help message for displaying further information                                            |
| -q                   | --quiet              | Quiet mode to suppress output                                                       |
| -V                   | --version            | Output of the i-doit console version                                                           |
|                      | --ansi<br>--no-ansi  | Force ANSI output (or disable with --no-ansi)                                             |
| -n                   | --no-interaction     | Disables all interaction questions of the i-doit console                                      |
| -v / -vv / -vvv      | --verbose            | Increases the verbosity of output (1 = normal output, 2 = detailed output, 3 = debug level) |

**Usage example**

```shell
sudo -u www-data php console.php system-checkforupdates
```

### system-convert-non-innodb-tables

Converts all non-InnoDB tables to InnoDB.

**Options:**

| parameter (short) | parameter (long)   | Description                                                                                     |
| -------------------- | ---------------------- | ------------------------------------------------------------------------------------------------ |
|                      | --convert              | Starts the process of converting all non-UTF-8 tables                                     |
|                      | --table=[TABLE]        | Table to be checked and converted                                                |
| -u                   | --user=[USERNAME]      | Username of a user authorized for execution                                      |
| -p                   | --password=[PASSWORD]  | Password for authentication of the previously specified user                                   |
| -i                   | --tenantId=[TENANT-ID] | Tenant ID of the tenant to be used (default: 1)                              |
| -h                   | --help                 | Help message for displaying further information                                            |
| -q                   | --quiet                | Quiet mode to suppress output                                                       |
| -V                   | --version              | Output of the i-doit console version                                                           |
|                      | --ansi<br>--no-ansi    | Force ANSI output (or disable with --no-ansi)                                             |
| -n                   | --no-interaction       | Disables all interaction questions of the i-doit console                                      |
| -v / -vv / -vvv      | --verbose              | Increases the verbosity of output (1 = normal output, 2 = detailed output, 3 = debug level) |

**Usage example**

```shell
sudo -u www-data php console.php system-convert-non-innodb-tables --convert --table TABLE_NAME
```

### system-convert-non-utf8-tables

Converts all non-UTF-8 data types to UTF-8.

**Options:**

| parameter (short) | parameter (long)   | Description                                                                                     |
| -------------------- | ---------------------- | ------------------------------------------------------------------------------------------------ |
|                      | --convert              | Starts the process of converting all non-UTF-8 tables                                     |
| -u                   | --user=[USERNAME]      | Username of a user authorized for execution                                      |
| -p                   | --password=[PASSWORD]  | Password for authentication of the previously specified user                                   |
| -i                   | --tenantId=[TENANT-ID] | Tenant ID of the tenant to be used (default: 1)                              |
| -h                   | --help                 | Help message for displaying further information                                            |
| -q                   | --quiet                | Quiet mode to suppress output                                                       |
| -V                   | --version              | Output of the i-doit console version                                                           |
|                      | --ansi<br>--no-ansi    | Force ANSI output (or disable with --no-ansi)                                             |
| -n                   | --no-interaction       | Disables all interaction questions of the i-doit console                                      |
| -v / -vv / -vvv      | --verbose              | Increases the verbosity of output (1 = normal output, 2 = detailed output, 3 = debug level) |

**Usage example**

```shell
sudo -u www-data php console.php system-convert-non-utf8-tables --convert
```

### system-location-fix

Executes the location correction from the GUI in the console

**Options:**

| parameter (short) | parameter (long)   | Description                                                                                     |
| -------------------- | ---------------------- | ------------------------------------------------------------------------------------------------ |
| -u                   | --user=[USERNAME]      | Username of a user authorized for execution                                      |
| -p                   | --password=[PASSWORD]  | Password for authentication of the previously specified user                                   |
| -i                   | --tenantId=[TENANT-ID] | Tenant ID of the tenant to be used (default: 1)                              |
| -c                   | --config=[CONFIG-FILE] | Path to the configuration file                                                        |
| -h                   | --help                 | Help message for displaying further information                                            |
| -q                   | --quiet                | Quiet mode to suppress output                                                       |
| -V                   | --version              | Output of the i-doit console version                                                           |
|                      | --ansi<br>--no-ansi    | Force ANSI output (or disable with --no-ansi)                                             |
| -n                   | --no-interaction       | Disables all interaction questions of the i-doit console                                      |
| -v / -vv / -vvv      | --verbose              | Increases the verbosity of output (1 = normal output, 2 = detailed output, 3 = debug level) |

**Usage example**

```shell
sudo -u www-data php console.php system-location-fix --user admin --password admin --tenantId 1 --config /path/to/config/file
```

### system-objectcleanup

Cleans up all objects with a user-definable status.

**Options:**

| parameter (short) | parameter (long)          | Description                                                                                     |
| -------------------- | ----------------------------- | ------------------------------------------------------------------------------------------------ |
|                      | --objectStatus=[OBJECTSTATUS] | Defines which status should be cleaned up: 1: "incomplete"; 3: "archived"; 4: "deleted"  |
| -u                   | --user=[USERNAME]             | Username of a user authorized for execution                                      |
| -p                   | --password=[PASSWORD]         | Password for authentication of the previously specified user                                   |
| -i                   | --tenantId=[TENANT-ID]        | Tenant ID of the tenant to be used (default: 1)                              |
| -c                   | --config=[CONFIG-FILE]        | Path to the configuration file                                                        |
| -h                   | --help                        | Help message for displaying further information                                            |
| -q                   | --quiet                       | Quiet mode to suppress output                                                       |
| -V                   | --version                     | Output of the i-doit console version                                                           |
|                      | --ansi<br>--no-ansi           | Force ANSI output (or disable with --no-ansi)                                             |
| -n                   | --no-interaction              | Disables all interaction questions of the i-doit console                                      |
| -v / -vv / -vvv      | --verbose                     | Increases the verbosity of output (1 = normal output, 2 = detailed output, 3 = debug level) |

**Usage example**

```shell
sudo -u www-data php console.php system-objectcleanup --user admin --password admin --tenantId 1 --objectStatus 1
```

### system-objectrelations

Renews the designations of all object relationships.

**Options:**

| parameter (short) | parameter (long)                  | Description                                                                                     |
| -------------------- | ------------------------------------- | ------------------------------------------------------------------------------------------------ |
|                      | --categoryConstant=[CATEGORYCONSTANT] | Constant of the category for which the process should be executed (e.g., C__CATG__IP)           |
| -u                   | --user=[USERNAME]                     | Username of a user authorized for execution                                      |
| -p                   | --password=[PASSWORD]                 | Password for authentication of the previously specified user                                   |
| -i                   | --tenantId=[TENANT-ID]                | Tenant ID of the tenant to be used (default: 1)                              |
| -c                   | --config=[CONFIG-FILE]                | Path to the configuration file                                                        |
| -h                   | --help                                | Help message for displaying further information                                            |
| -q                   | --quiet                               | Quiet mode to suppress output                                                       |
| -V                   | --version                             | Output of the i-doit console version                                                           |
|                      | --ansi<br>--no-ansi                   | Force ANSI output (or disable with --no-ansi)                                             |
| -n                   | --no-interaction                      | Disables all interaction questions of the i-doit console                                      |
| -v / -vv / -vvv      | --verbose                             | Increases the verbosity of output (1 = normal output, 2 = detailed output, 3 = debug level) |

**Usage example**

```shell
sudo -u www-data php console.php system-objectrelations --user admin --password admin --tenantId 1 --categoryConstant C__CATG__IP
```

### system-refresh-table-configuration

Refreshes all available list configurations (object types and categories)

**Options:**

| parameter (short) | parameter (long)          | Description                                                                                                                                                   |
| -------------------- | ----------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| -a                   | --all                         | Process all object type table configurations                                                                                                             |
| -o                   | --object-types=[OBJECT-TYPES] | Only process certain object type table configurations by their constant (a comma-separated list of constants can be specified) |
| -u                   | --user=[USERNAME]             | Username of a user authorized for execution                                                                                                    |
| -p                   | --password=[PASSWORD]         | Password for authentication of the previously specified user                                                                                                 |
| -i                   | --tenantId=[TENANT-ID]        | Tenant ID of the tenant to be used (default: 1)                                                                                            |
| -c                   | --config=[CONFIG-FILE]        | Path to the configuration file                                                                                                                      |
| -h                   | --help                        | Help message for displaying further information                                                                                                          |
| -q                   | --quiet                       | Quiet mode to suppress output                                                                                                                     |
| -V                   | --version                     | Output of the i-doit console version                                                                                                                         |
|                      | --ansi<br>--no-ansi           | Force ANSI output (or disable with --no-ansi)                                                                                                           |
| -n                   | --no-interaction              | Disables all interaction questions of the i-doit console                                                                                                    |
| -v / -vv / -vvv      | --verbose                     | Increases the verbosity of output (1 = normal output, 2 = detailed output, 3 = debug level)                                                               |

**Usage example**

```shell
sudo -u www-data php console.php system-refresh-table-configuration --user admin --password admin --tenantId 1
```

### system-set-settings

Allows setting Admin Center settings via the CLI.

**Options:**

| parameter (short) | parameter (long)  | Description                                                                                     |
| -------------------- | --------------------- | ------------------------------------------------------------------------------------------------ |
| -u                   | --user=[USERNAME]     | Username of a user authorized for execution                                      |
| -p                   | --password=[PASSWORD] | Password for authentication of the previously specified user                                   |
| -s                   | --settings=[SETTINGS] | JSON with key-value pairs, e.g.: {"proxy.active": 1, [...]}                                           |
| -h                   | --help                | Help message for displaying further information                                            |
| -q                   | --quiet               | Quiet mode to suppress output                                                       |
| -V                   | --version             | Output of the i-doit console version                                                           |
|                      | --ansi<br>--no-ansi   | Force ANSI output (or disable with --no-ansi)                                             |
| -n                   | --no-interaction      | Disables all interaction questions of the i-doit console                                      |
| -v / -vv / -vvv      | --verbose             | Increases the verbosity of output (1 = normal output, 2 = detailed output, 3 = debug level) |

**Usage example**

```shell
sudo -u www-data php system-set-settings --user admin --password admin --settings="{\"proxy.active\":1,\"proxy.host\":\"http://myproxy.net\",\"unknown-setting\": 4}" -n
```

### tenant-create

Creates a new tenant.

**Options:**

| parameter (short) | parameter (long)                          | Description                                                                                     |
| -------------------- | --------------------------------------------- | ------------------------------------------------------------------------------------------------ |
| -u                   | --root-user=[ROOT-USER]                       | Username of the privileged DB user [default: "root"]                                   |
| -p                   | --root-password=[ROOT-PASSWORD]               | Password of the privileged DB user                                                         |
| -U                   | --user=[USER]                                 | Database username for the new tenant [default: "idoit"]                                       |
| -P                   | --password=[PASSWORD]                         | Database password for the new tenant                                                          |
| -d                   | --database=[DATABASE]                         | Database name for the new tenant [default: "idoit_data"]                                          |
| -t                   | --title=[TITLE]                               | Name of the new tenant [default: "Your company name"]                                           |
|                      | --login-user[=LOGIN-USER]                     | Username of the i-doit user                                                                |
|                      | --login-password[=LOGIN-PASSWORD]             | Password of the i-doit user                                                                    |
|                      | --login-recovery-email[=LOGIN-RECOVERY-EMAIL] | Recovery email of the i-doit user                                                |
|                      | --send-email                                  | Send email for the initial password                                                        |
| -h                   | --help                                        | Help message for displaying further information                                            |
| -q                   | --quiet                                       | Quiet mode to suppress output                                                       |
| -V                   | --version                                     | Output of the i-doit console version                                                           |
|                      | --ansi<br>--no-ansi                           | Force ANSI output (or disable with --no-ansi)                                             |
| -n                   | --no-interaction                              | Disables all interaction questions of the i-doit console                                      |
| -v / -vv / -vvv      | --verbose                                     | Increases the verbosity of output (1 = normal output, 2 = detailed output, 3 = debug level) |

**Usage example**

```shell
sudo -u www-data php console.php tenant-create --title Musterfirma --user idoit --password idoitpassword -- enable --tenantId 3
```

### tenant-disable

Disables an existing tenant.

**Options:**

| parameter (short) | parameter (long)   | Description                                                                                     |
| -------------------- | ---------------------- | ------------------------------------------------------------------------------------------------ |
| -u                   | --user=[USERNAME]      | Username of a user authorized for execution                                      |
| -p                   | --password=[PASSWORD]  | Password for authentication of the previously specified user                                   |
| -i                   | --tenantId=[TENANT-ID] | Tenant ID of the tenant to be used (default: 1)                              |
| -h                   | --help                 | Help message for displaying further information                                            |
| -q                   | --quiet                | Quiet mode to suppress output                                                       |
| -V                   | --version              | Output of the i-doit console version                                                           |
|                      | --ansi<br>--no-ansi    | Force ANSI output (or disable with --no-ansi)                                             |
| -n                   | --no-interaction       | Disables all interaction questions of the i-doit console                                      |
| -v / -vv / -vvv      | --verbose              | Increases the verbosity of output (1 = normal output, 2 = detailed output, 3 = debug level) |

**Usage example**

```shell
sudo -u www-data php console.php tenant-disable --tenantId 2 --user admin --password admin
```

### tenant-enable

Enables an existing tenant.

**Options:**

| parameter (short) | parameter (long)   | Description                                                                                     |
| -------------------- | ---------------------- | ------------------------------------------------------------------------------------------------ |
| -u                   | --user=[USERNAME]      | Username of a user authorized for execution                                      |
| -p                   | --password=[PASSWORD]  | Password for authentication of the previously specified user                                   |
| -i                   | --tenantId=[TENANT-ID] | Tenant ID of the tenant to be used (default: 1)                              |
| -h                   | --help                 | Help message for displaying further information                                            |
| -q                   | --quiet                | Quiet mode to suppress output                                                       |
| -V                   | --version              | Output of the i-doit console version                                                           |
|                      | --ansi<br>--no-ansi    | Force ANSI output (or disable with --no-ansi)                                             |
| -n                   | --no-interaction       | Disables all interaction questions of the i-doit console                                      |
| -v / -vv / -vvv      | --verbose              | Increases the verbosity of output (1 = normal output, 2 = detailed output, 3 = debug level) |

**Usage example**

```shell
sudo -u www-data php console.php tenant-enable --tenantId 2 --user admin --password admin
```

### tenant-list

Lists all existing tenants.

**Options:**

| parameter (short) | parameter (long) | Description                                                                                     |
| -------------------- | -------------------- | ------------------------------------------------------------------------------------------------ |
| -h                   | --help               | Help message for displaying further information                                            |
| -q                   | --quiet              | Quiet mode to suppress output                                                       |
| -V                   | --version            | Output of the i-doit console version                                                           |
|                      | --ansi<br>--no-ansi  | Force ANSI output (or disable with --no-ansi)                                             |
| -n                   | --no-interaction     | Disables all interaction questions of the i-doit console                                      |
| -v / -vv / -vvv      | --verbose            | Increases the verbosity of output (1 = normal output, 2 = detailed output, 3 = debug level) |

**Usage example**

```shell
sudo -u www-data php console.php tenant-list
```

### tenant-remove

Removes an existing tenant

**Options:**

| parameter (short) | parameter (long)  | Description                                                                                     |
| -------------------- | --------------------- | ------------------------------------------------------------------------------------------------ |
| -u                   | --user=[USERNAME]     | Username of a user authorized for execution                                      |
| -p                   | --password=[PASSWORD] | Password for authentication of the previously specified user                                   |
| -i                   | --tenant=[TENANT-ID]  | Tenant ID of the tenant to be used (default: 1)                              |
| -h                   | --help                | Help message for displaying further information                                            |
| -q                   | --quiet               | Quiet mode to suppress output                                                       |
| -V                   | --version             | Output of the i-doit console version                                                           |
|                      | --ansi<br>--no-ansi   | Force ANSI output (or disable with --no-ansi)                                             |
| -n                   | --no-interaction      | Disables all interaction questions of the i-doit console                                      |
| -v / -vv / -vvv      | --verbose             | Increases the verbosity of output (1 = normal output, 2 = detailed output, 3 = debug level) |

**Usage example**

```shell
sudo -u www-data php console.php tenant-remove --user admin --password admin --tenant 1
```

### uninstall

Uninstalls the current i-doit installation

**Options:**

| parameter (short) | parameter (long)  | Description                                                                                     |
| -------------------- | --------------------- | ------------------------------------------------------------------------------------------------ |
| -u                   | --user=[USERNAME]     | Username of a user authorized for execution                                      |
| -p                   | --password=[PASSWORD] | Password for authentication of the previously specified user                                   |
| -h                   | --help                | Help message for displaying further information                                            |
| -q                   | --quiet               | Quiet mode to suppress output                                                       |
| -V                   | --version             | Output of the i-doit console version                                                           |
|                      | --ansi<br>--no-ansi   | Force ANSI output (or disable with --no-ansi)                                             |
| -n                   | --no-interaction      | Disables all interaction questions of the i-doit console                                      |
| -v / -vv / -vvv      | --verbose             | Increases the verbosity of output (1 = normal output, 2 = detailed output, 3 = debug level) |

**Usage example**

```shell
sudo -u www-data php console.php uninstall --user admin --password admin
```

### update

Install an i-doit update.

**Options:**

| parameter (short) | parameter (long)  | Description                                                                                     |
| -------------------- | --------------------- | ------------------------------------------------------------------------------------------------ |
| -u                   | --user=[USERNAME]     | Username of a user authorized for execution                                      |
| -p                   | --password=[PASSWORD] | Password for authentication of the previously specified user                                   |
| -z                   | --zip=[ZIP]           | Path to the update package                                                               |
|                      | --v=V                 | Version to be installed                                                                        |
| -h                   | --help                | Help message for displaying further information                                            |
| -q                   | --quiet               | Quiet mode to suppress output                                                       |
| -V                   | --version             | Output of the i-doit console version                                                           |
|                      | --ansi<br>--no-ansi   | Force ANSI output (or disable with --no-ansi)                                             |
| -n                   | --no-interaction      | Disables all interaction questions of the i-doit console                                      |
| -v / -vv / -vvv      | --verbose             | Increases the verbosity of output (1 = normal output, 2 = detailed output, 3 = debug level) |

**Usage example**

```shell
sudo -u www-data php console.php update --user admin --password admin --zip /path/to/zip/file.zip --v 1.14
```

### idoit:feature-manager

This command allows you to activate features in i-doit.

**Options:**

| parameter (short) | parameter (long)  | Description                                                                                     |
| -------------------- | --------------------- | ------------------------------------------------------------------------------------------------ |
|                      | --unset-cloud         | Disable when application is a cloud instance                                               |
|                      | --set-cloud           | Enable when application is a cloud instance                                                 |
| -e                   | --enable=[ENABLE]     | Enable features                                                                              |
| -d                   | --disable=[DISABLE]   | Disable features                                                                            |
| -r                   | --replace=[REPLACE]   | Replace existing features                                                                  |
| -c                   | --cloudable           | Only cloud-capable features are considered                                                        |
| -f                   | --noncloudable        | Only non-cloud-capable features are considered                                                  |
|                      | --wizard              | Interactive mode to enable or disable features                                   |
| -l                   | --list                | Shows all available features                                                                  |
| -u                   | --user=[USERNAME]     | Username of a user authorized for execution                                      |
| -p                   | --password=[PASSWORD] | Password for authentication of the previously specified user                                   |
| -i                   | --tenant=[TENANT-ID]  | Tenant ID of the tenant to be used (default: 1)                              |
| -h                   | --help                | Help message for displaying further information                                            |
| -q                   | --quiet               | Quiet mode to suppress output                                                       |
| -V                   | --version             | Output of the i-doit console version                                                           |
|                      | --ansi<br>--no-ansi   | Force ANSI output (or disable with --no-ansi)                                             |
| -n                   | --no-interaction      | Disables all interaction questions of the i-doit console                                      |
| -v / -vv / -vvv      | --verbose             | Increases the verbosity of output (1 = normal output, 2 = detailed output, 3 = debug level) |

**Usage example**

```shell
sudo -u www-data php console.php idoit:feature-manager --enable update-gui --user admin --password admin
```

### idoit:set-env-var

This command allows you to set environment variables for i-doit.

**Options:**

| parameter (short) | parameter (long)  | Description                                                                                           |
| -------------------- | --------------------- | ------------------------------------------------------------------------------------------------------ |
| -k                   | --key-pair=[KEY-PAIR] | Comma-separated list of key-value pairs to be set as environment variables |
| -s                   | --show-variables      | Show all defined environment variables                                                           |
| -l                   | --list-variables      | Show all possible environment variables                                                             |
| -u                   | --user=[USERNAME]     | Username of a user authorized for execution                                            |
| -p                   | --password=[PASSWORD] | Password for authentication of the previously specified user                                         |
| -i                   | --tenant=[TENANT-ID]  | Tenant ID of the tenant to be used (default: 1)                                    |
| -h                   | --help                | Help message for displaying further information                                                  |
| -q                   | --quiet               | Quiet mode to suppress output                                                             |
| -V                   | --version             | Output of the i-doit console version                                                                 |
|                      | --ansi<br>--no-ansi   | Force ANSI output (or disable with --no-ansi)                                                   |
| -n                   | --no-interaction      | Disables all interaction questions of the i-doit console                                            |
| -v / -vv / -vvv      | --verbose             | Increases the verbosity of output (1 = normal output, 2 = detailed output, 3 = debug level)       |

**Usage example**

```shell
sudo -u www-data php console.php idoit:set-env-var -k "IDOIT_APP_URL=localhost" --user admin --password admin
```

### idoit:set-update-capability

Enable and disable the i-doit update function.

**Options:**

| parameter (short) | parameter (long)  | Description                                                                                     |
| -------------------- | --------------------- | ------------------------------------------------------------------------------------------------ |
| -u                   | --user=[USERNAME]     | Username of a user authorized for execution                                      |
| -p                   | --password=[PASSWORD] | Password for authentication of the previously specified user                                   |
| -i                   | --tenant=[TENANT-ID]  | Tenant ID of the tenant to be used (default: 1)                              |
| -h                   | --help                | Help message for displaying further information                                            |
| -q                   | --quiet               | Quiet mode to suppress output                                                       |
| -V                   | --version             | Output of the i-doit console version                                                           |
|                      | --ansi<br>--no-ansi   | Force ANSI output (or disable with --no-ansi)                                             |
| -n                   | --no-interaction      | Disables all interaction questions of the i-doit console                                      |
| -v / -vv / -vvv      | --verbose             | Increases the verbosity of output (1 = normal output, 2 = detailed output, 3 = debug level) |

**Usage example**

```shell
sudo -u www-data php console.php idoit:set-update-capability enable --user admin --password admin
```

### system:tenant-export

Export your tenant data including uploaded files in a ZIP package.

**Options:**

| parameter (short) | parameter (long)  | Description                                                                                     |
| -------------------- | --------------------- | ------------------------------------------------------------------------------------------------ |
| -u                   | --user=[USERNAME]     | Username of a user authorized for execution                                      |
| -p                   | --password=[PASSWORD] | Password for authentication of the previously specified user                                   |
| -i                   | --tenant=[TENANT-ID]  | Tenant ID of the tenant to be used (default: 1)                              |
| -h                   | --help                | Help message for displaying further information                                            |
| -q                   | --quiet               | Quiet mode to suppress output                                                       |
| -V                   | --version             | Output of the i-doit console version                                                           |
|                      | --ansi<br>--no-ansi   | Force ANSI output (or disable with --no-ansi)                                             |
| -n                   | --no-interaction      | Disables all interaction questions of the i-doit console                                      |
| -v / -vv / -vvv      | --verbose             | Increases the verbosity of output (1 = normal output, 2 = detailed output, 3 = debug level) |

**Usage example**

```shell
sudo -u www-data php console.php system:tenant-export --user admin --password admin
```

### system:tenant-import

Import your tenant data including uploaded files from a ZIP package.

**Options:**

| parameter (short) | parameter (long)                        | Description                                                                                                                                                                                                                                                                                                 |
| -------------------- | ------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| -f,                  | --file=FILE                                 | Export file of the tenant created with [system:tenant-export](#systemtenant-export)                                                                                                                                                                                                                                  |
| -d,                  | --tenant-database-name=TENANT-DATABASE-NAME | Tenant database name                                                                                                                                                                                                                                                                                     |
| -t,                  | --tenant-title=TENANT-TITLE                 | Tenant name                                                                                                                                                                                                                                                                                               |
|                      | --with-system-settings                      | Include system settings:<br>When this option is enabled, the file `system.settings.json` is imported and overwrites the current system settings.<br>All settings that already exist but are not defined in `system.settings.json` remain unchanged. |
|                      | --with-tenant-settings                      | Include tenant settings:<br>When set, `tenant.settings.json` is imported.                                                                                                                                                                                                                  |
|                      | --db-root-user=DB-ROOT-USER                 | Database root username                                                                                                                                                                                                                                                                                  |
|                      | --db-root-pass=DB-ROOT-PASS                 | Database root password                                                                                                                                                                                                                                                                                      |
|                      | --db-host=DB-HOST                           | Database host [default: "localhost"]                                                                                                                                                                                                                                                                       |
|                      | --db-port=DB-PORT                           | Database port [default: "3306"]                                                                                                                                                                                                                                                                            |
| -h                   | --help                                      | Help message for displaying further information                                                                                                                                                                                                                                                        |
| -q                   | --quiet                                     | Quiet mode to suppress output                                                                                                                                                                                                                                                                   |
| -V                   | --version                                   | Output of the i-doit console version                                                                                                                                                                                                                                                                       |
|                      | --ansi<br>--no-ansi                         | Force ANSI output (or disable with --no-ansi)                                                                                                                                                                                                                                                         |
| -n                   | --no-interaction                            | Disables all interaction questions of the i-doit console                                                                                                                                                                                                                                                  |
| -v / -vv / -vvv      | --verbose                                   | Increases the verbosity of output (1 = normal output, 2 = detailed output, 3 = debug level)                                                                                                                                                                                                             |
