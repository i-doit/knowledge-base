---
title: external
description: cmdb.external endpoint
icon: material/api
status:
lang: en
---

# cmdb.external

The integration of external data sources into the Configuration Management Database (CMDB) can be simplified through various measures. First, it is important that the data is available in a standardized, easy-to-process format to facilitate reading and transferring it into the CMDB. Furthermore, functions should be implemented that enable a complete, one-time data transfer as well as regular, automated synchronizations. It is crucial that each data element in the CMDB is linked to its origin to ensure the identifiability of data sources. At the same time, clear rules and guidelines must be defined to delineate the scope of data from individual sources. The simultaneous integration of multiple data sources should also be supported, with conflicts and inconsistencies being detected and resolved. Finally, single-request operations should be implemented that allow users to perform data imports, synchronizations, and queries through a single interface to increase usability and efficiency.

## cmdb.external

### What are External Identifiers?

-   User-defined string-based stable and unique IDs
-   Composed of a **"type"** and an **"id"**

For example `my_vendor_id / my_object_id`.

### Why do we need External Identifiers?

-   Clear identification of object and category records
-   Scoping: Isolated data areas
-   Caller does not need to know internal record IDs

### How do External Identifiers work?

-   Hierarchical approach
-   User defines an External Identifier for the object
    -   **extType**: Identifier for the data source/vendor
    -   **extId**: Identifier for the object
-   **User also defines an Identifier (without extType) for each category entry**
-   API creates a mapping between identifier and internal IDs

Examples would be:

-   External identifier for an **object**
    -   `datasource-1 / windows-server100`
-   External identifier for each **category entry**
    -   `datasource-1 / windows-server100 / C__CATG__CPU / intel-1`

On the first level is the object. Here we define the **extType** and the **extId**. Together they form the complete identifier and uniquely identify the created object.

On the next level we have our **Category level**. Each category starts with the associated constant and receives a unique ID on the level below.

From this structure, i-doit then automatically derives the final identifier, illustrated here using the example of **intel-1** and **intel-2**.

Here is an example push request for creating an object via the new endpoint.

```json
{
    "jsonrpc": "2.0",
    "id": 1,
    "params": {
        ...
        "apikey": "xxx",
        <--- object level
        "extType": "datasource-1",
        "extId": "windows-server100",
        "title": "Server 100",
        "class": "C__OBJTYPE__SERVER",
        object level --->
        "data": {
            <--- category level
            "C__CATG__CPU": {
                "strategy": "overwrite",
                "data": {
                    "intel-1": {
                        "title": "Intel Core i9 3.5GHz #1",
                        "manufacturer": "Intel",
                        "type": "Core i9",
                        "frequency": "3.5",
                        "frequency_unit": "GHz"
                    },
                    "intel-2":{
                        "title": "Intel Core i9 3.5GHz #2",
                        "manufacturer": "Intel",
                        "type": "Core i9",
                        "frequency": "3.5",
                        "frequency_unit": "GHz"
                    }
                },...
            }
            category level --->
        }
    }
}
```

and records everything in an internal mapping table.

[![Mapping table](../../../../assets/images/de/i-doit-add-ons/api/methods/cmdb.external/mapping-table.png)](../../../../assets/images/de/i-doit-add-ons/api/methods/cmdb.external/mapping-table.png)

### Scoping

Scoping ensures that two data sources do not interfere with each other, as we assume the following:

!!! note "If different data sources simultaneously feed their data into i-doit, we assume that each data source is authoritative on its own and can be considered a Single Source of Truth. Conversely, this means that an object can never appear in multiple data sources simultaneously."

[![Scoping](../../../../assets/images/de/i-doit-add-ons/api/methods/cmdb.external/scoping.png)](../../../../assets/images/de/i-doit-add-ons/api/methods/cmdb.external/scoping.png)

Based on this assumption, i-doit implements the following safety net:

-   There is a clear assignment of objects to data sources
    -   An object can only be assigned to one data source
        -   A data-source object cannot be managed by multiple data sources
    -   Another subtlety: Existing objects cannot be manually assigned to a data source

At the category level, we have a similar handling:

-   Clear assignment of category entries to data sources
-   A special case for MV: **MV entries can be manually edited even if they originate from a data source**
-   The reverse, however, is that manually created multi-value category entries remain protected from data source access
-   But here too there is an exception, namely for single-value categories: **Manually created single-value category entries can be manipulated by data sources**
-   In the bottom right there is also a prohibited and non-representable case: The data source **"datasource-2"** cannot have a CPU entry in an object that is managed by **"datasource-1"**

## cmdb.external.push.v2

Creation and updating of objects and category entries through a single request.
Additionally, various **"strategies"** allow us to represent different use cases, although it should be mentioned that these are only located at the category layer.

Furthermore, the Push API also has procedures to convert human-readable values into their technical representation, for example Dialog+, object references or category references.
And most importantly:

!!! note "By using the Push API, you do not have to forgo general CMDB structures, such as the permission system, validation rules or the logbook. Everything works as before!"

| Strategy      | entry exists single-value      | entry exists multi-value       | entry does not exist single-value | entry does not exist multi-value |
| ------------- | ----------------------------------- | ----------------------------------- | ------------------------------------ | ----------------------------------- |
| **create**    | :material-close: is skipped  | :material-close: is skipped  | :material-plus: is created        | :material-plus: is created       |
| **update**    | :material-pencil: is updated | :material-pencil: is updated | :material-plus: is created        | :material-plus: is created       |
| **overwrite** | :material-pencil: is updated | :material-pencil: is updated | :material-plus: is created        | :material-plus: is created       |

!!! warning "**overwrite** deletes all multi-value entries from i-doit that are not included in the request. Existing ones are updated or created."

### Request parameters

| Key         | JSON data type | Required | Description                                      |
| ----------- | -------------- | -------- | ------------------------------------------------ |
| **extType** | String         | Yes      | Data source, for example: **datasource-1**     |
| **extId**   | String         | Yes      | Object, for example: **windows-server100**      |
| **class**   | String         | Yes      | Object type, for example: **C__OBJTYPE__SERVER**  |
| **title**   | String         | Yes      | Object title, for example: **Server 100** |
| **data**    | Object         | Yes      | Category data, keyed by category constant (see the examples below) |

### Example

=== "Request"

    ```json
    {
        "jsonrpc": "2.0",
        "id": 1,
        "method": "cmdb.external.push.v2",
        "params": {
            "apikey": "xxx",
            "extType": "datasource-1",
            "extId": "windows-server100",
            "class": "C__OBJTYPE__SERVER",
            "title": "Server 100",
            "data": {
                "C__CATG__CPU": {
                    "strategy": "create",
                    "data": {
                        "intel-1": {
                            "title": "5th Generation Intel® Xeon® Scalable Processors #1",
                            "manufacturer": "Intel",
                            "cores": 52,
                            "type": "8571N",
                            "frequency": "2.4",
                            "frequency_unit": "GHz"
                        },
                        "intel-2":{
                            "title": "5th Generation Intel® Xeon® Scalable Processors #2",
                            "manufacturer": "Intel",
                            "cores": 52,
                            "type": "8571N",
                            "frequency": "2.4",
                            "frequency_unit": "GHz"
                        }
                    }
                },
                    "C__CATG__GLOBAL": {
                        "strategy": "update",
                        "data": {
                            "windows-server1001_TAGS": {
                                "tag": [
                                    "server",
                                    "monitoring",
                                    "api2.0"
                                ],
                                "purpose": "Doku",
                                "type": "C__OBJTYPE__SERVER"
                            }
                        }
                    },
                    "C__CATG__LOCATION": {
                        "strategy": "create",
                        "data": {
                            "CITY_OBJECT_DUESSELDORF": {
                                "parent": {
                                    "title": "Düsseldorf",
                                    "class": "C__OBJTYPE__CITY",
                                    "extType": "datasource-1",
                                    "extId": "CITY_OBJECT_DUESSELDORF"
                            }
                        }
                    }
                }
            }
        }
    }
    ```

=== "Response"

    ```json
    {
        "id": 1,
        "jsonrpc": "2.0",
        "result": {
            "messages": [
                {
                    "message": "External id datasource-1/windows-server100 not found. Object with id 770 created.",
                    "level": 200,
                    "datetime": "2024-04-09T15:53:56.134886+02:00"
                },
                {
                    "message": "Preparing data for category 'CPU' using strategy create.",
                    "level": 200,
                    "datetime": "2024-04-09T15:53:56.135378+02:00"
                },
                {
                    "message": "Handling multi value category.",
                    "level": 100,
                    "datetime": "2024-04-09T15:53:56.135431+02:00"
                },
                {
                    "message": "New category entry 104 created for custom id intel-1.",
                    "level": 200,
                    "datetime": "2024-04-09T15:53:56.138370+02:00"
                },
                {
                    "message":"Original: {\"title\":\"5th Generation Intel\® Xeon\® Scalable Processors #1\",\"manufacturer\":\"Intel\",\"cores\":52,\"type\":\"8571N\",\"frequency\":\"2.4\",\"frequency_unit\":\"GHz\"}",
                    "level": 100,
                    "datetime": "2024-04-09T15:53:56.139098+02:00"
                },
                {
                    "message":"Normalized: {\"title\":\"5th Generation Intel\® Xeon\® Scalable Processors #1\",\"manufacturer\":2,\"type\":33,\"frequency\":\"2.4\",\"frequency_unit\":3,\"cores\":52}",
                    "level": 100,
                    "datetime": "2024-04-09T15:53:56.144378+02:00"
                },
                {
                    "message":"Final: {\"data_id\":104,\"properties\":{\"title\":{\"value\":\"5th Generation Intel\® Xeon\® Scalable Processors #1\"},\"manufacturer\":{\"value\":2},\"type\":{\"value\":33},\"frequency\":{\"value\":\"2.4\"},\"frequency_unit\":{\"value\":3},\"cores\":{\"value\":52},\"description\":{\"value\":null}}}",
                    "level": 100,
                    "datetime": "2024-04-09T15:53:56.145200+02:00"
                },
                {
                    "message": "New category entry 105 created for custom id intel-2.",
                    "level": 200,
                    "datetime": "2024-04-09T15:53:56.146411+02:00"
                },
                {
                    "message":"Original: {\"title\":\"5th Generation Intel\® Xeon\® Scalable Processors #2\",\"manufacturer\":\"Intel\",\"cores\":52,\"type\":\"8571N\",\"frequency\":\"2.4\",\"frequency_unit\":\"GHz\"}",
                    "level": 100,
                    "datetime": "2024-04-09T15:53:56.147024+02:00"
                },
                {
                    "message":"Normalized: {\"title\":\"5th Generation Intel\® Xeon\® Scalable Processors #2\",\"manufacturer\":2,\"type\":33,\"frequency\":\"2.4\",\"frequency_unit\":3,\"cores\":52}",
                    "level": 100,
                    "datetime": "2024-04-09T15:53:56.147884+02:00"
                },
                {
                    "message":"Final: {\"data_id\":105,\"properties\":{\"title\":{\"value\":\"5th Generation Intel\® Xeon\® Scalable Processors #2\"},\"manufacturer\":{\"value\":2},\"type\":{\"value\":33},\"frequency\":{\"value\":\"2.4\"},\"frequency_unit\":{\"value\":3},\"cores\":{\"value\":52},\"description\":{\"value\":null}}}",
                    "level": 100,
                    "datetime": "2024-04-09T15:53:56.148551+02:00"
                },
                {
                    "message": "Preparing data for category 'General' using strategy update.",
                    "level": 200,
                    "datetime": "2024-04-09T15:53:56.148807+02:00"
                },
                {
                    "message": "Handling single value category.",
                    "level": 100,
                    "datetime": "2024-04-09T15:53:56.148844+02:00"
                },
                {
                    "message": "New external id windows-server1001_TAGS reference created for category entry id 768.",
                    "level": 200,
                    "datetime": "2024-04-09T15:53:56.150471+02:00"
                },
                {
                    "message": "Original: {\"tag\":[\"server\",\"monitoring\",\"api2.0\"],\"purpose\":\"Doku\",\"type\":\"C__OBJTYPE__SERVER\"}",
                    "level": 100,
                    "datetime": "2024-04-09T15:53:56.150502+02:00"
                },
                {
                    "message": "Normalized: {\"purpose\":5,\"type\":\"C__OBJTYPE__SERVER\",\"tag\":[1,4,8]}",
                    "level": 100,
                    "datetime": "2024-04-09T15:53:56.153905+02:00"
                },
                {
                    "message": "Final: {\"data_id\":768,\"properties\":{\"purpose\":{\"value\":5},\"type\":{\"value\":\"C__OBJTYPE__SERVER\"},\"tag\":{\"value\":[1,4,8]},\"title\":{\"value\":\"Server 100\"},\"status\":{\"value\":\"2\"},\"created\":{\"value\":\"2024-04-09 15:53:56\"},\"created_by\":{\"value\":\"admin\"},\"changed_by\":{\"value\":\"admin\"},\"category\":{\"value\":null},\"sysid\":{\"value\":\"SYSID_1712671606\"},\"cmdb_status\":{\"value\":\"6\"},\"description\":{\"value\":null}}}",
                    "level": 100,
                    "datetime": "2024-04-09T15:53:56.156163+02:00"
                },
                {
                    "message": "Preparing data for category 'Location' using strategy create.",
                    "level": 200,
                    "datetime": "2024-04-09T15:53:56.156514+02:00"
                },
                {
                    "message": "Handling single value category.",
                    "level": 100,
                    "datetime": "2024-04-09T15:53:56.156542+02:00"
                },
                {
                    "message": "New category entry 167 created for custom id CITY_OBJECT_DUESSELDORF.",
                    "level": 200,
                    "datetime": "2024-04-09T15:53:56.159102+02:00"
                },
                {
                    "message":"Original: {\"parent\":{\"title\":\"D\üsseldorf\",\"class\":\"C__OBJTYPE__CITY\",\"extType\":\"datasource-1\",\"extId\":\"CITY_OBJECT_DUESSELDORF\"}}",
                    "level": 100,
                    "datetime": "2024-04-09T15:53:56.159744+02:00"
                },
                {
                    "message": "Normalized: {\"parent\":771}",
                    "level": 100,
                    "datetime": "2024-04-09T15:53:56.169216+02:00"
                },
                {
                    "message": "Final: {\"data_id\":167,\"properties\":{\"parent\":{\"value\":771},\"option\":{\"value\":null},\"insertion\":{\"value\":null},\"pos\":{\"value\":null},\"snmp_syslocation\":{\"value\":null},\"description\":{\"value\":null}}}",
                    "level": 100,
                    "datetime": "2024-04-09T15:53:56.174171+02:00"
                },
                {
                    "message": "Sync C__CATG__CPU in object 770 with import status 2.",
                    "level": 200,
                    "datetime": "2024-04-09T15:53:56.175085+02:00"
                },
                {
                    "message": "Sync C__CATG__CPU in object 770 with import status 2.",
                    "level": 200,
                    "datetime": "2024-04-09T15:53:56.176118+02:00"
                },
                {
                    "message": "Sync C__CATG__GLOBAL in object 770 with import status 2.",
                    "level": 200,
                    "datetime": "2024-04-09T15:53:56.176866+02:00"
                },
                {
                    "message": "Sync C__CATG__LOCATION in object 770 with import status 2.",
                    "level": 200,
                    "datetime": "2024-04-09T15:53:56.185615+02:00"
                }
            ],
            "success": true
        }
    }
    ```

## cmdb.external.pull.v2

Reading CMDB data based on the "External Identifier".
With pull, the External Identifier determines the queried data, for example:

| extType                                          | extId             | Action                                           |
| ------------------------------------------------ | ----------------- | ------------------------------------------------ |
| datasource-1                                    | null              | Reads all objects and all category data   |
| datasource-1                                    | windows-server100 | Reads windows100 and all category data     |
| datasource-1 / windows-server100 / C__CATG__CPU | null              | Reads windows100 and all CPU entries           |
| datasource-1 / windows-server100 / C__CATG__CPU | intel-1           | Reads windows100 and only the CPU entry intel-1 |

### Request parameters

| Key         | JSON data type | Required | Description                                  |
| ----------- | -------------- | -------- | -------------------------------------------- |
| **extType** | String         | Yes      | Data source, for example: **datasource-1** |
| **extId**   | String         | No       | Object, for example: **windows-server100**. If omitted, all objects of the data source are read |

### Example

=== "Request"

    ```json
    {
        "jsonrpc": "2.0",
        "id": 1,
        "method": "cmdb.external.pull.v2",
        "params": {
            "apikey": "xxx",
            "extType": "datasource-1",
            "extId": "windows-server100"
        }
    }
    ```

=== "Response"

    ```json
    {
        "id": 1,
        "jsonrpc": "2.0",
        "result": [
            {
                "extId": "windows-server100",
                "extType": "datasource-1",
                "id": 770,
                "title": "Server 100",
                "sysid": "SYSID_1712671606",
                "objecttype": 5,
                "type_title": "Server",
                "type_icon": "images/axialis/hardware-network/server-single.svg",
                "status": 0,
                "cmdb_status": 0,
                "data": {
                    "C__CATG__CPU": [
                        {
                            "extId": "intel-1",
                            "extType": "datasource-1/windows-server100/C__CATG__CPU",
                            "id": "104",
                            "objID": "770",
                            "title": "5th Generation Intel® Xeon® Scalable Processors #1",
                            "manufacturer": {
                                "id": "2",
                                "title": "Intel",
                                "const": null,
                                "title_lang": "Intel"
                            },
                            "type": {
                                "id": "33",
                                "title": "8571N",
                                "const": null,
                                "title_lang": "8571N"
                            },
                            "frequency": {
                                "title": 2.4
                            },
                            "frequency_unit": {
                                "id": "3",
                                "title": "GHz",
                                "const": "C__FREQUENCY_UNIT__GHZ",
                                "title_lang": "GHz"
                            },
                            "cores": "52",
                            "description": ""
                        },
                        {
                            "extId": "intel-2",
                            "extType": "datasource-1/windows-server100/C__CATG__CPU",
                            "id": "104",
                            "objID": "770",
                            "title": "5th Generation Intel® Xeon® Scalable Processors #1",
                            "manufacturer": {
                                "id": "2",
                                "title": "Intel",
                                "const": null,
                                "title_lang": "Intel"
                            },
                            "type": {
                                "id": "33",
                                "title": "8571N",
                                "const": null,
                                "title_lang": "8571N"
                            },
                            "frequency": {
                                "title": 2.4
                            },
                            "frequency_unit": {
                                "id": "3",
                                "title": "GHz",
                                "const": "C__FREQUENCY_UNIT__GHZ",
                                "title_lang": "GHz"
                            },
                            "cores": "52",
                            "description": ""
                        }
                    ],
                    "C__CATG__GLOBAL": [
                        {
                            "extId": "windows-server1001_TAGS",
                            "extType": "datasource-1/windows-server100/C__CATG__GLOBAL",
                            "id": "770",
                            "objID": "770",
                            "title": "Server 100",
                            "status": {
                                "id": "2",
                                "title": "Normal",
                                "const": "",
                                "title_lang": "LC__CMDB__RECORD_STATUS__NORMAL"
                            },
                            "created": "2024-04-09 15:53:56",
                            "created_by": "admin",
                            "changed": "2024-04-09 15:53:56",
                            "changed_by": "admin",
                            "purpose": {
                                "id": "5",
                                "title": "Doku",
                                "const": null,
                                "title_lang": "Doku"
                            },
                            "category": null,
                            "sysid": "SYSID_1712671606",
                            "cmdb_status": {
                                "id": "6",
                                "title": "in operation",
                                "const": "C__CMDB_STATUS__IN_OPERATION",
                                "title_lang": "LC__CMDB_STATUS__IN_OPERATION"
                            },
                            "type": {
                                "id": "5",
                                "title": "Server",
                                "const": "C__OBJTYPE__SERVER",
                                "title_lang": "LC__CMDB__OBJTYPE__SERVER"
                            },
                            "tag": [
                                {
                                    "id": "1",
                                    "title": "server"
                                },
                                {
                                    "id": "4",
                                    "title": "monitoring"
                                },
                                {
                                    "id": "8",
                                    "title": "api2.0"
                                }
                            ],
                            "description": ""
                        }
                    ],
                    "C__CATG__LOCATION": [
                        {
                            "extId": "CITY_OBJECT_DUESSELDORF",
                            "extType": "datasource-1/windows-server100/C__CATG__LOCATION",
                            "id": "167",
                            "objID": "770",
                            "location_path": "771",
                            "parent": {
                                "id": "771",
                                "title": "Düsseldorf",
                                "sysid": "SYSID_1712671607",
                                "type": "C__OBJTYPE__CITY",
                                "type_title": "City",
                                "location_path": "Düsseldorf"
                            },
                            "option": null,
                            "insertion": null,
                            "pos": null,
                            "gps": {
                                "0": null,
                                "1": null,
                                "latitude": null,
                                "longitude": null
                            },
                            "latitude": null,
                            "longitude": null,
                            "snmp_syslocation": "",
                            "description": ""
                        }
                    ]
                }
            }
        ]
    }
    ```

## Use cases

The following examples follow a typical flow: an external system (here `datasource-1`) keeps its own IDs and mirrors data into i-doit. Note that `objectId` is a number without quotes, and the JSON-RPC `id` field belongs at the top level of the request, not inside `params`.

### Connect an existing object to an external identifier

You already have the object in i-doit and want to tie it to the ID from your external system, so you can add data to it later. This is done with `cmdb.external.link.v2`.

| Key          | JSON data type | Required | Description                                       |
| ------------ | -------------- | -------- | ------------------------------------------------- |
| **extType**  | String         | Yes      | Data source, for example: **datasource-1**        |
| **extId**    | String         | Yes      | External identifier for the object, for example: **windows-server100** |
| **objectId** | Number         | Yes      | Internal ID of the existing i-doit object, for example: **770** |

??? example "cmdb.external.link.v2"

    **Request**
    ```json
    {
        "jsonrpc": "2.0",
        "id": 1,
        "method": "cmdb.external.link.v2",
        "params": {
            "apikey": "xxx",
            "extType": "datasource-1",
            "extId": "windows-server100",
            "objectId": 770
        }
    }
    ```
    **Response**
    ```json
    {
        "id": 1,
        "jsonrpc": "2.0",
        "result": {
            "success": true
        }
    }
    ```

    If the object is already connected to this identifier, you get `success: true` together with the message `External identifier is already linked to given object.`. That response already confirms the mapping, so you do not need a separate pull to check it.

### Add data to a connected object

The object is connected, now you write data from your external system into one of its categories. Under `data`, each category holds one identifier per entry, and the actual fields sit below that identifier.

??? example "cmdb.external.push.v2 (one category)"

    **Request**
    ```json
    {
        "jsonrpc": "2.0",
        "id": 1,
        "method": "cmdb.external.push.v2",
        "params": {
            "apikey": "xxx",
            "extType": "datasource-1",
            "extId": "windows-server100",
            "class": "C__OBJTYPE__SERVER",
            "title": "Server 100",
            "data": {
                "C__CATG__MODEL": {
                    "strategy": "create",
                    "data": {
                        "model-1": {
                            "manufacturer": "Dell",
                            "title": "PowerEdge R760"
                        }
                    }
                }
            }
        }
    }
    ```
    **Response**
    ```json
    {
        "id": 1,
        "jsonrpc": "2.0",
        "result": {
            "messages": [
                {
                    "message": "Object for external id datasource-1/windows-server100 found: 770",
                    "level": 200,
                    "datetime": "2024-04-09T15:53:56.134886+02:00"
                },
                {
                    "message": "Preparing data for category 'Model' using strategy create.",
                    "level": 200,
                    "datetime": "2024-04-09T15:53:56.135378+02:00"
                }
            ],
            "success": true
        }
    }
    ```

### Create an object and fill it in one call

The object does not exist yet, so you create it and fill it in a single `cmdb.external.push.v2` call. The object level (`extType`, `extId`, `title`, `class`) and the category level (`data`) are sent together.

??? example "cmdb.external.push.v2 (create object)"

    **Request**
    ```json
    {
        "jsonrpc": "2.0",
        "id": 1,
        "method": "cmdb.external.push.v2",
        "params": {
            "apikey": "xxx",
            "extType": "datasource-1",
            "extId": "windows-server200",
            "class": "C__OBJTYPE__SERVER",
            "title": "Server 200",
            "data": {
                "C__CATG__CPU": {
                    "strategy": "create",
                    "data": {
                        "intel-1": {
                            "title": "Intel Core i9 3.5GHz #1",
                            "manufacturer": "Intel",
                            "type": "Core i9",
                            "frequency": "3.5",
                            "frequency_unit": "GHz"
                        }
                    }
                }
            }
        }
    }
    ```
    **Response**
    ```json
    {
        "id": 1,
        "jsonrpc": "2.0",
        "result": {
            "messages": [
                {
                    "message": "External id datasource-1/windows-server200 not found. Object with id 771 created.",
                    "level": 200,
                    "datetime": "2024-04-09T15:53:56.134886+02:00"
                },
                {
                    "message": "New category entry 106 created for custom id intel-1.",
                    "level": 200,
                    "datetime": "2024-04-09T15:53:56.138370+02:00"
                }
            ],
            "success": true
        }
    }
    ```

### Look up what is connected to an identifier

You want to see what is behind an identifier and how its data looks. `cmdb.external.pull.v2` reads by identifier, and how much you get back depends on which part of the identifier you send:

| extType                                          | extId             | Reads                                            |
| ------------------------------------------------ | ----------------- | ------------------------------------------------ |
| datasource-1                                    | null              | all objects and all category data                |
| datasource-1                                    | windows-server100 | that object and all its category data            |
| datasource-1 / windows-server100 / C__CATG__CPU | null              | that object and all CPU entries                  |
| datasource-1 / windows-server100 / C__CATG__CPU | intel-1           | that object and only the CPU entry intel-1        |

??? example "cmdb.external.pull.v2"

    **Request**
    ```json
    {
        "jsonrpc": "2.0",
        "id": 1,
        "method": "cmdb.external.pull.v2",
        "params": {
            "apikey": "xxx",
            "extType": "datasource-1",
            "extId": "windows-server100"
        }
    }
    ```
    **Response**
    ```json
    {
        "id": 1,
        "jsonrpc": "2.0",
        "result": [
            {
                "extId": "windows-server100",
                "extType": "datasource-1",
                "id": 770,
                "title": "Server 100",
                "sysid": "SYSID_1712671606",
                "objecttype": 5,
                "type_title": "Server",
                "status": 2,
                "cmdb_status": 6,
                "data": {
                    "C__CATG__MODEL": [
                        {
                            "extId": "model-1",
                            "extType": "datasource-1/windows-server100/C__CATG__MODEL",
                            "id": "104",
                            "objID": "770",
                            "manufacturer": {
                                "id": "2",
                                "title": "Dell"
                            },
                            "title": "PowerEdge R760"
                        }
                    ]
                }
            }
        ]
    }
    ```
