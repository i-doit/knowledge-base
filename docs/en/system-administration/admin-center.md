**Contents**

*   1[Credentials](#AdminCenter-Credentials)
*   2[Signing In](#AdminCenter-SigningIn)
*   3[Overview](#AdminCenter-Overview)
*   4[Tenants](#AdminCenter-Tenants)
*   5[Licenses](#AdminCenter-Licenses)
*   6[Add-ons](#AdminCenter-Add-ons)
*   7[Support](#AdminCenter-Support)
*   8[Configuration](#AdminCenter-Configuration)

The admin center is a separate administration interface integrated in i-doit. Here the settings shared by all tenants are configured.

Credentials
-----------

Attention!

Please do not edit the password if one is already assigned. This can only be changed via the [CLI!](/display/en/CLI)

  

For the admin center there are **separate credentials**. These can be specified during the [installation of i-doit](/display/en/Setup). If this step was skipped, then there is no access to the admin center possible at first. In order to assign the credentials afterwards, the `src/config.inc.php` file in the installation folder of i-doit needs to be edited. The `username` and `password` in the file should be replaced with the respective values:

[?](#)

`$g_admin_auth = array(`

`"username"` `=>` `"password"``,`

`);`

Signing In
----------

The admin center can be accessed via the [login screen of i-doit](/display/en/Initial+Login). The **`Admin-Center`** link is located beneath the login screen.

![](/download/attachments/42303640/login-admin-center.jpg?version=1&modificationDate=1490201986427&api=v2&effects=drop-shadow)

Assign credentials

This link is only available if the credentials for the admin center have been configured (see above).

As an alternative, the URL to the admin center can be entered in the browser. For this purpose,  `/admin/` is added to the link to i-doit :

[?](#)

`https:``//i-doit``.example.net``/i-doit/admin/`

![](/download/attachments/42303640/admin_center_login.png?version=1&modificationDate=1490202016419&api=v2)

Overview
--------

In the **`Home`** section the currently installed version of _i-doit_ is displayed. In the **`Actions`** item the **`i-doit environment info file`** can be downloaded. This is a XML file with important system settings which can be very helpful for [troubleshooting](/display/en/Troubleshooting).

![](/download/attachments/42303640/image2022-1-25_15-33-5.png?version=1&modificationDate=1643121186010&api=v2&effects=drop-shadow)

Tenants
-------

Tenants are administrated in the **`Tenants`** section. This, however, is only relevant for a multi-tenant license of _i-doit_. New tenants can be generated using the **`Add new tenant`** button. Existing tenants can also be edited, (de)activated or deleted completely. A deleted tenant can only be restored via a [back up](/display/en/Backup+and+Recovery).

![](/download/attachments/42303640/image2022-1-25_15-33-45.png?version=1&modificationDate=1643121225561&api=v2&effects=drop-shadow)

Licenses
--------

[Licenses for i-doit can be installed](/display/en/Activate+License) via the **`Licenses`** section.

![](/download/attachments/42303640/image2022-1-25_15-34-26.png?version=1&modificationDate=1643121268168&api=v2&effects=drop-shadow)

In the first step, the license file is uploaded by using the **`Install new license`** button. The respective option in the newly opened section has to be selected depending on whether it is a subscription-based license, a buyers license or a multi-tenant buyers license. For a subscription-based license or a buyers license it is sufficient to choose the associated tenant.

If a tenant or a multi-tenant buyers license is used, additional options are available in the "Multi-Tenant" section. In the "Multi-tenant options" column the tenants to be licensed can be selected. After licensing a tenant, he receives a row in the upper section. Here the object limit for each tenant can be determined. Save your limit specifications using the "Save changes" button.

Add-ons
-------

In the **`Add-ons`** section the [Add-ons](/display/en/i-doit+pro+Add-ons) are managed. Each feature of _i-doit_ is encapsulated in a Add-on.

![](/download/attachments/42303640/image2022-1-25_15-32-1.png?version=1&modificationDate=1643121122974&api=v2&effects=drop-shadow)

Support
-------

The [customer portal](/display/en/Customer+Portal) is embedded in the **`Support`** section. Download packages and licenses can be downloaded here among other things.

![](/download/attachments/42303640/image2022-1-25_15-34-59.png?version=1&modificationDate=1643121300320&api=v2&effects=drop-shadow)

Configuration
-------------

In the **`Config`** tab two items can be configured:

*   Via `**Admin-Center Credentials**` the credentials to the admin center can be changed (see above).
*   Via `**Connection to i-doit System Database**` the access to the system database can be changed.

![](/download/attachments/42303640/image2022-1-25_15-41-0.png?version=1&modificationDate=1643121660977&api=v2&effects=drop-shadow)

The settings can alternatively be changed in the `src/config.inc.php` file in the installation path of i-doit. This file is created during the [installation process of i-doit](/display/en/Setup). If an [update of i-doit](/display/en/Update) is installed, a [backup](/display/en/Backup+and+Recovery) of the file is shown automatically. The date of the update is stated in the file name.