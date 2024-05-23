# Database Model

*   [Category Tables 1.10](./category-tables-1.10.md)
*   [Category Tables 1.9](./category-tables-1.9.md)

Most of the settings and contents are saved in a Database Management System (DBMS) by i-doit. [MySQL or MariaDB](../../installation/system-requirements.md) are applied as DBMS. But how is the structure of the i-doit database model?

Basics
------

Some of the over 400 tables of the tenant database are structured with help of a defined names scheme. For example, this is the reason why all i-doit tables have the prefix "isys\_".

Other identifiers for CMDB categories are "cats" for specific categories and "catg" for global categories. They end with the English name of the relevant category and the suffix \_list (for example, _isys\_catg\_model\_list_, _isys\_catg\_memory\_list_). The tables category accounts for 50% of the complete database. Another major part of the tables are dialog lists with which combo boxes are filled. Many of these special lists contain values about type and manufacturer and can be recognized because of their names, such as "type" or "manufacturer".

References (Foreign Keys)
-------------------------

To avoid redundancies within the data scheme the i-doit databases are structured in a relational way and normalized according to the scheme of the third normal form. Foreign keys have a uniform designation (see also the paragraph for "Name Scheme") so that you can recognize them immediately.

Name Scheme
-----------

Besides the designation of the single tables, there is a consistent concept for names which runs through all field designations of the i-doit tables. It starts with the name of the table, followed by the actual name of the column. For example, the id field of the table _isys\_catg\_cpu\_list_ is called:

    isys_catg_cpu_list__id
        /\              /\
     Table CPU            Column (ID)
    isys_catg_cpu_list__title
        /\               /\
     Table CPU            Column(title)

Correspondingly, references to other fields (foreign keys) follow a similar principle. A reference always contains the complete name of the referenced column, so you can always see to which table column the reference points by means of the name.

Example object reference of a category:   

    isys_catg_cpu_list__isys_obj__id
    /\                 /\      /\
    Table CPU      Table Obj.    Column

Objects
-------

Each object is a data record in the _isys\_obj_ table. Characteristics, such as the object type (servers, clients, routers etc.), creation date, status (normal, archived, deleted) and some additional attributes, are recorded in this table. The determination of the object type is carried out through referencing of the table _isys\_obj\_type_ in which the respective characteristics and location (infrastructure, software etc.) are saved.

Global and Specific Categories
------------------------------

Each category is reflected in the database as individual table and is in a 1:n relation to the object. As a basic principle there is a distinction between single values and lists. Single values are simple entries (for example, accounting or form factor) and only one entry per object exists in the table. On the other hand, lists enable multiple entries (CPU, memory, ports ...). In each data record of the global category there is a reference to a single object.

Example for the structure of the global category for a graphic card and global category for IP addresses:

_isys\_catg\_graphic\_list_ is above the foreign key _isys\_catg\_graphic\_list\_\_isys\_obj\_\_id_ in relation to the object. Through the same scheme the IP address is in relation to the object:  
_isys\_catg\_ip\_list_ contains the foreign key _isys\_catg\_ip\_list\_\_isys\_obj\_\_id_.

This results in the following SQL statement for the determination of all objects, their graphic cards and IP details:

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

The same also applies to specific categories. A query for all net details of all net objects looks as follows:

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

**Diagram: Relation between categories and objects**

[![Diagram: Relation between categories and objects](../../assets/images/en/software-development/database-model/1-dm.png)](../../assets/images/en/software-development/database-model/1-dm.png)
**

In the diagram you can see how an object is linked to the global category CPU. This category again accesses Dialog+ entries, such as manufacturer and type. The same happens with the global category Form factor which accesses the form factor type.

[![Diagram: Relation between categories and objects](../../assets/images/en/software-development/database-model/1-dm.png)](../../assets/images/en/software-development/database-model/1-dm.png)

This diagram illustrates the relations of an object to the category "Host address" (IP). The object (for example, Server1) is in the the table _isys\_obj_, the allocated IP addresses are in the table _isys\_catg\_ip\_list_. Because of the detailed level of characteristics of the host address three additional tables are referenced beside the basic details (hostname, address ...):

*   _isys\_connection_, containing the connection to the net object
*   _isys\_ip\_assignment_, determining the form of assignment of the IP (DHCP, static)
*   _isys\_net\_type_, providing the net type

Users, Contacts, Persons, Person Groups
---------------------------------------

Contacts, which may consist both of internal users and external persons in i-doit, are recorded in the table _isys\_obj_ with the respective object types. Internal users differ from external "contacts" only by the filling of content with i-doit authentication parameters (such as user name or password) in the table _isys\_cats\_person\_list_. Groups (and right groups) are saved in _isys\_obj_ by the system_._

Logbook
-------

The logbook consists of entries in the table _isys\_logbook_. This table again has some references to other tables. Important are the following tables:

*   _isys\_logbook\_archive_ (archived logbook entries)
*   _isys\_logbook\_event_ (events, such as created, changed or deleted)
*   _isys\_logbook\_level_ (alarm level for coloured presentation in the logbook and priority)
*   _isys\_logbook\_source_ (where was the event triggered, for example, internal or external source, Nagios etc.)

Overview of the Table
---------------------

CMDB categories

*   isysgui\_catg
*   isysgui\_cats
*   isysgui\_custom

Dialog table for accounting (isys\_catg\_account\_list)

*   isys\_account

Tables for cable connections

*   isys\_cable\_connection
*   isys\_cable\_type

Global categories

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

Specific categories

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

Connections between objects and categories

*   isys\_connection

Contact references

*   isys\_contact
*   isys\_contact\_data\_item
*   isys\_contact\_type

Object combinations

*   isys\_container

Dialog: Type of the mobile contract

*   isys\_cp\_contract\_type

Information about version and revision of the i-doit database

*   isys\_db\_init

Dependencies, type of dependency

*   isys\_dependency
*   isys\_dep\_type

Connection table for drive to storage

*   isys\_drive\_list\_2\_stor\_list

Export templates

*   isys\_export

Dialog: FC port medium

*   isys\_fc\_port\_medium

Files

*   isys\_file\_category (category)
*   isys\_file\_group (group)
*   isys\_file\_physical (path to physical file)
*   isys\_file\_type (file types)

Group administration

*   isys\_group

Connection table of the _rights groups_ to modules, objects, contacts or user sessions

*   isys\_group\_2\_isys\_module
*   isys\_group\_2\_isys\_obj
*   isys\_group\_2\_isys\_person\_intern
*   isys\_group\_2\_isys\_user\_session

Dialog: IP assignment

*   isys\_ip\_assignment

LDAP configuration

*   isys\_ldap (connection to LDAP server)
*   isys\_ldap\_directory (directory types)

T

*   isys\_location\_image

Registration of locked objects (objects in process)

*   isys\_lock

Logbook

*   isys\_logbook
*   isys\_logbook\_archive
*   isys\_logbook\_event
*   isys\_logbook\_event\_class
*   isys\_logbook\_lc\_parameter
*   isys\_logbook\_level
*   isys\_logbook\_source

Dialog: Reaction time for maintenance contracts

*   isys\_maintenance\_reaction\_rate

Dialog: Title of the working memory

*   isys\_memory\_title

Dialog: Title of the model

*   isys\_model\_title

Module administration

*   isys\_module

Monitor

*   isys\_monitor\_resolution
*   isys\_monitor\_unit

Tables for the Nagios configuration

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

Dialogs for specific category Net (Layer 3-Net)

*   isys\_net\_dns\_domain
*   isys\_net\_dns\_server
*   isys\_net\_type
*   isys\_net\_type\_title

Table for CMDB objects (configuration items)

*   isys\_obj

Table for CMDB object types (CI types)

*   isys\_obj\_type

Object type group and connection table of object types to global categories

*   isys\_obj\_type\_2\_isysgui\_catg
*   isys\_obj\_type\_2\_isysgui\_catg\_overview
*   isys\_obj\_type\_group

Table for organisations

*   isys\_organisation\_intern\_iop

Table for contacts

*   isys\_person\_extern
*   isys\_person\_intern
*   isys\_person\_intern\_iop

Port dialogs

*   isys\_port\_duplex
*   isys\_port\_negotiation
*   isys\_port\_speed
*   isys\_port\_standard

Power connection

*   isys\_power\_con
*   isys\_power\_female\_socket
*   isys\_power\_fuse\_ampere
*   isys\_power\_male\_plug

Category General: Intended purpose

*   isys\_purpose

Role and rights administration

*   isys\_right

*   isys\_right\_2\_isys\_role
*   isys\_role

SAN capacity unit

*   isys\_san\_capacity\_unit

Search

*   isys\_search

Service

*   isys\_service\_manufacturer

Raid level

*   isys\_stor\_raid\_level

Tape library

*   isys\_tapelib\_type

Object tree groups (infrastructure, software, others)

*   isys\_tree\_group

Time unit

*   isys\_unit\_of\_time

User locales, sessions and settings

*   isys\_user\_locale
*   isys\_user\_mydoit
*   isys\_user\_session
*   isys\_user\_setting
*   isys\_user\_ui

WAN

*   isys\_wan\_capacity\_unit
*   isys\_wan\_role
*   isys\_wan\_type

Wifi specifications

*   isys\_wf\_type\_2\_wf\_tp
*   isys\_wlan\_auth
*   isys\_wlan\_channel
*   isys\_wlan\_encryption
*   isys\_wlan\_function
*   isys\_wlan\_standard

Tables for workflow management

*   isys\_workflow
*   isys\_workflow\_2\_isys\_workflow\_action
*   isys\_workflow\_action
*   isys\_workflow\_action\_parameter
*   isys\_workflow\_action\_type
*   isys\_workflow\_category
*   isys\_workflow\_status
*   isys\_workflow\_template\_parameter
*   isys\_workflow\_type

Temporary tables

*   temp\_obj\_data

Dialog-Plus Tables
------------------

*   isys\_ac\_air\_quantity\_unit => Air-conditioning system: unit for air quantity

*   isys\_ac\_refrigerating\_capacity\_unit => Air-conditioning system: unit for cooling capacity

*   isys\_guarantee\_period\_unit => Guarantee period: unit

*   isys\_memory\_unit => Memory: unit

*   isys\_stor\_unit => Storage: unit

*   isys\_temp\_unit => Temperature: unit

*   isys\_ac\_type => Air-conditioning system: type

*   isys\_catd\_drive\_type => Drive: type

*   isys\_catg\_cpu\_type => CPU: type

*   isys\_catg\_formfactor\_type => Form factor

*   isys\_cats\_prt\_type => Printer: type

*   isys\_client\_type => Client: type

*   isys\_controller\_type => Controller: type

*   isys\_filesystem\_type => File system

*   isys\_memory\_type => Memory: type

*   isys\_monitor\_type => Monitor: type

*   isys\_port\_type => Port: type

*   isys\_power\_fuse\_type => Power object: fuse type

*   isys\_power\_connection\_type => Power object: type of the connector

*   isys\_room\_type => Room: type

*   isys\_stor\_con\_type => Storage: connection

*   isys\_stor\_type => Storage: device type

*   isys\_ui\_con\_type => Interface: connection type

*   isys\_ui\_plugtype => Interface: plug type

*   isys\_application\_manufacturer => Applications: manufacturer

*   isys\_catg\_cpu\_manufacturer => CPU: manufacturer

*   isys\_controller\_manufacturer => Controller: manufacturer

*   isys\_graphic\_manufacturer => Graphic cards: manufacturer

*   isys\_memory\_manufacturer => Memory: manufacturer

*   isys\_model\_manufacturer => Model: manufacturer

*   isys\_sound\_manufacturer => Sound cards: manufacturer

*   isys\_stor\_manufacturer => Storage: manufacturer

*   isys\_controller\_model => Controller: model

*   isys\_stor\_model => Storage: model

*   isys\_depth\_unit => Form factor: unit

*   isys\_iface\_manufacturer => Interface: manufacturer

*   isys\_iface\_model => Interface: model

*   isys\_pc\_manufacturer => Consumer: manufacturer

*   isys\_pc\_model => Consumer: model

*   isys\_plug\_type => Port: plug

*   isys\_netx\_ifacel\_type => log. interface: type

*   isys\_fc\_port\_type => FC port: type

*   isys\_access\_type => Access: access type