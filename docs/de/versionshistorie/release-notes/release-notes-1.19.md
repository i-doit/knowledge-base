# Release Notes 1.19

We're happy to announce our latest major version 1.19 of i-doit pro. This release is a very important step in the development of i-doit. See the changelog for a complete list of changes. We encourage you to [update](../../wartung-und-betrieb/update-einspielen.md) to this release as soon as possible.

Highlights in this release
--------------------------

*   A complete **redesign** of the i-doit frontend to **improve the user experience**.
*   Added **compatibility** for **PHP 8.0**.
*   **New configuration** to **create custom translations** and **custom languages**.
*   **Setting** to define a [**default language** for newly created users](../../administration/verwaltung/mandanten-name-verwaltung/einstellungen-mandanten-name.md#sprache).
*   **New configuration** to **[attribute settings](../../administration/verwaltung/datenansicht/attribut-einstellungen.md)** from categories and/or overview pages.
*   **Option** to **log** the **[last login](../../administration/verwaltung/mandanten-name-verwaltung/einstellungen-mandanten-name.md#sicherheit)** of a user.
*   [**Export** for **reports**](../../auswertungen/report-manager.md#report-exportierenimportieren) which have been created via **query builder**.

Add-ons
-------

The New Add-on Versions require i-doit >= 1.19

Alongside i-doit pro 1.19, we will also release new versions of the following **add-ons**, which **need to be updated** afterwards to be compatible with **PHP 8.0** and the **new design**:

*   [API](../../i-doit-pro-add-ons/api/index.md) **1.13**
*   [Documents](../../i-doit-pro-add-ons/documents/index.md) **1.5**
*   [Analysis](../../i-doit-pro-add-ons/analysis.md) **1.3**
*   [Floorplan](../../i-doit-pro-add-ons/floorplan.md) **1.6**
*   [Cabling](../../i-doit-pro-add-ons/cabling.md) **1.2**
*   [Relocate CI](../../i-doit-pro-add-ons/relocate-ci.md) **1.2**
*   [Replacement](../../i-doit-pro-add-ons/replacement.md) **1.4**
*   [Maintenance](../../i-doit-pro-add-ons/maintenance.md) **1.2**
*   [Events](../../i-doit-pro-add-ons/events.md) **1.3**
*   [Workflow](../../i-doit-pro-add-ons/workflow.md) **1.1**
*   [Checkmk](../../i-doit-pro-add-ons/checkmk.md) **1.1**
*   [Check\_MK 2](../../i-doit-pro-add-ons/checkmk2/index.md) **1.8**
*   [Nagios](../../automatisierung-und-integration/network-monitoring/nagios.md) **1.1**
*   [Packager](../../i-doit-pro-add-ons/add-on-packager.md) **1.2**

Important update notes
----------------------

*   With i-doit pro 1.19, **PHP 7.3** is **no longer supported**. Please ensure to upgrade to **PHP 7.4** first before updating to i-doit pro 1.19. Do **not** upgrade to **PHP 8.0** as long as you are using **i-doit pro < 1.19**.
    **After** the update of i-doit pro 1.19, you are free to upgrade PHP to 8.0 which is also **highly recommended**.

*   **Before activating** the feature to log the **last login of a user**, please check whether this is compatible with the **data protection agreements** of your company and country. Contact your data privacy expert first if you are not sure about this.

*   If you want to use the **new icons** for object types after updating to i-doit pro 1.19, you can activate them manually in your i-doit **administration** under System tools > Cache / Database.

*   The following **Partner Add-ons** need to be updated **before** the i-doit 1.19 update (If these version requirements are not matched, the i-doit update cannot be performed):
    *   **[ISMS](../../i-doit-pro-add-ons/isms.md)** needs to be updated to version **1.5.2 or higher**
    *   **[VIVA 2](../../i-doit-pro-add-ons/viva2.md)** needs to be updated to version **3.2.1 or higher**
    *   **Privacy** needs to be updated to version **1.1 or higher**
    *   **Label** needs to be updated to version **0**.5**or higher**
    *   **Disposal** needs to be updated to version **1.1.2** **or higher**
    *   **Inheritance** needs to be updated to version **1.3.7** **or higher**

System requirements
-------------------

Please check that your system matches the [system requirements](../../installation/systemvoraussetzungen.md) before updating your instance to i-doit pro 1.19. Please also check that you have created a [backup of all your data](../../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md) and all add-ons are [up-to-date](../../i-doit-pro-add-ons/index.md).
