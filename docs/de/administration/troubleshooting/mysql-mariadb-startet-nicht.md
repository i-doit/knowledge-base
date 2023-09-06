# MySQL/MariaDB startet nach Änderung der Einstellung innodb_log_file_size nicht

## Problem

Für eine bessere Performance von MySQL/MariaDB [wird empfohlen](../../installation/manuelle-installation/systemeinstellungen.md), die Einstellung innodb_log_file_size auf einen höheren Wert, abhängig vom RAM, zu ändern. Nach dieser Änderung wird der Dienst neu gestartet, doch es erscheint nur eine Fehlermeldung:

```log
110216  9:48:41  InnoDB: Initializing buffer pool, size = 128.0M
110216  9:48:41  InnoDB: Completed initialization of buffer pool
InnoDB: Error: log file ./ib_logfile0 is of different size 0 5242880 bytes
InnoDB: than specified in the .cnf file 0 33554432 bytes!
110216  9:48:41 [ERROR] Plugin 'InnoDB' init function returned error.
110216  9:48:41 [ERROR] Plugin 'InnoDB' registration as a STORAGE ENGINE failed.
```

## Lösung

Wie in einer ausführlichen [Antwort auf StackExchange](http://dba.stackexchange.com/questions/1261/how-to-safely-change-mysql-innodb-variable-innodb-log-file-size) beschrieben, sollte bei Änderungen an dieser Einstellung der Dienst sauber beendet und die bisherigen Logs gelöscht werden:

```sql
mysql -uroot -p -e"SET GLOBAL innodb_fast_shutdown = 0"
sudo service mysql stop
sudo mv /var/lib/mysql/ib_logfile[01] /tmp
sudo service mysql start
```

MySQL/MariaDB legt die Logs eigenständig erneut an. Das kann bei großen Datenbanken ein wenig Zeit in Anspruch nehmen. Der neue Wert für innodb_log_file_size ist nun aktiv.
