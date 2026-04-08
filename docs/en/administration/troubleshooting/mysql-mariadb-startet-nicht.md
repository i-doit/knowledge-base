---
title: MySQL/MariaDB Does Not Start After Changing the innodb_log_file_size Setting
description: "For better MySQL/MariaDB performance, it is recommended to change the innodb_log_file_size setting to a higher value."
icon:
status:
lang: en
---
# MySQL/MariaDB Does Not Start After Changing the innodb_log_file_size Setting

## Problem


[![mysql-mariadb-startet-nicht.png](../../assets/images/de/administration/troubleshooting/mysql-mariadb-startet-nicht.png)](../../assets/images/de/administration/troubleshooting/mysql-mariadb-startet-nicht.png)

For better MySQL/MariaDB performance, [it is recommended](../../installation/manual-installation/systemeinstellungen.md) to change the `innodb_log_file_size` setting to a higher value. After the change, the service no longer starts and displays the following error message:

```log
110216  9:48:41  InnoDB: Initializing buffer pool, size = 128.0M
110216  9:48:41  InnoDB: Completed initialization of buffer pool
InnoDB: Error: log file ./ib_logfile0 is of different size 0 5242880 bytes
InnoDB: than specified in the .cnf file 0 33554432 bytes!
110216  9:48:41 [ERROR] Plugin 'InnoDB' init function returned error.
110216  9:48:41 [ERROR] Plugin 'InnoDB' registration as a STORAGE ENGINE failed.
```

## Solution

When changing `innodb_log_file_size`, you must cleanly stop the service and remove the existing log files (see also this [answer on StackExchange](http://dba.stackexchange.com/questions/1261/how-to-safely-change-mysql-innodb-variable-innodb-log-file-size)):

```sql
mysql -uroot -p -e"SET GLOBAL innodb_fast_shutdown = 0"
sudo service mysql stop
sudo mv /var/lib/mysql/ib_logfile[01] /tmp
sudo service mysql start
```

MySQL/MariaDB automatically recreates the logs. For large databases, this may take some time. Afterwards, the new value for `innodb_log_file_size` is active.
