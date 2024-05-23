# Changelog 1.17.2

[Improvement][Categories]   Option to define if relations to an archived object should be displayed as archived or normal  
[Improvement][Console]      Functions for cleaning up objects via i-doit console  
[Bug][Lists]                Objects from relations are not shown in object lists  
[Bug][Lists]                Filtering in object lists does not find Umlauts  
[Bug][Lists]                Object list for network area shows wrong information for the category Network area > Options  
[Bug][Lists]                When exporting the Service > Service Components list, the ID in {}  
[Bug][JDisc]                JDisc import imports all cloud users  
[Bug][JDisc]                Some information to operating systems are only imported into the description field  
[Bug][JDisc]                Objects without any details do not get imported via JDisc  
[Bug][JDisc]                Using i-doit >=1.16.3 with an older version of JDisc (<5022) fails because of a missing JDisc Table "ipdnsserverconfiguration"  
[Bug][System settings]      The configuration for the Standard LDAP group is not to be found in the client settings but in the cross-system settings under System Parameters  
[Bug][Categories]           ##COUNT## Placeholder is not evaluated for outputs (connection)  
[Bug][Categories]           Selecting a name shema in category "connectors" uses a wrong default  
[Bug][Categories]           Connection of logical ports is not saved  
[Bug][Categories]           Missing categories to select for overview page  
[Bug][Categories]           Purge button in category "location" not available  
[Bug][Categories]           Button "Purge" is performed without a security query  
[Bug][Categories]           In category "Cabling" > "connectors" object IDs are shown next to cable names  
[Bug][Custom categories]    If the value of a Yes-No field of a user-defined category is changed via the overview page, the value is not saved  
[Bug][Custom categories]    Dialog+ values are not identified by category  
[Bug][Custom categories]    The default value of Yes/No fields is also displayed in the view mode.  
[Bug][Custom categories]    Handling for YES/No fields in user-defined categories cannot be changed  
[Bug][CMDB settings]        In the Category Services the Dialog Attribut Alias cannot be accessed via the Dialog-Admin  
[Bug][CMDB settings]        Add option to object browser configuration to limit the types of creatable objects  
[Bug][Dashboard]            The date is not displayed in German on the Dashboard > Welcome widget  
[Bug][Code (internal)]      Saved passwords can no longer be issued  
[Bug][Code (internal)]      The object list is not loaded if an object has a '(Apostrophe) in its name  
[Bug][Code (internal)]      Apostrophes are not escaped  
[Bug][Code (internal)]      Extending existing categories with attributes via an add-on the data is not stored  
[Bug][Code (internal)]      Attributes in existing categories are not merged correctly when they are extended via an add-on  
[Bug][Update]               Update across a major version should not be possible (>=1.16.1 > 1.17.1)  
[Bug][CSV Import]           CSV Import: Import of operating system versions via the operating system category  
[Bug][Report-Manager]       The table isys_user_session can be read out by SQL report  
[Bug][Report-Manager]       Report displays incorrect attributes for the "Managed devices" category  
[Bug][Report-Manager]       Report Manager: Using Installed on -> Operating system as condition generates SQL error message  
[Bug][Authorization system] By setting a role in contact assignments, the object is opened if the rights are insufficient  
[Bug][OCS]                  OCS Import: If Multi Value categories are imported there are duplicate entries  
[Bug][Validation]           Validation of unique Dialog Plus fields does not allow editing the Multi-Value entry  
[Bug][CMDB]                 In the category Cabling > Connectors the Configured value for the "Naming scheme for output pairs" is not considered  
[Bug][LDAP]                 Missing error message if the path to the .ini or the filename is not entered correctly  
[Bug][List editing]         Sorting for IPv4 address not possible in list edit  
[Bug][Logbook]              Creating a client creates CPU and memory entries in the logbook  