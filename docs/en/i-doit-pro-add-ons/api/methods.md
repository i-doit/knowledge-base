
# Methods

In this article we explain the [i-doit JSON-RPC API](./index.md) in depth. If you want to know what parameters must/can be set for each method and what a typical response looks like, this will be the right resource.

Namespace [idoit]
-----------------

This namespace is reserved for common methods.

### idoit.search
??? example "idoit.search"

    [Search](../../efficient-documentation/search.md) in i-doit

    Request parameters

    | Key | JSON data typ | Required | Description |
    | --- | --- | --- | --- |
    | **q** | String | Yes | Query, for example: **"My little server"** |

    Response

    JSON key **result** contains an array of JSON objects. Each object contains a search result.

    | Key | JSON data type | Description |
    | --- | --- | --- |
    | **documentID** | String | Identifier |
    | **key** | String | Attribute which relates to query |
    | **value** | String | Value which relates to query |
    | **type** | String | [Add-on](../index.md) or core feature |
    | **link** | String | Relative URL which directly links to search result |
    | **score** | Integer | Scoring (deprecated) |

    Example

    **Request**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "idoit.search",
        "params": {
            "q": "My little server",
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```
    **Response**
    <br>Body:
    ```
    {
        "jsonrpc": "2.0",
        "result": [
            {
                "documentId": "1000",
                "key": "Virtual Host > Global > Title",
                "value": "My little server",
                "type": "cmdb",
                "link": "/?objID=1000&catgID=1&cateID=1029&highlight=My%20little%20server",
                "score": 0
            },
            […]
        ],
        "id": 1
    }
    ```

### idoit.version
??? example "idoit.version"

    Fetch information about i-doit and the current user

    Request parameters

    None

    Response

    JSON key **result** contains an JSON object with various information about i-doit itself and the current user.

    | Key | JSON data type | Description |
    | --- | --- | --- |
    | **login** | Array | Information about the user who has performed the request; see below for details |
    | **login.userid** | String | Object identifier (as numeric string) |
    | **login.name** | String | Object title |
    | **login.mail** | String | E-mail address (see category **Persons → Master Data**) |
    | **login.username** | String | User name (see category **Persons → Login**) |
    | **login.mandator** | String | Tenant name |
    | **login.language** | String | Language: **"en"** or **"de"** |
    | **version** | String | Version of installed i-doit |
    | **step** | String | Dev, alpha or beta release |
    | **type** | String | Release variant: **"OPEN"** or **"PRO"** |

    Example

    **Request**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "idoit.version",
        "params": {
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```
    **Response**
    <br>Body:
    ```
    {
        "jsonrpc": "2.0",
        "result": {
            "login": {
                "userid": "9",
                "name": "i-doit Systemadministrator ",
                "mail": "i-doit@acme-it.example",
                "username": "admin",
                "mandator": "ACME IT Solutions",
                "language": "en"
            },
            "version": "1.10.2",
            "step": "",
            "type": "PRO"
        },
        "id": 1
    }
    ```

### idoit.constants
??? example "idoit.constants"

    Fetch defined constants from i-doit

    Request parameters

    None

    Response

    JSON key **result** contains a JSON object.

    | Key | JSON data type | Description |
    | --- | --- | --- |
    | **objectTypes** | Object | List of object types<br><br>Keys: object type constants<br><br>Values: translated object type titles |
    | **categories** | Object | List of global and specific categories |
    | **categories.g** | Object | List of global categories<br><br>Keys: category constants<br><br>Values: translated category titles |
    | **categories.s** | Object | List of specific categories<br><br>Keys: category constants<br><br>Values: translated category titles |

    Example

    **Request**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "idoit.constants",
        "params": {
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```
    **Response**
    <br>Body:
    ```
    {
        "jsonrpc": "2.0",
        "result": {
            "objectTypes": {
                "C__OBJTYPE__SERVER": "Server",
                […]
            },
            "categories": {
                "g": {
                    "C__CATG__GLOBAL": "General",
                    "C__CATG__MODEL": "Model",
                    […]
                },
                "s": {
                    "C__CATS__MONITOR": "Monitor",
                    […]
                }
            }
        },
        "id": 1
    }
    ```

### idoit.login
??? example "idoit.login"

    Create new session

    Request parameters

    None

    Response

    JSON key **result** contains a JSON object.

    | Key | JSON data type | Description |
    | --- | --- | --- |
    | **result** | Boolean | Should be **true** |
    | **userid** | String | Object identifier of logged-in user (as numeric string) |
    | **name** | String | Object title of logged-in user |
    | **mail** | String | Attribute **E-mail address** in category **Persons → Master Data** |
    | **username** | String | Attribute **User name** in category **Persons → Login** |
    | **session-id** | String | Generated session identifier |
    | **client-id** | String | Tenant identifier (as numeric string) |
    | **client-name** | String | Tenant name |

    Example

    **Request**
    <br>Header:
    ```
    X-RPC-Auth-Username: admin
    X-RPC-Auth-Password: admin
    ```
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "idoit.login",
        "params": {
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```
    **Response**
    <br>Header:
    ```
    X-RPC-Auth-Session: d1obs9m3d2pd8651grptjhdjg3
    ```
    <br>Body:
    ```
    {
        "jsonrpc": "2.0",
        "result": {
            "result": true,
            "userid": "9",
            "name": "i-doit Systemadministrator ",
            "mail": "i-doit@acme-it.example",
            "username": "admin",
            "session-id": "d1obs9m3d2pd8651grptjhdjg3",
            "client-id": "1",
            "client-name": "ACME IT Solutions"
        },
        "id": 1
    }
    ```
    <br>
    **Request**
    <br>Header:
    ```
    X-RPC-Auth-Session: d1obs9m3d2pd8651grptjhdjg3
    ```
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "idoit.version",
        "params": {
            "apikey": "xxx",
            "language": "en"
        },
        "id": 2
    }
    ```
    **Response**
    <br>Header:
    ```
    X-RPC-Auth-Session: d1obs9m3d2pd8651grptjhdjg3
    ```
    <br>Body:
    ```
    {
        "jsonrpc": "2.0",
        "result": {
            "login": {
                "userid": "9",
                "name": "i-doit Systemadministrator ",
                "mail": "i-doit@acme-it.example",
                "username": "admin",
                "mandator": "ACME IT Solutions",
                "language": "de"
            },
            "version": "1.9",
            "step": "",
            "type": "PRO"
        },
        "id": 2
    }
    ```
    <br>
    **Request**
    <br>Header:
    ```
    X-RPC-Auth-Session: d1obs9m3d2pd8651grptjhdjg3
    ```
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "idoit.logout",
        "params": {
            "apikey": "xxx",
            "language": "en"
        },
        "id": 3
    }
    ```
    **Response**
    <br>Header:
    ```
    X-RPC-Auth-Session: d1obs9m3d2pd8651grptjhdjg3
    ```
    <br>Body:
    ```
    {
        "jsonrpc": "2.0",
        "result": {
            "message": "Logout successfull",
            "result": true
        },
        "id": 3
    }
    ```

### idoit.logout
??? example "idoit.logout"

    Close current session

    Request parameters

    None

    Response

    JSON key **result** contains a JSON object.


    | Key | JSON data type | Description |
    | --- | --- | --- |
    | message | String | Should be **"Logout successfull"** |
    | result | Boolean | Should be **true** |

    Example

    See method **idoit.login**

    Namespace cmdb
    ----------------

    This namespace is related to all CMDB-specific methods like handling objects and categories.

    ### cmdb.object.create

    Create new [object](../../basics/structure-of-the-it-documentation.md) with some optional information

    Request parameters

    | Key | JSON data type | Required | Description |
    | --- | --- | --- | --- |
    | **type** | String\|Integer | Yes | Object type constant as string, for example: **"C__OBJTYPE__SERVER"**<br><br>Alternatively, object type identifier as integer, for example: **5** |
    | **title** | String | Yes | Object title, for example: **"My little server"** |
    | **category** | String | No  | Attribute **Category** in category **Global** |
    | **purpose** | String | No  | Attribute **Purpose** in category Global, for example: **"In production"** |
    | **cmdb_status** | String\|Integer | No  | Attribute **CMDB status** in category **Global** by its constant (string), for example: **"C__CMDB_STATUS__IN_OPERATION"**<br><br>Alternatively, by its identifier (integer), for example: **6** |
    | **description** | String | No  | Attribute **Description** in category **Global** |

    Response

    JSON key **result** contains a JSON object.

    | Key | JSON data type | Description |
    | --- | --- | --- |
    | **id** | String | Object identifier (as numeric string) |
    | **message** | String | Some information |
    | **success** | Boolean | Should always be **true** |

    Example

    **Request**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.object.create",
        "params": {
            "type": "C__OBJTYPE__SERVER",
            "title": "My little server",
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```
    **Response**
    <br>Body:
    ```
    {
        "jsonrpc": "2.0",
        "result": {
            "id": "42",
            "message": "Object was successfully created",
            "success": true
        },
        "id": 1
    }
    ```

### cmdb.object.read
??? example "cmdb.object.read"

    Read common information about an [object](../../basics/structure-of-the-it-documentation.md)

    Request parameters

    | Key | JSON data type | Required | Description |
    | --- | --- | --- | --- |
    | **id** | Integer | Yes | Object identifier; for example: **42** |

    Response

    JSON key **result** contains a JSON object.

    | Key | JSON data type | Description |
    | --- | --- | --- |
    | **id** | String | Object identifier (as numeric string) |
    | **title** | String | Object title |
    | **sysid** | String | SYSID (see category **Global**) |
    | **objecttype** | String | Object type identifier (as numeric string) |
    | **created** | String | Date of creation; format: **Y-m-d H:i:s** |
    | **updated** | String | Date of last update; format: **Y-m-d H:i:s**<br><br>**Note:** This key is optional because not every object has been updated before. |
    | **type_title** | String | Translated name of object type |
    | **type_icon** | String | Relative URL to object type icon |
    | **status** | String | Object status:<br><br>*   **C__RECORD_STATUS__BIRTH  <br>    Status-ID = 1  <br>    Title = **  **Unfinished**  <br>*   **C__RECORD_STATUS__NORMAL  <br>    Status-ID = 2**  <br>    **Title = ** **Normal** <br>*   **C__RECORD_STATUS__ARCHIVED  <br>    Status-ID = 3**  <br>    **Title =**  **Archived** <br>*   **C__RECORD_STATUS__DELETED  <br>    Status-ID = 4**  <br>    **Title =**  **Deleted** <br>*   **C__RECORD_STATUS__TEMPLATE  <br>    Status-ID = 6**  <br>    **Title =**  **Template** <br>*   **C__RECORD_STATUS__MASS_CHANGES_TEMPLATE  <br>    Status-ID = 7**  <br>    **Title =**  **Mass change template**  |
    | **cmdb_status** | String | CMDB status (see category **Global**; as numeric string) |
    | **cmdb_status_title** | String | Translated CMDB status (see category **Global**) |
    | **image** | String | URL to object picture |

    Example

    **Request**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.object.read",
        "params": {
            "id": 1000,
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```
    **Response**
    <br>Body:
    ```
    {
        "jsonrpc": "2.0",
        "result": {
            "id": "1000",
            "title": "ESXi1",
            "sysid": "VHOST_1426338622",
            "objecttype": "58",
            "type_title": "Virtual host",
            "type_icon": "images/icons/silk/server_database.png",
            "status": "2",
            "cmdb_status": "6",
            "cmdb_status_title": "in operation",
            "created": "2015-03-14 14:10:22",
            "updated": "2017-04-26 10:22:20",
            "image": "http://demo.synetics.int/pro/images/objecttypes/server.png"
        },
        "id": 1
    }
    ```

### cmdb.object.update
??? example "cmdb.object.update"

    Change object e.g title of a object

    Request parameters

    | Key | JSON data type | Required | Description |
    | --- | --- | --- | --- |
    | **id** | Integer | Yes | Object identifier, for example: **42** |
    | **title** | String | Yes | New object title, for example: **"Your little server"** |

    Response

    JSON key **result** contains a JSON object.

    | Key | JSON data type | Description |
    | --- | --- | --- |
    | **message** | String | Should be |
    | **success** | Boolean | Should be true |

    Example

    **Request**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.object.update",
        "params": {
            "id": 42,
            "title": "Your little server",
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```
    **Response**
    <br>Body:
    ```
    {
        "jsonrpc": "2.0",
        "result": {
            "message": "Object title was successfully updated",
            "success": true
        },
        "id": 1
    }
    ```

### cmdb.object.delete
??? example "cmdb.object.delete"

    [Deletes](../../basics/life-and-documentation-cycle.md) a object

    Request paramters

    | Key | JSON data type | Required | Description |
    | --- | --- | --- | --- |
    | **id** | Integer | Yes | Object identifier, for example: **42** |
    | **status** | String | Yes | Status constant:<br><br>*   **"C__RECORD_STATUS__ARCHIVED"**: Archive object<br>*   **"C__RECORD_STATUS__DELETED"**: Mark object as deleted<br>*   **"C__RECORD_STATUS__PURGE"**: Purge object from database |

    Response

    JSON key **result** contains a JSON object.

    Example

    **Request**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.object.delete",
        "params": {
            "id": 42,
            "status": "C__RECORD_STATUS__ARCHIVED",
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```
    **Response**
    <br>Body:
    ```
    {
        "jsonrpc": "2.0",
        "result": {
            "message": "Object(s) successfully archived!",
            "success": true
        },
        "id": 1
    }
    ```

### cmdb.object.recycle
??? example "cmdb.object.recycle"

    Recyles a object

    **Request parameters**

    | **Key** | **JSON data type** | **Required** | **Description** |
    | --- | --- | --- | --- |
    | **object** | Integer | Yes | Object identifier, for example: **464** |

    **Response**

    JSON key **result** contains a JSON object.

    | **Key** | **JSON data type** | **Description** |
    | --- | --- | --- |
    | **success** | Boolean | Should be **true** |
    | **message** | String | Some information |

    Example

    **Request**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.object.recycle",
        "params": {
            "object": 464,
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```
    **Response**
    <br>Body:
    ```
    {
        "id": 1,
        "jsonrpc": "2.0",
        "result": {
            "success": true,
            "message": "Object 464 has been recycled."
        }
    }
    ```

### cmdb.object.archive
??? example "cmdb.object.archive"

    [Archives](../../basics/life-and-documentation-cycle.md#archive-category-entries-mark-them-as-deleted-or-purge-them) a object

    **Request parameters**

    | **Key** | **JSON data type** | **Required** | **Description** |
    | --- | --- | --- | --- |
    | **object** | Integer | Yes | Object identifier, for example: **464** |

    **Response**

    JSON key **result** contains a JSON object.

    | **Key** | **JSON data type** | **Description** |
    | --- | --- | --- |
    | **success** | Boolean | Should be **true** |
    | **message** | String | Some information |

    Example

    **Request**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.object.archive",
        "params": {
            "object": 464,
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```
    **Response**
    <br>Body:
    ```
    {
        "id": 1,
        "jsonrpc": "2.0",
        "result": {
            "success": true,
            "message": "Object 464 has been archived."
        }
    }
    ```

### cmdb.object.purge
??? example "cmdb.object.purge"

    [Purges](../../basics/life-and-documentation-cycle.md#archive-category-entries-mark-them-as-deleted-or-purge-them) a object

    **Request parameters**

    | **Key** | **JSON data type** | **Required** | **Description** |
    | --- | --- | --- | --- |
    | **object** | Integer | Yes | Object identifier, for example: **464** |

    **Response**

    JSON key **result** contains a JSON object.

    | **Key** | **JSON data type** | **Description** |
    | --- | --- | --- |
    | **success** | Boolean | Should be **true** |
    | **message** | String | Some information |

    Example

    **Request**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.object.purge",
        "params": {
            "object": 464,
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```
    **Response**
    <br>Body:
    ```
    {
        "id": 1,
        "jsonrpc": "2.0",
        "result": {
            "success": true,
            "message": "Object 464 has been purged."
        }
    }
    ```

### cmdb.object.markAsTemplate
??? example "cmdb.object.markAsTemplate"

    Set the Object condition as a [Template](../../efficient-documentation/templates.md)

    **Request parameters**

    | **Key** | **JSON data type** | **Required** | **Description** |
    | --- | --- | --- | --- |
    | **object** | Integer | Yes | Object identifier, for example: **465** |

    **Response**

    JSON key **result** contains a JSON object.

    | **Key** | **JSON data type** | **Description** |
    | --- | --- | --- |
    | **success** | Boolean | Should be **true** |
    | **message** | String | Some information |

    Example

    **Request**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.object.markAsTemplate",
        "params": {
            "object": 465,
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```
    **Response**
    <br>Body:
    ```
    {
        "id": 1,
        "jsonrpc": "2.0",
        "result": {
            "success": true,
            "message": "Object 465 has been marked as template."
        }
    }
    ```

### cmdb.object.markAsMassChangeTemplate
??? example "cmdb.object.markAsMassChangeTemplate"

    Set the Object condition as a [Mass Change](../../efficient-documentation/mass-change.md) [Template](../../efficient-documentation/templates.md)

    **Request parameters**

    | **Key** | **JSON data type** | **Required** | **Description** |
    | --- | --- | --- | --- |
    | **object** | Integer | Yes | Object identifier, for example: **465** |

    **Response**

    JSON key **result** contains a JSON object.

    | **Key** | **JSON data type** | **Description** |
    | --- | --- | --- |
    | **success** | Boolean | Should be **true** |
    | **message** | String | Some information |

    Example

    **Request**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.object.markAsMassChangeTemplate",
        "params": {
            "object": 465,
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```
    **Response**
    <br>Body:
    ```
    {
        "id": 1,
        "jsonrpc": "2.0",
        "result": {
            "success": true,
            "message": "Object 465 has been marked as mass change template."
        }
    }
    ```

### cmdb.objects.read
??? example "cmdb.objects.read"

    Fetch a list of [objects](../../glossary.md)

    Request parameters

    | Key | JSON data type | Required | Description |
    | --- | --- | --- | --- |
    | categories | Array | No  | Here you can filter by a list or a category, in the form of category constant/s.  <br>"categories": \["C\_\_CATG\_\_MY\_CUSTOM\_CATEGORY"\]  <br>"categories": \["C\_\_CATG\_\_MY\_CUSTOM\_CATEGORY", "C\_\_CATG\_\_MY\_SECOND\_CATEGORY"\] |
    | **filter** | Array | No  | Filter list of objects; see below for a full list of options |
    | **limit** | Mixed | No  | Maximum amount of objects (as integer), for example, fetch the first thousand of objects: **1000**<br><br>Combine this limit with an offset (as string), for example, fetch the next thousand of objects: **"1000,1000"** |
    | **order_by** | String | No  | Order result set by (see filter for more details what each value means):<br><br>*   **"isys_obj_type__id"**,<br>*   **"isys_obj__isys_obj_type__id"**,<br>*   **"type"**,<br>*   **"isys_obj__title"**,<br>*   **"title"**,<br>*   **"isys_obj_type__title"**,<br>*   **"type_title"**,<br>*   **"isys_obj__sysid"**,<br>*   **"sysid"**,<br>*   **"isys_cats_person_list__first_name"**,<br>*   **"first_name"**,<br>*   **"isys_cats_person_list__last_name"**,<br>*   **"last_name"**,<br>*   **"isys_cats_person_list__mail_address"**,<br>*   **"email"**,<br>*   **"isys_obj__id"**, or<br>*   **"id"** |
    | **sort** | String | No  | Only useful in combination with key **order_by**; allowed values are either **"ASC"** (ascending) or **"DESC"** (descending) |

    Filter

    | Key | JSON data type | Required | Description |
    | --- | --- | --- | --- |
    | **ids** | Array | No  | List of object identifiers (as integers), for example: **[1, 2, 3]** |
    | **type** | Integer\|String | No  | Object type identifier (as integer), for example: **5**<br><br>Alternatively, object type constant (as string), for example: **"C__OBJTYPE__SERVER"** |
    | **title** | String | No  | Object title (see attribute **Title** in category **Global**), for example: **"My little server"** |
    | **type_title** | String | No  | Translated name of object type, for example: **"Server"**<br><br>**Note:** Set a proper **language** in your request. |
    | **sysid** | String | No  | **SYSID** (see category **Global**), for example: **"SRV_101010"** |
    | **first_name** | String | No  | First name of an object of type **Persons** (see attribute **First name** in category **Persons → Master Data**), for example: **"John"** |
    | **last_name** | String | No  | Last name of an object of type **Persons** (see attribute **Last name** in category **Persons → Master Data**), for example: **"Doe"** |
    | **email** | String | No  | Primary e-mail address of an object of type **Persons**, **Person groups** or **Organization** (see attribute **E-mail address** in categories **Persons/Person groups/Organization → Master Data**), for example: **"john.doe@example.com"** |
    | **type_group** | String | No  | Filters by the object type group e.g. Infrastructure or Other:  <br>"**C__OBJTYPE_GROUP__INFRASTRUCTURE**" |
    | **status** | String | No  | Filter by status of the objects e.g. Normal or Archived:<br><br>*   **C__RECORD_STATUS__BIRTH**  <br>    **Status ID = 1**  <br>    **Description = Unfinished**<br>*   **C__RECORD_STATUS__NORMAL**  <br>    **Status ID = 2**  <br>    **Designation = Normal**<br>*   **C__RECORD_STATUS__ARCHIVED**  <br>    **Status ID = 3**  <br>    **Designation = Archived**<br>*   **C__RECORD_STATUS__DELETED**  <br>    **Status-ID = 4**  <br>    **Description = Deleted**<br>*   **C__RECORD_STATUS__TEMPLATE**  <br>    **Status-ID = 6**  <br>    **Description = Template**<br>*   **C__RECORD_STATUS__MASS_CHANGES_TEMPLATE**  <br>    **Status ID = 7**  <br>    **Description = Template for mass changes** |

    You can use any combination of filters. Filters are logically associated with AND. A valid combination could be: "Give me all servers which have the same hostname."

    Response

    JSON key **result** contains an array of JSON objects. Each object contains a bunch of information about an i-doit object.

    | Key | JSON data type | Description |
    | --- | --- | --- |
    | **id** | String | Object identifier (as numeric string) |
    | **title** | String | Object title |
    | **sysid** | String | SYSID (see category **Global**) |
    | **type** | String | Object type identifier (as numeric string) |
    | **created** | String | Date of creation; format: **Y-m-d H:i:s** |
    | **updated** | String | Date of last update; format: **Y-m-d H:i:s**<br><br>**Note:** This key is optional because not every object has been updated before. |
    | **type_title** | String | Translated name of object type |
    | **type_group_title** | String | Translated name of object type group |
    | **status** | String | Object status:<br><br>*   **C__RECORD_STATUS__BIRTH  <br>    Status-ID = 1  <br>    Title = ****Unfinished**<br>*   **C__RECORD_STATUS__NORMAL  <br>    Status-ID = 2**  <br>    **Title = ****Normal**<br>*   **C__RECORD_STATUS__ARCHIVED  <br>    Status-ID = 3**  <br>    **Title =** **Archived**<br>*   **C__RECORD_STATUS__DELETED  <br>    Status-ID = 4**  <br>    **Title =** **Deleted**<br>*   **C__RECORD_STATUS__TEMPLATE  <br>    Status-ID = 6**  <br>    **Title =** **Template**<br>*   **C__RECORD_STATUS__MASS_CHANGES_TEMPLATE  <br>    Status-ID = 7**  <br>    **Title =** **Mass change template** |
    | **cmdb_status** | String | CMDB status (see category **Global**; as numeric string) |
    | **cmdb_status_title** | String | Translated CMDB status (see category **Global**) |
    | **image** | String | URL to object picture |
    | categories | Mixed | Optional attributes with values depending on the requested category |

    Example

    **Request**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.objects.read",
        "params": {
            "filter": {
                "type": "C__OBJTYPE__SERVER",
                "status": "C__RECORD_STATUS__ARCHIVED"
            },
            "limit": "0,10",
            "order_by": "title",
            "sort": "ASC",
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```
    **Response**
    <br>Body:
    ```
    {
        "jsonrpc": "2.0",
        "result": [
            {
                "id": "123",
                "title": "My little server",
                "sysid": "SRV_101010",
                "type": "5",
                "created": "2017-03-07 15:57:48",
                "updated": "2017-05-10 15:40:27",
                "type_title": "Server",
                "type_group_title": "Hardware",
                "status": "3",
                "cmdb_status": "6",
                "cmdb_status_title": "in operation",
                "image": "https://demo.i-doit.com/images/objecttypes/empty.png"
            },
            […]
        ]
    }
    ```

### cmdb.category.save
??? example "cmdb.category.save"

    Create or Update [category](../../basics/structure-of-the-it-documentation.md) entry of an object.

    It works for [multi-value categories](../../basics/structure-of-the-it-documentation.md) and [single-value category](../../basics/structure-of-the-it-documentation.md) .

    Request parameters

    | **Key** | **JSON data type** | **Required** | **Description** |
    | --- | --- | --- | --- |
    | **object** | Integer | Yes | Object identifier, for example: **456** |
    | **category** | String | Yes | [Category constant](../api/category-fields-for-data-arrays.md), for example: **"C\_\_CATG\_\_ACCESS"** |
    | **data** | Object | Yes | ```{ "title":”Name of the access”, "description": ”description of the access" }``` |

    **Response**

    JSON key **result** contains a JSON object.

    | **Key** | **JSON data type** | **Description** |
    | --- | --- | --- |
    | **success** | Boolean | Should be **true** |
    | **message** | String | Some information |
    | **entry** | Integer | Entry identifier, for example: **35** |

    Example

    <br>Create
    **Request**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.category.save",
        "params": {
            "object": 456,
            "data": {
                "title":”Name of the access”,
                "description":”description of the access”
            },
            "category": "C__CATG__ACCESS"
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```
    **Response**
    <br>Body:
    ```
    {
        "id": 1,
        "jsonrpc": "2.0",
        "result": {
            "success": true,
            "message": "Category entry successfully saved",          
            "entry": 35
        }
    }
    ```
    <br>or update
    **Request**
    <br>Body:
    ```
    {
    "version": "2.0",
    "method": "cmdb.category.save",
    "params": {
        "object": 456,
        "data": {
        "manufacturer": "Name of manufacturer",
        "title": "Name of model"
        },
        "category": "C__CATG__MODEL",
        "entry": 24,
        "apikey": "xxx",
        "language": "en"
    },
    "id": 1
    }
    ```
    **Response**
    <br>Body:
    ```
    {
    "id": 1,
    "jsonrpc": "2.0",
    "result": {
        "success": true,
        "message": "Category entry successfully saved",
        "entry": 24
    }
    }
    ```


### cmdb.category.create
??? example "cmdb.category.create"

    Create a new [category](../../basics/structure-of-the-it-documentation.md) entry

    Request parameters

    | Key | JSON data type | Required |Description |
    | --- | --- | --- | --- |
    | **objID** | Integer | Yes | Object identifier, for example: **42** |
    | **category** | String | Yes | [Category constant](../api/category-fields-for-data-arrays.md), for example: **C__CATG__MODEL** |
    | **data** | Object | Yes | [Attributes](../api/category-fields-for-data-arrays.md) with their values, for example: <br>```{ "manufacturer": "Name of manufacturer", "title": "Name of model" }```|

    Response

    JSON key **result** contains a JSON object.

    | Key | JSON data type | Description |
    | --- | --- | --- |
    | **id** | String | Entry identifier (as numeric string) |
    | **message** | String | Some information |
    | **success** | Boolean | Should always be **true** |

    Example

    **Request**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.category.create",
        "params": {
            "objID": 42,
            "data": {
                "manufacturer": "Name of manufacturer",
                "title": "Name of model"
            },
            "category": "C__CATG__MODEL",
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```
    **Response**
    <br>Body:
    ```
    {
        "jsonrpc": "2.0",
        "result": {
            "id": "123",
            "message": "Category entry successfully created.",
            "success": true
        },
        "id": 1
    }
    ```

### cmdb.category.read
??? example "cmdb.category.read"

    Read one or more [category](../../basics/structure-of-the-it-documentation.md) entries for an object

    Request parameters

    | Key | JSON data type | Required | Description |
    | --- | --- | --- | --- |
    | **objID** | Integer | Yes | Object identifier, for example: **42** |
    | **category** | String | Yes | Category constant, for example: **"C__CATG__MODEL"** |

    Response

    JSON key **result** contains an array of JSON objects. Each object contains [all available attributes](../api/category-fields-for-data-arrays.md) for the requested category. **Note:** Even if it is a [single-value category](../../basics/structure-of-the-it-documentation.md) or a [multi-value category](../../basics/structure-of-the-it-documentation.md) with only 1 entry, the JSON key **result** contains always an array of JSON objects.

    | Key | JSON data type | Description |
    | --- | --- | --- |
    | **id** | String | Entry identifier (as numeric string) |
    | **objID** | String | Object identifier (as numeric string) |
    | …   | Mixed | Optional attributes with values depending on requested category |

    Example

    **Request**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.category.read",
        "params": {
            "objID": 1000,
            "category": "C__CATG__MODEL",
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```
    **Response**
    <br>Body:
    ```
    {
        "jsonrpc": "2.0",
        "result": [
            {
                "id": "74",
                "objID": "1000",
                "manufacturer": {
                    "id": "2",
                    "title": "Lenovo",
                    "const": null,
                    "title_lang": "Lenovo"
                },
                "title": {
                    "id": "1",
                    "title": "ThinkServer RD350",
                    "const": null,
                    "title_lang": "ThinkServer RD350"
                },
                "productid": "",
                "service_tag": "",
                "serial": "123000999888",
                "firmware": "",
                "description": ""
            }
        ],
        "id": 1
    }
    ```

### cmdb.category.update
??? example "cmdb.category.update"

    Update [category](../../basics/structure-of-the-it-documentation.md) entry of an object

    Request parameters

    | Key | JSON data type | Required | Description |
    | --- | --- | --- | --- |
    | **objID** | Integer | Yes | Object identifier, for example: **42** |
    | **category** | String | Yes | [Category constant](../api/category-fields-for-data-arrays.md), for example: **"C__CATG__MODEL"** |
    | **data** | Object | Yes | [Attributes](../api/category-fields-for-data-arrays.md) which will be updated |
    | **data.category_id** | Integer | No  | Entry identifier (only required for [multi-value categories](../../basics/structure-of-the-it-documentation.md)) |

    Response

    JSON key **result** contains a JSON object.

    | Key | JSON data type | Description |
    | --- | --- | --- |
    | **success** | Boolean | Should be **true** |
    | **message** | String | Should be **"Category entry successfully saved"** |

    Example

    **Request**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.category.update",
        "params": {
            "objID": 42,
            "category": "C__CATG__MODEL",
            "data": {
                "serial": "123abc"
            },
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```
    **Response**
    <br>Body:
    ```
    {
        "jsonrpc": "2.0",
        "result": {
            "success": true,
            "message": "Category entry successfully saved"
        },
        "id": 1
    }
    ```

### cmdb.category.delete
??? example "cmdb.category.delete"

    [Archive a category entry for an object, mark it as deleted or purge it from database](../../basics/life-and-documentation-cycle.md)

    Limitations

    *   This only works with [multi-value categories](../../basics/structure-of-the-it-documentation.md) at the moment.
    *   You can only archive category entries which have a normal status.
    *   You can only mark category entries as deleted which are archived.
    *   You can only purge category entries from the database which are marked as deleted.

    Request parameters

    | Key | JSON data type | Required | Description |
    | --- | --- | --- | --- |
    | **objID** | Integer | Yes | Object identifier, for example: **42** |
    | **category** | String | Yes | [Category constant](../api/category-fields-for-data-arrays.md), for example: **"C__CATG__IP"** |
    | **cateID** | Integer | Yes | Entry identifier, for example: **3** |

    Response

    JSON key **result** contains a JSON object.

    | Key | JSON data type | Description |
    | --- | --- | --- |
    | **success** | Boolean | Should be **true** |
    | **message** | String | Some information |

    Example

    **Request**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.category.delete",
        "params": {
            "objID": 42,
            "category": "C__CATG__IP",
            "cateID": 3,
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```
    **Response**
    <br>Body:
    ```
    {
        "jsonrpc": "2.0",
        "result": {
            "success": true,
            "message": "Category entry '3' successfully deleted"
        },
        "id": 1
    }
    ```

### cmdb.category.quickpurge
??? example "cmdb.category.quickpurge"

    If **Quickpurge** is [enabled](../../basics/life-and-documentation-cycle.md), purge a category entry of an object directly from the database.

    Request parameters

    | Key | JSON data type | Required | Description |
    | --- | --- | --- | --- |
    | **objID** | Integer | Yes | Object identifier, for example: **42** |
    | **category** | String | Yes | [Category constant](../api/category-fields-for-data-arrays.md), for example: **"C__CATG__IP"** |
    | **cateID** | Integer | Yes | Entry identifier, for example: **3** |

    Response

    JSON key **result** contains a JSON object.

    | Key | JSON data type | Description |
    | --- | --- | --- |
    | **success** | Boolean | Should be **true** |
    | **message** | String | Some information |

    Example

    **Request**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.category.quickpurge",
        "params": {
            "objID": 42,
            "category": "C__CATG__IP",
            "cateID": 3,
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```
    **Response**
    <br>Body:
    ```
    {
        "jsonrpc": "2.0",
        "result": {
            "success": true,
            "message": "Category entry '3' successfully purged"
        },
        "id": 1
    }
    ```

### cmdb.category.purge
??? example "cmdb.category.purge"

    Purge a [category](../../basics/structure-of-the-it-documentation.md) entry of an object.It works for [multi-value categories](../../basics/structure-of-the-it-documentation.md#multi-value-category) and [single-value category](../../basics/structure-of-the-it-documentation.md#single-value-category) .

    **Request parameters**

    | **Key** | **JSON data type** | **Required** | **Description** |
    | --- | --- | --- | --- |
    | **object** | Integer | Yes | Object identifier, for example: **456** |
    | **category** | String | Yes | [Category constant](../api/category-fields-for-data-arrays.md), for example: **"C\_\_CATG\_\_ACCESS"** |
    | **entry** | Integer | Yes | Entry identifier, for example: **33** |

    **Response**

    JSON key **result** contains a JSON object.

    | **Key** | **JSON data type** | **Description** |
    | --- | --- | --- |
    | **success** | Boolean | Should be **true** |
    | **message** | String | Some information |

    Example

    **Request**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.category.purge",
        "params": {
            "object": 456,
            "category": "C__CATG__ACCESS",
            "entry": 33,
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```
    **Response**
    <br>Body:
    ```
    {
        "id": 1,
        "jsonrpc": "2.0",
        "result": {
            "success": true,
            "message": "Entry 33 has been successfully purged from 4 to 5."
        }
    }
    ```
    <br>Or
    **Request**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.category.purge",
        "params": {
            "object": 456,
            "category": "C__CATG__MODEL",
            "entry": 24,
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```
    **Response**
    <br>Body:
    ```
    {
        "id": 1,
        "jsonrpc": "2.0",
        "result": {
            "success": true,
            "message": "Entry 24 has been successfully purged from 2 to 5."
        }
    }
    ```

### cmdb.category.recycle
??? example "cmdb.category.recycle"

    **Limitations**

    *   This only works with [multi-value categories](https://kb.i-doit.com/display/en/Structure+of+the+IT+Documentation) at the moment.
    *   You can recycle  category entries which have archived or deleted status.

    **Request parameters**

    | **Key** | **JSON data type** | **Required** | **Description** |
    | --- | --- | --- | --- |
    | **object** | Integer | Yes | Object identifier, for example: **456** |
    | **category** | String | Yes | [Category constant](https://kb.i-doit.com/display/en/Category+Fields+for+Data+Arrays), for example: **"C\_\_CATG\_\_ACCESS"** |
    | **entry** | Integer | Yes | Entry identifier, for example: **32** |

    **Response**

    JSON key **result** contains a JSON object.

    | **Key** | **JSON data type** | **Description** |
    | --- | --- | --- |
    | **success** | Boolean | Should be **true** |
    | **message** | String | Some information |

    Example

    **Request**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.category.recycle",
        "params": {
            "object": 456,
            "category": "C__CATG__ACCESS",
            "entry": 32,
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```
    **Response**
    <br>Body:
    ```
    {
        "id": 1,
        "jsonrpc": "2.0",
        "result": {
            "success": true,
            "message": "Entry 32 has been successfully recycled from 4 to 2."
        }
    }
    ```

### cmdb.category.archive
??? example "cmdb.category.archive"

    **Limitations**

    *   This only works with [multi-value categories](../../basics/structure-of-the-it-documentation.md) at the moment.
    *   You can only archive category entries which have a normal status.

    **Request parameters**

    | **Key** | **JSON data type** | **Required** | **Description** |
    | --- | --- | --- | --- |
    | **object** | Integer | Yes | Object identifier, for example: **456** |
    | **category** | String | Yes | [Category constant](../api/category-fields-for-data-arrays.md), for example: **"C\_\_CATG\_\_ACCESS"** |
    | **entry** | Integer | Yes | Entry identifier, for example: **32** |

    **Response**

    JSON key **result** contains a JSON object.

    | **Key** | **JSON data type** | **Description** |
    | --- | --- | --- |
    | **success** | Boolean | Should be **true** |
    | **message** | String | Some information |

    Example

    **Request**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.category.archive",
        "params": {
            "object": 456,
            "category": "C__CATG__ACCESS",
            "entry": 32,
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```
    **Response**
    <br>Body:
    ```
    {
        "id": 1,
        "jsonrpc": "2.0",
        "result": {
            "success": true,
            "message": "Entry 32 has been successfully archived from 2 to 3."
        }
    }
    ```

### cmdb.dialog.read
??? example "cmdb.dialog.read"

    Read dialog informations.

    **Request parameters**

    | **Key** | **JSON data type** | **Required** | **Description** |
    | --- | --- | --- | --- |
    | **category** | String | Yes | [Category constant](../api/category-fields-for-data-arrays.md), for example: **"C\_\_CATG\_\_CPU"** |
    | **property** | String |     | Attribute in the category, for example: “manufacturer” |

    **Response**

    JSON key **result** contains an array of JSON objects.

    | **Key** | **JSON data type** | **Description** |
    | --- | --- | --- |
    | **id** | Integer | Identifier |
    | **const** | String | **Constant of Dialog Attribute** |
    | **title** | String | Title of the Attribute |

    Example

    **Request**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.dialog.read",
        "params": {
            "category": "C__CATG__CPU",
            "property": "manufacturer",
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```
    **Response**
    <br>Body:
    ```
    {
        "id": 1,
        "jsonrpc": "2.0",
        "result": [
            {
                "id": "1",
                "const": "",
                "title": "AMD"
            },
            {
                "id": "2",
                "const": "",
                "title": "Intel"
            }
        ]
    }
    ```

### cmdb.dialog.create
??? example "cmdb.dialog.create"

    Created Dialogs.

    **Request parameters**

    | **Key** | **JSON data type** | **Required** | **Description** |
    | --- | --- | --- | --- |
    | **category** | String | Yes | [Category constant](../api/category-fields-for-data-arrays.md), for example: **"C\_\_CATG\_\_CPU"** |
    | **property** | String | Yes | Attribute in the category, for example: “manufacturer” |
    | **value** | String | Yes | Value of the Attribute |

    **Response**

    JSON key **result** contains a JSON object.

    | **Key** | **JSON data type** | **Description** |
    | --- | --- | --- |
    | **success** | Boolean | Should be **true** |
    | **entry\_id** | Integer | Entry Identifier, for example: 3 |

    Example

    **Request**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.dialog.create",
        "params": {
            "category": "C__CATG__CPU",
            "property": "manufacturer",
            "value": "IBM",
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```
    **Response**
    <br>Body:
    ```
    {
        "id": 1,
        "jsonrpc": "2.0",
        "result": {
            "success": true,
            "entry_id": 3
        }
    }
    ```

### cmdb.dialog.update
??? example "cmdb.dialog.update"

    Update a [dialog](../../basics/dialog-admin.md#dialog-admin) entry.

    **Request parameters**

    | **Key** | **JSON data type** | **Required** | **Description** |
    | --- | --- | --- | --- |
    | **category** | String | Yes | [Category constant](../api/category-fields-for-data-arrays.md), for example: **"C\_\_CATG\_\_CPU"** |
    | **property** | String | Yes | Attribute in the category, for example: “manufacturer” |
    | **value** | String | Yes | Value of the Attribute |
    | **entry\_id** | String | Yes | Entry Identifier, for example: 3 |

    **Response**

    JSON key **result** contains a JSON object.

    | **Key** | **JSON data type** | **Description** |
    | --- | --- | --- |
    | **success** | Boolean | Should be **true** |
    | **entry\_id** | Integer/String | Entry Identifier, for example: 3 |

    Example

    **Request**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.dialog.update",
        "params": {
            "category": "C__CATG__CPU",
            "property": "manufacturer",
            "entry_id": "3",
            "value": "IBM 2",
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```
    **Response**
    <br>Body:
    ```
    {
        "id": 1,
        "jsonrpc": "2.0",
        "result": {
            "success": true,
            "entry_id": 3
        }
    }
    ```

### cmdb.dialog.delete
??? example "cmdb.dialog.delete"

    Deletes dialogs.

    **Request parameters**

    | **Key** | **JSON data type** | **Required** | **Description** |
    | --- | --- | --- | --- |
    | **category** | String | Yes | [Category constant](../api/category-fields-for-data-arrays.md), for example: **"C\_\_CATG\_\_CPU"** |
    | **property** | String | Yes | Attribute in the category, for example: “manufacturer” |
    | **entry\_id** | String | Yes | Entry Identifier, for example: 3 |

    **Response**

    JSON key **result** contains a JSON object.

    | **Key** | **JSON data type** | **Description** |
    | --- | --- | --- |
    | **success** | Boolean | Should be **true** |
    | **entry\_id** | Integer/String | Entry Identifier, for example: 3 |

    Example

    **Request**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.dialog.delete",
        "params": {
            "category": "C__CATG__CPU",
            "property": "manufacturer",
            "entry_id": "3",
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```
    **Response**
    <br>Body:
    ```
    {
        "id": 1,
        "jsonrpc": "2.0",
        "result": {
            "success": true,
            "entry_id": "3"
        }
    }
    ```

### cmdb.reports.read
??? example "cmdb.reports.read"

    Display report.

    **Request parameters**

    None

    **Response**

    JSON key **result** contains an array of JSON objects.

    | **Key** | **JSON data type** | **Description** |
    | --- | --- | --- |
    | **id** | String | Identifier |
    | **category** | String | Attribute Category in category Global |
    | **title** | String | Title of the report |
    | **description** | String | Report Description |
    | **created** | String | When was is it created |

    Example

    **Request**
    <br>Body:
    ```
    {
    "version": "2.0",
    "method": "cmdb.reports.read",
    "params": {
        "apikey": "xxx",
        "language": "en"
    },
    "id": 1
    }
    ```
    **Response**
    <br>Body:
    ```
    {
    "id": 1,
    "jsonrpc": "2.0",
    "result": [
        {
        "id": "11",
        "category": "Changes",
        "title": "Changed objects from today",
        "description": "Shows objects which have been created or changed for today. Relation objects are excluded.",
        "created": "2016-08-31 15:23:17"
        },
        {
        "id": "7",
        "category": "Changes",
        "title": "Changed objects last 24 hours",
        "description": "Shows objects which have been created or changed for the last 24 hours. Relation objects are excluded.",
        "created": "2016-08-31 15:09:36"
        },
        {
        "id": "8",
        "category": "Changes",
        "title": "Changed objects last 7 days",
        "description": "Shows objects which have been created or changed for the last 7 days. Relation objects are excluded.",
        "created": "2016-08-31 15:11:29"
        }
    ]
    }
    ```

    Or you can also use the parameter “id” in your request  to get the corresponding report
    **Request parameters**
 
    | **Key** | **JSON data type** | **Description** |
    | --- | --- | --- |
    | **id** | String | Identifier |

    **Response**

    JSON key **result** contains an array of JSON objects..

    Example

    **Request**
    <br>Body:
    ```
    {
    "version": "2.0",
    "method": "cmdb.reports.read",
    "params": {
        "id": "3",
        "apikey": "xxx",
        "language": "en"
    },
    "id": 1
    }
    ```
    **Response**
    <br>Body:
    ```
    {
    "id": 1,
    "jsonrpc": "2.0",
    "result": [
        {
        "Title": "backup001",
        "Object type": "LC__CMDB__OBJTYPE__SERVER",
        "Last change": "<span data-date=\"2020-02-14 08:34:02\" class=\"hide\"></span>2020-02-14 - 08:34",
        "Last change by": "admin"
        },
        {
        "Title": "Backup Server",
        "Object type": "LC__CMDB__OBJTYPE__VIRTUAL_SERVER",
        "Last change": "<span data-date=\"2020-02-14 08:23:50\" class=\"hide\"></span>2020-02-14 - 08:23",
        "Last change by": "admin"
        }
    ]
    }
    ```