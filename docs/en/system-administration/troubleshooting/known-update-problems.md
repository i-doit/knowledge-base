---
title: Known update problems
description: Known problems with the update
icon: material/update
status: updated
lang: en
---

In this article we will add all known problems when updating from or to a specific i-doit version.

## Version 33

It may happen that some functions disappear after the update. For example, the update function or the LDAP function. To solve the problem, in the file `.../i-doit/src/config.inc.php` the value `$g_is_cloud = '0'` must be set.

There are other variables that should be checked, such as:

=== "Correct"

    ```php
    $g_enable_gui_update = '1';
    $g_is_cloud = '0';
    $g_active_features = [''];
    ```

=== "Incorrect"

    ```php
    $g_enable_gui_update = '%config.admin.enable_gui_update%';
    $g_is_cloud = '%config.cloud.active%';
    $g_active_features = ['%config.active_features.list%'];
    ```

## Version 28

After installing the hotfix [i-doit_28_hotfix_ID-10745.zip](../hotfixes/hotfix-archive/v28.md#wrong-i-doit-version-is-downloaded-at-updater) The new version is displayed, but nothing happens if you press the **Next** button. In the developer console of the browser (F12) and then click on **Next**, you should see the following error message:
<!-- cSpell:disable -->
```shell
Uncaught ReferenceError: open29NoticeHandler is not defined
at HTMLInputElement.<anonymous> (index.php?load=update:399:17)
at klass.handleEvent (prototype.js:7182:34)
at HTMLInputElement.<anonymous> (prototype.js:7266:15)
```
<!-- cSpell:enable -->
Please perform the following steps:

1. Run the update to Version **28** again via the updater
2. Download Version **29** update ZIP via [customer portal](../customer-portal.md)
3. Unzip update zip in the i-doit folder like [prepare update](../../maintenance-and-operation/update.md#update-prepared-via-the-console)
4. Run the update to Version **29** again via the updater

## Version 25 - 28

When using the updater it displays **v30** as next version which is a bug.
In this case use the hotfix or prepare the update manually by unzip the v29 update package into the i-doit folder.
Use the corresponding hotfix for your version, [Hotfix archive](../hotfixes/hotfix-archive/index.md).

## Files cannot be copied

If the message `A problem occurred during update:` is displayed for **4. file update**, this is often due to missing write permissions on the file system.
In this case, please use the respective command to set the rights for the i-doit files, depending on the operating system and web server user used:

We assume a "standard" installation, as described below [Installation](../../installation/index.md).

=== "Debian/Ubuntu"

    ```sh
    cd /var/www/html/i-doit/
    sudo chown www-data:www-data -R .
    sudo find . -type d -name \* -exec chmod 775 {} \;
    sudo find . -type f -exec chmod 664 {} \;
    ```

=== "Red Hat Enterprise Linux"

    ```sh
    cd /var/www/html/i-doit/
    sudo chown apache:apache -R .
    sudo find . -type d -name \* -exec chmod 775 {} \;
    sudo find . -type f -exec chmod 664 {} \;
    ```

=== "SUSE Linux Enterprise Server"

    ```sh
    cd /var/www/html/i-doit/
    sudo chown wwwrun:www -R .
    sudo find . -type d -name \* -exec chmod 775 {} \;
    sudo find . -type f -exec chmod 664 {} \;
    ```

=== "Microsoft Windows Server"

    Specific file and directory rights do not need to be set.
