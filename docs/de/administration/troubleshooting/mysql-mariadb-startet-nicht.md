---
title: MySQL/MariaDB startet nach Änderung der Einstellung innodb_log_file_size nicht
description: "Für eine bessere Performance von MySQL/MariaDB wird empfohlen, die Einstellung innodb_log_file_size auf einen höheren Wert zu ändern."
icon:
status:
lang: de
---
# MySQL/MariaDB startet nach Änderung der Einstellung innodb_log_file_size nicht

## Problem


[![mysql-mariadb-startet-nicht.png](../../assets/images/de/administration/troubleshooting/mysql-mariadb-startet-nicht.png)](../../assets/images/de/administration/troubleshooting/mysql-mariadb-startet-nicht.png)

Für eine bessere Performance von MySQL/MariaDB [wird empfohlen](../../installation/manuelle-installation/systemeinstellungen.md), die Einstellung `innodb_log_file_size` auf einen höheren Wert zu ändern. Nach der Änderung startet der Dienst nicht mehr und gibt folgende Fehlermeldung aus:

```log
110216  9:48:41  InnoDB: Initializing buffer pool, size = 128.0M
110216  9:48:41  InnoDB: Completed initialization of buffer pool
InnoDB: Error: log file ./ib_logfile0 is of different size 0 5242880 bytes
InnoDB: than specified in the .cnf file 0 33554432 bytes!
110216  9:48:41 [ERROR] Plugin 'InnoDB' init function returned error.
110216  9:48:41 [ERROR] Plugin 'InnoDB' registration as a STORAGE ENGINE failed.
```

## Lösung

Bei Änderungen an `innodb_log_file_size` musst du den Dienst sauber beenden und die bisherigen Log-Dateien entfernen (siehe auch diese [Antwort auf StackExchange](http://dba.stackexchange.com/questions/1261/how-to-safely-change-mysql-innodb-variable-innodb-log-file-size)):

```sql
mysql -uroot -p -e"SET GLOBAL innodb_fast_shutdown = 0"
sudo service mysql stop
sudo mv /var/lib/mysql/ib_logfile[01] /tmp
sudo service mysql start
```

MySQL/MariaDB legt die Logs automatisch neu an. Bei großen Datenbanken kann das etwas dauern. Danach ist der neue Wert für `innodb_log_file_size` aktiv.
