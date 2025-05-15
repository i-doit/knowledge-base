---
search:
  exclude: true
---
# Changelog 1.13.2
<!-- cSpell:disable -->
<!-- markdownlint-disable MD052 -->
[Improvement][Relations] Custom relation types should have own constants<br>
[Improvement][LDAP] LDAP synchronization with other attributes than names<br>
[Improvement][Report-Manager] New dynamic properties for all categories<br>
[Bug][Report-Manager] Update: Migration of existing reports fails under certain circumstances<br>
[Bug][Report-Manager] Attribute Variant (Version) in report-manager without Function<br>
[Bug][Report-Manager] Report with a "state" condition generates an error message<br>
[Bug][Report-Manager] Report Manager views do not work correctly<br>
[Bug][Report-Manager] View Network connections of the Report Manager does not display network listeners<br>
[Bug][Report-Manager] Migrate condition "Create new Reports" to the create right<br>
[Bug][Report-Manager] Report Manager: Cannot read attribute "Variant" from category "Installation"<br>
[Bug][Report-Manager] Attribute Database instance (Category Database schema) not available in Report Manager<br>
[Bug][Report-Manager] Date format is ignored in report<br>
[Bug][Report-Manager] Object references do not display the object title<br>
[Bug][Lists] Object-lists: attribute "version number" of category "operating system" not sortable<br>
[Bug][Lists] Object-lists: attribute "version number" of category "operating system" cannot be sorted<br>
[Bug][Lists] Filtering for location path only looks at the shortened path shown<br>
[Bug][System settings] SQL error when location path is set to right justified<br>
[Bug][System settings] Sub directories for uploaded files and logs<br>
[Bug][System settings] Expert setting system.dir.import-uploads should be set by default for each client.<br>
[Bug][Check_MK] Missing setting to define the timeout of Livestatus<br>
[Bug][Validation] Validation does not work with redundant categories<br>
[Bug][CMDB] Error when documenting LUNs<br>
[Bug][CMDB] Cannot create client because CPU frequency unit is mandatory<br>
[Bug][CMDB] Saving the "CPU frequency" value without its unit is not correct<br>
[Bug][CMDB] Use the correct separator for numeric formats<br>
[Bug][List editing] Blank values ("-") in Dialog+ fields could not selected in the list edit.<br>
[Bug][List editing] Make attribute "Layer 2 Network Assignment" from the category Port available for list edit<br>
[Bug][List editing] Make attribute "Default gateway for the network" from the Host address category available for the list edit<br>
[Bug][List editing] Location selection wider in the list edit<br>
[Bug][List editing] More efficient use of available space from left to right in list edit<br>
[Bug][List editing] Dark Screen when Host Address is selected for list edit<br>
[Bug][Categories] duplicate a storage-object excludes the standard VLAN<br>
[Bug][Categories] Creation of Layer-3 nets not possible<br>
[Bug][Categories] Category "sim card" assignment of a Twincard not possible<br>
[Bug][Categories] Error "cannot find category" when editing view in category "assigned ports"<br>
[Bug][Categories] After archiving a licence, it is still being used and displayed in related installations<br>
[Bug][Categories] Warning when saving numeric attributes with German format<br>
[Bug][Templates] Objects of the types "Organization" and "Person groups" which are used in templates for assigned contacts will be<br>
[Bug][Update] Upadte to the 1.13.1 creates database error<br>
[Bug][Notifications] Notifications query error<br>
[Bug][Notifications] Notification about expired certificates that are archived<br>
[Bug][Admincenter] Login to the AdminCenter is possible with the encrypted hash<br>
[Bug][Events] Active Event-Addon causes that layer-3-net could not created<br>
[Bug][Import] JDisc import via console creates error with the category "port"<br>
[Bug][Import] XML import creates an empty logfile<br>
[Bug][Console-base Installation/Update/Licensing] After the update from i-doit 1.13 to 1.13.1 it's not possible to use search-index with the console.php<br>
[Bug][Object type configuration] Error message in Quick Configuration Wizard while creatingg new object type groups/object types<br>
[Bug][CSV Import] CSV-Import: Contact assignment via username not possible during console import<br>
[Bug][Installation] The initial tenant database is created with ID 2.<br>
[Bug][API] User defined categories are not editable with cmdb.object.create<br>
[Bug][API] In custom categories, the data type Text instead of TextArea is used for fields of type HTML editor.<br>
[Bug][Systemtools] Database export function creates a 0KB dump file<br>
[Bug][Search] Searching for Tags from category "general" not possible<br>
[Bug][JDisc] Import of port descriptions via JDISC<br>
[Bug][JDisc] Changes in the JDISC profiles forward to empty site and doesn't save changes<br>
[Bug][User settings] Default treeview changes value when numeric format is changed<br>
[Bug][Logbook] Logbook content not written for chassis when using JDisc import<br>
[Bug][Logbook] Changes of connections to objects are not shown in logbook of linked object<br>
[Bug][Logbook] The logbook receives incorrect data<br>
[Bug][Logbook] Order of logbook entries from simultanous processes sometimes not chronological<br>
[Bug][LDAP] Session management locks LDAP users if multiple tenants are used with LDAP<br>
[Bug][Objects] Object Browser: Linked license is only marked in the sub-selection<br>
[Bug][OCS] Rebuild search index after OCS import<br>
[Bug][Code (internal)] "Create new object" button in object browser should also be available if no selection is possible<br>
