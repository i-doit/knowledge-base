---
title: Namespace cmdb.contact
description: cmdb.contact
icon: material/api
status: new
lang: en
---

# Namespace cmdb.contact

## cmdb.contact.read

Retrieves all assigned objects by contact.

### Request parameters

| Key | JSON data type | Required | Description |
| --- | --- | --- | --- |
| **method** | String | only "assigned_objects_by_contact" available|
| **filter** | Object | Yes | By `email` String or `id` Integer |

!!! example "WIP"

    ### Response parameters

    JSON key **result** contains an array of JSON objects. Each object contains a search result.

    | Key | JSON data type | Description |
    | --- | --- | --- |
    | **key** | String | Attribute which relates to query |
    | **value** | String | Value which relates to query |

### Example:

=== "Request body"

    ```json
    {
      "version": "2.0",
      "method": "cmdb.contact.read",
      "params": {
        "method": "assigned_objects_by_contact",
        "filter": {
          "id": 9
        },
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
        "1122742661": {
          "id": "55",
          "title": "CareBear Power Server",
          "sysid": "SYSID_2807233812",
          "type": "5",
          "type_title": "Server",
          "primary": "No",
          "role": "Administrator"
            }
        }
    }
    ```

