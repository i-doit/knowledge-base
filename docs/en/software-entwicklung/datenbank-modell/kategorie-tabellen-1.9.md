---
title: "Category Tables 1.9"
description: "Via the URL parameter load=property_infos the category tables for the currently installed version of i-doit are created."
icon:
status:
lang: en
---
# category-tablen 1.9

!!! info "Create this content automatically"

    Via the URL parameter load=property_infos, the category tables for the currently installed version of i-doit are created. A user must be logged in. Example: [https://demo.i-doit.com/?load=property_infos](https://demo.i-doit.com/?load=property_infos)

Global Categories
------------------

### Allgemein

#### table: isys\_catg\_global\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| ID  | int | isys\_obj | isys\_obj\_\_id |     |     |
| designation | text | isys\_obj | isys\_obj\_\_title |     |     |
| Status | int | isys\_catg\_global\_list | isys\_obj\_\_status |     |     |
| creationsdatum | text | isys\_obj | isys\_obj\_\_created |     |     |
| Erprovides von | text | isys\_obj | isys\_obj\_\_created\_by |     |     |
| Letzte Change | text | isys\_obj | isys\_obj\_\_updated |     |     |
| Letzte Change durch | text | isys\_obj | isys\_obj\_\_updated\_by |     |     |
| Einsatzzweck | int | isys\_catg\_global\_list | isys\_catg\_global\_list\_\_isys\_purpose\_\_id | isys\_purpose | isys\_purpose\_\_id |
| category | int | isys\_catg\_global\_list | isys\_catg\_global\_list\_\_isys\_catg\_global\_category\_\_id | isys\_catg\_global\_category | isys\_catg\_global\_category\_\_id |
| SYSID | text | isys\_obj | isys\_obj\_\_sysid |     |     |
| CMDB-Status | int | isys\_catg\_global\_list | isys\_obj\_\_isys\_cmdb\_status\_\_id | isys\_cmdb\_status | isys\_cmdb\_status\_\_id |
| objecttyp | int | isys\_catg\_global\_list | isys\_obj\_\_isys\_obj\_type\_\_id | isys\_obj\_type | isys\_obj\_type\_\_id |
| Tags | int | global\_tag | isys\_obj\_\_id | isys\_tag\_2\_isys\_obj | isys\_obj\_\_id |
| Description | text\_area | isys\_obj | isys\_obj\_\_description |     |     |

### Modell

#### table: isys\_catg\_model\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Hfirstller | int | isys\_catg\_model\_list | isys\_catg\_model\_list\_\_isys\_model\_manufacturer\_\_id | isys\_model\_manufacturer | isys\_model\_manufacturer\_\_id |
| Modell | int | isys\_catg\_model\_list | isys\_catg\_model\_list\_\_isys\_model\_title\_\_id | isys\_model\_title | isys\_model\_title\_\_id |
| Produkt-ID | text | isys\_catg\_model\_list | isys\_catg\_model\_list\_\_productid |     |     |
| Service Tag | text | isys\_catg\_model\_list | isys\_catg\_model\_list\_\_service\_tag |     |     |
| Serial number | text | isys\_catg\_model\_list | isys\_catg\_model\_list\_\_serial |     |     |
| Firmware | text | isys\_catg\_model\_list | isys\_catg\_model\_list\_\_firmware |     |     |
| Description | text\_area | isys\_catg\_model\_list | isys\_catg\_model\_list\_\_description |     |     |

### Formfaktor

#### table: isys\_catg\_formfactor\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Formfaktor | int | isys\_catg\_formfactor\_list | isys\_catg\_formfactor\_list\_\_isys\_catg\_formfactor\_type\_\_id | isys\_catg\_formfactor\_type | isys\_catg\_formfactor\_type\_\_id |
| heightneinheiten | int | isys\_catg\_formfactor\_list | isys\_catg\_formfactor\_list\_\_rackunits |     |     |
| unit of measurement | int | isys\_catg\_formfactor\_list | isys\_catg\_formfactor\_list\_\_isys\_depth\_unit\_\_id | isys\_depth\_unit | isys\_depth\_unit\_\_id |
| Breite | float | isys\_catg\_formfactor\_list | isys\_catg\_formfactor\_list\_\_installation\_width |     |     |
| height | float | isys\_catg\_formfactor\_list | isys\_catg\_formfactor\_list\_\_installation\_height |     |     |
| Tiefe | float | isys\_catg\_formfactor\_list | isys\_catg\_formfactor\_list\_\_installation\_depth |     |     |
| Gewicht | float | isys\_catg\_formfactor\_list | isys\_catg\_formfactor\_list\_\_installation\_weight |     |     |
| Gewichtseinheit | int | isys\_catg\_formfactor\_list | isys\_catg\_formfactor\_list\_\_isys\_weight\_unit\_\_id | isys\_weight\_unit | isys\_weight\_unit\_\_id |
| Description | text\_area | isys\_catg\_formfactor\_list | isys\_catg\_formfactor\_list\_\_description |     |     |

### CPU

#### table: isys\_catg\_cpu\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| designation | text | isys\_catg\_cpu\_list | isys\_catg\_cpu\_list\_\_title |     |     |
| Hfirstller | int | isys\_catg\_cpu\_list | isys\_catg\_cpu\_list\_\_isys\_catg\_cpu\_manufacturer\_\_id | isys\_catg\_cpu\_manufacturer | isys\_catg\_cpu\_manufacturer\_\_id |
| Typ | int | isys\_catg\_cpu\_list | isys\_catg\_cpu\_list\_\_isys\_catg\_cpu\_type\_\_id | isys\_catg\_cpu\_type | isys\_catg\_cpu\_type\_\_id |
| CPU-Frequenz | float | isys\_catg\_cpu\_list | isys\_catg\_cpu\_list\_\_frequency |     |     |
| CPU-Frequenz Einheit | int | isys\_catg\_cpu\_list | isys\_catg\_cpu\_list\_\_isys\_frequency\_unit\_\_id | isys\_frequency\_unit | isys\_frequency\_unit\_\_id |
| CPU-Kerne | int | isys\_catg\_cpu\_list | isys\_catg\_cpu\_list\_\_cores |     |     |
| Description | text\_area | isys\_catg\_cpu\_list | isys\_catg\_cpu\_list\_\_description |     |     |

### Speicher

#### table: isys\_catg\_memory\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Anzahl | int | isys\_catg\_memory\_list | isys\_catg\_memory\_list\_\_quantity |     |     |
| designation | int | isys\_catg\_memory\_list | isys\_catg\_memory\_list\_\_isys\_memory\_title\_\_id | isys\_memory\_title | isys\_memory\_title\_\_id |
| Hfirstller | int | isys\_catg\_memory\_list | isys\_catg\_memory\_list\_\_isys\_memory\_manufacturer\_\_id | isys\_memory\_manufacturer | isys\_memory\_manufacturer\_\_id |
| Typ | int | isys\_catg\_memory\_list | isys\_catg\_memory\_list\_\_isys\_memory\_type\_\_id | isys\_memory\_type | isys\_memory\_type\_\_id |
| total capacity | float | isys\_catg\_memory\_list | isys\_catg\_memory\_list\_\_capacity |     |     |
| capacity | float | isys\_catg\_memory\_list | isys\_catg\_memory\_list\_\_capacity |     |     |
| Speichereinheit | int | isys\_catg\_memory\_list | isys\_catg\_memory\_list\_\_isys\_memory\_unit\_\_id | isys\_memory\_unit | isys\_memory\_unit\_\_id |
| Description | text\_area | isys\_catg\_memory\_list | isys\_catg\_memory\_list\_\_description |     |     |

### Netzwerk

#### table: isys\_catg\_netp\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| designation | text | isys\_catg\_netp\_list | isys\_catg\_netp\_list\_\_title |     |     |
| Hfirstller | int | isys\_catg\_netp\_list | isys\_catg\_netp\_list\_\_isys\_iface\_manufacturer\_\_id | isys\_iface\_manufacturer | isys\_iface\_manufacturer\_\_id |
| Modell | int | isys\_catg\_netp\_list | isys\_catg\_netp\_list\_\_isys\_iface\_model\_\_id | isys\_iface\_model | isys\_iface\_model\_\_id |
| Serial number | text | isys\_catg\_netp\_list | isys\_catg\_netp\_list\_\_serial |     |     |
| Slotnummer | text | isys\_catg\_netp\_list | isys\_catg\_netp\_list\_\_slotnumber |     |     |
| Description | text\_area | isys\_catg\_netp\_list | isys\_catg\_netp\_list\_\_description |     |     |

### Stromverbraucher

#### table: isys\_catg\_pc\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| designation | text | isys\_catg\_pc\_list | isys\_catg\_pc\_list\_\_title |     |     |
| Aktiv | int | isys\_catg\_pc\_list | isys\_catg\_pc\_list\_\_active |     |     |
| Hfirstller | int | isys\_catg\_pc\_list | isys\_catg\_pc\_list\_\_isys\_pc\_manufacturer\_\_id | isys\_pc\_manufacturer | isys\_pc\_manufacturer\_\_id |
| Modell | int | isys\_catg\_pc\_list | isys\_catg\_pc\_list\_\_isys\_pc\_model\_\_id | isys\_pc\_model | isys\_pc\_model\_\_id |
| Volt | text | isys\_catg\_pc\_list | isys\_catg\_pc\_list\_\_volt |     |     |
| Watt | text | isys\_catg\_pc\_list | isys\_catg\_pc\_list\_\_watt |     |     |
| Ampere | text | isys\_catg\_pc\_list | isys\_catg\_pc\_list\_\_ampere |     |     |
| BTU | text | isys\_catg\_pc\_list | isys\_catg\_pc\_list\_\_btu |     |     |
| Zielobjekt | int | output | isys\_catg\_pc\_list\_\_isys\_catg\_connector\_list\_\_id |     |     |
| Connected to connector | int | connected | isys\_catg\_pc\_list\_\_isys\_catg\_connector\_list\_\_id |     |     |
| Associated Eingang/Ausgang | int | isys\_catg\_pc\_list | isys\_catg\_connector\_list\_\_isys\_catg\_connector\_list\_\_id |     |     |
| Description | text\_area | isys\_catg\_pc\_list | isys\_catg\_pc\_list\_\_description |     |     |

### interface

#### table: isys\_catg\_ui\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| designation | text | isys\_catg\_ui\_list | isys\_catg\_ui\_list\_\_title |     |     |
| connectionstyp | int | isys\_catg\_ui\_list | isys\_catg\_ui\_list\_\_isys\_ui\_con\_type\_\_id | isys\_ui\_con\_type | isys\_ui\_con\_type\_\_id |
| Anschlusstyp | int | isys\_catg\_ui\_list | isys\_catg\_ui\_list\_\_isys\_ui\_plugtype\_\_id | isys\_ui\_plugtype | isys\_ui\_plugtype\_\_id |
| Connected to | int | connected | isys\_catg\_ui\_list\_\_isys\_catg\_connector\_list\_\_id |     |     |
| Connected to connector | int | connected | isys\_catg\_ui\_list\_\_isys\_catg\_connector\_list\_\_id |     |     |
| Associated Eingang/Ausgang | int | isys\_catg\_ui\_list | isys\_catg\_connector\_list\_\_isys\_catg\_connector\_list\_\_id |     |     |
| Description | text\_area | isys\_catg\_ui\_list | isys\_catg\_ui\_list\_\_description |     |     |
| Relation direction | int | isys\_catg\_ui\_list | isys\_catg\_connector\_list\_\_isys\_catg\_relation\_list\_\_id |     |     |

### Softwarezuweisung

#### table: isys\_catg\_application\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Anwendung | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |
| Typ | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_catg\_application\_type\_\_id | isys\_catg\_application\_type | isys\_catg\_application\_type\_\_id |
| priority | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_catg\_application\_priority\_\_id | isys\_catg\_application\_priority | isys\_catg\_application\_priority\_\_id |
| Zugewiesene Lizenz | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_cats\_lic\_list\_\_id | isys\_cats\_lic\_list | isys\_cats\_lic\_list\_\_id |
| Zugewiesener license key | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_cats\_lic\_list\_\_id | isys\_cats\_lic\_list | isys\_cats\_lic\_list\_\_id |
| database schema | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_catg\_relation\_list\_\_id | isys\_cats\_database\_access\_list | isys\_cats\_database\_access\_list\_\_id |
| Service | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_catg\_relation\_list\_\_id | isys\_catg\_its\_components\_list | isys\_catg\_its\_components\_list\_\_id |
| Variante | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_cats\_app\_variant\_list\_\_id | isys\_cats\_app\_variant\_list | isys\_cats\_app\_variant\_list\_\_id |
| Versionsnummer | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_catg\_version\_list\_\_id | isys\_catg\_version\_list | isys\_catg\_version\_list\_\_id |
| Nagios services vererben | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_bequest\_nagios\_services |     |     |
| Description | text\_area | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_description |     |     |

### Zugriff

#### table: isys\_catg\_access\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Primarye Accesss-URL | text | isys\_catg\_access\_list | isys\_catg\_access\_list\_\_url |     |     |
| designation | text | isys\_catg\_access\_list | isys\_catg\_access\_list\_\_title |     |     |
| Zugriffstyp | int | isys\_catg\_access\_list | isys\_catg\_access\_list\_\_isys\_access\_type\_\_id | isys\_access\_type | isys\_access\_type\_\_id |
| Host\[:Port\]/URL | text | isys\_catg\_access\_list | isys\_catg\_access\_list\_\_url |     |     |
| Host\[:Port\]/URL | text | isys\_catg\_access\_list | isys\_catg\_access\_list\_\_id |     |     |
| Primary | int | isys\_catg\_access\_list | isys\_catg\_access\_list\_\_primary |     |     |
| Description | text\_area | isys\_catg\_access\_list | isys\_catg\_access\_list\_\_description |     |     |

### Datensicherung

#### table: isys\_catg\_backup\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| designation | text | isys\_catg\_backup\_list | isys\_catg\_backup\_list\_\_title |     |     |
| Wird gesichert von | int | isys\_catg\_backup\_list | isys\_catg\_backup\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |
| Art des Backups | int | isys\_catg\_backup\_list | isys\_catg\_backup\_list\_\_isys\_backup\_type\_\_id | isys\_backup\_type | isys\_backup\_type\_\_id |
| Zyklus | int | isys\_catg\_backup\_list | isys\_catg\_backup\_list\_\_isys\_backup\_cycle\_\_id | isys\_backup\_cycle | isys\_backup\_cycle\_\_id |
| path for zu sichernde Daten | text | isys\_catg\_backup\_list | isys\_catg\_backup\_list\_\_path\_to\_save |     |     |
| Description | text\_area | isys\_catg\_backup\_list | isys\_catg\_backup\_list\_\_description |     |     |

### Notfallplanzuweisung

#### table: isys\_catg\_emergency\_plan\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| designation | text | isys\_catg\_emergency\_plan\_list | isys\_catg\_emergency\_plan\_list\_\_title |     |     |
| Zugewiesener Notfallplan | int | isys\_catg\_emergency\_plan\_list | isys\_catg\_emergency\_plan\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |
| Zeitbedarf | text | isys\_catg\_emergency\_plan\_list | isys\_catg\_emergency\_plan\_list\_\_id |     |     |
| Zeitbedarf (Einheit) | text | isys\_catg\_emergency\_plan\_list | isys\_catg\_emergency\_plan\_list\_\_id |     |     |
| date emergency exercise | text | isys\_catg\_emergency\_plan\_list | isys\_catg\_emergency\_plan\_list\_\_id |     |     |
| Description | text\_area | isys\_catg\_emergency\_plan\_list | isys\_catg\_emergency\_plan\_list\_\_description |     |     |

### fileen

#### table: isys\_catg\_file\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| file | int | isys\_catg\_file\_list | isys\_catg\_file\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |
| Revision | int | isys\_catg\_file\_list | isys\_file\_version\_\_revision |     |     |
| HTTP-Link (extern) | text | isys\_catg\_file\_list | isys\_catg\_file\_list\_\_link |     |     |
| Description | text\_area | isys\_catg\_file\_list | isys\_catg\_file\_list\_\_description |     |     |

### Kontaktzuweisung

#### table: isys\_catg\_contact\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Kontakt | int | isys\_catg\_contact\_list | isys\_catg\_contact\_list\_\_id |     |     |
| Primaryer Kontakt | int | isys\_catg\_contact\_list | isys\_catg\_contact\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |
| Kontakt | int | isys\_catg\_contact\_list | isys\_catg\_contact\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |
| Primary | int | isys\_catg\_contact\_list | isys\_catg\_contact\_list\_\_primary\_contact |     |     |
| Rolle | int | isys\_catg\_contact\_list | isys\_catg\_contact\_list\_\_isys\_contact\_tag\_\_id | isys\_contact\_tag | isys\_contact\_tag\_\_id |
| Kontakte | text | isys\_catg\_contact\_list | isys\_catg\_contact\_list\_\_isys\_connection\_\_id |     |     |
| Description | text\_area | isys\_catg\_contact\_list | isys\_catg\_contact\_list\_\_description |     |     |

### logbook

#### table: isys\_catg\_logb\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Datum | date\_time | isys\_catg\_logb\_list | isys\_logbook\_\_date |     |     |
| object | int | isys\_catg\_logb\_list | isys\_catg\_logb\_list\_\_isys\_obj\_\_id |     |     |
| Ereignis | int | isys\_catg\_logb\_list | isys\_logbook\_\_isys\_logbook\_event\_\_id | isys\_logbook\_event | isys\_logbook\_event\_\_id |
| Quelle | int | isys\_catg\_logb\_list | isys\_logbook\_\_isys\_logbook\_source\_\_id | isys\_logbook\_source | isys\_logbook\_source\_\_id |
| user | int | isys\_catg\_logb\_list | isys\_logbook\_\_isys\_obj\_\_id |     |     |
| objecttyp | text | isys\_catg\_logb\_list | isys\_logbook\_\_obj\_type\_static |     |     |
| category | text | isys\_catg\_logb\_list | isys\_logbook\_\_category\_static |     |     |
| Alarmlevel | text | isys\_catg\_logb\_list | isys\_logbook\_\_isys\_logbook\_level\_\_id | isys\_logbook\_level | isys\_logbook\_level\_\_id |
| user | text | isys\_catg\_logb\_list | isys\_logbook\_\_user\_name\_static |     |     |
| Ereignis | text | isys\_catg\_logb\_list | isys\_logbook\_\_event\_static |     |     |
| Kommentar | text | isys\_catg\_logb\_list | isys\_logbook\_\_comment |     |     |
| Changeen | text | isys\_catg\_logb\_list | isys\_logbook\_\_changes |     |     |
| Description | text\_area | isys\_catg\_logb\_list | isys\_catg\_logb\_list\_\_description |     |     |
| Zugriffstyp | int | isys\_catg\_logb\_list | isys\_logbook\_\_isys\_logbook\_reason\_\_id | isys\_logbook\_reason | isys\_logbook\_reason\_\_id |

### Controller

#### table: isys\_catg\_controller\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| designation | text | isys\_catg\_controller\_list | isys\_catg\_controller\_list\_\_title |     |     |
| Typ | int | isys\_catg\_controller\_list | isys\_catg\_controller\_list\_\_isys\_controller\_type\_\_id | isys\_controller\_type | isys\_controller\_type\_\_id |
| Hfirstller | int | isys\_catg\_controller\_list | isys\_catg\_controller\_list\_\_isys\_controller\_manufacturer\_\_id | isys\_controller\_manufacturer | isys\_controller\_manufacturer\_\_id |
| Modell | int | isys\_catg\_controller\_list | isys\_catg\_controller\_list\_\_isys\_controller\_model\_\_id | isys\_controller\_model | isys\_controller\_model\_\_id |
| Description | text\_area | isys\_catg\_controller\_list | isys\_catg\_controller\_list\_\_description |     |     |

### Standort

#### table: isys\_catg\_location\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Standort-path | text | isys\_catg\_location\_list | isys\_catg\_location\_list\_\_parentid |     |     |
| Standort | int | isys\_catg\_location\_list | isys\_catg\_location\_list\_\_parentid |     |     |
| Montage | int | isys\_catg\_location\_list | isys\_catg\_location\_list\_\_option |     |     |
| Einschub | int | isys\_catg\_location\_list | isys\_catg\_location\_list\_\_insertion |     |     |
| Position im Schrank | int | isys\_catg\_location\_list | isys\_catg\_location\_list\_\_pos |     |     |
| GPS | text | isys\_catg\_location\_list | isys\_catg\_location\_list\_\_gps |     |     |
| Breitengrad | text | isys\_catg\_location\_list | isys\_catg\_location\_list\_\_gps |     |     |
| lengthngrad | text | isys\_catg\_location\_list | isys\_catg\_location\_list\_\_gps |     |     |
| Description | text\_area | isys\_catg\_location\_list | isys\_catg\_location\_list\_\_description |     |     |

### objectbild

#### table: isys\_catg\_image\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Hochgeladene Bilder | int | isys\_catg\_image\_list | isys\_catg\_image\_list\_\_image\_link |     |     |
| file | text | isys\_catg\_image\_list | isys\_catg\_image\_list\_\_image\_link |     |     |
| Description | text\_area | isys\_catg\_image\_list | isys\_catg\_image\_list\_\_description |     |     |

### Handbuchzuweisung

#### table: isys\_catg\_manual\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| designation | text | isys\_catg\_manual\_list | isys\_catg\_manual\_list\_\_title |     |     |
| Handbuch file | int | isys\_catg\_manual\_list | isys\_catg\_manual\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |
| Description | text\_area | isys\_catg\_manual\_list | isys\_catg\_manual\_list\_\_description |     |     |

### Soundkarte

#### table: isys\_catg\_sound\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Hfirstller | int | isys\_catg\_sound\_list | isys\_catg\_sound\_list\_\_isys\_sound\_manufacturer\_\_id | isys\_sound\_manufacturer | isys\_sound\_manufacturer\_\_id |
| designation | text | isys\_catg\_sound\_list | isys\_catg\_sound\_list\_\_title |     |     |
| Description | text\_area | isys\_catg\_sound\_list | isys\_catg\_sound\_list\_\_description |     |     |

### Spatial assignede objects

#### table: isys\_catg\_virtual\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| object | int | isys\_catg\_virtual\_list | isys\_catg\_location\_list\_\_isys\_obj\_\_id |     |     |

### Grafikkarte

#### table: isys\_catg\_graphic\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| designation | text | isys\_catg\_graphic\_list | isys\_catg\_graphic\_list\_\_title |     |     |
| Hfirstller | int | isys\_catg\_graphic\_list | isys\_catg\_graphic\_list\_\_isys\_graphic\_manufacturer\_\_id | isys\_graphic\_manufacturer | isys\_graphic\_manufacturer\_\_id |
| Speicher | float | isys\_catg\_graphic\_list | isys\_catg\_graphic\_list\_\_memory |     |     |
| Speichereinheit | int | isys\_catg\_graphic\_list | isys\_catg\_graphic\_list\_\_isys\_memory\_unit\_\_id | isys\_memory\_unit | isys\_memory\_unit\_\_id |
| Description | text\_area | isys\_catg\_graphic\_list | isys\_catg\_graphic\_list\_\_description |     |     |

### Virtuelle Maschine

#### table: isys\_catg\_virtual\_machine\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Virtuelle Maschine | int | isys\_catg\_virtual\_machine\_list | isys\_catg\_virtual\_machine\_list\_\_vm |     |     |
| Runs auf Host | int | connection\_vm | isys\_catg\_virtual\_machine\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |
| Virtualisierungs-System | int | isys\_catg\_virtual\_machine\_list | isys\_catg\_virtual\_machine\_list\_\_isys\_vm\_type\_\_id | isys\_vm\_type | isys\_vm\_type\_\_id |
| Configurations file | text | isys\_catg\_virtual\_machine\_list | isys\_catg\_virtual\_machine\_list\_\_config\_file |     |     |
| Host im Cluster | int | isys\_catg\_virtual\_machine\_list | isys\_catg\_virtual\_machine\_list\_\_primary |     |     |
| Description | text\_area | isys\_catg\_virtual\_machine\_list | isys\_catg\_virtual\_machine\_list\_\_description |     |     |

### Buchhaltung

#### table: isys\_catg\_accounting\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Inventarnummer | text | isys\_catg\_accounting\_list | isys\_catg\_accounting\_list\_\_inventory\_no |     |     |
| Kostenstelle | int | isys\_catg\_accounting\_list | isys\_catg\_accounting\_list\_\_isys\_account\_\_id | isys\_account | isys\_account\_\_id |
| Rechnungsdatum | date | isys\_catg\_accounting\_list | isys\_catg\_accounting\_list\_\_acquirementdate |     |     |
| Eingekauft bei | int | isys\_catg\_accounting\_list | isys\_catg\_accounting\_list\_\_isys\_contact\_\_id | isys\_contact | isys\_contact\_\_id |
| Investitionskosten | double | isys\_catg\_accounting\_list | isys\_catg\_accounting\_list\_\_price |     |     |
| Betriebskosten | double | isys\_catg\_accounting\_list | isys\_catg\_accounting\_list\_\_operation\_expense |     |     |
| Betriebskosten (Einheit) | int | isys\_catg\_accounting\_list | isys\_catg\_accounting\_list\_\_isys\_interval\_\_id | isys\_interval | isys\_interval\_\_id |
| cost center | int | isys\_catg\_accounting\_list | isys\_catg\_accounting\_list\_\_isys\_catg\_accounting\_cost\_unit\_\_id | isys\_catg\_accounting\_cost\_unit | isys\_catg\_accounting\_cost\_unit\_\_id |
| Lieferschein-Nummer | text | isys\_catg\_accounting\_list | isys\_catg\_accounting\_list\_\_delivery\_note\_no |     |     |
| Beschaffungsart | int | isys\_catg\_accounting\_list | isys\_catg\_accounting\_list\_\_isys\_catg\_accounting\_procurement\_\_id | isys\_catg\_accounting\_procurement | isys\_catg\_accounting\_procurement\_\_id |
| Lieferdatum | date | isys\_catg\_accounting\_list | isys\_catg\_accounting\_list\_\_delivery\_date |     |     |
| Rechnungs-Nr. | text | isys\_catg\_accounting\_list | isys\_catg\_accounting\_list\_\_invoice\_no |     |     |
| Bestell-Nr. | text | isys\_catg\_accounting\_list | isys\_catg\_accounting\_list\_\_order\_no |     |     |
| Garantiezeitraum | int | isys\_catg\_accounting\_list | isys\_catg\_accounting\_list\_\_guarantee\_period |     |     |
| Garantiezeitraum Einheit | int | isys\_catg\_accounting\_list | isys\_catg\_accounting\_list\_\_isys\_guarantee\_period\_unit\_\_id | isys\_guarantee\_period\_unit | isys\_guarantee\_period\_unit\_\_id |
| Restgarantie | text | isys\_catg\_accounting\_list | isys\_catg\_accounting\_list\_\_id |     |     |
| Garantiezeitraum nach | int | isys\_catg\_accounting\_list | isys\_catg\_accounting\_list\_\_guarantee\_period\_base |     |     |
| Bestelldatum | date | isys\_catg\_accounting\_list | isys\_catg\_accounting\_list\_\_order\_date |     |     |
| Garantiedatum | date | isys\_catg\_accounting\_list | isys\_catg\_accounting\_list\_\_id |     |     |
| Description | text\_area | isys\_catg\_accounting\_list | isys\_catg\_accounting\_list\_\_description |     |     |

### Port

#### table: isys\_catg\_port\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| designation | text | isys\_catg\_port\_list | isys\_catg\_port\_list\_\_title |     |     |
| Linked Interface | int | isys\_catg\_port\_list | isys\_catg\_port\_list\_\_isys\_catg\_netp\_list\_\_id | isys\_catg\_netp\_list | isys\_catg\_netp\_list\_\_id |
| Typ | int | isys\_catg\_port\_list | isys\_catg\_port\_list\_\_isys\_port\_type\_\_id | isys\_port\_type | isys\_port\_type\_\_id |
| Modus | int | isys\_catg\_port\_list | isys\_catg\_port\_list\_\_isys\_port\_mode\_\_id | isys\_port\_mode | isys\_port\_mode\_\_id |
| Stecker | int | isys\_catg\_port\_list | isys\_catg\_port\_list\_\_isys\_plug\_type\_\_id | isys\_plug\_type | isys\_plug\_type\_\_id |
| Negotiation | int | isys\_catg\_port\_list | isys\_catg\_port\_list\_\_isys\_port\_negotiation\_\_id | isys\_port\_negotiation | isys\_port\_negotiation\_\_id |
| Duplex | int | isys\_catg\_port\_list | isys\_catg\_port\_list\_\_isys\_port\_duplex\_\_id | isys\_port\_duplex | isys\_port\_duplex\_\_id |
| Geschwindigkeit | float | isys\_catg\_port\_list | isys\_catg\_port\_list\_\_port\_speed\_value |     |     |
| Einheit | int | isys\_catg\_port\_list | isys\_catg\_port\_list\_\_isys\_port\_speed\_\_id | isys\_port\_speed | isys\_port\_speed\_\_id |
| default | int | isys\_catg\_port\_list | isys\_catg\_port\_list\_\_isys\_port\_standard\_\_id | isys\_port\_standard | isys\_port\_standard\_\_id |
| MAC-Adresse | text | isys\_catg\_port\_list | isys\_catg\_port\_list\_\_mac |     |     |
| MTU | text | isys\_catg\_port\_list | isys\_catg\_port\_list\_\_mtu |     |     |
| Connected to | int | connected\_connector | isys\_catg\_port\_list\_\_isys\_catg\_connector\_list\_\_id |     |     |
| Connected to connector | int | connected | isys\_catg\_port\_list\_\_isys\_catg\_connector\_list\_\_id |     |     |
| Associated Eingang/Ausgang | int | isys\_catg\_port\_list | isys\_catg\_connector\_list\_\_isys\_catg\_connector\_list\_\_id |     |     |
| Kabel-ID | int | isys\_catg\_port\_list | isys\_catg\_connector\_list\_\_isys\_cable\_connection\_\_id |     |     |
| Aktiv | int | isys\_catg\_port\_list | isys\_catg\_port\_list\_\_state\_enabled |     |     |
| Hostadresse | int | isys\_catg\_port\_list | isys\_catg\_port\_list\_\_id | isys\_catg\_ip\_list\_2\_isys\_catg\_port\_list | isys\_catg\_ip\_list\_2\_isys\_catg\_port\_list\_\_isys\_catg\_port\_list\_\_id |
| Layer-2-Netz | int | isys\_catg\_port\_list | isys\_catg\_port\_list\_\_id |     |     |
| Linked Interface (HBA) | int | isys\_catg\_port\_list | isys\_catg\_port\_list\_\_isys\_catg\_hba\_list\_\_id | isys\_catg\_hba\_list | isys\_catg\_hba\_list\_\_id |
| default VLAN | int | isys\_catg\_port\_list | isys\_catg\_port\_list\_\_id | isys\_cats\_layer2\_net\_assigned\_ports\_list | isys\_catg\_port\_list\_\_id |
| Description | text\_area | isys\_catg\_port\_list | isys\_catg\_port\_list\_\_description |     |     |
| Relation direction | int | isys\_catg\_port\_list | isys\_catg\_connector\_list\_\_isys\_catg\_relation\_list\_\_id |     |     |

### Interface

#### table: isys\_catg\_netp\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| designation | text | isys\_catg\_netp\_list | isys\_catg\_netp\_list\_\_title |     |     |
| Hfirstller | int | isys\_catg\_netp\_list | isys\_catg\_netp\_list\_\_isys\_iface\_manufacturer\_\_id | isys\_iface\_manufacturer | isys\_iface\_manufacturer\_\_id |
| Modell | int | isys\_catg\_netp\_list | isys\_catg\_netp\_list\_\_isys\_iface\_model\_\_id | isys\_iface\_model | isys\_iface\_model\_\_id |
| Serial number | text | isys\_catg\_netp\_list | isys\_catg\_netp\_list\_\_serial |     |     |
| Slotnummer | text | isys\_catg\_netp\_list | isys\_catg\_netp\_list\_\_slotnumber |     |     |
| Description | text\_area | isys\_catg\_netp\_list | isys\_catg\_netp\_list\_\_description |     |     |

### Logische Ports

#### table: isys\_catg\_log\_port\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| designation | text | isys\_catg\_log\_port\_list | isys\_catg\_log\_port\_list\_\_title |     |     |
| Netz(e) | int | isys\_catg\_log\_port\_list | isys\_catg\_log\_port\_list\_\_id |     |     |
| MAC | text | isys\_catg\_log\_port\_list | isys\_catg\_log\_port\_list\_\_mac |     |     |
| Typ | int | isys\_catg\_log\_port\_list | isys\_catg\_log\_port\_list\_\_isys\_netx\_ifacel\_type\_\_id | isys\_netx\_ifacel\_type | isys\_netx\_ifacel\_type\_\_id |
| Zuweisung | int | isys\_catg\_log\_port\_list | isys\_catg\_log\_port\_list\_\_id |     |     |
| Eltern-Port | int | log\_port | isys\_catg\_log\_port\_list\_\_parent | isys\_catg\_log\_port\_list | isys\_catg\_log\_port\_list\_\_id |
| default | int | isys\_catg\_log\_port\_list | isys\_catg\_log\_port\_list\_\_isys\_netp\_ifacel\_standard\_\_id | isys\_netp\_ifacel\_standard | isys\_netp\_ifacel\_standard\_\_id |
| Aktiv | int | isys\_catg\_log\_port\_list | isys\_catg\_log\_port\_list\_\_active |     |     |
| Hostadresse | int | isys\_catg\_log\_port\_list | isys\_catg\_log\_port\_list\_\_id |     |     |
| Connected to connector | int | isys\_catg\_log\_port\_list | isys\_catg\_log\_port\_list\_\_isys\_catg\_log\_port\_list\_\_id |     |     |
| Description | text\_area | isys\_catg\_log\_port\_list | isys\_catg\_log\_port\_list\_\_description |     |     |

### Laufwerk

#### table: isys\_catg\_drive\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Laufwerksbuchstabe | text | isys\_catg\_drive\_list | isys\_catg\_drive\_list\_\_driveletter |     |     |
| designation | text | isys\_catg\_drive\_list | isys\_catg\_drive\_list\_\_title |     |     |
| Systemlaufwerk | int | isys\_catg\_drive\_list | isys\_catg\_drive\_list\_\_system\_drive |     |     |
| filesystem | int | isys\_catg\_drive\_list | isys\_catg\_drive\_list\_\_isys\_filesystem\_type\_\_id | isys\_filesystem\_type | isys\_filesystem\_type\_\_id |
| capacity | float | isys\_catg\_drive\_list | isys\_catg\_drive\_list\_\_capacity |     |     |
| Speichereinheit | int | c\_unit | isys\_catg\_drive\_list\_\_isys\_memory\_unit\_\_id | isys\_memory\_unit | isys\_memory\_unit\_\_id |
| Serial number | text | isys\_catg\_drive\_list | isys\_catg\_drive\_list\_\_serial |     |     |
| Software-RAID-Gruppe | int | isys\_catg\_drive\_list | isys\_catg\_drive\_list\_\_id\_\_raid\_pool | isys\_catg\_raid\_list | isys\_catg\_raid\_list\_\_id |
| Typ | int | isys\_catg\_drive\_list | isys\_catg\_drive\_list\_\_isys\_catd\_drive\_type\_\_id | isys\_catd\_drive\_type | isys\_catd\_drive\_type\_\_id |
| Auf device | int | isys\_catg\_drive\_list | isys\_catg\_drive\_list\_\_isys\_catg\_stor\_list\_\_id | isys\_catg\_stor\_list | isys\_catg\_stor\_list\_\_id |
| Auf device | int | isys\_catg\_drive\_list | isys\_catg\_drive\_list\_\_isys\_catg\_raid\_list\_\_id | isys\_catg\_raid\_list | isys\_catg\_raid\_list\_\_id |
| Auf device | int | isys\_catg\_drive\_list | isys\_catg\_drive\_list\_\_isys\_catg\_ldevclient\_list\_\_id | isys\_catg\_ldevclient\_list | isys\_catg\_ldevclient\_list\_\_id |
| Konstante | text | isys\_catg\_drive\_list | isys\_catg\_drive\_list\_\_const |     |     |
| Freier Speicher | float | isys\_catg\_drive\_list | isys\_catg\_drive\_list\_\_free\_space |     |     |
| Speichereinheit | int | fs\_unit | isys\_catg\_drive\_list\_\_free\_space\_\_isys\_memory\_unit\_\_id | isys\_memory\_unit | isys\_memory\_unit\_\_id |
| Belegter Speicher | float | isys\_catg\_drive\_list | isys\_catg\_drive\_list\_\_used\_space |     |     |
| Speichereinheit | int | us\_unit | isys\_catg\_drive\_list\_\_used\_space\_\_isys\_memory\_unit\_\_id | isys\_memory\_unit | isys\_memory\_unit\_\_id |
| Description | text\_area | isys\_catg\_drive\_list | isys\_catg\_drive\_list\_\_description |     |     |

### device

#### table: isys\_catg\_stor\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Typ | int | isys\_catg\_stor\_list | isys\_catg\_stor\_list\_\_isys\_stor\_type\_\_id | isys\_stor\_type | isys\_stor\_type\_\_id |
| designation | text | isys\_catg\_stor\_list | isys\_catg\_stor\_list\_\_title |     |     |
| Hfirstller | int | isys\_catg\_stor\_list | isys\_catg\_stor\_list\_\_isys\_stor\_manufacturer\_\_id | isys\_stor\_manufacturer | isys\_stor\_manufacturer\_\_id |
| Modell | int | isys\_catg\_stor\_list | isys\_catg\_stor\_list\_\_isys\_stor\_model\_\_id | isys\_stor\_model | isys\_stor\_model\_\_id |
| Speichereinheit | int | isys\_catg\_stor\_list | isys\_catg\_stor\_list\_\_isys\_memory\_unit\_\_id | isys\_memory\_unit | isys\_memory\_unit\_\_id |
| capacity | double | isys\_catg\_stor\_list | isys\_catg\_stor\_list\_\_capacity |     |     |
| Hotspare | int | isys\_catg\_stor\_list | isys\_catg\_stor\_list\_\_hotspare |     |     |
| Anschluss | int | isys\_catg\_stor\_list | isys\_catg\_stor\_list\_\_isys\_stor\_con\_type\_\_id | isys\_stor\_con\_type | isys\_stor\_con\_type\_\_id |
| Controller | int | isys\_catg\_stor\_list | isys\_catg\_stor\_list\_\_isys\_catg\_controller\_list\_\_id | isys\_catg\_controller\_list | isys\_catg\_controller\_list\_\_id |
| Hardware-RAID-Gruppe | int | isys\_catg\_stor\_list | isys\_catg\_stor\_list\_\_isys\_catg\_raid\_list\_\_id | isys\_catg\_raid\_list | isys\_catg\_raid\_list\_\_id |
| Serial number | text | isys\_catg\_stor\_list | isys\_catg\_stor\_list\_\_serial |     |     |
| Description | text\_area | isys\_catg\_stor\_list | isys\_catg\_stor\_list\_\_description |     |     |
| LTO Typ | int | isys\_catg\_stor\_list | isys\_catg\_stor\_list\_\_isys\_stor\_lto\_type\_\_id | isys\_stor\_lto\_type | isys\_stor\_lto\_type\_\_id |
| FC Adresse | text | isys\_catg\_stor\_list | isys\_catg\_stor\_list\_\_fc\_address |     |     |
| Firmware | text | isys\_catg\_stor\_list | isys\_catg\_stor\_list\_\_firmware |     |     |

### FC-Port

#### table: isys\_catg\_fc\_port\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| designation | text | isys\_catg\_fc\_port\_list | isys\_catg\_fc\_port\_list\_\_title |     |     |
| Typ | int | isys\_catg\_fc\_port\_list | isys\_catg\_fc\_port\_list\_\_isys\_fc\_port\_type\_\_id | isys\_fc\_port\_type | isys\_fc\_port\_type\_\_id |
| Verbundener Controller | int | isys\_catg\_fc\_port\_list | isys\_catg\_fc\_port\_list\_\_isys\_catg\_hba\_list\_\_id | isys\_catg\_hba\_list | isys\_catg\_hba\_list\_\_id |
| Associated Eingang/Ausgang | int | isys\_catg\_fc\_port\_list | isys\_catg\_connector\_list\_\_isys\_catg\_connector\_list\_\_id |     |     |
| Medium | int | isys\_catg\_fc\_port\_list | isys\_catg\_fc\_port\_list\_\_isys\_fc\_port\_medium\_\_id | isys\_fc\_port\_medium | isys\_fc\_port\_medium\_\_id |
| Geschwindigkeit | int | isys\_catg\_fc\_port\_list | isys\_catg\_fc\_port\_list\_\_port\_speed |     |     |
| Geschwindigkeit Einheit | int | isys\_catg\_fc\_port\_list | isys\_catg\_fc\_port\_list\_\_isys\_port\_speed\_\_id | isys\_port\_speed | isys\_port\_speed\_\_id |
| Node WWN | text | isys\_catg\_fc\_port\_list | isys\_catg\_fc\_port\_list\_\_wwn |     |     |
| Port WW(P)N | text | isys\_catg\_fc\_port\_list | isys\_catg\_fc\_port\_list\_\_wwpn |     |     |
| SAN zone and link type | int | isys\_catg\_fc\_port\_list | isys\_catg\_fc\_port\_list\_\_id |     |     |
| Zielobjekt | int | isys\_catg\_fc\_port\_list | isys\_catg\_fc\_port\_list\_\_isys\_catg\_connector\_list\_\_id |     |     |
| Anschluss | int | connected | isys\_catg\_fc\_port\_list\_\_isys\_catg\_connector\_list\_\_id |     |     |
| connection | int | connected | isys\_catg\_fc\_port\_list\_\_isys\_catg\_connector\_list\_\_id |     |     |
| Description | text\_area | isys\_catg\_fc\_port\_list | isys\_catg\_fc\_port\_list\_\_description |     |     |
| Relation direction | int | isys\_catg\_fc\_port\_list | isys\_catg\_connector\_list\_\_isys\_catg\_relation\_list\_\_id |     |     |

### Hostadresse

#### table: isys\_catg\_ip\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Primarye Hostadresse | text | isys\_catg\_ip\_list | isys\_catg\_ip\_list\_\_isys\_cats\_net\_ip\_addresses\_list\_\_id | isys\_cats\_net\_ip\_addresses\_list | isys\_cats\_net\_ip\_addresses\_list\_\_id |
| Primaryer Hostname | text | isys\_catg\_ip\_list | isys\_catg\_ip\_list\_\_hostname |     |     |
| Typ | int | isys\_catg\_ip\_list | isys\_catg\_ip\_list\_\_isys\_net\_type\_\_id | isys\_net\_type | isys\_net\_type\_\_id |
| Primary | int | isys\_catg\_ip\_list | isys\_catg\_ip\_list\_\_primary |     |     |
| Aktiv | int | isys\_catg\_ip\_list | isys\_catg\_ip\_list\_\_active |     |     |
| Netz | int | isys\_catg\_ip\_list | isys\_cats\_net\_ip\_addresses\_list\_\_isys\_obj\_\_id |     |     |
| Netzbereich | int | isys\_catg\_ip\_list | isys\_catg\_ip\_list\_\_isys\_obj\_\_id\_\_zone |     |     |
| Adressvergabe IPv4 | int | isys\_catg\_ip\_list | isys\_catg\_ip\_list\_\_isys\_ip\_assignment\_\_id | isys\_ip\_assignment | isys\_ip\_assignment\_\_id |
| IPv4-Adresse | text | ipv4 | isys\_catg\_ip\_list\_\_isys\_cats\_net\_ip\_addresses\_list\_\_id | isys\_cats\_net\_ip\_addresses\_list | isys\_cats\_net\_ip\_addresses\_list\_\_id |
| Adressvergabe IPv6 | int | isys\_catg\_ip\_list | isys\_catg\_ip\_list\_\_isys\_ipv6\_assignment\_\_id | isys\_ipv6\_assignment | isys\_ipv6\_assignment\_\_id |
| IPv6 validitysbereich | int | isys\_catg\_ip\_list | isys\_catg\_ip\_list\_\_isys\_ipv6\_scope\_\_id | isys\_ipv6\_scope | isys\_ipv6\_scope\_\_id |
| IPv6-Adresse | text | ipv6 | isys\_catg\_ip\_list\_\_isys\_cats\_net\_ip\_addresses\_list\_\_id | isys\_cats\_net\_ip\_addresses\_list | isys\_cats\_net\_ip\_addresses\_list\_\_id |
| Hostadresse | text | isys\_catg\_ip\_list | isys\_catg\_ip\_list\_\_isys\_cats\_net\_ip\_addresses\_list\_\_id | isys\_cats\_net\_ip\_addresses\_list | isys\_cats\_net\_ip\_addresses\_list\_\_id |
| Hostname | text | isys\_catg\_ip\_list | isys\_catg\_ip\_list\_\_hostname |     |     |
| Domain | text | isys\_catg\_ip\_list | isys\_catg\_ip\_list\_\_domain |     |     |
| DNS Server | int | dns | isys\_catg\_ip\_list\_\_id | isys\_catg\_ip\_list\_2\_isys\_catg\_ip\_list | isys\_catg\_ip\_list\_\_id |
| DNS Server Adresse | text | dns | isys\_catg\_ip\_list\_\_id | isys\_catg\_ip\_list\_2\_isys\_catg\_ip\_list | isys\_catg\_ip\_list\_\_id |
| search domains | int | dns\_domain | isys\_catg\_ip\_list\_\_id | isys\_catg\_ip\_list\_2\_isys\_net\_dns\_domain | isys\_catg\_ip\_list\_\_id |
| Default gateway for the network | int | gateway | isys\_catg\_ip\_list\_\_id |     |     |
| Linked Port | int | isys\_catg\_ip\_list | isys\_catg\_ip\_list\_\_isys\_catg\_port\_list\_\_id | isys\_catg\_port\_list | isys\_catg\_port\_list\_\_id |
| Linked Port | int | isys\_catg\_ip\_list | isys\_catg\_ip\_list\_\_isys\_catg\_log\_port\_list\_\_id | isys\_catg\_log\_port\_list | isys\_catg\_log\_port\_list\_\_id |
| Hostadressen | text | isys\_catg\_ip\_list | isys\_catg\_ip\_list\_\_isys\_cats\_net\_ip\_addresses\_list\_\_id |     |     |
| Hostname (FQDN) | text | isys\_catg\_ip\_list | isys\_catg\_ip\_list\_\_id |     |     |
| Aliase | text | isys\_catg\_ip\_list | isys\_catg\_ip\_list\_\_id |     |     |
| Description | text\_area | isys\_catg\_ip\_list | isys\_catg\_ip\_list\_\_description |     |     |

### Version

#### table: isys\_catg\_version\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Versionsnummer | text | isys\_catg\_version\_list | isys\_catg\_version\_list\_\_title |     |     |
| Servicepack | text | isys\_catg\_version\_list | isys\_catg\_version\_list\_\_servicepack |     |     |
| Kernel | text | isys\_catg\_version\_list | isys\_catg\_version\_list\_\_kernel |     |     |
| Patchlevel | text | isys\_catg\_version\_list | isys\_catg\_version\_list\_\_hotfix |     |     |
| Description | text\_area | isys\_catg\_version\_list | isys\_catg\_version\_list\_\_description |     |     |

### connectors

#### table: isys\_catg\_connector\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| designation | text | isys\_catg\_connector\_list | isys\_catg\_connector\_list\_\_title |     |     |
| Ein-/Ausgang | int | isys\_catg\_connector\_list | isys\_catg\_connector\_list\_\_type |     |     |
| Leitungsnetz | int | isys\_catg\_connector\_list | isys\_catg\_connector\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |
| Interface | int | isys\_catg\_connector\_list | isys\_catg\_connector\_list\_\_isys\_interface\_\_id | isys\_interface | isys\_interface\_\_id |
| Faser / wavelengths | int | fiber\_wave\_lengths | isys\_catg\_connector\_list\_\_id | isys\_catg\_connector\_list\_2\_isys\_fiber\_wave\_length | isys\_catg\_connector\_list\_\_id |
| Anschlussart | int | isys\_catg\_connector\_list | isys\_catg\_connector\_list\_\_isys\_connection\_type\_\_id | isys\_connection\_type | isys\_connection\_type\_\_id |
| Connected to connector | int | connected\_connector | isys\_catg\_connector\_list\_\_id |     |     |
| Associated categorytyp | text | isys\_catg\_connector\_list | isys\_catg\_connector\_list\_\_assigned\_category |     |     |
| Kabel | int | isys\_catg\_connector\_list | isys\_catg\_connector\_list\_\_isys\_cable\_connection\_\_id |     |     |
| Verwendete Faser/Ader (RX) | int | isys\_catg\_connector\_list | isys\_catg\_connector\_list\_\_used\_fiber\_lead\_rx |     |     |
| Verwendete Faser/Ader (TX) | int | isys\_catg\_connector\_list | isys\_catg\_connector\_list\_\_used\_fiber\_lead\_tx |     |     |
| Associated Eingang/Ausgang | int | isys\_catg\_connector\_list | isys\_catg\_connector\_list\_\_isys\_catg\_connector\_list\_\_id |     |     |
| Description | text\_area | isys\_catg\_connector\_list | isys\_catg\_connector\_list\_\_description |     |     |
| Relation direction | int | isys\_catg\_connector\_list | isys\_catg\_connector\_list\_\_isys\_catg\_relation\_list\_\_id |     |     |

### Rechnung

#### table: isys\_catg\_invoice\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| designation | text | isys\_catg\_invoice\_list | isys\_catg\_invoice\_list\_\_denotation |     |     |
| Rechnungsdatum | date | isys\_catg\_invoice\_list | isys\_catg\_invoice\_list\_\_date |     |     |
| Betrag | double | isys\_catg\_invoice\_list | isys\_catg\_invoice\_list\_\_amount |     |     |
| Bearbeitet am | date | isys\_catg\_invoice\_list | isys\_catg\_invoice\_list\_\_edited |     |     |
| Abgabe Finanzbuchhaltung | date | isys\_catg\_invoice\_list | isys\_catg\_invoice\_list\_\_financial\_accounting\_delivery |     |     |
| Abgebucht | int | isys\_catg\_invoice\_list | isys\_catg\_invoice\_list\_\_charged |     |     |
| Description | text\_area | isys\_catg\_invoice\_list | isys\_catg\_invoice\_list\_\_description |     |     |

### Stromlieferant

#### table: isys\_catg\_power\_supplier\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| designation | text | mine | isys\_catg\_connector\_list\_\_title |     |     |
| Volt | text | isys\_catg\_power\_supplier\_list | isys\_catg\_power\_supplier\_list\_\_volt |     |     |
| Watt | text | isys\_catg\_power\_supplier\_list | isys\_catg\_power\_supplier\_list\_\_watt |     |     |
| Ampere | text | isys\_catg\_power\_supplier\_list | isys\_catg\_power\_supplier\_list\_\_ampere |     |     |
| Zielobjekt | int | connected\_connector | isys\_catg\_power\_supplier\_list\_\_isys\_catg\_connector\_list\_\_id |     |     |
| Connected to connector | int | connected | isys\_catg\_power\_supplier\_list\_\_isys\_catg\_connector\_list\_\_id |     |     |
| Associated Eingang/Ausgang | int | isys\_catg\_power\_supplier\_list | isys\_catg\_connector\_list\_\_isys\_catg\_connector\_list\_\_id |     |     |
| Associated categorytyp | text | isys\_catg\_power\_supplier\_list | isys\_catg\_connector\_list\_\_assigned\_category |     |     |
| Description | text\_area | isys\_catg\_power\_supplier\_list | isys\_catg\_power\_supplier\_list\_\_description |     |     |

### RAID-Verbund

#### table: isys\_catg\_raid\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| RAID-Typ | int | isys\_catg\_raid\_list | isys\_catg\_raid\_list\_\_isys\_raid\_type\_\_id | isys\_raid\_type | isys\_raid\_type\_\_id |
| designation | text | isys\_catg\_raid\_list | isys\_catg\_raid\_list\_\_title |     |     |
| RAID Level | int | isys\_catg\_raid\_list | isys\_catg\_raid\_list\_\_isys\_stor\_raid\_level\_\_id | isys\_stor\_raid\_level | isys\_stor\_raid\_level\_\_id |
| Controller | int | isys\_catg\_raid\_list | isys\_catg\_raid\_list\_\_isys\_catg\_controller\_list\_\_id | isys\_catg\_controller\_list | isys\_catg\_controller\_list\_\_id |
| Verbundene devicee | int | isys\_catg\_raid\_list | isys\_catg\_raid\_list\_\_id |     |     |
| total capacity | text | isys\_catg\_raid\_list | isys\_catg\_raid\_list\_\_id |     |     |
| Description | text\_area | isys\_catg\_raid\_list | isys\_catg\_raid\_list\_\_description |     |     |

### Logische devicee (LDEV server)

#### table: isys\_catg\_sanpool\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| designation | text | isys\_catg\_sanpool\_list | isys\_catg\_sanpool\_list\_\_title |     |     |
| LUN | text | isys\_catg\_sanpool\_list | isys\_catg\_sanpool\_list\_\_lun |     |     |
| segment size (kB) | float | isys\_catg\_sanpool\_list | isys\_catg\_sanpool\_list\_\_segment\_size |     |     |
| Speicher-Einheit | int | isys\_catg\_sanpool\_list | isys\_catg\_sanpool\_list\_\_isys\_memory\_unit\_\_id | isys\_memory\_unit | isys\_memory\_unit\_\_id |
| memory size | double | isys\_catg\_sanpool\_list | isys\_catg\_sanpool\_list\_\_capacity |     |     |
| Zugeordnete devicee | int | isys\_catg\_sanpool\_list | isys\_catg\_sanpool\_list\_\_id | isys\_catg\_ldevclient\_list | isys\_catg\_ldevclient\_list\_\_isys\_catg\_sanpool\_list\_\_id |
| pathe | text | isys\_catg\_sanpool\_list | isys\_catg\_sanpool\_list\_\_id |     |     |
| Multipath Technologie | int | isys\_catg\_sanpool\_list | isys\_catg\_sanpool\_list\_\_isys\_ldev\_multipath\_\_id | isys\_ldev\_multipath | isys\_ldev\_multipath\_\_id |
| Tierklasse | int | isys\_catg\_sanpool\_list | isys\_catg\_sanpool\_list\_\_isys\_tierclass\_\_id | isys\_tierclass | isys\_tierclass\_\_id |
| Logische devicee (Client) | int | isys\_catg\_sanpool\_list | isys\_catg\_sanpool\_list\_\_id | isys\_catg\_ldevclient\_list | isys\_catg\_ldevclient\_list\_\_isys\_catg\_sanpool\_list\_\_id |
| Description | text\_area | isys\_catg\_sanpool\_list | isys\_catg\_sanpool\_list\_\_description |     |     |

### Logische devicee (Client)

#### table: isys\_catg\_ldevclient\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| designation | text | isys\_catg\_ldevclient\_list | isys\_catg\_ldevclient\_list\_\_title |     |     |
| path | int | isys\_catg\_ldevclient\_list | isys\_catg\_ldevclient\_list\_\_id |     |     |
| Logische devicee (LDEV server) | int | isys\_catg\_ldevclient\_list | isys\_catg\_ldevclient\_list\_\_isys\_catg\_sanpool\_list\_\_id | isys\_catg\_sanpool\_list | isys\_catg\_sanpool\_list\_\_id |
| Primaryer path | int | isys\_catg\_ldevclient\_list | isys\_catg\_ldevclient\_list\_\_primary\_path |     |     |
| Multipath Technologie | int | isys\_catg\_ldevclient\_list | isys\_catg\_ldevclient\_list\_\_isys\_ldev\_multipath\_\_id | isys\_ldev\_multipath | isys\_ldev\_multipath\_\_id |
| Description | text\_area | isys\_catg\_ldevclient\_list | isys\_catg\_ldevclient\_list\_\_description |     |     |

### Hostadapter (HBA)

#### table: isys\_catg\_hba\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| designation | text | isys\_catg\_hba\_list | isys\_catg\_hba\_list\_\_title |     |     |
| Typ | int | isys\_catg\_hba\_list | isys\_catg\_hba\_list\_\_isys\_hba\_type\_\_id | isys\_hba\_type | isys\_hba\_type\_\_id |
| Hfirstller | int | isys\_catg\_hba\_list | isys\_catg\_hba\_list\_\_isys\_controller\_manufacturer\_\_id | isys\_controller\_manufacturer | isys\_controller\_manufacturer\_\_id |
| Modell | int | isys\_catg\_hba\_list | isys\_catg\_hba\_list\_\_isys\_controller\_model\_\_id | isys\_controller\_model | isys\_controller\_model\_\_id |
| Description | text\_area | isys\_catg\_hba\_list | isys\_catg\_hba\_list\_\_description |     |     |

### Cluster

#### table: isys\_catg\_cluster\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Quorum | int | isys\_catg\_cluster\_list | isys\_catg\_cluster\_list\_\_quorum |     |     |
| administrationsinstanz | text | isys\_catg\_cluster\_list | isys\_catg\_cluster\_adm\_service\_list\_\_isys\_obj\_\_id |     |     |
| Clustermitglieder | text | isys\_catg\_cluster\_list | isys\_catg\_cluster\_members\_list\_\_isys\_obj\_\_id |     |     |
| Clusterdienstzuweisung | text | isys\_catg\_cluster\_list | isys\_catg\_cluster\_service\_list\_\_isys\_obj\_\_id |     |     |
| Description | text\_area | isys\_catg\_cluster\_list | isys\_catg\_cluster\_list\_\_description |     |     |

### Cluster

#### table: isys\_catg\_cluster\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Quorum | int | isys\_catg\_cluster\_list | isys\_catg\_cluster\_list\_\_quorum |     |     |
| administrationsinstanz | text | isys\_catg\_cluster\_list | isys\_catg\_cluster\_adm\_service\_list\_\_isys\_obj\_\_id |     |     |
| Clustermitglieder | text | isys\_catg\_cluster\_list | isys\_catg\_cluster\_members\_list\_\_isys\_obj\_\_id |     |     |
| Clusterdienstzuweisung | text | isys\_catg\_cluster\_list | isys\_catg\_cluster\_service\_list\_\_isys\_obj\_\_id |     |     |
| Description | text\_area | isys\_catg\_cluster\_list | isys\_catg\_cluster\_list\_\_description |     |     |

### Freigabe

#### table: isys\_catg\_shares\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Freigabename | text | isys\_catg\_shares\_list | isys\_catg\_shares\_list\_\_title |     |     |
| UNC-path | text | isys\_catg\_shares\_list | isys\_catg\_shares\_list\_\_unc\_path |     |     |
| Laufwerk | int | isys\_catg\_shares\_list | isys\_catg\_shares\_list\_\_isys\_catg\_drive\_list\_\_id | isys\_catg\_drive\_list | isys\_catg\_drive\_list\_\_id |
| Lokaler path | text | isys\_catg\_shares\_list | isys\_catg\_shares\_list\_\_path |     |     |
| Description | text\_area | isys\_catg\_shares\_list | isys\_catg\_shares\_list\_\_description |     |     |

### Clusterdienstzuweisung

#### table: isys\_catg\_cluster\_service\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Typ | int | isys\_catg\_cluster\_service\_list | isys\_catg\_cluster\_service\_list\_\_isys\_cluster\_type\_\_id | isys\_cluster\_type | isys\_cluster\_type\_\_id |
| Clusterdienst | int | isys\_catg\_cluster\_service\_list | isys\_catg\_cluster\_service\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |
| Hostadressen | int | isys\_catg\_cluster\_service\_list | isys\_catg\_cluster\_service\_list\_\_id | isys\_catg\_ip\_list\_2\_isys\_catg\_cluster\_service\_list | isys\_catg\_cluster\_service\_list\_\_id |
| Laufwerke | int | isys\_catg\_cluster\_service\_list | isys\_catg\_cluster\_service\_list\_\_id | isys\_catg\_drive\_list\_2\_isys\_catg\_cluster\_service\_list | isys\_catg\_cluster\_service\_list\_\_id |
| Freigaben | int | isys\_catg\_cluster\_service\_list | isys\_catg\_cluster\_service\_list\_\_isys\_obj\_\_id |     |     |
| Runs auf | int | isys\_catg\_cluster\_service\_list | isys\_catg\_cluster\_service\_list\_\_id |     |     |
| default Server | int | isys\_catg\_cluster\_service\_list | isys\_catg\_cluster\_service\_list\_\_cluster\_members\_list\_\_id |     |     |
| database schema | int | isys\_catg\_cluster\_service\_list | isys\_catg\_cluster\_service\_list\_\_isys\_catg\_relation\_list\_\_id | isys\_cats\_database\_access\_list | isys\_cats\_database\_access\_list\_\_id |
| Description | text\_area | isys\_catg\_cluster\_service\_list | isys\_catg\_cluster\_service\_list\_\_description |     |     |

### Clustermitglieder

#### table: isys\_catg\_cluster\_members\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Clustermitglied | int | isys\_catg\_cluster\_members\_list | isys\_catg\_cluster\_members\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |

### Clustermitgliedschaften

#### table: isys\_catg\_cluster\_members\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Cluster | int | isys\_catg\_cluster\_members\_list | isys\_catg\_cluster\_members\_list\_\_isys\_obj\_\_id | isys\_connection | isys\_connection\_\_isys\_obj\_\_id |

### Rechenressourcen

#### table: isys\_catg\_computing\_resources\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| RAM | float | isys\_catg\_computing\_resources\_list | isys\_catg\_computing\_resources\_list\_\_ram |     |     |
| Speicher-Einheit | int | mem1 | isys\_catg\_computing\_resources\_list\_\_ram\_\_isys\_memory\_unit\_\_id | isys\_memory\_unit | isys\_memory\_unit\_\_id |
| CPU-Frequenz | float | isys\_catg\_computing\_resources\_list | isys\_catg\_computing\_resources\_list\_\_cpu |     |     |
| CPU-Frequenz Einheit | int | isys\_catg\_computing\_resources\_list | isys\_catg\_computing\_resources\_list\_\_cpu\_\_isys\_frequency\_unit\_\_id | isys\_frequency\_unit | isys\_frequency\_unit\_\_id |
| Festplattenplatz | float | isys\_catg\_computing\_resources\_list | isys\_catg\_computing\_resources\_list\_\_disc\_space |     |     |
| Speicher Einheit | int | mem2 | isys\_catg\_computing\_resources\_list\_\_ds\_\_isys\_memory\_unit\_\_id | isys\_memory\_unit | isys\_memory\_unit\_\_id |
| Netzwerk Bandbreite | float | isys\_catg\_computing\_resources\_list | isys\_catg\_computing\_resources\_list\_\_network\_bandwidth |     |     |
| Netzwerk Bandbreiten Einheit | int | isys\_catg\_computing\_resources\_list | isys\_catg\_computing\_resources\_list\_\_nb\_\_isys\_port\_speed\_\_id | isys\_port\_speed | isys\_port\_speed\_\_id |
| Description | text\_area | isys\_catg\_computing\_resources\_list | isys\_catg\_computing\_resources\_list\_\_description |     |     |

### SNMP

#### table: isys\_catg\_snmp\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| SNMP Community | int | isys\_catg\_snmp\_list | isys\_catg\_snmp\_list\_\_isys\_snmp\_community\_\_id | isys\_snmp\_community | isys\_snmp\_community\_\_id |
| Description | text\_area | isys\_catg\_snmp\_list | isys\_catg\_snmp\_list\_\_description |     |     |

### Virtueller Host

#### table: isys\_catg\_virtual\_host\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Virtueller Host | int | isys\_catg\_virtual\_host\_list | isys\_catg\_virtual\_host\_list\_\_virtual\_host |     |     |
| Lizenzserver | int | connection\_licence\_server | isys\_catg\_virtual\_host\_list\_\_license\_server | isys\_connection | isys\_connection\_\_id |
| administrationsinstanz | int | connection\_administration\_service | isys\_catg\_virtual\_host\_list\_\_administration\_service | isys\_connection | isys\_connection\_\_id |
| Description | text\_area | isys\_catg\_virtual\_host\_list | isys\_catg\_virtual\_host\_list\_\_description |     |     |

### Virtueller Host

#### table: isys\_catg\_virtual\_host\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Virtueller Host | int | isys\_catg\_virtual\_host\_list | isys\_catg\_virtual\_host\_list\_\_virtual\_host |     |     |
| Lizenzserver | int | connection\_licence\_server | isys\_catg\_virtual\_host\_list\_\_license\_server | isys\_connection | isys\_connection\_\_id |
| administrationsinstanz | int | connection\_administration\_service | isys\_catg\_virtual\_host\_list\_\_administration\_service | isys\_connection | isys\_connection\_\_id |
| Description | text\_area | isys\_catg\_virtual\_host\_list | isys\_catg\_virtual\_host\_list\_\_description |     |     |

### Gastsysteme

#### table: isys\_catg\_virtual\_machine\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Gastsysteme | int | isys\_catg\_virtual\_machine\_list | isys\_catg\_virtual\_machine\_list\_\_isys\_obj\_\_id |     |     |
| Hostname | text | isys\_catg\_virtual\_machine\_list | isys\_catg\_virtual\_machine\_list\_\_isys\_obj\_\_id |     |     |
| Runs auf | text | isys\_catg\_virtual\_machine\_list | isys\_catg\_virtual\_machine\_list\_\_primary |     |     |

### Virtuelle Maschine

#### table: isys\_catg\_virtual\_machine\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Virtuelle Maschine | int | isys\_catg\_virtual\_machine\_list | isys\_catg\_virtual\_machine\_list\_\_vm |     |     |
| Runs auf Host | int | connection\_vm | isys\_catg\_virtual\_machine\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |
| Virtualisierungs-System | int | isys\_catg\_virtual\_machine\_list | isys\_catg\_virtual\_machine\_list\_\_isys\_vm\_type\_\_id | isys\_vm\_type | isys\_vm\_type\_\_id |
| Configurations file | text | isys\_catg\_virtual\_machine\_list | isys\_catg\_virtual\_machine\_list\_\_config\_file |     |     |
| Host im Cluster | int | isys\_catg\_virtual\_machine\_list | isys\_catg\_virtual\_machine\_list\_\_primary |     |     |
| Description | text\_area | isys\_catg\_virtual\_machine\_list | isys\_catg\_virtual\_machine\_list\_\_description |     |     |

### Virtuelle Switche

#### table: isys\_catg\_virtual\_switch\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| designation | text | isys\_catg\_virtual\_switch\_list | isys\_catg\_virtual\_switch\_list\_\_title |     |     |
| Ports | int | isys\_catg\_virtual\_switch\_list | isys\_catg\_virtual\_switch\_list\_\_id | isys\_virtual\_switch\_2\_port | isys\_virtual\_switch\_2\_port\_\_isys\_catg\_virtual\_switch\_list\_\_id |
| Portgruppen | int | isys\_catg\_virtual\_switch\_list | isys\_virtual\_port\_group\_\_id | isys\_virtual\_port\_group | isys\_virtual\_port\_group\_\_isys\_catg\_virtual\_switch\_list\_\_id |
| Service Console Ports | int | isys\_catg\_virtual\_switch\_list | isys\_service\_console\_port\_\_id | isys\_service\_console\_port | isys\_service\_console\_port\_\_isys\_catg\_virtual\_switch\_list\_\_id |
| VMKernel Ports | int | isys\_catg\_virtual\_switch\_list | isys\_vmkernel\_port\_\_id | isys\_vmkernel\_port | isys\_vmkernel\_port\_\_isys\_catg\_virtual\_switch\_list\_\_id |
| Description | text\_area | isys\_catg\_virtual\_switch\_list | isys\_catg\_virtual\_switch\_list\_\_description |     |     |

### Virtuelle devicee

#### table: isys\_catg\_virtual\_device\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| deviceetyp | int | isys\_catg\_virtual\_device\_list | isys\_virtual\_device\_host\_\_isys\_catg\_stor\_list\_\_id | isys\_catg\_stor\_list | isys\_catg\_stor\_list\_\_id |
| Host LDEV Client | int | isys\_catg\_virtual\_device\_list | isys\_virtual\_device\_host\_\_isys\_catg\_ldevclient\_list\_\_id | isys\_catg\_ldevclient\_list | isys\_catg\_ldevclient\_list\_\_id |
| Associated Storage device (Host) | int | isys\_catg\_virtual\_device\_list | isys\_virtual\_device\_host\_\_isys\_catg\_drive\_list\_\_id | isys\_catg\_drive\_list | isys\_catg\_drive\_list\_\_id |
| Associated Host Port | int | isys\_catg\_virtual\_device\_list | isys\_virtual\_device\_host\_\_isys\_catg\_port\_list\_\_id | isys\_catg\_port\_list | isys\_catg\_port\_list\_\_id |
| Host interface | int | isys\_catg\_virtual\_device\_list | isys\_virtual\_device\_host\_\_isys\_catg\_ui\_list\_\_id | isys\_catg\_ui\_list | isys\_catg\_ui\_list\_\_id |
| Lokales Storage device | int | isys\_catg\_virtual\_device\_list | isys\_virtual\_device\_local\_\_isys\_catg\_stor\_list\_\_id | isys\_catg\_stor\_list | isys\_catg\_stor\_list\_\_id |
| Lokaler Port | int | isys\_catg\_virtual\_device\_list | isys\_virtual\_device\_local\_\_isys\_catg\_port\_list\_\_id | isys\_catg\_port\_list | isys\_catg\_port\_list\_\_id |
| Host Ressource | int | isys\_catg\_virtual\_device\_list | isys\_virtual\_device\_local\_\_isys\_catg\_ui\_list\_\_id | isys\_catg\_ui\_list | isys\_catg\_ui\_list\_\_id |
| Speichertyp | int | isys\_catg\_virtual\_device\_list | isys\_virtual\_device\_local\_\_isys\_virtual\_storage\_type\_\_id | isys\_virtual\_storage\_type | isys\_virtual\_storage\_type\_\_id |
| Netzwerktyp | int | isys\_catg\_virtual\_device\_list | isys\_virtual\_device\_local\_\_isys\_virtual\_network\_type\_\_id | isys\_virtual\_network\_type | isys\_virtual\_network\_type\_\_id |
| Switch Port Group | int | isys\_catg\_virtual\_device\_list | isys\_virtual\_device\_host\_\_switch\_port\_group |     |     |
| Cluster Speicher | text | isys\_virtual\_device\_host | isys\_virtual\_device\_host\_\_cluster\_storage |     |     |
| Cluster Interface | text | isys\_catg\_virtual\_device\_list | isys\_virtual\_device\_host\_\_cluster\_ui |     |     |
| Lokales Storage device | text | isys\_catg\_virtual\_device\_list | isys\_catg\_virtual\_device\_list\_\_disk\_image\_location |     |     |
| deviceetyp | text | isys\_catg\_virtual\_device\_list | isys\_catg\_virtual\_device\_list\_\_device\_type |     |     |
| Description | text\_area | isys\_catg\_virtual\_device\_list | isys\_catg\_virtual\_device\_list\_\_description |     |     |
| Typ | text | isys\_catg\_virtual\_device\_list | isys\_virtual\_network\_type\_\_title |     |     |

### Datensicherung (assignede objects)

#### table: isys\_catg\_backup\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| designation | text | isys\_catg\_backup\_list | isys\_catg\_backup\_list\_\_title |     |     |
| Sichert | int | isys\_catg\_backup\_list | isys\_catg\_backup\_list\_\_isys\_obj\_\_id |     |     |
| Art des Backups | int | isys\_catg\_backup\_list | isys\_catg\_backup\_list\_\_isys\_backup\_type\_\_id | isys\_backup\_type | isys\_backup\_type\_\_id |
| Zyklus | int | isys\_catg\_backup\_list | isys\_catg\_backup\_list\_\_isys\_backup\_cycle\_\_id | isys\_backup\_cycle | isys\_backup\_cycle\_\_id |
| path for zu sichernde Daten | text | isys\_catg\_backup\_list | isys\_catg\_backup\_list\_\_path\_to\_save |     |     |
| Description | text\_area | isys\_catg\_backup\_list | isys\_catg\_backup\_list\_\_description |     |     |

### Gruppenmitgliedschaft

#### table: isys\_cats\_group\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Gruppe | int | isys\_cats\_group\_list | isys\_cats\_group\_list\_\_isys\_obj\_\_id |     |     |
| Description | text\_area | isys\_cats\_group\_list | isys\_cats\_group\_list\_\_description |     |     |

### Service Komponenten

#### table: isys\_catg\_its\_components\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Zugewiesenes object | int | isys\_catg\_its\_components\_list | isys\_catg\_its\_components\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |
| objecttyp | int | itsc | isys\_obj\_\_isys\_obj\_type\_\_id |     |     |

### Service logbook

#### table: isys\_catg\_logb\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Datum | date\_time | isys\_catg\_logb\_list | isys\_logbook\_\_date |     |     |
| object | int | isys\_catg\_logb\_list | isys\_catg\_logb\_list\_\_isys\_obj\_\_id |     |     |
| Ereignis | int | isys\_catg\_logb\_list | isys\_logbook\_\_isys\_logbook\_event\_\_id | isys\_logbook\_event | isys\_logbook\_event\_\_id |
| Quelle | int | isys\_catg\_logb\_list | isys\_logbook\_\_isys\_logbook\_source\_\_id |     |     |
| user | int | isys\_catg\_logb\_list | isys\_logbook\_\_isys\_obj\_\_id |     |     |
| objecttyp | text | isys\_catg\_logb\_list | isys\_logbook\_\_obj\_type\_static |     |     |
| category | text | isys\_catg\_logb\_list | isys\_logbook\_\_category\_static |     |     |
| Alarmlevel | text | isys\_catg\_logb\_list | isys\_logbook\_\_isys\_logbook\_level\_\_id | isys\_logbook\_level | isys\_logbook\_level\_\_id |
| user | text | isys\_catg\_logb\_list | isys\_logbook\_\_user\_name\_static |     |     |
| Ereignis | text | isys\_catg\_logb\_list | isys\_logbook\_\_event\_static |     |     |
| Kommentar | text | isys\_catg\_logb\_list | isys\_logbook\_\_comment |     |     |
| Changeen | text | isys\_catg\_logb\_list | isys\_logbook\_\_changes |     |     |
| Description | text\_area | isys\_catg\_logb\_list | isys\_catg\_logb\_list\_\_description |     |     |

### Servicezuweisung

#### table: isys\_catg\_its\_components\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Service | int | isys\_catg\_its\_components\_list | isys\_catg\_its\_components\_list\_\_isys\_obj\_\_id |     |     |
| SYSID | text | isys\_catg\_its\_components\_list | isys\_obj\_\_sysid |     |     |

### Beziehungen

#### table: isys\_catg\_relation\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Object 1 | int | masterobj | isys\_catg\_relation\_list\_\_isys\_obj\_\_id\_\_master | isys\_obj | isys\_obj\_\_id |
| Object 2 | int | slaveobj | isys\_catg\_relation\_list\_\_isys\_obj\_\_id\_\_slave | isys\_obj | isys\_obj\_\_id |
| Beziehungsart | int | isys\_catg\_relation\_list | isys\_catg\_relation\_list\_\_isys\_relation\_type\_\_id | isys\_relation\_type | isys\_relation\_type\_\_id |
| Gewichtung | int | isys\_catg\_relation\_list | isys\_catg\_relation\_list\_\_isys\_weighting\_\_id | isys\_weighting | isys\_weighting\_\_id |
| Service | int | isys\_catg\_relation\_list | isys\_catg\_relation\_list\_\_isys\_obj\_\_id\_\_itservice | isys\_obj | isys\_obj\_\_id |
| Description | text\_area | isys\_catg\_relation\_list | isys\_catg\_relation\_list\_\_description |     |     |

### Service Beziehung

#### table: isys\_catg\_relation\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Object 1 | int | masterobj | isys\_catg\_relation\_list\_\_isys\_obj\_\_id\_\_master | isys\_obj | isys\_obj\_\_id |
| Object 2 | int | slaveobj | isys\_catg\_relation\_list\_\_isys\_obj\_\_id\_\_slave | isys\_obj | isys\_obj\_\_id |
| Beziehungsart | int | isys\_catg\_relation\_list | isys\_catg\_relation\_list\_\_isys\_relation\_type\_\_id | isys\_relation\_type | isys\_relation\_type\_\_id |
| Gewichtung | int | isys\_catg\_relation\_list | isys\_catg\_relation\_list\_\_isys\_weighting\_\_id | isys\_weighting | isys\_weighting\_\_id |
| Service | int | isys\_catg\_relation\_list | isys\_catg\_relation\_list\_\_isys\_obj\_\_id\_\_itservice | isys\_obj | isys\_obj\_\_id |
| Description | text\_area | isys\_catg\_relation\_list | isys\_catg\_relation\_list\_\_description |     |     |

### Datenbankzuweisung

#### table: isys\_cats\_database\_access\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| usedes database schema | int | isys\_cats\_database\_access\_list | isys\_cats\_database\_access\_list\_\_isys\_obj\_\_id |     |     |
| Software runs auf | int | isys\_cats\_database\_access\_list | isys\_catg\_relation\_list\_\_isys\_obj\_\_id\_\_slave |     |     |
| Description | text\_area | isys\_cats\_database\_access\_list | isys\_cats\_database\_access\_list\_\_description |     |     |

### Service Typ

#### table: isys\_catg\_its\_type\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Typ | int | isys\_catg\_its\_type\_list | isys\_catg\_its\_type\_list\_\_isys\_its\_type\_\_id | isys\_its\_type | isys\_its\_type\_\_id |
| Description | text\_area | isys\_catg\_its\_type\_list | isys\_catg\_its\_type\_list\_\_description |     |     |

### passwords

#### table: isys\_catg\_password\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| designation | text | isys\_catg\_password\_list | isys\_catg\_password\_list\_\_title |     |     |
| username | text | isys\_catg\_password\_list | isys\_catg\_password\_list\_\_username |     |     |
| password | text | isys\_catg\_password\_list | isys\_catg\_password\_list\_\_password |     |     |
| Description | text\_area | isys\_catg\_password\_list | isys\_catg\_password\_list\_\_description |     |     |

### SOA-Stacks

#### table: isys\_catg\_soa\_stacks\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| designation | text | isys\_catg\_soa\_stacks\_list | isys\_catg\_soa\_stacks\_list\_\_title |     |     |
| SOA-Stacks | int | isys\_catg\_soa\_stacks\_list | isys\_connection\_\_isys\_obj\_\_id |     |     |
| SOA-Komponente | int | isys\_catg\_soa\_stacks\_list | isys\_catg\_soa\_stacks\_list\_\_id |     |     |
| Service | int | isys\_catg\_soa\_stacks\_list | isys\_connection\_\_isys\_obj\_\_id |     |     |
| Description | text\_area | isys\_catg\_soa\_stacks\_list | isys\_catg\_soa\_stacks\_list\_\_description |     |     |

### Status-Planung

#### table: isys\_catg\_planning\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| CMDB-Status | int | isys\_catg\_planning\_list | isys\_catg\_planning\_list\_\_isys\_cmdb\_status\_\_id | isys\_cmdb\_status | isys\_cmdb\_status\_\_id |
| validity period von | date | isys\_catg\_planning\_list | isys\_catg\_planning\_list\_\_start |     |     |
| validity period bis | date | isys\_catg\_planning\_list | isys\_catg\_planning\_list\_\_end |     |     |
| Description | text\_area | isys\_catg\_planning\_list | isys\_catg\_planning\_list\_\_description |     |     |

### Linked Karten

#### table: isys\_catg\_assigned\_cards\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Linked Karten | int | isys\_catg\_assigned\_cards\_list | isys\_catg\_assigned\_cards\_list\_\_isys\_obj\_\_id\_\_card |     |     |

### SIM-Karte

#### table: isys\_catg\_sim\_card\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Typ | int | isys\_catg\_sim\_card\_list | isys\_catg\_sim\_card\_list\_\_isys\_cp\_contract\_type\_\_id | isys\_cp\_contract\_type | isys\_cp\_contract\_type\_\_id |
| linkedes Mobiltelefon | int | isys\_catg\_assigned\_cards\_list | isys\_catg\_assigned\_cards\_list\_\_isys\_obj\_\_id |     |     |
| Netzanbieter | int | isys\_catg\_sim\_card\_list | isys\_catg\_sim\_card\_list\_\_isys\_network\_provider\_\_id | isys\_network\_provider | isys\_network\_provider\_\_id |
| Telefonrate | int | isys\_catg\_sim\_card\_list | isys\_catg\_sim\_card\_list\_\_isys\_telephone\_rate\_\_id | isys\_telephone\_rate | isys\_telephone\_rate\_\_id |
| Anfangsdatum | date | isys\_catg\_sim\_card\_list | isys\_catg\_sim\_card\_list\_\_start\_date |     |     |
| Enddatum | date | isys\_catg\_sim\_card\_list | isys\_catg\_sim\_card\_list\_\_end\_date |     |     |
| date for notification | date | isys\_catg\_sim\_card\_list | isys\_catg\_sim\_card\_list\_\_threshold\_date |     |     |
| Kartennummer | text | isys\_catg\_sim\_card\_list | isys\_catg\_sim\_card\_list\_\_card\_number |     |     |
| Telefonnummer | text | isys\_catg\_sim\_card\_list | isys\_catg\_sim\_card\_list\_\_phone\_number |     |     |
| Kundennummer | text | isys\_catg\_sim\_card\_list | isys\_catg\_sim\_card\_list\_\_client\_number |     |     |
| Pin | text | isys\_catg\_sim\_card\_list | isys\_catg\_sim\_card\_list\_\_pin |     |     |
| Pin 2 | text | isys\_catg\_sim\_card\_list | isys\_catg\_sim\_card\_list\_\_pin2 |     |     |
| PUK | text | isys\_catg\_sim\_card\_list | isys\_catg\_sim\_card\_list\_\_puk |     |     |
| PUK2 | text | isys\_catg\_sim\_card\_list | isys\_catg\_sim\_card\_list\_\_puk2 |     |     |
| Serial number | text | isys\_catg\_sim\_card\_list | isys\_catg\_sim\_card\_list\_\_serial\_number |     |     |
| Twin-Karte | int | isys\_catg\_sim\_card\_list | isys\_catg\_sim\_card\_list\_\_twincard |     |     |
| Kartennummer (Twin-Karte) | text | isys\_catg\_sim\_card\_list | isys\_catg\_sim\_card\_list\_\_tc\_card\_number |     |     |
| Telefonnummer (Twin-Karte) | text | isys\_catg\_sim\_card\_list | isys\_catg\_sim\_card\_list\_\_tc\_phone\_number |     |     |
| Pin (Twin-Karte) | text | isys\_catg\_sim\_card\_list | isys\_catg\_sim\_card\_list\_\_tc\_pin |     |     |
| Pin 2 (Twin-Karte) | text | isys\_catg\_sim\_card\_list | isys\_catg\_sim\_card\_list\_\_tc\_pin2 |     |     |
| PUK (Twin-Karte) | text | isys\_catg\_sim\_card\_list | isys\_catg\_sim\_card\_list\_\_tc\_puk |     |     |
| PUK2 (Twin-Karte) | text | isys\_catg\_sim\_card\_list | isys\_catg\_sim\_card\_list\_\_tc\_puk2 |     |     |
| Serial number (Twin-Karte) | text | isys\_catg\_sim\_card\_list | isys\_catg\_sim\_card\_list\_\_tc\_serial\_number |     |     |
| Description (Twin-Karte) (Twin-Karte) | text\_area | isys\_catg\_sim\_card\_list | isys\_catg\_sim\_card\_list\_\_optional\_info |     |     |
| Description | text\_area | isys\_catg\_sim\_card\_list | isys\_catg\_sim\_card\_list\_\_description |     |     |

### TSI-Service

#### table: isys\_catg\_tsi\_service\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| TSI-Service ID | text | isys\_catg\_tsi\_service\_list | isys\_catg\_tsi\_service\_list\_\_tsi\_service\_id |     |     |
| Description | text\_area | isys\_catg\_tsi\_service\_list | isys\_catg\_tsi\_service\_list\_\_description |     |     |

### audit

#### table: isys\_catg\_audit\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| designation | text | isys\_catg\_audit\_list | isys\_catg\_audit\_list\_\_title |     |     |
| Typ | int | isys\_catg\_audit\_list | isys\_catg\_audit\_list\_\_type | isys\_catg\_audit\_type | isys\_catg\_audit\_type\_\_id |
| Beauftragt | int | isys\_catg\_audit\_list | isys\_catg\_audit\_list\_\_commission | isys\_contact | isys\_contact\_\_id |
| Verantwortlich | int | isys\_catg\_audit\_list | isys\_catg\_audit\_list\_\_responsible | isys\_contact | isys\_contact\_\_id |
| Beteiligt | int | isys\_catg\_audit\_list | isys\_catg\_audit\_list\_\_involved | isys\_contact | isys\_contact\_\_id |
| Hfirstllerfrist | date | isys\_catg\_audit\_list | isys\_catg\_audit\_list\_\_period\_manufacturer |     |     |
| Betreiberfrist | date | isys\_catg\_audit\_list | isys\_catg\_audit\_list\_\_period\_operator |     |     |
| Performed | date | isys\_catg\_audit\_list | isys\_catg\_audit\_list\_\_apply |     |     |
| Result | text\_area | isys\_catg\_audit\_list | isys\_catg\_audit\_list\_\_result |     |     |
| incidenten | text\_area | isys\_catg\_audit\_list | isys\_catg\_audit\_list\_\_fault |     |     |
| incidents | text\_area | isys\_catg\_audit\_list | isys\_catg\_audit\_list\_\_incident |     |     |
| Description | text\_area | isys\_catg\_audit\_list | isys\_catg\_audit\_list\_\_description |     |     |

### Logischer Standort

#### table: isys\_catg\_logical\_unit\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Viageordnetes object | int | isys\_catg\_logical\_unit\_list | isys\_catg\_logical\_unit\_list\_\_isys\_obj\_\_id\_\_parent |     |     |
| Description | text\_area | isys\_catg\_logical\_unit\_list | isys\_catg\_logical\_unit\_list\_\_description |     |     |

### Zugewiesene end devices

#### table: isys\_catg\_virtual\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| object | int | isys\_catg\_virtual\_list | isys\_catg\_logical\_unit\_list\_\_isys\_obj\_\_id | isys\_obj | isys\_obj\_\_id |

### Zugewiesener Arbeitsplatz

#### table: isys\_catg\_logical\_unit\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Viageordnetes object | int | isys\_catg\_logical\_unit\_list | isys\_catg\_logical\_unit\_list\_\_isys\_obj\_\_id\_\_parent |     |     |
| Description | text\_area | isys\_catg\_logical\_unit\_list | isys\_catg\_logical\_unit\_list\_\_description |     |     |

### Zugewiesene workstations

#### table: isys\_catg\_logical\_unit\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Zugewiesene workstations | int | isys\_catg\_logical\_unit\_list | isys\_catg\_logical\_unit\_list\_\_isys\_obj\_\_id |     |     |
| Description | text\_area | isys\_catg\_logical\_unit\_list | isys\_catg\_logical\_unit\_list\_\_description |     |     |

### Vertragszuweisung

#### table: isys\_catg\_contract\_assignment\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Zugewiesener Vertrag | int | isys\_catg\_contract\_assignment\_list | isys\_catg\_contract\_assignment\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |
| Vertragsbeginn | date | isys\_catg\_contract\_assignment\_list | isys\_catg\_contract\_assignment\_list\_\_contract\_start |     |     |
| Vertragsende | date | isys\_catg\_contract\_assignment\_list | isys\_catg\_contract\_assignment\_list\_\_contract\_end |     |     |
| Reaktionszeiten | int | isys\_catg\_contract\_assignment\_list | isys\_catg\_contract\_assignment\_list\_\_reaction\_rate\_\_id | isys\_contract\_reaction\_rate | isys\_contract\_reaction\_rate\_\_id |
| Description | text\_area | isys\_catg\_contract\_assignment\_list | isys\_catg\_contract\_assignment\_list\_\_description |     |     |

### Stacking

#### table: isys\_catg\_stacking\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Chassis | int | isys\_catg\_stacking\_list | isys\_catg\_stacking\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |

### E-Mail Adressen

#### table: isys\_catg\_mail\_addresses\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| E-Mail Adresse | text | isys\_catg\_mail\_addresses\_list | isys\_catg\_mail\_addresses\_list\_\_title |     |     |
| Primarye E-Mail-Adresse | text | isys\_catg\_mail\_addresses\_list | isys\_catg\_mail\_addresses\_list\_\_title |     |     |
| Primary | int | isys\_catg\_mail\_addresses\_list | isys\_catg\_mail\_addresses\_list\_\_primary |     |     |
| Description | text\_area | isys\_catg\_mail\_addresses\_list | isys\_catg\_mail\_addresses\_list\_\_description |     |     |

### CUCM VoIP Telefon

#### table: isys\_catg\_voip\_phone\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| devicee protocol | text | isys\_catg\_voip\_phone\_list | isys\_catg\_voip\_phone\_list\_\_device\_protocol |     |     |
| Description | text | isys\_catg\_voip\_phone\_list | isys\_catg\_voip\_phone\_list\_\_description2 |     |     |
| devicee-Pool | text | isys\_catg\_voip\_phone\_list | isys\_catg\_voip\_phone\_list\_\_device\_pool |     |     |
| Gemeinsame deviceekonfiguration | text | isys\_catg\_voip\_phone\_list | isys\_catg\_voip\_phone\_list\_\_common\_device\_configuration |     |     |
| Tastenbelegung | int | isys\_catg\_voip\_phone\_list | isys\_catg\_voip\_phone\_list\_\_isys\_voip\_phone\_button\_template\_\_id | isys\_voip\_phone\_button\_template | isys\_voip\_phone\_button\_template\_\_id |
| Programmable key assignment (softkeys) | int | isys\_catg\_voip\_phone\_list | isys\_catg\_voip\_phone\_list\_\_isys\_voip\_phone\_softkey\_template\_\_id | isys\_voip\_phone\_softkey\_template | isys\_voip\_phone\_softkey\_template\_\_id |
| Gemeinsame deviceeprofil | text | isys\_catg\_voip\_phone\_list | isys\_catg\_voip\_phone\_list\_\_common\_profile |     |     |
| Anrufauswahlzone | text | isys\_catg\_voip\_phone\_list | isys\_catg\_voip\_phone\_list\_\_calling\_search\_space |     |     |
| AAR Anrufauswahlzone | text | isys\_catg\_voip\_phone\_list | isys\_catg\_voip\_phone\_list\_\_aar\_calling\_search\_space |     |     |
| Medienressourcen Gruppenliste | text | isys\_catg\_voip\_phone\_list | isys\_catg\_voip\_phone\_list\_\_media\_resource\_group\_list |     |     |
| user MOH Audioquelle | text | isys\_catg\_voip\_phone\_list | isys\_catg\_voip\_phone\_list\_\_user\_hold\_moh\_audio\_source |     |     |
| Netzwerk MOH Audioquelle | text | isys\_catg\_voip\_phone\_list | isys\_catg\_voip\_phone\_list\_\_network\_hold\_moh\_audio\_source |     |     |
| Standort | text | isys\_catg\_voip\_phone\_list | isys\_catg\_voip\_phone\_list\_\_location |     |     |
| AAR Gruppe | text | isys\_catg\_voip\_phone\_list | isys\_catg\_voip\_phone\_list\_\_aar\_group |     |     |
| user-Gebietsschema | text | isys\_catg\_voip\_phone\_list | isys\_catg\_voip\_phone\_list\_\_user\_locale |     |     |
| Netzwerk Gebietsschema | text | isys\_catg\_voip\_phone\_list | isys\_catg\_voip\_phone\_list\_\_network\_locale |     |     |
| Eingebaute network bridge | text | isys\_catg\_voip\_phone\_list | isys\_catg\_voip\_phone\_list\_\_built\_in\_bridge |     |     |
| privacy | text | isys\_catg\_voip\_phone\_list | isys\_catg\_voip\_phone\_list\_\_privacy |     |     |
| Device Mobility Mode | text | isys\_catg\_voip\_phone\_list | isys\_catg\_voip\_phone\_list\_\_device\_mobility\_mode |     |     |
| owner User-ID | text | isys\_catg\_voip\_phone\_list | isys\_catg\_voip\_phone\_list\_\_owner\_user\_id |     |     |
| Phone suite | text | isys\_catg\_voip\_phone\_list | isys\_catg\_voip\_phone\_list\_\_phone\_suite |     |     |
| Service-Bereitstellung | text | isys\_catg\_voip\_phone\_list | isys\_catg\_voip\_phone\_list\_\_services\_provisioning |     |     |
| Load name | text | isys\_catg\_voip\_phone\_list | isys\_catg\_voip\_phone\_list\_\_load\_name |     |     |
| Description | text\_area | isys\_catg\_voip\_phone\_list | isys\_catg\_voip\_phone\_list\_\_description |     |     |

### CUCM VoIP Leitung

#### table: isys\_catg\_voip\_phone\_line\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| directory-Nummer | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_directory\_number |     |     |
| Route-Partition | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_route\_partition |     |     |
| Description | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_description2 |     |     |
| Alarmierung Name | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_alerting\_name |     |     |
| ASCII Alarmierung Name | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_ascii\_alerting\_name |     |     |
| Telefon Steuerung via CTI erlauben | int | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_allow\_cti\_control |     |     |
| Verbundene devicee | int | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_id |     |     |
| Voice-Mail Profil | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_voice\_mail\_profile |     |     |
| Anrufauswahlzone | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_calling\_search\_space |     |     |
| presence group | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_presence\_group |     |     |
| user MOH Audioquelle | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_user\_hold\_moh\_audio\_source |     |     |
| Netzwerk MOH Audioquelle | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_network\_hold\_moh\_audio\_source |     |     |
| Automatische Antwort | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_auto\_answer |     |     |
| Alle Anrufe umleiten | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_call\_forward\_all |     |     |
| Secondary Anrufauswahlzone for Anrufumleitung | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_sec\_calling\_search\_space |     |     |
| Umleiten bei besetzt intern | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_forward\_busy\_internal |     |     |
| Umleiten bei besetzt extern | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_forward\_busy\_external |     |     |
| Umleiten bei keiner Antwort intern | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_forward\_no\_answer\_internal |     |     |
| Umleiten bei keiner Antwort extern | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_forward\_no\_answer\_external |     |     |
| Umleiten bei keiner Berichterstattung intern | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_forward\_no\_coverage\_internal |     |     |
| Umleiten bei keiner Berichterstattung extern | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_forward\_no\_coverage\_external |     |     |
| Umleitung bei CTI Fehler | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_forward\_on\_cti\_fail |     |     |
| Umleitung bei unregistriert intern | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_forward\_unregistered\_internal |     |     |
| Umleitung bei unregistriert extern | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_forward\_unregistered\_external |     |     |
| Klingeldauer bei keiner Antwort | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_no\_answer\_ring\_duration |     |     |
| Anrufvianahmegruppe | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_call\_pickup\_group |     |     |
| Display | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_display |     |     |
| ASCII Display | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_ascii\_display |     |     |
| Line title | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_line\_text\_label |     |     |
| ASCII line title | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_ascii\_line\_text\_label |     |     |
| Visual message waiting indicator policy | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_visual\_message\_indicator |     |     |
| Audible message waiting indicator policy | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_audible\_message\_indicator |     |     |
| Klingel-setting (Telefon im Leerlauf) | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_ring\_settings\_idle |     |     |
| Klingel-setting (Telefon Aktiv) | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_ring\_settings\_active |     |     |
| Call pickup group audio alert setting (phone idle) | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_call\_pickup\_group\_idle |     |     |
| Call pickup group audio alert setting (phone active) | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_call\_pickup\_group\_active |     |     |
| Aufnahmeoption | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_recording\_option |     |     |
| Aufnahmeprofil | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_recording\_profile |     |     |
| Monitoring calling search space | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_monitoring\_css |     |     |
| Verpasste Anrufe mitloggen | int | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_log\_missed\_calls |     |     |
| Externe Rufnummer Maske | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_external\_phone\_number\_mask |     |     |
| Maximale Anzahl an Anrufen | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_max\_number\_of\_calls |     |     |
| "Besetzt" Trigger | text | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_busy\_trigger |     |     |
| Name des Anrufers | int | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_caller\_name |     |     |
| Nummer des Anrufers | int | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_caller\_number |     |     |
| Umgeleitete Nummer | int | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_redirected\_number |     |     |
| Selected number | int | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_dialed\_number |     |     |
| Description | text\_area | isys\_catg\_voip\_phone\_line\_list | isys\_catg\_voip\_phone\_line\_list\_\_description |     |     |

### Telefon/Fax

#### table: isys\_catg\_telephone\_fax\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Typ | int | isys\_catg\_telephone\_fax\_list | isys\_catg\_telephone\_fax\_list\_\_isys\_telephone\_fax\_type\_\_id | isys\_telephone\_fax\_type | isys\_telephone\_fax\_type\_\_id |
| Telefonnummer | text | isys\_catg\_telephone\_fax\_list | isys\_catg\_telephone\_fax\_list\_\_telephone\_number |     |     |
| Faxnummer | text | isys\_catg\_telephone\_fax\_list | isys\_catg\_telephone\_fax\_list\_\_fax\_number |     |     |
| Nebenstelle | text | isys\_catg\_telephone\_fax\_list | isys\_catg\_telephone\_fax\_list\_\_extension |     |     |
| Pin-Code | text | isys\_catg\_telephone\_fax\_list | isys\_catg\_telephone\_fax\_list\_\_pincode |     |     |
| IMEI-Nummer | text | isys\_catg\_telephone\_fax\_list | isys\_catg\_telephone\_fax\_list\_\_imei |     |     |
| Description | text\_area | isys\_catg\_telephone\_fax\_list | isys\_catg\_telephone\_fax\_list\_\_description |     |     |

### Smartcard Zertifikat

#### table: isys\_catg\_smartcard\_certificate\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Kartennummer | text | isys\_catg\_smartcard\_certificate\_list | isys\_catg\_smartcard\_certificate\_list\_\_cardnumber |     |     |
| Sperrkennwort | text | isys\_catg\_smartcard\_certificate\_list | isys\_catg\_smartcard\_certificate\_list\_\_barring\_password |     |     |
| PIN-Nr. | text | isys\_catg\_smartcard\_certificate\_list | isys\_catg\_smartcard\_certificate\_list\_\_pin\_number |     |     |
| Referenznummer | text | isys\_catg\_smartcard\_certificate\_list | isys\_catg\_smartcard\_certificate\_list\_\_reference |     |     |
| Runs aus am | date | isys\_catg\_smartcard\_certificate\_list | isys\_catg\_smartcard\_certificate\_list\_\_expires\_on |     |     |
| Description | text\_area | isys\_catg\_smartcard\_certificate\_list | isys\_catg\_smartcard\_certificate\_list\_\_description |     |     |

### Freigabenzugriff

#### table: isys\_catg\_share\_access\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Selecteds object | int | isys\_catg\_share\_access\_list | isys\_catg\_share\_access\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |
| Mountpoint | text | isys\_catg\_share\_access\_list | isys\_catg\_share\_access\_list\_\_mountpoint |     |     |
| Freigabename | int | isys\_catg\_share\_access\_list | isys\_catg\_share\_access\_list\_\_isys\_catg\_shares\_list\_\_id | isys\_catg\_shares\_list | isys\_catg\_shares\_list\_\_id |
| Description | text\_area | isys\_catg\_share\_access\_list | isys\_catg\_share\_access\_list\_\_description |     |     |

### Zertifikat

#### table: isys\_catg\_certificate\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Typ | int | isys\_catg\_certificate\_list | isys\_catg\_certificate\_list\_\_isys\_certificate\_type\_\_id | isys\_certificate\_type | isys\_certificate\_type\_\_id |
| Erstelldatum | date | isys\_catg\_certificate\_list | isys\_catg\_certificate\_list\_\_created |     |     |
| Ablaufdatum | date | isys\_catg\_certificate\_list | isys\_catg\_certificate\_list\_\_expire |     |     |
| Description | text\_area | isys\_catg\_certificate\_list | isys\_catg\_certificate\_list\_\_description |     |     |

### SLA

#### table: isys\_catg\_sla\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Service-ID | text | isys\_catg\_sla\_list | isys\_catg\_sla\_list\_\_service\_id |     |     |
| SLA Servicelevel | int | isys\_catg\_sla\_list | isys\_catg\_sla\_list\_\_service\_level |     |     |
| SLA Servicelevel (Dialog) | int | isys\_catg\_sla\_list | isys\_catg\_sla\_list\_\_isys\_sla\_service\_level\_\_id | isys\_sla\_service\_level | isys\_sla\_service\_level\_\_id |
| Wochentag | int | isys\_catg\_sla\_list | isys\_catg\_sla\_list\_\_days |     |     |
| Montag | text | isys\_catg\_sla\_list | isys\_catg\_sla\_list\_\_monday\_time |     |     |
| Dienstag | text | isys\_catg\_sla\_list | isys\_catg\_sla\_list\_\_tuesday\_time |     |     |
| Mittwoch | text | isys\_catg\_sla\_list | isys\_catg\_sla\_list\_\_wednesday\_time |     |     |
| Donnerstag | text | isys\_catg\_sla\_list | isys\_catg\_sla\_list\_\_thursday\_time |     |     |
| Freitag | text | isys\_catg\_sla\_list | isys\_catg\_sla\_list\_\_friday\_time |     |     |
| Samstag | text | isys\_catg\_sla\_list | isys\_catg\_sla\_list\_\_saturday\_time |     |     |
| Sonntag | text | isys\_catg\_sla\_list | isys\_catg\_sla\_list\_\_sunday\_time |     |     |
| Reaktionszeit | int | isys\_catg\_sla\_list | isys\_catg\_sla\_list\_\_reaction\_time |     |     |
| Reaktionszeit Einheit | int | isys\_catg\_sla\_list | isys\_catg\_sla\_list\_\_reaction\_time\_unit | isys\_unit\_of\_time | isys\_unit\_of\_time\_\_id |
| Wiederhfirstllungszeit | int | isys\_catg\_sla\_list | isys\_catg\_sla\_list\_\_recovery\_time |     |     |
| Wiederhfirstllungszeit Einheit | int | isys\_catg\_sla\_list | isys\_catg\_sla\_list\_\_recovery\_time\_unit | isys\_unit\_of\_time | isys\_unit\_of\_time\_\_id |
| Kalender | int | isys\_catg\_sla\_list | isys\_catg\_sla\_list\_\_isys\_calendar\_\_id | isys\_calendar | isys\_calendar\_\_id |
| Description | text\_area | isys\_catg\_sla\_list | isys\_catg\_sla\_list\_\_description |     |     |

### LDAP

#### table: isys\_catg\_ldap\_dn\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Distinguished Name (DN) | text | isys\_catg\_ldap\_dn\_list | isys\_catg\_ldap\_dn\_list\_\_title |     |     |
| Description | text\_area | isys\_catg\_ldap\_dn\_list | isys\_catg\_ldap\_dn\_list\_\_description |     |     |

### Host Definition

#### table: isys\_catg\_nagios\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Diese Configuration exportieren | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_is\_exportable |     |     |
| Exportkonfiguration | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_export\_host | isys\_monitoring\_export\_config | isys\_monitoring\_export\_config\_\_id |
| Templates | text | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_host\_tpl |     |     |
| host\_name | text | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_host\_name |     |     |
| host\_name\_selection | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_host\_name\_selection |     |     |
| Hostname | text | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_name1 |     |     |
| Alias | text | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_alias |     |     |
| IP-Adresse | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_isys\_catg\_ip\_list\_\_id | isys\_catg\_ip\_list | isys\_catg\_ip\_list\_\_id |
| address\_selection | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_address\_selection |     |     |
| Weitere objects als parent select | text | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_parents |     |     |
| The following objects als parent benutzen? | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_is\_parent |     |     |
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
| Name | text | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_name2 |     |     |
| custom\_object\_vars | text\_area | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_custom\_obj\_vars |     |     |
| Description | text\_area | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_description |     |     |

### Nagios Gruppe

#### table: isys\_catg\_nagios\_group\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Diese Configuration exportieren | int | isys\_catg\_nagios\_group\_list | isys\_catg\_nagios\_group\_list\_\_is\_exportable |     |     |
| Gruppen-Typ | int | isys\_catg\_nagios\_group\_list | isys\_catg\_nagios\_group\_list\_\_type |     |     |
| display\_name | text | isys\_catg\_nagios\_group\_list | isys\_catg\_nagios\_group\_list\_\_name |     |     |
| display\_name\_selection | int | isys\_catg\_nagios\_group\_list | isys\_catg\_nagios\_group\_list\_\_name\_selection |     |     |
| Alias | text | isys\_catg\_nagios\_group\_list | isys\_catg\_nagios\_group\_list\_\_alias |     |     |
| Notes | text | isys\_catg\_nagios\_group\_list | isys\_catg\_nagios\_group\_list\_\_notes |     |     |
| Notes URL | text | isys\_catg\_nagios\_group\_list | isys\_catg\_nagios\_group\_list\_\_notes\_url |     |     |
| Action URL | text | isys\_catg\_nagios\_group\_list | isys\_catg\_nagios\_group\_list\_\_action\_url |     |     |
| Description | text\_area | isys\_catg\_nagios\_group\_list | isys\_catg\_nagios\_group\_list\_\_description |     |     |

### Nagios (Service)

#### table: isys\_catg\_nagios\_service\_def\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Aktiv | int | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_is\_active |     |     |
| service\_description | text | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_service\_description |     |     |
| Service-Template | text | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_service\_template |     |     |
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

### Nagios (Service TPL)

#### table: isys\_catg\_nagios\_service\_tpl\_def\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
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

#### table: isys\_catg\_nagios\_service\_def\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Aktiv | int | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_is\_active |     |     |
| service\_description | text | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_service\_description |     |     |
| Service-Template | text | isys\_catg\_nagios\_service\_def\_list | isys\_catg\_nagios\_service\_def\_list\_\_service\_template |     |     |
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

### Backward Servicezuweisung

#### table: isys\_catg\_nagios\_refs\_services\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Zugewiesene objects | int | isys\_catg\_nagios\_refs\_services\_list | isys\_catg\_nagios\_refs\_services\_list\_\_isys\_obj\_\_id\_\_host |     |     |

### Service-Template definition

#### table: isys\_catg\_nagios\_service\_tpl\_def\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
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

### Zugewiesene objects

#### table: isys\_catg\_virtual\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Zugewiesene objects | int | isys\_catg\_virtual\_list | isys\_catg\_nagios\_service\_def\_list\_\_service\_template |     |     |

### Nagios (Host TPL)

#### table: isys\_catg\_nagios\_host\_tpl\_def\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
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
| Name | text | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_name2 |     |     |
| Description | text\_area | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_description |     |     |
| action\_url | text | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_action\_url |     |     |
| icon\_image | text | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_icon\_image |     |     |
| icon\_image\_alt | text | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_icon\_image\_alt |     |     |
| vrml\_image | text | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_vrml\_image |     |     |
| statusmap\_image | text | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_statusmap\_image |     |     |
| notes | text | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_notes |     |     |
| notes\_url | text | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_notes\_url |     |     |
| custom\_object\_vars | text\_area | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_custom\_obj\_vars |     |     |

### Host-Template Definition

#### table: isys\_catg\_nagios\_host\_tpl\_def\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
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
| Name | text | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_name2 |     |     |
| Description | text\_area | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_description |     |     |
| action\_url | text | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_action\_url |     |     |
| icon\_image | text | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_icon\_image |     |     |
| icon\_image\_alt | text | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_icon\_image\_alt |     |     |
| vrml\_image | text | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_vrml\_image |     |     |
| statusmap\_image | text | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_statusmap\_image |     |     |
| notes | text | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_notes |     |     |
| notes\_url | text | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_notes\_url |     |     |
| custom\_object\_vars | text\_area | isys\_catg\_nagios\_host\_tpl\_def\_list | isys\_catg\_nagios\_host\_tpl\_def\_list\_\_custom\_obj\_vars |     |     |

### Nagios (Host)

#### table: isys\_catg\_nagios\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Diese Configuration exportieren | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_is\_exportable |     |     |
| Exportkonfiguration | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_export\_host | isys\_monitoring\_export\_config | isys\_monitoring\_export\_config\_\_id |
| Templates | text | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_host\_tpl |     |     |
| host\_name | text | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_host\_name |     |     |
| host\_name\_selection | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_host\_name\_selection |     |     |
| Hostname | text | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_name1 |     |     |
| Alias | text | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_alias |     |     |
| IP-Adresse | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_isys\_catg\_ip\_list\_\_id | isys\_catg\_ip\_list | isys\_catg\_ip\_list\_\_id |
| address\_selection | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_address\_selection |     |     |
| Weitere objects als parent select | text | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_parents |     |     |
| The following objects als parent benutzen? | int | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_is\_parent |     |     |
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
| Name | text | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_name2 |     |     |
| custom\_object\_vars | text\_area | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_custom\_obj\_vars |     |     |
| Description | text\_area | isys\_catg\_nagios\_list | isys\_catg\_nagios\_list\_\_description |     |     |

### Zugewiesene objects

#### table: isys\_catg\_virtual\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Zugewiesene objects | text | isys\_catg\_virtual\_list | isys\_catg\_nagios\_list\_\_host\_tpl |     |     |

### Servicezuweisung

#### table: isys\_catg\_nagios\_refs\_services\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Nagios Service | int | isys\_catg\_nagios\_refs\_services\_list | isys\_catg\_nagios\_refs\_services\_list\_\_isys\_obj\_\_id\_\_service | isys\_obj | isys\_obj\_\_id |

### Nagios (Anwendungen)

#### table: isys\_catg\_nagios\_refs\_services\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Nagios Service | int | isys\_catg\_nagios\_refs\_services\_list | isys\_catg\_nagios\_refs\_services\_list\_\_isys\_obj\_\_id\_\_service | isys\_obj | isys\_obj\_\_id |

### Servicezuweisung

#### table: isys\_catg\_nagios\_refs\_services\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Nagios Service | int | isys\_catg\_nagios\_refs\_services\_list | isys\_catg\_nagios\_refs\_services\_list\_\_isys\_obj\_\_id\_\_service | isys\_obj | isys\_obj\_\_id |

### Nagios Service-Dependencies

#### table: isys\_catg\_nagios\_service\_dep\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
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

### Anschrift

#### table: isys\_catg\_address\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Adresszusatz | text\_area | isys\_catg\_address\_list | isys\_catg\_address\_list\_\_address |     |     |
| Street | text | isys\_catg\_address\_list | isys\_catg\_address\_list\_\_street |     |     |
| Hausnummer | text | isys\_catg\_address\_list | isys\_catg\_address\_list\_\_house\_no |     |     |
| Etagen | int | isys\_catg\_address\_list | isys\_catg\_address\_list\_\_stories |     |     |
| Postleitzahl | text | isys\_catg\_address\_list | isys\_catg\_address\_list\_\_postalcode |     |     |
| Ort | text | isys\_catg\_address\_list | isys\_catg\_address\_list\_\_city |     |     |
| Region | text | isys\_catg\_address\_list | isys\_catg\_address\_list\_\_region |     |     |
| Land | text | isys\_catg\_address\_list | isys\_catg\_address\_list\_\_country |     |     |
| Description | text\_area | isys\_catg\_address\_list | isys\_catg\_address\_list\_\_description |     |     |

### Monitoring

#### table: isys\_catg\_monitoring\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Aktiv? | int | isys\_catg\_monitoring\_list | isys\_catg\_monitoring\_list\_\_active |     |     |
| Host | int | isys\_catg\_monitoring\_list | isys\_catg\_monitoring\_list\_\_isys\_monitoring\_hosts\_\_id | isys\_monitoring\_hosts | isys\_monitoring\_hosts\_\_id |
| Hostname | text | isys\_catg\_monitoring\_list | isys\_catg\_monitoring\_list\_\_host\_name |     |     |
| Hostname auswahl | int | isys\_catg\_monitoring\_list | isys\_catg\_monitoring\_list\_\_host\_name\_selection |     |     |
| Description | text\_area | isys\_catg\_monitoring\_list | isys\_catg\_monitoring\_list\_\_description |     |     |

### Livestatus

#### table: isys\_catg\_virtual\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Livestatus | int | isys\_catg\_virtual\_list | isys\_catg\_monitoring\_list\_\_active |     |     |
| Livestatus (Knopf) | int | isys\_catg\_virtual\_list | isys\_catg\_monitoring\_list\_\_active |     |     |

### Fahrzeug

#### table: isys\_catg\_vehicle\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Kennzeichen | text | isys\_catg\_vehicle\_list | isys\_catg\_vehicle\_list\_\_licence\_plate |     |     |
| Description | text\_area | isys\_catg\_vehicle\_list | isys\_catg\_vehicle\_list\_\_description |     |     |

### Flugzeug

#### table: isys\_catg\_aircraft\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Luftfahrzeugkennzeichen | text | isys\_catg\_aircraft\_list | isys\_catg\_aircraft\_list\_\_registration |     |     |
| Description | text\_area | isys\_catg\_aircraft\_list | isys\_catg\_aircraft\_list\_\_description |     |     |

### Netzwerkverbindungen

#### table: isys\_catg\_net\_listener\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Layer 3/4 Protokoll | int | isys\_catg\_net\_listener\_list | isys\_catg\_net\_listener\_list\_\_isys\_net\_protocol\_\_id | isys\_net\_protocol | isys\_net\_protocol\_\_id |
| Layer 5-7 Protokoll | int | isys\_catg\_net\_listener\_list | isys\_catg\_net\_listener\_list\_\_isys\_net\_protocol\_layer\_5\_\_id | isys\_net\_protocol\_layer\_5 | isys\_net\_protocol\_layer\_5\_\_id |
| (Bind) IP-Adresse | int | isys\_catg\_net\_listener\_list | isys\_catg\_net\_listener\_list\_\_isys\_cats\_net\_ip\_addresses\_list\_\_id | isys\_cats\_net\_ip\_addresses\_list | isys\_cats\_net\_ip\_addresses\_list\_\_id |
| Von | int | isys\_catg\_net\_listener\_list | isys\_catg\_net\_listener\_list\_\_port\_from |     |     |
| Bis | int | isys\_catg\_net\_listener\_list | isys\_catg\_net\_listener\_list\_\_port\_to |     |     |
| Geopens durch Applikation | int | opened\_by | isys\_catg\_net\_listener\_list\_\_opened\_by | isys\_obj | isys\_obj\_\_id |
| Gateway | int | gateway | isys\_catg\_net\_listener\_list\_\_gateway | isys\_obj | isys\_obj\_\_id |
| Description | text\_area | isys\_catg\_net\_listener\_list | isys\_catg\_net\_listener\_list\_\_description |     |     |

### Listener

#### table: isys\_catg\_net\_listener\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Layer 3/4 Protokoll | int | isys\_catg\_net\_listener\_list | isys\_catg\_net\_listener\_list\_\_isys\_net\_protocol\_\_id | isys\_net\_protocol | isys\_net\_protocol\_\_id |
| Layer 5-7 Protokoll | int | isys\_catg\_net\_listener\_list | isys\_catg\_net\_listener\_list\_\_isys\_net\_protocol\_layer\_5\_\_id | isys\_net\_protocol\_layer\_5 | isys\_net\_protocol\_layer\_5\_\_id |
| (Bind) IP-Adresse | int | isys\_catg\_net\_listener\_list | isys\_catg\_net\_listener\_list\_\_isys\_cats\_net\_ip\_addresses\_list\_\_id | isys\_cats\_net\_ip\_addresses\_list | isys\_cats\_net\_ip\_addresses\_list\_\_id |
| Von | int | isys\_catg\_net\_listener\_list | isys\_catg\_net\_listener\_list\_\_port\_from |     |     |
| Bis | int | isys\_catg\_net\_listener\_list | isys\_catg\_net\_listener\_list\_\_port\_to |     |     |
| Geopens durch Applikation | int | opened\_by | isys\_catg\_net\_listener\_list\_\_opened\_by | isys\_obj | isys\_obj\_\_id |
| Gateway | int | gateway | isys\_catg\_net\_listener\_list\_\_gateway | isys\_obj | isys\_obj\_\_id |
| Description | text\_area | isys\_catg\_net\_listener\_list | isys\_catg\_net\_listener\_list\_\_description |     |     |

### connection

#### table: isys\_catg\_net\_connector\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| (Source) IP-Adresse | int | isys\_catg\_net\_connector\_list | isys\_catg\_net\_connector\_list\_\_ip\_addresses\_list\_\_id | isys\_cats\_net\_ip\_addresses\_list | isys\_cats\_net\_ip\_addresses\_list\_\_id |
| Von | int | isys\_catg\_net\_connector\_list | isys\_catg\_net\_connector\_list\_\_port\_from |     |     |
| Bis | int | isys\_catg\_net\_connector\_list | isys\_catg\_net\_connector\_list\_\_port\_to |     |     |
| Listener | int | isys\_catg\_net\_connector\_list | isys\_catg\_net\_connector\_list\_\_isys\_catg\_net\_listener\_list\_\_id | isys\_catg\_net\_listener\_list | isys\_catg\_net\_listener\_list\_\_id |
| Connected to | int | isys\_catg\_net\_connector\_list | isys\_catg\_net\_connector\_list\_\_isys\_catg\_net\_listener\_list\_\_id | isys\_catg\_net\_listener\_list | isys\_catg\_net\_listener\_list\_\_id |
| Gateway | int | gateway | isys\_catg\_net\_connector\_list\_\_gateway | isys\_obj | isys\_obj\_\_id |
| Description | text\_area | isys\_catg\_net\_connector\_list | isys\_catg\_net\_connector\_list\_\_description |     |     |

### administrationsinstanz

#### table: isys\_catg\_cluster\_adm\_service\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| administrationsinstanz (object) | int | isys\_catg\_cluster\_adm\_service\_list | isys\_catg\_cluster\_adm\_service\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |
| objecttyp | int | isys\_catg\_cluster\_adm\_service\_list | isys\_obj\_\_isys\_obj\_type\_\_id |     |     |

### JDisc Custom Attributes

#### table: isys\_catg\_jdisc\_ca\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Attribut | text | isys\_catg\_jdisc\_ca\_list | isys\_catg\_jdisc\_ca\_list\_\_title |     |     |
| value | text | isys\_catg\_jdisc\_ca\_list | isys\_catg\_jdisc\_ca\_list\_\_content |     |     |
| Typ | int | isys\_catg\_jdisc\_ca\_list | isys\_catg\_jdisc\_ca\_list\_\_isys\_jdisc\_ca\_type\_\_id | isys\_jdisc\_ca\_type | isys\_jdisc\_ca\_type\_\_id |
| folder | text\_area | isys\_catg\_jdisc\_ca\_list | isys\_catg\_jdisc\_ca\_list\_\_folder |     |     |
| Description | text\_area | isys\_catg\_jdisc\_ca\_list | isys\_catg\_jdisc\_ca\_list\_\_description |     |     |

### LC\_\_CATG\_\_CMK\_FOLDER

#### table: isys\_catg\_cmk\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| LC\_\_CATG\_\_CMK\_\_ACTIVE | int | isys\_catg\_cmk\_list | isys\_catg\_cmk\_list\_\_exportable |     |     |
| Exportkonfiguration | int | isys\_catg\_cmk\_list | isys\_catg\_cmk\_list\_\_isys\_monitoring\_export\_config\_\_id |     |     |
| LC\_\_CATG\_\_CMK\_\_ALIAS | text | isys\_catg\_cmk\_list | isys\_catg\_cmk\_list\_\_title |     |     |
| LC\_\_CATG\_\_CMK\_\_EXPORT\_IP | int | isys\_catg\_cmk\_list | isys\_catg\_cmk\_list\_\_export\_ip |     |     |
| Hostadresse | int | isys\_catg\_cmk\_list | isys\_catg\_cmk\_list\_\_isys\_catg\_ip\_list\_\_id |     |     |
| LC\_\_CATG\_\_CMK\_\_HOSTNAME | text | isys\_catg\_cmk\_list | isys\_catg\_cmk\_list\_\_host\_name |     |     |
| LC\_\_CATG\_\_CMK\_\_HOSTNAME | int | isys\_catg\_cmk\_list | isys\_catg\_cmk\_list\_\_host\_name\_selection |     |     |
| Description | text\_area | isys\_catg\_cmk\_list | isys\_catg\_cmk\_list\_\_description |     |     |

### LC\_\_CATG\_\_CMK\_TAG

#### table: isys\_catg\_cmk\_tag\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| LC\_\_CATG\_\_CMK\_TAG\_\_TAGS | text | isys\_catg\_cmk\_tag\_list | isys\_catg\_cmk\_tag\_list\_\_tags |     |     |
| Description | text\_area | isys\_catg\_cmk\_tag\_list | isys\_catg\_cmk\_tag\_list\_\_description |     |     |

### LC\_\_CATG\_\_CMK\_HOST\_SERVICE

#### table: isys\_catg\_cmk\_host\_service\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| LC\_\_CATG\_\_CMK\_SERVICE\_\_CHECK\_MK\_SERVICES | text | isys\_catg\_cmk\_host\_service\_list | isys\_catg\_cmk\_host\_service\_list\_\_service |     |     |
| LC\_\_CATG\_\_CMK\_SERVICE\_\_SOFTWARE\_ASSIGNMENT | int | isys\_catg\_cmk\_host\_service\_list | isys\_catg\_cmk\_host\_service\_list\_\_application\_\_id | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_id |
| Description | text\_area | isys\_catg\_cmk\_host\_service\_list | isys\_catg\_cmk\_host\_service\_list\_\_description |     |     |

### LC\_\_CATG\_\_CMK\_SERVICE

#### table: isys\_catg\_cmk\_service\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| LC\_\_MODULE\_\_CHECK\_MK\_\_HOST | int | isys\_catg\_cmk\_service\_list | isys\_catg\_cmk\_service\_list\_\_host |     |     |
| LC\_\_CATG\_\_CMK\_SERVICE\_\_CHECK\_MK\_SERVICES | text | isys\_catg\_cmk\_service\_list | isys\_catg\_cmk\_service\_list\_\_service |     |     |
| Description | text\_area | isys\_catg\_cmk\_service\_list | isys\_catg\_cmk\_service\_list\_\_description |     |     |

### LC\_\_CATG\_\_CMK\_DEF

#### table: isys\_catg\_cmk\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| LC\_\_CATG\_\_CMK\_\_ACTIVE | int | isys\_catg\_cmk\_list | isys\_catg\_cmk\_list\_\_exportable |     |     |
| Exportkonfiguration | int | isys\_catg\_cmk\_list | isys\_catg\_cmk\_list\_\_isys\_monitoring\_export\_config\_\_id |     |     |
| LC\_\_CATG\_\_CMK\_\_ALIAS | text | isys\_catg\_cmk\_list | isys\_catg\_cmk\_list\_\_title |     |     |
| LC\_\_CATG\_\_CMK\_\_EXPORT\_IP | int | isys\_catg\_cmk\_list | isys\_catg\_cmk\_list\_\_export\_ip |     |     |
| Hostadresse | int | isys\_catg\_cmk\_list | isys\_catg\_cmk\_list\_\_isys\_catg\_ip\_list\_\_id |     |     |
| LC\_\_CATG\_\_CMK\_\_HOSTNAME | text | isys\_catg\_cmk\_list | isys\_catg\_cmk\_list\_\_host\_name |     |     |
| LC\_\_CATG\_\_CMK\_\_HOSTNAME | int | isys\_catg\_cmk\_list | isys\_catg\_cmk\_list\_\_host\_name\_selection |     |     |
| Description | text\_area | isys\_catg\_cmk\_list | isys\_catg\_cmk\_list\_\_description |     |     |

### NDO

#### table: isys\_catg\_virtual\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| NDO Status | text | isys\_catg\_virtual\_list |     |     |     |
| NDO Status Button | text | isys\_catg\_virtual\_list |     |     |     |

### Kabel

#### table: isys\_catg\_cable\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Art des Kabels | int | isys\_catg\_cable\_list | isys\_catg\_cable\_list\_\_isys\_cable\_type\_\_id | isys\_cable\_type | isys\_cable\_type\_\_id |
| Farbe | int | isys\_catg\_cable\_list | isys\_catg\_cable\_list\_\_isys\_cable\_colour\_\_id | isys\_cable\_colour | isys\_cable\_colour\_\_id |
| Belegung | int | isys\_catg\_cable\_list | isys\_catg\_cable\_list\_\_isys\_cable\_occupancy\_\_id | isys\_cable\_occupancy | isys\_cable\_occupancy\_\_id |
| length in CM | float | isys\_catg\_cable\_list | isys\_catg\_cable\_list\_\_length |     |     |
| lengthneinheit | int | isys\_catg\_cable\_list | isys\_catg\_cable\_list\_\_isys\_depth\_unit\_\_id |     |     |
| Maximale Anzahl an Fasern/Adern | int | isys\_catg\_cable\_list | isys\_catg\_cable\_list\_\_max\_amount\_of\_fibers\_leads |     |     |
| connection | text | isys\_catg\_cable\_list | isys\_catg\_cable\_list\_\_id\_\_isys\_obj\_\_id |     |     |
| Description | text\_area | isys\_catg\_cable\_list | isys\_catg\_cable\_list\_\_description |     |     |

### Custom Identifier

#### table: isys\_catg\_identifier\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Key | text | isys\_catg\_identifier\_list | isys\_catg\_identifier\_list\_\_key |     |     |
| Value | text | isys\_catg\_identifier\_list | isys\_catg\_identifier\_list\_\_value |     |     |
| Zuletzt editiert | date\_time | isys\_catg\_identifier\_list | isys\_catg\_identifier\_list\_\_datetime |     |     |
| Art | int | isys\_catg\_identifier\_list | isys\_catg\_identifier\_list\_\_isys\_catg\_identifier\_type\_\_id | isys\_catg\_identifier\_type | isys\_catg\_identifier\_type\_\_id |
| Gruppe | text | isys\_catg\_identifier\_list | isys\_catg\_identifier\_list\_\_group |     |     |
| Letzter Scan | text | isys\_catg\_identifier\_list | isys\_catg\_identifier\_list\_\_last\_scan |     |     |
| Letzte update | date\_time | isys\_catg\_identifier\_list | isys\_obj\_\_updated |     |     |
| Description | text\_area | isys\_catg\_identifier\_list | isys\_catg\_identifier\_list\_\_description |     |     |

### Service

#### table: isys\_catg\_service\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Service Nummer | text | isys\_catg\_service\_list | isys\_catg\_service\_list\_\_service\_number |     |     |
| Art des Service | int | isys\_catg\_service\_list | isys\_catg\_service\_list\_\_isys\_service\_type\_\_id | isys\_service\_type | isys\_service\_type\_\_id |
| Service-category | int | isys\_catg\_service\_list | isys\_catg\_service\_list\_\_isys\_service\_category\_\_id | isys\_service\_category | isys\_service\_category\_\_id |
| Business Unit | int | isys\_catg\_service\_list | isys\_catg\_service\_list\_\_isys\_business\_unit\_\_id | isys\_business\_unit | isys\_business\_unit\_\_id |
| Aktiv im Service-Katalog | int | isys\_catg\_service\_list | isys\_catg\_service\_list\_\_active |     |     |
| Servicebeschreibung intern | text\_area | isys\_catg\_service\_list | isys\_catg\_service\_list\_\_service\_description\_intern |     |     |
| Servicebeschreibung extern | text\_area | isys\_catg\_service\_list | isys\_catg\_service\_list\_\_service\_description\_extern |     |     |
| Aliase | int | srv\_alias | isys\_catg\_service\_list\_\_id | isys\_catg\_service\_list\_2\_isys\_service\_alias | isys\_catg\_service\_list\_\_id |
| Description | text\_area | isys\_catg\_service\_list | isys\_catg\_service\_list\_\_description |     |     |

### Betriebssystem

#### table: isys\_catg\_application\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Betriebssystem | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |
| Typ | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_catg\_application\_type\_\_id | isys\_catg\_application\_type | isys\_catg\_application\_type\_\_id |
| priority | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_catg\_application\_priority\_\_id | isys\_catg\_application\_priority | isys\_catg\_application\_priority\_\_id |
| Zugewiesene Lizenz | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_cats\_lic\_list\_\_id | isys\_cats\_lic\_list | isys\_cats\_lic\_list\_\_id |
| Zugewiesener license key | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_cats\_lic\_list\_\_id | isys\_cats\_lic\_list | isys\_cats\_lic\_list\_\_id |
| Service | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_catg\_relation\_list\_\_id | isys\_catg\_its\_components\_list | isys\_catg\_its\_components\_list\_\_id |
| Variante | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_cats\_app\_variant\_list\_\_id | isys\_cats\_app\_variant\_list | isys\_cats\_app\_variant\_list\_\_id |
| Versionsnummer | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_catg\_version\_list\_\_id | isys\_catg\_version\_list | isys\_catg\_version\_list\_\_id |
| Description | text\_area | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_description |     |     |

### QinQ SP-VLAN

#### table: isys\_catg\_qinq\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Zugewiesenes SP-VLAN | int | isys\_catg\_qinq\_list | isys\_catg\_qinq\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |
| Description | text\_area | isys\_catg\_qinq\_list | isys\_catg\_qinq\_list\_\_description |     |     |

### Faser/Ader

#### table: isys\_catg\_fiber\_lead\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Label | text | isys\_catg\_fiber\_lead\_list | isys\_catg\_fiber\_lead\_list\_\_label |     |     |
| category | int | isys\_catg\_fiber\_lead\_list | isys\_catg\_fiber\_lead\_list\_\_isys\_fiber\_category\_\_id | isys\_fiber\_category | isys\_fiber\_category\_\_id |
| Farbe | int | isys\_catg\_fiber\_lead\_list | isys\_catg\_fiber\_lead\_list\_\_isys\_cable\_colour\_\_id | isys\_cable\_colour | isys\_cable\_colour\_\_id |
| attenuation | float | isys\_catg\_fiber\_lead\_list | isys\_catg\_fiber\_lead\_list\_\_damping |     |     |
| Description | text\_area | isys\_catg\_fiber\_lead\_list | isys\_catg\_fiber\_lead\_list\_\_description |     |     |

### QinQ CE-VLAN

#### table: isys\_catg\_qinq\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Zugewiesenes SP-VLAN | int | isys\_catg\_qinq\_list | isys\_catg\_qinq\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |

### Bilder

#### table: isys\_catg\_images\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| filename | text | isys\_catg\_images\_list | isys\_catg\_images\_list\_\_filename |     |     |
| fileinhalte | text | isys\_catg\_images\_list | isys\_catg\_images\_list\_\_filecontent |     |     |

### WAN-Leitungen

#### table: isys\_catg\_wan\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| designation | text | isys\_catg\_wan\_list | isys\_catg\_wan\_list\_\_title |     |     |
| Rolle | int | isys\_catg\_wan\_list | isys\_catg\_wan\_list\_\_isys\_wan\_role\_\_id | isys\_wan\_role | isys\_wan\_role\_\_id |
| Typ | int | isys\_catg\_wan\_list | isys\_catg\_wan\_list\_\_isys\_wan\_type\_\_id | isys\_wan\_type | isys\_wan\_type\_\_id |
| channels | int | isys\_catg\_wan\_list | isys\_catg\_wan\_list\_\_channels |     |     |
| Rufnummer(n) | text\_area | isys\_catg\_wan\_list | isys\_catg\_wan\_list\_\_call\_numbers |     |     |
| Standort des Anschlusses | int | isys\_catg\_wan\_list | isys\_catg\_wan\_list\_\_connection\_location | isys\_obj | isys\_obj\_\_id |
| capacity UP | float | isys\_catg\_wan\_list | isys\_catg\_wan\_list\_\_capacity\_up |     |     |
| capacity UP Einheit | int | isys\_catg\_wan\_list | isys\_catg\_wan\_list\_\_capacity\_up\_unit | isys\_wan\_capacity\_unit | isys\_wan\_capacity\_unit\_\_id |
| capacity DOWN | float | isys\_catg\_wan\_list | isys\_catg\_wan\_list\_\_capacity\_down |     |     |
| capacity DOWN Einheit | int | isys\_catg\_wan\_list | isys\_catg\_wan\_list\_\_capacity\_down\_unit | isys\_wan\_capacity\_unit | isys\_wan\_capacity\_unit\_\_id |
| Max. capacity UP | float | isys\_catg\_wan\_list | isys\_catg\_wan\_list\_\_max\_capacity\_up |     |     |
| Max. capacity UP Einheit | int | isys\_catg\_wan\_list | isys\_catg\_wan\_list\_\_max\_capacity\_up\_unit | isys\_wan\_capacity\_unit | isys\_wan\_capacity\_unit\_\_id |
| Max. capacity DOWN | float | isys\_catg\_wan\_list | isys\_catg\_wan\_list\_\_max\_capacity\_down |     |     |
| Max. capacity DOWN Einheit | int | isys\_catg\_wan\_list | isys\_catg\_wan\_list\_\_max\_capacity\_down\_unit | isys\_wan\_capacity\_unit | isys\_wan\_capacity\_unit\_\_id |
| Projektnummer | text | isys\_catg\_wan\_list | isys\_catg\_wan\_list\_\_project\_no |     |     |
| VLAN-ID | int | isys\_catg\_wan\_list | isys\_catg\_wan\_list\_\_vlan | isys\_obj | isys\_obj\_\_id |
| Warenkorbnummer | text | isys\_catg\_wan\_list | isys\_catg\_wan\_list\_\_shopping\_cart\_no |     |     |
| Ticket Nr. | text | isys\_catg\_wan\_list | isys\_catg\_wan\_list\_\_ticket\_no |     |     |
| Kunden Nr. | text | isys\_catg\_wan\_list | isys\_catg\_wan\_list\_\_customer\_no |     |     |
| Verbundene Router | int | isys\_catg\_wan\_list | isys\_catg\_wan\_list\_\_id | isys\_catg\_wan\_list\_2\_router | isys\_catg\_wan\_list\_2\_router\_\_isys\_catg\_wan\_list\_\_id |
| Verbundene Netze | int | isys\_catg\_wan\_list | isys\_catg\_wan\_list\_\_id | isys\_catg\_wan\_list\_2\_net | isys\_catg\_wan\_list\_2\_net\_\_isys\_catg\_wan\_list\_\_id |
| Description | text\_area | isys\_catg\_wan\_list | isys\_catg\_wan\_list\_\_description |     |     |

### Remote Management Controller

#### table: isys\_catg\_rm\_controller\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Primarye AccesssURL | text | isys\_catg\_rm\_controller\_list | isys\_catg\_access\_list\_\_id |     |     |
| Remote Management Controller | int | isys\_catg\_rm\_controller\_list | isys\_catg\_rm\_controller\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |
| Description | text\_area | isys\_catg\_rm\_controller\_list | isys\_catg\_rm\_controller\_list\_\_description |     |     |

### Verwaltete devicee

#### table: isys\_catg\_virtual\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Remote Management Controller | int | isys\_catg\_virtual\_list | isys\_connection\_\_isys\_obj\_\_id |     |     |

### Virtuell gemanagte objects

#### table: isys\_catg\_virtual\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| object | int | isys\_catg\_virtual\_list | isys\_catg\_virtual\_host\_list\_\_administration\_service |     |     |

### VRRP

#### table: isys\_catg\_vrrp\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Typ | int | isys\_catg\_vrrp\_list | isys\_catg\_vrrp\_list\_\_isys\_vrrp\_type\_\_id | isys\_vrrp\_type | isys\_vrrp\_type\_\_id |
| VR ID | text | isys\_catg\_vrrp\_list | isys\_catg\_vrrp\_list\_\_vr\_id |     |     |
| Description | text\_area | isys\_catg\_vrrp\_list | isys\_catg\_vrrp\_list\_\_description |     |     |

### Mitglieder

#### table: isys\_catg\_vrrp\_member\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| VRRP Mitglied | int | isys\_catg\_vrrp\_member\_list | isys\_catg\_vrrp\_member\_list\_\_isys\_catg\_log\_port\_list\_\_id | isys\_catg\_log\_port\_list | isys\_catg\_log\_port\_list\_\_id |
| Description | text\_area | isys\_catg\_vrrp\_member\_list | isys\_catg\_vrrp\_member\_list\_\_description |     |     |

### Stack Mitglieder

#### table: isys\_catg\_stack\_member\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Mitglied | int | isys\_catg\_stack\_member\_list | isys\_catg\_stack\_member\_list\_\_stack\_member | isys\_obj | isys\_obj\_\_id |
| Modus | int | isys\_catg\_stack\_member\_list | isys\_catg\_stack\_member\_list\_\_mode |     |     |
| Description | text\_area | isys\_catg\_stack\_member\_list | isys\_catg\_stack\_member\_list\_\_description |     |     |

### Letzter eingeloggter user

#### table: isys\_catg\_last\_login\_user\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Letzter eingeloggter user | text | isys\_catg\_last\_login\_user\_list | isys\_catg\_last\_login\_user\_list\_\_last\_login |     |     |
| Typ | text | isys\_catg\_last\_login\_user\_list | isys\_catg\_last\_login\_user\_list\_\_type |     |     |
| Description | text\_area | isys\_catg\_last\_login\_user\_list | isys\_catg\_last\_login\_user\_list\_\_description |     |     |

### Netzbereich

#### table: isys\_catg\_virtual\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Bereiche | text | isys\_catg\_virtual\_list | isys\_cats\_net\_zone\_list\_\_isys\_obj\_\_id\_\_zone | isys\_obj | isys\_obj\_\_id |

### Optionen

#### table: isys\_catg\_net\_zone\_options\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Bereichsfarbe | text | isys\_catg\_net\_zone\_options\_list | isys\_catg\_net\_zone\_options\_list\_\_color |     |     |
| Bereichsfarbe | text | isys\_catg\_net\_zone\_options\_list | isys\_catg\_net\_zone\_options\_list\_\_domain |     |     |
| Description | text\_area | isys\_catg\_net\_zone\_options\_list | isys\_catg\_net\_zone\_options\_list\_\_description |     |     |

### Bereiche

#### table: isys\_catg\_virtual\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Bereiche | text | isys\_catg\_virtual\_list | isys\_cats\_net\_zone\_list\_\_isys\_obj\_\_id\_\_zone | isys\_obj | isys\_obj\_\_id |

Specific Categories
----------------------

### Rack

#### table: isys\_cats\_enclosure\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Vertikale bays (Frontseite) | int | isys\_cats\_enclosure\_list | isys\_cats\_enclosure\_list\_\_vertical\_slots\_front |     |     |
| Vertikale bays (rear side) | int | isys\_cats\_enclosure\_list | isys\_cats\_enclosure\_list\_\_vertical\_slots\_rear |     |     |
| Height unit sorting | text | isys\_cats\_enclosure\_list | isys\_cats\_enclosure\_list\_\_slot\_sorting |     |     |
| Description | text\_area | isys\_cats\_enclosure\_list | isys\_cats\_enclosure\_list\_\_description |     |     |

### Raum

#### table: isys\_cats\_room\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Typ | int | isys\_cats\_room\_list | isys\_cats\_room\_list\_\_isys\_room\_type\_\_id | isys\_room\_type | isys\_room\_type\_\_id |
| Raumnummer | text | isys\_cats\_room\_list | isys\_cats\_room\_list\_\_number |     |     |
| Stockwerk | text | isys\_cats\_room\_list | isys\_cats\_room\_list\_\_floor |     |     |
| Description | text\_area | isys\_cats\_room\_list | isys\_cats\_room\_list\_\_description |     |     |

### Dienste

#### table: isys\_cats\_application\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Spezifikation | text | isys\_cats\_application\_list | isys\_cats\_application\_list\_\_specification |     |     |
| Hfirstller | int | isys\_cats\_application\_list | isys\_cats\_application\_list\_\_isys\_application\_manufacturer\_\_id | isys\_application\_manufacturer | isys\_application\_manufacturer\_\_id |
| installationsart | int | isys\_cats\_application\_list | isys\_cats\_application\_list\_\_isys\_installation\_type\_\_id | isys\_installation\_type | isys\_installation\_type\_\_id |
| Registrierungs-Key | text | isys\_cats\_application\_list | isys\_cats\_application\_list\_\_registration\_key |     |     |
| installationspfad | text | isys\_cats\_application\_list | isys\_cats\_application\_list\_\_install\_path |     |     |
| Anzahl installationen | int | isys\_cats\_application\_list |     |     |     |
| Description | text\_area | isys\_cats\_application\_list | isys\_cats\_application\_list\_\_description |     |     |

### Switch

#### table: isys\_cats\_switch\_net\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| VLAN Management Protokoll | int | isys\_cats\_switch\_net\_list | isys\_cats\_switch\_net\_list\_\_isys\_vlan\_management\_protocol\_\_id | isys\_vlan\_management\_protocol | isys\_vlan\_management\_protocol\_\_id |
| Rolle | int | isys\_cats\_switch\_net\_list | isys\_cats\_switch\_net\_list\_\_isys\_switch\_role\_\_id | isys\_switch\_role | isys\_switch\_role\_\_id |
| Spanning Tree | int | isys\_cats\_switch\_net\_list | isys\_cats\_switch\_net\_list\_\_isys\_switch\_spanning\_tree\_\_id | isys\_switch\_spanning\_tree | isys\_switch\_spanning\_tree\_\_id |
| Description | text\_area | isys\_cats\_switch\_net\_list | isys\_cats\_switch\_net\_list\_\_description |     |     |

### WAN-Leitungen

#### table: isys\_cats\_wan\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Rolle | int | isys\_cats\_wan\_list | isys\_cats\_wan\_list\_\_isys\_wan\_role\_\_id | isys\_wan\_role | isys\_wan\_role\_\_id |
| Typ | int | isys\_cats\_wan\_list | isys\_cats\_wan\_list\_\_isys\_wan\_type\_\_id | isys\_wan\_type | isys\_wan\_type\_\_id |
| capacity | double | isys\_cats\_wan\_list | isys\_cats\_wan\_list\_\_capacity |     |     |
| capacityseinheit | int | isys\_cats\_wan\_list | isys\_cats\_wan\_list\_\_isys\_wan\_capacity\_unit\_\_id | isys\_wan\_capacity\_unit | isys\_wan\_capacity\_unit\_\_id |
| Description | text\_area | isys\_cats\_wan\_list | isys\_cats\_wan\_list\_\_description |     |     |

### Notfallplan

#### table: isys\_cats\_emergency\_plan\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Zeitbedarf | int | isys\_cats\_emergency\_plan\_list | isys\_cats\_emergency\_plan\_list\_\_calc\_time\_need |     |     |
| Einheit | int | isys\_cats\_emergency\_plan\_list | isys\_cats\_emergency\_plan\_list\_\_isys\_unit\_of\_time\_\_id | isys\_unit\_of\_time | isys\_unit\_of\_time\_\_id |
| date emergency exercise | date\_time | isys\_cats\_emergency\_plan\_list | isys\_cats\_emergency\_plan\_list\_\_practice\_actual\_date |     |     |
| Description | text\_area | isys\_cats\_emergency\_plan\_list | isys\_cats\_emergency\_plan\_list\_\_description |     |     |

### Klimaanlage

#### table: isys\_cats\_ac\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Art | int | isys\_cats\_ac\_list | isys\_cats\_ac\_list\_\_isys\_ac\_type\_\_id | isys\_ac\_type | isys\_ac\_type\_\_id |
| Schwellwert | float | isys\_cats\_ac\_list | isys\_cats\_ac\_list\_\_threshold |     |     |
| Speicher-Einheit | int | isys\_cats\_ac\_list | isys\_cats\_ac\_list\_\_isys\_temp\_unit\_\_id | isys\_temp\_unit | isys\_temp\_unit\_\_id |
| capacityseinheit | int | isys\_cats\_ac\_list | isys\_cats\_ac\_list\_\_isys\_ac\_refrigerating\_capacity\_unit\_\_id | isys\_ac\_refrigerating\_capacity\_unit | isys\_ac\_refrigerating\_capacity\_unit\_\_id |
| cooling capacity | float | isys\_cats\_ac\_list | isys\_cats\_ac\_list\_\_capacity |     |     |
| Luftmenge | float | isys\_cats\_ac\_list | isys\_cats\_ac\_list\_\_air\_quantity |     |     |
| Volumen-Einheit | int | isys\_cats\_ac\_list | isys\_cats\_ac\_list\_\_isys\_ac\_air\_quantity\_unit\_\_id | isys\_ac\_air\_quantity\_unit | isys\_ac\_air\_quantity\_unit\_\_id |
| Breite | float | isys\_cats\_ac\_list | isys\_cats\_ac\_list\_\_width |     |     |
| height | float | isys\_cats\_ac\_list | isys\_cats\_ac\_list\_\_height |     |     |
| Tiefe | float | isys\_cats\_ac\_list | isys\_cats\_ac\_list\_\_depth |     |     |
| unit of measurement | int | isys\_cats\_ac\_list | isys\_cats\_ac\_list\_\_isys\_depth\_unit\_\_id | isys\_depth\_unit | isys\_depth\_unit\_\_id |
| Description | text\_area | isys\_cats\_ac\_list | isys\_cats\_ac\_list\_\_description |     |     |

### WiFi-device

#### table: isys\_cats\_access\_point\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| designation | text | isys\_cats\_access\_point\_list | isys\_cats\_access\_point\_list\_\_title |     |     |
| function | int | isys\_cats\_access\_point\_list | isys\_cats\_access\_point\_list\_\_isys\_wlan\_function\_\_id | isys\_wlan\_function | isys\_wlan\_function\_\_id |
| default | int | isys\_cats\_access\_point\_list | isys\_cats\_access\_point\_list\_\_isys\_wlan\_standard\_\_id | isys\_wlan\_standard | isys\_wlan\_standard\_\_id |
| Kanal | int | isys\_cats\_access\_point\_list | isys\_cats\_access\_point\_list\_\_isys\_wlan\_channel\_\_id | isys\_wlan\_channel | isys\_wlan\_channel\_\_id |
| SSID viatragen | int | isys\_cats\_access\_point\_list | isys\_cats\_access\_point\_list\_\_broadcast\_ssid |     |     |
| SSID | text | isys\_cats\_access\_point\_list | isys\_cats\_access\_point\_list\_\_ssid |     |     |
| MAC-Filter | int | isys\_cats\_access\_point\_list | isys\_cats\_access\_point\_list\_\_mac\_filter |     |     |
| Authentifikation | int | isys\_cats\_access\_point\_list | isys\_cats\_access\_point\_list\_\_isys\_wlan\_auth\_\_id | isys\_wlan\_auth | isys\_wlan\_auth\_\_id |
| encryption | int | isys\_cats\_access\_point\_list | isys\_cats\_access\_point\_list\_\_encryption | isys\_wlan\_encryption | isys\_wlan\_encryption\_\_id |
| key | text | isys\_cats\_access\_point\_list | isys\_cats\_access\_point\_list\_\_key |     |     |
| Description | text\_area | isys\_cats\_access\_point\_list | isys\_cats\_access\_point\_list\_\_description |     |     |

### Monitor

#### table: isys\_cats\_monitor\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Display | float | isys\_cats\_monitor\_list | isys\_cats\_monitor\_list\_\_display |     |     |
| Einheit | int | isys\_cats\_monitor\_list | isys\_cats\_monitor\_list\_\_isys\_depth\_unit\_\_id | isys\_depth\_unit | isys\_depth\_unit\_\_id |
| Typ | int | isys\_cats\_monitor\_list | isys\_cats\_monitor\_list\_\_isys\_monitor\_type\_\_id | isys\_monitor\_type | isys\_monitor\_type\_\_id |
| resolution | int | isys\_cats\_monitor\_list | isys\_cats\_monitor\_list\_\_isys\_monitor\_resolution\_\_id | isys\_monitor\_resolution | isys\_monitor\_resolution\_\_id |
| Pivot | int | isys\_cats\_monitor\_list | isys\_cats\_monitor\_list\_\_pivot |     |     |
| Lautsprecher | int | isys\_cats\_monitor\_list | isys\_cats\_monitor\_list\_\_speaker |     |     |
| Description | text\_area | isys\_cats\_monitor\_list | isys\_cats\_monitor\_list\_\_description |     |     |

### Arbeitsplatzsystem

#### table: isys\_cats\_client\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Typ des Clients | int | isys\_cats\_client\_list | isys\_cats\_client\_list\_\_isys\_client\_type\_\_id | isys\_client\_type | isys\_client\_type\_\_id |
| Tastatur-Layout | text | isys\_cats\_client\_list | isys\_cats\_client\_list\_\_keyboard\_layout |     |     |
| Description | text\_area | isys\_cats\_client\_list | isys\_cats\_client\_list\_\_description |     |     |

### FC-Switch

#### table: isys\_cats\_switch\_fc\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| designation | text | isys\_cats\_switch\_fc\_list | isys\_cats\_switch\_fc\_list\_\_title |     |     |
| Aktiv | int | isys\_cats\_switch\_fc\_list | isys\_cats\_switch\_fc\_list\_\_unit\_active |     |     |
| Description | text\_area | isys\_cats\_switch\_fc\_list | isys\_cats\_switch\_fc\_list\_\_description |     |     |

### Routing

#### table: isys\_cats\_router\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Routingprotokoll | int | isys\_cats\_router\_list | isys\_cats\_router\_list\_\_routing\_protocol | isys\_routing\_protocol | isys\_routing\_protocol\_\_id |
| Gateway Adresse | int | isys\_cats\_router\_list | isys\_cats\_router\_list\_\_id |     |     |
| Description | text\_area | isys\_cats\_router\_list | isys\_cats\_router\_list\_\_description |     |     |

### Drucker

#### table: isys\_cats\_prt\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Typ | int | isys\_cats\_prt\_list | isys\_cats\_prt\_list\_\_isys\_cats\_prt\_type\_\_id | isys\_cats\_prt\_type | isys\_cats\_prt\_type\_\_id |
| Farbe | int | isys\_cats\_prt\_list | isys\_cats\_prt\_list\_\_iscolor |     |     |
| Duplex | int | isys\_cats\_prt\_list | isys\_cats\_prt\_list\_\_isduplex |     |     |
| Emulation | int | isys\_cats\_prt\_list | isys\_cats\_prt\_list\_\_isys\_cats\_prt\_emulation\_\_id | isys\_cats\_prt\_emulation | isys\_cats\_prt\_emulation\_\_id |
| Papierformat | int | isys\_cats\_prt\_list | isys\_cats\_prt\_list\_\_isys\_cats\_prt\_paper\_\_id | isys\_cats\_prt\_paper | isys\_cats\_prt\_paper\_\_id |
| Description | text\_area | isys\_cats\_prt\_list | isys\_cats\_prt\_list\_\_description |     |     |

### fileen

#### table: isys\_cats\_file\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| designation | text | isys\_cats\_file\_list | isys\_file\_version\_\_title |     |     |
| filename | int | isys\_cats\_file\_list | isys\_file\_version\_\_isys\_file\_physical\_\_id |     |     |
| category | int | isys\_cats\_file\_list | isys\_cats\_file\_list\_\_isys\_file\_category\_\_id | isys\_file\_category | isys\_file\_category\_\_id |
| Revision | text | isys\_cats\_file\_list | isys\_file\_version\_\_revision |     |     |
| Versions-Description | text\_area | isys\_cats\_file\_list | isys\_file\_version\_\_description |     |     |
| Description | text\_area | isys\_cats\_file\_list | isys\_cats\_file\_list\_\_description |     |     |
| Version | int | isys\_cats\_file\_list | isys\_cats\_file\_list\_\_isys\_file\_version\_\_id | isys\_file\_version | isys\_file\_version\_\_id |
| MD5 Checksumme | text | isys\_cats\_file\_list | isys\_file\_physical\_\_md5 |     |     |

### Anwendungen

#### table: isys\_cats\_application\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Spezifikation | text | isys\_cats\_application\_list | isys\_cats\_application\_list\_\_specification |     |     |
| Hfirstller | int | isys\_cats\_application\_list | isys\_cats\_application\_list\_\_isys\_application\_manufacturer\_\_id | isys\_application\_manufacturer | isys\_application\_manufacturer\_\_id |
| installationsart | int | isys\_cats\_application\_list | isys\_cats\_application\_list\_\_isys\_installation\_type\_\_id | isys\_installation\_type | isys\_installation\_type\_\_id |
| Registrierungs-Key | text | isys\_cats\_application\_list | isys\_cats\_application\_list\_\_registration\_key |     |     |
| installationspfad | text | isys\_cats\_application\_list | isys\_cats\_application\_list\_\_install\_path |     |     |
| Anzahl installationen | int | isys\_cats\_application\_list |     |     |     |
| Description | text\_area | isys\_cats\_application\_list | isys\_cats\_application\_list\_\_description |     |     |

### Netz

#### table: isys\_cats\_net\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| designation | text | isys\_cats\_net\_list | isys\_cats\_net\_list\_\_title |     |     |
| Typ | int | isys\_cats\_net\_list | isys\_cats\_net\_list\_\_isys\_net\_type\_\_id | isys\_net\_type | isys\_net\_type\_\_id |
| Netz | text | isys\_cats\_net\_list | isys\_cats\_net\_list\_\_address |     |     |
| Netzmaske | text | isys\_cats\_net\_list | isys\_cats\_net\_list\_\_mask |     |     |
| defaultgateway | int | isys\_cats\_net\_list | isys\_cats\_net\_list\_\_isys\_catg\_ip\_list\_\_id |     |     |
| Adresse von | text | isys\_cats\_net\_list | isys\_cats\_net\_list\_\_address\_range\_from |     |     |
| Adresse bis | text | isys\_cats\_net\_list | isys\_cats\_net\_list\_\_address\_range\_to |     |     |
| DNS-Server | int | isys\_cats\_net\_list | isys\_cats\_net\_list\_\_id | isys\_cats\_net\_list\_2\_isys\_catg\_ip\_list | isys\_cats\_net\_list\_\_id |
| DNS domain | int | dns\_domain | isys\_cats\_net\_list\_\_id | isys\_cats\_net\_list\_2\_isys\_net\_dns\_domain | isys\_cats\_net\_list\_\_id |
| CIDR-Suffix | int | isys\_cats\_net\_list | isys\_cats\_net\_list\_\_cidr\_suffix |     |     |
| Reverse DNS | text | isys\_cats\_net\_list | isys\_cats\_net\_list\_\_reverse\_dns |     |     |
| Layer-2-Netz Zuordnung | int | isys\_cats\_net\_list | isys\_obj\_\_id |     |     |
| Netz | text | isys\_cats\_net\_list |     |     |     |
| Adressbereich | text | isys\_cats\_net\_list | isys\_obj\_\_id |     |     |
| Network with suffix | text | isys\_cats\_net\_list | isys\_obj\_\_id |     |     |
| Zugewiesene Adressen | text | isys\_cats\_net\_list | isys\_obj\_\_id |     |     |
| Description | text\_area | isys\_cats\_net\_list | isys\_cats\_net\_list\_\_description |     |     |

### Mobilfunk

#### table: isys\_cats\_mobile\_phone\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| IMEI-Nummer | text | isys\_cats\_mobile\_phone\_list | isys\_cats\_mobile\_phone\_list\_\_imei\_number |     |     |
| Description | text\_area | isys\_cats\_mobile\_phone\_list | isys\_cats\_mobile\_phone\_list\_\_description |     |     |

### objectgruppe

#### table: isys\_cats\_group\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| object | int | isys\_cats\_group\_list | isys\_cats\_group\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |
| objecttyp | text | isys\_cats\_group\_list | connected\_type |     |     |
| Description | text\_area | isys\_cats\_group\_list | isys\_cats\_group\_list\_\_description |     |     |

### license key

#### table: isys\_cats\_lic\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| key | text | isys\_cats\_lic\_list | isys\_cats\_lic\_list\_\_key |     |     |
| Serial number | text | isys\_cats\_lic\_list | isys\_cats\_lic\_list\_\_serial |     |     |
| Lizenz Typ | int | isys\_cats\_lic\_list | isys\_cats\_lic\_list\_\_type |     |     |
| Anzahl | int | isys\_cats\_lic\_list | isys\_cats\_lic\_list\_\_amount |     |     |
| Lizenzen in Benutzung | int | isys\_cats\_lic\_list | isys\_cats\_lic\_list\_\_id |     |     |
| Freie Lizenzen | int | isys\_cats\_lic\_list | isys\_cats\_lic\_list\_\_id |     |     |
| Startdatum | date | isys\_cats\_lic\_list | isys\_cats\_lic\_list\_\_start |     |     |
| Ablaufdatum | date | isys\_cats\_lic\_list | isys\_cats\_lic\_list\_\_expire |     |     |
| Einzelpreis | double | isys\_cats\_lic\_list | isys\_cats\_lic\_list\_\_cost |     |     |
| Gesamtkosten | double | isys\_cats\_lic\_list | isys\_cats\_lic\_list\_\_id |     |     |
| Description | text\_area | isys\_cats\_lic\_list | isys\_cats\_lic\_list\_\_description |     |     |

### Aktuelle file

#### table: isys\_cats\_file\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| designation | text | isys\_cats\_file\_list | isys\_file\_version\_\_title |     |     |
| filename | int | isys\_cats\_file\_list | isys\_file\_version\_\_isys\_file\_physical\_\_id |     |     |
| category | int | isys\_cats\_file\_list | isys\_cats\_file\_list\_\_isys\_file\_category\_\_id | isys\_file\_category | isys\_file\_category\_\_id |
| Revision | text | isys\_cats\_file\_list | isys\_file\_version\_\_revision |     |     |
| Versions-Description | text\_area | isys\_cats\_file\_list | isys\_file\_version\_\_description |     |     |
| Description | text\_area | isys\_cats\_file\_list | isys\_cats\_file\_list\_\_description |     |     |
| Version | int | isys\_cats\_file\_list | isys\_cats\_file\_list\_\_isys\_file\_version\_\_id | isys\_file\_version | isys\_file\_version\_\_id |
| MD5 Checksumme | text | isys\_cats\_file\_list | isys\_file\_physical\_\_md5 |     |     |

### fileversionen

#### table: isys\_file\_version\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| filename | text | isys\_file\_version\_list | isys\_file\_physical\_\_filename\_original |     |     |
| file Inhalt | text | isys\_file\_version\_list | isys\_file\_physical\_\_filename |     |     |
| designation | text | isys\_file\_version\_list | isys\_file\_version\_\_title |     |     |
| Revision | text | isys\_file\_version\_list | isys\_file\_version\_\_revision |     |     |
| Upload Datum | text | isys\_file\_version\_list | isys\_file\_physical\_\_date\_uploaded |     |     |
| Versions-Description | text\_area | isys\_file\_version\_list | isys\_file\_version\_\_description |     |     |
| MD5 Checksumme | text | isys\_file\_version\_list | isys\_file\_physical\_\_md5 |     |     |
| Upload von | text | isys\_file\_version\_list | isys\_file\_physical\_\_user\_id\_uploaded |     |     |

### Zugewiesene objects

#### table: isys\_cats\_file\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Zugewiesene objects | int | isys\_cats\_file\_list |     |     |     |

### Notfallplan propertyen

#### table: isys\_cats\_emergency\_plan\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Zeitbedarf | int | isys\_cats\_emergency\_plan\_list | isys\_cats\_emergency\_plan\_list\_\_calc\_time\_need |     |     |
| Einheit | int | isys\_cats\_emergency\_plan\_list | isys\_cats\_emergency\_plan\_list\_\_isys\_unit\_of\_time\_\_id | isys\_unit\_of\_time | isys\_unit\_of\_time\_\_id |
| date emergency exercise | date\_time | isys\_cats\_emergency\_plan\_list | isys\_cats\_emergency\_plan\_list\_\_practice\_actual\_date |     |     |
| Description | text\_area | isys\_cats\_emergency\_plan\_list | isys\_cats\_emergency\_plan\_list\_\_description |     |     |

### assignede objects

#### table: isys\_catg\_emergency\_plan\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| designation | text | isys\_catg\_emergency\_plan\_list | isys\_catg\_emergency\_plan\_list\_\_isys\_obj\_\_id |     |     |

### Netzart

#### table: isys\_cats\_ws\_net\_type\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Netzart | int | isys\_cats\_ws\_net\_type\_list | isys\_cats\_ws\_net\_type\_list\_\_isys\_net\_type\_title\_\_id | isys\_net\_type\_title | isys\_net\_type\_title\_\_id |
| Description | text\_area | isys\_cats\_ws\_net\_type\_list | isys\_cats\_ws\_net\_type\_list\_\_description |     |     |

### Zugeordnete objects

#### table: isys\_cats\_ws\_net\_type\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Zugewiesene objects | int | isys\_cats\_ws\_net\_type\_list | isys\_obj\_\_id |     |     |

### Leitungsnetz

#### table: isys\_cats\_ws\_net\_type\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Netzart | int | isys\_cats\_ws\_net\_type\_list | isys\_cats\_ws\_net\_type\_list\_\_isys\_net\_type\_title\_\_id | isys\_net\_type\_title | isys\_net\_type\_title\_\_id |
| Description | text\_area | isys\_cats\_ws\_net\_type\_list | isys\_cats\_ws\_net\_type\_list\_\_description |     |     |

### Unterbrechungsfreie Stromversorgung

#### table: isys\_cats\_ups\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Typ | int | isys\_cats\_ups\_list | isys\_cats\_ups\_list\_\_isys\_ups\_type\_\_id | isys\_ups\_type | isys\_ups\_type\_\_id |
| Batterietyp | int | isys\_cats\_ups\_list | isys\_cats\_ups\_list\_\_isys\_ups\_battery\_type\_\_id | isys\_ups\_battery\_type | isys\_ups\_battery\_type\_\_id |
| Anzahl Batterien | int | isys\_cats\_ups\_list | isys\_cats\_ups\_list\_\_battery\_amount |     |     |
| Ladedauer | int | isys\_cats\_ups\_list | isys\_cats\_ups\_list\_\_charge\_time |     |     |
| Einheit | int | charge\_time | isys\_cats\_ups\_list\_\_charge\_time\_\_isys\_unit\_of\_time\_\_id | isys\_unit\_of\_time | isys\_unit\_of\_time\_\_id |
| Autonomiezeit unter Volllast | int | isys\_cats\_ups\_list | isys\_cats\_ups\_list\_\_autonomy\_time |     |     |
| Einheit | int | autonomy\_time | isys\_cats\_ups\_list\_\_autonomy\_time\_\_isys\_unit\_of\_time\_\_id | isys\_unit\_of\_time | isys\_unit\_of\_time\_\_id |
| Description | text\_area | isys\_cats\_ups\_list | isys\_cats\_ups\_list\_\_description |     |     |

### Netzersatzanlage

#### table: isys\_cats\_eps\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Art | int | isys\_cats\_eps\_list | isys\_cats\_eps\_list\_\_isys\_cats\_eps\_type\_\_id | isys\_cats\_eps\_type | isys\_cats\_eps\_type\_\_id |
| Anlaufzeit | int | isys\_cats\_eps\_list | isys\_cats\_eps\_list\_\_warmup\_time |     |     |
| Einheit | int | isys\_cats\_eps\_list | isys\_cats\_eps\_list\_\_warmup\_time\_\_isys\_unit\_of\_time\_\_id | isys\_unit\_of\_time | isys\_unit\_of\_time\_\_id |
| Kraftstofftank | int | isys\_cats\_eps\_list | isys\_cats\_eps\_list\_\_fuel\_tank |     |     |
| Einheit | int | isys\_cats\_eps\_list | isys\_cats\_eps\_list\_\_isys\_volume\_unit\_\_id | isys\_volume\_unit | isys\_volume\_unit\_\_id |
| Autonomiezeit | int | isys\_cats\_eps\_list | isys\_cats\_eps\_list\_\_autonomy\_time |     |     |
| Einheit | int | isys\_cats\_eps\_list | isys\_cats\_eps\_list\_\_autonomy\_time\_\_isys\_unit\_of\_time\_\_id | isys\_unit\_of\_time | isys\_unit\_of\_time\_\_id |
| Description | text\_area | isys\_cats\_eps\_list | isys\_cats\_eps\_list\_\_description |     |     |

### SAN Zoning

#### table: isys\_cats\_san\_zoning\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| designation | text | isys\_cats\_san\_zoning\_list | isys\_cats\_san\_zoning\_list\_\_title |     |     |
| Mitglieder | int | isys\_cats\_san\_zoning\_list | isys\_cats\_san\_zoning\_list\_\_id |     |     |
| Description | text\_area | isys\_cats\_san\_zoning\_list | isys\_cats\_san\_zoning\_list\_\_description |     |     |

### Organisation

#### table: isys\_cats\_organization\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| designation | text | isys\_cats\_organization\_list | isys\_cats\_organization\_list\_\_title |     |     |
| Telefon | text | isys\_cats\_organization\_list | isys\_cats\_organization\_list\_\_telephone |     |     |
| Fax | text | isys\_cats\_organization\_list | isys\_cats\_organization\_list\_\_fax |     |     |
| Webseite | text | isys\_cats\_organization\_list | isys\_cats\_organization\_list\_\_website |     |     |
| Zentrale | int | isys\_cats\_organization\_list | isys\_cats\_organization\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |
| Description | text\_area | isys\_cats\_organization\_list | isys\_cats\_organization\_list\_\_description |     |     |

### Stammdaten

#### table: isys\_cats\_organization\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| designation | text | isys\_cats\_organization\_list | isys\_cats\_organization\_list\_\_title |     |     |
| Telefon | text | isys\_cats\_organization\_list | isys\_cats\_organization\_list\_\_telephone |     |     |
| Fax | text | isys\_cats\_organization\_list | isys\_cats\_organization\_list\_\_fax |     |     |
| Webseite | text | isys\_cats\_organization\_list | isys\_cats\_organization\_list\_\_website |     |     |
| Zentrale | int | isys\_cats\_organization\_list | isys\_cats\_organization\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |
| Description | text\_area | isys\_cats\_organization\_list | isys\_cats\_organization\_list\_\_description |     |     |

### Personen

#### table: isys\_cats\_organization\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| designation | int | isys\_cats\_organization\_list | isys\_cats\_person\_list\_\_isys\_obj\_\_id |     |     |
| Kontakt | int | isys\_cats\_organization\_list | isys\_cats\_person\_list\_\_isys\_obj\_\_id |     |     |

### Personen

#### table: isys\_cats\_person\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| designation | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_title |     |     |
| Anrede | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_salutation |     |     |
| Vorname | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_first\_name |     |     |
| Nachname | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_last\_name |     |     |
| Titel (Akademischer Grad) | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_academic\_degree |     |     |
| function | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_function |     |     |
| Dienstbezeichnung | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_service\_designation |     |     |
| Street | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_street |     |     |
| Ort | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_city |     |     |
| PLZ | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_zip\_code |     |     |
| E-Mail Adresse | text | isys\_cats\_person\_list | isys\_catg\_mail\_addresses\_list\_\_title |     |     |
| Telefon Firma | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_phone\_company |     |     |
| Telefon Privat | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_phone\_home |     |     |
| Handy | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_phone\_mobile |     |     |
| Fax | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_fax |     |     |
| Pager | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_pager |     |     |
| Personalnummer | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_personnel\_number |     |     |
| Abteilung | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_department |     |     |
| Firma | int | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |
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

### Stammdaten

#### table: isys\_cats\_person\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| designation | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_title |     |     |
| Anrede | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_salutation |     |     |
| Vorname | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_first\_name |     |     |
| Nachname | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_last\_name |     |     |
| Titel (Akademischer Grad) | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_academic\_degree |     |     |
| function | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_function |     |     |
| Dienstbezeichnung | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_service\_designation |     |     |
| Street | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_street |     |     |
| Ort | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_city |     |     |
| PLZ | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_zip\_code |     |     |
| E-Mail Adresse | text | isys\_cats\_person\_list | isys\_catg\_mail\_addresses\_list\_\_title |     |     |
| Telefon Firma | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_phone\_company |     |     |
| Telefon Privat | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_phone\_home |     |     |
| Handy | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_phone\_mobile |     |     |
| Fax | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_fax |     |     |
| Pager | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_pager |     |     |
| Personalnummer | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_personnel\_number |     |     |
| Abteilung | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_department |     |     |
| Firma | int | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |
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

#### table: isys\_cats\_person\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Username | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_title |     |     |
| password | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_user\_pass |     |     |
| password | text | isys\_cats\_person\_list |     |     |     |
| Description | text\_area | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_description |     |     |
| Custom 1 | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_custom1 |     |     |
| Custom 2 | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_custom2 |     |     |
| Custom 3 | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_custom3 |     |     |
| Custom 4 | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_custom4 |     |     |
| Custom 5 | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_custom5 |     |     |
| Custom 6 | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_custom6 |     |     |
| Custom 7 | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_custom7 |     |     |
| Custom 8 | text | isys\_cats\_person\_list | isys\_cats\_person\_list\_\_custom8 |     |     |

### Personengruppenmitgliedschaft

#### table: isys\_person\_2\_group\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Personengruppenmitgliedschaft | int | isys\_person\_2\_group\_list | isys\_cats\_person\_group\_list\_\_isys\_obj\_\_id |     |     |
| Kontakt | int | isys\_person\_2\_group\_list | isys\_person\_2\_group\_\_isys\_obj\_\_id\_\_group |     |     |

### Personengruppen

#### table: isys\_cats\_person\_group\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Name | text | isys\_cats\_person\_group\_list | isys\_cats\_person\_group\_list\_\_title |     |     |
| Email | text | isys\_cats\_person\_group\_list | isys\_catg\_mail\_addresses\_list\_\_title |     |     |
| Telefon | text | isys\_cats\_person\_group\_list | isys\_cats\_person\_group\_list\_\_phone |     |     |
| LDAP-Gruppe (Mapping) | text | isys\_cats\_person\_group\_list | isys\_cats\_person\_group\_list\_\_ldap\_group |     |     |
| Description | text\_area | isys\_cats\_person\_group\_list | isys\_cats\_person\_group\_list\_\_description |     |     |

### Stammdaten

#### table: isys\_cats\_person\_group\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Name | text | isys\_cats\_person\_group\_list | isys\_cats\_person\_group\_list\_\_title |     |     |
| Email | text | isys\_cats\_person\_group\_list | isys\_catg\_mail\_addresses\_list\_\_title |     |     |
| Telefon | text | isys\_cats\_person\_group\_list | isys\_cats\_person\_group\_list\_\_phone |     |     |
| LDAP-Gruppe (Mapping) | text | isys\_cats\_person\_group\_list | isys\_cats\_person\_group\_list\_\_ldap\_group |     |     |
| Description | text\_area | isys\_cats\_person\_group\_list | isys\_cats\_person\_group\_list\_\_description |     |     |

### Mitglieder

#### table: isys\_person\_2\_group\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Vorname | text | isys\_person\_2\_group\_list | isys\_cats\_person\_list\_\_first\_name |     |     |
| Nachname | text | isys\_person\_2\_group\_list | isys\_cats\_person\_list\_\_last\_name |     |     |
| Abteilung | text | isys\_person\_2\_group\_list | isys\_cats\_person\_list\_\_department |     |     |
| Telefon Firma | text | isys\_person\_2\_group\_list | isys\_cats\_person\_list\_\_phone\_company |     |     |
| Email | text | isys\_person\_2\_group\_list | isys\_cats\_person\_list\_\_mail\_address |     |     |
| Firma | int | isys\_person\_2\_group\_list | isys\_cats\_person\_list\_\_isys\_connection\_\_id |     |     |
| designation | text | isys\_person\_2\_group\_list | isys\_cats\_person\_list\_\_title |     |     |
| Mitglieder | int | isys\_person\_2\_group\_list | isys\_cats\_person\_list\_\_isys\_obj\_\_id |     |     |

### Zugewiesene objects

#### table: isys\_catg\_contact\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| designation | int | isys\_catg\_contact\_list | isys\_catg\_contact\_list\_\_isys\_obj\_\_id |     |     |
| Rolle | int | isys\_catg\_contact\_list | isys\_catg\_contact\_list\_\_isys\_contact\_tag\_\_id | isys\_contact\_tag | isys\_contact\_tag\_\_id |

### Zugewiesene objects

#### table: isys\_catg\_contact\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| object | int | isys\_catg\_contact\_list | isys\_catg\_contact\_list\_\_isys\_obj\_\_id | isys\_connection | isys\_connection\_\_isys\_obj\_\_id |
| objecttyp | int | isys\_catg\_contact\_list | isys\_obj\_\_isys\_obj\_type\_\_id |     |     |
| Rolle | int | isys\_catg\_contact\_list | isys\_catg\_contact\_list\_\_isys\_contact\_tag\_\_id | isys\_contact\_tag | isys\_contact\_tag\_\_id |
| Description | text\_area | isys\_catg\_contact\_list | isys\_catg\_contact\_list\_\_description |     |     |

### Zugewiesene objects

#### table: isys\_catg\_contact\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| object | int | isys\_catg\_contact\_list | isys\_catg\_contact\_list\_\_isys\_obj\_\_id | isys\_connection | isys\_connection\_\_isys\_obj\_\_id |
| objecttyp | int | isys\_catg\_contact\_list | isys\_obj\_\_isys\_obj\_type\_\_id |     |     |
| Rolle | int | isys\_catg\_contact\_list | isys\_catg\_contact\_list\_\_isys\_contact\_tag\_\_id | isys\_contact\_tag | isys\_contact\_tag\_\_id |
| Description | text\_area | isys\_catg\_contact\_list | isys\_cats\_person\_contact\_assign\_list\_\_description |     |     |

### Zugeordnete Cluster

#### table: isys\_catg\_cluster\_service\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Zugeordnete Cluster | int | isys\_catg\_cluster\_service\_list | isys\_catg\_cluster\_service\_list\_\_isys\_obj\_\_id |     |     |
| Typ | int | isys\_catg\_cluster\_service\_list | isys\_catg\_cluster\_service\_list\_\_isys\_cluster\_type\_\_id | isys\_cluster\_type | isys\_cluster\_type\_\_id |
| Runs auf | int | isys\_catg\_cluster\_service\_list | isys\_catg\_cluster\_service\_list\_\_id |     |     |
| default Server | int | isys\_catg\_cluster\_members\_list | isys\_catg\_cluster\_members\_list\_\_isys\_connection\_\_id |     |     |
| Hostadressen | int | isys\_catg\_cluster\_service\_list | isys\_catg\_cluster\_service\_list\_\_id | isys\_catg\_ip\_list\_2\_isys\_catg\_cluster\_service\_list | isys\_catg\_cluster\_service\_list\_\_id |
| Laufwerke | int | isys\_catg\_cluster\_service\_list | isys\_catg\_cluster\_service\_list\_\_property |     |     |
| Freigaben | int | isys\_catg\_cluster\_service\_list | isys\_catg\_cluster\_service\_list\_\_isys\_obj\_\_id |     |     |
| database schema | int | isys\_catg\_cluster\_service\_list | isys\_catg\_cluster\_service\_list\_\_isys\_catg\_relation\_list\_\_id | isys\_cats\_database\_access\_list | isys\_cats\_database\_access\_list\_\_id |
| Description | text\_area | isys\_catg\_cluster\_service\_list | isys\_catg\_cluster\_service\_list\_\_description |     |     |

### Beziehungsdetails

#### table: isys\_catg\_relation\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Object1 | int | isys\_catg\_relation\_list | isys\_catg\_relation\_list\_\_isys\_obj\_\_id\_\_master |     |     |
| Object2 | int | isys\_catg\_relation\_list | isys\_catg\_relation\_list\_\_isys\_obj\_\_id\_\_slave |     |     |
| Service | int | isys\_catg\_relation\_list | isys\_catg\_relation\_list\_\_isys\_obj\_\_id\_\_itservice |     |     |
| Beziehungsart | int | isys\_catg\_relation\_list | isys\_catg\_relation\_list\_\_isys\_relation\_type\_\_id | isys\_relation\_type | isys\_relation\_type\_\_id |
| Gewichtung | int | isys\_catg\_relation\_list | isys\_catg\_relation\_list\_\_isys\_weighting\_\_id | isys\_weighting | isys\_weighting\_\_id |
| Description | text\_area | isys\_catg\_relation\_list | isys\_catg\_relation\_list\_\_description |     |     |

### database schema

#### table: isys\_cats\_database\_schema\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Runs auf | int | isys\_cats\_database\_schema\_list | isys\_cats\_database\_schema\_list\_\_isys\_connection\_\_id |     |     |
| Datenbankinstanz | int | isys\_cats\_database\_schema\_list | isys\_cats\_database\_schema\_list\_\_isys\_cats\_db\_instance\_list\_\_id | isys\_cats\_database\_instance\_list | isys\_cats\_database\_instance\_list\_\_id |
| designation | text | isys\_cats\_database\_schema\_list | isys\_cats\_database\_schema\_list\_\_title |     |     |
| Storage-Engine | text | isys\_cats\_database\_schema\_list | isys\_cats\_database\_schema\_list\_\_storage\_engine |     |     |
| Description | text\_area | isys\_cats\_database\_schema\_list | isys\_cats\_database\_schema\_list\_\_description |     |     |

### Datenbanklinks

#### table: isys\_cats\_database\_links\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| designation | text | isys\_cats\_database\_links\_list | isys\_cats\_database\_links\_list\_\_title |     |     |
| Linked Databaseschema | int | isys\_cats\_database\_links\_list | isys\_cats\_database\_links\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |
| Ziel-user | text | isys\_cats\_database\_links\_list | isys\_cats\_database\_links\_list\_\_target\_user |     |     |
| Besitzer | text | isys\_cats\_database\_links\_list | isys\_cats\_database\_links\_list\_\_owner |     |     |
| Public | int | isys\_cats\_database\_links\_list | isys\_cats\_database\_links\_list\_\_public |     |     |
| Description | text\_area | isys\_cats\_database\_links\_list | isys\_cats\_database\_links\_list\_\_description |     |     |

### DBMS

#### table: isys\_cats\_dbms\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| DBMS | int | isys\_cats\_dbms\_list | isys\_cats\_dbms\_list\_\_isys\_dbms\_\_id | isys\_dbms | isys\_dbms\_\_id |
| Description | text\_area | isys\_cats\_dbms\_list | isys\_cats\_dbms\_list\_\_description |     |     |

### Instanz / Oracle Datenbank

#### table: isys\_cats\_database\_instance\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| DBMS | int | isys\_cats\_database\_instance\_list | isys\_cats\_database\_instance\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |
| designation | text | isys\_cats\_database\_instance\_list | isys\_cats\_database\_instance\_list\_\_title |     |     |
| Listener | text | isys\_cats\_database\_instance\_list | isys\_cats\_database\_instance\_list\_\_listener |     |     |
| database schema | int | isys\_cats\_database\_instance\_list | isys\_cats\_database\_instance\_list\_\_isys\_obj\_\_id |     |     |
| Description | text\_area | isys\_cats\_database\_instance\_list | isys\_cats\_database\_instance\_list\_\_description |     |     |

### PDU

#### table: isys\_cats\_pdu\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| PDU | text | isys\_cats\_pdu\_list | isys\_cats\_pdu\_list\_\_pdu\_id |     |     |
| Description | text\_area | isys\_cats\_pdu\_list | isys\_cats\_pdu\_list\_\_description |     |     |

### Branch

#### table: isys\_cats\_pdu\_branch\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| PDU | int | isys\_cats\_pdu\_branch\_list | isys\_cats\_pdu\_branch\_list\_\_pdu\_id |     |     |
| Branch-ID | int | isys\_cats\_pdu\_branch\_list | isys\_cats\_pdu\_branch\_list\_\_branch\_id |     |     |
| Aufnahmecapable | int | isys\_cats\_pdu\_branch\_list | isys\_cats\_pdu\_branch\_list\_\_receptables |     |     |
| Description | text\_area | isys\_cats\_pdu\_branch\_list | isys\_cats\_pdu\_branch\_list\_\_description |     |     |

### Gleichgerichtete Beziehungen

#### table: isys\_cats\_relpool\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| designation | text | isys\_cats\_relpool\_list | isys\_cats\_relpool\_list\_\_title |     |     |
| Mindestmenge an aktiven Komponenten | text | isys\_cats\_relpool\_list | isys\_cats\_relpool\_list\_\_threshold |     |     |
| Gleichgerichtete Beziehungen | text | isys\_cats\_relpool\_list | isys\_cats\_relpool\_list\_\_isys\_obj\_\_id |     |     |
| Description | text\_area | isys\_cats\_relpool\_list | isys\_cats\_relpool\_list\_\_description |     |     |

### Datenbankobjekte

#### table: isys\_cats\_database\_objects\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| designation | text | isys\_cats\_database\_objects\_list | isys\_cats\_database\_objects\_list\_\_title |     |     |
| Typ | int | isys\_cats\_database\_objects\_list | isys\_cats\_database\_objects\_list\_\_isys\_database\_objects\_\_id | isys\_database\_objects | isys\_database\_objects\_\_id |
| Description | text\_area | isys\_cats\_database\_objects\_list | isys\_cats\_database\_objects\_list\_\_description |     |     |

### Datenbankzugriff

#### table: isys\_cats\_database\_access\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Zugeordnete objects | int | isys\_cats\_database\_access\_list | isys\_cats\_database\_access\_list\_\_isys\_connection\_\_id |     |     |

### Datenbank Gateway

#### table: isys\_cats\_database\_gateway\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Gateway Typ | text | isys\_cats\_database\_gateway\_list | isys\_cats\_database\_gateway\_list\_\_type |     |     |
| Host | text | isys\_cats\_database\_gateway\_list | isys\_cats\_database\_gateway\_list\_\_host |     |     |
| Port | text | isys\_cats\_database\_gateway\_list | isys\_cats\_database\_gateway\_list\_\_port |     |     |
| User | text | isys\_cats\_database\_gateway\_list | isys\_cats\_database\_gateway\_list\_\_user |     |     |
| usedes database schema | int | isys\_cats\_database\_gateway\_list | isys\_cats\_database\_gateway\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |
| Description | text\_area | isys\_cats\_database\_gateway\_list | isys\_cats\_database\_gateway\_list\_\_description |     |     |

### Replikation

#### table: isys\_cats\_replication\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Replikationsmechanismus | int | isys\_cats\_replication\_list | isys\_cats\_replication\_list\_\_isys\_replication\_mechanism\_\_id | isys\_replication\_mechanism | isys\_replication\_mechanism\_\_id |
| Description | text\_area | isys\_cats\_replication\_list | isys\_cats\_replication\_list\_\_description |     |     |

### Replikationspartner

#### table: isys\_cats\_replication\_partner\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Replikationstyp | int | isys\_cats\_replication\_partner\_list | isys\_cats\_replication\_partner\_list\_\_isys\_replication\_type\_\_id | isys\_replication\_type | isys\_replication\_type\_\_id |
| Replikationspartner | int | isys\_cats\_replication\_partner\_list | isys\_cats\_replication\_partner\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |
| Description | text\_area | isys\_cats\_replication\_partner\_list | isys\_cats\_replication\_partner\_list\_\_description |     |     |

### installation

#### table: isys\_catg\_application\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Installiert auf | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_obj\_\_id |     |     |
| Typ | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_catg\_application\_type\_\_id | isys\_catg\_application\_type | isys\_catg\_application\_type\_\_id |
| priority | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_catg\_application\_priority\_\_id | isys\_catg\_application\_priority | isys\_catg\_application\_priority\_\_id |
| Zugewiesene Lizenz | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_cats\_lic\_list\_\_id | isys\_cats\_lic\_list | isys\_cats\_lic\_list\_\_id |
| Zugewiesener license key | text | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_cats\_lic\_list\_\_id | isys\_cats\_lic\_list | isys\_cats\_lic\_list\_\_id |
| database schema | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_catg\_relation\_list\_\_id | isys\_cats\_database\_access\_list | isys\_cats\_database\_access\_list\_\_id |
| Service | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_catg\_relation\_list\_\_id | isys\_catg\_its\_components\_list | isys\_catg\_its\_components\_list\_\_id |
| Variante | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_cats\_app\_variant\_list\_\_id | isys\_cats\_app\_variant\_list | isys\_cats\_app\_variant\_list\_\_id |
| Nagios services vererben | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_bequest\_nagios\_services |     |     |
| Description | text\_area | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_description |     |     |

### Middleware

#### table: isys\_cats\_application\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Spezifikation | text | isys\_cats\_application\_list | isys\_cats\_application\_list\_\_specification |     |     |
| Hfirstller | int | isys\_cats\_application\_list | isys\_cats\_application\_list\_\_isys\_application\_manufacturer\_\_id | isys\_application\_manufacturer | isys\_application\_manufacturer\_\_id |
| installationsart | int | isys\_cats\_application\_list | isys\_cats\_application\_list\_\_isys\_installation\_type\_\_id | isys\_installation\_type | isys\_installation\_type\_\_id |
| Registrierungs-Key | text | isys\_cats\_application\_list | isys\_cats\_application\_list\_\_registration\_key |     |     |
| installationspfad | text | isys\_cats\_application\_list | isys\_cats\_application\_list\_\_install\_path |     |     |
| Anzahl installationen | int | isys\_cats\_application\_list |     |     |     |
| Description | text\_area | isys\_cats\_application\_list | isys\_cats\_application\_list\_\_description |     |     |

### Kryptokarte

#### table: isys\_cats\_krypto\_card\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Zertifikatsnummer | text | isys\_cats\_krypto\_card\_list | isys\_cats\_krypto\_card\_list\_\_certificate\_number |     |     |
| Certgate Karten-Nummer | text | isys\_cats\_krypto\_card\_list | isys\_cats\_krypto\_card\_list\_\_certgate\_card\_number |     |     |
| Zertifikatsname | text | isys\_cats\_krypto\_card\_list | isys\_cats\_krypto\_card\_list\_\_certificate\_title |     |     |
| Zertifikatsperrkennwort | text | isys\_cats\_krypto\_card\_list | isys\_cats\_krypto\_card\_list\_\_certificate\_password |     |     |
| Zertifikatsablauf | date | isys\_cats\_krypto\_card\_list | isys\_cats\_krypto\_card\_list\_\_certificate\_procedure |     |     |
| Ausgabedatum | date | isys\_cats\_krypto\_card\_list | isys\_cats\_krypto\_card\_list\_\_date\_of\_issue |     |     |
| IMEI-Nummer | text | isys\_cats\_krypto\_card\_list | isys\_cats\_krypto\_card\_list\_\_imei\_number |     |     |
| linkedes Mobiltelefon | int | isys\_cats\_krypto\_card\_list | isys\_catg\_assigned\_cards\_list\_\_isys\_obj\_\_id |     |     |
| Description | text\_area | isys\_cats\_krypto\_card\_list | isys\_cats\_krypto\_card\_list\_\_description |     |     |

### IP-Liste

#### table: isys\_cats\_net\_ip\_addresses\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Typ | int | isys\_cats\_net\_ip\_addresses\_list | isys\_catg\_ip\_list\_\_isys\_net\_type\_\_id | isys\_net\_type | isys\_net\_type\_\_id |
| Hostadresse | text | isys\_cats\_net\_ip\_addresses\_list | isys\_cats\_net\_ip\_addresses\_list\_\_title |     |     |
| object | int | isys\_cats\_net\_ip\_addresses\_list | isys\_cats\_net\_ip\_addresses\_list\_\_id |     |     |
| Adressvergabe IPv4 | int | isys\_cats\_net\_ip\_addresses\_list | isys\_catg\_ip\_list\_\_isys\_ip\_assignment\_\_id | isys\_ip\_assignment | isys\_ip\_assignment\_\_id |
| Adressvergabe IPv6 | int | isys\_cats\_net\_ip\_addresses\_list | isys\_catg\_ip\_list\_\_isys\_ipv6\_assignment\_\_id | isys\_ipv6\_assignment | isys\_ipv6\_assignment\_\_id |
| object | int | isys\_cats\_net\_ip\_addresses\_list | isys\_catg\_ip\_list\_\_isys\_obj\_\_id |     |     |
| IP-Liste open | text | isys\_cats\_net\_ip\_addresses\_list | isys\_cats\_net\_ip\_addresses\_link\_\_isys\_obj\_\_id |     |     |

### DHCP

#### table: isys\_cats\_net\_dhcp\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Typ v4 | int | isys\_cats\_net\_dhcp\_list | isys\_cats\_net\_dhcp\_list\_\_isys\_net\_dhcp\_type\_\_id | isys\_net\_dhcp\_type | isys\_net\_dhcp\_type\_\_id |
| Typ v6 | int | isys\_cats\_net\_dhcp\_list | isys\_cats\_net\_dhcp\_list\_\_isys\_net\_dhcpv6\_type\_\_id | isys\_net\_dhcpv6\_type | isys\_net\_dhcpv6\_type\_\_id |
| DHCP von | text | isys\_cats\_net\_dhcp\_list | isys\_cats\_net\_dhcp\_list\_\_range\_from |     |     |
| DHCP bis | text | isys\_cats\_net\_dhcp\_list | isys\_cats\_net\_dhcp\_list\_\_range\_to |     |     |
| Description | text\_area | isys\_cats\_net\_dhcp\_list | isys\_cats\_net\_dhcp\_list\_\_description |     |     |

### Layer-2-Netz

#### table: isys\_cats\_layer2\_net\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| ID (VLAN) | text | isys\_cats\_layer2\_net\_list | isys\_cats\_layer2\_net\_list\_\_ident |     |     |
| default VLAN | int | isys\_cats\_layer2\_net\_list | isys\_cats\_layer2\_net\_list\_\_standard |     |     |
| Typ | int | isys\_cats\_layer2\_net\_list | isys\_cats\_layer2\_net\_list\_\_isys\_layer2\_net\_type\_\_id | isys\_layer2\_net\_type | isys\_layer2\_net\_type\_\_id |
| Unterart | int | isys\_cats\_layer2\_net\_list | isys\_cats\_layer2\_net\_list\_\_isys\_layer2\_net\_subtype\_\_id | isys\_layer2\_net\_subtype | isys\_layer2\_net\_subtype\_\_id |
| IP-Helper-Adressen | int | isys\_cats\_layer2\_net\_list | isys\_cats\_layer2\_net\_list\_\_id |     |     |
| Layer-3-Netz Zuordnung | int | isys\_cats\_layer2\_net\_list | isys\_cats\_layer2\_net\_list\_\_id | isys\_cats\_layer2\_net\_2\_layer3 | isys\_obj\_\_id |
| VRF | text | isys\_cats\_layer2\_net\_list | isys\_cats\_layer2\_net\_list\_\_vrf |     |     |
| VRF capacity | int | isys\_cats\_layer2\_net\_list | isys\_cats\_layer2\_net\_list\_\_vrf\_capacity |     |     |
| VRF capacity (Einheit) | int | isys\_cats\_layer2\_net\_list | isys\_cats\_layer2\_net\_list\_\_isys\_wan\_capacity\_unit |     |     |
| Description | text\_area | isys\_cats\_layer2\_net\_list | isys\_cats\_layer2\_net\_list\_\_description |     |     |

### Zugewiesene Ports

#### table: isys\_cats\_layer2\_net\_assigned\_ports\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| object-Titel | int | isys\_cats\_layer2\_net\_assigned\_ports\_list | isys\_cats\_layer2\_net\_assigned\_ports\_list\_\_isys\_obj\_\_id |     |     |
| Zugewiesene Ports | int | isys\_cats\_layer2\_net\_assigned\_ports\_list | isys\_catg\_port\_list\_\_id |     |     |
| MAC-Adresse | int | isys\_cats\_layer2\_net\_assigned\_ports\_list | isys\_catg\_port\_list\_\_id |     |     |

### Vertrag

#### table: isys\_cats\_contract\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Vertragsart | int | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_isys\_contract\_type\_\_id | isys\_contract\_type | isys\_contract\_type\_\_id |
| Vertragsnummer | text | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_contract\_no |     |     |
| Kundennummer | text | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_customer\_no |     |     |
| Interne Nummer | text | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_internal\_no |     |     |
| Kosten | double | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_costs |     |     |
| Produkt | text | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_product |     |     |
| Reaktionszeiten | int | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_isys\_contract\_reaction\_rate\_\_id | isys\_contract\_reaction\_rate | isys\_contract\_reaction\_rate\_\_id |
| Vertragsstatus | int | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_isys\_contract\_status\_\_id | isys\_contract\_status | isys\_contract\_status\_\_id |
| Vertragsbeginn | date | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_start\_date |     |     |
| Vertragsende | date | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_end\_date |     |     |
| Laufzeit | int | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_runtime |     |     |
| Laufzeit Einheit | int | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_runtime\_unit | isys\_guarantee\_period\_unit | isys\_guarantee\_period\_unit\_\_id |
| Next possible contractsende | text | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_id |     |     |
| Vertragsende durch | int | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_isys\_contract\_end\_type\_\_id | isys\_contract\_end\_type | isys\_contract\_end\_type\_\_id |
| Next possible cancellation date | text | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_id |     |     |
| cancellation date | date | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_notice\_date |     |     |
| cancellation period | int | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_notice\_period |     |     |
| cancellation period Einheit | int | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_notice\_period\_unit\_\_id | isys\_guarantee\_period\_unit | isys\_guarantee\_period\_unit\_\_id |
| cancellation type | int | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_isys\_contract\_notice\_period\_type\_\_id | isys\_contract\_notice\_period\_type | isys\_contract\_notice\_period\_type\_\_id |
| Wartungs-/Garantiefrist | int | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_maintenance\_period |     |     |
| Frist Einheit | int | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_maintenance\_period\_unit\_\_id | isys\_guarantee\_period\_unit | isys\_guarantee\_period\_unit\_\_id |
| Zahlart | int | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_isys\_contract\_payment\_period\_\_id | isys\_contract\_payment\_period | isys\_contract\_payment\_period\_\_id |
| Description | text\_area | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_description |     |     |

### Vertragsinformationen

#### table: isys\_cats\_contract\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Vertragsart | int | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_isys\_contract\_type\_\_id | isys\_contract\_type | isys\_contract\_type\_\_id |
| Vertragsnummer | text | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_contract\_no |     |     |
| Kundennummer | text | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_customer\_no |     |     |
| Interne Nummer | text | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_internal\_no |     |     |
| Kosten | double | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_costs |     |     |
| Produkt | text | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_product |     |     |
| Reaktionszeiten | int | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_isys\_contract\_reaction\_rate\_\_id | isys\_contract\_reaction\_rate | isys\_contract\_reaction\_rate\_\_id |
| Vertragsstatus | int | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_isys\_contract\_status\_\_id | isys\_contract\_status | isys\_contract\_status\_\_id |
| Vertragsbeginn | date | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_start\_date |     |     |
| Vertragsende | date | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_end\_date |     |     |
| Laufzeit | int | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_runtime |     |     |
| Laufzeit Einheit | int | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_runtime\_unit | isys\_guarantee\_period\_unit | isys\_guarantee\_period\_unit\_\_id |
| Next possible contractsende | text | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_id |     |     |
| Vertragsende durch | int | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_isys\_contract\_end\_type\_\_id | isys\_contract\_end\_type | isys\_contract\_end\_type\_\_id |
| Next possible cancellation date | text | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_id |     |     |
| cancellation date | date | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_notice\_date |     |     |
| cancellation period | int | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_notice\_period |     |     |
| cancellation period Einheit | int | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_notice\_period\_unit\_\_id | isys\_guarantee\_period\_unit | isys\_guarantee\_period\_unit\_\_id |
| cancellation type | int | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_isys\_contract\_notice\_period\_type\_\_id | isys\_contract\_notice\_period\_type | isys\_contract\_notice\_period\_type\_\_id |
| Wartungs-/Garantiefrist | int | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_maintenance\_period |     |     |
| Frist Einheit | int | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_maintenance\_period\_unit\_\_id | isys\_guarantee\_period\_unit | isys\_guarantee\_period\_unit\_\_id |
| Zahlart | int | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_isys\_contract\_payment\_period\_\_id | isys\_contract\_payment\_period | isys\_contract\_payment\_period\_\_id |
| Description | text\_area | isys\_cats\_contract\_list | isys\_cats\_contract\_list\_\_description |     |     |

### Zugeordnete objects

#### table: isys\_catg\_contract\_assignment\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Zugeordnete objects | int | isys\_catg\_contract\_assignment\_list | isys\_catg\_contract\_assignment\_list\_\_isys\_obj\_\_id |     |     |

### Chassis

#### table: isys\_cats\_chassis\_view\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Vorderseite horizontale Einheiten | int | isys\_cats\_chassis\_view\_list | isys\_cats\_chassis\_view\_list\_\_front\_width |     |     |
| Vorderseite vertikale Einheiten | int | isys\_cats\_chassis\_view\_list | isys\_cats\_chassis\_view\_list\_\_front\_height |     |     |
| Vorderseite grid size | int | isys\_cats\_chassis\_view\_list | isys\_cats\_chassis\_view\_list\_\_front\_size |     |     |
| rear side horizontale Einheiten | int | isys\_cats\_chassis\_view\_list | isys\_cats\_chassis\_view\_list\_\_rear\_width |     |     |
| rear side vertikale Einheiten | int | isys\_cats\_chassis\_view\_list | isys\_cats\_chassis\_view\_list\_\_rear\_height |     |     |
| rear side grid size | int | isys\_cats\_chassis\_view\_list | isys\_cats\_chassis\_view\_list\_\_rear\_size |     |     |
| Description | text\_area | isys\_cats\_chassis\_view\_list | isys\_cats\_chassis\_view\_list\_\_description |     |     |

### Slots

#### table: isys\_cats\_chassis\_slot\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Anschlusstyp | int | isys\_cats\_chassis\_slot\_list | isys\_cats\_chassis\_slot\_list\_\_isys\_chassis\_connector\_type\_\_id | isys\_chassis\_connector\_type | isys\_chassis\_connector\_type\_\_id |
| Einschub | int | isys\_cats\_chassis\_slot\_list | isys\_cats\_chassis\_slot\_list\_\_insertion |     |     |
| Slotbezeichnung | text | isys\_cats\_chassis\_slot\_list | isys\_cats\_chassis\_slot\_list\_\_title |     |     |
| Horizontale Position | int | isys\_cats\_chassis\_slot\_list | isys\_cats\_chassis\_slot\_list\_\_x\_from |     |     |
| Bis Horizontale Position | int | isys\_cats\_chassis\_slot\_list | isys\_cats\_chassis\_slot\_list\_\_x\_to |     |     |
| Vertikale Position | int | isys\_cats\_chassis\_slot\_list | isys\_cats\_chassis\_slot\_list\_\_y\_from |     |     |
| Bis Vertikale Position | int | isys\_cats\_chassis\_slot\_list | isys\_cats\_chassis\_slot\_list\_\_y\_to |     |     |
| deviceezuordnung | int | isys\_cats\_chassis\_slot\_list | isys\_cats\_chassis\_slot\_list\_\_id |     |     |
| Description | text\_area | isys\_cats\_chassis\_slot\_list | isys\_cats\_chassis\_slot\_list\_\_description |     |     |

### Zugewiesene devicee

#### table: isys\_cats\_chassis\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Rolle | int | isys\_cats\_chassis\_list | isys\_cats\_chassis\_list\_\_isys\_chassis\_role\_\_id | isys\_chassis\_role | isys\_chassis\_role\_\_id |
| deviceezuordnung | int | isys\_cats\_chassis\_list | isys\_cats\_chassis\_list\_\_isys\_connection\_\_id | isys\_connection | isys\_connection\_\_id |
| deviceezuordnung (Hostadapter) | int | isys\_cats\_chassis\_list | isys\_cats\_chassis\_list\_\_isys\_catg\_hba\_list\_\_id | isys\_catg\_hba\_list | isys\_catg\_hba\_list\_\_id |
| deviceezuordnung (Interface) | int | isys\_cats\_chassis\_list | isys\_cats\_chassis\_list\_\_isys\_catg\_netp\_list\_\_id | isys\_catg\_netp\_list | isys\_catg\_netp\_list\_\_id |
| deviceezuordnung (Stromverbraucher) | int | isys\_cats\_chassis\_list | isys\_cats\_chassis\_list\_\_isys\_catg\_pc\_list\_\_id | isys\_catg\_pc\_list | isys\_catg\_pc\_list\_\_id |
| Eingeschoben bei | int | isys\_cats\_chassis\_list | isys\_cats\_chassis\_list\_\_id |     |     |
| Description | text\_area | isys\_cats\_chassis\_list | isys\_cats\_chassis\_list\_\_description |     |     |

### Chassis Ansicht

#### table: isys\_cats\_chassis\_view\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Vorderseite horizontale Einheiten | int | isys\_cats\_chassis\_view\_list | isys\_cats\_chassis\_view\_list\_\_front\_width |     |     |
| Vorderseite vertikale Einheiten | int | isys\_cats\_chassis\_view\_list | isys\_cats\_chassis\_view\_list\_\_front\_height |     |     |
| Vorderseite grid size | int | isys\_cats\_chassis\_view\_list | isys\_cats\_chassis\_view\_list\_\_front\_size |     |     |
| rear side horizontale Einheiten | int | isys\_cats\_chassis\_view\_list | isys\_cats\_chassis\_view\_list\_\_rear\_width |     |     |
| rear side vertikale Einheiten | int | isys\_cats\_chassis\_view\_list | isys\_cats\_chassis\_view\_list\_\_rear\_height |     |     |
| rear side grid size | int | isys\_cats\_chassis\_view\_list | isys\_cats\_chassis\_view\_list\_\_rear\_size |     |     |
| Description | text\_area | isys\_cats\_chassis\_view\_list | isys\_cats\_chassis\_view\_list\_\_description |     |     |

### Varianten

#### table: isys\_cats\_app\_variant\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| designation | text | isys\_cats\_app\_variant\_list | isys\_cats\_app\_variant\_list\_\_title |     |     |
| Variante | text | isys\_cats\_app\_variant\_list | isys\_cats\_app\_variant\_list\_\_variant |     |     |
| Description | text\_area | isys\_cats\_app\_variant\_list | isys\_cats\_app\_variant\_list\_\_description |     |     |

### Nagios

#### table: isys\_cats\_person\_nagios\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
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
| Diese Configuration exportieren | int | isys\_cats\_person\_nagios\_list | isys\_cats\_person\_nagios\_list\_\_is\_exportable |     |     |
| retain\_nonstatus\_information | int | isys\_cats\_person\_nagios\_list | isys\_cats\_person\_nagios\_list\_\_retain\_nonstatus\_information |     |     |
| custom\_object\_vars | text\_area | isys\_cats\_person\_nagios\_list | isys\_cats\_person\_nagios\_list\_\_custom\_obj\_vars |     |     |
| Description | text\_area | isys\_cats\_person\_nagios\_list | isys\_cats\_person\_nagios\_list\_\_description |     |     |

### Nagios

#### table: isys\_cats\_person\_group\_nagios\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Diese Configuration exportieren | int | isys\_cats\_person\_group\_nagios\_list | isys\_cats\_person\_group\_nagios\_list\_\_is\_exportable |     |     |
| alias | text | isys\_cats\_person\_group\_nagios\_list | isys\_cats\_person\_group\_nagios\_list\_\_alias |     |     |
| Description | text\_area | isys\_cats\_person\_group\_nagios\_list | isys\_cats\_person\_group\_nagios\_list\_\_description |     |     |

### Typ

#### table: isys\_cats\_group\_type\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Typ | int | isys\_cats\_group\_type\_list | isys\_cats\_group\_type\_list\_\_type |     |     |
| Report | int | isys\_cats\_group\_type\_list | isys\_cats\_group\_type\_list\_\_isys\_report\_\_id |     |     |
| Description | text\_area | isys\_cats\_group\_type\_list | isys\_cats\_group\_type\_list\_\_description |     |     |

### Zugewiesene logische Ports

#### table: isys\_catg\_log\_port\_list\_2\_isys\_obj

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| object-Titel | int | main | isys\_obj\_\_id |     |     |
| Zugewiesene logische Ports | int | isys\_catg\_log\_port\_list | isys\_catg\_log\_port\_list\_\_id |     |     |

### installation

#### table: isys\_catg\_application\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Installiert auf | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_obj\_\_id |     |     |
| Typ | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_catg\_application\_type\_\_id | isys\_catg\_application\_type | isys\_catg\_application\_type\_\_id |
| priority | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_catg\_application\_priority\_\_id | isys\_catg\_application\_priority | isys\_catg\_application\_priority\_\_id |
| Zugewiesene Lizenz | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_cats\_lic\_list\_\_id | isys\_cats\_lic\_list | isys\_cats\_lic\_list\_\_id |
| Zugewiesener license key | text | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_cats\_lic\_list\_\_id | isys\_cats\_lic\_list | isys\_cats\_lic\_list\_\_id |
| database schema | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_catg\_relation\_list\_\_id | isys\_cats\_database\_access\_list | isys\_cats\_database\_access\_list\_\_id |
| Service | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_catg\_relation\_list\_\_id | isys\_catg\_its\_components\_list | isys\_catg\_its\_components\_list\_\_id |
| Variante | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_cats\_app\_variant\_list\_\_id | isys\_cats\_app\_variant\_list | isys\_cats\_app\_variant\_list\_\_id |
| Nagios services vererben | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_bequest\_nagios\_services |     |     |
| Description | text\_area | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_description |     |     |

### installation

#### table: isys\_catg\_application\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Installiert auf | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_obj\_\_id |     |     |
| Typ | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_catg\_application\_type\_\_id | isys\_catg\_application\_type | isys\_catg\_application\_type\_\_id |
| priority | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_catg\_application\_priority\_\_id | isys\_catg\_application\_priority | isys\_catg\_application\_priority\_\_id |
| Zugewiesene Lizenz | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_cats\_lic\_list\_\_id | isys\_cats\_lic\_list | isys\_cats\_lic\_list\_\_id |
| Zugewiesener license key | text | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_cats\_lic\_list\_\_id | isys\_cats\_lic\_list | isys\_cats\_lic\_list\_\_id |
| database schema | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_catg\_relation\_list\_\_id | isys\_cats\_database\_access\_list | isys\_cats\_database\_access\_list\_\_id |
| Service | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_catg\_relation\_list\_\_id | isys\_catg\_its\_components\_list | isys\_catg\_its\_components\_list\_\_id |
| Variante | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_isys\_cats\_app\_variant\_list\_\_id | isys\_cats\_app\_variant\_list | isys\_cats\_app\_variant\_list\_\_id |
| Nagios services vererben | int | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_bequest\_nagios\_services |     |     |
| Description | text\_area | isys\_catg\_application\_list | isys\_catg\_application\_list\_\_description |     |     |

### Netzbereiche

#### table: isys\_cats\_net\_zone\_list

| field | Typ | table | Datenbank-field | Referenz-table | Referenz |
| --- | --- | --- | --- | --- | --- |
| Netzbereich object | int | isys\_cats\_net\_zone\_list | isys\_cats\_net\_zone\_list\_\_isys\_obj\_\_id\_\_zone | isys\_obj | isys\_obj\_\_id |
| Bereich von | text | isys\_cats\_net\_zone\_list | isys\_cats\_net\_zone\_list\_\_range\_from |     |     |
| Bereich von | text | isys\_cats\_net\_zone\_list | isys\_cats\_net\_zone\_list\_\_range\_from\_long |     |     |
| Bereich bis | text | isys\_cats\_net\_zone\_list | isys\_cats\_net\_zone\_list\_\_range\_to |     |     |
| Bereich bis | text | isys\_cats\_net\_zone\_list | isys\_cats\_net\_zone\_list\_\_range\_to\_long |     |     |
| Description | text\_area | isys\_cats\_net\_zone\_list | isys\_cats\_net\_zone\_list\_\_description |     |     |
