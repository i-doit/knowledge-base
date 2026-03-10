---
search:
  exclude: true
---

# Changelog 38
<!-- cSpell:disable -->
[Task][Installation]                 Check the needed rights for the i-doit database user<br>
[Task][Code (Internal)]              Refactor usages of isys_component_filemanager<br>
[Task][Code (Internal)]              Allow downloads from virtual files (by passing file-content) for "DownloadType" callbacks<br>
[Improvement][Search]                Search mac addresses cisco style or plain hex<br>
[Improvement][Code (Internal)]       Support MariaDB 11.8<br>
[Bug][CMDB]                          Allow searches for shortened IPv6 addresses<br>
[Bug][CMDB]                          Save position in rack changed from the overview page<br>
[Bug][CMDB]                          Option "open newly created object" causes error when duplicating with a validation violation<br>
[Bug][CMDB]                          Check for net-collisions for IPv6 nets always shows a collision when creating IPv6 net.<br>
[Bug][CMDB]                          Language constants are displayed in the Object info of the CMDB-Explorer (Add-on)<br>
[Bug][Logbook]                       Logbook shows unexpected numeric entries after editing multi-value custom category values<br>
[Bug][Logbook]                       No logbook entries for changes made to category database assignment<br>
[Bug][Code (Internal)]               Memory exception when adding object to assignment category<br>
[Bug][Code (Internal)]               Display specific error message on login page<br>
[Bug][Code (Internal)]               Resolve CKEditor clipboard-image-handling-disabled errors in the browser console<br>
[Bug][Code (Internal)]               Net and address range differentiate when saved and immediately closed<br>
[Bug][Code (Internal)]               TypeError: Cannot read properties of undefined (reading 'store')<br>
[Bug][Code (Internal)]               Object type icons from old tenant are still displayed after changing tenant<br>
[Bug][Code (Internal)]               Do not use the relative path to extras - mass change and relationship<br>
[Bug][Code (Internal)]               Wrong translation at en.inc.php<br>
[Bug][Code (Internal)]               Attribute settings Unique (globally) does not work in the same object for IPv4 address<br>
[Bug][Report-Manager]                Prevent position in rack from not showing results at report for vertically positioned objects<br>
[Bug][Report-Manager]                Fix condition Date of change equals DATE for reports<br>
[Bug][Report-Manager]                Property "Assigned to connector" and "Assigned object" from category "Power consumer" not usable in reports<br>
[Bug][Report-Manager]                Selecting relation overview attribute for a report causes 500 error when previewed or viewed (memory exhaust)<br>
[Bug][Report-Manager]                Report Manager uses the wrong operator when there is a condition involving multiple objects<br>
[Bug][Report-Manager]                Accessing the report manager with insufficient rights causes a 500 error<br>
[Bug][Report-Manager]                Show all entries for database hierarchy schemes at reports<br>
[Bug][Report-Manager]                Do load the report list quickly<br>
[Bug][Permission system]             Person group members do not inherit initial person group rights correctly<br>
[Bug][On-Premise to Cloud Migration] Tenant import fails when --with-tenant-settings is used<br>
[Bug][Categories]                    Add title for each object in the object assigning box<br>
[Bug][Categories]                    Save emptied Dialog+ multi selection field<br>
[Bug][CMDB settings]                 Do not overwrite Location View settings when opening object browser<br>
[Bug][CMDB settings]                 Fix attribute settings for "needs to be ..." cases<br>
[Bug][Lists]                         Show all IP addresses at port overview category<br>
[Bug][Lists]                         Rename "Object title (Assigned SIM cards)" attribute to "Assigned SIM cards (Assigned SIM cards)" for Object lists<br>
[Bug][List editing]                  Service components is missing at attribute selection for list view configuration<br>
[Bug][List editing]                  Description field from Model category is displayed in List edit<br>
[Bug][List editing]                  List edit does not display Stacking Ports<br>
[Bug][List editing]                  Do not throw php error when list editing custom multiple row textfield<br>
[Bug][CMDB-Explorer]                 HTML Links in File assignment containing & get changed<br>
[Bug][LDAP]                          Use the unique identifier to match persons via LDAP sync when it is set<br>
[Bug][Category folders]              Elements are not reappearing after resetting search string in 'move element' context<br>
[Bug][Update]                        i-doit allows update despite installed incompatible add-on<br>
[Bug][CSV Import]                    Fix the "Adopt empty values" option for CSV imports<br>
[Bug][CSV Import]                    Assigning two object browser columns at csv mapping causes wrong object handling<br>
[Bug][CSV Import]                    Using multi valued categories option with "comma-seperated" or "row" uses first entry for empty values<br>
[Bug][Validation]                    IP4/IPv6 Address ranges are not properly being validated<br>
[Bug][Cloud Eval-Journey]            Directly display offline token field when i-doit is offline<br>
[Bug][i-doit SFM / Cloud]            Display the actual error message in the add-on and subscription center<br>
[Bug][JDisc]                         Do not display JDisc option when duplicating a object<br>
[Bug][QR-Codes]                      Size of QR-Code cant be changed<br>
[Bug][System settings]               SMTP password is not encrypted<br>
[Bug][Notifications]                 Despite the threshold value licenses outside the threshold value are also notified
