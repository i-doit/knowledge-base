---
search:
  exclude: true
---
# Changelog 23
<!-- cSpell:disable -->
<!-- markdownlint-disable MD052 -->
[Task][Categories]               Change database field type for description fields from TEXT to LONGTEXT<br>
[Task][Code (Internal)]          Rename "Possible next termination date" to "Last possible termination date"<br>
[Improvement][CMDB]              Allow SVG as object image and icon<br>
[Improvement][CMDB]              Create placeholder for the 24h format<br>
[Improvement][Code (Internal)]   Translation of custom content<br>
[Improvement][Relations]         Option to set spacing for menu trees<br>
[Improvement][CSV Import]        Make proper use of profiles in CSV import command<br>
[Improvement][Categories]        Automatically extend contract runtime<br>
[Bug][Lists]                     Filter for Net Zone is not available in the list view<br>
[Bug][Lists]                     Wiring system missing in servers list view configuration<br>
[Bug][Lists]                     Assigned objects is missing in list view configuration<br>
[Bug][Lists]                     Text in list overview is cut off for multi-value fields<br>
[Bug][JDisc]                     JDisc import always sets the DNS server and this is logged in the logbook<br>
[Bug][JDisc]                     JDisc Discovery does not work with HTTP/HTTPS<br>
[Bug][JDisc]                     DBMS and Instance Name are not deleted correctly<br>
[Bug][JDisc]                     JDisc import error when "Use simple database modelling?" is activated<br>
[Bug][JDisc]                     JDisc import via console removes categories and other configurations<br>
[Bug][JDisc]                     JDisc Profile is not saved with default JDisc Server after creating a JDisc Server entry<br>
[Bug][List editing]              Port allocation is deleted when saving in list edit<br>
[Bug][List editing]              Creating a new value for model in list edit causes error<br>
[Bug][List editing]              Default VLAN in list edit not selectable<br>
[Bug][List editing]              Contact assignment does not work for empty values in list edit<br>
[Bug][List editing]              List edit - Headquarters are not displayed for Organizations<br>
[Bug][Code (Internal)]           Deny access to .ini files<br>
[Bug][Code (Internal)]           Fixing config.inc.php content<br>
[Bug][Code (Internal)]           Filter a numeric ID in the object list fails - PHP 8.1<br>
[Bug][Code (Internal)]           After typing 3 characters the focus of the object browser search is changed to the filter<br>
[Bug][Code (Internal)]           Allow opening link in new Tab for HTML Field<br>
[Bug][Code (Internal)]           Wrong icon for export in quick configuration wizard<br>
[Bug][Code (Internal)]           Attachments in racks are not working correctly<br>
[Bug][Code (Internal)]           Switching to location view with a huge amount of objects and locations freezes i-doit<br>
[Bug][Code (Internal)]           Saving Trouble Ticket System (TTS) configuration does not display a save message<br>
[Bug][Code (Internal)]           Uploading custom object images and icons is not possible<br>
[Bug][Code (Internal)]           Fix IP calculation for PHP 8+<br>
[Bug][Code (Internal)]           Saving the 'General' category will always show empty 'creation date' and 'last change' change in logbook<br>
[Bug][Code (Internal)]           PHP 8.1 error when add-on is disabled<br>
[Bug][Code (Internal)]           Objects with empty location category are displayed in location tree<br>
[Bug][Object type configuration] Specific object type categories are missing in selection<br>
[Bug][Object type configuration] Icons for objects are not uploaded<br>
[Bug][Object type configuration] Can't upload .svg for object type icon<br>
[Bug][Report-Manager]            Report Manager using wrong date format which displays wrong results<br>
[Bug][Report-Manager]            Conditions might not be loaded correctly in the report manager<br>
[Bug][Report-Manager]            A Net zone is not selectable for the Report Manager in a updated i-doit installation<br>
[Bug][Report-Manager]            Runtime of a contract is not shown in report results<br>
[Bug][Report-Manager]            No information about active sorting in report manager<br>
[Bug][Report-Manager]            Report Manager - Conditions are deleted when using one condition block<br>
[Bug][Report-Manager]            Different export of a report if a dynamic attribute was added in the report<br>
[Bug][Report-Manager]            Report Logbook is missing colors<br>
[Bug][LDAP]                      If the ldap-sync can not find a User in the search path a php fatal error occurs with php8.0<br>
[Bug][LDAP]                      The LDAP Sync does not log in the loogbok when a Person is recycled<br>
[Bug][LDAP]                      Each ldap-sync generates an object was archived message in the logbook<br>
[Bug][LDAP]                      The ldap-sync resulted in an error<br>
[Bug][LDAP]                      500 Error with SSO login<br>
[Bug][Installation]              The variable passwords_encryption_method is set to %config.security.passwords_encryption_method% after installation<br>
[Bug][CSV Import]                Import of CMDB status via CSV import over console creates new CMDB status instead of using the correct one<br>
[Bug][CSV Import]                CSV Import Profile with console.php does not handle multi value category setting<br>
[Bug][CSV Import]                Import of vertically assigned objects into a rack via CSV import not possible<br>
[Bug][CSV Import]                DateTime fields are not importable via CSV<br>
[Bug][CSV Import]                Imported CMDB Status via CSV are not displayed in the CMDB Settings > CMDB status<br>
[Bug][CSV Import]                CSV Import does not use automatic inventory number<br>
[Bug][CSV Import]                CSV import cache is not flushed before import via console.php<br>
[Bug][CSV Import]                If the --csvSeparator option is not used for the import-csv command "CSV-File empty" is displayed<br>
[Bug][QR-Codes]                  QR-Code not loading when using a load balancer<br>
[Bug][QR-Codes]                  Layout of QR-Codes in report view is irregular<br>
[Bug][Categories]                Using quickpurge for application>installations causes error<br>
[Bug][Categories]                Error when archiving service assignment<br>
[Bug][Categories]                Can't hide objectid<br>
[Bug][Categories]                SQL Error when deleting assigned objects in organizations<br>
[Bug][Categories]                SQL Error when archiving assigned user<br>
[Bug][Categories]                IP addresses are sometimes cut in ip lists<br>
[Bug][H-Inventory]               hinventory import error due to missing entries in constants cache<br>
[Bug][Validation]                CSV Import validation for automatic inventory number<br>
[Bug][Validation]                CSV-Import ignores validation rule "a regular expression"<br>
[Bug][Validation]                Chosen fields do not get highlighted when validation fails<br>
[Bug][Validation]                Show validation error to user if custom dialog+ field is required<br>
[Bug][Validation]                It is not possible to Validate the category Assigned Workplaces<br>
[Bug][Documents]                 Assigned objects not displayed in documents<br>
[Bug][Documents]                 Error when using console.php documents export outisde of i-doit folder<br>
[Bug][Admincenter]               No message if  a Add-on with requirement 1.19 is installed in a pre 1.19 Version<br>
[Bug][Admincenter]               Assigned Object licenses are not counted in the Admin-Center<br>
[Bug][Admincenter]               Admin-Center Password reset throws exception when license missing for more than 30days<br>
[Bug][CMDB-Explorer]             CMDB-Explorer can't export graph<br>
[Bug][CMDB-Explorer]             The relationships are displayed upside down in a GraphML export of the CMDB Explorer<br>
[Bug][Templates]                 Automatic inventory number not working for template<br>
[Bug][Notifications]             Notifications for license expiration do not work correctly<br>
[Bug][Application Redesign]      IP-List cut off when assigning an object<br>
[Bug][CMDB]                      Can not hide some attributes in attribute visibility<br>
[Bug][System tools]              Endless loading when checking mod_rewrite in system overview<br>
[Bug][System settings]           If the System setting Placeholder in lists is below the needed chars the ID of the object is displayed<br>
[Bug][Update]                    Authorization for Update via console.php not possible<br>
[Bug][Update]                    Error message when editing Object Type Configuration<br>
[Bug][Mass editing]              If a license > license key are assigned via the mass change the license key is duplicated<br>
[Bug][Authorization system]      Right Categories in objects with assigned role in contact assignment are not awarded<br>
[Bug][Custom categories]         Displaying 2 variable reports in overview does not work<br>
[Bug][Import]                    Werden Objekte mit Checkmk 2 Add-on Daten via XML Exportiert und in einem Mandanten ohne das Add-on Importiert bricht der Import ab<br>
[Bug][Monitoring]                Monitoring cannot be deactivated with the Active attribute<br>
[Bug][API]                       The Parent entry of a dialog+ field can not identified by title<br>
[Bug][API]                       Category Cabling Connectors > Assigned connector is a Array<br>
