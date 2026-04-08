---
search:
  exclude: true
---
# Changelog 1.14.1
<!-- cSpell:disable -->
<!-- markdownlint-disable MD052 -->
[Improvement][Objects] Tenant ID in URL and links to objects<br>
[Improvement][Validation] Enable image pasting into description fields<br>
[Improvement][Validation] Improve data sanitazion<br>
[Improvement][Systemtools] Show time difference between SQL and PHP in system overview<br>
[Bug][System settings] Expertsetting LDAP-Sync: Contact assignment / assigned objects are archived when the contact is archived<br>
[Bug][System settings] The location path is poorly cropped<br>
[Bug][Admincenter] A command that generates a new hash and migrates all data with it<br>
[Bug][Custom categories] Handling cannot be configured for the Link field type<br>
[Bug][Custom categories] Changing title of custom categories changes names of constants<br>
[Bug][Report-Manager] SQL error message when retrieving assigned SIM card via Report Manager<br>
[Bug][Report-Manager] Selecting the operating system for output in a report may cause several empty rpws in the report<br>
[Bug][Report-Manager] Report Manager: Datefields do bnt affect conditions<br>
[Bug][Report-Manager] Assigned interface of category port empty<br>
[Bug][Report-Manager] Report Manager: A report with categories from the VIVA2 Add-On generates an error message<br>
[Bug][Report-Manager] Information about assigned host address from a port selectable in query builder<br>
[Bug][Report-Manager] Report with one field from the category Logbook throws SQL error<br>
[Bug][Report-Manager] Variable reports do not display the number of "matches"<br>
[Bug][Report-Manager] The title Operating System is not translated to English in reports<br>
[Bug][Import] Objects cannot be assigned to a net because the netmask is not updated during import<br>
[Bug][Import] CSV Import does not change object type<br>
[Bug][Import] Protect dialog box with hidden conversion factor from changes by import<br>
[Bug][Import] CSV-Import does not access the attribute "Disable Login" correctly, value is not updated<br>
[Bug][Object type configuration] Power distribution unit cannot be placed in racks with the standard object configuration<br>
[Bug][Categories] The Property "linked mobile phones" not available (Report/Documents)<br>
[Bug][Categories] Assigned SIM cards generate SQL errors in the Document-Addon<br>
[Bug][Categories] Attribute "End of contract" of the category "Contract information" is not recalculated after change of the term<br>
[Bug][Categories] SIM cards cannot be linked to mobile phones via the SIM card object<br>
[Bug][Categories] In the File category, entries cannot be edited and saved if they are edited via mark>Edit.<br>
[Bug][Categories] Wrong sorting of version number in category "Software" > "Installation"<br>
[Bug][Categories] Multi-Value field "Runs on" in category assigned cluster could only be filled after reloading the page<br>
[Bug][Categories] Archived objects assigned to contracts are displayed in the list view<br>
[Bug][Categories] If the default filter is set to "Active in Service Catalog" nothing is displayed in the dropdown list<br>
[Bug][Categories] The unit of measurement is set incorrectly when duplicating cables<br>
[Bug][Categories] Cards can not displayed on the Overview Page of SIM-Cards<br>
[Bug][Categories] Command for cleaning up HTML tags<br>
[Bug][Categories] Tags in the category "General" are doubled and displayed incorrectly (while editing)<br>
[Bug][CMDB-Explorer] Remove "print" button in the CMDB-Explorer<br>
[Bug][List editing] List edit does not provide changes when triggering event<br>
[Bug][List editing] Dropdown of category "Persons / master data" in List-Edit page not available<br>
[Bug][List editing] Network / Logical Ports / Multiedit: IP address is deleted<br>
[Bug][Code (internal)] Assignment of objects in the category group assignment cannot be solved via object browser<br>
[Bug][Code (internal)] Sorting by SLA service level in list view throws SQL error<br>
[Bug][Code (internal)] Locations are not properly authorized<br>
[Bug][Code (internal)] Cusor to change the column width within the filter layer<br>
[Bug][Code (internal)] No objects can be created via the object browser if the authorization system is inactive<br>
[Bug][Code (internal)] Reports in the fields which use the expression *alter* in the field name are blocked<br>
[Bug][Code (internal)] Use domain part for single sign on login<br>
[Bug][Code (internal)] No rooms can be specified statically in the ldap.ini<br>
[Bug][Code (internal)] Quickpurge button can be used without object selection<br>
[Bug][CMDB] Error when duplicating person groups<br>
[Bug][Search] The search in all fields does not find Dialog+ values<br>
[Bug][Search] The status is removed when switching from standard search to Deep Search.<br>
[Bug][Search] Attribute "purpose" is not found via search<br>
[Bug][Search] Searching of objects (Status: normal/archived/deleted) shows only the status ID<br>
[Bug][Search] Textbox "Description" Category Network Connections -> Listener -> Listener Object is not indexed<br>
[Bug][Search] SQL error when searching for special characters<br>
[Bug][Notifications] SQL query error on "Expiry of maintenance/warranty period" notification<br>
[Bug][Logbook] The logbook does not store assignments of group memberships<br>
[Bug][JDisc] JDISC does not import connected devices<br>
[Bug][JDisc] JDISC does not import certain software<br>
[Bug][JDisc] JDISC: JDisc group is ignored and import is then not possible<br>
[Bug][Lists] Assigned licenses are not displayed in the software assignment list view<br>
[Bug][Lists] List view: column width of last column not adjustable<br>
[Bug][Lists] When changes are made to any column width, the column width of the last column becomes wider<br>
[Bug][Lists] Fields from category "Memory" cannot be shown in list view of multivalue category<br>
[Bug][API] API validation does not validate correctly (file upload)<br>
[Bug][CMDB settings] Dialog constant cannot be edited<br>
[Bug][CMDB settings] Profile download in Quick Configuration Wizard incorrect<br>
[Bug][Systemtools] When duplicating, the location correction is always carried out<br>
[Bug][Console] php Console Command does not read the .ini correctly<br>
[Bug][Print view] Print Preview does not display Custom Categories<br>
[Bug][Print view] Print view sorts categories independently alphabetically<br>
[Bug][Relations] Rankin issue with relations between groups and members<br>
