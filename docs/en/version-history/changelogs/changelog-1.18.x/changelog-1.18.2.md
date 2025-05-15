---
search:
  exclude: true
---
# Changelog 1.18.2
<!-- cSpell:disable -->
<!-- markdownlint-disable MD052 -->
[Task][Code (internal)]                           Change all database tables to "Row Format: Dynamic" in fresh installations<br>
[Improvement][CSV Import]                         The object browser of a custom category should be able to use a special assignment via the model > serial number<br>
[Improvement][Logbook]                            Anonymize logbook entries<br>
[Improvement][Authorization system]               Right assignment based on contact assignment<br>
[Bug][Categories]                                 The alarm level cannot be selected in logbook entries<br>
[Bug][Categories]                                 The attribute "Last revision" of the documents category should be displayed in the object list<br>
[Bug][Categories]                                 IPv6 address is shown as available although it is already in use<br>
[Bug][Categories]                                 Default gateway for the net cannot be set in the host address category<br>
[Bug][Categories]                                 MAC-addresses using seven bytes do not apply to the validation in i-doit and cannot be saved<br>
[Bug][Categories]                                 Stack members not displayed in list view configuration<br>
[Bug][JDisc]                                      JDisc Discovery: Identification of the device by FQDN does not work<br>
[Bug][JDisc]                                      JDisc Import - Rename Interfaces<br>
[Bug][JDisc]                                      Debugging for JDisc Import logs does not work (-vvv)<br>
[Bug][JDisc]                                      Matching of Switch Stacks from JDisc in i-doit<br>
[Bug][API]                                        Can't assign a Person via API request<br>
[Bug][API]                                        Create custom dialog+ entries with relation<br>
[Bug][Notifications]                              Notifications based on roles do not send E-Mails to persons, if a group is assigned with the role<br>
[Bug][Notifications]                              Additional placeholders for the e-mail templates of the notifications<br>
[Bug][Notifications]                              Notifications - Expiration of a certificate period does not work<br>
[Bug][Report-Manager]                             Report Manager: Query for relationships always checks only the master object<br>
[Bug][Report-Manager]                             Older reports that contain an object id or placeholder do not show conditions<br>
[Bug][Report-Manager]                             Operators are missing in a report that is supposed to display free memory (drive)<br>
[Bug][Report-Manager]                             Report Manager - Attribute Of/To causes sql error<br>
[Bug][CMDB settings]                              Object browser configuration for "Layer-2 Net assignment" from category "Port" is missing<br>
[Bug][H-Inventory]                                H-Inventory-Import: Software Assignment relationships are not removed correctly<br>
[Bug][Code (internal)]                            SyncMerger does not work if properties were touched by "mod.cmdb.extendProperties"<br>
[Bug][Code (internal)]                            Relation type property is missing in Reports<br>
[Bug][Code (internal)]                            Login with admin user overwrites credentials of other user<br>
[Bug][Custom categories]                          Custom category horizontal Line requires title<br>
[Bug][Custom categories]                          Info icon for horizontale line is not displayed correctly<br>
[Bug][CMDB]                                       Software assigment - Field "Installed at" adds time when deleting<br>
[Bug][CMDB]                                       Dynamic reports not possible for varaiable reports with placeholder<br>
[Bug][CMDB]                                       Nested multiselect dialog data will not be displayed correctly in view mode<br>
[Bug][Console-base Installation/Update/Licensing] Installing add-ons via Console.php prompts for the parameters despite specifying the parameters<br>
[Bug][Console-base Installation/Update/Licensing] Create tenant via console.php i-doit OPEN<br>
[Bug][OCS]                                        OCS Import: Duplicate entries in the Memory category<br>
[Bug][Search]                                     After a search for content containing "CALL" while the highlighting of the search is active, category content is not shown<br>
[Bug][Logbook]                                    Deleted/Archived users via ldap are not shown in the logbook<br>
[Bug][Print view]                                 Custom categories - yes/no field is displayed uncorrectly in print view<br>
[Bug][List editing]                               List editing for host address > Search domain does not save when values are only deleted (Entry sanitized)<br>
[Bug][List editing]                               List edit - Filter for contact assignment>primary does not work<br>
[Bug][CMDB-Explorer]                              In the GraphML export of the CMDB Explorer data to objects are missing<br>
[Bug][Authorization system]                       Display of inherited rights shows wrong parameter selection<br>
