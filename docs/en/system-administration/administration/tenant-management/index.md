# [Tenant name] management

Here you can mange your tenant and view system related configurations. All settings can be expanded using `Expand all` and collapsed again using `Collapse all`.

[![[Tenant name] management overview](../../../assets/images/en/system-administration/administration/tenant-mangement/1-tm.png)](../../../assets/images/en/system-administration/administration/tenant-mangement/1-tm.png)

## The [Tenant name] management is divided into the following sub-sections

-   [Settings for [Tenant name]](settings-for-tenant.md)
-   [Repair and clean up](repair-and-clean-up.md)
-   [Expert settings](expert-settings.md)

## License overview

In the license overview you will find information about your license, documented object, version and a object counter.

| Option                        | Value                                                      |
| ----------------------------- | ---------------------------------------------------------- |
| Documented objects            | Value                                                      |
| Free objects                  | Value                                                      |
| CMDB references               | Value                                                      |
| Last i-doit update            | Date time                                                  |
| Version                       | Value                                                      |
| Object counter by object type | Value                                                      |
| Licensed Add-ons              | Titles of installed add-ons                                |
| License runtime               | Creation and expire date as well as runtime of the license |

## System Config Check

| Option                             | Value                                                       |
| ---------------------------------- | ----------------------------------------------------------- |
| Time difference PHP/MySQL          | Date Time                                                   |
| Count of objects for [Tenant name] | Value                                                       |
| Operating System                   | Linux or Windows                                            |
| Architecture                       | Processor architecture                                      |
| PHP Version                        | PHP Version                                                 |
| i-doit Code Version                | i-doit Version                                              |
| MariaDB Version                    | MariaDB Version                                             |
| i-doit Database Version            | i-doit Database Version                                     |
| Database size                      | Size in MB                                                  |
| Updates                            | Next Version available?                                     |
| Browser (client)                   | Info text and link to kb                                    |
| Configuration examples             | Info text and link to kb                                    |
| Duplicated usernames               | Button that opens a popup and displays duplicated usernames |

## PHP.ini Settings

| Option              | Value      |
| ------------------- | ---------- |
| max_execution_time  | Time in s  |
| upload_max_filesize | Size in MB |
| post_max_size       | Size in MB |
| allow_url_fopen     | 1 or 0     |
| max_input_vars      | Value      |
| file_uploads        | 1 or 0     |
| memory_limit        | Size in MB |

## MySQL Settings
<!-- cSpell:disable -->
| Option                  | Value                   |
| ----------------------- | ----------------------- |
| innodb_buffer_pool_size | Size in MB              |
| max_allowed_packet      | Size in MB              |
| tmp_table_size          | Size in MB              |
| max_heap_table_size     | Size in MB              |
| join_buffer_size        | Size in bytes           |
| sort_buffer_size        | Size in bytes           |
| innodb_sort_buffer_size | Size in MB              |
| innodb_log_file_size    | Size in MB              |
| datadir                 | Data directory of MySQL |
<!-- cSpell:enable -->
## PHP Extensions
<!-- cSpell:disable -->
| Option   | Value    |
| -------- | -------- |
| curl     | Used for |
| gd       | Used for |
| json     | Used for |
| ldap     | Used for |
| mbstring | Used for |
| mysqli   | Used for |
| pcre     | Used for |
| session  | Used for |
| sockets  | Used for |
| spl      | Used for |
| xml      | Used for |
| zlib     | Used for |
| SNMP     | Used for |
<!-- cSpell:enable -->
## Apache Modules

| Option      | Value    |
| ----------- | -------- |
| mod_rewrite | Used for |

## Rights & Directories

| Option                       | Value          |
| ---------------------------- | -------------- |
| Source Directory             | Directory path |
| i-doit Directory             | Directory path |
| Temp                         | Directory path |
| Css                          | Directory path |
| Javascript                   | Directory path |
| File Upload                  | Directory path |
| Image Upload                 | Directory path |
| Default Theme Template Cache | Directory path |
| Default Theme Smarty Cache   | Directory path |
