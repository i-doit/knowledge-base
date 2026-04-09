---
title: cmdb.ip_search
description: "Get all Layer3 Objects (except Global v4/v6, where the IP is in the address range of the Layer3 Network)"
icon: material/api
#status: updated
lang: en
---

!!! example "Work in Progress"

## cmdb.ip_search.read

Get all Layer3 Objects (except Global v4/v6, where the IP is in the address range of the Layer3 Network)

### Request parameters

| Key    | JSON data type | Required | Description  |
| ------ | -------------- | -------- | ------------ |
| **ip** | String         | Yes      | A IP Address |

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

## See also

- [API v1 Methods](index.md) — Overview of all API v1 methods
- [API Add-on](../../index.md) — Getting started with the API Add-on
- [i-doit Add-ons](../../../index.md) — All available add-ons
