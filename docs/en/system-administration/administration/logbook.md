# Logbook

In the logbook view you can filter entries according to several parameters. If possible, an entry contains the exact changes. (Which values were changed and how?) → [READMORE](../../basics/logbook.md)

| Option                 | Value                                                                                      |
| ---------------------- | ------------------------------------------------------------------------------------------ |
| Status                 | Normal<br>Archive                                                                          |
| Of                     | Date and/or time                                                                           |
| Source                 | -<br>All!<br>External<br>Import<br>Internal<br>JDisc Import<br>Manual entries<br>RT Ticket |
| Alarm level            | 0 (information)<br>1 (low)<br>2 (middle)<br>3 (high)                                       |
| User                   | Object browser                                                                             |
| To                     | Date and/or time                                                                           |
| Type                   | Objects<br>System                                                                          |
| Show only CMDB changes | Checkbox                                                                                   |

[![Logbook View](../../assets/images/en/system-administration/administration/logbook/1-l.png)](../../assets/images/en/system-administration/administration/logbook/1-l.png)

## Logbook Configuration

In the logbook configuration you can define how many changes may be combined as a maximum in a logbook entry, if the user only should be displayed with his/her ID or in an extended way and if yes, how this should look like. Additionally, you can determine the number of combined changes per logbook entry during an import procedure.

| Option                               | Value                                     |
| ------------------------------------ | ----------------------------------------- |
| User identification                  | Standard<br>Extended                      |
| Create logbook entries for relations | Only initiating object<br>On both objects |

### Import

| Option                                                     | Value |
| ---------------------------------------------------------- | ----- |
| Maximum amount of combined detailed changes (per category) | Value |

## Archive

Enter for how long entries in the logbook should be kept before they will be archived.

| Option             | Value                             |
| ------------------ | --------------------------------- |
| Entries older than | Value in Days                     |
| Destination        | local database<br>remote database |

To archive the logbook, the [logbook-archive](../../automation-and-integration/cli/console/commands-and-options.md#logbook-archive) CLI command must be executed.

## Restore

With this function you can restore entries which were already archived.

| Option             | Value                             |
| ------------------ | --------------------------------- |
| Entries older than | Value in Days                     |
| Source             | local database<br>remote database |
