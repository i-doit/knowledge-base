# checkmk 2: i-doit Web GUI

Most user interactions are based on i-doit’s [legacy Check\_MK add-on](../checkmk.md) which is currently shipped with i-doit pro/open. This legacy add-on must be enabled [via the i-doit Admin Center](../index.md) (it’s enabled by default).

Enable real-time calls
----------------------

Let i-doit fetch the status of host and service checks via Livestatus in real-time. Configuration is done via Administration > Interfaces / external data > Monitoring > Livestatus / NDO.

These status calls may be displayed within any object or in the object lists for each type. Add the Monitoring category to these object types via Administration > CMDB settings > Quick Configuration Wizard.

Manually enable status calls within this category for each object or [idoitcmk pull](./import-inventory-data-into-cmdb.md) will handle this by [configuration setting](./configuration.md) pull.enableLivestatus.

Manage host tags
----------------

i-doit let you manage host tags. There are “static” and “dynamic” host tags:

*   “static” means you manually create tags in Extras > Check_MK 2 > Tags (static) and add them to host in category Check_MK Tags.
*   “dynamic” means this is done automatically via rule sets in Extras > Check_MK 2 > Tags (dynamic).

Both “static” and “dynamic” host tags will be displayed in category Check_MK Tags. They will be exported to Check\_MK via [idoitcmk push](./generate-wato-configuration-base-on-cmdb-data.md).

Call idoitcmk via Web GUI
---------------------------

Category Check_MK Host provides several buttons which trigger idoitcmk in the background:

*   Does host exist in checkmk?: Identify host in checkmk by its hostname
*   Update object from checkmk: Pull data from checkmk host to update this object.
*   Create/update host in checkmk: Object data will be pushed to checkmk. Either a new host will be created in checkmk or an existing one will be updated.
*   Delete host in checkmk: If this object exists as host in checkmk it will be deleted.

Before you or any other user push one of these buttons, please run them manually on the command-line interface to make sure they do what they are intended to do.

Configuration is done via Administration > Interfaces / external data > Monitoring > Check_MK. By setting Run idoitcmk app i-doit needs to know where idoitcmk is located. If you followed the [installation steps](/pages/viewpage.action?pageId=75989120) carefully use this:

    /usr/local/bin/idoitcmk

Tip: You may want to add default options whenever one of the buttons are triggered. For example, in a multi-tenant environment provide tenant-specific configuration settings:

    /usr/local/bin/idoitcmk -c /etc/idoitcmk/tenant-one.json

Logging is enabled by default. For the first steps it’s always a good thing to know what is happening.

To authorize users/user groups to trigger these buttons go to Administration > Authorization system > Rights > CMDB, load a user/group and enable the Execute right for one or more conditions:

*   Category,
*   Category in object-type,
*   Category in Object,
*   Category in Objects underneath a location and/or
*   Categories in my created objects