---
title: Commands and options
description: Commands and options
icon: material/console
status:
lang: en
---

# Commands and options

!!! warning "Please create a complete backup before making any changes to an interface/import. If the result is not satisfying, it can then be restored"

!!! attention "Notes"
    All examples on this page refer to the use of the i-doit user with the combination user name/password: **admin**/**admin**.<br>
    All parameters are case-sensitive, which means that upper and lower case must be followed exactly according to the examples and specifications.

## The following handlers are available for the i-doit Console

| Command                                                                   | Internal system description                                                                                                        |
| ------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------- |
| [addon-activate](#addon-activate)                                         | Activating Add-ons                                                                                                                 |
| [addon-deactivate](#addon-deactivate)                                     | Deactivating Add-ons                                                                                                               |
| [addon-install](#addon-install)                                           | Installing Add-ons                                                                                                                 |
| [addon-list](#addon-list)                                                 | Displays a list of all installed add-ons                                                                                           |
| [addon-uninstall](#addon-uninstall)                                       | Deactivate add-on                                                                                                                  |
| [admin-center-password-reset](#admin-center-password-reset)               | Reset the password for the Admin-Center                                                                                            |
| [auth-cleanup](#auth-cleanup)                                             | Clean up rights system                                                                                                             |
| [clear-credentials](#clear-credentials)                                   | Removes user credentials                                                                                                           |
| [completion](#completion)                                                 | Dump the shell completion script                                                                                                   |
| [contracts-outdated](#contracts-outdated)                                 | Updates status of outdated contracts                                                                                               |
| [extend-contracts](#extend-contracts)                                     | Extends Contracts with last cancellation date in the past                                                                          |
| [help](#help)                                                             | Displays the help for a command                                                                                                    |
| [import-csv](#import-csv)                                                 | Import data from a CSV file (uses a defined import profile from the GUI)                                                           |
| [import-csvprofiles](#import-csvprofiles)                                 | Listing all CSV Import Profiles                                                                                                    |
| [import-hinventory](#import-hinventory)                                   | Import data from hinventory data from hinventory                                                                                   |
| [import-jdisc](#import-jdisc)                                             | Import data from JDisc Discovery (SQL Server access is configured via the GUI)                                                     |
| [import-jdiscdiscovery](#import-jdiscdiscovery)                           | Start a scan in JDisc Discovery (API access is configured via the GUI)                                                             |
| [import-syslog](#import-syslog)                                           | Import data from a syslog into the i-doit logbook                                                                                  |
| [import-xml](#import-xml)                                                 | Importing data from XML                                                                                                            |
| [install](#install)                                                       | Install the i-doit application                                                                                                     |
| [jdisc-create-server](#jdisc-create-server)                               | Creates a JDisc server, based on given input                                                                                       |
| [ldap-sync](#ldap-sync)                                                   | Import persons and groups of persons from an LDAP directory or Active Directory (AD)                                               |
| [ldap-syncdn](#ldap-sync)                                                 | Synchronize from an LDAP/AD the Distinguished Name (DN) of the users (see category LDAP)                                           |
| [license-add](#license-add)                                               | Adds a license for i-doit (in progress)                                                                                            |
| [license-assign](#license-assign)                                         | Assigns a hosting license to a client (in progress)                                                                                |
| [license-import](#license-import)                                         | Imports licenses from the i-doit Server (in progress)                                                                              |
| [license-key](#license-key)                                               | Sets a license key for i-doit (in process)                                                                                         |
| [license-list](#license-list)                                             | Lists all licenses with all information (ID; product; type; start date; end date; licensed objects; licensed clients; environment) |
| [license-remove](#license-remove)                                         | Removes licenses from i-doit                                                                                                       |
| [list](#list)                                                             | Lists all commands                                                                                                                 |
| [logbook:archive](#logbookarchive)                                        | Archiving logbook entries                                                                                                          |
| [migrate-uploaded-files](#migrate-uploaded-files)                         | Migrates uploaded files in i-doit <v1.13 to v.1.14>                                                                                |
| [notifications-list](#notifications-list)                                 | Lists all notification types and notifications for later usage                                                                     |
| [notifications-send](#notifications-send)                                 | Send notifications by e-mail (notifications are configured in the GUI)                                                             |
| [report-export](#report-export)                                           | Exporting a report as a file                                                                                                       |
| [report-refresher](#report-refresher)                                     | Refreshes one or all reports.                                                                                                      |
| [search](#search)                                                         | Search in i-doit                                                                                                                   |
| [search-index](#search-index)                                             | Create/renew search index                                                                                                          |
| [strip-description-html](#strip-description-html)                         | With this command you can strip html tags in description field of all categories and objects                                       |
| [sync-dynamic-groups](#sync-dynamic-groups)                               | Resynchronizes dynamic group members                                                                                               |
| [system-autoincrement](#system-autoincrement)                             | set auto_increment of MariaDB/MySQL tables to a positive integer value (concerns the data structure! Use with caution!)            |
| [system-categorycleanup](#system-categorycleanup)                         | Purges optionally category entries that are in the state unfinished, archived or deleted                                           |
| [system-checkforupdates](#system-checkforupdates)                         | Check for updates for i-doit                                                                                                       |
| [system-convert-non-innodb-tables](#system-convert-non-innodb-tables)     | Converts all tables that are not in INNODB to INNODB (concerns the database coding. Use with caution!)                             |
| [system-convert-non-utf8-tables](#system-convert-non-utf8-tables)         | Converts all non-UTF8 tables to UTF8 tables (concerns database encoding. Use with caution!)                                        |
| [system-location-fix](#system-location-fix)                               | Executes the location correction from the GUI on the console                                                                       |
| [system-objectcleanup](#system-objectcleanup)                             | Clean up objects (objects with the status "unfinished", "archived" or "deleted" are permanently removed)                           |
| [system-objectrelations](#system-objectrelations)                         | Recreate Object Relationships                                                                                                      |
| [system-refresh-table-configuration](#system-refresh-table-configuration) | Refreshes all available list configurations (object types and categories)                                                          |
| [system-set-settings](#system-set-settings)                               | Enables Admin-Center settings to be set via the CLI                                                                                |
| [tenant-create](#tenant-create)                                           | Add a new tenant                                                                                                                   |
| [tenant-disable](#tenant-disable)                                         | Deactivate an existing tenant                                                                                                      |
| [tenant-enable](#tenant-enable)                                           | Activate an existing tenant                                                                                                        |
| [tenant-list](#tenant-list)                                               | List all available tenants                                                                                                         |
| [tenant-remove](#tenant-remove)                                           | Remove an existing tenant                                                                                                          |
| [uninstall](#uninstall)                                                   | Uninstalls i-doit                                                                                                                  |
| [update](#update)                                                         | Installs an update for i-doit                                                                                                      |
| [idoit:feature-manager](#idoitfeature-manager)                            | Activates features for i-doit                                                                                                      |
| [idoit:set-env-var](#idoitset-env-var)                                    | With this command it will be possible to set environmental variables for i-doit.                                                   |
| [idoit:set-update-capability](#idoitset-update-capability)                | Dis- and enable the i-doit update capability                                                                                       |
| [system:tenant-export](#systemtenant-export)                              | Export your tenant data including uploaded files in a ZIP package.                                                                 |
| [system:tenant-import](#systemtenant-import)                              | Import your tenant data including uploaded files from a ZIP package.                                                               |

!!! attention "Configuration file and parameters --config"
    It is possible to pass additional content to the call via a configuration file. This file must be stored in the i-doit directory src/handler/config/. An example in the form of the file "isys\_handler\_ldap.ini" can be found in the directory src/handler/config/examples/.<br>
    If this file is to be included in the process, it must be included using the --config or -c parameter.

### addon-activate

Activates installed add-ons for the desired tenant

**Options:**

| Parameter (short version) | Parameter (long version) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
| -u                        | --user=USERNAME          | i-doit Admin username                                                                        |
| -p                        | --password[=PASSWORD]    | i-doit Admin password                                                                        |
| -a                        | --addon[=ADDON]          | Add-on identifier (multiple values allowed)                                                  |
| -t                        | --tenant[=TENANT]        | Tenant id (multiple values allowed)                                                          |
| -h                        | --help                   | Help message for displaying further information                                              |
| -q                        | --quiet                  | Quiet-Mode to deactivate output                                                              |
| -V                        | --version                | Output of the i-doit Console version                                                         |
|                           | --ansi<br>--no-ansi      | Force (or disable --no-ansi) ANSI output                                                     |
| -n                        | --no-interaction         | Disables all interaction questions of the i-doit Console                                     |
| -v / -vv / -vvv           | --verbose                | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

```shell
sudo -u www-data php console.php addon-activate --user admin --password admin --tenant 1 --addon api
```

### addon-deactivate

Disabled installed add-ons for the desired tenant

**Options:**

| Parameter (short version) | Parameter (long version) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
| -u                        | --user=USERNAME          | i-doit Admin username                                                                        |
| -p                        | --password[=PASSWORD]    | i-doit Admin password                                                                        |
| -a                        | --addon[=ADDON]          | Add-on identifier (multiple values allowed)                                                  |
| -t                        | --tenant[=TENANT]        | Tenant id (multiple values allowed)                                                          |
| -h                        | --help                   | Help message for displaying further information                                              |
| -q                        | --quiet                  | Quiet-Mode to deactivate output                                                              |
| -V                        | --version                | Output of the i-doit Console version                                                         |
|                           | --ansi<br>--no-ansi      | Force (or disable --no-ansi) ANSI output                                                     |
| -n                        | --no-interaction         | Disables all interaction questions of the i-doit Console                                     |
| -v / -vv / -vvv           | --verbose                | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

```shell
sudo -u www-data php console.php addon-deactivate --user admin --password admin --tenant 1 --addon api
```

### addon-install

Installs add-ons for the desired tenant

**Options:**

| Parameter (short version) | Parameter (long version) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
| -u                        | --user=USERNAME          | i-doit Admin username                                                                        |
| -p                        | --password[=PASSWORD]    | i-doit Admin password                                                                        |
| -z                        | --zip=ZIP                | Path to add-on ZIP file                                                                      |
| -a                        | --addon[=ADDON]          | Add-on identifier (multiple values allowed)                                                  |
| -t                        | --tenant[=TENANT]        | Tenant id (multiple values allowed)                                                          |
| -h                        | --help                   | Help message for displaying further information                                              |
| -q                        | --quiet                  | Quiet-Mode to deactivate output                                                              |
| -V                        | --version                | Output of the i-doit Console version                                                         |
|                           | --ansi<br>--no-ansi      | Force (or disable --no-ansi) ANSI output                                                     |
| -n                        | --no-interaction         | Disables all interaction questions of the i-doit Console                                     |
| -v / -vv / -vvv           | --verbose                | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

```shell
sudo -u www-data php console.php addon-install --user admin --password admin --tenant 1 --addon api --zip /path/to/the/zip/file.zip
```

### addon-list

Displays a list with all installed add-ons for the selected tenant

**Options:**

| Parameter (short version) | Parameter (long version) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
| -a                        | --addon=ADDON            | Add-on identification                                                                        |
| -t                        | --tenant=TENANT-ID       | Tenant ID of the tenant to be used (default: 1)                                              |
| -h                        | --help                   | Help message for displaying further information                                              |
| -q                        | --quiet                  | Quiet-Mode to deactivate output                                                              |
| -V                        | --version                | Output of the i-doit Console version                                                         |
|                           | --ansi<br>--no-ansi      | Force (or disable --no-ansi) ANSI output                                                     |
| -n                        | --no-interaction         | Disables all interaction questions of the i-doit Console                                     |
| -v / -vv / -vvv           | --verbose                | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

```shell
sudo -u www-data php console.php addon-list --tenant 1
```

### addon-uninstall

Uninstall add-on

**Options:**

| Parameter (short version) | Parameter (long version) | Description                                                                                        |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------------- |
| -u                        | --user[=USER]            | i-doit Admin username [default: "admin"]                                                           |
| -p                        | --password[=PASSWORD]    | i-doit Admin password                                                                              |
| -a                        | --addon=ADDON            | Add-on identifier                                                                                  |
| -h                        | --help                   | Display help for the given command. When no command is given display help for the list command     |
| -q                        | --quiet                  | Do not output any message                                                                          |
| -V                        | --version                | Display this application version                                                                   |
| --ansi                    | --no-ansi                | Force (or disable --no-ansi) ANSI output                                                           |
| -n                        | --no-interaction         | Do not ask any interactive question                                                                |
| -v / -vv / -vvv           | --verbose                | Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug |

**Example of use**

```shell
sudo -u www-data php console.php addon-uninstall --user admin --password admin -a document
```

### admin-center-password-reset

With this command you can reset the Admin-Center password

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
sudo -u www-data php console.php admin-center-password-reset --user admin --password admin
```

### auth-cleanup

Cleanup all auth paths. It cleans up potentially orphaned rights system entries on a per-module basis. In the CMDB, for instance, permissions are removed from categories, objects and object types that no longer exist.

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
sudo -u www-data php console.php auth-cleanup --user admin --password admin --tenantId 1
```

### clear-credentials

It removes both attributes `username` and `password` from the users "login" category

**Options:**

| Parameter (short version) | Parameter (long version) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
|                           | --object=OBJECT          | Object ID of the user to be deactivated                                                      |
| -u                        | --user=USERNAME          | Username of a user who is authorized to execute                                              |
| -p                        | --password=PASSWORD      | Password for authentication of the previously specified user                                 |
| -h                        | --help                   | Help message for displaying further information                                              |
| -q                        | --quiet                  | Quiet-Mode to deactivate output                                                              |
| -V                        | --version                | Output of the i-doit Console version                                                         |
|                           | --ansi<br>--no-ansi      | Force (or disable --no-ansi) ANSI output                                                     |
| -n                        | --no-interaction         | Disables all interaction questions of the i-doit Console                                     |
| -v / -vv / -vvv           | --verbose                | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

```shell
sudo -u www-data php console.php clear-credentials --user admin --password admin --object ObjectID
```

### completion

The completion command dumps the shell completion script required to use shell autocompletion (currently only bash completion is supported).

**Options:**

| Parameter (short version) | Parameter (long version) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
|                           | --debug                  | Tail the completion debug log                                                                |
| -h                        | --help                   | Help message for displaying further information                                              |
| -q                        | --quit                   | Quiet-Mode to deactivate output                                                              |
| -v                        | --version                | Output of the i-doit Console version                                                         |
|                           | --ansi<br>--no-ansi      | Forces the output in ANSI format / Disables the output in ANSI format                        |
| -n                        | --no-interaction         | Disables all interaction questions of the i-doit Console                                     |
| -v / -vv / -vvv           | --verbose                | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

```shell
sudo -u www-data php console.php completion
```

### contracts-outdated

Updates status of outdated contracts

**Options:**

| Parameter (short version) | Parameter (long version) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
| -u                        | --user=USER              | Username                                                                                     |
| -p                        | --password=PASSWORD      | Password                                                                                     |
| -i                        | --tenantID=TENANTID      | Tenant ID default: 1                                                                         |
| -h                        | --help                   | Help message for displaying further information                                              |
| -q                        | --quit                   | Quiet-Mode to deactivate output                                                              |
| -v                        | --version                | Output of the i-doit Console version                                                         |
|                           | --ansi<br>--no-ansi      | Forces the output in ANSI format / Disables the output in ANSI format                        |
| -n                        | --no-interaction         | Disables all interaction questions of the i-doit Console                                     |
| -v / -vv / -vvv           | --verbose                | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

```shell
sudo -u www-data php console.php contracts-outdated --user admin --password admin
```

### extend-contracts

Automatically extend the runtime of not-cancelled contracts

**Options:**

| Parameter (short version) | Parameter (long version) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
|                           | --simulate               | Simulates contract extension                                                                 |
| -u                        | --user=USER              | Username                                                                                     |
| -p                        | --password=PASSWORD      | Password                                                                                     |
| -i                        | --tenantID=TENANTID      | Tenant ID default: 1                                                                         |
| -h                        | --help                   | Help message for displaying further information                                              |
| -c                        | --config=CONFIG          | Config file                                                                                  |
| -q                        | --quit                   | Quiet-Mode to deactivate output                                                              |
| -v                        | --version                | Output of the i-doit Console version                                                         |
|                           | --ansi<br>--no-ansi      | Forces the output in ANSI format / Disables the output in ANSI format                        |
| -v / -vv / -vvv           | --verbose                | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

```shell
sudo -u www-data php console.php extend-contracts --user admin --password admin
```

### help

Used in conjunction with another command to display its usage, arguments and options

**Options:**

| Parameter (short version) | Parameter (long version) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
|                           | --format=FORMAT          | Set the output format (txt, xml, json or md) Default: txt                                    |
|                           | --raw                    | Output of the command help                                                                   |
| -h                        | --help                   | Help message for displaying further information                                              |
| -q                        | --quiet                  | Quiet-Mode to deactivate output                                                              |
| -V                        | --version                | Output of the i-doit Console version                                                         |
|                           | --ansi<br>--no-ansi      | Force (or disable --no-ansi) ANSI output                                                     |
| -n                        | --no-interaction         | Disables all interaction questions of the i-doit Console                                     |
| -v / -vv / -vvv           | --verbose                | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

```shell
sudo -u www-data php console.php help --format=txt <command>
```

### import-csv

Performs the import of a CSV file with the desired import parameters

**Options:**

| Parameter (short version) | Parameter (long version)          | Description                                                                                  |
| ------------------------- | --------------------------------- | -------------------------------------------------------------------------------------------- |
|                           | --importFile=IMPORTFILE           | Specifies the file and its path to be used for the import                                    |
|                           | --importProfileId=IMPORTPROFILEID | Defines the profile with which the import is to be performed                                 |
|                           | --csvSeparator=CSVSEPARATOR       | Defines the separators for the import                                                        |
|                           | --multiValueMode=MULTIVALUEMODE   | Sets the mode for multi-value categories (possible values: "row", "column" or "comma")       |
| -u                        | --user=USERNAME                   | Username of a user who is authorized to execute                                              |
| -p                        | --password=PASSWORD               | Password for authentication of the previously specified user                                 |
| -i                        | --tenantId=TENANT-ID              | Tenant ID of the tenant to be used (default: 1)                                              |
| -h                        | --help                            | Help message for displaying further information                                              |
| -q                        | --quiet                           | Quiet-Mode to deactivate output                                                              |
| -V                        | --version                         | Output of the i-doit Console version                                                         |
|                           | --ansi<br>--no-ansi               | Force (or disable --no-ansi) ANSI output                                                     |
| -n                        | --no-interaction                  | Disables all interaction questions of the i-doit Console                                     |
| -v / -vv / -vvv           | --verbose                         | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

```shell
sudo -u www-data php console.php import-csv --user admin --password admin --tenantId 1 --importFile /var/www/imports/idoit-Demo-CSV-Import.csv --importProfileId 1 --csvSeparator ";" --multiValueMode column
```

### import-csvprofiles

Returns a list of the import profiles for the CSV import

**Options:**

| Parameter (short version) | Parameter (long version) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
| -u                        | --user=USERNAME          | Username of a user who is authorized to execute                                              |
| -p                        | --password=PASSWORD      | Password for authentication of the previously specified user                                 |
| -i                        | --tenantId=TENANT-ID     | Tenant ID of the tenant to be used (default: 1)                                              |
| -h                        | --help                   | Help message for displaying further information                                              |
| -q                        | --quiet                  | Quiet-Mode to deactivate output                                                              |
| -V                        | --version                | Output of the i-doit Console version                                                         |
|                           | --ansi<br>--no-ansi      | Force (or disable --no-ansi) ANSI output                                                     |
| -n                        | --no-interaction         | Disables all interaction questions of the i-doit Console                                     |
| -v / -vv / -vvv           | --verbose                | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

```shell
sudo -u www-data php console.php import-csvprofiles --user admin --password admin --tenantId 1
```

### import-hinventory

Performs an h-inventory import of a compatible XML file

**Options:**

| Parameter (short version) | Parameter (long version) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
|                           | --importFile=IMPORTFILE  | Specifies the file and its path to be used for the import                                    |
|                           | --usage                  | Further detailed information on using the command                                            |
|                           | --objectType=OBJECTTYPE  | Imports the specified object type                                                            |
|                           | --objectId=OBJECTID      | Imports only the specified object                                                            |
| -f                        | --force                  | Forces existing objects to be updated but overwrites the imported categories                 |
| -u                        | --user=USERNAME          | Username of a user who is authorized to execute                                              |
| -p                        | --password=PASSWORD      | Password for authentication of the previously specified user                                 |
| -i                        | --tenantId=TENANT-ID     | Tenant ID of the tenant to be used (default: 1)                                              |
| -h                        | --help                   | Help message for displaying further information                                              |
| -q                        | --quiet                  | Quiet-Mode to deactivate output                                                              |
| -V                        | --version                | Output of the i-doit Console version                                                         |
|                           | --ansi<br>--no-ansi      | Force (or disable --no-ansi) ANSI output                                                     |
| -n                        | --no-interaction         | Disables all interaction questions of the i-doit Console                                     |
| -v / -vv / -vvv           | --verbose                | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

```shell
sudo -u www-data php console.php import-hinventory --user admin --password admin --tenantId 1 --importFile /var/www/imports/idoit-Demo-h-inventory-import.xml
```

### import-jdisc

Performs a JDisc import to i-doit.

**Options:**

| Parameter (short version) | Parameter (long version)            | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   |
| ------------------------- | ----------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| -r                        | --profile=PROFILE                   | Specify/select the JDisc profile to be used for the import                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    |
| -g                        | --group=GROUP                       | Specify/select the group ID to be used for the import                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         |
| -x                        | --mode=MODE                         | Select the import mode.<br>**1**: "Append": The import will only create new objects.<br>**2**: "Update": The import will try to update already existing objects.<br>**3**: "Overwrite": Existing objects are updated, new objects are created additionally. Contents from Multi-Value-Categories are first completely deleted and then newly created on the database.<br>**4**: "Update (newly discovered)": The mode corresponds to "Update", but all known links between i-doit and JDisc objects are removed and reconnected after a check.<br>**5**: "Overwrite (newly discovered)": The import clears all existing identification keys before the Overwrite mode is triggered.<br>**6**: "Only create newly scanned devices": The import creates only newly scanned jdisc devices, existing ones are skipped.<br>**7**: "Update (Only existing objects)": Only existing objects are updated. No new objects are created. |
| -s                        | --server=SERVER                     | Enter the Server-ID to select it                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              |
| -o                        | --overwriteHost                     | Specify whether to overwrite overlapping host addresses                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       |
| -l                        | --detailedLogging[=DETAILEDLOGGING] | Increases the logging level:<br>**1**: low log level only notices and warnings are being logged<br>**2**: additionally to the low log level errors are being logged<br>**3**: additionally to the normal log level debug messages are being logged. (Memory intensive)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        |
| -b                        | --regenerateSearchIndex             | Automatically renews the search index                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         |
|                           | --listProfiles                      | Creates a list of available profiles                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          |
| -u                        | --user=USERNAME                     | Username of a user who is authorized to execute                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               |
| -p                        | --password=PASSWORD                 | Password for authentication of the previously specified user                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  |
| -i                        | --tenantId=TENANT-ID                | Tenant ID of the tenant to be used (default: 1)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               |
| -c                        | --config=CONFIG-FILE                | Specifying the path to the configuration file                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 |
| -h                        | --help                              | Help message for displaying further information                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               |
| -q                        | --quiet                             | Quiet-Mode to deactivate output                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               |
| -V                        | --version                           | Output of the i-doit Console version                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          |
|                           | --ansi<br>--no-ansi                 | Force (or disable --no-ansi) ANSI output                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      |
| -n                        | --no-interaction                    | Disables all interaction questions of the i-doit Console                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      |
| -v / -vv / -vvv           | --verbose                           | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  |

**Example of use**

```shell
sudo -u www-data php console.php import-jdisc --user admin --password admin --tenantId 1 --profile 3 --mode 4 --server 2 --detailedLogging 3 --regenerateSearchIndex
```

### import-jdiscdiscovery

Triggers a JDisc Discovery job.

**Options:**

| Parameter (short version) | Parameter (long version)              | Description                                                                                  |
| ------------------------- | ------------------------------------- | -------------------------------------------------------------------------------------------- |
| -s                        | --server=SERVER                       | Selecting the JDisc Server                                                                   |
| -j                        | --discoveryJob=DISCOVERYJOB           | Selection of the Discovery Job (Standard: "Discover all")                                    |
| -d                        | --deviceHostname=DEVICEHOSTNAME       | Selecting the device by host name                                                            |
| -a                        | --deviceHostAddress=DEVICEHOSTADDRESS | Selecting the device using the host address                                                  |
| -l                        | --showLog                             | Displays the log during the Discoveries                                                      |
| -u                        | --user=USERNAME                       | Username of a user who is authorized to execute                                              |
| -p                        | --password=PASSWORD                   | Password for authentication of the previously specified user                                 |
| -i                        | --tenantId=TENANT-ID                  | Tenant ID of the tenant to be used (default: 1)                                              |
| -c                        | --config=CONFIG-FILE                  | Specifying the path to the configuration file                                                |
| -h                        | --help                                | Help message for displaying further information                                              |
| -q                        | --quiet                               | Quiet-Mode to deactivate output                                                              |
| -V                        | --version                             | Output of the i-doit Console version                                                         |
|                           | --ansi<br>--no-ansi                   | Force (or disable --no-ansi) ANSI output                                                     |
| -n                        | --no-interaction                      | Disables all interaction questions of the i-doit Console                                     |
| -v / -vv / -vvv           | --verbose                             | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

```shell
sudo -u www-data php console.php import-jdiscdiscovery --user admin --password admin --tenantId 1 --server 2
```

### import-syslog

Imports content from a Syslog Server text file into the i-doit logbook.

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
sudo -u www-data php console.php import-syslog --user admin --password admin --tenantId 1
```

### import-xml

Performs an import of an XML file into i-doit

**Options:**

| Parameter (short version) | Parameter (long version) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
|                           | --importFile=IMPORTFILE  | Specification of the import file and its path                                                |
|                           | --usage                  | Detailed information on using the command                                                    |
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
sudo -u www-data php console.php import-xml --user admin --password admin --tenantId 1 --importFile /var/www/imports/idoit-Demo-xml-import.xml
```

### install

Install the i-doit application

**Options:**

| Parameter (short version) | Parameter (long version)          | Description                                                                                  |
| ------------------------- | --------------------------------- | -------------------------------------------------------------------------------------------- |
| -u                        | --root-user=ROOT-USER             | Username of a user who is authorized to execute                                              |
| -p                        | --root-password[=ROOT-PASSWORD]   | Password for authentication of the previously specified user                                 |
|                           | --host=HOST                       | Username of privileged DB User [default: "root"]                                             |
|                           | --port=PORT                       | Port for DB connection [default: 3306]                                                       |
| -d                        | --database=DATABASE               | i-doit System Database name [default: "idoit_system_temp"]                                   |
| -U                        | --user=USER                       | Username of i-doit system DB [default: "idoit"]                                              |
| -P                        | --password[=PASSWORD]             | Password of i-doit system DB                                                                 |
|                           | --admin-password[=ADMIN-PASSWORD] | Password for i-doit Admin-Center                                                             |
| -l                        | --license-server=LICENSE-SERVER   | Path for the i-doit license server [default: "https://lizenzen.i-doit.com"]                  |
| -k                        | --key[=KEY]                       | License key for i-doit                                                                       |
| -h                        | --help                            | Help message for displaying further information                                              |
| -q                        | --quiet                           | Quiet-Mode to deactivate output                                                              |
| -V                        | --version                         | Output of the i-doit Console version                                                         |
|                           | --ansi<br>--no-ansi               | Force (or disable --no-ansi) ANSI output                                                     |
| -n                        | --no-interaction                  | Disables all interaction questions of the i-doit Console                                     |
| -v / -vv / -vvv           | --verbose                         | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

```shell
sudo -u www-data php console.php install
```

### jdisc-create-server

Creates a JDisc server, based on given input.

**Options:**

| Parameter (Kurzform) | Parameter (Langform)              | Beschreibung                                                                                 |
| -------------------- | --------------------------------- | -------------------------------------------------------------------------------------------- |
|                      | --default                         | Set as default server                                                                        |
|                      | --title=[TITLE]                   | Name for JDisc server configuration [default: "JDisc Server"]                                |
|                      | --jdisc-host=[JDISC-HOST]         | JDisc host [default: "localhost"]                                                            |
|                      | --jdisc-port=[JDISC-PORT]         | JDisc port [default: 25321]                                                                  |
|                      | --jdisc-database=[JDISC-DATABASE] | JDisc database [default: "inventory"]                                                        |
|                      | --jdisc-username=[JDISC-USERNAME] | JDisc database username [default: "postgresro"]                                              |
|                      | --jdisc-password=[JDISC-PASSWORD] | JDisc database password                                                                      |
|                      | --allow-older-imports             | Allow import of older JDisc version [default: no]                                            |
| -i                   | --tenantId=TENANT-ID              | Tenant ID of the tenant to be used (default: 1)                                              |
| -c                   | --config=CONFIG-FILE              | Specifying the path to the configuration file                                                |
| -h                   | --help                            | Help message for displaying further information                                              |
| -q                   | --quiet                           | Quiet-Mode to deactivate output                                                              |
| -V                   | --version                         | Output of the i-doit Console version                                                         |
|                      | --ansi<br>--no-ansi               | Force (or disable --no-ansi) ANSI output                                                     |
| -n                   | --no-interaction                  | Disables all interaction questions of the i-doit Console                                     |
| -v / -vv / -vvv      | --verbose                         | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

```shell
sudo -u www-data php console.php jdisc-create-server --user admin --password admin --default --title JDisc Server --jdisc-host localhost --jdisc-port 25321
```

### ldap-sync

Synchronizes users from LDAP to i-doit and creates them as person objects.

**Options:**

| Parameter (short version) | Parameter (long version)                          | Description                                                                                                                                                                             |
| ------------------------- | ------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| -l                        | --ldapServerId=LDAPSERVERID                       | Specifies the ID of the LDAP server from which the users are to be synchronized  <br>If no ldapServerId is specified, all active servers are synchronized                               |
|                           | --dumpConfig                                      | Outputs the current configuration from the configuration file                                                                                                                           |
|                           | --connectionRankingActive=CONNECTIONRANKINGACTIVE | Configuration which reactivates all connections from all reactivated Users.  <br>Default configuration is expert setting 'ldap.connection-ranking-active' (Tenant-wide) with value '1'. |
|                           | --dropExistingRelations=DROPEXISTINGRELATIONS     | If an existing ldap group has group member users, outside of these synced users, those will be purged.  <br>1 = drop existing relations, 0 = ignore existing relations default: 0       |
|                           | --archiveDeletedGroups=ARCHIVEDELETEDGROUPS       | If a deleted ldap group remains in i-doit, archive or delete it. default: false                                                                                                         |
|                           | --useDefaultTemplates                             | Use default templates, whenever object get created by this command (v1.18)                                                                                                              |
| -u                        | --user=USERNAME                                   | Username of a user who is authorized to execute                                                                                                                                         |
| -p                        | --password=PASSWORD                               | Password for authentication of the previously specified user                                                                                                                            |
| -i                        | --tenantId=TENANT-ID                              | Tenant ID of the tenant to be used (default: 1)                                                                                                                                         |
| -c                        | --config=CONFIG-FILE                              | Specifying the path to the configuration file                                                                                                                                           |
| -h                        | --help                                            | Help message for displaying further information                                                                                                                                         |
| -q                        | --quiet                                           | Quiet-Mode to deactivate output                                                                                                                                                         |
| -V                        | --version                                         | Output of the i-doit Console version                                                                                                                                                    |
|                           | --ansi<br>--no-ansi                               | Force (or disable --no-ansi) ANSI output                                                                                                                                                |
| -n                        | --no-interaction                                  | Disables all interaction questions of the i-doit Console                                                                                                                                |
| -v / -vv / -vvv           | --verbose                                         | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level)                                                                                            |

**Example of use**

```shell
sudo -u www-data php console.php ldap-sync --user admin --password admin --tenantId 1 --verbose --ldapServerId 1
```

### ldap-syncdn

Synchronizes LDAP DNs with the i-doit users

**Options:**

| Parameter (short version) | Parameter (long version)    | Description                                                                                  |
| ------------------------- | --------------------------- | -------------------------------------------------------------------------------------------- |
|                           | --ldapServerId=LDAPSERVERID | Specifying the LDAP server via the ID                                                        |
| -o                        | --objectType=OBJECTTYPE     | Specifying the object type as a constant (z.B. C__OBJTYPE__SERVER)                           |
| -u                        | --user=USERNAME             | Username of a user who is authorized to execute                                              |
| -p                        | --password=PASSWORD         | Password for authentication of the previously specified user                                 |
| -i                        | --tenantId=TENANT-ID        | Tenant ID of the tenant to be used (default: 1)                                              |
| -h                        | --help                      | Help message for displaying further information                                              |
| -q                        | --quiet                     | Quiet-Mode to deactivate output                                                              |
| -V                        | --version                   | Output of the i-doit Console version                                                         |
|                           | --ansi<br>--no-ansi         | Force (or disable --no-ansi) ANSI output                                                     |
| -n                        | --no-interaction            | Disables all interaction questions of the i-doit Console                                     |
| -v / -vv / -vvv           | --verbose                   | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

```shell
sudo -u www-data php console.php ldap-syncdn --user admin --password admin --tenantId 1 --ldapServerId 1
```

### list

Lists all commands. Format of the output can be changed.

**Options:**

| Parameter (short version) | Parameter (long version) | Description                                                   |
| ------------------------- | ------------------------ | ------------------------------------------------------------- |
|                           | --format=FORMAT          | Setting the output format (txt, xml, json or md) Default: txt |
|                           | --raw                    | Output of the command help                                    |
| Parameter (short version) | Parameter (long version) | Description                                                   |
| ------------------------- | ------------------------ | ------------------------------------------------------------- |
|                           | --format=FORMAT          | Setting the output format (txt, xml, json or md) Default: txt |
|                           | --raw                    | Output of the command help                                    |

**Example of use**

```shell
sudo -u www-data php console.php list --format=txt
```

### license-add

Adds a license for i-doit

**Options:**

| Parameter (short version) | Parameter (long version) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
| -u                        | --user=USERNAME          | Username of a user who is authorized to execute                                              |
| -p                        | --password=PASSWORD      | Password for authentication of the previously specified user                                 |
| -l                        | --license=LICENSE        | Path to the license file (/path/to/license/file.key)                                         |
| -t                        | --tenant=TENANT-ID       | Tenant ID of the tenant to be used (default: 1)                                              |
| -h                        | --help                   | Help message for displaying further information                                              |
| -q                        | --quiet                  | Quiet-Mode to deactivate output                                                              |
| -V                        | --version                | Output of the i-doit Console version                                                         |
|                           | --ansi<br>--no-ansi      | Force (or disable --no-ansi) ANSI output                                                     |
| -n                        | --no-interaction         | Disables all interaction questions of the i-doit Console                                     |
| -v / -vv / -vvv           | --verbose                | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

```shell
sudo -u www-data php console.php license-add --user admin --password admin --tenantId 1 --license /path/to/license/file.key
```

### license-assign

Assigns a hosting license to a tenant

**Options:**

| Parameter (short version) | Parameter (long version) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
| -u                        | --user=USERNAME          | Username of a user who is authorized to execute                                              |
| -p                        | --password=PASSWORD      | Password for authentication of the previously specified user                                 |
| -i                        | --tenantId=TENANT-ID     | Tenant ID of the tenant to be used (default: 1)                                              |
| -c                        | --count=COUNT            | Number of objects to be licensed Default: 0                                                  |
| -h                        | --help                   | Help message for displaying further information                                              |
| -q                        | --quiet                  | Quiet-Mode to deactivate output                                                              |
| -V                        | --version                | Output of the i-doit Console version                                                         |
|                           | --ansi<br>--no-ansi      | Force (or disable --no-ansi) ANSI output                                                     |
| -n                        | --no-interaction         | Disables all interaction questions of the i-doit Console                                     |
| -v / -vv / -vvv           | --verbose                | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

```shell
sudo -u www-data php console.php license-assign --user admin --password admin --tenantId 1 --count 1000
```

### license-import

Imports licenses from the i-doit license server

**Options:**

| Parameter (short version) | Parameter (long version)        | Description                                                                                  |
| ------------------------- | ------------------------------- | -------------------------------------------------------------------------------------------- |
| -u                        | --user=USERNAME                 | Username of a user who is authorized to execute                                              |
| -p                        | --password=PASSWORD             | Password for authentication of the previously specified user                                 |
| -l                        | --license-server=LICENSE-SERVER | Path to the i-doit license server Default: "<https://lizenzen.i-doit.com>"                   |
| -h                        | --help                          | Help message for displaying further information                                              |
| -q                        | --quiet                         | Quiet-Mode to deactivate output                                                              |
| -V                        | --version                       | Output of the i-doit Console version                                                         |
|                           | --ansi<br>--no-ansi             | Force (or disable --no-ansi) ANSI output                                                     |
| -n                        | --no-interaction                | Disables all interaction questions of the i-doit Console                                     |
| -v / -vv / -vvv           | --verbose                       | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

```shell
sudo -u www-data php console.php license-import --user admin --password admin --license-server https://lizenzen.i-doit.com
```

### license-key

Sets a license key for i-doit

**Options:**

| Parameter (short version) | Parameter (long version)        | Description                                                                                             |
| ------------------------- | ------------------------------- | ------------------------------------------------------------------------------------------------------- |
| -u                        | --user=USERNAME                 | Username of a user who is authorized to execute                                                         |
| -p                        | --password=PASSWORD             | Password for authentication of the previously specified user                                            |
| -l                        | --license-server=LICENSE-SERVER | Path to the i-doit license server Default: "<https://lizenzen.i-doit.com(https://lizenzen.i-doit.com)>" |
| -k                        | --key=KEY                       | License key for i-doit                                                                                  |
| -h                        | --help                          | Help message for displaying further information                                                         |
| -q                        | --quiet                         | Quiet-Mode to deactivate output                                                                         |
| -V                        | --version                       | Output of the i-doit Console version                                                                    |
|                           | --ansi<br>--no-ansi             | Force (or disable --no-ansi) ANSI output                                                                |
| -n                        | --no-interaction                | Disables all interaction questions of the i-doit Console                                                |
| -v / -vv / -vvv           | --verbose                       | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level)            |

**Example of use**

```shell
sudo -u www-data php console.php license-key --user admin --password admin --license-server https://lizenzen.i-doit.com --key license
```

### license-list

Lists all installed licenses

**Options:**

| Parameter (short version) | Parameter (long version) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
| -t                        | --tenant=TENANT          | ID of the assigned tenant to filter (multiple values allowed)                                |
| -h                        | --help                   | Help message for displaying further information                                              |
| -q                        | --quiet                  | Quiet-Mode to deactivate output                                                              |
| -V                        | --version                | Output of the i-doit Console version                                                         |
|                           | --ansi<br>--no-ansi      | Force (or disable --no-ansi) ANSI output                                                     |
| -n                        | --no-interaction         | Disables all interaction questions of the i-doit Console                                     |
| -v / -vv / -vvv           | --verbose                | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

```shell
sudo -u www-data php console.php license-list --tenant 1
```

### license-remove

Deletes a license from i-doit

**Options:**

| Parameter (short version) | Parameter (long version) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
| -u                        | --user=USERNAME          | Username of a user who is authorized to execute                                              |
| -p                        | --password=PASSWORD      | Password for authentication of the previously specified user                                 |
| -l                        | --license=LICENSE        | License ID for the license to be deleted                                                     |
| -h                        | --help                   | Help message for displaying further information                                              |
| -q                        | --quiet                  | Quiet-Mode to deactivate output                                                              |
| -V                        | --version                | Output of the i-doit Console version                                                         |
|                           | --ansi<br>--no-ansi      | Force (or disable --no-ansi) ANSI output                                                     |
| -n                        | --no-interaction         | Disables all interaction questions of the i-doit Console                                     |
| -v / -vv / -vvv           | --verbose                | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

```shell
sudo -u www-data php console.php license-remove --user admin --password admin --license LicenseID
```

### logbook:archive

Archives the logbook entries with a defined age, according to the settings on the i-doit interface.

**Options:**

| Parameter (short version) | Parameter (long version) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
|                           | --batch=BATCHSIZE        | Number of entries to be archived per batch [Default: 1000]                                   |
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
sudo -u www-data php console.php logbook:archive --user admin --password admin --tenantId 1
```

### migrate-uploaded-files

Migrates uploaded files in i-doit <v1.13 to v.1.14>

**Options:**

| Parameter (short version) | Parameter (long version) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
| -h                        | --help                   | Help message for displaying further information                                              |
| -q                        | --quiet                  | Quiet-Mode to deactivate output                                                              |
| -V                        | --version                | Output of the i-doit Console version                                                         |
|                           | --ansi<br>--no-ansi      | Force (or disable --no-ansi) ANSI output                                                     |
| -n                        | --no-interaction         | Disables all interaction questions of the i-doit Console                                     |
| -v / -vv / -vvv           | --verbose                | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

```shell
sudo -u www-data php console.php migrate-uploaded-files
```

### notifications-list

Lists all notification types and notifications for later usage

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
sudo -u www-data php console.php notifications-list --user admin --password admin --tenantId 1
```

### notifications-send

Sends the notifications configured on the i-doit interface

**Options:**

| Parameter (short version) | Parameter (long version)                      | Description                                                                                  |
| ------------------------- | --------------------------------------------- | -------------------------------------------------------------------------------------------- |
|                           | --notification-ids=NOTIFICATION-IDS           | Pass specific notification IDs to be sent 1,2,3                                              |
|                           | --notification-type-ids=NOTIFICATION-TYPE-IDS | Pass specific notification type IDs to be sent 1,2,3                                         |
| -u                        | --user=USERNAME                               | Username of a user who is authorized to execute                                              |
| -p                        | --password=PASSWORD                           | Password for authentication of the previously specified user                                 |
| -i                        | --tenantId=TENANT-ID                          | Tenant ID of the tenant to be used (default: 1)                                              |
| -c                        | --config=CONFIG-FILE                          | Specifying the path to the configuration file                                                |
| -h                        | --help                                        | Help message for displaying further information                                              |
| -q                        | --quiet                                       | Quiet-Mode to deactivate output                                                              |
| -V                        | --version                                     | Output of the i-doit Console version                                                         |
|                           | --ansi<br>--no-ansi                           | Force (or disable --no-ansi) ANSI output                                                     |
| -n                        | --no-interaction                              | Disables all interaction questions of the i-doit Console                                     |
| -v / -vv / -vvv           | --verbose                                     | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

```shell
sudo -u www-data php console.php notifications-send --user admin --password admin --tenantId 1
```

### report-export

Exports a report to the desired file format.

**Options:**

| Parameter (short version) | Parameter (long version)        | Description                                                                                  |
| ------------------------- | ------------------------------- | -------------------------------------------------------------------------------------------- |
| -r                        | --reportId=REPORTID             | ID of the report to be exported                                                              |
| -d                        | --exportPath=EXPORTPATH         | Path to which the export should take place                                                   |
| -f                        | --exportFilename=EXPORTFILENAME | File name of the export file without file extension                                          |
| -t                        | --exportFileType=EXPORTFILETYPE | File type of the export file. Possible values: csv, txt, pdf, xml (Default: "csv")           |
| -u                        | --user=USERNAME                 | Username of a user who is authorized to execute                                              |
| -p                        | --password=PASSWORD             | Password for authentication of the previously specified user                                 |
| -i                        | --tenantId=TENANT-ID            | Tenant ID of the tenant to be used (default: 1)                                              |
| -c                        | --config=CONFIG-FILE            | Specifying the path to the configuration file                                                |
| -h                        | --help                          | Help message for displaying further information                                              |
| -q                        | --quiet                         | Quiet-Mode to deactivate output                                                              |
| -V                        | --version                       | Output of the i-doit Console version                                                         |
|                           | --ansi<br>--no-ansi             | Force (or disable --no-ansi) ANSI output                                                     |
| -n                        | --no-interaction                | Disables all interaction questions of the i-doit Console                                     |
| -v / -vv / -vvv           | --verbose                       | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

```shell
sudo -u www-data php console.php report-export --user admin --password admin --tenantId 1 --reportId 27 --exportPath /var/www/exported-reports/ --exportFilename Report-Buchhaltung-November-2025 --exportFileType csv
```

### report-refresher

Refreshes one or all reports.

**Options:**

| Parameter (Kurzform) | Parameter (Langform)  | Beschreibung                                                                                 |
| -------------------- | --------------------- | -------------------------------------------------------------------------------------------- |
| -r                   | --reportId=[REPORTID] | ID of the report                                                                             |
| -u                   | --user=USERNAME       | Username of a user who is authorized to execute                                              |
| -p                   | --password=PASSWORD   | Password for authentication of the previously specified user                                 |
| -i                   | --tenantId=TENANT-ID  | Tenant ID of the tenant to be used (default: 1)                                              |
| -c                   | --config=CONFIG-FILE  | Specifying the path to the configuration file                                                |
| -h                   | --help                | Help message for displaying further information                                              |
| -q                   | --quiet               | Quiet-Mode to deactivate output                                                              |
| -V                   | --version             | Output of the i-doit Console version                                                         |
|                      | --ansi<br>--no-ansi   | Force (or disable --no-ansi) ANSI output                                                     |
| -n                   | --no-interaction      | Disables all interaction questions of the i-doit Console                                     |
| -v / -vv / -vvv      | --verbose             | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

```shell
sudo -u www-data php console.php report-refresher --user admin --password admin --tenantId 1 --reportId 27
```


### search

Searches for content in the documentation

**Options:**

| Parameter (short version) | Parameter (long version)    | Description                                                                                  |
| ------------------------- | --------------------------- | -------------------------------------------------------------------------------------------- |
|                           | --searchString=SEARCHSTRING | Content to be searched for                                                                   |
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
sudo -u www-data php console.php search --user admin --password admin --tenantId 1 --searchString "Server001"
```

### search-index

Restores the search index by deleting and rewriting it.

**Options:**

| Parameter (short version) | Parameter (long version) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
|                           | --update                 | Instead of just creating a new index, the current index documents are overwritten            |
|                           | --category=CATEGORY      | Whitelist of the categories                                                                  |
|                           | --dry-run                | Run Reindex without saving                                                                   |
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
sudo -u www-data php console.php search-index --user admin --password admin --tenantId 1
```

### strip-description-html

With this command you can strip html tags in description field of all categories and objects

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
sudo -u www-data php console.php strip-description-html --user admin --password admin --tenantId 1
```

### sync-dynamic-groups

Resynchronizes dynamic group members.

**Options:**

| Parameter (short version) | Parameter (long version) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
| -g                        | --groups=GROUPS          | Comma-separated list of IDs of the dynamic groups                                            |
| -u                        | --user=USERNAME          | Username of a user who is authorized to execute                                              |
| -p                        | --password=PASSWORD      | Password for authentication of the previously specified user                                 |
| -i                        | --tenantId=TENANT-ID     | Tenant ID of the tenant to be used (default: 1)                                              |
| -h                        | --help                   | Help message for displaying further information                                              |
| -q                        | --quiet                  | Quiet-Mode to deactivate output                                                              |
| -V                        | --version                | Output of the i-doit Console version                                                         |
|                           | --ansi<br>--no-ansi      | Force (or disable --no-ansi) ANSI output                                                     |
| -n                        | --no-interaction         | Disables all interaction questions of the i-doit Console                                     |
| -v / -vv / -vvv           | --verbose                | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

```shell
sudo -u www-data php console.php sync-dynamic-groups --user admin --password admin --tenantId --groups 173,188,219
```

### system-autoincrement

Determines the value of the system's auto-increment. This affects object IDs, category entries, and so on. When resetting the auto-increment, some content may no longer be accessible.

**Options:**

| Parameter (short version) | Parameter (long version)      | Description                                                                                  |
| ------------------------- | ----------------------------- | -------------------------------------------------------------------------------------------- |
|                           | --autoIncrement=AUTOINCREMENT | Number to which the auto-increment should be set                                             |
| -u                        | --user=USERNAME               | Username of a user who is authorized to execute                                              |
| -p                        | --password=PASSWORD           | Password for authentication of the previously specified user                                 |
| -i                        | --tenantId=TENANT-ID          | Tenant ID of the tenant to be used (default: 1)                                              |
| -h                        | --help                        | Help message for displaying further information                                              |
| -q                        | --quiet                       | Quiet-Mode to deactivate output                                                              |
| -V                        | --version                     | Output of the i-doit Console version                                                         |
|                           | --ansi<br>--no-ansi           | Force (or disable --no-ansi) ANSI output                                                     |
| -n                        | --no-interaction              | Disables all interaction questions of the i-doit Console                                     |
| -v / -vv / -vvv           | --verbose                     | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

```shell
sudo -u www-data php console.php system-autoincrement --user admin --password admin --tenantId 1 --autoIncrement 20
```

### system-categorycleanup

Purges optionally category entries that are in the state unfinished, archived or deleted

**Options:**

| Parameter (short version) | Parameter (long version)        | Description                                                                                                                                                                 |
| ------------------------- | ------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
|                           | --categoryStatus=CATEGORYSTATUS | Use to start cleaning up the specified status: <br>**1** for 'unfinished' category entries<br>**3** for 'archived' category entries<br>**4** for 'deleted' category entries |
| -u                        | --user=USERNAME                 | Username of a user who is authorized to execute                                                                                                                             |
| -p                        | --password=PASSWORD             | Password for authentication of the previously specified user                                                                                                                |
| -i                        | --tenantId=TENANT-ID            | Tenant ID of the tenant to be used (default: 1)                                                                                                                             |
| -h                        | --help                          | Help message for displaying further information                                                                                                                             |
| -q                        | --quiet                         | Quiet-Mode to deactivate output                                                                                                                                             |
| -V                        | --version                       | Output of the i-doit Console version                                                                                                                                        |
|                           | --ansi<br>--no-ansi             | Force (or disable --no-ansi) ANSI output                                                                                                                                    |
| -n                        | --no-interaction                | Disables all interaction questions of the i-doit Console                                                                                                                    |
| -v / -vv / -vvv           | --verbose                       | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level)                                                                                |

**Example of use**

```shell
sudo -u www-data php console.php system-categorycleanup --user admin --password admin --tenantId 1 --categoryStatus 3
```

### system-checkforupdates

Checks if a new i-doit version is available.

**Options:**

| Parameter (short version) | Parameter (long version) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
| -h                        | --help                   | Help message for displaying further information                                              |
| -q                        | --quiet                  | Quiet-Mode to deactivate output                                                              |
| -V                        | --version                | Output of the i-doit Console version                                                         |
|                           | --ansi<br>--no-ansi      | Force (or disable --no-ansi) ANSI output                                                     |
| -n                        | --no-interaction         | Disables all interaction questions of the i-doit Console                                     |
| -v / -vv / -vvv           | --verbose                | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

```shell
sudo -u www-data php console.php system-checkforupdates
```

### system-convert-non-innodb-tables

Converts all non INNODB tables to INNODB

**Options:**

| Parameter (short version) | Parameter (long version) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
|                           | --convert                | Starts the process of converting all non-UTF-8 tables                                        |
|                           | --table=TABLE            | Table to be checked and converted                                                            |
| -u                        | --user=USERNAME          | Username of a user who is authorized to execute                                              |
| -p                        | --password=PASSWORD      | Password for authentication of the previously specified user                                 |
| -i                        | --tenantId=TENANT-ID     | Tenant ID of the tenant to be used (default: 1)                                              |
| -h                        | --help                   | Help message for displaying further information                                              |
| -q                        | --quiet                  | Quiet-Mode to deactivate output                                                              |
| -V                        | --version                | Output of the i-doit Console version                                                         |
|                           | --ansi<br>--no-ansi      | Force (or disable --no-ansi) ANSI output                                                     |
| -n                        | --no-interaction         | Disables all interaction questions of the i-doit Console                                     |
| -v / -vv / -vvv           | --verbose                | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

```shell
sudo -u www-data php console.php system-convert-non-innodb-tables --convert --table TABLE_NAME
```

### system-convert-non-utf8-tables

Converts all non-UTF-8 data types to UTF-8.

**Options:**

| Parameter (short version) | Parameter (long version) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
|                           | --convert                | Starts the process of converting all non-UTF-8 tables                                        |
| -u                        | --user=USERNAME          | Username of a user who is authorized to execute                                              |
| -p                        | --password=PASSWORD      | Password for authentication of the previously specified user                                 |
| -i                        | --tenantId=TENANT-ID     | Tenant ID of the tenant to be used (default: 1)                                              |
| -h                        | --help                   | Help message for displaying further information                                              |
| -q                        | --quiet                  | Quiet-Mode to deactivate output                                                              |
| -V                        | --version                | Output of the i-doit Console version                                                         |
|                           | --ansi<br>--no-ansi      | Force (or disable --no-ansi) ANSI output                                                     |
| -n                        | --no-interaction         | Disables all interaction questions of the i-doit Console                                     |
| -v / -vv / -vvv           | --verbose                | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

```shell
sudo -u www-data php console.php system-convert-non-utf8-tables --convert
```

### system-location-fix

Executes the location correction from the GUI in the console

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
sudo -u www-data php console.php system-location-fix --user admin --password admin --tenantId 1 --config /path/to/config/file
```

### system-objectcleanup

Cleans all objects with a self-defined status.

**Options:**

| Parameter (short version) | Parameter (long version)    | Description                                                                                  |
| ------------------------- | --------------------------- | -------------------------------------------------------------------------------------------- |
|                           | --objectStatus=OBJECTSTATUS | Determines which status is to be cleaned up: 1: "unfinished"; 3: "archived"; 4: "deleted     |
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
sudo -u www-data php console.php system-objectcleanup --user admin --password admin --tenantId 1 --objectStatus 1
```

### system-objectrelations

Renews the names of all object relationships.

**Options:**

| Parameter (short version) | Parameter (long version)            | Description                                                                                  |
| ------------------------- | ----------------------------------- | -------------------------------------------------------------------------------------------- |
|                           | --categoryConstant=CATEGORYCONSTANT | constant of the category for which the operation is to be performed (z.B. C__CATG__IP)       |
| -u                        | --user=USERNAME                     | Username of a user who is authorized to execute                                              |
| -p                        | --password=PASSWORD                 | Password for authentication of the previously specified user                                 |
| -i                        | --tenantId=TENANT-ID                | Tenant ID of the tenant to be used (default: 1)                                              |
| -c                        | --config=CONFIG-FILE                | Specifying the path to the configuration file                                                |
| -h                        | --help                              | Help message for displaying further information                                              |
| -q                        | --quiet                             | Quiet-Mode to deactivate output                                                              |
| -V                        | --version                           | Output of the i-doit Console version                                                         |
|                           | --ansi<br>--no-ansi                 | Force (or disable --no-ansi) ANSI output                                                     |
| -n                        | --no-interaction                    | Disables all interaction questions of the i-doit Console                                     |
| -v / -vv / -vvv           | --verbose                           | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

```shell
sudo -u www-data php console.php system-objectrelations --user admin --password admin --tenantId 1 --categoryConstant C__CATG__IP
```

### system-refresh-table-configuration

Refreshes all available list configurations (object types and categories)

**Options:**

| Parameter (short version) | Parameter (long version)    | Description                                                                                                                            |
| ------------------------- | --------------------------- | -------------------------------------------------------------------------------------------------------------------------------------- |
| -a                        | --all                       | Will process all object type table configurations                                                                                      |
| -o                        | --object-types=OBJECT-TYPES | Process only specific object type table configurations via their constant (it is possible to pass a comma separated list of constants) |
| -u                        | --user=USERNAME             | Username of a user who is authorized to execute                                                                                        |
| -p                        | --password=PASSWORD         | Password for authentication of the previously specified user                                                                           |
| -i                        | --tenantId=TENANT-ID        | Tenant ID of the tenant to be used (default: 1)                                                                                        |
| -c                        | --config=CONFIG-FILE        | Specifying the path to the configuration file                                                                                          |
| -h                        | --help                      | Help message for displaying further information                                                                                        |
| -q                        | --quiet                     | Quiet-Mode to deactivate output                                                                                                        |
| -V                        | --version                   | Output of the i-doit Console version                                                                                                   |
|                           | --ansi<br>--no-ansi         | Force (or disable --no-ansi) ANSI output                                                                                               |
| -n                        | --no-interaction            | Disables all interaction questions of the i-doit Console                                                                               |
| -v / -vv / -vvv           | --verbose                   | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level)                                           |

**Example of use**

```shell
sudo -u www-data php console.php system-refresh-table-configuration --user admin --password admin --tenantId 1
```

### system-set-settings

Enables Admin-Center settings to be set via the CLI.

**Options:**

| Parameter (short version) | Parameter (long version) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
| -u                        | --user=[USERNAME]        | i-doit Admin username [default: "admin"]                                                     |
| -p                        | --password=[PASSWORD]    | i-doit Admin password                                                                        |
| -s                        | --settings=[SETTINGS]    | Map of settings to be set as json like {"proxy.active": 1, [...]}                            |
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
sudo -u www-data php system-set-settings --user admin --password admin --settings="{\"proxy.active\":1,\"proxy.host\":\"http://myproxy.net\",\"unknown-setting\": 4}" -n
```

### tenant-create

Creates a new tenant

**Options:**

| Parameter (short version) | Parameter (long version)                      | Description                                                                                  |
| ------------------------- | --------------------------------------------- | -------------------------------------------------------------------------------------------- |
| -u                        | --root-user[=ROOT-USER]                       | Username of privileged DB User [default: "root"]                                             |
| -p                        | --root-password[=ROOT-PASSWORD]               | Password of privileged DB User                                                               |
| -U                        | --user=USER                                   | Username of DB for new tenant [default: "idoit"]                                             |
| -P                        | --password[=PASSWORD]                         | Password of DB for new tenant                                                                |
| -d                        | --database=DATABASE                           | DB name for new tenant [default: "idoit_data"]                                               |
| -t                        | --title=TITLE                                 | Name of the new tenant [default: "Your company name"]                                        |
|                           | --login-user[=LOGIN-USER]                     | Username of i-doit user                                                                      |
|                           | --login-password[=LOGIN-PASSWORD]             | Password of the i-doit user                                                                  |
|                           | --login-recovery-email[=LOGIN-RECOVERY-EMAIL] | Recovery e-mail of the i-doit user                                                           |
|                           | --send-email                                  | Send e-mail for initial password definition                                                  |
| -h                        | --help                                        | Help message for displaying further information                                              |
| -q                        | --quiet                                       | Quiet-Mode to deactivate output                                                              |
| -V                        | --version                                     | Output of the i-doit Console version                                                         |
|                           | --ansi<br>--no-ansi                           | Force (or disable --no-ansi) ANSI output                                                     |
| -n                        | --no-interaction                              | Disables all interaction questions of the i-doit Console                                     |
| -v / -vv / -vvv           | --verbose                                     | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

```shell
sudo -u www-data php console.php tenant-create --title my-org --user idoit --password idoitpassword -- enable --tenantId 3
```

### tenant-disable

Deactivates an existing tenant.

**Options:**

| Parameter (short version) | Parameter (long version) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
| -u                        | --user=USERNAME          | Username of a user who is authorized to execute                                              |
| -p                        | --password=PASSWORD      | Password for authentication of the previously specified user                                 |
| -i                        | --tenantId=TENANT-ID     | Tenant ID of the tenant to be used (default: 1)                                              |
| -h                        | --help                   | Help message for displaying further information                                              |
| -q                        | --quiet                  | Quiet-Mode to deactivate output                                                              |
| -V                        | --version                | Output of the i-doit Console version                                                         |
|                           | --ansi<br>--no-ansi      | Force (or disable --no-ansi) ANSI output                                                     |
| -n                        | --no-interaction         | Disables all interaction questions of the i-doit Console                                     |
| -v / -vv / -vvv           | --verbose                | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

```shell
sudo -u www-data php console.php tenant-disable --tenantId 3
```

### tenant-enable

Activates an existing tenant.

**Options:**

| Parameter (short version) | Parameter (long version) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
| -u                        | --user=USERNAME          | Username of a user who is authorized to execute                                              |
| -p                        | --password=PASSWORD      | Password for authentication of the previously specified user                                 |
| -i                        | --tenantId=TENANT-ID     | Tenant ID of the tenant to be used (default: 1)                                              |
| -h                        | --help                   | Help message for displaying further information                                              |
| -q                        | --quiet                  | Quiet-Mode to deactivate output                                                              |
| -V                        | --version                | Output of the i-doit Console version                                                         |
|                           | --ansi<br>--no-ansi      | Force (or disable --no-ansi) ANSI output                                                     |
| -n                        | --no-interaction         | Disables all interaction questions of the i-doit Console                                     |
| -v / -vv / -vvv           | --verbose                | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

```shell
sudo -u www-data php console.php tenant-enable --tenantId 3
```

### tenant-list

Lists all existing tenants.

**Options:**

| Parameter (short version) | Parameter (long version) | Description                                                                                      |
| ------------------------- | ------------------------ | ------------------------------------------------------------------------------------------------ |
| -h                        | --help                   | Hilfenachricht zur Einblendung weiterer Informationen                                            |
| -q                        | --quiet                  | Quiet-Mode um die Rückgabe zu deaktivieren                                                       |
| -V                        | --version                | Ausgabe der Version der i-doit Console                                                           |
|                           | --ansi<br>--no-ansi      | Force (or disable --no-ansi) ANSI output                                                         |
| -n                        | --no-interaction         | Deaktiviert sämtliche Interaktionsfragen der i-doit Console                                      |
| -v / -vv / -vvv           | --verbose                | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Example of use**

```shell
sudo -u www-data php console.php tenant-list
```

### tenant-remove

Removes an existing client

**Options:**

| Parameter (short version) | Parameter (long version) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
| -u                        | --user=USERNAME          | Username of a user who is authorized to execute                                              |
| -p                        | --password=PASSWORD      | Password for authentication of the previously specified user                                 |
| -i                        | --tenantId=TENANT-ID     | Tenant ID of the tenant to be used (default: 1)                                              |
| -h                        | --help                   | Help message for displaying further information                                              |
| -q                        | --quiet                  | Quiet-Mode to deactivate output                                                              |
| -V                        | --version                | Output of the i-doit Console version                                                         |
|                           | --ansi<br>--no-ansi      | Force (or disable --no-ansi) ANSI output                                                     |
| -n                        | --no-interaction         | Disables all interaction questions of the i-doit Console                                     |
| -v / -vv / -vvv           | --verbose                | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

```shell
sudo -u www-data php console.php tenant-remove --user admin --password admin --tenant 1
```

### uninstall

Uninstalls the used i-doit installation

**Options:**

| Parameter (short version) | Parameter (long version) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
| -u                        | --user=USERNAME          | Username of a user who is authorized to execute                                              |
| -p                        | --password=PASSWORD      | Password for authentication of the previously specified user                                 |
| -h                        | --help                   | Help message for displaying further information                                              |
| -q                        | --quiet                  | Quiet-Mode to deactivate output                                                              |
| -V                        | --version                | Output of the i-doit Console version                                                         |
|                           | --ansi<br>--no-ansi      | Force (or disable --no-ansi) ANSI output                                                     |
| -n                        | --no-interaction         | Disables all interaction questions of the i-doit Console                                     |
| -v / -vv / -vvv           | --verbose                | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

```shell
sudo -u www-data php console.php uninstall --user admin --password admin
```

### update

Updates the i-doit installation

**Options:**

| Parameter (short version) | Parameter (long version) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
| -u                        | --user=USERNAME          | Username of a user who is authorized to execute                                              |
| -p                        | --password=PASSWORD      | Password for authentication of the previously specified user                                 |
| -z                        | --zip=ZIP                | Specifying the path to the update packet                                                     |
|                           | --v=V                    | Version to update to                                                                         |
| -h                        | --help                   | Help message for displaying further information                                              |
| -q                        | --quiet                  | Quiet-Mode to deactivate output                                                              |
| -V                        | --version                | Output of the i-doit Console version                                                         |
|                           | --ansi<br>--no-ansi      | Force (or disable --no-ansi) ANSI output                                                     |
| -n                        | --no-interaction         | Disables all interaction questions of the i-doit Console                                     |
| -v / -vv / -vvv           | --verbose                | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

```shell
sudo -u www-data php console.php update --user admin --password admin --zip /path/to/zip/file.zip --v 1.14
```

### idoit:feature-manager

Activates features of i-doit

**Options**

| Parameter (short version) | Parameter (long version) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
|                           | --unset-cloud            | Deactivate if application is cloud instance                                                  |
|                           | --set-cloud              | Activate if application is cloud instance                                                    |
| -e                        | --enable=[ENABLE]        | Enable features                                                                              |
| -d                        | --disable=[DISABLE]      | Disable features                                                                             |
| -r                        | --replace=[REPLACE]      | Replace current features                                                                     |
| -c                        | --cloudable              | Only cloudable features will be considered                                                   |
| -f                        | --noncloudable           | Only non-cloudable features will be considered                                               |
|                           | --wizard                 | Interactive mode to activate or deactivate features                                          |
| -l                        | --list                   | Shows all available features                                                                 |
| -u                        | --user=[USERNAME]        | Username of a user who is authorized to execute                                              |
| -p                        | --password=[PASSWORD]    | Password for authentication of the previously specified user                                 |
| -i                        | --tenantId=[TENANT-ID]   | Tenant ID of the tenant to be used (default: 1)                                              |
| -h                        | --help                   | Help message for displaying further information                                              |
| -q                        | --quiet                  | Quiet-Mode to deactivate output                                                              |
| -V                        | --version                | Output of the i-doit Console version                                                         |
|                           | --ansi<br>--no-ansi      | Force (or disable --no-ansi) ANSI output                                                     |
| -n                        | --no-interaction         | Disables all interaction questions of the i-doit Console                                     |
| -v / -vv / -vvv           | --verbose                | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

```shell
sudo -u www-data php console.php idoit:feature-manager --enable update-gui --user admin --password admin
```

### idoit:set-env-var

With this command it will be possible to set environmental variables for i-doit.

**Options**

| Parameter (short version) | Parameter (long version) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
| -k                        | --key-pair=[KEY-PAIR]    | Comma separated list of key pairs which will be included as environmental variable           |
| -s                        | --show-variables         | Show all defined environmental variables                                                     |
| -l                        | --list-variables         | Show all possible environmental variables                                                    |
| -u                        | --user=[USERNAME]        | Username of a user who is authorized to execute                                              |
| -p                        | --password=[PASSWORD]    | Password for authentication of the previously specified user                                 |
| -i                        | --tenantId=[TENANT-ID]   | Tenant ID of the tenant to be used (default: 1)                                              |
| -h                        | --help                   | Help message for displaying further information                                              |
| -q                        | --quiet                  | Quiet-Mode to deactivate output                                                              |
| -V                        | --version                | Output of the i-doit Console version                                                         |
|                           | --ansi<br>--no-ansi      | Force (or disable --no-ansi) ANSI output                                                     |
| -n                        | --no-interaction         | Disables all interaction questions of the i-doit Console                                     |
| -v / -vv / -vvv           | --verbose                | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

```shell
sudo -u www-data php console.php idoit:set-env-var -k "IDOIT_APP_URL=localhost" --user admin --password admin
```

### idoit:set-update-capability

Dis- and enable the i-doit update capability

**Options**

| Parameter (short version) | Parameter (long version) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
| -u                        | --user=[USERNAME]        | Username of a user who is authorized to execute                                              |
| -p                        | --password=[PASSWORD]    | Password for authentication of the previously specified user                                 |
| -i                        | --tenantId=[TENANT-ID]   | Tenant ID of the tenant to be used (default: 1)                                              |
| -h                        | --help                   | Help message for displaying further information                                              |
| -q                        | --quiet                  | Quiet-Mode to deactivate output                                                              |
| -V                        | --version                | Output of the i-doit Console version                                                         |
|                           | --ansi<br>--no-ansi      | Force (or disable --no-ansi) ANSI output                                                     |
| -n                        | --no-interaction         | Disables all interaction questions of the i-doit Console                                     |
| -v / -vv / -vvv           | --verbose                | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

```shell
sudo -u www-data php console.php idoit:set-update-capability enable --user admin --password admin
```

### system:tenant-export

Export your tenant data including uploaded files in a ZIP package.

**Options**

| Parameter (short version) | Parameter (long version) | Description                                                                                  |
| ------------------------- | ------------------------ | -------------------------------------------------------------------------------------------- |
| -u                        | --user=[USERNAME]        | Username of a user who is authorized to execute                                              |
| -p                        | --password=[PASSWORD]    | Password for authentication of the previously specified user                                 |
| -i                        | --tenantId=[TENANT-ID]   | Tenant ID of the tenant to be used (default: 1)                                              |
| -h                        | --help                   | Help message for displaying further information                                              |
| -q                        | --quiet                  | Quiet-Mode to deactivate output                                                              |
| -V                        | --version                | Output of the i-doit Console version                                                         |
|                           | --ansi<br>--no-ansi      | Force (or disable --no-ansi) ANSI output                                                     |
| -n                        | --no-interaction         | Disables all interaction questions of the i-doit Console                                     |
| -v / -vv / -vvv           | --verbose                | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

```shell
sudo -u www-data php console.php system:tenant-export --user admin --password admin
```

### system:tenant-import

Import your tenant data from a ZIP package created by the tenant-export command.

**Options**

| Parameter (short version) | Parameter (long version)                    | Description                                                                                  |
| ------------------------- | ------------------------------------------- | -------------------------------------------------------------------------------------------- |
| -f,                       | --file=FILE                                 | Source ZIP file from [system:tenant-export](#systemtenant-export)                            |
| -d,                       | --tenant-database-name=TENANT-DATABASE-NAME | Tenant database name                                                                         |
| -t,                       | --tenant-title=TENANT-TITLE                 | Tenant name                                                                                  |
|                           | --with-system-settings                      | Merge system settings                                                                        |
|                           | --with-tenant-settings                      | Import tenant settings                                                                       |
|                           | --db-root-user=DB-ROOT-USER                 | Database root user                                                                           |
|                           | --db-root-pass=DB-ROOT-PASS                 | Database root password                                                                       |
|                           | --db-host=DB-HOST                           | Database host [default: "localhost"]                                                         |
|                           | --db-port=DB-PORT                           | Database port [default: "3306"]                                                              |
| -h                        | --help                                      | Help message for displaying further information                                              |
| -q                        | --quiet                                     | Quiet-Mode to deactivate output                                                              |
| -V                        | --version                                   | Output of the i-doit Console version                                                         |
|                           | --ansi<br>--no-ansi                         | Force (or disable --no-ansi) ANSI output                                                     |
| -n                        | --no-interaction                            | Disables all interaction questions of the i-doit Console                                     |
| -v / -vv / -vvv           | --verbose                                   | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |
