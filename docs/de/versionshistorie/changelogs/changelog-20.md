# Changelog 20

[Task][Code (Internal)]             Change versioning schema  
[Task][Code (Internal)]             Remove callables from smarty plugin parameters 'modify' and 'p_func'  
[Improvement][Application Redesign] Allow user to define the category field margin  
[Bug][CMDB]                         When I purge a Layer 3 network the remaining IP Addresses should be moved to the Global v4 Layer 3 Net  
[Bug][CMDB]                         Show referenced LDAP server in "LDAP" category  
[Bug][CMDB]                         IPv6 address range is cut off  
[Bug][CMDB]                         rack view vertical slots do not display parallel to each other anymore and the view is moved when to much are added  
[Bug][Custom categories]            Recommendation list for dates blocks the calendar  
[Bug][CMDB-Explorer]                Limit results in CMDB-Explorer  
[Bug][Lists]                        IDs in multi value custom categories are not sorted correctly  
[Bug][Lists]                        Memory size is not considered when filtering for capacity  
[Bug][Lists]                        Wrong Sorting of dates in object list  
[Bug][Lists]                        Overwriting the list configuration of a user does not work  
[Bug][Lists]                        Sorting of net attributes not possible with active filter  
[Bug][Categories]                   Active logging of last log in of a user prevents saving a new password  
[Bug][Categories]                   Category lists - Make all attributes selectable (part 1)  
[Bug][Categories]                   Objects from object types with specific category Persons cannot be added to Organization (Persons) category  
[Bug][Categories]                   Fields for date of creation and date of last change are not read only on overview page  
[Bug][Categories]                   The Location browser does not display the Location Tree when using Right System  
[Bug][Categories]                   If category operating system is used on overview page, a false new entry is created in this category  
[Bug][Categories]                   If category host address is used on overview page, a false new entry is created in this category  
[Bug][Categories]                   Attribute "Purchased at" has an assigned object when creating a new object  
[Bug][Categories]                   GEO coordinates cannot be inherited  
[Bug][JDisc]                        JDisc import duplicates layer-3 objects  
[Bug][JDisc]                        Can not create or save new JDisc Profile when Change CMDB-Status of objects to is  set to Keep CMDB-Status  
[Bug][JDisc]                        JDisc: Set default value for cloud subscriptions Value alters JDisc profiles  
[Bug][Report-Manager]               Report Manager does not display the value costs of category contract assignment  
[Bug][Report-Manager]               Unable to create categories in reportmanager  
[Bug][Report-Manager]               A configured Report condition with a Operator like >= is not functional  
[Bug][Report-Manager]               Using Location attribute in Reports triggers SQL error  
[Bug][Report-Manager]               Referencing Assigned Objects from the Master object displays the master object  
[Bug][Report-Manager]               False results in the list of report results  
[Bug][Report-Manager]               Sorting by object type does not work  
[Bug][Report-Manager]               Result list for reports stops count at 1500 results  
[Bug][Report-Manager]               PHP error when assigning Groups directly to a notification and using PHP8  
[Bug][Report-Manager]               Using locations in the report manager as attributes ends in error  
[Bug][Code (Internal)]              Maintenance with Interval leads to error  
[Bug][Code (Internal)]              Error message after login "Tenantsettings are only available after logging in."  
[Bug][Code (Internal)]              Wrong breadcrumb URL for add-ons with URL rewrite  
[Bug][Code (Internal)]              HTTP 500 if the SQL timeout is too short  
[Bug][Code (Internal)]              Indexing attributes do not work with custom Add-on  
[Bug][Code (Internal)]              Import profile is not migrated after 1.18.2 update  
[Bug][CSV Import]                   Custom categories: Dialog+ entries with a dependency are not correctly imported and assigned  
[Bug][CSV Import]                   CSV Import does not assign a Person to a Custom Category Object Browser (single) field  
[Bug][CSV Import]                   If the attribute Login > Username is set for a person this person cannot log in with the stored password.  
[Bug][CSV Import]                   Importing content for Yes/No fields not possible with 0/1 via CSV import  
[Bug][CSV Import]                   CPU Frequency is 0 when importing via CSV  
[Bug][CSV Import]                   Memory>Capacity is not filled via CSV  
[Bug][LDAP]                         LDAP Sync assign groups to users which are not member of the group  
[Bug][API]                          'InstallDate' property can not be set in application category via API  
[Bug][API]                          API is ignoring Validation of Unique attributes  
[Bug][API]                          API category and attribute configuration does not load  
[Bug][Authorization system]         Category net is not displayed in overview despite correct rights  
[Bug][Objects]                      The root location is clickable in the location view  
[Bug][List editing]                 All version numbers are displayed in list edit  
[Bug][List editing]                 List edit not saving correctly when one object is selected  
[Bug][List editing]                 "purchased at" in Category accounting is filled with a default value in list edit  
[Bug][Search]                       Global search for inventory number does not work when using counter  
[Bug][Search]                       Global search with ' or % causes sql error  
[Bug][Templates]                    Disallow using category "Authorization config" for Templates  
[Bug][Logbook]                      When I purge a Layer 3 network no Logbook entries are created  
[Bug][Logbook]                      Value for yes/no fields in logbook is empty  
[Bug][New cabling logic]            Fiber connection is not deleted  
[Bug][System settings]              More Info for System Parameter > Keep status of imported objects?  
[Bug][Licence settings]             Changing the client name resets the assigned object licenses.  
~~[Improvement][Report-Manager]                             Report Manager: Additional column with export buttons in the report list~~  