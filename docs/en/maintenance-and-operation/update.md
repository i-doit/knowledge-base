# Update

When working with i-doit, you should always use the newest version. Minor releases always contain numerous bug fixes, while major releases add new features and improve already existing functionalities. Minor updates are released approximately every four weeks and major updates every six months. The update can be [performed via the web interface of i-doit](./update.md), as long as an internet connection is available (and where applicable, via HTTP-proxy). Alternatively the update can be [prepared via console](./update.md) and then be continued in the web interface.

!!! attention "Skip releases"

    If version 1.13.1 is currently installed and version 1.13.3 is already available, only the next higher version - i.e. 1.13.2 - will still be displayed. However, minor releases can generally be skipped. Nevertheless, all minor releases will be installed one by one until the latest version is reached. If you want to jump directly to version 1.13.3, you can download the latest package from the customer portal and unpack it on the i-doit host. You can find the necessary steps here in the lower part of the article.

!!! info "1.16.1"

    The update from version 1.16 via version 1.16.1 to 1.16.2 cannot be skipped.

!!! attention "Backup"

    Before updating it is essential create a data [backup](./backup-and-recovery/index.md).

Update via the Web Interface
----------------------------

The update can be accessed either through **Administration → Systemtools → i-doit Update**, the quicklaunch widget in the dashboard or through the URL http://i-doit-host/i-doit/?load=update.

[![Update via the Web Interface](../assets/images/en/maintenance-and-operation/update/1-update.png)](../assets/images/en/maintenance-and-operation/update/1-update.png)

Upon launching an interface appears in which the current status of the system is examined. We can see in our screenshot that the PHP-extension mcrypt has not been found. If such a status message is displayed, it is very important to adjust the system appropriately. For this you should look at our [system requirements](../installation/system-requirements.md) and [tenant mangement](../system-administration/administration/tenant-management/index.md). After adjusting the environment, everything should be checked with a green mark or marked with an "OK".

[![Update-Steps](../assets/images/en/maintenance-and-operation/update/2-update.png)](../assets/images/en/maintenance-and-operation/update/2-update.png)

In the next step, all available update packages are displayed. In our example i-doit version 1.6.1 is installed and can therefore only be updated to the same version. By clicking **Check for a new version** you can check whether a newer package is available. For this purpose, you require an internet connection.

[![Update-Steps](../assets/images/en/maintenance-and-operation/update/3-update.png)](../assets/images/en/maintenance-and-operation/update/3-update.png)

When clicking "**Check for a new version**", the system checks for a higher version.

!!! attention "Skip releases"

    If version 1.6.1 is installed, but version 1.6.7 is already available, the higher version closest to 1.6.1 - consequently version 1.6.2 - will be displayed. However, minor releases can generally be skipped. Yet all minor releases will be installed individually with this method of updating until the application is up to date. If you want to get to version 1.6.7 immediately, you can download the newest package in the [customer portal](../system-administration/customer-portal.md) and extract it to the i-doit host. You can find the required steps [in the following part of this article](./update.md).

The update-package will be downloaded and extracted with a click on **Download**.

!!! attention "Writing permissions"

    If an error message appears while downloading and extracting, it is often the case that the Apache Webserver has no writing permissions for the path in which i-doit is installed. You will find more detailed information further below in this article.

[![Update-Steps](../assets/images/en/maintenance-and-operation/update/4-update.png)](../assets/images/en/maintenance-and-operation/update/4-update.png)

Now a new version is available for updating. The update can be started by clicking "**Next**". To see all notable changes for this package you can find a list under **see changelog**.

[![Update-Steps](../assets/images/en/maintenance-and-operation/update/5-update.png)](../assets/images/en/maintenance-and-operation/update/5-update.png)

Usually, the boxes are checked like shown in the screenshot, so that both the system database and all associated mandator databases are selected for the update by default. If there is no reason not to update particular mandator databases, all selections should be kept.

[![Update-Steps](../assets/images/en/maintenance-and-operation/update/6-update.png)](../assets/images/en/maintenance-and-operation/update/6-update.png)

Now at the very latest, a [backup](./backup-and-recovery/index.md) should be performed. As soon as there is a backup you can start the update by clicking the button **Yes, I did a backup! - Start the update**.

[![Update-Steps](../assets/images/en/maintenance-and-operation/update/7-update.png)](../assets/images/en/maintenance-and-operation/update/7-update.png)

Each change may have effects on files and databases. If something goes wrong (typically because of missing writing permissions) a red "ERROR" appears. If a green "DONE" is displayed for each change, you can go on to the next step by clicking **Next**.

[![Update-Steps](../assets/images/en/maintenance-and-operation/update/8-update.png)](../assets/images/en/maintenance-and-operation/update/8-update.png)

Depending on the update, existing data will be changed. The "Migration" step executes these changes and reports whether these changes were successful or not.

[![Update-Steps](../assets/images/en/maintenance-and-operation/update/9-update.png)](../assets/images/en/maintenance-and-operation/update/9-update.png)

Following the so called "Property Migration", everything should be marked green again.

[![Update-Steps](../assets/images/en/maintenance-and-operation/update/10-update.png)](../assets/images/en/maintenance-and-operation/update/10-update.png)

Now the update is completed. More detailed information about the update can be found in the linked log-file. You can return to i-doit by clicking **Run i-doit v.<VERSION>**. It is recommended to clear both the browser and the i-doit-cache under **Administration → Systemtools → Cache / Database**.

[![Update-Steps](../assets/images/en/maintenance-and-operation/update/11-update.png)](../assets/images/en/maintenance-and-operation/update/11-update.png)

Update Prepared via the Console
-------------------------------

The update can be prepared, but not executed via the console. For the preparation, the latest update package has to be downloaded from the i-doit [customer portal](../system-administration/customer-portal.md).

!!! attention "Skip releases"

    It is important to note that minor releases can be skipped, however, major releases can not.

The update package can be stored on the server (for example, via [WinSCP](https://winscp.net/eng/index.php)). Move the package to the main folder of i-doit afterwards, if you didn't already put it there. This can be carried out by using the following command:

    mv idoit-1.2.3-update.zip /var/www/html/i-doit/

Then the package needs to be extracted and all existing files need to be overwritten.

    cd /var/www/html/i-doit
    unzip idoit-1.2.3-update.zip # enter "A" to override all files

Now the file permissions are being adjusted in order to give the Webserver both reading access as well as writing access to i-doit.

!!! info ""
    The user:group combination **www-data:www-data** used here refers to **Debian GNU/Linux or Ubuntu Linux**.  
    If another operating system is used, the used user:group combination must be adapted.

```shell
cd /var/www/html/i-doit/
sudo chown www-data:www-data -R .
sudo find . -type d -name \* -exec chmod 775 {} \;
sudo find . -type f -exec chmod 664 {} \;
sudo chmod 774 controller *.sh setup/*.sh
```

Now you can have a look at our instructions for the [update via the web interface](./update.md) and skip the steps regarding the download of the newest package.
