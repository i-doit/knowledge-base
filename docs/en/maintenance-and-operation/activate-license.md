---
title: Licensing
description: Licensing
icon:
status: updated
lang: en
---

# Licensing

The licensing of i-doit and add-ons takes place via a license token. The license token can be found in the [customer portal](../system-administration/customer-portal.md).

## Which method of importing a license should I use?

*   If your server on which i-doit is installed has an **active internet connection**, use the [License Token](#).
*   If your server, on which i-doit is installed, does not have an **active internet connection**, use [License Token and Offline license](#).

* * *

### How do I obtain the License Token and the Offline License?

The **License Token** will be sent by e-mail. The **Offline License** can be accessed at <https://center.i-doit.com/portal/advanced>. You will need a valid **License Token** to log in to the [Add-on & Subscription Center](../system-administration/add-on-and-subscription-center.md).

* * *

### Activate License Token via the Add-on & Subscription Center (Online)

**Step 1:** First, we call up the i-doit installation via the browser and log in. Navigate to the **Avatar icon** at the top right and click on **[Add-on & Subscription Center](../system-administration/add-on-and-subscription-center.md)**. You will then be asked to enter your License Token.

[![login](../assets/images/en/maintenance-and-operation/activate-license/2-al.png)](../assets/images/en/maintenance-and-operation/activate-license/2-al.png)

**Step 2:** Next, we need to enter the license token that we received by email.

[![admin center](../assets/images/en/maintenance-and-operation/activate-license/3-al.png)](../assets/images/en/maintenance-and-operation/activate-license/3-al.png)

**Step 3:** We are now logged into the [Add-on & Subscription Center](../system-administration/add-on-and-subscription-center.md) and i-doit is licensed.

* * *
///TODO
### Activate License Token Online

**Step 1:** Go to the i-doit customer portal. To enter the admin center, click on the link in the login screen.

[![login](../assets/images/en/maintenance-and-operation/activate-license/2-al.png)](../assets/images/en/maintenance-and-operation/activate-license/2-al.png)

**Step 2:** Next, you need to enter the credentials you assigned for the admin center when you installed i-doit.

[![admin center](../assets/images/en/maintenance-and-operation/activate-license/3-al.png)](../assets/images/en/maintenance-and-operation/activate-license/3-al.png)

**Step 3:** Now you are logged into the Admin Center and click on the "Licenses" tab.

[![Admin Center](../assets/images/en/maintenance-and-operation/activate-license/4-al.png)](../assets/images/en/maintenance-and-operation/activate-license/4-al.png)

**Step 4:** Here you can import a licence file or your License Token. For this you copy the License Token into the input field.

[![import a licence](../assets/images/en/maintenance-and-operation/activate-license/5-al.png)](../assets/images/en/maintenance-and-operation/activate-license/5-al.png)

**\*If a license file is still installed here, it must be deleted.**

Afterwards click on the **Save & Check**-button. Now the License Token will be checked by the license server.

**Step 5:** The License Token has been verified by the license server and all associated licenses are displayed.

[![License Token](../assets/images/en/maintenance-and-operation/activate-license/6-al.png)](../assets/images/en/maintenance-and-operation/activate-license/6-al.png)

**_Note_**: The License Token looks as follows: **2e23aa70df492b7e7b8f321929gcfcde**

* * *

### Activate Offline License Key Offline

We perform [Steps 1-5](#activate-licenses-steps-1-5) beforehand.

**Step 5:** Insert **License Token**. Click the **Save**\-button. Do **not** click "Save and Check".

[![License Token](../assets/images/en/maintenance-and-operation/activate-license/7-al.png)](../assets/images/en/maintenance-and-operation/activate-license/7-al.png)

**Step 6:** Click on the "**Install new license**" button.

[![Install new license](../assets/images/en/maintenance-and-operation/activate-license/8-al.png)](../assets/images/en/maintenance-and-operation/activate-license/8-al.png)

**Step 7:** Now you see a field into which the entire **Offline License Key** string must be copied.

[![Offline License Key](../assets/images/en/maintenance-and-operation/activate-license/9-al.png)](../assets/images/en/maintenance-and-operation/activate-license/9-al.png)

**_Note:_** Depending on how many add-ons are included in the purchased license, there will be several license keys. You can copy them contiguously into the field.

[![Note](../assets/images/en/maintenance-and-operation/activate-license/10-al.png)](../assets/images/en/maintenance-and-operation/activate-license/10-al.png)

**Step 8:** Now click on the **Add licence**-button.

[![Add licence](../assets/images/en/maintenance-and-operation/activate-license/11-al.png)](../assets/images/en/maintenance-and-operation/activate-license/11-al.png)

Now the License Token has been verified with the Offline License Key string and all associated licenses are displayed.

[![Offline License Key](../assets/images/en/maintenance-and-operation/activate-license/12-al.png)](../assets/images/en/maintenance-and-operation/activate-license/12-al.png)

* * *

### Activation via the Admin-Center (License file outdated)

After logging in, the installation via the [Admin center](../system-administration/admin-center.md) is carried out in the **Licenses** tab. Use the button **Install new licence** to open the expanded dialogue and select the downloaded License file.

New log-in may be required

When a license was activated successfully and you want to work with i-doit, it may be the case that you nevertheless receive the information that no valid license is activated. You can correct the situation by logging off and then logging in again with the current user. Afterwards, this note should not reappear.

[![New log-in may be required](../assets/images/en/maintenance-and-operation/activate-license/13-al.png)](../assets/images/en/maintenance-and-operation/activate-license/13-al.png)

Automatic license distribution

Please note that in the **Tenants** tab you can configure how many object licenses can be assigned to a client. Even if only a single client exists, a switched off automatic license distribution can ensure that not all object licenses are used. If this is the case, it can simply be activated and applied with a click on save.

* * *

### Eval Licenses

You can [apply for a license to test i-doit for 30-days](https://www.i-doit.com/) on our website.

Name of the test database

The trial license is always issued for the database name **idoit\_data**. To guarantee a flawless function during the trial period, you may not change the name of the database during the installation!

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

    *   The **subscription** license for each single tenant (including **trial licenses**)  
        You can load a subscription license via the [Admin center](../system-administration/admin-center.md) 
    *   The **subscription** license for multiple **tenants**  
        If you wish to use one subscription license for multiple tenants, you can only Activate this via the Admin center.
    *   The **buy** license for single or multiple **tenants**  
        The activation for both types is also carried out via the [Admin center](../system-administration/admin-center.md)
