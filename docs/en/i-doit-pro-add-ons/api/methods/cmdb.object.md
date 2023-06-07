# Namespace cmdb.object

## cmdb.object.read

Read common information about an [object](../../../basics/structure-of-the-it-documentation.md)

### Request parameters

| Key | JSON data type | Required | Description |
| --- | --- | --- | --- |
| **id** | Integer | Yes | Object identifier; for example: **42** |

### Response

JSON key **result** contains a JSON object.

| Key | JSON data type | Description |
| --- | --- | --- |
| **id** | String | Object identifier (as numeric string) |
| **title** | String | Object title |
| **sysid** | String | SYSID (see category **Global**) |
| **objecttype** | String | Object type identifier (as numeric string) |
| **created** | String | Date of creation; format: **Y-m-d H:i:s** |
| **updated** | String | Date of last update; format: **Y-m-d H:i:s**<br>**Note:** This key is optional because not every object has been updated before. |
| **type_title** | String | Translated name of object type |
| **type_icon** | String | Relative URL to object type icon |
| **status** | String | Object status:<br> **C__RECORD_STATUS__BIRTH**<br> Status-ID = 1  <br>Title = Unfinishedm <br> **C__RECORD_STATUS__NORMAL**<br> Status-ID = 2<br> Title = Normal<br> **C__RECORD_STATUS__ARCHIVED**<br> Status-ID = 3<br> Title   Archived <br>  **C__RECORD_STATUS__DELETED**<br> Status-ID = 4<br> Title = Deleted<br>  **C__RECORD_STATUS__TEMPLATE**<br> Status-ID = 6<br> Title = Template<br>   **C__RECORD_STATUS__MASS_CHANGES_TEMPLATE**<br> Status-ID = 7<br> Title = Mass change template |
| **cmdb_status** | String | CMDB status (see category **Global**; as numeric string) |
| **cmdb_status_title** | String | Translated CMDB status (see category **Global**) |
| **image** | String | URL to object picture |

### Example

#### Request body

```json
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

#### Response body

```json
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

### cmdb.object.create

Create new [object](../../../basics/structure-of-the-it-documentation.md) with some optional information

Request parameters

| Key | JSON data type | Required | Description |
| --- | --- | --- | --- |
| **type** | String\|Integer | Yes | Object type constant as string, for example: **"C__OBJTYPE__SERVER"**<br><br>Alternatively, object type identifier as integer, for example: **5** |
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


## cmdb.object.update

Change object e.g title of a object

### Request parameters

| Key | JSON data type | Required | Description |
| --- | --- | --- | --- |
| **id** | Integer | Yes | Object identifier, for example: **42** |
| **title** | String | Yes | New object title, for example: **"Your little server"** |

### Response

JSON key **result** contains a JSON object.

| Key | JSON data type | Description |
| --- | --- | --- |
| **message** | String | Should be |
| **success** | Boolean | Should be true |

### Example

#### Request body:

```json
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

#### Response body:

```json
{
    "jsonrpc": "2.0",
    "result": {
        "message": "Object title was successfully updated",
        "success": true
    },
    "id": 1
}
```

## cmdb.object.delete

[Deletes](../../../basics/life-and-documentation-cycle.md) a object

### Request paramters

| Key | JSON data type | Required | Description |
| --- | --- | --- | --- |
| **id** | Integer | Yes | Object identifier, for example: **42** |
| **status** | String | Yes | Status constant:<br> **C__RECORD_STATUS__ARCHIVED**<br> Archive object<br> **C__RECORD_STATUS__DELETED**<br> Mark object as deleted<br> **C__RECORD_STATUS__PURGE**<br> Purge object from database |

### Response

JSON key **result** contains a JSON object.

### Example

#### Request body

```json
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

#### Response body

```json
{
    "jsonrpc": "2.0",
    "result": {
        "message": "Object(s) successfully archived!",
        "success": true
    },
    "id": 1
}
```

## cmdb.object.recycle

Recyles a object

### Request paramters

| **Key** | **JSON data type** | **Required** | **Description** |
| --- | --- | --- | --- |
| **object** | Integer | Yes | Object identifier, for example: **464** |

#### Response body

JSON key **result** contains a JSON object.

| **Key** | **JSON data type** | **Description** |
| --- | --- | --- |
| **success** | Boolean | Should be **true** |
| **message** | String | Some information |

### Example

#### Request body

```json
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

#### Response body

```json
{
    "id": 1,
    "jsonrpc": "2.0",
    "result": {
        "success": true,
        "message": "Object 464 has been recycled."
    }
}
```

## cmdb.object.archive

[Archives](../../../basics/life-and-documentation-cycle.md#archive-category-entries-mark-them-as-deleted-or-purge-them) a object

### Request paramters

| **Key** | **JSON data type** | **Required** | **Description** |
| --- | --- | --- | --- |
| **object** | Integer | Yes | Object identifier, for example: **464** |

#### Response body

JSON key **result** contains a JSON object.

| **Key** | **JSON data type** | **Description** |
| --- | --- | --- |
| **success** | Boolean | Should be **true** |
| **message** | String | Some information |

### Example

#### Request body

```json
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

#### Response body

```json
{
    "id": 1,
    "jsonrpc": "2.0",
    "result": {
        "success": true,
        "message": "Object 464 has been archived."
    }
}
```

## cmdb.object.purge

[Purges](../../../basics/life-and-documentation-cycle.md#archive-category-entries-mark-them-as-deleted-or-purge-them) a object

### Request paramters

| **Key** | **JSON data type** | **Required** | **Description** |
| --- | --- | --- | --- |
| **object** | Integer | Yes | Object identifier, for example: **464** |

#### Response body

JSON key **result** contains a JSON object.

| **Key** | **JSON data type** | **Description** |
| --- | --- | --- |
| **success** | Boolean | Should be **true** |
| **message** | String | Some information |

### Example

#### Request body

```json
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

#### Response body

```json
{
    "id": 1,
    "jsonrpc": "2.0",
    "result": {
        "success": true,
        "message": "Object 464 has been purged."
    }
}
```

## cmdb.object.markAsTemplate

Set the Object condition as a [Template](../../../efficient-documentation/templates.md)

### Request paramters

| **Key** | **JSON data type** | **Required** | **Description** |
| --- | --- | --- | --- |
| **object** | Integer | Yes | Object identifier, for example: **465** |

#### Response body

JSON key **result** contains a JSON object.

| **Key** | **JSON data type** | **Description** |
| --- | --- | --- |
| **success** | Boolean | Should be **true** |
| **message** | String | Some information |

### Example

#### Request body

```json
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

#### Response body

```json
{
    "id": 1,
    "jsonrpc": "2.0",
    "result": {
        "success": true,
        "message": "Object 465 has been marked as template."
    }
}
```

## cmdb.object.markAsMassChangeTemplate

Set the Object condition as a [Mass Change](../../../efficient-documentation/mass-change.md) [Template](../../../efficient-documentation/templates.md)

### Request paramters

| **Key** | **JSON data type** | **Required** | **Description** |
| --- | --- | --- | --- |
| **object** | Integer | Yes | Object identifier, for example: **465** |

#### Response body

JSON key **result** contains a JSON object.

| **Key** | **JSON data type** | **Description** |
| --- | --- | --- |
| **success** | Boolean | Should be **true** |
| **message** | String | Some information |

### Example

#### Request body

```json
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

#### Response body

```json
{
    "id": 1,
    "jsonrpc": "2.0",
    "result": {
        "success": true,
        "message": "Object 465 has been marked as mass change template."
    }
}
```
