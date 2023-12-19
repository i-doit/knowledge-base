# Changelog 28

[Task][Category folders]         Streamline wording of move browser in Category Tree
[Task][Category folders]         Streamline wording of reorder modal in category tree feature
[Task][Category folders]         Rename message when folder is empty
[Task][Category folders]         Reset category list when the search is deleted
[Task][Category folders]         Improve category folders drag and drop
[Task][Category folders]         Add option to select and move multiple items
[Task][Category folders]         Rename GERMAN Expand Button
[Task][Category folders]         Add info to empty state of category folders feature
[Task][Category folders]         Disable move button when nothing is selected
[Task][Category folders]         Add information about the use of language constants to add a modal folder
[Task][Code (Internal)]          Remove global $g_convert variable
[Task][Code (Internal)]          Show architecture in system-overview
[Task][List editing]             The text with leading zeros needs to be written more clearly.
[Improvement][Import]            Allow user to import "input" of the first object in cabling import
[Improvement][JDisc]             JDisc: It should be possible to import more information (SLOT) regarding hard disc
[Improvement][JDisc]             Import von einzelnen Geräten aus JDisc anhand der IP über die Console / IP filter for JDisc import console command
[Improvement][JDisc]             New JDisc Import Mode: "Update (Existing)"
[Improvement][JDisc]             JDisc Import: Importiere SNMP Attribute
[Improvement][JDisc]             Comparison of available objects from i-doit and JDisc
[Improvement][JDisc]             Archive objects, that have not been seen by JDisc for a defined set of days
[Improvement][Code (Internal)]   Purge all objects in i-doit via command
[Bug][Code (Internal)]           Refactor the automatic update-check to a separate (ajax) request
[Bug][Code (Internal)]           Installation of different Add-on Versions does not replace old files
[Bug][Code (Internal)]           Changes in SMTP configuration encrypt the password
[Bug][Code (Internal)]           Assigned clusters are removed after saving the object type configuration
[Bug][Code (Internal)]           de-humanize the login page
[Bug][Code (Internal)]           Mouseover at object placed in rack shows html character instead of "ß" if language is german
[Bug][Code (Internal)]           Wrong translation of Editing lock
[Bug][Code (Internal)]           Creating a object-type at "edit-datastructure" causes error because of https
[Bug][Code (Internal)]           Fix object ID reset in URL in "Configurate object browser" after canceling an edit
[Bug][Code (Internal)]           Icon redirects are not cached
[Bug][Code (Internal)]           Changing technical key in multi value category causes problems in listview
[Bug][Code (Internal)]           Too small resolution does not display object titles in search bar
[Bug][CMDB]                      TypeError when assigning a Software
[Bug][CMDB]                      JDisc Import date is imported as string and not as date
[Bug][CMDB]                      Location is not selectable in object browser
[Bug][CMDB]                      Removing 'end of contract' of a contract makes it reappear after saving even though the runtime is now 0
[Bug][CMDB]                      Language constant overwrites another attribute
[Bug][CMDB]                      Date fields in category SIM are prefilled with character '-'
[Bug][LDAP]                      Creating an LDAP/AD filter that includes multiple filters
[Bug][Custom categories]         Changing technical keys to only contain words causes entries to lose the values when filled with API (Number only)
[Bug][JDisc]                     JDisc mapping error with MAC address
[Bug][JDisc]                     Saving a JDisc profile with a empty categories selection displays malformed JSON warning
[Bug][Category folders]          It is possible to select disabled folders as target
[Bug][Category folders]          Translations should not be overwritten after opening the category folders for the first time
[Bug][Category folders]          Fix move of categories when search is used
[Bug][Category folders]          Fix jumping view port when searching and selecting items
[Bug][Category folders]          After using search and delete the string via the X it is not possible to select category/folder container
[Bug][Category folders]          Security issue category folders prevent XSS usage in folder names
[Bug][Category folders]          Show root folder categories in move folder modal
[Bug][Category folders]          Correct sorting of category folders and categories
[Bug][Category folders]          Remove leftover categories
[Bug][Category folders]          Show language constants in edit folder modals
[Bug][Category folders]          Do not collapse category folders automatically
[Bug][Category folders]          Do not show language constant in add folder modal
[Bug][Category folders]          Do not show "no content" text when category is moved in empty folder
[Bug][Security]                  Prevent SQL-Injection in combobox endpoints (solves: CVE-2023-46856 & CVE-2023-49303)
[Bug][Security]                  Prevent loading "isys_cats_person_list" data over combobox "load" endpoint
[Bug][Security]                  Escape config values before writing them into config.inc.php (solves: CVE-2023-49300)
[Bug][Security]                  Remove option to download other files than i-doit update files via atomatic updater (solves: CVE-2023-49307)
[Bug][Security]                  Remove possibility to execute mysqldump over the UI
[Bug][Security]                  Prevent XSS in "qr.php" (solves: CVE-2023-49301)
[Bug][Security]                  Prevent XSS in category update for "File Links" (solves: CVE-2023-49302)
[Bug][Security]                  Prevent XSS in IT-Service Filter (solves: CVE-2023-49304)
[Bug][Security]                  Prevent XSS in Logbook entries through category data (solves: CVE-2023-49305)
[Bug][Security]                  Prevent XSS in usage of "proxy.php" (solves: CVE-2023-49306)
[Bug][Security]                  Prevent Path Traversal in Filemanager endpoint (solves: CVE-2023-49308)
[Bug][Security]                  Prevent Path Traversal in Filemanager "Image" in CMDB (solves: CVE-2023-49309)
[Bug][Security]                  Prevent Path Traversal in Import Module which allows to delete files (solves: CVE-2023-49311)
[Bug][Security]                  Disallow file urls in "reports.browser-url" to prevent exposing sensitive file contents (solves: CVE-2023-49310)
[Bug][Security]                  Add rights guard to isys_ajax_handler_logbook.class.php
[Bug][Security]                  Add guard by right-checking to "isys_ajax_handler_json.class.php"
[Bug][Report-Manager]            Report objects adds    after each column
[Bug][Report-Manager]            Exported report displays __id__ column
[Bug][Report-Manager]            HTML is displayed in Report
[Bug][Report-Manager]            Adding a condition block for location > below > X location outputs no results
[Bug][Report-Manager]            Status filter for multivalue categories in report manager is not working correctly for custom categories
[Bug][Report-Manager]            Status filter for multivalue categories is not working for CPU cores
[Bug][Report-Manager]            Operators for some fields can not be selected - TypeError: equation.map is not a function
[Bug][Report-Manager]            Placeholder is not correctly replaced
[Bug][Report-Manager]            SQL error in report manager for Wiring System > Assigned objects categories
[Bug][Report-Manager]            %LIKE% Operator for guarantee date is not working correctly
[Bug][Report-Manager]            '=' operator does not work correctly for custom categories
[Bug][Report-Manager]            The encoding of umlauts are displayed in report titles
[Bug][API]                       Can not use API when the API System Person is deleted
[Bug][API]                       Contact roles can not be authorized for API
[Bug][API]                       SQL error when using order_by
[Bug][Categories]                Reordering category folders causes visibility "eye" to disappear
[Bug][Categories]                'Edit' button disappears after 'purging' single value categories
[Bug][Categories]                Vertical slots for rack backside are mirrored
[Bug][Categories]                Deselecting a stack member sets it to generic location
[Bug][Categories]                Typo in category "Remote Management Controller" attribute "Primäre ZugriffsURL"
[Bug][System settings]           Not setting SMTP Timeout leads to SMTP Error
[Bug][System settings]           Save buttons do not display a success notification
[Bug][System settings]           Create Ticket button does not use the configured URL with PORT
[Bug][System settings]           API System setting overwrites tenant setting
[Bug][System settings]           System settings are not set through expert settings
[Bug][Validation]                Enable user to filter for attribute settings
[Bug][Validation]                Show empty attribute settings table to user
[Bug][Validation]                Do not show error message in tooltip while hovering over validation error in custom fields
[Bug][Validation]                Description fields yield validation errors on 32bit systems
[Bug][Notifications]             Group and User receive notification if receive strategy (-) is selected and both user & group have primary emails
[Bug][Notifications]             Neither group nor user receive notification if receive strategy (Groups if available, else assigned persons) is selected and only group member has primary email
[Bug][Notifications]             Notifications interval does sent E-Mails also a day after interval date
[Bug][List editing]              Can't create Model in list edit
[Bug][Search]                    Minimum search string error message should match setting
[Bug][Logging]                   Show detailed log does not work
[Bug][Lists]                     Sorting numbers in multi value category
[Bug][CMDB-Explorer]             SQL Error in CMDB Explorer
[Bug][Monitoring]                Monitoring - Livestatus add KeepAlive for checkmk
[Bug][Object type configuration] Assigned SIM cards can not be displayed on the Overview page
[Bug][Installation]              mod_rewrite test button is not working
[Bug][Admincenter]               A tenant can be over-licensed when deactivated
