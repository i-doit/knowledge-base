# Experteneinstellungen

The expert settings are a kind of "registry" of i-doit. Most settings are set via a option in the settings area. Also some option are only available when added here.

!!! attention "Caution"

    Usually it is not necessary to add or edit values in the expert settings. For normal use the Web GUI provides functions to control i-doit in all relevant cases.<br>
    Should you plan to carry out changes in the expert settings, we **strongly recommend** to make a **[backup](../../../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md)** beforehand. Some of the listed settings have a serious effect on the application. In case of doubt do not hesitate to ask for [support](../../kundenportal.md).

## Configuration

[![Configuration]()]()

Each setting consists of three parts:

| Key | Value | Type |
| --- | --- | --- |
| The **Key** assigns a unique name to the setting. If a key shouldn't exist yet, it can be added later. | The **Value** is usually a string or a longer text or an integer value. | With the **Type** you define the scope of the setting. A setting with the type **Tenant-wide** only affects the tenant with which the user is currently logged in. **User** means that the setting affects the User. |

## List of Settings

| Key | Default Value | Recommended Value | Type | Module<br>(Scope/[Add-on]() in i-doit) | Description |
| --- | --- | --- | --- | --- | --- |
| auth.logging | 1   | 1   | Tenant-wide setting | PRO/CMDB | Activates/ deactivates logging of authorization system notifications |
| auth.use-in-cmdb-explorer | 0   | 0   | Tenant-wide setting | PRO/CMDB | Activates considering of permissions in the CMDB explorer. Objects which don't have any rights assignments aren't displayed/ iterated. |
| auth.use-in-cmdb-explorer-service-browser | 0   | 0   | Tenant-wide setting | PRO/CMDB | Activates considering of permissions in the CMDB explorer Service Popup. The user only sees services for which he has permissions. |
| auth.use-in-object-browser | 0   | 0   | Tenant-wide setting | PRO/CMDB | Activates considering of permissions in the object browser. Objects which don't have any rights assignments aren't displayed. Already selected objects are displayed as "hidden". |
| auth.use-in-file-browser | 0   | 0   | Tenant-wide setting | PRO/CMDB | Activates considering of permissions in the object browser. Objects which don't have any rights assignments aren't displayed. Already selected objects are displayed as "hidden". |
| auth.use-in-location-tree | 0   | 0   | Tenant-wide setting | PRO/CMDB | Activates considering of permissions in the location tree. Objects which don't have any rights assignments aren't displayed/ opened. |
| cache.default-expiration-time | 86400 | 86400 | Tenant-wide setting | Caching | Determines the time (in seconds) for how long you want to preserve data in specific system-internal caches (for example, authorization system, analysis results) |
| ckeditor.font_names | Arial;Courier New;Times New Roman;Helvetica |     | Tenant-wide setting | PRO/CMDB | Usable fonts in the WYSIWYG editor |
| cmdb.limits.order-threshhold | 10000 | 1000 | Tenant-wide setting | PRO/CMDB | Limitation of lines for the TableComponent, threshold from where only indexed fields can be sorted and filtered |
| cmdb.limits.obj-browser.objects-in-viewmode | 8   |     | Tenant-wide setting | PRO/CMDB | Maximum number of objects to be presented in view mode in the object browser |
| cmdb.limits.object-table-columns | 10  | 10  | Tenant-wide setting | PRO/CMDB | Decides how many columns are allowed to be shown in the object lists. |
| cmdb.limits.port-lists-layer2 | 5   |     | Tenant-wide setting | PRO/CMDB | Limitation of the specified Layer2 nets in the port list |
| cmdb.limits.port-lists-vlans | 10  |     | Tenant-wide setting | PRO/CMDB | Limitation of the specified VLANs in the port list |
| cmdb.limits.port-overview-default-vlan-only | 0   |     | Tenant-wide setting | PRO/CMDB | Only the default VLAN is to be displayed in the port overview |
| cmdb.multiedit.text-size-in-px | 120 |     | Tenant-wide setting | PRO/CMDB | Size of the text in list editing |
| cmdb.objtype.OBJECT\_TYPE\_ID.auto-inventory-no |     |     | Tenant-wide setting | PRO/CMDB | Pattern for the generation of automatic inventory numbers in the accounting category |
| cmdb.only-show-ranked-entries-as-such | 0   | 0   | Tenant-wide setting | PRO/CMDB | Option to specify whether relationships to an archived object should be displayed as archived or normal |
| cmdb.quickpurge |     |     | Tenant-wide setting | PRO/CMDB | Activation/ deactivation of the quickpurge function |
| cmdb.skip-unidirectional-connection-ranking | 0   | 0   | Tenant-wide setting | PRO/CMDB | Option to specify whether links to an archived object should be displayed as archived or normal |
| cmdb.unique.hostname |     |     | Tenant-wide setting | PRO/CMDB | Activation/ deactivation of unique host names |
| cmdb.unique.ip-address |     |     | Tenant-wide setting | PRO/CMDB | Activation/ deactivation of unique IPs |
| cmdb.unique.layer-2-net |     |     | Tenant-wide setting | PRO/CMDB | Activation/ deactivation of unique Layer-2 IDs |
| cmdb.unique.object-title |     |     | Tenant-wide setting | PRO/CMDB | Activation/ deactivation of unique object titles |
| gui.empty\_value | \-  | \-  | Tenant-wide setting | Core | Specifies the presentation of an empty value in the GUI |
| gui.nat-sort.port-list | 1   | 1   | Tenant-wide setting | PRO/CMDB | Lexicographical sorting of the port list |
| jdisc.import-unidentified-devices | false |     | Tenant-wide setting | PRO/CMDB | Activation/ deactivation of imports of unidentified JDISC objects |
| maxlength.dialog\_plus | 110 |     | Tenant-wide setting | PRO/CMDB | Maximum length of characters for entries in dialog lists |
| maxlength.location.objects | 16  |     | Tenant-wide setting | PRO/CMDB | Maximum number of objects to be displayed |
| maxlength.location.path | 40  |     | Tenant-wide setting | PRO/CMDB | Maximum length of location paths |
| maxlength.object.lists | 55  |     | Tenant-wide setting | PRO/CMDB | Maximum number of objects to be displayed in object lists |
| search.global.autostart-deep-search | 0   |     | Tenant-wide setting | PRO/CMDB | Automatic deep search |
| security.passwort.minlength | 4   |     | Tenant-wide setting | Core | Minimum length for user passwords |
| qrcode.config |     |     | Tenant-wide setting | PRO/CMDB | QR code configuration |

## Expert setting (User related)


| Key | Default Value | Recommended Value | Type | Module<br>(Scope/[Add-on]() in i-doit) | Description |
| --- | --- | --- | --- | --- | --- |
| gui.leftcontent.width | 235 | 350 | User setting | Core | Defines the width of the left tree area in pixels |
| workflows.max-checklist-entries | 7   |     | User setting | Workflows | Maximum entries in check lists |
| gui.login.display | user-name |     | User setting | PRO/CMDB | Presentation of the name in the "logged in as" area:<br><br>*   user-name: lfischer<br>*   full-name: Dr. Leonard Fischer<br>*   full-name-plus: Dr. Leonard Fischer (lfischer)<br>*   first-last-name-abbreviation: L. Fischer |
