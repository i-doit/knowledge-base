# API (JSON-RPC)

i-doit enables external access to the [IT documentation](../../glossary.md) via an [application programming interface (API)](https://en.wikipedia.org/wiki/Application_programming_interface). With the API data can be read, created, updated and deleted. Thus the API offers similar functions like the Web GUI but the additional benefit is that you can automate them without any problems.

Technical Background
--------------------

The API of i-doit provides typical [CRUD](https://en.wikipedia.org/wiki/Create,_read,_update_and_delete) functionalities. With this, files can be

*   **C**reated
*   **R**ead
*   **U**pdated and
*   **D**eleted.

For this, a client (for example, in the form of a script) sends a request to the server (i-doit) in order to execute a method on the server. This approach is called [Remote Procedure Call (RPC)](https://en.wikipedia.org/wiki/Remote_procedure_call). The result of the method is returned to the client as a response. In this communication the API of i-doit is based on the [JSON-RPC](http://www.jsonrpc.org/) protocol, version 2.0. HTTP is used as higher protocol and the [JavaScript Object Notation (JSON)](https://en.wikipedia.org/wiki/JSON) is used as exchange format. A request is send to the server in the JSON format per HTTP POST. The response is also made in JSON format.

API queries can take place in an asynchronous way without losing the relation between requests and responses. The utilized programming language can be chosen freely.

!!! success "API instead of database"

    It's strongly recommended to prefer the API to database manipulations at all times. SQL statements bypass all sorts of internal processes. If a data record is manipulated via SQL per  INSERT, UPDATE  or  DELETE , this could risk data integrity and could even disable _i-doit_.

Download
--------

In the [customer portal](../../system-administration/customer-portal.md) you can download the API for the pro version as [add-on](../index.md) for free. Users of the open version can also download it for free via [i-doit.org](https://i-doit.org/). The [installation](../index.md) is in line with the same principles of other i-doit add-ons.

Configuration
-------------

The API is configured via the [Web GUI](../../basics/web-gui.md) of i-doit and can be found at ** Administration → Interfaces / external data → JSON-RPC API **.

[![Configuration](../../assets/images/en/i-doit-pro-add-ons/api/1-api.png)](../../assets/images/en/i-doit-pro-add-ons/api/1-api.png)

!!! info "Info"

    Removing HTML tags from description fields is only possible at i-doit version 1.15.2 with API version 1.11.3 installed.

Please note that the logging of API requests will create a file in the install path of _i-doit_ at  log/  for each request. This may lead to increased requirements of memory space in case the API is used intensively.

Access
------

You can access the API of i-doit by activating a special URL. Add  src/jsonrpc.php  to the basic URL:

     https://demo.i-doit.com/src/jsonrpc.php 

Authentication and Authorization
--------------------------------

You need an API key so that requests will be processed by the API. Additionally, you can activate the function that a dedicated user account is activated for log-in. Permissions for this account can be set as usual. Otherwise all permissions are available through the API. Another advantage is the fact that a dedicated user can be set per third-party system/ script; this makes it easier to keep track of the data flow.

It may prove useful to use the API method  idoit.login  for a single authentication if a lot of requests (meaning thousands) are sent from a client. Otherwise it is possible that too many sessions are created in a very small time frame but are not terminated. This could result in the fact that i-doit stops working until the sessions have been terminated.

!!! attention ""
    The default user used for API actions is "Api System". This can be found under "Contacts -> People" if required.  
    This is only used if no username/password is used to connect to the API interface.  
    If the person is archived/deleted the API can no longer be used without authentication.

Methods
-------

Please see this [article for detailled information about each method](./methods.md).

| Method | Description |
| --- | --- |
|  idoit.addons  | Display installed i-doit [add-ons](../index.md) |
|  idoit.constants  | Query [constants](../../basics/unique-references.md#constants) |
|  idoit.license  | Display [licensed](../../maintenance-and-operation/activate-license.md) objects and add-ons |
|  idoit.login  | [Login](../../basics/initial-login.md) |
|  idoit.logout  | [Logout](../../basics/initial-login.md) |
|  idoit.search  | [Search](../../efficient-documentation/search.md) in i-doit |
|  idoit.version  | Display the version of i-doit |
|  cmdb.category.read  | Create a [category](../../basics/categories-and-attributes.md) entry |
|  cmdb.category.update  | Update a [category](../../basics/categories-and-attributes.md) entry |
|  cmdb.category.delete  | Delete a [category](../../basics/categories-and-attributes.md) entry |
|  cmdb.category.quickpurge  | Quickpurge a [category](../../basics/categories-and-attributes.md) entry |
|  cmdb.category.purge  | Purge a [category](../../basics/categories-and-attributes.md) entry |
|  cmdb.category.recycle  | Recycle a [category](../../basics/categories-and-attributes.md) entry |
|  cmdb.category.archive  | Archive a [category]( ../../basics/categories-and-attributes.md) entry |
|  cmdb.category.get_category_info  | Documentation follows |
|  cmdb.category.save  | Create/Update a [category]( ../../basics/categories-and-attributes.md) entry |
|  cmdb.category.create  | Create a [category]( ../../basics/categories-and-attributes.md) entry (deprecated) |
|  cmdb.category.get_category_id  | Documentation follows |
|  cmdb.category.getCategoryProcessor  | Documentation follows |
|  cmdb.category.validateRequest  | Documentation follows |
|  cmdb.category.get_category_suffix  | Documentation follows |
|  cmdb.category.validateSetRequest  | Documentation follows |
|  cmdb.category_info  | Read the [attributes]( ../../basics/categories-and-attributes.md) of a [category](../../basics/structure-of-the-it-documentation.md#category) |
|  cmdb.condition.read  | Documentation follows |
|  cmdb.contact.read  | Documentation follows |
|  cmdb.dialog.read  | Read the values of a [dialogue](../../basics/attribute-fields.md#dialog-field-drop-down) field |
|  cmdb.dialog.create  | Create the values of a [dialogue](../../basics/attribute-fields.md#dialog-field-drop-down) field |
|  cmdb.dialog.update  | Update the values of a [dialogue](../../basics/attribute-fields.md#dialog-field-drop-down) field |
|  cmdb.dialog.delete  | Delete the values of a [dialogue](../../basics/attribute-fields.md#dialog-field-drop-down) field |
|  cmdb.dialog.dialog_routine  | Documentation follows |
|  cmdb.filter.read  | Documentation follows |
|  cmdb.filter.getUpdatedIPs  | Documentation follows |
|  cmdb.filter.getValidObjects  | Documentation follows |
|  cmdb.impact.read  | Recursive query of all object [relations](../../basics/object-relations.md) |
|  cmdb.location_tree.read  | Read [location](../../use-cases/locations.md) path |
|  cmdb.logbook.read  | Read [logbook](../../basics/logbook.md) entry |
|  cmdb.logbook.create  | Create [logbook](../../basics/logbook.md) entry |
|  cmdb.object.read  | Read an [object](../../basics/structure-of-the-it-documentation.md#object) |
|  cmdb.object.create  | Create [an](../../basics/life-and-documentation-cycle.md) [object](../../basics/structure-of-the-it-documentation.md#object) |
|  cmdb.object.update  | Update an [object](../../basics/structure-of-the-it-documentation.md#object) |
|  cmdb.object.quickpurge  | Quickpurge [an](../../basics/life-and-documentation-cycle.md) [object](../../basics/structure-of-the-it-documentation.md#object) |
|  cmdb.object.recycle  | Recycle [an](../../basics/life-and-documentation-cycle.md) [object](../../basics/structure-of-the-it-documentation.md#object) |
|  cmdb.object.archive  | Archive an [object](../../basics/structure-of-the-it-documentation.md#object) |
|  cmdb.object.delete  | Delete [an](../../basics/life-and-documentation-cycle.md) [object](../../basics/structure-of-the-it-documentation.md#object) |
|  cmdb.object.purge  | Purge an [object](../../basics/structure-of-the-it-documentation.md#object) |
|  cmdb.object.markAsMassChangeTemplate  | Documentation follows |
|  cmdb.object.markAsTemplate  | Documentation follows |
|  cmdb.object_type_groups.read  | Read which object types are assigned to which [object type groups](../../basics/structure-of-the-it-documentation.md#objectTypeGroup) |
|  cmdb.object_type_categories.read  | Read which categories are configured to which [object types](../../basics/structure-of-the-it-documentation.md#objectType) |
|  cmdb.object_types.read  | Query [object types](../../basics/structure-of-the-it-documentation.md#objectType) |
|  cmdb.objects.read  | Read [object](../../basics/structure-of-the-it-documentation.md#object) |
|  cmdb.objects.getCategoryData  | Documentation follows |
|  cmdb.objects.getCategoryConstantsByObjectTypeId  | Documentation follows |
|  cmdb.objects_by_relation.read  | Read objects by [relation type](../../basics/object-relations.md#relation-types) |
|  cmdb.reports.read  | Execute a [report](../../evaluation/report-manager.md) |
|  cmdb.reports.remove_id  | Documentation follows |
|  cmdb.status.read  | Documentation follows |
|  cmdb.status.save  | Documentation follows |
|  cmdb.status.delete  | Documentation follows |
|  cmdb.workstation_components.read  | Documentation follows |
|  console.commands.listCommands  | Documentation follows |
|  console.auth.cleanup  | Documentation follows |
|  console.document.compile  | Documentation follows |
|  console.dynamicgroups.sync  | Documentation follows |
|  console.import.csv  | Documentation follows |
|  console.ldap.sync  | Documentation follows |
|  console,logbook.archive  | Documentation follows |
|  console.notifications,send  | Documentation follows |
|  console.report.export  | Documentation follows |
|  console.search.query  | Documentation follows |
|  console.settings.all  | Documentation follows |
|  console.system.autoincrement  | Documentation follows |

Example
-------

With a simple example we create a new object of the type  **Server**  with the object title "My little server" via the API.

Request to server:

    {
        "jsonrpc": "2.0",
        "method": "cmdb.object.create",
        "params": {
            "type": "C__OBJTYPE__SERVER",
            "title": "My little server",
            "apikey": "c1ia5q"
        },
        "id": 1
    }

Via cURL you can send this request for test purposes:

    curl \
    --data '{"jsonrpc":"2.0","method":"cmdb.object.create","params":{"type":"C__OBJTYPE__SERVER","title":"My little server","apikey":"c1ia5q"},"id":1}' \
    --header "Content-Type: application/json" \
    https://demo.i-doit.com/src/jsonrpc.php

Server response:

    {
        "jsonrpc": "2.0",
        "result": {
            "id": "3351",
            "message": "Object was successfully created",
            "success": true
        },
        "id": 1
    }

Categories in the IT Documentation
----------------------------------

A helpful listing of all categories and attributes used in _i-doit_ is provided by a special URL:

[![Categories in the IT Documentation](../../assets/images/en/i-doit-pro-add-ons/api/2-api.png)](../../assets/images/en/i-doit-pro-add-ons/api/2-api.png)

For example, this listing shows you which name is used to access categories and attributes and which data types are expected by these attributes.

Clients and Libraries
---------------------

There are numerous projects and products applying the API by i-doit. We would like to introduce some clients and libraries:

| Name | Website | Programming language | License |
| --- | --- | --- | --- |
| Idoit.API.Client | [https://github.com/OKT90/Idoit.API.Client](https://github.com/OKT90/Idoit.API.Client) | C#  | MIT |
| i-doit API client | [https://github.com/bheisig/i-doit-api-client-php](https://github.com/bheisig/i-doit-api-client-php) | PHP | AGPLv3 |
| i-doit CLI | [https://github.com/bheisig/i-doit-cli](https://github.com/bheisig/i-doit-cli) | PHP | AGPLv3 |
| i-doit-go-api | [https://github.com/cseeger-epages/i-doit-go-api](https://github.com/cseeger-epages/i-doit-go-api) | Go  | GPLv3 |

!!! info "Feedback"

    Should a client or a library be missing in this article, we appreciate a short message to [feedback@i-doit.com](mailto:feedback@i-doit.com).

Documentation for Download
--------------------------

You can download a [documentation maintained by the developers](../../assets/downloads/i-doit-JSON-RPC-1.8.3.pdf) as PDF file. (out-dated)

Since version 1.8.1 the API is released as an add-on. Pre-releases were [bundled with i-doit](../../version-history/index.md).  

FAQ
---

### Error Messages

| Error Message | Problem |
| --- | --- |
| Usersettings are only available after logging in. (i-doit <= 21) | Api System Person is archived or deleted. <br>**Solution** is to recycle the Api System user or to use  a authentication method |
| i-doit system error: Could not connect tenant database. (i-doit >=22) | Api System Person is archived or deleted.  <br>**Solution** is to recycle the Api System user or to use  a authentication method |

Releases
--------

| Version | Date | Changelog |
| --- | --- | --- |
| 1.14 | 2023-03-21 |  [Improvement] New method "cmdb.ip_search.getNetworksByIp" returns all Layer3 obejcts a given IP is within the defined range (contributed by becon GmbH) <br>[Bug] Creating objects results in two entries in category 'Accounting' <br>[Bug] Category 'C__CATS__ORGANIZATION_CONTACT_ASSIGNMENT' can not be updated <br> [Bug] Translations for 'LC__CMDB__CATG__VD__HOST_RAID_ARRAY' is missing <br> [Bug] Add 'limit' and 'offset' options to endpoint 'cmdb.reports.read' <br>[Bug] SQL error when updating category 'network > port' <br>[Bug] Can't read type of layer2 net category <br>[Bug] Attribute "GPS" in category "C__CATG__LOCATION" is not writeable |
| 1.13.1 | 2023-01-24 | [Bug] Some fields are not being validated  <br>[Bug] The Login method can use old session keys  <br>[Bug] Validation error f\_popup\_  <br>[Bug] Setting a Dialog Attribute via causes Fatal error  <br>[Bug] Failed validation breaks the response  <br>[Bug] installDate is always set to actual date/time  <br>[Bug] The addresses  attribute of the Network > Port category is incorrectly validated by API validation  <br>[Bug] Date of Change is not altered when archiving a object via API |
| 1.13 | 2022-09-05 | [Task] PHP 8.0 compatibility  <br>[Bug]  Reports displayed via the API show language constants  <br>[Bug]  The Hostname field of the Monitoring category is incorrectly validated by API validation  <br>[Bug]  Changing the object type via the API via type: dialog constant is not possible  <br>[Bug]  An EntryID is needed to purge single-value entries  <br>[Bug]  The API shall be able to change passwords of users  <br>[Bug]  The Host address field of the Network > Port category is incorrectly validated by API validation  <br>[Bug]  The Latitude, Longitude and Position fields in the Location category cabinet are incorrectly validated by API validation  <br>[Bug]  The Type and Assigned license key fields of the Software Assignment category are incorrectly validated by API validation  <br>[Bug]  The Image attribute of the Object picture category is incorrectly validated by API validation |
| 1.12.3 | 2022-02-21 | [Bug] Edit host address > primary\_fqdn sets field default gateway for the network to Yes  <br>[Bug] If you edit an entry in the host address category, the IP address is removed. |
| 1.12.2 | 2021-08-09 | [Improvement] New parameters "offset" and "limit" for the "cmdb.category.read" method  <br>[Bug] Virtual Switches > Creating Port Groups generates SQL error message  <br>[Bug]  Cluster members cannot be assigned via API using the category C\_\_CATG\_\_CLUSTER\_MEMBERSHIPS  <br>[Bug] The API can not create sub-categories in 'cmdb.object.create' context  <br>[Bug] Layer 3 nets cannot be assigned with API validation enabled in Layer 2 nets  <br>[Bug] When the layer 3 net is changed the layer 3 net is assigned to itself under layer 2 net assignment  <br>[Bug] The category SLA (C\_\_CATG\_\_SLA) cannot be described via the API / With API validation switched off the category is emptied  <br>[Bug] Dialog+ fields with 'PropertyFactory' definition can not be written |
| 1.12.1 | 2021-01-18 | [Bug] cmdb.category.quickpurge cannot be used with custom categories  <br>[Bug] API version 1.12 can no longer be used in the open variant of i-doit |
| 1.12 | 2021-01-14 | [Bug] API: It is not possible to create a volume license via the API if "type": "volume license" is used  <br>[Bug] Saving the "Layer-2 Nets" category deletes ip helper  <br>[Bug] Contact assignment of a group of people will be deleted if it is updated via the API |
| 1.11.3 | 2020-12-01 | [Bug] Assign cable with fibers/leads while saving connection  <br>[Bug] Limit assignment categories to one entry while creating  <br>[Bug] Do not connect root location while creating cluster membership  <br>[Bug] Do not create wrong output after removing cable connection  <br>[Bug] Cannot assign objects to category "locally assigned objects" (requires i-doit 1.15.1)  <br>[Bug] The category C\_\_CATG\_\_IMAGE is not read correctly via the API  <br>[Bug] The category C\_\_CATG\_\_IMAGE cannot be written correctly  <br>[Bug] The dates of the category contract information cannot be set via the API  <br>[Bug] Category > Assigned Subscriptions C\_\_CATG\_\_ASSIGNED\_SUBSCRIPTIONS key uuid cannot be set via string only via int  <br>[Bug] Read Methods: Do not output HTML tags in description fields  <br>[Bug] Objects can only be created via the API if the right to all object types is granted  <br>[Bug] Ports cannot be uniquely referenced via the API  <br>[Bug] Empty string supplied via API |
| 1.11.2 | 2020-06-24 | [Bug] API method: cmdb.object overrides the rights system |
| 1.11.1 | 2020-04-09 | [Bug] Updates via the API (save method) sets arbitrary entries in the Virtual Host category<br>    |
| 1.11 | 2020-03-23 | [Bug] Do not connect root location while creating cluster membership<br>[Bug] Objects that are changed via the API should also be locked for this period (Read > Update).<br>[Bug] Permission system error when using a user to change user-defined categories<br>[Bug] Data record of the standard_gateway always shows an ID<br>[Bug] When updating the category 'General' all tags are removed<br>[Bug] Report displays HTML in the result<br>    |
| 1.10.4 | 2019-09-02 | [Improvement] Add RPC to handle the CMDB status<br>[Improvement] Filling virtual custom category properties results in an error<br>[Improvement] Create, read, update and delete template objects and mass change template objects<br>[Bug] In the "Local Mass Storage" category, models cannot be created using the API.<br>[Bug] When updating the model, a Dialog+ value is created / displayed with the ID of the model.<br>[Bug] Update of a CPU title changes the frequency<br>[Bug] Improved handling of sorting of hight units when using API<br>[Bug] API "Categories and properties" page displays no content<br>[Bug] Saving the WAN category writes wrong values for router and net<br>[Bug] No salutation returns wrong value in JSON-API<br>[Bug] Missing values in the API method "cmdb.category_info"<br>    |
| 1.10.3 | 2019-05-06 | [Bug] Assignment of devices to segments in slots not possible<br>[Bug] Validating requests breaks altering attributes<br>    |
| 1.10.2 | 2019-04-01 | [Bug] cmdb.category.read: Read entries by state "normal" unless otherwise noted<br>[Bug] Select value in a dialog+ attribute by its constant<br>[Bug] Fix SQL error when linking two connectors<br>[Bug] Object deletion with provided status (C__RECORD_STATUS__DELETED) will result in an infinite loop<br>[Bug] object state is mandatory although it should be optional<br>[Bug] idoit.license.read: Response in new format<br>[Bug] idoit.license.read: Use new license form<br>[Bug] Deleting an unknown entry ID results in success<br>[Bug] Create objects with defined SYSID via API<br>[Bug] API does not return all IP addresses of the IP list<br>[Bug] Read data from the drive category<br>[Bug] Purge assigned Groups via API<br>[Bug] Revert changes of the "salutation" property<br>    |
| 1.10.1 | 2019-01-23 | [Bug] Authentication with LDAP not possible<br>[Bug] SQL injection vulnerability during login<br>    |
| 1.10 | 2018-12-17 | [Improvement] Enable validation of API requests via expert setting<br>[Improvement] Do not allow different API keys within a batch request<br>[Improvement] Throw error when same ID is used within a batch request<br>[Improvement] API Key is required, user credentials are optional but include rights management<br>[Improvement] Create or update category entries with cmdb.category.save<br>[Improvement] Read licence information via API<br>[Improvement] Human-readable internal logging<br>[Improvement] Filter category entries by status<br>[Improvement] Recycle category entry<br>[Improvement] Purge category entry<br>[Improvement] Delete category entry<br>[Improvement] Archive category entry<br>[Improvement] Mark object as mass change template<br>[Improvement] Mark object as template<br>[Improvement] Recylce object<br>[Improvement] Purge object<br>[Improvement] Delete object<br>[Improvement] Archive object<br>[Improvement] Create object with category entries<br>[Improvement] Read objects with category entries<br>[Improvement] Do not return integer value as string in a response anymore<br>[Improvement] Describe in the Web GUI handling with categories and attributes<br>[Improvement] Call console commands via API<br>[Improvement] Fetch information about installed add-ons<br>[Improvement] Read all constants<br>[Improvement] Create, read, update and delete template objects and mass change template objects<br>[Change] cmdb.category.create and .update are deprecated<br>[Bug] cmdb.category.create: Unable to add license key to category "software assignment"<br>[Bug] Category "managed devices" returned wrong values<br>[Bug] cmdb.category.read: Wrong object relations and duplicates in category "C__CATS_NET_TYPE__IPV4"<br>[Bug] API delivers a null array with no assignment for key zone, but an object with an assignment<br>[Bug] Unknown attributes will be ignoriert<br>[Bug] Invalid values do not throw exception<br>[Bug] Server does not send notifcation for request without an "id"<br>[Bug] cmdb.category.read returns entries for empty categories<br>[Bug][Bug] Cables remain unused when connections are created with the API<br>[Bug] Application priority is not being saved<br>[Bug] API: Timeout is not being reset after every request<br>[Bug] Error when editing manfactor/model via API<br>[Bug] API: Fibre connections cannot be read<br>[Bug] When givin an ID as string it is possible that the resulting data will be wrong<br>[Bug] Connecting ports with the API uses wrong objects as cables<br>    |
| 1.9.1 | 2018-04-16 | [Bug] cmdb.reports.read throws SQL error for variable reports <br>[Bug] Method cmdb.reports throws PHP warning <br>[Bug] After creating an object, a reindex is substantial to find an object via the search <br>[Bug] Unable to create entries in category C__CATS__ORGANIZATION_CONTACT_ASSIGNMENT <br>[Bug] API ignores language parameter<br>    |
| 1.9 | 2018-01-23 | [Improvement]   Searching for objects by attributes and values <br>[Improvement]   Enforce user rights for API calls <br>[Improvement]   Create object via "cmdb.object.create" with optional template <br>[Bug] Unable to upload file <br>[Bug] Logbook title is empty when saving a custom category <br>[Bug] User-defined dialog plus contents select via API <br>[Bug] Unable to read passwords <br>[Bug] Method 'cmdb.object.create' creates object id's partly as string, partly as integer <br>[Bug] Database error when trying to delete an object, which does not exist anymore, via the API <br>[Bug] Dialog Plus fields that have a dependency on another attribute have not been created.<br>    |
| 1.8.1 | 2017-03-02 | [Bug] Self-defined Dialog+ fields won't be displayed after creating them <br>[Bug] Created dialog entries receive status 1 instead of 2 (normal) <br>[Bug] cmdb.object.delete ignores parameter "status" <br>[Bug] cmdb.category.create throws database error for category "model"<br>    |