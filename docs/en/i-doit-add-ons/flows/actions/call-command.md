---
title: Call command
description: Flows call command
icon:
status:
lang: en
---

The following [console commands](../../../automation-and-integration/cli/index.md) are available in the Add-on. These function can be used instead of a Cronjob.

| Console command                                                    | Options                                                                                                         | Description                                                                                        |
| ------------------------------------------------------------------ | --------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| [auth-cleanup](#auth-cleanup)                                      | -                                                                                                               | It cleans up outdated rights to data that are no longer available                                  |
| [contracts-outdated](#contracts-outdated)                          | -                                                                                                               | Updates status of outdated contracts                                                               |
| [extend-contracts](#extend-contracts)                              | -                                                                                                               | Automatically extend the runtime of not-cancelled contracts                                        |
| [import-csv](#import-csv-only-on-prem) only on-prem                | importFile<br>importProfileId is only available when a profile is saved, cached renewing needed                 | Performs the import of a CSV file with the desired import parameters                               |
| [import-hinventory](#import-inventory-data-into-cmdb) only on-prem | importFile<br>objectType<br>objectId<br>force                                                                   | Performs an h-inventory import of a compatible XML file                                            |
| [import-jdisc](#import-jdisc)                                      | server<br>profile<br>group<br>mode<br>overwriteHost<br>detailedLogging<br>regenerateSearchIndex                 | Performs a JDisc import to i-doit                                                                  |
| [import-jdiscdiscovery](#import-jdiscdiscovery)                    | server<br>Discover by<br>discoveryJob<br>showLog                                                                | Triggers a JDisc Discovery job                                                                     |
| [import-xml](#import-xml-only-on-prem) only on-prem                | importFile                                                                                                      | Performs an import of an XML file into i-doit                                                      |
| [ldap-sync](#ldap-sync)                                            | ldapServerId<br>connectionRankingActive<br>dropExistingRelations<br>archiveDeletedGroups<br>useDefaultTemplates | Synchronizes user and groups from LDAP to i-doit and creates them as objects                       |
| [ldap-syncdn](#ldap-syncdn)                                        | ldapServerId                                                                                                    | Synchronizes LDAP DNs with the i-doit users                                                        |
| [logbook-archive](#logbook-archive)                                | -                                                                                                               | Archives the logbook entries with a defined age, according to the settings on the i-doit interface |
| [notifications-send](#notifications-send)                          | notification-ids<br>notification-type-ids                                                                       | Sends the notifications configured on the i-doit interface                                         |
| [search-index](#search-index)                                      | update<br>category                                                                                              | Restores the search index by deleting and rewriting it                                             |
| [sync-dynamic-groups](#sync-dynamic-groups)                        | groups                                                                                                          | Resynchronizes dynamic group members                                                               |
| [system-categorycleanup](#system-categorycleanup)                  | categoryStatus                                                                                                  | Purges optionally category entries that are in the state "unfinished", "archived" or "deleted"     |
| [system-location-fix](#system-location-fix)                        | -                                                                                                               | Executes the location correction from the GUI in the console                                       |
| [system-objectcleanup](#system-objectcleanup)                      | objectStatus                                                                                                    | Cleans all objects with a defined status                                                           |
| [system-objectrelations](#system-objectrelations)                  | categoryConstant                                                                                                | Renews the names of all object relationships                                                       |

## auth-cleanup

It cleans up potentially orphaned rights system entries on a per-module basis. In the CMDB, for instance, permissions are removed from categories, objects and object types that no longer exist.

## contracts-outdated

Updates status of outdated contracts.

## extend-contracts

Automatically extend the runtime of not-cancelled contracts. A Use case can be found [here](../../../use-cases/automated-contract-term-extension.md)

## import-csv (only on-prem)

| Option              | Description                                                                                                                                                                |
| ------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **importFile**      | Specify the complete path to the file. If you uploaded it before for the CSV Import the path is like `/var/www/html/i-doit/imports/1/title.csv`. The `1` is the tenant ID. |
| **importProfileId** | A CSV Import profile needs to be created before, see [Creating a profile](../../../consolidate-data/csv-data-import/index.md#creating-a-profile)                           |

## import-hinventory (only on-prem)

| Option         | Description                                                                                                            |
| -------------- | ---------------------------------------------------------------------------------------------------------------------- |
| **importFile** | Specify the complete path to the file. Like `/var/www/html/i-doit/imports/1/title.xml` where the `1` is the tenant ID. |
| **objectType** | Imports the specified object type. Single select combobox with object types, required with default value 'Client'      |
| **objectId**   | Imports only the specified object                                                                                      |
| **force**      | Forces existing objects to be updated but overwrites the imported categories                                           |

## import-jdisc

| Option                    | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     |
| ------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **server**                | Enter the Server-ID to select it                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
| **profile**               | Specify/select the JDisc profile to be used for the import                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      |
| **group**                 | Specify/select the group ID to be used for the import                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           |
| **mode**                  | Select the import mode using single select: "Append": The import will only create new objects.<br>2: "Update": The import will try to update already existing objects.<br>3: "Overwrite": Existing objects are updated, new objects are created additionally. Contents from Multi-Value-Categories are first completely deleted and then newly created on the database.<br>4: "Update (newly discovered)": The mode corresponds to "Update", but all known links between i-doit and JDisc objects are removed and reconnected after a check.<br>5: "Overwrite (newly discovered)": The import clears all existing identification keys before the Overwrite mode is triggered.<br>6: "Only create newly scanned devices": The import creates only newly scanned jdisc devices, existing ones are skipped.<br>7: "Update (Only existing objects)": Only existing objects are updated. No new objects are created. |
| **overwriteHost**         | Specify whether to overwrite overlapping host addresses                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         |
| **detailedLogging**       | Increases the logging level: 1: low log level only notices and warnings are being logged<br>2: additionally to the low log level errors are being logged<br>3: additionally to the normal log level debug messages are being logged. (Memory intensive)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         |
| **regenerateSearchIndex** | Automatically renews the search index                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           |

## import-jdiscdiscovery

| Option           | Description                                                 |
| ---------------- | ----------------------------------------------------------- |
| **server**       | Selecting the JDisc Server                                  |
| **Discover by**  | According to selected option, further options are displayed |
| **discoveryJob** | Selecting the device by host name                           |
| **showLog**      | Displays the log during the Discoveries                     |

## import-xml (only on-prem)

| Option         | Description                                                                                                            |
| -------------- | ---------------------------------------------------------------------------------------------------------------------- |
| **importFile** | Specify the complete path to the file. Like `/var/www/html/i-doit/imports/1/title.xml` where the `1` is the tenant ID. |

## ldap-sync

| Option                    | Description                                                                                                                                                                               |
| ------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **ldapServerId**          | Specifies the ID of the LDAP server from which the users are to be synchronized. If no ldapServerId is specified, all active servers are synchronized.                                    |
| **connectionRanking**     | Active Configuration which reactivates all connections from all reactivated Users. Default configuration is expert setting 'ldap.connection-ranking-active' (Tenant-wide) with value '1'. |
| **dropExistingRelations** | If an existing ldap group has group member users, outside of these synced users, those will be purged. 1 = drop existing relations, 0 = ignore existing relations                         |
| **archiveDeletedGroups**  | If a deleted ldap group remains in i-doit, archive or delete it.                                                                                                                          |
| **useDefaultTemplates**   | Use default templates, whenever object get created by this command                                                                                                                        |

## ldap-syncdn

| Option           | Description                           |
| ---------------- | ------------------------------------- |
| **ldapServerId** | Specifying the LDAP server via the ID |

## logbook-archive

Archives the logbook entries with a defined age, according to the settings on the i-doit interface.

## notifications-send

| Option                    | Description                                          |
| ------------------------- | ---------------------------------------------------- |
| **notification-ids**      | Pass specific notification IDs to be sent 1,2,3      |
| **notification-type-ids** | Pass specific notification type IDs to be sent 1,2,3 |

## search-index

| Option       | Description                                                                       |
| ------------ | --------------------------------------------------------------------------------- |
| **update**   | Instead of just creating a new index, the current index documents are overwritten |
| **category** | **optional** when no selection is made, all available categories are indexed      |


## sync-dynamic-groups

| Option              | Description        |
| ------------------- | ------------------ |
| **All groups**      | All dynamic groups |
| **Specific groups** | Specific groups    |

## system-categorycleanup

| Option             | Description                                      |
| ------------------ | ------------------------------------------------ |
| **categoryStatus** | Purges category entries with the selected status |

## system-location-fix

Executes the location correction from the GUI in the console.

## system-objectcleanup

| Option           | Description                             |
| ---------------- | --------------------------------------- |
| **objectStatus** | Purges objects with the selected status |

## system-objectrelations

| Option               | Description                                                           |
| -------------------- | --------------------------------------------------------------------- |
| **categoryConstant** | Renews the names of all object relationships in the selected category |
