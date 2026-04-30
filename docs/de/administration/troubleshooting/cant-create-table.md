---
title: "Can't create table idoit_data.table_name (errno: 140 \"Wrong create options\")"
description: "Beim Wiederherstellen eines SQL-Dumps erscheint folgende Fehlermeldung:"
icon:
status:
lang: de
---
# Can't create table idoit_data.table_name (errno: 140 "Wrong create options")

## Problem

Dieser Fehler tritt typischerweise auf, wenn ein SQL-Dump auf einem MariaDB- oder MySQL-Server eingespielt wird, dessen Konfiguration das im Dump verwendete Zeilenformat nicht unterstützt. Häufig passiert dies nach einem Upgrade der Datenbank oder bei der Migration auf einen anderen Server.

[![cant-create-table.png](../../assets/images/de/administration/troubleshooting/cant-create-table.png)](../../assets/images/de/administration/troubleshooting/cant-create-table.png)

Beim Wiederherstellen eines SQL-Dumps erscheint folgende Fehlermeldung:

```
    ERROR 1005 (HY000) at line 10381: Can't create table  idoit_data.table_name (errno: 140 "Wrong create options")
```

Die betroffene Stelle im Dump sieht typischerweise so aus:

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

## Lösung

Ersetze `ROW_FORMAT=FIXED` durch `ROW_FORMAT=DYNAMIC` in der betroffenen Zeile:

    ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

Wenn der Fehler an mehreren Stellen im Dump auftritt, kannst du alle Vorkommen mit einem Suchen-und-Ersetzen-Befehl auf einmal korrigieren, z.B. mit `sed`:

```bash
sed -i 's/ROW_FORMAT=FIXED/ROW_FORMAT=DYNAMIC/g' dump.sql
```

Danach kannst du den angepassten Dump erneut importieren.

## Siehe auch

- [Troubleshooting](index.md) -- Weitere bekannte Probleme und Lösungen
