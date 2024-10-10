---
title: i-doit 33 update and Flows installation
description: i-doit 33 update and Flows installation
icon:
status: new
lang: en
---

Here we describe how to update i-doit to version **33** to be able to install the Flows Add-on.

## 1. Update to version 33

To be able to use the Flows Add-on and all new functions, i-doit must first be updated to version 33.

!!! success "Version 33 will be available immediately via the online updater"

### 1.1 Update via the online updater

If the instance can reach the Internet, the update should be used via the updater. The initial situation is a login in i-doit with administrator rights.

#### Step 1: Opening the administration in i-doit 32

[![Open administration](../../assets/images/en/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-1.png)](../../assets/images/en/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-1.png)

#### Step 2: Call up [Tenant name] management

[![open Tenant name management](../../assets/images/en/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-2.png)](../../assets/images/en/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-2.png)

#### Step 3: Click on the i-doit update button

[![Click on the update button](../../assets/images/en/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-3.png)](../../assets/images/en/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-3.png)

* * *

### 1.2 Prepare offline update and call up the updater

If the instance cannot reach the Internet, the update package must be unpacked in the i-doit folder. The update is then available in the updater.

Firstly, the update package must be downloaded from the [customer portal](../../system-administration/customer-portal.md). The ZIP file is then copied to the server or to the i-doit folder.

The file path in which i-doit is installed can be checked via the **Rights & Directories** item in the [[Tenant name] management](../../system-administration/administration/tenant-management/index.md#rights--directories).

#### Step 1: Download i-doit 33 update package

The update package is downloaded from the [customer portal](../../system-administration/customer-portal.md).

#### Step 2: Move `idoit-33-update.zip` to the i-doit folder

The update package can be stored on the server (e.g. via [WinSCP](https://winscp.net/eng/docs/)). Then move the package to the root directory of **i-doit**, if you have not already placed it there directly. You can do this with this command:

```shell
sudo mv idoit-33-update.zip /var/www/html/i-doit/
```

#### Step 3: Extract ZIP file

Switch to the i-doit folder

```shell
cd /var/www/html/i-doit/
```

Unzip the ZIP file and overwrite all files

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

#### Step 4: Opening the administration in i-doit 32

[![Open administration](../../assets/images/en/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-1.png)](../../assets/images/en/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-1.png)

#### Step 5: Call up [Tenant name] management

[![open Tenant name management](../../assets/images/en/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-2.png)](../../assets/images/en/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-2.png)

#### Step 6: Click on the i-doit Update button

[![Click on the update button](../../assets/images/en/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-3.png)](../../assets/images/en/i-doit-add-ons/flows/update-i-doit-and-install-flows/update-step-3.png)

* * *

## 2. Flows Add-on installation

With i-doit 33, the [Add-on & Subscription Center](../../system-administration/add-on-and-subscription-center.md) feature was added, which can also be used to install Add-ons directly. This feature can be used for installation. However, the Flows Add-on can also be installed as usual via the [Admin-Center](#22-offline-flows-add-on-über-das-admin-center-installieren).

### 2.1 (Online) install Flows Add-on via Add-on & Subscription Center

To be able to use the Add-on & Subscription Center feature, a licence token is required, which is entered and saved here.

#### Step 1: Open Add-on & Subscription Center

[![open Add-on & Subscription Centers](../../assets/images/en/i-doit-add-ons/flows/update-i-doit-and-install-flows/flows-install-step-1.png)](../../assets/images/en/i-doit-add-ons/flows/update-i-doit-and-install-flows/flows-install-step-1.png)

#### Step 2: Save licence token

[![Save licence token](../../assets/images/en/i-doit-add-ons/flows/update-i-doit-and-install-flows/flows-install-step-2.png)](../../assets/images/en/i-doit-add-ons/flows/update-i-doit-and-install-flows/flows-install-step-2.png)

#### Step 3: Open Add-ons and install Flows Add-on

[![Open Add-ons and install](../../assets/images/en/i-doit-add-ons/flows/update-i-doit-and-install-flows/flows-install-step-3.png)](../../assets/images/en/i-doit-add-ons/flows/update-i-doit-and-install-flows/flows-install-step-3.png)

* * *

### 2.2 (Offline) Install Flows Add-on via the Admin-Center

If the i-doit instance cannot access the Internet, the Add-on must be downloaded from the [Customer portal](../../system-administration/customer-portal.md). It is then installed via the [Admin-Center](../../system-administration/admin-center.md).

#### Step 1: Download Flows Add-on from the Add-on & Subscription Center

First log in to the Add-on & Subscription Center at <https://center.i-doit.com> with your license Token and download the Flows Add-on under Add-ons.

#### Step 2: Log in to the i-doit Admin-Center

[![Open Admin-Center](../../assets/images/en/i-doit-add-ons/flows/update-i-doit-and-install-flows/install-2.2-1.png)](../../assets/images/en/i-doit-add-ons/flows/update-i-doit-and-install-flows/install-2.2-1.png)

Now log in with the Admin Center login data

[![Admin-Center log in](../../assets/images/en/i-doit-add-ons/flows/update-i-doit-and-install-flows/install-2.2-2.png)](../../assets/images/en/i-doit-add-ons/flows/update-i-doit-and-install-flows/install-2.2-2.png)

#### Step 3: Flows Add-on installieren

[![Install via Admin-Center](../../assets/images/en/i-doit-add-ons/flows/update-i-doit-and-install-flows/install-2.2-3.png)](../../assets/images/en/i-doit-add-ons/flows/update-i-doit-and-install-flows/install-2.2-3.png)

* * *

## 3. Console command automation

The Flows Add-on comes with two CLI commands. Both commands are needed to make the Flows Add-on work completely. There are two option to set up the CLI Commands. The Commands can be executed by a **Crontab**. We also have created a Service installation Script called **create-daemon.sh**, which can be found in the Flows Add-on folder `i-doit/src/classes/modules/synetics_flows/`.

### Using system service installer script

First we need to set execute rights for the file. Use the command inside the i-doit folder:

```shell
sudo chmod +x src/classes/modules/synetics_flows/create-daemon.sh
```

Now the file can be executed to create a system service. **This needs to be done for every Tenant**

-   `-u` needs a i-doit admin-user
-   `-p` needs a i-doit admin-user-password
-   `-i` needs a tenant ID, can be viewed via console command [tenant-list](../../automation-and-integration/cli/console/options-and-parameters-cli.md#tenant-list)

```shell
src/classes/modules/synetics_flows/./create-daemon.sh -u admin-user -p admin-user-password -i 1
```

* * *

### Creating a Crontab

Create a Crontab for the Apache user. Example for Debian:

```shell
sudo crontab -u www-data -e
```

Add the following lines at the end of the file, after replacing the i-doit login information. You may also need to replace the tenant ID.

```shell
* * * * * /usr/bin/php /var/www/html/i-doit/console.php flows:time-trigger --user admin-user --password admin-user-password --tenantId 1
* * * * * /usr/bin/php /var/www/html/i-doit/console.php flows:perform ---user admin-user --password admin-user-password --tenantId 1
```

If you have any questions or require further assistance, please contact us via <help@i-doit.com>.
