---
title: Migrating an installation on GNU/Linux
description: "In this article, we describe the general procedure for migrating an i-doit installation from one GNU/Linux system to another."
icon: fontawesome/brands/linux
status:
lang: en
---

# Migrating an installation on GNU/Linux

In this article, we describe the general procedure for migrating an i-doit installation from one GNU/Linux system to another. The migration includes both the databases and the files and directories.

## Preparations and Assumptions

!!! warning "Both systems must use the same i-doit version!<br>On Red Hat based operating systems, **argon2i** may need to be installed additionally"

A few things need to be considered to ensure a smooth migration:

1. i-doit is installed on both servers in the same version.
2. Both systems were created with the idoit-install script.
3. Both systems use the same passwords for MariaDB; these can be changed afterwards. If not, also use the **optionally steps**.
4. We do not modify the old system so that we can quickly return to the original state if needed.
5. The commands shown are suitable for a current Debian GNU/Linux and should be adapted to the respective environment. **Blindly executing commands should be avoided**.

## Prepare New System

First, the new system should be prepared as much as possible:

1. The system requirements match the version in use; see the [compatibility matrix](../installation/systemvoraussetzungen.md#kompatibilitatsmatrix).
2. Customized [system settings](../installation/manuelle-installation/systemeinstellungen.md) have been configured.

## Decommission Old System

The old system should no longer be used productively during the migration:

1. Clear the **i-doit address (URL)** in the i-doit Administration and set it again on the new system.
2. Downtimes are annoying, especially unexpected ones. Users of i-doit should be informed in advance that the installation is being migrated and during which period it will be unavailable.
3. [Automated access from third-party systems](../automatisierung-und-integration/index.md) should be deactivated.
4. [Cron jobs](../automatisierung-und-integration/cli/index.md) should also be deactivated. It is usually sufficient to comment out the command lines.
5. After ensuring the above points, the Apache web server should be stopped:

    ```shell
    sudo systemctl stop apache2
    ```

## On the Old System

<div class="steps" markdown>

1. First, pack the i-doit folder into a file:

    === "ZIP"

        ```shell
        cd /var/www/html
        zip -rq /tmp/i-doit-migration.zip .
        ```

    === "oder TAR"

        <!-- cSpell:disable -->
        ```shell
        cd /var/www/html
        tar -czvf /tmp/i-doit-migration.tar.gz .
        ```
        <!-- cSpell:enable -->

2. Save the databases to a file ("dump") and compress with gz:

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

    === "oder TAR"

        ```shell
        scp /tmp/i-doit-migration.tar.gz user@newsystem:/tmp/
        scp /tmp/idoit-backup.sql.gz user@newsystem:/tmp/
        ```
        <!-- cSpell:enable -->

</div>

## Migration to New System

<div class="steps" markdown>

1. Extract files after switching to the html folder:

    === "ZIP"

        ```shell
        cd /var/www/html
        unzip /tmp/i-doit-migration.zip
        ```

    === "oder TAR"

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

3. If file system permissions are no longer correct:

    ```shell
    cd /var/www/html
    sudo chown www-data:www-data -R .
    sudo find . -type d -name \* -exec chmod 775 {} \;
    sudo find . -type f -exec chmod 664 {} \;
    ```

4. i-doit stores internal caches in the `temp/` directory. The contents should be completely removed. The caches are automatically created on first use of i-doit:

    ```shell
    sudo rm -r temp/*
    ```

5. It should be checked whether the .htaccess file was copied:

    ```shell
    ls -lha /var/www/html/.htaccess
    ```

</div>

## OPTIONAL: Use Different Database Passwords

If different passwords are used for the database, the following additional steps are necessary. In this example, we use the following credentials:
<!-- cSpell:disable -->
| User               | Password    |
| ------------------ | ----------- |
| System DB User     | `root`      |
| System DB Password | `root`      |
| i-doit DB User     | `idoituser` |
| i-doit DB Password | `idoitpass` |
<!-- cSpell:enable -->
<div class="steps" markdown>

1. To establish access to the [Admin Center](../administration/admin-center.md), the `config.inc.php` must be modified:

    ```shell
    nano /var/www/html/src/config.inc.php
    ```

2. Adjust and save the values under `$g_db_system` for `user` and `pass`.
3. Log in to the Admin Center via the URL `http://idoiturl/admin`, select the tenant in the **Tenants** tab, and click **Edit**.
4. Enter the new `Username` and new `Password` as well as `Retype password` in the **MySQL settings** and save.
5. Log out of the Admin Center and log in to i-doit.

</div>

## Post-Processing

1. Log in to the Admin Center and check the **Licensing** and the **Encryption method**.
2. **DNS entries**, **IP addresses**, **hostnames**, etc. should be adjusted afterwards so that i-doit is accessible as usual.
3. **Interfaces** to third-party systems can now be reactivated. The functions should be tested.
4. **Cron jobs** should be reactivated and tested.
5. [**Backups**](../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md) should be set up and tested.
6. If the WebGUI also responds as usual and all data in i-doit is apparently present, the migration was **successful**.
7. Perform standard [security measures](../wartung-und-betrieb/sicherheit-und-schutz.md).
