# Changelog 1.14

[Improvement][Code (internal)] Compatibility for PHP 7.4<br>
[Improvement][Code (internal)] i-doit no longer supports PHP 7.0, minimum requirement is PHP 7.1<br>
[Improvement][Code (internal)] Remove unnecessary WYSIWYG formatting options<br>
[Improvement][Installation] Add support for MariaDB 10.4<br>
[Improvement][Categories] Category "Access" adjustable default value for the attribute "Primary"<br>
[Improvement][Categories] Additional button for "Back" of the category "racks" in rooms<br>
[Improvement][Categories] Extension of the SIM card category for multi-sim<br>
[Improvement][CSV Import] CSV export only contains selected objects<br>
[Improvement][CMDB] SIM CARDS make more then two cards possible<br>
[Improvement][Controller] Location correction can be called up separately via the i-doit controller/console<br>
[Improvement][Object type configuration] Preview for Icons of object types<br>
[Bug][CSV Import] CSV import: Remove object title as mandatory field when mapped to existing objects<br>
[Bug][Cabling view] Cabling browser lists ports in order of creation<br>
[Bug][CMDB] SQL error when selecting cluster services<br>
[Bug][CMDB] Mouseover cache will not be updated on changes<br>
[Bug][CMDB] When cleaning up category entries, not all data in the database is cleaned up.<br>
[Bug][CMDB] Long object titles in the cabling browser are not displayed completely<br>
[Bug][CMDB] The button "Link to this page" jumps to the category list view instead of remaining in the current entry<br>
[Bug][CMDB] Wrong translation for default weighting of relationship types<br>
[Bug][Categories] Position in the rack only possible after saving the object<br>
[Bug][Categories] Live status can no longer be called<br>
[Bug][Categories] The checkbox in the List category does not contain a record ID.<br>
[Bug][Categories] First level of logical location view only shows objects of type "workspace", even if there are other objects, serving as a logical location, at this level<br>
[Bug][Categories] Missing information about logical ports in connected objects<br>
[Bug][Categories] Type of category Network of a super network cannot be changed<br>
[Bug][Categories] The Sim-card category is by default on the overview page of the Sim card object<br>
[Bug][Categories] height unit in front and back views of rack are shown incorrect<br>
[Bug][OCS] Connected devices are not found during import using the DEVICEMACADDRESS and object title.<br>
[Bug][CMDB-Explorer] CMDB Explorer does not display object information<br>
[Bug][CMDB-Explorer] Print feature of CMDB explorer only creates partially output/print<br>
[Bug][CMDB-Explorer] CMDB-Explorer freezes when tenant is changed in a new browser tab<br>
[Bug][Validation] Option to handle validation conflicts during object creation via templates<br>
[Bug][LDAP] Client selection restricted by LDAP user authentication $authenticationHash<br>
[Bug][LDAP] LDAP: User login missing relationship to person group<br>
[Bug][LDAP] The ldap-sync command does not use the specified configuration<br>
[Bug][Relations] Weighting of the relationships of service components is reset to standard<br>
[Bug][Lists] Cluster Services Listenansicht schmeisst SQL Fehler und wird nicht angezeigt<br>
[Bug][Lists] Displaying assigned objects of a person in object list not possible<br>
[Bug][Print view] Reports without results in user-defined categories cause print view errors<br>
[Bug][Report-Manager] Error in Report Manager, conditions with "%NOT LIKE%" are executed as "%LIKE%".<br>
[Bug][Report-Manager] Conditions of a report are not fulfilled completely<br>
[Bug][Report-Manager] Field placeholder in report generates SQL error message<br>
[Bug][Report-Manager] Report-Manager: Selection restricted at conditions "linked attribute"<br>
[Bug][Report-Manager] Sorting the output according to the name in the report<br>
[Bug][Code (internal)] Create import and upload folders for each client<br>
[Bug][Update] Recursively create folders for uploading files<br>
[Bug][Update] Migration of reports not possible 1.13 > 1.13.1-2<br>
[Bug][Admincenter] Admin Center login does not work after updating to i-doit 1.13.2<br>
[Bug][Console] Relationships are misrepresented when using php console.php system-objectrelations<br>
[Bug][Search] Memory exception when creating search index<br>
[Bug][Licence settings] License widget: color of remaining term not according to definition<br>
[Bug][JDisc] When port changes are made by JDISC, the linked object is not logged.<br>
[Bug][JDisc] If the CMDB status is changed by JDISC, it will not be logged.<br>
[Bug][CMDB settings] The default Object-Browser setting of category "Storage Area Network" > "FC port" is not used<br>
[Bug][CMDB settings] Object browser Layer-2-Net / Layer-3-Net assignment not existing<br>
[Bug][XML] Importing files via XML skips the contents of the subcategory "File Version<br>
[Bug][Custom categories] Sanitize input data deletes the HTML toolbar.<br>
[Bug][Custom categories] Display renamed field names correctly<br>
[Bug][Import] CSV Import: Assignment of licences<br>
[Bug][Import] CSV File is not Imported when it ends with .CSV (Uppercase)<br>
[Bug][Session] Object lock stays intact when user logs out<br>
[Bug][Logbook] No logbook entry at the server if it is assigned to a locker - Vice-versa: locker creates log entry<br>
[Bug][Objects] Cabinet view: validation prevents the placement of an object<br>
[Bug][Objects] Operating system assignment of version is faulty<br>
[Bug][Objects] Objects with quotes ("") in the title are wrong displayed in the layer-3-net overview<br>
[Bug][Objects] Layer-2-net in objects are displayed with [] instead of empty value<br>
[Bug][Objects] IPv6 supernet also displays subnets outside the defined range<br>
[Bug][List editing] Placeholder creates faulty view in list edit<br>
