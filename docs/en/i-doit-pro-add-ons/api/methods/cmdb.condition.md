---
title: cmdb.condition
description: cmdb.condition
icon: material/api
#status: updated
lang: en
---

# cmdb.condition

!!! example "Work in Progress. **Alpha state**"

## cmdb.condition.read

Give me all objects that have attribute Y = Z in category X. Like a report.

### Request parameters

| Key                                                       | JSON data type | Required          | Description                                               |
| --------------------------------------------------------- | -------------- | ----------------- | --------------------------------------------------------- |
| **conditions**                                            | Array          | Yes               | Consists of the category constant + the attribute name    |
| **property**                                              | String         | Yes               | `=`, `!=`, `like`, `not like`, `>`, `>=`, `<`, `<=`, `<>` |
| **comparison**                                            | String         | String or Integer | Exmaple, `C__OBJTYPE__SERVER`, `123` or `*server*`        |
| **operator** :material-flask:{ title="Work in progress" } | Array          | Yes               | `AND` or `OR`                                             |

!!! example "WIP"

    ### Response parameters

    JSON key **result** contains an array of JSON objects. Each object contains a search result.

    | Key       | JSON data type | Description                      |
    | --------- | -------------- | -------------------------------- |
    | **key**   | String         | Attribute which relates to query |
    | **value** | String         | Value which relates to query     |

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
            },
            {
                "property": "C__CATG__GLOBAL-title",
                "comparison": "like",
                "value": "*serv*"
            }
        ],
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
          "id": "26",
          "title": "Client01",
          "sysid": "SYSID_1651224253",
          "type": "10",
          "created": "2022-04-29 11:23:47",
          "updated": "2022-04-29 11:24:53",
          "type_title": "Client",
          "type_icon": "images/icons/silk/computer.png",
          "type_group_title": null,
          "status": "2",
          "cmdb_status": "6",
          "cmdb_status_title": "in operation"
        },
        {
          "id": "27",
          "title": "Client",
          "sysid": "SYSID_1651224275",
          "type": "10",
          "created": "2022-04-29 11:24:08",
          "updated": "2022-04-29 11:24:13",
          "type_title": "Client",
          "type_icon": "images/icons/silk/computer.png",
          "type_group_title": null,
          "status": "2",
          "cmdb_status": "6",
          "cmdb_status_title": "in operation"
        },
        {
          "id": "28",
          "title": "MyClient",
          "sysid": "SYSID_1651224285",
          "type": "10",
          "created": "2022-04-29 11:24:17",
          "updated": "2022-04-29 11:24:25",
          "type_title": "Client",
          "type_icon": "images/icons/silk/computer.png",
          "type_group_title": null,
          "status": "2",
          "cmdb_status": "6",
          "cmdb_status_title": "in operation"
        }
      ]
    }
    ```
