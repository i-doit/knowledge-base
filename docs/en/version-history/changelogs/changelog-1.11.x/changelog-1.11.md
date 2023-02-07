[Task][Code (internal)]                         Detach "Events" Add-on from the core
[Task][Import]                                  Removing of loginventory import incl. DB, module, etc.
[Improvement][CMDB]                             Extras menu does not disappear on clicking outside of it
[Improvement][CMDB]                             Make tabs 'search' and 'reports' available for browsers with two columns
[Improvement][CMDB]                             Select the standard object type of object browsers
[Improvement][CMDB]                             Customizable columns and object types in object browser
[Improvement][Search]                           Recursive search within location path (activatable in tenant settings)
[Improvement][Search]                           Fuzzy search got removed
[Improvement][Search]                           Adding aliase to the search index
[Improvement][Categories]                       Button for recommending passwords in the password category
[Improvement][Categories]                       User definable columns in multivalue category-lists (as in object lists)
[Improvement][Categories]                       Improved visualisation of chassis in rack
[Improvement][Categories]                       Change columns from multi value categories
[Improvement][CSV]                              CSV import: object matching using object ID
[Improvement][CSV]                              Contact assignment via mail address or login name not possible in the CSV import
[Improvement][Lists]                            Availability of attribute "capacity" of RAIDs for list view of storage systems
[Improvement][Lists]                            Object lists: Show group membership of persons
[Improvement][Lists]                            Showing linked beginning and end of conctracts in object lists
[Improvement][Lists]                            Using a drop-down field in object list filter for drop-down and dialogue-plus fields
[Improvement][Lists]                            Display the variant and version number of an application in List view
[Improvement][Lists]                            Display the number of cluster members
[Improvement][Lists]                            Lists: Save sortings after attributes
[Improvement][Lists]                            Object lists: Filter after dialog (plus) fields
[Improvement][Lists]                            Fixed caption head in object lists
[Improvement][Objects]                          Object browser:  customizable columns as in the list views
[Improvement][Objects]                          Bildergallerie: Sortierung nach Namen etc.
[Improvement][Report-Manager]                   Group Report manager results instead of showing multiple rows
[Improvement][Report-Manager]                   Period of time can be slected as condition
[Improvement][Custom categories]                Selection of shown object types in object browser of custom category
[Improvement][Code (internal)]                  PHP 7.1 compatibility
[Bug][Search]                                   Search does not index model and manufacturer from category model
[Bug][Search]                                   Reindex via Console for a database error
[Bug][Search]                                   After duplicating and object and changing it's object type, the search will display two results
[Bug][Search]                                   Refactoring search indexing: Dialog + fields are not indexed
[Bug][Search]                                   Changing the object type results in a corrupt search index
[Bug][Search]                                   Search: SYSID of object type "Cable" are not considered for search
[Bug][Search]                                   FQDN can not be found via search
[Bug][Search]                                   Deleted/archived objects can not be distinguished in the search
[Bug][Search]                                   Custom categories can only be found using deep search
[Bug][Search]                                   Content of description fields is kept in search index
[Bug][Search]                                   open: Fullindex aborts with memory leak
[Bug][Search]                                   Changing object type creates duplicated entry in the search index
[Bug][Search]                                   Search index: An error occurred when the search index was regenerated with a large database
[Bug][Lists]                                    One-Klick-Edit Modus
[Bug][Lists]                                    Sorting: Subcategory "Installation" of the category "Application" not possible
[Bug][Lists]                                    Sorting: Subcategory "License key" Sorting leads to incorrect presentation
[Bug][Lists]                                    Sort subcategory "Assigned files" from the category "Files" not possible
[Bug][Lists]                                    Object List: Backup Category Sorting for "being backed up" results in an SQL error
[Bug][Lists]                                    Category "Contact Assignment"  field "Email Address" displays a function
[Bug][Lists]                                    SQL-error in list view when searching all fields
[Bug][Lists]                                    Dashboard-Widget: Object List can not be configured
[Bug][Lists]                                    List view not visible on events "hooks / history"
[Bug][Lists]                                    List View: Changing the column width in lists results in an unusable list
[Bug][Lists]                                    JDISC: Edit Checkbox will be removed in the configuration / profiles
[Bug][Lists]                                    Print view in object lists without function
[Bug][Lists]                                    Incorrect sorting in "Number of user-defined fields"
[Bug][Lists]                                    Deletet objects are used for counting of ip addresses in use
[Bug][Lists]                                    Objektliste: Die Option "Gruppierte Daten zeigen als" kann nicht als Standard gespeichert werden
[Bug][Lists]                                    Error when sorting for "category" from category "General"
[Bug][Lists]                                    Language constant is displayed in object list configuration
[Bug][Lists]                                    Attributes "Front grid size" and "Rear grid size" are not available for view in object list
[Bug][Lists]                                    Sorting of VLANs is alphanummeric
[Bug][Lists]                                    Cannot filter after contract status
[Bug][Lists]                                    Object list configuration still shows category 'Applications'
[Bug][Lists]                                    Filter does not find supplied data in dialog+ fields
[Bug][Check_MK]                                 Check_MK tag titles with quotes lead to problems when creating the idoit_hosttags.mk
[Bug][Check_MK]                                 Check-MK: Deinstallation of the add-on possible
[Bug][Categories]                               Attribute 'Path to save' not available in category 'Backup'
[Bug][Categories]                               Saving an entry in the category "CUCM VoIP line" leads to an SQL error message
[Bug][Categories]                               Logical devices being displayed despite being archived
[Bug][Categories]                               Placeholder %ipaddress% in category access also contains i-doit host
[Bug][Categories]                               Archived dialog + entries selectable in the state Normal
[Bug][Categories]                               Patchlevel not being displayed in category 'Software Assignment'
[Bug][Categories]                               Specific category "license assignment" is necassary in i-doit open but can not be used
[Bug][CMDB]                                     Object Browser: Switch from "Object View" to "Search", "Location Not" or "Reports"
[Bug][CMDB]                                     Wrong decrypted passwords causes empty reports
[Bug][CMDB]                                     Paging does not work in Internet Explorer 11
[Bug][CMDB]                                     Object browser: Performance problems when calling the object browser
[Bug][CMDB]                                     Drop down for dates shown transculent when clicking multiple times
[Bug][CMDB]                                     Inconsistent values for tmp_table_size and max_heap_table_size override each other
[Bug][CMDB]                                     Duplicate: Confirmation by pressing ENTER-Key will not duplicate the object but reload the page
[Bug][CMDB]                                     Incosisting sorting of service filters
[Bug][Mass editing]                             Mass change overwrites content of custom categories with empty fields, even if the option to ignore empty fields is set
[Bug][Mass editing]                             Mass change: existing templates are missing the download
[Bug][Mass editing]                             Wrong display of changed attributes of category "monitoring" in mass change/templates
[Bug][LDAP]                                     LDAP sync results in exception errors
[Bug][LDAP]                                     Display of the license in the license overview incorrect
[Bug][LDAP]                                     LDAP Sync: Connection test output incorrect
[Bug][Objects]                                  Object browser: Category "QinQ CE-VLAN" Attribute "Assigned SP-VLAN" ignores configuration
[Bug][Objects]                                  Object Browser: Missing categories in an object type may not display objects
[Bug][Objects]                                  Object browser: Category "QinQ CE-VLAN" does not display "Layer 2 networks"
[Bug][Objects]                                  Assignment field: source object equals zero
[Bug][Objects]                                  QCW: Final deletion of an object type group is not possible
[Bug][Objects]                                  Opening the overview page jumps to the last field "on object browser"
[Bug][Objects]                                  Automatic inventory number results in duplicate duplicate duplicates
[Bug][Objects]                                  Incorrect summation of the objects to be licensed
[Bug][Objects]                                  Wrong calculation of the next possible cancellation date
[Bug][Objects]                                  Javascript warning on Dialog+ fields
[Bug][Objects]                                  Changing the status of a dialog field with a parent results in an error
[Bug][Objects]                                  Prevent editing of multiple entries in multi-value categories
[Bug][Objects]                                  Chassis: objects only assignable once
[Bug][Objects]                                  Cabinet view not correct on chassis
[Bug][Objects]                                  Category: Virtual machine is the backward category without function
[Bug][Objects]                                  Category Port overview (stacking) not visible
[Bug][Objects]                                  Layer 2 network: Attached ports can not be purged
[Bug][Custom categories]                        Error with Information "ID" in custom categories
[Bug][Custom categories]                        Custom rearward category is not presented bold when the corresponding report does have results
[Bug][Custom categories]                        Dialog+ multiple select ID instead of name if this is a zero
[Bug][Custom categories]                        In the help text no umlauts are displayed
[Bug][Custom categories]                        Custom Category: Dialog+(Multiselect) Attribute can not be deleted
[Bug][System settings]                          System setting keys are limited to 100 characters
[Bug][Report-Manager]                           Report Manager: Sorting reports will result in non-functioning buttons
[Bug][Report-Manager]                           Report Manager: Microsoft Internet Explorer does not display a report output
[Bug][Report-Manager]                           Report Manager: Duplicating a report is not possible
[Bug][Report-Manager]                           Report Manager: Editing / saving a report is not possible
[Bug][Report-Manager]                           Report Manager: Output of the language constant if the value is 0
[Bug][Report-Manager]                           Attributes of category "CPU" completely available for reports
[Bug][Report-Manager]                           Attributes "Front grid size" and "Rear grid size" are not available in Report Manager
[Bug][Report-Manager]                           Error when using some attributes in report manager
[Bug][Report-Manager]                           While executing a variable report, nothing happens
[Bug][Console]                                  Console: "Call to member function" after OCS import
[Bug][API]                                      API: Multiple category entries in custom categories
[Bug][Open-Version]                             i-doit Open: main area without function
[Bug][Installation]                             Incorrect check of MySQL version during installation / update
[Bug][Installation]                             Improved check of versions during update and installation
[Bug][List editing]                             List edit disregards data cleansing
[Bug][List editing]                             List Editing: Language Constant is displayed in the Location category
[Bug][List editing]                             List Editing: Individual selection of an object is not possible for several objects
[Bug][List editing]                             List Editing: Editing the category "host address" is displayed incorrectly
[Bug][List editing]                             List editing: Save category "electricity supplier / consumer" releases connections
[Bug][List editing]                             List Editing: Filtering by contact assignment by object title not possible
[Bug][List editing]                             List editing: location not possible
[Bug][List editing]                             Suggestion function does not open properly in fields of object browser
[Bug][List editing]                             Listedit of the category WAN CONNECTIONS shows succesfull save, but no value is changed
[Bug][OCS]                                      OCS import: Logging via GUI is missing
[Bug][OCS]                                      Database error during OCS import
[Bug][Update]                                   Database error in the update process
[Bug][Logbook]                                  Logbook: list view of logbook entries superimposed fields if content is too long
[Bug][Logbook]                                  Logbook: Archived entries can not be viewed
[Bug][Logbook]                                  Missing horizontal scrollbar in logbook
[Bug][Logbook]                                  Logbook: Allocation category "software allocation" no entries are made in case of changes
[Bug][JDisc]                                    JDISC: Editing / creating a profile results in a DB error message
[Bug][JDisc]                                    If you enter a value in the category JDisc custom attributes without attribute, an error message will be displayed
[Bug][Relations]                                Relationships: Weightings are missing in relations to be edited
[Bug][Relations]                                Relationships: list of relationships incomplete
[Bug][CMDB-Explorer]                            CMDB Explorer: Management of profiles incorrect
[Bug][Systemtools]                              tmp_table_size being displayed twice in the system overview
[Bug][Notifications]                            Notifications: Incorrect output of objects for certain assigned person groups
[Bug][Notifications]                            Notifications: Custom categories are missing for selection in e-mail templates
[Bug][Authorization system]                     Reports can be created in all report categories, even without permission
[Bug][Authorization system]                     File Browser ignores the rights system
[Bug][Authorization system]                     Rights system: Parameter All does not apply to "Categories in object type" in list edit
[Bug][Authorization system]                     Purging all objects which are involved in an authorization set leaves an empty right
[Bug][Events]                                   Events: Do not provide uniquely identifiable changes
[Bug][CSV]                                      CSV import: LDAP group mapping leads to incorrect import
[Bug][CSV]                                      CSV import throws PHP fatal error
[Bug][Templates]                                High amount of templates/mass change templates will prevent vom showing all templates/mass change templates in selection
[Bug][Dashboard]                                Widget "objectlist" shows ID instead of livestatus icon
[Bug][XML]                                      XML export does not save information about the category "Virtual Machine"
[Bug][Import]                                   Summary logic leads to various errors
[Bug][Validation]                               Validation of tags does not work in the list edit
[Bug][User settings]                            Umlauts in the user login lead to incorrect logins
[Bug][Controller]                               Full index enforces PHP setting "memory_limit" to 4 gigabytes
