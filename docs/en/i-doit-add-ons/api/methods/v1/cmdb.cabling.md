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

### Response parameters

JSON key **result** contains a JSON object with the keys **start** and **end**, one for each end of the cable.

| Key                             | JSON data type | Description                                                                    |
| ------------------------------- | -------------- | ------------------------------------------------------------------------------ |
| **start**                       | Object or Null | Connector at one end of the cable; **null** if this end is not connected       |
| **end**                         | Object or Null | Connector at the other end of the cable; **null** if this end is not connected |
| **start.presentation**          | String         | Object title and connector title, for example **"server11 > server_output11"** |
| **start.connector.id**          | Integer        | Identifier of the connector                                                    |
| **start.connector.title**       | String         | Connector title                                                                |
| **start.connector.type**        | String         | Category constant of the connector, for example **"C__CATG__CONNECTOR"**       |
| **start.connector.inOutput**    | String         | Direction of the connector, for example **"Input"** or **"Output"**            |
| **start.ciObject.id**           | Integer        | Identifier of the object the connector belongs to                              |
| **start.ciObject.title**        | String         | Object title                                                                   |
| **start.ciObject.type**         | String         | Translated name of object type                                                 |
| **start.ciObject.typeConstant** | String         | Object type constant, for example **"C__OBJTYPE__SERVER"**                     |

Key **end** has the same structure as key **start**.

### Example

=== "Request body"

    ```json
    {
        "jsonrpc": "2.0",
        "method": "cmdb.cabling.read",
        "id": 1,
        "params": {
            "objID": 2821,
            "apikey": "h3md6u3y"
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
