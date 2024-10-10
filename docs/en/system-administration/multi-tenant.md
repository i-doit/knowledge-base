# Multi-Tenants

_i-doit_ is capable of managing multiple tenants. This means that one installation can map one or more independent [IT documentations](../glossary.md). The use cases are diverse: from sub-organizations which need to document separately of each other to system houses, which document customer IT in dedicated instances, to hosting providers which provide _i-doit_ as a service.

!!! info "Licensing"

    For the capability to operate one installation with multiple tenants a special license is required. More information is available [on request](https://www.i-doit.com/en/contact/).

Background
----------

A separate database exists in _i-doit_ for each tenant. In this database all contents as well as configurations are saved. This way, various completely different IT documentations can be maintained in one instance of _i-doit_. An exchange between tenants is not intended. This strict separation is also the reason for the [admin center](./admin-center.md) being available as a higher level administration instance.

Configuration
-------------

The administration of tenants is done in the admin center. All presently created tenants are listed in the **Tenants** section.

[![Configuration](../assets/images/en/system-administration/multi-tenants/1-mt.png)](../assets/images/en/system-administration/multi-tenants/1-mt.png)

Above the listing various options are available:

-   **Add new tenant**: create a new tenant
-   **Edit**: configure an existing tenant
-   **Activate**: activate an existing tenant, if it was deactivated before
-   **Deactivate**: deactivate an existing tenant, if it was activated before
-   **Remove**: remove an existing tenant **irreversibly**

A tenant is selected via the checkboxes for the configuration. For (de-)activating or removing one or more tenants are selected.

[![Configuration](../assets/images/en/system-administration/multi-tenants/2-mt.png)](../assets/images/en/system-administration/multi-tenants/2-mt.png)

For each tenant you need to set some properties (mandatory fields):

-   **Tenant GUI title**: name of the tenant (is shown at the login, for example)
-   **Description**: apart from its informal character this description has no effect on the functionality
-   **Sort value**: enter the sorting order as integer (the lower the value the higher is the tenant in the hierarchy)
-   **Cache dir**: much data is temporarily saved in _i-doit_ due to performance reasons. For each tenant a dedicated cache folder is created in the **temp/** folder in the installation path of _i-doit_.
-   **MySQL settings**: here it is useful to name the database name with the prefix **idoit_**. The first tenant receives the database name **idoit_data** in the [installation process](../installation/manual-installation/setup.md) by default.

Object Limitation per Tenant
----------------------------

Provided you use a multi-tenant license, you can set the maximum number of license required objects that are allowed to be documented for each tenant. This is done in the admin center at **Licenses**. The parameter **Object limit** (integer) exists there for each tenant.

[![Object Limitation per Tenant](../assets/images/en/system-administration/multi-tenants/3-mt.png)](../assets/images/en/system-administration/multi-tenants/3-mt.png)

Add-ons per Tenant
------------------

In the installation/update process of [add-ons](../i-doit-add-ons/index.md) you can choose whether this action shall be carried out for a single tenant or for all tenants. All installed add-ons are displayed per tenant in the Admin Center in **Modules**. They can be (de-)activated per tenant. The deletion of add-ons takes place for all tenants.

[![Add-ons per Tenant](../assets/images/en/system-administration/multi-tenants/4-mt.png)](../assets/images/en/system-administration/multi-tenants/4-mt.png)

!!! attention "i-doit update"

    In the [update process of i-doit](../maintenance-and-operation/update.md) a prompt will ask which tenant databases shall be updated. All of them are marked as selected by default. It is strongly recommended to take all tenant databases into account when updating. A deviation only applies in specific and well justified cases (by the support, for example).

User Administration
-------------------

The [user administration](../basics/initial-login.md) is configured per tenant, which means that person objects with login data can vary depending on the tenant.

At the login screen you are asked which tenant you want to sign in if multiple tenants are active. However, this only happens if the credentials of the user are the same for multiple tenants. Otherwise, the tenant for which the credentials are valid is loaded automatically .

[![User Administration](../assets/images/en/system-administration/multi-tenants/5-mt.png)](../assets/images/en/system-administration/multi-tenants/5-mt.png)

If a [LDAP folder/Active Directory (AD)](../user-authentication-and-management/ldap-directory/index.md) is tied to the authentication and authorization, then the configured servers will be queried one after another while logging in, to check whether the credentials are valid. After this, the tenants for which these credentials are valid are determined (see above).

If [Single Sign On (SSO)](../user-authentication-and-management/sso-comparison/index.md) is active, a tenant can be chosen as default. This is done at **Administration → System settings → Single Sign On → Default tenant**. When starting _i-doit_, the user is automatically tied to this tenant if the credentials are correct.

Switch Tenants
--------------

You can switch between tenants without having to log out first. The [main navigation bar](../basics/structure-of-the-it-documentation.md) displays the user and the tenant you are currently using. Hovering above the tenant name with your cursor shows a drop-down menu. Here the other tenants are selectable. Clicking on one will sign off the user from the current tenant and sign him in automatically to the new one. This however only works if the credentials of the user are the same in both tenants.

[![Switch Tenants](../assets/images/en/system-administration/multi-tenants/6-mt.png)](../assets/images/en/system-administration/multi-tenants/6-mt.png)
