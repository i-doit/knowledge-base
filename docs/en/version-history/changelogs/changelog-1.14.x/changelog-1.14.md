[Improvement][Code (internal)] Compatibility for PHP 7.4
[Improvement][Code (internal)] i-doit no longer supports PHP 7.0, minimum requirement is PHP 7.1
[Improvement][Code (internal)] Remove unnecessary WYSIWYG formatting options
[Improvement][Installation] Add support for MariaDB 10.4
[Improvement][Categories] Category "Access" adjustable default value for the attribute "Primary"
[Improvement][Categories] Additional button for "Back" of the category "racks" in rooms
[Improvement][Categories] Extension of the SIM card category for multi-sim
[Improvement][CSV Import] CSV export only contains selected objects
[Improvement][CMDB] SIM CARDS make more then two cards possible
[Improvement][Controller] Location correction can be called up separately via the i-doit controller/console
[Improvement][Object type configuration] Preview for Icons of object types
[Bug][CSV Import] CSV import: Remove object title as mandatory field when mapped to existing objects
[Bug][Cabling view] Cabling browser lists ports in order of creation
[Bug][CMDB] SQL error when selecting cluster services
[Bug][CMDB] Mouseover cache will not be updated on changes
[Bug][CMDB] When cleaning up category entries, not all data in the database is cleaned up.
[Bug][CMDB] Long object titles in the cabling browser are not displayed completely
[Bug][CMDB] The button "Link to this page" jumps to the category list view instead of remaining in the current entry
[Bug][CMDB] Wrong translation for default weighting of relationship types
[Bug][Categories] Position in the rack only possible after saving the object
[Bug][Categories] Live status can no longer be called
[Bug][Categories] The checkbox in the List category does not contain a record ID.
[Bug][Categories] First level of logical location view only shows objects of type "workspace", even if there are other objects, serving as a logical location, at this level
[Bug][Categories] Missing information about logical ports in connected objects
[Bug][Categories] Type of category Network of a super network cannot be changed
[Bug][Categories] The Sim-card category is by default on the overview page of the Sim card object
[Bug][Categories] height unit in front and back views of rack are shown incorrect
[Bug][OCS] Connected devices are not found during import using the DEVICEMACADDRESS and object title.
[Bug][CMDB-Explorer] CMDB Explorer does not display object information
[Bug][CMDB-Explorer] Print feature of CMDB explorer only creates partially output/print
[Bug][CMDB-Explorer] CMDB-Explorer freezes when tenant is changed in a new browser tab
[Bug][Validation] Option to handle validation conflicts during object creation via templates
[Bug][LDAP] Client selection restricted by LDAP user authentication $authenticationHash
[Bug][LDAP] LDAP: User login missing relationship to person group
[Bug][LDAP] The ldap-sync command does not use the specified configuration
[Bug][Relations] Weighting of the relationships of service components is reset to standard
[Bug][Lists] Cluster Services Listenansicht schmeisst SQL Fehler und wird nicht angezeigt
[Bug][Lists] Displaying assigned objects of a person in object list not possible
[Bug][Print view] Reports without results in user-defined categories cause print view errors
[Bug][Report-Manager] Error in Report Manager, conditions with "%NOT LIKE%" are executed as "%LIKE%".
[Bug][Report-Manager] Conditions of a report are not fulfilled completely
[Bug][Report-Manager] Field placeholder in report generates SQL error message
[Bug][Report-Manager] Report-Manager: Selection restricted at conditions "linked attribute"
[Bug][Report-Manager] Sorting the output according to the name in the report
[Bug][Code (internal)] Create import and upload folders for each client
[Bug][Update] Recursively create folders for uploading files
[Bug][Update] Migration of reports not possible 1.13 > 1.13.1-2
[Bug][Admincenter] Admin Center login does not work after updating to i-doit 1.13.2
[Bug][Console] Relationships are misrepresented when using php console.php system-objectrelations
[Bug][Search] Memory exception when creating search index
[Bug][Licence settings] License widget: color of remaining term not according to definition
[Bug][JDisc] When port changes are made by JDISC, the linked object is not logged.
[Bug][JDisc] If the CMDB status is changed by JDISC, it will not be logged.
[Bug][CMDB settings] The default Object-Browser setting of category "Storage Area Network" > "FC port" is not used
[Bug][CMDB settings] Object browser Layer-2-Net / Layer-3-Net assignment not existing
[Bug][XML] Importing files via XML skips the contents of the subcategory "File Version
[Bug][Custom categories] Sanitize input data deletes the HTML toolbar.
[Bug][Custom categories] Display renamed field names correctly
[Bug][Import] CSV Import: Assignment of licences
[Bug][Import] CSV File is not Imported when it ends with .CSV (Uppercase)
[Bug][Session] Object lock stays intact when user logs out
[Bug][Logbook] No logbook entry at the server if it is assigned to a locker - Vice-versa: locker creates log entry
[Bug][Objects] Cabinet view: validation prevents the placement of an object
[Bug][Objects] Operating system assignment of version is faulty
[Bug][Objects] Objects with quotes ("") in the title are wrong displayed in the layer-3-net overview
[Bug][Objects] Layer-2-net in objects are displayed with [] instead of empty value
[Bug][Objects] IPv6 supernet also displays subnets outside the defined range
[Bug][List editing] Placeholder creates faulty view in list edit