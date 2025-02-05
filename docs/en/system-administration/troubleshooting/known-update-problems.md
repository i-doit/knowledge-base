---
title: Known update Problems
description: Known problems with the update
icon: material/update
status: updated
lang: en
---

In this article we will add all known problems when updating from or to a specific i-doit version.

## Version 33

It may happen that some functions disappear after the update. For example, the update function or the LDAP function. To solve the problem, the file `.../i-doit/src/config.inc.php` must be set.

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

=== "Suse Linux Enterprise Server"

    ```sh
    cd /var/www/html/i-doit/
    sudo chown wwwrun:www -R .
    sudo find . -type d -name \* -exec chmod 775 {} \;
    sudo find . -type f -exec chmod 664 {} \;
    ```

=== "Microsoft Windows Server"

    Specific file and directory rights do not need to be set.
