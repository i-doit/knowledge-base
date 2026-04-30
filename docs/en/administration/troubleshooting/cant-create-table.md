---
title: "Can't create table idoit_data.table_name (errno: 140 \"Wrong create options\")"
description: "When restoring a SQL dump, the following error message appears:"
icon:
status:
lang: en
---
# Can't create table idoit_data.table_name (errno: 140 "Wrong create options")

## Problem

This error typically occurs when a SQL dump is imported on a MariaDB or MySQL server whose configuration does not support the row format used in the dump. This frequently happens after a database upgrade or when migrating to a different server.

[![cant-create-table.png](../../assets/images/de/administration/troubleshooting/cant-create-table.png)](../../assets/images/de/administration/troubleshooting/cant-create-table.png)

When restoring a SQL dump, the following error message appears:

```
    ERROR 1005 (HY000) at line 10381: Can't create table  idoit_data.table_name (errno: 140 "Wrong create options")
```

The affected section in the dump typically looks like this:

```sql
    DROP TABLE IF EXISTS isys_drive_list_2_stor_list;
    /*!40101 SET @saved_cs_client = @@character_set_client */;
    /*!40101 SET character_set_client = utf8 */;
    CREATE TABLE  isys_drive_list_2_stor_list (
    isys_drive_list_2_stor_list__id  int(10) unsigned NOT NULL AUTO_INCREMENT,
    isys_drive_list_2_stor_list__isys_catg_drive_list__id  int(10) unsigned NOT NULL DEFAULT 0,
    isys_drive_list_2_stor_list__isys_catg_stor_list__id  int(10) unsigned NOT NULL DEFAULT 0,
    PRIMARY KEY (isys_drive_list_2_stor_list__id),
    KEY  isys_drive_list_2_stor_list_FKIndex1 (isys_drive_list_2_stor_list__isys_catg_drive_list__id),
    KEY  isys_drive_list_2_stor_list_FKIndex2 (isys_drive_list_2_stor_list__isys_catg_stor_list__id)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=FIXED;
    /*!40101 SET character_set_client = @saved_cs_client */;
```

## Solution

Replace `ROW_FORMAT=FIXED` with `ROW_FORMAT=DYNAMIC` in the affected line:

    ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

If the error occurs in multiple places in the dump, you can correct all occurrences at once with a search-and-replace command, e.g., with `sed`:

```bash
sed -i 's/ROW_FORMAT=FIXED/ROW_FORMAT=DYNAMIC/g' dump.sql
```

Afterwards, you can import the modified dump again.

## See also

- [Troubleshooting](index.md) -- More known problems and solutions
