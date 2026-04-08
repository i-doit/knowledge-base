---
title: Release Notes 1.7
description: "> With i-doit 1.7, there are several new features to be aware of before updating."
icon:
status:
lang: en
---
# Release Notes 1.7

> With i-doit 1.7, there are several new features to be aware of before updating.
>
> ### Changed System Requirements
>
> The system requirements have changed. i-doit now requires at least MySQL 5.6 or MariaDB 10 as the database platform. Please update your database platform before performing the i-doit update.
>
> Instructions and notes on updating the database system can be found in our Knowledge Base at: [Upgrade to MySQL 5.6 and MariaDB 10.0](../../upgrades-und-umzuege/upgrade-zu-mysql-5.6-oder-mariadb-10.0.md)
>
> If you have any questions or problems, please do not hesitate to contact our support at [support@i-doit.com](mailto:support@i-doit.com). We are happy to help.
>
> ### Search Index
>
> Starting with version 1.7, i-doit features a new search index. This is required to use the object search. It is automatically generated during the update from 1.6 to 1.7. Exceptions are installations with more than 500,000 licensed objects. Installations with more than 500,000 licensed objects will receive a note during the update about manual generation of the search index. This is described below.
>
> In general, the search index is automatically updated during manual input or imports.
>
> If objects are automatically created in i-doit via the API, the search index must be automatically generated via a crontab. The controller has received a corresponding function extension for this purpose. An example crontab entry looks as follows:
>
> 0 3 \* \* \* /var/www/controller -u admin -p admin -i 1 -v -m search\_index reindex
>
> If you have any questions or problems, please do not hesitate to contact our support at [support@i-doit.com](mailto:support@i-doit.com). We are happy to help.
>
> ### Optional Switch Stacking Migration
>
> Starting with i-doit 1.7, switch stacking documentation has been extended. The "Stacking" category is replaced by objects of the type "Stacking" (found under "Other").
>
> This new object type contains the "Stack Member" category, which hosts the members of the stacking group.
>
> During the update, the previous categories are preserved so as not to remove any functionality. If you wish to migrate from the old method to the new one, our support team will be happy to provide you with a procedure. Please contact us at [support@i-doit.com](mailto:support@i-doit.com).
>
> For new installations, the old "Stacking" category no longer exists. While all files and tables are still present, the entry is no longer available in the GUI.
>
> ### VRRP/HSRP
>
> The VRRP/HSRP mapping is also now represented in an extended logic starting with version 1.7. The object type for VRRP/HSRP clusters has received a new category in which VRRP/HSRP IP clustering can now be mapped with more dedicated and detailed information. A conversion or migration is not necessary here; you can use the new category as needed if you wish to use the extended features.
