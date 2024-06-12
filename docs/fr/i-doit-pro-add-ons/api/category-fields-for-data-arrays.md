# Champs de catégorie pour les tableaux de données

Cet article répertorie toutes les [catégories et leurs attributs](../../basics/structure-of-the-it-documentation.md) disponibles dans i-doit. Cette liste peut être très utile lorsque vous utilisez l'[interface de programmation d'application (API)](./index.md) de i-doit.

!!! info "Créez ces contenus automatiquement"

    Via le paramètre d'URL load=api_properties, les tables de catégories pour la version actuellement installée de i-doit sont créées. Un utilisateur doit être connecté. Exemple : [https://demo.i-doit.com/?load=api_properties](https://demo.i-doit.com/?load=api_properties)


Global Categories (catg)
------------------------

### General (C\_\_CATG\_\_GLOBAL)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| ID  | id  | int |     | Yes |
| Title | title | text |     | Yes |
| Status | status | int |     | Yes |
| Creation date | created | text |     | Yes |
| Created by | created\_by | text |     | Yes |
| Last change | changed | text |     | Yes |
| Last change by | changed\_by | text |     | Yes |
| Purpose | purpose | int | isys\_purpose\_\_id | Yes |
| Category | category | int | isys\_catg\_global\_category\_\_id | Yes |
| SYSID | sysid | text |     | Yes |
| CMDB status | cmdb\_status | int | isys\_cmdb\_status\_\_id | Yes |
| Object type | type | int | isys\_obj\_type\_\_id | Yes |
| Tags | tag | int | isys\_obj\_\_id | Yes |
| Description | description | text\_area |     | Yes |

### Model (C\_\_CATG\_\_MODEL)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Manufacturer | manufacturer | int | isys\_model\_manufacturer\_\_id | Yes |
| Model | title | int | isys\_model\_title\_\_id | Yes |
| Product ID | productid | text |     | Yes |
| Service Tag | service\_tag | text |     | Yes |
| Serial number | serial | text |     | Yes |
| Firmware | firmware | text |     | Yes |
| Description | description | text\_area |     | Yes |

### Form factor (C\_\_CATG\_\_FORMFACTOR)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Form factor | formfactor | int | isys\_catg\_formfactor\_type\_\_id | Yes |
| Rack units | rackunits | int |     | Yes |
| Dimension unit | unit | int | isys\_depth\_unit\_\_id | Yes |
| Width | width | float |     | Yes |
| Height | height | float |     | Yes |
| Depth | depth | float |     | Yes |
| Weight | weight | float |     | Yes |
| Weight unit | weight\_unit | int | isys\_weight\_unit\_\_id | Yes |
| Description | description | text\_area |     | Yes |

### CPU (C\_\_CATG\_\_CPU)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Title | title | text |     | Yes |
| Manufacturer | manufacturer | int | isys\_catg\_cpu\_manufacturer\_\_id | Yes |
| Type | type | int | isys\_catg\_cpu\_type\_\_id | Yes |
| CPU frequency | frequency | float |     | Yes |
| CPU frequency unit | frequency\_unit | int | isys\_frequency\_unit\_\_id | Yes |
| CPU cores | cores | int |     | Yes |
| Description | description | text\_area |     | Yes |

### Memory (C\_\_CATG\_\_MEMORY)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Quantity | quantity | int |     | Yes |
| Title | title | int | isys\_memory\_title\_\_id | Yes |
| Manufacturer | manufacturer | int | isys\_memory\_manufacturer\_\_id | Yes |
| Type | type | int | isys\_memory\_type\_\_id | Yes |
| Total capacity | total\_capacity | float |     | Yes |
| Capacity | capacity | float |     | Yes |
| Memory unit | unit | int | isys\_memory\_unit\_\_id | Yes |
| Description | description | text\_area |     | Yes |

### Network (C\_\_CATG\_\_NETWORK)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Title | title | text |     | Yes |
| Manufacturer | manufacturer | int | isys\_iface\_manufacturer\_\_id | Yes |
| Model | model | int | isys\_iface\_model\_\_id | Yes |
| Serial number | serial | text |     | Yes |
| Slotnumber | slot | text |     | Yes |
| Description | description | text\_area |     | Yes |

### Power consumer (C\_\_CATG\_\_POWER\_CONSUMER)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Title | title | text |     | Yes |
| Active | active | int |     | Yes |
| Manufacturer | manufacturer | int | isys\_pc\_manufacturer\_\_id | Yes |
| Model | model | int | isys\_pc\_model\_\_id | Yes |
| Volt | volt | text |     | Yes |
| Watt | watt | text |     | Yes |
| Ampere | ampere | text |     | Yes |
| BTU | btu | text |     | Yes |
| Target object | assigned\_connector | int |     | Yes |
| Assigned to connector | connector | int |     | Yes |
| Assigned Input/Output | connector\_sibling | int |     | Yes |
| Description | description | text\_area |     | Yes |

### Interface (C\_\_CATG\_\_UNIVERSAL\_INTERFACE)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Title | title | text |     | Yes |
| Connection type | type | int | isys\_ui\_con\_type\_\_id | Yes |
| Plug type | plug | int | isys\_ui\_plugtype\_\_id | Yes |
| Connected to | assigned\_connector | int |     | Yes |
| Assigned to connector | connector | int |     | Yes |
| Assigned Input/Output | connector\_sibling | int |     | Yes |
| Description | description | text\_area |     | Yes |
| Relation direction | relation\_direction | int |     | Yes |

### Software assignment (C\_\_CATG\_\_APPLICATION)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Application | application | int | isys\_connection\_\_id | Yes |
| Type | application\_type | int | isys\_catg\_application\_type\_\_id | Yes |
| Priority | application\_priority | int | isys\_catg\_application\_priority\_\_id | Yes |
| Assigned license | assigned\_license | int | isys\_cats\_lic\_list\_\_id | Yes |
| Assigned license key | assigned\_license\_key | int | isys\_cats\_lic\_list\_\_id | Yes |
| Datebase schema | assigned\_database\_schema | int | isys\_cats\_database\_access\_list\_\_id | Yes |
| Service | assigned\_it\_service | int | isys\_catg\_its\_components\_list\_\_id | Yes |
| Variant | assigned\_variant | int | isys\_cats\_app\_variant\_list\_\_id | Yes |
| Version number | assigned\_version | int | isys\_catg\_version\_list\_\_id | Yes |
| Inherit nagios services | bequest\_nagios\_services | int |     | Yes |
| Description | description | text\_area |     | Yes |

### Access (C\_\_CATG\_\_ACCESS)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Primary access URL | primary\_url | text |     | Yes |
| Title | title | text |     | Yes |
| Access type | type | int | isys\_access\_type\_\_id | Yes |
| Host\[:Port\]/URL | url | text |     | Yes |
| Host\[:Port\]/URL | formatted\_url | text |     | Yes |
| Primary? | primary | int |     | Yes |
| Description | description | text\_area |     | Yes |

### Backup (C\_\_CATG\_\_BACKUP)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Title | title | text |     | Yes |
| Backed up by | backup | int | isys\_connection\_\_id | Yes |
| Backup type | backup\_type | int | isys\_backup\_type\_\_id | Yes |
| Cycle | cycle | int | isys\_backup\_cycle\_\_id | Yes |
| Path to save | path\_to\_save | text |     | Yes |
| Description | description | text\_area |     | Yes |

### Emergency plan assignment (C\_\_CATG\_\_EMERGENCY\_PLAN)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Title | title | text |     | Yes |
| Assigned emergency plan | emergency\_plan | int | isys\_connection\_\_id | Yes |
| Time need | time\_needed | text |     | Yes |
| Time need (Unit) | time\_needed\_unit | text |     | Yes |
| Date of emergency practice | practice\_date | text |     | Yes |
| Description | description | text\_area |     | Yes |

### Files (C\_\_CATG\_\_FILE)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| File | file | int | isys\_connection\_\_id | Yes |
| Revision | revision | int |     | Yes |
| HTTP-Link (extern) | link | text |     | Yes |
| Description | description | text\_area |     | Yes |

### Contact assignment (C\_\_CATG\_\_CONTACT)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Contact | contact | int |     | Yes |
| Primary contact | primary\_contact | int | isys\_connection\_\_id | Yes |
| Contact | contact\_object | int | isys\_connection\_\_id | Yes |
| Primary | primary | int |     | Yes |
| Role | role | int | isys\_contact\_tag\_\_id | Yes |
| Contact | contact\_list | text |     | Yes |
| Description | description | text\_area |     | Yes |

### Logbook (C\_\_CATG\_\_LOGBOOK)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Date | date | date\_time |     | Yes |
| Object | object | int |     | Yes |
| Event | event | int | isys\_logbook\_event\_\_id | Yes |
| Source | source | int | isys\_logbook\_source\_\_id | Yes |
| User | user | int |     | Yes |
| Object type | object\_type | text |     | Yes |
| Category | category | text |     | Yes |
| Alarm level | alert\_level | text | isys\_logbook\_level\_\_id | Yes |
| User | user\_name\_static | text |     | Yes |
| Event | event\_static | text |     | Yes |
| Comment | comment | text |     | Yes |
| Changes | changes | text |     | Yes |
| Description | description | text\_area |     | Yes |
| Access type | reason | int | isys\_logbook\_reason\_\_id | Yes |

### Controller (C\_\_CATG\_\_CONTROLLER)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Title | title | text |     | Yes |
| Type | type | int | isys\_controller\_type\_\_id | Yes |
| Manufacturer | manufacturer | int | isys\_controller\_manufacturer\_\_id | Yes |
| Model | model | int | isys\_controller\_model\_\_id | Yes |
| Description | description | text\_area |     | Yes |

### Location (C\_\_CATG\_\_LOCATION)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Location path | location\_path | text |     | Yes |
| Location | parent | int |     | Yes |
| Assembly | option | int |     | Yes |
| Insertion | insertion | int |     | Yes |
| Position in the rack | pos | int |     | Yes |
| GPS | gps | text |     | Yes |
| Latitude | latitude | text |     | Yes |
| Longitude | longitude | text |     | Yes |
| Description | description | text\_area |     | Yes |

### Object picture (C\_\_CATG\_\_IMAGE)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Uploaded images | image\_selection | int |     | Yes |
| File | image | text |     | Yes |
| Description | description | text\_area |     | Yes |

### Manual assignment (C\_\_CATG\_\_MANUAL)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Title | title | text |     | Yes |
| Manual file | manual | int | isys\_connection\_\_id | Yes |
| Description | description | text\_area |     | Yes |

### Sound card (C\_\_CATG\_\_SOUND)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Manufacturer | manufacturer | int | isys\_sound\_manufacturer\_\_id | Yes |
| Title | title | text |     | Yes |
| Description | description | text\_area |     | Yes |

### locally assigned objects (C\_\_CATG\_\_OBJECT)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Object | assigned\_object | int |     | Yes |

### Graphic card (C\_\_CATG\_\_GRAPHIC)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Title | title | text |     | Yes |
| Manufacturer | manufacturer | int | isys\_graphic\_manufacturer\_\_id | Yes |
| Memory | memory | float |     | Yes |
| Memory unit | unit | int | isys\_memory\_unit\_\_id | Yes |
| Description | description | text\_area |     | Yes |

### Virtual machine (C\_\_CATG\_\_VIRTUAL\_MACHINE)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Virtual machine | virtual\_machine | int |     | Yes |
| Running on host | hosts | int | isys\_connection\_\_id | Yes |
| Virtualization system | system | int | isys\_vm\_type\_\_id | Yes |
| Configuration file | config\_file | text |     | Yes |
| Host in cluster | primary | int |     | Yes |
| Description | description | text\_area |     | Yes |

### Accounting (C\_\_CATG\_\_ACCOUNTING)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Inventory number | inventory\_no | text |     | Yes |
| Account | account | int | isys\_account\_\_id | Yes |
| Date of invoice | acquirementdate | date |     | Yes |
| Purchased at | contact | int | isys\_contact\_\_id | Yes |
| Investment costs | price | double |     | Yes |
| Operation expense | operation\_expense | double |     | Yes |
| Operation expense (Unit) | operation\_expense\_interval | int | isys\_interval\_\_id | Yes |
| Cost unit | cost\_unit | int | isys\_catg\_accounting\_cost\_unit\_\_id | Yes |
| Delivery note number | delivery\_note\_no | text |     | Yes |
| Procurement | procurement | int | isys\_catg\_accounting\_procurement\_\_id | Yes |
| Delivery date | delivery\_date | date |     | Yes |
| Invoice number | invoice\_no | text |     | Yes |
| Order number | order\_no | text |     | Yes |
| Period of warranty | guarantee\_period | int |     | Yes |
| Warranty period | guarantee\_period\_unit | int | isys\_guarantee\_period\_unit\_\_id | Yes |
| Remainder warranty | guarantee\_period\_status | text |     | Yes |
| Guarantee period by | guarantee\_period\_base | int |     | Yes |
| Order date | order\_date | date |     | Yes |
| Guarantee date | guarantee\_date | date |     | Yes |
| Description | description | text\_area |     | Yes |

### Port (C\_\_CMDB\_\_SUBCAT\_\_NETWORK\_PORT)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Title | title | text |     | Yes |
| Connected interface | interface | int | isys\_catg\_netp\_list\_\_id | Yes |
| Type | port\_type | int | isys\_port\_type\_\_id | Yes |
| Mode | port\_mode | int | isys\_port\_mode\_\_id | Yes |
| Plug | plug\_type | int | isys\_plug\_type\_\_id | Yes |
| Negotiation | negotiation | int | isys\_port\_negotiation\_\_id | Yes |
| Duplex | duplex | int | isys\_port\_duplex\_\_id | Yes |
| Speed | speed | float |     | Yes |
| Unit | speed\_type | int | isys\_port\_speed\_\_id | Yes |
| Standard | standard | int | isys\_port\_standard\_\_id | Yes |
| MAC-address | mac | text |     | Yes |
| MTU | mtu | text |     | Yes |
| Connected with | assigned\_connector | int |     | Yes |
| Assigned to connector | connector | int |     | Yes |
| Assigned Input/Output | connector\_sibling | int |     | Yes |
| Cable ID | cable | int |     | Yes |
| Active | active | int |     | Yes |
| Host address | addresses | int | isys\_catg\_ip\_list\_2\_isys\_catg\_port\_list\_\_isys\_catg\_port\_list\_\_id | Yes |
| Layer 2 Net | layer2\_assignment | int |     | Yes |
| Connected interface (HBA) | hba | int | isys\_catg\_hba\_list\_\_id | Yes |
| Standard VLAN | default\_vlan | int | isys\_catg\_port\_list\_\_id | Yes |
| Description | description | text\_area |     | Yes |
| Relation direction | relation\_direction | int |     | Yes |

### Interface (C\_\_CMDB\_\_SUBCAT\_\_NETWORK\_INTERFACE\_P)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Title | title | text |     | Yes |
| Manufacturer | manufacturer | int | isys\_iface\_manufacturer\_\_id | Yes |
| Model | model | int | isys\_iface\_model\_\_id | Yes |
| Serial number | serial | text |     | Yes |
| Slot number | slot | text |     | Yes |
| Description | description | text\_area |     | Yes |

### logical Ports (C\_\_CMDB\_\_SUBCAT\_\_NETWORK\_INTERFACE\_L)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Title | title | text |     | Yes |
| Net(s) | net | int |     | Yes |
| MAC | mac | text |     | Yes |
| Type | port\_type | int | isys\_netx\_ifacel\_type\_\_id | Yes |
| Allocation | ports | int |     | Yes |
| Parent port | parent | int | isys\_catg\_log\_port\_list\_\_id | Yes |
| Standard | standard | int | isys\_netp\_ifacel\_standard\_\_id | Yes |
| Active | active | int |     | Yes |
| Host address | addresses | int |     | Yes |
| Assigned to connector | assigned\_connector | int |     | Yes |
| Description | description | text\_area |     | Yes |

### Drive (C\_\_CATG\_\_DRIVE)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Drive letter | mount\_point | text |     | Yes |
| Title | title | text |     | Yes |
| System drive | system\_drive | int |     | Yes |
| File system | filesystem | int | isys\_filesystem\_type\_\_id | Yes |
| Capacity | capacity | float |     | Yes |
| Memory unit | unit | int | isys\_memory\_unit\_\_id | Yes |
| Serial number | serial | text |     | Yes |
| Software RAID group | assigned\_raid | int | isys\_catg\_raid\_list\_\_id | Yes |
| Type | drive\_type | int | isys\_catd\_drive\_type\_\_id | Yes |
| On device | device | int | isys\_catg\_stor\_list\_\_id | Yes |
| On device Raid-Array | raid | int | isys\_catg\_raid\_list\_\_id | Yes |
| On device Logical devices (Client) | ldev | int | isys\_catg\_ldevclient\_list\_\_id | Yes |
| Object type constant | category\_const | text |     | Yes |
| Free Diskspace | free\_space | float |     | Yes |
| Memory unit | free\_space\_unit | int | isys\_memory\_unit\_\_id | Yes |
| Used Diskspace | used\_space | float |     | Yes |
| Memory unit | used\_space\_unit | int | isys\_memory\_unit\_\_id | Yes |
| Description | description | text\_area |     | Yes |

### Device (C\_\_CMDB\_\_SUBCAT\_\_STORAGE\_\_DEVICE)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Type | type | int | isys\_stor\_type\_\_id | Yes |
| Title | title | text |     | Yes |
| Manufacturer | manufacturer | int | isys\_stor\_manufacturer\_\_id | Yes |
| Model | model | int | isys\_stor\_model\_\_id | Yes |
| Memory unit | unit | int | isys\_memory\_unit\_\_id | Yes |
| Capacity | capacity | double |     | Yes |
| Hotspare | hotspare | int |     | Yes |
| Connection | connected | int | isys\_stor\_con\_type\_\_id | Yes |
| Controller | controller | int | isys\_catg\_controller\_list\_\_id | Yes |
| Hardware RAID group | raid\_group | int | isys\_catg\_raid\_list\_\_id | Yes |
| Serial number | serial | text |     | Yes |
| Description | description | text\_area |     | Yes |
| LTO Type | lto\_type | int | isys\_stor\_lto\_type\_\_id | Yes |
| FC Address | fc\_address | text |     | Yes |
| Firmware | firmware | text |     | Yes |

### FC port (C\_\_CATG\_\_CONTROLLER\_FC\_PORT)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Title | title | text |     | Yes |
| Type | type | int | isys\_fc\_port\_type\_\_id | Yes |
| Connected controller | connected\_controller | int | isys\_catg\_hba\_list\_\_id | Yes |
| Assigned Input/Output | connector\_sibling | int |     | Yes |
| Medium | medium | int | isys\_fc\_port\_medium\_\_id | Yes |
| Speed | speed | int |     | Yes |
| Speed unit | speed\_unit | int | isys\_port\_speed\_\_id | Yes |
| Node WWN | wwn | text |     | Yes |
| Port WW(P)N | wwpn | text |     | Yes |
| SAN zone and connection type | san\_zones | int |     | Yes |
| Target object | target | int |     | Yes |
| Connection | connector | int |     | Yes |
| Connection | assigned\_connector | int |     | Yes |
| Description | description | text\_area |     | Yes |
| Relation direction | relation\_direction | int |     | Yes |

### Host address (C\_\_CATG\_\_IP)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Use primary hostaddress | primary\_hostaddress | text | isys\_cats\_net\_ip\_addresses\_list\_\_id | Yes |
| Primary hostname | primary\_hostname | text |     | Yes |
| Type | net\_type | int | isys\_net\_type\_\_id | Yes |
| Primary | primary | int |     | Yes |
| Active | active | int |     | Yes |
| Net | net | int |     | Yes |
| Net zone | zone | int |     | Yes |
| Address allocation IPv4 | ipv4\_assignment | int | isys\_ip\_assignment\_\_id | Yes |
| IPv4 address | ipv4\_address | text | isys\_cats\_net\_ip\_addresses\_list\_\_id | Yes |
| Address allocation IPv6 | ipv6\_assignment | int | isys\_ipv6\_assignment\_\_id | Yes |
| IPv6 scope | ipv6\_scope | int | isys\_ipv6\_scope\_\_id | Yes |
| IPv6 address | ipv6\_address | text | isys\_cats\_net\_ip\_addresses\_list\_\_id | Yes |
| Host address | hostaddress | text | isys\_cats\_net\_ip\_addresses\_list\_\_id | Yes |
| Hostname | hostname | text |     | Yes |
| Domain | domain | text |     | Yes |
| DNS Server | dns\_server | int | isys\_catg\_ip\_list\_\_id | Yes |
| DNS Server address | dns\_server\_address | text | isys\_catg\_ip\_list\_\_id | Yes |
| Search domain | search\_domain | int | isys\_catg\_ip\_list\_\_id | Yes |
| Default gateway for the net | use\_standard\_gateway | int |     | Yes |
| Assigned port | assigned\_port | int | isys\_catg\_port\_list\_\_id | Yes |
| Assigned port | assigned\_logical\_port | int | isys\_catg\_log\_port\_list\_\_id | Yes |
| Host addresses | all\_ips | text |     | Yes |
| Hostname (FQDN) | primary\_fqdn | text |     | Yes |
| Aliases | aliases | text |     | Yes |
| Description | description | text\_area |     | Yes |

### Version (C\_\_CATG\_\_VERSION)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Version number | title | text |     | Yes |
| Service pack | servicepack | text |     | Yes |
| Kernel | kernel | text |     | Yes |
| Patchlevel | patchlevel | text |     | Yes |
| Description | description | text\_area |     | Yes |

### Connectors (C\_\_CATG\_\_CONNECTOR)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Title | title | text |     | Yes |
| In-/Output | type | int |     | Yes |
| Wiring system | wiring\_system | int | isys\_connection\_\_id | Yes |
| Interface | interface | int | isys\_interface\_\_id | Yes |
| Color / wave lengths | fiber\_wave\_lengths | int | isys\_catg\_connector\_list\_\_id | Yes |
| Connection type | connection\_type | int | isys\_connection\_type\_\_id | Yes |
| Assigned to connector | assigned\_connector | int |     | Yes |
| Assigned category type | assigned\_category | text |     | Yes |
| Cable | cable\_connection | int |     | Yes |
| Used fiber/lead (RX) | used\_fiber\_lead\_rx | int |     | Yes |
| Used fiber/lead (TX) | used\_fiber\_lead\_tx | int |     | Yes |
| Assigned Input/Output | connector\_sibling | int |     | Yes |
| Description | description | text\_area |     | Yes |
| Relation direction | relation\_direction | int |     | Yes |

### Invoice (C\_\_CATG\_\_INVOICE)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Title | denotation | text |     | Yes |
| Invoice Date | date | date |     | Yes |
| Amount | amount | double |     | Yes |
| Edited at | edited | date |     | Yes |
| Dispensing Tax Accounting | financial\_accounting\_delivery | date |     | Yes |
| Charged | charged | int |     | Yes |
| Description | description | text\_area |     | Yes |

### Power supplier (C\_\_CATG\_\_POWER\_SUPPLIER)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Title | title | text |     | Yes |
| Volt | volt | text |     | Yes |
| Watt | watt | text |     | Yes |
| Ampere | ampere | text |     | Yes |
| Target object | assigned\_connector | int |     | Yes |
| Assigned to connector | connector | int |     | Yes |
| Assigned Input/Output | connector\_sibling | int |     | Yes |
| Assigned category type | assigned\_category | text |     | Yes |
| Description | description | text\_area |     | Yes |

### RAID-Array(C\_\_CATG\_\_RAID)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Type | raid\_type | int | isys\_raid\_type\_\_id | Yes |
| Title | title | text |     | Yes |
| RAID Level | raid\_level | int | isys\_stor\_raid\_level\_\_id | Yes |
| Controller | controller | int | isys\_catg\_controller\_list\_\_id | Yes |
| Connected devices | storages | int |     | Yes |
| Total capacity | full\_capacity | text |     | Yes |
| Description | description | text\_area |     | Yes |

### Logical devices (LDEV Server) (C\_\_CATG\_\_LDEV\_SERVER)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Title | title | text |     | Yes |
| LUN | lun | text |     | Yes |
| Segment size (kB) | segment\_size | float |     | Yes |
| Memory-unit | unit | int | isys\_memory\_unit\_\_id | Yes |
| Capacity | capacity | double |     | Yes |
| Attached devices | connected\_devices | int | isys\_catg\_ldevclient\_list\_\_isys\_catg\_sanpool\_list\_\_id | Yes |
| Paths | paths | text |     | Yes |
| Multipath technology | multipath | int | isys\_ldev\_multipath\_\_id | Yes |
| Tier class | tierclass | int | isys\_tierclass\_\_id | Yes |
| Logical devices (Client) | ldev\_clients | int | isys\_catg\_ldevclient\_list\_\_isys\_catg\_sanpool\_list\_\_id | Yes |
| Description | description | text\_area |     | Yes |

### Logical devices (Client) (C\_\_CATG\_\_LDEV\_CLIENT)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Title | title | text |     | Yes |
| Path | paths | int |     | Yes |
| Logical devices (LDEV Server) | assigned\_ldevserver | int | isys\_catg\_sanpool\_list\_\_id | Yes |
| Primary path | primary\_path | int |     | Yes |
| Multipath technology | multipath | int | isys\_ldev\_multipath\_\_id | Yes |
| Description | description | text\_area |     | Yes |

### Host Bus Adapter (HBA) (C\_\_CATG\_\_HBA)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Title | title | text |     | Yes |
| Type | type | int | isys\_hba\_type\_\_id | Yes |
| Manufacturer | manufacturer | int | isys\_controller\_manufacturer\_\_id | Yes |
| Model | model | int | isys\_controller\_model\_\_id | Yes |
| Description | description | text\_area |     | Yes |

### Cluster (C\_\_CATG\_\_CLUSTER\_ROOT)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Quorum | quorum | int |     | Yes |
| Administration service | administration\_service | text |     | Yes |
| Cluster Members | cluster\_members | text |     | Yes |
| Cluster service assignment | cluster\_service | text |     | Yes |
| Description | description | text\_area |     | Yes |

### Cluster (C\_\_CATG\_\_CLUSTER)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Quorum | quorum | int |     | Yes |
| Administration service | administration\_service | text |     | Yes |
| Cluster Members | cluster\_members | text |     | Yes |
| Cluster service assignment | cluster\_service | text |     | Yes |
| Description | description | text\_area |     | Yes |

### Shares (C\_\_CATG\_\_SHARES)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Share name | title | text |     | Yes |
| UNC-path | unc\_path | text |     | Yes |
| Volume | volume | int | isys\_catg\_drive\_list\_\_id | Yes |
| Local path | path | text |     | Yes |
| Description | description | text\_area |     | Yes |

### Cluster service assignment (C\_\_CATG\_\_CLUSTER\_SERVICE)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Type | type | int | isys\_cluster\_type\_\_id | Yes |
| Cluster services | cluster\_service | int | isys\_connection\_\_id | Yes |
| Host addresses | hostaddresses | int | isys\_catg\_cluster\_service\_list\_\_id | Yes |
| Volumes | drives | int | isys\_catg\_cluster\_service\_list\_\_id | Yes |
| Shares | shares | int |     | Yes |
| Runs on | runs\_on | int |     | Yes |
| Default server | default\_server | int |     | Yes |
| Database schema | assigned\_database\_schema | int | isys\_cats\_database\_access\_list\_\_id | Yes |
| Description | description | text\_area |     | Yes |

### Cluster Members(C\_\_CATG\_\_CLUSTER\_MEMBERS)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Cluster Member | member | int | isys\_connection\_\_id | Yes |

### Cluster memberships (C\_\_CATG\_\_CLUSTER\_MEMBERSHIPS)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Cluster | connected\_object | int | isys\_connection\_\_isys\_obj\_\_id | Yes |

### Computing resources (C\_\_CATG\_\_COMPUTING\_RESOURCES)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| RAM | ram | float |     | Yes |
| Memory-unit | ram\_unit | int | isys\_memory\_unit\_\_id | Yes |
| CPU frequency | cpu | float |     | Yes |
| CPU frequency unit | cpu\_unit | int | isys\_frequency\_unit\_\_id | Yes |
| Disc space | disc\_space | float |     | Yes |
| Disc space unit | disc\_space\_unit | int | isys\_memory\_unit\_\_id | Yes |
| Network bandwidth | network\_bandwidth | float |     | Yes |
| Network bandwidth unit | network\_bandwidth\_unit | int | isys\_port\_speed\_\_id | Yes |
| Description | description | text\_area |     | Yes |

### SNMP (C\_\_CATG\_\_SNMP)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| SNMP Community | title | int | isys\_snmp\_community\_\_id | Yes |
| Description | description | text\_area |     | Yes |

### Virtual host (C\_\_CATG\_\_VIRTUAL\_HOST\_ROOT)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Virtual host | virtual\_host | int |     | Yes |
| License Server | license\_server | int | isys\_connection\_\_id | Yes |
| Administration service | administration\_service | int | isys\_connection\_\_id | Yes |
| Description | description | text\_area |     | Yes |

### Virtual host (C\_\_CATG\_\_VIRTUAL\_HOST)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Virtual host | virtual\_host | int |     | Yes |
| License Server | license\_server | int | isys\_connection\_\_id | Yes |
| Administration service | administration\_service | int | isys\_connection\_\_id | Yes |
| Description | description | text\_area |     | Yes |

### Guest systems (C\_\_CATG\_\_GUEST\_SYSTEMS)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Guest systems | connected\_object | int |     | Yes |
| Hostname | hostname | text |     | Yes |
| Runs on | runs\_on | text |     | Yes |

### Virtual machine (C\_\_CATG\_\_VIRTUAL\_MACHINE\_\_ROOT)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Virtuelle Maschine | virtual\_machine | int |     | Yes |
| Läuft auf Host | hosts | int | isys\_connection\_\_id | Yes |
| Virtualisierungs-System | system | int | isys\_vm\_type\_\_id | Yes |
| Konfigurations Datei | config\_file | text |     | Yes |
| Host im Cluster | primary | int |     | Yes |
| Description | description | text\_area |     | Yes |

### Virtual Switches (C\_\_CATG\_\_VIRTUAL\_SWITCH)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Title | title | text |     | Yes |
| Ports | ports | int | isys\_virtual\_switch\_2\_port\_\_isys\_catg\_virtual\_switch\_list\_\_id | Yes |
| Port groups | portgroup | int | isys\_virtual\_port\_group\_\_isys\_catg\_virtual\_switch\_list\_\_id | Yes |
| Service Console Ports | serviceconsoleports | int | isys\_service\_console\_port\_\_isys\_catg\_virtual\_switch\_list\_\_id | Yes |
| VMKernel Ports | vmkernelports | int | isys\_vmkernel\_port\_\_isys\_catg\_virtual\_switch\_list\_\_id | Yes |
| Description | description | text\_area |     | Yes |

### Virtual devices (C\_\_CATG\_\_VIRTUAL\_DEVICE)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Device type | host\_stor\_device | int | isys\_catg\_stor\_list\_\_id | Yes |
| Host LDEV client | host\_ldev\_client | int | isys\_catg\_ldevclient\_list\_\_id | Yes |
| Assigned storage device (host) | host\_drive | int | isys\_catg\_drive\_list\_\_id | Yes |
| Corresponding host port | host\_port | int | isys\_catg\_port\_list\_\_id | Yes |
| Host interface | host\_interface | int | isys\_catg\_ui\_list\_\_id | Yes |
| Local storage device | local\_stor\_device | int | isys\_catg\_stor\_list\_\_id | Yes |
| Local port | local\_port | int | isys\_catg\_port\_list\_\_id | Yes |
| Host resource | local\_interface | int | isys\_catg\_ui\_list\_\_id | Yes |
| Storage type | storage\_type | int | isys\_virtual\_storage\_type\_\_id | Yes |
| Network type | network\_type | int | isys\_virtual\_network\_type\_\_id | Yes |
| Switch Port Group | switch\_port\_group | int |     | Yes |
| Cluster storage | cluster\_storage | text |     | Yes |
| Cluster interface | cluster\_interface | text |     | Yes |
| Local storage device | disk\_image\_location | text |     | Yes |
| Device type | device\_type | text |     | Yes |
| Description | description | text\_area |     | Yes |
| Type | virtual\_network\_type | text |     | Yes |

### Backup (assigned Objects) (C\_\_CATG\_\_BACKUP\_\_ASSIGNED\_OBJECTS)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Title | title | text |     | Yes |
| Backups | backup | int |     | Yes |
| Backup type | backup\_type | int | isys\_backup\_type\_\_id | Yes |
| Cycle | cycle | int | isys\_backup\_cycle\_\_id | Yes |
| Path to save | path\_to\_save | text |     | Yes |
| Description | description | text\_area |     | Yes |

### Group memberships (C\_\_CATG\_\_GROUP\_MEMBERSHIPS)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Group | connected\_object | int |     | Yes |
| Description | description | text\_area |     | Yes |

### Service components (C\_\_CATG\_\_IT\_SERVICE\_COMPONENTS)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Assigned object | connected\_object | int | isys\_connection\_\_id | Yes |
| Object type | objtype | int |     | Yes |

### Service Logbook (C\_\_CATG\_\_ITS\_LOGBOOK)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Date | date | date\_time |     | Yes |
| Object | object | int |     | Yes |
| Event | event | int | isys\_logbook\_event\_\_id | Yes |
| Source | source | int |     | Yes |
| User | user | int |     | Yes |
| Object type | object\_type | text |     | Yes |
| Category | category | text |     | Yes |
| Alarm level | alert\_level | text | isys\_logbook\_level\_\_id | Yes |
| User | user\_name\_static | text |     | Yes |
| Event | event\_static | text |     | Yes |
| Comment | comment | text |     | Yes |
| Changes | changes | text |     | Yes |
| Description | description | text\_area |     | Yes |

### Service assignment (C\_\_CATG\_\_IT\_SERVICE)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Service | connected\_object | int |     | Yes |
| SYSID | sysid | text |     | Yes |

### Relationship (C\_\_CATG\_\_RELATION)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Object 1 | object1 | int | isys\_obj\_\_id | No  |
| Object 2 | object2 | int | isys\_obj\_\_id | No  |
| Relation type | relation\_type | int | isys\_relation\_type\_\_id | No  |
| Weighting | weighting | int | isys\_weighting\_\_id | No  |
| Service | itservice | int | isys\_obj\_\_id | Yes |
| Description | description | text\_area |     | Yes |

### Service Relation (C\_\_CATG\_\_IT\_SERVICE\_RELATIONS)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Object 1 | object1 | int | isys\_obj\_\_id | No  |
| Object 2 | object2 | int | isys\_obj\_\_id | No  |
| Relation type | relation\_type | int | isys\_relation\_type\_\_id | No  |
| Weighting | weighting | int | isys\_weighting\_\_id | No  |
| Service | itservice | int | isys\_obj\_\_id | Yes |
| Description | description | text\_area |     | Yes |

### Database assignment (C\_\_CATG\_\_DATABASE\_ASSIGNMENT)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Target schema | database\_assignment | int |     | No  |
| Software runs on | runs\_on | int |     | No  |
| Description | description | text\_area |     | Yes |

### Service Type (C\_\_CATG\_\_ITS\_TYPE)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Type | its\_type | int | isys\_its\_type\_\_id | Yes |
| Description | description | text\_area |     | Yes |

### Passwords (C\_\_CATG\_\_PASSWD)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Title | title | text |     | Yes |
| Username | username | text |     | Yes |
| Password | password | text |     | Yes |
| Description | description | text\_area |     | Yes |

### SOA-Stacks (C\_\_CATG\_\_SOA\_STACKS)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Title | title | text |     | Yes |
| SOA-Stacks | soa\_stack\_object | int |     | Yes |
| SOA-Component | soa\_stack\_components | int |     | Yes |
| Service | soa\_stack\_it\_services | int |     | Yes |
| Description | description | text\_area |     | Yes |

### Status-Planning (C\_\_CATG\_\_PLANNING)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| CMDB status | cmdb\_status | int | isys\_cmdb\_status\_\_id | Yes |
| Validity period from | start | date |     | Yes |
| Validity period to | end | date |     | Yes |
| Description | description | text\_area |     | Yes |

### Assigned cards (C\_\_CATG\_\_ASSIGNED\_CARDS)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Assigned cards | connected\_obj | int |     | Yes |

### SIM card (C\_\_CATG\_\_SIM\_CARD)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Type | type | int | isys\_cp\_contract\_type\_\_id | Yes |
| Assigned mobile phone | assigned\_mobile | int |     | Yes |
| Network provider | network\_provider | int | isys\_network\_provider\_\_id | Yes |
| Telephone rate | telephone\_rate | int | isys\_telephone\_rate\_\_id | Yes |
| Start Date | start | date |     | Yes |
| End Date | end | date |     | Yes |
| Date for Notification | threshold\_date | date |     | Yes |
| Card Number | card\_no | text |     | Yes |
| Phone Number | phone\_no | text |     | Yes |
| Client Number | client\_no | text |     | Yes |
| Pin | pin | text |     | Yes |
| Pin 2 | pin2 | text |     | Yes |
| PUK | puk | text |     | Yes |
| PUK2 | puk2 | text |     | Yes |
| Serial number | serial | text |     | Yes |
| Twin Card | twincard | int |     | Yes |
| Card Number (Twin Card) | tc\_card\_no | text |     | Yes |
| Phone Number (Twin Card) | tc\_phone\_no | text |     | Yes |
| Pin (Twin Card) | tc\_pin | text |     | Yes |
| Pin 2 (Twin Card) | tc\_pin2 | text |     | Yes |
| PUK (Twin Card) | tc\_puk | text |     | Yes |
| PUK2 (Twin Card) | tc\_puk2 | text |     | Yes |
| Serial number (Twin Card) | tc\_serial\_no | text |     | Yes |
| Description (Twin Card) (Twin Card) | optional\_info | text\_area |     | Yes |
| Description | description | text\_area |     | Yes |

### TSI service (C\_\_CATG\_\_TSI\_SERVICE)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| TSI service ID | tsi\_service\_id | text |     | Yes |
| Description | description | text\_area |     | Yes |

### Audit (C\_\_CATG\_\_AUDIT)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Title | title | text |     | Yes |
| Type | type | int | isys\_catg\_audit\_type\_\_id | Yes |
| Commission | commission | int | isys\_contact\_\_id | Yes |
| Responsible | responsible | int | isys\_contact\_\_id | Yes |
| Involved | involved | int | isys\_contact\_\_id | Yes |
| Manufacturer's period | period\_manufacturer | date |     | Yes |
| Operator's period | period\_operator | date |     | Yes |
| Applied | apply | date |     | Yes |
| Result | result | text\_area |     | Yes |
| Faults | fault | text\_area |     | Yes |
| Incidents | incident | text\_area |     | Yes |
| Description | description | text\_area |     | Yes |

### Logical location (C\_\_CATG\_\_LOGICAL\_UNIT)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Parent object | parent | int |     | Yes |
| Description | description | text\_area |     | Yes |

### Workplace components (C\_\_CATG\_\_ASSIGNED\_LOGICAL\_UNIT)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Object | assigned\_object | int | isys\_obj\_\_id | Yes |

### Assigned workstation (C\_\_CATG\_\_ASSIGNED\_WORKSTATION)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Parent object | parent | int |     | Yes |
| Description | description | text\_area |     | Yes |

### Assigned Workplaces (C\_\_CATG\_\_PERSON\_ASSIGNED\_WORKSTATION)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Assigned Workplaces | assigned\_workstations | int |     | Yes |
| Description | description | text\_area |     | Yes |

### Contract assignment (C\_\_CATG\_\_CONTRACT\_ASSIGNMENT)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Assigned contract | connected\_contract | int | isys\_connection\_\_id | Yes |
| Contract begin | contract\_start | date |     | Yes |
| Contract end | contract\_end | date |     | Yes |
| Reaction rate | reaction\_rate | int | isys\_contract\_reaction\_rate\_\_id | Yes |
| Description | description | text\_area |     | Yes |

### Stacking (C\_\_CATG\_\_STACKING)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Chassis | assigned\_object | int | isys\_connection\_\_id | Yes |

### E-Mail addresses (C\_\_CATG\_\_MAIL\_ADDRESSES)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| E-mail address | title | text |     | Yes |
| Primary email address | primary\_mail | text |     | Yes |
| Primary | primary | int |     | Yes |
| Description | description | text\_area |     | Yes |

### CUCM VoIP telephone (C\_\_CATG\_\_VOIP\_PHONE)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Device protocol | device\_protocol | text |     | Yes |
| Description | description2 | text |     | Yes |
| Device pool | device\_pool | text |     | Yes |
| Common device configuration | common\_configuration | text |     | Yes |
| Button template | button\_template | int | isys\_voip\_phone\_button\_template\_\_id | Yes |
| Softkey template | softkey\_template | int | isys\_voip\_phone\_softkey\_template\_\_id | Yes |
| Common device profile | common\_profile | text |     | Yes |
| Calling search space | calling\_search\_space | text |     | Yes |
| AAR calling search space | aar\_calling\_search\_space | text |     | Yes |
| Media resource group list | media\_resource\_group\_list | text |     | Yes |
| User MOH audio source | user\_hold\_moh\_audio\_source | text |     | Yes |
| Network MOH Audioquelle | network\_hold\_moh\_audio\_source | text |     | Yes |
| Location | location | text |     | Yes |
| AAR group | aar\_group | text |     | Yes |
| User locale | user\_locale | text |     | Yes |
| Network locale | network\_locale | text |     | Yes |
| Built in bridge | built\_in\_bridge | text |     | Yes |
| Privacy | privacy | text |     | Yes |
| Device Mobility Mode | device\_mobility\_mode | text |     | Yes |
| Owner user ID | owner\_user\_id | text |     | Yes |
| Phone suite | phone\_suite | text |     | Yes |
| Service provisioning | services\_provisioning | text |     | Yes |
| Load name | load\_name | text |     | Yes |
| Description | description | text\_area |     | Yes |

### CUCM VoIP line (C\_\_CATG\_\_VOIP\_PHONE\_LINE)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Directory number | directory\_number | text |     | Yes |
| Route partition | route\_partition | text |     | Yes |
| Description | description2 | text |     | Yes |
| Alerting name | alerting\_name | text |     | Yes |
| ASCII Alerting name | ascii\_alerting\_name | text |     | Yes |
| Allow Control of Device from CTI | allow\_cti\_control | int |     | Yes |
| Associated devices | associated\_devices | int |     | Yes |
| Voice mail profile | voice\_mail\_profile | text |     | Yes |
| Calling search space | calling\_search\_space | text |     | Yes |
| Presence group | presence\_group | text |     | Yes |
| User hold MOH audio source | user\_hold\_moh\_audio\_source | text |     | Yes |
| Network hold MOH audio source | network\_hold\_moh\_audio\_source | text |     | Yes |
| Auto answer | auto\_answer | text |     | Yes |
| Call forward all | call\_forward\_all | text |     | Yes |
| Secondary Calling Search Space for Forward All | sec\_calling\_search\_space | text |     | Yes |
| Forward busy internal | forward\_busy\_internal | text |     | Yes |
| Forward busy external | forward\_busy\_external | text |     | Yes |
| Forward no answer internal | forward\_no\_answer\_internal | text |     | Yes |
| Forward no answer external | forward\_no\_answer\_external | text |     | Yes |
| Forward no coverage internal | forward\_no\_coverage\_internal | text |     | Yes |
| Forward no coverage external | forward\_no\_coverage\_external | text |     | Yes |
| Forward on CTI failure | forward\_on\_cti\_fail | text |     | Yes |
| Forward unregistered internal | forward\_unregistered\_internal | text |     | Yes |
| Forward unregistered external | forward\_unregistered\_external | text |     | Yes |
| No answer ring duration | no\_answer\_ring\_duration | text |     | Yes |
| Call pickup group | call\_pickup\_group | text |     | Yes |
| Display | display | text |     | Yes |
| ASCII display | ascii\_display | text |     | Yes |
| Line text label | line\_text\_label | text |     | Yes |
| ASCII Line text label | ascii\_line\_text\_label | text |     | Yes |
| Visual message waiting indicator policy | visual\_message\_indicator | text |     | Yes |
| Audible message waiting indicator policy | audible\_message\_indicator | text |     | Yes |
| Ring settings (Phone idle) | ring\_settings\_idle | text |     | Yes |
| Ring settings (Phone active) | ring\_settings\_active | text |     | Yes |
| Call pickup group audio alert setting (phone idle) | call\_pickup\_group\_idle | text |     | Yes |
| Call pickup group audio alert setting (phone active) | call\_pickup\_group\_active | text |     | Yes |
| Recording option | recording\_option | text |     | Yes |
| Recording profile | recording\_profile | text |     | Yes |
| Monitoring calling search space | monitoring\_css | text |     | Yes |
| Log missed calls | log\_missed\_calls | int |     | Yes |
| External phone number mask | external\_phone\_number\_mask | text |     | Yes |
| Maximum number of calls | max\_number\_of\_calls | text |     | Yes |
| "Busy" trigger | busy\_trigger | text |     | Yes |
| Caller name | caller\_name | int |     | Yes |
| Caller number | caller\_number | int |     | Yes |
| Redirected number | redirected\_number | int |     | Yes |
| Dialed number | dialed\_number | int |     | Yes |
| Description | description | text\_area |     | Yes |

### Telephone/Fax (C\_\_CATG\_\_TELEPHONE\_FAX)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Type | type | int | isys\_telephone\_fax\_type\_\_id | Yes |
| Telephone number | telephone\_number | text |     | Yes |
| Fax number | fax\_number | text |     | Yes |
| Extension | extension | text |     | Yes |
| Pincode | pincode | text |     | Yes |
| IMEI number | imei | text |     | Yes |
| Description | description | text\_area |     | Yes |

### Smart Card Certificate (C\_\_CATG\_\_SMARTCARD\_CERTIFICATE)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Card number | cardnumber | text |     | Yes |
| Barring password | barring\_password | text |     | Yes |
| PIN no. | pin\_nr | text |     | Yes |
| Reference | reference | text |     | Yes |
| Expires on | expires\_on | date |     | Yes |
| Description | description | text\_area |     | Yes |

### Share Access (C\_\_CATG\_\_SHARE\_ACCESS)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Selected object | assigned\_objects | int | isys\_connection\_\_id | Yes |
| Mountpoint | mountpoint | text |     | Yes |
| Share name | shares | int | isys\_catg\_shares\_list\_\_id | Yes |
| Description | description | text\_area |     | Yes |

### Certificate (C\_\_CATG\_\_CERTIFICATE)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Type | type | int | isys\_certificate\_type\_\_id | Yes |
| Creation date | create\_date | date |     | Yes |
| Expiration Date | expire\_date | date |     | Yes |
| Common Name | common\_name | text |     | Yes |
| Description | description | text\_area |     | Yes |

### SLA (C\_\_CATG\_\_SLA)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Service-ID | service\_id | text |     | Yes |
| SLA service level | service\_level | int |     | Yes |
| SLA service level (Dialog) | service\_level\_dialog | int | isys\_sla\_service\_level\_\_id | Yes |
| Weekday | days | int |     | Yes |
| Monday | monday\_time | text |     | Yes |
| Tuesday | tuesday\_time | text |     | Yes |
| Wednesday | wednesday\_time | text |     | Yes |
| Thursday | thursday\_time | text |     | Yes |
| Friday | friday\_time | text |     | Yes |
| Saturday | saturday\_time | text |     | Yes |
| Sunday | sunday\_time | text |     | Yes |
| Reaction time | reaction\_time | int |     | Yes |
| Reaktion time unit | reaction\_time\_unit | int | isys\_unit\_of\_time\_\_id | Yes |
| Recovery time | recovery\_time | int |     | Yes |
| Recovery time unit | recovery\_time\_unit | int | isys\_unit\_of\_time\_\_id | Yes |
| Calendar | calendar | int | isys\_calendar\_\_id | Yes |
| Description | description | text\_area |     | Yes |

### LDAP (C\_\_CATG\_\_LDAP\_DN)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Distinguished name (DN) | title | text |     | Yes |
| Description | description | text\_area |     | Yes |

### Host definition (C\_\_CATG\_\_NAGIOS)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Export this configuration | is\_exportable | int |     | Yes |
| Export configuration | export\_host | int | isys\_monitoring\_export\_config\_\_id | Yes |
| Templates | host\_template | text |     | Yes |
| host\_name | host\_name | text |     | Yes |
| host\_name\_selection | host\_name\_selection | int |     | Yes |
| Hostname | name1 | text |     | Yes |
| Alias | alias | text |     | Yes |
| IP Address | address | int | isys\_catg\_ip\_list\_\_id | Yes |
| address\_selection | address\_selection | int |     | Yes |
| Choose further objects as parent | parents | text |     | Yes |
| Use the following objects as parents? | is\_parent | int |     | Yes |
| check\_command | check\_command | int | isys\_nagios\_commands\_\_id | Yes |
| check\_command+ | check\_command\_plus | int | isys\_nagios\_commands\_plus\_\_id | Yes |
| check\_command\_parameters | check\_command\_parameters | text |     | Yes |
| check\_interval | check\_interval | int |     | Yes |
| retry\_interval | retry\_interval | int |     | Yes |
| max\_check\_attempts | max\_check\_attempts | int |     | Yes |
| check\_period | check\_period | int | isys\_nagios\_timeperiods\_\_id | Yes |
| check\_period + | check\_period\_plus | int | isys\_nagios\_timeperiods\_plus\_\_id | Yes |
| active\_checks\_enabled | active\_checks\_enabled | int |     | Yes |
| passive\_checks\_enabled | passive\_checks\_enabled | int |     | Yes |
| notifications\_enabled | notifications\_enabled | int |     | Yes |
| notification\_options | host\_notification\_options | text |     | Yes |
| notification\_interval | notification\_interval | int |     | Yes |
| notification\_period | notification\_period | int | isys\_nagios\_timeperiods\_\_id | Yes |
| notification\_period + | notification\_period\_plus | int | isys\_nagios\_timeperiods\_plus\_\_id | Yes |
| initial\_state | initial\_state | text |     | Yes |
| obsess\_over\_host | obsess\_over\_host | int |     | Yes |
| check\_freshness | check\_freshness | int |     | Yes |
| freshness\_threshold | freshness\_threshold | int |     | Yes |
| flap\_detection\_enabled | flap\_detection\_enabled | int |     | Yes |
| flap\_detection\_options | flap\_detection\_options | text |     | Yes |
| low\_flap\_threshold | low\_flap\_threshold | int |     | Yes |
| high\_flap\_threshold | high\_flap\_threshold | int |     | Yes |
| event\_handler\_enabled | event\_handler\_enabled | int |     | Yes |
| event\_handler | event\_handler | int |     | Yes |
| event\_handler + | event\_handler\_plus | int | isys\_nagios\_commands\_plus\_\_id | Yes |
| event\_handler\_parameters | event\_handler\_parameters | text |     | Yes |
| process\_perf\_data | process\_perf\_data | int |     | Yes |
| retain\_status\_information | retain\_status\_information | int |     | Yes |
| retain\_nonstatus\_information | retain\_nonstatus\_information | int |     | Yes |
| first\_notification\_delay | first\_notification\_delay | int |     | Yes |
| stalking\_options | stalking\_options | text |     | Yes |
| escalations | escalations | int |     | Yes |
| action\_url | action\_url | text |     | Yes |
| icon\_image | icon\_image | text |     | Yes |
| icon\_image\_alt | icon\_image\_alt | text |     | Yes |
| vrml\_image | vrml\_image | text |     | Yes |
| statusmap\_image | statusmap\_image | text |     | Yes |
| 2d\_coords | twod\_coords | text |     | Yes |
| 3d\_coords | threed\_coords | text |     | Yes |
| notes | notes | text |     | Yes |
| notes\_url | notes\_url | text |     | Yes |
| display\_name | display\_name | text |     | Yes |
| display\_name\_selection | display\_name\_selection | int |     | Yes |
| Title | name2 | text |     | Yes |
| custom\_object\_vars | custom\_object\_vars | text\_area |     | Yes |
| Description | description | text\_area |     | Yes |

### Nagios group (C\_\_CATG\_\_NAGIOS\_GROUP)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Export this configuration | is\_exportable | int |     | Yes |
| Group type | type | int |     | Yes |
| display\_name | name | text |     | Yes |
| display\_name\_selection | name\_selection | int |     | Yes |
| Alias | alias | text |     | Yes |
| Notes | notes | text |     | Yes |
| Notes URL | notes\_url | text |     | Yes |
| Action URL | action\_url | text |     | Yes |
| Description | description | text\_area |     | Yes |

### Nagios (service) (C\_\_CATG\_\_NAGIOS\_SERVICE\_FOLDER)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Active | is\_active | int |     | Yes |
| service\_description | service\_description | text |     | Yes |
| Service-template | template | text |     | Yes |
| check\_command | check\_command | int | isys\_nagios\_commands\_\_id | Yes |
| check\_command\_plus | check\_command\_plus | int | isys\_nagios\_commands\_plus\_\_id | Yes |
| check\_command\_parameters | check\_command\_parameters | text |     | Yes |
| max\_check\_attempts | max\_check\_attempts | int |     | Yes |
| check\_interval | check\_interval | int |     | Yes |
| retry\_interval | retry\_interval | int |     | Yes |
| check\_period | check\_period | int | isys\_nagios\_timeperiods\_\_id | Yes |
| check\_period+ | check\_period\_plus | int | isys\_nagios\_timeperiods\_plus\_\_id | Yes |
| notification\_interval | notification\_interval | int | isys\_catg\_nagios\_service\_def\_list\_\_id | Yes |
| notification\_period | notification\_period | int | isys\_nagios\_timeperiods\_\_id | Yes |
| notification\_period+ | notification\_period\_plus | int | isys\_nagios\_timeperiods\_plus\_\_id | Yes |
| display\_name | display\_name | text |     | Yes |
| display\_name\_selection | display\_name\_selection | int |     | Yes |
| active\_checks\_enabled | active\_checks\_enabled | int |     | Yes |
| passive\_checks\_enabled | passive\_checks\_enabled | int |     | Yes |
| initial\_state | initial\_state | text |     | Yes |
| notifications\_enabled | notifications\_enabled | int |     | Yes |
| notification\_options | service\_notification\_options | text |     | Yes |
| first\_notification\_delay | first\_notification\_delay | int |     | Yes |
| flap\_detection\_enabled | flap\_detection\_enabled | int |     | Yes |
| flap\_detection\_options | flap\_detection\_options | text |     | Yes |
| low\_flap\_threshold | low\_flap\_threshold | int |     | Yes |
| high\_flap\_threshold | high\_flap\_threshold | int |     | Yes |
| is\_volatile | is\_volatile | int |     | Yes |
| obsess\_over\_service | obsess\_over\_service | int |     | Yes |
| check\_freshness | check\_freshness | int |     | Yes |
| freshness\_threshold | freshness\_threshold | int |     | Yes |
| event\_handler\_enabled | event\_handler\_enabled | int |     | Yes |
| event\_handler | event\_handler | int |     | Yes |
| event\_handler+ | event\_handler\_plus | int | isys\_nagios\_commands\_plus\_\_id | Yes |
| process\_perf\_data | process\_perf\_data | int |     | Yes |
| retain\_status\_information | retain\_status\_information | int |     | Yes |
| retain\_nonstatus\_information | retain\_nonstatus\_information | int |     | Yes |
| stalking\_options | stalking\_options | text |     | Yes |
| LC\_\_CATG\_\_NAGIOS\_SERVICE\_DEF\_\_CONFIG\_EXPORT | is\_exportable | int |     | Yes |
| escalations | escalations | int | isys\_catg\_nagios\_service\_def\_list\_\_id | Yes |
| Description | description | text\_area |     | Yes |
| action\_url | action\_url | text |     | Yes |
| icon\_image | icon\_image | text |     | Yes |
| icon\_image\_alt | icon\_image\_alt | text |     | Yes |
| notes | notes | text |     | Yes |
| notes\_url | notes\_url | text |     | Yes |
| custom\_object\_vars | custom\_object\_vars | text\_area |     | Yes |

### Nagios (service TPL) (C\_\_CATG\_\_NAGIOS\_SERVICE\_TPL\_FOLDER)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| check\_command | check\_command | int | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_id | Yes |
| name | name | text |     | Yes |
| check\_command\_plus | check\_command\_plus | int | isys\_nagios\_commands\_plus\_\_id | Yes |
| check\_command\_parameters | check\_command\_parameters | text |     | Yes |
| max\_check\_attempts | max\_check\_attempts | int |     | Yes |
| check\_interval | check\_interval | int |     | Yes |
| retry\_interval | retry\_interval | int |     | Yes |
| check\_period | check\_period | int | isys\_nagios\_timeperiods\_\_id | Yes |
| check\_period+ | check\_period\_plus | int | isys\_nagios\_timeperiods\_plus\_\_id | Yes |
| notification\_interval | notification\_interval | int |     | Yes |
| notification\_period | notification\_period | int | isys\_nagios\_timeperiods\_\_id | Yes |
| notification\_period+ | notification\_period\_plus | int | isys\_nagios\_timeperiods\_plus\_\_id | Yes |
| display\_name | display\_name | text |     | Yes |
| display\_name\_selection | display\_name\_selection | int |     | Yes |
| active\_checks\_enabled | active\_checks\_enabled | int |     | Yes |
| passive\_checks\_enabled | passive\_checks\_enabled | int |     | Yes |
| initial\_state | initial\_state | text |     | Yes |
| notifications\_enabled | notifications\_enabled | int |     | Yes |
| notification\_options | service\_notification\_options | text |     | Yes |
| first\_notification\_delay | first\_notification\_delay | int |     | Yes |
| flap\_detection\_enabled | flap\_detection\_enabled | int |     | Yes |
| flap\_detection\_options | flap\_detection\_options | text |     | Yes |
| low\_flap\_threshold | low\_flap\_threshold | int |     | Yes |
| high\_flap\_threshold | high\_flap\_threshold | int |     | Yes |
| is\_volatile | is\_volatile | int |     | Yes |
| obsess\_over\_service | obsess\_over\_service | int |     | Yes |
| check\_freshness | check\_freshness | int |     | Yes |
| freshness\_threshold | freshness\_threshold | int |     | Yes |
| event\_handler\_enabled | event\_handler\_enabled | int |     | Yes |
| event\_handler | event\_handler | int |     | Yes |
| event\_handler+ | event\_handler\_plus | int | isys\_nagios\_commands\_plus\_\_id | Yes |
| process\_perf\_data | process\_perf\_data | int |     | Yes |
| retain\_status\_information | retain\_status\_information | int |     | Yes |
| retain\_nonstatus\_information | retain\_nonstatus\_information | int |     | Yes |
| stalking\_options | stalking\_options | text |     | Yes |
| LC\_\_CATG\_\_NAGIOS\_SERVICE\_TPL\_DEF\_\_CONFIG\_EXPORT | is\_exportable | int |     | Yes |
| escalations | escalations | int | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_id | Yes |
| Description | description | text\_area |     | Yes |
| action\_url | action\_url | text |     | Yes |
| icon\_image | icon\_image | text |     | Yes |
| icon\_image\_alt | icon\_image\_alt | text |     | Yes |
| notes | notes | text |     | Yes |
| notes\_url | notes\_url | text |     | Yes |
| custom\_object\_vars | custom\_object\_vars | text\_area |     | Yes |

### Service definition (C\_\_CATG\_\_NAGIOS\_SERVICE\_DEF)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Active | is\_active | int |     | Yes |
| service\_description | service\_description | text |     | Yes |
| Service-template | template | text |     | Yes |
| check\_command | check\_command | int | isys\_nagios\_commands\_\_id | Yes |
| check\_command\_plus | check\_command\_plus | int | isys\_nagios\_commands\_plus\_\_id | Yes |
| check\_command\_parameters | check\_command\_parameters | text |     | Yes |
| max\_check\_attempts | max\_check\_attempts | int |     | Yes |
| check\_interval | check\_interval | int |     | Yes |
| retry\_interval | retry\_interval | int |     | Yes |
| check\_period | check\_period | int | isys\_nagios\_timeperiods\_\_id | Yes |
| check\_period+ | check\_period\_plus | int | isys\_nagios\_timeperiods\_plus\_\_id | Yes |
| notification\_interval | notification\_interval | int | isys\_catg\_nagios\_service\_def\_list\_\_id | Yes |
| notification\_period | notification\_period | int | isys\_nagios\_timeperiods\_\_id | Yes |
| notification\_period+ | notification\_period\_plus | int | isys\_nagios\_timeperiods\_plus\_\_id | Yes |
| display\_name | display\_name | text |     | Yes |
| display\_name\_selection | display\_name\_selection | int |     | Yes |
| active\_checks\_enabled | active\_checks\_enabled | int |     | Yes |
| passive\_checks\_enabled | passive\_checks\_enabled | int |     | Yes |
| initial\_state | initial\_state | text |     | Yes |
| notifications\_enabled | notifications\_enabled | int |     | Yes |
| notification\_options | service\_notification\_options | text |     | Yes |
| first\_notification\_delay | first\_notification\_delay | int |     | Yes |
| flap\_detection\_enabled | flap\_detection\_enabled | int |     | Yes |
| flap\_detection\_options | flap\_detection\_options | text |     | Yes |
| low\_flap\_threshold | low\_flap\_threshold | int |     | Yes |
| high\_flap\_threshold | high\_flap\_threshold | int |     | Yes |
| is\_volatile | is\_volatile | int |     | Yes |
| obsess\_over\_service | obsess\_over\_service | int |     | Yes |
| check\_freshness | check\_freshness | int |     | Yes |
| freshness\_threshold | freshness\_threshold | int |     | Yes |
| event\_handler\_enabled | event\_handler\_enabled | int |     | Yes |
| event\_handler | event\_handler | int |     | Yes |
| event\_handler+ | event\_handler\_plus | int | isys\_nagios\_commands\_plus\_\_id | Yes |
| process\_perf\_data | process\_perf\_data | int |     | Yes |
| retain\_status\_information | retain\_status\_information | int |     | Yes |
| retain\_nonstatus\_information | retain\_nonstatus\_information | int |     | Yes |
| stalking\_options | stalking\_options | text |     | Yes |
| LC\_\_CATG\_\_NAGIOS\_SERVICE\_DEF\_\_CONFIG\_EXPORT | is\_exportable | int |     | Yes |
| escalations | escalations | int | isys\_catg\_nagios\_service\_def\_list\_\_id | Yes |
| Description | description | text\_area |     | Yes |
| action\_url | action\_url | text |     | Yes |
| icon\_image | icon\_image | text |     | Yes |
| icon\_image\_alt | icon\_image\_alt | text |     | Yes |
| notes | notes | text |     | Yes |
| notes\_url | notes\_url | text |     | Yes |
| custom\_object\_vars | custom\_object\_vars | text\_area |     | Yes |

### Backwards service assignment (C\_\_CATG\_\_NAGIOS\_REFS\_SERVICES\_BACKWARDS)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Assigned objects | assigned\_objects | int |     | Yes |

### Service-template definition (C\_\_CATG\_\_NAGIOS\_SERVICE\_TPL\_DEF)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| check\_command | check\_command | int | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_id | Yes |
| name | name | text |     | Yes |
| check\_command\_plus | check\_command\_plus | int | isys\_nagios\_commands\_plus\_\_id | Yes |
| check\_command\_parameters | check\_command\_parameters | text |     | Yes |
| max\_check\_attempts | max\_check\_attempts | int |     | Yes |
| check\_interval | check\_interval | int |     | Yes |
| retry\_interval | retry\_interval | int |     | Yes |
| check\_period | check\_period | int | isys\_nagios\_timeperiods\_\_id | Yes |
| check\_period+ | check\_period\_plus | int | isys\_nagios\_timeperiods\_plus\_\_id | Yes |
| notification\_interval | notification\_interval | int |     | Yes |
| notification\_period | notification\_period | int | isys\_nagios\_timeperiods\_\_id | Yes |
| notification\_period+ | notification\_period\_plus | int | isys\_nagios\_timeperiods\_plus\_\_id | Yes |
| display\_name | display\_name | text |     | Yes |
| display\_name\_selection | display\_name\_selection | int |     | Yes |
| active\_checks\_enabled | active\_checks\_enabled | int |     | Yes |
| passive\_checks\_enabled | passive\_checks\_enabled | int |     | Yes |
| initial\_state | initial\_state | text |     | Yes |
| notifications\_enabled | notifications\_enabled | int |     | Yes |
| notification\_options | service\_notification\_options | text |     | Yes |
| first\_notification\_delay | first\_notification\_delay | int |     | Yes |
| flap\_detection\_enabled | flap\_detection\_enabled | int |     | Yes |
| flap\_detection\_options | flap\_detection\_options | text |     | Yes |
| low\_flap\_threshold | low\_flap\_threshold | int |     | Yes |
| high\_flap\_threshold | high\_flap\_threshold | int |     | Yes |
| is\_volatile | is\_volatile | int |     | Yes |
| obsess\_over\_service | obsess\_over\_service | int |     | Yes |
| check\_freshness | check\_freshness | int |     | Yes |
| freshness\_threshold | freshness\_threshold | int |     | Yes |
| event\_handler\_enabled | event\_handler\_enabled | int |     | Yes |
| event\_handler | event\_handler | int |     | Yes |
| event\_handler+ | event\_handler\_plus | int | isys\_nagios\_commands\_plus\_\_id | Yes |
| process\_perf\_data | process\_perf\_data | int |     | Yes |
| retain\_status\_information | retain\_status\_information | int |     | Yes |
| retain\_nonstatus\_information | retain\_nonstatus\_information | int |     | Yes |
| stalking\_options | stalking\_options | text |     | Yes |
| LC\_\_CATG\_\_NAGIOS\_SERVICE\_TPL\_DEF\_\_CONFIG\_EXPORT | is\_exportable | int |     | Yes |
| escalations | escalations | int | isys\_catg\_nagios\_service\_tpl\_def\_list\_\_id | Yes |
| Description | description | text\_area |     | Yes |
| action\_url | action\_url | text |     | Yes |
| icon\_image | icon\_image | text |     | Yes |
| icon\_image\_alt | icon\_image\_alt | text |     | Yes |
| notes | notes | text |     | Yes |
| notes\_url | notes\_url | text |     | Yes |
| custom\_object\_vars | custom\_object\_vars | text\_area |     | Yes |

### Assigned objects (C\_\_CATG\_\_NAGIOS\_SERVICE\_REFS\_TPL\_BACKWARDS)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Assigned objects | assigned\_objects | int |     | Yes |

### Nagios (host TPL) (C\_\_CATG\_\_NAGIOS\_HOST\_TPL\_FOLDER)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Hostname | name | text |     | Yes |
| Nagios Host | nagios\_host | int | isys\_monitoring\_export\_config\_\_id | Yes |
| LC\_\_CATG\_\_NAGIOS\_HOST\_TPL\_DEF\_MAX\_CHECK\_ATTEMPTS | max\_check\_attempts | int |     | Yes |
| LC\_\_CATG\_\_NAGIOS\_HOST\_TPL\_DEF\_CHECK\_PERIOD | check\_period | int | isys\_nagios\_timeperiods\_\_id | Yes |
| check\_period + | check\_period\_plus | int | isys\_nagios\_timeperiods\_plus\_\_id | Yes |
| LC\_\_CATG\_\_NAGIOS\_HOST\_TPL\_DEF\_NOTIFICATION\_INTERVAL | notification\_interval | int |     | Yes |
| notification\_period | notification\_period | int | isys\_nagios\_timeperiods\_\_id | Yes |
| notification\_period + | notification\_period\_plus | int | isys\_nagios\_timeperiods\_plus\_\_id | Yes |
| display\_name | display\_name | text |     | Yes |
| display\_name\_selection | display\_name\_selection | int |     | Yes |
| check\_command | check\_command | int | isys\_nagios\_commands\_\_id | Yes |
| check\_command+ | check\_command\_plus | int | isys\_nagios\_commands\_plus\_\_id | Yes |
| check\_command\_parameters | check\_command\_parameters | text |     | Yes |
| initial\_state | initial\_state | text |     | Yes |
| check\_interval | check\_interval | int |     | Yes |
| retry\_interval | retry\_interval | int |     | Yes |
| active\_checks\_enabled | active\_checks\_enabled | int |     | Yes |
| passive\_checks\_enabled | passive\_checks\_enabled | int |     | Yes |
| obsess\_over\_host | obsess\_over\_host | int |     | Yes |
| check\_freshness | check\_freshness | int |     | Yes |
| freshness\_threshold | freshness\_threshold | int |     | Yes |
| flap\_detection\_enabled | flap\_detection\_enabled | int |     | Yes |
| flap\_detection\_options | flap\_detection\_options | text |     | Yes |
| event\_handler | event\_handler | int |     | Yes |
| event\_handler + | event\_handler\_plus | int | isys\_nagios\_commands\_plus\_\_id | Yes |
| event\_handler\_parameters | event\_handler\_parameters | text |     | Yes |
| event\_handler\_enabled | event\_handler\_enabled | int |     | Yes |
| low\_flap\_threshold | low\_flap\_threshold | int |     | Yes |
| high\_flap\_threshold | high\_flap\_threshold | int |     | Yes |
| process\_perf\_data | process\_perf\_data | int |     | Yes |
| retain\_status\_information | retain\_status\_information | int |     | Yes |
| retain\_nonstatus\_information | retain\_nonstatus\_information | int |     | Yes |
| first\_notification\_delay | first\_notification\_delay | int |     | Yes |
| notification\_options | host\_notification\_options | text |     | Yes |
| notifications\_enabled | notifications\_enabled | int |     | Yes |
| stalking\_options | stalking\_options | text |     | Yes |
| escalations | escalations | int |     | Yes |
| Title | name2 | text |     | Yes |
| Description | description | text\_area |     | Yes |
| action\_url | action\_url | text |     | Yes |
| icon\_image | icon\_image | text |     | Yes |
| icon\_image\_alt | icon\_image\_alt | text |     | Yes |
| vrml\_image | vrml\_image | text |     | Yes |
| statusmap\_image | statusmap\_image | text |     | Yes |
| notes | notes | text |     | Yes |
| notes\_url | notes\_url | text |     | Yes |
| custom\_object\_vars | custom\_object\_vars | text\_area |     | Yes |

### Host-template definition (C\_\_CATG\_\_NAGIOS\_HOST\_TPL\_DEF)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Hostname | name | text |     | Yes |
| Nagios Host | nagios\_host | int | isys\_monitoring\_export\_config\_\_id | Yes |
| LC\_\_CATG\_\_NAGIOS\_HOST\_TPL\_DEF\_MAX\_CHECK\_ATTEMPTS | max\_check\_attempts | int |     | Yes |
| LC\_\_CATG\_\_NAGIOS\_HOST\_TPL\_DEF\_CHECK\_PERIOD | check\_period | int | isys\_nagios\_timeperiods\_\_id | Yes |
| check\_period + | check\_period\_plus | int | isys\_nagios\_timeperiods\_plus\_\_id | Yes |
| LC\_\_CATG\_\_NAGIOS\_HOST\_TPL\_DEF\_NOTIFICATION\_INTERVAL | notification\_interval | int |     | Yes |
| notification\_period | notification\_period | int | isys\_nagios\_timeperiods\_\_id | Yes |
| notification\_period + | notification\_period\_plus | int | isys\_nagios\_timeperiods\_plus\_\_id | Yes |
| display\_name | display\_name | text |     | Yes |
| display\_name\_selection | display\_name\_selection | int |     | Yes |
| check\_command | check\_command | int | isys\_nagios\_commands\_\_id | Yes |
| check\_command+ | check\_command\_plus | int | isys\_nagios\_commands\_plus\_\_id | Yes |
| check\_command\_parameters | check\_command\_parameters | text |     | Yes |
| initial\_state | initial\_state | text |     | Yes |
| check\_interval | check\_interval | int |     | Yes |
| retry\_interval | retry\_interval | int |     | Yes |
| active\_checks\_enabled | active\_checks\_enabled | int |     | Yes |
| passive\_checks\_enabled | passive\_checks\_enabled | int |     | Yes |
| obsess\_over\_host | obsess\_over\_host | int |     | Yes |
| check\_freshness | check\_freshness | int |     | Yes |
| freshness\_threshold | freshness\_threshold | int |     | Yes |
| flap\_detection\_enabled | flap\_detection\_enabled | int |     | Yes |
| flap\_detection\_options | flap\_detection\_options | text |     | Yes |
| event\_handler | event\_handler | int |     | Yes |
| event\_handler + | event\_handler\_plus | int | isys\_nagios\_commands\_plus\_\_id | Yes |
| event\_handler\_parameters | event\_handler\_parameters | text |     | Yes |
| event\_handler\_enabled | event\_handler\_enabled | int |     | Yes |
| low\_flap\_threshold | low\_flap\_threshold | int |     | Yes |
| high\_flap\_threshold | high\_flap\_threshold | int |     | Yes |
| process\_perf\_data | process\_perf\_data | int |     | Yes |
| retain\_status\_information | retain\_status\_information | int |     | Yes |
| retain\_nonstatus\_information | retain\_nonstatus\_information | int |     | Yes |
| first\_notification\_delay | first\_notification\_delay | int |     | Yes |
| notification\_options | host\_notification\_options | text |     | Yes |
| notifications\_enabled | notifications\_enabled | int |     | Yes |
| stalking\_options | stalking\_options | text |     | Yes |
| escalations | escalations | int |     | Yes |
| Title | name2 | text |     | Yes |
| Description | description | text\_area |     | Yes |
| action\_url | action\_url | text |     | Yes |
| icon\_image | icon\_image | text |     | Yes |
| icon\_image\_alt | icon\_image\_alt | text |     | Yes |
| vrml\_image | vrml\_image | text |     | Yes |
| statusmap\_image | statusmap\_image | text |     | Yes |
| notes | notes | text |     | Yes |
| notes\_url | notes\_url | text |     | Yes |
| custom\_object\_vars | custom\_object\_vars | text\_area |     | Yes |

### Nagios (host) (C\_\_CATG\_\_NAGIOS\_HOST\_FOLDER)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Export this configuration | is\_exportable | int |     | Yes |
| Export configuration | export\_host | int | isys\_monitoring\_export\_config\_\_id | Yes |
| Templates | host\_template | text |     | Yes |
| host\_name | host\_name | text |     | Yes |
| host\_name\_selection | host\_name\_selection | int |     | Yes |
| Hostname | name1 | text |     | Yes |
| Alias | alias | text |     | Yes |
| IP Address | address | int | isys\_catg\_ip\_list\_\_id | Yes |
| address\_selection | address\_selection | int |     | Yes |
| Choose further objects as parent | parents | text |     | Yes |
| Use the following objects as parents? | is\_parent | int |     | Yes |
| check\_command | check\_command | int | isys\_nagios\_commands\_\_id | Yes |
| check\_command+ | check\_command\_plus | int | isys\_nagios\_commands\_plus\_\_id | Yes |
| check\_command\_parameters | check\_command\_parameters | text |     | Yes |
| check\_interval | check\_interval | int |     | Yes |
| retry\_interval | retry\_interval | int |     | Yes |
| max\_check\_attempts | max\_check\_attempts | int |     | Yes |
| check\_period | check\_period | int | isys\_nagios\_timeperiods\_\_id | Yes |
| check\_period + | check\_period\_plus | int | isys\_nagios\_timeperiods\_plus\_\_id | Yes |
| active\_checks\_enabled | active\_checks\_enabled | int |     | Yes |
| passive\_checks\_enabled | passive\_checks\_enabled | int |     | Yes |
| notifications\_enabled | notifications\_enabled | int |     | Yes |
| notification\_options | host\_notification\_options | text |     | Yes |
| notification\_interval | notification\_interval | int |     | Yes |
| notification\_period | notification\_period | int | isys\_nagios\_timeperiods\_\_id | Yes |
| notification\_period + | notification\_period\_plus | int | isys\_nagios\_timeperiods\_plus\_\_id | Yes |
| initial\_state | initial\_state | text |     | Yes |
| obsess\_over\_host | obsess\_over\_host | int |     | Yes |
| check\_freshness | check\_freshness | int |     | Yes |
| freshness\_threshold | freshness\_threshold | int |     | Yes |
| flap\_detection\_enabled | flap\_detection\_enabled | int |     | Yes |
| flap\_detection\_options | flap\_detection\_options | text |     | Yes |
| low\_flap\_threshold | low\_flap\_threshold | int |     | Yes |
| high\_flap\_threshold | high\_flap\_threshold | int |     | Yes |
| event\_handler\_enabled | event\_handler\_enabled | int |     | Yes |
| event\_handler | event\_handler | int |     | Yes |
| event\_handler + | event\_handler\_plus | int | isys\_nagios\_commands\_plus\_\_id | Yes |
| event\_handler\_parameters | event\_handler\_parameters | text |     | Yes |
| process\_perf\_data | process\_perf\_data | int |     | Yes |
| retain\_status\_information | retain\_status\_information | int |     | Yes |
| retain\_nonstatus\_information | retain\_nonstatus\_information | int |     | Yes |
| first\_notification\_delay | first\_notification\_delay | int |     | Yes |
| stalking\_options | stalking\_options | text |     | Yes |
| escalations | escalations | int |     | Yes |
| action\_url | action\_url | text |     | Yes |
| icon\_image | icon\_image | text |     | Yes |
| icon\_image\_alt | icon\_image\_alt | text |     | Yes |
| vrml\_image | vrml\_image | text |     | Yes |
| statusmap\_image | statusmap\_image | text |     | Yes |
| 2d\_coords | twod\_coords | text |     | Yes |
| 3d\_coords | threed\_coords | text |     | Yes |
| notes | notes | text |     | Yes |
| notes\_url | notes\_url | text |     | Yes |
| display\_name | display\_name | text |     | Yes |
| display\_name\_selection | display\_name\_selection | int |     | Yes |
| Title | name2 | text |     | Yes |
| custom\_object\_vars | custom\_object\_vars | text\_area |     | Yes |
| Description | description | text\_area |     | Yes |

### Assigned objects (C\_\_CATG\_\_NAGIOS\_HOST\_TPL\_ASSIGNED\_OBJECTS)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Assigned objects | assigned\_objects | text |     | Yes |

### Service assignment (C\_\_CATG\_\_NAGIOS\_REFS\_SERVICES)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Nagios service | assigned\_objects | int | isys\_obj\_\_id | Yes |

### Nagios (application) (C\_\_CATG\_\_NAGIOS\_APPLICATION\_FOLDER)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Nagios service | assigned\_objects | int | isys\_obj\_\_id | Yes |

### Service assignment (C\_\_CATG\_\_NAGIOS\_APPLICATION\_REFS\_NAGIOS\_SERVICE)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Nagios service | assigned\_objects | int | isys\_obj\_\_id | Yes |

### Service dependencies (C\_\_CATG\_\_NAGIOS\_SERVICE\_DEP)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Host | host | int | isys\_catg\_nagios\_refs\_services\_list\_\_id | Yes |
| Service (Master) | service\_dependency | int |     | No  |
| Host (Master) | host\_dependency | int | isys\_catg\_nagios\_refs\_services\_list\_\_id | Yes |
| inherits\_parent | inherits\_parent | int |     | Yes |
| execution\_failure\_criteria | execution\_fail\_criteria | int | isys\_catg\_nagios\_service\_dep\_list\_\_id | Yes |
| notification\_failure\_criteria | notification\_fail\_criteria | int | isys\_catg\_nagios\_service\_dep\_list\_\_id | Yes |
| dependency\_period | dependency\_period | int | isys\_nagios\_timeperiods\_\_id | Yes |
| dependency\_period+ | dependency\_period\_plus | int | isys\_nagios\_timeperiods\_plus\_\_id | Yes |
| Description | description | text\_area |     | Yes |

### Address (C\_\_CATG\_\_ADDRESS)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Additional address information | address | text\_area |     | Yes |
| Street | street | text |     | Yes |
| House number | house\_no | text |     | Yes |
| Floors | stories | int |     | Yes |
| Postal code | postcode | text |     | Yes |
| City | city | text |     | Yes |
| Region | region | text |     | Yes |
| Country | country | text |     | Yes |
| Description | description | text\_area |     | Yes |

### Monitoring (C\_\_CATG\_\_MONITORING)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Active? | active | int |     | Yes |
| Host | monitoring\_host | int | isys\_monitoring\_hosts\_\_id | Yes |
| Hostname | host\_name | text |     | Yes |
| Hostname selection | host\_name\_selection | int |     | Yes |
| Description | description | text\_area |     | Yes |

### Livestatus (C\_\_CATG\_\_LIVESTATUS)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Livestatus | livestatus\_state | int |     | Yes |
| Livestatus (button) | livestatus\_state\_button | int |     | Yes |

### Vehicle (C\_\_CATG\_\_VEHICLE)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Licence plate | licence\_plate | text |     | Yes |
| Description | description | text\_area |     | Yes |

### Aircraft (C\_\_CATG\_\_AIRCRAFT)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Aircraft registration | registration | text |     | Yes |
| Description | description | text\_area |     | Yes |

### Network connections (C\_\_CATG\_\_NET\_CONNECTIONS\_FOLDER)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Layer 3/4 Protocol | protocol | int | isys\_net\_protocol\_\_id | Yes |
| Layer 5-7 Protocol | protocol\_layer\_5 | int | isys\_net\_protocol\_layer\_5\_\_id | Yes |
| (Bind) ip address | ip\_address | int | isys\_cats\_net\_ip\_addresses\_list\_\_id | Yes |
| Of  | port\_from | int |     | Yes |
| To  | port\_to | int |     | Yes |
| Opened by application | opened\_by | int | isys\_obj\_\_id | Yes |
| Gateway | gateway | int | isys\_obj\_\_id | Yes |
| Description | description | text\_area |     | Yes |

### Listener (C\_\_CATG\_\_NET\_LISTENER)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Layer 3/4 Protocol | protocol | int | isys\_net\_protocol\_\_id | Yes |
| Layer 5-7 Protocol | protocol\_layer\_5 | int | isys\_net\_protocol\_layer\_5\_\_id | Yes |
| (Bind) ip address | ip\_address | int | isys\_cats\_net\_ip\_addresses\_list\_\_id | Yes |
| Of  | port\_from | int |     | Yes |
| To  | port\_to | int |     | Yes |
| Opened by application | opened\_by | int | isys\_obj\_\_id | Yes |
| Gateway | gateway | int | isys\_obj\_\_id | Yes |
| Description | description | text\_area |     | Yes |

### Connection (C\_\_CATG\_\_NET\_CONNECTOR)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| (Source) ip address | ip\_address | int | isys\_cats\_net\_ip\_addresses\_list\_\_id | Yes |
| Of  | port\_from | int |     | Yes |
| To  | port\_to | int |     | Yes |
| Listener | connected\_listener | int | isys\_catg\_net\_listener\_list\_\_id | No  |
| Connected with | connected\_to | int | isys\_catg\_net\_listener\_list\_\_id | No  |
| Gateway | gateway | int | isys\_obj\_\_id | Yes |
| Description | description | text\_area |     | Yes |

### Administration service (C\_\_CATG\_\_CLUSTER\_ADM\_SERVICE)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Administration service (Object) | connected\_object | int | isys\_connection\_\_id | Yes |
| Object type | objtype | int |     | Yes |

### JDisc Custom Attributes (C\_\_CATG\_\_JDISC\_CA)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Attribute | attribute | text |     | Yes |
| Value | attribute\_content | text |     | Yes |
| Type | attribute\_type | int | isys\_jdisc\_ca\_type\_\_id | Yes |
| Folder | attribute\_folder | text\_area |     | Yes |
| Description | description | text\_area |     | Yes |

### LC\_\_CATG\_\_CMK\_FOLDER (C\_\_CATG\_\_CMK)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| LC\_\_CATG\_\_CMK\_\_ACTIVE | active | int |     | Yes |
| Export configuration | export\_config | int |     | Yes |
| LC\_\_CATG\_\_CMK\_\_ALIAS | title | text |     | Yes |
| LC\_\_CATG\_\_CMK\_\_EXPORT\_IP | export\_ip | int |     | Yes |
| Host address | hostaddress | int |     | Yes |
| LC\_\_CATG\_\_CMK\_\_HOSTNAME | host\_name | text |     | Yes |
| LC\_\_CATG\_\_CMK\_\_HOSTNAME | host\_name\_selection | int |     | Yes |
| Description | description | text\_area |     | Yes |

### LC\_\_CATG\_\_CMK\_TAG (C\_\_CATG\_\_CMK\_TAG)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| LC\_\_CATG\_\_CMK\_TAG\_\_TAGS | tags | text |     | Yes |
| Description | description | text\_area |     | Yes |

### LC\_\_CATG\_\_CMK\_HOST\_SERVICE (C\_\_CATG\_\_CMK\_HOST\_SERVICE)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| LC\_\_CATG\_\_CMK\_SERVICE\_\_CHECK\_MK\_SERVICES | service | text |     | Yes |
| LC\_\_CATG\_\_CMK\_SERVICE\_\_SOFTWARE\_ASSIGNMENT | software\_assignment | int | isys\_catg\_application\_list\_\_id | Yes |
| Description | description | text\_area |     | Yes |

### LC\_\_CATG\_\_CMK\_SERVICE (C\_\_CATG\_\_CMK\_SERVICE)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| LC\_\_MODULE\_\_CHECK\_MK\_\_HOST | host | int |     | Yes |
| LC\_\_CATG\_\_CMK\_SERVICE\_\_CHECK\_MK\_SERVICES | service | text |     | Yes |
| Description | description | text\_area |     | Yes |

### LC\_\_CATG\_\_CMK\_DEF (C\_\_CATG\_\_CMK\_DEF)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| LC\_\_CATG\_\_CMK\_\_ACTIVE | active | int |     | Yes |
| Export configuration | export\_config | int |     | Yes |
| LC\_\_CATG\_\_CMK\_\_ALIAS | title | text |     | Yes |
| LC\_\_CATG\_\_CMK\_\_EXPORT\_IP | export\_ip | int |     | Yes |
| Host address | hostaddress | int |     | Yes |
| LC\_\_CATG\_\_CMK\_\_HOSTNAME | host\_name | text |     | Yes |
| LC\_\_CATG\_\_CMK\_\_HOSTNAME | host\_name\_selection | int |     | Yes |
| Description | description | text\_area |     | Yes |

### NDO (C\_\_CATG\_\_NDO)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| NDO state | ndo\_state | text |     | Yes |
| NDO state button | ndo\_state\_button | text |     | Yes |

### Cable (C\_\_CATG\_\_CABLE)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Cable type | cable\_type | int | isys\_cable\_type\_\_id | Yes |
| Color | cable\_colour | int | isys\_cable\_colour\_\_id | Yes |
| Occupancy | cable\_occupancy | int | isys\_cable\_occupancy\_\_id | Yes |
| Cable length | length | float |     | Yes |
| Length unit | length\_unit | int |     | Yes |
| Maximal amount of fibers/leads | max\_amount\_of\_fibers\_leads | int |     | Yes |
| connection | connection | text |     | Yes |
| Description | description | text\_area |     | Yes |

### Data Source (C\_\_CATG\_\_IDENTIFIER)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Key | key | text |     | Yes |
| Value | value | text |     | Yes |
| Initial Import | last\_edited | date\_time |     | Yes |
| Type | type | int | isys\_catg\_identifier\_type\_\_id | Yes |
| Group | group | text |     | Yes |
| Last scan | last\_scan | text |     | Yes |
| Last updated | last\_updated | date\_time |     | Yes |
| Description | description | text\_area |     | Yes |

### Services (C\_\_CATG\_\_SERVICE)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Service number | service\_number | text |     | Yes |
| Service type | type | int | isys\_service\_type\_\_id | Yes |
| Service category | category | int | isys\_service\_category\_\_id | Yes |
| Business Unit | business\_unit | int | isys\_business\_unit\_\_id | Yes |
| Active in service catalogue | active | int |     | Yes |
| Service description internal | service\_description\_intern | text\_area |     | Yes |
| Service description external | service\_description\_extern | text\_area |     | Yes |
| Aliases | service\_alias | int | isys\_catg\_service\_list\_\_id | Yes |
| Description | description | text\_area |     | Yes |

### Operating system (C\_\_CATG\_\_OPERATING\_SYSTEM)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Operating system | application | int | isys\_connection\_\_id | Yes |
| Type | application\_type | int | isys\_catg\_application\_type\_\_id | Yes |
| Priority | application\_priority | int | isys\_catg\_application\_priority\_\_id | Yes |
| Assigned license | assigned\_license | int | isys\_cats\_lic\_list\_\_id | Yes |
| Assigned license key | assigned\_license\_key | int | isys\_cats\_lic\_list\_\_id | Yes |
| Service | assigned\_it\_service | int | isys\_catg\_its\_components\_list\_\_id | Yes |
| Variant | assigned\_variant | int | isys\_cats\_app\_variant\_list\_\_id | Yes |
| Version number | assigned\_version | int | isys\_catg\_version\_list\_\_id | Yes |
| Description | description | text\_area |     | Yes |

### QinQ SP-VLAN (C\_\_CATG\_\_QINQ\_SP)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Assigned SP-VLAN | spvlan | int | isys\_connection\_\_id | Yes |
| Description | description | text\_area |     | Yes |

### Fiber/lead (C\_\_CATG\_\_FIBER\_LEAD)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Label | label | text |     | Yes |
| Category | category | int | isys\_fiber\_category\_\_id | Yes |
| Color | color | int | isys\_cable\_colour\_\_id | Yes |
| Damping | damping | float |     | Yes |
| Description | description | text\_area |     | Yes |

### QinQ CE-VLAN (C\_\_CATG\_\_QINQ\_CE)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Assigned SP-VLAN | spvlan | int | isys\_connection\_\_id | Yes |

### Images (C\_\_CATG\_\_IMAGES)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Filename | name | text |     | No  |
| Filecontent | content | text |     | Yes |

### WAN Connection (C\_\_CATG\_\_WAN)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Title | title | text |     | Yes |
| Role | role | int | isys\_wan\_role\_\_id | Yes |
| Type | type | int | isys\_wan\_type\_\_id | Yes |
| Channels | channels | int |     | Yes |
| Call number(s) | call\_numbers | text\_area |     | Yes |
| Location of the connection | connection\_location | int | isys\_obj\_\_id | Yes |
| Capacity UP | capacity\_up | float |     | Yes |
| Capacity UP unit | capacity\_up\_unit | int | isys\_wan\_capacity\_unit\_\_id | Yes |
| Capacity DOWN | capacity\_down | float |     | Yes |
| Capacity DOWN unit | capacity\_down\_unit | int | isys\_wan\_capacity\_unit\_\_id | Yes |
| Max. Capacity UP | max\_capacity\_up | float |     | Yes |
| Max. Capacity UP unit | max\_capacity\_up\_unit | int | isys\_wan\_capacity\_unit\_\_id | Yes |
| Max. Capacity DOWN | max\_capacity\_down | float |     | Yes |
| Max. Capacity DOWN unit | max\_capacity\_down\_unit | int | isys\_wan\_capacity\_unit\_\_id | Yes |
| Projekt number | project\_no | text |     | Yes |
| VLAN-ID | vlan\_id | int | isys\_obj\_\_id | Yes |
| Shopping cart number | shopping\_cart\_no | text |     | Yes |
| Ticket number | ticket\_no | text |     | Yes |
| Customer number | customer\_no | text |     | Yes |
| Connected routers | router | int | isys\_catg\_wan\_list\_2\_router\_\_isys\_catg\_wan\_list\_\_id | Yes |
| Connected nets | net | int | isys\_catg\_wan\_list\_2\_net\_\_isys\_catg\_wan\_list\_\_id | Yes |
| Description | description | text\_area |     | Yes |

### Remote Management Controller (C\_\_CATG\_\_RM\_CONTROLLER)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Primary access URL | remote\_url | text |     | Yes |
| Remote Management Controller | connected\_object | int | isys\_connection\_\_id | Yes |
| Description | description | text\_area |     | Yes |

### Managed devices (C\_\_CATG\_\_RM\_CONTROLLER\_BACKWARD)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Remote Management Controller | connected\_object | int |     | Yes |

### Virtual managed objects (C\_\_CATG\_\_MANAGED\_OBJECTS)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Object | connected\_object | int |     | Yes |

### VRRP (C\_\_CATG\_\_VRRP)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Type | type | int | isys\_vrrp\_type\_\_id | Yes |
| VR ID | vrid | text |     | Yes |
| Description | description | text\_area |     | Yes |

### VRRP Member (C\_\_CATG\_\_VRRP\_MEMBER)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| VRRP member | member | int | isys\_catg\_log\_port\_list\_\_id | Yes |
| Description | description | text\_area |     | Yes |

### Stack member (C\_\_CATG\_\_STACK\_MEMBER)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Member | assigned\_object | int | isys\_obj\_\_id | Yes |
| Mode | mode | int |     | Yes |
| Description | description | text\_area |     | Yes |

### Last login user (C\_\_CATG\_\_LAST\_LOGIN\_USER)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Last logged in user | last\_login | text |     | Yes |
| Type | type | text |     | Yes |
| Description | description | text\_area |     | Yes |

### Net zone (C\_\_CATG\_\_NET\_ZONE)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Scope | from-to | text | isys\_obj\_\_id | Yes |

### Options (C\_\_CATG\_\_NET\_ZONE\_OPTIONS)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Zone color | color | text |     | Yes |
| Zone color | domain | text |     | Yes |
| Description | description | text\_area |     | Yes |

### Scope (C\_\_CATG\_\_NET\_ZONE\_SCOPES)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Scope | from-to | text | isys\_obj\_\_id | Yes |

Specific categories (cats)
--------------------------

### Rack (C\_\_CATS\_\_ENCLOSURE)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Vertical slots (front side) | vertical\_slots\_front | int |     | Yes |
| Vertical slots (backside) | vertical\_slots\_rear | int |     | Yes |
| Height unit sorting | slot\_sorting | text |     | Yes |
| Description | description | text\_area |     | Yes |

### Room (C\_\_CATS\_\_ROOM)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Type | type | int | isys\_room\_type\_\_id | Yes |
| Room number | number | text |     | Yes |
| Floor | floor | text |     | Yes |
| Description | description | text\_area |     | Yes |

### Services (C\_\_CATS\_\_SERVICE)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Specification | specification | text |     | Yes |
| Manufacturer | manufacturer | int | isys\_application\_manufacturer\_\_id | Yes |
| Installation | installation | int | isys\_installation\_type\_\_id | Yes |
| Registration key | registration\_key | text |     | Yes |
| Install path | install\_path | text |     | Yes |
| Amount of installations | installation\_count | int |     | Yes |
| Description | description | text\_area |     | Yes |

### Switch (C\_\_CATS\_\_SWITCH\_NET)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| VLAN management protocol | vlan | int | isys\_vlan\_management\_protocol\_\_id | Yes |
| Role | role | int | isys\_switch\_role\_\_id | Yes |
| Spanning Tree | spanning\_tree | int | isys\_switch\_spanning\_tree\_\_id | Yes |
| Description | description | text\_area |     | Yes |

### WAN (C\_\_CATS\_\_WAN)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Role | role | int | isys\_wan\_role\_\_id | Yes |
| Type | type | int | isys\_wan\_type\_\_id | Yes |
| Capacity | capacity | double |     | Yes |
| Capacity unit | capacity\_unit | int | isys\_wan\_capacity\_unit\_\_id | Yes |
| Description | description | text\_area |     | Yes |

### Emergency plan (C\_\_CATS\_\_EMERGENCY\_PLAN)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Time need | time\_needed | int |     | Yes |
| Unit | time\_unit | int | isys\_unit\_of\_time\_\_id | Yes |
| Date of emergency practice | practice\_date | date\_time |     | Yes |
| Description | description | text\_area |     | Yes |

### Air conditioning (C\_\_CATS\_\_AC)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Type | type | int | isys\_ac\_type\_\_id | Yes |
| Threshold | threshold | float |     | Yes |
| Memory-unit | threshold\_unit | int | isys\_temp\_unit\_\_id | Yes |
| Capacity unit | capacity\_unit | int | isys\_ac\_refrigerating\_capacity\_unit\_\_id | Yes |
| Refrigerating capacity | capacity | float |     | Yes |
| Air quantity | air\_quantity | float |     | Yes |
| Volume unit | air\_quantity\_unit | int | isys\_ac\_air\_quantity\_unit\_\_id | Yes |
| Width | width | float |     | Yes |
| Height | height | float |     | Yes |
| Depth | depth | float |     | Yes |
| Dimension unit | dimension\_unit | int | isys\_depth\_unit\_\_id | Yes |
| Description | description | text\_area |     | Yes |

### WiFi device (C\_\_CATS\_\_ACCESS\_POINT)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Title | title | text |     | Yes |
| Function | function | int | isys\_wlan\_function\_\_id | Yes |
| Standard | standard | int | isys\_wlan\_standard\_\_id | Yes |
| Channel | channel | int | isys\_wlan\_channel\_\_id | Yes |
| Broadcast SSID | broadcast\_ssid | int |     | Yes |
| SSID | ssid | text |     | Yes |
| MAC filter | mac\_filter | int |     | Yes |
| Authentication | auth | int | isys\_wlan\_auth\_\_id | Yes |
| Encryption | encryption\_id | int | isys\_wlan\_encryption\_\_id | Yes |
| Key | key | text |     | Yes |
| Description | description | text\_area |     | Yes |

### Monitor (C\_\_CATS\_\_MONITOR)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Display | size | float |     | Yes |
| Unit | size\_unit | int | isys\_depth\_unit\_\_id | Yes |
| Type | type | int | isys\_monitor\_type\_\_id | Yes |
| Resolution | resolution | int | isys\_monitor\_resolution\_\_id | Yes |
| Pivot | pivot | int |     | Yes |
| Speaker | speaker | int |     | Yes |
| Description | description | text\_area |     | Yes |

### Desktop (C\_\_CATS\_\_CLIENT)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Client type | type | int | isys\_client\_type\_\_id | Yes |
| Keyboard Layout | keyboard\_layout | text |     | Yes |
| Description | description | text\_area |     | Yes |

### FC switch (C\_\_CATS\_\_SWITCH\_FC)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Title | title | text |     | Yes |
| Active | is\_active | int |     | Yes |
| Description | description | text\_area |     | Yes |

### Routing (C\_\_CATS\_\_ROUTER)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Routing protocol | routing\_protocol | int | isys\_routing\_protocol\_\_id | Yes |
| Gateway address | gateway\_address | int |     | Yes |
| Description | description | text\_area |     | Yes |

### Printer (C\_\_CATS\_\_PRT)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Type | type | int | isys\_cats\_prt\_type\_\_id | Yes |
| Color | is\_color | int |     | Yes |
| Duplex | is\_duplex | int |     | Yes |
| Emulation | emulation | int | isys\_cats\_prt\_emulation\_\_id | Yes |
| Paper format | paper\_format | int | isys\_cats\_prt\_paper\_\_id | Yes |
| Description | description | text\_area |     | Yes |

### Files (C\_\_CATS\_\_FILE)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Title | file\_title | text |     | Yes |
| Filename | file\_physical | int |     | Yes |
| Category | file\_category | int | isys\_file\_category\_\_id | Yes |
| Revision | revision | text |     | Yes |
| Version Description | version\_description | text\_area |     | Yes |
| Description | description | text\_area |     | Yes |
| Version | current\_version | int | isys\_file\_version\_\_id | Yes |
| MD5 Checksum | md5\_hash | text |     | Yes |

### Applications (C\_\_CATS\_\_APPLICATION)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Specification | specification | text |     | Yes |
| Manufacturer | manufacturer | int | isys\_application\_manufacturer\_\_id | Yes |
| Installation | installation | int | isys\_installation\_type\_\_id | Yes |
| Registration key | registration\_key | text |     | Yes |
| Install path | install\_path | text |     | Yes |
| Amount of installations | installation\_count | int |     | Yes |
| Description | description | text\_area |     | Yes |

### Net (C\_\_CATS\_\_NET)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Title | title | text |     | Yes |
| Type | type | int | isys\_net\_type\_\_id | Yes |
| Net | address | text |     | Yes |
| Netmask | netmask | text |     | Yes |
| Default Gateway | gateway | int |     | Yes |
| Address from | range\_from | text |     | Yes |
| Address to | range\_to | text |     | Yes |
| DNS server | dns\_server | int | isys\_cats\_net\_list\_\_id | Yes |
| DNS domain | dns\_domain | int | isys\_cats\_net\_list\_\_id | Yes |
| CIDR-Suffix | cidr\_suffix | int |     | Yes |
| Reverse DNS | reverse\_dns | text |     | Yes |
| Layer-2-net assignment | layer2\_assignments | int |     | Yes |
| Net | address\_v6 | text |     | Yes |
| Address range | address\_range | text |     | Yes |
| Net with suffix | address\_with\_suffix | text |     | Yes |
| Assigned addresses | free\_addresses | text |     | Yes |
| Description | description | text\_area |     | Yes |

### Mobile radio (C\_\_CATS\_\_CELL\_PHONE\_CONTRACT)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| IMEI number | imei\_number | text |     | Yes |
| Description | description | text\_area |     | Yes |

### Object group (C\_\_CATS\_\_GROUP)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Object | object | int | isys\_connection\_\_id | Yes |
| Object type | object\_type | text |     | Yes |
| Description | description | text\_area |     | Yes |

### License keys (C\_\_CMDB\_\_SUBCAT\_\_LICENCE\_LIST)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Key | key | text |     | Yes |
| Serial | serial | text |     | Yes |
| License Type | type | int |     | Yes |
| Amount | amount | int |     | Yes |
| Licenses in Use | used\_licences | int |     | Yes |
| Licenses Free | lic\_not\_in\_use | int |     | Yes |
| Start Date | start | date |     | Yes |
| Expiration Date | expire | date |     | Yes |
| Price Per Unit | cost | double |     | Yes |
| Total Costs | overall\_costs | double |     | Yes |
| Description | description | text\_area |     | Yes |

### Current file (C\_\_CMDB\_\_SUBCAT\_\_FILE\_ACTUAL)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Title | file\_title | text |     | Yes |
| Filename | file\_physical | int |     | Yes |
| Category | file\_category | int | isys\_file\_category\_\_id | Yes |
| Revision | revision | text |     | Yes |
| Version Description | version\_description | text\_area |     | Yes |
| Description | description | text\_area |     | Yes |
| Version | current\_version | int | isys\_file\_version\_\_id | Yes |
| MD5 Checksum | md5\_hash | text |     | Yes |

### File versions (C\_\_CMDB\_\_SUBCAT\_\_FILE\_VERSIONS)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Filename | file\_physical | text |     | Yes |
| File content | file\_content | text |     | Yes |
| Title | file\_title | text |     | Yes |
| Revision | revision | text |     | Yes |
| Upload date | upload\_date | text |     | Yes |
| Version Description | version\_description | text\_area |     | Yes |
| MD5 Checksum | md5\_hash | text |     | Yes |
| Upload from | uploaded\_by | text |     | Yes |

### Assigned objects (C\_\_CMDB\_\_SUBCAT\_\_FILE\_OBJECTS)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Assigned objects | assigned\_objects | int |     | Yes |

### Emergency plan properties (C\_\_CMDB\_\_SUBCAT\_\_EMERGENCY\_PLAN)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Time need | time\_needed | int |     | Yes |
| Unit | time\_unit | int | isys\_unit\_of\_time\_\_id | Yes |
| Date of emergency practice | practice\_date | date\_time |     | Yes |
| Description | description | text\_area |     | Yes |

### assigned objects (C\_\_CMDB\_\_SUBCAT\_\_EMERGENCY\_PLAN\_LINKED\_OBJECT\_LIST)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Title | object | text |     | Yes |

### Net type (C\_\_CMDB\_\_SUBCAT\_\_WS\_NET\_TYPE)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Net type | title | int | isys\_net\_type\_title\_\_id | Yes |
| Description | description | text\_area |     | Yes |

### Assigned objects (C\_\_CMDB\_\_SUBCAT\_\_WS\_ASSIGNMENT)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Assigned Objects | connected\_object | int |     | Yes |

### Wiring System (C\_\_CATS\_\_WS)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Net type | title | int | isys\_net\_type\_title\_\_id | Yes |
| Description | description | text\_area |     | Yes |

### Uninterruptible power supply (C\_\_CATS\_\_UPS)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Type | type | int | isys\_ups\_type\_\_id | Yes |
| Battery type | battery\_type | int | isys\_ups\_battery\_type\_\_id | Yes |
| Quantity | amount | int |     | Yes |
| Charge time | charge\_time | int |     | Yes |
| Unit | charge\_time\_unit | int | isys\_unit\_of\_time\_\_id | Yes |
| Runtime under full load | autonomy\_time | int |     | Yes |
| Unit | autonomy\_time\_unit | int | isys\_unit\_of\_time\_\_id | Yes |
| Description | description | text\_area |     | Yes |

### Emergency power supply (C\_\_CATS\_\_EPS)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Type | type | int | isys\_cats\_eps\_type\_\_id | Yes |
| Warm-up time | warmup\_time | int |     | Yes |
| Unit | warmup\_time\_unit | int | isys\_unit\_of\_time\_\_id | Yes |
| Fuel tank | fuel\_tank | int |     | Yes |
| Unit | volume\_unit | int | isys\_volume\_unit\_\_id | Yes |
| Autonomy time | autonomy\_time | int |     | Yes |
| Unit | autonomy\_time\_unit | int | isys\_unit\_of\_time\_\_id | Yes |
| Description | description | text\_area |     | Yes |

### SAN Zoning (C\_\_CATS\_\_SAN\_ZONING)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Title | title | text |     | Yes |
| Members | members | int |     | Yes |
| Description | description | text\_area |     | Yes |

### Organization (C\_\_CATS\_\_ORGANIZATION)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Title | title | text |     | No  |
| Telephone | telephone | text |     | Yes |
| Fax | fax | text |     | Yes |
| Website | website | text |     | Yes |
| Headquarter | headquarter | int | isys\_connection\_\_id | Yes |
| Description | description | text\_area |     | Yes |

### Master data (C\_\_CATS\_\_ORGANIZATION\_MASTER\_DATA)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Title | title | text |     | No  |
| Telephone | telephone | text |     | Yes |
| Fax | fax | text |     | Yes |
| Website | website | text |     | Yes |
| Headquarter | headquarter | int | isys\_connection\_\_id | Yes |
| Description | description | text\_area |     | Yes |

### Persons (C\_\_CATS\_\_ORGANIZATION\_PERSONS)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Title | object | int |     | Yes |
| Contact | contact | int |     | Yes |

### Persons (C\_\_CATS\_\_PERSON)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Title | title | text |     | Yes |
| Salutation | salutation | text |     | Yes |
| First name | first\_name | text |     | Yes |
| Last name | last\_name | text |     | Yes |
| Academic degree | academic\_degree | text |     | Yes |
| Function | function | text |     | Yes |
| Service designation | service\_designation | text |     | Yes |
| Street | street | text |     | Yes |
| City | city | text |     | Yes |
| ZIP-Code | zip\_code | text |     | Yes |
| E-mail address | mail | text |     | Yes |
| Telephone company | phone\_company | text |     | Yes |
| Telephone home | phone\_home | text |     | Yes |
| Cellphone | phone\_mobile | text |     | Yes |
| Fax | fax | text |     | Yes |
| Pager | pager | text |     | Yes |
| Personnel number | personnel\_number | text |     | Yes |
| Department | department | text |     | Yes |
| Organisation | organization | int | isys\_connection\_\_id | Yes |
| ID  | ldap\_id | text |     | Yes |
| DN  | ldap\_dn | text |     | Yes |
| Description | description | text\_area |     | Yes |
| Custom 1 | custom\_1 | text |     | Yes |
| Custom 2 | custom\_2 | text |     | Yes |
| Custom 3 | custom\_3 | text |     | Yes |
| Custom 4 | custom\_4 | text |     | Yes |
| Custom 5 | custom\_5 | text |     | Yes |
| Custom 6 | custom\_6 | text |     | Yes |
| Custom 7 | custom\_7 | text |     | Yes |
| Custom 8 | custom\_8 | text |     | Yes |

### Master Data (C\_\_CATS\_\_PERSON\_MASTER)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Title | title | text |     | Yes |
| Salutation | salutation | text |     | Yes |
| First name | first\_name | text |     | Yes |
| Last name | last\_name | text |     | Yes |
| Academic degree | academic\_degree | text |     | Yes |
| Function | function | text |     | Yes |
| Service designation | service\_designation | text |     | Yes |
| Street | street | text |     | Yes |
| City | city | text |     | Yes |
| ZIP-Code | zip\_code | text |     | Yes |
| E-mail address | mail | text |     | Yes |
| Telephone company | phone\_company | text |     | Yes |
| Telephone home | phone\_home | text |     | Yes |
| Cellphone | phone\_mobile | text |     | Yes |
| Fax | fax | text |     | Yes |
| Pager | pager | text |     | Yes |
| Personnel number | personnel\_number | text |     | Yes |
| Department | department | text |     | Yes |
| Organisation | organization | int | isys\_connection\_\_id | Yes |
| ID  | ldap\_id | text |     | Yes |
| DN  | ldap\_dn | text |     | Yes |
| Description | description | text\_area |     | Yes |
| Custom 1 | custom\_1 | text |     | Yes |
| Custom 2 | custom\_2 | text |     | Yes |
| Custom 3 | custom\_3 | text |     | Yes |
| Custom 4 | custom\_4 | text |     | Yes |
| Custom 5 | custom\_5 | text |     | Yes |
| Custom 6 | custom\_6 | text |     | Yes |
| Custom 7 | custom\_7 | text |     | Yes |
| Custom 8 | custom\_8 | text |     | Yes |

### Login (C\_\_CATS\_\_PERSON\_LOGIN)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| User name | title | text |     | Yes |
| Password | user\_pass | text |     | Yes |
| Password | user\_pass2 | text |     | Yes |
| Description | description | text\_area |     | Yes |
| Custom 1 | custom\_1 | text |     | Yes |
| Custom 2 | custom\_2 | text |     | Yes |
| Custom 3 | custom\_3 | text |     | Yes |
| Custom 4 | custom\_4 | text |     | Yes |
| Custom 5 | custom\_5 | text |     | Yes |
| Custom 6 | custom\_6 | text |     | Yes |
| Custom 7 | custom\_7 | text |     | Yes |
| Custom 8 | custom\_8 | text |     | Yes |

### Person group memberships (C\_\_CATS\_\_PERSON\_ASSIGNED\_GROUPS)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Person group memberships | connected\_object | int |     | Yes |
| Contact | contact | int |     | Yes |

### Person groups (C\_\_CATS\_\_PERSON\_GROUP)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Title | title | text |     | Yes |
| E-Mail | email\_address | text |     | Yes |
| Phone | phone | text |     | Yes |
| LDAP-Group (Mapping) | ldap\_group | text |     | Yes |
| Description | description | text\_area |     | Yes |

### Master Data (C\_\_CATS\_\_PERSON\_GROUP\_MASTER)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Title | title | text |     | Yes |
| E-Mail | email\_address | text |     | Yes |
| Phone | phone | text |     | Yes |
| LDAP-Group (Mapping) | ldap\_group | text |     | Yes |
| Description | description | text\_area |     | Yes |

### Members (C\_\_CATS\_\_PERSON\_GROUP\_MEMBERS)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| First name | first\_name | text |     | Yes |
| Last name | last\_name | text |     | Yes |
| Department | department | text |     | Yes |
| Telephone company | phone\_company | text |     | Yes |
| E-Mail | email\_address | text |     | Yes |
| Organisation | organization | int |     | Yes |
| Title | title | text |     | Yes |
| Members | connected\_object | int |     | Yes |

### Assigned Objects (C\_\_CATS\_\_ORGANIZATION\_CONTACT\_ASSIGNMENT)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Assigned Objects | object | int |     | Yes |
| Role | role | int | isys\_contact\_tag\_\_id | Yes |

### Assigned Objects (C\_\_CATS\_\_PERSON\_CONTACT\_ASSIGNMENT)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Object | object | int |     | No  |
| Object type | object\_type | int |     | Yes |
| Role | role | int | isys\_contact\_tag\_\_id | Yes |
| Description | description | text\_area |     | Yes |

### Assigned Objects (C\_\_CATS\_\_PERSON\_GROUP\_CONTACT\_ASSIGNMENT)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Object | object | int |     | No  |
| Object type | object\_type | int |     | Yes |
| Role | role | int | isys\_contact\_tag\_\_id | Yes |
| Description | description | text\_area |     | Yes |

### Assigned clusters (C\_\_CATS\_\_CLUSTER\_SERVICE)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Assigned clusters | cluster | int |     | No  |
| Type | type | int | isys\_cluster\_type\_\_id | Yes |
| Runs on | runs\_on | int |     | Yes |
| Default server | default\_server | int |     | Yes |
| Host addresses | hostaddresses | int | isys\_catg\_cluster\_service\_list\_\_id | Yes |
| Volumes | drives | int |     | Yes |
| Shares | shares | int |     | Yes |
| Database schema | assigned\_database\_schema | int | isys\_cats\_database\_access\_list\_\_id | Yes |
| Description | description | text\_area |     | Yes |

### Relation details (C\_\_CATS\_\_RELATION\_DETAILS)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Object1 | object1 | int |     | Yes |
| Object2 | object2 | int |     | Yes |
| Service | itservice | int |     | Yes |
| Relation type | relation\_type | int | isys\_relation\_type\_\_id | Yes |
| Weighting | weighting | int | isys\_weighting\_\_id | Yes |
| Description | description | text\_area |     | Yes |

### Database schema (C\_\_CATS\_\_DATABASE\_SCHEMA)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Runs on | link | int |     | Yes |
| Database instance | instance | int | isys\_cats\_database\_instance\_list\_\_id | Yes |
| Title | title | text |     | Yes |
| Storage-Engine | storage\_engine | text |     | Yes |
| Description | description | text\_area |     | Yes |

### Database links (C\_\_CATS\_\_DATABASE\_LINKS)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Title | title | text |     | Yes |
| Connected database schema | link | int | isys\_connection\_\_id | Yes |
| Target user | target\_user | text |     | Yes |
| Owner | owner | text |     | Yes |
| Public | public | int |     | Yes |
| Description | description | text\_area |     | Yes |

### DBMS (C\_\_CATS\_\_DBMS)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| DBMS | dbms | int | isys\_dbms\_\_id | Yes |
| Description | description | text\_area |     | Yes |

### Instance / Oracle database (C\_\_CATS\_\_DATABASE\_INSTANCE)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| DBMS | instance | int | isys\_connection\_\_id | Yes |
| Title | title | text |     | Yes |
| Listener | listener | text |     | Yes |
| Database schema | database\_schema | int |     | Yes |
| Description | description | text\_area |     | Yes |

### PDU (C\_\_CATS\_\_PDU)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| PDU | pdu\_id | text |     | Yes |
| Description | description | text\_area |     | Yes |

### Branch (C\_\_CATS\_\_PDU\_BRANCH)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| PDU | pdu\_id | int |     | Yes |
| Branch-ID | branch\_id | int |     | Yes |
| Receptacles | receptables | int |     | Yes |
| Description | description | text\_area |     | Yes |

### Parallel relations (C\_\_CATS\_\_PARALLEL\_RELATION)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Title | title | text |     | Yes |
| Minimum amount of active items | threshold | text |     | Yes |
| Parallel relations | rel\_pool | text |     | Yes |
| Description | description | text\_area |     | Yes |

### Database objects (C\_\_CATS\_\_DATABASE\_OBJECTS)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Title | title | text |     | Yes |
| Type | database\_object | int | isys\_database\_objects\_\_id | Yes |
| Description | description | text\_area |     | Yes |

### Database access (C\_\_CATS\_\_DATABASE\_ACCESS)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Assigned objects | access | int |     | Yes |

### Database gateway (C\_\_CATS\_\_DATABASE\_GATEWAY)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Gateway type | type | text |     | Yes |
| Host | host | text |     | Yes |
| Port | port | text |     | Yes |
| User | user | text |     | Yes |
| Target schema | target\_schema | int | isys\_connection\_\_id | Yes |
| Description | description | text\_area |     | Yes |

### Replication (C\_\_CATS\_\_REPLICATION)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Replication mechanism | replication\_mechanism | int | isys\_replication\_mechanism\_\_id | Yes |
| Description | description | text\_area |     | Yes |

### Replication partner (C\_\_CATS\_\_REPLICATION\_PARTNER)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Replication type | type | int | isys\_replication\_type\_\_id | Yes |
| Replication partner | replication\_partner | int | isys\_connection\_\_id | Yes |
| Description | description | text\_area |     | Yes |

### Installation (C\_\_CATS\_\_APPLICATION\_ASSIGNED\_OBJ)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Installed on | object | int |     | No  |
| Type | application\_type | int | isys\_catg\_application\_type\_\_id | Yes |
| Priority | application\_priority | int | isys\_catg\_application\_priority\_\_id | Yes |
| Assigned license | assigned\_license | int | isys\_cats\_lic\_list\_\_id | Yes |
| Assigned license key | assigned\_license\_key | text | isys\_cats\_lic\_list\_\_id | Yes |
| Database schema | assigned\_database\_schema | int | isys\_cats\_database\_access\_list\_\_id | Yes |
| Service | assigned\_it\_service | int | isys\_catg\_its\_components\_list\_\_id | Yes |
| Variant | assigned\_variant | int | isys\_cats\_app\_variant\_list\_\_id | Yes |
| Inherit nagios services | bequest\_nagios\_services | int |     | Yes |
| Description | description | text\_area |     | Yes |

### Middleware (C\_\_CATS\_\_MIDDLEWARE)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Specification | specification | text |     | Yes |
| Manufacturer | manufacturer | int | isys\_application\_manufacturer\_\_id | Yes |
| Installation | installation | int | isys\_installation\_type\_\_id | Yes |
| Registration key | registration\_key | text |     | Yes |
| Install path | install\_path | text |     | Yes |
| Amount of installations | installation\_count | int |     | Yes |
| Description | description | text\_area |     | Yes |

### Crypto card (C\_\_CATS\_\_KRYPTO\_CARD)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Certificate number | certificate\_number | text |     | Yes |
| Certgate card number | certgate\_card\_number | text |     | Yes |
| Certificate title | certificate\_title | text |     | Yes |
| Certificate revocation password | certificate\_password | text |     | Yes |
| Certificate procedure | certificate\_procedure | date |     | Yes |
| Date of issue | date\_of\_issue | date |     | Yes |
| IMEI number | imei\_number | text |     | Yes |
| Assigned cellular phone | assigned\_mobile | int |     | Yes |
| Description | description | text\_area |     | Yes |

### IP list (C\_\_CATS\_\_NET\_IP\_ADDRESSES)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Type | net\_type | int | isys\_net\_type\_\_id | Yes |
| Host address | title | text |     | Yes |
| Object | assigned\_object | int |     | Yes |
| Address allocation IPv4 | ipv4\_assignment | int | isys\_ip\_assignment\_\_id | Yes |
| Address allocation IPv6 | ipv6\_assignment | int | isys\_ipv6\_assignment\_\_id | Yes |
| Object | object | int |     | Yes |
| Open IP list | ip\_address\_link | text |     | Yes |

### DHCP (C\_\_CATS\_\_NET\_DHCP)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Type v4 | type | int | isys\_net\_dhcp\_type\_\_id | Yes |
| Type v6 | typev6 | int | isys\_net\_dhcpv6\_type\_\_id | Yes |
| DHCP from | range\_from | text |     | Yes |
| DHCP to | range\_to | text |     | Yes |
| Description | description | text\_area |     | Yes |

### Layer 2 Net (C\_\_CATS\_\_LAYER2\_NET)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| ID (VLAN) | vlan\_id | text |     | Yes |
| Default VLAN | standard | int |     | Yes |
| Type | type | int | isys\_layer2\_net\_type\_\_id | Yes |
| Subtype | subtype | int | isys\_layer2\_net\_subtype\_\_id | Yes |
| IP helper addresses | ip\_helper\_addresses | int |     | Yes |
| Layer-3-net assignment | layer3\_assignments | int | isys\_obj\_\_id | Yes |
| VRF | vrf | text |     | Yes |
| VRF Capacity | vrf\_capacity | int |     | Yes |
| VRF Capacity (Unit) | vrf\_capacity\_unit | int |     | Yes |
| Description | description | text\_area |     | Yes |

### Assigned ports (C\_\_CATS\_\_LAYER2\_NET\_ASSIGNED\_PORTS)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Object title | isys\_obj\_\_id | int |     | Yes |
| Assigned ports | isys\_catg\_port\_list\_\_id | int |     | Yes |
| MAC-address | isys\_catg\_port\_list\_\_mac | int |     | Yes |

### Contract (C\_\_CATS\_\_CONTRACT)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Contract type | type | int | isys\_contract\_type\_\_id | Yes |
| Contract id | contract\_no | text |     | Yes |
| Customer id | customer\_no | text |     | Yes |
| Internal id | internal\_no | text |     | Yes |
| Costs | costs | double |     | Yes |
| Cost calculation | cost\_calculation | text |     | Yes |
| Product | product | text |     | Yes |
| Reaction rate | reaction\_rate | int | isys\_contract\_reaction\_rate\_\_id | Yes |
| Contract status | contract\_status | int | isys\_contract\_status\_\_id | Yes |
| Start of contract | start\_date | date |     | Yes |
| End of contract | end\_date | date |     | Yes |
| Runtime | run\_time | int |     | Yes |
| Runtime unit | run\_time\_unit | int | isys\_guarantee\_period\_unit\_\_id | Yes |
| Possible next contract expires | next\_contract\_end\_date | text |     | Yes |
| End of contract by | end\_type | int | isys\_contract\_end\_type\_\_id | Yes |
| Possible next termination date | next\_notice\_end\_date | text |     | Yes |
| Cancellation date | notice\_date | date |     | Yes |
| Cancellation period | notice\_period | int |     | Yes |
| Notice period unit | notice\_period\_unit | int | isys\_guarantee\_period\_unit\_\_id | Yes |
| Notice type | notice\_type | int | isys\_contract\_notice\_period\_type\_\_id | Yes |
| Maintenance-/guarantee period | maintenance\_period | int |     | Yes |
| Deadline unit | maintenance\_period\_unit | int | isys\_guarantee\_period\_unit\_\_id | Yes |
| Payment period | payment\_period | int | isys\_contract\_payment\_period\_\_id | Yes |
| Description | description | text\_area |     | Yes |

### Contract information (C\_\_CATS\_\_CONTRACT\_INFORMATION)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Contract type | type | int | isys\_contract\_type\_\_id | Yes |
| Contract id | contract\_no | text |     | Yes |
| Customer id | customer\_no | text |     | Yes |
| Internal id | internal\_no | text |     | Yes |
| Costs | costs | double |     | Yes |
| Cost calculation | cost\_calculation | text |     | Yes |
| Product | product | text |     | Yes |
| Reaction rate | reaction\_rate | int | isys\_contract\_reaction\_rate\_\_id | Yes |
| Contract status | contract\_status | int | isys\_contract\_status\_\_id | Yes |
| Start of contract | start\_date | date |     | Yes |
| End of contract | end\_date | date |     | Yes |
| Runtime | run\_time | int |     | Yes |
| Runtime unit | run\_time\_unit | int | isys\_guarantee\_period\_unit\_\_id | Yes |
| Possible next contract expires | next\_contract\_end\_date | text |     | Yes |
| End of contract by | end\_type | int | isys\_contract\_end\_type\_\_id | Yes |
| Possible next termination date | next\_notice\_end\_date | text |     | Yes |
| Cancellation date | notice\_date | date |     | Yes |
| Cancellation period | notice\_period | int |     | Yes |
| Notice period unit | notice\_period\_unit | int | isys\_guarantee\_period\_unit\_\_id | Yes |
| Notice type | notice\_type | int | isys\_contract\_notice\_period\_type\_\_id | Yes |
| Maintenance-/guarantee period | maintenance\_period | int |     | Yes |
| Deadline unit | maintenance\_period\_unit | int | isys\_guarantee\_period\_unit\_\_id | Yes |
| Payment period | payment\_period | int | isys\_contract\_payment\_period\_\_id | Yes |
| Description | description | text\_area |     | Yes |

### Assigned Objects (C\_\_CATS\_\_CONTRACT\_ALLOCATION)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Assigned objects | assigned\_object | int |     | Yes |

### Chassis (C\_\_CATS\_\_CHASSIS)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Front horizontal units | front\_x | int |     | Yes |
| Front vertical units | front\_y | int |     | Yes |
| Front grid size | front\_size | int |     | Yes |
| Rear horizontal units | rear\_x | int |     | Yes |
| Rear vertical units | rear\_y | int |     | Yes |
| Rear grid size | rear\_size | int |     | Yes |
| Description | description | text\_area |     | Yes |

### Slots (C\_\_CATS\_\_CHASSIS\_SLOT)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Connector type | connector\_type | int | isys\_chassis\_connector\_type\_\_id | Yes |
| Insertion | insertion | int |     | Yes |
| Slot title | title | text |     | Yes |
| Horizontal position | from\_x | int |     | Yes |
| To horizontal position | to\_x | int |     | Yes |
| Vertical position | from\_y | int |     | Yes |
| To vertical position | to\_y | int |     | Yes |
| Device assignment | assigned\_devices | int |     | Yes |
| Description | description | text\_area |     | Yes |

### Assigned devices (C\_\_CATS\_\_CHASSIS\_DEVICES)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Role | role | int | isys\_chassis\_role\_\_id | Yes |
| Device assignment | assigned\_device | int | isys\_connection\_\_id | Yes |
| Device assignment (Hostadapter) | assigned\_hba | int | isys\_catg\_hba\_list\_\_id | Yes |
| Device assignment (Interface) | assigned\_interface | int | isys\_catg\_netp\_list\_\_id | Yes |
| Device assignment (Power consumer) | assigned\_power\_consumer | int | isys\_catg\_pc\_list\_\_id | Yes |
| Assigned to | assigned\_slots | int |     | Yes |
| Description | description | text\_area |     | Yes |

### Chassis view (C\_\_CATS\_\_CHASSIS\_VIEW)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Front horizontal units | front\_x | int |     | Yes |
| Front vertical units | front\_y | int |     | Yes |
| Front grid size | front\_size | int |     | Yes |
| Rear horizontal units | rear\_x | int |     | Yes |
| Rear vertical units | rear\_y | int |     | Yes |
| Rear grid size | rear\_size | int |     | Yes |
| Description | description | text\_area |     | Yes |

### Variants (C\_\_CATS\_\_APPLICATION\_VARIANT)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Title | title | text |     | Yes |
| Variant | variant | text |     | Yes |
| Description | description | text\_area |     | Yes |

### Nagios (C\_\_CATS\_\_PERSON\_NAGIOS)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Alias | alias | text |     | Yes |
| contact\_name | contact\_name | text |     | Yes |
| contact\_name selection | contact\_name\_selection | int |     | Yes |
| host\_notification\_enabled | host\_notification\_enabled | int |     | Yes |
| service\_notification\_enabled | service\_notification\_enabled | int |     | Yes |
| host\_notification\_period | host\_notification\_period | int |     | Yes |
| host\_notification\_period+ | host\_notification\_period\_plus | int | isys\_nagios\_timeperiods\_plus\_\_id | Yes |
| service\_notification\_period | service\_notification\_period | int |     | Yes |
| service\_notification\_period+ | service\_notification\_period\_plus | int | isys\_nagios\_timeperiods\_plus\_\_id | Yes |
| host\_notification\_options | host\_notification\_options | text |     | Yes |
| service\_notification\_options | service\_notification\_options | text |     | Yes |
| host\_notification\_commands | host\_notification\_commands | text |     | Yes |
| service\_notification\_commands | service\_notification\_commands | text |     | Yes |
| can\_submit\_commands | can\_submit\_commands | int |     | Yes |
| retain\_status\_information | retain\_status\_information | int |     | Yes |
| Export this configuration | is\_exportable | int |     | Yes |
| retain\_nonstatus\_information | retain\_nonstatus\_information | int |     | Yes |
| custom\_object\_vars | custom\_object\_vars | text\_area |     | Yes |
| Description | description | text\_area |     | Yes |

### Nagios (C\_\_CATS\_\_PERSON\_GROUP\_NAGIOS)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Export this configuration | is\_exportable | int |     | Yes |
| alias | alias | text |     | Yes |
| Description | description | text\_area |     | Yes |

### Type (C\_\_CATS\_\_GROUP\_TYPE)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Typ | group\_type | int |     | Yes |
| Report | report | int |     | Yes |
| Description | description | text\_area |     | Yes |

### Assigned logical ports (C\_\_CATS\_\_LAYER2\_NET\_ASSIGNED\_LOGICAL\_PORTS)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Object title | isys\_obj\_\_id | int |     | Yes |
| Assigned logical ports | isys\_catg\_log\_port\_list\_\_id | int |     | Yes |

### Installation (C\_\_CATS\_\_APPLICATION\_SERVICE\_ASSIGNED\_OBJ)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Installed on | object | int |     | No  |
| Type | application\_type | int | isys\_catg\_application\_type\_\_id | Yes |
| Priority | application\_priority | int | isys\_catg\_application\_priority\_\_id | Yes |
| Assigned license | assigned\_license | int | isys\_cats\_lic\_list\_\_id | Yes |
| Assigned license key | assigned\_license\_key | text | isys\_cats\_lic\_list\_\_id | Yes |
| Database schema | assigned\_database\_schema | int | isys\_cats\_database\_access\_list\_\_id | Yes |
| Service | assigned\_it\_service | int | isys\_catg\_its\_components\_list\_\_id | Yes |
| Variant | assigned\_variant | int | isys\_cats\_app\_variant\_list\_\_id | Yes |
| Inherit nagios services | bequest\_nagios\_services | int |     | Yes |
| Description | description | text\_area |     | Yes |

### Installation (C\_\_CATS\_\_APPLICATION\_DBMS\_ASSIGNED\_OBJ)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Installed on | object | int |     | No  |
| Type | application\_type | int | isys\_catg\_application\_type\_\_id | Yes |
| Priority | application\_priority | int | isys\_catg\_application\_priority\_\_id | Yes |
| Assigned license | assigned\_license | int | isys\_cats\_lic\_list\_\_id | Yes |
| Assigned license key | assigned\_license\_key | text | isys\_cats\_lic\_list\_\_id | Yes |
| Database schema | assigned\_database\_schema | int | isys\_cats\_database\_access\_list\_\_id | Yes |
| Service | assigned\_it\_service | int | isys\_catg\_its\_components\_list\_\_id | Yes |
| Variant | assigned\_variant | int | isys\_cats\_app\_variant\_list\_\_id | Yes |
| Inherit nagios services | bequest\_nagios\_services | int |     | Yes |
| Description | description | text\_area |     | Yes |

### Net zone (C\_\_CATS\_\_NET\_ZONE)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Net zone objekt | zone | int | isys\_obj\_\_id | Yes |
| Zone from | range\_from | text |     | Yes |
| Zone from | range\_from\_long | text |     | Yes |
| Zone to | range\_to | text |     | Yes |
| Zone to | range\_to\_long | text |     | Yes |
| Description | description | text\_area |     | Yes |

### Operating Systems (C\_\_CATS\_\_OPERATING\_SYSTEM)

| Field name | Key | Data type | Reference | Optional |
| --- | --- | --- | --- | --- |
| Specification | specification | text |     | Yes |
| Manufacturer | manufacturer | int | isys\_application\_manufacturer\_\_id | Yes |
| Installation | installation | int | isys\_installation\_type\_\_id | Yes |
| Registration key | registration\_key | text |     | Yes |
| Install path | install\_path | text |     | Yes |
| Amount of installations | installation\_count | int |     | Yes |
| Description | description | text\_area |     | Yes |