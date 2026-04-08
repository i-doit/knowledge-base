---
search:
  exclude: true
---
# Changelog 35
<!-- cSpell:disable -->
[Task][Code (Internal)]              Allow switching tenant without redirecting to the base location of i-doit<br>
[Task][Code (Internal)]              Remove unnecessary 'isys_library_simplepie' class, use '\SimplePie\SimpliePie' instead<br>
[Task][Code (Internal)]              Remove unnecessary 'isys_library_smarty' class, use '\Smarty\Smarty' instead<br>
[Task][CMDB]                         Create event to modify map-buttons in location category<br>
[Task][Dashboard]                    Unblock session while loading dashboard widgets<br>
[Task][QR-Codes]                     Remove old QR-Code library<br>
[Improvement][Report-Manager]        Report view for CMDB Status changes<br>
[Bug][Report-Manager]                The query of a report is not updated across different versions<br>
[Bug][Report-Manager]                Create an selection to filter objects from assignment categories in the Report manager<br>
[Bug][Report-Manager]                Using certain combination of attributes for a report causes database error<br>
[Bug][Report-Manager]                Price per unit for licenses always only displays the price for the first result at report manager<br>
[Bug][Report-Manager]                Display data from Relation category in Report manager<br>
[Bug][Report-Manager]                Using guest systems (virtual host) at condition block causes SQL error at report manager<br>
[Bug][Report-Manager]                Display Cable connection from Network Port<br>
[Bug][Lists]                         "Define as standard" overwrites default list configuration<br>
[Bug][Lists]                         Variables from Access category are not replaced in list view<br>
[Bug][Lists]                         Attribute State from Virtual machine should display a string in the object list<br>
[Bug][Lists]                         Allow all properties to be sorted by default (Reports, Lists)<br>
[Bug][CMDB]                          Trying to assign a object causes 500 error<br>
[Bug][CMDB]                          Setting CMDB rights for create, view, edit also grants delete rights for attribute settings<br>
[Bug][CMDB]                          Deselecting an object in "Guest systems" category leads to Fatal Error, if Forms add-on is installed<br>
[Bug][CMDB]                          Fix the assignment of a Software object in the Software assignment category.<br>
[Bug][CMDB]                          Cant purge the assigned Workplaces in the category Assigned Workplaces<br>
[Bug][CMDB]                          Location path in object browser is displayed as number<br>
[Bug][CMDB]                          Date fields with a time input are not being validated correctly<br>
[Bug][CMDB]                          Field "Type" in category "Device" should be Dialog+<br>
[Bug][CMDB]                          Filtering for location path is not working with apostrophes<br>
[Bug][CMDB]                          Searching for a location displayed non existent character<br>
[Bug][CMDB]                          Configured user language is ignored<br>
[Bug][CMDB]                          Using cmdb.external.push.v2 twice causes http 500 error<br>
[Bug][CMDB]                          Using cmdb.external.push.v2 twice with multi-value object browser causes http 500 error<br>
[Bug][Console]                       The console command 'report-export' fails when using relative paths for PDF exports<br>
[Bug][Code (Internal)]               Entries in lists are not counted<br>
[Bug][Code (Internal)]               Setting object list status to template and switching to empty object list causes 500error<br>
[Bug][Code (Internal)]               PHP Fatal Error when saving "Multiselect" fields<br>
[Bug][Code (Internal)]               Deleting a File version leads to error without deleting the file<br>
[Bug][Code (Internal)]               No scrollbar for all ticket page when using low resolution<br>
[Bug][Code (Internal)]               "Enable / Disable Chassis view" button is missing in racks category for room objects<br>
[Bug][Code (Internal)]               Variable is not resolved in the category Remote Management Controller<br>
[Bug][Code (Internal)]               Entry Disappears from 'Service Relation' Category After User Archives It<br>
[Bug][Code (Internal)]               Show the correct log change in the logbook when create, edit or delete the Entry in the Object picture<br>
[Bug][Code (Internal)]               Show the correct log change when edit the QinQ CE-VLAN category<br>
[Bug][Code (Internal)]               Show the correct log update when Archive, Recycle, or deleting an entry in the Assigned Objects (Organization) category.<br>
[Bug][Code (Internal)]               Custom counters start the count at 2<br>
[Bug][Code (Internal)]               Relocating a location resets treeview type setting for location view<br>
[Bug][Code (Internal)]               Custom counter gets duplicated when set as automatic inventory number<br>
[Bug][Code (Internal)]               Do not reset/ignore cloud parameter if --enable is used<br>
[Bug][Code (Internal)]               Allow user to purge "Assigned sim card" entries<br>
[Bug][Update]                        Version 34 migrations fail because of foreign key constraints<br>
[Bug][Installation]                  Do not use constants from PHP module pcntl<br>
[Bug][Installation]                  Warning when viewing admin user rights for Administration<br>
[Bug][LDAP]                          Archiving a person group (via ldap-sync) does not create logbook entry<br>
[Bug][LDAP]                          OpenLDAP error when ldap-sync is triggered via console<br>
[Bug][LDAP]                          Incorrect creation of persons in other tenants if the person uses Active Directory user data<br>
[Bug][Permission system]             User Permissions are not working correctly for Systemtools and Dashboard<br>
[Bug][Permission system]             The right to view the overview page with the condition Category in object-type does not grant view right<br>
[Bug][Permission system]             Permission 'Documents' and 'Documents in Categories' don't allow users to download documents from categories<br>
[Bug][Logbook]                       Missing logbook entry when a contact assignment entry is archived<br>
[Bug][Logbook]                       Logbook entry for accounting attributes contain random values when created with template<br>
[Bug][Logbook]                       Log multi object browser changes correctly<br>
[Bug][Logbook]                       Show ranking information in logbook for category assinged objects (persons)<br>
[Bug][Logbook]                       Also show longitude and latitude adjustments in the logbook<br>
[Bug][Logbook]                       Do not hash changed password field in logbook<br>
[Bug][Logbook]                       Log all changes from device category<br>
[Bug][Logbook]                       Show ranking information of assigned clusters category in logbook<br>
[Bug][Logbook]                       Log assigned logical port category when port is linked<br>
[Bug][Logbook]                       Dialog changes for "SLA service level" fields are not properly set in the logbook for category SLA<br>
[Bug][Logbook]                       adjust the logbook for the category "Emergency plan components"<br>
[Bug][Logbook]                       Show the correct log change when editing the "Assigned Workplaces" in "Assigned Workplaces" category<br>
[Bug][Logbook]                       Show the correct log change when edit the Routing category.<br>
[Bug][Logbook]                       Adjust the logbook for the category "Raid-Array"<br>
[Bug][Logbook]                       Certificate date fields should not show time values in the logbook<br>
[Bug][Connector cabling]             Automatically created cables do not have any logbook entries<br>
[Bug][Connector cabling]             List editing in patch panel cabling not working when trying to remove assignments or cables<br>
[Bug][CSV Import]                    Sorting for a rack causes vertical slots to be seen already taken when importing via csv import<br>
[Bug][CSV Import]                    When assigning a object via CSV with "Object Type: Automatic" not all assigned object types are searched<br>
[Bug][CSV Import]                    Time is logged when importing Date attribute in Accounting category<br>
[Bug][CSV Import]                    Values in custom categories are not overwritten by the CSV import option "adopt empty values"<br>
[Bug][CSV Import]                    CSV Import - stated CMDB Status in import mapping does not overwrite the default template status of the entry<br>
[Bug][CSV Import]                    Importing property "Assigned Port" from category "Hostaddress" is not possible<br>
[Bug][CSV Import]                    CSV Import does not match an operating system - variant when importing<br>
[Bug][CSV Import]                    cmdb.registry.sysid_readonly being set to 1 prevents import.csv.overwrite-objecttype from working<br>
[Bug][CSV Import]                    CSV import mapping shows error, when a request is not completed in time<br>
[Bug][API]                           Reading category Network Port does respond with Interface as a array instead of a object<br>
[Bug][List editing]                  File assignment via list edit not working<br>
[Bug][List editing]                  Object suggestion does not seem to trigger callbacks in list-edit<br>
[Bug][List editing]                  Allow user to assign files in the file browser<br>
[Bug][List editing]                  'Port Allocation' selection is cut in Listedit<br>
[Bug][List editing]                  Layer 2 nets cannot be added via listedit in logical ports and even clear out existing layer 2 nets<br>
[Bug][List editing]                  Dropdown not visible when listediting despite attribute settings<br>
[Bug][List editing]                  Assigning a file to multiple object via list edit causes a TypeError<br>
[Bug][List editing]                  Adding a file via the file assignment category is not possible at list edit<br>
[Bug][Search]                        Search index is not updated after deleting a Add-on<br>
[Bug][Categories]                    Changing the "Assigned workstation" also changes the "Logical location" and does not generate an event signal and logbook entry<br>
[Bug][Categories]                    Attribute "Assigned mobile phone" in category "SIM card" does not show up in logbook after change<br>
[Bug][Categories]                    Error Message when saving a entry in 'form factor' for example<br>
[Bug][Categories]                    PHP error when Quickpurge a Assigned SIM cards entry<br>
[Bug][Categories]                    Editing an archived primary host address resets primary field<br>
[Bug][Categories]                    When changing an archived primary host address to non primary or the other way around it gets moved to normal<br>
[Bug][JDisc]                         Selecting operating system and software assignment at JDisc profile causes duplicate software assignment entries<br>
[Bug][JDisc]                         JDisc import without a selected category in the profile fails with error message<br>
[Bug][JDisc]                         JDisc import creates new object when the object is archived<br>
[Bug][JDisc]                         JDisc does not import Microsoft IIS Application<br>
[Bug][JDisc]                         When importing Cloud users via JDisc the log is empty<br>
[Bug][JDisc]                         The JDisc profiles list header and values do not match<br>
[Bug][Custom categories]             Setting custom field to date and time results in field to reset<br>
[Bug][Validation]                    Duplicating an entry in an object while automatic inventory counter is set causes errors and faulty entry creation<br>
[Bug][Validation]                    "Empty only the affected attributes on validation errors?" does not work properly<br>
[Bug][Validation]                    Do not allow user to save categories with invalid field value validation errors<br>
[Bug][Validation]                    Using a custom counter ignores validation unique check for titles in mass-change<br>
[Bug][Validation]                    Using a custom counter ignores validation unique check for titles in list edit<br>
[Bug][Add-on & Subscription Center]  Unable to install add-on via Add-on & Subscription Center on windows<br>
[Bug][Relations]                     Setting for "Relationship master" in object type configuration does not work<br>
[Bug][License installation (i-doit)] Correct error message when trying to license i-doit when lizenzen.i-doit.com is not reachable<br>
[Bug][Object type configuration]     Pager does not work for the Object browser configuration<br>
[Bug][Object type configuration]     Do not consider non-image files on object type creation page to prevent route requirement errors<br>
[Bug][Notifications]                 Send notifications, even if no default template for a language exists<br>
<!-- cSpell:enable -->
