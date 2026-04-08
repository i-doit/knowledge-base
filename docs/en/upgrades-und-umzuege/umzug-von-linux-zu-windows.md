---
title: Migration from Linux to Windows
description: "This article describes how to migrate your i-doit installation from Linux to a Windows Server."
icon: fontawesome/brands/linux
status:
lang: en
---

# Migration from Linux to Windows

This article describes how to migrate your i-doit installation from Linux to a Windows Server. Prerequisite: The Windows Server was set up with the [i-doit Windows Installer](../installation/manual-installation/microsoft-windows-server/index.md) .

## Preparations and Assumptions

!!! warning "Both systems must be on the same i-doit version!"

Before you start:

*   **Inform users** -- Notify all colleagues in advance about the migration and the planned downtime.
*   **Identify interfaces** -- Which third-party systems ([Nagios](../i-doit-add-ons/nagios.md), [((OTRS)) Community Edition](../automatisierung-und-integration/service-desk/otrscommunity-help-desk.md), [additional](../daten-konsolidieren/index.md)) access i-doit? Deactivate data access during the migration, running [Tasks](../automatisierung-und-integration/cli/index.md), [Backups](../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md), and monitoring.
*   **Windows side** -- Apache, PHP, and MariaDB are already configured by the Windows Installer. In the following, we use "MySQL" also for MariaDB. Transfer Linux configuration adjustments to the new system if applicable.
*   **Check services** -- DNS, SMTP, and LDAP/AD must be reachable on the new system.
*   **Credentials** -- Have the passwords for the MySQL system user (`root`) and the i-doit user (`idoit`) ready.

## Export Directory from Linux

Pack the i-doit directory into an archive:

```shell
sudo zip -r i-doit.zip /var/www/html/
```

Adjust the path to your installation. Transfer the ZIP file to the Windows Server, e.g., via `scp` (execute the command on the Windows Server):

```shell
scp -r user@linuxsystem:/var/www/html/i-doit.zip C:\
```

## Export Database from Linux

!!! warning "The following MariaDB versions cause an import error on Windows when performing an SQL dump:"
    - 10.5.25
    - 10.6.18
    - 10.11.8
    - 11.0.6
    - 11.1.5
    - 11.2.4
    - 11.4.2

    The listed versions insert a "Sandbox command" into the first line of the dump during an SQL dump.
    This means the dump can only be imported with the listed MariaDB versions. Since the MariaDB version included with the Windows installer is not one of the listed versions, you will encounter the error **`ERROR at line 1: Unknown command '\-'`** during import.
    We therefore recommend using a different MariaDB version for the dump that is not listed above!

Export the databases and transfer them to the Windows Server:

```shell
mysqldump -uroot -p idoit_system > /tmp/idoit_system.sql
mysqldump -uroot -p idoit_data > /tmp/idoit_data.sql
```

Transfer the SQL files:

```shell
scp -r user@linuxsystem:/tmp/idoit_system.sql C:\
scp -r user@linuxsystem:/tmp/idoit_data.sql C:\
```

The SQL files are now located at `C:\`.

## Set MariaDB Path in Windows

To be able to execute MySQL commands directly in the command prompt, add the MariaDB path to the environment variables:

1. Search for "Advanced system settings" via Windows search and click on **"Environment Variables..."**.

[![Umgebungsvariablen](../assets/images/de/upgrades-und-umzuege/umzug-von-linux-zu-windows/1-uvlzw.png)](../assets/images/de/upgrades-und-umzuege/umzug-von-linux-zu-windows/1-uvlzw.png)

2. In the new window, select the **"Path"** variable under system variables and click **"Edit"**:

[![Umgebungsvariablen](../assets/images/de/upgrades-und-umzuege/umzug-von-linux-zu-windows/2-uvlzw.png)](../assets/images/de/upgrades-und-umzuege/umzug-von-linux-zu-windows/2-uvlzw.png)

3. Create a new entry with the path to the MariaDB **bin** folder: **C:\ProgramData\MariaDB\bin**.

[![Umgebungsvariablen](../assets/images/de/upgrades-und-umzuege/umzug-von-linux-zu-windows/3-uvlzw.png)](../assets/images/de/upgrades-und-umzuege/umzug-von-linux-zu-windows/3-uvlzw.png)

After setting the path, you can use SQL commands in the command prompt. Restart the window if necessary.

## Migrate Data to Windows

Extract the ZIP file to the following directory and overwrite all files:

```shell
C:\ProgramData\i-doit\apache-2.4\htdocs
```

Then import the database. First, delete the existing databases on the Windows Server:

!!! info "The SQL commands can be executed via the MySQL Client (found via Windows search)"

```shell
DROP Database idoit_data;
DROP Database idoit_system;
```

Recreate the databases:

```shell
CREATE DATABASE idoit_data;
CREATE DATABASE idoit_system;
```

Import the databases from the old instance:

!!! info "For this, we switch to the normal Windows command prompt"

```shell
mysql -uroot -p idoit_data < C:\idoit_data.sql
mysql -uroot -p idoit_system < C:\idoit_system.sql
```

!!! danger "If the error **`ERROR at line 1: Unknown command '\-'`** occurs:"
    If the above error occurs, you performed the SQL dump with a MariaDB version that writes a "Sandbox Command" to the first line of the dump.
    This line can only be interpreted by certain MariaDB versions, which does not apply to the MariaDB version included with the Windows installer (see [list](#datenbank-aus-linux-exportieren)).
    The error-causing line is `/*!999999\- enable the sandbox mode */`, This must either be manually removed from the dump or you switch to a different MariaDB version and perform the dump again.

Grant the `idoit` user permissions for the new databases:

```shell
grant all privileges on idoit_system.* to idoit@localhost identified by 'mypasswd';
grant all privileges on idoit_data.* to idoit@localhost identified by 'mypasswd';
```

The instance has now been successfully migrated from Linux to Windows.

### Post-Processing

1. Perform tests and reactivate the interfaces to third-party tools.
2. Make sure that the [backups](../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md) are running.
3. Inform all colleagues that the IT documentation is available again.

The actual migration (without preparation and post-processing) usually takes no longer than two hours.
