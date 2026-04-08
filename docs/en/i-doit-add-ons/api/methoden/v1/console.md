---
title: console
description: "Get a list of the tenants."
icon: material/api
#status: updated
lang: en
---

!!! example "Work in Progress"

## console.tenant.list

Get a list of the tenants.

### Request parameters

| Key | JSON data type | Required | Description |
| --- | -------------- | -------- | ----------- |
| -   | -              | -        | -           |

!!! example "WIP"

    ### Response parameters

    JSON key **result** contains an array of JSON objects. Each object contains a search result.

| Key         | JSON data type | Description                  |
| ----------- | -------------- | ---------------------------- |
| **success** | Boolean        | Should always be **true**    |
| **output**  | String         | Table with available tenants |

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

## See also

- [API v1 Methods](index.md) — Overview of all API v1 methods
- [API Add-on](../../index.md) — Getting started with the API Add-on
- [i-doit Add-ons](../../../index.md) — All available add-ons
