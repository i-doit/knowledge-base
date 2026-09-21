---
title: Migration from XAMPP to the i-doit Windows Installer
description: "This article describes how to migrate an i-doit installation running under XAMPP on Windows to a Windows Server set up with the i-doit Windows Installer."
icon: material/microsoft-windows
status:
lang: en
---

# Migration from XAMPP to the i-doit Windows Installer

This article describes how to migrate an i-doit installation running under [XAMPP](../installation/manual-installation/microsoft-windows-server/idoit-via-XAMPP.md) on Windows to a Windows Server set up with the [i-doit Windows Installer](../installation/manual-installation/microsoft-windows-server/index.md).
The procedure is the same as for the [migration from Linux to Windows](migration-linux-to-windows.md): the i-doit directory and the two databases are exported from the old system and imported on the new one.
The Windows Installer replaces the XAMPP stack, so you no longer maintain Apache, PHP and MariaDB yourself.

## Preparations and Assumptions

!!! warning "Both systems must be on the same i-doit version!"
    The Windows Installer always installs the current i-doit version.
    Update your XAMPP installation to this version first, following the [update guide](update-guide.md).
    Observe the [system requirements](../installation/system-requirements.md) of the target version, in particular the PHP version of your XAMPP package.

Before you start:

*   **Create a backup**: Create a [backup](../maintenance-and-operation/backup-and-restore/index.md) or a snapshot of the XAMPP system.
*   **Inform users**: Notify all colleagues in advance about the migration and the planned downtime.
*   **Identify interfaces**: Which third-party systems ([Nagios](../i-doit-add-ons/nagios.md), [((OTRS)) Community Edition](../automation-and-integration/service-desk/otrscommunity-help-desk.md), [additional](../consolidate-data/index.md)) access i-doit? Deactivate data access during the migration, running [Tasks](../automation-and-integration/cli/index.md), [Backups](../maintenance-and-operation/backup-and-restore/index.md) and monitoring.
*   **Target system**: We recommend a new Windows Server on which the Windows Installer has already been run. Apache, PHP and MariaDB are then already configured. If you want to reuse the XAMPP server, XAMPP must be stopped completely and must not start automatically before you run the Windows Installer, because XAMPP and the Windows Installer both use port 80 for Apache and port 3306 for MariaDB.
*   **Paths and URL**: Under XAMPP, i-doit is usually located in `C:\xampp\htdocs\idoit` and is reached via `http://<server>/idoit/`. The Windows Installer places i-doit directly in the document root `C:\ProgramData\i-doit\apache-2.4\htdocs`, so the new URL is `http://<server>/`. Bookmarks, API clients and connectors must be adjusted accordingly.
*   **Credentials**: Have the password of the MySQL system user (`root`) of your XAMPP installation ready. The database user (usually `idoit`), its password and the name of the system database are in the file `src\config.inc.php` of your i-doit directory (`$g_db_system`). The name of the tenant database is in the table `isys_mandator` of the system database. In this article we use `idoit_system` and `idoit_data`; adjust the names to your installation. In the following, we use "MySQL" also for MariaDB.

## Export Data from XAMPP

1. **Stop Apache**: Stop the Apache module in the XAMPP Control Panel so no more requests arrive. MySQL continues running.
2. **Back up files**: Compress the i-doit directory `C:\xampp\htdocs\idoit` as `C:\i-doit.zip`, e.g. via the context menu **Send to > Compressed (zipped) folder**.
3. **Export databases**: Open the command prompt, navigate to `C:\xampp\mysql\bin\` and execute:

        mysqldump.exe -uroot -p idoit_system > C:\idoit_system.sql
        mysqldump.exe -uroot -p idoit_data > C:\idoit_data.sql

4. **Stop MySQL**: Stop the MySQL module in the XAMPP Control Panel.
5. **Transfer the files**: Copy `C:\i-doit.zip`, `C:\idoit_system.sql` and `C:\idoit_data.sql` to `C:\` on the new Windows Server, e.g. via a network share or Remote Desktop.

!!! info "Check the first line of the dump"
    Some MariaDB versions write the line `/*!999999\- enable the sandbox mode */` into the first line of a dump, which the MariaDB shipped with the Windows Installer cannot import (see the [list of affected versions](migration-linux-to-windows.md#export-database-from-linux)).
    The MariaDB 10.4 included in the current XAMPP packages is not affected.
    If your dump starts with this line, delete the line in an editor before the import.

## Import Data on the Windows Installer System

All commands are executed in the command prompt of the new Windows Server (press ++windows+r++, type `cmd` and press Enter).
The Windows Installer uses the following [credentials](../installation/manual-installation/microsoft-windows-server/index.md#credentials): MariaDB `root` with the password `idoit`.

### Stop Apache

```batch
C:\ProgramData\i-doit\apache-2.4\bin\httpd.exe -k stop
```

### Files

Extract `C:\i-doit.zip` into the directory `C:\ProgramData\i-doit\apache-2.4\htdocs` and overwrite all existing files.
Make sure that the contents of the `idoit` folder land directly in `htdocs`, i.e. `C:\ProgramData\i-doit\apache-2.4\htdocs\index.php` exists and not `C:\ProgramData\i-doit\apache-2.4\htdocs\idoit\index.php`.
Then delete the contents of the folder `C:\ProgramData\i-doit\apache-2.4\htdocs\temp\`, which only contains cached files.

### Database

Log in to the MySQL client:

```batch
C:\ProgramData\MariaDB\bin\mysql.exe -uroot -p
```

Delete the databases created by the Windows Installer and create them again:

```sql
DROP DATABASE idoit_data;
DROP DATABASE idoit_system;
CREATE DATABASE idoit_data;
CREATE DATABASE idoit_system;
```

Grant the database user from `src\config.inc.php` access to the new databases. Replace `mypasswd` with the password from `src\config.inc.php`:

```sql
GRANT ALL PRIVILEGES ON idoit_system.* TO idoit@localhost IDENTIFIED BY 'mypasswd';
GRANT ALL PRIVILEGES ON idoit_data.* TO idoit@localhost IDENTIFIED BY 'mypasswd';
```

Exit the MySQL client with `exit;` and import the dumps from the XAMPP installation:

```batch
C:\ProgramData\MariaDB\bin\mysql.exe -uroot -p idoit_system < C:\idoit_system.sql
C:\ProgramData\MariaDB\bin\mysql.exe -uroot -p idoit_data < C:\idoit_data.sql
```

!!! danger "If the error **`ERROR at line 1: Unknown command '\-'`** occurs:"
    The dump starts with the sandbox line described above.
    Remove the first line `/*!999999\- enable the sandbox mode */` from the SQL file and repeat the import.

Finally, check whether the settings still contain absolute paths of the XAMPP installation, e.g. for the upload directories:

```sql
SELECT isys_settings__key, isys_settings__value FROM idoit_system.isys_settings WHERE isys_settings__value LIKE '%xampp%';
SELECT isys_settings__key, isys_settings__value FROM idoit_data.isys_settings WHERE isys_settings__value LIKE '%xampp%';
```

Relative paths like `upload/files/` and `upload/images/` are fine. Adjust absolute paths to the new directory `C:\ProgramData\i-doit\apache-2.4\htdocs\`.

### Configuration

If you adjusted `php.ini` or `my.ini` under XAMPP, transfer the settings you still need to the [configuration files](../installation/manual-installation/microsoft-windows-server/index.md#configuration) of the Windows Installer.
Do not copy the XAMPP files as a whole, because the paths in them refer to `C:\xampp`.

### Start Apache

```batch
C:\ProgramData\i-doit\apache-2.4\bin\httpd.exe -k start
```

Open `http://localhost/` on the new server and log in. The instance has now been migrated from XAMPP to the Windows Installer.

## Post-Processing

1. **Scheduled tasks**: Adjust tasks in the Windows Task Scheduler that call `console.php` (e.g. LDAP synchronization, notifications). They must use `C:\ProgramData\i-doit\php\php.exe` and the new i-doit directory instead of `C:\xampp\php\php.exe` and `C:\xampp\htdocs\idoit`.
2. **URL**: Inform the users about the new URL without `/idoit/` and adjust API clients and connectors.
3. **HTTPS**: If the XAMPP installation was reachable via HTTPS, set up [HTTPS](../installation/manual-installation/microsoft-windows-server/index.md#set-up-https-optional) for the Windows Installer as well.
4. **Antivirus**: Create the [exceptions](../installation/manual-installation/microsoft-windows-server/index.md#improved-website-loading) for the new i-doit directories.
5. Perform tests and reactivate the interfaces to third-party tools.
6. Make sure that the [backups](../maintenance-and-operation/backup-and-restore/index.md) point to the new directories and are running.
7. Once everything works, uninstall XAMPP or remove the old server.

The actual migration (without preparation and post-processing) usually takes no longer than two hours.

## Further Readings

*   [Microsoft Windows Server](../installation/manual-installation/microsoft-windows-server/index.md): installation, configuration files and credentials of the Windows Installer
*   [Migration from Linux to Windows](migration-linux-to-windows.md): the same procedure with a Linux system as source
*   [Update PHP and MariaDB on Windows](update-php-and-mariadb-for-windows.md): keeping the Windows Installer stack up to date
