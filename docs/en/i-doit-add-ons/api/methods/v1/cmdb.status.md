---
title: cmdb.status
description: "Read all available states."
icon: material/api
#status: updated
lang: en
---

!!! example "Work in Progress"

## cmdb.status.read

Read all available states.

### Request parameters

| Key | JSON data type | Required | Description |
| --- | -------------- | -------- | ----------- |
| -   | -              | -        | -           |

### Response parameters

JSON key **result** contains an array of JSON objects, one per CMDB status.

| Key          | JSON data type | Description                                                        |
| ------------ | -------------- | ------------------------------------------------------------------ |
| **id**       | Integer        | Identifier of the CMDB status                                      |
| **title**    | String         | Translated title of the CMDB status                                |
| **constant** | String         | Constant of the CMDB status                                        |
| **color**    | String         | Color as stored: six hex characters, with or without leading **#** |
| **editable** | Boolean        | **true** if the CMDB status can be edited                          |

### Example

=== "Request body"

    ```json
    {
      "version": "2.0",
      "method": "cmdb.status.read",
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
      "result": [
        {
          "id": 1,
          "title": "planned",
          "constant": "C__CMDB_STATUS__PLANNED",
          "color": "#efaa43",
          "editable": true
        },
        {
          "id": 15,
          "title": "In disposal",
          "constant": "C__CMDB_STATUS__IN_DISPOSAL",
          "color": "999999",
          "editable": false
        }
      ]
    }
    ```

## cmdb.status.save

Create new or save existing state.

### Request parameters

| Key          | JSON data type | Required | Description                                            |
| ------------ | -------------- | -------- | ------------------------------------------------------ |
| **title**    | String         | Yes      | Status title                                           |
| **constant** | String         | Yes      | Status constant                                        |
| **color**    | String         | Yes      | Color in hex without leading `#`, for example `FF0000` |
| **id**       | Integer        | No       | Identifier of an existing status to update; without **id**, a new status is created |

### Response parameters

JSON key **result** contains a JSON object.

| Key         | JSON data type | Description                                      |
| ----------- | -------------- | ------------------------------------------------ |
| **success** | Boolean        | Should always be **true**                        |
| **message** | String         | **"Status created"** or **"Status updated"**     |
| **id**      | Integer        | Identifier of the created or updated CMDB status |

### Example

=== "Request body"

    ```json
    {
      "version": "2.0",
      "method": "cmdb.status.save",
      "params": {
        "title": "MyOwn",
        "constant": "C__CMDB__STATUS__MYOWN",
        "color": "FF0000",
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
        "message": "Status created",
        "id": 15
      }
    }
    ```

=== "or update Request body"

    ```json
    {
      "version": "2.0",
      "method": "cmdb.status.save",
      "params": {
        "id": 15,
        "title": "MyOwn",
        "constant": "C__CMDB__STATUS__MYOWN",
        "color": "0000ff",
        "apikey": "xxx",
        "language": "en"
      },
      "id": 1
    }
    ```

## cmdb.status.delete

Purge a state.

### Request parameters

| Key    | JSON data type | Required | Description           |
| ------ | -------------- | -------- | --------------------- |
| **id** | Integer        | Yes      | ID of the CMDB Status |

### Response parameters

JSON key **result** contains a JSON object.

| Key         | JSON data type | Description                   |
| ----------- | -------------- | ----------------------------- |
| **success** | Boolean        | Should always be **true**     |
| **message** | String         | Should be **"Status purged"** |

### Example

=== "Request body"

    ```json
    {
      "version": "2.0",
      "method": "cmdb.status.delete",
      "params": {
        "id": 15,
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
        "message": "Status purged"
      }
    }
    ```

## See also

- [API v1 Methods](index.md) — Overview of all API v1 methods
- [API Add-on](../../index.md) — Getting started with the API Add-on
- [i-doit Add-ons](../../../index.md) — All available add-ons
