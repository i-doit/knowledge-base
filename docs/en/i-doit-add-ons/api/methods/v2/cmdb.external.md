---
title: external
description: cmdb.external endpoint
icon: material/api
status: new
lang: en
---

# cmdb.external

The integration of external data sources into the Configuration Management Database (CMDB) can be simplified by various measures. First of all, it is important that the data is available in a standardized, easy-to-process format to make it easier to read and transfer to the CMDB. In addition, functions should be implemented that enable a complete, one-time data transfer as well as regular, automated synchronizations. It is crucial that each data element in the CMDB is linked to its origin in order to ensure the identifiability of the data sources. At the same time, clear rules and guidelines must be defined in order to delimit the scope of the data from the individual sources. The simultaneous integration of multiple data sources should also be supported, whereby conflicts and inconsistencies must be recognized and resolved. Finally, single-request operations should be implemented to allow users to perform data imports, synchronizations and queries through a single interface to increase usability and efficiency.

## cmdb.external

### What are external identifiers?

-   User-defined string-based stable and unique IDs
-   Composed of a **"type"** and a **"id"**

For example `my_vendor_id / my_object_id`.

### Why do we need external identifiers?

-   Clear identification of object and category data records
-   Scoping: Completed data areas
-   Caller does not need to know internal record IDs

### How do external identifiers work?

-   Hierarchical approach
-   User defines an external identifier for the object
    -   **extType**: Identifier for the data source/vendor
    -   **extId**: Identifier for the object
-   **User also defines an identifier (without extType) for each category entry**
-   API creates a mapping between identifiers and internal IDs

Examples of this would be:

-   External identifier for an **object**
    -   `data-source-1 / windows-server100`
-   External identifier for each **category entry**
    -   `data-source-1 / windows-server100 / C__CATG__CPU / intel-1`

The object is located on the first level. Here we define the **extType** on the one hand and the **extId** on the other. Both together form the complete identifier and uniquely identify the created object.
On the next level, however, we have our **category level**. Each category starts with the corresponding constant and receives a unique ID on the level below.

From this structure, i-doit then automatically determines the final identifier, illustrated here using the example of **intel-1** and **intel-2**.
Here is an example of a push request to create an object via the new endpoint.

```json
{
    "jsonrpc": "2.0",
    "id": 1,
    "params": {
        ...
        "apikey": "{{API_KEY}}",
        <--- object level
        "extType": "data-source-1",
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

and records the whole thing in an internal mapping table.

### Scoping

Scoping should ensure that two data sources do not get in each other's way, as we assume the following:

!!! note "If different data sources feed their data into i-doit at the same time, we assume that each data source is leading in its own right and can be regarded as a single source of truth. Conversely, this means that an object can never appear in several data sources at the same time."

Based on this assumption, i-doit therefore implements the following safety net:

-   Objects are clearly assigned to data sources
    -   An object can only be assigned to one data source
        -   A data source object cannot be managed by multiple data sources
    -   A further refinement: Existing objects cannot be manually assigned to a data source

We have similar handling at **category level**:

-   Clear assignment of category entries to data sources
-   A special feature of MV: **MV entries can be edited manually even if they come from a data source**
-   The other way round, however, i.e. manually created multi-value category entries remain protected from access by the data source
-   But there is also an exception here, namely for single-value categories: **Manually created single-value category entries can be manipulated by data sources**
-   There is also an unauthorized and unmappable case: The data source **"data-source-2"** cannot have a CPU entry in an object that is managed by **"data-source-1"**

## cmdb.external.push.v2

Creation and updating of objects and category entries by a single request.
In addition, various **"strategies "** allow us to map different use cases, although it should be mentioned that these are only located on the category layer.

The Push API also has procedures for converting human-readable values into their technical representation, for example dialog+, object references or category references.
And very importantly:

!!! note "By using the Push API, you do not have to do without general CMDB structures, such as the rights system, validation rule or logbook. Everything works as before!"

| Strategy | Entry exists single-value | Entry exists multi-value | Entry does not exist single-value | Entry does not exist multi-value |
| --- | --- | --- | --- | --- |
| **create** | :material-close: will be skipped | :material-close: will be skipped | :material-plus: is created | :material-plus: is created |
| **update** | :material-pencil: will be updated | :material-pencil: will be updated | :material-plus: is created | :material-plus: is created |
| **overwrite** | :material-pencil: will be updated | :material-pencil: will be updated | :material-plus: is created | :material-plus: is created |

!!! warning "**overwrite** deletes all multi-value entries from i-doit that are not included in the request. Existing ones are updated or created"

### Request parameters

| Key | JSON data type | Required | Description |
| --- | --- | --- | --- |
| **extType** | String | Yes | Data source, for example: **data-source-1** |
| **extId** | String | Yes | Object, for example: **windows-server100** |
| **class** | String | Yes | Object type, for example: **C__OBJTYPE__SERVER** |
| **title** | String | Yes | Object designation, for example: **Server 100** |

### Example

=== "Request"

    ```json
    {
        "jsonrpc": "2.0",
        "id": 1,
        "method": "cmdb.external.push.v2",
        "params": {
            "apikey": "a9d55pg9yts88488",
            "extType": "data-source-1",
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
                                "purpose": "Docu",
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
                                    "extType": "data-source-1",
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
                    "message": "External id data-source-1/windows-server100 not found. Object with id 774 created.",
                    "level": 200,
                    "datetime": "2024-04-10T09:46:11.173494+02:00"
                },
                {
                    "message": "Preparing data for category 'CPU' using strategy create.",
                    "level": 200,
                    "datetime": "2024-04-10T09:46:11.173921+02:00"
                },
                {
                    "message": "Handling multi value category.",
                    "level": 100,
                    "datetime": "2024-04-10T09:46:11.173966+02:00"
                },
                {
                    "message": "New category entry 106 created for custom id intel-1.",
                    "level": 200,
                    "datetime": "2024-04-10T09:46:11.176969+02:00"
                },
                {
                    "message":"Original: {\"title\":\"5th Generation Intel\® Xeon\® Scalable Processors #1\",\"manufacturer\":\"Intel\",\"cores\":52,\"type\":\"8571N\",\"frequency\":\"2.4\",\"frequency_unit\":\"GHz\"}",
                    "level": 100,
                    "datetime": "2024-04-10T09:46:11.177588+02:00"
                },
                {
                    "message":"Normalized: {\"title\":\"5th Generation Intel\® Xeon\® Scalable Processors #1\",\"manufacturer\":2,\"type\":33,\"frequency\":\"2.4\",\"frequency_unit\":3,\"cores\":52}",
                    "level": 100,
                    "datetime": "2024-04-10T09:46:11.186125+02:00"
                },
                {
                    "message":"Final: {\"data_id\":106,\"properties\":{\"title\":{\"value\":\"5th Generation Intel\® Xeon\® Scalable Processors #1\"},\"manufacturer\":{\"value\":2},\"type\":{\"value\":33},\"frequency\":{\"value\":\"2.4\"},\"frequency_unit\":{\"value\":3},\"cores\":{\"value\":52},\"description\":{\"value\":null}}}",
                    "level": 100,
                    "datetime": "2024-04-10T09:46:11.186740+02:00"
                },
                {
                    "message": "New category entry 107 created for custom id intel-2.",
                    "level": 200,
                    "datetime": "2024-04-10T09:46:11.187859+02:00"
                },
                {
                    "message":"Original: {\"title\":\"5th Generation Intel\® Xeon\® Scalable Processors #2\",\"manufacturer\":\"Intel\",\"cores\":52,\"type\":\"8571N\",\"frequency\":\"2.4\",\"frequency_unit\":\"GHz\"}",
                    "level": 100,
                    "datetime": "2024-04-10T09:46:11.188443+02:00"
                },
                {
                    "message":"Normalized: {\"title\":\"5th Generation Intel\® Xeon\® Scalable Processors #2\",\"manufacturer\":2,\"type\":33,\"frequency\":\"2.4\",\"frequency_unit\":3,\"cores\":52}",
                    "level": 100,
                    "datetime": "2024-04-10T09:46:11.189215+02:00"
                },
                {
                    "message":"Final: {\"data_id\":107,\"properties\":{\"title\":{\"value\":\"5th Generation Intel\® Xeon\® Scalable Processors #2\"},\"manufacturer\":{\"value\":2},\"type\":{\"value\":33},\"frequency\":{\"value\":\"2.4\"},\"frequency_unit\":{\"value\":3},\"cores\":{\"value\":52},\"description\":{\"value\":null}}}",
                    "level": 100,
                    "datetime": "2024-04-10T09:46:11.189833+02:00"
                },
                {
                    "message": "Preparing data for category 'General' using strategy update.",
                    "level": 200,
                    "datetime": "2024-04-10T09:46:11.190074+02:00"
                },
                {
                    "message": "Handling single value category.",
                    "level": 100,
                    "datetime": "2024-04-10T09:46:11.190100+02:00"
                },
                {
                    "message": "New external id windows-server1001_TAGS reference created for category entry id 772.",
                    "level": 200,
                    "datetime": "2024-04-10T09:46:11.192059+02:00"
                },
                {
                    "message": "Original: {\"tag\":[\"server\",\"monitoring\",\"api2.0\"],\"purpose\":\"Docu\",\"type\":\"C__OBJTYPE__SERVER\"}",
                    "level": 100,
                    "datetime": "2024-04-10T09:46:11.192087+02:00"
                },
                {
                    "message": "Normalized: {\"purpose\":6,\"type\":\"C__OBJTYPE__SERVER\",\"tag\":[1,4,8]}",
                    "level": 100,
                    "datetime": "2024-04-10T09:46:11.197526+02:00"
                },
                {
                    "message": "Final: {\"data_id\":772,\"properties\":{\"purpose\":{\"value\":6},\"type\":{\"value\":\"C__OBJTYPE__SERVER\"},\"tag\":{\"value\":[1,4,8]},\"title\":{\"value\":\"Server 100\"},\"status\":{\"value\":\"2\"},\"created\":{\"value\":\"2024-04-10 09:46:11\"},\"created_by\":{\"value\":\"admin\"},\"changed_by\":{\"value\":\"admin\"},\"category\":{\"value\":null},\"sysid\":{\"value\":\"SYSID_1712735945\"},\"cmdb_status\":{\"value\":\"6\"},\"description\":{\"value\":null}}}",
                    "level": 100,
                    "datetime": "2024-04-10T09:46:11.200155+02:00"
                },
                {
                    "message": "Preparing data for category 'Location' using strategy create.",
                    "level": 200,
                    "datetime": "2024-04-10T09:46:11.200479+02:00"
                },
                {
                    "message": "Handling single value category.",
                    "level": 100,
                    "datetime": "2024-04-10T09:46:11.200505+02:00"
                },
                {
                    "message": "New category entry 168 created for custom id CITY_OBJECT_DUESSELDORF.",
                    "level": 200,
                    "datetime": "2024-04-10T09:46:11.209471+02:00"
                },
                {
                    "message":"Original: {\"parent\":{\"title\":\"D\üsseldorf\",\"class\":\"C__OBJTYPE__CITY\",\"extType\":\"data-source-1\",\"extId\":\"CITY_OBJECT_DUESSELDORF\"}}",
                    "level": 100,
                    "datetime": "2024-04-10T09:46:11.210140+02:00"
                },
                {
                    "message": "Normalized: {\"parent\":775}",
                    "level": 100,
                    "datetime": "2024-04-10T09:46:11.217953+02:00"
                },
                {
                    "message": "Final: {\"data_id\":168,\"properties\":{\"parent\":{\"value\":775},\"option\":{\"value\":null},\"insertion\":{\"value\":null},\"pos\":{\"value\":null},\"snmp_syslocation\":{\"value\":null},\"description\":{\"value\":null}}}",
                    "level": 100,
                    "datetime": "2024-04-10T09:46:11.221995+02:00"
                },
                {
                    "message": "Sync C__CATG__CPU in object 774 with import status 2.",
                    "level": 200,
                    "datetime": "2024-04-10T09:46:11.222853+02:00"
                },
                {
                    "message": "Sync C__CATG__CPU in object 774 with import status 2.",
                    "level": 200,
                    "datetime": "2024-04-10T09:46:11.223711+02:00"
                },
                {
                    "message": "Sync C__CATG__GLOBAL in object 774 with import status 2.",
                    "level": 200,
                    "datetime": "2024-04-10T09:46:11.224330+02:00"
                },
                {
                    "message": "Sync C__CATG__LOCATION in object 774 with import status 2.",
                    "level": 200,
                    "datetime": "2024-04-10T09:46:11.230300+02:00"
                }
            ],
            "success": true
        }
    }
    ```

## cmdb.external.pull.v2

Reading CMDB data based on the **"External Identifier"**.
When pulling, the external identifier determines the queried data, for example:

| extType | extId | Aktion |
| --- | --- | --- |
| data-source-1 | null | Reads all objects and any category data |
| data-source-1 | windows-server100 | Reads windows100 and any category data |
| data-source-1 / windows-server100 / C__CATG__CPU | null | Reads windows100 and all CPU entries |
| data-source-1 / windows-server100 / C__CATG__CPU | intel-1 | Reads windows100 and only the CPU entry intel-1 |

### Request parameters

| Key | JSON data type | Required | Description |
| --- | --- | --- | --- |
| **extType** | String | Yes | Data source, for example: **data-source-1** |
| **extId** | String | Yes | Object, for example: **windows-server100** |

### Example

=== "Request"

    ```json
    {
        "jsonrpc": "2.0",
        "id": 1,
        "method": "cmdb.external.pull.v2",
        "params": {
            "apikey": "a9d55pg9yts88488",
            "extType": "data-source-1",
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
                "extType": "data-source-1",
                "id": 780,
                "title": "Server 100",
                "sysid": "SYSID_1712739589",
                "objecttype": 5,
                "type_title": "Server",
                "type_icon": "images/axialis/hardware-network/server-single.svg",
                "status": 0,
                "cmdb_status": 0,
                "data": {
                    "C__CATG__CPU": [
                        {
                            "extId": "intel-1",
                            "extType": "data-source-1/windows-server100/C__CATG__CPU",
                            "id": "110",
                            "objID": "780",
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
                            "extType": "data-source-1/windows-server100/C__CATG__CPU",
                            "id": "110",
                            "objID": "780",
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
                            "extType": "data-source-1/windows-server100/C__CATG__GLOBAL",
                            "id": "780",
                            "objID": "780",
                            "title": "Server 100",
                            "status": {
                                "id": "2",
                                "title": "Normal",
                                "const": "",
                                "title_lang": "LC__CMDB__RECORD_STATUS__NORMAL"
                            },
                            "created": "2024-04-10 10:46:49",
                            "created_by": "admin",
                            "changed": "2024-04-10 10:46:49",
                            "changed_by": "admin",
                            "purpose": {
                                "id": "6",
                                "title": "Docu",
                                "const": null,
                                "title_lang": "Docu"
                            },
                            "category": null,
                            "sysid": "SYSID_1712739589",
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
                            "extType": "data-source-1/windows-server100/C__CATG__LOCATION",
                            "id": "170",
                            "objID": "780",
                            "location_path": "781",
                            "parent": {
                                "id": "781",
                                "title": "Düsseldorf",
                                "sysid": "SYSID_1712739590",
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
