---
title: Forms
description: Forms installation
icon:
status: updated
lang: en
---

# Forms

With the Forms Add-on you create forms and send them via link to employees for filling out. New colleagues can thus document, for example, computers in the company without needing to know the entire i-doit interface.

The advantage: Instead of all categories with all fields, you only show the attributes that actually need to be filled out.

More about this can be found in our [Blog](https://www.i-doit.com/blog/das-new-i-doit-pro-forms-add-on/) and in the [Video](https://www.youtube.com/watch?v=3jpzrK_cR0M).

!!! info "The Forms Add-on is currently provided in English. Translations originating from i-doit are also translated into German."

[![Forms view](../../assets/images/de/i-doit-add-ons/forms/1-forms.png)](../../assets/images/de/i-doit-add-ons/forms/1-forms.png)

## Requirements

The Forms add-on requires:

*   i-doit Version **\>= v23**
*   MongoDB Server Version **\>=8**
*   NodeJS Version **\>= v22.x**

The system requirements of [MongoDB](https://docs.mongodb.com/manual/administration/production-notes/#mongodb-binaries) must be observed. Furthermore, MongoDB provides a [checklist for production deployment](https://docs.mongodb.com/manual/administration/production-checklist-operations/#operations-checklist).

[NodeJS](https://nodejs.org/en/download/current/) has its [dependencies documented here](https://nodejs.org/en/docs/).

## Installation

To install the add-on:

1. Install the Forms Add-on via the [Admin Center](../../administration/admin-center.md).
2. Install [MongoDB Server **v8**](https://docs.mongodb.com/manual/installation/).
3. Install [NodeJS **v22**](https://nodejs.org/en/download/current/) via the [nvm Package Manager](https://github.com/nvm-sh/nvm).
4. Configure the Forms backend.
5. Configure i-doit.

[Continue to the Forms Add-on installation](forms-installation.md){ .md-button .md-button--primary }

## Assigning rights

For users to be able to create forms, assign the corresponding [permissions](../../effizientes-dokumentieren/rechteverwaltung/index.md) under **Administration → Authorization system → Rights → Forms**.

[![Permission assignment](../../assets/images/de/i-doit-add-ons/forms/2-forms.png)](../../assets/images/de/i-doit-add-ons/forms/2-forms.png)

!!! attention "Clear the authorization system cache"
    After you have assigned or changed the permissions, clear the [cache](../../administration/verwaltung/mandanten-name-verwaltung/systemreparatur-und-bereinigung.md) in the i-doit [administration](../../administration/verwaltung/index.md) under **Administration > [tenant-name] Administration > System repair and cleanup**, so that the changes are applied by the system.

## Accessing the add-on

After completing all preparations, you can access the add-on under **Add-ons → Forms**.

## Using the API

This document contains a basic description of the Forms API.

!!! info "[Using the Forms API](verwenden-der-forms-api.md)"

## Releases

| Version | Date       | Changelog                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   |
| ------- | ---------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| 1.3     | 2025-07-18 | [Bug] Object is not created when a attribute validation is used<br>[Bug] Link to a form does not include tenant id<br>[Bug] Using Forms to create an object bypasses validation "unique" check<br>[Bug] Creating a object via Form ignores validation for attributes<br>[Bug] The Location and all physically assigned objects below right only works if parameter All is selected<br>[Bug] Created Objects are not indexed after creation<br>[Bug] Highlight 'add-on' instead of 'extras' menu<br>[Bug] Content is overlapping in list of forms<br>[Bug] Unable to select objects for Net (Hostaddress (IPv4)) attribute<br>[Bug] Hostaddress category can not be validated properly<br>[Bug] Shorten object names dynamically in Object Browser<br>[Bug] Change Service assignment to multiple select object browser<br>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  |
| 1.2.1   | 2025-05-14 | [Task] Allow removal of instances and their data over cli<br> [Task] Implement health endpoint on backend-server<br>[Task] Add support for node v22 on backend-server<br>[Task] Add support for mongodb v8.x on backend-server                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              |
| 1.2.0   | 2023-05-03 | [Bug] Fix Investment cost and cost center with Forms<br> [Bug] Align categories on the left side<br>[Bug] Fix right to delete or create Forms<br>[Bug] Fix empty list in object browser if category names should be used in header<br>[Bug] Show objects if attribute type is missing<br>[Bug] Improve rendering performance of object browser fields with multiple objects<br>[Bug] Filter child values after parent values                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
| 1.1.0   | 2022-06-27 | [Bug] Allow all default characters to be used in Forms-secret key  <br>[Bug] Do not show time selection in Start date for license keys  <br>[Bug] Allow to publish form if load balancer and HTTP2 is used  <br>[Bug] Save Form when publishing  <br>[Bug] Create Logbook entries when creating an object and category data via "Forms" add-on  <br>[Bug] Filter down connectable objects for custom categories with object relations in Forms  <br>[Bug] Allow user to copy link in Forms table  <br>[Bug] Allow user to select multiple objects in Forms object browser  <br>[Bug] Inform user about required attributes in category  <br>[Task] Add tooltip to disabled state of copy link button in Forms add-on  <br>[Task] Allow to add child attribute only when parent dependent is added  <br>[Task] Change real text to placeholder text in text field in Forms add-on  <br>[Task] Do not allow to add same attribute multiple times in Forms  <br>[Task] Give user warning before publishing if form will be empty  <br>[Task] Add dependencies of object browser to Forms add-on  <br>[Task] Split hostaddress category into virtual IPv4 and IPv6 categories for Forms add-on  <br>[Task] Take default template values in consideration in Forms  <br>[Task] Update attribute name in pre-defined field in Forms add-on  <br>[Task] Disable child attribute until a value for parent is assigned  <br>[Task] Implement Pagination in Attribute Type Object Browser Single- and Multi-Selection |
| 1.0.0   | 2022-02-21 | Initial release                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             |
