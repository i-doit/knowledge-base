---
title: Update PHP and MariaDB on Windows
description: Guide for updating PHP and MariaDB for i-doit Windows installations. Included PHP versions are 8.2, 8.3, and 8.4. Included MariaDB versions are MariaDB 10.11. Here we show the steps needed to correctly upgrade the PHP and MariaDB versions.
icon: material/microsoft-windows
status:
lang: en
---

In this article, we show you how to update PHP and MariaDB for your [i-doit Windows](../installation/manual-installation/microsoft-windows-server/index.md) installation.

## Update Packages

To successfully update PHP and MariaDB, we need the correct update packages.

### Download PHP Update Package

To successfully update to one of the PHP 8.X versions, the update is needed as a ZIP file.
The appropriate package can be downloaded here: [x64 Thread Safe](https://windows.php.net/download/)

!!! warning "It must be a ZIP file and the 'x64 Thread Safe' version"

Check beforehand whether the PHP version is compatible with your i-doit version!
Here you can find our [compatibility matrix](../installation/systemvoraussetzungen.md#kompatibilitatsmatrix).

### Download MariaDB 10.11 Installer

To successfully update to MariaDB 10.11, we need the [MariaDB Server 10.11.1 RC Version](https://mariadb.org/download/?t=mariadb&o=true&p=mariadb&r=10.11.1&os=windows&cpu=x86_64&pkg=msi&mirror=archive)

??? info "The already selected options must be present!"

[![MariaDB selektierte Optionen](../assets/images/de/upgrades-und-umzuege/php-mariadb-update/1-pum.png)](../assets/images/de/upgrades-und-umzuege/php-mariadb-update/1-pum.png)

## Update MariaDB and PHP

!!! warning "Make sure to create a [backup](../wartung-und-betrieb/daten-sichern-und-wiederhfirstllen/index.md) or a snapshot before the following steps!"

### Stop Apache Service

First, the Apache2 service must be stopped. This can be done either via the "Services" window or via a console command.

**"Services" window:**

Find the **Apache2.4** service among the displayed services and click **"Stop the service"**

[![Apache Service stoppen Fenster](../assets/images/de/upgrades-und-umzuege/php-mariadb-update/2-pum.png)](../assets/images/de/upgrades-und-umzuege/php-mariadb-update/2-pum.png)

**Console:**

Press **Windows key + R**, type **cmd**, and press Enter to open the Windows console.
Then enter the following **command**:

```winbatch
C:\ProgramData\i-doit\apache-2.4\bin\httpd.exe -k stop
```

### Update MariaDB

After the Apache2.4 service has been successfully stopped, the MariaDB MSI file can now be executed to start the update.

After agreeing to the license, select the option **"Do not create a new database. Optionally upgrade existing instances"**.

[![upgrade existing instances](../assets/images/de/upgrades-und-umzuege/php-mariadb-update/3-pum.png)](../assets/images/de/upgrades-und-umzuege/php-mariadb-update/3-pum.png)

Then change the path to **"C:\ProgramData\"** and click **"Install"**

[![ProgramData](../assets/images/de/upgrades-und-umzuege/php-mariadb-update/4-pum.png)](../assets/images/de/upgrades-und-umzuege/php-mariadb-update/4-pum.png)

Finally, the option "Launch Wizard to Upgrade existing MariaDB or MySQL services" must be set.

[![Haken](../assets/images/de/upgrades-und-umzuege/php-mariadb-update/5-pum.png)](../assets/images/de/upgrades-und-umzuege/php-mariadb-update/5-pum.png)

In the new window that opens, select the MySQL service and click **"Upgrade"**.

[![upgrade existing instances](../assets/images/de/upgrades-und-umzuege/php-mariadb-update/6-pum.png)](../assets/images/de/upgrades-und-umzuege/php-mariadb-update/6-pum.png)

!!! info "If the upgrade window does not appear, you can manually find and run the MariaDB 10.11 Upgrade Wizard EXE at **C:\ProgramData\MariaDB10.11\bin**."

MariaDB has now been successfully updated to MariaDB 10.11.

### Update PHP

Updating PHP is significantly easier.

First, a backup of the PHP.ini must be made. It is sufficient to copy the file from the `C:\ProgramData\i-doit\php\` folder and paste it into another folder.

!!! warning "The Apache2.4 service must be stopped for the following step!"

Then extract the contents of the previously downloaded ZIP file into the `C:\ProgramData\i-doit\php\` folder, replacing the old PHP files.

After the contents have been successfully inserted, the backup of the PHP.ini file can also be inserted into the folder and replaced so that the old PHP settings are restored.

Finally, the Apache2.4 service must be restarted, and PHP is now successfully updated.

### Verify

Finally, verify that the update was successful by checking the versions in the Administration under **"System Config Check"**

[![check version](../assets/images/de/upgrades-und-umzuege/php-mariadb-update/7-pum.png)](../assets/images/de/upgrades-und-umzuege/php-mariadb-update/7-pum.png)
