---
title: cmdb.logbook
description: cmdb.logbook
icon: material/api
status: new
lang: en
---

# cmdb.logbook

!!! example "Work in Progress"

## cmdb.logbook.read

Read access to the i-doit logbook.

### Request parameters

| Key                 | JSON data type | Required | Description                                                                                                                                                                                                                                                                                                                                                                           |
| ------------------- | -------------- | -------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **id**              | Integer        | No       | ID of the global logbook entry from table isys_logbook                                                                                                                                                                                                                                                                                                                                |
| **object_id**       | Integer        | No       | ID of the object                                                                                                                                                                                                                                                                                                                                                                      |
| **catg_logbook_id** | Integer        | No       | ID of the logbook category entry from table sys_catg_logbook_list                                                                                                                                                                                                                                                                                                                     |
| **since**           | String         | No       | Date to filter for logbook changes since a certain date, for possible values see also [https://www.php.net/manual/de/function.strtotime.php](https://www.php.net/manual/de/function.strtotime.php){:target="_blank"} for example **1660203634** (2022-08-11 09:40:34)                                                                                                                 |
| **status**          | String         | No       | Filter by status of the objects e.g. Normal or Archived:<br>-   **C__RECORD_STATUS__BIRTH** = Unfinished<br>-   **C__RECORD_STATUS__NORMAL** = Normal<br>-   **C__RECORD_STATUS__ARCHIVED** = Archived<br>-   **C__RECORD_STATUS__DELETED** = Deleted<br>-   **C__RECORD_STATUS__TEMPLATE** = Template<br>-   **C__RECORD_STATUS__MASS_CHANGES_TEMPLATE** = Template for mass changes |

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
          "description": "UPDATE isys_catg_global_list\n SET isys_catg_global_list__isys_purpose__id = NULL,\n isys_catg_global_list__isys_catg_global_category__id = NULL,\n isys_catg_global_list__status = 2\n WHERE isys_catg_global_list__id = 31;",
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

| Key             | JSON data type    | Required | Description                                                                                                                     |
| --------------- | ----------------- | -------- | ------------------------------------------------------------------------------------------------------------------------------- |
| **object_id**   | Integer           | Yes      | ID of the object                                                                                                                |
| **object_ids**  | String or Array   | No       | List of object identifiers                                                                                                      |
| **message**     | String            | Yes      | Message for the entry                                                                                                           |
| **description** | String            | No       | Description for the entry                                                                                                       |
| **comment**     | String            | No       | Comment what has changed                                                                                                        |
| **source**      | String            | No       | Constant or ID of the source of the logbook entry from table `isys_logbook_source`.<br> Default is `C__LOGBOOK__ALERT_LEVEL__0` |
| **alert_level** | Integer or String | No       | Constant or ID of the alert level, from table `isys_logbook_level`.<br> Default is `C__LOGBOOK__ALERT_LEVEL__0`                 |

=== "Source list"

    | Title          | ID   | Constant                    |
    | -------------- | ---- | --------------------------- |
    | Internal       | 1    | C__LOGBOOK_SOURCE__INTERNAL |
    | External       | 2    | C__LOGBOOK_SOURCE__EXTERNAL |
    | Manual entries | 3    | C__LOGBOOK_SOURCE__USER     |
    | All!           | 4    | C__LOGBOOK_SOURCE__ALL      |
    | RT Ticket      | 1001 | C__LOGBOOK_SOURCE__RT       |
    | JDisc Import   | 1004 | C__LOGBOOK_SOURCE__JDISC    |
    | Import         | 1005 | C__LOGBOOK_SOURCE__IMPORT   |

=== "Alert level list"

    | Title           | ID  | Costant                    |
    | --------------- | --- | -------------------------- |
    | 0 (information) | 1   | C__LOGBOOK__ALERT_LEVEL__0 |
    | 1 (low)         | 2   | C__LOGBOOK__ALERT_LEVEL__1 |
    | 2 (middle)      | 3   | C__LOGBOOK__ALERT_LEVEL__2 |
    | 3 (high)        | 4   | C__LOGBOOK__ALERT_LEVEL__3 |

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
      "method": "cmdb.logbook.create",
      "params": {
        "object_id": 31,
        "message": "message",
        "description": "SQL Description / Log",
        "comment": "Revisional comment",
        "source": "C__LOGBOOK_SOURCE__INTERNAL",
        "alert_level": 1,
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
      "result": {
        "success": true,
        "id": 135,
        "message": "Logbook entry/entries successfully created."
      }
    }
    ```
