[Task][Application Redesign]   Redesign the i-doit application
[Task][Code (Internal)]        Implement a way to inject menus to the administration area
[Task][System tools]           Add function in the administration area to clean up unfinished / deleted dialog entries
[Task][CMDB]                   Rename “Layer-2 Network” into “Layer-2 Network Assignment” from Category Network » Port
[Improvement][System settings] Option to disable validation for MAC-addresses
[Improvement][System settings] New Configuration Translation
[Improvement][System settings] Definition of default language
[Improvement][Categories]      Hide attributes from categories
[Improvement][Categories]      New optional field "Last Login" in category "Login" of Users/Persons
[Improvement][Report-Manager]  Reports can now be imported and exported
[Bug][Categories]              Custom Counter are not available for manual input into inventory attribute number
[Bug][Categories]              Error when trying to assign a new workstation on overview page
[Bug][System tools]            Missing preview icons for removing unfinished/archived/deleted category entries
[Bug][Report-Manager]          Location tree is broken
[Bug][Report-Manager]          Placeholder "after current date" isn't working in reports
[Bug][Report-Manager]          Connection endpoint not queryable in reports
[Bug][Report-Manager]          Checkbox in report causes error
[Bug][Report-Manager]          Placeholder "unequal object id" does not work correctly
[Bug][Report-Manager]          Operators missing for operating system>version number in report conditions
[Bug][Report-Manager]          Wrong output in reports of vertically assembled objects in racks
[Bug][Report-Manager]          Operators missing for Memory>Capacity
[Bug][Report-Manager]          Saving a report with operator "subcnd" does not work
[Bug][Report-Manager]          Wrong query when using yes/no field in conditions
[Bug][Report-Manager]          Operating system > version is not displayed in Report Manager
[Bug][Console]                 Commands can not be executed in i-doit OPEN
[Bug][CMDB]                    End of contract is not calculated automatically, when adding contract details via Forms Add-on
[Bug][CMDB]                    Archived/Deleted objects are also displayed in assigned objects
[Bug][CMDB]                    Settings for location path do not apply to location paths in report results
[Bug][CSV Import]              CSV Import via Console does not work
[Bug][CSV Import]              CSV Export of report inserts constant instead of entry
[Bug][CSV Import]              Object relations are not assigned when using automatic option
[Bug][CSV Import]              Contract assignment does not import correctly via CSV
[Bug][Connector cabling]       Editing connectors causes error
[Bug][API]                     Changing the object type via the API is no longer possible
[Bug][API]                     Dialog+ entries with a relation can not be set with one API request into the category
[Bug][Templates]               Error when creating objects from templates using a %COUNTER%
[Bug][Templates]               Template for persons does not take over data from the categories Persons > Person group membership, Persons > Master data
[Bug][Import]                  CSV Import: Importing a Layer 2 Net twice creates a random Layer-3-net assignment
[Bug][Import]                  The XML import does not create CMDB statuses
[Bug][Import]                  Method storageModel_import missing
[Bug][Code (Internal)]         Updating with wrong row_size for Table isys_cats_person_list
[Bug][Code (Internal)]         Using a custom counter in a text field from a custom category results in a SQL error
[Bug][Code (Internal)]         "tenant-create" command does not check if the provided database user already exists
[Bug][Code (Internal)]         Performance loss by adding the OBJ_OWNER in version 1.18
[Bug][Code (Internal)]         Create missing foreign key
[Bug][Code (Internal)]         DropDown menu of tenant selection closes on loss of focus
[Bug][Authorization system]    Custom Counter can be edited/created without permissions
[Bug][Authorization system]    Via Person group authorized parameters are not correctly displayed in the Person rights view
[Bug][LDAP]                    Direct client forwarding with tenant_id does not work with SSO
[Bug][LDAP]                    Tenant change via LDAP User and active SSO does not work
[Bug][LDAP]                    LDAP-Caching mechanism does not work because of different admin password hashes
[Bug][List editing]            Solving software assignments via list editing generates an SQL error message
[Bug][List editing]            Specific category master data from organisation is not visible in list edit
[Bug][List editing]            Endless loading when adding new values in list edit
[Bug][List editing]            Applications can not be detached in list edit
[Bug][List editing]            SQL Error when detaching operating system in list edit
[Bug][List editing]            Selecting values in list-edit without creating entries first can result in errors
[Bug][Mass editing]            Mass change - license assignment/application is not set in software assignment
[Bug][Lists]                   HTML from WYSIWYG fields is not displayed in object lists
[Bug][Lists]                   Listview - Colum "object" shows archived objects in workstation
[Bug][Lists]                   Filter for dialog+ fields in custom categories does not work for handling (API+ Import full)
[Bug][Lists]                   SQL Error when adding attribute role to list view
[Bug][Lists]                   Person groups>Number of members not sortable in list view
[Bug][Lists]                   SQL-Error when filtering all fields in a Object list with Attribute Condition (General)
[Bug][Lists]                   Filter for capacity does not work correctly
[Bug][Lists]                   "Installed at" in Application is not displayed in list view
[Bug][Lists]                   Double scrollbar and number of pages not visible
[Bug][QR-Codes]                QR-Code preview doesn't load correctly
[Bug][QR-Codes]                QR-Codes in preview do not match the ones in the popup
[Bug][Admincenter]             Uninstall Add-on leads to a HTTP 500 error
[Bug][Admincenter]             "No such file or directory" error when using "\" in password for the MySQL User
[Bug][Check_MK]                Unnecessary use Statement in isys_cmdb_dao_category_s_person.class.php creates PHP Warning
[Bug][Custom categories]       Administration options vanish when using apostrophes in custom categories
[Bug][Custom categories]       Language constant is overwritten when editing custom category field
[Bug][Notifications]           Notifications are only sent in the language of the cronjob user
[Bug][Notifications]           Report based notification is not saved when unchecking "active"
[Bug][JDisc]                   No fallback if no standard JDisc server is configured
[Bug][JDisc]                   Domains are not checked during JDisc import
[Bug][JDisc]                   Address allocation is set to static when importing with mode "update"
[Bug][JDisc]                   JDisc import always sets the DNS server and this is logged in the logbook as Internal source
[Bug][CMDB settings]           Using a start value for custom counters creates an empty counter in the configuration
[Bug][Logbook]                 Create logbook entries for Persongroup assignments by the LDAP Sync
[Bug][Objects]                 Object title duplicates "\"
[Bug][Print view]              Print preview displays wrong attributes
[Bug][Export]                  Create objects via template if a user-defined category is contained there that represents a report
[Bug][Search]                  Filter for capacity doesn't work
[Bug][Dashboard]               Attributes are displayed truncated in the Object information list on the dashboard
[Bug][Dashboard]               If e.g. sorted by the title the Object information list widget will be reset and emptied.
[Bug][H-Inventory]             hinventory xml import creates new cpu-cores with every import
[Bug][System settings]         Ping command with nmap requires super user permissions