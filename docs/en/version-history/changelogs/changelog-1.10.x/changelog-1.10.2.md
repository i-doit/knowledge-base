[Improvement][Systemtools]               Object counter in system overview for current tenant 
[Improvement][Report-Manager]            Addition of the attributes CPU cores and sockets in the report manager 
[Improvement][API]                       API: Read, create, update and delete monitoring instances 
[Improvement][API]                       Create, read, update and delete static host tags via API 
[Bug][Custom categories]                 Constants of custom categories receive hardcoded prefix 
[Bug][Custom categories]                 Different rendering of HTML editor fields in view and edit mode 
[Bug][Custom categories]                 Dialog + field can only be saved once in the dialog admin 
[Bug][Custom categories]                 Wrong cleanup of HTML field in custom categories 
[Bug][Custom categories]                 When duplicating objects, all empty Dialog + fields within all custom categories a value were set 
[Bug][Categories]                        The "All tickets" category now has an intuitive link to the referenced ticket 
[Bug][Categories]                        Rack statistics do not show all available results 
[Bug][Categories]                        Content of categorie extensions for personens are deleted, when categorie "Master Data" is edited 
[Bug][Categories]                        Deleting location assignments when editing categorie with insufficient permissions 
[Bug][Categories]                        No clickable relation to the database instance in the database schema 
[Bug][Categories]                        (Source) IP address assignment incorrect 
[Bug][Categories]                        Unwanted default values 
[Bug][Categories]                        Wrong RAID information when duplicating 
[Bug][Categories]                        Category crypto card stays gray despite filled attributes 
[Bug][Categories]                        Connecting a VM with a cluster is not possible without host selection 
[Bug][Categories]                        Check the inputs of attributes volts, watts and ampere 
[Bug][Categories]                        Ampere displays many decimal places 
[Bug][Categories]                        Length of cables is not duplicated 
[Bug][Categories]                        Cannot save half hours in reaction time 
[Bug][Categories]                        Type of connector is not duplicated 
[Bug][Categories]                        Removing linked database instance under some circumstances not possible 
[Bug][CMDB]                              Database instance shows archived and deleted schemas 
[Bug][CMDB]                              Not possible to put a zero in dialog admin 
[Bug][CMDB]                              Missing translation at tenant selection 
[Bug][CMDB]                              Login View of i-doit Wrong After too early Timeout 
[Bug][Lists]                             Cannot sort after category or purpose in lists 
[Bug][Lists]                             Cannot show database instances in the list of database schemas 
[Bug][Lists]                             Cannot show database schemas in the list of database instances 
[Bug][Lists]                             Sorting by tags in object lists not possible 
[Bug][Lists]                             Object lists do not save the default filter 
[Bug][Lists]                             Not possible to assign the attribute "Assignes devices (Logical devices (LDEV server))" to lists 
[Bug][Lists]                             Filtering attribute "tags" does not work 
[Bug][Lists]                             Incorrect sorting of costs in the list view of contracts 
[Bug][Lists]                             Allocated IP addresses are not being sorted correctly 
[Bug][OCS]                               Import of CPU cores from OCS Inventory 
[Bug][OCS]                               OCS import delivers titles with curly braces instead of actual names 
[Bug][OCS]                               OCS: IP-Adress/Subnet is not updated during import 
[Bug][API]                               API: API creates unused cable while creating a new physical network port 
[Bug][API]                               API: Headers not RFC 2616 compliant 
[Bug][API]                               Missing logbook entries after creation of content via the API 
[Bug][API]                               API responded with wrong session ID after successful login 
[Bug][API]                               API: Enter IP addresses via API results in errors when a validation of category "host address" is set 
[Bug][API]                               API: cmdb.category.create does not create a value in a custom dialog+ field (multiple) 
[Bug][API]                               API: Batch request with cmdb.category.create or .update throws SQL error for category model 
[Bug][QR-Codes]                          QR-Code: Font is always centered 
[Bug][Templates]                         Default template will not be processed if overview page is active 
[Bug][Templates]                         Predefined templates can be cleaned up, but appear again 
[Bug][Templates]                         Default template is not used during object creation 
[Bug][Notifications]                     Notifications also use archived and deleted contacts 
[Bug][Notifications]                     Misspelling in the configuration of notifications of unchanged objects 
[Bug][Notifications]                     License expiration notifications apply only to the first license key 
[Bug][Relations]                         Software: Number of installations does not take into account the condition 
[Bug][Relations]                         Archived relationship "linked cards" persists in the SIM card 
[Bug][Logbook]                           Logbook: Changes in the category "contract assignment" on the attribute "Leistungsschein" are not written 
[Bug][Logbook]                           Editing the general category on the overview page cretaes logbook entries for the location category 
[Bug][Logbook]                           Editing category general does not create logbook entries 
[Bug][Logbook]                           Wrong information in logbook for categories with default values 
[Bug][Logbook]                           Wrong logbook content for locations 
[Bug][CMDB-Explorer]                     No conclusive sorting of objects in the CMDB Explorer 
[Bug][CMDB-Explorer]                     CMDB Explorer - Missing attributes on custom profiles 
[Bug][Report-Manager]                    Report Manager: Category "Password" is missing 
[Bug][Report-Manager]                    "Condition" and "status" are being mixed up sometimes 
[Bug][Report-Manager]                    Attribute "standard gateway for net" can not be used in report manager 
[Bug][Report-Manager]                    DB Error Message Appears Executing A Report With More Than One Condition 
[Bug][Report-Manager]                    Option to hide objects with empty relations does not work in report manager for custom categories 
[Bug][Report-Manager]                    Categorie "Virtual devices" is not available in report manager 
[Bug][Report-Manager]                    Report Manager: Purge button is displayed despite missing rights 
[Bug][Objects]                           Print Preview gives passwords in the "Password" category encrypted 
[Bug][Objects]                           Deleting system users possible 
[Bug][Objects]                           Object type is not displayed in the Browser object of the Service Assignment category 
[Bug][Objects]                           Mouseover in list view disappears from the visible area 
[Bug][Objects]                           Archiving within an object is not possible 
[Bug][JDisc]                             Manually documented locations are overwritten when importing sysLocation via JDisc 
[Bug][JDisc]                             Incorrect import of chassis view via JDisc 
[Bug][JDisc]                             Import Filter JDisc for Hostadresses 
[Bug][Documents]                         Wrong format for date contents 
[Bug][List editing]                      Entering money values only possible with dots instead of commas 
[Bug][List editing]                      List Editing: Deleting e-mail addresses leads to incorrect entries 
[Bug][List editing]                      Multi value categories can not be edited via list edit 
[Bug][List editing]                      List edit: Validation of attributes that are not being displayed 
[Bug][List editing]                      "Description" is being validated in List Edit 
[Bug][List editing]                      Inkonsistancy Behaviour Of DialoguePlus DropDowns Under List Edit 
[Bug][CSV]                               Attribute "Patchlevel" is not filled via CSV import 
[Bug][CSV]                               Special assignment of room numbers does not work in the CSV import 
[Bug][CSV]                               CSV import: Room number is not recognized / found 
[Bug][CSV]                               Import of CMDB status with CSV import by using the console not possible 
[Bug][Check_MK]                          Check_MK transfer script fails, because no 'idoit_hosttags.mk' file is being created 
[Bug][Check_MK]                          Dynamic Check_MK host tags can not be deleted 
[Bug][Monitoring]                        FQDN not correct in monitoring 
[Bug][CMDB settings]                     Multi select in list of object type configuration without any function 
[Bug][CMDB settings]                     Wrong selection in objecttype configuration when selecting more than one checkbox 
[Bug][CMDB settings]                     Missing request for change comment 
[Bug][Update]                            Wrong translation of "tenant" (mandator) during i-doit update process 
[Bug][Admincenter]                       Error Tracker slows down the system massively 
[Bug][LDAP]                              Console: User, Password on Report via CLI Console are not transferred 
[Bug][LDAP]                              Open LDAP Sync: UID / login name is not accepted 
[Bug][Console]                           Console: Output of archived user in ldap-sync failed 
[Bug][System settings]                   System setting "Display limit of host addresses" does not work in lists 
[Bug][System settings]                   SSO: Deep links always lead to the dashboard 
[Bug][Import]                            Error of i-doit controller being deprecated when importing XML files or content from OCS 
[Bug][Systemtools]                       Online Repositories via HTTPS 
[Bug][Validation]                        Automaticly generated inventory number deactivates validation of this attribute 
[Bug][Search]                            Not able to switch between search modes when specific are in the result list 
[Change][CMDB]                           Unifying connectors in the quickinfo