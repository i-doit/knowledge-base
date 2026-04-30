---
title: Execute command
description: Flows execute command
icon:
status:
lang: en
---

The following [console commands](../../../automation-and-integration/cli/index.md) are available in the add-on. You can use these functions instead of a cron job.

| Console command                                                   | Description                                                                                        |
| ----------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| [auth-cleanup](#auth-cleanup)                                     | Cleans up outdated permissions for data that no longer exists.                                     |
| [contracts-outdated](#contracts-outdated)                         | Updates the status of expired contracts.                                                           |
| [extend-contracts](#extend-contracts)                             | Automatically extends the duration of non-terminated contracts.                                    |
| [import-csv](#import-csv-only-on-prem) only on-prem               | Performs the import of a CSV file with the desired import parameters.                              |
| [import-hinventory](#import-hinventory-only-on-prem) only on-prem | Performs an h-inventory import of a compatible XML file.                                           |
| [import-xml](#import-xml-only-on-prem) only on-prem               | Performs an import of an XML file into i-doit.                                                     |
| [jdisc:import](#jdiscimport)                                      | Performs a JDisc import into i-doit.                                                               |
| [jdisc:discovery](#jdiscdiscovery)                                | Triggers a JDisc discovery job.                                                                    |
| [ldap-sync](#ldap-sync)                                           | Synchronizes users and groups from LDAP into i-doit and creates them as objects.                   |
| [ldap-syncdn](#ldap-syncdn)                                       | Synchronizes LDAP DNs with i-doit users.                                                           |
| [logbook:archive](#logbookarchive)                                | Archives logbook entries with a defined age according to the settings in the i-doit interface.     |
| [notifications-send](#notifications-send)                         | Sends the notifications configured in the i-doit interface.                                        |
| [search-index](#search-index)                                     | Rebuilds the search index by deleting and rewriting it.                                            |
| [sync-dynamic-groups](#sync-dynamic-groups)                       | Re-synchronizes the members of dynamic groups.                                                     |
| [system-categorycleanup](#system-categorycleanup)                 | Optionally cleans up category entries that have the status "incomplete", "archived", or "deleted". |
| [system-location-fix](#system-location-fix)                       | Runs the location correction from the GUI in the console.                                          |
| [system-objectcleanup](#system-objectcleanup)                     | Cleans up all objects with a defined status.                                                       |
| [system-objectrelations](#system-objectrelations)                 | Renews the names of all object relationships.                                                      |

## auth-cleanup

This command cleans up potentially orphaned entries in the permission system on a module basis. In the CMDB, permissions for categories, objects, and object types that no longer exist are removed.

## contracts-outdated

Updates the status of expired contracts.

## extend-contracts

Automatically extends the duration of non-terminated contracts. A use case can be found [here](../../../use-cases/automated-contract-renewal.md).

## import-csv (only on-prem)

| Option              | Description                                                                                                                                                                   |
| ------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **importFile**      | Specify the full path to the file. If you previously uploaded the file for CSV import, the path is for example `/var/www/html/imports/1/title.csv`. The `1` is the tenant ID. |
| **importProfileId** | You must first create a CSV import profile, see [Create profile](../../../consolidate-data/csv-data-import/index.md#profil-anlegen).                                          |

## import-hinventory (only on-prem)

| Option         | Description                                                                                                                 |
| -------------- | --------------------------------------------------------------------------------------------------------------------------- |
| **importFile** | Specify the full path to the file. For example `/var/www/html/imports/1/title.xml`, where `1` is the tenant ID.             |
| **objectType** | Imports the specified object type. Selection field (single-select) with object types, required with default value 'Client'. |
| **objectId**   | Imports only the specified object.                                                                                          |
| **force**      | Forces the update of existing objects, but overwrites the imported categories.                                              |

## import-xml (only on-prem)

| Option         | Description                                                                                                     |
| -------------- | --------------------------------------------------------------------------------------------------------------- |
| **importFile** | Specify the full path to the file. For example `/var/www/html/imports/1/title.xml`, where `1` is the tenant ID. |

## jdisc:import

| Option                    | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        |
| ------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **server**                | Enter the server ID to select it.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  |
| **profile**               | Specify the JDisc profile to be used for the import.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               |
| **group**                 | Specify the group ID to be used for the import.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    |
| **mode**                  | Select the import mode: <br>1: "Append": The import only creates new objects.<br>2: "Update": The import attempts to update existing objects.<br>3: "Overwrite": Existing objects are updated, new objects are additionally created. Contents of multi-value categories are first completely deleted and then recreated in the database.<br>4: "Update (newly discovered)": This mode corresponds to "Update", but all known links between i-doit and JDisc objects are removed and reconnected after a check.<br>5: "Overwrite (newly discovered)": The import deletes all existing identification keys before the overwrite mode is triggered.<br>6: "Only create newly scanned devices": The import only creates newly scanned JDisc devices, existing ones are skipped.<br>7: "Update (Only existing objects)": Only existing objects are updated. No new objects are created. |
| **overwriteHost**         | Specify whether overlapping host addresses should be overwritten.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  |
| **detailedLogging**       | Increases the logging level:<br>1: Low level; only notes and warnings are logged.<br>2: In addition to the low level, errors are logged.<br>3: In addition to the normal level, debug messages are logged (memory-intensive).                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      |
| **regenerateSearchIndex** | Automatically regenerates the search index.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        |
| **list-device-groups**    | Lists all available device groups on the selected JDisc server.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    |
| **list-servers**          | Lists all available JDisc servers.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 |

## jdisc:discovery

| Option           | Description                                                         |
| ---------------- | ------------------------------------------------------------------- |
| **server**       | Selection of the JDisc server.                                      |
| **Discover by**  | Depending on the selected option, additional options are displayed. |
| **discoveryJob** | Selection of the device by hostname.                                |
| **showLog**      | Shows the log during the discovery.                                 |

## ldap-sync

| Option                    | Description                                                                                                                                                                                    |
| ------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **ldapServerId**          | Specifies the ID of the LDAP server from which users should be synchronized. If no ldapServerId is specified, all active servers are synchronized.                                             |
| **connectionRanking**     | Active configuration that reactivates all connections of all reactivated users. Default configuration is the expert setting 'ldap.connection-ranking-active' (tenant-wide) with the value '1'. |
| **dropExistingRelations** | If an existing LDAP group has group members that are not part of the synchronization, they are removed. 1 = delete existing relationships, 0 = ignore existing relationships.                  |
| **archiveDeletedGroups**  | If a deleted LDAP group remains in i-doit, it is archived or deleted.                                                                                                                          |
| **useDefaultTemplates**   | Uses default templates when objects are created with this command.                                                                                                                             |

## ldap-syncdn

| Option           | Description                             |
| ---------------- | --------------------------------------- |
| **ldapServerId** | Specification of the LDAP server by ID. |

## logbook:archive

Archives logbook entries with a defined age according to the settings in the i-doit interface.

## notifications-send

| Option                    | Description                                                            |
| ------------------------- | ---------------------------------------------------------------------- |
| **notification-ids**      | Passes specific IDs of the notification to be sent (e.g., 1,2,3).      |
| **notification-type-ids** | Passes specific IDs of the notification type to be sent (e.g., 1,2,3). |

## search-index

| Option       | Description                                                                        |
| ------------ | ---------------------------------------------------------------------------------- |
| **update**   | Instead of only creating a new index, the current index documents are overwritten. |
| **category** | **Optional** if no selection is made, all available categories are indexed.        |


## sync-dynamic-groups

| Option              | Description         |
| ------------------- | ------------------- |
| **All groups**      | All dynamic groups. |
| **Specific groups** | Specific groups.    |

## system-categorycleanup

| Option             | Description                                          |
| ------------------ | ---------------------------------------------------- |
| **categoryStatus** | Cleans up category entries with the selected status. |

## system-location-fix

Runs the location correction from the GUI in the console.

## system-objectcleanup

| Option           | Description                                 |
| ---------------- | ------------------------------------------- |
| **objectStatus** | Cleans up objects with the selected status. |

## system-objectrelations

| Option               | Description                                                            |
| -------------------- | ---------------------------------------------------------------------- |
| **categoryConstant** | Renews the names of all object relationships in the selected category. |
