---
title: Namespace cmdb.object_type_groups
description: cmdb.object_type_groups
icon: material/api
status: new
lang: en
---

# Namespace cmdb.object_type_groups

!!! example "Work in Progress"

## cmdb.object_type_groups

Read object type groups.

### Request parameters

| Key              | JSON data type | Required | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 |
| ---------------- | -------------- | -------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **filter**       | Array          | No       | Filter list of objects; see below for a full list of options                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
| **limit**        | Mixed          | No       | Maximum amount of objects (as integer), for example, fetch the first thousand of objects: **1000**<br><br>Combine this limit with an offset (as string), for example, fetch the next thousand of objects: **"1000,1000"**                                                                                                                                                                                                                                                                                                                                                   |
| **sort**         | String         | No       | Only useful in combination with key **order_by**; allowed values are either **"ASC"** (ascending) or **"DESC"** (descending)                                                                                                                                                                                                                                                                                                                                                                                                                                                |
| **order_by**     | String         | No       | Order result set by (see filter for more details what each value means):<br><br>- **"isys_obj_type__id"**,<br>- **"isys_obj__isys_obj_type__id"**,<br>- **"type"**,<br>- **"isys_obj__title"**,<br>- **"title"**,<br>- **"isys_obj_type__title"**,<br>- **"type_title"**,<br>- **"isys_obj__sysid"**,<br>- **"sysid"**,<br>- **"isys_cats_person_list__first_name"**,<br>- **"first_name"**,<br>- **"isys_cats_person_list__last_name"**,<br>- **"last_name"**,<br>- **"isys_cats_person_list__mail_address"**,<br>- **"email"**,<br>- **"isys_obj__id"**, or<br>- **"id"** |
| **raw**          | Boolean        | No       | Displayed raw formatting, see example.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      |

### Filter

| Key         | JSON data type | Required | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       |
| ----------- | -------------- | -------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **id**      | Integer        | No       | Object ID                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         |
| **ids**     | Array          | No       | List of object identifiers (as integers), for example: **[1, 2, 3]**                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              |
| **title**   | String         | No       | Object title (see attribute **Title** in category **Global**), for example: **"My little server"**                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
| **titles**  | Array          | No       | List of Object titles (see attribute **Title** in category **Global**), for example: **["My little server",My little horse]**                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     |

You can use any combination of filters. Filters are logically associated with AND. A valid combination could be: "Give me all servers which have the same hostname."

!!! example "WIP"

    ### Response parameters

    JSON key **result** contains an array of JSON objects. Each object contains a search result.

    | Key             | JSON data type | Description |
    | --------------- | -------------- | ----------- |
    | **Placeholder** | Placeholder    | Placeholder |
    | **Placeholder** | Placeholder    | Placeholder |

### Example:

=== "Request body"

    ```json
    {
      "version": "2.0",
      "method": "cmdb.object_type_groups",
      "params": {
        "filter": {
          "ids": [1,2,3,4,1000]
        },
        "raw": false,
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
          "id": "1",
          "title": "Software",
          "const": "C__OBJTYPE_GROUP__SOFTWARE",
          "status": "2"
        },
        {
          "id": "2",
          "title": "Infrastructure",
          "const": "C__OBJTYPE_GROUP__INFRASTRUCTURE",
          "status": "2"
        },
        {
          "id": "3",
          "title": "Other",
          "const": "C__OBJTYPE_GROUP__OTHER",
          "status": "2"
        },
        {
          "id": "4",
          "title": "Orphaned object types",
          "const": "C__OBJTYPE_GROUP__ORPHANED",
          "status": "2"
        },
        {
          "id": "1000",
          "title": "Contact",
          "const": "C__OBJTYPE_GROUP__CONTACT",
          "status": "2"
        }
      ]
    }
    ```