# Changelog 24

[Task][Code (Internal)]                                 Unify uploaded file-paths for windows and other operating systems<br> 
[Task][Relations]                                       Improve field size in "Administration > User settings > Presentation"<br> 
[Task][LDAP]                                            Trim LDAP configuration inputs to prevent errors<br> 
[Task][JDisc]                                           Implement new JDisc profile option to use hostname as object title (instead of FQDN)<br> 
[Improvement][JDisc]                                    JDISC Profile Ex and Import<br> 
[Improvement][Code (Internal)]                          Support MariaDB 10.6.X<br> 
[Bug][List editing]                                     Improved layout for list edit to view more entries at the same time on the screen<br> 
[Bug][List editing]                                     Sorting Cabling > Connectors in Listedit<br> 
[Bug][List editing]                                     Position in rack is not editable by the list edit<br> 
[Bug][List editing]                                     List Edit should add entries and values when values for all is added<br> 
[Bug][List editing]                                     Positioning objects in a rack via multiedit shows different results<br> 
[Bug][Report-Manager]                                   Attributes "target schema" and "software runs on" is not displayable in report context<br> 
[Bug][Report-Manager]                                   subcnd for Service assignment category attribute Service is missing<br> 
[Bug][Report-Manager]                                   Operators missing for operating system>version number in report conditions<br> 
[Bug][Report-Manager]                                   Enter button causes unpredictable events<br> 
[Bug][Categories]                                       Adding a model in category model not possible<br> 
[Bug][Categories]                                       Free IPv6 addresses are not shown correctly<br> 
[Bug][Categories]                                       Filter in object lists is not fully shown and cut off<br> 
[Bug][Categories]                                       Custom category on overview page causes the last category to disappear from the overview page<br> 
[Bug][Categories]                                       Category lists - Make all attributes selectable (part 2)<br> 
[Bug][Categories]                                       Reminder warranty not displayed when almost running out<br> 
[Bug][Categories]                                       Duplicate of workplace has identical workplace components<br> 
[Bug][Categories]                                       Assigned clusters displays empty site<br> 
[Bug][Categories]                                       Placeholder %OBJTITLE% is not working in category accounting > Inventory number<br> 
[Bug][Categories]                                       Placeholder insert wrong data when used in template as title<br> 
[Bug][Categories]                                       Attribute visibility not working for General > Description in overview<br> 
[Bug][Categories]                                       Attribute visibility not working for Masterdata > Description<br> 
[Bug][Categories]                                       No selection possible for no selection in the category Monitor (Pivot and Speaker)<br> 
[Bug][Categories]                                       Image order cannot be saved<br> 
[Bug][Categories]                                       Object counter %COUNTER% not counting per object type<br> 
[Bug][Code (Internal)]                                  Data leak when using SQL Injection to manipulate cmdb.status (contributed by Roberto Dagostino)<br> 
[Bug][Code (Internal)]                                  Images in a description fields which were inserted via URL or copy&paste are not displayed<br> 
[Bug][Code (Internal)]                                  Archive and delete buttons is missing in Relations category<br> 
[Bug][Code (Internal)]                                  In a XAMPP installation images are not previewed and inserted in documents<br> 
[Bug][Code (Internal)]                                  XML Import language constant LC__MODULE__IMPORT__IMPORTED_AT is displayed<br> 
[Bug][Code (Internal)]                                  First location in locations tree is clickable<br> 
[Bug][Code (Internal)]                                  Better object browser performance<br> 
[Bug][Code (Internal)]                                  Sanitize input data deletes wysiwyg editor tags<br> 
[Bug][Code (Internal)]                                  Description field is limited to 65,535 characters<br> 
[Bug][Notifications]                                    Interval does not work for notifications<br> 
[Bug][Notifications]                                    E-Mail Template with any property from cagegory (License keys) will result in an empty E-Mail<br> 
[Bug][Notifications]                                    Notification about stored objects is not possible when the CMDB Status is altered<br> 
[Bug][Import]                                           Error when duplicating a object with Color / wave lenghts selected in a Cabling -> Connectors entry<br> 
[Bug][JDisc]                                            Some JDisc changes are declared as source internal<br> 
[Bug][JDisc]                                            JDisc Import - "Only create newly scanned devices" creates duplicates<br> 
[Bug][Lists]                                            Filtering virtual host > yes/no does not work in object lists<br> 
[Bug][Lists]                                            Sorting of IPv6 addresses<br> 
[Bug][Lists]                                            Filter custom fields with date without time in object lists not possible<br> 
[Bug][Lists]                                            Person not displayed in preview when filtering<br> 
[Bug][Lists]                                            Fields that allow only numbers from custom categories are not sorted properly<br> 
[Bug][Lists]                                            Description field in software assignment not displayed in list view<br> 
[Bug][API]                                              Error message when system api user is archived/deleted<br> 
[Bug][API]                                              Creating a location entry via API sets latitude and longitude to 0<br> 
[Bug][API]                                              'type' option for cmdb.objects filter does not work with id<br> 
[Bug][API]                                              "Categories and attributes" contains empty categories like Document and Floorplan<br> 
[Bug][Dashboard]                                        Reports in dashboard cause error when empty<br> 
[Bug][Dashboard]                                        Dashboard "jumps" to the report widget<br> 
[Bug][CMDB settings]                                    Default translation is overwritten<br> 
[Bug][CMDB settings]                                    Translation is empty when deleting a translation<br> 
[Bug][CMDB settings]                                    Custom translation - Changes only visible after reloading the site<br> 
[Bug][Custom categories]                                Wrong sorting for dialog+ field in custom categories<br> 
[Bug][Custom categories]                                Custom category not editable when adding report as a field<br> 
[Bug][Application Redesign]                             Long titles are cut off<br> 
[Bug][Authorization system]                             Date of change is updated without rights via overview<br> 
[Bug][Templates]                                        Counter %OBJID% not working for templates<br> 
[Bug][Templates]                                        Automatic inventory number does not work if objects are created via template.<br> 
[Bug][LDAP]                                             An empty ldap password does not give an error message when tested<br> 
[Bug][LDAP]                                             The ldap-sync import objects with no title<br> 
[Bug][LDAP]                                             Ldap-sync creates a log for every archived user for every sync<br> 
[Bug][Relations]                                        Grouping object type as dropdown does not work correctly<br> 
[Bug][Logbook]                                          SQL Error in logbook when displaying archived view<br> 
[Bug][Migration of all report views in other functions] 500 Error when downloading report view as csv<br> 
[Bug][CSV Import]                                       Description of assigned workstation not imported via CSV<br> 
[Bug][Search]                                           Tenant setting for search is not working
