Problem
-------

It is [recommended](/display/en/System+Settings) to increase the value of `innodb_log_file_size` (depending on RAM) for a better performance of MySQL/MariaDB. After this change the service is restarted but only an error message appears:

[?](#)

`110216  9:48:41  InnoDB: Initializing buffer pool, size = 128.0M`

`110216  9:48:41  InnoDB: Completed initialization of buffer pool`

`InnoDB: Error: log` `file` `.``/ib_logfile0` `is of different size 0 5242880 bytes`

`InnoDB: than specified` `in` `the .cnf` `file` `0 33554432 bytes!`

`110216  9:48:41 [ERROR] Plugin` `'InnoDB'` `init` `function` `returned error.`

`110216  9:48:41 [ERROR] Plugin` `'InnoDB'` `registration as a STORAGE ENGINE failed.`

Solution
--------

Terminate the service in a clean manner and remove all existing logs when changing this option, as described in a more comprehensive [answer at StackExchange](http://dba.stackexchange.com/questions/1261/how-to-safely-change-mysql-innodb-variable-innodb-log-file-size):

[?](#)

`mysql -uroot -p -e``"SET GLOBAL innodb_fast_shutdown = 0"`

`sudo` `service mysql stop`

`sudo` `mv` `/var/lib/mysql/ib_logfile``[01]` `/tmp`

`sudo` `service mysql start`

MySQL/MariaDB creates the logs again automatically. This can take some time in bigger databases. The new value for `innodb_log_file_size` is now active.