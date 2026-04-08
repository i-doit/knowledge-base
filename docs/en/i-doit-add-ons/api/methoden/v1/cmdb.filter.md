---
title: cmdb.filter
description: "For example, get all objects with {Attribute} and {Attribute} which where updated in a specific time frame."
icon: material/api
#status: updated
lang: en
---

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

## See also

- [API v1 Methods](index.md) — Overview of all API v1 methods
- [API Add-on](../../index.md) — Getting started with the API Add-on
- [i-doit Add-ons](../../../index.md) — All available add-ons
