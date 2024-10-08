---
title: i-doit 33 update and Flows installation
description: i-doit 33 update and Flows installation
icon:
status: new
lang: en
---

Here we describe how to update i-doit to version **33** to be able to install the Flows add-on.

## 1. Update to version 33

To be able to use the Flows add-on and all new functions, i-doit must first be updated to version 33.

!!! success "Version 33 will be available immediately via the online updater"

### 1.1 Update via the online updater

If the instance can reach the Internet, the update should be used via the updater. The initial situation is a login in i-doit with administrator rights.

#### Step 1: Opening the administration in i-doit 32

[![Open administration]()]()

#### Step 2: Call up [Tenant name] management

[![open Tenant name management]()]()

#### Step 3: Click on the i-doit update button

[![Click on the update button]()]()

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

```shell
cd /var/www/html/i-doit/
sudo chown www-data:www-data -R .
sudo find . -type d -name \* -exec chmod 775 {} \;
sudo find . -type f -exec chmod 664 {} \;
```

#### Step 3: Click on the i-doit update button

[![Click on the update button]()]()

## 2. Flows Add-on installation

With i-doit 33, the [Subscription & Add-ons](//TODO) feature was added, which can also be used to install add-ons directly. This feature can be used for installation. However, the Flows add-on can also be installed as usual via the [Admin-Center](#22-offline-flows-add-on-über-das-admin-center-installieren).

### 2.1 (Online) Flows Add-on über Subscription & Add-ons installieren

To be able to use the Subscription & Add-ons feature, the licence token is required, which is entered and saved here.

#### Step 1: Open Subscription & Add-ons

[![open Subscription & Add-ons]()]()

#### Step 2: Save licence token

[![Save licence token]()]()

#### Step 3: Open Add-ons and install flows via Action

[![//TODO bild erstellen ]]

### 2.2 (Offline) Install Flows add-on via the Admin-Center

If the i-doit instance cannot access the Internet or the [Subscription & Add-ons](//TODO) backend, the add-on must be downloaded from the [Customer portal](../../system-administration/customer-portal.md). It is then installed via the [Admin-Center](../../system-administration/admin-center.md).

#### Step 1: Download Flows add-on from the customer portal

First log in to the customer portal at <https://portal.i-doit.com> and download the Flows add-on under Add-ons

#### Step 2: Log in to the i-doit Admin-Center

[![Open Admin-Center]()]()

Now log in with the Admin Center login data

[![Admin-Center log in]()]()

#### Step 3: Flows Add-on installieren

[![Install via Admin-Center]()]()

## 3. Configuration of the service

The Flows add-on requires a Service. We have created a Service installation Script, which can be found in the add-on folder.

//TODO
