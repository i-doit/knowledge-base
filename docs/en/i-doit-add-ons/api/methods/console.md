---
title: console
description: cobject
icon: material/api
#status: updated
lang: en
---

# console

!!! example "Work in Progress"

## console.tenant.list

Get a list of the tenants.

### Request parameters

| Key | JSON data type | Required | Description |
| --- | --- | --- | --- |
| - | - | - | - |

!!! example "WIP"

    ### Response parameters

    JSON key **result** contains an array of JSON objects. Each object contains a search result.

    | Key | JSON data type | Description |
    | --- | --- | --- |
    | **Placeholder** | Placeholder | Placeholder |
    | **Placeholder** | Placeholder | Placeholder |

### Example

=== "Request body"

    ```json
    {
        "version": "2.0",
        "method": "console.tenant.list",
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
        "output": [
          "Available tenants:",
          "+----+---------------+------------------+--------------------------+----------+",
          "| ID | Title         | (host:port)      | database                 | [status] |",
          "+----+---------------+------------------+--------------------------+----------+",
          "| 1  | KnowledgeBase | (localhost:3306) | idoit_data_KnowledgeBase | active   |",
          "+----+---------------+------------------+--------------------------+----------+",
          ""
        ]
      }
    }
    ```
