# Changelog 1.18.1

[Improvement][Code (internal)]                    Allow Add-on Bundling<br>
[Bug][Code (internal)]                            Existing connections from the category Cabling cannot be reconnected if the entry is selected and edited via the checkbox.<br>
[Bug][Code (internal)]                            The HTML purifier is not turned off by the Sanitize input data setting<br>
[Bug][Code (internal)]                            Links are destroyed in the Report Manager<br>
[Bug][Code (internal)]                            Install i-doit 1.18 via install.sh<br>
[Bug][Code (internal)]                            Fix security issues in Admin-Center<br>
[Bug][Code (internal)]                            Fix security issues in Admin-Center<br>
[Bug][Code (internal)]                            German LC constant was forgotten<br>
[Bug][Code (internal)]                            Rackview - vertical slots move horizontal slots<br>
[Bug][Code (internal)]                            The buttons Check and Show can no longer be clicked in reports when using Chrome<br>
[Bug][LDAP]                                       Matching does not work if the field title is not present in the user<br>
[Bug][LDAP]                                       Due to the ldap-sync group memberships are not deleted when the person is archived<br>
[Bug][LDAP]                                       Archived contact assignment is restored by LDAP sync<br>
[Bug][LDAP]                                       Tenant change of ldpa users forces relogging<br>
[Bug][CSV Import]                                 CSV import should remember if a category has already been emptied for overwrite mode<br>
[Bug][CSV Import]                                 Empty values in csv import are not transfered when multivalue-category is set on "Row"<br>
[Bug][CSV Import]                                 Single row CSV-Imports clears the multi-value categories<br>
[Bug][Categories]                                 In the Services - Service Type category, the dialog field is referenced incorrectly<br>
[Bug][Categories]                                 Automatic inventory number has no effect, if a default template is used<br>
[Bug][Categories]                                 Search in object browser also finds objects from object types that are normally not available for assignment<br>
[Bug][Categories]                                 Show sub-categories of the specific categories in the overview page<br>
[Bug][Categories]                                 Focus in object browser not always on filter field<br>
[Bug][Categories]                                 Add "Cores" attribute to the CPU category list<br>
[Bug][Custom categories]                          Custom categories can not be saved<br>
[Bug][Custom categories]                          Custom categories are not saved<br>
[Bug][Custom categories]                          The default value of Yes/No fields is also displayed in the view mode.<br>
[Bug][Authorization system]                       Location and all physically assigned objects below is summarized<br>
[Bug][CMDB]                                       Location view does not open automatically for logical location objects<br>
[Bug][CMDB]                                       Remove archive and delete button for relationships<br>
[Bug][CMDB]                                       HTTP 500 Error when saving changes<br>
[Bug][CMDB]                                       Values in Dialog+ Multi-Value fields are not saved<br>
[Bug][CMDB]                                       Switch chassis names are not displayed in the rack view when slots are created<br>
[Bug][CMDB]                                       Search for "." + "String" finds all objects<br>
[Bug][Import]                                     CSV Import: Contact assignments are created for archived persons in the normal state<br>
[Bug][Mass editing]                               Mass change - license assignment/application is not set in software assignment<br>
[Bug][Mass editing]                               Mass change - Multi-Value categories with add/remove  are duplicated<br>
[Bug][JDisc]                                      JDisc Import creates empty logbook entries<br>
[Bug][JDisc]                                      The search index is not re-indexed after the JDisc import<br>
[Bug][JDisc]                                      JDisc custom attributes Running config, Show Version and Startup config create multiple entries<br>
[Bug][List editing]                               List edit - Incorrect display when using tab<br>
[Bug][List editing]                               Listedit: Dialogfields are not always reloaded when there is a dependency to an objectbrowser<br>
[Bug][Report-Manager]                             Missing lines when exporting a report in CSV format<br>
[Bug][Report-Manager]                             Regex in report manager causes errors and ceates wrong sql query<br>
[Bug][Report-Manager]                             Report Manager - Objekt types with the same name are only shown once<br>
[Bug][Report-Manager]                             Report Manager - Wrong SQL query for attribute contact and operating system<br>
[Bug][Report-Manager]                             "Patch level" not available for selection in report manager<br>
[Bug][Lists]                                      Error message is displayed in the object list if the "Role (Person group memberships)" attribute is added<br>
[Bug][Lists]                                      In the column Operating system > Version is not displayed with patch level in the list view of objects<br>
[Bug][Lists]                                      At Contracts the object ID is displayed behind objects in the list view in the Assigned objects column<br>
[Bug][Lists]                                      False display in "configure listview" for multi value categories<br>
[Bug][Object type configuration]                  Automatic inventory number (counter) does not work correctly<br>
[Bug][OCS]                                        OCS-Import creates invalid layer-3-net<br>
[Bug][QR-Codes]                                   QR-Code Layout 3 does not work<br>
[Bug][Notifications]                              Notifications of license expirations are not shown correctly, when template is changed<br>
[Bug][CMDB settings]                              Object browser files > Assigned objects not available<br>
[Bug][Console-base Installation/Update/Licensing] Licensed add-ons are displayed as unlicensed via the Console.php command addon-list<br>
[Bug][Update]                                     Ports cannot be created due to duplicate foreign key<br>
