# Changelog 1.18

[Improvement][Password Encryption 2.0] New Cryptohashing for user passwords<br>
[Improvement][Custom categories]       New field type "Number field" in the custom categories<br>
[Improvement][Custom categories]       Dependencies for dialog+ fields in custom categories<br>
[Improvement][Custom categories]       Use variables in custom categories<br>
[Improvement][System settings]         Free defineable COUNTER variables<br>
[Improvement][Import]                  Net zones are not assigned to objects imported from JDisc<br>
[Bug][CSV Import]                      Export custom categories of type report in csv<br>
[Bug][Authorization system]            Archive and delete right has no effect for "objects below a logical location".<br>
[Bug][Authorization system]            Creating a report changes the permissions system and assigns new permissions<br>
[Bug][Authorization system]            Users automatically get full access to objects they create<br>
[Bug][Authorization system]            Right assignment for object type "Container" possible<br>
[Bug][Authorization system]            Improved naming for rights, permitting access to content below a defined object<br>
[Bug][Authorization system]            Clean up for permissions, relating to objects below a physical/logical location<br>
[Bug][Authorization system]            Sometimes, the same permission is shown more than once<br>
[Bug][Authorization system]            User settings: Presence not configurable<br>
[Bug][Authorization system]            The Layer 2 Net > Assigned ports category for Layer 2 Net objects cannot be edited<br>
[Bug][Categories]                      The attribute "Last revision" of the documents category should be displayed in the object list<br>
[Bug][Categories]                      Unneccessary information about missing create right when editing an object<br>
[Bug][Categories]                      List of assigned object of a license cannot be sorted<br>
[Bug][Categories]                      Net areas are not loaded in the filters for the object list view<br>
[Bug][Categories]                      New mode selectable per default for ports ("Stacking")<br>
[Bug][Categories]                      The position of the label of the empty values filter is not related to the checkboxes<br>
[Bug][Categories]                      Sorting ports and connectors in the cabling browser<br>
[Bug][Categories]                      If contract assignments are detached an empty category entry with "{}" as the designation remains<br>
[Bug][JDisc]                           Do not create new person objects but link existing ones<br>
[Bug][JDisc]                           New JDisc custom attribute type is not imported to i-doit<br>
[Bug][JDisc]                           Import of address assignment field from JDisc<br>
[Bug][Report-Manager]                  Report does not display attributes when outputting the "People" subcategory from the "Organization" category<br>
[Bug][Report-Manager]                  Report Manager does not replace Placeholder<br>
[Bug][Report-Manager]                  Report Manager: Parameters in the condition change when opening a report<br>
[Bug][Report-Manager]                  Wrong values when listing information from category Computing resources in a report<br>
[Bug][Report-Manager]                  Improved information about report type during creation<br>
[Bug][API]                             Person Groups cannot be added via Person -> Persons group memberships<br>
[Bug][Custom categories]               In custom categories at the Object-Relationship field type the relationship type cannot be saved<br>
[Bug][OCS]                             OCS Import: If Multi Value categories are imported there are duplicate entries<br>
[Bug][Code (internal)]                 "Changes" parameter of the signals contains no array<br>
[Bug][Code (internal)]                 500er Error if no object browser entry is selected for editing<br>
[Bug][Code (internal)]                 Legend of Net disappears when scrolling down<br>
[Bug][Code (internal)]                 Database Folder icons are not displayed<br>
[Bug][LDAP]                            For an LDAP filter with * as a placeholder no objects are imported<br>
[Bug][Search]                          Global search for "%aa" causes SQL Error<br>
[Bug][Search]                          Search finds archived/deleted objects, even if they are excluded by system setting, if their content is modified after changing the state of the object to archived/deleted<br>
[Bug][Search]                          If the object type of an object is changed, the object will be found with both object types in the search<br>
[Bug][Import]                          LDAP/AD import ignores the default template for object types<br>
[Bug][Import]                          Exported objects that are installed vertically in cabinets are mapped incorrectly by XML import<br>
[Bug][Import]                          CSV import by comma-separated multi-value attributes of a user-defined category<br>
[Bug][Import]                          Importing SIM cards - cards with linked cellular phones does not create a relationship<br>
[Bug][List editing]                    Custom categories that have a report field cannot be opened in list editing<br>
[Bug][Validation]                      Duplicate objects bypasses the configured validation<br>
[Bug][Validation]                      Description field in custom categories cannot be set to mandatory in the validation<br>
[Bug][Logbook]                         Logbook entries of assigned workplace components and assigned workstation are only shown in one direction<br>
[Bug][Lists]                           Sort by roles in groups of people > Members does not sort correctly<br>
[Bug][Lists]                           For solved single relations {} are displayed in the list view<br>
[Bug][Lists]                           Available licenses aren't shown correctly in list view(core-based)<br>
[Bug][Lists]                           In our lists the pager icon for "previous page" is missing<br>
[Bug][CMDB]                            Language constant for the root location does not work everywhere<br>
[Bug][CMDB]                            Propose Passwort variant "Stark" is not translatet into english<br>
[Bug][Objects]                         Changes in categories are not output correctly via the Events add-on<br>
[Bug][CMDB settings]                   Special characters for custom categories with JavaScript fields are cleaned up<br>
[Bug][Object type configuration]       Icons for the object tree are in the wrong folder<br>
[Bug][Notifications]                   Type for notifications in german version<br>
