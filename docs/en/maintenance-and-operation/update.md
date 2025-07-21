# Update i-doit

When working with i-doit, you should always use the newest version. Minor releases always contain numerous bug fixes, while major releases add new features and improve already existing functionalities. Minor updates are released approximately every four weeks and major updates every six months. The update can be [performed via the web interface of i-doit](./update.md), as long as an internet connection is available (and where applicable, via HTTP-proxy). Alternatively the update can be [prepared via console](./update.md) and then be continued in the web interface.

=== "Skip releases version >=20"
    !!! attention "Skip releases >= version 20"
        If you want to jump directly to a newer version e.g. 26, you can download the latest update package from the [customer portal](../system-administration/customer-portal.md) and unpack it in the i-doit folder on the i-doit host. You can find the necessary steps [here](update.md#update-prepared-via-the-console).
        From version **25** with [Hotfix](../system-administration/hotfixes/hotfix-archive/index.md), version 27 is also offered for download during the update check.

=== "Skip releases version <= 1.19"
    !!! attention "Skip releases version <= 1.19"
        If version 1.13.1 is currently installed and version 1.13.3 is already available, only the next higher version - i.e. 1.13.2 - will still be displayed. However, minor releases can generally be skipped. Nevertheless, all minor releases will be installed one by one until the latest version is reached. If you want to jump directly to version 1.13.3, you can download the latest package from the customer portal and unpack it on the i-doit host. You can find the necessary steps here in the lower part of the article.

!!! warning "Backup"
    Before updating it is essential to create a [backup](./backup-and-recovery/index.md).

!!! attention "Writing permissions"
    If an error message appears while downloading and extracting, it is often the case that the Apache Webserver has no writing permissions for the path in which i-doit is installed. See [here](#update-prepared-via-the-console)

## Update via the web interface

The update can be accessed either through **Administration → [Tenant-Name] management** by clicking on the **i-doit update** button near the headline or via the quicklaunch widget in the dashboard or through the URL <http://i-doit-host/i-doit/?load=update>.

[![Update via Dashboard](../assets/images/en/maintenance-and-operation/update/1-update.png)](../assets/images/en/maintenance-and-operation/update/1-update.png)

After launching the program, a separate interface will open to check the current status of your system. If you encounter any problems, please refer to our . [system requirements](../installation/system-requirements.md) section and [tenant management](../system-administration/administration/tenant-management/index.md). After adjusting the environment, everything should be checked with a green mark or marked with an "OK".

### Step 1: i-doit update and compatibility check

[![i-doit update](../assets/images/en/maintenance-and-operation/update/2-update.png)](../assets/images/en/maintenance-and-operation/update/2-update.png)

### Step 2: Available updates

In the this step, all available update packages are displayed. In our example i-doit version 25 is installed and can therefore only be updated to the same version.

[![Available updates](../assets/images/en/maintenance-and-operation/update/3-update.png)](../assets/images/en/maintenance-and-operation/update/3-update.png)

By clicking **Check for a new version** you can check whether a newer package is available. For this purpose, you require an internet connection.<br>
If a new version is available the update package can be downloaded and extracted with a click on **Download**.<br>
If the you have a URL for the update package, you can insert the Link and click on **Download and extract**.

[![Available updates](../assets/images/en/maintenance-and-operation/update/4-update.png)](../assets/images/en/maintenance-and-operation/update/4-update.png)

Now a new version is available for updating. The update can be started by clicking **Next**. To see all notable changes for this package you can find a list under **see changelog**.

[![Available updates](../assets/images/en/maintenance-and-operation/update/5-update.png)](../assets/images/en/maintenance-and-operation/update/5-update.png)

### Step 3: Database(s)

Usually, the boxes are checked like shown in the screenshot, so that both the system database and all associated mandator databases are selected for the update by default. If there is no reason not to update particular mandator databases, all selections should be kept.

[![Databases](../assets/images/en/maintenance-and-operation/update/6-update.png)](../assets/images/en/maintenance-and-operation/update/6-update.png)

### Step 4: File-Update

Now at the very latest, a [backup](./backup-and-recovery/index.md) should be performed. As soon as there is a backup you can start the update by clicking the button **Yes, I did a backup! - Start the update**.

[![File update](../assets/images/en/maintenance-and-operation/update/7-update.png)](../assets/images/en/maintenance-and-operation/update/7-update.png)

### Step 5: Overview (Log)

Each change may have effects on files and databases. If something goes wrong (typically because of missing writing permissions) a red "ERROR" appears. If a green "DONE" is displayed for each change, you can go on to the next step by clicking **Next**.

[![Overview](../assets/images/en/maintenance-and-operation/update/8-update.png)](../assets/images/en/maintenance-and-operation/update/8-update.png)

### Step 6: Migration

Depending on the update, existing data will be changed. The "Migration" step executes these changes and reports whether these changes were successful or not.

[![Migration](../assets/images/en/maintenance-and-operation/update/9-update.png)](../assets/images/en/maintenance-and-operation/update/9-update.png)

### Step 7: Attribute migration

Following the so called "Property Migration", everything should be marked green again.

[![Attribute migration](../assets/images/en/maintenance-and-operation/update/10-update.png)](../assets/images/en/maintenance-and-operation/update/10-update.png)

### Step 8: Completion

Now the update is completed. More detailed information about the update can be found in the linked log-file. You can return to i-doit by clicking **Run i-doit v.[VERSION]**. It is recommended to clear both the browser and the i-doit-cache under **Administration → [Tenant-Name] management → Repair and clean up**.

[![Completion](../assets/images/en/maintenance-and-operation/update/11-update.png)](../assets/images/en/maintenance-and-operation/update/11-update.png)

## Update prepared via the console

The update can be prepared, but not executed via the console. For the preparation, the latest update package has to be downloaded from the i-doit [customer portal](../system-administration/customer-portal.md).

The update package can be stored on the server (for example, via [WinSCP](https://winscp.net/eng/index.php)). Move the package to the main folder of i-doit afterwards, if you didn't already put it there. This can be carried out by using the following command:

```shell
mv idoit-36-update.zip /var/www/html/
```

Then the package needs to be extracted and all existing files need to be overwritten.

```shell
cd /var/www/html/
unzip idoit-36-update.zip
```

Now the file permissions are being adjusted in order to give the Webserver both reading access as well as writing access to i-doit.

!!! info ""
    The user:group combination **www-data:www-data** used here refers to **Debian GNU/Linux or Ubuntu Linux**.<br>
    If another operating system is used, the used user:group combination must be adapted.

```shell
cd /var/www/html/
sudo chown www-data:www-data -R .
sudo find . -type d -name \* -exec chmod 775 {} \;
sudo find . -type f -exec chmod 664 {} \;
```

Now you can have a look at our instructions for the [update via the web interface](#update-via-the-web-interface) and skip the steps regarding the download of the newest package.

## Update via console.php

!!! attention "Backup"
    Before updating, it is essential to make a [backup](backup-and-recovery/index.md).

If you want to run the update via the console, use console.php. To do this, use the update command with [console.php](../automation-and-integration/cli/index.md).

First, we switch to the i-doit root directory:

```shell
cd /var/www/html/
```

Then we execute the update command and have to answer a few interactive questions before the update can be carried out:

```shell
sudo -u www-data php console.php update
```

We can also provide the command with all necessary parameters directly. To update i-doit version **35** to version **36**, the command is as follows:

```shell
sudo -u www-data php console.php update -u {username} -p {password} -z /var/www/html/i-doit/idoit-36-update.zip --v 36
```

## After the update

After the update, clear the [cache](../system-administration/administration/tenant-management/repair-and-clean-up.md#cache) and refresh the [search index](../system-administration/administration/tenant-management/repair-and-clean-up.md#other).

The reports should also be updated. More information can be found under [Report Manager](../evaluation/report-manager.md#updating-reports-after-an-update).
