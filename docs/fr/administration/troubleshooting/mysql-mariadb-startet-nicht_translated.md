<!-- TRANSLATED by md-translate -->
# MySQL/MariaDB startet nach Änderung der Einstellung innodb_log_file_size nicht

# MySQL/MariaDB ne démarre pas après la modification du paramètre innodb_log_file_size

## Problem

## problème

Für eine bessere Performance von MySQL/MariaDB [wird empfohlen](../../installation/manuelle-installation/systemeinstellungen.md), die Einstellung innodb_log_file_size auf einen höheren Wert, abhängig vom RAM, zu ändern. Nach dieser Änderung wird der Dienst neu gestartet, doch es erscheint nur eine Fehlermeldung:

Pour de meilleures performances de MySQL/MariaDB [il est recommandé](../../installation/installation-manuelle/paramètres-système.md) de changer le paramètre innodb_log_file_size à une valeur plus élevée, en fonction de la RAM. Après cette modification, le service est redémarré, mais seul un message d'erreur apparaît :

```log
110216 9:48:41 InnoDB: Initializing buffer pool, size = 128.0M
110216 9:48:41 InnoDB: Completed initialization of buffer pool
InnoDB: Error: log file ./ib_logfile0 is of different size 0 5242880 bytes
InnoDB: than specified in the .cnf file 0 33554432 bytes!
110216 9:48:41 [ERROR] Plugin 'InnoDB' init function returned error.
110216 9:48:41 [ERROR] Plugin 'InnoDB' registration as a STORAGE ENGINE failed.
```

## Lösung

## solution

Wie in einer ausführlichen [Antwort auf StackExchange](http://dba.stackexchange.com/questions/1261/how-to-safely-change-mysql-innodb-variable-innodb-log-file-size) beschrieben, sollte bei Änderungen an dieser Einstellung der Dienst sauber beendet und die bisherigen Logs gelöscht werden:

Comme décrit dans une [Réponse à StackExchange](http://dba.stackexchange.com/questions/1261/how-to-safely-change-mysql-innodb-variable-innodb-log-file-size) détaillée, si vous modifiez ce paramètre, le service doit être arrêté proprement et les logs précédents supprimés :

```sql
mysql -uroot -p -e"SET GLOBAL innodb_fast_shutdown = 0"
sudo service mysql stop
sudo mv /var/lib/mysql/ib_logfile[01] /tmp
sudo service mysql start
```

MySQL/MariaDB legt die Logs eigenständig erneut an. Das kann bei großen Datenbanken ein wenig Zeit in Anspruch nehmen. Der neue Wert für innodb_log_file_size ist nun aktiv.

MySQL/MariaDB recrée les logs de manière autonome. Cela peut prendre un peu de temps pour les grandes bases de données. La nouvelle valeur pour innodb_log_file_size est désormais active.