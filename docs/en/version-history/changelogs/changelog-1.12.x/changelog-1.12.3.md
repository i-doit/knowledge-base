---
search:
  exclude: true
---
# Changelog 1.12.3
<!-- cSpell:disable -->
<!-- markdownlint-disable MD052 -->
[Improvement][Admincenter] Create tenants without root MySQL user<br>
[Improvement][Code (internal)] Notification popups do not vanish on click<br>
[Improvement][System settings] Option to disable object count in object browser<br>
[Bug][Categories] Duplicates when saving entries<br>
[Bug][Categories] Existing content of category "files" can not be edited an saved<br>
[Bug][Categories] Subcategory "RAID array/Device" Selection of a controller<br>
[Bug][Categories] The "Next possible cancellation date" attribute of the "Contract" category will not be recalculated<br>
[Bug][Categories] IP Helper addresses cannot be created via the overview page<br>
[Bug][Categories] Layer 3 nets cannot be duplicated correctly<br>
[Bug][Categories] Default gateway missing in IPv6 networks (Layer 3)<br>
[Bug][Categories] Sort Attribute by numeric values<br>
[Bug][Categories] Saving the object list resets the column width<br>
[Bug][Categories] Removed wrong button "New" in category "service logbook"<br>
[Bug][Categories] SQL error "foreign key constraint failes" when assigning a headquarters to an organization<br>
[Bug][Categories] All Service Managers are displayed in the overview page of the Service Categories<br>
[Bug][Categories] Find out and fix wrong selects in dialog properties<br>
[Bug][Categories] The category "assigned objects" does not behave like a multi-value category.<br>
[Bug][LDAP] Duplicate assignment of person to person group via LDAP<br>
[Bug][LDAP] LDAP Login via HOTP<br>
[Bug][LDAP] Login with LDAPS not possible<br>
[Bug][LDAP] No LDAP authentication possible after update<br>
[Bug][Lists] Pagination returns an error starting from page 3 or 4<br>
[Bug][Lists] Custom Show categories "MultiValue" in category lists<br>
[Bug][Lists] Filtering of drop down fields in object lists not possible<br>
[Bug][Lists] Subcategory "RAID Array" incorrect calculation of capacity<br>
[Bug][Lists] Objekt-list configuration table does not contain any values<br>
[Bug][JDisc] The loading icon does not disappear in Firefox after a scan over the JDisc Discovery category has been completed.<br>
[Bug][System settings] LDAP Config in the client settings<br>
[Bug][System settings] Passwords can not be decrypted<br>
[Bug][System settings] Incorrect forwarding after editing in Dialog+ Admin<br>
[Bug][System settings] The setting "logbook.changes.multivalue-threshold" affects all tenants<br>
[Bug][i-doit Licensing 2.0] Buyers license loses its validity<br>
[Bug][i-doit Licensing 2.0] License error after update because of add-on licensing logic<br>
[Bug][i-doit Licensing 2.0] Add-On icons are not displayed correctly in licence overview<br>
[Bug][Licence settings] i-doit can be used without licensing<br>
[Bug][Licence settings] Validation dates of licenses always equal the current time after updating i-doit<br>
[Bug][Update] Update of i-doit Open only possible with errors<br>
[Bug][Print view] Wrong data in print view of category "accounting"<br>
[Bug][Print view] Print view incomplete in the category "contact assignment"<br>
[Bug][Print view] Calculation of the guarantee in the print preview is not correct<br>
[Bug][Objects] Can not duplicate the "People" object type<br>
[Bug][Mass editing] Not possible to edit templates for mass changes<br>
[Bug][Code (internal)] Object view is cleared<br>
[Bug][List editing] No list editing possible if Global Validation is set up.<br>
[Bug][List editing] List editing of inputs or outputs not possible with ##COUNTER##<br>
[Bug][List editing] List edit does not consider person, who made the last change to show in category "General"<br>
[Bug][List editing] Release the link "Purchased from:" in the Accounting category.<br>
[Bug][List editing] List-edit: Sub-categories of the category "Layer 2 network" are missing<br>
[Bug][List editing] List editing of object screens not possible<br>
[Bug][List editing] List editing of category rack / cabinet not possible<br>
[Bug][List editing] Editing service assignment via list edit throws error<br>
[Bug][List editing] List editing of user-defined Multi-Value categories<br>
[Bug][List editing] Category "Workplace components" can not be used via the list edit<br>
[Bug][List editing] Category "Assigned workplaces" can not be used via listedit<br>
[Bug][List editing] List Editing of Date Fields of User Defined Categories<br>
[Bug][OCS] OCS Import: Incorrect assignment of networks in single-IP networks<br>
[Bug][Search] Inconsistent indexing for custom categories<br>
[Bug][License installation (i-doit)] Wrong values for licence duration and end date in licence widget<br>
[Bug][Report-Manager] Specific category "Middleware" not available for output in report manager<br>
[Bug][Report-Manager] Process report-based notifications with field placeholders in report<br>
[Bug][Report-Manager] Error when using a placeholder for the current date<br>
[Bug][Report-Manager] Cable connections are not completely displayed in the report (Connection)<br>
[Bug][Report-Manager] Lengths in reports are converted<br>
[Bug][Report-Manager] Self-created SQL reports are not executed if one or more spaces are at the end of the query.<br>
[Bug][API] Don't link empty organization to person<br>
[Bug][API] cmdb.category.create and .update handle unit attributes differently when those are not explicitly set<br>
[Bug][API] Fix to link IP address with network port via API<br>
[Bug][Templates] Default Template is not used for objects, created via object browser<br>
[Bug][Installation] Grant DB user remote access to databases if external DBMS is used<br>
[Bug][CMDB] Contact assignments are lost during duplication<br>
[Bug][CMDB] Wrong display of netto capacity of raid device under local storage<br>
[Bug][CMDB] Filtering by empty string leads to error in object browser configuration<br>
[Bug][CMDB] Broken icon for "object group"<br>
[Bug][CMDB] License Widget displays no or incorrect data<br>
[Bug][Dashboard] Widget: Appearance of many bookmarks leads to a corrupt view<br>
[Bug][CSV Import] CSV import object matching via console import not possible<br>
[Bug][CSV Import] Not neccessary option to import length unit in csv import<br>
[Bug][Export] CSV export displays capacity of devices incorrectly<br>
[Bug][Relations] Display of wrong type in CMDB-Explorer<br>
[Bug][Relations] Relationship cannot be established<br>
[Bug][Admincenter] Creating a new tenant also creates a duplicated MySQL user with identical name<br>
[Bug][Admincenter] Delete clients with the authorized user<br>
[Bug][CMDB-Explorer] CMDB explorer shows relations from entries in custom categories which are archived or deleted<br>
[Bug][Authorization system] Missing sorting in suggestion area of selection for persons/person groups in rights configuration<br>
[Bug][Authorization system] Object Browser ignores the rights of the user<br>
