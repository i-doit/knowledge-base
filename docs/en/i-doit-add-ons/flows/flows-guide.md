---
title: i-doit 33 update and Flows installation
description: i-doit 33 update and Flows installation
icon:
status:
lang: en
---

Here we describe how to update i-doit to version **33** to be able to install the Flows Add-on.

## 1. Update to i-doit to version 33
<!--//TODO add a selection -->
To be able to use the Flows Add-on and all new features, i-doit must first be updated to version 33.

!!! success "Version 33 will be available immediately via the online updater"

### Update via the online updater

If the instance can reach the Internet, the update should be used via the updater. The initial situation is a login in i-doit with administrator rights.

#### Step 1: Open the administration in i-doit 32

[![Open administration](../../assets/images/en/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-1.png)](../../assets/images/en/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-1.png)

#### Step 2: Navigate to [Tenant name] management

[![open Tenant name management](../../assets/images/en/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-2.png)](../../assets/images/en/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-2.png)

#### Step 3: Click on "i-doit update" button

[![Click on the update button](../../assets/images/en/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-3.png)](../../assets/images/en/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-3.png)

#### Step 4: Follow the instructions of the updater

* * *

### Prepare offline update and open the updater

If the instance cannot reach the Internet, the update package must be extracted into the i-doit root folder manually.

#### Step 1: Download i-doit 33 update package

The update package is downloaded from the [customer portal](../../system-administration/customer-portal.md).

#### Step 2: Move `idoit-33-update.zip` to the i-doit folder

The update package can be stored on the server (e.g. via [WinSCP](https://winscp.net/eng/docs/)). Then move the package to the root directory of **i-doit**, if you have not already placed it there directly. You can do this with this command:

```shell
sudo mv idoit-33-update.zip /var/www/html/i-doit/
```

#### Step 3: Extract ZIP file

Switch to the i-doit folder:

```shell
cd /var/www/html/i-doit/
```

Extract the ZIP file with:

```shell
unzip idoit-33-update.zip
```

Now the file permissions are adjusted so that the web server has read and write access to **i-doit**.

!!! info "The user:group combination **www-data:www-data** used here refers to **Debian** or **Ubuntu** Linux. If a different operating system is used, the user:group combination used must be adapted. For more inforation see [here](../../installation/manual-installation/setup.md#download-and-extract-the-install-package)"

!!! quote ""
    === "Debian & Ubuntu"
        ```shell
        cd /var/www/html/i-doit/
        sudo chown www-data:www-data -R .
        sudo find . -type d -name \* -exec chmod 775 {} \;
        sudo find . -type f -exec chmod 664 {} \;
        ```

    === "Red Hat Enterprise Linux (RHEL)"
        ```shell
        cd /var/www/html/i-doit/
        sudo chown apache:apache -R .
        sudo find . -type d -name \* -exec chmod 775 {} \;
        sudo find . -type f -exec chmod 664 {} \;
        ```

    === "SUSE Linux Enterprise Server (SLES)"
        ```shell
        cd /var/www/html/i-doit/
        sudo chown wwwrun:www -R .
        sudo find . -type d -name \* -exec chmod 775 {} \;
        sudo find . -type f -exec chmod 664 {} \;
        ```

#### Step 4: Open the administration in i-doit 32

[![Open administration](../../assets/images/en/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-1.png)](../../assets/images/en/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-1.png)

#### Step 5: Navigate to [Tenant name] management

[![open Tenant name management](../../assets/images/en/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-2.png)](../../assets/images/en/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-2.png)

#### Step 6: Click on the i-doit Update button

[![Click on the update button](../../assets/images/en/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-3.png)](../../assets/images/en/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-3.png)

#### Step 7: Follow the instructions of the updater

* * *

## 2. Flows Add-on installation
<!--//TODO add a selection -->
With i-doit 33, the [Add-on & Subscription Center](../../system-administration/add-on-and-subscription-center.md) feature was added, which can also be used to install Add-ons directly. However, the Flows Add-on can also be installed as usual via the [Admin-Center](#offline-install-flows-add-on-via-the-admin-center).

### (Online) install Flows Add-on via Add-on & Subscription Center

To be able to use the **Add-on & Subscription Center** feature, a license token is required, which is entered and saved here.

#### Step 1: Open Add-on & Subscription Center

[![open Add-on & Subscription Centers](../../assets/images/en/i-doit-add-ons/flows/update-i-doit-and-install-flows/flows-install-step-1.png)](../../assets/images/en/i-doit-add-ons/flows/update-i-doit-and-install-flows/flows-install-step-1.png)

#### Step 2: Save license token

If you already used a license token, this step is skipped.

[![Save license token](../../assets/images/en/i-doit-add-ons/flows/update-i-doit-and-install-flows/flows-install-step-2.png)](../../assets/images/en/i-doit-add-ons/flows/update-i-doit-and-install-flows/flows-install-step-2.png)

#### Step 3: Open Add-ons and install Flows Add-on

[![Open Add-ons and install](../../assets/images/en/i-doit-add-ons/flows/update-i-doit-and-install-flows/flows-install-step-3.png)](../../assets/images/en/i-doit-add-ons/flows/update-i-doit-and-install-flows/flows-install-step-3.png)

* * *

### (Offline) Install Flows Add-on via the Admin-Center

If the i-doit instance cannot access the Internet, the Add-on must be downloaded from the [Customer portal](../../system-administration/customer-portal.md). It is then installed via the [Admin-Center](../../system-administration/admin-center.md).

#### Step 1: Download Flows Add-on from the Add-on & Subscription Center

First log in to the Add-on & Subscription Center at <https://center.i-doit.com> with your license token and download the Flows Add-on under **Add-ons**.

#### Step 2: Open the i-doit Admin-Center

[![Open Admin-Center](../../assets/images/en/i-doit-add-ons/flows/update-i-doit-and-install-flows/install-2.2-1.png)](../../assets/images/en/i-doit-add-ons/flows/update-i-doit-and-install-flows/install-2.2-1.png)

#### Step 3: Log in to the i-doit Admin-Center

[![Admin-Center log in](../../assets/images/en/i-doit-add-ons/flows/update-i-doit-and-install-flows/install-2.2-2.png)](../../assets/images/en/i-doit-add-ons/flows/update-i-doit-and-install-flows/install-2.2-2.png)

#### Step 4: Install Flows Add-on

Click on the **Add-ons** header and select the **Flows ZIP file** after clicking on **Install/update Add-on**:

[![Install via Admin-Center](../../assets/images/en/i-doit-add-ons/flows/update-i-doit-and-install-flows/install-2.2-3.png)](../../assets/images/en/i-doit-add-ons/flows/update-i-doit-and-install-flows/install-2.2-3.png)

* * *

## 3. Automate flow execution

The Flows Add-on comes with two CLI commands. Both commands are needed to make the Flows Add-on work.
<!-- //TODO clarify if this canlead to problems when a crontab is executed while the cron is running
There are two options to automate the flow execution. The Commands can be executed by a **Crontab**. We also have created a Service installation Script called **create-daemon.sh**, which can be found in the Flows Add-on folder `i-doit/src/classes/modules/synetics_flows/`.

-   Use [systemd service install script](#using-system-service-installer-script) if you want to
-   Use [crontab](#creating-a-crontab)
--->
### Using system service installation script

First we need to set execute rights for **create-daemon.sh**. Navigate to the i-doit root folder and use this command:

```shell
sudo chmod +x src/classes/modules/synetics_flows/create-daemon.sh
```

Now **create-daemon.sh** can be executed to create and activate a service for the automatic execution of the flow. **Each tenant needs its own service**

-   `-i` needs a tenant ID, can be viewed via console command [tenant-list](../../automation-and-integration/cli/index.md#tenant-list)
-   `-u` needs a i-doit **admin-user** in the selected tenant
-   `-p` needs a i-doit **admin-user-password** in the selected tenant

```shell
sudo src/classes/modules/synetics_flows/create-daemon.sh -u admin-user -p admin-user-password -i 1
```

* * *
<!-- //TODO clarify if this canlead to problems when a crontab is executed while the cron is running
### Using a Crontab

Create a Crontab for the Apache user. Example for Debian:

```shell
sudo crontab -u www-data -e
```

Add the following lines at the end of the file, after replacing the i-doit login information. You may also need to replace the tenant ID.

```shell
* * * * * /usr/bin/php /var/www/html/i-doit/console.php flows:time-trigger --user admin-user --password admin-user-password --tenantId 1
* * * * * /usr/bin/php /var/www/html/i-doit/console.php flows:perform ---user admin-user --password admin-user-password --tenantId 1
```
--->

If you have any questions or require further assistance, please contact us via <help@i-doit.com>.
