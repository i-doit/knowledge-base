---
title: Known Update Problems
description: Known problems during updates
icon: material/update
status: updated
lang: en
---

This article lists all known problems when updating from or to a specific i-doit version.

## Version 34

SM-View `2024.3.0.2708` is not compatible with i-doit 34. After the update, an `HTTP 500` server error is thrown. [Deactivate the add-on](../../i-doit-add-ons/index.md#de-enablen) in the [Admin Center](../admin-center.md) to continue working. The error message in the web server log looks like this:

```log
PHP Fatal error: Declaration of Symfony\Component\HttpFoundation\ResponseHeaderBag::all(?string $key = null) must be compatible with Symfony\Component\HttpFoundation\HeaderBag::all(?string $key = null): array in /var/www/html/src/classes/modules/shd_smview_connect/vendor/symfony/http-foundation/ResponseHeaderBag.php on line 91
```

---

When updating to version 35, if the following error message is logged:

```log
Fatal error: Uncaught ArgumentCountError: 4 arguments are required, 2 given in /var/www/html/i-doit/updates/versions/35/migration/migrate-system-crypto-hash-to-tenant.php:28 Stack trace: #0 /var/www/html/i-doit/updates/versions/35/migration/migrate-system-crypto-hash-to-tenant.php(28): sprintf() #1 /var/www/html/i-doit/updates/classes/isys_update_migration.class.php(109): include('...') #2 /var/www/html/i-doit/updates/update.inc.php(1050): isys_update_migration->migrate() #3 /var/www/html/i-doit/src/hypergate.inc.php(229): include_once('...') #4 /var/www/html/i-doit/index.php(263): include_once('...') #5 {main} thrown in /var/www/html/i-doit/updates/versions/35/migration/migrate-system-crypto-hash-to-tenant.php on line 28
```

Use this hotfix on version **34** to be able to update to version **35**.

[i-doit_34_ID-11978_migration-of-crypto-hashes.zip :material-file-download:](../../assets/downloads/hotfixes/34/i-doit_34_ID-11978_migration-of-crypto-hashes.zip){ .md-button .md-button--primary }

## Version 33

After the update, some functions may disappear, e.g., the update function or the LDAP function. Set the value `$g_is_cloud = '0'` in the file `.../i-doit/src/config.inc.php`.

Also check the following variables:

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

If you have installed the hotfix [i-doit_28_hotfix_ID-10745.zip](../hotfixes/hotfix-archive/v28.md#wrong-i-doit-version-is-downloaded-at-updater), the new version is displayed. However, clicking **Next** has no effect. The following error message appears in the browser's developer console (F12):
<!-- cSpell:disable -->
```shell
Uncaught ReferenceError: open29NoticeHandler is not defined
at HTMLInputElement.<anonymous> (index.php?load=update:399:17)
at klass.handleEvent (prototype.js:7182:34)
at HTMLInputElement.<anonymous> (prototype.js:7266:15)
```
<!-- cSpell:enable -->
Follow these steps:

1. Run the update to version **28** again using the updater.
2. Download the update ZIP for version **29** from the [Customer Portal](../customer-portal.md).
3. Extract the ZIP in the i-doit folder, as [described here](../../maintenance-and-operation/i-doit-update.md#update-uber-die-konsole-vorbereiten).
4. Run the update to version **29** using the updater.

## Version 25 - 28

The updater incorrectly shows **v30** as the next version. Fix the problem using one of the following methods:

-   Manually extract the v29 update package into the i-doit folder.
-   Use the appropriate hotfix from the [Hotfix Archive](../hotfixes/hotfix-archive/index.md).

## Files cannot be copied

If the message `A problem occurred during update:` appears at **4. File-Update**, write permissions on the file system are often missing.

Set the file permissions according to your operating system and web server user. The following commands assume a standard installation as described under [installation](../../installation/index.md).

=== "Debian/Ubuntu"

    ```sh
    cd /var/www/html/
    sudo chown www-data:www-data -R .
    sudo find . -type d -name \* -exec chmod 775 {} \;
    sudo find . -type f -exec chmod 664 {} \;
    ```

=== "Red Hat Enterprise Linux"

    ```sh
    cd /var/www/html/
    sudo chown apache:apache -R .
    sudo find . -type d -name \* -exec chmod 775 {} \;
    sudo find . -type f -exec chmod 664 {} \;
    ```

=== "SUSE Linux Enterprise Server"

    ```sh
    cd /var/www/html/
    sudo chown wwwrun:www -R .
    sudo find . -type d -name \* -exec chmod 775 {} \;
    sudo find . -type f -exec chmod 664 {} \;
    ```

=== "Microsoft Windows Server"

    Specific file and directory permissions typically do not need to be set.
