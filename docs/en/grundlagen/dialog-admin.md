---
title: "Dialog-Admin"
description: "The Dialog-Admin is the central management point for all Dialog+ fields in _i-doit_ -- i.e. dropdown fields whose selection values you can edit yourself..."
icon:
status:
lang: en
---
# Dialog-Admin

The Dialog-Admin is the central management point for all **Dialog+** fields in _i-doit_ -- i.e. dropdown fields whose selection values you can edit yourself.

These fields are used in many [categories](../glossar.md) of the [IT documentation](../glossar.md). Via the Dialog-Admin you manage all values in one central location.

## Overview

You can find the Dialog-Admin under **Administration → Predefined content → Dialog-Admin**. In the left navigation tree, all [attributes](../glossar.md) of the **Dialog+** field type are sorted alphabetically by their associated categories.

If you have created a [custom category](benutzerdefinierte-kategorien.md) with a **Dialog+** attribute, this attribute also appears in the navigation tree -- under the **Custom Dialog+** section.

[![custom-dialog+](../assets/images/de/grundlagen/dialog-admin/1-da.png)](../assets/images/de/grundlagen/dialog-admin/1-da.png)

## Viewing values

Click on an attribute in the left navigation tree to see the previously documented values in the main area.

[![view-values](../assets/images/de/grundlagen/dialog-admin/2-da.png)](../assets/images/de/grundlagen/dialog-admin/2-da.png)

## Creating values

To create a new value:

1. Click the **New** button above the overview.
2. Fill in the form:
    - **ID**: _i-doit_ automatically assigns a unique identifier. This is helpful, for example, when working with the [API](../i-doit-add-ons/api/index.md).
    - **Name**: The value displayed in the Web GUI when you view or edit the **Dialog+** attribute.
    - **Constant**: A unique, descriptive string -- particularly helpful when using the API.
    - **Status**: Each value has a condition. Select **Normal (2)** so that the value can be used in the documentation.
3. Click **Save**.

[![create-values](../assets/images/de/grundlagen/dialog-admin/3-da.png)](../assets/images/de/grundlagen/dialog-admin/3-da.png)

## Editing values

To edit an existing value, click on the desired value in the overview. The form is the same as when creating.

!!! info "Effects"
    Changes and deletions immediately affect the entire IT documentation: If you change a value in the Dialog-Admin, it changes everywhere automatically. If you delete a value, it is removed everywhere it was used. Therefore, check via a [report](../auswertungen/report-manager.md) which objects use this value before deleting. Via the [list editing](../effizientes-dokumentieren/listeneditierung.md) you can then set an alternative value for all affected objects.

## Deleting values

To delete a value:

1. Check the checkbox of the value in the overview.
2. Click the **Purge** button.

The value is irrevocably deleted. In the tabular overview you can see for each value whether it can be deleted. Some values are assumed by _i-doit_ as given to ensure certain functionalities -- these cannot be removed.

## Setting permissions

You can assign permissions for each **Dialog+** attribute per user or user group. This way you ensure that only certain groups may create, change or delete values, while other groups can only use the values.
