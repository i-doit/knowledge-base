---
title: i-doit console utility
description: Commands of the i-doit console utility
icon: material/console
status:
lang: en
---

# i-doit console utility

This document describes the usage of the i-doit console utility. The i-doit console utility enables the automation of administrative tasks, the import of data, and the integration of i-doit into existing system landscapes.

-----

## Basics of the i-doit Console Utility

The commands of the i-doit console utility are executed via the file `console.php`, which is located in the main directory of your i-doit installation.

### Accessing the Console

To execute a command, you must switch to the i-doit installation directory and execute the file with PHP. It is also possible to specify the full path to the file to execute it from any location. It is important that the command is executed with the permissions of the web server user (e.g., `www-data`, `wwwrun`, or `apache`) to avoid permission problems.

```bash
# Switch to the i-doit directory (adjust path)
cd /var/www/html

# Execute command as web server user
sudo -u www-data php console.php <COMMAND> [OPTIONS]
```

### Authentication

Almost every command requires authentication against i-doit. The following parameters are essential:

  * `--user <USERNAME>`: The username of an i-doit user with the necessary permissions.
  * `--password <PASSWORD>`: The password of the user.
  * `--tenantId <TENANT-ID>`: The ID of the tenant in which the command should be executed. The default ID is `1`.

**Security note:** Specifying the password directly as a parameter can pose a security risk, as it is visible in the process list and shell history.

### General (Global) Options

These options can be combined with most commands:

| Option             | Alias           | Description                                                        |
| ------------------ | --------------- | ------------------------------------------------------------------ |
| `--help`           | `-h`            | Shows help for a specific command.                                 |
| `--quiet`          | `-q`            | Suppresses all output except error messages.                       |
| `--verbose`        | `-v, -vv, -vvv` | Increases the verbosity of the output (useful for debugging).      |
| `--version`        | `-V`            | Shows the version of the i-doit console.                           |
| `--no-interaction` | `-n`            | Disables interactive prompts (e.g., "Are you sure?").              |

-----

## Important Command Categories and Examples

The commands of the i-doit console utility can be divided into logical groups.

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
    *Tip:* An example configuration file can be found here: [Configuration file](configuration-files.md)

#### import-jdisc

Imports data from the network discovery solution JDisc.

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

These commands assist with maintaining and managing the i-doit instance.

#### search-index

Rebuilds the search index. Necessary when the search in the web interface returns no or outdated results.

  * **Syntax:**
    ```bash
    php console.php search-index [AUTHENTICATION]
    ```
  * **Example:**
    ```bash
    sudo -u www-data php console.php search-index --user=admin --password='secret' --tenantId=1
    ```

#### system-categorycleanup

Cleans up category data from objects that have been archived or deleted.

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

Lists all available add-ons and their status (activated/deactivated).

  * **Example:**
    ```bash
    sudo -u www-data php console.php addon-list --user=admin --password='secret'
    ```

#### addon-activate / addon-deactivate

Activates or deactivates a specific add-on. The identifier is shown by the [addon-list](#addon-list) command.

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
    php console.php license-key [AUTHENTICATION] --key <LICENSE_TOKEN> --no-interaction
    ```
  * **Example:**
    ```bash
    sudo -u www-data php console.php license-key --user=admin --password='secret' --key=8z9hr12798g1ftg2p0o13ft3 --no-interaction
    ```

-----

## Automation

### Dedicated User for the i-doit Console Utility

Set up a dedicated user in the i-doit web interface for automation tasks. Grant only the strictly necessary permissions (e.g., import rights) to this user instead of using the global `admin` account.

### Usage in Crontab

The commands of the i-doit console utility are well suited for automation via crontab. You can find so-called "crontab generator" pages on the internet for assistance.

  * **Example: Nightly CSV import and search index rebuild**

    Open the crontab of the web server user with `sudo -u www-data crontab -e` and add the following lines:

    ```crontab
    # Run the CSV import every day at 02:00
    0 2 * * * /usr/bin/php /var/www/html/console.php console.php import-csv --user=cli-user --password='secret' --tenantId=1 --importFile=/var/www/imports/idoit-Demo-CSV-Import.csv --importProfileId=1 --csvSeparator=";" --multiValueMode=column --quiet

    # Rebuild the search index every day at 02:30
    30 2 * * * /usr/bin/php /var/www/html/console.php search-index --user=cli-user --password='secret' --tenantId=1 --quiet
    ```

!!! note "[Using the Task Scheduler on Microsoft Windows](https://www.google.com/search?q=../task-scheduling-and-cronjobs.md%23windows-task-scheduler)"

### Finding a Command and its Options

To list all available commands, execute `console.php` without arguments:

```bash
sudo -u www-data php console.php
```

To see the specific options and parameters for an individual command, use the `--help` or `-h` option:

```bash
sudo -u www-data php console.php import-csv --help
```

## Available Commands of the i-doit Console Utility (without Add-ons)

```text
i-doit console utility 35

Usage:
  command [options] [arguments]

Options:
  -h, --help            Shows help for the specified command. If no command is given, shows help for the list command
  -q, --quiet           Do not output any messages
  -V, --version         Display this application version
      --ansi|--no-ansi  Force (or disable with --no-ansi) ANSI output
  -n, --no-interaction  Do not ask any interactive questions
  -v|vv|vvv, --verbose  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output, and 3 for debug output

Available commands:
    addon-activate                      Activate an add-on
    addon-deactivate                    Deactivate an add-on
    addon-install                       Install an add-on
    addon-license-check                 This command checks whether a specific add-on is licensed.
    addon-list                          Shows a list of installed add-ons
    addon-uninstall                     Uninstall an add-on
    admin-center-password-reset         With this command you can reset the Admin Center password
    auth-cleanup                        Clean up all auth paths
    check_mk-export                     Exports i-doit objects and host tags to Check_MK WATO configuration files
    check_mk-livestatus                 Imports status changes from Livestatus into the i-doit logbook
    clear-credentials                   Removes the username and password attributes from the "Login" category of the user
    completion                          Outputs the shell completion script
    contracts-outdated                  Updates the status of expired contracts
    extend-contracts                    Automatically extends the runtime of non-cancelled contracts
    help                                Display help for a command
    import-csv                          Imports CSV-formatted files (using a predefined CSV import filter defined in the GUI)
    import-csvprofiles                  Lists all available CSV profiles
    import-hinventory                   Imports files formatted in the hInventory XML syntax
    import-jdisc                        Imports data from a JDisc server (SQL server access is defined in the GUI)
    import-jdiscdiscovery               Triggers a JDisc Discovery (API access to the JDisc server is defined in the GUI)
    import-ocs                          Imports data from an OCS Inventory NG server (SQL server access is defined in the GUI)
    import-syslog                       Imports data from a syslog server text file into the i-doit logbook
    import-xml                          Imports files formatted in the i-doit XML syntax
    install                             Install the i-doit application
    jdisc-create-server                 Creates a JDisc server based on the entered data
    ldap-sync                           Synchronizes LDAP user accounts with i-doit user objects
    ldap-syncdn                         Synchronizes LDAP user DN attributes with i-doit user objects (only needs to be executed when migrating between different LDAP sources)
    license-add                         Add a license to i-doit
    license-assign                      Assign a hosting license to an i-doit tenant
    license-check                       Checks whether the i-doit tenant is licensed
    license-import                      Import licenses from the i-doit server
    license-key                         Set a license key for i-doit
    license-list                        List of licenses: ID, product, type (license type), from (license start), expire (license expiration date), licensed (max. number of licensed objects), tenants (max. number of tenants)
    license-remove                      Remove a license from i-doit
    list                                List commands
    migrate-uploaded-files              Migrates uploaded files in i-doit <v1.13 to v.1.14>
    notifications-list                  Lists all notification types and notifications for later use
    notifications-send                  Sends emails for notifications defined in the Notifications add-on
    report-export                       Executes an i-doit report and saves it as a CSV, TXT, PDF, or XML file
    report-refresher                    Refreshes one or all reports.
    search                              Triggers a search and returns the results as a formatted text table
    search-index                        Deletes the current search index and recreates it
    strip-description-html              With this command you can remove HTML tags from the description field of all categories and objects
    sync-dynamic-groups                 Synchronize members of dynamic groups
    system-autoincrement                Changes the initial auto-increment value for all i-doit database tables (affects everything: object IDs, category entries, etc. Use with caution!)
    system-categorycleanup              Optionally cleans up category entries that are in incomplete, archived, or deleted state
    system-checkforupdates              Checks for i-doit core updates
    system-convert-non-innodb-tables    Converts all non-InnoDB tables to InnoDB (affects database encoding. Use with caution!)
    system-convert-non-utf8-tables      Changes all non-UTF8 tables to UTF8 (affects database encoding. Use with caution!)
    system-location-fix                 Executes the location fix from the system tools in the GUI
    system-objectcleanup                Optionally cleans up objects that are in incomplete, archived, or deleted state
    system-objectrelations              Regenerates all object relationship names
    system-refresh-table-configuration  Refreshes all available list configurations (object types and categories)
    system-set-settings                 Set system settings
    tenant-create                       Create a tenant in i-doit
    tenant-disable                      Disables the tenant with the specified ID
    tenant-enable                       Activates the tenant with the specified ID
    tenant-list                         Shows a list of available tenants
    tenant-remove                       Remove the i-doit tenant
    tenant-set-settings                 This command allows you to set tenant-specific settings by providing a settings list based on JSON
    uninstall                           Uninstall the i-doit application
    update                              Update the i-doit application
idoit
    idoit:feature-manager               [idoit:fm] With this command it is possible to activate a set of features in i-doit.
    idoit:set-env-var                   With this command it is possible to set environment variables for i-doit.
    idoit:set-update-capability         Enable and disable the i-doit update capability
logbook
    logbook:archive                     Archives logbook entries (settings are defined in the GUI)
system
    system:tenant-export                Export your tenant data including uploaded files into a ZIP package.
    system:tenant-import                Import your tenant data including uploaded files from a ZIP package generated with the system:tenant-export command.
```
