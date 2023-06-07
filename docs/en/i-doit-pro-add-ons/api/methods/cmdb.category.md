# Namespace cmdb.category

## cmdb.category.read

Read one or more [category](../../../basics/structure-of-the-it-documentation.md) entries for an object

Request parameters

| Key | JSON data type | Required | Description |
| --- | --- | --- | --- |
| **objID** | Integer | Yes | Object identifier, for example: **42** |
| **category** | String | Yes | Category constant, for example: **"C__CATG__MODEL"** |

Response

JSON key **result** contains an array of JSON objects. Each object contains [all available attributes](../category-fields-for-data-arrays.md) for the requested category. **Note:** Even if it is a [single-value category](../../../basics/structure-of-the-it-documentation.md) or a [multi-value category](../../../basics/structure-of-the-it-documentation.md) with only 1 entry, the JSON key **result** contains always an array of JSON objects.

| Key | JSON data type | Description |
| --- | --- | --- |
| **id** | String | Entry identifier (as numeric string) |
| **objID** | String | Object identifier (as numeric string) |
| …   | Mixed | Optional attributes with values depending on requested category |

Example

### Request body

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

## cmdb.category.update
??? example "cmdb.category.update"

Update [category](../../../basics/structure-of-the-it-documentation.md) entry of an object

Request parameters

| Key | JSON data type | Required | Description |
| --- | --- | --- | --- |
| **objID** | Integer | Yes | Object identifier, for example: **42** |
| **category** | String | Yes | [Category constant](../category-fields-for-data-arrays.md), for example: **"C__CATG__MODEL"** |
| **data** | Object | Yes | [Attributes](../category-fields-for-data-arrays.md) which will be updated |
| **data.category_id** | Integer | No  | Entry identifier (only required for [multi-value categories](../../../basics/structure-of-the-it-documentation.md)) |

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

## cmdb.category.delete

[Archive a category entry for an object, mark it as deleted or purge it from database](../../../basics/life-and-documentation-cycle.md)

Limitations

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

Create a new [category](../../../basics/structure-of-the-it-documentation.md) entry

Request parameters

| Key | JSON data type | Required |Description |
| --- | --- | --- | --- |
| **objID** | Integer | Yes | Object identifier, for example: **42** |
| **category** | String | Yes | [Category constant](../category-fields-for-data-arrays.md), for example: **C__CATG__MODEL** |
| **data** | Object | Yes | [Attributes](../category-fields-for-data-arrays.md) with their values, for example: <br>```{ "manufacturer": "Name of manufacturer", "title": "Name of model" }```|

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

## cmdb.category.save

Create or Update [category](../../../basics/structure-of-the-it-documentation.md) entry of an object.

It works for [multi-value categories](../../../basics/structure-of-the-it-documentation.md) and [single-value category](../../../basics/structure-of-the-it-documentation.md) .

Request parameters

| **Key** | **JSON data type** | **Required** | **Description** |
| --- | --- | --- | --- |
| **object** | Integer | Yes | Object identifier, for example: **456** |
| **category** | String | Yes | [Category constant](../category-fields-for-data-arrays.md), for example: **"C__CATG__ACCESS"** |
| **data** | Object | Yes | ```{ "title":"Name of the access", "description": "description of the access" }``` |

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
            "title":"Name of the access",
            "description":"description of the access"
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
### cmdb.category.save

Create or Update [category](../../../basics/structure-of-the-it-documentation.md) entry of an object.

It works for [multi-value categories](../../../basics/structure-of-the-it-documentation.md) and [single-value category](../../../basics/structure-of-the-it-documentation.md) .

Request parameters

| **Key** | **JSON data type** | **Required** | **Description** |
| --- | --- | --- | --- |
| **object** | Integer | Yes | Object identifier, for example: **456** |
| **category** | String | Yes | [Category constant](../category-fields-for-data-arrays.md), for example: **"C__CATG__ACCESS"** |
| **data** | Object | Yes | ```{ "title":"Name of the access", "description": "description of the access" }``` |

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
        "title":"Name of the access",
        "description":"description of the access"
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

Create a new [category](../../../basics/structure-of-the-it-documentation.md) entry

Request parameters

| Key | JSON data type | Required |Description |
| --- | --- | --- | --- |
| **objID** | Integer | Yes | Object identifier, for example: **42** |
| **category** | String | Yes | [Category constant](../category-fields-for-data-arrays.md), for example: **C__CATG__MODEL** |
| **data** | Object | Yes | [Attributes](../category-fields-for-data-arrays.md) with their values, for example: <br>```{ "manufacturer": "Name of manufacturer", "title": "Name of model" }```|

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

#

#

### cmdb.category.read
??? example "cmdb.category.read"

Read one or more [category](../../../basics/structure-of-the-it-documentation.md) entries for an object

Request parameters

| Key | JSON data type | Required | Description |
| --- | --- | --- | --- |
| **objID** | Integer | Yes | Object identifier, for example: **42** |
| **category** | String | Yes | Category constant, for example: **"C__CATG__MODEL"** |

Response

JSON key **result** contains an array of JSON objects. Each object contains [all available attributes](../category-fields-for-data-arrays.md) for the requested category. **Note:** Even if it is a [single-value category](../../../basics/structure-of-the-it-documentation.md) or a [multi-value category](../../../basics/structure-of-the-it-documentation.md) with only 1 entry, the JSON key **result** contains always an array of JSON objects.

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

Update [category](../../../basics/structure-of-the-it-documentation.md) entry of an object

Request parameters

| Key | JSON data type | Required | Description |
| --- | --- | --- | --- |
| **objID** | Integer | Yes | Object identifier, for example: **42** |
| **category** | String | Yes | [Category constant](../category-fields-for-data-arrays.md), for example: **"C__CATG__MODEL"** |
| **data** | Object | Yes | [Attributes](../category-fields-for-data-arrays.md) which will be updated |
| **data.category_id** | Integer | No  | Entry identifier (only required for [multi-value categories](../../../basics/structure-of-the-it-documentation.md)) |

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
