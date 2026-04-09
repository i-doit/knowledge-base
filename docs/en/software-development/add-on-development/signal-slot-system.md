---
title: "Signal-Slot System"
description: "The Signal-Slot system can be used to react to specific events in i-doit."
icon:
status:
lang: en
---
# Signal-Slot System

The [Signal-Slot system](https://en.wikipedia.org/wiki/Signals_and_slots) can be used to react to specific _events_ in i-doit. This includes both CMDB events such as "object was created", "record was changed", or "record was archived", as well as technical events such as "category was initialized", "GUI is being rendered", or "CSS is being compiled".

The "Events" add-on, for example, leverages a range of these signals and thus forms an adapter between technical signals and a configuration in the i-doit interface.

# Use Cases

With the help of the Signal-Slot system, the GUI of any category can be extended, for example. In the simplest case, you add one (or more) custom buttons to the "navbar". It is even possible to extend a category with additional attributes -- however, this requires significant effort and deep knowledge of the system.

Using custom logic, an external script can be triggered on specific events, for example, when documenting virtual servers or changing a primary IP address.

**Attention!**

Complex procedures should not be triggered based on a signal, as the processing happens synchronously. This means a compute-intensive procedure would slow down the underlying i-doit process and could thereby cause undesirable side effects (request termination, memory overflow, ...).

Alternatively, an observed signal can be forwarded to an (operating system) process so that i-doit is not blocked. This is described in the [official PHP documentation](https://www.php.net/manual/en/function.exec.php#refsect1-function.exec-notes).

# Using Signals

To work with signals, we first need an instance of the "isys\_component\_signalcollection" class from the container:

    $signals = isys_application::instance()->container->get('signals');

With this instance, we can now send signals or observe existing signals. The observation of a signal can also be stopped subsequently.

## General Information

To execute custom logic when a signal is reached, so-called "callbacks" are used. In the PHP world, there are various ways to define these, see also the [official PHP documentation](https://www.php.net/callable).

We recommend providing "callbacks" using string or array notation, for example:

    $signal->connect('signal.name', 'function_name');
    // Or
    $signal->connect('signal.name', ['class_name', 'method_name']);

We advise against using lambda functions or closures, as this type of signal cannot be resolved later (see also "Stopping Observation").

## Observing Signals

To react to signals, we must attach a valid "callback" to the corresponding signal. This is done using the "connect" method:

    $signal->connect('name.of.signal', callable, priority);

*   The first argument is the name of the signal.
*   The second parameter must be "[callable](https://www.php.net/callable)"; it is recommended to provide an array or a string here. Lambda functions or closures also work, of course, but cannot be "disconnected" later.
*   As a third parameter, an optional priority can be specified -- this must be a numeric value. A lower number corresponds to a higher priority.

Each signal will, depending on the implementation, receive parameters that can be used. The code that triggers the signal determines the provided parameters.

More on this under "Available Signals".

## Stopping Observation

Using "disconnect", connected observations can be subsequently removed. Important: this does NOT work with lambda functions and closures, but only with "callbacks" in string or array form, for example:

    $signals->disconnect('signal.name', 'function_name');
    // Or
    $signals->disconnect('signal.name', ['class_name', 'method_name']);

# Sending Custom Signals

Using the "emit" method, signals can be sent from your own code. This is particularly useful when objects or categories are created or changed in your own add-on.

This is necessary so that base functions such as the search are informed about changed data and can update the search index accordingly.

Beyond that, it is of course also possible to send custom signals that can then be observed elsewhere. This can be used to decouple code by outsourcing specific sub-routines.

# Available Signals

The list of available signals is large and in some cases very specific to cover certain use cases. This list encompasses all signals that exist in the i-doit core and is divided into various groups. The signals under "Other" should be used with caution, while we strongly advise against using the "Deprecated Signals".

## Object Type Signals

### mod.cmdb.afterObjectTypeCreated

Executed immediately after a new object type has been written to the database.

Parameters: Object type ID, Name, Constant, Specific category ID, Custom-defined, Container, Object image URL, Icon URL, Sorting value, Status, SYS-ID Prefix, Display in tree

### mod.cmdb.beforeObjectTypePurge

Executed before an object type is deleted.

Parameters: Object type ID, Name, Record as array

### mod.cmdb.afterObjectTypeDeleted

Executed after an object type has been deleted from the database.

Parameters: Original object type ID, Record as array

### mod.cmdb.afterObjectTypePurge

Executed after an object type is deleted (i.e., after mod.cmdb.afterObjectTypeDeleted).

Parameters: Object type ID, Name, Result of the deletion, Record as array

### mod.cmdb.beforeObjectTypeSave

Executed before an object type is saved.

Parameters: Object type ID, Post data as array

### mod.cmdb.afterObjectTypeSave

Executed after an object type has been saved.

Parameters: Object type ID, Post data as array, Result of the creation

### mod.cmdb.beforeCreateObjectTypeList

Executed before the object type list is generated in the CMDB GUI.

Parameters: Instance of the list component

## Object Signals

### mod.cmdb.objectChanged

Executed after an object has been changed and before the "object changed" data is updated.

Parameters: Object IDs as array, Username of the current user

### mod.cmdb.objectDeleted

Executed after an object has been removed from the database (purged).

Parameters: Object ID, DAO instance that triggered the command

### mod.cmdb.beforeObjectRank

Executed before the status of an object is changed (e.g., archive, delete, purge, restore).

Parameters: DAO instance that triggered the command, Direction ("archive/delete/purge", "restore"), Object IDs as array

### mod.cmdb.afterObjectRank

Executed after the status of an object has been changed (e.g., archive, delete, purge, restore).

Parameters: DAO instance that triggered the command, Direction ("archive/delete/purge", "restore"), Object IDs as array

### mod.cmdb.beforeInsertObject

Executed before an object is created via the CMDB GUI.

Parameters: DAO instance that triggered the command

### mod.cmdb.objectCreated

Executed after an object has been successfully created.

Parameters: DAO instance that triggered the command, Object ID, SYS-ID, Object type ID, Name (possibly empty), CMDB status ID, Username of the current user

### mod.cmdb.afterInsertObject

Executed after an object has been successfully created via the CMDB GUI.

Parameters: DAO instance that triggered the command, Object type ID, Object ID

### mod.cmdb.beforeObjectStatusChange

Called before the status of an object is changed (e.g., archive, delete, purge, restore), before "mod.cmdb.beforeRankRecord".

Parameters: Object ID, New status

### mod.cmdb.templatesApplied

Called after an object has been created from a template.

Parameters: Template object IDs as array, Object type ID, Name of the created object, Object ID of the last created object, Instance of the CMDB Import Handler

## Category Signals

### mod.cmdb.beforeCategoryEntryRank

Called before the status of a category record is changed via the CMDB GUI.

Parameters: DAO instance of the respective category, Table name, Direction ("archive/delete/purge", "restore"), Post data as array

### mod.cmdb.afterCategoryEntryRank

Called after the status of a category record has been changed via the CMDB GUI.

Parameters: DAO instance of the respective category, Table name, Result of the process, Direction ("archive/delete/purge", "restore"), Post data as array

### mod.cmdb.afterCategoryEntrySave

Called after a category record has been saved.

Parameters: DAO instance of the respective category, Record ID, Result of the process, Object ID, Post data as array, Log changes as array

### mod.cmdb.beforeCategoryInit

Called before a category is navigated to via the CMDB GUI.

Parameters: Object ID, Category record ID, Some collected category metadata

### mod.cmdb.afterCategoryInit

Called after a category has been navigated to via the CMDB GUI -- both when opening the category and directly after saving.

Parameters: Object ID, DAO instance of the respective category, Instance of the DAO Distributor

### mod.cmdb.beforeCategorySync

Called before the "sync" method of a category DAO is called within the CMDB Import -- this also applies to the template system and the "duplicate object" function.

Parameters: Category ID, Category data passed to "sync", Object ID, Sync type (1 = create, 2 = update), Category type ID (0 = Global, 1 = Specific, 4 = Custom)

### mod.cmdb.afterCategorySync

Called after the "sync" method of a category DAO is called within the CMDB Import -- this also applies to the template system and the "duplicate object" function.

Parameters: Category ID, Category data passed to "sync", Record ID of the created entry, Created object ID, Sync type (1 = create, 2 = update), Category type ID (0 = Global, 1 = Specific, 4 = Custom), DAO instance of the respective category

### mod.cmdb.beforeCreateCategoryEntry

Called before a category record is created via the CMDB GUI.

Parameters: Category ID, Object ID, DAO instance of the respective category, Log changes as array

### mod.cmdb.afterCreateCategoryEntry

Called after a category record has been created via the CMDB GUI.

Parameters: Category ID, Category record ID, Result of the process, Object ID, DAO instance of the respective category, Log changes as array

### mod.cmdb.beforeCategoryEntrySave

Called before a category record is saved via the CMDB GUI.

Parameters: DAO instance of the respective category, Category record ID, Object ID, Post data as array, Log changes as array

### mod.cmdb.beforeProcess

Called before the "process" method of a UI category class is called.

Parameters: DAO instance of the respective category, File path of the template

### mod.cmdb.beforeProcessList

Called before the "process\_list" method of a UI (multi-value) category class is called.

Parameters: DAO instance of the respective category, File path of the template

### mod.cmdb.beforeRankRecord

Called before the status of a CMDB record is changed. This includes both category and object records.

Parameters: DAO instance of the respective category, Object ID, Category record ID, Record identifier, Record array, Table name, Current status of the record, Target status of the record, Category type ID (0 = Global, 1 = Specific, 4 = Custom), Direction ("archive/delete/purge", "restore")

### mod.cmdb.beforeUserGroupChanged

Called before a person group is changed, for example when adding or removing persons.

Parameters: Person object ID, Group object ID, Action ("attach-person" or "detach-person")

### mod.cmdb.contact.beforeSaveTag

Called before the role of a contact assignment is changed.

Parameters: DAO instance of the respective category, Record ID of the contact assignment category, ID of the person role

### mod.cmdb.extendFieldList

Called when the configuration of a list is processed. The return value should be an associative array with the field name or alias as key and a language constant displayed in the GUI as value.

Parameters: Category ID, Category type ID (0 = Global, 1 = Specific, 4 = Custom)

### mod.cmdb.extendProperties

Called when the attributes (= properties) of a category are retrieved. The signal's callback can provide custom attributes here to supplement any category with custom attributes.

Parameters: Category ID, Category type ID (0 = Global, 1 = Specific, 4 = Custom)

### mod.cmdb.processContentTop

Called after the object header has been processed. This can be intercepted to load custom elements into the object header, as done in the "Maintenance" add-on or Monitoring.

Parameters: Category data of the General category as array

### mod.cmdb.processMenuTreeLinks

Called when the navigation tree for categories within an object is generated. This is typically used for "sticky" categories displayed above the tree.

Parameters: Instance of the template component, Template variable name for using the "append()" method, Object ID, Object type ID

## Other

### mod.export.extendTree

Called after the navigation tree for the various exports has been built, to optionally add custom exports.

Parameters: Instance of the tree component

### mod.import\_csv.afterImport

Called after the CSV import has completed. This signal triggers, among other things, the search index to index the newly created / updated objects.

Parameters: Instance of the CSV import, Processed data as array, Created objects as array (with information about ID, title, and type ID), Category mapping as array, Array of actually updated categories (via constants)

### mod.import\_csv.afterImportObject

Called after the CSV import has imported an individual object.

Parameters: Instance of the CSV import, Object ID, Result of the import (boolean)

### mod.css.attachStylesheet

Called to load add-on-specific stylesheet files and make them globally available. The return value of the callback should be the absolute path to the stylesheet of your own add-on. Note: Add-on-specific styles should always use a unique prefix and not override any "core styles".

Parameters: None

### mod.cmdb.refreshTableConfigurations

Called after a custom category or the system settings have been changed to update object lists that may need to include changed attributes.

Parameters: None

### mod.cmdb.extendLocationTree

Called when the location navigation tree in the CMDB is being built and can be used to subsequently modify the tree.

Parameters: Instance of the tree component

### mod.cmdb.extendObjectTree

Called when the navigation tree (displaying the categories) within a CMDB object is being built.

Parameters: Instance of the tree component

### mod.cmdb.extendObjectTypeTree

Called when the navigation tree (displaying the object types) within a CMDB object type group is being built.

Parameters: Instance of the tree component

### mod.cmdb.extendRelationTree

Called when the navigation tree under Extras > CMDB > Relationships is being built.

Parameters: Instance of the tree component

### mod.cmdb.beforeUpdateLocationNode

Specific signal that is called when creating, moving, and deleting location "nodes".

Parameters: Node ID, Parent node ID, Action ("insert", "move", or "delete")

### mod.cmdb.massChangeApplied

Called after a mass change (via the template system) has been performed.

Parameters: Affected object IDs as array, Template object ID, Instance of the CMDB Import Handler

### mod.auth.afterRemoveAllRights

Called after all user permissions are removed. Note: this happens with every save of permissions to update the caches -- all data is deleted and then rewritten.

Parameters: Object ID, Add-on ID

### mod.auth.afterUpdateRights

Called after the permissions of a person or person group have been saved.

Parameters: Object ID, Add-on ID, Saved permissions as array, Identifier of the "create" action

### mod.auth.afterDuplicateRights

Called after a person or person group has been duplicated and their permissions have consequently been duplicated.

Parameters: Object ID of the original, Object ID of the duplicate, Duplicated records as array

### system.afterChange

Called after the i-doit update has run or an add-on has been changed (enabled, disabled, installed, or uninstalled).

Parameters: None

### system.afterFlushSystemCache

Called after the cache directory has been cleared.

Parameters: None

### system.gui.beforeRender

Called immediately before the GUI is processed (before Smarty runs through the templates).

Parameters: None

### system.gui.afterRender

Called after the GUI has been processed (after Smarty has rendered the template).

Parameters: None

### system.navbar.beforeAssignment

Called before the "navbar buttons" are processed. This is used, among others, by the "Swap-CI" add-on to add a button.

Parameters: None

### system.shutdown

Called when the destructor of isys\_application is called. This is typically used to save system settings that have not yet been written to the database.

Parameters: None

## Deprecated Signals That Should No Longer Be Used

### mod.cmdb.beforeCreateObjectList

Called before an object list is generated; however, this refers to a deprecated "list" component.

Parameters: Instance of the list component, Object type ID

### mod.cmdb.afterLegacyImport

Called after an import has been performed.

Parameters: Start time of the import (as float value)

### mod.cmdb.resultList

Called when a multi-value category is called in the CMDB GUI.

Parameters: Category ID, Category type ID (0 = Global, 1 = Specific, 4 = Custom), Object ID, Status of the records to display

### mod.report.views.view\_rack\_connections.set\_encoding\_type

Called before the CSV file is written in the report view "Devices in a rack".

Parameters: None

### mod.report.views.view\_devices\_in\_location\_detailed.extend\_report\_properties

Called before the attribute data is processed in the report view "Devices in a location (list format)".

Parameters: None

### mod.cmdb.viewProcessed

Executed after the CMDB View instance has been executed.

Parameters: Instance of the CMDB View, View data as array

### system.exceptionTriggered

Called at some specific points when an exception has not been caught.

Parameters: Instance of the exception

### mod.manager.onBeforeLoad

Called before the "Module Manager" calls the "start" method of the active add-on.

Parameters: Instance of the current add-on

### mod.manager.onAfterLoad

Called after the "Module Manager" has called the "start" method of the active add-on.

Parameters: Instance of the current add-on

### mod.css.beforeProcess

Called before the i-doit core stylesheets are compiled.

Parameters: None

### mod.dashboard.afterInitialize

Called after the i-doit dashboard has been prepared, immediately before the dashboard data is passed to the template.

Parameters: Instance of the dashboard module

### mod.import\_csv.beforeImport

Called before the CSV import is started.

Parameters: Instance of the CSV import, Processed data as array, Empty array, Category mapping as array

### mod.import\_csv.beforeImportObject

Called immediately before the CSV import imports an individual object.

Parameters: Instance of the CSV import, Object ID

### mod.css.processed

Called after the i-doit custom CSS has been processed.

Parameters: None
