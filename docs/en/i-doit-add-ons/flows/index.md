---
title: i-doit 33 update and Flows installation
description: "Here we describe how to update i-doit to version 33 to use the Flows Add-on."
icon:
status:
lang: en
---

Here we describe how to update i-doit to version **33** to use the Flows Add-on.

[![Flows](../../assets/images/de/i-doit-add-ons/flows/flows-uebersicht.png)](../../assets/images/de/i-doit-add-ons/flows/flows-uebersicht.png)

## 1. i-doit 33 Update
<!--//TODO add a selection -->
To use the Flows Add-on and all new features, you must first update i-doit to version 33.

### Update via the Online Updater

!!! hint "Version 33 is immediately available via the Online Updater."

If your instance can reach the internet, use the update via the Updater. The prerequisite is being logged in to i-doit with administrator rights.

#### Step 1: Open the Administration in i-doit 32

[![Open administration](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-1.png)](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-1.png)

#### Step 2: Open [tenant-name] Administration

[![Open tenant-name administration](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-2.png)](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-2.png)

#### Step 3: Click the i-doit Update button

[![Click Update button](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-3.png)](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-3.png)

* * *

### Preparing the Offline Update and opening the Updater

If your instance does not have internet access, you must manually extract the update package into the i-doit root directory.

#### Step 1: Download i-doit 33 Updater

Download the update package from the [Customer Portal](../../administration/customer-portal.md).

#### Step 2: Move `idoit-33-update.zip` to the i-doit directory

You can place the update package on the server (for example via [WinSCP](https://winscp.net/eng/docs/lang:de)). Then move the package into the main directory of **i-doit**, if you have not already placed it there directly:

```shell
sudo mv idoit-33-update.zip /var/www/html/
```

* * *

#### Step 3: Extract the ZIP file

Change to the i-doit directory:

```shell
cd /var/www/html/
```

Extract the ZIP file and allow all files to be overwritten:

```shell
unzip idoit-33-update.zip
```

Now adjust the file permissions so that the web server has read and write access to **i-doit**.

!!! info "The user:group combination **www-data:www-data** used here refers to **Debian** or **Ubuntu** Linux. If you are using a different operating system, you must adjust the user:group combination accordingly. See [here](../../installation/manual-installation/setup.md#installationspaket-herunterladen-und-entpacken)."

!!! quote ""
    === "Debian & Ubuntu"
        ```shell
        cd /var/www/html/
        sudo chown www-data:www-data -R .
        sudo find . -type d -name \* -exec chmod 775 {} \;
        sudo find . -type f -exec chmod 664 {} \;
        ```

    === "Red Hat Enterprise Linux (RHEL)"
        ```shell
        cd /var/www/html/
        sudo chown apache:apache -R .
        sudo find . -type d -name \* -exec chmod 775 {} \;
        sudo find . -type f -exec chmod 664 {} \;
        ```

    === "SUSE Linux Enterprise Server (SLES)"
        ```shell
        cd /var/www/html/
        sudo chown wwwrun:www -R .
        sudo find . -type d -name \* -exec chmod 775 {} \;
        sudo find . -type f -exec chmod 664 {} \;
        ```

#### Step 4: Open the Administration in i-doit 32

[![Open administration](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-1.png)](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-1.png)

#### Step 5: Open [tenant-name] Administration

[![Open tenant-name administration](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-2.png)](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-2.png)

#### Step 6: Click the i-doit Update button

[![Click Update button](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-3.png)](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-3.png)

* * *

## 2. Flows Add-on installation

<!--//TODO add a selection -->

With i-doit 33, the [Subscription & Add-ons](../../administration/add-on-and-subscription-center.md) feature was added, through which you can install add-ons directly. The Flows Add-on can also be installed as usual via the [Admin Center](../../administration/admin-center.md).

### (Online) Flows Add-on via Subscription & Add-ons

To use the **Subscription & Add-ons** feature, you need the license token. Enter it here and save it.

#### Step 1: Open Subscription & Add-ons

[![Open Subscription & Add-ons](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/flows-install-step-1.png)](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/flows-install-step-1.png)

#### Step 2: Save license token

[![Save license token](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/flows-install-step-2.png)](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/flows-install-step-2.png)

#### Step 3: Open Add-ons and install the Flows Add-on via Actions

[![Open Add-ons and install Flows Add-on](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/flows-install-step-3.png)](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/flows-install-step-3.png)

* * *

### (Offline) Flows Add-on via the Admin Center

If your i-doit instance cannot access the internet or the [Subscription & Add-ons](../../administration/add-on-and-subscription-center.md) backend, download the add-on from the [Customer Portal](../../administration/customer-portal.md) and install it via the [Admin Center](../../administration/admin-center.md).

#### Step 1: Download the Flows Add-on from the Customer Portal

First log in to the Customer Portal at <https://center.i-doit.com> and download the Flows Add-on under Add-ons.

#### Step 2: Open Admin Center

[![Open Admin Center](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/install-2.2-1.png)](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/install-2.2-1.png)

#### Step 3: Log in to the i-doit Admin Center

[![Log in to Admin Center](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/install-2.2-2.png)](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/install-2.2-2.png)

#### Step 4: Install the Flows Add-on

Click the heading **Add-ons**, then click **Install/update Add-on** and select the **Flows ZIP file**:

[![Install via Admin Center](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/install-2.2-3.png)](../../assets/images/de/i-doit-add-ons/flows/update-i-doit-and-install-flows/install-2.2-3.png)

* * *

## 3. Automated Execution of Flows

The Flows Add-on comes with two CLI commands. Both commands are required for the Flows Add-on to function.
<!-- //TODO clarify if this canlead to problems when a crontab is executed while the cron is running
The Flows Add-on comes with two CLI commands. Both commands are required for the Flows Add-on to function fully. There are two options for setting up the CLI commands. The commands can be executed, for example, via a **crontab**. We have also created a service installation script named **create-daemon.sh** that is located in the Flows Add-on directory under `i-doit/src/classes/modules/synetics_flows/`.
--->
### Using the system service installation script

First set the execution rights for the file. Use the following command in the i-doit directory:

```shell
sudo chmod +x src/classes/modules/synetics_flows/create-daemon.sh
```

Now you can execute **create-daemon.sh** to create and enable a service for the automatic execution of Flows. **Each tenant requires its own service.**

-   `-i` Tenant ID (viewable via the console command [tenant-list](../../automation-and-integration/cli/index.md))
-   `-u` **i-doit admin user** in the selected tenant
-   `-p` **password of the admin user** in the selected tenant

```shell
sudo src/classes/modules/synetics_flows/create-daemon.sh -u admin-user -p admin-user-password -i 1
```

* * *
<!-- //TODO clarify if this canlead to problems when a crontab is executed while the cron is running
### Creating a crontab

Create a crontab for the Apache user. Example for Debian:

```shell
sudo crontab -u www-data -e
```

Add the following lines at the end of the file after replacing the i-doit login credentials. You may also need to adjust the tenant ID.

```shell
* * * * * /usr/bin/php /var/www/html/console.php flows:time-trigger --user admin-user --password admin-user-password --tenantId 1
* * * * * /usr/bin/php /var/www/html/console.php flows:perform ---user admin-user --password admin-user-password --tenantId 1
```
--->

If you have questions or need additional support, please contact us at <help@i-doit.com>.
