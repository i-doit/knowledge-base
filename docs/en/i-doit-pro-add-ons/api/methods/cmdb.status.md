---
title: Namespace cmdb.status
description: cmdb.status
icon: material/api
#status: updated
lang: en
---

# Namespace cmdb.status

!!! example "Work in Progress"

## cmdb.status.read

Read all available states.

### Request parameters

| Key | JSON data type | Required | Description |
| --- | -------------- | -------- | ----------- |
| -   | -              | -        | -           |

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
          "color": "EFAA43",
          "editable": true
        },
        {
          "id": 2,
          "title": "ordered",
          "constant": "C__CMDB_STATUS__ORDERED",
          "color": "838683",
          "editable": true
        },
        {
          "id": 3,
          "title": "delivered",
          "constant": "C__CMDB_STATUS__DELIVERED",
          "color": "DDECD5",
          "editable": true
        },
        {
          "id": 4,
          "title": "assembled",
          "constant": "C__CMDB_STATUS__ASSEMBLED",
          "color": "C6DFB9",
          "editable": true
        },
        {
          "id": 5,
          "title": "tested",
          "constant": "C__CMDB_STATUS__TESTED",
          "color": "95C47C",
          "editable": true
        },
        {
          "id": 6,
          "title": "in operation",
          "constant": "C__CMDB_STATUS__IN_OPERATION",
          "color": "33C20A",
          "editable": false
        },
        {
          "id": 7,
          "title": "defect",
          "constant": "C__CMDB_STATUS__DEFECT",
          "color": "BC0A19",
          "editable": true
        },
        {
          "id": 8,
          "title": "under repair",
          "constant": "C__CMDB_STATUS__UNDER_REPAIR",
          "color": "F990BE",
          "editable": true
        },
        {
          "id": 9,
          "title": "delivered from repair",
          "constant": "C__CMDB_STATUS__DELIVERED_FROM_REPAIR",
          "color": "F3EF15",
          "editable": true
        },
        {
          "id": 10,
          "title": "inoperative",
          "constant": "C__CMDB_STATUS__INOPERATIVE",
          "color": "FF0000",
          "editable": false
        },
        {
          "id": 11,
          "title": "stored",
          "constant": "C__CMDB_STATUS__STORED",
          "color": "A2BCFA",
          "editable": true
        },
        {
          "id": 12,
          "title": "scrapped",
          "constant": "C__CMDB_STATUS__SCRAPPED",
          "color": "082B9A",
          "editable": true
        },
        {
          "id": 13,
          "title": "i-doit Status",
          "constant": "C__CMDB_STATUS__IDOIT_STATUS",
          "color": "AAAAAA",
          "editable": false
        },
        {
          "id": 14,
          "title": "Template",
          "constant": "C__CMDB_STATUS__IDOIT_STATUS_TEMPLATE",
          "color": "CCCCCC",
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
