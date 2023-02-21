# Changelog 1.17.1

[Improvements][Categories]                        Always show horizontal scroll bar in the "Cabinets" category  
[Bug][JDisc]                                      JDisc: Import aborts with an error message when importing clusters  
[Bug][JDisc]                                      Category "JDisc custom attributes" not available on overview page  
[Bug][JDisc]                                      JDisc: If a JDisc profile is saved before it is completely loaded, these unloaded settings will be lost.  
[Bug][List editing]                               List editing: host address>net zone cannot be assigned  
[Bug][List editing]                               If an attribute of the category Drive is edited via list editing, the field "On device" is cleared.  
[Bug][List editing]                               Assigning a port in category host address not possible via list edit  
[Bug][List editing]                               In the list editing of the category entries of Local Mass Storage > Device, the Controller and Hardware RAID Group field cannot be set for all entries  
[Bug][Lists]                                      Error when using attributes from category "software assignment" in list view  
[Bug][Lists]                                      Attributes Target schema and Used databases for list view of Application -> Installations and Software assignment is missing  
[Bug][Lists]                                      Surname cannot be used for default sorting of person objects  
[Bug][Lists]                                      Organization > Master data: Website attribute is not a link object in the object list  
[Bug][Lists]                                      Filtering for description in object lists does not work with special characters  
[Bug][Lists]                                      Filtering on attributes of category DialogYesNoProperty generates SQL error and list view does not work anymore  
[Bug][Lists]                                      Attribute "Cabling>Assigned to connector" does not show all connections in the object list  
[Bug][Lists]                                      Workplace devices (object) assigned to Workplace is not displayed in the list view of Workplaces  
[Bug][Categories]                                 Attributes changed on the overview page are not saved (excl. General category)  
[Bug][Categories]                                 In the category License Assignment > License Keys of License Objects no objects are displayed  
[Bug][Categories]                                 The description is not saved in the source with despite positive message  
[Bug][Categories]                                 Deliver VRRP cluster with the category host address  
[Bug][Categories]                                 Missing focus in object browser  
[Bug][Categories]                                 Object ID of an organization assigned as a contact is displayed in the 'Assigned organization' field  
[Bug][Console-base Installation/Update/Licensing] Add a time variable for the command AnonymizePersonLastChange to Console.php  
[Bug][Logbook]                                    No logbook entries by creating an object via the Object browser  
[Bug][Logbook]                                    Uploading or deleting images in the "Images" category is not recorded in the logbook  
[Bug][Code (internal)]                            The buttons Check and Show can no longer be clicked in reports when using Chrome  
[Bug][Code (internal)]                            Object browser: When creating an object the same object type is not automatically preselected  
[Bug][CSV Import]                                 CSV Import: Import of operating system versions (and patchlevel) via the operating system category  
[Bug][CSV Import]                                 Importing a CMDB status also clears the value, even if empty values should be ignored  
[Bug][CSV Import]                                 CSV-Import: Attribute Net > Standardgateway is missing  
[Bug][CSV Import]                                 CSV import: attribute Host address > Default gateway for the network is missing  
[Bug][CSV Import]                                 CSV import creates wrong connections when objects have identical port names  
[Bug][CSV Import]                                 CSV Import: Dialog entries are created as unfinished  
[Bug][Report-Manager]                             False results in the list of report results  
[Bug][Report-Manager]                             Report Manager: Query for relationships always checks only the master object  
[Bug][Report-Manager]                             Report setting "Show objects with empty assignments?" creates incorrect output  
[Bug][Report-Manager]                             Report Manager: If in the condition an attribute with Like %...% is filtered which has a "\" in the name, no result is displayed.  
[Bug][Report-Manager]                             URL from the Access category is assembled incorrectly in the report  
[Bug][Custom categories]                          If fields are moved when editing user-defined categories, they are displayed incorrectly  
[Bug][Custom categories]                          Special chars in custom category names can break the navigation  
[Bug][Custom categories]                          Javascript fields in custom categories is sanitized and becomes unusable  
[Bug][API]                                        Reports displayed via the API do not show consistent date formats  
[Bug][Events]                                     Disconnecting from a signal does not work  
[Bug][System settings]                            The setting "Display style for object browser objects" > "As list" leads to incorrect highlighting  
[Bug][CMDB]                                       Calculation of free IP addresses for super networks calculates incorrectly  
[Bug][Validation]                                 Validation for integer input is limited by PHP 32bit versions  
[Bug][LDAP]                                       Special characters in LDAP filters are not handled without errors  
[Bug][Import]                                     CSV import via Console empties user-defined categories  
[Bug][Import]                                     Servers or clients imported via Active Directory computers have assigned themselves as operating system  
