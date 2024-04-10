---
title: Namespace cmdb.filter
description: cmdb.filter
icon: material/api
#status: updated
lang: en
---

# Namespace cmdb.filter

!!! example "Work in Progress. **Alpha state**"

## cmdb.filter.read

For example, get all objects with {Attribute} and {Attribute} which where updated in a specific time frame.

### Request parameters

| Key     | JSON data type | Required | Description                                |
| ------- | -------------- | -------- | ------------------------------------------ |
| **Key** | String         | Yes      | Query, for example: **"My little server"** |

### Response parameters

JSON key **result** contains an array of JSON objects. Each object contains a search result.

| Key       | JSON data type | Description                      |
| --------- | -------------- | -------------------------------- |
| **key**   | String         | Attribute which relates to query |
| **value** | String         | Value which relates to query     |

### Example

=== "Request body"

    ```json
    {
        "version": "2.0",
        "method": "cmdb.filter.read",
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
        "jsonrpc": "2.0",
        "result": [],
        "id": 1
    }
    ```
