---
title: Update PHP and MariaDB for i-doit Windows
description: Instructions for updating PHP and MariaDB for i-doit Windows installations
icon: material/microsoft-windows
status:
lang: en
---

In this article we will show you how to update PHP and MariaDB for your [i-doit Windows](../installation/manual-installation/microsoft-windows-server/index.md) installation.

## Update packages

In order to successfully update PHP and MariaDB, we need the correct update packages.

### PHP 8.2

In order to successfully update to PHP8.2, the update is required as a zip file.
The corresponding package can be downloaded here (64bit version): [VS16 x64 Thread Safe](https://windows.php.net/download/)

!!! warning “It must be a zip file and the ‘Thread Safe’ version”

### MariaDB 10.11

To successfully update from MariaDB 10.11 we need the [MariaDB Server 10.11.1 RC Version](https://mariadb.org/download/?t=mariadb&o=true&p=mariadb&r=10.11.1&os=windows&cpu=x86_64&pkg=msi&mirror=archive)

??? info “The already selected options must be available!”

[![MariaDB selected options](../assets/images/en/upgrades-and-migrations/php-mariadb-update/1-pum.png)](../assets/images/en/upgrades-and-migrations/php-mariadb-update/1-pum.png)

## Update MariaDB and PHP

!!! warning “Be sure to make a [backup](../maintenance-and-operation/backup-and-recovery/index.md) or a snapshot before the following steps!”

### Stopping the Apache service

First, the Apache2 service must be stopped. This can be done either via the “Services” window or via a console command.

**“Services” window:**

Search for the **Apache2.4** service among the services displayed and click on **"Stop the service ”**.

[![apache service stop window](../assets/images/en/upgrades-and-migrations/php-mariadb-update/2-pum.png)](../assets/images/en/upgrades-and-migrations/php-mariadb-update/2-pum.png)

**Console:**

You can open the Windows console by pressing **Windows key + R** and entering **cmd**.
Then enter the following **command**:

```winbatch
C:\ProgramData\i-doit\apache-2.4\bin\httpd.exe -k stop
```

### Update MariaDB

After the Apache2.4 service has been successfully stopped, the MariaDB msi file can now be executed to start the update.

After you have agreed to the license, select the option **"Do not create a new database. Optionally upgrade existing instances “**.

[![upgrade existing instances](../assets/images/en/upgrades-and-migrations/php-mariadb-update/3-pum.png)](../assets/images/en/upgrades-and-migrations/php-mariadb-update/3-pum.png)

Then change the path to **“C:\ProgramData\”** and then click on **"Install ”**

[![ProgramData](../assets/images/en/upgrades-and-migrations/php-mariadb-update/4-pum.png)](../assets/images/en/upgrades-and-migrations/php-mariadb-update/4-pum.png)

Finally, the option “Launch Wizard to Upgrade existing MariaDB or MySQL services” must be set.

[![check mark](../assets/images/en/upgrades-and-migrations/php-mariadb-update/5-pum.png)](../assets/images/en/upgrades-and-migrations/php-mariadb-update/5-pum.png)

In the new window that opens up, select the MySQL service and click on **Upgrade**.

[![upgrade existing instances](../assets/images/en/upgrades-and-migrations/php-mariadb-update/6-pum.png)](../assets/images/en/upgrades-and-migrations/php-mariadb-update/6-pum.png)

MariaDB has now been successfully upgraded to MariaDB 10.11.

### Updating PHP

Updating PHP is much easier than MariaDB.

First a backup of the PHP.ini must be made, here it is sufficient to copy the file from the `C:\ProgramData\i-doit\php\` folder and paste it into another folder.

!!! warning “The Apache2.4 service must be stopped for the following step!”

Then we unzip the contents of the previously downloaded ZIP file into the `C:\ProgramData\i-doit\php\`folder and replace the old PHP files.

After the content has been successfully added, the backup of the PHP.ini file can also be added to the folder and replaced so that the old PHP settings are available again.

Finally, the Apache2.4 service must be switched on again and PHP has been successfully updated.

### Check

Check whether the update was successful by checking the versions in the administration under **System Config Check**.

[![check version](../assets/images/en/upgrades-and-migrations/php-mariadb-update/7-pum.png)](../assets/images/en/upgrades-and-migrations/php-mariadb-update/7-pum.png)
