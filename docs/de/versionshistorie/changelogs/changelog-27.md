# Changelog 27

[Task][Application Redesign]                       Redesign the login page<br>
[Task][Code (Internal)]                            Remove 'logical-location-handling' setting, refer to 'Relocate CI' add-on<br>
[Task][Code (Internal)]                            Update ACE Editor<br>
[Task][Console-base Installation/Update/Licensing] Description for import-jdisc --regenerateSearchIndex is missing<br>
[Task][JDisc]                                      Improve JDisc communication<br>
[Task][Single Sign On (SSO)]                       Implement new expert setting + login logic for SSO<br>
[Task][Update]                                     Add information about planned deprecation of PHP 7.4 to setup and update procedure<br>
[Improvement][Category folders]                    Implement category folders feature<br>
[Improvement][JDisc]                               Create mapping between i-doit objects and category entries and JDISC data<br>
[Improvement][JDisc]                               Format the object title text (lowercase / uppercase)<br>
[Improvement][JDisc]                               Add Serial number as Identification of the device for JDisc Discovery<br>
[Improvement][JDisc]                               Import panel size of monitors / Importiere die Panelgröße von Monitoren<br>
[Improvement][Logbook]                             Option to decide, whether logbook entries are removed or untouched when an object is purged<br>
[Improvement][Categories]                          Improve process to set an empty password<br>
[Improvement][CMDB-Explorer]                       Group object types in CMDB-Explorer<br>
[Bug][Validation]                                  No validation error when duplicating<br>
[Bug][Validation]                                  Setting status of service type entries to archived or deleted makes entries invisible and none selectable<br>
[Bug][Notifications]                               The User is not able to create notification settings<br>
[Bug][Categories]                                  Categories selected for 'categories on the overview' get automatically filled when creating a new object or template<br>
[Bug][Categories]                                  Default gateway overwritten when duplicating object<br>
[Bug][Categories]                                  Assigning a software via software assignment before assigning a operating system causes version number to disappear<br>
[Bug][Categories]                                  Placeholder %OBJTITLE% is not working in category accounting > Inventory number via Template<br>
[Bug][Categories]                                  SQL Error when creating more than 16 model entries<br>
[Bug][Categories]                                  Model not displayed when creating more than 16 objects without saving the object afterwards<br>
[Bug][Categories]                                  Multiple operating systems at software assignment causes weird behavior at version numbers from operating systems category<br>
[Bug][Custom categories]                           Changing technical keys to only contain words causes entries to lose the values when filled with API (Dialog+)<br>
[Bug][Custom categories]                           Disconnecting relation in custom category causes sql error<br>
[Bug][Code (Internal)]                             Uninstalling add-ons over admin-center does not work if user is also logged into i-doit<br>
[Bug][Code (Internal)]                             Adjust naming of network interface category<br>
[Bug][Code (Internal)]                             Can't save counter with # format<br>
[Bug][Code (Internal)]                             Saving a long link as a bookmark in the bookmark widget removes edit and remove button<br>
[Bug][Code (Internal)]                             Add relationship menu item to extras menu<br>
[Bug][Code (Internal)]                             Wrong attribute name while reading through API<br>
[Bug][Code (Internal)]                             Do not add spaces to custom multiline text fields<br>
[Bug][Code (Internal)]                             Installation of incompatible add-on does not throw an error<br>
[Bug][Code (Internal)]                             Translate deselect button again<br>
[Bug][Code (Internal)]                             Do not display an empty Extras menu if the user does not have the right to do so<br>
[Bug][i-doit Login]                                Display error message when a user logs in with incorrect credentials<br>
[Bug][System settings]                             Open calendar picker when calendar input field is focused<br>
[Bug][System settings]                             LDAP Debug log is only available in System settings (Admin Center)<br>
[Bug][LDAP]                                        Ldap-sync creates a duplicated logbook entries for a archived user<br>
[Bug][LDAP]                                        Group Assignment is not removed for LDAP Users if the user was moved to another LDAP group<br>
[Bug][LDAP]                                        Administration > Import and interfaces > LDAP > Attribute extension cannot be saved<br>
[Bug][Logbook]                                     If a change in the administration with "logbook commentary" is saved a missleading information tells that a loogbook entry has been created.<br>
[Bug][API]                                         Creating and setting a Dialog entry with a String which is only a number is not logged<br>
[Bug][API]                                         PHP Error when posting a API request without installed i-doit pro add-on API<br>
[Bug][List editing]                                Software not displayed in list view when assigned via list edit<br>
[Bug][List editing]                                Adding a new model in list edit causes database error<br>
[Bug][List editing]                                Assignment categories not editable in list edit<br>
[Bug][List editing]                                Allow user to add dialog+ values in list edit<br>
[Bug][CMDB]                                        Trying to save a Database Installation twice leads to an error<br>
[Bug][CMDB]                                        SQL error in report manager for DBMS> database installation categories<br>
[Bug][CMDB]                                        Edit button in IP-List should be hidden<br>
[Bug][CMDB]                                        Setting "show primary entry only" for a master object (custom category) gives HTTP 500 Error at preview<br>
[Bug][CMDB]                                        SQL error after double update of DBMS installation<br>
[Bug][New cabling logic]                           Cabling Browser shows wrong assignment of input and output<br>
[Bug][Report-Manager]                              Using software assignment in reports causes wrong number of matches<br>
[Bug][Report-Manager]                              DNS Server is not shown in a report even though it is set in a Layer-3 Net<br>
[Bug][Report-Manager]                              Assigned workstation-> Parent Object not working in report manager<br>
[Bug][Report-Manager]                              Report does not display all possible results<br>
[Bug][Report-Manager]                              CSV export of reports with grouped multivalue presentation may contain a lot of empty rows<br>
[Bug][Report-Manager]                              Operators missing for accounting>date of invoice<br>
[Bug][H-Inventory]                                 Importing H-Inventory xml file displays error message<br>
[Bug][Connector cabling]                           Cabling browser does not display ports correctly<br>
[Bug][CSV Import]                                  Attaching files via CSV Import ends with error message<br>
[Bug][CSV Import]                                  CSV Export of report inserts constant instead of entry<br>
[Bug][CSV Import]                                  CSV Import of Multi Value Category Data does not work correctly over the console.php<br>
[Bug][CSV Import]                                  Database error when importing via csv<br>
[Bug][Update]                                      Updating from 24 to 25 sets the Monetary format to NULL for all Users<br>
[Bug][Lists]                                       List view for multi value entries is not checking columns<br>
[Bug][Lists]                                       SQL error when filtering in object type switch chassis for Device assignment (Slots)<br>
[Bug][Lists]                                       Show X entries in the object list is not persistent<br>
[Bug][Lists]                                       List view config missing when editing<br>
[Bug][Lists]                                       Can't move attributes in list view for categories<br>
[Bug][Lists]                                       List filter in object type configuration does not reset<br>
[Bug][Lists]                                       Option "default filter filters within all fields" causes date warning<br>
[Bug][Dashboard]                                   adding "cluster service assignment" attributes to the "object information list" widget at the dashboard gives error<br>
[Bug][Dashboard]                                   Use correct links in quicklaunch widget<br>
[Bug][Search]                                      Filtering for date fields in list overview not working<br>
[Bug][Templates]                                   Contact assignment in templates not working for JDisc Imports<br>
[Bug][JDisc]                                       FC-Ports are not completely imported via JDisc import<br>
[Bug][JDisc]                                       JDisc import via console stops with error<br>
[Bug][JDisc]                                       Importing JDisc profile displays foreign key constraint error message<br>
[Bug][JDisc]                                       JDisc import with "Only create newly scanned devices" import mode creates duplicates<br>
[Bug][Console-base Installation/Update/Licensing]  sync-dynamic-groups command using wrong database table<br>
[Bug][CMDB-Explorer]                               Language constants are displayed in the object info of the cmdb explorer<br>
[Bug][i-doit Licensing 2.0]                        License expiration countdown is not displayed on the dashboard<br>
[Bug][Authorization system]                        If "Location and all physically assigned objects" is used as a right the overview page can be seen although it is not authorized<br>
[Bug][Relations]                                   Function to clear the password of users has no effect<br>
[Bug][Single Sign On (SSO)]                        Language of default tenant overwrites languages of other tenants<br>
