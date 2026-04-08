---
title: Upgrade from i-doit open to pro
description: "How to upgrade from i-doit open to i-doit with extended features."
icon: fontawesome/brands/linux
status:
lang: en
---

How to upgrade from _i-doit open_ to _i-doit_ with extended features.

## Motivation

_i-doit_ offers [significantly more features](https://www.i-doit.org/cmdb-it-documentation/), compared to the open variant that make your daily work easier.

## Overview: Seven Steps to _i-doit_

1. Preparation
2. Download and apply the pro update
3. Install the pro add-on
4. Apply license
5. Clear caches
6. Configure permissions
7. Post-processing

## Preparation

!!! warning "This process cannot be undone. Create a working [backup](../wartung-und-betrieb/daten-sichern-und-wiederhfirstllen/index.md)!"

After the upgrade, you will need a valid [license for i-doit](../wartung-und-betrieb/lizenzierung.md). Make sure that the [system requirements](../installation/systemvoraussetzungen.md) and [settings](../installation/manual-installation/systemeinstellungen.md) are met.

For older open installations, note:

*   If i-doit open **0.9.x** or older is installed, an upgrade is not possible.
*   If i-doit open **1.4.x** is installed, it must first be updated to the latest version from 1.8.
*   If i-doit open **1.8.x** or higher is installed, the upgrade can proceed.

The current version is available for download at [i-doit.org](http://i-doit.org/) .

## Download and Apply the pro Update

1. Download the update package of the pro variant from the [customer portal](../administration/kundenportal.md) .
2. Apply it [as usual](../wartung-und-betrieb/update-einspielen.md) .

The version numbers must match: If i-doit open 1.8 is installed, use the update package i-doit 1.8. The installation package of the pro variant does **not** work for the upgrade.

## Install the pro Add-on

After the update, install the pro add-on in the [Admin Center](../administration/admin-center.md) under **Add-ons**.

## Apply License

Apply the valid license [in the Admin Center under **Licenses**](../wartung-und-betrieb/lizenzierung.md) .

## Clear Caches

1. Log out of the Admin Center and log in to i-doit.
2. Navigate to **Administration → System Tools → Cache / Database** and click **Clear entire cache**.
3. Clear the browser cache with **CTRL+F5**.

## Configure Permissions

Unlike i-doit open, i-doit has a comprehensive [permissions system](../effizientes-dokumentieren/rechteverwaltung/index.md). Your user does not yet have all permissions after the upgrade.

To get full access:

1. Navigate to **Administration → Permissions System → Reset Permissions System**.
2. Enter the credentials for the [Admin Center](../administration/admin-center.md) .

Then configure the permissions for other persons and person groups.

## Post-Processing

Make sure the following items are completed:

*   [Set up and test backup and restore](../wartung-und-betrieb/daten-sichern-und-wiederhfirstllen/index.md)
*   [Set up cron jobs](../automatisierung-und-integration/cli/index.md) (with the controller)
*   [Optionally update to the current pro version:](../wartung-und-betrieb/update-einspielen.md) With a valid license, it is possible and highly recommended to always update to the latest version of i-doit.

## Downgrade to i-doit open?

A downgrade from _i-doit_ to _i-doit open_ is not planned and is not supported.
