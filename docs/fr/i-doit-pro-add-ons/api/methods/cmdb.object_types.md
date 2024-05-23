---
title: cmdb.object_types
description: cmdb.object_types
icon: material/api
#status: updated
lang: en
---

# cmdb.object_types

!!! example "Work in Progress"

## cmdb.object_types

Read objects type configurations.

### Request parameters

| Key              | JSON data type | Required | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 |
| ---------------- | -------------- | -------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **countobjects** | Boolean        | No       | Display object counter                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      |
| **filter**       | Array          | No       | Filter list of objects; see below for a full list of options                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
| **limit**        | Mixed          | No       | Maximum amount of objects (as integer), for example, fetch the first thousand of objects: **1000**<br><br>Combine this limit with an offset (as string), for example, fetch the next thousand of objects: **"1000,1000"**                                                                                                                                                                                                                                                                                                                                                   |
| **sort**         | String         | No       | Only useful in combination with key **order_by**; allowed values are either **"ASC"** (ascending) or **"DESC"** (descending)                                                                                                                                                                                                                                                                                                                                                                                                                                                |
| **order_by**     | String         | No       | Order result set by (see filter for more details what each value means):<br><br>- **"isys_obj_type__id"**,<br>- **"isys_obj__isys_obj_type__id"**,<br>- **"type"**,<br>- **"isys_obj__title"**,<br>- **"title"**,<br>- **"isys_obj_type__title"**,<br>- **"type_title"**,<br>- **"isys_obj__sysid"**,<br>- **"sysid"**,<br>- **"isys_cats_person_list__first_name"**,<br>- **"first_name"**,<br>- **"isys_cats_person_list__last_name"**,<br>- **"last_name"**,<br>- **"isys_cats_person_list__mail_address"**,<br>- **"email"**,<br>- **"isys_obj__id"**, or<br>- **"id"** |
| **raw**          | Boolean        | No       | Displayed raw formatting, see example.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      |

### Filter

| Key         | JSON data type | Required | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       |
| ----------- | -------------- | -------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **id**      | Integer        | No       | Object type id or Object type constant                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        |
| **ids**     | Array          | No       | List of object type identifiers (as integers), for example: **[1, 2, 3]**                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              |
| **title**   | String         | No       | Object type language constant, for example: `LC__CMDB__OBJTYPE__SERVER` for Server                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        |
| **titles**  | Array          | No       | List of Object type language constants, for example: `["LC__CMDB__OBJTYPE__SERVER","LC__CMDB__OBJTYPE__CLIENT"]`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    |
| **enabled** | Boolean        | No       | Show only object types enabled or disabled in GUI                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 |

You can use any combination of filters.

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
      "method": "cmdb.object_types",
      "params": {
        "filter": {
          "id": 5
        },
        "countobjects": true,
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
          "id": "5",
          "title": "Server",
          "container": "0",
          "const": "C__OBJTYPE__SERVER",
          "color": "A2BCFA",
          "image": "http://10.10.60.64/testinstance/images/objecttypes/server.png",
          "icon": "images/axialis/hardware-network/server-single.svg",
          "tree_group": "2",
          "status": "2",
          "type_group": "2",
          "type_group_title": "Infrastructure",
          "objectcount": "1"
        }
      ]
    }
    ```

=== "Response body with RAW"
    ```json
    {
      "id": 1,
      "jsonrpc": "2.0",
      "result": [
        {
          "isys_obj_type__id": "5",
          "isys_obj_type__isys_obj_type_group__id": "2",
          "isys_obj_type__isysgui_cats__id": null,
          "isys_obj_type__default_template": null,
          "isys_obj_type__title": "LC__CMDB__OBJTYPE__SERVER",
          "isys_obj_type__description": "",
          "isys_obj_type__selfdefined": "0",
          "isys_obj_type__container": "0",
          "isys_obj_type__idoit_obj_type_number": "",
          "isys_obj_type__obj_img_name": "server.png",
          "isys_obj_type__icon": "images/axialis/hardware-network/server-single.svg",
          "isys_obj_type__const": "C__OBJTYPE__SERVER",
          "isys_obj_type__sort": "40",
          "isys_obj_type__property": "0",
          "isys_obj_type__status": "2",
          "isys_obj_type__show_in_tree": "1",
          "isys_obj_type__show_in_rack": "1",
          "isys_obj_type__overview": "1",
          "isys_obj_type__color": "A2BCFA",
          "isys_obj_type__class_name": "isys_cmdb_dao_list_objects",
          "isys_obj_type__sysid_prefix": null,
          "isys_obj_type__relation_master": "0",
          "isys_obj_type__isys_jdisc_profile__id": null,
          "isys_obj_type__use_template_title": "0",
          "isys_obj_type_group__id": "2",
          "isys_obj_type_group__title": "LC__CMDB__OBJTYPE_GROUP__INFRASTRUCTURE",
          "isys_obj_type_group__description": null,
          "isys_obj_type_group__const": "C__OBJTYPE_GROUP__INFRASTRUCTURE",
          "isys_obj_type_group__sort": "2",
          "isys_obj_type_group__property": "1",
          "isys_obj_type_group__status": "2"
        }
      ]
    }
    ```
