  

  

**Contents**

*   1[First Steps](#Console-FirstSteps)
*   2[Authentication Process](#Console-AuthenticationProcess)
*   3[Help](#Console-Help)
*   4[Commands](#Console-Commands)

  

  

  

i-doit has a Commandline Interface (CLI) with which you can carry out various tasks. For example, the CLI is required for [Cronjobs](/display/en/Cronjobs+Setup) and can be applied for the automation of work steps.

First Steps
-----------

The CLI can be found in the i-doit installation directory, for example at `**/var/www/html/**`. Within this directory the CLI has to be activated with the same permissions as the Apache webserver. Under [Debian GNU/Linux](/pages/viewpage.action?pageId=36864037) this is the user called `**www-data**`. You can achieve the permissions with `**sudo**`:

[?](#)

`cd` `/var/www/html/`

`sudo` `-u www-data php console.php`

Under Windows you also have to change to the installation directory. As the permissions of the webserver are not an issue, the start of `**php.exe**`, which has to stand in the path of the user, is sufficient.

[?](#)

`cd` `C:\xampp\htdocs`

`php.exe console.php`

When you execute the CLI without further arguments, the general help is displayed:

[?](#)

`i-doit console utility 1.17.1`

`Usage:`

`command` `[options] [arguments]`

`Options:`

`-h, --help            Display this help message`

`-q, --quiet           Do not output any message`

`-V, --version         Display this application version`

`--ansi            Force ANSI output`

`--no-ansi         Disable ANSI output`

`-n, --no-interaction  Do not ask any interactive question`

`-``v``|vv|vvv, --verbose  Increase the verbosity of messages: 1` `for` `normal output, 2` `for` `more` `verbose output and 3` `for` `debug`

`Available commands:`

`CompileDocuments`

`addon-activate                      Activate add-on`

`addon-deactivate                    Deactivate add-on`

`addon-``install`                       `Install add-on`

`addon-list                          Shows list of installed addons`

`admin-center-cryptohash-reset       With this` `command` `you can update the Crypto-``hash` `and update encrypted passwords`

`admin-center-password-reset         With this` `command` `you can reset the Admin-Center password`

`auth-cleanup                        Cleanup all auth paths`

`clear```-credentials                   It removes both attributes `username` and `password` from the`` `users` `"login"` `category`

`contracts-outdated                  Updates status of outdated contracts`

`documents`

`help                                Displays help` `for` `a` `command`

`import``-csv                          Imports CSV formatted files (Using a predefined CSV Import filter, defined` `in` `the GUI)`

`import``-csvprofiles                  List all available csv profiles`

`import``-hinventory                   Imports files formatted` `in` `the hInventory XML syntax`

`import``-jdisc                        Imports data from a JDisc server (SQL server access is defined` `in` `the GUI)`

`import``-jdiscdiscovery               Triggers a JDisc discovery (API Access to the JDisc server is defined` `in` `the GUI)`

`import``-ocs                          Imports data from an OCS inventory NG server (SQL server access is defined` `in` `the GUI)`

`import``-syslog                       Imports data from a Syslog server textfile to the i-doit Logbook`

`import``-xml                          Imports files formatted` `in` `the i-doit XML syntax`

`install`                             `Install the i-doit application`

`ldap-``sync`                           `Synchronizes LDAP user accounts with i-doit user objects`

`ldap-syncdn                         Synchronizes LDAP user DN attributes with i-doit user objects (Only needs to be run when migrating between different LDAP sources)`

`license-add                         Add license into i-doit`

`license-assign                      Assign hosting license to i-doit tenant`

`license-``import`                      `Import licenses from the i-doit server`

`license-key                         Set license key` `for` `i-doit`

`license-list                        List of the licenses:` `id``,` `type` `of license, assigned tenant, organisation, valid from, expire` `date``, amount of licensed objects, amount of used objects, licensed add-ons`

`license-remove                      Remove license from i-doit`

`list                                Lists commands`

`logbook-archive                     Archives Logbook entries (Settings are defined` `in` `the GUI)`

`migrate-uploaded-files              Migrates uploaded files` `in` `i-doit <v1.13 to` `v``.1.14>`

`notifications-send                  Sends out e-mails` `for` `notifications defined` `in` `the notification add-on`

`report-``export`                       `Executes an i-doit report and saves it to a` `file` `as CSV, TXT, PDF or XML`

`search                              Triggers a search and gives the results as formatted text table`

`search-index                        Deletes current search index and create it`

`strip-description-html              With this` `command` `you can strip html tags` `in` `description field of all categories and objects`

`sync``-dynamic-``groups`                 `Syncronize dynamic group members`

`system-autoincrement                Changes the initial autoincrement value` `for` `all i-doit database tables (Affects everything, Object-IDs, category entries, etc. Use with caution!)`

`system-checkforupdates              Checks` `for` `i-doit core updates`

`system-convert-non-innodb-tables    Converts all tables` `which` `are not` `in` `INNODB to INNODB (Affects database encoding. Use with caution!)`

`system-convert-non-utf8-tables      Changes all non-UTF8-tables to UTF8 (Affects database encoding. Use with caution!)`

`system-location-fix                 Performs the location fix from the systemtools GUI`

`system-objectcleanup                Purges optionally objects that are` `in` `the state unfinished, archived or deleted`

`system-objectrelations              Regenerates all object relation names`

`system-refresh-table-configuration  Refreshes all available list configurations (object types and categories)`

`tenant-create                       Create tenant` `in` `i-doit`

`tenant-disable                      Disables the tenant with specific` `id`

`tenant-``enable`                       `Enables the tenant with specific` `id`

`tenant-list                         Shows list of available tenants`

`tenant-remove                       Remove the i-doit Tenant`

`uninstall                           Uninstall the i-doit application`

`update                              Update the i-doit application`

Authentication Process
----------------------

In order to access i-doit via the CLI an authentication is required for most of the commands. For this purpose, you hand over a user name, the appropriate password and the desired [tenant ID](/display/en/Multi-Tenants). With a default installation, in most cases the latter is `**"1"**`.

[?](#)

`cd` `/var/www/html/`

`sudo` `-u www-data php console.php [COMMAND] --user admin --password admin --tenantId 1 [FURTHER OPTIONs]`

The user "controller"

We recommend creating a dedicated user in i-doit for the application of the CLI. If this user is to be configured as [local user](/display/en/Creating+a+Local+User), create it as object of the type `**Persons**` with the desired credentials in the `**Persons → Login**` category. This user should receive admin rights. The rights assignment can be carried out through allocation to the predefined `**Person group**` **`Admin`**.

Help
----

Often commands are accompanied by further arguments. Therefore each command provides a help via `**--help**`:

[?](#)

`cd` `/var/www/html/`

`sudo` `-u www-data php console.php search --help`

Furthermore, some commands provide examples via `**--usage**`.

Commands
--------

| Command | pro Version | open Version | [Add-on](/display/de/i-doit+pro+Add-ons) | Description |
| --- | --- | --- | --- | --- |
| Command | pro Version | open Version | [Add-on](/display/de/i-doit+pro+Add-ons) | Description |
| --- | --- | --- | --- | --- |
| `**addon-activate**` | yes | yes | \-  | Activate add-on |
| `**addon-deactivate**` | yes | yes | \-  | Deactivate add-on |
| `**addon-install**` | yes | yes | \-  | Install add-on |
| `**addon-list**` | yes | yes | \-  | Shows list of installed add-ons |
| `**admin-center-cryptohash-reset**` | yes | yes | \-  | The crypto-hash of i-doit is changed, which renews the entire encryption (ATTENTION! A backup should be created prior to execution) |
| `**admin-center-password-reset**` | yes | yes | \-  | Reset the password for the Admin Center |
| `**auth-cleanup**` | yes | yes | –   | Clean up of [authorization system](/display/en/Rights+Management) |
| `**check_mk-export**` | yes | yes | Check\_MK 1 / 2 | Export of configuration files for [Checkmk](/display/en/Checkmk) |
| `**check_mk-livestatus**` | yes | yes | Check\_MK 1 / 2 | Write actual status from [Checkmk](/display/en/Checkmk) into log book |
| `**clear-credentials**` | yes | yes | \-  | Removes user credentials |
| `**help**` | yes | yes | \-  | Displays the help for a command |
| `**import-csv**` | yes | no  | –   | Import data from a [CSV file](/display/en/CSV+Data+Import) |
| `**import-csvprofiles**` | yes | no  | –   | List all [CSV import profiles](/display/en/CSV+Data+Import) |
| `**import-hinventory**` | yes | yes | –   | Import data from [h-inventory](/pages/viewpage.action?pageId=61014265) |
| `**import-jdisc**` | yes | yes | –   | Import data from [JDisc Discovery](/display/en/JDisc+Discovery) |
| `**import-jdiscdiscovery**` | yes | yes | –   | Start a scan in [JDisc Discovery](/display/en/JDisc+Discovery) |
| `**import-ocs**` | yes | yes | –   | Import data from [OCS Inventory NG](/pages/viewpage.action?pageId=42303610) |
| `**import-syslog**` | yes | yes | –   | Import data from a Syslog into the i-doit [logbook](/display/en/Logbook) |
| `**import-xml**` | yes | yes | –   | Import data from XML |
| `**ldap-sync**` | yes | yes | –   | Import persons and person groups from an [LDAP directory or Active Directory (AD)](/pages/viewpage.action?pageId=37355601) |
| `**ldap-syncdn**` | yes | yes | –   | Synchronise the distinguished name (DN) of the users (see `**LDAP**` category) from an [LDAP/AD](/pages/viewpage.action?pageId=37355601) |
| `**license-add**` | yes | no  | \-  | Adds a license for i-doit (in progress) |
| `**license-assign**` | yes | no  | \-  | Assigns a hosting license to a client (in progress) |
| `**license-import**` | yes | no  | \-  | Imports licenses from the i-doit Server (in progress) |
| `**license-key**` | yes | no  | \-  | Sets a license key for i-doit (in process) |
| `**license-list**` | yes | no  | \-  | Lists all licenses with all information (ID; product; type; start date; end date; licensed objects; licensed clients; environment) |
| `**license-remove**` | yes | no  | \-  | Removes licenses from i-doit |
| `**logbook-archive**` | yes | yes | –   | Archive [logbook entries](/display/en/Logbook) |
| `**maintenance**` | yes | yes | Maintenance | Sends notifications of scheduled maintenance from the Maintenance Add-on |
| `**nagios-export**` | yes | yes | Nagios | Export [Nagios](/display/en/Nagios) configuration |
| `**nagios-ndoutils**` | yes | yes | Nagios | Write actual status from [Nagios](/display/en/Nagios) into logbook |
| `**notifications-send**` | yes | yes | –   | Send [notifications](/display/en/Notifications) per e-mail |
| `**report-export**` | yes | no  | –   | Export a [report](/display/en/Report+Manager) as file |
| `**search**` | yes | yes | –   | [Search](/display/en/Search) in i-doit |
| `**search-index**` | yes | yes | –   | Create/ renew [search index](/display/en/Search) |
| `**system-autoincrement**` | yes | yes | –   | Set `auto_increment` of MariaDB-/MySQL [tables](/display/en/Database+Model) to a positive integer value |
| `**system-checkforupdates**` | yes | yes | –   | Search for i-doit [updates](/display/en/Update) |
| `**system-convert-non-innodb-tables**` | yes | yes | \-  | Converts all tables that are not in INNODB to INNODB (Affects the database coding. Use with caution!) |
| `**system-convert-non-utf8-tables**` | yes | yes | \-  | Converts all non-UTF8 tables to UTF8 tables (Affects database encoding. Use with caution!) |
| `**system-location-fix**` | yes | yes | \-  | Executes the location correction from the GUI on the console |
| `**system-maintenancecontract**` | yes | yes | –   | Send e-mail for maintenance contracts |
| `**system-objectcleanup**` | yes | yes | –   | [Clean up objects](/display/en/Life+and+Documentation+Cycle) |
| `**system-objectrelations**` | yes | yes | –   | Recreate [object relations](/display/en/Object+Relations) |
| `**system-refresh-table-configuration**` | yes | yes | \-  | Refresh all available list configurations (object types and categories) |
| `**tenant-create**` | yes | no  | –   | Add a new [tenant](/display/en/Multi-Tenants) |
| `**tenant-disable**` | yes | no  | –   | Deactivate an existing [tenant](/display/en/Multi-Tenants) |
| `**tenant-enable**` | yes | no  | –   | Activate an existing [tenant](/display/en/Multi-Tenants) |
| `**tenant-list**` | yes | no  | –   | List all available [tenants](/display/en/Multi-Tenants) |
| `**tenant-remove**` | yes | no  | \-  | Remove an existing [tenant](/display/en/Multi-Tenants) |
| `**uninstall**` | yes | yes | \-  | Uninstalls i-doit |
| `**update**` | yes | yes | \-  | Installs i-doit updates |
| `**workflows-process**` | yes | yes | –   | Send workflow notifications via e-mail |