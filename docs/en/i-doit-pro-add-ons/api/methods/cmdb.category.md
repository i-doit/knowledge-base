---
title: Namespace cmdb.category
description: Read, create or update one or more category entries for an object.
icon: material/api
status: new
lang: en
---

# Namespace cmdb.category

!!! example "Work in Progress"

## cmdb.category.create

!!! warning "This method is deprecated and will be removed in a feature release. Use [cmdb.category.save](#cmdbcategorysave) instead."

Create a new [category](../../../basics/structure-of-the-it-documentation.md) entry

### Request parameters

| Key          | JSON data type | Required | Description                                                                                                                                                        |
| ------------ | -------------- | -------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| **objID**    | Integer        | Yes      | Object identifier, for example: **42**                                                                                                                             |
| **category** | String         | Yes      | [Category constant](../category-fields-for-data-arrays.md), for example: **C__CATG__MODEL**                                                                        |
| **data**     | Object         | Yes      | [Attributes](../category-fields-for-data-arrays.md) with their values, for example: <br>```{ "manufacturer": "Name of manufacturer", "title": "Name of model" }``` |

### Response parameters

JSON key **result** contains a JSON object.

| Key         | JSON data type | Description                          |
| ----------- | -------------- | ------------------------------------ |
| **id**      | String         | Entry identifier (as numeric string) |
| **message** | String         | Some information                     |
| **success** | Boolean        | Should always be **true**            |

### Example

=== "Request body"

    ```json
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

=== "Response body"

    ```json
    {
      "id": 1,
      "jsonrpc": "2.0",
      "result": {
        "id": "123",
        "message": "Category entry successfully created. [This method is deprecated and will be removed in a feature release. Use 'cmdb.category.save' instead.]",
        "success": true
      }
    }
    ```

## cmdb.category.read

Read one or more [category](../../../basics/structure-of-the-it-documentation.md) entries for an object

### Request parameters

| Key          | JSON data type | Required | Description                                          |
| ------------ | -------------- | -------- | ---------------------------------------------------- |
| **objID**    | Integer        | Yes      | Object identifier, for example: **42**               |
| **category** | String         | Yes      | Category constant, for example: **"C__CATG__MODEL"** |

### Response parameters

JSON key **result** contains an array of JSON objects. Each object contains [all available attributes](../category-fields-for-data-arrays.md) for the requested category.

!!! note ""

    Even if it is a [single-value category](../../../basics/structure-of-the-it-documentation.md) or a [multi-value category](../../../basics/structure-of-the-it-documentation.md) with only 1 entry, the JSON key **result** contains always an array of JSON objects.

| Key       | JSON data type | Description                                                     |
| --------- | -------------- | --------------------------------------------------------------- |
| **id**    | String         | Entry identifier (as numeric string)                            |
| **objID** | String         | Object identifier (as numeric string)                           |
| …         | Mixed          | Optional attributes with values depending on requested category |

### Example

=== "Request body"

    ```json
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

=== "Response body"

    ```json
    {
      "id": 1,
      "jsonrpc": "2.0",
      "result": [
        {
          "id": "74",
          "objID": "1000",
          "manufacturer": {
            "id": "19",
            "title": "Lenovo",
            "const": null,
            "title_lang": "Lenovo"
          },
          "title": {
            "id": "38",
            "title": "ThinkPad R61",
            "const": null,
            "title_lang": "ThinkPad R61"
          },
          "productid": "",
          "service_tag": "WRT231",
          "serial": "123000999888",
          "firmware": "",
          "description": ""
        }
      ]
    }
    ```

## cmdb.category.update

!!! warning "This method is deprecated and will be removed in a feature release. Use [cmdb.category.save](#cmdbcategorysave) instead."

### Request parameters

| Key                  | JSON data type | Required | Description                                                                                                         |
| -------------------- | -------------- | -------- | ------------------------------------------------------------------------------------------------------------------- |
| **objID**            | Integer        | Yes      | Object identifier, for example: **42**                                                                              |
| **category**         | String         | Yes      | [Category constant](../category-fields-for-data-arrays.md), for example: **"C__CATG__MODEL"**                       |
| **data**             | Object         | Yes      | [Attributes](../category-fields-for-data-arrays.md) which will be updated                                           |
| **data.category_id** | Integer        | No       | Entry identifier (only required for [multi-value categories](../../../basics/structure-of-the-it-documentation.md)) |

### Response parameters

JSON key **result** contains a JSON object.

| Key         | JSON data type | Description                                       |
| ----------- | -------------- | ------------------------------------------------- |
| **success** | Boolean        | Should be **true**                                |
| **message** | String         | Should be **"Category entry successfully saved"** |

### Example

=== "Request body"

    ```json
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

=== "Response body"

    ```json
    {
      "id": 1,
      "jsonrpc": "2.0",
      "result": {
        "success": true,
        "message": "Category entry successfully saved. [This method is deprecated and will be removed in a feature release. Use 'cmdb.category.save' instead.]"
      }
    }
    ```

## cmdb.category.delete

[Archive a category entry for an object, mark it as deleted or purge it from database](../../../basics/life-and-documentation-cycle.md)

**Limitations:**

- This only works with ==multi-value categories== at the moment.
- You can only ==archive== category entries which have a normal status.
- You can only ==mark== category entries ==as deleted== which are archived.
- You can only ==purge== category entries from the database which are marked as deleted.

### Request parameters

| Key                  | JSON data type | Required | Description                                                                                |
| -------------------- | -------------- | -------- | ------------------------------------------------------------------------------------------ |
| **objID**            | Integer        | Yes      | Object identifier, for example: **42**                                                     |
| **category**         | String         | Yes      | [Category constant](../category-fields-for-data-arrays.md), for example: **"C__CATG__IP"** |
| **cateID** or **id** | Integer        | Yes      | Entry identifier, for example: **3**                                                       |

### Response

JSON key **result** contains a JSON object.

| Key         | JSON data type | Description        |
| ----------- | -------------- | ------------------ |
| **success** | Boolean        | Should be **true** |
| **message** | String         | Some information   |


### Example

=== "Delete Request body"

    ```json
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

=== "Response body"

    ```json
    {
      "id": 1,
      "jsonrpc": "2.0",
      "result": {
        "success": true,
        "message": "Category entry '3' successfully deleted"
      }
    }
    ```

## cmdb.category.save

Create or Update [category](../../../basics/structure-of-the-it-documentation.md) entry of an object.<br>
It works for [multi-value categories](../../../basics/structure-of-the-it-documentation.md) and [single-value category](../../../basics/structure-of-the-it-documentation.md) .

### Request parameters

| **Key**      | **JSON data type** | **Required** | **Description**                                                                                |
| ------------ | ------------------ | ------------ | ---------------------------------------------------------------------------------------------- |
| **object**   | Integer            | Yes          | Object identifier, for example: **456**                                                        |
| **category** | String             | Yes          | [Category constant](../category-fields-for-data-arrays.md), for example: **"C__CATG__ACCESS"** |
| **data**     | Object             | Yes          | ```{ "title":"Name of the access", "description": "description of the access" }```             |

### Response body

JSON key **result** contains a JSON object.

| **Key**     | **JSON data type** | **Description**                       |
| ----------- | ------------------ | ------------------------------------- |
| **success** | Boolean            | Should be **true**                    |
| **message** | String             | Some information                      |
| **entry**   | Integer            | Entry identifier, for example: **35** |

### Example

=== "Create Request body"

    ```json
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

=== "Response body"

    ```json
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

=== "or update Request body"

    ```json
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

## cmdb.category.quickpurge

If **Quickpurge** is [enabled](../../../basics/life-and-documentation-cycle.md), purge a category entry of an object directly from the database.

### Request parameters

| Key                  | JSON data type | Required | Description                                                                                |
| -------------------- | -------------- | -------- | ------------------------------------------------------------------------------------------ |
| **objID**            | Integer        | Yes      | Object identifier, for example: **42**                                                     |
| **category**         | String         | Yes      | [Category constant](../category-fields-for-data-arrays.md), for example: **"C__CATG__IP"** |
| **cateID** or **id** | Integer        | Yes      | Entry identifier, for example: **3**                                                       |

### Response body

JSON key **result** contains a JSON object.

| Key         | JSON data type | Description        |
| ----------- | -------------- | ------------------ |
| **success** | Boolean        | Should be **true** |
| **message** | String         | Some information   |

### Example

=== "Create Request body"

    ```json
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

=== "Response body"

    ```json
    {
      "id": 1,
      "jsonrpc": "2.0",
      "result": {
        "success": true,
        "message": "Category entry '3' successfully purged"
      }
    }
    ```

## cmdb.category.purge

Purge a [category](../../../basics/structure-of-the-it-documentation.md) entry of an object.It works for [multi-value categories](../../../basics/structure-of-the-it-documentation.md#multi-value-category) and [single-value category](../../../basics/structure-of-the-it-documentation.md#single-value-category) .

### Request parameters

| **Key**      | **JSON data type** | **Required** | **Description**                                                                                |
| ------------ | ------------------ | ------------ | ---------------------------------------------------------------------------------------------- |
| **object**   | Integer            | Yes          | Object identifier, for example: **456**                                                        |
| **category** | String             | Yes          | [Category constant](../category-fields-for-data-arrays.md), for example: **"C__CATG__ACCESS"** |
| **entry**    | Integer            | Yes          | Entry identifier, for example: **33**                                                          |

### Response body

JSON key **result** contains a JSON object.

| **Key**     | **JSON data type** | **Description**    |
| ----------- | ------------------ | ------------------ |
| **success** | Boolean            | Should be **true** |
| **message** | String             | Some information   |

### Example

=== "Request body"

    ```json
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

=== "Response body"

    ```json
    {
      "id": 1,
      "jsonrpc": "2.0",
      "result": {
        "success": true,
        "message": "Entry 33 has been successfully purged from 2 to 5."
      }
    }
    ```

## cmdb.category.recycle

**Limitations:**

- This only works with [multi-value categories](../../../basics/structure-of-the-it-documentation.md).
- You can recycle category entries which have archived or deleted status.

### Request parameters

| **Key**      | **JSON data type** | **Required** | **Description**                                                                                       |
| ------------ | ------------------ | ------------ | ----------------------------------------------------------------------------------------------------- |
| **object**   | Integer            | Yes          | Object identifier, for example: **456**                                                               |
| **category** | String             | Yes          | [Category constant](../../../basics/categories-and-attributes.md), for example: **"C__CATG__ACCESS"** |
| **entry**    | Integer            | Yes          | Entry identifier, for example: **32**                                                                 |

### Response boday

JSON key **result** contains a JSON object.

| **Key**     | **JSON data type** | **Description**    |
| ----------- | ------------------ | ------------------ |
| **success** | Boolean            | Should be **true** |
| **message** | String             | Some information   |

### Example

=== "Request body"

    ```json
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

=== "Response body"

    ```json
    {
      "id": 1,
      "jsonrpc": "2.0",
      "result": {
        "success": true,
        "message": "Entry 32 has been successfully recycled from 3 to 2."
      }
    }
    ```

## cmdb.category.archive

**Limitations**

- This only works with [multi-value categories](../../../basics/structure-of-the-it-documentation.md) at the moment.
- You can only archive category entries which have a normal status.

### Request parameters

| **Key**      | **JSON data type** | **Required** | **Description**                                                                                |
| ------------ | ------------------ | ------------ | ---------------------------------------------------------------------------------------------- |
| **object**   | Integer            | Yes          | Object identifier, for example: **456**                                                        |
| **category** | String             | Yes          | [Category constant](../category-fields-for-data-arrays.md), for example: **"C__CATG__ACCESS"** |
| **entry**    | Integer            | Yes          | Entry identifier, for example: **32**                                                          |

### Response body

JSON key **result** contains a JSON object.

| **Key**     | **JSON data type** | **Description**    |
| ----------- | ------------------ | ------------------ |
| **success** | Boolean            | Should be **true** |
| **message** | String             | Some information   |

### Example

=== "Request body"

    ```json
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

=== "Response body"

    ```json
    {
      "id": 1,
      "jsonrpc": "2.0",
      "result": {
        "success": true,
        "message": "Entry 32 has been successfully archived from 2 to 3."
      }
    }
    ```
