---
title: cmdb.logbook
description: "Read access to the i-doit logbook."
icon: material/api
#status: updated
lang: en
---

!!! example "Work in Progress"

## cmdb.logbook.read

Read access to the i-doit logbook.

### Request parameters

| Key                 | JSON data type | Required | Description                                                                                                                                                                                                                                                                                                                                                                           |
| ------------------- | -------------- | -------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **id**              | Integer        | No       | ID of the global logbook entry from table isys_logbook                                                                                                                                                                                                                                                                                                                                |
| **object_id**       | Integer        | No       | ID of the object                                                                                                                                                                                                                                                                                                                                                                      |
| **logbook_catg_id** | Integer        | No       | ID of the logbook category entry (key **logbook_catg_id** in the response)                                                                                                                                                                                                                                                                                                            |
| **since**           | String         | No       | Date to filter for logbook changes since a certain date, for possible values see also [https://www.php.net/manual/de/function.strtotime.php](https://www.php.net/manual/de/function.strtotime.php){:target="_blank"} for example **1660203634** (2022-08-11 09:40:34)                                                                                                                 |
| **status**          | String         | No       | Filter by status of the objects e.g. Normal or Archived:<br>-   **C__RECORD_STATUS__BIRTH** = Unfinished<br>-   **C__RECORD_STATUS__NORMAL** = Normal<br>-   **C__RECORD_STATUS__ARCHIVED** = Archived<br>-   **C__RECORD_STATUS__DELETED** = Deleted<br>-   **C__RECORD_STATUS__TEMPLATE** = Template<br>-   **C__RECORD_STATUS__MASS_CHANGES_TEMPLATE** = Template for mass changes |
| **limit**           | Integer        | No       | Maximum number of entries, for example **100**                                                                                                                                                                                                                                                                                                                                        |

### Response parameters

JSON key **result** contains an array of JSON objects, one per logbook entry.

| Key                     | JSON data type | Description                                                                                                                                                                     |
| ----------------------- | -------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **logbook_id**          | String         | Logbook entry identifier (as numeric string)                                                                                                                                    |
| **logbook_catg_id**     | String         | Identifier of the entry in category **Logbook** (as numeric string)                                                                                                             |
| **comment**             | String or Null | Comment of the entry                                                                                                                                                            |
| **description**         | String or Null | Description of the entry                                                                                                                                                        |
| **changes**             | Object or Null | Changed attributes<br><br>Keys: DAO class and attribute, for example **"isys_cmdb_dao_category_g_global::title"**<br><br>Values: JSON objects with the keys **from** and **to** |
| **date**                | String         | Date of the entry; format: **Y-m-d H:i:s**                                                                                                                                      |
| **username**            | String         | User who caused the entry                                                                                                                                                       |
| **event**               | String         | Event constant, for example **"C__LOGBOOK_EVENT__OBJECT_CREATED"**                                                                                                              |
| **object_id**           | String         | Object identifier (as numeric string)                                                                                                                                           |
| **object_title**        | String         | Current object title                                                                                                                                                            |
| **object_title_static** | String         | Object title stored with the entry                                                                                                                                              |
| **source**              | String         | Translated source, for example **"Internal"**                                                                                                                                   |
| **source_constant**     | String         | Source constant, for example **"C__LOGBOOK_SOURCE__INTERNAL"**                                                                                                                  |
| **level_id**            | String         | Alert level identifier (as numeric string)                                                                                                                                      |

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
| **object_id**   | Integer           | No       | ID of the object; either **object_id** or **object_ids** is required |
| **object_ids**  | String or Array   | No       | List of object identifiers                                                                                                      |
| **message**     | String            | Yes      | Message for the entry                                                                                                           |
| **description** | String            | No       | Description for the entry                                                                                                       |
| **comment**     | String            | No       | Comment what has changed                                                                                                        |
| **source**      | String            | No       | Constant or ID of the source of the logbook entry from table `isys_logbook_source`.<br> Default is `C__LOGBOOK_SOURCE__EXTERNAL` |
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

### Response parameters

JSON key **result** contains a JSON object.

| Key         | JSON data type | Description                                                                                            |
| ----------- | -------------- | ------------------------------------------------------------------------------------------------------ |
| **success** | Boolean        | Should always be **true**                                                                              |
| **message** | String         | Should be **"Logbook entry/entries successfully created."**                                            |
| **id**      | Integer        | Identifier of the created logbook entry; with **object_ids**, the identifier of the last created entry |

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
