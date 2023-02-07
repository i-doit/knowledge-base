**Contents**

*   1[Technical Background](#API(JSONRPC)-TechnicalBackground)
*   2[Download](#API(JSONRPC)-Download)
*   3[Configuration](#API(JSONRPC)-Configuration)
*   4[Access](#API(JSONRPC)-Access)
*   5[Authentication and Authorization](#API(JSONRPC)-AuthenticationandAuthorization)
*   6[Methods](#API(JSONRPC)-Methods)
*   7[Example](#API(JSONRPC)-Example)
*   8[Categories in the IT Documentation](#API(JSONRPC)-CategoriesintheITDocumentation)
*   9[Clients and Libraries](#API(JSONRPC)-ClientsandLibraries)
*   10[Documentation for Download](#API(JSONRPC)-DocumentationforDownload)
*   11[FAQ](#API(JSONRPC)-FAQ)
    *   11.1[Error Messages](#API(JSONRPC)-ErrorMessages)
*   12[Releases](#API(JSONRPC)-Releases)

i-doit enables external access to the [IT documentation](/display/en/Glossary) via an [application programming interface (API)](https://en.wikipedia.org/wiki/Application_programming_interface). With the API data can be read, created, updated and deleted. Thus the API offers similar functions like the Web GUI but the additional benefit is that you can automate them without any problems.

Technical Background
--------------------

The API of i-doit provides typical [CRUD](https://en.wikipedia.org/wiki/Create,_read,_update_and_delete) functionalities. With this, files can be

*   **C**reated
*   **R**ead
*   **U**pdated and
*   **D**eleted.

For this, a client (for example, in the form of a script) sends a request to the server (i-doit) in order to execute a method on the server. This approach is called [Remote Procedure Call (RPC)](https://en.wikipedia.org/wiki/Remote_procedure_call). The result of the method is returned to the client as a response. In this communication the API of i-doit is based on the [JSON-RPC](http://www.jsonrpc.org/) protocol, version 2.0. HTTP is used as higher protocol and the [JavaScript Object Notation (JSON)](https://en.wikipedia.org/wiki/JSON) is used as exchange format. A request is send to the server in the JSON format per HTTP POST. The response is also made in JSON format.

API queries can take place in an asynchronous way without losing the relation between requests and responses. The utilized programming language can be chosen freely.

API instead of database

It's strongly recommended to prefer the API to database manipulations at all times. SQL statements bypass all sorts of internal processes. If a data record is manipulated via SQL per `INSERT, UPDATE` or `DELETE`, this could risk data integrity and could even disable _i-doit_.

Download
--------

In the [customer portal](/display/en/Customer+Portal) you can download the API for the pro version as [add-on](/display/en/i-doit+pro+Add-ons) for free. Users of the open version can also download it for free via [i-doit.org](https://i-doit.org/). The i[nstallation](/display/en/i-doit+pro+Add-ons) is in line with the same principles of other i-doit add-ons.

Configuration
-------------

The API is configured via the [Web GUI](/display/en/Web+GUI) of i-doit and can be found at **`Administration → Interfaces / external data → JSON-RPC API`**.

![](/download/attachments/37355644/image2020-12-4_13-9-29.png?version=1&modificationDate=1607083769978&api=v2&effects=drop-shadow)

Info

Removing HTML tags from description fields is only possible at i-doit version 1.15.2 with API version 1.11.3 installed.

Please note that the logging of API requests will create a file in the install path of _i-doit_ at `log/` for each request. This may lead to increased requirements of memory space in case the API is used intensively.

Access
------

You can access the API of i-doit by activating a special URL. Add `src/jsonrpc.php` to the basic URL:

[?](#)

`https:``//demo``.i-doit.com``/src/jsonrpc``.php`

Authentication and Authorization
--------------------------------

You need an API key so that requests will be processed by the API. Additionally, you can activate the function that a dedicated user account is activated for log-in. Permissions for this account can be set as usual. Otherwise all permissions are available through the API. Another advantage is the fact that a dedicated user can be set per third-party system/ script; this makes it easier to keep track of the data flow.

It may prove useful to use the API method `idoit.login` for a single authentication if a lot of requests (meaning thousands) are sent from a client. Otherwise it is possible that too many sessions are created in a very small time frame but are not terminated. This could result in the fact that i-doit stops working until the sessions have been terminated.

The default user used for API actions is "Api System". This can be found under "Contacts -> People" if required.  
This is only used if no username/password is used to connect to the API interface.  
If the person is archived/deleted the API can no longer be used without authentication.

Methods
-------

Please see this [article for detailled information about each method](/display/en/Methods).

| Method | Description |
| --- | --- |
| `idoit.addons` | Display installed i-doit [add-ons](/display/en/i-doit+pro+Add-ons) |
| `idoit.constants` | Query [constants](https://kb.i-doit.com/display/en/Unique+References#UniqueReferences-Constants) |
| `idoit.license` | Display [licensed](/display/en/Activate+License) objects and add-ons |
| `idoit.login` | [Login](/display/en/Initial+Login) |
| `idoit.logout` | [Logout](/display/en/Initial+Login) |
| `idoit.search` | [Search](/display/en/Search) in i-doit |
| `idoit.version` | Display the version of i-doit |
| `cmdb.category.read` | Create a [category](/display/en/Categories+and+Attributes) entry |
| `cmdb.category.update` | Update a [category](/display/en/Categories+and+Attributes) entry |
| `cmdb.category.delete` | Delete a [category](/display/en/Categories+and+Attributes) entry |
| `cmdb.category.quickpurge` | Quickpurge a [category](/display/en/Categories+and+Attributes) entry |
| `cmdb.category.purge` | Purge a [category](/display/en/Categories+and+Attributes) entry |
| `cmdb.category.recycle` | Recycle a [category](/display/en/Categories+and+Attributes) entry |
| `cmdb.category.archive` | Archive a [category](/display/en/Categories+and+Attributes) entry |
| `cmdb.category.get_category_info` | Documentation follows |
| `cmdb.category.save` | Create/Update a [category](/display/en/Categories+and+Attributes) entry |
| `cmdb.category.create` | Create a [category](/display/en/Categories+and+Attributes) entry (deprecated) |
| `cmdb.category.get_category_id` | Documentation follows |
| `cmdb.category.getCategoryProcessor` | Documentation follows |
| `cmdb.category.validateRequest` | Documentation follows |
| `cmdb.category.get_category_suffix` | Documentation follows |
| `cmdb.category.validateSetRequest` | Documentation follows |
| `cmdb.category_info` | Read the [attributes](/display/en/Categories+and+Attributes) of a [category](https://kb.i-doit.com/display/en/Structure+of+the+IT+Documentation#StructureoftheITDocumentation-Category) |
| `cmdb.condition.read` | Documentation follows |
| `cmdb.contact.read` | Documentation follows |
| `cmdb.dialog.read` | Read the values of a [dialogue](https://kb.i-doit.com/display/en/Attribute+Fields#AttributeFields-DialogField(DropDown)) field |
| `cmdb.dialog.create` | Create the values of a [dialogue](https://kb.i-doit.com/display/en/Attribute+Fields#AttributeFields-DialogField(DropDown)) field |
| `cmdb.dialog.update` | Update the values of a [dialogue](https://kb.i-doit.com/display/en/Attribute+Fields#AttributeFields-DialogField(DropDown)) field |
| `cmdb.dialog.delete` | Delete the values of a [dialogue](https://kb.i-doit.com/display/en/Attribute+Fields#AttributeFields-DialogField(DropDown)) field |
| `cmdb.dialog.dialog_routine` | Documentation follows |
| `cmdb.filter.read` | Documentation follows |
| `cmdb.filter.getUpdatedIPs` | Documentation follows |
| `cmdb.filter.getValidObjects` | Documentation follows |
| `cmdb.impact.read` | Recursive query of all object [relations](https://kb.i-doit.com/display/en/Object+Relations) |
| `cmdb.location_tree.read` | Read [location](https://kb.i-doit.com/display/en/Locations) path |
| `cmdb.logbook.read` | Read [logbook](/display/en/Logbook) entry |
| `cmdb.logbook.create` | Create [logbook](/display/en/Logbook) entry |
| `cmdb.object.read` | Read an [object](https://kb.i-doit.com/display/en/Structure+of+the+IT+Documentation#StructureoftheITDocumentation-Object) |
| `cmdb.object.create` | Create [a](/display/en/Life+and+Documentation+Cycle)n [object](https://kb.i-doit.com/display/en/Structure+of+the+IT+Documentation#StructureoftheITDocumentation-Object) |
| `cmdb.object.update` | Update an [object](https://kb.i-doit.com/display/en/Structure+of+the+IT+Documentation#StructureoftheITDocumentation-Object) |
| `cmdb.object.quickpurge` | Quickpurge [a](/display/en/Life+and+Documentation+Cycle)n [object](https://kb.i-doit.com/display/en/Structure+of+the+IT+Documentation#StructureoftheITDocumentation-Object) |
| `cmdb.object.recycle` | Recycle [a](/display/en/Life+and+Documentation+Cycle)n [object](https://kb.i-doit.com/display/en/Structure+of+the+IT+Documentation#StructureoftheITDocumentation-Object) |
| `cmdb.object.archive` | Archive an [object](https://kb.i-doit.com/display/en/Structure+of+the+IT+Documentation#StructureoftheITDocumentation-Object) |
| `cmdb.object.delete` | Delete [a](/display/en/Life+and+Documentation+Cycle)n [object](https://kb.i-doit.com/display/en/Structure+of+the+IT+Documentation#StructureoftheITDocumentation-Object) |
| `cmdb.object.purge` | Purge an [object](https://kb.i-doit.com/display/en/Structure+of+the+IT+Documentation#StructureoftheITDocumentation-Object) |
| `cmdb.object.markAsMassChangeTemplate` | Documentation follows |
| `cmdb.object.markAsTemplate` | Documentation follows |
| `cmdb.object_type_groups.read` | Read which object types are assigned to which [object type groups](https://kb.i-doit.com/display/en/Structure+of+the+IT+Documentation#StructureoftheITDocumentation-ObjectTypeGroup) |
| `cmdb.object_type_categories.read` | Read which categories are configured to which [object types](https://kb.i-doit.com/display/en/Structure+of+the+IT+Documentation#StructureoftheITDocumentation-ObjectType) |
| `cmdb.object_types.read` | Query [object types](https://kb.i-doit.com/display/en/Structure+of+the+IT+Documentation#StructureoftheITDocumentation-ObjectType) |
| `cmdb.objects.read` | Read [object](https://kb.i-doit.com/display/en/Structure+of+the+IT+Documentation#StructureoftheITDocumentation-Object) |
| `cmdb.objects.getCategoryData` | Documentation follows |
| `cmdb.objects.getCategoryConstantsByObjectTypeId` | Documentation follows |
| `cmdb.objects_by_relation.read` | Read objects by [relation type](https://kb.i-doit.com/display/en/Object+Relations#ObjectRelations-RelationTypes) |
| `cmdb.reports.read` | Execute a [report](https://kb.i-doit.com/display/en/Report+Manager) |
| `cmdb.reports.remove_id` | Documentation follows |
| `cmdb.status.read` | Documentation follows |
| `cmdb.status.save` | Documentation follows |
| `cmdb.status.delete` | Documentation follows |
| `cmdb.workstation_components.read` | Documentation follows |
| `console.commands.listCommands` | Documentation follows |
| `console.auth.cleanup` | Documentation follows |
| `console.document.compile` | Documentation follows |
| `console.dynamicgroups.sync` | Documentation follows |
| `console.import.csv` | Documentation follows |
| `console.ldap.sync` | Documentation follows |
| `console,logbook.archive` | Documentation follows |
| `console.notifications,send` | Documentation follows |
| `console.report.export` | Documentation follows |
| `console.search.query` | Documentation follows |
| `console.settings.all` | Documentation follows |
| `console.system.autoincrement` | Documentation follows |

  

Example
-------

With a simple example we create a new object of the type `**Server**` with the object title "My little server" via the API.

Request to server:

  

`{`

`"jsonrpc"``:` `"2.0"``,`

`"method"``:` `"cmdb.object.create"``,`

`"params"``: {`

`"type"``:` `"C__OBJTYPE__SERVER"``,`

`"title"``:` `"My little server"``,`

`"apikey"``:` `"c1ia5q"`

`},`

`"id"``: 1`

`}`

  

Via cURL you can send this request for test purposes:

  

`curl \`

`--data` `'{"jsonrpc":"2.0","method":"cmdb.object.create","params":{"type":"C__OBJTYPE__SERVER","title":"My little server","apikey":"c1ia5q"},"id":1}'` `\`

`--header` `"Content-Type: application/json"` `\`

`https:``//demo``.[i-doit.com](http://i-doit.com)``/src/jsonrpc``.php`

  

Server response:

  

`{`

`"jsonrpc"``:` `"2.0"``,`

`"result"``: {`

`"id"``:` `"3351"``,`

`"message"``:` `"Object was successfully created"``,`

`"success"``:` `true`

`},`

`"id"``: 1`

`}`

  

Categories in the IT Documentation
----------------------------------

A helpful listing of all categories and attributes used in _i-doit_ is provided by a special URL:

![](/download/attachments/37355644/image2020-8-17_12-49-16.png?version=1&modificationDate=1597661357265&api=v2&effects=drop-shadow)

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

Feedback

Should a client or a library be missing in this article, we appreciate a short message to [feedback@i-doit.com](mailto:feedback@i-doit.com).

Documentation for Download
--------------------------

You can download a [documentation maintained by the developers](/download/attachments/37355644/i-doit%20JSON-RPC%201.8.3.pdf?version=1&modificationDate=1489677685764&api=v2) as PDF file. (out-dated)

Since version 1.8.1 the API is released as an add-on. Pre-releases were [bundled with i-doit](/display/en/Version+History).  

  

FAQ
---

### Error Messages

| Error Message | Problem |
| --- | --- |
| Usersettings are only available after logging in. (i-doit <= 21) | Api System Person is archived or deleted.  <br>  <br>**Solution** is to recycle the Api System user or to use  a authentication method |
| i-doit system error: Could not connect tenant database. (i-doit >=22) | Api System Person is archived or deleted.  <br>  <br>**Solution** is to recycle the Api System user or to use  a authentication method |

Releases
--------

| Version | Date | Changelog |
| --- | --- | --- |
| 1.13.1 | 2023-01-24 | \[Bug\] Some fields are not being validated  <br>\[Bug\] The Login method can use old session keys  <br>\[Bug\] Validation error f\_popup\_  <br>\[Bug\] Setting a Dialog Attribute via causes Fatal error  <br>\[Bug\] Failed validation breaks the response  <br>\[Bug\] installDate is always set to actual date/time  <br>\[Bug\] The addresses  attribute of the Network > Port category is incorrectly validated by API validation  <br>\[Bug\] Date of Change is not altered when archiving a object via API |
| 1.13 | 2022-09-05 | \[Task\] PHP 8.0 compatibility  <br>\[Bug\]  Reports displayed via the API show language constants  <br>\[Bug\]  The Hostname field of the Monitoring category is incorrectly validated by API validation  <br>\[Bug\]  Changing the object type via the API via type: dialog constant is not possible  <br>\[Bug\]  An EntryID is needed to purge single-value entries  <br>\[Bug\]  The API shall be able to change passwords of users  <br>\[Bug\]  The Host address field of the Network > Port category is incorrectly validated by API validation  <br>\[Bug\]  The Latitude, Longitude and Position fields in the Location category cabinet are incorrectly validated by API validation  <br>\[Bug\]  The Type and Assigned license key fields of the Software Assignment category are incorrectly validated by API validation  <br>\[Bug\]  The Image attribute of the Object picture category is incorrectly validated by API validation |
| 1.12.3 | 2022-02-21 | \[Bug\] Edit host address > primary\_fqdn sets field default gateway for the network to Yes  <br>\[Bug\] If you edit an entry in the host address category, the IP address is removed. |
| 1.12.2 | 2021-08-09 | \[Improvement\] New parameters "offset" and "limit" for the "cmdb.category.read" method  <br>\[Bug\] Virtual Switches > Creating Port Groups generates SQL error message  <br>\[Bug\]  Cluster members cannot be assigned via API using the category C\_\_CATG\_\_CLUSTER\_MEMBERSHIPS  <br>\[Bug\] The API can not create sub-categories in 'cmdb.object.create' context  <br>\[Bug\] Layer 3 nets cannot be assigned with API validation enabled in Layer 2 nets  <br>\[Bug\] When the layer 3 net is changed the layer 3 net is assigned to itself under layer 2 net assignment  <br>\[Bug\] The category SLA (C\_\_CATG\_\_SLA) cannot be described via the API / With API validation switched off the category is emptied  <br>\[Bug\] Dialog+ fields with 'PropertyFactory' definition can not be written |
| 1.12.1 | 2021-01-18 | \[Bug\] cmdb.category.quickpurge cannot be used with custom categories  <br>\[Bug\] API version 1.12 can no longer be used in the open variant of i-doit |
| 1.12 | 2021-01-14 | \[Bug\] API: It is not possible to create a volume license via the API if "type": "volume license" is used  <br>\[Bug\] Saving the "Layer-2 Nets" category deletes ip helper  <br>\[Bug\] Contact assignment of a group of people will be deleted if it is updated via the API |
| 1.11.3 | 2020-12-01 | \[Bug\] Assign cable with fibers/leads while saving connection  <br>\[Bug\] Limit assignment categories to one entry while creating  <br>\[Bug\] Do not connect root location while creating cluster membership  <br>\[Bug\] Do not create wrong output after removing cable connection  <br>\[Bug\] Cannot assign objects to category "locally assigned objects" (requires i-doit 1.15.1)  <br>\[Bug\] The category C\_\_CATG\_\_IMAGE is not read correctly via the API  <br>\[Bug\] The category C\_\_CATG\_\_IMAGE cannot be written correctly  <br>\[Bug\] The dates of the category contract information cannot be set via the API  <br>\[Bug\] Category > Assigned Subscriptions C\_\_CATG\_\_ASSIGNED\_SUBSCRIPTIONS key uuid cannot be set via string only via int  <br>\[Bug\] Read Methods: Do not output HTML tags in description fields  <br>\[Bug\] Objects can only be created via the API if the right to all object types is granted  <br>\[Bug\] Ports cannot be uniquely referenced via the API  <br>\[Bug\] Empty string supplied via API |
| 1.11.2 | 2020-06-24 | \[Bug\] API method: cmdb.object overrides the rights system |
| 1.11.1 | 2020-04-09 | ```<br>[Bug] Updates via the API (save method) sets arbitrary entries in the Virtual Host category<br>``` |
| 1.11 | 2020-03-23 | ```<br>[Bug] Do not connect root location while creating cluster membership[Bug] Objects that are changed via the API should also be locked for this period (Read > Update).[Bug] Permission system error when using a user to change user-defined categories[Bug] Data record of the standard_gateway always shows an ID[Bug] When updating the category 'General' all tags are removed[Bug] Report displays HTML in the result<br>``` |
| 1.10.4 | 2019-09-02 | ```<br>[Improvement] Add RPC to handle the CMDB status[Improvement] Filling virtual custom category properties results in an error[Improvement] Create, read, update and delete template objects and mass change template objects[Bug] In the "Local Mass Storage" category, models cannot be created using the API.[Bug] When updating the model, a Dialog+ value is created/displayed with the ID of the model.[Bug] Update of a CPU title changes the frequency[Bug] Improved handling of sorting of hight units when using API[Bug] API "Categories and properties" page displays no content[Bug] Saving the WAN category writes wrong values for router and net[Bug] No salutation returns wrong value in JSON-API[Bug] Missing values in the API method "cmdb.category_info"<br>``` |
| 1.10.3 | 2019-05-06 | ```<br>[Bug] Assignment of devices to segments in slots not possible[Bug] Validating requests breaks altering attributes<br>``` |
| 1.10.2 | 2019-04-01 | ```<br>[Bug] cmdb.category.read: Read entries by state "normal" unless otherwise noted[Bug] Select value in a dialog+ attribute by its constant[Bug] Fix SQL error when linking two connectors[Bug] Object deletion with provided status (C__RECORD_STATUS__DELETED) will result in an infinite loop[Bug] object state is mandatory although it should be optional[Bug] idoit.license.read: Response in new format[Bug] idoit.license.read: Use new license form[Bug] Deleting an unknown entry ID results in success[Bug] Create objects with defined SYSID via API[Bug] API does not return all IP addresses of the IP list[Bug] Read data from the drive category[Bug] Purge assigned Groups via API[Bug] Revert changes of the "salutation" property<br>``` |
| 1.10.1 | 2019-01-23 | ```<br>[Bug] Authentication with LDAP not possible[Bug] SQL injection vulnerability during login<br>``` |
| 1.10 | 2018-12-17 | ```<br>[Improvement] Enable validation of API requests via expert setting[Improvement] Do not allow different API keys within a batch request[Improvement] Throw error when same ID is used within a batch request[Improvement] API Key is required, user credentials are optional but include rights management[Improvement] Create or update category entries with cmdb.category.save[Improvement] Read licence information via API[Improvement] Human-readable internal logging[Improvement] Filter category entries by status[Improvement] Recycle category entry[Improvement] Purge category entry[Improvement] Delete category entry[Improvement] Archive category entry[Improvement] Mark object as mass change template[Improvement] Mark object as template[Improvement] Recylce object[Improvement] Purge object[Improvement] Delete object[Improvement] Archive object[Improvement] Create object with category entries[Improvement] Read objects with category entries[Improvement] Do not return integer value as string in a response anymore[Improvement] Describe in the Web GUI handling with categories and attributes[Improvement] Call console commands via API[Improvement] Fetch information about installed add-ons[Improvement] Read all constants[Improvement] Create, read, update and delete template objects and mass change template objects[Change] cmdb.category.create and .update are deprecated[Bug] cmdb.category.create: Unable to add license key to category "software assignment"[Bug] Category "managed devices" returned wrong values[Bug] cmdb.category.read: Wrong object relations and duplicates in category "C__CATS_NET_TYPE__IPV4"[Bug] API delivers a null array with no assignment for key zone, but an object with an assignment[Bug] Unknown attributes will be ignoriert[Bug] Invalid values do not throw exception[Bug] Server does not send notifcation for request without an "id"[Bug] cmdb.category.read returns entries for empty categories[Bug][Bug] Cables remain unused when connections are created with the API[Bug] Application priority is not being saved[Bug] API: Timeout is not being reset after every request[Bug] Error when editing manfactor/model via API[Bug] API: Fibre connections cannot be read[Bug] When givin an ID as string it is possible that the resulting data will be wrong[Bug] Connecting ports with the API uses wrong objects as cables<br>``` |
| 1.9.1 | 2018-04-16 | ```<br>[Bug]           cmdb.reports.read throws SQL error for variable reports<br>```<br><br>```<br>[Bug]           Method cmdb.reports throws PHP warning<br>```<br><br>```<br>[Bug]           After creating an object, a reindex is substantial to find an object via the search<br>```<br><br>```<br>[Bug]           Unable to create entries in category C__CATS__ORGANIZATION_CONTACT_ASSIGNMENT<br>```<br><br>```<br>[Bug]           API ignores language parameter<br>``` |
| 1.9 | 2018-01-23 | ```<br>[Improvement]   Searching for objects by attributes and values<br>```<br><br>```<br>[Improvement]   Enforce user rights for API calls<br>```<br><br>```<br>[Improvement]   Create object via "cmdb.object.create" with optional template<br>```<br><br>```<br>[Bug]           Unable to upload file<br>```<br><br>```<br>[Bug]           Logbook title is empty when saving a custom category<br>```<br><br>```<br>[Bug]           User-defined dialog plus contents select via API<br>```<br><br>```<br>[Bug]           Unable to read passwords<br>```<br><br>```<br>[Bug]           Method 'cmdb.object.create' creates object id's partly as string, partly as integer<br>```<br><br>```<br>[Bug]           Database error when trying to delete an object, which does not exist anymore, via the API<br>```<br><br>```<br>[Bug]           Dialog Plus fields that have a dependency on another attribute have not been created.<br>``` |
| 1.8.1 | 2017-03-02 | ```<br>[Bug]           Self-defined Dialog+ fields won't be displayed after creating them<br>```<br><br>```<br>[Bug]           Created dialog entries receive status 1 instead of 2 (normal)<br>```<br><br>```<br>[Bug]           cmdb.object.delete ignores parameter "status"<br>```<br><br>```<br>[Bug]           cmdb.category.create throws database error for category "model"<br>``` |