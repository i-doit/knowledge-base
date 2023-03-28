# Changelog 1.17.1

[Improvements][Categories]                        Always show horizontal scroll bar in the "Cabinets" category<br>
[Bug][JDisc]                                      JDisc: Import aborts with an error message when importing clusters<br>
[Bug][JDisc]                                      Category "JDisc custom attributes" not available on overview page<br>
[Bug][JDisc]                                      JDisc: If a JDisc profile is saved before it is completely loaded, these unloaded settings will be lost.<br>
[Bug][List editing]                               List editing: host address>net zone cannot be assigned<br>
[Bug][List editing]                               If an attribute of the category Drive is edited via list editing, the field "On device" is cleared.<br>
[Bug][List editing]                               Assigning a port in category host address not possible via list edit<br>
[Bug][List editing]                               In the list editing of the category entries of Local Mass Storage > Device, the Controller and Hardware RAID Group field cannot be set for all entries<br>
[Bug][Lists]                                      Error when using attributes from category "software assignment" in list view<br>
[Bug][Lists]                                      Attributes Target schema and Used databases for list view of Application -> Installations and Software assignment is missing<br>
[Bug][Lists]                                      Surname cannot be used for default sorting of person objects<br>
[Bug][Lists]                                      Organization > Master data: Website attribute is not a link object in the object list<br>
[Bug][Lists]                                      Filtering for description in object lists does not work with special characters<br>
[Bug][Lists]                                      Filtering on attributes of category DialogYesNoProperty generates SQL error and list view does not work anymore<br>
[Bug][Lists]                                      Attribute "Cabling>Assigned to connector" does not show all connections in the object list<br>
[Bug][Lists]                                      Workplace devices (object) assigned to Workplace is not displayed in the list view of Workplaces<br>
[Bug][Categories]                                 Attributes changed on the overview page are not saved (excl. General category)<br>
[Bug][Categories]                                 In the category License Assignment > License Keys of License Objects no objects are displayed<br>
[Bug][Categories]                                 The description is not saved in the source with despite positive message<br>
[Bug][Categories]                                 Deliver VRRP cluster with the category host address<br>
[Bug][Categories]                                 Missing focus in object browser<br>
[Bug][Categories]                                 Object ID of an organization assigned as a contact is displayed in the 'Assigned organization' field<br>
[Bug][Console-base Installation/Update/Licensing] Add a time variable for the command AnonymizePersonLastChange to Console.php<br>
[Bug][Logbook]                                    No logbook entries by creating an object via the Object browser<br>
[Bug][Logbook]                                    Uploading or deleting images in the "Images" category is not recorded in the logbook<br>
[Bug][Code (internal)]                            The buttons Check and Show can no longer be clicked in reports when using Chrome<br>
[Bug][Code (internal)]                            Object browser: When creating an object the same object type is not automatically preselected<br>
[Bug][CSV Import]                                 CSV Import: Import of operating system versions (and patchlevel) via the operating system category<br>
[Bug][CSV Import]                                 Importing a CMDB status also clears the value, even if empty values should be ignored<br>
[Bug][CSV Import]                                 CSV-Import: Attribute Net > Standardgateway is missing<br>
[Bug][CSV Import]                                 CSV import: attribute Host address > Default gateway for the network is missing<br>
[Bug][CSV Import]                                 CSV import creates wrong connections when objects have identical port names<br>
[Bug][CSV Import]                                 CSV Import: Dialog entries are created as unfinished<br>
[Bug][Report-Manager]                             False results in the list of report results<br>
[Bug][Report-Manager]                             Report Manager: Query for relationships always checks only the master object<br>
[Bug][Report-Manager]                             Report setting "Show objects with empty assignments?" creates incorrect output<br>
[Bug][Report-Manager]                             Report Manager: If in the condition an attribute with Like %...% is filtered which has a "\" in the name, no result is displayed.<br>
[Bug][Report-Manager]                             URL from the Access category is assembled incorrectly in the report<br>
[Bug][Custom categories]                          If fields are moved when editing user-defined categories, they are displayed incorrectly<br>
[Bug][Custom categories]                          Special chars in custom category names can break the navigation<br>
[Bug][Custom categories]                          Javascript fields in custom categories is sanitized and becomes unusable<br>
[Bug][API]                                        Reports displayed via the API do not show consistent date formats<br>
[Bug][Events]                                     Disconnecting from a signal does not work<br>
[Bug][System settings]                            The setting "Display style for object browser objects" > "As list" leads to incorrect highlighting<br>
[Bug][CMDB]                                       Calculation of free IP addresses for super networks calculates incorrectly<br>
[Bug][Validation]                                 Validation for integer input is limited by PHP 32bit versions<br>
[Bug][LDAP]                                       Special characters in LDAP filters are not handled without errors<br>
[Bug][Import]                                     CSV import via Console empties user-defined categories<br>
[Bug][Import]                                     Servers or clients imported via Active Directory computers have assigned themselves as operating system<br>
