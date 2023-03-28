# Changelog 1.13

[Task][List editing] Multiple hardware RAIDS appear in list edit although none were created<br>
[Improvement][Code (internal)] Securiy update for external libraries<br>
[Improvement][Code (internal)] i-doit no longer supports PHP 5.6, minimum requirement is PHP 7<br>
[Improvement][Code (internal)] Check for duplicate assigned categories after add-on installation<br>
[Improvement][LDAP] Sync attributes objectSid and objectGUID via LDAP<br>
[Improvement][Update] Improve i-doit updater<br>
[Improvement][Installation] Compatibility for PHP 7.3<br>
[Improvement][Installation] Add support for newer MariaDB versions<br>
[Improvement][Lists] New attribute "contact + role" for object lists - thanks to Christian Haase<br>
[Improvement][Service] Services: Service View for other object types in the menu-tree<br>
[Improvement][Console-base Installation/Update/Licensing] Console-based management of i-doit tenants<br>
[Improvement][Console-base Installation/Update/Licensing] Console-based Licensing of i-doit<br>
[Improvement][Console-base Installation/Update/Licensing] Console-based management of i-doit add-ons<br>
[Change][Categories] Multi Dialog Plus fields do not use new line<br>
[Bug][Categories] Data in the Monitoring category cannot be saved.<br>
[Bug][Categories] The Form Factor category does not store any data in the overview.<br>
[Bug][Categories] Saved profiles of the QCW are visible in all clients.<br>
[Bug][Categories] Archived attributes are displayed in the list view of the object type<br>
[Bug][Categories] Add attribute "Telephone rate" to the category SIM card in the dialog admin<br>
[Bug][Categories] Changing database field type for license keys to allow longer license keys<br>
[Bug][Categories] Option to select database instance also offers archived/deleted instances for selection<br>
[Bug][Categories] Sorting and Filtering Live Status<br>
[Bug][Categories] Standard filtering of CMDB status<br>
[Bug][Categories] Attribute priority can not be selected to be shown in list of multi value category "softwareassignment"<br>
[Bug][Categories] Single check of each categories when installing the pro add-on<br>
[Bug][Categories] Mouseover in categories only load after refresh of page<br>
[Bug][Categories] FQDN not used in print view<br>
[Bug][Categories] Show assigned objects in the list view for groups of people<br>
[Bug][Categories] Filter by contract type<br>
[Bug][Categories] Category "SIM card", no leading zeros can be added / deleted on the overview page<br>
[Bug][List editing] Create new category entries for all objects in list editing<br>
[Bug][List editing] Sub-category "Installation" is missing in the list edit<br>
[Bug][List editing] HTTP 500 error / empty page when calling list editing when Nagios Add-On was uninstalled<br>
[Bug][List editing] List Editing: Calendar selection moves outside the visible area<br>
[Bug][List editing] List edit of category "power consumer"<br>
[Bug][List editing] Logical location can not be saved via list edit<br>
[Bug][Lists] Filter for Objects is missing<br>
[Bug][Lists] Archiving a database instance causes some attributes of database scheme not being shown in object list for "database scheme"<br>
[Bug][Lists] The category "Contract assignment" is displayed empty in the default list of object lists<br>
[Bug][Lists] Filtering is not possible with the Virtual Machine attribute of the Virtual Machine category<br>
[Bug][Lists] Object lists: attribute "Description" of the specific category "Organization" is not saved<br>
[Bug][Lists] Special characters in filtering option for dialogue plus fields cause the filter to deliver an empty result<br>
[Bug][Lists] Object titles are not visible anymore after object has been archived/deleted<br>
[Bug][Lists] The version number and variant should not be shown in the object lists configuration<br>
[Bug][Lists] Create Dialog+ values via the filter in the object list<br>
[Bug][Lists] The objects are not shown in the object list<br>
[Bug][Lists] Default filter "virtual machine> virtual machine" is ignored in object list<br>
[Bug][OCS] OCS import: When importing an SNMP device, the operating system is not imported correctly<br>
[Bug][OCS] OCS-IMPORT: Category "Operating system" is overwritten during an import<br>
[Bug][OCS] Import of CPU cores from OCS inventory failed<br>
[Bug][Logbook] Incorrect description / operation in log recovery<br>
[Bug][Logbook] Logbook: Assignment categories don't create an log entry for assigned object<br>
[Bug][CSV Import] Fields are cleared during csv import, even if they do not appear as part of the import<br>
[Bug][CSV Import] Objects are skipped during CSV import<br>
[Bug][CSV Import] CSV-Import: Import via CLI overwrite existing objects<br>
[Bug][CSV Import] Version number (Category: Software assignment) cannot be filled via CSV import<br>
[Bug][CSV Import] Importing content into dialogue fields vis csv import is case sensitive<br>
[Bug][Import] The company of a person is emptied during CSV import.<br>
[Bug][Update] Missing Check of PHP Extensions in the GUI Updater<br>
[Bug][Code (internal)] Output in Infobox can block the user from working with i-doit<br>
[Bug][Code (internal)] Indexing of the category C__CATG__NET_LISTENER<br>
[Bug][Code (internal)] When accessing i-doit, index.php cannot be found<br>
[Bug][Code (internal)] Saving a SIM card without twin-card "card number" leads to SQL error<br>
[Bug][Code (internal)] Many links are directed to old `http` addresses<br>
[Bug][Code (internal)] idoit-rights.sh tries to set rights to folders which are not available<br>
[Bug][Code (internal)] Unnecessary dialog+ table "isys_catg_cpu_frequency"<br>
[Bug][Custom categories] Poor performance when saving/updating multivalue categories<br>
[Bug][Custom categories] Print view of reports in custom categories incorrect<br>
[Bug][Custom categories] Data cleansing overwrites the HTML toolbar.<br>
[Bug][Custom categories] Reports are displayed for selecting attributes in Custom Categories<br>
[Bug][LDAP] LDAP Sync: Import of organization incorrect<br>
[Bug][LDAP] SSO-authentication when full specification of index.php not possible<br>
[Bug][LDAP] LDAP connection handling<br>
[Bug][LDAP] Subcategory "Master data" Provide the attribute "Salutation" for ldap-sync<br>
[Bug][LDAP] LDAP Sync: Contact Assignment / Assigned objects are not archived when the contact is archived<br>
[Bug][LDAP] Configure LDAP via API<br>
[Bug][Print view] Print-preview on object browsers with multiselect of custom categories broken<br>
[Bug][Print view] Print preview shows HTML code<br>
[Bug][Report-Manager] Report Manager: Output of the grouped MultiValues error during PDF export<br>
[Bug][Report-Manager] Attributes of category "Assigned workstations" can not be used in report Manager<br>
[Bug][Report-Manager] Sub-Kategorie "Anschlüsse" Attribut "Sub-Kategorie" Anschlüsse "Attribut" Ein / Ausgang "für Report-Manager bereitstellen" für Report-Manager bereitstellen<br>
[Bug][Report-Manager] Attribute "standard gateway for net" can not be used in report manager as condition<br>
[Bug][CMDB settings] Limiting the view via rights does not effect location browser<br>
[Bug][Open-Version] Console.php error<br>
[Bug][Installation] Dead Link in setup<br>
[Bug][JDisc] JDisc-Import Fehler: "CMDB Error: Relation type should not be empty."<br>
[Bug][Systemtools] Re-new relation objects cannot be executed<br>
[Bug][H-Inventory] Object matching profile does not get applied for H-Inventory<br>
[Bug][Request Tracker] Request Tracker: Language Constants are not used/translated<br>
[Bug][Request Tracker] Request Tracker: In the "All Objects" tab, all objects are selected.<br>
[Bug][Validation] Wrong validation on inventory number<br>
[Bug][Search] Automatic DeepSearch does not work, when normal search did not find any results<br>
[Bug][Authorization system] Prohibit users from assigning work centers<br>
[Bug][Relations] Correct display of the relations in state archived/deleted<br>
[Bug][Console-base Installation/Update/Licensing] Using the "system-checkforupdates" command outputs constants<br>
[Bug][Cabling view] Enable horizontal scrolling for overview in cabling >> connectors<br>
