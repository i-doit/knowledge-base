---
title: Namespace cmdb.dialog
description: cmdb.dialog
icon: material/api
status: new
lang: en
---

# Namespace cmdb.dialog

!!! example "Work in Progress"

## cmdb.dialog.read

Read dialog informations.

### Request parameters

| **Key**      | **JSON data type** | **Required** | **Description**                                                                                    |
| ------------ | ------------------ | ------------ | -------------------------------------------------------------------------------------------------- |
| **category** | String             | Yes          | [Category constant](../../api/category-fields-for-data-arrays.md), for example: **"C__CATG__CPU"** |
| **property** | String             | Yes          | Attribute in the category, for example: "manufacturer"                                             |

### Response parameters

JSON key **result** contains an array of JSON objects.

| **Key**   | **JSON data type** | **Description**                  |
| --------- | ------------------ | -------------------------------- |
| **id**    | Integer            | Identifier                       |
| **const** | String             | **Constant of Dialog Attribute** |
| **title** | String             | Title of the Attribute           |

### Example

=== "Request body"

    ```json
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

=== "Response body"

    ```json
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

Created Dialogs.

## Request parameters

| **Key**      | **JSON data type** | **Required** | **Description**                                                                                    |
| ------------ | ------------------ | ------------ | -------------------------------------------------------------------------------------------------- |
| **category** | String             | Yes          | [Category constant](../../api/category-fields-for-data-arrays.md), for example: **"C__CATG__CPU"** |
| **property** | String             | Yes          | Attribute in the category, for example: "manufacturer"                                             |
| **value**    | String             | Yes          | Value of the Attribute                                                                             |

### Response parameters

JSON key **result** contains a JSON object.

| **Key**      | **JSON data type** | **Description**                  |
| ------------ | ------------------ | -------------------------------- |
| **success**  | Boolean            | Should be **true**               |
| **entry_id** | Integer            | Entry Identifier, for example: 3 |

### Example

=== "Request body"

    ```json
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

=== "Response body"

    ```json
    {
      "id": 1,
      "jsonrpc": "2.0",
      "result": {
        "success": true,
        "entry_id": 3
      }
    }
    ```

## cmdb.dialog.update

Update a [dialog](../../../basics/dialog-admin.md#dialog-admin) entry.

## Request parameters

| **Key**      | **JSON data type** | **Required** | **Description**                                                                                    |
| ------------ | ------------------ | ------------ | -------------------------------------------------------------------------------------------------- |
| **category** | String             | Yes          | [Category constant](../../api/category-fields-for-data-arrays.md), for example: **"C__CATG__CPU"** |
| **property** | String             | Yes          | Attribute in the category, for example: "manufacturer"                                             |
| **value**    | String             | Yes          | Value of the Attribute                                                                             |
| **entry_id** | Integer            | Yes          | Entry Identifier, for example: 3                                                                   |

### Response parameters

JSON key **result** contains a JSON object.

| **Key**      | **JSON data type** | **Description**                  |
| ------------ | ------------------ | -------------------------------- |
| **success**  | Boolean            | Should be **true**               |
| **entry_id** | Integer/String     | Entry Identifier, for example: 3 |

### Example

=== "Request body"

    ```json
    {
      "version": "2.0",
      "method": "cmdb.dialog.update",
      "params": {
        "category": "C__CATG__CPU",
        "property": "manufacturer",
        "entry_id": 3,
        "value": "IBM",
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
        "entry_id": "3"
      }
    }
    ```

## cmdb.dialog.delete

Deletes dialogs.

### Request parameters

| **Key**      | **JSON data type** | **Required** | **Description**                                                                                    |
| ------------ | ------------------ | ------------ | -------------------------------------------------------------------------------------------------- |
| **category** | String             | Yes          | [Category constant](../../api/category-fields-for-data-arrays.md), for example: **"C__CATG__CPU"** |
| **property** | String             | Yes          | Attribute in the category, for example: "manufacturer"                                             |
| **entry_id** | Integer            | Yes          | Entry Identifier, for example: 3                                                                   |

### Response parameters

JSON key **result** contains a JSON object.

| **Key**      | **JSON data type** | **Description**                  |
| ------------ | ------------------ | -------------------------------- |
| **success**  | Boolean            | Should be **true**               |
| **entry_id** | Integer/String     | Entry Identifier, for example: 3 |

### Example

=== "Request body"

    ```json
    {
      "version": "2.0",
      "method": "cmdb.dialog.delete",
      "params": {
        "category": "C__CATG__CPU",
        "property": "manufacturer",
        "entry_id": 3,
        "value": "IBM",
        "apikey": "h3md6u3y",
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
        "entry_id": 3
      }
    }
    ```
