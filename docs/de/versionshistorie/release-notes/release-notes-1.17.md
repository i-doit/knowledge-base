# Release Notes 1.17

We're happy to announce the general availability of i-doit v1.17. This is a major update with new and changed features and a lot of bug fixes since the last major release. See the [changelog](../changelogs/changelog-1.17.x/changelog-1.17.md) for a complete list of changes. We encourage you to update to this release as soon as possible.

Highlights in this release
--------------------------

*   We enhanced the documentation of **licenses**: You are now able to document licenses based on CPU cores.
*   The settings of **custom categories** got an UI update.
*   The data import from **JDisc Discovery** introduces various minor improvements.
*   Filter for empty values in lists.
*   Define how many rows should be imported from a CSV file at once in a batch.

Update notes
------------

The update to this new version [works as usual](../../wartung-und-betrieb/update-einspielen.md). We slightly adjusted the [system requirements](../../installation/systemvoraussetzungen.md):

*   **PHP:** We removed the support of PHP version 7.2 as it is end of life. PHP versions 7.3 and 7.4 are still supported while 7.4 is recommended to use. (Side note: At the moment, PHP version 8 is not supported. We plan the support of PHP 8 in a later release.)
*   **MariaDB:** We also removed the support of MariaDB version 10.1 as it is end of life. MariaDB versions 10.2, 10.3, 10.4 and 10.5 are still supported while 10.5 is the new recommended version. (Side note: When version 10.6 is marked as stable we plan to support it in a later release.)
*   **MySQL:** We removed the support of MySQL version 5.6. Version 5.7 is still supported. But we highly recommend to use MariaDB instead of MySQL.

Before you update ensure all system requirements are met and you've made a [backup of all your data](../../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md).
