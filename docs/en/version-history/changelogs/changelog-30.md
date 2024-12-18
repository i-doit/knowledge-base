# Changelog 30

[Task][Update]                        i-doit 30 is only updateable from i-doit 29<br>
[Task][Two-Factor Authentication]     Make TFA only available in i-doit<br>
[Task][Code (Internal)]               Replace all places where the old replace_placeholder method is being used with the new Replacer Component<br>
[Task][Code (Internal)]               Deprecate WYSIWYG Smarty plugin parameter "p_image_upload_handler", please use "fileUploadUrl"<br>
[Task][Code (Internal)]               Deprecate WYSIWYG Smarty plugin parameter "p_image_browser_handler", please use "fileBrowseUrl"<br>
[Task][Code (Internal)]               Update WYSIWYG editor to use proper upload and browse URLs<br>
[Task][CMDB]                          Restructure nested 'Extras' menu<br>
[Task][Console]                       Add additional way to perform i-doit update with Admin-Center credentials<br>
[Task][Validation]                    Add checkbox to attribute settings to delete multiple attributes at once<br>
[Task][CMDB settings]                 Make object type sorting alphabetically for new installations<br>
[Task][License installation (i-doit)] Notification when license is successfully installed<br>
[Improvement][Code (Internal)]        Support MariaDB 10.11<br>
[Improvement][CMDB]                   Add object type to list of "Assigned Objects (person groups)" (in Organization)<br>
[Improvement][Validation]             Create a configuration page to combine validation and attribute visibility<br>
[Improvement][JDisc]                  JDisc - AccessPoint Filter<br>
[Improvement][JDisc]                  Import of power state from JDisc<br>
[Improvement][JDisc]                  Ignore default MAC addresses<br>
[Improvement][JDisc]                  More information about the reason for a failed connection to the JDisc Server<br>
[Bug][Lists]                          Date field info when searching with all field option<br>
[Bug][Lists]                          Filter for reports is not properly removed<br>
[Bug][Lists]                          Cannot edit list view for assigned clusters<br>
[Bug][Report-Manager]                 Dates in reports are not sorted correct for german language<br>
[Bug][Report-Manager]                 Using != operator for dialog+ fields does not include empty(Null) objects<br>
[Bug][Report-Manager]                 500error when selecting certain report in object browser<br>
[Bug][Report-Manager]                 Location path LIKE %...% not working correctly<br>
[Bug][Report-Manager]                 CSV or TXT file from report displaying breaks<br>
[Bug][Report-Manager]                 Duplicating reports causes umlaut at title to be displayed as HTML<br>
[Bug][Report-Manager]                 Report for contact assignment shows 0 matches but actually has matches<br>
[Bug][Report-Manager]                 Report Manager - Service Relation (description) causes sql error<br>
[Bug][Report-Manager]                 Templates are not displayed when the for e.g. Nagios Add-on is installed<br>
[Bug][Report-Manager]                 The encoding of umlauts are displayed in report titles at the database<br>
[Bug][Code (Internal)]                Counter are not counting<br>
[Bug][Code (Internal)]                After importing a custom language a login is no longer possible<br>
[Bug][Code (Internal)]                Object type icons are not loaded<br>
[Bug][Code (Internal)]                Wrong date format popup is displayed for every date attribute in the object list<br>
[Bug][Code (Internal)]                Installing an add-on displays a unhelpful error message when the rights are not set correct<br>
[Bug][Code (Internal)]                Date of change not updated for contact assignment(role/primary)<br>
[Bug][Code (Internal)]                FQDN Objekt Matching Key finds duplicate entries<br>
[Bug][Code (Internal)]                Javascript rounding error in 'Memory' category<br>
[Bug][Code (Internal)]                Existing templates takes a long time to load<br>
[Bug][Code (Internal)]                Wiki-URL icon messes up field width at accounting<br>
[Bug][Code (Internal)]                Correctly display changed logbook values<br>
[Bug][API]                            SQL error when reading dialog via API<br>
[Bug][API]                            Enable user to fill custom dialog+ fields via push api<br>
[Bug][API]                            When using cmdb.dialog.read for category = C__CATG__IP and property = zone, one level too much and a empty entry is output<br>
[Bug][API]                            Do not re-create already existing multi dialog+ values<br>
[Bug][CMDB]                           Properties "Size" and "Max size" in category "Databases" contain unrounded values<br>
[Bug][CMDB]                           Saving tags in the general category via api does not create a logbook entry<br>
[Bug][CMDB]                           Segmented slots are not displayed correctly in the rack<br>
[Bug][CMDB]                           Segment does not provide slots for the back<br>
[Bug][CMDB]                           Syntax error when loading a ip network in the host address category<br>
[Bug][CMDB]                           Saving ip address with space at the end api<br>
[Bug][CMDB]                           Creating CPU with frequency 3.5 and no unit via API leads to wrong data<br>
[Bug][CMDB]                           Allow user to access person group objects<br>
[Bug][CMDB]                           The end of a contract field can not be emptied<br>
[Bug][CMDB]                           Cluster service assignment throws TypeError<br>
[Bug][CMDB]                           It is not possible to save memory values above 90.95 TB<br>
[Bug][CMDB]                           Network - Port entries are not displayed on overview page<br>
[Bug][CMDB]                           Category 'Certificate' does not use labels<br>
[Bug][Security]                       Cache rights after a change<br>
[Bug][CSV Import]                     Assigning a Layer 3-Net to a Layer 2 Net via Layer-3-net assignment leads to general error<br>
[Bug][CSV Import]                     Setting "Multi-valued categories" to row for CSV Import causes some data to not get imported<br>
[Bug][CSV Import]                     Umlauts and special characters are not processed correctly in the csv export of the list view when in the description field<br>
[Bug][CSV Import]                     CSV-Import does not count objects correctly<br>
[Bug][System settings]                The expert settings show some internal settings<br>
[Bug][LDAP]                           Cant login via ldap when ldap.default-group has a string value<br>
[Bug][LDAP]                           LDAP sync groupsynchronisation fills up log without any changes<br>
[Bug][LDAP]                           Import_rooms via ldap-sync does not work with camelCase<br>
[Bug][JDisc]                          Import objects from JDisc objects via file with IPv6 addresses<br>
[Bug][JDisc]                          Importing a JDisc profile leads to foreign key constraint fails error message which is not logged<br>
[Bug][JDisc]                          Import does not include all IPv4 addresses when Import type for DHCP IP addresses is set to with update<br>
[Bug][JDisc]                          JDisc mapping error<br>
[Bug][JDisc]                          default cmdb status is not set during jdisc import<br>
[Bug][JDisc]                          JDISC Profile Setting "Include Clusters" does have no affect<br>
[Bug][Import]                         A duplicate is created despite the error message from validation<br>
[Bug][Import]                         XML Import runs into php error<br>
[Bug][Custom categories]              Custom categories are viewed as empty in the category tree when newly filled and when hide button is active<br>
[Bug][Custom categories]              Show html code from html editor correctly<br>
[Bug][Validation]                     Textarea in 'Address' category can not save multiline content<br>
[Bug][Validation]                     Categories and attributes missing for cluster when hiding attributes<br>
[Bug][Validation]                     Do not allow user to resize attribute settings table<br>
[Bug][Validation]                     Validate entries for standard LDAP group -> Only numbers and commas<br>
[Bug][Validation]                     Reset attribute settings filter correctly<br>
[Bug][Console]                        PHP error when command configuration is malformed<br>
[Bug][Console]                        Adjust result status of tenant creation command<br>
[Bug][Notifications]                  Some placeholder not working in notifications<br>
[Bug][Notifications]                  Use default value if setSortDirection is not set<br>
[Bug][List editing]                   TypeError when list editing objects<br>
[Bug][QR-Codes]                       Using report for a QR Code template not possible at object browser<br>
[Bug][QR-Codes]                       HTML in QR-Code templates not saved<br>
[Bug][Categories]                     There are two Specific categories Installation available<br>
[Bug][Categories]                     Rename category "Chassis cabeling" to "Chassis cabling"<br>
[Bug][Categories]                     Rename category and folder "Database hierachy" to "Database hierarchy"<br>
[Bug][CMDB settings]                  Allow user to use breadcrumb when editing object types<br>
[Bug][CMDB settings]                  The description of "Display passwords" setting is incorrect<br>
[Bug][Templates]                      Mass change template information can be dragged vertically<br>
[Bug][Dashboard]                      Info popups when removing widgets is not going away<br>
[Bug][CMDB-Explorer]                  Image file in the CMDB-Explorer is not loaded<br>
