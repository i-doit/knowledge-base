---
search:
  exclude: true
---
# Changelog 1.16.1
<!-- cSpell:disable -->
<!-- markdownlint-disable MD052 -->
[Improvement][Categories] Add Attribute Firmware for the category Network -> interfaces<br>
[Bug][LDAP] LDAP-Group Mapping doesn't work anymore<br>
[Bug][LDAP] Deleted values from AD/LDAP remain untouched in i-doit<br>
[Bug][LDAP] The ldap-sync .ini function ignoreUsersWithAttributes does not work correctly<br>
[Bug][CMDB] Cabling browser and location selection use absolute URL instead of relative URL<br>
[Bug][CMDB] The CMDB statuses 'In operation' and 'inoperative' cannot be set via CSV import<br>
[Bug][Categories] Connected object in category "logical ports" does not have a hyperlink<br>
[Bug][Categories] Cabling browser displays connector and port as pair<br>
[Bug][Categories] Rack slots cannot be used if you are on the back<br>
[Bug][Categories] Selecting a DNS domain in category "net" causes a malformed presentation of the selection field<br>
[Bug][Categories] Objects cannot be changed from the Template state to other states<br>
[Bug][Categories] The connection of a FC port is not disconnected<br>
[Bug][Categories] For patch panels the position in the cabinet is not displayed in the list view<br>
[Bug][Categories] Links should be handled the same in all categories, including link field type<br>
[Bug][Categories] Selection for a net in category "Hostaddress" sometimes selects a supernet, even if a manual selection for a layer-3-net was performed previously<br>
[Bug][Categories] The name of the 'Service type' dialog attribute cannot be clearly associated with the 'Service > Service Type >> Type' category<br>
[Bug][Categories] New field type for database field of attribute "File-link (external)"<br>
[Bug][Report-Manager] Report Manager: it always inserts a condition that was not selected<br>
[Bug][Report-Manager] HTTP Error 500 when opening a report<br>
[Bug][Report-Manager] Report with the IP list object attribute creates SQL error<br>
[Bug][Report-Manager] Using specific and global category relations at the same time in a report causes an error<br>
[Bug][Report-Manager] Error when using "Assigned SIM Cards" in Report manager<br>
[Bug][Report-Manager] Report shows wrong information of category form factor<br>
[Bug][Report-Manager] Report Manager: SQL Error message when using contract attributes<br>
[Bug][Report-Manager] Report Manager error message when Operating System is selected as attribute<br>
[Bug][Report-Manager] Report Manager: attribute connection (power consumer) not available<br>
[Bug][Report-Manager] Check for dynamic report not available for reports, created/modified via SQL editor<br>
[Bug][Report-Manager] Report Manager: Or link is not generated correctly<br>
[Bug][Report-Manager] Sorting of IP addresses in reports<br>
[Bug][Custom categories] Language constants are not replaced for checkboxes in user defined categories<br>
[Bug][Custom categories] A custom category cannot be edited if a report is displayed besides text fields<br>
[Bug][Custom categories] Link attributes from custom categories should be linked in lists<br>
[Bug][Custom categories] Default-Values for yes/no fields in custom categories are not used for selecting a default<br>
[Bug][Interface management] Zammad connection does not work for object type workstation<br>
[Bug][JDisc] Error message during JDisc import if JDisc option "Import connection endpoints" is enabled<br>
[Bug][JDisc] JDisc: Virtual network adapters are imported<br>
[Bug][JDisc] JDisc Endpoint connection<br>
[Bug][JDisc] No logbook entries through JDisc import of persons<br>
[Bug][Notifications] Receiver calculation strategy in notifications without function<br>
[Bug][Notifications] Error when executing the i-doit console with notification-send command<br>
[Bug][Lists] Presentation for grouped data (comma seperated or list) has no impact on multi value categories<br>
[Bug][Lists] The field "description" is not available to be selected for lists in custom multi-value-categories<br>
[Bug][Lists] Assigned SIM cards cannot be opened by clicking on them in the list view<br>
[Bug][Lists] Attribute "assigned object" of category "logical ports" can not be selected to be shown in object list<br>
[Bug][Active Directory] Active Directory Computer Import function does not import computers or servers<br>
[Bug][CSV Import] CSV import generates error message and does not run through<br>
[Bug][CMDB-Explorer] Language constant for roles are not translated in CMDB Explorer<br>
[Bug][Print view] Print view for categories does not work<br>
[Bug][Print view] Some HTML formatting is not displayed correctly in the print preview<br>
[Bug][Code (internal)] Fix XSS vulnerability in monitoring > Export configuration<br>
[Bug][Code (internal)] Error message when updating i-doit to Version 1.16<br>
[Bug][CMDB settings] Clean up data entry also changes user defined categories<br>
[Bug][Search] If you use the search, an SQL error message is displayed but the search is executed<br>
[Bug][Search] Duplicated objects are not automatically added to the search index<br>
[Bug][System settings] The object browser in the list editing does not use the default selected for the object browser field<br>
[Bug][List editing] List editing for assigned licenses under Application>Inastallation does not work<br>
[Bug][Object type configuration] Selection for object type icons does not include all folders<br>
[Bug][User settings] Saving the presentation of tree view has to be saved twice<br>
