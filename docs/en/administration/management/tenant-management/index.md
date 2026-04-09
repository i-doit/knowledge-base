---
title: "[Tenant Name] Administration"
description: Here you can manage your tenants and view system-related configurations.
icon:
status:
lang: en
---
# [Tenant Name] Administration

Here you can manage your tenants and view system-related configurations. All settings can be expanded via `Expand all` and collapsed via `Collapse all`.

[![Tenant overview](../../../assets/images/de/administration/mandanten-verwaltung/uebersicht.png)](../../../assets/images/de/administration/mandanten-verwaltung/uebersicht.png)

## Sub-pages

-   [Settings for Tenant Name](tenant-settings.md)
-   [System Repair and Cleanup](system-repair-and-cleanup.md)
-   [Expert Settings](expert-settings.md)

## License overview

In the license overview, you can find information about your license, documented objects, the version, and an object counter.

| Option                       | Value                                                       |
| ---------------------------- | ----------------------------------------------------------- |
| Documented objects           | Value                                                       |
| Free objects                 | Value                                                       |
| CMDB references              | Value                                                       |
| Last i-doit update           | Date time                                                   |
| Version                      | Value                                                       |
| Object counter by object type | Value                                                      |
| Licensed add-ons             | Title of installed add-ons                                  |
| License duration             | Creation and expiration date as well as the license duration |

## System Config Check

| Option                                   | Value                                                              |
| ---------------------------------------- | ------------------------------------------------------------------ |
| Time difference PHP/MySQL                | Date time                                                          |
| Number of objects in [Tenant Name]       | Value                                                              |
| Operating System                         | Linux or Windows                                                   |
| Architecture                             | Processor architecture                                             |
| PHP Version                              | PHP version                                                        |
| i-doit Code Version                      | i-doit version                                                     |
| MariaDB Version                          | MariaDB version                                                    |
| i-doit Database Version                  | i-doit database version                                            |
| Database size                            | Size in MB                                                         |
| Updates                                  | Update available?                                                  |
| Browser (client)                         | Info text and link to KB                                           |
| Configuration examples                   | Info text and link to KB                                           |
| Duplicated usernames                     | Button that opens a popup and displays duplicated usernames        |

## PHP.ini Settings

| Option              | Value       |
| ------------------- | ----------- |
| max_execution_time  | Time in s   |
| upload_max_filesize | Size in MB  |
| post_max_size       | Size in MB  |
| allow_url_fopen     | 1 or 0      |
| max_input_vars      | Value       |
| file_uploads        | 1 or 0      |
| memory_limit        | Size in MB  |

## MySQL Settings
<!-- cSpell:disable -->
| Option                  | Value            |
| ----------------------- | ---------------- |
| innodb_buffer_pool_size | Size in MB       |
| max_allowed_packet      | Size in MB       |
| tmp_table_size          | Size in MB       |
| max_heap_table_size     | Size in MB       |
| join_buffer_size        | Size in bytes    |
| sort_buffer_size        | Size in bytes    |
| innodb_sort_buffer_size | Size in MB       |
| innodb_log_file_size    | Size in MB       |
| datadir                 | MySQL directory  |
<!-- cSpell:enable -->
## PHP Extensions
<!-- cSpell:disable -->
| Option   | Value          |
| -------- | -------------- |
| curl     | Used by        |
| gd       | Used by        |
| json     | Used by        |
| ldap     | Used by        |
| mbstring | Used by        |
| mysqli   | Used by        |
| pcre     | Used by        |
| session  | Used by        |
| sockets  | Used by        |
| spl      | Used by        |
| xml      | Used by        |
| zlib     | Used by        |
| SNMP     | Used by        |
<!-- cSpell:enable -->
## Apache Modules

| Option      | Value          |
| ----------- | -------------- |
| mod_rewrite | Used by        |

## Rights & Directories

| Option                       | Value           |
| ---------------------------- | --------------- |
| Source Directory             | Directory path  |
| i-doit Directory             | Directory path  |
| Temp                         | Directory path  |
| Css                          | Directory path  |
| Javascript                   | Directory path  |
| File Upload                  | Directory path  |
| Image Upload                 | Directory path  |
| Default Theme Template Cache | Directory path  |
| Default Theme Smarty Cache   | Directory path  |
