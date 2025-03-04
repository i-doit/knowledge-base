---
search:
  exclude: true
---
# Changelog 1.15.2
<!-- cSpell:disable -->
<!-- markdownlint-disable MD052 -->
[Improvement][Authorization system] Creation of objects of certain object types is possible despite missing authorization<br>
[Improvement][OCS] Compatibility with new OCS versions<br>
[Bug][User settings] Validation for login passwords<br>
[Bug][Notifications] Notifications are not sent to members of a group of people<br>
[Bug][Notifications] Notifications do not send e-mails to groups, even if they match the role assignment<br>
[Bug][Notifications] Notification: Expiration of a certificate period - Despite threshold value, certificates outside the threshold value are also displayed<br>
[Bug][Notifications] Links in notifications are created incorrectly<br>
[Bug][Notifications] Notifications are sent, even if the observed objects do not match the conditions<br>
[Bug][Relations] The field "Layer 2 Net Assignment" within the "Net" category of "Layer-3 Net" objects does not create a relation to the "Layer 2 net" object<br>
[Bug][Lists] Linking manufacturer and model in object list filters<br>
[Bug][Lists] Sorting yes/no fields in object lists generates SQL errors<br>
[Bug][Export] CMDB export via XML cannot be imported into i-doit<br>
[Bug][Code (internal)] ISMS: Report with attributes "Likelihood" and "Likelihood after treatment" always shows "Likelihood"<br>
[Bug][Code (internal)] "Loose" cables cannot be connected to existing connectors<br>
[Bug][Code (internal)] The Configuration object type is not saved<br>
[Bug][Code (internal)] Selection of linked attributes is not loaded/opened when an existing placeholder is edited<br>
[Bug][Code (internal)] Sorting in the list browser of Dialog-Plus fields sorts case sensitive<br>
[Bug][Code (internal)] Tooltip is always created at the bottom right of the object during mouse-over<br>
[Bug][Code (internal)] Linked database in the database category does not refer to the database<br>
[Bug][Categories] Selection for DBMS of category "Instance / Oracle database" shows archived/deleted entries<br>
[Bug][Categories] Information about Achievement certificate is reset when editing<br>
[Bug][Categories] Softwareversion of DBMS not included in selection<br>
[Bug][Categories] Automatic update of status and CMDB-status of outdated contracts<br>
[Bug][Categories] The list view of the category Network > Port overview shows VLAN Layer-2 and Layer-3 networks not line-separated<br>
[Bug][Categories] Backward category "Assigned subscriptions" shows no entries<br>
[Bug][Categories] Used databases for software assignments are not displayed in the software installation<br>
[Bug][Categories] Category "Workplace components" shows archived and deleted items<br>
[Bug][Report-Manager] Some attributes cause a lot of empty pages in report results<br>
[Bug][Report-Manager] User without rights to edit all reports of one category can not edit a report from list<br>
[Bug][Report-Manager] Rework all the attributes of the subcategory "Databases" from the folder "Databases" for the Report Manager.<br>
[Bug][Report-Manager] Report Manager: PDF export ASCII diagram is not displayed correctly<br>
[Bug][Report-Manager] Report Manager: Condition Location:Assembly > Vertical cannot be selected<br>
[Bug][Report-Manager] Reports: Reports with output with location:mounting information ignores the value "Vertical<br>
[Bug][Import] Database Error in OCS Import<br>
[Bug][Import] CSV Import: Operating system and version are not assigned<br>
[Bug][Import] Assign CSV import attributes as linked objects, with automatic object type selection does not work correctly<br>
[Bug][JDisc] Content from category "location" is overwritten/deleted when performing a JDisc import<br>
[Bug][JDisc] JDISC: Location of imported objects in enclosures with unpositioned objects will be removed<br>
[Bug][List editing] Field for notice period value of contracts missing in list edit<br>
[Bug][Custom categories] Content of custom multi value categories are not shown on overview page<br>
[Bug][Logbook] No logbook entry is created for the Connected Object when a connection is created via the category Network > Port<br>
[Bug][Logbook] The logbook contains the ID instead of the object name of a location after change<br>
[Bug][H-Inventory] Error when importing h-inventory XML-files<br>
[Bug][CSV Import] Memory usage for CSV import<br>
[Bug][CSV Import] CSV Import: Category Databases > Database Attributes Assigned DBMS missing<br>
[Bug][CSV Import] CSV Import: Attribute missing Import Server > DBMS > DBMS<br>
[Bug][CSV Import] CSV Import: Object type> Database schema specific category > Database schema is not available for import<br>
[Bug][Installation] Installation script does not use given database user for configuration<br>
[Bug][Installation] Operating system check from the i-doit installation marks unsupported operating systems as OK<br>
[Bug][Search] Search for host address -> Alias shows the language constant of the alias<br>
