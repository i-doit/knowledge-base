# Changelog 1.13.1

[Task][List editing] Multiple hardware RAIDS appear in list edit although none were created<br>
[Improvement][Report-Manager] Reports should always contain a constant<br>
[Improvement][Report-Manager] Virtuelle und dynamische Properties in Report Manager Konditionen<br>
[Improvement][Categories] New Command: Restore category data of lost references<br>
[Improvement][Cabling import] The cabling import does not import as intended.<br>
[Improvement][Import] Identification of objects during csv imports via IMEI<br>
[Improvement][Code (internal)] Clear user credentials via command<br>
[Improvement][Console-base Installation/Update/Licensing] Console-based installation of the i-doit add-ons<br>
[Improvement][CMDB-Explorer] Display direction of relations in the CMDB-Explorer<br>
[Improvement][Systemtools] Command to convert the engine from MySQL tables to INNODB<br>
[Bug][Report-Manager] Report Manager: Category "software-assignment" title is also displayed in the category "operating-system" attribute "operating-system"<br>
[Bug][Report-Manager] Report Manager: Output of the grouped MultiValues error during CSV/TXT export<br>
[Bug][Report-Manager] Attribute "variant" only displays the title in report output<br>
[Bug][Report-Manager] Missing attributes from category "Net" in Report Manager to define conditions<br>
[Bug][Report-Manager] Attribute "Aliase" not available in report Manager<br>
[Bug][Report-Manager] Attribute "hostname" from category "monitoring" is not available in report manager<br>
[Bug][Report-Manager] Simultanous display of operating system and software assignment in report not possible<br>
[Bug][Report-Manager] The role of persons is not displayed in the Report Manager.<br>
[Bug][Report-Manager] Subselects for Dynamic Groups<br>
[Bug][Report-Manager] Create reports with the Logbook category as a condition<br>
[Bug][Report-Manager] Combining object title and primary hosdt address in report manager leads to multiple output of the same object<br>
[Bug][Report-Manager] Variable report results in a SQL error<br>
[Bug][Report-Manager] Report-Manager: Assignment Category "Service Assignment" does not return blank values<br>
[Bug][Report-Manager] Reports: Combination of dynamic property and condition leads to sql error<br>
[Bug][Report-Manager] Report for "Inserted at" uses a wrong DB table<br>
[Bug][Report-Manager] It is not possible to show objects without assignments in report manager<br>
[Bug][Categories] SQL error when the category "Layer-3 net" is sorted by "Net with suffix".<br>
[Bug][Categories] Condition "Normal" can always be selected in category "General"<br>
[Bug][Categories] The Form Factor category does not store any data in the overview.<br>
[Bug][Categories] Back of a chassis is not presented in rack view<br>
[Bug][Categories] Category port dialog plus field does not work together with cabling category<br>
[Bug][Categories] Revision of the Hostadresses Category<br>
[Bug][Categories] Improved handling for editing hight unit when swapping objects between front and back of a rack<br>
[Bug][Categories] Correct formatting of the overview page when reports and categories are to be displayed<br>
[Bug][Categories] Category "service logbook" is even duplicated when not selected for duplication<br>
[Bug][Categories] Change attributes in object lists removed wrong attribute in default filter<br>
[Bug][Categories] Long port names are truncated in Port Browser<br>
[Bug][Categories] Dateien in der Kategorie Objektbild sind für alle Mandanten sichtbar<br>
[Bug][Categories] The "Assigned Organization" column does not display any data.<br>
[Bug][Categories] Relationships between objects are not displayed in the list view.<br>
[Bug][Categories] Wrong default value category "host address" in attribute "Address assignment"<br>
[Bug][Categories] Category: "Service" Subcategory "Service Type" the attribute "Type" is not loaded correctly<br>
[Bug][Categories] Title of objects in slots is not shown in category "Racks"<br>
[Bug][Categories] Database field type for isys_validation_config.isys_validation_config__json changed<br>
[Bug][Categories] Rack view: Blade chassis are not displayed vertically<br>
[Bug][Categories] Display dropdown menu to choose entry status in category "cluster members"<br>
[Bug][Categories] Deselect attributes in object lists removes values in standard filter<br>
[Bug][Categories] The time/date at "Initial Import" in the category "Custom Identifier" is not displayed correct<br>
[Bug][Categories] Double Category Entries<br>
[Bug][OCS] Capacities are always imported as byte in OCS import<br>
[Bug][OCS] Capacities of SNMP devices are not updated properly by OCS import<br>
[Bug][Lists] SQL error message in object list<br>
[Bug][Lists] Sorting location path uses root location for sorting<br>
[Bug][Lists] The description field is missing as an attribute in the category lists Configuration for the category "E-Mail Addresses"<br>
[Bug][Lists] Object list configuration only mirrors selected attributes to other users and default configuration<br>
[Bug][Lists] Logical location of an object is not displayed in object list<br>
[Bug][Lists] Setting for maximum lenght of location paths does not work with object lists<br>
[Bug][Lists] Sorting of shortened location paths in object lists<br>
[Bug][Lists] Showing linked beginning and end of conctracts in object lists<br>
[Bug][Lists] Object Lists: Add Custom Attributes<br>
[Bug][Lists] E-mail address is always displayed as HTML-mailto in object lists<br>
[Bug][Check_MK] Missing setting to define the timeout of Livestatus<br>
[Bug][LDAP] Sync all LDAP groups when paging is enabled<br>
[Bug][LDAP] Improved handling of deactivated/moved users originating from AD<br>
[Bug][LDAP] Don't show email icon if LDAP has mail set as filter<br>
[Bug][CMDB] Sort by model<br>
[Bug][CMDB] Capacities "Bit" and "Terabit" are missing<br>
[Bug][CMDB] Creating assigned devices of an blade chassis causes an white screen<br>
[Bug][List editing] Activate edited SLA´s<br>
[Bug][List editing] Edit the Service Category in List Editing<br>
[Bug][List editing] Release the connections in the Service Assignment category.<br>
[Bug][List editing] List editing: Filter for object browser does not always work<br>
[Bug][List editing] Listenditierung: Detach from a location impossible<br>
[Bug][List editing] Controller isn't selectable for all objects in list edit<br>
[Bug][List editing] List Editing: It is not possible to assign workstations in the "assigned workstation" category<br>
[Bug][List editing] Empty Sub-Categories in the list edit<br>
[Bug][List editing] Multiedit displays categories without attributes<br>
[Bug][List editing] Saving a host address generates an error message<br>
[Bug][List editing] Leave excluded fields from list edit excluded after saving<br>
[Bug][Import] CSV Import: Assignment of licences<br>
[Bug][Import] For Layer-2 nets the field = Layer-3 net assignment is missing for an import.<br>
[Bug][Import] The device assignment of the category Slots (Switch Chassis) cannot be assigned in csv-import.<br>
[Bug][Import] Import variants of operating systems<br>
[Bug][Import] OCS Import Categories<br>
[Bug][Import] Editing an object matching profile doesn't work as it should be<br>
[Bug][Objects] Error "name must be a valid object or a string" when accessing objects<br>
[Bug][Objects] Category "Virtual Devices" attribute "Host Ressource" displays incorrect "switch port groups"<br>
[Bug][Objects] Changes to DialogPlus fields are not output correctly<br>
[Bug][CSV Import] Option to overwrite existing entries in multi value categories also overwrites newly imported entries<br>
[Bug][CSV Import] CSV import also creates logbook entries, if content is not changed<br>
[Bug][CSV Import] CSV import: "Virtual machine" attribute of the "Virtual machine" category is not set correctly<br>
[Bug][System settings] Administration forwards to an empty site if Check_MK2 has been deactivated<br>
[Bug][System settings] Deny unauthenticated access to /upload/images<br>
[Bug][System settings] Darstellungsfehler in der Rechteverwaltung<br>
[Bug][System settings] HTML editor changes content enumeration<br>
[Bug][Systemtools] Improvement of location correction<br>
[Bug][Admincenter] GRANT command during tenant creation via console does not consider localhost<br>
[Bug][Admincenter] When combining tenant and subscription licenses some add-ons are not correctly licensed<br>
[Bug][Admincenter] Tenant licenses "in use" and "free" don't take deactivated tenants into account and displays wrong value for free tenant licenses<br>
[Bug][Notifications] Notification number is not reset<br>
[Bug][Notifications] Notification query error with the placeholder %notifications__threshold_unit%<br>
[Bug][Notifications] Notify a contact group<br>
[Bug][License installation (i-doit)] Limit for tenants uses incorrect counting during licensing<br>
[Bug][Code (internal)] Perform a correct property migration for the Software Assignment category<br>
[Bug][Code (internal)] The condition General > Description in the Report Manager is no longer a text field.<br>
[Bug][Code (internal)] HTTP 500 Search error message when self-created add-on is disabled<br>
[Bug][Code (internal)] When exchanging the outputs and inputs, the window is displayed empty.<br>
[Bug][Code (internal)] Check the system settings for valid JSON<br>
[Bug][Authorization system] After an object has been archived, it is no longer displayed<br>
[Bug][Authorization system] Archive/delete only possible, if the user has rights to all objects of the corresponding object type<br>
[Bug][Authorization system] Location permissions do not show archived / deleted in object lists<br>
[Bug][Authorization system] Rights check for files in the file browser<br>
[Bug][Validation] Objectview not possible if category validation is active<br>
[Bug][Validation] Validate newly created objects<br>
[Bug][Mass editing] Software assignment clears operating system assignment during mass change<br>
[Bug][Mass editing] Disconnect the field "Purchased from:" in the accounting category by the mass change.<br>
[Bug][Mass editing] Automatically replace object titles via mass change with %COUNTER:11#6%.<br>
[Bug][Mass editing] Error during the actions of mass-change<br>
[Bug][Mass editing] Creating a template for a mass change generates white screen<br>
[Bug][Custom categories] The Report Manager adds unnecessary placeholders if the category is a custom category<br>
[Bug][Custom categories] Print view of variable reports incorrect<br>
[Bug][My-doit] Assigned/created orders are not displayed in My-doit<br>
[Bug][Console] Memory leak when performing a loogbook archive via i-doit console<br>
[Bug][Logbook] Long logbook entries move the other columns out of the view area<br>
[Bug][Logbook] Wrong content in logbook when changing the selection for object assignment<br>
[Bug][Logbook] Pass changed values to the logbook<br>
[Bug][Events] When using /main/ as i-doit installation directory events are not callable<br>
[Bug][Relations] Relationships: Category "Wan-connection" Attribute: "connected networks" no relationship is created<br>
[Bug][Relations] The relationship of the category Contact assignment is deleted during archiving.<br>
[Bug][JDisc] JDISC: Import of loopback and logical ports not possible<br>
[Bug][JDisc] JDISC-import: IP-address change is not displayed correctly in the logbook<br>
[Bug][JDisc] Logbook: Empty entries through the JDisc import<br>
[Bug][H-Inventory] H-Inventory-Import: Software Assignment relationships are not removed correctly<br>
[Bug][Templates] Default tempalte is sometimes ignored for custom categories<br>
[Bug][Templates] Field-placeholder %COUNTER% does not work correctly in default templates<br>
[Bug][CMDB-Explorer] Loop when creating connections in cmdb explorer<br>
[Bug][CMDB-Explorer] CMDB-Explorer exports wrong GraphML data<br>
[Bug][CMDB-Explorer] CMDB-Explorer exports duplicated GraphML edges<br>
[Bug][Search] Search switches selection of object type group<br>
[Bug][Search] Fix deadlock in search index while using API<br>
[Bug][Search] Global search of Layer-3 networks over IP<br>
[Bug][Search] Correct formatting of the search result<br>
[Bug][Installation] Files and directories in temp/ are world-writable<br>
[Bug][Installation] Removing checks for extensions not needed to use i-doit<br>
[Bug][API] PHP warning when saving a storage device without connected HDs<br>
[Bug][API] Reading WAN category via API does not always return an object ID<br>
[Bug][API] Properties with units are not consistent when retried via API<br>
[Bug][QR-Codes] Global QR code configuration is overwritten<br>
[Bug][User settings] Numeric format setting has no effect<br>
[Bug][CMDB settings] Configurable logging<br>
