---
title: cmdb.object
description: object
icon: material/api
#status: updated
lang: de
---

!!! example "Work in Progress"

## cmdb.object.read

Read common information about an [object](../../../../grundlagen/struktur-it-dokumentation.md)

### Request parameter

| Key    | JSON data type | Required | Description                            |
| ------ | -------------- | -------- | -------------------------------------- |
| **id** | Integer        | Yes      | Object identifier; for example: **42** |

### Response parameter

JSON key **result** contains a JSON object.

| Key                   | JSON data type | Description                                                                                                                                                                                                                                                                                                                                                                           |
| --------------------- | -------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **id**                | String         | Object identifier (as numeric string)                                                                                                                                                                                                                                                                                                                                                 |
| **title**             | String         | Object title                                                                                                                                                                                                                                                                                                                                                                          |
| **sysid**             | String         | SYSID (see category **Global**)                                                                                                                                                                                                                                                                                                                                                       |
| **objecttype**        | String         | Object type identifier (as numeric string)                                                                                                                                                                                                                                                                                                                                            |
| **created**           | String         | Date of creation; format: **Y-m-d H:i:s**                                                                                                                                                                                                                                                                                                                                             |
| **updated**           | String         | Date of last update; format: **Y-m-d H:i:s**<br>**Note:** This key is optional because not every object has been updated before.                                                                                                                                                                                                                                                      |
| **type_title**        | String         | Translated name of object type                                                                                                                                                                                                                                                                                                                                                        |
| **type_icon**         | String         | Relative URL to object type icon                                                                                                                                                                                                                                                                                                                                                      |
| **status**            | String         | Filter by status of the objects e.g. Normal or Archived:<br>-   **C__RECORD_STATUS__BIRTH** = Unfinished<br>-   **C__RECORD_STATUS__NORMAL** = Normal<br>-   **C__RECORD_STATUS__ARCHIVED** = Archived<br>-   **C__RECORD_STATUS__DELETED** = Deleted<br>-   **C__RECORD_STATUS__TEMPLATE** = Template<br>-   **C__RECORD_STATUS__MASS_CHANGES_TEMPLATE** = Template for mass changes |
| **cmdb_status**       | String         | CMDB status (see category **Global**; as numeric string)                                                                                                                                                                                                                                                                                                                              |
| **cmdb_status_title** | String         | Translated CMDB status (see category **Global**)                                                                                                                                                                                                                                                                                                                                      |
| **image**             | String         | URL to object picture                                                                                                                                                                                                                                                                                                                                                                 |

### Example

=== "Request body"

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

=== "Response body"

    ```json
    {
        "id": 1,
        "jsonrpc": "2.0",
        "result": {
            "id": 1000,
            "title": "ESXi1",
            "sysid": "VHOST_1426338622",
            "objecttype": 58,
            "type_title": "Virtual host",
            "type_icon": "images/icons/silk/server_database.png",
            "status": 2,
            "cmdb_status": 6,
            "cmdb_status_title": "in operation",
            "created": "2023-07-11 14:07:04",
            "updated": "2023-07-11 14:07:04",
            "image": "http://demo.synetics.int/pro/images/objecttypes/server.png"
        }
    }
    ```

## cmdb.object.create

Create new [object](../../../../grundlagen/struktur-it-dokumentation.md) with some optional information

### Request parameter

| Key             | JSON data type    | Required | Description                                                                                                                                                                                      |
| --------------- | ----------------- | -------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| **type**        | String\|Integer   | Yes      | Object type constant as string, for example: **"C__OBJTYPE__SERVER"**<br><br>Alternatively, object type identifier as integer, for example: **5**                                                |
| **title**       | String            | Yes      | Object title, for example: **"My little server"**                                                                                                                                                |
| **category**    | String            | No       | Attribute **Category** in category **Global**                                                                                                                                                    |
| **categories**  | Object with Array | No       | Category constant, for example: **"C__CATG__MODEL"** with keys in a array                                                                                                                        |
| **purpose**     | String            | No       | Attribute **Purpose** in category Global, for example: **"In production"**                                                                                                                       |
| **cmdb_status** | String\|Integer   | No       | Attribute **CMDB status** in category **Global** by its constant (string), for example: **"C__CMDB_STATUS__IN_OPERATION"**<br><br>Alternatively, by its identifier (integer), for example: **6** |
| **description** | String            | No       | Attribute **Description** in category **Global**                                                                                                                                                 |

### Response parameter

JSON key **result** contains a JSON object.

| Key         | JSON data type | Description                           |
| ----------- | -------------- | ------------------------------------- |
| **id**      | String         | Object identifier (as numeric string) |
| **message** | String         | Some information                      |
| **success** | Boolean        | Should always be **true**             |

### Example

=== "Request body"

    ```json
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

=== "Response body"

    ```json
    {
      "id": 1,
      "jsonrpc": "2.0",
      "result": {
        "id": 28,
        "message": "Object was successfuly created",
        "success": true
      }
    }
    ```

## cmdb.object.update

Change object e.g title of a object.

### Request parameter

| Key       | JSON data type | Required | Description                                             |
| --------- | -------------- | -------- | ------------------------------------------------------- |
| **id**    | Integer        | Yes      | Object identifier, for example: **42**                  |
| **title** | String         | Yes      | New object title, for example: **"Your little server"** |

### Response parameter

JSON key **result** contains a JSON object.

| Key         | JSON data type | Description    |
| ----------- | -------------- | -------------- |
| **message** | String         | Should be      |
| **success** | Boolean        | Should be true |

### Example

=== "Request body"

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

=== "Response body"

    ```json
    {
        "jsonrpc": "2.0",
        "result": {
            "message": "Object title was successfuly updated",
            "success": true
        },
        "id": 1
    }
    ```

## cmdb.object.delete

[Deletes](../../../../grundlagen/struktur-it-dokumentation.md) a object also can set a specific record status like Archived.

### Request parameter

| Key        | JSON data type | Required | Description                                                                                                                                                                                        |
| ---------- | -------------- | -------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **id**     | Integer        | Yes      | Object identifier, for example: **42**                                                                                                                                                             |
| **status** | String         | Yes      | Status constant:<br> **C__RECORD_STATUS__ARCHIVED**<br> Archive object<br> **C__RECORD_STATUS__DELETED**<br> Mark object as deleted<br> **C__RECORD_STATUS__PURGE**<br> Purge object from database |

### Response parameter

JSON key **result** contains a JSON object.

| Key         | JSON data type | Description        |
| ----------- | -------------- | ------------------ |
| **success** | Boolean        | Should be **true** |
| **message** | String         | Some information   |

### Example

=== "Request body"

    ```json
    {
        "version": "2.0",
        "method": "cmdb.object.delete",
        "params": {
            "id": 42,
            "apikey": "xxx",
            "language": "en"
        },
        "id": 1
    }
    ```

=== "Response body"

    ```json
    {
        "jsonrpc": "2.0",
        "result": {
            "success": true,
            "message": "Object 42 has been deleted."
        },
        "id": 1
    }
    ```

## cmdb.object.recycle

Recycles a object

### Request parameter

| Key        | JSON data type | Required | Description                             |
| ---------- | -------------- | -------- | --------------------------------------- |
| **object** | Integer        | Yes      | Object identifier, for example: **464** |

### Response parameter

JSON key **result** contains a JSON object.

| Key         | JSON data type | Description        |
| ----------- | -------------- | ------------------ |
| **success** | Boolean        | Should be **true** |
| **message** | String         | Some information   |

### Example

=== "Request body"

    ```json
    {
      "version": "2.0",
      "method": "cmdb.object.recycle",
      "params": {
        "object": 28,
        "status": "C__RECORD_STATUS__ARCHIVED",
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
        "message": "Object 28 has been recycled."
      }
    }
    ```

## cmdb.object.archive

[Archives](../../../../grundlagen/struktur-it-dokumentation.md) a object

### Request parameter

| Key        | JSON data type | Required | Description                             |
| ---------- | -------------- | -------- | --------------------------------------- |
| **object** | Integer        | Yes      | Object identifier, for example: **464** |

### Response parameter

JSON key **result** contains a JSON object.

| Key         | JSON data type | Description        |
| ----------- | -------------- | ------------------ |
| **success** | Boolean        | Should be **true** |
| **message** | String         | Some information   |

### Example

=== "Request body"

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

=== "Response body"

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

[Purges](../../../../grundlagen/struktur-it-dokumentation.md) a object when the status is deleted.

### Request parameter

| Key        | JSON data type | Required | Description                             |
| ---------- | -------------- | -------- | --------------------------------------- |
| **object** | Integer        | Yes      | Object identifier, for example: **464** |

### Response parameter

JSON key **result** contains a JSON object.

| Key         | JSON data type | Description        |
| ----------- | -------------- | ------------------ |
| **success** | Boolean        | Should be **true** |
| **message** | String         | Some information   |

### Example

=== "Request body"

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

=== "Response body"

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

Set the Object condition as a [Template](../../../../effizientes-dokumentieren/templates.md)

### Request parameter

| Key        | JSON data type | Required | Description                             |
| ---------- | -------------- | -------- | --------------------------------------- |
| **object** | Integer        | Yes      | Object identifier, for example: **465** |

### Response parameter

JSON key **result** contains a JSON object.

| Key         | JSON data type | Description        |
| ----------- | -------------- | ------------------ |
| **success** | Boolean        | Should be **true** |
| **message** | String         | Some information   |

### Example

=== "Request body"

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

=== "Response body"

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

Set the Object condition as a [Mass Change](../../../../effizientes-dokumentieren/massenaenderung.md) [Template](../../../../effizientes-dokumentieren/templates.md)

### Request parameter

| Key        | JSON data type | Required | Description                             |
| ---------- | -------------- | -------- | --------------------------------------- |
| **object** | Integer        | Yes      | Object identifier, for example: **465** |

### Response parameter

JSON key **result** contains a JSON object.

| Key         | JSON data type | Description        |
| ----------- | -------------- | ------------------ |
| **success** | Boolean        | Should be **true** |
| **message** | String         | Some information   |

### Example

=== "Request body"

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

=== "Response body"

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
