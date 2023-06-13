# Namespace idoit

This namespace is reserved for common methods.


## idoit.addons

## idoit.constants

Fetch defined constants from i-doit

### Request parameters

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

### Response body

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

## idoit.license


### idoit.login

Create new session

### Request parameters

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

Close current session

### Request parameters

None

Response

JSON key **result** contains a JSON object.


| Key | JSON data type | Description |
| --- | --- | --- |
| message | String | Should be **"Logout successfull"** |
| result | Boolean | Should be **true** |

Example

See method **idoit.login**

## idoit.search

[Search](../../../efficient-documentation/search.md) in i-doit

### Request parameters

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

Example:

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

### Request parameters

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
