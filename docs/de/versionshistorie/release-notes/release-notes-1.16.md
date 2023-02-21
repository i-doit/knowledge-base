# Release Notes 1.16

Release date: 2021-01-18

We’re happy to announce a new major release of i-doit. Version 1.16 brings you a bunch of added or changed features and includes many bug fixes. We encourage you to update to this release as soon as possible.

Highlights in this release
--------------------------

*   Import from JDisc Discovery: Fetch information about support entitlements for your hardware devices and import it to i-doit’s new category Support Entitlements
*   …and another related feature: Decide to import cable connections between hardware devices either to i-doit’s standard categories or to its new category Connection Endpoint

For a complete list of changes please take a look at the [changelog](../changelogs/changelog-1.16.x/changelog-1.16.md).

Add-ons
-------

With i-doit v1.16, we’ve released a bunch of add-ons to be compatible with this major release:

*   i-doit API add-on v1.12.1
*   i-doit Checkmk add-on v1.0.2
*   i-doit Documents add-on v1.4.3
*   i-doit Maintenance add-on v1.1.4
*   i-doit Nagios add-on v1.0.3
*   i-doit Workflow add-on v1.0.5

**Note:** Before you update i-doit to v1.16 please ensure all installed add-ons are up-to-date.

System requirements
-------------------

We’ve slightly adjusted the system requirements for i-doit v1.16:

*   PHP: We recommend the use of PHP version branch 7.4 which is currently under active maintenance. We’ve dropped the support of PHP 7.1 and set PHP v7.2.5 as the minimum required version. But keep in mind that PHP 7.2 is end-of-live and therefore marked as deprecated. The support will be removed in i-doit v1.17.
*   Note about PHP 8.0: We’re working on supporting PHP 8.0 in i-doit and still need some time to fix the remaining issues. Please don’t run i-doit v1.16 with PHP 8.0 as we do not support it yet.
*   MariaDB: i-doit v1.16 adds support for the current stable version branch 10.5 of MariaDB. Version branch 10.1 is marked as deprecated. The support for it will be removed in i-doit v1.17.
*   We still support MySQL as the database backend for i-doit v1.16 but recommend the use of MariaDB. We’ve marked version branch 5.6 as deprecated and will drop the support in i-doit v1.17. MySQL 5.7 is currently the only supported version branch.

**Note:** Before you update i-doit to v1.16 please ensure all [system requirements](../../installation/systemvoraussetzungen.md) are met.

Support and download
--------------------

If you have any question about this release our customer support will be happy to help you: [help.i-doit.com](https://help.i-doit.com/)

Downloads are available for subscribed users at [login.i-doit.com](https://login.i-doit.com/).

Thanks for your using i-doit as your preferred IT documentation platform and being part of our great and growing community!

– Benjamin Heisig for the i-doit team