# Impossible de créer la table `idoit_data`.`table_name` (errno: 140 "Mauvaises options de création") 

Lors de la restauration d'un dump SQL, le message d'erreur suivant apparaît :

ERROR 1005 (HY000) à la ligne 10381 : Impossible de créer la table idoit_data.table_name (errno: 140 "Mauvaises options de création")

Le dump à ce stade ressemble à ceci :

```sql
DROP TABLE IF EXISTS `isys_drive_list_2_stor_list`;
/*!40101 SET @saved_cs_client = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `isys_drive_list_2_stor_list` (
`isys_drive_list_2_stor_list__id` int(10) unsigned NOT NULL AUTO_INCREMENT,
`isys_drive_list_2_stor_list__isys_catg_drive_list__id` int(10) unsigned NOT NULL DEFAULT 0,
`isys_drive_list_2_stor_list__isys_catg_stor_list__id` int(10) unsigned NOT NULL DEFAULT 0,
PRIMARY KEY (`isys_drive_list_2_stor_list__id`),
KEY `isys_drive_list_2_stor_list_FKIndex1` (`isys_drive_list_2_stor_list__isys_catg_drive_list__id`),
KEY `isys_drive_list_2_stor_list_FKIndex2` (`isys_drive_list_2_stor_list__isys_catg_stor_list__id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=FIXED;
/*!40101 SET character_set_client = @saved_cs_client */;
```

La Solution:
=============

Modifier le "ROW\_FORMAT=FIXED"

```sql
  ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=FIXED;
```

en "ROW\_FORMAT=DYNAMIC"

```sql
  ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;
```
