# Changelog 1.11.1

[Task][Admincenter]                      AdminCenter: Fatal error while opening Add-Ons without valid i-doit login session  
[Improvement][Report-Manager]            Applications: assigned license key  
[Improvement][Report-Manager]            Report-Manager, attribute tags in the General category  
[Improvement][Code (internal)]           Extending of existing object lock for object independent locks  
[Bug][Objects]                           Object browser: Instance / Oracle Database "DBMS" Selectable object types  
[Bug][Objects]                           Losing category "Instance / Oracle database" information when duplicating an object  
[Bug][Objects]                           Object Browser: Instance / Oracle database "DBMS" performance issues  
[Bug][Objects]                           Access URL won't be displayed as link in object list  
[Bug][Objects]                           No pre-selection by object type in object browser  
[Bug][Objects]                           Incorrect object is displayed in the Object Browser input field  
[Bug][Objects]                           Apostroph in object title causes javascript error on save  
[Bug][Objects]                           Passwords are not being duplicated  
[Bug][Objects]                           Object Browser: "Service» Service Components "changes are ignored  
[Bug][Objects]                           Category "Cabinets" only considers the object type Cabinet  
[Bug][Objects]                           Allocation of the last port is lost with duplicate saving in the connection category  
[Bug][Custom categories]                 Inkonsistent behaviour of yes/no fields  
[Bug][Report-Manager]                    Feature "Grouped multivalue presentation" in report manager set to "No" as deafult  
[Bug][Report-Manager]                    Attribute "Database instance" (Category: "Database schema") not available in Report Manager  
[Bug][Report-Manager]                    Report-Manager: Conditions are missing comparison operators  
[Bug][Report-Manager]                    Variable report results in an sql error message in a custom category  
[Bug][Report-Manager]                    SLA time values not usable in report manager  
[Bug][Report-Manager]                    Second vertical scrollbar in report result list when using a description  
[Bug][Report-Manager]                    Error when executing a report with empty result  
[Bug][Report-Manager]                    Report with data of the categories Software assignment and Operating system delivers corrupted results  
[Bug][Report-Manager]                    Cost values of 0,00 are shown as empty result in reports  
[Bug][Report-Manager]                    Report Manager: Attribut "Host in cluster" not read properly  
[Bug][Report-Manager]                    Click on variable report always leads to the referring object  
[Bug][Report-Manager]                    Location paths from reports flawed when calling via API  
[Bug][Report-Manager]                    Report contains no results if query retrieves information from categories  'Contact assignment' and 'Service assignment'  
[Bug][Report-Manager]                    Sorting after ID in Report Manager defective  
[Bug][Report-Manager]                    Report Manager: Database Used Database field of the Database Assignment category causes SQL errors  
[Bug][Report-Manager]                    Selection of some attributes in report manager may cause an empty result under some circumstances  
[Bug][Check_MK]                          New API function for reading host tags  
[Bug][Check_MK]                          Check-MK: Limitation is missing when exporting dynamic host features  
[Bug][Check_MK]                          Check-MK: export of dynamic host tagswithout manual saving of the category "host tgs"  
[Bug][Analytics]                         Missing objects when displaying the detailed information of custom categories  
[Bug][Templates]                         Overview of the usable placeholders in templates  
[Bug][Search]                            Auomatic refresh of search index locks table of search index and causes long wait times  
[Bug][Search]                            Performance problems when using custom categories while saving/duplicating  
[Bug][Search]                            Attribute "firmware" from category "model" can not be found via search  
[Bug][Search]                            Attribute "serial number" from category "model" can not be found via search  
[Bug][Search]                            Search index is not refreshed when saving content in UI  
[Bug][Search]                            Information in search results is shortened untipically  
[Bug][Search]                            Language setting does not affect information within search results  
[Bug][Search]                            Search results from category host address are always shown as primary  
[Bug][Search]                            Hightlighting of search results not highlighting correct content  
[Bug][Search]                            Search results not logical, if less than three characters  are used  
[Bug][Search]                            Formatting is carried to preview of search results  
[Bug][Search]                            While indexing dialog(+) fields a message in log will be displayed  
[Bug][LDAP]                              LDAP sync duration distinctly longer  
[Bug][LDAP]                              LDAP-SYNC / Auth is case-sensitive and creates duplicate contacts  
[Bug][Export]                            CSV export from custom categories shows no results  
[Bug][JDisc]                             Error when using JDisc import mode "overwrite"  
[Bug][JDisc]                             Scan new and update from JDisc no import  
[Bug][JDisc]                             Wrong counting during JDisc import of objects via console  
[Bug][Lists]                             In the search filter within the object lists, the condition "and" is ignored  
[Bug][Lists]                             Sorting attribute "Host in cluster" causes error  
[Bug][Lists]                             Wrong sorting through setting "Display of grouped data"  
[Bug][Lists]                             Error when sorting attributes from categorie "JDisc custom attributes"  
[Bug][Lists]                             Error when using category "version" of category "operating system" in list view  
[Bug][Lists]                             Field "Headquarter" causes error in list view  
[Bug][Lists]                             Attributes of category "cluster memberships" can not be selected for display in object lists  
[Bug][Lists]                             Filtering in object list Relations still shows paging  
[Bug][Lists]                             Not all attributes of category "Memory" are availbable to be shown in lists  
[Bug][Lists]                             Archived and deleted database assignments being shown in object lists  
[Bug][Lists]                             Drag 'n' Drop not working with some browsers  
[Bug][Lists]                             Sort by VLAN ID incorrect  
[Bug][Lists]                             List view automatically switches to first page after exiting an object  
[Bug][Lists]                             Listen: Long column titles lead to unwanted breaks in filters  
[Bug][Categories]                        Status dropdown in category "Network - Port" not available  
[Bug][Categories]                        Category Access: SSH connections with more than one digit in one of the octets and user allocation are faulted  
[Bug][Categories]                        Sub category Connections, attribute Connected with shows error "General error: Object ID missing!", while no object was connected  
[Bug][Categories]                        Attribute "Conntected with" shows that a connection will be deleted, even if there's no concurrent connection available  
[Bug][Categories]                        Objects in categorie "relations" can not be clicked and do not deliver a quick info  
[Bug][Categories]                        Special characters in objects which are not assigned in a net cause the IP-list being not able to be loaded  
[Bug][Categories]                        Selecting version number in operating system assignment offers wrong versions  
[Bug][Categories]                        Cannot create an entry into the password category without username or title  
[Bug][Categories]                        Field "host in cluster" does not appear during object creation on overview page  
[Bug][Categories]                        Date fields can not be cleared  
[Bug][Categories]                        Saving of attribute "Parallel relations > objects" not possible  
[Bug][Categories]                        Duplicating objects with contact assignment, not containing a space in object title adds a space at the end of the name of the assigned object  
[Bug][Categories]                        Cabling of objects via connector overview creates a new cable instead of using the already selected cable  
[Bug][Categories]                        After archiving/deleting an object, the object-list view of application shows a wrong count of installations  
[Bug][Categories]                        Archived database schemes are still being displayed in the print view  
[Bug][Categories]                        Cannot reset height units of racks  
[Bug][Categories]                        Line breaks from multiple row text fields are being deleted in the print view  
[Bug][Categories]                        Adding a port to a Layer-2-Net resets tag information of every related port  
[Bug][Categories]                        Statistics of racks in a room do not include values of the rack itself  
[Bug][Documents]                         The category "Organization" => "Person" is missing in the property selector  
[Bug][Documents]                         Cannot create documents when one or multiple attribute assignments are missing  
[Bug][Console]                           Console: Entering false user credentials does not lead to an error message  
[Bug][Console]                           Commands: No message indicating faulty login  
[Bug][CSV]                               CSV import: Cannot set attributes Runtime and Cancellation period  
[Bug][CSV]                               CSV Import: Allocation partially shows language constants  
[Bug][CSV]                               CSV import creates objects with empty titles  
[Bug][CSV]                               Blank values do not overwrite current values  
[Bug][CSV]                               CSV Import cannot write information into attribute Assigned licence  
[Bug][CSV]                               CSV Import ignores default-template  
[Bug][CSV]                               Passwords are being reset when setting another attribute of the category 'Login' when importing via CSV  
[Bug][API]                               API: Modifying of used cable in port category without specifying a connector not possible  
[Bug][API]                               Changing of connected connector by the API causes a sql error  
[Bug][API]                               Modifying object image category over the api is not possible  
[Bug][API]                               Attribute 'On device' (Category 'Drive') cannot be written via API  
[Bug][API]                               Editing of file category not possible via the API  
[Bug][API]                               Unable to create or update connected cables via API  
[Bug][System settings]                   Editing list view for custom categories not possible  
[Bug][System settings]                   Hyperlinks in welcome message contains HTML  
[Bug][System settings]                   Expert settings display internal settings despite blacklist  
[Bug][Update]                            Wrong MySQL/MariaDB version number in update GUI  
[Bug][Update]                            Smarty Memcache check breaks i-doit  
[Bug][Code (internal)]                   Popups are being displayed in wrong size at wrong position  
[Bug][Code (internal)]                   Error message is thrown "default theme smarty cache" isn't writable  
[Bug][Code (internal)]                   Faulty check for free memory space in cases of unlimited (-1) memory limit in php.ini  
[Bug][Code (internal)]                   Duplicate: Category status-planning is duplicate  
[Bug][Validation]                        Global Category Operating System is missing in the category validation  
[Bug][Validation]                        Category validation does not work in category "General" when using templates  
[Bug][Print view]                        Information about licenses not correct in print view  
[Bug][CMDB-Explorer]                     CMDB Explorer: Export of SVGs only works in Firefox  
[Bug][OCS]                               OCS import causes empty database entries  
[Bug][List editing]                      List edit does not save entries in categorie 'Assignes workplace', if records already exist  
[Bug][List editing]                      Misspelling in the list edit  
[Bug][List editing]                      Object group assignments cannot be edited via the list edit  
[Bug][List editing]                      categories for "logical devices" not avilable in list edit  
[Bug][List editing]                      List Editing: Filtering in user-defined single-value categories results in an SQL error  
[Bug][CMDB]                              Cannot use line breaks in CSV files and GUI  
[Bug][Authorization system]              Rights are not used additively  
[Bug][Authorization system]              Rights are not fully accessible on the main page of an object  
[Bug][Object type configuration]         Attribute "model" is not used from default template  
[Bug][Logbook]                           Logbook: Category "Accounting" the attribute "Guarantee period" is displayed incorrectly  
[Bug][Licence settings]                  License Management: Can not delete an existing license  
[Bug][Relations]                         Relationships of clusters to cluster services are not correctly if state is archived/deleted  
[Bug][Notifications]                     Notifications: Incorrect URL in notifications via console  
[Bug][Notifications]                     Cannot choose templates in notifications  
[Bug][Systemtools]                       mod_rewrite check in system overview not correct when using https  
[Change][Code (internal)]                Archiving default accounts  
