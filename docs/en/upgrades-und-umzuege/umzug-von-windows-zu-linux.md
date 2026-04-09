---
title: Migration from Windows to Linux
description: "This article describes how to migrate your i-doit installation from Windows to GNU/Linux -- without extended downtime and without data loss."
icon: material/microsoft-windows
status:
lang: en
---

This article describes how to migrate your i-doit installation from Windows to GNU/Linux -- without extended downtime and without data loss.

## Preparations and Assumptions

!!! warning "Both systems must be on the same i-doit version!"

Before you start:

*   **Inform users** -- Notify all colleagues in advance about the migration and the planned downtime.
*   **Identify interfaces** -- Which third-party systems ([Nagios](../i-doit-add-ons/nagios.md), [((OTRS)) Community Edition](../automatisierung-und-integration/service-desk/otrscommunity-help-desk.md), [additional](../daten-konsolidieren/index.md)) access i-doit? Deactivate data access during the migration, running [Tasks](../automatisierung-und-integration/cli/index.md), [Backups](../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md) and monitoring.
*   **Windows side** -- This example assumes a XAMPP setup ([Apache Friends](https://www.apachefriends.org/)) . In the following, we use "MySQL" also for MariaDB. Configuration adjustments should be transferred to the new system.
*   **Linux side** -- The new system must be [prepared](../installation/manuelle-installation/index.md) and all [system requirements](../installation/systemvoraussetzungen.md) and [settings](../installation/manuelle-installation/systemeinstellungen.md) must be fulfilled. DNS, SMTP, and LDAP/AD must be reachable.
*   **Credentials** -- Have the passwords for the MySQL system user (`root`) and the i-doit user (`idoit`) ready.

## Export Data from Windows

1. **Stop Apache** -- Shut down the web server so no requests arrive. MySQL continues running.
2. **Back up files** -- Compress the i-doit directory (e.g. `C:\xampp\htdocs\`) as `i-doit.zip`.
3. **Export databases** -- Open the command prompt, navigate to `C:\xampp\mysql\bin\` and execute:

        mysqldump.exe -uidoit -p --databases idoit_system idoit_data > i-doit.sql

4. **Stop MySQL** -- End the MySQL process.

## Migrate Data to GNU/Linux

Copy the ZIP file and the SQL file to the new server (e.g. per [WinSCP](http://winscp.net/eng/docs/lang:de)). Connect via SSH (e.g. [Putty](http://www.putty.org/)) and work on the command line. Apache, MySQL, and PHP are already [installed](../installation/index.md) and configured.

### Database

1. Import the database:

        mysql -uroot -p < i-doit.sql

###### If you receive this error message when importing the database "Can't create table \idoit\_data\.\table\_name\ (errno: 140 "Wrong create options")". The solution can be found [HERE](../administration/troubleshooting/cant-create-table.md)

2. Set up the i-doit user:

        mysql -uroot -p

    Execute the following SQL commands:

        grant all privileges on idoit_system.* to idoit@localhost identified by 'mypasswd';
        grant all privileges on idoit_data.* to idoit@localhost identified by 'mypasswd';

    Test the connection with the new credentials:

        mysql -uidoit -p
        use idoit_system;

3. Check the tenant credentials:

        select * from isys_mandator;

4. Check for absolute Windows paths in the database (e.g. `system.dir.file-upload` and `system.dir.image-upload` in `isys_settings`):

        select * from isys_settings

    Relative paths like upload/files/ and upload/images/ are legitimate.

5. Exit the MySQL client with `CTRL+D` or `exit;`.

### Files

1. Extract the ZIP file to the target directory (e.g. `/var/www/html/`):

        sudo unzip i-doit.zip

2. Set permissions and clean up:

        sudo chown www-data:www-data -R .
        sudo find . -type d -name \* -exec chmod 775 {} \;
        sudo find . -type f -exec chmod 664 {} \;
        sudo chmod 774 controller tenants import updatecheck *.sh
        sudo rm -r temp/*

    If necessary, delete files that still originate from the XAMPP installation.

Now test whether i-doit is accessible in the browser via the new URL. If not, analyze the previous steps for errors.

### Cron Jobs

Transfer your Windows tasks to Linux cron jobs. These are typically recurring tasks of the [CLI](../automatisierung-und-integration/cli/index.md). If you have not set up any tasks yet, do so now.

### Post-Processing

1. Perform tests and reactivate the interfaces to third-party tools.
2. Make sure that the [backups](../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md) are running.
3. Inform all colleagues that the IT documentation is available again.

The actual migration (without preparation and post-processing) usually takes no longer than two hours.
