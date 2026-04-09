---
title: Attribute Settings
description: "With attribute settings, you define required fields, set advanced content defaults, and control the visibility of attributes."
icon:
status:
lang: en
---
# Attribute Settings

With attribute settings, you define required fields, set advanced content defaults, and control the visibility of attributes. You can find this function in the [Data View](../index.md).

[![Attribute Settings](../../../assets/images/de/administration/verwaltung/datenansicht/attribut-einstellungen/as-1.png)](../../../assets/images/de/administration/verwaltung/datenansicht/attribut-einstellungen/as-1.png)

## Attribute visibility

The visibility of [attributes](../../../basics/attribute-fields.md) can be adjusted in the attribute settings.
It is possible to show or hide specific attributes in [categories](../../../basics/categories-and-attributes.md) and/or on the [overview page of object types](../../../basics/object-type-configuration.md).
To do this, click **Edit** next to the respective attribute name and select the desired setting under **Visibility**.

The configured visibility is applied for all users.

[![Attribute visibility](../../../assets/images/de/administration/verwaltung/datenansicht/attribut-einstellungen/as-2.png)](../../../assets/images/de/administration/verwaltung/datenansicht/attribut-einstellungen/as-2.png)

## Setting permissions

[Permissions](../permissions.md) to view and edit attribute visibility can be assigned per user (group). For example, it is possible and often advisable that only certain user groups can hide attributes.

[![set-permissions](../../../assets/images/de/administration/verwaltung/datenansicht/attribut-einstellungen/as-3.png)](../../../assets/images/de/administration/verwaltung/datenansicht/attribut-einstellungen/as-3.png)

## Usage

Via the **Add** button, you select categories (global, specific, or custom). The new category is added as the bottom entry.

Via the pencil icon, you edit the visibility and validation of an attribute. By default, all attributes are visible.

[![button-displayed](../../../assets/images/de/administration/verwaltung/datenansicht/attribut-einstellungen/as-4.png)](../../../assets/images/de/administration/verwaltung/datenansicht/attribut-einstellungen/as-4.png)<br>
In this state, the visibility on the overview page is labeled **Visible**.
If you set the visibility to **Hidden**, the display is adjusted accordingly<br>
[![button-hidden](../../../assets/images/de/administration/verwaltung/datenansicht/attribut-einstellungen/as-5.png)](../../../assets/images/de/administration/verwaltung/datenansicht/attribut-einstellungen/as-5.png)<br>

**Object title**, **Status**, and **CMDB status** **cannot** be hidden. The corresponding columns display a note "Cannot be hidden".

When an attribute is hidden, it is no longer displayed in the category for all objects (of all object types).

<!-- If an attribute should be hidden but is defined as a required field via "Attribute Settings", the user receives a notification (popup) when clicking the "Save" button:

!!! popup "Popup"
    _The following attributes were previously defined as required fields:_
    [LIST OF ALL AFFECTED ATTRIBUTES]
    _If you hide these on the interface, the required field definition will be removed for them. Do you want to continue?_

This change is confirmed or rejected via a Yes/No selection. -->

The third option allows you to hide the selected attributes only on overview pages; in the regular categories, these attributes continue to be displayed. This is also labeled accordingly on the overview page:

[![button-hidden-on-overview](../../../assets/images/de/administration/verwaltung/datenansicht/attribut-einstellungen/as-6.png)](../../../assets/images/de/administration/verwaltung/datenansicht/attribut-einstellungen/as-1.png)

You remove unwanted entries by selecting them and clicking **Remove**.
