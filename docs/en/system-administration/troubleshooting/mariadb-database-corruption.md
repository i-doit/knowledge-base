---
title: MariaDB database corruption errors
description: MariaDB database corruption errors and how to solve them
icon:
status:
lang: en
---

## Error messages

The following error messages can occur under various circumstances. Due to a power failure while a new update was pending, or during an update of the operating system, these errors are usually caused by database corruption.

-   Upgrade after a crash is not supported
-   Generic database error
-   Database corrupt
-   Failed to start MariaDB

## Possible solution

!!! warning "We assume no responsibility for these solutions and cannot guarantee that the errors will be solved by the solutions! Be sure to create a backup or snapshot beforehand"

These errors can be fixed by moving the database files (ib_logfile0 and ib_logfile1) to another location.
These files are system tablespaces for the InnoDB infrastructure and contain important classes for InnoDB.
More information about these files can be found [**here**](https://dba.stackexchange.com/questions/27083/what-exactly-are-iblog-files-in-mysql).

Before you follow the steps below, you should make a copy of both files so that you can restore them in case of errors.

1. Login to server via SSH with root access.
2. Navigate to /var/lib/mysql.
3. If you see files like, ib_logfile0 and ib_logfile1, rename or move them to some other folder.
4. Stop and start the MySQL service

    ```shell
    sudo service mysql stop
    sudo service mysql start
    ```

5. check the MariaDB service status

    ```shell
    systemctl status mariadb.service
    ```

After following these steps, the errors should not occur again.
