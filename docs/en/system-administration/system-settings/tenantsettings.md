**Table of contents**

*   1[URL settings](#Tenantsettings-URLsettings)
*   2[Display Limits](#Tenantsettings-DisplayLimits)
*   3[Options for IP list](#Tenantsettings-OptionsforIPlist)
*   4[Unique checks (evaluation only during import/export processes!)](#Tenantsettings-Uniquechecks(evaluationonlyduringimport/exportprocesses!))
*   5[Barcodes](#Tenantsettings-Barcodes)
*   6[Graphical interface](#Tenantsettings-Graphicalinterface)
*   7[Maximum length of strings](#Tenantsettings-Maximumlengthofstrings)
*   8[Logbook](#Tenantsettings-Logbook)
*   9[Security](#Tenantsettings-Security)
*   10[Logging](#Tenantsettings-Logging)
*   11[Quickinfo (Link mouseover)](#Tenantsettings-Quickinfo(Linkmouseover))
*   12[CMDB](#Tenantsettings-CMDB)
*   13[LDAP](#Tenantsettings-LDAP)
*   14[Report Manager](#Tenantsettings-ReportManager)
*   15[Search](#Tenantsettings-Search)
*   16[Import](#Tenantsettings-Import)
*   17[Language](#Tenantsettings-Language)
*   18[Maintenance (Add-on)](#Tenantsettings-Maintenance(Add-on))
*   19[Events (Add-on)](#Tenantsettings-Events(Add-on))
*   20[Workflows (Add-on)](#Tenantsettings-Workflows(Add-on))
*   21[Check MK 1 (Add-on)](#Tenantsettings-CheckMK1(Add-on))
*   22[Dokumente (Add-on)](#Tenantsettings-Dokumente(Add-on))

In this area you will find the settings for clients, these apply only to the client in which you are logged in.

  

URL settings
------------

Enter the address of your i-doit installation here if it is different from the installation directory.

![](/download/attachments/113475871/image2021-12-23_15-19-47.png?version=1&modificationDate=1640269188406&api=v2&effects=drop-shadow)

Display Limits
--------------

Here you can configure some display options for the GUI:

Display limit of linked objects in object browser → Maximum number of linked objects to be displayed in object browser  
Display type of linked objects in object browser → Should linked objects be displayed as list or comma separated  
Number of preloaded pages in report list → Number of pages generated when running a report  
Display limit for columns in multivalue categories → Limits the displayed values to the specified length  
Object browser result limit → Maximum number of results in object browser  
Display limit VLANs in port lists → Maximum number of VLANs displayed in port lists  
Display limit Layer-2 nets in port lists → Maximum number of Layer-2 nets displayed in port lists.  
Show only default VLAN in port list → if not all assigned VLANs should be displayed but only the default VLAN  
Display limit of connected ports in port lists → maximum number of connected ports to be displayed in port lists  
Display limit of host addresses → Maximum number of host addresses to be displayed  
Display limit of services in the CMDB Explorer popup → Maximum number of services to be displayed in the CMDB Explorer  
Site path depth limit → This setting allows to specify how many steps should be displayed in the site path. If the number of steps in the path exceeds the limit, the system will truncate the remaining steps from the default

![](/download/attachments/113475871/image2021-12-23_15-20-14.png?version=1&modificationDate=1640269214537&api=v2&effects=drop-shadow)

Options for IP list
-------------------

Here you can define options for the IP lists:

Cache period → specification in seconds until the data is regenerated.  
Ping function → Definition of the tool which should be used for the ping option within the IP lists  
NMAP parameter (for ping) → which ping method should be used

![](/download/attachments/113475871/image2021-12-23_15-21-59.png?version=1&modificationDate=1640269319724&api=v2&effects=drop-shadow)

Unique checks (evaluation only during import/export processes!)
---------------------------------------------------------------

Unique checks ensure that a value such as an IP address can only be used once within the respective client.  
Here you can define for object titles, layer 2 networks, IP addresses and hostnames if they can be used only once.

![](/download/attachments/113475871/image2021-12-23_15-22-14.png?version=1&modificationDate=1640269335326&api=v2&effects=drop-shadow)

Barcodes
--------

Here you can turn on or off the barcode integration available within the object view. Furthermore, you can choose whether you want to use the conventional bar code variant or prefer to use QR codes.

![](/download/attachments/113475871/image2021-12-23_15-22-34.png?version=1&modificationDate=1640269354742&api=v2&effects=drop-shadow)

Graphical interface
-------------------

Here you can define how apprenticeships should be displayed within fields, the location display and the separation of connections.  
Location path orientation → This option specifies whether the location path is displayed right- or left-aligned. A truncation from the above setting will then take place on the right or left side.

![](/download/attachments/113475871/image2021-12-23_15-22-55.png?version=1&modificationDate=1640269375922&api=v2&effects=drop-shadow)

Maximum length of strings
-------------------------

This sets the maximum character length for Dialog-Plus Field Contents, Object Title in Location Path, and Complete Length of a Location Path.

Object title in location path and Complete location path.  
These specify how many characters the entire path or the individual objects in the path may consist of. If object titles or the complete path are longer, they are shortened by "...".

![](/download/attachments/113475871/image2021-12-23_15-23-45.png?version=1&modificationDate=1640269425568&api=v2&effects=drop-shadow)

Logbook
-------

Here you can define whether changes in the logbook should take place in detail (with content of the change) or only an overview (was changed) is created.

![](/download/attachments/113475871/image2021-12-23_15-24-0.png?version=1&modificationDate=1640269440939&api=v2&effects=drop-shadow)

Security
--------

Here you can set the minimum length for i-doit passwords that must be respected.

![](/download/attachments/113475871/image2022-9-5_17-54-54.png?version=1&modificationDate=1662393294823&api=v2&effects=drop-shadow)

Logging
-------

Here you can enable or disable the storage of system error messages in the system log.

![](/download/attachments/113475871/image2021-12-23_15-25-2.png?version=1&modificationDate=1640269502706&api=v2&effects=drop-shadow)

Quickinfo (Link mouseover)
--------------------------

Here you can switch the mouseover function Quickinfo on or off.

![](/download/attachments/113475871/image2021-12-23_15-25-20.png?version=1&modificationDate=1640269521356&api=v2&effects=drop-shadow)

CMDB
----

![](/download/attachments/113475871/image2022-9-5_17-52-45.png?version=1&modificationDate=1662393165602&api=v2&effects=drop-shadow)

LDAP
----

The JSON string for LDAP can be defined here.

![](/download/attachments/113475871/image2021-12-23_15-26-17.png?version=1&modificationDate=1640269577935&api=v2&effects=drop-shadow)

Report Manager
--------------

![](/download/attachments/113475871/image2021-12-23_15-26-42.png?version=1&modificationDate=1640269603036&api=v2&effects=drop-shadow)

Search
------

We currently support several [search methods](/display/en/Search), here one of them can be defined as default

![](/download/attachments/113475871/image2021-12-23_15-27-2.png?version=1&modificationDate=1640269622792&api=v2&effects=drop-shadow)

Import
------

![](/download/attachments/113475871/image2021-12-23_15-27-39.png?version=1&modificationDate=1640269659628&api=v2&effects=drop-shadow)

Language
--------

![](/download/attachments/113475871/image2022-9-5_17-50-21.png?version=1&modificationDate=1662393021720&api=v2&effects=drop-shadow)

Maintenance (Add-on)
--------------------

Here you can define whether an e-mail notification should be sent to the e-mail address of the respective group or whether individual e-mails should be sent to the respective members of the group.

![](/download/attachments/113475871/image2021-12-23_15-28-3.png?version=1&modificationDate=1640269684403&api=v2&effects=drop-shadow)

Events (Add-on)
---------------

![](/download/attachments/113475871/image2021-12-23_15-28-18.png?version=1&modificationDate=1640269698734&api=v2&effects=drop-shadow)

Workflows (Add-on)
------------------

![](/download/attachments/113475871/image2021-12-23_15-28-34.png?version=1&modificationDate=1640269715169&api=v2&effects=drop-shadow)

Check MK 1 (Add-on)
-------------------

![](/download/attachments/113475871/image2021-12-23_15-28-53.png?version=1&modificationDate=1640269734275&api=v2&effects=drop-shadow)

Dokumente (Add-on)
------------------

![](/download/attachments/113475871/image2021-12-23_15-29-7.png?version=1&modificationDate=1640269747998&api=v2&effects=drop-shadow)