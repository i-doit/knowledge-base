# Changelog 29

[Task][Service]                    Add link to customer satisfaction survey in i-doit<br>
[Task][Code (Internal)]            Integrate enhanced color picker component<br>
[Task][Code (Internal)]            Clean up color usages<br>
[Task][Permission system]          Improve authorization performance for locations<br>
[Task][Integrated customer portal] Integrate i-doit and Add-on specific download packages into i-doit<br>
[Task][i-doit Login]               Disable 'autocomplete' for password field on login page<br>
[Task][CMDB]                       Improve UI element for rack statistics<br>
[Improvement][Code (Internal)]     PHP 8.2 Compatibility<br>
[Improvement][Code (Internal)]     Improved login for SSO<br>
[Improvement][JDisc]               New console.php command: Configure JDisc common settings<br>
[Improvement][JDisc]               Add matching profile selection for each JDisc type mapping<br>
[Improvement][JDisc]               Black/Whitelist for Layer 3 networks and host addresses<br>
[Improvement][Eval Journey]        Add i-doit EVAL survey link<br>
[Bug][CMDB]                        Recycle locations via locally assigned objects causes error and removes data<br>
[Bug][CMDB]                        Custom counter counts 2 instead of 1<br>
[Bug][Security]                    XSS Vulnerability in the global search input<br>
[Bug][Logbook]                     Change via API is not written to logbook<br>
[Bug][Logbook]                     An entry in Category X could not be changed<br>
[Bug][Code (Internal)]             It is possible to create location loops<br>
[Bug][Code (Internal)]             500 Error when archiving an object<br>
[Bug][Code (Internal)]             Custom Counter are not replaced correctly<br>
[Bug][Code (Internal)]             More space for conditions and elements in report manager<br>
[Bug][Code (Internal)]             Placeholder is added to all placeholder fields on overview page<br>
[Bug][Code (Internal)]             It is possible to create multiple persons with the same username<br>
[Bug][Code (Internal)]             Login uses unfinished person with username<br>
[Bug][Code (Internal)]             Recurring JS error when "escape" remains pressed<br>
[Bug][JDisc]                       Allow user to import jdisc profiles<br>
[Bug][JDisc]                       SQL error when importing JDisc Profile with custom object matching profile<br>
[Bug][API]                         Saving dialog+ multi values via ID in a custom category does create a wrong logbook entry<br>
[Bug][API]                         cmdb.condition does not work with custom categories<br>
[Bug][API]                         Technical configuration of custom categories displays wrong examples<br>
[Bug][Import]                      When a object is being updated via import, the Date of change is updated even though no change has been made<br>
[Bug][Admincenter]                 Installing a addon for the wrong version of i-doit still unpacks the addon and updates files<br>
[Bug][Notifications]               Notifications based on reports will not get send even though the report has results<br>
[Bug][Notifications]               Notification Report: ID of Assigned license is displayed instead of Title<br>
[Bug][CSV Import]                  CSV import creates object with wrong object type<br>
[Bug][CSV Import]                  CSV-Import considers archived and deleted objects<br>
[Bug][CSV Import]                  CSV importing object with "new line" causes categories of object to be hidden and error message<br>
[Bug][Lists]                       Error when using "broad search" in tables (in PHP 8+)<br>
[Bug][Lists]                       Custom attributes are not shown as added after editing the list view again<br>
[Bug][Permission system]           Missing view right for reading dialog-fields via api<br>
[Bug][Permission system]           Rights from archived Person groups are applied<br>
[Bug][Permission system]           Despite parameter "All" is selected, the detail selection is not disabled<br>
[Bug][Permission system]           Dialog admin edit button is not deactivated with only view right<br>
[Bug][XML]                         XML Import not possible with assigned application<br>
[Bug][Validation]                  Error uploading a file for a object with validation<br>
[Bug][Validation]                  Do not validate objects while creating them<br>
[Bug][Report-Manager]              Report viewing DBMS version always shows the first entry<br>
[Bug][Report-Manager]              Report Manager reduces rows in result when adding additional columns<br>
[Bug][Report-Manager]              Missing operators for date fields<br>
[Bug][Report-Manager]              Assigned objects is missing in report manager selection<br>
[Bug][Categories]                  Saving ip address with space at the end<br>
[Bug][Categories]                  Existing models not displayed when selecting manufacturer<br>
[Bug][Categories]                  Default gateway for the Layer-3 Net cannot be set in the host address category<br>
[Bug][Categories]                  CPU manufacturer can not be used in a form<br>
[Bug][Categories]                  Wrong sorting of subcategories under "Datenbank Hierarchie"<br>
[Bug][Categories]                  Wrong sorting of subcategories under "Cluster"<br>
[Bug][CMDB-Explorer]               i-doit should answer with a proper json response when checking cmdb explorer with limited user<br>
[Bug][Documents]                   Document does not exist error message when opening a document<br>
[Bug][Templates]                   Counter does not work for custom categories in templates<br>
[Bug][Monitoring]                  livestatus with wrong address causes long loading times for categories<br>
[Bug][Logging]                     ldap log does not log archived or deleted persons<br>
[Bug][Interface management]        TypeError message in category "All Tickets"<br>
[Bug][System settings]             The object browser configuration for Remote Management Controller and Managed devices refers to the wrong category<br>
[Bug][Cabling import]              Do not rename cabling input/outputs after import<br>
[Bug][Object type configuration]   Sorting places category "Zugewiesener Arbeitsplatz" before "Zugewiesene SIM-Karten"
