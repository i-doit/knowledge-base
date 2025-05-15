---
title: idoit
description: idoit
icon: material/api
#status: updated
lang: en
---

# idoit

This namespace is reserved for common methods.

!!! example "Work in Progress"

## idoit.addons

Displays a list of installed add-ons

### Request parameters

| Key | JSON data type | Description |
| --- | -------------- | ----------- |
| -   | -              | -           |

!!! example "WIP"

    ### Response parameters

    JSON key **result** contains an array of JSON objects. Each object contains a search result.

    | Key             | JSON data type | Description |
    | --------------- | -------------- | ----------- |
    | **Placeholder** | Placeholder    | Placeholder |
    | **Placeholder** | Placeholder    | Placeholder |

### Example

=== "Request body"

    ```json
    {
      "version": "2.0",
      "method": "idoit.addons",
      "params": {
        "apikey": "xxx",
        "language": "en"
      },
      "id": 1
    }
    ```

=== "Response body"

    ```json
    {
      "id": 1,
      "jsonrpc": "2.0",
      "result": {
        "success": true,
        "result": [
          {
            "title": "Api",
            "key": "api",
            "version": "1.14.1",
            "author": {
              "name": "synetics GmbH"
            },
            "licensed": true,
            "active": true,
            "installed": true
          },
          {
            "title": "PRO",
            "key": "pro",
            "version": "25",
            "author": {
              "name": "synetics GmbH"
            },
            "licensed": true,
            "active": true,
            "installed": true
          }
        ]
      }
    }
    ```

## idoit.constants

Fetch defined constants from i-doit.

### Request parameters

| Key | JSON data type | Description |
| --- | -------------- | ----------- |
| -   | -              | -           |

### Response

JSON key **result** contains a JSON object.

| Key              | JSON data type | Description                                                                                           |
| ---------------- | -------------- | ----------------------------------------------------------------------------------------------------- |
| **objectTypes**  | Object         | List of object types<br><br>Keys: object type constants<br><br>Values: translated object type titles  |
| **categories**   | Object         | List of global and specific categories                                                                |
| **categories.g** | Object         | List of global categories<br><br>Keys: category constants<br><br>Values: translated category titles   |
| **categories.s** | Object         | List of specific categories<br><br>Keys: category constants<br><br>Values: translated category titles |

### Example

=== "Request body"

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

=== "Response body"

    ```json
    {
      "id": 1,
      "jsonrpc": "2.0",
      "result": {
        "objectTypes": {
          "C__OBJTYPE__SERVICE": "System Service",
          "C__OBJTYPE__APPLICATION": "Application",
          "C__OBJTYPE__BUILDING": "Building",
          "C__OBJTYPE__ENCLOSURE": "Rack",
          "C__OBJTYPE__SERVER": "Server",
          ...
        },
        "categories": {
          "g": {
            "C__CATG__GLOBAL": "General",
            "C__CATG__MODEL": "Model",
            "C__CATG__FORMFACTOR": "Form factor",
            "C__CATG__CPU": "CPU",
            "C__CATG__MEMORY": "Memory",
            "C__CATG__NETWORK": "Network",
            ...
          },
          "s": {
            "C__CATS__ENCLOSURE": "Rack",
            "C__CATS__ROOM": "Room",
            "C__CATS__SERVICE": "Services",
            "C__CATS__SWITCH_NET": "Switch",
            "C__CATS__WAN": "WAN",
            ...
          },
          "g_custom": {
            "C__CATG__CUSTOM_FIELDS_DIALOG_ADMIN_KB": "Dialog-Admin KB"
          }
        },
        "recordStates": {
          "C__RECORD_STATUS__NORMAL": "Normal",
          "C__RECORD_STATUS__ARCHIVED": "Archived",
          "C__RECORD_STATUS__DELETED": "Deleted",
          "C__RECORD_STATUS__PURGE": "LC__CMDB__RECORD_STATUS__PURGE"
        },
        "relationTypes": {
          "C__RELATION_TYPE__SOFTWARE": "Software assignment",
          "C__RELATION_TYPE__CLUSTER_SERVICE": "Cluster service assignment",
          "C__RELATION_TYPE__BACKUP": "Backup",
          "C__RELATION_TYPE__ADMIN": "Contact assignment",
          "C__RELATION_TYPE__USER": "Contact assignment",
          ...
        },
        "staticObjects": {
          "C__OBJ__ROOT_LOCATION": "Root location",
          "C__OBJ__PERSON_GUEST": "guest ",
          "C__OBJ__PERSON_READER": "reader ",
          "C__OBJ__PERSON_EDITOR": "editor ",
          "C__OBJ__PERSON_AUTHOR": "author ",
          "C__OBJ__PERSON_ARCHIVAR": "archivar ",
          "C__OBJ__PERSON_ADMIN": "admin ",
          "C__OBJ__PERSON_GROUP_READER": "Reader",
          "C__OBJ__PERSON_GROUP_EDITOR": "Editor",
          "C__OBJ__PERSON_GROUP_AUTHOR": "Author",
          "C__OBJ__PERSON_GROUP_ARCHIVAR": "Archivar",
          "C__OBJ__PERSON_GROUP_ADMIN": "Admin",
          "C__OBJ__NET_GLOBAL_IPV4": "Global v4",
          "C__OBJ__NET_GLOBAL_IPV6": "Global v6",
          "C__OBJ__PERSON_API_SYSTEM": "Api System",
          "C__OBJ__RACK_SEGMENT__4SLOT": "4-Slot",
          "C__OBJ__RACK_SEGMENT__8SLOT": "8-Slot",
          "C__OBJ__RACK_SEGMENT__2SLOT": "2-Slot"
        }
      }
    }
    ```

## idoit.license

Displays information about the installed license.

### Request parameters

| Key             | JSON data type | Required | Description |
| --------------- | -------------- | -------- | ----------- |
| **Placeholder** | Placeholder    | Yes      | Placeholder |

!!! example "WIP"

    ### Response parameters

    JSON key **result** contains an array of JSON objects. Each object contains a search result.

    | Key             | JSON data type | Description |
    | --------------- | -------------- | ----------- |
    | **Placeholder** | Placeholder    | Placeholder |
    | **Placeholder** | Placeholder    | Placeholder |

### Example

=== "Request body"

    ```json
    {
      "version": "2.0",
      "method": "idoit.license",
      "params": {
        "apikey": "{{apikey}}",
        "language": "en"
      },
      "id": 1
    }
    ```

=== "Response body"

    ```json
    {
      "id": 1,
      "jsonrpc": "2.0",
      "result": {
        "objectCapacity": {
          "total": 5002,
          "inUse": 1
        },
        "addons": {
          "iso27001": {
            "licensed": true,
            "label": "i-doit Add-on ISMS medium"
          },
          "viva": {
            "label": "VIVA",
            "licensed": false
          },
          "viva2": {
            "licensed": true,
            "label": "i-doit Add-on VIVA medium"
          },
          "cmk2": {
            "licensed": true,
            "label": "i-doit Add-on Checkmk 2"
          },
          "document": {
            "licensed": true,
            "label": "i-doit Add-on Documents medium"
          },
          ...
        },
        "licenses": [
          {
            "id": 2,
            "label": "i-doit Add-on Checkmk 2",
            "licenseType": "Add-on",
            "registrationDate": "2023-08-01 00:00:00",
            "validUntil": "2023-08-31 00:00:00",
            "objects": 0,
            "tenants": 0,
            "environment": "i-doit Eval",
            "valid": true
          },
          ...
        ]
      }
    }
    ```

## idoit.login

Create new session with X-RPC-Auth headers.

### Request parameters

| Key | JSON data type | Required | Description |
| --- | -------------- | -------- | ----------- |
| -   | -              | -        | -           |

### Response parameters

JSON key **result** contains a JSON object.

| Key             | JSON data type | Description                                                        |
| --------------- | -------------- | ------------------------------------------------------------------ |
| **result**      | Boolean        | Should be **true**                                                 |
| **userid**      | String         | Object identifier of logged-in user (as numeric string)            |
| **name**        | String         | Object title of logged-in user                                     |
| **mail**        | String         | Attribute **E-mail address** in category **Persons → Master Data** |
| **username**    | String         | Attribute **User name** in category **Persons → Login**            |
| **session-id**  | String         | Generated session identifier                                       |
| **client-id**   | String         | Tenant identifier (as numeric string)                              |
| **client-name** | String         | Tenant name                                                        |

### Example

=== "Request body with set header"

    ```
    X-RPC-Auth-Username: admin
    X-RPC-Auth-Password: admin
    ```

    ```json
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

=== "Response body with header"

    ```
    X-RPC-Auth-Session: d1obs9m3d2pd8651grptjhdjg3
    ```

    ```json
    {
      "id": 1,
      "jsonrpc": "2.0",
      "result": {
        "result": true,
        "userid": "9",
        "name": "admin ",
        "mail": "",
        "username": "admin",
        "session-id": "d1obs9m3d2pd8651grptjhdjg3",
        "client-id": 1,
        "client-name": "KnowledgeBase"
      }
    }
    ```

## idoit.logout

Close current session

### Request parameters

| Key | JSON data type | Description |
| --- | -------------- | ----------- |
| -   | -              | -           |

### Response parameters

JSON key **result** contains a JSON object.

| Key     | JSON data type | Description                        |
| ------- | -------------- | ---------------------------------- |
| message | String         | Should be **"Logout successfull"** |
| result  | Boolean        | Should be **true**                 |

### Example

See method [idoit.login](#idoitlogin) before.

=== "Request body"

    ```
    X-RPC-Auth-Session: d1obs9m3d2pd8651grptjhdjg3
    ```

    ```json
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

=== "Response body"

    ```
    X-RPC-Auth-Session: d1obs9m3d2pd8651grptjhdjg3
    ```

    ```json
    {
        "jsonrpc": "2.0",
        "result": {
            "message": "Logout successfull",
            "result": true
        },
        "id": 3
    }
    ```

## idoit.search

[Search](../../../efficient-documentation/search.md) in i-doit

### Request parameters

| Key   | JSON data typ | Required | Description                                |
| ----- | ------------- | -------- | ------------------------------------------ |
| **q** | String        | Yes      | Query, for example: **"My little server"** |

### Response parameters

JSON key **result** contains an array of JSON objects. Each object contains a search result.

| Key            | JSON data type | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            |
| -------------- | -------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **documentID** | String         | Identifier                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             |
| **key**        | String         | Attribute which relates to query                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       |
| **value**      | String         | Value which relates to query                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           |
| **type**       | String         | [Add-on](./../index.md) or core feature                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  |
| **link**       | String         | Relative URL which directly links to search result                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     |
| **score**      | Integer        | Scoring (deprecated)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   |
| **status**     | String         | Object status:<br><br>***C__RECORD_STATUS__BIRTH  <br>    Status-ID = 1  <br>    Title =****Unfinished**<br>*   **C__RECORD_STATUS__NORMAL  <br>    Status-ID = 2**  <br>    **Title = ****Normal**<br>*   **C__RECORD_STATUS__ARCHIVED  <br>    Status-ID = 3**  <br>    **Title =** **Archived**<br>*   **C__RECORD_STATUS__DELETED  <br>    Status-ID = 4**  <br>    **Title =** **Deleted**<br>*   **C__RECORD_STATUS__TEMPLATE  <br>    Status-ID = 6**  <br>    **Title =** **Template**<br>*   **C__RECORD_STATUS__MASS_CHANGES_TEMPLATE  <br>    Status-ID = 7**  <br>    **Title =** **Mass change template** |

### Example

=== "Request body"

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

=== "Response body"

    ```json
    {
        "id": 1,
        "jsonrpc": "2.0",
        "result": [
            {
                "documentId": "1000",
                "key": "Virtual Host > Global > Title",
                "value": "My little server",
                "type": "cmdb",
                "link": "/?objID=1000&catgID=1&cateID=1029&highlight=My%20little%20server",
                "score": "100",
                "status": "Normal"
            },
            […]
        ],
    }
    ```

## idoit.version

Fetch information about i-doit and the current user

### Request parameters

| Key | JSON data type | Description |
| --- | -------------- | ----------- |
| -   | -              | -           |

### Response parameters

JSON key **result** contains an JSON object with various information about i-doit itself and the current user.

| Key                | JSON data type | Description                                                                     |
| ------------------ | -------------- | ------------------------------------------------------------------------------- |
| **login**          | Array          | Information about the user who has performed the request; see below for details |
| **login.userid**   | String         | Object identifier (as numeric string)                                           |
| **login.name**     | String         | Object title                                                                    |
| **login.mail**     | String         | E-mail address (see category **Persons → Master Data**)                         |
| **login.username** | String         | User name (see category **Persons → Login**)                                    |
| **login.mandator** | String         | Tenant name                                                                     |
| **login.language** | String         | Language: **"en"** or **"de"**                                                  |
| **version**        | String         | Version of installed i-doit                                                     |
| **step**           | String         | Dev, alpha or beta release                                                      |
| **type**           | String         | Release variant: **"OPEN"** or **"PRO"**                                        |

### Example

=== "Request body"

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

=== "Response body"

    ```json
    {
      "id": 1,
      "jsonrpc": "2.0",
      "result": {
        "login": {
          "userid": "9",
          "name": "admin ",
          "mail": "",
          "username": "admin",
          "tenant": "KnowledgeBase",
          "language": "en"
        },
        "version": "25",
        "step": "",
        "type": "PRO"
      }
    }
    ```
