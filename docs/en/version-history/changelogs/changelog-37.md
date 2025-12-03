---
search:
  exclude: true
---

# Changelog 37
<!-- cSpell:disable -->

[Task][Code (Internal)]                   Allow installation of i-doit with MySQL 8.4<br>
[Task][Code (Internal)]                   Implement 'breadcrumb' service for add-ons<br>
[Task][Usage of self-signed certificates] Use self-signed certificate in TTS communication<br>
[Improvement][Custom categories]          Enable the use of icons for custom categories<br>
[Improvement][Logbook]                    Add additional "category" logbook filter (contributed by Istvan Bosnyak, C24)<br>
[Improvement][CMDB]                       Update CMDB Processor DTOs to contain more props and include logical types<br>
[Bug][Report-Manager]                     Contract assignment details are not displayed at a report<br>
[Bug][Report-Manager]                     Report views should only be displayed if the necessary rights are provided<br>
[Bug][Report-Manager]                     Editing existing Reports results in Error<br>
[Bug][Report-Manager]                     Allow the user to export TXT and CSV files in Report Manager<br>
[Bug][Report-Manager]                     "Reordering the joins has been triggered too often" error message<br>
[Bug][Report-Manager]                     Prevent unnecessary HTML Purifier calls<br>
[Bug][Report-Manager]                     Cache dynamic report callbacks<br>
[Bug][CMDB-Explorer]                      Missing related objects when exporting CMDB Explorer via GraphML<br>
[Bug][Code (Internal)]                    Net-zone is not available at host address category when IPv6 is selected<br>
[Bug][Code (Internal)]                    Prevent license issues and long login times when changing an online instance to offline<br>
[Bug][Code (Internal)]                    URL is wrongly created when opening location view from Add-on and Subscription Center<br>
[Bug][Code (Internal)]                    Do not use hardcoded language IDs<br>
[Bug][Code (Internal)]                    Styling from the WYSIWYG editor is not applied<br>
[Bug][Code (Internal)]                    Active navigation item wrongly changes to "Infrastructure" in add-on context<br>
[Bug][System settings]                    Fix clear presentation of SMTP password in configuration<br>
[Bug][Logbook]                            Adding a object to a rack via locally assigned objects does not create a logbook entry for rack<br>
[Bug][Logbook]                            Create a Logbook Entry for Layer 3 Nets when DNS Domain changes<br>
[Bug][Logbook]                            Fix errors that occur when archiving large logbooks<br>
[Bug][Custom categories]                  Creating "Dialog+ (Multiple selection)" field in custom categories auto-rewrites the identifier when it contains (or defaults to) DB-reserved keywords (e.g., SELECT, INSERT, REPLACE, â€¦)<br>
[Bug][Custom categories]                  Show values instead of IDs for attribute fields of type checkbox in document<br>
[Bug][Custom categories]                  Deleting objects assigned to custom category object browser fields causes error<br>
[Bug][API]                                Create a single-value category with API 'cmdb.category.save' returns wrong entry ID<br>
[Bug][CMDB]                               Opening DNS domain dialog causes field width to reduce to 0px<br>
[Bug][CMDB]                               Prevent unintended i-doit category updates caused by incomplete POST requests<br>
[Bug][CMDB]                               In category "contract assignment" attributes "assigned contract" and "achievement certificate" are missing "for" property and attribute constants<br>
[Bug][CMDB]                               Set "sort" fields with proper values in CMDB Processors<br>
[Bug][Permission system]                  Rights overview no longer displays effective permissions for overlapping rights<br>
[Bug][Import]                             XML file for H-Inventory import cant be found<br>
[Bug][Relations]                          Re-new relation objects causes a switch up for master-slave relationships between object groups and objects<br>
[Bug][JDisc]                              JDisc import not possible because of duplicated JDisc mapping<br>
[Bug][JDisc]                              Importing objects with ports connected to other objects causes jdisc import to stop<br>
[Bug][JDisc]                              Set values for custom categories when using JDisc Import with the default template<br>
[Bug][JDisc]                              Do not throw flows error when importing<br>
[Bug][Validation]                         Validation is not working for "Object Relation (Several Objects)" fields of a custom category<br>
[Bug][Validation]                         Do not validate "position in rack" when not positioned in rack<br>
[Bug][CSV Import]                         Duplicate category creation after Multi Value CSV Import<br>
[Bug][CSV Import]                         Do not create unnecessary relationships when importing person group assignments via csv<br>
[Bug][CSV Import]                         Find the object when using Attach object of type = Automatic in CSV Import<br>
[Bug][Console]                            System:tenant-export command interprets special characters in database password as commands<br>
[Bug][Lists]                              Filter for cable connections does not work<br>
[Bug][CMDB settings]                      Reference Error when browsing Settings for Tenant-Name<br>
[Bug][Logging]                            Do not log Permission errors when checking right for a Person<br>
[Bug][Categories]                         Archived relations are not displayed in the â€œAssigned objectsâ€œ list.<br>
[Bug][Categories]                         Virtual machine category is displayed twice<br>
[Bug][Notifications]                      Prevent uncaught TypeError when using a Report based notification<br>
<!-- cSpell:enable -->
