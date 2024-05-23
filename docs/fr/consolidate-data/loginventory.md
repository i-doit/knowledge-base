# LOGINventory

!!! danger ""
    
    With i-doit version 1.11 LOGINventory was removed

  

Using this import, information from LOGINventory can be imported to _i-doit_ and used there.

Requirements
------------

*   The import only supports LOGINventory up to and including version 5. At the moment version 6 and following versions are not supported.
*   PDO needs to be installed.
*   PDO driver dblib has to be installed.
*   The global setting tds version needs to be set to 7.0 in the freetds.conf file.

Settings in i-doit
------------------

The settings for LOGINventory can be found at **Administration → Interfaces → external data → Loginventory**.

Configuration of the Database
-----------------------------

**IP:** server on which the database is located.

**Port:** the IP port for communication (default 3108).

**Database / Schema:** database description (default **loginventory**).

**Username:** user name for logging in to the database.

**Password:** self explanatory.

  

[![loginventory](../assets/images/en/consolidate-data/loginventory/LOGINVENTORY1.jpg)](../assets/images/en/consolidate-data/loginventory/LOGINVENTORY1.jpg)

  

Configuration of the Interface
------------------------------

Here you can set the default behavior of the import for the LOGINventory.

**Default import object type:** All imported objects in the LOGINventory are created with the selected object type.

**Default database:** One database can be chosen as default which will be loaded as soon as someone is on the import page.

**Connect only known applications:** With this option you can determine if only connections are created for software which already exists in the _i-doit_ system or if software connections also create additional applications in _i-doit_.

**Logbook active while importing:** With this option you can determine whether or not logbook entries are created during the import. The import will be slower when activating this option due to the creation of logbook entries. This option should still be activated though.

**Import:** The databases which were added in the configuration can be selected on the import page. It is also possible to change the default object type for the current import if needed.