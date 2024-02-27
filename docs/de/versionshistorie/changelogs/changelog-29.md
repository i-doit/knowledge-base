# Changelog 29

[Task][Service]                    Add link to customer satisfaction survey in i-doit pro
[Task][Code (Internal)]            Integrate enhanced color picker component
[Task][Code (Internal)]            Clean up color usages
[Task][Permission system]          Improve authorization performance for locations
[Task][Integrated customer portal] Integrate i-doit and Add-on specific download packages into i-doit
[Task][i-doit Login]               Disable 'autocomplete' for password field on login page
[Task][CMDB]                       Improve UI element for rack statistics
[Improvement][Code (Internal)]     PHP 8.2 Compatibility
[Improvement][Code (Internal)]     Improved login for SSO
[Improvement][JDisc]               New console.php command: Configure JDisc common settings
[Improvement][JDisc]               Add matching profile selection for each JDisc type mapping
[Improvement][JDisc]               Black/Whitelist for Layer 3 networks and host addresses
[Improvement][Eval Journey]        Add i-doit pro EVAL survey link
[Bug][CMDB]                        Recycle locations via locally assigned objects causes error and removes data
[Bug][CMDB]                        Custom counter counts 2 instead of 1
[Bug][Security]                    XSS Vulnerability in the global search input
[Bug][Logbook]                     Change via API is not written to logbook
[Bug][Logbook]                     An entry in Category X could not be changed
[Bug][Code (Internal)]             It is possible to create location loops
[Bug][Code (Internal)]             500 Error when archiving an object
[Bug][Code (Internal)]             Custom Counter are not replaced correctly
[Bug][Code (Internal)]             More space for conditions and elements in report manager
[Bug][Code (Internal)]             Placeholder is added to all placeholder fields on overview page
[Bug][Code (Internal)]             It is possible to create multiple persons with the same username
[Bug][Code (Internal)]             Login uses unfinished person with username
[Bug][Code (Internal)]             Recurring JS error when "escape" remains pressed
[Bug][JDisc]                       Allow user to import jdisc profiles
[Bug][JDisc]                       SQL error when importing JDisc Profile with custom object matching profile
[Bug][API]                         Saving dialog+ multi values via ID in a custom category does create a wrong logbook entry
[Bug][API]                         cmdb.condition does not work with custom categories
[Bug][API]                         Technical configuration of custom categories displays wrong examples
[Bug][Import]                      When a object is being updated via import, the Date of change is updated even though no change has been made
[Bug][Admincenter]                 Installing a addon for the wrong version of i-doit still unpacks the addon and updates files
[Bug][Notifications]               Notifications based on reports will not get send even though the report has results
[Bug][Notifications]               Notification Report: ID of Assigned license is displayed instead of Title
[Bug][CSV Import]                  CSV import creates object with wrong object type
[Bug][CSV Import]                  CSV-Import considers archived and deleted objects
[Bug][CSV Import]                  CSV importing object with "new line" causes categories of object to be hidden and error message
[Bug][Lists]                       Error when using "broad search" in tables (in PHP 8+)
[Bug][Lists]                       Custom attributes are not shown as added after editing the list view again
[Bug][Permission system]           Missing view right for reading dialog-fields via api
[Bug][Permission system]           Rights from archived Person groups are applied
[Bug][Permission system]           Despite parameter "All" is selected, the detail selection is not disabled
[Bug][Permission system]           Dialog admin edit button is not deactivated with only view right
[Bug][XML]                         XML Import not possible with assigned application
[Bug][Validation]                  Error uploading a file for a object with validation
[Bug][Validation]                  Do not validate objects while creating them
[Bug][Report-Manager]              Report viewing DBMS version always shows the first entry
[Bug][Report-Manager]              Report Manager reduces rows in result when adding additional columns
[Bug][Report-Manager]              Missing operators for date fields
[Bug][Report-Manager]              Assigned objects is missing in report manager selection
[Bug][Categories]                  Saving ip address with space at the end
[Bug][Categories]                  Existing models not displayed when selecting manufacturer
[Bug][Categories]                  Default gateway for the Layer-3 Net cannot be set in the host address category
[Bug][Categories]                  CPU manufacturer can not be used in a form
[Bug][Categories]                  Wrong sorting of subcategories under "Datenbank Hierarchie"
[Bug][Categories]                  Wrong sorting of subcategories under "Cluster"
[Bug][CMDB-Explorer]               i-doit should answer with a proper json response when checking cmdb explorer with limited user
[Bug][Documents]                   Document does not exist error message when opening a document
[Bug][Templates]                   Counter does not work for custom categories in templates
[Bug][Monitoring]                  livestatus with wrong address causes long loading times for categories
[Bug][Logging]                     ldap log does not log archived or deleted persons
[Bug][Interface management]        TypeError message in category "All Tickets"
[Bug][System settings]             The object browser configuration for Remote Management Controller and Managed devices refers to the wrong category
[Bug][Cabling import]              Do not rename cabling input/outputs after import
[Bug][Object type configuration]   Sorting places category "Zugewiesener Arbeitsplatz" before "Zugewiesene SIM-Karten"
