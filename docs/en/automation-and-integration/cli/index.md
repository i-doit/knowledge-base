---
title: i-doit console utility
description: i-doit console utility commands
icon: material/console
status:
lang: en
---

# i-doit console utility

This document describes the usage of the i-doit console utility. The i-doit console utility allows for the automation of administrative tasks, data import, and the integration of i-doit into existing system landscapes.

-----

## Basics of the i-doit console utility

The i-doit console utility commands are executed via the `console.php` file located in the main directory of your i-doit installation.

### Running the Console

To run a command, you need to switch to the i-doit installation directory and execute the file with PHP. It is also possible to use the full path to the file, to run it from anywhere. It is important that the command is run with the permissions of the web server user (e.g., `www-data`, `wwwrun` or `apache`) to avoid permission issues.

```bash
# Change to the i-doit directory (adjust path)
cd /var/www/html

# Execute command as webserver user
sudo -u www-data php console.php <COMMAND> [OPTIONS]
```

### Authentication

Almost every command requires authentication with i-doit. The following parameters are essential for this:

  * `--user <USERNAME>`: The username of an i-doit user with the necessary permissions.
  * `--password <PASSWORD>`: The user's password.
  * `--tenantId <TENANT-ID>`: The ID of the tenant in which the command should be executed. The default ID is `1`.

**Security Note:** Providing the password directly as a parameter can be a security risk, as it is visible in the process list and the shell history.

### General (Global) Options

These options can be combined with most commands:

| Option             | Alias           | Description                                                   |
| ------------------ | --------------- | ------------------------------------------------------------- |
| `--help`           | `-h`            | Displays the help for a specific command.                     |
| `--quiet`          | `-q`            | Suppresses all output except for error messages.              |
| `--verbose`        | `-v, -vv, -vvv` | Increases the verbosity of the output (useful for debugging). |
| `--version`        | `-V`            | Displays the version of the i-doit console.                   |
| `--no-interaction` | `-n`            | Disables interactive prompts (e.g., "Are you sure?").         |

-----

## Important Command Categories and Examples

The i-doit console utility commands can be divided into logical groups.

### Import and Synchronization

These are the most frequently used commands for automating data maintenance.

#### import-csv

Imports objects and their attributes from a CSV file. Requires an import profile pre-configured in the i-doit web interface.

  * **Syntax:**
    ```bash
    php console.php import-csv [AUTHENTICATION] --importFile <PATH_TO_CSV> --importProfileId <PROFILE_ID>
    ```
  * **Example:**
    ```bash
    sudo -u www-data php console.php import-csv --user=admin --password='secret' --tenantId=1 --importFile=/var/www/imports/idoit-Demo-CSV-Import.csv --importProfileId=1 --csvSeparator=";" --multiValueMode=column
    ```

#### ldap-sync

Synchronizes users and groups from an LDAP directory (e.g., Microsoft Active Directory). The attribute mapping is configured via an INI file.

  * **Syntax:**
    ```bash
    php console.php ldap-sync [AUTHENTICATION] --config <PATH_TO_INI>
    ```
  * **Example:**
    ```bash
    sudo -u www-data php console.php ldap-sync --user=admin --password='secret' --tenantId=1 --verbose
    ```
    *Tip:* You can find an example configuration file here [Configuration file](configuration-files.md#example-for-the-command-ldap-sync)

#### import-jdisc

Imports data from the JDisc network discovery solution.

  * **Syntax:**
    ```bash
    php console.php import-jdisc [AUTHENTICATION] --server <JDISC_SERVER_ID>
    ```
  * **Example:**
    ```bash
    sudo -u www-data php console.php import-jdisc --user=admin --password='secret' --server=1 --tenantId=1
    ```

-----

### System Administration and Maintenance

These commands assist in the maintenance and care of the i-doit instance.

#### search-index

Rebuilds the search index. Necessary if the search in the web interface returns no or outdated results.

  * **Syntax:**
    ```bash
    php console.php search-index [AUTHENTICATION]
    ```
  * **Example:**
    ```bash
    sudo -u www-data php console.php search-index --user=admin --password='secret' --tenantId=1
    ```

#### system-categorycleanup

Cleans up category data for objects that have been archived or deleted.

  * **Syntax:**
    ```bash
    php console.php system-categorycleanup [AUTHENTICATION] --categoryStatus <STATUSID>
    ```
  * **Example (cleans up archived objects):**
    ```bash
    sudo -u www-data php console.php system-categorycleanup --user=admin --password='secret' --categoryStatus=1 --tenantId=1 --no-interaction
    ```

-----

### Add-on and License Management

Manages installed add-ons and licenses via the command line.

#### addon-list

Lists all available add-ons and their status (enabled/disabled).

  * **Example:**
    ```bash
    sudo -u www-data php console.php addon-list --user=admin --password='secret'
    ```

#### addon-activate / addon-deactivate

Activates or deactivates a specific add-on. The identifier is displayed by the [addon-list](#addon-list) command.

  * **Syntax:**
    ```bash
    php console.php addon-activate [AUTHENTICATION] --addon <ADDON_NAME>
    php console.php addon-deactivate [AUTHENTICATION] --addon <ADDON_NAME>
    ```
  * **Example:**
    ```bash
    sudo -u www-data php console.php addon-activate --user admin --password 'secret' --addon=document
    ```

#### license-key

Adds a new license token to the i-doit installation.

  * **Syntax:**
    ```bash
    php console.php license-key [AUTHENTICATION] --key <LICENSETOKEN> --no-interaction
    ```
  * **Example:**
    ```bash
    sudo -u www-data php console.php license-key --user=admin --password='secret' --key=8z9hr12798g1ftg2p0o13ft3 --no-interaction
    ```

-----

## Automation

### Dedicated i-doit console utility User

Set up a dedicated user in the i-doit web interface for automation tasks. Grant only the absolutely necessary permissions (e.g., import permissions) to this user instead of using the global `admin` account.

### Usage in Cronjobs

The i-doit console utility commands are excellently suited for automation via cronjobs.

  * **Example: Nightly CSV import and search index rebuild**

    Open the web server user's crontab with `sudo -u www-data crontab -e` and add the following lines:

    ```crontab
    # Run the CSV import every day at 2:00 AM
    0 2 * * * /usr/bin/php /var/www/html/console.php console.php import-csv --user=cli-user --password='secret' --tenantId=1 --importFile=/var/www/imports/idoit-Demo-CSV-Import.csv --importProfileId=1 --csvSeparator=";" --multiValueMode=column --quiet

    # Rebuild the search index every day at 2:30 AM
    30 2 * * * /usr/bin/php /var/www/html/console.php search-index --user=cli-user --password='secret' --tenantId=1 --quiet
    ```

!!! note "[Using the Task Scheduler on Microsoft Windows](../task-scheduling-and-cronjobs.md#windows-task-scheduler)"

### Finding a Command and its Options

To list all available commands, run `console.php` without any arguments:

```bash
sudo -u www-data php console.php
```

To see the specific options and parameters for a single command, use the `--help` or `-h` option:

```bash
sudo -u www-data php console.php import-csv --help
```

## Available i-doit console utility commands without add-ons

```text
i-doit console utility 35

Usage:
command [options] [arguments]

Options:
-h, --help            Display help for the given command. When no command is given display help for the list command
-q, --quiet           Do not output any message
-V, --version         Display this application version
    --ansi|--no-ansi  Force (or disable --no-ansi) ANSI output
-n, --no-interaction  Do not ask any interactive question
-v|vv|vvv, --verbose  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

Available commands:
    addon-activate                      Activate add-on
    addon-deactivate                    Deactivate add-on
    addon-install                       Install add-on
    addon-license-check                 This command checks if a specific add-on is licensed.
    addon-list                          Shows list of installed addons
    addon-uninstall                     Deactivate add-on
    admin-center-password-reset         With this command you can reset the Admin-Center password
    auth-cleanup                        Cleanup all auth paths
    check_mk-export                     Exports i-doit objects and Host Tags to Check_MK WATO configuration files
    check_mk-livestatus                 Imports monitoring status changes from Livestatus to the i-doit Logbook
    clear-credentials                   It removes both attributes username and password from the users "login" category
    completion                          Dump the shell completion script
    contracts-outdated                  Updates status of outdated contracts
    extend-contracts                    Automatically extend the runtime of not-cancelled contracts
    help                                Display help for a command
    import-csv                          Imports CSV formatted files (Using a predefined CSV Import filter, defined in the GUI)
    import-csvprofiles                  List all available csv profiles
    import-hinventory                   Imports files formatted in the hInventory XML syntax
    import-jdisc                        Imports data from a JDisc server (SQL server access is defined in the GUI)
    import-jdiscdiscovery               Triggers a JDisc discovery (API Access to the JDisc server is defined in the GUI)
    import-ocs                          Imports data from an OCS inventory NG server (SQL server access is defined in the GUI)
    import-syslog                       Imports data from a Syslog server textfile to the i-doit Logbook
    import-xml                          Imports files formatted in the i-doit XML syntax
    install                             Install the i-doit application
    jdisc-create-server                 Creates a JDisc server, based on given input
    ldap-sync                           Synchronizes LDAP user accounts with i-doit user objects
    ldap-syncdn                         Synchronizes LDAP user DN attributes with i-doit user objects (Only needs to be run when migrating between different LDAP sources)
    license-add                         Add license into i-doit
    license-assign                      Assign hosting license to i-doit tenant
    license-check                       Checks if i-doit tenant is licensed
    license-import                      Import licenses from the i-doit server
    license-key                         Set license key for i-doit
    license-list                        List of the licenses:  ID, Product, Type (type of license), From (start of license), Expire (expiration date of license), Licensed (max amount of licensed objects), Tenants (max amount of tenants), Environment
    license-remove                      Remove license from i-doit
    list                                List commands
    logbook-archive                     Archives Logbook entries (Settings are defined in the GUI)
    migrate-uploaded-files              Migrates uploaded files in i-doit <v1.13 to v.1.14>
    notifications-list                  Lists all notification types and notifications for later usage
    notifications-send                  Sends out e-mails for notifications defined in the notification add-on
    report-export                       Executes an i-doit report and saves it to a file as CSV, TXT, PDF or XML
    report-refresher                    Refreshes one or all reports.
    search                              Triggers a search and gives the results as formatted text table
    search-index                        Deletes current search index and create it
    strip-description-html              With this command you can strip html tags in description field of all categories and objects
    sync-dynamic-groups                 Synchronize dynamic group members
    system-autoincrement                Changes the initial autoincrement value for all i-doit database tables (Affects everything, Object-IDs, category entries, etc. Use with caution!)
    system-categorycleanup              Purges optionally category entries that are in the state unfinished, archived or deleted
    system-checkforupdates              Checks for i-doit core updates
    system-convert-non-innodb-tables    Converts all tables which are not in INNODB to INNODB (Affects database encoding. Use with caution!)
    system-convert-non-utf8-tables      Changes all non-UTF8-tables to UTF8 (Affects database encoding. Use with caution!)
    system-location-fix                 Performs the location fix from the systemtools GUI
    system-objectcleanup                Purges optionally objects that are in the state unfinished, archived or deleted
    system-objectrelations              Regenerates all object relation names
    system-refresh-table-configuration  Refreshes all available list configurations (object types and categories)
    system-set-settings                 Set system settings
    tenant-create                       Create tenant in i-doit
    tenant-disable                      Disables the tenant with specific id
    tenant-enable                       Enables the tenant with specific id
    tenant-list                         Shows list of available tenants
    tenant-remove                       Remove the i-doit Tenant
    tenant-set-settings                 This command enables you to set tenant related settings by providing a settings list based on json
    uninstall                           Uninstall the i-doit application
    update                              Update the i-doit application
idoit
    idoit:feature-manager               [idoit:fm] With this command it will be possible to activate a set of features in i-doit.
    idoit:set-env-var                   With this command it will be possible to set environmental variables for i-doit.
    idoit:set-update-capability         Dis- and enable the i-doit update capability
system
    system:tenant-export                Export your tenant data including uploaded files in a ZIP package.
    system:tenant-import                Import your tenant data including uploaded files from a ZIP package generated from the system:tenant-export command.
```
