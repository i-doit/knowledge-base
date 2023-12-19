# Changelog 28

[Task][Category folders]         Streamline wording of move browser in Category Tree<br>
[Task][Category folders]         Streamline wording of reorder modal in category tree feature<br>
[Task][Category folders]         Rename message when folder is empty<br>
[Task][Category folders]         Reset category list when the search is deleted<br>
[Task][Category folders]         Improve category folders drag and drop<br>
[Task][Category folders]         Add option to select and move multiple items<br>
[Task][Category folders]         Rename GERMAN Expand Button<br>
[Task][Category folders]         Add info to empty state of category folders feature<br>
[Task][Category folders]         Disable move button when nothing is selected<br>
[Task][Category folders]         Add information about the use of language constants to add a modal folder<br>
[Task][Code (Internal)]          Remove global $g_convert variable<br>
[Task][Code (Internal)]          Show architecture in system-overview<br>
[Task][List editing]             The text with leading zeros needs to be written more clearly.<br>
[Improvement][Import]            Allow user to import "input" of the first object in cabling import<br>
[Improvement][JDisc]             JDisc: It should be possible to import more information (SLOT) regarding hard disc<br>
[Improvement][JDisc]             Import von einzelnen Geräten aus JDisc anhand der IP über die Console / IP filter for JDisc import console command<br>
[Improvement][JDisc]             New JDisc Import Mode: "Update (Existing)"<br>
[Improvement][JDisc]             JDisc Import: Importiere SNMP Attribute<br>
[Improvement][JDisc]             Comparison of available objects from i-doit and JDisc<br>
[Improvement][JDisc]             Archive objects, that have not been seen by JDisc for a defined set of days<br>
[Improvement][Code (Internal)]   Purge all objects in i-doit via command<br>
[Bug][Code (Internal)]           Refactor the automatic update-check to a separate (ajax) request<br>
[Bug][Code (Internal)]           Installation of different Add-on Versions does not replace old files<br>
[Bug][Code (Internal)]           Changes in SMTP configuration encrypt the password<br>
[Bug][Code (Internal)]           Assigned clusters are removed after saving the object type configuration<br>
[Bug][Code (Internal)]           de-humanize the login page<br>
[Bug][Code (Internal)]           Mouseover at object placed in rack shows html character instead of "ß" if language is german<br>
[Bug][Code (Internal)]           Wrong translation of Editing lock<br>
[Bug][Code (Internal)]           Creating a object-type at "edit-datastructure" causes error because of https<br>
[Bug][Code (Internal)]           Fix object ID reset in URL in "Configurate object browser" after canceling an edit<br>
[Bug][Code (Internal)]           Icon redirects are not cached<br>
[Bug][Code (Internal)]           Changing technical key in multi value category causes problems in listview<br>
[Bug][Code (Internal)]           Too small resolution does not display object titles in search bar<br>
[Bug][CMDB]                      TypeError when assigning a Software<br>
[Bug][CMDB]                      JDisc Import date is imported as string and not as date<br>
[Bug][CMDB]                      Location is not selectable in object browser<br>
[Bug][CMDB]                      Removing 'end of contract' of a contract makes it reappear after saving even though the runtime is now 0<br>
[Bug][CMDB]                      Language constant overwrites another attribute<br>
[Bug][CMDB]                      Date fields in category SIM are prefilled with character '-'<br>
[Bug][LDAP]                      Creating an LDAP/AD filter that includes multiple filters<br>
[Bug][Custom categories]         Changing technical keys to only contain words causes entries to lose the values when filled with API (Number only)<br>
[Bug][JDisc]                     JDisc mapping error with MAC address<br>
[Bug][JDisc]                     Saving a JDisc profile with a empty categories selection displays malformed JSON warning<br>
[Bug][Category folders]          It is possible to select disabled folders as target<br>
[Bug][Category folders]          Translations should not be overwritten after opening the category folders for the first time<br>
[Bug][Category folders]          Fix move of categories when search is used<br>
[Bug][Category folders]          Fix jumping view port when searching and selecting items<br>
[Bug][Category folders]          After using search and delete the string via the X it is not possible to select category/folder container<br>
[Bug][Category folders]          Security issue category folders prevent XSS usage in folder names<br>
[Bug][Category folders]          Show root folder categories in move folder modal<br>
[Bug][Category folders]          Correct sorting of category folders and categories<br>
[Bug][Category folders]          Remove leftover categories<br>
[Bug][Category folders]          Show language constants in edit folder modals<br>
[Bug][Category folders]          Do not collapse category folders automatically<br>
[Bug][Category folders]          Do not show language constant in add folder modal<br>
[Bug][Category folders]          Do not show "no content" text when category is moved in empty folder<br>
[Bug][Security]                  Prevent SQL-Injection in combobox endpoints (solves: CVE-2023-46856 & CVE-2023-49303)<br>
[Bug][Security]                  Prevent loading "isys_cats_person_list" data over combobox "load" endpoint<br>
[Bug][Security]                  Escape config values before writing them into config.inc.php (solves: CVE-2023-49300)<br>
[Bug][Security]                  Remove option to download other files than i-doit update files via atomatic updater (solves: CVE-2023-49307)<br>
[Bug][Security]                  Remove possibility to execute mysqldump over the UI<br>
[Bug][Security]                  Prevent XSS in "qr.php" (solves: CVE-2023-49301)<br>
[Bug][Security]                  Prevent XSS in category update for "File Links" (solves: CVE-2023-49302)<br>
[Bug][Security]                  Prevent XSS in IT-Service Filter (solves: CVE-2023-49304)<br>
[Bug][Security]                  Prevent XSS in Logbook entries through category data (solves: CVE-2023-49305)<br>
[Bug][Security]                  Prevent XSS in usage of "proxy.php" (solves: CVE-2023-49306)<br>
[Bug][Security]                  Prevent Path Traversal in Filemanager endpoint (solves: CVE-2023-49308)<br>
[Bug][Security]                  Prevent Path Traversal in Filemanager "Image" in CMDB (solves: CVE-2023-49309)<br>
[Bug][Security]                  Prevent Path Traversal in Import Module which allows to delete files (solves: CVE-2023-49311)<br>
[Bug][Security]                  Disallow file urls in "reports.browser-url" to prevent exposing sensitive file contents (solves: CVE-2023-49310)<br>
[Bug][Security]                  Add rights guard to isys_ajax_handler_logbook.class.php<br>
[Bug][Security]                  Add guard by right-checking to "isys_ajax_handler_json.class.php"<br>
[Bug][Report-Manager]            Report objects adds    after each column<br>
[Bug][Report-Manager]            Exported report displays __id__ column<br>
[Bug][Report-Manager]            HTML is displayed in Report<br>
[Bug][Report-Manager]            Adding a condition block for location > below > X location outputs no results<br>
[Bug][Report-Manager]            Status filter for multivalue categories in report manager is not working correctly for custom categories<br>
[Bug][Report-Manager]            Status filter for multivalue categories is not working for CPU cores<br>
[Bug][Report-Manager]            Operators for some fields can not be selected - TypeError: equation.map is not a function<br>
[Bug][Report-Manager]            Placeholder is not correctly replaced<br>
[Bug][Report-Manager]            SQL error in report manager for Wiring System > Assigned objects categories<br>
[Bug][Report-Manager]            %LIKE% Operator for guarantee date is not working correctly<br>
[Bug][Report-Manager]            '=' operator does not work correctly for custom categories<br>
[Bug][Report-Manager]            The encoding of umlauts are displayed in report titles<br>
[Bug][API]                       Can not use API when the API System Person is deleted<br>
[Bug][API]                       Contact roles can not be authorized for API<br>
[Bug][API]                       SQL error when using order_by<br>
[Bug][Categories]                Reordering category folders causes visibility "eye" to disappear<br>
[Bug][Categories]                'Edit' button disappears after 'purging' single value categories<br>
[Bug][Categories]                Vertical slots for rack backside are mirrored<br>
[Bug][Categories]                Deselecting a stack member sets it to generic location<br>
[Bug][Categories]                Typo in category "Remote Management Controller" attribute "Primäre ZugriffsURL"<br>
[Bug][System settings]           Not setting SMTP Timeout leads to SMTP Error<br>
[Bug][System settings]           Save buttons do not display a success notification<br>
[Bug][System settings]           Create Ticket button does not use the configured URL with PORT<br>
[Bug][System settings]           API System setting overwrites tenant setting<br>
[Bug][System settings]           System settings are not set through expert settings<br>
[Bug][Validation]                Enable user to filter for attribute settings<br>
[Bug][Validation]                Show empty attribute settings table to user<br>
[Bug][Validation]                Do not show error message in tooltip while hovering over validation error in custom fields<br>
[Bug][Validation]                Description fields yield validation errors on 32bit systems<br>
[Bug][Notifications]             Group and User receive notification if receive strategy (-) is selected and both user & group have primary emails<br>
[Bug][Notifications]             Neither group nor user receive notification if receive strategy (Groups if available, else assigned persons) is selected and only group member has primary email<br>
[Bug][Notifications]             Notifications interval does sent E-Mails also a day after interval date<br>
[Bug][List editing]              Can't create Model in list edit<br>
[Bug][Search]                    Minimum search string error message should match setting<br>
[Bug][Logging]                   Show detailed log does not work<br>
[Bug][Lists]                     Sorting numbers in multi value category<br>
[Bug][CMDB-Explorer]             SQL Error in CMDB Explorer<br>
[Bug][Monitoring]                Monitoring - Livestatus add KeepAlive for checkmk<br>
[Bug][Object type configuration] Assigned SIM cards can not be displayed on the Overview page<br>
[Bug][Installation]              mod_rewrite test button is not working<br>
[Bug][Admincenter]               A tenant can be over-licensed when deactivated<br>
