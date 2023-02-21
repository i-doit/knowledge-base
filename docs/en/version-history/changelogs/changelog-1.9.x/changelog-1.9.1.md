# Changelog 1.9.1

[Improvement]   Make Editing Of A New Entry In A DialogPlus Field Possible Directly After It Has Been Added  
[Improvement]   Improved loop check on cabling  
[Improvement]   Horizontal scrollbar in JDisc profiles immediately visible  
[Improvement]   Switch Stacking: Port overwiew of all member switches  
[Improvement]   Switch Stacking: logic ports spanning over multiple switches  
[Improvement]   Export of Host Aliases via Check_MK export  
[Improvement]   JDisc import does not refresh object title  
[Improvement]   Segmentation of RUs in Racks  
[Improvement]   Attribute "e-mail-address" of category "persons" not selectable in csv-import  
[Improvement]   Newly created entries are validated via the Dialog-Admin  
[Improvement]   Mass-change: Configuration for logging  
[Improvement]   List edit: Renamed option "All objects" in "All entries"  
[Improvement]   Global search: higher order display of object title and object in condition normal  
[Improvement]   Configuration for maximum number of attributes in object lists  
[Improvement]   Administration of tags in dialog-admin  
[Improvement]   Notify when creating a custom category, if there is a duplicated constant  
[Improvement]   New view: Open and unused cables  
[Improvement]   In category operating system only operating systems can be chosen  
[Improvement]   Remove button in logbook view  
[Change]        Removal of Single-Sign-On languages selection in configuration  
[Change]        Remove multiple selection in report views  
[Bug]           Profile In QCW Cannot be Uploaded If All Other Profiles Have Been Deleted Before  
[Bug]           Changing A Non-selfdefined Objecttype Group Is Possible With QCW  
[Bug]           Wrong presentation of object links in Safari  
[Bug]           Transfer of exported Check_MK configuration failed with error message  
[Bug]           Relation between input und output will be lost while duplicating  
[Bug]           Error when saving category accounting  
[Bug]           Some Catagories Are Displayed In Objekt Tree But Not In QCW  
[Bug]           Hidden Categories In QCW Are Also Not Displayed For Other Object Types  
[Bug]           Editing of service filters with id > 10 not possible  
[Bug]           object matching does not work with casesensitivity  
[Bug]           List edit - Category "Operating system": Assigned licenses cannot be changed  
[Bug]           Category "Service assignment": It is not possible to select self-defined object types with the category "Service"  
[Bug]           Attribute "on device" has multiple selections in csv import  
[Bug]           LC__UNIVERSAL__USED_BY is not translated  
[Bug]           Report Manager: View 'Objects in location (list format)' cannot be downloaded  
[Bug]           List edit - Category 'Accounting': Saving Date of invoice shows error 'Field value is invalid.'  
[Bug]           Language Constants Are Displayed In English Version Under System Settings  
[Bug]           Editing a connector without a connection always creates a new cable  
[Bug]           Language Constant Is Displayed in A Cable Object in Category Fiber/lead  
[Bug]           Category Relationship: Relationship direction changes when an entry is saved without changing the direction.  
[Bug]           Category "Location" / "Operating System" / "Accounting": Objects, which have been selected from a search show a wrong location  
[Bug]           Read-only for background in CMDB-explorer profiles does not work properly  
[Bug]           Category host address: If the assigned network is resolved, the global v4 network is not selected automatically  
[Bug]           Devices are not always displayed in the left menu tree in the Combined View  
[Bug]           Javascript errors prohibit large IP lists to be displayed  
[Bug]           Selection for the location views is not displayed after login.  
[Bug]           Edit Button Under LDAP Directories does not work  
[Bug]           Mixed Language under LDAP Directories  
[Bug]           The default filter of an object list is not applied as soon as the list is called.  
[Bug]           OCS Import: Category model is not updated on switch devices within a stack  
[Bug]           Import: Model and manufacturer from the category Model are not connected correctly  
[Bug]           Settings Of Categories To Display On Overview Page Are Deleted By Switching No-Yes  
[Bug]           Assigning rooms to ldap-users does not work  
[Bug]           Start and enddate of licenses are always empty in list view  
[Bug]           Report Manager: Condition with a unit causes an error message if it is defined as the first condition  
[Bug]           ZenDesk Testbug 0815  
[Bug]           View "CMDB status changes" does not list every change  
[Bug]           Overwriting mode of csv import causes mutiple cables to be created  
[Bug]           Referring a controller to a hard drive not possible via csv import  
[Bug]           Cable connection is not displayed when Cable length is not given  
[Bug]           Import of Yes/No Fields in custom categories via csv import not possible  
[Bug]           install.sh does not work  
[Bug]           In JDisc profiles you may select "i-doit status" as CMDB status  
[Bug]           Attribute "Fiber / wave length" ist falsch und sollte "Colour / Wavelength" heißen  
[Bug]           Connections of manually created cables are not displayed in list view  
[Bug]           Duplicating content of custom categories with dialog+ fields using language constants duplicates entries in dialog+  
[Bug]           Duplicating content of custom categories while using language constants also duplicates the category itself  
[Bug]           Report Manager: Specific category "Assigned objects"  from object type "Organization" can not be selected  
[Bug]           ID-display is doubled in widget "Object information list" if ID is chosen as an attribute.  
[Bug]           Object type gets created while clicking cancel  
[Bug]           Value of calbe length is modified by x10 when opend in list edit  
[Bug]           host address is not imported as primary  
[Bug]           Lists: Numeric format makes no difference  
[Bug]           Licenses: Total costs have too many decimals  
[Bug]           Error message after login in category with currency field  
[Bug]           Search won't find any results when searching for WYSIWYG fields from multi value categories  
[Bug]           Unable to load notes widget because of its character length  
[Bug]           Incorrect Editing Of A Unknown Object Type Configuration  
[Bug]           Error Message Deleting A Non-Empty Object Type Is Incorrect  
[Bug]           Report manager copies object title into assigned object information  
[Bug]           Attribute "primary e-mail-address" in csv-import selectable  
[Bug]           HTML-Tags at e-mail address at category e-mail-addresses  
[Bug]           Multiple dialog entries have no status  
[Bug]           Category "port" does not show IP address in table  
[Bug]           Dialog+ attributes without proper names  
[Bug]           Dialog entries for "Contract: Contract Type" have "0" as constants  
[Bug]           Dialog Admin does not save entries for "Module TTS: Ticket Systems"  
[Bug]           Configuration of QR-codes for specific object types is not displayed correctly, when configuration is opened  
[Bug]           Icon for selection of linked attributes in "assigned workstation" is missing in report manager  
[Bug]           Wrong presentation of assigned license in software assignment, when trying to edit an existing entry  
[Bug]           An Error Message appears trying to Deinstall an Extension in AdminCenter  
[Bug]           Filter in list 'JDisc profiles' does not work  
[Bug]           View in multi value catory 'object group' defective  
[Bug]           Assigned objects in files can not be clicked  
[Bug]           Upload of a new file version removes category and commentary  
[Bug]           Can not embed specific category "Files > Assignes objects" in a list  
[Bug]           Search does not find content of description, if it contains special characters  
[Bug]           Wiring: Connection does show IEC power connector by default instead of "-"  
[Bug]           Connections are being duplicated rather than saved  
[Bug]           Wrong presentation of dates in category "contract assignment"  
[Bug]           Wrong inventory no. used in the QR-code printer, when using %COUNTER% for automatic generation of no.  
[Bug]           If the search is added as a bookmark, only text will appear under my-doit  
[Bug]           Deleted categories still shown in lists  
[Bug]           Created bookmarks in my-doit link to dashboard  
[Bug]           Category "listener" does not list connections  
[Bug]           Reports with date fields from user defined categories does not recognize country specific date format  
[Bug]           Calculation of raid capacity faulty while changing storage unit or capacity  
[Bug]           Objects will be created before saving, no cleanup is happening on cancel  