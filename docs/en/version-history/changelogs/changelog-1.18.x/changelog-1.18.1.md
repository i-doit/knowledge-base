# Changelog 1.18.1

[Improvement][Code (internal)]                    Allow Add-on Bundling  
[Bug][Code (internal)]                            Existing connections from the category Cabling cannot be reconnected if the entry is selected and edited via the checkbox.  
[Bug][Code (internal)]                            The HTML purifier is not turned off by the Sanitize input data setting  
[Bug][Code (internal)]                            Links are destroyed in the Report Manager  
[Bug][Code (internal)]                            Install i-doit 1.18 via install.sh  
[Bug][Code (internal)]                            Fix security issues in Admin-Center  
[Bug][Code (internal)]                            Fix security issues in Admin-Center  
[Bug][Code (internal)]                            German LC constant was forgotten  
[Bug][Code (internal)]                            Rackview - vertical slots move horizontal slots  
[Bug][Code (internal)]                            The buttons Check and Show can no longer be clicked in reports when using Chrome  
[Bug][LDAP]                                       Matching does not work if the field title is not present in the user  
[Bug][LDAP]                                       Due to the ldap-sync group memberships are not deleted when the person is archived  
[Bug][LDAP]                                       Archived contact assignment is restored by LDAP sync  
[Bug][LDAP]                                       Tenant change of ldpa users forces relogging  
[Bug][CSV Import]                                 CSV import should remember if a category has already been emptied for overwrite mode  
[Bug][CSV Import]                                 Empty values in csv import are not transfered when multivalue-category is set on "Row"  
[Bug][CSV Import]                                 Single row CSV-Imports clears the multi-value categories  
[Bug][Categories]                                 In the Services - Service Type category, the dialog field is referenced incorrectly  
[Bug][Categories]                                 Automatic inventory number has no effect, if a default template is used  
[Bug][Categories]                                 Search in object browser also finds objects from object types that are normally not available for assignment  
[Bug][Categories]                                 Show sub-categories of the specific categories in the overview page  
[Bug][Categories]                                 Focus in object browser not always on filter field  
[Bug][Categories]                                 Add "Cores" attribute to the CPU category list  
[Bug][Custom categories]                          Custom categories can not be saved  
[Bug][Custom categories]                          Custom categories are not saved  
[Bug][Custom categories]                          The default value of Yes/No fields is also displayed in the view mode.  
[Bug][Authorization system]                       Location and all physically assigned objects below is summarized  
[Bug][CMDB]                                       Location view does not open automatically for logical location objects  
[Bug][CMDB]                                       Remove archive and delete button for relationships  
[Bug][CMDB]                                       HTTP 500 Error when saving changes  
[Bug][CMDB]                                       Values in Dialog+ Multi-Value fields are not saved  
[Bug][CMDB]                                       Switch chassis names are not displayed in the rack view when slots are created  
[Bug][CMDB]                                       Search for "." + "String" finds all objects  
[Bug][Import]                                     CSV Import: Contact assignments are created for archived persons in the normal state  
[Bug][Mass editing]                               Mass change - license assignment/application is not set in software assignment  
[Bug][Mass editing]                               Mass change - Multi-Value categories with add/remove  are duplicated  
[Bug][JDisc]                                      JDisc Import creates empty logbook entries  
[Bug][JDisc]                                      The search index is not re-indexed after the JDisc import  
[Bug][JDisc]                                      JDisc custom attributes Running config, Show Version and Startup config create multiple entries  
[Bug][List editing]                               List edit - Incorrect display when using tab  
[Bug][List editing]                               Listedit: Dialogfields are not always reloaded when there is a dependency to an objectbrowser  
[Bug][Report-Manager]                             Missing lines when exporting a report in CSV format  
[Bug][Report-Manager]                             Regex in report manager causes errors and ceates wrong sql query  
[Bug][Report-Manager]                             Report Manager - Objekt types with the same name are only shown once  
[Bug][Report-Manager]                             Report Manager - Wrong SQL query for attribute contact and operating system  
[Bug][Report-Manager]                             "Patch level" not available for selection in report manager  
[Bug][Lists]                                      Error message is displayed in the object list if the "Role (Person group memberships)" attribute is added  
[Bug][Lists]                                      In the column Operating system > Version is not displayed with patch level in the list view of objects  
[Bug][Lists]                                      At Contracts the object ID is displayed behind objects in the list view in the Assigned objects column  
[Bug][Lists]                                      False display in "configure listview" for multi value categories  
[Bug][Object type configuration]                  Automatic inventory number (counter) does not work correctly  
[Bug][OCS]                                        OCS-Import creates invalid layer-3-net  
[Bug][QR-Codes]                                   QR-Code Layout 3 does not work  
[Bug][Notifications]                              Notifications of license expirations are not shown correctly, when template is changed  
[Bug][CMDB settings]                              Object browser files > Assigned objects not available  
[Bug][Console-base Installation/Update/Licensing] Licensed add-ons are displayed as unlicensed via the Console.php command addon-list  
[Bug][Update]                                     Ports cannot be created due to duplicate foreign key  