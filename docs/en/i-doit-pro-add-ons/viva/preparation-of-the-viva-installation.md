Before using the [i-doit pro add-on VIVA](/display/en/i-doit+pro+Add-ons) for the first time, you need to install it.

System requirements
-------------------

In addition to the system [requirements](/display/en/System+Requirements) and [system settings](/display/en/System+Settings) generally applicable to i-doit, this add-on imposes the following conditions on the system on which it is installed:

An executable i-doit pro in the versions currently supported by Synetics is installed.  
The PHP setting `short_open_tag` is enabled (`On`).  
Optionally, Graphviz (in the form of the dot or neato binaries) is required on the system to create a cleaned up network and the PHP exec function is required to be allowed to run. This will not work on a Windows operating system.

Download, install, update, (de)activate
---------------------------------------

See article [i-doit pro add-ons](/display/en/i-doit+pro+Add-ons).

Rights management
-----------------

i-doit pro has a fine-granular rights management, which is also used for VIVA. Rights can be assigned per user/user group under `Administration → Rights System → VIVA`. The following rights are available:

Reading access: editing is not possible.  
Writing access: reading, creating, saving and deleting information.  
Administrative access: without restrictions.  
To simplify the first steps, the eponymous person group VIVA is created during installation, which already has administrative rights. If persons are to receive these rights, it is sufficient to add them to this person group. In this way, the Admin person group is given administrative access.

Note

After installation, the logged-in user does not yet have the corresponding group membership. Therefore, VIVA does not appear in the Extras menu. If the person object corresponding to the user has been added to the person group, the user must log in again once for the change to take effect. After that, the VIVA appears in the Extras menu.

  

  

Migrate from the previous ITGS module
-------------------------------------

Already since i-doit pro in version 0.9.9-6 pro, a module for documenting IT baseline protection-relevant information has been included. VIVA completely replaces it and extends it with numerous new functions. If documentation has already been carried out in the old module, this data can be transferred to VIVA without leaving any residues.

Prepare migration
-----------------

In order to transfer the data from the old module as smoothly as possible, the following assumptions are made:

*   The IT-Grundschutz EL 11 catalogs from 2009 will be used in the old module.
*   The EL 12 catalogs from 2011 are to be used in VIVA. The import must already have taken place.
*   In the old module, the object type ITGS group has been used for the documentation of the target groups.
*   Objects assigned to these \_ITGS groups\_ are of the same type, i.e. they correspond to the definition of target groups and objects.
*   The IT-Grundschutz-relevant documentation is taken from the ITGS groups and those objects in i-doit that do not inherit their documentation from any ITGS group.
*   These non-grouped objects are each transformed to target groups.
*   Based on the title of the client used at runtime, a new information federation is created. Existing information groups in VIVA are not touched.
*   The layer assignment of the groups is based on their linked modules.

Perform migration
-----------------

If the requirements are met and the old module is not (yet) deleted, the migration can be started via the web interface using VIVA → Migration. There you can choose between two actions:

*   Start migration ...
*   Remove old module ...

  

The former guides through the migration and shows the progress of the respective steps. After the user has defined the ITGS groups as target groups and assigned them to an IT-Grundschutz layer, the migration is performed. When clicking on Finish, the user is redirected to the newly created information federation.

Optionally, the old module including all data (objects, categories) can be deleted after the migration. This step is irrevocable.

Before performing any of the above actions, a backup of the database and the i-doit installation should be made in order to be able to return to a working state in the event of an error.