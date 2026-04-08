---
title: MariaDB Database Corruption
description: "MariaDB Database Corruption Errors"
icon:
status:
lang: en
---

[![mariadb-database-corruption.png](../../assets/images/de/administration/troubleshooting/mariadb-database-corruption.png)](../../assets/images/de/administration/troubleshooting/mariadb-database-corruption.png)

---
title: MariaDB Database Corruption Errors
description: MariaDB errors and how to resolve them
icon:
status:
lang: en
---

This article describes typical MariaDB errors after database corruption and shows a possible solution approach.

## Error messages

The following error messages frequently occur after a power outage, an aborted update, or an operating system update — they usually indicate database corruption:

-   Upgrade after a crash is not supported
-   Generic Database error
-   Database corrupt
-   Failed to start MariaDB

## Possible solution approach

!!! warning "We assume no responsibility for these solution approaches and cannot guarantee that the errors will be fixed. Make sure you have created a backup or snapshot beforehand."

The cause often lies in damaged InnoDB log files (`ib_logfile0` and `ib_logfile1`). These files are system tablespaces for the InnoDB infrastructure. More information can be found [here](https://dba.stackexchange.com/questions/27083/what-exactly-are-iblog-files-in-mysql).

### Step-by-step guide

1. Connect to your server via SSH with root privileges.
2. Create a backup copy of both files:

    ```shell
    sudo cp /var/lib/mysql/ib_logfile0 /var/lib/mysql/ib_logfile0.bak
    sudo cp /var/lib/mysql/ib_logfile1 /var/lib/mysql/ib_logfile1.bak
    ```

3. Rename the files or move them to a different directory:

    ```shell
    sudo mv /var/lib/mysql/ib_logfile0 /tmp/
    sudo mv /var/lib/mysql/ib_logfile1 /tmp/
    ```

4. Restart the MySQL/MariaDB service:

    ```shell
    sudo service mysql stop
    sudo service mysql start
    ```

5. Check the service status:

    ```shell
    systemctl status mariadb.service
    ```

After these steps, the errors should be resolved.
