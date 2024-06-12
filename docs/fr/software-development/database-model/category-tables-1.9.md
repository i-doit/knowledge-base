# Tables de catégorie 1.9 

!!! info "Générer ce contenu automatiquement"

    Vous pouvez créer ce contenu sur votre propre hôte i-doit. Passez le paramètre load=property_infos à l'URL, par exemple: [https://demo.i-doit.com/?load=property_infos](https://demo.i-doit.com/?load=property_infos). Vous devez être connecté.

Global categories
-----------------

### General

#### Table: isys\_catg\_global\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| ID  | int | isys\_obj | isys\_obj\_\_id |     |     |
| Title | text | isys\_obj | isys\_obj\_\_title |     |     |
| Status | int | isys\_catg\_global\_list | isys\_obj\_\_status |     |     |
| Creation date | text | isys\_obj | isys\_obj\_\_created |     |     |
| Created by | text | isys\_obj | isys\_obj\_\_created\_by |     |     |
| Last change | text | isys\_obj | isys\_obj\_\_updated |     |     |
| Last change by | text | isys\_obj | isys\_obj\_\_updated\_by |     |     |
| Purpose | int | isys\_catg\_global\_list | isys\_catg\_global\_list\_\_isys\_purpose\_\_id | isys\_purpose | isys\_purpose\_\_id |
| Category | int | isys\_catg\_global\_list | isys\_catg\_global\_list\_\_isys\_catg\_global\_category\_\_id | isys\_catg\_global\_category | isys\_catg\_global\_category\_\_id |
| SYSID | text | isys\_obj | isys\_obj\_\_sysid |     |     |
| CMDB status | int | isys\_catg\_global\_list | isys\_obj\_\_isys\_cmdb\_status\_\_id | isys\_cmdb\_status | isys\_cmdb\_status\_\_id |
| Object type | int | isys\_catg\_global\_list | isys\_obj\_\_isys\_obj\_type\_\_id | isys\_obj\_type | isys\_obj\_type\_\_id |
| Tags | int | global\_tag | isys\_obj\_\_id | isys\_tag\_2\_isys\_obj | isys\_obj\_\_id |
| Description | text\_area | isys\_obj | isys\_obj\_\_description |     |     |

### Model

#### Table: isys\_catg\_model\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Manufacturer | int | isys\_catg\_model\_list | isys\_catg\_model\_list\_\_isys\_model\_manufacturer\_\_id | isys\_model\_manufacturer | isys\_model\_manufacturer\_\_id |
| Model | int | isys\_catg\_model\_list | isys\_catg\_model\_list\_\_isys\_model\_title\_\_id | isys\_model\_title | isys\_model\_title\_\_id |
| Product ID | text | isys\_catg\_model\_list | isys\_catg\_model\_list\_\_productid |     |     |
| Service Tag | text | isys\_catg\_model\_list | isys\_catg\_model\_list\_\_service\_tag |     |     |
| Serial number | text | isys\_catg\_model\_list | isys\_catg\_model\_list\_\_serial |     |     |
| Firmware | text | isys\_catg\_model\_list | isys\_catg\_model\_list\_\_firmware |     |     |
| Description | text\_area | isys\_catg\_model\_list | isys\_catg\_model\_list\_\_description |     |     |

### Form factor

#### Table: isys\_catg\_formfactor\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Form factor | int | isys\_catg\_formfactor\_list | isys\_catg\_formfactor\_list\_\_isys\_catg\_formfactor\_type\_\_id | isys\_catg\_formfactor\_type | isys\_catg\_formfactor\_type\_\_id |
| Rack units | int | isys\_catg\_formfactor\_list | isys\_catg\_formfactor\_list\_\_rackunits |     |     |
| Dimension unit | int | isys\_catg\_formfactor\_list | isys\_catg\_formfactor\_list\_\_isys\_depth\_unit\_\_id | isys\_depth\_unit | isys\_depth\_unit\_\_id |
| Width | float | isys\_catg\_formfactor\_list | isys\_catg\_formfactor\_list\_\_installation\_width |     |     |
| Height | float | isys\_catg\_formfactor\_list | isys\_catg\_formfactor\_list\_\_installation\_height |     |     |
| Depth | float | isys\_catg\_formfactor\_list | isys\_catg\_formfactor\_list\_\_installation\_depth |     |     |
| Weight | float | isys\_catg\_formfactor\_list | isys\_catg\_formfactor\_list\_\_installation\_weight |     |     |
| weight unit | int | isys\_catg\_formfactor\_list | isys\_catg\_formfactor\_list\_\_isys\_weight\_unit\_\_id | isys\_weight\_unit | isys\_weight\_unit\_\_id |
| Description | text\_area | isys\_catg\_formfactor\_list | isys\_catg\_formfactor\_list\_\_description |     |     |

### CPU

#### Table: isys\_catg\_cpu\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Title | text | isys\_catg\_cpu\_list | isys\_catg\_cpu\_list\_\_title |     |     |
| Manufacturer | int | isys\_catg\_cpu\_list | isys\_catg\_cpu\_list\_\_isys\_catg\_cpu\_manufacturer\_\_id | isys\_catg\_cpu\_manufacturer | isys\_catg\_cpu\_manufacturer\_\_id |
| Type | int | isys\_catg\_cpu\_list | isys\_catg\_cpu\_list\_\_isys\_catg\_cpu\_type\_\_id | isys\_catg\_cpu\_type | isys\_catg\_cpu\_type\_\_id |
| CPU frequency | float | isys\_catg\_cpu\_list | isys\_catg\_cpu\_list\_\_frequency |     |     |
| CPU frequency unit | int | isys\_catg\_cpu\_list | isys\_catg\_cpu\_list\_\_isys\_frequency\_unit\_\_id | isys\_frequency\_unit | isys\_frequency\_unit\_\_id |
| CPU cores | int | isys\_catg\_cpu\_list | isys\_catg\_cpu\_list\_\_cores |     |     |
| Description | text\_area | isys\_catg\_cpu\_list | isys\_catg\_cpu\_list\_\_description |     |     |

### Memory

#### Table: isys\_catg\_memory\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Quantity | int | isys\_catg\_memory\_list | isys\_catg\_memory\_list\_\_quantity |     |     |
| Title | int | isys\_catg\_memory\_list | isys\_catg\_memory\_list\_\_isys\_memory\_title\_\_id | isys\_memory\_title | isys\_memory\_title\_\_id |
| Manufacturer | int | isys\_catg\_memory\_list | isys\_catg\_memory\_list\_\_isys\_memory\_manufacturer\_\_id | isys\_memory\_manufacturer | isys\_memory\_manufacturer\_\_id |
| Type | int | isys\_catg\_memory\_list | isys\_catg\_memory\_list\_\_isys\_memory\_type\_\_id | isys\_memory\_type | isys\_memory\_type\_\_id |
| Total capacity | float | isys\_catg\_memory\_list | isys\_catg\_memory\_list\_\_capacity |     |     |
| Capacity | float | isys\_catg\_memory\_list | isys\_catg\_memory\_list\_\_capacity |     |     |
| Memory unit | int | isys\_catg\_memory\_list | isys\_catg\_memory\_list\_\_isys\_memory\_unit\_\_id | isys\_memory\_unit | isys\_memory\_unit\_\_id |
| Description | text\_area | isys\_catg\_memory\_list | isys\_catg\_memory\_list\_\_description |     |     |

### Network

#### Table: isys\_catg\_netp\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Title | text | isys\_catg\_netp\_list | isys\_catg\_netp\_list\_\_title |     |     |
| Manufacturer | int | isys\_catg\_netp\_list | isys\_catg\_netp\_list\_\_isys\_iface\_manufacturer\_\_id | isys\_iface\_manufacturer | isys\_iface\_manufacturer\_\_id |
| Model | int | isys\_catg\_netp\_list | isys\_catg\_netp\_list\_\_isys\_iface\_model\_\_id | isys\_iface\_model | isys\_iface\_model\_\_id |
| Serial number | text | isys\_catg\_netp\_list | isys\_catg\_netp\_list\_\_serial |     |     |
| Slotnumber | text | isys\_catg\_netp\_list | isys\_catg\_netp\_list\_\_slotnumber |     |     |
| Description | text\_area | isys\_catg\_netp\_list | isys\_catg\_netp\_list\_\_description |     |     |

### Power consumer

#### Table: isys\_catg\_pc\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Title | text | isys\_catg\_pc\_list | isys\_catg\_pc\_list\_\_title |     |     |
| Active | int | isys\_catg\_pc\_list | isys\_catg\_pc\_list\_\_active |     |     |
| Manufacturer | int | isys\_catg\_pc\_list | isys\_catg\_pc\_list\_\_isys\_pc\_manufacturer\_\_id | isys\_pc\_manufacturer | isys\_pc\_manufacturer\_\_id |
| Model | int | isys\_catg\_pc\_list | isys\_catg\_pc\_list\_\_isys\_pc\_model\_\_id | isys\_pc\_model | isys\_pc\_model\_\_id |
| Volt | text | isys\_catg\_pc\_list | isys\_catg\_pc\_list\_\_volt |     |     |
| Watt | text | isys\_catg\_pc\_list | isys\_catg\_pc\_list\_\_watt |     |     |
| Ampere | text | isys\_catg\_pc\_list | isys\_catg\_pc\_list\_\_ampere |     |     |
| BTU | text | isys\_catg\_pc\_list | isys\_catg\_pc\_list\_\_btu |     |     |
| Target object | int | output | isys\_catg\_pc\_list\_\_isys\_catg\_connector\_list\_\_id |     |     |
| Assigned to connector | int | connected | isys\_catg\_pc\_list\_\_isys\_catg\_connector\_list\_\_id |     |     |
| Assigned Input/Output | int | isys\_catg\_pc\_list | isys\_catg\_connector\_list\_\_isys\_catg\_connector\_list\_\_id |     |     |
| Description | text\_area | isys\_catg\_pc\_list | isys\_catg\_pc\_list\_\_description |     |     |

### Interface

#### Table: isys\_catg\_ui\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Title | text | isys\_catg\_ui\_list | isys\_catg\_ui\_list\_\_title |     |     |
| Connection type | int | isys\_catg\_ui\_list | isys\_catg\_ui\_list\_\_isys\_ui\_con\_type\_\_id | isys\_ui\_con\_type | isys\_ui\_con\_type\_\_id |
| Plug type | int | isys\_catg\_ui\_list | isys\_catg\_ui\_list\_\_isys\_ui\_plugtype\_\_id | isys\_ui\_plugtype | isys\_ui\_plugtype\_\_id |
| Connected to | int | connected | isys\_catg\_ui\_list\_\_isys\_catg\_connector\_list\_\_id |     |     |
| Assigned to connector | int | connected | isys\_catg\_ui\_list\_\_isys\_catg\_connector\_list\_\_id |     |     |
| Assigned Input/Output | int | isys\_catg\_ui\_list | isys\_catg\_connector\_list\_\_isys\_catg\_connector\_list\_\_id |     |     |
| Description | text\_area | isys\_catg\_ui\_list | isys\_catg\_ui\_list\_\_description |     |     |
| Relation direction | int | isys\_catg\_ui\_list | isys\_catg\_connector\_list\_\_isys\_catg\_relation\_list\_\_id |     |     |

### Software assignment

#### Table: isys\_catg\_application\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Application | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |
| Type | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_catg\_application\_type\_\_id | isys\_catg\_application\_type | isys\_catg\_application\_type\_\_id |
| Priority | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_catg\_application\_priority\_\_id | isys\_catg\_application\_priority | isys\_catg\_application\_priority\_\_id |
| Assigned license | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_cats\_lic\_list\_\_id | isys\_cats\_lic\_list | isys\_cats\_lic\_list\_\_id |
| Assigned license key | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_cats\_lic\_list\_\_id | isys\_cats\_lic\_list | isys\_cats\_lic\_list\_\_id |
| Database schema | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_catg\_relation\_list\_\_id | isys\_cats\_database\_access\_list | isys\_cats\_database\_access\_list\_\_id |
| Service | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_catg\_relation\_list\_\_id | isys\_catg\_its\_components\_list | isys\_catg\_its\_components\_list\_\_id |
| Variant | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_cats\_app\_variant\_list\_\_id | isys\_cats\_app\_variant\_list | isys\_cats\_app\_variant\_list\_\_id |
| Version number | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_catg\_version\_list\_\_id | isys\_catg\_version\_list | isys\_catg\_version\_list\_\_id |
| Inherit nagios services | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_bequest\_nagios\_services |     |     |
| Description | text\_area | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_description |     |     |

### Access

#### Table: isys\_catg\_access\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Primary access URL | text | isys\_catg\_access\_list | isys\_catg\_access\_list\_\_url |     |     |
| Title | text | isys\_catg\_access\_list | isys\_catg\_access\_list\_\_title |     |     |
| Access type | int | isys\_catg\_access\_list | isys\_catg\_access\_list\_\_isys\_access\_type\_\_id | isys\_access\_type | isys\_access\_type\_\_id |
| Host\[:Port\]/URL | text | isys\_catg\_access\_list | isys\_catg\_access\_list\_\_url |     |     |
| Host\[:Port\]/URL | text | isys\_catg\_access\_list | isys\_catg\_access\_list\_\_id |     |     |
| Primary? | int | isys\_catg\_access\_list | isys\_catg\_access\_list\_\_primary |     |     |
| Description | text\_area | isys\_catg\_access\_list | isys\_catg\_access\_list\_\_description |     |     |

### Backup

#### Table: isys\_catg\_backup\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Title | text | isys\_catg\_backup\_list | isys\_catg\_backup\_list\_\_title |     |     |
| Backed up by | int | isys\_catg\_backup\_list | isys\_catg\_backup\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |
| Backup type | int | isys\_catg\_backup\_list | isys\_catg\_backup\_list\_\_isys\_backup\_type\_\_id | isys\_backup\_type | isys\_backup\_type\_\_id |
| Cycle | int | isys\_catg\_backup\_list | isys\_catg\_backup\_list\_\_isys\_backup\_cycle\_\_id | isys\_backup\_cycle | isys\_backup\_cycle\_\_id |
| Path to save | text | isys\_catg\_backup\_list | isys\_catg\_backup\_list\_\_path\_to\_save |     |     |
| Description | text\_area | isys\_catg\_backup\_list | isys\_catg\_backup\_list\_\_description |     |     |

### Emergency plan assignment

#### Table: isys\_catg\_emergency\_plan\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Title | text | isys\_catg\_emergency\_plan\_list | isys\_catg\_emergency\_plan\_list\_\_title |     |     |
| Assigned emergency plan | int | isys\_catg\_emergency\_plan\_list | isys\_catg\_emergency\_plan\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |
| Time need | text | isys\_catg\_emergency\_plan\_list | isys\_catg\_emergency\_plan\_list\_\_id |     |     |
| Time need (Unit) | text | isys\_catg\_emergency\_plan\_list | isys\_catg\_emergency\_plan\_list\_\_id |     |     |
| Date of emergency practice | text | isys\_catg\_emergency\_plan\_list | isys\_catg\_emergency\_plan\_list\_\_id |     |     |
| Description | text\_area | isys\_catg\_emergency\_plan\_list | isys\_catg\_emergency\_plan\_list\_\_description |     |     |

### Files

#### Table: isys\_catg\_file\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| File | int | isys\_catg\_file\_list | isys\_catg\_file\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |
| Revision | int | isys\_catg\_file\_list | isys\_file\_version\_\_revision |     |     |
| HTTP-Link (extern) | text | isys\_catg\_file\_list | isys\_catg\_file\_list\_\_link |     |     |
| Description | text\_area | isys\_catg\_file\_list | isys\_catg\_file\_list\_\_description |     |     |

### Contact assignment

#### Table: isys\_catg\_contact\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Contact | int | isys\_catg\_contact\_list | isys\_catg\_contact\_list\_\_id |     |     |
| Primary contact | int | isys\_catg\_contact\_list | isys\_catg\_contact\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |
| Contact | int | isys\_catg\_contact\_list | isys\_catg\_contact\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |
| Primary | int | isys\_catg\_contact\_list | isys\_catg\_contact\_list\_\_primary\_contact |     |     |
| Role | int | isys\_catg\_contact\_list | isys\_catg\_contact\_list\_\_isys\_contact\_tag\_\_id | isys\_contact\_tag | isys\_contact\_tag\_\_id |
| Contact | text | isys\_catg\_contact\_list | isys\_catg\_contact\_list\_\_isys\_connection\_\_id |     |     |
| Description | text\_area | isys\_catg\_contact\_list | isys\_catg\_contact\_list\_\_description |     |     |

### Logbook

#### Table: isys\_catg\_logb\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Date | date\_time | isys\_catg\_logb\_list | isys\_logbook\_\_date |     |     |
| Object | int | isys\_catg\_logb\_list | isys\_catg\_logb\_list\_\_isys\_obj\_\_id |     |     |
| Event | int | isys\_catg\_logb\_list | isys\_logbook\_\_isys\_logbook\_event\_\_id | isys\_logbook\_event | isys\_logbook\_event\_\_id |
| Source | int | isys\_catg\_logb\_list | isys\_logbook\_\_isys\_logbook\_source\_\_id | isys\_logbook\_source | isys\_logbook\_source\_\_id |
| User | int | isys\_catg\_logb\_list | isys\_logbook\_\_isys\_obj\_\_id |     |     |
| Object type | text | isys\_catg\_logb\_list | isys\_logbook\_\_obj\_type\_static |     |     |
| Category | text | isys\_catg\_logb\_list | isys\_logbook\_\_category\_static |     |     |
| Alarm level | text | isys\_catg\_logb\_list | isys\_logbook\_\_isys\_logbook\_level\_\_id | isys\_logbook\_level | isys\_logbook\_level\_\_id |
| User | text | isys\_catg\_logb\_list | isys\_logbook\_\_user\_name\_static |     |     |
| Event | text | isys\_catg\_logb\_list | isys\_logbook\_\_event\_static |     |     |
| Comment | text | isys\_catg\_logb\_list | isys\_logbook\_\_comment |     |     |
| Changes | text | isys\_catg\_logb\_list | isys\_logbook\_\_changes |     |     |
| Description | text\_area | isys\_catg\_logb\_list | isys\_catg\_logb\_list\_\_description |     |     |
| Access type | int | isys\_catg\_logb\_list | isys\_logbook\_\_isys\_logbook\_reason\_\_id | isys\_logbook\_reason | isys\_logbook\_reason\_\_id |

### Controller

#### Table: isys\_catg\_controller\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Title | text | isys\_catg\_controller\_list | isys\_catg\_controller\_list\_\_title |     |     |
| Type | int | isys\_catg\_controller\_list | isys\_catg\_controller\_list\_\_isys\_controller\_type\_\_id | isys\_controller\_type | isys\_controller\_type\_\_id |
| Manufacturer | int | isys\_catg\_controller\_list | isys\_catg\_controller\_list\_\_isys\_controller\_manufacturer\_\_id | isys\_controller\_manufacturer | isys\_controller\_manufacturer\_\_id |
| Model | int | isys\_catg\_controller\_list | isys\_catg\_controller\_list\_\_isys\_controller\_model\_\_id | isys\_controller\_model | isys\_controller\_model\_\_id |
| Description | text\_area | isys\_catg\_controller\_list | isys\_catg\_controller\_list\_\_description |     |     |

### Location

#### Table: isys\_catg\_location\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Location path | text | isys\_catg\_location\_list | isys\_catg\_location\_list\_\_parentid |     |     |
| Location | int | isys\_catg\_location\_list | isys\_catg\_location\_list\_\_parentid |     |     |
| Assembly | int | isys\_catg\_location\_list | isys\_catg\_location\_list\_\_option |     |     |
| Insertion | int | isys\_catg\_location\_list | isys\_catg\_location\_list\_\_insertion |     |     |
| Position in the rack | int | isys\_catg\_location\_list | isys\_catg\_location\_list\_\_pos |     |     |
| GPS | text | isys\_catg\_location\_list | isys\_catg\_location\_list\_\_gps |     |     |
| Latitude | text | isys\_catg\_location\_list | isys\_catg\_location\_list\_\_gps |     |     |
| Longitude | text | isys\_catg\_location\_list | isys\_catg\_location\_list\_\_gps |     |     |
| Description | text\_area | isys\_catg\_location\_list | isys\_catg\_location\_list\_\_description |     |     |

### Object picture

#### Table: isys\_catg\_image\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Uploaded images | int | isys\_catg\_image\_list | isys\_catg\_image\_list\_\_image\_link |     |     |
| File | text | isys\_catg\_image\_list | isys\_catg\_image\_list\_\_image\_link |     |     |
| Description | text\_area | isys\_catg\_image\_list | isys\_catg\_image\_list\_\_description |     |     |

### Manual assignment

#### Table: isys\_catg\_manual\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Title | text | isys\_catg\_manual\_list | isys\_catg\_manual\_list\_\_title |     |     |
| Manual file | int | isys\_catg\_manual\_list | isys\_catg\_manual\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |
| Description | text\_area | isys\_catg\_manual\_list | isys\_catg\_manual\_list\_\_description |     |     |

### Sound card

#### Table: isys\_catg\_sound\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Manufacturer | int | isys\_catg\_sound\_list | isys\_catg\_sound\_list\_\_isys\_sound\_manufacturer\_\_id | isys\_sound\_manufacturer | isys\_sound\_manufacturer\_\_id |
| Title | text | isys\_catg\_sound\_list | isys\_catg\_sound\_list\_\_title |     |     |
| Description | text\_area | isys\_catg\_sound\_list | isys\_catg\_sound\_list\_\_description |     |     |

### locally assigned objects

#### Table: isys\_catg\_virtual\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Object | int | isys\_catg\_virtual\_list | isys\_catg\_location\_list\_\_isys\_obj\_\_id |     |     |

### Graphic card

#### Table: isys\_catg\_graphic\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Title | text | isys\_catg\_graphic\_list | isys\_catg\_graphic\_list\_\_title |     |     |
| Manufacturer | int | isys\_catg\_graphic\_list | isys\_catg\_graphic\_list\_\_isys\_graphic\_manufacturer\_\_id | isys\_graphic\_manufacturer | isys\_graphic\_manufacturer\_\_id |
| Memory | float | isys\_catg\_graphic\_list | isys\_catg\_graphic\_list\_\_memory |     |     |
| Memory unit | int | isys\_catg\_graphic\_list | isys\_catg\_graphic\_list\_\_isys\_memory\_unit\_\_id | isys\_memory\_unit | isys\_memory\_unit\_\_id |
| Description | text\_area | isys\_catg\_graphic\_list | isys\_catg\_graphic\_list\_\_description |     |     |

### Virtual machine

#### Table: isys\_catg\_virtual\_machine\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Virtual machine | int | isys\_catg\_virtual\_machine\_list | isys\_catg\_virtual\_machine\_list\_\_vm |     |     |
| Running on host | int | connection\_vm | isys\_catg\_virtual\_machine\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |
| Virtualization system | int | isys\_catg\_virtual\_machine\_list | isys\_catg\_virtual\_machine\_list\_\_isys\_vm\_type\_\_id | isys\_vm\_type | isys\_vm\_type\_\_id |
| Configuration file | text | isys\_catg\_virtual\_machine\_list | isys\_catg\_virtual\_machine\_list\_\_config\_file |     |     |
| Host in cluster | int | isys\_catg\_virtual\_machine\_list | isys\_catg\_virtual\_machine\_list\_\_primary |     |     |
| Description | text\_area | isys\_catg\_virtual\_machine\_list | isys\_catg\_virtual\_machine\_list\_\_description |     |     |

### Accounting

#### Table: isys\_catg\_accounting\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Inventory number | text | isys\_catg\_accounting\_list | isys\_catg\_accounting\_list\_\_inventory\_no |     |     |
| Account | int | isys\_catg\_accounting\_list | isys\_catg\_accounting\_list\_\_isys\_account\_\_id | isys\_account | isys\_account\_\_id |
| Date of invoice | date | isys\_catg\_accounting\_list | isys\_catg\_accounting\_list\_\_acquirementdate |     |     |
| Purchased at | int | isys\_catg\_accounting\_list | isys\_catg\_accounting\_list\_\_isys\_contact\_\_id | isys\_contact | isys\_contact\_\_id |
| Investment costs | double | isys\_catg\_accounting\_list | isys\_catg\_accounting\_list\_\_price |     |     |
| Operation expense | double | isys\_catg\_accounting\_list | isys\_catg\_accounting\_list\_\_operation\_expense |     |     |
| Operation expense (Unit) | int | isys\_catg\_accounting\_list | isys\_catg\_accounting\_list\_\_isys\_interval\_\_id | isys\_interval | isys\_interval\_\_id |
| Cost unit | int | isys\_catg\_accounting\_list | isys\_catg\_accounting\_list\_\_isys\_catg\_accounting\_cost\_unit\_\_id | isys\_catg\_accounting\_cost\_unit | isys\_catg\_accounting\_cost\_unit\_\_id |
| Delivery note number | text | isys\_catg\_accounting\_list | isys\_catg\_accounting\_list\_\_delivery\_note\_no |     |     |
| Procurement | int | isys\_catg\_accounting\_list | isys\_catg\_accounting\_list\_\_isys\_catg\_accounting\_procurement\_\_id | isys\_catg\_accounting\_procurement | isys\_catg\_accounting\_procurement\_\_id |
| Delivery date | date | isys\_catg\_accounting\_list | isys\_catg\_accounting\_list\_\_delivery\_date |     |     |
| Invoice no. | text | isys\_catg\_accounting\_list | isys\_catg\_accounting\_list\_\_invoice\_no |     |     |
| Order no. | text | isys\_catg\_accounting\_list | isys\_catg\_accounting\_list\_\_order\_no |     |     |
| Period of warranty | int | isys\_catg\_accounting\_list | isys\_catg\_accounting\_list\_\_guarantee\_period |     |     |
| Warranty period | int | isys\_catg\_accounting\_list | isys\_catg\_accounting\_list\_\_isys\_guarantee\_period\_unit\_\_id | isys\_guarantee\_period\_unit | isys\_guarantee\_period\_unit\_\_id |
| Remainder warranty | text | isys\_catg\_accounting\_list | isys\_catg\_accounting\_list\_\_id |     |     |
| Guarantee period by | int | isys\_catg\_accounting\_list | isys\_catg\_accounting\_list\_\_guarantee\_period\_base |     |     |
| Order date | date | isys\_catg\_accounting\_list | isys\_catg\_accounting\_list\_\_order\_date |     |     |
| Guarantee date | date | isys\_catg\_accounting\_list | isys\_catg\_accounting\_list\_\_id |     |     |
| Description | text\_area | isys\_catg\_accounting\_list | isys\_catg\_accounting\_list\_\_description |     |     |

### Port

#### Table: isys\_catg\_port\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Title | text | isys\_catg\_port\_list | isys\_catg\_port\_list\_\_title |     |     |
| Connected interface | int | isys\_catg\_port\_list | isys\_catg\_port\_list\_\_isys\_catg\_netp\_list\_\_id | isys\_catg\_netp\_list | isys\_catg\_netp\_list\_\_id |
| Type | int | isys\_catg\_port\_list | isys\_catg\_port\_list\_\_isys\_port\_type\_\_id | isys\_port\_type | isys\_port\_type\_\_id |
| Mode | int | isys\_catg\_port\_list | isys\_catg\_port\_list\_\_isys\_port\_mode\_\_id | isys\_port\_mode | isys\_port\_mode\_\_id |
| Plug | int | isys\_catg\_port\_list | isys\_catg\_port\_list\_\_isys\_plug\_type\_\_id | isys\_plug\_type | isys\_plug\_type\_\_id |
| Negotiation | int | isys\_catg\_port\_list | isys\_catg\_port\_list\_\_isys\_port\_negotiation\_\_id | isys\_port\_negotiation | isys\_port\_negotiation\_\_id |
| Duplex | int | isys\_catg\_port\_list | isys\_catg\_port\_list\_\_isys\_port\_duplex\_\_id | isys\_port\_duplex | isys\_port\_duplex\_\_id |
| Speed | float | isys\_catg\_port\_list | isys\_catg\_port\_list\_\_port\_speed\_value |     |     |
| Unit | int | isys\_catg\_port\_list | isys\_catg\_port\_list\_\_isys\_port\_speed\_\_id | isys\_port\_speed | isys\_port\_speed\_\_id |
| Standard | int | isys\_catg\_port\_list | isys\_catg\_port\_list\_\_isys\_port\_standard\_\_id | isys\_port\_standard | isys\_port\_standard\_\_id |
| MAC-address | text | isys\_catg\_port\_list | isys\_catg\_port\_list\_\_mac |     |     |
| MTU | text | isys\_catg\_port\_list | isys\_catg\_port\_list\_\_mtu |     |     |
| Connected with | int | connected\_connector | isys\_catg\_port\_list\_\_isys\_catg\_connector\_list\_\_id |     |     |
| Assigned to connector | int | connected | isys\_catg\_port\_list\_\_isys\_catg\_connector\_list\_\_id |     |     |
| Assigned Input/Output | int | isys\_catg\_port\_list | isys\_catg\_connector\_list\_\_isys\_catg\_connector\_list\_\_id |     |     |
| Cable ID | int | isys\_catg\_port\_list | isys\_catg\_connector\_list\_\_isys\_cable\_connection\_\_id |     |     |
| Active | int | isys\_catg\_port\_list | isys\_catg\_port\_list\_\_state\_enabled |     |     |
| Host address | int | isys\_catg\_port\_list | isys\_catg\_port\_list\_\_id | isys\_catg\_ip\_list\_2\_isys\_catg\_port\_list | isys\_catg\_ip\_list\_2\_isys\_catg\_port\_list\_\_isys\_catg\_port\_list\_\_id |
| Layer 2 Net | int | isys\_catg\_port\_list | isys\_catg\_port\_list\_\_id |     |     |
| Connected interface (HBA) | int | isys\_catg\_port\_list | isys\_catg\_port\_list\_\_isys\_catg\_hba\_list\_\_id | isys\_catg\_hba\_list | isys\_catg\_hba\_list\_\_id |
| Standard VLAN | int | isys\_catg\_port\_list | isys\_catg\_port\_list\_\_id | isys\_cats\_layer2\_net\_assigned\_ports\_list | isys\_catg\_port\_list\_\_id |
| Description | text\_area | isys\_catg\_port\_list | isys\_catg\_port\_list\_\_description |     |     |
| Relation direction | int | isys\_catg\_port\_list | isys\_catg\_connector\_list\_\_isys\_catg\_relation\_list\_\_id |     |     |

### Interface

#### Table: isys\_catg\_netp\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Title | text | isys\_catg\_netp\_list | isys\_catg\_netp\_list\_\_title |     |     |
| Manufacturer | int | isys\_catg\_netp\_list | isys\_catg\_netp\_list\_\_isys\_iface\_manufacturer\_\_id | isys\_iface\_manufacturer | isys\_iface\_manufacturer\_\_id |
| Model | int | isys\_catg\_netp\_list | isys\_catg\_netp\_list\_\_isys\_iface\_model\_\_id | isys\_iface\_model | isys\_iface\_model\_\_id |
| Serial number | text | isys\_catg\_netp\_list | isys\_catg\_netp\_list\_\_serial |     |     |
| Slotnumber | text | isys\_catg\_netp\_list | isys\_catg\_netp\_list\_\_slotnumber |     |     |
| Description | text\_area | isys\_catg\_netp\_list | isys\_catg\_netp\_list\_\_description |     |     |

### logical Ports

#### Table: isys\_catg\_log\_port\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Title | text | isys\_catg\_log\_port\_list | isys\_catg\_log\_port\_list\_\_title |     |     |
| Net(s) | int | isys\_catg\_log\_port\_list | isys\_catg\_log\_port\_list\_\_id |     |     |
| MAC | text | isys\_catg\_log\_port\_list | isys\_catg\_log\_port\_list\_\_mac |     |     |
| Type | int | isys\_catg\_log\_port\_list | isys\_catg\_log\_port\_list\_\_isys\_netx\_ifacel\_type\_\_id | isys\_netx\_ifacel\_type | isys\_netx\_ifacel\_type\_\_id |
| Allocation | int | isys\_catg\_log\_port\_list | isys\_catg\_log\_port\_list\_\_id |     |     |
| Parent port | int | log\_port | isys\_catg\_log\_port\_list\_\_parent | isys\_catg\_log\_port\_list | isys\_catg\_log\_port\_list\_\_id |
| Standard | int | isys\_catg\_log\_port\_list | isys\_catg\_log\_port\_list\_\_isys\_netp\_ifacel\_standard\_\_id | isys\_netp\_ifacel\_standard | isys\_netp\_ifacel\_standard\_\_id |
| Active | int | isys\_catg\_log\_port\_list | isys\_catg\_log\_port\_list\_\_active |     |     |
| Host address | int | isys\_catg\_log\_port\_list | isys\_catg\_log\_port\_list\_\_id |     |     |
| Assigned to connector | int | isys\_catg\_log\_port\_list | isys\_catg\_log\_port\_list\_\_isys\_catg\_log\_port\_list\_\_id |     |     |
| Description | text\_area | isys\_catg\_log\_port\_list | isys\_catg\_log\_port\_list\_\_description |     |     |

### Drive

#### Table: isys\_catg\_drive\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Drive letter | text | isys\_catg\_drive\_list | isys\_catg\_drive\_list\_\_driveletter |     |     |
| Title | text | isys\_catg\_drive\_list | isys\_catg\_drive\_list\_\_title |     |     |
| System drive | int | isys\_catg\_drive\_list | isys\_catg\_drive\_list\_\_system\_drive |     |     |
| Filesystem | int | isys\_catg\_drive\_list | isys\_catg\_drive\_list\_\_isys\_filesystem\_type\_\_id | isys\_filesystem\_type | isys\_filesystem\_type\_\_id |
| Capacity | float | isys\_catg\_drive\_list | isys\_catg\_drive\_list\_\_capacity |     |     |
| Memory unit | int | c\_unit | isys\_catg\_drive\_list\_\_isys\_memory\_unit\_\_id | isys\_memory\_unit | isys\_memory\_unit\_\_id |
| Serial number | text | isys\_catg\_drive\_list | isys\_catg\_drive\_list\_\_serial |     |     |
| Software RAID group | int | isys\_catg\_drive\_list | isys\_catg\_drive\_list\_\_id\_\_raid\_pool | isys\_catg\_raid\_list | isys\_catg\_raid\_list\_\_id |
| Type | int | isys\_catg\_drive\_list | isys\_catg\_drive\_list\_\_isys\_catd\_drive\_type\_\_id | isys\_catd\_drive\_type | isys\_catd\_drive\_type\_\_id |
| On device | int | isys\_catg\_drive\_list | isys\_catg\_drive\_list\_\_isys\_catg\_stor\_list\_\_id | isys\_catg\_stor\_list | isys\_catg\_stor\_list\_\_id |
| On device | int | isys\_catg\_drive\_list | isys\_catg\_drive\_list\_\_isys\_catg\_raid\_list\_\_id | isys\_catg\_raid\_list | isys\_catg\_raid\_list\_\_id |
| On device | int | isys\_catg\_drive\_list | isys\_catg\_drive\_list\_\_isys\_catg\_ldevclient\_list\_\_id | isys\_catg\_ldevclient\_list | isys\_catg\_ldevclient\_list\_\_id |
| Object type constant | text | isys\_catg\_drive\_list | isys\_catg\_drive\_list\_\_const |     |     |
| Free Diskspace | float | isys\_catg\_drive\_list | isys\_catg\_drive\_list\_\_free\_space |     |     |
| Memory unit | int | fs\_unit | isys\_catg\_drive\_list\_\_free\_space\_\_isys\_memory\_unit\_\_id | isys\_memory\_unit | isys\_memory\_unit\_\_id |
| Used Diskspace | float | isys\_catg\_drive\_list | isys\_catg\_drive\_list\_\_used\_space |     |     |
| Memory unit | int | us\_unit | isys\_catg\_drive\_list\_\_used\_space\_\_isys\_memory\_unit\_\_id | isys\_memory\_unit | isys\_memory\_unit\_\_id |
| Description | text\_area | isys\_catg\_drive\_list | isys\_catg\_drive\_list\_\_description |     |     |

### Device

#### Table: isys\_catg\_stor\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Type | int | isys\_catg\_stor\_list | isys\_catg\_stor\_list\_\_isys\_stor\_type\_\_id | isys\_stor\_type | isys\_stor\_type\_\_id |
| Title | text | isys\_catg\_stor\_list | isys\_catg\_stor\_list\_\_title |     |     |
| Manufacturer | int | isys\_catg\_stor\_list | isys\_catg\_stor\_list\_\_isys\_stor\_manufacturer\_\_id | isys\_stor\_manufacturer | isys\_stor\_manufacturer\_\_id |
| Model | int | isys\_catg\_stor\_list | isys\_catg\_stor\_list\_\_isys\_stor\_model\_\_id | isys\_stor\_model | isys\_stor\_model\_\_id |
| Memory unit | int | isys\_catg\_stor\_list | isys\_catg\_stor\_list\_\_isys\_memory\_unit\_\_id | isys\_memory\_unit | isys\_memory\_unit\_\_id |
| Capacity | double | isys\_catg\_stor\_list | isys\_catg\_stor\_list\_\_capacity |     |     |
| Hotspare | int | isys\_catg\_stor\_list | isys\_catg\_stor\_list\_\_hotspare |     |     |
| Connection | int | isys\_catg\_stor\_list | isys\_catg\_stor\_list\_\_isys\_stor\_con\_type\_\_id | isys\_stor\_con\_type | isys\_stor\_con\_type\_\_id |
| Controller | int | isys\_catg\_stor\_list | isys\_catg\_stor\_list\_\_isys\_catg\_controller\_list\_\_id | isys\_catg\_controller\_list | isys\_catg\_controller\_list\_\_id |
| Hardware RAID group | int | isys\_catg\_stor\_list | isys\_catg\_stor\_list\_\_isys\_catg\_raid\_list\_\_id | isys\_catg\_raid\_list | isys\_catg\_raid\_list\_\_id |
| Serial number | text | isys\_catg\_stor\_list | isys\_catg\_stor\_list\_\_serial |     |     |
| Description | text\_area | isys\_catg\_stor\_list | isys\_catg\_stor\_list\_\_description |     |     |
| LTO Type | int | isys\_catg\_stor\_list | isys\_catg\_stor\_list\_\_isys\_stor\_lto\_type\_\_id | isys\_stor\_lto\_type | isys\_stor\_lto\_type\_\_id |
| FC Address | text | isys\_catg\_stor\_list | isys\_catg\_stor\_list\_\_fc\_address |     |     |
| Firmware | text | isys\_catg\_stor\_list | isys\_catg\_stor\_list\_\_firmware |     |     |

### FC port

#### Table: isys\_catg\_fc\_port\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Title | text | isys\_catg\_fc\_port\_list | isys\_catg\_fc\_port\_list\_\_title |     |     |
| Type | int | isys\_catg\_fc\_port\_list | isys\_catg\_fc\_port\_list\_\_isys\_fc\_port\_type\_\_id | isys\_fc\_port\_type | isys\_fc\_port\_type\_\_id |
| Connected controller | int | isys\_catg\_fc\_port\_list | isys\_catg\_fc\_port\_list\_\_isys\_catg\_hba\_list\_\_id | isys\_catg\_hba\_list | isys\_catg\_hba\_list\_\_id |
| Assigned Input/Output | int | isys\_catg\_fc\_port\_list | isys\_catg\_connector\_list\_\_isys\_catg\_connector\_list\_\_id |     |     |
| Medium | int | isys\_catg\_fc\_port\_list | isys\_catg\_fc\_port\_list\_\_isys\_fc\_port\_medium\_\_id | isys\_fc\_port\_medium | isys\_fc\_port\_medium\_\_id |
| Speed | int | isys\_catg\_fc\_port\_list | isys\_catg\_fc\_port\_list\_\_port\_speed |     |     |
| Speed unit | int | isys\_catg\_fc\_port\_list | isys\_catg\_fc\_port\_list\_\_isys\_port\_speed\_\_id | isys\_port\_speed | isys\_port\_speed\_\_id |
| Node WWN | text | isys\_catg\_fc\_port\_list | isys\_catg\_fc\_port\_list\_\_wwn |     |     |
| Port WW(P)N | text | isys\_catg\_fc\_port\_list | isys\_catg\_fc\_port\_list\_\_wwpn |     |     |
| SAN zone and connection type | int | isys\_catg\_fc\_port\_list | isys\_catg\_fc\_port\_list\_\_id |     |     |
| Target object | int | isys\_catg\_fc\_port\_list | isys\_catg\_fc\_port\_list\_\_isys\_catg\_connector\_list\_\_id |     |     |
| Connection | int | connected | isys\_catg\_fc\_port\_list\_\_isys\_catg\_connector\_list\_\_id |     |     |
| Connection | int | connected | isys\_catg\_fc\_port\_list\_\_isys\_catg\_connector\_list\_\_id |     |     |
| Description | text\_area | isys\_catg\_fc\_port\_list | isys\_catg\_fc\_port\_list\_\_description |     |     |
| Relation direction | int | isys\_catg\_fc\_port\_list | isys\_catg\_connector\_list\_\_isys\_catg\_relation\_list\_\_id |     |     |

### Host address

#### Table: isys\_catg\_ip\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Use primary hostaddress | text | isys\_catg\_ip\_list | isys\_catg\_ip\_list\_\_isys\_cats\_net\_ip\_addresses\_list\_\_id | isys\_cats\_net\_ip\_addresses\_list | isys\_cats\_net\_ip\_addresses\_list\_\_id |
| Primary hostname | text | isys\_catg\_ip\_list | isys\_catg\_ip\_list\_\_hostname |     |     |
| Type | int | isys\_catg\_ip\_list | isys\_catg\_ip\_list\_\_isys\_net\_type\_\_id | isys\_net\_type | isys\_net\_type\_\_id |
| Primary | int | isys\_catg\_ip\_list | isys\_catg\_ip\_list\_\_primary |     |     |
| Active | int | isys\_catg\_ip\_list | isys\_catg\_ip\_list\_\_active |     |     |
| Net | int | isys\_catg\_ip\_list | isys\_cats\_net\_ip\_addresses\_list\_\_isys\_obj\_\_id |     |     |
| Net zone | int | isys\_catg\_ip\_list | isys\_catg\_ip\_list\_\_isys\_obj\_\_id\_\_zone |     |     |
| Address allocation IPv4 | int | isys\_catg\_ip\_list | isys\_catg\_ip\_list\_\_isys\_ip\_assignment\_\_id | isys\_ip\_assignment | isys\_ip\_assignment\_\_id |
| IPv4 address | text | ipv4 | isys\_catg\_ip\_list\_\_isys\_cats\_net\_ip\_addresses\_list\_\_id | isys\_cats\_net\_ip\_addresses\_list | isys\_cats\_net\_ip\_addresses\_list\_\_id |
| Address allocation IPv6 | int | isys\_catg\_ip\_list | isys\_catg\_ip\_list\_\_isys\_ipv6\_assignment\_\_id | isys\_ipv6\_assignment | isys\_ipv6\_assignment\_\_id |
| IPv6 scope | int | isys\_catg\_ip\_list | isys\_catg\_ip\_list\_\_isys\_ipv6\_scope\_\_id | isys\_ipv6\_scope | isys\_ipv6\_scope\_\_id |
| IPv6 address | text | ipv6 | isys\_catg\_ip\_list\_\_isys\_cats\_net\_ip\_addresses\_list\_\_id | isys\_cats\_net\_ip\_addresses\_list | isys\_cats\_net\_ip\_addresses\_list\_\_id |
| Host address | text | isys\_catg\_ip\_list | isys\_catg\_ip\_list\_\_isys\_cats\_net\_ip\_addresses\_list\_\_id | isys\_cats\_net\_ip\_addresses\_list | isys\_cats\_net\_ip\_addresses\_list\_\_id |
| Hostname | text | isys\_catg\_ip\_list | isys\_catg\_ip\_list\_\_hostname |     |     |
| Domain | text | isys\_catg\_ip\_list | isys\_catg\_ip\_list\_\_domain |     |     |
| DNS Server | int | dns | isys\_catg\_ip\_list\_\_id | isys\_catg\_ip\_list\_2\_isys\_catg\_ip\_list | isys\_catg\_ip\_list\_\_id |
| DNS Server address | text | dns | isys\_catg\_ip\_list\_\_id | isys\_catg\_ip\_list\_2\_isys\_catg\_ip\_list | isys\_catg\_ip\_list\_\_id |
| Search domain | int | dns\_domain | isys\_catg\_ip\_list\_\_id | isys\_catg\_ip\_list\_2\_isys\_net\_dns\_domain | isys\_catg\_ip\_list\_\_id |
| Default gateway for the net | int | gateway | isys\_catg\_ip\_list\_\_id |     |     |
| Assigned port | int | isys\_catg\_ip\_list | isys\_catg\_ip\_list\_\_isys\_catg\_port\_list\_\_id | isys\_catg\_port\_list | isys\_catg\_port\_list\_\_id |
| Assigned port | int | isys\_catg\_ip\_list | isys\_catg\_ip\_list\_\_isys\_catg\_log\_port\_list\_\_id | isys\_catg\_log\_port\_list | isys\_catg\_log\_port\_list\_\_id |
| Host addresses | text | isys\_catg\_ip\_list | isys\_catg\_ip\_list\_\_isys\_cats\_net\_ip\_addresses\_list\_\_id |     |     |
| Hostname (FQDN) | text | isys\_catg\_ip\_list | isys\_catg\_ip\_list\_\_id |     |     |
| Aliases | text | isys\_catg\_ip\_list | isys\_catg\_ip\_list\_\_id |     |     |
| Description | text\_area | isys\_catg\_ip\_list | isys\_catg\_ip\_list\_\_description |     |     |

### Version

#### Table: isys\_catg\_version\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Version number | text | isys\_catg\_version\_list | isys\_catg\_version\_list\_\_title |     |     |
| Servicepack | text | isys\_catg\_version\_list | isys\_catg\_version\_list\_\_servicepack |     |     |
| Kernel | text | isys\_catg\_version\_list | isys\_catg\_version\_list\_\_kernel |     |     |
| Patchlevel | text | isys\_catg\_version\_list | isys\_catg\_version\_list\_\_hotfix |     |     |
| Description | text\_area | isys\_catg\_version\_list | isys\_catg\_version\_list\_\_description |     |     |

### Connectors

#### Table: isys\_catg\_connector\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Title | text | isys\_catg\_connector\_list | isys\_catg\_connector\_list\_\_title |     |     |
| In-/Output | int | isys\_catg\_connector\_list | isys\_catg\_connector\_list\_\_type |     |     |
| Wiring system | int | isys\_catg\_connector\_list | isys\_catg\_connector\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |
| Interface | int | isys\_catg\_connector\_list | isys\_catg\_connector\_list\_\_isys\_interface\_\_id | isys\_interface | isys\_interface\_\_id |
| Fiber / wave lengths | int | fiber\_wave\_lengths | isys\_catg\_connector\_list\_\_id | isys\_catg\_connector\_list\_2\_isys\_fiber\_wave\_length | isys\_catg\_connector\_list\_\_id |
| Connection type | int | isys\_catg\_connector\_list | isys\_catg\_connector\_list\_\_isys\_connection\_type\_\_id | isys\_connection\_type | isys\_connection\_type\_\_id |
| Assigned to connector | int | connected\_connector | isys\_catg\_connector\_list\_\_id |     |     |
| Assigned category type | text | isys\_catg\_connector\_list | isys\_catg\_connector\_list\_\_assigned\_category |     |     |
| Cable | int | isys\_catg\_connector\_list | isys\_catg\_connector\_list\_\_isys\_cable\_connection\_\_id |     |     |
| Used fiber/lead (RX) | int | isys\_catg\_connector\_list | isys\_catg\_connector\_list\_\_used\_fiber\_lead\_rx |     |     |
| Used fiber/lead (TX) | int | isys\_catg\_connector\_list | isys\_catg\_connector\_list\_\_used\_fiber\_lead\_tx |     |     |
| Assigned Input/Output | int | isys\_catg\_connector\_list | isys\_catg\_connector\_list\_\_isys\_catg\_connector\_list\_\_id |     |     |
| Description | text\_area | isys\_catg\_connector\_list | isys\_catg\_connector\_list\_\_description |     |     |
| Relation direction | int | isys\_catg\_connector\_list | isys\_catg\_connector\_list\_\_isys\_catg\_relation\_list\_\_id |     |     |

### Invoice

#### Table: isys\_catg\_invoice\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Title | text | isys\_catg\_invoice\_list | isys\_catg\_invoice\_list\_\_denotation |     |     |
| Invoice Date | date | isys\_catg\_invoice\_list | isys\_catg\_invoice\_list\_\_date |     |     |
| Amount | double | isys\_catg\_invoice\_list | isys\_catg\_invoice\_list\_\_amount |     |     |
| Edited at | date | isys\_catg\_invoice\_list | isys\_catg\_invoice\_list\_\_edited |     |     |
| Dispensing Tax Accounting | date | isys\_catg\_invoice\_list | isys\_catg\_invoice\_list\_\_financial\_accounting\_delivery |     |     |
| Charged | int | isys\_catg\_invoice\_list | isys\_catg\_invoice\_list\_\_charged |     |     |
| Description | text\_area | isys\_catg\_invoice\_list | isys\_catg\_invoice\_list\_\_description |     |     |

### Power supplier

#### Table: isys\_catg\_power\_supplier\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Title | text | mine | isys\_catg\_connector\_list\_\_title |     |     |
| Volt | text | isys\_catg\_power\_supplier\_list | isys\_catg\_power\_supplier\_list\_\_volt |     |     |
| Watt | text | isys\_catg\_power\_supplier\_list | isys\_catg\_power\_supplier\_list\_\_watt |     |     |
| Ampere | text | isys\_catg\_power\_supplier\_list | isys\_catg\_power\_supplier\_list\_\_ampere |     |     |
| Target object | int | connected\_connector | isys\_catg\_power\_supplier\_list\_\_isys\_catg\_connector\_list\_\_id |     |     |
| Assigned to connector | int | connected | isys\_catg\_power\_supplier\_list\_\_isys\_catg\_connector\_list\_\_id |     |     |
| Assigned Input/Output | int | isys\_catg\_power\_supplier\_list | isys\_catg\_connector\_list\_\_isys\_catg\_connector\_list\_\_id |     |     |
| Assigned category type | text | isys\_catg\_power\_supplier\_list | isys\_catg\_connector\_list\_\_assigned\_category |     |     |
| Description | text\_area | isys\_catg\_power\_supplier\_list | isys\_catg\_power\_supplier\_list\_\_description |     |     |

### Raid-Array

#### Table: isys\_catg\_raid\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Type | int | isys\_catg\_raid\_list | isys\_catg\_raid\_list\_\_isys\_raid\_type\_\_id | isys\_raid\_type | isys\_raid\_type\_\_id |
| Title | text | isys\_catg\_raid\_list | isys\_catg\_raid\_list\_\_title |     |     |
| RAID Level | int | isys\_catg\_raid\_list | isys\_catg\_raid\_list\_\_isys\_stor\_raid\_level\_\_id | isys\_stor\_raid\_level | isys\_stor\_raid\_level\_\_id |
| Controller | int | isys\_catg\_raid\_list | isys\_catg\_raid\_list\_\_isys\_catg\_controller\_list\_\_id | isys\_catg\_controller\_list | isys\_catg\_controller\_list\_\_id |
| Connected devices | int | isys\_catg\_raid\_list | isys\_catg\_raid\_list\_\_id |     |     |
| Total capacity | text | isys\_catg\_raid\_list | isys\_catg\_raid\_list\_\_id |     |     |
| Description | text\_area | isys\_catg\_raid\_list | isys\_catg\_raid\_list\_\_description |     |     |

### Logical devices (LDEV Server)

#### Table: isys\_catg\_sanpool\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Title | text | isys\_catg\_sanpool\_list | isys\_catg\_sanpool\_list\_\_title |     |     |
| LUN | text | isys\_catg\_sanpool\_list | isys\_catg\_sanpool\_list\_\_lun |     |     |
| Segment size (kB) | float | isys\_catg\_sanpool\_list | isys\_catg\_sanpool\_list\_\_segment\_size |     |     |
| Memory-unit | int | isys\_catg\_sanpool\_list | isys\_catg\_sanpool\_list\_\_isys\_memory\_unit\_\_id | isys\_memory\_unit | isys\_memory\_unit\_\_id |
| Capacity | double | isys\_catg\_sanpool\_list | isys\_catg\_sanpool\_list\_\_capacity |     |     |
| Attached devices | int | isys\_catg\_sanpool\_list | isys\_catg\_sanpool\_list\_\_id | isys\_catg\_ldevclient\_list | isys\_catg\_ldevclient\_list\_\_isys\_catg\_sanpool\_list\_\_id |
| Paths | text | isys\_catg\_sanpool\_list | isys\_catg\_sanpool\_list\_\_id |     |     |
| Multipath technology | int | isys\_catg\_sanpool\_list | isys\_catg\_sanpool\_list\_\_isys\_ldev\_multipath\_\_id | isys\_ldev\_multipath | isys\_ldev\_multipath\_\_id |
| Tier class | int | isys\_catg\_sanpool\_list | isys\_catg\_sanpool\_list\_\_isys\_tierclass\_\_id | isys\_tierclass | isys\_tierclass\_\_id |
| Logical devices (Client) | int | isys\_catg\_sanpool\_list | isys\_catg\_sanpool\_list\_\_id | isys\_catg\_ldevclient\_list | isys\_catg\_ldevclient\_list\_\_isys\_catg\_sanpool\_list\_\_id |
| Description | text\_area | isys\_catg\_sanpool\_list | isys\_catg\_sanpool\_list\_\_description |     |     |

### Logical devices (Client)

#### Table: isys\_catg\_ldevclient\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Title | text | isys\_catg\_ldevclient\_list | isys\_catg\_ldevclient\_list\_\_title |     |     |
| Path | int | isys\_catg\_ldevclient\_list | isys\_catg\_ldevclient\_list\_\_id |     |     |
| Logical devices (LDEV Server) | int | isys\_catg\_ldevclient\_list | isys\_catg\_ldevclient\_list\_\_isys\_catg\_sanpool\_list\_\_id | isys\_catg\_sanpool\_list | isys\_catg\_sanpool\_list\_\_id |
| Primary path | int | isys\_catg\_ldevclient\_list | isys\_catg\_ldevclient\_list\_\_primary\_path |     |     |
| Multipath technology | int | isys\_catg\_ldevclient\_list | isys\_catg\_ldevclient\_list\_\_isys\_ldev\_multipath\_\_id | isys\_ldev\_multipath | isys\_ldev\_multipath\_\_id |
| Description | text\_area | isys\_catg\_ldevclient\_list | isys\_catg\_ldevclient\_list\_\_description |     |     |

### Host Bus Adapter (HBA)

#### Table: isys\_catg\_hba\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Title | text | isys\_catg\_hba\_list | isys\_catg\_hba\_list\_\_title |     |     |
| Type | int | isys\_catg\_hba\_list | isys\_catg\_hba\_list\_\_isys\_hba\_type\_\_id | isys\_hba\_type | isys\_hba\_type\_\_id |
| Manufacturer | int | isys\_catg\_hba\_list | isys\_catg\_hba\_list\_\_isys\_controller\_manufacturer\_\_id | isys\_controller\_manufacturer | isys\_controller\_manufacturer\_\_id |
| Model | int | isys\_catg\_hba\_list | isys\_catg\_hba\_list\_\_isys\_controller\_model\_\_id | isys\_controller\_model | isys\_controller\_model\_\_id |
| Description | text\_area | isys\_catg\_hba\_list | isys\_catg\_hba\_list\_\_description |     |     |

### Cluster

#### Table: isys\_catg\_cluster\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Quorum | int | isys\_catg\_cluster\_list | isys\_catg\_cluster\_list\_\_quorum |     |     |
| Administration service | text | isys\_catg\_cluster\_list | isys\_catg\_cluster\_adm\_service\_list\_\_isys\_obj\_\_id |     |     |
| Cluster Members | text | isys\_catg\_cluster\_list | isys\_catg\_cluster\_members\_list\_\_isys\_obj\_\_id |     |     |
| Cluster service assignment | text | isys\_catg\_cluster\_list | isys\_catg\_cluster\_service\_list\_\_isys\_obj\_\_id |     |     |
| Description | text\_area | isys\_catg\_cluster\_list | isys\_catg\_cluster\_list\_\_description |     |     |

### Cluster

#### Table: isys\_catg\_cluster\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Quorum | int | isys\_catg\_cluster\_list | isys\_catg\_cluster\_list\_\_quorum |     |     |
| Administration service | text | isys\_catg\_cluster\_list | isys\_catg\_cluster\_adm\_service\_list\_\_isys\_obj\_\_id |     |     |
| Cluster Members | text | isys\_catg\_cluster\_list | isys\_catg\_cluster\_members\_list\_\_isys\_obj\_\_id |     |     |
| Cluster service assignment | text | isys\_catg\_cluster\_list | isys\_catg\_cluster\_service\_list\_\_isys\_obj\_\_id |     |     |
| Description | text\_area | isys\_catg\_cluster\_list | isys\_catg\_cluster\_list\_\_description |     |     |

### Shares

#### Table: isys\_catg\_shares\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Share name | text | isys\_catg\_shares\_list | isys\_catg\_shares\_list\_\_title |     |     |
| UNC-path | text | isys\_catg\_shares\_list | isys\_catg\_shares\_list\_\_unc\_path |     |     |
| Volume | int | isys\_catg\_shares\_list | isys\_catg\_shares\_list\_\_isys\_catg\_drive\_list\_\_id | isys\_catg\_drive\_list | isys\_catg\_drive\_list\_\_id |
| Local path | text | isys\_catg\_shares\_list | isys\_catg\_shares\_list\_\_path |     |     |
| Description | text\_area | isys\_catg\_shares\_list | isys\_catg\_shares\_list\_\_description |     |     |

### Cluster service assignment

#### Table: isys\_catg\_cluster\_service\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Type | int | isys\_catg\_cluster\_service\_list | isys\_catg\_cluster\_service\_list\_\_isys\_cluster\_type\_\_id | isys\_cluster\_type | isys\_cluster\_type\_\_id |
| Cluster services | int | isys\_catg\_cluster\_service\_list | isys\_catg\_cluster\_service\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |
| Host addresses | int | isys\_catg\_cluster\_service\_list | isys\_catg\_cluster\_service\_list\_\_id | isys\_catg\_ip\_list\_2\_isys\_catg\_cluster\_service\_list | isys\_catg\_cluster\_service\_list\_\_id |
| Volumes | int | isys\_catg\_cluster\_service\_list | isys\_catg\_cluster\_service\_list\_\_id | isys\_catg\_drive\_list\_2\_isys\_catg\_cluster\_service\_list | isys\_catg\_cluster\_service\_list\_\_id |
| Shares | int | isys\_catg\_cluster\_service\_list | isys\_catg\_cluster\_service\_list\_\_isys\_obj\_\_id |     |     |
| Runs on | int | isys\_catg\_cluster\_service\_list | isys\_catg\_cluster\_service\_list\_\_id |     |     |
| Default server | int | isys\_catg\_cluster\_service\_list | isys\_catg\_cluster\_service\_list\_\_cluster\_members\_list\_\_id |     |     |
| Database schema | int | isys\_catg\_cluster\_service\_list | isys\_catg\_cluster\_service\_list\_\_isys\_catg\_relation\_list\_\_id | isys\_cats\_database\_access\_list | isys\_cats\_database\_access\_list\_\_id |
| Description | text\_area | isys\_catg\_cluster\_service\_list | isys\_catg\_cluster\_service\_list\_\_description |     |     |

### Cluster Members

#### Table: isys\_catg\_cluster\_members\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Cluster Member | int | isys\_catg\_cluster\_members\_list | isys\_catg\_cluster\_members\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |

### Cluster memberships

#### Table: isys\_catg\_cluster\_members\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Cluster | int | isys\_catg\_cluster\_members\_list | isys\_catg\_cluster\_members\_list\_\_isys\_obj\_\_id | isys\_connection | isys\_connection\_\_isys\_obj\_\_id |

### Computing resources

#### Table: isys\_catg\_computing\_resources\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| RAM | float | isys\_catg\_computing\_resources\_list | isys\_catg\_computing\_resources\_list\_\_ram |     |     |
| Memory-unit | int | mem1 | isys\_catg\_computing\_resources\_list\_\_ram\_\_isys\_memory\_unit\_\_id | isys\_memory\_unit | isys\_memory\_unit\_\_id |
| CPU frequency | float | isys\_catg\_computing\_resources\_list | isys\_catg\_computing\_resources\_list\_\_cpu |     |     |
| CPU frequency unit | int | isys\_catg\_computing\_resources\_list | isys\_catg\_computing\_resources\_list\_\_cpu\_\_isys\_frequency\_unit\_\_id | isys\_frequency\_unit | isys\_frequency\_unit\_\_id |
| Disc space | float | isys\_catg\_computing\_resources\_list | isys\_catg\_computing\_resources\_list\_\_disc\_space |     |     |
| Disc space unit | int | mem2 | isys\_catg\_computing\_resources\_list\_\_ds\_\_isys\_memory\_unit\_\_id | isys\_memory\_unit | isys\_memory\_unit\_\_id |
| Network bandwidth | float | isys\_catg\_computing\_resources\_list | isys\_catg\_computing\_resources\_list\_\_network\_bandwidth |     |     |
| Network bandwidth unit | int | isys\_catg\_computing\_resources\_list | isys\_catg\_computing\_resources\_list\_\_nb\_\_isys\_port\_speed\_\_id | isys\_port\_speed | isys\_port\_speed\_\_id |
| Description | text\_area | isys\_catg\_computing\_resources\_list | isys\_catg\_computing\_resources\_list\_\_description |     |     |

### SNMP

#### Table: isys\_catg\_snmp\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| SNMP Community | int | isys\_catg\_snmp\_list | isys\_catg\_snmp\_list\_\_isys\_snmp\_community\_\_id | isys\_snmp\_community | isys\_snmp\_community\_\_id |
| Description | text\_area | isys\_catg\_snmp\_list | isys\_catg\_snmp\_list\_\_description |     |     |

### Virtual host

#### Table: isys\_catg\_virtual\_host\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Virtual host | int | isys\_catg\_virtual\_host\_list | isys\_catg\_virtual\_host\_list\_\_virtual\_host |     |     |
| License Server | int | connection\_licence\_server | isys\_catg\_virtual\_host\_list\_\_license\_server | isys\_connection | isys\_connection\_\_id |
| Administration service | int | connection\_administration\_service | isys\_catg\_virtual\_host\_list\_\_administration\_service | isys\_connection | isys\_connection\_\_id |
| Description | text\_area | isys\_catg\_virtual\_host\_list | isys\_catg\_virtual\_host\_list\_\_description |     |     |

### Virtual host

#### Table: isys\_catg\_virtual\_host\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Virtual host | int | isys\_catg\_virtual\_host\_list | isys\_catg\_virtual\_host\_list\_\_virtual\_host |     |     |
| License Server | int | connection\_licence\_server | isys\_catg\_virtual\_host\_list\_\_license\_server | isys\_connection | isys\_connection\_\_id |
| Administration service | int | connection\_administration\_service | isys\_catg\_virtual\_host\_list\_\_administration\_service | isys\_connection | isys\_connection\_\_id |
| Description | text\_area | isys\_catg\_virtual\_host\_list | isys\_catg\_virtual\_host\_list\_\_description |     |     |

### Guest systems

#### Table: isys\_catg\_virtual\_machine\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Guest systems | int | isys\_catg\_virtual\_machine\_list | isys\_catg\_virtual\_machine\_list\_\_isys\_obj\_\_id |     |     |
| Hostname | text | isys\_catg\_virtual\_machine\_list | isys\_catg\_virtual\_machine\_list\_\_isys\_obj\_\_id |     |     |
| Runs on | text | isys\_catg\_virtual\_machine\_list | isys\_catg\_virtual\_machine\_list\_\_primary |     |     |

### Virtual machine

#### Table: isys\_catg\_virtual\_machine\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Virtual machine | int | isys\_catg\_virtual\_machine\_list | isys\_catg\_virtual\_machine\_list\_\_vm |     |     |
| Running on host | int | connection\_vm | isys\_catg\_virtual\_machine\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |
| Virtualization system | int | isys\_catg\_virtual\_machine\_list | isys\_catg\_virtual\_machine\_list\_\_isys\_vm\_type\_\_id | isys\_vm\_type | isys\_vm\_type\_\_id |
| Configuration file | text | isys\_catg\_virtual\_machine\_list | isys\_catg\_virtual\_machine\_list\_\_config\_file |     |     |
| Host in cluster | int | isys\_catg\_virtual\_machine\_list | isys\_catg\_virtual\_machine\_list\_\_primary |     |     |
| Description | text\_area | isys\_catg\_virtual\_machine\_list | isys\_catg\_virtual\_machine\_list\_\_description |     |     |

### Virtual Switches

#### Table: isys\_catg\_virtual\_switch\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Title | text | isys\_catg\_virtual\_switch\_list | isys\_catg\_virtual\_switch\_list\_\_title |     |     |
| Ports | int | isys\_catg\_virtual\_switch\_list | isys\_catg\_virtual\_switch\_list\_\_id | isys\_virtual\_switch\_2\_port | isys\_virtual\_switch\_2\_port\_\_isys\_catg\_virtual\_switch\_list\_\_id |
| Port groups | int | isys\_catg\_virtual\_switch\_list | isys\_virtual\_port\_group\_\_id | isys\_virtual\_port\_group | isys\_virtual\_port\_group\_\_isys\_catg\_virtual\_switch\_list\_\_id |
| Service Console Ports | int | isys\_catg\_virtual\_switch\_list | isys\_service\_console\_port\_\_id | isys\_service\_console\_port | isys\_service\_console\_port\_\_isys\_catg\_virtual\_switch\_list\_\_id |
| VMKernel Ports | int | isys\_catg\_virtual\_switch\_list | isys\_vmkernel\_port\_\_id | isys\_vmkernel\_port | isys\_vmkernel\_port\_\_isys\_catg\_virtual\_switch\_list\_\_id |
| Description | text\_area | isys\_catg\_virtual\_switch\_list | isys\_catg\_virtual\_switch\_list\_\_description |     |     |

### Virtual devices

#### Table: isys\_catg\_virtual\_device\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Device type | int | isys\_catg\_virtual\_device\_list | isys\_virtual\_device\_host\_\_isys\_catg\_stor\_list\_\_id | isys\_catg\_stor\_list | isys\_catg\_stor\_list\_\_id |
| Host LDEV client | int | isys\_catg\_virtual\_device\_list | isys\_virtual\_device\_host\_\_isys\_catg\_ldevclient\_list\_\_id | isys\_catg\_ldevclient\_list | isys\_catg\_ldevclient\_list\_\_id |
| Assigned storage device (host) | int | isys\_catg\_virtual\_device\_list | isys\_virtual\_device\_host\_\_isys\_catg\_drive\_list\_\_id | isys\_catg\_drive\_list | isys\_catg\_drive\_list\_\_id |
| Corresponding host port | int | isys\_catg\_virtual\_device\_list | isys\_virtual\_device\_host\_\_isys\_catg\_port\_list\_\_id | isys\_catg\_port\_list | isys\_catg\_port\_list\_\_id |
| Host interface | int | isys\_catg\_virtual\_device\_list | isys\_virtual\_device\_host\_\_isys\_catg\_ui\_list\_\_id | isys\_catg\_ui\_list | isys\_catg\_ui\_list\_\_id |
| Local storage device | int | isys\_catg\_virtual\_device\_list | isys\_virtual\_device\_local\_\_isys\_catg\_stor\_list\_\_id | isys\_catg\_stor\_list | isys\_catg\_stor\_list\_\_id |
| Local port | int | isys\_catg\_virtual\_device\_list | isys\_virtual\_device\_local\_\_isys\_catg\_port\_list\_\_id | isys\_catg\_port\_list | isys\_catg\_port\_list\_\_id |
| Host resource | int | isys\_catg\_virtual\_device\_list | isys\_virtual\_device\_local\_\_isys\_catg\_ui\_list\_\_id | isys\_catg\_ui\_list | isys\_catg\_ui\_list\_\_id |
| Storage type | int | isys\_catg\_virtual\_device\_list | isys\_virtual\_device\_local\_\_isys\_virtual\_storage\_type\_\_id | isys\_virtual\_storage\_type | isys\_virtual\_storage\_type\_\_id |
| Network type | int | isys\_catg\_virtual\_device\_list | isys\_virtual\_device\_local\_\_isys\_virtual\_network\_type\_\_id | isys\_virtual\_network\_type | isys\_virtual\_network\_type\_\_id |
| Switch Port Group | int | isys\_catg\_virtual\_device\_list | isys\_virtual\_device\_host\_\_switch\_port\_group |     |     |
| Cluster storage | text | isys\_virtual\_device\_host | isys\_virtual\_device\_host\_\_cluster\_storage |     |     |
| Cluster interface | text | isys\_catg\_virtual\_device\_list | isys\_virtual\_device\_host\_\_cluster\_ui |     |     |
| Local storage device | text | isys\_catg\_virtual\_device\_list | isys\_catg\_virtual\_device\_list\_\_disk\_image\_location |     |     |
| Device type | text | isys\_catg\_virtual\_device\_list | isys\_catg\_virtual\_device\_list\_\_device\_type |     |     |
| Description | text\_area | isys\_catg\_virtual\_device\_list | isys\_catg\_virtual\_device\_list\_\_description |     |     |
| Type | text | isys\_catg\_virtual\_device\_list | isys\_virtual\_network\_type\_\_title |     |     |

### Backup (assigned Objects)

#### Table: isys\_catg\_backup\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Title | text | isys\_catg\_backup\_list | isys\_catg\_backup\_list\_\_title |     |     |
| Backups | int | isys\_catg\_backup\_list | isys\_catg\_backup\_list\_\_isys\_obj\_\_id |     |     |
| Backup type | int | isys\_catg\_backup\_list | isys\_catg\_backup\_list\_\_isys\_backup\_type\_\_id | isys\_backup\_type | isys\_backup\_type\_\_id |
| Cycle | int | isys\_catg\_backup\_list | isys\_catg\_backup\_list\_\_isys\_backup\_cycle\_\_id | isys\_backup\_cycle | isys\_backup\_cycle\_\_id |
| Path to save | text | isys\_catg\_backup\_list | isys\_catg\_backup\_list\_\_path\_to\_save |     |     |
| Description | text\_area | isys\_catg\_backup\_list | isys\_catg\_backup\_list\_\_description |     |     |

### Group memberships

#### Table: isys\_cats\_group\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Group | int | isys\_cats\_group\_list | isys\_cats\_group\_list\_\_isys\_obj\_\_id |     |     |
| Description | text\_area | isys\_cats\_group\_list | isys\_cats\_group\_list\_\_description |     |     |

### Service components

#### Table: isys\_catg\_its\_components\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Assigned object | int | isys\_catg\_its\_components\_list | isys\_catg\_its\_components\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |
| Object type | int | itsc | isys\_obj\_\_isys\_obj\_type\_\_id |     |     |

### Service Logbook

#### Table: isys\_catg\_logb\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Date | date\_time | isys\_catg\_logb\_list | isys\_logbook\_\_date |     |     |
| Object | int | isys\_catg\_logb\_list | isys\_catg\_logb\_list\_\_isys\_obj\_\_id |     |     |
| Event | int | isys\_catg\_logb\_list | isys\_logbook\_\_isys\_logbook\_event\_\_id | isys\_logbook\_event | isys\_logbook\_event\_\_id |
| Source | int | isys\_catg\_logb\_list | isys\_logbook\_\_isys\_logbook\_source\_\_id |     |     |
| User | int | isys\_catg\_logb\_list | isys\_logbook\_\_isys\_obj\_\_id |     |     |
| Object type | text | isys\_catg\_logb\_list | isys\_logbook\_\_obj\_type\_static |     |     |
| Category | text | isys\_catg\_logb\_list | isys\_logbook\_\_category\_static |     |     |
| Alarm level | text | isys\_catg\_logb\_list | isys\_logbook\_\_isys\_logbook\_level\_\_id | isys\_logbook\_level | isys\_logbook\_level\_\_id |
| User | text | isys\_catg\_logb\_list | isys\_logbook\_\_user\_name\_static |     |     |
| Event | text | isys\_catg\_logb\_list | isys\_logbook\_\_event\_static |     |     |
| Comment | text | isys\_catg\_logb\_list | isys\_logbook\_\_comment |     |     |
| Changes | text | isys\_catg\_logb\_list | isys\_logbook\_\_changes |     |     |
| Description | text\_area | isys\_catg\_logb\_list | isys\_catg\_logb\_list\_\_description |     |     |

### Service assignment

#### Table: isys\_catg\_its\_components\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Service | int | isys\_catg\_its\_components\_list | isys\_catg\_its\_components\_list\_\_isys\_obj\_\_id |     |     |
| SYSID | text | isys\_catg\_its\_components\_list | isys\_obj\_\_sysid |     |     |

### Relationship

#### Table: isys\_catg\_relation\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Object 1 | int | masterobj | isys\_catg\_relation\_list\_\_isys\_obj\_\_id\_\_master | isys\_obj | isys\_obj\_\_id |
| Object 2 | int | slaveobj | isys\_catg\_relation\_list\_\_isys\_obj\_\_id\_\_slave | isys\_obj | isys\_obj\_\_id |
| Relation type | int | isys\_catg\_relation\_list | isys\_catg\_relation\_list\_\_isys\_relation\_type\_\_id | isys\_relation\_type | isys\_relation\_type\_\_id |
| Weighting | int | isys\_catg\_relation\_list | isys\_catg\_relation\_list\_\_isys\_weighting\_\_id | isys\_weighting | isys\_weighting\_\_id |
| Service | int | isys\_catg\_relation\_list | isys\_catg\_relation\_list\_\_isys\_obj\_\_id\_\_itservice | isys\_obj | isys\_obj\_\_id |
| Description | text\_area | isys\_catg\_relation\_list | isys\_catg\_relation\_list\_\_description |     |     |

### Service Relation

#### Table: isys\_catg\_relation\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Object 1 | int | masterobj | isys\_catg\_relation\_list\_\_isys\_obj\_\_id\_\_master | isys\_obj | isys\_obj\_\_id |
| Object 2 | int | slaveobj | isys\_catg\_relation\_list\_\_isys\_obj\_\_id\_\_slave | isys\_obj | isys\_obj\_\_id |
| Relation type | int | isys\_catg\_relation\_list | isys\_catg\_relation\_list\_\_isys\_relation\_type\_\_id | isys\_relation\_type | isys\_relation\_type\_\_id |
| Weighting | int | isys\_catg\_relation\_list | isys\_catg\_relation\_list\_\_isys\_weighting\_\_id | isys\_weighting | isys\_weighting\_\_id |
| Service | int | isys\_catg\_relation\_list | isys\_catg\_relation\_list\_\_isys\_obj\_\_id\_\_itservice | isys\_obj | isys\_obj\_\_id |
| Description | text\_area | isys\_catg\_relation\_list | isys\_catg\_relation\_list\_\_description |     |     |

### Database assignment

#### Table: isys\_cats\_database\_access\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Target schema | int | isys\_cats\_database\_access\_list | isys\_cats\_database\_access\_list\_\_isys\_obj\_\_id |     |     |
| Software runs on | int | isys\_cats\_database\_access\_list | isys\_catg\_relation\_list\_\_isys\_obj\_\_id\_\_slave |     |     |
| Description | text\_area | isys\_cats\_database\_access\_list | isys\_cats\_database\_access\_list\_\_description |     |     |

### Service Type

#### Table: isys\_catg\_its\_type\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Type | int | isys\_catg\_its\_type\_list | isys\_catg\_its\_type\_list\_\_isys\_its\_type\_\_id | isys\_its\_type | isys\_its\_type\_\_id |
| Description | text\_area | isys\_catg\_its\_type\_list | isys\_catg\_its\_type\_list\_\_description |     |     |

### Passwords

#### Table: isys\_catg\_password\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Title | text | isys\_catg\_password\_list | isys\_catg\_password\_list\_\_title |     |     |
| Username | text | isys\_catg\_password\_list | isys\_catg\_password\_list\_\_username |     |     |
| Password | text | isys\_catg\_password\_list | isys\_catg\_password\_list\_\_password |     |     |
| Description | text\_area | isys\_catg\_password\_list | isys\_catg\_password\_list\_\_description |     |     |

### SOA-Stacks

#### Table: isys\_catg\_soa\_stacks\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Title | text | isys\_catg\_soa\_stacks\_list | isys\_catg\_soa\_stacks\_list\_\_title |     |     |
| SOA-Stacks | int | isys\_catg\_soa\_stacks\_list | isys\_connection\_\_isys\_obj\_\_id |     |     |
| SOA-Component | int | isys\_catg\_soa\_stacks\_list | isys\_catg\_soa\_stacks\_list\_\_id |     |     |
| Service | int | isys\_catg\_soa\_stacks\_list | isys\_connection\_\_isys\_obj\_\_id |     |     |
| Description | text\_area | isys\_catg\_soa\_stacks\_list | isys\_catg\_soa\_stacks\_list\_\_description |     |     |

### Status-Planning

#### Table: isys\_catg\_planning\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| CMDB status | int | isys\_catg\_planning\_list | isys\_catg\_planning\_list\_\_isys\_cmdb\_status\_\_id | isys\_cmdb\_status | isys\_cmdb\_status\_\_id |
| Validity period from | date | isys\_catg\_planning\_list | isys\_catg\_planning\_list\_\_start |     |     |
| Validity period to | date | isys\_catg\_planning\_list | isys\_catg\_planning\_list\_\_end |     |     |
| Description | text\_area | isys\_catg\_planning\_list | isys\_catg\_planning\_list\_\_description |     |     |

### Assigned cards

#### Table: isys\_catg\_assigned\_cards\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Assigned cards | int | isys\_catg\_assigned\_cards\_list | isys\_catg\_assigned\_cards\_list\_\_isys\_obj\_\_id\_\_card |     |     |

### SIM card

#### Table: isys\_catg\_sim\_card\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Type | int | isys\_catg\_sim\_card\_list | isys\_catg\_sim\_card\_list\_\_isys\_cp\_contract\_type\_\_id | isys\_cp\_contract\_type | isys\_cp\_contract\_type\_\_id |
| Assigned mobile phone | int | isys\_catg\_assigned\_cards\_list | isys\_catg\_assigned\_cards\_list\_\_isys\_obj\_\_id |     |     |
| Network provider | int | isys\_catg\_sim\_card\_list | isys\_catg\_sim\_card\_list\_\_isys\_network\_provider\_\_id | isys\_network\_provider | isys\_network\_provider\_\_id |
| Telephone rate | int | isys\_catg\_sim\_card\_list | isys\_catg\_sim\_card\_list\_\_isys\_telephone\_rate\_\_id | isys\_telephone\_rate | isys\_telephone\_rate\_\_id |
| Start Date | date | isys\_catg\_sim\_card\_list | isys\_catg\_sim\_card\_list\_\_start\_date |     |     |
| End Date | date | isys\_catg\_sim\_card\_list | isys\_catg\_sim\_card\_list\_\_end\_date |     |     |
| Date for Notification | date | isys\_catg\_sim\_card\_list | isys\_catg\_sim\_card\_list\_\_threshold\_date |     |     |
| Card Number | text | isys\_catg\_sim\_card\_list | isys\_catg\_sim\_card\_list\_\_card\_number |     |     |
| Phone Number | text | isys\_catg\_sim\_card\_list | isys\_catg\_sim\_card\_list\_\_phone\_number |     |     |
| Client Number | text | isys\_catg\_sim\_card\_list | isys\_catg\_sim\_card\_list\_\_client\_number |     |     |
| Pin | text | isys\_catg\_sim\_card\_list | isys\_catg\_sim\_card\_list\_\_pin |     |     |
| Pin 2 | text | isys\_catg\_sim\_card\_list | isys\_catg\_sim\_card\_list\_\_pin2 |     |     |
| PUK | text | isys\_catg\_sim\_card\_list | isys\_catg\_sim\_card\_list\_\_puk |     |     |
| PUK2 | text | isys\_catg\_sim\_card\_list | isys\_catg\_sim\_card\_list\_\_puk2 |     |     |
| Serial number | text | isys\_catg\_sim\_card\_list | isys\_catg\_sim\_card\_list\_\_serial\_number |     |     |
| Twin Card | int | isys\_catg\_sim\_card\_list | isys\_catg\_sim\_card\_list\_\_twincard |     |     |
| Card Number (Twin Card) | text | isys\_catg\_sim\_card\_list | isys\_catg\_sim\_card\_list\_\_tc\_card\_number |     |     |
| Phone Number (Twin Card) | text | isys\_catg\_sim\_card\_list | isys\_catg\_sim\_card\_list\_\_tc\_phone\_number |     |     |
| Pin (Twin Card) | text | isys\_catg\_sim\_card\_list | isys\_catg\_sim\_card\_list\_\_tc\_pin |     |     |
| Pin 2 (Twin Card) | text | isys\_catg\_sim\_card\_list | isys\_catg\_sim\_card\_list\_\_tc\_pin2 |     |     |
| PUK (Twin Card) | text | isys\_catg\_sim\_card\_list | isys\_catg\_sim\_card\_list\_\_tc\_puk |     |     |
| PUK2 (Twin Card) | text | isys\_catg\_sim\_card\_list | isys\_catg\_sim\_card\_list\_\_tc\_puk2 |     |     |
| Serial number (Twin Card) | text | isys\_catg\_sim\_card\_list | isys\_catg\_sim\_card\_list\_\_tc\_serial\_number |     |     |
| Description (Twin Card) (Twin Card) | text\_area | isys\_catg\_sim\_card\_list | isys\_catg\_sim\_card\_list\_\_optional\_info |     |     |
| Description | text\_area | isys\_catg\_sim\_card\_list | isys\_catg\_sim\_card\_list\_\_description |     |     |

### TSI service

#### Table: isys\_catg\_tsi\_service\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| TSI service ID | text | isys\_catg\_tsi\_service\_list | isys\_catg\_tsi\_service\_list\_\_tsi\_service\_id |     |     |
| Description | text\_area | isys\_catg\_tsi\_service\_list | isys\_catg\_tsi\_service\_list\_\_description |     |     |

### Audit

#### Table: isys\_catg\_audit\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Title | text | isys\_catg\_audit\_list | isys\_catg\_audit\_list\_\_title |     |     |
| Type | int | isys\_catg\_audit\_list | isys\_catg\_audit\_list\_\_type | isys\_catg\_audit\_type | isys\_catg\_audit\_type\_\_id |
| Commission | int | isys\_catg\_audit\_list | isys\_catg\_audit\_list\_\_commission | isys\_contact | isys\_contact\_\_id |
| Responsible | int | isys\_catg\_audit\_list | isys\_catg\_audit\_list\_\_responsible | isys\_contact | isys\_contact\_\_id |
| Involved | int | isys\_catg\_audit\_list | isys\_catg\_audit\_list\_\_involved | isys\_contact | isys\_contact\_\_id |
| Manufacturer's period | date | isys\_catg\_audit\_list | isys\_catg\_audit\_list\_\_period\_manufacturer |     |     |
| Operator's period | date | isys\_catg\_audit\_list | isys\_catg\_audit\_list\_\_period\_operator |     |     |
| Applied | date | isys\_catg\_audit\_list | isys\_catg\_audit\_list\_\_apply |     |     |
| Result | text\_area | isys\_catg\_audit\_list | isys\_catg\_audit\_list\_\_result |     |     |
| Faults | text\_area | isys\_catg\_audit\_list | isys\_catg\_audit\_list\_\_fault |     |     |
| Incidents | text\_area | isys\_catg\_audit\_list | isys\_catg\_audit\_list\_\_incident |     |     |
| Description | text\_area | isys\_catg\_audit\_list | isys\_catg\_audit\_list\_\_description |     |     |

### Logical location

#### Table: isys\_catg\_logical\_unit\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Parent object | int | isys\_catg\_logical\_unit\_list | isys\_catg\_logical\_unit\_list\_\_isys\_obj\_\_id\_\_parent |     |     |
| Description | text\_area | isys\_catg\_logical\_unit\_list | isys\_catg\_logical\_unit\_list\_\_description |     |     |

### Workplace components

#### Table: isys\_catg\_virtual\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Object | int | isys\_catg\_virtual\_list | isys\_catg\_logical\_unit\_list\_\_isys\_obj\_\_id | isys\_obj | isys\_obj\_\_id |

### Assigned workstation

#### Table: isys\_catg\_logical\_unit\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Parent object | int | isys\_catg\_logical\_unit\_list | isys\_catg\_logical\_unit\_list\_\_isys\_obj\_\_id\_\_parent |     |     |
| Description | text\_area | isys\_catg\_logical\_unit\_list | isys\_catg\_logical\_unit\_list\_\_description |     |     |

### Assigned Workplaces

#### Table: isys\_catg\_logical\_unit\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Assigned Workplaces | int | isys\_catg\_logical\_unit\_list | isys\_catg\_logical\_unit\_list\_\_isys\_obj\_\_id |     |     |
| Description | text\_area | isys\_catg\_logical\_unit\_list | isys\_catg\_logical\_unit\_list\_\_description |     |     |

### Contract assignment

#### Table: isys\_catg\_contract\_assignment\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Assigned contract | int | isys\_catg\_contract\_assignment\_list | isys\_catg\_contract\_assignment\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |
| Contract begin | date | isys\_catg\_contract\_assignment\_list | isys\_catg\_contract\_assignment\_list\_\_contract\_start |     |     |
| Contract end | date | isys\_catg\_contract\_assignment\_list | isys\_catg\_contract\_assignment\_list\_\_contract\_end |     |     |
| Reaction rate | int | isys\_catg\_contract\_assignment\_list | isys\_catg\_contract\_assignment\_list\_\_reaction\_rate\_\_id | isys\_contract\_reaction\_rate | isys\_contract\_reaction\_rate\_\_id |
| Description | text\_area | isys\_catg\_contract\_assignment\_list | isys\_catg\_contract\_assignment\_list\_\_description |     |     |

### Stacking

#### Table: isys\_catg\_stacking\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Chassis | int | isys\_catg\_stacking\_list | isys\_catg\_stacking\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |

### E-Mail addresses

#### Table: isys\_catg\_mail\_addresses\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| E-mail address | text | isys\_catg\_mail\_addresses\_list | isys\_catg\_mail\_addresses\_list\_\_title |     |     |
| Primary email address | text | isys\_catg\_mail\_addresses\_list | isys\_catg\_mail\_addresses\_list\_\_title |     |     |
| Primary | int | isys\_catg\_mail\_addresses\_list | isys\_catg\_mail\_addresses\_list\_\_primary |     |     |
| Description | text\_area | isys\_catg\_mail\_addresses\_list | isys\_catg\_mail\_addresses\_list\_\_description |     |     |

### CUCM VoIP telephone

#### Table: isys\_catg\_voip\_phone\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Device protocol | text | isys\_catg\_voip\_phone\_list | isys\_catg\_voip\_phone\_list\_\_device\_protocol |     |     |
| Description | text | isys\_catg\_voip\_phone\_list | isys\_catg\_voip\_phone\_list\_\_description2 |     |     |
| Device pool | text | isys\_catg\_voip\_phone\_list | isys\_catg\_voip\_phone\_list\_\_device\_pool |     |     |
| Common device configuration | text | isys\_catg\_voip\_phone\_list | isys\_catg\_voip\_phone\_list\_\_common\_device\_configuration |     |     |
| Button template | int | isys\_catg\_voip\_phone\_list | isys\_catg\_voip\_phone\_list\_\_isys\_voip\_phone\_button\_template\_\_id | isys\_voip\_phone\_button\_template | isys\_voip\_phone\_button\_template\_\_id |
| Softkey template | int | isys\_catg\_voip\_phone\_list | isys\_catg\_voip\_phone\_list\_\_isys\_voip\_phone\_softkey\_template\_\_id | isys\_voip\_phone\_softkey\_template | isys\_voip\_phone\_softkey\_template\_\_id |
| Common device profile | text | isys\_catg\_voip\_phone\_list | isys\_catg\_voip\_phone\_list\_\_common\_profile |     |     |
| Calling search space | text | isys\_catg\_voip\_phone\_list | isys\_catg\_voip\_phone\_list\_\_calling\_search\_space |     |     |
| AAR calling search space | text | isys\_catg\_voip\_phone\_list | isys\_catg\_voip\_phone\_list\_\_aar\_calling\_search\_space |     |     |
| Media resource group list | text | isys\_catg\_voip\_phone\_list | isys\_catg\_voip\_phone\_list\_\_media\_resource\_group\_list |     |     |
| User MOH audio source | text | isys\_catg\_voip\_phone\_list | isys\_catg\_voip\_phone\_list\_\_user\_hold\_moh\_audio\_source |     |     |
| Network MOH Audioquelle | text | isys\_catg\_voip\_phone\_list | isys\_catg\_voip\_phone\_list\_\_network\_hold\_moh\_audio\_source |     |     |
| Location | text | isys\_catg\_voip\_phone\_list | isys\_catg\_voip\_phone\_list\_\_location |     |     |
| AAR group | text | isys\_catg\_voip\_phone\_list | isys\_catg\_voip\_phone\_list\_\_aar\_group |     |     |
| User locale | text | isys\_catg\_voip\_phone\_list | isys\_catg\_voip\_phone\_list\_\_user\_locale |     |     |
| Network locale | text | isys\_catg\_voip\_phone\_list | isys\_catg\_voip\_phone\_list\_\_network\_locale |     |     |
| Built in bridge | text | isys\_catg\_voip\_phone\_list | isys\_catg\_voip\_phone\_list\_\_built\_in\_bridge |     |     |
| Privacy | text | isys\_catg\_voip\_phone\_list | isys\_catg\_voip\_phone\_list\_\_privacy |     |     |
| Device Mobility Mode | text | isys\_catg\_voip\_phone\_list | isys\_catg\_voip\_phone\_list\_\_device\_mobility\_mode |     |     |
| Owner user ID | text | isys\_catg\_voip\_phone\_list | isys\_catg\_voip\_phone\_list\_\_owner\_user\_id |     |     |
| Phone suite | text | isys\_catg\_voip\_phone\_list | isys\_catg\_voip\_phone\_list\_\_phone\_suite |     |     |
| Service provisioning | text | isys\_catg\_voip\_phone\_list | isys\_catg\_voip\_phone\_list\_\_services\_provisioning |     |     |
| Load name | text | isys\_catg\_voip\_phone\_list | isys\_catg\_voip\_phone\_list\_\_load\_name |     |     |
| Description | text\_area | isys\_catg\_voip\_phone\_list | isys\_catg\_voip\_phone\_list\_\_description |     |     |

### CUCM VoIP line

#### Table: isys\_catg\_voip\_phone\_line\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Directory number | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_directory\_number |     |     |
| Route partition | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_route\_partition |     |     |
| Description | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_description2 |     |     |
| Alerting name | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_alerting\_name |     |     |
| ASCII Alerting name | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_ascii\_alerting\_name |     |     |
| Allow Control of Device from CTI | int | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_allow\_cti\_control |     |     |
| Associated devices | int | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_id |     |     |
| Voice mail profile | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_voice\_mail\_profile |     |     |
| Calling search space | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_calling\_search\_space |     |     |
| Presence group | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_presence\_group |     |     |
| User hold MOH audio source | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_user\_hold\_moh\_audio\_source |     |     |
| Network hold MOH audio source | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_network\_hold\_moh\_audio\_source |     |     |
| Auto answer | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_auto\_answer |     |     |
| Call forward all | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_call\_forward\_all |     |     |
| Secondary Calling Search Space for Forward All | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_sec\_calling\_search\_space |     |     |
| Forward busy internal | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_forward\_busy\_internal |     |     |
| Forward busy external | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_forward\_busy\_external |     |     |
| Forward no answer internal | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_forward\_no\_answer\_internal |     |     |
| Forward no answer external | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_forward\_no\_answer\_external |     |     |
| Forward no coverage internal | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_forward\_no\_coverage\_internal |     |     |
| Forward no coverage external | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_forward\_no\_coverage\_external |     |     |
| Forward on CTI failure | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_forward\_on\_cti\_fail |     |     |
| Forward unregistered internal | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_forward\_unregistered\_internal |     |     |
| Forward unregistered external | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_forward\_unregistered\_external |     |     |
| No answer ring duration | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_no\_answer\_ring\_duration |     |     |
| Call pickup group | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_call\_pickup\_group |     |     |
| Display | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_display |     |     |
| ASCII display | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_ascii\_display |     |     |
| Line text label | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_line\_text\_label |     |     |
| ASCII Line text label | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_ascii\_line\_text\_label |     |     |
| Visual message waiting indicator policy | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_visual\_message\_indicator |     |     |
| Audible message waiting indicator policy | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_audible\_message\_indicator |     |     |
| Ring settings (Phone idle) | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_ring\_settings\_idle |     |     |
| Ring settings (Phone active) | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_ring\_settings\_active |     |     |
| Call pickup group audio alert setting (phone idle) | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_call\_pickup\_group\_idle |     |     |
| Call pickup group audio alert setting (phone active) | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_call\_pickup\_group\_active |     |     |
| Recording option | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_recording\_option |     |     |
| Recording profile | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_recording\_profile |     |     |
| Monitoring calling search space | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_monitoring\_css |     |     |
| Log missed calls | int | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_log\_missed\_calls |     |     |
| External phone number mask | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_external\_phone\_number\_mask |     |     |
| Maximum number of calls | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_max\_number\_of\_calls |     |     |
| "Busy" trigger | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_busy\_trigger |     |     |
| Caller name | int | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_caller\_name |     |     |
| Caller number | int | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_caller\_number |     |     |
| Redirected number | int | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_redirected\_number |     |     |
| Dialed number | int | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_dialed\_number |     |     |
| Description | text\_area | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_description |     |     |

### Telephone/Fax

#### Table: isys\_catg\_telephone\_fax\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Type | int | isys\_catg\_telephone\_fax\_list | isys\_catg\_telephone\_fax\_list\_\_isys\_telephone\_fax\_type\_\_id | isys\_telephone\_fax\_type | isys\_telephone\_fax\_type\_\_id |
| Telephone number | text | isys\_catg\_telephone\_fax\_list | isys\_catg\_telephone\_fax\_list\_\_telephone\_number |     |     |
| Fax number | text | isys\_catg\_telephone\_fax\_list | isys\_catg\_telephone\_fax\_list\_\_fax\_number |     |     |
| Extension | text | isys\_catg\_telephone\_fax\_list | isys\_catg\_telephone\_fax\_list\_\_extension |     |     |
| Pincode | text | isys\_catg\_telephone\_fax\_list | isys\_catg\_telephone\_fax\_list\_\_pincode |     |     |
| IMEI number | text | isys\_catg\_telephone\_fax\_list | isys\_catg\_telephone\_fax\_list\_\_imei |     |     |
| Description | text\_area | isys\_catg\_telephone\_fax\_list | isys\_catg\_telephone\_fax\_list\_\_description |     |     |

### Smart Card Certificate

#### Table: isys\_catg\_smartcard\_certificate\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Card number | text | isys\_catg\_smartcard\_certificate\_list | isys\_catg\_smartcard\_certificate\_list\_\_cardnumber |     |     |
| Barring password | text | isys\_catg\_smartcard\_certificate\_list | isys\_catg\_smartcard\_certificate\_list\_\_barring\_password |     |     |
| PIN no. | text | isys\_catg\_smartcard\_certificate\_list | isys\_catg\_smartcard\_certificate\_list\_\_pin\_number |     |     |
| Reference | text | isys\_catg\_smartcard\_certificate\_list | isys\_catg\_smartcard\_certificate\_list\_\_reference |     |     |
| Expires on | date | isys\_catg\_smartcard\_certificate\_list | isys\_catg\_smartcard\_certificate\_list\_\_expires\_on |     |     |
| Description | text\_area | isys\_catg\_smartcard\_certificate\_list | isys\_catg\_smartcard\_certificate\_list\_\_description |     |     |

### Share Access

#### Table: isys\_catg\_share\_access\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Selected object | int | isys\_catg\_share\_access\_list | isys\_catg\_share\_access\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |
| Mountpoint | text | isys\_catg\_share\_access\_list | isys\_catg\_share\_access\_list\_\_mountpoint |     |     |
| Share name | int | isys\_catg\_share\_access\_list | isys\_catg\_share\_access\_list\_\_isys\_catg\_shares\_list\_\_id | isys\_catg\_shares\_list | isys\_catg\_shares\_list\_\_id |
| Description | text\_area | isys\_catg\_share\_access\_list | isys\_catg\_share\_access\_list\_\_description |     |     |

### Certificate

#### Table: isys\_catg\_certificate\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Type | int | isys\_catg\_certificate\_list | isys\_catg\_certificate\_list\_\_isys\_certificate\_type\_\_id | isys\_certificate\_type | isys\_certificate\_type\_\_id |
| Creation date | date | isys\_catg\_certificate\_list | isys\_catg\_certificate\_list\_\_created |     |     |
| Expiration Date | date | isys\_catg\_certificate\_list | isys\_catg\_certificate\_list\_\_expire |     |     |
| Description | text\_area | isys\_catg\_certificate\_list | isys\_catg\_certificate\_list\_\_description |     |     |

### SLA

#### Table: isys\_catg\_sla\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Service-ID | text | isys\_catg\_sla\_list | isys\_catg\_sla\_list\_\_service\_id |     |     |
| SLA service level | int | isys\_catg\_sla\_list | isys\_catg\_sla\_list\_\_service\_level |     |     |
| SLA service level (Dialog) | int | isys\_catg\_sla\_list | isys\_catg\_sla\_list\_\_isys\_sla\_service\_level\_\_id | isys\_sla\_service\_level | isys\_sla\_service\_level\_\_id |
| Weekday | int | isys\_catg\_sla\_list | isys\_catg\_sla\_list\_\_days |     |     |
| Monday | text | isys\_catg\_sla\_list | isys\_catg\_sla\_list\_\_monday\_time |     |     |
| Tuesday | text | isys\_catg\_sla\_list | isys\_catg\_sla\_list\_\_tuesday\_time |     |     |
| Wednesday | text | isys\_catg\_sla\_list | isys\_catg\_sla\_list\_\_wednesday\_time |     |     |
| Thursday | text | isys\_catg\_sla\_list | isys\_catg\_sla\_list\_\_thursday\_time |     |     |
| Friday | text | isys\_catg\_sla\_list | isys\_catg\_sla\_list\_\_friday\_time |     |     |
| Saturday | text | isys\_catg\_sla\_list | isys\_catg\_sla\_list\_\_saturday\_time |     |     |
| Sunday | text | isys\_catg\_sla\_list | isys\_catg\_sla\_list\_\_sunday\_time |     |     |
| Reaction time | int | isys\_catg\_sla\_list | isys\_catg\_sla\_list\_\_reaction\_time |     |     |
| Reaktion time unit | int | isys\_catg\_sla\_list | isys\_catg\_sla\_list\_\_reaction\_time\_unit | isys\_unit\_of\_time | isys\_unit\_of\_time\_\_id |
| Recovery time | int | isys\_catg\_sla\_list | isys\_catg\_sla\_list\_\_recovery\_time |     |     |
| Recovery time unit | int | isys\_catg\_sla\_list | isys\_catg\_sla\_list\_\_recovery\_time\_unit | isys\_unit\_of\_time | isys\_unit\_of\_time\_\_id |
| Calendar | int | isys\_catg\_sla\_list | isys\_catg\_sla\_list\_\_isys\_calendar\_\_id | isys\_calendar | isys\_calendar\_\_id |
| Description | text\_area | isys\_catg\_sla\_list | isys\_catg\_sla\_list\_\_description |     |     |

### LDAP

#### Table: isys\_catg\_ldap\_dn\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Distinguished name (DN) | text | isys\_catg\_ldap\_dn\_list | isys\_catg\_ldap\_dn\_list\_\_title |     |     |
| Description | text\_area | isys\_catg\_ldap\_dn\_list | isys\_catg\_ldap\_dn\_list\_\_description |     |     |

### Host definition

#### Table: isys\_catg\_nagios\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Export this configuration | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_is\_exportable |     |     |
| Export configuration | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_export\_host | isys\_monitoring\_export\_config | isys\_monitoring\_export\_config\_\_id |
| Templates | text | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_host\_tpl |     |     |
| host\_name | text | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_host\_name |     |     |
| host\_name\_selection | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_host\_name\_selection |     |     |
| Hostname | text | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_name1 |     |     |
| Alias | text | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_alias |     |     |
| IP Address | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_isys\_catg\_ip\_list\_\_id | isys\_catg\_ip\_list | isys\_catg\_ip\_list\_\_id |
| address\_selection | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_address\_selection |     |     |
| Choose further objects as parent | text | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_parents |     |     |
| Use the following objects as parents? | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_is\_parent |     |     |
| check\_command | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_check\_command | isys\_nagios\_commands | isys\_nagios\_commands\_\_id |
| check\_command+ | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_check\_command\_plus | isys\_nagios\_commands\_plus | isys\_nagios\_commands\_plus\_\_id |
| check\_command\_parameters | text | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_check\_command\_parameters |     |     |
| check\_interval | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_check\_interval |     |     |
| retry\_interval | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_retry\_interval |     |     |
| max\_check\_attempts | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_max\_check\_attempts |     |     |
| check\_period | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_check\_period | isys\_nagios\_timeperiods | isys\_nagios\_timeperiods\_\_id |
| check\_period + | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_check\_period\_plus | isys\_nagios\_timeperiods\_plus | isys\_nagios\_timeperiods\_plus\_\_id |
| active\_checks\_enabled | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_active\_checks\_enabled |     |     |
| passive\_checks\_enabled | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_passive\_checks\_enabled |     |     |
| notifications\_enabled | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_notifications\_enabled |     |     |
| notification\_options | text | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_notification\_options |     |     |
| notification\_interval | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_notification\_interval |     |     |
| notification\_period | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_notification\_period | isys\_nagios\_timeperiods | isys\_nagios\_timeperiods\_\_id |
| notification\_period + | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_notification\_period\_plus | isys\_nagios\_timeperiods\_plus | isys\_nagios\_timeperiods\_plus\_\_id |
| initial\_state | text | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_initial\_state |     |     |
| obsess\_over\_host | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_obsess\_over\_host |     |     |
| check\_freshness | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_check\_freshness |     |     |
| freshness\_threshold | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_freshness\_threshold |     |     |
| flap\_detection\_enabled | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_flap\_detection\_enabled |     |     |
| flap\_detection\_options | text | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_flap\_detection\_options |     |     |
| low\_flap\_threshold | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_low\_flap\_threshold |     |     |
| high\_flap\_threshold | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_high\_flap\_threshold |     |     |
| event\_handler\_enabled | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_event\_handler\_enabled |     |     |
| event\_handler | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_event\_handler |     |     |
| event\_handler + | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_event\_handler\_plus | isys\_nagios\_commands\_plus | isys\_nagios\_commands\_plus\_\_id |
| event\_handler\_parameters | text | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_event\_handler\_parameters |     |     |
| process\_perf\_data | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_process\_perf\_data |     |     |
| retain\_status\_information | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_retain\_status\_information |     |     |
| retain\_nonstatus\_information | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_retain\_nonstatus\_information |     |     |
| first\_notification\_delay | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_first\_notification\_delay |     |     |
| stalking\_options | text | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_stalking\_options |     |     |
| escalations | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_escalations |     |     |
| action\_url | text | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_action\_url |     |     |
| icon\_image | text | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_icon\_image |     |     |
| icon\_image\_alt | text | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_icon\_image\_alt |     |     |
| vrml\_image | text | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_vrml\_image |     |     |
| statusmap\_image | text | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_statusmap\_image |     |     |
| 2d\_coords | text | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_2d\_coords |     |     |
| 3d\_coords | text | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_3d\_coords |     |     |
| notes | text | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_notes |     |     |
| notes\_url | text | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_notes\_url |     |     |
| display\_name | text | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_display\_name |     |     |
| display\_name\_selection | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_display\_name\_selection |     |     |
| Title | text | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_name2 |     |     |
| custom\_object\_vars | text\_area | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_custom\_obj\_vars |     |     |
| Description | text\_area | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_description |     |     |

### Nagios group

#### Table: isys\_catg\_nagios\_group\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Export this configuration | int | isys\_catg\_nagios\_group\_list | isys\_catg\_nagios\_group\_list\_\_is\_exportable |     |     |
| Group type | int | isys\_catg\_nagios\_group\_list | isys\_catg\_nagios\_group\_list\_\_type |     |     |
| display\_name | text | isys\_catg\_nagios\_group\_list | isys\_catg\_nagios\_group\_list\_\_name |     |     |
| display\_name\_selection | int | isys\_catg\_nagios\_group\_list | isys\_catg\_nagios\_group\_list\_\_name\_selection |     |     |
| Alias | text | isys\_catg\_nagios\_group\_list | isys\_catg\_nagios\_group\_list\_\_alias |     |     |
| Notes | text | isys\_catg\_nagios\_group\_list | isys\_catg\_nagios\_group\_list\_\_notes |     |     |
| Notes URL | text | isys\_catg\_nagios\_group\_list | isys\_catg\_nagios\_group\_list\_\_notes\_url |     |     |
| Action URL | text | isys\_catg\_nagios\_group\_list | isys\_catg\_nagios\_group\_list\_\_action\_url |     |     |
| Description | text\_area | isys\_catg\_nagios\_group\_list | isys\_catg\_nagios\_group\_list\_\_description |     |     |

### Nagios (service)

#### Table: isys\_catg\_nagios\_service\_def\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Active | int | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_is\_active |     |     |
| service\_description | text | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_service\_description |     |     |
| Service-template | text | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_service\_template |     |     |
| check\_command | int | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_check\_command | isys\_nagios\_commands | isys\_nagios\_commands\_\_id |
| check\_command\_plus | int | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_check\_command\_plus | isys\_nagios\_commands\_plus | isys\_nagios\_commands\_plus\_\_id |
| check\_command\_parameters | text | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_check\_command\_parameters |     |     |
| max\_check\_attempts | int | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_max\_check\_attempts |     |     |
| check\_interval | int | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_check\_interval |     |     |
| retry\_interval | int | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_retry\_interval |     |     |
| check\_period | int | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_check\_period | isys\_nagios\_timeperiods | isys\_nagios\_timeperiods\_\_id |
| check\_period+ | int | timeperiod\_plus\_a | isys\_catg\_nagios\_service\_def\_list\_\_check\_period\_plus | isys\_nagios\_timeperiods\_plus | isys\_nagios\_timeperiods\_plus\_\_id |
| notification\_interval | int | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_notification\_interval | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_id |
| notification\_period | int | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_notification\_period | isys\_nagios\_timeperiods | isys\_nagios\_timeperiods\_\_id |
| notification\_period+ | int | timeperiod\_plus\_b | isys\_catg\_nagios\_service\_def\_list\_\_notification\_period\_plus | isys\_nagios\_timeperiods\_plus | isys\_nagios\_timeperiods\_plus\_\_id |
| display\_name | text | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_display\_name |     |     |
| display\_name\_selection | int | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_display\_name\_selection |     |     |
| active\_checks\_enabled | int | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_active\_checks\_enabled |     |     |
| passive\_checks\_enabled | int | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_passive\_checks\_enabled |     |     |
| initial\_state | text | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_initial\_state |     |     |
| notifications\_enabled | int | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_notifications\_enabled |     |     |
| notification\_options | text | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_notification\_options |     |     |
| first\_notification\_delay | int | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_first\_notification\_delay |     |     |
| flap\_detection\_enabled | int | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_flap\_detection\_enabled |     |     |
| flap\_detection\_options | text | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_flap\_detection\_options |     |     |
| low\_flap\_threshold | int | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_low\_flap\_threshold |     |     |
| high\_flap\_threshold | int | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_high\_flap\_threshold |     |     |
| is\_volatile | int | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_is\_volatile |     |     |
| obsess\_over\_service | int | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_obsess\_over\_service |     |     |
| check\_freshness | int | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_check\_freshness |     |     |
| freshness\_threshold | int | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_freshness\_threshold |     |     |
| event\_handler\_enabled | int | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_event\_handler\_enabled |     |     |
| event\_handler | int | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_event\_handler |     |     |
| event\_handler+ | int | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_event\_handler\_plus | isys\_nagios\_commands\_plus | isys\_nagios\_commands\_plus\_\_id |
| process\_perf\_data | int | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_process\_perf\_data |     |     |
| retain\_status\_information | int | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_retain\_status\_information |     |     |
| retain\_nonstatus\_information | int | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_retain\_nonstatus\_information |     |     |
| stalking\_options | text | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_stalking\_options |     |     |
| LC\_\_CATG\_\_NAGIOS\_SERVICE\_DEF\_\_CONFIG\_EXPORT | int | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_is\_exportable |     |     |
| escalations | int | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_escalations | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_id |
| Description | text\_area | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_description |     |     |
| action\_url | text | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_action\_url |     |     |
| icon\_image | text | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_icon\_image |     |     |
| icon\_image\_alt | text | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_icon\_image\_alt |     |     |
| notes | text | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_notes |     |     |
| notes\_url | text | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_notes\_url |     |     |
| custom\_object\_vars | text\_area | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_custom\_obj\_vars |     |     |

### Nagios (service TPL)

#### Table: isys\_catg\_nagios\_service\_tpl\_def\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| check\_command | int | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_check\_command | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_id |
| name | text | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_name |     |     |
| check\_command\_plus | int | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_check\_command\_plus | isys\_nagios\_commands\_plus | isys\_nagios\_commands\_plus\_\_id |
| check\_command\_parameters | text | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_check\_command\_parameters |     |     |
| max\_check\_attempts | int | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_max\_check\_attempts |     |     |
| check\_interval | int | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_check\_interval |     |     |
| retry\_interval | int | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_retry\_interval |     |     |
| check\_period | int | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_check\_period | isys\_nagios\_timeperiods | isys\_nagios\_timeperiods\_\_id |
| check\_period+ | int | timeperiod\_plus\_a | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_check\_period\_plus | isys\_nagios\_timeperiods\_plus | isys\_nagios\_timeperiods\_plus\_\_id |
| notification\_interval | int | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_notification\_interval |     |     |
| notification\_period | int | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_notification\_period | isys\_nagios\_timeperiods | isys\_nagios\_timeperiods\_\_id |
| notification\_period+ | int | timeperiod\_plus\_b | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_notification\_period\_plus | isys\_nagios\_timeperiods\_plus | isys\_nagios\_timeperiods\_plus\_\_id |
| display\_name | text | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_display\_name |     |     |
| display\_name\_selection | int | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_display\_name\_selection |     |     |
| active\_checks\_enabled | int | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_active\_checks\_enabled |     |     |
| passive\_checks\_enabled | int | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_passive\_checks\_enabled |     |     |
| initial\_state | text | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_initial\_state |     |     |
| notifications\_enabled | int | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_notifications\_enabled |     |     |
| notification\_options | text | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_notification\_options |     |     |
| first\_notification\_delay | int | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_first\_notification\_delay |     |     |
| flap\_detection\_enabled | int | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_flap\_detection\_enabled |     |     |
| flap\_detection\_options | text | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_flap\_detection\_options |     |     |
| low\_flap\_threshold | int | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_low\_flap\_threshold |     |     |
| high\_flap\_threshold | int | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_high\_flap\_threshold |     |     |
| is\_volatile | int | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_is\_volatile |     |     |
| obsess\_over\_service | int | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_obsess\_over\_service |     |     |
| check\_freshness | int | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_check\_freshness |     |     |
| freshness\_threshold | int | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_freshness\_threshold |     |     |
| event\_handler\_enabled | int | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_event\_handler\_enabled |     |     |
| event\_handler | int | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_event\_handler |     |     |
| event\_handler+ | int | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_event\_handler\_plus | isys\_nagios\_commands\_plus | isys\_nagios\_commands\_plus\_\_id |
| process\_perf\_data | int | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_process\_perf\_data |     |     |
| retain\_status\_information | int | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_retain\_status\_info |     |     |
| retain\_nonstatus\_information | int | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_retain\_nonstatus\_info |     |     |
| stalking\_options | text | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_stalking\_options |     |     |
| LC\_\_CATG\_\_NAGIOS\_SERVICE\_TPL\_DEF\_\_CONFIG\_EXPORT | int | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_is\_exportable |     |     |
| escalations | int | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_escalations | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_id |
| Description | text\_area | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_description |     |     |
| action\_url | text | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_action\_url |     |     |
| icon\_image | text | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_icon\_image |     |     |
| icon\_image\_alt | text | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_icon\_image\_alt |     |     |
| notes | text | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_notes |     |     |
| notes\_url | text | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_notes\_url |     |     |
| custom\_object\_vars | text\_area | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_custom\_obj\_vars |     |     |

### Service definition

#### Table: isys\_catg\_nagios\_service\_def\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Active | int | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_is\_active |     |     |
| service\_description | text | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_service\_description |     |     |
| Service-template | text | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_service\_template |     |     |
| check\_command | int | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_check\_command | isys\_nagios\_commands | isys\_nagios\_commands\_\_id |
| check\_command\_plus | int | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_check\_command\_plus | isys\_nagios\_commands\_plus | isys\_nagios\_commands\_plus\_\_id |
| check\_command\_parameters | text | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_check\_command\_parameters |     |     |
| max\_check\_attempts | int | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_max\_check\_attempts |     |     |
| check\_interval | int | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_check\_interval |     |     |
| retry\_interval | int | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_retry\_interval |     |     |
| check\_period | int | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_check\_period | isys\_nagios\_timeperiods | isys\_nagios\_timeperiods\_\_id |
| check\_period+ | int | timeperiod\_plus\_a | isys\_catg\_nagios\_service\_def\_list\_\_check\_period\_plus | isys\_nagios\_timeperiods\_plus | isys\_nagios\_timeperiods\_plus\_\_id |
| notification\_interval | int | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_notification\_interval | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_id |
| notification\_period | int | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_notification\_period | isys\_nagios\_timeperiods | isys\_nagios\_timeperiods\_\_id |
| notification\_period+ | int | timeperiod\_plus\_b | isys\_catg\_nagios\_service\_def\_list\_\_notification\_period\_plus | isys\_nagios\_timeperiods\_plus | isys\_nagios\_timeperiods\_plus\_\_id |
| display\_name | text | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_display\_name |     |     |
| display\_name\_selection | int | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_display\_name\_selection |     |     |
| active\_checks\_enabled | int | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_active\_checks\_enabled |     |     |
| passive\_checks\_enabled | int | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_passive\_checks\_enabled |     |     |
| initial\_state | text | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_initial\_state |     |     |
| notifications\_enabled | int | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_notifications\_enabled |     |     |
| notification\_options | text | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_notification\_options |     |     |
| first\_notification\_delay | int | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_first\_notification\_delay |     |     |
| flap\_detection\_enabled | int | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_flap\_detection\_enabled |     |     |
| flap\_detection\_options | text | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_flap\_detection\_options |     |     |
| low\_flap\_threshold | int | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_low\_flap\_threshold |     |     |
| high\_flap\_threshold | int | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_high\_flap\_threshold |     |     |
| is\_volatile | int | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_is\_volatile |     |     |
| obsess\_over\_service | int | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_obsess\_over\_service |     |     |
| check\_freshness | int | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_check\_freshness |     |     |
| freshness\_threshold | int | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_freshness\_threshold |     |     |
| event\_handler\_enabled | int | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_event\_handler\_enabled |     |     |
| event\_handler | int | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_event\_handler |     |     |
| event\_handler+ | int | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_event\_handler\_plus | isys\_nagios\_commands\_plus | isys\_nagios\_commands\_plus\_\_id |
| process\_perf\_data | int | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_process\_perf\_data |     |     |
| retain\_status\_information | int | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_retain\_status\_information |     |     |
| retain\_nonstatus\_information | int | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_retain\_nonstatus\_information |     |     |
| stalking\_options | text | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_stalking\_options |     |     |
| LC\_\_CATG\_\_NAGIOS\_SERVICE\_DEF\_\_CONFIG\_EXPORT | int | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_is\_exportable |     |     |
| escalations | int | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_escalations | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_id |
| Description | text\_area | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_description |     |     |
| action\_url | text | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_action\_url |     |     |
| icon\_image | text | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_icon\_image |     |     |
| icon\_image\_alt | text | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_icon\_image\_alt |     |     |
| notes | text | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_notes |     |     |
| notes\_url | text | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_notes\_url |     |     |
| custom\_object\_vars | text\_area | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_custom\_obj\_vars |     |     |

### Backwards service assignment

#### Table: isys\_catg\_nagios\_refs\_services\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Assigned objects | int | isys\_catg\_nagios\_refs\_services\_list | isys\_catg\_nagios\_refs\_services\_list\_\_isys\_obj\_\_id\_\_host |     |     |

### Service-template definition

#### Table: isys\_catg\_nagios\_service\_tpl\_def\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| check\_command | int | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_check\_command | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_id |
| name | text | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_name |     |     |
| check\_command\_plus | int | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_check\_command\_plus | isys\_nagios\_commands\_plus | isys\_nagios\_commands\_plus\_\_id |
| check\_command\_parameters | text | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_check\_command\_parameters |     |     |
| max\_check\_attempts | int | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_max\_check\_attempts |     |     |
| check\_interval | int | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_check\_interval |     |     |
| retry\_interval | int | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_retry\_interval |     |     |
| check\_period | int | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_check\_period | isys\_nagios\_timeperiods | isys\_nagios\_timeperiods\_\_id |
| check\_period+ | int | timeperiod\_plus\_a | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_check\_period\_plus | isys\_nagios\_timeperiods\_plus | isys\_nagios\_timeperiods\_plus\_\_id |
| notification\_interval | int | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_notification\_interval |     |     |
| notification\_period | int | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_notification\_period | isys\_nagios\_timeperiods | isys\_nagios\_timeperiods\_\_id |
| notification\_period+ | int | timeperiod\_plus\_b | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_notification\_period\_plus | isys\_nagios\_timeperiods\_plus | isys\_nagios\_timeperiods\_plus\_\_id |
| display\_name | text | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_display\_name |     |     |
| display\_name\_selection | int | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_display\_name\_selection |     |     |
| active\_checks\_enabled | int | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_active\_checks\_enabled |     |     |
| passive\_checks\_enabled | int | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_passive\_checks\_enabled |     |     |
| initial\_state | text | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_initial\_state |     |     |
| notifications\_enabled | int | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_notifications\_enabled |     |     |
| notification\_options | text | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_notification\_options |     |     |
| first\_notification\_delay | int | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_first\_notification\_delay |     |     |
| flap\_detection\_enabled | int | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_flap\_detection\_enabled |     |     |
| flap\_detection\_options | text | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_flap\_detection\_options |     |     |
| low\_flap\_threshold | int | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_low\_flap\_threshold |     |     |
| high\_flap\_threshold | int | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_high\_flap\_threshold |     |     |
| is\_volatile | int | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_is\_volatile |     |     |
| obsess\_over\_service | int | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_obsess\_over\_service |     |     |
| check\_freshness | int | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_check\_freshness |     |     |
| freshness\_threshold | int | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_freshness\_threshold |     |     |
| event\_handler\_enabled | int | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_event\_handler\_enabled |     |     |
| event\_handler | int | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_event\_handler |     |     |
| event\_handler+ | int | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_event\_handler\_plus | isys\_nagios\_commands\_plus | isys\_nagios\_commands\_plus\_\_id |
| process\_perf\_data | int | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_process\_perf\_data |     |     |
| retain\_status\_information | int | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_retain\_status\_info |     |     |
| retain\_nonstatus\_information | int | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_retain\_nonstatus\_info |     |     |
| stalking\_options | text | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_stalking\_options |     |     |
| LC\_\_CATG\_\_NAGIOS\_SERVICE\_TPL\_DEF\_\_CONFIG\_EXPORT | int | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_is\_exportable |     |     |
| escalations | int | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_escalations | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_id |
| Description | text\_area | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_description |     |     |
| action\_url | text | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_action\_url |     |     |
| icon\_image | text | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_icon\_image |     |     |
| icon\_image\_alt | text | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_icon\_image\_alt |     |     |
| notes | text | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_notes |     |     |
| notes\_url | text | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_notes\_url |     |     |
| custom\_object\_vars | text\_area | isys\_catg\_nagios\_service\_tpl\_def\_list | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_custom\_obj\_vars |     |     |

### Assigned objects

#### Table: isys\_catg\_virtual\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Assigned objects | int | isys\_catg\_virtual\_list | isys\_catg\_nagios\_service\_def\_list\_\_service\_template |     |     |

### Nagios (host TPL)

#### Table: isys\_catg\_nagios\_host\_tpl\_def\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Hostname | text | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_name1 |     |     |
| Nagios Host | int | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_export\_host | isys\_monitoring\_export\_config | isys\_monitoring\_export\_config\_\_id |
| LC\_\_CATG\_\_NAGIOS\_HOST\_TPL\_DEF\_MAX\_CHECK\_ATTEMPTS | int | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_max\_check\_attempts |     |     |
| LC\_\_CATG\_\_NAGIOS\_HOST\_TPL\_DEF\_CHECK\_PERIOD | int | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_check\_period | isys\_nagios\_timeperiods | isys\_nagios\_timeperiods\_\_id |
| check\_period + | int | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_check\_period\_plus | isys\_nagios\_timeperiods\_plus | isys\_nagios\_timeperiods\_plus\_\_id |
| LC\_\_CATG\_\_NAGIOS\_HOST\_TPL\_DEF\_NOTIFICATION\_INTERVAL | int | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_notification\_interval |     |     |
| notification\_period | int | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_notification\_period | isys\_nagios\_timeperiods | isys\_nagios\_timeperiods\_\_id |
| notification\_period + | int | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_notification\_period\_plus | isys\_nagios\_timeperiods\_plus | isys\_nagios\_timeperiods\_plus\_\_id |
| display\_name | text | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_display\_name |     |     |
| display\_name\_selection | int | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_display\_name\_selection |     |     |
| check\_command | int | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_check\_command | isys\_nagios\_commands | isys\_nagios\_commands\_\_id |
| check\_command+ | int | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_check\_command\_plus | isys\_nagios\_commands\_plus | isys\_nagios\_commands\_plus\_\_id |
| check\_command\_parameters | text | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_check\_command\_parameters |     |     |
| initial\_state | text | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_initial\_state |     |     |
| check\_interval | int | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_check\_interval |     |     |
| retry\_interval | int | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_retry\_interval |     |     |
| active\_checks\_enabled | int | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_active\_checks\_enabled |     |     |
| passive\_checks\_enabled | int | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_passive\_checks\_enabled |     |     |
| obsess\_over\_host | int | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_obsess\_over\_host |     |     |
| check\_freshness | int | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_check\_freshness |     |     |
| freshness\_threshold | int | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_freshness\_threshold |     |     |
| flap\_detection\_enabled | int | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_flap\_detection\_enabled |     |     |
| flap\_detection\_options | text | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_flap\_detection\_options |     |     |
| event\_handler | int | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_event\_handler |     |     |
| event\_handler + | int | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_event\_handler\_plus | isys\_nagios\_commands\_plus | isys\_nagios\_commands\_plus\_\_id |
| event\_handler\_parameters | text | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_event\_handler\_parameters |     |     |
| event\_handler\_enabled | int | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_event\_handler\_enabled |     |     |
| low\_flap\_threshold | int | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_low\_flap\_threshold |     |     |
| high\_flap\_threshold | int | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_high\_flap\_threshold |     |     |
| process\_perf\_data | int | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_process\_perf\_data |     |     |
| retain\_status\_information | int | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_retain\_status\_information |     |     |
| retain\_nonstatus\_information | int | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_retain\_nonstatus\_information |     |     |
| first\_notification\_delay | int | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_first\_notification\_delay |     |     |
| notification\_options | text | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_notification\_options |     |     |
| notifications\_enabled | int | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_notifications\_enabled |     |     |
| stalking\_options | text | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_stalking\_options |     |     |
| escalations | int | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_escalations |     |     |
| Title | text | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_name2 |     |     |
| Description | text\_area | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_description |     |     |
| action\_url | text | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_action\_url |     |     |
| icon\_image | text | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_icon\_image |     |     |
| icon\_image\_alt | text | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_icon\_image\_alt |     |     |
| vrml\_image | text | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_vrml\_image |     |     |
| statusmap\_image | text | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_statusmap\_image |     |     |
| notes | text | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_notes |     |     |
| notes\_url | text | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_notes\_url |     |     |
| custom\_object\_vars | text\_area | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_custom\_obj\_vars |     |     |

### Host-template definition

#### Table: isys\_catg\_nagios\_host\_tpl\_def\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Hostname | text | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_name1 |     |     |
| Nagios Host | int | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_export\_host | isys\_monitoring\_export\_config | isys\_monitoring\_export\_config\_\_id |
| LC\_\_CATG\_\_NAGIOS\_HOST\_TPL\_DEF\_MAX\_CHECK\_ATTEMPTS | int | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_max\_check\_attempts |     |     |
| LC\_\_CATG\_\_NAGIOS\_HOST\_TPL\_DEF\_CHECK\_PERIOD | int | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_check\_period | isys\_nagios\_timeperiods | isys\_nagios\_timeperiods\_\_id |
| check\_period + | int | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_check\_period\_plus | isys\_nagios\_timeperiods\_plus | isys\_nagios\_timeperiods\_plus\_\_id |
| LC\_\_CATG\_\_NAGIOS\_HOST\_TPL\_DEF\_NOTIFICATION\_INTERVAL | int | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_notification\_interval |     |     |
| notification\_period | int | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_notification\_period | isys\_nagios\_timeperiods | isys\_nagios\_timeperiods\_\_id |
| notification\_period + | int | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_notification\_period\_plus | isys\_nagios\_timeperiods\_plus | isys\_nagios\_timeperiods\_plus\_\_id |
| display\_name | text | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_display\_name |     |     |
| display\_name\_selection | int | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_display\_name\_selection |     |     |
| check\_command | int | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_check\_command | isys\_nagios\_commands | isys\_nagios\_commands\_\_id |
| check\_command+ | int | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_check\_command\_plus | isys\_nagios\_commands\_plus | isys\_nagios\_commands\_plus\_\_id |
| check\_command\_parameters | text | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_check\_command\_parameters |     |     |
| initial\_state | text | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_initial\_state |     |     |
| check\_interval | int | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_check\_interval |     |     |
| retry\_interval | int | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_retry\_interval |     |     |
| active\_checks\_enabled | int | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_active\_checks\_enabled |     |     |
| passive\_checks\_enabled | int | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_passive\_checks\_enabled |     |     |
| obsess\_over\_host | int | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_obsess\_over\_host |     |     |
| check\_freshness | int | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_check\_freshness |     |     |
| freshness\_threshold | int | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_freshness\_threshold |     |     |
| flap\_detection\_enabled | int | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_flap\_detection\_enabled |     |     |
| flap\_detection\_options | text | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_flap\_detection\_options |     |     |
| event\_handler | int | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_event\_handler |     |     |
| event\_handler + | int | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_event\_handler\_plus | isys\_nagios\_commands\_plus | isys\_nagios\_commands\_plus\_\_id |
| event\_handler\_parameters | text | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_event\_handler\_parameters |     |     |
| event\_handler\_enabled | int | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_event\_handler\_enabled |     |     |
| low\_flap\_threshold | int | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_low\_flap\_threshold |     |     |
| high\_flap\_threshold | int | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_high\_flap\_threshold |     |     |
| process\_perf\_data | int | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_process\_perf\_data |     |     |
| retain\_status\_information | int | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_retain\_status\_information |     |     |
| retain\_nonstatus\_information | int | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_retain\_nonstatus\_information |     |     |
| first\_notification\_delay | int | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_first\_notification\_delay |     |     |
| notification\_options | text | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_notification\_options |     |     |
| notifications\_enabled | int | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_notifications\_enabled |     |     |
| stalking\_options | text | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_stalking\_options |     |     |
| escalations | int | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_escalations |     |     |
| Title | text | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_name2 |     |     |
| Description | text\_area | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_description |     |     |
| action\_url | text | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_action\_url |     |     |
| icon\_image | text | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_icon\_image |     |     |
| icon\_image\_alt | text | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_icon\_image\_alt |     |     |
| vrml\_image | text | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_vrml\_image |     |     |
| statusmap\_image | text | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_statusmap\_image |     |     |
| notes | text | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_notes |     |     |
| notes\_url | text | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_notes\_url |     |     |
| custom\_object\_vars | text\_area | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_custom\_obj\_vars |     |     |

### Nagios (host)

#### Table: isys\_catg\_nagios\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Export this configuration | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_is\_exportable |     |     |
| Export configuration | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_export\_host | isys\_monitoring\_export\_config | isys\_monitoring\_export\_config\_\_id |
| Templates | text | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_host\_tpl |     |     |
| host\_name | text | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_host\_name |     |     |
| host\_name\_selection | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_host\_name\_selection |     |     |
| Hostname | text | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_name1 |     |     |
| Alias | text | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_alias |     |     |
| IP Address | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_isys\_catg\_ip\_list\_\_id | isys\_catg\_ip\_list | isys\_catg\_ip\_list\_\_id |
| address\_selection | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_address\_selection |     |     |
| Choose further objects as parent | text | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_parents |     |     |
| Use the following objects as parents? | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_is\_parent |     |     |
| check\_command | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_check\_command | isys\_nagios\_commands | isys\_nagios\_commands\_\_id |
| check\_command+ | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_check\_command\_plus | isys\_nagios\_commands\_plus | isys\_nagios\_commands\_plus\_\_id |
| check\_command\_parameters | text | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_check\_command\_parameters |     |     |
| check\_interval | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_check\_interval |     |     |
| retry\_interval | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_retry\_interval |     |     |
| max\_check\_attempts | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_max\_check\_attempts |     |     |
| check\_period | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_check\_period | isys\_nagios\_timeperiods | isys\_nagios\_timeperiods\_\_id |
| check\_period + | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_check\_period\_plus | isys\_nagios\_timeperiods\_plus | isys\_nagios\_timeperiods\_plus\_\_id |
| active\_checks\_enabled | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_active\_checks\_enabled |     |     |
| passive\_checks\_enabled | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_passive\_checks\_enabled |     |     |
| notifications\_enabled | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_notifications\_enabled |     |     |
| notification\_options | text | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_notification\_options |     |     |
| notification\_interval | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_notification\_interval |     |     |
| notification\_period | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_notification\_period | isys\_nagios\_timeperiods | isys\_nagios\_timeperiods\_\_id |
| notification\_period + | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_notification\_period\_plus | isys\_nagios\_timeperiods\_plus | isys\_nagios\_timeperiods\_plus\_\_id |
| initial\_state | text | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_initial\_state |     |     |
| obsess\_over\_host | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_obsess\_over\_host |     |     |
| check\_freshness | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_check\_freshness |     |     |
| freshness\_threshold | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_freshness\_threshold |     |     |
| flap\_detection\_enabled | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_flap\_detection\_enabled |     |     |
| flap\_detection\_options | text | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_flap\_detection\_options |     |     |
| low\_flap\_threshold | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_low\_flap\_threshold |     |     |
| high\_flap\_threshold | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_high\_flap\_threshold |     |     |
| event\_handler\_enabled | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_event\_handler\_enabled |     |     |
| event\_handler | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_event\_handler |     |     |
| event\_handler + | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_event\_handler\_plus | isys\_nagios\_commands\_plus | isys\_nagios\_commands\_plus\_\_id |
| event\_handler\_parameters | text | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_event\_handler\_parameters |     |     |
| process\_perf\_data | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_process\_perf\_data |     |     |
| retain\_status\_information | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_retain\_status\_information |     |     |
| retain\_nonstatus\_information | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_retain\_nonstatus\_information |     |     |
| first\_notification\_delay | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_first\_notification\_delay |     |     |
| stalking\_options | text | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_stalking\_options |     |     |
| escalations | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_escalations |     |     |
| action\_url | text | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_action\_url |     |     |
| icon\_image | text | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_icon\_image |     |     |
| icon\_image\_alt | text | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_icon\_image\_alt |     |     |
| vrml\_image | text | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_vrml\_image |     |     |
| statusmap\_image | text | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_statusmap\_image |     |     |
| 2d\_coords | text | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_2d\_coords |     |     |
| 3d\_coords | text | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_3d\_coords |     |     |
| notes | text | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_notes |     |     |
| notes\_url | text | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_notes\_url |     |     |
| display\_name | text | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_display\_name |     |     |
| display\_name\_selection | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_display\_name\_selection |     |     |
| Title | text | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_name2 |     |     |
| custom\_object\_vars | text\_area | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_custom\_obj\_vars |     |     |
| Description | text\_area | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_description |     |     |

### Assigned objects

#### Table: isys\_catg\_virtual\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Assigned objects | text | isys\_catg\_virtual\_list | isys\_catg\_nagios\_list\_\_host\_tpl |     |     |

### Service assignment

#### Table: isys\_catg\_nagios\_refs\_services\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Nagios service | int | isys\_catg\_nagios\_refs\_services\_list | isys\_catg\_nagios\_refs\_services\_list\_\_isys\_obj\_\_id\_\_service | isys\_obj | isys\_obj\_\_id |

### Nagios (application)

#### Table: isys\_catg\_nagios\_refs\_services\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Nagios service | int | isys\_catg\_nagios\_refs\_services\_list | isys\_catg\_nagios\_refs\_services\_list\_\_isys\_obj\_\_id\_\_service | isys\_obj | isys\_obj\_\_id |

### Service assignment

#### Table: isys\_catg\_nagios\_refs\_services\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Nagios service | int | isys\_catg\_nagios\_refs\_services\_list | isys\_catg\_nagios\_refs\_services\_list\_\_isys\_obj\_\_id\_\_service | isys\_obj | isys\_obj\_\_id |

### Service dependencies

#### Table: isys\_catg\_nagios\_service\_dep\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Host | int | chostdep | isys\_catg\_nagios\_service\_dep\_list\_\_host\_dep\_connection | isys\_catg\_nagios\_refs\_services\_list | isys\_catg\_nagios\_refs\_services\_list\_\_id |
| Service (Master) | int | cservicedep | isys\_catg\_nagios\_service\_dep\_list\_\_service\_dep\_connection |     |     |
| Host (Master) | int | chost | isys\_catg\_nagios\_service\_dep\_list\_\_host\_connection | isys\_catg\_nagios\_refs\_services\_list | isys\_catg\_nagios\_refs\_services\_list\_\_id |
| inherits\_parent | int | isys\_catg\_nagios\_service\_dep\_list | isys\_catg\_nagios\_service\_dep\_list\_\_inherits\_parent |     |     |
| execution\_failure\_criteria | int | isys\_catg\_nagios\_service\_dep\_list | isys\_catg\_nagios\_service\_dep\_list\_\_exec\_fail\_criteria | isys\_catg\_nagios\_service\_dep\_list | isys\_catg\_nagios\_service\_dep\_list\_\_id |
| notification\_failure\_criteria | int | isys\_catg\_nagios\_service\_dep\_list | isys\_catg\_nagios\_service\_dep\_list\_\_notif\_fail\_criteria | isys\_catg\_nagios\_service\_dep\_list | isys\_catg\_nagios\_service\_dep\_list\_\_id |
| dependency\_period | int | isys\_catg\_nagios\_service\_dep\_list | isys\_catg\_nagios\_service\_dep\_list\_\_dep\_period | isys\_nagios\_timeperiods | isys\_nagios\_timeperiods\_\_id |
| dependency\_period+ | int | timeperiod\_plus\_b | isys\_catg\_nagios\_service\_dep\_list\_\_dep\_period\_plus | isys\_nagios\_timeperiods\_plus | isys\_nagios\_timeperiods\_plus\_\_id |
| Description | text\_area | isys\_catg\_nagios\_service\_dep\_list | isys\_catg\_nagios\_service\_dep\_list\_\_description |     |     |

### Address

#### Table: isys\_catg\_address\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Additional address information | text\_area | isys\_catg\_address\_list | isys\_catg\_address\_list\_\_address |     |     |
| Street | text | isys\_catg\_address\_list | isys\_catg\_address\_list\_\_street |     |     |
| House number | text | isys\_catg\_address\_list | isys\_catg\_address\_list\_\_house\_no |     |     |
| Floors | int | isys\_catg\_address\_list | isys\_catg\_address\_list\_\_stories |     |     |
| Postal code | text | isys\_catg\_address\_list | isys\_catg\_address\_list\_\_postalcode |     |     |
| City | text | isys\_catg\_address\_list | isys\_catg\_address\_list\_\_city |     |     |
| Region | text | isys\_catg\_address\_list | isys\_catg\_address\_list\_\_region |     |     |
| Country | text | isys\_catg\_address\_list | isys\_catg\_address\_list\_\_country |     |     |
| Description | text\_area | isys\_catg\_address\_list | isys\_catg\_address\_list\_\_description |     |     |

### Monitoring

#### Table: isys\_catg\_monitoring\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Active? | int | isys\_catg\_monitoring\_list | isys\_catg\_monitoring\_list\_\_active |     |     |
| Host | int | isys\_catg\_monitoring\_list | isys\_catg\_monitoring\_list\_\_isys\_monitoring\_hosts\_\_id | isys\_monitoring\_hosts | isys\_monitoring\_hosts\_\_id |
| Hostname | text | isys\_catg\_monitoring\_list | isys\_catg\_monitoring\_list\_\_host\_name |     |     |
| Hostname selection | int | isys\_catg\_monitoring\_list | isys\_catg\_monitoring\_list\_\_host\_name\_selection |     |     |
| Description | text\_area | isys\_catg\_monitoring\_list | isys\_catg\_monitoring\_list\_\_description |     |     |

### Livestatus

#### Table: isys\_catg\_virtual\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Livestatus | int | isys\_catg\_virtual\_list | isys\_catg\_monitoring\_list\_\_active |     |     |
| Livestatus (button) | int | isys\_catg\_virtual\_list | isys\_catg\_monitoring\_list\_\_active |     |     |

### Vehicle

#### Table: isys\_catg\_vehicle\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Licence plate | text | isys\_catg\_vehicle\_list | isys\_catg\_vehicle\_list\_\_licence\_plate |     |     |
| Description | text\_area | isys\_catg\_vehicle\_list | isys\_catg\_vehicle\_list\_\_description |     |     |

### Aircraft

#### Table: isys\_catg\_aircraft\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Aircraft registration | text | isys\_catg\_aircraft\_list | isys\_catg\_aircraft\_list\_\_registration |     |     |
| Description | text\_area | isys\_catg\_aircraft\_list | isys\_catg\_aircraft\_list\_\_description |     |     |

### Network connections

#### Table: isys\_catg\_net\_listener\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Layer 3/4 Protocol | int | isys\_catg\_net\_listener\_list | isys\_catg\_net\_listener\_list\_\_isys\_net\_protocol\_\_id | isys\_net\_protocol | isys\_net\_protocol\_\_id |
| Layer 5-7 Protocol | int | isys\_catg\_net\_listener\_list | isys\_catg\_net\_listener\_list\_\_isys\_net\_protocol\_layer\_5\_\_id | isys\_net\_protocol\_layer\_5 | isys\_net\_protocol\_layer\_5\_\_id |
| (Bind) ip address | int | isys\_catg\_net\_listener\_list | isys\_catg\_net\_listener\_list\_\_isys\_cats\_net\_ip\_addresses\_list\_\_id | isys\_cats\_net\_ip\_addresses\_list | isys\_cats\_net\_ip\_addresses\_list\_\_id |
| Of  | int | isys\_catg\_net\_listener\_list | isys\_catg\_net\_listener\_list\_\_port\_from |     |     |
| To  | int | isys\_catg\_net\_listener\_list | isys\_catg\_net\_listener\_list\_\_port\_to |     |     |
| Opened by application | int | opened\_by | isys\_catg\_net\_listener\_list\_\_opened\_by | isys\_obj | isys\_obj\_\_id |
| Gateway | int | gateway | isys\_catg\_net\_listener\_list\_\_gateway | isys\_obj | isys\_obj\_\_id |
| Description | text\_area | isys\_catg\_net\_listener\_list | isys\_catg\_net\_listener\_list\_\_description |     |     |

### Listener

#### Table: isys\_catg\_net\_listener\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Layer 3/4 Protocol | int | isys\_catg\_net\_listener\_list | isys\_catg\_net\_listener\_list\_\_isys\_net\_protocol\_\_id | isys\_net\_protocol | isys\_net\_protocol\_\_id |
| Layer 5-7 Protocol | int | isys\_catg\_net\_listener\_list | isys\_catg\_net\_listener\_list\_\_isys\_net\_protocol\_layer\_5\_\_id | isys\_net\_protocol\_layer\_5 | isys\_net\_protocol\_layer\_5\_\_id |
| (Bind) ip address | int | isys\_catg\_net\_listener\_list | isys\_catg\_net\_listener\_list\_\_isys\_cats\_net\_ip\_addresses\_list\_\_id | isys\_cats\_net\_ip\_addresses\_list | isys\_cats\_net\_ip\_addresses\_list\_\_id |
| Of  | int | isys\_catg\_net\_listener\_list | isys\_catg\_net\_listener\_list\_\_port\_from |     |     |
| To  | int | isys\_catg\_net\_listener\_list | isys\_catg\_net\_listener\_list\_\_port\_to |     |     |
| Opened by application | int | opened\_by | isys\_catg\_net\_listener\_list\_\_opened\_by | isys\_obj | isys\_obj\_\_id |
| Gateway | int | gateway | isys\_catg\_net\_listener\_list\_\_gateway | isys\_obj | isys\_obj\_\_id |
| Description | text\_area | isys\_catg\_net\_listener\_list | isys\_catg\_net\_listener\_list\_\_description |     |     |

### Connection

#### Table: isys\_catg\_net\_connector\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| (Source) ip address | int | isys\_catg\_net\_connector\_list | isys\_catg\_net\_connector\_list\_\_ip\_addresses\_list\_\_id | isys\_cats\_net\_ip\_addresses\_list | isys\_cats\_net\_ip\_addresses\_list\_\_id |
| Of  | int | isys\_catg\_net\_connector\_list | isys\_catg\_net\_connector\_list\_\_port\_from |     |     |
| To  | int | isys\_catg\_net\_connector\_list | isys\_catg\_net\_connector\_list\_\_port\_to |     |     |
| Listener | int | isys\_catg\_net\_connector\_list | isys\_catg\_net\_connector\_list\_\_isys\_catg\_net\_listener\_list\_\_id | isys\_catg\_net\_listener\_list | isys\_catg\_net\_listener\_list\_\_id |
| Connected with | int | isys\_catg\_net\_connector\_list | isys\_catg\_net\_connector\_list\_\_isys\_catg\_net\_listener\_list\_\_id | isys\_catg\_net\_listener\_list | isys\_catg\_net\_listener\_list\_\_id |
| Gateway | int | gateway | isys\_catg\_net\_connector\_list\_\_gateway | isys\_obj | isys\_obj\_\_id |
| Description | text\_area | isys\_catg\_net\_connector\_list | isys\_catg\_net\_connector\_list\_\_description |     |     |

### Administration service

#### Table: isys\_catg\_cluster\_adm\_service\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Administration service (Object) | int | isys\_catg\_cluster\_adm\_service\_list | isys\_catg\_cluster\_adm\_service\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |
| Object type | int | isys\_catg\_cluster\_adm\_service\_list | isys\_obj\_\_isys\_obj\_type\_\_id |     |     |

### JDisc Custom Attributes

#### Table: isys\_catg\_jdisc\_ca\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Attribute | text | isys\_catg\_jdisc\_ca\_list | isys\_catg\_jdisc\_ca\_list\_\_title |     |     |
| Value | text | isys\_catg\_jdisc\_ca\_list | isys\_catg\_jdisc\_ca\_list\_\_content |     |     |
| Type | int | isys\_catg\_jdisc\_ca\_list | isys\_catg\_jdisc\_ca\_list\_\_isys\_jdisc\_ca\_type\_\_id | isys\_jdisc\_ca\_type | isys\_jdisc\_ca\_type\_\_id |
| Folder | text\_area | isys\_catg\_jdisc\_ca\_list | isys\_catg\_jdisc\_ca\_list\_\_folder |     |     |
| Description | text\_area | isys\_catg\_jdisc\_ca\_list | isys\_catg\_jdisc\_ca\_list\_\_description |     |     |

### LC\_\_CATG\_\_CMK\_FOLDER

#### Table: isys\_catg\_cmk\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| LC\_\_CATG\_\_CMK\_\_ACTIVE | int | isys\_catg\_cmk\_list | isys\_catg\_cmk\_list\_\_exportable |     |     |
| Export configuration | int | isys\_catg\_cmk\_list | isys\_catg\_cmk\_list\_\_isys\_monitoring\_export\_config\_\_id |     |     |
| LC\_\_CATG\_\_CMK\_\_ALIAS | text | isys\_catg\_cmk\_list | isys\_catg\_cmk\_list\_\_title |     |     |
| LC\_\_CATG\_\_CMK\_\_EXPORT\_IP | int | isys\_catg\_cmk\_list | isys\_catg\_cmk\_list\_\_export\_ip |     |     |
| Host address | int | isys\_catg\_cmk\_list | isys\_catg\_cmk\_list\_\_isys\_catg\_ip\_list\_\_id |     |     |
| LC\_\_CATG\_\_CMK\_\_HOSTNAME | text | isys\_catg\_cmk\_list | isys\_catg\_cmk\_list\_\_host\_name |     |     |
| LC\_\_CATG\_\_CMK\_\_HOSTNAME | int | isys\_catg\_cmk\_list | isys\_catg\_cmk\_list\_\_host\_name\_selection |     |     |
| Description | text\_area | isys\_catg\_cmk\_list | isys\_catg\_cmk\_list\_\_description |     |     |

### LC\_\_CATG\_\_CMK\_TAG

#### Table: isys\_catg\_cmk\_tag\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| LC\_\_CATG\_\_CMK\_TAG\_\_TAGS | text | isys\_catg\_cmk\_tag\_list | isys\_catg\_cmk\_tag\_list\_\_tags |     |     |
| Description | text\_area | isys\_catg\_cmk\_tag\_list | isys\_catg\_cmk\_tag\_list\_\_description |     |     |

### LC\_\_CATG\_\_CMK\_HOST\_SERVICE

#### Table: isys\_catg\_cmk\_host\_service\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| LC\_\_CATG\_\_CMK\_SERVICE\_\_CHECK\_MK\_SERVICES | text | isys\_catg\_cmk\_host\_service\_list | isys\_catg\_cmk\_host\_service\_list\_\_service |     |     |
| LC\_\_CATG\_\_CMK\_SERVICE\_\_SOFTWARE\_ASSIGNMENT | int | isys\_catg\_cmk\_host\_service\_list | isys\_catg\_cmk\_host\_service\_list\_\_application\_\_id | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_id |
| Description | text\_area | isys\_catg\_cmk\_host\_service\_list | isys\_catg\_cmk\_host\_service\_list\_\_description |     |     |

### LC\_\_CATG\_\_CMK\_SERVICE

#### Table: isys\_catg\_cmk\_service\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| LC\_\_MODULE\_\_CHECK\_MK\_\_HOST | int | isys\_catg\_cmk\_service\_list | isys\_catg\_cmk\_service\_list\_\_host |     |     |
| LC\_\_CATG\_\_CMK\_SERVICE\_\_CHECK\_MK\_SERVICES | text | isys\_catg\_cmk\_service\_list | isys\_catg\_cmk\_service\_list\_\_service |     |     |
| Description | text\_area | isys\_catg\_cmk\_service\_list | isys\_catg\_cmk\_service\_list\_\_description |     |     |

### LC\_\_CATG\_\_CMK\_DEF

#### Table: isys\_catg\_cmk\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| LC\_\_CATG\_\_CMK\_\_ACTIVE | int | isys\_catg\_cmk\_list | isys\_catg\_cmk\_list\_\_exportable |     |     |
| Export configuration | int | isys\_catg\_cmk\_list | isys\_catg\_cmk\_list\_\_isys\_monitoring\_export\_config\_\_id |     |     |
| LC\_\_CATG\_\_CMK\_\_ALIAS | text | isys\_catg\_cmk\_list | isys\_catg\_cmk\_list\_\_title |     |     |
| LC\_\_CATG\_\_CMK\_\_EXPORT\_IP | int | isys\_catg\_cmk\_list | isys\_catg\_cmk\_list\_\_export\_ip |     |     |
| Host address | int | isys\_catg\_cmk\_list | isys\_catg\_cmk\_list\_\_isys\_catg\_ip\_list\_\_id |     |     |
| LC\_\_CATG\_\_CMK\_\_HOSTNAME | text | isys\_catg\_cmk\_list | isys\_catg\_cmk\_list\_\_host\_name |     |     |
| LC\_\_CATG\_\_CMK\_\_HOSTNAME | int | isys\_catg\_cmk\_list | isys\_catg\_cmk\_list\_\_host\_name\_selection |     |     |
| Description | text\_area | isys\_catg\_cmk\_list | isys\_catg\_cmk\_list\_\_description |     |     |

### NDO

#### Table: isys\_catg\_virtual\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| NDO state | text | isys\_catg\_virtual\_list |     |     |     |
| NDO state button | text | isys\_catg\_virtual\_list |     |     |     |

### Cable

#### Table: isys\_catg\_cable\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Cable type | int | isys\_catg\_cable\_list | isys\_catg\_cable\_list\_\_isys\_cable\_type\_\_id | isys\_cable\_type | isys\_cable\_type\_\_id |
| Color | int | isys\_catg\_cable\_list | isys\_catg\_cable\_list\_\_isys\_cable\_colour\_\_id | isys\_cable\_colour | isys\_cable\_colour\_\_id |
| Occupancy | int | isys\_catg\_cable\_list | isys\_catg\_cable\_list\_\_isys\_cable\_occupancy\_\_id | isys\_cable\_occupancy | isys\_cable\_occupancy\_\_id |
| Cable length | float | isys\_catg\_cable\_list | isys\_catg\_cable\_list\_\_length |     |     |
| Length unit | int | isys\_catg\_cable\_list | isys\_catg\_cable\_list\_\_isys\_depth\_unit\_\_id |     |     |
| Maximal amount of fibers/leads | int | isys\_catg\_cable\_list | isys\_catg\_cable\_list\_\_max\_amount\_of\_fibers\_leads |     |     |
| connection | text | isys\_catg\_cable\_list | isys\_catg\_cable\_list\_\_id\_\_isys\_obj\_\_id |     |     |
| Description | text\_area | isys\_catg\_cable\_list | isys\_catg\_cable\_list\_\_description |     |     |

### Data Source

#### Table: isys\_catg\_identifier\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Key | text | isys\_catg\_identifier\_list | isys\_catg\_identifier\_list\_\_key |     |     |
| Value | text | isys\_catg\_identifier\_list | isys\_catg\_identifier\_list\_\_value |     |     |
| Initial Import | date\_time | isys\_catg\_identifier\_list | isys\_catg\_identifier\_list\_\_datetime |     |     |
| Type | int | isys\_catg\_identifier\_list | isys\_catg\_identifier\_list\_\_isys\_catg\_identifier\_type\_\_id | isys\_catg\_identifier\_type | isys\_catg\_identifier\_type\_\_id |
| Group | text | isys\_catg\_identifier\_list | isys\_catg\_identifier\_list\_\_group |     |     |
| Last scan | text | isys\_catg\_identifier\_list | isys\_catg\_identifier\_list\_\_last\_scan |     |     |
| Last updated | date\_time | isys\_catg\_identifier\_list | isys\_obj\_\_updated |     |     |
| Description | text\_area | isys\_catg\_identifier\_list | isys\_catg\_identifier\_list\_\_description |     |     |

### Services

#### Table: isys\_catg\_service\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Service number | text | isys\_catg\_service\_list | isys\_catg\_service\_list\_\_service\_number |     |     |
| Service type | int | isys\_catg\_service\_list | isys\_catg\_service\_list\_\_isys\_service\_type\_\_id | isys\_service\_type | isys\_service\_type\_\_id |
| Service category | int | isys\_catg\_service\_list | isys\_catg\_service\_list\_\_isys\_service\_category\_\_id | isys\_service\_category | isys\_service\_category\_\_id |
| Business Unit | int | isys\_catg\_service\_list | isys\_catg\_service\_list\_\_isys\_business\_unit\_\_id | isys\_business\_unit | isys\_business\_unit\_\_id |
| Active in service catalogue | int | isys\_catg\_service\_list | isys\_catg\_service\_list\_\_active |     |     |
| Service description internal | text\_area | isys\_catg\_service\_list | isys\_catg\_service\_list\_\_service\_description\_intern |     |     |
| Service description external | text\_area | isys\_catg\_service\_list | isys\_catg\_service\_list\_\_service\_description\_extern |     |     |
| Aliases | int | srv\_alias | isys\_catg\_service\_list\_\_id | isys\_catg\_service\_list\_2\_isys\_service\_alias | isys\_catg\_service\_list\_\_id |
| Description | text\_area | isys\_catg\_service\_list | isys\_catg\_service\_list\_\_description |     |     |

### Operating system

#### Table: isys\_catg\_application\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Operating system | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |
| Type | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_catg\_application\_type\_\_id | isys\_catg\_application\_type | isys\_catg\_application\_type\_\_id |
| Priority | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_catg\_application\_priority\_\_id | isys\_catg\_application\_priority | isys\_catg\_application\_priority\_\_id |
| Assigned license | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_cats\_lic\_list\_\_id | isys\_cats\_lic\_list | isys\_cats\_lic\_list\_\_id |
| Assigned license key | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_cats\_lic\_list\_\_id | isys\_cats\_lic\_list | isys\_cats\_lic\_list\_\_id |
| Service | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_catg\_relation\_list\_\_id | isys\_catg\_its\_components\_list | isys\_catg\_its\_components\_list\_\_id |
| Variant | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_cats\_app\_variant\_list\_\_id | isys\_cats\_app\_variant\_list | isys\_cats\_app\_variant\_list\_\_id |
| Version number | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_catg\_version\_list\_\_id | isys\_catg\_version\_list | isys\_catg\_version\_list\_\_id |
| Description | text\_area | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_description |     |     |

### QinQ SP-VLAN

#### Table: isys\_catg\_qinq\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Assigned SP-VLAN | int | isys\_catg\_qinq\_list | isys\_catg\_qinq\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |
| Description | text\_area | isys\_catg\_qinq\_list | isys\_catg\_qinq\_list\_\_description |     |     |

### Fiber/lead

#### Table: isys\_catg\_fiber\_lead\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Label | text | isys\_catg\_fiber\_lead\_list | isys\_catg\_fiber\_lead\_list\_\_label |     |     |
| Category | int | isys\_catg\_fiber\_lead\_list | isys\_catg\_fiber\_lead\_list\_\_isys\_fiber\_category\_\_id | isys\_fiber\_category | isys\_fiber\_category\_\_id |
| Color | int | isys\_catg\_fiber\_lead\_list | isys\_catg\_fiber\_lead\_list\_\_isys\_cable\_colour\_\_id | isys\_cable\_colour | isys\_cable\_colour\_\_id |
| LC\_\_CATG\_\_FIBER\_LEAD\_\_DAMPING | float | isys\_catg\_fiber\_lead\_list | isys\_catg\_fiber\_lead\_list\_\_damping |     |     |
| Description | text\_area | isys\_catg\_fiber\_lead\_list | isys\_catg\_fiber\_lead\_list\_\_description |     |     |

### QinQ CE-VLAN

#### Table: isys\_catg\_qinq\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Assigned SP-VLAN | int | isys\_catg\_qinq\_list | isys\_catg\_qinq\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |

### Images

#### Table: isys\_catg\_images\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Filename | text | isys\_catg\_images\_list | isys\_catg\_images\_list\_\_filename |     |     |
| Filecontent | text | isys\_catg\_images\_list | isys\_catg\_images\_list\_\_filecontent |     |     |

### WAN Connection

#### Table: isys\_catg\_wan\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Title | text | isys\_catg\_wan\_list | isys\_catg\_wan\_list\_\_title |     |     |
| Role | int | isys\_catg\_wan\_list | isys\_catg\_wan\_list\_\_isys\_wan\_role\_\_id | isys\_wan\_role | isys\_wan\_role\_\_id |
| Type | int | isys\_catg\_wan\_list | isys\_catg\_wan\_list\_\_isys\_wan\_type\_\_id | isys\_wan\_type | isys\_wan\_type\_\_id |
| Channels | int | isys\_catg\_wan\_list | isys\_catg\_wan\_list\_\_channels |     |     |
| Call number(s) | text\_area | isys\_catg\_wan\_list | isys\_catg\_wan\_list\_\_call\_numbers |     |     |
| Location of the connection | int | isys\_catg\_wan\_list | isys\_catg\_wan\_list\_\_connection\_location | isys\_obj | isys\_obj\_\_id |
| Capacity UP | float | isys\_catg\_wan\_list | isys\_catg\_wan\_list\_\_capacity\_up |     |     |
| Capacity UP unit | int | isys\_catg\_wan\_list | isys\_catg\_wan\_list\_\_capacity\_up\_unit | isys\_wan\_capacity\_unit | isys\_wan\_capacity\_unit\_\_id |
| Capacity DOWN | float | isys\_catg\_wan\_list | isys\_catg\_wan\_list\_\_capacity\_down |     |     |
| Capacity DOWN unit | int | isys\_catg\_wan\_list | isys\_catg\_wan\_list\_\_capacity\_down\_unit | isys\_wan\_capacity\_unit | isys\_wan\_capacity\_unit\_\_id |
| Max. Capacity UP | float | isys\_catg\_wan\_list | isys\_catg\_wan\_list\_\_max\_capacity\_up |     |     |
| Max. Capacity UP unit | int | isys\_catg\_wan\_list | isys\_catg\_wan\_list\_\_max\_capacity\_up\_unit | isys\_wan\_capacity\_unit | isys\_wan\_capacity\_unit\_\_id |
| Max. Capacity DOWN | float | isys\_catg\_wan\_list | isys\_catg\_wan\_list\_\_max\_capacity\_down |     |     |
| Max. Capacity DOWN unit | int | isys\_catg\_wan\_list | isys\_catg\_wan\_list\_\_max\_capacity\_down\_unit | isys\_wan\_capacity\_unit | isys\_wan\_capacity\_unit\_\_id |
| Projekt number | text | isys\_catg\_wan\_list | isys\_catg\_wan\_list\_\_project\_no |     |     |
| VLAN-ID | int | isys\_catg\_wan\_list | isys\_catg\_wan\_list\_\_vlan | isys\_obj | isys\_obj\_\_id |
| Shopping cart number | text | isys\_catg\_wan\_list | isys\_catg\_wan\_list\_\_shopping\_cart\_no |     |     |
| Ticket number | text | isys\_catg\_wan\_list | isys\_catg\_wan\_list\_\_ticket\_no |     |     |
| Customer number | text | isys\_catg\_wan\_list | isys\_catg\_wan\_list\_\_customer\_no |     |     |
| Connected routers | int | isys\_catg\_wan\_list | isys\_catg\_wan\_list\_\_id | isys\_catg\_wan\_list\_2\_router | isys\_catg\_wan\_list\_2\_router\_\_isys\_catg\_wan\_list\_\_id |
| Connected nets | int | isys\_catg\_wan\_list | isys\_catg\_wan\_list\_\_id | isys\_catg\_wan\_list\_2\_net | isys\_catg\_wan\_list\_2\_net\_\_isys\_catg\_wan\_list\_\_id |
| Description | text\_area | isys\_catg\_wan\_list | isys\_catg\_wan\_list\_\_description |     |     |

### Remote Management Controller

#### Table: isys\_catg\_rm\_controller\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Primary access URL | text | isys\_catg\_rm\_controller\_list | isys\_catg\_access\_list\_\_id |     |     |
| Remote Management Controller | int | isys\_catg\_rm\_controller\_list | isys\_catg\_rm\_controller\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |
| Description | text\_area | isys\_catg\_rm\_controller\_list | isys\_catg\_rm\_controller\_list\_\_description |     |     |

### Managed devices

#### Table: isys\_catg\_virtual\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Remote Management Controller | int | isys\_catg\_virtual\_list | isys\_connection\_\_isys\_obj\_\_id |     |     |

### Virtual managed objects

#### Table: isys\_catg\_virtual\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Object | int | isys\_catg\_virtual\_list | isys\_catg\_virtual\_host\_list\_\_administration\_service |     |     |

### VRRP

#### Table: isys\_catg\_vrrp\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Type | int | isys\_catg\_vrrp\_list | isys\_catg\_vrrp\_list\_\_isys\_vrrp\_type\_\_id | isys\_vrrp\_type | isys\_vrrp\_type\_\_id |
| VR ID | text | isys\_catg\_vrrp\_list | isys\_catg\_vrrp\_list\_\_vr\_id |     |     |
| Description | text\_area | isys\_catg\_vrrp\_list | isys\_catg\_vrrp\_list\_\_description |     |     |

### VRRP Member

#### Table: isys\_catg\_vrrp\_member\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| VRRP member | int | isys\_catg\_vrrp\_member\_list | isys\_catg\_vrrp\_member\_list\_\_isys\_catg\_log\_port\_list\_\_id | isys\_catg\_log\_port\_list | isys\_catg\_log\_port\_list\_\_id |
| Description | text\_area | isys\_catg\_vrrp\_member\_list | isys\_catg\_vrrp\_member\_list\_\_description |     |     |

### Stack member

#### Table: isys\_catg\_stack\_member\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Member | int | isys\_catg\_stack\_member\_list | isys\_catg\_stack\_member\_list\_\_stack\_member | isys\_obj | isys\_obj\_\_id |
| Mode | int | isys\_catg\_stack\_member\_list | isys\_catg\_stack\_member\_list\_\_mode |     |     |
| Description | text\_area | isys\_catg\_stack\_member\_list | isys\_catg\_stack\_member\_list\_\_description |     |     |

### Last login user

#### Table: isys\_catg\_last\_login\_user\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Last logged in user | text | isys\_catg\_last\_login\_user\_list | isys\_catg\_last\_login\_user\_list\_\_last\_login |     |     |
| Type | text | isys\_catg\_last\_login\_user\_list | isys\_catg\_last\_login\_user\_list\_\_type |     |     |
| Description | text\_area | isys\_catg\_last\_login\_user\_list | isys\_catg\_last\_login\_user\_list\_\_description |     |     |

### Net zone

#### Table: isys\_catg\_virtual\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Scope | text | isys\_catg\_virtual\_list | isys\_cats\_net\_zone\_list\_\_isys\_obj\_\_id\_\_zone | isys\_obj | isys\_obj\_\_id |

### Options

#### Table: isys\_catg\_net\_zone\_options\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Zone color | text | isys\_catg\_net\_zone\_options\_list | isys\_catg\_net\_zone\_options\_list\_\_color |     |     |
| Zone color | text | isys\_catg\_net\_zone\_options\_list | isys\_catg\_net\_zone\_options\_list\_\_domain |     |     |
| Description | text\_area | isys\_catg\_net\_zone\_options\_list | isys\_catg\_net\_zone\_options\_list\_\_description |     |     |

### Scope

#### Table: isys\_catg\_virtual\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Scope | text | isys\_catg\_virtual\_list | isys\_cats\_net\_zone\_list\_\_isys\_obj\_\_id\_\_zone | isys\_obj | isys\_obj\_\_id |

Specific categories
-------------------

### Rack

#### Table: isys\_cats\_enclosure\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Vertical slots (front side) | int | isys\_cats\_enclosure\_list | isys\_cats\_enclosure\_list\_\_vertical\_slots\_front |     |     |
| Vertical slots (backside) | int | isys\_cats\_enclosure\_list | isys\_cats\_enclosure\_list\_\_vertical\_slots\_rear |     |     |
| Height unit sorting | text | isys\_cats\_enclosure\_list | isys\_cats\_enclosure\_list\_\_slot\_sorting |     |     |
| Description | text\_area | isys\_cats\_enclosure\_list | isys\_cats\_enclosure\_list\_\_description |     |     |

### Room

#### Table: isys\_cats\_room\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Type | int | isys\_cats\_room\_list | isys\_cats\_room\_list\_\_isys\_room\_type\_\_id | isys\_room\_type | isys\_room\_type\_\_id |
| Room number | text | isys\_cats\_room\_list | isys\_cats\_room\_list\_\_number |     |     |
| Floor | text | isys\_cats\_room\_list | isys\_cats\_room\_list\_\_floor |     |     |
| Description | text\_area | isys\_cats\_room\_list | isys\_cats\_room\_list\_\_description |     |     |

### Services

#### Table: isys\_cats\_application\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Specification | text | isys\_cats\_application\_list | isys\_cats\_application\_list\_\_specification |     |     |
| Manufacturer | int | isys\_cats\_application\_list | isys\_cats\_application\_list\_\_isys\_application\_manufacturer\_\_id | isys\_application\_manufacturer | isys\_application\_manufacturer\_\_id |
| Installation | int | isys\_cats\_application\_list | isys\_cats\_application\_list\_\_isys\_installation\_type\_\_id | isys\_installation\_type | isys\_installation\_type\_\_id |
| Registration key | text | isys\_cats\_application\_list | isys\_cats\_application\_list\_\_registration\_key |     |     |
| Install path | text | isys\_cats\_application\_list | isys\_cats\_application\_list\_\_install\_path |     |     |
| Amount of installations | int | isys\_cats\_application\_list |     |     |     |
| Description | text\_area | isys\_cats\_application\_list | isys\_cats\_application\_list\_\_description |     |     |

### Switch

#### Table: isys\_cats\_switch\_net\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| VLAN management protocol | int | isys\_cats\_switch\_net\_list | isys\_cats\_switch\_net\_list\_\_isys\_vlan\_management\_protocol\_\_id | isys\_vlan\_management\_protocol | isys\_vlan\_management\_protocol\_\_id |
| Role | int | isys\_cats\_switch\_net\_list | isys\_cats\_switch\_net\_list\_\_isys\_switch\_role\_\_id | isys\_switch\_role | isys\_switch\_role\_\_id |
| Spanning Tree | int | isys\_cats\_switch\_net\_list | isys\_cats\_switch\_net\_list\_\_isys\_switch\_spanning\_tree\_\_id | isys\_switch\_spanning\_tree | isys\_switch\_spanning\_tree\_\_id |
| Description | text\_area | isys\_cats\_switch\_net\_list | isys\_cats\_switch\_net\_list\_\_description |     |     |

### WAN

#### Table: isys\_cats\_wan\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Role | int | isys\_cats\_wan\_list | isys\_cats\_wan\_list\_\_isys\_wan\_role\_\_id | isys\_wan\_role | isys\_wan\_role\_\_id |
| Type | int | isys\_cats\_wan\_list | isys\_cats\_wan\_list\_\_isys\_wan\_type\_\_id | isys\_wan\_type | isys\_wan\_type\_\_id |
| Capacity | double | isys\_cats\_wan\_list | isys\_cats\_wan\_list\_\_capacity |     |     |
| Capacity unit | int | isys\_cats\_wan\_list | isys\_cats\_wan\_list\_\_isys\_wan\_capacity\_unit\_\_id | isys\_wan\_capacity\_unit | isys\_wan\_capacity\_unit\_\_id |
| Description | text\_area | isys\_cats\_wan\_list | isys\_cats\_wan\_list\_\_description |     |     |

### Emergency plan

#### Table: isys\_cats\_emergency\_plan\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Time need | int | isys\_cats\_emergency\_plan\_list | isys\_cats\_emergency\_plan\_list\_\_calc\_time\_need |     |     |
| Unit | int | isys\_cats\_emergency\_plan\_list | isys\_cats\_emergency\_plan\_list\_\_isys\_unit\_of\_time\_\_id | isys\_unit\_of\_time | isys\_unit\_of\_time\_\_id |
| Date of emergency practice | date\_time | isys\_cats\_emergency\_plan\_list | isys\_cats\_emergency\_plan\_list\_\_practice\_actual\_date |     |     |
| Description | text\_area | isys\_cats\_emergency\_plan\_list | isys\_cats\_emergency\_plan\_list\_\_description |     |     |

### Air conditioning

#### Table: isys\_cats\_ac\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Type | int | isys\_cats\_ac\_list | isys\_cats\_ac\_list\_\_isys\_ac\_type\_\_id | isys\_ac\_type | isys\_ac\_type\_\_id |
| Threshold | float | isys\_cats\_ac\_list | isys\_cats\_ac\_list\_\_threshold |     |     |
| Memory-unit | int | isys\_cats\_ac\_list | isys\_cats\_ac\_list\_\_isys\_temp\_unit\_\_id | isys\_temp\_unit | isys\_temp\_unit\_\_id |
| Capacity unit | int | isys\_cats\_ac\_list | isys\_cats\_ac\_list\_\_isys\_ac\_refrigerating\_capacity\_unit\_\_id | isys\_ac\_refrigerating\_capacity\_unit | isys\_ac\_refrigerating\_capacity\_unit\_\_id |
| Refrigerating capacity | float | isys\_cats\_ac\_list | isys\_cats\_ac\_list\_\_capacity |     |     |
| Air quantity | float | isys\_cats\_ac\_list | isys\_cats\_ac\_list\_\_air\_quantity |     |     |
| Volume unit | int | isys\_cats\_ac\_list | isys\_cats\_ac\_list\_\_isys\_ac\_air\_quantity\_unit\_\_id | isys\_ac\_air\_quantity\_unit | isys\_ac\_air\_quantity\_unit\_\_id |
| Width | float | isys\_cats\_ac\_list | isys\_cats\_ac\_list\_\_width |     |     |
| Height | float | isys\_cats\_ac\_list | isys\_cats\_ac\_list\_\_height |     |     |
| Depth | float | isys\_cats\_ac\_list | isys\_cats\_ac\_list\_\_depth |     |     |
| Dimension unit | int | isys\_cats\_ac\_list | isys\_cats\_ac\_list\_\_isys\_depth\_unit\_\_id | isys\_depth\_unit | isys\_depth\_unit\_\_id |
| Description | text\_area | isys\_cats\_ac\_list | isys\_cats\_ac\_list\_\_description |     |     |

### WiFi device

#### Table: isys\_cats\_access\_point\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Title | text | isys\_cats\_access\_point\_list | isys\_cats\_access\_point\_list\_\_title |     |     |
| Function | int | isys\_cats\_access\_point\_list | isys\_cats\_access\_point\_list\_\_isys\_wlan\_function\_\_id | isys\_wlan\_function | isys\_wlan\_function\_\_id |
| Standard | int | isys\_cats\_access\_point\_list | isys\_cats\_access\_point\_list\_\_isys\_wlan\_standard\_\_id | isys\_wlan\_standard | isys\_wlan\_standard\_\_id |
| Channel | int | isys\_cats\_access\_point\_list | isys\_cats\_access\_point\_list\_\_isys\_wlan\_channel\_\_id | isys\_wlan\_channel | isys\_wlan\_channel\_\_id |
| Broadcast SSID | int | isys\_cats\_access\_point\_list | isys\_cats\_access\_point\_list\_\_broadcast\_ssid |     |     |
| SSID | text | isys\_cats\_access\_point\_list | isys\_cats\_access\_point\_list\_\_ssid |     |     |
| MAC filter | int | isys\_cats\_access\_point\_list | isys\_cats\_access\_point\_list\_\_mac\_filter |     |     |
| Authentication | int | isys\_cats\_access\_point\_list | isys\_cats\_access\_point\_list\_\_isys\_wlan\_auth\_\_id | isys\_wlan\_auth | isys\_wlan\_auth\_\_id |
| Encryption | int | isys\_cats\_access\_point\_list | isys\_cats\_access\_point\_list\_\_encryption | isys\_wlan\_encryption | isys\_wlan\_encryption\_\_id |
| Key | text | isys\_cats\_access\_point\_list | isys\_cats\_access\_point\_list\_\_key |     |     |
| Description | text\_area | isys\_cats\_access\_point\_list | isys\_cats\_access\_point\_list\_\_description |     |     |

### Monitor

#### Table: isys\_cats\_monitor\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Display | float | isys\_cats\_monitor\_list | isys\_cats\_monitor\_list\_\_display |     |     |
| Unit | int | isys\_cats\_monitor\_list | isys\_cats\_monitor\_list\_\_isys\_depth\_unit\_\_id | isys\_depth\_unit | isys\_depth\_unit\_\_id |
| Type | int | isys\_cats\_monitor\_list | isys\_cats\_monitor\_list\_\_isys\_monitor\_type\_\_id | isys\_monitor\_type | isys\_monitor\_type\_\_id |
| Resolution | int | isys\_cats\_monitor\_list | isys\_cats\_monitor\_list\_\_isys\_monitor\_resolution\_\_id | isys\_monitor\_resolution | isys\_monitor\_resolution\_\_id |
| Pivot | int | isys\_cats\_monitor\_list | isys\_cats\_monitor\_list\_\_pivot |     |     |
| Speaker | int | isys\_cats\_monitor\_list | isys\_cats\_monitor\_list\_\_speaker |     |     |
| Description | text\_area | isys\_cats\_monitor\_list | isys\_cats\_monitor\_list\_\_description |     |     |

### Desktop

#### Table: isys\_cats\_client\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Client type | int | isys\_cats\_client\_list | isys\_cats\_client\_list\_\_isys\_client\_type\_\_id | isys\_client\_type | isys\_client\_type\_\_id |
| Keyboard Layout | text | isys\_cats\_client\_list | isys\_cats\_client\_list\_\_keyboard\_layout |     |     |
| Description | text\_area | isys\_cats\_client\_list | isys\_cats\_client\_list\_\_description |     |     |

### FC switch

#### Table: isys\_cats\_switch\_fc\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Title | text | isys\_cats\_switch\_fc\_list | isys\_cats\_switch\_fc\_list\_\_title |     |     |
| Active | int | isys\_cats\_switch\_fc\_list | isys\_cats\_switch\_fc\_list\_\_unit\_active |     |     |
| Description | text\_area | isys\_cats\_switch\_fc\_list | isys\_cats\_switch\_fc\_list\_\_description |     |     |

### Routing

#### Table: isys\_cats\_router\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Routing protocol | int | isys\_cats\_router\_list | isys\_cats\_router\_list\_\_routing\_protocol | isys\_routing\_protocol | isys\_routing\_protocol\_\_id |
| Gateway address | int | isys\_cats\_router\_list | isys\_cats\_router\_list\_\_id |     |     |
| Description | text\_area | isys\_cats\_router\_list | isys\_cats\_router\_list\_\_description |     |     |

### Printer

#### Table: isys\_cats\_prt\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Type | int | isys\_cats\_prt\_list | isys\_cats\_prt\_list\_\_isys\_cats\_prt\_type\_\_id | isys\_cats\_prt\_type | isys\_cats\_prt\_type\_\_id |
| Color | int | isys\_cats\_prt\_list | isys\_cats\_prt\_list\_\_iscolor |     |     |
| Duplex | int | isys\_cats\_prt\_list | isys\_cats\_prt\_list\_\_isduplex |     |     |
| Emulation | int | isys\_cats\_prt\_list | isys\_cats\_prt\_list\_\_isys\_cats\_prt\_emulation\_\_id | isys\_cats\_prt\_emulation | isys\_cats\_prt\_emulation\_\_id |
| Paper format | int | isys\_cats\_prt\_list | isys\_cats\_prt\_list\_\_isys\_cats\_prt\_paper\_\_id | isys\_cats\_prt\_paper | isys\_cats\_prt\_paper\_\_id |
| Description | text\_area | isys\_cats\_prt\_list | isys\_cats\_prt\_list\_\_description |     |     |

### Files

#### Table: isys\_cats\_file\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Title | text | isys\_cats\_file\_list | isys\_file\_version\_\_title |     |     |
| Filename | int | isys\_cats\_file\_list | isys\_file\_version\_\_isys\_file\_physical\_\_id |     |     |
| Category | int | isys\_cats\_file\_list | isys\_cats\_file\_list\_\_isys\_file\_category\_\_id | isys\_file\_category | isys\_file\_category\_\_id |
| Revision | text | isys\_cats\_file\_list | isys\_file\_version\_\_revision |     |     |
| Version Description | text\_area | isys\_cats\_file\_list | isys\_file\_version\_\_description |     |     |
| Description | text\_area | isys\_cats\_file\_list | isys\_cats\_file\_list\_\_description |     |     |
| Version | int | isys\_cats\_file\_list | isys\_cats\_file\_list\_\_isys\_file\_version\_\_id | isys\_file\_version | isys\_file\_version\_\_id |
| MD5 Checksum | text | isys\_cats\_file\_list | isys\_file\_physical\_\_md5 |     |     |

### Applications

#### Table: isys\_cats\_application\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Specification | text | isys\_cats\_application\_list | isys\_cats\_application\_list\_\_specification |     |     |
| Manufacturer | int | isys\_cats\_application\_list | isys\_cats\_application\_list\_\_isys\_application\_manufacturer\_\_id | isys\_application\_manufacturer | isys\_application\_manufacturer\_\_id |
| Installation | int | isys\_cats\_application\_list | isys\_cats\_application\_list\_\_isys\_installation\_type\_\_id | isys\_installation\_type | isys\_installation\_type\_\_id |
| Registration key | text | isys\_cats\_application\_list | isys\_cats\_application\_list\_\_registration\_key |     |     |
| Install path | text | isys\_cats\_application\_list | isys\_cats\_application\_list\_\_install\_path |     |     |
| Amount of installations | int | isys\_cats\_application\_list |     |     |     |
| Description | text\_area | isys\_cats\_application\_list | isys\_cats\_application\_list\_\_description |     |     |

### Net

#### Table: isys\_cats\_net\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Title | text | isys\_cats\_net\_list | isys\_cats\_net\_list\_\_title |     |     |
| Type | int | isys\_cats\_net\_list | isys\_cats\_net\_list\_\_isys\_net\_type\_\_id | isys\_net\_type | isys\_net\_type\_\_id |
| Net | text | isys\_cats\_net\_list | isys\_cats\_net\_list\_\_address |     |     |
| Netmask | text | isys\_cats\_net\_list | isys\_cats\_net\_list\_\_mask |     |     |
| Default Gateway | int | isys\_cats\_net\_list | isys\_cats\_net\_list\_\_isys\_catg\_ip\_list\_\_id |     |     |
| Address from | text | isys\_cats\_net\_list | isys\_cats\_net\_list\_\_address\_range\_from |     |     |
| Address to | text | isys\_cats\_net\_list | isys\_cats\_net\_list\_\_address\_range\_to |     |     |
| DNS server | int | isys\_cats\_net\_list | isys\_cats\_net\_list\_\_id | isys\_cats\_net\_list\_2\_isys\_catg\_ip\_list | isys\_cats\_net\_list\_\_id |
| DNS domain | int | dns\_domain | isys\_cats\_net\_list\_\_id | isys\_cats\_net\_list\_2\_isys\_net\_dns\_domain | isys\_cats\_net\_list\_\_id |
| CIDR-Suffix | int | isys\_cats\_net\_list | isys\_cats\_net\_list\_\_cidr\_suffix |     |     |
| Reverse DNS | text | isys\_cats\_net\_list | isys\_cats\_net\_list\_\_reverse\_dns |     |     |
| Layer-2-net assignment | int | isys\_cats\_net\_list | isys\_obj\_\_id |     |     |
| Net | text | isys\_cats\_net\_list |     |     |     |
| Address range | text | isys\_cats\_net\_list | isys\_obj\_\_id |     |     |
| Net with suffix | text | isys\_cats\_net\_list | isys\_obj\_\_id |     |     |
| Assigned addresses | text | isys\_cats\_net\_list | isys\_obj\_\_id |     |     |
| Description | text\_area | isys\_cats\_net\_list | isys\_cats\_net\_list\_\_description |     |     |

### Mobile radio

#### Table: isys\_cats\_mobile\_phone\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| IMEI number | text | isys\_cats\_mobile\_phone\_list | isys\_cats\_mobile\_phone\_list\_\_imei\_number |     |     |
| Description | text\_area | isys\_cats\_mobile\_phone\_list | isys\_cats\_mobile\_phone\_list\_\_description |     |     |

### Object group

#### Table: isys\_cats\_group\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Object | int | isys\_cats\_group\_list | isys\_cats\_group\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |
| Object type | text | isys\_cats\_group\_list | connected\_type |     |     |
| Description | text\_area | isys\_cats\_group\_list | isys\_cats\_group\_list\_\_description |     |     |

### License keys

#### Table: isys\_cats\_lic\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Key | text | isys\_cats\_lic\_list | isys\_cats\_lic\_list\_\_key |     |     |
| Serial | text | isys\_cats\_lic\_list | isys\_cats\_lic\_list\_\_serial |     |     |
| License Type | int | isys\_cats\_lic\_list | isys\_cats\_lic\_list\_\_type |     |     |
| Amount | int | isys\_cats\_lic\_list | isys\_cats\_lic\_list\_\_amount |     |     |
| Licenses in Use | int | isys\_cats\_lic\_list | isys\_cats\_lic\_list\_\_id |     |     |
| Licenses Free | int | isys\_cats\_lic\_list | isys\_cats\_lic\_list\_\_id |     |     |
| Start Date | date | isys\_cats\_lic\_list | isys\_cats\_lic\_list\_\_start |     |     |
| Expiration Date | date | isys\_cats\_lic\_list | isys\_cats\_lic\_list\_\_expire |     |     |
| Price Per Unit | double | isys\_cats\_lic\_list | isys\_cats\_lic\_list\_\_cost |     |     |
| Total Costs | double | isys\_cats\_lic\_list | isys\_cats\_lic\_list\_\_id |     |     |
| Description | text\_area | isys\_cats\_lic\_list | isys\_cats\_lic\_list\_\_description |     |     |

### Current file

#### Table: isys\_cats\_file\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Title | text | isys\_cats\_file\_list | isys\_file\_version\_\_title |     |     |
| Filename | int | isys\_cats\_file\_list | isys\_file\_version\_\_isys\_file\_physical\_\_id |     |     |
| Category | int | isys\_cats\_file\_list | isys\_cats\_file\_list\_\_isys\_file\_category\_\_id | isys\_file\_category | isys\_file\_category\_\_id |
| Revision | text | isys\_cats\_file\_list | isys\_file\_version\_\_revision |     |     |
| Version Description | text\_area | isys\_cats\_file\_list | isys\_file\_version\_\_description |     |     |
| Description | text\_area | isys\_cats\_file\_list | isys\_cats\_file\_list\_\_description |     |     |
| Version | int | isys\_cats\_file\_list | isys\_cats\_file\_list\_\_isys\_file\_version\_\_id | isys\_file\_version | isys\_file\_version\_\_id |
| MD5 Checksum | text | isys\_cats\_file\_list | isys\_file\_physical\_\_md5 |     |     |

### File versions

#### Table: isys\_file\_version\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Filename | text | isys\_file\_version\_list | isys\_file\_physical\_\_filename\_original |     |     |
| File content | text | isys\_file\_version\_list | isys\_file\_physical\_\_filename |     |     |
| Title | text | isys\_file\_version\_list | isys\_file\_version\_\_title |     |     |
| Revision | text | isys\_file\_version\_list | isys\_file\_version\_\_revision |     |     |
| Upload date | text | isys\_file\_version\_list | isys\_file\_physical\_\_date\_uploaded |     |     |
| Version Description | text\_area | isys\_file\_version\_list | isys\_file\_version\_\_description |     |     |
| MD5 Checksum | text | isys\_file\_version\_list | isys\_file\_physical\_\_md5 |     |     |
| Upload from | text | isys\_file\_version\_list | isys\_file\_physical\_\_user\_id\_uploaded |     |     |

### Assigned objects

#### Table: isys\_cats\_file\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Assigned objects | int | isys\_cats\_file\_list |     |     |     |

### Emergency plan properties

#### Table: isys\_cats\_emergency\_plan\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Time need | int | isys\_cats\_emergency\_plan\_list | isys\_cats\_emergency\_plan\_list\_\_calc\_time\_need |     |     |
| Unit | int | isys\_cats\_emergency\_plan\_list | isys\_cats\_emergency\_plan\_list\_\_isys\_unit\_of\_time\_\_id | isys\_unit\_of\_time | isys\_unit\_of\_time\_\_id |
| Date of emergency practice | date\_time | isys\_cats\_emergency\_plan\_list | isys\_cats\_emergency\_plan\_list\_\_practice\_actual\_date |     |     |
| Description | text\_area | isys\_cats\_emergency\_plan\_list | isys\_cats\_emergency\_plan\_list\_\_description |     |     |

### assigned objects

#### Table: isys\_catg\_emergency\_plan\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Title | text | isys\_catg\_emergency\_plan\_list | isys\_catg\_emergency\_plan\_list\_\_isys\_obj\_\_id |     |     |

### Net type

#### Table: isys\_cats\_ws\_net\_type\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Net type | int | isys\_cats\_ws\_net\_type\_list | isys\_cats\_ws\_net\_type\_list\_\_isys\_net\_type\_title\_\_id | isys\_net\_type\_title | isys\_net\_type\_title\_\_id |
| Description | text\_area | isys\_cats\_ws\_net\_type\_list | isys\_cats\_ws\_net\_type\_list\_\_description |     |     |

### Assigned objects

#### Table: isys\_cats\_ws\_net\_type\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Assigned Objects | int | isys\_cats\_ws\_net\_type\_list | isys\_obj\_\_id |     |     |

### Wiring System

#### Table: isys\_cats\_ws\_net\_type\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Net type | int | isys\_cats\_ws\_net\_type\_list | isys\_cats\_ws\_net\_type\_list\_\_isys\_net\_type\_title\_\_id | isys\_net\_type\_title | isys\_net\_type\_title\_\_id |
| Description | text\_area | isys\_cats\_ws\_net\_type\_list | isys\_cats\_ws\_net\_type\_list\_\_description |     |     |

### Uninterruptible power supply

#### Table: isys\_cats\_ups\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Type | int | isys\_cats\_ups\_list | isys\_cats\_ups\_list\_\_isys\_ups\_type\_\_id | isys\_ups\_type | isys\_ups\_type\_\_id |
| Battery type | int | isys\_cats\_ups\_list | isys\_cats\_ups\_list\_\_isys\_ups\_battery\_type\_\_id | isys\_ups\_battery\_type | isys\_ups\_battery\_type\_\_id |
| Quantity | int | isys\_cats\_ups\_list | isys\_cats\_ups\_list\_\_battery\_amount |     |     |
| Charge time | int | isys\_cats\_ups\_list | isys\_cats\_ups\_list\_\_charge\_time |     |     |
| Unit | int | charge\_time | isys\_cats\_ups\_list\_\_charge\_time\_\_isys\_unit\_of\_time\_\_id | isys\_unit\_of\_time | isys\_unit\_of\_time\_\_id |
| Runtime under full load | int | isys\_cats\_ups\_list | isys\_cats\_ups\_list\_\_autonomy\_time |     |     |
| Unit | int | autonomy\_time | isys\_cats\_ups\_list\_\_autonomy\_time\_\_isys\_unit\_of\_time\_\_id | isys\_unit\_of\_time | isys\_unit\_of\_time\_\_id |
| Description | text\_area | isys\_cats\_ups\_list | isys\_cats\_ups\_list\_\_description |     |     |

### Emergency power supply

#### Table: isys\_cats\_eps\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Type | int | isys\_cats\_eps\_list | isys\_cats\_eps\_list\_\_isys\_cats\_eps\_type\_\_id | isys\_cats\_eps\_type | isys\_cats\_eps\_type\_\_id |
| Warm-up time | int | isys\_cats\_eps\_list | isys\_cats\_eps\_list\_\_warmup\_time |     |     |
| Unit | int | isys\_cats\_eps\_list | isys\_cats\_eps\_list\_\_warmup\_time\_\_isys\_unit\_of\_time\_\_id | isys\_unit\_of\_time | isys\_unit\_of\_time\_\_id |
| Fuel tank | int | isys\_cats\_eps\_list | isys\_cats\_eps\_list\_\_fuel\_tank |     |     |
| Unit | int | isys\_cats\_eps\_list | isys\_cats\_eps\_list\_\_isys\_volume\_unit\_\_id | isys\_volume\_unit | isys\_volume\_unit\_\_id |
| Autonomy time | int | isys\_cats\_eps\_list | isys\_cats\_eps\_list\_\_autonomy\_time |     |     |
| Unit | int | isys\_cats\_eps\_list | isys\_cats\_eps\_list\_\_autonomy\_time\_\_isys\_unit\_of\_time\_\_id | isys\_unit\_of\_time | isys\_unit\_of\_time\_\_id |
| Description | text\_area | isys\_cats\_eps\_list | isys\_cats\_eps\_list\_\_description |     |     |

### SAN Zoning

#### Table: isys\_cats\_san\_zoning\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Title | text | isys\_cats\_san\_zoning\_list | isys\_cats\_san\_zoning\_list\_\_title |     |     |
| Members | int | isys\_cats\_san\_zoning\_list | isys\_cats\_san\_zoning\_list\_\_id |     |     |
| Description | text\_area | isys\_cats\_san\_zoning\_list | isys\_cats\_san\_zoning\_list\_\_description |     |     |

### Organization

#### Table: isys\_cats\_organization\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Title | text | isys\_cats\_organization\_list | isys\_cats\_organization\_list\_\_title |     |     |
| Telephone | text | isys\_cats\_organization\_list | isys\_cats\_organization\_list\_\_telephone |     |     |
| Fax | text | isys\_cats\_organization\_list | isys\_cats\_organization\_list\_\_fax |     |     |
| Website | text | isys\_cats\_organization\_list | isys\_cats\_organization\_list\_\_website |     |     |
| Headquarter | int | isys\_cats\_organization\_list | isys\_cats\_organization\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |
| Description | text\_area | isys\_cats\_organization\_list | isys\_cats\_organization\_list\_\_description |     |     |

### Master data

#### Table: isys\_cats\_organization\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Title | text | isys\_cats\_organization\_list | isys\_cats\_organization\_list\_\_title |     |     |
| Telephone | text | isys\_cats\_organization\_list | isys\_cats\_organization\_list\_\_telephone |     |     |
| Fax | text | isys\_cats\_organization\_list | isys\_cats\_organization\_list\_\_fax |     |     |
| Website | text | isys\_cats\_organization\_list | isys\_cats\_organization\_list\_\_website |     |     |
| Headquarter | int | isys\_cats\_organization\_list | isys\_cats\_organization\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |
| Description | text\_area | isys\_cats\_organization\_list | isys\_cats\_organization\_list\_\_description |     |     |

### Persons

#### Table: isys\_cats\_organization\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Title | int | isys\_cats\_organization\_list | isys\_cats\_person\_list\_\_isys\_obj\_\_id |     |     |
| Contact | int | isys\_cats\_organization\_list | isys\_cats\_person\_list\_\_isys\_obj\_\_id |     |     |

### Persons

#### Table: isys\_cats\_person\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Title | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_title |     |     |
| Salutation | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_salutation |     |     |
| First name | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_first\_name |     |     |
| Last name | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_last\_name |     |     |
| Academic degree | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_academic\_degree |     |     |
| Function | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_function |     |     |
| Service designation | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_service\_designation |     |     |
| Street | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_street |     |     |
| City | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_city |     |     |
| ZIP-Code | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_zip\_code |     |     |
| E-mail address | text | isys\_cats\_person\_list | isys\_catg\_mail\_addresses\_list\_\_title |     |     |
| Telephone company | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_phone\_company |     |     |
| Telephone home | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_phone\_home |     |     |
| Cellphone | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_phone\_mobile |     |     |
| Fax | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_fax |     |     |
| Pager | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_pager |     |     |
| Personnel number | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_personnel\_number |     |     |
| Department | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_department |     |     |
| Organisation | int | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |
| ID  | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_isys\_ldap\_\_id |     |     |
| DN  | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_ldap\_dn |     |     |
| Description | text\_area | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_description |     |     |
| Custom 1 | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_custom1 |     |     |
| Custom 2 | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_custom2 |     |     |
| Custom 3 | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_custom3 |     |     |
| Custom 4 | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_custom4 |     |     |
| Custom 5 | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_custom5 |     |     |
| Custom 6 | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_custom6 |     |     |
| Custom 7 | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_custom7 |     |     |
| Custom 8 | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_custom8 |     |     |

### Master Data

#### Table: isys\_cats\_person\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Title | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_title |     |     |
| Salutation | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_salutation |     |     |
| First name | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_first\_name |     |     |
| Last name | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_last\_name |     |     |
| Academic degree | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_academic\_degree |     |     |
| Function | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_function |     |     |
| Service designation | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_service\_designation |     |     |
| Street | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_street |     |     |
| City | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_city |     |     |
| ZIP-Code | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_zip\_code |     |     |
| E-mail address | text | isys\_cats\_person\_list | isys\_catg\_mail\_addresses\_list\_\_title |     |     |
| Telephone company | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_phone\_company |     |     |
| Telephone home | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_phone\_home |     |     |
| Cellphone | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_phone\_mobile |     |     |
| Fax | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_fax |     |     |
| Pager | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_pager |     |     |
| Personnel number | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_personnel\_number |     |     |
| Department | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_department |     |     |
| Organisation | int | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |
| ID  | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_isys\_ldap\_\_id |     |     |
| DN  | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_ldap\_dn |     |     |
| Description | text\_area | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_description |     |     |
| Custom 1 | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_custom1 |     |     |
| Custom 2 | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_custom2 |     |     |
| Custom 3 | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_custom3 |     |     |
| Custom 4 | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_custom4 |     |     |
| Custom 5 | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_custom5 |     |     |
| Custom 6 | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_custom6 |     |     |
| Custom 7 | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_custom7 |     |     |
| Custom 8 | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_custom8 |     |     |

### Login

#### Table: isys\_cats\_person\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| User name | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_title |     |     |
| Password | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_user\_pass |     |     |
| Password | text | isys\_cats\_person\_list |     |     |     |
| Description | text\_area | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_description |     |     |
| Custom 1 | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_custom1 |     |     |
| Custom 2 | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_custom2 |     |     |
| Custom 3 | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_custom3 |     |     |
| Custom 4 | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_custom4 |     |     |
| Custom 5 | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_custom5 |     |     |
| Custom 6 | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_custom6 |     |     |
| Custom 7 | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_custom7 |     |     |
| Custom 8 | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_custom8 |     |     |

### Person group memberships

#### Table: isys\_person\_2\_group\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Person group memberships | int | isys\_person\_2\_group\_list | isys\_cats\_person\_group\_list\_\_isys\_obj\_\_id |     |     |
| Contact | int | isys\_person\_2\_group\_list | isys\_person\_2\_group\_\_isys\_obj\_\_id\_\_group |     |     |

### Person groups

#### Table: isys\_cats\_person\_group\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Title | text | isys\_cats\_person\_group\_list | isys\_cats\_person\_group\_list\_\_title |     |     |
| E-Mail | text | isys\_cats\_person\_group\_list | isys\_catg\_mail\_addresses\_list\_\_title |     |     |
| Phone | text | isys\_cats\_person\_group\_list | isys\_cats\_person\_group\_list\_\_phone |     |     |
| LDAP-Group (Mapping) | text | isys\_cats\_person\_group\_list | isys\_cats\_person\_group\_list\_\_ldap\_group |     |     |
| Description | text\_area | isys\_cats\_person\_group\_list | isys\_cats\_person\_group\_list\_\_description |     |     |

### Master Data

#### Table: isys\_cats\_person\_group\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Title | text | isys\_cats\_person\_group\_list | isys\_cats\_person\_group\_list\_\_title |     |     |
| E-Mail | text | isys\_cats\_person\_group\_list | isys\_catg\_mail\_addresses\_list\_\_title |     |     |
| Phone | text | isys\_cats\_person\_group\_list | isys\_cats\_person\_group\_list\_\_phone |     |     |
| LDAP-Group (Mapping) | text | isys\_cats\_person\_group\_list | isys\_cats\_person\_group\_list\_\_ldap\_group |     |     |
| Description | text\_area | isys\_cats\_person\_group\_list | isys\_cats\_person\_group\_list\_\_description |     |     |

### Members

#### Table: isys\_person\_2\_group\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| First name | text | isys\_person\_2\_group\_list | isys\_cats\_person\_list\_\_first\_name |     |     |
| Last name | text | isys\_person\_2\_group\_list | isys\_cats\_person\_list\_\_last\_name |     |     |
| Department | text | isys\_person\_2\_group\_list | isys\_cats\_person\_list\_\_department |     |     |
| Telephone company | text | isys\_person\_2\_group\_list | isys\_cats\_person\_list\_\_phone\_company |     |     |
| E-Mail | text | isys\_person\_2\_group\_list | isys\_cats\_person\_list\_\_mail\_address |     |     |
| Organisation | int | isys\_person\_2\_group\_list | isys\_cats\_person\_list\_\_isys\_connection\_\_id |     |     |
| Title | text | isys\_person\_2\_group\_list | isys\_cats\_person\_list\_\_title |     |     |
| Members | int | isys\_person\_2\_group\_list | isys\_cats\_person\_list\_\_isys\_obj\_\_id |     |     |

### Assigned Objects

#### Table: isys\_catg\_contact\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Title | int | isys\_catg\_contact\_list | isys\_catg\_contact\_list\_\_isys\_obj\_\_id |     |     |
| Role | int | isys\_catg\_contact\_list | isys\_catg\_contact\_list\_\_isys\_contact\_tag\_\_id | isys\_contact\_tag | isys\_contact\_tag\_\_id |

### Assigned Objects

#### Table: isys\_catg\_contact\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Object | int | isys\_catg\_contact\_list | isys\_catg\_contact\_list\_\_isys\_obj\_\_id | isys\_connection | isys\_connection\_\_isys\_obj\_\_id |
| Object type | int | isys\_catg\_contact\_list | isys\_obj\_\_isys\_obj\_type\_\_id |     |     |
| Role | int | isys\_catg\_contact\_list | isys\_catg\_contact\_list\_\_isys\_contact\_tag\_\_id | isys\_contact\_tag | isys\_contact\_tag\_\_id |
| Description | text\_area | isys\_catg\_contact\_list | isys\_catg\_contact\_list\_\_description |     |     |

### Assigned Objects

#### Table: isys\_catg\_contact\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Object | int | isys\_catg\_contact\_list | isys\_catg\_contact\_list\_\_isys\_obj\_\_id | isys\_connection | isys\_connection\_\_isys\_obj\_\_id |
| Object type | int | isys\_catg\_contact\_list | isys\_obj\_\_isys\_obj\_type\_\_id |     |     |
| Role | int | isys\_catg\_contact\_list | isys\_catg\_contact\_list\_\_isys\_contact\_tag\_\_id | isys\_contact\_tag | isys\_contact\_tag\_\_id |
| Description | text\_area | isys\_catg\_contact\_list | isys\_cats\_person\_contact\_assign\_list\_\_description |     |     |

### Assigned clusters

#### Table: isys\_catg\_cluster\_service\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Assigned clusters | int | isys\_catg\_cluster\_service\_list | isys\_catg\_cluster\_service\_list\_\_isys\_obj\_\_id |     |     |
| Type | int | isys\_catg\_cluster\_service\_list | isys\_catg\_cluster\_service\_list\_\_isys\_cluster\_type\_\_id | isys\_cluster\_type | isys\_cluster\_type\_\_id |
| Runs on | int | isys\_catg\_cluster\_service\_list | isys\_catg\_cluster\_service\_list\_\_id |     |     |
| Default server | int | isys\_catg\_cluster\_members\_list | isys\_catg\_cluster\_members\_list\_\_isys\_connection\_\_id |     |     |
| Host addresses | int | isys\_catg\_cluster\_service\_list | isys\_catg\_cluster\_service\_list\_\_id | isys\_catg\_ip\_list\_2\_isys\_catg\_cluster\_service\_list | isys\_catg\_cluster\_service\_list\_\_id |
| Volumes | int | isys\_catg\_cluster\_service\_list | isys\_catg\_cluster\_service\_list\_\_property |     |     |
| Shares | int | isys\_catg\_cluster\_service\_list | isys\_catg\_cluster\_service\_list\_\_isys\_obj\_\_id |     |     |
| Database schema | int | isys\_catg\_cluster\_service\_list | isys\_catg\_cluster\_service\_list\_\_isys\_catg\_relation\_list\_\_id | isys\_cats\_database\_access\_list | isys\_cats\_database\_access\_list\_\_id |
| Description | text\_area | isys\_catg\_cluster\_service\_list | isys\_catg\_cluster\_service\_list\_\_description |     |     |

### Relation details

#### Table: isys\_catg\_relation\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Object1 | int | isys\_catg\_relation\_list | isys\_catg\_relation\_list\_\_isys\_obj\_\_id\_\_master |     |     |
| Object2 | int | isys\_catg\_relation\_list | isys\_catg\_relation\_list\_\_isys\_obj\_\_id\_\_slave |     |     |
| Service | int | isys\_catg\_relation\_list | isys\_catg\_relation\_list\_\_isys\_obj\_\_id\_\_itservice |     |     |
| Relation type | int | isys\_catg\_relation\_list | isys\_catg\_relation\_list\_\_isys\_relation\_type\_\_id | isys\_relation\_type | isys\_relation\_type\_\_id |
| Weighting | int | isys\_catg\_relation\_list | isys\_catg\_relation\_list\_\_isys\_weighting\_\_id | isys\_weighting | isys\_weighting\_\_id |
| Description | text\_area | isys\_catg\_relation\_list | isys\_catg\_relation\_list\_\_description |     |     |

### Database schema

#### Table: isys\_cats\_database\_schema\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Runs on | int | isys\_cats\_database\_schema\_list | isys\_cats\_database\_schema\_list\_\_isys\_connection\_\_id |     |     |
| Database instance | int | isys\_cats\_database\_schema\_list | isys\_cats\_database\_schema\_list\_\_isys\_cats\_db\_instance\_list\_\_id | isys\_cats\_database\_instance\_list | isys\_cats\_database\_instance\_list\_\_id |
| Title | text | isys\_cats\_database\_schema\_list | isys\_cats\_database\_schema\_list\_\_title |     |     |
| Storage-Engine | text | isys\_cats\_database\_schema\_list | isys\_cats\_database\_schema\_list\_\_storage\_engine |     |     |
| Description | text\_area | isys\_cats\_database\_schema\_list | isys\_cats\_database\_schema\_list\_\_description |     |     |

### Database links

#### Table: isys\_cats\_database\_links\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Title | text | isys\_cats\_database\_links\_list | isys\_cats\_database\_links\_list\_\_title |     |     |
| Connected database schema | int | isys\_cats\_database\_links\_list | isys\_cats\_database\_links\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |
| Target user | text | isys\_cats\_database\_links\_list | isys\_cats\_database\_links\_list\_\_target\_user |     |     |
| Owner | text | isys\_cats\_database\_links\_list | isys\_cats\_database\_links\_list\_\_owner |     |     |
| Public | int | isys\_cats\_database\_links\_list | isys\_cats\_database\_links\_list\_\_public |     |     |
| Description | text\_area | isys\_cats\_database\_links\_list | isys\_cats\_database\_links\_list\_\_description |     |     |

### DBMS

#### Table: isys\_cats\_dbms\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| DBMS | int | isys\_cats\_dbms\_list | isys\_cats\_dbms\_list\_\_isys\_dbms\_\_id | isys\_dbms | isys\_dbms\_\_id |
| Description | text\_area | isys\_cats\_dbms\_list | isys\_cats\_dbms\_list\_\_description |     |     |

### Instance / Oracle database

#### Table: isys\_cats\_database\_instance\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| DBMS | int | isys\_cats\_database\_instance\_list | isys\_cats\_database\_instance\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |
| Title | text | isys\_cats\_database\_instance\_list | isys\_cats\_database\_instance\_list\_\_title |     |     |
| Listener | text | isys\_cats\_database\_instance\_list | isys\_cats\_database\_instance\_list\_\_listener |     |     |
| Database schema | int | isys\_cats\_database\_instance\_list | isys\_cats\_database\_instance\_list\_\_isys\_obj\_\_id |     |     |
| Description | text\_area | isys\_cats\_database\_instance\_list | isys\_cats\_database\_instance\_list\_\_description |     |     |

### PDU

#### Table: isys\_cats\_pdu\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| PDU | text | isys\_cats\_pdu\_list | isys\_cats\_pdu\_list\_\_pdu\_id |     |     |
| Description | text\_area | isys\_cats\_pdu\_list | isys\_cats\_pdu\_list\_\_description |     |     |

### Branch

#### Table: isys\_cats\_pdu\_branch\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| PDU | int | isys\_cats\_pdu\_branch\_list | isys\_cats\_pdu\_branch\_list\_\_pdu\_id |     |     |
| Branch-ID | int | isys\_cats\_pdu\_branch\_list | isys\_cats\_pdu\_branch\_list\_\_branch\_id |     |     |
| Receptacles | int | isys\_cats\_pdu\_branch\_list | isys\_cats\_pdu\_branch\_list\_\_receptables |     |     |
| Description | text\_area | isys\_cats\_pdu\_branch\_list | isys\_cats\_pdu\_branch\_list\_\_description |     |     |

### Parallel relations

#### Table: isys\_cats\_relpool\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Title | text | isys\_cats\_relpool\_list | isys\_cats\_relpool\_list\_\_title |     |     |
| Minimum amount of active items | text | isys\_cats\_relpool\_list | isys\_cats\_relpool\_list\_\_threshold |     |     |
| Parallel relations | text | isys\_cats\_relpool\_list | isys\_cats\_relpool\_list\_\_isys\_obj\_\_id |     |     |
| Description | text\_area | isys\_cats\_relpool\_list | isys\_cats\_relpool\_list\_\_description |     |     |

### Database objects

#### Table: isys\_cats\_database\_objects\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Title | text | isys\_cats\_database\_objects\_list | isys\_cats\_database\_objects\_list\_\_title |     |     |
| Type | int | isys\_cats\_database\_objects\_list | isys\_cats\_database\_objects\_list\_\_isys\_database\_objects\_\_id | isys\_database\_objects | isys\_database\_objects\_\_id |
| Description | text\_area | isys\_cats\_database\_objects\_list | isys\_cats\_database\_objects\_list\_\_description |     |     |

### Database access

#### Table: isys\_cats\_database\_access\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Assigned objects | int | isys\_cats\_database\_access\_list | isys\_cats\_database\_access\_list\_\_isys\_connection\_\_id |     |     |

### Database gateway

#### Table: isys\_cats\_database\_gateway\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Gateway type | text | isys\_cats\_database\_gateway\_list | isys\_cats\_database\_gateway\_list\_\_type |     |     |
| Host | text | isys\_cats\_database\_gateway\_list | isys\_cats\_database\_gateway\_list\_\_host |     |     |
| Port | text | isys\_cats\_database\_gateway\_list | isys\_cats\_database\_gateway\_list\_\_port |     |     |
| User | text | isys\_cats\_database\_gateway\_list | isys\_cats\_database\_gateway\_list\_\_user |     |     |
| Target schema | int | isys\_cats\_database\_gateway\_list | isys\_cats\_database\_gateway\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |
| Description | text\_area | isys\_cats\_database\_gateway\_list | isys\_cats\_database\_gateway\_list\_\_description |     |     |

### Replication

#### Table: isys\_cats\_replication\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Replication mechanism | int | isys\_cats\_replication\_list | isys\_cats\_replication\_list\_\_isys\_replication\_mechanism\_\_id | isys\_replication\_mechanism | isys\_replication\_mechanism\_\_id |
| Description | text\_area | isys\_cats\_replication\_list | isys\_cats\_replication\_list\_\_description |     |     |

### Replication partner

#### Table: isys\_cats\_replication\_partner\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Replication type | int | isys\_cats\_replication\_partner\_list | isys\_cats\_replication\_partner\_list\_\_isys\_replication\_type\_\_id | isys\_replication\_type | isys\_replication\_type\_\_id |
| Replication partner | int | isys\_cats\_replication\_partner\_list | isys\_cats\_replication\_partner\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |
| Description | text\_area | isys\_cats\_replication\_partner\_list | isys\_cats\_replication\_partner\_list\_\_description |     |     |

### Installation

#### Table: isys\_catg\_application\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Installed on | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_obj\_\_id |     |     |
| Type | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_catg\_application\_type\_\_id | isys\_catg\_application\_type | isys\_catg\_application\_type\_\_id |
| Priority | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_catg\_application\_priority\_\_id | isys\_catg\_application\_priority | isys\_catg\_application\_priority\_\_id |
| Assigned license | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_cats\_lic\_list\_\_id | isys\_cats\_lic\_list | isys\_cats\_lic\_list\_\_id |
| Assigned license key | text | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_cats\_lic\_list\_\_id | isys\_cats\_lic\_list | isys\_cats\_lic\_list\_\_id |
| Database schema | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_catg\_relation\_list\_\_id | isys\_cats\_database\_access\_list | isys\_cats\_database\_access\_list\_\_id |
| Service | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_catg\_relation\_list\_\_id | isys\_catg\_its\_components\_list | isys\_catg\_its\_components\_list\_\_id |
| Variant | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_cats\_app\_variant\_list\_\_id | isys\_cats\_app\_variant\_list | isys\_cats\_app\_variant\_list\_\_id |
| Inherit nagios services | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_bequest\_nagios\_services |     |     |
| Description | text\_area | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_description |     |     |

### Middleware

#### Table: isys\_cats\_application\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Specification | text | isys\_cats\_application\_list | isys\_cats\_application\_list\_\_specification |     |     |
| Manufacturer | int | isys\_cats\_application\_list | isys\_cats\_application\_list\_\_isys\_application\_manufacturer\_\_id | isys\_application\_manufacturer | isys\_application\_manufacturer\_\_id |
| Installation | int | isys\_cats\_application\_list | isys\_cats\_application\_list\_\_isys\_installation\_type\_\_id | isys\_installation\_type | isys\_installation\_type\_\_id |
| Registration key | text | isys\_cats\_application\_list | isys\_cats\_application\_list\_\_registration\_key |     |     |
| Install path | text | isys\_cats\_application\_list | isys\_cats\_application\_list\_\_install\_path |     |     |
| Amount of installations | int | isys\_cats\_application\_list |     |     |     |
| Description | text\_area | isys\_cats\_application\_list | isys\_cats\_application\_list\_\_description |     |     |

### Crypto card

#### Table: isys\_cats\_krypto\_card\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Certificate number | text | isys\_cats\_krypto\_card\_list | isys\_cats\_krypto\_card\_list\_\_certificate\_number |     |     |
| Certgate card number | text | isys\_cats\_krypto\_card\_list | isys\_cats\_krypto\_card\_list\_\_certgate\_card\_number |     |     |
| Certificate title | text | isys\_cats\_krypto\_card\_list | isys\_cats\_krypto\_card\_list\_\_certificate\_title |     |     |
| Certificate revocation password | text | isys\_cats\_krypto\_card\_list | isys\_cats\_krypto\_card\_list\_\_certificate\_password |     |     |
| Certificate procedure | date | isys\_cats\_krypto\_card\_list | isys\_cats\_krypto\_card\_list\_\_certificate\_procedure |     |     |
| Date of issue | date | isys\_cats\_krypto\_card\_list | isys\_cats\_krypto\_card\_list\_\_date\_of\_issue |     |     |
| IMEI number | text | isys\_cats\_krypto\_card\_list | isys\_cats\_krypto\_card\_list\_\_imei\_number |     |     |
| Assigned cellular phone | int | isys\_cats\_krypto\_card\_list | isys\_catg\_assigned\_cards\_list\_\_isys\_obj\_\_id |     |     |
| Description | text\_area | isys\_cats\_krypto\_card\_list | isys\_cats\_krypto\_card\_list\_\_description |     |     |

### IP list

#### Table: isys\_cats\_net\_ip\_addresses\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Type | int | isys\_cats\_net\_ip\_addresses\_list | isys\_catg\_ip\_list\_\_isys\_net\_type\_\_id | isys\_net\_type | isys\_net\_type\_\_id |
| Host address | text | isys\_cats\_net\_ip\_addresses\_list | isys\_cats\_net\_ip\_addresses\_list\_\_title |     |     |
| Object | int | isys\_cats\_net\_ip\_addresses\_list | isys\_cats\_net\_ip\_addresses\_list\_\_id |     |     |
| Address allocation IPv4 | int | isys\_cats\_net\_ip\_addresses\_list | isys\_catg\_ip\_list\_\_isys\_ip\_assignment\_\_id | isys\_ip\_assignment | isys\_ip\_assignment\_\_id |
| Address allocation IPv6 | int | isys\_cats\_net\_ip\_addresses\_list | isys\_catg\_ip\_list\_\_isys\_ipv6\_assignment\_\_id | isys\_ipv6\_assignment | isys\_ipv6\_assignment\_\_id |
| Object | int | isys\_cats\_net\_ip\_addresses\_list | isys\_catg\_ip\_list\_\_isys\_obj\_\_id |     |     |
| Open IP list | text | isys\_cats\_net\_ip\_addresses\_list | isys\_cats\_net\_ip\_addresses\_link\_\_isys\_obj\_\_id |     |     |

### DHCP

#### Table: isys\_cats\_net\_dhcp\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Type v4 | int | isys\_cats\_net\_dhcp\_list | isys\_cats\_net\_dhcp\_list\_\_isys\_net\_dhcp\_type\_\_id | isys\_net\_dhcp\_type | isys\_net\_dhcp\_type\_\_id |
| Type v6 | int | isys\_cats\_net\_dhcp\_list | isys\_cats\_net\_dhcp\_list\_\_isys\_net\_dhcpv6\_type\_\_id | isys\_net\_dhcpv6\_type | isys\_net\_dhcpv6\_type\_\_id |
| DHCP from | text | isys\_cats\_net\_dhcp\_list | isys\_cats\_net\_dhcp\_list\_\_range\_from |     |     |
| DHCP to | text | isys\_cats\_net\_dhcp\_list | isys\_cats\_net\_dhcp\_list\_\_range\_to |     |     |
| Description | text\_area | isys\_cats\_net\_dhcp\_list | isys\_cats\_net\_dhcp\_list\_\_description |     |     |

### Layer 2 Net

#### Table: isys\_cats\_layer2\_net\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| ID (VLAN) | text | isys\_cats\_layer2\_net\_list | isys\_cats\_layer2\_net\_list\_\_ident |     |     |
| Default VLAN | int | isys\_cats\_layer2\_net\_list | isys\_cats\_layer2\_net\_list\_\_standard |     |     |
| Type | int | isys\_cats\_layer2\_net\_list | isys\_cats\_layer2\_net\_list\_\_isys\_layer2\_net\_type\_\_id | isys\_layer2\_net\_type | isys\_layer2\_net\_type\_\_id |
| Subtype | int | isys\_cats\_layer2\_net\_list | isys\_cats\_layer2\_net\_list\_\_isys\_layer2\_net\_subtype\_\_id | isys\_layer2\_net\_subtype | isys\_layer2\_net\_subtype\_\_id |
| IP helper addresses | int | isys\_cats\_layer2\_net\_list | isys\_cats\_layer2\_net\_list\_\_id |     |     |
| Layer-3-net assignment | int | isys\_cats\_layer2\_net\_list | isys\_cats\_layer2\_net\_list\_\_id | isys\_cats\_layer2\_net\_2\_layer3 | isys\_obj\_\_id |
| VRF | text | isys\_cats\_layer2\_net\_list | isys\_cats\_layer2\_net\_list\_\_vrf |     |     |
| VRF Capacity | int | isys\_cats\_layer2\_net\_list | isys\_cats\_layer2\_net\_list\_\_vrf\_capacity |     |     |
| VRF Capacity (Unit) | int | isys\_cats\_layer2\_net\_list | isys\_cats\_layer2\_net\_list\_\_isys\_wan\_capacity\_unit |     |     |
| Description | text\_area | isys\_cats\_layer2\_net\_list | isys\_cats\_layer2\_net\_list\_\_description |     |     |

### Assigned ports

#### Table: isys\_cats\_layer2\_net\_assigned\_ports\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Object title | int | isys\_cats\_layer2\_net\_assigned\_ports\_list | isys\_cats\_layer2\_net\_assigned\_ports\_list\_\_isys\_obj\_\_id |     |     |
| Assigned ports | int | isys\_cats\_layer2\_net\_assigned\_ports\_list | isys\_catg\_port\_list\_\_id |     |     |
| MAC-address | int | isys\_cats\_layer2\_net\_assigned\_ports\_list | isys\_catg\_port\_list\_\_id |     |     |

### Contract

#### Table: isys\_cats\_contract\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Contract type | int | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_isys\_contract\_type\_\_id | isys\_contract\_type | isys\_contract\_type\_\_id |
| Contract id | text | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_contract\_no |     |     |
| Customer id | text | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_customer\_no |     |     |
| Internal id | text | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_internal\_no |     |     |
| Costs | double | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_costs |     |     |
| Product | text | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_product |     |     |
| Reaction rate | int | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_isys\_contract\_reaction\_rate\_\_id | isys\_contract\_reaction\_rate | isys\_contract\_reaction\_rate\_\_id |
| Contract status | int | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_isys\_contract\_status\_\_id | isys\_contract\_status | isys\_contract\_status\_\_id |
| Start of contract | date | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_start\_date |     |     |
| End of contract | date | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_end\_date |     |     |
| Runtime | int | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_runtime |     |     |
| Runtime unit | int | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_runtime\_unit | isys\_guarantee\_period\_unit | isys\_guarantee\_period\_unit\_\_id |
| Possible next contract expires | text | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_id |     |     |
| End of contract by | int | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_isys\_contract\_end\_type\_\_id | isys\_contract\_end\_type | isys\_contract\_end\_type\_\_id |
| Possible next termination date | text | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_id |     |     |
| Cancellation date | date | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_notice\_date |     |     |
| Cancellation period | int | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_notice\_period |     |     |
| Notice period unit | int | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_notice\_period\_unit\_\_id | isys\_guarantee\_period\_unit | isys\_guarantee\_period\_unit\_\_id |
| Notice type | int | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_isys\_contract\_notice\_period\_type\_\_id | isys\_contract\_notice\_period\_type | isys\_contract\_notice\_period\_type\_\_id |
| Maintenance-/guarantee period | int | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_maintenance\_period |     |     |
| Deadline unit | int | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_maintenance\_period\_unit\_\_id | isys\_guarantee\_period\_unit | isys\_guarantee\_period\_unit\_\_id |
| Payment period | int | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_isys\_contract\_payment\_period\_\_id | isys\_contract\_payment\_period | isys\_contract\_payment\_period\_\_id |
| Description | text\_area | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_description |     |     |

### Contract information

#### Table: isys\_cats\_contract\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Contract type | int | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_isys\_contract\_type\_\_id | isys\_contract\_type | isys\_contract\_type\_\_id |
| Contract id | text | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_contract\_no |     |     |
| Customer id | text | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_customer\_no |     |     |
| Internal id | text | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_internal\_no |     |     |
| Costs | double | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_costs |     |     |
| Product | text | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_product |     |     |
| Reaction rate | int | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_isys\_contract\_reaction\_rate\_\_id | isys\_contract\_reaction\_rate | isys\_contract\_reaction\_rate\_\_id |
| Contract status | int | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_isys\_contract\_status\_\_id | isys\_contract\_status | isys\_contract\_status\_\_id |
| Start of contract | date | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_start\_date |     |     |
| End of contract | date | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_end\_date |     |     |
| Runtime | int | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_runtime |     |     |
| Runtime unit | int | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_runtime\_unit | isys\_guarantee\_period\_unit | isys\_guarantee\_period\_unit\_\_id |
| Possible next contract expires | text | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_id |     |     |
| End of contract by | int | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_isys\_contract\_end\_type\_\_id | isys\_contract\_end\_type | isys\_contract\_end\_type\_\_id |
| Possible next termination date | text | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_id |     |     |
| Cancellation date | date | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_notice\_date |     |     |
| Cancellation period | int | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_notice\_period |     |     |
| Notice period unit | int | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_notice\_period\_unit\_\_id | isys\_guarantee\_period\_unit | isys\_guarantee\_period\_unit\_\_id |
| Notice type | int | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_isys\_contract\_notice\_period\_type\_\_id | isys\_contract\_notice\_period\_type | isys\_contract\_notice\_period\_type\_\_id |
| Maintenance-/guarantee period | int | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_maintenance\_period |     |     |
| Deadline unit | int | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_maintenance\_period\_unit\_\_id | isys\_guarantee\_period\_unit | isys\_guarantee\_period\_unit\_\_id |
| Payment period | int | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_isys\_contract\_payment\_period\_\_id | isys\_contract\_payment\_period | isys\_contract\_payment\_period\_\_id |
| Description | text\_area | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_description |     |     |

### Assigned Objects

#### Table: isys\_catg\_contract\_assignment\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Assigned objects | int | isys\_catg\_contract\_assignment\_list | isys\_catg\_contract\_assignment\_list\_\_isys\_obj\_\_id |     |     |

### Chassis

#### Table: isys\_cats\_chassis\_view\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Front horizontal units | int | isys\_cats\_chassis\_view\_list | isys\_cats\_chassis\_view\_list\_\_front\_width |     |     |
| Front vertical units | int | isys\_cats\_chassis\_view\_list | isys\_cats\_chassis\_view\_list\_\_front\_height |     |     |
| Front grid size | int | isys\_cats\_chassis\_view\_list | isys\_cats\_chassis\_view\_list\_\_front\_size |     |     |
| Rear horizontal units | int | isys\_cats\_chassis\_view\_list | isys\_cats\_chassis\_view\_list\_\_rear\_width |     |     |
| Rear vertical units | int | isys\_cats\_chassis\_view\_list | isys\_cats\_chassis\_view\_list\_\_rear\_height |     |     |
| Rear grid size | int | isys\_cats\_chassis\_view\_list | isys\_cats\_chassis\_view\_list\_\_rear\_size |     |     |
| Description | text\_area | isys\_cats\_chassis\_view\_list | isys\_cats\_chassis\_view\_list\_\_description |     |     |

### Slots

#### Table: isys\_cats\_chassis\_slot\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Connector type | int | isys\_cats\_chassis\_slot\_list | isys\_cats\_chassis\_slot\_list\_\_isys\_chassis\_connector\_type\_\_id | isys\_chassis\_connector\_type | isys\_chassis\_connector\_type\_\_id |
| Insertion | int | isys\_cats\_chassis\_slot\_list | isys\_cats\_chassis\_slot\_list\_\_insertion |     |     |
| Slot title | text | isys\_cats\_chassis\_slot\_list | isys\_cats\_chassis\_slot\_list\_\_title |     |     |
| Horizontal position | int | isys\_cats\_chassis\_slot\_list | isys\_cats\_chassis\_slot\_list\_\_x\_from |     |     |
| To horizontal position | int | isys\_cats\_chassis\_slot\_list | isys\_cats\_chassis\_slot\_list\_\_x\_to |     |     |
| Vertical position | int | isys\_cats\_chassis\_slot\_list | isys\_cats\_chassis\_slot\_list\_\_y\_from |     |     |
| To vertical position | int | isys\_cats\_chassis\_slot\_list | isys\_cats\_chassis\_slot\_list\_\_y\_to |     |     |
| Device assignment | int | isys\_cats\_chassis\_slot\_list | isys\_cats\_chassis\_slot\_list\_\_id |     |     |
| Description | text\_area | isys\_cats\_chassis\_slot\_list | isys\_cats\_chassis\_slot\_list\_\_description |     |     |

### Assigned devices

#### Table: isys\_cats\_chassis\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Role | int | isys\_cats\_chassis\_list | isys\_cats\_chassis\_list\_\_isys\_chassis\_role\_\_id | isys\_chassis\_role | isys\_chassis\_role\_\_id |
| Device assignment | int | isys\_cats\_chassis\_list | isys\_cats\_chassis\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |
| Device assignment (Hostadapter) | int | isys\_cats\_chassis\_list | isys\_cats\_chassis\_list\_\_isys\_catg\_hba\_list\_\_id | isys\_catg\_hba\_list | isys\_catg\_hba\_list\_\_id |
| Device assignment (Interface) | int | isys\_cats\_chassis\_list | isys\_cats\_chassis\_list\_\_isys\_catg\_netp\_list\_\_id | isys\_catg\_netp\_list | isys\_catg\_netp\_list\_\_id |
| Device assignment (Power consumer) | int | isys\_cats\_chassis\_list | isys\_cats\_chassis\_list\_\_isys\_catg\_pc\_list\_\_id | isys\_catg\_pc\_list | isys\_catg\_pc\_list\_\_id |
| Assigned to | int | isys\_cats\_chassis\_list | isys\_cats\_chassis\_list\_\_id |     |     |
| Description | text\_area | isys\_cats\_chassis\_list | isys\_cats\_chassis\_list\_\_description |     |     |

### Chassis view

#### Table: isys\_cats\_chassis\_view\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Front horizontal units | int | isys\_cats\_chassis\_view\_list | isys\_cats\_chassis\_view\_list\_\_front\_width |     |     |
| Front vertical units | int | isys\_cats\_chassis\_view\_list | isys\_cats\_chassis\_view\_list\_\_front\_height |     |     |
| Front grid size | int | isys\_cats\_chassis\_view\_list | isys\_cats\_chassis\_view\_list\_\_front\_size |     |     |
| Rear horizontal units | int | isys\_cats\_chassis\_view\_list | isys\_cats\_chassis\_view\_list\_\_rear\_width |     |     |
| Rear vertical units | int | isys\_cats\_chassis\_view\_list | isys\_cats\_chassis\_view\_list\_\_rear\_height |     |     |
| Rear grid size | int | isys\_cats\_chassis\_view\_list | isys\_cats\_chassis\_view\_list\_\_rear\_size |     |     |
| Description | text\_area | isys\_cats\_chassis\_view\_list | isys\_cats\_chassis\_view\_list\_\_description |     |     |

### Variants

#### Table: isys\_cats\_app\_variant\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Title | text | isys\_cats\_app\_variant\_list | isys\_cats\_app\_variant\_list\_\_title |     |     |
| Variant | text | isys\_cats\_app\_variant\_list | isys\_cats\_app\_variant\_list\_\_variant |     |     |
| Description | text\_area | isys\_cats\_app\_variant\_list | isys\_cats\_app\_variant\_list\_\_description |     |     |

### Nagios

#### Table: isys\_cats\_person\_nagios\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Alias | text | isys\_cats\_person\_nagios\_list | isys\_cats\_person\_nagios\_list\_\_alias |     |     |
| contact\_name | text | isys\_cats\_person\_nagios\_list | isys\_cats\_person\_nagios\_list\_\_contact\_name |     |     |
| contact\_name selection | int | isys\_cats\_person\_nagios\_list | isys\_cats\_person\_nagios\_list\_\_contact\_name\_selection |     |     |
| host\_notification\_enabled | int | isys\_cats\_person\_nagios\_list | isys\_cats\_person\_nagios\_list\_\_host\_notification\_enabled |     |     |
| service\_notification\_enabled | int | isys\_cats\_person\_nagios\_list | isys\_cats\_person\_nagios\_list\_\_service\_notification\_enabled |     |     |
| host\_notification\_period | int | isys\_cats\_person\_nagios\_list | isys\_cats\_person\_nagios\_list\_\_host\_notification\_period |     |     |
| host\_notification\_period+ | int | isys\_cats\_person\_nagios\_list | isys\_cats\_person\_nagios\_list\_\_host\_notification\_period\_plus | isys\_nagios\_timeperiods\_plus | isys\_nagios\_timeperiods\_plus\_\_id |
| service\_notification\_period | int | isys\_cats\_person\_nagios\_list | isys\_cats\_person\_nagios\_list\_\_service\_notification\_period |     |     |
| service\_notification\_period+ | int | isys\_cats\_person\_nagios\_list | isys\_cats\_person\_nagios\_list\_\_service\_notification\_period\_plus | isys\_nagios\_timeperiods\_plus | isys\_nagios\_timeperiods\_plus\_\_id |
| host\_notification\_options | text | isys\_cats\_person\_nagios\_list | isys\_cats\_person\_nagios\_list\_\_host\_notification\_options |     |     |
| service\_notification\_options | text | isys\_cats\_person\_nagios\_list | isys\_cats\_person\_nagios\_list\_\_service\_notification\_options |     |     |
| host\_notification\_commands | text | isys\_cats\_person\_nagios\_list | isys\_cats\_person\_nagios\_list\_\_host\_notification\_commands |     |     |
| service\_notification\_commands | text | isys\_cats\_person\_nagios\_list | isys\_cats\_person\_nagios\_list\_\_service\_notification\_commands |     |     |
| can\_submit\_commands | int | isys\_cats\_person\_nagios\_list | isys\_cats\_person\_nagios\_list\_\_can\_submit\_commands |     |     |
| retain\_status\_information | int | isys\_cats\_person\_nagios\_list | isys\_cats\_person\_nagios\_list\_\_retain\_status\_information |     |     |
| Export this configuration | int | isys\_cats\_person\_nagios\_list | isys\_cats\_person\_nagios\_list\_\_is\_exportable |     |     |
| retain\_nonstatus\_information | int | isys\_cats\_person\_nagios\_list | isys\_cats\_person\_nagios\_list\_\_retain\_nonstatus\_information |     |     |
| custom\_object\_vars | text\_area | isys\_cats\_person\_nagios\_list | isys\_cats\_person\_nagios\_list\_\_custom\_obj\_vars |     |     |
| Description | text\_area | isys\_cats\_person\_nagios\_list | isys\_cats\_person\_nagios\_list\_\_description |     |     |

### Nagios

#### Table: isys\_cats\_person\_group\_nagios\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Export this configuration | int | isys\_cats\_person\_group\_nagios\_list | isys\_cats\_person\_group\_nagios\_list\_\_is\_exportable |     |     |
| alias | text | isys\_cats\_person\_group\_nagios\_list | isys\_cats\_person\_group\_nagios\_list\_\_alias |     |     |
| Description | text\_area | isys\_cats\_person\_group\_nagios\_list | isys\_cats\_person\_group\_nagios\_list\_\_description |     |     |

### Type

#### Table: isys\_cats\_group\_type\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Typ | int | isys\_cats\_group\_type\_list | isys\_cats\_group\_type\_list\_\_type |     |     |
| Report | int | isys\_cats\_group\_type\_list | isys\_cats\_group\_type\_list\_\_isys\_report\_\_id |     |     |
| Description | text\_area | isys\_cats\_group\_type\_list | isys\_cats\_group\_type\_list\_\_description |     |     |

### Assigned logical ports

#### Table: isys\_catg\_log\_port\_list\_2\_isys\_obj

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Object title | int | main | isys\_obj\_\_id |     |     |
| Assigned logical ports | int | isys\_catg\_log\_port\_list | isys\_catg\_log\_port\_list\_\_id |     |     |

### Installation

#### Table: isys\_catg\_application\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Installed on | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_obj\_\_id |     |     |
| Type | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_catg\_application\_type\_\_id | isys\_catg\_application\_type | isys\_catg\_application\_type\_\_id |
| Priority | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_catg\_application\_priority\_\_id | isys\_catg\_application\_priority | isys\_catg\_application\_priority\_\_id |
| Assigned license | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_cats\_lic\_list\_\_id | isys\_cats\_lic\_list | isys\_cats\_lic\_list\_\_id |
| Assigned license key | text | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_cats\_lic\_list\_\_id | isys\_cats\_lic\_list | isys\_cats\_lic\_list\_\_id |
| Database schema | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_catg\_relation\_list\_\_id | isys\_cats\_database\_access\_list | isys\_cats\_database\_access\_list\_\_id |
| Service | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_catg\_relation\_list\_\_id | isys\_catg\_its\_components\_list | isys\_catg\_its\_components\_list\_\_id |
| Variant | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_cats\_app\_variant\_list\_\_id | isys\_cats\_app\_variant\_list | isys\_cats\_app\_variant\_list\_\_id |
| Inherit nagios services | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_bequest\_nagios\_services |     |     |
| Description | text\_area | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_description |     |     |

### Installation

#### Table: isys\_catg\_application\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Installed on | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_obj\_\_id |     |     |
| Type | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_catg\_application\_type\_\_id | isys\_catg\_application\_type | isys\_catg\_application\_type\_\_id |
| Priority | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_catg\_application\_priority\_\_id | isys\_catg\_application\_priority | isys\_catg\_application\_priority\_\_id |
| Assigned license | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_cats\_lic\_list\_\_id | isys\_cats\_lic\_list | isys\_cats\_lic\_list\_\_id |
| Assigned license key | text | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_cats\_lic\_list\_\_id | isys\_cats\_lic\_list | isys\_cats\_lic\_list\_\_id |
| Database schema | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_catg\_relation\_list\_\_id | isys\_cats\_database\_access\_list | isys\_cats\_database\_access\_list\_\_id |
| Service | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_catg\_relation\_list\_\_id | isys\_catg\_its\_components\_list | isys\_catg\_its\_components\_list\_\_id |
| Variant | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_cats\_app\_variant\_list\_\_id | isys\_cats\_app\_variant\_list | isys\_cats\_app\_variant\_list\_\_id |
| Inherit nagios services | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_bequest\_nagios\_services |     |     |
| Description | text\_area | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_description |     |     |

### Net zone

#### Table: isys\_cats\_net\_zone\_list

| Field | Type | Table | Database-Field | Reference-Table | Reference |
| --- | --- | --- | --- | --- | --- |
| Net zone objekt | int | isys\_cats\_net\_zone\_list | isys\_cats\_net\_zone\_list\_\_isys\_obj\_\_id\_\_zone | isys\_obj | isys\_obj\_\_id |
| Zone from | text | isys\_cats\_net\_zone\_list | isys\_cats\_net\_zone\_list\_\_range\_from |     |     |
| Zone from | text | isys\_cats\_net\_zone\_list | isys\_cats\_net\_zone\_list\_\_range\_from\_long |     |     |
| Zone to | text | isys\_cats\_net\_zone\_list | isys\_cats\_net\_zone\_list\_\_range\_to |     |     |
| Zone to | text | isys\_cats\_net\_zone\_list | isys\_cats\_net\_zone\_list\_\_range\_to\_long |     |     |
| Description | text\_area | isys\_cats\_net\_zone\_list | isys\_cats\_net\_zone\_list\_\_description |     |     |