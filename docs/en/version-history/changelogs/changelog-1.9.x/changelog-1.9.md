[Improvement]   Version in category installation
[Improvement]   The control for changing the column width in object lists has been improved
[Improvement]   Option for use of spaces in exported Check_MK tags
[Improvement]   Customizable welcom message on login screen (Administration -> Global Configuration)
[Improvement]   OCS Import: Ignored software is no longer imported
[Improvement]   Configuration for selection the i-doit language based on browser language
[Improvement]   Refactoring of mcrypt functions in favor of crypt
[Improvement]   Popups automatically adjust to the screen size
[Improvement]   Deep search runs automatically after quick search
[Improvement]   Focus filter field in object lists automatically
[Improvement]   Button to clear a search filter in object lists
[Improvement]   Suggestion Search in object lists
[Improvement]   Outsourcing of information about missing rights into new log
[Improvement]   Filter for dialog and dialog+ via drop-down in object lists
[Improvement]   New category "Cable-Connection"
[Improvement]   Enhanced DNS attributes in category hostaddress
[Improvement]   Add net zones to the hostaddress category
[Improvement]   New object type and category: Net area
[Improvement]   New feature in IP lists: areas / zones
[Improvement]   New popup for connecting multiple connectors at once in "Connectors" category
[Improvement]   Wiring category: decouple functionality
[Improvement]   Inheritance of latitude and longitude in category location
[Improvement]    *** ID-3329 Verwendung von voranstehenden Nullen im Counter-Platzhalter in Objekt-Titel / Inventarnummer
[Improvement]   Advanced guarantee options in category accounting
[Improvement]   OCS-import: Import CPU cores
[Improvement]   PHP 7.0 compatibility
[Change]        Admin-Center: Renaming modules to "Add-ons"
[Change]        Unnecessary DropDown in Category Dialogue Lists below Dialog-Admin
[Change]        Check_MK: Link to export page will be moved to the module
[Change]        Nagios: Link to export page will be moved to the module
[Bug]           Host tags (dynamic) Under Check_MK Does Not Adapts To The Browser Window
[Bug]           Object type gets created while clicking cancel
[Bug]           OPEN: Print preview in overview page throws PHP error
[Bug]           Value of calbe length is modified by x10 when opend in list edit
[Bug]           Search index needs utf8_unicode_ci as collation
[Bug]           Licenses: Once a price has been set, it cannot be deleted afterwards
[Bug]           Check for php-mysqli fails
[Bug]           Identification fields of the CSV import do not work when using the controller
[Bug]           JDisc-import: Capacity of hard disks in category "Device" are not being updated.
[Bug]           JDisc-Import: JDisc import: In "Overwrite" mode, objects of type "cable" are created again and again.
[Bug]           Button to clear object list filter does not work with all browsers
[Bug]           CMDB Explorer algorithm does not show software instances
[Bug]           Creating a connector without a connection also creates a cable
[Bug]           Baseline design issues for selects in an input group
[Bug]           Usage of more than one description in report export not possible
[Bug]           Deep Search does not find any dash-separated words
[Bug]           Report manager: CSV and TXT exports deliver empty reports
[Bug]           Highlighting of search results displays HTML code
[Bug]           Search finds logbook entries
[Bug]           Category "Contract assignment" cannot be shown in the object overview
[Bug]           Right "Edit" on "Reports in category" does not allow to edit these reports
[Bug]           Creating an object with the "CPU" categorie automatically creates an entry in this category
[Bug]           JDisc import: Logbook entries are being created mistakenly
[Bug]           Object Limit Not Completely Visible
[Bug]           Log book: Changing object specific categories shows wrong category
[Bug]           Date in Object Lists in English Form Although Settings Are German
[Bug]           Objectlist widget cannot transform entries correctly
[Bug]           Notifications are not sent, if reciever is not part of object typ person/person group
[Bug]           SYSID can not be changed via the CSV-import
[Bug]           Wrong Displayed Description in Dialogue for Deleting an Object in Category Rack
[Bug]           Typo in german version at OCS configuration
[Bug]           Typo in german version of category "PDU"
[Bug]           Button "Add/Remove" Vanishes after Click on "Accept" in Object Browser
[Bug]           Specific categories are not shown in reports when used in linked objects
[Bug]           Resetting the rights system does not work with encrypted password
[Bug]           Dates in custom categories not deletable
[Bug]           CSV export: Custom information is being surrounded by HTML tags
[Bug]           Missing status dropdown for dialog admin
[Bug]           Geo-information can not be imported via csv import
[Bug]           Conditions for "Assembly" are not handled correctly
[Bug]           Removing a slot assignment does not delete the physical location
[Bug]           Attribut selection for category "operating system" empty in report manager
[Bug]           Search index: An error occurred when the search index was regenerated with a large database
[Bug]           Raid capacity is always displayed in GB
[Bug]           Field in LDAP configuration shown as empty in edit mode
[Bug]           Incorrect logbook content, if an object is placed into another hight unit within the rack
[Bug]           CSV import: "Object relationship (Several objects)"  does not fill out field and does not create a relationship
[Bug]           CSV import: "Object relationship (One object)"  does not create a relationship
[Bug]           Mandatory definition for location does not work
[Bug]           Wrong SQL if "IS NULL"/"IS NOT NULL" is used in report manager
[Bug]           Service components can only be selected from infrastructure in report manager
[Bug]           Example date format does not match the format to use
[Bug]           List edit of category "service" overwrites content of "service description extern" with content from service description intern"
[Bug]           Some Entries in the expert settings are not hidden
[Bug]           Category "DHCP" is missing in list edit
[Bug]           Category "DHCP" is missing in CSV-import
[Bug]           Wrong presentation of icons in list browser
[Bug]           Default-Template information is only imported into categories, which are selected for the import
[Bug]           Error in category "object vitality", if no software is assigned
[Bug]           Object type selection for assignment in csv-import does not have an impact
[Bug]           "Last Change" not available as condition in report manager
[Bug]           Report does not allow to select an attribute for category "spatially assigned objects"
[Bug]           JDisc: Import of attribute "speed" in interfaces are calculated wrong
[Bug]           Display of the assigned network does not allow to read which network was selected
[Bug]           Report results are not sortable
[Bug]           Quickinfo is shown in location path even if it's disabled
[Bug]           Selecting objects in the object browser by clicking the "Page" button is not possible
[Bug]           CMDB-Status settings in JDisc profile has no effect if imported via controller
[Bug]           CSV export of a report with newlines is exported with these newlines resulting in an invalid csv syntax
[Bug]           Pager in object browsers only work after scrolling vertically
[Bug]           Icon for editing list edit is not hidden if the user has no rights to it
[Bug]           Location is not detachable
[Bug]           Ip address filtering not possible
[Bug]           No translated language constant in menu tree of administration
[Bug]           Contract start and end are not selectable for viewing in object lists
[Bug]           Multi value attributes are displayed twice in object lists
[Bug]           Error selecting CMDB-Status in Reports
[Bug]           Magnification Icon for connected attributes in report manager missing
[Bug]           Object link does not work if line-click in object lists is disabled
[Bug]           There is a problem with mandatory fields in custom categories on overview page
[Bug]           Yes/no fields are not viewable correctly in report manager
[Bug]           Data backup details are not viewable on overview if mandatory fields are enabled
[Bug]           Print view incorrect when filtering the lists
[Bug]           Error on csv import without any identification value
[Bug]           Expert setting "auth.use-in-location-tree" deactivates root location in site browser for all users
[Bug]           Login error for ldap user that does not have any rights
[Bug]           Attribute "interface" is not cleared in a connector if this connector was created via cable import
[Bug]           Attributes "dns domain" and "fqdn" are not displayed in reports
[Bug]           Attribute location does not appear in object lists with active my-doit statusfilter
[Bug]           Displaying Listener category in report manager results in an error
[Bug]           SMTP password viewable via developer tools
[Bug]           Category "Connection" holds wrong information
[Bug]           No translation for cmdb-status constants with custom translations
[Bug]           Notification will be only sent for first report object, not for the whole list
[Bug]           Logbook entry of a resolved connection holds code
[Bug]           Modules and extensions cannot be enabled or disabled for single tenants
[Bug]           Logout appends ?logout to url, which results in a malformed url after recurring login
[Bug]           Contact browser: Objectgroup allows user to select objects which are not part of contact category
[Bug]           Remove attribute threshold from notification for updates
[Bug]           Group assignment does not work via mass change
[Bug]           Import log begins with "\n" in each line
[Bug]           Button "Detach" in list edit does not work and organization of objects is inconsistent
[Bug]           Custom translations are overlooked after login
[Bug]           Links in reports cannot be clicked
[Bug]           OCS-Import imports objects in wrong object type
[Bug]           Table for JDisc profiles is not shown completely
[Bug]           Button "Edit" is missing in category dialogs in dialog admin
[Bug]           Different behavior for cancel button in dialog admin
[Bug]           Working space is displayed doubled in tree views "logic location" and "combined view"
[Bug]           After clicking on the "Operating system" category in the relationship object, the edit mode is displayed immediately
[Bug]           Edit button is always clickable in service filter view, when no service filter selected it will trigger functionality of new button
[Bug]           Logbook list view: date setting will not be reset when closing the calendar sheet
[Bug]           Logbook list view: Wrong description of date fields "from" and "to"
[Bug]           Counter in export templates count executions double when reloading current page
[Bug]           Wrong buttons for delete and restore of templates, also deprecated dropdown for status
[Bug]           Raid-Level "-" in widget "calculator" in "RAID capacity" wrong
[Bug]           Wrong entry in widget "Calculator" in list for storage capacity and raid capacity
[Bug]           Doubled ID field in widget object list when no attribute was chosen
[Bug]           Button print preview is shown in list view of relations