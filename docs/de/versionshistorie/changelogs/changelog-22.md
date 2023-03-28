# Changelog 22

[Improvement][Application Redesign] Improve the main menu to automatically switch on small screens
[Improvement][JDisc]                Import Soundcards from JDisc
[Improvement][JDisc]                Import fields "Last Scan" and "Last Discovered"
[Improvement][JDisc]                Monitors should adopt the location of assigned objects
[Improvement][JDisc]                Information about last import from JDisc
[Bug][Application Redesign]         The size of the barcode is no longer generated dynamically
[Bug][Application Redesign]         CMDB-Explorer - Search field is too small
[Bug][Application Redesign]         Correct the appearance of the language switch button
[Bug][Application Redesign]         Fix layout of "Connection" category on small screens
[Bug][Report-Manager]               Make the attribute "Aliases" of the category "Service" to be selectable in the report manager
[Bug][Report-Manager]               Report do not display Object title instead of the ID
[Bug][Report-Manager]               Operator LIKE %...% is not working in reports for operating system>variant
[Bug][Categories]                   This IP address is available function checks the wrong Layer 3-Net
[Bug][Categories]                   Category "Operating system" always gets a time stamp for date of installation
[Bug][Categories]                   Fatal error when displaying a specific category on the overview as standard page
[Bug][Categories]                   The License browser displays license key as License title
[Bug][Categories]                   File Browser button has the wrong attribute
[Bug][Categories]                   Lists of specific categories contains different information
[Bug][Categories]                   Brackets not displayed in WYSIWGY Editor
[Bug][Categories]                   The column width for notification e-mail templates resets after opening a report in another tab
[Bug][Categories]                   Wrong scaling when zooming for assigned categories
[Bug][API]                          Fix security issue in i-doit (reported by Tim Püttmanns, maxence)
[Bug][API]                          Api System user is not useable
[Bug][API]                          debug level of json api can not be disabled
[Bug][JDisc]                        The User is not able to save a JDisc configuration
[Bug][JDisc]                        JDisc import via console.php with mode=6 does not Match correct
[Bug][JDisc]                        JDisc Import - "Installed at" is not imported correctly
[Bug][JDisc]                        JDisc import with Use simple database modelling activated ends in error
[Bug][JDisc]                        A  Software Assignment > Version number is not updated via JDisc Import
[Bug][JDisc]                        JDisc Import with PHP8.0 ends in error when Use simple database modelling is activated
[Bug][JDisc]                        JDisc Import logical Ports with a single IP Address
[Bug][LDAP]                         ldap-sync caching prevents user from login
[Bug][Notifications]                Notifications do not only notificate groups if the stategy Groups if available, otherwise assigned persons is selected
[Bug][Notifications]                Language templates in notifications - saving not possible
[Bug][CSV Import]                   Custom category field  type Object-Browser (Several objects) is displayed as Object browser (One object) in CSV Import
[Bug][CSV Import]                   The view in the csv assignment is shifted by larger resolutions
[Bug][CSV Import]                   The CSV Import assignment displays object type selection for attribute fields without object type selection
[Bug][CSV Import]                   CSV Import with activated validation for Host address > Domain displays error - PHP 8.0
[Bug][Code (Internal)]              Error: General error: Log file has not been set yet
[Bug][Code (Internal)]              Missing language constant for Administrator and User role
[Bug][Code (Internal)]              The combined location view displays objects twice
[Bug][Code (Internal)]              settings.cache should allways contain a array
[Bug][Code (Internal)]              Object browser uses combined view for locations
[Bug][Validation]                   Can't delete validation when selecting "a value from the textarea below"
[Bug][Validation]                   Validation not working when selecting "a value from the textarea below"
[Bug][Authorization system]         Inherit Rights via contact assignment from group to member
[Bug][Authorization system]         rights management select options all invert none are missing in 1.19
[Bug][Authorization system]         Parameters in authorization system are expanded
[Bug][Relations]                    Display spacers can not be set to No
[Bug][System tools]                 Missing MySQL Checks
[Bug][Custom categories]            Code in "Javascript" fields in custom categories gets obfuscated
[Bug][Events]                       List edit - Dialog+ (multi value) entries for custom categories are not saved
[Bug][CMDB-Explorer]                CMDB-Explorer export does not work
[Bug][List editing]                 All version numbers are displayed in list edit
[Bug][List editing]                 list edit of location category can not edit objects which have no location set
[Bug][List editing]                 List edit - Model is not displayed
[Bug][Admincenter]                  If a tenant has a wrong password for MySQL the Admin Center is blocked
[Bug][Lists]                        Wrong sorting of locations
[Bug][Lists]                        Listview - filtering of date only works with english format
[Bug][Lists]                        Objects cannot be opened with read-only permissions
[Bug][Dashboard]                    The remaining time of the i-doit license is not displayed on the dashboard
[Bug][Update]                       Update URL is not useable
[Bug][CMDB settings]                The object type sorting is not stored inital and is displayed incorrectly in the gui
