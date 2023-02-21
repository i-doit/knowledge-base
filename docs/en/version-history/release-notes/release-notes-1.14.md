Changelog
=========

This release brings many bug fixes, some minor changes and a few new features. Please see the [changelog](../changelogs/changelog-1.14.x/index.md) for a full list of changes since i-doit 1.13.2.

Backup
======

As always, please [backup your data](../../maintenance-and-operation/backup-and-recovery/index.md) before you update to the latest version of i-doit.

System requirements
===================

i-doit 1.14 has updated [requirements](../../installation/system-requirements.md). Please make sure all requirements are met before you install/update i-doit 1.14.

As a side-effect, this reduces the list of supported operating systems. We encourage you to upgrade your operating system before updating i-doit.

PHP
---

*   PHP 7.1.8, 7.2, 7.3 or 7.4
*   PHP 7.0 is not supported any more
*   PHP 7.1.8 is deprecated
*   PHP 7.3 is still recommended

MariaDB
-------

*   MariaDB 10.1, 10.2, 10.3 or 10.4
*   MariaDB 10.0 is not supported any more
*   MariaDB 10.4 is recommended

Reports
=======

In i-doit 1.13.1 there was a first important step to migrate all reports from system to tenant database(s). With 1.14 we finalize this migration during the update process. All remaining reports in system database will be permanently removed. Please make sure all your [reports](../../evaluation/report-manager.md) are properly migrated and still working.

Support
=======

For any questions do not hesitate to contact our support at[help.i-doit.com.](https://help.i-doit.com/)