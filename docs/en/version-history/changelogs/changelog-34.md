# Changelog 34
<!-- cSpell:disable -->
<!-- markdownlint-disable MD052 -->
[Task][i-doit cloud]                     Use proxy in context of "Trouble Ticket System" (TTS)
[Task][Update]                           API needs to be updated to 2.3 (symfony 6.4 compatibility)
[Task][Forgot Password]                  Ensure correct styling and layout of sent mails in GMAIL client
[Task][Forgot Password]                  Extend "tenant-create" command to send e-mail for initial password set
[Task][Forgot Password]                  Create a ResetPassword service
[Task][Forgot Password]                  Make smtp configuration in admin-center more user-friendly
[Task][Forgot Password]                  Check for system level smtp configuration in "Forgot Password" settings section
[Task][Lists]                            Better Object list loading performance
[Task][Notifications]                    Improved notifications logging when there is a difference between assigned and  to be notified objects
[Task][System settings]                  Correct kb links in system config check settings section
[Task][CMDB]                             Replace old favicon with new favicon
[Improvement][Forgot Password]           Field to set the e-mail address for a user's password reset request
[Improvement][Code (Internal)]           Implement Maintenance Screen that is shown for Maintenance Windows
[Improvement][Native JDisc device view]  Add support for new JDisc GraphQL schema
[Improvement][System settings]           Allow user to expand and collapse all tenant settings
[Improvement][JDisc]                     New categories for the connection of "Access points" and "Access point controllers"
[Bug][Custom categories]                 Masked textfields are overwritten with the censor characters when custom category is saved
[Bug][Custom categories]                 Use 'Chosen' to select reports in custom category configuration
[Bug][Custom categories]                 Object relation on the overview page is not detached despite success message
[Bug][Custom categories]                 Custom dialog+ fields with values are presented as empty in category view/edit mode
[Bug][Monitoring]                        Monitoring data is requested even for objects with monitoring deactivated
[Bug][LDAP]                              Login via LDAP credentials when using PHP 8.3.16
[Bug][LDAP]                              Change LDAP filter field from input to textarea
[Bug][LDAP]                              LDAP sync archives persons when AD is not available
[Bug][Report-Manager]                    Adding multiple reports in category rights to a user causes inconsistent behavior
[Bug][Report-Manager]                    Wrong report results when using Cluster > Guest system > Title
[Bug][Report-Manager]                    SQL error when using location path as a condition block at report manager
[Bug][Report-Manager]                    Information for Services are not reportable via Software assignment
[Bug][Report-Manager]                    Report Manager uses the same temp table for different conditions
[Bug][Report-Manager]                    Condition without value empties other conditions
[Bug][Report-Manager]                    Variable reports cannot be selected in the custom category field Report
[Bug][Report-Manager]                    Unknown column error in report manager
[Bug][Report-Manager]                    A Report Manager query condition is not refreshed when switching between "placeholder" and "="
[Bug][Report-Manager]                    SQL Syntax Error when watching report with Location and operator below as condition
[Bug][Report-Manager]                    When saving a new SQL-Editor report it creates a duplicate for each time save is pressed
[Bug][Report-Manager]                    Do not cut off remove chosen attribute button in reports
[Bug][Update]                            i-doit is marked as Cloud instance after update
[Bug][Update]                            MySQL is checking foreign keys when altering a Table
[Bug][Code (Internal)]                   Can’t  delete an Entry in the Category Remote Management Controller
[Bug][Code (Internal)]                   Empty a custom multi object browser attribute in a custom single value category causes an error
[Bug][Code (Internal)]                   Can’t edit the Entry in the category Database installation
[Bug][Code (Internal)]                   Can’t edit the Entry in the category software assignment
[Bug][Code (Internal)]                   Allow user to import xml files via console
[Bug][Code (Internal)]                   isys_cmdb_dao_list_objects::get_object_count() should return int value
[Bug][Code (Internal)]                   Hiding attribute "Aliases" from overview page for category hostaddress does not work
[Bug][Code (Internal)]                   CSS rendering inconsistency for Chrome Browser
[Bug][Code (Internal)]                   "Show / Hide Details" button is not working at racks category of room objects
[Bug][Code (Internal)]                   Update not possible when update files are missing
[Bug][Code (Internal)]                   Incorrect Calculation in RAID Array Category for RAID Levels 0, 1, and 2
[Bug][Code (Internal)]                   Selecting a DBMS at DBMS Information category throws TypeErrors
[Bug][Lists]                             Entries of a category list are not counted
[Bug][Lists]                             Entries of a object list are not counted
[Bug][Lists]                             Variable %ipaddress#1% is not translated correctly when viewed at object list
[Bug][Lists]                             State of virtual machine is not displayed correctly at object list
[Bug][Lists]                             Exporting a list with dialog+ multi selection entries causes csv file to break
[Bug][Lists]                             Negativ numbers are wrongly displayed in list view
[Bug][Categories]                        Assigning a Service via Software assignment is not possible despite a Success message
[Bug][Categories]                        Save data in category logical port
[Bug][Categories]                        Setting numeric format to german causes error at category object vitality
[Bug][Categories]                        Contract assignment > Reaction rate does not display the correct value
[Bug][Categories]                        Using CSV Import to update a object does not change the "Date of change"
[Bug][Categories]                        It is not possible to select a date in the past when using Status-Planning
[Bug][Categories]                        Allow user to update audit category entries
[Bug][Categories]                        Software assignment not deleted when changing version of DBMS
[Bug][Categories]                        Link in LDAP category leads to empty page
[Bug][Categories]                        Cannot update Layer2-net category entry when Layer-3-net assignment is filled
[Bug][Logbook]                           Logbook entries does not include changes on ranking
[Bug][Logbook]                           No Logbook entry when changing CMDB Status
[Bug][Logbook]                           Create a logbook entry when changing the Object type
[Bug][Logbook]                           Field changes for Host address category are not correct
[Bug][Logbook]                           A custom field change of type Time is not logged in the Logbook
[Bug][Logbook]                           A custom field change of type Yes-no-field is not logged in the Logbook
[Bug][Logbook]                           Changes to yes-no-fields type are not written to the logbook
[Bug][Logbook]                           Fix empty / confusing changes for "hostaddress" category in logbook
[Bug][Logbook]                           Service logbook fields should not move when filtering
[Bug][Logbook]                           Show correct from values for logbook changes
[Bug][Relations]                         Relation is not deleted when a SIM card is detached
[Bug][Relations]                         Adding a object to a object group set the assigned object as relation master
[Bug][Permission system]                 H-Inventory permissions also deny or grant permission for SMTP configuration (e-mail)
[Bug][Permission system]                 System permission set to Read grants permission to read, write and delete Livestatus NDO and Export configuration
[Bug][Permission system]                 Report on the Dashboard can be viewed despite the rights for the report are revoked
[Bug][Permission system]                 Improve performance of location tree when considering user rights
[Bug][XML]                               Category "Network Port" is missing when exporting a template
[Bug][XML]                               When importing XML a Apache HTTP Server error is logged and the import does not finish
[Bug][CSV Import]                        CSV Import Error message with Multi-valued categories option set to "row" or "comma-separated" in combination with a "Location (Location)" mapping
[Bug][CSV Import]                        CSV Import doesn't set "Yes/No" Fields in custom categories
[Bug][CSV Import]                        CSV import attribute assignment is not saved when editing the assignment again
[Bug][CMDB]                              When duplicate a object the assigned Network-Interface at Network Port is not duplicated
[Bug][CMDB]                              Object type sorting via "Edit data structure" displays error
[Bug][CMDB]                              Browsing to i-doit/?load=property_infos leads to 500er HTTP error
[Bug][CMDB]                              Server error when swapping category Connectors with Replacement add-on
[Bug][CMDB]                              Dialog changes for Yes/No fields are not properly set in the logbook for category Database links
[Bug][CMDB]                              Unblock session while processing tree
[Bug][CMDB]                              Typo in German language "Übersicht der Netzwerports"
[Bug][JDisc]                             JDisc import matching profile is displayed as Default
[Bug][JDisc]                             Logbook does not contain a fully set of changes to the object and each change after JDisc import
[Bug][JDisc]                             The Software filter for JDisc does import Software when the whitelist is empty
[Bug][JDisc]                             Unable to archive outdated objects from JDisc
[Bug][JDisc]                             Unable to update objects via JDisc Discovery category
[Bug][JDisc]                             Allow re-editing of jdisc server
[Bug][API]                               cmdb.reports request that contains '&' outputs '&' instead
[Bug][Mass editing]                      Cancel mass change when memory limit is reached
[Bug][Mass editing]                      Mass change without a template not possible
[Bug][Configure Apache HTTPD, PHP & Co.] Using 0 values at PHP.ini causes error when uploading files
[Bug][Validation]                        Using a custom counter ignores validation unique check for titles
[Bug][List editing]                      Some attributes  from "connectors" category are missing for object lists and reports
[Bug][List editing]                      List editing version number/patchlevel for category operating system does not show patchlevel
[Bug][QR-Codes]                          text-aligning is not working for QR-Codes
[Bug][Logging]                           Proper information how to fix error message for General error: The given value is not unserializable!
