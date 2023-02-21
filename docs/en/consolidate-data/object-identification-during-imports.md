# Object Identification during Imports

i-doit provides various data imports. Existing data in the [IT documentation](../glossary.md) can be updated with imports instead of generating (often) unnecessary redundancy. In order to achieve this, i-doit tries to identify existing [objects](../basics/structure-of-the-it-documentation.md) by means of various [attributes](../basics/structure-of-the-it-documentation.md).

Data Imports Concerned
----------------------

The following data imports are considered in this article:

*   [CSV file import](./csv-data-import/index.md)
*   [JDisc Discovery](jdisc-discovery.md)
*   [h-inventory](h-inventory.md)

Other data imports might have another way of proceeding.

Approach
--------

The identification of objects is carried out in two steps:

1.  The unambiguous attributes of the respective data sources have the highest priority:  
      
    CSV data import: _not applicable_  
    JDisc: Device ID  
    h-inventory: serial number  
      
    With the first data import, these attributes are saved and can then be used as identification feature for following data imports. If these attributes are not available, step 2 follows.
    
2.  A so-called object matching (see below) is carried out by means of profiles.

Creation of Profiles
--------------------

Some attributes are suitable to reference objects [unambiguously](../basics/unique-references.md). You can use this characteristic regarding the data import of third-party applications with similar unambiguity. To be prepared for various import cases you can create so-called object-matching profiles in i-doit which are to be observed during import. The central configuration is under **Administration → Interfaces / external data → Import → Object-matching profiles**. You can create any number of profiles.

[![objidi-create-profiles](../assets/images/en/consolidate-data/object-identification-during-imports/1-oidi.png)](../assets/images/en/consolidate-data/object-identification-during-imports/1-oidi.png)

The i-doit default installation already contains a profile named **Default** which mustn't be edited or deleted. With the **New** button you can create a new profile, with **Edit** you  can edit a profile while **Purge** deletes a profile irrevocably.

Several details are required per profile:

*   **Name**: a meaningful description of the profile
*   **Matchings**: Various attributes and other fields can be selected. With help of these attributes and fields already documented objects are searched and compared to the data to be imported. The order is irrelevant and cannot be changed.
*   **Minimum Match**: During the matching process of data and objects to be imported in i-doit a check is carried out as to how many attributes of an object have to match. The selectable number follows the number of attributes under **Matchings**.

[![objidi-requirements](../assets/images/en/consolidate-data/object-identification-during-imports/2-oidi.png)](../assets/images/en/consolidate-data/object-identification-during-imports/2-oidi.png)

Possible Identifiers
--------------------

| Identifier | Comments | CSV data import | JDisc | OCS Inventory NG | h-inventory |
| --- | --- | --- | --- | --- | --- |
| **Username** | Import of person; see category for **Persons → Login**, **Username** attribute | yes | no  | no  | no  |
| **E-mail address** | See category for **E-mail address** | yes | no  | no  | no  |
| **FQDN** | Import of network-compatible device; see category for **Host address** | yes | yes | yes | yes |
| **Hostname** | Import of network-compatible device; see category for **Host address** | yes | yes | yes | yes |
| **IMEI number** | See category **Mobile ratio**, **IMEI** attribute | yes | no  | no  | no  |
| **Inventory number** | See category **Accounting**, **Inventory number** attribute | yes | no  | no  | no  |
| **IP address** | Import of network-compatible device; see category **Host address** | yes | yes | no  | no  |
| **LDAP DN** | When persons are synchronized via [LDAP/AD](../automation-and-integration/ldap-active-directory-ad/index.md), i-doit saves the corresponding DN in the background. You can't see this attribute in i-doit but you can use it as an identification | yes | no  | no  | no  |
| **MAC** | Import of network-compatible device; see category **Network → Port**,  **MAC address** attribute | yes | yes | yes | yes |
| **Object ID** | See category **General**, **Object ID** attribute | yes | no  | no  | no  |
| **Object SYSID** | See category **General**, **SYS-ID **attribute | yes | no  | no  | no  |
| **Object title** | See category **General**, **Description** attribute | yes | yes | yes | yes |
| **Object type constant** | Object type has to match; see [custom object types](../basics/custom-object-types.md) | yes | no  | yes | no  |
| **Room number** | Import of room; see category **Room** | yes | no  | no  | no  |
| **Serial number** | See category **Modell** | yes | yes | yes | yes |
| **Service tag** | See category **Modell** | yes | no  | no  | no  |
| **Location** | See category **Location** | yes | no  | no  | no  |