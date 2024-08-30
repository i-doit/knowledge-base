# Controller (removed in v26)

!!! warning "Please create a complete backup before making any changes to an interface/import. If the result is not satisfying, it can then be restored"

i-doit possesses a command line tool called controller.

!!! attention "Deprecated"

    Since version 1.10 the controller is marked as outdated and will be removed in one of the next releases. The [console](../cli/index.md) is the alternative choice.

First Steps
-----------

The controller is located in the main folder of _i-doit_. If you have followed the [installation guide,](../../installation/manual-installation/setup.md) then the main folder will be located at /var/www/html/i-doit/ for Debian-based operating systems:

    $ ll /var/www/html/i-doit/controller
    -rwxrwxr-- 1 www-data www-data 314 Jul  7 14:23 /var/www/html/i-doit/controller

In order to avoid errors it is important to execute the controller with the same user who uses the web server. In the example this is **www-data**. It's also important to change to the main folder of i-doit prior to executing the controller:

    $ cd /var/www/html/i-doit/
    $ sudo -u www-data ./controller
    
    Usage: controller.php [OPTION] [PARAMETERS]
    e.g.:  controller.php -v -m workflow
    Options:
    -m HANDLER   Load handler HANDLER module.
    -u username  i-doit username
    -p password  i-doit password
    -i tenant    ID of tenant to connect to (use './tenants ls' for a list)
    -h           This help text
    -v           Verbose mode
    -d           Displays ALL debug messages
    
    HANDLER can be one of the following availlable handlers:
    addldapdn, archivelog, cleanup_auth, cleanup_objects, csv_import, import, isc_dhcpd, jdisc, jdisc_discovery, ldap, maintenance, nagios, nagios_export, notifications, ocs, regenerate_relations, report, syslog, tenants, updatecheck, workflow

This script has to be executed in a slightly different manner in [Windows](../../installation/manual-installation/microsoft-windows-server/index.md) operating systems since they cannot handle the bash script of the controller:

    php.exe controller.php

Client and Credentials
----------------------

To use the controller, an authentication for i-doit is needed. For this a username (-u), password (-p) and the unique ID of the client to be used (-i) are required.

!!! success "The user "controller""

    It is recommended to create a dedicated user for the controller in i-doit. If the user is to be configured as local user, create an object of the type **Persons ** with the desired credentials in the **Persons → Login** category. This user should receive administrator rights. This can be achieved by an assignment to the predefined **Person group** Admin.

In order to find out which unique ID belongs to a specific client, the following command can be used:

    $ sudo -u www-data ./tenants ls
    Mandator-Handler initialized (2015-07-22 10:32:42)
    Availlable Mandators:
    ID: Title (Language) (host:port) [status]
    1 : ACME IT Solutions (localhost:3306) [active]
    2 : Schulz GmbH (localhost:3306) [active]

The ID is generally 1 for i-doit installations with just one client.

Handler
-------

The controller is capable of performing various actions. These in turn are represented by the handler. To call up a specific handler the parameter -m is required.

### List of Handlers

[**Documents**](../../i-doit-pro-add-ons/documents/index.md)

| Handler                                                                           | pro version | open version | Add-on                                                       | Description                                                                             |
| --------------------------------------------------------------------------------- | ----------- | ------------ | ------------------------------------------------------------ | --------------------------------------------------------------------------------------- |
| **[addldapdn](../../user-authentication-and-management/ldap-directory/index.md)** | yes         | yes          | –                                                            | Synchronize the distinguished name (DN) of users from a LDAP/AD (see **LDAP** category) |
| **[archivelog](../../basics/logbook.md)**                                         | yes         | yes          | –                                                            | Archive logbook entries                                                                 |
| **[check_mk](../../i-doit-pro-add-ons/checkmk.md)**                               | yes         | yes          | –                                                            | Write the actual status from network monitoring into logbook                            |
| **[cleanup_auth](../../efficient-documentation/rights-management/index.md)**      | yes         | yes          | –                                                            | Clean up the authorization system                                                       |
| **[cleanup_objects](../../basics/life-and-documentation-cycle.md)**               | yes         | yes          | –                                                            | Clean up objects                                                                        |
| **[csv_import](../../consolidate-data/csv-data-import/index.md)**                 | yes         | –            | –                                                            | Import data from a CSV file                                                             |
| [**document**](../../i-doit-pro-add-ons/documents/index.md)                       | –           | –            | **[Documents](../../i-doit-pro-add-ons/documents/index.md)** | Create a new revision of a document                                                     |
| **import**                                                                        | yes         | yes          | –                                                            | Import i-doit XML or [h-inventory XML](../../consolidate-data/h-inventory.md)           |
| **increment_config**                                                              | yes         | yes          | –                                                            | Set auto_increment of MariaDB / MySQL tables to a positive integer value                |
| **isc_dhcpd**                                                                     | yes         | yes          | –                                                            | Export configuration for ISC DHCPD                                                      |
| **[jdisc](../../consolidate-data/jdisc-discovery.md)**                            | yes         | yes          | –                                                            | Import files from JDisc                                                                 |
| **[jdisc_discovery](../../consolidate-data/jdisc-discovery.md)**                  | yes         | yes          | –                                                            | Activate a discovery job at JDisc                                                       |
| **[ldap](../../user-authentication-and-management/ldap-directory/index.md)**      | yes         | yes          | –                                                            | Import data from a LDAP directory or Active Directory (AD)                              |
| **[maintenance](../../i-doit-pro-add-ons/maintenance.md)**                        | –           | –            | **[Maintenance](../../i-doit-pro-add-ons/maintenance.md)**   | Send e-mails with planned maintenance works                                             |
| **[nagios](../network-monitoring/nagios.md)****                                   | yes         | yes          | –                                                            | Write the actual status from network monitoring into logbook                            |
| **[nagios_export](../network-monitoring/nagios.md)**                              | yes         | yes          | –                                                            | Export Nagios configuration                                                             |
| **[notifications](../../evaluation/notifications.md)**                            | yes         | yes          | –                                                            | Send notifications per e-mail                                                           |
| **[ocs](../../i-doit-pro-add-ons/ocs-inventory-ng.md)**                           | yes         | yes          | –                                                            | Import data from OCS Inventory NG                                                       |
| **[regenerate_relations](../../basics/object-relations.md)**                      | yes         | yes          | –                                                            | Recreate object relations                                                               |
| **[report](../../evaluation/report-manager.md)**                                  | yes         | –            | –                                                            | Export a report as file                                                                 |
| **[search_index](../../efficient-documentation/search.md)**                       | yes         | yes          | –                                                            | Search in i-doit or create/renew search index                                           |
| **syslog**                                                                        | yes         | yes          | –                                                            | Import data from Syslog in i-doit logbook                                               |
| **[tenants](#mandantund-credentials)**                                            | yes         | yes          | –                                                            | List, activate and deactivate tenants                                                   |
| **[updatecheck](../../maintenance-and-operation/update.md)**                      | yes         | yes          | –                                                            | Search for updates in i-doit                                                            |
| **workflow**                                                                      | yes         | yes          | –                                                            | Send Workflow notifications per e-mail                                                  |

### Configuration of Handlers

#### Set Additional Parameters

Some handlers require further options which can be given directly to the controller via specific parameters. To see which parameters these are, click on the links in the handler list.

#### Adjust the Configuration File

For some handlers a respective configuration file exists. Examples can be found beneath the main folder of i-doit in **src/handler/config/examples/**. In order for a configuration file to be in effect, it has to be available in the s**rc/handler/config/** folder.
