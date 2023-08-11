---
title: Namespace cmdb.category
description: cmdb.logbook
icon: material/api
status: new
lang: en
---

# Namespace cmdb.logbook

!!! example "Work in Progress"

## cmdb.logbook.read

Read access to the i-doit logbook.

### Request parameters

| Key | JSON data type | Required | Description |
| --- | --- | --- | --- |
| **id** | Integer | No | ID of the global logbook entry from table isys_logbook |
| **object_id** | Integer | No | ID of the object |
| **catg_logbook_id** | Integer | No | ID of the logbook category entry from table sys_catg_logbook_list |
| **since** | String | No | Date to filter for logbook changes since a certain date, for possible values see also [https://www.php.net/manual/de/function.strtotime.php](https://www.php.net/manual/de/function.strtotime.php){:target="_blank"} for example **1660203634** (2022-08-11 09:40:34) |
| **status** | Integer | No | Filter by object status: 2 = Normal, 3 = Archived, 4 = Deleted |

!!! example "WIP"

    ### Response parameters

    JSON key **result** contains an array of JSON objects. Each object contains a search result.

    | Key | JSON data type | Description |
    | --- | --- | --- |
    | **Placeholder** | Placeholder | Placeholder |
    | **Placeholder** | Placeholder | Placeholder |

### Example:

=== "Request body"

    ```json
    {
      "version": "2.0",
      "method": "cmdb.logbook.read",
      "params": {
        "id": 2,
        "since": "1660203634",
        "status": 2,
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
          "logbook_id": "20",
          "logbook_catg_id": "17",
          "comment": "",
          "description": "UPDATE isys_catg_global_list\n SET isys_catg_global_list__isys_purpose__id = NULL,\n            isys_catg_global_list__isys_catg_global_category__id = NULL,\n isys_catg_global_list__status = 2\n WHERE isys_catg_global_list__id = 31;",
          "changes": {
            "isys_cmdb_dao_category_g_global::title": {
              "from": "",
              "to": "Building 1"
            }
          },
          "date": "2023-08-11 09:41:16",
          "username": "admin",
          "event": "C__LOGBOOK_EVENT__CATEGORY_CHANGED",
          "object_id": "33",
          "object_title": "Building 1",
          "object_title_static": "",
          "source": "Internal",
          "source_constant": "C__LOGBOOK_SOURCE__INTERNAL",
          "level_id": "1"
        }
      ]
    }
    ```
## cmdb.logbook.create

Write a entry to the i-doit logbook.

### Request parameters

| Key | JSON data type | Required | Description |
| --- | --- | --- | --- |
| **object_id** | Integer | No | ID of the object |
| **message** | String | No | Message for the entry |
| **description** | String | No | Description for the entry |
| **comment** | String | No | Comment what has changed |
| **source** | Integer or String | No | Constant or ID of the source of the logbook entry from table `isys_logbook_source`, default is "EXTERN" |
| **alert_level** | Integer or String | Constant or ID of the alert level, from table `isys_logbook_level` |

Source:

| Title | ID | Constant |
|-|-|-|
| LC__CMDB__LOGBOOK__SOURCE__INTERNAL | 1 | C__LOGBOOK_SOURCE__INTERNAL |
| LC__CMDB__LOGBOOK__SOURCE__EXTERNAL | 2 | C__LOGBOOK_SOURCE__EXTERNAL |
| LC__CMDB__LOGBOOK__SOURCE__MANUAL_ENTRIES | 3 | C__LOGBOOK_SOURCE__USER |
| LC__CMDB__LOGBOOK__SOURCE__ALL | 4 | C__LOGBOOK_SOURCE__ALL |
| RT Ticket | 1001 | C__LOGBOOK_SOURCE__RT |
| JDisc Import | 1004 | C__LOGBOOK_SOURCE__JDISC |
| Import | 1005 | C__LOGBOOK_SOURCE__IMPORT |


Alert level:

| Title| ID | Costant |
|-|-|-|
| 0 (information)| 1 | C__LOGBOOK__ALERT_LEVEL__0 |
| 1 (low) | 2 | C__LOGBOOK__ALERT_LEVEL__1 |
| 2 (middle) | 3 | C__LOGBOOK__ALERT_LEVEL__2 |
| 3 (high) | 4 | C__LOGBOOK__ALERT_LEVEL__3 |

!!! example "WIP"

    ### Response parameters

    JSON key **result** contains an array of JSON objects. Each object contains a search result.

    | Key | JSON data type | Description |
    | --- | --- | --- |
    | **Placeholder** | Placeholder | Placeholder |
    | **Placeholder** | Placeholder | Placeholder |

### Example:

=== "Request body"

    ```json

    ```

=== "Response body"

    ```json

    ```

=== "or update Request body"

    ```json

    ```

