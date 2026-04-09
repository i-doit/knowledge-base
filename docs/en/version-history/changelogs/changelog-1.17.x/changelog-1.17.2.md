---
search:
  exclude: true
---
# Changelog 1.17.2
<!-- cSpell:disable -->
<!-- markdownlint-disable MD052 -->
[Improvement][Categories]   Option to define if relations to an archived object should be displayed as archived or normal<br>
[Improvement][Console]      Functions for cleaning up objects via i-doit console<br>
[Bug][Lists]                Objects from relations are not shown in object lists<br>
[Bug][Lists]                Filtering in object lists does not find Umlauts<br>
[Bug][Lists]                Object list for network area shows wrong information for the category Network area > Options<br>
[Bug][Lists]                When exporting the Service > Service Components list, the ID in {}<br>
[Bug][JDisc]                JDisc import imports all cloud users<br>
[Bug][JDisc]                Some information to operating systems are only imported into the description field<br>
[Bug][JDisc]                Objects without any details do not get imported via JDisc<br>
[Bug][JDisc]                Using i-doit >=1.16.3 with an older version of JDisc (<5022) fails because of a missing JDisc Table "ipdnsserverconfiguration"<br>
[Bug][System settings]      The configuration for the Standard LDAP group is not to be found in the client settings but in the cross-system settings under System Parameters<br>
[Bug][Categories]           ##COUNT## Placeholder is not evaluated for outputs (connection)<br>
[Bug][Categories]           Selecting a name shema in category "connectors" uses a wrong default<br>
[Bug][Categories]           Connection of logical ports is not saved<br>
[Bug][Categories]           Missing categories to select for overview page<br>
[Bug][Categories]           Purge button in category "location" not available<br>
[Bug][Categories]           Button "Purge" is performed without a security query<br>
[Bug][Categories]           In category "Cabling" > "connectors" object IDs are shown next to cable names<br>
[Bug][Custom categories]    If the value of a Yes-No field of a user-defined category is changed via the overview page, the value is not saved<br>
[Bug][Custom categories]    Dialog+ values are not identified by category<br>
[Bug][Custom categories]    The default value of Yes/No fields is also displayed in the view mode.<br>
[Bug][Custom categories]    Handling for YES/No fields in user-defined categories cannot be changed<br>
[Bug][CMDB settings]        In the Category Services the Dialog Attribut Alias cannot be accessed via the Dialog-Admin<br>
[Bug][CMDB settings]        Add option to object browser configuration to limit the types of creatable objects<br>
[Bug][Dashboard]            The date is not displayed in German on the Dashboard > Welcome widget<br>
[Bug][Code (internal)]      Saved passwords can no longer be issued<br>
[Bug][Code (internal)]      The object list is not loaded if an object has a '(Apostrophe) in its name<br>
[Bug][Code (internal)]      Apostrophes are not escaped<br>
[Bug][Code (internal)]      Extending existing categories with attributes via an add-on the data is not stored<br>
[Bug][Code (internal)]      Attributes in existing categories are not merged correctly when they are extended via an add-on<br>
[Bug][Update]               Update across a major version should not be possible (>=1.16.1 > 1.17.1)<br>
[Bug][CSV Import]           CSV Import: Import of operating system versions via the operating system category<br>
[Bug][Report-Manager]       The table isys_user_session can be read out by SQL report<br>
[Bug][Report-Manager]       Report displays incorrect attributes for the "Managed devices" category<br>
[Bug][Report-Manager]       Report Manager: Using Installed on -> Operating system as condition generates SQL error message<br>
[Bug][Authorization system] By setting a role in contact assignments, the object is opened if the rights are insufficient<br>
[Bug][OCS]                  OCS Import: If Multi Value categories are imported there are duplicate entries<br>
[Bug][Validation]           Validation of unique Dialog Plus fields does not allow editing the Multi-Value entry<br>
[Bug][CMDB]                 In the category Cabling > Connectors the Configured value for the "Naming scheme for output pairs" is not considered<br>
[Bug][LDAP]                 Missing error message if the path to the .ini or the filename is not entered correctly<br>
[Bug][List editing]         Sorting for IPv4 address not possible in list edit<br>
[Bug][Logbook]              Creating a client creates CPU and memory entries in the logbook<br>
