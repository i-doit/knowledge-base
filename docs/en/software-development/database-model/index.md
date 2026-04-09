---
title: "Database Model"
description: "i-doit stores most content and settings in a Database Management System (DBMS)."
icon:
status:
lang: en
---
# Database Model

i-doit stores most content and settings in a Database Management System (DBMS). [MySQL or MariaDB](../../installation/system-requirements.md) are used as the DBMS. But how is the database model of i-doit structured?

Fundamentals
---------------

Some of the over 400 tables in the tenant database are structured according to a defined naming scheme. For example, all i-doit tables have the prefix "isys\_".

CMDB categories follow with the identifier "cats" for specific and "catg" for global categories, ending with the English designation of the respective category and the suffix \_list (e.g., isys\_catg\_model\_list, isys\_catg\_memory\_list). The category tables make up 50% of the entire database. An additional large portion of the tables are dialog lists, which are used to fill combo boxes. Many of these special lists contain values for type and manufacturer and are thus recognizable by names such as "type" or "manufacturer".

References (Foreign Keys)
-------------------------------

To avoid redundancy within the data schema, the i-doit databases are relationally structured and normalized according to the third normal form. Foreign keys have a consistent naming convention (see the section "Naming Scheme"), making them immediately apparent.

Naming Scheme
------------

In addition to the naming of individual tables, a consistent naming scheme runs through all field names of i-doit tables. It begins with the name of the table, followed by the actual column name. Thus, the ID field of the table isys\_catg\_cpu\_list is, for example:

    isys_catg_cpu_list__id
    /\              /\
    Table CPU            Column (ID)
    isys_catg_cpu_list__title
    /\               /\
    Table CPU            Column (Title)


References to other fields (foreign keys) follow an analogous principle. A reference always includes the complete name of the referenced column, so the name always reveals which table column the reference points to.

Example of an object reference in a category:


    isys_catg_cpu_list__isys_obj__id
    /\                 /\      /\
    Table CPU    Table Obj.   Column

Objects
-------

Every object is a record in the table _isys\_obj_. This table stores properties such as the object type (server, client, router, etc.), the creation date, the status (Normal, Archived, Deleted), and some additional attributes. The object type is determined by referencing the table _isys\_obj\_type_, which contains the respective configuration and location (infrastructure, software, etc.).

Global and Specific Categories
----------------------------------

Each category is represented in the database as its own table and has a 1:n relationship to the object. A fundamental distinction is made between lists and single values. Single values are simple entries (e.g., Accounting or Form Factor), of which exactly one entry per object exists in the table. Lists, on the other hand, allow multiple entries (CPU, Memory, Ports, etc.). In each record of a global category, an individual object is referenced.

Example structure of the global category Graphics Card and the global category IP Addresses:

isys\_catg\_graphic\_list is related to the object via the foreign key isys\_catg\_graphic\_list\_\_isys\_obj\_\_id. Via the same schema, the IP address is connected to the object:
isys\_catg\_ip\_list contains the foreign key isys\_catg\_ip\_list\_\_isys\_obj\_\_id.

This results in the following SQL statement to retrieve all objects with their graphics card and IP information:

    SELECT
    isys_obj__title,
    isys_catg_graphic_list__title,
    isys_catg_graphic_list__memory,
    isys_memory_unit__title,
    isys_catg_ip_list__hostname,
    isys_catg_ip_list__address
    FROM isys_obj
    INNER JOIN isys_catg_graphic_list
    ON isys_catg_graphic_list__isys_obj__id = isys_obj__id
    INNER JOIN isys_memory_unit
    ON isys_catg_graphic_list__isys_memory_unit__id = isys_memory_unit__id
    INNER JOIN isys_catg_ip_list
    ON isys_catg_ip_list__isys_obj__id = isys_obj__id

Specific categories behave the same way. The query for network information of all network objects would look as follows:

    SELECT
    isys_obj__title,
    isys_cats_net_list__address,
    isys_cats_net_list__dhcp_range_from,
    isys_cats_net_list__dhcp_range_to,
    isys_cats_net_list__dhcp,
    isys_cats_net_list__def_gw
    FROM
    isys_cats_net_list
    INNER JOIN isys_obj
    ON isys_cats_net_list__isys_obj__id = isys_obj__id

**Diagram: Relationship between categories and objects**

**[![datenbankmodell-beziehungen](../../assets/images/de/software-entwicklung/datenbank-modell/1-dm.png)](../../assets/images/de/software-entwicklung/datenbank-modell/1-dm.png)
**

The graphic shows how an object is linked to the global category CPU. This category in turn accesses Dialog+ entries such as the manufacturer and the type. The same happens with the global category Form Factor, which accesses the form factor type.

[![datenbankmodell-formfaktor](../../assets/images/de/software-entwicklung/datenbank-modell/2-dm.png)](../../assets/images/de/software-entwicklung/datenbank-modell/2-dm.png)

This illustration explains the relationships of an object to the "Host Address" (IP) category. The object itself (e.g., server1) is located in the table isys\_obj. The assigned IP addresses are in the table isys\_catg\_ip\_list. Due to the detailed configuration depth of the host address, three additional tables are referenced besides the basic information (hostname, address, etc.):

*   isys\_connection, which contains the connection to the network object
*   isys\_ip\_assignment, which determines the assignment type of the IP (DHCP, static)
*   isys\_net\_type, which returns the network type

Users, Contacts, Persons, Person Groups
---------------------------------------------

Contacts, which in i-doit can encompass both internal users and external persons, are stored in the table _isys\_obj_ with the corresponding object type. Internal users differ from external "contacts" only by the population of the i-doit authentication parameters (specifically: username, password) in the table _isys\_cats\_person\_list_. Groups (and permission groups) are stored by the system in _isys\_obj_.

Logbook
-------

The logbook consists of entries in the table isys\_logbook. This table again contains some references to other tables. The following tables are important:

*   isys\_logbook\_archive (Archived log entries)
*   isys\_logbook\_event (Events such as Created, Changed, Deleted, etc.)
*   isys\_logbook\_level (Alarm level for color display in the logbook and urgency)
*   isys\_logbook\_source (Origin of the event, e.g., internal, external, Nagios, etc.)

Table Overview
-----------------

CMDB Categories

*   isysgui\_catg
*   isysgui\_cats
*   isysgui\_custom

Dialog Table for Accounting (isys\_catg\_account\_list)

*   isys\_account

Cabling Tables

*   isys\_cable\_connection
*   isys\_cable\_type

Global Categories

*   isys\_catg\_access\_list
*   isys\_catg\_accounting\_list
*   isys\_catg\_application\_list
*   isys\_catg\_backup\_list
*   isys\_catg\_connector\_list
*   isys\_catg\_contact\_list
*   isys\_catg\_controller\_list
*   isys\_catg\_cpu\_frequency
*   isys\_catg\_cpu\_list
*   isys\_catg\_distributor
*   isys\_catg\_drive\_list
*   isys\_catg\_emergency\_plan\_list
*   isys\_catg\_fc\_port\_list
*   isys\_catg\_file\_list
*   isys\_catg\_formfactor\_list
*   isys\_catg\_global\_category
*   isys\_catg\_global\_list
*   isys\_catg\_graphic\_list
*   isys\_catg\_idic\_list
*   isys\_catg\_image\_list
*   isys\_catg\_ip\_list
*   isys\_catg\_ip\_list\_2\_isys\_catg\_port\_list
*   isys\_catg\_ip\_list\_2\_isys\_netp\_ifacel
*   isys\_catg\_lic\_list
*   isys\_catg\_location\_list
*   isys\_catg\_logb\_list
*   isys\_catg\_maintenance\_list
*   isys\_catg\_manual\_list
*   isys\_catg\_memory\_list
*   isys\_catg\_model\_list
*   isys\_catg\_nagios
*   isys\_catg\_nagios\_list
*   isys\_catg\_netp\_list
*   isys\_catg\_netv
*   isys\_catg\_netv\_list
*   isys\_catg\_net\_type\_list
*   isys\_catg\_odep\_list
*   isys\_catg\_overview\_list
*   isys\_catg\_port\_list
*   isys\_catg\_port\_list\_2\_isys\_netp\_con
*   isys\_catg\_port\_list\_2\_isys\_netp\_ifacel
*   isys\_catg\_power\_consumer\_list
*   isys\_catg\_sanpool\_list
*   isys\_catg\_sound\_list
*   isys\_catg\_stor\_list
*   isys\_catg\_ui\_list
*   isys\_catg\_version\_list
*   isys\_catg\_virtual\_list
*   isys\_catg\_virtual\_machine\_list
*   isys\_catg\_workflow\_list

Specific Categories

*   isys\_cats\_access\_point\_list
*   isys\_cats\_ac\_list
*   isys\_cats\_application\_list
*   isys\_cats\_building\_list
*   isys\_cats\_client\_list
*   isys\_cats\_cp\_contract\_list
*   isys\_cats\_distributor
*   isys\_cats\_emergency\_plan\_list
*   isys\_cats\_enclosure\_list
*   isys\_cats\_file\_list
*   isys\_cats\_group\_list
*   isys\_cats\_lic\_group
*   isys\_cats\_lic\_item
*   isys\_cats\_lic\_list
*   isys\_cats\_location\_generic\_list
*   isys\_cats\_maintenance\_list
*   isys\_cats\_monitor\_list
*   isys\_cats\_net\_list
*   isys\_cats\_pobj\_list
*   isys\_cats\_prt\_emulation
*   isys\_cats\_prt\_list
*   isys\_cats\_prt\_paper
*   isys\_cats\_room\_list
*   isys\_cats\_router\_list
*   isys\_cats\_san\_list
*   isys\_cats\_service\_list
*   isys\_cats\_switch\_fc\_list
*   isys\_cats\_switch\_net\_list
*   isys\_cats\_tapelib\_list
*   isys\_cats\_wan\_list
*   isys\_cats\_ws\_net\_type\_list

Connections between Objects and Categories

*   isys\_connection

Contact References

*   isys\_contact
*   isys\_contact\_data\_item
*   isys\_contact\_type

Object Combinations

*   isys\_container

Dialog: Mobile Contract Type

*   isys\_cp\_contract\_type

Information about Version and Revision of the i-doit Database

*   isys\_db\_init

Dependencies, Dependency Type

*   isys\_dependency
*   isys\_dep\_type

Link Table for Drive to Storage

*   isys\_drive\_list\_2\_stor\_list

Export Templates

*   isys\_export

Dialog: FC Port Medium

*   isys\_fc\_port\_medium

Files

*   isys\_file\_category (Category)
*   isys\_file\_group (Grouping)
*   isys\_file\_physical (Path to physical file)
*   isys\_file\_type (File types)

Group Management

*   isys\_group

Link Table of Permission Groups to Modules, Objects, Contacts, or User Sessions

*   isys\_group\_2\_isys\_module
*   isys\_group\_2\_isys\_obj
*   isys\_group\_2\_isys\_person\_intern
*   isys\_group\_2\_isys\_user\_session

Dialog: IP Assignment

*   isys\_ip\_assignment

LDAP Configuration

*   isys\_ldap (Connection to LDAP server)
*   isys\_ldap\_directory (Directory types)

Location Image

*   isys\_location\_image

Registration of Locked Objects (Objects being edited)

*   isys\_lock

Logbook

*   isys\_logbook
*   isys\_logbook\_archive
*   isys\_logbook\_event
*   isys\_logbook\_event\_class
*   isys\_logbook\_lc\_parameter
*   isys\_logbook\_level
*   isys\_logbook\_source

Dialog: Reaction Times for Maintenance Contracts

*   isys\_maintenance\_reaction\_rate

Dialog: Memory Name

*   isys\_memory\_title

Dialog: Model Designation

*   isys\_model\_title

Module Management

*   isys\_module

Monitor

*   isys\_monitor\_resolution
*   isys\_monitor\_unit

Tables for Nagios Configuration

*   isys\_nagios\_commands
*   isys\_nagios\_config
*   isys\_nagios\_contacts
*   isys\_nagios\_contact\_groups
*   isys\_nagios\_dependency
*   isys\_nagios\_host\_escalations
*   isys\_nagios\_nagioshosts
*   isys\_nagios\_ndo
*   isys\_nagios\_service
*   isys\_nagios\_service\_escalations
*   isys\_nagios\_timeperiods

Dialogs for Specific Category Network (Layer 3 Network)

*   isys\_net\_dns\_domain
*   isys\_net\_dns\_server
*   isys\_net\_type
*   isys\_net\_type\_title

Table for CMDB Objects (Configuration Items)

*   isys\_obj

Table for CMDB Object Types (CI Types)

*   isys\_obj\_type

Object Type Group and Link Table of Object Types to Global Categories

*   isys\_obj\_type\_2\_isysgui\_catg
*   isys\_obj\_type\_2\_isysgui\_catg\_overview
*   isys\_obj\_type\_group

Table for Organizations

*   isys\_organisation\_intern\_iop

Table for Contacts

*   isys\_person\_extern
*   isys\_person\_intern
*   isys\_person\_intern\_iop

Port Dialogs

*   isys\_port\_duplex
*   isys\_port\_negotiation
*   isys\_port\_speed
*   isys\_port\_standard

Power Connection

*   isys\_power\_con
*   isys\_power\_female\_socket
*   isys\_power\_fuse\_ampere
*   isys\_power\_male\_plug

Category General: Purpose

*   isys\_purpose

Role and Permission Management

*   isys\_right

*   isys\_right\_2\_isys\_role
*   isys\_role

SAN Capacity Unit

*   isys\_san\_capacity\_unit

Search

*   isys\_search

Service

*   isys\_service\_manufacturer

RAID Level

*   isys\_stor\_raid\_level

Tape Library

*   isys\_tapelib\_type

Object Tree Groups (Infrastructure, Software, Other)

*   isys\_tree\_group

Time Unit

*   isys\_unit\_of\_time

User Locales, Sessions, and Settings

*   isys\_user\_locale
*   isys\_user\_mydoit
*   isys\_user\_session
*   isys\_user\_setting
*   isys\_user\_ui

WAN

*   isys\_wan\_capacity\_unit
*   isys\_wan\_role
*   isys\_wan\_type

WiFi Specifications

*   isys\_wf\_type\_2\_wf\_tp
*   isys\_wlan\_auth
*   isys\_wlan\_channel
*   isys\_wlan\_encryption
*   isys\_wlan\_function
*   isys\_wlan\_standard

Tables for Workflow Management

*   isys\_workflow
*   isys\_workflow\_2\_isys\_workflow\_action
*   isys\_workflow\_action
*   isys\_workflow\_action\_parameter
*   isys\_workflow\_action\_type
*   isys\_workflow\_category
*   isys\_workflow\_status
*   isys\_workflow\_template\_parameter
*   isys\_workflow\_type

Temporary Tables

*   temp\_obj\_data

Dialog Plus Tables
--------------------

*   isys\_ac\_air\_quantity\_unit => Air conditioning: Air volume unit

*   isys\_ac\_refrigerating\_capacity\_unit => Air conditioning: Cooling capacity unit

*   isys\_guarantee\_period\_unit => Warranty period: Unit

*   isys\_memory\_unit => Memory: Unit

*   isys\_stor\_unit => Storage: Unit

*   isys\_temp\_unit => Temperature: Unit

*   isys\_ac\_type => Air conditioning: Type

*   isys\_catd\_drive\_type => Drive: Type

*   isys\_catg\_cpu\_type => CPU: Type

*   isys\_catg\_formfactor\_type => Form Factor

*   isys\_cats\_prt\_type => Printer: Type

*   isys\_client\_type => Client: Type

*   isys\_controller\_type => Controller: Type

*   isys\_filesystem\_type => File System

*   isys\_memory\_type => Memory: Type

*   isys\_monitor\_type => Monitor: Type

*   isys\_port\_type => Port: Type

*   isys\_power\_fuse\_type => Power Object: Fuse Type

*   isys\_power\_connection\_type => Power Object: Socket Type

*   isys\_room\_type => Room: Type

*   isys\_stor\_con\_type => Storage: Connection

*   isys\_stor\_type => Storage: Device Type

*   isys\_ui\_con\_type => Interface: Connection Type

*   isys\_ui\_plugtype => Interface: Plug Type

*   isys\_application\_manufacturer => Applications: Manufacturer

*   isys\_catg\_cpu\_manufacturer => CPU: Manufacturer

*   isys\_controller\_manufacturer => Controller: Manufacturer

*   isys\_graphic\_manufacturer => Graphics Cards: Manufacturer

*   isys\_memory\_manufacturer => Memory: Manufacturer

*   isys\_model\_manufacturer => Model: Manufacturer

*   isys\_sound\_manufacturer => Sound Cards: Manufacturer

*   isys\_stor\_manufacturer => Storage: Manufacturer

*   isys\_controller\_model => Controller: Model

*   isys\_stor\_model => Storage: Model

*   isys\_depth\_unit => Form Factor: Unit

*   isys\_iface\_manufacturer => Interface: Manufacturer

*   isys\_iface\_model => Interface: Model

*   isys\_pc\_manufacturer => Consumer: Manufacturer

*   isys\_pc\_model => Consumer: Model

*   isys\_plug\_type => Port: Plug

*   isys\_netx\_ifacel\_type => Logical Interface: Type

*   isys\_fc\_port\_type => FC Port: Type

*   isys\_access\_type => Access: Access Type
