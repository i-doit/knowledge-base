---
title: cmdb.cabling
description: "Dieser Endpunkt ruft Informationen darüber ab, welcher Konnektor mit einem Kabelobjekt verbunden ist."
icon: material/api
#status: updated
lang: de
---

# Namespace cmdb.cabling

!!! example "In Arbeit"

## cmdb.cabling.read

Dieser Endpunkt ruft Informationen darüber ab, welcher Konnektor mit einem Kabelobjekt verbunden ist.

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

## Siehe auch

- [API v1 Methoden](index.md) — Übersicht aller API v1 Methoden
- [API Add-on](../../index.md) — Einstieg in das API Add-on
- [i-doit Add-ons](../../../index.md) — Alle verfügbaren Add-ons
