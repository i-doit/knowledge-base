---
title: cmdb.location_tree
description: "This method can be used to build the location tree. Always exactly one level is loaded down."
icon: material/api
#status: updated
lang: en
---

!!! example "Work in Progress"

## cmdb.location_tree

This method can be used to build the location tree. Always exactly one level is loaded down.

### Request parameters

| Key    | JSON data type | Required | Description                                  |
| ------ | -------------- | -------- | -------------------------------------------- |
| **id** | Integer        | Yes      | A location object, for example a City **31** |

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
      "method": "cmdb.location_tree",
      "params": {
        "id": 31,
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
          "id": 33,
          "title": "Building 1",
          "sysid": "SYSID_1691739706",
          "type": 3,
          "type_title": "Building",
          "status": 2,
          "cmdb_status": 6,
          "cmdb_status_title": "in operation"
        },
        {
          "id": 35,
          "title": "Building 2",
          "sysid": "SYSID_1691739718",
          "type": 3,
          "type_title": "Building",
          "status": 2,
          "cmdb_status": 6,
          "cmdb_status_title": "in operation"
        }
      ]
    }
    ```

## See also

- [API v1 Methods](index.md) — Overview of all API v1 methods
- [API Add-on](../../index.md) — Getting started with the API Add-on
- [i-doit Add-ons](../../../index.md) — All available add-ons
