# Changelog 1.19

[Task][Application Redesign]   Redesign the i-doit application<br>
[Task][Code (Internal)]        Implement a way to inject menus to the administration area<br>
[Task][System tools]           Add function in the administration area to clean up unfinished / deleted dialog entries<br>
[Task][CMDB]                   Rename “Layer-2 Network” into “Layer-2 Network Assignment” from Category Network » Port<br>
[Improvement][System settings] Option to disable validation for MAC-addresses<br>
[Improvement][System settings] New Configuration Translation<br>
[Improvement][System settings] Definition of default language<br>
[Improvement][Categories]      Hide attributes from categories<br>
[Improvement][Categories]      New optional field "Last Login" in category "Login" of Users/Persons<br>
[Improvement][Report-Manager]  Reports can now be imported and exported<br>
[Bug][Categories]              Custom Counter are not available for manual input into inventory attribute number<br>
[Bug][Categories]              Error when trying to assign a new workstation on overview page<br>
[Bug][System tools]            Missing preview icons for removing unfinished/archived/deleted category entries<br>
[Bug][Report-Manager]          Location tree is broken<br>
[Bug][Report-Manager]          Placeholder "after current date" isn't working in reports<br>
[Bug][Report-Manager]          Connection endpoint not queryable in reports<br>
[Bug][Report-Manager]          Checkbox in report causes error<br>
[Bug][Report-Manager]          Placeholder "unequal object id" does not work correctly<br>
[Bug][Report-Manager]          Operators missing for operating system>version number in report conditions<br>
[Bug][Report-Manager]          Wrong output in reports of vertically assembled objects in racks<br>
[Bug][Report-Manager]          Operators missing for Memory>Capacity<br>
[Bug][Report-Manager]          Saving a report with operator "subcnd" does not work<br>
[Bug][Report-Manager]          Wrong query when using yes/no field in conditions<br>
[Bug][Report-Manager]          Operating system > version is not displayed in Report Manager<br>
[Bug][Console]                 Commands can not be executed in i-doit OPEN<br>
[Bug][CMDB]                    End of contract is not calculated automatically, when adding contract details via Forms Add-on<br>
[Bug][CMDB]                    Archived/Deleted objects are also displayed in assigned objects<br>
[Bug][CMDB]                    Settings for location path do not apply to location paths in report results<br>
[Bug][CSV Import]              CSV Import via Console does not work<br>
[Bug][CSV Import]              CSV Export of report inserts constant instead of entry<br>
[Bug][CSV Import]              Object relations are not assigned when using automatic option<br>
[Bug][CSV Import]              Contract assignment does not import correctly via CSV<br>
[Bug][Connector cabling]       Editing connectors causes error<br>
[Bug][API]                     Changing the object type via the API is no longer possible<br>
[Bug][API]                     Dialog+ entries with a relation can not be set with one API request into the category<br>
[Bug][Templates]               Error when creating objects from templates using a %COUNTER%<br>
[Bug][Templates]               Template for persons does not take over data from the categories Persons > Person group membership, Persons > Master data<br>
[Bug][Import]                  CSV Import: Importing a Layer 2 Net twice creates a random Layer-3-net assignment<br>
[Bug][Import]                  The XML import does not create CMDB statuses<br>
[Bug][Import]                  Method storageModel_import missing<br>
[Bug][Code (Internal)]         Updating with wrong row_size for Table isys_cats_person_list<br>
[Bug][Code (Internal)]         Using a custom counter in a text field from a custom category results in a SQL error<br>
[Bug][Code (Internal)]         "tenant-create" command does not check if the provided database user already exists<br>
[Bug][Code (Internal)]         Performance loss by adding the OBJ_OWNER in version 1.18<br>
[Bug][Code (Internal)]         Create missing foreign key<br>
[Bug][Code (Internal)]         DropDown menu of tenant selection closes on loss of focus<br>
[Bug][Authorization system]    Custom Counter can be edited/created without permissions<br>
[Bug][Authorization system]    Via Person group authorized parameters are not correctly displayed in the Person rights view<br>
[Bug][LDAP]                    Direct client forwarding with tenant_id does not work with SSO<br>
[Bug][LDAP]                    Tenant change via LDAP User and active SSO does not work<br>
[Bug][LDAP]                    LDAP-Caching mechanism does not work because of different admin password hashes<br>
[Bug][List editing]            Solving software assignments via list editing generates an SQL error message<br>
[Bug][List editing]            Specific category master data from organisation is not visible in list edit<br>
[Bug][List editing]            Endless loading when adding new values in list edit<br>
[Bug][List editing]            Applications can not be detached in list edit<br>
[Bug][List editing]            SQL Error when detaching operating system in list edit<br>
[Bug][List editing]            Selecting values in list-edit without creating entries first can result in errors<br>
[Bug][Mass editing]            Mass change - license assignment/application is not set in software assignment<br>
[Bug][Lists]                   HTML from WYSIWYG fields is not displayed in object lists<br>
[Bug][Lists]                   Listview - Colum "object" shows archived objects in workstation<br>
[Bug][Lists]                   Filter for dialog+ fields in custom categories does not work for handling (API+ Import full)<br>
[Bug][Lists]                   SQL Error when adding attribute role to list view<br>
[Bug][Lists]                   Person groups>Number of members not sortable in list view<br>
[Bug][Lists]                   SQL-Error when filtering all fields in a Object list with Attribute Condition (General)<br>
[Bug][Lists]                   Filter for capacity does not work correctly<br>
[Bug][Lists]                   "Installed at" in Application is not displayed in list view<br>
[Bug][Lists]                   Double scrollbar and number of pages not visible<br>
[Bug][QR-Codes]                QR-Code preview doesn't load correctly<br>
[Bug][QR-Codes]                QR-Codes in preview do not match the ones in the popup<br>
[Bug][Admincenter]             Uninstall Add-on leads to a HTTP 500 error<br>
[Bug][Admincenter]             "No such file or directory" error when using "\" in password for the MySQL User<br>
[Bug][Check_MK]                Unnecessary use Statement in isys_cmdb_dao_category_s_person.class.php creates PHP Warning<br>
[Bug][Custom categories]       Administration options vanish when using apostrophes in custom categories<br>
[Bug][Custom categories]       Language constant is overwritten when editing custom category field<br>
[Bug][Notifications]           Notifications are only sent in the language of the cronjob user<br>
[Bug][Notifications]           Report based notification is not saved when unchecking "active"<br>
[Bug][JDisc]                   No fallback if no standard JDisc server is configured<br>
[Bug][JDisc]                   Domains are not checked during JDisc import<br>
[Bug][JDisc]                   Address allocation is set to static when importing with mode "update"<br>
[Bug][JDisc]                   JDisc import always sets the DNS server and this is logged in the logbook as Internal source<br>
[Bug][CMDB settings]           Using a start value for custom counters creates an empty counter in the configuration<br>
[Bug][Logbook]                 Create logbook entries for Persongroup assignments by the LDAP Sync<br>
[Bug][Objects]                 Object title duplicates "\"<br>
[Bug][Print view]              Print preview displays wrong attributes<br>
[Bug][Export]                  Create objects via template if a user-defined category is contained there that represents a report<br>
[Bug][Search]                  Filter for capacity doesn't work<br>
[Bug][Dashboard]               Attributes are displayed truncated in the Object information list on the dashboard<br>
[Bug][Dashboard]               If e.g. sorted by the title the Object information list widget will be reset and emptied.<br>
[Bug][H-Inventory]             hinventory xml import creates new cpu-cores with every import<br>
[Bug][System settings]         Ping command with nmap requires super user permissions<br>
