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

### Response parameters

JSON key **result** contains an array of JSON objects, one per layer-3 net whose address range contains the IP address. The array is empty if no net matches.

| Key             | JSON data type | Description                                              |
| --------------- | -------------- | -------------------------------------------------------- |
| **id**          | String         | Object identifier of the layer-3 net (as numeric string) |
| **title**       | String         | Object title                                             |
| **sysid**       | String         | SYSID (see category **Global**)                          |
| **cmdb_status** | String         | CMDB status (see category **Global**; as numeric string) |
| **range from**  | String         | First address of the net; the key contains a space       |
| **range to**    | String         | Last address of the net; the key contains a space        |

### Example

=== "Request body"

    ```json
    {
      "version": "2.0",
      "method": "cmdb.ip_search.read",
      "params": {
        "ip": "10.10.20.22",
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
      "result": [
        {
          "id": "41",
          "title": "Netz Server 10.10.20.0/24",
          "sysid": "SYSID_1794918107",
          "cmdb_status": "6",
          "range from": "10.10.20.1",
          "range to": "10.10.20.254"
        },
        {
          "id": "42",
          "title": "Supernetz 10.0.0.0/8",
          "sysid": "SYSID_1794918113",
          "cmdb_status": "6",
          "range from": "10.0.0.1",
          "range to": "10.255.255.254"
        }
      ]
    }
    ```

## See also

- [API v1 Methods](index.md) — Overview of all API v1 methods
- [API Add-on](../../index.md) — Getting started with the API Add-on
- [i-doit Add-ons](../../../index.md) — All available add-ons
