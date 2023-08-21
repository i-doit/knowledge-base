---
title: cmdb.ip_search
description: cmdb.ip_search
icon: material/api
status: new
lang: en
---

# cmdb.ip_search

!!! example "Work in Progress"

## cmdb.ip_search.read

Get all Layer3 Objects (except Global v4/v6, where the IP is in the address range of the Layer3 Network)

### Request parameters

| Key             | JSON data type | Required | Description |
| --------------- | -------------- | -------- | ----------- |
| **ip** | String    | Yes      | A IP Address |

!!! example "WIP"

    ### Response parameters

    JSON key **result** contains an array of JSON objects. Each object contains a search result.

    | Key             | JSON data type | Description |
    | --------------- | -------------- | ----------- |
    | **Placeholder** | Placeholder    | Placeholder |
    | **Placeholder** | Placeholder    | Placeholder |

### Example:

=== "Request body"

    ```json
    {
      "version": "2.0",
      "method": "cmdb.ip_search.read",
      "params": {
        "ip": "10.10.0.1",
        "apikey": "h3md6u3y",
        "language": "en"
      },
      "id": 1
    }
    ```

=== "Response body"

    ```json
    Placeholder
    ```

