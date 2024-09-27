---
title: addons
description: Here you find API methods from Add-ons
icon: material/api
#status: updated
lang: en
---

# addons

!!! example "Work in Progress"

## analysis.dataquality.read

### Request parameters

| Key | JSON data typ | Required | Description |
| --- | --- | --- | --- |
| **profileId** | Integer | Yes | Profile identifier, for example: 1 |

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
      "method": "analysis.dataquality.read",
      "params": {
        "profileId": 1,
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
        "objects": [],
        "averagePercent": 0
      }
    }
    ```
