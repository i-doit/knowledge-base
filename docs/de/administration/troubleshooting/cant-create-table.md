# Can't create table idoit_data.table_name (errno: 140 "Wrong create options")

Beim wiederherstellen einen SQL Dumps kommt es zu folgender Fehlermeldung:

```
    ERROR 1005 (HY000) at line 10381: Can't create table  idoit_data.table_name (errno: 140 "Wrong create options")
```

Der Dump an dieser Stelle sieht so aus:

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

Die Lösung:

Aus `ROW_FORMAT=FIXED`

    ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=FIXED;

wird `ROW_FORMAT=DYNAMIC`

    ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;
