---
title: "Update i-doit"
description: "Always keep _i-doit_ up to date."
icon:
status:
lang: en
---
# Update i-doit

Always keep _i-doit_ up to date. Minor releases (approximately every four weeks) contain bug fixes, while major releases (approximately every six months) also bring new features.

You have two ways to update:

*   [Update via the web interface](#update-via-the-web-interface) -- requires internet access (optionally via HTTP proxy)
*   [Prepare update via the console](#prepare-update-via-the-console) -- manually upload the package, then continue via the web interface

=== "Skip releases from version 20"
    !!! attention "Skip releases from version 20"
        If you want to jump directly to a newer version, e.g., 26, you can download the latest update package from the [customer portal](../administration/customer-portal.md) and extract it in the i-doit folder. The necessary steps can be found under [prepare update via the console](#prepare-update-via-the-console).
        From version **25** with [hotfix](../administration/hotfixes/hotfix-archive/index.md), version 27 is also offered for download in the update check.

=== "Skip releases before version 20"
    !!! attention "Skip releases before version 20"
        If version 1.13.1 is currently installed and version 1.13.3 is already available, only the next higher version -- 1.13.2 -- is displayed. However, minor releases can generally be skipped. Nevertheless, via this method all minor releases are installed individually until the latest version is reached. If you want to jump directly to version 1.13.3, you can download the latest package from the [customer portal](../administration/customer-portal.md) and extract it on the _i-doit_ host. The necessary steps can be found [here](#prepare-update-via-the-console).

!!! warning "Backup"
    Before the update, you should always create a [backup](backup-and-restore/index.md).

!!! attention "Missing write permissions"
    If an error message appears during download and extraction, it is often the case that the Apache web server does not have write permissions for the path where i-doit is installed. More details [here](#prepare-update-via-the-console)

## Update via the Web Interface

Open the update via one of the following methods:

*   **Administration > [Tenant Name] Administration > i-doit Update**
*   Quicklaunch widget on the dashboard
*   Direct URL: `http://i-doit-host/i-doit/?load=update`

[![Update via Dashboard](../assets/images/de/wartung-und-betrieb/update/1-update.png)](../assets/images/de/wartung-und-betrieb/update/1-update.png)

i-doit checks the current system status. If something is not right, compare the [system requirements](../installation/system-requirements.md) and [system settings](../installation/manual-installation/system-settings.md). After adjustments, everything should be green or show "OK".

### Step 1: i-doit Update and Compatibility Check

[![i-doit update](../assets/images/de/wartung-und-betrieb/update/2-update.png)](../assets/images/en/maintenance-and-operation/update/2-update.png)

### Step 2: Available Updates

Here you can see all available update packages.

[![Update-Available-Check](../assets/images/de/wartung-und-betrieb/update/3-update.png)](../assets/images/de/wartung-und-betrieb/update/3-update.png)

*   **Check for a new version** -- checks which latest version is available.
*   **Download** -- downloads the update package and extracts it.
*   If you have a URL, paste it in and click **Download and extract**.

[![Update-Available-Download](../assets/images/de/wartung-und-betrieb/update/4-update.png)](../assets/images/de/wartung-und-betrieb/update/4-update.png)

Select the new version and click **Next**. Under **see changelog** you will find a list of changes.

[![Update-Available-Donwload](../assets/images/de/wartung-und-betrieb/update/5-update.png)](../assets/images/de/wartung-und-betrieb/update/5-update.png)

### Step 3: Database(s)

The system database and all tenants are usually already selected. Leave the checkboxes checked unless you have a reason to exclude individual tenants.

[![Update-DB](../assets/images/de/wartung-und-betrieb/update/6-update.png)](../assets/images/de/wartung-und-betrieb/update/6-update.png)

### Step 4: File Update

At this point you should have a [backup](backup-and-restore/index.md). Click **Yes, I did a backup! - Start the update** to start the update.

[![Update-Files](../assets/images/de/wartung-und-betrieb/update/7-update.png)](../assets/images/de/wartung-und-betrieb/update/7-update.png)

### Step 5: Overview (Log)

Check the log: green "DONE" means success, red "ERROR" indicates a problem (often missing write permissions). If all entries are green, click **Next**.

[![Update-Overview](../assets/images/de/wartung-und-betrieb/update/8-update.png)](../assets/images/de/wartung-und-betrieb/update/8-update.png)

### Step 6: Migration

Depending on the update, changes are made to existing data. The "Migration" step executes these and reports whether the changes were successful.

[![Update-Migration](../assets/images/de/wartung-und-betrieb/update/9-update.png)](../assets/images/de/wartung-und-betrieb/update/9-update.png)

### Step 7: Attribute Migration

After the so-called "Property Migration", everything should also be displayed in green here.

[![Update-Attributes](../assets/images/de/wartung-und-betrieb/update/10-update.png)](../assets/images/de/wartung-und-betrieb/update/10-update.png)

### Step 8: Completion

The update is complete. Details can be found in the linked log file. Click **Run i-doit v.[VERSION]** to return. Then clear the browser and i-doit cache under **Administration > [Tenant Name] Administration > System Repair and Cleanup**.

[![Update-Complete](../assets/images/de/wartung-und-betrieb/update/11-update.png)](../assets/images/de/wartung-und-betrieb/update/11-update.png)

## Prepare Update via the Console

Download the latest update package from the [customer portal](../administration/customer-portal.md) or from the [Download Links](../download-links.md) page and transfer it to the server (e.g., via [WinSCP](https://winscp.net/eng/docs/lang:de)). Move the package to the i-doit main directory:

```shell
mv idoit-38-update.zip /var/www/html/
```

Extract the package and overwrite existing files:

```shell
cd /var/www/html/
unzip idoit-38-update.zip
```

Adjust the file permissions so that the web server has read and write access:

!!! info ""
    The user:group combination **www-data:www-data** used here refers to **Debian** GNU/Linux or Ubuntu Linux.
    If a different operating system is used, the user:group combination must be adjusted accordingly.

```shell
cd /var/www/html/
sudo chown www-data:www-data -R .
sudo find . -type d -name \* -exec chmod 775 {} \;
sudo find . -type f -exec chmod 664 {} \;
```

Now continue with the [update via the web interface](#update-via-the-web-interface) and skip the download steps.

## Update via the Console Using console.php

!!! attention "Backup"
    Always create a [backup](backup-and-restore/index.md) before the update.

You can also perform the update entirely via the [console.php](../automation-and-integration/cli/index.md). Switch to the i-doit directory:

```shell
cd /var/www/html/
```

Run the update command and answer the interactive questions:

```shell
sudo -u www-data php console.php update
```

Alternatively, provide all parameters directly. Example for an update to version **38**:

```shell
sudo -u www-data php console.php update -u {username} -p {password} -z /var/www/html/idoit-38-update.zip --v 38
```

## After the Update

Perform the following steps after every update:

1. [Clear cache](../administration/management/tenant-management/system-repair-and-cleanup.md)
2. [Rebuild search index](../administration/management/tenant-management/system-repair-and-cleanup.md)
3. [Update reports](../evaluation/report-manager.md#updating-reports-after-an-update)
