---
search:
  exclude: true
---
# Changelog 34
<!-- cSpell:disable -->
<!-- markdownlint-disable MD052 -->
[Task][i-doit cloud]                     Use proxy in context of "Trouble Ticket System" (TTS)<br>
[Task][Update]                           API needs to be updated to 2.3 (symfony 6.4 compatibility)<br>
[Task][Forgot Password]                  Ensure correct styling and layout of sent mails in GMAIL client<br>
[Task][Forgot Password]                  Extend "tenant-create" command to send e-mail for initial password set<br>
[Task][Forgot Password]                  Create a ResetPassword service<br>
[Task][Forgot Password]                  Make smtp configuration in admin-center more user-friendly<br>
[Task][Forgot Password]                  Check for system level smtp configuration in "Forgot Password" settings section<br>
[Task][Lists]                            Better Object list loading performance<br>
[Task][Notifications]                    Improved notifications logging when there is a difference between assigned and  to be notified objects<br>
[Task][System settings]                  Correct kb links in system config check settings section<br>
[Task][CMDB]                             Replace old favicon with new favicon<br>
[Improvement][Forgot Password]           Field to set the e-mail address for a user's password reset request<br>
[Improvement][Code (Internal)]           Implement Maintenance Screen that is shown for Maintenance Windows<br>
[Improvement][Native JDisc device view]  Add support for new JDisc GraphQL schema<br>
[Improvement][System settings]           Allow user to expand and collapse all tenant settings<br>
[Improvement][JDisc]                     New categories for the connection of "Access points" and "Access point controllers"<br>
[Bug][Custom categories]                 Masked textfields are overwritten with the censor characters when custom category is saved<br>
[Bug][Custom categories]                 Use 'Chosen' to select reports in custom category configuration<br>
[Bug][Custom categories]                 Object relation on the overview page is not detached despite success message<br>
[Bug][Custom categories]                 Custom dialog+ fields with values are presented as empty in category view/edit mode<br>
[Bug][Monitoring]                        Monitoring data is requested even for objects with monitoring deactivated<br>
[Bug][LDAP]                              Login via LDAP credentials when using PHP 8.3.16<br>
[Bug][LDAP]                              Change LDAP filter field from input to textarea<br>
[Bug][LDAP]                              LDAP sync archives persons when AD is not available<br>
[Bug][Report-Manager]                    Adding multiple reports in category rights to a user causes inconsistent behavior<br>
[Bug][Report-Manager]                    Wrong report results when using Cluster > Guest system > Title<br>
[Bug][Report-Manager]                    SQL error when using location path as a condition block at report manager<br>
[Bug][Report-Manager]                    Information for Services are not reportable via Software assignment<br>
[Bug][Report-Manager]                    Report Manager uses the same temp table for different conditions<br>
[Bug][Report-Manager]                    Condition without value empties other conditions<br>
[Bug][Report-Manager]                    Variable reports cannot be selected in the custom category field Report<br>
[Bug][Report-Manager]                    Unknown column error in report manager<br>
[Bug][Report-Manager]                    A Report Manager query condition is not refreshed when switching between "placeholder" and "="<br>
[Bug][Report-Manager]                    SQL Syntax Error when watching report with Location and operator below as condition<br>
[Bug][Report-Manager]                    When saving a new SQL-Editor report it creates a duplicate for each time save is pressed<br>
[Bug][Report-Manager]                    Do not cut off remove chosen attribute button in reports<br>
[Bug][Update]                            i-doit is marked as Cloud instance after update<br>
[Bug][Update]                            MySQL is checking foreign keys when altering a Table<br>
[Bug][Code (Internal)]                   Can’t  delete an Entry in the Category Remote Management Controller<br>
[Bug][Code (Internal)]                   Empty a custom multi object browser attribute in a custom single value category causes an error<br>
[Bug][Code (Internal)]                   Can’t edit the Entry in the category Database installation<br>
[Bug][Code (Internal)]                   Can’t edit the Entry in the category software assignment<br>
[Bug][Code (Internal)]                   Allow user to import xml files via console<br>
[Bug][Code (Internal)]                   isys_cmdb_dao_list_objects::get_object_count() should return int value<br>
[Bug][Code (Internal)]                   Hiding attribute "Aliases" from overview page for category hostaddress does not work<br>
[Bug][Code (Internal)]                   CSS rendering inconsistency for Chrome Browser<br>
[Bug][Code (Internal)]                   "Show / Hide Details" button is not working at racks category of room objects<br>
[Bug][Code (Internal)]                   Update not possible when update files are missing<br>
[Bug][Code (Internal)]                   Incorrect Calculation in RAID Array Category for RAID Levels 0, 1, and 2<br>
[Bug][Code (Internal)]                   Selecting a DBMS at DBMS Information category throws TypeErrors<br>
[Bug][Lists]                             Entries of a category list are not counted<br>
[Bug][Lists]                             Entries of a object list are not counted<br>
[Bug][Lists]                             Variable %ipaddress#1% is not translated correctly when viewed at object list<br>
[Bug][Lists]                             State of virtual machine is not displayed correctly at object list<br>
[Bug][Lists]                             Exporting a list with dialog+ multi selection entries causes csv file to break<br>
[Bug][Lists]                             Negativ numbers are wrongly displayed in list view<br>
[Bug][Categories]                        Assigning a Service via Software assignment is not possible despite a Success message<br>
[Bug][Categories]                        Save data in category logical port<br>
[Bug][Categories]                        Setting numeric format to german causes error at category object vitality<br>
[Bug][Categories]                        Contract assignment > Reaction rate does not display the correct value<br>
[Bug][Categories]                        Using CSV Import to update a object does not change the "Date of change"<br>
[Bug][Categories]                        It is not possible to select a date in the past when using Status-Planning<br>
[Bug][Categories]                        Allow user to update audit category entries<br>
[Bug][Categories]                        Software assignment not deleted when changing version of DBMS<br>
[Bug][Categories]                        Link in LDAP category leads to empty page<br>
[Bug][Categories]                        Cannot update Layer2-net category entry when Layer-3-net assignment is filled<br>
[Bug][Logbook]                           Logbook entries does not include changes on ranking<br>
[Bug][Logbook]                           No Logbook entry when changing CMDB Status<br>
[Bug][Logbook]                           Create a logbook entry when changing the Object type<br>
[Bug][Logbook]                           Field changes for Host address category are not correct<br>
[Bug][Logbook]                           A custom field change of type Time is not logged in the Logbook<br>
[Bug][Logbook]                           A custom field change of type Yes-no-field is not logged in the Logbook<br>
[Bug][Logbook]                           Changes to yes-no-fields type are not written to the logbook<br>
[Bug][Logbook]                           Fix empty / confusing changes for "hostaddress" category in logbook<br>
[Bug][Logbook]                           Service logbook fields should not move when filtering<br>
[Bug][Logbook]                           Show correct from values for logbook changes<br>
[Bug][Relations]                         Relation is not deleted when a SIM card is detached<br>
[Bug][Relations]                         Adding a object to a object group set the assigned object as relation master<br>
[Bug][Permission system]                 H-Inventory permissions also deny or grant permission for SMTP configuration (e-mail)<br>
[Bug][Permission system]                 System permission set to Read grants permission to read, write and delete Livestatus NDO and Export configuration<br>
[Bug][Permission system]                 Report on the Dashboard can be viewed despite the rights for the report are revoked<br>
[Bug][Permission system]                 Improve performance of location tree when considering user rights<br>
[Bug][XML]                               Category "Network Port" is missing when exporting a template<br>
[Bug][XML]                               When importing XML a Apache HTTP Server error is logged and the import does not finish<br>
[Bug][CSV Import]                        CSV Import Error message with Multi-valued categories option set to "row" or "comma-separated" in combination with a "Location (Location)" mapping<br>
[Bug][CSV Import]                        CSV Import doesn't set "Yes/No" Fields in custom categories<br>
[Bug][CSV Import]                        CSV import attribute assignment is not saved when editing the assignment again<br>
[Bug][CMDB]                              When duplicate a object the assigned Network-Interface at Network Port is not duplicated<br>
[Bug][CMDB]                              Object type sorting via "Edit data structure" displays error<br>
[Bug][CMDB]                              Browsing to i-doit/?load=property_infos leads to 500er HTTP error<br>
[Bug][CMDB]                              Server error when swapping category Connectors with Replacement add-on<br>
[Bug][CMDB]                              Dialog changes for Yes/No fields are not properly set in the logbook for category Database links<br>
[Bug][CMDB]                              Unblock session while processing tree<br>
[Bug][CMDB]                              Typo in German language "Übersicht der Netzwerports"<br>
[Bug][JDisc]                             JDisc import matching profile is displayed as Default<br>
[Bug][JDisc]                             Logbook does not contain a fully set of changes to the object and each change after JDisc import<br>
[Bug][JDisc]                             The Software filter for JDisc does import Software when the whitelist is empty<br>
[Bug][JDisc]                             Unable to archive outdated objects from JDisc<br>
[Bug][JDisc]                             Unable to update objects via JDisc Discovery category<br>
[Bug][JDisc]                             Allow re-editing of jdisc server<br>
[Bug][API]                               cmdb.reports request that contains '&' outputs '&' instead<br>
[Bug][Mass editing]                      Cancel mass change when memory limit is reached<br>
[Bug][Mass editing]                      Mass change without a template not possible<br>
[Bug][Configure Apache HTTPD, PHP & Co.] Using 0 values at PHP.ini causes error when uploading files<br>
[Bug][Validation]                        Using a custom counter ignores validation unique check for titles<br>
[Bug][List editing]                      Some attributes  from "connectors" category are missing for object lists and reports<br>
[Bug][List editing]                      List editing version number/patchlevel for category operating system does not show patchlevel<br>
[Bug][QR-Codes]                          text-aligning is not working for QR-Codes<br>
[Bug][Logging]                           Proper information how to fix error message for General error: The given value is not unserializable!
