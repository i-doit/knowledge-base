# Changelog 1.14.1

[Improvement][Objects] Tenant ID in URL and links to objects  
[Improvement][Validation] Enable image pasting into description fields  
[Improvement][Validation] Improve data sanitazion  
[Improvement][Systemtools] Show time difference between SQL and PHP in system overview  
[Bug][System settings] Expertsetting LDAP-Sync: Contact assignment / assigned objects are archived when the contact is archived  
[Bug][System settings] The location path is poorly cropped  
[Bug][Admincenter] A command that generates a new hash and migrates all data with it  
[Bug][Custom categories] Handling cannot be configured for the Link field type  
[Bug][Custom categories] Changing title of custom categories changes names of constants  
[Bug][Report-Manager] SQL error message when retrieving assigned SIM card via Report Manager  
[Bug][Report-Manager] Selecting the operating system for output in a report may cause several empty rpws in the report  
[Bug][Report-Manager] Report Manager: Datefields do bnt affect conditions  
[Bug][Report-Manager] Assigned interface of category port empty  
[Bug][Report-Manager] Report Manager: A report with categories from the VIVA2 Add-On generates an error message  
[Bug][Report-Manager] Information about assigned host address from a port selectable in query builder  
[Bug][Report-Manager] Report with one field from the category Logbook throws SQL error  
[Bug][Report-Manager] Variable reports do not display the number of "matches"  
[Bug][Report-Manager] The title Operating System is not translated to English in reports  
[Bug][Import] Objects cannot be assigned to a net because the netmask is not updated during import  
[Bug][Import] CSV Import does not change object type  
[Bug][Import] Protect dialog box with hidden conversion factor from changes by import  
[Bug][Import] CSV-Import does not access the attribute "Disable Login" correctly, value is not updated  
[Bug][Object type configuration] Power distribution unit cannot be placed in racks with the standard object configuration  
[Bug][Categories] The Property "linked mobile phones" not available (Report/Documents)  
[Bug][Categories] Assigned SIM cards generate SQL errors in the Document-Addon  
[Bug][Categories] Attribute "End of contract" of the category "Contract information" is not recalculated after change of the term  
[Bug][Categories] SIM cards cannot be linked to mobile phones via the SIM card object  
[Bug][Categories] In the File category, entries cannot be edited and saved if they are edited via mark>Edit.  
[Bug][Categories] Wrong sorting of version number in category "Software" > "Installation"  
[Bug][Categories] Multi-Value field "Runs on" in category assigned cluster could only be filled after reloading the page  
[Bug][Categories] Archived objects assigned to contracts are displayed in the list view  
[Bug][Categories] If the default filter is set to "Active in Service Catalog" nothing is displayed in the dropdown list  
[Bug][Categories] The unit of measurement is set incorrectly when duplicating cables  
[Bug][Categories] Cards can not displayed on the Overview Page of SIM-Cards  
[Bug][Categories] Command for cleaning up HTML tags  
[Bug][Categories] Tags in the category "General" are doubled and displayed incorrectly (while editing)  
[Bug][CMDB-Explorer] Remove "print" button in the CMDB-Explorer  
[Bug][List editing] List edit does not provide changes when triggering event  
[Bug][List editing] Dropdown of category "Persons / master data" in List-Edit page not available  
[Bug][List editing] Network / Logical Ports / Multiedit: IP address is deleted  
[Bug][Code (internal)] Assignment of objects in the category group assignment cannot be solved via object browser  
[Bug][Code (internal)] Sorting by SLA service level in list view throws SQL error  
[Bug][Code (internal)] Locations are not properly authorized  
[Bug][Code (internal)] Cusor to change the column width within the filter layer  
[Bug][Code (internal)] No objects can be created via the object browser if the authorization system is inactive  
[Bug][Code (internal)] Reports in the fields which use the expression *alter* in the field name are blocked  
[Bug][Code (internal)] Use domain part for single sign on login  
[Bug][Code (internal)] No rooms can be specified statically in the ldap.ini  
[Bug][Code (internal)] Quickpurge button can be used without object selection  
[Bug][CMDB] Error when duplicating person groups  
[Bug][Search] The search in all fields does not find Dialog+ values  
[Bug][Search] The status is removed when switching from standard search to Deep Search.  
[Bug][Search] Attribute "purpose" is not found via search  
[Bug][Search] Searching of objects (Status: normal/archived/deleted) shows only the status ID  
[Bug][Search] Textbox "Description" Category Network Connections -> Listener -> Listener Object is not indexed  
[Bug][Search] SQL error when searching for special characters  
[Bug][Notifications] SQL query error on "Expiry of maintenance/warranty period" notification  
[Bug][Logbook] The logbook does not store assignments of group memberships  
[Bug][JDisc] JDISC does not import connected devices  
[Bug][JDisc] JDISC does not import certain software  
[Bug][JDisc] JDISC: JDisc group is ignored and import is then not possible  
[Bug][Lists] Assigned licenses are not displayed in the software assignment list view  
[Bug][Lists] List view: column width of last column not adjustable  
[Bug][Lists] When changes are made to any column width, the column width of the last column becomes wider  
[Bug][Lists] Fields from category "Memory" cannot be shown in list view of multivalue category  
[Bug][API] API validation does not validate correctly (file upload)  
[Bug][CMDB settings] Dialog constant cannot be edited  
[Bug][CMDB settings] Profile download in Quick Configuration Wizard incorrect  
[Bug][Systemtools] When duplicating, the location correction is always carried out  
[Bug][Console] php Console Command does not read the .ini correctly  
[Bug][Print view] Print Preview does not display Custom Categories  
[Bug][Print view] Print view sorts categories independently alphabetically  
[Bug][Relations] Rankin issue with relations between groups and members  
