---
title: Migration of an Installation under GNU/Linux
description: Migration of an Installation under GNU/Linux
icon: fontawesome/brands/linux
status:
lang: en
---

# Migration of an Installation under GNU/Linux

This article focuses on the general procedure to migrate an i-doit installation from one GNU/Linux to another one. The migration includes databases as well as files and directories.

## Preparation and Assumptions

!!! warning "Both systems must use the same i-doit version!<br>In the case of Red Hat-based operating systems, **argon2i** may have to be installed additionally"

You have to observe a few things to guarantee a smooth migration:

1. i-doit is installed on both servers in the same version.
2. Both systems were created with the idoit-install script.
3. Both systems use the same passwords for MariaDB and can be changed afterwards. If not, you can also use the **optional steps**.
4. We do not change the old system so that we can quickly return to the original state if the worst comes to the worst.
5. The commands shown are suitable for a current Debian GNU/Linux and should be adapted to the corresponding environment. **Blind execution of the commands should be avoided**

## Preparation of the New System

First of all, it is necessary to prepare the new systems as far as possible by observing the following:

1. The system requirements correspond to the version used, see the [Compatibility matrix](../installation/system-requirements.md#compatibility-matrix).
2. The [system settings](../installation/manual-installation/system-settings.md) have been configured on the new operating system.

## Closing down the old system

The old system should not be used productively during the migration process anymore:

1. Empty the **i-doit address (URL)** in the i-doit administration and set it again on the new system.
2. Downtimes are annoying, especially unexpected ones. The users of i-doit should have been informed in advance that the installation is moving and during which period it will be unavailable.
3. You should deactivate [automated access of third-party systems](../automation-and-integration/index.md).
4. Also [cronjobs](../automation-and-integration/cli/index.md) should be deactivated. In most cases, it is sufficient to comment out the command lines.
5. After the above mentioned points have been completed, you should stop the Apache Webserver:

    ```shell
    sudo systemctl stop apache2
    ```

## On the old system

<div class="steps" markdown>

1. First, the i-doit folder is packed into a file:

    === "ZIP"

        ```shell
        cd /var/www/html
        zip -rq /tmp/i-doit-migration.zip .
        ```

    === "or TAR"

        <!-- cSpell:disable -->
        ```shell
        cd /var/www/html
        tar -czvf /tmp/i-doit-migration.tar.gz .
        ```
        <!-- cSpell:enable -->

2. Dump the databases into a file and pack them with gz:

    <!-- cSpell:disable -->
    ```shell
    mysqldump -hlocalhost -uroot -p --all-databases | gzip -9 > /tmp/idoit-backup.sql.gz
    ```
    <!-- cSpell:enable -->

3. Then transfer the files and the database dump to the new host:

    === "ZIP"

        <!-- cSpell:disable -->
        ```shell
        scp /tmp/i-doit-migration.zip user@newsystem:/tmp/
        scp /tmp/idoit-backup.sql.gz user@newsystem:/tmp/
        ```

    === "or TAR"

        ```shell
        scp /tmp/i-doit-migration.tar.gz user@newsystem:/tmp/
        scp /tmp/idoit-backup.sql.gz user@newsystem:/tmp/
        ```
        <!-- cSpell:enable -->

</div>

## Move to new system

<div class="steps" markdown>

1. Unzip the files and change to the html folder beforehand:

    === "ZIP"

        ```shell
        cd /var/www/html
        unzip /tmp/i-doit-migration.zip
        ```

    === "or TAR"

        <!-- cSpell:disable -->
        ```shell
        cd /var/www/html
        tar -xzvf /tmp/i-doit-migration.tar.gz
        ```
        <!-- cSpell:enable -->

2. Import database:

    <!-- cSpell:disable -->
    ```shell
    gunzip < /tmp/idoit-backup.sql.gz | mysql -hlocalhost -uroot -p
    ```
    <!-- cSpell:enable -->

3. If the file system rights are no longer correct:

    ```shell
    cd /var/www/html
    sudo chown www-data:www-data -R .
    sudo find . -type d -name \* -exec chmod 775 {} \;
    sudo find . -type f -exec chmod 664 {} \;
    ```

4. i-doit stores internal caches under the `temp/` directory. The contents should be completely removed. When i-doit is used for the first time, the caches are created automatically:

    ```shell
    sudo rm -r temp/*
    ```

5. It should be checked whether the .htaccess file has been copied:

    ```shell
    ls -lha /var/www/html/.htaccess
    ```

</div>

## OPTIONAL: Use other database passwords

If other passwords are used for the database, the following steps are also necessary. In this example, we use the following access data:
<!-- cSpell:disable -->
| Benutzer           | Passwort    |
| ------------------ | ----------- |
| System DB user     | `root`      |
| System DB password | `root`      |
| i-doit DB user     | `idoituser` |
| i-doit DB password | `idoitpass` |
<!-- cSpell:enable -->
<div class="steps" markdown>

1. To establish access to the [Admin-Center](../system-administration/admin-center.md), the `config.inc.php` must be adapted:

    ```shell
    nano /var/www/html/src/config.inc.php
    ```

2. Adjust and save the values under `$g_db_system` for `user` and `pass`.
3. Log in to the Admin-Center via the URL `http://idoiturl/admin`, select the client in the **Tenants** tab and click on **Edit**.
4. Enter the new `Username` and the new `Password` as well as `Retype password` in the **MySQL settings** and save.
5. Log out of the Admin-Center and log in to i-doit.

</div>

## Follow-up Work

1. Log into the Admin-Center and check the **Licensing** and **Encryption method**.
2. Afterwards, you should adapt **DNS entries**, **IP addresses**, **host names** etc., so that i-doit can be accessed as usual.
3. Now **interfaces** to third-party systems can be reactivated. The functions should be checked.
4. Reactivate **cronjobs** and test them.
5. Set up [**backups**](../maintenance-and-operation/backup-and-recovery/index.md) and test them.
6. When the Web GUI reacts as usual and all data are available in i-doit, the migration was *successful*.
7. Doing the usual [security measures](../maintenance-and-operation/security-and-protection.md).
