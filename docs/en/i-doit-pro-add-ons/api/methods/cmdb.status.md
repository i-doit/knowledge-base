---
title: Namespace cmdb.object
description: cmdb.object
icon: material/api
status: new
lang: en
---

# Namespace cmdb.ststus

!!! example "Work in Progress"

### Request parameters

| Key | JSON data type | Required | Description |
| --- | --- | --- | --- |
| **Placeholder** | Placeholder | Yes | Placeholder |

!!! example "WIP"

    ### Response parameters

    JSON key **result** contains an array of JSON objects. Each object contains a search result.

    | Key | JSON data type | Description |
    | --- | --- | --- |
    | **Placeholder** | Placeholder | Placeholder |
    | **Placeholder** | Placeholder | Placeholder |

### Example:

=== "Request body"

    ```json
    {
      "version": "2.0",
      "method": "cmdb.status",
      "params": {
        "id": 1,
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

=== "or update Request body"

    ```json

    ```

