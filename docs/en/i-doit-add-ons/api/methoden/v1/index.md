---
title: API Methods
description: "In this section we explain the i-doit JSON-RPC API."
icon:
status:
lang: en
---
# API Methods

In this section we explain the i-doit [JSON-RPC API](../../index.md). If you want to know which parameters need to or can be set for each method and what a typical response looks like, this is the right resource.

You can find some examples here. More information about each method can be found on the respective page.

## Namespace [idoit]

This namespace is reserved for common methods.

### idoit.search

??? example "idoit.search (Click to expand)"

    Search via the API

    **idoit.search parameter**

    | Key   | JSON data type | Required | Description                                  |
    | ----- | ------------- | ------------ | --------------------------------------------- |
    | **q** | String        | Yes          | Query, for example: **"My little server"** |

    **idoit.search Response**

    JSON key result contains an array of JSON objects. Each object contains a search result.

    | Key            | JSON data type | Description                                     |
    | -------------- | ------------- | ------------------------------------------------ |
    | **documentID** | String        | Identification number                            |
    | **key**        | String        | Attribute that relates to the query              |
    | **value**      | String        | Value that relates to the query                  |
    | **type**       | String        | [Add-on](../../index.md) or core functionality   |
    | **link**       | String        | Relative URL that leads directly to the search result |
    | **score**      | Integer       | Score (deprecated)                               |

    **idoit.search Request**

    Body:

    ```json
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

    **idoit.search Response**

    Body:

    ```json
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

??? example "idoit.version (Click to expand)"

    Retrieve information about i-doit and the current user

    **idoit.version parameter**

    None

    **idoit.version Response**

    JSON key result contains a JSON object with various information about i-doit itself and the current user.

    | Key                | JSON data type | Description                                                                                |
    | ------------------ | ------------- | ------------------------------------------------------------------------------------------- |
    | **login**          | Array         | Information about the user who made the request; see details below |
    | **login.userid**   | String        | Object identifier (as numeric string)                                          |
    | **login.name**     | String        | Object title                                                                           |
    | **login.mail**     | String        | Email address (see category Persons → Master data)                                      |
    | **login.username** | String        | Username (see category Persons → Login)                                             |
    | **login.tenant**   | String        | Name of the tenant                                                                          |
    | **login.language** | String        | Language: "en" or "de"                                                                     |
    | **version**        | String        | Version of the installed i-doit                                                            |
    | **step**           | String        | Dev, alpha or beta release                                                                |
    | **type**           | String        | Variant: "OPEN" or "PRO"                                                                |

    **idoit.version Request**

    Body:

    ```json
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

    **idoit.version Response**

    Body:

    ```json
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

??? example "idoit.constants (Click to expand)"

    Retrieve defined constants from i-doit

    **idoit.constants parameter**

    None

    **idoit.constants Response**

    JSON key result contains a JSON object.

    | Key              | JSON data type | Description                                                                                                        |
    | ---------------- | ------------- | ------------------------------------------------------------------------------------------------------------------- |
    | **objectTypes**  | Object        | List of object types<br><br>Key: Object type constants<br><br>Values: Titles of the translated object types  |
    | **categories**   | Object        | List of global and specific categories                                                                      |
    | **categories.g** | Object        | List of global categories<br><br>Key: Category constants<br><br>Values: Translated category titles |
    | **categories.s** | Object        | List of specific categories<br><br>Key: Category constants<br><br>Values: Translated category titles |

    **idoit.constants Request**

    Body:

    ```json
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

    **idoit.constants Response**

    Body:

    ```json
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

??? example "idoit.login (Click to expand)"

    Create a new session

    **idoit.login parameter**

    None

    **idoit.login Response**

    JSON key result contains a JSON object.

    | Key             | JSON data type | Description                                                                  |
    | --------------- | ------------- | ----------------------------------------------------------------------------- |
    | **result**      | Boolean       | Should be **true**                                                          |
    | **userid**      | String        | Object identifier of the logged-in user (as numeric string) |
    | **name**        | String        | Object title of the logged-in user                                  |
    | **mail**        | String        | Email address attribute in category Persons → Master data                |
    | **username**    | String        | Username attribute in category Persons → Login                       |
    | **session-id**  | String        | Generated session identifier                                            |
    | **client-id**   | String        | Tenant identifier (as numeric string)                         |
    | **client-name** | String        | Name of the tenant                                                            |

    example

    **idoit.login Request**
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

    **idoit.login Response**
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
    **idoit.login Request**
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
    **idoit.login Response**
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
    **idoit.login Request**
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
    **idoit.login Response**
    <br>Header:
    ```
    X-RPC-Auth-Session: d1obs9m3d2pd8651grptjhdjg3
    ```
    <br>Body:
    ```
    {
        "jsonrpc": "2.0",
        "result": {
            "message": "Logout successful",
            "result": true
        },
        "id": 3
    }
    ```

### idoit.logout

??? example "idoit.logout (Click to expand)"
    Close current session

    **Request parameter**

    None

    **idoit.logout Response**

    JSON key result contains a JSON object.

    | Key     | JSON data type | Description                        |
    | ------- | ------------- | ----------------------------------- |
    | message | String        | Should be **"Logout successful"** |
    | result  | Boolean       | Should be **true**                |

    Example

    See method idoit.login

## Namespace [cmdb]

This namespace refers to all CMDB-specific methods such as the handling of objects and categories.

### cmdb.object.create

??? example "cmdb.object.create (Click to expand)"

    Create a new object with some optional information

    cmdb.object.create parameter
    | Key             | JSON data type   | Required | Description                                                                                                                                                                                  |
    | --------------- | --------------- | ------------ | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
    | **type**        | String\|Integer | Yes          | Object type constant as string, for example: "C\_\_OBJTYPE\_\_SERVER".<br><br>Alternatively, object type identifier as integer: 5                                                        |
    | **title**       | String          | Yes          | For example, object title **"My little server"**                                                                                                                                        |
    | **category**    | String          | No           | Attribute category in category General                                                                                                                                                        |
    | **purpose**     | String          | No           | Attribute purpose in category General, for example: **"In production"**                                                                                                                     |
    | **cmdb_status** | String\|Integer | No           | Attribute CMDB status in category General, e.g. by its constant (string): **"C__CMDB_STATUS__IN_OPERATION"**<br><br>Alternatively, by its identifier (integer), for example: 6 |
    | **description** | String          | No           | Attribute description in category General                                                                                                                                                  |

    cmdb.object.create Response

    JSON key result contains a JSON object.

    | Key         | JSON data type | Description                                   |
    | ----------- | ------------- | ---------------------------------------------- |
    | **id**      | String        | Object identifier (as numeric string) |
    | **message** | String        | Some information                           |
    | **success** | Boolean       | Should always be **true**                     |

    example

    **cmdb.object.create Request**
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
    **cmdb.object.create Response**
    <br>Body:
    ```
    {
        "jsonrpc": "2.0",
        "result": {
            "id": "42",
            "message": "Object was successfuly created",
            "success": true
        },
        "id": 1
    }
    ```

### cmdb.object.read

??? example "cmdb.object.read (Click to expand)"

    Read general information about an object

    cmdb.object.read parameter

    | Key    | JSON data type | Required | Description                               |
    | ------ | ------------- | ------------ | ------------------------------------------ |
    | **id** | Integer       | Yes          | Object identifier; for example: **42** |

    cmdb.object.read

    JSON key result contains a JSON object.

    | Key                   | JSON data type | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     |
    | --------------------- | ------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
    | **id**                | String        | Object identifier (as numeric string)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   |
    | **title**             | String        | Object title                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               |
    | **sysid**             | String        | SYSID (see category General)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   |
    | **objecttype**        | String        | Object type identifier (as numeric string)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           |
    | **created**           | String        | Date of creation; format: Y-m-d H:i:s                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        |
    | **updated**           | String        | Date of the last update; format: Y-m-d H:i:s<br><br>**Note:** This key is optional since not every object has been updated before.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         |
    | **type_title**        | String        | Translated name of the object type                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  |
    | **type_icon**         | String        | Relative URL to the object type icon                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
    | **status**            | String        | object status:<br><br>*   **C__RECORD_STATUS__BIRTH  <br>    Status-ID = 1  <br>    Title = Unfinished**<br>*   **C__RECORD_STATUS__NORMAL  <br>    Status-ID = 2**  <br>    **Title = ****Normal**<br>*   **C__RECORD_STATUS__ARCHIVED  <br>    Status-ID = 3**  <br>    **Title =** **Archived**<br>*   **C__RECORD_STATUS__DELETED  <br>    Status-ID = 4**  <br>    **Title =** **Deleted**<br>*   **C__RECORD_STATUS__TEMPLATE  <br>    Status-ID = 6**  <br>    **Title =** **Template**<br>*   **C__RECORD_STATUS__MASS_CHANGES_TEMPLATE  <br>    Status-ID = 7**  <br>    **Title =** **Mass change template** |
    | **cmdb_status**       | String        | CMDB status (see category General; as numeric string)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
    | **cmdb_status_title** | String        | Translated CMDB status (see category General)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 |
    | **image**             | String        | URL to the object image                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               |

    example

    **cmdb.object.read Request**
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
    **cmdb.object.read Response**
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

??? example "cmdb.object.update (Click to expand)"

    Change an object, e.g. the title of an object

    cmdb.object.update parameter

    | Key       | JSON data type | Required | Description                                                     |
    | --------- | ------------- | ------------ | --------------------------------------------------------------- |
    | **id**    | Integer       | Yes          | Object identifier, for example: **42**                      |
    | **title** | String        | Yes          | New Object title, for example: **"Your little server"** |

    cmdb.object.update Response

    JSON key result contains a JSON object.

    | Key         | JSON data type | Description                                       |
    | ----------- | ------------- | -------------------------------------------------- |
    | **message** | String        | Should be "Object title was successfully updated" |
    | **success** | Boolean       | Should be true                                   |

    example

    **cmdb.object.update Request**
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
    **cmdb.object.update Response**
    <br>Body:
    ```
    {
        "jsonrpc": "2.0",
        "result": {
            "message": "Object title was successfuly updated",
            "success": true
        },
        "id": 1
    }
    ```

### cmdb.object.delete

??? example "cmdb.object.delete (Click to expand)"

    Deletes an object

    cmdb.object.delete parameter

    | Key        | JSON data type | Required | Description                                                                                                                                                                                                                       |
    | ---------- | ------------- | ------------ | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
    | **id**     | Integer       | Yes          | Object identifier, for example: **42**                                                                                                                                                                                         |
    | **status** | String        | Yes          | Status constant:<br><br>*   **"C__RECORD_STATUS__ARCHIVED"**: Archive object<br>*   **"C__RECORD_STATUS__DELETED"**: Mark object as deleted<br>*   **"C__RECORD_STATUS__PURGE"**: Purge object from database |

    cmdb.object.delete Response

    JSON key result contains a JSON object.

    example

    **cmdb.object.delete Request**
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
    **cmdb.object.delete Response**
    <br>Body:
    ```
    {
        "jsonrpc": "2.0",
        "result": {
            "message": "Object(s) successfuly archived!",
            "success": true
        },
        "id": 1
    }
    ```

### cmdb.object.recycle

??? example "cmdb.object.recycle (Click to expand)"

    Restore an object

    cmdb.object.recycle parameter

    | **Key**    | **JSON data type** | Required | Description                                |
    | ---------- | ----------------- | ------------ | ------------------------------------------- |
    | **object** | Integer           | Yes          | Object identifier, for example: **464** |

    cmdb.object.recycle Response

    JSON key result contains a JSON object.

    | **Key**     | **JSON data type** | Description         |
    | ----------- | ----------------- | -------------------- |
    | **success** | Boolean           | Should be **true** |
    | **message** | String            | Some information |

    example

    **cmdb.object.recycle Request**
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
    **cmdb.object.recycle Response**
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

??? example "cmdb.object.archive (Click to expand)"

    [Archive](../../../../grundlagen/lebens-und-dokumentationszyklus.md) an object

     Request parameter

    | **Key**    | **JSON data type** | Required | Description                                |
    | ---------- | ----------------- | ------------ | ------------------------------------------- |
    | **object** | Integer           | Yes          | Object identifier, for example: **464** |

    **cmdb.object.archive Response**

    JSON key result contains a JSON object.

    | **Key**     | **JSON data type** | Description         |
    | ----------- | ----------------- | -------------------- |
    | **success** | Boolean           | Should be true     |
    | **message** | String            | Some information |
    example

    **cmdb.object.archive Request**
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
    **cmdb.object.archive Response**
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

??? example "cmdb.object.purge (Click to expand)"

    [Purge](../../../../grundlagen/lebens-und-dokumentationszyklus.md) an object

     Request parameter

    | **Key**    | **JSON data type** | Required | Description                                |
    | ---------- | ----------------- | ------------ | ------------------------------------------- |
    | **object** | Integer           | Yes          | Object identifier, for example: **464** |

     **Response**

    JSON key result contains a JSON object.

    | **Key**     | **JSON data type** | Description         |
    | ----------- | ----------------- | -------------------- |
    | **success** | Boolean           | Should be true     |
    | **message** | String            | Some information |

    example

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

??? example "cmdb.object.markAsTemplate (Click to expand)"

    Set the object state to [Template](../../../../effizientes-dokumentieren/templates.md)

    Request parameter

    | **Key**    | **JSON data type** | Required | Description                                |
    | ---------- | ----------------- | ------------ | ------------------------------------------- |
    | **object** | Integer           | Yes          | Object identifier, for example: **465** |

    **Response**

    JSON key result contains a JSON object.

    | **Key**     | **JSON data type** | Description         |
    | ----------- | ----------------- | -------------------- |
    | **success** | Boolean           | Should be true     |
    | **message** | String            | Some information |

    example

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

??? example "cmdb.object.markAsMassChangeTemplate (Click to expand)"

    Set the object state to [Mass change](../../../../effizientes-dokumentieren/massenaenderung.md) [Template](../../../../effizientes-dokumentieren/templates.md)

    Request parameter

    | **Key**    | **JSON data type** | Required | Description                                |
    | ---------- | ----------------- | ------------ | ------------------------------------------- |
    | **object** | Integer           | Yes          | Object identifier, for example: **465** |

    **Response**

    JSON key result contains a JSON object.

    | **Key**     | **JSON data type** | Description         |
    | ----------- | ----------------- | -------------------- |
    | **success** | Boolean           | Should be true     |
    | **message** | String            | Some information |

    example

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

??? example "cmdb.objects.read (Click to expand)"

    Retrieve a list of objects

    Request parameter

    | Key            | JSON data type | Required | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   |
    | -------------- | ------------- | ------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
    | **categories** | Array         | No           | Here you can filter by a list or a category, in the form of category constant(s).  <br>"categories": ["C__CATG__MY_CUSTOM_CATEGORY"]  <br>"categories": ["C__CATG__MY_CUSTOM_CATEGORY", "C__CATG__MY_SECOND_CATEGORY"]                                                                                                                                                                                                                                                                                                                                                                                     |
    | **filter**     | Array         | No           | Filter the list of objects; see below for a complete list of options                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
    | **limit**      | Mixed         | No           | Maximum number of objects (as integer), e.g. to retrieve the first thousand objects: **1000**<br><br>Combine this limit with an offset (as string), e.g. to retrieve the next thousand objects: **"1000,1000"**                                                                                                                                                                                                                                                                                                                                                                                         |
    | **order_by**   | String        | No           | Order the result by (see filter for additional details on what each value means):<br><br>*   **"isys_obj_type__id"**,<br>*   **"isys_obj__isys_obj_type__id"**,<br>*   **"type"**,<br>*   **"isys_obj__title"**,<br>*   **"title"**,<br>*   **"isys_obj_type__title"**,<br>*   **"type_title"**,<br>*   **"isys_obj__sysid"**,<br>*   **"sysid"**,<br>*   **"isys_cats_person_list__first_name"**,<br>*   **"first_name"**,<br>*   **"isys_cats_person_list__last_name"**,<br>*   **"last_name"**,<br>*   **"isys_cats_person_list__mail_address"**,<br>*   **"email"**,<br>*   **"isys_obj__id"**, or<br>*   **"id"** |
    | **sort**       | String        | No           | Only useful in combination with key order_by; allowed values are either "ASC" (ascending) or "DESC" (descending)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 |

    Filter

    | Key            | JSON data type   | Required | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  |
    | -------------- | --------------- | ------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
    | **ids**        | Array           | No           | List of object identifiers (as integers), for example: **1, 2, 3**                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
    | **type**       | Integer\|String | No           | Object type identifier (as integer), for example: **5**<br><br>Alternatively, object type constant (as string), e.g.: **"C__OBJTYPE__SERVER"**                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              |
    | **title**      | String          | No           | Object title (see attribute Title in category General), e.g.: **"My little server"**                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             |
    | **type_title** | String          | No           | Translated name of the object type, for example: **"Server"**<br><br>**Note:** Set an appropriate language in your request.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     |
    | **sysid**      | String          | No           | **SYSID** (see category General), for example: **"SRV_101010"**                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            |
    | **first_name** | String          | No           | First name of an object of type Persons (see attribute First name in category Persons → Master data), e.g.: **"John"**                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      |
    | **last_name**  | String          | No           | Last name of an object of type Persons (see attribute Last name in category Persons → Master data), e.g.: **"Doe"**                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     |
    | **email**      | String          | No           | Primary email address of an object of type Persons, Person groups or Organization (see attribute Email address in categories Persons/Person groups/Organization → Master data), for example: **"john.doe@example.com"**                                                                                                                                                                                                                                                                                                                                                                                                                                                                       |
    | **type_group** | String          | No           | Filter by the object type group e.g. Infrastructure or Other:  <br>"**C__OBJTYPE_GROUP__INFRASTRUCTURE**"                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
    | **status**     | String          |              | Filter by the status of the objects e.g. Normal or Archived:<br><br>*   **C__RECORD_STATUS__BIRTH  <br>    Status-ID = 1  <br>    Title = Unfinished**<br>*   **C__RECORD_STATUS__NORMAL  <br>    Status-ID = 2**  <br>    **Title = ****Normal**<br>*   **C__RECORD_STATUS__ARCHIVED  <br>    Status-ID = 3**  <br>    **Title =** **Archived**<br>*   **C__RECORD_STATUS__DELETED  <br>    Status-ID = 4**  <br>    **Title =** **Deleted**<br>*   **C__RECORD_STATUS__TEMPLATE  <br>    Status-ID = 6**  <br>    **Title =** **Template**<br>*   **C__RECORD_STATUS__MASS_CHANGES_TEMPLATE  <br>    Status-ID = 7**  <br>    **Title =** **Mass change template** |

    You can use any combination of filters. Filters are logically combined with AND. A valid combination could be "Give me all servers that have the same hostname."

    Response

    JSON key result contains an array of JSON objects. Each object contains a bundle of information about an i-doit object.

    | Key                   | JSON data type | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     |
    | --------------------- | ------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
    | **id**                | String        | Object identifier (as numeric string)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   |
    | **title**             | String        | Object title                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               |
    | **sysid**             | String        | SYSID (see category General)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   |
    | **type**              | String        | Object type identifier (as numeric string)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           |
    | **created**           | String        | Date of creation; format: Y-m-d H:i:s                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        |
    | **updated**           | String        | Date of the last update; format: Y-m-d H:i:s<br><br>**Note:** This key is optional since not every object has been updated before..                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        |
    | **type_title**        | String        | Translated name of the object type                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  |
    | **type_group_title**  | String        | Translated name of the object type group                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             |
    | **status**            | String        | object status:<br><br>*   **C__RECORD_STATUS__BIRTH  <br>    Status-ID = 1  <br>    Title = Unfinished**<br>*   **C__RECORD_STATUS__NORMAL  <br>    Status-ID = 2**  <br>    **Title = ****Normal**<br>*   **C__RECORD_STATUS__ARCHIVED  <br>    Status-ID = 3**  <br>    **Title =** **Archived**<br>*   **C__RECORD_STATUS__DELETED  <br>    Status-ID = 4**  <br>    **Title =** **Deleted**<br>*   **C__RECORD_STATUS__TEMPLATE  <br>    Status-ID = 6**  <br>    **Title =** **Template**<br>*   **C__RECORD_STATUS__MASS_CHANGES_TEMPLATE  <br>    Status-ID = 7**  <br>    **Title =** **Mass change template** |
    | **cmdb_status**       | String        | CMDB status (see category General; as numeric string)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
    | **cmdb_status_title** | String        | Translated CMDB status (see category General)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 |
    | **image**             | String        | URL to the object image                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               |
    | **categories**        | Mixed         | Optional attributes with values depending on the requested category                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          |

    example

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

??? example "cmdb.category.save (Click to expand)"

    Create or update a category entry of an object.

    It works for multi-value categories and single-value categories.

    Request parameter

    | **Key**      | **JSON data type** | Required | Description                                                                                                      |
    | ------------ | ----------------- | ------------ | ----------------------------------------------------------------------------------------------------------------- |
    | **object**   | Integer           | Yes          | Object identifier, for example: **456**                                                                       |
    | **category** | String            | Yes          | [Category constant](../../../../grundlagen/kategorien-und-attribute.md), for example: **"C\_\_CATG\_\_ACCESS"** |
    | **data**     | Object            | Yes          | {<br><br> "title":"Name of the access",<br><br>  "description":"description of the access"<br><br>}               |

    Response

    Object identifier, for example

    | **Key**     | **JSON data type** | Description                                |
    | ----------- | ----------------- | ------------------------------------------- |
    | **success** | Boolean           | Should be true                            |
    | **message** | String            | Some information                        |
    | **entry**   | Integer           | Entry identifier, for example: **35** |

    example

    ***Create***
    **Request**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.category.save",
        "params": {
            "object": 456,
            "data": {
                "title":"Name of the access",
                "description":"description of the access"
            },
            "category": "C__CATG__ACCESS",
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
            "message": "Category entry successfuly saved",
            "entry": 35
        }
    }
    ```
    ***Update***
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
        "message": "Category entry successfuly saved",
        "entry": 24
    }
    }
    ```

### cmdb.category.create

??? example "cmdb.category.create (Click to expand)"

    Create a new category entry

    Request parameter

    | Key          | JSON data type | Required | Description                                                                                                               |
    | ------------ | ------------- | ------------ | -------------------------------------------------------------------------------------------------------------------------- |
    | **objID**    | Integer       | Yes          | Object identifier, for example: **42**                                                                                 |
    | **category** | String        | Yes          | [Category constant](../../../../grundlagen/kategorien-und-attribute.md), for example: **C__CATG__MODEL**                 |
    | **data**     | Object        | Yes          | Attributes with their values, for example: <br>``` { "manufacturer": "Name of manufacturer", "title": "Name of model" } ``` |


     Response

    JSON key result contains a JSON object.

    | Key         | JSON data type | Description                                        |
    | ----------- | ------------- | --------------------------------------------------- |
    | **id**      | String        | Entry identifier (as numeric string) |
    | **message** | String        | Some information                                |
    | **success** | Boolean       | Should always be true                              |

    example

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
            "message": "Category entry successfuly created.",
            "success": true
        },
        "id": 1
    }
    ```

### cmdb.category.read

??? example "cmdb.category.read (Click to expand)"

    Read one or more category entries for an object

    Request parameter

    | Key          | JSON data type | Required | Description                                                                                                                                                                              |
    | ------------ | ------------- | ------------ | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
    | **objID**    | Integer       | Yes          | Object identifier, for example: **42**                                                                                                                                                |
    | **category** | String        | Yes          | Category constant, for example: **"C__CATG__MODEL"**                                                                                                                                   |
    | **status**   | Integer       | Yes          | ID of the status, for example **2** for **normal**<br>If the parameter _status_ is not specified, the status defaults to **2** (normal). This corresponds to the previous behavior. |

    Valid values for **status**

    | value | Description                                                                   |
    | ---- | ------------------------------------------------------------------------------ |
    | -1   | Read all entries with the status **normal**, **archived** or **deleted** |
    | 2    | Read all entries with the status **normal** (default)                         |
    | 3    | Read all entries with the status **archived**                               |
    | 4    | Read all entries with the status **deleted**                                 |

    If an invalid value is specified for _status_, this results in an error message in the response:
    ```
    Status is invalid
    ```
    Response

    JSON key result contains an array of JSON objects. Each object contains all available attributes for the requested category. **Note**: Even if it is a single-value category or a multi-value category with only 1 entry, the JSON key result always contains an array of JSON objects.

    | Key       | JSON data type | Description                                                            |
    | --------- | ------------- | ----------------------------------------------------------------------- |
    | **id**    | String        | Entry identifier (as numeric string)                     |
    | **objID** | String        | Object identifier (as numeric string)                          |
    | …         | Mixed         | Optional attributes with values depending on the requested category |

    example

    **Request**
    <br>Body:
    ```
    {
        "version": "2.0",
        "method": "cmdb.category.read",
        "params": {
            "objID": 1000,
            "category": "C__CATG__MODEL",
            "status": 2,
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

??? example "cmdb.category.update (Click to expand)"

    Update a category entry of an object

     Request parameter

    | Key                  | JSON data type | Required | Description                                                         |
    | -------------------- | ------------- | ------------ | -------------------------------------------------------------------- |
    | **objID**            | Integer       | Yes          | Object identifier, for example: **42**                           |
    | **category**         | String        | Yes          | Category constant, for example: **"C__CATG__MODEL"**              |
    | **data**             | Object        | Yes          | Attributes that will be updated                                   |
    | **data.category_id** | Integer       | Yes          | Entry identifier (only required for multi-value categories) |

     Response

    JSON key result contains a JSON object.

    | Key         | JSON data type | Description                                             |
    | ----------- | ------------- | -------------------------------------------------------- |
    | **success** | Boolean       | Should be true                                         |
    | **message** | String        | Should be "Category entry successfully saved" |

    example

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
            "message": "Category entry successfuly saved"
        },
        "id": 1
    }
    ```

### cmdb.category.delete

??? example "cmdb.category.delete (Click to expand)"

    Archive a category entry for an object, mark it as deleted, or purge it from the database

    Limitations

    *   This currently only works with multi-value categories.
    *   You can only archive category entries that have a normal status.
    *   You can only mark category entries as deleted that are archived.
    *   You can only purge category entries from the database that are marked as deleted.

    Request parameter

    | Key          | JSON data type | Required | Description                                         |
    | ------------ | ------------- | ------------ | ---------------------------------------------------- |
    | **objID**    | Integer       | Yes          | Object identifier, for example: **42**           |
    | **category** | String        | Yes          | Category constant, for example: **"C__CATG__IP"** |
    | **cateID**   | Integer       | Yes          | Entry identifier, for example: **3**          |

    Response

    JSON key result contains a JSON object.

    | Key         | JSON data type | Description         |
    | ----------- | ------------- | -------------------- |
    | **success** | Boolean       | Should be true     |
    | **message** | String        | Some information |

    example

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
            "message": "Category entry '3' successfuly deleted"
        },
        "id": 1
    }
    ```

### cmdb.category.quickpurge

??? example "cmdb.category.quickpurge (Click to expand)"

    If [Quickpurge](../../../../grundlagen/objekt-liste/erweiterte-einstellungen.md) is enabled, you can purge a category entry of an object directly from the database.

    Request parameter

    | Key          | JSON data type | Required | Description                                         |
    | ------------ | ------------- | ------------ | ---------------------------------------------------- |
    | **objID**    | Integer       | Yes          | Object identifier, for example: **42**           |
    | **category** | String        | Yes          | Category constant, for example: **"C__CATG__IP"** |
    | **cateID**   | Integer       | Yes          | Entry identifier, for example: **3**          |

    Response

    JSON key result contains a JSON object.

    | Key         | JSON data type | Description         |
    | ----------- | ------------- | -------------------- |
    | **success** | Boolean       | Should be true     |
    | **message** | String        | Some information |

    example

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
            "message": "Category entry '3' successfuly purged"
        },
        "id": 1
    }
    ```

### cmdb.category.purge

??? example "cmdb.category.purge (Click to expand)"

    Purge a category entry of an object.
    It works for multi-value categories and single-value categories.

    Request parameter

    | **Key**      | **JSON data type** | Required | Description                                                 |
    | ------------ | ----------------- | ------------ | ------------------------------------------------------------ |
    | **object**   | Integer           | Yes          | Object identifier, for example: **456**                  |
    | **category** | String            | Yes          | Category constant, for example: **"C\_\_CATG\_\_ACCESS"** |
    | **entry**    | Integer           | Yes          | Entry identifier, for example: **33**                 |

    Response

    JSON key result contains a JSON object.

    | **Key**     | **JSON data type** | Description         |
    | ----------- | ----------------- | -------------------- |
    | **success** | Boolean           | Should be true     |
    | **message** | String            | Some information |

    example

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
            "message": "Entry 33 has been successfuly purged from 4 to 5."
        }
    }
    ```
    <br>or:
    example

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
            "message": "Entry 24 has been successfuly purged from 2 to 5."
        }
    }
    ```

### cmdb.category.recycle

??? example "cmdb.category.recycle (Click to expand)"

    Limitations

    *   This currently only works with multi-value categories.
    *   You can recycle category entries that have archived or deleted status.

    Request parameter

    | **Key**      | **JSON data type** | Required | Description                                                 |
    | ------------ | ----------------- | ------------ | ------------------------------------------------------------ |
    | **object**   | Integer           | Yes          | Object identifier, for example: **456**                  |
    | **category** | String            | Yes          | Category constant, for example: **"C\_\_CATG\_\_ACCESS"** |
    | **entry**    | Integer           | Yes          | Entry identifier, for example: **32**                 |

    Response

    JSON key result contains a JSON object.

    | **Key**     | **JSON data type** | Description         |
    | ----------- | ----------------- | -------------------- |
    | **success** | Boolean           | Should be true     |
    | **message** | String            | Some information |

    example

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
            "message": "Entry 32 has been successfuly recycled from 4 to 2."
        }
    }
    ```

### cmdb.category.archive

??? example "cmdb.category.archive (Click to expand)"

    Limitations

    *   This currently only works with multi-value categories.
    *   You can only archive category entries that have a normal status.

    Request parameter

    | **Key**      | **JSON data type** | Required | Description                                                 |
    | ------------ | ----------------- | ------------ | ------------------------------------------------------------ |
    | **object**   | Integer           | Yes          | Object identifier, for example: **456**                  |
    | **category** | String            | Yes          | Category constant, for example: **"C\_\_CATG\_\_ACCESS"** |
    | **entry**    | Integer           | Yes          | Entry identifier, for example: **32**                 |

    Response

    JSON key result contains a JSON object.

    | **Key**     | **JSON data type** | Description         |
    | ----------- | ----------------- | -------------------- |
    | **success** | Boolean           | Should be true     |
    | **message** | String            | Some information |

    example

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
            "message": "Entry 32 has been successfuly archived from 2 to 3."
        }
    }
    ```

### cmdb.dialog.read

??? example "cmdb.dialog.read (Click to expand)"

    Read the dialog information.

    Request parameter

    | **Key**      | **JSON data type** | Required | Description                                              |
    | ------------ | ----------------- | ------------ | --------------------------------------------------------- |
    | **category** | String            | Yes          | Category constant, for example: **"C\_\_CATG\_\_CPU"** |
    | **property** | String            | Yes          | Attribute in the category, for example: "manufacturer"   |

    Response

    JSON key result contains a JSON object.

    | **Key**   | **JSON data type** | Description                   |
    | --------- | ----------------- | ------------------------------ |
    | **id**    | String            | Identifier                  |
    | **const** | String            | Constant of the dialog attribute |
    | **title** | String            | Title of the attribute      |

    example

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

??? example "cmdb.dialog.create (Click to expand)"

    Create dialog entries

    Request parameter

    | **Key**      | **JSON data type** | Required | Description                                              |
    | ------------ | ----------------------- | ------------ | --------------------------------------------------------- |
    | **category** | String                  | Yes          | Category constant, for example: **"C\_\_CATG\_\_CPU"** |
    | **property** | String                  | Yes          | Attribute in the category, for example: "manufacturer"     |
    | **value**    | String                  | Yes          | Value of the attribute                                        |

    Response

    JSON key result contains a JSON object.

    | **Key**       | **JSON data type** | Description                         |
    | ------------- | ----------------- | ------------------------------------ |
    | **success**   | Boolean           | Should be true                     |
    | **entry\_id** | Integer           | Entry identifier, for example |

    example

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

??? example "cmdb.dialog.update (Click to expand)"

    Update a [dialog entry](../../../../grundlagen/dialog-admin.md)

    Request parameter

    | **Key**       | **JSON data type** | Required | Description                                              |
    | ------------- | ----------------- | ------------ | --------------------------------------------------------- |
    | **category**  | String            | Yes          | Category constant, for example: **"C\_\_CATG\_\_CPU"** |
    | **property**  | String            | Yes          | Attribut in der Category, for example: "manufacturer"   |
    | **value**     | String            | Yes          | Value of the attribute                                        |
    | **entry\_id** | String            | Yes          | Entry identifier, for example: 3                   |

    Request

    JSON key result contains a JSON object.

    | **Key**       | **JSON data type** | Description                            |
    | ------------- | ----------------- | --------------------------------------- |
    | **success**   | Boolean           | Should be true                        |
    | **entry\_id** | Integer/String    | Entry identifier, for example: 3 |

    example

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

??? example "cmdb.dialog.delete (Click to expand)"

    Deletes dialogs

    Request parameter

    | **Key**       | **JSON data type** | Required | Description                                              |
    | ------------- | ----------------- | ------------ | --------------------------------------------------------- |
    | **category**  | String            | Yes          | Category constant, for example: **"C\_\_CATG\_\_CPU"** |
    | **property**  | String            | Yes          | Attribut in der Category, for example: "manufacturer"   |
    | **entry\_id** | String            | Yes          | Entry identifier, for example: 3                   |

    Response

    JSON key result contains a JSON object..

    | **Key**       | **JSON data type** | Description                            |
    | ------------- | ----------------- | --------------------------------------- |
    | **success**   | Boolean           | Should be true                        |
    | **entry\_id** | Integer/String    | Entry identifier, for example: 3 |

    example

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

??? example "cmdb.reports.read (Click to expand)"

    Display a report.

    **Request parameter**

    None

    **Response**

    JSON key result contains a JSON object.

    | **Key**         | **JSON data type** | Description                           |
    | --------------- | ----------------- | -------------------------------------- |
    | **id**          | String            | Identifier                          |
    | **category**    | String            | Attribute category in category General |
    | **title**       | String            | Title of the report               |
    | **description** | String            | Description of the report              |
    | **created**     | String            | When it was created                 |

    example

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

    Or you can also use the parameter "id" in your request to retrieve the corresponding report

    **Request parameter**

    | **Key** | **JSON data type** | Description  |
    | ------- | ----------------- | ------------- |
    | **id**  | String            | Identifier |

    **Response**

    JSON key result contains a JSON object..

    example

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
