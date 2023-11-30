# Forms

With this add-on you can create forms that you can send to other employees to fill in.<br>
This add-on can create a form that, for example, helps new employees document computers in your company.

When entering new objects, it is often the case that several categories are displayed, but only individual fields from each category need to be maintained.<br>
In this case it is easier for the user (especially if they are new colleagues) if only the attributes that actually need to be filled in are displayed.

The Forms add-on uses the design of the new i-doit Cloud product, so the appearance is different from the other i-doit 1.x Add-ons.

We have also a [Blog article](https://www.i-doit.com/en/blog/the-new-i-doit-pro-forms-add-on/) with a lot of Information.

[![Overview](../../assets/images/en/i-doit-pro-add-ons/forms/1-forms.png)](../../assets/images/en/i-doit-pro-add-ons/forms/1-forms.png)

## Requirements

The Forms add-on requires:

-   i-doit Version **>=23**
-   MongoDB Server Version **5**
-   NodeJS Version **>=16.x**

Also the system requirements of [MongoDB](https://docs.mongodb.com/manual/administration/production-notes/#mongodb-binaries) must be observed.<br>
Also, MongoDB has a [checklist for use in operations](https://docs.mongodb.com/manual/administration/production-checklist-operations/#operations-checklist).

[NodeJS](https://nodejs.org/en/download/current/) has its dependencies documented [here](https://nodejs.org/en/docs/).

## Installation

-   Installing the Forms add-on via the [Admin Center](../../system-administration/admin-center.md).
-   [MongoDB Server v5](https://docs.mongodb.com/manual/installation/) installation
-   Then install [NodeJS](https://nodejs.org/en/download/current/) >= v16.x. via [Package Manager](https://nodejs.org/en/download/package-manager/).
-   Configure Forms Backend
-   Configure backend in i-doit

[Continue to the installation of the Forms add-on](./install-forms-addon.md){ .md-button .md-button--primary }

## Assignment of rights

In order for users to be able to create forms, it is necessary to assign appropriate rights.<br>
This is possible in the i-doit administration under Authorization System > Rights > Forms, if the add-on is installed.

[![Assignment of rights](../../assets/images/en/i-doit-pro-add-ons/forms/2-forms.png)](../../assets/images/en/i-doit-pro-add-ons/forms/2-forms.png)

Clear cache for the rights system

After the rights have been assigned or changed, it is necessary to clear the [cache](../../system-administration/administration/tenant-management/repair-and-clean-up.md) in the i-doit [administration](../../system-administration/administration/index.md) under `Tenant Management > Repair and clean up` so that the changes are adopted by the system.

## Calling the add-on

After all preparations are completed, the add-on can be accessed via Extras > Forms.

[![Calling the add-on](../../assets/images/en/i-doit-pro-add-ons/forms/3-forms.png)](../../assets/images/en/i-doit-pro-add-ons/forms/3-forms.png)

The view of the "Extras" menu may differ due to different rights and/or additional installed add-ons.

## Releases

| Version | Date | Changelog |
| --- | --- | --- |
| 1.2.0 | 2023-05-03 | [Bug] Fix Investment cost and cost center with Forms<br> [Bug] Align categories on the left side<br>[Bug] Fix right to delete or create Forms<br>[Bug] Fix empty list in object browser if category names should be used in header<br>[Bug] Show objects if attribute type is missing<br>[Bug] Improve rendering performance of object browser fields with multiple objects<br>[Bug] Filter child values after parent values
| 1.1.0 | 2022-06-27 | [Bug] Allow all default characters to be used in Forms-secret key  <br>[Bug] Do not show time selection in Start date for license keys  <br>[Bug] Allow to publish form if load balancer and HTTP2 is used  <br>[Bug] Save Form when publishing  <br>[Bug] Create Logbook entries when creating an object and category data via "Forms" add-on  <br>[Bug] Filter down connectable objects for custom categories with object relations in Forms  <br>[Bug] Allow user to copy link in Forms table  <br>[Bug] Allow user to select multiple objects in Forms object browser  <br>[Bug] Inform user about required attributes in category  <br>[Task] Add tooltip to disabled state of copy link button in Forms add-on  <br>[Task] Allow to add child attribute only when parent dependent is added  <br>[Task] Change real text to placeholder text in text field in Forms add-on  <br>[Task] Do not allow to add same attribute multiple times in Forms  <br>[Task] Give user warning before publishing if form will be empty  <br>[Task] Add dependencies of object browser to Forms add-on  <br>[Task] Split hostaddress category into virtual IPv4 and IPv6 categories for Forms add-on  <br>[Task] Take default template values in consideration in Forms  <br>[Task] Update attribute name in pre-defined field in Forms add-on  <br>[Task] Disable child attribute until a value for parent is assigned  <br>[Task] Implement Pagination in Attribute Type Object Browser Single- and Multi-Selection |
| 1.0.0 | 2022-02-21 | Initial release |
