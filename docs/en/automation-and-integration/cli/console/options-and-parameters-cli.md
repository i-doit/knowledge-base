Notes

All examples on this page refer to the use of the i-doit user with the combination user name/password: **admin**/**admin**.

All parameters are case-sensitive, which means that upper and lower case must be followed exactly according to the examples and specifications.

The following handlers are available for the i-doit Console
-----------------------------------------------------------

| Command | Internal system description |
| --- | --- |
| Command | Internal system description |
| --- | --- |
| [addon-activate](#OptionsandParametersfortheConsole-addon-activate) | Activating Add-ons |
| [addon-deactivate](#OptionsandParametersfortheConsole-addon-deactivate) | Deactivating Add-ons |
| [addon-install](#OptionsandParametersfortheConsole-addon-install) | Installing Add-ons |
| [addon-list](#OptionsandParametersfortheConsole-addon-list) | Displays a list of all installed add-ons |
| [admin-center-cryptohash-reset](#OptionsandParametersfortheConsole-admin-center-cryptohash-reset) | The crypto-hash of i-doit is changed, which renews the entire encryption (ATTENTION! A backup should be created prior to execution) |
| [admin-center-password-reset](#OptionsandParametersfortheConsole-admin-center-password-reset) | Reset the password for the Admin Center |
| [auth-cleanup](#OptionsandParametersfortheConsole-auth-cleanup) | Clean up rights system |
| [check\_mk-export](#OptionsandParametersfortheConsole-check_mk-export) | Export configuration data for Check\_MK |
| [check\_mk-livestatus](#OptionsandParametersfortheConsole-check_mk-livestatus) | Write actual state from Check\_MK to logbook |
| [clear-credentials](#OptionsandParametersfortheConsole-clear-credentials) | Removes user credentials |
| [help](#OptionsandParametersfortheConsole-help) | Displays the help for a command |
| [import-csv](#OptionsandParametersfortheConsole-import-csv) | Import data from a CSV file (uses a defined import profile from the GUI) |
| [import-csvprofiles](#OptionsandParametersfortheConsole-import-csvprofiles) | Listing all CSV Import Profiles |
| [import-hinventory](#OptionsandParametersfortheConsole-import-hinventory) | Import data from hinventory data from hinventory |
| [import-jdisc](#OptionsandParametersfortheConsole-import-jdisc) | Import data from JDisc Discovery (SQL Server access is configured via the GUI) |
| [import-jdiscdiscovery](#OptionsandParametersfortheConsole-import-jdiscdiscovery) | Start a scan in JDisc Discovery (API access is configured via the GUI) |
| [import-ocs](#OptionsandParametersfortheConsole-import-ocs) | Import data from OCS Inventory NG (SQL Server access is configured via GUI) |
| [import-syslog](#OptionsandParametersfortheConsole-import-ocs) | Import data from a syslog into the i-doit logbook |
| [import-xml](#OptionsandParametersfortheConsole-import-ocs) | Importing data from XML |
| [ldap-sync](#OptionsandParametersfortheConsole-ldap-sync) | Import persons and groups of persons from an LDAP directory or Active Directory (AD) |
| [ldap-syncdn](#OptionsandParametersfortheConsole-ldap-sync) | Synchronize from an LDAP/AD the Distinguished Name (DN) of the users (see category LDAP) |
| [list](#OptionsandParametersfortheConsole-list) | Lists all commands |
| [license-add](#OptionsandParametersfortheConsole-license-add) | Adds a license for i-doit (in progress) |
| [license-assign](#OptionsandParametersfortheConsole-license-assign) | Assigns a hosting license to a client (in progress) |
| [license-import](#OptionsandParametersfortheConsole-license-import) | Imports licenses from the i-doit Server (in progress) |
| [license-key](#OptionsandParametersfortheConsole-license-key) | Sets a license key for i-doit (in process) |
| [license-list](#OptionsandParametersfortheConsole-license-list) | Lists all licenses with all information (ID; product; type; start date; end date; licensed objects; licensed clients; environment) |
| [license-remove](#OptionsandParametersfortheConsole-license-remove) | Removes licenses from i-doit |
| [logbook-archive](#OptionsandParametersfortheConsole-logbook-archive) | Archiving logbook entries |
| [maintenance](#OptionsandParametersfortheConsole-maintenance) | Sends notifications of scheduled maintenance from the Maintenance Add-on |
| [nagios-export](#OptionsandParametersfortheConsole-nagios-export) | Export Nagios configuration |
| [nagios-ndoutils](#OptionsandParametersfortheConsole-nagios-ndoutils) | Write actual state from Nagios to logbook |
| [notifications-send](#OptionsandParametersfortheConsole-notifications-send) | Send notifications by e-mail (notifications are configured in the GUI) |
| [report-export](#OptionsandParametersfortheConsole-report-export) | Exporting a report as a file |
| [search](#OptionsandParametersfortheConsole-search) | Search in i-doit |
| [search-index](#OptionsandParametersfortheConsole-search-index) | Create/renew search index |
| [sync-dynamic-groups](#OptionsandParametersfortheConsole-sync-dynamic-groups) | Resynchronizes dynamic group members |
| [system-autoincrement](#OptionsandParametersfortheConsole-system-autoincrement) | set auto\_increment of MariaDB/MySQL tables to a positive integer value (concerns the data structure! Use with caution!) |
| [system-checkforupdates](#OptionsandParametersfortheConsole-system-checkforupdates) | Check for updates for i-doit |
| [system-convert-non-innodb-tables](#OptionsandParametersfortheConsole-system-convert-non-innodb-tables) | Converts all tables that are not in INNODB to INNODB (concerns the database coding. Use with caution!) |
| [system-convert-non-utf8-tables](#OptionsandParametersfortheConsole-system-convert-non-utf8-tables) | Converts all non-UTF8 tables to UTF8 tables (concerns database encoding. Use with caution!) |
| [system-location-fix](#OptionsandParametersfortheConsole-system-location-fix) | Executes the location correction from the GUI on the console |
| [system-maintenancecontract](#OptionsandParametersfortheConsole-system-maintenancecontract) | Send e-mail for maintenance contracts (Function deprecated. Please use [notifications-send](#OptionsandParametersfortheConsole-notifications-send)) |
| [system-objectcleanup](#OptionsandParametersfortheConsole-system-objectcleanup) | Clean up objects (objects with the status "unfinished", "archived" or "deleted" are permanently removed) |
| [system-objectrelations](#OptionsandParametersfortheConsole-system-objectrelations) | Recreate Object Relationships |
| [tenant-create](#OptionsandParametersfortheConsole-tenant-create) | Add a new tenant |
| [tenant-disable](#OptionsandParametersfortheConsole-tenant-disable) | Deactivate an existing tenant |
| [tenant-enable](#OptionsandParametersfortheConsole-tenant-enable) | Activate an existing tenant |
| [tenant-list](#OptionsandParametersfortheConsole-tenant-list) | List all available tenants |
| [tenant-remove](#OptionsandParametersfortheConsole-tenant-remove) | Remove an existing tenant |
| [uninstall](#OptionsandParametersfortheConsole-uninstall) | Uninstalls i-doit |
| [update](#OptionsandParametersfortheConsole-update) | Installs an update for i-doit |
| [workflows-process](#OptionsandParametersfortheConsole-workflows-process) | Processes all workflows, sends e-mails and creates new tasks from checklists |

Configuration file and parameters --config

It is possible to pass additional content to the call via a configuration file. This file must be stored in the i-doit directory src/handler/config/. An example in the form of the file "isys\_handler\_ldap.ini" can be found in the directory src/handler/config/examples/.

If this file is to be included in the process, it must be included using the --config or -c parameter.

### addon-activate

Activates installed add-ons for the desired tenant

**Options:**

| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| \-u | \--user=\[USERNAME\] | Username of a user who is authorized to execute |
| \-p | \--password=\[PASSWORD\] | Password for authentication of the previously specified user |
| \-t | \--tenant=\[TENANT-ID\] | Tenant ID of the tenant to be used (default: 1) |
| \-a | \--addon=\[ADDON\] | Add-on identification |
| \-h | \--help | Help message for displaying further information |
| \-q | \--quiet | Quiet-Mode to deactivate output |
| \-V | \--version | Output of the i-doit Console version |
|     | \--ansi | Forces the output in ANSI format |
|     | \--no-ansi | Disables the output in ANSI format |
| \-n | \--no-interaction | Disables all interaction questions of the i-doit Console |
| \-v / -vv / -vvv | \--verbose | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

[?](#)

`sudo` `-u www-data php console.php addon-activate --user admin --password admin --tenant 1 --addon api`

### addon-deactivate

Disabled installed add-ons for the desired tenant

**Options:**

| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| \-u | \--user=\[USERNAME\] | Username of a user who is authorized to execute |
| \-p | \--password=\[PASSWORD\] | Password for authentication of the previously specified user |
| \-t | \--tenant=\[TENANT-ID\] | Tenant ID of the tenant to be used (default: 1) |
| \-a | \--addon=\[ADDON\] | Add-on identification |
| \-h | \--help | Help message for displaying further information |
| \-q | \--quiet | Quiet-Mode to deactivate output |
| \-V | \--version | Output of the i-doit Console version |
|     | \--ansi | Forces the output in ANSI format |
|     | \--no-ansi | Disables the output in ANSI format |
| \-n | \--no-interaction | Disables all interaction questions of the i-doit Console |
| \-v / -vv / -vvv | \--verbose | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

[?](#)

`sudo` `-u www-data php console.php addon-deactivate --user admin --password admin --tenant 1 --addon api`

### addon-install

Installs add-ons for the desired tenant

**Options:**

| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| \-u | \--user=\[USERNAME\] | Username of a user who is authorized to execute |
| \-p | \--password=\[PASSWORD\] | Password for authentication of the previously specified user |
| \-z | \--zip=\[ZIP\] | Path to add-on ZIP file |
| \-t | \--tenant=\[TENANT-ID\] | Tenant ID of the tenant to be used (default: 1) |
| \-a | \--addon=\[ADDON\] | Add-on identification |
| \-h | \--help | Help message for displaying further information |
| \-q | \--quiet | Quiet-Mode to deactivate output |
| \-V | \--version | Output of the i-doit Console version |
|     | \--ansi | Forces the output in ANSI format |
|     | \--no-ansi | Disables the output in ANSI format |
| \-n | \--no-interaction | Disables all interaction questions of the i-doit Console |
| \-v / -vv / -vvv | \--verbose | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

[?](#)

`sudo` `-u www-data php console.php addon-``install` `--user admin --password admin --tenant 1 --addon api --zip` `/path/to/the/zip/file``.zip`

### addon-list

Displays a list with all installed add-ons for the selected tenant

**Options:**

| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| \-t | \--tenant=\[TENANT-ID\] | Tenant ID of the tenant to be used (default: 1) |
| \-a | \--addon=\[ADDON\] | Add-on identification |
| \-h | \--help | Help message for displaying further information |
| \-q | \--quiet | Quiet-Mode to deactivate output |
| \-V | \--version | Output of the i-doit Console version |
|     | \--ansi | Forces the output in ANSI format |
|     | \--no-ansi | Disables the output in ANSI format |
| \-n | \--no-interaction | Disables all interaction questions of the i-doit Console |
| \-v / -vv / -vvv | \--verbose | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

[?](#)

`sudo` `-u www-data php console.php addon-list --tenant 1`

### admin-center-cryptohash-reset

The crypto-hash of i-doit is changed, which renews the entire encryption (ATTENTION! A backup should be created prior to execution)

**Options:**

| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| \-u | \--user=\[USER\] | Username of a user who is authorized to execute |
| \-p | \--password=\[PASSWORD\] | Password for authentication of the previously specified user |
| \-h | \--help | Help message for displaying further information |
| \-q | \--quiet | Quiet-Mode to deactivate output |
| \-V | \--version | Output of the i-doit Console version |
|     | \--ansi | Forces the output in ANSI format |
|     | \--no-ansi | Disables the output in ANSI format |
| \-n | \--no-interaction | Disables all interaction questions of the i-doit Console |
| \-v / -vv / -vvv | \--verbose | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

[?](#)

`sudo` `-u www-data php console.php admin-center-cryptohash-reset --user admin --password admin`

### admin-center-password-reset

Reset the password for the Admin Center

**Options:**

| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| \-u | \--user=\[USERNAME\] | Username of a user who is authorized to execute |
| \-p | \--password=\[PASSWORD\] | Password for authentication of the previously specified user |
| \-h | \--help | Help message for displaying further information |
| \-q | \--quiet | Quiet-Mode to deactivate output |
| \-V | \--version | Output of the i-doit Console version |
|     | \--ansi | Forces the output in ANSI format |
|     | \--no-ansi | Disables the output in ANSI format |
| \-n | \--no-interaction | Disables all interaction questions of the i-doit Console |
| \-v / -vv / -vvv | \--verbose | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

[?](#)

`sudo` `-u www-data php console.php admin-center-password-reset --user admin --password admin`

### auth-cleanup

Empties the cache of the rights system so that the currently configured rights are current or updated.

**Options:**

| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| \-u | \--user=\[USERNAME\] | Username of a user who is authorized to execute |
| \-p | \--password=\[PASSWORD\] | Password for authentication of the previously specified user |
| \-i | \--tenantId=\[TENANT-ID\] | Tenant ID of the tenant to be used (default: 1) |
| \-c | \--config=\[CONFIG-FILE\] | Specifying the path to the configuration file |
| \-h | \--help | Help message for displaying further information |
| \-q | \--quiet | Quiet-Mode to deactivate output |
| \-V | \--version | Output of the i-doit Console version |
|     | \--ansi | Forces the output in ANSI format |
|     | \--no-ansi | Disables the output in ANSI format |
| \-n | \--no-interaction | Disables all interaction questions of the i-doit Console |
| \-v / -vv / -vvv | \--verbose | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

[?](#)

`sudo` `-u www-data php console.php auth-cleanup --user admin --password admin --tenantId 1`

### check\_mk-export

Performs a Check\_MK export

**Options:**

| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| \-l | \--exportLanguage=EXPORTLANGUAGE | Definition of the language used for the export (default = 0) |
| \-x | \--exportStructure=EXPORTSTRUCTURE | Definition of the structure used for the export (default = 0) |
| \-u | \--user=\[USERNAME\] | Username of a user who is authorized to execute |
| \-p | \--password=\[PASSWORD\] | Password for authentication of the previously specified user |
| \-i | \--tenantId=\[TENANT-ID\] | Tenant ID of the tenant to be used (default: 1) |
| \-c | \--config=\[CONFIG-FILE\] | Specifying the path to the configuration file |
| \-h | \--help | Help message for displaying further information |
| \-q | \--quiet | Quiet-Mode to deactivate output |
| \-V | \--version | Output of the i-doit Console version |
|     | \--ansi | Forces the output in ANSI format |
|     | \--no-ansi | Disables the output in ANSI format |
| \-n | \--no-interaction | Disables all interaction questions of the i-doit Console |
| \-v / -vv / -vvv | \--verbose | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

[?](#)

`sudo` `-u www-data php console.php check_mk-``export` `--user admin --password admin --tenantId 1`

  

### check\_mk-livestatus  

Imports the monitoring status changes from Livestatus to i-doit

**Options:**

| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| \-u | \--user=\[USERNAME\] | Username of a user who is authorized to execute |
| \-p | \--password=\[PASSWORD\] | Password for authentication of the previously specified user |
| \-i | \--tenantId=\[TENANT-ID\] | Tenant ID of the tenant to be used (default: 1) |
| \-c | \--config=\[CONFIG-FILE\] | Specifying the path to the configuration file |
| \-h | \--help | Help message for displaying further information |
| \-q | \--quiet | Quiet-Mode to deactivate output |
| \-V | \--version | Output of the i-doit Console version |
|     | \--ansi | Forces the output in ANSI format |
|     | \--no-ansi | Disables the output in ANSI format |
| \-n | \--no-interaction | Disables all interaction questions of the i-doit Console |
| \-v / -vv / -vvv | \--verbose | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

[?](#)

`sudo` `-u www-data php console.php check_mk-livestatus --user admin --password admin --tenantId 1`

### clear-credentials

Removes the entries of the attributes "username" and "password" from user logins

**Options:**

| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
|     | \--object=\[OBJECT\] | Object ID of the user to be deactivated |
| \-u | \--user=\[USERNAME\] | Username of a user who is authorized to execute |
| \-p | \--password=\[PASSWORD\] | Password for authentication of the previously specified user |
| \-h | \--help | Help message for displaying further information |
| \-q | \--quiet | Quiet-Mode to deactivate output |
| \-V | \--version | Output of the i-doit Console version |
|     | \--ansi | Forces the output in ANSI format |
|     | \--no-ansi | Disables the output in ANSI format |
| \-n | \--no-interaction | Disables all interaction questions of the i-doit Console |
| \-v / -vv / -vvv | \--verbose | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

[?](#)

`sudo` `-u www-data php console.php` `clear``-credentials --user admin --password admin --object ObjectID`

### help

Used in conjunction with another command to display its usage, arguments and options

**Options:**

| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
|     | \--format=\[FORMAT\] | Set the output format (txt, xml, json or md) \[Default: txt\] |
|     | \--raw | Output of the command help |
| \-h | \--help | Help message for displaying further information |
| \-q | \--quiet | Quiet-Mode to deactivate output |
| \-V | \--version | Output of the i-doit Console version |
|     | \--ansi | Forces the output in ANSI format |
|     | \--no-ansi | Disables the output in ANSI format |
| \-n | \--no-interaction | Disables all interaction questions of the i-doit Console |
| \-v / -vv / -vvv | \--verbose | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

[?](#)

`sudo` `-u www-data php console.php help --``format``=txt <``command``>`

### import-csv

Performs the import of a CSV file with the desired import parameters

 **Options:**

| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
|     | \--importFile=IMPORTFILE | Specifies the file and its path to be used for the import |
|     | \--importProfileId=IMPORTPROFILEID | Defines the profile with which the import is to be performed |
|     | \--csvSeparator=CSVSEPARATOR | Defines the separators for the import |
|     | \--multiValueMode=MULTIVALUEMODE | Sets the mode for multi-value categories (possible values: "row", "column" or "comma") |
| \-u | \--user=\[USERNAME\] | Username of a user who is authorized to execute |
| \-p | \--password=\[PASSWORD\] | Password for authentication of the previously specified user |
| \-i | \--tenantId=\[TENANT-ID\] | Tenant ID of the tenant to be used (default: 1) |
| \-h | \--help | Help message for displaying further information |
| \-q | \--quiet | Quiet-Mode to deactivate output |
| \-V | \--version | Output of the i-doit Console version |
|     | \--ansi | Forces the output in ANSI format |
|     | \--no-ansi | Disables the output in ANSI format |
| \-n | \--no-interaction | Disables all interaction questions of the i-doit Console |
| \-v / -vv / -vvv | \--verbose | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

[?](#)

`sudo` `-u www-data php console.php` `import``-csv --user admin --password admin --tenantId 1 --importFile` `/var/www/imports/idoit-Demo-CSV-Import``.csv --importProfileId 1 --csvSeparator` `";"` `--multiValueMode column`

### import-csvprofiles

Returns a list of the import profiles for the CSV import

**Options:**

| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| \-u | \--user=\[USERNAME\] | Username of a user who is authorized to execute |
| \-p | \--password=\[PASSWORD\] | Password for authentication of the previously specified user |
| \-i | \--tenantId=\[TENANT-ID\] | Tenant ID of the tenant to be used (default: 1) |
| \-h | \--help | Help message for displaying further information |
| \-q | \--quiet | Quiet-Mode to deactivate output |
| \-V | \--version | Output of the i-doit Console version |
|     | \--ansi | Forces the output in ANSI format |
|     | \--no-ansi | Disables the output in ANSI format |
| \-n | \--no-interaction | Disables all interaction questions of the i-doit Console |
| \-v / -vv / -vvv | \--verbose | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

[?](#)

`sudo` `-u www-data php console.php` `import``-csvprofiles --user admin --password admin --tenantId 1`

  

### import-hinventory

Performs an h-inventory import of a compatible XML file

**Options:**

| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
|     | \--importFile=IMPORTFILE | Specifies the file and its path to be used for the import |
|     | \--usage | Further detailed information on using the command |
|     | \--objectType=OBJECTTYPE | Imports the specified object type |
|     | \--objectId=OBJECTID | Imports only the specified object |
| \-f | \--force | Forces existing objects to be updated but overwrites the imported categories |
| \-u | \--user=\[USERNAME\] | Username of a user who is authorized to execute |
| \-p | \--password=\[PASSWORD\] | Password for authentication of the previously specified user |
| \-i | \--tenantId=\[TENANT-ID\] | Tenant ID of the tenant to be used (default: 1) |
| \-h | \--help | Help message for displaying further information |
| \-q | \--quiet | Quiet-Mode to deactivate output |
| \-V | \--version | Output of the i-doit Console version |
|     | \--ansi | Forces the output in ANSI format |
|     | \--no-ansi | Disables the output in ANSI format |
| \-n | \--no-interaction | Disables all interaction questions of the i-doit Console |
| \-v / -vv / -vvv | \--verbose | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

[?](#)

`sudo` `-u www-data php console.php` `import``-hinventory --user admin --password admin --tenantId 1 --importFile` `/var/www/imports/idoit-Demo-h-inventory-import``.xml`

  

### import-jdisc

Performs a JDisc import to i-doit.

**Options:**

| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| \-r | \--profile=PROFILE | Specify/select the JDisc profile to be used for the import |
| \-g | \--group=GROUP | Specify/select the group ID to be used for the import |
| \-x | \--mode=MODE | Select the import mode. The following IDs are available:<br><br>1: "Append": The import will only create new objects.<br><br>2: "Update": The import will try to update already existing objects.<br><br>3: "Overwrite": Existing objects are updated, new objects are created additionally. Contents from Multi-Value-Categories are first completely deleted and then newly created on the database.<br><br>4: "Update (newly discovered)": The mode corresponds to "Update", but all known links between i-doit and JDisc objects are removed and reconnected after a check.<br><br>5: "Overwrite (newly discovered)": The import clears all existing identification keys before the Overwrite mode is triggered. |
| \-s | \--server=SERVER | Enter the Server-ID to select it |
| \-o | \--overwriteHost | Specify whether to overwrite overlapping host addresses |
| \-l | \--detailedLogging | Increases the logging level |
| \-b | \--regenerateSearchIndex | Automatically renews the search index |
|     | \--listProfiles | Creates a list of available profiles |
| \-u | \--user=\[USERNAME\] | Username of a user who is authorized to execute |
| \-p | \--password=\[PASSWORD\] | Password for authentication of the previously specified user |
| \-i | \--tenantId=\[TENANT-ID\] | Tenant ID of the tenant to be used (default: 1) |
| \-c | \--config=\[CONFIG-FILE\] | Specifying the path to the configuration file |
| \-h | \--help | Help message for displaying further information |
| \-q | \--quiet | Quiet-Mode to deactivate output |
| \-V | \--version | Output of the i-doit Console version |
|     | \--ansi | Forces the output in ANSI format |
|     | \--no-ansi | Disables the output in ANSI format |
| \-n | \--no-interaction | Disables all interaction questions of the i-doit Console |
| \-v / -vv / -vvv | \--verbose | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

[?](#)

`sudo` `-u www-data php console.php` `import``-jdisc --user admin --password admin --tenantId 1 --profile 3 --mode 4 --server 2 --detailedLogging --regenerateSearchIndex`

  

### import-jdiscdiscovery

Triggers a JDisc Discovery job.

**Options:**

| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| \-s | \--server=SERVER | Selecting the JDisc Server |
| \-j | \--discoveryJob=DISCOVERYJOB | Selection of the Discovery Job (Standard: "Discover all") |
| \-d | \--deviceHostname=DEVICEHOSTNAME | Selecting the device by host name |
| \-a | \--deviceHostAddress=DEVICEHOSTADDRESS | Selecting the device using the host address |
| \-l | \--showLog | Displays the log during the Discoveries |
| \-u | \--user=\[USERNAME\] | Username of a user who is authorized to execute |
| \-p | \--password=\[PASSWORD\] | Password for authentication of the previously specified user |
| \-i | \--tenantId=\[TENANT-ID\] | Tenant ID of the tenant to be used (default: 1) |
| \-c | \--config=\[CONFIG-FILE\] | Specifying the path to the configuration file |
| \-h | \--help | Help message for displaying further information |
| \-q | \--quiet | Quiet-Mode to deactivate output |
| \-V | \--version | Output of the i-doit Console version |
|     | \--ansi | Forces the output in ANSI format |
|     | \--no-ansi | Disables the output in ANSI format |
| \-n | \--no-interaction | Disables all interaction questions of the i-doit Console |
| \-v / -vv / -vvv | \--verbose | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

[?](#)

`sudo` `-u www-data php console.php` `import``-jdiscdiscovery --user admin --password admin --tenantId 1 --server 2`

  

### import-ocs  

Performs an import of contents of an OCS database to i-doit

**Options:**

| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
|     | \--ipPortOverwrite=IPPORTOVERWRITE | Specifies whether host addresses and ports are cleared before import. Possible values: 1 = active, 0 = inactive |
|     | \--databaseSchema=DATABASESCHEMA | Selection of the database schema used for the import |
|     | \--objectType=OBJECTTYPE | Specifies the standard object type that is used for the import |
|     | \--file=FILE | Specifying the file that contains the host names |
|     | \--hosts=HOSTS | Comma-separated list of host names to be imported |
|     | \--snmpDevices=SNMPDEVICES | Import of SNMP devices |
|     | \--categories=CATEGORIES | Specifies the categories to import. Possible values:<br><br>_drive, ui, sound, application, memory, model, graphic, net, stor, operating\_system, cpu_ |
|     | \--logging=LOGGING | Activation of logging (1= normal logging, 2= debug level, default = 0) |
|     | \--listObjectTypes | Listing of all available object types |
|     | \--listCategories | Listing of all available categories |
|     | \--usage | Detailed information on using the command |
| \-u | \--user=\[USERNAME\] | Username of a user who is authorized to execute |
| \-p | \--password=\[PASSWORD\] | Password for authentication of the previously specified user |
| \-i | \--tenantId=\[TENANT-ID\] | Tenant ID of the tenant to be used (default: 1) |
| \-c | \--config=\[CONFIG-FILE\] | Specifying the path to the configuration file |
| \-h | \--help | Help message for displaying further information |
| \-q | \--quiet | Quiet-Mode to deactivate output |
| \-V | \--version | Output of the i-doit Console version |
|     | \--ansi | Forces the output in ANSI format |
|     | \--no-ansi | Disables the output in ANSI format |
| \-n | \--no-interaction | Disables all interaction questions of the i-doit Console |
| \-v / -vv / -vvv | \--verbose | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

[?](#)

`sudo` `-u www-data php console.php` `import``-ocs --user admin --password admin --tenantId 1 --databaseSchema ocs --objectType C__OBJTYPE__CLIENT`

  

### import-syslog  

Imports content from a Syslog Server text file into the i-doit logbook.

**Options:**

| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| \-u | \--user=\[USERNAME\] | Username of a user who is authorized to execute |
| \-p | \--password=\[PASSWORD\] | Password for authentication of the previously specified user |
| \-i | \--tenantId=\[TENANT-ID\] | Tenant ID of the tenant to be used (default: 1) |
| \-c | \--config=\[CONFIG-FILE\] | Specifying the path to the configuration file |
| \-h | \--help | Help message for displaying further information |
| \-q | \--quiet | Quiet-Mode to deactivate output |
| \-V | \--version | Output of the i-doit Console version |
|     | \--ansi | Forces the output in ANSI format |
|     | \--no-ansi | Disables the output in ANSI format |
| \-n | \--no-interaction | Disables all interaction questions of the i-doit Console |
| \-v / -vv / -vvv | \--verbose | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

[?](#)

`sudo` `-u www-data php console.php` `import``-syslog --user admin --password admin --tenantId 1`

###   

### import-xml  

Performs an import of an XML file into i-doit

**Options:**

| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
|     | \--importFile=IMPORTFILE | Specification of the import file and its path |
|     | \--usage | Detailed information on using the command |
| \-u | \--user=\[USERNAME\] | Username of a user who is authorized to execute |
| \-p | \--password=\[PASSWORD\] | Password for authentication of the previously specified user |
| \-i | \--tenantId=\[TENANT-ID\] | Tenant ID of the tenant to be used (default: 1) |
| \-c | \--config=\[CONFIG-FILE\] | Specifying the path to the configuration file |
| \-h | \--help | Help message for displaying further information |
| \-q | \--quiet | Quiet-Mode to deactivate output |
| \-V | \--version | Output of the i-doit Console version |
|     | \--ansi | Forces the output in ANSI format |
|     | \--no-ansi | Disables the output in ANSI format |
| \-n | \--no-interaction | Disables all interaction questions of the i-doit Console |
| \-v / -vv / -vvv | \--verbose | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

[?](#)

`sudo` `-u www-data php console.php` `import``-xml --user admin --password admin --tenantId 1 --importFile` `/var/www/imports/idoit-Demo-xml-import``.xml`

###   

### ldap-sync  

Synchronizes users from LDAP to i-doit and creates them as person objects. 

**Options:**

| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| \-l | \--ldapServerId=LDAPSERVERID | Specifies the ID of the LDAP server from which the users are to be synchronized  <br>If no ldapServerId is specified, all active servers are synchronized |
|     | \--dumpConfig | Outputs the current configuration from the configuration file |
|     | \--connectionRankingActive\[=CONNECTIONRANKINGACTIVE\] | Configuration which reactivates all connections from all reactivated Users.  <br>Default configuration is expert setting 'ldap.connection-ranking-active' (Tenant-wide) with value '1'. |
|     | \--dropExistingRelations\[=DROPEXISTINGRELATIONS\] | If an existing ldap group has group member users, outside of these synced users, those will be purged.  <br>1 = drop existing relations, 0 = ignore existing relations \[default: 0\] |
|     | \--archiveDeletedGroups\[=ARCHIVEDELETEDGROUPS\] | If a deleted ldap group remains in i-doit, archive or delete it. \[default: false\] |
|     | \--useDefaultTemplates | Use default templates, whenever object get created by this command (v1.18) |
| \-u | \--user=\[USERNAME\] | Username of a user who is authorized to execute |
| \-p | \--password=\[PASSWORD\] | Password for authentication of the previously specified user |
| \-i | \--tenantId=\[TENANT-ID\] | Tenant ID of the tenant to be used (default: 1) |
| \-c | \--config=\[CONFIG-FILE\] | Specifying the path to the configuration file |
| \-h | \--help | Help message for displaying further information |
| \-q | \--quiet | Quiet-Mode to deactivate output |
| \-V | \--version | Output of the i-doit Console version |
|     | \--ansi | Forces the output in ANSI format |
|     | \--no-ansi | Disables the output in ANSI format |
| \-n | \--no-interaction | Disables all interaction questions of the i-doit Console |
| \-v / -vv / -vvv | \--verbose | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

[?](#)

`sudo` `-u www-data php console.php ldap-``sync` `--user admin --password admin --tenantId 1 --verbose --ldapServerId 1`

  

### ldap-syncdn  

Synchronizes LDAP DNs with the i-doit users

**Options:**

| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
|     | \--ldapServerId=LDAPSERVERID | Specifying the LDAP server via the ID |
| \-o | \--objectType=OBJECTTYPE | Specifying the object type as a constant (z.B. C\_\_OBJTYPE\_\_SERVER) |
| \-u | \--user=\[USERNAME\] | Username of a user who is authorized to execute |
| \-p | \--password=\[PASSWORD\] | Password for authentication of the previously specified user |
| \-i | \--tenantId=\[TENANT-ID\] | Tenant ID of the tenant to be used (default: 1) |
| \-h | \--help | Help message for displaying further information |
| \-q | \--quiet | Quiet-Mode to deactivate output |
| \-V | \--version | Output of the i-doit Console version |
|     | \--ansi | Forces the output in ANSI format |
|     | \--no-ansi | Disables the output in ANSI format |
| \-n | \--no-interaction | Disables all interaction questions of the i-doit Console |
| \-v / -vv / -vvv | \--verbose | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

[?](#)

`sudo` `-u www-data php console.php ldap-syncdn --user admin --password admin --tenantId 1 --ldapServerId 1`

### list

Lists all commands. Format of the output can be changed.

**Options:**

| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
|     | \--format=\[FORMAT\] | Setting the output format (txt, xml, json or md) \[Default: txt\] |
|     | \--raw | Output of the command help |

**Example of use**

[?](#)

`sudo` `-u www-data php console.php list --``format``=txt`

  

license-add

Adds a license for i-doit

**Options:**

| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| \-u | \--user=\[USERNAME\] | Username of a user who is authorized to execute |
| \-p | \--password=\[PASSWORD\] | Password for authentication of the previously specified user |
| \-l | \--license=\[LICENSE\] | Path to the license file (/path/to/license/file.key) |
| \-t | \--tenant=\[TENANT-ID\] | Tenant ID of the tenant to be used (default: 1) |
| \-h | \--help | Help message for displaying further information |
| \-q | \--quiet | Quiet-Mode to deactivate output |
| \-V | \--version | Output of the i-doit Console version |
|     | \--ansi | Forces the output in ANSI format |
|     | \--no-ansi | Disables the output in ANSI format |
| \-n | \--no-interaction | Disables all interaction questions of the i-doit Console |
| \-v / -vv / -vvv | \--verbose | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

[?](#)

`sudo` `-u www-data php console.php license-add --user admin --password admin --tenantId 1 --license` `/path/to/license/file``.key`

### license-assign

Assigns a hosting license to a tenant

**Options:**

| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| \-u | \--user=\[USERNAME\] | Username of a user who is authorized to execute |
| \-p | \--password=\[PASSWORD\] | Password for authentication of the previously specified user |
| \-i | \--tenantId=\[TENANT-ID\] | Tenant ID of the tenant to be used (default: 1) |
| \-c | \--count=\[COUNT\] | Number of objects to be licensed \[Default: 0\] |
| \-h | \--help | Help message for displaying further information |
| \-q | \--quiet | Quiet-Mode to deactivate output |
| \-V | \--version | Output of the i-doit Console version |
|     | \--ansi | Forces the output in ANSI format |
|     | \--no-ansi | Disables the output in ANSI format |
| \-n | \--no-interaction | Disables all interaction questions of the i-doit Console |
| \-v / -vv / -vvv | \--verbose | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

[?](#)

`sudo` `-u www-data php console.php license-assign --user admin --password admin --tenantId 1 --count 1000`

### license-import

Imports licenses from the i-doit license server

**Options:**

| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| \-u | \--user=\[USERNAME\] | Username of a user who is authorized to execute |
| \-p | \--password=\[PASSWORD\] | Password for authentication of the previously specified user |
| \-l | \--license-server=\[LICENSE-SERVER\] | Path to the i-doit license server \[Default: "https://lizenzen.i-doit.com"\] |
| \-h | \--help | Help message for displaying further information |
| \-q | \--quiet | Quiet-Mode to deactivate output |
| \-V | \--version | Output of the i-doit Console version |
|     | \--ansi | Forces the output in ANSI format |
|     | \--no-ansi | Disables the output in ANSI format |
| \-n | \--no-interaction | Disables all interaction questions of the i-doit Console |
| \-v / -vv / -vvv | \--verbose | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

[?](#)

`sudo` `-u www-data php console.php license-``import` `--user admin --password admin --license-server https:``//lizenzen``.i-doit.com`

### license-key

Sets a license key for i-doit

**Options:**

| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| \-u | \--user=\[USERNAME\] | Username of a user who is authorized to execute |
| \-p | \--password=\[PASSWORD\] | Password for authentication of the previously specified user |
| \-l | \--license-server=\[LICENSE-SERVER\] | Path to the i-doit license server \[Default: "[https://lizenzen.i-doit.com](https://lizenzen.i-doit.com)"\] |
| \-k | \--key=\[KEY\] | License key for i-doit |
| \-h | \--help | Help message for displaying further information |
| \-q | \--quiet | Quiet-Mode to deactivate output |
| \-V | \--version | Output of the i-doit Console version |
|     | \--ansi | Forces the output in ANSI format |
|     | \--no-ansi | Disables the output in ANSI format |
| \-n | \--no-interaction | Disables all interaction questions of the i-doit Console |
| \-v / -vv / -vvv | \--verbose | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

[?](#)

`sudo` `-u www-data php console.php license-key --user admin --password admin --license-server https:``//lizenzen``.i-doit.com --key license`

###   

### license-list

Lists all installed licenses

**Options:**

| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| \-t | \--tenant=\[TENANT\] | ID of the assigned tenant to filter (multiple values allowed) |
| \-h | \--help | Help message for displaying further information |
| \-q | \--quiet | Quiet-Mode to deactivate output |
| \-V | \--version | Output of the i-doit Console version |
|     | \--ansi | Forces the output in ANSI format |
|     | \--no-ansi | Disables the output in ANSI format |
| \-n | \--no-interaction | Disables all interaction questions of the i-doit Console |
| \-v / -vv / -vvv | \--verbose | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

[?](#)

`sudo` `-u www-data php console.php license-list --tenant 1`

  

### license-remove

Deletes a license from i-doit

**Options:**

| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| \-u | \--user=\[USERNAME\] | Username of a user who is authorized to execute |
| \-p | \--password=\[PASSWORD\] | Password for authentication of the previously specified user |
| \-l | \--license=\[LICENSE\] | License ID for the license to be deleted |
| \-h | \--help | Help message for displaying further information |
| \-q | \--quiet | Quiet-Mode to deactivate output |
| \-V | \--version | Output of the i-doit Console version |
|     | \--ansi | Forces the output in ANSI format |
|     | \--no-ansi | Disables the output in ANSI format |
| \-n | \--no-interaction | Disables all interaction questions of the i-doit Console |
| \-v / -vv / -vvv | \--verbose | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

[?](#)

`sudo` `-u www-data php console.php license-remove --user admin --password admin --license LicenseID`

### logbook-archive  

Archives the logbook entries with a defined age, according to the settings on the i-doit interface.

**Options:**

| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| \-u | \--user=\[USERNAME\] | Username of a user who is authorized to execute |
| \-p | \--password=\[PASSWORD\] | Password for authentication of the previously specified user |
| \-i | \--tenantId=\[TENANT-ID\] | Tenant ID of the tenant to be used (default: 1) |
| \-c | \--config=\[CONFIG-FILE\] | Specifying the path to the configuration file |
| \-h | \--help | Help message for displaying further information |
| \-q | \--quiet | Quiet-Mode to deactivate output |
| \-V | \--version | Output of the i-doit Console version |
|     | \--ansi | Forces the output in ANSI format |
|     | \--no-ansi | Disables the output in ANSI format |
| \-n | \--no-interaction | Disables all interaction questions of the i-doit Console |
| \-v / -vv / -vvv | \--verbose | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

[?](#)

`sudo` `-u www-data php console.php logbook-archive --user admin --password admin --tenantId 1`

### maintenance  

Sends e-mails with scheduled maintenance according to the time periods specified in the Maintenance add-on.

**Options:**

| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| \-u | \--user=\[USERNAME\] | Username of a user who is authorized to execute |
| \-p | \--password=\[PASSWORD\] | Password for authentication of the previously specified user |
| \-i | \--tenantId=\[TENANT-ID\] | Tenant ID of the tenant to be used (default: 1) |
| \-h | \--help | Help message for displaying further information |
| \-q | \--quiet | Quiet-Mode to deactivate output |
| \-V | \--version | Output of the i-doit Console version |
|     | \--ansi | Forces the output in ANSI format |
|     | \--no-ansi | Disables the output in ANSI format |
| \-n | \--no-interaction | Disables all interaction questions of the i-doit Console |
| \-v / -vv / -vvv | \--verbose | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

[?](#)

`sudo` `-u www-data php console.php maintenance --user admin --password admin --tenantId 1`

  

### nagios-export  

Exports the Nagios settings and i-doit objects to Nagios configuration files

**Options:**

| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
|     | \--nagiosHostId=NAGIOSHOSTID | Specifies the Nagios host to be used for the export |
|     | \--validate | Validates the export files |
| \-u | \--user=\[USERNAME\] | Username of a user who is authorized to execute |
| \-p | \--password=\[PASSWORD\] | Password for authentication of the previously specified user |
| \-i | \--tenantId=\[TENANT-ID\] | Tenant ID of the tenant to be used (default: 1) |
| \-c | \--config=\[CONFIG-FILE\] | Specifying the path to the configuration file |
| \-h | \--help | Help message for displaying further information |
| \-q | \--quiet | Quiet-Mode to deactivate output |
| \-V | \--version | Output of the i-doit Console version |
|     | \--ansi | Forces the output in ANSI format |
|     | \--no-ansi | Disables the output in ANSI format |
| \-n | \--no-interaction | Disables all interaction questions of the i-doit Console |
| \-v / -vv / -vvv | \--verbose | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

[?](#)

`sudo` `-u www-data php console.php nagios-``export` `--user admin --password admin --tenantId 1 --nagiosHostId 1`

  

### nagios-ndoutils  

Imports monitoring status changes from the NDOUtils into the i-doit logbook.

**Options:**

| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| \-u | \--user=\[USERNAME\] | Username of a user who is authorized to execute |
| \-p | \--password=\[PASSWORD\] | Password for authentication of the previously specified user |
| \-i | \--tenantId=\[TENANT-ID\] | Tenant ID of the tenant to be used (default: 1) |
| \-c | \--config=\[CONFIG-FILE\] | Specifying the path to the configuration file |
| \-h | \--help | Help message for displaying further information |
| \-q | \--quiet | Quiet-Mode to deactivate output |
| \-V | \--version | Output of the i-doit Console version |
|     | \--ansi | Forces the output in ANSI format |
|     | \--no-ansi | Disables the output in ANSI format |
| \-n | \--no-interaction | Disables all interaction questions of the i-doit Console |
| \-v / -vv / -vvv | \--verbose | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

[?](#)

`sudo` `-u www-data php console.php nagios-ndoutils --user admin --password admin --tenantId 1`

  

### notifications-send  

Sends the notifications configured on the i-doit interface

**Options:**

| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
|     | \--notification-ids=NOTIFICATION-IDS | Pass specific notification IDs to be sent 1,2,3 |
|     | \--notification-type-ids=NOTIFICATION-TYPE-IDS | Pass specific notification type IDs to be sent 1,2,3 |
| \-u | \--user=\[USERNAME\] | Username of a user who is authorized to execute |
| \-p | \--password=\[PASSWORD\] | Password for authentication of the previously specified user |
| \-i | \--tenantId=\[TENANT-ID\] | Tenant ID of the tenant to be used (default: 1) |
| \-c | \--config=\[CONFIG-FILE\] | Specifying the path to the configuration file |
| \-h | \--help | Help message for displaying further information |
| \-q | \--quiet | Quiet-Mode to deactivate output |
| \-V | \--version | Output of the i-doit Console version |
|     | \--ansi | Forces the output in ANSI format |
|     | \--no-ansi | Disables the output in ANSI format |
| \-n | \--no-interaction | Disables all interaction questions of the i-doit Console |
| \-v / -vv / -vvv | \--verbose | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

[?](#)

`sudo` `-u www-data php console.php notifications-send --user admin --password admin --tenantId 1`

  

### report-export  

Exports a report to the desired file format.

**Options:**

| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| \-r | \--reportId=REPORTID | ID of the report to be exported |
| \-d | \--exportPath=EXPORTPATH | Path to which the export should take place |
| \-f | \--exportFilename=EXPORTFILENAME | File name of the export file without file extension |
| \-t | \--exportFileType=EXPORTFILETYPE | File type of the export file. Possible values: csv, txt, pdf, xml (Default:  "csv") |
| \-u | \--user=\[USERNAME\] | Username of a user who is authorized to execute |
| \-p | \--password=\[PASSWORD\] | Password for authentication of the previously specified user |
| \-i | \--tenantId=\[TENANT-ID\] | Tenant ID of the tenant to be used (default: 1) |
| \-c | \--config=\[CONFIG-FILE\] | Specifying the path to the configuration file |
| \-h | \--help | Help message for displaying further information |
| \-q | \--quiet | Quiet-Mode to deactivate output |
| \-V | \--version | Output of the i-doit Console version |
|     | \--ansi | Forces the output in ANSI format |
|     | \--no-ansi | Disables the output in ANSI format |
| \-n | \--no-interaction | Disables all interaction questions of the i-doit Console |
| \-v / -vv / -vvv | \--verbose | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

[?](#)

`sudo` `-u www-data php console.php report-``export` `--user admin --password admin --tenantId 1 --reportId 27 --exportPath` `/var/www/exported-reports/` `--exportFilename Report-Buchhaltung-November-2019 --exportFileType csv`

  

### search  

Searches for content in the documentation

**Options:**

| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
|     | \--searchString=SEARCHSTRING | Content to be searched for |
| \-u | \--user=\[USERNAME\] | Username of a user who is authorized to execute |
| \-p | \--password=\[PASSWORD\] | Password for authentication of the previously specified user |
| \-i | \--tenantId=\[TENANT-ID\] | Tenant ID of the tenant to be used (default: 1) |
| \-c | \--config=\[CONFIG-FILE\] | Specifying the path to the configuration file |
| \-h | \--help | Help message for displaying further information |
| \-q | \--quiet | Quiet-Mode to deactivate output |
| \-V | \--version | Output of the i-doit Console version |
|     | \--ansi | Forces the output in ANSI format |
|     | \--no-ansi | Disables the output in ANSI format |
| \-n | \--no-interaction | Disables all interaction questions of the i-doit Console |
| \-v / -vv / -vvv | \--verbose | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

[?](#)

`sudo` `-u www-data php console.php search --user admin --password admin --tenantId 1 --searchString` `"Server001"`

  

### search-index  

Restores the search index by deleting and rewriting it.

**Options:**

| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
|     | \--update | Instead of just creating a new index, the current index documents are overwritten |
|     | \--category=CATEGORY | Whitelist of the categories |
|     | \--dry-run | Run Reindex without saving |
| \-u | \--user=\[USERNAME\] | Username of a user who is authorized to execute |
| \-p | \--password=\[PASSWORD\] | Password for authentication of the previously specified user |
| \-i | \--tenantId=\[TENANT-ID\] | Tenant ID of the tenant to be used (default: 1) |
| \-c | \--config=\[CONFIG-FILE\] | Specifying the path to the configuration file |
| \-h | \--help | Help message for displaying further information |
| \-q | \--quiet | Quiet-Mode to deactivate output |
| \-V | \--version | Output of the i-doit Console version |
|     | \--ansi | Forces the output in ANSI format |
|     | \--no-ansi | Disables the output in ANSI format |
| \-n | \--no-interaction | Disables all interaction questions of the i-doit Console |
| \-v / -vv / -vvv | \--verbose | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

[?](#)

`sudo` `-u www-data php console.php search-index --user admin --password admin --tenantId 1`

  

### sync-dynamic-groups  

Resynchronizes dynamic group members.

**Options:**

| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| \-g | \--groups=GROUPS | Comma-separated list of IDs of the dynamic groups |
| \-u | \--user=\[USERNAME\] | Username of a user who is authorized to execute |
| \-p | \--password=\[PASSWORD\] | Password for authentication of the previously specified user |
| \-i | \--tenantId=\[TENANT-ID\] | Tenant ID of the tenant to be used (default: 1) |
| \-h | \--help | Help message for displaying further information |
| \-q | \--quiet | Quiet-Mode to deactivate output |
| \-V | \--version | Output of the i-doit Console version |
|     | \--ansi | Forces the output in ANSI format |
|     | \--no-ansi | Disables the output in ANSI format |
| \-n | \--no-interaction | Disables all interaction questions of the i-doit Console |
| \-v / -vv / -vvv | \--verbose | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

[?](#)

`sudo` `-u www-data php console.php` `sync``-dynamic-``groups` `--user admin --password admin --tenantId --``groups` `173,188,219`

  

### system-autoincrement  

Determines the value of the system's auto-increment. This affects object IDs, category entries, and so on. When resetting the auto-increment, some content may no longer be accessible.

**Options:**

| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
|     | \--autoIncrement=AUTOINCREMENT | Number to which the auto-increment should be set |
| \-u | \--user=\[USERNAME\] | Username of a user who is authorized to execute |
| \-p | \--password=\[PASSWORD\] | Password for authentication of the previously specified user |
| \-i | \--tenantId=\[TENANT-ID\] | Tenant ID of the tenant to be used (default: 1) |
| \-h | \--help | Help message for displaying further information |
| \-q | \--quiet | Quiet-Mode to deactivate output |
| \-V | \--version | Output of the i-doit Console version |
|     | \--ansi | Forces the output in ANSI format |
|     | \--no-ansi | Disables the output in ANSI format |
| \-n | \--no-interaction | Disables all interaction questions of the i-doit Console |
| \-v / -vv / -vvv | \--verbose | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

[?](#)

`sudo` `-u www-data php console.php system-autoincrement --user admin --password admin --tenantId 1 --autoIncrement 20`

  

### system-checkforupdates

Checks if a new i-doit version is available.

**Options:**

| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| \-h | \--help | Help message for displaying further information |
| \-q | \--quiet | Quiet-Mode to deactivate output |
| \-V | \--version | Output of the i-doit Console version |
|     | \--ansi | Forces the output in ANSI format |
|     | \--no-ansi | Disables the output in ANSI format |
| \-n | \--no-interaction | Disables all interaction questions of the i-doit Console |
| \-v / -vv / -vvv | \--verbose | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

[?](#)

`sudo` `-u www-data php console.php system-checkforupdates`

### system-convert-non-innodb-tables

Converts all non INNODB tables to INNODB

**Options:**

| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
|     | \--convert | Starts the process of converting all non-UTF-8 tables |
|     | \--table=\[TABLE\] | Table to be checked and converted |
| \-u | \--user=\[USERNAME\] | Username of a user who is authorized to execute |
| \-p | \--password=\[PASSWORD\] | Password for authentication of the previously specified user |
| \-i | \--tenantId=\[TENANT-ID\] | Tenant ID of the tenant to be used (default: 1) |
| \-h | \--help | Help message for displaying further information |
| \-q | \--quiet | Quiet-Mode to deactivate output |
| \-V | \--version | Output of the i-doit Console version |
|     | \--ansi | Forces the output in ANSI format |
|     | \--no-ansi | Disables the output in ANSI format |
| \-n | \--no-interaction | Disables all interaction questions of the i-doit Console |
| \-v / -vv / -vvv | \--verbose | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

[?](#)

`sudo` `-u www-data php console.php system-convert-non-innodb-tables --convert --table TABLE_NAME`

###   

### system-convert-non-utf8-tables

Converts all non-UTF-8 data types to UTF-8.

**Options:**

| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
|     | \--convert | Starts the process of converting all non-UTF-8 tables |
| \-u | \--user=\[USERNAME\] | Username of a user who is authorized to execute |
| \-p | \--password=\[PASSWORD\] | Password for authentication of the previously specified user |
| \-i | \--tenantId=\[TENANT-ID\] | Tenant ID of the tenant to be used (default: 1) |
| \-h | \--help | Help message for displaying further information |
| \-q | \--quiet | Quiet-Mode to deactivate output |
| \-V | \--version | Output of the i-doit Console version |
|     | \--ansi | Forces the output in ANSI format |
|     | \--no-ansi | Disables the output in ANSI format |
| \-n | \--no-interaction | Disables all interaction questions of the i-doit Console |
| \-v / -vv / -vvv | \--verbose | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

[?](#)

`sudo` `-u www-data php console.php system-convert-non-utf8-tables --convert`

###   

### system-location-fix

Executes the location correction from the GUI in the console

**Options:**

| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| \-u | \--user=\[USERNAME\] | Username of a user who is authorized to execute |
| \-p | \--password=\[PASSWORD\] | Password for authentication of the previously specified user |
| \-i | \--tenantId=\[TENANT-ID\] | Tenant ID of the tenant to be used (default: 1) |
| \-c | \--config=\[CONFIG-FILE\] | Specifying the path to the configuration file |
| \-h | \--help | Help message for displaying further information |
| \-q | \--quiet | Quiet-Mode to deactivate output |
| \-V | \--version | Output of the i-doit Console version |
|     | \--ansi | Forces the output in ANSI format |
|     | \--no-ansi | Disables the output in ANSI format |
| \-n | \--no-interaction | Disables all interaction questions of the i-doit Console |
| \-v / -vv / -vvv | \--verbose | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

[?](#)

`sudo` `-u www-data php console.php system-location-fix --user admin --password admin --tenantId 1 --config` `/path/to/config/file`

### system-maintenancecontract  

Sends an e-mail notification for maintenance contacts.

**Options:**

| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| \-u | \--user=\[USERNAME\] | Username of a user who is authorized to execute |
| \-p | \--password=\[PASSWORD\] | Password for authentication of the previously specified user |
| \-i | \--tenantId=\[TENANT-ID\] | Tenant ID of the tenant to be used (default: 1) |
| \-c | \--config=\[CONFIG-FILE\] | Specifying the path to the configuration file |
| \-h | \--help | Help message for displaying further information |
| \-q | \--quiet | Quiet-Mode to deactivate output |
| \-V | \--version | Output of the i-doit Console version |
|     | \--ansi | Forces the output in ANSI format |
|     | \--no-ansi | Disables the output in ANSI format |
| \-n | \--no-interaction | Disables all interaction questions of the i-doit Console |
| \-v / -vv / -vvv | \--verbose | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

[?](#)

`sudo` `-u www-data php console.php system-maintenancecontract --user admin --password admin --tenantId 1`

### system-objectcleanup

Cleans all objects with a self-defined status.

**Options:**

| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
|     | \--objectStatus=OBJECTSTATUS | Determines which status is to be cleaned up: 1: "unfinished"; 3: "archived"; 4: "deleted |
| \-u | \--user=\[USERNAME\] | Username of a user who is authorized to execute |
| \-p | \--password=\[PASSWORD\] | Password for authentication of the previously specified user |
| \-i | \--tenantId=\[TENANT-ID\] | Tenant ID of the tenant to be used (default: 1) |
| \-c | \--config=\[CONFIG-FILE\] | Specifying the path to the configuration file |
| \-h | \--help | Help message for displaying further information |
| \-q | \--quiet | Quiet-Mode to deactivate output |
| \-V | \--version | Output of the i-doit Console version |
|     | \--ansi | Forces the output in ANSI format |
|     | \--no-ansi | Disables the output in ANSI format |
| \-n | \--no-interaction | Disables all interaction questions of the i-doit Console |
| \-v / -vv / -vvv | \--verbose | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

[?](#)

`sudo` `-u www-data php console.php system-objectcleanup --user admin --password admin --tenantId 1 --objectStatus 1`

  

### system-objectrelations  

Renews the names of all object relationships.

**Options:**

| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
|     | \--categoryConstant=CATEGORYCONSTANT | constant of the category for which the operation is to be performed (z.B. C\_\_CATG\_\_IP) |
| \-u | \--user=\[USERNAME\] | Username of a user who is authorized to execute |
| \-p | \--password=\[PASSWORD\] | Password for authentication of the previously specified user |
| \-i | \--tenantId=\[TENANT-ID\] | Tenant ID of the tenant to be used (default: 1) |
| \-c | \--config=\[CONFIG-FILE\] | Specifying the path to the configuration file |
| \-h | \--help | Help message for displaying further information |
| \-q | \--quiet | Quiet-Mode to deactivate output |
| \-V | \--version | Output of the i-doit Console version |
|     | \--ansi | Forces the output in ANSI format |
|     | \--no-ansi | Disables the output in ANSI format |
| \-n | \--no-interaction | Disables all interaction questions of the i-doit Console |
| \-v / -vv / -vvv | \--verbose | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

[?](#)

`sudo` `-u www-data php console.php system-objectrelations --user admin --password admin --tenantId 1 --categoryConstant C__CATG__IP`

  

### tenant-create  

Creates a new tenant

**Options:**

| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| \-u | \--root-user=\[ROOT-USER\] | Database password of the new tenant |
| \-p | \--root-password=\[ROOT-PASSWORD\] | Username of privileged DB User \[default: "root"\] |
| \-U | \--user=\[USER\] | Username of DB for new tenant \[default: "idoit"\] |
| \-P | \--password=\[PASSWORD\] | Password of DB for new tenant |
| \-d | \--database=\[DATABASE\] | DB name for new tenant \[default: "idoit\_data"\] |
| \-t | \--title=\[TITLE\] | Name of the new tenant \[default: "Your company name"\] |
| \-h | \--help | Help message for displaying further information |
| \-q | \--quiet | Quiet-Mode to deactivate output |
| \-V | \--version | Output of the i-doit Console version |
|     | \--ansi | Forces the output in ANSI format |
|     | \--no-ansi | Disables the output in ANSI format |
| \-n | \--no-interaction | Disables all interaction questions of the i-doit Console |
| \-v / -vv / -vvv | \--verbose | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

[?](#)

`sudo` `-u www-data php console.php tenant-create --title Musterfirma --user idoit --password idoitpassword --` `enable` `--tenantId 3`

  

### tenant-disable  

Deactivates an existing tenant.

**Options:**

| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| \-u | \--user=\[USERNAME\] | Username of a user who is authorized to execute |
| \-p | \--password=\[PASSWORD\] | Password for authentication of the previously specified user |
| \-i | \--tenantId=\[TENANT-ID\] | Tenant ID of the tenant to be used (default: 1) |
| \-h | \--help | Help message for displaying further information |
| \-q | \--quiet | Quiet-Mode to deactivate output |
| \-V | \--version | Output of the i-doit Console version |
|     | \--ansi | Forces the output in ANSI format |
|     | \--no-ansi | Disables the output in ANSI format |
| \-n | \--no-interaction | Disables all interaction questions of the i-doit Console |
| \-v / -vv / -vvv | \--verbose | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

[?](#)

`sudo` `-u www-data php console.php tenant-disable --tenantId 3`

  

### tenant-enable  

Activates an existing tenant.

**Options:**

| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| \-u | \--user=\[USERNAME\] | Username of a user who is authorized to execute |
| \-p | \--password=\[PASSWORD\] | Password for authentication of the previously specified user |
| \-i | \--tenantId=\[TENANT-ID\] | Tenant ID of the tenant to be used (default: 1) |
| \-h | \--help | Help message for displaying further information |
| \-q | \--quiet | Quiet-Mode to deactivate output |
| \-V | \--version | Output of the i-doit Console version |
|     | \--ansi | Forces the output in ANSI format |
|     | \--no-ansi | Disables the output in ANSI format |
| \-n | \--no-interaction | Disables all interaction questions of the i-doit Console |
| \-v / -vv / -vvv | \--verbose | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

[?](#)

`sudo` `-u www-data php console.php tenant-``enable` `--tenantId 3`

  

### tenant-list  

Lists all existing tenants.

**Options:**

| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| \-h | \--help | Hilfenachricht zur Einblendung weiterer Informationen |
| \-q | \--quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| \-V | \--version | Ausgabe der Version der i-doit Console |
|     | \--ansi | Erzwingt die Ausgabe im ANSI-Format |
|     | \--no-ansi | Deaktiviert die Ausgabe im ANSI-Format |
| \-n | \--no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| \-v / -vv / -vvv | \--verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Example of use**

[?](#)

`sudo` `-u www-data php console.php tenant-list`

###   

### tenant-remove

Removes an existing client

**Options:**

| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| \-u | \--user=\[USERNAME\] | Username of a user who is authorized to execute |
| \-p | \--password=\[PASSWORD\] | Password for authentication of the previously specified user |
| \-i | \--tenantId=\[TENANT-ID\] | Tenant ID of the tenant to be used (default: 1) |
| \-h | \--help | Help message for displaying further information |
| \-q | \--quiet | Quiet-Mode to deactivate output |
| \-V | \--version | Output of the i-doit Console version |
|     | \--ansi | Forces the output in ANSI format |
|     | \--no-ansi | Disables the output in ANSI format |
| \-n | \--no-interaction | Disables all interaction questions of the i-doit Console |
| \-v / -vv / -vvv | \--verbose | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

[?](#)

`sudo` `-u www-data php console.php tenant-remove --user admin --password admin --tenant 1`

###   

### uninstall

Uninstalls the used i-doit installation

**Options:**

| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| \-u | \--user=\[USERNAME\] | Username of a user who is authorized to execute |
| \-p | \--password=\[PASSWORD\] | Password for authentication of the previously specified user |
| \-h | \--help | Help message for displaying further information |
| \-q | \--quiet | Quiet-Mode to deactivate output |
| \-V | \--version | Output of the i-doit Console version |
|     | \--ansi | Forces the output in ANSI format |
|     | \--no-ansi | Disables the output in ANSI format |
| \-n | \--no-interaction | Disables all interaction questions of the i-doit Console |
| \-v / -vv / -vvv | \--verbose | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

[?](#)

`sudo` `-u www-data php console.php uninstall --user admin --password admin`

###   

### update

Updates the i-doit installation

**Options:**

| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| \-u | \--user=\[USERNAME\] | Username of a user who is authorized to execute |
| \-p | \--password=\[PASSWORD\] | Password for authentication of the previously specified user |
| \-z | \--zip=\[ZIP\] | Specifying the path to the update packet |
|     | \--v=V | Version to update to |
| \-h | \--help | Help message for displaying further information |
| \-q | \--quiet | Quiet-Mode to deactivate output |
| \-V | \--version | Output of the i-doit Console version |
|     | \--ansi | Forces the output in ANSI format |
|     | \--no-ansi | Disables the output in ANSI format |
| \-n | \--no-interaction | Disables all interaction questions of the i-doit Console |
| \-v / -vv / -vvv | \--verbose | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

[?](#)

`sudo` `-u www-data php console.php update --user admin --password admin --zip` `/path/to/zip/file``.zip --``v` `1.14`

###   

### workflows-process

Sends emails about workflows and creates tasks from checklists.

**Options:**

| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| Parameter (short version) | Parameter (long version) | Description |
| --- | --- | --- |
| \-t | \--types=TYPES | Workflow types (multiple values allowed) |
| \-u | \--user=\[USERNAME\] | Username of a user who is authorized to execute |
| \-p | \--password=\[PASSWORD\] | Password for authentication of the previously specified user |
| \-i | \--tenantId=\[TENANT-ID\] | Tenant ID of the tenant to be used (default: 1) |
| \-c | \--config=\[CONFIG-FILE\] | Specifying the path to the configuration file |
| \-h | \--help | Help message for displaying further information |
| \-q | \--quiet | Quiet-Mode to deactivate output |
| \-V | \--version | Output of the i-doit Console version |
|     | \--ansi | Forces the output in ANSI format |
|     | \--no-ansi | Disables the output in ANSI format |
| \-n | \--no-interaction | Disables all interaction questions of the i-doit Console |
| \-v / -vv / -vvv | \--verbose | Increases the scope of the return. (1 = normal output, 2 = detailed output, 3 = debug level) |

**Example of use**

[?](#)

`sudo` `-u www-data php console.php workflows-process --user admin --password admin --tenantId 1 --types task --types checklist`