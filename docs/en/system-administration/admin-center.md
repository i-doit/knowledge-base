# Admin Center

The admin center is a separate administration interface integrated in i-doit. Here the settings shared by all tenants are configured.

Credentials
-----------

!!! attention "Attention!"

    Please do not edit the password if one is already assigned. This can only be changed via the [CLI!](../automation-and-integration/cli/index.md)

For the admin center there are **separate credentials**. These can be specified during the [installation of i-doit](../installation/manual-installation/setup.md). If this step was skipped, then there is no access to the admin center possible at first. In order to assign the credentials afterwards, the src/config.inc.php file in the installation folder of i-doit needs to be edited. The username and password in the file should be replaced with the respective values:

    $g_admin_auth = array(
            "username" => "password",
    );

Signing In
----------

The admin center can be accessed via the [login screen of i-doit](../basics/initial-login.md). The **Admin-Center** link is located beneath the login screen.

[![Signing In](../assets/images/en/system-administration/admin-center/1-ac.png)](../assets/images/en/system-administration/admin-center/1-ac.png)

!!! info "Assign credentials"

    This link is only available if the credentials for the admin center have been configured (see above).

As an alternative, the URL to the admin center can be entered in the browser. For this purpose,  /admin/ is added to the link to i-doit :

    https://i-doit.example.net/i-doit/admin/

[![Assign credentials](../assets/images/en/system-administration/admin-center/2-ac.png)](../assets/images/en/system-administration/admin-center/2-ac.png)

Overview
--------

In the **Home** section the currently installed version of _i-doit_ is displayed. In the **Actions** item the **i-doit environment info file** can be downloaded. This is a XML file with important system settings which can be very helpful for [troubleshooting](./troubleshooting/index.md).

[![Overview](../assets/images/en/system-administration/admin-center/3-ac.png)](../assets/images/en/system-administration/admin-center/3-ac.png)

Tenants
-------

Tenants are administrated in the **Tenants** section. This, however, is only relevant for a multi-tenant license of _i-doit_. New tenants can be generated using the **Add new tenant** button. Existing tenants can also be edited, (de)activated or deleted completely. A deleted tenant can only be restored via a [back up](../maintenance-and-operation/backup-and-recovery/index.md).

[![Tenants](../assets/images/en/system-administration/admin-center/4-ac.png)](../assets/images/en/system-administration/admin-center/4-ac.png)

Licenses
--------

[Licenses for i-doit can be installed](../maintenance-and-operation/activate-license.md) via the **Licenses** section.

[![Licenses](../assets/images/en/system-administration/admin-center/5-ac.png)](../assets/images/en/system-administration/admin-center/5-ac.png)

In the first step, the license file is uploaded by using the **Install new license** button. The respective option in the newly opened section has to be selected depending on whether it is a subscription-based license, a buyers license or a multi-tenant buyers license. For a subscription-based license or a buyers license it is sufficient to choose the associated tenant.

If a tenant or a multi-tenant buyers license is used, additional options are available in the "Multi-Tenant" section. In the "Multi-tenant options" column the tenants to be licensed can be selected. After licensing a tenant, he receives a row in the upper section. Here the object limit for each tenant can be determined. Save your limit specifications using the "Save changes" button.

Add-ons
-------

In the **Add-ons** section the [Add-ons](../i-doit-pro-add-ons/index.md) are managed. Each feature of _i-doit_ is encapsulated in a Add-on.

[![Add-ons](../assets/images/en/system-administration/admin-center/6-ac.png)](../assets/images/en/system-administration/admin-center/6-ac.png)

Support
-------

The [customer portal](../system-administration/customer-portal.md) is embedded in the **Support** section. Download packages and licenses can be downloaded here among other things.

[![Support](../assets/images/en/system-administration/admin-center/7-ac.png)](../assets/images/en/system-administration/admin-center/7-ac.png)

Configuration
-------------

In the **Config** tab two items can be configured:

*   Via **Admin-Center Credentials** the credentials to the admin center can be changed (see above).
*   Via **Connection to i-doit System Database** the access to the system database can be changed.

[![Configuration](../assets/images/en/system-administration/admin-center/8-ac.png)](../assets/images/en/system-administration/admin-center/8-ac.png)

The settings can alternatively be changed in the src/config.inc.php file in the installation path of i-doit. This file is created during the [installation process of i-doit](../installation/manual-installation/setup.md). If an [update of i-doit](../maintenance-and-operation/update.md) is installed, a [backup](../maintenance-and-operation/backup-and-recovery/index.md) of the file is shown automatically. The date of the update is stated in the file name.