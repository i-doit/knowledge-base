---
title: i-doit Add-ons
description: i-doit Add-ons
icon: add-ons
status:
lang: en
---

The [IT documentation](../basics/structure-of-the-it-documentation.md) and the [CMDB](../basics/structure-of-the-it-documentation.md) are in the foreground of i-doit. Moreover, there are extra add-ons to expand the scope of available functions of i-doit in line with your demands. In this way, the user is provided with a completely new perspective on IT documentation.

!!! info "All available add-ons are listed at [https://www.i-doit.com/en/products/add-ons](https://www.i-doit.com/en/products/add-ons){:target="_blank"}"

Beside these add-ons there are many others which are provided by our partners or external developers. You can find a detailed list at the i-doit website [i-doit.com under **Product → Add-ons**](https://www.i-doit.com/en/i-doit/add-ons/).

## Download

Add-ons are available as ZIP-files. These are installed via the [Admin Center](../system-administration/admin-center.md#add-ons). Customers can download add-ons in the [customer portal](../system-administration/customer-portal.md). Add-ons which are subject to licensing (see above) will be unlocked for download in your customer account in the buying process. If you miss any add-ons that you bought, please contact [help@i-doit.com](mailto:help@i-doit.com) for assistance. Evaluation users can download all free- und commercial add-ons in the evaluation process. There are download buttons for all add-ons on your personal evaluation page (e.g. [https://center.i-doit.com](https://center.i-doit.com)). All add-ons that are subject to licensing are licensed in the evaluation license.

## Installation

Installation is possible with the implemented [Add-on & Subscription center](../system-administration/add-on-and-subscription-center.md).

Also add-ons are installable via the [Admin-Center](../system-administration/admin-center.md). After successfully logging in to the Admin-Center, just change to the **Add-ons** tab and use the **Install/update module** button.

[![Installation](../assets/images/en/i-doit-add-ons/1-iao.png)](../assets/images/en/i-doit-add-ons/1-iao.png)

As soon as you click the button a new dialogue appears. First you have to determine whether the add-on is to be installed for all [tenants](../system-administration/multi-tenant.md) (**All tenants**) or just for a single one. Click the **Browse...** button under **ZIP File** to select the add-on. To confirm the download and installation of the ZIP file to the host click **Upload and install**.

[![Modules](../assets/images/en/i-doit-add-ons/2-iao.png)](../assets/images/en/i-doit-add-ons/2-iao.png)

!!! info "System settings"
    The [settings](../installation/manual-installation/system-settings.md) for the file upload need to allow the upload to make the installation possible. The limit for the maximum file size also needs to be above the file size of the archive for the installation.

After the add-on has been installed successfully, you will receive a confirmation message. The add-on will now also appear in the list of installed add-ons of the corresponding tenant. Each tenant uses a separate list.

[![Overview](../assets/images/en/i-doit-add-ons/3-iao.png)](../assets/images/en/i-doit-add-ons/3-iao.png)

If an add-on is available but not yet installed, it will be marked with **not installed** in the list of the respective tenant. With the **Install** button you can carry out the installation later without having to upload the ZIP file again.

## Rights Assignment

Each add-on has its own rights which are assigned per person or person group. After installation of a new add-on, the users have no permissions yet to use it. You have to carry out further steps in the [Rights Management](../efficient-documentation/rights-management/index.md).

## Update

The required steps are similar to the installation process: Upload and install the new ZIP file via the **Install/update module** button.

## Uninstall

You can uninstall an add-on with the above mentioned list by activating the checkbox and then using the **Uninstall selected module** button. A dialogue will ask you to confirm this action. All files and user data associated with the add-on will be **deleted irreversibly**. The Uninstallation will be **system-wide**. By clicking various checkboxes you can uninstall several add-ons simultaneously.

## (De)activation

If you wish to pause the usage of an add-on without deleting the associated data, you can deactivate the add-on. To do so activate the checkbox of the corresponding entry in the list and use the **Deactivate selected module** button for the respective tenant. Now the functions and user data of the add-on are no longer available.

A renewed activation follows a similar process: Select the respective add-on in the list and click the **Activate selected module** button. Now the functions and user data will be available again.

All other tenants remain unaffected by these actions. By clicking various checkboxes you can activate/ deactivate several add-ons respectively one add-on for several tenants simultaneously.
