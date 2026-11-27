---
title: cmdb.condition
description: "Give me all objects that have attribute Y = Z in category X. Like a report."
icon: material/api
#status: updated
lang: en
---

# cmdb.condition

!!! example "Work in Progress. **Alpha state**"

## cmdb.condition.read

Give me all objects that have attribute Y = Z in category X. Like a report.

### Request parameters

| Key                                                                  | JSON data type    | Required | Description                                                                                                        |
| -------------------------------------------------------------------- | ----------------- | -------- | ------------------------------------------------------------------------------------------------------------------ |
| **conditions**                                                       | Array             | Yes      | List of conditions; each condition is a JSON object with the following keys                                        |
| **conditions.property**                                              | String            | Yes      | Category constant and attribute key, separated by a hyphen, for example **"C__CATG__GLOBAL-title"**                |
| **conditions.comparison**                                            | String            | Yes      | `=`, `!=`, `like`, `not like`, `>`, `>=`, `<`, `<=`, `<>`                                                          |
| **conditions.value**                                                 | String or Integer | Yes      | Value to compare with, for example `C__OBJTYPE__SERVER`, `123` or `*server*` (`*` is a wildcard)                   |
| **conditions.operator** :material-flask:{ title="Work in progress" } | String            | No       | `AND` or `OR`; links this condition with the following condition. Default is `AND`. Ignored for the last condition |

### Response parameters

JSON key **result** contains an array of JSON objects, one per object matching all conditions.

| Key                   | JSON data type | Description                                                                   |
| --------------------- | -------------- | ----------------------------------------------------------------------------- |
| **id**                | String         | Object identifier (as numeric string)                                         |
| **title**             | String         | Object title                                                                  |
| **sysid**             | String         | SYSID (see category **Global**)                                               |
| **type**              | String         | Object type identifier (as numeric string)                                    |
| **created**           | String         | Date of creation; format: **Y-m-d H:i:s**                                     |
| **updated**           | String         | Date of last update; format: **Y-m-d H:i:s**                                  |
| **type_title**        | String         | Translated name of object type                                                |
| **type_icon**         | String         | URL path to object type icon                                                  |
| **type_group_title**  | String         | Translated name of object type group; may be empty                            |
| **status**            | String         | Record status of the object (as numeric string), for example **"2"** (Normal) |
| **cmdb_status**       | String         | CMDB status (see category **Global**; as numeric string)                      |
| **cmdb_status_title** | String         | Translated CMDB status (see category **Global**)                              |

### Example

=== "Request body"

    ```json
    {
      "version": "2.0",
      "method": "cmdb.condition.read",
      "params": {
        "conditions": [
          {
            "property": "C__CATG__GLOBAL-type",
            "comparison": "=",
            "value": "C__OBJTYPE__CLIENT"
          },
          {
            "property": "C__CATG__ACCOUNTING-inventory_no",
            "comparison": "like",
            "value": "*"
          }
        ],
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
          "id": "112",
          "title": "nb-bauer-01",
          "sysid": "SYSID_1794918374",
          "type": "10",
          "created": "2026-11-17 13:24:22",
          "updated": "2026-11-26 08:18:21",
          "type_title": "Client",
          "type_icon": "/cmdb/object-type/image/10?tenant_id=1",
          "type_group_title": "",
          "status": "2",
          "cmdb_status": "6",
          "cmdb_status_title": "in operation"
        }
      ]
    }
    ```

=== "Request body with operator"

    ```json
    {
      "version": "2.0",
      "method": "cmdb.condition.read",
      "params": {
        "conditions": [
          {
            "property": "C__CATG__GLOBAL-title",
            "comparison": "like",
            "value": "srv-erp*",
            "operator": "OR"
          },
          {
            "property": "C__CATG__GLOBAL-title",
            "comparison": "like",
            "value": "sw-access*"
          }
        ],
        "apikey": "xxx",
        "language": "en"
      },
      "id": 1
    }
    ```

## See also

- [API v1 Methods](index.md) — Overview of all API v1 methods
- [API Add-on](../../index.md) — Getting started with the API Add-on
- [i-doit Add-ons](../../../index.md) — All available add-ons
