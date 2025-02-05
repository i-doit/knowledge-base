# Changelog 1.15.1

[Improvement][LDAP] If a user logs in via LDAP the Auth Cache should also be cleared  
[Improvement][Export] XML-Export: extend selection of custom categories for the export  
[Improvement][OCS] OCS-Import Recalculate object type of CIs based on tag configuration  
[Bug][JDisc] Filtering by host address not possible for JDisc import with IPv6  
[Bug][JDisc] The correct Layer 3 net is not assigned during JDisc import.  
[Bug][JDisc] The time/date at "Last updated" in the category "Custom Identifier" should only be updated by the JDISC import  
[Bug][Systemtools] XAMPP: System Tools > Cache / Database the mysqldump.exe path is not found  
[Bug][Report-Manager] Error when using variable reports in custom categories  
[Bug][Report-Manager] Attribute Assigned SIM Cards (Assigned SIM cards) cannot reference objects  
[Bug][Report-Manager] Report: For the category files the attribute assigned objects is missing  
[Bug][Report-Manager] The IS NULL condition for location > location is missing from the report  
[Bug][Report-Manager] The Report Manager does not display all objects with empty operating systems  
[Bug][Report-Manager] Report Manager: Attribute "Connected to port (Network -> Logical ports)" generates SQL error  
[Bug][Report-Manager] Reports are no longer displayed after moving to a new instance  
[Bug][Report-Manager] Only links using http/https are generated as hyperlink in reports  
[Bug][Report-Manager] The text for the output is available under the item Advanced Options  
[Bug][Logbook] The logbook cannot be archived to a remote database  
[Bug][Logbook] When purging assignments, no object information is created in back categories  
[Bug][Logbook] The log book does not store the object name  
[Bug][Logbook] Show more details while the logbook is archiving  
[Bug][CSV Import] Password of category passwords can not be imported via CSV import  
[Bug][CSV Import] Error during import of storage information (device) - Assignment of manufacturers -> model  
[Bug][CSV Import] Error when importing information into custom categories via CSV import  
[Bug][CSV Import] Changing global object type in csv import clears the whole mapping  
[Bug][LDAP] Open LDAP / Novell Directory Service sync does not work  
[Bug][Categories] The category Racks in rooms cannot show racks if there are switch/blade chassis with slots  
[Bug][Categories] In the object list Application the field Title of the specific category Applications>Variant is missing  
[Bug][Categories] The output of a yes/no field with nothing selected "-" is not correct  
[Bug][Categories] Archived installations are displayed in the Application > Installation category  
[Bug][Categories] The property “category” from the category “Logbook” is not selectable in the condition and selection while creating a new report  
[Bug][Categories] Content from the category "Passwords" is not indexed during the search  
[Bug][Categories] In the list view of Layer-3 networks, IP addresses of archived objects under assigned addresses are counted  
[Bug][Categories] Sorting of ports in selection within category "hostaddress" not alphabetical  
[Bug][Categories] Linking in category "logical ports" not working  
[Bug][Code (internal)] Retrieving the logbook is extremely slow using sql_calc_found_rows when there are many records  
[Bug][Code (internal)] Some links lead to the logout of the user  
[Bug][Code (internal)] The inventory.zip cannot be downloaded via the i-doit web interface  
[Bug][Code (internal)] No forwarding when clicking the Cancel button - Button without function  
[Bug][Code (internal)] Alphanumeric sorting does not sort correctly  
[Bug][Code (internal)] LC__UNIVERSAL__OTHER is not translated  
[Bug][Code (internal)] Object list: Abbreviation HE (height units) is not translated  
[Bug][Objects] Files were not completely migrated 1.13.x > 1.14  
[Bug][User settings] Sorting in configuration of category lists not possible  
[Bug][Authorization system] Objects of type workplace are displayed as locations in the authorization system  
[Bug][Authorization system] Line for last change also shows last change to users without rights  
[Bug][Authorization system] Users with read rights can execute reports in the Object Browser  
[Bug][H-Inventory] Error when importing h-inventory XML-files  
[Bug][Documents] SQL error message after calling the documents Preview  
[Bug][List editing] List edit for category "Port" not accessable within the category  
[Bug][List editing] Group Membership cannot be detached via list edit  
[Bug][List editing] Error when assigning a Layer-2-Net to a port in list edit  
[Bug][Object type configuration] Icons are scaled incorrectly in the object type configuration  
[Bug][Object type configuration] The color palette of the object color in the object type configuration cannot be used after creation via QCW  
[Bug][Templates] Template: Time specifications of the SLA category are not correctly transferred to objects created from template  
[Bug][Import] The assignment of "Assigned SIM cards > Linked SIM cards" to Cellular Phones during CSV import does not work  
[Bug][Lists] Object list crashes when HTML editor of a custom category is displayed in the object list  
[Bug][Lists] Members of person groups can not be selected for being shown in object lists  
[Bug][Lists] Changes to column widths in object lists are not saved  
[Bug][Lists] Width of columns is reset when navigating through the pages of objects  
[Bug][Lists] Layer 3 network object list "Filter in all fields" shows empty list after emptying the filter  
[Bug][API] Incorrect reference for service assignment via API  
[Bug][API] Attribte "model" of category "Storage" is not included in the results  
[Bug][Admincenter] Editing a tenant in the Admin-Center resets the assigned object licenses  
[Bug][Custom categories] Report Manager: The filter for checkboxes filter not correct  
[Bug][Custom categories] HTML-content from custom categories is shown twice on overview page  
[Bug][Notifications] Notification about stored objects is not sent with a threshold value of 0 or -1  
[Bug][Notifications] Formatting of info text in description of a notification is faulty  
[Bug][OCS] OCS Import logging logs even when logging is switched off  
[Bug][Search] Search: Only 0 or 1 is displayed as score  
[Bug][CMDB] Do not connect root location while creating cluster membership  
[Bug][CMDB] Language constant for the root location does not work everywhere  
[Bug][Connector Cabling] Sorting in cabling browser not correct  
