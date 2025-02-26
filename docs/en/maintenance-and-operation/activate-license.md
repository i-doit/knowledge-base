---
title: i-doit licensing
description: i-doit licensing
icon: license
status: updated
lang: en
---

# i-doit licensing

The licensing of i-doit and add-ons takes place via a license token. The license token can be found in the [customer portal](../system-administration/customer-portal.md).

* * *

## How do I obtain the License Token and the Offline License?

!!! hint "If you are evaluation i-doit please contact us via [help.i-doit.com](https://help.i-doit.com){: target="_blank" } or <mailto:help@i-doit.com> to get your offline license token"

The **License Token** will be sent by e-mail. The **Offline License** can be accessed in the [customer portal](../system-administration/customer-portal.md) at <https://center.i-doit.com/portal/advanced>.

* * *

## Which method should I use to activate i-doit?

-   If your server on which i-doit is installed has an **active internet connection**, use the [License Token](#activate-i-doit-via-the-add-on--subscription-center-online).
-   If your server, on which i-doit is installed, does not have an **active internet connection**, use [License Token and Offline license](#activate-i-doit-offline).

* * *

### Activate i-doit via the Add-on & Subscription Center (Online)

**Step 1:** First, we call up the i-doit installation via the browser and log in. Navigate to the **Avatar icon** at the top right and click on **[Add-on & Subscription Center](../system-administration/add-on-and-subscription-center.md)**.

[![login](../assets/images/en/maintenance-and-operation/activate-license/add-on-und-subscription-center.png)](../assets/images/en/maintenance-and-operation/activate-license/add-on-und-subscription-center.png)

**Step 2:** Next, we need to enter the license token that we received by email.

[![Admin-Center](../assets/images/en/maintenance-and-operation/activate-license/enter-license-token.png)](../assets/images/en/maintenance-and-operation/activate-license/enter-license-token.png)

**Done** We are now logged into the [Add-on & Subscription Center](../system-administration/add-on-and-subscription-center.md) and i-doit is licensed. You can now install additional [Add-ons](../i-doit-add-ons/index.md) via the [Add-on & Subscription Center](../system-administration/add-on-and-subscription-center.md).

**_Note_**_: The License Token is structured as follows:_ **_2e23aa70df492b7e7b8f321929gc6fcd6e7776_**

* * *

### Activate i-doit via the Admin-Center (online)

**Step 1:** First, we call up the i-doit installation via the browser. To access the [Admin-Center](../system-administration/admin-center.md), click on the link in the login screen.

[![login](../assets/images/en/maintenance-and-operation/activate-license/1.Login_admin.png)](../assets/images/en/maintenance-and-operation/activate-license/1.Login_admin.png)

**Step 2:** Next, you need to enter the credentials you assigned for the Admin-Center when you installed i-doit.

!!! note "If you use the **Eval Appliance**, use **admin** as username and **idoit** as password"

[![Admin-Center](../assets/images/en/maintenance-and-operation/activate-license/2.login_admin_center.png)](../assets/images/en/maintenance-and-operation/activate-license/2.login_admin_center.png)

**Step 3:** Now we are logged into the [Admin-Center](../system-administration/admin-center.md) and click on the "Licenses" tab.

[![Admin-Center](../assets/images/en/maintenance-and-operation/activate-license/3.admin-center-home.png)](../assets/images/en/maintenance-and-operation/activate-license/3.admin-center-home.png)

**Step 4:** To activate your i-doit installation, copy the license token into the input field.

[![import a licence](../assets/images/en/maintenance-and-operation/activate-license/4.admin-center-licenses.png)](../assets/images/en/maintenance-and-operation/activate-license/4.admin-center-licenses.png)

**Step 5:** We then click on the **Save & Check** button. The license token is now checked by the license server. Done.

[![License Token](../assets/images/en/maintenance-and-operation/activate-license/5.admin-center-licenses-token.png)](../assets/images/en/maintenance-and-operation/activate-license/5.admin-center-licenses-token.png)

**_Note_**: The License Token looks as follows: **2e23aa70df492b7e7b8f321929gc6fcd6e7776**

* * *

### Activate i-doit (offline)

**Step 1:** First, we call up the i-doit installation via the browser. To access the [Admin-Center](../system-administration/admin-center.md), click on the link in the login screen.

[![License Token](../assets/images/en/maintenance-and-operation/activate-license/1.Login_admin.png)](../assets/images/en/maintenance-and-operation/activate-license/1.Login_admin.png)

**Step 2:** Next, we need to enter the login data that we assigned to the [Admin-Center](../system-administration/admin-center.md) during the installation of i-doit.

!!! note "If you have the **Eval Appliance**, use **admin** as username and **idoit** as password"

[![Install new license](../assets/images/en/maintenance-and-operation/activate-license/2.login_admin_center.png)](../assets/images/en/maintenance-and-operation/activate-license/2.login_admin_center.png)

**Step 3:** Now we insert the **License Token**. Click on the {++Save++} button.

!!! warning "**Do not** click on {--Save and Check--}."

[![Offline License Key](../assets/images/en/maintenance-and-operation/activate-license/6-offline-token.png)](../assets/images/en/maintenance-and-operation/activate-license/6-offline-token.png)

**Step 4:** After the token has been saved, we click on the **Install new license** button.

[![Add licence](../assets/images/en/maintenance-and-operation/activate-license/7.add-new-license-button.png)](../assets/images/en/maintenance-and-operation/activate-license/7.add-new-license-button.png)

**Step 5:** Now we see the field into which the entire **Offline License** must be copied. The **Offline License** can be copied from [here](#how-do-i-obtain-the-license-token-and-the-offline-license). Then click on the **Add license** button.

[![license-file-add](../assets/images/en/maintenance-and-operation/activate-license/10.add-new-license-save.png)](../assets/images/en/maintenance-and-operation/activate-license/10.add-new-license-save.png)

**Done** The license token is verified with the offline license and all associated licenses are displayed.

[![Offline License Key](../assets/images/en/maintenance-and-operation/activate-license/11.admin-center-licenses-token.png)](../assets/images/en/maintenance-and-operation/activate-license/11.admin-center-licenses-token.png)

* * *

## Activation via the Admin-Center (outdated)

After logging in, the installation via the [Admin-Center](../system-administration/admin-center.md) is carried out in the **Licenses** tab. Use the button **Install new licence** to open the expanded dialogue and select the downloaded License file.

New log-in may be required

When a license was activated successfully and you want to work with i-doit, it may be the case that you nevertheless receive the information that no valid license is activated. You can correct the situation by logging off and then logging in again with the current user. Afterwards, this note should not reappear.

[![New log-in may be required](../assets/images/en/maintenance-and-operation/activate-license/12.i-doit-license.png)](../assets/images/en/maintenance-and-operation/activate-license/12.i-doit-license.png)

Automatic license distribution

Please note that in the **Tenants** tab you can configure how many object licenses can be assigned to a client. Even if only a single client exists, a switched off automatic license distribution can ensure that not all object licenses are used. If this is the case, it can simply be activated and applied with a click on save.

* * *

## FAQ

!!! attention "Name of the database"
    When creating a license for a single tenant, the **name of the database** is required. Please make sure that the name is available to you when creating the license in our customer portal
    Licenses have a certain period of time during which they are valid. If the period expires a new license is required.

!!! attention "Token compatibility"
    License Token can be used starting with **i-doit version 1.12.2**
    Offline License Key can be used only with **i-doit version 1.15**

!!! info "Pre i-doit 1.12.2 behavior"
    Multiple types of licenses are available for i-doit:

    *   The **subscription license** for each single tenant (including **trial licenses**)
        You can load a subscription license via the [Admin-Center](../system-administration/admin-center.md)
    *   The **subscription license** for multiple **tenants**
        If you wish to use one subscription license for multiple tenants, you can only Activate this via the Admin-Center.
    *   The **buy** license for single or multiple **tenants**
        The activation for both types is also carried out via the [Admin-Center](../system-administration/admin-center.md)

!!! info "Re-login necessary"
    If a license is successfully installed, it can still happen that a message appears when continuing to work with i-doit that no valid license has been activated. In this case, it helps to log out and log in again with the current user. The message should then not appear again.

* * *

### The license is valid but i-doit shows that it is not licensed?

!!! success "Open the Tenant tab in the Admin-Center and click on **Save license settings**."
    [![tenant-licenses](../assets/images/en/maintenance-and-operation/activate-license/13.png)](../assets/images/en/maintenance-and-operation/activate-license/13.png)
