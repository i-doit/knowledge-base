---
title: i-doit Add-ons
description: "With i-doit, the focus is on IT documentation and the CMDB."
icon: add-ons
status:
lang: en
---

With i-doit, the focus is on [IT documentation](../grundlagen/struktur-it-dokumentation.md) and the [CMDB](../grundlagen/struktur-it-dokumentation.md). In addition, there are supplementary add-ons to extend the functionality of i-doit as needed. This gives users an entirely new perspective on IT documentation.

!!! info "All available add-ons can be found at [https://www.i-doit.com/produkte/add-ons](https://www.i-doit.com/produkte/add-ons){:target="_blank"}"

In addition to these add-ons, many more are available from our partners and external developers. A comprehensive list can be found [on the i-doit.com website under **Product → Add-ons**](https://www.i-doit.com/i-doit/add-ons/).

## Download

Add-ons are available as installable ZIP files. These are installed via the [Admin Center](../administration/admin-center.md#add-ons).
In the [customer portal](../administration/kundenportal.md), customers can download add-ons. Licensed add-ons (see above) are made available for download in your customer account during the purchase process.
If you are missing any add-ons that you have purchased, please contact [help@i-doit.com](mailto:help@i-doit.com) for assistance.

Evaluation users can download all free and commercial add-ons during the evaluation process. Download buttons for all add-ons are available on your personal evaluation page at [https://center.i-doit.com](https://center.i-doit.com). All licensed add-ons are included in the evaluation license.

## installation

All modules and extensions are installed via the [Admin Center](../administration/admin-center.md) under **Modules → Install/update module**.

[![installation](../assets/images/de/i-doit-add-ons/1-i-doit-add-ons.png)](../assets/images/de/i-doit-add-ons/1-i-doit-add-ons.png)

The button opens a new dialog. Under **Tenant**, you specify whether the add-on should be installed in all [tenants](../administration/mandantenfaehigkeit.md) (**All tenants**) or only in a single one. Using the **Browse...** button under **ZIP File**, you select the add-on. After clicking the **Upload and install** button, the ZIP file is uploaded to the i-doit host and installed.

[![Upload and install](../assets/images/de/i-doit-add-ons/2-i-doit-add-ons.png)](../assets/images/de/i-doit-add-ons/2-i-doit-add-ons.png)

System settings

For installation to be possible, the maximum file size liwith must exceed the file size of the ZIP file. Anyone who has fully met the [system requirements](../installation/manual-installation/systemeinstellungen.md) should not encounter any difficulties.

After successful installation, a corresponding success message is displayed. The add-on is now listed in the list of installed add-ons. Each tenant has its own list here.

[![System settings](../assets/images/de/i-doit-add-ons/3-i-doit-add-ons.png)](../assets/images/de/i-doit-add-ons/3-i-doit-add-ons.png)

If an add-on is available but not yet installed, it is marked as **not installed** in the respective tenant's list. The installation can be completed using the **Install** button without having to re-upload the ZIP file.

## Assigning rights

Each add-on has its own permissions that can be assigned per person or person group. After installing a new add-on, users do not yet have any permissions to use it. Further steps in the [authorization management](../effizientes-dokumentieren/rechteverwaltung/index.md) are required.

## Updating

When a new version of an add-on becomes available, it can be updated without a complete reinstallation. All previously maintained data is preserved in this process.

The steps are similar to the installation: Under **Install/update module**, the new ZIP file is uploaded and installed. If i-doit has an internet connection, the add-on can alternatively be updated using the **Update / Re-Install** button in the respective list. The ZIP file is automatically downloaded and installed. This feature is not available for all add-ons.

## Uninstalling

An installed add-on can be uninstalled via the list mentioned above. To do this, select it using the checkbox. After clicking the **Uninstall selected module** button and confirming, all files and user data are **irrevocably deleted**. The uninstallation is performed across all tenants. Check the boxes to uninstall multiple add-ons at the same time.

## (De-)Activating

To stop using an add-on without losing user data, the add-on can be deactivated. To do this, select it using the checkbox and deactivate it for the respective tenant using the **Deactivate selected module** button. The functions and user data are then no longer available.

Reactivation works similarly: Select the add-on in the list and click the **Activate selected module** button. This makes the functions and user data visible again.

All other tenants remain unaffected by these actions. Check the boxes to deactivate multiple add-ons or an add-on in multiple tenants at the same time.
