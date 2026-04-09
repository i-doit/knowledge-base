---
title: cmdb.cabling
description: "This endpoint retrieves information about which connector is connected to a cable object."
icon: material/api
#status: updated
lang: en
---

# Namespace cmdb.cabling

!!! example "Work in Progress"

## cmdb.cabling.read

This endpoint retrieves information about which connector is connected to a cable object.

### Request parameters

| Key       | JSON data type | Required | Description      |
| --------- | -------------- | -------- | ---------------- |
| **objID** | Integer        | Yes      | ID of the object |

!!! example "WIP"

    ### Response parameters

    JSON key **result** contains an array of JSON objects. Each object contains a search result.

    | Key       | JSON data type | Description                                             |
    | --------- | -------------- | ------------------------------------------------------- |
    | **start** | Object         | Represents the starting point of the wiring connection. |
    | **end**   | Object         | Represents the starting point of the wiring connection. |

### Example

=== "Request body"

    ```json
    {
        "jsonrpc": "2.0",
        "method": "cmdb.cabling.read",
        "id": 1,
        "params": {
            "objID": 2821,
            "apikey": [{api-key}]
        }
    }
    ```

=== "Response body"

    ```json
    {
        "id": 1,
        "jsonrpc": "2.0",
        "result": {
            "start": {
                "presentation": "server11 > server_output11",
                "connector": {
                    "id": 2,
                    "title": "server_output11",
                    "type": "C__CATG__CONNECTOR",
                    "inOutput": "Output"
                },
                "ciObject": {
                    "id": 162,
                    "title": "server11",
                    "type": "Server",
                    "typeConstant": "C__OBJTYPE__SERVER"
                }
            },
            "end": {
                "presentation": "switch_classic > input_switch11",
                "connector": {
                    "id": 3,
                    "title": "input_switch11",
                    "type": "C__CATG__CONNECTOR",
                    "inOutput": "Input"
                },
                "ciObject": {
                    "id": 172,
                    "title": "switch_classic",
                    "type": "Switch",
                    "typeConstant": "C__OBJTYPE__SWITCH"
                }
            }
        }
    }
    ```

## See also

- [API v1 Methods](index.md) — Overview of all API v1 methods
- [API Add-on](../../index.md) — Getting started with the API Add-on
- [i-doit Add-ons](../../../index.md) — All available add-ons
